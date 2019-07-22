<?php get_header(); ?>
<?php
  $queried_object = get_queried_object();
  $term_id=$queried_object->term_id;
?>
<!-- body content start -->
<div class="body_content">
	<section class="body_section filter_sec filterFourColumn splBackground">
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
	<!-- listing section start -->
	<section class="body_section listing_sec">
		<div class="container">
			<h2><span><?php single_term_title(); ?></span></h2>
			<div class="row">
			<?php
				if (have_posts()) : while (have_posts()) : the_post();
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
							<?php endif; */ ?>
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

	<?php include(TEMPLATEPATH.'/includes/testimonials.php'); ?>
</div>
<!-- body content end -->
<?php get_footer(); ?>
<script>
   $("#resource_year option").each(function(){
       var text=$(this).text();
       var trimText=$.trim(text);
       if(text!='Year'){
          $(this).val(trimText);
       }
   });
</script>