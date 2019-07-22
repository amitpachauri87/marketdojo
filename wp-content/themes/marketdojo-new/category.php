<?php get_header(); ?>

<!-- body content start -->
<div class="body_content">
	<!-- listing section start -->
	<section class="body_section listing_sec">
		<div class="container">
			
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
