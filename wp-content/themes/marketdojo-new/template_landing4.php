<?php /*Template Name: Landing 4*/ ?>
<?php get_header(); ?>
<?php
  $banner_background_image=get_field('banner_background_image');
  $banner_left_image=get_field('banner_left_image');
  $banner_right_heading=get_field('banner_right_heading');
  $banner_sub_heading=get_field('banner_sub_heading');
  $text_color=get_field('banner_text_color');
  /* Button 1 Settings */
  $banner_button_1_border_color=get_field('banner_button_1_border_color');
  $banner_button_1_border_hover_color=get_field('banner_button_1_border_hover_color');

  $banner_button_1_background_color=get_field('banner_button_1_background_color');
  $banner_button_1_background_hover_color=get_field('banner_button_1_background_hover_color');

  $banner_button_1_text_color=get_field('banner_button_1_text_color');
  $banner_button_1_text_hover_color=get_field('banner_button_1_text_hover_color');

  $banner_button_1_text=get_field('banner_button_1_text');
  $banner_button_1_link=get_field('banner_button_1_link');

  $banner_button_1_type=get_field('banner_button_1_type');
  $banner_button_1_form=get_field('banner_button_1_form');


  /* Button 2 Settings */
  $banner_button_2_border_color=get_field('banner_button_2_border_color');
  $banner_button_2_hover_border_color=get_field('banner_button_2_hover_border_color');

  $banner_button_2_background_color=get_field('banner_button_2_background_color');
  $banner_button_2_hover_background_color=get_field('banner_button_2_hover_background_color');

  $banner_button_2_text_color=get_field('banner_button_2_text_color');
  $banner_button_2_text_hover_color=get_field('banner_button_2_text_hover_color');

  $banner_button_2_text=get_field('banner_button_2_text');
  $banner_button_2_link=get_field('banner_button_2_link');

  $banner_button_2_type=get_field('banner_button_2_type');
  $banner_button_2_form=get_field('banner_button_2_form');

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
  .banner .banner_container .banner_content .bannerBtn1 {
    <?php if( $banner_button_1_border_color){ ?>
    border: 2px solid <?php echo $banner_button_1_border_color; ?> !important;
    <?php } ?>
    <?php if( $banner_button_1_background_color){ ?>
    background-color: <?php echo $banner_button_1_background_color; ?> !important;
    <?php } ?>
    <?php if( $banner_button_1_text_color){ ?>
    color: <?php echo $banner_button_1_text_color; ?> !important;
    <?php } ?>
  }
  .banner .banner_container .banner_content .bannerBtn1:hover {
    <?php if( $banner_button_1_border_hover_color){ ?>
    border: 2px solid <?php echo $banner_button_1_border_hover_color; ?> !important;
    <?php } ?>
    <?php if( $banner_button_1_background_hover_color){ ?>
    background-color: <?php echo $banner_button_1_background_hover_color; ?> !important;
    <?php } ?>
    <?php if( $banner_button_1_text_hover_color){ ?>
    color: <?php echo $banner_button_1_text_hover_color; ?> !important;
    <?php } ?>
  }
  .banner .banner_container .banner_content .bannerBtn2 {
    <?php if( $banner_button_2_border_color){ ?>
    border: 2px solid <?php echo $banner_button_2_border_color; ?> !important;
    <?php } ?>
    <?php if( $banner_button_2_background_color){ ?>
    background-color: <?php echo $banner_button_2_background_color; ?> !important;
    <?php } ?>
    <?php if( $banner_button_2_text_color){ ?>
    color: <?php echo $banner_button_2_text_color; ?> !important;
    <?php } ?>
  }
  .banner .banner_container .banner_content .bannerBtn2:hover {
    <?php if( $banner_button_2_hover_border_color){ ?>
    border: 2px solid <?php echo $banner_button_2_hover_border_color; ?> !important;
    <?php } ?>
    <?php if( $banner_button_2_hover_background_color){ ?>
    background-color: <?php echo $banner_button_2_hover_background_color; ?> !important;
    <?php } ?>
    <?php if( $banner_button_2_text_hover_color){ ?>
    color: <?php echo $banner_button_2_text_hover_color; ?> !important;
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
            if( $banner_button_1_type=='popup' ){
        ?>
          <a data-fancybox href="#post-<?php echo $banner_button_1_form; ?>" class="btn fill_btn bannerBtn1"><?php echo $banner_button_1_text; ?></a>
          <?php
            }else{
          ?>
          <a href="<?php echo $banner_button_1_link; ?>" class="btn fill_btn bannerBtn1"><?php echo $banner_button_1_text; ?></a>
        <?php
            }
          }
        ?>
        <?php
          if($banner_button_2_text){
            if( $banner_button_2_type=='popup' ){
        ?>
          <a data-fancybox href="#post-<?php echo $banner_button_2_form; ?>" class="btn bannerBtn2"><?php echo $banner_button_2_text; ?></a>
          <?php
            }else{
          ?>
          <a href="<?php echo $banner_button_2_link; ?>" class="btn bannerBtn2"><?php echo $banner_button_2_text; ?></a>
        <?php
            }
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
?>
<!-- body content start -->
<div class="body_content">
	<!-- serve section start -->
	<?php
		$events_background_image=get_field('events_background_image');
		$events_heading=get_field('events_heading');
		$events_content=get_field('events_content');
		$events_button_text=get_field('events_button_text');
		$events_button_link=get_field('events_button_link');
		if($events_background_image){
	?>
	<section class="body_section eventNew_section" style="background-image:url(<?php echo $events_background_image['url']; ?>);">
		<div class="eventBox">
			<div class="container">
				<h2><?php echo $events_heading; ?></h2>
				<strong><?php echo $events_content; ?></strong>
				<?php if($events_button_text){ ?>
				<a href="<?php echo $events_button_link; ?>"><?php echo $events_button_text; ?></a>
				<?php } ?>
			</div>
		</div>
	</section>
	<?php } ?>
	<?php
		$section_2_background_image=get_field('section_2_background_image');
		$section_2_heading=get_field('section_2_heading');
    if($section_2_heading){
	?>
	<section class="body_section serve_section" style="background-image:url(<?php echo $section_2_background_image['url']; ?>);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h2><span><?php echo $section_2_heading; ?></span></h2>
					<div class="serve_holder">
						<div class="serve_slider">
						<?php
							if( have_rows('section_2_listing') ): while ( have_rows('section_2_listing') ) : the_row();
							$heading=get_sub_field('heading');
							$caption=get_sub_field('caption');
							$image=get_sub_field('image');
							if($image){
						?>
							<div class="each_box">
								<div class="thumbanil_box">
									<?php if($heading){ ?>
									<a class="hover_content_holder" href="<?php the_sub_field('link'); ?>">
										<div class="hover_content">
											<div class="info">
												<h4><?php echo $heading; ?></h4>
												<?php echo $caption; ?>
											</div>
										</div>
									</a>
									<?php } ?>
									<figure><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
									</figure>
									<?php if($heading){ ?><figcaption><?php echo $heading; ?></figcaption><?php } ?>
								</div>
								<?php
									if( have_rows('clients_listing') ):
								?>
								<div class="clients clear">
									<span class="label">clients</span>
									<div class="client_box clear">
										<?php
											while ( have_rows('clients_listing') ) : the_row();
											$add_client_images = get_sub_field('add_client_images');
										?>
										<figure><img src="<?php echo $add_client_images['url']; ?>" alt="<?php echo $add_client_images['alt']; ?>">
										</figure>
										<?php endwhile; ?>
									</div>
								</div>
								<?php
									endif;
								?>
							</div>
							<?php
							}
							?>
						<?php endwhile;endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- serve section end -->
	<?php
    }
		$section_3_heading=get_field('section_3_heading');
		$section_3_product_1_heading=get_field('section_3_product_1_heading');
		$section_3_product_1_logo=get_field('section_3_product_1_logo');
		$section_3_product_1_logo_hover=get_field('section_3_product_1_logo_hover');
		$section_3_product_1_content=get_field('section_3_product_1_content');
		$section_3_product_2_heading=get_field('section_3_product_2_heading');
		$section_3_product_2_logo=get_field('section_3_product_2_logo');
		$section_3_product_2_logo_hover=get_field('section_3_product_2_logo_hover');
		$section_3_product_2_content=get_field('section_3_product_2_content');
		$section_3_product_3_heading=get_field('section_3_product_3_heading');
		$section_3_product_3_logo=get_field('section_3_product_3_logo');
		$section_3_product_3_logo_hover=get_field('section_3_product_3_logo_hover');
		$section_3_product_3_content=get_field('section_3_product_3_content');
		$section_3_product_4_heading=get_field('section_3_product_4_heading');
		$section_3_product_4_logo=get_field('section_3_product_4_logo');
		$section_3_product_4_logo_hover=get_field('section_3_product_4_logo_hover');
		$section_3_product_4_content=get_field('section_3_product_4_content');
    $section_3_right_video=get_field('section_3_right_video');
    if($section_3_heading){
	?>
	<!-- product section start -->
	<section class="body_section product_section stopScriptSection">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="product_left_content">
					<h2><span><?php echo $section_3_heading; ?></span></h2>
					<div class="product_holder holderHeight">
						<div class="each_product red">
							<h3><span><?php echo $section_3_product_1_heading; ?> <?php if($section_3_product_1_logo){ ?>-<?php } ?></span><img src="<?php echo $section_3_product_1_logo['url']; ?>" alt="<?php echo $section_3_product_1_logo['alt']; ?>"><img class="hover" src="<?php echo $section_3_product_1_logo_hover['url']; ?>" alt="<?php echo $section_3_product_1_logo_hover['alt']; ?>"></h3>
							<?php echo $section_3_product_1_content; ?>
						</div>
						<div class="each_product blue">
							<h3><span><?php echo $section_3_product_2_heading; ?> <?php if($section_3_product_2_logo){ ?>-<?php } ?></span><img src="<?php echo $section_3_product_2_logo['url']; ?>" alt="<?php echo $section_3_product_2_logo['alt']; ?>"><img class="hover" src="<?php echo $section_3_product_2_logo_hover['url']; ?>" alt="<?php echo $section_3_product_2_logo_hover['alt']; ?>"></h3>
							<?php echo $section_3_product_2_content; ?>
						</div>
						<div class="each_product green">
							<h3><span><?php echo $section_3_product_3_heading; ?> <?php if($section_3_product_3_logo){ ?>-<?php } ?></span><img src="<?php echo $section_3_product_3_logo['url']; ?>" alt="<?php echo $section_3_product_3_logo['alt']; ?>"><img class="hover" src="<?php echo $section_3_product_3_logo_hover['url']; ?>" alt="<?php echo $section_3_product_3_logo_hover['alt']; ?>"></h3>
							<?php echo $section_3_product_3_content; ?>
						</div>
						<div class="each_product purple">
							<h3><span><?php echo $section_3_product_4_heading; ?> <?php if($section_3_product_4_logo){ ?>-<?php } ?></span><img src="<?php echo $section_3_product_4_logo['url']; ?>" alt="<?php echo $section_3_product_4_logo['alt']; ?>"><img class="hover" src="<?php echo $section_3_product_4_logo_hover['url']; ?>" alt="<?php echo $section_3_product_4_logo_hover['alt']; ?>"></h3>
							<?php echo $section_3_product_4_content; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="product_image_holder rightSideNEwHolder">
          			<img src="http://letsassist.biz/marketdojo-live/wp-content/uploads/2017/12/desktop2.png" alt="">
					<!-- <div class="each_img" style="background-image: url(http://letsassist.biz/marketdojo-live/wp-content/uploads/2017/12/desktop2.png);"> -->
            		<div class="each_img">
  						<?php echo $section_3_right_video; ?>
            		</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product section end -->

	<?php
    }
		$section_4_heading=get_field('section_4_heading');
    if($section_4_heading){
	?>
	<!-- choice section -->
	<section class="body_section choice_section" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/choice_bg.jpg);">
		<div class="container">
			<h2><span><?php echo $section_4_heading; ?></span></h2>
			<div class="choice_box_holder">
				<div class="row">
				<?php
					if( have_rows('section_4_listing') ): while ( have_rows('section_4_listing') ) : the_row();
					$choice_image=get_sub_field('choice_image');
					$choice_heading=get_sub_field('choice_heading');
					$choice_content=get_sub_field('choice_content');
				?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="choice_box">
							<?php if($choice_image){ ?>
							<figure class="ico"><img src="<?php echo $choice_image['url']; ?>" alt="<?php echo $choice_image['alt']; ?>">
							</figure>
							<?php } ?>
							<?php if($choice_heading){ ?>
							<figcaption><?php echo $choice_heading; ?></figcaption>
							<?php } ?>
							<?php if($choice_content){ ?>
							<!-- <span class="info">no training</span> -->
							<?php echo $choice_content; ?>
							<?php } ?>
						</div>
					</div>
				<?php endwhile;endif; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- choice section -->
	<?php
    }
		$section_5_heading=get_field('section_5_heading');
    if($section_5_heading){
	?>
	<!-- top resources section start -->
	<section class="body_section resources_sec">
		<div class="container">
			<h2><span><?php echo $section_5_heading; ?></span></h2>
			<div class="resource_holder">
				<div class="row">
				<?php
					$resourcecat_id=get_field('section_5_listing');
					$args = array(
						'post_type' => 'resource',
						'posts_per_page' => 3,
						'tax_query' => array(
							array(
								'taxonomy' => 'resource-cat',
								'field'    => 'term_id',
								'terms'    => $resourcecat_id,
							),
						),
					);
					$query = new WP_Query( $args );
					if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
					$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'resource_home_thumb', false, '' );
					$img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
					$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
				?>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="resource_box">
							<div class="thumbnail_container">
								<?php
								if($src){
								?>
								<figure><img src="<?php echo $src[0]; ?>" alt="<?php echo $alt_text; ?>">
								</figure>
								<?php
								}
								?>
								<h3><?php the_title(); ?></h3>
							</div>
							<p><?php echo strip_tags(substr(get_the_content(), 0, 200)); ?>...<a href="<?php the_permalink(); ?>">more</a>
							</p>
						</div>
					</div>
				<?php
					endwhile;endif;
					wp_reset_query();
				?>
				</div>
			</div>
		</div>
	</section>
	<!-- top resources section end -->
  <?php
    }
  ?>
</div>
<!-- body content end -->

<?php get_footer(); ?>

