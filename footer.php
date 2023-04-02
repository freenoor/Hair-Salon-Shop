
<section class="footersection" style="background-image: url('/stars_hair/wp-content/uploads/2019/12/footer_img.png');">
<div class="overly"></div>
<div class="border">
  <div class="container">
    
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="logo">
              <?php the_custom_logo(); ?>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="test">
          <h4>Kontakt</h4>
                    <div class="kontakt">
                      <div class="svg_phone">
                                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
                                <circle cx="150.001" cy="226.085" r="11.718"/>
                                <path d="M182.691,68.248h-65.382c-3.665,0-6.647,2.843-6.647,6.331v123.592c0,3.491,2.98,6.331,6.647,6.331h65.382
                                  c3.665,0,6.647-2.843,6.647-6.331V74.579C189.336,71.088,186.356,68.248,182.691,68.248z"/>
                                <path d="M149.996,0C67.157,0,0.001,67.161,0.001,149.997S67.157,300,149.996,300s150.003-67.163,150.003-150.003
                                  S232.835,0,149.996,0z M208.354,224.021c0,11.458-9.29,20.749-20.749,20.749h-75.214c-11.458,0-20.749-9.29-20.749-20.749V75.323
                                  c0-11.458,9.29-20.749,20.749-20.749h75.214c11.458,0,20.749,9.29,20.749,20.749V224.021z"/>

                          </svg>
                      </div>
                      <div class="number">
                        <a href="tel:<?php echo get_theme_mod('footer_phone'); ?>" id="footer_phone"><?php echo get_theme_mod('footer_phone'); ?></a>
                      </div>
                    </div>
                    <div class="email">
                      <div class="svg_phone">
                          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 216 216" style="enable-background:new 0 0 216 216;" xml:space="preserve">
                          <path d="M108,0C48.353,0,0,48.353,0,108s48.353,108,108,108s108-48.353,108-108S167.647,0,108,0z M156.657,60L107.96,98.498
                            L57.679,60H156.657z M161.667,156h-/109V76.259l50.244,38.11c1.347,1.03,3.34,1.545,4.947,1.545c1.645,0,3.073-0.54,4.435-1.616
                            l49.374-39.276V156z"/>
                          </svg>
                      </div>
                      <div class="mail">
                        <a href="mailto:<?php echo get_theme_mod('footer_email'); ?>" id="footer_email"><?php echo get_theme_mod('footer_email'); ?></a>
                      </div>
                    </div>
                    <div class="adress">
                      <div class="svg_phone">
                          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 299.997 299.997" style="enable-background:new 0 0 299.997 299.997;" xml:space="preserve">
                                    <circle cx="150.437" cy="110.572" r="24.149"/>
                                    <path d="M149.996,0C67.157,0,0.001,67.158,0.001,149.997c0,82.837,67.156,150,149.995,150s150-67.163,150-150
                                      C299.996,67.158,232.835,0,149.996,0z M149.685,68.678c0.106,0,0.21-0.005,0.314-0.01c0.104,0.005,0.207,0.01,0.314,0.01
                                      c25.274,0.399,45.834,21.288,45.834,46.568c0,30.908-33.024,62.205-46.148,73.419c-0.877-0.75-1.849-1.595-2.889-2.521
                                      c-0.018-0.016-0.034-0.029-0.049-0.044c-14.524-12.906-43.209-42.045-43.209-70.854
                                      C103.851,89.966,124.413,69.078,149.685,68.678z M150.65,232.25c-27.663,0-55.669-7.936-55.669-23.098
                                      c0-10.641,13.79-17.717,31.569-20.995c3.439,3.457,6.694,6.505,9.55,9.049c-19.366,2.163-30.744,8.294-30.744,11.943
                                      c0,4.484,17.195,12.724,45.294,12.724c28.099,0,45.297-8.24,45.297-12.724c0-3.724-11.858-10.009-31.927-12.052
                                      c2.881-2.573,6.162-5.649,9.627-9.142c18.313,3.188,32.674,10.335,32.674,21.197C206.321,224.314,178.315,232.25,150.65,232.25z"
                                      />
                              </svg>
                      </div>
                      <div class="adres">
                        <p id="footer_address"><?php echo get_theme_mod('footer_address'); ?></p> 
                      </div>
                    </div>
          </div>
      
        </div>
        <div class="col-lg-4 col-md-4 subscripe">
        <h4>Newsletter</h4>
          <div class="subscripe_">
              <?php echo dynamic_sidebar('newsletter');?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="copyright">
  <div class="container">
    <div class="row tt">
      <div class="left_copy">
        <p id="footer_copy"><?php echo get_theme_mod('footer_copyrights'); ?></p> 
      </div>
      <div class="right_copy">
      <?php wp_nav_menu(array(
              'theme_location'=> 'end_menu',
              )); ?>
      </div>
    </div>
  </div>
</div>


<!-- <script>
  AOS.init({
    duration:1200,
    disable: function() {
    var maxWidth = 800;
    return window.innerWidth < maxWidth;
  }
  });
</script> -->

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri();?>/assets/slick/slick.min.js">

</script>
<script>
   jQuery('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
jQuery('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  centerMode: true,
  focusOnSelect: false,
  autoplay:true,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>

<script>
  $('.sales-slider>.products').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
	
  });
</script>

</body>
</html>