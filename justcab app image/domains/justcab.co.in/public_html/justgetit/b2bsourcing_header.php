<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?php session_start(); ?>
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
	<meta charset = "utf-8">
    <link href = "css/jquery-ui.css"     rel = "stylesheet">
    <!-- Stylesheets
	============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link href = "css/jquery-ui.css"     rel = "stylesheet">
	
    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">
	
    <!-- External JavaScripts
	============================================= -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>

    <!-- Document Title
	============================================= -->
    <title>JustGetIt</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
		============================================= -->
        <header id="header" class="full-header">

            <div id="header-wrap" style="">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i>
                    </div>

                    <!-- Logo
					============================================= -->
                    <div id="logo">
                        <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo">
                        </a>
                        <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo">
                        </a>
						
                    </div>
                    <!-- #logo end -->
					<!-- sign in button -->
						
					
                    <!-- Primary Navigation
					============================================= -->
                    <nav id="primary-menu">
                        <ul>
							<li>
								 <a   href="index.php">
									<div>
										Home
									</div>
								</a>
								
							</li>
							<li>
								 <a   href="sourcing_pricing.php">
									<div>
										Pricing
									</div>
								</a>
								
							</li>
							
							<li>
								 <a   href="#">
									<div>
										Mission
									</div>
								</a>
								    <ul>
                                            <li>
                                                <a href="#">
                                                <div>Services</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                <div>Projects</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                <div>Products</div>
                                                </a>
                                            </li>
                                        </ul>
							</li>
							<li>
								 <a   href="#">
									<div>
										Save The Planet
									</div>
								</a>
								         
							</li>
							<li>
								 <a   href="#">
									<div>
										FAQ
									</div>
								</a>
								    
							</li>
							<li>
								 <a   href="#">
									<div>
										Contact
									</div>
								</a>
								    
							</li>
							<li>
								<?php if(isset($_SESSION['email']) && $_SESSION['email']!="") { ?>	
								<a onClick="logout();"  href="#">
									<div>
										Logout
									</div>
								</a>
								<?php } else { ?>
									<a onClick="signin();"  href="#">
									<div>
										Sign in/Sign out
									</div>
								</a>
								<?php }  ?>
							</li>
                            
                        </ul>

                        <!-- Top Cart
						============================================= -->
                        <!-- <div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Blue Round-Neck Tshirt</a>
											<span class="top-cart-item-price">$19.99</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Light Blue Denim Dress</a>
											<span class="top-cart-item-price">$24.99</span>
											<span class="top-cart-item-quantity">x 3</span>
										</div>
									</div>
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">$114.95</span>
									<button class="button button-3d button-small nomargin fright">View Cart</button>
								</div>
							</div>
						</div> -->

                        <!-- Top Search
						============================================= -->
                        <div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                            <form action="search.html" method="get">
                                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div>
                        <!-- #top-search end -->

                    </nav>
					
                    
                </div>

            </div>

        </header>
        <!-- #header end -->