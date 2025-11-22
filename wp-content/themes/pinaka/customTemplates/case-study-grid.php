<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$cat   = isset($_POST['category']) ? sanitize_text_field($_POST['category']) : '';

$args = [
    'post_type'      => 'case_study',
    'posts_per_page' => 10,
    'paged'          => $paged,
    'post_status'    => 'publish',
];

if (!empty($cat)) {
    $args['tax_query'] = [
        [
            'taxonomy' => 'case_study_category',
            'field'    => 'slug',
            'terms'    => $cat,
        ]
    ];
}

$query = new WP_Query($args);

if ($query->have_posts()) :
    echo '<div class="caseGridBox">';
    while ($query->have_posts()) : $query->the_post();
        $image_id  = get_field('service_thumbnail_image', get_the_ID());
        $image_url = wp_get_attachment_image_url($image_id, 'full');
        $excerpt   = get_the_excerpt();
        $terms     = get_the_terms(get_the_ID(), 'case_study_category');
        ?>
        <div class="box" id="<?php echo sanitize_title_with_dashes($terms[0]->slug); ?>">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo esc_url($image_url ?: THEMEURL.'/app/images/rectPlace.png'); ?>" alt="<?php the_title_attribute(); ?>" class="img-full case-img">
            </a>
            <div class="case-study-info">
                <?php if ($terms && !is_wp_error($terms)) : ?>
                    <p class="case-category"><?php echo esc_html($terms[0]->name); ?></p>
                <?php endif; ?>
                <p class="case-title"><?php the_title(); ?></p>
                <p class="abstract"><?php echo wp_trim_words($excerpt, 15, '...'); ?></p>
                <a href="<?php the_permalink(); ?>" class="white-btn read-more">
                    Read More
                </a>
            </div>
        </div>
        <?php
    endwhile;
    echo '</div>';

    // echo '<div class="pagination text-center">';
    // echo paginate_links([
    //     'total'   => $query->max_num_pages,
    //     'current' => $paged,
    // ]);
    // echo '</div>';

    wp_reset_postdata();
else :
    echo '<p>No case studies found.</p>';
endif;
?>
