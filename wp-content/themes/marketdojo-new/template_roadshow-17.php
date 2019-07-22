<?php /* Template Name: Roadshow 17 */ ?>
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
                            <h4><?php the_field('section_1_after_video_content'); ?></h4>
                            <?php if(get_field('section_1_after_video_button_text')){ ?>
                                <a href="<?php the_field('section_1_after_video_button_link'); ?>" class="fill_btn"><?php the_field('section_1_after_video_button_text'); ?></a>
                            <?php } ?>
                           
                        </div> 

                        <div class="mapdiv">
                            <h4><?php the_field('map_section_heading'); ?></h4>
                             <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
                             <?php
                              $map_latitude = get_field('map_latitude');
                              $map_longitude = get_field('map_longitude');
                             ?>
                            <div id="map" style="width: 100%; height: 300px;"></div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>




             <section class="body_section why_auction_sec whiteBackgroundNew">
                <div class="container">
                    <h2><span><?php the_field('section_2_heading'); ?></span></h2>
                    <div class="auction_box_holder">
                        <div class="auction_box clear">
                            <div class="left_content fullWidth midCenter">
                                <div class="newcenter">
                                    <?php the_field('section_2_description'); ?>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="body_section why_auction_sec">
            <div class="container">
                <h2><span><?php the_field('section_3_heading'); ?></span></h2>
                <div class="auction_box_holder">
                <?php
                if( have_rows('section_3_content') ):
                 while ( have_rows('section_3_content') ) : the_row(); ?>
                    <div class="auction_box clear">
                        <div class="left_content">
                            <?php the_sub_field('section_3_description'); ?>
                        </div>
                        <div class="right_content">
                        <?php $image = get_sub_field('section_3_image'); 
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
        </div>
        <!-- esourcing sec end --
        <!-- body content end -->
        <?php
    endwhile;
endif;
?>
<?php get_footer(); ?>