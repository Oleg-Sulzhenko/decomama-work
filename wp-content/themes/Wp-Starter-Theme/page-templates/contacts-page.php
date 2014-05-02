<?php
/**
 * Template Name: Contacts Page Template
 */
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title('Decomama |', true, 'left'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


        <?php wp_head(); ?>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cufon-yui.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fonts/Corki_Tuscan_Rounded_400.font.js"></script>

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
            function LoadGmaps() {
                var myLatlng = new google.maps.LatLng(49.8394916, 24.0267044);
                var myOptions = {
                    zoom: 16,
                    center: myLatlng,
                    disableDefaultUI: true,
                    panControl: false,
                    zoomControl: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.DEFAULT
                    },
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                    },
                    streetViewControl: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    styles: [{"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#193341"}]}, {"featureType": "landscape", "elementType": "geometry", "stylers": [{"color": "#2c5a71"}]}, {"featureType": "road", "elementType": "geometry", "stylers": [{"color": "#29768a"}, {"lightness": -37}]}, {"featureType": "poi", "elementType": "geometry", "stylers": [{"color": "#406d80"}]}, {"featureType": "transit", "elementType": "geometry", "stylers": [{"color": "#406d80"}]}, {"elementType": "labels.text.stroke", "stylers": [{"visibility": "on"}, {"color": "#3e606f"}, {"weight": 2}, {"gamma": 0.84}]}, {"elementType": "labels.text.fill", "stylers": [{"color": "#ffffff"}]}, {"featureType": "administrative", "elementType": "geometry", "stylers": [{"weight": 0.6}, {"color": "#1a3541"}]}, {"elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "poi.park", "elementType": "geometry", "stylers": [{"color": "#2c5a71"}]}]

                }
                var map = new google.maps.Map(document.getElementById("MyGmaps"), myOptions);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: "львів банківська 5"
                });
            }
        </script>
    </head>
    <body <?php body_class(); ?> id="contacts-page" onload="LoadGmaps()" onunload="GUnload()">
        <header>
            <div class="wrap">
                <div class="main-menu">
                    <?php wp_nav_menu(array('menu' => 'main-menu-left')); ?>
                    <a href="/" id="logo-placeholder"></a>
                    <?php wp_nav_menu(array('menu' => 'main-menu-right')); ?>
                </div>
            </div>
        </header>
        <div class="wrap cf main-container-to-footer">
            <div class="block-style">
                <?php
                $loop = new WP_Query(array(
                    'page_id' => 13,
                ));
                ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <h2>Контакти</h2><br/>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        </div>
        <div id="MyGmaps"></div>

        <?php wp_footer(); ?>

