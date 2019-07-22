<?php /*Template Name: Resource search*/ ?>
<?php get_header(); ?>


<?php 
$category=$_GET['category'];
$value=$_GET['value'];
$resource_tag=$_GET['resource_tag'];
//$the_query = new WP_Query( array(
//    'post_type' => 'resource',
//    'post_status'   => 'publish', 
//    's' => $resource_tag,
//    'tax_query' => array(
//        array (
//            'taxonomy' => 'resource-cat',
//            'field' => 'term_id',
//            'terms'    => $category
//            
//        )
//    ),
//    'meta_query' => array(
//          'relation' => 'AND',
//           array(
//               'key' => 'resource_details',
//               'value' => $value, 
//               'compare' => 'LIKE',
//               ),     
//        ),
//
//) );
//echo '<pre>';
//print_r($the_query);die();

?>

<!-- body content start -->
<div class="body_content">

	<section class="body_section filter_sec">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="filter_holder clear">
						<form action="<?php the_permalink(); ?>" name="filter_frm" id="filter_frm">
							<span class="title">filter</span>
							<div class="select_box">
							<?php
								$resourcecats = get_terms( array( 
									'taxonomy' => 'resource-cat',
									'parent'   => 0
								) );
								if ( ! empty( $resourcecats ) && ! is_wp_error( $resourcecats ) ){
							?>
								<select name="" id="">
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
								<select name="" id="">
									<option value="host_participant">Host &amp; Participant</option>
									<option value="host">Host</option>
									<option value="participant">Participant</option>
								</select>
							</div>
							<div class="search_box clear">
								<button type="submit"><i class="fa fa-search"></i></button>
								<input type="text" placeholder="Search for Resources" name="resource_tag">
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
			<h2><a href=""><span>Search Result</span></a></h2>
			<div class="row">
			<?php
				$args = array(
                                        'post_type' => 'resource',
                                        'post_status'   => 'publish', 
                                        's' => $resource_tag,
                                        'tax_query' => array(
                                            array (
                                                'taxonomy' => 'resource-cat',
                                                'field' => 'term_id',
                                                'terms'    => $category

                                            )
                                        ),
                                        'meta_query' => array(
                                              'relation' => 'AND',
                                               array(
                                                   'key' => 'resource_details',
                                                   'value' => $value, 
                                                   'compare' => 'LIKE',
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
							$terms = get_the_terms( get_the_ID(), 'resource-cat' );
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
