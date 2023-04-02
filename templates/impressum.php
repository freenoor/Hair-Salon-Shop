<?php 
//Template Name: Impressum
get_header();
if(have_posts()): while(have_posts()): the_post();
?>

<div class="ld_impressum">
    <div class="container">  
        <div class="row flex-column">
            <div class="title">
                <h2><?php the_title();?></h2>
            </div>
            <div class="content">
                <?php the_content();?>
            </div>
        </div>
    </div>
</div>
<?php
endwhile;
endif;
get_footer();
?>