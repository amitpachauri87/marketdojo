<?php /* Template Name: Landing5 */ ?>
<?php get_header(); 
wp_enqueue_style('style2', get_template_directory_uri() . '/css/style2.css', 'style');
?>

<style>
<?php
  $banner_text_color=get_field('banner_text_color_landing_5');
  if($banner_text_color){
    echo ".webinar_banner_sec .call_text h1{
      color: $banner_text_color;
    }";
  }

  if( have_rows('section_colors_management') ): while ( have_rows('section_colors_management') ) : the_row();
    if( get_row_layout() == 'section_1' ){

      $section_1_heading_color = get_sub_field('section_1_heading_color');
      $section_1_sub_heading_color = get_sub_field('section_1_sub_heading_color');
      $section_1_text_color = get_sub_field('section_1_text_color');
      $section_1_background_color = get_sub_field('section_1_background_color');
      $section_1_border_color = get_sub_field('section_1_border_color');
      if($section_1_heading_color){
        echo ".particular_jan_sec .topContent h2{
          color: $section_1_heading_color;
        }";
      }
      if($section_1_sub_heading_color){
        echo ".particularJanContainer .topContent p{
          color: $section_1_sub_heading_color;
        }";
      }
      if($section_1_text_color){
        echo ".particular_jan_sec .leftEnterpriseList p{
          color: $section_1_text_color;
        }
        .particular_jan_sec .leftEnterpriseList ul li{
          color: $section_1_text_color;
          border-bottom: 2px solid $section_1_text_color;
        }";
      }
      if($section_1_background_color){
        echo ".particular_jan_sec{
          background-color: $section_1_background_color;
        }";
      }
      if($section_1_border_color){
        echo ".particular_jan_sec{
          border-top: 3px solid $section_1_border_color;
          border-bottom: 3px solid $section_1_border_color;
        }";
      }

    }elseif( get_row_layout() == 'section_2' ){

      $section_2_heading_color = get_sub_field('section_2_heading_color');
      $section_2_background_color = get_sub_field('section_2_background_color');
      $section_2_listing_heading_color = get_sub_field('section_2_listing_heading_color');
      $section_2_listing_text_color = get_sub_field('section_2_listing_text_color');
      if($section_2_heading_color){
        echo ".landing_5_resource_sec h2{
          color: $section_2_heading_color;
        }";
      }
      if($section_2_background_color){
        echo ".landing_5_resource_sec:before{
          background-color: $section_2_background_color;
        }";
      }
      if($section_2_listing_heading_color){
        echo ".landing_5_resource_sec .list_box h3 a{
          color: $section_2_listing_heading_color;
        }";
      }
      if($section_2_listing_text_color){
        echo ".landing_5_resource_sec .list_box p{
          color: $section_2_listing_text_color;
        }";
      }

    }elseif( get_row_layout() == 'section_3' ){

      $section_3_heading_color = get_sub_field('section_3_heading_color');
      $section_3_sub_heading_color = get_sub_field('section_3_sub_heading_color');
      $section_3_background_color = get_sub_field('section_3_background_color');
      $section_3_listing_heading_color = get_sub_field('section_3_listing_heading_color');
      $section_3_listing_text_color = get_sub_field('section_3_listing_text_color');
      $section_3_listing_icon_color = get_sub_field('section_3_listing_icon_color');
      $section_3_listing_border_color = get_sub_field('section_3_listing_border_color');
      if($section_3_heading_color){
        echo ".advanced_testi_sec h2{
          color: $section_3_heading_color;
        }";
      }
      if($section_3_sub_heading_color){
        echo ".advanced_testi_sec .topContent p{
          color: $section_3_sub_heading_color;
        }";
      }
      if($section_3_background_color){
        echo ".advanced_testi_sec{
          background-color: $section_3_background_color;
        }";
      }
      if($section_3_listing_heading_color){
        echo ".advanced_testi_sec .trippleContWrap .trippleContBox .trippleBox h4{
          color: $section_3_listing_heading_color;
        }";
      }
      if($section_3_listing_text_color){
        echo ".advanced_testi_sec .trippleContWrap .trippleContBox .trippleBox p{
          color: $section_3_listing_text_color;
        }";
      }
      if($section_3_listing_icon_color){
        echo ".advanced_testi_sec .trippleContWrap .trippleContBox span{
          color: $section_3_listing_icon_color;
        }";
      }
      if($section_3_listing_border_color){
        echo ".advanced_testi_sec .trippleContWrap .trippleContBox{
          border: 1px solid $section_3_listing_border_color;
        }";
      }

    }elseif( get_row_layout() == 'section_4' ){

      $section_4_background_color = get_sub_field('section_4_background_color');
      $section_4_text_color = get_sub_field('section_4_text_color');
      if($section_4_background_color){
        echo ".moreContact{
          background-color: $section_4_background_color;
        }";
      }
      if($section_4_text_color){
        echo ".moreContact span{
          color: $section_4_text_color;
        }";
      }

    }

  endwhile;endif;
?>

</style>

<?php
  $expired_webnair=get_field('expired_webnair');
  if($expired_webnair){
  $banner_background_image=get_field('banner_background_image');
  if($banner_background_image){
    $banner_left_image=get_field('banner_left_image');
    $banner_left_video=get_field('banner_left_video');
    $choose_image_or_video=get_field('choose_image_or_video');
    $banner_right_heading=get_field('banner_right_heading');
    $banner_sub_heading=get_field('banner_sub_heading');
    $banner_button_1_text=get_field('banner_button_1_text');
    $banner_button_1_link=get_field('banner_button_1_link');
    $banner_button_2_text=get_field('banner_button_2_text');
    $banner_button_2_link=get_field('banner_button_2_link');
    $text_color=get_field('banner_text_color');
    $banner_button_1_border_background_color=get_field('banner_button_1_border_background_color');
    $banner_button_1_border_hover_color=get_field('banner_button_1_border_hover_color');
    $banner_button_1_text_color=get_field('banner_button_1_text_color');
    $banner_button_1_text_hover_color=get_field('banner_button_1_text_hover_color');
    $banner_button_2_border_color=get_field('banner_button_2_border_color');
    $banner_button_2_hover_border_background_color=get_field('banner_button_2_hover_border_background_color');
    $banner_button_2_text_color=get_field('banner_button_2_text_color');
    $banner_button_2_text_hover_color=get_field('banner_button_2_text_hover_color');
?>
<style>
  <?php if( $text_color){ ?>
  .banner .banner_container .banner_content h1{
    color:<?php echo $text_color; ?>;
  }
  .banner .banner_container .banner_content p{
    color:<?php echo $text_color; ?>;
  }
  <?php } ?>
  .banner .banner_container .banner_content .btn:hover, .banner .banner_container .banner_content .btn.fill_btn {
    <?php if( $banner_button_1_border_background_color){ ?>
    background-color: <?php echo $banner_button_1_border_background_color; ?>;
    <?php } ?>
    <?php if( $banner_button_1_text_color){ ?>
    color: <?php echo $banner_button_1_text_color; ?>;
    <?php } ?>
  }
  .banner .banner_container .banner_content .btn.fill_btn:hover {
    <?php if( $banner_button_1_text_hover_color){ ?>
    color: <?php echo $banner_button_1_text_hover_color; ?>;
    <?php } ?>
    <?php if( $banner_button_1_border_hover_color){ ?>
    border: 2px solid <?php echo $banner_button_1_border_hover_color; ?>;
    <?php } ?>
  }
  .banner .banner_container .banner_content .btn:hover, .banner .banner_container .banner_content .btn {
    <?php if( $banner_button_2_border_color){ ?>
    border: 2px solid <?php echo $banner_button_2_border_color; ?>;
    <?php } ?>
    <?php if( $banner_button_2_text_color){ ?>
    color: <?php echo $banner_button_2_text_color; ?>;
    <?php } ?>
  }
  .banner .banner_container .banner_content .btn:hover {
    <?php if( $banner_button_2_text_hover_color){ ?>
    color: <?php echo $banner_button_2_text_hover_color; ?>;
    <?php } ?>
    <?php if( $banner_button_2_hover_border_background_color){ ?>
    border: 2px solid <?php echo $banner_button_2_hover_border_background_color; ?>;
    background-color: <?php echo $banner_button_2_hover_border_background_color; ?>;
    <?php } ?>
  }
</style>
<!-- section banner start -->
<section class="banner linkListBanner landing_5_banner">
  <figure class="banner_img" style="background-image:url(<?php echo $banner_background_image['url']; ?>);"></figure>
  <div class="banner_container">
    <span class="laptop_part">
      <figure style="background-image: url(<?= get_site_url() ?>/wp-content/uploads/2017/12/banner_laptop-bosc1.png);" id="video_fig">
      <a data-fancybox="" data-src="#video_play_form_popup" href="javascript:void(0)" class="playVideo">
        <img src="https://www.marketdojo.com/wp-content/uploads/2019/06/playvideo.png" alt="">
      </a>
      <span class='image_bg' style="background-image: url(<?php echo $banner_left_image['url']; ?>);"></span>
      </figure>
    </span>
    <div class="banner_content">
      <h1><?php echo $banner_right_heading; ?></h1>
      <?php echo $banner_sub_heading; ?>
      <div class="banner_btn_box">
        <?php
          if($banner_button_1_text){
        ?>
        <a href="<?php echo $banner_button_1_link; ?>" class="btn fill_btn"><?php echo $banner_button_1_text; ?></a>
        <?php
          }
        ?>
        <?php
          if($banner_button_2_text){
        ?>
        <a href="<?php echo $banner_button_2_link; ?>" class="btn <?php if(is_front_page()){ ?>scrolltoform_banner<?php } ?>"><?php echo $banner_button_2_text; ?></a>
        <?php
          }
        ?>
      </div>
    </div>
  </div>
</section>
<!-- section banner end -->
<?php
    }
  }else{
?>

<section class="banner_sec demo_banner_sec webinar_banner_sec">
    <div class="banner_main">
        <?php
            $banner_image=get_field('banner_image');
            $banner_heading=get_field('banner_heading');
            $banner_form=get_field('banner_form');
        ?>
        <figure style="background-image: url(<?php echo $banner_image['url']; ?>);"><img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>"></figure>
        <figcaption>
            <div class="call_text widthBg">
                <h1><?php echo $banner_heading; ?></h1>
            </div>
            <div class="demo_frm">
                <?php echo $banner_form; ?>
            </div>
        </figcaption>
    </div>
</section>

<?php
  }
?>

<?php
    $post_id=get_the_ID();
    $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => -1,
        'meta_query' =>array(
            array(
                'key'     => 'show_on_page',
                'value'   => $post_id,
                'compare' => 'NOT LIKE'
            )
        ),
    );
    $query = new WP_Query( $args );
    if ($query->have_posts()) :
?>
<section class="body_sec testi_sec">
    <div class="container">
        <div class="small_testi_holder">
            <ul class="small_testiSlider">
                <?php
                while ($query->have_posts()) : $query->the_post();
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
                ?>
            </ul>
        </div>
    </div>
</section>
<?php
    endif;
    wp_reset_query();
?>
<section class="body_section particular_jan_sec">
    <div class="particularJanContainer">
        <div class="container">
            <div class="topContent">
                <h2><span><?php the_field('section_1_heading') ?></span></h2>
                <?php the_field('section_1_sub_heading') ?>
            </div>
            <div class="enterpriseContent">
                <div class="leftEnterpriseList">
                    <?php the_field('section_1_left_content') ?>
                </div>
                <div class="rightEnterpriseImg">
                    <?php
                        $section_1_right_image=get_field('section_1_right_image');
                        if($section_1_right_image){
                    ?>
                    <figure>
                      <img src="<?php echo $section_1_right_image['url'] ?>" alt="<?php echo $section_1_right_image['alt'] ?>">
                    </figure>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="body_section listing_sec landing_5_resource_sec ">
    <div class="container">
      <h2><span><?php the_field('section_2_heading') ?></span></h2>
      <div class="row">
      <?php
        if( have_rows('section_2_listing') ): while ( have_rows('section_2_listing') ) : the_row();
                $post_object = get_sub_field('choose_resources');
                if( $post_object ):
                    $post = $post_object;
                    setup_postdata( $post );
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'resource_home_thumb', false, '' );
        $img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
        $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
      ?>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="list_box">
            <div class="thumbnail">
              <a href="<?php the_permalink(); ?>">
                <?php
                if($src){
                ?>
                <figure><img src="<?php echo $src[0]; ?>" alt="<?php echo $alt_text; ?>">
                </figure>
                <?php
                }
                ?>

              </a>
            </div>
            <h3><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></a></h3>
            <p><?php echo substr(strip_tags(get_the_content()), 0, 180); ?>...<a href="<?php the_permalink(); ?>">more</a>
            </p>
          </div>
        </div>
      <?php
                wp_reset_postdata();
                endif;
        endwhile;endif;
      ?>
      </div>
    </div>
  </section>


<section class="body_section advanced_testi_sec">
    <div class="advancedTestiContainer">
        <div class="container">
          <div class="topContent">
              <h2><span><?php the_field('section_3_heading') ?></span></h2>
              <?php the_field('section_3_sub_heading') ?>
          </div>
          <?php if( have_rows('section_3_listing') ):  ?>
          <div class="trippleContWrap">
              <?php while ( have_rows('section_3_listing') ) : the_row(); ?>
              <div class="trippleContBox">
                  <?php
                    $image=get_sub_field('image');
                    if($image){
                  ?>
                  <figure>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                  </figure>
                  <?php
                    }else{
                  ?>
                  <span>
                      <?php the_sub_field('icon') ?>
                  </span>
                  <?php
                    }
                  ?>
                  <div class="trippleBox">
                      <h4><?php the_sub_field('heading') ?></h4>
                      <p><?php the_sub_field('content') ?></p>
                  </div>
              </div>
            <?php endwhile; ?>
          </div>
          <?php endif; ?>
        </div>
    </div>
</section>
<div class="moreContact">
    <div class="container">
        <span><?php the_field('section_4_text'); ?></span>
        <div class="addThis"><span>Share this webinar with your connections</span><!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div></div>
    </div>
</div>

<?php get_footer(); ?>
