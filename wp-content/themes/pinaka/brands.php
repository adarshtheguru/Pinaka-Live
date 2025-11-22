<?php
/**
 * Template Name: Brands
 */
get_header();
?>

<!-- <section class="padding brandHero h100 basicBg" id="brandHero">
    <div class="container">
		<div class="bannerCont">
			<div class="content">
				<div class="mainTitle">We branch beyond digital marketing to build brands</div>
				<p class="para">Growing from just a digital marketing agency to building brands for you</p>
				<div class="ctas">
					<a href="javascript:;" class="themeBtn">Explore Brahmastra</a>
				</div>
			</div>
		</div>
	</div>
	<div class="scrollDownWrapper">
		<div class="pos-rel">
			<img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/scrollPatch.svg" alt="">
			<img src="<?php echo THEMEURL; ?>/app/images/arrowBot.svg" alt="" class="sdArrow img-responsive">
		</div>
	</div>	
</section> -->


<?php include 'customTemplates/heroSection.php' ?>

<section class="padding branding" id="branding">
    <div class="container">
        <div class="secTitle">Branding</div>
        <div class="brandingCont">
            <div class="sideBar">
                <div class="box">
                    <div class="smoothMover" data-cont="aboutUs">Overview</div>
                    <div class="smoothMover" data-cont="concept">Our Strategies</div>
                    <div class="smoothMover" data-cont="bd"> Brand Essence</div>
                    <div class="smoothMover" data-cont="clients">Our Clients</div>
                </div>
            </div>
            <div class="mainCont">
               <div class="aboutUs">
                    <div class="secPrefix">Overview</div>
                    <div class="secTitle">
                        Beyond digital campaigns, Pinaka crafts bold brand strategies that spark connection, inspire loyalty, and leave a lasting mark on every audience. 
                    </div>
                    <p class="para">
                        Pinaka is venturing into a full-scale branding agency, transforming beyond digital campaigns to offer holistic branding strategies that connect and resonate with customers and make lasting experiences for brands.
                    </p>
                    <div class="abtBoxes">
                        <div class="box">
                            <div class="number">95%</div>
                            <div class="title">Client Satisfaction Rate</div>
                            <p>Demonstrating the success and trust built with clients.</p>
                        </div>
                        <div class="box">
                            <div class="number">1 Million</div>
                            <div class="title">Leads Generated</div>
                            <p>Highlighting measurable outcomes and business growth.</p>
                        </div>
                        <div class="box">
                            <div class="number">20%</div>
                            <div class="title">Faster Execution Time</div>
                            <p>Showcasing efficiency and commitment to deadlines.</p>
                        </div>
                    </div>
               </div>
               <div class="concept">
                    <div class="secPrefix">Our Strategies</div>
                    <div class="secTitle">Strategy That Powers Brand Success</div>
                    <p class="para">
                    We create strategies that help brands grow, build clarity, and achieve lasting success through purposeful action and consistent execution.
                    </p>
                    <div class="flowimg">
                        <img class="img-full" src="<?php echo THEMEURL; ?>/app/images/brandsflow.png" alt="">
                    </div>
               </div>
               <div class="bd">
                    <div class="secPrefix">Brand Essence</div>
                    <div class="secTitle">Rooted in Our Brand Truth</div>
                    <p class="para">
                        We build brands from their core truth, creating authentic identities that resonate deeply, inspire trust, and drive meaningful connections with every audience.
                    </p>
                    <div class="brandBoxes">
                        <div class="box">
                            <img src="<?php echo THEMEURL; ?>/app/images/placeEclipse.png" alt="">
                            <div class="title">
                                Discovering What Truly Defines Your Brand From the Inside Out
                            </div>
                            <div class="para">
                                We uncover the values, purpose, and unique voice that define your brand, laying the foundation for authentic and consistent storytelling across all touchpoints.
                            </div>
                        </div>
                        <div class="box">
                            <img src="<?php echo THEMEURL; ?>/app/images/placeEclipse.png" alt="">
                            <div class="title">
                                Positioning Your Brand Strategically to Stand Out and Connect Deeply
                            </div>
                            <div class="para">
                                We align your brand truth with market needs to carve out a clear space in the industry that drives relevance, resonance and recognition.
                            </div>
                        </div>
                    </div>
               </div>
               <div class="clients">
                    <div class="secPrefix">Our Clients</div>
                    <div class="secTitle">Driven by Client-Centered Success</div>
                    <div class="gridBox">
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
                            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client6.png" alt="">
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>
<?php include 'customTemplates/footerGreen.php'; ?>

<?php get_footer(); ?>