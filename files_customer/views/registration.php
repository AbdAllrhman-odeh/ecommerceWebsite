<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="../public/img/fav.png">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Be With Us</title>

	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="../public/css/linearicons.css">
	<link rel="stylesheet" href="../public/css/owl.carousel.css">
	<link rel="stylesheet" href="../public/css/themify-icons.css">
	<link rel="stylesheet" href="../public/css/font-awesome.min.css">
	<link rel="stylesheet" href="../public/css/nice-select.css">
	<link rel="stylesheet" href="../public/css/nouislider.min.css">
	<link rel="stylesheet" href="../public/css/bootstrap.css">
	<link rel="stylesheet" href="../public/css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="../views/index.php"><img src="../public/img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto mr-5">
							<li class="nav-item"><a class="nav-link" href="../views/login.php">Sign In</a></li>
							<!-- <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="../views/category.php">Shop Category</a></li>
									<li class="nav-item"><a class="nav-link" href="../views/single-product.php">Product Details</a></li>
									<li class="nav-item"><a class="nav-link" href="../views/checkout.php">Product Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="../views/cart.php">Shopping Cart</a></li>
									<li class="nav-item"><a class="nav-link" href="../views/confirmation.php">Confirmation</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="../views/blog.php">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="../views/single-blog.php">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown active">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item active"><a class="nav-link" href="../views/login.php">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="../views/tracking.php">Tracking</a></li>
									<li class="nav-item"><a class="nav-link" href="../views/elements.php">Elements</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="../views/contact.php">Contact</a></li> -->
						</ul>
						<!-- <ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul> -->
					</div>
				</div>
			</nav>
		</div>
		<!-- <div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div> -->
	</header>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Register</h1>
					<nav class="d-flex align-items-center">
						<!-- <a href="../views/index.php">Home<span class="lnr lnr-arrow-right"></span></a> -->
						<a href="../views/category.php">Be With Us :)</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="../public/img/login.jpg" alt="">
						<div class="hover">
							<h4>Alredy have an account ?</h4>
							<!-- <p>There are advances being made in science and technology everyday, and a good example of this is the</p> -->
							<a class="primary-btn" href="../views/registration.php">Sign In</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Enter your information</h3>
						<form class="row login_form" action="../controller/registrationController.php" method="POST" id="contactForm" >
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'">
									<?php
										if(isset($_SESSION['nameMsg']))
										{
											?>
												<p style="color:#ffba0f; display:inline">
													<?php
														echo($_SESSION['nameMsg']);
														unset($_SESSION['nameMsg']);
													?>
												</p>	
											<?php
										}
									?>
							</div>	
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
								<?php
										if(isset($_SESSION['emailMsg']))
										{
											?>
												<p style="color:#ffba0f; display:inline">
													<?php
														echo($_SESSION['emailMsg']);
														unset($_SESSION['emailMsg']);
													?>
												</p>	
											<?php
										}
										if(isset($_SESSION['minEmailLengthMsg']))
										{
											?>
												<p style="color:#ffba0f; display:inline">
													<?php
														echo($_SESSION['minEmailLengthMsg']);
														unset($_SESSION['minEmailLengthMsg']);
													?>
												</p>	
											<?php
										}
										if(isset($_SESSION['maxEmailLengthMsg']))
										{
											?>
												<p style="color:#ffba0f; display:inline">
													<?php
														echo($_SESSION['maxEmailLengthMsg']);
														unset($_SESSION['maxEmailLengthMsg']);
													?>
												</p>	
											<?php
										}
									?>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
								<?php
										if(isset($_SESSION['passwordMsg']))
										{
											?>
												<p style="color:#ffba0f; display:inline">
													<?php
														echo($_SESSION['passwordMsg']);
														unset($_SESSION['passwordMsg']);
													?>
												</p>	
											<?php
										}
										if(isset($_SESSION['minPasswordLengthMsg']))
										{
											?>
												<p style="color:#ffba0f; display:inline">
													<?php
														echo($_SESSION['minPasswordLengthMsg']);
														unset($_SESSION['minPasswordLengthMsg']);
													?>
												</p>	
											<?php
										}
										if(isset($_SESSION['maxPasswordLengthMsg']))
										{
											?>
												<p style="color:#ffba0f; display:inline">
													<?php
														echo($_SESSION['maxPasswordLengthMsg']);
														unset($_SESSION['maxPasswordLengthMsg']);
													?>
												</p>	
											<?php
										}
									?>
							</div>
							<!-- <div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div> -->
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Sign Up</button>
								<!-- <a href="#">Forgot Password?</a> -->
							</div>
							<?php
									if(isset($_SESSION['existsMsg']))
									{
										?>
											<p style="color:#ffba0f; text-align:center">
												<?php
													echo($_SESSION['existsMsg']);
													unset($_SESSION['existsMsg']);
												?>
											</p>	
										<?php
									}
								?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
													<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
												</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="../public/img/i1.jpg" alt=""></li>
							<li><img src="../public/img/i2.jpg" alt=""></li>
							<li><img src="../public/img/i3.jpg" alt=""></li>
							<li><img src="../public/img/i4.jpg" alt=""></li>
							<li><img src="../public/img/i5.jpg" alt=""></li>
							<li><img src="../public/img/i6.jpg" alt=""></li>
							<li><img src="../public/img/i7.jpg" alt=""></li>
							<li><img src="../public/img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->


	<script src="../public/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="../public/js/vendor/bootstrap.min.js"></script>
	<script src="../public/js/jquery.ajaxchimp.min.js"></script>
	<script src="../public/js/jquery.nice-select.min.js"></script>
	<script src="../public/js/jquery.sticky.js"></script>
	<script src="../public/js/nouislider.min.js"></script>
	<script src="../public/js/jquery.magnific-popup.min.js"></script>
	<script src="../public/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="../public/js/gmaps.min.js"></script>
	<script src="../public/js/main.js"></script>
</body>

</html>