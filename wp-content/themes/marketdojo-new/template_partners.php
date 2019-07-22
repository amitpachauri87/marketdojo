<?php /* Template Name: Partners */ ?>
<?php get_header(); ?>
<!-- cleint Sec Start -->
<!-- cleint Sec End -->
<?php while (have_posts()) : the_post(); ?>
<div class="body_content">

    <section class="body_section why_auction_sec whiteBackgroundNew">
        <div class="container">
            <div class="auction_box_holder">
                <div class="auction_box clear">
                    <div class="left_content fullWidth midCenter">
                       <div class="newcenter2">
                        <h4><?php the_field('section_1_heading'); ?></h4>
                        <?php the_field('section_1_short_description'); ?>
											</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="body_section why_auction_sec">
        <div class="container">
            <div class="auction_box_holder">
                <?php
                if (have_rows('section_2_content')):
                    while (have_rows('section_2_content')) : the_row();
                        ?>
                        <div class="auction_box clear">
                            <div class="left_content">
                                <h4> <?php the_sub_field('section_2_heading'); ?></h4>
                                <p><?php the_sub_field('section_2_description'); ?></p>
                            </div>
                            <div class="right_content">
                                <?php
                                $image = get_sub_field('section_2_image');
                                if ($image) {
                                    ?>
                                    <figure><img src="<?= $image['url'] ?>" alt=""></figure>
                                <?php } ?>
                            </div>
                            <?php
                            $Button_name=get_sub_field('section_2_button_name');
                            if($Button_name)
                            {
                            ?>
                            <div class="btn_sec">
                                <a href="<?php the_sub_field('section_2_button_link'); ?>" class="btn fill_btn"><?php echo $Button_name; ?></a>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
    <!--<section class="body_section why_auction_sec">
        <div class="container"> 
            <div class="auction_box_holder">
            </?php the_content(); ?>
            </div>
        </div>
    </section>-->
</div>
<?php  endwhile; ?>
<!-- esourcing sec end --
<!-- body content end -->
<?php get_footer(); ?>