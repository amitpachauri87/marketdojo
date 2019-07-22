<?php /*Template Name: Case Studies*/ ?>
<?php get_header(); ?>
    <!-- body content start -->
    <div class="body_content inner_page resources">
        <section class="body_section features_sec">
            <div class="container">
                <h2><span><?php the_field('heading'); ?></span></h2>
                <!--<p>Market Dojo is constantly evolving to ensure you have everything you need.</p>-->
                <div class="caseStudies">
                	<div class="logoTab">
                		<div class="row">
                			<div class="col-md-12">
                				<div class="button-group filters-button-group">
								<span class="filterCont"><samp>All Gallery</samp> <em class="fa fa-filter" aria-hidden="true"></em></span>
                                <?php
                                //$category_detail=get_the_category($post->ID);
                                $taxonomy="case_studies_category";
                                $category_detail=get_terms( $taxonomy );
                                //echo "<pre>";var_dump($loop);echo "</pre>";
                                //echo "<pre>";

                                foreach($category_detail as $cd){
                                //echo $cd->name;
                                }
                                ?>

                                <ul>
                                    <li><a href="javascript:void(0);" class="button is-checked" data-filter="*">Show All</a></li>
                                    <?php
                                    foreach($category_detail as $cd){
                                    $cat_name=$cd->name;
                                    $new_cat_name= strtolower(str_replace(' ','',$cat_name));
                                    ?>
                                    <li><a href="javascript:void(0);" class="button" data-filter=".<?php echo $new_cat_name; ?>"><?php echo $cd->name; ?></a></li>
                                    <?php   } ?>

                                    </ul>
                                </div>
               					<div class="gridWrap clear">
               						
                            <?php 
                            $case_count=0;
                            $loop = new WP_Query( array( 'post_type' => 'case_studies', 'posts_per_page' => -1 ) ); 
                            while ( $loop->have_posts() ) : $loop->the_post();
                            ?>

                                <?php
                                global $post;
                                $taxonomy="case_studies_category";
                                $category_detail=get_the_terms( $post->ID, $taxonomy );
                                ?>
                                    <div class="listitem <?php $i=1; foreach($category_detail as $cd){ $cat_name=$cd->name; $new_cat_name= strtolower(str_replace(' ','',$cat_name)); if($i!=1){ echo " ";}echo $new_cat_name; $i++;}?>">
                                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?> 
               							<div class="inner">
               								<a href="javascript:void(0);" class="contList" data-target="id<?php echo $case_count; ?>"><img src="<?php echo $url ?>" alt=""></a>
               							</div>
               						</div>
                            <?php
                                $case_count++;
                                endwhile;
                                wp_reset_query();
                            ?>
               					</div>
                			</div>
                		</div>
                	</div>
                	<div class="botListWrap">
                		<div class="row">
                			<div class="col-md-12">
								<div class="body_section testimonial_sec">
                                <?php 
                                $case_count=0;
                                $loop = new WP_Query( array( 'post_type' => 'case_studies', 'posts_per_page' => -1 ) ); 
                                while ( $loop->have_posts() ) : $loop->the_post(); 
                                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                                ?>                        
                                    <div class="each_slide clear" id="id<?php echo $case_count; ?>">
                                            <a href="<?php the_field('client_website_link'); ?>" target="_blank"><figure><img src="<?php echo $url ?>" alt=""></figure></a>
                                            <div class="content">
                                                    <?php the_content(); ?>
                                                    <a href="javascript:void(0);" class="bckToTop">Back To Top <i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                            </div>
                                    </div>
                                <?php
                                $case_count++;
                                endwhile; ?>
                                <?php wp_reset_query(); ?>
                                </div>
                            </div>
                		</div>
                	</div>
                </div>
            </div>
        </section>
        <!-- client testimonial sec end -->
    </div>
    <!-- body content end -->
<?php get_footer(); ?>
<script>
$(".bckToTop").click(function() {
	$("body, html").animate({ scrollTop: "0px" }, 1000);
});
	
var ftxt = $('.button-group ul li:first-child').text();
$('.filterCont samp').text(ftxt);

$('.filterCont').click(function(){ 
    $('.filters-button-group ul').slideToggle(200);
});

$('.filters-button-group a').click(function(){ 
    $('.filters-button-group ul').slideUp(0);
		var filtxt = $(this).text();
		$('.filterCont samp').text(filtxt);
});
$(document).ready(function(){ 
    $(window).resize(function() {  
    var winWidth = $(window).width();
      if(winWidth > 767){
         $('.filters-button-group ul').removeAttr('style');
         $('.menuDrop').removeAttr('style');  
        } 
    }); 
})

</script>