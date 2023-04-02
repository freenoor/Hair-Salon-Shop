<!-- 
    Template Name: Kontakt
 -->


 <?php get_header();?>

 <div class="background_home" style="background-image: url(<?php the_post_thumbnail_url();?>);">
    <div class="welcome_div">
        <div class="justforborder">
            <div class="content_home">
                <h2><?php the_field('title_kontakt');?></h2>
                <p><?php the_field('content_kontakt');?></p>
                <a href="<?php the_field('link_kontakt');?>">Weiterlesen</a>
            </div>
        </div>
    </div>
</div>


<div class="kontaktform">
    <div class="container">
         <?php the_field('contact7');?>
    </div>
</div>
<section id="map">
</section>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php the_field('key'); ?>"></script>
<script type="text/javascript">

    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
    // How zoomed in you want the map to start at (always required)
    zoom: 16,
    mapTypeControlOptions: {
    style: google.maps.MapTypeControlStyle.DEFAULT,
    position: google.maps.ControlPosition.LEFT_BOTTOM
    },

    // The latitude and longitude to center the map (always required)

    center: new google.maps.LatLng(<?php the_field('latitude');?>, <?php the_field('longitude');?>),
    styles: []

    // How you would like to style the map.
    // This is where you would paste any style found on Snazzy Maps.
    };
    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');
    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);
    // Let's also add a marker while we're at it
    // var customMarker = '<?php the_field('map_marker');?>';
    var marker = new google.maps.Marker({
    position: new google.maps.LatLng(<?php the_field('latitude');?>, <?php the_field('longitude');?>),
    map: map,
    });
    }
</script>

 <?php get_footer();?>