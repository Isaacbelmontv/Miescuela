<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Miescuelaideal</title>
        <!-- Fonts -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/bootstrap-slider.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/icomoon.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/chosen.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/scrollbar.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/morris.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/YouTubePopUp.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/auto-complete.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/jquery.navhideshow.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/transitions.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/colorv3.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" >
        <script type="text/javascript" src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    </head>

    <body class="listar-home listar-hometwo">
    	<!--[if lt IE 8]>
    		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    	<![endif]-->
    	<!--************************************
    			Preloader Start
    	*************************************-->
    	<div class="preloader-outer">
    		<div class="pin"></div>
    		<div class="pulse"></div>
    	</div>
    	<!--************************************
    			Preloader End
    	*************************************-->
    	<!--************************************
    			Wrapper Start
    	*************************************-->
    	<div id="listar-wrapper" class="listar-wrapper listar-haslayout">
    		<!--************************************
    				Header Start
    		*************************************-->
    		<header id="listar-header" class="listar-header cd-auto-hide-header listar-headervthree listar-haslayout">
    			<div class="container-fluid">
    				<div class="row">
    					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    						<strong class="listar-logo"><a href="index.html"><img src="images/logov3.png" alt="company logo here"></a></strong>
    						<nav class="listar-addnav">
    							<ul>
    								<li>
    									<a id="listar-btnsignin" class="listar-btn listar-btnblue" href="#listar-loginsingup">
    										<i class="icon-smiling-face"></i>
    										<span>Join Now</span>
    									</a>
    								</li>
    								<li>
    									<a class="listar-btn listar-btngreen" href="dashboardaddlisting.html">
    										<i class="icon-plus"></i>
    										<span>Add Listing</span>
    									</a>
    								</li>
    								<li>
    									<div class="dropdown listar-themedropdown">
    										<a id="listar-cartdropdown" class="listar-btn listar-btnround listar-btncartdropdown" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    											<em>2</em>
    											<i class="icon-icons240"></i>
    										</a>
    										<div class="dropdown-menu listar-themedropdownmenu listar-minicart" aria-labelledby="listar-cartdropdown">
    											<div class="listar-cartitem">
    												<figure><a href="javascript:void(0);"><img src="images/cart/img-01.jpg" alt="image description"></a></figure>
    												<div class="listar-iteminfo">
    													<span>Orange Juice</span>
    													<span>2 x $15</span>
    													<a class="listar-btndelate" href="javascript:void(0);">X</a>
    												</div>
    											</div>
    											<div class="listar-cartitem">
    												<figure><a href="javascript:void(0);"><img src="images/cart/img-01.jpg" alt="image description"></a></figure>
    												<div class="listar-iteminfo">
    													<span>Orange Juice</span>
    													<span>2 x $15</span>
    													<a class="listar-btndelate" href="javascript:void(0);">X</a>
    												</div>
    											</div>
    											<div class="listar-cartitem listar-totalarea">
    												<span>Order Total:</span>
    												<span>$60.00</span>
    											</div>
    											<a class="listar-btn listar-btngreen listar-btn-lg" href="javascript:void(0);">View Bag &amp; Checkout</a>
    										</div>
    									</div>
    								</li>
    							</ul>
    						</nav>
    						<nav id="listar-nav" class="listar-nav">
    							<div class="navbar-header">
    								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#listar-navigation" aria-expanded="false">
    									<span class="sr-only">Toggle navigation</span>
    									<span class="icon-bar"></span>
    									<span class="icon-bar"></span>
    									<span class="icon-bar"></span>
    								</button>
    							</div>
    							<div id="listar-navigation" class="collapse navbar-collapse listar-navigation">
    								<ul>
    									<li class="menu-item-has-children current-menu-item">
    										<a href="javascript:void(0);">Home</a>
    										<ul class="sub-menu">
    											<li><a href="index.html">Home v 1</a></li>
    											<li><a href="indexv2.html">Home v 2</a></li>
    											<li class="current-menu-item"><a href="indexv3.html">Home v 3</a></li>
    											<li><a href="indexv4.html">Home v 4</a></li>
    										</ul>
    									</li>
    									<li class="menu-item-has-children">
    										<a href="javascript:void(0);">Explore</a>
    										<ul class="sub-menu">
    											<li><a href="listingvlist.html">All Listings</a></li>
    											<li class="menu-item-has-children">
    												<a href="javascript:void(0);">Food</a>
    												<ul class="sub-menu">
    													<li><a href="listingv1.html">Cafe</a></li>
    													<li><a href="listingv2.html">Restaurant</a></li>
    													<li><a href="listingv1.html">Dinner</a></li>
    													<li><a href="listingv2.html">Pizza Place</a></li>
    													<li><a href="listingv1.html">Italian</a></li>
    													<li><a href="listingv2.html">Bakeries</a></li>
    												</ul>
    											</li>
    											<li class="menu-item-has-children">
    												<a href="javascript:void(0);">Entertainment</a>
    												<ul class="sub-menu">
    													<li><a href="listingv1.html">Art &amp; Design</a></li>
    													<li><a href="listingv2.html">Movie Theater</a></li>
    													<li><a href="listingv1.html">Theme Parks</a></li>
    													<li><a href="listingv2.html">Music Life</a></li>
    												</ul>
    											</li>
    											<li class="menu-item-has-children">
    												<a href="javascript:void(0);">Educational</a>
    												<ul class="sub-menu">
    													<li><a href="listingv1.html">School</a></li>
    													<li><a href="listingv2.html">College</a></li>
    													<li><a href="listingv1.html">University</a></li>
    													<li><a href="listingv2.html">Short Courses</a></li>
    												</ul>
    											</li>
    											<li class="menu-item-has-children">
    												<a href="javascript:void(0);">Nightlife</a>
    												<ul class="sub-menu">
    													<li><a href="listingv1.html">Wine Bars</a></li>
    													<li><a href="listingv2.html">Pubs</a></li>
    													<li><a href="listingv1.html">Nightclub</a></li>
    													<li><a href="listingv2.html">Lounge</a></li>
    												</ul>
    											</li>
    											<li class="menu-item-has-children">
    												<a href="javascript:void(0);">Outdoors</a>
    												<ul class="sub-menu">
    													<li><a href="listingv1.html">Boutiques</a></li>
    													<li><a href="listingv2.html">Fashion</a></li>
    													<li><a href="listingv1.html">Furniture</a></li>
    													<li><a href="listingv2.html">Sport Equipment</a></li>
    												</ul>
    											</li>
    										</ul>
    									</li>
    									<li class="menu-item-has-children">
    										<a href="javascript:void(0);">Pages</a>
    										<ul class="sub-menu">
    											<li><a href="howitwork.html">How It Works</a></li>
    											<li><a href="services.html">Services</a></li>
    											<li><a href="pkgprice.html">Packages</a></li>
    											<li><a href="testimonials.html">Testimonials</a></li>
    											<li><a href="contactus.html">Contact Us</a></li>
    											<li><a href="404error.html">404 Error</a></li>
    											<li><a href="comingsoon.html">Coming Sooon</a></li>
    										</ul>
    									</li>
    									<li class="menu-item-has-children">
    										<a href="javascript:void(0);">News</a>
    										<ul class="sub-menu">
    											<li><a href="newsv1.html">Blog Standard</a></li>
    											<li><a href="newsv2.html">Blog Classic</a></li>
    											<li><a href="newsv3.html">Blog sidebar</a></li>
    										</ul>
    									</li>
    									<li><a href="dashboard.html">Dasboard</a></li>
    								</ul>
    							</div>
    						</nav>
    					</div>
    				</div>
    			</div>
    		</header>
    		<!--************************************
    				Header End
    		*************************************-->
    		<!--************************************
    				Home Slider Start
    		*************************************-->
    		<div id=" listar-homebannervthree" class=" listar-homebannervthree">
    			<figure><img src="images/parallax/bgparallax-10.jpg" alt="image description"></figure>
    			<div id="listar-homebanner" class="listar-homebanner">
    				<div class="container">
    					<div class="row">
    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="listar-bannercontent">
    								<h1>Find Local Services</h1>
    								<div class="listar-description">
    									<p>Find the best places in the city for food, activities and relaxation</p>
    								</div>
    								<form class="listar-formtheme listar-formsearchlisting">
    									<fieldset>
    										<div class="form-group listar-inputwithicon">
    											<i class="icon-layers"></i>
    											<div class="listar-select">
    												<select id="listar-categorieschosen" class="listar-categorieschosen listar-chosendropdown">
    													<option>Ex: Food, Retail, hotel, cinema</option>
    													<option class="icon-entertainment">Art &amp; Entertainment</option>
    													<option class="icon-spa">Beauty &amp; Health</option>
    													<option class="icon-education">Education</option>
    													<option class="icon-healthfitness">Fitness</option>
    													<option class="icon-tourism">Hotels</option>
    													<option class="icon-localservice">Motor Mechanic</option>
    													<option class="icon-nightlife">Night Life</option>
    													<option class="icon-foods">Restaurant</option>
    													<option class="icon-museum">Real Estate</option>
    													<option class="icon-shopping">Shopping</option>
    												</select>
    											</div>
    										</div>
    										<div class="form-group listar-inputwithicon">
    											<i class="icon-global"></i>
    											<div class="listar-select listar-selectlocation">
    												<select id="listar-locationchosen" class="listar-locationchosen listar-chosendropdown">
    													<option>Choose a Location</option>
    													<option>Lahore</option>
    													<option>Bayonne</option>
    													<option>Greenville</option>
    													<option>Manhattan</option>
    													<option>Queens</option>
    													<option>The Heights</option>
    												</select>
    											</div>
    										</div>
    										<div class="form-group listar-inputwithicon">
    											<i class=""><img src="images/icons/iconw-01.png" alt="image description"></i>
    											<p>Price: </p>
    											<input id="listar-rangeslider" class="listar-rangeslider" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">
    										</div>
    										<button type="button" class="listar-btn listar-btngreen">Search Places</button>
    									</fieldset>
    								</form>
    								<div class="listar-bestplacesincity">
    									<div class="listar-bestplacestitle">
    										<h2>Find the Best<span>Places in the City</span></h2>
    									</div>
    									<ul>
    										<li>
    											<i class="icon-foods"></i>
    											<h3>Restaurant</h3>
    										</li>
    										<li>
    											<i class="icon-nightlife"></i>
    											<h3>Night Life</h3>
    										</li>
    										<li>
    											<i class="icon-entertainment"></i>
    											<h3>Entertainment</h3>
    										</li>
    										<li>
    											<i class="icon-localservice"></i>
    											<h3>Local Services</h3>
    										</li>
    										<li>
    											<i class="icon-healthfitness"></i>
    											<h3>health &amp; Fitness</h3>
    										</li>
    										<li>
    											<i class="icon-tourism"></i>
    											<h3>Tourism</h3>
    										</li>
    									</ul>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<!--************************************
    				Home Slider End
    		*************************************-->
    		<!--************************************
    				Main Start
    		*************************************-->
    		<main id="listar-main" class="listar-main listar-haslayout">
    			<!--************************************
    					Explore The City Start
    			*************************************-->
    			<section class="listar-sectionspace listar-haslayout">
    				<div class="container">
    					<div class="row">
    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="listar-sectionhead">
    								<div class="listar-sectiontitle">
    									<h2>Popular Categories</h2>
    								</div>
    								<div class="listar-description">
    									<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra doloremque laudantium, totam rem aperiam</p>
    								</div>
    							</div>
    							<div class="listar-horizontalthemescrollbar">
    								<div class="listar-themeposts listar-categoryposts">
    									<div class="listar-themepost listar-categorypost">
    										<figure class="listar-featuredimg">
    											<a href="javascript:void(0);">
    												<img src="images/post/img-29.jpg" alt="image description">
    												<div class="listar-contentbox">
    													<div class="listar-postcontent">
    														<span class="listar-categoryicon listar-flip"><i class="icon-foods"></i></span>
    														<h3>Restaurant</h3>
    														<h4>Food and Drinks</h4>
    													</div>
    												</div>
    											</a>
    										</figure>
    									</div>
    									<div class="listar-themepost listar-categorypost">
    										<figure class="listar-featuredimg">
    											<a href="javascript:void(0);">
    												<img src="images/post/img-30.jpg" alt="image description">
    												<div class="listar-contentbox">
    													<div class="listar-postcontent">
    														<span class="listar-categoryicon listar-flip"><i class="icon-entertainment"></i></span>
    														<h3>Cinema</h3>
    														<h4>Entertainment</h4>
    													</div>
    												</div>
    											</a>
    										</figure>
    									</div>
    									<div class="listar-themepost listar-categorypost">
    										<figure class="listar-featuredimg">
    											<a href="javascript:void(0);">
    												<img src="images/post/img-31.jpg" alt="image description">
    												<div class="listar-contentbox">
    													<div class="listar-postcontent">
    														<span class="listar-categoryicon listar-flip"><i class="icon-nightlife"></i></span>
    														<h3>Dance Floor</h3>
    														<h4>Night Life</h4>
    													</div>
    												</div>
    											</a>
    										</figure>
    									</div>
    									<div class="listar-themepost listar-categorypost">
    										<figure class="listar-featuredimg">
    											<a href="javascript:void(0);">
    												<img src="images/post/img-29.jpg" alt="image description">
    												<div class="listar-contentbox">
    													<div class="listar-postcontent">
    														<span class="listar-categoryicon listar-flip"><i class="icon-foods"></i></span>
    														<h3>Restaurant</h3>
    														<h4>Food and Drinks</h4>
    													</div>
    												</div>
    											</a>
    										</figure>
    									</div>
    									<div class="listar-themepost listar-categorypost">
    										<figure class="listar-featuredimg">
    											<a href="javascript:void(0);">
    												<img src="images/post/img-30.jpg" alt="image description">
    												<div class="listar-contentbox">
    													<div class="listar-postcontent">
    														<span class="listar-categoryicon listar-flip"><i class="icon-entertainment"></i></span>
    														<h3>Cinema</h3>
    														<h4>Entertainment</h4>
    													</div>
    												</div>
    											</a>
    										</figure>
    									</div>
    									<div class="listar-themepost listar-categorypost">
    										<figure class="listar-featuredimg">
    											<a href="javascript:void(0);">
    												<img src="images/post/img-31.jpg" alt="image description">
    												<div class="listar-contentbox">
    													<div class="listar-postcontent">
    														<span class="listar-categoryicon listar-flip"><i class="icon-nightlife"></i></span>
    														<h3>Dance Floor</h3>
    														<h4>Night Life</h4>
    													</div>
    												</div>
    											</a>
    										</figure>
    									</div>
    									<div class="listar-themepost listar-categorypost">
    										<figure class="listar-featuredimg">
    											<a href="javascript:void(0);">
    												<img src="images/post/img-29.jpg" alt="image description">
    												<div class="listar-contentbox">
    													<div class="listar-postcontent">
    														<span class="listar-categoryicon listar-flip"><i class="icon-foods"></i></span>
    														<h3>Restaurant</h3>
    														<h4>Food and Drinks</h4>
    													</div>
    												</div>
    											</a>
    										</figure>
    									</div>
    									<div class="listar-themepost listar-categorypost">
    										<figure class="listar-featuredimg">
    											<a href="javascript:void(0);">
    												<img src="images/post/img-30.jpg" alt="image description">
    												<div class="listar-contentbox">
    													<div class="listar-postcontent">
    														<span class="listar-categoryicon listar-flip"><i class="icon-entertainment"></i></span>
    														<h3>Cinema</h3>
    														<h4>Entertainment</h4>
    													</div>
    												</div>
    											</a>
    										</figure>
    									</div>
    									<div class="listar-themepost listar-categorypost">
    										<figure class="listar-featuredimg">
    											<a href="javascript:void(0);">
    												<img src="images/post/img-31.jpg" alt="image description">
    												<div class="listar-contentbox">
    													<div class="listar-postcontent">
    														<span class="listar-categoryicon listar-flip"><i class="icon-nightlife"></i></span>
    														<h3>Dance Floor</h3>
    														<h4>Night Life</h4>
    													</div>
    												</div>
    											</a>
    										</figure>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</section>
    			<!--************************************
    					Explore The City End
    			*************************************-->
    			<!--************************************
    					Add Listing Start
    			*************************************-->
    			<section class="listar-sectionspace listar-addlistingarea">
    				<div class="container">
    					<div class="row">
    						<div class="col-xs-12 col-sm-12 col-md-push-2 col-md-8 col-lg-push-2 col-lg-8">
    							<div class="listar-addlisting">
    								<h2>Run and Grow Your Business With Listing Star from Anywhere</h2>
    								<a class="listar-btn listar-btngreen" href="javascript:void(0);">
    									<i class="icon-plus"></i>
    									<span>Add Listing</span>
    								</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</section>
    			<!--************************************
    					Add Listing End
    			*************************************-->
    			<!--************************************
    					Theme Features Start
    			*************************************-->
    			<section class="listar-sectionspace listar-bglight listar-haslayout">
    				<div class="container">
    					<div class="row">
    						<div class="listar-features listar-featuresvthree">
    							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    								<div class="listar-feature">
    									<i class="icon-layers"></i>
    									<h2><span class="listar-bluethemecolor">01</span> Choose a Category</h2>
    									<div class="listar-description">
    										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
    									</div>
    								</div>
    							</div>
    							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    								<div class="listar-feature">
    									<i class="icon-map3"></i>
    									<h2><span class="listar-bluethemecolor">02</span> Find Location</h2>
    									<div class="listar-description">
    										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
    									</div>
    								</div>
    							</div>
    							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    								<div class="listar-feature">
    									<i class="icon-hotairballoon"></i>
    									<h2><span class="listar-bluethemecolor">03</span> Go have Fun</h2>
    									<div class="listar-description">
    										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</section>
    			<!--************************************
    					Theme Features End
    			*************************************-->
    			<!--************************************
    					Recent Listing Start
    			*************************************-->
    			<section class="listar-sectionspace listar-recentlistingarea">
    				<div class="container">
    					<div class="row">
    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="listar-sectionhead">
    								<div class="listar-sectiontitle">
    									<h2>Recent Listings</h2>
    								</div>
    								<ul class="tg-themetabnav" role="tablist">
    									<li role="presentation" class="active"><a href="#one" aria-controls="one" role="tab" data-toggle="tab">Food &amp; Drinks</a></li>
    									<li role="presentation"><a href="#two" aria-controls="two" role="tab" data-toggle="tab">Night Life</a></li>
    									<li role="presentation"><a href="#three" aria-controls="three" role="tab" data-toggle="tab">Local Services</a></li>
    									<li role="presentation"><a href="#four" aria-controls="four" role="tab" data-toggle="tab">Entertainment</a></li>
    									<li role="presentation"><a href="#five" aria-controls="five" role="tab" data-toggle="tab">Health &amp; Fitness</a></li>
    								</ul>
    							</div>
    							<div class="tab-content tg-themetabcontent">
    								<div role="tabpanel" class="tab-pane active" id="one">
    									<div id="listar-recentlistingsliderone" class="listar-themeposts listar-recentlistingslider listar-threecolumnsslider owl-carousel">
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingvlist.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingvlist.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    									</div>
    								</div>
    								<div role="tabpanel" class="tab-pane" id="two">
    									<div id="listar-recentlistingslidertwo" class="listar-themeposts listar-recentlistingslider listar-threecolumnsslider owl-carousel">
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingvlist.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingvlist.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    									</div>
    								</div>
    								<div role="tabpanel" class="tab-pane" id="three">
    									<div id="listar-recentlistingsliderthree" class="listar-themeposts listar-recentlistingslider listar-threecolumnsslider owl-carousel">
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingvlist.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingvlist.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    									</div>
    								</div>
    								<div role="tabpanel" class="tab-pane" id="four">
    									<div id="listar-recentlistingsliderfour" class="listar-themeposts listar-recentlistingslider listar-threecolumnsslider owl-carousel">
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingvlist.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingvlist.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    									</div>
    								</div>
    								<div role="tabpanel" class="tab-pane" id="five">
    									<div id="listar-recentlistingsliderfive" class="listar-themeposts listar-recentlistingslider listar-threecolumnsslider owl-carousel">
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingvlist.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingvlist.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv2.html"><img src="images/post/img-13.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv2.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-nightlife"></i>
    															<span>Night Life</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-14.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv1.html" class="listar-category">
    															<i class="icon-tourism"></i>
    															<span>Hotel</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
    										</div>
    										<div class="item">
    											<div class="listar-themepost listar-placespost">
    												<figure class="listar-featuredimg"><a href="detailv1.html"><img src="images/post/img-15.jpg" alt="image description"></a></figure>
    												<div class="listar-postcontent">
    													<h3><a href="detailv1.html">Tourist Guide</a></h3>
    													<div class="listar-description">
    														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
    													</div>
    													<div class="listar-reviewcategory">
    														<div class="listar-review">
    															<span class="listar-stars"><span></span></span>
    															<em>(3 Review)</em>
    														</div>
    														<a href="listingv2.html" class="listar-category">
    															<i class="icon-foods"></i>
    															<span>Food and Drinks</span>
    														</a>
    													</div>
    													<div class="listar-themepostfoot">
    														<a class="listar-location" href="javascript:void(0);">
    															<i class="icon-icons74"></i>
    															<em>New York</em>
    														</a>
    														<div class="listar-postbtns">
    															<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
    															<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    															<div class="listar-btnquickinfo">
    																<div class="listar-shareicons">
    																	<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    																	<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    																</div>
    																<a class="listar-btnshare" href="javascript:void(0);">
    																	<i class="icon-share3"></i>
    																</a>
    															</div>
    														</div>
    													</div>
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
    			<!--************************************
    					Recent Listing End
    			*************************************-->
    			<!--************************************
    					Spanish Resturent Start
    			*************************************-->
    			<section class="listar-spanishresturent">
    				<div class="container">
    					<div class="row">
    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="listar-spanishresturentbox">
    								<div class="listar-spanishresturentcontent">
    									<h2>Spanish Restaurant</h2>
    									<div class="listar-description">
    										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut Aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
    									</div>
    									<a class="listar-btn listar-btngreen" href="javascript:void(0);">Read More</a>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</section>
    			<!--************************************
    					Spanish Resturent End
    			*************************************-->
    			<!--************************************
    					Pricing Plans Start
    			*************************************-->
    			<section class="listar-sectionspace listar-haslayout">
    				<div class="container">
    					<div class="row">
    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="listar-pricingplans listar-pricingplansvtwo">
    								<div class="listar-pricingplan">
    									<div class="listar-pricingplanhead">
    										<span class="listar-planicon"><i class="icon-layers"></i></span>
    										<h2>Basic</h2>
    										<div class="listar-description">
    											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut Aliquam erat volutpat</p>
    										</div>
    									</div>
    									<div class="listar-pricingplanbody">
    										<h3>Free</h3>
    										<h4>3 Listings</h4>
    									</div>
    									<a class="listar-btn listar-btnblue" href="javascript:void(0);">Start Now</a>
    								</div>
    								<div class="listar-pricingplan listar-hotplan">
    									<div class="listar-pricingplanhead">
    										<span class="listar-planicon"><i class="icon-layers"></i></span>
    										<h2>Extended</h2>
    										<div class="listar-description">
    											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut Aliquam erat volutpat</p>
    										</div>
    									</div>
    									<div class="listar-pricingplanbody">
    										<h3><sup>$</sup>12</h3>
    										<h4>70 Listing</h4>
    									</div>
    									<a class="listar-btn listar-btn listar-btngreen" href="javascript:void(0);">Start Now</a>
    								</div>
    								<div class="listar-pricingplan">
    									<div class="listar-pricingplanhead">
    										<span class="listar-planicon"><i class="icon-layers"></i></span>
    										<h2>Professional</h2>
    										<div class="listar-description">
    											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut Aliquam erat volutpat</p>
    										</div>
    									</div>
    									<div class="listar-pricingplanbody">
    										<h3><sup>$</sup>61</h3>
    										<h4>150 Listing</h4>
    									</div>
    									<a class="listar-btn listar-btn listar-btngreen" href="javascript:void(0);">Start Now</a>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</section>
    			<!--************************************
    					Pricing Plans End
    			*************************************-->
    			<!--************************************
    					Newsletter Start
    			*************************************-->
    			<section class="listar-newsletterarea">
    				<div class="container">
    					<div class="row">
    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="listar-sectionhead">
    								<div class="listar-sectiontitle">
    									<h2>Newsletter</h2>
    								</div>
    								<div class="listar-description">
    									<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra doloremque laudantium, totam rem aperiam</p>
    								</div>
    							</div>
    							<div class="listar-formarea">
    								<form class="listar-formtheme listar-formnewsletter">
    									<fieldset>
    										<input type="email" name="email" class="form-control" placeholder="Your email address">
    										<button class="listar-btn listar-btngreen" type="button">Submit</button>
    									</fieldset>
    								</form>
    							</div>
    						</div>
    					</div>
    				</div>
    			</section>
    			<!--************************************
    					Newsletter End
    			*************************************-->
    		</main>
    		<!--************************************
    				Main End
    		*************************************-->
    		<!--************************************
    				Footer Start
    		*************************************-->
    		<footer id="listar-footer" class="listar-footer listar-footervtwo listar-haslayout">
    			<div class="listar-footeraboutarea">
    				<div class="container">
    					<div class="row">
    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<div class="listar-upperbox">
    								<strong class="listar-logo"><a href="javascript:void(0);"><img src="images/logov3b.png" alt="image description"></a></strong>
    								<ul class="listar-socialicons">
    									<li class="listar-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
    									<li class="listar-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
    									<li class="listar-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
    									<li class="listar-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
    									<li class="listar-vimeo"><a href="javascript:void(0);"><i class="fa fa-vimeo"></i></a></li>
    								</ul>
    								<nav class="listar-navfooter">
    									<ul>
    										<li><a href="javascript:void(0);">Home</a></li>
    										<li><a href="javascript:void(0);">how it work</a></li>
    										<li><a href="javascript:void(0);">Shop</a></li>
    										<li><a href="javascript:void(0);">Packages</a></li>
    										<li><a href="javascript:void(0);">News</a></li>
    										<li><a href="javascript:void(0);">Contact Us</a></li>
    									</ul>
    								</nav>
    							</div>
    							<div class="listar-lowerbox">
    								<div class="listar-description">
    									<p>Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, nominavi sententiae eos in. Et duo salutatus consequat Lorem ipsum dolor sit amet.</p>
    								</div>
    								<address><strong>Address:</strong> No.200 Josecph, San Francisco <span><strong>Tel:</strong> 01-987-654-3210</span></address>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="listar-footerbar">
    				<div class="container">
    					<div class="row">
    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    							<span class="listar-copyright">Copyright &copy; 2018 Listingstar. All rights reserved.</span>
    						</div>
    					</div>
    				</div>
    			</div>
    		</footer>
    		<!--************************************
    				Footer End
    		*************************************-->
    	</div>
    	<!--************************************
    			Wrapper End
    	*************************************-->
    	<!--************************************
    			Theme Modal Box Start
    	*************************************-->
    	<div class="modal fade listar-placequickview" tabindex="-1" role="dialog">
    		<div class="modal-dialog listar-modaldialog" role="document">
    			<div class="modal-content listar-modalcontent">
    				<div class="listar-themepost listar-placespost">
    					<span class="listar-btnclosequickview" data-toggle="modal" data-target=".listar-placequickview">X</span>
    					<figure class="listar-featuredimg" data-vide-bg="poster: images/post/img-16.jpg" data-vide-options="position: 50% 50%">
    						<span class="listar-contactnumber">
    							<i class="icon-"><img src="images/icons/icon-03.png" alt="image description"></i>
    							<em> + 7890 456 133</em>
    						</span>
    					</figure>
    					<div class="listar-postcontent">
    						<h3><a href="javascript:void(0);">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
    						<div class="listar-description">
    							<p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit Nam in mauris quis libero sodales eleifend amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus</p>
    						</div>
    						<ul class="listar-listfeatures">
    							<li>Pets allowed</li>
    							<li>Kitchen</li>
    							<li>Internet</li>
    							<li>Suitable for events</li>
    							<li>Gym</li>
    							<li>Dryer</li>
    							<li>Hot tub</li>
    							<li>Family/kid friendly</li>
    							<li>Wireless Internet</li>
    						</ul>
    						<div class="listar-reviewcategory">
    							<div class="listar-review">
    								<span class="listar-stars"><span></span></span>
    								<em>(3 Review)</em>
    							</div>
    							<a href="javascript:void(0);" class="listar-category">
    								<i class="icon-tourism"></i>
    								<span>Hotel</span>
    							</a>
    						</div>
    						<div class="listar-themepostfoot">
    							<span class="listar-openinghours">
    								<i class="icon-alarmclock2"></i>
    								<em>Today <span class="listar-greenthemecolor">Open Now</span> 10:00 AM - 5:00 PM</em>
    							</span>
    							<div class="listar-postbtns">
    								<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
    								<div class="listar-btnquickinfo">
    									<div class="listar-shareicons">
    										<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
    										<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
    										<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
    									</div>
    									<a class="listar-btnshare" href="javascript:void(0);">
    										<i class="icon-share3"></i>
    									</a>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!--************************************
    			Theme Modal Box End
    	*************************************-->
    	<!--************************************
    			Login Singup Start
    	*************************************-->
    	<div id="listar-loginsingup" class="listar-loginsingup">
    		<button type="button" class="listar-btnclose">x</button>
    		<figure class="listar-loginsingupimg" data-vide-bg="poster: images/bgjoin.jpg" data-vide-options="position: 50% 50%"></figure>
    		<div class="listar-contentarea">
    			<div class="listar-themescrollbar">
    				<div class="listar-logincontent">
    					<div class="listar-themetabs">
    						<ul class="listar-tabnavloginregistered" role="tablist">
    							<li role="presentation" class="active"><a href="#listar-loging" data-toggle="tab">Log in</a></li>
    							<li role="presentation"><a href="#listar-register" data-toggle="tab">Register</a></li>
    						</ul>
    						<div class="tab-content listar-tabcontentloginregistered">
    							<div role="tabpanel" class="tab-pane active fade in" id="listar-loging">
    								<form class="listar-formtheme listar-formlogin">
    									<fieldset>
    										<div class="form-group listar-inputwithicon">
    											<i class="icon-profile-male"></i>
    											<input type="text" name="username" class="form-control" placeholder="Username Or Email">
    										</div>
    										<div class="form-group listar-inputwithicon">
    											<i class="icon-icons208"></i>
    											<input type="password" name="password" class="form-control" placeholder="Password">
    										</div>
    										<div class="form-group">
    											<div class="listar-checkbox">
    												<input type="checkbox" name="remember" id="rememberpass2">
    												<label for="rememberpass2">Remember me</label>
    											</div>
    											<span><a href="#">Lost your Password?</a></span>
    										</div>
    										<button class="listar-btn listar-btngreen">Register</button>
    									</fieldset>
    								</form>
    							</div>
    							<div role="tabpanel" class="tab-pane fade" id="listar-register">
    								<form class="listar-formtheme listar-formlogin">
    									<fieldset>
    										<div class="form-group listar-inputwithicon">
    											<i class="icon-profile-male"></i>
    											<input type="text" name="username" class="form-control" placeholder="Username">
    										</div>
    										<div class="form-group listar-inputwithicon">
    											<i class="icon-icons208"></i>
    											<input type="email" name="emailaddress" class="form-control" placeholder="Email Address">
    										</div>
    										<div class="form-group listar-inputwithicon">
    											<i class="icon-lock-stripes"></i>
    											<input type="password" name="password" class="form-control" placeholder="Password">
    										</div>
    										<div class="form-group listar-inputwithicon">
    											<i class="icon-lock-stripes"></i>
    											<input type="password" name="confirmpassword" class="form-control" placeholder="Password">
    										</div>
    										<button class="listar-btn listar-btngreen">login</button>
    									</fieldset>
    								</form>
    							</div>
    						</div>
    					</div>
    					<div class="listar-shareor"><span>or</span></div>
    					<div class="listar-signupwith">
    						<h2>Sign in With...</h2>
    						<ul class="listar-signinloginwithsocialaccount">
    							<li class="listar-facebook"><a href="javascript:void(0);"><i class="icon-facebook-1"></i><span>Facebook</span></a></li>
    							<li class="listar-twitter"><a href="javascript:void(0);"><i class="icon-twitter-1"></i><span>Twitter</span></a></li>
    							<li class="listar-googleplus"><a href="javascript:void(0);"><i class="icon-google4"></i><span>Google +</span></a></li>
    						</ul>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>

      <!--script-->
              <script type="text/javascript" src="{{ asset('js/vendor/jquery-library.js') }}"></script>

              <script type="text/javascript" src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/mapclustering/data.json') }}"></script>
              <script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en" charset="utf-8"></script>
              <script type="text/javascript" src="{{ asset('js/tinymce/tinymce.min.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci') }}"></script>
              <script type="text/javascript" src="{{ asset('js/mapclustering/markerclusterer.min.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/mapclustering/infobox.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/mapclustering/map.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/ResizeSensor.js.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/jquery.sticky-sidebar.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/YouTubePopUp.jquery.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/jquery.navhideshow.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/backgroundstretch.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/jquery.sticky-kit.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/bootstrap-slider.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/jquery.vide.min.js') }}"></script>
              <script type="text/javascript" src="{{ asset('JS/auto-complete.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/chosen.jquery.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/scrollbar.min.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/isotope.pkgd.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/jquery.steps.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/prettyPhoto.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/raphael-min.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/parallax.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/sortable.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/countTo.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/appear.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/gmap3.js') }}"></script>
              <script type="text/javascript" src="{{ asset('js/dev_themefunction.js') }}"></script>
</html>
