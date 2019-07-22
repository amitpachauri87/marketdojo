<?php /* Template Name: supplier-onboarding */ ?>
<?php get_header(); ?>
<!-- cleint Sec Start -->
<?php include(TEMPLATEPATH . '/includes/clients.php'); ?>
<!-- cleint Sec End -->
<!-- body content start -->
<div class="body_content">
    <section class="body_section why_auction_sec">
        <div class="container">
            <h2><span><?php the_field('section_1_why_auction'); ?></span></h2>
            <?php the_field('section_1_short_description_we_make'); ?>
            <div class="auction_box_holder">
                <?php
                if (have_rows('sub_section_1_why_auction_section')):
                    $i = 1;
                    while (have_rows('sub_section_1_why_auction_section')) : the_row();
                        ?>   

                        <div class="auction_box clear">
                            <div class="left_content">
        <?php the_sub_field('content'); ?>
                            </div>
                            <div class="right_content <?php if ($i % 2 == 0) {
            echo "absolute";
        } ?>">
                                <?php $image = get_sub_field('image');
                                if ($image) {
                                    ?>
                                    <figure><img src="<?= $image['url'] ?>" alt=""></figure>
                        <?php } ?>
                            </div>
                        </div>
                        <?php
                        $i++;
                    endwhile;
                endif;
                ?>  
            </div>
        </div>
        
    </section>
<section class="body_section resources_sec lineNewTop">
    <div class="container">
        <h2><span><?php the_field('section_2_heading'); ?></span></h2>
        <div class="resource_holder">
            <div class="row">
                <?php
               if( have_rows('secction_2_dojo') ): while ( have_rows('secction_2_dojo') ) : the_row();
               $image=get_sub_field('section_2_image');
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="resource_box">
                                <div class="thumbnail_container">
                                     <h3><?php the_sub_field('section_2_title'); ?></h3>
                                        <figure><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                                        </figure>
                                        
                                    
                                    <h3><?php the_sub_field('section_2_title'); ?></h3>
                                </div>
                                <p><?php the_sub_field('section_2_description');?></p>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
    
<section class="body_section testimonial_sec grey_bg">
    <div class="container">
        <div class="testimonial_slider">
            <div class="each_slide clear">
                <?php
                $testimonial_image=get_field('section_3_testimonial_image');
                ?>
                <figure><img src="<?php echo $testimonial_image['url']; ?>" alt="<?php echo $testimonial_image['alt']; ?>">
                </figure>
                <div class="content">
                    <h4><?php the_field('section_3_testimonial_title');?></h4>
                    <p><?php the_field('section_3_testimonial_description'); ?></p>
                    <span class="author">
                        <span class="name"><?php the_field('section_3_testimonial_auther_name'); ?></span>
                        <span class="designation"><?php the_field('section_3_testimonial_auther_degination'); ?></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
    
</div>

<!-- body content end -->
<?php get_footer(); ?>