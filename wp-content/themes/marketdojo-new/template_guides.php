<?php /* Template Name: Guides */ ?>
<?php get_header(); ?>
<!-- cleint Sec Start -->
<?php
if (have_posts()) :
    while (have_posts()):

        the_post();
        ?>
        <!-- cleint Sec End -->

        <div class="body_content">

            <section class="body_section why_auction_sec">
                <div class="container">
                    <div class="auction_box_holder">
                        <div class="auction_box clear">
                           	<h2><span><?php the_field('sub_heading') ?></span></h2>
                            <?php the_content(); ?>

                        </div>
                    </div>
                </div>
            </section>
            <?php
        endwhile;
    endif;
    ?>

    <?php
    $guide_cat_names = get_terms(array(
        'taxonomy' => 'guide-cat',
        'parent' => 0,
        'hide_empty' => 0
    ));
    $i = 0;
    if ($guide_cat_names) {
        foreach ($guide_cat_names as $guide_cat_name) {
            $i++;
            ?>
            <section class="body_section tutorials_section <?php if ($i != 1) { ?>no_top_padding<?php } ?>">
                <div class="container">
                    <h3><?php echo $guide_cat_name->name; ?></h3>

                    <div class="row">
                        <?php
                        $childrens = get_terms('guide-cat', array(
                            'parent' => $guide_cat_name->term_id
                        ));

                        foreach ($childrens as $children) {

                            $term_id = $children->term_id;
                            //echo $term_id;
                            //print_r($sub_children);
                            //echo $sub_children->name;
                            ?>



                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="tutorial_box">
                                    <h4><?php echo $children->name; ?></h4>

                                    <ul>
                                        <?php
                                        $arr = array(
                                            "post_type" => "guide",
                                            "post_status" => "publish",
                                            'order' => 'ASC',
                                            "tax_query" => array(
                                                array(
                                                    "taxonomy" => "guide-cat",
                                                    "field" => "term_id",
                                                    "terms" => $term_id
                                                ),
                                            ),
                                        );

                                        $guide = new WP_Query($arr);
                                        ?>
                                        <?php if ($guide->have_posts()) : ?>

                                            <?php
                                            while ($guide->have_posts()) :
                                                $guide->the_post();
                                                ?>

                                                <li>
                                                    <span class="click_menu"><?php the_title(); ?></span>
                                                    <div class="content">
                                                        <?php the_content(); ?>
                                                        <?php
                                                            $usertype=get_field('show_this');
                                                            $file_path=get_field('file_path');
                                                            $file_type=get_field('file_type');
                                                            if($usertype=='logged_in_user'){
                                                        ?>
                                                            <p class="login_button">Please <a href="https://secure.marketdojo.com/login">login</a> to view resources</p>
                                                            <a href="<?php echo $file_path; ?>" class="download_button_subscription" target="_blank" style="display:none;">
                                                              <?php if($file_type=='pdf'){ ?>
                                                                <img src="<?php bloginfo('template_directory'); ?>/images/icon_download_pdf.png" alt="icon_download_pdf">
                                                              <?php }else{ ?>
                                                                <img src="https://www.marketdojo.com/wp-content/uploads/2018/06/icon_download_excel.png" alt="icon_download_excel">
                                                              <?php } ?>
                                                            </a>
                                                        <?php }elseif($usertype=='subcribing_user'){ ?>
                                                            <a data-src="#download_pdf_form" href="javascript:;" class="download_button_subscription" data-fancybox="" data-postidnew="<?php echo $post->ID; ?>">
                                                              <?php if($file_type=='pdf'){ ?>
                                                                <img src="<?php bloginfo('template_directory'); ?>/images/icon_download_pdf.png" alt="icon_download_pdf">
                                                              <?php }else{ ?>
                                                                <img src="https://www.marketdojo.com/wp-content/uploads/2018/06/icon_download_excel.png" alt="icon_download_excel">
                                                              <?php } ?>
                                                            </a>
                                                        <?php }else{ ?>
                                                            <a href="<?php echo $file_path; ?>" download class="download_button_free">
                                                              <?php if($file_type=='pdf'){ ?>
                                                                <img src="<?php bloginfo('template_directory'); ?>/images/icon_download_pdf.png" alt="icon_download_pdf">
                                                              <?php }else{ ?>
                                                                <img src="https://www.marketdojo.com/wp-content/uploads/2018/06/icon_download_excel.png" alt="icon_download_excel">
                                                              <?php } ?>
                                                            </a>
                                                        <?php } ?>
                                                    </div>
                                                </li>

                                            <?php endwhile;
                                        endif;
                                        ?>
                                    </ul>

                                </div>
                            </div>

                            <?php
                        }
                        ?>
                    </div>
                </div>
            </section>
            <?php
        }
        ?>
        <?php
    }
    wp_reset_query();
    ?>
    </div>
<?php get_footer(); ?>