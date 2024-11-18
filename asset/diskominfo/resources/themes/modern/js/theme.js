;(function($){
    "use strict"
	
	var nav_offset_top = $('header').height() + 50; 
    /*-------------------------------------------------------------------------------
	* Navbar Fixed  
	-------------------------------------------------------------------------------*/
    function navbarFixed(){
        if ( $('.header_area').length ){ 
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();   
                if (scroll >= nav_offset_top ) {
                    $(".header_area").addClass("navbar_fixed");
                } else {
                    $(".header_area").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();
	
	/*----------------------------------------------------*/
    /*  Parallax Effect js
    /*----------------------------------------------------*/
	function parallaxEffect() {
    	$('.bg-parallax').parallax();
	}
	parallaxEffect();

    function owl_jadwal() {
        $('#jadwal').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            margin: 0,
            // dots: true,
            lazyLoad : true,
            navText: ['<span class="fas fa-chevron-left fa-2x"></span>','<span class="fas fa-chevron-right fa-2x"></span>']
        })
    } owl_jadwal();
	
    /*----------------------------------------------------*/
    /*  Announcement Slider
    /*----------------------------------------------------*/
    function owl_pengumuman(){
        $('#pengumuman').owlCarousel({
            loop: false,
            margin: 10,
            items: 4,
            nav: false,
            dots: true, 
            smartSpeed: 1000,
            mergeFit:true,
            rewind: true,
            autoHeight:true,
            autoplay: true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            responsiveClass: true,
            lazyLoad: true,
            responsive: {
                0: {
                    items: 1,
                },
                400: {
                    items: 1,
                },
                575: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 4,
                }
            }
        })
    }
    owl_pengumuman();

    /*----------------------------------------------------*/
    /*  GallerySlider
    /*----------------------------------------------------*/
     function owl_gallery(){
        $('#gallery').owlCarousel({
            loop:false,
            margin: 0,
            items: 4,
            nav: false,
            dots: true, 
            autoHeight:true,
            autoplay: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                400: {
                    items: 1,
                },
                575: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                992: {
                    items: 4,
                },
                1500: {
                    items: 5,
                }
            }
        })
    }
    owl_gallery();

    function gallery_carousel(){
        $('.gallery_carousel').owlCarousel({
            loop:false,
            margin: 5,
            items: 3,
            nav: false,
            dots:false, 
            smartSpeed: 1000,
            mergeFit:true,
            rewind: true,
            autoHeight:true,
            autoplay: true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                400: {
                    items: 1,
                },
                575: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                }
            }
        })
    }
    gallery_carousel();
	
	/*----------------------------------------------------*/
    /*  Clients Slider
    /*----------------------------------------------------*/
    function link_carousel(){
        if ( $('.link_carousel').length ){
            $('.link_carousel').owlCarousel({
                loop:true,
                margin: 10,
                items: 4,
                nav: false,
                dots:false, 
                lazyLoad : true,
                smartSpeed: 1000,
                autoplay: true,
                autoHeight:false,
                autoplayTimeout:3000,
                autoplayHoverPause:true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    400: {
                        items: 1,
                    },
                    575: {
                        items: 2,
                    },
                    992: {
                        items: 3,
                    },
                    1500: {
                        items: 4,
                    }
                }
            })
        }
    }
    link_carousel();
    
    /*----------------------------------------------------*/
    /*  Link Widget Slider
    /*----------------------------------------------------*/
    function link_widget_carousel(){
        if ( $('.link_widget_carousel').length ){
            $('.link_widget_carousel').owlCarousel({
                loop:true,
                margin: 0,
                items: 1,
                nav: false,
                dots:false, 
                lazyLoad : true,
                smartSpeed: 1000,
                autoplay: true,
                autoHeight:false,
                autoplayTimeout:3000,
                autoplayHoverPause:true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    400: {
                        items: 1,
                    },
                    575: {
                        items: 1,
                    },
                    992: {
                        items: 1,
                    },
                    1500: {
                        items: 1,
                    }
                }
            })
        }
    }
    link_widget_carousel();
	
	/*----------------------------------------------------*/
    /*  MailChimp Slider
    /*----------------------------------------------------*/
    function mailChimp(){
        $('#mc_embed_signup').find('form').ajaxChimp();
    }
    mailChimp();
	
	$('select').niceSelect();
	
	/*----------------------------------------------------*/
    /*  Simple LightBox js
    /*----------------------------------------------------*/
    $('.imageGallery1 .light').simpleLightbox();
	
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
	
	
	/*----------------------------------------------------*/
    /*  Google map js
    /*----------------------------------------------------*/
     
    if ( $('#mapBox').length ){
        var $lat = $('#mapBox').data('lat');
        var $lon = $('#mapBox').data('lon');
        var $zoom = $('#mapBox').data('zoom');
        var $marker = $('#mapBox').data('marker');
        var $info = $('#mapBox').data('info');
        var $markerLat = $('#mapBox').data('mlat');
        var $markerLon = $('#mapBox').data('mlon');
        var map = new GMaps({
        el: '#mapBox',
        lat: $lat,
        lng: $lon,
        scrollwheel: false,
        scaleControl: true,
        streetViewControl: false,
        panControl: true,
        disableDoubleClickZoom: true,
        mapTypeControl: false,
        zoom: $zoom,
            styles: [
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#dcdfe6"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "stylers": [
                        {
                            "color": "#808080"
                        },
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#dcdfe6"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#ffffff"
                        },
                        {
                            "weight": 1.8
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#d7d7d7"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#ebebeb"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#a7a7a7"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#efefef"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#696969"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#737373"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#d6d6d6"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {},
                {
                    "featureType": "poi",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#dadada"
                        }
                    ]
                }
            ]
        });
    }
	
	/*----------------------------------------------------*/
    /*  Google map js
    /*----------------------------------------------------*/
     
    if ( $('#mapBox2').length ){
        var $lat = $('#mapBox2').data('lat');
        var $lon = $('#mapBox2').data('lon');
        var $zoom = $('#mapBox2').data('zoom');
        var $marker = $('#mapBox2').data('marker');
        var $info = $('#mapBox2').data('info');
        var $markerLat = $('#mapBox2').data('mlat');
        var $markerLon = $('#mapBox2').data('mlon');
        var map = new GMaps({
        el: '#mapBox2',
        lat: $lat,
        lng: $lon,
        scrollwheel: false,
        scaleControl: true,
        streetViewControl: false,
        panControl: true,
        disableDoubleClickZoom: true,
        mapTypeControl: false,
        zoom: $zoom,
            styles: [
				{
					"featureType": "administrative.country",
					"elementType": "geometry",
					"stylers": [
						{
							"visibility": "simplified"
						},
						{
							"hue": "#ff0000"
						}
					]
				}
			]
        });
    }
	

})(jQuery)