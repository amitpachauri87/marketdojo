<?php /*Template Name: HOME*/ ?>
<?php get_header(); ?>

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
		$section_3_heading=get_field('section_3_heading');
		$section_3_product_1_heading=get_field('section_3_product_1_heading');
		$section_3_product_1_logo=get_field('section_3_product_1_logo');
		$section_3_product_1_logo_hover=get_field('section_3_product_1_logo_hover');
		$section_3_product_1_content=get_field('section_3_product_1_content');
		$section_3_product_1_image=get_field('section_3_product_1_image');
		$section_3_product_2_heading=get_field('section_3_product_2_heading');
		$section_3_product_2_logo=get_field('section_3_product_2_logo');
		$section_3_product_2_logo_hover=get_field('section_3_product_2_logo_hover');
		$section_3_product_2_content=get_field('section_3_product_2_content');
		$section_3_product_2_image=get_field('section_3_product_2_image');
		$section_3_product_3_heading=get_field('section_3_product_3_heading');
		$section_3_product_3_logo=get_field('section_3_product_3_logo');
		$section_3_product_3_logo_hover=get_field('section_3_product_3_logo_hover');
		$section_3_product_3_content=get_field('section_3_product_3_content');
		$section_3_product_3_image=get_field('section_3_product_3_image');
		$section_3_product_4_heading=get_field('section_3_product_4_heading');
		$section_3_product_4_logo=get_field('section_3_product_4_logo');
		$section_3_product_4_logo_hover=get_field('section_3_product_4_logo_hover');
		$section_3_product_4_content=get_field('section_3_product_4_content');
		$section_3_product_4_image=get_field('section_3_product_4_image');
	?>
	<!-- product section start -->
	<section class="body_section product_section">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="product_left_content">
					<h2><span><?php echo $section_3_heading; ?></span></h2>
					<div class="product_holder holderHeight">
						<div class="each_product red" data-target="id1">
							<h3><span><?php echo $section_3_product_1_heading; ?> -</span><img src="<?php echo $section_3_product_1_logo['url']; ?>" alt="<?php echo $section_3_product_1_logo['alt']; ?>"><img class="hover" src="<?php echo $section_3_product_1_logo_hover['url']; ?>" alt="<?php echo $section_3_product_1_logo_hover['alt']; ?>"></h3>
							<?php echo $section_3_product_1_content; ?>
						</div>
						<div class="each_product blue" data-target="id2">
							<h3><span><?php echo $section_3_product_2_heading; ?> -</span><img src="<?php echo $section_3_product_2_logo['url']; ?>" alt="<?php echo $section_3_product_2_logo['alt']; ?>"><img class="hover" src="<?php echo $section_3_product_2_logo_hover['url']; ?>" alt="<?php echo $section_3_product_2_logo_hover['alt']; ?>"></h3>
							<?php echo $section_3_product_2_content; ?>
						</div>
						<div class="each_product green" data-target="id3">
							<h3><span><?php echo $section_3_product_3_heading; ?> -</span><img src="<?php echo $section_3_product_3_logo['url']; ?>" alt="<?php echo $section_3_product_3_logo['alt']; ?>"><img class="hover" src="<?php echo $section_3_product_3_logo_hover['url']; ?>" alt="<?php echo $section_3_product_3_logo_hover['alt']; ?>"></h3>
							<?php echo $section_3_product_3_content; ?>
						</div>
						<div class="each_product purple" data-target="id4">
							<h3><span><?php echo $section_3_product_4_heading; ?> -</span><img src="<?php echo $section_3_product_4_logo['url']; ?>" alt="<?php echo $section_3_product_4_logo['alt']; ?>"><img class="hover" src="<?php echo $section_3_product_4_logo_hover['url']; ?>" alt="<?php echo $section_3_product_4_logo_hover['alt']; ?>"></h3>
							<?php echo $section_3_product_4_content; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
				<div class="product_image_holder rightSideNEwHolder">
					<div class="each_img desktop" id="id1">
						<figure><img src="<?php echo $section_3_product_1_image['url']; ?>" alt="<?php echo $section_3_product_1_image['alt']; ?>">
						</figure>
					</div>
					<div class="each_img ipad" id="id2">
						<figure><img src="<?php echo $section_3_product_2_image['url']; ?>" alt="<?php echo $section_3_product_2_image['alt']; ?>">
						</figure>
					</div>
					<div class="each_img mobile" id="id3">
						<figure><img src="<?php echo $section_3_product_3_image['url']; ?>" alt="<?php echo $section_3_product_3_image['alt']; ?>">
						</figure>
					</div>
					<div class="each_img laptop" id="id4">
						<figure><img src="<?php echo $section_3_product_4_image['url']; ?>" alt="<?php echo $section_3_product_4_image['alt']; ?>">
						</figure>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product section end -->
	
	<?php
		$section_4_heading=get_field('section_4_heading');
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
		$section_5_heading=get_field('section_5_heading');
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
								<a href="<?php the_permalink(); ?>">
								<?php
								if($src){
								?>
								<figure><img src="<?php echo $src[0]; ?>" alt="<?php echo $alt_text; ?>">
								</figure>
								<?php
								}
								?>
								</a>
								<!--<h3><?php //the_title(); ?></h3>-->
							</div>
							<h3><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></a></h3>
							<p><?php echo substr(strip_tags(get_the_content()), 0, 180); ?>...<a href="<?php the_permalink(); ?>">more</a>
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
</div>
<!-- body content end -->

<?php get_footer(); ?>
