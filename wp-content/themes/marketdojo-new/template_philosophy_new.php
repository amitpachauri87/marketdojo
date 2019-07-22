<?php /* Template Name: Philosophy New */ ?>
<?php get_header(); ?>
<!-- cleint Sec Start -->
<!-- cleint Sec End -->
<?php
  while (have_posts()) : the_post();
  $banner_image=get_field('banner_image');
  $banner_heading=get_field('banner_heading');
  $banner_sub_heading=get_field('banner_sub_heading');
  if($banner_image){
?>
<!-- section banner start -->
<section class="banner innerContentBanner innerBannerArea">
  <figure class="banner_img" style="background-image:url(<?php echo $banner_image['url']; ?>);"></figure>
  <div class="banner_container">
    <div class="banner_content">
      <h1><?php echo $banner_heading; ?></h1>
      <p><?php echo $banner_sub_heading; ?></p>
    </div>
  </div>
</section>
<!-- section banner end -->
<?php
  }
?>

<div class="body_content philosophySec">
  <?php
    $section_1_heading=get_field('section_1_heading');
    $section_1_sub_heading=get_field('section_1_sub_heading');
    if($section_1_heading || $section_1_sub_heading){
  ?>
  <section class="body_section">
    <div class="container">
      <div class="aboutNewTop">
        <h2><?php echo $section_1_heading; ?></h2>
        <p><?php echo $section_1_sub_heading; ?></p>
      </div>
      <!-- aboutNewTop -->
    </div>
  </section>
  <?php
    }
  ?>

  <section class="body_section aboutNewMain philosophyMain greyBg">
    <div class="coreValues">
      <div class="container">
        <?php
          $section_2_heading=get_field('section_2_heading');
          $section_2_sub_heading=get_field('section_2_sub_heading');
          if($section_2_heading || $section_2_sub_heading){
        ?>
        <div class="aboutNewTop">
          <h2><?php echo $section_2_heading; ?></h2>
          <p><?php echo $section_2_sub_heading; ?></p>
        </div>
        <?php
          }
          if( have_rows('section_2_box_listing') ):
        ?>
        <div class="coreValueBlockRow">
          <?php
            while ( have_rows('section_2_box_listing') ) : the_row();
            $image=get_sub_field('image');
            $heading=get_sub_field('heading');
            $content=get_sub_field('content');
          ?>
          <div class="coreValueBlock">
            <div class="coreBlockBox">
              <?php if($image){ ?>
              <figure><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></figure>
              <?php } ?>
              <h4><?php echo $heading; ?></h4>
              <p><?php echo $content; ?></p>
            </div>
          </div>
          <!-- coreValueBlock -->
          <?php
            endwhile;
          ?>
        </div>
        <?php
          endif;
        ?>
      </div>
    </div>
  </section>
  <?php
    $section_3_heading=get_field('section_3_heading');
    $section_3_sub_heading=get_field('section_3_sub_heading');
    if($section_3_heading || $section_3_sub_heading){
  ?>
  <section class="body_section">
    <div class="aboutNewTop">
      <div class="container">
        <h2><?php echo $section_3_heading; ?></h2>
        <p><?php echo $section_3_sub_heading; ?></p>
      </div>
      <!-- aboutNewTop -->
    </div>
  </section>
  <?php
    }
  ?>

  <section class="body_section howWeWorkMain greyBg">
    <div class="container">
      <?php
        $section_4_heading=get_field('section_4_heading');
        $section_4_sub_heading=get_field('section_4_sub_heading');
        if($section_4_heading || $section_4_sub_heading){
      ?>
      <div class="aboutNewTop">
        <h2><?php echo $section_4_heading; ?></h2>
        <p><?php echo $section_4_sub_heading; ?></p>
      </div>
      <?php
        }
        if( have_rows('section_4_listing') ):
      ?>
      <div class="howWeWorkRowWrap">
        <?php
          while ( have_rows('section_4_listing') ) : the_row();
          $image=get_sub_field('image_2');
          $content=get_sub_field('content_2');
        ?>
        <div class="howWeWorkRow">
          <div class="howWeImg">
            <?php if($image){ ?>
              <figure><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></figure>
            <?php } ?>
          </div>
          <div class="howWeContent">
            <?php echo $content; ?>
          </div>
        </div>
        <?php
          endwhile;
        ?>
      </div>
      <?php
        endif;
      ?>
    </div>
  </section>

  <section class="body_section">
    <div class="timelineSliderSec">
      <div class="container">
        <?php
          $section_5_heading=get_field('section_5_heading');
          if($section_5_heading){
        ?>
        <h2><?php echo $section_5_heading; ?></h2>
        <?php
          }
          if( have_rows('section_5_listing') ):
        ?>
        <div class="timelineSliderHolder">
          <button type="button" name="button" class="navBtn navPrev"></button>
          <button type="button" name="button" class="navBtn navNext"></button>
          <div class="timeSliderWrap" id="timeSliderCounter">
            <div class="sliderBox">
            </div> <!-- sliderBox 0-->
            <?php
              while ( have_rows('section_5_listing') ) : the_row();
              $heading_2=get_sub_field('heading_2');
              $content_3=get_sub_field('content_3');
            ?>
            <div class="sliderBox">
              <div class="sliderBoxWrap">
                <h4><?php echo $heading_2; ?></h4>
                <p><?php echo $content_3; ?></p>
              </div>
            </div> <!-- sliderBox 1-->
            <?php
              endwhile;
            ?>
            
          </div>
        </div>
        <?php
          endif;
        ?>
      </div>
    </div>
  </section>

</div>
<?php  endwhile; ?>
<!-- esourcing sec end -->
</div>
<!-- body content end -->
<?php get_footer(); ?>
