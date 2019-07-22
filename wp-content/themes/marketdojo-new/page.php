<?php get_header(); ?>
<!-- body content start -->
<div class="body_content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="body_section terms_page general_page">
		<div class="container">
			<h2><span><?php the_title(); ?></span></h2>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="general_content auction_suitability_analysis">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; endif; ?>
	<?php include(TEMPLATEPATH.'/includes/testimonials.php'); ?>
</div>
<!-- body content end -->
<?php get_footer(); ?>