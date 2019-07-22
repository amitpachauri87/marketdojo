<?php /*Template Name: FAQ's*/ ?>
<?php get_header(); ?>
<?php
$sub_heading=get_field('sub_heading');
?>
<!-- body content start -->
<div class="body_content">
	<section class="body_section faq_page_section">
		<div class="container">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2><span><?php echo $sub_heading; ?></span></h2>
			<?php the_content(); ?>
			<?php endwhile;endif; ?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php
					$i=0;
					$q=0;
					$taxonomy='faq-cat';
					$terms = get_terms( array(
						'taxonomy' => $taxonomy,
						'hide_empty' => false,
						'parent' => 0,
					) );
					foreach($terms as $term){
						$i++;
						$term_id=$term->term_id;
						$term_name=$term->name;
				?>
					<div class="faq_main_box_holder">
						<h3 <?php if($i==1){ ?>class="active"<?php } ?>>
							<?php
								$term_name = explode(' ', $term_name);
								$term_name[0] = '<span>'.$term_name[0].'</span>';
								$term_name = implode(' ', $term_name);
								echo $term_name;
							?>
						</h3>
						<div class="parent_container <?php if($i==1){ ?>active<?php } ?>">
						<?php
							$term_childrens = get_term_children( $term_id, $taxonomy );
							foreach($term_childrens as $term_child_id){
								$i++;
								$term_child = get_term_by( 'id', $term_child_id, $taxonomy );
								$term_child_name=$term_child->name;
						?>
							<h5>
								<span>
								<?php echo $term_child_name; ?>
								</span>
							</h5>
							<?php
								$args = array(
									'post_type' => 'faq',
									'posts_per_page' => -1,
									'tax_query' => array(
										array(
											'taxonomy' => $taxonomy,
											'field'    => 'term_id',
											'terms'    => $term_child_id,
										),
									),
								);
								$query = new WP_Query( $args );
								if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
								$q++;
							?>
							<h4 <?php if($q==1){ ?>class="active"<?php } ?>><?php the_title(); ?></h4>
							<div class="content <?php if($q==1){ ?>active<?php } ?>">
								<?php the_content(); ?>
							</div>
							<?php
								endwhile;endif;
								wp_reset_query();
							?>
						<?php
							}
						?>
						</div>
					</div>
				<?php
					}
				?>
				</div>
			</div>
		</div>
	</section>

	<?php include(TEMPLATEPATH.'/includes/testimonials.php'); ?>
</div>
<!-- body content end -->
<?php get_footer(); ?>