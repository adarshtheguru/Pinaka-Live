<?php
/**
 * Template Name: Ecommerce Page
 */
get_header();
?>

<main class="ecommerce">

    <!-- Banner Section -->
    <section class="ecBanner">
        <div class="ecBanner__bg">
            <img src="<?php echo THEMEURL; ?>/app/images/ecommerce.png" alt="Ecommerce Solutions" class="ecBanner__bgImg">
        </div>
        <div class="container">
            <div class="ecBanner__wrap">
                <div class="ecBanner__content">
                    <h1 class="ecBanner__title">Skyrocket your business goals with our complete Ecommerce solutions!</h1>
                    <p class="ecBanner__text">In today's hyper-connected world, a website is more than just a digital presence—it's a powerful tool that can dominate industries.</p>
                    <a href="#ecommContact" class="themeBtn">GET IN TOUCH</a>
                </div>
                <div class="ecBanner__form">
                    <div class="ecBanner__formCard">
                        <h2 class="ecBanner__formTitle">Get A Free Review Of Your Marketplaces</h2>
                        <form id="ecommBannerForm">
                            <input type="hidden" name="formType" value="ecommBannerForm">
                            <div class="formGroup">
                                <label>Your Full Name*</label>
                                <input name="name" type="text" placeholder="Type your full name" class="required"/>
                            </div>
                            <div class="formGroup">
                                <label>Official Email ID*</label>
                                <input name="email" type="email" placeholder="example@gmail.com" class="required"/>
                            </div>
                            <div class="formGroup">
                                <label>Phone Number*</label>
                                <input name="phone" type="tel" placeholder="+91 999 999 9999" class="required"/>
                            </div>
                            <div class="formGroup">
                                <label>Company Name*</label>
                                <input name="company" type="text" placeholder="Type Company Name" class="required"/>
                            </div>
                            <div class="formGroup">
                                <label>Service Required*</label>
                                <input name="service" type="text" placeholder="Type Service" class="required"/>
                            </div>
                            <button type="submit" class="themeBtn submitBtn">Submit</button>
                        </form>
                        <p class="success-msg" style="display:none">
                            Thank you for submitting your details. Our team will get in touch with you shortly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ecommerce Suite Section -->
    <section class="ecSuite">
        <div class="container">
            <div class="ecSuite__top">
                <div class="ecSuite__left">
                    <span class="ecSuite__prefix">Ecommerce Suite</span>
                    <h2 class="ecSuite__title">Scale Faster. Sell Smarter. Dominate Ecommerce.</h2>
                </div>
                <div class="ecSuite__right">
                    <p class="ecSuite__text">Pinaka Digital's Ecommerce Suite is a full-funnel growth solution designed for D2C and marketplace-led brands at every stage—from launch to market leadership. We combine performance marketing, SEO, CRO, social media, and marketplace expertise to drive predictable revenue and profitable scale.</p>
                </div>
            </div>
            <div class="ecSuite__imgWrap">
                <img src="<?php echo THEMEURL; ?>/app/images/ecommerce-suite.jpg" alt="Ecommerce Suite" class="ecSuite__img">
                <div class="ecSuite__stats">
                    <div class="ecSuite__stat">
                        <h3 class="ecSuite__statNum">350<span>+</span></h3>
                        <p class="ecSuite__statLabel">Brands</p>
                    </div>
                    <div class="ecSuite__stat">
                        <h3 class="ecSuite__statNum">3</h3>
                        <p class="ecSuite__statLabel">2 Offices</p>
                    </div>
                    <div class="ecSuite__stat">
                        <h3 class="ecSuite__statNum">100<span>+</span></h3>
                        <p class="ecSuite__statLabel">Full Time Employees</p>
                    </div>
                    <div class="ecSuite__stat">
                        <h3 class="ecSuite__statNum">32<span>M</span></h3>
                        <p class="ecSuite__statLabel">Annual Ad Spends</p>
                    </div>
                    <div class="ecSuite__stat">
                        <h3 class="ecSuite__statNum">12<span>X</span></h3>
                        <p class="ecSuite__statLabel">Average ROAS</p>
                    </div>
                    <div class="ecSuite__stat">
                        <h3 class="ecSuite__statNum">100<span>B</span></h3>
                        <p class="ecSuite__statLabel">Annual Sales Value</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who & What Section -->
    <section class="ecWho">
        <div class="container">
            <div class="ecWho__wrap">
                <div class="ecWho__card">
                    <h2 class="ecWho__cardTitle">Who Is Ecommerce Suite For?</h2>
                    <ul class="ecWho__list">
                        <li><strong>New Ecommerce Brands</strong> looking to acquire their first 100–500 customers</li>
                        <li><strong>Growing Brands</strong> aiming to scale ads, improve ROAS, and expand channels</li>
                        <li><strong>Established Ecommerce Businesses</strong> focused on domination, automation, and omnichannel growth</li>
                    </ul>
                    <p class="ecWho__note">If your goal is sustainable growth—not just traffic—this suite is built for you.</p>
                </div>
                <div class="ecWho__card">
                    <h2 class="ecWho__cardTitle">What Makes Our Ecommerce Suite Different?</h2>
                    <ul class="ecWho__list">
                        <li><strong>Full-funnel strategy</strong> (awareness &rarr; conversion &rarr; retention)</li>
                        <li><strong>Channel-agnostic execution</strong> (Google, Meta, YouTube, Amazon &amp; more)</li>
                        <li><strong>ROAS-driven decision making</strong></li>
                        <li><strong>Dedicated growth strategists</strong> aligned to your revenue goals</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Services We Offer Section -->
    <section class="ecServices">
        <div class="container">
            <div class="ecServices__slider">

                <!-- Service Item 1 -->
                <div class="ecServices__item">
                    <div class="ecServices__text">
                        <span class="ecServices__prefix">Services We Offer</span>
                        <h2 class="ecServices__title">Performance Marketing<br>Organic Search/AI Visibility<br>Social Media Management</h2>
                        <p class="ecServices__desc">Pinaka Digital's Ecommerce Suite is a full-funnel growth solution designed for D2C and marketplace-led brands at every stage—from launch to market leadership.</p>
                        <a href="#ecommContact" class="themeBtn">GET IN TOUCH</a>
                    </div>
                    <div class="ecServices__img">
                        <img src="<?php echo THEMEURL; ?>/app/images/ecommerce-service-1.jpg" alt="Performance Marketing">
                    </div>
                </div>

                <!-- Service Item 2 -->
                <div class="ecServices__item ecServices__item--reverse">
                    <div class="ecServices__text">
                        <h2 class="ecServices__title">Online PR &amp; Reputation<br>Marketplace Management<br>Sales &amp; Marketing<br>Automation</h2>
                        <!-- <div class="ecServices__nav">
                            <button class="ecServices__arrow ecServices__arrow--prev" aria-label="Previous">&larr;</button>
                            <button class="ecServices__arrow ecServices__arrow--next" aria-label="Next">&rarr;</button>
                        </div> -->
                        <p class="ecServices__desc">Pinaka Digital's Ecommerce Suite is a full-funnel growth solution designed for D2C and marketplace-led brands at every stage—from launch to market leadership.</p>
                        <a href="#ecommContact" class="themeBtn">GET IN TOUCH</a>
                    </div>
                    <div class="ecServices__img">
                        <img src="<?php echo THEMEURL; ?>/app/images/ecommerce-service-2.jpg" alt="Online PR & Reputation">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Our Ecommerce Growth Framework Section -->
    <section class="ecFramework">
        <div class="container">
            <h2 class="ecFramework__heading">Our Ecommerce Growth Framework</h2>

            <div class="ecFramework__accordion">

                <!-- Item 1 -->
                <div class="ecFramework__item active">
                    <div class="ecFramework__header">
                        <h3 class="ecFramework__title"><span class="ecFramework__num">1.</span> Foundation &amp; Tracking</h3>
                        <button class="ecFramework__toggle" aria-label="Toggle"><span></span></button>
                    </div>
                    <div class="ecFramework__body">
                        <div class="ecFramework__bodyWrap">
                            <div class="ecFramework__bodyLeft">
                                <ul>
                                    <li>Pixel &amp; event setup</li>
                                    <li>Conversion tracking &amp; analytics</li>
                                    <li>Product feed &amp; catalog optimization</li>
                                </ul>
                                <a href="#ecommContact" class="themeBtn white-btn">GET IN TOUCH</a>
                            </div>
                            <div class="ecFramework__bodyRight">
                                <img src="<?php echo THEMEURL; ?>/app/images/ecommerce-framework-1.jpg" alt="Foundation & Tracking">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="ecFramework__item">
                    <div class="ecFramework__header">
                        <h3 class="ecFramework__title"><span class="ecFramework__num">2.</span> Acquisition at Scale</h3>
                        <button class="ecFramework__toggle" aria-label="Toggle"><span></span></button>
                    </div>
                    <div class="ecFramework__body">
                        <div class="ecFramework__bodyWrap">
                            <div class="ecFramework__bodyLeft">
                                <ul>
                                    <li>Paid ads across Google, Meta, YouTube</li>
                                    <li>Marketplace advertising (Amazon, Flipkart)</li>
                                    <li>Influencer &amp; affiliate campaigns</li>
                                </ul>
                                <a href="#ecommContact" class="themeBtn white-btn">GET IN TOUCH</a>
                            </div>
                            <div class="ecFramework__bodyRight">
                                <img src="<?php echo THEMEURL; ?>/app/images/ecommerce-framework-2.jpg" alt="Acquisition at Scale">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="ecFramework__item">
                    <div class="ecFramework__header">
                        <h3 class="ecFramework__title"><span class="ecFramework__num">3.</span> Conversion Rate Optimization (CRO)</h3>
                        <button class="ecFramework__toggle" aria-label="Toggle"><span></span></button>
                    </div>
                    <div class="ecFramework__body">
                        <div class="ecFramework__bodyWrap">
                            <div class="ecFramework__bodyLeft">
                                <ul>
                                    <li>Landing page &amp; funnel optimization</li>
                                    <li>A/B testing &amp; heatmap analysis</li>
                                    <li>Cart abandonment &amp; checkout UX</li>
                                </ul>
                                <a href="#ecommContact" class="themeBtn white-btn">GET IN TOUCH</a>
                            </div>
                            <div class="ecFramework__bodyRight">
                                <img src="<?php echo THEMEURL; ?>/app/images/ecommerce-framework-3.jpg" alt="Conversion Rate Optimization">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="ecFramework__item">
                    <div class="ecFramework__header">
                        <h3 class="ecFramework__title"><span class="ecFramework__num">4.</span> Retention &amp; LTV Growth</h3>
                        <button class="ecFramework__toggle" aria-label="Toggle"><span></span></button>
                    </div>
                    <div class="ecFramework__body">
                        <div class="ecFramework__bodyWrap">
                            <div class="ecFramework__bodyLeft">
                                <ul>
                                    <li>Email &amp; WhatsApp marketing automation</li>
                                    <li>Loyalty programs &amp; repeat purchase flows</li>
                                    <li>Customer segmentation &amp; personalization</li>
                                </ul>
                                <a href="#ecommContact" class="themeBtn white-btn">GET IN TOUCH</a>
                            </div>
                            <div class="ecFramework__bodyRight">
                                <img src="<?php echo THEMEURL; ?>/app/images/ecommerce-framework-4.jpg" alt="Retention & LTV Growth">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Our Process Section -->
    <section class="ecProcess">
        <div class="container">
            <h2 class="ecProcess__heading">Our Process</h2>
            <div class="ecProcess__grid">
                <div class="ecProcess__card">
                    <img src="<?php echo THEMEURL; ?>/app/images/neondot.png" alt="" class="ecProcess__icon">
                    <p class="ecProcess__text">Discovery &amp; Audit – Understand brand, margins &amp; goals</p>
                </div>
                <div class="ecProcess__card">
                    <img src="<?php echo THEMEURL; ?>/app/images/neondot.png" alt="" class="ecProcess__icon">
                    <p class="ecProcess__text">Strategy &amp; Forecasting – Channel mix &amp; ROAS targets</p>
                </div>
                <div class="ecProcess__card">
                    <img src="<?php echo THEMEURL; ?>/app/images/neondot.png" alt="" class="ecProcess__icon">
                    <p class="ecProcess__text">Execution &amp; Optimization – Ads, SEO, CRO &amp; content</p>
                </div>
                <div class="ecProcess__card">
                    <img src="<?php echo THEMEURL; ?>/app/images/neondot.png" alt="" class="ecProcess__icon">
                    <p class="ecProcess__text">Scale &amp; Automate – Expand channels &amp; improve efficiency</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ecommerce Suite Packages Section -->
    <section class="ecPackages">
        <div class="container">
            <h2 class="ecPackages__heading">Ecommerce Suite Packages</h2>
            <div class="ecPackages__tableWrap">
                <table class="ecPackages__table">
                    <thead>
                        <tr>
                            <th class="ecPackages__featureHead">Features / Deliverables</th>
                            <th colspan="3" class="ecPackages__suiteHead">
                                <span class="ecPackages__suiteLabel">Ecommerce Suite</span>
                            </th>
                        </tr>
                        <tr class="ecPackages__planRow">
                            <th></th>
                            <th class="ecPackages__planHead">Starter Growth</th>
                            <th class="ecPackages__planHead">Accelerator</th>
                            <th class="ecPackages__planHead">Accelerator</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ecPackages__feature">Best For</td>
                            <td>New ecommerce brands</td>
                            <td>Growing brands</td>
                            <td>Established brands</td>
                        </tr>
                        <tr>
                            <td class="ecPackages__feature">Monthly Fee</td>
                            <td>Rs. 50,000</td>
                            <td>Rs. 1,20,000</td>
                            <td>Rs. 2,00,000</td>
                        </tr>
                        <tr>
                            <td class="ecPackages__feature">Ad Spend</td>
                            <td>Up to Rs. 1L</td>
                            <td>Rs. 2L - Rs. 3L</td>
                            <td>Rs. 3L+</td>
                        </tr>
                        <tr>
                            <td class="ecPackages__feature">Platforms Covered</td>
                            <td>Google Ads, Meta, pixel setup, retargeting</td>
                            <td>Google, Meta, YouTube</td>
                            <td>Google, Meta, YouTube, Amazon</td>
                        </tr>
                        <tr>
                            <td class="ecPackages__feature">Performance Marketing</td>
                            <td>Basic keywords campaigns, pixel SEO, retargeting</td>
                            <td>Full funnel ads, A/B testing, blogs</td>
                            <td>Multi-channel + influencer ads, advanced content strategy</td>
                        </tr>
                        <tr>
                            <td class="ecPackages__feature">Social Media</td>
                            <td>8–10 posts/month (2 platforms: Meta &amp; Instagram)</td>
                            <td>12–15 posts + 2 reels (3 platforms)</td>
                            <td>20+ posts + weekly videos (4 platforms)</td>
                        </tr>
                        <tr>
                            <td class="ecPackages__feature">Online PR &amp; ORM</td>
                            <td>-</td>
                            <td>-</td>
                            <td>Tier-II &amp; III PR, Reputation control</td>
                        </tr>
                        <tr>
                            <td class="ecPackages__feature">Catalog Management</td>
                            <td>Basic product upload</td>
                            <td>Marketplace optimization</td>
                            <td>Full catalog &amp; inventory automation</td>
                        </tr>
                        <tr>
                            <td class="ecPackages__feature">Marketplace Marketing</td>
                            <td>-</td>
                            <td>Monthly report</td>
                            <td>Bi-weekly Amazon/Flipkart ad setup, Omnichannel marketplace strategy</td>
                        </tr>
                        <tr>
                            <td class="ecPackages__feature">Reporting</td>
                            <td>-</td>
                            <td>Weekly reports + strategist dashboard</td>
                            <td>Omn-channel reports</td>
                        </tr>
                        <tr>
                            <td class="ecPackages__feature">Growth Strategy Call</td>
                            <td>Monthly</td>
                            <td>Monthly</td>
                            <td>Weekly + quarterly roadmap support</td>
                        </tr>
                        <tr>
                            <td class="ecPackages__feature">Estimated ROAS Goal</td>
                            <td>2X</td>
                            <td>3X</td>
                            <td>4 to 5X</td>
                        </tr>
                        <tr>
                            <td class="ecPackages__feature">Contract Term</td>
                            <td>6 months Starter Plan</td>
                            <td>12 months Accelerator Plan</td>
                            <td>12 months Strategist</td>
                        </tr>
                        <tr class="ecPackages__ctaRow">
                            <td>-</td>
                            <td><a href="#ecommContact" class="themeBtn">BOOK STARTER</a></td>
                            <td><a href="#ecommContact" class="themeBtn">GET META + ADS PLAN</a></td>
                            <td><a href="#ecommContact" class="themeBtn">TALK TO A STRATEGIST</a></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="ecPackages__addonHead">
                            <td colspan="4">Add-on Service</td>
                        </tr>
                        <tr>
                            <td class="ecPackages__feature">Shopify Development</td>
                            <td>Free Template, Basic setup &amp; plugin integration</td>
                            <td>CRO-focused landing pages including starter growth</td>
                            <td>Custom UX redesign + advanced starter integrations including Accelerator</td>
                        </tr>
                        <tr>
                            <td class="ecPackages__feature">Pricing</td>
                            <td>Rs. 75,000</td>
                            <td>Rs. 2,00,000</td>
                            <td>Rs. 3,50,000</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>

    <!-- Why Brands Choose Pinaka Digital Section -->
    <section class="ecWhyChoose">
        <div class="container">
            <div class="ecWhyChoose__wrap">
                <div class="ecWhyChoose__left">
                    <h2 class="ecWhyChoose__title">Why Brands Choose Pinaka Digital</h2>
                    <ul class="ecWhyChoose__list">
                        <li>Ecommerce-first growth mindset</li>
                        <li>Proven ROAS &amp; revenue benchmarks</li>
                        <li>In-house media, SEO &amp; creative teams</li>
                        <li>Transparent reporting &amp; accountability</li>
                        <li>Strategic thinking backed by execution</li>
                    </ul>
                    <a href="#ecommContact" class="themeBtn">GET IN TOUCH</a>
                </div>
                <div class="ecWhyChoose__right">
                    <img src="<?php echo THEMEURL; ?>/app/images/ecommerce-why-choose.jpg" alt="Why Brands Choose Pinaka Digital">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="ecFaq">
        <div class="container">
            <h2 class="ecFaq__heading">Frequently Asked Questions</h2>
            <div class="ecFaq__accordion">

                <div class="ecFaq__item active">
                    <div class="ecFaq__header">
                        <h3 class="ecFaq__question">Is Ad spend included in the package fee?</h3>
                        <button class="ecFaq__toggle" aria-label="Toggle"><span></span></button>
                    </div>
                    <div class="ecFaq__answer">
                        <p>Ad spend is separate and paid directly to platforms.</p>
                    </div>
                </div>

                <div class="ecFaq__item">
                    <div class="ecFaq__header">
                        <h3 class="ecFaq__question">Can I upgrade plans later?</h3>
                        <button class="ecFaq__toggle" aria-label="Toggle"><span></span></button>
                    </div>
                    <div class="ecFaq__answer">
                        <p>Yes, you can upgrade your plan at any time during your contract period.</p>
                    </div>
                </div>

                <div class="ecFaq__item">
                    <div class="ecFaq__header">
                        <h3 class="ecFaq__question">Do you work with marketplaces like Amazon?</h3>
                        <button class="ecFaq__toggle" aria-label="Toggle"><span></span></button>
                    </div>
                    <div class="ecFaq__answer">
                        <p>Yes, we offer full marketplace management including Amazon, Flipkart, and other major platforms.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include 'customTemplates/footerGreen.php'; ?>

<?php get_footer(); ?>

<script>
    jQuery(document).ready(function($) {
        // Framework accordion
        $('.ecFramework__header').on('click', function() {
            var $item = $(this).closest('.ecFramework__item');
            if ($item.hasClass('active')) {
                $item.removeClass('active');
                $item.find('.ecFramework__body').slideUp(300);
            } else {
                $('.ecFramework__item.active').removeClass('active').find('.ecFramework__body').slideUp(300);
                $item.addClass('active');
                $item.find('.ecFramework__body').slideDown(300);
            }
        });

        // FAQ accordion
        $('.ecFaq__header').on('click', function() {
            var $item = $(this).closest('.ecFaq__item');
            if ($item.hasClass('active')) {
                $item.removeClass('active');
                $item.find('.ecFaq__answer').slideUp(300);
            } else {
                $('.ecFaq__item.active').removeClass('active').find('.ecFaq__answer').slideUp(300);
                $item.addClass('active');
                $item.find('.ecFaq__answer').slideDown(300);
            }
        });
    });
</script>