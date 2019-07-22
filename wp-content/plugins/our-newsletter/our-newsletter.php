<?php
/*
Plugin Name: Our Newsletter
Description: Send email to monthly subscriber or quarterly subscriber.
Version: 1.0
Author: Deep Mazumder
Author mail: dpmzmdr@gmail.com
License: GPLv2 or later
*/
define( 'MYPLUGINNAME_PATH', plugin_dir_path(__FILE__) );
register_activation_hook( __FILE__, 'our_newsletter_activate' );
register_deactivation_hook( __FILE__, 'our_newsletter_deactivate' );
add_filter('admin_head','ShowTinyMCE');
add_filter( 'wp_mail_content_type', 'set_html_content_type' );
remove_filter( 'wp_mail_content_type', 'set_html_content_type' );

function set_html_content_type() {

	return 'text/html';
}

  function ShowTinyMCE() {
        // conditions here
        wp_enqueue_script( 'common' );
        wp_enqueue_script( 'jquery-color' );
        wp_print_scripts('editor');
        if (function_exists('add_thickbox')) add_thickbox();
        wp_print_scripts('media-upload');
        if (function_exists('wp_tiny_mce')) wp_tiny_mce();
        wp_admin_css();
        wp_enqueue_script('utils');
        do_action("admin_print_styles-post-php");
        do_action('admin_print_styles');
    }

function our_newsletter_activate(){
	//Activation method.
	activate();
}
function our_newsletter_deactivate(){
	//Deactivation method.
    global $wpdb;
	$wpdb->query("DROP TABLE ".$wpdb->prefix."our_newsletter ");
}
function activate(){
  global $wpdb;
  $sql = "CREATE TABLE IF NOT EXISTS ".$wpdb->prefix."our_newsletter (
 `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `news_name` varchar(111) NOT NULL,
  `subscriptiondate` datetime NOT NULL,
  `status` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18" ;	


	$wpdb->query($sql);   
}
function per_email_newsletter_panel()
{  
    global $wpdb;
    $add_list = $wpdb->get_results("select * from ".$wpdb->prefix."our_newsletter where status='Y' and category=1");
    ?>
<div class='admin-custom'>
  <?php  include 'per_email.php'; ?>
</div>
<?php
}
function per_post_email_newsletter_panel()
{  
    global $wpdb;
    $add_list = $wpdb->get_results("select * from ".$wpdb->prefix."our_newsletter where status='Y' and category=2");
    ?>
<div class='admin-custom'>
  <?php include 'per_post_email.php'; ?>
</div>
<?php
}
function monthly_email_newsletter_panel()
{ 

    ?>

<div class='admin-custom'>
  <?php  include 'monthly_email.php'; ?>
</div>
<?php
}
?>
<?php
function personal_email_newsletter_panel()
{  
    ?>
<div class='admin-custom'>
  <?php include 'personal_email.php'; ?>
</div>
<?php
}
?>
<?php
function add_a_new_address_panel()
{  
    ?>

<div class='admin-custom'>
  <?php include 'add_a_new_address_panel.php'; ?>
</div>
<?php
}
?>
<?php
function send_manual_mail_panel()
{  
    ?>
<div class='admin-custom'>
  <?php include 'send_manual_mail_panel.php'; ?>
</div>
<?php
}
?>