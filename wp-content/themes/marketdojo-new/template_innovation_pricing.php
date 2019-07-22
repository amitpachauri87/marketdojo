<?php /* Template Name: Innovation Pricing */ ?>
<?php get_header(); ?>
<!-- cleint Sec Start -->
<?php include(TEMPLATEPATH . '/includes/clients.php'); ?>
<!-- body content start -->
<div class="body_content">


    <!-- pricing section start -->
    <section class="pricing_page_sec others_pricing_page_sec">
        <div class="container">
            <div class="plan_choose choose_plan_holder clear">
                <div class="plan_left">
                    <h2 class="title">Choose a plan that works for you</h2>
                </div>
                <div class="currency_boc currency_chooser clear">
                    <span class="title_choose">Choose your currency</span>
                    <div class="custom_select currencyHolder">
                        <span class="show selected_currency clear">
                            <span class="value_show currency" data-value="gbp"><i class="fa fa-gbp"></i> (GBP)</span>
                            <span class="icon_drop drop_ico"><i class="fa fa-caret-down"></i></span>
                        </span>
                        <div class="currency_list">
                            <ul class="show_list">
                                <li data-value="gbp"><span class="each_currency"><i class="fa fa-gbp"></i> (GBP)</span></li>
                                <li data-value="eur"><span class="each_currency"><i class="fa fa-euro"></i> (EUR)</span></li>
                                <li data-value="usd"><span class="each_currency"><i class="fa fa-usd"></i> (USD)</span></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            
            <div class="plan_box_holder pricing_table_main_holder others_pricing_table_main_holder clear">

            <?php
                $query = new WP_Query( array( 'p' => 3113  ,'post_type'=>'marketdojopricingbox') );
                if ( $query->have_posts() ) : while ( $query->have_posts() ): $query->the_post();
            ?>

                <div class="each_plan_box each_table">
                    <div class="each_table_cont blackBox">
                        <h2><?php the_title(); ?></h2>
                        <div class="billing_details">
                            <div class="content">
                                <div class="users">
                                    <span class="single"><?php the_field('no_of_user_text'); ?></span>
                                </div>
                                <span class="price"><?php the_field('pricing_section_text'); ?></span>
                                <span class="billDetails">
                                    <?php the_field('sub_heading'); ?>
                                </span>
                            </div>
                        </div>
                        <div class="options">
                            <ul>
                                <?php if( have_rows('box_details') ): while ( have_rows('box_details') ) : the_row(); ?>
                                <li><?php the_sub_field('content'); ?></li>
                                <?php endwhile;endif; ?>
                            </ul>
                        </div>
                        <div class="btn_holder">
                            <?php
							$button_type = get_field('button_type');
							if( $button_type && in_array('yes', $button_type) ){
							?>
                            <a data-fancybox href="#post-<?php the_field('choose_form'); ?>" class="btn_pricing"><?php the_field('button_text'); ?></a>
							<?php }else{ ?>
							<a href="<?php the_field('button_link'); ?>" class="btn_pricing"><?php the_field('button_text'); ?></a>
							<?php } ?>
                        </div>
					</div>
                </div>

            <?php
                endwhile;endif;
                wp_reset_query();
            ?>

            <?php
                $query = new WP_Query( array( 'p' => 3133  ,'post_type'=>'marketdojopricingbox') );
                if ( $query->have_posts() ) : while ( $query->have_posts() ): $query->the_post();
            ?>
                <div class="each_table">
                    <div class="each_table_cont blueBox">
                        <h2><?php the_title(); ?></h2>

                        <div class="fees billing_details">
                            <div class="cel content">
                                
                                <div class="user_stat users">
                                    <span class="label">Number of Users</span>
                                    <select name="" id="price-monthly-select">
                                    <?php
                                        if( have_rows('no_of_user_select_box') ): while ( have_rows('no_of_user_select_box') ) : the_row();
                                    ?>
                                        <option value="<?php the_sub_field('number'); ?>"><?php the_sub_field('number'); ?></option> 
                                    <?php
                                        endwhile;endif;
                                    ?>
                                    </select>
                                </div>
                                <span class="user_price price">
                                    <i class="fa fa-gbp"></i><i class="fa fa-euro" style="display: none;"></i><i class="fa fa-usd" style="display: none;"></i><span id="price-monthly"><?php the_field('default_price'); ?></span>/<em><?php the_field('default_duration'); ?></em>
                                </span>
                                <span class="billDetails note">
                                    (Alternatively <i class="fa fa-gbp"></i><i class="fa fa-euro" style="display: none;"></i><i class="fa fa-usd" style="display: none;"></i><span id="price-monthly-extra_user"><?php the_field('sub_heading_price'); ?></span> <span id="price-monthly-extra_user_text"><?php the_field('sub_heading_text'); ?></span>)
                                </span>
                            </div>
                        </div>
                        <div class="options">
                            <ul>
                                <?php if( have_rows('box_details') ): while ( have_rows('box_details') ) : the_row(); ?>
                                <li><?php the_sub_field('content'); ?></li>
                                <?php endwhile;endif; ?>
                            </ul>
                        </div>
                        <div class="btn_holder">
                            <?php
							$button_type = get_field('button_type');
							if( $button_type && in_array('yes', $button_type) ){
							?>
                            <a data-fancybox href="#post-<?php the_field('choose_form'); ?>" class="btn_pricing"><?php the_field('button_text'); ?></a>
							<?php }else{ ?>
							<a href="<?php the_field('button_link'); ?>" class="btn_pricing"><?php the_field('button_text'); ?></a>
							<?php } ?>
                    </div>
                </div>
                
            <?php
                endwhile;endif;
                wp_reset_query();
            ?>

            </div>
        </div>
    </section>
    <!-- pricing section end -->


    <!-- practice event -->
    <section class="body_section practice_event_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <h2><span><?php the_field('section_2_heading'); ?></span></h2>
                    <?php the_field('section_2_description'); ?>
                    <a href="<?php the_field('section_2_button_link'); ?>" class="btn"><?php the_field('section_2_button_link_name'); ?></a>
                </div>
                <?php
                $section_2_Image = get_field('section_2_image');
                if ($section_2_Image) {
                    ?>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <figure><img src="<?php echo $section_2_Image['url']; ?>" alt="<?php echo $section_2_Image['alt']; ?>"></figure>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- pracdtce event -->

    <!-- compare table function -->
    <section class="compare_table_sec">
        <div class="container">
            <h3><?php the_field('section_3_heading'); ?></h3>
            <div class="table_holder_main">
                <table name="price_compare_table" id="price_compare_table" border="0" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?php the_field('section_3_heading_1_'); ?></th>
                            <th class="blackBox"><?php the_field('section_3_heading_2'); ?></th>
                            <th class="blueBox"><?php the_field('section_3_heading_3'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="heading">
                            <td><?php the_field('section_3_heading_4'); ?> (for <span id="user_no_table">1</span> users)</td>
                            <td><?php the_field('section_3_heading_5'); ?></td>
                            <td><i class="fa fa-gbp"></i><i class="fa fa-euro" style="display: none;"></i><i class="fa fa-usd" style="display: none;"></i><span id="price-annual_table"><?php the_field('section_3_heading_6'); ?></span></td>
                        </tr>
                        <tr class="heading">
                            <td class="heading"><?php the_field('section3_repeater__heading_1'); ?></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <?php if (have_rows('section3_repeater')): ?>
                            <?php while (have_rows('section3_repeater')): the_row(); ?>
                                <tr>
                                    <td>
                                        <?php the_sub_field('section3_capability_heading'); ?>
                                        <span class="toolTip_holder">
                                            <span class="tool_tip_ico"><i class="fa fa-info"></i></span>
                                            <span class="details"><?php the_sub_field('tooltip'); ?></span>
                                        </span>
                                    </td>
                                    <?php
                                    $section3_coming_soon_check = get_sub_field('section3_coming_soon_check');
                                    if ($section3_coming_soon_check) {
                                        ?>
                                        <td><i class="fa fa-check"></i></td>
                                        <?php
                                    } else {
                                        ?>
                                        <td>-</td>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                    $section3_pricing_check = get_sub_field('section3_pricing_check');
                                    if ($section3_pricing_check) {
                                        ?>
                                        <td><i class="fa fa-check"></i></td>
                                        <?php
                                    } else {
                                        ?>
                                        <td><?php the_sub_field('section3_pricing_check_name'); ?></td>
                                        <?php
                                    }
                                    ?>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?> 
                        <tr class="heading">
                            <td class="heading"><?php the_field('section3_repeater__heading_2'); ?></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <?php if (have_rows('section3_repeater_2')): ?>
                            <?php while (have_rows('section3_repeater_2')): the_row(); ?>
                                <tr>
                                    <td>
                                        <?php the_sub_field('section3_capability_heading'); ?>
                                        <span class="toolTip_holder">
                                            <span class="tool_tip_ico"><i class="fa fa-info"></i></span>
                                            <span class="details"><?php the_sub_field('tooltip'); ?></span>
                                        </span>
                                    </td>
                                    <?php
                                    $section3_coming_soon_check = get_sub_field('section3_coming_soon_check');
                                    if ($section3_coming_soon_check) {
                                        ?>
                                        <td><i class="fa fa-check"></i></td>
                                        <?php
                                    } else {
                                        ?>
                                        <td>-</td>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                    $section3_pricing_check = get_sub_field('section3_pricing_check');
                                    if ($section3_pricing_check) {
                                        ?>
                                        <td><i class="fa fa-check"></i></td>
                                        <?php
                                    } else {
                                        ?>
                                        <td><?php the_sub_field('section3_pricing_check_name'); ?></td>
                                        <?php
                                    }
                                    ?>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?> 
                        <tr class="heading">
                            <td>&nbsp;</td>
                            <td>
							<?php
							$section_3_button_1_popup = get_field('section_3_button_1_popup');
							if( $section_3_button_1_popup && in_array('yes', $section_3_button_1_popup) ){
							?>
                            <a data-fancybox href="#post-<?php the_field('section_3_button_1_form'); ?>" class="btn_table blackBox"><?php the_field('section_3_button_1_text'); ?></a>
							<?php }else{ ?>
							<a href="<?php the_field('section_3_button_1_link'); ?>" class="btn_table blackBox"><?php the_field('section_3_button_1_text'); ?></a>
							<?php } ?>
							</td>
                            <td>
							<?php
							$section_3_button_2_popup = get_field('section_3_button_2_popup');
							if( $section_3_button_2_popup && in_array('yes', $section_3_button_2_popup) ){
							?>
                            <a data-fancybox href="#post-<?php the_field('section_3_button_2_form'); ?>" class="btn_table blueBox"><?php the_field('section_3_button_2_text'); ?></a>
							<?php }else{ ?>
							<a href="<?php the_field('section_3_button_2_link'); ?>" class="btn_table blueBox"><?php the_field('section_3_button_2_text'); ?></a>
							<?php } ?>
							</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- compare table function -->

    <!-- add ones section -->
    <section class="body_section add_ones_sec">
        <div class="container">
            <h2><span><?php the_field('section4_heading_'); ?></span></h2>
            <div class="add_ones_holder clear">
                <?php if (have_rows('section_4_contant')): ?>
                    <?php
                    while (have_rows('section_4_contant')): the_row();
                        $section4image = get_sub_field('section_4_image');
                        ?>
                        <div class="each_sec clear">
                            <span class="icon"><img src="<?php echo $section4image['url']; ?>" alt="<?php echo $section4image['alt']; ?>"></span>
                            <div class="content">
                                <h4> <?php the_sub_field('section_4_title'); ?></h4>
                                <?php the_sub_field('section_4_description'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?> 

            </div>
        </div>
    </section>
    <!-- add ones section -->

	<?php include(TEMPLATEPATH . '/includes/testimonials.php'); ?>

    <!-- faq section start -->
    <section class="body_section features_faq">
        <div class="container">
            <h2><span><?php the_field('additional_feature_title');?></span></h2>
            <div class="faq_holder">
                <?php $i = 0; ?>
            <?php
                while (have_rows('additional_feature')): the_row();
                  $i++;
                ?>
                <div class="rowFaq">
                <h3 <?php if($i==1){ ?> class="active"<?php } ?>><?php the_sub_field('additional_feature_title'); ?></h3>
                <div  class="content <?php if($i==1){ ?>active<?php } ?>">
                <?php the_sub_field('additional_feature_description'); ?>    
                </div>
							</div>
                <?php endwhile; ?>  
            </div>
            <div class="more_question">
            <?php the_field('additional_feature_more_question'); ?>    
            </div>
        </div>
    </section>
    <!-- faq section end -->

    <section class="body_section features_faq">
        <div class="container">
        <?php the_content(); ?>
         </div>
    </section>
    
<?php get_footer(); ?>

<script>
    $(document).ready(function(){
        $('[data-fancybox]').fancybox({
            //protect: true
        });
    });
</script>