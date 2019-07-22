<?php /*Template Name: Landing3*/ ?>
<?php get_header(); ?>

    <?php
      $section_1_background_image=get_field('section_1_background_image');
      $section_1_heading=get_field('section_1_heading');
      $section_1_sub_heading=get_field('section_1_sub_heading');
      $section_1_button_type = get_field('section_1_button_type');
    ?>

    <div class="landingContent">
      <div class="landingBanner" style="background-image: url(<?php echo $section_1_background_image['url']; ?>)">
        <div class="landingBannerCont">
          <div class="container">
            <h1><?php echo $section_1_heading; ?></h1>
            <p><?php echo $section_1_heading; ?></p>
            <?php
              if( $section_1_button_type && in_array('yes', $section_1_button_type) ){
            ?>
              <a data-fancybox href="#post-<?php the_field('choose_form'); ?>"><?php the_field('section_1_button_text'); ?></a>
            <?php }else{ ?>
              <a href="<?php the_field('section_1_button_link'); ?>"><?php the_field('section_1_button_text'); ?></a>
            <?php } ?>
          </div>
        </div>
      </div> <!-- landingBanner -->


      <?php
    		$section_2_heading=get_field('section_2_heading');
        $section_2_background_image=get_field('section_2_background_image');
    	?>
    	<!-- choice section -->
    	<section class="body_section choice_section" style="background-image:url(<?php echo $section_2_background_image['url']; ?>);">
    		<div class="container">
    			<h2><span><?php echo $section_2_heading; ?></span></h2>
    			<div class="choice_box_holder">
    				<div class="row">
    				<?php
    					if( have_rows('section_2_listing') ): while ( have_rows('section_2_listing') ) : the_row();
    					$choice_image=get_sub_field('choice_image');
    					$choice_heading=get_sub_field('choice_heading');
    					$choice_content=get_sub_field('choice_content');
    				?>
    					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    						<div class="choice_box">
    							<?php if($choice_image){ ?>
    							<figure class="ico"><img src="<?php echo $choice_image['url']; ?>" alt="<?php echo $choice_image['alt']; ?>">
    							</figure>
    							<?php } ?>
    							<?php if($choice_heading){ ?>
    							<figcaption><?php echo $choice_heading; ?></figcaption>
    							<?php } ?>
    							<?php if($choice_content){ ?>
    							<!-- <span class="info">no training</span> -->
    							<?php echo $choice_content; ?>
    							<?php } ?>
    						</div>
    					</div>
    				<?php endwhile;endif; ?>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- choice section -->
      <?php
    		$section_3_heading=get_field('section_3_heading');
        $section_3_bottom_text=get_field('section_3_bottom_text');
    	?>
      <div class="body_section whyAuction">
        <h2><span><?php echo $section_3_heading; ?></span></h2>
          <div class="container">
            <div class="whyAuctionListing">
              <ul>
                <?php
                  if( have_rows('section_3_listing') ): while ( have_rows('section_3_listing') ) : the_row();
                    $add_image=get_sub_field('add_image');
                    if($add_image){
                ?>
                <li>
                  <figure><span><img src="<?php echo $add_image['url']; ?>" alt="<?php echo $add_image['alt']; ?>"></figure></span>
                </li>
                <?php
                    }
                  endwhile;endif;
                ?>
              </ul>
              <em><?php echo $section_3_bottom_text; ?></em>
            </div>
          </div>
      </div>
      <?php
        $call_to_action_section_heading=get_field('call_to_action_section_heading');
        $call_to_action_section_sub_heading=get_field('call_to_action_section_sub_heading');
        $call_to_action_button_text = get_field('call_to_action_button_text');
        $call_to_action_popup_button = get_field('call_to_action_popup_button');
        $call_to_action_choose_form = get_field('call_to_action_choose_form');
        $call_to_action_button_link = get_field('call_to_action_button_link');
      ?>
      <div class="landingFooter">
        <div class="landingFooterTop" style="background-image: url(<?php the_field('call_to_action_section_background_image'); ?>);">
          <div class="container">
            <div class="landingFooterTopCont">
              <div class="landingFooterTopLeft">
                <h3><?php echo $call_to_action_section_heading; ?></h3>
                <em><?php echo $call_to_action_section_sub_heading; ?></em>
              </div>
              <div class="landingFooterTopRight">
                <?php
                  if( $call_to_action_popup_button && in_array('yes', $call_to_action_popup_button) ){
                ?>
                  <a data-fancybox href="#post-<?php echo $call_to_action_choose_form; ?>"><?php echo $call_to_action_button_text; ?></a>
                <?php }else{ ?>
                  <a href="<?php echo $call_to_action_button_link; ?>"><?php echo $call_to_action_button_text; ?></a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="landingFooterCopy">
          <div class="container">
            <span><?php the_field('copyright_section_text'); ?></span>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
