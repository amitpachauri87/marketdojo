<?php /* Template Name: Event 2017 */ ?>
<?php get_header(); ?>
<!-- cleint Sec Start -->
<?php
if (have_posts()) :
    while (have_posts()):

        the_post();
        ?>
        <!-- cleint Sec End -->

        <div class="body_content">
            <section class="body_section why_auction_sec">
                <div class="container">
                    <div class="auction_box_holder">
                        <div class="auction_box clear">
                               <h2><span><?php the_field('sub_heading') ?></span></h2>
                                <?php the_content(); ?>
                            <div class="vdocontent">
                                <?php the_field('video'); ?>
                            </div> 
                            <div class="vdocontent">
                                <?php the_field('section_1_after_video_content'); ?>
                                <?php if(get_field('section_1_after_video_button_text')){ ?>
                                    <a href="<?php the_field('section_1_after_video_button_link'); ?>" class="fill_btn"><?php the_field('section_1_after_video_button_text'); ?></a>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section class="body_section resources_sec">
                <div class="container">
                    <div class="resource_holder">
                        <div class="row">
                            <?php
                            if (have_rows('section_2_contant')): while (have_rows('section_2_contant')) : the_row();
                                    $image = get_sub_field('section_2_image');
                                    ?>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="resource_box">
                                            <div class="thumbnail_container">

                                                <figure><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                                                </figure>


                                                <h3><?php the_sub_field('section_2_heading'); ?></h3>
                                            </div>
                                            <p><?php the_sub_field('section_2_description'); ?></p>
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
                    <h2><span><?php the_field('section_3_heading'); ?></span></h2>
                    <div class="auction_box_holder">
                        <div class="auction_box clear">
                            <div class="left_content fullWidth midCenter">
                               
															<div class="newcenter"><?php the_field('section_3_description'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="body_section why_auction_sec whiteBackgroundNew">
            <div class="container">
                <h2><span><?php the_field('section_4_heading'); ?></span></h2>
                <div class="auction_box_holder">
                <?php
                if( have_rows('section_4_content') ):
                 while ( have_rows('section_4_content') ) : the_row(); ?>
                    <div class="auction_box clear">
                        <div class="left_content">
                            <?php the_sub_field('section_4_description'); ?>
                        </div>
                        <div class="right_content">
                        <?php $image = get_sub_field('section_4_image'); 
                        if($image){?>
                            <figure><img src="<?= $image['url'] ?>" alt=""></figure>
                        <?php } ?>
                        </div>
                    </div>
                <?php 
                endwhile;
                endif;
                 ?>
                </div>
            </div>
        </section>
            <section class="body_section why_auction_sec">
            <div class="container">
                <a href="<?php the_field('section_5_link'); ?>" target="_blank"><h2><span><?php the_field('section_5_heading'); ?></span></h2></a>
                <div class="auction_box_holder">
                <?php
                if( have_rows('section_5_content') ):
                 while ( have_rows('section_5_content') ) : the_row(); ?>
                    <div class="auction_box clear">
                        <div class="left_content">
                            <?php the_sub_field('section_5_description'); ?>
                        </div>
                        <div class="right_content">
                        <?php $image = get_sub_field('section_5_image'); 
                        if($image){?>
                            <a href="<?php the_sub_field('section_5_link_address'); ?>" target="_blank"><figure><img src="<?= $image['url'] ?>" alt=""></figure></a>
                        <?php } ?>
                        </div>
                    </div>
                <?php 
                endwhile;
                endif;
                 ?>
                </div>
            </div>
        </section>
            <section class="body_section why_auction_sec whiteBackgroundNew">
            <div class="container">
                <a href="<?php the_field('section_6_link'); ?>" target="_blank"><h2><span><?php the_field('section_6_heading'); ?></span></h2></a>
                <div class="auction_box_holder">
                <?php
                if( have_rows('section_6_content') ):
                 while ( have_rows('section_6_content') ) : the_row(); ?>
                    <div class="auction_box clear">
                        <div class="left_content">
                            <?php the_sub_field('section_6_description'); ?>
                        </div>
                        <div class="right_content">
                        <?php $image = get_sub_field('section_6_image'); 
                        if($image){?>
                            <a href="<?php the_sub_field('section_6_link_address'); ?>" target="_blank"><figure><img src="<?= $image['url'] ?>" alt=""></figure></a>
                        <?php } ?>
                        </div>
                    </div>
                <?php 
                endwhile;
                endif;
                 ?>
                </div>
            </div>
        </section>
        </div>
        <!-- esourcing sec end --
        <!-- body content end -->
        <?php
    endwhile;
endif;
?>
<?php get_footer(); ?>