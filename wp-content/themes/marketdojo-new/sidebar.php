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
            <h2>Recent Posts</h2>
            <div class="post_holder">
                <?php
            $arr = array(
                "post_type" => "post",
                "post_status" => "publish",
                'order' => 'ASC',
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