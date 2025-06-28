/* Add Custom Code Jquery
 ========================================================*/
$(document).ready(function(){
	// Fix hover on IOS
	$('body').bind('touchstart', function() {}); 
	




// custom bar
$(document).ready(function(){
    $(".custom-bar .close-bar").on('click',function(){
        if($('.custom-bar').hasClass('active')){
            $('.custom-bar').removeClass('active');
        }else{
            $('.custom-bar').removeClass('active');
            $('.custom-bar').addClass('active');
        }
     });
});
	
	// video

	$(document).ready(function() {
	    $('.home1-video').magnificPopup({
	      type: 'iframe',
	      iframe: {
	      patterns: {
	         youtube: {
	          index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
	          id: 'v=', // String that splits URL in a two parts, second part should be %id%
	          src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
	          },
	        }
	      }
	    });
	});


	// Close pop up countdown
	 $( "#so_popup_countdown .customer a" ).click(function() {
	  $('body').toggleClass('hidden-popup-countdown');
	 });
	// =========================================

	// ==============index 5 ===========================
	jQuery(document).ready(function($){
		$( ".custom-content-w .close-btn" ).click(function() {
		$('.custom-content-w').slideToggle(200);
		$(this).toggleClass('active');
		});
	});

	// click header search header 
	jQuery(document).ready(function($){
		$( ".search-header-w .icon-search" ).click(function() {
		$('#sosearchpro .search').slideToggle(200);
		$(this).toggleClass('active');
		});
	});

 //    $(document).ready(function(){
	//     $(".main-menu-w .icon-menu").on('click',function(){
	//         if($('.main-menu-w').hasClass('active')){
	//             $('.main-menu-w').removeClass('active');
	//         }else{
	//             $('.main-menu-w').removeClass('active');
	//             $('.main-menu-w').addClass('active');
	//         }
	//      });
	// });
	
	$("#icon-menu").click(function () {
		if($('.main-menu-w').hasClass('menu-active'))
			$('.main-menu-w').removeClass('menu-active');
		else
			$('.main-menu-w').addClass('menu-active');
	}); 
	$("#close-menu").click(function() {
        $('.main-menu-w').removeClass('menu-active');
        return false;
    });

	//slider categories

	jQuery(document).ready(function($) {
	    var slidercate = $(".categories-layout1 .cat-wrap");
	    slidercate.owlCarousel2({    
	    margin: 20,
	    nav: false,
	    loop: true,
	    dots: false,
	    rows: 1,
	    navText: ['',''],
	    responsive:{
	            0:{
	                items:2
	            },
	            480:{
	                items:2
	            },
	            768:{
	                items:4
	            },
	            992:{
	                items:5
	            },
	            1200:{
	                items:7
	            },
	            1365:{
	                items:10
	            },
	        },
	    })
	});


	// page location
	$('.tab-promotions .nav-tabs').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: false,
		infinite: true,
		arrows: true,	
		dots: false,
		initialSlide: 0,
		//fade: true,
		vertical: true,
		verticalSwipping: true,	
		focusOnSelect: true,
		
		//appendArrows: ".location-nav",
		prevArrow: '<span class="slick-prev"><i class="fa fa-angle-up"></i></span>', 
		nextArrow: '<span class="slick-next"><i class="fa fa-angle-down"></i></span>',
	});


	// click header search header 3 
	jQuery(document).ready(function($){
		$('.search-header .icon-search').click(function(e){
          e.preventDefault();
          $('#sosearchpro .search').toggleClass("nav-open");
          $('.search-screen').addClass("nav-open");
          $('.search-header-w .icon-search').addClass("active");
          //$(this).toggleClass('active');
        });
	
        $('.search-screen ').click(function(e){
          e.preventDefault();
          $(this).toggleClass("nav-open");
          $('#sosearchpro .search').removeClass("nav-open");
          $('.search-header-w .icon-search').removeClass("active");
        });
	});
	
	jQuery(function(){
		$('.counter').counterUp({
		    delay: 20,
		    time: 500
		});
	});
	// custom to show footer center
	$(".description-toggle").click(function () {
		if($('.showmore').hasClass('active'))
			$('.showmore').removeClass('active');
		else
			$('.showmore').addClass('active');
	}); 


	$(".content-product-content .button-toggle").click(function () {
		if($(this).children('.showmore').hasClass('active')) $(this).children().removeClass('active');
		else $(this).children().addClass('active');
		
		
		
		if($(this).prev().hasClass('showdown')) $(this).prev().removeClass('showdown').addClass('showup');
		else $(this).prev().removeClass('showup').addClass('showdown');
	}); 

	$(".clearable").each(function() {
  
	  var $inp = $(this).find("input:text"),
	      $cle = $(this).find(".clearable__clear");

	  $inp.on("input", function(){
	    $cle.toggle(!!this.value);
	  });
	  
	  $cle.on("touchstart click", function(e) {
	    e.preventDefault();
	    $inp.val("").trigger("input");
	  });
	  
	});

});
