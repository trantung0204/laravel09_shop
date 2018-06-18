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
		<link rel="stylesheet" href="{{ asset('shop_assets/') }}/external/bootstrap-select/bootstrap-select.css">		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{ asset('shop_assets/') }}/css/style.css">
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
			#btn-add-to-cart {
				display: none;
			}
			.btn-choose-detail{
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
							<a href="{{ asset('shop_assets/') }}/product.html"><span class="act-underline"><span class="act-underline">PRODUCT</span></span></a>
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
								<a href="{{ asset('shop_assets/') }}/product.html">
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
							<a href="{{ asset('shop_assets/') }}/listing.html"><span class="act-underline">WOMEN’s<span class="badge badge--menu">NEW</span></span></a>
						</span>
						<ul class="multicolumn-level">
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="{{ asset('shop_assets/') }}/listing.html">										
										<span>TOPS</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Blouses & Shirts</a></li>									
									<li class="level3">										
										<span class="name">
											<span class="expander">-</span>
											<a href="{{ asset('shop_assets/') }}/listing.html"><span class="act-underline">Dresses</span></a>
										</span>
										<ul class="image-links-level-4 megamenu__submenu">
											<li class="level4"><a href="{{ asset('shop_assets/') }}/listing.html">Bodycon Dresses</a></li>
											<li class="level4">												
												<span class="name">
													<span class="expander">-</span>
													<a href="{{ asset('shop_assets/') }}/listing.html"><span class="act-underline">Midi Dresses</span></a>
												</span>
												<ul class="image-links-level-5 megamenu__submenu">
													<li class="level5"><a href="{{ asset('shop_assets/') }}/listing.html">Occasion & Cocktail</a></li>
													<li class="level5"><a href="{{ asset('shop_assets/') }}/listing.html">Casual Everyday</a></li>
													<li class="level5"><a href="{{ asset('shop_assets/') }}/listing.html">Going Out & Party Dresses</a></li>
												</ul>
											</li>
											<li class="level4"><a href="{{ asset('shop_assets/') }}/listing.html">Fit & Flare</a></li>
											<li class="level4"><a href="{{ asset('shop_assets/') }}/listing.html">Shift Dresses</a></li>											
											<li class="level4"><a href="{{ asset('shop_assets/') }}/listing.html">Slip Dresses</a></li>
											<li class="level4"><a href="{{ asset('shop_assets/') }}/listing.html">Tunic Dresses</a></li>
										</ul>
									</li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Tops & T-shirts</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Sleeveless Tops</a></li>									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Sweaters & Cardigans</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Jackets</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Outerwear</a></li>
								</ul>
							</li>
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="{{ asset('shop_assets/') }}/listing.html">										
										<span>BOTTOMS</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Trousers</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Jeans</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Leggings</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Jumpsuit & shorts</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Skirts</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Tights</a></li>								
								</ul>
							</li>
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="{{ asset('shop_assets/') }}/listing.html">										
										<span>ACCESSORIES</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Jewellery</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Hats</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Scarves & snoods</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Belts</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Bags</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Shoes</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Sunglasses</a></li>																	
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="{{ asset('shop_assets/') }}/listing.html"><span class="act-underline">MEN’s<span class="badge badge--menu badge--color">SALE</span></span></a>
						</span>
						<ul class="multicolumn-level">
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="{{ asset('shop_assets/') }}/listing.html">										
										<span>TOPS</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Jackets</a></li>									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Shirts</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Sweaters & Cardigans</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">T-shirts</a></li>									
								</ul>
							</li>
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="{{ asset('shop_assets/') }}/listing.html">										
										<span>BOTTOMS</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Trousers</a></li>									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Jeans</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Skirts</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Swimwear</a></li>									
								</ul>
							</li>
							<li>
								<span class="name">
									<span class="expander">-</span>
									<a class="megamenu__subtitle" href="{{ asset('shop_assets/') }}/listing.html">										
										<span>ACCESSORIES</span>
									</a>
								</span>
								<ul class="image-links-level-3 megamenu__submenu">									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Bags</a></li>									
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Shoes</a></li>
									<li class="level3"><a href="{{ asset('shop_assets/') }}/listing.html">Sunglasses</a></li>																		
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
			<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-6 col-xl-7">
							<!-- logo start --> 
							<a href="{{ asset('shop/home') }}"><img class="logo replace-2x img-responsive" src="{{ asset('shop_assets/') }}/images/logo.png" alt=""/> </a> 
							<!-- logo end --> 
						</div>
						<div class="col-sm-8 col-md-8 col-lg-6 col-xl-5 text-right">
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
					</div>
				</div>
				<div class="stuck-nav">
					<div class="container offset-top-5">
						<div class="row">
							<div class="pull-left col-sm-9 col-md-9 col-lg-10">
								<!-- navigation start -->
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
							<!-- navigation end -->
							<div class="pull-right col-sm-3 col-md-3 col-lg-2">
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
									<div class="account link-inline">
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
									<!-- shopping cart start -->
									@include('shop.pages.inline_shoping_cart')
									<!-- shopping cart end -->			
								</div>
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
					<li><a href="{{ asset('shop_assets/') }}/#">Women’s</a></li>
					<li class="active">Dresses</li>
				</ol>
			</div>
		</div>
		<!-- /breadcrumbs --> 
		<!-- CONTENT section -->
		<div id="pageContent">
			<section class="content offset-top-0">
				<div class="container">
					<div class="row product-info-outer">
						<div id="productPrevNext" class="hidden-xs hidden-sm">

							@if (isset($previousProduct) && !empty($previousProduct))
								<a href="{{ asset('shop/product') }}{{'/'.$previousProduct->slug}}" class="product-prev"><img src="{{ url(\Storage::url($previousProduct->images[0]->link)) }}" alt="" /></a>
							@endif
							@if (isset($nextProduct))
								<a href="{{ asset('shop/product') }}{{'/'.$nextProduct->slug}}" class="product-next"><img src="{{ url(\Storage::url($nextProduct->images[0]->link)) }}" alt="" /></a>
							@endif
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 hidden-xs">
									<div class="product-main-image">
										<div class="product-main-image__item"><img class="product-zoom" src='{{ url(\Storage::url($productImages[0]->link)) }}' data-zoom-image="{{ url(\Storage::url($productImages[0]->link)) }}" alt="" /></div>
										<div class="product-main-image__zoom"></div>
									</div>
									<div class="product-images-carousel">
										<ul id="smallGallery">
											@foreach ($productImages as $image)
												<li><a href="#" data-image="{{ url(\Storage::url($image->link)) }}" data-zoom-image="{{ url(\Storage::url($image->link)) }}"><img src="{{ url(\Storage::url($image->link)) }}" alt="" /></a></li>
											@endforeach											
										</ul>
									</div>
									<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="video-link"><span class="icon icon-videocam"></span>Video</a>
								</div>
								<div class="product-info col-sm-6 col-md-6 col-lg-6 col-xl-6">
									<div class="wrapper hidden-xs">
										<div class="product-info__sku pull-left">SKU: <strong  id="main_product_code">{{$product->code}}</strong></div>
										<div class="product-info__availability pull-right">Availability:   <strong class="color">In Stock</strong></div>
									</div>
									<div class="product-info__title">
										<h2>{{$product->name}}</h2>
									</div>
									<div class="wrapper visible-xs">
										<div class="product-info__sku pull-left">SKU: <strong>mtk012c</strong></div>
										<div class="product-info__availability pull-right">Availability:   <strong class="color">In Stock</strong></div>
									</div>
									<div class="visible-xs">
										<div class="clearfix"></div>
										<ul id="mobileGallery">
											<li><a href="{{ asset('shop_assets/') }}/#" data-image="images/product/product-big-1.jpg" data-zoom-image="{{ asset('shop_assets/') }}/images/product/product-big-1-zoom.jpg"><img src="{{ asset('shop_assets/') }}/images/product/product-small-1.jpg" alt="" /></a></li>
											<li><a href="{{ asset('shop_assets/') }}/#" data-image="images/product/product-big-2.jpg" data-zoom-image="{{ asset('shop_assets/') }}/images/product/product-big-2-zoom.jpg"><img src="{{ asset('shop_assets/') }}/images/product/product-small-2.jpg" alt="" /></a></li>
											<li><a href="{{ asset('shop_assets/') }}/#" data-image="images/product/product-big-3.jpg" data-zoom-image="{{ asset('shop_assets/') }}/images/product/product-big-3-zoom.jpg"><img src="{{ asset('shop_assets/') }}/images/product/product-small-3.jpg" alt="" /></a></li>
											<li><a href="{{ asset('shop_assets/') }}/#" data-image="images/product/product-big-4.jpg" data-zoom-image="{{ asset('shop_assets/') }}/images/product/product-big-4-zoom.jpg"><img src="{{ asset('shop_assets/') }}/images/product/product-small-4.jpg" alt="" /></a></li>
											<li><a href="{{ asset('shop_assets/') }}/#" data-image="images/product/product-big-5.jpg" data-zoom-image="{{ asset('shop_assets/') }}/images/product/product-big-5-zoom.jpg"><img src="{{ asset('shop_assets/') }}/images/product/product-small-5.jpg" alt="" /></a></li>
										</ul>
									</div>
									<div class="price-box product-info__price"><span class="price-box__new">${{$product->sale_price}}</span> <span class="price-box__old">${{$product->origin_price}}</span></div>
									<div class="product-info__review">
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<a href="{{ asset('shop_assets/') }}/#">1 Review(s)</a> <a href="{{ asset('shop_assets/') }}/#">Add Your Review</a> 
									</div>
									<div class="divider divider--xs product-info__divider hidden-xs"></div>
									<div class="product-info__description hidden-xs">
										<div class="product-info__description__brand"> </div>
										<div class="product-info__description__text">{{$product->description}}</div>
									</div>
									<div class="divider divider--xs product-info__divider"></div>
									<div class="wrapper">
										<div class="pull-left"><span class="option-label">COLOR:</span>  Red + $10.00 *</div>
										<div class="pull-right required">* Choose color</div>
									</div>
									<ul class="options-swatch options-swatch--color options-swatch--lg" id="choosen_product_color" data-color="">
										@foreach ($productColors as $color)
											<li><a data-url="{{ route('shop.getSizeByColor',[$product->code,$color->color_id]) }}" data-color="{{$color->color_id}}" class="btn-choose-size"><span class="swatch-label"><div class="product-color" style="width:40px;height:40px;box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.15);background:{{$color->color_code}};"></div></span></a></li>
										@endforeach
										{{-- <li><a href="{{ asset('shop_assets/') }}/#"><span class="swatch-label"><img src="{{ asset('shop_assets/') }}/images/colors/oldlace.png" alt=""/></span></a></li> --}}
									</ul>
									<div class="wrapper">
										<div class="pull-left"><span class="option-label">SIZE:</span></div>
										<div class="pull-right required">* Then choose a size</div>
									</div>
									<ul class="options-swatch options-swatch--size options-swatch--lg" id="choosen_product_size" data-size="">
										{{-- @foreach ($productSizes as $size)
											<li><a>{{$size->size_number}}</a></li>
										@endforeach --}}
										{{-- <li><a href="{{ asset('shop_assets/') }}/#">S</a></li> --}}
									</ul>
									<div class="divider divider--sm"></div>
									<div class="wrapper">
										<div class="pull-left"><span class="qty-label">QTY:</span></div>
										<div class="pull-left">											
											<!--  -->
											<div class="number input-counter">
											    <span class="minus-btn"></span>
											    <input id="main-product-quantity" type="text" value="1" size="5"/>
											    <span class="plus-btn"></span>
											</div>
											<!-- / -->
										</div>
										<div class="pull-left"><button data-url="{{ route('shop.addProduct') }}" class="btn btn--ys btn--xxl" id="btn-add-to-cart" color-id="" size-id="" data-url-reload-cart="{{ route('shop.getCart') }}"><span class="icon icon-shopping_basket"></span> Add to cart</button></div>
									</div>
									<ul class="product-link">
										<li class="text-right"><a href="{{ asset('shop_assets/') }}/#"><span class="icon icon-favorite_border  tooltip-link"></span><span class="text">Add to wishlist</span></a></li>
										<li class="text-left"><a href="{{ asset('shop_assets/') }}/#"><span class="icon icon-sort  tooltip-link"></span><span class="text">Add to compare</span></a></li>
									</ul>									
								</div>	
							</div>
							<div class="content">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs nav-tabs--ys1" role="tablist">
									<li class="active"><a href="{{ asset('shop_assets/') }}/#Tab1"  role="tab" data-toggle="tab" class="text-uppercase">DESCRIPTION</a></li>
									<li><a href="{{ asset('shop_assets/') }}/#Tab2" role="tab" data-toggle="tab" class="text-uppercase">Reviews</a></li>
									<li><a href="{{ asset('shop_assets/') }}/#Tab3" role="tab" data-toggle="tab" class="text-uppercase">Tags</a></li>
									<li><a href="{{ asset('shop_assets/') }}/#Tab4" role="tab" data-toggle="tab" class="text-uppercase">CUSTOM TAB</a></li>
									<li><a href="{{ asset('shop_assets/') }}/#Tab5" role="tab" data-toggle="tab" class="text-uppercase">Sizing Guide</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content tab-content--ys nav-stacked">
									<div role="tabpanel" class="tab-pane active" id="Tab1">
										<p>{{$product->description}}</p>
										<div class="divider divider--md"></div>
										<table class="table table-params">
											<tbody>
												<tr>
													<td class="text-right"><span class="color">PROOF</span></td>
													<td>PDF Proof</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">SAMPLES</span></td>
													<td>Digital, Printed</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">WRAPPING</span></td>
													<td>Yes,  No</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">UV GLOSS COATING</span></td>
													<td>Yes</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">SHRINK WRAPPING</span></td>
													<td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">WEIGHT</span></td>
													<td>0.05, 0.06, 0.07ess cards</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div role="tabpanel" class="tab-pane" id="Tab2">
										<h5><strong class="color">CUSTOMER REVIEWS 1 ITEM(S)</strong></h5>
										<p> GREAT!</p>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
										<div class="divider divider--xs"></div>
										<table class="table table-params">
											<tbody>
												<tr>
													<td class="text-right"><span class="color">QUALITY</span></td>
													<td>
														<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
													</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">PRICE</span></td>
													<td>
														<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
													</td>
												</tr>
												<tr>
													<td class="text-right"><span class="color">VALUE</span></td>
													<td>
														<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
													</td>
												</tr>
											</tbody>
										</table>
										<p class="color-light">Review by User / (posted on 16/9/2016)</p>
										<div class="divider divider--xs"></div>
										<h5><strong class="color">WRITE YOUR OWN REVIEW</strong></h5>
										<p><span class="color">YOU'RE REVIEWING:</span>  Lorem ipsum dolor sit amet conse ctetur</p>
										<p><span class="color">HOW DO YOU RATE THIS PRODUCT?</span></p>
										<div class="divider divider--xs"></div>
										<div class="table-responsive">
											<table class="table table-params">
												<tbody>
													<tr>
														<td class="text-right"></td>
														<td class="text-center">
															<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
														</td>
														<td class="text-center">
															<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
														</td>
														<td class="text-center">
															<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
														</td>
														<td class="text-center">
															<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
														</td>
														<td class="text-center">
															<div class="rating"><span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span></div>
														</td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">QUALITY</span></td>
														<td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">PRICE</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">VALUE</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-enable">&#x25cf;</span></td>
														<td class="text-center"><span class="icon-disable">&#x25cf;</span></td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="divider divider--xs"></div>
										<form action="#" class="contact-form">
											<label>Nickname<span class="required">*</span></label>
											<input type="text" class="input--ys input--ys--full">
											<label>Summary of Your Review<span class="required">*</span></label>
											<input type="text" class="input--ys input--ys--full">
											<label>Review<span class="required">*</span></label>
											<textarea class="textarea--ys input--ys--full"></textarea>
											<div class="divider divider--xs"></div>
											<button type="submit" class="btn btn--ys text-uppercase">Submit Review</button>
										</form>
									</div>
									<div role="tabpanel" class="tab-pane" id="Tab3">
										<h5><strong class="color">OTHER PEOPLE MARKED THIS PRODUCT WITH THESE TAGS:</strong></h5>
										<p>Pattern (1)</p>
										<div class="divider divider--xs"></div>
										<h5><strong class="color">ADD YOUR TAGS:</strong></h5>
										<form action="#" class="contact-form">
											<input type="text" class="input--ys input--ys--full">
											<p>Use spaces to separate tags. Use single quotes (') for phrases.</p>
											<div class="divider divider--xs"></div>
											<button type="submit" class="btn btn--ys">Add Tags</button>
										</form>
									</div>
									<div role="tabpanel" class="tab-pane" id="Tab4">
										<h5><strong class="color text-uppercase">Lorem ipsum dolor sit amet conse ctetur adipisicing elit</strong></h5>
										<div class="divider divider--xs"></div>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  orem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
										<ul class="marker-list-circle">
											<li><span class="text-uppercase">Lorem ipsum dolor sit amet</span></li>
											<li><span class="text-uppercase">Conse ctetur adipisicing</span></li>
											<li><span class="text-uppercase">Elit sed do eiusmod tempor</span></li>
											<li><span class="text-uppercase">Incididunt ut laborev</span></li>
											<li><span class="text-uppercase">Et dolore magna aliqua</span></li>
											<li><span class="text-uppercase">Ut enim ad min</span></li>
										</ul>
									</div>
									<div role="tabpanel" class="tab-pane" id="Tab5">
										<h5><strong class="color text-uppercase">Clothing - Single Size Conversion (Continued)</strong></h5>
										<div class="divider divider--xs"></div>
										<div class="table-responsive">
											<table class="table table-params">
												<tbody>
													<tr>
														<td class="text-right"><span class="color">UK</span></td>
														<td>
															<ul class="sizes-row">
																<li>18</li>
																<li>20</li>
																<li>22</li>
																<li>24</li>
																<li>26</li>
															</ul>
														</td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">European</span></td>
														<td>
															<ul class="sizes-row">
																<li>46</li>
																<li>48</li>
																<li>50</li>
																<li>52</li>
																<li>54</li>
															</ul>
														</td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">US</span></td>
														<td>
															<ul class="sizes-row">
																<li>14</li>
																<li>16</li>
																<li>18</li>
																<li>20</li>
																<li>22</li>
															</ul>
														</td>
													</tr>
													<tr>
														<td class="text-right"><span class="color">Australia</span></td>
														<td>
															<ul class="sizes-row">
																<li>8</li>
																<li>10</li>
																<li>12</li>
																<li>14</li>
																<li>16</li>
															</ul>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>						
						<div class="custom-product-block col-xl-4 visible-xl">
							<div class="delivery-banner" onclick="window.location.href = '#'">
								<div class="delivery-banner__icon"><span class="icon-redeem"></span></div>
								<div class="delivery-banner__text">
									<h3>SPECIAL OFFER 1+1=3</h3>
									<h5>Get a gift!</h5>
									<p>Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis.</p>
								</div>
							</div>
							<div class="delivery-banner" onclick="window.location.href = '#'">
								<div class="delivery-banner__icon"><span class="icon-card_membership"></span></div>
								<div class="delivery-banner__text">
									<h3>FREE REWARD CARD</h3>
									<h5>Worth 10$, 50$, 100$</h5>
									<p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
								</div>
							</div>
							<div class="delivery-banner" onclick="window.location.href = '#'">
								<div class="delivery-banner__icon"><span class="icon-local_shipping"></span></div>
								<div class="delivery-banner__text">
									<h3>Free Shipping</h3>
									<h5>on orders over $100</h5>
									<p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
								</div>
							</div>
							<div class="delivery-banner" onclick="window.location.href = '#'">
								<div class="delivery-banner__icon"><span class="icon-replay_5"></span></div>
								<div class="delivery-banner__text">
									<h3>Order Return</h3>
									<h5>Returns within 5 days</h5>
									<p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
								</div>
							</div>
							<div class="divider-line"></div>
							<h4 class="text-uppercase">Related Products</h4>
							<p>Check items to add to the cart or <a href="{{ asset('shop_assets/') }}/#" class="color">select all</a></p>
							<div class="vertical-carousel vertical-carousel-2 with-checkbox offset-top-40">
								<div class="vertical-carousel__item">
									<div class="vertical-carousel__item__select pull-left">
										<div class="checkbox-group"><input type="checkbox" name="checkbox1" value="product1" id="checkBox1"><label for="checkBox1"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
									</div>
									<div class="vertical-carousel__item__image pull-left"><a href="{{ asset('shop_assets/') }}/#"><img src="{{ asset('shop_assets/') }}/images/product/product-80x100-3.jpg" alt=""></a></div>
									<div class="vertical-carousel__item__title">
										<h2><a href="{{ asset('shop_assets/') }}/#">Quis nostrud exercit ation</a></h2>
									</div>
									<div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								</div>
								<div class="vertical-carousel__item">
									<div class="vertical-carousel__item__select pull-left">
										<div class="checkbox-group"><input type="checkbox" name="checkbox2" value="product2" id="checkBox2"><label for="checkBox2"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
									</div>
									<div class="vertical-carousel__item__image pull-left"><a href="{{ asset('shop_assets/') }}/#"><img src="{{ asset('shop_assets/') }}/images/product/product-80x100-4.jpg" alt=""></a></div>
									<div class="vertical-carousel__item__title">
										<h2><a href="{{ asset('shop_assets/') }}/#">Quis nostrud exercit ation</a></h2>
									</div>
									<div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								</div>
								<div class="vertical-carousel__item">
									<div class="vertical-carousel__item__select pull-left">
										<div class="checkbox-group"><input type="checkbox" name="checkbox3" value="product3" id="checkBox3"><label for="checkBox3"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
									</div>
									<div class="vertical-carousel__item__image pull-left"><a href="{{ asset('shop_assets/') }}/#"><img src="{{ asset('shop_assets/') }}/images/product/product-80x100-1.jpg" alt=""></a></div>
									<div class="vertical-carousel__item__title">
										<h2><a href="{{ asset('shop_assets/') }}/#">Quis nostrud exercit ation</a></h2>
									</div>
									<div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								</div>
								<div class="vertical-carousel__item">
									<div class="vertical-carousel__item__select pull-left">
										<div class="checkbox-group"><input type="checkbox" name="checkbox4" value="product4" id="checkBox4"><label for="checkBox4"><span class="check"></span> <span class="box"></span> &nbsp;</label></div>
									</div>
									<div class="vertical-carousel__item__image pull-left"><a href="{{ asset('shop_assets/') }}/#"><img src="{{ asset('shop_assets/') }}/images/product/product-80x100-2.jpg" alt=""></a></div>
									<div class="vertical-carousel__item__title">
										<h2><a href="{{ asset('shop_assets/') }}/#">Quis nostrud exercit ation</a></h2>
									</div>
									<div class="price-box">$26.00<span class="price-box__old">$28.00</span></div>
									<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>			
			<!-- related products -->
			<section class="content">
				<div class="container">
					<!-- title -->
					<div class="title-with-button">
						<div class="carousel-products__center pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
						<h2 class="text-left text-uppercase title-under pull-left">YOU MAY ALSO BE INTERESTED IN THE FOLLOWING PRODUCT(S)</h2>
					</div>
					<!-- /title --> 
					<!-- carousel -->
					<div class="carousel-products row" id="carouselRelated">
						@foreach ($categoryProducts as $product)
						<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-one-six">
							<!-- product -->
							<div class="product">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="{{ asset('shop/product') }}{{'/'.$product->slug}}"> <img src="{{ url(\Storage::url($product->images[0]->link)) }}" alt=""> </a> 
										<!-- quick-view --> 
										<a data-url="{{ route('shop.productModal',$product->code) }}" class="quick-view btn-quickview"><b><span class="icon icon-visibility "></span> Quick view</b> </a>  
										<!-- /quick-view --> 
									</div>
									<!-- /product image --> 
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="{{ asset('shop/product') }}{{'/'.$product->slug}}">{{$product->name}}</a></h2>
									</div>
									<!-- /product name -->                 <!-- product description --> 
									<!-- visible only in row-view mode -->
									<div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
									<!-- /product description -->                 <!-- product price -->
									<div class="product__inside__price price-box">${{$product->sale_price}}</div>
									<!-- /product price -->                 <!-- product review --> 
									<!-- visible only in row-view mode -->
									<div class="product__inside__review row-mode-visible">
										<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<a href="{{ asset('shop_assets/') }}/#">1 Review(s)</a> <a href="{{ asset('shop_assets/') }}/#">Add Your Review</a> 
									</div>
									<!-- /product review --> 
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<div class="product__inside__info__btns"> <a href="{{ asset('shop_assets/') }}/#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
												<a href="{{ asset('shop_assets/') }}/#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
												<a href="{{ asset('shop_assets/') }}/#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
												<a href="{{ asset('shop_assets/') }}/#" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> 
											</div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="{{ asset('shop_assets/') }}/#"><span class="text">Add to wishlist</span></a></li>
												<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="{{ asset('shop_assets/') }}/#" class="compare-link"><span class="text">Add to compare</span></a></li>
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
					</div>
					<!-- /carousel --> 
				</div>
			</section>
			<!-- /related products -->
		</div>
		<!-- End CONTENT section --> 
		<!-- FOOTER section -->
		<footer>
			<!-- footer-data -->
			<div class="container inset-bottom-60">
				<div class="row" >
					<div class="col-sm-12 col-md-5 col-lg-6 border-sep-right">
						<div class="footer-logo hidden-xs">
							<!--  Logo  --> 
							<a class="logo" href="{{ asset('shop_assets/') }}/index.html"> <img class="replace-2x" src="{{ asset('shop_assets/') }}/images/logo.png"  alt="YOURStore"> </a> 
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
			<div class="divider divider-md visible-xs visible-sm visible-md"></div>
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
									<div class="product-info__sku pull-left">SKU: <strong>mtk012c</strong></div>
									<div class="product-info__availabilitu pull-right">Availability:   <strong class="color">In Stock</strong></div>
								</div>
								<div class="product-info__title">
									<h2 id='product_name'>Lorem ipsum dolor sit ctetur</h2>
								</div>
								<div class="price-box product-info__price"><span class="price-box__new" id='product_sale_price'>$65.00</span> <span class="price-box__old" id='product_origin_price'>$84.00</span></div>
								<div class="divider divider--xs product-info__divider"></div>
								<div class="product-info__description">
									<div class="product-info__description__brand"> </div>
									<div class="product-info__description__text" id='product_description'>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
								</div>
								<div class="divider divider--xs product-info__divider"></div>
								<div class="wrapper">
									<div class="pull-left"><span class="option-label">COLOR:</span></div>
									<div class="pull-right required">* Required Fields</div>
								</div>
								<ul class="options-swatch options-swatch--color options-swatch--lg"  id='product_color'>
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
		<script src="{{ asset('shop_assets/') }}/external/imagesloaded/imagesloaded.pkgd.min.js"></script> 
		<script src="{{ asset('shop_assets/') }}/external/elevatezoom/jquery.elevatezoom.js"></script>
		<script src="{{ asset('shop_assets/') }}/external/colorbox/jquery.colorbox-min.js"></script> 
		<!-- Custom --> 
		<script src="{{ asset('shop_assets/') }}/js/custom.js"></script> 
		<script src="{{ asset('shop_assets/') }}/js/js-product.js"></script>	

		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="{{ asset('shop_assets/') }}/ajax/ajax.js"></script> 
	</body>
</html>