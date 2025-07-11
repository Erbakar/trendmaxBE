<style>
@charset "UTF-8";
/* [2] */
/* [8] */
/*===============================================
 [SASS DIRECTORY ]
 [1] Minxin Link
 [2] Minxin Button
 [3] Minxin Triangle
 [4] Minxin LABEL PRODUCT
 [5] Minxin Scrollbars
 [6] Minxin Dev Custom
 ==============================================*/
.no-margin {
  margin: 0 !important; }

.marginbottom__3x {
  margin-bottom: 30px; }

@-webkit-keyframes animLoadedLogo {
  to {
    -webkit-transform: translate3d(0, 100%, 0) translate3d(0, 50px, 0) scale3d(0.65, 0.65, 1); } }

@keyframes animLoadedLogo {
  to {
    -webkit-transform: translate3d(0, 100%, 0) translate3d(0, 50px, 0) scale3d(0.65, 0.65, 1);
    transform: translate3d(0, 100%, 0) translate3d(0, 50px, 0) scale3d(0.65, 0.65, 1); } }

@-webkit-keyframes animLoadedLoader {
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0) scale3d(0.3, 0.3, 1); } }

@keyframes animLoadedLoader {
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0) scale3d(0.3, 0.3, 1);
    transform: translate3d(0, -100%, 0) scale3d(0.3, 0.3, 1); } }

@-webkit-keyframes animLoadedHeader {
  to {
    -webkit-transform: translate3d(0, -100%, 0); } }

@keyframes animLoadedHeader {
  to {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); } }

@-webkit-keyframes animInitialHeader {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 800px, 0); } }

@keyframes animInitialHeader {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 800px, 0);
    transform: translate3d(0, 800px, 0); } }
/*Dev Custom */
/*====================================================*/
.lib-list-item-product2 {
  border: none; }
  .lib-list-item-product2 .image-dev .list-button-dev {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 10;
    transform: translate3d(-50%, -50%, 0);
    -moz-transform: translate3d(-50%, -50%, 0);
    -webkit-transform: translate3d(-50%, -50%, 0);
    -ms-transform: translate3d(-50%, -50%, 0); }
    .lib-list-item-product2 .image-dev .list-button-dev li {
      display: inline-block;
      float: left;
      height: 40px;
      width: 40px;
      background: #fff;
      position: relative;
      border-width: 0 1px 0 0;
      border-style: solid;
      border-color: #ddd;
      opacity: 0;
      transition: transform 0.2s ease-in-out, opacity 0.2s ease-in-out; }
      .lib-list-item-product2 .image-dev .list-button-dev li:nth-child(1) {
        transform: translateX(40px);
        -moz-transform: translateX(40px);
        -webkit-transform: translateX(40px);
        -ms-transform: translateX(40px);
        z-index: 1;
        transition-delay: 0s; }
      .lib-list-item-product2 .image-dev .list-button-dev li:nth-child(2) {
        transition-delay: 0.2s;
        z-index: 2; }
      .lib-list-item-product2 .image-dev .list-button-dev li:nth-child(3) {
        transition-delay: 0.2s;
        z-index: 2; }
      .lib-list-item-product2 .image-dev .list-button-dev li:nth-child(4) {
        transform: translateX(-40px);
        -moz-transform: translateX(-40px);
        -webkit-transform: translateX(-40px);
        -ms-transform: translateX(-40px);
        z-index: 1;
        transition-delay: 0s; }
      .lib-list-item-product2 .image-dev .list-button-dev li:first-child {
        border-left: 1px solid #ddd; }
      .lib-list-item-product2 .image-dev .list-button-dev li a, .lib-list-item-product2 .image-dev .list-button-dev li button {
        background: none;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        line-height: 40px;
        text-align: center;
        box-shadow: none;
        border: none;
        color: #555;
        width: 40px;
        padding: 0; }
      .lib-list-item-product2 .image-dev .list-button-dev li:hover {
        background: <?php echo $tema['t37'];?>; }
        .lib-list-item-product2 .image-dev .list-button-dev li:hover a, .lib-list-item-product2 .image-dev .list-button-dev li:hover button {
          color: #fff; }
  .lib-list-item-product2 .caption-dev {
    text-align: center;
    padding: 0 15px; }
    .lib-list-item-product2 .caption-dev .rating-dev {
      margin: 5px 0; }
    .lib-list-item-product2 .caption-dev .rating-dev .fa-stack-2x {
      font-size: 11px; }
    .lib-list-item-product2 .caption-dev .title-dev {
      color: #444;
      font-size: 13px; }
    .lib-list-item-product2 .caption-dev .price-dev .price.product-price {
      font-size: 16px; }
    .lib-list-item-product2 .caption-dev .price-dev .price-new {
      font-size: 16px; }
    .lib-list-item-product2 .caption-dev .price-dev .price-old {
      font-size: 12px; }
    .lib-list-item-product2 .caption-dev .add-cart-dev {
      background: #fff;
      border: 1px solid #ddd;
      font-size: 12px;
      text-transform: uppercase;
      color: #999;
      font-weight: bold;
      box-shadow: none;
      border-radius: 0;
      padding: 6px 20px;
      margin: 0 0 30px;
      transition: all 0.2s ease-in-out;
      -moz-transition: all 0.2s ease-in-out;
      -webkit-transition: all 0.2s ease-in-out; }

.lib-list-item-product-over2 .image-dev .list-button-dev li {
  opacity: 1;
  transition: transform 0.2s ease-in-out, opacity 0.2s ease-in-out; }
  .lib-list-item-product-over2 .image-dev .list-button-dev li:nth-child(1) {
    transform: translateX(0);
    -moz-transform: translateX(0);
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transition-delay: 0.2s; }
  .lib-list-item-product-over2 .image-dev .list-button-dev li:nth-child(2) {
    transition-delay: 0s; }
  .lib-list-item-product-over2 .image-dev .list-button-dev li:nth-child(3) {
    transition-delay: 0s; }
  .lib-list-item-product-over2 .image-dev .list-button-dev li:nth-child(4) {
    transform: translateX(0);
    -moz-transform: translateX(0);
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transition-delay: 0.2s; }
/*EFECT PRODUCT NUMBER*/
.lib-two-img, .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-left .item-image .lt-image, .products-list .product-layout .product-item-container .left-block .product-image-container.second_img {
  position: relative;
  display: block; }
  .lib-two-img .img-1, .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-left .item-image .lt-image .img-1, .products-list .product-layout .product-item-container .left-block .product-image-container.second_img .img-1 {
    opacity: 1;
    position: relative;
    transition: all 0.5s ease-in-out; }
  .lib-two-img .img-2, .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-left .item-image .lt-image .img-2, .products-list .product-layout .product-item-container .left-block .product-image-container.second_img .img-2 {
    position: absolute;
    z-index: 0;
    top: 0;
    opacity: 0;
    display: block;
    transition: all 0.5s ease-in-out;
    left: 50%;
    transform: translateX(-50%); }

.lib-two-img-over .img-1, .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1:hover .media-left .item-image .lt-image .img-1, .products-list .product-layout .product-item-container:hover .left-block .product-image-container.second_img .img-1 {
  opacity: 0;
  transform-style: inherit;
  transition: all 0.5s ease-in-out; }
  .lib-two-img-over .img-2, .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1:hover .media-left .item-image .lt-image .img-2, .products-list .product-layout .product-item-container:hover .left-block .product-image-container.second_img .img-2 {
    opacity: 1;
    transform-style: inherit;
    transition: all 0.5s ease-in-out; }
/*EFFECT SLIDERHOME*/
@keyframes myeffect-slideshow {
  0% {
    opacity: 0;
    transform: translateY(-300px);
    -webkit-transform: translateY(-300px);
    -moz-transform: translateY(-300px);
    -ms-transform: translateY(-300px);
    -o-transform: translateY(-300px); }

  100% {
    opacity: 1;
    transform: translateY(0);
    -moz-transform: translateY(0);
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0); } }

@-webkit-keyframes myeffect-slideshow {
  0% {
    opacity: 0;
    transform: translateY(-300px);
    -webkit-transform: translateY(-300px);
    -moz-transform: translateY(-300px);
    -ms-transform: translateY(-300px);
    -o-transform: translateY(-300px); }

  100% {
    opacity: 1;
    transform: translateY(0);
    -moz-transform: translateY(0);
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0); } }

@-moz-keyframes myeffect-slideshow {
  0% {
    opacity: 0;
    transform: translateY(-300px);
    -webkit-transform: translateY(-300px);
    -moz-transform: translateY(-300px);
    -ms-transform: translateY(-300px);
    -o-transform: translateY(-300px); }

  100% {
    opacity: 1;
    transform: translateY(0);
    -moz-transform: translateY(0);
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0); } }
/*===============================================
 [SASS DIRECTORY ]
 [1] BACK TO TOP
 [2] SOCIAL ACCOUNTS
 [3] TOP PANEL
 [4] LARY LOADER
 [5] NO RESPONSIVE BOOTSTRAP
 [6] PRELOADING SCREEN
 [7] BANNER EFFECT
 [8] POPUP ADDED TO CART 
 [9] PAGE COMINGSOON
 ==============================================*/
/*============BACK TO TOP ==================*/
.back-to-top {
  cursor: pointer;
  background-color: #777;
  width: 45px;
  bottom: 20px;
  right: 10px;
  min-height: 42px;
  overflow: hidden;
  z-index: 99999999;
  position: fixed;
  display: block;
  text-align: center;
  border-radius: 3px;
  opacity: 1;
  transition: all 0.5s ease-in-out 0s;
  -moz-transition: all 0.5s ease-in-out 0s;
  -webkit-transition: all 0.5s ease-in-out 0s;
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1); }
  .back-to-top.hidden-top {
    bottom: -100px;
    opacity: 0;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0); }
  .back-to-top:hover {
    background-color: <?php echo $tema['t37'];?>; }
  .back-to-top i {
    font-size: 36px;
    margin: 1px 0 0 0;
    color: #fff;
    display: inline-block; }
/* 2.SOCIAL ACCOUNTS (RIGHT FIXED PANEL)
 ----------------------------------------------------- */
.social-widgets {
  position: fixed;
  z-index: 560;
  top: 50%;
  height: 0;
  width: 0;
  right: 0; }

.social-widgets .item, .social-widgets .items {
  margin: 0;
  padding: 0;
  list-style-type: none; }

.social-widgets .items {
  top: -100px;
  position: relative; }

.social-widgets .item {
  position: absolute;
  top: 0;
  left: 120px; }

.social-widgets .active {
  z-index: 100;
  left: -310px; }

.social-widgets .item-01, .social-widgets .item-02, .social-widgets .item-03, .social-widgets .item-04, .social-widgets .item-05, .social-widgets .item-06, .social-widgets .item-07, .social-widgets .item-08, .social-widgets .item-09 {
  left: 0; }

.social-widgets .item-01 {
  top: 0;
  z-index: 99; }

.social-widgets .item-02 {
  top: 45px;
  z-index: 98; }

.social-widgets .item-03 {
  top: 90px;
  z-index: 97; }

.social-widgets .item-04 {
  top: 150px;
  z-index: 96; }

.social-widgets .item-05 {
  top: 200px;
  z-index: 95; }

.social-widgets .tab-icon .fa {
  font-size: 18px; }

.social-widgets .tab-icon {
  position: absolute;
  top: 0;
  left: -45px;
  display: block;
  width: 45px;
  height: 45px;
  background: #fff;
  text-align: center;
  font-size: 1.54em;
  line-height: 45px; }

.social-widgets .tab-icon:hover {
  text-decoration: none; }

.social-widgets .active .tab-icon {
  border-color: #e9e9e9;
  background: #fff; }

.social-widgets .facebook .tab-icon {
  background: #3b5998;
  background-clip: content-box;
  color: white; }

.social-widgets .twitter .tab-icon {
  background: #07779a;
  background-clip: content-box;
  color: white; }

.social-widgets .youtube .tab-icon {
  background: #da2723;
  background-clip: content-box;
  color: white; }

.social-widgets .tab-content {
  background: #fff;
  width: 310px;
  padding: 10px; }

.social-widgets .active .tab-content {
  box-shadow: 0 0 4px rgba(0, 0, 0, .15); }

.social-widgets .title {
  margin: -10px -10px 10px;
  padding: 0px 10px;
  background-color: #ccc;
  text-transform: uppercase;
  line-height: 45px;
  color: #000;
  font-weight: bold; }
  .social-widgets .title h5 {
    line-height: 45px;
    margin: 0; }

.social-widgets .facebook.active {
  left: -260px; }

.social-widgets .facebook .tab-content {
  width: 260px; }

.social-widgets .twitter.active {
  left: -300px; }

.social-widgets .twitter .tab-content {
  width: 300px; }

.social-widgets .twitter-widget {
  padding-top: 10px; }

.social-widgets .youtube.active {
  left: -450px; }

.social-widgets .youtube .tab-content {
  width: 450px; }

.social-widgets .loading {
  min-height: 200px;
  position: relative;
  z-index: 1000; }

.social-widgets .loading img.ajaxloader {
  position: absolute;
  top: 45%;
  left: 45%;
  width: 32px;
  height: 32px; }
/* 3.TOP PANEL (RIGHT FIXED PANEL)
 ----------------------------------------------------- */
@media (min-width: 1200px) {
  .navbar-compact {
    position: fixed;
    width: 100%;
    z-index: 900;
    box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
    transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -webkit-transition: all 0.5s ease-in-out; }
    .navbar-compact.hidden-menu {
      -webkit-transform: translate(0, -100%);
      -moz-transform: translate(0, -100%);
      -ms-transform: translate(0, -100%);
      -o-transform: translate(0, -100%);
      transform: translate(0, -100%); }
    .navbar-compact .container-megamenu.horizontal ul.megamenu > li > a img {
      display: none; }
    .navbar-compact .hidden-compact {
      display: none !important; }
    .navbar-compact .header-center {
      transition: 0.3s all ease 0s; }
    .navbar-compact .header-bottom {
      margin: 0 !important; }
    .navbar-switcher {
      text-align: center;
      float: right;
      display: none;
      width: 45px;
      height: 45px;
      margin-bottom: -47px;
      background: <?php echo $tema['t37'];?> !important;
      padding: 6px 7px;
      border-radius: 0 0 3px 3px;
      cursor: pointer;
      color: #fff; }
    .navbar-switcher .i-active, .navbar-switcher.active .i-inactive {
      display: none; }
    .navbar-switcher.active .i-active, .navbar-switcher .fa-caret-down {
      display: inline;
      font-size: 1.8em;
      line-height: 1.5em; }
    .navbar-compact.type_1 .sidebar-menu, .navbar-compact.type_2 .sidebar-menu {
      display: none; }
      .navbar-compact.type_1 .header-bottom-right, .navbar-compact.type_2 .header-bottom-right {
        margin: 0;
        padding: 0 15px;
        width: 100%; }
    header .navbar-switcher {
      display: block; } }
/* 4.LARY LOADER
 --------------------------------------- */
.mfp-iframe-scaler iframe {
  background: white url(<?php echo $sitetemasi;?>/image/lazy-loader.gif) no-repeat center center; }

.lazy {
  display: block;
  position: relative;
  overflow: hidden;
  background: transparent url(<?php echo $sitetemasi;?>/image/lazy-loader.gif) no-repeat center center; }

.loadeding {
  background: white url(<?php echo $sitetemasi;?>/image/lazy-loader.gif) no-repeat center center;
  height: 100%;
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  right: 0;
  opacity: 1; }

.loaded .loadeding {
  background: none;
  height: auto;
  opacity: 0;
  display: none; }

@media (min-width: 1200px) {
  .lazy.lazy-loaded {
    background: none;
    height: auto; }

  .lazy img {
    transition: 1s all ease;
    opacity: 0;
    -webkit-backface-visibility: hidden; }

  .lazy.lazy-loaded img {
    opacity: 1; } }
/* Overlay pattern 
 --------------------------------------- */
body.no-bgbody {
  background-image: none; }

.pattern-1 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/1.png"); }

.pattern-2 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/2.png"); }

.pattern-3 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/3.png"); }

.pattern-4 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/4.png"); }

.pattern-5 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/5.png"); }

.pattern-6 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/6.png"); }

.pattern-7 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/7.png"); }

.pattern-8 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/8.png"); }

.pattern-9 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/9.png"); }

.pattern-10 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/10.png"); }

.pattern-11 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/11.png"); }

.pattern-12 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/12.png"); }

.pattern-13 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/13.png"); }

.pattern-14 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/14.png"); }

.pattern-15 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/15.png"); }

.pattern-16 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/16.png"); }

.pattern-17 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/17.png"); }

.pattern-18 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/18.png"); }

.pattern-19 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/19.png"); }

.pattern-20 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/20.png"); }

.pattern-21 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/21.png"); }

.pattern-22 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/22.png"); }

.pattern-23 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/23.png"); }

.pattern-24 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/24.png"); }

.pattern-25 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/25.png"); }

.pattern-26 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/26.png"); }

.pattern-27 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/27.png"); }

.pattern-28 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/28.png"); }

.pattern-29 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/29.png"); }

.pattern-30 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/30.png"); }

.pattern-31 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/31.png"); }

.pattern-32 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/32.png"); }

.pattern-33 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/33.png"); }

.pattern-34 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/34.png"); }

.pattern-35 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/35.png"); }

.pattern-36 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/36.png"); }

.pattern-37 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/37.png"); }

.pattern-38 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/38.png"); }

.pattern-39 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/39.png"); }

.pattern-40 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/40.png"); }

.pattern-41 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/41.png"); }

.pattern-42 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/42.png"); }

.pattern-43 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/43.png"); }

.pattern-44 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/44.png"); }

.pattern-45 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/45.png"); }

.wrapper-boxed header.navbar-compact {
  width: auto; }

header.navbar-compact {
  position: fixed;
  width: 100%;
  z-index: 999;
  box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3); }
  header.navbar-compact .compact-hidden {
    display: none; }
/*============NONE RESPONSIVE BOOTSTRAP ==================*/
@media (min-width: 1600px) {
  .wrapper-fluid .fluid-sidebar {
    width: 83%; }
    .wrapper-fluid .fluid-allsidebar {
      width: 66%; }
    .wrapper-fluid .content-aside {
      width: 16.66667%; } }

@media (min-width: 1200px) {
  /*.wrapper-fluid{
   .container {width: 92%; max-width: 1650px;}
   }*/
    .wrapper-boxed {
      max-width: 1200px;
      margin: 0 auto;
      background: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, .2); }
    .wrapper-full .container {
      width: 1200px; }
      .wrapper-full .products-list .product-grid-5 .product-card__gallery, .wrapper-full .products-list .product-grid-5 .countdown_box, .wrapper-full .products-list .product-grid-5 .order-num {
        display: none; }
        .wrapper-full .products-list .product-grid-5 .product-item-container .left-block .button-group {
          bottom: 0; } }
  @media (min-width: 1200px) and (min-width: 1200px) {
        .wrapper-full .products-list .product-grid-5:nth-child(5n+1) {
          clear: both; } }
/* 4.LARY LOADER
 --------------------------------------- */
.mfp-iframe-scaler iframe {
  background: white url(<?php echo $sitetemasi;?>/image/theme/lazy-loader.gif) no-repeat center center; }

.lazy {
  display: block;
  position: relative;
  overflow: hidden;
  background: transparent url(<?php echo $sitetemasi;?>/image/theme/lazy-loader.gif) no-repeat center center; }

.loadeding {
  background: white url(<?php echo $sitetemasi;?>/image/theme/lazy-loader.gif) no-repeat center center;
  height: 100%;
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  right: 0;
  opacity: 1; }

.loaded .loadeding {
  background: none;
  height: auto;
  opacity: 0;
  display: none; }

@media (min-width: 1200px) {
  .lazy.lazy-loaded {
    background: none;
    height: auto; }

  .lazy img {
    transition: 1s all ease;
    opacity: 0;
    -webkit-backface-visibility: hidden; }

  .lazy.lazy-loaded img {
    opacity: 1; } }
/* Overlay pattern 
 --------------------------------------- */
body.no-bgbody {
  background-image: none; }

.pattern-1 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/1.png"); }

.pattern-2 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/2.png"); }

.pattern-3 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/3.png"); }

.pattern-4 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/4.png"); }

.pattern-5 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/5.png"); }

.pattern-6 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/6.png"); }

.pattern-7 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/7.png"); }

.pattern-8 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/8.png"); }

.pattern-9 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/9.png"); }

.pattern-10 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/10.png"); }

.pattern-11 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/11.png"); }

.pattern-12 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/12.png"); }

.pattern-13 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/13.png"); }

.pattern-14 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/14.png"); }

.pattern-15 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/15.png"); }

.pattern-16 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/16.png"); }

.pattern-17 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/17.png"); }

.pattern-18 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/18.png"); }

.pattern-19 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/19.png"); }

.pattern-20 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/20.png"); }

.pattern-21 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/21.png"); }

.pattern-22 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/22.png"); }

.pattern-23 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/23.png"); }

.pattern-24 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/24.png"); }

.pattern-25 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/25.png"); }

.pattern-26 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/26.png"); }

.pattern-27 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/27.png"); }

.pattern-28 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/28.png"); }

.pattern-29 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/29.png"); }

.pattern-30 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/30.png"); }

.pattern-31 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/31.png"); }

.pattern-32 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/32.png"); }

.pattern-33 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/33.png"); }

.pattern-34 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/34.png"); }

.pattern-35 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/35.png"); }

.pattern-36 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/36.png"); }

.pattern-37 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/37.png"); }

.pattern-38 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/38.png"); }

.pattern-39 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/39.png"); }

.pattern-40 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/40.png"); }

.pattern-41 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/41.png"); }

.pattern-42 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/42.png"); }

.pattern-43 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/43.png"); }

.pattern-44 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/44.png"); }

.pattern-45 {
  background-image: url("<?php echo $sitetemasi;?>/image/patterns/45.png"); }
/* Preloading Screen
 --------------------------------------- */
.loader-content {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1000111;
  background-color: #fff;
  opacity: 1;
  transition: all 500ms linear 0s; }

.loader-content.loader-off, body.loaded .loader-content {
  opacity: 0;
  visibility: hidden;
  transition: all 500ms linear 0s; }
/* The loader container */
#loader {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 200px;
  height: 200px;
  margin-top: -100px;
  margin-left: -100px;
  perspective: 400px;
  transform-type: preserve-3d; }
/* The dot */
#loader .dot {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 10;
  width: 40px;
  height: 40px;
  margin-top: -20px;
  margin-left: -80px;
  transform-type: preserve-3d;
  transform-origin: 80px 50%;
  transform: rotateY(0);
  background-color: #1fc0a0;
  animation: dot1 2000ms cubic-bezier(0.56, 0.09, 0.89, 0.69) infinite; }

#loader .dot:nth-child(2) {
  z-index: 9;
  animation-delay: 150ms; }

#loader .dot:nth-child(3) {
  z-index: 8;
  animation-delay: 300ms; }

#loader .dot:nth-child(4) {
  z-index: 7;
  animation-delay: 450ms; }

#loader .dot:nth-child(5) {
  z-index: 6;
  animation-delay: 600ms; }

#loader .dot:nth-child(6) {
  z-index: 5;
  animation-delay: 750ms; }

#loader .dot:nth-child(7) {
  z-index: 4;
  animation-delay: 900ms; }

#loader .dot:nth-child(8) {
  z-index: 3;
  animation-delay: 1050ms; }

@keyframes dot1 {
  0% {
    transform: rotateY(0) rotateZ(0) rotateX(0);
    background-color: <?php echo $tema['t37'];?>; }

  45% {
    transform: rotateZ(180deg) rotateY(360deg) rotateX(90deg);
    background-color: #000;
    animation-timing-function: cubic-bezier(0.15, 0.62, 0.72, 0.98); }

  90%, 100% {
    transform: rotateY(0) rotateZ(360deg) rotateX(180deg);
    background-color: <?php echo $tema['t37'];?>; } }
/* @group Banners hover effect */
.banners-effect-1 .banners > div img {
  transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -webkit-transition: all 0.2s ease-in; }
  .banners-effect-1 .banners > div img:hover {
    opacity: 0.8; }

.banners-effect-2 .banners > div a {
  display: block;
  position: relative;
  overflow: hidden; }
  .banners-effect-2 .banners > div a:hover:before, .banners-effect-2 .banners > div a:hover:after {
    left: 0;
    opacity: 1; }
  .banners-effect-2 .banners > div a:before, .banners-effect-2 .banners > div a:after {
    background-color: rgba(255, 255, 255, 0.4);
    display: block;
    width: 100%;
    height: 100%;
    left: -100%;
    opacity: 0;
    filter: alpha(opacity=0);
    position: absolute;
    top: 0;
    transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -webkit-transition: all 0.3s ease-in;
    content: "";
    z-index: 1; }

.banners-effect-3 .banners > div a {
  display: block;
  position: relative;
  overflow: hidden; }
  .banners-effect-3 .banners > div a:hover:before, .banners-effect-3 .banners > div a:hover:after {
    border: 0 solid rgba(0, 0, 0, 0.7);
    opacity: 0;
    filter: alpha(opacity=0); }
  .banners-effect-3 .banners > div a:before, .banners-effect-3 .banners > div a:after {
    border: 50px solid transparent;
    border-top-right-radius: 50px;
    border-top-left-radius: 50px;
    border-bottom-right-radius: 50px;
    border-bottom-left-radius: 50px;
    box-sizing: border-box;
    cursor: pointer;
    display: inline-block;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    position: absolute;
    top: 0;
    content: "";
    opacity: 1;
    filter: alpha(opacity=100);
    width: 100px;
    height: 100px;
    -webkit-transform: scale(7);
    -moz-transform: scale(7);
    -ms-transform: scale(7);
    -o-transform: scale(7);
    transform: scale(7);
    transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -webkit-transition: all 0.4s ease-in-out;
    visibility: visible;
    z-index: 1; }

.banners-effect-4 .banners > div a {
  display: block;
  position: relative;
  overflow: hidden; }
  .banners-effect-4 .banners > div a:hover:before, .banners-effect-4 .banners > div a:hover:after {
    opacity: 1;
    -webkit-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 4, 1);
    -moz-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 4, 1);
    -ms-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 4, 1);
    -o-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 4, 1);
    transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 4, 1); }
  .banners-effect-4 .banners > div a:before, .banners-effect-4 .banners > div a:after {
    border-bottom: 50px solid rgba(0, 0, 0, 0.2);
    border-top: 50px solid rgba(0, 0, 0, 0.2);
    content: "";
    height: 100%;
    left: 0;
    opacity: 0;
    filter: alpha(opacity=0);
    position: absolute;
    top: 0;
    transform-origin: 50% 50% 0;
    width: 100%;
    -webkit-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 0, 1);
    -moz-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 0, 1);
    -ms-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 0, 1);
    -o-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 0, 1);
    transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 0, 1);
    transition: opacity 0.4s ease 0s;
    -moz-transition: opacity 0.4s ease 0s;
    -webkit-transition: opacity 0.4s ease 0s;
    visibility: visible;
    z-index: 1; }

.banners-effect-5 .banners > div a {
  display: block;
  position: relative;
  overflow: hidden; }
  .banners-effect-5 .banners > div a:hover:before, .banners-effect-5 .banners > div a:hover:after {
    opacity: 0;
    filter: alpha(opacity=0);
    border: 0 double rgba(255, 255, 255, 0.7);
    visibility: hidden; }
  .banners-effect-5 .banners > div a:before, .banners-effect-5 .banners > div a:after {
    bottom: 0;
    content: "";
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 1;
    border: 200px double transparent;
    opacity: 1;
    filter: alpha(opacity=100);
    visibility: visible;
    transition: all 0.4s cubic-bezier(0.94, 0.85, 0.1, 0.62) 0s;
    -moz-transition: all 0.4s cubic-bezier(0.94, 0.85, 0.1, 0.62) 0s;
    -webkit-transition: all 0.4s cubic-bezier(0.94, 0.85, 0.1, 0.62) 0s; }

.banners-effect-6 .banners > div a {
  display: inline-block;
  vertical-align: top;
  position: relative;
  overflow: hidden;
  background: #000; }

.banners-effect-6 .banners > div a img {
  backface-visibility: hidden;
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transition: opacity 1s ease 0s, transform 1s ease 0s;
  -o-transition: opacity 1s ease 0s, transform 1s ease 0s;
  transition: opacity 1s ease 0s, transform 1s ease 0s; }

.banners-effect-6 .banners > div a:hover img {
  opacity: 0.8;
  filter: alpha(opacity=80);
  transform: scale3d(1.1, 1.1, 1); }

.banners-effect-7 .banners > div a {
  display: block;
  position: relative;
  overflow: hidden; }

.banners-effect-7 .banners > div a:before {
  position: absolute;
  background: rgba(0, 0, 0, 0.3);
  width: 0;
  top: 0;
  left: 50%;
  content: "";
  transition: all 0.3s ease-in-out 0s; }

.banners-effect-7 .banners > div a:hover:before {
  width: 100%;
  left: 0;
  top: 0;
  height: 100%; }

.banners-effect-8 .banners > div a {
  display: inline-block;
  position: relative;
  overflow: hidden;
  background: #000;
  vertical-align: top; }

.banners-effect-8 .banners > div a:before, .banners-effect-8 .banners > div a:after {
  bottom: 20px;
  content: "";
  left: 20px;
  opacity: 0;
  position: absolute;
  right: 20px;
  top: 20px;
  -webkit-transition: opacity 0.35s ease 0s, transform 0.35s ease 0s;
  -o-transition: opacity 0.35s ease 0s, transform 0.35s ease 0s;
  transition: opacity 0.35s ease 0s, transform 0.35s ease 0s;
  z-index: 1; }

.banners-effect-8 .banners > div a:before {
  border-bottom: 1px solid #fff;
  border-top: 1px solid #fff;
  -webkit-transform: scale(0, 1);
  -ms-transform: scale(0, 1);
  -o-transform: scale(0, 1);
  transform: scale(0, 1); }

.banners-effect-8 .banners > div a:after {
  border-left: 1px solid #fff;
  border-right: 1px solid #fff;
  -webkit-transform: scale(1, 0);
  -ms-transform: scale(1, 0);
  -o-transform: scale(1, 0);
  transform: scale(1, 0); }

.banners-effect-8 .banners > div img {
  opacity: 1;
  width: 100%;
  filter: alpha(opacity=100);
  -webkit-transition: opacity 0.35s ease 0s;
  -o-transition: opacity 0.35s ease 0s;
  transition: opacity 0.35s ease 0s; }

.banners-effect-8 .banners > div a:hover:before, .banners-effect-8 .banners > div a:hover:after {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1); }

.banners-effect-8 .banners > div a:hover img {
  opacity: 0.5;
  filter: alpha(opacity=50); }

.banners-effect-9 .banners > div a {
  display: block;
  position: relative;
  z-index: 10; }

.banners-effect-9 .banners > div a:before {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 0;
  width: 100%;
  height: 100%;
  background: #000;
  content: '';
  -webkit-transition: opacity 0.35s;
  transition: opacity 0.35s;
  box-shadow: 0 3px 30px rgba(0, 0, 0, 0.2);
  opacity: 0; }

.banners-effect-9 .banners > div a:hover:before {
  opacity: 1; }

.banners-effect-9 .banners > div a img {
  opacity: 1;
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: perspective(1000px) translate3d(0, 0, 0);
  transform: perspective(1000px) translate3d(0, 0, 0); }

.banners-effect-9 .banners > div a:hover img {
  -webkit-transform: perspective(1000px) translate3d(0, 0, 21px);
  transform: perspective(1000px) translate3d(0, 0, 21px); }

.banners-effect-10 .banners > div a {
  display: block;
  position: relative;
  overflow: hidden; }

.banners-effect-10 .banners > div a:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 75%);
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 75%);
  content: '';
  opacity: 0;
  -webkit-transform: translate3d(0, 50%, 0);
  transform: translate3d(0, 50%, 0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s; }

.banners-effect-10 .banners > div a:hover:before {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0); }

.banners-effect-11 .banners > div a {
  display: block;
  position: relative;
  overflow: hidden; }
  .banners-effect-11 .banners > div a:hover:before, .banners-effect-11 .banners > div a:hover:after {
    width: 100%;
    height: 100%; }
  .banners-effect-11 .banners > div a:before, .banners-effect-11 .banners > div a:after {
    background-color: rgba(0, 0, 0, 0.15);
    content: "";
    height: 0;
    left: 0;
    margin: auto;
    position: absolute;
    width: 0;
    transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    -webkit-transition: all 0.3s ease-out 0s; }
  .banners-effect-11 .banners > div a:after {
    left: auto;
    right: 0;
    bottom: 0; }

.banners-effect-12 .banners > div img {
  transition: all 0.3s ease-in;
  -moz-transition: all 0.3s ease-in;
  -webkit-transition: all 0.3s ease-in; }
  .banners-effect-12 .banners > div img:hover {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%); }
/* @end */
.icons-social a {
  display: inline-block;
  margin-right: 5px;
  color: #f82e56; }
  .icons-social .fa {
    font-size: 20px;
    line-height: 40px;
    vertical-align: top; }
  .icons-social .icon-circled {
    display: inline-block;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    line-height: 40px;
    border: 1px solid <?php echo $tema['t37'];?>;
    color: <?php echo $tema['t37'];?>;
    vertical-align: top;
    text-align: center; }
  .icons-social .icon-color.fa-facebook {
    background: #3b5998;
    border-color: #3b5998;
    color: #fff; }
  .icons-social a:hover .icon-circled {
    background: <?php echo $tema['t37'];?>;
    color: #fff; }
  .icons-social a:hover .icon-color.fa-facebook {
    background: #4c70ba; }
  .icons-social .icon-circled {
    display: inline-block;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    line-height: 40px;
    border: 1px solid <?php echo $tema['t37'];?>;
    color: <?php echo $tema['t37'];?>;
    vertical-align: top;
    text-align: center; }
  .icons-social .icon-color.fa-twitter {
    background: #00aced;
    border-color: #00aced;
    color: #fff; }
  .icons-social a:hover .icon-circled {
    background: <?php echo $tema['t37'];?>;
    color: #fff; }
  .icons-social a:hover .icon-color.fa-twitter {
    background: #21c2ff; }
  .icons-social .icon-circled {
    display: inline-block;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    line-height: 40px;
    border: 1px solid <?php echo $tema['t37'];?>;
    color: <?php echo $tema['t37'];?>;
    vertical-align: top;
    text-align: center; }
  .icons-social .icon-color.fa-google-plus {
    background: #dd4b39;
    border-color: #dd4b39;
    color: #fff; }
  .icons-social a:hover .icon-circled {
    background: <?php echo $tema['t37'];?>;
    color: #fff; }
  .icons-social a:hover .icon-color.fa-google-plus {
    background: #e47365; }
  .icons-social .icon-circled {
    display: inline-block;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    line-height: 40px;
    border: 1px solid <?php echo $tema['t37'];?>;
    color: <?php echo $tema['t37'];?>;
    vertical-align: top;
    text-align: center; }
  .icons-social .icon-color.fa-linkedin {
    background: #007bb5;
    border-color: #007bb5;
    color: #fff; }
  .icons-social a:hover .icon-circled {
    background: <?php echo $tema['t37'];?>;
    color: #fff; }
  .icons-social a:hover .icon-color.fa-linkedin {
    background: #009ee8; }
  .icons-social .icon-circled {
    display: inline-block;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    line-height: 40px;
    border: 1px solid <?php echo $tema['t37'];?>;
    color: <?php echo $tema['t37'];?>;
    vertical-align: top;
    text-align: center; }
  .icons-social .icon-color.fa-instagram {
    background: #125688;
    border-color: #125688;
    color: #fff; }
  .icons-social a:hover .icon-circled {
    background: <?php echo $tema['t37'];?>;
    color: #fff; }
  .icons-social a:hover .icon-color.fa-instagram {
    background: #1872b5; }
  .icons-social .icon-circled {
    display: inline-block;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    line-height: 40px;
    border: 1px solid <?php echo $tema['t37'];?>;
    color: <?php echo $tema['t37'];?>;
    vertical-align: top;
    text-align: center; }
  .icons-social .icon-color.fa-youtube {
    background: #b00;
    border-color: #b00;
    color: #fff; }
  .icons-social a:hover .icon-circled {
    background: <?php echo $tema['t37'];?>;
    color: #fff; }
  .icons-social a:hover .icon-color.fa-youtube {
    background: #e00; }

.divider {
  clear: both;
  height: 40px; }

.alert {
  border-radius: 0; }
  .alert .fa {
    font-size: 20px;
    vertical-align: middle;
    margin-right: 10px; }

.tab-content {
  padding: 15px 15px 10px;
  margin-bottom: 20px;
  z-index: 2;
  border: 1px solid #ddd;
  border-top: 0px; }

.simple-ul {
  margin: 0 0 15px 0;
  padding: 0;
  list-style: none; }
  .simple-ul li {
    position: relative;
    padding-left: 15px;
    margin-bottom: 5px; }
  .simple-ul li:before {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    font-family: 'FontAwesome';
    font-size: 14px;
    content: "\f105"; }
  .simple-ul li ul {
    margin: 10px 0 10px 0;
    padding: 0;
    list-style: none; }
  .simple-ul li ul li:before {
    content: "\f111";
    font-size: 7px; }

.decimal-list {
  margin: 0px 0 15px 20px;
  padding: 0;
  list-style: decimal outside; }
  .decimal-list li {
    padding-left: 0;
    margin-bottom: 5px;
    text-indent: 0; }

blockquote {
  font-size: 12px; }

.well {
  border-radius: 0; }

.feature-box {
  border-radius: 0;
  margin-bottom: 20px; }
  .feature-box .feature-icon {
    color: #3e7cb4;
    display: inline-block;
    font-size: 40px;
    height: 40px;
    text-align: center;
    width: 40px;
    float: left; }
  .feature-box .feature-content {
    padding-left: 50px; }

.featured-icon {
  border-radius: 50%;
  color: #fff;
  background-color: #3e7cb4;
  display: inline-block;
  font-size: 40px;
  height: 110px;
  line-height: 110px;
  margin: 5px;
  position: relative;
  text-align: center;
  width: 110px;
  z-index: 1; }

.simple-list {
  margin: 0;
  padding: 0;
  list-style-type: none; }

.bold-list > li > a {
  font-weight: 700;
  text-transform: uppercase; }

.simple-list ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
  position: relative; }

.simple-list li {
  margin: 0;
  padding: 0 0 8px; }

.simple-list .checkbox {
  padding-left: 0; }

.simple-list .checkbox input[type=checkbox] {
  margin-right: 10px; }

.simple-list .icon {
  margin-right: 9px; }

.arrow-list li {
  padding-left: 12px;
  position: relative; }
  .arrow-list li a {
    color: #555; }
  .arrow-list li a:hover {
    color: <?php echo $tema['t37'];?>; }

.arrow-list li:before {
  margin-right: 10px;
  font-size: 14px;
  display: inline-block;
  font-family: 'FontAwesome';
  content: "\f105"; }

.page-login .well {
  background: #fff;
  min-height: 285px;
  border: 1px solid #e7e7e7;
  margin: 0;
  line-height: 23px;
  border-radius: 0; }
  .page-login .well h2 {
    padding-bottom: 10px;
    font-size: 14px;
    text-transform: uppercase;
    position: relative; 
    background: #555;
    text-align: center;
    color: white;
    padding: 10px;
}
  .page-login .bottom-form {
    background: #f5f5f5;
    border: 1px solid #e7e7e7;
    border-top: 0;
    padding: 10px 20px;
    overflow: hidden;
    line-height: 35px; }
  .page-login .bottom-form .btn {
    padding: 9px 20px;
    background: #555;
    color: #fff;
    border-radius: 3px;
    border: none; }
  .page-login .bottom-form .btn:hover {
    background: <?php echo $tema['t37'];?>;
    border-color: <?php echo $tema['t37'];?>;
    color: #fff; }
  .page-login .bottom-form a {
    color: #555; }
  .page-login .bottom-form a:hover {
    color: <?php echo $tema['t37'];?>; }

div.required .control-label:before {
  content: '* ';
  color: #f00;
  font-weight: bold; }
/*******************************************************************
 ******                SO Framework: Sass Menu                 ******
 ********************************************************************/
/* [2] */
/* [8] */
/*===============================================
 [SASS DIRECTORY ]
 [1] Minxin Link
 [2] Minxin Button
 [3] Minxin Triangle
 [4] Minxin LABEL PRODUCT
 [5] Minxin Scrollbars
 [6] Minxin Dev Custom
 ==============================================*/
.no-margin {
  margin: 0 !important; }

.marginbottom__3x {
  margin-bottom: 30px; }

@-webkit-keyframes animLoadedLogo {
  to {
    -webkit-transform: translate3d(0, 100%, 0) translate3d(0, 50px, 0) scale3d(0.65, 0.65, 1); } }

@keyframes animLoadedLogo {
  to {
    -webkit-transform: translate3d(0, 100%, 0) translate3d(0, 50px, 0) scale3d(0.65, 0.65, 1);
    transform: translate3d(0, 100%, 0) translate3d(0, 50px, 0) scale3d(0.65, 0.65, 1); } }

@-webkit-keyframes animLoadedLoader {
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0) scale3d(0.3, 0.3, 1); } }

@keyframes animLoadedLoader {
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0) scale3d(0.3, 0.3, 1);
    transform: translate3d(0, -100%, 0) scale3d(0.3, 0.3, 1); } }

@-webkit-keyframes animLoadedHeader {
  to {
    -webkit-transform: translate3d(0, -100%, 0); } }

@keyframes animLoadedHeader {
  to {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); } }

@-webkit-keyframes animInitialHeader {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 800px, 0); } }

@keyframes animInitialHeader {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 800px, 0);
    transform: translate3d(0, 800px, 0); } }
/*Dev Custom */
/*====================================================*/
.lib-list-item-product2 {
  border: none; }
  .lib-list-item-product2 .image-dev .list-button-dev {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 10;
    transform: translate3d(-50%, -50%, 0);
    -moz-transform: translate3d(-50%, -50%, 0);
    -webkit-transform: translate3d(-50%, -50%, 0);
    -ms-transform: translate3d(-50%, -50%, 0); }
  .lib-list-item-product2 .image-dev .list-button-dev li {
    display: inline-block;
    float: left;
    height: 40px;
    width: 40px;
    background: #fff;
    position: relative;
    border-width: 0 1px 0 0;
    border-style: solid;
    border-color: #ddd;
    opacity: 0;
    transition: transform 0.2s ease-in-out, opacity 0.2s ease-in-out; }
  .lib-list-item-product2 .image-dev .list-button-dev li:nth-child(1) {
    transform: translateX(40px);
    -moz-transform: translateX(40px);
    -webkit-transform: translateX(40px);
    -ms-transform: translateX(40px);
    z-index: 1;
    transition-delay: 0s; }
  .lib-list-item-product2 .image-dev .list-button-dev li:nth-child(2) {
    transition-delay: 0.2s;
    z-index: 2; }
  .lib-list-item-product2 .image-dev .list-button-dev li:nth-child(3) {
    transition-delay: 0.2s;
    z-index: 2; }
  .lib-list-item-product2 .image-dev .list-button-dev li:nth-child(4) {
    transform: translateX(-40px);
    -moz-transform: translateX(-40px);
    -webkit-transform: translateX(-40px);
    -ms-transform: translateX(-40px);
    z-index: 1;
    transition-delay: 0s; }
  .lib-list-item-product2 .image-dev .list-button-dev li:first-child {
    border-left: 1px solid #ddd; }
  .lib-list-item-product2 .image-dev .list-button-dev li a, .lib-list-item-product2 .image-dev .list-button-dev li button {
    background: none;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    line-height: 40px;
    text-align: center;
    box-shadow: none;
    border: none;
    color: #555;
    width: 40px;
    padding: 0; }
  .lib-list-item-product2 .image-dev .list-button-dev li:hover {
    background: <?php echo $tema['t37'];?>; }
    .lib-list-item-product2 .image-dev .list-button-dev li:hover a, .lib-list-item-product2 .image-dev .list-button-dev li:hover button {
      color: #fff; }
  .lib-list-item-product2 .caption-dev {
    text-align: center;
    padding: 0 15px; }
  .lib-list-item-product2 .caption-dev .rating-dev {
    margin: 5px 0; }
  .lib-list-item-product2 .caption-dev .rating-dev .fa-stack-2x {
    font-size: 11px; }
  .lib-list-item-product2 .caption-dev .title-dev {
    color: #444;
    font-size: 13px; }
  .lib-list-item-product2 .caption-dev .price-dev .price.product-price {
    font-size: 16px; }
  .lib-list-item-product2 .caption-dev .price-dev .price-new {
    font-size: 16px; }
  .lib-list-item-product2 .caption-dev .price-dev .price-old {
    font-size: 12px; }
  .lib-list-item-product2 .caption-dev .add-cart-dev {
    background: #fff;
    border: 1px solid #ddd;
    font-size: 12px;
    text-transform: uppercase;
    color: #999;
    font-weight: bold;
    box-shadow: none;
    border-radius: 0;
    padding: 6px 20px;
    margin: 0 0 30px;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out; }

.lib-list-item-product-over2 .image-dev .list-button-dev li {
  opacity: 1;
  transition: transform 0.2s ease-in-out, opacity 0.2s ease-in-out; }
  .lib-list-item-product-over2 .image-dev .list-button-dev li:nth-child(1) {
    transform: translateX(0);
    -moz-transform: translateX(0);
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transition-delay: 0.2s; }
  .lib-list-item-product-over2 .image-dev .list-button-dev li:nth-child(2) {
    transition-delay: 0s; }
  .lib-list-item-product-over2 .image-dev .list-button-dev li:nth-child(3) {
    transition-delay: 0s; }
  .lib-list-item-product-over2 .image-dev .list-button-dev li:nth-child(4) {
    transform: translateX(0);
    -moz-transform: translateX(0);
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transition-delay: 0.2s; }
/*EFECT PRODUCT NUMBER*/
.lib-two-img, .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-left .item-image .lt-image, .products-list .product-layout .product-item-container .left-block .product-image-container.second_img {
  position: relative;
  display: block; 
  /*! min-height: 370px; */
}
  .lib-two-img .img-1, .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-left .item-image .lt-image .img-1, .products-list .product-layout .product-item-container .left-block .product-image-container.second_img .img-1 {
    opacity: 1;
    position: relative;
    transition: all 0.5s ease-in-out; 
    /*! min-height: 370px; */
}
  .lib-two-img .img-2, .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-left .item-image .lt-image .img-2, .products-list .product-layout .product-item-container .left-block .product-image-container.second_img .img-2 {
    position: absolute;
    z-index: 0;
    top: 0;
    opacity: 0;
    display: block;
    transition: all 0.5s ease-in-out;
    left: 50%;
    transform: translateX(-50%); }

.lib-two-img-over .img-1, .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1:hover .media-left .item-image .lt-image .img-1, .products-list .product-layout .product-item-container:hover .left-block .product-image-container.second_img .img-1 {
  opacity: 0;
  transform-style: inherit;
  transition: all 0.5s ease-in-out; }
  .lib-two-img-over .img-2, .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1:hover .media-left .item-image .lt-image .img-2, .products-list .product-layout .product-item-container:hover .left-block .product-image-container.second_img .img-2 {
    opacity: 1;
    transform-style: inherit;
    transition: all 0.5s ease-in-out; }
/*EFFECT SLIDERHOME*/
@keyframes myeffect-slideshow {
  0% {
    opacity: 0;
    transform: translateY(-300px);
    -webkit-transform: translateY(-300px);
    -moz-transform: translateY(-300px);
    -ms-transform: translateY(-300px);
    -o-transform: translateY(-300px); }

  100% {
    opacity: 1;
    transform: translateY(0);
    -moz-transform: translateY(0);
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0); } }

@-webkit-keyframes myeffect-slideshow {
  0% {
    opacity: 0;
    transform: translateY(-300px);
    -webkit-transform: translateY(-300px);
    -moz-transform: translateY(-300px);
    -ms-transform: translateY(-300px);
    -o-transform: translateY(-300px); }

  100% {
    opacity: 1;
    transform: translateY(0);
    -moz-transform: translateY(0);
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0); } }

@-moz-keyframes myeffect-slideshow {
  0% {
    opacity: 0;
    transform: translateY(-300px);
    -webkit-transform: translateY(-300px);
    -moz-transform: translateY(-300px);
    -ms-transform: translateY(-300px);
    -o-transform: translateY(-300px); }

  100% {
    opacity: 1;
    transform: translateY(0);
    -moz-transform: translateY(0);
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0); } }
/*============ MODULE MEGAMENU HORIZONTAL  ==================*/
.container-megamenu ul.megamenu li .sub-menu {
  z-index: 998; }
  .container-megamenu ul.megamenu li .sub-menu .content {
    box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.2);
    padding: 30px;
    border-radius: 0; }
/*---mega menu horizontal level 1--*/
.container-megamenu.horizontal ul.megamenu > li {
  float: left;
  margin-right: 30px; }
  .container-megamenu.horizontal ul.megamenu > li > a {
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 600;
    color: #222;
    display: block;
    position: relative;
    padding: 15px 0;
    line-height: 100%;
    height: auto; }
  .container-megamenu.horizontal ul.megamenu > li > a strong {
    font-weight: 600; }
  .container-megamenu.horizontal ul.megamenu > li.active > a, .container-megamenu.horizontal ul.megamenu > li.active_menu > a {
    color: <?php echo $tema['t37'];?>; }

.container-megamenu.horizontal {
  /*-------- SUB MENU HORIZONTAL ----------*/
  /* ul.megamenu li .sub-menu .content .static-menu .menu ul ul,
   ul.megamenu .title-submenu{
   padding: 0;
   }
   ul.megamenu li .sub-menu .content .static-menu .menu ul ul li::before,
   ul.megamenu li .sub-menu .content .hover-menu a::before{
   display: none;
   }*/ }
  .container-megamenu.horizontal .title-feature, .container-megamenu.horizontal ul.megamenu .title-submenu, .container-megamenu.horizontal ul.megamenu li .sub-menu .content .static-menu a.main-menu, .container-megamenu.horizontal ul.megamenu .subcategory a.title-submenu {
    line-height: 100%;
    text-transform: uppercase;
    font-weight: bold;
    padding-bottom: 0;
    margin-bottom: 5x; }
  .container-megamenu.horizontal ul.megamenu li .sub-menu .content a, .container-megamenu.horizontal ul.megamenu li .sub-menu .content .html a.subcategory_item {
    line-height: 30px;
    color: #464646;
    display: block; }
  .container-megamenu.horizontal ul.megamenu li .sub-menu .content a:hover, .container-megamenu.horizontal ul.megamenu li .sub-menu .content .html a.subcategory_item:hover {
    color: <?php echo $tema['t37'];?>; }
  .container-megamenu.horizontal ul.megamenu > li > a img {
    position: absolute;
    top: -8px;
    right: 0px;
    height: auto; }
  .container-megamenu.horizontal ul.megamenu .sub-menu .content > .border {
    border: none;
    padding-top: 0; }
  .container-megamenu.horizontal ul.megamenu li .sub-menu .content img:hover {
    -webkit-opacity: 0.8;
    -moz-opacity: 0.8;
    -ms-opacity: 0.8;
    -o-opacity: 0.8;
    opacity: 0.8; }
  .container-megamenu.horizontal ul.megamenu li .sub-menu .content .item-banner .img-banner-w {
    margin: 0 -15px; }
  .container-megamenu.horizontal ul.megamenu li .sub-menu .content .item-banner .img-banner {
    width: 50%;
    padding: 0 15px;
    float: left; }
/*============ MODULE MEGAMENU VERTICAL  ==================*/
.container-megamenu .container {
  width: 100%;
  padding: 0; }

.container-megamenu.vertical {
  z-index: 990; }
  .container-megamenu.vertical .megamenuToogle-wrapper {
    background-color: transparent; }
  .container-megamenu.vertical #menuHeading {
    margin: 0; }
  .container-megamenu.vertical #menuHeading .megamenuToogle-pattern {
    position: relative; }
  .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container {
    width: 100%;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
    color: #fff;
    font-weight: 700;
    /* [4] */
    /* [6] */
    /* [6] */
    /* [7] */
    font-size: 16px;
    font-size: 14px;
    /* [8] */
    line-height: 44px;
    padding: 0px 0px 0px 20px;
    margin: 0;
    position: relative;
    text-transform: uppercase;
    display: block; }
  .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container > div {
    float: left;
    padding-top: 15px;
    margin: 0px 9px 0 0; }
    .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container > div > span {
      box-shadow: none;
      height: 2px; }
  .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container:hover {
    cursor: pointer; }
  .container-megamenu.vertical .vertical-wrapper .megamenu-pattern {
    position: relative;
    z-index: 1; }
  @media (min-width: 992px) {
    .container-megamenu.vertical .vertical-wrapper ul.megamenu {
      padding-top: 0;
      background-color: #fafafa;
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px; }
      .container-megamenu.vertical .vertical-wrapper ul.megamenu > li {
        cursor: pointer;
        padding: 0 15px 0 15px;
        border: none;
        margin: 0;
        position: relative; }
        .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > a {
          color: #666;
          display: block;
          font-size: 13px;
          font-weight: 400;
          padding: 8px 0;
          line-height: 22px;
          position: relative;
          text-transform: capitalize;
          background: none;
          height: auto; }
        .container-megamenu.vertical .vertical-wrapper ul.megamenu > li.with-sub-menu > a .fa-angle-right:before {
          color: #ccc;
          font-family: 'FontAwesome';
          display: inline-block;
          content: "\f105";
          font-size: 15px;
          position: absolute;
          right: 0px;
          top: 12px; }
          .container-megamenu.vertical .vertical-wrapper ul.megamenu > li.with-sub-menu:hover > a::before {
            color: <?php echo $tema['t37'];?>; }
        .container-megamenu.vertical .vertical-wrapper ul.megamenu > li.active > a, .container-megamenu.vertical .vertical-wrapper ul.megamenu > li:hover > a {
          color: <?php echo $tema['t37'];?>; }
      .container-megamenu.vertical .vertical-wrapper ul.megamenu .loadmore {
        padding: 17px 15px 23px 50px;
        line-height: 100%; }
        .container-megamenu.vertical .vertical-wrapper ul.megamenu .loadmore i {
          left: 14px;
          top: 16px;
          position: absolute;
          font-size: 14px;
          color: <?php echo $tema['t37'];?>; }
        .container-megamenu.vertical .vertical-wrapper ul.megamenu .loadmore .more-view {
          color: <?php echo $tema['t37'];?>;
          font-size: 14px; } }

.container-megamenu.vertical ul.megamenu > li > a strong {
  font-weight: 400; }
  .container-megamenu.vertical .vertical-wrapper {
    border: none;
    margin: 0;
    padding: 0;
    box-shadow: none;
    border-radius: 0;
    /*---------------- SUB MENU VERTICAL -----------------*/ }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu .sub-menu .content .img-banner img {
    width: 100%; }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > a img {
    height: auto;
    margin: 0;
    /*! margin-right: 10px; */ }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu .sub-menu .content > .border {
    padding: 0;
    border: none; }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu .sub-menu .content > .row {
    padding-top: 5px; }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > .sub-menu .content {
    /*! padding: 30px; */
    box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2); }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > .sub-menu .content .static-menu .menu > ul > li {
    margin-bottom: 15px; }
    .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > .sub-menu .content .static-menu .menu > ul li a.main-menu {
      color: #222;
      /* [4] */
      /* [6] */
      /* [6] */
      /* [7] */
      font-size: 14px;
      font-size: 1.4rem;
      /* [8] */
      margin: 0 0 0px;
      display: block;
      font-weight: 600;
      text-transform: uppercase;
      border: none; }
    .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > .sub-menu .content .static-menu .menu > ul ul {
      padding: 0; }
      .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > .sub-menu .content .static-menu .menu > ul ul li {
        padding: 0;
        display: inline; }
        .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > .sub-menu .content .static-menu .menu > ul ul li a {
          /* [4] */
          /* [6] */
          /* [6] */
          /* [7] */
          font-size: 14px;
          font-size: 1.4rem;
          /* [8] */
          font-weight: 400;
          display: block;
          line-height: 28px; }
        .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > .sub-menu .content .static-menu .menu > ul ul li:before {
          display: none; }
        .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > .sub-menu .content .static-menu .menu > ul ul li:hover a {
          color: <?php echo $tema['t37'];?>; }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > .sub-menu .content .link:hover img {
    opacity: 0.8; }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > .sub-menu .content .img-vbanner a:hover img {
    opacity: 0.8; }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > .sub-menu .content ul.subcategory .title-submenu {
    font-weight: 700;
    color: #222;
    font-size: 14px;
    text-transform: uppercase;
    padding: 0 0 3px 0; }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > .sub-menu .content ul.subcategory .menu ul li {
    line-height: 100%;
    display: inline; }
    .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > .sub-menu .content ul.subcategory .menu ul li a {
      font-size: 14px;
      line-height: 28px; }
      .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.css-menu .content {
        padding: 0; }
    .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.css-menu .content .menu ul {
      margin: 10px 0;
      padding: 0; }
    .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.css-menu .content .menu ul li {
      padding: 0;
      position: relative; }
    .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.css-menu .content .menu ul li:last-child {
      border: none; }
    .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.css-menu .content .menu ul li > a {
      line-height: 30px;
      font-size: 14px;
      display: inline-block;
      width: 100%;
      padding: 0 20px; }
    .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.css-menu .content .menu ul li b {
      float: right;
      line-height: 27px;
      font-size: 16px;
      margin: 0 20px;
      position: absolute;
      top: 0;
      right: 0; }
      .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.css-menu .content .menu ul li:hover > a {
        color: <?php echo $tema['t37'];?>; }
    .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.css-menu .content .menu ul li ul {
      width: 250px;
      padding: 10px 0;
      top: 0;
      margin: 0;
      left: 100%; }
      .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.css-menu .content .menu ul li ul:before, .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.css-menu .content .menu ul li ul:after {
        display: none; }
      .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.css-menu .content .menu ul li ul li:last-child {
        border: none; }
        .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.css-menu .content .menu ul li ul li > a {
          font-weight: normal;
          line-height: 30px; }

/*===============================================
 [SASS DIRECTORY ]
 ==============================================*/
.list-item li {
  margin-bottom: 10px; }

.content-aside {
  margin-bottom: 30px; }

.banner-sidebar a img {
  width: 100%; }

#sosearchpro.so-search {
  width: 100%;
  padding: 0; }

.sohomepage-slider .form-group {
  margin-bottom: 0; }

.content-aside .module.banner-left {
  border: none; }

#content div.so-deal .extraslider-inner .item {
  border: none; }
/*============MODULE DEFAULT ==================*/
.module.sohomepage-slider .so-homeslider {
  direction: ltr; }

.module .so-extraslider .extraslider-inner {
  border: none;
  padding-bottom: 0; }

#content .sohomepage-slider .sohomeslider-description h2 {
  margin: 0; }

#content .module h2 {
  font-size: 16px;
  color: #000;
  font-weight: 700;
  text-transform: uppercase;
  margin-top: 30px; }
  #content .module h3.modtitle {
    font-size: 16px;
    color: #000;
    font-weight: 700;
    text-transform: uppercase; }
  #content .module h3.modtitle span {
    font-size: 16px;
    color: #000;
    font-weight: 700;
    text-transform: uppercase; }

.content-aside .module {
  border: 1px solid #d7d7d7;
  overflow: hidden;
  margin-bottom: 40px;
  border-radius: 3px; }
  .content-aside .module h3.modtitle {
    border-bottom: 1px solid #d7d7d7;
    font-size: 16px;
    color: #222;
    font-weight: 700;
    text-transform: uppercase;
    background-color: #f5f5f5;
    margin: 0;
    padding: 15px; }
  .content-aside .module h3.modtitle span {
    font-size: 16px;
    color: #000;
    font-weight: 700;
    text-transform: uppercase; }
  .content-aside .module .modcontent {
    padding: 15px 20px; }
  .content-aside .module#blog-search {
    border: none; }

.category-style .list-group > li {
  border-bottom: 1px dotted #e4e4e4;
  margin: 0;
  position: relative; }
  .category-style .list-group > li span.button-view {
    display: block;
    position: absolute;
    right: 0;
    top: 5px;
    cursor: pointer;
    z-index: 10;
    text-align: center;
    width: 30px;
    height: 30px;
    line-height: 30px;
    font-size: 14px; }
  .category-style .list-group > li a {
    color: #333;
    padding: 10px 0;
    display: block; }
  .category-style .list-group > li a:hover {
    color: <?php echo $tema['t37'];?>; }
  .category-style .list-group > li a:hover + .button-view {
    color: <?php echo $tema['t37'];?>; }
  .category-style .list-group > li .active, .category-style .list-group > li .active + .button-view {
    color: <?php echo $tema['t37'];?>; }
  .category-style .list-group > li .active + .button-view:before {
    content: '\f147'; }
  .category-style .list-group > li li {
    padding: 0;
    position: relative;
    list-style: none; }
  .category-style .list-group > li li a {
    padding: 5px 0; }
    .category-style .list-group > li li a:before {
      content: '';
      padding: 0 5px;
      font-family: 'FontAwesome';
      content: "\f105";
      margin-left: -10px;
      transition: all 400ms ease;
      opacity: 0; }
    .category-style .list-group > li li a:hover:before {
      opacity: 1;
      margin: 0; }
/************************************************************************************************
 EXTRASLIDER BESTSELER
 *************************************************************************************************/
.best-seller {
  position: relative;
  margin: 0; }
  .best-seller .so-extraslider {
    margin: 0; }
  .best-seller .so-extraslider .extraslider-inner {
    border: 1px solid #eee;
    padding-bottom: 0; }
  .best-seller .so-extraslider .extraslider-inner .item-wrap-inner {
    margin: 18px 0 8px; }
  @media (min-width: 1200px) {
      .best-seller .so-extraslider .extraslider-inner .item-wrap-inner {
        padding-left: 10px; } }
  .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 {
    border-bottom: 1px solid #eee;
    margin-bottom: 2px; }
  .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1:last-child {
    border-bottom: 0;
    margin-bottom: 0; }
  .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-left {
    float: left;
    width: 85px; }
  .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-left .item-image {
    border: 0; }
    .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-left .item-image:hover {
      box-shadow: none;
      opacity: 0.8; }
  .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-body .item-info {
    background: transparent;
    position: static;
    color: #666; }
    .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-body .item-info a {
      color: #444; }
    .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-body .item-info .item-title {
      padding: 0 0 5px 0; }
    .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-body .item-info .item-title a {
      text-transform: capitalize;
      font-size: 15px;
      font-weight: normal; }
    .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-body .item-info .item-title a:hover {
      color: <?php echo $tema['t37'];?>; }
    .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-body .item-info .item-content {
      margin-left: 0; }
    .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-body .item-info .item-content .content_price span {
      color: #e74c3c;
      font-size: 16px;
      font-weight: bold; }
    .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-body .item-info .item-content .content_price span.price-old {
      font-size: 12px;
      color: #999; }
    .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-body .item-info .rating {
      padding: 0; }
  .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1:hover .item-title a {
    color: <?php echo $tema['t37'];?>; }
  .best-seller .so-extraslider .extraslider-inner .item-wrap .item-info .item-content .content_price {
    margin-bottom: 0; }
  .best-seller .so-extraslider .owl2-controls {
    margin-bottom: 8px;
    text-align: right;
    position: absolute;
    top: 4px;
    vertical-align: middle;
    right: 5px; }
  .best-seller .so-extraslider .owl2-controls .owl2-nav > div {
    width: 17px;
    height: 30px;
    text-align: center;
    display: inline-block;
    line-height: 30px;
    font-size: 0;
    cursor: pointer;
    color: #999;
    background-color: transparent;
    margin-top: 0;
    position: static;
    float: left; }
  .best-seller .so-extraslider .owl2-controls .owl2-nav > div:hover {
    color: <?php echo $tema['t37'];?>; }
  .best-seller .so-extraslider .owl2-controls .owl2-prev:before {
    content: "\f104";
    font-family: FontAwesome;
    font-size: 28px; }
  .best-seller .so-extraslider .owl2-controls .owl2-next:before {
    content: "\f105";
    font-family: FontAwesome;
    font-size: 28px; }
/*============MODULE NEWLETTER POPUP ==================*/
.newsletter #signup .show-error {
  float: left;
  padding-top: 7px;
  color: #f55; }

.module.main-newsleter-popup .so-custom-popup {
  background-color: #fff;
  border-radius: 0px;
  padding: 0;
  background-repeat: no-repeat; }
  @media (min-width: 768px) and (max-width: 991px) {
    .module.main-newsleter-popup .so-custom-popup {
      width: 85%; }
      .module.main-newsleter-popup .so-custom-popup:before {
        content: "";
        position: absolute;
        z-index: 2;
        background: rgba(255, 255, 255, 0.9);
        width: 100%;
        height: 100%;
        top: 0;
        right: 0; } }
  @media (max-width: 767px) {
    .module.main-newsleter-popup .so-custom-popup:before {
      content: "";
      position: absolute;
      z-index: 2;
      background: rgba(255, 255, 255, 0.9);
      width: 100%;
      height: 100%;
      top: 0;
      right: 0; } }
  .module.main-newsleter-popup .so-custom-popup .popup-close {
    width: 31px;
    height: 31px;
    line-height: 30px;
    border-radius: 0;
    -webkit-opacity: 1;
    -moz-opacity: 1;
    -ms-opacity: 1;
    -o-opacity: 1;
    opacity: 1;
    color: #fff;
    background-color: <?php echo $tema['t37'];?>;
    border: none;
    right: 0;
    top: -31px; }
  .module.main-newsleter-popup .so-custom-popup .popup-close:hover {
    background-color: #cc4b00; }
  .module.main-newsleter-popup .modcontent {
    position: relative; }
  .module.main-newsleter-popup .so-custom-popup .modcontent {
    padding: 10px; }
  .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content {
    padding: 15px 10px;
    text-align: center; }
  @media (min-width: 1200px) {
      .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content {
        padding: 75px 30px 50px 52%;
        margin: 0; } }
  @media (min-width: 992px) and (max-width: 1199px) {
      .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content {
        padding: 75px 30px 50px 52%;
        margin: 0; } }
  .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .popup-title {
    font-weight: 700;
    font-size: 36px;
    color: #222;
    text-transform: capitalize; }
  .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .newsletter_promo {
    font-size: 14px;
    color: #666;
    font-weight: 400; }
  .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .email {
    margin: 25px 0; }
  .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .form-group {
    position: relative; }
  .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .form-group .input-box {
    background-color: #fff;
    vertical-align: top;
    padding-right: 120px; }
  .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .form-group .form-control {
    height: 40px;
    line-height: 40px;
    width: 100%;
    box-shadow: none;
    padding: 0 0 0 20px;
    border: none;
    background-color: #fff;
    border: 1px solid #ebebeb; }
    .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .form-group .form-control::-moz-placeholder {
      color: #999;
      opacity: 1; }
    .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .form-group .form-control:-ms-input-placeholder {
      color: #999; }
    .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .form-group .form-control::-webkit-input-placeholder {
      color: #999; }
    .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .form-group .form-control:focus {
      z-index: 0; }
  .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .btn-default {
    border: 0 none;
    color: #fff;
    font-weight: 700;
    font-size: 12px;
    height: 40px;
    line-height: 40px;
    padding: 0 17px;
    text-transform: uppercase;
    position: absolute;
    top: 0;
    right: 0;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px; }
  .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .btn-default:hover {
    color: #fff;
    background-color: #cc4b00; }
  .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .hidden-popup {
    font-weight: 400;
    color: #666;
    padding-bottom: 20px;
    font-size: 12px; }
  .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .hidden-popup:hover {
    cursor: pointer; }
  .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .newsletter_promo {
    padding: 10px 0;
    margin: 0; }
  .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .socials {
    text-align: center;
    margin-top: 0; }
  .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .socials li {
    position: relative;
    display: inline-block; }
    .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .socials li a {
      width: 30px;
      height: 30px;
      line-height: 30px;
      text-align: center;
      border-radius: 50%;
      border: 1px solid #ebebeb;
      display: inline-block;
      margin: 0 5px;
      color: #555;
      font-size: 14px;
      transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -webkit-transition: all 0.2s ease-in-out 0s; }
    .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .socials li a:hover {
      color: #fff;
      background-color: <?php echo $tema['t37'];?>;
      border-color: <?php echo $tema['t37'];?>; }
    .main-newsleter-popup .show-error {
      display: inline-block;
      margin-left: 0;
      position: relative;
      top: -10px;
      width: 100%; }
/*============ MODULE LOGIN POPUP ==================*/
body #so_sociallogin .block-popup-login .tt_popup_login {
  border: none;
  background-color: <?php echo $tema['t37'];?>;
  height: 42px; }
  body #so_sociallogin .block-popup-login .tt_popup_login strong {
    font-size: 16px;
    font-weight: 700;
    background-color: <?php echo $tema['t37'];?>;
    line-height: 42px;
    position: static;
    background-position: 20px center;
    padding-left: 70px; }
  body #so_sociallogin .block-popup-login .tt_popup_login strong:before {
    display: none; }
  body #so_sociallogin .block-popup-login .close-login {
    background-image: none;
    text-indent: 0;
    font-size: 24px;
    color: #fff;
    top: 7px;
    right: 5px; }
  body #so_sociallogin .block-popup-login .block-content .login-customer h2 {
    font-size: 16px;
    font-weight: 700; }
  body #so_sociallogin .block-popup-login .block-content .input-text {
    border-radius: 0; }
  body #so_sociallogin .block-popup-login .block-content .btn-reg-popup {
    font-size: 14px;
    padding: 0 20px;
    background-color: #666;
    border-radius: 4px; }
  body #so_sociallogin .block-popup-login .block-content .btn-reg-popup:hover {
    background-color: <?php echo $tema['t37'];?>; }
  body #so_sociallogin .block-popup-login .block-content .action.login {
    background-image: none;
    padding: 0 20px;
    background-color: #666;
    border-radius: 4px; }
  body #so_sociallogin .block-popup-login .block-content .action.login:hover {
    background-color: <?php echo $tema['t37'];?>; }
/*============ BREADCRUMB ==================*/
.breadcrumbs {
  /* background-color: #efefef;
   margin-bottom: 60px;*/
  /*ul.breadcrumb{
   float: $right;
   width: auto;
   }*/ }
  .breadcrumbs .current-name {
    font-size: 18px;
    color: #222;
    text-transform: uppercase;
    float: left;
    font-weight: 700;
    margin: 25px 0;
    display: none; }

ul.breadcrumb {
  margin: 23px 0;
  background-color: transparent;
  padding: 0;
  display: inline-block;
  width: 100%;
  line-height: 100%; }
  ul.breadcrumb li {
    display: inline-block;
    padding: 0 17px 0 8px;
    margin-right: 7px;
    position: relative; }
  ul.breadcrumb li:before {
    display: none; }
  ul.breadcrumb li:not(:last-child):after {
    font-family: 'FontAwesome';
    content: '\f105';
    font-size: 13px;
    top: 0px;
    right: 0;
    position: absolute; }
  ul.breadcrumb li a {
    display: block;
    padding: 0;
    color: #999;
    text-decoration: none;
    font-size: 14px; }
  ul.breadcrumb li:last-child {
    padding: 5px 0px; }
  ul.breadcrumb li:last-child a {
    color: <?php echo $tema['t37'];?>; }
  ul.breadcrumb li:hover a {
    color: <?php echo $tema['t37'];?>; }
/*=========== BLOCK SIDEBAR ==================*/
.content-aside .product-simple {
  position: relative; }
  .content-aside .product-simple .modcontent {
    padding: 15px 10px; }
  .content-aside .product-simple .so-quickview {
    display: none; }
  .content-aside .product-simple .so-extraslider {
    margin: 0; }
  .content-aside .product-simple .so-extraslider .owl2-controls .owl2-dots {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 80px;
    right: 10px;
    top: 18px;
    min-width: 60px; }
  .content-aside .product-simple .so-extraslider .owl2-controls .owl2-dots .owl2-dot {
    width: 8px;
    height: 8px;
    border-radius: 8px;
    background-color: #222;
    margin: 0 5px;
    display: inline-block;
    float: none;
    opacity: 1;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s; }
    .content-aside .product-simple .so-extraslider .owl2-controls .owl2-dots .owl2-dot span {
      display: none; }
    .content-aside .product-simple .so-extraslider .owl2-controls .owl2-dots .owl2-dot:hover {
      background-color: <?php echo $tema['t37'];?>; }
    .content-aside .product-simple .so-extraslider .owl2-controls .owl2-dots .owl2-dot.active {
      width: 30px;
      background-color: <?php echo $tema['t37'];?>; }
  .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav {
    top: 1px;
    position: absolute;
    right: 0px; }
  .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev, .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next {
    background-color: #222;
    border: none;
    border-radius: 0px;
    -moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    float: left;
    text-indent: -9999px;
    overflow: hidden;
    cursor: pointer;
    opacity: 1;
    position: absolute;
    top: 50%;
    z-index: 99; }
    .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev:before, .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next:before {
      color: #fff;
      font-family: 'FontAwesome';
      display: block;
      text-indent: 0 !important;
      width: 100%;
      height: 100%;
      font-size: 18px; }
    .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev.owl2-next, .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next.owl2-next {
      right: 0; }
    .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev.owl2-next:before, .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next.owl2-next:before {
      content: "\f054"; }
    .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev.owl2-prev, .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next.owl2-prev {
      left: 0; }
    .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev.owl2-prev:before, .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next.owl2-prev:before {
      content: "\f053"; }
    .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev:hover, .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next:hover {
      background-color: <?php echo $tema['t37'];?>; }
    .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev:hover:before, .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next:hover:before {
      color: #fff; }
  .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav > div {
    margin-top: 0;
    line-height: 28px; }
    .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav > div:before {
      position: static;
      font-weight: 400; }
  .content-aside .product-simple .so-extraslider:hover .owl2-controls {
    /*@include transform(scale(1));          
     @include effect-block-show();*/ }
  .content-aside .product-simple .so-extraslider .extraslider-inner .item {
    padding-top: 0;
    border: none; }
  .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner {
    border-bottom: none;
    display: inline-block;
    padding-bottom: 10px;
    margin-bottom: 11px;
    width: 100%; }
    .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner:last-child {
      border-bottom: none;
      margin-bottom: 0; }
    .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image {
      width: 80px;
      float: left;
      position: relative; }
    .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image .so-quickview {
      display: none; }
    .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image .so-quickview .btn-button {
      border: none;
      display: inline-block;
      margin-top: 0;
      padding: 0;
      background-color: #666;
      border-radius: 3px;
      color: #fff;
      width: 30px;
      height: 30px;
      line-height: 30px;
      transform: all 0.3s ease 0s;
      text-align: center;
      position: absolute;
      top: 50%;
      margin-top: -15px;
      left: 50%;
      margin-left: -15px;
      -webkit-transform: scale(0);
      -moz-transform: scale(0);
      -ms-transform: scale(0);
      -o-transform: scale(0);
      transform: scale(0);
      opacity: 0;
      transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -webkit-transition: all 0.2s ease-in-out 0s; }
      .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image .so-quickview .btn-button span {
        display: none; }
      .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image .so-quickview .btn-button i, .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image .so-quickview .btn-button:before {
        font-size: 12px;
        color: #fff;
        height: 30px;
        line-height: 30px;
        text-align: center; }
      .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image .so-quickview .btn-button:hover {
        background-color: <?php echo $tema['t37'];?>; }
    .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info {
      margin-top: 0px;
      margin-left: 95px; }
    .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .price {
      margin-bottom: 3px; }
    .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .rating, .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .ratings {
      margin-bottom: 0; }
    .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .item-title {
      line-height: 100%;
      margin-bottom: 5px;
      padding: 0; }
    .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .item-title a {
      font-size: 13px;
      color: #333;
      font-weight: 500;
      text-transform: capitalize;
      line-height: 18px; }
      .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .item-title a:hover {
        color: <?php echo $tema['t37'];?>; }
    .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner:hover .item-image .so-quickview .btn-button {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1);
      opacity: 1;
      transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -webkit-transition: all 0.2s ease-in-out 0s; }
/*============ MODULE MEGAMENU HORIZONTAL  ==================*/
.container-megamenu.horizontal ul.megamenu .sub-menu .image-link {
  margin-bottom: 10px;
  color: #333; }
  .container-megamenu.horizontal ul.megamenu .sub-menu .image-link .figcaption {
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 600;
    text-align: center; }

.container-megamenu.horizontal ul.megamenu .sub-menu .image-link:hover {
  color: <?php echo $tema['t37'];?>; }

.container-megamenu.horizontal .image-link .thumbnail {
  position: relative;
  overflow: hidden;
  border-radius: 0;
  background: #fff;
  padding: 3px;
  margin: 0 0 10px; }

.container-megamenu ul.megamenu li .sub-menu {
  z-index: 998; }
  .container-megamenu ul.megamenu li .sub-menu .content {
    box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.2);
    padding: 30px; 
    padding-top: 0px !important;
}
  .container-megamenu ul.megamenu li.menu-layouts .sub-menu .content {
    padding: 30px 30px 10px 30px; }
/*---mega menu horizontal level 1--*/
.container-megamenu.horizontal ul.megamenu > li {
  float: left;
  margin-right: 30px; }
  .container-megamenu.horizontal ul.megamenu > li > a {
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 600;
    color: #222;
    display: block;
    position: relative;
    padding: 15px 0;
    line-height: 100%;
    height: auto; }
  .container-megamenu.horizontal ul.megamenu > li > a strong {
    font-weight: 600; }
  .container-megamenu.horizontal ul.megamenu > li.active > a, .container-megamenu.horizontal ul.megamenu > li.active_menu > a {
    color: <?php echo $tema['t37'];?>; }

.container-megamenu.horizontal {
  /*-------- SUB MENU HORIZONTAL ----------*/ }
  .container-megamenu.horizontal .title-feature, .container-megamenu.horizontal ul.megamenu .title-submenu, .container-megamenu.horizontal ul.megamenu li .sub-menu .content .static-menu a.main-menu, .container-megamenu.horizontal ul.megamenu .subcategory a.title-submenu {
    line-height: 100%;
    text-transform: uppercase;
    font-weight: 600;
    color: #000;
    padding-bottom: 12px;
    margin-bottom: 6px;
    /* [4] */
    /* [6] */
    /* [6] */
    /* [7] */
    font-size: 16px;
    font-size: 14px;
    /* [8] */
    border-bottom: 1px solid #eaeaea; }
  .container-megamenu.horizontal .content-feature li a, .container-megamenu.horizontal ul.megamenu li .sub-menu .content .static-menu .menu ul ul li a, .container-megamenu.horizontal ul.megamenu li .sub-menu .content .html a.subcategory_item, .container-megamenu.horizontal ul.megamenu .sub-menu .content .hover-menu .menu ul a.main-menu {
    line-height: 30px;
    font-size: 14px;
    font-weight: 400;
    color: #464646; }
  .container-megamenu.horizontal .content-feature li a:hover, .container-megamenu.horizontal ul.megamenu li .sub-menu .content .static-menu .menu ul ul li a:hover, .container-megamenu.horizontal ul.megamenu li .sub-menu .content .html a.subcategory_item:hover, .container-megamenu.horizontal ul.megamenu .sub-menu .content .hover-menu .menu ul a.main-menu:hover {
    color: <?php echo $tema['t37'];?>; }
  .container-megamenu.horizontal ul.megamenu > li > a strong img {
    position: absolute;
    top: -8px;
    right: 0px;
    height: auto; }
  .container-megamenu.horizontal .content-feature li.detail {
    margin-top: 20px; }
  .container-megamenu.horizontal .content-feature li.detail .lc {
    text-transform: capitalize;
    font-size: 11px;
    line-height: 100%; }
  .container-megamenu.horizontal ul.megamenu .sub-menu .content > .border {
    border: none;
    padding-top: 0; }
  .container-megamenu.horizontal ul.megamenu li .sub-menu .content .static-menu .menu ul ul, .container-megamenu.horizontal ul.megamenu .title-submenu {
    padding: 0; }
  .container-megamenu.horizontal ul.megamenu li .sub-menu .content .static-menu .menu ul ul li::before, .container-megamenu.horizontal ul.megamenu li .sub-menu .content .hover-menu a::before {
    display: none; }
  .container-megamenu.horizontal ul.megamenu li .sub-menu .content img:hover {
    -webkit-opacity: 0.8;
    -moz-opacity: 0.8;
    -ms-opacity: 0.8;
    -o-opacity: 0.8;
    opacity: 0.8; }
  .container-megamenu.horizontal ul.megamenu li .sub-menu .content .item-banner .img-banner-w {
    margin: 0 -15px; }
  .container-megamenu.horizontal ul.megamenu li .sub-menu .content .item-banner .img-banner {
    width: 50%;
    padding: 0 15px;
    float: left; }
  .container-megamenu.horizontal .sub-menu .content-feature .title-feature {
    margin-bottom: 20px; }
  .container-megamenu.horizontal .sub-menu .content-feature li {
    float: left;
    width: 33.33%;
    text-align: center; }
  .container-megamenu.horizontal .sub-menu .content-feature li a img {
    margin-bottom: 8px; }
    .container-megamenu.horizontal .sub-menu .content-feature li a span {
      display: block;
      width: 100%;
      text-transform: uppercase;
      font-size: 12px;
      color: #666;
      font-weight: 600;
      line-height: 100%;
      margin-top: 8px; }
    .container-megamenu.horizontal .sub-menu .content-feature li a:hover span {
      color: <?php echo $tema['t37'];?>; }
  .container-megamenu.horizontal .sub-menu .demo-detail ul li {
    width: 33.33%; }
  .container-megamenu.horizontal .sub-menu .feature-blog a {
    text-align: center; }
  .container-megamenu.horizontal .sub-menu .feature-blog a img {
    margin-bottom: 10px; }
  .container-megamenu.horizontal .sub-menu .feature-blog a span {
    display: block;
    width: 100%;
    text-transform: uppercase;
    font-size: 12px;
    color: #666;
    font-weight: 600;
    line-height: 100%;
    margin-bottom: 0px; }
  .container-megamenu.horizontal .sub-menu .feature-blog a:hover span {
    color: <?php echo $tema['t37'];?>; }
  .container-megamenu.horizontal .sub-menu .feature-blog .clearfix {
    margin: 20px; }
  .container-megamenu.horizontal ul.megamenu {
    /*.sub-menu{
     opacity: 1;
     display: block ;
     .content{
     display: block ;
     } 
     }*/ }
  .container-megamenu.horizontal ul.megamenu .item-style1 {
    /*.sub-menu{
     opacity: 1;
     display: block ;
     .content{
     display: block ;
     } 
     }*/ }
  .container-megamenu.horizontal ul.megamenu .item-style1 .subcategory li a {
    float: left;
    text-align: left; }
  .container-megamenu.horizontal ul.megamenu .item-style1 .sub-menu .content .hover-menu li {
    text-align: left;
    display: inline; }
    .container-megamenu.horizontal ul.megamenu .item-style1 .sub-menu .content .hover-menu li a {
      text-align: left; }
  .container-megamenu.horizontal ul.megamenu .item-style2 {
    /*.sub-menu{
     opacity: 1;
     display: block ;
     .content{
     display: block ;
     } 
     }*/ }
  .container-megamenu.horizontal ul.megamenu .blog-item .sub-menu .content {
    padding: 30px 25px; }
  .container-megamenu.horizontal ul.megamenu .quicklink-menu {
    margin-left: -30px;
    margin-right: -30px; }
  .container-megamenu.horizontal ul.megamenu .quicklinks-menu {
    background-color: #ddd;
    display: inline-flex;
    width: 100%;
    padding: 25px 30px;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px; }
  .container-megamenu.horizontal ul.megamenu .quicklinks-menu ul li {
    float: left;
    line-height: 100%; }
    .container-megamenu.horizontal ul.megamenu .quicklinks-menu ul li span {
      /* [4] */
      /* [6] */
      /* [6] */
      /* [7] */
      font-size: 14px;
      font-size: 1.4rem;
      /* [8] */
      color: #222;
      font-weight: 700; }
    .container-megamenu.horizontal ul.megamenu .quicklinks-menu ul li a {
      margin-left: 5px; }

.filter-v3 .filter-shopby, .filter-v3 .filter-row {
  border: 1px solid #e6e6e6;
  padding: 0px; }

.filter-shopby .table_layout, .filter-row .table_layout {
  display: block; }
  .filter-shopby .table_cell, .filter-row .table_cell {
    margin-bottom: 10px;
    padding-bottom: 20px;
    border-bottom: #f1f1f1 1px solid;
    display: block; }
  .filter-shopby legend, .filter-row legend {
    border: none;
    font-size: 13px;
    margin: 0;
    text-transform: uppercase; }
  .filter-shopby .checkboxes_list > li:not(:last-child), .filter-row .checkboxes_list > li:not(:last-child), .filter-shopby .simple_vertical_list li:not(:last-child), .filter-row .simple_vertical_list li:not(:last-child) {
    margin-bottom: 5px; }
  .filter-shopby .color_btn, .filter-row .color_btn {
    position: relative;
    padding-left: 32px; }
  .filter-shopby .color_btn::before, .filter-row .color_btn::before {
    content: "";
    padding: 1px;
    background-clip: content-box;
    border: 1px solid #eaeaea;
    border-radius: 50%;
    -webkit-transition: border-color 0.3s ease;
    transition: border-color 0.3s ease; }
  .filter-shopby .color_btn.green::before, .filter-row .color_btn.green::before {
    background: #269300; }
  .filter-shopby .color_btn.yellow::before, .filter-row .color_btn.yellow::before {
    background: #fccd36; }
  .filter-shopby .color_btn.red::before, .filter-row .color_btn.red::before {
    background: #f00; }
  .filter-shopby .color_btn.blue::before, .filter-row .color_btn.blue::before {
    background: #018bc8; }
  .filter-shopby .color_btn.grey::before, .filter-row .color_btn.grey::before {
    background: #b2b2b2; }
  .filter-shopby .color_btn.orange::before, .filter-row .color_btn.orange::before {
    background: #ff7b1a; }
  .filter-shopby input[type="checkbox"]:checked + .color_btn::before, .filter-row input[type="checkbox"]:checked + .color_btn::before {
    border-color: #333; }

.filter-row {
  padding: 0; }
  .filter-row .table_layout {
    display: table;
    width: 100%;
    table-layout: fixed; }
  .filter-row .table_row {
    display: table;
    width: 100%; }
  .filter-row .table_cell {
    display: table-cell;
    border-right: 1px solid #e6e6e6;
    padding: 19px; }
  .filter-row .bottom_box {
    padding: 15px 19px; }

.ui-slider {
  height: 7px;
  background: #f8f8f8;
  border: 1px solid #eaeaea;
  max-width: 220px; }

.ui-slider .ui-slider-handle {
  display: block;
  width: 19px;
  height: 19px;
  background: #fff;
  border: 1px solid #eaeaea;
  cursor: pointer;
  top: -7px; }

.ui-slider .ui-slider-handle::before {
  content: "";
  display: block;
  width: 9px;
  height: 9px;
  background: #b2b2b2;
  position: absolute;
  top: 4px;
  left: 4px; }

.ui-slider .ui-slider-handle, .ui-slider .ui-slider-handle::before {
  border-radius: 50%; }

.range {
  margin-bottom: 15px; }

.range > * {
  display: inline; }

.checkboxes_list {
  color: #333; }

.simple_vertical_list input[type="radio"], .checkboxes_list input[type="radio"], .simple_vertical_list input[type="checkbox"], .checkboxes_list input[type="checkbox"] {
  display: none; }
  .simple_vertical_list input[type="radio"] + label, .checkboxes_list input[type="radio"] + label, .simple_vertical_list input[type="checkbox"] + label, .checkboxes_list input[type="checkbox"] + label {
    position: relative;
    width: auto;
    margin: 0 17px 0 0;
    padding-left: 32px;
    cursor: pointer;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    user-select: none; }
  .simple_vertical_list input[type="radio"] + label::before, .checkboxes_list input[type="radio"] + label::before, .simple_vertical_list input[type="checkbox"] + label::before, .checkboxes_list input[type="checkbox"] + label::before {
    content: "";
    display: block;
    text-align: center;
    font-family: 'FontAwesome';
    position: absolute;
    left: 0;
    top: -1px;
    width: 22px;
    height: 22px;
    color: inherit;
    background: #fff;
    border: 1px solid #eaeaea;
    border-radius: 3px; }
  .simple_vertical_list input[type="checkbox"] + label::before, .checkboxes_list input[type="checkbox"] + label::before {
    font-size: 12px; }
  .simple_vertical_list input[type="radio"] + label::before, .checkboxes_list input[type="radio"] + label::before {
    border-radius: 50%; }
  .simple_vertical_list input[type="radio"] + label:empty, .checkboxes_list input[type="radio"] + label:empty {
    width: 22px;
    padding-left: 0px;
    margin: 0px; }
  .simple_vertical_list input[type="checkbox"]:checked + label::before, .checkboxes_list input[type="checkbox"]:checked + label::before {
    content: '\f00c'; }
  .simple_vertical_list input[type="radio"]:checked + label::before, .checkboxes_list input[type="radio"]:checked + label::before {
    content: "\f10c"; }

.tags_cloud li {
  display: inline-block;
  margin: 0 4px 4px 0; }

.button_grey {
  padding: 6px 15px;
  display: inline-block;
  color: #555;
  background: #f1f1f1;
  text-transform: capitalize;
  border-radius: 3px;
  border: none; }
  .button_grey:hover {
    color: white;
    background: <?php echo $tema['t37'];?>; }

.button_submit {
  background: <?php echo $tema['t37'];?>;
  color: white;
  margin-right: 5px; }

@media (max-width: 767px) {
  .collapsed-block .tabBlockTitle {
    margin: 6px 0px;
    line-height: 20px; }
    .collapsed-block .tabBlockTitle .expander {
      margin: 0 10px;
      color: #333;
      font-size: 14px; }

  .collapsed-block .tabBlock {
    display: none; } }
/*============ MODULE TAGS ===================*/
.block-tags {
  margin-top: 20px; }
  .block-tags .so-popular-tag a {
    float: left;
    font-size: 13px;
    padding: 8px 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin: 0 5px 5px 0;
    line-height: 100%;
    background-color: #fff; }
  .block-tags .so-popular-tag a:hover {
    color: #fff;
    background-color: <?php echo $tema['t37'];?>;
    border-color: <?php echo $tema['t37'];?>; }
/*============MODULE CATEGORY ==================*/
.box-category ul {
  list-style: none;
  padding: 0px;
  margin: 0px; }

.box-category > ul {
  padding: 0; }
  .box-category > ul > li {
    margin: 0;
    padding: 0;
    border: none;
    position: relative;
    box-shadow: unset;
    border-radius: 0;
    border-bottom: 1px solid #ddd; }
  .box-category > ul > li > a {
    display: block;
    font-weight: 400;
    line-height: 100%;
    padding: 14px 47px 14px 15px;
    line-height: 100%;
    text-transform: capitalize;
    margin: 0; }
  .box-category > ul > li:last-child {
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border: none; }
  .box-category > ul > li:last-child > a {
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px; }
  .box-category > ul > li:hover > a {
    color: <?php echo $tema['t37'];?>; }
  .box-category > ul > li:hover .head a {
    color: #fff; }
  .box-category > ul > li ul {
    margin-left: 20px; }
  .box-category > ul > li a.accordion-toggle {
    width: 25px;
    height: 25px;
    line-height: 25px;
    background-color: #dbdbdb;
    color: #fff; }
  .box-category > ul > li a.accordion-toggle:hover {
    background-color: <?php echo $tema['t37'];?>; }

.box-category ul li a.active {
  color: <?php echo $tema['t37'];?>; }

.box-category ul li .head .show:before {
  content: "\f107";
  display: inline-block;
  font: normal normal normal 14px/1 'FontAwesome'; }

.box-category ul li .head .accordion-toggle:before {
  content: "\f105";
  font: normal normal normal 14px/1 'FontAwesome'; }

.box-category ul li .head {
  display: block;
  position: absolute;
  top: 8px;
  line-height: 20px;
  right: 15px;
  text-align: center; }
  .box-category ul li .head a:hover {
    color: #fff; }

.box-category ul li ul li {
  padding: 0px 0px 0px 5px; }

.box-category ul ul {
  margin-bottom: 20px; }

.box-category ul ul li a {
  padding: 3px 0; }

.box-category ul li ul li a:before {
  font-family: 'FontAwesome';
  transition: all 0.3s ease;
  content: "\f105";
  margin: 0 5px 0; }

.box-category ul li ul li a:hover:before {
  margin-right: 10px; }
/* ============== Page categories ============== */
.page-categories {
  margin-top: 30px; }
  .page-categories ul {
    margin: 0 -6px; }
  .page-categories ul li {
    float: left;
    padding: 0 6px; }
  .page-categories ul li .cate {
    text-align: center;
    margin-bottom: 30px; }
  .page-categories ul li .cate .cate-img {
    display: block;
    width: 100%;
    position: relative;
    margin-bottom: 7px; }
    .page-categories ul li .cate .cate-img:hover {
      opacity: 0.8; }
  .page-categories ul li .cate a {
    color: #000;
    font-size: 14px; }
    .page-categories ul li .cate a:hover {
      color: <?php echo $tema['t37'];?>; }
/*================ So Sticky ===============*/
@media (max-width: 1199px) {
  #content #so-groups {
    display: none; } }

#content #so-groups > a span {
  background-color: <?php echo $tema['t37'];?>; }
  #content #so-groups > a:hover {
    background-color: #cc4b00; }

#content .so-groups-sticky {
  background-color: <?php echo $tema['t37'];?>; }
  #content .so-groups-sticky.left {
    left: 0;
    right: auto; }
  #content .so-groups-sticky.right {
    right: 0;
    left: auto; }
  #content .so-groups-sticky .popup-header {
    padding: 25px 70px 25px 40px; }
  #content .so-groups-sticky .popup-header .popup-close {
    right: 20px;
    left: auto;
    color: #fff;
    font-size: 22px;
    opacity: 1; }
  #content .so-groups-sticky .product-thumb .button-group button, #content .so-groups-sticky .form-content .form-box #button-search {
    background-color: <?php echo $tema['t37'];?>; }
  #content .so-groups-sticky .product-thumb .button-group button:hover, #content .so-groups-sticky .form-content .form-box #button-search:hover {
    background-color: #cc4b00; }
  #content .so-groups-sticky .form-content .form-box .product-thumb .caption h4 a:hover {
    color: <?php echo $tema['t37'];?>; }
  #content .so-groups-sticky .form-content .form-box .price .price-new, #content .so-groups-sticky .form-content .form-box .price span.price {
    color: #222; }
  #content .so-groups-sticky .form-content .form-box .product-thumb .image .bt-sale, #content .so-groups-sticky .popup-header {
    background-color: <?php echo $tema['t37'];?>; }
  #content .so-groups-sticky .form-content .form-box .product-thumb .caption {
    height: auto;
    max-height: auto;
    min-height: auto; }
  #content .so-groups-sticky .popup-close, #content .so-groups-sticky .popup-close i.fa {
    font-size: 16px; }
  #content .so-groups-sticky .popup-header > span > i {
    margin-right: 10px;
    margin-left: auto; }
  #content .so-groups-sticky .nav-secondary ul li a:hover {
    color: <?php echo $tema['t37'];?>; }
  #content .so-groups-sticky .form-content .form-box input.field:hover, #content .so-groups-sticky .form-content .form-box select.field:hover {
    cursor: pointer; }

#so-groups .form-content .form-box a.account-url:hover .account-txt {
  color: #ff5c00; }

#so-groups .form-content .form-box input + i {
  font-size: 16px;
  margin-top: -9px; }
  #so-groups .form-content .form-box input + i:hover {
    color: <?php echo $tema['t37'];?>; }

#so-groups .form-content .form-box .product-thumb .caption h4 {
  margin-bottom: 0; }
  #so-groups .form-content .form-box .product-thumb .caption h4 a {
    font-weight: 400; }

#so-groups > a {
  position: relative;
  height: 43px; }
  #so-groups > a.sticky-backtop {
    border-bottom: none; }
  #so-groups > a span {
    background-color: <?php echo $tema['t37'];?>;
    color: #fff;
    display: inline-block;
    font-size: 14px;
    line-height: 22px;
    opacity: 0;
    padding: 10px;
    position: absolute;
    right: 100%;
    text-align: center;
    text-transform: capitalize;
    top: 0;
    transition: all 0.2s ease-in-out 0s;
    visibility: hidden;
    white-space: nowrap;
    width: auto; }
  #so-groups > a:hover span {
    opacity: 1;
    transition: all 0.2s ease-in-out 0s;
    visibility: visible;
    width: auto; }

.so-onepagecheckout .checkout-cart td.quantity .input-group {
  min-width: 95px; }

#so-groups .popup-content {
  max-height: 415px;
  overflow-y: scroll; }

#so-groups .cart-bottom p {
  display: inline-block;
  width: 100%;
  margin-bottom: 20px; }

#so-groups div.nav-secondary li span.nav-action i.fa {
  height: 47px;
  line-height: 47px; }

#content .so-onepagecheckout .secondary-title i.fa {
  margin-right: 10px;
  margin-left: auto;
  background-color: <?php echo $tema['t37'];?>; }

.so-onepagecheckout .price {
  font-size: 14px; }

body #sosearchpro .dropdown-menu .media-body .box-price .price-new {
  color: <?php echo $tema['t37'];?>; }
  body #sosearchpro .dropdown-menu .media-body .box-price .price {
    font-size: 13px;
    color: <?php echo $tema['t37'];?>; }
  body #sosearchpro .dropdown-menu .media-body .box-price span {
    font-weight: normal;
    font-size: 13px;
    color: #666; }
/*====== so countdown popup =====*/
#content #so_popup_countdown .modal-header {
  background-color: <?php echo $tema['t37'];?>; }
  #content #so_popup_countdown .modal-header .close {
    font-size: 23px;
    right: 15px;
    top: 33px; }

#so_popup_countdown .modal-footer #so_countdown_timer {
  top: 65px; }

@media (min-width: 1200px) {
    body #so_popup_countdown.modal.in .modal-dialog {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      height: auto;
      margin: 0 auto;
      transition: none; } }
  body #so_popup_countdown .modal-footer #so_countdown_timer {
    /*width: 56px;
     height: 56px;*/ }
  body #so_popup_countdown .modal-footer #so_countdown_timer .time-item {
    line-height: 18px;
    padding-top: 8px; }

#so_popup_countdown .list-cates {
  background: url(<?php echo $sitetemasi;?>/<?php echo $sitetemasi;?>/image/bg-popupc.jpg) no-repeat;
  background-size: 100%; }
  #so_popup_countdown .list-cates ul {
    width: 64%;
    /*float: $right;
     padding: side-values(40px 20px 0 0);*/
    float: right;
    padding: 40px 20px 0 0;
    text-align: center; }
  #so_popup_countdown .list-cates ul li {
    display: inline-block;
    margin: 0 14px;
    text-align: center; }
  #so_popup_countdown .list-cates ul li a {
    font-size: 14px;
    font-weight: 500; }
    #so_popup_countdown .list-cates ul li a .icon {
      width: 87px;
      height: 87px;
      background-color: #f7e7de;
      background-image: url(<?php echo $sitetemasi;?>/<?php echo $sitetemasi;?>/image/icon/css_sprites.png);
      background-repeat: no-repeat;
      border-radius: 50%;
      display: block;
      margin-bottom: 10px; }
    #so_popup_countdown .list-cates ul li a .icon.icon1 {
      background-position: -9px -9px; }
    #so_popup_countdown .list-cates ul li a .icon.icon2 {
      background-position: -9px -219px; }
    #so_popup_countdown .list-cates ul li a .icon.icon3 {
      background-position: -9px -429px; }
    #so_popup_countdown .list-cates ul li a .icon.icon4 {
      background-position: -9px -639px; }
    #so_popup_countdown .list-cates ul li a .icon.icon5 {
      background-position: -9px -849px; }
    #so_popup_countdown .list-cates ul li a .icon.icon6 {
      background-position: -9px -1059px; }
    #so_popup_countdown .list-cates ul li a .icon.icon7 {
      background-position: -9px -1269px; }
    #so_popup_countdown .list-cates ul li a:hover .icon {
      background-color: <?php echo $tema['t37'];?>; }
    #so_popup_countdown .list-cates ul li a:hover .icon.icon1 {
      background-position: -9px -114px; }
    #so_popup_countdown .list-cates ul li a:hover .icon.icon2 {
      background-position: -9px -324px; }
    #so_popup_countdown .list-cates ul li a:hover .icon.icon3 {
      background-position: -9px -534px; }
    #so_popup_countdown .list-cates ul li a:hover .icon.icon4 {
      background-position: -9px -744px; }
    #so_popup_countdown .list-cates ul li a:hover .icon.icon5 {
      background-position: -9px -954px; }
    #so_popup_countdown .list-cates ul li a:hover .icon.icon6 {
      background-position: -9px -1164px; }
    #so_popup_countdown .list-cates ul li a:hover .icon.icon7 {
      background-position: -9px -1374px; }
  #so_popup_countdown .list-cates ul li.item5, #so_popup_countdown .list-cates ul li.item6, #so_popup_countdown .list-cates ul li.item7 {
    margin-top: 25px; }
  #so_popup_countdown .list-cates .customer {
    display: inline-block;
    width: 100%;
    border-top: 1px solid rgba(0, 0, 0, 0.04);
    font-size: 14px;
    font-weight: 500;
    margin-top: 18px;
    padding: 12px 40px 12px 50%; }
  #so_popup_countdown .list-cates .customer a {
    color: <?php echo $tema['t37'];?>; }
  #so_popup_countdown .list-cates .customer a:hover {
    color: #cc4b00; }

.hidden-popup-countdown {
  overflow: visible; }
  .hidden-popup-countdown #so_popup_countdown {
    display: none; }

.hidden-popup-countdown .modal-backdrop {
  display: none; }

.hidden-popup-countdown.modal-open .modal-backdrop:first-child {
  display: none; }

.hidden-popup-countdown.modal-open .modal-backdrop {
  display: block; }

body .mfp-close-btn-in .mfp-close {
  right: 0;
  left: auto;
  margin: 0;
  color: #222; }
  body .mfp-close-btn-in .mfp-close:hover {
    color: <?php echo $tema['t37'];?>; }

#product-quick .owl2-carousel .owl2-stage-outer {
  direction: ltr; }

.so-fb-message-style-default .so-fb-message-head {
  height: 30px;
  line-height: 30px;
  padding: 0 5px; }

.quickview-w.product-view .content-product-left, .quickview-w.product-view .content-product-right {
  width: 50%; }
  .quickview-w.product-view .content-product-left.class-honizol .thumb-video {
    display: none; }

.so-onepagecheckout .panel-default {
  display: inline-block;
  width: 100%; }
/*===============================================
 [SASS DIRECTORY ]
 [1] SO LATSET BLOG
 [2] SIMPLE BLOG
 [3] ARTICLE INFO
 ==============================================*/
/*============SO LATSET BLOG ==================*/
/*============ SIMPLE BLOG ==================*/
.blog-category .modcontent {
  padding: 0; }
  .blog-category .modcontent ul li {
    border: none; }
  .blog-category .filters-panel .list-view button.btn {
    color: #fff; }

.blog-header {
  margin: 0 0 20px; }
  .blog-header h3 {
    font-weight: bold;
    text-transform: uppercase;
    margin: 0 0 5px;
    /* [4] */
    /* [6] */
    /* [6] */
    /* [7] */
    font-size: 16px;
    font-size: 1.6rem;
    /* [8] */
    color: #555; }

.blog-cate ul {
  margin-bottom: 0;
  padding: 10px 0; }
  .blog-cate ul li.list-group-item {
    border: none;
    padding: 5px 15px; }

.blog-listitem .blog-item .blog-item-inner {
  display: block;
  margin-bottom: 30px;
  transition: all 0.2s; }
  .blog-listitem .blog-item .blog-item-inner:hover .blog-content h4 > a {
    color: <?php echo $tema['t37'];?>; }
  .blog-listitem .blog-item .blog-item-inner .itemBlogContent {
    padding: 0; }
  .blog-listitem .blog-item .blog-item-inner .article-image {
    position: relative; }
  .blog-listitem .blog-item .blog-item-inner .article-image:before {
    content: '';
    width: 0;
    height: 0;
    border-bottom: 85px solid transparent;
    top: 0;
    position: absolute;
    z-index: 2;
    border-left: 80px solid #fff;
    left: 0; }
  .blog-listitem .blog-item .blog-item-inner .article-image .article-date {
    position: absolute;
    z-index: 2;
    top: 2px;
    left: 3px;
    line-height: 20px; }
    .blog-listitem .blog-item .blog-item-inner .article-image .article-date .date {
      font-size: 14px;
      color: #909090;
      display: block; }
    .blog-listitem .blog-item .blog-item-inner .article-image .article-date .date b {
      font-size: 24px;
      color: #909090;
      display: block; }
  .blog-listitem .blog-item .blog-item-inner .article-image:hover img {
    opacity: 0.8;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s; }
  .blog-listitem .blog-item .blog-item-inner .itemBlogContent {
    padding: 15px; }
  .blog-listitem .blog-item .blog-item-inner .blog-meta {
    display: inline-block;
    padding: 0px 0 10px;
    border-bottom: 1px solid #ebebeb;
    vertical-align: top;
    width: 100%;
    font-size: 13px; }
  .blog-listitem .blog-item .blog-item-inner .author, .blog-listitem .blog-item .blog-item-inner .comment_count, .blog-listitem .blog-item .blog-item-inner .blog-date {
    color: #b3b3b3;
    display: inline-block;
    margin-right: 15px; }
  .blog-listitem .blog-item .blog-item-inner .author i, .blog-listitem .blog-item .blog-item-inner .comment_count i, .blog-listitem .blog-item .blog-item-inner .blog-date i {
    margin-right: 8px; }
  .blog-listitem .blog-item .blog-item-inner .author a, .blog-listitem .blog-item .blog-item-inner .comment_count a, .blog-listitem .blog-item .blog-item-inner .blog-date a {
    color: #b3b3b3; }
  .blog-listitem .blog-item .blog-item-inner .blog-content {
    clear: both;
    display: inline-block;
    width: 100%; }
  .blog-listitem .blog-item .blog-item-inner .blog-content h4 {
    margin-bottom: 10px;
    font-size: 15px;
    font-weight: 600;
    line-height: 24px; }
  .blog-listitem .blog-item .blog-item-inner .blog-content .article-description {
    margin: 5px 0 15px 0; }
  .blog-listitem .blog-item .blog-item-inner .blog-content .readmore {
    font-size: 14px;
    margin-top: 10px; }
    .blog-listitem .blog-item .blog-item-inner .blog-content .readmore .fa {
      margin-right: 8px; }
    .blog-listitem .blog-item .blog-item-inner .blog-content .readmore > a {
      color: <?php echo $tema['t37'];?>; }
  .blog-listitem .blog-grid-1 .blog-item-inner .itemBlogImg {
    width: 320px;
    margin: 0 15px 0 0;
    float: left; }
  @media (max-width: 767px) {
        .blog-listitem .blog-grid-1 .blog-item-inner .itemBlogImg {
          width: auto; } }
  .blog-listitem .blog-grid-1 .blog-item-inner .itemBlogContent {
    width: auto;
    float: none;
    overflow: hidden;
    clear: none;
    padding: 0; }
  @media (max-width: 767px) {
        .blog-listitem .blog-grid-1 .blog-item-inner .itemBlogContent {
          float: left;
          margin-top: 15px; } }
  @media (min-width: 1200px) {
    .blog-listitem .blog-grid-2:nth-child(2n+1) {
      clear: both; } }
  .blog-listitem .blog-grid-2 .blog-item-inner {
    background: none;
    box-shadow: none; }
  .blog-listitem .blog-grid-2 .blog-item-inner .itemBlogContent {
    padding: 10px 0; }
  .blog-listitem .blog-grid-2 .article-description {
    display: none; }
  @media (min-width: 1200px) {
    .blog-listitem .blog-grid-3:nth-child(3n+1) {
      clear: both; } }
  .blog-listitem .blog-grid-3 .blog-item-inner {
    background: none;
    box-shadow: none; }
  .blog-listitem .blog-grid-3 .blog-item-inner .itemBlogContent {
    padding: 10px 0; }
  .blog-listitem .blog-grid-3 .article-description {
    display: none; }
  @media (min-width: 1200px) {
    .blog-listitem .blog-grid-4:nth-child(4n+1) {
      clear: both; } }
  .blog-listitem .blog-grid-4 .article-description {
    display: none; }
  .blog-listitem .blog-list .blog-item-inner {
    padding: 0px;
    background: none;
    margin-bottom: 35px; }
  .blog-listitem .blog-list .blog-item-inner .itemBlogImg {
    margin-bottom: 15px; }
  .blog-listitem .blog-list .blog-item-inner .itemBlogContent {
    padding: 0; }
/*============ARTICLE INFO==================*/
div.article-info .article-title h3 {
  font-size: 20px;
  text-transform: uppercase;
  color: #555;
  font-weight: bold;
  margin-bottom: 5px; }
  div.article-info .article-sub-title {
    display: inline-block;
    width: 100%;
    margin-bottom: 10px; }
  div.article-info .article-sub-title span {
    display: block;
    float: left;
    color: #999;
    padding: 0 10px;
    font-size: 13px; }
  div.article-info .article-sub-title span.article-author {
    padding-left: 0; }
  div.article-info .article-sub-title span.article-author a {
    color: #999;
    font-size: 13px; }
    div.article-info .article-sub-title span.article-author a:hover {
      color: <?php echo $tema['t37'];?>; }
  div.article-info .article-sub-title span.article-comment {
    border-right: 0; }
  div.article-info .article-sub-title .article-share {
    display: none; }
  div.article-info .article-image {
    margin-bottom: 30px; }
  div.article-info .article-description {
    margin-bottom: 30px; }
  div.article-info .related-comment {
    border-radius: 0;
    border: 0;
    border-top: 1px solid #e6e6e6;
    padding-top: 40px;
    box-shadow: none;
    margin-top: 40px; }
  div.article-info .related-comment .article-reply {
    border: none;
    background: #f9f9f9; }
  div.article-info .related-comment .article-reply .author {
    font-weight: bold;
    font-size: 16px; }
  div.article-info .related-comment .article-reply .article-reply {
    background: #f4f3f3; }
  div.article-info .related-comment .panel-body {
    padding: 0;
    border: 0; }
  div.article-info .related-comment .panel-body .form-group #comments {
    padding: 0;
    border: 0;
    overflow: hidden; }
  div.article-info .related-comment .panel-body .form-group #comments h2#review-title {
    margin: 0 0 30px;
    padding: 0;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 18px;
    color: #121212; }
  @media (min-width: 992px) {
      div.article-info .related-comment #button-comment {
        padding: 10px 52px; } }
  div.article-info .panel-default {
    border-radius: 0;
    clear: both; }
  div.article-info .itemFullText {
    text-align: justify; }

.panel--related img {
  transition: 0.3s all ease-in-out; }
  .panel--related .img-responsive:hover {
    opacity: 0.8; }
  .panel--related .caption h4 {
    font-size: 14px;
    margin: 10px 0; }

.article--style1 .article-info .article-image {
  width: 50%;
  margin-right: 30px;
  float: left; }

.article--style2 .article--mainimage {
  position: relative;
  z-index: 1;
  margin-bottom: 30px; }
  .article--style2 .article--maintitle {
    position: absolute;
    bottom: 0;
    z-index: 5;
    width: 100%;
    padding: 10px 15px;
    color: #f3f3f3;
    background: -webkit-linear-gradient(left, #111 0%, rgba(255, 255, 255, 0) 100%);
    /* Chrome10-25,Safari5.1-6 */
    background: -moz-linear-gradient(left, #111 0%, rgba(255, 255, 255, 0) 100%);
    /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #111 0%, rgba(255, 255, 255, 0) 100%);
    /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #111 0%, rgba(255, 255, 255, 0) 100%);
    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#00ffffff',GradientType=1);
    /* IE6-9 */ }
  .article--style2 .article--maintitle .article-title {
    text-transform: uppercase; }
  .article--style2 .article--maintitle h3 {
    margin-bottom: 5px;
    font-size: 21px; }

.article--style3 .article--mainimage {
  position: relative;
  z-index: 1;
  margin-bottom: 30px; }
  .article--style3 .article--maintitle .article-title {
    text-transform: uppercase; }
  .article--style3 .article--maintitle h3 {
    margin-bottom: 5px; }

.article--style4 .article--maincontent {
  padding: 20px;
  position: relative;
  z-index: 2;
  margin-top: -100px;
  background: #fff; }

.article--style5 .article--mainimage {
  position: relative;
  z-index: 1;
  margin-bottom: 30px; }
  .article--style5 .article--maintitle {
    position: absolute;
    z-index: 5;
    transform: translateY(-130%);
    width: 1170px; }
  .article--style5 .article--maintitle h3 {
    margin-bottom: 0; }
  .article--style5 .article--maintitle .article-title {
    text-transform: uppercase;
    bottom: 0;
    z-index: 5;
    display: block;
    background: rgba(0, 0, 0, 0.6);
    padding: 10px;
    color: #f3f3f3;
    margin-bottom: 10px; }
  .article--style5 .article--maintitle .article-sub-title {
    bottom: 0;
    z-index: 5;
    display: inline-block;
    background: rgba(0, 0, 0, 0.6);
    min-width: 45%;
    padding: 10px;
    color: #f3f3f3; }
  .article--style5 .article--maintitle .article-title, .article--style5 .article--maintitle .article-sub-title {
    background: -webkit-linear-gradient(left, #111 0%, rgba(255, 255, 255, 0) 100%);
    /* Chrome10-25,Safari5.1-6 */
    background: -moz-linear-gradient(left, #111 0%, rgba(255, 255, 255, 0) 100%);
    /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #111 0%, rgba(255, 255, 255, 0) 100%);
    /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #111 0%, rgba(255, 255, 255, 0) 100%);
    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#00ffffff',GradientType=1);
    /* IE6-9 */ }
/*============ARTICLE COMMENTS==================*/
.comments {
  margin-bottom: 30px; }

.comments.comments-level-1 {
  margin-left: 136px; }

.comments .pull-left {
  width: 100px;
  height: 100px;
  display: block;
  background-color: #f5f5f5;
  margin-right: 30px;
  position: relative;
  padding: 0; }

.comments .pull-left .fa {
  font-size: 46px;
  display: block;
  text-align: center;
  margin: 25px 0; }

.comments .pull-left img {
  width: 100%;
  height: auto;
  position: relative;
  z-index: 2; }

.comments .pull-left span {
  position: absolute;
  display: inline-block;
  top: 15%; }

.comments .media-body .media-title {
  color: #1fc0a0;
  padding-bottom: 14px; }

.comments .media-body .media-title .username {
  font-size: 18px;
  font-style: italic;
  font-family: Georgia, sans-serif;
  display: inline-block;
  margin-right: 14px; }

.comments .media-body .media-title .time {
  font-size: 16px; }

.comments .media-body .media-title .time .fa {
  font-size: 20px;
  margin-right: 13px;
  position: relative;
  top: 3px; }

.comments .media-body .media-title .link:hover {
  text-decoration: none; }

@media (max-width: 745px) {
  .comments {
    margin-bottom: 28px; }

  .comments.comments-level-1 {
    margin-left: 70px; }

  .comments .pull-left {
    width: 70px;
    height: 70px;
    margin-right: 20px; }

  .comments .pull-left:before {
    font-size: 46px;
    line-height: 1em;
    top: 10px; }

  .comments .media-body .media-title time {
    display: block; }

  .comments .media-body .media-title time .icon {
    font-size: 20px;
    margin: 0 6px 0 0;
    position: relative;
    top: 3px; } }
/*****************************************************************************
 ******                     SO Framework: Sass Garenal                   ******
 ******************************************************************************/
.wrapper-boxed .typeheader-2.navbar-compact, .wrapper-boxed .typeheader-4.navbar-compact, .wrapper-boxed .typeheader-1.navbar-compact {
  width: 100%;
  max-width: 1650px; }

.clearfix {
  clear: both; }
/*================ Layout Type  ===================*/
@media (min-width: 1200px) {
  body.layout-2 .container, body.layout-1 .container {
    max-width: 1650px;
    padding: 0;
    width: 95%; }
    body.layout-2 .col-md-3.content-aside, body.layout-1 .col-md-3.content-aside {
      width: 16.66667%; }
    body.layout-2 #content.col-sm-9, body.layout-1 #content.col-sm-9, body.layout-2 #content.col-md-9, body.layout-1 #content.col-md-9 {
      width: 83.33333%; }

  body.layout-2 .wrapper-boxed, body.layout-1 .wrapper-boxed, body.layout-2 .wrapper-iframed, body.layout-1 .wrapper-iframed, body.layout-2 .wrapper-rounded, body.layout-1 .wrapper-rounded {
    max-width: 1650px; }
    body.layout-2 .wrapper-boxed .container, body.layout-1 .wrapper-boxed .container, body.layout-2 .wrapper-iframed .container, body.layout-1 .wrapper-iframed .container, body.layout-2 .wrapper-rounded .container, body.layout-1 .wrapper-rounded .container {
      width: 95%; } }

@media (min-width: 1200px) and (max-width: 1650px) {
  body.layout-2 .main-left, body.layout-1 .main-left, body.layout-2 .col-md-3.content-aside, body.layout-1 .col-md-3.content-aside {
    width: 21%; }
    body.layout-2 .main-right, body.layout-1 .main-right, body.layout-2 #content.col-sm-9, body.layout-1 #content.col-sm-9, body.layout-2 #content.col-md-9, body.layout-1 #content.col-md-9 {
      width: 79%; } }
/* 2. STYLE OWL
 ------------------------------*/
/* 3. STYLE ALL SITE
 -------------------------------*/
body {
  color: #666;
  font-size: 15px;
  line-height: 23px; }

header .h1, footer .h1, header .h2, footer .h2, header .h3, footer .h3, header .h4, footer .h4, header .h5, footer .h5, header .h6, footer .h6, header h1, footer h1, header h2, footer h2, header h3, footer h3, header h4, footer h4, header h5, footer h5, header h6, footer h6 {
  margin: 0; }

.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1; }
/* Override the bootstrap defaults */
h1 {
  font-size: 25px; }

h2 {
  font-size: 20px; }

h3 {
  font-size: 18px; }

h4 {
  font-size: 15px; }

h5 {
  font-size: 12px; }

h6 {
  font-size: 10.2px; }

ul, ul li, ul.menu, ul.blank, .category-style .list-group, .category-style .list-group > li ul, .filter-shopby .checkboxes_list, .filter-shopby .simple_vertical_list, .tags_cloud, .our-member .respl-item .info-member ul, .why-list, ul.contact-address, ul.product-options {
  list-style: none;
  padding: 0; }

option {
  padding: 2px 5px;
  border-width: 1px; }

.alert ol li {
  list-style-type: decimal;
  margin: 0 0 5px 15px; }

img {
  max-width: 100%; }

.align-center {
  display: table;
  margin: 0 auto; }

.text-danger {
  color: #fff;
  display: inline-block;
  background-color: #a94442;
  padding: 0 5px;
  margin: 5px 0;
  border-radius: 3px;
  font-size: 11px; }

a, .btn-link {
  color: #555;
  transition: color 0.3s ease-in-out; }
  a:hover, .btn-link:hover {
    color: <?php echo $tema['t37'];?>;
    text-decoration: none; }

a, a:visited, a:active, a:link, a:focus {
  cursor: pointer;
  text-decoration: none;
  outline: none; }

ul, ol {
  margin: 0; }

.btn.active, .btn:active {
  box-shadow: none !important; }

.input-group-btn > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

ol {
  counter-reset: item;
  list-style-type: none;
  margin: 0 0 0 15px; }

em {
  font-style: normal; }

.fancybox-outer, .fancybox-inner {
  text-align: center; }
  .fancybox-outer .wishlist_product_view, .fancybox-inner .wishlist_product_view {
    margin-bottom: 15px; }

.list-inline {
  display: inline-block; }

.zoomContainer {
  overflow: hidden; }

.img-thumbnail.pull-left {
  margin-right: 30px; }
  .img-thumbnail.pull-right {
    margin-left: 30px; }

.selector {
  display: inline-block;
  position: relative;
  height: 30px;
  padding-right: 30px; }
  .selector span {
    display: none; }
  .selector select {
    position: absolute;
    height: 100%;
    width: 100%;
    border-radius: 0;
    box-shadow: none;
    top: 0px;
    left: 0px;
    font-size: 13px;
    color: #999;
    padding: 5px 7px;
    border: solid 1px #e6e6e6; }
  .selector select:focus {
    box-shadow: none;
    outline: none;
    border-color: #e6e6e6; }
  .selector:after {
    content: "\f0d7";
    margin: 0;
    height: 28px;
    width: 28px;
    text-align: center;
    color: #666;
    position: absolute;
    top: 1px;
    right: 1px;
    background: #fff;
    pointer-events: none;
    line-height: 25px;
    font-size: 12px; }

.margin-zero {
  margin: 0; }

.col-xs-15, .col-sm-15, .col-md-15, .col-lg-15 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px; }

.col-xs-15 {
  width: 20%;
  float: left; }

@media (min-width: 768px) {
  .col-sm-15 {
    width: 20%;
    float: left; } }

@media (min-width: 992px) {
  .col-md-15 {
    width: 20%;
    float: left; } }

@media (min-width: 1200px) {
  .col-lg-15 {
    width: 20%;
    float: left; } }
/* 4. FORM
 -----------------------------------------------------------------*/
.clearfix {
  clear: both; }

.inline {
  display: inline-block; }

legend {
  font-size: 18px;
  padding: 7px 0px; }

label {
  font-size: 14px;
  font-weight: normal; }

.input-group .input-group-addon {
  font-size: 12px;
  height: 30px; }

.dropdown-menu {
  font-size: inherit; }

.btn {
  border-radius: 0; }

.btn-default.active, .btn-default.focus, .btn-default:active, .btn-default:focus, .btn-default:hover, .open > .dropdown-toggle.btn-default {
  background: <?php echo $tema['t37'];?>;
  border-color: <?php echo $tema['t37'];?>;
  color: white; }

.buttonGray {
  padding: 9px 20px;
  background: #555;
  color: #fff;
  border-radius: 3px;
  border: none; }
  .buttonGray:hover {
    background: <?php echo $tema['t37'];?>;
    border-color: <?php echo $tema['t37'];?>;
    color: #fff; }

.submit {
  margin: 1em 0; }

select, textarea {
  color: #666; }

select {
  box-shadow: none;
  padding-left: 5px;
  -webkit-box-shadow: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background: url("<?php echo $sitetemasi;?>/image/icons/bg-selectbox.png") no-repeat right center #fff; }

textarea {
  height: auto;
  resize: none; }

.alert-danger, .alert-success {
  display: inline-block;
  width: 100%;
  border-radius: 0; }

.filter_group input {
  display: none; }

.filter_group [type=checkbox] + span:before {
  content: "\f00c";
  font-family: FontAwesome;
  width: 18px;
  padding-left: 2px;
  line-height: 16px;
  height: 18px;
  border: 1px solid #ddd;
  border-radius: 3px;
  position: absolute;
  top: 3px;
  left: 0;
  font-size: 12px;
  color: #fff; }

.filter_group [type=checkbox]:checked + span:before {
  color: #333; }
/* 4. Dropdown
 -----------------------------------------------------------------*/
.shopping_cart .btn-shopping-cart .checkout {
  padding: 10px 20px; }
  .shopping_cart .dropdown-menu .content-item {
    max-height: 245px;
    overflow: auto; }
  .shopping_cart .btn-shopping-cart .added_items {
    color: #222; }

.header-top-right .top-link > li {
  position: relative; }

header .account.open .dropdown-menu, header .account:hover .dropdown-menu {
  opacity: 1;
  visibility: visible;
  display: block !important; }

header .dropdown-menu {
  padding: 10px 20px;
  margin: 0;
  min-width: 120px;
  box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.2);
  right: 0;
  left: auto;
  border-radius: 0; }
  @media (min-width: 1200px) {
  header .dropdown-menu {
    -webkit-transform-origin: top center;
    transform-origin: top center;
    -webkit-transform: rotateX(-70deg);
    transform: rotateX(-70deg);
    transition: transform 0.4s ease 0s, opacity 0.2s ease 0s, visibility 0.2s ease 0s;
    opacity: 0;
    visibility: hidden;
    display: block; } }
  header .dropdown-menu > li .btn-block {
    padding: 5px 0;
    line-height: 22px;
    color: #555; }
  header .dropdown-menu > li .btn-block:hover {
    color: <?php echo $tema['t37'];?>; }
  header .dropdown-menu > li:hover button {
    color: <?php echo $tema['t37'];?>; }
  header .dropdown-menu .btn-block {
    border: none;
    background: transparent;
    text-align: left; }

.dropdown-menu > li > a {
  padding: 5px 0px;
  line-height: 22px;
  color: #555; }
  .dropdown-menu > li > a:hover {
    color: <?php echo $tema['t37'];?>; }

.btn-group .btn-link {
  text-align: left;
  background: transparent;
  text-decoration: none;
  padding: 5px 10px;
  color: #666;
  font-weight: normal;
  color: #555;
  position: relative;
  z-index: 1; }
  .btn-group .btn-link:hover {
    color: <?php echo $tema['t37'];?>; }

.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
  background: transparent; }

.nav-header {
  color: #667280; }

@media (min-width: 1199px) {
  header .header-top .top-link > li:hover .dropdown-menu, header .btn-group:hover .dropdown-menu, header .dropdown:hover .dropdown-menu, header .btn-shopping-cart:hover .dropdown-menu {
    opacity: 1;
    -webkit-transform: rotateX(0deg);
    transform: rotateX(0deg);
    visibility: visible; } }

@media (max-width: 1024px) {
  header .open > .dropdown-menu {
    margin-top: 0;
    opacity: 1;
    filter: alpha(opacity=100);
    visibility: visible; } }

.size-img-cart {
  width: 80px; }

#cart .dropdown-menu {
  margin-right: 15px;
  padding: 0; }
  #cart .dropdown-menu:after {
    left: auto;
    right: 49px; }
/* 5. TABLE
 -----------------------------------------------------*/
.table thead > tr > th {
  background: #eee; }

table.std th, table.std td {
  vertical-align: middle;
  border: 1px;
  padding: 10px;
  text-align: center; }

table.std th {
  white-space: nowrap;
  background: #f5f5f5; }

table.std tfoot td {
  color: #333;
  text-align: right;
  white-space: nowrap; }

table.std {
  background: #fdfdfd;
  border-spacing: 0;
  vertical-align: middle;
  border: 1px;
  width: 100%; }

table th {
  border: 1px;
  color: #7a7a7a;
  font-size: 13px;
  font-weight: bold;
  padding: 10px;
  text-align: center;
  vertical-align: middle;
  text-transform: uppercase; }

.delivery_option table td {
  text-align: center; }

table tfoot td {
  text-align: right; }

table.table-bordered thead > * {
  background-color: rgba(51, 51, 51, 0.1);
  font-weight: bold; }

.no-margin {
  margin: 0 !important; }

.no-margin-bottom {
  margin-bottom: 0 !important; }

.sidebar-menu .box-category-menu {
  z-index: 2; }

.label-mega {
  background: #ee3b27; }

.carousel-inner > .item > a > img, .carousel-inner > .item > img, .img-responsive, .thumbnail a > img, .thumbnail > img {
  margin: 0 auto; }

#button-review {
  margin-top: 12px;
  padding: 7px 12px;
  margin-right: 10px;
  background: gray;
  color: #fff;
  text-transform: capitalize;
  border-radius: 0;
  border-color: gray; }
  #button-review:hover {
    background: <?php echo $tema['t37'];?>;
    border-color: <?php echo $tema['t37'];?>; }

.product-search .checkbox-inline {
  display: block; }
/*  +----------------------------------------------------+
 TABLE OF CONTENTS
 +----------------------------------------------------+
 [1]   Page Faq
 [2]   Page About us
 [3]   Page Contact
 [4]   page 404 
 */
#map-canvas {
  height: 600px; }

body.layout-1 .container.banners-demo-w {
  max-width: 1170px;
  width: 100%; }

ul.yt-accordion {
  margin: 0;
  padding: 0;
  list-style: none; }

ul.yt-accordion li.accordion-group {
  margin-bottom: 1px; }
  ul.yt-accordion li.accordion-group h3.accordion-heading {
    margin: 0;
    cursor: pointer;
    background-color: #f4f4f4;
    position: relative;
    z-index: 2; }
  ul.yt-accordion li.accordion-group h3.accordion-heading span {
    padding: 10px;
    font-size: 16px;
    display: block;
    margin-left: 40px;
    line-height: 24px; }
  ul.yt-accordion li.accordion-group h3.accordion-heading .fa {
    margin: 0px;
    font-family: verdana;
    font-size: 17px;
    width: 40px;
    background: #a0a0a0;
    color: white;
    text-align: center;
    line-height: 40px;
    vertical-align: top;
    position: absolute;
    z-index: 5;
    top: 0;
    bottom: 0; }
  ul.yt-accordion li.accordion-group .accordion-inner {
    border: 1px solid #f4f4f4;
    padding: 10px 15px;
    background: #e6e6e3; }

ul.yt-accordion li.accordion-group h3.accordion-heading .fa-plus-square:before {
  content: "+"; }

ul.yt-accordion li.accordion-group h3.accordion-heading.active .fa-plus-square:before {
  content: "-"; }

ul.yt-accordion li.accordion-group h3.accordion-heading:hover {
  color: white;
  background: #8e8e8e; }

ul.yt-accordion li.accordion-group h3.accordion-heading:hover .fa {
  background: #666; }
/*============ PAGE ABOUT US 1==============*/
.item-article h2 {
  margin: 0; }

.title-about-us {
  background: url("<?php echo $sitetemasi;?>/image/icon/bg-title-about.png") repeat-x left 12px;
  margin-bottom: 17px; }

.title-about-us h2 {
  background: #fff;
  display: inline-block;
  font-size: 22px;
  padding: 0 25px 6px 0;
  font-weight: 300;
  color: #333; }

.welcome-about-us .image-about-us {
  float: left;
  width: 270px;
  padding-top: 6px; }
  .welcome-about-us img:hover {
    opacity: 0.7; }
  .welcome-about-us .des-about-us {
    margin-left: 300px;
    line-height: 18px; }

.our-member {
  clear: both;
  padding-top: 30px; }
  .our-member img:hover {
    opacity: 0.7; }
  .our-member .title-about-us {
    background: url("<?php echo $sitetemasi;?>/image/icon/bg-title-about.png") repeat-x left 12px;
    margin-bottom: 17px;
    text-align: center; }
  .our-member .title-about-us h2 {
    padding: 0 15px 6px 15px;
    font-size: 22px;
    font-weight: 300;
    color: #333; }
  .our-member .short-des {
    text-align: center;
    color: #909090;
    margin-bottom: 35px; }
  .our-member .overflow-owl-slider {
    padding-top: 50px; }
  .our-member .respl-item {
    border: 1px solid #ddd;
    margin-bottom: 30px; }
  .our-member .respl-item .item-inner {
    padding: 20px;
    display: inline-block; }
  .our-member .respl-item .w-image-box {
    float: left;
    overflow: hidden; }
  .our-member .respl-item .info-member {
    text-align: left;
    margin-left: 185px; }
  .our-member .respl-item .info-member .cl-name {
    margin-top: 0; }
  .our-member .respl-item .info-member li {
    float: left; }
  .our-member .respl-item .info-member li .fa {
    width: 29px;
    height: 29px;
    border: 1px solid #999;
    line-height: 27px;
    text-align: center;
    color: #999;
    border-radius: 50%;
    margin-right: 5px;
    display: inline-block; }
    .our-member .respl-item .info-member li .fa:hover {
      color: <?php echo $tema['t37'];?>;
      border-color: <?php echo $tema['t37'];?>; }
  .our-member .respl-item .info-member li .fa-f:before {
    content: "\f09a";
    font-family: FontAwesome; }
  .our-member .respl-item .info-member li .fa-t:before {
    content: "\f099";
    font-family: FontAwesome; }
  .our-member .respl-item .info-member li .fa-s:before {
    content: "\f17e";
    font-family: FontAwesome; }
  .our-member .respl-item .info-member li .fa-g:before {
    content: "\f0d5";
    font-family: FontAwesome; }
  .our-member .respl-item .info-member .cl-name > a {
    font-size: 15px;
    text-transform: uppercase;
    font-weight: bold;
    color: #444; }
  .our-member .respl-item .info-member .cl-name > a:hover {
    color: <?php echo $tema['t37'];?>; }
  .our-member .respl-item .info-member .cl-job {
    padding: 5px 0px;
    text-transform: uppercase; }
  .our-member .respl-item .info-member .cl-des {
    color: #909090;
    margin-bottom: 15px; }

.why-list li {
  position: relative;
  padding-left: 29px; }
  .why-list li:before {
    content: "";
    width: 14px;
    height: 12px;
    display: inline-block;
    position: absolute;
    left: 0px;
    top: 10px;
    background-repeat: no-repeat;
    background-position: top left;
    background-image: url("<?php echo $sitetemasi;?>/image/icon/icon-whylist.png"); }
  .why-list li a {
    display: block;
    padding: 5px 0 7px;
    background-image: url("<?php echo $sitetemasi;?>/image/icon/border-bottom-bs.png") repeat-x left bottom; }
  .why-list li:last-child > a {
    background: none; }

.happy-about-us {
  direction: ltr;
  clear: both;
  padding-top: 10px; }
  .happy-about-us .happy-ab {
    border: 1px solid #e9e9e9;
    padding: 33px 8px 20px; }
  .happy-about-us .happy-ab .title-happy-about {
    background: #fff;
    display: inline-block;
    left: 20px;
    padding: 5px 10px;
    position: absolute;
    top: -5px; }
  .happy-about-us .happy-ab .title-happy-about h2 {
    font-size: 20px;
    position: relative;
    top: -2px;
    color: #444;
    margin: 0; }
  .happy-about-us .happy-ab .ct-why {
    padding: 0 10px 0 25px;
    position: relative; }
  .happy-about-us .happy-ab .ct-why .client-say {
    font-size: 107.69%;
    color: #909090;
    margin-bottom: 10px; }
  .happy-about-us .happy-ab .ct-why .client-info-about {
    color: #000; }
  .happy-about-us .happy-ab .ct-why .client-info-about .name {
    font-size: 18px;
    color: <?php echo $tema['t37'];?>; }
  .happy-about-us .owl2-controls {
    background: #fff;
    padding: 0 5px;
    position: absolute;
    right: 2px;
    top: -47px; }
  .happy-about-us .owl2-controls .owl2-prev, .happy-about-us .owl2-controls .owl2-next {
    border: none;
    display: inline-block;
    width: 26px;
    height: 26px;
    background-position: left top;
    background-repeat: no-repeat;
    overflow: hidden;
    text-indent: -9999px;
    background-color: transparent;
    top: 0px;
    margin: 0 3px;
    position: relative; }
  .happy-about-us .owl2-controls .owl2-prev {
    background-image: url("<?php echo $sitetemasi;?>/image/icon/btn-prev-hp.png");
    margin-right: 3px;
    right: 0px;
    left: inherit; }
  .happy-about-us .owl2-controls .owl2-nav {
    width: 68px;
    display: inline-block;
    height: 26px;
    background: #fff; }
  .happy-about-us .owl2-controls .owl2-next {
    background-image: url("<?php echo $sitetemasi;?>/image/icon/btn-next-hp.png");
    right: 0px; }
  .happy-about-us .item > div:before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 16px;
    height: 12px;
    left: 0px;
    top: 6px; }
  .happy-about-us .owl2-dots {
    display: none; }
/*====*/
.about-us .about-title {
  font-size: 171%;
  /*! font-style: italic; */
  font-weight: bold;
  margin-bottom: 20px; }
  .about-us .name-member {
    font-size: 116.67%;
    font-weight: bold; }
  .about-us .job-member {
    margin: 7px 0 5px;
    font-style: italic; }
  .about-us .job-member:before, .about-us .job-member:after {
    content: "---";
    margin: 0 5px; }
  .about-us .social-member {
    list-style: none; }
  .about-us .social-member .social-icon {
    display: inline-block;
    margin: 0 3px; }
  .about-us .social-member .social-icon a {
    display: inline-block;
    color: #fff;
    font-size: 16px;
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 30px;
    border-radius: 50%;
    border-radius: 50%; }
  .about-us .social-member .social-icon a span {
    display: none; }
  .about-us .social-member .social-icon a:hover {
    background-color: <?php echo $tema['t37'];?>; }
  .about-us .social-member .social-icon.rss a {
    background-color: #f8bc2e; }
  .about-us .social-member .social-icon.facebook a {
    background-color: #39599f; }
  .about-us .social-member .social-icon.twitter a {
    background-color: #45b0e3; }
  .about-us .social-member .social-icon.google a {
    background-color: #1872bf; }
  .about-us .des-member.des-client {
    max-width: 950px;
    margin: 0 auto;
    font-style: italic;
    margin-bottom: 10px; }
  .about-us .member-info {
    text-align: center;
    padding-top: 15px; }
  .about-us .client-say-content {
    text-align: center; }
  .about-us .client-say-content .client-say-slider {
    padding-top: 15px; }
  .about-us .client-say-content .client-say-slider .owl2-dots {
    position: absolute;
    left: 0;
    top: -23px;
    width: 100%; }
  .about-us .client-say-content .client-say-slider .owl2-dots span {
    width: 16px;
    height: 16px;
    background-color: #d9d9d9;
    border: none;
    margin: 0 2px;
    opacity: 1;
    display: block;
    border-radius: 50%;
    -webkit-border-radius: 50%; }
  .about-us .client-say-content .client-say-slider .owl2-dots .owl2-dot {
    display: inline-block; }
    .about-us .client-say-content .client-say-slider .owl2-dots .owl2-dot.active span {
      background-color: #929292; }
    .about-us .client-say-content .client-say-slider .owl2-dots .owl2-dot span:hover {
      background-color: #929292; }
  .about-us .about-us-center {
    text-align: center; }
  .about-us .about-us-center .content-description {
    padding-top: 25px;
    clear: both;
    margin-bottom: 30px; }
  .about-us .client-logo-content {
    border-bottom: 1px dashed #e7e7e7;
    border-top: 1px dashed #e7e7e7;
    padding-bottom: 10px;
    text-align: center; }
  .about-us .client-logo-content .about-title {
    background: #fff none repeat scroll 0 0;
    display: inline-block;
    margin: 0;
    padding: 0 10px;
    position: relative;
    text-align: center;
    top: -19px; }
  .about-us .owl2-controls .owl2-nav div {
    color: #fff;
    border_radius: 50%;
    position: absolute;
    top: 29%;
    overflow: visible;
    display: inline-block;
    width: 34px;
    height: 34px;
    text-indent: -9999px;
    margin: 0 3px;
    background-color: #a6a6a8;
    border-radius: 50%;
    -webkit-border-radius: 50%; }
  .about-us .owl2-controls .owl2-nav div:hover {
    background-color: <?php echo $tema['t37'];?>; }
  .about-us .owl2-controls .owl2-nav div.owl2-next {
    right: -19px; }
  .about-us .owl2-controls .owl2-nav div.owl2-prev {
    left: -19px; }
  .about-us .owl2-controls .owl2-nav div:before {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    background-color: #a6a6a7;
    line-height: 32px;
    top: 1px; }
  .about-us .owl2-controls .owl2-nav div:hover:before {
    background-color: <?php echo $tema['t37'];?>; }
  .about-us .client-logo-slider {
    padding: 0 25px; }
  .about-us .client-logo-slider img {
    width: auto;
    display: inline-block; }
  .about-us .about-image-slider {
    max-width: 570px;
    margin: 0 auto; }
  .about-us .about-image-slider .owl2-carousel .owl2-stage-outer {
    direction: ltr; }
  .about-us .about-image-slider .owl2-controls .owl2-nav div {
    top: 50%;
    margin-top: -15px;
    border: none;
    border-radius: 0;
    -webkit-border-radius: 0;
    overflow: hidden;
    border-radius: 3px;
    -webkit-border-radius: 3px; }
  .about-us .about-image-slider .owl2-controls .owl2-nav div:before {
    border-radius: 0;
    -webkit-border-radius: 0;
    background-color: transparent;
    color: #c8c8c8; }
  .about-us .about-image-slider .owl2-controls .owl2-nav div.owl2-next {
    right: 10px; }
  .about-us .about-image-slider .owl2-controls .owl2-nav div.owl2-prev {
    left: 10px; }
  .about-us .about-image-slider .owl2-controls .owl2-nav div:hover {
    border-color: <?php echo $tema['t37'];?>; }
  .about-us .about-image-slider .owl2-controls .owl2-nav div:hover:before {
    color: #fff; }
  .about-us .skills-value {
    padding-top: 52px; }
  .about-us .skills-value .label-skill {
    font-weight: bold; }
  .about-us .about-us-content .description-about {
    padding: 20px 0; }
  .about-us .content-faq {
    position: relative;
    top: -15px; }
  .about-us .content-faq .panel {
    box-shadow: none;
    -webkit-box-shadow: none;
    border-bottom: 1px solid #e7e7e7;
    border-radius: 0;
    -webkit-border-radius: 0;
    margin: 0; }
  .about-us .content-faq .panel .panel-title {
    font-size: 100%;
    font-weight: bold; }
  .about-us .content-faq .panel .panel-title a {
    display: block;
    padding: 15px 0 15px 25px;
    position: relative; }
    .about-us .content-faq .panel .panel-title a:after {
      transform: rotate(135deg);
      content: "";
      width: 4px;
      height: 4px;
      position: absolute;
      left: 6px;
      top: 50%;
      margin-top: 6px;
      background-color: <?php echo $tema['t37'];?>; }
    .about-us .content-faq .panel .panel-title a:before {
      background-color: <?php echo $tema['t37'];?>;
      content: "-";
      width: 16px;
      height: 16px;
      display: inline-block;
      position: absolute;
      left: 0px;
      top: 50%;
      margin-top: -8px;
      border-radius: 2px;
      -webkit-border-radius: 2px;
      color: #fff;
      text-align: center;
      line-height: 16px; }
    .about-us .content-faq .panel .panel-title a.collapsed:after {
      background-color: #737373; }
    .about-us .content-faq .panel .panel-title a.collapsed:before {
      background-color: #737373;
      content: "?"; }
  .about-us .content-faq .panel .panel-body {
    padding: 0 0 13px; }
  .about-us .owl2-theme .owl2-controls .owl2-nav > div:before {
    display: inline-block;
    text-indent: 0;
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0px;
    top: 1px;
    color: #fff;
    font-size: 18px;
    line-height: 32px;
    text-align: center;
    border-radius: 50%;
    -webkit-border-radius: 50%; }
  .about-us .owl2-theme .owl2-controls .owl2-nav > div.owl2-prev:before {
    content: "\f104";
    font-family: FontAwesome; }
  .about-us .owl2-theme .owl2-controls .owl2-nav > div.owl2-next:before {
    content: "\f105";
    font-family: FontAwesome; }

.about-demo-1 .about-image, .about-demo-1 .about-info {
  margin-bottom: 40px; }
  .about-demo-1 .what-client-say {
    margin-bottom: 60px; }
  .about-demo-1 .line-hori {
    text-align: center;
    position: relative;
    z-index: 3; }
  .about-demo-1 .line-hori > span {
    background: white;
    display: inline-block;
    position: relative;
    z-index: 10;
    padding: 0 20px; }
  .about-demo-1 .line-hori:before {
    position: absolute;
    content: "";
    border-bottom: 1px dashed #ccc;
    top: 50%;
    left: 0;
    height: 1px;
    width: 100%;
    z-index: 3; }

.about-demo-2 .member .member-image {
  text-align: center; }
  .about-demo-2 .our-team {
    margin-bottom: 60px; }

.about-demo-3 .about-image, .about-demo-3 .about-info {
  margin-bottom: 30px; }

.info-contact .name-store h3 {
  padding: 7px 0px;
  margin-top: 10px; }
  .info-contact .icon {
    float: left;
    padding-right: 15px; }
  .info-contact .icon .fa {
    font-size: 20px; }
  .info-contact .comment {
    line-height: 24px; }

.contact-form legend {
  border-bottom: 0; }
/*===============================================
 [SASS DIRECTORY ]
 [1] BOX SALE,NEW
 [2] RATE
 [3] TODAY'S DEALS 
 [4] PRODUCT CATEGORY
 [5] TOOLBAR
 [6] PRODUCT LIST GRID SIMPLE
 [7] QUICKVIEW
 [8] Category  Featured
 ==============================================*/
.container-slider .price {
  color: <?php echo $tema['t37'];?>; }

.listing-page .products-list.grid .product-layout .product-item-container {
  min-height: 335px; }
/*.category-desc{
 margin: 30px 0;
 }
 .filter-v3 .modcontent{
 margin: 20px 0 30px 0;
 }*/
/*============ BOX SALE,NEW ==============*/
.label-stock {
  position: absolute;
  bottom: 10px;
  padding: 5px 10px;
  left: 10px;
  font-size: 12px;
  font-weight: normal;
  text-transform: uppercase;
  z-index: 1; }
  .label-stock.In {
    right: 10px;
    left: auto;
    background: #d9534f; }
  .label-stock.Pre-Order {
    background: #337ab7; }

.label-new, .label-sale {
  text-align: center;
  background-color: <?php echo $tema['t37'];?>;
  border-radius: 50%;
  color: #fff;
  display: block;
  /* [4] */
  /* [6] */
  /* [6] */
  /* [7] */
  font-size: 12px;
  font-size: 11px;
  /* [8] */
  font-weight: 500;
  height: 38px;
  width: 38px;
  line-height: 38px;
  position: absolute;
  top: 10px;
  text-transform: uppercase;
  z-index: 2;
  padding: 0;
  margin-bottom: 5px; }

.label-sale {
  background-color: #28292b;
  right: 10px; 
  font-weight: 500;
  font-size: 10px;
}

.label-new {
  background-color: #db0606;
  left: 10px; 
  color: white;
  font-weight: 600;
}

.label-percent {
  padding: 2px 5px;
  background: <?php echo $tema['t37'];?>;
  font-size: 13px;
  font-weight: normal; }

.product-options label {
  padding: 0;
  color: #666; }
  .product-options .label {
    font-weight: normal;
    font-size: 11px; }
  .product-options .radio {
    position: relative;
    z-index: 2;
    text-transform: capitalize;
    cursor: pointer; }
  .product-options .radio .fa {
    display: none; }
  .product-options .active .fa {
    display: block; }
  .product-options .fa {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    width: 22px;
    height: 22px;
    color: white;
    line-height: 22px;
    text-align: center; }
/*============ BOX RATING ==============*/
.ratings {
  display: inline-block;
  color: #666; }

.rate-history .ratings, .rate-history .order-num {
  display: inline-block;
  color: #666; }
  .rate-history .rating-num, .rate-history .order-num {
    font-size: 12px; }
  .rate-history .rating-num {
    color: #999; }
  .rate-history .rating-num:hover {
    color: <?php echo $tema['t37'];?>; }
  .rate-history .order-num:before {
    content: "|";
    display: inline-block;
    padding: 0 5px; }

.rating, .ratings {
  font-size: 0; }
  .rating .rating-box, .ratings .rating-box {
    display: inline-block;
    font-size: 0;
    vertical-align: middle; }
  .rating span.fa-stack .fa-star-o:before, .ratings span.fa-stack .fa-star-o:before {
    content: "\f005";
    color: #bbb; }
  .rating span.fa-stack .fa-star.fa-stack-1x, .ratings span.fa-stack .fa-star.fa-stack-1x {
    z-index: 1; }
  .rating span.fa-stack .fa-star.fa-stack-1x:before, .ratings span.fa-stack .fa-star.fa-stack-1x:before {
    content: "\f005";
    color: #fec42d; }

span.fa-stack {
  width: 14px;
  height: 11px;
  line-height: 10px;
  font-size: 12px; }
  span.fa-stack .fa-star-o:before {
    content: "\f005";
    color: #bbb; }
  span.fa-stack .fa-stack-2x {
    font-size: 11px; }
  span.fa-stack .fa-star.fa-stack-2x {
    position: relative;
    z-index: 1; }
  span.fa-stack .fa-star.fa-stack-2x:before {
    content: "\f005";
    color: #fec42d; }

.price {
  margin: 0 0 10px 0;
  line-height: 24px;
  color: <?php echo $tema['t37'];?>;
  font-size: 16px;
  font-weight: 600; }
  .price .price-old {
    line-height: 20px;
    padding: 0 5px;
    display: inline-block;
    text-decoration: line-through;
    color: #aaa;
    /* [4] */
    /* [6] */
    /* [6] */
    /* [7] */
    font-size: 14px;
    font-size: 1.4rem;
    /* [8] */
    font-weight: normal; }
  .price .price-new, .price span.price {
    color: <?php echo $tema['t37'];?>;
    /* [4] */
    /* [6] */
    /* [6] */
    /* [7] */
    font-size: 16px;
    font-size: 18px;
    /* [8] */
    font-weight: 600; }
  .price .callforprice {
    font-size: 12px;
    line-height: 100%; }
/*==================== COUNT DOWN BOX ====================*/
.countdown_box {
  position: absolute;
  top: 50%;
  margin-top: -28px;
  left: 50%;
  width: 210px;
  transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -webkit-transform: scale(1) translateX(-50%);
  -moz-transform: scale(1) translateX(-50%);
  -ms-transform: scale(1) translateX(-50%);
  -o-transform: scale(1) translateX(-50%);
  transform: scale(1) translateX(-50%); }
  .countdown_box .countdown_inner {
    width: 100%;
    text-align: center; }
  .countdown_box .title {
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    padding: 8px;
    display: none; }
  .countdown_box .time-item {
    display: inline-block;
    color: #fff;
    width: 25%;
    background: rgba(0, 0, 0, 0.7);
    border-radius: 5px;
    margin: 0 3px;
    width: 40px;
    text-align: center;
    padding: 6px 0;
    line-height: 18px; }
  .countdown_box .time-item .num-time {
    font-size: 18px;
    font-weight: 500; }
  .countdown_box .time-item .name-time {
    font-size: 10px;
    font-weight: 300;
    text-transform: capitalize; }
  .countdown_box .time-item:last-child {
    border: none; }
/*====================PRODUCT CATEGORY ====================*/
.products-category .filter_group {
  width: 25%;
  display: inline-block;
  vertical-align: top; }
  .products-category .category-info .form-group {
    margin: 0; }
  .products-category .category-info .form-group > p {
    margin: 0; }

.title-category {
  /* [4] */
  /* [6] */
  /* [6] */
  /* [7] */
  font-size: 18px;
  font-size: 1.8rem;
  /* [8] */
  text-transform: uppercase;
  color: #222;
  border-bottom: 2px solid #eee;
  display: inline-block;
  width: 100%;
  position: relative;
  margin-top: 0;
  padding-bottom: 10px; }
  .title-category:after {
    position: absolute;
    content: "";
    width: 110px;
    height: 2px;
    background-color: <?php echo $tema['t37'];?>;
    bottom: -2px;
    left: 0; }

.products-category .form-group .short-by {
  margin-right: 10px; }
/*REFINE SEARCH CATEGORY*/
.refine-search__content:before, .refine-search__content:after {
  content: " ";
  display: table; }
  .refine-search__content:after {
    clear: both; }
  .refine-search__content .refine-loadmore {
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: stretch;
    float: left;
    border: 1px solid #ddd;
    overflow: hidden;
    min-height: 49px;
    height: 120px;
    width: 80px;
    padding: 10px;
    text-align: center;
    cursor: pointer;
    border-radius: 4px;
    background: #f4f4f4; }
  .refine-search__content .refine-loadmore > span {
    display: inline-block;
    padding: 0 5px; }
  .refine-search__content .refine-loadmore:hover {
    background: <?php echo $tema['t37'];?>;
    border-color: <?php echo $tema['t37'];?>;
    color: white; }
  .refine-search__content .refine-search__subitem {
    width: 120px;
    float: left;
    margin-bottom: 15px;
    margin-right: 15px; }

.refine-search .thumbnail {
  margin-bottom: 10px; }
  .refine-search a {
    color: #555;
    display: block; }
  .refine-search a:hover {
    color: <?php echo $tema['t37'];?>; }
  .refine-search a:hover {
    border-color: <?php echo $tema['t37'];?>; }
/*TOOLBAR LISTING TOP*/
#content.col-sm-6 .product-compare {
  display: none; }

.filters-panel {
  border-radius: 0px;
  margin-bottom: 30px; }
  .filters-panel:before, .filters-panel:after {
    content: " ";
    display: table; }
  .filters-panel:after {
    clear: both; }
  .filters-panel.product-filter-top {
    margin-top: 15px; 
    background: #f9f8f8;
    padding: 10px;
    padding-bottom: 10px;
}
  .filters-panel.product-filter-bottom {
    border-top: 1px solid #ebebeb;
    padding-top: 20px;
    margin-top: 20px; }
  .filters-panel .pagination {
    margin: 0; }
  .filters-panel .product-compare {
    margin-right: 0 !important; }
  .filters-panel .list-view {
    display: inline-block; 
    font-size: 13px;
    line-height: 30px;
    width: 100%;
}
  .filters-panel .list-view .btn-gridview {
    border: none;
    color: #555;
    float: left;
    padding: 0 5px;
    font-size: 12px; }
  .filters-panel .list-view button.btn {
    margin: 0px;
    margin-right: 1px;
    float: left;
    width: 33px;
    height: 33px;
    line-height: 34px;
    background: #666;
    text-align: center;
    padding: 0;
    border-radius: 0px !important;
    border: none; }
  .filters-panel .list-view button.btn i {
    color: #fff; }
  .filters-panel .list-view button.btn:hover, .filters-panel .list-view button.btn.active {
    background: <?php echo $tema['t37'];?>;
    box-shadow: none;
    color: #fff; }
  .filters-panel .list-view button.btn:hover i, .filters-panel .list-view button.btn.active i {
    color: #fff; }
  .filters-panel .list-view button.btn:focus {
    border-radius: 0;
    outline: none; }
  .filters-panel .list-view .fa {
    font-size: 14px; }
  .filters-panel label {
    font-size: 12px;
    font-weight: normal;
    color: #444; }
  .filters-panel .btn-default {
    padding: 9px 20px;
    background: #eee;
    color: #333;
    border-radius: 3px;
    border: none;
    font-size: 12px; }
  .filters-panel .btn-default:hover {
    background: <?php echo $tema['t37'];?>;
    border-color: <?php echo $tema['t37'];?>;
    color: #fff; }
  .filters-panel .form-control, .filters-panel .btn {
    height: 33px;
    line-height: 33px;
    padding: 0px 12px;
    border: 1px solid #ddd;
    background: transparent;
    border-radius: 0px;
    background-color: #fff; }
  .filters-panel .form-group {
    margin-left: 10px; }
  .filters-panel .form-group select.form-control {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background: url(<?php echo $sitetemasi;?>/<?php echo $sitetemasi;?>/image/icon/bg-select.png) no-repeat center right;
    border: 1px solid #e5e5e5;
    height: 33px;
    line-height: 33px;
    padding: 0px 20px 0 10px;
    background-color: #fff; }
  .filters-panel .form-group select.form-control:hover {
    cursor: pointer; }
  .filters-panel .short-by-show.text-center .form-group {
    display: none; }

.box-pagination .pagination > li {
  margin: 0 3px; }
  .box-pagination .pagination > li:hover span, .box-pagination .pagination > li.active span, .box-pagination .pagination > li:hover a, .box-pagination .pagination > li.active a {
    border-color: <?php echo $tema['t37'];?>;
    background-color: <?php echo $tema['t37'];?>;
    color: #fff; }
  .box-pagination .pagination > li span, .box-pagination .pagination > li a {
    text-align: center;
    width: 33px;
    height: 33px;
    line-height: 33px;
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    padding: 0; }
  .box-pagination .pagination {
    display: block; }
/*================ PRODUCT LIST ===================*/
.products-list {
  clear: both;
  margin-bottom: 30px;
  /*====================PRODUCT GRID ====================*/
  /*----------------PRODUCT Table ------------------*/
  /*----------------PRODUCT LIST ------------------*/ }
  .products-list:before, .products-list:after {
    content: " ";
    display: table; }
  .products-list:after {
    clear: both; }
  .products-list .product-layout {
    transition: all 0.5s ease 0s;
    display: block; }
  .products-list .product-layout .product-item-container {
    overflow: hidden;
    position: relative;
    z-index: 2; }
  .products-list .product-layout .product-item-container .product-card__gallery {
    position: absolute;
    z-index: 90;
    top: 0;
    visibility: hidden;
    transition: all 0.3s ease-in 0s;
    -moz-transition: all 0.3s ease-in 0s;
    -webkit-transition: all 0.3s ease-in 0s;
    margin: 10px; }
  .products-list .product-layout .product-item-container .product-card__gallery.product-card__left {
    transform: translateX(-100%);
    left: 0; }
  .products-list .product-layout .product-item-container .product-card__gallery.product-card__right {
    transform: translateX(100%);
    right: 0; }
  .products-list .product-layout .product-item-container .product-card__gallery.product-card__bottom {
    top: auto;
    bottom: 0;
    -webkit-box-align: stretch;
    -moz-box-align: stretch;
    box-align: stretch;
    -webkit-align-items: stretch;
    -moz-align-items: stretch;
    -ms-align-items: stretch;
    -o-align-items: stretch;
    align-items: stretch;
    -ms-flex-align: stretch;
    display: -webkit-box;
    display: -moz-box;
    display: box;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -moz-box-orient: horizontal;
    box-orient: horizontal;
    -webkit-box-direction: normal;
    -moz-box-direction: normal;
    box-direction: normal;
    -webkit-flex-direction: row;
    -moz-flex-direction: row;
    flex-direction: row;
    -ms-flex-direction: row;
    -webkit-box-pack: center;
    -moz-box-pack: center;
    box-pack: center;
    -webkit-justify-content: center;
    -moz-justify-content: center;
    -ms-justify-content: center;
    -o-justify-content: center;
    justify-content: center;
    -ms-flex-pack: center;
    width: 100%; }
    .products-list .product-layout .product-item-container .product-card__gallery.product-card__bottom .item-img {
      width: 20px;
      height: 8px;
      background: #999;
      margin: 1px;
      margin-left: 1px;
      border: none; }
    .products-list .product-layout .product-item-container .product-card__gallery.product-card__bottom .item-img.thumb-active {
      border: none;
      width: 60px; }
    .products-list .product-layout .product-item-container .product-card__gallery.product-card__bottom .item-img img {
      display: none; }
  .products-list .product-layout .product-item-container .product-card__gallery .item-img {
    padding: 1px;
    background: white;
    border: 1px solid #eaeaea;
    margin: 0 0 3px;
    cursor: pointer;
    opacity: 0.6; }
    .products-list .product-layout .product-item-container .product-card__gallery .item-img.thumb-active {
      opacity: 1;
      border: 1px solid #ddd; }
  .products-list .product-layout .product-item-container .left-block {
    position: relative;
    overflow: hidden; }
  .products-list .product-layout .product-item-container .left-block .product-image-container {
    margin-bottom: 0;
    text-align: center; }
    .products-list .product-layout .product-item-container .left-block .product-image-container img {
      margin: 0 auto; }
  .products-list .product-layout .product-item-container .rating-box {
    float: left;
    margin-right: 5px; }
  .products-list .product-layout .product-item-container .rating-num {
    font-size: 10px;
    color: #666; }
  .products-list .product-layout .product-item-container:hover .product-card__gallery {
    visibility: visible;
    transform: translateX(0%); }
  .products-list .product-layout .product-item-container:hover .countdown_box {
    visibility: hidden;
    -webkit-opacity: 0;
    -moz-opacity: 0;
    -ms-opacity: 0;
    -o-opacity: 0;
    opacity: 0;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s; }
  .products-list .product-layout .product-item-container:hover .left-block .product-image-container.second_img .img_0 {
    top: 0;
    opacity: 1;
    z-index: 0; }
    .products-list .product-layout .product-item-container:hover .left-block .product-image-container a:before {
      -webkit-opacity: 1;
      -moz-opacity: 1;
      -ms-opacity: 1;
      -o-opacity: 1;
      opacity: 1; }
  .products-list.grid .product-layout .product-item-container, .products-list .product-grid .product-item-container {
    background-color: #fff;
    margin: 0 0 30px 0;
    padding: 0;
    position: relative;
    overflow: hidden;
    border-radius: 0; }
  .products-list.grid .product-layout .product-item-container > .list-block, .products-list .product-grid .product-item-container > .list-block, .products-list.grid .product-layout .product-item-container .description, .products-list .product-grid .product-item-container .description {
    display: none; }
  .products-list.grid .product-layout .product-item-container .left-block, .products-list .product-grid .product-item-container .left-block {
    position: relative; }
  .products-list.grid .product-layout .product-item-container .left-block .product-image-container img, .products-list .product-grid .product-item-container .left-block .product-image-container img {
    width: 100%; }
  .products-list.grid .product-layout .product-item-container .left-block .button-group, .products-list .product-grid .product-item-container .left-block .button-group {
    padding: 0;
    position: absolute;
    z-index: 99; }
    .products-list.grid .product-layout .product-item-container .left-block .button-group .btn-button, .products-list .product-grid .product-item-container .left-block .button-group .btn-button {
      border: none;
      display: block;
      padding: 0;
      background-color: rgba(0, 0, 0, 0.5);
      border-radius: 50%;
      color: #fff;
      width: 32px;
      height: 32px;
      line-height: 32px;
      text-align: center;
      margin: 5px;
      transition: all 0.3s cubic-bezier(0.45, 0.22, 0.27, 1.55) 0s;
      -moz-transition: all 0.3s cubic-bezier(0.45, 0.22, 0.27, 1.55) 0s;
      -webkit-transition: all 0.3s cubic-bezier(0.45, 0.22, 0.27, 1.55) 0s;
      opacity: 0;
      -webkit-transform: scale(0.5);
      -moz-transform: scale(0.5);
      -ms-transform: scale(0.5);
      -o-transform: scale(0.5);
      transform: scale(0.5);
      visibility: hidden; }
    .products-list.grid .product-layout .product-item-container .left-block .button-group .btn-button span, .products-list .product-grid .product-item-container .left-block .button-group .btn-button span {
      display: none; }
    .products-list.grid .product-layout .product-item-container .left-block .button-group .btn-button.wishlist, .products-list .product-grid .product-item-container .left-block .button-group .btn-button.wishlist {
      transition-delay: 0.1s; }
    .products-list.grid .product-layout .product-item-container .left-block .button-group .btn-button.compare, .products-list .product-grid .product-item-container .left-block .button-group .btn-button.compare {
      transition-delay: 0.2s; }
    .products-list.grid .product-layout .product-item-container .left-block .button-group .btn-button.quickview, .products-list .product-grid .product-item-container .left-block .button-group .btn-button.quickview {
      transition-delay: 0.3s; }
    .products-list.grid .product-layout .product-item-container .left-block .button-group .btn-button:hover, .products-list .product-grid .product-item-container .left-block .button-group .btn-button:hover {
      background-color: <?php echo $tema['t37'];?>; }
  .products-list.grid .product-layout .product-item-container .left-block .cartinfo--left, .products-list .product-grid .product-item-container .left-block .cartinfo--left {
    left: 10px;
    transform: translateY(50%);
    bottom: 50%; }
  .products-list.grid .product-layout .product-item-container .left-block .cartinfo--right, .products-list .product-grid .product-item-container .left-block .cartinfo--right {
    right: 10px;
    transform: translateY(50%);
    bottom: 50%; }
  .products-list.grid .product-layout .product-item-container .left-block .cartinfo--center, .products-list .product-grid .product-item-container .left-block .cartinfo--center {
    width: 100%;
    bottom: 35%;
    display: flex;
    justify-content: center; }
    .products-list.grid .product-layout .product-item-container .left-block .cartinfo--center .btn-button, .products-list .product-grid .product-item-container .left-block .cartinfo--center .btn-button {
      float: left; }
  .products-list.grid .product-layout .product-item-container .left-block.left-b .quickview, .products-list .product-grid .product-item-container .left-block.left-b .quickview {
    border: none;
    padding: 0;
    margin: 0;
    background-color: <?php echo $tema['t37'];?>;
    border-radius: 50%;
    color: #999;
    width: 34px;
    height: 34px;
    line-height: 34px;
    margin-top: -17px;
    margin-left: -17px;
    text-align: center;
    font-size: 12px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translateY(-45px);
    -moz-transform: translateY(-45px);
    -ms-transform: translateY(-45px);
    -o-transform: translateY(-45px);
    transform: translateY(-45px);
    color: #fff;
    /*@include if-rtl {
     transform: translate(50%,-50%);
     }*/
    transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
    opacity: 0;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5); }
    .products-list.grid .product-layout .product-item-container .left-block.left-b .quickview span, .products-list .product-grid .product-item-container .left-block.left-b .quickview span {
      display: none; }
    .products-list.grid .product-layout .product-item-container .left-block.left-b .quickview:hover, .products-list .product-grid .product-item-container .left-block.left-b .quickview:hover {
      background-color: #cc4b00;
      color: #fff; }
  .products-list.grid .product-layout .product-item-container .right-block, .products-list .product-grid .product-item-container .right-block {
    clear: both;
    padding: 10px 10px 0px 10px;
    text-align: center;
    position: relative; 
    min-height: 100px;
}
  .products-list.grid .product-layout .product-item-container .right-block .cartinfo--static, .products-list .product-grid .product-item-container .right-block .cartinfo--static, .products-list.grid .product-layout .product-item-container .right-block .button-group, .products-list .product-grid .product-item-container .right-block .button-group {
    text-align: center;
    position: absolute;
    top: 15px;
    visibility: hidden;
    -webkit-opacity: 0;
    -moz-opacity: 0;
    -ms-opacity: 0;
    -o-opacity: 0;
    opacity: 0;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s;
    left: 0;
    display: inline-block;
    width: 100%; }
    .products-list.grid .product-layout .product-item-container .right-block .cartinfo--static .addToCart, .products-list .product-grid .product-item-container .right-block .cartinfo--static .addToCart, .products-list.grid .product-layout .product-item-container .right-block .button-group .addToCart, .products-list .product-grid .product-item-container .right-block .button-group .addToCart {
      position: relative;
      top: -2px;
      margin: 0 1px;
      -webkit-transform: translateY(-45px);
      -moz-transform: translateY(-45px);
      -ms-transform: translateY(-45px);
      -o-transform: translateY(-45px);
      transform: translateY(-45px);
      transition: all 0.3s ease-in-out 0s;
      -moz-transition: all 0.3s ease-in-out 0s;
      -webkit-transition: all 0.3s ease-in-out 0s; }
    .products-list.grid .product-layout .product-item-container .right-block .cartinfo--static .btn-button, .products-list .product-grid .product-item-container .right-block .cartinfo--static .btn-button, .products-list.grid .product-layout .product-item-container .right-block .button-group .btn-button, .products-list .product-grid .product-item-container .right-block .button-group .btn-button {
      border: 1px solid <?php echo $tema['t37'];?>;
      display: inline-block;
      padding: 0;
      background-color: transparent;
      border-radius: 50%;
      color: <?php echo $tema['t37'];?>;
      width: 34px;
      height: 34px;
      line-height: 34px;
      text-align: center;
      margin: 0 1px;
      font-size: 14px;
      -webkit-transform: translateY(-45px);
      -moz-transform: translateY(-45px);
      -ms-transform: translateY(-45px);
      -o-transform: translateY(-45px);
      transform: translateY(-45px); }
    .products-list.grid .product-layout .product-item-container .right-block .cartinfo--static .btn-button span, .products-list .product-grid .product-item-container .right-block .cartinfo--static .btn-button span, .products-list.grid .product-layout .product-item-container .right-block .button-group .btn-button span, .products-list .product-grid .product-item-container .right-block .button-group .btn-button span {
      display: none; }
    .products-list.grid .product-layout .product-item-container .right-block .cartinfo--static .btn-button i, .products-list .product-grid .product-item-container .right-block .cartinfo--static .btn-button i, .products-list.grid .product-layout .product-item-container .right-block .button-group .btn-button i, .products-list .product-grid .product-item-container .right-block .button-group .btn-button i {
      width: 34px;
      height: 34px;
      line-height: 30px; }
    .products-list.grid .product-layout .product-item-container .right-block .cartinfo--static .btn-button i:before, .products-list .product-grid .product-item-container .right-block .cartinfo--static .btn-button i:before, .products-list.grid .product-layout .product-item-container .right-block .button-group .btn-button i:before, .products-list .product-grid .product-item-container .right-block .button-group .btn-button i:before {
      width: 34px;
      height: 34px;
      line-height: 30px; }
    .products-list.grid .product-layout .product-item-container .right-block .cartinfo--static .btn-button.wishlist, .products-list .product-grid .product-item-container .right-block .cartinfo--static .btn-button.wishlist, .products-list.grid .product-layout .product-item-container .right-block .button-group .btn-button.wishlist, .products-list .product-grid .product-item-container .right-block .button-group .btn-button.wishlist {
      transition: all 0.4s ease-in-out 0s;
      -moz-transition: all 0.4s ease-in-out 0s;
      -webkit-transition: all 0.4s ease-in-out 0s; }
    .products-list.grid .product-layout .product-item-container .right-block .cartinfo--static .btn-button.compare, .products-list .product-grid .product-item-container .right-block .cartinfo--static .btn-button.compare, .products-list.grid .product-layout .product-item-container .right-block .button-group .btn-button.compare, .products-list .product-grid .product-item-container .right-block .button-group .btn-button.compare {
      line-height: 29px;
      transition: all 0.5s ease-in-out 0s;
      -moz-transition: all 0.5s ease-in-out 0s;
      -webkit-transition: all 0.5s ease-in-out 0s; }
    .products-list.grid .product-layout .product-item-container .right-block .cartinfo--static .btn-button:hover, .products-list .product-grid .product-item-container .right-block .cartinfo--static .btn-button:hover, .products-list.grid .product-layout .product-item-container .right-block .button-group .btn-button:hover, .products-list .product-grid .product-item-container .right-block .button-group .btn-button:hover {
      color: #fff;
      background-color: <?php echo $tema['t37'];?>; }
    .products-list.grid .product-layout .product-item-container .right-block .price, .products-list .product-grid .product-item-container .right-block .price {
      margin-bottom: 0; }
  .products-list.grid .product-layout .product-item-container .right-block .rating, .products-list .product-grid .product-item-container .right-block .rating {
    margin-bottom: 5px; }
  .products-list.grid .product-layout .product-item-container .right-block .rating-box, .products-list .product-grid .product-item-container .right-block .rating-box {
    float: left;
    margin-right: 5px; }
  .products-list.grid .product-layout .product-item-container .right-block .rating-num, .products-list .product-grid .product-item-container .right-block .rating-num {
    font-size: 10px;
    color: #666; }
  .products-list.grid .product-layout .product-item-container .right-block h4, .products-list .product-grid .product-item-container .right-block h4 {
    margin: 0 0 7px 0;
    font-weight: 500; }
    .products-list.grid .product-layout .product-item-container .right-block h4 a, .products-list .product-grid .product-item-container .right-block h4 a {
      font-size: 13px;
      color: #333; }
    .products-list.grid .product-layout .product-item-container .right-block h4 a:hover, .products-list .product-grid .product-item-container .right-block h4 a:hover {
      color: <?php echo $tema['t37'];?>; }
  .products-list.grid .product-layout .product-item-container .right-block .addToCart, .products-list .product-grid .product-item-container .right-block .addToCart {
    font-size: 12px;
    font-weight: 600;
    color: #fff;
    text-transform: capitalize;
    background-color: <?php echo $tema['t37'];?>;
    border-radius: 18px;
    border: none;
    padding: 0 20px;
    height: 34px;
    line-height: 34px;
    line-height: 100%;
    border: none; 
    padding: 10px;
    /*! border-radius: 20px; */
}
    .products-list.grid .product-layout .product-item-container .right-block .addToCart:hover, .products-list .product-grid .product-item-container .right-block .addToCart:hover {
      background-color: #cc4b00; }
  .products-list.grid .product-layout .product-item-container .right-block .hide-cont, .products-list .product-grid .product-item-container .right-block .hide-cont {
    visibility: visible;
    -webkit-opacity: 1;
    -moz-opacity: 1;
    -ms-opacity: 1;
    -o-opacity: 1;
    opacity: 1;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s; }
  .products-list.grid .product-layout .product-item-container:hover .left-block .button-group .btn-button, .products-list .product-grid .product-item-container:hover .left-block .button-group .btn-button {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    visibility: visible; }
  .products-list.grid .product-layout .product-item-container:hover .left-block .product-image-container, .products-list .product-grid .product-item-container:hover .left-block .product-image-container {
    opacity: 0.8; }
    .products-list.grid .product-layout .product-item-container:hover .left-block.left-b .quickview, .products-list .product-grid .product-item-container:hover .left-block.left-b .quickview {
      opacity: 1;
      -webkit-transform: translateY(0px);
      -moz-transform: translateY(0px);
      -ms-transform: translateY(0px);
      -o-transform: translateY(0px);
      transform: translateY(0px); }
  .products-list.grid .product-layout .product-item-container:hover .right-block .hide-cont, .products-list .product-grid .product-item-container:hover .right-block .hide-cont {
    visibility: hidden;
    -webkit-opacity: 0;
    -moz-opacity: 0;
    -ms-opacity: 0;
    -o-opacity: 0;
    opacity: 0;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s; }
    .products-list.grid .product-layout .product-item-container:hover .right-block .cartinfo--static, .products-list .product-grid .product-item-container:hover .right-block .cartinfo--static, .products-list.grid .product-layout .product-item-container:hover .right-block .button-group, .products-list .product-grid .product-item-container:hover .right-block .button-group {
      visibility: visible;
      -webkit-opacity: 1;
      -moz-opacity: 1;
      -ms-opacity: 1;
      -o-opacity: 1;
      opacity: 1;
      transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -webkit-transition: all 0.2s ease-in-out 0s;
      top: 15px; }
    .products-list.grid .product-layout .product-item-container:hover .right-block .cartinfo--static .addToCart, .products-list .product-grid .product-item-container:hover .right-block .cartinfo--static .addToCart, .products-list.grid .product-layout .product-item-container:hover .right-block .button-group .addToCart, .products-list .product-grid .product-item-container:hover .right-block .button-group .addToCart, .products-list.grid .product-layout .product-item-container:hover .right-block .cartinfo--static .btn-button, .products-list .product-grid .product-item-container:hover .right-block .cartinfo--static .btn-button, .products-list.grid .product-layout .product-item-container:hover .right-block .button-group .btn-button, .products-list .product-grid .product-item-container:hover .right-block .button-group .btn-button {
      -webkit-transform: translateY(0px);
      -moz-transform: translateY(0px);
      -ms-transform: translateY(0px);
      -o-transform: translateY(0px);
      transform: translateY(0px); }
  @media (min-width: 1200px) {
    .products-list .product-grid-4:nth-child(4n+1) {
      clear: both !important; } }
  @media (min-width: 1200px) {
    .products-list .product-grid-5:nth-child(5n+1) {
      clear: both !important; } }
  .products-list .product-table:last-child .product-item-container {
    border-bottom: 1px solid #dbdbdb; }
  .products-list .product-table .product-item-container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    border-style: solid;
    border-width: 1px 1px 0px 1px;
    border-color: #dbdbdb; }
  .products-list .product-table .product-item-container > :last-child {
    border-left: 1px solid #dbdbdb; }
  .products-list .product-table .list-block {
    width: 20%;
    padding: 10px;
    text-align: center; }
  @media (max-width: 767px) {
      .products-list .product-table .list-block {
        display: none; } }
  .products-list .product-table .list-block .addToCart {
    text-transform: uppercase;
    display: block;
    width: 100%;
    margin-bottom: 10px;
    padding: 9px 20px;
    background: #555;
    color: #fff;
    border-radius: 3px;
    border: none;
    background: <?php echo $tema['t37'];?>;
    border-color: <?php echo $tema['t37'];?>; }
  .products-list .product-table .list-block .addToCart:hover {
    background: <?php echo $tema['t37'];?>;
    border-color: <?php echo $tema['t37'];?>;
    color: #fff; }
  .products-list .product-table .list-block .addToCart:hover {
    background: #555;
    border-color: #555; }
  .products-list .product-table .list-block .wishlist, .products-list .product-table .list-block .compare {
    width: 48%;
    padding: 9px 20px;
    background: #eee;
    color: #333;
    border-radius: 3px;
    border: none; }
  .products-list .product-table .list-block .wishlist:hover, .products-list .product-table .list-block .compare:hover {
    background: <?php echo $tema['t37'];?>;
    border-color: <?php echo $tema['t37'];?>;
    color: #fff; }
  .products-list .product-table .left-block {
    width: 15%;
    min-width: 64px; }
  @media (max-width: 767px) {
      .products-list .product-table .left-block {
        width: 35%; } }
  .products-list .product-table .left-block .quickview {
    display: none !important; }
  .products-list .product-table .left-block .product-card__gallery, .products-list .product-table .left-block .countdown_box, .products-list .product-table .left-block .button-group {
    display: none; }
  .products-list .product-table .right-block {
    width: 65%;
    display: -webkit-box;
    display: -moz-box;
    display: box;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 1;
    -moz-box-flex: 1;
    box-flex: 1;
    -webkit-flex: 1;
    -moz-flex: 1;
    -ms-flex: 1;
    flex: 1; }
  .products-list .product-table .right-block .button-group {
    display: none; }
  .products-list .product-table .right-block .addToCart {
    display: none; }
  .products-list .product-table .right-block > * {
    border-left: 1px solid #dbdbdb;
    margin: 0px;
    padding: 10px; }
  .products-list .product-table .right-block .hide-cont {
    width: 25%; }
  @media (max-width: 767px) {
        .products-list .product-table .right-block .hide-cont {
          width: 60%; } }
  .products-list .product-table .right-block .hide-cont h4 {
    font-weight: 400;
    font-size: 14px; }
  .products-list .product-table .right-block .so-productlist-colorswatch {
    display: none; }
  .products-list .product-table .right-block .rate-history {
    width: 20%;
    display: none; }
  .products-list .product-table .right-block .price {
    width: 25%; }
  @media (max-width: 767px) {
        .products-list .product-table .right-block .price {
          width: 40%; } }
  .products-list .product-table .right-block .description {
    width: 40%; }
  @media (max-width: 767px) {
        .products-list .product-table .right-block .description {
          display: none; } }
  @media (min-width: 992px) and (max-width: 1199px) {
    .products-list .product-table .right-block .description, .products-list .product-table .label-product {
      display: none; }
      .products-list .product-table .right-block h4 {
        width: 50%; } }
  @media (min-width: 768px) and (max-width: 991px) {
    .products-list .product-table .right-block .description, .products-list .product-table .label-product {
      display: none; }
      .products-list .product-table .right-block h4 {
        width: 50%; } }
  @media (max-width: 767px) {
    .products-list .product-table .label-product {
      display: none; } }
  .products-list.list .product-layout {
    width: 100%; }
  .products-list.list .product-layout ul.so-productlist-colorswatch {
    text-align: left; }
  .products-list.list .product-layout .so-quickview {
    display: none; }
  .products-list.list .product-layout .box-label {
    left: 5px; }
  .products-list.list .product-layout .product-item-container {
    display: table;
    margin-bottom: 30px; }
  .products-list.list .product-layout .product-item-container .left-block {
    width: 270px;
    float: left;
    border: 1px solid #ddd; }
  @media (max-width: 767px) {
        .products-list.list .product-layout .product-item-container .left-block {
          width: 40%; } }
  .products-list.list .product-layout .product-item-container .left-block .product-image-container {
    text-align: center; }
  .products-list.list .product-layout .product-item-container .left-block .button-group {
    display: none; }
  @media (max-width: 767px) {
        .products-list.list .product-layout .product-item-container .list-block {
          margin-left: 0;
          padding: 10px 0 0;
          clear: both;
          overflow: hidden; } }
  .products-list.list .product-layout .product-item-container .list-block .btn-button {
    border: 1px solid #eaeaea;
    border-radius: 3px;
    display: block;
    margin-right: 5px;
    padding: 7px 15px;
    background-color: #fff;
    color: #666;
    text-align: center;
    float: left; }
    .products-list.list .product-layout .product-item-container .list-block .btn-button i {
      font-size: 16px; }
    .products-list.list .product-layout .product-item-container .list-block .btn-button:hover {
      background-color: <?php echo $tema['t37'];?>;
      border-color: <?php echo $tema['t37'];?>;
      color: #fff; }
  .products-list.list .product-layout .product-item-container .list-block .addToCart {
    background-color: <?php echo $tema['t37'];?>;
    border-color: <?php echo $tema['t37'];?>;
    color: #fff;
    border-radius: 3px;
    /* [4] */
    /* [6] */
    /* [6] */
    /* [7] */
    font-size: 12px;
    font-size: 1.2rem;
    /* [8] */
    font-weight: 400;
    text-transform: uppercase; }
    .products-list.list .product-layout .product-item-container .list-block .addToCart i {
      margin-right: 0px;
      font-size: 14px; }
    .products-list.list .product-layout .product-item-container .list-block .addToCart:hover {
      background-color: #555;
      border-color: #555; }
  .products-list.list .product-layout .product-item-container .right-block {
    margin-left: 270px;
    padding: 0 20px 0px 30px; }
  @media (max-width: 767px) {
        .products-list.list .product-layout .product-item-container .right-block {
          margin-left: 40%;
          padding: 0 10px 0px 10px; } }
  .products-list.list .product-layout .product-item-container .right-block .ratings {
    margin-bottom: 0px; }
  .products-list.list .product-layout .product-item-container .right-block h4 {
    margin-bottom: 5px;
    font-weight: 400; }
    .products-list.list .product-layout .product-item-container .right-block h4 a {
      color: #444;
      /* [4] */
      /* [6] */
      /* [6] */
      /* [7] */
      font-size: 16px;
      font-size: 1.6rem;
      /* [8] */ }
    .products-list.list .product-layout .product-item-container .right-block h4 a:hover {
      color: <?php echo $tema['t37'];?>; }
  .products-list.list .product-layout .product-item-container .right-block .price {
    display: inline-block;
    margin: 8px 0 8px 0; }
  .products-list.list .product-layout .product-item-container .right-block .description {
    margin-bottom: 20px; }
    @media (max-width: 767px) {
        .products-list.list .product-layout .product-item-container .right-block .description {
          display: none; } }
  @media (max-width: 767px) {
      .products-list.list .product-layout .product-item-container .label-product {
        display: none; } }

.product-listing .product-grid .so-productlist-colorswatch {
  position: absolute;
  top: -10px;
  width: 100%; }
/*.product-listing{
 padding: 0;
 }*/
/*SIDEBAR LISTING - RESPONSIVE*/
@media (min-width: 992px) {
  .desktop-offcanvas .sidebar-overlay {
    background: rgba(0, 0, 0, 0.5);
    display: none;
    height: 100%;
    opacity: 1;
    position: fixed;
    top: 0;
    left: 0px;
    right: 0px;
    width: 100%;
    z-index: 9998; }
    .desktop-offcanvas .sidebar-offcanvas {
      padding-left: 15px !important;
      padding-right: 10px !important;
      background: #fff;
      width: 300px;
      position: fixed;
      top: 0px;
      bottom: 0px;
      z-index: 9999;
      height: 100%;
      overflow-x: scroll;
      box-shadow: 0 0 5px 0 rgba(50, 50, 50, 0.75);
      transition: all 300ms ease-in-out;
      padding-top: 40px;
      margin: 0px; }
      .desktop-offcanvas .sidebar-offcanvas #close-sidebar {
        position: absolute;
        top: 10px;
        right: 20px;
        font-size: 16px;
        display: block; }
        .desktop-offcanvas .sidebar-offcanvas #close-sidebar:hover {
          cursor: pointer;
          color: #f00; }
      .desktop-offcanvas .sidebar-offcanvas.right_column {
        right: -100%; }
      .desktop-offcanvas .sidebar-offcanvas.left_column {
        left: -100%; }
      .desktop-offcanvas .sidebar-offcanvas.left_column.active {
        left: 0; }
      .desktop-offcanvas .sidebar-offcanvas.right_column.active {
        right: 0; } }

.product-detail .open-sidebar, .product-listing .open-sidebar {
  display: inline-block;
  border: 2px solid #999;
  padding: 3px 15px;
  letter-spacing: 1px;
  line-height: 23px;
  font-size: 10px;
  vertical-align: top;
  text-transform: uppercase; }
  .product-detail .open-sidebar:hover, .product-listing .open-sidebar:hover {
    border-color: <?php echo $tema['t37'];?>; }

.product-detail .open-sidebar {
  margin-bottom: 15px; }

#close-sidebar {
  display: none; }

@media only screen and (max-width: 992px) {
  body.open-sboff {
    height: 100%;
    overflow: hidden; }

  .blog-detail .sidebar-overlay, .blog-list .sidebar-overlay, .product-detail .sidebar-overlay, .product-listing .sidebar-overlay {
    background: rgba(0, 0, 0, 0.5);
    display: none;
    height: 100%;
    opacity: 1;
    position: fixed;
    top: 0;
    left: 0px;
    right: 0px;
    width: 100%;
    z-index: 9998; }
    .blog-detail .sidebar-offcanvas, .blog-list .sidebar-offcanvas, .product-detail .sidebar-offcanvas, .product-listing .sidebar-offcanvas {
      padding-left: 15px !important;
      padding-right: 10px !important;
      background: #fff;
      width: 300px;
      position: fixed;
      top: 0px;
      bottom: 0px;
      z-index: 9999;
      height: 100%;
      overflow-x: scroll;
      box-shadow: 0 0 5px 0 rgba(50, 50, 50, 0.75);
      transition: all 300ms ease-in-out;
      padding-top: 40px;
      margin: 0px; }
      .blog-detail .sidebar-offcanvas #close-sidebar, .blog-list .sidebar-offcanvas #close-sidebar, .product-detail .sidebar-offcanvas #close-sidebar, .product-listing .sidebar-offcanvas #close-sidebar {
        position: absolute;
        top: 10px;
        right: 20px;
        font-size: 16px;
        display: block; }
        .blog-detail .sidebar-offcanvas #close-sidebar:hover, .blog-list .sidebar-offcanvas #close-sidebar:hover, .product-detail .sidebar-offcanvas #close-sidebar:hover, .product-listing .sidebar-offcanvas #close-sidebar:hover {
          cursor: pointer;
          color: #f00; }
      .blog-detail .sidebar-offcanvas.right_column, .blog-list .sidebar-offcanvas.right_column, .product-detail .sidebar-offcanvas.right_column, .product-listing .sidebar-offcanvas.right_column {
        right: -100%; }
      .blog-detail .sidebar-offcanvas.left_column, .blog-list .sidebar-offcanvas.left_column, .product-detail .sidebar-offcanvas.left_column, .product-listing .sidebar-offcanvas.left_column {
        left: -100%; }
      .blog-detail .sidebar-offcanvas.left_column.active, .blog-list .sidebar-offcanvas.left_column.active, .product-detail .sidebar-offcanvas.left_column.active, .product-listing .sidebar-offcanvas.left_column.active {
        left: 0; }
      .blog-detail .sidebar-offcanvas.right_column.active, .blog-list .sidebar-offcanvas.right_column.active, .product-detail .sidebar-offcanvas.right_column.active, .product-listing .sidebar-offcanvas.right_column.active {
        right: 0; } }

.filter-horizontal .so-filter-option.so-filter-price .input_max, .filter-horizontal .so-filter-option.so-filter-price .input_min {
  min-width: 50px;
  width: 50px; }
/*============ QUICKVIEW ==============*/
.mfp-iframe-scaler iframe {
  padding: 20px 10px 10px 10px;
  height: 535px; }

#product-quick #product {
  margin-top: 20px; }
  #product-quick .product-view .content-product-right .box-info-product .cart {
    margin-left: 10px; }
  #product-quick .product-view .content-product-right .box-review .ratings {
    margin-right: 10px;
    top: -1px; }
  #product-quick .product-view .content-product-right .title-product h1 {
    margin-bottom: 10px; }
  #product-quick .product-view .content-product-right .product-box-desc {
    padding: 10px;
    border: 1px dotted #ddd;
    margin: 0;
    font-style: italic;
    color: #999;
    font-size: 12px; }
  #product-quick .product-view .content-product-right .product-box-desc span {
    font-weight: normal; }
  #product-quick .list-unstyled {
    font-size: 13px;
    color: #666;
    font-weight: normal; }

.product-layout.product-table .product-item-container .seller_logo {
  transform: unset;
  position: static; }

@media (min-width: 1200px) and (max-width: 1649px) {
  .product-grid.product-grid-5 .countdown_box {
    display: none; }

  #product-related .countdown_box {
    display: none; }

  .product-layout .product-item-container .seller_logo {
    right: 5px; } }
/*============ Category  Featured ==============*/
.category-featured {
  margin: 0; }
  @media (min-width: 1200px) {
  .category-featured .wap-listing-tabs {
    height: 245px;
    position: relative;
    z-index: 2; } }
  .category-featured .ltabs-wrap .ltabs-tabs-container {
    margin: 0 0 10px;
    border-bottom: 2px solid #eee; }
  .category-featured .ltabs-wrap .ltabs-tabs-container .ltabs-tabs li.ltabs-tab {
    margin: 0 20px 0 0;
    padding: 5px 0; }
    .category-featured .ltabs-wrap .ltabs-tabs-container .ltabs-tabs li.ltabs-tab > span {
      /* [4] */
      /* [6] */
      /* [6] */
      /* [7] */
      font-size: 18px;
      font-size: 1.8rem;
      /* [8] */
      color: #999;
      padding: 0; }
    .category-featured .ltabs-wrap .ltabs-tabs-container .ltabs-tabs li.ltabs-tab > span:hover {
      color: <?php echo $tema['t37'];?>; }
  .category-featured .ltabs-wrap .ltabs-tabs-container .ltabs-tabs li.tab-sel {
    position: relative;
    font-weight: bold; }
    .category-featured .ltabs-wrap .ltabs-tabs-container .ltabs-tabs li.tab-sel span {
      color: #555; }
    .category-featured .ltabs-wrap .ltabs-tabs-container .ltabs-tabs li.tab-sel:after {
      position: absolute;
      content: "";
      width: 100%;
      height: 2px;
      background-color: <?php echo $tema['t37'];?>;
      bottom: -2px;
      left: 0;
      z-index: 2; }
  .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-nav .owl2-prev, .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-nav .owl2-next {
    border-radius: 3px; }
    .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-nav .owl2-prev:hover, .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-nav .owl2-next:hover {
      color: #fff;
      background-color: <?php echo $tema['t37'];?>;
      border-color: <?php echo $tema['t37'];?>; }
  .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-dots {
    width: 100%;
    display: inline-block;
    text-align: center;
    margin-top: 20px; }
    .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-dots .owl2-dot {
      margin: 0 3px;
      display: inline-block;
      transition: all 0.3s ease 0s;
      width: 10px; }
    .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-dots .owl2-dot span {
      height: 6px;
      background: #cacaca;
      display: block;
      border-radius: 3px;
      margin: 0; }
    .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-dots .owl2-dot:hover span {
      background: <?php echo $tema['t37'];?>; }
    .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-dots .owl2-dot.active {
      width: 30px; }
    .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-dots .owl2-dot.active span {
      background: <?php echo $tema['t37'];?>; }
  .category-featured .ltabs-wrap .wap-listing-tabs .ltabs-item {
    margin: 0 !important; }
  .category-featured .ltabs-wrap .wap-listing-tabs .ltabs-item .item-inner {
    margin: 0; }
  .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container {
    margin-bottom: 0;
    display: flex; }
  .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .left-block {
    padding: 0; }
  .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block {
    text-align: left; }
    .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block h4 > a {
      font-size: 14px;
      font-weight: 500; }
    .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .item-available {
      margin-top: 15px; }
    .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .item-available .available {
      background-color: #eee;
      height: 10px;
      width: 100%;
      border-radius: 7px;
      position: relative;
      z-index: 2;
      overflow: hidden; }
    .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .item-available .available .color_width {
      background: <?php echo $tema['t37'];?>;
      position: absolute;
      height: 100%;
      left: 0;
      border-radius: 7px; }
    .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .item-des {
      line-height: 22px;
      margin: 5px 0 15px; }
    .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .rating-num {
      font-size: 12px; }
    .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .button-group {
      margin-top: 15px; }
    .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .btn-button {
      margin: 0 2px;
      padding: 11px 12px;
      line-height: 100%;
      background-color: white;
      border: 1px solid #dcdcdc; }
    .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .btn-button:hover {
      color: #fff;
      background-color: <?php echo $tema['t37'];?>;
      border-color: <?php echo $tema['t37'];?>; }
    .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .addToCart {
      font-size: 12px;
      color: #444;
      text-transform: uppercase;
      background-color: #fff;
      border-radius: 20px;
      border: none;
      padding: 10px 20px;
      line-height: 100%;
      margin-top: 10px;
      border: 1px solid #ebebeb; }
    .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .addToCart:hover {
      background-color: <?php echo $tema['t37'];?>;
      color: #fff;
      border-color: <?php echo $tema['t37'];?>; }
    .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .wishlist, .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .compare {
      color: #444;
      border-radius: 50%; }
    .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .wishlist span, .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .compare span {
      display: none; }

.product-view .content-product-left.class-honizol .thumb-video {
  bottom: 190px; }

.left-content-product {
  margin-bottom: 30px; }
  .left-content-product .content-product-left .large-image {
    cursor: pointer;
    display: block;
    padding: 1px;
    overflow: hidden;
    position: relative;
    border: 1px solid #e6e6e6; }
  .left-content-product .content-product-left .large-image img {
    background: #fff; }
  .left-content-product .content-product-left .large-image .label-sale {
    left: 25px; }
  .left-content-product .content-product-left .thumb-video {
    margin-top: -50px;
    bottom: 40px;
    position: absolute;
    z-index: 950;
    font-size: 32px;
    right: 40px;
    z-index: 540; }
  .left-content-product .content-product-left .full_slider, .left-content-product .content-product-left .not_full_slider {
    margin-top: 10px; }
  .left-content-product .content-product-left .full_slider .thumbnail, .left-content-product .content-product-left .not_full_slider .thumbnail {
    border-radius: 0;
    margin-bottom: 0; }
  .left-content-product .content-product-left .full_slider .thumbnail:hover, .left-content-product .content-product-left .not_full_slider .thumbnail:hover {
    border-color: <?php echo $tema['t37'];?>; }
  .left-content-product .content-product-left .full_slider .thumbnail.active, .left-content-product .content-product-left .not_full_slider .thumbnail.active {
    border-color: <?php echo $tema['t37'];?>; }
  .left-content-product .content-product-left .full_slider .owl2-nav div, .left-content-product .content-product-left .not_full_slider .owl2-nav div {
    width: 27px;
    height: 27px;
    border: 1px solid #dfdfdf;
    border-radius: 0;
    font-size: 0;
    background-color: transparent;
    transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
    top: 50%;
    margin-top: -12px;
    position: absolute; }
    .left-content-product .content-product-left .full_slider .owl2-nav div.owl2-prev, .left-content-product .content-product-left .not_full_slider .owl2-nav div.owl2-prev {
      background: url("<?php echo $sitetemasi;?>/image/icon/next-prev-detail.png") no-repeat;
      background-position: -36px 0px;
      left: -14px;
      float: left;
      background-color: #fff; }
    .left-content-product .content-product-left .full_slider .owl2-nav div.owl2-prev:hover, .left-content-product .content-product-left .not_full_slider .owl2-nav div.owl2-prev:hover {
      border-color: <?php echo $tema['t37'];?>;
      background-color: <?php echo $tema['t37'];?>;
      background-position: 0px 0px;
      opacity: 1; }
    .left-content-product .content-product-left .full_slider .owl2-nav div.owl2-prev.disabled, .left-content-product .content-product-left .not_full_slider .owl2-nav div.owl2-prev.disabled {
      display: none; }
    .left-content-product .content-product-left .full_slider .owl2-nav div.owl2-next, .left-content-product .content-product-left .not_full_slider .owl2-nav div.owl2-next {
      background: url("<?php echo $sitetemasi;?>/image/icon/next-prev-detail.png") no-repeat;
      background-position: -71px 0px;
      right: -14px;
      float: right;
      background-color: #fff; }
    .left-content-product .content-product-left .full_slider .owl2-nav div.owl2-next:hover, .left-content-product .content-product-left .not_full_slider .owl2-nav div.owl2-next:hover {
      border-color: <?php echo $tema['t37'];?>;
      background-color: <?php echo $tema['t37'];?>;
      background-position: -107px 0px;
      opacity: 1; }
    .left-content-product .content-product-left .full_slider .owl2-nav div.owl2-next.disabled, .left-content-product .content-product-left .not_full_slider .owl2-nav div.owl2-next.disabled {
      display: none; }
  .left-content-product .content-product-right .title-product h1 {
    font-size: 22px;
    margin: 0 0 10px;
    font-weight: 500;
    color: #444; }
  .left-content-product .content-product-right .box-review .ratings {
    display: inline-block;
    margin-right: 20px; }
  .left-content-product .content-product-right .box-review a {
    color: #555; }
  .left-content-product .content-product-right .box-review a:hover {
    color: <?php echo $tema['t37'];?>; }
  .left-content-product .content-product-right .product-box-desc {
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    padding: 10px 20px; }
  .left-content-product .content-product-right .product-box-desc .inner-box-desc {
    position: relative; }
  .left-content-product .content-product-right .product-box-desc .inner-box-desc:before {
    content: "";
    width: 4px;
    background: <?php echo $tema['t37'];?>;
    height: 100%;
    position: absolute;
    left: -20px;
    top: 0; }
  .left-content-product .content-product-right .product-box-desc span {
    font-weight: bold; 
    font-size: 15px;
}
  .left-content-product .content-product-right .product-box-desc .brand a {
    color: #666; }
  .left-content-product .content-product-right .product-box-desc .brand a:hover {
    color: <?php echo $tema['t37'];?>; }
  .left-content-product .content-product-right .product-label {
    overflow: hidden; }
  .left-content-product .content-product-right .product-label .price {
    font-size: 24px;
    font-weight: 600; }
  @media (min-width: 1200px) {
        .left-content-product .content-product-right .product-label .price {
          float: left; } }
  @media (min-width: 1200px) {
        .left-content-product .content-product-right .product-label .stock {
          float: right; } }
  .left-content-product .content-product-right .product-label .stock .status-stock {
    color: #00abf0; }
    .left-content-product .content-product-right .product-label .stock .status-stock:before {
      content: "\f046";
      font-family: FontAwesome;
      display: inline-block;
      color: #00abf0;
      margin-right: 5px;
      margin-left: 10px; }
  .left-content-product .content-product-right #product {
    float: left;
    width: 100%;
    margin-top: 10px; }
  .left-content-product .content-product-right #product h3 {
    margin-top: 0; }
  .left-content-product .content-product-right #product .image_option_type label.control-label {
    margin-right: 10px;
    margin-top: 3px; }
  .left-content-product .content-product-right #product .product-options .img-thumbnail {
    width: 60px;
    /*! height: 60px; */
    border-radius: 0;
    padding: 1px; }
  .left-content-product .content-product-right #product .box-checkbox label {
    width: 100%; }
  .left-content-product .content-product-right #product .box-date {
    padding-left: 0; }
  .left-content-product .content-product-right #product .box-date label {
    margin-right: 10px;
    width: 80px; }
  .left-content-product .content-product-right #product .box-date input {
    width: 200px; }
  .left-content-product .content-product-right #product .box-date input, .left-content-product .content-product-right #product .box-date button {
    border-radius: 0;
    position: relative;
    z-index: 0;
    margin-left: 0; }
  .left-content-product .content-product-right #product .box-date .input-group-btn {
    float: left; }
  .left-content-product .content-product-right #product .box-date button:hover {
    background: <?php echo $tema['t37'];?>;
    color: #fff; }
  .left-content-product .content-product-right .box-info-product {
    float: left;
    width: 100%; }
  .left-content-product .content-product-right .box-info-product .quantity .quantity-control {
    float: left;
    margin: 0;
    background: #eee;
    padding: 4px 10px;
    position: relative; }
  .left-content-product .content-product-right .box-info-product .quantity .quantity-control label {
    float: left;
    font-weight: normal;
    margin-top: 8px;
    padding-right: 5px; }
  .left-content-product .content-product-right .box-info-product .quantity .quantity-control input.form-control {
    float: left;
    height: 33px;
    line-height: 31px;
    margin: 0;
    margin-right: 17px;
    padding: 0 10px;
    width: 35px;
    border: 1px solid #bdc2c9;
    border-radius: 0;
    z-index: 0; }
  .left-content-product .content-product-right .box-info-product .quantity .quantity-control span {
    border: 0 none;
    color: white;
    float: left;
    font-size: 10px;
    font-weight: normal;
    margin-left: 5px;
    border-radius: 0;
    cursor: pointer;
    line-height: 16px; }
    .left-content-product .content-product-right .box-info-product .quantity .quantity-control span.product_quantity_up {
      background: none repeat scroll 0 0 #444;
      padding: 0 4px;
      position: absolute;
      right: 14px;
      top: 4px;
      height: 16.5px;
      width: 14px; }
    .left-content-product .content-product-right .box-info-product .quantity .quantity-control span.product_quantity_down {
      background: none repeat scroll 0 0 #444;
      font-size: 13px;
      padding: 0 4px;
      position: absolute;
      right: 14px;
      top: 21px;
      width: 14px;
      height: 15.5px;
      line-height: 15px; }
    .left-content-product .content-product-right .box-info-product .quantity .quantity-control span:hover {
      background: <?php echo $tema['t37'];?>; }
  .left-content-product .content-product-right .box-info-product .cart {
    float: left;
    margin-right: 10px; }
  .left-content-product .content-product-right .box-info-product .cart a {
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase; }
    .left-content-product .content-product-right .box-info-product .cart a i {
      margin-right: 5px; }
  .left-content-product .content-product-right .box-info-product .cart input {
    background: <?php echo $tema['t37'];?>;
    border-radius: 0;
    color: #fff;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: bold;
    padding: 12px 40px; }
    .left-content-product .content-product-right .box-info-product .cart input:hover {
      background: #444; }
  .left-content-product .content-product-right .box-info-product .add-to-links ul li a {
    display: inline-block;
    padding: 10px 15px;
    font-size: 14px;
    color: #666;
    border: 1px solid #e6e6e6;
    cursor: pointer; }
    .left-content-product .content-product-right .box-info-product .add-to-links ul li a.text {
      display: none; }
    .left-content-product .content-product-right .box-info-product .add-to-links ul li a:hover {
      border-color: <?php echo $tema['t37'];?>;
      color: <?php echo $tema['t37'];?>; }

.thumb-vertical-outer {
  width: 100px;
  position: relative;
  float: left;
  margin-right: 15px; }
  .thumb-vertical-outer .lSAction {
    display: none; }
  .thumb-vertical-outer .thumbnail {
    border-color: #e6e6e6;
    padding: 0; }
  .thumb-vertical-outer .btn-more {
    display: block;
    height: 40px;
    width: 40px;
    text-align: center;
    position: absolute;
    font-size: 36px;
    cursor: pointer;
    margin-left: -20px;
    left: 50%;
    color: #555; }
  .thumb-vertical-outer .btn-more:hover {
    color: <?php echo $tema['t37'];?>; }
  .thumb-vertical-outer .btn-more.prev-thumb {
    top: 0; }
  .thumb-vertical-outer .btn-more.next-thumb {
    bottom: 0; }
  .thumb-vertical-outer .prev {
    margin-bottom: 5px; }
  .thumb-vertical-outer .prev, .thumb-vertical-outer .next {
    cursor: pointer; }
  .thumb-vertical-outer .prev.disabled, .thumb-vertical-outer .next.disabled {
    visibility: hidden; }
  .thumb-vertical-outer .prev .fa, .thumb-vertical-outer .next .fa {
    font-size: 16px;
    display: block;
    text-align: center; }
  .thumb-vertical-outer ul.thumb-vertical {
    padding: 0;
    margin: 0;
    list-style: none; }
  .thumb-vertical-outer ul li {
    cursor: pointer;
    margin-bottom: 10px; }
  .thumb-vertical-outer ul li .thumbnail {
    border-radius: 0;
    padding: 0;
    margin: 0; }
  .thumb-vertical-outer ul li .thumbnail img {
    padding: 0px;
    transition: all 0.3s ease;
    position: relative; }
  .thumb-vertical-outer ul li .thumbnail:hover {
    border-color: <?php echo $tema['t37'];?>; }
  .thumb-vertical-outer ul li .thumbnail.active {
    border-color: <?php echo $tema['t37'];?>; }
/*============PRODUCT TABS==================*/
.producttab .tabsslider.horizontal-tabs {
  z-index: 1;
  margin-top: 40px;
  margin-bottom: 0px;
  float: left;
  width: 100%;
  border: none;
  padding: 0; }
  .producttab .tabsslider.horizontal-tabs .nav-tabs {
    background-color: #f5f5f5;
    border: none;
    padding: 15px;
    border-radius: 5px;
    text-align: center; }
  .producttab .tabsslider.horizontal-tabs .nav-tabs li {
    margin-bottom: 0;
    display: inline-flex;
    margin: 0 5px;
    float: none; }
  .producttab .tabsslider.horizontal-tabs .nav-tabs li a {
    background-color: #fff;
    float: left;
    display: block;
    font-size: 14px;
    color: #222;
    padding: 13px 25px;
    margin: 0;
    cursor: pointer;
    text-transform: uppercase;
    font-weight: 700;
    border-radius: 0;
    border: none;
    border: 1px solid #e8e8e8;
    border-radius: 20px;
    line-height: 100%;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s; }
  .producttab .tabsslider.horizontal-tabs .nav-tabs li.active a, .producttab .tabsslider.horizontal-tabs .nav-tabs li:hover a {
    background-color: #f2f2f2;
    border-color: #222;
    color: #222; }
  .producttab .tabsslider.horizontal-tabs .tab-content {
    padding: 45px 0px;
    display: block;
    margin: 0;
    background-color: #fff;
    border-radius: 0px;
    -moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    border: none; }
  .producttab .tabsslider.horizontal-tabs .tab-content .active {
    opacity: 1; }
/*----------------------PRODUCT TABS ---------------*/
.producttab {
  margin: 40px 0;
  display: inline-block;
  width: 100%; }

.producttab .tabsslider.vertical-tabs {
  border: 1px solid #e6e6e6;
  padding: 0;
  border-bottom: 1px solid #ddd; }
  .producttab .tabsslider.vertical-tabs ul.nav-tabs {
    border-bottom: medium none;
    margin: 0;
    min-height: 180px;
    padding: 0; }
  .producttab .tabsslider.vertical-tabs ul.nav-tabs li {
    border-bottom: 1px solid #ddd;
    clear: both;
    position: relative;
    width: 100%;
    display: block; }
  .producttab .tabsslider.vertical-tabs ul.nav-tabs li a {
    border: 0;
    border-radius: 0;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 14px;
    margin: 0;
    transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
    color: #666; }
  .producttab .tabsslider.vertical-tabs ul.nav-tabs li a:hover {
    background: transparent; }
  .producttab .tabsslider.vertical-tabs ul.nav-tabs li:before {
    content: "";
    width: 5px;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
    z-index: 999; }
  .producttab .tabsslider.vertical-tabs ul.nav-tabs li:hover {
    border-left-color: <?php echo $tema['t37'];?>; }
  .producttab .tabsslider.vertical-tabs ul.nav-tabs li:hover a {
    color: <?php echo $tema['t37'];?>; }
    .producttab .tabsslider.vertical-tabs ul.nav-tabs li:hover a:before {
      display: none; }
  .producttab .tabsslider.vertical-tabs ul.nav-tabs li:hover:before {
    background-color: <?php echo $tema['t37'];?>; }
  .producttab .tabsslider.vertical-tabs ul.nav-tabs li.active {
    border-left-color: <?php echo $tema['t37'];?>; }
  .producttab .tabsslider.vertical-tabs ul.nav-tabs li.active:before {
    background-color: <?php echo $tema['t37'];?>; }
  .producttab .tabsslider.vertical-tabs ul.nav-tabs li.active a {
    background: transparent;
    color: <?php echo $tema['t37'];?>; }
    .producttab .tabsslider.vertical-tabs ul.nav-tabs li.active a:before, .producttab .tabsslider.vertical-tabs ul.nav-tabs li.active a:after {
      display: none; }
  .producttab .tabsslider.vertical-tabs ul.nav-tabs li:first-child {
    border-top: 0; }
  .producttab .tabsslider.vertical-tabs .tab-content {
    border: 0;
    border-left: 1px solid #e6e6e6;
    min-height: 180px;
    margin-bottom: 0; }

#product-accordion {
  float: left;
  width: 100%;
  margin-top: 30px;
  border: 1px solid #ddd;
  border-top: 4px solid <?php echo $tema['t37'];?>; }
  #product-accordion .panel {
    padding: 10px 20px 0 20px;
    border-bottom: 0;
    box-shadow: none; }
  #product-accordion .panel .panel-heading {
    border-bottom: 1px dotted #ddd;
    padding: 0 0 10px 0; }
  #product-accordion .panel .panel-heading a {
    text-transform: uppercase;
    font-weight: bold;
    font-size: 18px;
    margin: 0;
    transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
    color: #666;
    width: 100%;
    display: inline-block;
    position: relative; }
  #product-accordion .panel .panel-heading a.title-head.collapsed {
    color: #666; }
    #product-accordion .panel .panel-heading a.title-head.collapsed span.arrow-up:before {
      content: "\f0d8"; }
  #product-accordion .panel .panel-heading a.title-head {
    color: <?php echo $tema['t37'];?>; }
    #product-accordion .panel .panel-heading a.title-head span.arrow-up:before {
      content: "\f0d7"; }
  #product-accordion .panel .panel-heading a span.arrow-up {
    display: block;
    position: absolute;
    right: 0;
    top: -2px;
    cursor: pointer;
    z-index: 10;
    font-size: 0;
    text-align: center; }
    #product-accordion .panel .panel-heading a span.arrow-up:before {
      content: "\f0d8";
      font-family: "FontAwesome";
      display: block;
      vertical-align: middle;
      width: 30px;
      height: 30px;
      line-height: 30px;
      font-size: 14px; }
  #product-accordion .panel .panel-heading:hover {
    border-bottom-color: <?php echo $tema['t37'];?>; }
  #product-accordion .panel .panel-heading:hover a {
    color: <?php echo $tema['t37'];?>; }
  #product-accordion .panel:first-child .panel-heading {
    padding-top: 10px; }
  #product-accordion .panel:last-child .panel-heading {
    border-bottom: 0; }
  #product-accordion .panel-heading + .panel-collapse > .list-group, #product-accordion .panel-heading + .panel-collapse > .panel-body {
    border-top: 1px dotted <?php echo $tema['t37'];?>;
    margin-top: -1px;
    padding: 0; }

.related {
  clear: both; }
  .related .modtitle {
    text-transform: uppercase;
    color: #222;
    font-size: 18px;
    font-weight: 600; }
  .related .owl2-carousel .owl2-stage-outer {
    direction: ltr; }
  .related .releate-products .owl2-nav {
    position: absolute;
    top: -45px;
    width: 60px;
    right: -5px; }
  .related .releate-products .owl2-nav div {
    width: 20px;
    height: 27px;
    border: 1px solid #dfdfdf;
    margin: 0 5px;
    font-size: 0;
    float: left;
    background-color: transparent;
    transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
    position: relative;
    background-color: #fff; }
  .related .releate-products .owl2-nav div.owl2-prev {
    background: url(<?php echo $sitetemasi;?>/image/icon/next-prev-detail.png) no-repeat;
    background-position: -41px 0px; }
  .related .releate-products .owl2-nav div.owl2-prev:hover {
    border-color: <?php echo $tema['t37'];?>;
    background-color: <?php echo $tema['t37'];?>;
    background-position: -4px 0px;
    opacity: 1; }
  .related .releate-products .owl2-nav div.owl2-prev.disabled {
    display: none; }
  .related .releate-products .owl2-nav div.owl2-next {
    background: url(<?php echo $sitetemasi;?>/image/icon/next-prev-detail.png) no-repeat;
    background-position: -76px 0px; }
  .related .releate-products .owl2-nav div.owl2-next:hover {
    border-color: <?php echo $tema['t37'];?>;
    background-color: <?php echo $tema['t37'];?>;
    background-position: -112px 0px;
    opacity: 1; }
  .related .releate-products .owl2-nav div.owl2-next.disabled {
    display: none; }
  .related .owl-dots {
    display: none; }

.zoomContainer {
  z-index: 90; }

.image_option_type .selected-option {
  padding-left: 0;
  display: inline;
  text-transform: capitalize; }

.image_option_type .radio input[type=radio].image_radio {
  display: none; }

.image_option_type .radio {
  padding-left: 0;
  display: inline; }

.product-description .product-options img.icon-color {
  width: 20px;
  padding: 0; }

.product-options label {
  padding: 0;
  color: #666; }
  .product-options .label {
    font-weight: normal;
    font-size: 11px; }
  .product-options .radio {
    position: relative;
    z-index: 2;
    text-transform: capitalize;
    cursor: pointer; }
  .product-options .radio .fa {
    display: none; }
  .product-options .active .fa {
    display: block; }
  .product-options .fa {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    width: 22px;
    height: 22px;
    color: white;
    line-height: 22px;
    text-align: center; }

.slider-products .content-aside {
  width: 100%;
  padding: 0; }
  .slider-products .four-block {
    padding: 0; }
  .slider-products .policy-detail {
    box-shadow: none; }
  .slider-products .policy-detail .banner-policy {
    padding: 0; }
  .slider-products .policy-detail .banner-policy .policy {
    float: none;
    width: 100%;
    font-size: 12px;
    border: none;
    border-bottom: 1px solid white;
    padding: 25px 10px; }

.banner-policy {
  background-color: #eee;
  text-transform: uppercase; }
  .banner-policy .policy {
    border-bottom: 1px solid #fff;
    line-height: 19px;
    padding: 20px 10px; }
  .banner-policy .policy a {
    color: #666; }
  .banner-policy .policy a span {
    margin-right: 10px; }
  .banner-policy .policy a:hover {
    color: <?php echo $tema['t37'];?>; }
  .banner-policy .policy.policy1 a span {
    background: url("<?php echo $sitetemasi;?>/image/icons/policy_1.png") no-repeat;
    background-position: center 0;
    width: 48px;
    height: 36px;
    font-size: 0;
    float: left; }
  .banner-policy .policy.policy2 a span {
    background: url("<?php echo $sitetemasi;?>/image/icons/ico-freeship.png") no-repeat;
    background-position: center 0;
    width: 53px;
    height: 35px;
    font-size: 0;
    float: left; }
  .banner-policy .policy.policy3 a span {
    background: url("<?php echo $sitetemasi;?>/image/icons/ico-celander.png") no-repeat;
    background-position: center 0;
    width: 34px;
    height: 34px;
    font-size: 0;
    float: left; }
  .banner-policy .policy.policy4 a span {
    background: url("<?php echo $sitetemasi;?>/image/icons/ico-umbrella.png") no-repeat;
    background-position: center 0;
    width: 34px;
    height: 34px;
    font-size: 0;
    float: left; }

.slider-products .banner-policy .policy.policy1 a span, .slider-products .banner-policy .policy.policy2 a span, .slider-products .banner-policy .policy.policy3 a span, .slider-products .banner-policy .policy.policy4 a span {
  width: 53px; }

.id3-item {
  display: none; }

header #sosearchpro .dropdown-menu {
  opacity: 1;
  visibility: visible;
  margin-top: 0; }

.navbar-compact .hidden-compact {
  display: none; }

header .navbar-default {
  background-color: transparent; }
  header .navbar-default .megamenu-wrapper {
    background-color: transparent; }
  header ul.megamenu > li > a {
    text-shadow: unset; }

.shopping_cart .btn-view-cart:hover {
  color: #fff; }

.shopping_cart .fa-check-circle {
  display: none; }

#header #sosearchpro.so-search .searchbox .select_category select:hover {
  cursor: pointer; }

.dropdown-menu.shoppingcart-box .table {
  margin-bottom: 0; }
  .dropdown-menu.shoppingcart-box .table .btn-danger {
    background-color: transparent; }
  .dropdown-menu.shoppingcart-box .table .btn-danger i {
    color: #666; }
  .dropdown-menu.shoppingcart-box .table .btn-danger:hover i {
    color: <?php echo $tema['t37'];?>; }

header #sosearchpro .dropdown-menu {
  border-radius: 0; }

header ul.top-link > li.language .btn-link img {
  margin-top: -1px; }
/*============ HEADER  ==================*/
.common-home .horizontal ul.megamenu > li.home > a {
  background: transparent;
  color: <?php echo $tema['t37'];?>; }

.container-megamenu.horizontal ul.megamenu > li.active > a, .container-megamenu.horizontal ul.megamenu > li:hover > a {
  background-color: transparent;
  color: <?php echo $tema['t37'];?>; }
  .container-megamenu.horizontal .subcategory li a {
    color: #555; }
  .container-megamenu.horizontal .subcategory li a:hover {
    color: <?php echo $tema['t37'];?>; }

.header-top .header-top-left .welcome-msg .owl2-carousel .owl2-stage-outer {
  direction: ltr; }

.mega-horizontal .navbar-default {
  border: none;
  background: transparent; }

@media (max-width: 991px) {
  .responsive ul.megamenu > li.click:before, .responsive ul.megamenu > li.hover:before {
    right: 0;
    left: auto; }

  .responsive ul.megamenu > li.active .close-menu {
    right: 0;
    left: auto; } }

.header-bottom .content_menu .container {
  overflow: visible; }

.btn-shopping-cart .dropdown-menu {
  min-width: 320px; }
  .btn-shopping-cart .dropdown-menu .cart_product_name {
    color: #555; }
  .btn-shopping-cart .dropdown-menu .cart_product_name:hover {
    color: <?php echo $tema['t37'];?>; }
  .btn-shopping-cart .dropdown-menu .empty {
    padding: 15px;
    margin: 0; }
  .btn-shopping-cart .table > tbody > tr > td {
    border: none;
    border-bottom: 1px solid #eee;
    vertical-align: middle; }
  .btn-shopping-cart .checkout {
    padding: 0 20px 10px; }
  .btn-shopping-cart .added_items {
    padding: 10px; }

.megamenu-style-dev {
  position: relative; }
  .megamenu-style-dev .vertical ul.megamenu {
    position: absolute;
    width: 100%;
    background: #222;
    z-index: 99; }
  .megamenu-style-dev .vertical ul.megamenu > li > a {
    font-size: 11px; }
  .megamenu-style-dev .vertical .vertical ul.megamenu > li {
    margin: 0;
    border-right: 0;
    background: #222; }
  .megamenu-style-dev .vertical .vertical ul.megamenu > li strong i {
    display: none; }
  .megamenu-style-dev .vertical .vertical ul.megamenu > li > a {
    padding-left: 15px;
    padding-right: 12px;
    color: #fff; }
  .megamenu-style-dev .vertical .vertical ul.megamenu > li > a:hover {
    color: #fff; }
  .megamenu-style-dev .vertical .vertical ul.megamenu > li.css-menu .sub-menu .content {
    padding: 0; }
  .megamenu-style-dev .vertical .vertical ul.megamenu > li.css-menu .hover-menu .menu > ul {
    padding: 0;
    margin: 0; }
    .megamenu-style-dev .vertical .vertical ul.megamenu > li.css-menu .hover-menu .menu > ul li {
      border-bottom: 1px solid #eee; }
    .megamenu-style-dev .vertical .vertical ul.megamenu > li.css-menu .hover-menu .menu > ul li:hover {
      background: #eee; }
    .megamenu-style-dev .vertical .vertical ul.megamenu > li.css-menu .hover-menu .menu > ul li:hover > a {
      color: <?php echo $tema['t37'];?>; }
    .megamenu-style-dev .vertical .vertical ul.megamenu > li.css-menu .hover-menu .menu > ul li a {
      line-height: 37px; }
    .megamenu-style-dev .vertical .vertical ul.megamenu > li.css-menu .hover-menu .menu > ul li a b {
      line-height: 37px;
      font-size: 16px;
      margin: 0 20px; }
    .megamenu-style-dev .vertical .vertical ul.megamenu > li.css-menu .hover-menu .menu > ul li:last-child {
      border: none; }
    .megamenu-style-dev .vertical .vertical ul.megamenu > li.css-menu .hover-menu .menu > ul ul {
      padding: 0;
      left: 100%;
      margin: 0;
      box-shadow: none;
      border: 1px solid #eee;
      min-width: 200px; }
    .megamenu-style-dev .vertical .vertical ul.megamenu > li.css-menu .hover-menu .menu > ul ul:before, .megamenu-style-dev .vertical .vertical ul.megamenu > li.css-menu .hover-menu .menu > ul ul:after {
      display: none; }
  .megamenu-style-dev .vertical .vertical ul.megamenu > li.item-style3 .sub-menu .content {
    padding-right: 0; }
  .megamenu-style-dev .vertical .vertical ul.megamenu > li.with-sub-menu > a:after {
    content: "\f105";
    color: #fff;
    font-family: Fontawesome;
    font-size: 13px;
    float: right;
    margin: 0; }
  .megamenu-style-dev .vertical .vertical ul.megamenu > li.with-sub-menu:hover > a:after {
    position: static;
    border-color: transparent; }
  .megamenu-style-dev .vertical .vertical ul.megamenu > li:hover {
    background-color: #444; }
  .megamenu-style-dev .vertical .vertical ul.megamenu > li:hover > a {
    color: #fff; }
  .megamenu-style-dev .vertical .vertical ul.megamenu > li.active > a {
    background: transparent !important; }
  .megamenu-style-dev .vertical .vertical ul.megamenu > li .sub-menu .content {
    border-top: 1px solid #ddd; }
  .megamenu-style-dev .vertical .vertical ul.megamenu > li .sub-menu .content .banner {
    margin-top: -21px;
    margin-bottom: -22px;
    margin-right: -1px; }
  .megamenu-style-dev .vertical .vertical ul.megamenu > li .sub-menu .content .static-menu .menu ul a.main-menu {
    padding: 0; }
  .megamenu-style-dev .vertical ul.megamenu .sub-menu .content .static-menu .menu ul {
    padding-bottom: 0; }
  .megamenu-style-dev .vertical ul.megamenu .sub-menu .content .static-menu .menu ul li > a {
    line-height: inherit;
    padding-bottom: 0;
    border-bottom: none;
    min-height: auto; }
  .megamenu-style-dev .vertical ul.megamenu .sub-menu .content .static-menu .menu ul li > a:hover {
    color: <?php echo $tema['t37'];?>; }
  .megamenu-style-dev .vertical ul.megamenu .sub-menu .content .static-menu .menu ul ul a {
    padding: 0; }
  .megamenu-style-dev .vertical ul.megamenu .sub-menu .content .static-menu .menu ul ul a:hover {
    color: <?php echo $tema['t37'];?>; }

.container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container {
  background-color: <?php echo $tema['t37'];?>; }
/*======================================================*/
header ul.top-link > li .btn-group .btn-link:hover, header ul.top-link > li > a:hover {
  color: <?php echo $tema['t37'];?>; }

.typeheader-1 #sosearchpro .search button:hover {
  background-color: #cc4b00; }

.typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .icon-c i {
  color: <?php echo $tema['t37'];?>; }

.typeheader-1 .welcome-msg span {
  color: <?php echo $tema['t37'];?>; }
/*.typeheader-1 .wishlist-comp li a.top-link-wishlist:hover:before,
 .typeheader-1 .wishlist-comp li a:hover i{
 color: $linkColor;
 }*/
.common-home .typeheader-2 .container-megamenu.horizontal ul.megamenu > li.home > a {
  color: <?php echo $tema['t37'];?>; }

.typeheader-2 .container-megamenu.horizontal ul.megamenu > li:hover > a, .typeheader-2 .container-megamenu.horizontal ul.megamenu > li.active > a, .typeheader-2 .container-megamenu.horizontal ul.megamenu > li.menu_active > a {
  color: <?php echo $tema['t37'];?>; }

.typeheader-2 #sosearchpro .search button {
  background-color: <?php echo $tema['t37'];?>; }
  .typeheader-2 #sosearchpro .search button:hover {
    background-color: #cc4b00; }

.typeheader-2 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_cart {
  background-color: <?php echo $tema['t37'];?>; }

.typeheader-2 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_carts {
  color: <?php echo $tema['t37'];?>; }

.typeheader-2 .container-megamenu.horizontal ul.megamenu > li.item-special > a, .typeheader-2 .telephone ul li i {
  color: <?php echo $tema['t37'];?>; }

.typeheader-3 .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container {
  background-color: <?php echo $tema['t37'];?>; }

.common-home .typeheader-3 .container-megamenu.horizontal ul.megamenu > li.home > a {
  color: <?php echo $tema['t37'];?>; }

.typeheader-3 .container-megamenu.horizontal ul.megamenu > li:hover > a, .typeheader-3 .container-megamenu.horizontal ul.megamenu > li.active > a, .typeheader-3 .container-megamenu.horizontal ul.megamenu > li.menu_active > a {
  color: <?php echo $tema['t37'];?>; }

.typeheader-3 #sosearchpro .search button {
  background-color: <?php echo $tema['t37'];?>; }
  .typeheader-3 #sosearchpro .search button:hover {
    background-color: #cc4b00; }

.typeheader-3 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_cart {
  background-color: <?php echo $tema['t37'];?>; }

.typeheader-3 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_carts {
  color: <?php echo $tema['t37'];?>; }

.typeheader-3 .container-megamenu.horizontal ul.megamenu > li.item-special > a, .typeheader-3 .telephone ul li i {
  color: <?php echo $tema['t37'];?>; }

@media (max-width: 991px) {
  .typeheader-2 .header-bottom {
    background-color: <?php echo $tema['t37'];?>; }

  body .typeheader-3 .header-bottom {
    background-color: <?php echo $tema['t37'];?>; }

  .megamenu-style-dev .navbar-default .vertical .vertical-wrapper ul.megamenu > li > a:hover strong, .megamenu-style-dev .navbar-default .horizontal .megamenu-wrapper ul.megamenu > li > a:hover {
    color: <?php echo $tema['t37'];?> !important; } }

footer #collapse-footer {
  display: block; }

.footer-container {
  clear: both; }

footer .so-page-builder .container {
  padding: 0 15px; }

footer .copyright a {
  color: <?php echo $tema['t37'];?>; }

footer a:hover {
  color: <?php echo $tema['t37'];?>; }

.typefooter-1 .footer-top {
  background-color: <?php echo $tema['t37'];?>; }

.typefooter-1 .footer-links li a:hover, .typefooter-1 .socials li a:hover, .typefooter-1 .footer-middle .footer-links li a:hover {
  color: <?php echo $tema['t37'];?>; }

.typefooter-1 .newsletter-footer1 .newsletter .block_content form.signup .subcribe button:hover {
  background-color: background; }

.typefooter-1 .module .modtitle:after {
  background-color: <?php echo $tema['t37'];?>; }

.typefooter-2 .footer-links li a:hover, .typefooter-2 .socials li a:hover, .typefooter-2 .footer-middle .footer-links li a:hover {
  color: <?php echo $tema['t37'];?>; }

.typefooter-2 .newsletter-footer1 .newsletter .block_content form.signup .subcribe button:hover {
  background-color: background; }

.typefooter-2 .newsletter-footer1 .newsletter .title-block .page-heading::after, .typefooter-2 .module .modtitle:after {
  background-color: <?php echo $tema['t37'];?>; }

.typefooter-3 .newsletter-footer4 .newsletter .block_content form.signup .subcribe button:hover {
  background-color: <?php echo $tema['t37'];?>; }

.typefooter-3 .categories-footer a:hover, .typefooter-3 .footer-links li a:hover {
  color: <?php echo $tema['t37'];?>; }

.typefooter-3 .module .modtitle:after {
  background-color: <?php echo $tema['t37'];?>; }

.typefooter-3 .infos-footer ul li:hover i {
  background-color: <?php echo $tema['t37'];?>; }
/*===============================================
 [SASS DIRECTORY ]
 [1] 
 ==============================================*/
/*===============================*/
.common-home #content {
  margin-bottom: 33px; }

.sohomepage-slider .so-homeslider {
  border: none;
  z-index: 0; }

.container-fluid .container {
  padding-left: 15px;
  padding-right: 15px; }

#main-content, #content {
  margin-bottom: 30px; }

.common-home a:hover {
  color: <?php echo $tema['t37'];?>; }
/*====================== mod title ========================*/
.layout-1.common-home #content {
  margin-bottom: 0; }
  .layout-1.common-home #content .content-main-w {
    clear: both; }
  .layout-1.common-home #content .price .price-old {
    padding: 0; }
  .layout-1.common-home #content .label-product-new, .layout-1.common-home #content .label-product-sale {
    text-align: center;
    background-color: <?php echo $tema['t37'];?>;
    border-radius: 50%;
    color: #333;
    display: block;
    /* [4] */
    /* [6] */
    /* [6] */
    /* [7] */
    font-size: 12px;
    font-size: 1.2rem;
    /* [8] */
    font-weight: 600;
    height: 38px;
    width: 38px;
    line-height: 38px;
    position: absolute;
    top: 10px;
    text-transform: uppercase;
    z-index: 2;
    padding: 0;
    margin-bottom: 5px; }
  .layout-1.common-home #content .label-product-sale {
    background-color: #ffd839;
    right: 20px; }
  .layout-1.common-home #content .label-product-new {
    background-color: #53d542;
    left: 20px; }
  .layout-1.common-home #content .main-right .module.product-simple {
    border: 1px solid #e9ecf1;
    border-radius: 5px; }
  .layout-1.common-home #content .main-right .module.product-simple h3.modtitle {
    background-color: #e9ecf1;
    border: none;
    display: inline-flex;
    width: 100%;
    position: relative;
    margin-top: 0;
    margin-bottom: 0; }
  .layout-1.common-home #content .main-right .module.product-simple h3.modtitle:after {
    display: none; }
  .layout-1.common-home #content .main-right .module.product-simple h3.modtitle span {
    font-size: 14px;
    color: #fff;
    font-weight: 600;
    float: left;
    text-transform: uppercase;
    background-color: transparent;
    bottom: 0;
    color: #222; }
  .layout-1.common-home #content .main-right .module.product-simple .modcontent {
    padding-top: 4px;
    padding-bottom: 4px; }
  .layout-1.common-home #content .main-right .module div.modtitle {
    border-bottom: 2px solid #eee;
    display: inline-block;
    width: 100%;
    position: relative;
    margin-top: 0;
    margin-bottom: 10px; }
  .layout-1.common-home #content .main-right .module div.modtitle:after {
    position: absolute;
    content: "";
    width: 110px;
    height: 2px;
    background-color: <?php echo $tema['t37'];?>;
    bottom: -2px;
    left: 0; }
  .layout-1.common-home #content .main-right .module div.modtitle span {
    font-size: 20px;
    color: #333;
    font-weight: 700;
    float: left;
    text-transform: uppercase;
    margin-bottom: 4px;
    background-color: transparent;
    padding: 0;
    padding-bottom: 4px;
    padding-top: 2px;
    bottom: 0; }
  .layout-1.common-home #content .main-right .module h3.modtitle {
    border-bottom: 2px solid #eee;
    display: inline-block;
    width: 100%;
    position: relative;
    margin-top: 0;
    margin-bottom: 30px; }
  .layout-1.common-home #content .main-right .module h3.modtitle:after {
    display: none; }
  .layout-1.common-home #content .main-right .module h3.modtitle span {
    font-size: 16px;
    color: #fff;
    font-weight: 600;
    float: left;
    text-transform: uppercase;
    margin-bottom: 0px;
    background-color: #232f3e;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
    padding: 11px 20px;
    position: relative;
    bottom: -2px; }
  .layout-1.common-home #content .main-left .module h3.modtitle {
    border-bottom: 2px solid #eee;
    display: inline-block;
    width: 100%;
    position: relative;
    margin-top: 0;
    margin-bottom: 15px; }
  .layout-1.common-home #content .main-left .module h3.modtitle:after {
    position: absolute;
    content: "";
    width: 110px;
    height: 2px;
    background-color: <?php echo $tema['t37'];?>;
    bottom: -2px;
    left: 0; }
  .layout-1.common-home #content .main-left .module h3.modtitle span {
    font-size: 16px;
    color: #222;
    font-weight: 600;
    float: left;
    text-transform: uppercase;
    margin-bottom: 5px;
    background-color: transparent;
    padding: 0;
    padding-bottom: 5px;
    bottom: 0; }
/*.box-content1{
 margin-bottom: 30px;
 }*/
/************************************************************************************************
 MODULE HOME SLIDER  
 *************************************************************************************************/
.sohomepage-slider .so-homeslider .owl2-nav div::before, .sohomepage-slider .so-homeslider .owl2-nav div:hover:before {
  background-color: transparent !important; }

.module.sohomepage-slider {
  margin: 0;
  z-index: 0; }
  .module.sohomepage-slider .owl2-carousel .owl2-stage-outer {
    direction: ltr; }
  .module.sohomepage-slider .form-group {
    margin-bottom: 0; }
  .module.sohomepage-slider .so-homeslider {
    border: none;
    display: block; }
  .module.sohomepage-slider .so-homeslider img {
    width: auto; }
  .module.sohomepage-slider .owl2-controls {
    height: 0; }
  .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-next, .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-prev {
    font-size: 0px;
    z-index: 99;
    width: 45px;
    height: 42px;
    line-height: 42px;
    text-align: center;
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    top: 50%;
    margin-top: -34px;
    text-indent: -999em;
    display: block;
    background-color: rgba(0, 0, 0, 0.3);
    border: none; }
  .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-next:after, .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-prev:after {
    display: none; }
  .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-next:before, .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-prev:before {
    font-size: 20px;
    color: #fff;
    font-family: 'FontAwesome';
    display: block;
    text-indent: 0 !important; }
  .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-next:hover, .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-prev:hover {
    background-color: <?php echo $tema['t37'];?>; }
  .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-next {
    right: -3px;
    left: auto; }
  .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-next:before {
    content: "\f105"; }
  .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-prev {
    left: -3px;
    right: auto; }
  .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-prev:before {
    content: "\f104"; }
  .module.sohomepage-slider .owl2-controls .owl2-dots {
    position: static;
    left: auto;
    right: auto;
    width: 100%;
    display: inline-block;
    text-align: center;
    position: relative;
    top: -35px;
    z-index: 10; }
  .module.sohomepage-slider .owl2-controls .owl2-dots .owl2-dot {
    background: #fff;
    margin: 0 5px;
    width: 30px;
    height: 6px;
    padding: 0;
    transition: all 0.3s ease 0s;
    border-radius: 3px;
    float: none;
    display: inline-block; }
  .module.sohomepage-slider .owl2-controls .owl2-dots .owl2-dot span {
    background: #fff;
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    margin: 0; }
  .module.sohomepage-slider .owl2-controls .owl2-dots .owl2-dot:hover, .module.sohomepage-slider .owl2-controls .owl2-dots .owl2-dot.active {
    background: <?php echo $tema['t37'];?>; }
    .module.sohomepage-slider .owl2-controls .owl2-dots .owl2-dot:hover span, .module.sohomepage-slider .owl2-controls .owl2-dots .owl2-dot.active span {
      box-shadow: none;
      -webkit-box-shadow: none;
      background: <?php echo $tema['t37'];?>; }
/************************************************************************************************
 SHORTCODE HTML 
 *************************************************************************************************/
.banners3 {
  margin: 0 -5px 30px -5px;
  display: inline-block; }
  .banners3 img {
    width: 100%; }
  .banners3 .item1, .banners3 .item3 {
    width: 25.9%;
    float: left;
    padding: 0 5px; }
  .banners3 .item2 {
    width: 48.2%;
    float: left;
    padding: 0 5px; }

.banners4 {
  margin-bottom: 28px; }

.banners5 {
  margin-bottom: 30px; }

.banners2 {
  margin-bottom: 45px;
  margin-top: 30px; }
/*=== slider testimonials ===*/
.testimonials {
  margin-top: 20px;
  margin-bottom: 50px; }

.slider-testimonials {
  border: 1px solid #e9ecf1;
  border-radius: 5px;
  margin-top: 5px;
  text-align: center; }
  .slider-testimonials .contentslider {
    padding: 30px 0;
    direction: ltr; }
  .slider-testimonials .contentslider .item .img img {
    border-radius: 50%;
    border: 3px solid <?php echo $tema['t37'];?>; }
  .slider-testimonials .contentslider .name {
    font-size: 14px;
    color: #333;
    font-weight: 600;
    margin: 10px 0 5px 0; }
  .slider-testimonials .contentslider p {
    color: #777;
    position: relative;
    overflow: hidden;
    padding: 0 30px;
    margin: 0; }
  .slider-testimonials .contentslider p:before {
    position: absolute;
    top: 0;
    left: 10px;
    content: "\f10d";
    font-family: FontAwesome;
    font-size: 24px;
    color: #eee; }
  .slider-testimonials .contentslider p:after {
    position: absolute;
    bottom: 0;
    right: 10px;
    content: "\f10e";
    font-family: FontAwesome;
    font-size: 24px;
    color: #eee; }
  .slider-testimonials .contentslider .owl2-dots {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 80px;
    position: static;
    text-align: center; }
  .slider-testimonials .contentslider .owl2-dots .owl2-dot {
    width: 8px;
    height: 8px;
    border-radius: 8px;
    background-color: #222;
    margin: 0 5px;
    display: inline-block;
    float: none;
    opacity: 1;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s; }
  .slider-testimonials .contentslider .owl2-dots .owl2-dot span {
    display: none; }
  .slider-testimonials .contentslider .owl2-dots .owl2-dot:hover {
    background-color: <?php echo $tema['t37'];?>; }
  .slider-testimonials .contentslider .owl2-dots .owl2-dot.active {
    width: 30px;
    background-color: <?php echo $tema['t37'];?>; }
/*== static cates ==*/
.static-cates {
  margin-top: 30px;
  margin-bottom: 45px;
  display: inline-block; }
  .static-cates ul {
    margin: 0 -15px; }
  .static-cates ul li {
    padding: 0 15px;
    float: left;
    width: 20%; }
  .static-cates ul li a {
    display: block;
    position: relative; }
  .static-cates ul li a:before {
    background-color: rgba(0, 0, 0, 0.2);
    content: "";
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
    position: absolute;
    visibility: hidden;
    -webkit-opacity: 0;
    -moz-opacity: 0;
    -ms-opacity: 0;
    -o-opacity: 0;
    opacity: 0;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s;
    z-index: 1; }
  .static-cates ul li a:hover:before {
    visibility: visible;
    -webkit-opacity: 1;
    -moz-opacity: 1;
    -ms-opacity: 1;
    -o-opacity: 1;
    opacity: 1;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s; }
  .static-cates ul li a:before {
    border-radius: 5px; }
/*== block policy ==*/
.policy-w {
  margin-top: 40px; }
  .policy-w > a:hover img {
    opacity: 0.8; }

.block-infos {
  border: 1px solid #ebebeb;
  border-radius: 3px;
  padding: 0 20px;
  margin-bottom: 40px; }
  .block-infos li {
    border-top: 1px solid #ebebeb;
    display: inline-block;
    width: 100%; }
  .block-infos li:first-child {
    border-top: none; }
  .block-infos li .inner {
    padding: 25px 0;
    font-size: 13px; }
  .block-infos li .inner i {
    font-size: 36px;
    padding-top: 5px;
    width: 50px;
    float: left;
    margin-right: 0px;
    color: <?php echo $tema['t37'];?>; }
  .block-infos li .inner .info-cont a {
    color: #333;
    text-transform: uppercase;
    font-weight: 600; }
    .block-infos li .inner .info-cont a:hover {
      color: <?php echo $tema['t37'];?>; }
  .block-infos li .inner .info-cont p {
    color: #999;
    text-transform: capitalize;
    margin-top: 3px;
    line-height: 100%;
    margin-bottom: 0; }
  .block-infos li .inner:hover {
    cursor: pointer; }
  .block-infos li .inner:hover i {
    color: <?php echo $tema['t37'];?>; }
  .block-infos li .inner:hover .info-cont a {
    color: <?php echo $tema['t37'];?>;
    font-weight: 700; }
/************************************************************************************************
 MODULE EXTRA SLIDER
 *************************************************************************************************/
.main-left .so-extraslider .owl2-dots {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 80px;
  position: static;
  text-align: center; }
  .main-left .so-extraslider .owl2-dots .owl2-dot {
    width: 8px;
    height: 8px;
    border-radius: 8px;
    background-color: #222;
    margin: 0 5px;
    display: inline-block;
    float: none;
    opacity: 1;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s; }
  .main-left .so-extraslider .owl2-dots .owl2-dot span {
    display: none; }
  .main-left .so-extraslider .owl2-dots .owl2-dot:hover {
    background-color: <?php echo $tema['t37'];?>; }
  .main-left .so-extraslider .owl2-dots .owl2-dot.active {
    width: 30px;
    background-color: <?php echo $tema['t37'];?>; }

.main-right .so-extraslider .extraslider-inner {
  margin: 0 0 4px 0; }
  .main-right .so-extraslider .owl2-dots {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 80px;
    top: 7px;
    right: 0px; }
  .main-right .so-extraslider .owl2-dots .owl2-dot {
    width: 8px;
    height: 8px;
    border-radius: 8px;
    background-color: #222;
    margin: 0 5px;
    display: inline-block;
    float: none;
    opacity: 1;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s; }
  .main-right .so-extraslider .owl2-dots .owl2-dot span {
    display: none; }
  .main-right .so-extraslider .owl2-dots .owl2-dot:hover {
    background-color: <?php echo $tema['t37'];?>; }
  .main-right .so-extraslider .owl2-dots .owl2-dot.active {
    width: 30px;
    background-color: <?php echo $tema['t37'];?>; }

.module .so-extraslider .extraslider-inner {
  margin: 0; }

.common-home .product-simple {
  position: relative; }
  .common-home .product-simple .owl2-carousel .owl2-stage-outer {
    direction: ltr; }
  .common-home .product-simple .so-extraslider {
    margin: 0; }
  .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav {
    position: static; }
  .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev, .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next {
    background-color: #fff;
    border: none;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    width: 28px;
    height: 28px;
    line-height: 26px;
    text-align: center;
    float: left;
    text-indent: -9999px;
    overflow: hidden;
    cursor: pointer;
    opacity: 1;
    z-index: 99;
    font-size: 18px;
    position: absolute;
    top: 50%;
    margin-top: -14px;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s;
    font-weight: 400; }
    .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev:before, .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next:before {
      color: #e9e9e9;
      font-family: 'FontAwesome';
      display: block;
      text-indent: 0 !important;
      width: 100%;
      height: 100%;
      font-size: 18px; }
    .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev.owl2-next, .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next.owl2-next {
      right: -14px;
      left: auto;
      -webkit-box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75);
      -moz-box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75);
      box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75); }
    @media (max-width: 767px) {
          .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev.owl2-next, .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next.owl2-next {
            right: 0; } }
    .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev.owl2-next:before, .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next.owl2-next:before {
      content: "\f105"; }
    .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev.owl2-prev, .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next.owl2-prev {
      left: -14px;
      right: auto;
      -webkit-box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75);
      -moz-box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75);
      box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75); }
    @media (max-width: 767px) {
          .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev.owl2-prev, .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next.owl2-prev {
            left: 0; } }
    .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev.owl2-prev:before, .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next.owl2-prev:before {
      content: "\f104"; }
    .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev:hover, .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next:hover {
      background-color: #c3c3c3;
      box-shadow: none; }
    .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev:hover:before, .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next:hover:before {
      color: #fff; }
  .common-home .product-simple .so-extraslider .extraslider-inner {
    position: static; }
  .common-home .product-simple .so-extraslider .extraslider-inner .item {
    padding-top: 0;
    border: none; }
  .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner {
    display: inline-block;
    padding-bottom: 10px;
    margin-bottom: 11px;
    width: 100%; }
    .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner:last-child {
      border-bottom: none;
      margin-bottom: 0; }
    .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image {
      width: 80px;
      float: left;
      position: relative; }
    .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image .so-quickview {
      display: none; }
    .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image .so-quickview .btn-button {
      border: none;
      display: inline-block;
      margin-top: 0;
      padding: 0;
      background-color: #666;
      border-radius: 3px;
      color: #fff;
      width: 30px;
      height: 30px;
      line-height: 30px;
      transform: all 0.3s ease 0s;
      text-align: center;
      position: absolute;
      top: 50%;
      margin-top: -15px;
      left: 50%;
      margin-left: -15px;
      -webkit-transform: scale(0);
      -moz-transform: scale(0);
      -ms-transform: scale(0);
      -o-transform: scale(0);
      transform: scale(0);
      opacity: 0;
      transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -webkit-transition: all 0.2s ease-in-out 0s; }
      .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image .so-quickview .btn-button span {
        display: none; }
      .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image .so-quickview .btn-button i, .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image .so-quickview .btn-button:before {
        font-size: 12px;
        color: #fff;
        height: 30px;
        line-height: 30px;
        text-align: center; }
      .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image .so-quickview .btn-button:hover {
        background-color: <?php echo $tema['t37'];?>; }
    .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info {
      text-align: left;
      margin-top: 0px;
      margin-left: 95px; }
    .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .price {
      margin-bottom: 3px; }
    .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .rating, .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .ratings {
      margin-bottom: 0; }
    .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .item-title {
      line-height: 100%;
      margin-bottom: 5px;
      padding: 0; }
    .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .item-title a {
      font-size: 13px;
      color: #333;
      font-weight: 500;
      text-transform: capitalize;
      line-height: 18px; }
      .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .item-title a:hover {
        color: <?php echo $tema['t37'];?>; }
    .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner:hover .item-image .so-quickview .btn-button {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1);
      opacity: 1;
      transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -webkit-transition: all 0.2s ease-in-out 0s; }

.so-extraslider .products-list .product-grid .product-item-container {
  margin: 0; }
/************************************************************************************************
 MODULE DEALS
 *************************************************************************************************/
.so-deal .extraslider-inner {
  border: none; }

.deals-layout1 {
  position: relative; }
  .deals-layout1 .viewall {
    float: right;
    color: #464646;
    margin-right: 15px;
    position: relative;
    font-size: 13px;
    margin-top: 5px; }
  .deals-layout1 .viewall:after {
    position: absolute;
    content: "\f0da";
    font-family: 'FontAwesome';
    margin-left: 5px; }
  .deals-layout1 .viewall:hover {
    color: <?php echo $tema['t37'];?>; }
  .deals-layout1 .owl2-carousel .owl2-stage-outer {
    direction: ltr; }
  .deals-layout1 .cslider-item-timer .product_time_maxprice .time-item {
    background-color: transparent;
    line-height: 100%;
    float: left;
    text-align: center;
    width: auto;
    margin-left: 16px; }
  .deals-layout1 .cslider-item-timer .product_time_maxprice .time-item .num-time {
    border: none;
    font-size: 18px;
    color: #fff;
    font-weight: 600;
    position: relative;
    padding: 0 10px;
    height: 25px;
    line-height: 25px;
    text-align: center;
    background-color: <?php echo $tema['t37'];?>;
    border-radius: 5px; }
    .deals-layout1 .cslider-item-timer .product_time_maxprice .time-item .num-time:after {
      position: absolute;
      content: ":";
      top: 0;
      right: -10px;
      color: <?php echo $tema['t37'];?>; }
  .deals-layout1 .cslider-item-timer .product_time_maxprice .time-item .name-time {
    display: none; }
  .deals-layout1 .cslider-item-timer .product_time_maxprice .time-item.time-sec .num-time:after {
    display: none; }
  .deals-layout1 .so-deal {
    margin: 0;
    margin-bottom: 30px; }
  .deals-layout1 .so-deal .owl2-nav {
    position: static; }
  .deals-layout1 .so-deal .owl2-nav .owl2-prev, .deals-layout1 .so-deal .owl2-nav .owl2-next {
    background-color: #fff;
    border: none;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    width: 44px;
    height: 44px;
    line-height: 42px;
    text-align: center;
    float: left;
    text-indent: -9999px;
    overflow: hidden;
    cursor: pointer;
    opacity: 1;
    z-index: 99;
    font-size: 24px;
    position: absolute;
    top: 50%;
    margin-top: -22px;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s;
    font-weight: 400; }
  .deals-layout1 .so-deal .owl2-nav .owl2-prev:before, .deals-layout1 .so-deal .owl2-nav .owl2-next:before {
    color: #aaa;
    font-family: 'FontAwesome';
    display: block;
    text-indent: 0 !important;
    width: 100%;
    height: 100%;
    font-size: 24px; }
  .deals-layout1 .so-deal .owl2-nav .owl2-prev.owl2-next, .deals-layout1 .so-deal .owl2-nav .owl2-next.owl2-next {
    right: -22px;
    left: auto;
    -webkit-box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75);
    -moz-box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75);
    box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75); }
    @media (max-width: 767px) {
        .deals-layout1 .so-deal .owl2-nav .owl2-prev.owl2-next, .deals-layout1 .so-deal .owl2-nav .owl2-next.owl2-next {
          right: 0; } }
    .deals-layout1 .so-deal .owl2-nav .owl2-prev.owl2-next:before, .deals-layout1 .so-deal .owl2-nav .owl2-next.owl2-next:before {
      content: "\f105"; }
  .deals-layout1 .so-deal .owl2-nav .owl2-prev.owl2-prev, .deals-layout1 .so-deal .owl2-nav .owl2-next.owl2-prev {
    left: -22px;
    right: auto;
    -webkit-box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75);
    -moz-box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75);
    box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75); }
    @media (max-width: 767px) {
        .deals-layout1 .so-deal .owl2-nav .owl2-prev.owl2-prev, .deals-layout1 .so-deal .owl2-nav .owl2-next.owl2-prev {
          left: 0; } }
    .deals-layout1 .so-deal .owl2-nav .owl2-prev.owl2-prev:before, .deals-layout1 .so-deal .owl2-nav .owl2-next.owl2-prev:before {
      content: "\f104"; }
  .deals-layout1 .so-deal .owl2-nav .owl2-prev:hover, .deals-layout1 .so-deal .owl2-nav .owl2-next:hover {
    background-color: <?php echo $tema['t37'];?>;
    box-shadow: none; }
    .deals-layout1 .so-deal .owl2-nav .owl2-prev:hover:before, .deals-layout1 .so-deal .owl2-nav .owl2-next:hover:before {
      color: #fff; }
  .deals-layout1 .so-deal .owl2-nav .owl2-prev, .deals-layout1 .so-deal .owl2-nav .owl2-next {
    top: 35%; }
  .deals-layout1 .so-deal .owl2-controls .owl2-dots {
    bottom: 20px;
    position: static;
    left: auto;
    right: auto;
    width: 100%;
    display: inline-block;
    text-align: center;
    position: relative;
    top: 0px;
    z-index: 10; }
  .deals-layout1 .so-deal .owl2-controls .owl2-dots .owl2-dot {
    background: #222 !important;
    margin: 0 5px;
    width: 30px;
    height: 6px;
    padding: 0;
    transition: all 0.3s ease 0s;
    border-radius: 3px;
    float: none;
    display: inline-block; }
    .deals-layout1 .so-deal .owl2-controls .owl2-dots .owl2-dot:hover, .deals-layout1 .so-deal .owl2-controls .owl2-dots .owl2-dot.active {
      background: <?php echo $tema['t37'];?> !important; }
    .deals-layout1 .so-deal .owl2-controls .owl2-dots .owl2-dot:hover span, .deals-layout1 .so-deal .owl2-controls .owl2-dots .owl2-dot.active span {
      box-shadow: none;
      -webkit-box-shadow: none;
      background: <?php echo $tema['t37'];?> !important; }
  .deals-layout1 .so-deal .extraslider-inner .product-thumb {
    margin: 0; }
  .deals-layout1 .so-deal .extraslider-inner .product-thumb .product-thumb .caption .item-time {
    margin: 0 -20px; }
  .deals-layout1 .so-deal .extraslider-inner .item .product-item-container {
    margin-bottom: 0; }
  .deals-layout1 .so-deal .extraslider-inner .item .rating {
    margin-bottom: 5px; }
  .deals-layout1 .so-deal .extraslider-inner .item .image {
    position: relative;
    overflow: hidden;
    margin: 0; }
    .deals-layout1 .so-deal .extraslider-inner .item .image a.img-link {
      position: relative;
      display: block;
      border-radius: 3px; }
    .deals-layout1 .so-deal .extraslider-inner .item .image .label-product-new, .deals-layout1 .so-deal .extraslider-inner .item .image .label-product-sale {
      text-align: center;
      background-color: <?php echo $tema['t37'];?>;
      border-radius: 50%;
      color: #fff;
      display: block;
      /* [4] */
      /* [6] */
      /* [6] */
      /* [7] */
      font-size: 12px;
      font-size: 1.2rem;
      /* [8] */
      font-weight: 700;
      height: 40px;
      width: 40px;
      line-height: 40px;
      position: absolute;
      top: 20px;
      text-transform: uppercase;
      z-index: 2;
      padding: 0;
      margin-bottom: 5px; }
    .deals-layout1 .so-deal .extraslider-inner .item .image .label-product-sale {
      background-color: <?php echo $tema['t37'];?>;
      right: 20px; }
    .deals-layout1 .so-deal .extraslider-inner .item .image .label-product-new {
      background-color: #53d542;
      left: 20px; }
  .deals-layout1 .so-deal .extraslider-inner .item .item-time-w {
    clear: both;
    margin-top: 15px; }
    .deals-layout1 .so-deal .extraslider-inner .item .item-time-w .time-title {
      float: left;
      color: #222;
      width: 35%;
      margin-top: 5px; }
    .deals-layout1 .so-deal .extraslider-inner .item .item-time-w .time-title span {
      font-size: 20px;
      font-weight: 700;
      display: block;
      width: 100%; }
  .deals-layout1 .so-deal .extraslider-inner .item .item-timer {
    background-color: transparent; }
    .deals-layout1 .so-deal .extraslider-inner .item .item-timer .time-item {
      background-color: transparent;
      line-height: 100%;
      float: left;
      text-align: center;
      width: auto;
      margin-left: 10px; }
    .deals-layout1 .so-deal .extraslider-inner .item .item-timer .time-item .num-time {
      border: none;
      font-size: 14px;
      color: #222;
      font-weight: 700;
      position: relative;
      width: 40px;
      height: 40px;
      line-height: 40px;
      text-align: center;
      background-color: #eee;
      border-radius: 100%; }
    .deals-layout1 .so-deal .extraslider-inner .item .item-timer .time-item .name-time {
      color: #666;
      font-size: 10px;
      font-weight: 400;
      text-transform: uppercase;
      margin-top: 3px; }
    .deals-layout1 .so-deal .extraslider-inner .item .item-timer .time-item.time-sec .num-time:after {
      display: none; }
  .deals-layout1 .so-deal .extraslider-inner .item .item-available {
    text-align: center;
    margin-top: 7px; }
    .deals-layout1 .so-deal .extraslider-inner .item .item-available p {
      color: #222;
      margin-bottom: 0; }
    .deals-layout1 .so-deal .extraslider-inner .item .item-available .a2 b {
      font-size: 13px;
      color: <?php echo $tema['t37'];?>;
      font-weight: 600; }
  .deals-layout1 .so-deal .extraslider-inner .item .desc {
    margin-bottom: 22px; }
  .deals-layout1 .so-deal .extraslider-inner .item .available {
    background-color: #eee;
    height: 13px;
    width: 100%;
    display: inline-block;
    border-radius: 7px;
    position: relative;
    z-index: 2;
    overflow: hidden; }
    .deals-layout1 .so-deal .extraslider-inner .item .available .color_width {
      background: <?php echo $tema['t37'];?>;
      position: absolute;
      height: 100%;
      left: 0;
      border-top-left-radius: 7px;
      border-bottom-left-radius: 7px; }
  .deals-layout1 .so-deal .extraslider-inner .item:hover .product-thumb .image a.img-link:before {
    -webkit-opacity: 1;
    -moz-opacity: 1;
    -ms-opacity: 1;
    -o-opacity: 1;
    opacity: 1; }

.deals-layout1 {
  position: relative; }
  .deals-layout1 .so-deal {
    margin: 0; }
  .deals-layout1 .so-deal .extraslider-inner {
    border: none; }
/************************************************************************************************
 MODULE CATEGORY SLIDER
 *************************************************************************************************/
.container-slider .item-sub-cat ul li a {
  font-size: 14px;
  color: #666;
  font-weight: 500;
  line-height: 25px;
  padding-top: 12px;
  padding-left: 25px;
  padding-right: auto; }
  .container-slider .item-sub-cat ul li a:hover {
    color: <?php echo $tema['t37'];?>;
    font-weight: 500; }

.container-slider .categoryslider-content {
  margin-bottom: 5px; }

.so-category-slider.container-slider .owl2-carousel .owl2-stage-outer {
  direction: ltr; }
  .so-category-slider.container-slider .item-sub-cat {
    float: right; }
  .so-category-slider.container-slider .item-cat-image {
    width: 20%;
    border: none;
    height: auto; }
  .so-category-slider.container-slider .item-cat-image a {
    display: block;
    position: relative; }
  .so-category-slider.container-slider .item-cat-image a:before {
    background-color: rgba(0, 0, 0, 0.2);
    content: "";
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
    position: absolute;
    visibility: hidden;
    -webkit-opacity: 0;
    -moz-opacity: 0;
    -ms-opacity: 0;
    -o-opacity: 0;
    opacity: 0;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s;
    z-index: 1; }
  .so-category-slider.container-slider .item-cat-image a:hover:before {
    visibility: visible;
    -webkit-opacity: 1;
    -moz-opacity: 1;
    -ms-opacity: 1;
    -o-opacity: 1;
    opacity: 1;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s; }
  .so-category-slider.container-slider .item-cat-image a:before {
    border-radius: 5px; }
  .so-category-slider.container-slider .category-slider-inner {
    width: 80%;
    clear: none;
    padding: 0px 10px 0 10px; }
  .so-category-slider.container-slider.cateslider1 .item-cat-image {
    float: left; }
  .so-category-slider.container-slider.cateslider2 .item-cat-image {
    float: right; }
  .so-category-slider.container-slider .page-top {
    border-bottom: 2px solid #ddd8d8;
    display: inline-block;
    width: 100%;
    position: relative;
    margin-top: 0;
    margin-bottom: 0px !important; }
  .so-category-slider.container-slider .page-top .page-title-categoryslider {
    font-size: 18px;
    color: #fff;
    font-weight: 600;
    float: left;
    text-transform: uppercase;
    margin-bottom: 0px;
    background-color: <?php echo $tema['t37'];?>;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
    padding: 11px 25px;
    position: relative;
    bottom: -2px; 
    width: 100%;
}
  .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav {
    position: static; }
  .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-prev, .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-next {
    background-color: #fff;
    border: none;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    width: 44px;
    height: 44px;
    line-height: 42px;
    text-align: center;
    float: left;
    text-indent: -9999px;
    overflow: hidden;
    cursor: pointer;
    opacity: 1;
    z-index: 99;
    font-size: 24px;
    position: absolute;
    top: 50%;
    margin-top: -22px;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s;
    font-weight: 400; }
    .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-prev:before, .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-next:before {
      color: #aaa;
      font-family: 'FontAwesome';
      display: block;
      text-indent: 0 !important;
      width: 100%;
      height: 100%;
      font-size: 24px; }
    .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-prev.owl2-next, .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-next.owl2-next {
      right: -22px;
      left: auto;
      -webkit-box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75);
      -moz-box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75);
      box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75); }
    @media (max-width: 767px) {
          .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-prev.owl2-next, .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-next.owl2-next {
            right: 0; } }
    .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-prev.owl2-next:before, .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-next.owl2-next:before {
      content: "\f105"; }
    .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-prev.owl2-prev, .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-next.owl2-prev {
      left: -22px;
      right: auto;
      -webkit-box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75);
      -moz-box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75);
      box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75); }
    @media (max-width: 767px) {
          .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-prev.owl2-prev, .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-next.owl2-prev {
            left: 0; } }
    .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-prev.owl2-prev:before, .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-next.owl2-prev:before {
      content: "\f104"; }
    .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-prev:hover, .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-next:hover {
      background-color: <?php echo $tema['t37'];?>;
      box-shadow: none; }
    .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-prev:hover:before, .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-next:hover:before {
      color: #fff; }
  .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-prev, .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-next {
    top: 40%; }
  .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-prev {
    left: 0 !important; }
  .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav .owl2-next {
    right: 0 !important; }
  .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-nav > div {
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
    opacity: 0;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s;
    margin-top: 0px; }
  .so-category-slider.container-slider .categoryslider-content .owl2-controls .owl2-dots {
    display: none !important; }
  .so-category-slider.container-slider .categoryslider-content:hover .owl2-controls .owl2-nav > div {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s; }
  .so-category-slider.container-slider .available {
    background-color: #eee;
    height: 13px;
    width: 100%;
    display: inline-block;
    border-radius: 7px;
    position: relative;
    z-index: 2;
    overflow: hidden; }
  .so-category-slider.container-slider .available .color_width {
    background: <?php echo $tema['t37'];?>;
    position: absolute;
    height: 100%;
    left: 0;
    border-top-left-radius: 7px;
    border-bottom-left-radius: 7px; }
/************************************************************************************************
 MODULE LISTING TABS
 *************************************************************************************************/
.layout-1.common-home #content .module.listingtab-layout1 h3.modtitle {
  margin-bottom: 15px; }

.listingtab-layout1 {
  position: relative; }
  .listingtab-layout1 .so-listing-tabs {
    margin: 0;
    overflow: unset; }
  .listingtab-layout1 .so-listing-tabs .items-category-seeall {
    position: absolute;
    z-index: 2;
    right: 0;
    top: 0;
    font-size: 13px;
    margin-top: 5px; }
  .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav {
    position: static; }
    .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-prev, .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-next {
      background-color: #fff;
      border: none;
      border-radius: 50%;
      -moz-border-radius: 50%;
      -webkit-border-radius: 50%;
      width: 44px;
      height: 44px;
      line-height: 42px;
      text-align: center;
      float: left;
      text-indent: -9999px;
      overflow: hidden;
      cursor: pointer;
      opacity: 1;
      z-index: 99;
      font-size: 24px;
      position: absolute;
      top: 50%;
      margin-top: -22px;
      transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -webkit-transition: all 0.2s ease-in-out 0s;
      font-weight: 400; }
    .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-prev:before, .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-next:before {
      color: #aaa;
      font-family: 'FontAwesome';
      display: block;
      text-indent: 0 !important;
      width: 100%;
      height: 100%;
      font-size: 24px; }
    .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-prev.owl2-next, .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-next.owl2-next {
      right: -22px;
      left: auto;
      -webkit-box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75);
      -moz-box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75);
      box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75); }
    @media (max-width: 767px) {
            .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-prev.owl2-next, .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-next.owl2-next {
              right: 0; } }
    .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-prev.owl2-next:before, .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-next.owl2-next:before {
      content: "\f105"; }
    .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-prev.owl2-prev, .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-next.owl2-prev {
      left: -22px;
      right: auto;
      -webkit-box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75);
      -moz-box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75);
      box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75); }
    @media (max-width: 767px) {
            .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-prev.owl2-prev, .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-next.owl2-prev {
              left: 0; } }
    .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-prev.owl2-prev:before, .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-next.owl2-prev:before {
      content: "\f104"; }
    .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-prev:hover, .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-next:hover {
      background-color: <?php echo $tema['t37'];?>;
      box-shadow: none; }
    .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-prev:hover:before, .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav .owl2-next:hover:before {
      color: #fff; }
    .listingtab-layout1 .so-listing-tabs .ltabs-items-inner .owl2-controls .owl2-nav > div {
      -webkit-transform: scale(0);
      -moz-transform: scale(0);
      -ms-transform: scale(0);
      -o-transform: scale(0);
      transform: scale(0);
      opacity: 0;
      transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -webkit-transition: all 0.2s ease-in-out 0s;
      margin-top: 5px; }
  .listingtab-layout1 .so-listing-tabs .ltabs-items-inner:hover .owl2-controls .owl2-nav > div {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s; }
  .listingtab-layout1 .so-listing-tabs .ltabs-items-container .ltabs-items .ltabs-slider .ltabs-item {
    margin-bottom: 0; }
  .listingtab-layout1 .so-listing-tabs .products-list.grid .product-layout .product-item-container {
    margin-bottom: 30px; }
  .listingtab-layout1 .so-listing-tabs .ltabs-wrap {
    overflow: unset; }
  .listingtab-layout1 .so-listing-tabs .ltabs-wrap .ltabs-tabs-container {
    margin: 15px 0; }
  .listingtab-layout1 .so-listing-tabs .ltabs-wrap .ltabs-tabs-container .ltabs-tabs-wrap ul.ltabs-tabs {
    border-bottom: 2px solid #ebebeb; }
    .listingtab-layout1 .so-listing-tabs .ltabs-wrap .ltabs-tabs-container .ltabs-tabs-wrap ul.ltabs-tabs li.ltabs-tab {
      border: medium none;
      display: inline-block;
      line-height: 100%;
      padding: 0 0 5px 0;
      float: none;
      margin-right: 40px;
      position: relative; }
    .listingtab-layout1 .so-listing-tabs .ltabs-wrap .ltabs-tabs-container .ltabs-tabs-wrap ul.ltabs-tabs li.ltabs-tab:after {
      position: absolute;
      content: "";
      bottom: -2px;
      left: 0;
      width: 0;
      height: 2px;
      background-color: <?php echo $tema['t37'];?>;
      transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -webkit-transition: all 0.2s ease-in-out 0s; }
    .listingtab-layout1 .so-listing-tabs .ltabs-wrap .ltabs-tabs-container .ltabs-tabs-wrap ul.ltabs-tabs li.ltabs-tab .ltabs-tab-label {
      color: #333;
      display: block;
      font-size: 18px;
      font-weight: 600;
      padding: 0;
      text-transform: uppercase;
      letter-spacing: 1px; }
      .listingtab-layout1 .so-listing-tabs .ltabs-wrap .ltabs-tabs-container .ltabs-tabs-wrap ul.ltabs-tabs li.ltabs-tab .ltabs-tab-label:hover {
        color: <?php echo $tema['t37'];?>; }
    .listingtab-layout1 .so-listing-tabs .ltabs-wrap .ltabs-tabs-container .ltabs-tabs-wrap ul.ltabs-tabs li.ltabs-tab:hover:after, .listingtab-layout1 .so-listing-tabs .ltabs-wrap .ltabs-tabs-container .ltabs-tabs-wrap ul.ltabs-tabs li.ltabs-tab.tab-sel:after {
      width: 100px;
      left: 0; }
      .listingtab-layout1 .so-listing-tabs .ltabs-wrap .ltabs-tabs-container .ltabs-tabs-wrap ul.ltabs-tabs li.ltabs-tab:hover .ltabs-tab-label, .listingtab-layout1 .so-listing-tabs .ltabs-wrap .ltabs-tabs-container .ltabs-tabs-wrap ul.ltabs-tabs li.ltabs-tab.tab-sel .ltabs-tab-label {
        color: <?php echo $tema['t37'];?>; }
  .listingtab-layout1 .so-listing-tabs .wap-listing-tabs {
    clear: both;
    margin-top: 10px; }
  .listingtab-layout1 .so-listing-tabs .ltabs-items-container .ltabs-items .ltabs-items-inner {
    position: static; }
  .listingtab-layout1 .so-listing-tabs .ltabs-items-container .ltabs-items .ltabs-items-inner .ltabs-item .item-inner {
    margin: 0 0px 30px 0px; }
/************************************************************************************************
 MODULE LATEST BLOG
 *************************************************************************************************/
.blog-sidebar {
  margin-top: 35px; }
  .blog-sidebar .owl2-controls .owl2-nav {
    position: static; }
  .blog-sidebar .owl2-controls .owl2-nav .owl2-prev, .blog-sidebar .owl2-controls .owl2-nav .owl2-next {
    background-color: #fff;
    border: none;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    width: 28px;
    height: 28px;
    line-height: 26px;
    text-align: center;
    float: left;
    text-indent: -9999px;
    overflow: hidden;
    cursor: pointer;
    opacity: 1;
    z-index: 99;
    font-size: 18px;
    position: absolute;
    top: 50%;
    margin-top: -14px;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s;
    font-weight: 400; }
  .blog-sidebar .owl2-controls .owl2-nav .owl2-prev:before, .blog-sidebar .owl2-controls .owl2-nav .owl2-next:before {
    color: #e9e9e9;
    font-family: 'FontAwesome';
    display: block;
    text-indent: 0 !important;
    width: 100%;
    height: 100%;
    font-size: 18px; }
  .blog-sidebar .owl2-controls .owl2-nav .owl2-prev.owl2-next, .blog-sidebar .owl2-controls .owl2-nav .owl2-next.owl2-next {
    right: -14px;
    left: auto;
    -webkit-box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75);
    -moz-box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75);
    box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75); }
    @media (max-width: 767px) {
        .blog-sidebar .owl2-controls .owl2-nav .owl2-prev.owl2-next, .blog-sidebar .owl2-controls .owl2-nav .owl2-next.owl2-next {
          right: 0; } }
    .blog-sidebar .owl2-controls .owl2-nav .owl2-prev.owl2-next:before, .blog-sidebar .owl2-controls .owl2-nav .owl2-next.owl2-next:before {
      content: "\f105"; }
  .blog-sidebar .owl2-controls .owl2-nav .owl2-prev.owl2-prev, .blog-sidebar .owl2-controls .owl2-nav .owl2-next.owl2-prev {
    left: -14px;
    right: auto;
    -webkit-box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75);
    -moz-box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75);
    box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75); }
    @media (max-width: 767px) {
        .blog-sidebar .owl2-controls .owl2-nav .owl2-prev.owl2-prev, .blog-sidebar .owl2-controls .owl2-nav .owl2-next.owl2-prev {
          left: 0; } }
    .blog-sidebar .owl2-controls .owl2-nav .owl2-prev.owl2-prev:before, .blog-sidebar .owl2-controls .owl2-nav .owl2-next.owl2-prev:before {
      content: "\f104"; }
  .blog-sidebar .owl2-controls .owl2-nav .owl2-prev:hover, .blog-sidebar .owl2-controls .owl2-nav .owl2-next:hover {
    background-color: #c3c3c3;
    box-shadow: none; }
    .blog-sidebar .owl2-controls .owl2-nav .owl2-prev:hover:before, .blog-sidebar .owl2-controls .owl2-nav .owl2-next:hover:before {
      color: #fff; }
  .blog-sidebar .owl2-controls .owl2-dots {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 80px;
    right: 10px;
    top: 5px; }
  .blog-sidebar .owl2-controls .owl2-dots .owl2-dot {
    width: 8px;
    height: 8px;
    border-radius: 8px;
    background-color: #222;
    margin: 0 5px;
    display: inline-block;
    float: none;
    opacity: 1;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s; }
  .blog-sidebar .owl2-controls .owl2-dots .owl2-dot span {
    display: none; }
  .blog-sidebar .owl2-controls .owl2-dots .owl2-dot:hover {
    background-color: <?php echo $tema['t37'];?>; }
  .blog-sidebar .owl2-controls .owl2-dots .owl2-dot.active {
    width: 30px;
    background-color: <?php echo $tema['t37'];?>; }
  .blog-sidebar .so-blog-external .blog-external-simple {
    border: none;
    margin: 0px; }
  .blog-sidebar .so-blog-external .blog-external-simple .cat-wrap {
    margin-bottom: 15px; }
  .blog-sidebar .so-blog-external .blog-external-simple .media {
    margin: 0; }
  .blog-sidebar .so-blog-external .blog-external-simple .media .item {
    margin: 0; }
  .blog-sidebar .so-blog-external .blog-external-simple .media .item.item-2 {
    border-top: 1px solid #ddd;
    padding-top: 15px; }
    .blog-sidebar .so-blog-external .blog-external-simple .media .item.item-2 .media-left {
      display: none; }
  .blog-sidebar .so-blog-external .blog-external-simple .media .item h4.media-heading {
    margin-bottom: 7px; }
    .blog-sidebar .so-blog-external .blog-external-simple .media .item h4.media-heading a {
      font-size: 13px;
      color: #333;
      font-weight: 600; }
    .blog-sidebar .so-blog-external .blog-external-simple .media .item h4.media-heading a:hover {
      color: <?php echo $tema['t37'];?>; }
  .blog-sidebar .so-blog-external .blog-external-simple .media .item .media-left {
    padding: 0;
    overflow: hidden;
    margin-top: 5px;
    margin-bottom: 18px;
    float: left; }
    .blog-sidebar .so-blog-external .blog-external-simple .media .item .media-left img {
      border-radius: 3px; }
    .blog-sidebar .so-blog-external .blog-external-simple .media .item .media-left img:hover {
      opacity: 0.8;
      transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -webkit-transition: all 0.2s ease-in-out 0s; }
  .blog-sidebar .so-blog-external .blog-external-simple .media .item .media-content {
    font-size: 12px;
    float: left;
    text-align: left;
    color: #999; }
    .blog-sidebar .so-blog-external .blog-external-simple .media .item .media-content h4 a {
      padding: 0;
      font-weight: 700;
      font-size: 16px;
      color: #222; }
    .blog-sidebar .so-blog-external .blog-external-simple .media .item .media-content h4 a:hover {
      color: <?php echo $tema['t37'];?>; }
    .blog-sidebar .so-blog-external .blog-external-simple .media .item .media-content .media-date-added {
      float: left; }
    .blog-sidebar .so-blog-external .blog-external-simple .media .item .media-content i {
      float: left;
      margin-top: 6px;
      margin-right: 5px; }
    .blog-sidebar .so-blog-external .blog-external-simple .media .item .media-content .media-subcontent {
      float: left;
      clear: none;
      margin-left: 20px; }
/************************************************************************************************
 SHORTCODE HTML SLIDER BRANDS
 *************************************************************************************************/
.slider-brands {
  border: 1px solid #ebebeb;
  border-radius: 3px;
  padding: 30px 0px;
  margin-top: 0;
  margin-bottom: 50px; }
  .slider-brands .contentslider {
    padding: 0 20px;
    position: relative; }
  .slider-brands .contentslider .owl2-stage-outer {
    direction: ltr; }
  .slider-brands .owl2-carousel .owl2-item {
    height: 0; }
  .slider-brands .owl2-carousel .owl2-item.active {
    height: auto; }
  .slider-brands .item {
    text-align: center;
    opacity: 0.4; }
  .slider-brands .item:hover {
    opacity: 1; }
  .slider-brands .owl2-controls .owl2-nav {
    position: static;
    /*position: static;
     .owl2-prev{
     #{$left}: -20px;
     position: absolute;
     top: 50%;
     margin-top: -20px;
     background-color: #fff;
     }
     .owl2-next{
     #{$right}: -20px;
     position: absolute;
     top: 50%;
     margin-top: -20px;
     background-color: #fff;
     }*/ }
  .slider-brands .owl2-controls .owl2-nav .owl2-prev, .slider-brands .owl2-controls .owl2-nav .owl2-next {
    background-color: #fff;
    border: none;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    width: 44px;
    height: 44px;
    line-height: 42px;
    text-align: center;
    float: left;
    text-indent: -9999px;
    overflow: hidden;
    cursor: pointer;
    opacity: 1;
    z-index: 99;
    font-size: 24px;
    position: absolute;
    top: 50%;
    margin-top: -22px;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s;
    font-weight: 400; }
  .slider-brands .owl2-controls .owl2-nav .owl2-prev:before, .slider-brands .owl2-controls .owl2-nav .owl2-next:before {
    color: #aaa;
    font-family: 'FontAwesome';
    display: block;
    text-indent: 0 !important;
    width: 100%;
    height: 100%;
    font-size: 24px; }
  .slider-brands .owl2-controls .owl2-nav .owl2-prev.owl2-next, .slider-brands .owl2-controls .owl2-nav .owl2-next.owl2-next {
    right: -22px;
    left: auto;
    -webkit-box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75);
    -moz-box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75);
    box-shadow: -2px 0px 3px 0px rgba(155, 155, 155, 0.75); }
  @media (max-width: 767px) {
        .slider-brands .owl2-controls .owl2-nav .owl2-prev.owl2-next, .slider-brands .owl2-controls .owl2-nav .owl2-next.owl2-next {
          right: 0; } }
  .slider-brands .owl2-controls .owl2-nav .owl2-prev.owl2-next:before, .slider-brands .owl2-controls .owl2-nav .owl2-next.owl2-next:before {
    content: "\f105"; }
  .slider-brands .owl2-controls .owl2-nav .owl2-prev.owl2-prev, .slider-brands .owl2-controls .owl2-nav .owl2-next.owl2-prev {
    left: -22px;
    right: auto;
    -webkit-box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75);
    -moz-box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75);
    box-shadow: 2px 0px 3px 0px rgba(155, 155, 155, 0.75); }
  @media (max-width: 767px) {
        .slider-brands .owl2-controls .owl2-nav .owl2-prev.owl2-prev, .slider-brands .owl2-controls .owl2-nav .owl2-next.owl2-prev {
          left: 0; } }
  .slider-brands .owl2-controls .owl2-nav .owl2-prev.owl2-prev:before, .slider-brands .owl2-controls .owl2-nav .owl2-next.owl2-prev:before {
    content: "\f104"; }
  .slider-brands .owl2-controls .owl2-nav .owl2-prev:hover, .slider-brands .owl2-controls .owl2-nav .owl2-next:hover {
    background-color: <?php echo $tema['t37'];?>;
    box-shadow: none; }
  .slider-brands .owl2-controls .owl2-nav .owl2-prev:hover:before, .slider-brands .owl2-controls .owl2-nav .owl2-next:hover:before {
    color: #fff; }

.main-left .col1 {
  min-height: 450px; }
  .main-left .so-extraslider {
    margin: 0; }

@media (min-width: 1650px) {
  .main-right .col2 {
    width: 80%; }
    .main-right .col3 {
      width: 20%; } }
/*==================== ===================*/
@media (min-width: 1200px) and (max-width: 1649px) {
  .main-left .col1 {
    min-height: 300px;
    margin-bottom: 30px; }

  .module.sohomepage-slider .so-homeslider img {
    min-height: 335px; }

  .container-megamenu.vertical .vertical-wrapper ul.megamenu > li.with-sub-menu > a .fa-angle-right::before {
    top: 8px; }

  .main-right .col2 {
    width: 75%; }
    .main-right .col3 {
      width: 25%; }

  .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > a {
    /*! padding: 3px 0; */ }

  .common-home .main-right .product-simple .so-extraslider .extraslider-inner .item .item-inner {
    padding-bottom: 1px;
    margin-bottom: 1px; }
    .common-home .main-right .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image {
      width: 60px; }
    .common-home .main-right .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info {
      margin-left: 65px; }
      .common-home .main-right .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .item-title {
        margin-bottom: 0; }

  .banners3 .item1, .banners3 .item3 {
    width: 33.3%; }
    .banners3 .item2 {
      width: 48.2%; }

  .block-infos, .banners2, .testimonials {
    margin-bottom: 30px; }

  .policy-w {
    margin-top: 30px; } }

@media (min-width: 1200px) and (max-width: 1365px) {
  .common-home .products-list .product-grid .product-item-container .right-block .cartinfo--static .addToCart, .common-home .products-list .product-grid .product-item-container .right-block .button-group .addToCart {
    width: 34px;
    height: 34px;
    line-height: 34px;
    text-align: center;
    margin: 0 1px;
    position: relative; }
    .common-home .products-list .product-grid .product-item-container .right-block .cartinfo--static .addToCart:before, .common-home .products-list .product-grid .product-item-container .right-block .button-group .addToCart:before {
      font-family: 'FontAwesome';
      content: "\f291"; }
    .common-home .products-list .product-grid .product-item-container .right-block .cartinfo--static .addToCart span, .common-home .products-list .product-grid .product-item-container .right-block .button-group .addToCart span {
      display: none; } }

</style>