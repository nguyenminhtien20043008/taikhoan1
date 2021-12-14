<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<?php do_action('storefront_before_site'); ?>

	<div id="page" class="hfeed site">
		<?php do_action('storefront_before_header'); 
		// 1.shop
		$shop_page_id = wc_get_page_id( 'shop' );
		$shop_page_url = $shop_page_id ? get_permalink( $shop_page_id ) : '';
		//2.cart
		$cart_page_id = wc_get_page_id( 'cart' );
		$cart_page_url = $cart_page_id ? get_permalink( $cart_page_id ) : '';
		//3.checkout
		$checkout_page_id = wc_get_page_id( 'checkout' );
		$checkout_page_url = $checkout_page_id ? get_permalink( $checkout_page_id ) : '';
		//4.My Account
		$my_account_page_id  = wc_get_page_id( 'myaccount' );
		$my_account_page_url = $my_account_page_id ? get_permalink( $my_account_page_id ) : '';
		//5.Logout
		$logout_url = wp_logout_url( );

		if ( get_option( 'woocommerce_force_ssl_checkout' ) == 'yes' ) {
		$logout_url = str_replace( 'http:', 'https:', $logout_url );
		}
		//6.Payment
		$payment_page_id = wc_get_page_id( 'pay' );
		$payment_page_url = $payment_page_id ? get_permalink( $payment_page_id ) : '';
		?>

		<header id="masthead" class="site-header" role="banner">
			<img src="http://wordpress.local/wp-content/uploads/2021/12/backgroup-1.jpg" alt="background" class="banner">
			<a href="" class="logo">Brand.</a>
			<div class="toggle" id="toggle-id-custom-header"></div>
			<nav id="nav-id-custom-header">
				<ul>
					<li><a href="<?=$shop_page_url?>">Shop</a></li>
					<li><a href="<?=$cart_page_url?>">Cart</a></li>
					<li><a href="<?=$checkout_page_url?>">CheckOut</a></li>
					<li><a href="<?=$payment_page_url?>">Payment</a></li>
					<li><a href="<?=$my_account_page_url?>">Account</a></li>
					<li><a href="<?=$logout_url?>">Logout</a></li>
				</ul>
			</nav>
			<?php
			/**
			 * Functions hooked into storefront_header action
			 *
			 * @hooked storefront_header_container                 - 0
			 * @hooked storefront_skip_links                       - 5
			 * @hooked storefront_social_icons                     - 10
			 * @hooked storefront_site_branding                    - 20
			 * @hooked storefront_secondary_navigation             - 30
			 * @hooked storefront_product_search                   - 40
			 * @hooked storefront_header_container_close           - 41
			 * @hooked storefront_primary_navigation_wrapper       - 42
			 * @hooked storefront_primary_navigation               - 50
			 * @hooked storefront_header_cart                      - 60
			 * @hooked storefront_primary_navigation_wrapper_close - 68
			 */



			?>

		</header><!-- #masthead -->

		<?php
		/**
		 * Functions hooked in to storefront_before_content
		 *
		 * @hooked storefront_header_widget_region - 10
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action('storefront_before_content');
		?>

		<div id="content" class="site-content" tabindex="-1">
			<div class="col-full">

				<?php
				do_action('storefront_content_top');
