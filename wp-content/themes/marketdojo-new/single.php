<?php get_header(); ?>    
<!-- section banner start -->
    
    <!-- body content start -->
    <div class="body_content inner_page single_resource_new">
        <div class="resource_holder">
            <div class="container">
                <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    $post_date = get_the_time('F j, Y');
                    ?>
                    <div class="resource_banner">
                        <figure><a href="#"><?php echo the_post_thumbnail( 'full' ); ?></a></figure>
                    </div>
                    <h2><?php the_title(); ?></h2>
                    <div class="icons_holder clear">
                        <div class="each_sec clear">
                            <span class="ico"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/calender_ico.png" alt=""></span>
                            <span class="info"><?php echo $post_date; ?></span>
                        </div>
                        <div class="each_sec clear">
                            <span class="ico"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/tag_ico.png" alt=""></span>
                            <span class="info"><?php $post_id=$post->ID;$tags=get_the_tags(); //print_r($cats);
                            $i=1;
                            foreach($tags as $tag)
                            {
                                if($i!=1){ echo ", ";}
                                echo $tag->name;
                                $i++;
                            }
                            ?></span>
                        </div>
                    </div>
                    <div class="content">
                    <?php the_content(); ?>    
                    </div>
                    <div class="addThis"><!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div></div>
                     <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="detailsBot">
            <div class="commentBox">
                <h2><?php comments_number( 'no comments', '1 comment', '% comments' ); ?></h2>

                <ul>
                    <?php
                    $post_id = get_the_ID();
                    $args = array(
                        'post_id' => $post_id, // use post_id, not post_ID
                        'number' => '2',
                    );
                    $comments = get_comments($args);

                    foreach ($comments as $comment) :

                        $d = "j F, Y";
                        $comment_date = get_comment_date($d);
                        ?>
                        <li>
                            <p><?php echo $comment->comment_content; ?></p>
                            <span><i class="fa fa-user" aria-hidden="true"></i><?php echo $comment->comment_author; ?>, <?php echo $comment_date; ?></span>
                        </li>
                        <?php
                    endforeach;
                    ?>
                </ul>
                 </div>            
                       <div class="reply_box">
                        <h3>Leave a Reply</h3>
                        <p>Your email address will not be published. Required fields are marked*</p>
                        <form action="<?php echo get_home_url(); ?>/wp-comments-post.php" method="post" id="commentformid" novalidate="">
                             <?php
                                if (!is_user_logged_in()) {
                                    ?>
                            <div class="input_box">
                                <input type="text" id="author" name="author" placeholder="Name*">
                                <p id="auth_error" class="error"></p>
                            </div>
                            <div class="input_box">
                                <input type="text" id="auth_email" name="email" placeholder="Email*">
                                <p id="auth_email_error" class="error"></p>
                            </div>
                            <div class="input_box">
                                <input type="text" name="website" id="auth_website" placeholder="Website">
                                 <p id="website_error" class="error"></p>
                            </div>
                             <?php
                                    }
                                    ?>
                            <div class="input_box full">
                                <textarea name="comment" id="comment" placeholder="Leave your comment"></textarea>
                                <p id="comment_error" class="error"></p>
                            </div>
                            <div class="input_box full">
                                <input type="submit" name="submit" id="submit" value="Post comment" class="btn">
                                 <input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" id="comment_post_ID">
                            </div>
                        </form>
                    </div>
                    </div>
                    </div>
                          
                <?php get_sidebar(); ?>
            </div>
            </div>
        </div>
        
        
    </div>
    <!-- body content end -->
     <?php get_footer(); ?>
 