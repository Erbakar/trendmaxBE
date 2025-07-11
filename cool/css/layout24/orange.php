<style>
/*******************************************
 ***          SO Framework: Sass          ***
 *******************************************/
@charset "UTF-8";
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
        background: <?php echo $tema['t8']; ?> !important; }
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
.lib-two-img, .product-item-container .second_img, .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-left .item-image .lt-image {
  position: relative;
  display: block; }
  .lib-two-img .img-1, .product-item-container .second_img .img-1, .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-left .item-image .lt-image .img-1 {
    opacity: 1;
    position: relative;
    transition: all 0.5s ease-in-out; }
  .lib-two-img .img-2, .product-item-container .second_img .img-2, .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-left .item-image .lt-image .img-2 {
    position: absolute;
    z-index: 0;
    top: 0;
    opacity: 0;
    display: block;
    transition: all 0.5s ease-in-out;
    left: 50%;
    transform: translateX(-50%); }

.lib-two-img-over .img-1, .product-item-container:hover .second_img .img-1, .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1:hover .media-left .item-image .lt-image .img-1 {
  opacity: 0;
  transform-style: inherit;
  transition: all 0.5s ease-in-out; }
.lib-two-img-over .img-2, .product-item-container:hover .second_img .img-2, .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1:hover .media-left .item-image .lt-image .img-2 {
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
  bottom: 35px;
  right: 10px;
  min-height: 42px;
  overflow: hidden;
  z-index: 40;
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
    background-color: <?php echo $tema['t8']; ?> !important; }
  .back-to-top i {
    font-size: 36px;
    margin: 1px 0 0 0 !important;
    color: #fff;
    display: inline-block; }

/*============SOCIAL ACCOUNTS ==================*/
.social-widgets {
  overflow: visible;
  position: fixed;
  z-index: 999;
  top: 50%;
  height: 0;
  width: 0; }
  .social-widgets.socialwidgets-left {
    left: 0; }
  .social-widgets.socialwidgets-right {
    right: 0; }

.socialwidgets-left .item {
  right: 0px; }
.socialwidgets-left .active {
  z-index: 100;
  right: -310px; }
.socialwidgets-left .tab-icon {
  right: -45px; }
.socialwidgets-left .facebook.active {
  right: -260px; }
.socialwidgets-left .twitter.active {
  right: -300px; }
.socialwidgets-left .youtube.active {
  right: -450px; }

.socialwidgets-right .item {
  left: 0px; }
.socialwidgets-right .active {
  z-index: 100;
  left: -310px; }
.socialwidgets-right .tab-icon {
  left: -45px; }
.socialwidgets-right .facebook.active {
  left: -260px; }
.socialwidgets-right .twitter.active {
  left: -300px; }
.socialwidgets-right .youtube.active {
  left: -450px; }

.social-widgets .item, .social-widgets .items {
  margin: 0;
  padding: 0;
  list-style-type: none; }

.social-widgets .items {
  top: -100px;
  position: relative; }

.social-widgets .item {
  position: absolute;
  top: 0; }

.social-widgets .item-01 {
  top: 0;
  z-index: 99; }

.social-widgets .item-02 {
  top: 45px;
  z-index: 98; }

.social-widgets .item-03 {
  top: 90px;
  z-index: 97; }

.social-widgets .tab-icon .fa {
  font-size: 18px;
  line-height: 45px; }

.social-widgets .tab-icon {
  position: absolute;
  top: 0;
  display: block;
  width: 45px;
  height: 45px;
  background: #fff;
  text-align: center;
  font-size: 1.54em; }

.social-widgets .tab-icon:hover {
  text-decoration: none; }

.social-widgets .active .tab-icon {
  border-color: #E9E9E9;
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
  background: #DA2723;
  background-clip: content-box;
  color: white; }

.social-widgets .tab-content {
  background: #fff;
  width: 310px;
  padding: 10px; }

.social-widgets .active .tab-content {
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.15); }

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

.social-widgets .facebook .tab-content {
  width: 260px; }

.social-widgets .twitter .tab-content {
  width: 300px; }

.social-widgets .twitter-widget {
  padding-top: 10px; }

.social-widgets .youtube .tab-content {
  width: 450px; }

.social-widgets .youtube .tab-content iframe {
  width: 100%; }

.social-widgets .loading {
  min-height: 200px;
  position: relative;
  z-index: 100; }

.social-widgets .loading img.ajaxloader {
  position: absolute;
  top: 45%;
  left: 45%;
  width: 32px;
  height: 32px; }

/*============TOP PANEL ==================*/
.wrapper-boxed header.navbar-compact {
  width: auto; }

header.navbar-compact {
  position: fixed;
  width: 100%;
  z-index: 999;
  box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3); }
  header.navbar-compact .compact-hidden {
    display: none; }

/*============LARY LOADER ==================*/
.lazy {
  display: block;
  overflow: hidden;
  background: transparent url(<?php echo $sitetemasi;?>/images/lazy-loader.gif) no-repeat center center; }

@media (min-width: 1200px) {
  .lazy.lazy-loaded {
    background: none;
    height: auto; }
  .lazy img {
    transition: 1s all ease;
    opacity: 0;
    -webkit-backface-visibility: hidden;
    display: inline-block; }
  .lazy.lazy-loaded img {
    opacity: 1; } }

/*============NONE RESPONSIVE BOOTSTRAP ==================*/
@media (min-width: 1200px) {
  .wrapper-boxed {
    max-width: 1260px;
    margin: 0 auto;
    background: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); }
    .wrapper-full .container {
      width: 1200px; }
      .wrapper-full .products-list .product-grid-5 .product-card__gallery, .wrapper-full .products-list .product-grid-5 .countdown_box, .wrapper-full .products-list .product-grid-5 .order-num {
        display: none; }
  .wrapper-fluid .container {
    max-width: 1650px;
    padding: 0;
    width: 93%; } }
@media (min-width: 1200px) and (min-width: 1200px) {
  .wrapper-full .products-list .product-grid-5:nth-child(5n+1) {
    clear: both !important; } }

/*============@group Banners hover effect ==================*/
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

.banners-effect-4 .row-no-padding a, .banners-effect-4 .banners > div a {
  display: block;
  position: relative;
  overflow: hidden; }

.banners-effect-4 .row-no-padding a:before, .banners-effect-4 .banners > div a:before {
  border-bottom: 50px solid rgba(255, 255, 255, 0.4);
  border-top: 50px solid rgba(255, 255, 255, 0.4);
  content: "";
  height: 100%;
  left: 0;
  opacity: 0;
  filter: alpha(opacity=0);
  position: absolute;
  top: 0;
  transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 0, 1);
  -o-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 0, 1);
  -webkit-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 0, 1);
  -moz-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 0, 1);
  -ms-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 0, 1);
  -webkit-transition: opacity 0.35s ease 0s, transform 0.35s ease 0s;
  -o-transition: opacity 0.35s ease 0s, transform 0.35s ease 0s;
  transition: opacity 0.35s ease 0s, transform 0.35s ease 0s;
  transform-origin: 50% 50% 0;
  width: 100%; }

.banners-effect-4 .row-no-padding a:hover:before, .banners-effect-4 .banners > div a:hover:before {
  opacity: 1;
  filter: alpha(opacity=100);
  transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 4, 1);
  -o-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 4, 1);
  -webkit-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 4, 1);
  -moz-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 4, 1);
  -ms-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 4, 1); }

.banners-effect-5 .banners > div a {
  display: block;
  position: relative;
  overflow: hidden; }
  .banners-effect-5 .banners > div a:before {
    content: "";
    height: 100%;
    width: 100%;
    position: absolute;
    border: 70px solid rgba(255, 255, 255, 0);
    top: 0;
    left: 0;
    transition: all 0.5s ease-in-out; }
  .banners-effect-5 .banners > div a:after {
    content: "";
    height: 100%;
    width: 100%;
    position: absolute;
    opacity: 0.5;
    border: 30px solid #fff;
    top: 0;
    left: 0;
    transform: scale(0);
    -moz-transform: scale(0);
    -webkit-transform: scale(0);
    -ms-transform: scale(0);
    transition: all 0.5s ease-in-out; }
    .banners-effect-5 .banners > div a:hover:before {
      border: 0 solid rgba(255, 255, 255, 0.7); }
    .banners-effect-5 .banners > div a:hover:after {
      transform: scale(0.8);
      -moz-transform: scale(0.8);
      -webkit-transform: scale(0.8);
      -ms-transform: scale(0.8);
      opacity: 0;
      transition-delay: 0.1s; }

.banners-effect-6 .banners > div a {
  display: inline-block;
  position: relative;
  overflow: hidden;
  background: #000;
  vertical-align: top; }

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
  border-bottom: 1px solid #ffffff;
  border-top: 1px solid #ffffff;
  -webkit-transform: scale(0, 1);
  -ms-transform: scale(0, 1);
  -o-transform: scale(0, 1);
  transform: scale(0, 1); }

.banners-effect-8 .banners > div a:after {
  border-left: 1px solid #ffffff;
  border-right: 1px solid #ffffff;
  -webkit-transform: scale(1, 0);
  -ms-transform: scale(1, 0);
  -o-transform: scale(1, 0);
  transform: scale(1, 0); }

.banners-effect-8 .banners > div img {
  opacity: 1;
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

/*============POPUP ADDED TO CART ==================*/
body > .alert {
  position: fixed;
  z-index: 10004;
  top: 0;
  left: 0;
  width: 100%;
  -webkit-animation: alert-anim 1s cubic-bezier(1, -0.01, 0, 0.99);
  -moz-animation: alert-anim 1s cubic-bezier(1, -0.01, 0, 0.99);
  animation: alert-anim 1s cubic-bezier(1, -0.01, 0, 0.99); }

body > .alert .alert {
  position: absolute;
  left: 0;
  right: 0;
  top: 100%; }

body > .alert .alert.fadeOut {
  top: -100%; }

@-webkit-keyframes alert-anim {
  0% {
    top: -100%; }
  60% {
    top: 0; }
  100% {
    top: 0; } }
@-moz-keyframes alert-anim {
  0% {
    top: -100%; }
  60% {
    top: 0; }
  100% {
    top: 0; } }
@keyframes alert-anim {
  0% {
    top: -100%; }
  60% {
    top: 0; }
  100% {
    top: 0; } }
@-webkit-keyframes alert-anim2 {
  0% {
    top: -100%; }
  60% {
    top: 100%; }
  100% {
    top: 100%; } }
@-moz-keyframes alert-anim2 {
  0% {
    top: -100%; }
  60% {
    top: 100%; }
  100% {
    top: 100%; } }
@keyframes alert-anim2 {
  0% {
    top: -100%; }
  60% {
    top: 100%; }
  100% {
    top: 100%; } }
@-webkit-keyframes alert-icon-anim {
  0% {
    font-size: 0; }
  60% {
    font-size: 0; } }
@-moz-keyframes alert-icon-anim {
  0% {
    font-size: 0; }
  60% {
    font-size: 0; } }
@keyframes alert-icon-anim {
  0% {
    font-size: 0; }
  60% {
    font-size: 0; } }
/*============ PAGE COMINGSOON ==================*/
.comingsoon-page {
  background: #142326;
  padding: 7em 0;
  color: #bdbdbd; }
  .comingsoon-page .container {
    max-width: 750px; }
  .comingsoon-page .comingsoon--title {
    margin: 0.5em 0 1em;
    font-size: 46px;
    color: #fff;
    text-transform: uppercase;
    font-weight: 700;
    padding: 0 1em; }
  .comingsoon-page .comingsoon--content {
    margin: 1em 0;
    font-size: 14px; }
  .comingsoon-page .comingsoon--countdown {
    margin: 6em 0 8em; }
    .comingsoon-page .comingsoon--countdown .time-item {
      width: 125px;
      height: 125px;
      border: 3px solid rgba(255, 255, 255, 0.4);
      border-radius: 50%;
      margin: 0 15px;
      display: inline-block;
      padding: 30px; }
    .comingsoon-page .comingsoon--countdown .num-time {
      font-size: 40px;
      color: #fff;
      font-weight: 700;
      line-height: 100%;
      margin: 0 0 5px 0; }
    .comingsoon-page .comingsoon--countdown .name-time {
      font-size: 20px;
      text-transform: uppercase; }
  .comingsoon-page .comingsoon--newsletter {
    margin: 2em 0; }
    .comingsoon-page .comingsoon--newsletter .newsletter {
      background: none !important; }
    .comingsoon-page .comingsoon--newsletter .title-block {
      display: none; }

/*============ Quick Cart ==================*/
@media (min-width: 1200px) {
  .modal-lg {
    margin-top: 10%;
    width: 1050px; } }

.modal-content {
  box-shadow: none;
  border-radius: 0;
  border: none; }
  .modal-content .modal-header {
    padding: 10px 15px; }
  .modal-content .modal-title {
    font-weight: normal; }

@media (min-width: 1200px) {
  #previewModal .cart-popup-info {
    padding-top: 30px; } }
#previewModal .cart-popup-info .product-name {
  font-size: 22px;
  font-weight: 400; }
#previewModal .cart-popup-info .price-quantity {
  font-size: 24px;
  color: #555;
  font-weight: normal; }
#previewModal .cart-popup-info .price-new {
  font-size: 24px; }
#previewModal .cart-popup-action {
  background: #f2f2f2;
  padding: 1rem 1.5rem;
  text-align: center;
  border-radius: 3px; }
  #previewModal .cart-popup-action .btn {
    display: block;
    margin: 10px 0;
    border: none;
    width: 100%;
    font-size: 13px; }
  #previewModal .cart-popup-action .cart-popup-imgbottom {
    text-align: center;
    width: 100%;
    margin: 20px 0; }
    #previewModal .cart-popup-action .cart-popup-imgbottom .previewCartCheckout-price {
      display: block;
      font-size: 28px;
      font-weight: 700;
      padding: 15px 0; }

/*===============================================
 [SASS DIRECTORY ]
 [1] Pre-Loader 
 ==============================================*/
.loaded .so-loadeding {
  display: none; }

.so-loadeding {
  background: white url(<?php echo $sitetemasi;?>/images/lazy-loader.gif) no-repeat center center;
  height: 100%;
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  right: 0;
  opacity: 1; }

/*============START Pre-Loader CSS  ==================*/
.so-pre-loader {
  background: rgba(251, 138, 0, 0.5);
  height: 100%;
  left: 0;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 99999; }
  .so-pre-loader.no-pre-loader {
    background: none;
    position: absolute;
    height: auto; }
  .so-pre-loader .so-loader-background {
    background: #555;
    display: block;
    height: 100%; }
  .so-pre-loader .so-loader-center {
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -25px 0 0 -25px; }
  .so-pre-loader .so-loader-line {
    background: <?php echo $tema['t8']; ?> !important;
    top: 0; }
  .so-pre-loader .spinner {
    width: 50px;
    height: 50px;
    background-color: white;
    -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
    animation: sk-rotateplane 1.2s infinite ease-in-out; }
  .so-pre-loader .spinner-bounce {
    width: 60px;
    height: 60px;
    position: relative; }
  .so-pre-loader .double-bounce1, .so-pre-loader .double-bounce2 {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: white;
    opacity: 0.6;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-animation: sk-bounce 2s infinite ease-in-out;
    animation: sk-bounce 2s infinite ease-in-out; }
  .so-pre-loader .double-bounce2 {
    -webkit-animation-delay: -1s;
    animation-delay: -1s; }
  .so-pre-loader .spinner-cube {
    width: 40px;
    height: 40px;
    position: relative; }
  .so-pre-loader .cube1, .so-pre-loader .cube2 {
    background-color: white;
    width: 15px;
    height: 15px;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-animation: sk-cubemove 1.8s infinite ease-in-out;
    animation: sk-cubemove 1.8s infinite ease-in-out; }
  .so-pre-loader .cube2 {
    -webkit-animation-delay: -0.9s;
    animation-delay: -0.9s; }
  .so-pre-loader .spinner-bounce2 {
    width: 80px;
    text-align: center; }
  .so-pre-loader .spinner-bounce2 > div {
    width: 18px;
    height: 18px;
    background-color: white;
    border-radius: 100%;
    display: inline-block;
    margin: 0 3px;
    -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
    animation: sk-bouncedelay 1.4s infinite ease-in-out both; }
  .so-pre-loader .spinner-bounce2 .bounce1 {
    -webkit-animation-delay: -0.32s;
    animation-delay: -0.32s; }
  .so-pre-loader .spinner-bounce2 .bounce2 {
    -webkit-animation-delay: -0.16s;
    animation-delay: -0.16s; }
  .so-pre-loader .spinner-circle {
    width: 60px;
    height: 60px;
    position: relative; }
  .so-pre-loader .spinner-circle .sk-child {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0; }
  .so-pre-loader .spinner-circle .sk-child:before {
    content: '';
    display: block;
    margin: 0 auto;
    width: 15%;
    height: 15%;
    background-color: white;
    border-radius: 100%;
    -webkit-animation: sk-circleBounceDelay 1.2s infinite ease-in-out both;
    animation: sk-circleBounceDelay 1.2s infinite ease-in-out both; }
  .so-pre-loader .spinner-circle .sk-circle2 {
    -webkit-transform: rotate(30deg);
    -ms-transform: rotate(30deg);
    transform: rotate(30deg); }
  .so-pre-loader .spinner-circle .sk-circle3 {
    -webkit-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    transform: rotate(60deg); }
  .so-pre-loader .spinner-circle .sk-circle4 {
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg); }
  .so-pre-loader .spinner-circle .sk-circle5 {
    -webkit-transform: rotate(120deg);
    -ms-transform: rotate(120deg);
    transform: rotate(120deg); }
  .so-pre-loader .spinner-circle .sk-circle6 {
    -webkit-transform: rotate(150deg);
    -ms-transform: rotate(150deg);
    transform: rotate(150deg); }
  .so-pre-loader .spinner-circle .sk-circle7 {
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg); }
  .so-pre-loader .spinner-circle .sk-circle8 {
    -webkit-transform: rotate(210deg);
    -ms-transform: rotate(210deg);
    transform: rotate(210deg); }
  .so-pre-loader .spinner-circle .sk-circle9 {
    -webkit-transform: rotate(240deg);
    -ms-transform: rotate(240deg);
    transform: rotate(240deg); }
  .so-pre-loader .spinner-circle .sk-circle10 {
    -webkit-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg); }
  .so-pre-loader .spinner-circle .sk-circle11 {
    -webkit-transform: rotate(300deg);
    -ms-transform: rotate(300deg);
    transform: rotate(300deg); }
  .so-pre-loader .spinner-circle .sk-circle12 {
    -webkit-transform: rotate(330deg);
    -ms-transform: rotate(330deg);
    transform: rotate(330deg); }
  .so-pre-loader .spinner-circle .sk-circle2:before {
    -webkit-animation-delay: -1.1s;
    animation-delay: -1.1s; }
  .so-pre-loader .spinner-circle .sk-circle3:before {
    -webkit-animation-delay: -1s;
    animation-delay: -1s; }
  .so-pre-loader .spinner-circle .sk-circle4:before {
    -webkit-animation-delay: -0.9s;
    animation-delay: -0.9s; }
  .so-pre-loader .spinner-circle .sk-circle5:before {
    -webkit-animation-delay: -0.8s;
    animation-delay: -0.8s; }
  .so-pre-loader .spinner-circle .sk-circle6:before {
    -webkit-animation-delay: -0.7s;
    animation-delay: -0.7s; }
  .so-pre-loader .spinner-circle .sk-circle7:before {
    -webkit-animation-delay: -0.6s;
    animation-delay: -0.6s; }
  .so-pre-loader .spinner-circle .sk-circle8:before {
    -webkit-animation-delay: -0.5s;
    animation-delay: -0.5s; }
  .so-pre-loader .spinner-circle .sk-circle9:before {
    -webkit-animation-delay: -0.4s;
    animation-delay: -0.4s; }
  .so-pre-loader .spinner-circle .sk-circle10:before {
    -webkit-animation-delay: -0.3s;
    animation-delay: -0.3s; }
  .so-pre-loader .spinner-circle .sk-circle11:before {
    -webkit-animation-delay: -0.2s;
    animation-delay: -0.2s; }
  .so-pre-loader .spinner-circle .sk-circle12:before {
    -webkit-animation-delay: -0.1s;
    animation-delay: -0.1s; }
  .so-pre-loader .spinner-folding-cube {
    width: 50px;
    height: 50px;
    position: relative;
    -webkit-transform: rotateZ(45deg);
    transform: rotateZ(45deg); }
  .so-pre-loader .spinner-folding-cube .sk-cube {
    float: left;
    width: 50%;
    height: 50%;
    position: relative;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1); }
  .so-pre-loader .spinner-folding-cube .sk-cube:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: white;
    -webkit-animation: sk-foldCubeAngle 2.4s infinite linear both;
    animation: sk-foldCubeAngle 2.4s infinite linear both;
    -webkit-transform-origin: 100% 100%;
    -ms-transform-origin: 100% 100%;
    transform-origin: 100% 100%; }
  .so-pre-loader .spinner-folding-cube .sk-cube2 {
    -webkit-transform: scale(1.1) rotateZ(90deg);
    transform: scale(1.1) rotateZ(90deg); }
  .so-pre-loader .spinner-folding-cube .sk-cube3 {
    -webkit-transform: scale(1.1) rotateZ(180deg);
    transform: scale(1.1) rotateZ(180deg); }
  .so-pre-loader .spinner-folding-cube .sk-cube4 {
    -webkit-transform: scale(1.1) rotateZ(270deg);
    transform: scale(1.1) rotateZ(270deg); }
  .so-pre-loader .spinner-folding-cube .sk-cube2:before {
    -webkit-animation-delay: 0.3s;
    animation-delay: 0.3s; }
  .so-pre-loader .spinner-folding-cube .sk-cube3:before {
    -webkit-animation-delay: 0.6s;
    animation-delay: 0.6s; }
  .so-pre-loader .spinner-folding-cube .sk-cube4:before {
    -webkit-animation-delay: 0.9s;
    animation-delay: 0.9s; }

/* *************   END:: Pre-Loader CSS   ************* */
/* **************************************************** */
/* ************   START Loader Animation   ************ */
/* **************************************************** */
@-webkit-keyframes sk-rotateplane {
  0% {
    -webkit-transform: perspective(120px); }
  50% {
    -webkit-transform: perspective(120px) rotateY(180deg); }
  100% {
    -webkit-transform: perspective(120px) rotateY(180deg) rotateX(180deg); } }
@keyframes sk-rotateplane {
  0% {
    transform: perspective(120px) rotateX(0deg) rotateY(0deg);
    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg); }
  50% {
    transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg); }
  100% {
    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg); } }
@-webkit-keyframes sk-bounce {
  0%, 100% {
    -webkit-transform: scale(0); }
  50% {
    -webkit-transform: scale(1); } }
@keyframes sk-bounce {
  0%, 100% {
    transform: scale(0);
    -webkit-transform: scale(0); }
  50% {
    transform: scale(1);
    -webkit-transform: scale(1); } }
@-webkit-keyframes sk-stretchdelay {
  0%, 40%, 100% {
    -webkit-transform: scaleY(0.4); }
  20% {
    -webkit-transform: scaleY(1); } }
@keyframes sk-stretchdelay {
  0%, 40%, 100% {
    transform: scaleY(0.4);
    -webkit-transform: scaleY(0.4); }
  20% {
    transform: scaleY(1);
    -webkit-transform: scaleY(1); } }
@-webkit-keyframes sk-cubemove {
  25% {
    -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5); }
  50% {
    -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg); }
  75% {
    -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5); }
  100% {
    -webkit-transform: rotate(-360deg); } }
@keyframes sk-cubemove {
  25% {
    transform: translateX(42px) rotate(-90deg) scale(0.5);
    -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5); }
  50% {
    transform: translateX(42px) translateY(42px) rotate(-179deg);
    -webkit-transform: translateX(42px) translateY(42px) rotate(-179deg); }
  50.1% {
    transform: translateX(42px) translateY(42px) rotate(-180deg);
    -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg); }
  75% {
    transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5); }
  100% {
    transform: rotate(-360deg);
    -webkit-transform: rotate(-360deg); } }
@-webkit-keyframes sk-bouncedelay {
  0%, 80%, 100% {
    -webkit-transform: scale(0); }
  40% {
    -webkit-transform: scale(1); } }
@keyframes sk-bouncedelay {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
    transform: scale(0); }
  40% {
    -webkit-transform: scale(1);
    transform: scale(1); } }
@-webkit-keyframes sk-circleBounceDelay {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
    transform: scale(0); }
  40% {
    -webkit-transform: scale(1);
    transform: scale(1); } }
@keyframes sk-circleBounceDelay {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
    transform: scale(0); }
  40% {
    -webkit-transform: scale(1);
    transform: scale(1); } }
@-webkit-keyframes sk-cubeGridScaleDelay {
  0%, 70%, 100% {
    -webkit-transform: scale3D(1, 1, 1);
    transform: scale3D(1, 1, 1); }
  35% {
    -webkit-transform: scale3D(0, 0, 1);
    transform: scale3D(0, 0, 1); } }
@keyframes sk-cubeGridScaleDelay {
  0%, 70%, 100% {
    -webkit-transform: scale3D(1, 1, 1);
    transform: scale3D(1, 1, 1); }
  35% {
    -webkit-transform: scale3D(0, 0, 1);
    transform: scale3D(0, 0, 1); } }
@-webkit-keyframes sk-foldCubeAngle {
  0%, 10% {
    -webkit-transform: perspective(140px) rotateX(-180deg);
    transform: perspective(140px) rotateX(-180deg);
    opacity: 0; }
  25%, 75% {
    -webkit-transform: perspective(140px) rotateX(0deg);
    transform: perspective(140px) rotateX(0deg);
    opacity: 1; }
  90%, 100% {
    -webkit-transform: perspective(140px) rotateY(180deg);
    transform: perspective(140px) rotateY(180deg);
    opacity: 0; } }
@keyframes sk-foldCubeAngle {
  0%, 10% {
    -webkit-transform: perspective(140px) rotateX(-180deg);
    transform: perspective(140px) rotateX(-180deg);
    opacity: 0; }
  25%, 75% {
    -webkit-transform: perspective(140px) rotateX(0deg);
    transform: perspective(140px) rotateX(0deg);
    opacity: 1; }
  90%, 100% {
    -webkit-transform: perspective(140px) rotateY(180deg);
    transform: perspective(140px) rotateY(180deg);
    opacity: 0; } }
/* ***********   END:: Loader Animation   ************* */
/* **************************************************** */
/*===============================================
 [SASS DIRECTORY ]
 [1] OVERLAY PATTER
 ==============================================*/
/*============OVERLAY PATTERN  ==================*/
/* 1. Overlay pattern ---------------------*/
body.no-bgbody {
  background-image: none; }
  .pattern-1 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/1.png); }
  .pattern-2 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/2.png); }
  .pattern-3 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/3.png); }
  .pattern-4 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/4.png); }
  .pattern-5 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/5.png); }
  .pattern-6 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/6.png); }
  .pattern-7 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/7.png); }
  .pattern-8 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/8.png); }
  .pattern-9 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/9.png); }
  .pattern-10 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/10.png); }
  .pattern-11 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/11.png); }
  .pattern-12 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/12.png); }
  .pattern-13 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/13.png); }
  .pattern-14 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/14.png); }
  .pattern-15 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/15.png); }
  .pattern-16 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/16.png); }
  .pattern-17 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/17.png); }
  .pattern-18 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/18.png); }
  .pattern-19 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/19.png); }
  .pattern-20 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/20.png); }
  .pattern-21 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/21.png); }
  .pattern-22 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/22.png); }
  .pattern-23 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/23.png); }
  .pattern-24 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/24.png); }
  .pattern-25 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/25.png); }
  .pattern-26 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/26.png); }
  .pattern-27 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/27.png); }
  .pattern-28 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/28.png); }
  .pattern-29 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/29.png); }
  .pattern-30 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/30.png); }
  .pattern-31 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/31.png); }
  .pattern-32 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/32.png); }
  .pattern-33 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/33.png); }
  .pattern-34 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/34.png); }
  .pattern-35 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/35.png); }
  .pattern-36 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/36.png); }
  .pattern-37 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/37.png); }
  .pattern-38 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/38.png); }
  .pattern-39 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/39.png); }
  .pattern-40 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/40.png); }
  .pattern-41 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/41.png); }
  .pattern-42 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/42.png); }
  .pattern-43 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/43.png); }
  .pattern-44 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/44.png); }
  .pattern-45 {
    background-image: url(<?php echo $sitetemasi;?>/images/patterns/45.png); }

.bd-example-row .row + .row {
  margin-top: 1rem; }
  .bd-example-row .row > .col, .bd-example-row .row > [class^="col-"] {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    background-color: rgba(86, 61, 124, 0.15);
    border: 1px solid rgba(86, 61, 124, 0.2); }
.bd-example-row .flex-items-top, .bd-example-row .flex-items-middle, .bd-example-row .flex-items-bottom {
  min-height: 6rem;
  background-color: rgba(255, 0, 0, 0.1); }

.bd-example-row-flex-cols .row {
  min-height: 10rem;
  background-color: rgba(255, 0, 0, 0.1); }

.bd-highlight {
  background-color: rgba(86, 61, 124, 0.15);
  border: 1px solid rgba(86, 61, 124, 0.15); }

.example-container {
  width: 800px;
  margin-right: auto;
  margin-left: auto;
  padding-right: 15px;
  padding-left: 15px;
  width: 100%; }

.example-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px; }

.example-content-main {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px; }
@media (min-width: 576px) {
  .example-content-main {
    flex: 0 0 50%;
    max-width: 50%; } }
@media (min-width: 992px) {
  .example-content-main {
    flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%; } }

.example-content-secondary {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px; }
@media (min-width: 576px) {
  .example-content-secondary {
    flex: 0 0 50%;
    max-width: 50%; } }
@media (min-width: 992px) {
  .example-content-secondary {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%; } }

.bd-example-container {
  min-width: 16rem;
  max-width: 25rem;
  margin-right: auto;
  margin-left: auto; }

.bd-example-container-header {
  height: 3rem;
  margin-bottom: 0.5rem;
  background-color: white;
  border-radius: 0.25rem; }

.bd-example-container-sidebar {
  float: right;
  width: 4rem;
  height: 8rem;
  background-color: #80bdff;
  border-radius: 0.25rem; }

.bd-example-container-body {
  height: 8rem;
  margin-right: 4.5rem;
  background-color: #957bbe;
  border-radius: 0.25rem; }

.bd-example-container-fluid {
  max-width: none; }

.bd-example {
  position: relative;
  padding: 1rem;
  margin: 1rem -15px;
  border: solid #f7f7f9;
  border-width: 0.2rem 0 0; }
  .bd-example::after {
    display: block;
    clear: both;
    content: ""; }
  @media (min-width: 576px) {
    .bd-example {
      padding: 1.5rem;
      margin-right: 0;
      margin-bottom: 0;
      margin-left: 0;
      border-width: 0.3rem; } }
  .bd-example + .highlight, .bd-example + .clipboard + .highlight {
    margin-top: 0; }
  .bd-example + p {
    margin-top: 2rem; }
  .bd-example .pos-f-t {
    position: relative;
    margin: -1rem; }
  @media (min-width: 576px) {
    .bd-example .pos-f-t {
      margin: -1.5rem; } }
.bd-example > .form-control + .form-control {
  margin-top: 0.5rem; }
.bd-example > .nav + .nav, .bd-example > .alert + .alert, .bd-example > .navbar + .navbar, .bd-example > .progress + .progress, .bd-example > .progress + .btn {
  margin-top: 1rem; }
.bd-example > .dropdown-menu:first-child {
  position: static;
  display: block; }
.bd-example > .form-group:last-child {
  margin-bottom: 0; }

.bd-example > .close {
  float: none; }

.bd-example-type .table .type-info {
  color: #999;
  vertical-align: middle; }

.bd-example-type .table td {
  padding: 1rem 0;
  border-color: #eee; }

.bd-example-type .table tr:first-child td {
  border-top: 0; }

.bd-example-type h1, .bd-example-type h2, .bd-example-type h3, .bd-example-type h4, .bd-example-type h5, .bd-example-type h6 {
  margin: 0; }

.bd-example-bg-classes p {
  padding: 1rem; }

.bd-example > img + img {
  margin-left: 0.5rem; }

.bd-example > .btn-group {
  margin-top: 0.25rem;
  margin-bottom: 0.25rem; }

.bd-example > .btn-toolbar + .btn-toolbar {
  margin-top: 0.5rem; }

.bd-example-control-sizing select, .bd-example-control-sizing input[type="text"] + input[type="text"] {
  margin-top: 0.5rem; }

.bd-example-form .input-group {
  margin-bottom: 0.5rem; }

.bd-example > textarea.form-control {
  resize: vertical; }

.bd-example > .list-group {
  max-width: 400px; }

.bd-example .fixed-top, .bd-example .sticky-top {
  position: static;
  margin: -1rem -1rem 1rem; }
.bd-example .fixed-bottom {
  position: static;
  margin: 1rem -1rem -1rem; }
@media (min-width: 576px) {
  .bd-example .fixed-top, .bd-example .sticky-top {
    margin: -1.5rem -1.5rem 1rem; }
  .bd-example .fixed-bottom {
    margin: 1rem -1.5rem -1.5rem; } }

.bd-example .pagination {
  margin-top: 0.5rem;
  margin-bottom: 0.5rem; }

.bd-example-modal {
  background-color: #fafafa; }
  .bd-example-modal .modal {
    position: relative;
    top: auto;
    right: auto;
    bottom: auto;
    left: auto;
    z-index: 1;
    display: block; }
  .bd-example-modal .modal-dialog {
    left: auto;
    margin-right: auto;
    margin-left: auto; }

.modal.show {
  z-index: 1072; }
  .modal.show .tooltip, .modal.show .popover {
    z-index: 1073; }

.bd-example-tabs .nav-tabs {
  margin-bottom: 1rem; }

.bd-example-tooltips {
  text-align: center; }

.bd-example-tooltips > .btn {
  margin-top: 0.25rem;
  margin-bottom: 0.25rem; }

.bs-tooltip-top-docs .arrow, .bs-tooltip-bottom-docs .arrow {
  left: 50%; }

.bs-tooltip-right-docs .arrow, .bs-tooltip-left-docs .arrow {
  top: 50%; }

.bd-example-popover-static {
  padding-bottom: 1.5rem;
  background-color: #f9f9f9; }

.bd-example-popover-static .popover {
  position: relative;
  display: block;
  float: left;
  width: 260px;
  margin: 1.25rem; }

.bs-popover-top-docs .arrow, .bs-popover-bottom-docs .arrow {
  left: 50%; }

.bs-popover-right-docs .arrow, .bs-popover-left-docs .arrow {
  top: 50%; }

.tooltip-demo a {
  white-space: nowrap; }

.bd-example-tooltip-static .tooltip {
  position: relative;
  display: inline-block;
  margin: 10px 20px;
  opacity: 1; }

.scrollspy-example {
  position: relative;
  height: 200px;
  margin-top: 0.5rem;
  overflow: auto; }

.scrollspy-example-2 {
  position: relative;
  height: 350px;
  overflow: auto; }

.bd-example-border-utils [class^="border"] {
  display: inline-block;
  width: 5rem;
  height: 5rem;
  margin: 0.25rem;
  background-color: #f5f5f5;
  border: 1px solid; }

.highlight {
  padding: 1rem;
  margin: 1rem -15px;
  background-color: #f7f7f9;
  -ms-overflow-style: -ms-autohiding-scrollbar; }
@media (min-width: 576px) {
  .highlight {
    padding: 1.5rem;
    margin-right: 0;
    margin-left: 0; } }

.highlight pre {
  padding: 0;
  margin-top: 0;
  margin-bottom: 0;
  background-color: transparent;
  border: 0; }

.highlight pre code {
  font-size: inherit;
  color: #212529; }

.bd-clipboard {
  position: relative;
  display: none;
  float: right; }
  .bd-clipboard + .highlight {
    margin-top: 0; }

.btn-clipboard {
  position: absolute;
  top: 0.5rem;
  right: 0.5rem;
  z-index: 10;
  display: block;
  padding: 0.25rem 0.5rem;
  font-size: 75%;
  color: #818a91;
  cursor: pointer;
  background-color: transparent;
  border: 0;
  border-radius: 0.25rem; }
  .btn-clipboard:hover {
    color: #fff;
    background-color: #027de7; }

@media (min-width: 768px) {
  .bd-clipboard {
    display: block; } }

h2.sub-title {
  font-size: 23px;
  margin: 24px 0;
  color: #495057; }

.simple-list {
  margin: 10px 0 6px 0;
  padding: 0;
  clear: both; }
  .simple-list li {
    padding: 0 0 7px 18px;
    position: relative;
    list-style-type: none; }
    .simple-list li:before {
      position: absolute;
      display: block;
      top: 10px;
      left: 0;
      font-family: 'FontAwesome';
      content: "\f111";
      font-size: 0.53em;
      line-height: 1em; }

.simple-list ul {
  margin: 0 0 15px;
  padding: 0;
  list-style-type: none;
  position: relative;
  bottom: -0.8em; }

.simple-list ul a {
  color: #495057; }
  .simple-list ul a:hover {
    color: <?php echo $tema['t8']; ?> !important; }

.arrow-list > li {
  padding: 0;
  position: relative; }
  .arrow-list > li > a {
    font-size: 15px;
    font-weight: 600;
    display: block;
    margin-bottom: 5px; }
  .arrow-list > li:before {
    display: none; }

.arrow-list li li:before {
  margin-right: 10px;
  font-size: 14px;
  font-family: 'FontAwesome';
  display: inline-block;
  top: 5px;
  content: '\f105'; }

.color {
  color: <?php echo $tema['t8']; ?> !important; }

.divider--md1 {
  height: 31.5px; }

.divider {
  height: 30px;
  clear: both;
  overflow: hidden;
  width: 100%; }

.item-article {
  font-size: 13px; }
  .item-article dl dt {
    color: #495057;
    font-size: 18px;
    font-weight: 500;
    padding: 0 0 4px 0; }
  .item-article dl dd {
    margin-bottom: 15px; }
  .item-article .title-decimal {
    font-size: 20px;
    color: <?php echo $tema['t8']; ?> !important;
    line-height: 44px;
    position: relative;
    padding: 0px 0 0px 69px; }
  @media (min-width: 1200px) {
    .item-article .title-decimal {
      font-size: 26px; } }
  .item-article .title-decimal:before {
    content: attr(data-content);
    display: table-cell;
    vertical-align: middle;
    position: absolute;
    top: 0px;
    line-height: 40px;
    background: <?php echo $tema['t8']; ?> !important;
    width: 44px;
    height: 44px;
    color: #fff;
    text-align: center;
    border-radius: 50%;
    left: 0; }
  .item-article .decimal-list {
    padding: 0;
    margin: 10px 0;
    list-style-type: none;
    counter-reset: myCounter;
    display: inline-block;
    width: 100%; }
    .item-article .decimal-list ol {
      counter-reset: sub-myCounter 0; }
  .item-article .decimal-list > li {
    padding: 0;
    position: relative;
    z-index: 5;
    margin-bottom: 15px;
    overflow: hidden; }
    .item-article .decimal-list > li:before {
      counter-increment: myCounter;
      content: counter(myCounter);
      color: white;
      background: #495057;
      display: inline-block;
      text-align: center;
      line-height: 26px;
      width: 26px;
      height: 26px;
      border-radius: 50%;
      float: left;
      font-size: 15px;
      margin-right: 10px; }
    .item-article .decimal-list > li > *:first-child {
      line-height: 26px;
      margin-bottom: 0; }
    .item-article .decimal-list > li ol {
      margin: 0;
      padding: 10px 0 0 15px;
      list-style: none; }
      .item-article .decimal-list > li ol > li > *:first-child {
        line-height: 25px; }
      .item-article .decimal-list > li ol > li:before {
        counter-increment: sub-myCounter;
        content: counter(myCounter) "." counter(sub-myCounter);
        font-size: 17px;
        display: inline-block;
        text-align: center;
        float: left;
        margin-right: 10px; }
  .item-article .tags {
    margin: 15px 0; }
    .item-article .tags .label {
      border: none;
      border-radius: 2px;
      margin: 0 2px 5px 0;
      font-size: 11px;
      padding: 12px;
      display: inline-block;
      text-transform: uppercase;
      font-weight: 400; }
  .item-article .swatch-item {
    width: 100%;
    min-height: 100px;
    position: relative;
    background: #333333;
    color: #ffffff;
    margin-bottom: 24px;
    padding: 20px; }
    .item-article .swatch-item.color-brand-primary {
      background: #234269; }
    .item-article .swatch-item.color-brand-secondary {
      background: #f87831; }
    .item-article .swatch-item.color-brand-warning {
      background: #f0ad4e; }
    .item-article .swatch-item.color-brand-danger {
      background: #d9534f; }
    .item-article .swatch-item.color-brand-info {
      background: #5bc0de; }
    .item-article .swatch-item.color-brand-success {
      background: #5cb85c; }
    .item-article .swatch-item.color-gray-darker {
      background: #212529; }
    .item-article .swatch-item.color-gray-dark {
      background: #343a40; }
    .item-article .swatch-item.color-gray {
      background: #495057; }
    .item-article .swatch-item.color-gray-light {
      background: #adb5bd;
      color: #495057; }
    .item-article .swatch-item.color-gray-lighter {
      background: #ced4da;
      color: #495057; }
    .item-article .swatch-item.color-gray-lightest {
      background: #e9ecef;
      color: #495057; }
  .item-article .button, .item-article .btn {
    padding: 9px 20px;
    background: #495057;
    color: #fff;
    border-radius: 3px;
    border: none; }
    .item-article .button:hover, .item-article .btn:hover {
      background: <?php echo $tema['t8']; ?> !important;
      border-color: <?php echo $tema['t8']; ?> !important;
      color: #fff; }
  .item-article .btn-primary {
    background: #234269; }
  .item-article .btn-warning {
    background: #f0ad4e; }
  .item-article .btn-success {
    background: #5cb85c; }
  .item-article .btn-danger {
    background: #d9534f; }
  .item-article .btn-info {
    background: #5bc0de; }
  .item-article .nav-tabs {
    border: 0;
    margin-bottom: 32px; }
    .item-article .nav-tabs .dropdown-menu {
      padding: 15px;
      border: 1px solid rgba(0, 0, 0, 0.15); }
      .item-article .nav-tabs > li.active > a, .item-article .nav-tabs > li.active > a:hover, .item-article .nav-tabs > li.active > a:focus {
        color: #ffffff;
        border: 0;
        background: <?php echo $tema['t8']; ?> !important; }
        .item-article .nav-tabs > li.active > a:before, .item-article .nav-tabs > li.active > a:hover:before, .item-article .nav-tabs > li.active > a:focus:before {
          border: 10px solid <?php echo $tema['t8']; ?> !important;
          border-color: <?php echo $tema['t8']; ?> !important transparent transparent transparent;
          content: "";
          position: absolute;
          top: 100%;
          left: 50%;
          margin-left: -10px; }
      .item-article .nav-tabs > li > a {
        background: #eaeaea;
        border-radius: 2px;
        border: 0;
        color: #2d2d2d;
        text-transform: uppercase;
        padding: 0 32px;
        height: 48px;
        line-height: 48px;
        position: relative; }
        .item-article .nav-tabs > li > a:hover {
          background: #ddd; }
  .item-article .nav-pills > li > a {
    border-radius: 3px; }
  .item-article .nav-pills .dropdown-menu {
    padding: 15px;
    border: 1px solid rgba(0, 0, 0, 0.15); }
  .item-article .nav-pills > li.active > a, .item-article .nav-pills > li.active > a:focus, .item-article .nav-pills > li.active > a:hover {
    color: #fff;
    background: <?php echo $tema['t8']; ?> !important; }
  .item-article .dropcap {
    display: block;
    float: left;
    font-size: 3.5em;
    line-height: 1em;
    margin: 0 5px 0 0; }
  .item-article .color-custom {
    color: <?php echo $tema['t8']; ?> !important; }
  .item-article .color-white {
    color: #fff; }
  .item-article .color-dark {
    color: #000; }
  .item-article .bg-custom {
    background: <?php echo $tema['t8']; ?> !important; }
  .item-article .bg-black {
    background: #000; }
  .item-article a.underline {
    text-decoration: underline; }
    .item-article a.underline:hover {
      text-decoration: none; }

/*===============================================
 [SASS DIRECTORY ]
 [1] PAGE ACCOUNT
 [2] PAGE INFORMATION
 [3] PAGE CHECKOUT
 [4] LANGUAGE CURENTY 
 [5] CSS FEAFURE MENU DEMO
 ==============================================*/
/*============PAGE ACCOUNT ==================*/
.account-login .well, .affiliate-login .well {
  min-height: 395px;
  background: #fff; }

.account-account #content > h2, .affiliate-account #content > h2 {
  /* [4] */
  /* [6] */
  /* [6] */
  /* [7] */
  font-size: 16px;
  font-size: 1.6rem;
  /* [8] */
  /* [8] */ }
.account-account #content .list-unstyled, .affiliate-account #content .list-unstyled {
  margin-bottom: 30px; }

.account-address #content .table-responsive .table > tbody > tr > td {
  line-height: 24px;
  padding: 10px; }

.custom-border {
  padding: 10px 20px; }

/* @group List Box */
.list-box {
  list-style: none;
  margin: 0px;
  padding: 0px; }

.btn-link:focus, .btn-link:hover {
  text-decoration: none; }

.list-box li {
  border-bottom: 1px solid #ececec; }

.list-box li:last-child {
  border-bottom: 0; }

.list-box li a {
  display: inline-block;
  word-wrap: break-word;
  padding: 8px 0;
  margin-right: 5px;
  color: #495057; }
  .list-box li a:hover {
    color: <?php echo $tema['t8']; ?> !important; }

/* @end */
/*============PAGE CHECKOUT ==================*/
.checkout-cart .panel-group .panel, .checkout-checkout .panel-group .panel {
  border-radius: 0; }

.table-responsive .table thead > * {
  background-color: rgba(51, 51, 51, 0.1);
  font-weight: bold; }
  .table-responsive .table tbody td.text-left a {
    font-weight: bold;
    color: #666; }
  .table-responsive .table tbody td.text-left:hover a {
    color: <?php echo $tema['t8']; ?> !important; }

.checkout-cart .btn-block input {
  min-width: 40px;
  text-align: center; }

.checkout-cart .bg-page-404 .text-center {
  width: 100%; }
  .checkout-cart .bg-page-404 .text-center > div {
    display: none; }
.checkout-cart .bg-page-404 .col-sm-5 img {
  display: none; }

/*============LANGUAGE CURENCCY ==================*/
/*============ CSS FEAFURE MENU DEMO ==================*/
/*===============================================
 [SASS DIRECTORY ]
 ==============================================*/
@media (min-width: 1200px) {
  .content-aside {
    width: 300px; } }

.page-extra {
  margin-top: 40px; }

.custom-scoll {
  display: none; }

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
              color: <?php echo $tema['t8']; ?> !important; }
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
      color: <?php echo $tema['t8']; ?> !important; }
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
      color: #999999;
      background-color: transparent;
      margin-top: 0;
      position: static;
      float: left; }
      .best-seller .so-extraslider .owl2-controls .owl2-nav > div:hover {
        color: <?php echo $tema['t8']; ?> !important; }
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
  color: #f55 !important; }

.module.main-newsleter-popup .so-custom-popup {
  background-color: #fff;
  border-radius: 0px;
  padding: 0;
  background-repeat: no-repeat !important; }
@media (min-width: 768px) and (max-width: 991px) {
  .module.main-newsleter-popup .so-custom-popup {
    width: 85% !important; }
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
  background-color: <?php echo $tema['t8']; ?> !important;
  border: none;
  right: 0;
  top: -31px; }
  .module.main-newsleter-popup .so-custom-popup .popup-close:hover {
    background-color: #c86e00; }
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
    background-color: #c86e00; }
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
      color: #555555;
      font-size: 14px;
      transition: all 0.2s ease-in-out 0s; }
      .module.main-newsleter-popup .so-custom-popup .oca_popup .popup-content .socials li a:hover {
        color: #fff;
        background-color: <?php echo $tema['t8']; ?> !important;
        border-color: <?php echo $tema['t8']; ?> !important; }

.main-newsleter-popup .show-error {
  display: inline-block;
  margin-left: 0 !important;
  position: relative;
  top: -10px;
  width: 100%; }

/*============ MODULE LOGIN POPUP ==================*/
body #so_sociallogin a.btn-social-icon {
  margin: 0 5px 0 0; }
  body #so_sociallogin .block-popup-login .tt_popup_login {
    border: none;
    background-color: <?php echo $tema['t8']; ?> !important;
    height: 42px; }
    body #so_sociallogin .block-popup-login .tt_popup_login strong {
      font-size: 16px;
      font-weight: 700;
      background-color: <?php echo $tema['t8']; ?> !important;
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
        background-color: <?php echo $tema['t8']; ?> !important; }
    body #so_sociallogin .block-popup-login .block-content .action.login {
      background-image: none;
      padding: 0 20px;
      background-color: #666;
      border-radius: 4px; }
      body #so_sociallogin .block-popup-login .block-content .action.login:hover {
        background-color: <?php echo $tema['t8']; ?> !important; }

/*============ BREADCRUMB ==================*/
.breadcrumbs {
  /* background-color: #efefef;
   margin-bottom: 60px;*/ }
  .breadcrumbs .current-name {
    font-size: 18px;
    color: #222;
    text-transform: uppercase;
    float: left;
    font-weight: 700;
    margin: 25px 0;
    display: none;
    /*ul.breadcrumb{
     float: $right;
     width: auto;
     }*/ }

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
      text-decoration: none !important;
      font-size: 14px; }
    ul.breadcrumb li:last-child {
      padding: 5px 0px; }
      ul.breadcrumb li:last-child a {
        color: <?php echo $tema['t8']; ?> !important; }
    ul.breadcrumb li:hover a {
      color: <?php echo $tema['t8']; ?> !important; }

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
        background: #222;
        margin: 0 2px;
        display: inline-block;
        float: left;
        opacity: 1;
        transition: all 0.2s ease-in-out 0s; }
        .content-aside .product-simple .so-extraslider .owl2-controls .owl2-dots .owl2-dot span {
          display: none; }
        .content-aside .product-simple .so-extraslider .owl2-controls .owl2-dots .owl2-dot:hover {
          background-color: <?php echo $tema['t8']; ?> !important; }
        .content-aside .product-simple .so-extraslider .owl2-controls .owl2-dots .owl2-dot.active {
          width: 25px;
          background-color: <?php echo $tema['t8']; ?> !important; }
    .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav {
      top: 1px;
      position: absolute;
      right: 0px !important; }
      .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev, .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next {
        background-color: #222;
        border: none;
        border-radius: 0px;
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
            content: "\f105"; }
        .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev.owl2-prev, .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next.owl2-prev {
          left: 0; }
          .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev.owl2-prev:before, .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next.owl2-prev:before {
            content: "\f104"; }
        .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev:hover, .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next:hover {
          background-color: <?php echo $tema['t8']; ?> !important; }
          .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev:hover:before, .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next:hover:before {
            color: #fff; }
      .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav > div {
        margin-top: 0;
        line-height: 28px !important; }
        .content-aside .product-simple .so-extraslider .owl2-controls .owl2-nav > div:before {
          position: static;
          font-weight: 400; }
  .content-aside .product-simple .so-extraslider:hover .owl2-controls .owl2-nav > div {
    /*@include transform(scale(1));          
     @include effect-block-show();*/ }
.content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner {
  display: inline-block;
  padding-bottom: 10px;
  margin-bottom: 10px;
  width: 100%;
  border-bottom: 1px solid #eaeaea; }
  .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner:last-child {
    border-bottom: none;
    margin-bottom: 0; }
  .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image {
    width: 80px;
    float: left; }
    .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image:hover img {
      opacity: 0.8; }
  .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info {
    margin-top: 0px;
    margin-left: 95px;
    background: transparent;
    color: #666; }
    .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .item-title {
      line-height: 100%;
      margin-bottom: 7px;
      padding: 0; }
      .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .item-title a {
        /* [4] */
        /* [6] */
        /* [6] */
        /* [7] */
        font-size: 14px;
        font-size: 1.4rem;
        /* [8] */
        /* [8] */
        font-weight: 400;
        text-transform: capitalize;
        color: #222; }
        .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .item-title a:hover {
          color: <?php echo $tema['t8']; ?> !important; }
  .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner:last-child {
    margin-bottom: 0;
    padding-bottom: 0; }

/*============ MODULE MEGAMENU HORIZONTAL  ==================*/
.container-megamenu ul.megamenu li .sub-menu {
  z-index: 998; }
  .container-megamenu ul.megamenu li .sub-menu .content {
    box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.2);
    padding: 30px;
    font-size: 14px; }
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
  color: <?php echo $tema['t8']; ?> !important; }

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
  font-size: 1.6rem;
  /* [8] */
  /* [8] */
  border-bottom: 1px solid #eaeaea;
  width: 100%; }
.container-megamenu.horizontal .content-feature li a, .container-megamenu.horizontal ul.megamenu li .sub-menu .content .static-menu .menu ul ul li a, .container-megamenu.horizontal ul.megamenu li .sub-menu .content .html a.subcategory_item, .container-megamenu.horizontal ul.megamenu .sub-menu .content .hover-menu .menu ul a.main-menu {
  line-height: 30px;
  font-size: 14px;
  font-weight: 400;
  color: #464646; }
  .container-megamenu.horizontal .content-feature li a:hover, .container-megamenu.horizontal ul.megamenu li .sub-menu .content .static-menu .menu ul ul li a:hover, .container-megamenu.horizontal ul.megamenu li .sub-menu .content .html a.subcategory_item:hover, .container-megamenu.horizontal ul.megamenu .sub-menu .content .hover-menu .menu ul a.main-menu:hover {
    color: <?php echo $tema['t8']; ?> !important; }
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
    line-height: 100%;
    /*-------- SUB MENU HORIZONTAL ----------*/ }
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
.container-megamenu.horizontal .item-layouts ul {
  margin-bottom: 20px; }
.container-megamenu.horizontal .item-layouts ul li {
  line-height: 30px; }
.container-megamenu.horizontal .shoppage {
  width: 100%;
  vertical-align: top;
  font-size: 14px;
  margin-bottom: 15px; }
  .container-megamenu.horizontal .shoppage.list-inline > li {
    padding: 0 15px; }
  .container-megamenu.horizontal .shoppage .title-shoppage {
    text-transform: uppercase;
    display: block;
    font-weight: bold;
    color: #222;
    font-size: 16px;
    line-height: 100%;
    padding-bottom: 12px;
    margin-bottom: 6px;
    border-bottom: 1px solid #eaeaea; }
    .container-megamenu.horizontal .shoppage ul li {
      transition: all 0.2s ease-in-out; }
    .container-megamenu.horizontal .shoppage ul .submenuitem {
      color: #777; }
    .container-megamenu.horizontal .shoppage ul a {
      display: inline-block;
      padding: 0;
      line-height: 30px;
      position: relative; }
  .container-megamenu.horizontal .shoppage .submenu-shop {
    position: relative; }
    .container-megamenu.horizontal .shoppage .submenu-shop .fa-angle-right {
      position: absolute;
      right: 0;
      margin: 5px 15px; }
    .container-megamenu.horizontal .shoppage .submenu-shop .menu-label {
      right: -25px;
      left: auto;
      margin-top: -14px; }
    .container-megamenu.horizontal .shoppage .submenu-shop .menu-label-new {
      background-color: #0f8db3; }
      .container-megamenu.horizontal .shoppage .submenu-shop .menu-label-new:after {
        color: #0f8db3; }
    .container-megamenu.horizontal .shoppage .submenu-shop .menu-label-hot {
      background-color: #ef7c0a; }
      .container-megamenu.horizontal .shoppage .submenu-shop .menu-label-hot:after {
        color: #ef7c0a; }
    .container-megamenu.horizontal .shoppage .submenu-shop .menu-label {
      position: absolute;
      top: 80%;
      right: -30px;
      padding: 2px 4px;
      margin-top: -20px;
      color: #fff;
      line-height: 1.3;
      font-size: 8px;
      font-family: Karla, Arial, Helvetica, sans-serif;
      text-transform: uppercase;
      transform: translateY(-50%);
      transition: opacity 0.3s ease-in-out; }
      .container-megamenu.horizontal .shoppage .submenu-shop .menu-label:after {
        content: "\f0da";
        font-family: FontAwesome;
        position: absolute;
        z-index: -1;
        bottom: 5px;
        font-size: 16px;
        position: absolute;
        bottom: -9px;
        left: 3px; }
    .container-megamenu.horizontal .shoppage .submenu-shop:hover ul {
      display: block; }
    .container-megamenu.horizontal .shoppage .submenu-shop ul {
      display: none;
      width: 210px;
      position: absolute;
      z-index: 10;
      left: 90%;
      top: -15px;
      box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 25px;
      padding: 20px;
      background: white;
      border-width: 1px;
      border-style: solid;
      border-color: #e6e6e6;
      border-image: initial;
      border-radius: 2px; }
      .container-megamenu.horizontal .shoppage .submenu-shop ul:before {
        position: absolute;
        display: block;
        border-color: transparent;
        border-style: solid;
        border-width: 10px;
        content: "";
        top: 20px;
        left: -11px;
        border-right-color: #e6e6e6;
        border-left-width: 0; }
      .container-megamenu.horizontal .shoppage .submenu-shop ul:after {
        position: absolute;
        display: block;
        border-color: transparent;
        border-style: solid;
        border-width: 10px;
        content: "";
        top: 20px;
        left: -10px;
        border-right-color: #fff;
        border-left-width: 0; }
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
    color: <?php echo $tema['t8']; ?> !important; }
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
    color: <?php echo $tema['t8']; ?> !important; }
.container-megamenu.horizontal .sub-menu .feature-blog .clearfix {
  margin: 20px; }
@media (min-width: 1200px) {
  .container-megamenu.horizontal ul.megamenu .full-width > .sub-menu {
    max-width: 1170px;
    right: auto !important;
    left: 0; } }
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
   display: block !important;
   .content{
   display: block !important;
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
      /* [8] */
      color: #222;
      font-weight: 700; }
    .container-megamenu.horizontal ul.megamenu .quicklinks-menu ul li a {
      margin-left: 5px; }

/*============ MODULE MEGAMENU VERTICAL  ==================*/
/*--- mega menu vertical ---*/
.container-megamenu ul.megamenu li .sub-menu .content .hover-menu a::before {
  display: none; }

.container-megamenu.vertical ul.megamenu > li.click::before, .container-megamenu.vertical ul.megamenu > li.hover::before {
  padding: 0; }

.common-home .container-megamenu.vertical .vertical-wrapper ul.megamenu > li.with-sub-menu > a > b.fa {
  margin-top: 3px; }

.vertical ul.megamenu > li.click::before, .vertical ul.megamenu > li.hover::before {
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
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        color: #fff;
        font-weight: 700;
        /* [4] */
        /* [6] */
        /* [6] */
        /* [7] */
        font-size: 16px;
        font-size: 1.6rem;
        /* [8] */
        /* [8] */
        line-height: 40px;
        padding: 0px 0px 0px 20px !important;
        margin: 0;
        position: relative;
        text-transform: uppercase;
        display: block; }
        .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container > div {
          float: left;
          padding-top: 11px;
          margin: 0px 9px 0 0; }
          .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container > div > span {
            box-shadow: none; }
        .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container:hover {
          cursor: pointer; }
  .container-megamenu.vertical .vertical-wrapper .megamenu-pattern {
    position: relative;
    z-index: 1; }
  @media (min-width: 992px) {
    .container-megamenu.vertical .vertical-wrapper ul.megamenu {
      background-color: #fff; }
      .container-megamenu.vertical .vertical-wrapper ul.megamenu > li {
        cursor: pointer;
        border: none;
        margin: 0;
        position: relative; }
        .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > a {
          color: #666;
          display: block;
          font-size: 16px;
          font-weight: 400;
          padding: 9px 0;
          line-height: 22px;
          position: relative;
          text-transform: capitalize;
          background: none;
          height: auto; }
          .container-megamenu.vertical .vertical-wrapper ul.megamenu > li.active > a, .container-megamenu.vertical .vertical-wrapper ul.megamenu > li:hover > a {
            color: <?php echo $tema['t8']; ?> !important; }
      .container-megamenu.vertical .vertical-wrapper ul.megamenu .loadmore {
        padding: 15px 15px 15px 50px;
        line-height: 100%; }
        .container-megamenu.vertical .vertical-wrapper ul.megamenu .loadmore i {
          left: 14px;
          top: 16px;
          position: absolute;
          font-size: 14px;
          color: <?php echo $tema['t8']; ?> !important; }
        .container-megamenu.vertical .vertical-wrapper ul.megamenu .loadmore .more-view {
          color: <?php echo $tema['t8']; ?> !important;
          font-size: 14px; } }

.container-megamenu.vertical ul.megamenu > li > a strong {
  font-weight: 400; }
.container-megamenu.vertical .vertical-wrapper {
  border: none;
  margin: 0;
  padding: 0;
  box-shadow: none;
  border-radius: 0; }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu .sub-menu .content .img-banner img {
    width: 100%; }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > a img {
    height: auto;
    margin: 0;
    margin-right: 10px;
    /*---------------- SUB MENU VERTICAL -----------------*/ }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu .sub-menu .content > .border {
    padding: 0;
    border: none; }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu .sub-menu .content > .row {
    padding-top: 5px; }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > .sub-menu .content {
    padding: 30px;
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
      /* [8] */
      margin: 0 0 0px;
      display: block;
      font-weight: 700;
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
          /* [8] */
          font-weight: 400;
          display: block;
          line-height: 28px; }
        .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > .sub-menu .content .static-menu .menu > ul ul li:before {
          display: none; }
          .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > .sub-menu .content .static-menu .menu > ul ul li:hover a {
            color: <?php echo $tema['t8']; ?> !important; }
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
.container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.style1 .sub-menu .content {
  padding: 0; }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.style1 .sub-menu .content .col-sm-7 {
    padding-right: 0; }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.style1 .sub-menu .content .col-sm-5 {
    padding-left: 0; }
.container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.style1 .img-vbanner {
  float: right;
  padding-right: 15px; }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.style1 .img-vbanner a {
    margin-bottom: 0px;
    display: block; }
    .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.style1 .img-vbanner a.last {
      margin-bottom: 0; }
.container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.style1 .categories {
  padding: 15px 0 0 30px; }
  .container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.style1 .categories .static-menu .menu > ul > li {
    margin-bottom: 0px; }
.container-megamenu.vertical .vertical-wrapper ul.megamenu .item-vertical.item-style2 {
  /*.sub-menu{
   opacity: 1;
   display: block !important;
   .content{
   display: block !important;
   > .row{
   }
   } 
   }  */ }
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
            color: <?php echo $tema['t8']; ?> !important; }
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

/*============ MODULE FILTER ==================*/
.module.so_filter_wrap .so-filter-option.so-filter-price .content_scroll {
  margin: 20px 0 10px 10px; }
.module.so_filter_wrap .modcontent {
  background-color: #fff;
  margin: 0; }
  .module.so_filter_wrap .modcontent ul li.so-filter-options {
    margin-bottom: 10px;
    padding: 0px; }
    .module.so_filter_wrap .modcontent ul li.so-filter-options .so-filter-heading {
      padding: 0;
      margin-bottom: 0px;
      background-color: transparent; }
      .module.so_filter_wrap .modcontent ul li.so-filter-options .so-filter-heading .so-filter-heading-text {
        float: left;
        color: #222;
        font-weight: 700;
        text-transform: uppercase;
        /* [4] */
        /* [6] */
        /* [6] */
        /* [7] */
        font-size: 14px;
        font-size: 1.4rem;
        /* [8] */
        /* [8] */
        padding: 0; }
    .module.so_filter_wrap .modcontent ul li.so-filter-options .so-filter-content-opts {
      border: none; }
      .module.so_filter_wrap .modcontent ul li.so-filter-options .so-filter-content-opts .so-filter-content-opts-container {
        padding: 0; }
        .module.so_filter_wrap .modcontent ul li.so-filter-options .so-filter-content-opts .so-filter-content-opts-container .opt-select {
          margin: 0; }
        .module.so_filter_wrap .modcontent ul li.so-filter-options .so-filter-content-opts .so-filter-content-opts-container .opt-select ~ .opt-select {
          border-top: 1px solid #eaeaea; }
        .module.so_filter_wrap .modcontent ul li.so-filter-options .so-filter-content-opts .so-filter-content-opts-container .so-option-container {
          padding: 5px 0; }
          .module.so_filter_wrap .modcontent ul li.so-filter-options .so-filter-content-opts .so-filter-content-opts-container .so-option-container label {
            margin-bottom: 0;
            font-size: 14px; }
          .module.so_filter_wrap .modcontent ul li.so-filter-options .so-filter-content-opts .so-filter-content-opts-container .so-option-container .option-count {
            padding: 0; }
            .module.so_filter_wrap .modcontent ul li.so-filter-options .so-filter-content-opts .so-filter-content-opts-container .so-option-container .option-count span {
              color: #666;
              font-size: 14px; }
          .module.so_filter_wrap .modcontent ul li.so-filter-options .so-filter-content-opts .so-filter-content-opts-container .so-option-container:hover label, .module.so_filter_wrap .modcontent ul li.so-filter-options .so-filter-content-opts .so-filter-content-opts-container .so-option-container:hover .option-count span {
            color: <?php echo $tema['t8']; ?> !important; }
    .module.so_filter_wrap .modcontent ul li.so-filter-options:last-child {
      border-bottom: none;
      margin-bottom: 0; }
  .module.so_filter_wrap .modcontent .so-filter-content-opts-container {
    overflow: inherit; }
    .module.so_filter_wrap .modcontent .so-filter-content-opts-container .so-filter-option label {
      font-size: 12px;
      text-transform: capitalize; }
    .module.so_filter_wrap .modcontent .so-filter-content-opts-container .opt-select {
      border: none; }
      .module.so_filter_wrap .modcontent .so-filter-content-opts-container .opt-select.so-filter-option-sub {
        /*margin: 0 -20px;
         padding: 0 20px;*/ }
        .module.so_filter_wrap .modcontent .so-filter-content-opts-container .opt-select.so-filter-option-sub:hover {
          background-color: #fff; }
    .module.so_filter_wrap .modcontent .so-filter-content-opts-container .noUi-horizontal .noUi-handle {
      border-radius: 100%; }
      .module.so_filter_wrap .modcontent .so-filter-content-opts-container .noUi-horizontal .noUi-handle:before, .module.so_filter_wrap .modcontent .so-filter-content-opts-container .noUi-horizontal .noUi-handle:after {
        display: none; }
    .module.so_filter_wrap .modcontent .so-filter-content-opts-container .put-min_max {
      display: inline-block;
      background: #fff;
      border: 1px solid #ddd;
      width: 49%;
      padding: 0 5px;
      float: left; }
      .module.so_filter_wrap .modcontent .so-filter-content-opts-container .put-min_max.put-min {
        margin-right: 2%; }
      .module.so_filter_wrap .modcontent .so-filter-content-opts-container .put-min_max input {
        background: transparent; }
    .module.so_filter_wrap .modcontent .so-filter-content-opts-container .input-group {
      border: 1px solid #ddd;
      background-color: #fff; }
      .module.so_filter_wrap .modcontent .so-filter-content-opts-container .input-group .form-control {
        background: transparent; }
      .module.so_filter_wrap .modcontent .so-filter-content-opts-container .input-group .btn.btn-default {
        padding: 7px;
        color: #555;
        background: transparent;
        border-radius: 0; }
        .module.so_filter_wrap .modcontent .so-filter-content-opts-container .input-group .btn.btn-default:hover {
          background: transparent;
          color: <?php echo $tema['t8']; ?> !important; }
    .module.so_filter_wrap .modcontent .so-filter-content-opts-container .so-filter-option:hover .option-input:before {
      background-color: transparent;
      border: 2px solid #999; }
  .module.so_filter_wrap .modcontent .so-filter-content-opts-container .so-filter-option .option-input .fa-square-o {
    position: relative;
    top: 0px; }
.module.so_filter_wrap .modcontent .so-filter-content-opts-container .so-filter-option.opt_active .option-input .fa-check-square-o {
  color: <?php echo $tema['t8']; ?> !important; }
.module.so_filter_wrap .modcontent .so-filter-content-opts-container .so-filter-option.opt_active .option-input:before {
  background-color: transparent;
  border: 2px solid #999; }
.module.so_filter_wrap .modcontent .so-filter-option.so-filter-price {
  text-align: left;
  padding: 0;
  /*.content_scroll {
   margin: 30px 0 20px;
   }*/ }
.module.so_filter_wrap .modcontent .so-filter-content-opts-container ul li {
  float: left; }
.module.so_filter_wrap .modcontent .so-filter-option.so-filter-price .content_min_max {
  display: block; }
  .module.so_filter_wrap .modcontent .so-filter-option.so-filter-price .content_min_max .txt-price-shopby {
    min-width: 60px;
    width: 49%;
    padding: 0 5px;
    display: inline-block;
    float: left;
    border: 1px solid #ddd;
    display: inline-block; }
    .module.so_filter_wrap .modcontent .so-filter-option.so-filter-price .content_min_max .txt-price-shopby.txt-price-shopby-fisrt {
      margin-right: 2%; }
    .module.so_filter_wrap .modcontent .so-filter-option.so-filter-price .content_min_max .txt-price-shopby span {
      display: table-cell;
      vertical-align: middle; }
      .module.so_filter_wrap .modcontent .so-filter-option.so-filter-price .content_min_max .txt-price-shopby span.text-current {
        position: relative;
        top: 1px; }
  .module.so_filter_wrap .modcontent .so-filter-option.so-filter-price .content_min_max .input_max, .module.so_filter_wrap .modcontent .so-filter-option.so-filter-price .content_min_max .input_min {
    border: none;
    box-shadow: none;
    padding: 0;
    margin: 0;
    width: 45px;
    min-width: 45px; }
.module.so_filter_wrap .modcontent .noUi-handle {
  border: 1px solid #eaeaea;
  width: 15px;
  height: 15px;
  left: -15px;
  right: 15px !important;
  top: -4px; }
  .module.so_filter_wrap .modcontent .noUi-handle:hover {
    cursor: e-resize; }
.module.so_filter_wrap .modcontent .noUi-connect {
  box-shadow: none;
  height: 8px;
  background: <?php echo $tema['t8']; ?> !important;
  border-radius: 4px; }
.module.so_filter_wrap .modcontent .noUi-background {
  background: #555555;
  box-shadow: none;
  height: 8px;
  border-radius: 4px; }
.module.so_filter_wrap .modcontent .noUi-target {
  border: none; }
.module.so_filter_wrap .modcontent .clear_filter {
  padding: 10px 0 20px 0px; }
.module.so_filter_wrap .modcontent #btn_resetAll {
  padding: 8px 15px;
  font-size: 14px;
  font-weight: bold;
  text-transform: uppercase;
  color: #fff;
  background-color: #777; }
  .module.so_filter_wrap .modcontent #btn_resetAll:hover {
    background-color: <?php echo $tema['t8']; ?> !important; }
  .module.so_filter_wrap .modcontent #btn_resetAll .fa.fa-times {
    color: <?php echo $tema['t8']; ?> !important; }

.so-filter-content-opts-container .option-count {
  background-color: #ccc !important;
  min-width: 24px;
  text-align: center;
  margin-top: 3px; }
  .so-filter-content-opts-container .option-count:not(.opt_close):after {
    display: none;
    border-right-color: #777; }

.so_filter_wrap .modcontent .so-filter-heading i {
  float: right; }
.so_filter_wrap .modcontent .so-filter-content-opts-container label {
  font-weight: normal; }
.so_filter_wrap .modcontent .so-filter-content-opts-container .option-count {
  float: right; }

.so-filter-content-opts-container .option-count span {
  color: #666; }

#content .filter-horizontal {
  margin-bottom: 30px; }
  #content .filter-horizontal .so-filter-heading {
    padding: 0 15px; }
  #content .filter-horizontal .so-filter-content-opts-container {
    padding: 15px; }
    #content .filter-horizontal .so-filter-content-opts-container .so-filter-iscroll {
      padding: 10px 0; }
  #content .filter-horizontal ul {
    display: -webkit-box;
    display: -moz-box;
    display: box;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flexbox;
    display: flex; }
  #content .filter-horizontal li.so-filter-options {
    -webkit-box-flex: 1;
    -moz-box-flex: 1;
    box-flex: 1;
    -webkit-flex: 1;
    -moz-flex: 1;
    -ms-flex: 1;
    flex: 1;
    border: none;
    border-right: 1px solid #eaeaea;
    margin: 0; }
    #content .filter-horizontal li.so-filter-options:last-child {
      border-right: none; }
    #content .filter-horizontal li.so-filter-options .so-filter-heading {
      margin-bottom: 0; }
  #content .filter-horizontal .clear_filter {
    padding: 20px;
    border-top: 1px solid #eaeaea; }
  #content .filter-horizontal h3.modtitle {
    color: #222;
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 15px;
    text-transform: uppercase;
    margin-top: 0; }
  #content .filter-horizontal .modcontent {
    border: 1px solid #eaeaea; }
    #content .filter-horizontal .modcontent ul li.so-filter-options {
      border-radius: 0;
      padding: 10px 0; }

/*============ MODULE TAGS ===================*/
.block-tags {
  margin-top: 20px; }
  .block-tags .so-popular-tag a {
    float: left;
    font-size: 13px !important;
    padding: 8px 15px;
    border: 1px solid #eaeaea;
    border-radius: 5px;
    margin: 0 5px 5px 0;
    line-height: 100%;
    background-color: #fff; }
    .block-tags .so-popular-tag a:hover {
      color: #fff;
      background-color: <?php echo $tema['t8']; ?> !important;
      border-color: <?php echo $tema['t8']; ?> !important; }

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
    border-bottom: 1px solid #eaeaea; }
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
      color: <?php echo $tema['t8']; ?> !important; }
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
        background-color: <?php echo $tema['t8']; ?> !important; }

.module.category-style .box-category {
  max-height: 700px;
  overflow-y: scroll; }

.box-category ul li a.active {
  color: <?php echo $tema['t8']; ?> !important; }

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
            color: <?php echo $tema['t8']; ?> !important; }

/*================ So Sticky ===============*/
@media (max-width: 1199px) {
  #content #so-groups {
    display: none; } }

#content #so-groups > a span {
  background-color: <?php echo $tema['t8']; ?> !important; }
#content #so-groups > a:hover {
  background-color: #c86e00; }

#content .so-groups-sticky {
  background-color: <?php echo $tema['t8']; ?> !important; }
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
    background-color: <?php echo $tema['t8']; ?> !important !important; }
    #content .so-groups-sticky .product-thumb .button-group button:hover, #content .so-groups-sticky .form-content .form-box #button-search:hover {
      background-color: #c86e00 !important; }
  #content .so-groups-sticky .form-content .form-box .product-thumb .caption h4 a:hover {
    color: <?php echo $tema['t8']; ?> !important; }
  #content .so-groups-sticky .form-content .form-box .price .price-new, #content .so-groups-sticky .form-content .form-box .price span.price {
    color: #222; }
  #content .so-groups-sticky .form-content .form-box .product-thumb .image .bt-sale, #content .so-groups-sticky .popup-header {
    background-color: <?php echo $tema['t8']; ?> !important; }
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
      color: <?php echo $tema['t8']; ?> !important; }
  #content .so-groups-sticky .form-content .form-box input.field:hover, #content .so-groups-sticky .form-content .form-box select.field:hover {
    cursor: pointer; }

#so-groups .form-content .form-box a.account-url:hover .account-txt {
  color: <?php echo $tema['t8']; ?> !important; }

#so-groups .form-content .form-box input + i {
  font-size: 16px;
  margin-top: -9px; }
  #so-groups .form-content .form-box input + i:hover {
    color: <?php echo $tema['t8']; ?> !important; }

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
    background-color: <?php echo $tema['t8']; ?> !important;
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
  background-color: <?php echo $tema['t8']; ?> !important; }

.so-onepagecheckout .price {
  font-size: 14px; }

body #sosearchpro .dropdown-menu .media-body .box-price .price-new {
  color: <?php echo $tema['t8']; ?> !important; }
body #sosearchpro .dropdown-menu .media-body .box-price .price {
  font-size: 13px;
  color: <?php echo $tema['t8']; ?> !important; }
body #sosearchpro .dropdown-menu .media-body .box-price span {
  font-weight: normal;
  font-size: 13px;
  color: #666; }

/*====== so countdown popup =====*/
#content #so_popup_countdown .modal-header {
  background-color: <?php echo $tema['t8']; ?> !important; }
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
    height: auto !important;
    margin: 0 auto;
    transition: none; } }
body #so_popup_countdown .modal-footer #so_countdown_timer .time-item {
  /*width: 56px;
   height: 56px;*/
  line-height: 18px;
  padding-top: 8px; }

#so_popup_countdown .list-cates {
  background: url(<?php echo $sitetemasi;?>/images/bg-popupc.jpg) no-repeat;
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
          background-image: url(<?php echo $sitetemasi;?>/images/icon/css_sprites.png);
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
          background-color: <?php echo $tema['t8']; ?> !important; }
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
      color: <?php echo $tema['t8']; ?> !important; }
      #so_popup_countdown .list-cates .customer a:hover {
        color: #c86e00; }

.hidden-popup-countdown {
  overflow: visible; }
  .hidden-popup-countdown #so_popup_countdown {
    display: none !important; }

.hidden-popup-countdown .modal-backdrop {
  display: none !important; }

.hidden-popup-countdown.modal-open .modal-backdrop:first-child {
  display: none !important; }

.hidden-popup-countdown.modal-open .modal-backdrop {
  display: block !important; }

body .mfp-close {
  right: 0;
  left: auto; }

#product-quick .owl2-carousel .owl2-stage-outer {
  direction: ltr; }

.so-fb-message-style-default .so-fb-message-head {
  height: 30px;
  line-height: 30px;
  padding: 0 5px; }

.popup-recent .space .col-sm-4:nth-child(3n+1) {
  clear: both; }

.so-show-demos-preview {
  top: 70% !important; }

/*===============================================
 [SASS DIRECTORY ]
 [1] SO LATSET BLOG
 [2] SIMPLE BLOG
 [3] ARTICLE INFO
 ==============================================*/
/*============SO LATSET BLOG ==================*/
/*============ SIMPLE BLOG ==================*/
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
    /* [8] */
    color: #495057; }

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
    color: <?php echo $tema['t8']; ?> !important; }
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
      transition: all 0.2s ease-in-out 0s; }
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
        color: <?php echo $tema['t8']; ?> !important; }
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
    clear: both !important; } }
.blog-listitem .blog-grid-2 .blog-item-inner {
  background: none;
  box-shadow: none !important; }
  .blog-listitem .blog-grid-2 .blog-item-inner .itemBlogContent {
    padding: 10px 0; }
.blog-listitem .blog-grid-2 .article-description {
  display: none; }
@media (min-width: 1200px) {
  .blog-listitem .blog-grid-3:nth-child(3n+1) {
    clear: both !important; } }
.blog-listitem .blog-grid-3 .blog-item-inner {
  background: none;
  box-shadow: none !important; }
  .blog-listitem .blog-grid-3 .blog-item-inner .itemBlogContent {
    padding: 10px 0; }
.blog-listitem .blog-grid-3 .article-description {
  display: none; }
@media (min-width: 1200px) {
  .blog-listitem .blog-grid-4:nth-child(4n+1) {
    clear: both !important; } }
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
  color: #495057;
  font-weight: bold;
  margin-bottom: 5px; }
div.article-info .article-sub-title {
  display: inline-block;
  width: 100%;
  margin-bottom: 10px; }
  div.article-info .article-sub-title span {
    display: block;
    float: left;
    color: #777;
    padding: 0 10px;
    font-size: 13px; }
    div.article-info .article-sub-title span.article-author {
      padding-left: 0; }
      div.article-info .article-sub-title span.article-author a {
        color: #777;
        font-size: 13px; }
        div.article-info .article-sub-title span.article-author a:hover {
          color: <?php echo $tema['t8']; ?> !important; }
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
  padding: 20px !important;
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

/*===============================================
 [SASS DIRECTORY ]
 [1] HEADING
 [2] LINK & COLUMN
 [3] BLOCK FORM
 [4] BLOCK TABLE
 ==============================================*/
.banners-effect-6 .banners > div a {
  border-radius: 3px; }

.media-date-added.idx8, .media-date-added.idx4 {
  display: none; }

/*================ HEADING ===================*/
html {
  width: 100%;
  outline: 0 !important;
  direction: ltr; }

body {
  color: #666;
  font-size: 14px;
  line-height: 26px;
  background-color: #fff; }

.owl2-carousel .owl2-item img {
  transform-style: inherit; }

h1 {
  font-size: 36px; }

h2 {
  font-size: 14px; 
  margin-top: 10px !important;
  font-weight: bold;
}

h3 {
  font-size: 24px; }

h4 {
  font-size: 18px; }

h5 {
  font-size: 14px; }

h6 {
  font-size: 12px; }

.h1, .h2, .h3, h1, h2, h3, .h4, .h5, .h6, h4, h5, h6 {
  margin: 0 0 15px 0; }

* {
  outline: none !important; }

::-webkit-scrollbar {
  width: 0.5em;
  height: 0.5em; }

::-webkit-scrollbar-thumb {
  background: #777; }

::-webkit-scrollbar-track {
  background: #d6d6d6; }

body {
  scrollbar-face-color: #777;
  scrollbar-track-color: #d6d6d6; }

input[type=text] {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }

/*========= page builder =============*/
#content .so-page-builder .container {
  overflow: visible;
  /*padding: 0 15px;*/ }

/*================ LINK & COLUMN ===================*/
.textColor {
  color: <?php echo $tema['t8']; ?> !important; }

ul, ul.menu, ol.menu, ul.blank, .our-member .respl-item .info-member ul, .why-list {
  list-style: none;
  margin: 0;
  padding: 0; }

option {
  padding: 2px 5px;
  border-width: 1px; }

.alert ol li {
  list-style-type: decimal;
  margin: 0 0 5px 15px; }

img {
  max-width: 100%; }

.over {
  overflow: visible; }

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

a {
  color: #666; }
  a:hover {
    color: #af6000;
    text-decoration: none; }

a, a:visited, a:active, a:link, a:focus {
  cursor: pointer;
  text-decoration: none;
  outline: none; }

ol {
  counter-reset: item;
  padding: 0 0 0 15px; }

sup {
  color: #F00;
  font-size: 100%;
  top: -4px; }

.list-inline {
  display: inline-block;
  margin: 0; }
  .container-megamenu .list-inline a {
    display: inline-block; }

.clearfix {
  clear: both; }

.img-thumbnail.pull-left {
  margin-right: 30px; }
.img-thumbnail.pull-right {
  margin-left: 30px; }

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

@media (min-width: 768px) and (max-width: 991px) {
  .col-sm-15 {
    width: 20%;
    float: left; } }

@media (min-width: 992px) and (max-width: 1199px) {
  .col-md-15 {
    width: 20%;
    float: left; } }

@media (min-width: 1200px) {
  .col-lg-15 {
    width: 20%;
    float: left; } }

/*================ FORM ===================*/
legend {
  font-size: 18px;
  padding: 7px 0px; }

/* @group 2. Inputs
 -------------------*/
textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input, .form-control, select {
  border-radius: 3px;
  background-color: #eee;
  border: none;
  color: #3d3d3d;
  padding: 9px;
  /* [4] */
  /* [6] */
  /* [6] */
  /* [7] */
  font-size: 12px;
  font-size: 1.2rem;
  /* [8] */
  /* [8] */
  box-shadow: none !important;
  transition: all 0.3s ease; }

*:focus {
  outline: none; }

input#input-captcha {
  margin-bottom: 15px; }

select:focus, textarea:focus, textarea:hover, input[type="text"]:focus, input[type="text"]:hover, input[type="password"]:focus, input[type="password"]:hover, input[type="datetime"]:focus, input[type="datetime"]:hover, input[type="datetime-local"]:focus, input[type="datetime-local"]:hover, input[type="date"]:focus, input[type="date"]:hover, input[type="month"]:focus, input[type="month"]:hover, input[type="time"]:focus, input[type="time"]:hover, input[type="week"]:focus, input[type="week"]:hover, input[type="number"]:focus, input[type="number"]:hover, input[type="email"]:focus, input[type="email"]:hover, input[type="url"]:focus, input[type="url"]:hover, input[type="search"]:focus, input[type="search"]:hover, input[type="tel"]:focus, input[type="tel"]:hover, input[type="color"]:focus, input[type="color"]:hover, .uneditable-input:focus, .uneditable-input:hover {
  outline: none;
  background-color: #e9e9e9;
  /* IE6-9 */ }

textarea {
  max-width: 100%; }

.form-control {
  height: 38px; }

/* @end */
/* @group 3. Dropdown 
 -------------------*/
.shopping_cart .fa-check-circle {
  display: none; }
.shopping_cart .btn-shopping-cart .checkout {
  padding: 10px 20px; }
.shopping_cart .dropdown-menu .content-item {
  max-height: 245px;
  overflow: auto; }
.shopping_cart .btn-shopping-cart .added_items {
  color: #222; }

.header-top-right .top-link > li {
  position: relative; }

header .dropdown-menu {
  display: block;
  opacity: 0;
  filter: alpha(opacity=0);
  visibility: hidden;
  transition: all 0.2s ease-out;
  margin-top: 10px;
  padding: 10px 20px;
  min-width: 120px;
  box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.2);
  right: 0;
  left: auto;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  border-radius: 0px; }
  header .dropdown-menu > li .btn-block {
    padding: 5px 0;
    line-height: 22px;
    color: #495057; }
    header .dropdown-menu > li .btn-block:hover {
      color: <?php echo $tema['t8']; ?> !important; }
header .dropdown-menu > li:hover button {
  color: <?php echo $tema['t8']; ?> !important; }
header .dropdown-menu .btn-block {
  border: none;
  background: transparent;
  text-align: left; }

.dropdown-menu > li > a {
  padding: 5px 0px;
  line-height: 22px;
  color: #495057; }
  .dropdown-menu > li > a:hover {
    color: <?php echo $tema['t8']; ?> !important; }

.btn-group .btn-link {
  text-align: left;
  background: transparent;
  text-decoration: none;
  padding: 5px 10px;
  color: #666;
  font-weight: normal;
  color: #495057;
  position: relative;
  z-index: 1; }
  .btn-group .btn-link:hover {
    color: <?php echo $tema['t8']; ?> !important; }

.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
  background: transparent; }

.nav-header {
  color: #667280; }

@media (min-width: 1199px) {
  header .account:hover .dropdown-menu, header .header-top .top-link > li:hover .dropdown-menu, header .btn-group:hover .dropdown-menu, header .dropdown:hover .dropdown-menu, header .btn-shopping-cart:hover .dropdown-menu {
    margin-top: 0;
    opacity: 1;
    filter: alpha(opacity=100);
    visibility: visible; } }

@media (max-width: 1024px) {
  header .open > .dropdown-menu {
    margin-top: 0;
    opacity: 1;
    filter: alpha(opacity=100);
    visibility: visible; } }

.size-img-cart {
  width: 80px; }

.dropdown-menu {
  background: #fff;
  padding: 5px 0;
  margin-top: 0;
  border-radius: 0px;
  border: none;
  box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.15);
  font-size: 12px; }

#cart .dropdown-menu {
  margin-right: 15px;
  padding: 0; }
  #cart .dropdown-menu:after {
    left: auto;
    right: 49px; }

#sosearchpro .dropdown-menu {
  top: 100%;
  display: none; }
@media (min-width: 1200px) {
  #sosearchpro .dropdown-menu {
    min-width: 300px; } }
#sosearchpro .dropdown-menu .media-left {
  float: left; }
#sosearchpro .dropdown-menu .media-body a {
  color: #495057;
  float: none; }
  #sosearchpro .dropdown-menu .media-body a:hover {
    color: <?php echo $tema['t8']; ?> !important; }
#sosearchpro .dropdown-menu:after {
  display: none; }

/* @end */
/* @group 4. Buttons 
 ------------------*/
.input-group .form-control:last-child, .input-group-addon:last-child, .input-group-btn:last-child > .btn, .input-group-btn:last-child > .dropdown-toggle, .input-group-btn:first-child > .btn:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0; }

.button, .btn {
  padding: 9px 20px;
  background: #495057;
  color: #fff;
  border-radius: 3px;
  border: none;
  background: <?php echo $tema['t8']; ?> !important;
  border-color: <?php echo $tema['t8']; ?> !important; }
  .button:hover, .btn:hover {
    background: <?php echo $tema['t8']; ?> !important;
    border-color: <?php echo $tema['t8']; ?> !important;
    color: #fff; }
  .button:hover, .btn:hover {
    background: #495057;
    border-color: #495057; }

.btn-warning {
  background: #f0ad4e; }

.btn-success {
  background: #5cb85c; }

.btn-info {
  background: #999;
  border-radius: 0;
  text-transform: uppercase;
  visibility: visible; }

.btn-primary {
  background: #999;
  text-transform: uppercase; }

.btn-danger {
  background: #d9534f;
  border-radius: 5px; }

.button .fa, .btn .fa {
  margin: 0 5px; }

.button.inverse, .btn.inverse {
  background-color: #495057; }

.button.inverse:hover, .btn.inverse:hover {
  background-color: <?php echo $tema['t8']; ?> !important;
  color: #fff; }

.button-continue-shopping {
  display: block;
  float: left; }

.button-checkout {
  display: block;
  float: right; }

.btn-lg, .btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333; }

.btn-sm, .btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5; }

.btn-xs, .btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5; }

/* @end */
.btn-inline {
  display: inline-block; }

/*================ POPUP ADDED TO CART ===================*/
.alert {
  clear: both;
  position: relative;
  padding: 18px 40px 18px 75px;
  z-index: 30;
  color: #FFF;
  border-radius: 0;
  min-height: 60px;
  box-sizing: border-box;
  border: none;
  font-weight: 600;
  box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
  transition: 1s all cubic-bezier(1, -0.01, 0, 0.99); }

.alert i {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  text-align: center;
  width: 60px;
  font-size: 40px;
  -webkit-animation: alert-icon-anim 1s;
  -moz-animation: alert-icon-anim 1s;
  -ms-animation: alert-icon-anim 1s;
  -o-animation: alert-icon-anim 1s;
  animation: alert-icon-anim 1s;
  text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.15); }

.alert i:before {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  line-height: 0; }

.alert a:hover {
  text-decoration: underline; }

.alert button.close {
  position: absolute;
  top: 50%;
  line-height: 1;
  right: 15px;
  color: #FFF;
  opacity: 0.7;
  background: none;
  border: none;
  -moz-transform: translate(0, -50%);
  -ms-transform: translate(0, -50%);
  -o-transform: translate(0, -50%);
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%); }

.alert button.close:hover, .alert button.close:focus {
  opacity: 1;
  color: #FFF; }

.alert.fadeOut {
  -moz-transform: translate(0, -100%);
  -ms-transform: translate(0, -100%);
  -o-transform: translate(0, -100%);
  -webkit-transform: translate(0, -100%);
  transform: translate(0, -100%); }

.alert.fadeOut .alert {
  top: 100%; }

@media (max-width: 479px) {
  .alert {
    padding-right: 30px; }
  .alert button.close {
    right: 5px; } }

.alert-success {
  background-color: #4caf50; }

.alert-success i {
  background: #388E3C; }

.alert-success a, .alert-success a:visited, .alert-success a:focus, .alert-success a:hover {
  color: #C8E6C9; }

.alert-danger {
  background-color: #F44336; }

.alert-danger i {
  background: #D32F2F; }

.alert-danger a, .alert-danger a:visited, .alert-danger a:focus, .alert-danger a:hover {
  color: #FFCDD2; }

.alert-info {
  background-color: #03A9F4; }

.alert-info i {
  background: #0288D1; }

.alert-info a, .alert-info a:visited, .alert-info a:focus, .alert-info a:hover {
  color: #B3E5FC; }

.alert-warning {
  background-color: #FF5722; }

.alert-warning i {
  background: #E64A19; }

.alert-warning a, .alert-warning a:visited, .alert-warning a:focus, .alert-warning a:hover {
  color: #FFCCBC; }

/*================ TABLE ===================*/
.table thead > tr > th {
  background: #eee; }

table.std th, table.std td {
  vertical-align: middle;
  border: #eaeaea;
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
  border: #eaeaea;
  width: 100%; }

table th {
  border: #eaeaea;
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

/*================ PAGINATION ===================*/
.pagination > li {
  display: inline-block;
  margin: 0 2px;
  vertical-align: top; }
  .pagination > li span, .pagination > li a {
    padding: 0 12px;
    line-height: 30px;
    z-index: 1; }
  .pagination > li a:hover, .pagination > li span:hover {
    color: #fff;
    background: <?php echo $tema['t8']; ?> !important;
    border-color: <?php echo $tema['t8']; ?> !important; }
  .pagination > li.active, .pagination > li:hover {
    background: transparent;
    border-color: <?php echo $tema['t8']; ?> !important; }
    .pagination > li.active span, .pagination > li:hover span {
      color: <?php echo $tema['t8']; ?> !important;
      background: transparent;
      border-color: <?php echo $tema['t8']; ?> !important; }
      .pagination > li.active span:hover, .pagination > li:hover span:hover {
        background: <?php echo $tema['t8']; ?> !important;
        border-color: <?php echo $tema['t8']; ?> !important; }
  .pagination > li:last-child {
    margin-right: 0; }

.pagination > li:first-child > a, .pagination > li:first-child > span {
  border-radius: 0; }

.pagination > li > a, .pagination > li > span {
  color: #666; }

.pagination > li:last-child > a, .pagination > li:last-child > span {
  border-radius: 0; }

/*===== remove bootstrap style in chrome ===*/
@media (min-width: 768px) {
  .newsletter .form-inline .form-group {
    display: block; } }

/*===============================*/
.overflow_auto, .table-responsive {
  direction: ltr; }

.overflow_auto {
  overflow: auto; }

.hidden-scorll {
  overflow: hidden; }

.checkout-checkout .check-newsletter #newsletter {
  margin-top: 6px; }

.information-information footer, .information footer {
  margin-top: 30px; }

-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
/*===============================================
 [SASS DIRECTORY ]
 [1] CONTACT PAGE
 [2] PAEG ABOUT US
 [3] PAGE BLOG
 [4] PAGE 404 
 ==============================================*/
/*============ CONTACT PAGE ==============*/
#map-canvas {
  border: 5px solid #f3f3f3;
  height: 485px;
  width: 100%;
  margin: 0px 0 10px; }

.info-contact .name-store h3 {
  font-size: 16px;
  color: #222;
  text-transform: uppercase; }
.info-contact .text {
  padding-left: 30px; }
.info-contact .comment {
  padding-bottom: 15px;
  border-bottom: 1px solid #e9e9e9;
  margin-bottom: 25px; }

.contact-form legend {
  border: none;
  padding: 0;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 600; }

/*============ PAEG ABOUT US ==============*/
.title-about-us {
  background: url("<?php echo $sitetemasi;?>/images/bg-title-about.png") repeat-x left 12px;
  margin-bottom: 17px; }

/*.layout-2 {
 .happy-about-us .owl2-controls,
 .happy-about-us .happy-ab .title-happy-about,
 .happy-about-us .owl2-controls .owl2-nav,
 .title-about-us h2 {
 background: #f5f5f5;
 }
 }*/
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
    background: url("<?php echo $sitetemasi;?>/images/bg-title-about.png") repeat-x left 12px;
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
            color: <?php echo $tema['t8']; ?> !important;
            border-color: <?php echo $tema['t8']; ?> !important; }
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
        color: #444 !important; }
        .our-member .respl-item .info-member .cl-name > a:hover {
          color: <?php echo $tema['t8']; ?> !important !important; }
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
    background-image: url("<?php echo $sitetemasi;?>/images/icon-whylist.png"); }
  .why-list li a {
    display: block;
    padding: 5px 0 7px;
    background-image: url("<?php echo $sitetemasi;?>/images/border-bottom-bs.png") repeat-x left bottom; }
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
        color: #444; }
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
          color: <?php echo $tema['t8']; ?> !important; }
  .happy-about-us .owl2-controls {
    background: #fff;
    padding: 0 5px;
    position: absolute;
    right: 2px;
    top: -47px; }
  .happy-about-us .owl2-controls .owl2-prev, .happy-about-us .owl2-controls .owl2-next {
    border: none;
    display: inline-block;
    width: 26px !important;
    height: 26px !important;
    background-position: left top;
    background-repeat: no-repeat;
    overflow: hidden;
    text-indent: -9999px;
    background-color: transparent !important;
    top: 0px;
    margin: 0 3px;
    position: relative; }
  .happy-about-us .owl2-controls .owl2-prev {
    background-image: url("<?php echo $sitetemasi;?>/images/btn-prev-hp.png") !important;
    margin-right: 3px;
    right: 0px !important;
    left: inherit !important; }
  .happy-about-us .owl2-controls .owl2-nav {
    width: 68px;
    display: inline-block;
    height: 26px;
    background: #fff; }
  .happy-about-us .owl2-controls .owl2-next {
    background-image: url("<?php echo $sitetemasi;?>/images/btn-next-hp.png") !important;
    right: 0px !important; }
  .happy-about-us .item > div:before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 16px;
    height: 12px;
    left: 0px;
    top: 6px; }
  .happy-about-us .owl2-dots {
    display: none !important; }

/*============ PAGE 404  ==============*/
.button-404 > a {
  margin: 0 10px; }

.content_404 {
  margin: 40px 0 30px;
  overflow: hidden; }

.content_404 .block-top h2 {
  color: #222;
  font-size: 24px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 25px; }

.content_404 .block-top .warning-code {
  font-size: 14px;
  color: #7d7d7d;
  margin-bottom: 40px; }

/*============ PAGE COMMING SOON  ==============*/
.page-comingsoon {
  background: url("<?php echo $sitetemasi;?>/images//bg-comingsoon.jpg") no-repeat center center;
  text-align: center;
  min-height: 600px; }

/*INFOMATION*/
.information-information .module-content {
  background: #fff;
  border: 1px solid #ddd;
  padding: 0 20px; }
  .information-information .module-content .list-box li {
    position: relative;
    padding-left: 15px; }
    .information-information .module-content .list-box li:before {
      position: absolute;
      display: block;
      top: 16px;
      background: #999;
      content: "";
      width: 6px;
      height: 6px;
      border-radius: 100%;
      left: 0; }

.title-under {
  position: relative;
  margin-bottom: 50px; }
  .title-under:after {
    content: "";
    position: absolute;
    display: block;
    height: 4px;
    width: 68px;
    background: <?php echo $tema['t8']; ?> !important;
    bottom: -10px; }

.title-under.text-center:after {
  left: 50%;
  margin-left: -34px; }

.media-box-link--arrow .icon {
  font-size: 30px; }

.media-box-link--figure .icon {
  font-size: 70px; }

.media-box-link {
  display: table-row;
  width: 100%;
  height: 100%;
  background-color: <?php echo $tema['t8']; ?> !important;
  cursor: pointer;
  color: #fff;
  transition: all 0.3s ease-in-out; }

.btn-default {
  background: <?php echo $tema['t8']; ?> !important;
  border-radius: 0; }
  .btn-default:hover {
    background: #c86e00; }

.media-box-link h4 {
  color: #fff;
  transition: all 0.3s ease-in-out; }

.media-box-link .icon {
  transition: all 0.3s ease-in-out; }

.media-box-link--figure, .media-box-link--content, .media-box-link--arrow {
  display: table-cell;
  padding: 6% 0;
  vertical-align: middle; }

.media-box-link--figure {
  width: 23%; }

.media-box-link--content {
  padding-right: 5%;
  width: 67%; }

.media-box-link--arrow {
  width: 10%;
  vertical-align: middle; }

.media-box-link:hover {
  background-color: #495057; }

/* PAGE - FAQ & Gallery
 =======================================================*/
.item-article .content--gallery .row {
  margin: 0 -8px; }
.item-article .content--gallery .col-md-1, .item-article .content--gallery .col-md-10, .item-article .content--gallery .col-md-11, .item-article .content--gallery .col-md-12, .item-article .content--gallery .col-md-2, .item-article .content--gallery .col-md-3, .item-article .content--gallery .col-md-4, .item-article .content--gallery .col-md-5, .item-article .content--gallery .col-md-6, .item-article .content--gallery .col-md-7, .item-article .content--gallery .col-md-8, .item-article .content--gallery .col-md-9, .item-article .content--gallery .col-sm-1, .item-article .content--gallery .col-sm-10, .item-article .content--gallery .col-sm-11, .item-article .content--gallery .col-sm-12, .item-article .content--gallery .col-sm-2, .item-article .content--gallery .col-sm-3, .item-article .content--gallery .col-sm-4, .item-article .content--gallery .col-sm-5, .item-article .content--gallery .col-sm-6, .item-article .content--gallery .col-sm-7, .item-article .content--gallery .col-sm-8, .item-article .content--gallery .col-sm-9 {
  padding: 0 8px; }
.item-article .content--gallery .popup-gallery {
  margin: 0 0px 15px 0;
  display: inline-block; }
  .item-article .content--gallery .popup-gallery.popup--video {
    position: relative;
    z-index: 2;
    background: black; }
    .item-article .content--gallery .popup-gallery.popup--video img {
      opacity: 0.6; }
    .item-article .content--gallery .popup-gallery.popup--video:before {
      content: "\f01d";
      display: block;
      font-family: 'FontAwesome';
      position: absolute;
      z-index: 4;
      left: 50%;
      top: 50%;
      font-size: 52px;
      color: rgba(255, 255, 255, 0.9);
      margin: -9px 0 0 -20px; }
  .item-article .content--gallery .popup-gallery img {
    transition: 0.3 opacity ease-in-out;
    width: 100%; }
  .item-article .content--gallery .popup-gallery:hover img {
    opacity: 0.7; }
.item-article ul.yt-accordion {
  list-style: none;
  margin: 0; }
  .item-article ul.yt-accordion .yt-accordion-group {
    margin-bottom: 3px; }
    .item-article ul.yt-accordion .yt-accordion-group .accordion-heading {
      color: #333;
      font-size: 15px;
      padding: 9px 15px;
      margin: 0;
      line-height: 22px;
      cursor: pointer;
      background: #f1f1f1;
      text-transform: capitalize;
      position: relative; }
      .item-article ul.yt-accordion .yt-accordion-group .accordion-heading .fa {
        margin-right: 10px; }
      .item-article ul.yt-accordion .yt-accordion-group .accordion-heading:hover {
        background: <?php echo $tema['t8']; ?> !important;
        color: white; }
      .item-article ul.yt-accordion .yt-accordion-group .accordion-heading.active {
        background: <?php echo $tema['t8']; ?> !important;
        color: white; }
        .item-article ul.yt-accordion .yt-accordion-group .accordion-heading.active:before {
          border: 8px solid <?php echo $tema['t8']; ?> !important;
          border-color: <?php echo $tema['t8']; ?> !important transparent transparent transparent;
          content: "";
          position: absolute;
          top: 100%;
          left: 30px; }
  .item-article ul.yt-accordion .yt-accordion-inner {
    padding: 15px 15px 10px 15px;
    background: #f1f1f1; }

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
  background-color: <?php echo $tema['t8']; ?> !important;
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

.label-sale {
  background-color: <?php echo $tema['t8']; ?> !important;
  right: 20px; }

.label-new {
  background-color: #53d542;
  left: 20px; }

.label-percent {
  padding: 2px 5px;
  background: <?php echo $tema['t8']; ?> !important;
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
.rate-history .ratings, .rate-history .order-num {
  display: inline-block;
  color: #999; }
.rate-history .rating-num, .rate-history .order-num {
  font-size: 12px; }
.rate-history .rating-num {
  color: #777; }
  .rate-history .rating-num:hover {
    color: <?php echo $tema['t8']; ?> !important; }
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

.content_price {
  font-size: 0; }

.price {
  margin: 0 0 10px 0;
  line-height: 24px;
  color: #242424;
  font-size: 18px;
  font-weight: 700; }
  .price .price-old {
    line-height: 20px;
    padding: 0 5px;
    display: inline-block;
    text-decoration: line-through;
    color: #999;
    /* [4] */
    /* [6] */
    /* [6] */
    /* [7] */
    font-size: 12px;
    font-size: 1.2rem;
    /* [8] */
    /* [8] */
    font-weight: normal; }
  .price .price-new, .price span.price {
    color: #242424;
    font-size: 18px;
    font-weight: 700; }

.callforprice {
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
  /* [8] */
  text-transform: uppercase;
  color: #222;
  border-bottom: 2px solid #eeeeee;
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
    background-color: <?php echo $tema['t8']; ?> !important;
    bottom: -2px;
    left: 0; }

.products-category .form-group .short-by {
  margin-right: 10px; }

/*REFINE SEARCH CATEGORY*/
.refine-search__content::after {
  display: block;
  clear: both;
  content: ""; }
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
    background: <?php echo $tema['t8']; ?> !important;
    border-color: <?php echo $tema['t8']; ?> !important;
    color: white; }
.refine-search__content .refine-search__subitem {
  width: 116px;
  float: left;
  margin-bottom: 15px;
  margin-right: 15px; }

.refine-search .thumbnail {
  margin-bottom: 10px; }
.refine-search a {
  color: #495057;
  display: block; }
  .refine-search a:hover {
    color: <?php echo $tema['t8']; ?> !important; }
.refine-search a.thumbnail.active, .refine-search a.thumbnail:focus, .refine-search a.thumbnail:hover {
  border-color: <?php echo $tema['t8']; ?> !important; }

/*TOOLBAR LISTING TOP*/
#content.col-sm-6 .product-compare {
  display: none; }

.filters-panel {
  border-radius: 0px;
  margin-bottom: 30px; }
  .filters-panel::after {
    display: block;
    clear: both;
    content: ""; }
  .filters-panel.product-filter-top {
    margin-top: 15px; }
  .filters-panel.product-filter-bottom {
    border-top: 1px solid #ebebeb;
    padding-top: 20px;
    margin-top: 20px; }
  .filters-panel .pagination {
    margin: 0; }
  .filters-panel .product-compare {
    margin-right: 0 !important; }
  .filters-panel .list-view {
    display: inline-block; }
    .filters-panel .list-view .btn-gridview {
      border: none;
      color: #495057;
      float: left;
      padding: 0 5px;
      font-size: 12px; }
    .filters-panel .list-view button.btn {
      margin: 0px;
      margin-right: 2px;
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
        background: <?php echo $tema['t8']; ?> !important;
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
      background: <?php echo $tema['t8']; ?> !important;
      border-color: <?php echo $tema['t8']; ?> !important;
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
      background: url(<?php echo $sitetemasi;?>/images/icon/bg-select.png) no-repeat center right;
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
    border-color: <?php echo $tema['t8']; ?> !important;
    background-color: <?php echo $tema['t8']; ?> !important;
    color: #fff; }
  .box-pagination .pagination > li span, .box-pagination .pagination > li a {
    text-align: center;
    width: 33px;
    height: 33px;
    line-height: 33px;
    border-radius: 3px;
    padding: 0; }
.box-pagination .pagination {
  display: block; }

/*================ PRODUCT LIST ===================*/
.products-list .rating .rating-box, .products-list .ratings .rating-box {
  vertical-align: top;
  line-height: 27px; }
.products-list .product-layout {
  transition: all 0.5s ease 0s;
  display: block; }
  .products-list .product-layout .product-item-container .product-card__gallery {
    position: absolute;
    z-index: 560;
    top: 0;
    visibility: hidden;
    transition: all 0.3s ease-in 0s;
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
      /*====================PRODUCT GRID ====================*/ }
.products-list .product-grid .product-item-container {
  margin: 0 0 30px 0;
  padding: 0;
  position: relative;
  overflow: hidden;
  border-radius: 3px; }
  .products-list .product-grid .product-item-container > .list-block, .products-list .product-grid .product-item-container .description {
    display: none; }
  .products-list .product-grid .product-item-container .left-block {
    position: relative; }
    .products-list .product-grid .product-item-container .left-block img {
      width: 100%; }
    .products-list .product-grid .product-item-container .left-block .product-image-container {
      text-align: center; }
    .products-list .product-grid .product-item-container .left-block .button-group {
      padding: 0;
      position: absolute;
      z-index: 99; }
      .products-list .product-grid .product-item-container .left-block .button-group .loading {
        width: 35px;
        height: 35px;
        line-height: 35px;
        position: relative; }
        .products-list .product-grid .product-item-container .left-block .button-group .loading span, .products-list .product-grid .product-item-container .left-block .button-group .loading .fa {
          visibility: hidden; }
        .products-list .product-grid .product-item-container .left-block .button-group .loading:before {
          content: "\f021";
          display: block;
          font-family: 'FontAwesome';
          position: absolute;
          color: #222;
          font-size: 16px;
          -webkit-animation: spinner 2s infinite linear;
          animation: spinner 2s infinite linear;
          width: 35px;
          height: 35px;
          line-height: 35px;
          top: 0;
          left: 0; }
      .products-list .product-grid .product-item-container .left-block .button-group .btn-button {
        border: 1px solid #e1e1e1;
        display: block;
        margin-top: 5px;
        padding: 0;
        background-color: #fff;
        border-radius: 3px;
        color: #464646;
        width: 35px;
        height: 35px;
        line-height: 35px;
        transform: all 0.3s ease 0s;
        position: relative;
        transition: all 0.3s ease-in-out 0s;
        -webkit-opacity: 0;
        -moz-opacity: 0;
        -ms-opacity: 0;
        -o-opacity: 0;
        opacity: 0; }
        .products-list .product-grid .product-item-container .left-block .button-group .btn-button span {
          color: #fff;
          display: inherit;
          font-size: 13px;
          font-weight: 400;
          height: auto;
          position: static;
          transition: all 0.15s ease-in-out 0s;
          white-space: nowrap;
          display: none; }
        .products-list .product-grid .product-item-container .left-block .button-group .btn-button .fa {
          font-size: 13px;
          color: #464646;
          height: 35px;
          line-height: 35px;
          width: 35px;
          text-align: center;
          position: absolute;
          top: 0; }
        .products-list .product-grid .product-item-container .left-block .button-group .btn-button.addToCart {
          transition-delay: 0.1s; }
        .products-list .product-grid .product-item-container .left-block .button-group .btn-button.wishlist {
          transition-delay: 0.2s;
          margin-bottom: 5px; }
        .products-list .product-grid .product-item-container .left-block .button-group .btn-button.compare {
          transition-delay: 0.3s;
          margin-bottom: 5px; }
        .products-list .product-grid .product-item-container .left-block .button-group .btn-button.quickview {
          transition-delay: 0.4s; }
        .products-list .product-grid .product-item-container .left-block .button-group .btn-button:hover {
          background-color: <?php echo $tema['t8']; ?> !important;
          border-color: <?php echo $tema['t8']; ?> !important;
          transition: all 0.15s ease-in-out 0s; }
          .products-list .product-grid .product-item-container .left-block .button-group .btn-button:hover i {
            color: #fff; }
    .products-list .product-grid .product-item-container .left-block .cartinfo--left {
      left: 10px;
      transform: translateY(50%);
      bottom: 50%; }
      .products-list .product-grid .product-item-container .left-block .cartinfo--left .btn-button {
        -webkit-transform: translate(-50px, 0px);
        -moz-transform: translate(-50px, 0px);
        -ms-transform: translate(-50px, 0px);
        -o-transform: translate(-50px, 0px);
        transform: translate(-50px, 0px); }
        .products-list .product-grid .product-item-container .left-block .cartinfo--left .btn-button .fa {
          left: 0px; }
    .products-list .product-grid .product-item-container .left-block .cartinfo--right {
      right: 10px;
      transform: translateY(50%);
      bottom: 50%;
      direction: rtl; }
      .products-list .product-grid .product-item-container .left-block .cartinfo--right .btn-button {
        -webkit-transform: translate(50px, 0px);
        -moz-transform: translate(50px, 0px);
        -ms-transform: translate(50px, 0px);
        -o-transform: translate(50px, 0px);
        transform: translate(50px, 0px); }
        .products-list .product-grid .product-item-container .left-block .cartinfo--right .btn-button .fa {
          right: -1px; }
    .products-list .product-grid .product-item-container .left-block .cartinfo--static {
      width: 100%;
      bottom: 10px;
      display: flex;
      justify-content: center; }
      .products-list .product-grid .product-item-container .left-block .cartinfo--static .btn-button {
        margin: 2px;
        width: 30px !important; }
        .products-list .product-grid .product-item-container .left-block .cartinfo--static .btn-button .fa {
          left: 0; }
        .products-list .product-grid .product-item-container .left-block .cartinfo--static .btn-button span {
          display: none; }
    .products-list .product-grid .product-item-container .left-block .cartinfo--center {
      width: 100%;
      bottom: 35%;
      display: flex;
      justify-content: center; }
      .products-list .product-grid .product-item-container .left-block .cartinfo--center .btn-button {
        margin: 2px;
        width: 30px !important; }
        .products-list .product-grid .product-item-container .left-block .cartinfo--center .btn-button .fa {
          left: 0; }
        .products-list .product-grid .product-item-container .left-block .cartinfo--center .btn-button span {
          display: none; }
  .products-list .product-grid .product-item-container .right-block {
    clear: both;
    padding: 12px 12px 20px 12px;
    position: relative; }
    .products-list .product-grid .product-item-container .right-block div.price {
      margin-bottom: 0; }
    .products-list .product-grid .product-item-container .right-block h4 {
      margin: 0 0 5px 0;
      font-weight: 400; }
      .products-list .product-grid .product-item-container .right-block h4 a {
        font-size: 15px;
        color: #222; }
        .products-list .product-grid .product-item-container .right-block h4 a:hover {
          color: <?php echo $tema['t8']; ?> !important; }
    .products-list .product-grid .product-item-container .right-block .addToCart {
      font-size: 12px;
      color: #444;
      text-transform: uppercase;
      background-color: #fff;
      border-radius: 6px;
      border: none;
      padding: 12px 15px;
      line-height: 100%;
      margin-top: 20px;
      border: 1px solid #ebebeb; }
      .products-list .product-grid .product-item-container .right-block .addToCart:hover {
        background-color: <?php echo $tema['t8']; ?> !important;
        border-color: <?php echo $tema['t8']; ?> !important;
        color: #fff; }
  .products-list .product-grid .product-item-container:hover .left-block .button-group .btn-button {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    visibility: visible; }
@media (min-width: 1200px) {
  .products-list .product-grid-4:nth-child(4n+1) {
    clear: both !important; } }
@media (min-width: 1200px) {
  /*----------------PRODUCT Table ------------------*/
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
  .products-list .product-table .product-item-container .product-card__gallery {
    display: none; }
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
  background: #495057;
  color: #fff;
  border-radius: 3px;
  border: none;
  background: <?php echo $tema['t8']; ?> !important;
  border-color: <?php echo $tema['t8']; ?> !important; }
  .products-list .product-table .list-block .addToCart:hover {
    background: <?php echo $tema['t8']; ?> !important;
    border-color: <?php echo $tema['t8']; ?> !important;
    color: #fff; }
  .products-list .product-table .list-block .addToCart:hover {
    background: #495057;
    border-color: #495057; }
.products-list .product-table .list-block .wishlist, .products-list .product-table .list-block .compare {
  width: 48%;
  padding: 9px 20px;
  background: #eee;
  color: #333;
  border-radius: 3px;
  border: none; }
  .products-list .product-table .list-block .wishlist:hover, .products-list .product-table .list-block .compare:hover {
    background: <?php echo $tema['t8']; ?> !important;
    border-color: <?php echo $tema['t8']; ?> !important;
    color: #fff; }
.products-list .product-table .left-block {
  width: 15%;
  min-width: 64px; }
@media (max-width: 767px) {
  .products-list .product-table .left-block {
    width: 35%; } }
.products-list .product-table .left-block .countdown_box, .products-list .product-table .left-block .button-group {
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
  .products-list .product-table .right-block .addToCart {
    display: none; }
  .products-list .product-table .right-block > * {
    border-left: 1px solid #dbdbdb;
    margin: 0px;
    padding: 10px; }
  .products-list .product-table .right-block h4 {
    width: 25%;
    font-weight: 400;
    font-size: 14px; }
  @media (max-width: 767px) {
    .products-list .product-table .right-block h4 {
      width: 60%; } }
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
  /*----------------PRODUCT LIST ------------------*/
  .products-list .product-table .label-product {
    display: none; } }
.products-list .product-list ul.so-productlist-colorswatch {
  text-align: left; }
.products-list .product-list .box-label {
  left: 5px; }
.products-list .product-list .product-item-container {
  display: table;
  margin-bottom: 30px; }
  .products-list .product-list .product-item-container .left-block {
    width: 270px;
    float: left;
    border: 1px solid #eaeaea;
    border-radius: 3px; }
  @media (max-width: 767px) {
    .products-list .product-list .product-item-container .left-block {
      width: 40%; } }
  .products-list .product-list .product-item-container .left-block .product-image-container {
    text-align: center; }
  .products-list .product-list .product-item-container .left-block .button-group {
    display: none; }
  .products-list .product-list .product-item-container .list-block {
    margin-left: 270px;
    padding: 0 20px 20px 30px; }
  @media (max-width: 767px) {
    .products-list .product-list .product-item-container .list-block {
      margin-left: 0;
      padding: 10px 0 0;
      clear: both;
      overflow: hidden; } }
  .products-list .product-list .product-item-container .list-block .btn-button {
    border: 1px solid #eaeaea;
    border-radius: 3px;
    display: block;
    margin-right: 5px;
    padding: 7px 15px;
    background-color: #fff;
    color: #666;
    text-align: center;
    float: left; }
    .products-list .product-list .product-item-container .list-block .btn-button i {
      font-size: 16px; }
    .products-list .product-list .product-item-container .list-block .btn-button:hover {
      background-color: <?php echo $tema['t8']; ?> !important;
      border-color: <?php echo $tema['t8']; ?> !important;
      color: #fff; }
  .products-list .product-list .product-item-container .list-block .addToCart {
    background-color: <?php echo $tema['t8']; ?> !important;
    border-color: <?php echo $tema['t8']; ?> !important;
    color: #fff;
    border-radius: 3px;
    /* [4] */
    /* [6] */
    /* [6] */
    /* [7] */
    font-size: 12px;
    font-size: 1.2rem;
    /* [8] */
    /* [8] */
    font-weight: 400;
    text-transform: uppercase; }
    .products-list .product-list .product-item-container .list-block .addToCart i {
      margin-right: 0px;
      font-size: 14px; }
    .products-list .product-list .product-item-container .list-block .addToCart:hover {
      background-color: #495057;
      border-color: #495057; }
  .products-list .product-list .product-item-container .right-block {
    margin-left: 270px;
    padding: 0 20px 0px 30px; }
  @media (max-width: 767px) {
    .products-list .product-list .product-item-container .right-block {
      margin-left: 40%;
      padding: 0 10px 0px 10px; } }
  .products-list .product-list .product-item-container .right-block .addToCart {
    display: none; }
  .products-list .product-list .product-item-container .right-block .ratings {
    margin-bottom: 0px; }
  .products-list .product-list .product-item-container .right-block h4 {
    margin-bottom: 5px;
    font-weight: 400; }
    .products-list .product-list .product-item-container .right-block h4 a {
      color: #444;
      /* [4] */
      /* [6] */
      /* [6] */
      /* [7] */
      font-size: 16px;
      font-size: 1.6rem;
      /* [8] */
      /* [8] */ }
      .products-list .product-list .product-item-container .right-block h4 a:hover {
        color: <?php echo $tema['t8']; ?> !important; }
  .products-list .product-list .product-item-container .right-block .price {
    display: inline-block;
    margin: 8px 0 8px 0; }
  .products-list .product-list .product-item-container .right-block .description {
    margin-bottom: 20px; }
  @media (max-width: 767px) {
    .products-list .product-list .product-item-container .right-block .description {
      display: none; } }
@media (max-width: 767px) {
  .products-list .product-list .product-item-container .label-product {
    display: none; } }

.product-listing .product-grid .so-productlist-colorswatch {
  position: absolute;
  top: -10px;
  left: 0;
  width: 100%; }

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
    border-color: <?php echo $tema['t8']; ?> !important; }

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
.white-popup {
  position: relative;
  background: #FFF;
  padding: 20px;
  width: auto;
  max-width: 500px;
  margin: 20px auto; }
  .white-popup .mfp-close {
    background: #999; }

.mfp-iframe-scaler iframe {
  padding: 20px 10px 10px 10px;
  height: 535px; }

#product-quick #product {
  margin-top: 20px; }
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
    font-weight: normal;
    min-width: 100px; }
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
  margin: 0 0 50px 0; }
@media (min-width: 1200px) {
  .category-featured .wap-listing-tabs {
    height: 245px;
    position: relative;
    z-index: 2; } }
.category-featured .ltabs-wrap .ltabs-tabs-container {
  margin: 0 0 10px;
  border-bottom: 2px solid #eeeeee; }
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
      /* [8] */
      color: #999;
      padding: 0; }
      .category-featured .ltabs-wrap .ltabs-tabs-container .ltabs-tabs li.ltabs-tab > span:hover {
        color: <?php echo $tema['t8']; ?> !important; }
  .category-featured .ltabs-wrap .ltabs-tabs-container .ltabs-tabs li.tab-sel {
    position: relative;
    font-weight: bold; }
    .category-featured .ltabs-wrap .ltabs-tabs-container .ltabs-tabs li.tab-sel span {
      color: #495057; }
    .category-featured .ltabs-wrap .ltabs-tabs-container .ltabs-tabs li.tab-sel:after {
      position: absolute;
      content: "";
      width: 100%;
      height: 2px;
      background-color: <?php echo $tema['t8']; ?> !important;
      bottom: -2px;
      left: 0;
      z-index: 2; }
.category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-nav .owl2-prev, .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-nav .owl2-next {
  border-radius: 3px; }
  .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-nav .owl2-prev:hover, .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-nav .owl2-next:hover {
    color: #fff;
    background-color: <?php echo $tema['t8']; ?> !important;
    border-color: <?php echo $tema['t8']; ?> !important; }
.category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-dots {
  width: 100%;
  display: inline-block;
  text-align: center; }
  .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-dots .owl2-dot {
    margin: 0 3px;
    display: inline-block;
    transition: all 0.3s ease 0s;
    width: 20px; }
    .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-dots .owl2-dot span {
      height: 6px;
      background: #cacaca;
      display: block;
      border-radius: 3px;
      margin: 0; }
      .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-dots .owl2-dot:hover span {
        background: <?php echo $tema['t8']; ?> !important; }
    .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-dots .owl2-dot.active {
      width: 30px; }
      .category-featured .ltabs-wrap .wap-listing-tabs .owl2-controls .owl2-dots .owl2-dot.active span {
        background: <?php echo $tema['t8']; ?> !important; }
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
      font-size: 16px; }
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
          background: <?php echo $tema['t8']; ?> !important;
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
        background-color: <?php echo $tema['t8']; ?> !important;
        border-color: <?php echo $tema['t8']; ?> !important; }
    .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .addToCart {
      padding: 11px 20px; }
    .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .wishlist, .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .compare {
      color: #444;
      border-radius: 50%; }
      .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .wishlist span, .category-featured .ltabs-wrap .wap-listing-tabs .product-item-container .right-block .compare span {
        display: none; }

@keyframes spinner {
  0% {
    transform: rotate(0deg); }
  100% {
    transform: rotate(360deg); } }

.product-category .products-list .product-grid .product-item-container .right-block .price {
  font-size: 0; }

/*===============================================
 [SASS DIRECTORY ]
 [1] CONTENT PRODUCT OTHER
 [2] PRODUCT INFO
 [3] PRODUCT TABS 
 [3] RELATED PRODUCT 
 ==============================================*/
.tab-content > .active {
  opacity: 1; }

#button-review {
  visibility: visible; }

/*============CONTENT PRODUCT OTHER ==================*/
.zoomContainer {
  z-index: 450; }

.lightSlider {
  padding: 0; }

.product_page_price {
  margin-bottom: 10px;
  margin-top: 10px; }
  .product_page_price .price-new {
    font-size: 28px; }
  .product_page_price .price-old {
    vertical-align: top; }
  .product_page_price .price-tax {
    margin-bottom: 10px;
    color: #999;
    font-size: 12px;
    font-weight: normal; }
  .product_page_price .label-product {
    position: static;
    display: inline-block;
    border-radius: 2px;
    height: auto;
    padding: 0 10px;
    width: auto;
    line-height: 22px;
    vertical-align: top; }

.product-detail .so-extraslider {
  margin: 0; }
  .product-detail .producttab .tab-content ul, .product-detail .producttab .tab-content ol {
    display: block;
    list-style-type: disc;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    -webkit-padding-start: 40px;
    padding-left: 20px; }

#tab-review input[type=radio] {
  position: relative;
  top: 2px; }
  #tab-review .contacts-form span span.text-danger {
    margin-right: 15px;
    margin-top: 0; }
#tab-review .form-group textarea {
  height: 150px; }

.image-popup-sizechart {
  background: url("<?php echo $sitetemasi;?>/images/size-chart-icon.png") no-repeat left;
  padding-left: 20px;
  top: 0;
  right: 15px;
  position: absolute;
  z-index: 1; }

/*============PRODUCT GALLERY ==================*/
.gallery-button {
  display: block;
  clear: both; }
  .gallery-button .gallery-zoom {
    padding: 9px 20px;
    background: #eee;
    color: #333;
    border-radius: 3px;
    border: none;
    clear: both;
    cursor: pointer;
    display: inline-block;
    margin: 10px; }
    .gallery-button .gallery-zoom:hover {
      background: <?php echo $tema['t8']; ?> !important;
      border-color: <?php echo $tema['t8']; ?> !important;
      color: #fff; }

.large-image .gallery-button .gallery-zoom {
  background: none; }

.gallery-grid {
  padding: 5px; }
  .gallery-grid .thumbnail {
    border-radius: 0;
    margin: 0; }

.gallery-slider .owl2-stage-outer .owl2-item {
  transform: scale(0.6);
  transition: 0.3s all ease-in-out; }
.gallery-slider .owl2-stage-outer .center {
  transform: scale(1.15); }
.gallery-slider .owl2-controls {
  height: 0; }
  .gallery-slider .owl2-controls .owl2-nav .owl2-prev, .gallery-slider .owl2-controls .owl2-nav .owl2-next {
    width: 50px;
    height: 80px;
    line-height: 80px;
    text-align: center;
    text-indent: -9999px;
    overflow: hidden;
    cursor: pointer;
    background-color: rgba(255, 255, 255, 0.7);
    position: absolute;
    top: 50%;
    margin: 0;
    margin-top: -40px;
    display: inline-block;
    border: 1px solid #dedfe3;
    float: none;
    border-radius: 0;
    z-index: 99;
    opacity: 1; }
    .gallery-slider .owl2-controls .owl2-nav .owl2-prev:before, .gallery-slider .owl2-controls .owl2-nav .owl2-next:before {
      opacity: 1;
      font-weight: 400;
      font-family: 'FontAwesome';
      position: absolute;
      top: -2px;
      left: 0;
      display: inline-block;
      text-indent: 0;
      width: 100%;
      height: 100%;
      font-size: 30px;
      transition: all 0.2s ease-in-out 0s; }
    .gallery-slider .owl2-controls .owl2-nav .owl2-prev.owl2-next, .gallery-slider .owl2-controls .owl2-nav .owl2-next.owl2-next {
      right: -1px;
      left: auto;
      border-top-left-radius: 3px;
      border-bottom-left-radius: 3px; }
      .gallery-slider .owl2-controls .owl2-nav .owl2-prev.owl2-next:before, .gallery-slider .owl2-controls .owl2-nav .owl2-next.owl2-next:before {
        content: "\f105"; }
    .gallery-slider .owl2-controls .owl2-nav .owl2-prev.owl2-prev, .gallery-slider .owl2-controls .owl2-nav .owl2-next.owl2-prev {
      left: -1px;
      right: auto;
      border-top-right-radius: 3px;
      border-bottom-right-radius: 3px; }
      .gallery-slider .owl2-controls .owl2-nav .owl2-prev.owl2-prev:before, .gallery-slider .owl2-controls .owl2-nav .owl2-next.owl2-prev:before {
        content: "\f104"; }
    .gallery-slider .owl2-controls .owl2-nav .owl2-prev:hover, .gallery-slider .owl2-controls .owl2-nav .owl2-next:hover {
      background-color: #fff; }
  .gallery-slider .owl2-controls .owl2-nav .owl2-prev, .gallery-slider .owl2-controls .owl2-nav .owl2-next {
    border-radius: 3px; }
    .gallery-slider .owl2-controls .owl2-nav .owl2-prev:hover, .gallery-slider .owl2-controls .owl2-nav .owl2-next:hover {
      background: <?php echo $tema['t8']; ?> !important;
      color: white; }

/*============PRODUCT INFO ==================*/
.product-view {
  margin-bottom: 30px; }
  .product-view .content-product-right .rating .rating-box, .product-view .content-product-right .ratings .rating-box {
    vertical-align: top;
    line-height: 18px; }
.product-view .content-product-left .large-image {
  cursor: pointer;
  display: block;
  overflow: hidden;
  position: relative;
  border: 1px solid #dedede;
  padding: 0px;
  border-radius: 3px; }
.product-view .content-product-left .full_slider {
  margin: 0;
  margin-top: 10px; }
  .product-view .content-product-left .full_slider .image-additional {
    width: 100%; }
  .product-view .content-product-left .full_slider .thumbnail {
    border-color: #dedede;
    padding: 0;
    border-radius: 0;
    margin-bottom: 0; }
    .product-view .content-product-left .full_slider .thumbnail.active {
      border-color: #222; }
  .product-view .content-product-left .full_slider:hover .owl2-controls {
    opacity: 1; }
  .product-view .content-product-left .full_slider .owl2-controls {
    opacity: 0;
    transition: 0.3 all ease-in-out; }
    .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-prev, .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-next {
      background-color: #999;
      border: none;
      border-radius: 0px;
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
      .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-prev:before, .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-next:before {
        color: #fff;
        font-family: 'FontAwesome';
        display: block;
        text-indent: 0 !important;
        width: 100%;
        height: 100%;
        font-size: 36px; }
      .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-prev.owl2-next, .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-next.owl2-next {
        right: 0; }
        .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-prev.owl2-next:before, .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-next.owl2-next:before {
          content: "\f105"; }
      .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-prev.owl2-prev, .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-next.owl2-prev {
        left: 0; }
        .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-prev.owl2-prev:before, .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-next.owl2-prev:before {
          content: "\f104"; }
      .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-prev:hover, .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-next:hover {
        background-color: <?php echo $tema['t8']; ?> !important; }
        .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-prev:hover:before, .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-next:hover:before {
          color: #fff; }
    .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-prev, .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-next {
      margin-top: -15px; }
      .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-prev:before, .product-view .content-product-left .full_slider .owl2-controls .owl2-nav .owl2-next:before {
        font-size: 16px; }
.product-view .content-product-midde {
  width: 100%;
  display: inline-block; }
@media (min-width: 1200px) {
  .product-view div.col-gallery-slider .product-box-desc {
    position: absolute;
    width: 45% !important;
    right: 0;
    transform: translateY(-90%); }
  .product-view div.col-gallery-slider .short_description {
    position: absolute;
    width: 45%;
    right: 0; } }
.product-view .content-product-right {
  overflow: hidden; }
  .product-view .content-product-right .title-product h1 {
    /* [4] */
    /* [6] */
    /* [6] */
    /* [7] */
    font-size: 22px;
    font-size: 2.2rem;
    /* [8] */
    /* [8] */
    text-transform: capitalize;
    color: #222;
    font-weight: 500; }
  .product-view .content-product-right .box-review {
    /* [4] */
    /* [6] */
    /* [6] */
    /* [7] */
    font-size: 12px;
    font-size: 1.2rem;
    /* [8] */
    /* [8] */
    color: #999; }
    .product-view .content-product-right .box-review .ratings {
      display: inline-block;
      margin: 0 20px 0 0;
      z-index: 0;
      position: relative; }
    .product-view .content-product-right .box-review a {
      color: #666;
      display: inline-block; }
      .product-view .content-product-right .box-review a:hover {
        color: <?php echo $tema['t8']; ?> !important; }
    .product-view .content-product-right .box-review .rating {
      display: inline-block; }
    .product-view .content-product-right .box-review .order-num {
      color: #f50;
      font-weight: 600;
      padding: 0 10px;
      font-size: 14px; }
    @media (min-width: 1200px) {
      .product-view .content-product-right .box-review .order-num {
        float: right; } }
    .product-view .content-product-right .box-review .order-num .fa {
      font-size: 22px;
      padding: 0 5px; }
  .product-view .content-product-right .product-box-desc {
    float: left;
    width: 100%;
    margin-bottom: 20px;
    position: relative; }
    .product-view .content-product-right .product-box-desc span {
      display: inline-block;
      min-width: 120px; }
    .product-view .content-product-right .product-box-desc .brand a {
      color: #666; }
      .product-view .content-product-right .product-box-desc .brand a:hover {
        color: <?php echo $tema['t8']; ?> !important; }
  .product-view .content-product-right .product-label {
    line-height: 24px;
    margin-top: 15px;
    float: left;
    width: 100%; }
    .product-view .content-product-right .product-label .price {
      float: left;
      margin-top: 0;
      margin-bottom: 0; }
    .product-view .content-product-right .product-label .list-unstyled {
      font-size: 13px;
      color: #666;
      font-weight: normal; }
  .product-view .content-product-right .short_description {
    display: block;
    padding-top: 20px;
    clear: both; }
    .product-view .content-product-right .short_description h3 {
      margin-bottom: 5px; }
    .product-view .content-product-right .short_description ol {
      padding: 0; }
  .product-view .content-product-right .so-colorswatch-productpage-icons {
    margin-bottom: 15px;
    text-align: left; }
  .product-view .content-product-right .countdown_box {
    position: static;
    margin: 0;
    -webkit-transform: scale(1) translateX(0);
    -moz-transform: scale(1) translateX(0);
    -ms-transform: scale(1) translateX(0);
    -o-transform: scale(1) translateX(0);
    transform: scale(1) translateX(0);
    width: 100%;
    margin-bottom: 20px; }
    .product-view .content-product-right .countdown_box .countdown_inner {
      text-align: left; }
      .product-view .content-product-right .countdown_box .countdown_inner .title {
        padding: 0px;
        display: table-cell;
        vertical-align: top;
        border-right: 1px solid rgba(255, 255, 255, 0.2);
        font-size: 14px;
        text-transform: uppercase;
        font-weight: 600;
        line-height: 40px; }
  .product-view .content-product-right h3 {
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 600; }
  .product-view .content-product-right .box-info-product {
    float: left;
    width: 100%;
    margin: 0; }
    .product-view .content-product-right .box-info-product .quantity {
      margin-bottom: 25px; }
      .product-view .content-product-right .box-info-product .quantity .control-label {
        min-width: 120px; }
      .product-view .content-product-right .box-info-product .quantity .quantity-control {
        position: relative;
        border: 1px solid #d6d6d6;
        border-radius: 0px; }
        .product-view .content-product-right .box-info-product .quantity .quantity-control input.form-control {
          float: left;
          width: 40px;
          height: 32px;
          line-height: 32px;
          padding: 0;
          text-align: center;
          font-size: 16px;
          background-color: #fff;
          border-left: 1px solid #d6d6d6;
          border-right: 1px solid #d6d6d6; }
        .product-view .content-product-right .box-info-product .quantity .quantity-control span {
          width: 33px;
          height: 36px;
          border: none;
          color: #999;
          float: left;
          line-height: 39px;
          padding: 0;
          background-color: #f9f9f9;
          border-radius: 0px; }
          .product-view .content-product-right .box-info-product .quantity .quantity-control span:hover {
            background-color: #efeded;
            cursor: pointer; }
    .product-view .content-product-right .box-info-product .cart {
      margin: 0 0 10px; }
      .product-view .content-product-right .box-info-product .cart .btn {
        background-color: <?php echo $tema['t8']; ?> !important;
        border-radius: 3px;
        border: none;
        color: #fff;
        font-weight: 600;
        padding: 12px;
        text-transform: uppercase;
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        display: inline-block;
        vertical-align: top;
        max-width: 200px;
        width: 190px; }
      @media (min-width: 992px) and (max-width: 1199px) {
        .product-view .content-product-right .box-info-product .cart .btn {
          width: 140px; } }
      .product-view .content-product-right .box-info-product .cart .btn.btn-checkout {
        margin: 0 15px;
        background-color: #b1cc0e; }
        .product-view .content-product-right .box-info-product .cart .btn.btn-checkout:hover {
          background-color: #889c0b; }
      .product-view .content-product-right .box-info-product .cart .btn:hover {
        background-color: #c86e00; }
    .product-view .content-product-right .box-info-product .add-to-links {
      font-size: 13px;
      text-transform: uppercase;
      padding: 10px 0;
      display: inline-block; }
      .product-view .content-product-right .box-info-product .add-to-links .fa {
        width: 27px;
        height: 27px;
        line-height: 25px;
        text-align: center;
        margin-right: 10px;
        background: #ffe8e8;
        border: 1px solid #ffe8e8;
        border-radius: 50%; }
  .product-view .content-product-right .share {
    margin-top: 10px; }
    .product-view .content-product-right .share .socials-wrap {
      border-top: 1px solid #eaeaea;
      border-bottom: 1px solid #eaeaea;
      padding: 20px 0; }
      .product-view .content-product-right .share .socials-wrap span {
        /* [4] */
        /* [6] */
        /* [6] */
        /* [7] */
        font-size: 14px;
        font-size: 1.4rem;
        /* [8] */
        /* [8] */
        color: #222;
        font-weight: 600; }
      .product-view .content-product-right .share .socials-wrap ul {
        float: right; }
        .product-view .content-product-right .share .socials-wrap ul li {
          float: left;
          margin-left: 35px; }
          .product-view .content-product-right .share .socials-wrap ul li a {
            font-size: 16px; }

#product {
  margin-top: 30px; }
  #product div.required .control-label:before {
    content: '* ';
    color: #F00;
    font-weight: bold; }
    #product .image_option_type .product-options {
      display: inline-block; }
  #product .control-label {
    font-weight: 400; }
    #product .product-options .img-thumbnail {
      width: 22px;
      height: 22px;
      border-radius: 0;
      padding: 1px; }
  #product .radio-type-button {
    display: inline-block;
    vertical-align: top;
    margin: 0 7px 5px 0px;
    padding: 0px; }
    #product .radio-type-button label {
      padding: 0;
      font-size: 14px; }
    #product .radio-type-button input {
      visibility: hidden; }
    #product .radio-type-button .option-content-box {
      background: #F3F4F6;
      display: block;
      text-align: center;
      border-radius: 4px;
      padding: 5px 10px; }
      #product .radio-type-button .option-content-box.active, #product .radio-type-button .option-content-box.active:hover {
        background: #666;
        color: white; }
      #product .radio-type-button .option-content-box:hover {
        background: #dadada; }
  #product .radio-type-button.option_image .option-name {
    display: none; }
    #product .option_image label {
      padding: 0; }
    #product .option_image input {
      visibility: hidden; }
    #product .option_image .option-name {
      padding: 0 5px; }
    #product .option_image .option-content-box {
      padding: 1px; }
  #product .box-date {
    padding-left: 0; }
    #product .box-date label {
      margin-right: 10px;
      width: 80px; }
    #product .box-date input {
      width: 200px; }
    #product .box-date input, #product .box-date button {
      border-radius: 0;
      position: relative;
      z-index: 0;
      margin-left: 0; }
    #product .box-date .input-group-btn {
      float: left; }
    #product .box-date button:hover {
      background: <?php echo $tema['t8']; ?> !important;
      color: #fff; }
  #product .icheckbox.checked:before, #product .iradio.checked:before {
    background-color: <?php echo $tema['t8']; ?> !important;
    border-color: <?php echo $tema['t8']; ?> !important; }

.thumb-vertical-outer {
  width: 90px;
  position: relative;
  float: left;
  margin-right: 15px; }
  .thumb-vertical-outer .thumbnail {
    border-color: #f7f7f7;
    padding: 0;
    border-radius: 0;
    margin-bottom: 5px; }
    .thumb-vertical-outer .thumbnail.active {
      border-color: <?php echo $tema['t8']; ?> !important; }

/*============PRODUCT TABS==================*/
.content-product-midde {
  margin-top: 50px; }

.producttab .tabsslider.horizontal-tabs {
  z-index: 1;
  margin-bottom: 0px;
  float: left;
  width: 100%;
  border: none;
  padding: 0; }
  .producttab .tabsslider.horizontal-tabs .nav-tabs {
    background-color: #f5f5f5;
    border: none;
    padding: 10px;
    border-radius: 5px;
    text-align: center; }
    .producttab .tabsslider.horizontal-tabs .nav-tabs li {
      margin-bottom: 0;
      display: inline-flex;
      margin: 5px;
      float: none; }
      .producttab .tabsslider.horizontal-tabs .nav-tabs li a {
        background-color: #fff;
        float: left;
        display: block;
        font-size: 14px;
        color: #222;
        padding: 13px 25px !important;
        margin: 0;
        cursor: pointer;
        text-transform: uppercase;
        font-weight: 700;
        border-radius: 0;
        border: none;
        border: 1px solid #e8e8e8;
        border-radius: 20px;
        line-height: 100%;
        transition: all 0.2s ease-in-out 0s; }
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
    border: none; }
    .producttab .tabsslider.horizontal-tabs .tab-content .active {
      opacity: 1; }

.producttab .tabsslider.vertical-tabs {
  background-color: #fff;
  border: 1px solid #e6e6e6;
  padding: 0;
  border-bottom: 1px solid #ddd;
  border-radius: 0px;
  margin-bottom: 80px; }
  .producttab .tabsslider.vertical-tabs ul.nav-tabs {
    border-bottom: medium none;
    margin: 0;
    min-height: 180px;
    padding: 0; }
    .producttab .tabsslider.vertical-tabs ul.nav-tabs li {
      border: none;
      border-bottom: 1px solid #ddd;
      clear: both;
      position: relative;
      width: 100%;
      padding: 5px 0;
      border-right: none; }
      .producttab .tabsslider.vertical-tabs ul.nav-tabs li a {
        padding: 8px 30px;
        border: none;
        border-radius: 0;
        font-size: 16px;
        text-transform: uppercase;
        font-weight: 500; }
      .producttab .tabsslider.vertical-tabs ul.nav-tabs li:hover {
        border-color: #ddd; }
        .producttab .tabsslider.vertical-tabs ul.nav-tabs li:hover a {
          background: transparent; }
      .producttab .tabsslider.vertical-tabs ul.nav-tabs li:last-child {
        border: none; }
      .producttab .tabsslider.vertical-tabs ul.nav-tabs li:before {
        content: "";
        width: 5px;
        height: 100%;
        left: -1px;
        position: absolute;
        top: 0;
        transition: all 0.3s ease-in-out 0s;
        z-index: 99; }
      .producttab .tabsslider.vertical-tabs ul.nav-tabs li:hover {
        border-left-color: <?php echo $tema['t8']; ?> !important; }
        .producttab .tabsslider.vertical-tabs ul.nav-tabs li:hover a {
          color: <?php echo $tema['t8']; ?> !important;
          border: none; }
        .producttab .tabsslider.vertical-tabs ul.nav-tabs li:hover:before {
          background-color: <?php echo $tema['t8']; ?> !important; }
      .producttab .tabsslider.vertical-tabs ul.nav-tabs li.active {
        border-left-color: <?php echo $tema['t8']; ?> !important; }
        .producttab .tabsslider.vertical-tabs ul.nav-tabs li.active:before {
          background-color: <?php echo $tema['t8']; ?> !important; }
        .producttab .tabsslider.vertical-tabs ul.nav-tabs li.active a {
          background: transparent;
          color: <?php echo $tema['t8']; ?> !important;
          border: none; }
  .producttab .tabsslider.vertical-tabs .tab-content {
    border: 0;
    border-left: 1px solid #e6e6e6;
    min-height: 200px;
    margin-bottom: 0;
    padding: 20px; }

.product-detail .producttab .tab-content .product-property-title {
  font-size: 16px;
  color: #222;
  text-transform: capitalize; }
.product-detail .producttab .tab-content .product-property-list {
  padding: 0;
  margin: 0 0 30px;
  list-style: none;
  display: inline-block;
  width: 100%; }
  .product-detail .producttab .tab-content .product-property-list li {
    width: 50%;
    float: left;
    padding: 5px 0;
    border-bottom: 1px solid #f4f4f4; }
    .product-detail .producttab .tab-content .product-property-list li .propery-title {
      float: left;
      color: #999;
      min-width: 150px; }
    .product-detail .producttab .tab-content .product-property-list li .propery-des {
      float: left;
      max-width: 300px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      color: #495057; }

.desc-collapse.showup {
  max-height: 100%; }
.desc-collapse.showdown {
  max-height: 350px;
  display: block;
  overflow: hidden;
  transition: 0.3s all ease-in-out;
  position: relative;
  z-index: 2; }
  .desc-collapse.showdown:before {
    display: block;
    content: "";
    height: 120px;
    position: absolute;
    bottom: 0;
    width: 100%;
    left: 0;
    z-index: 2;
    background: linear-gradient(rgba(255, 255, 255, 0) 0, white 100%, #fff); }

.button-toggle {
  display: block;
  text-align: center;
  background-color: transparent;
  padding: 10px;
  position: relative;
  z-index: 1; }
  .button-toggle a {
    background-color: transparent;
    text-transform: uppercase;
    font-weight: 400;
    color: #666; }
    .button-toggle a:hover, .button-toggle a:focus, .button-toggle a:active {
      color: <?php echo $tema['t8']; ?> !important;
      background-color: transparent;
      box-shadow: none; }
      .button-toggle a.active .toggle-less {
        display: block; }
      .button-toggle a.active .toggle-more {
        display: none; }
    .button-toggle a .toggle-less {
      display: none; }
    .button-toggle a .toggle-more {
      display: block; }

/*============RELATED PRODUCT==================*/
.related-horizontal h3.modtitle {
  border-bottom: 1px solid #eaeaea;
  display: inline-block;
  width: 100%;
  position: relative;
  margin-top: 0 !important; }
  .related-horizontal h3.modtitle span {
    font-size: 18px;
    color: #222;
    font-weight: 700;
    float: left;
    text-transform: uppercase;
    margin-bottom: 15px; }
.related-horizontal .related-products {
  position: static; }
.related-horizontal .modtitle {
  margin-bottom: 20px; }
.related-horizontal .related-products-slider {
  position: relative;
  z-index: 2; }

/*==== related vertical ===*/
#content .related-vertical, #content .upsell-sidebar {
  position: relative;
  margin-top: 50px; }
  #content .related-vertical .related-products, #content .upsell-sidebar .related-products {
    position: static; }
  #content .related-vertical h3.modtitle, #content .upsell-sidebar h3.modtitle {
    border-bottom: 1px solid #eaeaea;
    display: inline-block;
    width: 100%;
    position: relative;
    margin-top: 0 !important; }
    #content .related-vertical h3.modtitle span, #content .upsell-sidebar h3.modtitle span {
      font-size: 18px;
      color: #222;
      font-weight: 700;
      float: left;
      text-transform: uppercase;
      margin-bottom: 12px; }
    @media (min-width: 992px) and (max-width: 1199px) {
      #content .related-vertical h3.modtitle span, #content .upsell-sidebar h3.modtitle span {
        font-size: 16px; } }
  #content .related-vertical .owl2-controls .owl2-nav, #content .upsell-sidebar .owl2-controls .owl2-nav {
    position: absolute;
    top: -8px;
    right: 0; }
    #content .related-vertical .owl2-controls .owl2-nav .owl2-prev, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-prev, #content .related-vertical .owl2-controls .owl2-nav .owl2-next, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-next {
      background-color: #d6d6d6;
      border: none;
      border-radius: 0px;
      width: 25px;
      height: 25px;
      line-height: 25px;
      text-align: center;
      float: left;
      text-indent: -9999px;
      overflow: hidden;
      cursor: pointer;
      opacity: 1;
      position: absolute;
      top: 50%;
      z-index: 99; }
      #content .related-vertical .owl2-controls .owl2-nav .owl2-prev:before, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-prev:before, #content .related-vertical .owl2-controls .owl2-nav .owl2-next:before, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-next:before {
        color: #fff;
        font-family: 'FontAwesome';
        display: block;
        text-indent: 0 !important;
        width: 100%;
        height: 100%;
        font-size: 12px; }
      #content .related-vertical .owl2-controls .owl2-nav .owl2-prev.owl2-next, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-prev.owl2-next, #content .related-vertical .owl2-controls .owl2-nav .owl2-next.owl2-next, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-next.owl2-next {
        right: 0; }
        #content .related-vertical .owl2-controls .owl2-nav .owl2-prev.owl2-next:before, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-prev.owl2-next:before, #content .related-vertical .owl2-controls .owl2-nav .owl2-next.owl2-next:before, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-next.owl2-next:before {
          content: "\f105"; }
      #content .related-vertical .owl2-controls .owl2-nav .owl2-prev.owl2-prev, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-prev.owl2-prev, #content .related-vertical .owl2-controls .owl2-nav .owl2-next.owl2-prev, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-next.owl2-prev {
        left: 0; }
        #content .related-vertical .owl2-controls .owl2-nav .owl2-prev.owl2-prev:before, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-prev.owl2-prev:before, #content .related-vertical .owl2-controls .owl2-nav .owl2-next.owl2-prev:before, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-next.owl2-prev:before {
          content: "\f104"; }
      #content .related-vertical .owl2-controls .owl2-nav .owl2-prev:hover, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-prev:hover, #content .related-vertical .owl2-controls .owl2-nav .owl2-next:hover, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-next:hover {
        background-color: <?php echo $tema['t8']; ?> !important; }
        #content .related-vertical .owl2-controls .owl2-nav .owl2-prev:hover:before, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-prev:hover:before, #content .related-vertical .owl2-controls .owl2-nav .owl2-next:hover:before, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-next:hover:before {
          color: #fff; }
    #content .related-vertical .owl2-controls .owl2-nav .owl2-prev, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-prev, #content .related-vertical .owl2-controls .owl2-nav .owl2-next, #content .upsell-sidebar .owl2-controls .owl2-nav .owl2-next {
      position: static;
      margin-left: 3px; }
  #content .related-vertical .item-element, #content .upsell-sidebar .item-element {
    margin-bottom: 20px; }
    #content .related-vertical .item-element .image, #content .upsell-sidebar .item-element .image {
      width: 90px;
      border: none;
      margin-right: 15px;
      float: left; }
    #content .related-vertical .item-element h4, #content .upsell-sidebar .item-element h4 {
      margin-bottom: 0px; }
      #content .related-vertical .item-element h4 a, #content .upsell-sidebar .item-element h4 a {
        /* [4] */
        /* [6] */
        /* [6] */
        /* [7] */
        font-size: 14px;
        font-size: 1.4rem;
        /* [8] */
        /* [8] */
        color: #444; }
        #content .related-vertical .item-element h4 a:hover, #content .upsell-sidebar .item-element h4 a:hover {
          color: <?php echo $tema['t8']; ?> !important; }
    #content .related-vertical .item-element .ratings, #content .upsell-sidebar .item-element .ratings {
      margin-bottom: 0;
      /*.related-products-slider{
       background-color: #fff;
       border: 1px solid $base-border-color;
       border-bottom-left-radius: 5px;
       border-bottom-right-radius: 5px;
       padding: 25px 15px 5px 15px;
       .owl2-nav{
       position: absolute;
       top: -40px;
      right: 20px;
       @include button-owl-style2(12px,#fff);
       > div{
       &:before{
       color: #fff !important;
       }
       }
       }
       }*/ }

/*============UPSELL PRODUCT==================*/
/*--- upsell vertical ---*/
.upsell-sidebar {
  position: relative; }
  .upsell-sidebar h3.modtitle {
    padding: 18px 0 18px 20px; }
  .upsell-sidebar .price .price-old {
    font-size: 13px;
    padding: 0; }
    .upsell-sidebar.product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image {
      width: 90px; }
    .upsell-sidebar.product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info {
      margin-left: 105px; }
  .upsell-sidebar .so-extraslider .owl2-controls .owl2-nav {
    position: absolute;
    top: 17px;
    right: 20px; }
    .upsell-sidebar .so-extraslider .owl2-controls .owl2-nav .owl2-prev, .upsell-sidebar .so-extraslider .owl2-controls .owl2-nav .owl2-next {
      -webkit-opacity: 1;
      -moz-opacity: 1;
      -ms-opacity: 1;
      -o-opacity: 1;
      opacity: 1;
      background-color: transparent;
      float: left;
      margin-left: 15px;
      margin-right: 0 !important; }
      .upsell-sidebar .so-extraslider .owl2-controls .owl2-nav .owl2-prev:before, .upsell-sidebar .so-extraslider .owl2-controls .owl2-nav .owl2-next:before {
        font-family: 'FontAwesome';
        font-size: 12px;
        color: #cfcfcf; }
      .upsell-sidebar .so-extraslider .owl2-controls .owl2-nav .owl2-prev:hover, .upsell-sidebar .so-extraslider .owl2-controls .owl2-nav .owl2-next:hover {
        background-color: transparent; }
        .upsell-sidebar .so-extraslider .owl2-controls .owl2-nav .owl2-prev:hover:before, .upsell-sidebar .so-extraslider .owl2-controls .owl2-nav .owl2-next:hover:before {
          color: <?php echo $tema['t8']; ?> !important; }
      .upsell-sidebar .so-extraslider .owl2-controls .owl2-nav .owl2-prev i, .upsell-sidebar .so-extraslider .owl2-controls .owl2-nav .owl2-next i {
        display: none; }
    .upsell-sidebar .so-extraslider .owl2-controls .owl2-nav .owl2-prev {
      margin-right: 15px; }
      .upsell-sidebar .so-extraslider .owl2-controls .owl2-nav .owl2-prev:before {
        content: "\f053"; }
    .upsell-sidebar .so-extraslider .owl2-controls .owl2-nav .owl2-next:before {
      content: "\f054"; }
  .upsell-sidebar .modcontent .so-extraslider {
    margin: 0;
    background-color: #fff;
    border: 1px solid #eaeaea;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    padding: 25px 15px 5px 15px; }
  .upsell-sidebar .modcontent .extraslider-inner {
    border: none;
    /*.item-inner.style2{
     .product-item-container{
     border: none;
     margin: 0;
     border-radius: 0;
     .left-block{
     float: $left;
     width: 90px;
     margin-right: 15px;
     .product-image-container {
     border: 1px solid $base-border-color;
     border-radius: 0;
     }
     }
     .right-block{
     clear: none;
     text-align: $left;
     padding: 0;
     }
     &:hover{
     .left-block{
     .product-image-container {
     border-color: $linkColor;
     }
     }
     }
     }
     }*/ }

/*----up sell full ---*/
.up-sell-product {
  padding: 0;
  clear: both; }
  .up-sell-product .owl2-carousel .owl2-stage-outer {
    direction: ltr; }
  .up-sell-product .so-basic-product {
    overflow: visible;
    position: relative; }
    .up-sell-product .so-basic-product .item-element {
      width: 100%;
      overflow: visible; }
    .up-sell-product .so-basic-product .item-wrap {
      margin: 0;
      overflow: visible; }
      .up-sell-product .so-basic-product .item-wrap .owl2-nav div {
        display: inline-block;
        width: 36px;
        height: 36px;
        background-repeat: no-repeat;
        background-position: center center;
        overflow: hidden;
        font-family: FontAwesome;
        font-size: 0;
        color: #c0c0c0;
        position: absolute;
        top: 50%;
        margin-top: -40px;
        z-index: 501;
        transition: 0.2s;
        cursor: pointer;
        background-color: #fff;
        border: 1px solid #ddd;
        transform: scale(0);
        text-align: center;
        border-radius: 5px; }
        .up-sell-product .so-basic-product .item-wrap .owl2-nav div.owl2-prev {
          left: -15px; }
          .up-sell-product .so-basic-product .item-wrap .owl2-nav div.owl2-prev:before {
            content: "\f104";
            line-height: 30px;
            text-align: center;
            font-size: 26px; }
        .up-sell-product .so-basic-product .item-wrap .owl2-nav div.owl2-next {
          right: -15px; }
          .up-sell-product .so-basic-product .item-wrap .owl2-nav div.owl2-next:before {
            content: "\f105";
            line-height: 30px;
            text-align: center;
            font-size: 26px; }
        .up-sell-product .so-basic-product .item-wrap .owl2-nav div:hover {
          background-color: <?php echo $tema['t8']; ?> !important;
          border-color: <?php echo $tema['t8']; ?> !important;
          color: #fff; }
    .up-sell-product .so-basic-product .item-wrap:hover .owl2-nav div {
      transform: scale(1); }

/*=== share links ===*/
.product-view .social-share {
  margin-top: 15px;
  display: inline-block;
  width: 100%; }
  .product-view .social-share .title-share {
    float: left;
    font-size: 14px;
    color: #222;
    text-transform: uppercase;
    font-weight: 700;
    margin-top: 3px;
    margin-right: 10px; }
  .product-view .social-share .wrap-content {
    float: left; }
    .product-view .social-share .wrap-content a {
      margin-left: 5px; }

/*=== Tab related, upsell ===*/
.content-product-bottom {
  position: relative;
  display: inline-block;
  width: 100%; }
  .content-product-bottom .nav-tabs {
    border-bottom: 2px solid #ebebeb;
    position: relative;
    display: inline-block;
    width: 100%; }
    .content-product-bottom .nav-tabs:after {
      position: absolute;
      content: "";
      bottom: -2px;
      left: 0;
      width: 110px;
      background-color: <?php echo $tema['t8']; ?> !important;
      height: 2px; }
    .content-product-bottom .nav-tabs li {
      margin-bottom: 0;
      margin-right: 50px;
      position: relative; }
      .content-product-bottom .nav-tabs li:last-child:after {
        display: none; }
      .content-product-bottom .nav-tabs li:after {
        position: absolute;
        content: "";
        top: 9px;
        right: -25px;
        width: 1px;
        background-color: #999;
        height: 15px; }
      .content-product-bottom .nav-tabs li a {
        border: none;
        background-color: #fff;
        font-size: 18px;
        color: #666;
        text-transform: uppercase;
        font-weight: 700;
        padding: 5px 0; }
        .content-product-bottom .nav-tabs li a:hover, .content-product-bottom .nav-tabs li a:focus {
          border: none;
          color: #222; }
      .content-product-bottom .nav-tabs li.active a {
        border: none;
        color: #222; }
  .content-product-bottom .tab-content {
    border: none;
    padding: 0; }
    .content-product-bottom .tab-content .active.tab-pane {
      height: auto;
      display: block;
      overflow: hidden; }
  .content-product-bottom .owl2-controls .owl2-nav {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 99;
    right: 15px;
    top: 8px;
    z-index: 99; }
    .content-product-bottom .owl2-controls .owl2-nav > div {
      width: 20px;
      height: 20px;
      line-height: 20px;
      text-align: center;
      border-radius: 0;
      text-indent: -9999px;
      overflow: hidden;
      cursor: pointer;
      background-color: transparent;
      position: relative;
      display: inline-block;
      border: none;
      right: auto;
      right: auto;
      float: none; }
      .content-product-bottom .owl2-controls .owl2-nav > div:before {
        color: #999;
        font-weight: 400;
        font-family: 'FontAwesome';
        position: absolute;
        top: -2px;
        left: 0;
        display: inline-block;
        text-indent: 0;
        width: 100%;
        height: 100%;
        font-size: 26px;
        transition: all 0.2s ease-in-out 0s; }
        .content-product-bottom .owl2-controls .owl2-nav > div.owl2-next:before {
          content: "\f105"; }
      .content-product-bottom .owl2-controls .owl2-nav > div.owl2-prev:before {
        content: "\f104"; }
      .content-product-bottom .owl2-controls .owl2-nav > div:hover {
        background-color: transparent; }
        .content-product-bottom .owl2-controls .owl2-nav > div:hover:before {
          color: <?php echo $tema['t8']; ?> !important; }
  .content-product-bottom .upsell-product {
    display: inline-block;
    width: 100%; }

/*==========tab ==========*/
.content-product-bottom .tab-content {
  margin-bottom: 0; }
  .content-product-bottom .tab-content .products-list .product-layout {
    width: 100%; }
  .content-product-bottom .tab-content .tab-pane {
    display: block;
    height: 0;
    overflow: hidden;
    padding: 0 20px;
    margin: 0 -20px; }
    .content-product-bottom .tab-content .tab-pane.active {
      height: auto !important;
      margin-top: 20px; }
    .content-product-bottom .tab-content .tab-pane .products-list .product-layout .product-item-container {
      margin-bottom: 0; }
  .content-product-bottom .tab-content .owl2-carousel .owl2-stage-outer {
    overflow: unset; }

.content-product-bottom .tab-content .owl2-item.active {
  height: auto;
  display: block; }

.product-product .sticky-detail {
  background-color: #fff;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  box-shadow: 0 0 10px -2px #ddd;
  height: 120px;
  width: 100%;
  z-index: 999;
  padding: 15px 0;
  opacity: 0;
  visibility: hidden; }
  .product-product .sticky-detail .product-image {
    width: 90px;
    float: left;
    margin-right: 20px; }
    .product-product .sticky-detail .product-cont h1 {
      font-size: 18px;
      font-weight: 400;
      color: #222;
      margin: 15px 0 5px 0; }
      .product-product .sticky-detail .product-cont .price .price-new {
        font-size: 18px; }
  @media (min-width: 767px) {
    .product-product .sticky-detail.sticky-active {
      opacity: 1;
      visibility: visible; } }
.product-product .box-info-product.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  float: none;
  width: auto;
  position: fixed;
  max-width: 1200px;
  margin: 0 auto;
  z-index: 1000;
  text-align: right; }
@media (min-width: 992px) and (max-width: 1199px) {
  .product-product .box-info-product.fixed-top {
    max-width: 940px; } }
@media (min-width: 768px) and (max-width: 991px) {
  .product-product .box-info-product.fixed-top {
    max-width: 720px; } }
@media (max-width: 767px) {
  .product-product .box-info-product.fixed-top {
    display: none; } }
.product-product .product-view .content-product-right .box-info-product.fixed-top .inner {
  float: right;
  display: flex;
  align-items: center;
  height: 120px; }
.product-product .product-view .content-product-right .box-info-product.fixed-top .quantity {
  float: left;
  margin: 5px 0; }
  .product-product .product-view .content-product-right .box-info-product.fixed-top .quantity .control-label {
    display: none; }
.product-product .product-view .content-product-right .box-info-product.fixed-top .detail-action {
  float: left; }
  .product-product .product-view .content-product-right .box-info-product.fixed-top .detail-action .cart {
    margin: 0; }
.product-product .product-view .content-product-right .box-info-product.fixed-top .cart #button-cart {
  display: none; }
.product-product .product-view .content-product-right .box-info-product.fixed-top .add-to-links {
  display: none; }
@media (min-width: 767px) {
  .product-product .product-view .content-product-right .box-info-product.fixed-top .cart-sticky {
    display: block !important; } }
.product-product .product-view .content-product-right .box-info-product.fixed-top .cart-sticky .btn {
  background-color: <?php echo $tema['t8']; ?> !important;
  border-radius: 0;
  border: none;
  color: #fff;
  font-weight: 600;
  padding: 12px;
  text-transform: uppercase;
  display: block;
  overflow: hidden;
  text-overflow: ellipsis;
  display: inline-block;
  vertical-align: top;
  max-width: 200px;
  width: 190px; }
  .product-product .product-view .content-product-right .box-info-product.fixed-top .cart-sticky .btn.btn-checkout {
    margin: 0 0 0 20px;
    background-color: <?php echo $tema['t8']; ?> !important; }
    .product-product .product-view .content-product-right .box-info-product.fixed-top .cart-sticky .btn.btn-checkout:hover {
      background-color: #c86e00; }
  .product-product .product-view .content-product-right .box-info-product.fixed-top .cart-sticky .btn:hover {
    background-color: #c86e00; }
.product-product .product-view .content-product-right .box-info-product.fixed-top .cart {
  display: none; }
  .product-product .product-view .content-product-right .box-info-product.fixed-top .cart .button-checkout {
    background-color: <?php echo $tema['t8']; ?> !important;
    border-radius: 0;
    margin: 0 0 0 20px; }
    .product-product .product-view .content-product-right .box-info-product.fixed-top .cart .button-checkout:hover {
      background-color: #c86e00; }

.id3-item {
  display: none; }

.horizontal ul.megamenu > li > .sub-menu {
  max-width: unset; }

header #sosearchpro .dropdown-menu .media-body .box-price span {
  float: left;
  padding: 0 10px 0 0; }
header #sosearchpro .chosen-container-single .chosen-single {
  padding: 0 0 0 15px; }
header #sosearchpro .search .chosen-container input {
  margin: 0;
  padding-left: 10px; }
header #sosearchpro .chosen-container-active.chosen-with-drop .chosen-single div b {
  background-position: -13px 12px; }
header #sosearchpro input.chosen-search-input {
  height: 23px !important;
  line-height: 23px;
  border: 1px solid #efefef !important; }
header #sosearchpro .dropdown-menu {
  opacity: 1;
  visibility: visible;
  margin-top: 0; }
  header #sosearchpro .dropdown-menu li .media-left:hover img {
    opacity: 0.8; }

.navbar-compact .hidden-compact {
  display: none; }

header .chosen-container-single .chosen-search input[type="text"] {
  background: none !important; }
header .navbar-default {
  background-color: transparent; }
  header .navbar-default .megamenu-wrapper {
    background-color: transparent; }
header ul.megamenu > li > a {
  text-shadow: unset; }

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
        color: <?php echo $tema['t8']; ?> !important; }
  .dropdown-menu.shoppingcart-box .table .size-img-cart a:hover img {
    opacity: 0.8; }

header #sosearchpro .dropdown-menu {
  border-radius: 0; }

header ul.top-link > li.language .dropdown-menu img {
  margin-top: -3px; }

header ul.top-link > li.language .btn-link img {
  margin-top: -2px;
  margin-right: 2px; }

/*============ HEADER  ==================*/
.common-home .horizontal ul.megamenu > li.home > a {
  background: transparent;
  color: <?php echo $tema['t8']; ?> !important; }

.container-megamenu.horizontal ul.megamenu > li.home > a, .container-megamenu.horizontal ul.megamenu > li.active > a, .container-megamenu.horizontal ul.megamenu > li:hover > a {
  background-color: transparent;
  color: <?php echo $tema['t8']; ?> !important; }
.container-megamenu.horizontal .subcategory li a {
  color: #495057; }
  .container-megamenu.horizontal .subcategory li a:hover {
    color: <?php echo $tema['t8']; ?> !important; }

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
    color: #495057; }
    .btn-shopping-cart .dropdown-menu .cart_product_name:hover {
      color: <?php echo $tema['t8']; ?> !important; }
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
            color: <?php echo $tema['t8']; ?> !important; }
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
      color: <?php echo $tema['t8']; ?> !important; }
  .megamenu-style-dev .vertical ul.megamenu .sub-menu .content .static-menu .menu ul ul a {
    padding: 0; }
    .megamenu-style-dev .vertical ul.megamenu .sub-menu .content .static-menu .menu ul ul a:hover {
      color: <?php echo $tema['t8']; ?> !important; }

.container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container {
 }

/*======================================================*/
.container-megamenu.horizontal ul.megamenu > li.item-special {
  display: none; }

.typeheader-21 {
  background-color: #ffa12f; }
  .typeheader-21 .header-top {
    background-color: <?php echo $tema['t8']; ?> !important; }
  .typeheader-21 #sosearchpro .search button:hover i, .typeheader-21 .account span, .typeheader-21 .shopping_cart .btn-shopping-cart .top_cart .icon-c i {
    color: <?php echo $tema['t8']; ?> !important; }

.typeheader-22 ul.top-link > li .btn-group .btn-link:hover, .typeheader-22 .welcome-msg .head-links li a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
.typeheader-22 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_cart {
  background-color: <?php echo $tema['t8']; ?> !important; }

.common-home .typeheader-23 .container-megamenu.horizontal ul.megamenu > li.home > a {
  color: <?php echo $tema['t8']; ?> !important; }
  .common-home .typeheader-23 .container-megamenu.horizontal ul.megamenu > li.home > a strong::after {
    background-color: <?php echo $tema['t8']; ?> !important; }

.typeheader-23 .container-megamenu.horizontal ul.megamenu > li:hover > a, .typeheader-23 .container-megamenu.horizontal ul.megamenu > li.active > a {
  color: <?php echo $tema['t8']; ?> !important; }
  .typeheader-23 .container-megamenu.horizontal ul.megamenu > li:hover > a strong:after, .typeheader-23 .container-megamenu.horizontal ul.megamenu > li.active > a strong:after {
    background-color: <?php echo $tema['t8']; ?> !important; }
.typeheader-23 .header-top {
  background-color: <?php echo $tema['t8']; ?> !important; }
.typeheader-23 .search-header-w #sosearchpro .search button:hover {
  color: <?php echo $tema['t8']; ?> !important; }
.typeheader-23 .search-header-w #sosearchpro .search div.select_category {
  border-left: 1px solid <?php echo $tema['t8']; ?> !important;
  border-right: 1px solid <?php echo $tema['t8']; ?> !important; }
.typeheader-23 .container-megamenu.horizontal ul.megamenu > li.item-special a {
  color: <?php echo $tema['t8']; ?> !important; }

.common-home .typeheader-24 .container-megamenu.horizontal ul.megamenu > li.home > a {
 
  color:black !important; }

header.typeheader-24 .container-megamenu.horizontal ul.megamenu > li:hover > a, header.typeheader-24 .container-megamenu.horizontal ul.megamenu > li.active > a, header.typeheader-24 .container-megamenu.horizontal ul.megamenu > li.menu_active > a {
  background-color: white !important; }
header.typeheader-24 .top-log i, header.typeheader-24 ul.top-link > li .btn-group .btn-link:hover, header.typeheader-24 ul.top-link > li > a:hover {
  color: white !important; }
header.typeheader-24 #sosearchpro .search {
  border-color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-24 #sosearchpro .search button {
  background-color: <?php echo $tema['t8']; ?> !important; }
  header.typeheader-24 #sosearchpro .search button:hover {
    background-color: #c86e00; }
header.typeheader-24 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_cart {
  background-color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-24 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_carts {
  color: <?php echo $tema['t8']; ?> !important; }

.common-home .typeheader-25 .container-megamenu.horizontal ul.megamenu > li.home > a {
  background-color: <?php echo $tema['t8']; ?> !important;
  color: #222; }

.typeheader-25 .container-megamenu.horizontal ul.megamenu > li.item-special > a {
  background-color: <?php echo $tema['t8']; ?> !important; }
  .typeheader-25 .container-megamenu.horizontal ul.megamenu > li.item-special > a:hover {
    background-color: #c86e00; }

header.typeheader-25 .container-megamenu.horizontal ul.megamenu > li:hover > a, header.typeheader-25 .container-megamenu.horizontal ul.megamenu > li.active > a, header.typeheader-25 .container-megamenu.horizontal ul.megamenu > li.menu_active > a {
  background-color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-25 .header-top .top-log > li > a:hover, header.typeheader-25 ul.top-link > li .btn-group .btn-link:hover, header.typeheader-25 ul.top-link > li > a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-25 #sosearchpro .search {
  border-color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-25 #sosearchpro .search button {
  background-color: <?php echo $tema['t8']; ?> !important; }
  header.typeheader-25 #sosearchpro .search button:hover {
    background-color: #c86e00; }

header.typeheader-26 .container-megamenu.horizontal ul.megamenu > li:hover > a, header.typeheader-26 .container-megamenu.horizontal ul.megamenu > li.active > a, header.typeheader-26 .container-megamenu.horizontal ul.megamenu > li.menu_active > a {
  color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-26 .header-top .top-log > li > a:hover, header.typeheader-26 ul.top-link > li .btn-group .btn-link:hover, header.typeheader-26 ul.top-link > li > a:hover {
  color: #c86e00; }

.common-home.typeheader-27 .container-megamenu.horizontal ul.megamenu > li.home > a {
  color: <?php echo $tema['t8']; ?> !important; }

header.typeheader-27 .container-megamenu.horizontal ul.megamenu > li.active > a, header.typeheader-27 .container-megamenu.horizontal ul.megamenu > li > a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-27 .top-link li a:hover, header.typeheader-27 ul.top-link > li .btn-group .btn-link:hover {
  color: <?php echo $tema['t8']; ?> !important; }
  header.typeheader-27 .top-link li a:hover i, header.typeheader-27 ul.top-link > li .btn-group .btn-link:hover i {
    color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-27 #sosearchpro .search button i {
  color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-27 #sosearchpro .search button:hover i {
  color: #c86e00; }

.common-home.typeheader-28 .container-megamenu.horizontal ul.megamenu > li.home > a {
  color: <?php echo $tema['t8']; ?> !important; }

header.typeheader-28 .container-megamenu.horizontal ul.megamenu > li.active > a, header.typeheader-28 .container-megamenu.horizontal ul.megamenu > li > a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-28 .top-link li a:hover, header.typeheader-28 ul.top-link > li .btn-group .btn-link:hover {
  color: <?php echo $tema['t8']; ?> !important; }
  header.typeheader-28 .top-link li a:hover i, header.typeheader-28 ul.top-link > li .btn-group .btn-link:hover i {
    color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-28 #sosearchpro .search button i {
  color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-28 #sosearchpro .search button:hover i {
  color: #c86e00; }
header.typeheader-28 .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container {
  background-color: <?php echo $tema['t8']; ?> !important; }

header.typeheader-29 #sosearchpro .search button:hover i, header.typeheader-29 .welcome-msg a {
  color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-29 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_cart {
  background-color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-29 .container-megamenu.horizontal ul.megamenu > li.active > a, header.typeheader-29 .container-megamenu.horizontal ul.megamenu > li > a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-29 ul.top-link > li > a:hover, header.typeheader-29 ul.top-link > li .btn-group .btn-link:hover {
  color: <?php echo $tema['t8']; ?> !important; }
  header.typeheader-29 ul.top-link > li > a:hover i, header.typeheader-29 ul.top-link > li .btn-group .btn-link:hover i {
    color: <?php echo $tema['t8']; ?> !important; }

header.typeheader-30 .telephone, header.typeheader-30 .telephone a, header.typeheader-30 .wishlist:hover i, header.typeheader-30 .account:hover i, header.typeheader-30 #sosearchpro .search button:hover i {
  color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-30 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_cart {
  background-color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-30 .container-megamenu.horizontal ul.megamenu > li.active > a, header.typeheader-30 .container-megamenu.horizontal ul.megamenu > li > a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-30 ul.top-link > li > a:hover, header.typeheader-30 ul.top-link > li .btn-group .btn-link:hover {
  color: <?php echo $tema['t8']; ?> !important; }
  header.typeheader-30 ul.top-link > li > a:hover i, header.typeheader-30 ul.top-link > li .btn-group .btn-link:hover i {
    color: <?php echo $tema['t8']; ?> !important; }

.common-home.typeheader-31 .container-megamenu.horizontal ul.megamenu > li.home > a {
  color: <?php echo $tema['t8']; ?> !important; }

header.typeheader-31 .container-megamenu.horizontal ul.megamenu > li.active > a, header.typeheader-31 .container-megamenu.horizontal ul.megamenu > li > a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-31 .welcome-msg i, header.typeheader-31 .top-link li a:hover, header.typeheader-31 .wishlist:hover i, header.typeheader-31 .link-lg:hover i, header.typeheader-31 ul.top-link > li .btn-group .btn-link:hover {
  color: <?php echo $tema['t8']; ?> !important; }
  header.typeheader-31 .welcome-msg i i, header.typeheader-31 .top-link li a:hover i, header.typeheader-31 .wishlist:hover i i, header.typeheader-31 .link-lg:hover i i, header.typeheader-31 ul.top-link > li .btn-group .btn-link:hover i {
    color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-31 #sosearchpro .search button:hover i {
  color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-31 .container-megamenu.vertical:hover #menuHeading .megamenuToogle-pattern .container > div span, header.typeheader-31 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_cart {
  background-color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-31 .container-megamenu.vertical .vertical-wrapper ul.megamenu > li:hover > a, header.typeheader-31 .container-megamenu.vertical .vertical-wrapper ul.megamenu > li.active > a {
  color: <?php echo $tema['t8']; ?> !important; }

header.typeheader-32 {
  background-color: <?php echo $tema['t8']; ?> !important; }
  header.typeheader-32 .header-top {
    background-color: #c86e00; }
  header.typeheader-32 #sosearchpro .search button:hover i {
    color: <?php echo $tema['t8']; ?> !important; }

.common-home .typeheader-33 .container-megamenu.horizontal ul.megamenu > li.menu-layouts > a {
  color: <?php echo $tema['t8']; ?> !important; }

header.typeheader-33 #sosearchpro .search {
  border: 1px solid <?php echo $tema['t8']; ?> !important; }
header.typeheader-33 #sosearchpro .search button {
  background-color: <?php echo $tema['t8']; ?> !important; }
  header.typeheader-33 #sosearchpro .search button:hover {
    background-color: #c86e00; }
header.typeheader-33 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_cart {
  background-color: <?php echo $tema['t8']; ?> !important; }
  header.typeheader-33 .container-megamenu.horizontal ul.megamenu > li a:before {
    background-color: <?php echo $tema['t8']; ?> !important; }
  header.typeheader-33 .container-megamenu.horizontal ul.megamenu > li:hover > a, header.typeheader-33 .container-megamenu.horizontal ul.megamenu > li.active > a {
    color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-33 ul.top-link > li .btn-group .btn-link:hover, header.typeheader-33 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner:hover, header.typeheader-33 .header-middle .link-lg a:hover, header.typeheader-33 .header-middle .compare a:hover {
  color: <?php echo $tema['t8']; ?> !important; }

.common-home.typeheader-34 .container-megamenu.horizontal ul.megamenu > li.home > a {
  color: <?php echo $tema['t8']; ?> !important; }

header.typeheader-34 #sosearchpro .search button:hover i, header.typeheader-34 ul.top-link > li .btn-group:hover .btn-link, header.typeheader-34 .account:hover i {
  color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-34 .shopping_cart .btn-shopping-cart .top_cart {
  background-color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-34 .header-middle .search-header-w .icon-search:hover i, header.typeheader-34 .container-megamenu.horizontal ul.megamenu > li.active > a, header.typeheader-34 .container-megamenu.horizontal ul.megamenu > li > a:hover {
  color: <?php echo $tema['t8']; ?> !important; }

header.typeheader-35 ul.top-link > li > a:hover, header.typeheader-35 #sosearchpro .search button:hover i, header.typeheader-35 ul.top-link > li .btn-group:hover .btn-link {
  color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-35 .shopping_cart .btn-shopping-cart .top_cart {
  background-color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-35 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_cart, header.typeheader-35 .header-middle .search-header-w .icon-search:hover i {
  color: <?php echo $tema['t8']; ?> !important; }
header.typeheader-35 #sosearchpro .search button::before, header.typeheader-35 .search-header-w, header.typeheader-35 .header-middle, header.typeheader-35 .header-top .top-left {
  background-color: <?php echo $tema['t8']; ?> !important; }

@media (max-width: 991px) {
  .megamenu-style-dev .navbar-default .vertical .vertical-wrapper ul.megamenu > li > a:hover strong, .megamenu-style-dev .navbar-default .horizontal .megamenu-wrapper ul.megamenu > li > a:hover {
    color: <?php echo $tema['t8']; ?> !important !important; } }

footer #collapse-footer {
  display: block; }

.footer-container {
  clear: both; }

footer .so-page-builder .container {
  padding: 0 15px; }

footer .copyright a {
  color: <?php echo $tema['t8']; ?> !important !important; }

.typefooter-21 .footer-top .footer-links ul li a:hover, .typefooter-21 .footer-top .findstore a {
  color: <?php echo $tema['t8']; ?> !important; }
.typefooter-21 .module ul.menu li a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
.typefooter-21 .newsletter-footer21 .newsletter .block_content form.signup .subcribe button {
  background-color: <?php echo $tema['t8']; ?> !important; }
  .typefooter-21 .newsletter-footer21 .newsletter .block_content form.signup .subcribe button:hover {
    background-color: #c86e00 !important; }
.typefooter-21 .socials li a:hover {
  background-color: <?php echo $tema['t8']; ?> !important; }

.typefooter-22 .newsletter-footer22 .newsletter .title-block::before {
  color: <?php echo $tema['t8']; ?> !important; }
.typefooter-22 .module ul.menu li a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
.typefooter-22 .newsletter-footer22 .newsletter .block_content form.signup .subcribe button {
  background-color: <?php echo $tema['t8']; ?> !important; }
  .typefooter-22 .newsletter-footer22 .newsletter .block_content form.signup .subcribe button:hover {
    background-color: #c86e00 !important; }
.typefooter-22 .socials li a:hover {
  background-color: <?php echo $tema['t8']; ?> !important; }

.typefooter-23 .newsletter-footer22 .newsletter .title-block::before {
  color: <?php echo $tema['t8']; ?> !important; }
.typefooter-23 .module ul.menu li a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
.typefooter-23 .newsletter-footer22 .newsletter .block_content form.signup .subcribe button {
  background-color: <?php echo $tema['t8']; ?> !important; }
  .typefooter-23 .newsletter-footer22 .newsletter .block_content form.signup .subcribe button:hover {
    background-color: #c86e00 !important; }
.typefooter-23 .socials li a:hover {
  background-color: <?php echo $tema['t8']; ?> !important; }

.typefooter-24 .module ul.menu li a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
.typefooter-24 .newsletter-footer21 .newsletter .block_content form.signup .subcribe button {
  background-color: <?php echo $tema['t8']; ?> !important; }
  .typefooter-24 .newsletter-footer21 .newsletter .block_content form.signup .subcribe button:hover {
    background-color: #c86e00 !important; }
.typefooter-24 .footer-bottom .copyright a, .typefooter-24 .socials li a:hover {
  color: <?php echo $tema['t8']; ?> !important; }

.typefooter-25 .module ul.menu li a:before, .typefooter-25 .footer-top {
  background-color: <?php echo $tema['t8']; ?> !important; }
.typefooter-25 .module ul.menu li a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
.typefooter-25 .newsletter-footer22 .newsletter .block_content form.signup .subcribe button {
  background-color: <?php echo $tema['t8']; ?> !important; }
  .typefooter-25 .newsletter-footer22 .newsletter .block_content form.signup .subcribe button:hover {
    background-color: #c86e00 !important; }
.typefooter-25 .footer-bottom .copyright a {
  color: <?php echo $tema['t8']; ?> !important; }
.typefooter-25 .socials li a:hover {
  background-color: <?php echo $tema['t8']; ?> !important; }

.typefooter-26 .row-top {
  background-color: <?php echo $tema['t8']; ?> !important; }
.typefooter-26 .socials li a:hover, .typefooter-26 .footer-middle .footer-links li a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
  .typefooter-26 .newsletter-footer1 .newsletter .block_content form.signup .subcribe button:hover {
    color: <?php echo $tema['t8']; ?> !important; }
.typefooter-26 .box-footer .modcontent ul li a:hover, .typefooter-26 .infos-footer ul li i {
  color: <?php echo $tema['t8']; ?> !important; }
.typefooter-26 .box-footer .modcontent ul li a:hover:before, .typefooter-26 .so-popular-tag .box-content a:hover {
  background-color: <?php echo $tema['t8']; ?> !important; }

.typefooter-27 .socials li a:hover {
  background-color: <?php echo $tema['t8']; ?> !important; }
  .typefooter-27 .newsletter-footer1 .newsletter .block_content form.signup .subcribe button:hover {
    color: <?php echo $tema['t8']; ?> !important; }

.typefooter-28 .socials li a:hover {
  background-color: <?php echo $tema['t8']; ?> !important; }
  .typefooter-28 .newsletter-footer1 .newsletter .block_content form.signup .subcribe button:hover {
    color: <?php echo $tema['t8']; ?> !important; }
.typefooter-28 .footer-bottom {
  background-color: <?php echo $tema['t8']; ?> !important; }

.typefooter-29 .box-footer ul.menu li a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
.typefooter-29 .footer-bottom .footer-links ul li a:hover {
  color: <?php echo $tema['t8']; ?> !important; }

.typefooter-30 .socials li a:hover {
  background-color: <?php echo $tema['t8']; ?> !important; }
.typefooter-30 .box-footer ul.menu li a:hover {
  color: <?php echo $tema['t8']; ?> !important; }

.typefooter-31 .box-footer ul.menu li a::before, .typefooter-31 .socials li a:hover {
  background-color: <?php echo $tema['t8']; ?> !important; }
  .typefooter-31 .newsletter-footer21 .newsletter .block_content form.signup .subcribe button:before {
    color: <?php echo $tema['t8']; ?> !important; }
  .typefooter-31 .newsletter-footer21 .newsletter .block_content form.signup .subcribe button:hover:before {
    color: #c86e00; }
.typefooter-31 .block-policy .item-inner a:hover, .typefooter-31 .box-footer ul.menu li a:hover {
  color: <?php echo $tema['t8']; ?> !important; }

.typefooter-32 .newsletter-footer21 .newsletter .block_content form.signup .subcribe button {
  background-color: <?php echo $tema['t8']; ?> !important; }
  .typefooter-32 .newsletter-footer21 .newsletter .block_content form.signup .subcribe button:hover {
    background-color: #c86e00; }
.typefooter-32 .footer-info ul li i, .typefooter-32 .box-footer ul.menu li a:hover {
  color: <?php echo $tema['t8']; ?> !important; }

.typefooter-33 {
  border-top: 2px solid <?php echo $tema['t8']; ?> !important; }
  .typefooter-33 .footer-top .ftop-content ul li a:hover {
    color: <?php echo $tema['t8']; ?> !important; }
  .typefooter-33 .socials ul li a:hover {
    background-color: <?php echo $tema['t8']; ?> !important; }
  .typefooter-33 .footer-bottom {
    background-color: <?php echo $tema['t8']; ?> !important; }

.typefooter-34 .footer-info ul li:last-child span, .typefooter-34 .box-footer ul.menu li a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
  .typefooter-34 .footer-info ul li:last-child span:before, .typefooter-34 .box-footer ul.menu li a:hover:before {
    background-color: <?php echo $tema['t8']; ?> !important; }
.typefooter-34 .newsletter-footer21 .newsletter .block_content form.signup .subcribe button:hover:before {
  color: <?php echo $tema['t8']; ?> !important; }
.typefooter-34 .socials ul li a:hover {
  background-color: <?php echo $tema['t8']; ?> !important; }

.typefooter-35 .footer-info ul li:last-child span, .typefooter-35 .box-footer ul.menu li a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
  .typefooter-35 .box-footer ul.menu li a:before {
    background-color: <?php echo $tema['t8']; ?> !important; }
.typefooter-35 .newsletter-footer22 .newsletter .block_content form.signup .subcribe button:hover {
  color: <?php echo $tema['t8']; ?> !important; }
.typefooter-35 .telephone a {
  color: <?php echo $tema['t8']; ?> !important; }

/*===============================================
 [SASS DIRECTORY ]
 [1] MEGA MENU VERTICAL 
 [2] MODULE HOME SLIDER  
 [3] MODULE EXTRA SLIDER
 [4] SHORT CODE BANNER 
 [5] SO LISTING TABS
 [6] SO DEALS
 [7] SO NEWSLETTER
 ==============================================*/
.common-home #content {
  margin-bottom: 40px; }

#content {
  margin-bottom: 30px; }

#content .so-page-builder .container, .container-fluid .container {
  padding-left: 0px;
  padding-right: 0px; }

@media (min-width: 1650px) {
  .common-home.layout-24 .wrapper-full .container, .common-home.layout-24 .wrapper-fluid .container {
    max-width: 1600px;
    width: 100%;
    padding: 0; } }

@media (min-width: 1365px) and (max-width: 1650px) {
  body.common-home.layout-24 .wrapper-full .container, body.common-home.layout-24 .wrapper-fluid .container {
    max-width: 1300px;
    width: 100%;
    padding: 0; }
  body.common-home.layout-24 .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > a {
    padding: 5px 0; }
  body.common-home.layout-24 .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .item-title {
    height: 20px;
    line-height: 20px;
    overflow: hidden; }
  body.common-home.layout-24 .product-simple .so-extraslider .extraslider-inner .item .item-inner {
    padding-bottom: 0; }
    body.common-home.layout-24 .product-simple.simple1 .so-extraslider .extraslider-inner .item .item-inner:last-child {
      display: none; }
  body.common-home.layout-24 .testimonials {
    background-size: 100% 100%; }
    body.common-home.layout-24 .testimonials .contentslider .owl2-dots {
      margin-top: 0; } }

.common-home.layout-24 {
  background-color: #f0f1f2; }

.layout-24 a:focus, .layout-24 a:hover {
  color: <?php echo $tema['t8']; ?> !important; }
.layout-24 .price .price-new, .layout-24 .price span.price, .layout-24 .price {
  font-weight: 400; }
.layout-24 .row-megamenu {
  margin: 0; }
  .layout-24 .row-megamenu h3 {
    font-weight: 500;
    font-size: 14px;
    color: #2a2a2a;
    text-transform: uppercase; }
  .layout-24 .row-megamenu .navbar-default {
    background-color: #fff; }
    .layout-24 .row-megamenu .container-megamenu.vertical .megamenuToogle-wrapper .container > div {
      margin-right: 18px; }
    .layout-24 .row-megamenu .container-megamenu.vertical .megamenuToogle-wrapper .container > div span {
      background-color: #7f7f7f;
      width: 11px;
      height: 2px; }
      .layout-24 .row-megamenu .container-megamenu.vertical .megamenuToogle-wrapper .container > div span:nth-child(2) {
        width: 13px; }
      .layout-24 .row-megamenu .container-megamenu.vertical .megamenuToogle-wrapper .container > div span:nth-child(3) {
        width: 12px; }
      .layout-24 .row-megamenu .container-megamenu.vertical .megamenuToogle-wrapper .container > div span:nth-child(4) {
        width: 15px; }
.layout-24 .content-top {
  border-radius: 5px;
  -webkit-box-shadow: 0px 0px 7px 0px rgba(0, 0, 0, 0.07);
  -moz-box-shadow: 0px 0px 7px 0px rgba(0, 0, 0, 0.07);
  box-shadow: 0px 0px 7px 0px rgba(0, 0, 0, 0.07);
  margin: 0;
  background-color: #fff;
  padding: 10px 00px 22px 0px;
  margin: 30px 0 40px 0; }
.layout-24 .content-main {
  clear: both; }
.layout-24 .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container {
  background-color: #fff;
  font-weight: 600;
  font-size: 19px;
  color: #222;
  border-bottom: 1px solid #e9e9e9;
  margin-bottom: 13px;
  text-shadow: unset;
  text-transform: capitalize;
  padding: 0 !important; }
@media (min-width: 1200px) {
  .layout-24 .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container {
    padding-left: 20px !important; } }
.layout-24 .container-megamenu.vertical .vertical-wrapper ul.megamenu .loadmore {
  padding-left: 33px; }
  .layout-24 .container-megamenu.vertical .vertical-wrapper ul.megamenu .loadmore i {
    left: 7px;
    padding-left: 0; }
.layout-24 .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > a {
  color: #222;
  padding: 10px 0; }
  .layout-24 .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > a i {
    color: #666;
    top: 14px; }
  .layout-24 .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > a:hover {
    color: <?php echo $tema['t8']; ?> !important; }
    .layout-24 .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > a:hover i {
      color: <?php echo $tema['t8']; ?> !important; }
.layout-24 .content-top .megamenu-style-dev {
  z-index: 99; }
  .layout-24 .content-top .megamenu-style-dev .container-megamenu.vertical .vertical-wrapper ul.megamenu {
    position: absolute;
    width: 100%; }
  @media (min-width: 1200px) {
    .layout-24 .content-top .megamenu-style-dev .container-megamenu.vertical .vertical-wrapper ul.megamenu {
      padding-left: 20px; } }

/*====================== mod title ========================*/
.layout-24.common-home #content .banners .bn a img {
  border-radius: 5px;
  width: 100%; }
  .layout-24.common-home #content .module .form-group {
    font-size: 14px;
    color: #898989;
    text-align: center;
    line-height: 100%; }
  .layout-24.common-home #content .module h3.modtitle {
    font-size: 22px;
    color: #222;
    font-weight: 600;
    position: relative;
    text-transform: capitalize;
    line-height: 100%;
    border-bottom: 1px solid #e9e9e9;
    padding-bottom: 15px; }
    .layout-24.common-home #content .module h3.modtitle span {
      font-size: 22px;
      color: #222;
      font-weight: 600;
      text-transform: capitalize; }
  .layout-24.common-home #content .module.simple1 h3.modtitle {
    padding-bottom: 10px; }
    .layout-24.common-home #content .module.simple1 h3.modtitle span {
      font-size: 19px; }
.layout-24.common-home #content .main-left .module h3.modtitle span {
  font-size: 20px; }
.layout-24.common-home #content .content-main-w {
  margin-top: 30px; }
@media (min-width: 1200px) {
  .layout-24.common-home #content .main-left {
    width: 18.5%;
    padding-left: 0; }
  .layout-24.common-home #content .main-right {
    width: 81.5%;
    padding-right: 0; }
    .layout-24.common-home #content .main-right .col2 {
      width: 76.6%; }
    .layout-24.common-home #content .main-right .col3 {
      width: 23.4%; } }
.layout-24.common-home #content .row-main {
  margin: 0; }
  .layout-24.common-home #content .row-main .module {
    -webkit-box-shadow: 0px 0px 7px 0px rgba(0, 0, 0, 0.07);
    -moz-box-shadow: 0px 0px 7px 0px rgba(0, 0, 0, 0.07);
    box-shadow: 0px 0px 7px 0px rgba(0, 0, 0, 0.07);
    background-color: #fff;
    border-radius: 5px;
    padding: 20px; }
    .layout-24.common-home #content .row-main .module.extra-layout24 {
      padding-top: 30px;
      /*.main-left .inner{ background-color: #fff; margin: 0; }
       .main-right .inner{ background-color: #fff; margin: 0; }*/ }
.layout-24.common-home #content .col-menu1 {
  padding: 0px; }
  .layout-24.common-home #content .product-grid9 .product-item-container {
    background-color: #fff;
    margin: 0;
    padding: 0;
    position: relative;
    overflow: hidden;
    border-radius: 3px; }
    .layout-24.common-home #content .product-grid9 .product-item-container .box-label {
      top: 5px;
      right: 5px;
      position: absolute; }
      .layout-24.common-home #content .product-grid9 .product-item-container .box-label .label-sale {
        font-weight: 600;
        font-size: 12px;
        background-color: #9e0b0f;
        position: static; }
      .layout-24.common-home #content .product-grid9 .product-item-container .box-label .label-new {
        font-weight: 600;
        font-size: 12px;
        background-color: <?php echo $tema['t8']; ?> !important;
        position: static;
        text-transform: capitalize; }
    .layout-24.common-home #content .product-grid9 .product-item-container .left-block {
      position: relative; }
      .layout-24.common-home #content .product-grid9 .product-item-container .left-block .button-group {
        padding: 0;
        position: absolute;
        z-index: 99;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        min-width: 105px; }
      @media (max-width: 1199px) {
        .layout-24.common-home #content .product-grid9 .product-item-container .left-block .button-group {
          min-width: 75px; } }
      .layout-24.common-home #content .product-grid9 .product-item-container .left-block .button-group .btn-button {
        border: none;
        display: inline-block;
        float: left;
        padding: 0;
        background-color: #fff;
        border-radius: 6px;
        color: #fff;
        width: 30px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        transition: all 0.2s ease-in-out 0s;
        opacity: 0;
        -webkit-transform: scale(0.5);
        -moz-transform: scale(0.5);
        -ms-transform: scale(0.5);
        -o-transform: scale(0.5);
        transform: scale(0.5);
        -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1); }
        .layout-24.common-home #content .product-grid9 .product-item-container .left-block .button-group .btn-button span {
          display: none; }
        .layout-24.common-home #content .product-grid9 .product-item-container .left-block .button-group .btn-button i, .layout-24.common-home #content .product-grid9 .product-item-container .left-block .button-group .btn-button:before {
          font-size: 14px;
          color: #666;
          width: 30px;
          height: 30px;
          line-height: 30px; }
        .layout-24.common-home #content .product-grid9 .product-item-container .left-block .button-group .btn-button.wishlist {
          margin: 0; }
        .layout-24.common-home #content .product-grid9 .product-item-container .left-block .button-group .btn-button.compare {
          margin: 0 5px; }
        .layout-24.common-home #content .product-grid9 .product-item-container .left-block .button-group .btn-button:hover {
          background-color: <?php echo $tema['t8']; ?> !important; }
          .layout-24.common-home #content .product-grid9 .product-item-container .left-block .button-group .btn-button:hover i {
            color: #fff; }
    .layout-24.common-home #content .product-grid9 .product-item-container .right-block {
      clear: both;
      padding: 10px 0px 0 0;
      position: relative; }
      .layout-24.common-home #content .product-grid9 .product-item-container .right-block .price {
        margin-bottom: 0; }
      .layout-24.common-home #content .product-grid9 .product-item-container .right-block h4 {
        margin: 10px 0 3px 0;
        font-weight: 400; }
        .layout-24.common-home #content .product-grid9 .product-item-container .right-block h4 a {
          font-size: 14px;
          color: #222; 
          font-weight: 500;
}
          .layout-24.common-home #content .product-grid9 .product-item-container .right-block h4 a:hover {
            color: <?php echo $tema['t8']; ?> !important; }
      .layout-24.common-home #content .product-grid9 .product-item-container .right-block .rating, .layout-24.common-home #content .product-grid9 .product-item-container .right-block .ratings {
        margin: 4px 0; }
      .layout-24.common-home #content .product-grid9 .product-item-container .right-block .addToCart {
        position: absolute;
        bottom: 21px;
        right: 0;
        width: 30px;
        height: 30px;
        border-radius: 6px;
        background-color: <?php echo $tema['t8']; ?> !important;
        font-size: 16px;
        color: #fff;
        border: none; }
        .layout-24.common-home #content .product-grid9 .product-item-container .right-block .addToCart span {
          display: none; }
        .layout-24.common-home #content .product-grid9 .product-item-container .right-block .addToCart:hover {
          background-color: #c86e00;
          color: #fff; }
    .layout-24.common-home #content .product-grid9 .product-item-container:hover .left-block .button-group .btn-button {
      transition: all 0.2s ease-in-out 0s;
      opacity: 1;
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1); }

/************************************************************************************************
 MODULE HOME SLIDER  
 *************************************************************************************************/
.module.sohomepage-slider .so-homeslider img {
  width: auto; }

.sohomepage-slider .so-homeslider .owl2-nav div::before, .sohomepage-slider .so-homeslider .owl2-nav div:hover:before {
  background-color: transparent !important; }

.module.sohomepage-slider {
  margin: 0 0 10px 0;
  z-index: 0;
  border-radius: 3px;
  overflow: hidden; }
  .module.sohomepage-slider .form-group {
    margin-bottom: 0; }
  .module.sohomepage-slider .so-homeslider {
    border: none; }
    .module.sohomepage-slider .so-homeslider img {
      width: auto; }
  .module.sohomepage-slider .owl2-controls {
    height: 0; }
    .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-next, .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-prev {
      font-size: 0px;
      z-index: 99;
      width: 40px;
      height: 50px;
      line-height: 48px;
      text-align: center;
      border-radius: 4px;
      top: 50%;
      margin-top: -25px;
      text-indent: -999em;
      display: block;
      background-color: #2a3c52;
      border: none; }
      .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-next:after, .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-prev:after {
        display: none; }
      .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-next:before, .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-prev:before {
        font-size: 25px;
        color: #fff;
        font-family: 'FontAwesome';
        display: block;
        text-indent: 0 !important;
        opacity: 1;
        width: 40px;
        height: 50px; }
      .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-next:hover, .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-prev:hover {
        background-color: <?php echo $tema['t8']; ?> !important; }
        .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-next:hover:before, .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-prev:hover:before {
          color: #fff; }
    .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-next {
      right: 20px;
      left: auto; }
      .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-next:before {
        content: "\f105"; }
    .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-prev {
      left: 20px;
      right: auto; }
      .module.sohomepage-slider .owl2-controls .owl2-nav .owl2-prev:before {
        content: "\f104"; }
    .module.sohomepage-slider .owl2-controls .owl2-dots {
      bottom: 30px;
      text-align: center;
      position: relative;
      top: -30px;
      left: auto;
      right: auto;
      z-index: 10; }
      .module.sohomepage-slider .owl2-controls .owl2-dots .owl2-dot {
        background: #fff !important;
        margin: 0 5px;
        width: 10px;
        height: 10px;
        padding: 0;
        transition: all 0.3s ease 0s;
        border-radius: 50%;
        float: none;
        display: inline-block;
        border: 2px solid transparent; }
        .module.sohomepage-slider .owl2-controls .owl2-dots .owl2-dot span {
          background: #fff;
          display: block;
          width: 100%;
          height: 100%;
          border-radius: 50%;
          border: 2px solid transparent;
          margin: 0; }
        .module.sohomepage-slider .owl2-controls .owl2-dots .owl2-dot:hover {
          background: <?php echo $tema['t8']; ?> !important !important; }
          .module.sohomepage-slider .owl2-controls .owl2-dots .owl2-dot:hover span {
            background: <?php echo $tema['t8']; ?> !important !important; }
        .module.sohomepage-slider .owl2-controls .owl2-dots .owl2-dot.active {
          width: 10px;
          height: 10px;
          background: <?php echo $tema['t8']; ?> !important !important;
          border-color: <?php echo $tema['t8']; ?> !important; }
          .module.sohomepage-slider .owl2-controls .owl2-dots .owl2-dot.active span {
            background: <?php echo $tema['t8']; ?> !important !important;
            border-color: <?php echo $tema['t8']; ?> !important; }
  .module.sohomepage-slider #carousel-custom-dots {
    background-color: #fff;
    display: inline-block;
    width: 100%;
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px; }
    .module.sohomepage-slider #carousel-custom-dots li {
      font-size: 16px;
      color: #202020;
      position: relative;
      padding: 26px 0 26px 0;
      margin: 0 30px; }
      .module.sohomepage-slider #carousel-custom-dots li:after {
        position: absolute;
        content: "";
        width: 100%;
        height: 4px;
        background-color: #fff;
        bottom: 0;
        left: 0; }
      .module.sohomepage-slider #carousel-custom-dots li:hover {
        cursor: pointer; }
        .module.sohomepage-slider #carousel-custom-dots li:hover:after, .module.sohomepage-slider #carousel-custom-dots li.active:after {
          background-color: <?php echo $tema['t8']; ?> !important; }

/************************************************************************************************
 HTML CONTENT
 *************************************************************************************************/
.banners1 .row {
  margin: 0 -5px; }
  .banners1 .row .bn {
    padding: 0 5px; }

.banners2 {
  margin: 40px 0; }

.banners3 {
  margin: 40px 0; }
  .banners3 img {
    width: 100%; }

/************************************************************************************************
 MODULE EXTRA SLIDER
 *************************************************************************************************/
.common-home .product-simple {
  position: relative; }
  .common-home .product-simple .modcontent {
    padding: 0; }
  .common-home .product-simple .so-quickview {
    display: none; }
  .common-home .product-simple .so-extraslider {
    margin: 0; }
    .common-home .product-simple .so-extraslider .owl2-controls {
      margin: 0; }
      .common-home .product-simple .so-extraslider .owl2-controls .owl2-dots {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 80px;
        min-width: 55px;
        top: -12px; }
        .common-home .product-simple .so-extraslider .owl2-controls .owl2-dots .owl2-dot {
          width: 8px;
          height: 8px;
          border-radius: 8px;
          background: #7d7d7d;
          margin: 0 2px;
          display: inline-block;
          float: left;
          opacity: 1;
          transition: all 0.2s ease-in-out 0s; }
          .common-home .product-simple .so-extraslider .owl2-controls .owl2-dots .owl2-dot span {
            display: none; }
          .common-home .product-simple .so-extraslider .owl2-controls .owl2-dots .owl2-dot:hover {
            background-color: <?php echo $tema['t8']; ?> !important; }
          .common-home .product-simple .so-extraslider .owl2-controls .owl2-dots .owl2-dot.active {
            width: 25px;
            background-color: <?php echo $tema['t8']; ?> !important; }
      .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 99;
        top: 22px;
        right: 5px;
        z-index: 9; }
        .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav > div {
          width: 24px;
          height: 24px;
          line-height: 24px;
          text-align: center;
          border-radius: 0;
          text-indent: -9999px;
          overflow: hidden;
          cursor: pointer;
          background-color: transparent;
          position: relative;
          display: inline-block;
          border: none;
          right: auto;
          right: auto;
          float: none; }
          .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav > div:before {
            color: #888888;
            font-weight: 400;
            font-family: 'FontAwesome';
            position: absolute;
            top: -2px;
            left: 0;
            display: inline-block;
            text-indent: 0;
            width: 100%;
            height: 100%;
            font-size: 22px;
            transition: all 0.2s ease-in-out 0s; }
            .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav > div.owl2-next:before {
              content: "\f105"; }
          .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav > div.owl2-prev:before {
            content: "\f104"; }
          .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav > div:hover {
            background-color: transparent; }
            .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav > div:hover:before {
              color: <?php echo $tema['t8']; ?> !important; }
        .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next, .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev {
          background-color: transparent;
          float: none;
          height: auto;
          line-height: unset;
          margin: 0;
          opacity: 1; }
          .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-next:hover, .common-home .product-simple .so-extraslider .owl2-controls .owl2-nav .owl2-prev:hover {
            background-color: transparent; }
    .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner {
      display: inline-block;
      padding-bottom: 10px;
      margin-bottom: 10px;
      width: 100%; }
      .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image {
        width: 80px;
        float: left; }
        .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image a:hover img {
          opacity: 0.8; }
      .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info {
        margin-top: 0px;
        margin-left: 90px;
        background: transparent;
        color: #666; }
        .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .item-title {
          line-height: 100%;
          margin: 5px 0;
          padding: 0; }
          .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .item-title a {
            /* [4] */
            /* [6] */
            /* [6] */
            /* [7] */
            font-size: 14px;
            font-size: 1.4rem;
            /* [8] */
            /* [8] */
            font-weight: 400;
            text-transform: capitalize;
            color: #1c1c1c; }
            .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info .item-title a:hover {
              color: <?php echo $tema['t8']; ?> !important; }
      .common-home .product-simple .so-extraslider .extraslider-inner .item .item-inner:last-child {
        margin-bottom: 0;
        padding-bottom: 0; }

.common-home .row-main .product-simple .so-extraslider .extraslider-inner .item .item-inner {
  border-bottom: 1px solid #e9e9e9;
  padding-bottom: 15px;
  margin-bottom: 15px; }
  .common-home .row-main .product-simple .so-extraslider .extraslider-inner .item .item-inner:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0; }

.extra-layout24 {
  position: relative; }
  .extra-layout24 .so-extraslider .owl2-controls {
    margin: 0; }
    .extra-layout24 .so-extraslider .owl2-controls .owl2-dots {
      position: absolute;
      top: 0;
      right: 0;
      min-width: 80px;
      min-width: 55px; }
      .extra-layout24 .so-extraslider .owl2-controls .owl2-dots .owl2-dot {
        width: 8px;
        height: 8px;
        border-radius: 8px;
        background: #7d7d7d;
        margin: 0 2px;
        display: inline-block;
        float: left;
        opacity: 1;
        transition: all 0.2s ease-in-out 0s; }
        .extra-layout24 .so-extraslider .owl2-controls .owl2-dots .owl2-dot span {
          display: none; }
        .extra-layout24 .so-extraslider .owl2-controls .owl2-dots .owl2-dot:hover {
          background-color: <?php echo $tema['t8']; ?> !important; }
        .extra-layout24 .so-extraslider .owl2-controls .owl2-dots .owl2-dot.active {
          width: 25px;
          background-color: <?php echo $tema['t8']; ?> !important; }
    .extra-layout24 .so-extraslider .owl2-controls .owl2-nav {
      position: absolute;
      top: 0;
      right: 0;
      z-index: 99;
      top: 27px;
      right: 5px; }
      .extra-layout24 .so-extraslider .owl2-controls .owl2-nav > div {
        width: 24px;
        height: 24px;
        line-height: 24px;
        text-align: center;
        border-radius: 0;
        text-indent: -9999px;
        overflow: hidden;
        cursor: pointer;
        background-color: transparent;
        position: relative;
        display: inline-block;
        border: none;
        right: auto;
        right: auto;
        float: none; }
        .extra-layout24 .so-extraslider .owl2-controls .owl2-nav > div:before {
          color: #888888;
          font-weight: 400;
          font-family: 'FontAwesome';
          position: absolute;
          top: -2px;
          left: 0;
          display: inline-block;
          text-indent: 0;
          width: 100%;
          height: 100%;
          font-size: 22px;
          transition: all 0.2s ease-in-out 0s; }
          .extra-layout24 .so-extraslider .owl2-controls .owl2-nav > div.owl2-next:before {
            content: "\f105"; }
        .extra-layout24 .so-extraslider .owl2-controls .owl2-nav > div.owl2-prev:before {
          content: "\f104"; }
        .extra-layout24 .so-extraslider .owl2-controls .owl2-nav > div:hover {
          background-color: transparent; }
          .extra-layout24 .so-extraslider .owl2-controls .owl2-nav > div:hover:before {
            color: <?php echo $tema['t8']; ?> !important; }
      .extra-layout24 .so-extraslider .owl2-controls .owl2-nav .owl2-next, .extra-layout24 .so-extraslider .owl2-controls .owl2-nav .owl2-prev {
        background-color: transparent;
        float: none;
        height: auto;
        line-height: unset;
        margin: 0;
        opacity: 1; }
        .extra-layout24 .so-extraslider .owl2-controls .owl2-nav .owl2-next:hover, .extra-layout24 .so-extraslider .owl2-controls .owl2-nav .owl2-prev:hover {
          background-color: transparent; }

/*== Block policy ==*/
.block-policy24 {
  display: inline-block;
  margin-top: 40px;
  padding: 37px 20px !important; }
  .block-policy24 ul li:before {
    position: absolute;
    content: "";
    width: 2px;
    height: 60px;
    background-color: #ddd; }
    .block-policy24 ul li:first-child:before {
      display: none; }
  .block-policy24 ul li .item-inner {
    display: inline-block; }
    .block-policy24 ul li .item-inner:hover .content {
      cursor: pointer; }
      .block-policy24 ul li .item-inner:hover .content b, .block-policy24 ul li .item-inner:hover .content span {
        color: <?php echo $tema['t8']; ?> !important; }
    .block-policy24 ul li .item-inner .content {
      position: relative;
      padding-left: 105px; }
    @media (min-width: 1365px) and (max-width: 1650px) {
      .block-policy24 ul li .item-inner .content {
        padding-left: 65px; } }
    .block-policy24 ul li .item-inner .content:before {
      background: url(<?php echo $sitetemasi;?>/images/icon/id24-promotion.png) no-repeat;
      width: 50px;
      height: 50px;
      top: 0;
      left: 30px;
      position: absolute;
      content: ""; }
    @media (min-width: 1365px) and (max-width: 1650px) {
      .block-policy24 ul li .item-inner .content:before {
        left: 10px; } }
    .block-policy24 ul li .item-inner .content b {
      color: #555555;
      text-transform: capitalize;
      font-size: 17px; }
    .block-policy24 ul li .item-inner .content span {
      line-height: 100%;
      margin: 0;
      font-size: 13px;
      text-transform: capitalize;
      font-weight: 300;
      display: inline-block;
      width: 100%;
      color: #999999; }
  .block-policy24 ul li.item-1 .item-inner .content:before {
    background-position: 0 3px; }
.block-policy24 ul li.item-2 .item-inner .content:before {
  background-position: 0 -107px; }
.block-policy24 ul li.item-3 .item-inner .content:before {
  background-position: 0 -219px; }
.block-policy24 ul li.item-4 .item-inner .content:before {
  background-position: 0 -328px; }

.testimonials {
  background: url(<?php echo $sitetemasi;?>/images/id24-bg-testimonial.jpg) no-repeat;
  border-radius: 5px;
  background-size: 100%;
  margin-top: 30px; }
  .testimonials .contentslider {
    position: static;
    direction: ltr;
    padding: 54px 35px; }
    .testimonials .contentslider .item {
      text-align: center;
      color: #fff; }
      .testimonials .contentslider .item .cont {
        font-size: 14px;
        color: #fff;
        line-height: 22px;
        padding-bottom: 20px; }
        .testimonials .contentslider .item .cont span {
          font-size: 18px;
          font-weight: 500;
          display: inline-block;
          width: 100%;
          text-transform: capitalize;
          margin-bottom: 5px; }
      .testimonials .contentslider .item img {
        border-radius: 100%;
        border: 2px solid transparent;
        width: 60px; }
      .testimonials .contentslider .item:hover img {
        border-color: <?php echo $tema['t8']; ?> !important; }
    .testimonials .contentslider h4 {
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
      margin: 32px 0 5px 0; }
    .testimonials .contentslider span {
      font-size: 13px;
      font-weight: 600; }
    .testimonials .contentslider .owl2-dots {
      text-align: center;
      position: static;
      margin-top: 28px; }
      .testimonials .contentslider .owl2-dots .owl2-dot {
        float: none;
        display: inline-block; }
        .testimonials .contentslider .owl2-dots .owl2-dot span {
          width: 10px;
          height: 10px;
          border: 2px solid transparent;
          background-color: #fff;
          margin: 2px; }
          .testimonials .contentslider .owl2-dots .owl2-dot:hover span, .testimonials .contentslider .owl2-dots .owl2-dot.active span {
            border: 2px solid #fff;
            background-color: transparent; }

/************************************************************************************************
 SO DEALS
 *************************************************************************************************/
/************************************************************************************************
 MODULE LATEST BLOG
 *************************************************************************************************/
.blog-home {
  margin-top: 30px;
  position: relative;
  padding-top: 30px !important; }
  .blog-home .owl2-controls .owl2-nav {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 99;
    top: 27px;
    right: 5px; }
    .blog-home .owl2-controls .owl2-nav > div {
      width: 24px;
      height: 24px;
      line-height: 24px;
      text-align: center;
      border-radius: 0;
      text-indent: -9999px;
      overflow: hidden;
      cursor: pointer;
      background-color: transparent;
      position: relative;
      display: inline-block;
      border: none;
      right: auto;
      right: auto;
      float: none; }
      .blog-home .owl2-controls .owl2-nav > div:before {
        color: #888888;
        font-weight: 400;
        font-family: 'FontAwesome';
        position: absolute;
        top: -2px;
        left: 0;
        display: inline-block;
        text-indent: 0;
        width: 100%;
        height: 100%;
        font-size: 22px;
        transition: all 0.2s ease-in-out 0s; }
        .blog-home .owl2-controls .owl2-nav > div.owl2-next:before {
          content: "\f105"; }
      .blog-home .owl2-controls .owl2-nav > div.owl2-prev:before {
        content: "\f104"; }
      .blog-home .owl2-controls .owl2-nav > div:hover {
        background-color: transparent; }
        .blog-home .owl2-controls .owl2-nav > div:hover:before {
          color: <?php echo $tema['t8']; ?> !important; }
    .blog-home .owl2-controls .owl2-nav .owl2-next, .blog-home .owl2-controls .owl2-nav .owl2-prev {
      background-color: transparent;
      float: none;
      height: auto;
      line-height: unset;
      margin: 0;
      opacity: 1; }
      .blog-home .owl2-controls .owl2-nav .owl2-next:hover, .blog-home .owl2-controls .owl2-nav .owl2-prev:hover {
        background-color: transparent; }
  .blog-home .owl2-controls .owl2-dots {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 80px;
    right: 10px;
    left: auto;
    top: 5px;
    float: left;
    min-width: 64px; }
    .blog-home .owl2-controls .owl2-dots .owl2-dot {
      width: 8px;
      height: 8px;
      border-radius: 8px;
      background: #222;
      margin: 0 2px;
      display: inline-block;
      float: left;
      opacity: 1;
      transition: all 0.2s ease-in-out 0s; }
      .blog-home .owl2-controls .owl2-dots .owl2-dot span {
        display: none; }
      .blog-home .owl2-controls .owl2-dots .owl2-dot:hover {
        background-color: <?php echo $tema['t8']; ?> !important; }
      .blog-home .owl2-controls .owl2-dots .owl2-dot.active {
        width: 25px;
        background-color: <?php echo $tema['t8']; ?> !important; }
  .blog-home .so-blog-external .blog-external {
    border: none;
    margin-bottom: 0px;
    margin-top: 10px; }
    .blog-home .so-blog-external .blog-external .media {
      margin: 0; }
      .blog-home .so-blog-external .blog-external .media .item {
        margin: 0; }
        .blog-home .so-blog-external .blog-external .media .item .media-left {
          padding: 0;
          border-radius: 3px;
          overflow: hidden;
          margin-top: 5px;
          margin-bottom: 15px;
          float: left; }
          .blog-home .so-blog-external .blog-external .media .item .media-left a img {
            width: 100%; }
          .blog-home .so-blog-external .blog-external .media .item .media-left a:hover img {
            opacity: 0.8; }
        .blog-home .so-blog-external .blog-external .media .item .media-body .description {
          font-size: 14px;
          color: #717171;
          margin-top: 5px;
          line-height: 22px;
          margin-bottom: 10px; }
        .blog-home .so-blog-external .blog-external .media .item .media-content {
          font-size: 13px;
          color: #999999;
          float: left;
          text-align: left; }
          .blog-home .so-blog-external .blog-external .media .item .media-content h4 {
            margin-bottom: 10px; }
            .blog-home .so-blog-external .blog-external .media .item .media-content h4 a {
              padding: 0;
              font-weight: 600;
              font-size: 17px;
              color: #222;
              text-transform: capitalize; }
              .blog-home .so-blog-external .blog-external .media .item .media-content h4 a:hover {
                color: <?php echo $tema['t8']; ?> !important; }
          .blog-home .so-blog-external .blog-external .media .item .media-content .media-date-added {
            float: left;
            margin: 0px 20px 0px 0px; }
            .blog-home .so-blog-external .blog-external .media .item .media-content .media-date-added i {
              float: left;
              margin-top: 6px;
              margin-right: 5px; }
          .blog-home .so-blog-external .blog-external .media .item .media-content .media-subcontent {
            float: left;
            clear: none;
            margin-left: 20px; }

</style>