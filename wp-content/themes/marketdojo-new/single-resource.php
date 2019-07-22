<?php get_header(); ?>    
<!-- section banner start -->
    <!-- body content start -->
    <div class="body_content inner_page single_resource_new filter_sec">
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
                        <?php /*<div class="each_sec clear">
                            <span class="ico"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/calender_ico.png" alt=""></span>
                            <span class="info"><?php echo $post_date; ?></span>
                        </div>*/ ?>
                        <div class="each_sec clear">
                            <span class="ico"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/tag_ico.png" alt=""></span>
                            <span class="info"><?php $post_id=$post->ID;$tags=get_the_terms($post_id,'resource-tag'); //print_r($cats);
                            $i=1;
                            foreach($tags as $tag)
                            {
                                if($i!=1){ echo ", ";}
                                echo $tag->name;
                                $i++;
                            }
                            ?></span>
                        </div>
                        <div class="each_sec clear">
                            <span class="ico"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/branches_ico.png" alt=""></span>
                            <span class="info"><?php $post_id=$post->ID;$cats=get_the_terms($post_id,'resource-cat'); //print_r($cats);
                            $i=1;
                            foreach($cats as $cat)
                            {
                                if($i!=1){ echo ", ";}
                                echo $cat->name;
                                $i++;
                            }
                            ?></span>
                        </div>
                    </div>
                    <div class="content defaultList">
                    <?php the_content(); ?>
					<?php
                        $youtubeVideo = get_field('youtube_video');
                        if($youtubeVideo){
                        preg_match('/src="(.+?)"/', $youtubeVideo, $matches_url);
                        $src = $matches_url[1];

                        preg_match('/embed(.*?)?feature/', $src, $matches_id);
                        $id = $matches_id[1];
                        $id = str_replace(str_split('?/'), '', $id);
                        ?>
                      <iframe src="https://www.youtube.com/embed/<?php echo $id; ?>?rel=0" width="100%" height="400"></iframe>
                    <?php } ?>
					<?php
						$this_is_a_guide=get_field('this_is_a_guide');
						if( $this_is_a_guide && in_array('yes', $this_is_a_guide) ){
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
						  <?php }elseif($file_type=='excel'){ ?>
							<img src="https://www.marketdojo.com/wp-content/uploads/2018/06/icon_download_excel.png" alt="icon_download_excel">
						  <?php }else{ ?>
							<img src="https://www.marketdojo.com/wp-content/uploads/2019/03/scrn.jpg" alt="icon_open_video">
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
					<?php
							}
						}
					?>
                    </div>
					<div class="icons_holder clear">
						<div class="each_sec clear">
							<span class="ico"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/calender_ico.png" alt=""></span>
							<span class="info"><?php echo $post_date; ?></span>
						</div>
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
                          
                <?php get_sidebar('resource'); ?>
            </div>
            </div>
        </div>
        
        
    </div>
    <!-- body content end -->
     <?php get_footer(); ?>
 