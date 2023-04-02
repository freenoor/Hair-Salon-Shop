<?php
 require 'customizer.php';
 function stars_hair_script_enqueue() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() .'/assets/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() .'/assets/css/main.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('slick-css', get_template_directory_uri() .'/assets/css/slick.css', array(), '1.0.0', false);

    wp_enqueue_script('slick-js', get_template_directory_uri().'/assets/js/slick.min.js', array(), '3.1.0', true);
    wp_enqueue_script('jquery-js', get_template_directory_uri().'/assets/jquery/jquery.min.js', array(), '1.0.0', 'all' );
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', array(), '1.0.0', 'all' );
    
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', array(), '3.1.0', true);
    // wp_enqueue_script('aos-js', get_template_directory_uri().'/assets/js/aos.js', array(), '2.0.0', false);

}
add_action ( 'wp_enqueue_scripts','stars_hair_script_enqueue' );

add_theme_support("post-thumbnails");
add_filter('use_block_editor_for_post', '__return_false');
add_theme_support( 'custom-logo' );


function stars_hair_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo1', $defaults );
}
add_action( 'after_setup_theme', 'stars_hair_custom_logo_setup' );



  register_nav_menus( array(  
    'main_menu' => __( 'Main Navigation' ),
    'secondary' => __('Secondary Navigation'),
    'end_menu' => __('End Navigation')
  ) );

add_action('init', function() {

    $labels = [
        'name'              => esc_html( 'Categories', 'textdomain' ),
        'singular_name'     => esc_html( 'Category', 'textdomain' ),
        'menu_name'         => esc_html( 'Categories', 'textdomain' ),
    ];
    $args = [
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'gb_rooms'],
    ];
    register_taxonomy('room-category', ['gb_rooms'], $args );

});





function custom_post_type(){
    // Home slider post type
    $labels_frontpage = array(
        'name' => 'review',
    );
    register_post_type('review', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'menu_position' => 7,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-format-gallery',
    ));
}
add_action('init', 'custom_post_type');



function ourWidgetsInit_ar(){
	// Header
	register_sidebar(array(
	'name' => 'footer_imagw',
	'id' => 'footer_image',
	));
	register_sidebar(array(
	'name' => 'newsletter',
	'id' => 'newsletter',
    ));
    register_sidebar(array(
    'name' => 'category_product',
    'id' => 'category_product',
    ));
    register_sidebar(array(
    'name' => 'Search',
    'id' => 'search',
    ));
    register_sidebar(array(
    'name' => 'Header Search',
    'id' => 'header_shop_search',
    ));
    register_sidebar(array(
        'name' => 'Header Cart',
        'id' => 'header_cart',
        ));

	}
    add_action('widgets_init', 'ourWidgetsInit_ar');
    



//Silder//
function create_test_post_type(){
    $labels = array(
            'name' => 'test posts',
            'singular_name' => 'test post',
            'add_new' => 'Add item',
            'all_items' => 'All items',
            'add_new_item' => 'Add Item',
            'edit_item' => 'Edit Item',
            'new_item' => 'New Items',
            'view_item' => 'View Item',
            'search_item' => 'Search Pfifner',
            'not_found' => 'No items found',
            'not_found_in_trash' => 'No items found in trash',
            'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queruable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type'=> 'post',
        'supports' => array(
            'title',
            'editor',    
            'thumbnail',                    
        ),
        
        'menu_position' =>6,
        
        
    );
    register_post_type('gb_test',$args);

}
add_action('init','create_test_post_type');

remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );


add_theme_support('woocommerce');




add_filter('woocommerce_catalog_orderby', 'wc_customize_product_sorting');

function wc_customize_product_sorting($sorting_options){
    $sorting_options = array(
        'menu_order' => __( 'FILTER', 'woocommerce' ),
        'popularity' => __( 'Sort by popularity', 'woocommerce' ),
        'rating'     => __( 'Sort by average rating', 'woocommerce' ),
        'date'       => __( 'Sort by newness', 'woocommerce' ),
        'price'      => __( 'Sort by price: low to high', 'woocommerce' ),
        'price-desc' => __( 'Sort by price: high to low', 'woocommerce' ),
    );

    return $sorting_options;
}



remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );


add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );

// remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );


function content(){
    echo "<div class='test'>
    ".the_content()."
    </div>";
}
add_action( 'woocommerce_single_product_summary', 'content', 15 );



add_filter( 'add_to_cart_text', 'woo_custom_single_add_to_cart_text' );                // < 2.1
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_single_add_to_cart_text' );  // 2.1 +
  
function woo_custom_single_add_to_cart_text() {
  
    return __( 'Jetzt einkaufen', 'woocommerce' );
  
}


/* Remove Categories from Single Products */ 
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );