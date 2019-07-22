<?php /* Template Name: Quote's */ ?>
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <!-- body content start -->
    <div class="body_content inner_page resources">






        <section class="body_section features_sec">
            <div class="container">
                <h2><span><?php the_field('heading'); ?></span></h2>
                <?php the_content(); ?>


                <?php
                if (have_rows('quotes')):
                    ?>
                    <div class="testimonialAll">
                        <div class="row">

                            <?php
                            while (have_rows('quotes')) : the_row();
                                ?>
                                <div class="col-md-12">
                                    <div class="testiCont">
                                         <strong>Score:  <?php the_sub_field('quote_score'); ?>/10"</strong>
                                        <p><?php the_sub_field('quote_content'); ?></p>
                                        </div>
                                </div>
                                <?php
                            endwhile;
                            ?>
                        </div>
                    </div>
                    <?php
                endif;
                ?>
            </div>
        </section>


        <!-- esourcing sec start -->
        <?php $image = get_field('section_2_background_image'); ?>
        <section class="body_section esourcing_sec" style="background-image:url(<?= $image['url'] ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="left_part">
                            <h2><span><?php the_field('section_2_head_discover_our_tools'); ?> </span></h2>
                            <?php $left_image = get_field('left_image');
                            if ($left_image) {
                                ?>
                                <figure><img src="<?= $left_image['url'] ?>" alt=""></figure>
                            <?php } ?>
                                <?php the_field('section_2_content'); ?>
                            <div class="btn_sec">
                                <?php
                                $section_2_button_1_link = get_field('section_2_button_1_link');
                                $section_2_button_1_text = get_field('section_2_button_1_text');
                                if ($section_2_button_1_link != "") {
                                    ?>
                                    <a href="<?php echo $section_2_button_1_link; ?>" class="btn fill_btn"><?php echo $section_2_button_1_text; ?></a>
                                <?php
                                }
                                $section_2_button_2_link = get_field('section_2_button_2_link');
                                $section_2_button_2_text = get_field('section_2_button_2_text');

                                if ($section_2_button_2_link != "") {
                                    ?>
                                    <a href="<?php echo $section_2_button_1_link; ?>" class="btn"><?php echo $section_2_button_2_text; ?></a>
                    <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    // $video = get_field('section_2_video');
                    //$v = parse_video_uri( $video ); 
                    //$vid = $v['id'];
                    // $vid = $v;

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
    if ($right_video_image) {
        ?>
                                <figure><a href="https://www.youtube.com/embed/<?= $vid; ?>" data-fancybox><img src="<?= $right_video_image['url'] ?>" alt=""></a></figure>
    <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- esourcing sec end -->

        <!-- product section start -->
        <!--<section class="body_section product_section"> 
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                    <div class="product_image_holder">
                        <div class="each_img desktop">
                            </?php
                            /$section_3_image_1 = get_field('section_3_image_1');
                            $section_3_image_2 = get_field('section_3_image_2');
                            $section_3_image_3 = get_field('section_3_image_3');
                            $section_3_image_4 = get_field('section_3_image_4');
                            ?>
                            <figure><img src="</?= $section_3_image_1['url'] ?>" alt="</?= $section_3_image_1['alt'] ?>"></figure>
                        </div>
                        <div class="each_img ipad">
                            <figure><img src="</?= $section_3_image_2['url'] ?>" alt="</?= $section_3_image_2['alt'] ?>"></figure>
                        </div>
                        <div class="each_img mobile">
                            <figure><img src="</?= $section_3_image_3['url'] ?>" alt="</?= $section_3_image_3['alt'] ?>"></figure>
                        </div>
                        <div class="each_img laptop">
                            <figure><img src="</?= $section_3_image_4['url'] ?>" alt="</?= $section_3_image_4['alt'] ?>"></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="product_left_content">
                        <h2><span></?php the_field('section_3_heading'); ?></span></h2>
                        <div class="product_holder">
                            <div class="each_product red">
                                <h3><span></?php the_field('section_3_sub_head_1'); ?></span></h3>
                                <p></?php the_field('section_3_content_1'); ?></p>
                            </div>
                            <div class="each_product blue">
                                <h3><span></?php the_field('section_3_sub_head_2'); ?></span></h3>
                                <p></?php the_field('section_3_content_2'); ?></p>
                            </div>
                            <div class="each_product green">
                                <h3><span></?php the_field('section_3_sub_head_3'); ?></span></h3>
                                <p></?php the_field('section_3_content_3'); ?></p>
                            </div>
                            <div class="each_product purple">
                                <h3><span></?php the_field('section_3_sub_head_4'); ?></span></h3>
                                <p></?php the_field('section_3_content_4'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>-->

    <?php include(TEMPLATEPATH . '/includes/testimonials.php'); ?>
    </div>
    <!-- body content end -->
<?php endwhile; ?>
<?php get_footer(); ?>