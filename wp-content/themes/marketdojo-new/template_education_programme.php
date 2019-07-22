<?php /* Template Name: Education Programme */ ?>
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
                     <h2><span><?php the_title(); ?></span></h2>
                        <div class="auction_box clear">
                            <?php the_content(); ?>

                        </div>
                    </div>
                </div>
            </section>


            <section class="body_section tutorials_section auction_suitability_analysis">
                <div class="container">
                <?php if( have_rows('content') ): ?>
                    <div class="row">
                        <?php while( have_rows('content') ): the_row(); ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="tutorial_box">
                                <h4><?php the_sub_field('heading'); ?></h4>
                                <?php if( have_rows('items') ): ?>
                                    <ul>
                                        <?php while( have_rows('items') ): the_row(); ?>
                                            <li><?php the_sub_field('item_content'); ?></li>
                                        <?php endwhile; // while( has_sub_field('items') ): ?>
                                    </ul>
                                <?php endif; // if( get_field('items') ): ?>
                            </div>
                        </div>
                        <?php endwhile; // while( has_sub_field('content') ): ?>
                    </div>
                    <?php endif; // if( get_field('content') ): ?>
                </div>
            </section>

            <section class="body_section why_auction_sec">
                <div class="container">
                    <div class="auction_box_holder">
                        <div class="auction_box clear">
                            <?php the_field('tag_line'); ?>
                        </div>
                    </div>
                </div>
            </section>

            <?php
        endwhile;
    endif;
    ?>

    <?php
    wp_reset_query();
    ?>
    </div>
<?php get_footer(); ?>