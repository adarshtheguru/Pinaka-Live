<?php
global $post;
$pageId = $post->ID;
$title        = get_field('banner_title', $pageId);
$type         = get_field('banner_type');
$video_type   = get_field('video_source_type');

$image_desktop  = wp_get_attachment_image(get_field('banner_image_desktop'), 'full', false, ['class' => 'hero-media hero-media-desktop']);
$image_mobile   = wp_get_attachment_image(get_field('banner_image_mobile'), 'full', false, ['class' => 'hero-media hero-media-mobile']);

$video_url_desktop  = get_field('banner_video_url_desktop');
$video_url_mobile   = get_field('banner_video_url_mobile');

$video_file_desktop = get_field('banner_video_upload_desktop');
$video_file_mobile  = get_field('banner_video_upload_mobile');
?>

<section class="section-first bg-cover home-banner hero pos-rel" id="hero">
    
    <?php if ($type === 'image'): ?>
        <picture class="hero-bg">
            <source media="(max-width: 768px)" srcset="<?= esc_url(wp_get_attachment_url(get_field('banner_image_mobile'))); ?>">
            <?= $image_desktop ?>
        </picture>

    <?php elseif ($type === 'video'): ?>
        <?php if ($video_type === 'url'): ?>
            <video class="hero-bg" autoplay muted loop playsinline>
                <?php if ($video_url_desktop): ?>
                    <source src="<?= esc_url($video_url_desktop); ?>" media="(min-width: 769px)" type="video/mp4">
                <?php endif; ?>
                <?php if ($video_url_mobile): ?>
                    <source src="<?= esc_url($video_url_mobile); ?>" media="(max-width: 768px)" type="video/mp4">
                <?php endif; ?>
            </video>
        <?php elseif ($video_type === 'upload'): ?>
            <video class="hero-bg" autoplay muted loop playsinline poster="<?php echo THEMEURL; ?>/app/images/home-video.jpg">
                <?php if ($video_file_desktop): ?>
                    <source src="<?= esc_url($video_file_desktop); ?>" media="(min-width: 769px)" type="video/mp4">
                <?php endif; ?>
                <?php if ($video_file_mobile): ?>
                    <source src="<?= esc_url($video_file_mobile); ?>" media="(max-width: 768px)" type="video/mp4">
                <?php endif; ?>
            </video>
        <?php endif; ?>
    <?php endif; ?>

    <div class="container">
        <?php if ($title): ?>
            <h1 class="banner-title slide-in-left fade-in scroll-animate"><?= wp_kses_post($title); ?></h1>
        <?php endif; ?>
    </div>
</section>