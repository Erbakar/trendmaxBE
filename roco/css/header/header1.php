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
.typeheader-1 {
  /*! background: url(../../image/bg/bg-header1.jpg) no-repeat left 36px; */
  /*=====SEARCH ======*/
  /*BLOCK CART*/
  /*MENU MEGA*/
  /*-- MEGA MENU VERTICAL --*/   background-image: linear-gradient(270deg, <?php echo $tema['t37'];?>, <?php echo $tema['t40'];?>);
}
  .typeheader-1.navbar-compact {
    background-position: left 0; }
  .typeheader-1.navbar-compact .header-middle {
    padding: 10px 0;
    margin: 0; }
  .typeheader-1.navbar-compact .container-megamenu.horizontal ul.megamenu > li > a strong img {
    display: none; }
  .typeheader-1.navbar-compact .search-header-w {
    margin-top: 3px; }
  .typeheader-1 .header-top {
    color: #828282;
    background-color: #fff;
    font-size: 12px;
    min-height: 36px; }
  .typeheader-1 .header-top .module {
    display: table-cell;
    margin-bottom: 0; }
  .typeheader-1 .header-top .header-top-right {
    text-align: right; }
  .typeheader-1 .header-top .dropdown-menu li {
    line-height: 22px; }
  .typeheader-1 .header-top .header-top-right {
    display: inline-block; }
  .typeheader-1 .header-middle {
    clear: both;
    margin: 25px 0 16px 0; }
  .typeheader-1 .header-bottom {
    clear: both; }
  .typeheader-1 .header-bottom .container {
    position: relative; }
  .typeheader-1 .header-bottom .container .bottom3 {
    position: absolute;
    bottom: 8px;
    right: 0; }
  .typeheader-1 .telephone {
    float: right;
    font-size: 13px; }
  .typeheader-1 .telephone b {
    font-size: 14px;
    font-weight: 600; }
  .typeheader-1 .telephone ul li {
    display: inline-block;
    position: relative;
    list-style: outside none none;
    padding-left: 18px;
    margin-left: 18px;
    padding-right: 0; }
  .typeheader-1 .telephone ul li:after {
    background-color: rgba(255, 255, 255, 0.4);
    content: "";
    height: 11px;
    position: absolute;
    left: 0;
    top: 9px;
    width: 1px; }
  .typeheader-1 .telephone ul li a {
    color: #fff;
    text-transform: capitalize; }
    .typeheader-1 .telephone ul li a i {
      margin-right: 5px; }
  .typeheader-1 .lang-curr {
    float: right; }
  .typeheader-1 .signin-w {
    padding-left: 30px;
    float: right;
    color: #fff;
    font-size: 13px; }
  .typeheader-1 .signin-w ul li {
    float: left; }
  .typeheader-1 .signin-w ul li a {
    color: #fff; }
    .typeheader-1 .signin-w ul li a:hover {
      color: #222; }
  .typeheader-1 .welcome-msg {
    font-size: 12px;
    line-height: 36px;
    clear: both; 
    font-weight: 600;
}
  .typeheader-1 .wishlist-comp {
    float: right;
    margin-right: 20px; }
  .typeheader-1 .wishlist-comp li {
    width: 40px;
    height: 40px;
    list-style: none;
    float: left;
    padding-top: 8px;
    margin-left: 15px; }
  .typeheader-1 .wishlist-comp li.wishlist {
    margin-top: 3px; }
  .typeheader-1 .wishlist-comp li a i {
    font-size: 26px;
    color: #fff; }
  .typeheader-1 .wishlist-comp li a span {
    display: none; }
  .typeheader-1 .wishlist-comp li a.top-link-wishlist {
    width: 35px;
    height: 32px;
    text-align: center;
    overflow: hidden;
    display: block;
    text-indent: -999em; }
    .typeheader-1 .wishlist-comp li a.top-link-wishlist:before {
      font-family: 'FontAwesome';
      content: "\f004";
      font-size: 26px;
      color: #fff;
      display: block;
      text-indent: 0; }
    .typeheader-1 .wishlist-comp li a.top-link-wishlist:hover:before {
      color: #333; }
  .typeheader-1 .wishlist-comp li a:hover i {
    color: #333; }
  .typeheader-1 ul.top-link {
    list-style: none;
    margin: 0;
    vertical-align: top;
    display: inline-flex; }
  .typeheader-1 ul.top-link > li {
    position: relative;
    list-style: outside none none;
    padding-left: 20px;
    margin-left: 20px;
    padding-right: 0;
    font-size: 12px; 
    font-weight: 600;
}
  .typeheader-1 ul.top-link > li.language {
    min-height: 23px; }
  .typeheader-1 ul.top-link > li .btn-group {
    line-height: 35px; }
  .typeheader-1 ul.top-link > li .btn-group .btn-link {
    padding: 0;
    border: none;
    font-size: 12px; }
  .typeheader-1 ul.top-link > li .fa-caret-down {
    font-size: 12px; }
  .typeheader-1 ul.top-link > li:after {
    background-color: #d3d3d3;
    content: "";
    height: 11px;
    position: absolute;
    left: 0;
    top: 13px;
    width: 1px; }
  .typeheader-1 ul.top-link > li > a {
    font-size: 12px;
    padding-left: 3px; }
  .typeheader-1 ul.top-link > li.account {
    line-height: 35px; }
  .typeheader-1 ul.top-link > li.account > a {
    padding: 0;
    margin: 0; }
  .typeheader-1 ul.top-link > li.account:before {
    content: "\f007";
    font-family: FontAwesome;
    font-size: 12px; }
  .typeheader-1 ul.top-link > li.account .dropdown-menu {
    left: 0;
    right: auto; }
  .typeheader-1 ul.top-link > li.wishlist:before {
    content: "\f004";
    font-family: FontAwesome;
    font-size: 11px; }
  .typeheader-1 ul.top-link > li.account:hover ul.dropdown-link {
    top: 34px;
    z-index: 9999;
    opacity: 1;
    border-top: 1px solid rgba(200, 199, 199, 0.3); }
  .typeheader-1 ul.top-link > li.welcome-msg, .typeheader-1 ul.top-link > li:first-child {
    padding-left: 0px;
    margin-left: 0px; }
  .typeheader-1 ul.top-link > li.welcome-msg:after, .typeheader-1 ul.top-link > li:first-child:after {
    display: none; }
  .typeheader-1 #sosearchpro .search {
    position: relative;
    margin: 0;
    width: 100%;
    border-radius: 3px; }
  .typeheader-1 #sosearchpro .search .select_category {
    border: none;
    border-right: 1px solid #d7d7d7;
    background-color: #f5f5f5;
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px;
    width: 22%; }
  .typeheader-1 #sosearchpro .search .select_category select {
    height: 40px;
    line-height: 40px;
    color: #666;
    font-size: 12px;
    padding: 0 15px; }
  .typeheader-1 #sosearchpro .search .select_category select:hover {
    cursor: pointer; }
  .typeheader-1 #sosearchpro .search .select_category.icon-select:after {
    color: #999;
    background-color: #f5f5f5;
    font-size: 16px;
    line-height: 42px;
    right: 0;
    left: auto; }
  .typeheader-1 #sosearchpro .search button {
    position: absolute;
    top: 2px;
    right: 2px;
    height: 36px;
    text-align: center;
    line-height: 36px;
    padding: 0 35px;
    font-size: 14px;
    color: #fff;
    background-color: #222;
    border-radius: 0;
    text-transform: upper-case;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px; }
  .typeheader-1 #sosearchpro .search button i {
    font-size: 12px;
    color: #fff; }
  .typeheader-1 #sosearchpro .search button span {
    display: none; }
  .typeheader-1 #sosearchpro .search input {
    border: none;
    border-radius: 0px;
    border-bottom-right-radius: 4px;
    border-top-right-radius: 4px;
    background-color: #fff;
    z-index: 0;
    height: 40px;
    padding-left: 20px;
    font-size: 12px;
    width: 100%;
    background-color: #fff;
    color: #999; }
  .typeheader-1 #sosearchpro .search input::-moz-placeholder {
    color: #999;
    opacity: 1; }
  .typeheader-1 #sosearchpro .search input:-ms-input-placeholder {
    color: #999; }
  .typeheader-1 #sosearchpro .search input::-webkit-input-placeholder {
    color: #999; }
  .typeheader-1 #sosearchpro .search input:focus {
    z-index: 0; }
  .typeheader-1 .shopping_cart {
    float: right;
    position: relative;
    margin-top: 3px; }
  .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart {
    position: relative; }
  .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .icon-c {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    float: left;
    text-align: center;
    line-height: 40px;
    background-color: #fff; }
  .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .icon-c i {
    font-size: 18px; }
  @media (min-width: 991px) and (-webkit-min-device-pixel-ratio: 0) {
        .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .icon-c {
          padding-top: 3px; } }
  .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner {
    float: left;
    color: #fff;
    margin-left: 15px;
    margin-top: 8px; }
  .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .text-shopping-cart {
    font-size: 14px;
    font-weight: 600;
    margin-top: 0px;
    margin-bottom: 4px;
    line-height: 100%;
    text-transform: uppercase;
    padding-right: 5px; }
  .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart {
    font-size: 12px;
    float: left;
    line-height: 100%; }
    .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_cart2 {
      display: none; }
    .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_carts {
      color: #fff; }
    .typeheader-1 .shopping_cart .btn-shopping-cart .top_cart .shopcart-inner .total-shopping-cart .items_cart {
      width: 22px;
      height: 22px;
      line-height: 22px;
      text-align: center;
      border-radius: 100%;
      -moz-border-radius: 100%;
      -webkit-border-radius: 100%;
      position: absolute;
      top: -6px;
      left: 27px;
      font-size: 12px;
      color: #fff;
      background-color: #222; }
  .typeheader-1 .shopping_cart .dropdown-menu {
    top: 100%;
    right: -15px;
    left: auto;
    color: #666; }
  .typeheader-1 .shopping_cart .shoppingcart-box:before {
    right: 50px; }
  .typeheader-1 .megamenu-style-dev .navbar-default {
    background: transparent; }
  .typeheader-1 .container-megamenu.horizontal ul.megamenu > li > a {
    line-height: 100%;
    color: #fff; }
  .typeheader-1 .container-megamenu.horizontal ul.megamenu > li.item-special, .typeheader-1 .container-megamenu.horizontal ul.megamenu > li.item-purchase {
    display: none; }
  .typeheader-1 .container-megamenu.vertical {
    position: relative; }
  .typeheader-1 .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container {
    background-color: <?php echo $tema['t37'];?>; }
    .typeheader-1 .container-megamenu.vertical #menuHeading .megamenuToogle-pattern .container:after {
      font-family: 'FontAwesome';
      content: "\f107";
      font-size: 16px;
      color: #fff;
      position: absolute;
      right: 20px;
      top: 0;
      font-weight: 400; }
  @media (min-width: 992px) {
    .typeheader-1 .container-megamenu.vertical .vertical-wrapper {
      visibility: hidden;
      -webkit-opacity: 0;
      -moz-opacity: 0;
      -ms-opacity: 0;
      -o-opacity: 0;
      opacity: 0;
      transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -webkit-transition: all 0.2s ease-in-out 0s;
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
      transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -webkit-transition: all 0.2s ease-in-out 0s;
      top: 44px; } }

.common-home .typeheader-1 {
  margin-bottom: 30px; }

.common-home .typeheader-1 .container-megamenu.horizontal ul.megamenu > li.home > a {
  color: #222; }

.typeheader-1 .container-megamenu.horizontal ul.megamenu > li:hover > a, .typeheader-1 .container-megamenu.horizontal ul.megamenu > li.active > a, .typeheader-1 .container-megamenu.horizontal ul.megamenu > li.menu_active > a {
  color: #222; }

@media (min-width: 1200px) {
  .common-home .typeheader-1 .container-megamenu.vertical {
    position: relative; }
    .common-home .typeheader-1 .container-megamenu.vertical #menuHeading {
      margin: 0; }
      .common-home .typeheader-1 .container-megamenu.vertical #menuHeading .megamenuToogle-pattern {
        position: relative; }
    .common-home .typeheader-1 .container-megamenu.vertical .vertical-wrapper {
      visibility: visible;
      -webkit-opacity: 1;
      -moz-opacity: 1;
      -ms-opacity: 1;
      -o-opacity: 1;
      opacity: 1;
      transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -webkit-transition: all 0.2s ease-in-out 0s;
      top: 44px; }
    .common-home .typeheader-1 .container-megamenu.vertical:hover .vertical-wrapper {
      visibility: visible;
      -webkit-opacity: 1;
      -moz-opacity: 1;
      -ms-opacity: 1;
      -o-opacity: 1;
      opacity: 1;
      transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -webkit-transition: all 0.2s ease-in-out 0s;
      top: 44px; }

  .common-home .typeheader-1.navbar-compact .container-megamenu.vertical .vertical-wrapper {
    visibility: hidden;
    -webkit-opacity: 0;
    -moz-opacity: 0;
    -ms-opacity: 0;
    -o-opacity: 0;
    opacity: 0;
    transition: all 0.2s ease-in-out 0s;
    -moz-transition: all 0.2s ease-in-out 0s;
    -webkit-transition: all 0.2s ease-in-out 0s;
    top: 60px; }
    .common-home .typeheader-1.navbar-compact .container-megamenu.vertical:hover .vertical-wrapper {
      visibility: visible;
      -webkit-opacity: 1;
      -moz-opacity: 1;
      -ms-opacity: 1;
      -o-opacity: 1;
      opacity: 1;
      transition: all 0.2s ease-in-out 0s;
      -moz-transition: all 0.2s ease-in-out 0s;
      -webkit-transition: all 0.2s ease-in-out 0s;
      top: 44px; } }

@media (min-width: 1200px) and (max-width: 1649px) {
  .typeheader-1 .bottom1 {
    width: 21%; }
    .typeheader-1 .main-menu-w {
      width: 49%; }
    .typeheader-1 .bottom3 {
      width: 30%; }
    .typeheader-1 .container-megamenu.vertical .vertical-wrapper {
      margin-bottom: 30px; }
      .typeheader-1 .container-megamenu.vertical .vertical-wrapper ul.megamenu > a {
        padding-top: 12px;
        padding-bottom: 12px; }
        .typeheader-1 .container-megamenu.vertical .vertical-wrapper ul.megamenu .loadmore {
          padding-top: 12px;
          padding-bottom: 15px; }
          .typeheader-1 .container-megamenu.vertical .vertical-wrapper ul.megamenu .loadmore i {
            top: 12px; }
    .typeheader-1 #sosearchpro .search .select_category {
      width: 26%; } }

@media (min-width: 1366px) and (max-width: 1649px) {
  .typeheader-1 .telephone ul li:first-child {
    display: none; } }

.wrapper-boxed .typeheader-1 .telephone ul li:first-child {
  display: none; }
</style>