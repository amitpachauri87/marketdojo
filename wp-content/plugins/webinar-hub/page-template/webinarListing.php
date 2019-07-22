<?php
get_header();?>
<div class="body_content">
    <div class="body_section">
      <div class="webinar_l_wrapper">
        <div class="container">
          <h2>Webinar listing</h2>
          <div class="row my-posts">
            <?php 
               $args = array(  
                     'post_type' => 'webinarhub',
                     'post_status' => 'publish',
                     'posts_per_page' => 9,
                     'paged' => 1,
                 );
              global $loop;
                 $loop = new WP_Query( $args );
                   if ( $loop->have_posts() ) : 
                 while ( $loop->have_posts() ) : $loop->the_post();
               $upcoming_webinar = get_field('upcoming_webinar');
               $upcoming_webinar_ribbon_color = get_field('upcoming_webinar_ribbon_color');
               $register_button_or_watch_button = get_field('register_button_or_watch_button');
               $register_button_color = get_field('register_button_color');
               $watch_online_button_color = get_field('watch_online_button_color');
               $webinar_hover_color = get_field('webinar_hover_color');
              ?>
              <style type="text/css">
                .webinar_l_status_<?php echo $post->ID;?>{
                    background:<?php echo $upcoming_webinar_ribbon_color?>;
                    position: absolute;
                    bottom: 10px;
                    left: 10px;
                    padding: 8px 25px 12px;
                    display: inline-block;
                    vertical-align: top;
                    color: #fff;
                    line-height: 1;
                }
                .webinar_l_content .btn.green-btn_<?php echo $post->ID;?>{
                      color: <?php echo $watch_online_button_color?>;
                       border-color: <?php echo $watch_online_button_color?>;
                      }
                .webinar_l_content .btn.green-btn_<?php echo $post->ID;?>:hover {
                  background: <?php echo $watch_online_button_color?>;
                  color: #ffffff;
                }
                .webinar_l_content .btn_<?php echo $post->ID;?>:hover {
                background: <?php echo $register_button_color;?>;
                color: #ffffff;
                }
                .webinar_l_content .btn_<?php echo $post->ID;?> {
                text-align: center;
                border: 1px solid <?php echo $register_button_color;?>;
                color: <?php echo $register_button_color;?>;
                background-color: #fff;
                border-radius: 0;
                padding: 8px 15px 10px;
                font-weight: 500;
                min-width: 134px;
                font-size: 16px;
                }
                .webinar_l_hover_<?php echo $post->ID;?>{
                	background: <?php echo $webinar_hover_color;?>;
                }
              </style>
            <div class="col-md-4 d-flex">
              <div class="webinar_l_box">
                <div class="webinar_l_img"> 
                <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
                } else { ?>
                <img src="<?php echo plugin_dir_url();?>webinar-hub/images/webinar-list1.jpg" alt="webinar list"/>
                <?php } ?>
                <?php if($upcoming_webinar[0]=="yes"){?>
                  <div class="webinar_l_status_<?php echo $post->ID;?>"> Upcoming Webinar</div>
                  <?php }?>
                  <div class="webinar_l_hover webinar_l_hover_<?php echo $post->ID;?>"> <a href="<?php echo the_permalink();?>" class="btn">READ MORE</a> </div>
                </div>
                <div class="webinar_l_content">
                  <h4><a href="<?php echo the_permalink();?>"><?php the_title();?></a></h4>
                  <p><?php echo get_excerpt(172);?></p>
                  <?php if($register_button_or_watch_button =="Register"){?>
                  <a href="<?php echo the_permalink();?>" class="btn_<?php echo $post->ID;?>">Register Today</a>
                  <?php }else{?>
                  <a href="<?php echo the_permalink();?>" class="btn green-btn_<?php echo $post->ID;?>">Watch The Recording</a>
                  <?php }?>
                   </div>
              </div>
            </div>
            <?php endwhile;
            endif;
               wp_reset_postdata();
            ?>

            
           
          </div>
          <?php 
if (  $loop->max_num_pages > 1 ){?>
<div class="loadmore-group"> <a href="javascript:void(0);" class="loadmore btn"><i style="display: none;" class="fa fa-spinner loader" aria-hidden="true"></i>&nbsp;&nbsp; Load More...</a></div>
<?php } else{?>
<div class="loadmore" style="clear: both;margin-top: 20px;text-align: center;cursor: none;color: red;">Load More...</div>
<?php }?>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
var page = 2;
jQuery(function($) {
    $('body').on('click', '.loadmore', function() {
      var total = jQuery('<?php echo $loop->max_num_pages;?>');
      //console.log(total);
      //alert(total);
      $('.loader').css('display','inline-block');
        var data = {
            'action': 'load_posts_by_ajax',
            'page': page,
            'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
        };
 
        $.post(ajaxurl, data, function(response) {
          
            $('.my-posts').append(response);
            $('.loader').css('display','none');
            $('my-posts').slideUp( "slow" );
            $('.no-post').css( "display",'none' );
            $('.loadmore').css( "pointer-events",'none' );


            page++;
        });
    });
});
</script>
<?php 

get_footer(); 
?>