jQuery(document).ready(function($) {
    //Cufon
    Cufon.replace('.main-menu li a', {fontFamily: 'Corki Tuscan Rounded', hover: true});

    //Mansory
    var $container = $('#mansory-container');
    $container.imagesLoaded(function() {
        $container.masonry({
            itemSelector: 'ul.image-gallery li, .front-page-myworks-item, .mansory-item'
        });
    });

    //PrettyPhoto
    $("a[rel^='prettyPhoto']").prettyPhoto({
        social_tools: false,
        show_title: false
    });
    
    //Colorbox
    $(".inline").colorbox({inline: true, width: "500px"});
    
    //Bxslider
    $('.bxslider-1').bxSlider({
        minSlides: 3,
        maxSlides: 3,
        slideWidth: 360,
        slideMargin: 0,
        moveSlides: 1,
        controls: true,
        infiniteLoop: false,
        useCSS: false,
        nextSelector: '.next1',
        prevSelector: '.prev1'
    });
    $('.bxslider-2').bxSlider({
        minSlides: 3,
        maxSlides: 3,
        slideWidth: 360,
        slideMargin: 0,
        moveSlides: 1,
        controls: true,
        infiniteLoop: false,
        useCSS: false,
        nextSelector: '.next2',
        prevSelector: '.prev2'
    });
    $('.bxslider-3').bxSlider({
        minSlides: 3,
        maxSlides: 3,
        slideWidth: 360,
        slideMargin: 0,
        moveSlides: 1,
        controls: true,
        infiniteLoop: false,
        useCSS: false,
        nextSelector: '.next3',
        prevSelector: '.prev3'
    });
    $('.bxslider-4').bxSlider({
        minSlides: 3,
        maxSlides: 3,
        slideWidth: 360,
        slideMargin: 0,
        moveSlides: 1,
        controls: true,
        infiniteLoop: false,
        useCSS: false,
        nextSelector: '.next4',
        prevSelector: '.prev4'
    });

    $('.bxslider-testimonials').bxSlider({
        minSlides: 1,
        maxSlides: 1,
        slideWidth: 500,
        moveSlides: 1,
        controls: true,
        infiniteLoop: false,
        useCSS: false,
        nextSelector: '.next-t',
        prevSelector: '.prev-t'
    });

});

