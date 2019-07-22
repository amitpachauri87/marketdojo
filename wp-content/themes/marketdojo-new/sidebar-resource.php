<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
    <aside class="side_panel">
        <div class="side_panel_box">
            <h2>Subscribe to newsletter</h2>
            <div class="newsltr_box">
                <form name="news" method="post" id="newsletter"  onSubmit="return false">
                    <div class="field_box clear">
                        <input type="text" name="email" id="news_email_id" placeholder="Your email address">
                        <button type="submit" class="btn"><i class="fa fa-paper-plane-o"></i></button>
                    </div>
                </form>
                <p id="status"></p>
            </div>
        </div>
        <div class="side_panel_box">
            <h2>Posts by Topic</h2>
            <ul>
                <?php
					$resourcecat_id=33;
					$args = array(
						'post_type' => 'resource',
						'posts_per_page' => 4,
						'tax_query' => array(
							array(
								'taxonomy' => 'resource-cat',
								'field'    => 'term_id',
								'terms'    => $resourcecat_id,
							),
						),
					);
					$query = new WP_Query( $args );
					if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
					$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'resource_home_thumb', false, '' );
					$img_id = get_post_thumbnail_id($post->ID); // This gets just the ID of the img
					$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
				?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php
                    endwhile;endif;
                    wp_reset_query();
                ?>
            </ul>
        </div>
        <div class="side_panel_box">
            <h2>Categories</h2>
            <ul class="category_list clear">
                <?php
                $args = array(
                    'name' => 'resource-cat'
                );
                $cat_resources = get_terms('resource-cat');
                if ($cat_resources) {
                    foreach ($cat_resources as $cat_resource) {
                        ?>
                <li><a href="<?php echo get_term_link($cat_resource);?>"><?php echo $cat_resource->name; ?></a></li>
                 <?php
                        }
                    }
               
                    ?>
            </ul>
        </div>
        <div class="side_panel_box">
            <h2>Recent Posts</h2>
            <div class="post_holder">
                <?php
            $arr = array(
                "post_type" => "resource",
                "posts_per_page" => 3
            );
            $recentpost = new WP_Query($arr);

            if ($recentpost->have_posts()) {
                ?>

                <?php
                while ($recentpost->have_posts()) {
                    $recentpost->the_post();
                   ?>
                <div class="each_post">
                    <figure><a href="<?php the_permalink(); ?>">
                        <?php echo the_post_thumbnail('resource_thumb_new'); ?>
                        </a></figure>
                    <p><a href="<?php the_permalink(); ?>">
                           <?php echo wp_trim_words(get_the_content(), 10, '...'); ?>
                        </a></p>
                </div>
                   <?php } ?>

            <?php } ?>
            <?php
            wp_reset_query();
            ?>
            </div>
        </div>
    </aside>
</div>