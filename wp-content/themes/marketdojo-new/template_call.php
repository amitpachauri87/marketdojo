<?php /* Template Name: Call */ ?>
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

<!-- Call -->
<?php
        $section_3_heading=get_field('section_3_heading');
        $section_3_content=get_field('section_3_content');
        $section_3_product_1_heading=get_field('section_3_product_1_heading');
        $section_3_product_1_logo=get_field('section_3_product_1_logo');
        $section_3_product_1_logo_hover=get_field('section_3_product_1_logo_hover');
        $section_3_product_1_content=get_field('section_3_product_1_content');
        $section_3_product_1_image=get_field('section_3_product_1_image');
        $section_3_product_2_heading=get_field('section_3_product_2_heading');
        $section_3_product_2_logo=get_field('section_3_product_2_logo');
        $section_3_product_2_logo_hover=get_field('section_3_product_2_logo_hover');
        $section_3_product_2_content=get_field('section_3_product_2_content');
        $section_3_product_2_image=get_field('section_3_product_2_image');
        $section_3_product_3_heading=get_field('section_3_product_3_heading');
        $section_3_product_3_logo=get_field('section_3_product_3_logo');
        $section_3_product_3_logo_hover=get_field('section_3_product_3_logo_hover');
        $section_3_product_3_content=get_field('section_3_product_3_content');
        $section_3_product_3_image=get_field('section_3_product_3_image');
        $section_3_product_4_heading=get_field('section_3_product_4_heading');
        $section_3_product_4_logo=get_field('section_3_product_4_logo');
        $section_3_product_4_logo_hover=get_field('section_3_product_4_logo_hover');
        $section_3_product_4_content=get_field('section_3_product_4_content');
        $section_3_product_4_image=get_field('section_3_product_4_image');
        $section_3_product_5_heading=get_field('section_3_product_5_heading');
    ?>
	<section class="body_section lg-head product_section callImageInfo">
      	<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="centerAlign">
						<h2><span><?php echo $section_3_heading; ?></span></h2>
						<em><?php echo $section_3_content; ?></em>
					</div>
				</div>
			</div>
		</div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="product_left_content">
                    <div class="product_holder">
                        <ul>
                            <li><?php echo $section_3_product_1_heading; ?></li>
                            <li><?php echo $section_3_product_2_heading; ?></li>
                            <li><?php echo $section_3_product_3_heading; ?></li>
                            <li><?php echo $section_3_product_4_heading; ?></li>
                            <li><?php echo $section_3_product_5_heading; ?></li>
                
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                <div class="product_image_holder">
                    <div class="each_img desktop">
                        <figure><img src="<?php echo $section_3_product_1_image['url']; ?>" alt="<?php echo $section_3_product_1_image['alt']; ?>">
                        </figure>
                    </div>
                    <!--<div class="each_img desktop">
                        <figure><img src="<?php //echo $section_3_product_1_image['url']; ?>" alt="<?php //echo $section_3_product_1_image['alt']; ?>">
                        </figure>
                    </div>
                    <div class="each_img ipad"> 
                        <figure><img src="<?php //echo $section_3_product_2_image['url']; ?>" alt="<?php //echo $section_3_product_2_image['alt']; ?>">
                        </figure>
                    </div>
                    <div class="each_img mobile">
                        <figure><img src="<?php //echo $section_3_product_3_image['url']; ?>" alt="<?php //echo $section_3_product_3_image['alt']; ?>">
                        </figure>
                    </div>
                    <div class="each_img laptop">
                        <figure><img src="<?php //echo $section_3_product_4_image['url']; ?>" alt="<?php //echo $section_3_product_4_image['alt']; ?>">
                        </figure>
                    </div>-->
                </div>
            </div>
        </div>
    </section>

<!-- /Call -->


<section class="body_sec contact_sec2 lg-head" style="background-image:url(<?php the_field('section_4_background_image'); ?>);">
    <div class="container_landing">
        <div class="one_half_full guide_sec">
            <h2><span><?php the_field('section_4_heading'); ?></span></h2>
            <em><?php the_field('section_4_short_description'); ?></em>
            <div class="guide_box_holder2">
                <?php if(have_rows('section_4_content')): ?>
            <?php while( have_rows('section_4_content') ): the_row(); 
            $section_4_image=get_sub_field('section_4_image');
            ?>
                <div class="guide_box">
                    <span class="ico"><img src="<?php echo $section_4_image['url']; ?>" alt="<?php echo $section_4_image['alt']; ?>"></span>
                    <div class="content">
                        <h3><?php the_sub_field('section_4_title'); ?></h3>
                        <p><?php the_sub_field('section_4_description'); ?></p>
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