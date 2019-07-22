<?php /* Template Name: Landing2 */ ?>
<?php get_header(); ?>
<div class="demo-page">
<section class="banner_sec demo_banner_sec">
    <div class="banner_main">
        <?php
        $Banner_image = get_field('section_1_image');
        ?>
        <figure style="background-image: url(<?php echo $Banner_image['url']; ?>);"><img src="<?php echo $Banner_image['url']; ?>" alt="<?php echo $Banner_image['alt']; ?>"></figure>
        <figcaption>
            <div class="call_text widthBg">
                <h1><?php the_field('section_1_heading'); ?></h1>
                <h3><?php the_field('section_1_sub_heading'); ?></h3>
            </div>
            <div class="demo_frm">
                <?php the_field('section_1_form'); ?>
            </div>
            
        </figcaption>

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

<section class="body_sec work_cycle_sec">
    <div class="cycleContainer">
        <div class="cycle_holder clear">
            <figure class="circle_border"><img src="<?php the_field('section_3_circle_image'); ?>" alt=""></figure>
            <div class="cycle_each_holder">
                <?php
                if (have_rows('section_3_content')):
                    while (have_rows('section_3_content')): the_row();
                        ?>
                        <div class="cycle_box clear">
                            <div class="content_left">
                                <h4><?php the_sub_field('section_3_heading'); ?></h4>
                                <p><?php the_sub_field('section_3_description'); ?></p>
                                <a href="<?php the_sub_field('section_3_button_link'); ?>" class="link"><?php the_sub_field('section_3_button_name'); ?></a>
                            </div>
                            <?php
                            $section_3_image = get_sub_field('section_3_image');
                            ?>
                            <div class="content_right">
                                <figure><img src="<?php echo $section_3_image['url']; ?>" alt="<?php echo $section_3_image['alt']; ?>"></figure>
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




<section class="body_sec solution_points_sec">
    <div class="container_landing">
        <div class="solution_stripe_holder clear">
            <?php
            if (have_rows('section_4_content')):
                while (have_rows('section_4_content')): the_row();
                    ?>
                    <div class="each_stripe clear">
                    <?php
                    $arw_image=get_sub_field('section_4_row_image');
                    if($arw_image)
                    {
                    ?>
                        <span class="arw_down"><img src="<?php echo $arw_image; ?>" alt=""></span>
                        <?php
                    }
                    ?>
                        <div class="content_sec">
                            <h4><?php the_sub_field('section_4_heading'); ?></h4>
                            <p><?php the_sub_field('section_4_description'); ?></p>
                            <a href="<?php the_sub_field('section_4_button_link'); ?>" class="link"><?php the_sub_field('section_4_button_name'); ?></a>
                        </div>
                        <?php
                        $section_4_image = get_sub_field('section_4_image');
                        ?>
                        <figure class="image_sec"><img src="<?php echo $section_4_image['url']; ?>" alt="<?php echo $section_4_image['alt']; ?>"></figure>
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
        <h2><?php the_field('section_5_heading'); ?></h2>
        <div class="feature_holder clear">
            <?php if(have_rows('section_5_content')): ?>
            <?php while( have_rows('section_5_content') ): the_row(); 
             ?>
            <div class="feature_box">
                <p><?php the_sub_field('section_5_description'); ?></p>
            </div>
           <?php
             endwhile;
         endif;
           ?>
        </div>
        <!-- <a href="#" class="demo_btn">Schedule a Demo</a> -->
    </div>
</section>
</div>

<?php get_footer(); ?>