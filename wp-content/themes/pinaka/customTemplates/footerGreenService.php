
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
            <img src="<?php echo THEMEURL; ?>/app/images/stockHigh.png" alt="" class="img-responsive">
        </div>
        <div class="content">
            <div class="secTitle">Ready to scale your business through<br> expert Paid Marketing strategies</div>
            <p class="para">Facebook Marketing, Google Ad Marketing, LinkedIn Marketing, Bing Marketing, and Taboola included?</p>
            <p><strong>Join forces with Pinaka Digital today!</strong></p>
            <div class="ctas">
                <a href="javascript:;" class="themeBtn enq_click rOSOff">Get a Quote</a>
                <a href="<?php echo site_url('/contact-us'); ?>" class="blankBtn rOSOff">Contact Us</a>
            </div>
        </div>
    </div>
</section>