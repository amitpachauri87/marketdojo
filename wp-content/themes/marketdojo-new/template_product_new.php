<?php /*Template Name: Product New*/ ?>
<?php get_header(); ?>
    
    
    <!-- body content start -->
    <div class="body_content">
        
        <div class="body_section product_tree_main_box quick_quotes">
            
            <div class="parallax_items left_items">
                <?php 
                    $i = 0;
                    while (have_rows('section_1_left_items')): the_row();
                    $left_image = get_sub_field('section_1_left_items_image');
                    $i++;
                ?>
                    <span class="item item_<?php echo $i; ?>">
                        <img src="<?php echo $left_image['url']; ?>" alt="<?php echo $left_image['alt']; ?>">
                    </span>
                <?php endwhile; ?>  
            </div>
            <div class="parallax_items right_items">
                <?php 
                    $i = 0;
                    while (have_rows('section_1_right_items')): the_row();
                    $right_image = get_sub_field('section_1_right_items_image');
                    $i++;
                ?>
                    <span class="item item_<?php echo $i; ?>">
                        <img src="<?php echo $right_image['url']; ?>" alt="<?php echo $right_image['alt']; ?>">
                    </span>
                <?php endwhile; ?>  
            </div>
            
            <div class="title_content halfMoon">
                <div class="content">
                    <h2><span id="heading_source"><?php the_field('section_1_middle_circle_heading'); ?></span></h2>
                    <p id="content_source"><?php echo strip_tags(get_field('section_1_middle_circle_desc')); ?></p>
                </div>
            </div>
            
            <div class="container">
                <div class="newCircleWrap quickQuotes">
                    <div class="circleTabMenu">
                        <ul>
                            <?php
                                global $q_config;
                                $language = $q_config['language'];
                                $taxonomy='product-cat';
                                $term_id=63;
                                $term = get_term( $term_id, $taxonomy );
                                $term_image=get_field('upload_icon',$taxonomy.'_'.$term_id);
                                $term_color=get_field('color_pick',$taxonomy.'_'.$term_id);
                                $term_bg_color=get_field('background_color',$taxonomy.'_'.$term_id);
								$term_name=qtranxf_use_language($language, $term->name, false, true);
                                $term_description=qtranxf_use_language($language, $term->description, false, true);
                            ?>
                            <li class="circleBtn <?php echo $term->slug.'_product_cat'; ?>" data-heading="<?php echo $term_name; ?>" data-content="<?php echo $term_description; ?>">
                                <?php
                                    if($term_color){
                                ?>
                                <style>
                                    .<?php echo $term->slug.'_product_cat'; ?>:hover .newCircle {
                                        box-shadow: 0px 0px 35px <?php echo $term_color; ?> !important;
                                        cursor: pointer;
                                    }
                                    .<?php echo $term->slug.'_product_cat'; ?> .newCircle {
                                        border-color: <?php echo $term_color; ?> !important;
                                        background: <?php echo $term_color; ?> !important;
                                    }
                                    .product_tree_main_box.quick_quotes {
                                        background-color: <?php echo $term_bg_color; ?>;
                                    }
                                </style>
                                <?php
                                    }
                                ?>
                            <?php
                                if($term_image){
                            ?>
                                <a href="javascript:void(0);" class="newCircle">
                                    <img src="<?php echo $term_image['url']; ?>" alt="icon">
                                </a>
                            <?php
                                }
                            ?>
                                <span class="newTitle"><?php echo $term->name; ?></span>
                            </li>
                            <?php
                                $taxonomy='product-cat';
                                $term_id=64;
                                $term = get_term( $term_id, $taxonomy );
                                $term_image=get_field('upload_icon',$taxonomy.'_'.$term_id);
                                $term_color=get_field('color_pick',$taxonomy.'_'.$term_id);
                                $term_bg_color=get_field('background_color',$taxonomy.'_'.$term_id);
								$term_name=qtranxf_use_language($language, $term->name, false, true);
                                $term_description=qtranxf_use_language($language, $term->description, false, true);
                            ?>
                            <li class="circleBtn <?php echo $term->slug.'_product_cat'; ?>" data-heading="<?php echo $term_name; ?>" data-content="<?php echo $term_description; ?>">
                                <?php
                                    if($term_color){
                                ?>
                                <style>
                                    .<?php echo $term->slug.'_product_cat'; ?>:hover .newCircle {
                                        box-shadow: 0px 0px 35px <?php echo $term_color; ?> !important;
                                        cursor: pointer;
                                    }
                                    .<?php echo $term->slug.'_product_cat'; ?> .newCircle {
                                        border-color: <?php echo $term_color; ?> !important;
                                        background: <?php echo $term_color; ?> !important;
                                    }
                                    .product_tree_main_box.on_demand {
                                        background-color: <?php echo $term_bg_color; ?>;
                                    }
                                </style>
                                <?php
                                    }
                                ?>
                            <?php
                                if($term_image){
                            ?>
                                <a href="javascript:void(0);" class="newCircle">
                                    <img src="<?php echo $term_image['url']; ?>" alt="icon">
                                </a>
                            <?php
                                }
                            ?>
                                <span class="newTitle"><?php echo $term->name; ?></span>
                            </li>
                            <?php
                                $taxonomy='product-cat';
                                $term_id=65;
                                $term = get_term( $term_id, $taxonomy );
                                $term_image=get_field('upload_icon',$taxonomy.'_'.$term_id);
                                $term_color=get_field('color_pick',$taxonomy.'_'.$term_id);
                                $term_bg_color=get_field('background_color',$taxonomy.'_'.$term_id);
								$term_name=qtranxf_use_language($language, $term->name, false, true);
                                $term_description=qtranxf_use_language($language, $term->description, false, true);
                            ?>
                            <li class="circleBtn <?php echo $term->slug.'_product_cat'; ?>" data-heading="<?php echo $term_name; ?>" data-content="<?php echo $term_description; ?>">
                                <?php
                                    if($term_color){
                                ?>
                                <style>
                                    .<?php echo $term->slug.'_product_cat'; ?>:hover .newCircle {
                                        box-shadow: 0px 0px 35px <?php echo $term_color; ?> !important;
                                        cursor: pointer;
                                    }
                                    .<?php echo $term->slug.'_product_cat'; ?> .newCircle {
                                        border-color: <?php echo $term_color; ?> !important;
                                        background: <?php echo $term_color; ?> !important;
                                    }
                                    .product_tree_main_box.product_sourcing {
                                        background-color: <?php echo $term_bg_color; ?>;
                                    }
                                </style>
                                <?php
                                    }
                                ?>
                            <?php
                                if($term_image){
                            ?>
                                <a href="javascript:void(0);" class="newCircle">
                                    <img src="<?php echo $term_image['url']; ?>" alt="icon">
                                </a>
                            <?php
                                }
                            ?>
                                <span class="newTitle"><?php echo $term->name; ?></span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="circleTabWrap">
                        <div class="circlePanCont">
                            <?php
                                $i=0;$j=0;
                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 3,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'product-cat',
                                            'field'    => 'term_id',
                                            'terms'    => 63,
                                        ),
                                    ),
                                );
                                $query = new WP_Query( $args );
                                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();$i++;$j++;
                                global $post;
                                $image = get_field('sourcing_list_image');
                                $color = get_field('color');
                            ?>
                            
                            <?php if($i==1){ ?>
                            <div class="circleFirst">
                                <ul>
                            <?php }elseif($i==2){ ?>
                            <div class="circleLast">
                                <ul>
                            <?php } ?>
                                    <li data-prod_id="<?php echo $post->ID; ?>" class="<?php echo $post->post_name; ?>">
                                        <style>
                                            .<?php echo $post->post_name; ?>:hover .newCircle {
                                                box-shadow: 0px 0px 35px <?php echo $color; ?> !important;
                                                cursor: pointer;
                                            }
                                            .<?php echo $post->post_name; ?> .newCircle {
                                                border-color: <?php echo $color; ?> !important;
                                                background: <?php echo $color; ?> !important;
                                            }
                                        </style>
                                        <a href="javascript:void(0);" class="newCircle">
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                        </a>
                                        <span class="newTitle"><span class="flow_num"><?php echo $j; ?></span><?php the_title(); ?></span>
                                    </li>
                            <?php if($i==1){ ?>
                                </ul>
                            </div>
                            <?php } ?>
                            <?php endwhile;endif; ?>
                            <?php wp_reset_query(); ?>
                            <?php if($i>1){ ?>
                                </ul>
                            </div>
                            <?php } ?>
                        </div>




                        <div class="circlePanCont">
                            <?php
                                $i=0;$j=0;
                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 4,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'product-cat',
                                            'field'    => 'term_id',
                                            'terms'    => 64,
                                        ),
                                    ),
                                );
                                $query = new WP_Query( $args );
                                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();$i++;$j++;
                                global $post;
                                $image = get_field('sourcing_list_image');
                                $color = get_field('color');
                            ?>
                            
                            <?php if($i==1){ ?>
                            <div class="circleFirst">
                                <ul>
                            <?php }elseif($i==2){ ?>
                            <div class="circleLast">
                                <ul>
                            <?php } ?>
                                    <li data-prod_id="<?php echo $post->ID; ?>" class="<?php echo $post->post_name; ?>">
                                        <style>
                                            .<?php echo $post->post_name; ?>:hover .newCircle {
                                                box-shadow: 0px 0px 35px <?php echo $color; ?> !important;
                                                cursor: pointer;
                                            }
                                            .<?php echo $post->post_name; ?> .newCircle {
                                                border-color: <?php echo $color; ?> !important;
                                                background: <?php echo $color; ?> !important;
                                            }
                                        </style>
                                        <a href="javascript:void(0);" class="newCircle">
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                        </a>
                                        <span class="newTitle"><span class="flow_num"><?php echo $j; ?></span><?php the_title(); ?></span>
                                    </li>
                            <?php if($i==1){ ?>
                                </ul>
                            </div>
                            <?php } ?>
                            <?php endwhile;endif; ?>
                            <?php wp_reset_query(); ?>
                            <?php if($i>1){ ?>
                                </ul>
                            </div>
                            <?php } ?>

                        </div>




                        <div class="circlePanCont">
                            <?php
                                $i=0;$j=0;
                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 11,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'product-cat',
                                            'field'    => 'term_id',
                                            'terms'    => 65,
                                        ),
                                    ),
                                );
                                $query = new WP_Query( $args );
                                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();$i++;$j++;
                                global $post;
                                $image = get_field('sourcing_list_image');
                                $color = get_field('color');
                            ?>
                            
                            <?php if($i==1){ ?>
                            <div class="circleFirst">
                                <ul>
                            <?php }elseif($i==6){ ?>
                            <div class="circleLast">
                                <ul>
                            <?php } ?>
                                    <li data-prod_id="<?php echo $post->ID; ?>" class="<?php echo $post->post_name; ?>">
                                        <style>
                                            .<?php echo $post->post_name; ?>:hover .newCircle {
                                                box-shadow: 0px 0px 35px <?php echo $color; ?> !important;
                                                cursor: pointer;
                                            }
                                            .<?php echo $post->post_name; ?> .newCircle {
                                                border-color: <?php echo $color; ?> !important;
                                                background: <?php echo $color; ?> !important;
                                            }
                                        </style>
                                        <a href="javascript:void(0);" class="newCircle">
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                        </a>
                                        <span class="newTitle"><span class="flow_num"><?php echo $j; ?></span><?php the_title(); ?></span>
                                    </li>
                            <?php if($i==5){ ?>
                                </ul>
                            </div>
                            <?php } ?>
                            <?php endwhile;endif; ?>
                            <?php wp_reset_query(); ?>
                            <?php if($i>1){ ?>
                                </ul>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
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
            <section class="body_section esourcing_sec" style="background-image:url(<?php the_field('section_2_background_image'); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="left_part">
                                <h2><span><?php the_field('section_2_heading'); ?> </span></h2>
                                <?php
                                $Section_2_image = get_field('section_2_image');
                                ?>
                                <figure><img src="<?php echo $Section_2_image['url']; ?>" alt="<?php echo $Section_2_image['alt']; ?>"></figure>
                                    <?php the_field('section_2_description_'); ?>
                                <div class="btn_sec">
                                    <?php
                                    $link_name = get_field('section_2_get_details_button_name');
                                    $sign_name = get_field('section_2_sign_in_button_name');
                                    if ($link_name) {
                                        ?>
                                        <a href="<?php the_field('section_2_get_details_button_link_'); ?>" class="btn fill_btn"><?php echo $link_name; ?></a>
                                        <?php
                                    }
                                    if ($sign_name) {
                                        ?>
                                        <a href="<?php the_field('section_2_sign_in_button_link'); ?>" class="btn"><?php echo $sign_name; ?></a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        $video_image = get_field('section_2_youtube_video');

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
                                        <img src="<?php the_field('section_2_youtube_image'); ?>" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- esourcing sec end -->
        </div>
        <!-- why market dojo -->
            <section class="body_section why_dojo_sec">
            <div class="section_holder clear">
                <div class="left_part">
                    <?php
                    $Section_3_image = get_field('section_3_image');
                    ?>
                    <figure><img src="<?php echo $Section_3_image['url']; ?>" alt="<?php echo $Section_3_image['url']; ?>"></figure>
                </div>
                <div class="right_part">
                    <h2><span><?php the_field('section_3_heading_'); ?></span></h2>
                    <div class="content">
                        <?php the_field('section_3_description'); ?>    
                    </div>
                </div>
            </div>
        </section>
        <!-- why market dojo -->
        
        <!-- marketdojo help section -->
        <section class="body_section help_dojo_sec" style="background-image:url(<?php the_field('section_4_image1'); ?>)" >
        <h2><span><?php the_field('section_4_heading'); ?></span></h2>
        <div class="section_part clear">
            <div class="left_part">
                <?php the_field('section_4_desciption'); ?>
            </div>
            <div class="right_part">
                <figure>
                    <?php
                    $Section_4_image = get_field('section_4_image2');
                    ?>
                    <a href="<?php echo $Section_4_image['url']; ?>" data-fancybox="images"><img src="<?php echo $Section_4_image['url']; ?>" alt="<?php echo $Section_4_image['url']; ?>"></a>
                </figure>
            </div>
        </div>
    </section>
    <!-- marketdojo help section -->
                
<?php
    $call_to_action_content = get_field( 'call_to_action_content' );
    $call_to_action_button_text = get_field( 'call_to_action_button_text' );
    $call_to_action_button_link = get_field( 'call_to_action_button_link' );
    if ( $call_to_action_content ) {
?>

    <!-- section feature link start -->
    <section class="feature_link_sec">
        <div class="container">
            <div class="row">
                <?php
                if ( $call_to_action_button_text ) {
                ?>
                <div class="col-md-9 col-sm-8 col-xs-12">
                <?php
                } else {
                    ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php
                    }
                    ?>
                    <h3><?php echo strip_tags($call_to_action_content); ?></h3>
                </div>
                <?php
                if ( $call_to_action_button_text ) {
                    ?>
                <div class="col-md-3 col-sm-4 col-xs-12">
                        <a href="<?php echo $call_to_action_button_link; ?>" class="btn">
                            <?php echo $call_to_action_button_text; ?>
                        </a>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- section feature link end -->
<?php } ?>
<!-- client testimonial sec start -->
    <?php //include(TEMPLATEPATH . '/includes/testimonials.php'); ?>
<!-- client testimonial sec end -->
</div>
<!-- body content end -->
<?php get_footer(); ?>
<!--script-->

<script>
$(document).ready(function(){
	$("[data-fancybox]").fancybox({
		// Options will go here
	});
});
</script>
