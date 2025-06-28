<style>
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
        background: #fa255e; }
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
.lib-two-img {
  position: relative;
  display: block; }
  .lib-two-img .img-1 {
    opacity: 1;
    position: relative;
    transition: all 0.5s ease-in-out; }
  .lib-two-img .img-2 {
    position: absolute;
    z-index: 0;
    top: 0;
    opacity: 0;
    display: block;
    transition: all 0.5s ease-in-out;
    left: 50%;
    transform: translateX(-50%); }

.lib-two-img-over .img-1 {
  opacity: 0;
  transform-style: inherit;
  transition: all 0.5s ease-in-out; }
.lib-two-img-over .img-2 {
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
 [1] BLOCK HEADER
 ==============================================*/
/*====================*/
/* BUZZ OUT
 /*====================*/
@-webkit-keyframes buzz-out-on-hover {
  10% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg); }
  20% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg); }
  30% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg); }
  40% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg); }
  50% {
    -webkit-transform: translateX(2px) rotate(1deg);
    transform: translateX(2px) rotate(1deg); }
  60% {
    -webkit-transform: translateX(-2px) rotate(-1deg);
    transform: translateX(-2px) rotate(-1deg); }
  70% {
    -webkit-transform: translateX(2px) rotate(1deg);
    transform: translateX(2px) rotate(1deg); }
  80% {
    -webkit-transform: translateX(-2px) rotate(-1deg);
    transform: translateX(-2px) rotate(-1deg); }
  90% {
    -webkit-transform: translateX(1px) rotate(0);
    transform: translateX(1px) rotate(0); }
  100% {
    -webkit-transform: translateX(-1px) rotate(0);
    transform: translateX(-1px) rotate(0); } }
@keyframes buzz-out-on-hover {
  10% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg); }
  20% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg); }
  30% {
    -webkit-transform: translateX(3px) rotate(2deg);
    transform: translateX(3px) rotate(2deg); }
  40% {
    -webkit-transform: translateX(-3px) rotate(-2deg);
    transform: translateX(-3px) rotate(-2deg); }
  50% {
    -webkit-transform: translateX(2px) rotate(1deg);
    transform: translateX(2px) rotate(1deg); }
  60% {
    -webkit-transform: translateX(-2px) rotate(-1deg);
    transform: translateX(-2px) rotate(-1deg); }
  70% {
    -webkit-transform: translateX(2px) rotate(1deg);
    transform: translateX(2px) rotate(1deg); }
  80% {
    -webkit-transform: translateX(-2px) rotate(-1deg);
    transform: translateX(-2px) rotate(-1deg); }
  90% {
    -webkit-transform: translateX(1px) rotate(0);
    transform: translateX(1px) rotate(0); }
  100% {
    -webkit-transform: translateX(-1px) rotate(0);
    transform: translateX(-1px) rotate(0); } }

.buzz-out-on-hover {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0); }

.buzz-out-on-hover:hover, .buzz-out-on-hover:focus, .buzz-out-on-hover:active {
  -webkit-animation-name: buzz-out-on-hover;
  animation-name: buzz-out-on-hover;
  -webkit-animation-duration: 0.75s;
  animation-duration: 0.75s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: 1;
  animation-iteration-count: 1; }

.typeheader-1 .container-megamenu.horizontal ul.megamenu > li > a strong img {
  top: -2px; }
  .typeheader-1.navbar-compact .header-middle {
    padding: 10px 0; }
  .typeheader-1.navbar-compact .header-bottom {
    margin-top: 10px; }
.typeheader-1 .header-top {
  position: relative;
  min-height: 40px;
  line-height: 40px;
  color: #000; 
  background: #eaedf1;
}
  .typeheader-1 .header-top:before {
    content: "";
    background: #eaedf1;
    border-radius: 0 0 6px 0;
    width: 77%;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0; }
  .typeheader-1 .header-top .module {
    display: table-cell;
    margin-bottom: 0; }
    .typeheader-1 .header-top .dropdown-menu li {
      line-height: 22px; }
  .typeheader-1 .header-top .contact_number li {
    float: left;
    margin-right: 30px; }
    .typeheader-1 .header-top .contact_number li a {
      position: relative;
      padding-left: 20px;
      color: #000; 
      font-weight: 500;
}
      .typeheader-1 .header-top .contact_number li a:before {
        position: absolute;
        content: "";
        width: 15px;
        height: 20px;
        background: url(<?php echo $sitetemasi;?>/images/icon/home1.png) no-repeat;
        background-position: 0 0;
        top: 0;
        left: 0; }
    .typeheader-1 .header-top .contact_number li.telephone a:before {
      background-position: 0 0; }
  .typeheader-1 .header-top .contact_number li.item-faq a:before {
    background-position: 0 -47px; }
  .typeheader-1 .header-top .header-links {
    float: left; }
    .typeheader-1 .header-top .header-links h2 {
      margin: 0; }
      .typeheader-1 .header-top .header-links ul li {
        float: left;
        margin-right: 30px; }
        .typeheader-1 .header-top .header-links ul li a {
          color: #000;
          font-size: 14px; }
  .typeheader-1 .header-top .welcome-msg {
    float: right; }
    .typeheader-1 .header-top .welcome-msg a {
      color: #000;
      text-decoration: underline; }
  .typeheader-1 .header-top .lang-curr {
    float: left;
    height: 40px;
    line-height: 40px; }
    .typeheader-1 .header-top .lang-curr > li {
      position: relative;
      line-height: 40px; }
      .typeheader-1 .header-top .lang-curr > li .btn-group {
        display: block;
        padding: 0;
        margin-right: 30px; }
        .typeheader-1 .header-top .lang-curr > li .btn-group .btn-link {
          padding: 0;
          border: none;
          color: #000; }
    .typeheader-1 .header-top .lang-curr .dropdown-menu {
      left: 0;
      right: auto; }
.typeheader-1 .logo {
  margin-top: -12px; }
.typeheader-1 .header-middle {
  padding: 20px 0 20px 0; }
.typeheader-1 .top-login {
  float: right;
  padding-left: 20px;
  margin-right: 30px; }
  .typeheader-1 .top-login ul {
    position: relative;
    color: #121212;
    padding: 5px 20px 10px 30px;
    border: 1px solid #ddd;
    border-radius: 5px; }
    .typeheader-1 .top-login ul:before {
      position: absolute;
      content: "";
      width: 40px;
      height: 40px;
      background: url(<?php echo $sitetemasi;?>/images/icon/home1.png) no-repeat;
      background-position: 9px -138px;
      background-color: #fff;
      border-radius: 50%;
      border: 1px solid #dddddd;
      top: 9px;
      left: -20px; }
    .typeheader-1 .top-login ul li:first-child {
      font-size: 12px; }
    .typeheader-1 .top-login ul li {
      line-height: 20px; }
      .typeheader-1 .top-login ul li a {
        font-size: 14px;
        color: #121212;
        font-weight: 500; }
        .typeheader-1 .top-login ul li a:hover {
          color: #fa255e;
 }
 
 .typeheader-1 .top-loginx {
  float: right;
  padding-left: 20px;
  margin-right: 14px; }
  .typeheader-1 .top-loginx ul {
    position: relative;
    color: #121212;
    padding: 5px 20px 10px 30px;
    border: 1px solid #ddd;
    border-radius: 5px; }
    .typeheader-1 .top-loginx ul:before {
      position: absolute;
      content: "";
      width: 40px;
      height: 40px;
      background: url(<?php echo $sitetemasi;?>/images/icon/home1.png) no-repeat;
      background-position: 8px -251px;
      background-color: #fff;
      border-radius: 50%;
      border: 1px solid #dddddd;
      top: 9px;
      left: -20px; }
    .typeheader-1 .top-loginx ul li:first-child {
      font-size: 12px; }
    .typeheader-1 .top-loginx ul li {
      line-height: 20px; }
      .typeheader-1 .top-loginx ul li a {
        font-size: 14px;
        color: #121212;
        font-weight: 500; }
        .typeheader-1 .top-loginx ul li a:hover {
          color: #fa255e;		  
		  }
 
 
.typeheader-1 .search-header-w {
  float: left;
  margin-top: 5px; }
@media (min-width: 1200px) and (max-width: 1650px) {
  .typeheader-1 .search-header-w {
    width: 46%; } }
.typeheader-1 #sosearchpro .search {
  position: relative;
  margin: 0;
  width: 100%;
  border-radius: 8px;
  border: 1px solid #e6e6e6; }
  .typeheader-1 #sosearchpro .search:hover .select_category .chosen-container-single .chosen-single {
    min-width: 160px;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s;
    padding-left: 15px; }
    .typeheader-1 #sosearchpro .search:hover .select_category .chosen-container-single .chosen-single span {
      display: block;
      font-size: 14px; }
  .typeheader-1 #sosearchpro .search .select_category {
    border: none;
    background-color: #fff;
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px;
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    color: #222; }
  .typeheader-1 #sosearchpro .search .chosen-container .chosen-drop {
    width: 180px; }
  .typeheader-1 #sosearchpro .search .chosen-container-single .chosen-single {
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s;
    height: 44px;
    line-height: 44px;
    padding-left: 0;
    position: relative;
    min-width: auto;
    width: 38px; }
    .typeheader-1 #sosearchpro .search .chosen-container-single .chosen-single:after {
      position: absolute;
      content: "";
      width: 1px;
      height: 16px;
      background-color: #9d9a9f;
      top: 15px;
      right: 0; }
    .typeheader-1 #sosearchpro .search .chosen-container-single .chosen-single span {
      font-size: 0;
      color: #222; }
    .typeheader-1 #sosearchpro .search .chosen-container-single .chosen-single div {
      width: 35px;
      height: 35px;
      background-color: #fff;
      line-height: 35px;
      text-align: center;
      top: 3px; }
      .typeheader-1 #sosearchpro .search .chosen-container-single .chosen-single div b {
        width: 15px;
        margin: 0 auto;
        background: url(<?php echo $sitetemasi;?>/images/icon/icon-catesearch.png) no-repeat;
        background-position: 2px 16px; }
  .typeheader-1 #sosearchpro .search .chosen-container-single.chosen-with-drop .chosen-single div b {
    background-position: 2px -8px; }
  .typeheader-1 #sosearchpro .search .input-group-btn {
    width: 0; }
  .typeheader-1 #sosearchpro .search .pre-icon {
    font-size: 18px;
    color: #000;
    float: left;
    padding: 18px 10px 10px 10px;
    font-weight: 700; }
  .typeheader-1 #sosearchpro .search button {
    position: absolute;
    top: 4px;
    right: 4px;
    height: 38px;
    text-align: center;
    line-height: 38px;
    padding: 0 25px;
    border: none;
    border-bottom-right-radius: 8px;
    border-top-right-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    color: #fff;
    text-transform: uppercase; }
    .typeheader-1 #sosearchpro .search button i {
      display: none; }
  .typeheader-1 #sosearchpro .search input.form-control {
    background-color: #fff;
    z-index: 0;
    border-bottom-right-radius: 8px;
    border-top-right-radius: 8px;
    height: 44px;
    padding-left: 10px;
    padding-right: 40px;
    font-size: 14px;
    width: 85%;
    color: #999;
    border: none; 
    background: white !important;
}
    .typeheader-1 #sosearchpro .search input.form-control::-moz-placeholder {
      color: #999;
      opacity: 1; }
    .typeheader-1 #sosearchpro .search input.form-control:-ms-input-placeholder {
      color: #999; }
    .typeheader-1 #sosearchpro .search input.form-control::-webkit-input-placeholder {
      color: #999; }
    .typeheader-1 #sosearchpro .search input.form-control:focus {
      z-index: 0;
      /*BLOCK CART*/ }
.typeheader-1 .shopping_cart {
  float: right;
  position: relative; }
  .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart {
    position: relative;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 5px 20px 10px 0; }
    .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .icon-c {
      float: left;
      margin: 0;
      position: absolute;
      content: "";
      width: 40px;
      height: 40px;
      background: url(<?php echo $sitetemasi;?>/images/icon/home1.png) no-repeat;
      background-position: 10px -195px;
      background-color: #fff;
      border-radius: 50%;
      border: 1px solid #dddddd;
      top: 9px;
      left: -20px; }
      .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .icon-c svg {
        display: none !important; }
    .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner {
      float: left;
      position: relative;
      padding-left: 30px;
      color: #121212;
      line-height: 20px; }
      .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .text-shopping-cart {
        margin-top: 0px;
        margin-bottom: 0;
        font-size: 12px;
        font-weight: 400; }
      .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart {
        float: left; }
        .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_carts {
          color: #121212;
          font-size: 14px;
          font-weight: 500;
          line-height: 20px; }
        .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_cart2 {
          display: none; }
        .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_cart {
          height: 18px;
          line-height: 16px;
          border-radius: 100%;
          font-size: 12px;
          color: #fff;
          width: 18px;
          position: absolute;
          top: 1px;
          left: 8px;
          text-align: center; }
  .typeheader-1 .shopping_cart .dropdown-menu {
    top: 100%;
    right: -15px;
    left: auto;
    color: #666; }
  .typeheader-1 .shopping_cart .shoppingcart-box:before {
    right: 50px; }
.typeheader-1 .header-bottom {
  border-bottom: 1px solid #fff;
  /*MENU MEGA*/   padding: 10px;
}
  .typeheader-1 .megamenu-style-dev .navbar-default {
    background: transparent; }
.typeheader-1 .container-megamenu.horizontal ul.megamenu > li {
  margin: 0 15px;
  position: relative; 
  font-size: 15px !important;
}
  .typeheader-1 .container-megamenu.horizontal ul.megamenu > li:after {
    position: absolute;
    content: "";
    width: 0;
    height: 2px;
    bottom: 0;
    left: 50%;
    background-color: #fff;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s; }
  .typeheader-1 .container-megamenu.horizontal ul.megamenu > li > a {
    line-height: 100%;
    padding: 0;
    line-height: 42px;
    position: relative;
    color: #fff; }
    .typeheader-1 .container-megamenu.horizontal ul.megamenu > li > a strong {
      font-weight: 500;
      text-transform: capitalize; 
      /*! font-size: 15px; */
}
  .typeheader-1 .container-megamenu.horizontal ul.megamenu > li.special {
  
    height: 42px;
	position: relative;
z-index: 999;
    margin: 0; }
    .typeheader-1 .container-megamenu.horizontal ul.megamenu > li.special > a {
      height: 42px; }
    .typeheader-1 .container-megamenu.horizontal ul.megamenu > li.special:after {
      display: none; }
    .typeheader-1 .container-megamenu.horizontal ul.megamenu > li.special img {
      position: relative;
      top: -26px;
      right: -10px; }
  .typeheader-1 .container-megamenu.horizontal ul.megamenu > li:hover:after, .typeheader-1 .container-megamenu.horizontal ul.megamenu > li.active:after, .typeheader-1 .container-megamenu.horizontal ul.megamenu > li.menu_active:after {
    width: 100%;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s;
    left: 0; }
  .typeheader-1 .container-megamenu.horizontal ul.megamenu > li:hover > a, .typeheader-1 .container-megamenu.horizontal ul.megamenu > li.active > a, .typeheader-1 .container-megamenu.horizontal ul.megamenu > li.menu_active > a {
    columns: #fff; }
@media (min-width: 1200px) {
  .typeheader-1 .header-bottom .menu-left {
    width: 260px; }
  .typeheader-1 .header-bottom .main-menu-w {
    width: calc(100% - 260px); } }
.typeheader-1 .container-megamenu.vertical .vertical-wrapper ul.megamenu > li > a {
  padding: 6px 10px 6px 15px;
  /*-- MEGA MENU VERTICAL --*/   text-decoration-line: none;
}
.typeheader-1 .container-megamenu.vertical {
  z-index: 99;
  position: relative; }
@media (min-width: 992px) {
  .typeheader-1 .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container {
    background-color: transparent;
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    text-transform: capitalize;
    height: 42px;
    line-height: 42px;
    position: relative;
    padding: 0 !important; }
    .typeheader-1 .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container:after {
      position: absolute;
      content: "";
      width: 1px;
      height: 20px;
      background-color: #fff;
      top: 10px;
      right: 0; }
    .typeheader-1 .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container b {
      font-weight: 500; 
      font-size: 15px;
}
    .typeheader-1 .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container > div {
      padding-top: 7px; }
    .typeheader-1 .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container > div span {
      background-color: #fff;
      width: 14px;
      margin: 5px 0; }
      .typeheader-1 .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container > div span:nth-child(2) {
        display: block; }
      .typeheader-1 .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container > div span:nth-child(3) {
        width: 14px; }
  .typeheader-1 .container-megamenu.vertical .vertical-wrapper {
    visibility: hidden;
    -webkit-opacity: 0;
    -moz-opacity: 0;
    -ms-opacity: 0;
    -o-opacity: 0;
    opacity: 0;
    transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
    position: absolute;
    width: 100%;
    top: 60px; }
    .typeheader-1 .container-megamenu.vertical:hover .vertical-wrapper {
      visibility: visible;
      -webkit-opacity: 1;
      -moz-opacity: 1;
      -ms-opacity: 1;
      -o-opacity: 1;
      opacity: 1;
      transition: all 0.3s ease-in-out 0s;
      -moz-transition: all 0.3s ease-in-out 0s;
      -webkit-transition: all 0.3s ease-in-out 0s;
      top: 43px; } }

.common-home .typeheader-1 .container-megamenu.horizontal ul.megamenu > li.home a {
  color: #fff; 
  font-size: 15px;
}

.common-home .typeheader-1 .container-megamenu.horizontal ul.megamenu > li.home:after {
  width: 100%;
  left: 0; }

.new-price {
 color:#ef837b;
 margin-right:.8rem
}

div.price {
  font-size: 16px; 
  /*! margin-right: 13% !important; */
  color: <?php echo $tema['t8']; ?>;
  font-weight: 500;
  justify-content: center;
}

span.price {
  font-size: 18px; }

.product-grid .product-item-container .price-old {
  float: left; }

.price {
  margin: 0;
  line-height: 16px;
  color: #222222;
  font-size: 16px;
  font-weight: 600; }
  .price .price-tax {
    color: #989898;
    font-weight: 400;
    font-size: 14px; }
  .price .old-price {
    padding-right: 38px;
    text-decoration: line-through;
    color: #989898;
    font-weight: 400;
    font-size: 14px; }
  .price span.price {
    color: #1b1b1b; }
  .price .new-price {
    color: <?php echo $tema['t8']; ?>;
    font-size: 18px;
    font-weight: 600; }
  .price .callforprice {
    font-size: 12px;
    line-height: 100%; }

.layout-1.common-home #content .text_off {
    font-size: 12px;
    color: <?php echo $tema['t8']; ?>;
 
    font-weight: 500 !important;
}
.common-home .categories-layout1.so-categories .cat-wrap .content-box .image-cat img {
    border-radius: 100%;
    max-width: 110px;
    margin: 0 auto;
    position: relative;
    display: block;
    border-radius: 100%;
    border: none;
    min-height: 110px !important;
    border: 1px solid #e5e3e3;
}
.layout-1.common-home #content .module h3.modtitle {
    margin: 0;
    font-size: 20px;
    color: #000;
    font-weight: 600;
    text-transform: capitalize;
    border-bottom: 1px solid #f3f3f3;
    padding-bottom: 10px;
}
span.fa-stack .fa-star-o {
    color: #ffd700 !important;
}
.common-home .categories-layout1.so-categories {
    margin: 18px 0 5px 0;
    position: relative;
}
.common-home .categories-layout1.so-categories .modcontent {
    margin-top: 5px;
}

.stories.snapgram .story.seen > a {
    color: #060505 !important;
}
.stories.snapgram .story > .item-link > .item-preview {
    border-radius: 50%;
    padding: 2px;
    background: <?php echo $tema['t8']; ?> !important;
}
.stories.carousel .story > .item-link > .info .name {
    font-weight: 500;
    color: black;
}

.stories.carousel .story {
    display: inline-block;
    width: 18vw;
    max-width: 90px;
    margin: 0 6px;
        margin-right: 6px;
        margin-left: 6px;
    vertical-align: top;
    margin-right: 22px !important;
}

h2 {
    /*! font-size: 20px !important; */
	/*! margin-top: 10px !important; */
}

ul.breadcrumb {
    background-color: #fff !important;
    padding: 10px;
    margin: 10px 0;
    display: inline-block;
    width: 100%;
    line-height: 100%;
    text-align: left;
    border: 1px solid #eee !important;
}
.breadcrumb {
    padding: 8px 15px;
    margin-bottom: 20px;
    list-style: none;
    background-color: #fffefe;
    border-radius: 4px;
    border: 1px solid #eee !important;
    margin-top: 10px;
}

.about-text, .introduce  {
    background-color: #fff;
    /*! padding: 10px; */

    /*! border: 1px solid #eee !important; */
}
.butonok {
}

.md-form {
 position:relative;
 margin-top:1.5rem;
 margin-bottom:1.5rem
}


.btn {
}

.md-form {
 position:relative;
 margin-top:1.5rem;
 margin-bottom:1.5rem
}


.md-form input:not([type]),
.md-form input[type=date]:not(.browser-default),
.md-form input[type=datetime]:not(.browser-default),
.md-form input[type=datetime-local]:not(.browser-default),
.md-form input[type=tel]:not(.browser-default),
.md-form input[type=number]:not(.browser-default),
.md-form input[type=search]:not(.browser-default),
.md-form input[type=phone]:not(.browser-default),
.md-form input[type=search-md],
.md-form input[type=text]:not(.browser-default),
.md-form input[type=password]:not(.browser-default),
.md-form input[type=email]:not(.browser-default),
.md-form input[type=url]:not(.browser-default),
.md-form input[type=time]:not(.browser-default),
.md-form textarea.md-textarea {
 -webkit-box-sizing:content-box;
 box-sizing:content-box;
 background-color:transparent;
 border:none;
 border-bottom:1px solid #ced4da;
 border-radius:0;
 outline:0;
 -webkit-box-shadow:none;
 box-shadow:none;
 -webkit-transition:border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
 transition:border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
 transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;
 transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out
}
.md-form input:not([type]):focus:not([readonly]),
.md-form input[type=date]:not(.browser-default):focus:not([readonly]),
.md-form input[type=datetime]:not(.browser-default):focus:not([readonly]),
.md-form input[type=datetime-local]:not(.browser-default):focus:not([readonly]),
.md-form input[type=tel]:not(.browser-default):focus:not([readonly]),
.md-form input[type=number]:not(.browser-default):focus:not([readonly]),
.md-form input[type=search]:not(.browser-default):focus:not([readonly]),
.md-form input[type=phone]:not(.browser-default):focus:not([readonly]),
.md-form input[type=search-md]:focus:not([readonly]),
.md-form input[type=text]:not(.browser-default):focus:not([readonly]),
.md-form input[type=password]:not(.browser-default):focus:not([readonly]),
.md-form input[type=email]:not(.browser-default):focus:not([readonly]),
.md-form input[type=url]:not(.browser-default):focus:not([readonly]),
.md-form input[type=time]:not(.browser-default):focus:not([readonly]),
.md-form textarea.md-textarea:focus:not([readonly]) {
 border-bottom:1px solid #4285f4;
 -webkit-box-shadow:0 1px 0 0 #4285f4;
 box-shadow:0 1px 0 0 #4285f4
}
.md-form input:not([type]):focus:not([readonly])+label,
.md-form input[type=date]:not(.browser-default):focus:not([readonly])+label,
.md-form input[type=datetime]:not(.browser-default):focus:not([readonly])+label,
.md-form input[type=datetime-local]:not(.browser-default):focus:not([readonly])+label,
.md-form input[type=tel]:not(.browser-default):focus:not([readonly])+label,
.md-form input[type=number]:not(.browser-default):focus:not([readonly])+label,
.md-form input[type=search]:not(.browser-default):focus:not([readonly])+label,
.md-form input[type=phone]:not(.browser-default):focus:not([readonly])+label,
.md-form input[type=search-md]:focus:not([readonly])+label,
.md-form input[type=text]:not(.browser-default):focus:not([readonly])+label,
.md-form input[type=password]:not(.browser-default):focus:not([readonly])+label,
.md-form input[type=email]:not(.browser-default):focus:not([readonly])+label,
.md-form input[type=url]:not(.browser-default):focus:not([readonly])+label,
.md-form input[type=time]:not(.browser-default):focus:not([readonly])+label,
.md-form textarea.md-textarea:focus:not([readonly])+label {
 color:#4285f4
}
.md-form input:not([type])+label::after,
.md-form input[type=date]:not(.browser-default)+label::after,
.md-form input[type=datetime]:not(.browser-default)+label::after,
.md-form input[type=datetime-local]:not(.browser-default)+label::after,
.md-form input[type=tel]:not(.browser-default)+label::after,
.md-form input[type=number]:not(.browser-default)+label::after,
.md-form input[type=search]:not(.browser-default)+label::after,
.md-form input[type=phone]:not(.browser-default)+label::after,
.md-form input[type=search-md]+label::after,
.md-form input[type=text]:not(.browser-default)+label::after,
.md-form input[type=password]:not(.browser-default)+label::after,
.md-form input[type=email]:not(.browser-default)+label::after,
.md-form input[type=url]:not(.browser-default)+label::after,
.md-form input[type=time]:not(.browser-default)+label::after,
.md-form textarea.md-textarea+label::after {
 position:absolute;
 top:65px;
 display:block;
 content:"";
 opacity:0;
 -webkit-transition:.2s opacity ease-out,.2s color ease-out;
 transition:.2s opacity ease-out,.2s color ease-out
}
.md-form input:not([type]).valid,
.md-form input:not([type]):focus.valid,
.md-form input[type=date]:not(.browser-default).valid,
.md-form input[type=date]:not(.browser-default):focus.valid,
.md-form input[type=datetime]:not(.browser-default).valid,
.md-form input[type=datetime]:not(.browser-default):focus.valid,
.md-form input[type=datetime-local]:not(.browser-default).valid,
.md-form input[type=datetime-local]:not(.browser-default):focus.valid,
.md-form input[type=tel]:not(.browser-default).valid,
.md-form input[type=tel]:not(.browser-default):focus.valid,
.md-form input[type=number]:not(.browser-default).valid,
.md-form input[type=number]:not(.browser-default):focus.valid,
.md-form input[type=search]:not(.browser-default).valid,
.md-form input[type=search]:not(.browser-default):focus.valid,
.md-form input[type=phone]:not(.browser-default).valid,
.md-form input[type=phone]:not(.browser-default):focus.valid,
.md-form input[type=search-md].valid,
.md-form input[type=search-md]:focus.valid,
.md-form input[type=text]:not(.browser-default).valid,
.md-form input[type=text]:not(.browser-default):focus.valid,
.md-form input[type=password]:not(.browser-default).valid,
.md-form input[type=password]:not(.browser-default):focus.valid,
.md-form input[type=email]:not(.browser-default).valid,
.md-form input[type=email]:not(.browser-default):focus.valid,
.md-form input[type=url]:not(.browser-default).valid,
.md-form input[type=url]:not(.browser-default):focus.valid,
.md-form input[type=time]:not(.browser-default).valid,
.md-form input[type=time]:not(.browser-default):focus.valid,
.md-form textarea.md-textarea.valid,
.md-form textarea.md-textarea:focus.valid {
 border-bottom:1px solid #00c851;
 -webkit-box-shadow:0 1px 0 0 #00c851;
 box-shadow:0 1px 0 0 #00c851
}
.md-form input:not([type]).valid+label:after,
.md-form input:not([type]):focus.valid+label:after,
.md-form input[type=date]:not(.browser-default).valid+label:after,
.md-form input[type=date]:not(.browser-default):focus.valid+label:after,
.md-form input[type=datetime]:not(.browser-default).valid+label:after,
.md-form input[type=datetime]:not(.browser-default):focus.valid+label:after,
.md-form input[type=datetime-local]:not(.browser-default).valid+label:after,
.md-form input[type=datetime-local]:not(.browser-default):focus.valid+label:after,
.md-form input[type=tel]:not(.browser-default).valid+label:after,
.md-form input[type=tel]:not(.browser-default):focus.valid+label:after,
.md-form input[type=number]:not(.browser-default).valid+label:after,
.md-form input[type=number]:not(.browser-default):focus.valid+label:after,
.md-form input[type=search]:not(.browser-default).valid+label:after,
.md-form input[type=search]:not(.browser-default):focus.valid+label:after,
.md-form input[type=phone]:not(.browser-default).valid+label:after,
.md-form input[type=phone]:not(.browser-default):focus.valid+label:after,
.md-form input[type=search-md].valid+label:after,
.md-form input[type=search-md]:focus.valid+label:after,
.md-form input[type=text]:not(.browser-default).valid+label:after,
.md-form input[type=text]:not(.browser-default):focus.valid+label:after,
.md-form input[type=password]:not(.browser-default).valid+label:after,
.md-form input[type=password]:not(.browser-default):focus.valid+label:after,
.md-form input[type=email]:not(.browser-default).valid+label:after,
.md-form input[type=email]:not(.browser-default):focus.valid+label:after,
.md-form input[type=url]:not(.browser-default).valid+label:after,
.md-form input[type=url]:not(.browser-default):focus.valid+label:after,
.md-form input[type=time]:not(.browser-default).valid+label:after,
.md-form input[type=time]:not(.browser-default):focus.valid+label:after,
.md-form textarea.md-textarea.valid+label:after,
.md-form textarea.md-textarea:focus.valid+label:after {
 color:#00c851;
 content:attr(data-success);
 opacity:1
}
.md-form input:not([type]).invalid,
.md-form input:not([type]):focus.invalid,
.md-form input[type=date]:not(.browser-default).invalid,
.md-form input[type=date]:not(.browser-default):focus.invalid,
.md-form input[type=datetime]:not(.browser-default).invalid,
.md-form input[type=datetime]:not(.browser-default):focus.invalid,
.md-form input[type=datetime-local]:not(.browser-default).invalid,
.md-form input[type=datetime-local]:not(.browser-default):focus.invalid,
.md-form input[type=tel]:not(.browser-default).invalid,
.md-form input[type=tel]:not(.browser-default):focus.invalid,
.md-form input[type=number]:not(.browser-default).invalid,
.md-form input[type=number]:not(.browser-default):focus.invalid,
.md-form input[type=search]:not(.browser-default).invalid,
.md-form input[type=search]:not(.browser-default):focus.invalid,
.md-form input[type=phone]:not(.browser-default).invalid,
.md-form input[type=phone]:not(.browser-default):focus.invalid,
.md-form input[type=search-md].invalid,
.md-form input[type=search-md]:focus.invalid,
.md-form input[type=text]:not(.browser-default).invalid,
.md-form input[type=text]:not(.browser-default):focus.invalid,
.md-form input[type=password]:not(.browser-default).invalid,
.md-form input[type=password]:not(.browser-default):focus.invalid,
.md-form input[type=email]:not(.browser-default).invalid,
.md-form input[type=email]:not(.browser-default):focus.invalid,
.md-form input[type=url]:not(.browser-default).invalid,
.md-form input[type=url]:not(.browser-default):focus.invalid,
.md-form input[type=time]:not(.browser-default).invalid,
.md-form input[type=time]:not(.browser-default):focus.invalid,
.md-form textarea.md-textarea.invalid,
.md-form textarea.md-textarea:focus.invalid {
 border-bottom:1px solid #f44336;
 -webkit-box-shadow:0 1px 0 0 #f44336;
 box-shadow:0 1px 0 0 #f44336
}
.md-form input:not([type]).invalid+label:after,
.md-form input:not([type]):focus.invalid+label:after,
.md-form input[type=date]:not(.browser-default).invalid+label:after,
.md-form input[type=date]:not(.browser-default):focus.invalid+label:after,
.md-form input[type=datetime]:not(.browser-default).invalid+label:after,
.md-form input[type=datetime]:not(.browser-default):focus.invalid+label:after,
.md-form input[type=datetime-local]:not(.browser-default).invalid+label:after,
.md-form input[type=datetime-local]:not(.browser-default):focus.invalid+label:after,
.md-form input[type=tel]:not(.browser-default).invalid+label:after,
.md-form input[type=tel]:not(.browser-default):focus.invalid+label:after,
.md-form input[type=number]:not(.browser-default).invalid+label:after,
.md-form input[type=number]:not(.browser-default):focus.invalid+label:after,
.md-form input[type=search]:not(.browser-default).invalid+label:after,
.md-form input[type=search]:not(.browser-default):focus.invalid+label:after,
.md-form input[type=phone]:not(.browser-default).invalid+label:after,
.md-form input[type=phone]:not(.browser-default):focus.invalid+label:after,
.md-form input[type=search-md].invalid+label:after,
.md-form input[type=search-md]:focus.invalid+label:after,
.md-form input[type=text]:not(.browser-default).invalid+label:after,
.md-form input[type=text]:not(.browser-default):focus.invalid+label:after,
.md-form input[type=password]:not(.browser-default).invalid+label:after,
.md-form input[type=password]:not(.browser-default):focus.invalid+label:after,
.md-form input[type=email]:not(.browser-default).invalid+label:after,
.md-form input[type=email]:not(.browser-default):focus.invalid+label:after,
.md-form input[type=url]:not(.browser-default).invalid+label:after,
.md-form input[type=url]:not(.browser-default):focus.invalid+label:after,
.md-form input[type=time]:not(.browser-default).invalid+label:after,
.md-form input[type=time]:not(.browser-default):focus.invalid+label:after,
.md-form textarea.md-textarea.invalid+label:after,
.md-form textarea.md-textarea:focus.invalid+label:after {
 color:#f44336;
 content:attr(data-error);
 opacity:1
}
.md-form input:not([type]).form-control.valid+label:after,
.md-form input:not([type]).form-control:focus.valid+label:after,
.md-form input[type=date]:not(.browser-default).form-control.valid+label:after,
.md-form input[type=date]:not(.browser-default).form-control:focus.valid+label:after,
.md-form input[type=datetime]:not(.browser-default).form-control.valid+label:after,
.md-form input[type=datetime]:not(.browser-default).form-control:focus.valid+label:after,
.md-form input[type=datetime-local]:not(.browser-default).form-control.valid+label:after,
.md-form input[type=datetime-local]:not(.browser-default).form-control:focus.valid+label:after,
.md-form input[type=tel]:not(.browser-default).form-control.valid+label:after,
.md-form input[type=tel]:not(.browser-default).form-control:focus.valid+label:after,
.md-form input[type=number]:not(.browser-default).form-control.valid+label:after,
.md-form input[type=number]:not(.browser-default).form-control:focus.valid+label:after,
.md-form input[type=search]:not(.browser-default).form-control.valid+label:after,
.md-form input[type=search]:not(.browser-default).form-control:focus.valid+label:after,
.md-form input[type=phone]:not(.browser-default).form-control.valid+label:after,
.md-form input[type=phone]:not(.browser-default).form-control:focus.valid+label:after,
.md-form input[type=search-md].form-control.valid+label:after,
.md-form input[type=search-md].form-control:focus.valid+label:after,
.md-form input[type=text]:not(.browser-default).form-control.valid+label:after,
.md-form input[type=text]:not(.browser-default).form-control:focus.valid+label:after,
.md-form input[type=password]:not(.browser-default).form-control.valid+label:after,
.md-form input[type=password]:not(.browser-default).form-control:focus.valid+label:after,
.md-form input[type=email]:not(.browser-default).form-control.valid+label:after,
.md-form input[type=email]:not(.browser-default).form-control:focus.valid+label:after,
.md-form input[type=url]:not(.browser-default).form-control.valid+label:after,
.md-form input[type=url]:not(.browser-default).form-control:focus.valid+label:after,
.md-form input[type=time]:not(.browser-default).form-control.valid+label:after,
.md-form input[type=time]:not(.browser-default).form-control:focus.valid+label:after,
.md-form textarea.md-textarea.form-control.valid+label:after,
.md-form textarea.md-textarea.form-control:focus.valid+label:after {
 top:4.1rem
}
.md-form input:not([type]).form-control.invalid+label:after,
.md-form input:not([type]).form-control:focus.invalid+label:after,
.md-form input[type=date]:not(.browser-default).form-control.invalid+label:after,
.md-form input[type=date]:not(.browser-default).form-control:focus.invalid+label:after,
.md-form input[type=datetime]:not(.browser-default).form-control.invalid+label:after,
.md-form input[type=datetime]:not(.browser-default).form-control:focus.invalid+label:after,
.md-form input[type=datetime-local]:not(.browser-default).form-control.invalid+label:after,
.md-form input[type=datetime-local]:not(.browser-default).form-control:focus.invalid+label:after,
.md-form input[type=tel]:not(.browser-default).form-control.invalid+label:after,
.md-form input[type=tel]:not(.browser-default).form-control:focus.invalid+label:after,
.md-form input[type=number]:not(.browser-default).form-control.invalid+label:after,
.md-form input[type=number]:not(.browser-default).form-control:focus.invalid+label:after,
.md-form input[type=search]:not(.browser-default).form-control.invalid+label:after,
.md-form input[type=search]:not(.browser-default).form-control:focus.invalid+label:after,
.md-form input[type=phone]:not(.browser-default).form-control.invalid+label:after,
.md-form input[type=phone]:not(.browser-default).form-control:focus.invalid+label:after,
.md-form input[type=search-md].form-control.invalid+label:after,
.md-form input[type=search-md].form-control:focus.invalid+label:after,
.md-form input[type=text]:not(.browser-default).form-control.invalid+label:after,
.md-form input[type=text]:not(.browser-default).form-control:focus.invalid+label:after,
.md-form input[type=password]:not(.browser-default).form-control.invalid+label:after,
.md-form input[type=password]:not(.browser-default).form-control:focus.invalid+label:after,
.md-form input[type=email]:not(.browser-default).form-control.invalid+label:after,
.md-form input[type=email]:not(.browser-default).form-control:focus.invalid+label:after,
.md-form input[type=url]:not(.browser-default).form-control.invalid+label:after,
.md-form input[type=url]:not(.browser-default).form-control:focus.invalid+label:after,
.md-form input[type=time]:not(.browser-default).form-control.invalid+label:after,
.md-form input[type=time]:not(.browser-default).form-control:focus.invalid+label:after,
.md-form textarea.md-textarea.form-control.invalid+label:after,
.md-form textarea.md-textarea.form-control:focus.invalid+label:after {
 top:4rem
}
.md-form input:not([type]).form-control-lg.invalid+label:after,
.md-form input:not([type]).form-control-lg.valid+label:after,
.md-form input:not([type]).form-control-lg:focus.invalid+label:after,
.md-form input:not([type]).form-control-lg:focus.valid+label:after,
.md-form input[type=date]:not(.browser-default).form-control-lg.invalid+label:after,
.md-form input[type=date]:not(.browser-default).form-control-lg.valid+label:after,
.md-form input[type=date]:not(.browser-default).form-control-lg:focus.invalid+label:after,
.md-form input[type=date]:not(.browser-default).form-control-lg:focus.valid+label:after,
.md-form input[type=datetime]:not(.browser-default).form-control-lg.invalid+label:after,
.md-form input[type=datetime]:not(.browser-default).form-control-lg.valid+label:after,
.md-form input[type=datetime]:not(.browser-default).form-control-lg:focus.invalid+label:after,
.md-form input[type=datetime]:not(.browser-default).form-control-lg:focus.valid+label:after,
.md-form input[type=datetime-local]:not(.browser-default).form-control-lg.invalid+label:after,
.md-form input[type=datetime-local]:not(.browser-default).form-control-lg.valid+label:after,
.md-form input[type=datetime-local]:not(.browser-default).form-control-lg:focus.invalid+label:after,
.md-form input[type=datetime-local]:not(.browser-default).form-control-lg:focus.valid+label:after,
.md-form input[type=tel]:not(.browser-default).form-control-lg.invalid+label:after,
.md-form input[type=tel]:not(.browser-default).form-control-lg.valid+label:after,
.md-form input[type=tel]:not(.browser-default).form-control-lg:focus.invalid+label:after,
.md-form input[type=tel]:not(.browser-default).form-control-lg:focus.valid+label:after,
.md-form input[type=number]:not(.browser-default).form-control-lg.invalid+label:after,
.md-form input[type=number]:not(.browser-default).form-control-lg.valid+label:after,
.md-form input[type=number]:not(.browser-default).form-control-lg:focus.invalid+label:after,
.md-form input[type=number]:not(.browser-default).form-control-lg:focus.valid+label:after,
.md-form input[type=search]:not(.browser-default).form-control-lg.invalid+label:after,
.md-form input[type=search]:not(.browser-default).form-control-lg.valid+label:after,
.md-form input[type=search]:not(.browser-default).form-control-lg:focus.invalid+label:after,
.md-form input[type=search]:not(.browser-default).form-control-lg:focus.valid+label:after,
.md-form input[type=phone]:not(.browser-default).form-control-lg.invalid+label:after,
.md-form input[type=phone]:not(.browser-default).form-control-lg.valid+label:after,
.md-form input[type=phone]:not(.browser-default).form-control-lg:focus.invalid+label:after,
.md-form input[type=phone]:not(.browser-default).form-control-lg:focus.valid+label:after,
.md-form input[type=search-md].form-control-lg.invalid+label:after,
.md-form input[type=search-md].form-control-lg.valid+label:after,
.md-form input[type=search-md].form-control-lg:focus.invalid+label:after,
.md-form input[type=search-md].form-control-lg:focus.valid+label:after,
.md-form input[type=text]:not(.browser-default).form-control-lg.invalid+label:after,
.md-form input[type=text]:not(.browser-default).form-control-lg.valid+label:after,
.md-form input[type=text]:not(.browser-default).form-control-lg:focus.invalid+label:after,
.md-form input[type=text]:not(.browser-default).form-control-lg:focus.valid+label:after,
.md-form input[type=password]:not(.browser-default).form-control-lg.invalid+label:after,
.md-form input[type=password]:not(.browser-default).form-control-lg.valid+label:after,
.md-form input[type=password]:not(.browser-default).form-control-lg:focus.invalid+label:after,
.md-form input[type=password]:not(.browser-default).form-control-lg:focus.valid+label:after,
.md-form input[type=email]:not(.browser-default).form-control-lg.invalid+label:after,
.md-form input[type=email]:not(.browser-default).form-control-lg.valid+label:after,
.md-form input[type=email]:not(.browser-default).form-control-lg:focus.invalid+label:after,
.md-form input[type=email]:not(.browser-default).form-control-lg:focus.valid+label:after,
.md-form input[type=url]:not(.browser-default).form-control-lg.invalid+label:after,
.md-form input[type=url]:not(.browser-default).form-control-lg.valid+label:after,
.md-form input[type=url]:not(.browser-default).form-control-lg:focus.invalid+label:after,
.md-form input[type=url]:not(.browser-default).form-control-lg:focus.valid+label:after,
.md-form input[type=time]:not(.browser-default).form-control-lg.invalid+label:after,
.md-form input[type=time]:not(.browser-default).form-control-lg.valid+label:after,
.md-form input[type=time]:not(.browser-default).form-control-lg:focus.invalid+label:after,
.md-form input[type=time]:not(.browser-default).form-control-lg:focus.valid+label:after,
.md-form textarea.md-textarea.form-control-lg.invalid+label:after,
.md-form textarea.md-textarea.form-control-lg.valid+label:after,
.md-form textarea.md-textarea.form-control-lg:focus.invalid+label:after,
.md-form textarea.md-textarea.form-control-lg:focus.valid+label:after {
 top:4.6rem
}
.md-form input:not([type]).form-control-sm.valid+label:after,
.md-form input:not([type]).form-control-sm:focus.valid+label:after,
.md-form input[type=date]:not(.browser-default).form-control-sm.valid+label:after,
.md-form input[type=date]:not(.browser-default).form-control-sm:focus.valid+label:after,
.md-form input[type=datetime]:not(.browser-default).form-control-sm.valid+label:after,
.md-form input[type=datetime]:not(.browser-default).form-control-sm:focus.valid+label:after,
.md-form input[type=datetime-local]:not(.browser-default).form-control-sm.valid+label:after,
.md-form input[type=datetime-local]:not(.browser-default).form-control-sm:focus.valid+label:after,
.md-form input[type=tel]:not(.browser-default).form-control-sm.valid+label:after,
.md-form input[type=tel]:not(.browser-default).form-control-sm:focus.valid+label:after,
.md-form input[type=number]:not(.browser-default).form-control-sm.valid+label:after,
.md-form input[type=number]:not(.browser-default).form-control-sm:focus.valid+label:after,
.md-form input[type=search]:not(.browser-default).form-control-sm.valid+label:after,
.md-form input[type=search]:not(.browser-default).form-control-sm:focus.valid+label:after,
.md-form input[type=phone]:not(.browser-default).form-control-sm.valid+label:after,
.md-form input[type=phone]:not(.browser-default).form-control-sm:focus.valid+label:after,
.md-form input[type=search-md].form-control-sm.valid+label:after,
.md-form input[type=search-md].form-control-sm:focus.valid+label:after,
.md-form input[type=text]:not(.browser-default).form-control-sm.valid+label:after,
.md-form input[type=text]:not(.browser-default).form-control-sm:focus.valid+label:after,
.md-form input[type=password]:not(.browser-default).form-control-sm.valid+label:after,
.md-form input[type=password]:not(.browser-default).form-control-sm:focus.valid+label:after,
.md-form input[type=email]:not(.browser-default).form-control-sm.valid+label:after,
.md-form input[type=email]:not(.browser-default).form-control-sm:focus.valid+label:after,
.md-form input[type=url]:not(.browser-default).form-control-sm.valid+label:after,
.md-form input[type=url]:not(.browser-default).form-control-sm:focus.valid+label:after,
.md-form input[type=time]:not(.browser-default).form-control-sm.valid+label:after,
.md-form input[type=time]:not(.browser-default).form-control-sm:focus.valid+label:after,
.md-form textarea.md-textarea.form-control-sm.valid+label:after,
.md-form textarea.md-textarea.form-control-sm:focus.valid+label:after {
 top:3.7rem
}
.md-form input:not([type]).form-control-sm.invalid+label:after,
.md-form input:not([type]).form-control-sm:focus.invalid+label:after,
.md-form input[type=date]:not(.browser-default).form-control-sm.invalid+label:after,
.md-form input[type=date]:not(.browser-default).form-control-sm:focus.invalid+label:after,
.md-form input[type=datetime]:not(.browser-default).form-control-sm.invalid+label:after,
.md-form input[type=datetime]:not(.browser-default).form-control-sm:focus.invalid+label:after,
.md-form input[type=datetime-local]:not(.browser-default).form-control-sm.invalid+label:after,
.md-form input[type=datetime-local]:not(.browser-default).form-control-sm:focus.invalid+label:after,
.md-form input[type=tel]:not(.browser-default).form-control-sm.invalid+label:after,
.md-form input[type=tel]:not(.browser-default).form-control-sm:focus.invalid+label:after,
.md-form input[type=number]:not(.browser-default).form-control-sm.invalid+label:after,
.md-form input[type=number]:not(.browser-default).form-control-sm:focus.invalid+label:after,
.md-form input[type=search]:not(.browser-default).form-control-sm.invalid+label:after,
.md-form input[type=search]:not(.browser-default).form-control-sm:focus.invalid+label:after,
.md-form input[type=phone]:not(.browser-default).form-control-sm.invalid+label:after,
.md-form input[type=phone]:not(.browser-default).form-control-sm:focus.invalid+label:after,
.md-form input[type=search-md].form-control-sm.invalid+label:after,
.md-form input[type=search-md].form-control-sm:focus.invalid+label:after,
.md-form input[type=text]:not(.browser-default).form-control-sm.invalid+label:after,
.md-form input[type=text]:not(.browser-default).form-control-sm:focus.invalid+label:after,
.md-form input[type=password]:not(.browser-default).form-control-sm.invalid+label:after,
.md-form input[type=password]:not(.browser-default).form-control-sm:focus.invalid+label:after,
.md-form input[type=email]:not(.browser-default).form-control-sm.invalid+label:after,
.md-form input[type=email]:not(.browser-default).form-control-sm:focus.invalid+label:after,
.md-form input[type=url]:not(.browser-default).form-control-sm.invalid+label:after,
.md-form input[type=url]:not(.browser-default).form-control-sm:focus.invalid+label:after,
.md-form input[type=time]:not(.browser-default).form-control-sm.invalid+label:after,
.md-form input[type=time]:not(.browser-default).form-control-sm:focus.invalid+label:after,
.md-form textarea.md-textarea.form-control-sm.invalid+label:after,
.md-form textarea.md-textarea.form-control-sm:focus.invalid+label:after {
 top:3.6rem
}
.md-form>input[type=date]:not(.browser-default)+label {
 -webkit-transform:translateY(-27px) scale(.8);
 transform:translateY(-27px) scale(.8);
 -webkit-transform-origin:0 0;
 transform-origin:0 0
}
.md-form>input[type=time]:not(.browser-default)+label,
.md-form>input[type]:-webkit-autofill:not(.browser-default):not([type=search])+label {
 font-size:.8rem;
 -webkit-transform:translateY(-25px);
 transform:translateY(-25px);
 -webkit-transform-origin:0 0;
 transform-origin:0 0
}
.md-form .was-validated input[type=text]:valid+label {
 color:#00c851!important
}
.md-form .was-validated input[type=text]:invalid+label {
 color:#f44336!important
}
.md-form .was-validated .form-control:valid:focus {
 -webkit-box-shadow:0 1px 0 0 #00c851!important;
 box-shadow:0 1px 0 0 #00c851!important
}
.md-form .was-validated .form-control:valid {
 border-color:#00c851!important
}
.md-form .was-validated .form-control:invalid:focus {
 -webkit-box-shadow:0 1px 0 0 #f44336!important;
 box-shadow:0 1px 0 0 #f44336!important
}
.md-form .was-validated .form-control:invalid {
 border-color:#f44336!important
}
.md-form .form-control {
 height:auto;
 padding:.6rem 0 .4rem;
 margin:0 0 .5rem;
 background-color:transparent;
 border-radius:0
}
.md-form .form-control:focus {
 -webkit-box-shadow:none;
 box-shadow:none
}
.md-form .form-control:disabled,
.md-form .form-control[readonly] {
 background-color:transparent;
 border-bottom:1px solid #bdbdbd
}
.md-form .form-control.is-valid {
 border-color:#00c851
}
.md-form .form-control.is-valid:focus {
 border-color:#00c851!important;
 -webkit-box-shadow:0 1px 0 0 #00c851!important;
 box-shadow:0 1px 0 0 #00c851!important
}
.md-form .form-control.is-invalid {
 border-color:#f44336
}
.md-form .form-control.is-invalid:focus {
 border-color:#f44336!important;
 -webkit-box-shadow:0 1px 0 0 #f44336!important;
 box-shadow:0 1px 0 0 #f44336!important
}
.md-form .form-control.is-invalid,
.md-form .form-control.is-valid {
 background-position:center right!important
}
.md-form .validate {
 margin-bottom:2.5rem
}
.md-form label,
.md-form label.active {
 font-size:1rem
}
.md-form .prefix {
 top:.25rem;
 font-size:1.75rem
}
.md-form .prefix~input,
.md-form .prefix~textarea {
 width:calc(100% - 2.5rem);
 margin-left:2.5rem
}
.md-form .prefix~label {
 margin-left:2.5rem
}
.md-form .prefix~.form-text {
 margin-left:2.6rem
}
.md-form label {
 position:absolute;
 top:0;
 left:0;
 font-size:1rem;
 color:#757575;
 cursor:text;
 -webkit-transition:color .2s ease-out,-webkit-transform .2s ease-out;
 transition:color .2s ease-out,-webkit-transform .2s ease-out;
 transition:transform .2s ease-out,color .2s ease-out;
 transition:transform .2s ease-out,color .2s ease-out,-webkit-transform .2s ease-out;
 -webkit-transform:translateY(12px);
 transform:translateY(12px);
 -webkit-transform-origin:0 100%;
 transform-origin:0 100%
}
.md-form .prefix.active,
.md-form.md-outline input[type=date]:focus:not([readonly])+label,
.md-form.md-outline input[type=datetime-local]:focus:not([readonly])+label,
.md-form.md-outline input[type=tel]:focus:not([readonly])+label,
.md-form.md-outline input[type=number]:focus:not([readonly])+label,
.md-form.md-outline input[type=search]:focus:not([readonly])+label,
.md-form.md-outline input[type=search-md]:focus:not([readonly])+label,
.md-form.md-outline input[type=text]:focus:not([readonly])+label,
.md-form.md-outline input[type=password]:focus:not([readonly])+label,
.md-form.md-outline input[type=email]:focus:not([readonly])+label,
.md-form.md-outline input[type=url]:focus:not([readonly])+label,
.md-form.md-outline input[type=time]:focus:not([readonly])+label,
.md-form.md-outline textarea.md-textarea:focus:not([readonly])+label {
 color:#4285f4
}
.md-form label.active {
 -webkit-transform:translateY(-14px) scale(.8);
 transform:translateY(-14px) scale(.8)
}
.md-form .prefix {
 position:absolute;
 -webkit-transition:color .2s;
 transition:color .2s
}
.md-form.form-lg label {
 font-size:1.25rem
}
.md-form.form-lg label.active {
 font-size:1.15rem
}
.md-form.form-lg .prefix {
 top:.4rem;
 font-size:2rem
}
.md-form.form-lg .prefix~input,
.md-form.form-lg .prefix~textarea {
 width:calc(100% - 3rem);
 margin-left:3rem
}
.md-form.form-lg .prefix~label {
 margin-left:3rem
}
.md-form.form-lg .prefix~.form-text {
 margin-left:3.1rem
}
.md-form.form-sm .validate {
 margin-bottom:2.3rem
}
.md-form.form-sm label {
 font-size:.875rem
}
.md-form.form-sm label.active {
 font-size:.95rem
}
.md-form.form-sm .prefix {
 top:.35rem;
 font-size:1.5rem
}
.md-form.form-sm .prefix~input,
.md-form.form-sm .prefix~textarea {
 width:calc(100% - 2rem);
 margin-left:2rem
}
.md-form.form-sm .prefix~.form-text,
.md-form.form-sm .prefix~label {
 margin-left:2rem
}
.md-form textarea.md-textarea {
 padding:0;
 overflow-y:hidden
}
.md-form textarea.md-textarea+label {
 top:-.6rem
}
.md-form textarea.md-textarea-auto {
 padding:1.5rem 0 0
}
.md-form textarea.md-textarea-auto+label {
 top:0
}
.md-form.md-outline {
 position:relative;
 margin-top:5px;
 margin-bottom:16px;
}
.md-form.md-outline input[type=date],
.md-form.md-outline input[type=datetime-local],
.md-form.md-outline input[type=tel],
.md-form.md-outline input[type=number],
.md-form.md-outline input[type=search],
.md-form.md-outline input[type=search-md],
.md-form.md-outline input[type=text],
.md-form.md-outline input[type=password],
.md-form.md-outline input[type=email],
.md-form.md-outline input[type=url],
.md-form.md-outline input[type=time],
.md-form.md-outline textarea.md-textarea {
 -webkit-box-sizing:border-box;
 box-sizing:border-box;
 background-color:transparent;
 border:1px solid #dadce0;
 border-radius:2px;
 outline:0;
 -webkit-box-shadow:none;
 box-shadow:none;
 -webkit-transition:all .3s;
 transition:all .3s;
 height: 45px;
 font-size: 14px;
}
.md-form.md-outline input[type=date]:focus:not([readonly]),
.md-form.md-outline input[type=datetime-local]:focus:not([readonly]),
.md-form.md-outline input[type=tel]:focus:not([readonly]),
.md-form.md-outline input[type=number]:focus:not([readonly]),
.md-form.md-outline input[type=search]:focus:not([readonly]),
.md-form.md-outline input[type=search-md]:focus:not([readonly]),
.md-form.md-outline input[type=text]:focus:not([readonly]),
.md-form.md-outline input[type=password]:focus:not([readonly]),
.md-form.md-outline input[type=email]:focus:not([readonly]),
.md-form.md-outline input[type=url]:focus:not([readonly]),
.md-form.md-outline input[type=time]:focus:not([readonly]),
.md-form.md-outline textarea.md-textarea:focus:not([readonly]) {
 border-color:#4285f4;
 -webkit-box-shadow:inset 0 0 0 1px #4285f4;
 box-shadow:inset 0 0 0 1px #4285f4
}
.md-form.md-outline input[type=date].valid,
.md-form.md-outline input[type=date]:focus.valid,
.md-form.md-outline input[type=datetime-local].valid,
.md-form.md-outline input[type=datetime-local]:focus.valid,
.md-form.md-outline input[type=tel].valid,
.md-form.md-outline input[type=tel]:focus.valid,
.md-form.md-outline input[type=number].valid,
.md-form.md-outline input[type=number]:focus.valid,
.md-form.md-outline input[type=search].valid,
.md-form.md-outline input[type=search]:focus.valid,
.md-form.md-outline input[type=search-md].valid,
.md-form.md-outline input[type=search-md]:focus.valid,
.md-form.md-outline input[type=text].valid,
.md-form.md-outline input[type=text]:focus.valid,
.md-form.md-outline input[type=password].valid,
.md-form.md-outline input[type=password]:focus.valid,
.md-form.md-outline input[type=email].valid,
.md-form.md-outline input[type=email]:focus.valid,
.md-form.md-outline input[type=url].valid,
.md-form.md-outline input[type=url]:focus.valid,
.md-form.md-outline input[type=time].valid,
.md-form.md-outline input[type=time]:focus.valid,
.md-form.md-outline textarea.md-textarea.valid,
.md-form.md-outline textarea.md-textarea:focus.valid {
 border-color:#00c851;
 -webkit-box-shadow:inset 0 0 0 1px #00c851;
 box-shadow:inset 0 0 0 1px #00c851
}
.md-form.md-outline input[type=date].valid+label:after,
.md-form.md-outline input[type=date]:focus.valid+label:after,
.md-form.md-outline input[type=date]:focus:not([readonly]).valid+label,
.md-form.md-outline input[type=datetime-local].valid+label:after,
.md-form.md-outline input[type=datetime-local]:focus.valid+label:after,
.md-form.md-outline input[type=datetime-local]:focus:not([readonly]).valid+label,
.md-form.md-outline input[type=tel].valid+label:after,
.md-form.md-outline input[type=tel]:focus.valid+label:after,
.md-form.md-outline input[type=tel]:focus:not([readonly]).valid+label,
.md-form.md-outline input[type=number].valid+label:after,
.md-form.md-outline input[type=number]:focus.valid+label:after,
.md-form.md-outline input[type=number]:focus:not([readonly]).valid+label,
.md-form.md-outline input[type=search].valid+label:after,
.md-form.md-outline input[type=search]:focus.valid+label:after,
.md-form.md-outline input[type=search]:focus:not([readonly]).valid+label,
.md-form.md-outline input[type=search-md].valid+label:after,
.md-form.md-outline input[type=search-md]:focus.valid+label:after,
.md-form.md-outline input[type=search-md]:focus:not([readonly]).valid+label,
.md-form.md-outline input[type=text].valid+label:after,
.md-form.md-outline input[type=text]:focus.valid+label:after,
.md-form.md-outline input[type=text]:focus:not([readonly]).valid+label,
.md-form.md-outline input[type=password].valid+label:after,
.md-form.md-outline input[type=password]:focus.valid+label:after,
.md-form.md-outline input[type=password]:focus:not([readonly]).valid+label,
.md-form.md-outline input[type=email].valid+label:after,
.md-form.md-outline input[type=email]:focus.valid+label:after,
.md-form.md-outline input[type=email]:focus:not([readonly]).valid+label,
.md-form.md-outline input[type=url].valid+label:after,
.md-form.md-outline input[type=url]:focus.valid+label:after,
.md-form.md-outline input[type=url]:focus:not([readonly]).valid+label,
.md-form.md-outline input[type=time].valid+label:after,
.md-form.md-outline input[type=time]:focus.valid+label:after,
.md-form.md-outline input[type=time]:focus:not([readonly]).valid+label,
.md-form.md-outline textarea.md-textarea.valid+label:after,
.md-form.md-outline textarea.md-textarea:focus.valid+label:after,
.md-form.md-outline textarea.md-textarea:focus:not([readonly]).valid+label {
 color:#00c851;
 content:attr(data-success);
 opacity:1
}
.md-form.md-outline input[type=date].invalid,
.md-form.md-outline input[type=date]:focus.invalid,
.md-form.md-outline input[type=datetime-local].invalid,
.md-form.md-outline input[type=datetime-local]:focus.invalid,
.md-form.md-outline input[type=tel].invalid,
.md-form.md-outline input[type=tel]:focus.invalid,
.md-form.md-outline input[type=number].invalid,
.md-form.md-outline input[type=number]:focus.invalid,
.md-form.md-outline input[type=search].invalid,
.md-form.md-outline input[type=search]:focus.invalid,
.md-form.md-outline input[type=search-md].invalid,
.md-form.md-outline input[type=search-md]:focus.invalid,
.md-form.md-outline input[type=text].invalid,
.md-form.md-outline input[type=text]:focus.invalid,
.md-form.md-outline input[type=password].invalid,
.md-form.md-outline input[type=password]:focus.invalid,
.md-form.md-outline input[type=email].invalid,
.md-form.md-outline input[type=email]:focus.invalid,
.md-form.md-outline input[type=url].invalid,
.md-form.md-outline input[type=url]:focus.invalid,
.md-form.md-outline input[type=time].invalid,
.md-form.md-outline input[type=time]:focus.invalid,
.md-form.md-outline textarea.md-textarea.invalid,
.md-form.md-outline textarea.md-textarea:focus.invalid {
 border-color:#f44336;
 -webkit-box-shadow:inset 0 0 0 1px #f44336;
 box-shadow:inset 0 0 0 1px #f44336
}
.md-form.md-outline input[type=date].invalid+label:after,
.md-form.md-outline input[type=date]:focus.invalid+label:after,
.md-form.md-outline input[type=date]:focus:not([readonly]).invalid+label,
.md-form.md-outline input[type=datetime-local].invalid+label:after,
.md-form.md-outline input[type=datetime-local]:focus.invalid+label:after,
.md-form.md-outline input[type=datetime-local]:focus:not([readonly]).invalid+label,
.md-form.md-outline input[type=tel].invalid+label:after,
.md-form.md-outline input[type=tel]:focus.invalid+label:after,
.md-form.md-outline input[type=tel]:focus:not([readonly]).invalid+label,
.md-form.md-outline input[type=number].invalid+label:after,
.md-form.md-outline input[type=number]:focus.invalid+label:after,
.md-form.md-outline input[type=number]:focus:not([readonly]).invalid+label,
.md-form.md-outline input[type=search].invalid+label:after,
.md-form.md-outline input[type=search]:focus.invalid+label:after,
.md-form.md-outline input[type=search]:focus:not([readonly]).invalid+label,
.md-form.md-outline input[type=search-md].invalid+label:after,
.md-form.md-outline input[type=search-md]:focus.invalid+label:after,
.md-form.md-outline input[type=search-md]:focus:not([readonly]).invalid+label,
.md-form.md-outline input[type=text].invalid+label:after,
.md-form.md-outline input[type=text]:focus.invalid+label:after,
.md-form.md-outline input[type=text]:focus:not([readonly]).invalid+label,
.md-form.md-outline input[type=password].invalid+label:after,
.md-form.md-outline input[type=password]:focus.invalid+label:after,
.md-form.md-outline input[type=password]:focus:not([readonly]).invalid+label,
.md-form.md-outline input[type=email].invalid+label:after,
.md-form.md-outline input[type=email]:focus.invalid+label:after,
.md-form.md-outline input[type=email]:focus:not([readonly]).invalid+label,
.md-form.md-outline input[type=url].invalid+label:after,
.md-form.md-outline input[type=url]:focus.invalid+label:after,
.md-form.md-outline input[type=url]:focus:not([readonly]).invalid+label,
.md-form.md-outline input[type=time].invalid+label:after,
.md-form.md-outline input[type=time]:focus.invalid+label:after,
.md-form.md-outline input[type=time]:focus:not([readonly]).invalid+label,
.md-form.md-outline textarea.md-textarea.invalid+label:after,
.md-form.md-outline textarea.md-textarea:focus.invalid+label:after,
.md-form.md-outline textarea.md-textarea:focus:not([readonly]).invalid+label {
 color:#f44336;
 content:attr(data-error);
 opacity:1
}
.md-form.md-outline input[type=date].form-control.invalid+label:after,
.md-form.md-outline input[type=date].form-control.valid+label:after,
.md-form.md-outline input[type=date].form-control:focus.invalid+label:after,
.md-form.md-outline input[type=date].form-control:focus.valid+label:after,
.md-form.md-outline input[type=datetime-local].form-control.invalid+label:after,
.md-form.md-outline input[type=datetime-local].form-control.valid+label:after,
.md-form.md-outline input[type=datetime-local].form-control:focus.invalid+label:after,
.md-form.md-outline input[type=datetime-local].form-control:focus.valid+label:after,
.md-form.md-outline input[type=tel].form-control.invalid+label:after,
.md-form.md-outline input[type=tel].form-control.valid+label:after,
.md-form.md-outline input[type=tel].form-control:focus.invalid+label:after,
.md-form.md-outline input[type=tel].form-control:focus.valid+label:after,
.md-form.md-outline input[type=number].form-control.invalid+label:after,
.md-form.md-outline input[type=number].form-control.valid+label:after,
.md-form.md-outline input[type=number].form-control:focus.invalid+label:after,
.md-form.md-outline input[type=number].form-control:focus.valid+label:after,
.md-form.md-outline input[type=search].form-control.invalid+label:after,
.md-form.md-outline input[type=search].form-control.valid+label:after,
.md-form.md-outline input[type=search].form-control:focus.invalid+label:after,
.md-form.md-outline input[type=search].form-control:focus.valid+label:after,
.md-form.md-outline input[type=search-md].form-control.invalid+label:after,
.md-form.md-outline input[type=search-md].form-control.valid+label:after,
.md-form.md-outline input[type=search-md].form-control:focus.invalid+label:after,
.md-form.md-outline input[type=search-md].form-control:focus.valid+label:after,
.md-form.md-outline input[type=text].form-control.invalid+label:after,
.md-form.md-outline input[type=text].form-control.valid+label:after,
.md-form.md-outline input[type=text].form-control:focus.invalid+label:after,
.md-form.md-outline input[type=text].form-control:focus.valid+label:after,
.md-form.md-outline input[type=password].form-control.invalid+label:after,
.md-form.md-outline input[type=password].form-control.valid+label:after,
.md-form.md-outline input[type=password].form-control:focus.invalid+label:after,
.md-form.md-outline input[type=password].form-control:focus.valid+label:after,
.md-form.md-outline input[type=email].form-control.invalid+label:after,
.md-form.md-outline input[type=email].form-control.valid+label:after,
.md-form.md-outline input[type=email].form-control:focus.invalid+label:after,
.md-form.md-outline input[type=email].form-control:focus.valid+label:after,
.md-form.md-outline input[type=url].form-control.invalid+label:after,
.md-form.md-outline input[type=url].form-control.valid+label:after,
.md-form.md-outline input[type=url].form-control:focus.invalid+label:after,
.md-form.md-outline input[type=url].form-control:focus.valid+label:after,
.md-form.md-outline input[type=time].form-control.invalid+label:after,
.md-form.md-outline input[type=time].form-control.valid+label:after,
.md-form.md-outline input[type=time].form-control:focus.invalid+label:after,
.md-form.md-outline input[type=time].form-control:focus.valid+label:after,
.md-form.md-outline textarea.md-textarea.form-control.invalid+label:after,
.md-form.md-outline textarea.md-textarea.form-control.valid+label:after,
.md-form.md-outline textarea.md-textarea.form-control:focus.invalid+label:after,
.md-form.md-outline textarea.md-textarea.form-control:focus.valid+label:after {
 position:absolute;
 top:4rem;
 left:0
}
.md-form.md-outline>input[type=time]:not(.browser-default)+label,
.md-form.md-outline>input[type]:-webkit-autofill:not(.browser-default):not([type=search])+label {
 left:8px;
 padding-right:5px;
 padding-left:5px;
 font-size:17px;
 font-weight:500;
 background:#fff;
 -webkit-transform:translateY(-9px) scale(.8);
 transform:translateY(-9px) scale(.8);
 -webkit-transform-origin:0 0;
 transform-origin:0 0
}
.md-form.md-outline>input[type=time]:not(.browser-default)+label.active,
.md-form.md-outline>input[type]:-webkit-autofill:not(.browser-default):not([type=search])+label.active {
 -webkit-transform:translateY(-9px) scale(.8);
 transform:translateY(-9px) scale(.8);
 -webkit-transform-origin:0 0;
 transform-origin:0 0
}
@-webkit-keyframes autofill {
 to {
  color:#495057;
  background:0 0
 }
}
@keyframes autofill {
 to {
  color:#495057;
  background:0 0
 }
}
.md-form.md-outline input:-webkit-autofill {
 -webkit-animation-name:autofill;
 animation-name:autofill;
 -webkit-animation-fill-mode:both;
 animation-fill-mode:both
}
.md-form.md-outline .form-control {
 padding:.375rem .75rem;
 /*! padding-top: 100px; */
 font-size: 15px;
 height: 45px;
 border: 1px solid #f1f1f3;
}
.md-form.md-outline label {
 position:absolute;
 top:0;
 left:0;
 padding-left:10px;
 font-size:1rem;
 color:#757575;
 cursor:text;
 -webkit-transition:color .2s ease-out,-webkit-transform .2s ease-out;
 transition:color .2s ease-out,-webkit-transform .2s ease-out;
 transition:transform .2s ease-out,color .2s ease-out;
 transition:transform .2s ease-out,color .2s ease-out,-webkit-transform .2s ease-out;
 -webkit-transform:translateY(9px);
 transform:translateY(9px);
 -webkit-transform-origin:0 100%;
 transform-origin:0 100%
}
.md-form.md-outline label.active {
 left:8px;
 padding-right:5px;
 padding-left:5px;
 font-weight:500;
 background:#fffdfd;
 -webkit-transform:translateY(-13px) scale(.8);
 transform:translateY(-13px) scale(.8);
 font-size: 14px;
 top: -5px;
 color: <?php echo $tema['t8']; ?> !important;
 border-radius: 10px;
 /*! background: none; */
}
.md-form.md-outline.form-lg .form-control.form-control-lg {
 padding:.5rem .725rem
}
.md-form.md-outline.form-lg label {
 font-size:1.25rem;
 -webkit-transform:translateY(10px);
 transform:translateY(10px)
}
.md-form.md-outline.form-lg label.active {
 font-size:1.1rem;
 -webkit-transform:translateY(-14px) scale(.8);
 transform:translateY(-14px) scale(.8)
}
.md-form.md-outline.form-lg .prefix {
 top:.65rem;
 font-size:25px
}
.md-form.md-outline.form-lg .prefix~input,
.md-form.md-outline.form-lg .prefix~textarea {
 width:calc(100% - 2.2rem);
 margin-left:2.2rem
}
.md-form.md-outline.form-lg .prefix~label {
 margin-left:2.2rem
}
.md-form.md-outline.form-lg .prefix~.form-text {
 margin-left:2.3rem
}
.md-form.md-outline.form-sm .form-control.form-control-sm {
 padding:.25rem .625rem
}
.md-form.md-outline.form-sm label {
 font-size:.8rem;
 -webkit-transform:translateY(8px);
 transform:translateY(8px)
}
.md-form.md-outline.form-sm label.active {
 font-size:.85rem;
 -webkit-transform:translateY(-12px) scale(.8);
 transform:translateY(-12px) scale(.8)
}
.md-form.md-outline.form-sm .prefix {
 top:.5rem;
 font-size:15px
}
.md-form.md-outline.form-sm .prefix~input,
.md-form.md-outline.form-sm .prefix~textarea {
 width:calc(100% - 1.6rem);
 margin-left:1.6rem
}
.md-form.md-outline.form-sm .prefix~label {
 margin-left:1.6rem
}
.md-form.md-outline.form-sm .prefix~.form-text {
 margin-left:1.7rem
}
.md-form.md-outline .prefix {
 position:absolute;
 top:.6rem;
 font-size:20px;
 -webkit-transition:color .2s;
 transition:color .2s
}
.md-form.md-outline .prefix:focus {
 color:#4285f4
}
.md-form.md-outline .prefix~input,
.md-form.md-outline .prefix~textarea {
 width:calc(100% - 2rem);
 margin-left:2rem
}
.md-form.md-outline .prefix~label {
 margin-left:2rem
}
.md-form.md-outline .prefix~.form-text {
 margin-left:2.1rem
}
.md-form.md-outline .character-counter {
 margin-top:-.5rem
}
.md-form.md-bg input[type=date],
.md-form.md-bg input[type=datetime-local],
.md-form.md-bg input[type=tel],
.md-form.md-bg input[type=number],
.md-form.md-bg input[type=search],
.md-form.md-bg input[type=search-md],
.md-form.md-bg input[type=text],
.md-form.md-bg input[type=password],
.md-form.md-bg input[type=email],
.md-form.md-bg input[type=url],
.md-form.md-bg input[type=time],
.md-form.md-bg textarea.md-textarea {
 -webkit-box-sizing:border-box;
 box-sizing:border-box;
 padding:10px 5px;
 background:50% 100% no-repeat,50% 100% no-repeat #f5f5f5;
 background-image:-webkit-gradient(linear,left top,left bottom,from(#4285f4),to(#4285f4)),-webkit-gradient(linear,left top,left bottom,from(#ced4da),to(#ced4da));
 background-image:linear-gradient(to bottom,#4285f4,#4285f4),linear-gradient(to bottom,#ced4da,#ced4da);
 background-size:0 2px,100% 1px;
 border:0;
 border-top-left-radius:.3rem;
 border-top-right-radius:.3rem;
 -webkit-transition:background-size .3s cubic-bezier(.64,.09,.08,1);
 transition:background-size .3s cubic-bezier(.64,.09,.08,1)
}
.md-form.md-bg input[type=date]:focus:not([readonly]),
.md-form.md-bg input[type=datetime-local]:focus:not([readonly]),
.md-form.md-bg input[type=tel]:focus:not([readonly]),
.md-form.md-bg input[type=number]:focus:not([readonly]),
.md-form.md-bg input[type=search]:focus:not([readonly]),
.md-form.md-bg input[type=search-md]:focus:not([readonly]),
.md-form.md-bg input[type=text]:focus:not([readonly]),
.md-form.md-bg input[type=password]:focus:not([readonly]),
.md-form.md-bg input[type=email]:focus:not([readonly]),
.md-form.md-bg input[type=url]:focus:not([readonly]),
.md-form.md-bg input[type=time]:focus:not([readonly]),
.md-form.md-bg textarea.md-textarea:focus:not([readonly]) {
 border-bottom:none;
 -webkit-box-shadow:none;
 box-shadow:none
}
.md-form.md-bg input[type=date]:focus,
.md-form.md-bg input[type=datetime-local]:focus,
.md-form.md-bg input[type=tel]:focus,
.md-form.md-bg input[type=number]:focus,
.md-form.md-bg input[type=search]:focus,
.md-form.md-bg input[type=search-md]:focus,
.md-form.md-bg input[type=text]:focus,
.md-form.md-bg input[type=password]:focus,
.md-form.md-bg input[type=email]:focus,
.md-form.md-bg input[type=url]:focus,
.md-form.md-bg input[type=time]:focus,
.md-form.md-bg textarea.md-textarea:focus {
 background-color:#dcdcdc;
 background-size:100% 2px,100% 1px;
 outline:0
}
.md-form.md-bg>input[type=date]:not(.browser-default)+label {
 -webkit-transform:translateY(-12px) scale(.8);
 transform:translateY(-12px) scale(.8);
 -webkit-transform-origin:0 0;
 transform-origin:0 0
}
.md-form.md-bg>input[type=time]:not(.browser-default)+label,
.md-form.md-bg>input[type]:-webkit-autofill:not(.browser-default):not([type=search])+label {
 font-size:.8rem;
 -webkit-transform:translateY(-12px);
 transform:translateY(-12px);
 -webkit-transform-origin:0 0;
 transform-origin:0 0
}
.md-form.md-bg .form-control {
 padding:1.1rem .7rem .4rem!important
}
.md-form.md-bg label {
 top:0;
 padding-left:.7rem;
 font-size:1rem;
 -webkit-transition:color .2s ease-out,-webkit-transform .2s ease-out;
 transition:color .2s ease-out,-webkit-transform .2s ease-out;
 transition:transform .2s ease-out,color .2s ease-out;
 transition:transform .2s ease-out,color .2s ease-out,-webkit-transform .2s ease-out;
 -webkit-transform:translateY(13px);
 transform:translateY(13px);
 -webkit-transform-origin:0 100%;
 transform-origin:0 100%
}
.md-form.md-bg label.active {
 padding-left:.75rem;
 font-weight:500;
 -webkit-transform:translateY(-3px) scale(.8);
 transform:translateY(-3px) scale(.8)
}
.md-form.md-bg.form-lg label {
 -webkit-transform:translateY(16px);
 transform:translateY(16px)
}
.md-form.md-bg.form-lg label.active {
 -webkit-transform:translateY(-4px) scale(.8);
 transform:translateY(-4px) scale(.8)
}
.md-form.md-bg.form-sm label {
 -webkit-transform:translateY(11px);
 transform:translateY(11px)
}
.md-form.md-bg.form-sm label.active {
 -webkit-transform:translateY(-2px) scale(.8);
 transform:translateY(-2px) scale(.8)
}
.dotted-scrollspy,
.md-form .input-prefix {
 top:50%;
 -webkit-transform:translateY(-50%)
}
.md-form .form-control.is-invalid,
.md-form .form-control.is-valid,
.was-validated .md-form .form-control:invalid,
.was-validated .md-form .form-control:valid {
 padding-right:0
}
.needs-validation .md-form label {
 left:.3rem
}
.custom-file-input:lang(es)~.custom-file-label::after {
 content:"Elegir"
}
.custom-file-input:lang(pl-pl)~.custom-file-label::after {
 content:"Wybierz"
}
.custom-file-input:lang(fr)~.custom-file-label::after {
 content:"Choisir"
}
.custom-file-input:lang(in)~.custom-file-label::after {
 content:"Pilih"
}
.custom-file-input:lang(zh)~.custom-file-label::after {
 content:"選擇"
}
.custom-file-input:lang(de)~.custom-file-label::after {
 content:"Wählen"
}
.custom-file-input:lang(ru)~.custom-file-label::after {
 content:"Выбрать"
}
.md-form>label {
 max-width:100%;
 white-space:nowrap;
 overflow:hidden;
 text-overflow:ellipsis
}
.md-form .form-control {
 -webkit-box-sizing:border-box!important;
 box-sizing:border-box!important
}
.md-form .input-prefix {
 position:absolute;
 transform:translateY(-50%);
 -webkit-transition:color .2s;
 transition:color .2s;
 color:rgba(0,0,0,.87);
 pointer-events:none
}
.md-form .input-prefix.active {
 color:#4285f4
}
.md-form.input-with-pre-icon label {
 left:36px;
 right:initial
}
.md-form.input-with-pre-icon .input-prefix {
 left:16px;
 right:initial
}
.md-form.input-with-post-icon .input-prefix,
.md-form.input-with-post-icon.input-with-pre-icon .input-prefix {
 right:16px;
 left:initial
}
.md-form.input-with-pre-icon .form-control {
 padding-left:2.7rem!important
}
.md-form.input-with-post-icon .form-control {
 padding-right:2.7rem!important
}
.md-form.input-with-post-icon.input-with-pre-icon .input-prefix:first-of-type {
 left:16px;
 right:initial
}
.md-form.input-with-post-icon.input-with-pre-icon .form-control {
 padding-left:2.5rem!important;
 padding-right:2.5rem!important
}
.edge-header {
 display:block;
 height:278px
}
.free-bird {
 margin-top:-100px
}
.juicy-peach-gradient {
 background-image:-webkit-gradient(linear,left top,right top,from(#ffecd2),to(#fcb69f));
 background-image:linear-gradient(to right,#ffecd2 0,#fcb69f 100%)
}
.young-passion-gradient {
 background-image:-webkit-gradient(linear,left top,right top,from(#ff8177),color-stop(0,#ff867a),color-stop(21%,#ff8c7f),color-stop(52%,#f99185),color-stop(78%,#cf556c),to(#b12a5b));
 background-image:linear-gradient(to right,#ff8177 0,#ff867a 0,#ff8c7f 21%,#f99185 52%,#cf556c 78%,#b12a5b 100%)
}
.lady-lips-gradient {
 background-image:-webkit-gradient(linear,left bottom,left top,from(#ff9a9e),color-stop(99%,#fecfef),to(#fecfef));
 background-image:linear-gradient(to top,#ff9a9e 0,#fecfef 99%,#fecfef 100%)
}
.sunny-morning-gradient {
 background-image:linear-gradient(120deg,#f6d365 0,#fda085 100%)
}
.rainy-ashville-gradient {
 background-image:-webkit-gradient(linear,left bottom,left top,from(#fbc2eb),to(#a6c1ee));
 background-image:linear-gradient(to top,#fbc2eb 0,#a6c1ee 100%)
}
.frozen-dreams-gradient {
 background-image:-webkit-gradient(linear,left bottom,left top,from(#fdcbf1),color-stop(1%,#fdcbf1),to(#e6dee9));
 background-image:linear-gradient(to top,#fdcbf1 0,#fdcbf1 1%,#e6dee9 100%)
}
.warm-flame-gradient {
 background-image:linear-gradient(45deg,#ff9a9e 0,#fad0c4 99%,#fad0c4 100%)
}
.night-fade-gradient {
 background-image:-webkit-gradient(linear,left bottom,left top,from(#a18cd1),to(#fbc2eb));
 background-image:linear-gradient(to top,#a18cd1 0,#fbc2eb 100%)
}
.spring-warmth-gradient {
 background-image:-webkit-gradient(linear,left bottom,left top,from(#fad0c4),to(#ffd1ff));
 background-image:linear-gradient(to top,#fad0c4 0,#ffd1ff 100%)
}
.winter-neva-gradient {
 background-image:linear-gradient(120deg,#a1c4fd 0,#c2e9fb 100%)
}
.dusty-grass-gradient {
 background-image:linear-gradient(120deg,#d4fc79 0,#96e6a1 100%)
}
.tempting-azure-gradient {
 background-image:linear-gradient(120deg,#84fab0 0,#8fd3f4 100%)
}
.heavy-rain-gradient {
 background-image:-webkit-gradient(linear,left bottom,left top,from(#cfd9df),to(#e2ebf0));
 background-image:linear-gradient(to top,#cfd9df 0,#e2ebf0 100%)
}
.amy-crisp-gradient {
 background-image:linear-gradient(120deg,#a6c0fe 0,#f68084 100%)
}
.mean-fruit-gradient {
 background-image:linear-gradient(120deg,#fccb90 0,#d57eeb 100%)
}
.deep-blue-gradient {
 background-image:linear-gradient(120deg,#e0c3fc 0,#8ec5fc 100%)
}
.ripe-malinka-gradient {
 background-image:linear-gradient(120deg,#f093fb 0,#f5576c 100%)
}
.cloudy-knoxville-gradient {
 background-image:linear-gradient(120deg,#fdfbfb 0,#ebedee 100%)
}
.toolbox {
 display:flex;
 /*! align-items:center; */
 /*! flex-direction:column; */
 flex-wrap:wrap;
 font-weight:400;
 font-size:1.4rem;
 line-height:1.5;
 margin-top:0;
 margin-bottom:2rem;
 /*! background: #f8f8f8; */
 /*! padding: 10px; */
 /*! border-radius: 6px; */
 /*! padding: 10px; */
 border: 1px solid #f8f8f8;
 background: white;
 /*! padding-left: 36px !important; */
 border-radius: 6px;
}
.toolbox::after {
 display:block;
 clear:both;
 content:''
}
.toolbox .select-custom {
 margin-bottom:0
}
.toolbox .select-custom::after {
 right:.9rem;
 font-size:1.2rem;
 top: 14px;
}
.toolbox .select-custom .form-control {
 font-size:1.3rem;
 padding-right:2rem;
 /*! max-width:140px; */
 /*! min-width:140px; */
 background-color:#fff;
 border-color:#e4e4e4
}
.toolbox label {
 font-weight:400;
 color:#333;
 /*! font-size:1.2rem; */
 letter-spacing:-.01em;
 margin:0;
 padding-bottom: 10px;
}
.toolbox .form-control {
 color:#999;
 font-weight:300;
 font-size:1.2rem;
 padding:.45rem 1rem;
 height:30px;
 margin-bottom:0
}
.toolbox .form-control:not(:focus) {
 border-color:#d7d7d7
}
.toolbox select.form-control:not([size]):not([multiple]) {
 height:30px
}
.toolbox-left,
.toolbox-right {
 /*! display:flex; */
 /*! align-items:center; */
 flex:1 1 0;
 /*! flex-wrap:wrap; */
 margin-top: 10px;
 /*! position: absolute; */
 /*! margin-left: -67% !important; */
 /*! margin-top: 2%; */
}
.toolbox-center {
 margin-top:1rem;
 flex:0 1 auto
}
.toolbox-right {
 margin-top:1rem;
 flex-direction:column;
 /*! position: relative; */
 /*! margin-right: -132%; */
 /*! margin-top: margin-top: 2%; */
 /*! margin-top: 3%; */
 text-align: right;
}
.toolbox-info {
 color:#ccc
}
.toolbox-info span {
 color:#333
}
.toolbox-sort {
 display:flex;
 align-items:center
}
.toolbox-sort label {
 margin-right:1.6rem;
}
.toolbox-layout {
 margin-top:1rem
}
.details-filter-row {
 display:flex;
 align-items:center;
 /*! flex-flow:row wrap; */
 margin-bottom:-15px;
 border-bottom: 1px solid #ececec;
}
.details-filter-row .form-control {
 font-weight:400;
 margin-bottom:0;
 padding-left:1rem;
 padding-right:1rem;
 background-color:#fff;
 border-color:#d7d7d7;
 min-width:150px;
}
.details-filter-row .select-custom {
 margin-bottom:0;
 margin-right:3.9rem
}
.details-filter-row .select-custom .form-control {
 /*! padding-right:3rem; */
}
.details-filter-row .select-custom::after {
 font-size:1rem;
 right:.9rem
}
.details-filter-row label {
 display:inline-block;
 /*! width:67px; */
 font-weight:400;
 font-size:14px;
 margin-bottom:0;
 margin-right: 10px;
}
.details-filter-row .product-nav {
 margin-bottom:0
}
.details-filter-row .product-nav-thumbs {
 padding-top:0
}
.size-guide {
 color:#777;
 display:inline-flex;
 align-items:center
}
.size-guide i {
 font-size:1.8rem;
 margin-right:.7rem
}
.size-guide:hover,
.size-guide:focus {
 color:#c96
}
.product-details-quantity {
 max-width:131px
}
.product-details-quantity .form-control {
 padding-left:2.6rem;
 padding-right:2.6rem;
 text-align:center;
 margin-bottom:0
}
.size-item {
 position:relative;
 margin-right:5px;
 margin-bottom:10px;
 cursor:pointer;
 -webkit-user-select:none;
 -moz-user-select:none;
 -ms-user-select:none;
 user-select:none
}
.size-item .size-slt-box {
 display:block;
 position:relative;
 border:1px solid #fff;
 text-align:center;
 padding:8px 14px;
 color:#000;
 -webkit-box-shadow:0 0 2px 0 rgba(50,50,50,0);
 box-shadow:0 0 2px 0 rgba(50,50,50,0);
 background: white;
}
.size-item .size-slt-box .size-last {
 position:absolute;
 top:-7px;
 right:-5px;
 font-size:10px;
 line-height:12px;
 height:13px;
 font-weight:700;
 text-align:center;
 background:#e82222;
 padding:0 4px;
 color:#fff;
 border-radius:8px;
 display:block
}
.size-item input {
 position:absolute;
 opacity:0;
 cursor:pointer
}
.size-item input:checked~.size-slt-box {
 background: #ff6f38;
 color: white;
}
.size-item input[available="0"]~.size-slt-box {
 color:#a6a6a6;
 background:linear-gradient(to top right,#fff calc(50% - 1px),#d3d3d3,#fff calc(50% + 1px))
}
.size-item input:not([available="0"])~.size-slt-box:hover {
 background: #e1a635;
 color: #fff;
}
.badge {
    padding: 5px !important;
        padding-bottom: 5px;
    padding-bottom: 6px !important;
    background: white !important;
    border-radius: 0px !important;
}
.table td {
 padding-top:3rem;
 padding-bottom:3rem
}
.table .price-col {
 width:180px;
 color:#333;
 font-weight:400;
 font-size:17px;
}
.table .stock-col {
 width:160px;
 font-weight:400;
 font-size:1.6rem
}
.table .action-col {
 width:202px
}
.table .action-col .btn {
 height:40px;
 padding-top:.55rem;
 padding-bottom:.55rem;
 font-size:1.3rem;
 text-transform:uppercase
}
.table .action-col .btn i {
 font-size:1.8rem;
 margin-right:1rem !important;
 margin-left:0 !important
}
.table .action-col .btn.disabled {
 opacity:1 !important;
 color:#cccccc !important;
 cursor:default;
 pointer-events:none;
 background-color:#fafafa !important;
 border-color:#ebebeb !important
}
.table .remove-col {
 padding-right:0;
 padding-left:0;
 width:38px;
 text-align:right
}
.table .remove-col .btn-remove {
 margin-right:-.7rem
}
.product-col .product {
 display:flex;
 align-items:center;
 margin:0;
 /*! padding-right:2rem; */
 box-shadow:none;
 min-height: 10px;
}
.product-col .product-media {
 display:inline-block;
 margin:0;
 margin-right:2.8rem;
 flex-shrink:0;
 max-width:60px
}
.product-col .product-title {
 display:inline-block;
 color:#333;
 font-weight:400;
 font-size:17px;
 line-height:1.25;
 margin:0;
 /*! color: red; */
}
.product-col .product-title a {
 color:inherit
}
.product-col .product-title a:hover,
.product-col .product-title a:focus {
 color:#c96
}
.in-stock {
 color:#a6c76c
}
.out-of-stock {
 color:#ef837b
}
.btn-remove {
 display:inline-flex;
 align-items:center;
 justify-content:center;
 width:3rem;
 height:3rem;
 color:#cccccc;
 background-color:transparent;
 font-size:1.7rem;
 line-height:1;
 border:none;
 outline:none;
 transition:all .35s
}
.btn-remove:hover,
.btn-remove:focus {
 color:#333
}
.action-col .dropdown-menu {
 color:#666;
 border-radius:0;
 width:100%;
 font-size:1.3rem;
 padding-top:.5rem;
 padding-bottom:.5rem
}
.action-col .dropdown-item {
 padding:.5rem 1.5rem;
 transition:background .35s ease, color .1s ease
}
.action-col .dropdown-item.active,
.action-col .dropdown-item:active,
.action-col .dropdown-item:hover,
.action-col .dropdown-item:focus {
 color:#fff;
 background-color:#c96
}
@media screen and (max-width: 991px) {
 .table-mobile,
 .table-mobile tbody,
 .table-mobile tr,
 .table-mobile td {
  width:100% !important;
  display:block !important
 }
 .table-mobile thead {
  display:none !important
 }
 .table-mobile tr {
  position:relative;
  padding-top:4.2rem;
  padding-bottom:4rem
 }
 .table-mobile .remove-col {
  position:absolute;
  right:1.5rem;
  top:.5rem;
  padding:.5rem !important;
  width:auto !important
 }
 .table-mobile tr td {
  text-align:center;
  padding:.1rem 3rem;
  border-bottom:none
 }
 .table-mobile tr .product-col {
  padding-bottom:.6rem
 }
 .table-mobile tr .action-col {
  padding-top:1.5rem
 }
 .table-mobile tr .action-col .btn,
 .table-mobile tr .action-col .dropdown {
  max-width:220px;
  margin-left:auto;
  margin-right:auto
 }
 .table-mobile .product-col .product {
  justify-content:center
 }
 .table-mobile .product-col .product-title {
  text-align:right;
  padding-right: 10px;
 }
 .table-mobile {
  border:.1rem solid #ebebeb
 }
 .table-mobile tr:not(:last-child) {
  border-bottom:.1rem solid #ebebeb
 }
 .table-mobile .cart-product-quantity {
  margin:.5rem auto
 }
 .product-col .product {
  padding-right:0
 }
}
@media screen and (max-width: 767px) {
 .table-mobile .product-col .product-media {
  margin-right:-4.5rem;
 }
}
@media screen and (max-width: 575px) {
 .cart-bottom {
  flex-direction:column;
  margin-bottom:4rem
 }
 .cart-bottom .cart-discount .btn {
  margin-top:0;
  margin-top: 10px;
 }
 .cart-bottom .btn {
  margin-left:0 !important;
  margin-top:1rem
 }
}
@media screen and (min-width: 992px) {
 .cart .col-lg-3 {
  -ms-flex:0 0 30%;
  flex:0 0 30%;
  max-width:30%
 }
 .cart .col-lg-9 {
  -ms-flex:0 70%;
  flex:0 0 70%;
  max-width:70%
 }
}
.table .total-col {
 color:#fa5616;
 font-weight:400;
 font-size:18px;
}
.table.table-cart .price-col {
 width:178px;
}
.table.table-cart .total-col {
 width:196px;
}
.table.table-cart .quantity-col {
 width:135px
}
.cart-product-quantity {
 width:100px
}
.cart-product-quantity .form-control {
 padding:.85rem 2.6rem;
 height:40px;
 max-width:100%;
 border-color:#dadada;
 background-color:#fff;
 margin:0
}
.input-spinner {
 position:relative
}
.input-spinner .input-group-prepend,
.input-spinner .input-group-append {
 position:absolute;
 top:0
}
.input-spinner .input-group-prepend {
 left:0
}
.input-spinner .input-group-append {
 right:0
}
.input-spinner .form-control {
 padding:.85rem 2.6rem;
 height:auto;
 border-color:#dadada;
 background-color:#fff;
 margin:0
}
.input-spinner .form-control[disabled] {
 background-color:#f9f9f9
}
.btn.btn-spinner {
 min-width:0;
 color:#333333;
 padding:1.25rem .4rem;
 font-size:1rem;
 border:none;
 background:none
}
.btn.btn-spinner i {
 margin:0 !important
}
.btn.btn-spinner:hover,
.btn.btn-spinner:focus {
 color:#c96
}
.cart-bottom {
 display:flex;
 align-items:flex-start;
 margin-bottom:5rem
}
.cart-bottom .btn {
 margin-left:auto;
 min-width:152px
}
.cart-discount {
 flex:0 0 50%;
 max-width:326px
}
.cart-discount .form-control {
 margin-right:1.1rem
}
.cart-discount .btn {
 min-width:40px;
 padding-left:0;
 padding-right:0;
 float: right;
 position: absolute;
 top: -11px;
}
.summary.summary-cart {
 margin-bottom:3rem
}
.summary.summary-cart .summary-title {
 margin-bottom:0
}
.table.table-summary .summary-shipping {
 color:#333;
 font-weight:400;
 font-size:1.6rem
}
.table.table-summary .summary-shipping td {
 padding-top:2rem;
 padding-bottom:1.3rem;
 height:auto;
 border-bottom:none
}
.table.table-summary .summary-shipping-row {
 color:#333;
 border: 2px solid white !important;
 font-size: 16px;
}
.table.table-summary .summary-shipping-row label {
 color:inherit
}
.table.table-summary .summary-shipping-row td {
 height:auto;
 padding-top:.5rem;
 padding-bottom:.5rem;
 border-bottom:none
}
.table.table-summary .custom-control {
 margin:0
}
.table.table-summary .summary-shipping-estimate {
 color:#333;
 font-weight:400;
 font-size:1.6rem
}
.table.table-summary .summary-shipping-estimate td {
 height:auto;
 padding-top:1.4rem;
 padding-bottom:2.3rem
}
.table.table-summary .summary-shipping-estimate a {
 margin-top:.6rem;
 display:inline-block;
 font-weight:300;
 color:#999;
 font-size:1.4rem;
 border-bottom:0.1rem solid #999
}
.table.table-summary .summary-shipping-estimate a:hover,
.table.table-summary .summary-shipping-estimate a:focus {
 color:#c96;
 border-bottom-color:#c96
}
.summary-cart .table.table-summary thead th:last-child,
.summary-cart .table.table-summary tbody td:last-child {
 min-width:0;
 text-align: right;
 /*! font-size: 14px; */
}
@media screen and (max-device-width: 480px) and (orientation: portrait){
.urunmobilbuton {
    width:100% !important;
	margin:0px !important;
}



.product-thumb .button-group button {
    border: none;
    font-weight: bold;
    color: #fff;
    display: inline-block;
    padding: 10px 10px !important;
    text-align: center;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    position: relative;
    background-color: #3b3939;
    font-size: 12px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-transform: capitalize;
    width: 92%;
}


}	
#paymentOptions{
  max-width:400px;
  margin:24px auto;
  padding:8px;
  font-size:1em;
  border-radius:3px;
  background:#fffdfd;
  /*! border:1px solid #e0e0e0; */
  /*! box-shadow:0 4px 8px 4px rgba(100,100,100,.15); */
  margin-top: -20px;
}

#paymentOptions h2{
  margin:0;
  padding:8px 10px 12px;
  font-size:1.1em;
  font-family:Montserrat;
  font-weight:normal;
}

#paymentOptions ul{
  list-style:none;
  margin:0;
  padding:0;
  padding-bottom:2px;
  margin-bottom:8px;
  /*! border-bottom:1px solid #b3e5fc; */
  padding: 0px !important;
  margin: 0px !important;
}

#paymentOptions li{
  padding:6px;
  /*! color:white; */
  /*! margin:8px 0; */
  cursor:pointer;
  transition:.218s ease;
  background:white;
  /*! border:1px solid #e0e0e0; */
  border-bottom: 1px solid #d2cece;
}

#paymentOptions li:first-child{
  margin-top:0;
}

#paymentOptions li:hover{
  color:rgba(188,188,188,.9);
}

#paymentOptions .remove{
  float:right;
  background:none;
  border:none;
  opacity:.5;
  padding:4px;
  font-size:.8em;
  color:#e91e63;
  cursor:pointer;
}

#paymentOptions .remove:hover{
  opacity:1;
}

#paymentOptions .remove:before{
  content:"\f00d";
  font-family:fontawesome;
}

#paymentOptions .radio{
  position:relative;
  margin-left:0px !important;
  float: left;
  margin: auto;
  /*! font-weight: bold; */
  /*! font-size: 17px; */
  /*! margin-top: 6px; */
}

#paymentOptions .radio input{
  position:absolute;
  height:100%;
  width:100%;
  top:0;
  left:0;
  right:0;
  bottom:0;
  opacity:0;
  z-index:2;
  cursor:pointer;
}

#paymentOptions .radio label{
  display:inline-block;
  vertical-align:top;
  float: left;
  margin-left: -48%;
  font-size: 20px;
  color: #988a84;
}

#paymentOptions .radio label:before{
  content:"\f10c";
  font-family:fontawesome;
  padding:4px;
}

#paymentOptions .radio input:checked + label:before{
  content:"\f05d";
  color:#ff6f38;
  font-size: 23px;
  float: left;
  margin: auto;
  /*! margin-left: -92%; */
  margin-top: 0px;
}

#paymentOptions .details{
  color:#424242;
  /*! font-weight: 600; */
  /*! font-family: Poppins; */
  font-weight: 400;
  font-size: 15px;
  line-height: 1.86;
  font-weight: bold;
  /*! float: left; */
}

#paymentOptions .details:before{
  font-family: fontawesome;
  margin-right: 1ch;
}

#paymentOptions .details.credit:before {
  /*! content: "\f09d"; */
}

#paymentOptions .details.ach:before {
  content: "\f19c";
}

#paymentOptions .details.paypal:before {
  content: "\f1ed";
}

#paymentOptions select{
  font-family:inherit;
  font-size:inherit;
  color:#616161;
  padding:8px;
  width:100%;
  border:inherit;
  cursor:pointer;
}

#paymentOptions select:focus{
  outline:0;
}
.accordion {
 margin-bottom:3rem
}
.card {
 border-radius:0;
 margin-bottom:0;
 border:none;
 border-top:.1rem solid #ebebeb
}
.card:last-child {
 /*! border-bottom:.1rem solid #ebebeb; */
}
.card-header {
 position:relative;
 padding:0;
 border:none;
 font-weight:700;
 line-height:1.5;
 background-color:transparent;
 margin:0
}
.card-header::after {
 display:block;
 clear:both;
 content:''
}
.card-title {
 font-size:1.8rem;
 line-height:1.2;
 margin-bottom:0
}
.card-title a {
 display:block;
 padding:1.7rem 4rem 1.7rem 1.2rem;
 position:relative;
 color:#c96;
 border:none;
 background-color:transparent;
 outline:none !important
}
.card-title a i {
 min-width:17px;
 margin-right:2.4rem
}
.card-title a:before {
 content:'\e802';
 display:inline-block;
 position:absolute;
 right:1.2rem;
 top:50%;
 color:#c96;
 font-family:"molla";
 line-height:1;
 transform:translateY(-50%);
 -ms-transform:translateY(-50%);
 transition:all 0.3s
}
.card-title a.collapsed {
 color:#333
}
.card-title a.collapsed:hover,
.card-title a.collapsed:focus {
 color:#c96
}
.card-title a.collapsed:before {
 content:'\f110';
 color:#8c8c8c;
 transform:translateY(-50%);
 -ms-transform:translateY(-50%)
}
.card-body {
 padding:.4rem 4rem 1.8rem 1.2rem;
 border:none;
 border-radius:0
}
.accordion-icon .card-body {
 padding-left:5.5rem !important
}
.accordion-plus .card-title a:before {
 content:'\f28e'
}
.accordion-plus .card-title a.collapsed:before {
 content:'\f2c2'
}
.accordion-rounded .card:first-child {
 border-radius:.3rem .3rem 0 0
}
.accordion-rounded .card:last-child {
 border-radius:0 0 .3rem .3rem
}
.card.card-box .card-title a {
 padding-left:2rem
}
.card.card-box .card-title a:before {
 right:2rem
}
.card.card-box .card-title a i {
 margin-right:1.4rem
}
.card.card-box .card-body {
 padding:1rem 2rem 2rem
}
.card.card-sm .card-title {
 font-size:1.6rem;
 letter-spacing:-.01em
}
.card.card-sm .card-title a {
 padding-top:2.1rem;
 padding-bottom:2.1rem
}
.card.card-sm .card-title a:before {
 right:2rem
}
.card.card-sm .card-body {
 padding:1rem 2rem 2rem
}
.card.bg-light,
.card.bg-white {
 background-color:#fff !important;
 border:.1rem solid #ebebeb
}
.card.bg-light .card-title a,
.card.bg-white .card-title a {
 background-color:#fff
}
.card.bg-light .card-title a.collapsed {
 background-color:#fafafa
}
@media screen and (min-width: 992px) {
 .card-title {
  font-size:2rem
 }
}
.nav-link:focus {
 outline:none !important
}
.nav.nav-tabs {
 border-bottom-right-radius:.3rem;
 border:.1rem solid #d7d7d7;
 border-top-width:0;
 border-right-width:0;
 border-left-width:0
}
.nav.nav-tabs .nav-link {
 color:#777;
 font-weight:500;
 font-size:1.4rem;
 line-height:1.5;
 letter-spacing:-.025em;
 padding:.85rem 2.2rem;
 border-top-left-radius:.3rem;
 border-top-right-radius:.3rem;
 text-align:center;
 transition:all .35s ease
}
.nav.nav-tabs .nav-link:hover,
.nav.nav-tabs .nav-link:focus {
 color:#c96;
 border-color:transparent
}
.nav.nav-tabs .nav-item+.nav-item {
 margin-left:.1rem
}
.nav.nav-tabs .nav-item.show .nav-link,
.nav.nav-tabs .nav-item .nav-link.active {
 color:#c96;
 border-color:#d7d7d7;
 border-bottom-color:transparent
}
.nav.nav-tabs.nav-tabs-bg .nav-link:not(.active) {
 border-color:#ebebeb  #ebebeb #d7d7d7 #ebebeb;
 background-color:#fafafa
}
.nav.nav-tabs.justify-content-center {
 border-bottom-left-radius:.3rem;
 border-bottom-right-radius:.3rem
}
.tab-content-border {
 border:.1rem solid #d7d7d7;
 border-radius:.3rem;
 border-top-left-radius:0;
 border-top-width:0
}
.justify-content-center+.tab-content-border {
 border-top-left-radius:.3rem
}
.tab-pane {
 padding:1.4rem 2.2rem
}
.tab-pane p:last-child {
 margin-bottom:0
}
.nav.nav-pills .nav-link {
 color:#777;
 font-weight:400;
 font-size:1.4rem;
 line-height:1.5;
 letter-spacing:-.01em;
 padding:.45rem 1rem;
 border-radius:0;
 text-align:center;
 text-transform:uppercase;
 border:none;
 border-bottom:.1rem solid transparent;
 background-color:transparent;
 transition:all .35s ease
}
.nav.nav-pills .nav-link:hover,
.nav.nav-pills .nav-link:focus {
 color:#c96
}
.nav.nav-pills .nav-link:focus {
 outline:none !important
}
.nav.nav-pills .nav-item+.nav-item {
 margin-left:1rem
}
.nav.nav-pills .nav-item.show .nav-link,
.nav.nav-pills .nav-item .nav-link.active {
 color:#c96;
 border-color:#d7d7d7;
 border-bottom-color:#c96
}
.nav-pills+.tab-content .tab-pane {
 padding:1.4rem 0
}
.nav-pills+.tab-content .tab-pane p:last-child {
 margin-bottom:0
}
.tabs-vertical {
 display:flex;
 align-items:flex-start;
 align-items:stretch
}
.tabs-vertical .tab-content-border {
 border-top-width:.1rem;
 border-left-width:0;
 border-bottom-left-radius:0
}
.tabs-vertical .nav {
 flex-shrink:0
}
.tabs-vertical .nav .nav-link {
 min-width:100px
}
.tabs-vertical .nav.nav-tabs {
 border-bottom-width:0;
 border-right-width:.1rem
}
.tabs-vertical .nav.nav-tabs .nav-link {
 border-top-left-radius:.3rem;
 border-top-right-radius:0;
 border-bottom-left-radius:.3rem
}
.tabs-vertical .nav.nav-tabs .nav-item {
 margin-bottom:0;
 margin-right:-1px
}
.tabs-vertical .nav.nav-tabs .nav-item+.nav-item {
 margin-left:0;
 margin-top:1px
}
.tabs-vertical .nav.nav-tabs .nav-item.show .nav-link,
.tabs-vertical .nav.nav-tabs .nav-item .nav-link.active {
 border-color:#d7d7d7;
 border-right-color:transparent
}
.tabs-vertical .nav.nav-tabs.nav-tabs-bg .nav-link:not(.active) {
 border-color:#ebebeb  #d7d7d7 #ebebeb  #ebebeb;
 background-color:#fafafa
}
.tab-content.tab-content-carousel>.tab-pane {
 display:block;
 visibility:hidden;
 height:0 !important
}
.tab-content.tab-content-carousel>.tab-pane:not(.active) {
 overflow:hidden !important
}
.tab-content.tab-content-carousel>.active {
 height:auto !important;
 visibility:visible
}
.nav.nav-border-anim .nav-link {
 position:relative;
 border-bottom:none
}
.nav.nav-border-anim .nav-link:before {
 content:'';
 display:block;
 position:absolute;
 left:0;
 bottom:0;
 width:100%;
 height:.1rem;
 background-color:#c96;
 transform-origin:right center;
 transform:scale(0, 1);
 transition:transform .3s ease
}
.form-tab .nav.nav-border-anim .nav-link:before {
 height:.2rem
}
.store {
  position: relative;
  border-radius: 0.5rem;
  overflow: hidden;
  margin-top: 10px;
}
.store .ratings-container {
  font-size: 1.3rem;
  margin-bottom: 0.5rem;
}
.store .store-banner img {
  height: 100%;
  width: 100%;
}

.store-content {
  position: absolute;
}

.store-title {
  display: flex;
  align-items: center;
  margin-bottom: 1.9rem;
  color: #fff;
}
.store-title a {
  display: inline-block;
  text-transform: capitalize;
  font-size: 2rem;
  line-height: 1;
  color: inherit;
  text-shadow: rgba(0, 0, 0, 0.8) 0 1px 0;
  font-weight: 600;
  letter-spacing: -0.025em;
  font-size: 15px !important;
  padding: 0px !important;
  margin: 0px !important;
}

.featured-label {
  background: <?php echo $tema['t8']; ?>;
  color: #fff;
  text-transform: uppercase;
  font-size: 1rem;
  font-weight: 600;
  padding: 0.2rem 1rem;
  box-shadow: 0px 0px 25px -5px #afafaf;
  border-radius: 0.3rem;
  margin-left: 1.4rem;
  display: inline-block;
}

.seller-info-list {
  margin: 0;
  padding-left: 1.6em;
}
.seller-info-list .store-address, .seller-info-list .store-phone {
  font-size: 1.4rem;
}
.seller-info-list > * {
  line-height: 1.6;
  letter-spacing: -0.025em;
  margin-bottom: 0.8rem;
  color: #fff;
  opacity: 0.8;
}
.seller-info-list > * a {
  color: inherit;
}
.seller-info-list > * i {
  margin-left: -2.2rem;
  margin-right: 0.3rem;
  vertical-align: middle;
  font-size: 1.5rem;
  line-height: 0;
}
.seller-info-list .store-phone:hover, .seller-info-list .store-email:hover {
  color: #f93;
}

.store-address {
  font-size: 1.3rem;
  color: #fff;
  opacity: 0.8;
  line-height: 1.8;
}

.store-rating, .store-open {
  color: #fff;
  opacity: 0.8;
}

.store-footer {
  position: relative;
  padding: 2.3rem 2rem;
}

.btn.btn-icon-right.btn-visit i {
  font-size: 2rem;
  margin-left: 0.4rem;
  margin-bottom: 0.4rem;
}

.seller-brand {
  border-radius: 50%;
  background-color: #ff9742;
  width: 8rem;
  height: 8rem;
}
.seller-brand img {
  border-radius: 50%;
  transition: transform 0.3s;
}

.vendor-brand {
  max-width: 15rem;
  margin: 0 auto;
  text-align: center;
}
.vendor-brand .brand {
  border: 1px solid #eee;
  border-radius: 50%;
  overflow: hidden;
  margin-bottom: 2.2rem;
  transition: box-shadow 0.3s;
}
.vendor-brand .vendor-name {
  font-size: 1.4rem;
  font-weight: 600;
  text-transform: uppercase;
  margin-bottom: 0;
  transition: color 0.3s;
}
.vendor-brand .vendor-name:hover {
  color: #336699;
}
.vendor-brand:hover .brand {
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
}

.store-grid {
  box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.08);
}
.store-grid .store-banner img {
  min-height: 19.4rem;
}
.store-grid .store-content {
  top: 2.5rem;
  left: 3rem;
  max-width: 19.2rem;
}
.store-grid .seller-brand {
  right: 1.9rem;
  top: -58%;
}
.store-grid:hover .seller-brand img {
  transform: translateY(-1rem);
}
.store-grid .store-title:hover {
  color: #336699;
}

.store-list {
  display: flex;
  border: 1px solid #eee;
}
.store-list .store-header {
  flex: 0 0 40rem;
  max-width: 40rem;
}
.store-list .store-header a {
  display: block;
  height: 100%;
}
.store-list .store-banner {
  height: 100%;
}
.store-list .store-content {
  position: relative;
}
.store-list .featured-label {
  position: absolute;
  top: 1.5rem;
  left: 1.5rem;
  margin-left: 0;
}
.store-list .store-content {
  display: flex;
  align-items: center;
  padding: 2rem 2rem 2rem 6rem;
}
.store-list .store-title {
  color: #333;
}
.store-list .store-title a {
  text-shadow: none;
}
.store-list .ratings-container {
  margin-bottom: 0.3rem;
}
.store-list .store-address {
  color: #666;
  opacity: 1;
  margin-bottom: 0.9rem;
}
.store-list .seller-brand {
  top: 50%;
  left: 0;
  transform: translate(-50%, -50%);
}
.store-list:hover .seller-brand img {
  transform: translateX(-1rem);
}

.store-grid .seller-brand,
.store-list .seller-brand {
  position: absolute;
}
.store-grid .seller-brand img,
.store-list .seller-brand img {
  width: calc(100% + 2px);
  height: calc(100% + 2px);
  max-width: calc(100% + 2px);
  margin: -1px;
  box-shadow: 0px 0px 0px 1px #eee;
}

.store.store-banner .store-media img {
  min-height: 44rem;
  width: 100%;
}
.store.store-banner .store-content {
  top: 0;
  left: 0;
  max-width: 34.5rem;
  padding: 5rem 4rem 5rem 5rem;
  background-color: rgba(37, 38, 42, 0.9);
  height: 100%;
}
.store.store-banner .seller-brand {
  margin-bottom: 2.3rem;
}
.store.store-banner .store-title {
  margin-bottom: 1.6rem;
  font-size: 2rem;
  letter-spacing: -0.025em;
}
.store.store-banner .social-icon {
  margin-right: 0.5rem;
  color: #fff;
  border-color: #ccc;
  opacity: 0.8;
}

.store-wcmp .store-content {
  left: 0;
  right: 0;
  bottom: 0;
  height: 30%;
  background-color: #20212491;
  display: flex;
  padding: 10px;
  width: 100% !important;
}
.store-wcmp .seller-brand {
  flex: 0 0 8rem;
  max-width: 8rem;
  margin-right: 2.2rem;
}
.store-wcmp .seller-date {
  /*! flex: 0 0 calc(100% - 10rem); */
  /*! max-width: calc(100% - 10rem); */
}
.store-wcmp .store-title {
  margin: 0.4rem 0 1.1rem;
  /*! margin-top: 15%; */
}
.store-wcmp .store-title a {
  font-size: 1.8rem;
}
.store-wcmp .store-title a:hover {
  text-decoration: underline;
}
.store-wcmp .seller-info-list {
  margin: 0;
  padding: 0px !important;
}
.store-wcmp .seller-info-list li {
  display: flex;
  margin-bottom: 0;
  letter-spacing: 0;
  opacity: 0.7;
}
.store-wcmp .seller-info-list li p {
  margin-bottom: 0;
  line-height: 2;
}
.store-wcmp .seller-info-list .store-address p {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
.store-wcmp .seller-info-list .store-rating p {
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
}
.store-wcmp .seller-info-list i {
  margin-top: 1.3rem;
  margin-right: 0.8rem;
  font-size: 1.4rem;
}
.store-wcmp .ratings-container {
  margin-top: 0.5rem;
  margin-bottom: 0;
}

.store-wcmp-banner .store-media img {
  width: 100%;
}
.store-wcmp-banner .store-content {
  left: 0;
  right: 0;
  bottom: 0;
  min-height: 40%;
  padding: 2rem;
  background: rgba(0, 0, 0, 0.6);
}
.store-wcmp-banner .seller-brand {
  margin: -7rem auto 2rem auto;
}
.store-wcmp-banner .social-icons {
  position: absolute;
  right: 2rem;
  top: -5rem;
}
.store-wcmp-banner .store-title {
  margin-bottom: 1rem;
  font-size: 2rem;
  justify-content: center;
}
.store-wcmp-banner .seller-info-list {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  padding-left: 0;
}
.store-wcmp-banner .seller-info-list > * {
  margin: 0 0.6rem;
  opacity: 0.6;
  text-align: center;
}
.store-wcmp-banner .seller-info-list > * i {
  margin-right: 0.4rem;
  margin-left: 0;
}

.store-wcmp-banner .seller-brand,
.store-wcfm-banner .seller-brand {
  width: 10rem;
  height: 10rem;
}
.store-wcmp-banner .seller-brand img,
.store-wcfm-banner .seller-brand img {
  width: calc(100% + 2px);
  height: calc(100% + 2px);
  max-width: calc(100% + 2px);
  margin: -1px;
}
.store-wcmp-banner .social-icon:not(:last-child),
.store-wcfm-banner .social-icon:not(:last-child) {
  margin-right: 0.5rem;
}
.store-wcmp-banner .social-icon,
.store-wcfm-banner .social-icon {
  border-radius: 0.3rem;
}

.store-wcfm-banner .store-content {
  left: 0;
  bottom: 0;
  width: 100%;
  background: rgba(34, 34, 34, 0.8);
  display: flex;
  align-items: center;
  min-height: 16rem;
  padding: 2.3rem 3rem 2.6rem;
}
.store-wcfm-banner .store-content-left {
  display: flex;
}
.store-wcfm-banner .personal-info {
  margin-right: 4rem;
}
.store-wcfm-banner .seller-brand {
  margin: -7.2rem 0 2rem;
}
.store-wcfm-banner .ratings-container {
  justify-content: center;
  font-size: 1.2rem;
}
.store-wcfm-banner .ratings-full {
  margin: 0;
}
.store-wcfm-banner .store-title {
  margin-bottom: 0.9rem;
  font-size: 2rem;
  font-weight: 600;
}
.store-wcfm-banner .seller-info-list {
  padding-left: 2.4rem;
}
.store-wcfm-banner .seller-info-list li {
  margin-bottom: 0.4rem;
  letter-spacing: 0;
}
.store-wcfm-banner .seller-info-list li i {
  margin: 0 0.4rem 0 -2.4rem;
  font-size: 1.4rem;
}
.store-wcfm-banner .store-content-right {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}
.store-wcfm-banner .btn-inquiry {
  margin-bottom: 3rem;
}

.btn-inquiry,
.btn-visit:not(.btn-link) {
  padding: 0.8em 1.6em;
  font-size: 1.3rem;
  background-color: #eee;
  border-color: #eee;
  color: #333;
  margin-right: 0.6rem;
}
.btn-inquiry:hover, .btn-inquiry:active, .btn-inquiry:focus,
.btn-visit:not(.btn-link):hover,
.btn-visit:not(.btn-link):active,
.btn-visit:not(.btn-link):focus {
  background-color: #333;
  border-color: #333;
  color: #fff;
}

.vendor-toolbox .vendor-search-toggle {
  margin-right: 1.5rem;
  padding: 0.73em 0.9em 0.86em;
  font-weight: 700;
}
.vendor-toolbox .vendor-search-toggle i {
  margin: 0 0.8rem 0 0;
  font-size: 1.5rem;
  font-weight: 600;
}
.vendor-toolbox .toolbox-left label {
  font-weight: 400;
  color: #333;
}
.vendor-toolbox .toolbox-layout {
  margin-left: 1.5rem;
}
.vendor-toolbox .btn-layout {
  color: #ccc;
}
.vendor-toolbox .btn-layout.icon-mode-list i {
  font-size: 2rem;
}

.vendor-search-wrapper {
  display: none;
  padding: 2rem;
  border-radius: 5px;
  box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.08);
  margin-top: 3.2rem;
}
.vendor-search-wrapper .vendor-search-form {
  display: flex;
}
.vendor-search-wrapper input {
  min-height: 3.8rem;
  height: 3.8rem;
  color: #777;
  border-radius: 0.3rem;
}
.vendor-search-wrapper input:focus {
  border-color: #8080809e;
}
.vendor-search-wrapper .btn {
  padding: 0.7em 1.65em;
}

.vendor-product-title {
  font-size: 1.4rem;
  font-weight: 600;
  padding: 1.9rem 1.5rem;
  border: 1px solid #eee;
  border-radius: 0.3rem;
}
.vendor-product-title a {
  color: #333;
}
.vendor-product-title a:hover {
  color: #336699;
}

.vendor-map {
  border: 1px solid #eee;
}

.google-map {
  height: 35rem;
  background-color: #98c3e5;
}

@media (max-width: 991px) {
.store-wcmp {
    height: 100%;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
  }
  .store-wcmp .store-content {
    display: block;
    position: relative;
    background: #fff;
  }
  .store-wcmp .seller-brand {
    margin-bottom: 2rem;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
  }
  .store-wcmp .seller-brand img {
    width: calc(100% + 2px);
    height: calc(100% + 2px);
    max-width: calc(100% + 2px);
    margin: -1px;
    border: 1px solid #eee;
  }
  .store-wcmp .seller-date {
    flex: auto;
    max-width: 100%;
  }
  .store-wcmp .store-title a {
    color: #336699;
    text-shadow: none;
  }
  .store-wcmp .store-address, .store-wcmp .store-rating {
    color: #333;
  }

  .store-wcfm-banner .store-content {
    display: block;
  }
  .store-wcfm-banner .store-content-right {
    align-items: flex-start;
    margin: 1rem 0 0 14rem;
  }
  .store-wcfm-banner .store-content-right .btn {
    margin-bottom: 1.5rem;
  }
}
@media (max-width: 767px) {
  .toolbox.vendor-toolbox {
    display: block;
  }

  .store-list .store-header {
    flex: 0 0 30rem;
    max-width: 30rem;
  }

  .store.store-banner .store-content {
    background: none;
    padding-left: 2rem;
    padding-right: 2rem;
    max-width: 27rem;
  }

  .store-wcmp-banner .social-icons {
    display: flex;
    justify-content: center;
    position: relative;
    top: auto;
    right: auto;
    margin-top: 1rem;
  }
}
@media (max-width: 575px) {
  .store-list {
    display: block;
  }
  .store-list .store-header {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .store-list .store-content {
    padding-left: 2rem;
  }
  .store-list .seller-brand {
    left: auto;
    transform: none;
    right: 2rem;
    top: -27%;
  }

  .store-wcfm-banner .store-content-left {
    display: block;
    text-align: center;
  }
  .store-wcfm-banner .personal-info {
    margin-right: 0;
  }
  .store-wcfm-banner .seller-brand {
    margin-right: auto;
    margin-left: auto;
  }
  .store-wcfm-banner .store-title {
    justify-content: center;
  }
  .store-wcfm-banner .store-content-right {
    align-items: center;
    margin-left: 0;
  }
}
@media (max-width: 479px) {
  .store-list .seller-brand {
    top: -22%;
    width: 7rem;
    height: 7rem;
  }
}


.entry-meta {
 background: #898585;
padding: 10px;
color: white;
  }
 .review {
  padding: 20px;
  }

textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input, .form-control, select {
    border-radius: 3px;
    background-color: #f7f5f5;
    border: none;
    color: #3d3d3d;
    padding: 9px;
    font-size: 12px;
    font-size: 13px;
    box-shadow: none !important;
    transition: all 0.3s ease;
    margin-top: 5px;
    margin-bottom: 10px;
}
 .page-content {
 width: 91%;
margin: auto;
 border: 1px solid #eee !important;
  }
  label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 0px;
    font-weight: 500;
}
.close {
    float: right;
    font-size: 21px;
    font-weight: 400;
    line-height: 1;
    color: #000;
 
  
}
h6 {
   
    font-weight: 500;
    font-size: 15px;
}

.container-megamenu.vertical .vertical-wrapper ul.megamenu > li.with-sub-menu > a .fa-angle-right {
    display: block !important;
    line-height: 30px;
}
.alert i {
    position: absolute;
    top: -7px;
    left: 1px;
    bottom: 0;
    text-align: center;
    /*! width: 60px; */
    font-size: 33px;
    -webkit-animation: alert-icon-anim 1s;
    background: none;
    -ms-animation: alert-icon-anim 1s;
    -o-animation: alert-icon-anim 1s;
    animation: alert-icon-anim 1s;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.15);
    /*! margin-right: 10px !important; */
    position: relative;
}
.btn-primary {
    color: #fff;
    background-color: <?php echo $tema['t8']; ?>;
    border-color: white !important;
}
.input-group-prepend .btn, .input-group-append .btn {
    position: relative;
    z-index: 2;
    height: 35px;
    top: 5px;
}
.table-shopping-cart .price {
    font-weight: bold;
    margin-right: 5px;
    display: block;
    font-weight: 500;
    font-size: 22px;
    font-family: Inter;
    font-size: 1.1rem;
    color: #a3a3a3;
    font-family: 'Poppins', sans-serif;
}
small, .small {
    font-size: 90%;
    font-weight: 400;
}
.text-danger {
    color: #fa3434 !important;
    background: white;
    font-weight: bold;
    font-size: 13px;
}
.table-shopping-cart .price {
    font-weight: bold;
    margin-right: 5px;
    display: block;
    font-weight: 500;
    font-size: 22px;
    font-family: Inter;
    font-size: 1.1rem;
    color: #a3a3a3;
    text-align: center;
}
.table-shopping-cart.table td, .table-shopping-cart.table th {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
    padding-top: 33px;
    vertical-align: middle;
}
@media screen and (max-device-width: 480px) and (orientation: portrait){
.table-shopping-cart.table th {
    max-width: 25% !important;
    float: left;
    padding: 5px !important;
    width: 20% !important;
    font-size: 10px !important;
}
.table-shopping-cart.table td, .table-shopping-cart.table th {
    padding-left: 10px;
    padding-right: 10px;
}

.urunduzen {
width: 50% !important;
float: left !important;
}

.urunduzenx {
width: 50% !important;
float: left !important;
}


.lib-two-img .img-1, .product-item-container .second_img .img-1, .best-seller .so-extraslider .extraslider-inner .item .item-wrap.style1 .media-left .item-image .lt-image .img-1, .products-list .product-layout .product-item-container .left-block .product-image-container.second_img .img-1 {
    opacity: 1;
    position: relative;
    transition: all 0.5s ease-in-out;
    width: 177px !important;
    height: 177px !important;
    max-height: 177px !important;
}


.products-list .product-grid .product-item-container .right-block .button-group {

    font-size: 14px !important;
    position: relative;
    /*! bottom: -28px !important; */
    visibility: visible !important;
    -webkit-opacity: 1 !important;
    -moz-opacity: 1 !important;
    -ms-opacity: 1 !important;
    -o-opacity: 1 !important;
    opacity: 1 !important;
    transition: all 0.3s ease-in-out 0s;
    background-color: #fff0;
    margin-top: -30px !important;
    padding-bottom: 25px !important;

}



.stories.carousel .story > .item-link > .item-preview {
    display: block;
    box-sizing: border-box;
    font-size: 0;
    max-height: 80px !important;
    height: 80px !important;
    overflow: auto;
    transition: transform .2s;
    width: 80px !important;
    margin-right: 5px !important;
}

.typeheader-1 .header-middle{
padding: 0px !important;
}



}
.fade:not(.show) {
    opacity: 1 !important;
}
.urunduzen {
width: 25%;
float: left;
}
.urunduzenx {
width: 20%;
float: left;
}
.back-to-top {
    cursor: pointer;
    z-index: 1000;
    background-color: #777;
    width: 43px;
    bottom: 74px  !important;
    right: 10px;
    height: 43px;
    line-height: 43px;
    overflow: hidden;
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
    transform: scale(1);
}
.stories.snapgram .story.seen {
    opacity: 1 !important;
}
.typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_cart, .typeheader-1 .header-bottom {
    background-color: <?php echo $tema['t8']; ?> !important;
}
</style>