<?php
/**
* Template Name: Case Study
*/
get_header();
?>
<main class="caseStudy" id="caseStudy">
    <?php include 'customTemplates/heroSection.php' ?>
    <section class="padding caseOverview" id="caseOverview">
        <div class="watermark">
            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/placeholderVector.png" alt="">
        </div>
        <div class="container">
            <div class="secPrefix">Our Work</div>
            <div class="caseBox">
                <div class="partA">
                    <div class="secTitle">I want to see...</div>
                    <p class="para">
                        <select id="caseStudyFilter">
                            <option value="all">All</option>
                            <?php
                            $terms = get_terms([
                            'taxonomy'   => 'case_study_category',
                            'hide_empty' => true,
                            ]);
                            if (!empty($terms) && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                            echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                            }
                            }
                            ?>
                        </select>
                    </p>
                </div>
                <div class="partB">
                    <div id="caseStudyResults">
                        <?php get_template_part('customTemplates/case-study-grid'); ?>
                    </div>
                    <!-- <div class="text-center">
                        <a href="javascript:;" class="blankBtn caseLoadBtn" id="caseLoadBtn">LOAD MORE</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <section class="padding wantResult bg-blue" id="wantResult">
        <div class="container">
            <div class="text-center">
                <div class="secTitle text-white">Make Your Results Unforgettable</div>
                <div class="secTitle text-white">Let’s connect</div>
            </div>
            <?php include 'customTemplates/mainForm.php'; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>