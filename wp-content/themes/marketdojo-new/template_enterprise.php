<?php /* Template Name: Enterprise */ ?>
<?php get_header(); ?>
<!-- cleint Sec Start -->
<?php include(TEMPLATEPATH . '/includes/clients.php'); ?>
<!-- cleint Sec End -->
<!-- body content start -->
<div class="body_content">
    <section class="body_section why_auction_sec newpprlc nobgPattern">
        <div class="container">
            <h2><span><?php the_field('section_1_heading'); ?></span></h2>
            <div class="auction_box_holder">

                <div class="auction_box padTop_none clear">
                    <div class="left_content full_box">
                        <?php the_field('section_1_contant'); ?>    
                    </div>
                    <?php
                    $image = get_field('section_1_image');
                    ?>
                    <!--<div class="right_content absolute">
                        <figure><img src="</?php echo $image['url']; ?>" alt="</?php echo $image['alt']; ?>"></figure>
                    </div>-->
                </div>


            </div>
        </div>
    </section>

    <!-- circle section with parallax start -->
    <section class="body_section parallax_sec circle_section">
        <div class="circle_holder">
            <div class="text_boxes">
                <h4 class="top_left">
                    <svg viewBox="0 0 500 500">
                    <path fill="transparent" id="curve" d="M73.2,148.6c4-6.1,65.5-96.8,178.6-95.6c111.3,1.2,170.8,90.3,175.1,97" />
                    <text width="500">
                    <textPath fill="#fff" xlink:href="#curve">
                        <?php the_field('section_2_heading_1'); ?>
                    </textPath>
                    </text>
                    </svg>
                </h4>
                <h4 class="top_right">
                    <svg viewBox="0 0 500 500">
                    <path fill="transparent" id="curve" d="M73.2,148.6c4-6.1,65.5-96.8,178.6-95.6c111.3,1.2,170.8,90.3,175.1,97" />
                    <text width="500">
                    <textPath fill="#fff" xlink:href="#curve">
                        <?php the_field('section_2_heading_2'); ?>
                    </textPath>
                    </text>
                    </svg>
                </h4>
                <h4 class="bottom_left">
                    <svg viewBox="0 0 300 300">
                    <path fill="transparent" id="curve" d="M73.2,148.6c4-6.1,65.5-96.8,178.6-95.6c111.3,1.2,170.8,90.3,175.1,97" />
                    <text width="500">
                    <textPath fill="#fff" xlink:href="#curve">
                        <?php the_field('section_2_heading_3'); ?>
                    </textPath>
                    </text>
                    </svg>
                </h4>
                <h4 class="bottom_right">
                    <svg viewBox="0 0 300 300">
                    <path fill="transparent" id="curve" d="M73.2,148.6c4-6.1,65.5-96.8,178.6-95.6c111.3,1.2,170.8,90.3,175.1,97" />
                    <text width="500">
                    <textPath fill="#fff" xlink:href="#curve">
                        <?php the_field('section_2_heading_4__'); ?>
                    </textPath>
                    </text>
                    </svg>
                </h4>
            </div>
            <div class="middle_circle">
                <h3><?php the_field('section_2_middle_circle_heading'); ?></h3>
            </div>
            <div class="inner_circle">
                <?php $i = 0; ?>
                <?php
                    $i=0;
                    $args = array(
                        'post_type' => 'enterprise_list',
                        'posts_per_page' => 9,
                    );
                    $query = new WP_Query( $args );
                    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();$i++;
                    global $post;
                    $image = get_field('sourcing_list_image');
                    $color = get_field('color');
                ?>
                    <style>
                        .<?php echo $post->post_name; ?>:hover {
                            box-shadow: 0px 0px 35px <?php echo $color; ?> !important;
                            cursor: pointer;
                        }
                        .<?php echo $post->post_name; ?> {
                            border-color: <?php echo $color; ?> !important;
                        }
                    </style>
                    <span class="circle circle<?php echo $i; ?> enterprice_product <?php echo $post->post_name; ?>" data-prod_id="<?php echo $post->ID; ?>">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        <span class="label"><?php the_title(); ?></span>
                    </span>
                <?php endwhile;endif; ?>
                <?php wp_reset_query(); ?>  
            </div>
        </div>
        <div class="parallax_items left_items">
            <?php $i = 0; ?>
            <?php
            while (have_rows('section_2_left_items')): the_row();
                $left_image = get_sub_field('section_2_left_items_image');
                $i++;
                ?>
                <span class="item item_<?php echo $i; ?>">
                    <img src="<?php echo $left_image['url']; ?>" alt="<?php echo $left_image['alt']; ?>"></span>
            <?php endwhile; ?>  
        </div>
        <div class="parallax_items right_items">
            <?php $i = 0; ?>
            <?php
            while (have_rows('section_2_right_items')): the_row();
                $right_image = get_sub_field('section_2_right_items_image');
                $i++;
                ?>
                <span class="item item_<?php echo $i; ?>">
                    <img src="<?php echo $right_image['url']; ?>" alt="<?php echo $right_image['alt']; ?>"></span>
            <?php endwhile; ?>     
        </div>
    </section>
    <!-- circle section with parallax end -->


    <!-- inner menu secondary -->
    <section class="secondary_menu">
        <div class="container">
            <div class="row d-flex align-items-center">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <figure class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $flatsome_opt['site_logo']; ?>" alt="logo"></a></figure>
                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="menu">
                           <a href="javascript:void(0);" class="menuClose2"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                            <?php wp_nav_menu( array( 'container' => '', 'theme_location' => 'marketdojo_menu', 'menu_class' => '') ); ?>
                        </div>
                        <a href="javascript:void(0);" class="menuOpen2"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                                <div class="menuOverLay2">&nbsp;</div>
                    </div>
            </div>
        </div>
    </section>
    <!-- inner menu secondary -->

    <div id="product_sec_new">
    <!-- esourcing sec start -->
    <section class="body_section esourcing_sec" style="background-image:url(<?php the_field('section_3_background_image'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="left_part">
                        <h2><span><?php the_field('section_3_heading'); ?> </span></h2>
                            <?php
                            $Section_3_image = get_field('section_3_image');
                            ?>
                        <figure><img src="<?php echo $Section_3_image['url']; ?>" alt="<?php echo $Section_3_image['alt']; ?>"></figure>
                            <?php the_field('section_3_description_'); ?>
                        <div class="btn_sec">
                            <?php
                            $link_name = get_field('section_3_get_details_button_name');
                            $sign_name = get_field('section_3_sign_in_button_name');
                            if ($link_name) {
                                ?>
                                <a href="<?php the_field('section_3_get_details_button_link_'); ?>" class="btn fill_btn"><?php echo $link_name; ?></a>
                                <?php
                            }
                            if ($sign_name) {
                                ?>
                                <a href="<?php the_field('section_3_sign_in_button_link'); ?>" class="btn"><?php echo $sign_name; ?></a>
                    <?php
                }
                ?>
                        </div>
                    </div>
                </div>
                <?php
                $video_image = get_field('section_3_youtube_video');

                preg_match('/src="(.+?)"/', $video_image, $matches_url);
                $src = $matches_url[1];

                preg_match('/embed(.*?)?feature/', $src, $matches_id);
                $id = $matches_id[1];
                $id = str_replace(str_split('?/'), '', $id);
                ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="right_part">
                        <figure>
                            <a href="https://www.youtube.com/watch?v=<?php echo $id; ?>" data-fancybox>
                                <img src="<?php the_field('section_3_youtube_image'); ?>" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- esourcing sec end -->
    </div>

    <!-- faq section start -->
    <section class="body_section features_faq">
        <div class="container">
            <h2><span><?php the_field('additional_feature_title');?></span></h2>
            <div class="faq_holder">
                <?php $i = 0; ?>
            <?php
                while (have_rows('additional_feature')): the_row();
                  $i++;
                ?>
                <div class="rowFaq">
                <h3 <?php if($i==1){ ?> class="active"<?php } ?>><?php the_sub_field('additional_feature_title'); ?></h3>
                <div  class="content <?php if($i==1){ ?>active<?php } ?>">
                <?php the_sub_field('additional_feature_description'); ?>    
                </div>
							</div>
                <?php endwhile; ?>  
            </div>
        </div>
    </section>
    <!-- faq section end -->

    <!-- client testimonial sec start -->
    <?php include(TEMPLATEPATH.'/includes/testimonials.php'); ?>
    <!-- client testimonial sec end -->
</div>
<!-- body content end -->
<?php get_footer(); ?>