<?php /* Template Name: Landing7 */ ?>
<?php get_header(); ?>

<div class="landingPage7PageSec">

  <section class="body_section why_auction_sec partner_with_us" id="L7S1">
  <div class="container">
    <h2><span><?php the_field('section_1_heading'); ?></span></h2>
    <div class="partner_with_us_content">
      <?php the_field('section_1_content'); ?>
    </div>
    <?php
      $i=1;
      if( have_rows('section_1_listings') ):
    ?>
      <div class="auction_box_holder">
      <?php
        while ( have_rows('section_1_listings') ) : the_row();
      ?>
        <div class="auction_box clear">
            <div class="left_content">
              <?php the_sub_field('section_1_listing_content'); ?>
            </div>
            <div class="right_content <?php if($i%2==0){ echo "absolute"; } ?>">
              <?php
                $section_1_listing_image = get_sub_field('section_1_listing_image');
                if($section_1_listing_image){
              ?>
                <figure><img src="<?= $section_1_listing_image['url'] ?>" alt="<?= $section_1_listing_image['alt'] ?>"></figure>
              <?php
                }
              ?>
            </div>
        </div>
      <?php
        $i++;
        endwhile;
      ?>
      </div>
    <?php
      endif;
    ?>
  </div>
</section>

<!-- add ones section -->
  <section class="body_section add_ones_secNew pb-0" id="L7S4">
    <div class="container">
        <h2><span><?php the_field('section_4_heading'); ?></span></h2>
        <div class="add_ones_holder clear">
            <?php
              if (have_rows('section_4_listing')): while (have_rows('section_4_listing')): the_row();
              $section4image = get_sub_field('section_4_image');
            ?>
            <div class="each_sec clear">
                <span class="icon"><img src="<?php echo $section4image['url']; ?>" alt="<?php echo $section4image['alt']; ?>"></span>
                <div class="content">
                    <h4> <?php the_sub_field('section_4_title'); ?></h4>
                    <?php the_sub_field('section_4_description'); ?>
                </div>
            </div>
            <?php
              endwhile;endif;
            ?>
        </div>
    </div>
</section>
<!-- add ones section -->
	
<?php include(TEMPLATEPATH.'/includes/testimonials.php'); ?>

<!-- pricing section start -->
  <section class="body_section pricing_page_sec" id="L7S2">
    <div class="container">
      <div class="plan_choose choose_plan_holder full clear">
        <div class="plan_left">
            <h2><span><?php the_field('section_2_heading'); ?></span></h2>
        </div>
        </div>
        <div class="plan_box_holder pricing_table_main_holder clear newPriceWrap">

        <?php
            $i=0;
            if( have_rows('section_2_listing') ): while ( have_rows('section_2_listing') ) : the_row();$i++;
                $background_color=get_sub_field('background_color');
                $text_color=get_sub_field('text_color');
                $content_section_background_color=get_sub_field('content_section_background_color');
                $button_text_color=get_sub_field('button_text_color');
                $button_background_color=get_sub_field('button_background_color');
                $button_hover_text_color=get_sub_field('button_hover_text_color');
                $button_hover_background_color=get_sub_field('button_hover_background_color');
        ?>
        <style>
            .custom_each_table_<?php echo $i; ?>{
                <?php
                    if($background_color){
                        echo "background-color:".$background_color.'!important;';
                    }
                    if($text_color){
                        echo "color:".$text_color.'!important;';
                    }
                ?>
            }
            .custom_each_table_<?php echo $i; ?> h2{
                <?php
                    if($text_color){
                        echo "color:".$text_color.'!important;';
                    }
                ?>
            }
            .custom_each_table_<?php echo $i; ?> .billing_details{
                <?php
                    if($content_section_background_color){
                        echo "background-color:".$content_section_background_color.'!important;';
                    }
                ?>
            }
            .custom_each_table_<?php echo $i; ?> a{
                <?php
                    if($button_background_color){
                        echo "background-color:".$button_background_color.'!important;';
                    }
                    if($button_text_color){
                        echo "color:".$button_text_color.'!important;';
                    }
                ?>
            }
            .custom_each_table_<?php echo $i; ?> a:hover{
                <?php
                    if($button_hover_background_color){
                        echo "background-color:".$button_hover_background_color.'!important;';
                    }
                    if($button_hover_text_color){
                        echo "color:".$button_hover_text_color.'!important;';
                    }
                ?>
            }

        </style>
        <div class="each_table custom_each_table_<?php echo $i; ?>">
              <h2><?php the_sub_field('heading'); ?></h2>
              <div class="billing_details fees">
                  <div class="content cell">
                    <?php the_sub_field('content'); ?>
                  </div>
              </div>

              <div class="btn_holder">
                <?php
                  $popup_button = get_sub_field('popup_button');
                  if( $popup_button ){
                ?>
                  <a data-fancybox href="#post-<?php the_sub_field('select_form'); ?>" class="btn_pricing"><?php the_sub_field('button_text'); ?></a>
                <?php
                  }else{
                ?>
                  <a href="<?php the_sub_field('button_link'); ?>" class="btn_pricing"><?php the_sub_field('button_text'); ?></a>
                <?php
                  }
                ?>
              </div>
          </div>
        <?php endwhile;endif; ?>

        </div>
      </div>

</section>
<!-- pricing section end -->

<?php /*
<!-- practice event -->
<section class="body_section practice_event_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12">
                <h2><span><?php the_field('section_3_heading'); ?></span></h2>
                <p><?php the_field('section_3_description'); ?></p>
                <a href="<?php the_field('section_3_button_link'); ?>" class="btn"><?php the_field('section_3_button_text'); ?></a>
            </div>
            <?php
              $section_3_image = get_field('section_3_image');
              if ($section_3_image) {
            ?>
            <div class="col-md-5 col-sm-5 col-xs-12">
                <figure><img src="<?php echo $section_3_image['url']; ?>" alt="<?php echo $section_3_image['alt']; ?>"></figure>
            </div>
            <?php
              }
            ?>
        </div>
    </div>
</section>
<!-- pracdtce event -->
*/ ?>

<!-- practice event -->
<section class="body_section practice_event_sec landing_page_7_practice_event_sec" id="L7S3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="demo_frm">
                    <?php the_field('section_3_form'); ?>
                </div>
            </div>
            <?php
              $section_3_heading = get_field('section_3_heading');
              if ($section_3_heading) {
            ?>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <h3><?php echo $section_3_heading; ?></h3>
            </div>
            <?php
              }
            ?>
        </div>
    </div>
</section>
<!-- pracdtce event -->



<!-- faq section start -->
<section class="body_section features_faq" id="L7S5">
    <div class="container">
      <h2><span><?php the_field('section_5_heading');?></span></h2>
      <div class="faq_holder">
        <?php $i = 0; ?>
        <?php if (have_rows('section_5_listing')): while (have_rows('section_5_listing')): the_row(); $i++; ?>
        <div class="rowFaq">
          <h3 <?php if($i==1){ ?> class="active"<?php } ?>><?php the_sub_field('section_5_listing_heading'); ?></h3>
          <div  class="content <?php if($i==1){ ?>active<?php } ?>">
            <?php the_sub_field('section_5_listing_content'); ?>
          </div>
        </div>
        <?php endwhile;endif; ?>
      </div>
      <div class="more_question">
        <?php the_field('section_5_content'); ?>
        <p>&nbsp;</p>
      </div>
    </div>
</section>
<!-- faq section end -->
</div>
<?php get_footer(); ?>
<script>
  $(document).on('click','.banner_btn_box a', function(event) {
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
