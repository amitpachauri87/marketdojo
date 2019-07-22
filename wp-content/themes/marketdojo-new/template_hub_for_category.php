<?php /* Template Name: Hub For Category */ ?>
<?php get_header(); ?>

  <!--hub4CategoryListingSec open-->
  <div class="hub4CategoryListingSec">
    <div class="container">
      <h2><span><?php the_field('section_1_heading'); ?></span></h2>
      <?php $i=0;if( have_rows('category_list') ): ?>
      <div class="boxHubSection">
        <?php while ( have_rows('category_list') ) : the_row();$i++; ?>
        <?php
          $icon=get_sub_field('icon');
          $color=get_sub_field('color');
          if($color){
        ?>
        <style>
          .listno<?php echo $i; ?>.listHub .listHubBox {
            box-shadow: 0px 0px 5px <?php echo $color; ?>;
          }
          .listno<?php echo $i; ?>.listHub .listHubBox:after{
			opacity: 0.5;
            background:<?php echo $color; ?>;
          }
			.listno<?php echo $i; ?>.listHub strong{
				color:<?php echo $color; ?>;
			}
        </style>
        <?php
          }
        ?>
        <div class="listHub listno<?php echo $i; ?>">
          <a class="listHubBox" href="<?php the_sub_field('link'); ?>">
            <div class="listHubBoxHead">
              <?php if($icon){ ?>
              <figure>
                <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
              </figure>
              <?php } ?>
              <strong><?php the_sub_field('name'); ?></strong>
            </div>

            <p>
              <?php the_sub_field('content'); ?>
            </p>
            <em>Read More</em>
          </a>
        </div>
        <!-- listHub -->
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <!--hub4CategoryListingSec close-->
  <?php include(TEMPLATEPATH.'/includes/testimonials.php'); ?>
</div>

<?php get_footer(); ?>

