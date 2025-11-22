<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer>
	<div class="container">
		<div class="footerWrapper">
			<div class="partA">
				<div class="content">
					<div class="logo">
						<img src="<?php echo THEMEURL; ?>/app/images/Pinaka-logo-white.png" alt="" class="img-responsive footer-logo">
					</div>
					<!-- <div class="title">Stay Ahead in Real Estate Marketing</div> -->
					<!-- <p class="para">Sign up for our newsletter to receive the latest insights, tips, and industry news directly to your inbox.</p> -->
				</div>
				<div class="mailBox">
					<p class="para">Sign up for our newsletter to receive the latest insights, tips,<br class="hidden-xs"> and industry news directly to your inbox.</p><br>
					<?php include 'customTemplates/subscribeMailForm.php'; ?>
				</div>
			</div>
			<div class="partB">
				<div class="companyInfo">
					
					<div class="title">Address</div>
					<p class="mg-tp-10">
						202, 2nd Floor, Vishnu Darshan Apartments, Fergusson College Rd, Rage Path, Model Colony, Shivajinagar, Pune, Maharashtra 411005
					</p>
					<div class="title mg-tp-30">Contact Us</div>
					<div class="mail mg-tp-10">
						<div class="arrow">
							<img width="20" src="<?php echo THEMEURL; ?>/app/images/indiaFlag.png" alt="" class="flag">
						</div>
						<a href="tel:+917498044954">+91-7498044954</a>
					</div>
					<div class="mail">
						<div class="arrow">
							<img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/msg.svg" alt="">
						</div>
						<a href="mailto:sales@pinaka.digital">sales@pinaka.digital</a>
					</div>
				</div>
				<div class="footerNavs">
					<div class="ql cols">
						<div class="title">Quick Links</div>
						<div class="navLinks">
							<a href="<?php echo site_url('/about-us'); ?>">About Us</a>
							<a href="<?php echo site_url('/service'); ?>">Services</a>
							<a href="<?php echo site_url('/our-works'); ?>">Our Works</a>
							<a href="<?php echo site_url('/insights'); ?>">Insights</a>
							<a href="<?php echo site_url('/clients'); ?>">Clients</a>
							<a href="<?php echo site_url('/career'); ?>">Career</a>
							<a href="<?php echo site_url('/contact-us'); ?>">Contact Us</a>
						</div>
					</div>
					<div class=" cols">
						<div class="title">Services</div>
						<div class="navLinks">
							<a href="<?php echo site_url('/services/media-strategy'); ?>">Media Strategy & Consulting</a>
							<a href="<?php echo site_url('/services/digital-social-advertising'); ?>">Growth Marketing</a>
							<a href="<?php echo site_url('/services/new-age-organic-search'); ?>">Organic Search</a>
							<a href="<?php echo site_url('/services/social-media-management'); ?>">Social Media Management</a>
							<a href="<?php echo site_url('/services/online-reputation-management'); ?>">Reputation Management</a>
							<a href="<?php echo site_url('/services/public-relations-influencer/'); ?>">Online PR & Influencer</a>
							<a href="<?php echo site_url('/services/website-design-development'); ?>">Web Development</a>
							<a href="<?php echo site_url('/services/graphic-designs-motion-graphic'); ?>">Creative & Visual Motion</a>
							<a href="https://houseofhues.co/" target="_blank">Brand & Design</a>
						</div>
					</div>
					<div class="socials cols">
						<div class="title">Follow us on</div>
						<div class="navLinks">
							<a href="https://www.facebook.com/PinakaDigitalTechnologies">
								<img src="<?php echo THEMEURL; ?>/app/images/circle-fb.svg">
							</a>
							<a href="https://www.instagram.com/pinaka_digital_technologies">
								<img src="<?php echo THEMEURL; ?>/app/images/circle-ig.svg">
							</a>
							<a href="https://www.linkedin.com/company/pinakadigitaltechnologies">
								<img src="<?php echo THEMEURL; ?>/app/images/circle-in.svg">
							</a>
							<!-- <a href="https://twitter.com/_pinakadigital">
								<img src="<?php echo THEMEURL; ?>/app/images/twitterblue-white.svg">
							</a> -->
						</div>
					</div>
				</div>
			</div>
			<div class="partC">
				<div class="corpInfo">
					© <span class="copyrightYear">2025</span> All Right Reserved, Pinaka Digital Technologies
				</div>
				<div class="pagesInfo">
					<a href="<?php echo site_url('privacy-policy'); ?>">Privacy Policy</a> | <a href="<?php echo site_url('terms-conditions'); ?>">Terms & Conditions</a> | <a href="<?php echo site_url('refund-policy'); ?>">Refund Policy</a>
				</div>
			</div>
		</div>
	</div>
</footer>
	<div class="mob-footer visible-xs">
		<div class="row">
			<div class="col-6">
				<a href="tel:+917498044954" class="mob-call-btn"><span>+91-7498044954</span></a>
			</div>
			<div class="col-6">
				<a href="javascript:;" class="mob_enq_click enq_click mob-enq-btn" data-event-category="Footer"
					data-event-action="Click" data-event-name="Enquire Now">Enquire Now</a>
			</div>
		</div>
	</div>
	<?php include 'customTemplates/popUpForm.php' ?>

	<?php wp_footer(); ?>
	<script>
		var wpData = {
			siteUrl: "<?php echo esc_url( get_site_url() ); ?>"
		};
	</script>
	<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.umd.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/zoom/lg-zoom.umd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
	<script src="https://assets.codepen.io/16327/ScrollTrigger.min.js"></script>
	<!-- <script src="/assets/js/gsapanimation.js" defer></script> -->
	<script src="<?php echo THEMEURL; ?>/assets/js/lenis-min.js"></script>
	<script type="text/javascript" src="<?php echo THEMEURL; ?>/assets/js/validate.js"></script>
	<script src="<?php echo THEMEURL; ?>/assets/js/all.js"></script>

	</body>
</html>
