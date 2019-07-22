<?php /*Template Name: Resources*/ ?>
<?php get_header(); ?>

<!-- body content start -->
<div class="body_content">

	<section class="body_section filter_sec filterFourColumn">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="filter_holder clear">
						<form action="<?php bloginfo('url'); ?>" name="filter_frm" id="filter_frm">
							<div class="formRowSpl">
								<span class="title">filter</span>

								<div class="select_box1 filterBox">
									<?php
										$resourcecats = get_terms( array(
											'taxonomy' => 'resource-cat',
											'hide_empty' => false,
											'parent'	=>	0
										) );
										if ( ! empty( $resourcecats ) && ! is_wp_error( $resourcecats ) ){
									?>
										<select name="level_1" id="level_1">
											<option value="">All Types</option>
										<?php
											foreach ( $resourcecats as $resourcecat ) {
												$resourcecat_id=$resourcecat->term_id;
												$resourcecat_name=$resourcecat->name;
										?>
											<option value="<?php echo $resourcecat_id; ?>"><?php echo $resourcecat_name; ?></option>
											<?php
											}
										?>
										</select>
									<?php
										}
									?>
								</div>

								<div class="select_box2 filterBox">
									<select name="level_2" id="level_2">
										<option value="">Select</option>
										<?php
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
										?>
									</select>
								</div>

								<div class="select_box2 filterBox">
									<select name="level_3" id="level_3">
										<option value="">Select</option>
										<?php
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
										?>
									</select>
								</div>
							</div>
							<div class="formRowSpl">
								<div class="select_box3 filterBox">
									<select name="value" id="">
										<option value="host_participant">Host &amp; Participant</option>
										<option value="host">Host</option>
										<option value="participant">Participant</option>
									</select>
								</div>

								<div class="search_box filterBox clear">
								<input type="text" placeholder="Search for Resources" name="s">
								<button type="submit"><i class="fa fa-search"></i><span>Search</span></button>
							</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
		$resourcecats = get_terms( array(
			'taxonomy' => 'resource-cat',
			'parent'   => 0,
			'hide_empty' => false,
		) );
		if ( ! empty( $resourcecats ) && ! is_wp_error( $resourcecats ) ){
			foreach ( $resourcecats as $resourcecat ) {
				$resourcecat_id=$resourcecat->term_id;
				$resourcecat_name=$resourcecat->name;
				$resourcecats_child = get_terms( array(
	        'taxonomy' => 'resource-cat',
	        'parent'	=>	$resourcecat_id
	      ) );
	      if ( ! empty( $resourcecats_child ) && ! is_wp_error( $resourcecats_child ) ){
	        foreach ( $resourcecats_child as $resourcecat_child ) {
	          $resourcecat_child_id=$resourcecat_child->term_id;
						$resourcecats_child_name=$resourcecat_child->name;
	?>
	<!-- listing section start -->
	<section class="body_section listing_sec">
		<div class="container">
			<h2><a href="<?php echo get_term_link($resourcecat_child_id); ?>"><span><?php echo $resourcecats_child_name; ?></span></a></h2>
			<div class="row">
			<?php
				$args = array(
					'post_type' => 'resource',
					'posts_per_page' => 3,
					'tax_query' => array(
						array(
							'taxonomy' => 'resource-cat',
							'field'    => 'term_id',
							'terms'    => $resourcecat_child_id,
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
					<div class="list_box">
						<div class="thumbnail">
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
							<?php
							/*$terms = get_the_terms( get_the_ID(), 'resource-cat' );
							if ( $terms && ! is_wp_error( $terms ) ) :
								$draught_links = array();
								foreach ( $terms as $term ) {
									$draught_links[] = $term->name;
								}
								$on_draught = join( ", ", $draught_links );
							?>
							<figcaption><?php printf( esc_html__( '%s', 'textdomain' ), esc_html( $on_draught ) ); ?></figcaption>
							<?php endif;*/ ?>
						</div>
						<h3><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></a></h3>
						<p><?php echo substr(strip_tags(get_the_content()), 0, 180); ?>...<a href="<?php the_permalink(); ?>">more</a>
						</p>
					</div>
				</div>
			<?php
				endwhile;endif;
				wp_reset_query();
			?>
			</div>
		</div>
	</section>
	<!-- listing section end -->
	<?php
					}
				}
			}
		}
	?>

	<?php include(TEMPLATEPATH.'/includes/testimonials.php'); ?>
</div>
<!-- body content end -->
<?php get_footer(); ?>
<script>
/*$(".filter_holder #category").html(function (i, html) {
	return html.replace(/&nbsp;/g, '- ');
});*/
</script>
