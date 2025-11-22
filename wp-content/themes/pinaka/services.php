<?php /* Template Name: Services Page */
get_header();
?>
<?php include 'customTemplates/heroSection.php' ?>
<section class="padding services" id="services">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="secPrefix">Services</div>
			</div>
			<?php if( have_rows('service_sections') ): ?>
			    <?php while( have_rows('service_sections') ): the_row(); ?>
			        <div class="col-12 pd-tp-30 pd-bt-30 br-bt-1">
			            <div class="col-5 col-xs-12 pd-rt-30 pd-bt-30">
			                <h3 class="main-title"><?php the_sub_field('section_title'); ?></h3>
			                <p class="services-desc"><?php the_sub_field('section_description'); ?></p>
			            </div>
			            <div class="col-7 col-xs-12">
			                <div class="service-list">
			                    <?php if( have_rows('services_list') ): ?>
			                        <?php while( have_rows('services_list') ): the_row(); 
			                            $image = get_sub_field('service_image');
			                            $title = get_sub_field('service_title');
			                            $link  = get_sub_field('service_link');
			                        ?>
			                            <div class="services-item">
			                                <?php 
											if( $image ):
											    if( is_array($image) && isset($image['url']) ) {
											        $image_url = $image['url'];
											    } elseif( is_numeric($image) ) {
											        $image_url = wp_get_attachment_url($image);
											    } else {
											        $image_url = $image;
											    }
											?>
											    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>">
											<?php endif; ?>

			                                <div class="services-title">
			                                    <h4><?php echo esc_html($title); ?></h4>
			                                    <?php if($link): ?>
			                                        <a href="<?php echo esc_url($link); ?>">
			                                            <img src="<?php echo THEMEURL; ?>/app/images/service-cta.svg" alt="CTA">
			                                        </a>
			                                    <?php endif; ?>
			                                </div>
			                            </div>
			                        <?php endwhile; ?>
			                    <?php endif; ?>
			                </div>
			            </div>
			        </div>
			    <?php endwhile; ?>
			<?php endif; ?>


		</div>
	</div>
</section>
<?php
// Query all case studies
$args = [
    'post_type'      => 'case_study',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
];

$query = new WP_Query($args);

if ($query->have_posts()) : ?>
    <section id="caseStudies" class="padding caseStudies pd-tp-5">
        <div class="container">
            <div class="partA">
                <div class="title">Case Studies</div>
                <a href="<?php echo get_post_type_archive_link('our-works'); ?>" class="themeBtn">See All CASE STUDIES</a>
            </div>
        </div>

        <div class="case-study-wrapper pos-rel">
            <div class="case-study-slider">
                <?php while ($query->have_posts()) : $query->the_post();
                    $image_id  = get_field('service_thumbnail_image', get_the_ID());
                    $image_url = wp_get_attachment_image_url($image_id, 'full'); ?>
                    
                    <div class="case-study-item">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ($image_url): ?>
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>" />
                            <?php endif; ?>
                            <p class="title"><?php the_title(); ?></p>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="customArrow">
				<div id="csLeft">
					<img src="<?php echo THEMEURL; ?>/app/images/blueLeft.svg" alt="">
				</div>
				<div id="csRight">
					<img src="<?php echo THEMEURL; ?>/app/images/blueRight.svg" alt="">
				</div>
			</div>
        </div>
    </section>
<?php
endif;
wp_reset_postdata();
?>


<!-- <?php include 'customTemplates/footerGreen.php'; ?> -->
<?php get_footer(); ?>