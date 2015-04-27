<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>Marvel - MultiShop Responsive HTML5 Template</title>		
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Marvel - MultiShop Responsive HTML5 Template">
		<meta name="author" content="pixelgeeklab.com">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700' rel='stylesheet' type='text/css'>

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo $this->getBaseTheme('front','marvel');?>vendor/fontawesome/css/font-awesome.css">
		<link rel="stylesheet" href="<?php echo $this->getBaseTheme('front','marvel');?>vendor/owlcarousel/owl.carousel.css" media="screen">
		<link rel="stylesheet" href="<?php echo $this->getBaseTheme('front','marvel');?>vendor/owlcarousel/owl.theme.css" media="screen">
		<link href="<?php echo $this->getBaseTheme('front','marvel');?>vendor/owl-carousel/owl.transitions.html" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="<?php echo $this->getBaseTheme('front','marvel');?>vendor/flexslider/flexslider.css" media="screen">
		<link rel="stylesheet" href="<?php echo $this->getBaseTheme('front','marvel');?>vendor/chosen/chosen.css" media="screen">
		<link rel="stylesheet" href="<?php echo $this->getBaseTheme('front','marvel');?>vendor/magnific-popup/magnific-popup.css" media="screen">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo $this->getBaseTheme('front','marvel');?>css/theme.css">
		<link rel="stylesheet" href="<?php echo $this->getBaseTheme('front','marvel');?>css/theme-animate.css">

		<!--my styles-->
		<link rel="stylesheet" href="<?php echo $this->getBaseTheme('front','marvel');?>css/myStyles.css">

		<!-- Style Switcher-->
		<link rel="stylesheet" href="<?php echo $this->getBaseTheme('front','marvel');?>style-switcher/css/style-switcher.css">
		<link href="<?php echo $this->getBaseTheme('front','marvel');?>css/colors/default/style.html" rel="stylesheet" id="layoutstyle">
		
		<!-- Head libs -->
		<script src="<?php echo $this->getBaseTheme('front','marvel');?>vendor/modernizr/modernizr.js"></script>

		<!--[if IE]>
			<link rel="stylesheet" href="<?php echo $this->getBaseTheme('front','marvel');?>css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="<?php echo $this->getBaseTheme('front','marvel');?>vendor/respond/respond.js"></script>
			<script src="<?php echo $this->getBaseTheme('front','marvel');?>vendor/excanvas/excanvas.js"></script>
		<![endif]-->

	</head>
	<body class="front bg-pattern-dark">
		<div class="body">
			<header id="header" class="header-light">
				<div class="header-top light-header-top">
					<div class="container">
						<nav>
							<ul class="nav nav-pills nav-top nav-top-right">
								<li class="search"><a data-target=".search-wrapper" data-toggle="modal" href="<?php echo $this->getBaseTheme('front','marvel');?>javascript:void(0);"><i class="fa fa-search"></i></a></li>
								<li class="login">
									<a data-target=".form-wrapper" data-toggle="modal" href="<?php echo $this->getBaseTheme('front','marvel');?>javascript:void(0);"><i class="fa fa-user"></i>Login/Register</a>
								</li>
								<li class="shopping-cart">
									<a href="#offcanvas-cart" data-uk-offcanvas><i class="fa fa-shopping-cart"></i> <span>(<span>0</span>)</span></a>
								</li>
							</ul>
						</nav>
						<p class="text-note pull-left">Free Shipping and Returns</p>
						
					</div>	
				</div>
				
				<div class="container">
					<div class="navbar-header">
						<a href="<?php echo $this->getBaseTheme('front','marvel');?>#offcanvas" class="uk-navbar-toggle hidden-lg pull-right" data-uk-offcanvas>
							<span class="sr-only">Toggle navigation</span>
							<i class="fa fa-bars"></i>
						</a>
						<h1 class="logo">
							<a href="<?php echo $this->getBaseTheme('front','marvel');?>index-2.html"><img alt="Marvel" src="<?php echo $this->getBaseTheme('front','marvel');?>images/logo2.png"></a>
						</h1>
					</div>
					<div class="navbar-collapse nav-main-collapse collapse">
						<nav class="nav-main pull-right">
							<ul class="nav nav-pills nav-main-menu">
								<li class="dropdown active">
									<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $this->getBaseTheme('front','marvel');?>#">Home</a>
								</li>
								<li class="dropdown megamenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $this->getBaseTheme('front','marvel');?>#">Men</a>
								</li>
								<li class="dropdown megamenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $this->getBaseTheme('front','marvel');?>#">Women</a>
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $this->getBaseTheme('front','marvel');?>#">Shop</a>
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $this->getBaseTheme('front','marvel');?>#">Blog</a>
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $this->getBaseTheme('front','marvel');?>#">Pages</a>
								</li>
								<li>
									<a href="<?php echo $this->getBaseTheme('front','marvel');?>contact.html">Contact Us</a>
								</li>
							</ul>
						</nav>
					</div>
					
				</div>
				
			</header>
			<?php echo $content;?>
			<?php /*
			<div role="main" class="main">
				<section class="main-content-wrap">
					<div class="container">
						<div class="owl-carousel main-slides first-slides" data-plugin-options='{"items": 1, "autoPlay": false, "navigation": true}'>
							<div class="slide-item">
								<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/slides/demo-slide-1.jpg" alt="">
								<div class="slide-item-caption-wrap">
									<div class="slide-item-caption-cont">
										<div class="slide-item-caption-info">
											<p class="product-cat">Lookbook</p>
											<span class="divider bg-color1"></span>
											<h1>Fall/Winter<br>
											2014 new<br>
											collection</h1>
											<p class="btn-group"><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn btn-default">Shop Men's</a> <a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn btn-default">Shop Women's</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="slide-item">
								<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/slides/demo-slide-2.jpg" alt="">
								<div class="slide-item-caption-wrap">
									<div class="slide-item-caption-cont">
										<div class="slide-item-caption-info">
											<p class="product-cat">Winter Style</p>
											<span class="divider bg-color1"></span>
											<h1>All The Trends You Need This Season</h1>
											<p class="btn-group"><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn btn-default">Shop Men's</a> <a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn btn-default">Shop Women's</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="slide-item">
								<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/slides/demo-slide-3.jpg" alt="">
								<div class="slide-item-caption-wrap">
									<div class="slide-item-caption-cont">
										<div class="slide-item-caption-info">
											<p class="product-cat">Lookbook</p>
											<span class="divider bg-color1"></span>
											<h1>20% Off New!<br>
											Limited Edition<br>
											collection</h1>
											<p class="btn-group"><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn btn-default">Shop Men's</a> <a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn btn-default">Shop Women's</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<section class="highlight-shop">
						<div class="container">
							<div class="row row-fluid">
								<div class="col-xs-12 col-md-12">
									<div class="latest-highlight">
										<h2>Shop Men’s</h2>
										<p>Lorem ipsum dolor sit amet marshmallow cotton</p>
										<div class="row">
											<div class="owl-carousel multi-slides multi-slides-right" data-plugin-options='{"items": 4, "singleItem": false, "itemsDesktop": 2, "pagination": false, "navigation": true}'>
												<div class="col-md-12">
													<div class="thumb-item">
														<div class="thumb-item-img">
															<a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-product-detail-classic.html" class="btn-detail">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-1.jpg" alt="">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-1-over.jpg" alt="">
															</a>
															<span class="thumb-act thumb-act-first">
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn-cart"><i class="fa fa-shopping-cart"></i></a>
																<a data-target="#quickview-detail" data-toggle="modal" href="<?php echo $this->getBaseTheme('front','marvel');?>javascript:void(0);"><i class="fa fa-eye"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-heart-o"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-exchange"></i></a>
															</span>
														</div>
														<div class="thumb-item-content">
															<div class="star-rating pull-right" title="Rated 5.00 out of 5">
																<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
															</div>
															<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Silver Stainless Steel</a></h3>
															<p class="product-cat"><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Bags</a>, <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Accessories</a></p>
															<p class="product-price"><ins>$280.00</ins></p>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="thumb-item">
														<div class="thumb-item-img">
															<a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-product-detail-classic.html" class="btn-detail">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-1.jpg" alt="">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-1-over.jpg" alt="">
															</a>
															<span class="thumb-act thumb-act-first">
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn-cart"><i class="fa fa-shopping-cart"></i></a>
																<a data-target="#quickview-detail" data-toggle="modal" href="<?php echo $this->getBaseTheme('front','marvel');?>javascript:void(0);"><i class="fa fa-eye"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-heart-o"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-exchange"></i></a>
															</span>
														</div>
														<div class="thumb-item-content">
															<div class="star-rating pull-right" title="Rated 5.00 out of 5">
																<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
															</div>
															<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Silver Stainless Steel</a></h3>
															<p class="product-cat"><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Bags</a>, <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Accessories</a></p>
															<p class="product-price"><ins>$280.00</ins></p>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="thumb-item">
														<div class="thumb-item-img">
															<a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-product-detail-classic.html" class="btn-detail">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-2.jpg" alt="">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-2-over.jpg" alt="">
															</a>
															<span class="thumb-act thumb-act-first">
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn-cart"><i class="fa fa-shopping-cart"></i></a>
																<a data-target="#quickview-detail" data-toggle="modal" href="<?php echo $this->getBaseTheme('front','marvel');?>javascript:void(0);"><i class="fa fa-eye"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-heart-o"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-exchange"></i></a>
															</span>
														</div>
														<div class="thumb-item-content">
															<div class="star-rating pull-right" title="Rated 5.00 out of 5">
																<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
															</div>
															<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Silver Stainless Steel</a></h3>
															<p class="product-cat"><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Bags</a>, <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Accessories</a></p>
															<p class="product-price"><ins>$280.00</ins></p>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="thumb-item">
														<div class="thumb-item-img">
															<a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-product-detail-classic.html" class="btn-detail">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-13.jpg" alt="">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-13-over.jpg" alt="">
															</a>
															<span class="thumb-act thumb-act-first">
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn-cart"><i class="fa fa-shopping-cart"></i></a>
																<a data-target="#quickview-detail" data-toggle="modal" href="<?php echo $this->getBaseTheme('front','marvel');?>javascript:void(0);"><i class="fa fa-eye"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-heart-o"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-exchange"></i></a>
															</span>
														</div>
														<div class="thumb-item-content">
															<div class="star-rating pull-right" title="Rated 5.00 out of 5">
																<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
															</div>
															<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Silver Stainless Steel</a></h3>
															<p class="product-cat"><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Bags</a>, <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Accessories</a></p>
															<p class="product-price"><ins>$280.00</ins></p>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="thumb-item">
														<div class="thumb-item-img">
															<a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-product-detail-classic.html" class="btn-detail">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-12.jpg" alt="">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-12-over.jpg" alt="">
															</a>
															<span class="thumb-act thumb-act-first">
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn-cart"><i class="fa fa-shopping-cart"></i></a>
																<a data-target="#quickview-detail" data-toggle="modal" href="<?php echo $this->getBaseTheme('front','marvel');?>javascript:void(0);"><i class="fa fa-eye"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-heart-o"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-exchange"></i></a>
															</span>
														</div>
														<div class="thumb-item-content">
															<div class="star-rating pull-right" title="Rated 5.00 out of 5">
																<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
															</div>
															<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Silver Stainless Steel</a></h3>
															<p class="product-cat"><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Bags</a>, <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Accessories</a></p>
															<p class="product-price"><ins>$280.00</ins></p>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="thumb-item">
														<div class="thumb-item-img">
															<a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-product-detail-classic.html" class="btn-detail">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-7.jpg" alt="">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-8.jpg" alt="">
															</a>
															<span class="thumb-act thumb-act-first">
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn-cart"><i class="fa fa-shopping-cart"></i></a>
																<a data-target="#quickview-detail" data-toggle="modal" href="<?php echo $this->getBaseTheme('front','marvel');?>javascript:void(0);"><i class="fa fa-eye"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-heart-o"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-exchange"></i></a>
															</span>
														</div>
														<div class="thumb-item-content">
															<div class="star-rating pull-right" title="Rated 5.00 out of 5">
																<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
															</div>
															<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Silver Stainless Steel</a></h3>
															<p class="product-cat"><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Bags</a>, <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Accessories</a></p>
															<p class="product-price"><ins>$280.00</ins></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					
					<section class="banner">
						<div class="container">
							<div class="banner-inner bg-color6" style="margin-top: 50px;">
								<div class="row">
									<div class="col-sm-5 col-md-6">
										<h4>Sign up for updates</h4>
										<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia<br>deserunt mollit anim id est laborum.</p>
									</div>
									<div class="col-sm-7 col-md-6">
										<form class="form-newsletter form-inline" role="form">
											<div class="form-group">
												<label class="sr-only" for="exampleInputEmail3">Email address</label>
												<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Your email">
											</div>
											<button type="submit" class="btn btn-primary">Subscribe</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</section>
					
					<section class="highlight-shop">
						<div class="container">
							<div class="row row-fluid">
								<div class="col-xs-12 col-md-12">
									<div class="latest-highlight" style="margin-bottom: 50px;">
										<h2>Shop Women’s</h2>
										<p>Lorem ipsum dolor sit amet marshmallow cotton</p>
										<div class="row">
											<div class="owl-carousel multi-slides multi-slides-right" data-plugin-options='{"items": 4, "singleItem": false, "itemsDesktop": 2, "pagination": false, "navigation": true}'>
												<div class="col-md-12">
													<div class="thumb-item">
														<div class="thumb-item-img">
															<a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-product-detail-classic.html" class="btn-detail">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-10.jpg" alt="">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-10-over.jpg" alt="">
															</a>
															<span class="thumb-act thumb-act-first">
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn-cart"><i class="fa fa-shopping-cart"></i></a>
																<a data-target="#quickview-detail" data-toggle="modal" href="<?php echo $this->getBaseTheme('front','marvel');?>javascript:void(0);"><i class="fa fa-eye"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-heart-o"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-exchange"></i></a>
															</span>
														</div>
														<div class="thumb-item-content">
															<div class="star-rating pull-right" title="Rated 5.00 out of 5">
																<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
															</div>
															<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Silver Stainless Steel</a></h3>
															<p class="product-cat"><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Bags</a>, <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Accessories</a></p>
															<p class="product-price"><ins>$280.00</ins></p>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="thumb-item">
														<div class="thumb-item-img">
															<a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-product-detail-classic.html" class="btn-detail">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-11.jpg" alt="">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-11-over.jpg" alt="">
															</a>
															<span class="thumb-act thumb-act-first">
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn-cart"><i class="fa fa-shopping-cart"></i></a>
																<a data-target="#quickview-detail" data-toggle="modal" href="<?php echo $this->getBaseTheme('front','marvel');?>javascript:void(0);"><i class="fa fa-eye"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-heart-o"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-exchange"></i></a>
															</span>
														</div>
														<div class="thumb-item-content">
															<div class="star-rating pull-right" title="Rated 5.00 out of 5">
																<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
															</div>
															<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Silver Stainless Steel</a></h3>
															<p class="product-cat"><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Bags</a>, <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Accessories</a></p>
															<p class="product-price"><ins>$280.00</ins></p>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="thumb-item">
														<div class="thumb-item-img">
															<a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-product-detail-classic.html" class="btn-detail">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-2.jpg" alt="">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-2-over.jpg" alt="">
															</a>
															<span class="thumb-act thumb-act-first">
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn-cart"><i class="fa fa-shopping-cart"></i></a>
																<a data-target="#quickview-detail" data-toggle="modal" href="<?php echo $this->getBaseTheme('front','marvel');?>javascript:void(0);"><i class="fa fa-eye"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-heart-o"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-exchange"></i></a>
															</span>
														</div>
														<div class="thumb-item-content">
															<div class="star-rating pull-right" title="Rated 5.00 out of 5">
																<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
															</div>
															<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Silver Stainless Steel</a></h3>
															<p class="product-cat"><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Bags</a>, <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Accessories</a></p>
															<p class="product-price"><ins>$280.00</ins></p>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="thumb-item">
														<div class="thumb-item-img">
															<a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-product-detail-classic.html" class="btn-detail">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-13.jpg" alt="">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-13-over.jpg" alt="">
															</a>
															<span class="thumb-act thumb-act-first">
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn-cart"><i class="fa fa-shopping-cart"></i></a>
																<a data-target="#quickview-detail" data-toggle="modal" href="<?php echo $this->getBaseTheme('front','marvel');?>javascript:void(0);"><i class="fa fa-eye"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-heart-o"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-exchange"></i></a>
															</span>
														</div>
														<div class="thumb-item-content">
															<div class="star-rating pull-right" title="Rated 5.00 out of 5">
																<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
															</div>
															<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Silver Stainless Steel</a></h3>
															<p class="product-cat"><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Bags</a>, <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Accessories</a></p>
															<p class="product-price"><ins>$280.00</ins></p>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="thumb-item">
														<div class="thumb-item-img">
															<a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-product-detail-classic.html" class="btn-detail">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-9.jpg" alt="">
																<img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-7.jpg" alt="">
															</a>
															<span class="thumb-act thumb-act-first">
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn-cart"><i class="fa fa-shopping-cart"></i></a>
																<a data-target="#quickview-detail" data-toggle="modal" href="<?php echo $this->getBaseTheme('front','marvel');?>javascript:void(0);"><i class="fa fa-eye"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-heart-o"></i></a>
																<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-exchange"></i></a>
															</span>
														</div>
														<div class="thumb-item-content">
															<div class="star-rating pull-right" title="Rated 5.00 out of 5">
																<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
															</div>
															<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Silver Stainless Steel</a></h3>
															<p class="product-cat"><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Bags</a>, <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Accessories</a></p>
															<p class="product-price"><ins>$280.00</ins></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					
					<section class="parallax">
						<div class="container" style="background-image: url(<?php echo $this->getBaseTheme('front','marvel');?>images/bg/bg-demo-4.jpg);">
							<div class="col-xs-10 col-sm-8 col-md-6 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 contact-info-wrap">
								<div class="contact-info">
									<h2>Our Store</h2>
									<address>
										Pzza Martiri Olivetta, 16, 16034, Portofino, Italy
									</address>
									<span class="divider bg-color3"></span>
									<p><strong>Opening hours</strong></p>
									<p>Monday to Friday: 9am - 6pm<br>
									Saturday to Sunday: 10am - 4pm</p>
								</div>
							</div>
						</div>
					</section>
					
					<section class="latest-posts">
						<div class="container">
							<div class="row row-fluid">
								<div class="col-sm-6">
									<article class="post post-small">
										<div class="row row-fluid">
											<div class="col-xs-6">
												<div class="post-image">
													<a href="<?php echo $this->getBaseTheme('front','marvel');?>blog-single.html"><img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/content/demo-2.jpg" alt="Blog"></a>
												</div>
											</div>
											<div class="col-xs-6">
												<div class="post-content">
													<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>blog-single.html">Introducing: The Brooklyn Bomber Jacket</a></h3>
													<div class="post-meta">
														<span>By <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">John Doe</a></span> 
														<span>in <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Fashion</a></span>
														<span><i class="fa fa-comment-o"></i> <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">212</a></span>
													</div>
													<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna.</p>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="col-sm-6">
									<article class="post post-small">
										<div class="row row-fluid">
											<div class="col-xs-6">
												<div class="post-image">
													<a href="<?php echo $this->getBaseTheme('front','marvel');?>blog-single.html"><img class="img-responsive" src="<?php echo $this->getBaseTheme('front','marvel');?>images/content/demo-1.jpg" alt="Blog"></a>
												</div>
											</div>
											<div class="col-xs-6">
												<div class="post-content">
													<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>blog-single.html">Image Post Type</a></h3>
													<div class="post-meta">
														<span>By <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">John Doe</a></span> 
														<span>in <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Fashion</a></span>
														<span><i class="fa fa-comment-o"></i> <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">212</a></span>
													</div>
													<p>Porta ac consectetur ac, vestibulum at eros. Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna.</p>
												</div>
											</div>
										</div>
									</article>
								</div>
							</div>	
						</div>
					</section>
					
				</section>
			</div>
 			*/ ?>
			<footer id="footer" class="bg-color6">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<h4>Contact Us</h4>
							<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor</p>
							<address>
								To order: +12 345 6789<br>
								Client support: +12 987 6543<br>
								Email: <a href="<?php echo $this->getBaseTheme('front','marvel');?>mailto:pixelgeeklab@gmail.com">pixelgeeklab@gmail.com</a>
							</address>
							<ul class="social-icons">
								<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" target="_blank" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
								<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" target="_blank" data-toggle="tooltip" data-placement="top" title="Flickr"><i class="fa fa-flickr"></i></a></li>
							</ul>
						</div>
						<div class="col-md-2">
							<h4>Useful links</h4>
							<ul class="list-links">
								<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">About Us</a></li>
								<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Size guide</a></li>
								<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Postage + Delivery</a></li>
								<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Shipping & Returns</a></li>
								<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Privacy Policy</a></li>
								<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Returns + Exchangees</a></li>
								<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Terms + Conditions</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<h4>Newsletter</h4>
							<p>Sign up to get exclusive offers from our store</p>
							<form role="form" class="form-newsletter">
								<div class="form-group">
									<label for="exampleInputEmail2" class="sr-only">Email address</label>
									<input type="email" placeholder="Your email address" id="exampleInputEmail2" class="form-control">
								</div>
								<button class="btn btn-lightdark" type="submit">Subscribe</button>
							</form>
						</div>
						<div class="col-md-3">
							<div class="footer-copyright">
								<p><img src="<?php echo $this->getBaseTheme('front','marvel');?>images/logo-w.png" alt=""></p>
								<p>© 2014 Marvel. All Rights Reserved. Designed by <a href="<?php echo $this->getBaseTheme('front','marvel');?>http://pixelgeeklab.com/" target="_blank">Pixelgeeklab.com</a>.</p>
								<ul class="card-icons">
									<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" target="_blank" data-toggle="tooltip" data-placement="top" title="Paypal"><i class="fa fa-cc-paypal"></i></a></li>
									<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" target="_blank" data-toggle="tooltip" data-placement="top" title="Mastercard"><i class="fa fa-cc-mastercard"></i></a></li>
									<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" target="_blank" data-toggle="tooltip" data-placement="top" title="Visa"><i class="fa fa-cc-visa"></i></a></li>
									<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" target="_blank" data-toggle="tooltip" data-placement="top" title="Discover"><i class="fa fa-cc-discover"></i></a></li>
									<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" target="_blank" data-toggle="tooltip" data-placement="top" title="AMEX"><i class="fa fa-cc-amex"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

				<!-- Begin Search -->
		<div class="modal fade bs-example-modal-lg search-wrapper" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<p class="clearfix"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button></p>
					<form class="form-inline form-search" role="form">
						<div class="form-group">
							<label class="sr-only" for="textsearch">Enter text search</label>
							<input type="text" class="form-control input-lg" id="textsearch" placeholder="Enter text search">
						</div>
						<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
		</div>
		<!-- End Search -->
		
		<!-- Begin Login/Register -->
		<div class="modal fade form-wrapper" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
					<ul role="tablist" class="nav nav-tabs grid-tabs text-center">
						<li class="active"><a data-toggle="tab" role="tab" href="<?php echo $this->getBaseTheme('front','marvel');?>#login">Login</a></li>
						<li><a data-toggle="tab" role="tab" href="<?php echo $this->getBaseTheme('front','marvel');?>#register">Register</a></li>
					</ul>
					<div class="tab-content">
						<div id="login" class="tab-pane active">
							<form class="form-block" role="form">
								<div class="text-center">
									<h2>I'm already a member</h2>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
								<div class="form-group">
									<label for="lemail" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" id="lemail" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="lpassword" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="lpassword" placeholder="Password">
								</div>
								<div class="form-group text-center">
									<div class="checkbox">
										<label><input type="checkbox"> Remember me</label>
										<a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Lost Password?</a>
									</div>
								</div>
								<div class="form-group text-center">
									<button type="submit" class="btn btn-default">Login</button>
								</div>
							</form>
						</div>
						<div id="register" class="tab-pane">
							<form class="form-block" role="form">
								<div class="text-center">
									<h2>I'm new here</h2>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
								<div class="form-group">
									<label for="name" class="control-label sr-only">Name</label>
									<input type="text" class="form-control" id="name" placeholder="Name">
								</div>
								<div class="form-group">
									<label for="resemail" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" id="resemail" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="respassw" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="respassw" placeholder="Password">
								</div>
								<div class="form-group text-center">
									<button type="submit" class="btn btn-default">Register</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Login/Register -->
		
		<!-- Begin Quickview -->
		<div class="modal fade quickview-wrapper" id="quickview-detail" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
					<div class="product-detail">
						<div class="row">
							<div class="col-md-6">
								<div class="product-preview">
									<div class="flexslider flexsliderModal">
										<ul class="slides">
											<li data-thumb="images/products/product-9.jpg">
												<img src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-9.jpg" alt="">
											</li>
											<li data-thumb="images/products/product-8.jpg">
												<img src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-8.jpg" alt="">
											</li>
											<li data-thumb="images/products/product-7.jpg">
												<img src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-7.jpg" alt="">
											</li>
											<li data-thumb="images/products/product-6.jpg">
												<img src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-6.jpg" alt="">
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="thumb-item thumb-item-list summary">
									<div class="thumb-item-content">
										<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Silver Stainless Steel</a></h3>
										<ul class="list-review">
											<li>
												<div class="star-rating" title="Rated 5.00 out of 5">
													<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
												</div>
											</li>
											<li>0 Review</li>
											<li class="btn-add-review"><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Add Your Review</a></li>
										</ul>
										<p class="product-price"><ins>$280.00</ins></p>
										<p>Nam ullamcorper neque non erat elementum vulputate. Nullam dignissim lobortis interdum. Donec nisi est, tempus eget. Nam ullamcorper neque non erat elementum vulputate. Nullam dignissim lobortis interdum.</p>
										<p class="quan">
											<label>Qty:</label>
											<input type="text" name="quantity" value="1" title="Qty" class="input-text qty">
										</p>
										<p class="thumb-act thumb-act-more">
											<a href="<?php echo $this->getBaseTheme('front','marvel');?>#" class="btn-cart"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></a>
											<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-heart-o"></i></a>
											<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><i class="fa fa-exchange"></i></a>
										</p>
										<hr>
										<p class="product-cat">Category: <a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Bottoms</a>.</p>
										<ul class="social-icons-share">
											<li><label>Share on:</label></li>
											<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" target="_blank" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" target="_blank" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
											<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#" target="_blank" data-toggle="tooltip" data-placement="top" title="Email"><i class="fa fa-envelope-o"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Quickview -->
		
		<div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
				<ul id="main-menu-offcanvas" class="uk-nav-offcanvas" data-uk-nav>
					<li class="uk-parent uk-active">
						<a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Home</a>
						<ul class="uk-nav-sub">
							<li class="active"><a href="<?php echo $this->getBaseTheme('front','marvel');?>index-2.html">Home Version 1</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>index-3.html">Home Version 2</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>index-4.html">Home Version 3</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>index-5.html">Home Version 4</a></li>
										<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>index-6.html">Home Version 5</a></li>
						</ul>
					</li>
					<li class="uk-parent">
						<a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Men</a>
						<ul class="uk-nav-sub">
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Coats and Trench coats</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Jackets</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Blazers</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Suits</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Edition</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Trousers</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Jeans</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Shirts</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">T-shirts</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Sweatshirts</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Shoes</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Bags</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Accessories</a></li>
						</ul>
					</li>
					<li class="uk-parent">
						<a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Women</a>
						<ul class="uk-nav-sub">
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Coats and Trench coats</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Jackets</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Blazers</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Suits</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Edition</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Trousers</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Jeans</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Shirts</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">T-shirts</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Sweatshirts</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Shoes</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Bags</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Accessories</a></li>
						</ul>
					</li>
					<li class="uk-parent">
						<a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Shop</a>
						<ul class="uk-nav-sub">
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-grid-fullwidth.html">Shop Grid Full Width</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-grid-classic.html">Shop Grid Classic</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-product-grid.html">Shop Product Grid</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-list-sidebar.html">Shop List Sidebar</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-product-detail-fullwidth.html">Product Detail FullWidth</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-product-detail-classic.html">Product Detail Classic</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-product-detail-custom.html">Product Detail Custom</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-cart-full.html">Shopping Cart Full</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-checkout.html">Shop-Checkout</a></li>
						</ul>
					</li>
					<li class="uk-parent">
						<a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Blog</a>
						<ul class="uk-nav-sub">
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>blog.html">Blog Full Width</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>blog-mansory.html">Blog Mansory</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>blog-sidebar.html">Blog Sidebar</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>blog-single.html">Blog Single</a></li>
						</ul>
					</li>
					<li class="uk-parent">
						<a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Pages</a>
						<ul class="uk-nav-sub">
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>page-about.html">About Us</a></li>
							<li><a href="<?php echo $this->getBaseTheme('front','marvel');?>page-404.html">Page 404</a></li>
						</ul>
					</li>
					<li class="uk-parent">
						<a href="<?php echo $this->getBaseTheme('front','marvel');?>contact.html">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>	
		
		<div id="offcanvas-cart" class="uk-offcanvas">
			<div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
				<div class="uk-panel">
					<h3>Cart</h3>
					<ul class="list-thumbs-pro">
						<li class="product">
							<div class="thumb-item">
								<div class="thumb-item-img">
									<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><img width="80" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-1.jpg" alt=""></a>
								</div>
								
								<div class="thumb-item-content">
									<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Striped full skirt</a></h3>
									<div class="star-rating" title="Rated 5.00 out of 5">
										<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
									</div>
									<p class="product-price"><ins>$280.00</ins></p>
								</div>
							</div>
						</li>
						<li class="product">
							<div class="thumb-item">
								<div class="thumb-item-img">
									<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><img width="80" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-2.jpg" alt=""></a>
								</div>
								
								<div class="thumb-item-content">
									<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Striped full skirt</a></h3>
									<div class="star-rating" title="Rated 5.00 out of 5">
										<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
									</div>
									<p class="product-price"><ins>$280.00</ins></p>
								</div>
							</div>
						</li>
						<li class="product">
							<div class="thumb-item">
								<div class="thumb-item-img">
									<a href="<?php echo $this->getBaseTheme('front','marvel');?>#"><img width="80" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-6.jpg" alt=""></a>
								</div>
								
								<div class="thumb-item-content">
									<h3><a href="<?php echo $this->getBaseTheme('front','marvel');?>#">Striped full skirt</a></h3>
									<div class="star-rating" title="Rated 5.00 out of 5">
										<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
									</div>
									<p class="product-price"><ins>$280.00</ins></p>
								</div>
							</div>
						</li>
					</ul>
					<ul class="list-inline cart-subtotals">
						<li class="cart-subtotal"><strong>Subtotal:</strong></li>
						<li class="price"><span class="amount"><strong>$431</strong></span></li>
					</ul>
					<a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-cart-full.html" class="btn btn-dark btn-block">View Cart</a>
					<a href="<?php echo $this->getBaseTheme('front','marvel');?>shop-checkout.html" class="btn btn-primary btn-block">Go to Checkout</a>
				</div>
			</div>
		</div>
		<!-- Vendor -->
		<script src="<?php echo $this->getBaseTheme('front','marvel');?>vendor/jquery/jquery.js"></script>
		<script src="<?php echo $this->getBaseTheme('front','marvel');?>vendor/bootstrap/bootstrap.js"></script>
		<script src="<?php echo $this->getBaseTheme('front','marvel');?>vendor/jquery.validation/jquery.validation.js"></script>
		<script src="<?php echo $this->getBaseTheme('front','marvel');?>vendor/owlcarousel/owl.carousel.js"></script>
		<script src="<?php echo $this->getBaseTheme('front','marvel');?>vendor/flexslider/jquery.flexslider-min.js"></script>
		<script src="<?php echo $this->getBaseTheme('front','marvel');?>vendor/countdown/countdown.min.js"></script>
		<script src="<?php echo $this->getBaseTheme('front','marvel');?>vendor/chosen/chosen.jquery.min.js"></script>
		<script src="<?php echo $this->getBaseTheme('front','marvel');?>vendor/pricefilter/jquery.pricefilter.js"></script>
		<script src="<?php echo $this->getBaseTheme('front','marvel');?>vendor/masonry/imagesloaded.pkgd.min.js"></script>
		<script src="<?php echo $this->getBaseTheme('front','marvel');?>vendor/masonry/masonry.pkgd.min.js"></script>
		<script src="<?php echo $this->getBaseTheme('front','marvel');?>vendor/uikit/uikit.js"></script>
		<script src="<?php echo $this->getBaseTheme('front','marvel');?>vendor/magnific-popup/jquery.magnific-popup.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo $this->getBaseTheme('front','marvel');?>js/theme.js"></script>
		
		<!-- Style Switcher -->
		<script type="text/javascript" src="<?php echo $this->getBaseTheme('front','marvel');?>style-switcher/js/switcher.js"></script>
		
	</body>
</html>