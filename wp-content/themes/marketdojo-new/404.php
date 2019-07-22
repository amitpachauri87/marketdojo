<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!--<title>Go Stock Alert</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">-->
  <title>
    <?php wp_title('|',true,'right'); ?>
    <?php bloginfo('name');if(!empty(get_bloginfo('description'))){echo " | ";};bloginfo('description'); ?>
  </title>
  <?php global $flatsome_opt; ?>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $flatsome_opt['site_favicon']; ?>">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package gostock
 * @subpackage gostockaleart
 * @since Go Stock Alert
 */

?>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="<?php bloginfo('template_directory') ?>/css/404.css" rel="stylesheet">


	<section class="body-section not-found-page">
		<span class="left">
			<i class="fa fa-meh-o"></i>
			<h1><?php echo $flatsome_opt['404_page_head']; ?></h1>
		</span>
	<div class="container">
		
    	
        <div class="not-found">

                <p><?php echo $flatsome_opt['404_page_text_line_1']; ?></p>

                <p class="error-area"><?php echo $flatsome_opt['404_page_text_line_2']; ?></p>

                <p><?php echo $flatsome_opt['404_page_text_line_3']; ?><a href="<?php echo $flatsome_opt['404_page_link_for_home']; ?>">Home</a></p>

            </div>
    </div>
</section>
</body>
</html>

 
