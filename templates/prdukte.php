<!-- 
    Template Name: Produkte
 -->

 <?php get_header();
 the_post();?>

<div class="background_home" style="background-image: url(<?php the_post_thumbnail_url();?>);">
    <div class="welcome_div">
        <div class="justforborder">
            <div class="content_home">
                <h2><?php the_field('title_produkte');?></h2>
                <p><?php the_field('content_produkte');?></p>
                <a href="<?php the_field('link_produkte');?>">Weiterlesen</a>
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