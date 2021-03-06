<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<title>SneakerHead Shop</title>
  		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="YOURStore - Responsive HTML5 Template">
		<meta name="author" content="etheme.com">
		<link rel="shortcut icon" href="{{ asset('shop_assets/') }}/favicon.ico">
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- External Plugins CSS -->
		<link rel="stylesheet" href="{{ asset('shop_assets/') }}/external/slick/slick.css">
		<link rel="stylesheet" href="{{ asset('shop_assets/') }}/external/slick/slick-theme.css">
		<link rel="stylesheet" href="{{ asset('shop_assets/') }}/external/magnific-popup/magnific-popup.css">
		<link rel="stylesheet" href="{{ asset('shop_assets/') }}/external/nouislider/nouislider.css">
		<link rel="stylesheet" href="{{ asset('shop_assets/') }}/external/bootstrap-select/bootstrap-select.css">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('shop_assets/') }}/external/rs-plugin/css/settings.css" media="screen" />
		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{ asset('shop_assets/') }}/css/style-layout11.css">
		<!-- Icon Fonts  -->
		<link rel="stylesheet" href="{{ asset('shop_assets/') }}/font/style.css">
  		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
		<!-- Head Libs -->	
		<!-- Modernizr -->
		<script src="{{ asset('shop_assets/') }}/external/modernizr/modernizr.js"></script>
		<style type="text/css" media="screen">
			.btn-quickview b{
				cursor: pointer; 
			}
		</style>
	</head>
	<body>
		<div id="loader-wrapper">
			<div id="loader">
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>
		</div>
		<!-- Back to top -->
	    <div class="back-to-top"><span class="icon-keyboard_arrow_up"></span></div>
	    <!-- /Back to top -->
	    <!-- mobile menu -->
		<div class="hidden">
			<nav id="off-canvas-menu">				
				<ul class="expander-list">				
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="{{ asset('shop_assets/') }}/index.html"><span class="act-underline">LAYOUT</span></a>
						</span>
						<ul class="dropdown-menu megamenu image-links-layout" role="menu">												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/index.html">
								<span class="figure"><img class="img-responsive img-border" src="{{ asset('shop_assets/') }}/images/custom/layout-img-1.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 1 (Default)</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/index-02.html">
								<span class="figure"><img class="img-responsive img-border" src="{{ asset('shop_assets/') }}/images/custom/layout-img-2.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 2</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/index-03.html">
								<span class="figure"><img class="img-responsive img-border" src="{{ asset('shop_assets/') }}/images/custom/layout-img-3.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 3</span>
								</a>
								</span>
							</li>												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/index-04.html">
								<span class="figure"><img class="img-responsive img-border" src="{{ asset('shop_assets/') }}/images/custom/layout-img-4.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 4</span>
								</a>
								</span>
							</li>												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/index-05.html">
								<span class="figure"><img class="img-responsive img-border" src="{{ asset('shop_assets/') }}/images/custom/layout-img-5.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 5</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/index-06.html">
								<span class="figure"><img class="img-responsive img-border" src="{{ asset('shop_assets/') }}/images/custom/layout-img-6.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 6</span>
								</a>
								</span>											
							</li>												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/index-07.html">
								<span class="figure"><img class="img-responsive img-border" src="{{ asset('shop_assets/') }}/images/custom/layout-img-7.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 7</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/index-08.html">
								<span class="figure"><img class="img-responsive img-border" src="{{ asset('shop_assets/') }}/images/custom/layout-img-8.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 8</span>
								</a>
								</span>
							</li>												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/index-09.html">
								<span class="figure"><img class="img-responsive img-border" src="{{ asset('shop_assets/') }}/images/custom/layout-img-9.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 9</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/index-10.html">
								<span class="figure"><img class="img-responsive img-border" src="{{ asset('shop_assets/') }}/images/custom/layout-img-10.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 10</span>
								</a>
								</span>
							</li>												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/index-11.html">
								<span class="figure"><img class="img-responsive img-border" src="{{ asset('shop_assets/') }}/images/custom/layout-img-11.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 11</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/index-12.html">
								<span class="figure"><img class="img-responsive img-border" src="{{ asset('shop_assets/') }}/images/custom/layout-img-12.jpg" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 12</span>
								</a>
								</span>
							</li>
						</ul>
					</li>					
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="{{ asset('shop_assets/') }}/listing.html"><span class="act-underline">LISTING</span></a>
						</span>						
						<ul class="dropdown-menu megamenu image-links" role="menu">							
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/listing.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/listing-img-1.png" alt=""/></span>
								<span class="figcaption text-uppercase">left column</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/listing-left-right-col.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/listing-img-2.png" alt=""/></span>
								<span class="figcaption text-uppercase">left, right column</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/listing-col-right_03.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/listing-img-3.png" alt=""/></span>
								<span class="figcaption text-uppercase">right column</span>
								</a>
								</span>											
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/listing-without-col-04.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/listing-img-4.png" alt=""/></span>
								<span class="figcaption text-uppercase">without columns</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/listing-col-left-without-without-static-block_05.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/listing-img-5.png" alt=""/></span>
								<span class="figcaption text-uppercase">left column,<br> without Static block</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/listing-without-col-without-static-block_06.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/listing-img-6.png" alt=""/></span>
								<span class="figcaption text-uppercase">without columns,<br> without Static block</span>
								</a>
								</span>											
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/listing-without-col-without-static-block_small_07.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/listing-img-7.png" alt=""/></span>
								<span class="figcaption text-uppercase">Small</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/listing-without-col-without-static-block_big_08.html">
								<span class="figure"><img class="img-responsive img-border" src="{{ asset('shop_assets/') }}/images/custom/listing-img-8.png" alt=""/></span>
								<span class="figcaption text-uppercase">Big</span>
								</a>
								</span>
							</li>
						</ul>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="{{ asset('shop_assets/') }}/product-layout11.html"><span class="act-underline"><span class="act-underline">PRODUCT</span></span></a>
						</span>
						<ul class="dropdown-menu megamenu image-links" role="menu">							
							<li class="col-one-third">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/product-small.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/product-menu-img-1.png" alt=""/></span>
								<span class="figcaption text-uppercase">image size  - small</span>
								</a>
								</span>
							</li>
							<li class="col-one-third">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/product-layout11.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/product-menu-img-2.png" alt=""/></span>
								<span class="figcaption text-uppercase">image size  - medium</span>
								</a>
								</span>
							</li>
							<li class="col-one-third">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/product-big.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/product-menu-img-3.png" alt=""/></span>
								<span class="figcaption text-uppercase">image size  - big</span>
								</a>
								</span>											
							</li>
						</ul>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="{{ asset('shop_assets/') }}/blog-layout-1.html"><span class="act-underline">BLOG</span></a>
						</span>
						<ul class="dropdown-menu megamenu image-links" role="menu">							
							<li class="col-one-third">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/blog-layout-1.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/blog-menu-img-1.png" alt=""/></span>
								<span class="figcaption text-uppercase">blog - Layout 1</span>
								</a>
								</span>
							</li>
							<li class="col-one-third">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/blog-layout-2.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/blog-menu-img-2.png" alt=""/></span>
								<span class="figcaption text-uppercase">blog - Layout 2</span>
								</a>
								</span>
							</li>
							<li class="col-one-third">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/blog-layout-3.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/blog-menu-img-3.png" alt=""/></span>
								<span class="figcaption text-uppercase">blog - Layout 3</span>
								</a>
								</span>											
							</li>
						</ul>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="{{ asset('shop_assets/') }}/gallery-layout-1.html"><span class="act-underline">GALLERY</span></a>
						</span>
						<ul class="dropdown-menu megamenu image-links" role="menu">							
							<li class="col-one-fifth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/gallery-layout-1.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/gallery-menu-img-1.png" alt=""/></span>
								<span class="figcaption text-uppercase">Gallery - Layout 1</span>
								</a>
								</span>
							</li>
							<li class="col-one-fifth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/gallery-layout-2.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/gallery-menu-img-2.png" alt=""/></span>
								<span class="figcaption text-uppercase">Gallery - Layout 2</span>
								</a>
								</span>
							</li>
							<li class="col-one-fifth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/gallery-layout-3.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/gallery-menu-img-3.png" alt=""/></span>
								<span class="figcaption text-uppercase">Gallery - Layout 3</span>
								</a>
								</span>											
							</li>
							<li class="col-one-fifth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/gallery-layout-4.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/gallery-menu-img-4.png" alt=""/></span>
								<span class="figcaption text-uppercase">Gallery - Layout 4</span>
								</a>
								</span>											
							</li>
							<li class="col-one-fifth">
								<span class="image-link">
								<a href="{{ asset('shop_assets/') }}/gallery-layout-5.html">
								<span class="figure"><img class="img-responsive" src="{{ asset('shop_assets/') }}/images/custom/gallery-menu-img-5.png" alt=""/></span>
								<span class="figcaption text-uppercase">Gallery - Layout 5</span>
								</a>
								</span>											
							</li>
						</ul>
					</li>					
					<li>
						<span class="name"><span class="expander">-</span>
							<a href="{{ asset('shop_assets/') }}/about.html"><span class="act-underline">PAGES</span></a>
						</span>						
						<ul class="multicolumn">
							<li><a href="{{ asset('shop_assets/') }}/about.html">About</a></li>
							<li><a href="{{ asset('shop_assets/') }}/support-24.html">Support 24/7 page</a></li>
							<li><a href="{{ asset('shop_assets/') }}/services.html">Services</a></li>	
							<li><a href="{{ asset('shop_assets/') }}/faq.html">FAQs</a></li>													
							<li><a href="{{ asset('shop_assets/') }}/contact.html">Contact</a></li>
							<li><a href="{{ asset('shop_assets/') }}/under-construction.html">Under Construction</a></li>
							<li><a href="{{ asset('shop_assets/') }}/warranty.html">Warranty Page</a></li>
							<li><a href="{{ asset('shop_assets/') }}/site-map.html">Site Map</a></li>												
							<li><a href="{{ asset('shop_assets/') }}/delivery-page.html">Delivery Page</a></li>
							<li><a href="{{ asset('shop_assets/') }}/payment-page.html">Payment page</a></li>													
							<li><a href="{{ asset('shop_assets/') }}/typography.html">Typography</a></li>	
							<li><a href="{{ asset('shop_assets/') }}/page-404.html">Page 404</a></li>		
							<li><a href="{{ asset('shop_assets/') }}/_newsletter-template/newsletter-template.html">Newsletter template</a></li>											
						</ul>
					</li>					
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="{{ asset('shop_assets/') }}/listing.html"><span class="act-underline">Electronics<span class="badge badge--menu badge--color">SALE</span></span></a>
						</span>
						<ul class="multicolumn-level">
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="{{ asset('shop_assets/') }}/listing-layout11.html">										
										<span>Laptops</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing-layout11.html">MaciBooks</a></li>									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing-layout11.html">Chromebooks <span class="badge badge--menu badge--color">SALE</span></a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing-layout11.html">Gaming Laptops</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing-layout11.html">Business Laptops</a></li>									
								</ul>
							</li>
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="{{ asset('shop_assets/') }}/listing-layout11.html">										
										<span>Phones</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing-layout11.html">Cellphones</a></li>									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing-layout11.html">Cell Phones with Plans</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing-layout11.html">No-Contract Phones</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing-layout11.html">Accesories</a></li>									
								</ul>
							</li>
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="{{ asset('shop_assets/') }}/listing-layout11.html">										
										<span>Tablets</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing-layout11.html">2-in-1s</a></li>									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing-layout11.html">Ipadi & Tablets</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing-layout11.html">Kids Tablets</a></li>																		
								</ul>
							</li>
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="{{ asset('shop_assets/') }}/listing-layout11.html">										
										<span>Smartwatches</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing-layout11.html">Smartwatch</a></li>									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing-layout11.html">Watch</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing-layout11.html">Watch Sport</a></li>																		
								</ul>
							</li>
						</ul>
					</li>
					
				</ul>
			</nav>
		</div>		
	    <!-- /mobile menu -->
		<!-- HEADER section -->
		<div class="header-wrapper">
			<header id="header" class="header-layout-06">
				<div class="container">
					<div class="row">
						<div class="col-xl-3">
							<!-- logo start --> 
							<a href="{{ asset('shop/home') }}"><img class="logo replace-2x img-responsive" src="{{ asset('shop_assets/') }}/images/custom/layout11/logo.png" alt=""/></a> 
							<!-- logo end --> 
						</div>
						<div class="col-xl-7 col-lg-push-12 text-center">							
							<div class="stuck-nav">
								<div class="container">
									<!-- navigation start -->
									<div class="col-stuck-menu">
										<nav class="navbar">
												<div class="responsive-menu mainMenu">									
										<!-- Mobile menu Button-->
										<div class="col-xs-2 visible-mobile-menu-on">
											<div class="expand-nav compact-hidden">
												<a href="{{ asset('shop_assets/') }}/#off-canvas-menu" class="off-canvas-menu-toggle">
													<div class="navbar-toggle"> 
														<span class="icon-bar"></span> 
														<span class="icon-bar"></span> 
														<span class="icon-bar"></span> 
														<span class="menu-text">MENU</span> 
													</div>
												</a>
											</div>
										</div>
										<!-- //end Mobile menu Button -->
										@include('shop.pages.nav_bar')
									</div>
										</nav>
									</div>
									<!-- /navigation end -->
									<!-- shopping cart start -->
									{{-- @include('shop.pages.inline_shoping_cart') --}}
									<!-- shopping cart end -->	
								</div>	
						    </div>							
						</div>
							
						</div>
						<div class="col-sm-8 col-md-8 col-lg-6 col-xl-5 text-right visible-mobile-menu-on">
							<!-- slogan start -->
							<div class="slogan"> Default welcome msg! </div>
							<!-- slogan end --> 						
							<div class="settings">
								<!-- currency start -->
								<div class="currency dropdown text-right">
									<div class="dropdown-label hidden-sm hidden-xs">Currency:</div>
									<a class="dropdown-toggle" data-toggle="dropdown"> USD<span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu--xs-full">
										<li><a href="{{ asset('shop_assets/') }}/#">GBP - British Pound Sterling</a></li>
										<li><a href="{{ asset('shop_assets/') }}/#">EUR - Euro</a></li>
										<li><a href="{{ asset('shop_assets/') }}/#">USD - US Dollar</a></li>
										<li class="dropdown-menu__close"><a href="{{ asset('shop_assets/') }}/#"><span class="icon icon-close"></span>close</a></li>
									</ul>
								</div>
								<!-- currency end --> 
								<!-- language start -->
								<div class="language dropdown text-right">
									<div class="dropdown-label hidden-sm hidden-xs">Language:</div>
									<a class="dropdown-toggle" data-toggle="dropdown"> English<span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu--xs-full">
										<li><a href="{{ asset('shop_assets/') }}/#">English</a></li>
										<li><a href="{{ asset('shop_assets/') }}/#">German</a></li>
										<li><a href="{{ asset('shop_assets/') }}/#">Spanish</a></li>
										<li><a href="{{ asset('shop_assets/') }}/#">Russian</a></li>
										<li class="dropdown-menu__close"><a href="{{ asset('shop_assets/') }}/#"><span class="icon icon-close"></span>close</a></li>
									</ul>
								</div>
								<!-- language end --> 
							</div>
						</div>
						<div class="pull-right  col-lg-pull-3 col-md-3  col-xl-2 alignment-extra">
							<div class="text-right">
								<!-- search start -->
								<div class="search link-inline">
									<a href="{{ asset('shop_assets/') }}/#" class="search__open"><span class="icon icon-search"></span></a>
									<div class="search-dropdown">
										<form action="#" method="get">
											<div class="input-outer">
												<input type="search" name="search" value="" maxlength="128" placeholder="SEARCH:">
												<button type="submit" title="" class="icon icon-search"></button>
											</div>
											<a href="{{ asset('shop_assets/') }}/#" class="search__close"><span class="icon icon-close"></span></a>									
										</form>
									</div>
								</div>
								<!-- search end -->			
								<!-- account menu start -->
								<div class="account link-inline hidden mobile-menu-on">
									<div class="dropdown text-right">
										<a class="dropdown-toggle" data-toggle="dropdown">
										<span class="icon icon-person "></span>
										</a>
										<ul class="dropdown-menu dropdown-menu--xs-full">
											<li><a href="{{ asset('shop_assets/') }}/login_form.html"><span class="icon icon-person"></span>My Account</a></li>
											<li><a href="{{ asset('shop_assets/') }}/wishlist.html"><span class="icon icon-favorite_border"></span>My Wishlist</a></li>
											<li><a href="{{ asset('shop_assets/') }}/compare.html"><span class="icon icon-sort"></span>Compare</a></li>
											<li><a href="{{ asset('shop_assets/') }}/checkout-step.html"><span class="icon icon-done_all"></span>Checkout</a></li>
											<li><a href="{{ asset('shop_assets/') }}/#"  data-toggle="modal" data-target="#modalLoginForm"><span class="icon icon-lock"></span>Log In</a></li>
											<li><a href="{{ asset('shop_assets/') }}/login_form.html"><span class="icon icon-person_add"></span>Create an account</a></li>
											<li class="dropdown-menu__close"><a href="{{ asset('shop_assets/') }}/#"><span class="icon icon-close"></span>close</a></li>
										</ul>
									</div>
								</div>
								<!-- account menu end -->
								<!-- icon toggle menu -->
								<div class="link-inline toggle-menu  visible-mobile-menu-off">
									<span class="icon icon-reorder"></span>									
							          <ul class="dropdown-menu " role="menu">
							          	<li class='li-col-full'>
							          		<span class="close icon-clear pull-right" data-dismiss="modal"></span>
											<em class="color main-font">Default welcome msg!</em>
							          	</li>
							          	<li class='li-col list-user-menu'>									 
										  <h4 class="megamenu__subtitle"><span>My Account</span></h4>		
							              <ul>
							                <li><a href="{{ asset('shop_assets/') }}/#">Account</a></li>
							                <li><a href="{{ asset('shop_assets/') }}/#">Wishlist</a></li>
							                <li><a href="{{ asset('shop_assets/') }}/#">Compare</a></li>
							                <li><a href="{{ asset('shop_assets/') }}/#">Checkout</a></li>
							              </ul>
							            </li>						           
							            <li class='li-col languages languages--flag'>									 
										  <h4 class="megamenu__subtitle"><span>Language</span></h4>		
							              <ul>
							                <li class="languages__item active">
							                	<a href="{{ asset('shop_assets/') }}/#">
							                		<span class="languages__item__flag flag"><img src="{{ asset('shop_assets/') }}/images/flags/gb.png" alt=""/></span>
							                		<span class="languages__item__label">English</span>
							                	</a>
							                </li>
							                <li class="languages__item">
							                	<a href="{{ asset('shop_assets/') }}/#">
							                		<span class="languages__item__flag flag"><img src="{{ asset('shop_assets/') }}/images/flags/de.png" alt=""/></span>
							                		<span class="languages__item__label">German</span>
							                	</a>
							                </li>
							                <li class="languages__item">
							                	<a href="{{ asset('shop_assets/') }}/#">
							                		<span class="languages__item__flag flag"><img src="{{ asset('shop_assets/') }}/images/flags/es.png" alt=""/></span>
							                		<span class="languages__item__label">Spanish</span>
							                	</a>
							                </li>
							                <li class="languages__item">
							                	<a href="{{ asset('shop_assets/') }}/#">
							                		<span class="languages__item__flag flag"><img src="{{ asset('shop_assets/') }}/images/flags/ru.png" alt=""/></span>
							                		<span class="languages__item__label">Russian</span>
							                	</a>
							                </li>
							              </ul>
							            </li>
							             <li class='li-col currency'>
										  <h4 class="megamenu__subtitle"><span>Currency</span></h4>									  
							              <ul>
							              	<li class="currency__item"><a href="{{ asset('shop_assets/') }}/#">GBP - British Pound Sterling</a></li>
											<li class="currency__item"><a href="{{ asset('shop_assets/') }}/#">EUR - Euro</a></li>
							                <li class="currency__item active"><a href="{{ asset('shop_assets/') }}/#">USD - US Dollar</a></li>
							              </ul>
							            </li>
							          </ul>
								</div>
								<!-- /icon toggle menu -->
								<!-- shopping cart start -->
									@include('shop.pages.inline_shoping_cart')
								<!-- shopping cart end -->			
							</div>
						</div>
					</div>
				</div>			
			</header>
		</div>
		<!-- End HEADER section -->	
		<!-- breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<ol class="breadcrumb breadcrumb--ys pull-left">
					<li class="home-link"><a href="{{ asset('shop_assets/') }}/index.html" class="icon icon-home"></a></li>
					<li><a href="{{ asset('shop_assets/') }}/#">Electronics</a></li>
					<li class="active">Phones</li>
				</ol>
			</div>
		</div>
		<!-- /breadcrumbs --> 
		<!-- CONTENT section -->
		<div id="pageContent">
			<div class="container">
				<!-- two columns -->
				<div class="row">
					<!-- left column -->
					<aside class="col-md-4 col-lg-3 col-xl-2" id="leftColumn">
						<a href="{{ asset('shop_assets/') }}/#" class="slide-column-close visible-sm visible-xs"><span class="icon icon-chevron_left"></span>back</a>
						<div class="filters-block visible-xs">
							<div class="filters-row__select">
								<label>Sort by: </label>
								<div class="select-wrapper">
									<select class="select--ys">
										<option>Position</option>
										<option>Price</option>
										<option>Rating</option>
									</select>
								</div>
								<a href="{{ asset('shop_assets/') }}/#" class="sort-direction icon icon-arrow_back"></a> 
							</div>
							<div class="filters-row__select">
								<label>Show: </label>
								<div class="select-wrapper">
									<select class="select--ys">
										<option>25</option>
										<option>50</option>
										<option>100</option>
									</select>
								</div>
							</div>
							<a href="{{ asset('shop_assets/') }}/#" class="icon icon-arrow-down active"></a><a href="{{ asset('shop_assets/') }}/#" class="icon icon-arrow-up"></a> 
						</div>
						<!-- shopping by block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">SHOPPING BY:</h4>
							<div class="collapse-block__content">
								<ul class="filter-list">
									<li> Color: <span>White</span><a href="{{ asset('shop_assets/') }}/#" class="icon icon-clear icon-to-right"></a> </li>
									<li> Size: <span>S</span><a href="{{ asset('shop_assets/') }}/#" class="icon icon-clear icon-to-right"></a> </li>
								</ul>
								<a class="btn btn--ys btn--sm btn--light">Clear All</a> 
							</div>
						</div>
						<!-- /shopping by block --> 
						<!-- category block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title ">
								@if (isset($category))
									{{$category->name}}
								@else
									@if (isset($brand))
										{{$brand->name}}
									@endif
								@endif</h2>
							</h4>
							<div class="collapse-block__content">
								<ul class="expander-list">
									<li class="active">
										<a href="{{ asset('shop_assets/') }}/#">TOPS</a><span class="expander"></span>
										<ul>
											<li class="active"><a href="{{ asset('shop_assets/') }}/#">Blouses &amp; Shirts</a></li>
											<li><a href="{{ asset('shop_assets/') }}/#">Dresses</a></li>
										</ul>
									</li>
									<li>
										<a href="{{ asset('shop_assets/') }}/#">BOTTOMS</a><span class="expander"></span>
										<ul>
											<li><a href="{{ asset('shop_assets/') }}/#">Trousers</a></li>
											<li><a href="{{ asset('shop_assets/') }}/#">Jeans</a></li>
											<li><a href="{{ asset('shop_assets/') }}/#">Leggings</a></li>
											<li><a href="{{ asset('shop_assets/') }}/#">Jumpsuit &amp; shorts</a></li>
											<li><a href="{{ asset('shop_assets/') }}/#">Skirts</a></li>
											<li><a href="{{ asset('shop_assets/') }}/#">Tights</a></li>
										</ul>
									</li>
									<li>
										<a href="{{ asset('shop_assets/') }}/#">ACCESSORIES</a><span class="expander"></span>
										<ul>
											<li><a href="{{ asset('shop_assets/') }}/#">Jewellery</a></li>
											<li><a href="{{ asset('shop_assets/') }}/#">Hats</a></li>
											<li><a href="{{ asset('shop_assets/') }}/#">Scarves &amp; snoods</a></li>
											<li><a href="{{ asset('shop_assets/') }}/#">Belts</a></li>
											<li><a href="{{ asset('shop_assets/') }}/#">Bags</a></li>
											<li><a href="{{ asset('shop_assets/') }}/#">Shoes</a></li>
											<li><a href="{{ asset('shop_assets/') }}/#">Sunglasses</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<!-- /category block --> 
						<!-- price slider block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">PRICE</h4>
							<div class="collapse-block__content">
								<div id="priceSlider" class="price-slider"></div>
								<form action="#">
									<div class="price-input">
										<label>From:</label>
										<input type="text" id="priceMin" />
									</div>
									<div class="price-input-divider">-</div>
									<div class="price-input">
										<label>To:</label>
										<input type="text" id="priceMax" />
									</div>
									<div class="price-input">
										<button type="submit" class="btn btn--ys btn--md">Filter</button>
									</div>
								</form>
							</div>
						</div>
						<!-- /price slider block --> 
						<!-- size block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">SIZE</h4>
							<div class="collapse-block__content">
								<ul class="options-swatch options-swatch--size options-swatch--lg">
									@foreach ($sizes as $size)
										<li><a href="#">{{$size->size}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<!-- /size block --> 
						<!-- color block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">COLOR</h4>
							<div class="collapse-block__content">
								<ul class="options-swatch options-swatch--color options-swatch--lg">
									@foreach ($colors as $color)
										<li><a href="#"><span class="swatch-label color-black" style="background: {{$color->code}};box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.15);"></span></a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<!-- /color block --> 
						<!-- brands block -->
						<div class="collapse-block">
							<h4 class="collapse-block__title">BRANDS</h4>
							<div class="collapse-block__content">
								<ul class="simple-list">
									@foreach ($brands as $brand)
										<li><a href="#">{{$brand->name}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<!-- /brands block --> 
					</aside>
					<!-- /left column --> 
					<!-- center column -->
					<aside class="col-md-8 col-lg-9 col-xl-10" id="centerColumn">
						<!-- title -->
						<div class="title-box">
							<h2 class="text-center text-uppercase title-under">
							@if (isset($category_name))
								{{$category_name}}
							@else
								@if (isset($brand_name))
									{{$brand_name}}
								@endif
							@endif</h2>
						</div>
						<!-- /title -->
						
						
					
						<!-- filters row -->
						<div class="filters-row border-top-none">
							<div class="pull-left">
								<div class="filters-row__mode">
										<a href="{{ asset('shop_assets/') }}/#" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Filter</a> 
									<a class="filters-row__view active link-grid-view btn-img btn-img-view_module"><span></span></a> 
									<a class="filters-row__view link-row-view btn-img btn-img-view_list"><span></span></a> 
								</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Sort by: </label>
									<div class="select-wrapper">
										<select class="select--ys sort-position">
											<option>Position</option>
											<option>Price</option>
											<option>Rating</option>
										</select>
									</div>
									<a href="{{ asset('shop_assets/') }}/#" class="sort-direction icon icon-arrow_back"></a> 
								</div>
							</div>
							<div class="pull-right">
								<div class="filters-row__items hidden-sm hidden-xs">28 Item(s)</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Show: </label>
									<div class="select-wrapper">
										<select class="select--ys show-qty">
											<option>25</option>
											<option>50</option>
											<option>100</option>
										</select>
									</div>
									<a href="{{ asset('shop_assets/') }}/#" class="icon icon-arrow-down active"></a><a href="{{ asset('shop_assets/') }}/#" class="icon icon-arrow-up"></a> 
								</div>
								<div class="filters-row__pagination">
									<ul class="pagination">
										<li class="active"><a href="{{ asset('shop_assets/') }}/#">1</a></li>
										<li><a href="{{ asset('shop_assets/') }}/#">2</a></li>
										<li><a href="{{ asset('shop_assets/') }}/#">3</a></li>
										<li><a href="{{ asset('shop_assets/') }}/#"><span class="icon icon-chevron_right"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /filters row -->
						<div class="product-listing row">
							@if (isset($categoryProducts))
								@foreach ($categoryProducts as $product)
									<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
										<!-- product -->
										<div class="product product--zoom">
											<div class="product__inside">
												<!-- product image -->
												<div class="product__inside__image">
													<a href="{{ asset('shop/product') }}{{'/'.$product->slug}}"> <img src="{{ url(\Storage::url($product->images[0]->link)) }}" alt=""> </a> 
													<!-- quick-view --> 
													<a data-url="{{ route('shop.productModal',$product->code) }}" class="quick-view btn-quickview"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
													<!-- /quick-view --> 
												</div>
												<!-- /product image --> 
												<!-- label sale -->
												<div class="product__label product__label--left product__label--sale"> <span>Sale<br>
													-{{number_format((float)(1-($product->sale_price/$product->origin_price))*100, 1, '.', '')}}%</span> 
												</div>
												<!-- /label sale --> 
												<!-- product name -->
												<div class="product__inside__name">
													<h2><a href="{{ asset('shop/product') }}{{'/'.$product->slug}}">{{$product->name}}</a></h2>
												</div>
												<!-- /product name -->                 <!-- product description --> 
												<!-- visible only in row-view mode -->
												<div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
												<!-- /product description -->                 <!-- product price -->
												<div class="product__inside__price price-box">${{$product->sale_price}}<span class="price-box__old">${{$product->origin_price}}</span></div>
												<!-- /product price --> 
												<!-- product review --> 
												<!-- visible only in row-view mode -->
												<div class="product__inside__review row-mode-visible">
													<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
													<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
												</div>
												<!-- /product review --> 
												<div class="product__inside__hover">
													<!-- product info -->
													<div class="product__inside__info">
														<div class="product__inside__info__btns"> <a href="{{ asset('shop/product') }}{{'/'.$product->slug}}" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
															<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
															<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
															<a href=""  class="btn btn--ys btn--xl  row-mode-visible hidden-xs "><span class="icon icon-visibility"></span> Quick view</a> 
														</div>
														<ul class="product__inside__info__link hidden-sm">
															<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
															<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
														</ul>
													</div>
													<!-- /product info --> 
													<!-- product rating -->
													<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
													<!-- /product rating --> 
												</div>
											</div>
										</div>
										<!-- /product --> 
									</div>
								@endforeach
							@else
								@if (isset($brandProducts))
									@foreach ($brandProducts as $product)
										<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
											<!-- product -->
											<div class="product product--zoom">
												<div class="product__inside">
													<!-- product image -->
													<div class="product__inside__image">
														<a href="{{ asset('shop/product') }}{{'/'.$product->slug}}"> <img src="{{ url(\Storage::url($product->images[0]->link)) }}" alt=""> </a> 
														<!-- quick-view --> 
														<a data-url="{{ route('shop.productModal',$product->code) }}" class="quick-view btn-quickview"><b><span class="icon icon-visibility"></span> Quick view</b> </a>
														<!-- /quick-view --> 
													</div>
													<!-- /product image --> 
													<!-- label sale -->
													<div class="product__label product__label--left product__label--sale"> <span>Sale<br>
														-{{number_format((float)(1-($product->sale_price/$product->origin_price))*100, 1, '.', '')}}%</span> 
													</div>
													<!-- /label sale --> 
													<!-- product name -->
													<div class="product__inside__name">
														<h2><a href="{{ asset('shop/product') }}{{'/'.$product->slug}}">{{$product->name}}</a></h2>
													</div>
													<!-- /product name -->                 <!-- product description --> 
													<!-- visible only in row-view mode -->
													<div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
													<!-- /product description -->                 <!-- product price -->
													<div class="product__inside__price price-box">${{$product->sale_price}}<span class="price-box__old">${{$product->origin_price}}</span></div>
													<!-- /product price --> 
													<!-- product review --> 
													<!-- visible only in row-view mode -->
													<div class="product__inside__review row-mode-visible">
														<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
														<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
													</div>
													<!-- /product review --> 
													<div class="product__inside__hover">
														<!-- product info -->
														<div class="product__inside__info">
															<div class="product__inside__info__btns"> <a href="{{ asset('shop/product') }}{{'/'.$product->slug}}" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
																<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
																<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
																<a href="#"  class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility "></span> Quick view</a> 
															</div>
															<ul class="product__inside__info__link hidden-sm">
																<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
																<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
															</ul>
														</div>
														<!-- /product info --> 
														<!-- product rating -->
														<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
														<!-- /product rating --> 
													</div>
												</div>
											</div>
											<!-- /product --> 
										</div>
									@endforeach
								@endif
							@endif
							
						</div>
						<!-- filters row -->
						<div class="filters-row">
							<div class="pull-left">
								<div class="filters-row__mode">
										<a href="{{ asset('shop_assets/') }}/#" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Filter</a> 
									<a class="filters-row__view active link-grid-view btn-img btn-img-view_module"><span></span></a> 
									<a class="filters-row__view link-row-view btn-img btn-img-view_list"><span></span></a> 
								</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Sort by: </label>
									<div class="select-wrapper">
										<select class="select--ys sort-position">
											<option>Position</option>
											<option>Price</option>
											<option>Rating</option>
										</select>
									</div>
									<a href="{{ asset('shop_assets/') }}/#" class="sort-direction icon icon-arrow_back"></a> 
								</div>
							</div>
							<div class="pull-right">
								<div class="filters-row__items hidden-sm hidden-xs">28 Item(s)</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Show: </label>
									<div class="select-wrapper">
										<select class="select--ys show-qty">
											<option>25</option>
											<option>50</option>
											<option>100</option>
										</select>
									</div>
									<a href="{{ asset('shop_assets/') }}/#" class="icon icon-arrow-down active"></a><a href="{{ asset('shop_assets/') }}/#" class="icon icon-arrow-up"></a> 
								</div>
								<div class="filters-row__pagination">
									<ul class="pagination">
										<li class="active"><a href="{{ asset('shop_assets/') }}/#">1</a></li>
										<li><a href="{{ asset('shop_assets/') }}/#">2</a></li>
										<li><a href="{{ asset('shop_assets/') }}/#">3</a></li>
										<li><a href="{{ asset('shop_assets/') }}/#"><span class="icon icon-chevron_right"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /filters row --> 
					</aside>
					<!-- center column --> 
				</div>
				<!-- /two columns --> 
			</div>
		</div>
		<!-- End CONTENT section --> 
		<!-- FOOTER section -->
		<footer class="fill-bg offset-top-0 ">
			<!-- footer-data -->
			<div class="container inset-bottom-60">
				<div class="row" >
					<div class="col-sm-12 col-md-5 col-lg-6 border-sep-right">
						<div class="footer-logo hidden-xs">
							<!--  Logo  --> 
							<a class="logo" href="{{ asset('shop_assets/') }}/index-11.html"> <img class="replace-2x" src="{{ asset('shop_assets/') }}/images/custom/layout11/logo-transparent.png" alt="YOURStore"> </a> 
							<!-- /Logo --> 
						</div>
						<div class="box-about">
							<div class="mobile-collapse">
								<h4 class="mobile-collapse__title visible-xs">ABOUT US</h4>
								<div class="mobile-collapse__content">
									<p> No more need to look for other ecommerce themes. We provide huge number of different layouts. Yourstore comes packed with free and useful features developed to make your website creation easier. Innovative clean design, advanced functionality, UI made for humans, extensive documenta- tion and support i continue this list infinitely... </p>
								</div>
							</div>
						</div>
						<!-- subscribe-box -->
						<div class="subscribe-box offset-top-20">
							<div class="mobile-collapse">
								<h4 class="mobile-collapse__title">NEWSLETTER SIGNUP</h4>
								<div class="mobile-collapse__content">
									<form class="form-inline">
										<input class="subscribe-form__input" type="text" name="subscribe">
										<button type="submit" class="btn btn--ys btn--xl">SUBSCRIBE</button>
									</form>
								</div>
							</div>
						</div>
						<!-- /subscribe-box --> 
					</div>
					<div class="col-sm-12 col-md-7 col-lg-6 border-sep-left">
						<div class="row">
							<div class="col-sm-4">
								<div class="mobile-collapse">
									<h4 class="text-left  title-under  mobile-collapse__title">INFORMATION</h4>
									<div class="v-links-list mobile-collapse__content">
										<ul>
											<li><a href="{{ asset('shop_assets/') }}/about.html">About Us</a></li>
											<li><a href="{{ asset('shop_assets/') }}/support-24.html">Customer Service</a></li>
											<li><a href="{{ asset('shop_assets/') }}/faq.html">Privacy Policy</a></li>
											<li><a href="{{ asset('shop_assets/') }}/site-map.html">Site Map</a></li>
											<li><a href="{{ asset('shop_assets/') }}/typography.html">Search Terms</a></li>
											<li><a href="{{ asset('shop_assets/') }}/warranty.html">Advanced Search</a></li>
											<li><a href="{{ asset('shop_assets/') }}/delivery-page.html">Orders and Returns</a></li>
											<li><a href="{{ asset('shop_assets/') }}/contact.html">Contact Us</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mobile-collapse">
									<h4 class="text-left  title-under  mobile-collapse__title">WHY BUY FROM US</h4>
									<div class="v-links-list mobile-collapse__content">
										<ul>
											<li><a href="{{ asset('shop_assets/') }}/warranty.html">Shipping &amp; Returns</a></li>
											<li><a href="{{ asset('shop_assets/') }}/typography.html">Secure Shopping</a></li>
											<li><a href="{{ asset('shop_assets/') }}/about.html">International Shipping</a></li>
											<li><a href="{{ asset('shop_assets/') }}/delivery-page.html">Affiliates</a></li>
											<li><a href="{{ asset('shop_assets/') }}/support-24.html">Group Sales</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mobile-collapse">
									<h4 class="text-left  title-under  mobile-collapse__title">MY ACCOUNT</h4>
									<div class="v-links-list mobile-collapse__content">
										<ul>
											<li><a href="{{ asset('shop_assets/') }}/login_form.html">Sign In</a></li>
											<li><a href="{{ asset('shop_assets/') }}/shopping_cart.html">View Cart</a></li>
											<li><a href="{{ asset('shop_assets/') }}/wishlist.html">My Wishlist</a></li>
											<li><a href="{{ asset('shop_assets/') }}/support-24.html">Track My Order</a></li>
											<li><a href="{{ asset('shop_assets/') }}/faq.html">Help</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /footer-data --> 
			<div class="divider divider-md visible-sm"></div>
			<!-- social-icon -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="social-links social-links--large">
							<ul>
								<li><a class="icon fa fa-facebook" href="http://www.facebook.com/"></a></li>
								<li><a class="icon fa fa-twitter" href="http://www.twitter.com/"></a></li>
								<li><a class="icon fa fa-google-plus" href="http://www.google.com/"></a></li>
								<li><a class="icon fa fa-instagram" href="https://instagram.com/"></a></li>
								<li><a class="icon fa fa-youtube-square" href="https://www.youtube.com/"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /social-icon --> 
			<!-- footer-copyright -->
			<div class="container footer-copyright">
				<div class="row">
					<div class="col-lg-12"> <a href="{{ asset('shop_assets/') }}/index.html"><span>Your</span>Store</a> &copy; 2016 . All Rights Reserved. </div>
				</div>
			</div>
			<!-- /footer-copyright --> 
			<a href="{{ asset('shop_assets/') }}/#" class="btn btn--ys btn--full visible-xs" id="backToTop">Back to top <span class="icon icon-expand_less"></span></a> 
		</footer>
		<!-- END FOOTER section -->
		<!-- Modal (quickViewModal) -->			
		<div class="modal  modal--bg fade"  id="quickViewModal">
		  <div class="modal-dialog white-modal">
		    <div class="modal-content container">
		    	<div class="modal-header">
		       	 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		     	 </div>
		    	<!--  -->
		    	<div class="product-popup">
					<div class="product-popup-content">
					<div class="container-fluid">
						<div class="row product-info-outer">
							<div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
								<div class="product-main-image">
									<div class="product-main-image__item"><img id='product_image' src='' alt="" /></div>
								</div>
							</div>
							<div class="product-info col-xs-12 col-sm-7 col-md-6 col-lg-6">
								<div class="wrapper">
									<div class="product-info__sku pull-left">SKU: <strong id='product_code'></strong></div>
									<div class="product-info__availabilitu pull-right">Availability:   <strong class="color">In Stock</strong></div>
								</div>
								<div class="product-info__title">
									<h2 id='product_name'></h2>
								</div>
								<div class="price-box product-info__price"><span class="price-box__new" id='product_sale_price'>$65.00</span> <span class="price-box__old" id='product_origin_price'>$84.00</span></div>
								<div class="divider divider--xs product-info__divider"></div>
								<div class="product-info__description">
									<div class="product-info__description__brand"> </div>
									<div class="product-info__description__text" id='product_description'></div>
								</div>
								<div class="divider divider--xs product-info__divider"></div>
								<div class="wrapper">
									<div class="pull-left"><span class="option-label">COLOR:</span></div>
									<div class="pull-right required">* Required Fields</div>
								</div>
								<ul class="options-swatch options-swatch--color options-swatch--lg" id='product_color'>
									{{-- <li><a href="{{ asset('shop_assets/') }}/#"><span class="swatch-label"><img src="{{ asset('shop_assets/') }}/images/colors/oldlace.png" alt=""/></span></a></li> --}}
								</ul>						
								<div class="wrapper">
									<div class="pull-left"><span class="option-label">SIZE:</span></div>
									<div class="pull-left required">*</div>
								</div>
								<ul class="options-swatch options-swatch--size options-swatch--lg" id='product_size'>
									{{-- <li><a href="{{ asset('shop_assets/') }}/#">S</a></li> --}}
								</ul>
								<div class="divider divider--sm"></div>
								<div class="wrapper">
									<div class="pull-left"><span class="qty-label">QTY:</span></div>
									<div class="pull-left"><input type="text" name="quantity" class="input--ys qty-input pull-left" value="1"></div>
									<div class="pull-left"><button type="submit" class="btn btn--ys btn--xxl"><span class="icon icon-shopping_basket"></span> Add to cart</button></div>
								</div>
								<ul class="product-link">
									<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="{{ asset('shop_assets/') }}/#"><span class="text">Add to wishlist</span></a></li>
									<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="{{ asset('shop_assets/') }}/#"><span class="text">Add to compare</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					</div>
				</div>
		    	<!-- / -->
		    </div>
		  </div>
		</div>
		<!-- / Modal (quickViewModal) -->
		<!-- External JS --> 
		<!-- jQuery 1.10.1--> 
		<script src="{{ asset('shop_assets/') }}/external/jquery/jquery-2.1.4.min.js"></script> 
		<!-- Bootstrap 3--> 
		<script src="{{ asset('shop_assets/') }}/external/bootstrap/bootstrap.min.js"></script> 
		<!-- Specific Page External Plugins --> 
		<script src="{{ asset('shop_assets/') }}/external/slick/slick.min.js"></script>
		<script src="{{ asset('shop_assets/') }}/external/bootstrap-select/bootstrap-select.min.js"></script>  
		<script src="{{ asset('shop_assets/') }}/external/countdown/jquery.plugin.min.js"></script> 
		<script src="{{ asset('shop_assets/') }}/external/countdown/jquery.countdown.min.js"></script> 		
		<script src="{{ asset('shop_assets/') }}/external/instafeed/instafeed.min.js"></script> 
		<script src="{{ asset('shop_assets/') }}/external/magnific-popup/jquery.magnific-popup.min.js"></script> 
		<script src="{{ asset('shop_assets/') }}/external/nouislider/nouislider.min.js"></script>
		<script src="{{ asset('shop_assets/') }}/external/isotope/isotope.pkgd.min.js"></script> 
		<script src="{{ asset('shop_assets/') }}/external/imagesloaded/imagesloaded.pkgd.min.js"></script>
		<script src="{{ asset('shop_assets/') }}/external/colorbox/jquery.colorbox-min.js"></script> 
		<!-- Custom --> 
		<script src="{{ asset('shop_assets/') }}/js/custom.js"></script> 	
		<script src="//code.jquery.com/jquery.js"></script>	
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="{{ asset('shop_assets/') }}/ajax/ajax.js"></script> 

	</body>
</html>