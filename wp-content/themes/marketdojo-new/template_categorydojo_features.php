<?php /*Template Name: Categorydojo Features*/ ?>
<?php get_header(); ?>    
    <!-- body content start -->
    <div class="body_content inner_page resources">
        
        
    
        
       
        
        <section class="body_section features_sec">
            <div class="container">
                <h2><span><?php the_field('section_1_heading'); ?></span></h2>
                <p><?php the_field('section_1_sub_head'); ?></p>
                <div class="resource_box_holder">
                    <div class="row" id="listing_post">
                    <?php 
                    $pstpage=8;
                    $loop = new WP_Query( array( 'post_type' => 'categorydojo', 'posts_per_page' => $pstpage ) ); 
                    while ( $loop->have_posts() ) : $loop->the_post();
                    ?>                       
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="resource_box <?php the_field('background_color'); ?>">
                                <a class="hover_content read_more_features" href="javascript:void(0)" data-feature_id="<?php echo $post->ID; ?>">
                                    <span>
                                       <p>
                                           <?php echo $content = get_field('icon_content'); ?>
                                       </p>
                                        <em>read more</em>
                                    </span>
                                </a>
                                <?php $url = get_field('sourcing_list_image'); ?>
                                <span class="ico"><img src="<?php echo $url['url'] ?>" alt="<?php echo $url['alt'] ?>"></span>
                                <span class="label"><?php the_title();?></span>
                            </div>
                        </div>
                    <?php endwhile; ?>  
                    <?php wp_reset_query(); ?> 
                    </div>
                </div>
                <?php 
                $alllisting = new WP_Query( array( 'post_type' => 'categorydojo', 'posts_per_page' => -1 ) );
                $countalllisting=count($alllisting->posts);
                ?>
                <input type="hidden" name="total_post" id="total_post" value="<?php echo $countalllisting; ?>">
                <input type="hidden" name="feature_type" id="feature_type" value="<?php the_field('feature_type');?>">
                <?php
                if($countalllisting>$pstpage){
                ?> 
                    <div class="load_more_sec" id="more_posts">
                        <a href="javascript:void(0);" class="btn">See more features and add-ons<i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
                    </div>

                <?php } ?>  
                <div class="load_more_sec" id="less_posts" style="display:none;">
                    <a href="javascript:void(0);" class="btn">See Less features and add-ons<i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
                </div>              
                <!--<div class="load_more_sec">
                    <a href="javascript:void();" class="btn">See more features and add-ons</a>
                </div>-->
            </div>
        </section>
        
        <!-- inner menu secondary -->
        <section class="secondary_menu">
            <div class="container">
                 <div class="row d-flex align-items-center">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <figure class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $flatsome_opt['site_logo_category']; ?>" alt="logo"></a></figure>
                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="menu">
                           <a href="javascript:void(0);" class="menuClose2"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                            <?php wp_nav_menu( array( 'container' => '', 'theme_location' => 'categorydojo_menu', 'menu_class' => '') ); ?>
                        </div>
                        <a href="javascript:void(0);" class="menuOpen2"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                                <div class="menuOverLay2">&nbsp;</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner menu secondary -->
        <div id="feature_sec_new">
        <!-- esourcing sec start -->
        <?php $section_2_background_image = get_field('section_2_background_image'); ?>
        <section class="body_section esourcing_sec" style="background-image:url(<?= $section_2_background_image['url'] ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="left_part">
                            <h2><span><?php the_field('section_2_heading'); ?></span></h2>
                            <?php $section_2_left_image = get_field('section_2_left_image'); 
                                if($section_2_left_image){?>
                                    <figure><img src="<?= $section_2_left_image['url'] ?>" alt=""></figure>
                            <?php } ?>
                            <?php the_field('section_2_content'); ?>
                            <div class="btn_sec">
                            <?php $section_2_button_1_link=get_field('section_2_button_1_link');
                            $section_2_button_1_text=get_field('section_2_button_1_text');  
                            if($section_2_button_1_link!=""){ ?>
                                <a href="<?php echo $section_2_button_1_link; ?>" class="btn fill_btn"><?php echo $section_2_button_1_text; ?></a>
                           <?php  } 

                             $section_2_button_2_link=get_field('section_2_button_2_link');
                            $section_2_button_2_text=get_field('section_2_button_2_text');  
                            
                            if($section_2_button_2_link!=""){ 
                            ?>
                                <a href="<?php echo $section_2_button_2_link; ?>" class="btn"><?php echo $section_2_button_2_text; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="right_part">
                        <?php
                        $video_image = get_field('section_2_video_link');
                        preg_match('/src="(.+?)"/', $video_image, $matches_url);
                        $src = $matches_url[1];
                        preg_match('/embed(.*?)?feature/', $src, $matches_id);
                        $id = $matches_id[1];
                        $vid = str_replace(str_split('?/'), '', $id);
                        ?>
                            <?php $section_2_video_image = get_field('section_2_video_image'); 
                                if($section_2_video_image){?>
                                    <figure><a href="https://www.youtube.com/embed/<?= $vid; ?>" data-fancybox><img src="<?= $section_2_video_image['url'] ?>" alt=""></a></figure>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- esourcing sec end -->
        </div>
        
        <!-- product section start -->
        <section class="body_section product_section featureProductSection">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                    <div class="product_image_holder left_image_holder">
                        <div class="each_img desktop" id="id1">
                        <?php $section_3_image_1 = get_field('section_3_image_1'); 
                            if($section_3_image_1){?>
                            <figure><img src="<?= $section_3_image_1['url'] ?>" alt=""></figure>
                            <?php } ?>
                        </div>
                        <div class="each_img ipad" id="id2">
                            <?php $section_3_image_2 = get_field('section_3_image_2'); 
                            if($section_3_image_2){?>
                            <figure><img src="<?= $section_3_image_2['url'] ?>" alt=""></figure>
                            <?php } ?>
                        </div>
                        <div class="each_img mobile" id="id3">
                            <?php $section_3_image_3 = get_field('section_3_image_3'); 
                            if($section_3_image_3){?>
                            <figure><img src="<?= $section_3_image_3['url'] ?>" alt=""></figure>
                            <?php } ?>
                        </div>
                        <div class="each_img laptop" id="id4">
                            <?php $section_3_image_4 = get_field('section_3_image_4'); 
                            if($section_3_image_4){?>
                            <figure><img src="<?= $section_3_image_4['url'] ?>" alt=""></figure>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="product_left_content">
                        <h2><span><?php the_field('section_3_heading'); ?></span></h2>
                        <div class="product_holder holderHeight">
                            <div class="each_product red" data-target="id1">
                                <h3><span><?php the_field('section_3_subhead_1'); ?></span></h3>
                                <?php the_field('section_3_content_1'); ?>
                            </div>
                            <div class="each_product blue" data-target="id2">
                                <h3><span><?php the_field('section_3_subhead_2'); ?></span></h3>
                                <?php the_field('section_3_content_2'); ?>
                            </div>
                            <div class="each_product green" data-target="id3">
                                <h3><span><?php the_field('section_3_subhead_3'); ?></span></h3>
                                <?php the_field('section_3_content_3'); ?>
                            </div>
                            <div class="each_product purple" data-target="id4">
                                <h3><span><?php the_field('section_3_subhead_4'); ?></span></h3>
                                <?php the_field('section_3_content_4'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- product section end -->
        <!-- <section class="pricing_link_section" style="background-image:url(images/pricing_link_bg.jpg)">
            <div class="container">
                <div class="col-md-12">
                    <div class="section_content clear">
                        <span class="info">Discover how market dojo can help you for as little as £500 per month</span>
                        <a href="#" class="btn">Take me to the pricing page</a>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- client testimonial sec start -->
        <?php include(TEMPLATEPATH.'/includes/testimonials.php'); ?> 
        <!-- client testimonial sec end -->
    </div>
    <!-- body content end -->
<?php get_footer(); ?>