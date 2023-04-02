<!-- 
    Template Name: Schulungen  
 -->

 <?php get_header();
 the_post();?>

 <div class="background_home" style="background-image: url(<?php the_post_thumbnail_url();?>);">
    <div class="ld_uber-uns">
        <div class="justforborder">
            <div class="welcome_div_left">
                <div class="content_left">
                    <h2><?php the_field('title_sch');?></h2>
                    <p><?php the_field('content_sch');?></p>
                    <a href="<?php the_field('link_sch');?>">Weiterlesen</a>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="uber_text">
    <div class="container">
        <?php the_content();?>
    </div>
</section>

 <?php get_footer();?>