<?php /* Template Name: Demo */ ?>
<?php get_header(); ?>
<div class="demo-page">
<section class="banner banner_sec demo_banner_sec">
    <div class="banner_main">
        <?php
        $Banner_image = get_field('section_1_image');
        ?>
        <figure style="background-image: url(<?php echo $Banner_image['url']; ?>);"><img src="<?php echo $Banner_image['url']; ?>" alt="<?php echo $Banner_image['alt']; ?>"></figure>
        <figcaption class="banner_container">
            
            <div class="call_text banner_content">
                <h1><?php the_field('section_1_heading'); ?></h1>
                <p><?php the_field('section_1_sub_heading'); ?></p>
                
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
                $query = new WP_Query( $args );
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'testimonial_thumb', false, '' );
                $img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
                $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true);
                $heading = get_field('heading');
                $content = get_field('content');
                $designation = get_field('designation');
                ?>
                <li>
                    <div class="testi_holder clear">
                        <?php
                        if($src){
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
			endwhile;endif;
			wp_reset_query();
		?>
            </ul>
        </div>
    </div>
</section>
<?php /* ?>
<section class="body_sec choice_sec">
    <div class="container_landing">
        <h2><?php the_field('section_3_heading'); ?></h2>
        <div class="choice_holder clear">
            <?php if(have_rows('section_3_content')): ?>
            <?php while( have_rows('section_3_content') ): the_row(); 
            $section3_image=get_sub_field('section_3_image');
            ?>
            <div class="choice_box">
                <span class="ico"><span><img src="<?php echo $section3_image['url']; ?>" alt="<?php echo $section3_image['alt']; ?>"></span></span>
                <h3><?php the_sub_field('section_3_title'); ?></h3>
                <span class="info"><?php the_sub_field('section_3_sub_title'); ?></span>
                <p><?php the_sub_field('section_3_description'); ?></p>
            </div>
              <?php endwhile; ?>
           <?php endif;?> 
        </div>
    </div>
</section>
<?php */ ?>
<?php
	$call_to_action_content = get_field( 'section_4_call_to_action_content' );
	$call_to_action_button_text = get_field( 'section_4_call_to_action_button_name' );
?> 

<?php /* ?>
<section class="demo_sec">
    <div class="container">
        <div class="demo_box clear">
            <div class="heading_part">
               <?php echo $call_to_action_content; ?>
            </div>
            <div class="btn_sec clear">
                <a href="javascript:void();" class="demo_btn demoBTN_demo_pg"><?php echo $call_to_action_button_text; ?></a>
            </div>
        </div>
    </div>
</section>
<?php */ ?>
<?php /* ?>
<section class="body_sec functional_sec">
    <div class="container_landing">
        <h2><?php the_field('section_5_heading'); ?></h2>
        <?php the_field('section_5_short_descrption'); ?>
        <div class="circle">
            <?php
            $Middle_image=get_field('section_5_circle_middle_image');
            ?>
            <div class="black">
                <img src="<?php echo $Middle_image['url']; ?>" alt="<?php echo $Middle_image['alt']; ?>">
                 <?php the_field('section_5_circle_middle_image_content'); ?>
            </div>
        </div>
        <div class="functional_holder clear">
            <?php if(have_rows('section_5_content')): ?>
            <?php while( have_rows('section_5_content') ): the_row(); 
            $section5_image=get_sub_field('section_5_image');
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
<?php */ ?>
<!-- body_section_start -->
<section class="body_sec award_wining_sec">
    <div class="container">
        <h2>JOIN THE INNOVATORS ALREADY SUCCEEDING WITH MARKET DOJO</h2>
        <p>The only on-demand and easy to use procurement tool that can help you<br>
maximise your savings for as little as £500 per month</p>
        <div class="support_box_holder_new">
            <div class="support_box left">
                <span class="blue_large">£<samp class="demoCount">1.3</samp><sub>Bn</sub></span>
                <span class="label">Savings Generated</span>
                <span class="info">Through our on-demand eSourcing tool that <br>can help you to run events from eRFX's to Reverse Auctions</span>
            </div>
            <div class="support_box right">
							<span class="blue_large"><samp class="demoCount">21</samp><sup>%</sup></span>
                <span class="label">Average Auction Savings</span>
                <span class="info">With advanced forward and reverse auction capability <br>including Ranked, Open and Japanese event types</span>
            </div>
        </div>
    </div>
</section>
<!-- body_section_start -->


<section class="body_sec contact_sec2" style="background-image:url(<?php the_field('section_6_background_image'); ?>);">
    <div class="container_landing">
        <div class="one_half_full guide_sec">
            <h2><?php the_field('section_6_heading'); ?></h2>
            <em><?php the_field('section_6_short_description'); ?></em>
            <div class="guide_box_holder2">
                <?php if(have_rows('section_6_content')): ?>
            <?php while( have_rows('section_6_content') ): the_row(); 
            $section_6_image=get_sub_field('section_6_image');
            ?>
                <div class="guide_box">
                    <span class="ico"><img src="<?php echo $section_6_image['url']; ?>" alt="<?php echo $section_6_image['alt']; ?>"></span>
                    <div class="content">
                        <h3><?php the_sub_field('section_6_title'); ?></h3>
                        <p><?php the_sub_field('section_6_description'); ?></p>
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

<section class="body_sec feature_sec">
    <div class="container_landing">
        <h2><?php the_field('section_7_heading'); ?></h2>
        <div class="feature_holder clear">
            <?php if(have_rows('section_7_content')): ?>
            <?php while( have_rows('section_7_content') ): the_row(); 
             ?>
            <div class="feature_box">
                <p><?php the_sub_field('section_7_description'); ?></p>
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
<script>
$(document).ready(function ($) {
	$('.demoCount').counterUp({
			delay: 10,
			time: 1200
	});
});
</script>