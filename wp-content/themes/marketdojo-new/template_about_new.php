<?php /* Template Name: About */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()): the_post(); ?>
<?php
  $banner_image=get_field('banner_image');
  $banner_video=get_field('banner_video');
  $banner_heading=get_field('banner_heading');
  $banner_sub_heading=get_field('banner_sub_heading');
?>
<div class="body_content">
  <section class="videobanner">
    <figure class="bannerHeight"><img src="https://www.marketdojo.com/wp-content/uploads/2019/03/dummyimg.png" alt="dummyimg"></figure>
    <?php if($banner_image){ ?>
    <div class="bannerMain" style="background-image:url(<?php echo $banner_image['url']; ?>);"></div>
    <?php } ?>
    <div class="videoText">
      <div class="container">
        <div class="vText">
          <h2><?php echo $banner_heading; ?></h2>
          <p><?php echo $banner_sub_heading; ?></p>
        </div>
      </div>
    </div>
    <?php
      if($banner_video){
        preg_match('/src="(.+?)"/', $banner_video, $matches);
        $src = $matches[1];
    ?>
    <a data-fancybox href="<?php echo $src; ?>" class="playVideo">
      <img src="https://www.marketdojo.com/wp-content/uploads/2019/03/playvideo.png" alt="playbutton">
    </a>
    <?php
      }
    ?>
  </section>


  <section class="body_section aboutNew centerAlign">
    <div class="container">
      <?php the_field('section_1_heading'); ?>
      <?php the_field('section_1_content'); ?>
      <h2><span><?php the_field('section_2_heading'); ?></span></h2>
    </div>
  </section>

  <section class="mapAbout">
    <div id="map" style="width: 100%; height: 300px;" data-address="<?php the_field('section_2_map_address'); ?>" data-latitude="<?php the_field('section_2_map_latitude'); ?>" data-lognitude="<?php the_field('section_2_map_lognitude'); ?>"></div>
  </section>

  <?php if( have_rows('section_3_listing') ): while ( have_rows('section_3_listing') ) : the_row();$i++; ?>

  <section class="body_section <?php if($i%2==1){ ?>storySec<?php } ?> aboutStory aboutHead">
    <div class="container">
		<h2><span><?php the_sub_field('heading'); ?></span></h2>
      <div class="row <?php if($i%2==0){ ?>flex-row-reverse<?php } ?>">
        <div class="col-lg-5">
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
          <div class="nVideoFrame">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/images/videolaptop.png" alt="video frame">
            </figure>
            <div class="nVideo">
              <?php the_sub_field('video'); ?>
            </div>
          </div>
          <?php
            }
          ?>
        </div>
        <div class="col-lg-7">
          <?php the_sub_field('content'); ?>
        </div>
      </div>
    </div>
  </section>

  <?php endwhile;endif; ?>

  <section class="body_section aboutHead meetTeam">
    <div class="topSection aboutNew centerAlign">
      <div class="container">
		<h2><span><?php the_field('section_4_heading'); ?></span></h2>
        <?php the_field('section_4_content'); ?>
        <div class="meetTab">
          <div class="meetMenu">
            <div class="listWrap">
              <?php if( have_rows('section_4_listings') ): while ( have_rows('section_4_listings') ) : the_row();$i++; ?>
              <span class="list">
                <a href="javascript:void(0);"><?php the_sub_field('category'); ?></a>
              </span>
              <?php endwhile;endif; ?>
            </div>
          </div>
          <div class="meetMain">
            <div class="container">
              <?php if( have_rows('section_4_listings') ): while ( have_rows('section_4_listings') ) : the_row();$i++; ?>
              <div class="singleMeetRow">
                <div class="meetPan meetSlide">
                  <?php
                    $team_list=get_sub_field('team_list');
                    if($team_list){
                      foreach($team_list as $team){
                  ?>
                  <div class="singleSlide">
                    <div class="row">
                      <div class="col-md-4">
                        <?php if($team['team_list_image']){ ?>
                        <figure>
                          <img src="<?php echo $team['team_list_image']['url']; ?>" alt="<?php echo $team['team_list_image']['alt']; ?>">
                        </figure>
                        <?php } ?>
                      </div>
                      <div class="col-md-8">
                        <div class="inner">
                          <?php echo $team['team_list_content']; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                      }
                    }
                  ?>
                </div>
              </div>
              <?php endwhile;endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <?php
    $section_5_heading=get_field('section_5_heading');
    if($section_5_heading){
  ?>
  <section class="body_section worldMapSec">
    <div class="container">
	  <h2><span><?php echo $section_5_heading; ?></span></h2>
      <div class="" id="interactive_map" style="width: 100%; height: 100%;"></div>
      <div class="mapDesc">
        <ul>
          <?php
            if( have_rows('map_color_listing') ): while ( have_rows('map_color_listing') ) : the_row();
            $color=get_sub_field('color');
            $heading=get_sub_field('heading');
            if($heading){
          ?>
          <li>
            <span <?php if($color){ ?>style="background-color:<?php echo $color; ?>"<?php } ?>></span>
            <em><?php echo $heading; ?></em>
          </li>
          <?php
            }
            endwhile;endif;
            $map_note=get_field('map_note');
            if($map_note){
          ?>
          <li>
            <strong>note</strong>
            <small><?php echo $map_note; ?></small>
          </li>
          <?php
            }
          ?>
        </ul>
      </div>
    </div>
  </section>
  <?php
    }
  ?>
</div>

<?php endwhile;endif; ?>
<style type="text/css">
  .tt_sm{
    border-radius: 10px;
    box-shadow: 0px 0px 2px #F00;
    z-index: 1000000;
    background-color: rgba(255, 232, 232, 0.999);
    padding: 15px;
    opacity:0.9;
    line-height: 1.3;
    text-align: center;
    font-size: 15px;
    font-family: 'Source Sans Pro', sans-serif;
    text-transform: uppercase;
    color: #F00;
    position: relative;
  }
  .tt_name_sm{
    font-weight: bold;
    font-size: 20px;
    margin: 0 0 5px;
    font-weight: 600;
    text-align: center;
    display: block;
  }
  .xmark_sm{
    position: absolute;
    right: 3px;
    top: 3px;
    color: #ffb4b5;
    float: right;
    margin-left: 5px;
    cursor: pointer;
    line-height: 0px;
  }
  .tt_custom_sm{
    display: inline-block;
    font-size: 15px;
    line-height: 1.3;
    color: #000;
    text-transform: capitalize;
  }
  .tt_mobile_sm{
    text-align: center;
    margin-top: 5px;
    font-size: 15px;
    line-height: 1.3;
    color: #000;
    text-transform: capitalize;
  }
  .btn_simplemaps{
    text-align: center;
    color: black;
    text-decoration: none;
    background: #ffffff;
    display: inline-block;
    padding: 5px 5px;
    margin: 0;
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    line-height: 1.43;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid;
    border-radius: 4px;
  }
  .btn_simplemaps:hover{
    text-decoration: underline;
  }
</style>

<script type="text/javascript">

  var simplemaps_worldmap_mapdata={
  main_settings: {
    //General settings
    width: 'responsive', //or 'responsive'
		background_color: '#FFFFFF',
		background_transparent: 'yes',
		border_color: '#ffffff',
		popups: 'on_click', //on_click, on_hover, or detect

		//State defaults
		state_description:   '',
		state_color: '#b2b2b2',
		state_hover_color: 'rgba(253,133,135,0.7)',
		state_url: '',
		border_size: 0.5,
		all_states_inactive: 'no',
		all_states_zoomable: 'no',

		//Location defaults
		location_description:  'Location description',
		location_color: '#FF0067',
		location_opacity: 0.8,
		location_hover_opacity: 1,
		location_url: '',
		location_size: 25,
		location_type: 'square', // circle, square, image
		location_image_source: 'frog.png', //name of image in the map_images folder
		location_border_color: '#FFFFFF',
		location_border: 2,
		location_hover_border: 2.5,
		all_locations_inactive: 'no',
		all_locations_hidden: 'no',

		//Labels
    label_description:  'Label description',
		label_color: '#d5ddec',
		label_hover_color: '#d5ddec',
		label_size: 22,
		label_font: 'Arial',
		hide_labels: 'no',

		//Zoom settings
		zoom: 'no', //use default regions
		back_image: 'no', //Use image instead of arrow for back zoom
		initial_back: 'no', //Show back button when zoomed out and do this JavaScript upon click
		initial_zoom: -1,  //-1 is zoomed out, 0 is for the first continent etc
		initial_zoom_solo: 'no', //hide adjacent states when starting map zoomed in
		region_opacity: 0,
		region_hover_opacity: 0,
		zoom_out_incrementally: 'yes',  // if no, map will zoom all the way out on click
		zoom_percentage: .99,
		zoom_time: .5, //time to zoom between regions in seconds
		arrow_color: "#cecece",
    arrow_color_border: "#808080",

		//Popup settings
		popup_color: '#FFF',
		popup_opacity: .9,
		popup_shadow: 1,
		popup_corners: 10,
		// popup_font: '15px/1.5 Source Sans Pro, sans-serif;',
		popup_nocss: 'yes', //'yes', to use your own css

		//Advanced settings
		div: 'interactive_map',
		auto_load: 'yes',
		url_new_tab: 'yes',
		images_directory: 'default', //e.g. 'map_images/'
		fade_time:  0.1, //time to fade out
		link_text: 'View Website'  //Text mobile browsers will see for links
	},
  state_specific: {
    <?php
      if( have_rows('map_details') ): while ( have_rows('map_details') ) : the_row();
      $country=get_sub_field('country');
      $name=get_sub_field('name');
      $description=get_sub_field('description');
      $color=get_sub_field('color');
      $hover_color=get_sub_field('hover_color');
      $link=get_sub_field('link');
      if($country){
    ?>
		"<?php echo $country; ?>":{
			name: "<?php echo $name; ?>",
			description: "<?php echo $description; ?>",
			color: "<?php echo $color; ?>",
			hover_color: "<?php echo $hover_color; ?>",
			url: "<?php echo $link; ?>",
		},
    <?php
      }
      endwhile;endif;
    ?>
	},
  labels: {
    label_color: "#d5ddec",
    label_hover_color: "#d5ddec",
    label_size: 22,
    label_font: "Arial",
    hide_labels: "no"
  }
};

</script>
<!-- <div class="newAbtBot">
  </?php include(TEMPLATEPATH . '/includes/clients.php'); ?>
</div> -->
<?php get_footer(); ?>

<script type="text/javascript">
$(document).ready(function(){
  $(".meetSlide").slick({
    arrows: false,
    dots: true,
    autoplay: true,
    adaptiveHeight: true,
    speed: 1000,
    autoplaySpeed: 4000,
  });

  $(".listWrap").slick({
    arrows: true,
    dots: false,
    autoplay: false,
    adaptiveHeight: true,
    speed: 300,
    autoplaySpeed: 2000,
    infinite: false,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
          arrows: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          arrows: true
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: true
        }
      },
      {
        breakpoint:360,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: true
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.meetMenu .list:first-child').addClass('active');
  $('.singleMeetRow:first-child').addClass('show');
  $('.meetMenu .list').click(function(){
    var index = $(this).index();
    $('.meetMenu .list').removeClass('active');
    $(this).addClass('active');
    $('.singleMeetRow').removeClass('show');
    $('.singleMeetRow').eq(index).addClass('show');
    return false;
  });
});
</script>
<script>
 //use .one to ensure this only happens once

/*
 $(".playVideo").fancybox({
   onClosed: function() {
     alert();
     $('#videoMain iframe')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
   })
 });
 $(".playVideo").click(function(){
  //as noted in addendum, check for querystring exitence
  var symbol = $("#videoMain iframe")[0].src.indexOf("?") > -1 ? "&" : "?";
  //modify source to autoplay and start video
  $("#videoMain iframe")[0].src += symbol + "autoplay=1";
});*/

</script>
