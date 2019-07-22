<?php /*Template Name: Blog*/ ?>
<?php get_header(); ?>
<section class="body_section filter_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="filter_holder clear">
					<form action="<?php bloginfo('url'); ?>" name="filter_frm" id="filter_frm">
						<span class="title">filter</span>
						<div class="select_box">
							<?php
							$resourcecats = get_terms( array( 
								'taxonomy' => 'resource-cat',
								'parent'   => 0
							) );
							if ( ! empty( $resourcecats ) && ! is_wp_error( $resourcecats ) ){
							?>
							<select name="category" id="">
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
						<div class="select_box">
							<select name="value" id="">
								<option value="host-participant">Host &amp; Participant</option>
								<option value="host">Host</option>
								<option value="participant">Participant</option>
							</select>
						</div>
						<div class="search_box clear">
							<button type="submit"><i class="fa fa-search"></i></button>
							<input type="text" placeholder="Search for Resources" name="s">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- body content start -->
<div class="body_content">
	<!-- listing section start -->
	<section class="body_section listing_sec">
		<div class="container">
			
			<div class="row">
			<?php
				$args = array(
					'post_type' => 'resource',
					'posts_per_page' => -1,
					'meta_key'     => 'dont_show_it',
					'meta_value'   => 'no',
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
							$terms = get_the_category();
							if ( $terms && ! is_wp_error( $terms ) ) : 
								$draught_links = array();
								foreach ( $terms as $term ) {
									$draught_links[] = $term->name;
								}				
								$on_draught = join( ", ", $draught_links );
							?>
							<figcaption><?php printf( esc_html__( '%s', 'textdomain' ), esc_html( $on_draught ) ); ?></figcaption>
							<?php endif; ?>
						</div>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
	</section>
	<!-- listing section end -->

	<?php include(TEMPLATEPATH.'/includes/testimonials.php'); ?>
</div>
<!-- body content end -->
<?php get_footer(); ?>
