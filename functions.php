<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/includes/navbar.php';

function add_css_js() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/' . 'bootstrap.min.css' );

   // wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean );
}
add_action( 'wp_enqueue_scripts', 'add_css_js' );

// Custom Logo
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

// Custom Header (Nav Bar)
function dtc_register_my_menus() {
	register_nav_menus(
	  array(
		'header_menu' => __( 'Header Menu' )
	   )
	 );
   }
   add_action( 'init', 'dtc_register_my_menus');


// Custom Ads Images

// WooCommerce
add_theme_support('woocommerce');


// Remove WooCommerce Styles

function remove_woocommerce_styles($enqueue_styles) {
	unset($enqueue_styles['woocommerce-general']); // Remove the gloss
	//unset($enqueue_styles['woocommerce-layout']); // Remove the layout
	//unset($enqueue_styles['woocommerce-smallscreen']); // Remove the smallscreen optimisation
	return $enqueue_styles;
}

add_filter('woocommerce_enqueue_styles', 'remove_woocommerce_styles');


// Custom WooCommerce Styles
function wp_enqueue_woocommerce_style(){
	wp_register_style( 'woocommerce', get_template_directory_uri() . '/css/woocommerce/woocommerce.css' );
	
    if (class_exists('woocommerce')) {
        wp_enqueue_style('woocommerce');
    }
}
add_action('wp_enqueue_scripts', 'wp_enqueue_woocommerce_style');


// Remove WooCommerce Sale Badge
add_filter('woocommerce_sale_flash', 'lw_hide_sale_flash');
function lw_hide_sale_flash()
{
return false;
}


// Remove WooCommerce Purchase & ReadMore Button
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart');

add_filter('the_content', function( $content ){
    $content = preg_replace('/ style=("|\')(.*?)("|\')/','',$content);
    return $content;
}, 20);

// Thumbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
 }
