<?php /* Template Name: Team */ ?>
<?php get_header(); ?>

<?php if(!post_password_required( $post )){ ?>


<?php
  $banner_background_image=get_field('banner_background_image');
  $banner_left_video=get_field('banner_left_video');
  $banner_left_video_chk=$banner_left_video;
  preg_match('/src="(.+?)"/', $banner_left_video, $matches);
  $src = $matches[1];
  $params = array(
    'controls'  => 0,
    'hd'        => 1,
    'autohide'  => 1,
    'showinfo'  =>0
  );
  $new_src = add_query_arg($params, $src);
  $banner_left_video = str_replace($src, $new_src, $banner_left_video);
  $attributes = 'frameborder="0"';
  $banner_left_video = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $banner_left_video);
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
    border: 2px solid <?php echo $banner_button_1_border_color; ?>;
    <?php } ?>
    <?php if( $banner_button_1_background_color){ ?>
    background-color: <?php echo $banner_button_1_background_color; ?>;
    <?php } ?>
    <?php if( $banner_button_1_text_color){ ?>
    color: <?php echo $banner_button_1_text_color; ?>;
    <?php } ?>
  }
  .banner .banner_container .banner_content .bannerBtn1:hover {
    <?php if( $banner_button_1_border_hover_color){ ?>
    border: 2px solid <?php echo $banner_button_1_border_hover_color; ?>;
    <?php } ?>
    <?php if( $banner_button_1_background_hover_color){ ?>
    background-color: <?php echo $banner_button_1_background_hover_color; ?>;
    <?php } ?>
    <?php if( $banner_button_1_text_hover_color){ ?>
    color: <?php echo $banner_button_1_text_hover_color; ?>;
    <?php } ?>
  }
  .banner .banner_container .banner_content .bannerBtn2 {
    <?php if( $banner_button_2_border_color){ ?>
    border: 2px solid <?php echo $banner_button_2_border_color; ?>;
    <?php } ?>
    <?php if( $banner_button_2_background_color){ ?>
    background-color: <?php echo $banner_button_2_background_color; ?>;
    <?php } ?>
    <?php if( $banner_button_2_text_color){ ?>
    color: <?php echo $banner_button_2_text_color; ?>;
    <?php } ?>
  }
  .banner .banner_container .banner_content .bannerBtn2:hover {
    <?php if( $banner_button_2_hover_border_color){ ?>
    border: 2px solid <?php echo $banner_button_2_hover_border_color; ?>;
    <?php } ?>
    <?php if( $banner_button_2_hover_background_color){ ?>
    background-color: <?php echo $banner_button_2_hover_background_color; ?>;
    <?php } ?>
    <?php if( $banner_button_2_text_hover_color){ ?>
    color: <?php echo $banner_button_2_text_hover_color; ?>;
    <?php } ?>
  }
</style>

  <section class="banner hub4Category linkListBanner">
    <figure class="banner_img" style="background-image:url(<?php echo $banner_background_image['url']; ?>);"></figure>
    <div class="banner_container">
      <span class="laptop_part">
        <?php if($banner_left_video_chk){ ?>
          <figure style="background-image: url(https://www.marketdojo.com/wp-content/uploads/2017/12/banner_laptop-bosc1.png)">
            <!-- <img src="https://www.marketdojo.com/wp-content/uploads/2017/12/banner_laptop-bosc1.png" alt="bosch banner laptop image that use procurement and esourcing software"> -->
            <?php echo $banner_left_video; ?>
          </figure>
        <?php }elseif($banner_left_image){ ?>
          <figure style="background-image: url(https://www.marketdojo.com/wp-content/uploads/2017/12/banner_laptop-bosc1.png)">
            <img src="<?php echo $banner_left_image['url']; ?>" alt="<?php echo $banner_left_image['alt']; ?>">
          </figure>
        <?php } ?>
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
<?php
  }
?>
<?php if( have_rows('section_1_listings') ): ?>
<section class="body_section why_auction_sec">
  <div class="container">
    <h2><span><?php the_field('section_1_heading'); ?></span></h2>
    <div class="auction_box_holder">
    <?php
      $i=1;
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
  </div>
</section>
<?php endif; ?>
<!--hub4CategoryListingSec open-->
<div class="hub4CategoryListingSec linkListBoxSection whatsgoingon">
  <div class="container">
    <h2><span><?php the_field('section_2_heading'); ?></span></h2>
    <div class="caseStudies linkListSection">
      <div class="logoTab">
        <div class="row">
          <div class="col-md-12">
            <div class="button-group filters-button-group">
              <span class="filterCont"><samp>Show All</samp> <em class="fa fa-filter" aria-hidden="true"></em></span>
              <ul>
                <li><a href="javascript:void(0);" class="button is-checked" data-filter="*">Show All</a></li>
                <?php
                  $section_2_tabs=get_field('section_2_tabs');
                  if($section_2_tabs){
                    $section_2_tabs=explode(',',$section_2_tabs);
                    foreach ($section_2_tabs as $section_2_tab) {
                ?>
                <li><a href="javascript:void(0);" class="button" data-filter=".<?php echo trim($section_2_tab); ?>"><?php echo $section_2_tab; ?></a></li>
                <?php
                    }
                  }
                ?>
              </ul>
            </div>
            <div class="gridWrap clear linkList">
              <?php if( have_rows('section_2_listings') ): while ( have_rows('section_2_listings') ) : the_row(); ?>
              <div class="listitem <?php the_sub_field('section_2_list_category'); ?>">
                  <div class="linkTopBox">
                    <div class="linkBox">
                      <?php
                        $icon=get_sub_field('section_2_list_icon');
                        if($icon){
                      ?>
                      <figure><img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"></figure>
                      <?php
                        }
                      ?>
                      <h3><?php the_sub_field('section_2_list_title'); ?></h3>
                    </div>
                  </div>
                  <a class="linkHover" href="<?php the_sub_field('section_2_list_link'); ?>" target="_blank">
                    <div class="hovertext">
                      <p><?php the_sub_field('section_2_list_content'); ?></p>
                      <em><span>read more</span></em>
                    </div>
                  </a>
              </div>
              <?php endwhile;endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--hub4CategoryListingSec close-->

<!--hub4CategoryListingSec open-->
<div class="hub4CategoryListingSec linkListBoxSection usefulllinks">
  <div class="container">
    <h2><span><?php the_field('section_3_heading'); ?></span></h2>
    <div class="caseStudies linkListSection">
      <div class="logoTab">
        <div class="row">
          <div class="col-md-12">
            <div class="button-group filters-button-group">
              <span class="filterCont"><samp>Show All</samp> <em class="fa fa-filter" aria-hidden="true"></em></span>
              <ul>
                <li><a href="javascript:void(0);" class="button is-checked" data-filter="*">Show All</a></li>
                <?php
                  $section_3_tabs=get_field('section_3_tabs');
                  if($section_3_tabs){
                    $section_3_tabs=explode(',',$section_3_tabs);
                    foreach ($section_3_tabs as $section_3_tab) {
                ?>
                <li><a href="javascript:void(0);" class="button" data-filter=".<?php echo trim($section_3_tab); ?>"><?php echo $section_3_tab; ?></a></li>
                <?php
                    }
                  }
                ?>
              </ul>
            </div>
            <div class="gridWrap clear linkList">
              <?php if( have_rows('section_3_listings') ): while ( have_rows('section_3_listings') ) : the_row(); ?>
              <div class="listitem <?php the_sub_field('section_3_list_category'); ?>">
                  <div class="linkTopBox">
                    <div class="linkBox">
                      <?php
                        $icon=get_sub_field('section_3_list_icon');
                        if($icon){
                      ?>
                      <figure><img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"></figure>
                      <?php
                        }
                      ?>
                      <h3><?php the_sub_field('section_3_list_title'); ?></h3>
                    </div>
                  </div>
                  <a class="linkHover" href="<?php the_sub_field('section_3_list_link'); ?>" target="_blank">
                    <div class="hovertext">
                      <p><?php the_sub_field('section_3_list_content'); ?></p>
                      <em><span>read more</span></em>
                    </div>
                  </a>
              </div>
              <?php endwhile;endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--hub4CategoryListingSec close-->

<!-- linkListNewsFeed listing_sec -->
<div class="linkListNewsFeedSec listing_sec heading">
  <div class="container">
    <h2><span><?php the_field('section_4_heading'); ?></span></h2>
    <?php
      $access_token=  get_field('feedly_access_token');
      $headers = array(
        'Content-Type: application/json',
        sprintf('Authorization: OAuth %s', $access_token)
      );
      $curl = curl_init("https://cloud.feedly.com/v3/streams/contents?streamId=user/c8da2581-b44a-453d-b857-5ac529755b44/category/global.all");
      curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $result = json_decode(curl_exec($curl));
      if(!empty($result)){
      $items=$result->items;
    //echo "<pre>";
    //print_r($items);
    ?>


    <div class="row">
      <?php
        foreach ($items as $key) {
          $link_arr=$key->alternate;
    $link=$link_arr[0]->href;
          $img=$key->visual;
          $img_url=$img->url;
    if($img_url=='none' || empty($img_url)){
      $img_arr=$key->thumbnail;
      $img_url=$img_arr[0]->url;
    }
          $title=$key->title;
          $timestamp=$key->published;
          $summary=$key->summary;
          $content=$summary->content;
    if(empty($content)){
      $content=$key->content;
            $content=$content->content;
    }
      ?>
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
         <div class="list_box">
            <div class="thumbnail">
              <a href="<?php echo $link; ?>" target="_blank">
                <?php if($img_url=='none' || empty($img_url)){ ?>
                <figure style="background-image: url(https://www.marketdojo.com/wp-content/uploads/2018/12/placeholder_team.jpg)"><img src="https://www.marketdojo.com/wp-content/uploads/2018/12/placeholder_team.jpg"></figure>
              <?php }else{ ?>
                <figure style="background-image: url(<?php echo $img_url; ?>)"><img src="<?php echo $img_url; ?>"></figure>
                <?php } ?>
              </a>
            </div>
            <h3><a href="<?php echo $link; ?>" target="_blank"><?php echo $title; ?></a></h3>
            <p><?php echo substr(strip_tags($content), 0, 130); ?></p>
         </div>
      </div>
      <?php
        }
      ?>
    </div>
    <?php
      }
    ?>
  </div>
</div>
<!-- linkListNewsFeed listing_sec -->

  <?php include(TEMPLATEPATH.'/includes/testimonials.php'); ?>
</div>

<?php
}else{
?>
  <section class="noTeam body_section">
    <div class="container">
      <div class="noTeamForm">
        <?php echo get_the_password_form($post); ?>
      </div>
    </div>
  </section>
<?php
}
?>

<?php get_footer(); ?>
<script type="text/javascript">
  $(document).ready(function(){
    //var ftxt = $('.button-group ul li:first-child').text();
    //alert(ftxt);
    //$('.filterCont samp').text(ftxt);

    $('.filterCont').click(function(){
      $(this).next('ul').slideToggle(200);
    });

    $('.filters-button-group a').click(function(){
      $(this).parents('.filters-button-group').find('ul').slideUp(0);
      var filtxt = $(this).text();
      $(this).parents('.filters-button-group').find('.filterCont samp').text(filtxt);
    });

  });
</script>
