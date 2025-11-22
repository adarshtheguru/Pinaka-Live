<section id="staticInfo" class="padding staticInfo  scroll-animate fade-in">
	<div class="container">
		<div class="partA d-flex text-bold">
			<?php echo esc_html($intro_a); ?>
		</div>
		<div class="partB d-flex text-justify">
			<?php echo esc_html($intro_b); ?>
		</div>
	</div>
</section>
<section id="DeliverResult" class="padding DeliverResult">
	<div class="container text-center">
		<div>
			<h2 class="secHeading"><?php echo nl2br($deliver_heading); ?></h2>
			<?php if ($deliver_content): ?>
			<div class="deliverContent"><?php echo $deliver_content; ?></div>
			<?php endif; ?>
		</div>
	</div>
</section>
<section class="padding threadSection pos-rel" id="threadSection">
	<svg class="topCenterThread hidden-xs" width="188" height="204" viewBox="0 0 188 204" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M187.5 1V203.5H1" stroke="#003E63" stroke-linecap="round" />
	</svg>
	<div class="container">
		<div class="contData">
			<div class="contRow first">
				<div class="data scroll-animate fade-in">
					<h2 class="sec-title"><?php the_field('left_section_title'); ?></h2>
					<p class="secPara"><?php the_field('left_section_subtitle'); ?></p>
					<p class="desc">
						<?php the_field('left_section_description'); ?>
					</p>
				</div>
				<div class="imgWrapper">
					<?php $left_img = get_field('left_section_image'); ?>
					<img class="img-full" src="<?php echo esc_url($left_img['url']); ?>" alt="">
				</div>
				<svg class="topThread hidden-xs" width="418" height="404" viewBox="0 0 418 404" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1V403.5H417.5" stroke="#003E63" stroke-linecap="round" />
				</svg>
			</div>
			<div class="contRow second topThreadList">
				<div class="data scroll-animate fade-in">
					<h2 class="sec-title"><?php the_field('right_section_title'); ?></h2>
					<p class="secPara"><?php the_field('right_section_subtitle'); ?></p>
					<p class="desc">
						<?php the_field('right_section_description'); ?>
					</p>
				</div>
				<div class="imgWrapper">
					<?php $right_img = get_field('right_section_image'); ?>
					<img class="img-full" src="<?php echo esc_url($right_img['url']); ?>" alt="">
				</div>
				<svg class="bottomThread hidden-xs" width="418" height="574" viewBox="0 0 418 574" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M417.5 1V573.5H1" stroke="#003E63" stroke-linecap="round" />
				</svg>
			</div>
			<div class="contRow last bottomThreadList">
				<div class="data scroll-animate fade-in">
					<h2 class="sec-title"><?php the_field('last_section_title'); ?></h2>
					<p class="secPara"><?php the_field('last_section_subtitle'); ?></p>
					<p class="desc">
						<?php the_field('last_section_description'); ?>
					</p>
				</div>
				<div class="imgWrapper">
					<?php $last_img = get_field('last_card_image'); ?>
					<img class="img-full" src="<?php echo esc_url($last_img['url']); ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="padding blueCards">
	<div class="container text-white">
		<div class="contentBox">
			<div class="partA  scroll-animate slide-in-up">
				<?php if (get_field('prefix_title')): ?>
				<h4 class="secPrefix text-white text-bolder">
				<?php the_field('prefix_title'); ?>
				</h4>
				<?php endif; ?>
				<?php if (get_field('main_title')): ?>
				<div class="coloredTitle">
					<?php the_field('main_title'); ?>
				</div>
				<?php endif; ?>
			</div>
			<div class="partB  scroll-animate fade-in delay-1">
				<?php if (get_field('sub_title')): ?>
				<div class="secHeading text-bolder">
					<?php the_field('sub_title'); ?>
				</div>
				<?php endif; ?>
				<?php if (get_field('description')): ?>
				<p><?php the_field('description'); ?></p>
				<?php endif; ?>
			</div>
		</div>
		<?php if (have_rows('what_we_do_service')): ?>
		<div class="cardBox">
			<?php $count=1; while (have_rows('what_we_do_service')): the_row();
				$icon = get_sub_field('icon');
				$title = get_sub_field('title');
				$desc = get_sub_field('description');
			?>
			<div class="box scroll-animate fade-in delay-<?php echo $count; ?>">
				<?php if ($icon): ?>
				<img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
				<?php endif; ?>
				<?php if ($title): ?>
				<h4 class="title"><?php echo esc_html($title); ?></h4>
				<?php endif; ?>
				<?php if ($desc): ?>
				<p><?php echo esc_html($desc); ?></p>
				<?php endif; ?>
			</div>
			<?php $count=$count+1; endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
	<!-- <div class="blueCardSliderWrapepr pos-rel">
		<div class="blueCardSlider">
			<div><img src="<?php echo THEMEURL; ?>/app/images/bc1.jpg" alt="Slide 1" /></div>
			<div><img src="<?php echo THEMEURL; ?>/app/images/bc2.jpg" alt="Slide 2" /></div>
			<div><img src="<?php echo THEMEURL; ?>/app/images/bc3.jpg" alt="Slide 3" /></div>
			<div><img src="<?php echo THEMEURL; ?>/app/images/bc1.jpg" alt="Slide 4" /></div>
			<div><img src="<?php echo THEMEURL; ?>/app/images/bc2.jpg" alt="Slide 5" /></div>
		</div>
		<div class="customArrow">
			<div id="bc-l-arrow">
				<img src="<?php echo THEMEURL; ?>/app/images/leftArrow.svg" alt="">
			</div>
			<div id="bc-r-arrow">
				<img src="<?php echo THEMEURL; ?>/app/images/rightArrow.svg" alt="">
			</div>
		</div>
	</div> -->
	<div class="blueCardSliderWrapepr pos-rel scroll-animate fade-in">
		<div class="blueCardSlider blueCardSlider-1">
			<?php
			$slides = get_field('blue_card_slider');
			if ($slides):
				foreach ($slides as $slide):
					// if gallery field return format = URL
			?>
			<div>
				<img src="<?php echo esc_url($slide); ?>" alt="Slide">
			</div>
			<?php
				endforeach;
			endif;
			?>
		</div>
		<div class="customArrow">
			<div id="bc-l-arrow1">
				<img src="<?php echo THEMEURL; ?>/app/images/leftArrow.svg" alt="Left">
			</div>
			<div id="bc-r-arrow1">
				<img src="<?php echo THEMEURL; ?>/app/images/rightArrow.svg" alt="Right">
			</div>
		</div>
	</div>
</section>
<section id="benefits" class="padding benefits">
	<div class="container">
		<div class="dataBox">
			<div class="partA scroll-animate fade-in delay-1">
				<?php if ($sec_prefix = get_field('why_choose_us_sec_prefix')) : ?>
				<div class="secPrefix"><?php echo esc_html($sec_prefix); ?></div>
				<?php endif; ?>
				<?php if ($title = get_field('why_choose_us_title')) : ?>
				<div class="title"><?php echo esc_html($title); ?></div>
				<?php endif; ?>
				<?php if ($description = get_field('why_choose_us_desciption')) : ?>
				<p><?php echo esc_html($description); ?></p>
				<?php endif; ?>
				<?php if ($btn_text = get_field('button_text')) :
				$btn_link = get_field('deliver_link'); ?>
				<a href="<?php echo site_url('/service'); ?>" class="themeBtn">
					<?php echo esc_html($btn_text); ?>
				</a>
				<?php endif; ?>
			</div>
			<div class="partB scroll-animate fade-in delay-2">
				<?php if ($right_title = get_field('right_title')) : ?>
				<div class="title"><?php echo esc_html($right_title); ?></div>
				<?php endif; ?>
				<?php if (have_rows('benefits_list')) : ?>
				<ul>
					<?php while (have_rows('benefits_list')) : the_row(); ?>
					<li>
						<?php if ($benefit_title = get_sub_field('benefit_title')) : ?>
						<strong><?php echo esc_html($benefit_title); ?> : </strong>
						<?php endif; ?>
						<?php if ($benefit_desc = get_sub_field('benefit_desc')) : ?>
						<?php echo esc_html($benefit_desc); ?>
						<?php endif; ?>
					</li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php
$service_slug = get_post_field('post_name', get_the_ID());

// Query case studies for this service
$args = [
    'post_type'      => 'case_study',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'tax_query'      => [
        [
            'taxonomy' => 'case_study_category',
            'field'    => 'slug',
            'terms'    => $service_slug,
        ],
    ],
];
$query = new WP_Query($args);

if ($query->have_posts()) : ?>
    <section id="caseStudies" class="padding caseStudies">
        <div class="container">
            <div class="partA scroll-animate fade-in">
                <div class="title">Relevant Case Studies</div>
                <a href="<?php echo get_post_type_archive_link('our-works'); ?>" class="themeBtn">See All CASE STUDIES</a>
            </div>
        </div>

        <div class="case-study-wrapper scroll-animate fade-in">
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
        </div>
    </section>
<?php
endif;
wp_reset_postdata();
?>
