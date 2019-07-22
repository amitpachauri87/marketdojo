<?php /* Template Name: Landing */ ?>
<?php get_header(); ?>
<section class="banner_sec">
    <div class="banner_main">
        <ul class="landing_slider">
            <?php
            query_posts(array('post_type' => 'landing_slider_type', 'order' => 'ASC'));
            while (have_posts()) : the_post();
                $imgUrl = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                ?>
                <li>
                    <figure><img src="<?php echo $imgUrl; ?>" alt=""></figure>
                <figcaption>
                    <div class="banner_content">
                        <h1><?php the_field('banner_heading'); ?>
                        </h1>
                        <?php
                        $banner_button_name1 = get_field('banner_button1_name');
                        $banner_button2_name = get_field('banner_button2_name');
                        if ($banner_button_name1) {
                            ?>
                            <a href="<?php the_field('banner_button_link'); ?>" class="btn btn1"><?php echo $banner_button_name1; ?></a>
                            <?php
                        }
                        if ($banner_button2_name) {
                            ?>
                            <a href="<?php the_field('banner_button2_link'); ?>" class="btn btn2"><?php echo $banner_button2_name; ?></a>
                            <?php
                        }
                        ?>
                    </div>
                </figcaption>
                </li>
                <?php
            endwhile;
            wp_reset_query();
            ?>
        </ul>
    </div>
</section>

<section class="body_sec testi_sec">
    <div class="container">
        <div class="small_testi_holder">
            <ul class="small_testiSlider">
                <?php
                $args = array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => -1,
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'testimonial_thumb', false, '');
                        $img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
                        $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true);
                        $heading = get_field('heading');
                        $content = get_field('content');
                        $designation = get_field('designation');
                        ?>
                        <li>
                            <div class="testi_holder clear">
                                <?php
                                if ($src) {
                                    ?>
                                    <figure><img src="<?php echo $src[0]; ?>" alt="<?php echo $alt_text; ?>"></figure>
                                    <?php
                                }
                                ?>
                                <div class="content">
                                    <p><?php echo $content; ?></p>
                                    <span class="info">
                                        <?php the_title(); ?> / <?php echo $designation; ?>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <?php
                    endwhile;
                endif;
                wp_reset_query();
                ?>
            </ul>
        </div>
    </div>
</section>

<section class="body_sec find_out_sec">
    <div class="container_landing">
        <div class="find_out_hodler clear">
            <div class="left_part">
                <h2><?php the_field('section_3_heading'); ?></h2>
                <p><?php the_field('section_3_short_description'); ?></p>
                <div class="box_holder clear">
                    <?php
                    if (have_rows('section_3_content')):
                        while (have_rows('section_3_content')): the_row();
                            $section3_image = get_sub_field('section_3_image');
                            ?>
                            <div class="each_box">
                                <span class="ico"><img src="<?php echo $section3_image['url']; ?>" alt="<?php echo $section3_image['alt']; ?>"></span>
                                <h3><?php the_sub_field('section_3_title'); ?></h3>
                                <p><?php the_sub_field('section_3_description'); ?></p>
                                <a href="<?php the_sub_field('section_3_button_link'); ?>" class="find_more"><?php the_sub_field('section_3_button_name'); ?></a>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <figure><img src="<?php the_field('section_3_right_side_image'); ?>" alt=""></figure>
        </div>
    </div>
</section>

<section class="body_sec choice_sec">
    <div class="container_landing">
        <h2><?php the_field('section_4_heading'); ?></h2>
        <div class="choice_holder clear">
            <?php
            if (have_rows('section_4_content')):
                while (have_rows('section_4_content')): the_row();
                    $section_4_image = get_sub_field('section_4_image');
                    ?>
                    <div class="choice_box">
                        <span class="ico"><span><img src="<?php echo $section_4_image['url']; ?>" alt="<?php echo $section_4_image['alt']; ?>"></span></span>
                        <h3><?php the_sub_field('section_4_title'); ?> </h3>
                        <span class="info"><?php the_sub_field('section_4_sub_title'); ?></span>
                        <p><?php the_sub_field('section_4_description'); ?></p>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<section class="body_sec functional_sec">
    <div class="container_landing">
        <h2><?php the_field('section_5_heading'); ?></h2>
        <p><?php the_field('section_5_short_descrption'); ?></p>
        <div class="circle">
            <?php
            $Middle_image = get_field('section_5_circle_middle_image');
            ?>
            <div class="black">
                <img src="<?php echo $Middle_image['url']; ?>" alt="<?php echo $Middle_image['alt']; ?>">
                <?php the_field('section_5_circle_middle_image_content'); ?>
            </div>
        </div>
        <div class="functional_holder clear">
            <?php if (have_rows('section_5_content')): ?>
                <?php
                while (have_rows('section_5_content')): the_row();
                    $section5_image = get_sub_field('section_5_image');
                    ?>
                    <div class="function_box clear">
                        <figure><img src="<?php echo $section5_image['url']; ?>" alt="<?php echo $section5_image['alt']; ?>"></figure>
                        <div class="content">
                            <h4><?php the_sub_field('section_5_title'); ?></h4>
                            <p><?php the_sub_field('section_5_description'); ?></p>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>

        </div>
    </div>
</section>


<section class="body_sec feature_sec">
    <div class="container_landing">
        <h2><?php the_field('section_6_heading'); ?></h2>
        <div class="feature_holder clear">
            <?php if (have_rows('section_6_content')): ?>
                <?php while (have_rows('section_6_content')): the_row();
                    ?>
                    <div class="feature_box">
                        <p><?php the_sub_field('section_6_description'); ?></p>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
        <a href="<?php the_field('section_6_button_link'); ?>" class="demo_btn"><?php the_field('section_6_button_name'); ?></a>
    </div>
</section>

<section class="body_sec contact_sec" style="background-image:url(<?php the_field('section_7_background_image'); ?>);">
    <div class="container_landing clear">
        <div class="one_half sign_up_sec">
            <h2><?php the_field('section_7_left_heading'); ?></h2>
            <p><?php the_field('section_7_left_short_description'); ?></p>
            <div class="sign_form">
                <?php the_field('section_7_left_contact_form'); ?>
            </div>
        </div>
        <div class="one_half guide_sec">
            <h2><?php the_field('section_7_right_heading'); ?></h2>
            <div class="guide_box_holder clear">
                <?php
                if (have_rows('section_7_right_content')):
                    while (have_rows('section_7_right_content')): the_row();
                        $section_7_right_image = get_sub_field('section_7_right_image');
                        ?>
                        <div class="guide_box clear">
                            <span class="ico"><img src="<?php echo $section_7_right_image['url']; ?>" alt="<?php echo $section_7_right_image['alt']; ?>"></span>
                            <div class="content">
                                <h3> <?php the_sub_field('section_7_right_title'); ?></h3>
                                <p><?php the_sub_field('section_7_right_description'); ?></p>
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

<?php get_footer(); ?>