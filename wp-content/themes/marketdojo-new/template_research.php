<?php /* Template Name: Research */ ?>
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
$tutorial_cat_names = get_terms(array(
    'taxonomy' => 'research-cat',
    'parent' => 0,
    'hide_empty' => 0
));
$i=0;
if ($tutorial_cat_names) {
foreach ($tutorial_cat_names as $tutorial_cat_name) {
    $i++;
?>
<section class="body_section tutorials_section <?php if($i!=1){ ?>no_top_padding<?php } ?>">
    <div class="container">
        <?php
        
        
        $childrens = get_terms('research-cat', array(
        'parent' => $tutorial_cat_name->term_id
        ));
         //print_r($childrens);
?>
 <h2><span><?php echo $tutorial_cat_name->name; ?></span></h2>
  <div class="row">
  
<?php
        foreach ($childrens as $children) {
        $sub_childrens = get_terms('research-cat', array(
        'parent' => $children->term_id,
        ));
        ?>

       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        <h3><?php echo $children->name ?></h3>
       
        <?php 
            $term_id=$children->term_id;
        ?>
        
            
                <div class="tutorial_box">
                    <h4><?php echo $sub_children->name; ?></h4>

                    <ul>
                        <?php
                        $arr = array(
                        "post_type" => "research",
                        "post_status" => "publish",
                            'order' => 'ASC',
                        "tax_query"  => array(
                            array(
                            "taxonomy" => "research-cat",
                            "field"   =>  "term_id",
                            "terms" =>  $term_id
                        ),
                            ),
                        );
                        $tutorial = new WP_Query($arr);
                        ?>
                        <?php if ($tutorial->have_posts()) : ?>

                        <?php
                        while ($tutorial->have_posts()) :
                        $tutorial->the_post();
                        ?>
                        <?php
                            $youtubeVideo = get_field('youtube_video');

                            preg_match('/src="(.+?)"/', $youtubeVideo, $matches_url);
                            $src = $matches_url[1];

                            preg_match('/embed(.*?)?feature/', $src, $matches_id);
                            $id = $matches_id[1];
                            $id = str_replace(str_split('?/'), '', $id);
                            ?>
                        <li>
                            <span class="click_menu"><?php the_title(); ?></span>
                            <div class="content">
                                <?php the_content(); ?>
                                <?php 
                                    $usertype=get_field('show_this');
                                    $file_path=get_field('file_path');
                                    if($usertype=='logged_in_user'){
                                ?>
                                    <p class="login_button">Please <a href="https://secure.marketdojo.com/login">login</a> to view resources</p>
                                    <a href="<?php echo $file_path; ?>" class="download_button_subscription" target="_blank" style="display:none;"><img src="<?php bloginfo('template_directory'); ?>/images/icon_download_pdf.png" alt="icon_download_pdf"></a>
                                <?php }elseif($usertype=='subcribing_user'){ ?>
                                    <a data-src="#download_pdf_form" href="javascript:;" class="download_button_subscription" data-fancybox="" data-postidnew="<?php echo $post->ID; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/icon_download_pdf.png" alt="icon_download_pdf"></a>
                                <?php }else{ ?>
                                    <a href="<?php echo $file_path; ?>" download class="download_button_free"><img src="<?php bloginfo('template_directory'); ?>/images/icon_download_pdf.png" alt="icon_download_pdf"></a>
                                <?php } ?>
                            </div>
                        </li>
                        
                        <?php endwhile;endif; ?>
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

}
wp_reset_query();
?>




<?php get_footer(); ?>