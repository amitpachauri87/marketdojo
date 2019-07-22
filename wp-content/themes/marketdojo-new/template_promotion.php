<?php /*Template Name: Promotion*/ ?>
<?php get_header(); ?>
<!-- cleint Sec Start -->
<?php include(TEMPLATEPATH.'/includes/clients.php'); ?>
        <!-- cleint Sec End -->
    <!-- body content start -->
    <div class="body_content">
        <section class="body_section why_auction_sec">
            <div class="container">
                <h2><span><?php the_field('section_1_why_auction'); ?></span></h2>
                <div class="auction_box_holder">
                 <?php
                if( have_rows('sub_section_1_why_auction_section') ):
                    $i=1;
                 while ( have_rows('sub_section_1_why_auction_section') ) : the_row(); ?>   

                    <div class="auction_box clear">
                        <div class="left_content">
                            <?php the_sub_field('content'); ?>
                        </div>
                        <div class="right_content <?php if($i%2==0){ echo "absolute"; } ?>">
                            <?php $image = get_sub_field('image'); 
                        if($image){?>
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
        
        <!-- esourcing sec start -->
        <?php $image = get_field('section_2_background_image'); ?>
        <section class="body_section esourcing_sec" style="background-image:url(<?= $image['url'] ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="left_part">
                            <h2><span><?php the_field('section_2_head'); ?></span></h2>
                           <?php $left_image = get_field('left_image'); 
                                if($left_image){?>
                                    <figure><img src="<?= $left_image['url'] ?>" alt=""></figure>
                            <?php } ?>
                            <?php the_field('section_2_content'); ?>
                            <div class="btn_sec">
                            <?php $section_2_button_1_link=get_field('section_2_button_1_link');
                            $section_2_button_1_text=get_field('section_2_button_1_text');  
                            if($section_2_button_1_link!=""){ ?>
                                <a href="<?php echo $section_2_button_1_link; ?>" class="btn fill_btn"><?php echo $section_2_button_1_text; ?></a>
                            <?php } 
                             $section_2_button_2_link=get_field('section_2_button_2_link');
                            $section_2_button_2_text=get_field('section_2_button_2_text');  
                            
                            if($section_2_button_2_link!=""){ 
                            ?>
                                <a href="<?php echo $section_2_button_1_link; ?>" class="btn"><?php echo $section_2_button_2_text; ?></a>
                             <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php
                     $video_image = get_field('section_2_video');
                        preg_match('/src="(.+?)"/', $video_image, $matches_url);
                        $src = $matches_url[1];
                        preg_match('/embed(.*?)?feature/', $src, $matches_id);
                        $id = $matches_id[1];
                        $vid = str_replace(str_split('?/'), '', $id);
                    ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="right_part">
                            <?php $right_video_image = get_field('right_video_image'); 
                                if($right_video_image){?>
                                    <figure><a href="https://www.youtube.com/embed/<?= $vid; ?>" data-fancybox><img src="<?= $right_video_image['url'] ?>" alt=""></a></figure>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- esourcing sec end -->
         <!-- client testimonial sec start -->
        <?php include(TEMPLATEPATH.'/includes/testimonials.php'); ?>
        <!-- client testimonial sec end -->
    </div>
    <!-- body content end -->
<?php get_footer(); ?>
