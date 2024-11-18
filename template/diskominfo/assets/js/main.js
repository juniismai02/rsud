// ============ // SLICK.JS \\ ============\\
$(document).ready(function(){ 
  $(".slick-home").slick({
    dots: true,
    arrows: false,
    infinite: true,
    slidesToShow: 1,
    rows:1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
  });
  
  
  $(".slick-regular").slick({
    dots: false,
    infinite: true,
    slidesToShow: 2,
    rows:2,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      } 
    ]
  });

  $(".slick-vertical").slick({
    dots: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    vertical: true,
    verticalSwiping: true,
    asNavFor: '.slick-vertical-nav',
    responsive: [
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          // vertical: false,
          // verticalSwiping: true,
        }
      } 
    ]
  });

  $(".slick-vertical-nav").slick({
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    vertical: true,
    asNavFor: '.slick-vertical',
    verticalSwiping: true,
    focusOnSelect: true,
    // centerMode: true,
    prevArrow: '<div class="arrow-vup arrow-v"><span class="arrowup"></span></div>',
    nextArrow: '<div class="arrow-vdown arrow-v"><span class="arrowdown"></span></div>',
    // arrows: false,

    responsive: [
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 3.9,
          slidesToScroll: 1,
        }
      } 
    ]
  });

  // $('.left-selector').on('click', function(){
  //   $('.slick-vertical').slick("slickNext");
  // });
  // $('.right-selector').on('click', function(){
  //   // $('.slick-vertical-nav').slickPrev();
  //   $('.slick-vertical').slick("slickPrev");
  // });


  // kalendar
  $(".slick-kalendar").slick({
    dots: false,
    infinite: true,
    arrows:false,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.slick-kalendar-nav',
    responsive: [
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      } 
    ]
  });

  $(".slick-kalendar-nav").slick({
    dots: false,
    arrows:false,
    infinite: true,
    slidesToShow: 7,
    slidesToScroll: 1,
    asNavFor: '.slick-kalendar',
    focusOnSelect: true,
    centerMode: false,

    responsive: [
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
        }
      } 
    ]
  });

  $(".slick-news-slider").slick({
    dots: true,
    infinite: true,
    arrows:false,
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  $(".slick-three-slider").slick({
    arrows: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '<div class="arrow-hleft arrow-h"><span class="arrowleft"></span></div>',
    nextArrow: '<div class="arrow-hright arrow-h"><span class="arrowright"></span></div>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
        
      },
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
        
      }

    ]
  });



  $(".slick-galeri-slider").slick({
    arrows: true,
    infinite: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow: '<div class="arrow-hleft arrow-h"><span class="arrowleft"></span></div>',
    nextArrow: '<div class="arrow-hright arrow-h"><span class="arrowright"></span></div>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
        
      },
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 1.5,
          slidesToScroll: 1,
        },
        
      }

    ]
  });



  
  // $(".slick-service-slider").slick({
  //   dots: false,
  //   infinite: true,
  //   arrows:false,
  //   slidesToShow: 1,
  //   slidesToScroll: 1,
  //   asNavFor: '.slick-service-nav',
  //   responsive: [
  //     {
  //       breakpoint: 481,
  //       settings: {
  //         slidesToShow: 1,
  //         slidesToScroll: 1,
  //       }
  //     } 
  //   ]
  // });

    // xxx
    var numSlick = 0;
    $('.slick-service-slider').each( function() {
      numSlick++;
      $(this).addClass( 'sliderx-' + numSlick ).slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<div class="arrow-hleft arrow-h"><span class="arrowleft"></span></div>',
    nextArrow: '<div class="arrow-hright arrow-h"><span class="arrowright"></span></div>',
        focusOnSelect: true,
        fade: true,
        asNavFor: '.slick-service-nav.sliderx-' + numSlick
      });
    });


    numSlick = 0;
    $('.slick-service-nav').each( function() {
      numSlick++;
      $(this).addClass( 'sliderx-' + numSlick ).slick({
        vertical: false,
        centerMode: false,
        centerPadding: '0px',
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slick-service-slider.sliderx-' + numSlick,
           prevArrow: '<div class="arrow-hleft arrow-h"><span class="arrowleft"></span></div>',
    nextArrow: '<div class="arrow-hright arrow-h"><span class="arrowright"></span></div>',
        focusOnSelect: true,
        responsive: [
          {
            breakpoint: 800,
            settings: {
              slidesToShow: 2,
             }
          }
        ]
      });
    });
  
    $('.slick-service-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
      var current = $(slick.$slides[currentSlide]);
      current.html(current.html());
    });


  $(".slick-arrowcustom").slick({
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    lazyLoad: 'ondemand',
    prevArrow: '<div class="arrowcustom arrowleft"></div>',
    nextArrow: '<div class="arrowcustom arrowright"></div>',
    responsive: [
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      } 
    ]
  });
  
  // ============ // SLICK FILTER FUNCTION \\ ============\\
  // options for 1 rows
  var options = {
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: false,
    arrows:false,
    dots : false,
    rows:1,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 640,
        settings: {
          slidesToShow: 1.5,
        }
      },

    ]
  }
  // options for 2 rows
  var options2 = {
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows:false,
    infinite: false,
    dots : true,
    rows:2,

    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 640,
        settings: {
          slidesToShow: 1.5,
        }
      },

    ]

  }
  // initialize 1 slick - im using 2 rows options
  $('.containt').slick(options2);

  // filter input function 
  $('#js-filter-input').on('keyup', (e) => {
    // delete slick 
    $('.containt').slick('unslick');
    // reconstruct using 1 rows option
    $('.containt').slick(options);
    // the filter function 
    let flt = $('#js-filter-input').val().toUpperCase();
    let filter = $('.element');
    filter.hide();
    // loop the element which contain data-containt
    for(let i=0;i<filter.length;i++) {
      let data = $(filter[i]).data('containt');
      // console.log(data)
      if (data.match(flt)) {
        $(filter[i]).show();
        // console.log(data);
      } 
    }

    // if the input is empty || default state
    if (!$('#js-filter-input').val()) {    
      // alert('DEFAULT SHOW!');
      $('.error').hide();
      // reintialize slick 
      $('.containt').slick('unslick');
      $('.containt').slick(options2);
    }

    // if there is a visible element on search 
    else if($('.element').is(":visible") === true){
      // alert('HASIL SHOW');
      $('.error').hide();
    }
    // if no search found
    else if($('.element').is(":visible") === false){
      // alert("ERROR SHOW")    
      $('.error').show();
    }
  });
  // ============ // END SLICK FILTER FUNCTION \\ ============\\


  // ============ // TAB FUNCTION \\ ============\\
    $('ul.tabs li').click(function(){
      var tab_id = $(this).attr('data-tab');
  
      $('ul.tabs li').removeClass('current');
      $('.tab-content').removeClass('current');
  
      $(this).addClass('current');
      $("#"+tab_id).addClass('current');
    })
  



});


//++++++++++ CUSTOMIZED JS ++++++++++//
$(document).ready(function () {
	$('#myTable').DataTable({"aaSorting": []});
	
	$('#myTableApi').DataTable({searching: false});
	
  // ============ // Backtotop Hide Btn \\ ============\\
  $(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
  });
 // ========== # Backtotop CLick # ========== \\
  $('#back-to-top').on('click', function (e) {
   e.preventDefault();
      $('html,body').animate({
        scrollTop: 0
      }, 700);
  });
 

 // ========== # Tabbed SlickJS # ========== \\
  $('.slidertab__button').click(function () {
    var tabID = $(this).attr('id'); 
    $('.slidertab__wrap').fadeOut();
    $('.slick-arrowcustom').removeClass('slick-initialized');
    $('#'+tabID+'-tab').fadeIn("300", function() {
      $('.slick-arrowcustom').addClass('slick-initialized')
      $('.slick-arrowcustom').slick("setPosition", 0);
    });
  });
 
  $(function(){
    $('.slidertab__button').each(function(){
      var buttonID = $(this).attr('id');
      if ($('.'+buttonID+'').length > 0){
        console.log('lebih >1');
        $(this).removeClass('btn-nonactive')
      } 
      else{
        console.log('zero')
        $(this).addClass('btn-nonactive').prop("disabled",true);
      }
    });
  });
 
  // ============ // SEARCH SHOW \\ ============\\
  $('.cari__icon, .cari__close, .cari__overlay').click(function () {
    $('.cari__form').fadeToggle();
  });

  // ============ // BURGER MENU \\ ============\\
  // $('.burger').click(function () {
  //   $('.menu').slideToggle();
  // });

  // burgermenu
  $('.burger').click( function() {
    $(this).toggleClass('tutup');
    $(".menu__outer").toggle();
    
    // $('.menu__wrap').toggleClass('menumobile');
    // $('.mobile-menutitle').toggle();

    

     

  });

  $('.search__icon').click( function() {
    $('.scari-icon').toggle();
    $('.sclose-icon').toggle();
    $('.search__form-outer').fadeToggle();
  });

 






  // ============ // FOOTER BANNER CLOSE \\ ============\\
  $('.banner-footer-close').click(function () {
    $('.banner-footer ').fadeOut();
  });
  var a = $('.banner-footer-inner img').length;
 
  if (a === 0){
    $('.banner-footer-close').hide();
  }

// ========== # Sticky Nav Menu Scrolling # ========== \\
  $(window).scroll(function(){
    var top = $('.sticky-trigger').offset().top - 0;
    var tinggiCek = $('.mainmenu').height();
    // var tinggiFinal = tinggiCek + 50 + "px";

    if ($(this).scrollTop() > top) {
      $('.mainmenu').addClass('is-sticky');
      $('.mainmenu-spacer').css("height",tinggiCek);
      $(".mainmenu").css("margin-top", "0px"); 
    } else {
      $('.mainmenu').removeClass('is-sticky');
      $('.mainmenu-spacer').removeAttr("style");
    }
    
  });


  // ========== # SLider Home dan Sticky menu # ========== \\
  if ($(".slidelax").length) {
    menuSticky2();
    function menuSticky2(){
      var xu = $(".mainmenu").height() * (-1);
      // $(".mainmenu").css("margin-top", " "+xu+"px"); 
    }  
  }

  sliderHomeResize();
  function sliderHomeResize(){
    var newWindowWidth = $(window).width();
    if (newWindowWidth < 768) {
     var xi = $(".homeimg").height()

    }
    else if (newWindowWidth > 768) {
      var xi = $(".homeimg").height() - 45

    }




    $(".slidelax").css("height", " "+xi+"px");
  }

  //getheight home slider
  $(window).resize(function(){
    sliderHomeResize();
    menuSticky2();
  });

  
  // ========== # Sosialoasai Popup # ========== \\
  $(".sosial__row").click(function () {
    var sosImg = $(this).children(".sosial__img").children("img").attr('src');
    var sosJudul = $(this).children(".sosial__title").find("h3").html();
    var sosSummary = $(this).children(".sosial__summary").html();
    
    // console.log(sosImg)
    // console.log(sosJudul)
    // console.log(sosSummary)
    
    $(".popup").fadeIn();
    $(".popsosial").fadeIn();
    
    $(".popsosial").find(".popsosial-img").children().attr("src", sosImg);
    $(".popsosial").find(".popsosial-title").html(sosJudul);
    $(".popsosial").find(".popsosial-summary").html(sosSummary);
    
  });


  $(".popup-overlay, .popup-close").click(function () {
    $(".popup").fadeOut();
    $(".popsosial").fadeOut();


  
  })


  

  // xx



});

// tar dlu 
// $(window).on("load", function (e) {
//   sliderHomeResize()
// })


checkScreenSize();
function checkScreenSize(){
  var newWindowWidth = $(window).width();
  if (newWindowWidth < 992) {
    $(".menu__utama ul li.has-dropdown i").click(function(){
      // $(this).parent().parent().next('ul').slideToggle();
      $(this).parent().next('ul').slideToggle();
    });
    
    $(".menu__utama ul li.has-dropdown a").click(function(){
      $(".menu__outer").slideToggle();
      $(".burger").toggleClass('tutup');
    });



  }  
}





// ========== # Convert Alt Image to Text # ========== \\
// $(function(){
//   $('.detailcontent p img').each(function(){
//     var alt = $(this).attr("alt");
//     $(this).after("<div class='captiondetail'> "+alt+"</div> "   ); 
//   });
// });

// ========== # Show Textarea Remaining Character # ========== \\
$(".char-textarea").on("keyup",function(event){
  checkTextAreaMaxLength(this,event);
});

// ========== # Checks the MaxLength of the Textarea # ========== \\
function checkTextAreaMaxLength(textBox, e) { 
    var maxLength = parseInt($(textBox).data("length"));
    if (!checkSpecialKeys(e)) { 
        if (textBox.value.length > maxLength - 1) textBox.value = textBox.value.substring(0, maxLength); 
   } 
  $(".char-count").html(maxLength - textBox.value.length);
    
    return true; 
} 
/* Checks if the keyCode pressed is inside special chars
-------------------------------------------------------
@prerequisite:	e = e.keyCode object for the key pressed
*/
function checkSpecialKeys(e) { 
    if (e.keyCode != 8 && e.keyCode != 46 && e.keyCode != 37 && e.keyCode != 38 && e.keyCode != 39 && e.keyCode != 40) 
        return false; 
    else 
        return true; 
}
 


 