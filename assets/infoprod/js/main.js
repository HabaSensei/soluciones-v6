(function($) {
    "use strict";

    /*----------------------------
     jQuery MeanMenu
    ------------------------------ */
    jQuery('nav#dropdown').meanmenu();

    /*----------------------------
     wow js active
    ------------------------------ */
    new WOW().init();
    /*----------------------------
     mobile menu  active
    ------------------------------ */

    jQuery('.mobile-menu-start').meanmenu();

    /*----------------------------
     owl active product area
    ------------------------------ */
    $(".tab-carousel-start").owlCarousel({
        autoPlay: true,
        slideSpeed: 2000,
        pagination: false,
        navigation: true,
        items: 4,
        /* transitionStyle : "fade", */
        /* [This code for animation ] */
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsMobile: [479, 1],
    });
    /*----------------------------
     owl active small product area
    ------------------------------ */
    $(".tab-carousel-two-start").owlCarousel({
        autoPlay: true,
        slideSpeed: 2000,
        pagination: false,
        navigation: true,
        items: 3,
        /* transitionStyle : "fade", */
        /* [This code for animation ] */
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [991, 2],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1],
    });
    /*----------------------------
     owl active client area
    ------------------------------ */
    $(".client-carousel").owlCarousel({
        autoPlay: true,
        slideSpeed: 2000,
        pagination: false,
        navigation: true,
        items: 6,
        /* transitionStyle : "fade", */
        /* [This code for animation ] */
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [991, 4],
        itemsTablet: [767, 2],
        itemsMobile: [479, 1],
    });
    /*----------------------------
     owl active blog area
    ------------------------------ */
    $(".blog-carousel").owlCarousel({
        autoPlay: true,
        slideSpeed: 2000,
        pagination: false,
        navigation: true,
        items: 4,
        /* transitionStyle : "fade", */
        /* [This code for animation ] */
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [767, 2],
        itemsMobile: [479, 1],
    });
    /*----------------------------
     owl active single product sidebar area
    ------------------------------ */
    $(".sidebar-product").owlCarousel({
        autoPlay: true,
        slideSpeed: 1000,
        pagination: false,
        navigation: false,
        items: 1,
        /* transitionStyle : "fade", */
        /* [This code for animation ] */
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [768, 1],
        itemsMobile: [479, 1],
    });
    /*----------------------------
     price-slider active
    ------------------------------ */
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 600,
        values: [60, 570],
        slide: function(event, ui) {
            $("#amount").val("$" + ui.values[0] + " to $" + ui.values[1]);
        }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        " to $" + $("#slider-range").slider("values", 1));
    /*----------------------------
     zoom active
    ------------------------------ */
    $("#zoom1").elevateZoom({
        gallery: 'gallery_01',
        cursor: 'pointer',
        galleryActiveClass: "active",
        imageCrossfade: true
    });
    /*----------------------------
     zoom carousel active
------------------------------ */
    $(".zoom-slider").owlCarousel({
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        pagination: false,
        items: 4,
        itemsDesktop: [1199, 4],
        itemsTablet: [991, 3],
        itemsTabletSmall: [680, 3],
        itemsMobile: [480, 3],
        autoPlay: false
    });
    /*----------------------------
        related product carousel
    ------------------------------ */
    $(".related-pro-carousel").owlCarousel({
        navigation: false,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        pagination: false,
        items: 4,
        itemsDesktop: [1199, 4],
        itemsTablet: [991, 3],
        itemsTabletSmall: [767, 1],
        itemsMobile: [480, 1],
        autoPlay: true
    });
    /*--------------------------
        scrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    /*----------------------------
        tooltip
    ------------------------------ */

    $('[data-toggle="tooltip"]').tooltip({
        animated: 'fade',
        placement: 'top',
        container: 'body'
    });

})(jQuery);