<?php /* Template Name: Tutorial */ ?>
<?php get_header(); ?>
<!-- cleint Sec Start -->
<?php include(TEMPLATEPATH . '/includes/clients.php'); ?>
<?php
$tutorial_cat_names = get_terms(array(
    'taxonomy' => 'tutorial-cat',
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
        
        
        $childrens = get_terms('tutorial-cat', array(
        'parent' => $tutorial_cat_name->term_id
        ));

        foreach ($childrens as $children) {
        $sub_childrens = get_terms('tutorial-cat', array(
        'parent' => $children->term_id,
        ));

        //print_r($sub_children);
        //echo $sub_children->name;
        
        ?>

        <h2><span><?php echo $tutorial_cat_name->name; ?></span></h2>

        <h3><?php echo $children->name ?></h3>
        <div class="row">
        <?php 
        foreach ($sub_childrens as $sub_children) {
            $term_id=$sub_children->term_id;
        ?>
        
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="tutorial_box">
                    <h4><?php echo $sub_children->name; ?></h4>

                    <ul>
                        <?php
                        $arr = array(
                        "post_type" => "tutorial",
                        "post_status" => "publish",
                            'order' => 'ASC',
                        "tax_query"  => array(
                            array(
                            "taxonomy" => "tutorial-cat",
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
                                <span class="video_ico"><a href="https://youtu.be/<?php echo $id; ?>" data-fancybox><img src="<?php echo get_bloginfo('template_directory'); ?>/images/videos_ico.png" alt=""></a></span>
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
        <?php
        }
        ?>
    </div>
</section>
        <?php
        }
        ?>

    
<?php
}
wp_reset_query();
?>
<?php include(TEMPLATEPATH . '/includes/testimonials.php'); ?>
<?php get_footer(); ?>