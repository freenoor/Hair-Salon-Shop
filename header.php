<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">

        <title><?php bloginfo('name');?></title>
        <?php wp_head();?>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
    </head>
    <body <?php body_class();?>>

<div class="headertop">
  <div class="container">
    <div class="row">
      <div class="logospace">
        <?php the_custom_logo(); ?>
      </div>
      <div class="menu_header">
          <nav class="navbar navbar-expand-md navbar-light menustyle order-md-1 order-12">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                  <div class="three">
                      <div class="hamburger" id="hamburger-1">
                          <span class="line"></span>
                          <span class="line"></span>
                          <span class="line"></span>
                      </div>
                  </div>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarsExample04">
              <?php wp_nav_menu(array(
              'theme_location'=> 'main_menu',
              'menu_class'    => 'navbar-nav',
              'container'     => 'ul',
              'menu'          => 'primary'
              )); ?>
              
              </div>
          </nav>
          <div class="shop-inputs order-md-12 order-1">
                <?php if(is_active_sidebar( 'header_shop_search' )):?>
                <div class="search">
                    <?php dynamic_sidebar( 'header_shop_search' );?>
                </div>
                <?php endif;?>
                <div class="cart">
                    <a href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>" class="cart-basket">
                        <?php if(WC()->cart->get_cart_contents_count() > 0):?>
                        <i><?php echo WC()->cart->get_cart_contents_count(); ?></i>
                        <?php endif;?>
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="38px" height="38px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                        <path d="M153,408c-28.05,0-51,22.95-51,51s22.95,51,51,51s51-22.95,51-51S181.05,408,153,408z M0,0v51h51l91.8,193.8L107.1,306
                        c-2.55,7.65-5.1,17.85-5.1,25.5c0,28.05,22.95,51,51,51h306v-51H163.2c-2.55,0-5.1-2.55-5.1-5.1v-2.551l22.95-43.35h188.7
                        c20.4,0,35.7-10.2,43.35-25.5L504.9,89.25c5.1-5.1,5.1-7.65,5.1-12.75c0-15.3-10.2-25.5-25.5-25.5H107.1L84.15,0H0z M408,408
                        c-28.05,0-51,22.95-51,51s22.95,51,51,51s51-22.95,51-51S436.05,408,408,408z"/>
                        </svg>
                    </a>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>
























<!-- 
<script>
        jQuery(document).ready(function(){
            jQuery(".navbar-toggler").click(function(){
                jQuery(".hamburger").toggleClass("is-active");
            });
            });
            </script> -->

