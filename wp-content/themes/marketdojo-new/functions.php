<?php
define( 'WP_MEMORY_LIMIT', '256M' );
ob_start();
ob_clean();

require_once('admin/index.php'); // load theme option panel

global $flatsome_opt;

$flatsome_opt = $smof_data;

if(!is_admin()){

function register_foundation_style() {
  wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i', 'style');
  wp_enqueue_style('font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css', 'style');
  wp_enqueue_style('bootstrap.min.css', get_template_directory_uri() . '/css/bootstrap.min.css', 'style');
  wp_enqueue_style('jquery.fancybox.min.css', get_template_directory_uri() . '/css/jquery.fancybox.min.css', 'style');
  wp_enqueue_style('jquery.bxslider.min', get_template_directory_uri() . '/css/jquery.bxslider.min.css', 'style');
  if(is_page(array(639,2512,2492))){
    wp_enqueue_style('style_category', get_template_directory_uri() . '/css-category/style_category.css', 'style');
  }elseif(is_page(array(641,2516,2608))){
    wp_enqueue_style('style_innovation', get_template_directory_uri() . '/css-innovation/style_innovation.css', 'style');
  }elseif(is_page(array(643,2514,2610))){
    wp_enqueue_style('style_sim', get_template_directory_uri() . '/css-sim/style_sim.css', 'style');
  }else{
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', 'style');
  }


  if ( is_page_template( array('template_landing.php','template_demo.php' ,'template_landing2.php','template_call.php','template_reverse-auction.php','template_landing5.php' )) ) {
    wp_enqueue_style('style2', get_template_directory_uri() . '/css/style2.css', 'style');
  }

  if(is_page(array(639,2512,2492))){
    wp_enqueue_style('responsive_category', get_template_directory_uri() . '/css-category/responsive_category.css', 'style');
  }elseif(is_page(array(641,2516,2608))){
    wp_enqueue_style('responsive_innovation', get_template_directory_uri() . '/css-innovation/responsive_innovation.css', 'style');
  }elseif(is_page(array(643,2514,2610))){
    wp_enqueue_style('responsive_sim', get_template_directory_uri() . '/css-sim/responsive_sim.css', 'style');
  }else{
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', 'style');
  }
	wp_enqueue_style('main', get_stylesheet_uri(), 'style');
	wp_enqueue_style('responsive', get_template_directory_uri() . '/css/pa_custom.css', 'style');
  //wp_enqueue_style('jquery.bxslider.min', get_template_directory_uri() . '/css/jquery.bxslider.min.css', 'style');
}

add_action( 'wp_enqueue_scripts', 'register_foundation_style' );

function register_foundation_script(){
  wp_enqueue_script('jquery.min', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array('jquery'), true, true);
  wp_enqueue_script('bootstrap.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), true, true);
  wp_enqueue_script('slick.min', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), true, true);
  wp_enqueue_script('placeholder.min', get_template_directory_uri() . '/js/placeholder.min.js', array('jquery'), true, true);
  wp_enqueue_script('jquery.fancybox.min.js', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), true, true);
  wp_enqueue_script('chat', get_template_directory_uri() . '/js/chat.js', array('jquery'), true, true);
  wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), true, true);

  wp_enqueue_script('jquery.bxslider.min', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), true, true);

  wp_enqueue_script('isotope.pkgd.js', get_template_directory_uri() . '/js/isotope.pkgd.js', array('jquery'), true, true);
	
  wp_enqueue_script('jquery.waypoints.min.js', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery'), true, true);
  wp_enqueue_script('jquery.counterup.js', get_template_directory_uri() . '/js/jquery.counterup.js', array('jquery'), true, true);
}

add_action( 'wp_enqueue_scripts', 'register_foundation_script' );

}

add_theme_support('post-thumbnails');

add_image_size( 'resource_home_thumb', 360, 197, true ); //(cropped)

add_image_size( 'testimonial_thumb', 149, 73, true ); //(cropped)

if (function_exists('register_nav_menu')) {
    register_nav_menu('main_menu', 'Main Menu');
}

if (function_exists('register_nav_menu')) {
  register_nav_menu('marketdojo_menu', 'Market Dojo Product Menu');
}

if (function_exists('register_nav_menu')) {
  register_nav_menu('categorydojo_menu', 'Category Dojo Product Menu');
}

if (function_exists('register_nav_menu')) {
  register_nav_menu('innovationdojo_menu', 'Innovation Dojo Product Menu');
}
if (function_exists('register_nav_menu')) {
  register_nav_menu('simdojo_menu', 'Sim Dojo Product Menu');
}

if (function_exists('register_nav_menu')) {
  register_nav_menu('language_menu', 'Language Menu');
}

if (function_exists('register_nav_menu')) {
    register_nav_menu('landing_6_menu', 'Landing 6 Menu');
}

function smart_loginout($items, $args) {
  if( $args->theme_location == 'main_menu' ) {
      $items.='<li class="signup"><a href="https://secure.marketdojo.com/signup">Sign Up</a></li>';
      $items.='<li class="login"><a href="https://secure.marketdojo.com/login">Login</a></li>';
      return $items;
  }elseif( $args->theme_location == 'simdojo_menu' ) {
    $items.='<li class="signup"><a href="https://secure.marketdojo.com/signup">Sign Up for Free</a></li>';
    return $items;
  }elseif( $args->theme_location == 'innovationdojo_menu' ) {
    $items.='<li class="signup"><a href="https://secure.marketdojo.com/signup">Sign Up for Free</a></li>';
    return $items;
  }elseif( $args->theme_location == 'categorydojo_menu' ) {
    $items.='<li class="signup"><a href="https://secure.marketdojo.com/signup">Sign Up for Free</a></li>';
    return $items;
  }elseif( $args->theme_location == 'marketdojo_menu' ) {
    $items.='<li class="signup"><a href="https://secure.marketdojo.com/signup">Sign Up for Free</a></li>';
    return $items;
  }else{
		return $items;
	}
}
 
add_filter('wp_nav_menu_items', 'smart_loginout', 10, 2);

//Logo
function my_login_logo() {
    global $flatsome_opt;
    $site_logo = $flatsome_opt['site_logo'];
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo $site_logo; ?>);
            height:79px;
            width:316px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100%;
            padding-bottom: 0;
        }

    </style>
    <?php
}

add_action('login_enqueue_scripts', 'my_login_logo');

function my_login_logo_url() {
    return home_url();
}

add_filter('login_headerurl', 'my_login_logo_url');



add_action('init', 'resource_register');
 
function resource_register() {
 
 $labels = array(
  'name' => _x('Resource', 'post type general name'),
  'singular_name' => _x('Resource', 'post type singular name'),
  'add_new' => _x('Add New', 'Resource'),
  'add_new_item' => __('Add New Resource'),
  'edit_item' => __('Edit Resource'),
  'new_item' => __('New Resource'),
  'view_item' => __('View Resource'),
  'search_items' => __('Search Resource'),
  'not_found' =>  __('Nothing found'),
  'not_found_in_trash' => __('Nothing found in Trash'),
  'parent_item_colon' => ''
 );
 
 $args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array('title','editor','thumbnail','comments')
   ); 
 
 register_post_type( 'resource' , $args );
}
add_action( 'init', 'resource_create_taxonomies', 0 );

function resource_create_taxonomies() 
{
    // Project Categories
    register_taxonomy('resource-cat',array('resource'),array(
        'hierarchical' => true,
        'label' => 'Resource Categories',
        'singular_name' => 'Resource Category',
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'resource-category' )
    ));
    register_taxonomy('resource-tag','resource',array(
        'hierarchical' => false,
        'label' => 'Resource Tags',
        'singular_name' => 'Resource Tags',
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'resource-tag' ),
      ));
}

add_action('init', 'faq_register');
 
function faq_register() {
 
 $labels = array(
  'name' => _x('FAQs', 'post type general name'),
  'singular_name' => _x('FAQs', 'post type singular name'),
  'add_new' => _x('Add New', 'FAQs'),
  'add_new_item' => __('Add New FAQs'),
  'edit_item' => __('Edit FAQs'),
  'new_item' => __('New FAQs'),
  'view_item' => __('View FAQs'),
  'search_items' => __('Search FAQs'),
  'not_found' =>  __('Nothing found'),
  'not_found_in_trash' => __('Nothing found in Trash'),
  'parent_item_colon' => ''
 );
 
 $args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array('title','editor')
   ); 
 
 register_post_type( 'faq' , $args );
}

add_action( 'init', 'faq_create_taxonomies', 0 );

function faq_create_taxonomies() 
{
    // Project Categories
    register_taxonomy('faq-cat',array('faq'),array(
        'hierarchical' => true,
        'label' => 'FAQ Categories',
        'singular_name' => 'FAQ Category',
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'faq-cat' )
    ));
}

add_action('init', 'testimonial_register');
 
function testimonial_register() {
 
 $labels = array(
  'name' => _x('Testimonials', 'post type general name'),
  'singular_name' => _x('Testimonials', 'post type singular name'),
  'add_new' => _x('Add New', 'Testimonials'),
  'add_new_item' => __('Add New Testimonials'),
  'edit_item' => __('Edit Testimonials'),
  'new_item' => __('New Testimonials'),
  'view_item' => __('View Testimonials'),
  'search_items' => __('Search Testimonials'),
  'not_found' =>  __('Nothing found'),
  'not_found_in_trash' => __('Nothing found in Trash'),
  'parent_item_colon' => ''
 );
 
 $args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array('title','thumbnail')
   ); 
 
 register_post_type( 'testimonial' , $args );
}

function create_post_type() {
  /*     for features    */
  register_post_type( 'features',
    array(
      'labels' => array(
        'name' => __( 'Features' ),
        'singular_name' => __( 'Feature' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => ['title', 'editor', 'thumbnail']
    )
  );

}
add_action( 'init', 'create_post_type' );




function more_post_ajax(){

$offset = $_POST["offset"];
$ppp = $_POST["ppp"];
$fetype=$_POST['fetype'];
//header("Content-Type: text/html");

$args2 = array(
    'posts_per_page' => $ppp,
    'offset' => $offset,
    'post_type' => $fetype
);

$loop = new WP_Query($args2);

  $pst_count=0; 
  $a=array();

while ($loop->have_posts()) : $loop->the_post(); 
?>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="resource_box <?php the_field('background_color'); ?> hide">
        <a href="javascript:void(0)<?php //echo get_permalink($post->ID); ?>" class="read_more_features hover_content" data-feature_id="<?php echo get_the_ID(); ?>">
          <span>
            <p>
                <?php echo get_field('icon_content'); ?>
            </p>
			  <em>read more</em>
          </span>
        </a>
        <?php $url = get_field('sourcing_list_image'); ?>
        <span class="ico"><img src="<?php echo $url['url'] ?>" alt="<?php echo $url['alt'] ?>"></span>
        <span class="label"><?php the_title();?></span>
      </div>
  </div>
<?php
endwhile;

exit;
}

add_image_size( 'resource_thumb_new', 255, 127, true ); //(cropped)


add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax'); 
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

if ( function_exists('register_sidebar') ) 
register_sidebar(array( 
'name'          => 'Footer Column 1 Menu',
'id'  => 'footer_column_1_menu',
'before_widget' => '', 
'after_widget' => '', 
'before_title' => '<h3>', 
'after_title' => '</h3>', 
));
register_sidebar(array( 
'name'          => 'Footer Column 2 Menu',
'id'  => 'footer_column_2_menu',
'before_widget' => '', 
'after_widget' => '', 
'before_title' => '<h3>', 
'after_title' => '</h3>', 
));
register_sidebar(array( 
'name'          => 'Footer Column 3 Menu',
'id'  => 'footer_column_3_menu',
'before_widget' => '', 
'after_widget' => '', 
'before_title' => '<h3>', 
'after_title' => '</h3>', 
));
register_sidebar(array( 
'name'          => 'Footer Column 4 Menu',
'id'  => 'footer_column_4_menu',
'before_widget' => '', 
'after_widget' => '', 
'before_title' => '<h3>', 
'after_title' => '</h3>', 
));

add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );

function wpb_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
 
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

        /*     for Case Studies    */
register_post_type( 'case_studies',
    array(
      'labels' => array(
        'name' => __( 'Case Studies' ),
        'singular_name' => __( 'Case Study' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => ['title', 'editor', 'thumbnail']
      //'supports' => array( 'thumbnail' )
    )
);

add_action( 'init', 'create_post_type' );

//creating taxonomy for Case_Studies
 
add_action( 'init', 'case_studies_Category', 0 );
 
function Case_Studies_Category() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Categories', 'Category' ),
    'singular_name' => _x( 'Category', 'Category' ),
    'search_items' =>  __( 'Search Categories' ),
    'popular_items' => __( 'Popular Categories' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'separate_items_with_commas' => __( 'Separate Categories with commas' ),
    'add_or_remove_items' => __( 'Add or remove Categories' ),
    'choose_from_most_used' => __( 'Choose from the most used Categories' ),
    'menu_name' => __( 'Category' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('case_studies_category','case_studies',array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'case_studies_category' ),
  ));
}

add_action('init', 'tutorials_register');
 
function tutorials_register() {
 
 $labels = array(
  'name' => _x('Tutorial', 'post type general name'),
  'singular_name' => _x('Tutorial', 'post type singular name'),
  'add_new' => _x('Add New', 'Tutorial'),
  'add_new_item' => __('Add New Tutorial'),
  'edit_item' => __('Edit Tutorial'),
  'new_item' => __('New Tutorial'),
  'view_item' => __('View Tutorial'),
  'search_items' => __('Search Tutorial'),
  'not_found' =>  __('Nothing found'),
  'not_found_in_trash' => __('Nothing found in Trash'),
  'parent_item_colon' => ''
 );
 
 $args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array('title','editor','thumbnail','comments')
   ); 
 
 register_post_type( 'tutorial' , $args );
}
add_action( 'init', 'tutorial_create_taxonomies', 0 );

function tutorial_create_taxonomies() 
{
  // Project Categories
  register_taxonomy('tutorial-cat',array('tutorial'),array(
      'hierarchical' => true,
      'label' => 'Tutorial Categories',
      'singular_name' => 'Tutorial Category',
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'tutorial-cat' )
  ));
}

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {

  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $output .="";
  }
  
  function end_lvl( &$output,$depth = 0, $args = array() ) {
    $output .="";
  }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
      global $wp_query;
      $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
      
      $class_names = $value = '';
  
      $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      $classes[] = 'menu-item-' . $item->ID;
      if( in_array('menu-item-has-children', $classes) ){
        $classes[] = 'has-sub-menu ';
      }
      $normal_dropdown = get_field( 'normal_dropdown', $item->ID );
      if( $normal_dropdown && in_array('yes', $normal_dropdown) ) {
        if( in_array('menu-item-has-children', $classes) ){
          $classes[] = 'normal_dropdown ';
        }
      }
      $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
      $class_names = ' class="' . esc_attr( $class_names ) .' '.$classes_new. '"';
      
      
      $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
      $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
      $mega_menu = get_field( 'mega_menu', $item->ID );
      
      
      
      //$output .=$depth;
      if($depth==0){

      $output .= $indent . '<li' . $id . $value . $class_names . '>';
      
      $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) . '"' : '';
      $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) . '"' : '';
      $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) . '"' : '';
      $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) . '"' : '';
  
      $item_output = $args->before;
      $item_output .= '<a' . $attributes . '>';
      $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
      $item_output .= '</a>';
      $item_output .= $args->after;
      
      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

      }

      $mega_menu_head = get_field( 'mega_menu_head', $item->ID );
      if( $mega_menu_head && in_array('yes', $mega_menu_head) ) {
        $output .='<div class="mega_menu_holder clear"><div class="container"><div class="row">';
      }


      if($depth==1){

        if( $mega_menu && in_array('yes', $mega_menu) ) {
          $menu_column = get_field( 'menu_column', $item->ID );
          if($menu_column=='three_column'){
            $image_block = get_field( 'image_block', $item->ID );
            $content_block = get_field( 'content_block', $item->ID );
            $menu_sub_heading = $item->attr_title;

            if( $image_block && in_array('yes', $image_block) ) {
              $upload_image = get_field( 'upload_image', $item->ID );
              if($upload_image){
                $color_field = get_field( 'color_field', $item->ID );
				//$menu_sub_heading = get_field( 'menu_sub_heading', $item->ID );
                $output .='<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><div class="each_menu_box '.$color_field.'"><div class="heading">';
                $output .='<img src="'.$upload_image['url'].'" alt="'.$upload_image['alt'].'">';
                $output .='<span>'.$menu_sub_heading.'</span></div><div class="content"><ul>';
              }else{
                $color_field = get_field( 'color_field', $item->ID );
				//$menu_sub_heading = get_field( 'menu_sub_heading', $item->ID );
                $output .='<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><div class="each_menu_box '.$color_field.'"><div class="heading">';
                $output .='<h3>'.$item->title.'</h3>';
                $output .='<span>'.$menu_sub_heading.'</span></div><div class="content"><ul>';
              }
            }elseif( $content_block && in_array('yes', $content_block) ){
			  //$menu_sub_heading = get_field( 'menu_sub_heading', $item->ID );
              $output .='<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><div class="each_menu_box"><div class="heading">';
              $output .='<h3><a href="'.$item->url.'">'.$item->title.'</a></h3>';
              $output .='<span>'.$menu_sub_heading.'</span></div><div class="content">';
              $output .='<p>'.$item->description.'</p><ul>';
            }

          }elseif($menu_column=='four_column'){

            $image_block = get_field( 'image_block', $item->ID );
            $content_block = get_field( 'content_block', $item->ID );
            $menu_sub_heading = $item->attr_title;

            if( $image_block && in_array('yes', $image_block) ) {
              $upload_image = get_field( 'upload_image', $item->ID );
              if($upload_image){
                $color_field = get_field( 'color_field', $item->ID );
				//$menu_sub_heading_new = get_field( 'menu_sub_heading_new', $item->ID );
                $output .='<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><div class="each_menu_box '.$color_field.'"><div class="heading">';
                $output .='<img src="'.$upload_image['url'].'" alt="'.$upload_image['alt'].'">';
                $output .='<span>'.$menu_sub_heading.'</span></div><div class="content"><ul>';
              }else{
                $color_field = get_field( 'color_field', $item->ID );
				//$menu_sub_heading_new = get_field( 'menu_sub_heading_new', $item->ID );
                $output .='<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><div class="each_menu_box '.$color_field.'"><div class="heading">';
                $output .='<h3>'.$item->title.'</h3>';
                $output .='<span>'.$menu_sub_heading.'</span></div><div class="content"><ul>';
              }
            }elseif( $content_block && in_array('yes', $content_block) ){
			  //$menu_sub_heading = get_field( 'menu_sub_heading_new', $item->ID );
              $output .='<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><div class="each_menu_box"><div class="heading">';
              $output .='<h3><a href="'.$item->url.'">'.$item->title.'</a></h3>';
              $output .='<span>'.$menu_sub_heading.'</span></div><div class="content">';
              $output .='<p>'.$item->description.'</p><ul>';
            }

          }elseif($menu_column=='five_column'){

            $image_block = get_field( 'image_block', $item->ID );
            $content_block = get_field( 'content_block', $item->ID );
            $menu_sub_heading = $item->attr_title;

            if( $image_block && in_array('yes', $image_block) ) {
              $upload_image = get_field( 'upload_image', $item->ID );
              if($upload_image){
                $color_field = get_field( 'color_field', $item->ID );
				//$menu_sub_heading = get_field( 'menu_sub_heading', $item->ID );
                $output .='<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><div class="each_menu_box '.$color_field.'"><div class="heading">';
                $output .='<img src="'.$upload_image['url'].'" alt="'.$upload_image['alt'].'">';
                $output .='<span>'.$menu_sub_heading.'</span></div><div class="content"><ul>';
              }else{
                $color_field = get_field( 'color_field', $item->ID );
				//$menu_sub_heading = get_field( 'menu_sub_heading', $item->ID );
                $output .='<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><div class="each_menu_box '.$color_field.'"><div class="heading">';
                $output .='<h3>'.$item->title.'</h3>';
                $output .='<span>'.$menu_sub_heading.'</span></div><div class="content"><ul>';
              }
            }elseif( $content_block && in_array('yes', $content_block) ){
			  //$menu_sub_heading = get_field( 'menu_sub_heading', $item->ID );
              $output .='<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><div class="each_menu_box"><div class="heading">';
              $output .='<h3><a href="'.$item->url.'">'.$item->title.'</a></h3>';
              $output .='<span>'.$menu_sub_heading.'</span></div><div class="content">';
              $output .='<p>'.$item->description.'</p><ul>';
            }

          }




        }

      }
      if($normal_dropdown && in_array('yes', $normal_dropdown)){
        $output .='<ul>';
      }
      if($depth==1){
        if(!in_array('yes', $mega_menu) && !in_array('yes', $content_block)){
        $output .= $indent . '<li' . $id . $value . $class_names . '>';
        
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) . '"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) . '"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) . '"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) . '"' : '';
    
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        $output .= "</li>\n";
        }
      }
            

      if($depth==2 && !in_array('menu-item-has-children', $classes)){
        
        $output .= $indent . '<li' . $id . $value . $class_names . '>';
        
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) . '"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) . '"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) . '"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) . '"' : '';
    
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        $output .= "</li>\n";
      }

      


      
  }
  function end_el( &$output, $item, $depth = 0, $args = array() ) { 
    $mega_menu_head = get_field( 'mega_menu_head', $item->ID );
    $mega_menu = get_field( 'mega_menu', $item->ID );
    $normal_dropdown = get_field( 'normal_dropdown', $item->ID );
    $image_block = get_field( 'image_block', $item->ID );
    $content_block = get_field( 'content_block', $item->ID );

    if($normal_dropdown && in_array('yes', $normal_dropdown)){
      $output .='</ul>';
    }

    if($depth==1){
      if( $mega_menu && in_array('yes', $mega_menu) ) {
        if( $image_block && in_array('yes', $image_block) ) {
          $output .='</ul></div></div></div>';
        }elseif( $content_block && in_array('yes', $content_block) ){
          $output .='</ul></div></div></div>';
        }
      }
    }



    if( $mega_menu_head && in_array('yes', $mega_menu_head) ) {
      $output .="$indent</div></div></div>\n";
    }

    if($depth==0){
      $output .= "</li>\n";
    }
  }
}

add_action('init', 'guides_register');
 
function guides_register() {
 
 $labels = array(
  'name' => _x('Guide', 'post type general name'),
  'singular_name' => _x('Guide', 'post type singular name'),
  'add_new' => _x('Add New', 'Guide'),
  'add_new_item' => __('Add New Guide'),
  'edit_item' => __('Edit Guide'),
  'new_item' => __('New Guide'),
  'view_item' => __('View Guide'),
  'search_items' => __('Search Guide'),
  'not_found' =>  __('Nothing found'),
  'not_found_in_trash' => __('Nothing found in Trash'),
  'parent_item_colon' => ''
 );
 
 $args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array('title','editor','thumbnail','comments')
   ); 
 
 register_post_type( 'guide' , $args );
}
add_action( 'init', 'guide_create_taxonomies', 0 );

function guide_create_taxonomies() 
{
  // Project Categories
  register_taxonomy('guide-cat',array('guide'),array(
      'hierarchical' => true,
      'label' => 'Guide Categories',
      'singular_name' => 'Guide Category',
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'guide-cat' )
  ));
}

add_action('init', 'research_register');
 
function research_register() {
 
 $labels = array(
  'name' => _x('Research', 'post type general name'),
  'singular_name' => _x('Research', 'post type singular name'),
  'add_new' => _x('Add New', 'Research'),
  'add_new_item' => __('Add New Research'),
  'edit_item' => __('Edit Research'),
  'new_item' => __('New Research'),
  'view_item' => __('View Research'),
  'search_items' => __('Search Research'),
  'not_found' =>  __('Nothing found'),
  'not_found_in_trash' => __('Nothing found in Trash'),
  'parent_item_colon' => ''
 );
 
 $args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array('title','editor','thumbnail','comments')
   ); 
 
 register_post_type( 'research' , $args );
}
add_action( 'init', 'research_create_taxonomies', 0 );

function research_create_taxonomies() 
{
  // Project Categories
  register_taxonomy('research-cat',array('research'),array(
      'hierarchical' => true,
      'label' => 'Research Categories',
      'singular_name' => 'Research Category',
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'research-cat' )
  ));
}

add_action('init', 'create_landing_slider_post_type');

function create_landing_slider_post_type() {
    register_post_type('landing_slider_type', array(
        'labels' => array(
            'name' => __('Landing Slider')
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
        )
            )
    );
}

add_action('init', 'product_register');

function product_register() {

$labels = array(
 'name' => _x('Product', 'post type general name'),
 'singular_name' => _x('Product', 'post type singular name'),
 'add_new' => _x('Add New', 'Product'),
 'add_new_item' => __('Add New Product'),
 'edit_item' => __('Edit Product'),
 'new_item' => __('New Product'),
 'view_item' => __('View Product'),
 'search_items' => __('Search Product'),
 'not_found' =>  __('Nothing found'),
 'not_found_in_trash' => __('Nothing found in Trash'),
 'parent_item_colon' => ''
);

$args = array(
 'labels' => $labels,
 'public' => true,
 'publicly_queryable' => true,
 'show_ui' => true,
 'query_var' => true,
 'rewrite' => true,
 'capability_type' => 'post',
 'hierarchical' => false,
 'menu_position' => null,
 'supports' => array('title','editor','thumbnail')
  ); 

register_post_type( 'product' , $args );
}
add_action( 'init', 'product_create_taxonomies', 0 );

function product_create_taxonomies() 
{
 // Project Categories
 register_taxonomy('product-cat',array('product'),array(
     'hierarchical' => true,
     'label' => 'Product Categories',
     'singular_name' => 'Product Category',
     'show_ui' => true,
     'query_var' => true,
     'rewrite' => array('slug' => 'product-cat' )
 ));
}

function get_product(){
  $product_id=$_POST['prod_id'];
  global $q_config;
  $language = $q_config['language'];
  $product_details = get_post( $product_id );
  setup_postdata( $product_details );
  $src = wp_get_attachment_image_src( get_post_thumbnail_id($product_id), array( 5600,1000 ), false, '' );
  $img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
  $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
  $sub_heading=qtranxf_use_language($language, get_field('sub_heading',$product_id), false, true);
  $sub_heading_image=get_field('sub_heading_image',$product_id);
  $button_1_text=qtranxf_use_language($language, get_field('button_1_text',$product_id), false, true);
  $button_1_link=qtranxf_use_language($language, get_field('button_1_link',$product_id), false, true);
  $button_2_text=qtranxf_use_language($language, get_field('button_2_text',$product_id), false, true);
  $button_2_link=qtranxf_use_language($language, get_field('button_2_link',$product_id), false, true);
  $background_image=get_field('background_image',$product_id);
  $video_link=qtranxf_use_language($language, get_field('video_link',$product_id), false, true);
?>
<!-- esourcing sec start -->
<section class="body_section esourcing_sec" style="background-image:url(<?php echo $background_image['url']; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="left_part">
                    <h2><span><?php echo $sub_heading; ?> </span></h2>
                    <?php if($sub_heading_image){ ?>
                    <figure><img src="<?php echo $sub_heading_image['url']; ?>" alt="<?php echo $sub_heading_image['alt']; ?>"></figure>
                    <?php } ?>
                    <?php the_content(); ?>
                    <div class="btn_sec">
                      <?php if($button_1_text){ ?>
                        <a href="<?php echo $button_1_link; ?>" class="btn fill_btn"><?php echo $button_1_text; ?></a>
                      <?php } ?>
                      <?php if($button_2_text){ ?>
                        <a href="<?php echo $button_2_link; ?>" class="btn"><?php echo $button_2_text; ?></a>
                      <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="right_part">
                  <?php if($src){ ?>
                    <figure>
                      <a href="<?php echo $video_link; ?>" data-fancybox>
                        <img src="<?php echo $src[0]; ?>" alt="<?php echo $alt_text; ?>">
                      </a>
                    </figure>
                  <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- esourcing sec end -->
<?php
  wp_reset_postdata();
exit();
}

add_action("wp_ajax_get_product", "get_product");
add_action("wp_ajax_nopriv_get_product", "get_product");


function get_feature(){
  $feature_id=$_POST['feature_id'];
  global $q_config;
  $language = $q_config['language'];
  $feature_details = get_post( $feature_id );
  setup_postdata( $feature_details );
  $src = wp_get_attachment_image_src( get_post_thumbnail_id($feature_id), array( 5600,1000 ), false, '' );
  $img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
  $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
  $sub_heading=qtranxf_use_language($language, get_field('sub_heading',$feature_id), false, true);
  $sub_heading_image=get_field('sub_heading_image',$feature_id);
  $content=qtranxf_use_language($language, $feature_details->post_content, false, true);
  $button_1_text=qtranxf_use_language($language, get_field('button_1_text',$feature_id), false, true);
  $button_1_link=qtranxf_use_language($language, get_field('button_1_link',$feature_id), false, true);
  $button_2_text=qtranxf_use_language($language, get_field('button_2_text',$feature_id), false, true);
  $button_2_link=qtranxf_use_language($language, get_field('button_2_link',$feature_id), false, true);
  $background_image=get_field('background_image',$feature_id);
  $video_link=qtranxf_use_language($language, get_field('video_link',$feature_id), false, true);

?>
<!-- esourcing sec start -->
<section class="body_section esourcing_sec" style="background-image:url(<?php echo $background_image['url']; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="left_part">
                    <h2><span><?php echo $sub_heading; ?> </span></h2>
                    <?php if($sub_heading_image){ ?>
                    <figure><img src="<?php echo $sub_heading_image['url']; ?>" alt="<?php echo $sub_heading_image['alt']; ?>"></figure>
                    <?php } ?>
                    <?php the_content(); ?>
                    <div class="btn_sec">
                      <?php if($button_1_text){ ?>
                        <a href="<?php echo $button_1_link; ?>" class="btn fill_btn"><?php echo $button_1_text; ?></a>
                      <?php } ?>
                      <?php if($button_2_text){ ?>
                        <a href="<?php echo $button_2_link; ?>" class="btn"><?php echo $button_2_text; ?></a>
                      <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="right_part">
                  <?php if($src){ ?>
                    <figure>
                      <a href="<?php echo $video_link; ?>" data-fancybox>
                        <img src="<?php echo $src[0]; ?>" alt="<?php echo $alt_text; ?>">
                      </a>
                    </figure>
                  <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- esourcing sec end -->
<?php
wp_reset_postdata();
exit();
}

add_action("wp_ajax_get_feature", "get_feature");
add_action("wp_ajax_nopriv_get_feature", "get_feature");

function download_pdf(){
  global $wpdb, $table_prefix;
  $tablename=$table_prefix . 'subscribers';
  $file_post_id=$_POST['post_id_subscription'];
  if (!is_email($_POST['demail'])) {
    echo json_encode(array('status' => 'error', 'message' => 'Please enter your email correctly.'));
    exit;
  }
  $send_to = get_option('admin_email');
  $pdf=get_field('file_path',$file_post_id);
  $file_type=get_field('file_type',$file_post_id);
  if($file_type=='video'){
    $video_id = explode("?v=", $pdf); // For videos like http://www.youtube.com/watch?v=...
    if (empty($video_id[1]))
        $video_id = explode("/v/", $pdf); // For videos like http://www.youtube.com/watch/v/..

    $video_id = explode("&", $video_id[1]); // Deleting any other params
    $video_id = $video_id[0];
    $pdf='<iframe src="https://www.youtube.com/embed/'.$video_id.'?rel=0&autoplay=1" allow="autoplay" width="100%" height="400"></iframe>';
  }
  $headers = 'From: Market Dojo  <'.$send_to.'>';
  $subject = "Subscription Form Completed From Resources";
  $message = "Hello,\n\n Please check the following details filled up from Resources \n\n Name : ".$_POST['dname']."\n\n Email : ".$_POST['demail']."\n\n Company Name : ".$_POST['dcompanyname'] ."\n\n Phone : " . $_POST['dphone'];

  $wpdb->insert(
    $tablename,
    array(
      'name' => $_POST['dname'],
      'email' => $_POST['demail'],
      'companyname' => $_POST['dcompanyname'],
      'phone' => $_POST['dphone']
    ),
    array(
      '%s',
      '%s',
      '%s',
      '%s'
    )
  );

  if (wp_mail($send_to, $subject, $message, $headers)) {
    echo json_encode(array('statuscont' => 'success', 'message' => $pdf,'type' => $file_type));
    exit;
  } else {
    echo json_encode(array('statuscont' => 'error', 'message' => 'Sorry there are some problem.'));
    exit;
  }
}

add_action("wp_ajax_subscription_action", "download_pdf");
add_action("wp_ajax_nopriv_subscription_action", "download_pdf");

add_action('init', 'catdojoproduct_register');

function catdojoproduct_register() {

$labels = array(
 'name' => _x('Category Dojo Product', 'post type general name'),
 'singular_name' => _x('Category Dojo Product', 'post type singular name'),
 'add_new' => _x('Add New', 'Category Dojo Product'),
 'add_new_item' => __('Add New Category Dojo Product'),
 'edit_item' => __('Edit Category Dojo Product'),
 'new_item' => __('New Category Dojo Product'),
 'view_item' => __('View Category Dojo Product'),
 'search_items' => __('Search Category Dojo Product'),
 'not_found' =>  __('Nothing found'),
 'not_found_in_trash' => __('Nothing found in Trash'),
 'parent_item_colon' => ''
);

$args = array(
 'labels' => $labels,
 'public' => true,
 'publicly_queryable' => true,
 'show_ui' => true,
 'query_var' => true,
 'rewrite' => true,
 'capability_type' => 'post',
 'hierarchical' => false,
 'menu_position' => null,
 'supports' => array('title','editor','thumbnail')
  ); 

register_post_type( 'category-product' , $args );
}
add_action( 'init', 'catdojoproduct_create_taxonomies', 0 );

function catdojoproduct_create_taxonomies() 
{
 // Project Categories
 register_taxonomy('category-product-cat',array('category-product'),array(
     'hierarchical' => true,
     'label' => 'Category Dojo Product Categories',
     'singular_name' => 'Category Dojo Product Category',
     'show_ui' => true,
     'query_var' => true,
     'rewrite' => array('slug' => 'category-product-cat' )
 ));
}


add_action('init', 'innodojoproduct_register');

function innodojoproduct_register() {

$labels = array(
 'name' => _x('Innovation Dojo Product', 'post type general name'),
 'singular_name' => _x('Innovation Dojo Product', 'post type singular name'),
 'add_new' => _x('Add New', 'Innovation Dojo Product'),
 'add_new_item' => __('Add New Innovation Dojo Product'),
 'edit_item' => __('Edit Innovation Dojo Product'),
 'new_item' => __('New Innovation Dojo Product'),
 'view_item' => __('View Innovation Dojo Product'),
 'search_items' => __('Search Innovation Dojo Product'),
 'not_found' =>  __('Nothing found'),
 'not_found_in_trash' => __('Nothing found in Trash'),
 'parent_item_colon' => ''
);

$args = array(
 'labels' => $labels,
 'public' => true,
 'publicly_queryable' => true,
 'show_ui' => true,
 'query_var' => true,
 'rewrite' => true,
 'capability_type' => 'post',
 'hierarchical' => false,
 'menu_position' => null,
 'supports' => array('title','editor','thumbnail')
  ); 

register_post_type( 'innovation-product' , $args );
}
add_action( 'init', 'innodojoproduct_create_taxonomies', 0 );

function innodojoproduct_create_taxonomies() 
{
 // Project Categories
 register_taxonomy('innovation-product-cat',array('innovation-product'),array(
     'hierarchical' => true,
     'label' => 'Innovation Dojo Product Categories',
     'singular_name' => 'Innovation Dojo Product Category',
     'show_ui' => true,
     'query_var' => true,
     'rewrite' => array('slug' => 'innovation-product-cat' )
 ));
}

add_action('init', 'simdojoproduct_register');

function simdojoproduct_register() {

$labels = array(
 'name' => _x('Sim Dojo Product', 'post type general name'),
 'singular_name' => _x('Sim Dojo Product', 'post type singular name'),
 'add_new' => _x('Add New', 'Sim Dojo Product'),
 'add_new_item' => __('Add New Sim Dojo Product'),
 'edit_item' => __('Edit Sim Dojo Product'),
 'new_item' => __('New Sim Dojo Product'),
 'view_item' => __('View Sim Dojo Product'),
 'search_items' => __('Search Sim Dojo Product'),
 'not_found' =>  __('Nothing found'),
 'not_found_in_trash' => __('Nothing found in Trash'),
 'parent_item_colon' => ''
);

$args = array(
 'labels' => $labels,
 'public' => true,
 'publicly_queryable' => true,
 'show_ui' => true,
 'query_var' => true,
 'rewrite' => true,
 'capability_type' => 'post',
 'hierarchical' => false,
 'menu_position' => null,
 'supports' => array('title','editor','thumbnail')
  ); 

register_post_type( 'sim-product' , $args );
}
add_action( 'init', 'simdojoproduct_create_taxonomies', 0 );

function simdojoproduct_create_taxonomies() 
{
 // Project Categories
 register_taxonomy('sim-product-cat',array('sim-product'),array(
     'hierarchical' => true,
     'label' => 'Sim Dojo Product Categories',
     'singular_name' => 'Sim Dojo Product Category',
     'show_ui' => true,
     'query_var' => true,
     'rewrite' => array('slug' => 'sim-product-cat' )
 ));
}


add_action( 'init', 'pagetag_create_taxonomies', 0 );

function pagetag_create_taxonomies() 
{
 // Project Categories
 register_taxonomy('page-tag',array('page'),array(
     'hierarchical' => true,
     'label' => 'Page Tags',
     'singular_name' => 'Page Tags',
     'show_ui' => true,
     'query_var' => true,
     'rewrite' => array('slug' => 'page-tag' )
 ));
}

add_action('admin_menu', 'subscription_contact_menu');

function subscription_contact_menu() {
	
    $of_page=add_menu_page('Subscriptions Contacts', 'Subscriptions Contacts', 'manage_options' , 'subscription_details', 'subscriptiondetails');

	
}
function subscriptiondetails() {
	
    include 'subscriberdetails_admin.php';
	
}

add_action('init', 'buffer_start');

function buffer_start() { 
	
	ob_start(); 
	if(isset($_POST["export"])){
		global $wpdb, $table_prefix;
    $tablename=$table_prefix . 'subscribers';
		$output = fopen("php://output", "w");  
		fputcsv($output, array('ID', 'Name','Email', 'Phone Number', 'Country'));  
		$query="SELECT * FROM ".$tablename." ORDER BY id DESC";
		$fivesdrafts = $wpdb->get_results($query,'ARRAY_A');
		if ( $fivesdrafts )
		{
			foreach ( $fivesdrafts as $post )
			{

				fputcsv($output, $post);  
			}
			fclose($output);  
		}
		header('Content-Type: text/csv');  
		header('Content-Disposition: attachment; filename="newsletter.csv"');  
		header('Pragma: no-cache');
		header('Expires: 0');
		exit();
	}
	return ob_get_clean();
}

add_action('init', 'categorydojo_features');
 
function categorydojo_features() {
 
 $labels = array(
  'name' => _x('Category Dojo Features', 'post type general name'),
  'singular_name' => _x('Categorydojofeatures', 'post type singular name'),
  'add_new' => _x('Add New', 'Categorydojo Features'),
  'add_new_item' => __('Add New Categorydojo Features'),
  'edit_item' => __('Edit Categorydojo Features'),
  'new_item' => __('New Categorydojo Features'),
  'view_item' => __('View Categorydojo Features'),
  'search_items' => __('Search Categorydojo Features'),
  'not_found' =>  __('Nothing found'),
  'not_found_in_trash' => __('Nothing found in Trash'),
  'parent_item_colon' => ''
 );
 
 $args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array('title','editor','thumbnail','comments')
   ); 
 
 register_post_type( 'categorydojo' , $args );
}

add_action('init', 'simdojo_features');
function simdojo_features() {
 
 $labels = array(
  'name' => _x('Sim Dojo Features', 'post type general name'),
  'singular_name' => _x('Simdojofeatures', 'post type singular name'),
  'add_new' => _x('Add New', 'Simdojo Features'),
  'add_new_item' => __('Add New Simdojo Features'),
  'edit_item' => __('Edit Simdojo Features'),
  'new_item' => __('New Simdojo Features'),
  'view_item' => __('View Simdojo Features'),
  'search_items' => __('Search Simdojo Features'),
  'not_found' =>  __('Nothing found'),
  'not_found_in_trash' => __('Nothing found in Trash'),
  'parent_item_colon' => ''
 );
 
 $args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array('title','editor','thumbnail','comments')
   ); 
 
 register_post_type( 'simdojo' , $args );
}

add_action('init', 'innovationdojo_features');
function innovationdojo_features() {
 
 $labels = array(
  'name' => _x('Innovation Dojo Features', 'post type general name'),
  'singular_name' => _x('Innovationdojofeatures', 'post type singular name'),
  'add_new' => _x('Add New', 'Innovationdojo Features'),
  'add_new_item' => __('Add New Innovationdojo Features'),
  'edit_item' => __('Edit Innovationdojo Features'),
  'new_item' => __('New Innovationdojo Features'),
  'view_item' => __('View Innovationdojo Features'),
  'search_items' => __('Search Innovationdojo Features'),
  'not_found' =>  __('Nothing found'),
  'not_found_in_trash' => __('Nothing found in Trash'),
  'parent_item_colon' => ''
 );
 
 $args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array('title','editor','thumbnail','comments')
   ); 
 
 register_post_type( 'innovationdojo' , $args );
}

add_action('init', 'marketdojopricebox_details');
function marketdojopricebox_details() {
 
 $labels = array(
  'name' => _x('Market Dojo Pricing Box Listing', 'post type general name'),
  'singular_name' => _x('Market Dojo Pricing Box Listing', 'post type singular name'),
  'add_new' => _x('Add New', 'Market Dojo Pricing Box Listing'),
  'add_new_item' => __('Add New Market Dojo Pricing Box Listing'),
  'edit_item' => __('Edit Market Dojo Pricing Box Listing'),
  'new_item' => __('New Market Dojo Pricing Box Listing'),
  'view_item' => __('View Market Dojo Pricing Box Listing'),
  'search_items' => __('Search Market Dojo Pricing Box Listing'),
  'not_found' =>  __('Nothing found'),
  'not_found_in_trash' => __('Nothing found in Trash'),
  'parent_item_colon' => ''
 );
 
 $args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array('title','editor')
   ); 
 
 register_post_type( 'marketdojopricingbox' , $args );
}


function remove_css_js_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
	$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_css_js_ver', 10, 2 ); 

add_action('init', 'enterprise_register');

function enterprise_register() {

$labels = array(
 'name' => _x('Enterprise Listing', 'post type general name'),
 'singular_name' => _x('Enterprise Listing', 'post type singular name'),
 'add_new' => _x('Add New', 'Enterprise Listing'),
 'add_new_item' => __('Add New Enterprise Listing'),
 'edit_item' => __('Edit Enterprise Listing'),
 'new_item' => __('New Enterprise Listing'),
 'view_item' => __('View Enterprise Listing'),
 'search_items' => __('Search Enterprise Listing'),
 'not_found' =>  __('Nothing found'),
 'not_found_in_trash' => __('Nothing found in Trash'),
 'parent_item_colon' => ''
);

$args = array(
 'labels' => $labels,
 'public' => true,
 'publicly_queryable' => true,
 'show_ui' => true,
 'query_var' => true,
 'rewrite' => true,
 'capability_type' => 'post',
 'hierarchical' => false,
 'menu_position' => null,
 'supports' => array('title','editor','thumbnail')
  ); 

register_post_type( 'enterprise_list' , $args );
}

add_action('init', 'formlisting_details');
function formlisting_details() {
 
 $labels = array(
  'name' => _x('Market Dojo Form Listing', 'post type general name'),
  'singular_name' => _x('Market Dojo Form Listing', 'post type singular name'),
  'add_new' => _x('Add New', 'Market Dojo Form Listing'),
  'add_new_item' => __('Add New Market Dojo Form Listing'),
  'edit_item' => __('Edit Market Dojo Form Listing'),
  'new_item' => __('New Market Dojo Form Listing'),
  'view_item' => __('View Market Dojo Form Listing'),
  'search_items' => __('Search Market Dojo Form Listing'),
  'not_found' =>  __('Nothing found'),
  'not_found_in_trash' => __('Nothing found in Trash'),
  'parent_item_colon' => ''
 );
 
 $args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array('title')
   ); 
 
 register_post_type( 'form_listing' , $args );
}

function search_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_search) {
      $query->set('post_type', 'resource');
      if(isset($_GET['level_3']) && !empty($_GET['level_3'])){
        $level_3=$_GET['level_3'];
        if($_GET['level_2']=='blog_by_year'){
          $datequery = array(
            array (
              'year'    => $level_3
            )
          );
          $query->set( 'date_query', $datequery );
        }else{
          $taxquery = array(
            array (
              'taxonomy' => 'resource-cat',
              'field' => 'term_id',
              'terms'    => $level_3

            )
          );
          $query->set( 'tax_query', $taxquery );
        }

      }elseif(isset($_GET['level_2']) && !empty($_GET['level_2'])){
        $level_2=$_GET['level_2'];
        $taxquery = array(
          array (
            'taxonomy' => 'resource-cat',
            'field' => 'term_id',
            'terms'    => $level_2

          )
        );
        $query->set( 'tax_query', $taxquery );
      }elseif(isset($_GET['level_1']) && !empty($_GET['level_1'])){
        $level_1=$_GET['level_1'];
        $taxquery = array(
          array (
            'taxonomy' => 'resource-cat',
            'field' => 'term_id',
            'terms'    => $level_1

          )
        );
        $query->set( 'tax_query', $taxquery );
      }

      if(isset($_GET['value']) && !empty($_GET['value'])){
        $value=$_GET['value'];
        $meta_query = array(
          'relation' => 'AND',
          array(
            'key' => 'resource_details',
            'value' => $value,
            'compare' => 'LIKE',
          ),
        );
        $query->set( 'meta_query', $meta_query );
      }

    }
    $query->set('posts_per_page', -1);
  }
}
add_action('pre_get_posts','search_filter');

function ST4_columns_head($defaults, $post_type) {
    $defaults['featured_image'] = 'Featured Image';
	if($post_type=='resource'){
		$defaults['category_list'] = 'Categories';
		$defaults['resource_type'] = 'Resource Type';
    }
    return $defaults;
}
 
// SHOW THE FEATURED IMAGE
function ST4_columns_content($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
        $post_featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail', false, '' );
        if ($post_featured_image) {
            echo '<img src="' . $post_featured_image[0] . '" width="150px" />';
        }
    }
	if ($column_name == 'category_list') {
		if(get_the_terms($post->ID, 'resource-cat')){
			foreach((get_the_terms($post->ID, 'resource-cat')) as $category) { 
				echo $category->name . ' '; 
			}
		}
    }
	if ($column_name == 'resource_type') {
		$resource_types=get_field('resource_details',$post->ID);
		foreach($resource_types as $resource_type) {
		  echo '<p class="'.$resource_type.'">'.$resource_type . '</p>';
		}
	}
}
add_filter('manage_posts_columns', 'ST4_columns_head',10,2);
add_action('manage_posts_custom_column', 'ST4_columns_content', 10, 2);

add_action('quick_edit_custom_box',  'misha_quick_edit_fields', 10, 2);
add_action('bulk_edit_custom_box',  'misha_quick_edit_fields', 10, 2);

function misha_quick_edit_fields( $column_name, $post_type ) {

	// you can check post type as well but is seems not required because your columns are added for specific CPT anyway

	switch( $column_name ) :
		case 'resource_type': {
      wp_nonce_field( 'misha_q_edit_nonce', 'misha_nonce' );
			echo '<fieldset class="inline-edit-col-right">
				<div class="inline-edit-col">
					<div class="inline-edit-group wp-clearfix"><label class="alignleft">
					<input type="checkbox" name="resource_detail_val[]" value="host_participant">
					<span class="checkbox-title">Host and Participant</span>
				</label><label class="alignleft">
        <input type="checkbox" name="resource_detail_val[]" value="host">
        <span class="checkbox-title">Host</span>
      </label><label class="alignleft">
      <input type="checkbox" name="resource_detail_val[]" value="participant">
      <span class="checkbox-title">Participant</span>
    </label>';

			// for the LAST column only - closing the fieldset element
			echo '</div></div></fieldset>';

			break;

		}

	endswitch;

}

add_action( 'save_post', 'misha_quick_edit_save' );

function misha_quick_edit_save( $post_id ){

	// check user capabilities
	if ( !current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	// check nonce
	if ( !wp_verify_nonce( $_POST['misha_nonce'], 'misha_q_edit_nonce' ) ) {
		return;
	}

	// update checkbox
	if ( isset( $_POST['resource_detail_val'] ) ) {
    $resource_detail_val=$_POST['resource_detail_val'];
    print_r($resource_detail_val);
		update_field('resource_details',$resource_detail_val, $post_id);
	}

}

add_action( 'wp_ajax_misha_save_bulk', 'misha_save_bulk_edit_hook' );
// add_action( 'wp_ajax_{ACTION}', 'FUNCTION NAME' );

function misha_save_bulk_edit_hook() {

	// you can check the same nonce we added in Quick Edit tutorial
	/*if ( !wp_verify_nonce( $_POST['nonce'], 'quick_edit_misha_nonce' ) ) {
		die();
	}*/

	// well, if post IDs are empty, it is nothing to do here
	if( empty( $_POST[ 'post_ids' ] ) ) {
		die();
	}

	// for each post ID
	foreach( $_POST[ 'post_ids' ] as $id ) {

    if ( isset( $_POST['resource_detail_val'] ) ) {
      $resource_detail_val=$_POST['resource_detail_val'];
      print_r($resource_detail_val);
  		update_field('resource_details',$resource_detail_val, $id);
  	}

	}
  return $resource_detail_val;
	die();
}

add_action( 'admin_enqueue_scripts', 'misha_enqueue_quick_edit_population' );
function misha_enqueue_quick_edit_population( $pagehook ) {

	// do nothing if we are not on the target pages
	if ( 'edit.php' != $pagehook ) {
		return;
	}

	wp_enqueue_script( 'populatequickedit', get_stylesheet_directory_uri() . '/js/populate.js', array( 'jquery' ) );

	
}
add_action('wp_ajax_show_more_team_pages', 'show_more_team_pages');
add_action('wp_ajax_nopriv_show_more_team_pages', 'show_more_team_pages');

function show_more_team_pages() {
	if (!isset($_POST['post_id']) || !isset($_POST['offset'])) {
		return;
	}
	$show = 4;
	$start = $_POST['offset'];
	$end = $start+$show;
	$post_id = $_POST['post_id'];
	if (have_rows('section_1_listing', $post_id)) {
    $section_1_listing = get_field('section_1_listing', $post_id);
    $total = count( $section_1_listing );
		$count = 0;
		while (have_rows('section_1_listing', $post_id)) {
			the_row();
			if ($count < $start) {
				$count++;
				continue;
			}
?>
<li>
  <div class="linkTopBox">
    <div class="linkBox">
      <?php
        $icon=get_sub_field('section_1_list_icon');
        if($icon){
      ?>
      <figure><img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"></figure>
      <?php
        }
      ?>
      <h3><?php the_sub_field('section_1_list_title'); ?></h3>
    </div>
  </div>
  <a class="linkHover" href="<?php the_sub_field('section_1_list_link'); ?>">
    <div class="hovertext">
      <p><?php the_sub_field('section_1_list_content'); ?></p>
      <em>read more</em>
    </div>
  </a>
</li>
<?php
			$count++;
			if ($count == $end) {
				break;
			}
		}
	}
	$content = ob_get_clean();
	$more = false;
	if ($total > $count) {
		$more = true;
	}
	echo json_encode(array('content' => $content, 'more' => $more, 'offset' => $end));
	exit;
}

function get_child_category(){

  $term_id=$_POST['term_id'];
  $current_level=$_POST['current_level'];
  if($term_id){
    $term_children = get_terms( array(
      'taxonomy' => 'resource-cat',
      'hide_empty' => false,
      'parent'	=>	$term_id
    ) );
    echo '<option value="">Select</option>';
    if($term_id=='blog_by_year'){
      $args = array(
        'type'            => 'yearly',
        'limit'           => '50',
        'format'          => 'option',
        'before'          => '',
        'after'           => '',
        'show_post_count' => false,
        'echo'            => 1,
        'order'           => 'DESC',
        'post_type'     => 'resource'
      );
      wp_get_archives( $args );
      exit();
    }elseif($current_level=='level_3'){
      $resourcecats_child = get_terms( array(
        'taxonomy' => 'resource-cat',
        'hide_empty' => false,
        'parent'	=>	$term_id
      ) );
      if ( ! empty( $resourcecats_child ) && ! is_wp_error( $resourcecats_child ) ){
        foreach ( $resourcecats_child as $resourcecat_child ) {
          $resourcecat_child_id=$resourcecat_child->term_id;
          $resourcecats_sub_child = get_terms( array(
            'taxonomy' => 'resource-cat',
            'hide_empty' => false,
            'parent'	=>	$resourcecat_child_id
          ) );
          if ( ! empty( $resourcecats_sub_child ) && ! is_wp_error( $resourcecats_sub_child ) ){
            foreach ( $resourcecats_sub_child as $resourcecat_sub_child ) {
              $resourcecat_sub_child_id=$resourcecat_sub_child->term_id;
              $resourcecat_sub_child_name=$resourcecat_sub_child->name;
        ?>
        <option value="<?php echo $resourcecat_sub_child_id; ?>"><?php echo $resourcecat_sub_child_name; ?></option>
        <?php
            }
          }
        }
      }
    }elseif($current_level=='level_4'){
      $resourcecats_child = get_terms( array(
        'taxonomy' => 'resource-cat',
        'hide_empty' => false,
        'parent'	=>	$term_id
      ) );
      if ( ! empty( $resourcecats_child ) && ! is_wp_error( $resourcecats_child ) ){
        foreach ( $resourcecats_child as $resourcecat_child ) {
          $resourcecat_child_id=$resourcecat_child->term_id;
          $resourcecat_child_name=$resourcecat_child->name;
        	echo '<option value="' . $resourcecat_child_id . '">' . $resourcecat_child_name . '</option>';
        }
      }
    }else{
      if($term_id=='33'){
        echo '<option value="blog_by_year">Blogs By Year</option>';
      }
      if ( ! empty( $term_children )){
        foreach ( $term_children as $child ) {
          $child_id=$child->term_id;
          $child_name=$child->name;
        	echo '<option value="' . $child_id . '">' . $child_name . '</option>';
        }
      }
    }
  }else{
    echo '<option value="">Select</option>';
    if($current_level=='level_2'){
      $resourcecats = get_terms( array(
        'taxonomy' => 'resource-cat',
        'hide_empty' => false,
        'parent'	=>	0
      ) );
      if ( ! empty( $resourcecats ) && ! is_wp_error( $resourcecats ) ){
        foreach ( $resourcecats as $resourcecat ) {
          $resourcecat_id=$resourcecat->term_id;
          $resourcecats_child = get_terms( array(
            'taxonomy' => 'resource-cat',
            'hide_empty' => false,
            'parent'	=>	$resourcecat_id
          ) );
          if ( ! empty( $resourcecats_child ) && ! is_wp_error( $resourcecats_child ) ){
            foreach ( $resourcecats_child as $resourcecat_child ) {
              $resourcecat_child_id=$resourcecat_child->term_id;
              $resourcecat_child_name=$resourcecat_child->name;
  ?>
    <option value="<?php echo $resourcecat_child_id; ?>"><?php echo $resourcecat_child_name; ?></option>
  <?php
            }
          }
        }
      }
    }elseif($current_level=='level_3'){
      $resourcecats = get_terms( array(
        'taxonomy' => 'resource-cat',
        'hide_empty' => false,
        'parent'	=>	0
      ) );
      if ( ! empty( $resourcecats ) && ! is_wp_error( $resourcecats ) ){
        foreach ( $resourcecats as $resourcecat ) {
          $resourcecat_id=$resourcecat->term_id;
          $resourcecats_child = get_terms( array(
            'taxonomy' => 'resource-cat',
            'hide_empty' => false,
            'parent'	=>	$resourcecat_id
          ) );
          if ( ! empty( $resourcecats_child ) && ! is_wp_error( $resourcecats_child ) ){
            foreach ( $resourcecats_child as $resourcecat_child ) {
              $resourcecat_child_id=$resourcecat_child->term_id;
              $resourcecats_sub_child = get_terms( array(
                'taxonomy' => 'resource-cat',
                'hide_empty' => false,
                'parent'	=>	$resourcecat_child_id
              ) );
              if ( ! empty( $resourcecats_sub_child ) && ! is_wp_error( $resourcecats_sub_child ) ){
                foreach ( $resourcecats_sub_child as $resourcecat_sub_child ) {
                  $resourcecat_sub_child_id=$resourcecat_sub_child->term_id;
                  $resourcecat_sub_child_name=$resourcecat_sub_child->name;
    ?>
    <option value="<?php echo $resourcecat_sub_child_id; ?>"><?php echo $resourcecat_sub_child_name; ?></option>
    <?php
                }
              }
            }
          }
        }
      }
    }
  }
  exit();
}

add_action("wp_ajax_get_child_category", "get_child_category");
add_action("wp_ajax_nopriv_get_child_category", "get_child_category");

function get_archives_link_mod ( $link_html ) {
    preg_match ("/value='(.+?)'/", $link_html, $url);
    $requested = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ($requested == $url[1]) {
        $link_html = str_replace("<option", "<option selected='selected'", $link_html);
    }
    return $link_html;
}

add_filter("get_archives_link", "get_archives_link_mod");

add_action('init', 'landingproducts_details');
function landingproducts_details() {

 $labels = array(
  'name' => _x('Landing Page Products', 'post type general name'),
  'singular_name' => _x('Landing Page Products', 'post type singular name'),
  'add_new' => _x('Add New', 'Landing Page Products'),
  'add_new_item' => __('Add New Landing Page Products'),
  'edit_item' => __('Edit Landing Page Products'),
  'new_item' => __('New Landing Page Products'),
  'view_item' => __('View Landing Page Products'),
  'search_items' => __('Search Landing Page Products'),
  'not_found' =>  __('Nothing found'),
  'not_found_in_trash' => __('Nothing found in Trash'),
  'parent_item_colon' => ''
 );

 $args = array(
  'labels' => $labels,
  'public' => false,
  'publicly_queryable' => false,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array('title','thumbnail')
   );

 register_post_type( 'landing_products' , $args );
}

function get_landing_product_details(){
  $product_id=$_POST['product_id'];
  $description_tab_heading = get_field('description_tab_heading',$product_id);
  $description_tab_content = get_field('description_tab_content',$product_id);
  $description_tab_laptop_image = get_field('description_tab_laptop_image',$product_id);
  $description_tab_ipad_image = get_field('description_tab_ipad_image',$product_id);


  $feature_tab_heading = get_field('feature_tab_heading',$product_id);
  $feature_tab_content = get_field('feature_tab_content',$product_id);
  $feature_tab_listing = get_field('feature_tab_listing',$product_id);


  $pricing_tab_heading = get_field('pricing_tab_heading',$product_id);
  $pricing_tab_1st_section_heading = get_field('pricing_tab_1st_section_heading',$product_id);
  $pricing_tab_2nd_section_heading = get_field('pricing_tab_2nd_section_heading',$product_id);
  $pricing_tab_2nd_section_sub_heading = get_field('pricing_tab_2nd_section_sub_heading',$product_id);
  $pricing_tab_3rd_section_content = get_field('pricing_tab_3rd_section_content',$product_id);
  $pricing_tab_4th_section_link_text = get_field('pricing_tab_4th_section_link_text',$product_id);
  $pricing_tab_4th_section_link_type_popup = get_field('pricing_tab_4th_section_link_type_popup',$product_id);
  $pricing_tab_4th_section_link = get_field('pricing_tab_4th_section_link',$product_id);
  $pricing_tab_4th_section_link_popup_form = get_field('pricing_tab_4th_section_link_popup_form',$product_id);

?>

<div class="rightTabBox afterText">
  <div class="tabMainC">
    <div class="mMenu">
      <ul>
        <li class="description_tab"><?php echo $description_tab_heading; ?></li>
        <li class="feature_tab"><?php echo $feature_tab_heading; ?></li>
        <li class="pricing_tab"><?php echo $pricing_tab_heading; ?></li>
      </ul>
    </div>
    <div class="PtwBwrAP">
      <div class="panTab panelDesc description_tab_details">
        <div class="descLeft">
          <?php echo $description_tab_content; ?>
        </div>
        <div class="descRight">
          <?php
            if($description_tab_laptop_image){
          ?>
          <figure class="laptop">
            <img src="<?php echo $description_tab_laptop_image['url']; ?>" alt="<?php echo $description_tab_laptop_image['alt']; ?>">
          </figure>
          <?php
            }
            if($description_tab_ipad_image){
          ?>
          <figure class="ipad">
            <img src="<?php echo $description_tab_ipad_image['url']; ?>" alt="<?php echo $description_tab_ipad_image['alt']; ?>">
          </figure>
          <?php
            }
          ?>
        </div>
      </div>
      <div class="panTab featurePan feature_tab_details">
        <?php echo $feature_tab_content; ?>
        <?php
          if( $feature_tab_listing ):
        ?>
        <ul>
          <?php
            foreach($feature_tab_listing as $feature_tab):
          ?>
          <li><img src="<?php echo $feature_tab['feature_tab_list_image']['url']; ?>" alt="<?php echo $feature_tab['feature_tab_list_image']['alt']; ?>"><?php echo $feature_tab['feature_tab_list_content']; ?></li>
          <?php
            endforeach;
          ?>
        </ul>
        <?php
          endif;
        ?>
      </div>
      <div class="panTab pricePan pricing_tab_details">
        <div class="tablePrice">
          <div class="pHead">
            <h3><?php echo $pricing_tab_1st_section_heading; ?></h3>
          </div>
          <div class="pBody">
            <div class="contentP">
              <span class="priceP"><?php echo $pricing_tab_2nd_section_heading; ?></span>
              <span class="noteP"><?php echo $pricing_tab_2nd_section_sub_heading; ?></span>
            </div>
            <div class="gentextP">
              <?php echo $pricing_tab_3rd_section_content; ?>
            </div>
          </div>
          <?php if($pricing_tab_4th_section_link_text){ ?>
          <div class="pTableBtn">
            <?php
              if($pricing_tab_4th_section_link_type_popup){
            ?>
              <a data-fancybox href="#post-<?php echo $pricing_tab_4th_section_link_popup_form; ?>" class="btn_pricing"><span><?php echo $pricing_tab_4th_section_link_text; ?></span></a>
            <?php
              }else{
            ?>
              <a href="<?php echo $pricing_tab_4th_section_link; ?>" class="btn_pricing"><span><?php echo $pricing_tab_4th_section_link_text; ?></span></a>
            <?php
              }
            ?>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
exit();
}

add_action("wp_ajax_get_landing_product_details", "get_landing_product_details");
add_action("wp_ajax_nopriv_get_landing_product_details", "get_landing_product_details");

add_action('init', 'reviews_list_details');
function reviews_list_details() {

 $labels = array(
  'name' => _x('Reviews Listing', 'post type general name'),
  'singular_name' => _x('Reviews Listing', 'post type singular name'),
  'add_new' => _x('Add New', 'Reviews Listing'),
  'add_new_item' => __('Add New Reviews Listing'),
  'edit_item' => __('Edit Reviews Listing'),
  'new_item' => __('New Reviews Listing'),
  'view_item' => __('View Reviews Listing'),
  'search_items' => __('Search Reviews Listing'),
  'not_found' =>  __('Nothing found'),
  'not_found_in_trash' => __('Nothing found in Trash'),
  'parent_item_colon' => ''
 );

 $args = array(
  'labels' => $labels,
  'public' => false,
  'publicly_queryable' => false,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array('title')
   );

 register_post_type( 'reviews_list' , $args );
}

function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <h2>' . __( "This page is password protected. To view it please enter your password below:" ) . '</h2>
    <div class="formrow">

    <input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" placeholder="Password"/>
    </div>
    <input type="submit" class="btn fill_btn" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
    ';
    if ( ! isset ( $_COOKIE[ 'wp-postpass_' . COOKIEHASH ] ) )
    return $o;

    $msg = esc_html__( 'Sorry, your password is wrong.', 'your_text_domain' );

    // We have a cookie, but it doesn’t match the password.
    $msg = "<p class='custom-password-error-message'>$msg</p>";

    return $o.$msg;
}

add_filter( 'the_password_form', 'my_password_form' );

function custom_js_to_head() {
    ?>
    <script>
    jQuery(function(){
        jQuery("body.post-type-resource .wrap h1 ").append('<a href="edit.php?post_type=resource&export_resource=true" class="page-title-action">Export</a>');
		jQuery("body.post-type-page .wrap h1 ").append('<a href="edit.php?post_type=page&export_page=true" class="page-title-action">Export</a>');
    });
    </script>
    <?php
}
add_action('admin_head', 'custom_js_to_head');

add_action('init', 'export_resources');

function export_resources() {
	ob_start();
	if(isset($_REQUEST["export_resource"])){
    $args = array(
      'post_type' => 'resource',
      'post_status' => 'publish',
      'posts_per_page' => -1,
    );
    $query = new WP_Query( $args );
    if ($query->have_posts()) :
    $output = fopen("php://output", "w");
		//fputcsv($output, array('ID','Link','Title','Content', 'Image', 'Resource Category', 'Resource Type'));
		fputcsv($output, array('ID','Link','Title', 'Image', 'Resource Category', 'Resource Type'));


    while ($query->have_posts()) : $query->the_post();
      $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
      $post['Id']=get_the_ID();
      $post['link']=get_the_permalink();
      $post['title']=get_the_title();
      //$post['content']=get_the_content();
      $post['image']=$src[0];
      $term_list_array = wp_get_post_terms( get_the_ID(), 'resource-cat', array( 'fields' => 'names' ) );
      $terM_list_string=implode(',', $term_list_array);
      $post['resource_category']=$terM_list_string;
      $post['resource_type']=implode(',', get_field('resource_details'));
			fputcsv($output, $post);
		endwhile;
			fclose($output);
		endif;
		header('Content-Type: text/csv');
		header('Content-Disposition: attachment; filename="Resource.csv"');
		header('Pragma: no-cache');
		header('Expires: 0');
		exit();
	}
	return ob_get_clean();
}

add_action('init', 'export_page');

function export_page() {
	ob_start();
	if(isset($_REQUEST["export_page"])){
    $args = array(
      'post_type' => 'page',
      'post_status' => 'publish',
      'posts_per_page' => -1,
    );
    $query = new WP_Query( $args );
    if ($query->have_posts()) :
    $output = fopen("php://output", "w");
		//fputcsv($output, array('ID','Link','Title','Content', 'Image'));
		fputcsv($output, array('ID','Link','Title', 'Image'));


    while ($query->have_posts()) : $query->the_post();
      $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
      $post['Id']=get_the_ID();
      $post['link']=get_the_permalink();
      $post['title']=get_the_title();
      //$post['content']=get_the_content();
      $post['image']=$src[0];
			fputcsv($output, $post);
		endwhile;
			fclose($output);
		endif;
		header('Content-Type: text/csv');
		header('Content-Disposition: attachment; filename="Page.csv"');
		header('Pragma: no-cache');
		header('Expires: 0');
		exit();
	}
	return ob_get_clean();
}

class Custom_Walker_Nav_Menu_language extends Walker_Nav_Menu {

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
      global $wp_query;
      $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

      $class_names = $value = '';

      $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      $classes[] = 'menu-item-' . $item->ID;
      if( in_array('current-menu-item', $classes) ){
          $classes[] = 'active';
      }
      $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
      $class_names = ' class="' . esc_attr( $class_names ) .' '.$classes_new. '"';


      $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
      $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
      $menu_image = get_field( 'menu_image', $item->ID );

      $output .= $indent . '<li' . $id . $value . $class_names . '>';

      $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) . '"' : '';
      $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) . '"' : '';
      $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) . '"' : '';
      $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) . '"' : '';

      $item_output = $args->before;
      $item_output .= '<a' . $attributes . '>';
      $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
      $item_output .= '<img src="'.$menu_image['url'].'" alt="'.$menu_image['alt'].'">';
      $item_output .= '</a>';
      $item_output .= $args->after;

      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

  }
}

function video_play_action(){
  global $wpdb, $table_prefix;
  $tablename=$table_prefix . 'subscribers';
  $post_id=$_POST['post_id'];
  if (!is_email($_POST['demail'])) {
    echo json_encode(array('status' => 'error', 'message' => 'Please enter your email correctly.'));
    exit;
  }
  $send_to = get_option('admin_email');
  $banner_left_video=get_field('banner_left_video',$post_id);
  preg_match('/src="(.+?)"/', $banner_left_video, $matches);
  $src = $matches[1];
  $params = array(
      'autoplay'    => 1
  );
  $new_src = add_query_arg($params, $src);
  $banner_left_video = str_replace($src, $new_src, $banner_left_video);
  $attributes = 'frameborder="0"';
  $banner_left_video = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $banner_left_video);

  $headers = 'From: Market Dojo  <'.$send_to.'>';
  $subject = "Subscription Form";
  $message = " Name : ".$_POST['dname']."\n\n Email : ".$_POST['demail']."\n\n Company Name : ".$_POST['dcompanyname']."\n\n Job Title : ".$_POST['djobtitle'] ."\n\n Phone : " . $_POST['dphone']."\n\n Country : ".$_POST['dcountry'];

  $wpdb->insert(
    $tablename,
    array(
      'name' => $_POST['dname'],
      'email' => $_POST['demail'],
      'companyname' => $_POST['dcompanyname'],
      'phone' => $_POST['dphone']
    ),
    array(
      '%s',
      '%s',
      '%s',
      '%s'
    )
  );

  if (wp_mail($send_to, $subject, $message, $headers)) {
    echo json_encode(array('statuscont' => 'success', 'message' => $banner_left_video));
    exit;
  } else {
    echo json_encode(array('statuscont' => 'error', 'message' => 'Sorry there are some problem.'));
    exit;
  }
}

add_action("wp_ajax_video_play_action", "video_play_action");
add_action("wp_ajax_nopriv_video_play_action", "video_play_action");