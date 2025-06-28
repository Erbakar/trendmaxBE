(function ($) {
    "use strict";
    var $document = $(document),
        $window = $(window),
        $body = $('body'),
        $html = $('html'),
        $ttPageContent = $('#tt-pageContent'),
        $ttFooter = $('footer'),
        $ttHeader = $('header'),
        $ttLeftColumnAside = $ttPageContent.find('.leftColumn.aside'),
        $ttFilterOptions = $ttPageContent.find('.tt-filters-options'), 
    // Template Blocks
    blocks = {
        ttSliderBlog: $ttPageContent.find('.tt-slider-blog'),
        ttSliderBlogSingle: $ttPageContent.find('.tt-slider-blog-single'),
        ttVideoBlock: $('.tt-video-block'),
        ttProductMasonry: $ttPageContent.find('.tt-product-listing-masonry'),
        ttCollapseBlock: $('.tt-collapse-block'),
        ttMobileProductSlider: $('.tt-mobile-product-slider'),
        ttCollapse: $ttPageContent.find('.tt-collapse'),
        ttProductListing: $ttPageContent.find('.tt-product-listing'),
        ttBtnColumnClose: $ttLeftColumnAside.find('.tt-btn-col-close'),
        ttBtnToggle: $ttFilterOptions.find('.tt-btn-toggle a'),
        ttProductItem: $ttPageContent.find('.tt-product, .tt-product-design02'),
        ttProductDesign02: $ttPageContent.find('.tt-product-design02'),
        ttProductDesign01: $ttPageContent.find('.tt-product'),
        ttLookbook: $ttPageContent.find('.tt-lookbook'),
        ttAirSticky: $ttPageContent.find('.airSticky'),
        ttfooterMobileCollapse: $ttFooter.find('.tt-collapse-title'),
        ttHeaderDropdown: $ttHeader.find('.tt-dropdown-obj'),
        ttDotsAbsolute: $ttPageContent.find('.tt-dots-absolute'),
        ttAlignmentImg: $ttPageContent.find('.tt-alignment-img'),
        ttProductSingleBtnZomm: $ttPageContent.find('.tt-product-single-img .tt-btn-zomm'),
        ttPromoFixed: $('.tt-promo-fixed'),
    };

    var ttwindowWidth = window.innerWidth || $window.width();

    function alignmentColHeight(){
        var ttwindowWidth = window.innerWidth || $window.width();
        if(ttwindowWidth > 409){
          calculatingMaxHeight(ttCompareTable.find('.tt-item .js-description'));
          calculatingMaxHeight(ttCompareTable.find('.tt-item .tt-image-box'));
          calculatingMaxHeight(ttCompareTable.find('.tt-item'));
        } else{
          ttCompareTable.find('.tt-item .js-description').css("height", "auto");
          ttCompareTable.find('.tt-item .tt-image-box').css("height", "auto");
        };
    };
    function calculatingMaxHeight($obj){
      var maxHeight = 0;
      $obj.css("height", "auto").each(function(){
          $(this).css("height", "auto");
          var colHeight = $(this).height();
          if($(this).height() > maxHeight){
              maxHeight = $(this).height();
          };
      });
      $obj.height(maxHeight);
    };
 
    //blog listing slider
    if (blocks.ttMobileProductSlider.length) {
        blocks.ttMobileProductSlider.slick({
          dots: false,
          arrows: true,
          infinite: true,
          speed: 300,
          slidesToShow: 1,
          adaptiveHeight: true,
           lazyLoad: 'progressive',
        });
        if($html.hasClass('ie')){
          blocks.ttModalQuickView.each(function() {
              blocks.ttMobileProductSlider.slick("slickSetOption", "infinite", false);
          });
        };
    };
 
   if (blocks.ttDotsAbsolute.length) {
      ttSlickDots();
   }; 
    // product single tt-btn-zomm(*magnific popup)
    if (blocks.ttProductSingleBtnZomm.length) {
        ttProductSingleBtnZomm();
    };
    setTimeout(function () {
        $body.addClass('loaded');
    }, 1500);
    $window.on('load', function () {
        var ttwindowWidth = window.innerWidth || $window.width();
        if ($body.length) {
            $body.addClass('loaded');
        }; 
    });

    var ttCachedWidth = $window.width();
    $window.on('resize', function () {
	  var newWidth = $window.width();
	  if(newWidth !== ttCachedWidth){
		ttCachedWidth = newWidth;
		var ttwindowWidth = window.innerWidth || $window.width();

		if ($ttLeftColumnAside.hasClass('column-open') && $ttLeftColumnAside.length) {
			$ttLeftColumnAside.find('.tt-btn-col-close a').trigger('click');
		};
		// centering arrow
		if (blocks.ttAlignmentImg.length) {
			alignmentArrowValue();
		};
	  }
    });
    // Functions
    var cssFix = function() {
        var u = navigator.userAgent.toLowerCase(),
          is = function(t) {
            return (u.indexOf(t) != -1)
          };
        $html.addClass([
          (!(/opera|webtv/i.test(u)) && /msie (\d)/.test(u)) ? ('ie ie' + RegExp.$1) :
          is('firefox/2') ? 'gecko ff2' :
          is('firefox/3') ? 'gecko ff3' :
          is('gecko/') ? 'gecko' :
          is('opera/9') ? 'opera opera9' : /opera (\d)/.test(u) ? 'opera opera' + RegExp.$1 :
          is('konqueror') ? 'konqueror' :
          is('applewebkit/') ? 'webkit safari' :
          is('mozilla/') ? 'gecko' : '',
          (is('x11') || is('linux')) ? ' linux' :
          is('mac') ? ' mac' :
          is('win') ? ' win' : ''
        ].join(''));
    }();
 
    //slick slider functional for dots
    function ttSlickDots() {
	  blocks.ttDotsAbsolute.each(function(){
		var $this = $(this).find('.slick-dots');
		if($this.is(':visible')){
		  var upperParent = $this.closest('[class ^= container]');
		  if (upperParent.length){
			 upperParent.css({'paddingBottom' : parseInt($this.height(), 10) + parseInt($this.css('marginTop'), 10)});
		  }
		}
	  });
    };
    // product item Design01 hover (*desctope)
    function ttProductHover() {
	  $document.on('mouseenter mouseleave click', '#tt-pageContent .tt-product:not(.tt-view)', function(e) {
		var $this = $(this),
			windW = window.innerWidth,
			objLiftUp01 = $this.find('.tt-description'),
			objLiftUp02 = $this.find('.tt-product-inside-hover'),
			objHeight02 = objLiftUp02.height(),
			objCountdown = $this.find('.tt-countdown_box'),
			target = e.target;

		if($this.hasClass('product-nohover')) return;

		if (e.type === 'mouseenter' && windW > 1024) {
			ttOnHover();
		  } else if (e.type === 'mouseleave' && e.relatedTarget && windW > 1024) {
			ttOffHover();
		};
		function ttOnHover(e){
			 $this.stop().css({
				height: $this.innerHeight()
			}).addClass('hovered');
			objLiftUp01.stop().animate({'top': '-' + objHeight02}, 200);
			objLiftUp02.stop().animate({ 'opacity': 1 }, 400);
			objCountdown.stop().animate({'bottom': objHeight02}, 200);
			return false;
		};
		function ttOffHover(e){
			$this.stop().removeClass('hovered').removeAttr('style');
			objLiftUp01.stop().animate({'top': '0'}, 200, function(){$(this).removeAttr('style')});
			objLiftUp02.stop().animate({ 'opacity': 0 }, 100, function(){$(this).removeAttr('style')});
			objCountdown.stop().animate({'bottom': 0}, 200, function(){$(this).removeAttr('style')});
			return false
		};
	  });
    };
 
    // product Small
    function ttProductSmall(){
	  var currentW = parseInt(blocks.ttProductItem.width(), 10),
		  objProduct = $(".tt-product-design02");
	  currentW <= 210 ? objProduct.addClass("tt-small") : objProduct.removeClass("tt-small");
    };

    function debouncer(func, timeout) {
	  var timeoutID, timeout = timeout || 500;
	  return function() {
		var scope = this,
			args = arguments;
		clearTimeout(timeoutID);
		timeoutID = setTimeout(function() {
			func.apply(scope, Array.prototype.slice.call(args));
		}, timeout);
	  }
    };

   // centering arrow
    function alignmentArrowValue(){
      var ttwindowWidth = window.innerWidth || $window.width();

      if(ttwindowWidth > 1024){
          setTimeout(function() {
              blocks.ttAlignmentImg.each(function() {
                $(this).find('.slick-arrow').removeAttr("style");
              });
          }, 225);
      } else {
        setTimeout(function() {
          blocks.ttAlignmentImg.each(function() {
            var ttObj = $(this),
                $objParentArrow = ttObj.find('.slick-arrow');
            if(ttObj.find('.tt-image-box').length == 0 || $objParentArrow.length == 0) return;
            var $obj = ttObj.find('.tt-image-box').first();
            $objParentArrow.css({
              'top' : $obj.findHeight() - $objParentArrow.findHeight() - parseInt(ttObj.css('marginTop'), 10) + 'px'
            });

            ttObj.find('.tt-product').length && ttProductSmall();
          });
        }, 225);
      };

    };
    $.fn.findHeight = function (){
      var $blocks = $(this),
          maxH    = $blocks.eq(0).innerHeight();

      $blocks.each(function(){
        maxH = ( $(this).innerHeight() > maxH ) ? $(this).innerHeight() : maxH;
      });

      return maxH/2;
    };

    // Overflow Product
    function ttOverflowProduct(){
        blocks.ttProductDesign02.on("mouseenter", function() {
            if (window.innerWidth < 1024) return;
            var objImgHeight = $(this).find('.tt-image-box').height(),
                objScroll = $(this).find('.tt-description'),
                objScrollHeight = objScroll.height() + 25,
                valueHeight01 = objScroll.find('.tt-row').height(),
                valueHeight02 = objScroll.find('.tt-title').height(),
                valueHeight03 = objScroll.find('.tt-price').height(),
                valueHeight04 = objScroll.find('.tt-option-block').height(),
                valueHeight05 = objScroll.find('.tt-product-inside-hover').height(),
                valueHeighttotal = valueHeight01 + valueHeight02 + valueHeight03 + valueHeight04 + valueHeight05 + 60;

            if (objImgHeight > valueHeighttotal) return;

            $(this).addClass('tt-small');
            objScroll.height(objImgHeight).perfectScrollbar();
        }).on('mouseleave', function() {
        if (window.innerWidth < 1024) return;
            $(this).removeClass('tt-small').find('.tt-description').removeAttr('style').perfectScrollbar('destroy');
        });
    };
 
    function ttCollapseBlock() {
	  blocks.ttCollapseBlock.each( function () {
		var obj = $(this),
			objOpen = obj.find('.tt-item.active'),
			objItemTitle = obj.find('.tt-item .tt-collapse-title');

		objOpen.find('.tt-collapse-content').slideToggle(200);

		objItemTitle.on('click', function () {
			$(this).next().slideToggle(200).parent().toggleClass('active');
		});
	  });
    };
    function getInternetExplorerVersion() {
        var rv = -1;
        if (navigator.appName === 'Microsoft Internet Explorer') {
          var ua = navigator.userAgent;
          var re = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
          if (re.exec(ua) != null)
            rv = parseFloat(RegExp.$1);
        } else if (navigator.appName === 'Netscape') {
          var ua = navigator.userAgent;
          var re = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");
          if (re.exec(ua) != null)
            rv = parseFloat(RegExp.$1);
        }
        return rv;
    };
    // identify touch device
    function is_touch_device() {
        return !!('ontouchstart' in window) || !!('onmsgesturechange' in window);
    };
    if (is_touch_device()) {
        $body.addClass('touch-device');
        $html.addClass('touch-device');
    };
    if (/Edge/.test(navigator.userAgent)) {
      $html.addClass('edge');
    };
    //video
    function ttVideoBlock() {
        $('.tt-video-block').on('click', function (e) {
            e.preventDefault();
            var myVideo = $(this).find('.movie')[0];
            if (myVideo.paused) {
              myVideo.play();
              $(this).addClass('play');
            } else {
              myVideo.pause();
              $(this).removeClass('play');
            }
        });
    };
 
    //popup on pages product single
    function ttVideoPopup() {
        blocks.modalVideoProduct.on('show.bs.modal', function(e) {
            var relatedTarget = $(e.relatedTarget),
                attr = relatedTarget.attr('data-value'),
                attrPoster = relatedTarget.attr('data-poster'),
                attrType = relatedTarget.attr('data-type');

            if(attrType === "youtube" || attrType === "vimeo" || attrType === undefined){
              $('<iframe src="'+attr+'" allowfullscreen></iframe>').appendTo($(this).find('.modal-video-content'));
            };

            if(attrType === "video"){
              $('<div class="tt-video-block"><a href="#" class="link-video"></a><video class="movie" src="'+attr+'" poster="'+attrPoster+'" allowfullscreen></video></div>').appendTo($(this).find('.modal-video-content'));

            };
           ttVideoBlock();
        }).on('hidden.bs.modal', function () {
            $(this).find('.modal-video-content').empty();
        });
    };
    //product pages
    var elevateZoomWidget = {
      scroll_zoom: true,
      class_name: '.zoom-product',
      thumb_parent: $('#smallGallery'),
      scrollslider_parent: $('.slider-scroll-product'),
      checkNoZoom: function(){
        return $(this.class_name).parent().parent().hasClass('no-zoom');
      },
      init: function(type){
        var _ = this;
        var currentW = window.innerWidth || $(window).width();
        var zoom_image = $(_.class_name);
        var _thumbs = _.thumb_parent;
        _.initBigGalleryButtons();
        _.scrollSlider();

        if(zoom_image.length == 0) return false;
        if(!_.checkNoZoom()){
          var attr_scroll = zoom_image.parent().parent().attr('data-scrollzoom');
          attr_scroll = attr_scroll ? attr_scroll : _.scroll_zoom;
          _.scroll_zoom = attr_scroll == 'false' ? false : true;
          currentW > 575 && _.configureZoomImage();
          _.resize();
        }

        if(_thumbs.length == 0) return false;
        var thumb_type = _thumbs.parent().attr('class').indexOf('-vertical') > -1 ? 'vertical' : 'horizontal';
        _[thumb_type](_thumbs);
        _.setBigImage(_thumbs);
      },
      configureZoomImage: function(){
        var _ = this;
        $('.zoomContainer').remove();
        var zoom_image = $(this.class_name);
        zoom_image.each(function(){
          var _this = $(this);
          var clone = _this.removeData('elevateZoom').clone();
          _this.after(clone).remove();
        });
        setTimeout(function(){
          $(_.class_name).elevateZoom({
            gallery: _.thumb_parent.attr('id'),
            zoomType: "inner",
            scrollZoom: Boolean(_.scroll_zoom),
            cursor: "crosshair",
            zoomWindowFadeIn: 300,
            zoomWindowFadeOut: 300
          });
        }, 100);
      },
      resize: function(){
        var _ = this;
        $(window).resize(function(){
          var currentW = window.innerWidth || $(window).width();
          if(currentW <= 575) return false;
          _.configureZoomImage();
        });
      },
      horizontal: function(_parent){
        _parent.slick({
          infinite: true,
          dots: false,
          arrows: true,
          slidesToShow: 2,
		  variableWidth: true,
          slidesToScroll: 1,
          responsive: [{
            breakpoint: 1200,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }]
        });
      },
      vertical: function(_parent){
        _parent.slick({
          vertical: true,
          infinite: true,
          slidesToShow: 2,
          slidesToScroll: 1,
          verticalSwiping: true,
          arrows: true,
          dots: false,
          centerPadding: "0px",
          customPaging: "0px",
          responsive: [{
            breakpoint: 1200,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {

            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }]
        });
      },
       initBigGalleryButtons: function(){
              var bigGallery = $('.bigGallery');
              if(bigGallery.length == 0) return false;
              $( 'body' ).on( 'mouseenter', '.zoomContainer',
                      function(){        bigGallery.find('button').addClass('show');        }
              ).on( 'mouseleave', '.zoomContainer',
                      function(){ bigGallery.find('button').removeClass('show'); }
              );
      },
      scrollSlider: function(){
        var _scrollslider_parent = this.scrollslider_parent;
        if(_scrollslider_parent.length == 0) return false;
        _scrollslider_parent.on('init', function(event, slick) {
          _scrollslider_parent.css({ 'opacity': 1 });
        });
        _scrollslider_parent.css({ 'opacity': 0 }).slick({
          infinite: false,
          vertical: true,
          verticalScrolling: true,
          dots: true,
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          responsive: [{
            breakpoint: 1200,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }]
        }).mousewheel(function(e) {
          e.preventDefault();
          e.deltaY < 0 ? $(this).slick('slickNext') : $(this).slick('slickPrev');
        });
      },
      setBigImage: function(_parent){
        var _ = this;
        _parent.find('a').on('click',function(e) {
          _.checkNoZoom() && e.preventDefault();
          var zoom_image = $(_.class_name);
          var getParam = _.checkNoZoom() ? 'data-image' : 'data-zoom-image';
          var setParam = _.checkNoZoom() ? 'src' : 'data-zoom-image';
          var big_image = $(this).attr(getParam);
          zoom_image.attr(setParam, big_image);

          if(!_.checkNoZoom()) return false;
          _parent.find('.zoomGalleryActive').removeClass('zoomGalleryActive');
          $(this).addClass('zoomGalleryActive');
        });
      }
    };
    elevateZoomWidget.init();

    // product single tt-btn-zomm(*magnific popup)
    function ttProductSingleBtnZomm() {
      $body.on('click', '.tt-product-single-img .tt-btn-zomm', function (e) {
          var objSmallGallery = $('#smallGallery');
          objSmallGallery.find('a').each(function(){
			  if ($(this).find('img').hasClass("watermark")) {
				var dataZoomImg = $(this).find('img').attr('src');
			  }else{
				var dataZoomImg = $(this).attr('data-zoom-image');
			  }
              if(dataZoomImg.length){
                $(this).closest('li').append("<a class='link-magnific-popup' href='#'></a>").find('.link-magnific-popup').attr('href', dataZoomImg);
                if($(this).hasClass('zoomGalleryActive')){
                  $(this).closest('li').find('.link-magnific-popup').addClass('zoomGalleryActive');
                };
              };
          });
          objSmallGallery.addClass('tt-magnific-popup').find('.link-magnific-popup').magnificPopup({
            type: 'image',
              gallery: {
                  enabled: true,
                  tCounter: '<span class="mfp-counter"></span>'
              },
              callbacks: {
                close: function() {
                  setTimeout(function() {
                      objSmallGallery.removeClass('tt-magnific-popup').find('.link-magnific-popup').remove();
                  }, 200);

                }
              }
          });
          objSmallGallery.find('.link-magnific-popup.zoomGalleryActive').trigger('click');
      });
    };
    /**
     * Stuck init. Properties: on/off
     * @value = 'off', default empty
     */
    function initStuck(value) {
      if($stucknav.hasClass('disabled')) return;

      var value = value || false,
        ie = (getInternetExplorerVersion() !== -1) ? true : false;

      if (value === 'off') return false;
      var n = 0;
      $window.scroll(function() {
        var HeaderTop = $('header').innerHeight();
        if ($window.scrollTop() > HeaderTop) {
          if ($stucknav.hasClass('stuck')) return false;
          $stucknav.hide();
          $stucknav.addClass('stuck');
          // $('body').trigger('showStuck');
          window.innerWidth < 1025 ? $ttStuckParentMenu.append($ttMobileParentMenuChildren.detach()) : $ttStuckParentMenu.append($ttDesctopMenu.detach());
          $ttStuckParentCart.append($ttcartObj.detach());
          $ttStuckParentMulti.append($ttMultiObj.detach());
          $ttStuckParentAccount.append($ttAccountObj.detach());
          $ttStuckParentSearch.append($ttSearchObj.detach());


          if ($stucknav.find('.tt-stuck-cart-parent > .tt-cart > .dropdown').hasClass('open') || ie)
            $stucknav.stop().show();
          else
            $stucknav.stop().fadeIn(300);

        } else {
          if (!$stucknav.hasClass('stuck')) return false;
          $stucknav.hide();
          $stucknav.removeClass('stuck');
          // $('body').trigger('hideStuck');
          if (window.innerWidth < 1025) {
            $ttMobileParentMenu.append($ttMobileParentMenuChildren.detach());
            $ttMobileParentCart.append($ttcartObj.detach());
            $ttMobileParentMulti.append($ttMultiObj.detach());
            $ttMobileParentAccount.append($ttAccountObj.detach());
            $ttMobileParentSearch.append($ttSearchObj.detach());
            return false;
          }
          $ttDesctopParentMenu.append($ttDesctopMenu.detach());
          $ttDesctopParentCart.append($ttcartObj.detach());
          $ttDesctopParentMulti.append($ttMultiObj.detach());
          $ttDesctopParentAccount.append($ttAccountObj.detach());
          $ttDesctopParentSearch.append($ttSearchObj.detach());
        }
      });
      $window.resize(function() {
        if (!$stucknav.hasClass('stuck')) return false;
        if (window.innerWidth < 1025) {
          $ttDesctopParentMenu.append($ttDesctopMenu.detach());
          $ttStuckParentMenu.append($ttMobileParentMenuChildren.detach());
        } else {
          $ttMobileParentMenu.append($ttMobileParentMenuChildren.detach());
          $ttStuckParentMenu.append($ttDesctopMenu.detach());
        }
      });
    };
})(jQuery);