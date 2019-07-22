<?php /* Template Name: About */ ?>
<?php get_header(); ?>
<!-- cleint Sec Start -->
<?php
if (have_posts()) :
    while (have_posts()):

        the_post();
        ?>
        <!-- cleint Sec End -->

        <div class="body_content">

            <section class="body_section why_auction_sec aboutNew">
                <div class="container">
                    <div class="auction_box_holder">
                        <div class="auction_box clear">
                                <?php the_content(); ?>
                        </div>

<?php  $section_2_head = get_field('section_2_head'); ?>
<h3><?php echo  $section_2_head; ?> </h3>



<div id="map" style="width: 100%; height: 300px;" data-address="<?php the_field('map_address'); ?>" data-latitude="<?php the_field('map_latitude'); ?>" data-lognitude="<?php the_field('map_longitude'); ?>"></div>  


<?php  $section_3 = get_field('section_3'); ?>
<div class="aboutBottomNew"><?php echo  $section_3; ?> </div>


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
<div class="newAbtBot">
<?php include(TEMPLATEPATH . '/includes/clients.php'); ?>
</div>
<?php get_footer(); ?>