<?php
function event_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script('custom_script1', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array('jquery') );

}
add_action( 'wp_enqueue_scripts', 'event_styles' );


/***START OF BLOG SIDEBAR***/

function blog_sidebar() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'z-blog-sidebar',
            'name'          => __( 'Blog Sidebar' ),
            'description'   => __( 'This sidebar is for the blog page only.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ));
  }
add_action( 'widgets_init', 'blog_sidebar' );

/***END OF BLOG SIDEBAR***/


/***START OF EVENTS CUSTOM POST TYPE***/
function events_cpt() {
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Events', 'Post Type General Name'),
        'singular_name'       => _x( 'Event', 'Post Type Singular Name'),
        'menu_name'           => __( 'Events'),
        'parent_item_colon'   => __( 'Parent Event'),
        'all_items'           => __( 'All Events'),
        'view_item'           => __( 'View Event'),
        'add_new_item'        => __( 'Add New Event'),
        'add_new'             => __( 'Add New'),
        'edit_item'           => __( 'Edit Event'),
        'update_item'         => __( 'Update Event'),
        'search_items'        => __( 'Search Event'),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash'),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Events'),
        'description'         => __( 'Events'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'taxonomies'          => array( 'events', 'category' ),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'order'               => 'ASC',
        'orderby'             => 'meta_value',
        'meta_key'            => 'eventdate',
        'meta_type'           => 'DATETIME',
        'menu_icon'           => 'dashicons-edit',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'Events', $args );
 
}
add_action( 'init', 'events_cpt', 0 );
/***END OF EVENTS CUSTOM POST TYPE***/


/***START OF RACES CUSTOM POST TYPE***/
function ourraces_cpt() {
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Races', 'Post Type General Name'),
        'singular_name'       => _x( 'Race', 'Post Type Singular Name'),
        'menu_name'           => __( 'Races'),
        'parent_item_colon'   => __( 'Parent Race'),
        'all_items'           => __( 'All Races'),
        'view_item'           => __( 'View Race'),
        'add_new_item'        => __( 'Add New Race'),
        'add_new'             => __( 'Add New'),
        'edit_item'           => __( 'Edit Race'),
        'update_item'         => __( 'Update Race'),
        'search_items'        => __( 'Search Race'),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash'),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Races'),
        'description'         => __( 'Races'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'taxonomies'          => array( 'ourraces', 'category' ),
        'rewrite'             => array( 'slug' => 'our-races', 'with_front' => false),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-edit',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'Our Races', $args );
 
}
add_action( 'init', 'ourraces_cpt', 0 );
/***END OF RACES CUSTOM POST TYPE***/


/***START OF TRAININGS CUSTOM POST TYPE***/
function trainings_cpt() {
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Trainings', 'Post Type General Name'),
        'singular_name'       => _x( 'Training', 'Post Type Singular Name'),
        'menu_name'           => __( 'Trainings'),
        'parent_item_colon'   => __( 'Parent Training'),
        'all_items'           => __( 'All Trainings'),
        'view_item'           => __( 'View Training'),
        'add_new_item'        => __( 'Add New Training'),
        'add_new'             => __( 'Add New'),
        'edit_item'           => __( 'Edit Training'),
        'update_item'         => __( 'Update Training'),
        'search_items'        => __( 'Search Training'),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash'),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Trainings'),
        'description'         => __( 'Trainings'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'taxonomies'          => array( 'trainings', 'category' ),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-edit',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'Trainings', $args );
 
}
add_action( 'init', 'trainings_cpt', 0 );
/***END OF TRAININGS CUSTOM POST TYPE***/


/***START OF CUSTOM LOGOS CUSTOM POST TYPE***/
function logos_cpt() {
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Logos', 'Post Type General Name'),
        'singular_name'       => _x( 'Logo', 'Post Type Singular Name'),
        'menu_name'           => __( 'Logos'),
        'parent_item_colon'   => __( 'Parent Logo'),
        'all_items'           => __( 'All Logos'),
        'view_item'           => __( 'View Logo'),
        'add_new_item'        => __( 'Add New Logo'),
        'add_new'             => __( 'Add New'),
        'edit_item'           => __( 'Edit Logo'),
        'update_item'         => __( 'Update Logo'),
        'search_items'        => __( 'Search Logo'),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash'),
    );
    $args = array(
        'label'               => __( 'Logos'),
        'description'         => __( 'Logos'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail', 'custom-fields'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-images-alt2',
    );

    register_post_type( 'logos', $args );
}
add_action( 'init', 'logos_cpt', 0 );
/***END OF CUSTOM LOGOS CUSTOM POST TYPE***/


/***START OF CUSTOM TAXONOMY FOR LOGOS***/
add_action( 'init', 'logos_cust_tax', 0);

function logos_cust_tax() {
  $labels = array(
    'name' => _x( 'Races', '' ),
    'singular_name' => _x( 'Race', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Races' ),
    'all_items' => __( 'All Races' ),
    'parent_item' => __( 'Parent Race' ),
    'parent_item_colon' => __( 'Parent Race:' ),
    'edit_item' => __( 'Edit Race' ), 
    'update_item' => __( 'Update Race' ),
    'add_new_item' => __( 'Add New Race' ),
    'new_item_name' => __( 'New Race Name' ),
    'menu_name' => __( 'Races' ),
  );  

  register_taxonomy('races', array('logos'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'race' ),
      ));
}

/***END OF CUSTOM TAXONOMY FOR LOGOS***/


/***START OF SHORTCODE FOR LOGO CAROUSEL***/
function logo_carousel_shortcode($atts) {

  $options = shortcode_atts(array (
    'race' => 'general',
  ), $atts);

   /* de-funkify query
   $logo_query = preg_replace('~&#x0*([0-9a-f]+);~ei', 'chr(hexdec("\\1"))', $the_query);
   $logo_query = preg_replace('~&#0*([0-9]+);~e', 'chr(\\1)', $logo_query);
*/
   $args  = array(
    'post_type' => 'logos',
	'posts_per_page'  => -1,
    'tax_query' => array(
      array(
      'taxonomy' => 'races',
      'field' => 'slug',
      'terms' => $options['race'], // you need to know the term_id of your term "example 1"
      )
    )
   );
   // query is made               
   //query_posts($logo_query);
   $logo_query = new WP_Query( $args );
   
   // Reset and setup variables
   $output = '';
   
   $output .= "<div id='logo-carousel' class='carousel js-carousel'>
    <div class='carousel__container js-carousel-container'>
        <div class='carousel__list js-carousel-list'>";

   // the loop
   if ($logo_query->have_posts()) : while ($logo_query->have_posts()) : $logo_query->the_post();
   
      $logo_title = get_the_title($post->ID);
      $logo_link = get_permalink($post->ID);
      $thumbnail = get_the_post_thumbnail($post->ID);
      
      // output all findings - CUSTOMIZE TO YOUR LIKING
      $output .= "<div class='carousel__item js-carousel-item'>
        <a href='$event_link'>$thumbnail</a>
        </div>";
          
   endwhile; else:
      
   endif;

   $output .= "</div></div><div class='carousel__nav'><div class='carousel__button--prev js-carousel-button' data-dir='prev'>&lt;</div><div class='carousel__button--next js-carousel-button' data-dir='next'>&gt;</div></div></div>";
   wp_reset_query();wp_reset_postdata();
    
   return $output;

}
add_shortcode("logos", "logo_carousel_shortcode");
/***END OF SHORTCODE FOR LOGO CAROUSEL***/


/***START OF SHORTCODE FOR HOMEPAGE FEATURED EVENTS/RACES/TRAINING***/
function custom_query_shortcode($atts) {
   // de-funkify query
   $the_query = preg_replace('~&#x0*([0-9a-f]+);~ei', 'chr(hexdec("\\1"))', $the_query);
   $the_query = preg_replace('~&#0*([0-9]+);~e', 'chr(\\1)', $the_query);

   // query is made               
   query_posts($the_query);

   // Reset and setup variables
   $output = '';
   $temp_title = '';
   $temp_link = '';
   
   $output .= "<div class='carousel js-carousel'>
    <div class='carousel__container js-carousel-container'>
        <div class='carousel__list js-carousel-list'>";

    $args = array(
        'post_type'     => array('Events', 'Our Races', 'Trainings'),
        'posts_per_page'  => -1,
        'category_name'   => 'featured',
        'meta_key'          => 'eventdate',
        'orderby'             => 'meta_value',
        'order'               => 'ASC',
   );


   $events_query = new WP_Query($args);

   // the loop
   if ($events_query->have_posts()) : while ($events_query->have_posts()) : $events_query->the_post();
   
        $event_title = get_the_title($post->ID);
  $event_link = get_permalink($post->ID);
  $thumbnail = get_the_post_thumbnail($post->ID);
  $event_datetime = get_field('eventdate', $page->ID);
  $event_excerpt = get_the_excerpt($post->ID);
      
      // output all findings - CUSTOMIZE TO YOUR LIKING
      $output .= "<div class='carousel__item js-carousel-item'>
        $thumbnail
        <h4 style='padding-top: 10px;'><a href='$event_link'>$event_title</a></h4>
        <p class='datetime'>$event_datetime</p>
        <p>$event_excerpt <a href='$event_link'>More Details</a></p>
</div>";
          
   endwhile; else:
      
   endif;
   $output .= "</div></div><div class='carousel__nav'><div class='carousel__button--prev js-carousel-button' data-dir='prev'>&lt;</div><div class='carousel__button--next js-carousel-button' data-dir='next'>&gt;</div></div></div>";
   wp_reset_query();wp_reset_postdata();
    
   return $output;
   
}
add_shortcode("featured", "custom_query_shortcode");
/***END OF SHORTCODE FOR HOMEPAGE FEATURED EVENTS/RACES/TRAINING***/
