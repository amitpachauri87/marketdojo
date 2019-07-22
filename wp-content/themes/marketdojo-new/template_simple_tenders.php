<?php /* Template Name: simple-tenders*/ ?>
<?php get_header(); ?>
<!-- cleint Sec Start -->
<?php include(TEMPLATEPATH . '/includes/clients.php'); ?>
<!-- cleint Sec End -->
<!-- body content start -->
<div class="body_content">
    <section class="body_section resources_sec">
    <div class="container">
        <h2><span><?php the_field('section_1_heading'); ?></span></h2>
        <div class="resource_holder">
            <div class="row">
                <?php
               if( have_rows('secction_1_dojo') ): while ( have_rows('secction_1_dojo') ) : the_row();
               $image=get_sub_field('section_1_image');
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="resource_box">
                                <div class="thumbnail_container">
                                     
                                        <figure><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                                        </figure>
                                        
                                    
                                    <h3><?php the_sub_field('section_1_title'); ?></h3>
                                </div>
                                <p><?php the_sub_field('section_1_description');?></p>
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
    
    <section class="body_section why_auction_sec">
        <div class="container">
            <h2><span><?php the_field('section_2_heading'); ?></span></h2>
               <div class="auction_box_holder">
                <?php
                if (have_rows('section_2')):
                    $i = 1;
                    while (have_rows('section_2')) : the_row();
                        ?>   
                        <?php
                $video_link = get_sub_field('section_2_youtube_video_link');

                preg_match('/src="(.+?)"/', $video_link, $matches_url);
                $src = $matches_url[1];

                preg_match('/embed(.*?)?feature/', $src, $matches_id);
                $id = $matches_id[1];
                $id = str_replace(str_split('?/'), '', $id);
                ?>
                        <div class="auction_box clear">
                            <div class="left_content">
                            <?php the_sub_field('section_2_description'); ?>
                            </div>
                            <div class="right_content <?php if ($i % 2 == 0) {
                             echo "absolute";
                                } ?>">
                                <?php $image = get_sub_field('section_2_image');
                                if ($id) {
                                    ?>
                                    <figure>
                                        <a href="https://www.youtube.com/watch?v=<?php echo $id; ?>" data-fancybox>
                                            <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>"></a></figure>
                                    <?php } else {
                                    ?>
                                <figure>
                         <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>"></figure>
                        <?php
                        }
                        ?>
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

    
<section class="body_section testimonial_sec">
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