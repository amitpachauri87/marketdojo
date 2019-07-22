<?php /* Template Name: Landing6 */ ?>
<?php get_header(); ?>
<?php if( have_rows('banner_slider') ): $j=0; ?>
<!-- banner start -->
<section id="home" class="banner bannerSliderNew landing_6_banner">
  <?php while ( have_rows('banner_slider') ) : the_row();$j++; ?>
  <div class="bannerslide">
    <?php
      if( get_row_layout() == '3_box_slide' ){
        $slide_heading=get_sub_field('slide_heading');
        $slide_background_image=get_sub_field('slide_background_image');
        $slide_right_side_image=get_sub_field('slide_right_side_image');
        $slide_right_side_button_text=get_sub_field('slide_right_side_button_text');
		$slide_right_side_button_type_popup=get_sub_field('slide_right_side_button_type_popup');
        $slide_right_side_button_popup_form=get_sub_field('slide_right_side_button_popup_form');
        $slide_right_side_button_link=get_sub_field('slide_right_side_button_link');

        $slide_right_side_button_text_color=get_sub_field('slide_right_side_button_text_color');
        $slide_right_side_button_background_color=get_sub_field('slide_right_side_button_background_color');
        $slide_right_side_button_border_color=get_sub_field('slide_right_side_button_border_color');

        $slide_right_button_text_hover_color=get_sub_field('slide_right_button_text_hover_color');
        $slide_right_side_button_hover_background_color=get_sub_field('slide_right_side_button_hover_background_color');
        $slide_right_side_button_hover_border_color=get_sub_field('slide_right_side_button_hover_border_color');
    ?>
    <style>
      .demoboxright .slide_<?php echo $j; ?>.btn{
        <?php if($slide_right_side_button_text_color){ ?>
        color: <?php echo $slide_right_side_button_text_color; ?>;
        <?php } ?>
        <?php if($slide_right_side_button_border_color){ ?>
        border: 2px solid <?php echo $slide_right_side_button_border_color; ?>;
        <?php } ?>
        <?php if($slide_right_side_button_background_color){ ?>
        background-color: <?php echo $slide_right_side_button_background_color; ?>;
        <?php } ?>
      }
      .demoboxright .slide_<?php echo $j; ?>.btn:hover{
        <?php if($slide_right_button_text_hover_color){ ?>
        color: <?php echo $slide_right_button_text_hover_color; ?>;
        <?php } ?>
        <?php if($slide_right_side_button_hover_border_color){ ?>
        border: 2px solid <?php echo $slide_right_side_button_hover_border_color; ?>;
        <?php } ?>
        <?php if($slide_right_side_button_hover_background_color){ ?>
        background-color: <?php echo $slide_right_side_button_hover_background_color; ?>;
        <?php } ?>
      }
    </style>
    <figure class="banner_img" style="background-image:url(<?php echo $slide_background_image['url']; ?>);"></figure>
    <div class="banner_container onDemand">
      <?php echo $slide_heading; ?>
      <div class="demandWrap">
        <?php
          if( have_rows('slide_left_box_listing') ): while ( have_rows('slide_left_box_listing') ) : the_row();
          $slide_small_box_heading=get_sub_field('slide_small_box_heading');
          $slide_small_box_image=get_sub_field('slide_small_box_image');
        ?>
        <div class="box">
          <?php if($slide_small_box_image){ ?>
          <figure>
            <img src="<?php echo $slide_small_box_image['url']; ?>" alt="<?php echo $slide_small_box_image['alt']; ?>">
          </figure>
          <?php } ?>
          <span><?php echo $slide_small_box_heading; ?></span>
        </div>
        <?php
          endwhile;endif;
        ?>
        <div class="demoboxright">
          <?php if($slide_right_side_image){ ?>
          <figure>
            <img src="<?php echo $slide_right_side_image['url']; ?>" alt="<?php echo $slide_right_side_image['alt']; ?>">
          </figure>
          <?php } ?>
          <?php
            if($slide_right_side_button_text){
              if($slide_right_side_button_type_popup){
          ?>
            <a data-fancybox href="#post-<?php echo $slide_right_side_button_popup_form; ?>" class="btn slide_<?php echo $j; ?>"><?php echo $slide_right_side_button_text; ?></a>
          <?php
              }else{
          ?>
            <a href="<?php echo $slide_right_side_button_link; ?>" class="btn slide_<?php echo $j; ?>"><?php echo $slide_right_side_button_text; ?></a>
          <?php
              }
            }
          ?>
        </div>
      </div>
    </div>
    <?php
      }elseif( get_row_layout() == '8_box_slide' ){
        $slide_heading=get_sub_field('8box_slide_heading');
        $slide_background_image=get_sub_field('8box_slide_background_image');
        $slide_right_side_image=get_sub_field('8box_slide_right_side_image');
        $slide_right_side_button_text=get_sub_field('8box_slide_right_side_button_text');
		$slide_right_side_button_type_popup=get_sub_field('8box_slide_right_side_button_type_popup');
        $slide_right_side_button_popup_form=get_sub_field('8box_slide_right_side_button_popup_form');
        $slide_right_side_button_link=get_sub_field('8box_slide_right_side_button_link');

        $slide_right_side_button_text_color=get_sub_field('8box_slide_right_side_button_text_color');
        $slide_right_side_button_background_color=get_sub_field('8box_slide_right_side_button_background_color');
        $slide_right_side_button_border_color=get_sub_field('8box_slide_right_side_button_border_color');

        $slide_right_button_text_hover_color=get_sub_field('8box_slide_right_button_text_hover_color');
        $slide_right_side_button_hover_background_color=get_sub_field('8box_slide_right_side_button_hover_background_color');
        $slide_right_side_button_hover_border_color=get_sub_field('8box_slide_right_side_button_hover_border_color');
    ?>
    <style>
      .demoboxright .slide_<?php echo $j; ?>.btn{
        <?php if($slide_right_side_button_text_color){ ?>
        color: <?php echo $slide_right_side_button_text_color; ?>;
        <?php } ?>
        <?php if($slide_right_side_button_border_color){ ?>
        border: 2px solid <?php echo $slide_right_side_button_border_color; ?>;
        <?php } ?>
        <?php if($slide_right_side_button_background_color){ ?>
        background-color: <?php echo $slide_right_side_button_background_color; ?>;
        <?php } ?>
      }
      .demoboxright .slide_<?php echo $j; ?>.btn:hover{
        <?php if($slide_right_button_text_hover_color){ ?>
        color: <?php echo $slide_right_button_text_hover_color; ?>;
        <?php } ?>
        <?php if($slide_right_side_button_hover_border_color){ ?>
        border: 2px solid <?php echo $slide_right_side_button_hover_border_color; ?>;
        <?php } ?>
        <?php if($slide_right_side_button_hover_background_color){ ?>
        background-color: <?php echo $slide_right_side_button_hover_background_color; ?>;
        <?php } ?>
      }
    </style>
    <figure class="banner_img" style="background-image:url(<?php echo $slide_background_image['url']; ?>);"></figure>
    <div class="banner_container evolved">
      <?php echo $slide_heading; ?>
      <div class="evolvedWrap">
        <div class="evolvedLeft">
          <?php
            $k=0;
            if( have_rows('8box_slide_left_box_listing') ): while ( have_rows('8box_slide_left_box_listing') ) : the_row();$k++;
            $slide_small_box_heading=get_sub_field('8box_small_heading');
            $slide_small_box_image=get_sub_field('8box_small_image');
            $box_small_background_color=get_sub_field('8box_small_background_color');
          ?>
          <div class="<?php if($k==1){ ?>start <?php }elseif($k==8){ ?> finish <?php }else{ ?> list <?php } ?>">
            <?php
              if($k==2){
            ?>
              <div class="leftBorderFirst"></div>
            <?php
              }
              if($k==7){
            ?>
              <div class="lastArrow"></div>
            <?php
              }
              if($k!=1 && $k!=8){
            ?>
              <div class="myCircle"></div>
            <?php
              }
            ?>
            <?php if($slide_small_box_image){ ?>
            <figure <?php if($box_small_background_color){ ?>style="background-color:<?php echo $box_small_background_color; ?>"<?php } ?>>
              <img src="<?php echo $slide_small_box_image['url']; ?>" alt="<?php echo $slide_small_box_image['alt']; ?>">
            </figure>
            <?php } ?>
            <span><?php echo $slide_small_box_heading; ?></span>
          </div>
          <?php if($k==1){ ?>
          <div class="openstatus"><!--this is for alignment--></div>
          <?php } ?>
          <?php
            endwhile;endif;
          ?>
        </div>
        <div class="demoboxright">
          <?php if($slide_right_side_image){ ?>
          <figure>
            <img src="<?php echo $slide_right_side_image['url']; ?>" alt="<?php echo $slide_right_side_image['alt']; ?>">
          </figure>
          <?php } ?>
          <?php
            if($slide_right_side_button_text){
              if($slide_right_side_button_type_popup){
          ?>
            <a data-fancybox href="#post-<?php echo $slide_right_side_button_popup_form; ?>" class="btn slide_<?php echo $j; ?>"><?php echo $slide_right_side_button_text; ?></a>
          <?php
              }else{
          ?>
            <a href="<?php echo $slide_right_side_button_link; ?>" class="btn slide_<?php echo $j; ?>"><?php echo $slide_right_side_button_text; ?></a>
          <?php
              }
            }
          ?>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  <?php endwhile; ?>
</section>
<!-- banner end -->
<?php endif; ?>

<?php if( have_rows('section_1_listing') ):  ?>
<section class="revenue_info">
  <div class="container">
    <div class="row">
    <?php
      while ( have_rows('section_1_listing') ) : the_row();
      $icon=get_sub_field('icon');
      $value=get_sub_field('value');
      $text=get_sub_field('text');
    ?>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="info_box">
          <?php if($value){ ?>
          <span class="info">
            <?php if($icon){ ?>
            <i class="fa <?php echo $icon; ?>"></i>
            <?php } ?>
            <samp class="homecounter"><?php echo $value; ?></samp>
          </span>
          <?php } ?>
          <?php if($text){ ?>
          <span class="label"><?php echo $text; ?></span>
          <?php } ?>
        </div>
      </div>
    <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
  $section_1_heading=get_field('section_1_heading');
  if($section_1_heading){
    $section_1_background_color=get_field('section_1_background_color');
?>
<!-- our story start -->
<section id="our_story" class="storyNew body_section landing_6_story" <?php if($section_1_background_color){ ?> style="background-color:<?php echo $section_1_background_color; ?>"<?php } ?>>
  <div class="container">
    <h2><span><?php echo $section_1_heading; ?></span></h2>
    <div class="storyWrap">
      <?php
        if( have_rows('section_1_listing_story') ): while ( have_rows('section_1_listing_story') ) : the_row();
        $content=get_sub_field('story_content');
        $image=get_sub_field('story_image');
      ?>
      <div class="row align-items-center">
        <div class="col-lg-10 col-md-9">
          <?php echo $content; ?>
        </div>
        <?php if($image){ ?>
        <div class="col-lg-2 col-md-3">
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
        <?php } ?>
      </div>
      <?php
        endwhile;endif;
      ?>
    </div>
  </div>
</section>
<!-- our story end -->
<?php
  }
?>
<?php
  $call_to_action_content = get_field( 'call_to_action_content' );
  $call_to_action_button_text = get_field( 'call_to_action_button_text' );
  $call_to_action_button_type_popup = get_field( 'call_to_action_button_type_popup' );
  $call_to_action_popup_form = get_field( 'call_to_action_popup_form' );
  $call_to_action_button_link = get_field( 'call_to_action_button_link' );
  if ( $call_to_action_content ) {
      if(!is_page(array(293,639,641,643))){  //for template product
?>
<!-- get started section start -->
<section class="get_started_section">
    <div class="container">
        <div class="row d-flex align-items-center">
            <?php
            if ( $call_to_action_button_text ) {
                ?>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <?php
                } else {
                    ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php
                    }
                    ?>
                    <?php echo $call_to_action_content; ?>
                </div>
                <?php
                if ( $call_to_action_button_text ) {
                    ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="btn_sec">
                        <?php if($call_to_action_button_type_popup){ ?>
                          <a data-fancybox href="#post-<?php echo $call_to_action_popup_form; ?>" class="btn">
                              <?php echo $call_to_action_button_text; ?>
                          </a>
                        <?php }else{ ?>
                          <a href="<?php echo $call_to_action_button_link; ?>" class="btn">
                              <?php echo $call_to_action_button_text; ?>
                          </a>
                        <?php } ?>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
</div>
</section>
<!-- get started section end -->
<?php
      }
  }
?>
<?php
  $section_2_heading=get_field('section_2_heading');
  if($section_2_heading){
    $section_2_background_color=get_field('section_2_background_color');
?>
<!-- products start -->
<section id="our_product" class="body_section newProductSec"  <?php if($section_2_background_color){ ?> style="background-color:<?php echo $section_2_background_color; ?>"<?php } ?>>
  <div class="container">
    <h2><span><?php echo $section_2_heading; ?></span></h2>
    <div class="inner">
      <div class="productLeft">
        <?php
          $post_id=get_the_ID();
          $args = array(
            'post_type'  => 'landing_products',
            'posts_per_page'  => 8,
            'meta_query' => array(
              array(
                'key'     => 'show_on_the_page',
                'value'   => $post_id,
                'compare' => 'LIKE',
              ),
            ),
          );
          $query = new WP_Query( $args );
		  $no_of_post_count=$query->post_count;
	      $i=0;
          if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();$i++;
          $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
          $img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
          $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
        ?>
        <div class="list d-flex align-items-center <?php if($no_of_post_count==$i){ echo 'no_'.$i.'_list'; } ?>" data-id="<?php the_ID(); ?>">
          <div class="cont">
            <?php if($src){ ?>
            <figure>
              <img src="<?php echo $src[0]; ?>" alt="<?php echo $alt_text; ?>">
            </figure>
            <?php } ?>
            <span><?php the_title(); ?></span>
          </div>
        </div>
        <?php
          endwhile;endif;
          wp_reset_query();
        ?>
      </div>
      <?php
        $section_2_right_box_heading=get_field('section_2_right_box_heading');
        if($section_2_right_box_heading){
          $section_2_right_box_content=get_field('section_2_right_box_content');
          $section_2_right_box_image=get_field('section_2_right_box_image');
      ?>
      <div class="productsRight">
        <div class="productsMainText frontText">
          <h3><?php echo $section_2_right_box_heading; ?></h3>
          <?php echo $section_2_right_box_content; ?>
          <?php if($section_2_right_box_image){ ?>
          <figure>
            <img src="<?php echo $section_2_right_box_image['url']; ?>" alt="<?php echo $section_2_right_box_image['alt']; ?>">
          </figure>
          <?php } ?>
        </div>
      </div>
      <?php
        }
      ?>
      <!--  -->
    </div>
  </div>
</section>
<!-- products end -->
<?php
  }
?>
<?php include(TEMPLATEPATH.'/includes/clients.php'); ?>

<?php
  $section_3_heading=get_field('section_3_heading');
  if($section_3_heading){
    $section_3_background_color=get_field('section_3_background_color');
?>
<!-- why us open -->
<section id="whyus" class="chooseUs body_section" <?php if($section_3_background_color){ ?> style="background-color:<?php echo $section_3_background_color; ?>"<?php } ?>>
  <div class="container">
    <h2><span><?php echo $section_3_heading; ?></span></h2>
    <div class="chooseWrap">
      <?php
        $i=0;
        if( have_rows('section_3_listing') ): while ( have_rows('section_3_listing') ) : the_row();$i++;
          $heading=get_sub_field('heading');
          $image=get_sub_field('image');
          $border_color=get_sub_field('border_color');
      ?>
      <div class="grid <?php if($i==1){ ?>red<?php }elseif($i==2){ ?>blue<?php }else{ ?>green<?php } ?>">
        <h3><?php echo $heading; ?></h3>
        <div class="lgBox">
          <?php if($image){ ?>
          <figure <?php if($border_color){ ?>style="border-color:<?php echo $border_color; ?>"<?php } ?>>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
          </figure>
          <?php } ?>
        </div>
        <div class="smBox">
          <?php
            if( have_rows('small_box_listing') ): while ( have_rows('small_box_listing') ) : the_row();
              $heading=get_sub_field('heading');
              $image=get_sub_field('image');
              $border_color=get_sub_field('border_color');
              if($image){
          ?>
          <figure <?php if($border_color){ ?>style="border-color:<?php echo $border_color; ?>"<?php } ?>>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            <span><?php echo $heading; ?></span>
          </figure>
          <?php
              }
            endwhile;endif;
          ?>

        </div>
      </div>
      <?php
        endwhile;endif;
      ?>
    </div>
  </div>
</section>
<!-- why us close -->
<?php
  }
?>

<?php if( have_rows('bottom_scrolling_counter_details') ):  ?>
<section class="revenue_info">
  <div class="container">
    <div class="row">
    <?php
      while ( have_rows('bottom_scrolling_counter_details') ) : the_row();
      $icon=get_sub_field('icon2');
      $value=get_sub_field('value2');
      $text=get_sub_field('text2');
    ?>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="info_box">
          <?php if($value){ ?>
          <span class="info">
            <?php if($icon){ ?>
            <i class="fa <?php echo $icon; ?>"></i>
            <?php } ?>
            <samp class="homecounter"><?php echo $value; ?></samp>
          </span>
          <?php } ?>
          <?php if($text){ ?>
          <span class="label"><?php echo $text; ?></span>
          <?php } ?>
        </div>
      </div>
    <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
    $section_5_heading=get_field('resource_section_heading');
?>
<!-- top resources section start -->
<section class="body_section resources_sec">
    <div class="container">
        <h2><span><?php echo $section_5_heading; ?></span></h2>
        <div class="resource_holder">
            <div class="row">
            <?php
                if( have_rows('resource_section_listing') ): while ( have_rows('resource_section_listing') ) : the_row();
                $add_resouce=get_sub_field('add_resouce');
                if($add_resouce){
                // override $post
                $post = $add_resouce;
                setup_postdata( $post );
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'resource_home_thumb', false, '' );
                $img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
                $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
            ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="resource_box">
                        <div class="thumbnail_container">
                            <?php
                            if($src){
                            ?>
                            <a href="<?php the_permalink(); ?>">
                                <figure><img src="<?php echo $src[0]; ?>" alt="<?php echo $alt_text; ?>">
                                </figure>
                            </a>
                            <?php
                            }
                            ?>
                            <!--<h3><?php //the_title(); ?></h3>-->
                        </div>
                        <h3><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></a></h3>
                        <p><?php echo substr(strip_tags(get_the_content()), 0, 180); ?>...<a href="<?php the_permalink(); ?>">more</a>
                        </p>
                    </div>
                </div>
            <?php
                wp_reset_postdata();
                }
                endwhile;endif;
            ?>
            </div>
        </div>
    </div>
</section>
<!-- top resources section end -->

<!-- contact section start -->
<section id="contact" class="body_section contactFooter" style="background-image:url(/wp-content/uploads/2017/09/choice_bg.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="box sign_up_sec">
          <h2><?php the_field('contact_section_heading'); ?></h2>
          <div class="inner teamContact support_box_holder clear">
          <?php
              if( have_rows('contact_section_listing') ): while ( have_rows('contact_section_listing') ) : the_row();
              $signimage=get_sub_field('contact_section_list_image');
              $signheading=get_sub_field('contact_section_list_heading');
              $signcontent=get_sub_field('contact_section_list_content');
          ?>
            <div class="each_box clear">
                <?php
                  if ( $signimage ) {
                ?>
                <span class="ico">
                    <img src="<?php echo $signimage['url']; ?>" alt="<?php echo $signimage['alt']; ?>">
                </span>
                <?php
                  }
                ?>
                <div class="content">
                    <h4>
                        <?php echo $signheading; ?>
                    </h4>
                    <?php echo $signcontent; ?>
                </div>
            </div>
          <?php endwhile;endif; ?>
          </div>
          <?php
            $contact_section_button_text=get_field('contact_section_button_text');
            if($contact_section_button_text){
            $contact_section_button_type_popup=get_field('contact_section_button_type_popup');
            $contact_section_button_link=get_field('contact_section_button_link');
            $contact_section_button_popup_form=get_field('contact_section_button_popup_form');

            $contact_section_button_text_color=get_field('contact_section_button_text_color');
            $contact_section_button_background_color=get_field('contact_section_button_background_color');
            $contact_section_button_border_color=get_field('contact_section_button_border_color');

            $contact_section_button_text_hover_color=get_field('contact_section_button_text_hover_color');
            $contact_section_button_background_hover_color=get_field('contact_section_button_background_hover_color');
            $contact_section_button_border_hover_color=get_field('contact_section_button_border_hover_color');

          ?>
          <div class="btnBox">
            <?php
              if($contact_section_button_type_popup){
            ?>
              <a data-fancybox href="#post-<?php echo $contact_section_button_popup_form; ?>" class="contact_section_button_landing6"><?php echo $contact_section_button_text; ?></a>
            <?php
              }else{
            ?>
              <a href="<?php echo $contact_section_button_link; ?>" class="contact_section_button_landing6"><?php echo $contact_section_button_text; ?></a>
            <?php
              }
            ?>
          </div>
          <style>
            .contact_section_button_landing6{
              <?php if($contact_section_button_text_color){ ?>
              color: <?php echo $contact_section_button_text_color; ?>;
              <?php } ?>
              <?php if($contact_section_button_border_color){ ?>
              border: 2px solid <?php echo $contact_section_button_border_color; ?>;
              <?php } ?>
              <?php if($contact_section_button_background_color){ ?>
              background-color: <?php echo $contact_section_button_background_color; ?>;
              <?php } ?>
            }
            .contact_section_button_landing6:hover{
              <?php if($contact_section_button_text_hover_color){ ?>
              color: <?php echo $contact_section_button_text_hover_color; ?>;
              <?php } ?>
              <?php if($contact_section_button_border_hover_color){ ?>
              border: 2px solid <?php echo $contact_section_button_border_hover_color; ?>;
              <?php } ?>
              <?php if($contact_section_button_background_hover_color){ ?>
              background-color: <?php echo $contact_section_button_background_hover_color; ?>;
              <?php } ?>
            }
          </style>
          <?php
            }
          ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box">
          <h2><?php the_field('review_section_heading'); ?></h2>
          <div class="inner reviewBox">
            <table class="reviewTable">
              <?php
                $post_id=get_the_ID();
                $args = array(
                  'post_type'  => 'reviews_list',
                  'posts_per_page'  => 4,
                  'meta_query' => array(
                    array(
                      'key'     => 'show_on_the_page',
                      'value'   => $post_id,
                      'compare' => 'LIKE',
                    ),
                  ),
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                $logo=get_field('logo');
                $company_name=get_field('company_name');
                $customer_name=get_field('customer_name');
                $job_title=get_field('job_title');
                $star_rating=get_field('star_rating');
                $comment=get_field('comment');
              ?>
              <tr>
                <?php if($logo){ ?>
                <td class="rLogo">
                  <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                </td>
                <?php } ?>
                <td class="rdesc">
                  <span class="rName"><?php echo $company_name; ?></span>
                  <span class="rCustomer"><?php echo $customer_name; ?></span>
                  <span class="rTitle"><?php echo $job_title; ?></span>
                </td>
                <td class="rComment"><?php echo $comment; ?></td>
                <?php
                  $star_text=$star_rating['label'];
                  $star_value=$star_rating['value'];
                  $star_text=chop($star_text,' Star');
                ?>
                <td class="rRate"><?php echo $star_text; ?>/5</td>
                <td class="rView">
                  <span class="sReview">
                    <span style="width:<?php echo $star_value; ?>%"></span>
                  </span>
                </td>
              </tr>
              <?php
                endwhile;endif;
                wp_reset_query();
              ?>
            </table>
          </div>
          <?php
            $review_section_button_text=get_field('review_section_button_text');
            if($review_section_button_text){
            $review_section_button_link=get_field('review_section_button_link');

            $review_section_button_text_color=get_field('review_section_button_text_color');
            $review_section_button_background_color=get_field('review_section_button_background_color');
            $review_section_button_border_color=get_field('review_section_button_border_color');

            $review_section_button_hover_text_color=get_field('review_section_button_hover_text_color');
            $review_section_button_hover_background_color=get_field('review_section_button_hover_background_color');
            $review_section_button_hover_border_color=get_field('review_section_button_hover_border_color');

          ?>
          <div class="btnBox">
            <a href="<?php echo $review_section_button_link; ?>" class="review_section_button_landing6"><?php echo $review_section_button_text; ?></a>
          </div>
          <style>
            .review_section_button_landing6{
              <?php if($review_section_button_text_color){ ?>
              color: <?php echo $review_section_button_text_color; ?>;
              <?php } ?>
              <?php if($review_section_button_border_color){ ?>
              border: 2px solid <?php echo $review_section_button_border_color; ?>;
              <?php } ?>
              <?php if($review_section_button_background_color){ ?>
              background-color: <?php echo $review_section_button_background_color; ?>;
              <?php } ?>
            }
            .review_section_button_landing6:hover{
              <?php if($review_section_button_hover_text_color){ ?>
              color: <?php echo $review_section_button_hover_text_color; ?>;
              <?php } ?>
              <?php if($review_section_button_hover_border_color){ ?>
              border: 2px solid <?php echo $review_section_button_hover_border_color; ?>;
              <?php } ?>
              <?php if($review_section_button_hover_background_color){ ?>
              background-color: <?php echo $review_section_button_hover_background_color; ?>;
              <?php } ?>
            }
          </style>
          <?php
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact section close -->

<?php get_footer(); ?>
<script type="text/javascript">
$(window).scroll(function(){
  var linea = $('.chooseWrap').offset().top;
  var sch = $(window).height() / 2;
  var scrl = $(window).scrollTop();
  if(scrl > linea - sch){
    $('.chooseWrap').addClass('show');
    $('.chooseWrap .grid').css('opacity',1);
  }else{
  }
  })
</script>
<script type="text/javascript">
  $('.productLeft .list').click(function(){
    $(this).addClass('active');
    $(this).prevAll('.list').removeClass('active');
    $(this).nextAll('.list').removeClass('active');
    $('.frontText').hide();
    $('.afterText').show();
  });

</script>

<script>
  $('.productLeft .list').click(function(){
    var product_id=$(this).data('id');
    $.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>', // Let WordPress figure this url out...
        type: 'post',
        dataType: 'HTML', // Set this so we don't need to decode the response...
        data: 'action=get_landing_product_details&product_id='+product_id, // One-liner form data prep...
        beforeSend: function () {
        },
        error:  function () {
        },
        success: function (data) {
            $('.productsRight').html(data);
            $('.afterText').show();
            $('.mMenu li:first-child').addClass('current');
            $('.mMenu li').click(function(){
              var index = $(this).index();
              $('.mMenu li').removeClass('current');
              $(this).addClass('current');
              $('.panTab').hide();
              $('.panTab').eq(index).show();
              return false;
            });
        }
    });

    $(this).prevAll('.list').addClass('low');
    $(this).nextAll('.list').addClass('low');
    $(this).removeClass('low');
  });


  $(document).on('click','.logo_menu_section a', function(event) {
    event.preventDefault();
    var target = this.getAttribute('href');
    if($("section").hasClass("pageTopBar")){
      $('html, body').animate({
        scrollTop: $(target).offset().top - 192
      }, 1000);
    }
    else{
      $('html, body').animate({
        scrollTop: $(target).offset().top - 120
      }, 1000);
    }
  });
</script>
