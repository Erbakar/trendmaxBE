<style>
/*

*/

/* 
-- Body
-- header
-- List Item
-- Cart Sidebar
-- List Page
-- checkout
-- My account
-- About Us
-- Detail Page
-- Footer
-- Mobile View
*/


/* Body */

@import url('https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap');
body {
	font-size: 14px;
	color: #000;
	font-family: 'Rubik', sans-serif;
}

.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
	font-weight: 400;
}

a {
	text-decoration: none !important;
	color: <?php echo $tema['t37'];?>;
	transition-duration: 0.4s;
}

a:hover {
	color: #000000;
	text-decoration: none;
}

img {
	transform-style: preserve-3d;
}

.text-danger {
	color: <?php echo $tema['t37'];?> !important;
}

::-webkit-scrollbar {
	width: 8px;
}

::-webkit-scrollbar-track {
	background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
	background: #888;
}

::-webkit-scrollbar-thumb:hover {
	background: #555;
}
.pbc-5 {
    padding-bottom: 32px !important;
}
.bg-b {
	background-color: #a9cff3;
}

.bg-r {
	background-color: #e0d2d1;
}

.btn {
	border-radius: 2px;
	font-size: 14px;
}

.btn-lg {
	/*! padding: 11px 26px; */
	font-size: 16px;
	font-weight: 500;
}

.btn-primary {
	/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/<?php echo $tema['t37'];?>+0,ff365d+100 */
	border-color: <?php echo $tema['t37'];?> !important;
	box-shadow: none;
	background: <?php echo $tema['t37'];?>;
	/* Old browsers */
	background: -moz-linear-gradient(-45deg, <?php echo $tema['t37'];?> 0%, #ff365d 100%);
	/* FF3.6-15 */
	background: -webkit-linear-gradient(-45deg, <?php echo $tema['t37'];?> 0%, #ff365d 100%);
	/* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(135deg, <?php echo $tema['t37'];?> 0%, #ff365d 100%);
	/* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $tema['t37'];?>', endColorstr='#ff365d', GradientType=1);
	/* IE6-9 fallback on horizontal gradient */
}

.btn-primary:hover,
.btn-primary:focus,
.btn-outline-primary:hover,
.btn-outline-primary:not(:disabled):not(.disabled).active,
.btn-outline-primary:not(:disabled):not(.disabled):active,
.show>.btn-outline-primary.dropdown-toggle {
	box-shadow: none !important;
	color: #fff !important;
	/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/<?php echo $tema['t37'];?>+0,ff365d+100 */
	background: <?php echo $tema['t37'];?>;
	/* Old browsers */
	background: -moz-linear-gradient(45deg, <?php echo $tema['t37'];?> 0%, #ff365d 100%);
	/* FF3.6-15 */
	background: -webkit-linear-gradient(45deg, <?php echo $tema['t37'];?> 0%, #ff365d 100%);
	/* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(45deg, <?php echo $tema['t37'];?> 0%, #ff365d 100%);
	/* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $tema['t37'];?>', endColorstr='#ff365d', GradientType=1);
	/* IE6-9 fallback on horizontal gradient */
}

.btn-outline-primary {
	color: <?php echo $tema['t37'];?> !important;
	border-color: <?php echo $tema['t37'];?> !important;
}

.form-control {
	font-size: 14px;
	border-radius: 2px;
}

.select2-container--default .select2-selection--single {
	background-color: #fff;
	border: 1px solid #ced4da;
	border-radius: 2px;
	width: 100%;
}

.select2-container .select2-selection--single {
	height: 35px;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
	line-height: 21px;
}

.select2-container .select2-selection--single .select2-selection__rendered {
	padding: 0.375rem 0.75rem;
	width: 150px !important;
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
	right: 8px;
	top: 5px;
}

.select2-container {
	width: 100% !important;
}

.select2-dropdown {
	border: medium none !important;
	border-radius: 0 !important;
	box-shadow: 0 4px 4px #dcdcdc !important;
}

input.select2-search__field {
	outline: none;
}

.modal-content {
	border: none;
}

.input-group-text,
.card,
.modal-content {
	border-radius: 2px;
}

.f-14 {
	font-size: 14px;
}

.f-12 {
	font-size: 12px;
}

.badge-danger {
	background-color: <?php echo $tema['t37'];?> !important;
}

.text-success-light {
	color: #abcd05;
}

.badge-success {
	background-color: #3c8002 !important;
}

.bg-light {
	background-color: #edf1f4 !important;
}

.owl-theme .owl-controls .owl-buttons div,
.footer-social a {
	transform: scale(1);
	transition-duration: 0.4s;
}

.owl-theme .owl-controls .owl-buttons div:hover,
.footer-social a:hover {
	transform: scale(1.09);
}


/* End Body */


/* Login */

.login-icons {
	border: none;
	border-radius: 2px;
	cursor: pointer;
	font-size: 14px;
	font-weight: 500;
	text-transform: uppercase;
}

.btn-facebook {
	background: #ffffff;
	color: #395b9a;
	border: 1px solid #395b9a;
}

.btn-facebook:hover {
	background: #395b9a;
	color: #fff;
}

.btn-google {
	background: #ffffff;
	color: #c71e25;
	border: 1px solid #c71e25;
}

.btn-google:hover {
	background: #c71e25;
	color: #fff;
}

.login-footer-tab .nav {
	border: none;
	display: inline-flex;
}

.login-footer-tab .nav-link {
	background: #ececec!important;
	border: none;
	border-radius: 2px!important;
	margin: 18px 4px 0px 4px;
	padding: 7px 20px;
}

.nav-tabs-login {
	right: 0px;
}

.nav-link-login {
	color: <?php echo $tema['t37'];?>;
	padding: 4px 9px;
	border: 1px solid <?php echo $tema['t37'];?>;
	font-size: 12px;
	margin: 4px -1px 0 0px;
	vertical-align: text-top;
}

.nav-link-login.active,
.nav-link-login:hover {
	background: <?php echo $tema['t37'];?>;
	color: #fff;
}

.close-top-right {
	right: 0;
	z-index: 99;
	top: -9px;
}


/* header */

.nav-osahan-pic {
	width: 32px;
	height: 32px;
	border: 3px solid #fff;
	box-shadow: 0px 0px 3px #ccc;
	position: relative;
	margin: -8px 5px -6px 0;
	vertical-align: text-top;
}

.main-nav .nav-link {
	padding: 28px 0px !important;
	margin: 0 0 0 20px;
}

.main-nav .navbar-light .navbar-nav .nav-link {
	color: #343a40;
	font-weight: 500;
}

.top-search .from-control {
	background: #f5f5f6 !important;
}

.main-nav-left .nav-link {
	font-size: 14px;
}

.top-search .form-control {
	background: #f5f5f6;
	border-color: #f5f5f6;
	font-size: 13px;
	width: 392px;
	height: 39px;
	border-radius: 3px;
	padding: 6px 6px 6px 47px;
	box-shadow: none;
	margin: 0px !important;
	transition-duration: 0.4s;
}

.top-search .form-control:hover,
.top-search .form-control:focus {
	background: #fff;
	border-color: #f5f5f6;
}

.top-search button.btn-link {
	background: none;
	border: none;
	color: #666666;
	font-size: 14px;
	left: 10px;
	position: absolute;
	text-decoration: none;
	top: 9px;
}

.top-search {
	position: relative;
	margin-left: 2%;
}

.cart-nav a.nav-link .badge {
	height: 16px;
	padding: 5px;
	min-width: 14px;
	border-radius: 50px;
	margin: 0;
	line-height: 8px;
}

.dropdown-menu {
	border-radius: 2px;
}

.dropdown-menu .dropdown-item {
	font-size: 13px;
	color: #666666;
	padding: 7px 18px;
}

.dropdown-menu .dropdown-item:hover,
.dropdown-menu .dropdown-item:focus {
	background-color: #f8f9fa;
}

.dropdown-menu .dropdown-item i {
	margin: 0 4px 0 0;
}

.mega-drop {
	left: 0;
	right: 0;
}

.mega-drop-main {
	position: inherit;
}

.mega-list a {
	font-size: 13px;
	padding: 7px 11px;
	color: #666666;
	display: block;
	width: 100%;
}

.mega-list a:hover {
	background-color: #f8f9fa;
	color: #000000;
}

.mega-list .mega-title {
	font-weight: 500;
	font-size: 14px;
	color: #000;
}

#owl-carousel-one img {
	width: 100%;
	border-radius: 5px !important;
	box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
}

.flickity-page-dots {
	bottom: 17px;
}

.flickity-page-dots .dot {
	width: 7px;
	height: 7px;
	margin: 0 3px;
}

.flickity-prev-next-button {
	height: 84px;
	border-radius: 0;
}

.flickity-prev-next-button.previous {
	left: 0;
}

.flickity-prev-next-button.next {
	right: 0;
}


/* End header */


/* Offer Block */

.offers-block {
	backface-visibility: hidden;
	overflow: hidden;
	position: relative;
}

.offers-block a {
	display: block;
}

.offers-block img {
	width: 100%;
}

.offers-block::before,
.offers-block::after {
	background: rgba(255, 255, 255, 0.3) none repeat scroll 0 0;
	content: "";
	position: absolute;
	transition: all 0.4s ease-out 0s;
}

.offers-block::before {
	height: 80px;
	left: 0;
	top: -80px;
	width: 100%;
}

.offers-block::after {
	height: 100%;
	left: -80px;
	top: 0;
	width: 80px;
}

.offers-block:hover::before {
	top: 100%;
}

.offers-block:hover::after {
	left: 100%;
}


/* End Offer Block */


/* List Item */

.list-item {
	background: #f4ffeb;
	border: none;
	border-radius: 0px;
	transition-duration: 0.4s;
	margin-bottom: 16px;
	position: relative;
}

.list-item a {
	text-decoration: none !important;
	transition-duration: 0.4s;
}

.list-item .badge {
	border-radius: 2px;
	font-size: 13px;
	font-weight: 400;
	position: absolute;
	top: 1.25rem;
	left: 1.25rem;
	z-index: 9;
	padding: 5px 9px;
}

.list-item .like-icon {
	position: absolute;
	right: 1.25rem;
	top: 1.25rem;
	z-index: 9;
}

.list-item .like-icon a {
	color: #bbbbbb;
	text-align: center;
	border-radius: 83px;
	height: 25px;
	line-height: 27px;
	font-size: 13px;
	width: 25px;
	display: block;
	opacity: 0.8;
	background: #fff;
	box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
}

.list-item .like-icon a.active,
.list-item .like-icon a:hover,
.list-item .like-icon a:focus {
	color: #E92424;
	opacity: unset;
}

.list-item .card-title {
	font-weight: 500;
	line-height: 22px;
	font-size: 14px;
	margin: 0px !important;
}

.stars-rating {
	margin: 0 0 6px 0;
	font-size: 12px;
}

.stars-rating i {
	margin: 0 4px 0 0px;
}

.list-item .card-body {
	padding: 15px;
}

.list-item .btn-success-light {
	background: #abcd05;
	color: #fff !important;
	border-radius: 2px;
	width: 38px;
	transition-duration: 0.4s;
	height: 38px;
	padding: 4px;
	text-align: center;
	font-size: 18px;
}

.list-item:hover .btn-success-light {
	background: #000000;
	transition-duration: 0.4s;
}

.owl-carousel-category .item {
	padding: 1px;
}


/* End List Item */


/* Cart Sidebar */

body.toggled {
	overflow: hidden;
}

body.toggled::after {
	background: #ffffff none repeat scroll 0 0;
	bottom: 0;
	content: "";
	left: 0;
	opacity: 0.8;
	position: absolute;
	right: 0;
	z-index: 9;
	top: 0;
}

.cart-sidebar {
	background: #fff none repeat scroll 0 0;
	overflow: auto;
	position: fixed;
	right: -400px;
	border-left: 1px solid #ececec;
	top: 0;
	width: 400px;
	z-index: 999999999999999;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
	height: 100vh;
}

.toggled .cart-sidebar {
	right: 0px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.cart-sidebar-body {
	height: calc(100vh - 233px);
	overflow: inherit;
}

.cart-sidebar-header {
	background: #ececec none repeat scroll 0 0;
	color: #000;
	padding: 18px 20px;
}

.cart-sidebar-header h5 {
	color: #000;
	font-size: 16px;
	line-height: 24px;
	margin: 0;
	font-weight: 500;
}

.cart-sidebar-header .float-right {
	background: #fff none repeat scroll 0 0;
	border-radius: 24px;
	color: #000;
	height: 26px;
	line-height: 25px;
	text-align: center;
	width: 26px;
	box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
}

.cart-list-product {
	border-bottom: 1px solid #ececec;
	overflow: hidden;
	padding: 1rem!important;
	position: relative;
}

.cart-list-product img {
	border-image: none;
	border-radius: 3px;
	background: #ffffff none repeat scroll 0 0;
	float: left;
	height: 90px;
	margin: 0 15px 0 0;
	object-fit: scale-down;
	width: 73px;
	padding: 3px;
	box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
}

.cart-list-product h5 a {
	font-size: 14px;
}

.cart-list-product h5 {
	margin: 0;
}

.cart-list-product h6 {
	font-size: 11px;
}

.remove-cart {
	position: absolute;
	right: 16px;
	top: 13px;
}

.cart-list-product .badge {
	border-radius: 2px;
	color: #ffffff;
	font-size: 11px;
	font-weight: 500;
	padding: 3px 6px;
}

.cart-sidebar-footer {
	background: #ececec none repeat scroll 0 0;
	padding: 14px 20px;
}

.cart-store-details p {
	margin: 0 0 3px;
}

.cart-store-details h6 {
	margin: 10px 0 19px;
}

.cart-sidebar-footer .btn {
	padding: 15px 17px;
}

.count-number .btn {
	border-radius: 2px;
	font-size: 11px;
	height: 18px;
	width: 18px;
	text-align: center;
	padding: 0 0 1px 0;
}

.count-number-input {
	width: 28px;
	text-align: center;
	vertical-align: middle;
	border: 1px solid #6c757d;
	margin: 0 -4px;
	height: 18px;
	font-size: 12px;
	z-index: 99;
	background: #fff;
}

.cart-list-product h5 a {
	font-weight: 400;
	color: #000000;
}

.quantity-text {
	margin: 3px 0 0 0;
}


/* End Cart Sidebar */


/* List Page */

.filters-search {
	position: relative;
}

.filters-search i {
	position: absolute;
	left: 12px;
	top: 13px;
}

.filters-search .form-control {
	padding-left: 34px;
}

.custom-checkbox .custom-control-label::before {
	border-radius: 2px;
}

.filters-card-body {
	padding: 18px 0 0 0;
}

.custom-checkbox label.custom-control-label,
.custom-radio label.custom-control-label {
	padding-top: 2px;
	cursor: pointer;
}

.filters-card-header a,
.filters-card-header a:hover {
	font-weight: 500;
	width: 100%;
	display: block;
	color: #000000;
}

.filters-card-header a i {
	margin: 2px -2px 0 0;
}


/* checkout */

.cart_product img {
	border-image: none;
	border-radius: 3px;
	background: #ffffff none repeat scroll 0 0;
	float: left;
	height: 90px;
	margin: 0 15px 0 0;
	object-fit: scale-down;
	width: 73px;
	padding: 3px;
	box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
}

.table td,
.table th {
	font-size: 13px;
}

select {
	border-radius: 2px !important;
}

.rounded-sm,
.rounded {
	border-radius: 2px !important;
	height: 470px;
	/*! object-fit: cover; */
}

.badge {
	border-radius: 2px;
	padding: 4px 7px;
}

.checkout-step .card-header {
	padding: 0px;
}

.checkout-step .card-header h2 {
	margin: 0px;
}

.checkout-step .card-header .btn {
	width: 100%;
	text-align: left;
	padding: 17px 20px;
	font-size: 17px;
	text-decoration: none;
	color: #000000!important;
	cursor: pointer;
	font-weight: 500;
}

.cart-table td {
	vertical-align: middle;
}

.cart-table td h6.product-name {
	margin: 0px;
	font-size: 14px;
}

.cart-table td hr {
	margin: 7px 0;
}

.osahan-payment .nav-link {
	padding: 18px 20px;
	border: none;
	font-weight: 500;
	color: #000000;
}

.osahan-payment .nav-link i {
	width: 28px;
	height: 28px;
	background: #ffffff;
	display: inline-block;
	text-align: center;
	line-height: 29px;
	font-size: 15px;
	border-radius: 50px;
	margin: 0 7px 0 0px;
	color: #000;
	box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
}

.osahan-payment .nav-link.active {
	background: #f3f7f8;
	color: #000000 !important;
}

.osahan-payment .nav-link.active i {
	background: #000000 !important;
	color: #fff;
}

.osahan-payment .tab-content {
	background: #f3f7f8;
	padding: 20px;
}


/* My account */

.osahan-account-page-left .nav-link {
	padding: 18px 20px;
	border: none;
	font-weight: 500;
	color: #000000;
}

.osahan-account-page-left .nav-link i {
	width: 28px;
	height: 28px;
	background: #fff;
	display: inline-block;
	text-align: center;
	line-height: 29px;
	font-size: 15px;
	border-radius: 50px;
	margin: 0 7px 0 0px;
	color: #000;
	box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
}

.osahan-account-page-left .nav-link.active {
	background: #f3f7f8;
	color: #282c3f !important;
}

.osahan-account-page-left .nav-link.active i {
	background: #282c3f !important;
	color: #ffffff !important;
}

.osahan-user-media img {
	width: 100px;
	height: 100px;
}


/* About Us */

.about-us .h5 {
	line-height: 29px;
}

.team-card img {
	width: 100px;
	border-radius: 50px;
}

.help-block li {
	color: red;
	list-style: none;
}

.help-block ul {
	margin: 0px;
	padding: 0px;
}


/* Detail Page */

.price-box {
	background: rgba(207, 207, 207, 0.08) none repeat scroll 0 0;
	border-bottom: 1px solid rgba(204, 204, 204, 0.4);
	border-top: 1px solid rgba(204, 204, 204, 0.4);
	margin: 17px -24px;
	padding: 9px 25px;
}

.product-desc-price {
	color: #6c757d;
	text-decoration: line-through;
}

.price-box .product-price {
	font-size: 28px;
	font-weight: 400;
	margin: 0 3px;
}

.stars-rating i.active {
	color: #ffc315;
	letter-spacing: -3px;
}

.stars-rating i {
	color: #e9e9e9;
}

.product-variation {
	background: rgba(207, 207, 207, 0.08) none repeat scroll 0 0;
	border-bottom: 1px solid rgba(204, 204, 204, 0.4);
	border-top: 1px solid rgba(204, 204, 204, 0.4);
	margin: 22px -24px;
	overflow: hidden;
	padding: 19px 25px;
}

.quantity-input {
	display: inline-flex;
	vertical-align: top;
	width: 120px;
}

.input-number {
	padding: 23px 0;
	border: 1px solid #6c757d;
	margin: 0 -1px;
}

.btn-number {
	padding: 11px 8px;
}

#sync1 .owl-item img {
	height: 458px;
	margin: auto;
	padding: 0;
	object-fit: scale-down;
}

#sync1 .owl-item {
	text-align: center;
}

#sync2 .owl-item .item {
	margin: 2px;
	box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
}

#sync2 .owl-item img {
	border: 2px solid #fff;
	border-radius: 2px;
	overflow: hidden;
	padding: 8px;
	cursor: pointer;
}

#sync2 .owl-item img:hover,
#sync2 .synced img {
	border: 2px solid <?php echo $tema['t37'];?>;
	background-color: #fff;
}

.favourite-icon a {
	background: #fe4949 none repeat scroll 0 0;
	border-radius: 22px;
	color: #ffffff;
	padding: 8px 10px;
	font-weight: 500;
}

.favourite-icon a i {
	color: #ffffff;
}

.favourite-icon a:hover {
	background: #ff0000 none repeat scroll 0 0;
}

.favourite-icon {
	position: absolute;
	right: 1.5rem!important;
	top: 1.5rem!important;
	z-index: 1;
}

.reviews-card .d-flex {
	height: 50px;
	width: 50px;
}

.shop-single-detail .nav-pills .nav-link.active,
.shop-single-detail .nav-pills .show>.nav-link {
	color: #fff;
	background-color: <?php echo $tema['t37'];?>;
}


/* Footer */

footer li {
	line-height: 26px;
}

footer li a {
	color: #666666;
}

footer li a:hover {
	color: #000000;
}

.popular-tag p a {
	color: #666666;
	font-size: 13px;
}

.popular-tag p a:hover {
	color: #000000;
}

.popular-tag p {
	font-size: 9px;
	line-height: 22px;
}

.footer-social a {
	background: #f1f1f1 none repeat scroll 0 0;
	border-radius: 34px;
	color: #000000;
	display: inline-block;
	height: 30px;
	line-height: 29px;
	text-align: center;
	width: 30px;
	text-decoration: none;
	border: none;
}

.footer-social a:hover {
	background: #000000 none repeat scroll 0 0;
	color: #ffffff;
	transform: scale(1.09);
}

.app img {
	width: 119px;
	margin: 0 6px 0 0px;
}

.footer-fix-nav {
    position: fixed;
    bottom: 0;
	left: 0;
	display: none;
	z-index: 99;
    right: 0;
    background: #fff;
    text-align: center;
}

.footer-fix-nav a {
    font-size: 20px;
    padding: 16px 13px;
    display: block;
    color: #333;
}

.footer-fix-nav .col {
    margin: 0px;
    padding: 0px;
    border-right: 1px solid #edf1f4;
    height: 61px;
}

.footer-fix-nav .col:last-child {
    border: none;
}

.footer-fix-nav .col.active a:hover, .footer-fix-nav .col.active a:focus{
	background: #000000 !important;
}

.footer-fix-nav .col.active a {color: #fff;font-size: 35px;padding: 11px;border-radius: 50px;


	background: linear-gradient(234deg, <?php echo $tema['t37'];?>, #ff365d);
background-size: 400% 400%;

-webkit-animation: gradient-bg 0s ease infinite;
-moz-animation: gradient-bg 0s ease infinite;
-o-animation: gradient-bg 0s ease infinite;
animation: gradient-bg 0s ease infinite;

}



@-webkit-keyframes gradient-bg {
    0%{background-position:19% 0%}
    50%{background-position:82% 100%}
    100%{background-position:19% 0%}
}
@-moz-keyframes gradient-bg {
    0%{background-position:19% 0%}
    50%{background-position:82% 100%}
    100%{background-position:19% 0%}
}
@-o-keyframes gradient-bg {
    0%{background-position:19% 0%}
    50%{background-position:82% 100%}
    100%{background-position:19% 0%}
}
@keyframes gradient-bg {
    0%{background-position:19% 0%}
    50%{background-position:82% 100%}
    100%{background-position:19% 0%}
}




.footer-fix-nav .col.active {
    margin: -13px 0 0 0;
    height: auto !important;
    border: none;
}

/* End footer */


/* Mobile Media */


/* Extra small devices (portrait phones, less than 576px) */

@media (max-width: 575.98px) {
	.col,
	.col-1,
	.col-10,
	.col-11,
	.col-12,
	.col-2,
	.col-3,
	.col-4,
	.col-5,
	.col-6,
	.col-7,
	.col-8,
	.col-9,
	.col-auto,
	.col-lg,
	.col-lg-1,
	.col-lg-10,
	.col-lg-11,
	.col-lg-12,
	.col-lg-2,
	.col-lg-3,
	.col-lg-4,
	.col-lg-5,
	.col-lg-6,
	.col-lg-7,
	.col-lg-8,
	.col-lg-9,
	.col-lg-auto,
	.col-md,
	.col-md-1,
	.col-md-10,
	.col-md-11,
	.col-md-12,
	.col-md-2,
	.col-md-3,
	.col-md-4,
	.col-md-5,
	.col-md-6,
	.col-md-7,
	.col-md-8,
	.col-md-9,
	.col-md-auto,
	.col-sm,
	.col-sm-1,
	.col-sm-10,
	.col-sm-11,
	.col-sm-12,
	.col-sm-2,
	.col-sm-3,
	.col-sm-4,
	.col-sm-5,
	.col-sm-6,
	.col-sm-7,
	.col-sm-8,
	.col-sm-9,
	.col-sm-auto,
	.col-xl,
	.col-xl-1,
	.col-xl-10,
	.col-xl-11,
	.col-xl-12,
	.col-xl-2,
	.col-xl-3,
	.col-xl-4,
	.col-xl-5,
	.col-xl-6,
	.col-xl-7,
	.col-xl-8,
	.col-xl-9,
	.col-xl-auto {
		padding-right: 5px;
		padding-left: 5px;
	}
	.carousel-cell, .carousel-cell img {
        width: 100% !important;
        border-radius: 0px !important;
    }
	.row {
		margin-right: -5px;
		margin-left: -5px;
	}
	.no-gutters {
		margin-right: 0;
		margin-left: 0;
	}
	.container,
	.container-fluid {
		padding-right: 10px;
		padding-left: 10px;
	}
	.osahan-account-page-left {
        margin-bottom: 13px;
        height: auto !important;
    }
	.osahan-cart-item {
        margin: 19px 0 0 0;
    }
	.login-with-sites .btn-lg {
       padding-left: 15px;
       padding-right: 15px;
    }
    .cart-sidebar-footer .btn {
       padding: 15px 17px;
       font-size: 14px;
    }
	.main-nav .navbar {
        padding: 6px 10px !important;
    }
    .popular-tag.py-5 {
        padding: 1rem 0 !important;
    }
	.login-modal-left {
		display: none;
	}
	.header-top {
		display: none;
	}
	.navbar-toggler {
		padding: 4px 6px;
		border-radius: 2px;
	}
	.top-search .form-control {
		width: 100%;
	}
	.main-nav .nav-link {
		padding: 12px 0px !important;
		margin: 0px !important;
		text-align: center;
		border-bottom: 1px solid #eaeaea;
	}
	.offers-block img {
        margin: 3px 0px !important;
        border-radius: 2px;
	}
	div#sync2 {
		display: none !important;
	}
	h4 {
		font-size: 20px;
	}
	.cart-sidebar {
		width: 100%;
		right: -100%;
	}
	.pb-5,
	.py-5 {
		padding-bottom: 1rem!important;
	}
	.pt-5,
	.py-5 {
		padding-top: 1rem!important;
	}
	.card {
		margin-bottom: 12px !important;
	}
	footer .border-right {
		padding: 1rem 0 !important;
		border-bottom: 1px solid #e4e7eb;
		border-right: none !important;
	}
	footer .py-5.pl-5 {
		padding: 1rem 0 !important;
	}
	.about-us img.rounded.img-fluid.shadow {
		margin-bottom: 37px;
	}
	.section-title br {
		display: none;
	}
	.section-title {
		padding: 0 15px;
	}
	.osahan-payment .pr-0 {
		padding: 0px !important;
	}
	.osahan-payment .pl-0 {
		padding: 0px !important;
	}
	.product-color-size-area .btn-group.btn-group-toggle.float-right {
		float: none !important;
		margin: 6px 0 0 0;
	}
	.product-variation .float-right {
		float: none !important;
		margin: 9px 0 0 0;
		display: block;
	}
	.copyright {
		text-align: center;
	}
	.team-card {
		margin-bottom: 8px;
	}
	.copyright .text-right,
	.inner-header,
	.inner-header .text-right {
		text-align: center !important;
	}
	.copyright .d-flex {
		display: unset !important;
	}
	.list-item .card-body {
    	padding: 10px;
    }
    .list-item .badge {
    	top: 10px;
   		left: 10px;
    }
    .list-item .like-icon {
    	right: 10px;
    	top: 10px;
	}
	.list-item .card-title {
    	line-height: 17px;
    	font-size: 13px;
	}
	.f-14 {
    	font-size: 13px;
	}
	#sync1 .owl-item img {
	    height: auto;
	}
	.p-4 {
    	padding: 15px !important;
	}
	.price-box {
	    margin: 17px -15px;
    	padding: 9px 15px;
	}
	.pbc-5 {
    	padding-bottom: 9px !important;
	}
	.mb-4, .my-4 {
    	margin-bottom: 1rem!important;
	}
	.product-variation {
    	margin: 22px -15px;
    	padding: 19px 15px;
	}
	.product-name h2 {
	    font-size: 20px;
	}
	.price-box .product-price {
	    font-size: 18px;
	}
	.product-desc-price {
	    font-size: 14px;
	}
	.osahan-account-page-left .nav-link {
    	padding: 10px 15px;
	}
	div#DataTables_Table_0_wrapper {
    	padding: 0;
	}
	.checkout-step .card-header .btn, .card-body, .osahan-payment .tab-content, .osahan-payment .nav-link {
    	padding: 1rem!important;
	}
	.section-title {
    	margin-bottom: 10px !important;
	}
	.section-title h2 {
    	font-size: 22px;
	}
	.navbar-toggler {
		display: none;
	}
	.hc-nav-trigger.hc-nav-1, .hc-nav-trigger{
		display: block !important;
	}
	.footer-fix-nav {
		display: block;
	}
	body {
		padding-bottom: 61px;
	}
}


/* Small devices (landscape phones, 576px and up) */

@media (min-width: 576px) and (max-width: 767.98px) {
	.col,
	.col-1,
	.col-10,
	.col-11,
	.col-12,
	.col-2,
	.col-3,
	.col-4,
	.col-5,
	.col-6,
	.col-7,
	.col-8,
	.col-9,
	.col-auto,
	.col-lg,
	.col-lg-1,
	.col-lg-10,
	.col-lg-11,
	.col-lg-12,
	.col-lg-2,
	.col-lg-3,
	.col-lg-4,
	.col-lg-5,
	.col-lg-6,
	.col-lg-7,
	.col-lg-8,
	.col-lg-9,
	.col-lg-auto,
	.col-md,
	.col-md-1,
	.col-md-10,
	.col-md-11,
	.col-md-12,
	.col-md-2,
	.col-md-3,
	.col-md-4,
	.col-md-5,
	.col-md-6,
	.col-md-7,
	.col-md-8,
	.col-md-9,
	.col-md-auto,
	.col-sm,
	.col-sm-1,
	.col-sm-10,
	.col-sm-11,
	.col-sm-12,
	.col-sm-2,
	.col-sm-3,
	.col-sm-4,
	.col-sm-5,
	.col-sm-6,
	.col-sm-7,
	.col-sm-8,
	.col-sm-9,
	.col-sm-auto,
	.col-xl,
	.col-xl-1,
	.col-xl-10,
	.col-xl-11,
	.col-xl-12,
	.col-xl-2,
	.col-xl-3,
	.col-xl-4,
	.col-xl-5,
	.col-xl-6,
	.col-xl-7,
	.col-xl-8,
	.col-xl-9,
	.col-xl-auto {
		padding-right: 5px;
		padding-left: 5px;
	}
	.carousel-cell, .carousel-cell img {
        width: 100% !important;
        border-radius: 0px !important;
    }
	.row {
		margin-right: -5px;
		margin-left: -5px;
	}
	.no-gutters {
		margin-right: 0;
		margin-left: 0;
	}
	.container,
	.container-fluid {
		padding-right: 10px;
		padding-left: 10px;
	}
	.main-nav .navbar {
        padding: 6px 10px !important;
    }
    .popular-tag.py-5 {
        padding: 2rem 0 !important;
    }
	.login-modal-left {
		display: none;
	}
	.container {
		max-width: 100%;
	}
	.header-top {
		display: none;
	}
	.navbar-toggler {
		padding: 4px 6px;
		border-radius: 2px;
	}
	.top-search .form-control {
		width: 100%;
	}
	.main-nav .nav-link {
		padding: 12px 0px !important;
		margin: 0px !important;
		text-align: center;
		border-bottom: 1px solid #eaeaea;
	}
	.offers-block img {
		margin: 3px 0px !important;
        border-radius: 2px;
	}
	div#sync2 {
		display: none !important;
	}
	.pb-5,
	.py-5 {
		padding-bottom: 2rem!important;
	}
	.pt-5,
	.py-5 {
		padding-top: 2rem!important;
	}
	.card {
		margin-bottom: 12px !important;
	}
	footer .border-right {
		padding: 2rem 0 !important;
		border-bottom: 1px solid #e4e7eb;
		border-right: none !important;
	}
	footer .py-5.pl-5 {
		padding: 2rem 0 !important;
	}
	.about-us img.rounded.img-fluid.shadow {
		margin-bottom: 37px;
	}
	.section-title br {
		display: none;
	}
	.section-title {
		padding: 0 15px;
	}
	.osahan-payment .pr-0 {
		padding-right: 15px !important;
	}
	.osahan-payment .pl-0 {
		padding-left: 15px !important;
	}
	.product-color-size-area .btn-group.btn-group-toggle.float-right {
		float: none !important;
		margin: 6px 0 0 0;
	}
	.product-variation .float-right {
		float: none !important;
		margin: 9px 0 0 0;
		display: block;
	}
	.copyright {
		text-align: center;
	}
	.team-card {
		margin-bottom: 27px;
	}
	.copyright .text-right,
	.inner-header,
	.inner-header .text-right {
		text-align: center !important;
	}
	.copyright .d-flex {
		display: unset !important;
	}
	.navbar-toggler {
		display: none;
	}
	.hc-nav-trigger.hc-nav-1, .hc-nav-trigger{
		display: block !important;
	}
	.footer-fix-nav {
		display: block;
	}
	body {
		padding-bottom: 61px;
	}
}


/* Medium devices (tablets, 768px and up) */

@media (min-width: 768px) and (max-width: 991.98px) {
	.col,
	.col-1,
	.col-10,
	.col-11,
	.col-12,
	.col-2,
	.col-3,
	.col-4,
	.col-5,
	.col-6,
	.col-7,
	.col-8,
	.col-9,
	.col-auto,
	.col-lg,
	.col-lg-1,
	.col-lg-10,
	.col-lg-11,
	.col-lg-12,
	.col-lg-2,
	.col-lg-3,
	.col-lg-4,
	.col-lg-5,
	.col-lg-6,
	.col-lg-7,
	.col-lg-8,
	.col-lg-9,
	.col-lg-auto,
	.col-md,
	.col-md-1,
	.col-md-10,
	.col-md-11,
	.col-md-12,
	.col-md-2,
	.col-md-3,
	.col-md-4,
	.col-md-5,
	.col-md-6,
	.col-md-7,
	.col-md-8,
	.col-md-9,
	.col-md-auto,
	.col-sm,
	.col-sm-1,
	.col-sm-10,
	.col-sm-11,
	.col-sm-12,
	.col-sm-2,
	.col-sm-3,
	.col-sm-4,
	.col-sm-5,
	.col-sm-6,
	.col-sm-7,
	.col-sm-8,
	.col-sm-9,
	.col-sm-auto,
	.col-xl,
	.col-xl-1,
	.col-xl-10,
	.col-xl-11,
	.col-xl-12,
	.col-xl-2,
	.col-xl-3,
	.col-xl-4,
	.col-xl-5,
	.col-xl-6,
	.col-xl-7,
	.col-xl-8,
	.col-xl-9,
	.col-xl-auto {
		padding-right: 5px;
		padding-left: 5px;
	}
	.row {
		margin-right: -5px;
		margin-left: -5px;
	}
	.no-gutters {
		margin-right: 0;
		margin-left: 0;
	}
	.carousel-cell, .carousel-cell img {
        width: 100% !important;
        border-radius: 0px !important;
    }
	.container,
	.container-fluid {
		padding-right: 10px;
		padding-left: 10px;
	}
	.main-nav .navbar {
        padding: 6px 10px !important;
    }
	.card-body,
	.filters-card.border-bottom.p-4,
	.filters-header,
	.osahan-account-page-left .p-4.bg-success {
		padding: 12px !important;
	}
	.osahan-account-page-left .nav-link,
	.osahan-account-page-right {
		padding: 12px !important;
	}
	.login-modal-left {
		display: none;
	}
	.table td,
	.table th {
		font-size: 12px;
		padding: 4px;
	}
	footer .border-right {
		padding-right: 5px !important;
		padding-left: 5px !important;
		border-right: none !important;
	}
	footer .py-5.pl-5 {
		padding-right: 5px !important;
		padding-left: 5px !important;
	}
	body {
		font-size: 12px;
	}
	.container {
		max-width: 100%;
	}
	.navbar-toggler {
		padding: 4px 6px;
		border-radius: 2px;
	}
	.top-search .form-control {
		width: 100%;
	}
	.main-nav .nav-link {
		padding: 12px 0px !important;
		margin: 0px !important;
		text-align: center;
		border-bottom: 1px solid #eaeaea;
	}
	.navbar-toggler {
		display: none;
	}
	.hc-nav-trigger.hc-nav-1, .hc-nav-trigger{
		display: block !important;
	}
	.footer-fix-nav {
		display: block;
	}
	body {
		padding-bottom: 61px;
	}
}


/* Large devices (desktops, 992px and up) */

@media (min-width: 992px) and (max-width: 1199.98px) {
	.col,
	.col-1,
	.col-10,
	.col-11,
	.col-12,
	.col-2,
	.col-3,
	.col-4,
	.col-5,
	.col-6,
	.col-7,
	.col-8,
	.col-9,
	.col-auto,
	.col-lg,
	.col-lg-1,
	.col-lg-10,
	.col-lg-11,
	.col-lg-12,
	.col-lg-2,
	.col-lg-3,
	.col-lg-4,
	.col-lg-5,
	.col-lg-6,
	.col-lg-7,
	.col-lg-8,
	.col-lg-9,
	.col-lg-auto,
	.col-md,
	.col-md-1,
	.col-md-10,
	.col-md-11,
	.col-md-12,
	.col-md-2,
	.col-md-3,
	.col-md-4,
	.col-md-5,
	.col-md-6,
	.col-md-7,
	.col-md-8,
	.col-md-9,
	.col-md-auto,
	.col-sm,
	.col-sm-1,
	.col-sm-10,
	.col-sm-11,
	.col-sm-12,
	.col-sm-2,
	.col-sm-3,
	.col-sm-4,
	.col-sm-5,
	.col-sm-6,
	.col-sm-7,
	.col-sm-8,
	.col-sm-9,
	.col-sm-auto,
	.col-xl,
	.col-xl-1,
	.col-xl-10,
	.col-xl-11,
	.col-xl-12,
	.col-xl-2,
	.col-xl-3,
	.col-xl-4,
	.col-xl-5,
	.col-xl-6,
	.col-xl-7,
	.col-xl-8,
	.col-xl-9,
	.col-xl-auto {
		padding-right: 8px;
		padding-left: 8px;
	}
	.row {
		margin-right: -8px;
		margin-left: -8px;
	}
	.no-gutters {
		margin-right: 0;
		margin-left: 0;
	}
	.container,
	.container-fluid {
		padding-right: 8px;
		padding-left: 8px;
	}
	.card-body,
	.filters-card.border-bottom.p-4,
	.filters-header,
	.osahan-account-page-left .p-4.bg-success {
		padding: 12px !important;
	}
	.osahan-account-page-left .nav-link,
	.osahan-account-page-right {
		padding: 12px !important;
	}
	.table td,
	.table th {
		font-size: 12px;
		padding: 10px;
	}
	footer .border-right {
		padding-right: 8px !important;
		padding-left: 8px !important;
		border-right: none !important;
	}
	footer .py-5.pl-5 {
		padding-right: 8px !important;
		padding-left: 8px !important;
	}
	body {
		font-size: 12px;
	}
	.main-nav-left .nav-link {
		font-size: 12px;
	}
	.main-nav .nav-link {
		margin: 0 0 0 14px;
	}
	.navbar {
		padding-right: 10px !important;
		padding-left: 10px !important;
	}
	.top-search .form-control {
		font-size: 13px;
		width: 277px;
	}
	.top-search .form-control {
		padding: 6px 6px 6px 36px;
	}
	.top-search button.btn-link {
		left: 7px;
		top: 8px;
	}
	.container {
		max-width: 100%;
	}
	.container,
	.container-fluid {
		padding-right: 10px;
		padding-left: 10px;
	}
}


/* Extra large devices (large desktops, 1200px and up) */

@media (min-width: 1200px) {
	.container {
		max-width: 1280px;
	}
	.col,
	.col-1,
	.col-10,
	.col-11,
	.col-12,
	.col-2,
	.col-3,
	.col-4,
	.col-5,
	.col-6,
	.col-7,
	.col-8,
	.col-9,
	.col-auto,
	.col-lg,
	.col-lg-1,
	.col-lg-10,
	.col-lg-11,
	.col-lg-12,
	.col-lg-2,
	.col-lg-3,
	.col-lg-4,
	.col-lg-5,
	.col-lg-6,
	.col-lg-7,
	.col-lg-8,
	.col-lg-9,
	.col-lg-auto,
	.col-md,
	.col-md-1,
	.col-md-10,
	.col-md-11,
	.col-md-12,
	.col-md-2,
	.col-md-3,
	.col-md-4,
	.col-md-5,
	.col-md-6,
	.col-md-7,
	.col-md-8,
	.col-md-9,
	.col-md-auto,
	.col-sm,
	.col-sm-1,
	.col-sm-10,
	.col-sm-11,
	.col-sm-12,
	.col-sm-2,
	.col-sm-3,
	.col-sm-4,
	.col-sm-5,
	.col-sm-6,
	.col-sm-7,
	.col-sm-8,
	.col-sm-9,
	.col-sm-auto,
	.col-xl,
	.col-xl-1,
	.col-xl-10,
	.col-xl-11,
	.col-xl-12,
	.col-xl-2,
	.col-xl-3,
	.col-xl-4,
	.col-xl-5,
	.col-xl-6,
	.col-xl-7,
	.col-xl-8,
	.col-xl-9,
	.col-xl-auto {
		padding-right: 8px;
		padding-left: 8px;
	}
	.row {
		margin-right: -8px;
		margin-left: -8px;
	}
	.no-gutters {
		margin-right: 0;
		margin-left: 0;
	}
	.container,
	.container-fluid,
	.navbar {
		padding-right: 8px;
		padding-left: 8px;
	}
}

.urunresim {
height: 340px;
object-fit: cover;
/*! box-shadow: -3px -5px 26px #fefefe; */
border: 1px solid #bab9b966;
}

.title {
font-size: 14px;
display: block;
text-align: center;
background: #fff;
box-shadow: none;
padding: 14px;
font-weight: 500;
border: 1px solid <?php echo $tema['t37'];?>;
}

 

.required {
 color: <?php echo $tema['t37'];?>;
}



@media screen and (max-device-width: 480px) and (orientation: portrait){
.rounded-sm, .rounded {
  border-radius: 2px !important;
  height: auto !important;

}
}
</style>