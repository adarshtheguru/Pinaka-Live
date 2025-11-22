<?php
/*
Template Name: Blog Listing
*/
get_header(); ?>

<main class="blogs" id="blogs">
    <?php include 'customTemplates/heroSection.php' ?>
    <section class="padding caseOverview" id="caseOverview">
        <div class="watermark">
            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/placeholderVector.png" alt="">
        </div>
        <div class="container">
            <!-- <div class="secPrefix">Blogs</div> -->
            <div class="caseBox">
              <!--   <div class="partA">
                    <div class="secTitle">Sharing our Experience for your Curiosity</div>
                    <p class="para">
                        Crafting impactful creative solutions and strategies that drive meaningful brand presence and
                        fuel lasting business growth.
                    </p>
                </div> -->
                <div class="partB">
                    <div class="custom-tabs">
                        <!-- Tab Titles -->
                        <div class="tab-titles">
                            <div class="tab-title active" data-tab="tab-all">All Blogs</div>
                            <?php
                            $categories = get_categories(['hide_empty' => false]);
                            foreach ($categories as $index => $cat):
                                ?>
                                <div class="tab-title" data-tab="tab-<?php echo esc_attr($cat->slug); ?>">
                                    <?php echo esc_html($cat->name); ?>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Tab Contents -->
                        <div class="tab-content-wrapper">
                            <!-- All Blogs -->
                            <div class="tab-content active" id="tab-all">
                                <div class="blogGridBox">
                                    <?php
                                    $all_posts = new WP_Query([
                                        'post_type' => 'post',
                                        'posts_per_page' => 8
                                    ]);
                                    if ($all_posts->have_posts()):
                                        while ($all_posts->have_posts()): $all_posts->the_post(); ?>
                                            <div class="box">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail('medium', ['class' => 'img-full']); ?>
                                                <?php else: ?>
                                                    <img src="<?php echo THEMEURL; ?>/app/images/placeholderBlank.png" alt="" class="img-full">
                                                <?php endif; ?>
                                                <div class="dates"><?php echo get_the_date('M j, Y'); ?></div>
                                                <!-- <p class="abstract"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p> -->
                                                <p class="abstract"><?php echo get_the_title(); ?></p>
                                                <a href="<?php the_permalink(); ?>">
                                                    <img src="<?php echo THEMEURL; ?>/app/images/roundLeft.svg" alt="">
                                                </a>
                                            </div>
                                        <?php endwhile;
                                        wp_reset_postdata();
                                    endif;
                                    ?>
                                </div>
                                <div class="text-center">
                                    <a href="javascript:;" class="blankBtn blogLoadBtn">LOAD MORE</a>
                                </div>
                            </div>

                            <!-- Category-wise Tabs -->
                            <?php foreach ($categories as $cat): ?>
                                <div class="tab-content" id="tab-<?php echo esc_attr($cat->slug); ?>">
                                    <div class="blogGridBox">
                                        <?php
                                        $cat_posts = new WP_Query([
                                            'post_type' => 'post',
                                            'posts_per_page' => 8,
                                            'cat' => $cat->term_id
                                        ]);
                                        if ($cat_posts->have_posts()):
                                            while ($cat_posts->have_posts()): $cat_posts->the_post(); ?>
                                                <div class="box">
                                                    <?php if (has_post_thumbnail()): ?>
                                                        <?php the_post_thumbnail('medium', ['class' => 'img-full']); ?>
                                                    <?php else: ?>
                                                        <img src="<?php echo THEMEURL; ?>/app/images/placeholderBlank.png" alt="" class="img-full">
                                                    <?php endif; ?>
                                                    <div class="dates"><?php echo get_the_date('M j, Y'); ?></div>
                                                    <!-- <p class="abstract"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p> -->
                                                    <p class="abstract"><?php echo get_the_title(); ?></p>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <img src="<?php echo THEMEURL; ?>/app/images/roundLeft.svg" alt="">
                                                    </a>
                                                </div>
                                            <?php endwhile;
                                            wp_reset_postdata();
                                        endif;
                                        ?>
                                    </div>
                                    <div class="text-center">
                                        <a href="javascript:;" class="blankBtn blogLoadBtn">LOAD MORE</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padding wantResult" id="wantResult">
        <div class="container">
            <div class="text-center">
                <div class="secTitle">Make your Results Unforgettable</div>
                <div class="secTitle">Tell us more about yourself, and we’ll do the rest</div>
            </div>
            <?php include 'customTemplates/mainForm.php'; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>