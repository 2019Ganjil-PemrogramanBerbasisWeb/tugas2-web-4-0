<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <form action="index.html" method="post">
	<title>My Account | Bookshop Responsive Bootstrap4 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">

	<!-- Cusom css -->
   <link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-6 col-lg-2">
							<div class="logo">
								<a href="index.html">
									<img src="images/logo/PedoS1-long.png" alt="logo images">
								</a>
							</div>
						</div>
						<div class="col-lg-8 d-none d-lg-block">
							<nav class="mainmenu__nav">
								<ul class="meninmenu d-flex justify-content-start">
									<li class="drop with--one--item"><a href="index.html">Beranda</a></li>
									<li class="drop"><a href="#">Tentang Kami</a>
										<div class="megamenu mega03">
											<ul class="item item03">
												<li><a href="about.html">About Us</a></li>
												<li><a href="team.html">Our Team</a></li>
											</ul>
									</li>
									<li class="drop"><a href="shop-grid.html">Pelayanan</a>
										<div class="megamenu mega03">
											<ul class="item item03">
												<li class="title">Beli Tanah</li>
												<li><a href="shop-grid.html">Beli tanah</a></li>
												<li><a href="single-product.html">Keterangan Tanah</a></li>
												<li><a href="checkout.html">Detail Pembelian</a></li>
											</ul>
											<ul class="item item03">
												<li class="title">Jual Tanah</li>
												<li><a href="shop-grid.html">Jual Tanah</a></li>
												<li><a href="single-product.html">Keterangan Tanah</a></li>
												<li><a href="checkout.html">Detail Penjualan</a></li>
											</ul>
											<ul class="item item03">
												<li class="title">Info Tanah</li>
												<li><a href="portfolio.html">Info Terbaru</a></li>
												<li><a href="faq.html">FaQ</a></li>
											</ul>
										</div>
									</li>
									<li><a href="contact.html">Kontak</a></li>
								</ul>
							</nav>
						</div>
						<div class="col-md-6 col-sm-6 col-6 col-lg-2">
							<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
								<li class="shop_search"><a class="search__active" href="#"></a></li>
								<li class="wishlist"><a href="#"></a></li>
								<li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">3</span></a>
									<!-- Start Shopping Cart -->
									<div class="block-minicart minicart__active">
										<div class="minicart-content-wrapper">
											<div class="micart__close">
												<span>close</span>
											</div>
											<div class="items-total d-flex justify-content-between">
												<span>3 items</span>
												<span>Cart Subtotal</span>
											</div>
											<div class="total_amount text-right">
												<span>$66.00</span>
											</div>
											<div class="mini_action checkout">
												<a class="checkout__btn" href="cart.html">Go to Checkout</a>
											</div>
											<div class="single__items">
												<div class="miniproduct">
													<div class="item01 d-flex">
														<div class="thumb">
															<a href="product-details.html"><img src="images/product/sm-img/1.jpg" alt="product images"></a>
														</div>
														<div class="content">
															<h6><a href="product-details.html">Voyage Yoga Bag</a></h6>
															<span class="prize">$30.00</span>
															<div class="product_prize d-flex justify-content-between">
																<span class="qun">Qty: 01</span>
																<ul class="d-flex justify-content-end">
																	<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																	<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="item01 d-flex mt--20">
														<div class="thumb">
															<a href="product-details.html"><img src="images/product/sm-img/3.jpg" alt="product images"></a>
														</div>
														<div class="content">
															<h6><a href="product-details.html">Impulse Duffle</a></h6>
															<span class="prize">$40.00</span>
															<div class="product_prize d-flex justify-content-between">
																<span class="qun">Qty: 03</span>
																<ul class="d-flex justify-content-end">
																	<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																	<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="item01 d-flex mt--20">
														<div class="thumb">
															<a href="product-details.html"><img src="images/product/sm-img/2.jpg" alt="product images"></a>
														</div>
														<div class="content">
															<h6><a href="product-details.html">Compete Track Tote</a></h6>
															<span class="prize">$40.00</span>
															<div class="product_prize d-flex justify-content-between">
																<span class="qun">Qty: 03</span>
																<ul class="d-flex justify-content-end">
																	<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																	<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="mini_action cart">
												<a class="cart__btn" href="cart.html">View and edit cart</a>
											</div>
										</div>
									</div>
									<!-- End Shopping Cart -->
								</li>
								<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
									<div class="searchbar__content setting__block">
										<div class="content-inner">
											<div class="switcher-currency">
												<strong class="label switcher-label">
													<span>Akun</span>
												</strong>
												<div class="switcher-options">
													<div class="switcher-currency-trigger">
														<div class="setting__menu">
															<span><a href="#">Profil</a></span>
															<span><a href="#">Tanah Saya</a></span>
															<span><a href="my-account.html">Masuk</a></span>
															<span><a href="my-accountregis.html">Daftar</a></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- Start Mobile Menu -->
					<div class="row d-none">
						<div class="col-lg-12 d-none">
							<nav class="mobilemenu__nav">
								<ul class="meninmenu">
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Pages</a>
										<ul>
											<li><a href="about.html">About Page</a></li>
											<li><a href="portfolio.html">Portfolio</a>
												<ul>
													<li><a href="portfolio.html">Portfolio</a></li>
													<li><a href="portfolio-details.html">Portfolio Details</a></li>
												</ul>
											</li>
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="cart.html">Cart Page</a></li>
											<li><a href="checkout.html">Checkout Page</a></li>
											<li><a href="wishlist.html">Wishlist Page</a></li>
											<li><a href="error404.html">404 Page</a></li>
											<li><a href="faq.html">Faq Page</a></li>
											<li><a href="team.html">Team Page</a></li>
										</ul>
									</li>
									<li><a href="shop-grid.html">Shop</a>
										<ul>
											<li><a href="shop-grid.html">Shop Grid</a></li>
											<li><a href="single-product.html">Single Product</a></li>
										</ul>
									</li>
									<li><a href="blog.html">Blog</a>
										<ul>
											<li><a href="blog.html">Blog Page</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- End Mobile Menu -->
					<div class="mobile-menu d-block d-lg-none">
					</div>
					<!-- Mobile Menu -->	
				</div>		
			</header>
		<!-- //Header -->
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Akun</h2>
                            <nav class="bradcaump-content">
                              <span class="breadcrumb_item active">Akun saya</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<!-- Start My Account Area -->
		<section class="my_account_area pt--80 pb--55 bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="my__account__wrapper">
							<h3 class="account__title">Login</h3>
							<p>Jika anda sudah memiliki akun, anda dapat melanjutkannya pada tahap berikut ini</p>
							<form action="proseslogin.php" method="POST">
								<div class="account__form">
									<div class="input__box">
										<label>email address <span>*</span></label>
										<input type="email"name="username">
									</div>
									<div class="input__box">
										<label>Password<span>*</span></label>
										<input type="password"name="password">
									</div>
									<button class="btn btn--md btn--round login_btn" type="submit">Login</button>
										<label class="label-for-checkbox">
											<input id="rememberme" class="input-checkbox" name="rememberme" value="forever" type="checkbox">
											<span>Remember me</span>
										</label>
									</div>
									<a class="forget_pass" href="#">Lost your password?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End My Account Area -->
		<!-- Footer Area -->
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<a href="index.html">
										<img src="images/logo/3.png" alt="logo">
									</a>
									<p>PedoS melayani anda dengan cepat, tepat dan akurat</p>
									<p>Aplikasi yang membantu masyarakat dalam menangani kebutuhan anda dalam berbisnis</p>
								</div>
								<div class="footer__content">
									<ul class="social__net social__net--2 d-flex justify-content-center">
										<li><a href="#"><i class="bi bi-facebook"></i></a></li>
										<li><a href="#"><i class="bi bi-google"></i></a></li>
										<li><a href="#"><i class="bi bi-twitter"></i></a></li>
										<li><a href="#"><i class="bi bi-linkedin"></i></a></li>
										<li><a href="#"><i class="bi bi-youtube"></i></a></li>
									</ul>
									<ul class="mainmenu d-flex justify-content-center">
										<li><a href="index.html">Beranda</a></li>
										<li><a href="index.html">Tentang Kami</a></li>
										<li><a href="index.html">Pelayanan</a></li>
										<li><a href="index.html">Kontak</a></li>
										</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright">
								<div class="copy__right__inner text-left">
									<p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free themes Cloud.</a> All Rights Reserved</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="payment text-right">
								<img src="images/icons/payment.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- //Footer Area -->
		
	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
	
</body>
</html>