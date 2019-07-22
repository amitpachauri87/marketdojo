<?php get_header(); ?>
<?php
   $value_new="";
   $level_1="";
   $level_2="";
   $level_3="";
   if(isset($_GET['value']) && !empty($_GET['value'])){
       $value_new=$_GET['value'];
   }
   if(isset($_GET['level_1']) && !empty($_GET['level_1'])){
       $level_1=$_GET['level_1'];
   }
   if(isset($_GET['level_2']) && !empty($_GET['level_2'])){
       $level_2=$_GET['level_2'];
   }
   if(isset($_GET['level_3']) && !empty($_GET['level_3'])){
       $level_3=$_GET['level_3'];
   }

   $banner_background_image=get_field('banner_background_image',2500);
   $banner_left_image=get_field('banner_left_image',2500);
   $banner_right_heading=get_field('banner_right_heading',2500);
   $banner_sub_heading=get_field('banner_sub_heading',2500);
   $banner_button_1_text=get_field('banner_button_1_text',2500);
   $banner_button_1_link=get_field('banner_button_1_link',2500);
   $banner_button_2_text=get_field('banner_button_2_text',2500);
   $banner_button_2_link=get_field('banner_button_2_link',2500);
   $text_color=get_field('banner_text_color',2500);
   $banner_button_1_border_background_color=get_field('banner_button_1_border_background_color',2500);
   $banner_button_1_border_hover_color=get_field('banner_button_1_border_hover_color',2500);
   $banner_button_1_text_color=get_field('banner_button_1_text_color',2500);
   $banner_button_1_text_hover_color=get_field('banner_button_1_text_hover_color',2500);
   $banner_button_2_border_color=get_field('banner_button_2_border_color',2500);
   $banner_button_2_hover_border_background_color=get_field('banner_button_2_hover_border_background_color',2500);
   $banner_button_2_text_color=get_field('banner_button_2_text_color',2500);
   $banner_button_2_text_hover_color=get_field('banner_button_2_text_hover_color',2500);
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
<section class="banner">
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
   ?>
<!-- body content start -->
<div class="body_content">
   <section class="body_section filter_sec filterFourColumn">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="filter_holder clear">
    						<form action="<?php bloginfo('url'); ?>" name="filter_frm" id="filter_frm">
    							<div class="formRowSpl">
    								<span class="title">filter</span>

    								<div class="select_box1 filterBox">
    									<?php
    										$resourcecats = get_terms( array(
    											'taxonomy' => 'resource-cat',
    											'hide_empty' => false,
    											'parent'	=>	0
    										) );
    										if ( ! empty( $resourcecats ) && ! is_wp_error( $resourcecats ) ){
    									?>
    										<select name="level_1" id="level_1">
    											<option value="">All Types</option>
    										<?php
    											foreach ( $resourcecats as $resourcecat ) {
    												$resourcecat_id=$resourcecat->term_id;
    												$resourcecat_name=$resourcecat->name;
    										?>
    											<option value="<?php echo $resourcecat_id; ?>" <?php if($level_1==$resourcecat_id){ echo "selected"; } ?>><?php echo $resourcecat_name; ?></option>
    											<?php
    											}
    										?>
    										</select>
    									<?php
    										}
    									?>
    								</div>

    								<div class="select_box2 filterBox">
                      <select name="level_2" id="level_2">
                        <option value="">Select</option>
                        <?php
                          if($level_1){
        										$resourcecats = get_terms( array(
        											'taxonomy' => 'resource-cat',
        											'hide_empty' => false,
        											'parent'	=>	$level_1
        										) );
        										if ( ! empty( $resourcecats ) && ! is_wp_error( $resourcecats ) ){
        								?>

                              <?php if($level_1=='117'){ ?>
                              <option value="blog_by_year" <?php if($level_2=='blog_by_year'){ echo "selected"; } ?>>Blogs By Year</option>
                              <?php } ?>
        										<?php
        											foreach ( $resourcecats as $resourcecat ) {
        												$resourcecat_id=$resourcecat->term_id;
        												$resourcecat_name=$resourcecat->name;
        										?>
        											<option value="<?php echo $resourcecat_id; ?>" <?php if($level_2==$resourcecat_id){ echo "selected"; } ?>><?php echo $resourcecat_name; ?></option>
        											<?php
        											}
        										?>

        								<?php
        										}
                          }else{
                            $resourcecats = get_terms( array(
      												'taxonomy' => 'resource-cat',
      												'hide_empty' => false,
      												'parent'	=>	0
      											) );
      											if ( ! empty( $resourcecats ) && ! is_wp_error( $resourcecats ) ){
      												foreach ( $resourcecats as $resourcecat ) {
      													$resourcecat_id=$resourcecat->term_id;
      													$resourcecats_child = get_terms( array(
      														'taxonomy' => 'resource-cat',
      														'hide_empty' => false,
      														'parent'	=>	$resourcecat_id
      													) );
      													if ( ! empty( $resourcecats_child ) && ! is_wp_error( $resourcecats_child ) ){
      														foreach ( $resourcecats_child as $resourcecat_child ) {
      															$resourcecat_child_id=$resourcecat_child->term_id;
      															$resourcecat_child_name=$resourcecat_child->name;
      									?>
      										<option value="<?php echo $resourcecat_child_id; ?>" <?php if($level_2==$resourcecat_child_id){ echo "selected"; } ?>><?php echo $resourcecat_child_name; ?></option>
      									<?php
      														}
      													}
      												}
      											}
                          }
      									?>
                      </select>
    								</div>

    								<div class="select_box2 filterBox">
                      <?php
                      if($level_2){
                        if($level_2=='blog_by_year'){
                      ?>
                      <select name="level_3" id="level_3">
                        <option value="">Select</option>
                        <?php
                          $args = array(
                            'type'            => 'yearly',
                            'limit'           => '50',
                            'format'          => 'option',
                            'before'          => '',
                            'after'           => '',
                            'show_post_count' => false,
                            'echo'            => 1,
                            'order'           => 'DESC',
                            'post_type'     => 'resource'
                          );
                          wp_get_archives( $args );
                        ?>
                      </select>
                      <?php
                        }else{
    									?>
    										<select name="level_3" id="level_3">
    											<option value="">Select</option>
      										<?php

                              $resourcecats = get_terms( array(
                                'taxonomy' => 'resource-cat',
                                'hide_empty' => false,
                                'parent'	=>	$level_2
                              ) );
                              if ( ! empty( $resourcecats ) && ! is_wp_error( $resourcecats ) ){
          											foreach ( $resourcecats as $resourcecat ) {
          												$resourcecat_id=$resourcecat->term_id;
          												$resourcecat_name=$resourcecat->name;
      										?>
      											<option value="<?php echo $resourcecat_id; ?>" <?php if($level_3==$resourcecat_id){ echo "selected"; } ?>><?php echo $resourcecat_name; ?></option>
      										<?php
          											}
                              }
      										?>
    										</select>
    									<?php
                        }
                      }else{
                      ?>
                      <select name="level_3" id="level_3">
                        <option value="">Select</option>
                      <?php
                        $resourcecats = get_terms( array(
  												'taxonomy' => 'resource-cat',
  												'hide_empty' => false,
  												'parent'	=>	0
  											) );
  											if ( ! empty( $resourcecats ) && ! is_wp_error( $resourcecats ) ){
  												foreach ( $resourcecats as $resourcecat ) {
  													$resourcecat_id=$resourcecat->term_id;
  													$resourcecats_child = get_terms( array(
  														'taxonomy' => 'resource-cat',
  														'hide_empty' => false,
  														'parent'	=>	$resourcecat_id
  													) );
  													if ( ! empty( $resourcecats_child ) && ! is_wp_error( $resourcecats_child ) ){
  														foreach ( $resourcecats_child as $resourcecat_child ) {
  															$resourcecat_child_id=$resourcecat_child->term_id;
  															$resourcecats_sub_child = get_terms( array(
  																'taxonomy' => 'resource-cat',
  																'hide_empty' => false,
  																'parent'	=>	$resourcecat_child_id
  															) );
  															if ( ! empty( $resourcecats_sub_child ) && ! is_wp_error( $resourcecats_sub_child ) ){
  																foreach ( $resourcecats_sub_child as $resourcecat_sub_child ) {
  																	$resourcecat_sub_child_id=$resourcecat_sub_child->term_id;
  																	$resourcecat_sub_child_name=$resourcecat_sub_child->name;
  										?>
  										<option value="<?php echo $resourcecat_sub_child_id; ?>"><?php echo $resourcecat_sub_child_name; ?></option>
  										<?php
  																}
  															}
  														}
  													}
  												}
  											}
                      ?>
                      </select>
                      <?php
                      }
    									?>
    								</div>
    							</div>
    							<div class="formRowSpl">
    								<div class="select_box3 filterBox">
    									<select name="value" id="">
    										<option value="host_participant">Host &amp; Participant</option>
    										<option value="host">Host</option>
    										<option value="participant">Participant</option>
    									</select>
    								</div>

    								<div class="search_box filterBox clear">
      								<input type="text" placeholder="Search for Resources" name="s">
      								<button type="submit"><i class="fa fa-search"></i><span>Search</span></button>
      							</div>
    							</div>
    						</form>
    					</div>
            </div>
         </div>
      </div>
   </section>
   <!-- listing section start -->
   <section class="body_section listing_sec">
      <div class="container">
         <h2><a href="javascript:void(0);"><span>Search Result <?php echo $categoryName; ?></span></a></h2>
         <?php if (have_posts()) : ?>
         <div class="row">
            <?php
               while (have_posts()) : the_post();
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
                     <?php
                        /*$terms = get_the_terms( get_the_ID(), 'resource-cat' );
                        if ( $terms && ! is_wp_error( $terms ) ) :
                        	$draught_links = array();
                        	foreach ( $terms as $term ) {
                        		$draught_links[] = $term->name;
                        	}
                        	$on_draught = join( ", ", $draught_links );
                        ?>
                     <figcaption><?php printf( esc_html__( '%s', 'textdomain' ), esc_html( $on_draught ) ); ?></figcaption>
                     <?php endif;*/ ?>
                  </div>
                  <h3><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></a></h3>
                  <p><?php echo substr(strip_tags(get_the_content()), 0, 180); ?>...<a href="<?php the_permalink(); ?>">more</a>
                  </p>
               </div>
            </div>
            <?php
               endwhile;
               ?>
         </div>
         <?php
            else:
            echo "<p>No Resources Found.</p>";
            endif;
            wp_reset_query();
            ?>
      </div>
   </section>
   <!-- listing section end -->
   <?php include(TEMPLATEPATH.'/includes/testimonials.php'); ?>
</div>
<!-- body content end -->
<?php get_footer(); ?>
<?php
   if($level_2=='blog_by_year'){
?>
<script>
   $("#level_3 option").each(function(){
       var text=$(this).text();
       var trimText=$.trim(text);
       if(trimText!='Year'){
          $(this).val(trimText);
       }
       if(trimText=='<?php echo $_GET['level_3']; ?>'){
          $(this).attr('selected','selected');
       }
   });
</script>

<?php
   }
?>
