/* Add Custom Code Jquery
 ========================================================*/
$(document).ready(function(){
	// Fix hover on IOS
	$('body').bind('touchstart', function() {}); 
	
	// video
	$(document).ready(function() {
	    $('.home23-video').magnificPopup({
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



	// nav scroll
	jQuery(function(){
		$(window).load(function() {
			var hei1 = $('.typeheader-28').outerHeight();
			var hei2 = $('.slideshow28').outerHeight();
			var hei = hei1 + hei2;			
			
			var navScroll = $("#box-link1");
			
			// if (navScroll.length > 0) {
			// 	jQuery(".custom-scroll").css("top",hei);
	  		//       }
	  		if (navScroll.length > 0) {				
				//jQuery(".custom-scroll").css("top",hei);
				jQuery(".custom-scroll").css("display","none");

				$(window).scroll(function() {
					if( $(window).scrollTop() > navScroll.offset().top  ) {						
						jQuery(".custom-scroll").css("display","block");
					} 
					else {				
						//jQuery(".custom-scroll").css("top",navScroll.offset().top);
						jQuery(".custom-scroll").css("display","none");
					}
			
				});

	        }

	    })
	});
	
	jQuery(function(){
		$('#nav-scroll').onePageNav({
			currentClass: 'active',
			changeHash: false,
			scrollSpeed: 750,
			scrollThreshold: 0.5,
			filter: '',
			easing: 'swing',
			
		});

		
	});

	// Messenger Top Link
	$('.list-msg').owlCarousel2({
		pagination: false,
		center: false,
		nav: false,
		dots: false,
		loop: true,
		slideBy: 1,
		autoplay: true,
		margin: 30,
		autoplayTimeout: 4500,
		autoplayHoverPause: true,
		autoplaySpeed: 1200,
		startPosition: 0, 
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},
			768:{
				items:1
			},
			1200:{
				items:1
			}
		}
	});






	// Close pop up countdown
	 $( "#so_popup_countdown .customer a" ).click(function() {
	  $('body').toggleClass('hidden-popup-countdown');
	 });
	// =========================================


	// click header search header 
	jQuery(document).ready(function($){
		$( "header .search-header-w .icon-search" ).click(function() {
		$('header #sosearchpro .search').slideToggle(200);
		$(this).toggleClass('active');
		});
	});

	// click header search header 29 
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
        

	// add class Box categories
	jQuery(document).ready(function($){

		if($("#accordion-category .panel .panel-collapse").hasClass("in")){
			$('#accordion-category .panel .accordion-toggle').addClass("show");			
		} 
		else{
			$('#accordion-category .panel .accordion-toggle').removeClass("show");
		}

	});

	// slider categories
	jQuery(document).ready(function($) {
	    var slidercate = $(".custom-slidercates.so-categories .cat-wrap");
	    slidercate.owlCarousel2({    
	    margin:10,
	    nav:true,
	    loop:true,
	    dots: false,
	    navText: ['',''],
	    responsive:{
	            0:{
	                items:1
	            },
	            480:{
	                items:2
	            },
	            768:{
	                items:4
	            },
	            992:{
	                items:4
	            },
	            1200:{
	                items:6
	            },
	        },
	    })
	});

	jQuery(document).ready(function($) {
	    var slidercate = $(".custom-slidercates25.so-categories .cat-wrap");
	    slidercate.owlCarousel2({    
	    margin:30,
	    nav:true,
	    loop:true,
	    dots: false,
	    navText: ['',''],
	    responsive:{
	            0:{
	                items:1
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
	                items:6
	            },
	            1650:{
	                items:8
	            },
	        },
	    })
	});

	jQuery(document).ready(function($) {
	    var slidercate = $(".custom-slidercates31.so-categories .cat-wrap");
	    slidercate.owlCarousel2({    
	    margin:30,
	    nav:false,
	    loop:false,
	    dots: false,
	    navText: ['',''],
	    responsive:{
	            0:{
	                items:1
	            },
	            480:{
	                items:2
	            },
	            768:{
	                items:3
	            },
	            992:{
	                items:4
	            },
	            1200:{
	                items:4
	            },
	            1650:{
	                items:4
	            },
	        },
	    })
	});

	jQuery(document).ready(function($) {
	    var slidercate = $(".custom-slidercates32.so-categories .cat-wrap");
	    slidercate.owlCarousel2({    
	    margin:20,
	    nav:true,
	    loop:true,
	    dots: false,
	    navText: ['',''],
	    responsive:{
	            0:{
	                items:1
	            },
	            480:{
	                items:2
	            },
	            768:{
	                items:3
	            },
	            992:{
	                items:4
	            },
	            1200:{
	                items:5
	            },
	            1650:{
	                items:6
	            },
	        },
	    })
	});



	jQuery(function(){
		$(window).load(function() {
			var hei = $('.typeheader-34').outerHeight();
			var windowsheight = $(window).height();	
				$(window).scroll(function() {
					if( $(window).scrollTop() > hei  ) {
						//$(".custom-scoll").fadeIn();
						
						jQuery("#content .col-left").addClass("sticky-active");
						jQuery("#content .col-right").addClass("right-active");
						jQuery("#content .col-left").css("max-height",windowsheight);
					} 
					else{
						jQuery("#content .col-left").removeClass("sticky-active");
						jQuery("#content .col-right").removeClass("right-active");
						jQuery(".box-info-product").removeClass("fixed-top");
					}
					
				});       
	    })
	});

	$(".typeheader-35 .nav-menu .ico-nav").click(function () {
		if($('.nav-menu .megamenu-style-dev').hasClass('so-vertical-active'))
			$('.nav-menu .megamenu-style-dev').removeClass('so-vertical-active');
		else
			$('.nav-menu .megamenu-style-dev').addClass('so-vertical-active');
	}); 
	$(".typeheader-35 #remove-verticalmenu").click(function () {
		if($('.nav-menu .megamenu-style-dev').hasClass('so-vertical-active'))
			$('.nav-menu .megamenu-style-dev').removeClass('so-vertical-active');
		
	}); 
	
	// custom to show footer center
	$(".button-toggle").click(function () {
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
