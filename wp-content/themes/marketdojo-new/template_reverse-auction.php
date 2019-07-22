<?php /* Template Name: Reverse Auction */ ?>
<?php get_header(); ?>
<section class="banner_sec demo_banner_sec">
    <div class="banner_main reverseBanner whiteBanner">
        <?php
        $Banner_image = get_field('section_1_image');
        ?>
        <figure style="background-image: url(<?php echo $Banner_image['url']; ?>);"><img src="<?php echo $Banner_image['url']; ?>" alt="<?php echo $Banner_image['alt']; ?>"></figure>
        <figcaption>
            <div class="banner_content">
                <h1><?php the_field('section_1_banner_heading'); ?>
                </h1>
                <a href="<?php the_field('section_1_button1_link'); ?>" class="btn btn1 <?php if(is_page(1771)){ ?>scrolltoform_banner<?php } ?>"><?php the_field('section_1_button1_name'); ?></a>
                <a href="<?php the_field('section_1_button2_link'); ?>" class="btn btn2"><?php the_field('section_1_button2_name'); ?></a>
				<style>
					.banner_main.reverseBanner .banner_content a.btn.btn1 {
						background-color: <?php the_field('section_1_button_1_background_color'); ?>;
						color:<?php the_field('section_1_button_1_color'); ?>;
						border:<?php the_field('section_1_button_1_background_color'); ?>;
					}
					.banner_main.reverseBanner .banner_content a.btn.btn1:hover {
						background-color: <?php the_field('section_1_button_1_hover_background_color'); ?>;
						color:<?php the_field('section_1_button_1_hover_color'); ?>;
					}
					.banner_main.reverseBanner .banner_content a.btn.btn2 {
						background-color: <?php the_field('section_1_button_2_background_color'); ?>;
						color:<?php the_field('section_1_button_2_color'); ?>;
						border:<?php the_field('section_1_button_2_background_color'); ?>;
					}
					.banner_main.reverseBanner .banner_content a.btn.btn2:hover {
						background-color: <?php the_field('section_1_button_2_hover_background_color'); ?>;
						color:<?php the_field('section_1_button_2_hover_color'); ?>;
					}
				</style>
            </div>
        </figcaption>

    </div>
</section>

<section class="body_sec testi_sec">
    <div class="container">
        <div class="small_testi_holder">
            <ul class="small_testiSlider">
                <?php
				if(is_page(4326)){
					$meta_query_args = array(
						array(
							'key'     => 'show_on_quick_quote_page',
							'value'   => '1',
							'compare' => 'LIKE'
						)
					);
				}
                $args = array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => -1,
					'meta_query' => $meta_query_args
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
								<style>
									.box_holder .each_box a.find_more{
										background-color: <?php the_field('section_3_button_background_color'); ?>;
										color:<?php the_field('section_3_button_color'); ?>;

									}
									.box_holder .each_box a.find_more:hover {
										background-color: <?php the_field('section_3_button_hover_background_color'); ?>;
										color:<?php the_field('section_3_button_hover_color'); ?>;
										text-align: center;
										text-indent: 0;
									}
								</style>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
			<figure>
				<?php
					$section_3_right_video=get_field('section_3_right_video', false, false);
					if($section_3_right_video){
				?>
				<a href="<?php echo $section_3_right_video; ?>" data-fancybox>
				<?php
					}
				?>
				<img src="<?php the_field('section_3_right_side_image'); ?>" alt="">
				<?php
					if($section_3_right_video){
				?>
				</a>
				<?php
					}
				?>
			</figure>
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
                        <p><?php the_sub_field('section_4_description'); ?></p>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<?php
	$section_5_heading=get_field('section_5_heading');
	if($section_5_heading){
?>

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

<?php
	}
?>


<?php
	$call_to_action_heading=get_field('call_to_action_heading');
	if($call_to_action_heading){
		$call_to_action_background_image=get_field('call_to_action_background_image');
?>

<section class="body_sec quickQuotes_sec" style="background-image: url(<?php echo $call_to_action_background_image['url']; ?>);">
    <div class="container_landing">
        <div class="quoteBlock">
            <h2><?php echo $call_to_action_heading; ?></h2>
            <p><?php the_field('call_to_action_sub_heading'); ?></p>
			<?php
				$call_to_action_button_text_new=get_field('call_to_action_button_text_new');
				if($call_to_action_button_text_new){
			?>
            <a href="<?php the_field('call_to_action_button_link_new'); ?>"><?php echo $call_to_action_button_text_new; ?></a>
			<?php
				}
			?>
        </div>
    </div>
</section>
<style>
	.quickQuotes_sec .quoteBlock a {
		background-color: <?php the_field('call_to_action_button_background_color'); ?>;
		color:<?php the_field('call_to_action_button_text_color'); ?>;
		
	}
	.quickQuotes_sec .quoteBlock a:hover {
		background-color: <?php the_field('call_to_action_button_hover_background_color'); ?>;
		color:<?php the_field('call_to_action_button_hover_text_color'); ?>;
	}
</style>

<?php
	}
?>

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
    </div>
</section>

<section class="body_sec contact_sec" style="background-image:url(<?php the_field('section_7_banckground_image'); ?>);">
    <div class="container_landing clear">
        <div class="one_half sign_up_sec">
            <h2><?php the_field('section_7_left_heading'); ?></h2>
            <p><?php the_field('section_7_left_short_description'); ?></p>
            <div class="csNewForm">
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