<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="theme-color" content="#ffffff">

		<title>BCrypto ICO::Home </title>

		<!--==== GOOGLE FONTS ====-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

		<!--==== BASE CSS ====-->
		<link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets/frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets/frontend/css/animate.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets/frontend/css/flaticon.css') }}" rel="stylesheet" type="text/css">

		<!--==== CUSTOM CSS ====-->
		<link href="{{ asset('assets/frontend/style.css') }}" rel="stylesheet">
	</head>
	<body>
		<div class="crypto_ico_home contact">
            <!-- ========== End Banner Bottom Area ============= -->
            <section class="banner_bottom_area">
                <div class="container_fluid">
                    <div class="marquee">
                        <div class="moving-item overlay">
                            <h2>
                                <small class="mr-1"> LTCU (LTCU) </small>
                                <small class="mr-1 text-white">$9,646.93 </small>
                                <small class="text-danger">( 6.01% )</small>
                            </h2>
                        </div>
                        <div class="moving-item">
                            <h2>
                                <small class="mr-1"> Bitcoin (BTC) </small>
                                <small class="mr-1 text-white">$6,647.87 </small>
                                <small class="text-danger">( 7.01% )</small>
                            </h2>
                        </div>
                        <div class="moving-item overlay">
                            <h2>
                                <small class="mr-1"> Monero (XMR) </small>
                                <small class="mr-1 text-white">$7,648.74 </small>
                                <small class="text-danger">( 8.01% )</small>
                            </h2>
                        </div>
                        <div class="moving-item">
                            <h2>
                                <small class="mr-1"> Zcash (ZEC) </small>
                                <small class="mr-1 text-white">$6,649.63 </small>
                                <small class="text-danger">( 9.01% )</small>
                            </h2>
                        </div>
                        <div class="moving-item overlay">
                            <h2>
                                <small class="mr-1"> Monero (XMR) </small>
                                <small class="mr-1 text-white">$5,645.82 </small>
                                <small class="text-danger">( 2.01% )</small>
                            </h2>
                        </div>
                        <div class="moving-item">
                            <h2>
                                <small class="mr-1"> SAN (SAN) </small>
                                <small class="mr-1 text-white">$4,644.55 </small>
                                <small class="text-danger">( 5.01% )</small>
                            </h2>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </section>
            <!-- ========== End Banner Bottom Area ============= -->

            <!-- ========== Start Header Area ============= -->
			<header class="header_area">
				<div class="custom_container">
					<div class="row">
						<div class="col-auto mr-auto">
							<div class="header_logo">
								<a href="{{ route('home') }}">
									<img src="{{ asset('assets/frontend/images/logo.png') }}" alt="">
								</a>
							</div>
						</div>
						<div class="col-auto">
							<nav class="mainmenu">
								<ul>
                                    <li class="{{ \Route::current()->getName() == 'home' ? 'current_page_item' : '' }}">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="{{ \Request::is('news') ? 'current_page_item' : '' }}">
                                        <a href="{{ route('news') }}">News</a>
                                    </li>
                                    <li class="{{ \Request::is('exchange') || \Request::is('mining') || \Request::is('wallet') ? 'current_page_item' : '' }}">
                                        <a href="#">Features</a>
                                        <ul class="sub_menu">
                                            <li class="{{ \Request::is('exchange') ? 'current_page_item' : '' }}">
                                                <a href="{{ route('exchange') }}">Exchange </a>
                                            </li>
                                            <li class="{{ \Request::is('mining') ? 'current_page_item' : '' }}">
                                                <a href="{{ route('mining') }}">Mining Pool</a>
                                            </li>
                                            <li class="{{ \Request::is('wallet') ? 'current_page_item' : '' }}">
                                                <a href="{{ route('wallet') }}">Wallets</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="{{ \Request::is('shop') ? 'current_page_item' : '' }}">
                                        <a href="{{ route('shop') }}">Shop</a>
                                    </li>
                                    <li class="{{ \Request::is('contact') ? 'current_page_item' : '' }}">
                                        <a href="{{ route('contact') }}">CONTACT</a>
                                    </li>
                                    <li>
                                        <a href="#">Sign In</a>
                                    </li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<!-- Mobile Menu -->
            <section id="mobile-nav-wrap" class="clearfix">
                <div class="custom_container">
                   <div class="bottom_nav">
                        <div id="mobile-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                        <div class="toggle-inner"></div>
                   </div>
                </div>
            </section>
            <section class="mobile-menu-inner">
                <div class="mobile_accor_togo">
                    <div class="mobile_accor_logo">
                        <a href="{{ route('home') }}">
                           <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="">
                        </a>
                    </div>
                    <div class="close-menu">
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <nav id="accordian">
                    <ul class="accordion-menu">
                        <li class="{{ \Route::current()->getName() == 'home' ? 'current_page_item' : '' }}">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="{{ \Request::is('news') ? 'current_page_item' : '' }}">
                            <a href="{{ route('news') }}">News</a>
                        </li>
                        <li class="{{ \Request::is('exchange') || \Request::is('mining') || \Request::is('wallet') ? 'current_page_item' : '' }}">
                            <a href="#">Features</a>
                            <ul class="sub_menu">
                                <li class="{{ \Request::is('exchange') ? 'current_page_item' : '' }}">
                                    <a href="{{ route('exchange') }}">Exchange </a>
                                </li>
                                <li class="{{ \Request::is('mining') ? 'current_page_item' : '' }}">
                                    <a href="{{ route('mining') }}">Mining Pool</a>
                                </li>
                                <li class="{{ \Request::is('wallet') ? 'current_page_item' : '' }}">
                                    <a href="{{ route('wallet') }}">Wallets</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ \Request::is('shop') ? 'current_page_item' : '' }}">
                            <a href="{{ route('shop') }}">Shop</a>
                        </li>
                        <li class="{{ \Request::is('contact') ? 'current_page_item' : '' }}">
                            <a href="{{ route('contact') }}">CONTACT</a>
                        </li>
                        <li>
                            <a href="#">Sign In</a>
                        </li>
                    </ul>
                </nav>
                <form action="#" id="moble-search">
                    <input type="text" placeholder="Search....">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <ul class="footer-social-link">
                    <li class="fb-bg"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="in-bg"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li class="tw-bg"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="gp-bg"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </section>
            <!-- Mobile Menu -->
			<!-- ========== Start Header Area ============= -->

            @yield('content')

			<!-- ========== Start Footer Area ============= -->
			<footer class="footer_area">
				<div class="footer_top_area padding_140">
					<div class="container">
						<div class="footer_content">
							<a href="#">
								<img src="{{ asset('assets/frontend/images/logo.png') }}" alt="">
							</a>
							<form action="#">
								<p>Subscribe to our Newsletter</p>
								<input type="text" placeholder="Email Address">
								<button>subscribe</button>
							</form>
							<div class="footer_social_list">
								<a href="#">
									<i class="fa fa-facebook"></i>
								</a>
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="#">
									<i class="fa fa-pinterest"></i>
								</a>
								<a href="#">
									<i class="fa fa-linkedin"></i>
								</a>
								<a href="#">
									<i class="fa fa-dribbble"></i>
								</a>
								<a href="#">
									<i class="fa fa-google-plus"></i>
								</a>
								<a href="#">
									<i class="fa fa-github"></i>
								</a>
								<a href="#">
									<i class="fa fa-behance"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="footer_bottom_area">
					<p>©2018. Designed by <a href="#">ThemeIM</a>. All Rights Reserved.</p>
				</div>
			</footer>
			<!-- ========== End Footer Area ============= -->
		</div>
		<!--==== JAVASCRIPT FILES ====-->
		<script src="{{ asset('assets/frontend/js/jquery-2.1.4.min.js') }}"></script>
		<script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('assets/frontend/js/jquery.marquee.min.js') }}"></script>
		<script src="{{ asset('assets/frontend/js/jquery.countdown.min.js') }}"></script>
		<script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
		<script src="{{ asset('assets/frontend/js/particles.min.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsBrMPsyNtpwKXPPpG54XwJXnyobfMAIc"></script>
		<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
	</body>

</html>
