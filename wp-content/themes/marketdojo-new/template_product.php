<?php /* Template Name: Product */ ?>
<?php get_header(); ?>   
<!-- body content start -->
<div class="body_content">

    <div class="body_section product_tree_main_box product_sourcing">

        <div class="parallax_items left_items">
            <?php $i = 0; ?>
            <?php
            while (have_rows('section_1_left_items')): the_row();
                $left_image = get_sub_field('section_1_left_items_image');
                $i++;
                ?>
                <span class="item item_<?php echo $i; ?>">
                    <img src="<?php echo $left_image['url']; ?>" alt="<?php echo $left_image['alt']; ?>"></span>
            <?php endwhile; ?>  
        </div>
        <div class="parallax_items right_items">
            <?php $i = 0; ?>
            <?php
                while (have_rows('section_1_right_items')): the_row();
                $right_image = get_sub_field('section_1_right_items_image');
                $i++;
            ?>
                <span class="item item_<?php echo $i; ?>">
                    <img src="<?php echo $right_image['url']; ?>" alt="<?php echo $right_image['alt']; ?>">
                </span>
            <?php endwhile; ?>  
        </div>

        <div class="title_content">
            <div class="content">
                <h2><span><?php the_field('section_1_middle_circle_heading'); ?></span></h2>
                <p><?php the_field('section_1_middle_circle_desc'); ?></p>
            </div>
        </div>
        <?php
			$i=0;
			$q=0;
			$class_name = array("0"=>"left", "1"=>"center", "2"=>"right","3"=>"first", "4"=>"second", "5"=>"third", "6"=>"fourth", "7"=>"last","8"=>"first", "9"=>"second", "10"=>"third","11"=>"fourth", "12"=>"fifth", "13"=>"sixth");
			if( have_rows('section_1_sourcing_list') ): while ( have_rows('section_1_sourcing_list') ) : the_row();
			$i++;
				if($i==1){
			?>
            <div class="three_sub_child_box">
            <?php
				}elseif($i==4){
			?>
			</div>
            <div class="circle_line line_second">
            <?php
				}elseif($i==9){
			?>
			</div>
            <div class="circle_line third_line">
            <?php 
				}
			?>
              	<?php
					$j=$i-1;
					$title = get_sub_field('sourcing_list_title');
					$title_new = str_replace(" ","_",$title).$i;
					$image = get_sub_field('sourcing_list_image');
					$color = get_sub_field('color');
					if($i<4){
				?>
               	<style>
				   	.three_sub_child_box .each_round_holder .icon_holder.<?php echo $title_new; ?>:hover {
						box-shadow: 0px 0px 35px <?php echo $color; ?>;
						cursor: pointer;
					}
					.three_sub_child_box .each_round_holder .icon_holder.<?php echo $title_new; ?> {
						border-color: <?php echo $color; ?>;
					}
				</style>
              	<?php
					}else{
						
					}
				?>
               	<style>
				   	.circle_line .each_round_holder .icon_holder.<?php echo $title_new; ?>:hover {
						box-shadow: 0px 0px 35px <?php echo $color; ?>;
						cursor: pointer;
					}
					.circle_line .each_round_holder .icon_holder.<?php echo $title_new; ?> {
						border-color: <?php echo $color; ?>;
					}
				</style>
                <div class="each_round_holder <?php echo $class_name[$j]; if($i==3){echo " active";} ?>">
                    <span class="icon_holder <?php echo $title_new; ?>">
						<img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
					</span>
					<span class="title"><?php echo $title; ?></span>
				</div>
            <?php
				if($i==15){
			?>
			</div>
       		<?php
				}
			?>
       		<?php
				if($i<15 || $i<9){
					$q=1;
				}else{
					$q=0;
				}
			endwhile;endif;
			if($q==1){
			?>
			</div>
			<?php	
			}
       		?>
    </div>





    <!-- inner menu secondary -->
    <section class="secondary_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                <figure class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $flatsome_opt['site_logo']; ?>" alt="logo"></a></figure>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="menu">
                    <?php wp_nav_menu( array( 'container' => '', 'theme_location' => 'product', 'menu_class' => '') ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner menu secondary -->


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
                    <img src="<?php echo $Section_4_image['url']; ?>" alt="<?php echo $Section_4_image['url']; ?>">
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
<?php include(TEMPLATEPATH . '/includes/testimonials.php'); ?>
    <!-- client testimonial sec end -->
</div>
<!-- body content end -->
<?php get_footer(); ?>