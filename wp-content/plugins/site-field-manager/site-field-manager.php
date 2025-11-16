<?php
/**
 * Plugin Name: Site Field Manager (ACF Free OOP)
 * Description: Code-defined ACF field groups (free ACF) using an OOP structure.
 * Version: 1.0.0
 * Author: Adarsh Jaiswal
 */

namespace Site\Fields;
use Site\Fields\Groups\PageHeroFields;
use Site\Fields\Groups\ServiceFields;
use Site\Fields\Groups\CaseStudyFields;

if (!defined('ABSPATH')) exit;

// Ensure ACF is active
if (!function_exists('acf_add_local_field_group')) {
    add_action('admin_notices', function () {
        echo '<div class="notice notice-error"><p>Site Field Manager requires the Advanced Custom Fields plugin (free). Please install/activate ACF.</p></div>';
    });
    return;
}

// Requires
require_once __DIR__ . '/src/FieldGroup.php';
require_once __DIR__ . '/src/Registrar.php';
require_once __DIR__ . '/src/Groups/PageHeroFields.php';
require_once __DIR__ . '/src/Groups/ServiceFields.php';
require_once __DIR__ . '/src/Groups/CaseStudyFields.php';

// Register on ACF init
add_action('acf/init', function () {
    $groups = [
        new PageHeroFields(),
        new ServiceFields(),
        new CaseStudyFields(),
        // new \Site\Fields\Groups\PostSeoFields(),
    ];

    (new Registrar($groups))->register();
});