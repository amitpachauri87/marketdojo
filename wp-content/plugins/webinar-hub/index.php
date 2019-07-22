<?php
/*
Plugin Name: Webinar Hub
Plugin URI: https://cisin.com/
Version: 1.0
Author: CIS Team
Author URI: https://cisin.com/
Description: This plugin creates a custom post type with name webinar hub and creates a listing template and its single template
*/

/**
 * Creating page template using plugin
 */

class PageTemplater {

	/**
	 * A reference to an instance of this class.
	 */
	private static $instance;

	/**
	 * The array of templates that this plugin tracks.
	 */
	protected $templates;

	/**
	 * Returns an instance of this class. 
	 */
	public static function get_instance() {

		if ( null == self::$instance ) {
			self::$instance = new PageTemplater();
		} 

		return self::$instance;

	} 

	/**
	 * Initializes the plugin by setting filters and administration functions.
	 */
	private function __construct() {

		$this->templates = array();


		// Add a filter to the attributes metabox to inject template into the cache.
		if ( version_compare( floatval( get_bloginfo( 'version' ) ), '4.7', '<' ) ) {

			// 4.6 and older
			add_filter(
				'page_attributes_dropdown_pages_args',
				array( $this, 'register_project_templates' )
			);

		} else {

			// Add a filter to the wp 4.7 version attributes metabox
			add_filter(
				'theme_page_templates', array( $this, 'add_new_template' )
			);

		}

		// Add a filter to the save post to inject out template into the page cache
		add_filter(
			'wp_insert_post_data', 
			array( $this, 'register_project_templates' ) 
		);


		// Add a filter to the template include to determine if the page has our 
		// template assigned and return it's path
		add_filter(
			'template_include', 
			array( $this, 'view_project_template') 
		);


		// Add your templates to this array.
		$this->templates = array(
			'page-template/webinarListing.php' => 'Webinar Hub Listing',
		);
			
	} 

	/**
	 * Adds our template to the page dropdown for v4.7+
	 *
	 */
	public function add_new_template( $posts_templates ) {
		$posts_templates = array_merge( $posts_templates, $this->templates );
		return $posts_templates;
	}

	/**
	 * Adds our template to the pages cache in order to trick WordPress
	 * into thinking the template file exists where it doens't really exist.
	 */
	public function register_project_templates( $atts ) {

		// Create the key used for the themes cache
		$cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );

		// Retrieve the cache list. 
		// If it doesn't exist, or it's empty prepare an array
		$templates = wp_get_theme()->get_page_templates();
		if ( empty( $templates ) ) {
			$templates = array();
		} 

		// New cache, therefore remove the old one
		wp_cache_delete( $cache_key , 'themes');

		// Now add our template to the list of templates by merging our templates
		// with the existing templates array from the cache.
		$templates = array_merge( $templates, $this->templates );

		// Add the modified cache to allow WordPress to pick it up for listing
		// available templates
		wp_cache_add( $cache_key, $templates, 'themes', 1800 );

		return $atts;

	} 

	/**
	 * Checks if the template is assigned to the page
	 */
	public function view_project_template( $template ) {
		
		// Get global post
		global $post;

		// Return template if post is empty
		if ( ! $post ) {
			return $template;
		}

		// Return default template if we don't have a custom one defined
		if ( ! isset( $this->templates[get_post_meta( 
			$post->ID, '_wp_page_template', true 
		)] ) ) {
			return $template;
		} 

		$file = plugin_dir_path( __FILE__ ). get_post_meta( 
			$post->ID, '_wp_page_template', true
		);

		// Just to be safe, we check if the file exist first
		if ( file_exists( $file ) ) {
			return $file;
		} else {
			echo $file;
		}

		// Return template
		return $template;

	}



} 
add_action( 'plugins_loaded', array( 'PageTemplater', 'get_instance' ) );

/**
 * Created CPT for Webinar Hub
 */

function cis_function_for_webinar_hub_cpt(){
	$labels = array(
		'name'               => _x( 'Webinar Hub', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Webinar Hub', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Webinar Hub', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Webinar Hub', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Webinar Hub', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Webinar Hub', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Webinar Hub', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Webinar Hub', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Webinar Hub', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Webinar Hub', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Webinar Hub', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Webinar Hub:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Webinar Hub found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Webinar Hub found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,

		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'webinarhub' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'with-front'           =>'false',

		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt',)
	);
	register_post_type( 'Webinar Hub', $args );
}

add_action('init','cis_function_for_webinar_hub_cpt');


/**
 * Override custom post type single template using filter
 */
add_filter('single_template', 'cis_webinarSingle_template');

function cis_webinarSingle_template($single) {

    global $post;

    /* Checks for single template by post type */
    if ( $post->post_type == 'webinarhub' ) {
        if ( file_exists( plugin_dir_path( __FILE__ ) .'post-template/singleWebinar.php' ) ) {
            return plugin_dir_path( __FILE__ ) .'post-template/singleWebinar.php';
        }
    }

    return $single;

}

/**
 * Remove the slug from published post permalinks. Only affect our CPT though.
 */
function cis_remove_cpt_slug( $post_link, $post, $leavename ) {

    if ( ! in_array( $post->post_type, array( 'webinarhub' ) ) || 'publish' != $post->post_status )
        return $post_link;

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'cis_remove_cpt_slug', 10, 3 );

function cis_parse_request_tricksy( $query ) {

    // Only noop the main query
    if ( ! $query->is_main_query() )
        return;

    // Only noop our very specific rewrite rule match
    if ( 2 != count( $query->query )
        || ! isset( $query->query['page'] ) )
        return;

    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
    if ( ! empty( $query->query['name'] ) )
        $query->set( 'post_type', array( 'post', 'webinarhub', 'page' ) );
}
add_action( 'pre_get_posts', 'cis_parse_request_tricksy' );

/*
* Ajax Response to load the data on the webinar listing page
*/
add_action('wp_ajax_load_posts_by_ajax', 'cis_load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'cis_load_posts_by_ajax_callback');

function cis_load_posts_by_ajax_callback() {
global $post;
    check_ajax_referer('load_more_posts', 'security');
    $paged = $_POST['page']+1;
    $args = array(
        'post_type' => 'webinarhub',
        'post_status' => 'publish',
        'posts_per_page' => '9',
        'paged' => $paged,
    );
    $my_posts = new WP_Query( $args );
    if ( $my_posts->have_posts() ) :
        ?>
    <div data-id="pages" class="<?php echo $my_posts->max_num_pages;?>"></div>
        <?php while ( $my_posts->have_posts() ) : $my_posts->the_post(); 
           $upcoming_webinar = get_field('upcoming_webinar');
               $upcoming_webinar_ribbon_color = get_field('upcoming_webinar_ribbon_color');
               $register_button_or_watch_button = get_field('register_button_or_watch_button');
               $register_button_color = get_field('register_button_color');
               $watch_online_button_color = get_field('watch_online_button_color');
               $webinar_hover_color = get_field('webinar_hover_color');
              ?>
              <style type="text/css">
                .webinar_l_status_<?php echo $post->ID;?>{
                    background:<?php echo $upcoming_webinar_ribbon_color?>;
                    position: absolute;
                    bottom: 10px;
                    left: 10px;
                    padding: 8px 25px 12px;
                    display: inline-block;
                    vertical-align: top;
                    color: #fff;
                    line-height: 1;
                }
                .webinar_l_content .btn.green-btn_<?php echo $post->ID;?>{
                      color: <?php echo $watch_online_button_color?>;
                       border-color: <?php echo $watch_online_button_color?>;
                      }
                .webinar_l_content .btn.green-btn_<?php echo $post->ID;?>:hover {
                  background: <?php echo $watch_online_button_color?>;
                  color: #ffffff;
                }
                .webinar_l_content .btn_<?php echo $post->ID;?>:hover {
                background: <?php echo $register_button_color;?>;
                color: #ffffff;
                }
                .webinar_l_content .btn_<?php echo $post->ID;?> {
                text-align: center;
                border: 1px solid <?php echo $register_button_color;?>;
                color: <?php echo $register_button_color;?>;
                background-color: #fff;
                border-radius: 0;
                padding: 8px 15px 10px;
                font-weight: 500;
                min-width: 134px;
                font-size: 16px;
                }
                .webinar_l_hover_<?php echo $post->ID;?>{
                	background: <?php echo $webinar_hover_color;?>;
                }
              </style>
            <div class="col-md-4 d-flex">
              <div class="webinar_l_box">
                <div class="webinar_l_img"> <img src="<?php echo plugin_dir_url();?>webinar-hub/images/webinar-list1.jpg" alt="webinar list"/>
                <?php if($upcoming_webinar[0]=="yes"){?>
                  <div class="webinar_l_status_<?php echo $post->ID;?>"> Upcoming Webinar</div>
                  <?php }?>
                  <div class="webinar_l_hover webinar_l_hover_<?php echo $post->ID;?>"> <a href="<?php echo the_permalink();?>" class="btn">READ MORE</a> </div>
                </div>
                <div class="webinar_l_content">
                  <h4><a href="<?php echo the_permalink();?>"><?php the_title();?></a></h4>
                  <p><?php echo the_excerpt();?></p>
                  <?php if($register_button_or_watch_button =="Register"){?>
                  <a href="<?php echo the_permalink();?>" class="btn_<?php echo $post->ID;?>">Register Today</a>
                  <?php }else{?>
                  <a href="<?php echo the_permalink();?>" class="btn green-btn_<?php echo $post->ID;?>">Watch The Recording</a>
                  <?php }?>
                   </div>
              </div>
            </div>
            
        <?php endwhile; ?>
        </div>
        <?php
        else :?>
    		<p class="no-post">no-post</p>
<?php
    endif;
 
    wp_die();
}

/*Enqueue css files */

function cis_enqueue_files_for_webinar(){
	wp_enqueue_style('webinar-listing', plugin_dir_url( __FILE__ ) . 'css/weblisting.css' );
}
add_action('wp_enqueue_scripts','cis_enqueue_files_for_webinar');

/*
* Filter for adding excerpt length
*/

function get_excerpt( $count ) {
  global $post;
$permalink = get_permalink($post->ID);
$excerpt = get_the_excerpt();
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, $count);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = '<p>'.$excerpt.'...</p>';
return $excerpt;
}