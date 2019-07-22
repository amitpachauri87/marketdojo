<?php /* Template Name: Reseller */ ?>
<?php get_header(); ?>
<!-- cleint Sec Start -->
<div class="body_content">
    <section class="body_section tutorials_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="tutorial_box listStyleCircle">
                        <?php the_field('left_content'); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="tutorial_box rightSide">
                        <?php the_field('right_content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>