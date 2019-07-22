<?php /*Template Name: Promotion 2*/ ?>
<?php get_header(); ?>

<?php
  $banner_background_image=get_field('banner_background_image');
  $banner_left_image=get_field('banner_left_image');
  $banner_right_heading=get_field('banner_right_heading');
  $banner_sub_heading=get_field('banner_sub_heading');
  $text_color=get_field('banner_text_color');
  /* Button 1 Settings */
  $banner_button_1_border_color=get_field('banner_button_1_border_color');
  $banner_button_1_border_hover_color=get_field('banner_button_1_border_hover_color');

  $banner_button_1_background_color=get_field('banner_button_1_background_color');
  $banner_button_1_background_hover_color=get_field('banner_button_1_background_hover_color');

  $banner_button_1_text_color=get_field('banner_button_1_text_color');
  $banner_button_1_text_hover_color=get_field('banner_button_1_text_hover_color');

  $banner_button_1_text=get_field('banner_button_1_text');
  $banner_button_1_link=get_field('banner_button_1_link');

  $banner_button_1_type=get_field('banner_button_1_type');
  $banner_button_1_form=get_field('banner_button_1_form');


  /* Button 2 Settings */
  $banner_button_2_border_color=get_field('banner_button_2_border_color');
  $banner_button_2_hover_border_color=get_field('banner_button_2_hover_border_color');

  $banner_button_2_background_color=get_field('banner_button_2_background_color');
  $banner_button_2_hover_background_color=get_field('banner_button_2_hover_background_color');

  $banner_button_2_text_color=get_field('banner_button_2_text_color');
  $banner_button_2_text_hover_color=get_field('banner_button_2_text_hover_color');

  $banner_button_2_text=get_field('banner_button_2_text');
  $banner_button_2_link=get_field('banner_button_2_link');

  $banner_button_2_type=get_field('banner_button_2_type');
  $banner_button_2_form=get_field('banner_button_2_form');

  if($banner_background_image){
?>
<?php if( $text_color){ ?>
<style>
  .banner .banner_container .banner_content h1{
    color:<?php echo $text_color; ?>;
  }
  .banner .banner_container .banner_content p{
    color:<?php echo $text_color; ?>;
  }
</style>
<?php } ?>
<style>
  .banner .banner_container .banner_content .bannerBtn1 {
    <?php if( $banner_button_1_border_color){ ?>
    border: 2px solid <?php echo $banner_button_1_border_color; ?> !important;
    <?php } ?>
    <?php if( $banner_button_1_background_color){ ?>
    background-color: <?php echo $banner_button_1_background_color; ?> !important;
    <?php } ?>
    <?php if( $banner_button_1_text_color){ ?>
    color: <?php echo $banner_button_1_text_color; ?> !important;
    <?php } ?>
  }
  .banner .banner_container .banner_content .bannerBtn1:hover {
    <?php if( $banner_button_1_border_hover_color){ ?>
    border: 2px solid <?php echo $banner_button_1_border_hover_color; ?> !important;
    <?php } ?>
    <?php if( $banner_button_1_background_hover_color){ ?>
    background-color: <?php echo $banner_button_1_background_hover_color; ?> !important;
    <?php } ?>
    <?php if( $banner_button_1_text_hover_color){ ?>
    color: <?php echo $banner_button_1_text_hover_color; ?> !important;
    <?php } ?>
  }
  .banner .banner_container .banner_content .bannerBtn2 {
    <?php if( $banner_button_2_border_color){ ?>
    border: 2px solid <?php echo $banner_button_2_border_color; ?> !important;
    <?php } ?>
    <?php if( $banner_button_2_background_color){ ?>
    background-color: <?php echo $banner_button_2_background_color; ?> !important;
    <?php } ?>
    <?php if( $banner_button_2_text_color){ ?>
    color: <?php echo $banner_button_2_text_color; ?> !important;
    <?php } ?>
  }
  .banner .banner_container .banner_content .bannerBtn2:hover {
    <?php if( $banner_button_2_hover_border_color){ ?>
    border: 2px solid <?php echo $banner_button_2_hover_border_color; ?> !important;
    <?php } ?>
    <?php if( $banner_button_2_hover_background_color){ ?>
    background-color: <?php echo $banner_button_2_hover_background_color; ?> !important;
    <?php } ?>
    <?php if( $banner_button_2_text_hover_color){ ?>
    color: <?php echo $banner_button_2_text_hover_color; ?> !important;
    <?php } ?>
  }
</style>
<!-- section banner start -->
<section class="banner promotion2_new">
  <figure class="banner_img" style="background-image:url(<?php echo $banner_background_image['url']; ?>);"></figure>
  <div class="banner_container">
    <span class="laptop_part">
      <figure><img src="<?php echo $banner_left_image['url']; ?>" alt="<?php echo $banner_left_image['alt']; ?>">
      </figure>
    </span>
    <div class="banner_content">
      <h1><?php echo $banner_right_heading; ?></h1>
      <?php echo $banner_sub_heading; ?>
      <div class="banner_btn_box">
        <?php
          if($banner_button_1_text){
            if( $banner_button_1_type=='popup' ){
        ?>
          <a data-fancybox href="#post-<?php echo $banner_button_1_form; ?>" class="btn fill_btn bannerBtn1"><?php echo $banner_button_1_text; ?></a>
          <?php
            }else{
          ?>
          <a href="<?php echo $banner_button_1_link; ?>" class="btn fill_btn bannerBtn1"><?php echo $banner_button_1_text; ?></a>
        <?php
            }
          }
        ?>
        <?php
          if($banner_button_2_text){
            if( $banner_button_2_type=='popup' ){
        ?>
          <a data-fancybox href="#post-<?php echo $banner_button_2_form; ?>" class="btn bannerBtn2"><?php echo $banner_button_2_text; ?></a>
          <?php
            }else{
          ?>
          <a href="<?php echo $banner_button_2_link; ?>" class="btn bannerBtn2"><?php echo $banner_button_2_text; ?></a>
        <?php
            }
          }
        ?>
      </div>
    </div>
  </div>
</section>
<!-- section banner end -->
<?php
  }
?>
<!-- cleint Sec Start -->
<?php include(TEMPLATEPATH.'/includes/clients.php'); ?>
        <!-- cleint Sec End -->
    <!-- body content start -->
    <div class="body_content promotion2_new">
        <section class="body_section why_auction_sec">
            <div class="container">
                <h2><span><?php the_field('section_1_why_auction'); ?></span></h2>
                <div class="auction_box_holder">
                 <?php
                if( have_rows('sub_section_1_why_auction_section') ):
                    $i=1;
                 while ( have_rows('sub_section_1_why_auction_section') ) : the_row(); ?>

                    <div class="auction_box clear">
                        <div class="left_content">
                            <?php the_sub_field('content'); ?>
                        </div>
                        <div class="right_content <?php if($i%2==0){ echo "absolute"; } ?>">
                            <?php $image = get_sub_field('image');
                        if($image){?>
                            <figure><img src="<?= $image['url'] ?>" alt=""></figure>
                        <?php } ?>
                        </div>
                    </div>
                <?php
                $i++;
                endwhile;
                endif;
                 ?>
                </div>
            </div>
        </section>

        <!-- esourcing sec start -->
        <?php $image = get_field('section_2_background_image'); ?>
        <section class="body_section esourcing_sec" style="background-image:url(<?= $image['url'] ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="left_part">
                            <h2><span><?php the_field('section_2_head'); ?></span></h2>
                           <?php $left_image = get_field('left_image');
                                if($left_image){?>
                                    <figure><img src="<?= $left_image['url'] ?>" alt=""></figure>
                            <?php } ?>
                            <?php the_field('section_2_content'); ?>
                            <div class="btn_sec">
                            <?php
                              $section_2_button_1_link=get_field('section_2_button_1_link');
                              $section_2_button_1_text=get_field('section_2_button_1_text');

                              $section_2_button_1_text_color=get_field('section_2_button_1_text_color');
                              $section_2_button_1_text_hover_color=get_field('section_2_button_1_text_hover_color');

                              $section_2_button_1_border_color=get_field('section_2_button_1_border_color');
                              $section_2_button_1_border_hover_color=get_field('section_2_button_1_border_hover_color');

                              $section_2_button_1_background_color=get_field('section_2_button_1_background_color');
                              $section_2_button_1_background_hover_color=get_field('section_2_button_1_background_hover_color');

                              if($section_2_button_1_link!=""){
                            ?>
                                <style>
                                  .section_2_button_1{
                                    <?php if($section_2_button_1_text_color){ ?>
                                      color: <?php echo $section_2_button_1_text_color; ?> !important;
                                    <?php } ?>
                                    <?php if($section_2_button_1_border_color){ ?>
                                      border: 2px solid <?php echo $section_2_button_1_border_color; ?> !important;
                                    <?php } ?>
                                    <?php if($section_2_button_1_background_color){ ?>
                                      background: <?php echo $section_2_button_1_background_color; ?> !important;
                                    <?php } ?>
                                  }
                                  .section_2_button_1:hover{
                                    <?php if($section_2_button_1_text_color){ ?>
                                      color: <?php echo $section_2_button_1_text_hover_color; ?> !important;
                                    <?php } ?>
                                    <?php if($section_2_button_1_border_hover_color){ ?>
                                      border: 2px solid <?php echo $section_2_button_1_border_hover_color; ?> !important;
                                    <?php } ?>
                                    <?php if($section_2_button_1_background_hover_color){ ?>
                                      background: <?php echo $section_2_button_1_background_hover_color; ?> !important;
                                    <?php } ?>
                                  }
                                </style>
                                <a href="<?php echo $section_2_button_1_link; ?>" class="btn fill_btn section_2_button_1"><?php echo $section_2_button_1_text; ?></a>
                            <?php
                              }
                              $section_2_button_2_link=get_field('section_2_button_2_link');
                              $section_2_button_2_text=get_field('section_2_button_2_text');

                              $section_2_button_2_text_color=get_field('section_2_button_2_text_color');
                              $section_2_button_2_text_hover_color=get_field('section_2_button_2_text_hover_color');

                              $section_2_button_2_border_color=get_field('section_2_button_2_border_color');
                              $section_2_button_2_border_hover_color=get_field('section_2_button_2_border_hover_color');

                              $section_2_button_2_background_color=get_field('section_2_button_2_background_color');
                              $section_2_button_2_background_hover_color=get_field('section_2_button_2_background_hover_color');

                              if($section_2_button_2_link!=""){
                            ?>
                                <style>
                                  .section_2_button_2{
                                    <?php if($section_2_button_2_text_color){ ?>
                                      color: <?php echo $section_2_button_2_text_color; ?> !important;
                                    <?php } ?>
                                    <?php if($section_2_button_2_border_color){ ?>
                                      border: 2px solid <?php echo $section_2_button_2_border_color; ?> !important;
                                    <?php } ?>
                                    <?php if($section_2_button_2_background_color){ ?>
                                      background: <?php echo $section_2_button_2_background_color; ?> !important;
                                    <?php } ?>
                                  }
                                  .section_2_button_2:hover{
                                    <?php if($section_2_button_2_text_color){ ?>
                                      color: <?php echo $section_2_button_2_text_hover_color; ?> !important;
                                    <?php } ?>
                                    <?php if($section_2_button_2_border_hover_color){ ?>
                                      border: 2px solid <?php echo $section_2_button_2_border_hover_color; ?> !important;
                                    <?php } ?>
                                    <?php if($section_2_button_2_background_hover_color){ ?>
                                      background: <?php echo $section_2_button_2_background_hover_color; ?> !important;
                                    <?php } ?>
                                  }
                                </style>
                                <a href="<?php echo $section_2_button_1_link; ?>" class="btn section_2_button_2"><?php echo $section_2_button_2_text; ?></a>
                            <?php
                              }
                            ?>
                            </div>
                        </div>
                    </div>
                    <?php
                     $video_image = get_field('section_2_video');
                        preg_match('/src="(.+?)"/', $video_image, $matches_url);
                        $src = $matches_url[1];
                        preg_match('/embed(.*?)?feature/', $src, $matches_id);
                        $id = $matches_id[1];
                        $vid = str_replace(str_split('?/'), '', $id);
                    ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="right_part">
                            <?php $right_video_image = get_field('right_video_image');
                                if($right_video_image){?>
                                    <figure><a href="https://www.youtube.com/embed/<?= $vid; ?>" data-fancybox><img src="<?= $right_video_image['url'] ?>" alt=""></a></figure>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- esourcing sec end -->
         <!-- client testimonial sec start -->
        <?php include(TEMPLATEPATH.'/includes/testimonials.php'); ?>
        <!-- client testimonial sec end -->
    </div>
    <!-- body content end -->
<?php get_footer(); ?>

