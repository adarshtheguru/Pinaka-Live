<?php
/**
* Template Name: Clients
*/
get_header();
?>
<main class="clients">
    <?php include 'customTemplates/heroSection.php' ?>
    <section class="padding clientOverview" id="clientOverview">
        <!-- <div class="watermark">
            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/placeHolderVector.png" alt="">
        </div> -->
        <div class="container">
            <!-- <div class="secPrefix">Clients</div> -->
            <div class="caseBox">
                
                <div class="partB">
                    <?php if ( have_rows('logo_categories') ) : ?>
                    <section class="logo-section">
                        <div class="container">
                            
                            <!-- Category Tabs -->
                            <div class="col-3 col-xs-12">
                                <div class="logo-left-tab">
                                    <h2>Our Clients</h2>
                                    <ul class="logo-tabs">
                                        <?php
                                        $tab_index = 0;
                                        while ( have_rows('logo_categories') ) : the_row();
                                        $category_name = get_sub_field('category_name');
                                        ?>
                                        <li class="logo-tab <?php echo $tab_index === 0 ? 'active' : ''; ?>" data-tab="tab-<?php echo $tab_index; ?>">
                                            <?php echo esc_html($category_name); ?>
                                        </li>
                                        <?php $tab_index++; endwhile; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-1 col-xs-12">&nbsp;</div>
                            <div class="col-8 col-xs-12 logo-right">
                                <!-- Logo Listings -->
                                <div class="logo-tab-content-wrapper">
                                    <?php
                                    $tab_index = 0;
                                    while ( have_rows('logo_categories') ) : the_row(); ?>
                                    <div class="logo-tab-content <?php echo $tab_index === 0 ? 'active' : ''; ?>" id="tab-<?php echo $tab_index; ?>">
                                        <div class="logo-grid">
                                            <?php if ( have_rows('logos') ) : ?>
                                            <?php while ( have_rows('logos') ) : the_row();
                                            $image = get_sub_field('logo_image');
                                            ?>
                                            <div class="logo-item">
                                                <?php if ( $image ) : ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($name ?: $image['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php $tab_index++; endwhile; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php endif; ?>
                    <!-- <div class="gridBox  scroll-animate clip-reveal delay-2">
                        <div class="box">
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/shapoorji.png" alt="">
                        </div>
                        <div class="box">
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client2.png" alt="">
                        </div>
                        <div class="box">
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client3.png" alt="">
                        </div>
                        <div class="box">
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client4.png" alt="">
                        </div>
                        <div class="box">
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client5.png" alt="">
                        </div>
                        <div class="box">
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client6.svg" alt="">
                        </div>
                        <div class="box">
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client7.png" alt="">
                        </div>
                        <div class="box">
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client8.png" alt="">
                        </div>
                        <div class="box">
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client9.png" alt="">
                        </div>
                        <div class="box">
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client10.png" alt="">
                        </div>
                        <div class="box">
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client11.png" alt="">
                        </div>
                        <div class="box">
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client12.svg" alt="">
                        </div>
                        <div class="box">
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client13.png" alt="">
                        </div>
                        <div class="box">
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client14.svg" alt="">
                        </div>
                        <div class="box">
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client15.png" alt="">
                        </div>
                        <div class="box">
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client16.png" alt="">
                        </div>
                    </div> -->
                    <!-- <div class="text-center">
                        <a href="javascript:;" class="blankBtn gridLoadBtn">LOAD MORE</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="padding buisSol" id="buisSol">
        <div class="container">
            <div class="text-center secTitle">Solutions that Think Ahead</div>
            <div class="buisSolBox">
                <div class="box">
                    <img src="<?php echo THEMEURL; ?>/app/images/targetTick.svg" alt="">
                    <div class="title">Designed for Tomorrow’s Goals</div>
                    <p class="para">Your brand is growing, and your marketing should grow with it. Our solutions are scalable, data-informed, and built to evolve, so they align not only with where you are now but where you're headed.</p>
                </div>
                <div class="box">
                    <img src="<?php echo THEMEURL; ?>/app/images/speaker.svg" alt="">
                    <div class="title">Efficiency Without Compromise</div>
                    <p class="para">Thinking ahead means delivering more than what's expected, it means creating systems that are sustainable, efficient, and set up for long-term performance without sacrificing quality.</p>
                </div>
                <div class="box">
                    <img src="<?php echo THEMEURL; ?>/app/images/greenBar.svg" alt="">
                    <div class="title">Prepared for What's Next</div>
                    <p class="para">Trends fade. Platforms change. But strategic thinking endures. Our team is always researching, testing, and refining so your brand stays on the edge of relevance and readiness.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="padding ambitions" id="ambitions">
        <div class="container">
            <div class="partA text-center">
                <div class="secTitle">Turning Vision into Wins</div>
                <div class="para col-8 center-block col-xs-12">Guiding brands from insightful strategies to high-impact execution with measurable business outcomes.</div>
            </div>
            <div class="partB">
                <div class="dataBox">
                    <div class="box">
                        <div class="number">60%</div>
                        <div class="title">Increase in Lead Quality</div>
                        <p class="para">
                            Our data-driven strategies helped clients boost lead quality by 60%, attracting better and high-converting prospects.
                        </p>
                    </div>
                    <div class="box">
                        <div class="number">120%</div>
                        <div class="title">Growth in Organic Traffic</div>
                        <p class="para">
                            With advanced SEO and content strategies, clients saw a 120% rise in organic traffic while building long-term visibility and trust.
                        </p>
                    </div>
                    <div class="box">
                        <div class="number">40%</div>
                        <div class="title">Drop in Cost-Per-Lead</div>
                        <p class="para">
                            By optimizing campaign efficiency, we helped clients reduce CPL by 40%, maximizing marketing ROI and budget impact.
                        </p>
                    </div>
                </div>
                <div class="text-center">
                    <a href="jaavscript:;" class="themeBtn">SCHEDULE FREE CONSULTATION</a>
                </div>
            </div>
        </div>
    </section> -->
</main>
<?php include 'customTemplates/footerGreen.php'; ?>
<?php get_footer(); ?>