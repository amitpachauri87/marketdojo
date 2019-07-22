<?php
  if(is_page(array('589','930'))){
    $custom_class="whiteBackgroundNew";
  }elseif(is_page_template(array('template_landing7.php'))){
    $custom_class="whiteBackgroundNew";
  }else{
    $custom_class="grey_bg";
  }
?>
<?php /*elseif(is_page(array('188'))){ ?>black_testi }*/ ?>

<?php

if(is_page_template(array('template_promotion2.php','template_landing7.php'))){
  if( have_rows('testimonials_listing') ):
?>
  <!-- client testimonial sec start -->
  <section class="body_section testimonial_sec <?php echo $custom_class; ?>">
  	<div class="container">
  		<div class="testimonial_slider">
  		<?php
  			while ( have_rows('testimonials_listing') ) : the_row();
        $name=get_sub_field('name');
  			$heading=get_sub_field('heading');
  			$content=get_sub_field('content');
  			$designation=get_sub_field('designation');
        $testi_image=get_sub_field('testi_image');
  		?>
  			<div class="each_slide clear">
  				<?php
  				if(!empty($testi_image)){
  				?>
  				<figure><img src="<?php echo $testi_image['url']; ?>" alt="<?php echo $testi_image['alt']; ?>">
  				</figure>
  				<?php
  				}
  				?>
  				<div class="content">
  					<h4><?php echo $heading; ?></h4>
  					<?php echo $content; ?>
  					<span class="author">
  						<span class="name"><?php echo $name; ?></span>
  						<span class="designation"><?php echo $designation; ?></span>
  					</span>
  				</div>
  			</div>
  		<?php
  			endwhile;
  			wp_reset_query();
  		?>
  		</div>
  	</div>
  </section>
  <!-- client testimonial sec end -->
<?php
  endif;
}else{
  $post_id=get_the_ID();
  $args = array(
    'post_type' => 'testimonial',
    'posts_per_page' => -1,
    'meta_query' =>array(
      array(
        'key'     => 'show_on_page',
        'value'   => $post_id,
        'compare' => 'NOT LIKE'
      )
    ),
  );
  $query = new WP_Query( $args );
  if ($query->have_posts()) :
?>
<!-- client testimonial sec start -->
<section class="body_section testimonial_sec <?php echo $custom_class; ?>">
	<div class="container">
		<div class="testimonial_slider">
		<?php
			while ($query->have_posts()) : $query->the_post();
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'testimonial_thumb', false, '' );
			$img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
			$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
			$heading=get_field('heading');
			$content=get_field('content');
			$designation=get_field('designation');
		?>
			<div class="each_slide clear">
				<?php
				if($src){
				?>
				<figure><img src="<?php echo $src[0]; ?>" alt="<?php echo $alt_text; ?>">
				</figure>
				<?php
				}
				?>
				<div class="content">
					<h4><?php echo $heading; ?></h4>
					<?php echo $content; ?>
					<span class="author">
						<span class="name"><?php the_title(); ?></span>
						<span class="designation"><?php echo $designation; ?></span>
					</span>
				</div>
			</div>
		<?php
			endwhile;
			wp_reset_query();
		?>
		</div>
	</div>
</section>
<!-- client testimonial sec end -->
<?php endif; ?>
<?php
}
?>
