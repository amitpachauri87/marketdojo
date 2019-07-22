<!doctype html>
<html>

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PM42QX');</script>
<!-- End Google Tag Manager -->	
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name');if(!empty(get_bloginfo('description'))){echo " | ";};bloginfo('description'); ?></title>
	<?php global $flatsome_opt; ?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $flatsome_opt['site_favicon']; ?>">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php
	if(!is_admin()){
		$cookie_name = 'gclid';

		$value = $_GET[$cookie_name];
		$domain = get_option('siteurl');
		$domain = strstr($domain, '.');

		if(isset($value)) {
			setcookie("$cookie_name", $value, time()+(60*60*24*365), '/', $domain, true );
		}
	}
	?>
	
	<?php wp_head(); ?>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PM42QX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	
	<div id="loginPopup" class="commonPopup loginpopup">
		<div class="popupContent">
			<div class="popupForm">
				<form id="dropdown_login_form" action="https://secure.marketdojo.com/users/sign_in" name="" method="post">
					<fieldset>
						<div class="input formRow" id="login_email_wrapper">
							<label for="login_email">Username</label>
							<div class="inputBox">
								<span class="iconMild"><i class="fa fa-user" aria-hidden="true"></i></span>
								<input id="login_email" class="input_fields" name="user[login]" size="25" type="text" value="" placeholder="Username">
							</div>
						</div>
						<div class="input formRow" id="login_password_wrapper">
							<label for="login_password">Password</label>
							<div class="inputBox">
								<span class="iconMild"><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input id="login_password" class="input_fields" name="user[password]" size="25" type="password" value="" placeholder="Password">
							</div>
						</div>
					</fieldset>
					<div class="submit formRow">
						<input type="submit" class="btn btn2" value="Log In">
						<label class="remember_me"><input type="checkbox" checked="checked" value="1" name="remember_me"> Remember me</label>
					</div>
					<a class="forgotten" href="https://secure.marketdojo.com/forgot_password?locale=en">Can't access your account?</a>
				</form>
			</div>
		</div>
	</div><!--loginPopup-->
	<span class="backTOtop"><i class="fa fa-angle-up"></i></span>
	<div class="wrapper">
		<!-- header Start -->
		<?php
			$header_call_to_action_section=get_field('header_call_to_action_section');
			if($header_call_to_action_section){
				$header_call_to_action_section_logo=get_field('header_call_to_action_section_logo');
				$header_call_to_action_section_heading=get_field('header_call_to_action_section_heading');
				$header_call_to_action_section_sub_heading=get_field('header_call_to_action_section_sub_heading');
				$header_call_to_action_section_button=get_field('header_call_to_action_section_button');
				$header_call_to_action_section_background_color=get_field('header_call_to_action_section_background_color');
				$header_call_to_action_section_heading_text_color=get_field('header_call_to_action_section_heading_text_color');
				$header_call_to_action_section_sub_heading_text_color=get_field('header_call_to_action_section_sub_heading_text_color');
				$header_call_to_action_section_button_background_color=get_field('header_call_to_action_section_button_background_color');
				$header_call_to_action_section_button_hover_background_color=get_field('header_call_to_action_section_button_hover_background_color');
				$header_call_to_action_section_button_border_color=get_field('header_call_to_action_section_button_border_color');
				$header_call_to_action_section_button_hover_border_color=get_field('header_call_to_action_section_button_hover_border_color');
				$header_call_to_action_section_button_text_color=get_field('header_call_to_action_section_button_text_color');
				$header_call_to_action_section_button_hover_text_color=get_field('header_call_to_action_section_button_hover_text_color');
		?>
		<style>

			.pageTopBar{
				<?php if($header_call_to_action_section_background_color){ ?>
				background-color: <?php echo $header_call_to_action_section_background_color; ?>;
				<?php } ?>
				<?php if($header_call_to_action_section_sub_heading_text_color){ ?>
				color: <?php echo $header_call_to_action_section_sub_heading_text_color; ?>;
				<?php } ?>
			}
			.pageTopBar strong{
				<?php if($header_call_to_action_section_heading_text_color){ ?>
				color: <?php echo $header_call_to_action_section_heading_text_color; ?>;
				<?php } ?>
			}
			.pageTopBar .btn{
				<?php if($header_call_to_action_section_button_background_color){ ?>
				background-color: <?php echo $header_call_to_action_section_button_background_color; ?>;
				<?php } ?>
				<?php if($header_call_to_action_section_button_border_color){ ?>
				border: 1px solid <?php echo $header_call_to_action_section_button_border_color; ?>;
				<?php } ?>
				<?php if($header_call_to_action_section_button_text_color){ ?>
				color: <?php echo $header_call_to_action_section_button_text_color; ?>;
				<?php } ?>
			}
			.pageTopBar .btn:hover{
				<?php if($header_call_to_action_section_button_hover_background_color){ ?>
				background-color: <?php echo $header_call_to_action_section_button_hover_background_color; ?>;
				<?php } ?>
				<?php if($header_call_to_action_section_button_hover_border_color){ ?>
				border: 1px solid <?php echo $header_call_to_action_section_button_hover_border_color; ?>;
				<?php } ?>
				<?php if($header_call_to_action_section_button_hover_text_color){ ?>
				color: <?php echo $header_call_to_action_section_button_hover_text_color; ?>;
				<?php } ?>
			}

		</style>
		<section class="pageTopBar">
			<div class="container">
				<div class="inner clear">
					<?php if($header_call_to_action_section_logo){ ?>
					<div class="eventLogo">
						<img src="<?php echo $header_call_to_action_section_logo['url']; ?>" alt="<?php echo $header_call_to_action_section_logo['alt']; ?>">
					</div>
					<?php } ?>
					<div class="eventText">
						<p><strong><?php echo $header_call_to_action_section_heading; ?> </strong><?php echo $header_call_to_action_section_sub_heading; ?></p>
					</div>
					<?php
						if($header_call_to_action_section_button){
							$link_url = $header_call_to_action_section_button['url'];
							$link_title = $header_call_to_action_section_button['title'];
							$link_target = $header_call_to_action_section_button['target'] ? $header_call_to_action_section_button['target'] : '_self';
					?>
					<a href="<?php echo $link_url; ?>" class="btn" target="<?php echo esc_attr($link_target); ?>"><?php echo $link_title; ?></a>
					<?php } ?>
					<a href="javascript:void(0);" class="offerClose"><i class="fa fa-times" aria-hidden="true"></i></a>
				</div>
			</div>
		</section>
		<?php
			}elseif($flatsome_opt['cta']){
		?>
		<style>

			.pageTopBar{
				<?php if($flatsome_opt['cta_background_color']){ ?>
				background-color: <?php echo $flatsome_opt['cta_background_color']; ?>;
				<?php } ?>
				<?php if($flatsome_opt['cta_sub_heading_text_color']){ ?>
				color: <?php echo $flatsome_opt['cta_sub_heading_text_color']; ?>;
				<?php } ?>
			}
			.pageTopBar strong{
				<?php if($flatsome_opt['cta_heading_text_color']){ ?>
				color: <?php echo $flatsome_opt['cta_heading_text_color']; ?>;
				<?php } ?>
			}
			.pageTopBar .btn{
				<?php if($flatsome_opt['cta_button_background_color']){ ?>
				background-color: <?php echo $flatsome_opt['cta_button_background_color']; ?>;
				<?php } ?>
				<?php if($flatsome_opt['cta_button_border_color']){ ?>
				border: 1px solid <?php echo $flatsome_opt['cta_button_border_color']; ?>;
				<?php } ?>
				<?php if($flatsome_opt['cta_button_text_color']){ ?>
				color: <?php echo $flatsome_opt['cta_button_text_color']; ?>;
				<?php } ?>
			}
			.pageTopBar .btn:hover{
				<?php if($flatsome_opt['cta_button_hover_background_color']){ ?>
				background-color: <?php echo $flatsome_opt['cta_button_hover_background_color']; ?>;
				<?php } ?>
				<?php if($flatsome_opt['cta_button_hover_border_color']){ ?>
				border: 1px solid <?php echo $flatsome_opt['cta_button_hover_border_color']; ?>;
				<?php } ?>
				<?php if($flatsome_opt['cta_button_hover_text_color']){ ?>
				color: <?php echo $flatsome_opt['cta_button_hover_text_color']; ?>;
				<?php } ?>
			}

		</style>
		<section class="pageTopBar">
			<div class="container">
				<div class="inner clear">
					<?php if($flatsome_opt['cta_logo']){ ?>
					<div class="eventLogo">
						<img src="<?php echo $flatsome_opt['cta_logo']; ?>" alt="cta_logo">
					</div>
					<?php } ?>
					<div class="eventText">
						<p><strong><?php echo $flatsome_opt['cta_heading']; ?> </strong><?php echo $flatsome_opt['cta_sub_heading']; ?></p>
					</div>
					<?php if($flatsome_opt['cta_button_text']){ ?>
					<a href="<?php echo $flatsome_opt['cta_button_link']; ?>" class="btn "><?php echo $flatsome_opt['cta_button_text']; ?></a>
					<?php } ?>
					<a href="javascript:void(0);" class="offerClose"><i class="fa fa-times" aria-hidden="true"></i></a>
				</div>
			</div>
		</section>
		<?php
			}
		?>
		<header class="mainHeader">
			<div class="top_band">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="quick_info clear">
							<?php
								$phone_no=get_field('phone_no');
								if($phone_no){
							?>
								<span class="each_info">
                  					<i class="fa fa-phone"></i><span><a href="tel:<?= $phone_no; ?>"><?= $phone_no; ?></a></span>
								</span>
							<?php
								}elseif($flatsome_opt['phno']){
							?>
								<span class="each_info">
                  					<i class="fa fa-phone"></i><span><a href="tel:<?= $flatsome_opt['phno']; ?>"><?= $flatsome_opt['phno']; ?></a></span>
								</span>
							<?php
								}
								if($flatsome_opt['email']){
							?>
								<span class="each_info">
									<i class="fa fa-envelope"></i><span><a href="mailto:<?php echo $flatsome_opt['email']; ?>"><?php echo $flatsome_opt['email']; ?></a></span>
								</span>
							<?php
								}
							?>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="language_part clear">
								<span class="label">select language</span>
								<div class="langPr">
									<span class="lang_text">English</span>
									<!--<span class="lang_flag">&nbsp;</span>-->
									<?php wp_nav_menu( array( 'container' => '', 'theme_location' => 'language_menu', 'menu_class' => 'language_list', 'walker' => new Custom_Walker_Nav_Menu_language()) ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="logo_menu_section">
				<div class="container">
					<div class="row d-flex align-items-center">
						<div class="col-lg-3 col-md-3 col-sm-4">
						<?php
							if(is_page(array(639,2512,2492))){
						?>
							<figure class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $flatsome_opt['site_logo_category']; ?>" alt="categorylogo"></a>
							</figure>
						<?php
							}elseif(is_page(array(641,2516,2608))){
						?>
							<figure class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $flatsome_opt['site_logo_inno']; ?>" alt="innologo"></a>
							</figure>
						<?php
							}elseif(is_page(array(643,2514,2610))){
						?>
							<figure class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $flatsome_opt['site_logo_sim']; ?>" alt="simlogo"></a>
							</figure>
						<?php
							}elseif(is_page_template( array('template_promotion.php','template_promotion2.php' ) )){
								$logo=get_field('logo');
						?>
							<figure class="logo"><a href="<?php the_field('logo_link'); ?>"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></a>
							</figure>
						<?php
							}else{
						?>
							<figure class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $flatsome_opt['site_logo']; ?>" alt="logo"></a>
							</figure>
						<?php
							}
						?>
							
						</div>
						<div class="col-lg-9 col-md-9 col-sm-8">
							<div class="menu clear">
								<a href="javascript:void(0);" class="menuClose"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
								<?php
								if(is_page_template( array('template_promotion.php','template_promotion2.php' ) )){
									if( have_rows('menu_items') ):
								?>
								<ul>
									<?php while ( have_rows('menu_items') ) : the_row(); ?>
									<?php
										$post_object = get_sub_field('add_menu_item');
										if( $post_object ): 
										global $q_config;
  										$language = $q_config['language'];
									?>
									<li><a href="<?php the_permalink($post_object->ID); ?>"><?php echo qtranxf_use_language($language, $post_object->post_title, false, true); ?></a></li>
									<?php
										endif;
										wp_reset_postdata();
									?>
									<?php endwhile; ?>
									<?php
										$menu_button_text=get_field('menu_button_text');
										$menu_button_link=get_field('menu_button_link');
										if($menu_button_text){
									?>
									<li><a href="<?php echo $menu_button_link; ?>"><?php echo $menu_button_text; ?></a></li>
									<?php
										}else{
									?>
									<li class="signup"><a href="https://secure.marketdojo.com/signup">Sign Up for Free</a></li>
									<?php
										}
									?>
									
								</ul>
								<?php
									endif;
								}elseif(is_page_template('template_landing3.php')){
								?>
								<ul>
									<li class="signup"><a href="https://secure.marketdojo.com/signup">Sign Up for Free</a></li>
									<li class="login"><a href="https://secure.marketdojo.com/login">Login</a></li>
								</ul>
								<?php
								}elseif(is_page_template('template_landing6.php')){
									if( have_rows('main_menu') ):
								?>
								<ul id="menu-french-landing-page">
									<?php
										while( have_rows('main_menu') ): the_row();
											$menu_item_type = get_sub_field('menu_item_type');
											if($menu_item_type=='parallax'){
												$menu_item_name = get_sub_field('menu_item_name');
												$select_menu_item_location = get_sub_field('select_menu_item_location');
									?>
									<li><a href="<?php echo $select_menu_item_location; ?>"><?php echo $menu_item_name; ?></a></li>
									<?php
											}elseif($menu_item_type=='normal'){
												$menu_item_link = get_sub_field('menu_item_link');
												$link_url = $menu_item_link['url'];
												$link_title = $menu_item_link['title'];
												$link_target = $menu_item_link['target'] ? $menu_item_link['target'] : '_self';
									?>
									<li><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></li>
									<?php
											}elseif($menu_item_type=='popup'){
												$menu_item_name = get_sub_field('menu_item_name');
												$menu_item_popup_form = get_sub_field('menu_item_popup_form');
									?>
									<li><a data-fancybox href="#post-<?php echo $menu_item_popup_form; ?>"><?php echo $menu_item_name; ?></a></li>
									<?php
											}
										endwhile;
									?>
								</ul>
								<?php
									endif;
								}else{
									wp_nav_menu( array( 'container' => '', 'theme_location' => 'main_menu', 'menu_class' => '', 'walker' => new Custom_Walker_Nav_Menu() ) );
								}
								?>
							</div>
							<a href="javascript:void(0);" class="menuOpen"><i class="fa fa-bars" aria-hidden="true"></i></a>
							<div class="menuOverLay">&nbsp;</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header End -->
		<?php
		if(!is_page_template(array('template_promotion2.php','template_landing4.php','template_team.php', 'template_landing5.php' ,'template_about_new.php','template_philosophy_new.php','template_support.php')) && !is_singular('webinarhub')){
			$banner_background_image=get_field('banner_background_image');
			$banner_left_image=get_field('banner_left_image');
			$banner_right_heading=get_field('banner_right_heading');
			$banner_sub_heading=get_field('banner_sub_heading');
			$banner_button_1_text=get_field('banner_button_1_text');
			$banner_button_1_link=get_field('banner_button_1_link');
			$banner_button_2_text=get_field('banner_button_2_text');
			$banner_button_2_link=get_field('banner_button_2_link');
			$text_color=get_field('banner_text_color');
			$banner_button_1_border_background_color=get_field('banner_button_1_border_background_color');
			$banner_button_1_border_hover_color=get_field('banner_button_1_border_hover_color');
			$banner_button_1_text_color=get_field('banner_button_1_text_color');
			$banner_button_1_text_hover_color=get_field('banner_button_1_text_hover_color');
			$banner_button_2_border_color=get_field('banner_button_2_border_color');
			$banner_button_2_hover_border_background_color=get_field('banner_button_2_hover_border_background_color');
			$banner_button_2_text_color=get_field('banner_button_2_text_color');
			$banner_button_2_text_hover_color=get_field('banner_button_2_text_hover_color');
			if($banner_background_image){
		?>
		<?php if( $text_color){ ?>
		<style>
			.banner .banner_container .banner_content h1{
				color:<?php echo $text_color; ?>;
			}
			.banner .banner_container .banner_content p{
				color:<?php echo $text_color; ?>;
			}
		</style>
		<?php } ?>
		<style>
			.banner .banner_container .banner_content .btn:hover, .banner .banner_container .banner_content .btn.fill_btn {
				<?php if( $banner_button_1_border_background_color){ ?>
				background-color: <?php echo $banner_button_1_border_background_color; ?>;
				<?php } ?>
				<?php if( $banner_button_1_text_color){ ?>
				color: <?php echo $banner_button_1_text_color; ?>;
				<?php } ?>
			}
			.banner .banner_container .banner_content .btn.fill_btn:hover {
				<?php if( $banner_button_1_text_hover_color){ ?>
				color: <?php echo $banner_button_1_text_hover_color; ?>;
				<?php } ?>
				<?php if( $banner_button_1_border_hover_color){ ?>
				border: 2px solid <?php echo $banner_button_1_border_hover_color; ?>;
				<?php } ?>
			}
			.banner .banner_container .banner_content .btn:hover, .banner .banner_container .banner_content .btn {
				<?php if( $banner_button_2_border_color){ ?>
				border: 2px solid <?php echo $banner_button_2_border_color; ?>;
				<?php } ?>
				<?php if( $banner_button_2_text_color){ ?>
				color: <?php echo $banner_button_2_text_color; ?>;
				<?php } ?>
			}
			.banner .banner_container .banner_content .btn:hover {
				<?php if( $banner_button_2_text_hover_color){ ?>
				color: <?php echo $banner_button_2_text_hover_color; ?>;
				<?php } ?>
				<?php if( $banner_button_2_hover_border_background_color){ ?>
				border: 2px solid <?php echo $banner_button_2_hover_border_background_color; ?>;
				background-color: <?php echo $banner_button_2_hover_border_background_color; ?>;
				<?php } ?>
			}
		</style>
		<!-- section banner start -->
		<section class="banner">
			<figure class="banner_img" style="background-image:url(<?php echo $banner_background_image['url']; ?>);"></figure>
			<div class="banner_container">
				<span class="laptop_part">
					<figure><img src="<?php echo $banner_left_image['url']; ?>" alt="<?php echo $banner_left_image['alt']; ?>">
					</figure>
				</span>
			<div class="banner_content">
					<h1><?php echo $banner_right_heading; ?></h1>
					<?php echo $banner_sub_heading; ?>
					<div class="banner_btn_box">
						<?php
							if($banner_button_1_text){
						?>
						<a href="<?php echo $banner_button_1_link; ?>" class="btn fill_btn"><?php echo $banner_button_1_text; ?></a>
						<?php
							}
						?>
						<?php
							if($banner_button_2_text){
						?>
						<a href="<?php echo $banner_button_2_link; ?>" class="btn <?php if(is_front_page()){ ?>scrolltoform_banner<?php } ?>"><?php echo $banner_button_2_text; ?></a>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</section>
		<!-- section banner end -->
		<!-- section company revenue start -->
		<?php if( have_rows('section_1_listing') ):  ?>
		<section class="revenue_info">
			<div class="container">
				<div class="row">
				<?php 
					while ( have_rows('section_1_listing') ) : the_row();
					$icon=get_sub_field('icon');
					$value=get_sub_field('value');
					$text=get_sub_field('text');
				?>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="info_box">
							<?php if($value){ ?>
							<span class="info">
								<?php if($icon){ ?>
								<i class="fa <?php echo $icon; ?>"></i>
								<?php } ?>
								<samp class="homecounter"><?php echo $value; ?></samp>
							</span>
							<?php } ?>
							<?php if($text){ ?>
							<span class="label"><?php echo $text; ?></span>
							<?php } ?>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
			</div>
		</section>
		<?php endif; ?>
		<!-- section company revenue end -->
		<?php
			}
		}
		?>
