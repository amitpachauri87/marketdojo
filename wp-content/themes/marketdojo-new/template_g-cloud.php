<?php /* Template Name: G_Cloud */ ?>
<?php get_header(); ?>
<!-- cleint Sec Start -->
<?php
if (have_posts()) :
    while (have_posts()):

        the_post();
        ?>
        <!-- cleint Sec End -->

        <div class="body_content">

            <section class="body_section why_auction_sec whiteTopNospace">
                <div class="container">
                    <h2><span><?php the_title(); ?></span></h2>
                    <div class="auction_box_holder">
                        <div class="auction_box clear">
                            <div class="left_content fullScreen"><?php the_content(); ?></div>

                        </div>
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