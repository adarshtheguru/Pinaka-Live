<?php
get_header();

// Intro
$intro_a        = get_field('intro_text_a');
$intro_b        = get_field('intro_text_b');

// Deliver Section
$deliver_heading = get_field('deliver_heading');
$deliver_content = get_field('deliver_content');

$slug = get_post_field('post_name', get_post());
$service_slug = get_post_field('post_name', get_the_ID());
?>
<main class="servicePage">
	<?php include 'customTemplates/heroSection.php' ?>
	<?php if ($slug === 'media-strategy'): ?>
        <!-- Custom design for Media Strategy -->
        <?php include 'customTemplates/mediaStrategy.php'; ?>
    <?php else: ?>
        <!-- Default design for other services -->
        <?php include 'customTemplates/serviceDefault.php'; ?>
    <?php endif; ?>
</main>
<!-- <?php include 'customTemplates/footerGreen.php'; ?> -->
<?php get_footer(); ?>