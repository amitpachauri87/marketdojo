<?php if( have_rows('add_clients') ): ?>
<!-- cleint Sec Start -->
<section class="client_holder_section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="client_slider">
					<?php 
							while ( have_rows('add_clients') ) : the_row();
							$add_image_client=get_sub_field('add_image_client');
						?>
					<div class="each_slide">
						<figure><img src="<?php echo $add_image_client['url']; ?>" alt="<?php echo $add_image_client['alt']; ?>">
						</figure>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- cleint Sec End -->
<?php endif; ?>