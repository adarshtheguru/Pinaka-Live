<?php
get_header();

$clientLogo = get_the_post_thumbnail_url(get_the_ID(), 'full');
$clientDescription = apply_filters('the_content', get_post_field('post_content', get_the_ID()));

//blue box
$blue_box_left_title       = get_field('blue_box_left_title');
$blue_box_left_desc        = get_field('blue_box_left_desc');
$blue_box_left_list_title  = get_field('blue_box_left_list_title');
$blue_box_left_listings    = get_field('blue_box_left_listings');

$blue_box_right_title      = get_field('blue_box_right_title');
$blue_box_right_desc       = get_field('blue_box_right_desc');
$blue_box_right_list_title = get_field('blue_box_right_list_title');
$blue_box_right_listings   = get_field('blue_box_right_listings');

//strategy
$strategy = get_field('strategy');

if ($strategy) {
    $strategy_title       = $strategy['title'] ?? '';
    $strategy_description = $strategy['description'] ?? '';
    $strategy_listings    = $strategy['listing'] ?? [];
}
?>
<main class="caseStudySingle" id="caseStudySingle">
    <?php include 'customTemplates/heroSection.php' ?>
    <!-- <section class="padding topInfo" id="topInfo">
        <div class="container">
            <div class="prefix">
                Digital & Social Advertising Service
            </div>
            <div class="headTitle">
                Performance Marketing Case Study - <br> Pride World City
            </div>
        </div>
    </section> -->
    <section class="padding aboutClient" id="aboutClient">
        <div class="container">
            <div class="contBox">
                <div class="imgWrap">
                    <img class="img-responsive" src="<?php echo $clientLogo; ?>" alt="">
                </div>
                <div class="contWrap">
                    <div class="secTitle">
                        About the Client
                    </div>
                    <p>
                        <?php echo $clientDescription; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="padding blueBox" id="blueBox">
        <div class="container">
            <div class="contBox">
                <div class="box">
                    <?php if ($blue_box_left_title): ?>
                        <div class="title"><?= esc_html($blue_box_left_title); ?></div>
                    <?php endif; ?>

                    <?php if ($blue_box_left_desc): ?>
                        <p><?= esc_html($blue_box_left_desc); ?></p>
                    <?php endif; ?>

                    <?php if ($blue_box_left_list_title || $blue_box_left_listings): ?>
                        <div class="listingGroup">
                            <?php if ($blue_box_left_list_title): ?>
                                <p><?= esc_html($blue_box_left_list_title); ?></p>
                            <?php endif; ?>

                            <?php if ($blue_box_left_listings): ?>
                                <ul>
                                    <?php foreach ($blue_box_left_listings as $item): ?>
                                        <li><?= wp_kses_post($item['listing']); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="box">
                    <?php if ($blue_box_right_title): ?>
                        <div class="title"><?= esc_html($blue_box_right_title); ?></div>
                    <?php endif; ?>

                    <?php if ($blue_box_right_desc): ?>
                        <p><?= esc_html($blue_box_right_desc); ?></p>
                    <?php endif; ?>

                    <?php if ($blue_box_right_list_title || $blue_box_right_listings): ?>
                        <div class="listingGroup">
                            <?php if ($blue_box_right_list_title): ?>
                                <p><?= esc_html($blue_box_right_list_title); ?></p>
                            <?php endif; ?>

                            <?php if ($blue_box_right_listings): ?>
                                <ul>
                                    <?php foreach ($blue_box_right_listings as $item): ?>
                                        <li><?= wp_kses_post($item['listing']); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="padding strategy" id="strategy">
        <div class="container">
            <div class="contBox">
                <div class="left">
                    <?php if ($strategy_title): ?>
                        <div class="secTitle"><?= esc_html($strategy_title); ?></div>
                    <?php endif; ?>

                    <?php if ($strategy_description): ?>
                        <p class="cont"><?= wp_kses_post($strategy_description); ?></p>
                    <?php endif; ?>
                    <?php if ($strategy_listings && count($strategy_listings) > 6): ?>
                        <!-- Show 2nd SVG -->
                        <svg class="animatedThread hidden-xs" viewBox="0 0 500 682" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.14718 1V593.5C0.176668 617.345 3.42417 654.729 28.6472 655H457.647C473.732 654.346 501 658.5 498.647 681.5"
                                stroke="#003E63" stroke-linecap="round"/>
                        </svg>
                    <?php else: ?>
                        <!-- Show 1st SVG -->
                        <svg class="animatedThread hidden-xs" viewBox="0 0 500 312" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.14718 1V223.5C0.176668 247.345 3.42417 284.729 28.6472 285H457.647C473.732 284.346 501 288.5 498.647 311.5"
                                stroke="#003E63" stroke-linecap="round" />
                        </svg>
                    <?php endif; ?>

                </div>

                <div class="right">
                    <?php if ($strategy_listings): ?>
                        <ul>
                            <?php foreach ($strategy_listings as $item): ?>
                                <li>
                                    <?php if (!empty($item['list_title'])): ?>
                                        <span class="text-bold"><?= esc_html($item['list_title']); ?>: </span>
                                    <?php endif; ?>

                                    <?php if (!empty($item['point'])): ?>
                                        <span><?= esc_html($item['point']); ?></span>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="padding campaigns" id="campaigns">
        <div class="container">
            <div class="contBox">
                <?php if (have_rows('campaigns')): ?>
                    <?php $i = 0; ?>
                    <?php while (have_rows('campaigns')): the_row(); $i++; ?>
                        <div class="campaignWrapper campaign-<?php echo $i; ?>">
                            <?php if ($campaignTitle = get_sub_field('title')): ?>
                                <p class="text-center prefix <?php if ($i === 2) echo 'text-white'; ?>">
                                    <?= esc_html($campaignTitle); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (have_rows('images')): ?>
                                <div class="imgCont campaign-slider-<?php echo $i; ?>">
                                    <?php while (have_rows('images')): the_row(); ?>
                                        <?php
                                        $image_id = get_sub_field('image');
                                        if ($image_id):
                                            $img_url = wp_get_attachment_image_url($image_id, 'full');
                                            $img_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                        ?>
                                            <div class="imgBox">
                                                <img class="img-full" src="<?= esc_url($img_url); ?>" alt="<?= esc_attr($img_alt); ?>">
                                            </div>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>

                                <!-- Custom Arrows -->
                                <div class="customArrow">
                                    <div class="prev-<?php echo $i; ?>" >
                                        <img src="<?php echo THEMEURL; ?>/app/images/leftArrow.svg" alt="Left">
                                    </div>
                                    <div class="next-<?php echo $i; ?>">
                                        <img src="<?php echo THEMEURL; ?>/app/images/rightArrow.svg" alt="Right">
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>
    </section>
    <section class="padding execution" id="execution">
        <div class="container">
            <h2 class="secTitle">The Execution</h2>
            <?php if ($executions = get_field('executions')): ?>
                <div class="exBoxes">
                    <?php if (!empty($executions['listings']) && is_array($executions['listings'])): ?>
                        <?php foreach ($executions['listings'] as $listing): ?>
                            <?php if (!empty($listing['listing'])): ?>
                                <div class="box">
                                    <img src="<?php echo esc_url(THEMEURL . '/app/images/neondot.png'); ?>" alt="">
                                    <p><?= wp_kses_post($listing['listing']); ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <?php if (!empty($executions['image'])): ?>
                    <?php
                    $img_url = wp_get_attachment_image_url($executions['image'], 'full');
                    $img_alt = get_post_meta($executions['image'], '_wp_attachment_image_alt', true);
                    ?>
                    <div class="featureImg">
                        <img class="img-full" src="<?= esc_url($img_url); ?>" alt="<?= esc_attr($img_alt); ?>">
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </section>
    <section class="padding results" id="results">
        <div class="container">
            <div class="topLayer">
                <?php if ($resultsTitle = get_field('results_title')): ?>
                    <h2 class="secTitle text-white"><?= esc_html($resultsTitle); ?></h2>
                <?php endif; ?>

                <?php if ($resultsDesc = get_field('results_desc')): ?>
                    <p><?= esc_html($resultsDesc); ?></p>
                <?php endif; ?>
            </div>

            <?php if (have_rows('results_boxes')): ?>
                <div class="dataBox">
                    <?php while (have_rows('results_boxes')): the_row(); ?>
                        <div class="box">
                            <?php if ($boxTitle = get_sub_field('box_title')): ?>
                                <p class="data"><?= esc_html($boxTitle); ?></p>
                            <?php endif; ?>

                            <?php if ($boxDesc = get_sub_field('box_desc')): ?>
                                <p><?= wp_kses_post($boxDesc); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="padding takeaways" id="takeaways">
        <div class="container">
            <div class="contBox text-center">
                <?php if ($takeawayTitle = get_field('takeaway_title')): ?>
                    <h2 class="secTitle"><?= esc_html($takeawayTitle); ?></h2>
                <?php endif; ?>
                <?php if ($takeawayDesc = get_field('takeaway_desc')): ?>
                    <p><?= wp_kses_post($takeawayDesc); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php include 'customTemplates/footerGreen.php'; ?>
</main>
<?php get_footer(); ?>