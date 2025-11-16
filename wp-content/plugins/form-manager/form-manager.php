<?php
/*
Plugin Name: Form Manager
Description: View, export and delete custom form submissions (contact_form & subscribe_mail).
Version: 1.1
Author: Your Name
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Activation: create tables if not exist
 */
register_activation_hook( __FILE__, 'fm_create_tables_on_activation' );
function fm_create_tables_on_activation() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();

    $main_table = $wpdb->prefix . 'contact_form';
    $subscribe_table = $wpdb->prefix . 'subscribe_mail';

    $sql1 = "CREATE TABLE IF NOT EXISTS {$main_table} (
        id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        full_name VARCHAR(255) DEFAULT '' NOT NULL,
        email VARCHAR(255) DEFAULT '' NOT NULL,
        phone VARCHAR(255) DEFAULT '' NOT NULL,
        company_name VARCHAR(255) DEFAULT '' NOT NULL,
        company_website VARCHAR(255) DEFAULT '' NOT NULL,
        service VARCHAR(255) DEFAULT '' NOT NULL,
        message TEXT,
        submitted_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id)
    ) {$charset_collate};";

    $sql2 = "CREATE TABLE IF NOT EXISTS {$subscribe_table} (
        id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        email VARCHAR(255) DEFAULT '' NOT NULL,
        submitted_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id)
    ) {$charset_collate};";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql1 );
    dbDelta( $sql2 );
}

/**
 * Add admin menu
 */
add_action( 'admin_menu', 'fm_add_admin_menu' );
function fm_add_admin_menu() {
    add_menu_page(
        'Form Entries',
        'Form Entries',
        'manage_options',
        'form-entries',
        'fm_render_admin_page',
        'dashicons-forms',
        26
    );
}

/**
 * Enqueue simple admin styles
 */
add_action( 'admin_enqueue_scripts', 'fm_admin_styles' );
function fm_admin_styles($hook) {
    if ( $hook !== 'toplevel_page_form-entries' ) return;
    wp_enqueue_style( 'fm-admin-css', plugins_url( 'fm-admin.css', __FILE__ ) );
}

/**
 * Render admin page: list entries, export CSV, delete
 */
function fm_render_admin_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( 'Unauthorized' );
    }

    global $wpdb;
    // use contact_form (the table you created)
    $table = $wpdb->prefix . 'contact_form';

    // ---------- Handle single delete (GET) ----------
    if ( isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id']) ) {
        $id = intval( $_GET['id'] );
        if ( check_admin_referer( 'fm_delete_entry_' . $id ) ) {
            $wpdb->delete( $table, array( 'id' => $id ), array( '%d' ) );
            echo '<div class="updated"><p>Entry deleted.</p></div>';
        } else {
            echo '<div class="error"><p>Nonce check failed.</p></div>';
        }
    }

    // ---------- Handle bulk delete (POST) ----------
    if ( isset($_POST['fm_bulk_action']) && $_POST['fm_bulk_action'] === 'delete' && ! empty( $_POST['fm_selected'] ) ) {
        if ( ! check_admin_referer( 'fm_bulk_action', 'fm_bulk_nonce' ) ) {
            echo '<div class="error"><p>Nonce check failed.</p></div>';
        } else {
            $ids = array_map( 'intval', $_POST['fm_selected'] );
            if ( ! empty( $ids ) ) {
                // safe implode since values are ints
                $id_list = implode( ',', $ids );
                $wpdb->query( "DELETE FROM {$table} WHERE id IN ({$id_list})" );
                echo '<div class="updated"><p>Selected entries deleted.</p></div>';
            }
        }
    }

    // ---------- Handle export CSV (GET) ----------
    if ( isset($_GET['export']) && $_GET['export'] === 'csv' ) {
        // check nonce passed via hidden field (GET form includes the nonce field)
        if ( ! isset( $_REQUEST['_wpnonce'] ) || ! wp_verify_nonce( $_REQUEST['_wpnonce'], 'fm_export_csv' ) ) {
            wp_die( 'Nonce check failed.' );
        }
        $rows = $wpdb->get_results( "SELECT * FROM {$table} ORDER BY submitted_at DESC", ARRAY_A );
        if ( empty( $rows ) ) {
            wp_die( 'No entries to export.' );
        }

        // Send CSV headers
        $filename = 'form_entries_' . date( 'Y-m-d_H-i' ) . '.csv';
        header( 'Content-Type: text/csv; charset=utf-8' );
        header( 'Content-Disposition: attachment; filename=' . $filename );
        $output = fopen( 'php://output', 'w' );
        // Header row
        fputcsv( $output, array( 'ID', 'Full Name', 'Email', 'Phone', 'Company', 'Website', 'Service', 'Message', 'Submitted At' ) );
        foreach ( $rows as $row ) {
            fputcsv( $output, array(
                $row['id'],
                $row['full_name'],
                $row['email'],
                $row['phone'],
                $row['company_name'],
                $row['company_website'],
                $row['service'],
                $row['message'],
                $row['submitted_at']
            ) );
        }
        fclose( $output );
        exit;
    }

    // ---------- Pagination settings ----------
    $per_page = 20;
    $paged = isset($_GET['paged']) ? max(1, intval($_GET['paged'])) : 1;
    $offset = ($paged - 1) * $per_page;

    // Make sure table exists before querying
    $table_exists = $wpdb->get_var( $wpdb->prepare( "SHOW TABLES LIKE %s", $wpdb->esc_like( $wpdb->prefix . 'contact_form' ) ) );
    if ( ! $table_exists ) {
        echo '<div class="notice notice-warning"><p>Table <strong>' . esc_html( $wpdb->prefix . 'contact_form' ) . '</strong> does not exist. Please ensure your front-end script inserts into this table or reactivate the plugin to create it.</p></div>';
        // early return to avoid errors
        return;
    }

    $total_items = intval( $wpdb->get_var( "SELECT COUNT(*) FROM {$table}" ) );
    $rows = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM {$table} ORDER BY submitted_at DESC LIMIT %d OFFSET %d", $per_page, $offset ), ARRAY_A );

    // Admin page HTML
    ?>
    <div class="wrap">
        <h1 class="wp-heading-inline">Form Entries</h1>

        <form method="get" style="display:inline-block; margin-left:15px;">
            <input type="hidden" name="page" value="form-entries" />
            <?php wp_nonce_field( 'fm_export_csv' ); ?>
            <button class="button button-primary" name="export" value="csv">Export to CSV</button>
        </form>

        <form method="post" id="fm_list_form">
            <?php wp_nonce_field( 'fm_bulk_action', 'fm_bulk_nonce' ); ?>

            <div style="margin-top: 15px; margin-bottom:10px;">
                <select name="fm_bulk_action">
                    <option value="">Bulk actions</option>
                    <option value="delete">Delete selected</option>
                </select>
                <button type="submit" class="button">Apply</button>
            </div>

            <table class="wp-list-table widefat fixed striped">
                <thead>
                    <tr>
                        <th style="width:30px;"><input type="checkbox" id="fm_select_all" /></th>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Company</th>
                        <th>Website</th>
                        <th>Service</th>
                        <th>Message</th>
                        <th>Submitted At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ( empty( $rows ) ) : ?>
                    <tr><td colspan="11">No entries found.</td></tr>
                <?php else : ?>
                    <?php foreach ( $rows as $row ) : ?>
                        <tr>
                            <td><input type="checkbox" name="fm_selected[]" value="<?php echo esc_attr( $row['id'] ); ?>" class="fm_select" /></td>
                            <td><?php echo esc_html( $row['id'] ); ?></td>
                            <td><?php echo esc_html( $row['full_name'] ); ?></td>
                            <td><?php echo esc_html( $row['email'] ); ?></td>
                            <td><?php echo esc_html( $row['phone'] ); ?></td>
                            <td><?php echo esc_html( $row['company_name'] ); ?></td>
                            <td><?php echo esc_url( $row['company_website'] ); ?></td>
                            <td><?php echo esc_html( $row['service'] ); ?></td>
                            <td><?php echo esc_html( wp_trim_words( $row['message'], 20, '...' ) ); ?></td>
                            <td><?php echo esc_html( $row['submitted_at'] ); ?></td>
                            <td>
                                <?php
                                $delete_url = wp_nonce_url( add_query_arg( array( 'page' => 'form-entries', 'action' => 'delete', 'id' => $row['id'] ) ), 'fm_delete_entry_' . $row['id'] );
                                ?>
                                <a href="<?php echo esc_url( $delete_url ); ?>" onclick="return confirm('Delete this entry?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </form>

        <?php
        // Pagination links
        $total_pages = ( $per_page > 0 ) ? ceil( $total_items / $per_page ) : 1;
        if ( $total_pages > 1 ) {
            $base_url = admin_url( 'admin.php?page=form-entries' );
            echo '<div class="tablenav"><div class="tablenav-pages">';
            for ( $i = 1; $i <= $total_pages; $i++ ) {
                if ( $i == $paged ) {
                    echo '<span class="page-numbers current">' . $i . '</span> ';
                } else {
                    echo '<a class="page-numbers" href="' . esc_url( add_query_arg( 'paged', $i, $base_url ) ) . '">' . $i . '</a> ';
                }
            }
            echo '</div></div>';
        }
        ?>

    </div>

    <script>
    (function(){
        // select all checkbox
        var selectAll = document.getElementById('fm_select_all');
        if ( selectAll ) {
            selectAll.addEventListener('change', function(){
                var checked = this.checked;
                var boxes = document.querySelectorAll('.fm_select');
                boxes.forEach(function(b){ b.checked = checked; });
            });
        }
    })();
    </script>
    <?php
}
