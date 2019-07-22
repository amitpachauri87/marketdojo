<?php /* Template Name: Support */ ?>
<?php get_header(); ?>
<?php
  $banner_image=get_field('banner_image');
  if($banner_image){
    $banner_heading=get_field('banner_heading');
    $banner_sub_heading=get_field('banner_sub_heading');
?>
<!-- section banner start -->
<section class="banner innerContentBanner innerBannerArea template_support_page_banner">
  <figure class="banner_img" style="background-image:url(<?php echo $banner_image['url']; ?>);"></figure>
  <div class="banner_container">
    <div class="banner_content">
      <h1><?php echo $banner_heading; ?></h1>
      <p><?php echo $banner_sub_heading; ?></p>
    </div>
  </div>
</section>
<!-- section banner end -->
<?php
  }
?>
<!-- cleint Sec Start -->
<?php include(TEMPLATEPATH . '/includes/clients.php'); ?>
<!-- cleint Sec End -->
    <!-- body content start -->
    <div class="body_content inner_page resources">    
        <section class="body_section features_sec supportSec">
            <div class="container">
                <?php
					$section_1_heading=get_field('section_1_heading');
					if($section_1_heading){
				?>
				<h2><span><?php echo $section_1_heading; ?></span></h2>
				<?php
					}
				?>
                <?php the_field('section_1_short_description'); ?>
                <div class="resource_box_holder">
                    <div class="row">
                          <?php
                        if( have_rows('section_2_contant') ): while ( have_rows('section_2_contant') ) : the_row();
                         $image=get_sub_field('section_2_image');
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <a href="<?php the_sub_field('link'); ?>" class="resource_box">
                                <span class="ico">
                                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                                </span>
                                <span class="label"><?php the_sub_field('section_2_title'); ?></span>
                                <p><?php the_sub_field('section_2_description'); ?></p>
                            </a>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
                    </div>
                </div>
                <div class="load_more_sec">
                  <?php the_field('section_3_short_description'); ?>  
                </div>
            </div>
        </section>
        
        <!-- esourcing sec start -->
        <section class="body_section esourcing_sec" style="background-image:url(<?php the_field('section_4_background_image'); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="left_part">
                            <h2><span><?php the_field('section_4_background_heading'); ?></span></h2>
                             <?php
                        $Section_2_image = get_field('section_4_image');
                        ?>
                            <figure><img src="<?php echo $Section_2_image['url']; ?>" alt="<?php echo $Section_2_image['alt']; ?>"></figure>
                            <?php the_field('section_4_background_description_'); ?>
                            <div class="btn_sec">
                                <?php
                            $link_name = get_field('section_4_get_details_button_name');
                            $sign_name = get_field('section_4_sign_in_button_name');
                            if ($link_name) {
                                ?>
                                <a href="<?php the_field('section_4_get_details_button_link'); ?>" class="btn fill_btn"><?php echo $link_name; ?></a>
                                <?php
                            }
                            if ($sign_name) {
                                ?>
                                <a href="<?php the_field('section_4_sign_in_button_link'); ?>" class="btn"><?php echo $sign_name; ?></a>
                                <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <?php
                $youtube_video = get_field('section_4_youtube_video');

                preg_match('/src="(.+?)"/', $youtube_video, $matches_url);
                $src = $matches_url[1];

                preg_match('/embed(.*?)?feature/', $src, $matches_id);
                $id = $matches_id[1];
                $id = str_replace(str_split('?/'), '', $id);
                ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="right_part">
                            <figure><a href="https://www.youtube.com/watch?v=<?php echo $id; ?>" data-fancybox>
                                <img src="<?php the_field('section_4_youtube_image'); ?>" alt=""></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- esourcing sec end -->
		<?php
			$section_5_heading=get_field('section_5_heading');
			if($section_5_heading){
		?>
        <!-- faq section start -->
		<section class="body_section features_faq">
			<div class="container">
				<h2><span><?php echo $section_5_heading; ?></span></h2>
				<div class="faq_holder">
					<?php 
						$i = 0;
						if (have_rows('section_5_listing')): while (have_rows('section_5_listing')): the_row(); $i++;
					?>
					<div class="rowFaq">
						<h3 <?php if($i==1){ ?> class="active"<?php } ?>><?php the_sub_field('section_5_listing_heading'); ?></h3>
						<div  class="content <?php if($i==1){ ?>active<?php } ?>">
							<?php the_sub_field('section_5_listing_content'); ?>
						</div>
					</div>
					<?php
						endwhile;endif;
					?>
				</div>
				<div class="more_question">
					<?php the_field('section_5_content'); ?>
					<p>&nbsp;</p>
				</div>
			</div>
		</section>
		<!-- faq section end -->
		<?php
			}
		?>
        <!-- client testimonial sec start -->
        <?php include(TEMPLATEPATH.'/includes/testimonials.php'); ?>
        <!-- client testimonial sec end -->
    </div>
    <!-- body content end -->
    <?php get_footer(); ?>