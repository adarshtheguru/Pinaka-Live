<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
?>
<?php
$menu_items = wp_get_nav_menu_items('main-nav'); // Replace with your menu name
$menu_tree = [];

if ($menu_items) {
    // Step 2: Build Tree
    foreach ($menu_items as $item) {
        if (!$item->menu_item_parent) {
            $menu_tree[$item->ID] = [
                'title' => $item->title,
                'url'   => $item->url,
                'children' => []
            ];
        } else {
            $menu_tree[$item->menu_item_parent]['children'][] = [
                'title' => $item->title,
                'url'   => $item->url
            ];
        }
    }
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	 <?php
		// Force Yoast SEO output
		if ( function_exists( 'wpseo_head' ) ) {
		    wpseo_head();
		}

		// Fallback canonical if Yoast not active
		if ( ! function_exists( 'wpseo_head' ) ) {
		    $canonical = ( is_home() || is_front_page() )
		        ? home_url( '/' )
		        : get_permalink();
		    echo '<link rel="canonical" href="' . esc_url( $canonical ) . '">';
		}

    wp_head();
    ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo THEMEURL; ?>/assets/css/main.css">
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E3178XCLP2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E3178XCLP2');
</script>
</head>

<body>
	<header>
		<div class="container pos-rel">
			<div class="row">
				<div id="comp-logo">
					<div class="pull-left col-2 col-xs-9 brand-logo">
						<a href="<?php echo site_url('/'); ?>" class="goto-home">
							<img src="<?php echo THEMEURL; ?>/app/images/Pinaka-logo.png" class="img-responsive logo-black">
							<img src="<?php echo THEMEURL; ?>/app/images/Pinaka-logo-white.png" class="img-responsive white-logo">
						</a>
					</div>
					<div class="col-10 col-xs-3 pull-right">
						<div class="right-btn">
							<a href="javascript:;" class="blue-btn hidden-xs enq_click rOSOff pull-right">Get a Quote</a>
							<div class="hamburger pull-right">
								<span class="bar1"></span>
								<span class="bar2"></span>
								<span class="bar3"></span>
							</div>
						</div>
						<div class="col-12 lower">
							<div class="nav-links">
								<!-- <?php
									wp_nav_menu(array(
									    'theme_location' => 'header-menu',
									    'menu_class'     => 'main-menu',
									    'container'      => 'nav',
									    'container_class'=> 'main-nav flex space-x-6',
									));
									?> -->
									
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="hamburgerMenu">
			<div class="container">
				<div class="navBox">
					<div class="linkBox">
						<ul class="hamMenuA">
							    <?php foreach ($menu_tree as $item): ?>

							        <?php 
							            $has_children = !empty($item['children']);
							            $item_url = $has_children ? 'javascript:void(0)' : esc_url($item['url']);
							            $item_class = $has_children ? 'menu-parent' : '';
							        ?>
							        <?php 
										$extra_class = (strtolower($item['title']) === 'services') ? 'mobile-service visible-sm' : '';
										$is_services = (strtolower($item['title']) === 'services');
										?>
										<?php 
											$item_url = (!empty($item['url'])) ? esc_url($item['url']) : 'javascript:void(0)';
										?>
							        <li class="<?php echo $extra_class; ?> <?php echo $has_children ? 'hasSubMenu' : ''; ?>">
							            <a href="<?php echo $item_url; ?>" class="<?php echo $item_class; ?>">
							            	<span>
										    <?php echo esc_html($item['title']); ?>
										    </span>
										    <?php if ($is_services): ?>
										        <span class="menu-arrow visible-sm">
										            <img src="<?php echo THEMEURL; ?>/app/images/greaterThan.svg" alt="arrow">
										        </span>
										    <?php endif; ?>
										</a>

							            <?php if ($has_children): ?>
							                <ul class="hamMenuB">
							                    <?php foreach ($item['children'] as $child): ?>
							                        <li>
							                            <a href="<?php echo esc_url($child['url']); ?>">
							                                <?php echo esc_html($child['title']); ?>
							                            </a>
							                        </li>
							                    <?php endforeach; ?>
							                </ul>
							            <?php endif; ?>
							        </li>

							    <?php endforeach; ?>

						</ul>
					</div>
					<div class="addressBox">
						<div class="service-list">
							<h2 class="title"><a href="<?php echo site_url('/service'); ?>">Services</a> <a href="javascript:;" class="close-menu visible-sm">&times;</a></h2>
							<div class="service-list-menu">
								<div class="service-menu-wrap">
									<img src="<?php echo THEMEURL; ?>/app/images/menu-icon-1.svg" class="img-responsive">
									<div>
										<h3 class="title">Performance</h3>
										<ul>
											<li>
												<a href="<?php echo site_url('/services/media-strategy'); ?>">Media Strategy</a>
											</li>
											<li>
												<a href="<?php echo site_url('/services/digital-social-advertising'); ?>">Digital Social Marketing</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="service-menu-wrap">
									<img src="<?php echo THEMEURL; ?>/app/images/menu-icon-2.svg" class="img-responsive">
									<div>
										<h3 class="title">Organic Marketing</h3>
										<ul>
											<li>
												<a href="<?php echo site_url('/services/new-age-organic-search'); ?>">Organic Search</a>
											</li>
											<li>
												<a href="<?php echo site_url('/services/social-media-management'); ?>">Social Media Marketing</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="service-menu-wrap">
									<img src="<?php echo THEMEURL; ?>/app/images/menu-icon-3.svg" class="img-responsive">
									<div>
										<h3 class="title">Tech & Development</h3>
										<ul>
											<li>
												<a href="<?php echo site_url('/services/website-design-development'); ?>">Website Development</a>
											</li>
											<li>
												<a href="<?php echo site_url('/services/website-design-development'); ?>">UX/UI Designs</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="service-menu-wrap">
									<img src="<?php echo THEMEURL; ?>/app/images/menu-icon-4.svg" class="img-responsive">
									<div>
										<h3 class="title">PR Services</h3>
										<ul>
											<li>
												<a href="<?php echo site_url('/services/public-relations-influencer'); ?>">Public Relations & Influencer</a>
											</li>
											
										</ul>
									</div>
								</div>
								<div class="service-menu-wrap">
									<img src="<?php echo THEMEURL; ?>/app/images/menu-icon-5.svg" class="img-responsive">
									<div>
										<h3 class="title">Brand Design</h3>
										<ul>
											<li>
												<a href="https://houseofhues.co" target="_blank">Branding</a>
											</li>
											<li>
												<a href="<?php echo site_url('/services/graphic-designs-motion-graphic'); ?>">Graphic & Motion Designs</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>