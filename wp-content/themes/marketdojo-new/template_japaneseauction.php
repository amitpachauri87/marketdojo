<?php /*Template Name: japaneseauction*/ ?>
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
                
    </div>
    <!-- body content end -->
<?php get_footer(); ?>