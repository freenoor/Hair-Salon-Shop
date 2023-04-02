<!-- 
    Template Name: Home
 -->
 <?php get_header();?>
<div class="background_home" style="background-image: url(<?php the_field('back_home');?>);">

    <div class="welcome_div">
        <div class="justforborder">
            <div class="content_home">
                <h2><?php the_field('title_home');?></h2>
                <p><?php the_field('content_home');?></p>
                <a href="<?php the_field('link_toweit');?>">Weiterlesen</a>
            </div>
        </div>
    </div>
</div>

<section class="ubruns_home">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 image_uber_home">
                <div class="justborder">
                <img src="<?php the_field('image_uber_home');?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-7 left_uber_home">
                <div class="content_uber_home">
                    <h2><?php the_field('title_uber_home');?></h2>
                    <p><?php the_field('content_uber_home');?></p>
                    <a href="<?php the_field('link_uber');?>">Weiterlesen</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="service_three">
    <div class="container">
    <h2>Dienstleistungen</h2>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="back_padd">
                    <div class="background_service">
                        <div class="svg_service">
                            <img src="<?php the_field('img_first');?>" alt="">
                        </div>
                        <div class="title_service">
                            <h2><?php the_field('title_quality');?></h2>
                        </div>
                        <div class="content_service">
                            <?php the_field('content_quality');?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="back_padd">
                    <div class="background_service">
                        <div class="svg_service">
                            <img src="<?php the_field('img_sec');?>" alt="">
                        </div>
                        <div class="title_service">
                            <h2><?php the_field('title_online');?></h2>
                        </div>
                        <div class="content_service">
                            <?php the_field('content_online');?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="back_padd">
                    <div class="background_service">
                        <div class="svg_service">
                            <img src="<?php the_field('img_third');?>" alt="">
                        </div>
                        <div class="title_service">
                            <h2><?php the_field('title_versand');?></h2>
                        </div>
                        <div class="content_service">
                            <?php the_field('content_vesrand');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="video_section">
    <div class="img_video">
        <div id="overly"></div>
        <img src="<?php the_field('img_video');?>" alt="">
        <img class="start_button" src="<?php the_field('start_button');?>" alt="">
    </div>
</section>

<section class="best-sales">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="bs-title"><?php the_field('best_sales_title');?></h2>
            <div id="best-sales">
                <?php the_field('best_sales');?>
            </div>
        </div>
    </div>
</section>

<section class="reviews">
    <div class="container">
        <h3>Was die Leute sagen</h3>
        <div class="slider-for">
                    <?php
                        $args = array(
                            'post_type' => 'review',
                            'posts_per_page' => '-1',
                        );
                        $loop = new WP_Query($args);
                        while($loop->have_posts()):
                            $loop->the_post();
                        ?>
                        <div class="title_rev">
                        <?php                          
                                    the_content();
                                ?>
                        </div>
                            
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
        </div>
        <div class="slider-nav">
                    <?php
                        $args = array(
                            'post_type' => 'review',
                            'posts_per_page' => '-1',
                        );
                        $loop = new WP_Query($args);
                        while($loop->have_posts()):
                            $loop->the_post();
                        ?>
                        <div class="image_rev">
                        <?php                          
                                    the_post_thumbnail();
                                ?>
                        </div>
                            
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
        </div>
    </div>
</section>


 <?php get_footer();?>
  