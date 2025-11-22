
<?php
$instagram_feed_shortcode = get_field('instagram_feed'); // ACF field name

if ($instagram_feed_shortcode) {
    ?>
    <section class="padding  scroll-animate fade-in">
    <div class="container"><?php
    echo do_shortcode($instagram_feed_shortcode);
    ?>
</div>
</section>
<?php
}
?>

<section class="footerGreen" id="footerGreen">
	<div class="fgCont">
        <div class="imgBox">
            <img src="<?php echo THEMEURL; ?>/app/images/stockHigh.png" alt="" class="img-responsive scroll-animate clip-reveal">
        </div>
        <div class="content scroll-animate slide-in-right delay-5">
            <div class="secTitle">Let's Get Started <br> on Your Success Journey</div>
            <p class="para">Reach Out for a Demo or Request a Tailored Quote</p>
            <div class="ctas">
                <a href="javascript:;" class="themeBtn enq_click rOSOff">Get a Quote</a>
                <a href="<?php echo site_url('/contact-us'); ?>" class="blankBtn rOSOff">Contact Us</a>
            </div>
        </div>
    </div>
</section>