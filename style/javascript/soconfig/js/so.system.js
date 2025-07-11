/* ------------------------------------------------------ /
	Magentech jQuery
	Created by Magentech
	All rights reserved.
	+----------------------------------------------------+
		TABLE OF CONTENTS
	+----------------------------------------------------+
	
	[1]		Quickview - jQuery elevateZoom
	[2]		Quantity plus minus - Product Detail
	[3]		Social Widgets Accounts - Slidebar
	[4]		Back To Top - Slidebar
	[5]		Language and Currency Dropdowns
	[6]		Preloading Screen
	[7]		Simple Blog - Magnific Popup
	[8]		Preloader Function
/ ---------------------------------------------------- */

/* Preloading Screen
 ========================================================*/
$(window).load(function() {
	// Animate loader off screen
	setTimeout(function () {
        $('body').addClass('loaded');
    }, 1500);
	
});

/* Quickview - jQuery elevateZoom
 ========================================================*/
$(function ($) {
    $('.products-list').magnificPopup({
        delegate: '.quickview',
        preloader: true,
        tLoading: '',
        type: 'iframe',
        mainClass: 'my-mfp-zoom-in',
        removalDelay: 200,
        gallery: {enabled: true},
        callbacks: {
        open: function() {
          
        },
        beforeOpen: function() {

            $('[data-toggle=\'tooltip\']').hover(
                function() {
                },
                function(e) {
                  $('[data-toggle=\'tooltip\']').tooltip('hide');
                }
            );
        },
        afterClose: function() {
            $('[data-toggle=\'tooltip\']').tooltip('hide');
        },
        
      }
    });

    $('.image-popup-sizechart').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
        verticalFit: true
        }
    });
});

/* Quantity plus minus - Product Detail
 ========================================================*/
$(function ($) {
    "use strict";
    $.initQuantity = function ($control) {
        $control.each(function () {
            var $this = $(this),
                data = $this.data("inited-control"),
                $plus = $(".input-group-addon:last", $this),
                $minus = $(".input-group-addon:first", $this),
                $value = $(".form-control", $this);
            if (!data) {
                $control.attr("unselectable", "on").css({
                    "-moz-user-select": "none",
                    "-o-user-select": "none",
                    "-khtml-user-select": "none",
                    "-webkit-user-select": "none",
                    "-ms-user-select": "none",
                    "user-select": "none"
                }).bind("selectstart", function () {
                    return false
                });
                $plus.click(function () {
                    var val =
                        parseInt($value.val()) + 1;
                    $value.val(val);
                    return false
                });
                $minus.click(function () {
                    var val = parseInt($value.val()) - 1;
                    $value.val(val > 0 ? val : 1);
                    return false
                });
                $value.blur(function () {
                    var val = parseInt($value.val());
                    $value.val(val > 0 ? val : 1)
                })
            }
        })
    };
    $.initQuantity($(".quantity-control"));
    $.initSelect = function ($select) {
        $select.each(function () {
            var $this = $(this),
                data = $this.data("inited-select"),
                $value = $(".value", $this),
                $hidden = $(".input-hidden", $this),
                $items = $(".dropdown-menu li > a", $this);
            if (!data) {
                $items.click(function (e) {
                    if ($(this).closest(".sort-isotope").length >
                        0) e.preventDefault();
                    var data = $(this).attr("data-value"),
                        dataHTML = $(this).html();
                    $this.trigger("change", {
                        value: data,
                        html: dataHTML
                    });
                    $value.html(dataHTML);
                    if ($hidden.length) $hidden.val(data)
                });
                $this.data("inited-select", true)
            }
        })
    };
    $.initSelect($(".btn-select"))
});

/* Social Widgets Accounts - Slidebar
 ========================================================*/
$(function ($) {
    "use strict";
    var socialItems = $('.social-widgets .items .item');
    var counter = 0;
    socialItems.each(function () {
        counter++;
        var itemclass = "item-0" + counter;
        $(this).addClass(itemclass)
    });
});

$(function ($) {
    "use strict";
    $(".social-widgets .item").each(function () {
        var $this = $(this),
            timer;
        $this.on("mouseenter", function () {
            var $this = $(this);
            if (timer) clearTimeout(timer);
            timer = setTimeout(function () {
                $this.addClass("active")
            }, 200)
        }).on("mouseleave", function () {
            var $this = $(this);
            if (timer) clearTimeout(timer);
            timer = setTimeout(function () {
                $this.removeClass("active")
            }, 100)
        }).on("click", function (e) {
            e.preventDefault()
        })
    })
});


$(function ($) {
    "use strict";
    var loadmap = $(".social-widgets .item a");
    loadmap.click(function (e) {
        e.preventDefault()
    });
    loadmap.hover(function (e) {
        if (!$(this).parent().hasClass("load")) {
            var loadcontainer = $(this).parent().find(".loading");
            $.ajax({
                url: $(this).attr("href"),
                cache: false,
                success: function (data) {
                    setTimeout(function () {
                        loadcontainer.html(data)
                    }, 1000)
                }
            });
            $(this).parent().addClass("load")
        }
    })
});

/* Back To Top - Slidebar
 ========================================================*/
$(function ($) {
    "use strict";
    /*Back to top */
	$(".back-to-top").addClass("hidden-top");
		$(window).scroll(function () {
		if ($(this).scrollTop() === 0) {
			$(".back-to-top").addClass("hidden-top")
		} else {
			$(".back-to-top").removeClass("hidden-top")
		}
	});

	$('.back-to-top').click(function () {
		$('body,html').animate({scrollTop:0}, 1200);
		return false;
	});	
	
	// Hide tooltip when clicking on it
   /* var hasTooltip = $("[data-toggle='tooltip']").tooltip();
	hasTooltip.on('click', function () {
		    $(this).tooltip('hide')
	});*/
});

/* Language and Currency Dropdowns
 ========================================================*/
$(document).ready(function(){
	$screensize = $(window).width();
	if ($screensize > 1300) {
		$('#form-currency, #form-language, #my_account').hover(
			function(){$(this).find('.btn-group').toggleClass('open');}
		)
		$('#my_account,#cart,#location').hover(
			function(){$(this).toggleClass('open');}
		)
	}
	
	// Product detial reviews button
	$(".reviews_button,.write_review_button").click(function (){
        var tabTop = $(".producttab").offset().top;
        $("html, body").animate({ scrollTop:tabTop }, 1000);
    });
   
    // Resonsive Header Top
    $(".collapsed-block .expander").click(function (e) {
        var collapse_content_selector = $(this).attr("href");
        var expander = $(this);
		
        if (!$(collapse_content_selector).hasClass("open")) {
			expander.addClass("open").html("<i class='fa fa-angle-up'></i>") ;
		}
		else expander.removeClass("open").html("<i class='fa fa-angle-down'></i>");
		
		if (!$(collapse_content_selector).hasClass("open")) $(collapse_content_selector).addClass("open").slideDown("normal");
        else $(collapse_content_selector).removeClass("open").slideUp("normal");
        e.preventDefault()
    })
	
	// Resonsive Sidebar aside
	$(".open-sidebar").click(function(e){
        e.preventDefault();
        $(".sidebar-overlay").toggleClass("show");
        $(".sidebar-offcanvas").toggleClass("active");
    });
      
    $(".sidebar-overlay").click(function(e){
        e.preventDefault();
        $(".sidebar-overlay").toggleClass("show");
        $(".sidebar-offcanvas").toggleClass("active");
    });
    $('#close-sidebar').click(function() {
        $('.sidebar-overlay').removeClass('show');
        $('.sidebar-offcanvas').removeClass('active');
        
    }); 
});

	
	
/* Simple Blog - Magnific Popup
 ========================================================*/
$(function ($) {
	 $('.image-popup').magnificPopup({
	  type: 'image',
	  closeOnContentClick: true,
	  image: {
		verticalFit: false
	  }
	});
	
	$('.blog-listitem').magnificPopup({
	  delegate: '.popup-gallery',
	  type: 'image',
	  tLoading: 'Loading image #%curr%...',
	  mainClass: 'mfp-img-mobile',
	  gallery: {
		enabled: true,
		navigateByImgClick: true,
		preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	  },
	  image: {
		tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
		titleSrc: function(item) {
		  return item.el.attr('title') ;
		}
	  }
	});
});	

/* preloader Function
 ========================================================*/
$(function ($) {
	// Preloader
    if (typeof so_preloader === 'undefined') {
        so_preloader = '';
    }
    if (so_preloader.length == 0) {
            if ($('#line-load').length > 0) {
                move();
            }
            setTimeout(function () {
              $('.so-pre-loader').fadeOut();
            }, 2000);
       
    } // has preloader
    //preloader Function
	
	function move() {
		var elem = document.getElementById("line-load");
		var width = 1;
		var id = setInterval(frame, 10);

		function frame() {
			if (width >= 100) {
				clearInterval(id);
			} else {
				width++;
				elem.style.width = width + '%';
				elem.style.height = '4px';
			}
		   //$('.so-pre-loader').find('.run-number').html(width);
		}
	}
});	

/* Slider Function
 ========================================================*/

$(function ($) {
    "use strict";
    $('.contentslider').each(function () {
        var $slider = $(this),
            $panels = $slider.children(),
            data = $slider.data(),
            $totalItem = $panels.length;
			// Apply Owl Carousel
		$slider.on("initialized.owl.carousel2", function () {
			setTimeout(function() {
			   $slider.parent().find('.loading-placeholder').hide();
			}, 1000);

		});
        // Apply Owl Carousel
        $slider.owlCarousel2({
            responsiveClass: true,
            mouseDrag: true,
            video:true,
            autoWidth: (data.autowidth == 'yes') ? true : false,
            animateIn: data.transitionin,
            animateOut: data.transitionout,
            lazyLoad: (data.lazyload == 'yes') ? true : false,
            autoplay: (data.autoplay == 'yes') ? true : false,
            autoHeight: (data.autoheight == 'yes') ? true : false,
            autoplayTimeout: data.delay * 1000,
            smartSpeed: data.speed * 1000,
            autoplayHoverPause: (data.hoverpause == 'yes') ? true : false,
            center: (data.center == 'yes') ? true : false,
            loop: (data.loop == 'yes') ? true : false,
            dots: (data.pagination == 'yes') ? true : false,
            rtl: (data.rtl == 'yes') ? true : false,
            nav: true,
            dotClass: "owl2-dot",
            dotsClass: "owl2-dots",
            margin: data.margin,
            navText: ['next','prev'],
            navClass: ["owl2-prev", "owl2-next"],
            responsive: {
                0: {
                    items   : data.items_column4,
                    nav     : ($totalItem > data.items_column4 && data.arrows == 'yes') ? true : false
                },
                480: {
                    items   : data.items_column3,
                    nav     : ($totalItem > data.items_column3 && data.arrows == 'yes') ? true : false
                },
                768: {
                    items   : data.items_column2,
                    nav     : ($totalItem > data.items_column2 && data.arrows == 'yes') ? true : false
                },
                992: { 
                    items   : data.items_column1,
                    nav     : ($totalItem > data.items_column1 && data.arrows == 'yes') ? true : false
                },
                1200: {     
                    items   : data.items_column0,
                    nav     : ($totalItem > data.items_column0 && data.arrows == 'yes') ? true : false
                },
                1650: {     
                    items   : (data.items_column00) ? data.items_column00 : data.items_column0,
                    nav     : ($totalItem > data.items_column00 && data.arrows == 'yes') ? true : false
                }
            }
        });
        

    });
});

//fixed col sidebar
/*
$(document).ready(function(){
	var $window = $(window);
	var $mainWLeft = $(".main-w-left"),
	$mainWRight = $(".main-w-right"),
	$footer = $("footer"),
	$header = $("header"),
	$wrapper = $("#wrapper"),
	$colSticky = $(".col-sticky"),
	$colStickyHeight = $colSticky.height(), 
	$headerHeight = $header.height(),
	$footerHeight = $footer.height(),
	$wrapperHeight = $wrapper.height(),
	$mainWLeftWidth = $colSticky.outerWidth(),
	$mainWRightHeight = $mainWRight.height(), 
	$mainWLeftHeight = $mainWLeft.height(),
	$noShowHeight = $mainWRightHeight - $headerHeight - $mainWLeftHeight;
	var windowWidth = window.innerWidth || document.documentElement.clientWidth; 
	if (windowWidth > 768) {
		$window.scroll(function (){
			if ($window.scrollTop() >= $mainWLeftHeight + $headerHeight + $colStickyHeight + 100) {
				$colSticky.addClass("box-fixed");
				$colSticky.css("width",$mainWLeftWidth);
				if ($window.scrollTop() >= $mainWLeftHeight + $noShowHeight + $headerHeight + $colStickyHeight + 100){
					$colSticky.css("bottom","0");
					$colSticky.css("top","auto");
					$colSticky.css("position","absolute");
				}
			} 
			if ($window.scrollTop() < $mainWLeftHeight){
				if ($colSticky.hasClass("box-fixed")){
					$colSticky.removeClass("box-fixed");
				}
			} 
			
		});
	}
});
*/

