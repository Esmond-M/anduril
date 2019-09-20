<?php
function anduril_init() {
  if (!is_admin()) {
    wp_enqueue_script('jquery');
  }
}
add_action('init', 'anduril_init');

function anduril_enqueue_scripts() {
  // $ss_version = rand(1,1000);
  $ss_version = '2.0';
  //Styles
  wp_enqueue_style('permanentMarkerStyle','https://fonts.googleapis.com/css?family=Permanent+Marker',false);
  wp_enqueue_style('robotoCondensedStyle','https://fonts.googleapis.com/css?family=Roboto+Condensed',false);
  wp_enqueue_style('montserratStyle','https://fonts.googleapis.com/css?family=Montserrat',false);
  wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
  wp_enqueue_style('actionNetworkStyle',get_template_directory_uri() . '/css/action_network.css',false);
  wp_enqueue_style('actionNetworkStyleMod',get_template_directory_uri() . '/css/action_network_mod.css',false);
  wp_enqueue_style('andurilStyle',get_template_directory_uri() . '/css/anduril.css', array(), $ss_version);
  wp_enqueue_style('andurilWidgetStyle',get_template_directory_uri() . '/css/widgets.css', array(), $ss_version);

  //Scripts
  wp_enqueue_script('andurilBase',get_template_directory_uri() . '/js/anduril.js',false);
  wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), true);
}
add_action('wp_enqueue_scripts','anduril_enqueue_scripts');

function anduril_setup() {
  //Register nav
  register_nav_menu('primary', __('Primary navigation','wptuts'));
  //Thumbnail supoort for posts
  add_theme_support( 'post-thumbnails');

  //Exceprt field for pages
  add_post_type_support( 'page', 'excerpt' );
}
add_action( 'after_setup_theme', 'anduril_setup' );

require_once('wp-bootstrap-navwalker.php');

require_once('inc/widgets.php');

require_once('inc/anduril_sort_posts/anduril_sort_posts.php');

require_once('inc/anduril_template_finder.php');

//Remove default gallery styling so we can render it via /js/andruil.js' rederGallery() function
add_filter( 'use_default_gallery_style', '__return_false' );

// add_filter( 'wp_nav_menu_items', 'add_search_to_nav', 10, 2 );
//
// function add_search_to_nav( $items, $args )
// {
//     $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page">SEARCH</li>';
//     return $items;
// }
/**
 * Changes the redirect URL for the Return To Shop button in the cart.
 *
 * @return string
 */
/**
 * Changes the redirect URL for the Return To Shop button in the cart.
 *
 * @return string
 */
/**
 * Rename product data tabs
 */

// Change the description tab heading to product name
add_filter( 'woocommerce_product_description_heading', 'wc_change_product_description_tab_heading', 10, 1 );
function wc_change_product_description_tab_heading( $title ) {
	echo "<h2>Currently Signed Up</h2>";
}

/**
 * Remove related products output
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

/**
 * @snippet       Check if Product Category is in the Order
 * @how-to        Watch tutorial @ https://businessbloomer.com/?p=19055
 * @sourcecode    https://businessbloomer.com/?p=72914
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 3.2.1
 */
 
add_action( 'woocommerce_thankyou', 'bbloomer_custom_woocommerce_auto_complete_order', 5 );
 
function bbloomer_custom_woocommerce_auto_complete_order( $order_id ) { 
 
    if ( ! $order_id ) {
        return;
    }
 
// 1. Get order object
 
    $order = wc_get_order( $order_id );
 
// 2. Initialise $cat_in_order variable
   
    $cat_state_voice1 = false;
	$cat_state_voice2 = false;
 
// 3. Get order items and loop through them...
// ... if product in category, edit $cat_in_order
   
    $items = $order->get_items(); 
     
    foreach ( $items as $item ) {
         
        $product_id = $item['product_id'];
      	 	//state voice 1 category
        if ( has_term( 'state-voices-1', 'product_cat', $product_id ) ) {
             $cat_state_voice1 = true;
            break;
        }
			 	//state voice 2 category
      if ( has_term( 'state-voices-2', 'product_cat', $product_id ) ) {
             $cat_state_voice2 = true;
            break;
        }
    }
 
// 4. change order status default $cat_in_order == true
   	//state voice 1 category
    if (  $cat_state_voice1 ) {
   

    $order->update_status( 'completed-state-1' );
       
    }
	 	//state voice 2 category
       if (  $cat_state_voice2 ) {
   

    $order->update_status( 'completed-state-2' );
       
    }
}  
  