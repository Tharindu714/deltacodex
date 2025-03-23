<?php
session_start();
require "connection.php";

if (isset($_SESSION["Aduser"])) {

	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8" />
		<title>Add Product Photos</title>
		<!-- Stylesheets -->
		<link href="css/bootstrap.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" />
		<link href="css/responsive.css" rel="stylesheet" />

		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="icon" href="images/favicon.png" type="image/x-icon" />

		<!-- Responsive -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	</head>

	<body class="bg-dark">
		<div class="page-wrapper">
			<!-- Preloader -->
			<div class="preloader"></div>

			<header class="main-header header-style-one">
				<!--Header Top-->
				<div class="header-top">
					<div class="auto-container clearfix">
						<div class="top-left clearfix">
							<div class="text">
								<span class="icon flaticon-call-answer"></span> Need help? Call
								Us Now :
								<a href="tel:+94751441764" class="number">0751441764</a>
								&nbsp &nbsp &nbsp &nbsp &nbsp
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
								<li class="top-right">
									<a href="#"><span class="fab fa-linkedin"></span></a> &nbsp
									<a href="https://www.facebook.com/profile.php?id=61553007660533&mibextid=ZbWKwL">
										<span class="fab fa-facebook-square"></span></a> &nbsp
									<a href="https://wa.me/message/WE4BXFVCIMSXC1"><span class="fab fa-whatsapp"></span></a>
									&nbsp
									<a href="#">
										<span class="fab fa-instagram"></span></a> &nbsp
								</li>
							</div>
						</div>
						<div class="top-right clearfix">
							<!-- Info List -->
							<ul class="info-list">
								<li><a href="about.php">Our Story</a></li>
								<li class="quote"><a href="mailto:deltacodexsoftwares@gmail.com">Mail Us now</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Header Top -->

				<!-- Header Upper -->
				<div class="header-upper">
					<div class="inner-container">
						<div class="auto-container clearfix">
							<!--Info-->
							<div class="logo-outer">
								<div class="logo">
									<a><img src="images/Chanaka_64e480531788b.png" title="Chanaka Electronics" /></a>
								</div>
							</div>

							<!--Nav Box-->
							<div class="nav-outer clearfix">
								<!--Mobile Navigation Toggler For Mobile-->
								<div class="mobile-nav-toggler">
									<span class="icon flaticon-menu-1"></span>
								</div>
								<nav class="main-menu navbar-expand-md navbar-light">
									<div class="navbar-header">
										<!-- Togg le Button -->
										<button class="navbar-toggler" type="button" data-toggle="collapse"
											data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
											aria-expanded="false" aria-label="Toggle navigation">
											<span class="icon flaticon-menu-1"></span>
										</button>
									</div>

									<div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
										<ul class="navigation clearfix">
											<li class="current"><a href="addAmp.php">Web Development </a></li>
											<li><a href="addAud.php">Desktop Applications </a></li>
											<li class=""><a href="addLed.php">2D Games</a></li>
											<li><a href="addYT.php">Mobile Apps</a></li>
											</li>
											<li><a href="adduno.php">Robotics</a></li>
											</li>
											<li><a href="addGd.php">Others</a></li>
											</li>
										</ul>
									</div>
								</nav>
								<!-- Main Menu End-->

								<!-- Outer Box -->
							</div>
						</div>
					</div>
				</div>
				<!--End Header Upper-->

				<!-- Mobile Menu  -->
				<div class="mobile-menu">
					<div class="menu-backdrop"></div>
					<div class="close-btn">
						<span class="icon flaticon-cancel"></span>
					</div>

					<nav class="menu-box">
						<div class="nav-logo">
							<a href="index.php"><img src="images/logo.png" alt="" title="" /></a>
						</div>
						<ul class="navigation clearfix">
							<!--Keep This Empty / Menu will come through Javascript-->
						</ul>
						<!--Social Links-->
						<div class="social-links">
							<ul class="clearfix">
								<li>
									<a href="https://www.linkedin.com/in/chanaka-sanjeewa-175aa728b"><span
											class="fab fa-linkedin"></span></a>
								</li>
								<li>
									<a href="https://www.facebook.com/profile.php?id=61553007660533&mibextid=ZbWKwL">
										<span class="fab fa-facebook-square"></span></a>
								</li>
								<li>
									<a href="https://wa.me/message/WE4BXFVCIMSXC1">
										<span class="fab fa-whatsapp"></span></a>
								</li>
								<li>
									<a href="https://instagram.com/chanaka.sanjeewa?igshid=MzRlODBiNWFlZA==">
										<span class="fab fa-instagram"></span></a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<!-- End Mobile Menu -->
			</header>
			<!-- End Main Header -->

			<!-- Main Slider -->
			<section class="main-slider">
				<div class="slider-box">
					<!-- Banner Carousel -->
					<div class="banner-carousel owl-theme owl-carousel">

						<div class="slide">
							<div class="image-layer" style="background-image: url(images/main-slider/1.jpg)"></div>
							<div class="auto-container">
								<div class="content">
									<h2 class="font-weight-bold">
										Delta Codex Software Solutions
									</h2>
									<div class="text font-weight-bold">
										DeltaCodex Software Solutions is the best place to start
										developing your web application for business
									</div>
								</div>
							</div>
						</div>

						<div class="slide">
							<div class="image-layer" style="background-image: url(images/main-slider/2.jpg)"></div>
							<div class="auto-container">
								<div class="content">
									<h2>
										Web Application Development <br /> & Designing
									</h2>
									<div class="text font-weight-bold">
										With our professional Experience of developing responsive web application, you can
										have amazing front end designs and
										fully functional complete web applications
									</div>
								</div>
							</div>
						</div>

						<div class="slide">
							<div class="image-layer" style="background-image: url(images/main-slider/7.jpg)"></div>
							<div class="auto-container">
								<div class="content">
									<h2>
										JavaScript 2D games </br> Development
									</h2>
									<div class="text font-weight-bold">
										Gaming Is fun! right? Wanna make fun with your own game.
										Delta Codex is the best place to visit. We are willing to develop JavaScript 2D
										games for you
									</div>
								</div>
							</div>
						</div>

						<div class="slide">
							<div class="image-layer" style="background-image: url(images/main-slider/3.jpg)"></div>
							<div class="auto-container">
								<div class="content">
									<h2>
										Inventory Control System <br /> Development
									</h2>
									<div class="text font-weight-bold">
										Feel free to develop your Desktop application with
										lateset technology and start managing your inventory and crowd system
									</div>
								</div>
							</div>
						</div>


						<div class="slide">
							<div class="image-layer" style="background-image: url(images/main-slider/4.jpg)"></div>
							<div class="auto-container">
								<div class="content">
									<h2>
										Mobile Application Development
									</h2>
									<div class="text font-weight-bold">
										All your Favourite mobile application from us. Start developing your company mobile
										application
									</div>
								</div>
							</div>
						</div>


						<div class="slide">
							<div class="image-layer" style="background-image: url(images/main-slider/5.jpg)"></div>
							<div class="auto-container">
								<div class="content">
									<h2>
										E- Commerce Platform <br /> Development
									</h2>
									<div class="text font-weight-bold">
										Wanna enhance your markert place through internet !
										Develop your E- Commerce Platform with us.
										With many experinces we can provide you amazing functions & Designs for your idea
									</div>
								</div>
							</div>
						</div>


						<div class="slide">
							<div class="image-layer" style="background-image: url(images/main-slider/6.jpg)"></div>
							<div class="auto-container">
								<div class="content">
									<h2>Robotic Application </br> Development
									</h2>
									<div class="text font-weight-bold">
										We are now eligible to develop your mini robotics projects with lateset Ardiuno
										technology.
										If you are in trouble with submitting your Arduino Project of your college or
										university, we are here to give you the best solutions
									</div>
								</div>
							</div>
						</div>

						<div class="slide">
							<div class="image-layer" style="background-image: url(images/main-slider/8.jpg)"></div>
							<div class="auto-container">
								<div class="content">
									<h2>ERP Application </br> Development
									</h2>
									<div class="text font-weight-bold">
										Making troubles with managing your Employees.
										Start planning your Enterprise resource planning system with us.
									</div>
								</div>
							</div>
						</div>

						<div class="slide">
							<div class="image-layer" style="background-image: url(images/main-slider/9.jpg)"></div>
							<div class="auto-container">
								<div class="content">
									<h2>Youtube Thumbnail Designs
									</h2>
									<div class="text font-weight-bold">
										Trend is youtube these days and yeah! First impression is the most important.
										So we are going over the limit of software engineering and now eligible to make the
										best youtube thumbnails for your video.
									</div>
								</div>
							</div>
						</div>

						<div class="slide">
							<div class="image-layer" style="background-image: url(images/main-slider/10.jpg)"></div>
							<div class="auto-container">
								<div class="content">
									<h2>E- Article Writings
									</h2>
									<div class="text font-weight-bold">
										Getting stuck in your Assignments or making troubles with them.
										Contact us we are now eligible to write every kind of technology based articles,
										journals. Why you choose us for this.
										because we can provide you a 100% unique & 0% plagiarize article for higher marks
									</div>
								</div>
							</div>
						</div>

						<div class="slide">
							<div class="image-layer" style="background-image: url(images/main-slider/11.jpg)"></div>
							<div class="auto-container">
								<div class="content">
									<h2>Graphic Designs & Artworks
									</h2>
									<div class="text font-weight-bold">
										We can design an attractive designs for yourevery kind of products
										E-book covers, book covers, social media posts, Cover photos, logo Designs and
										etc...
									</div>
								</div>
							</div>
						</div>

						<div class="slide">
							<div class="image-layer" style="background-image: url(images/main-slider/12.jpg)"></div>
							<div class="auto-container">
								<div class="content">
									<h2>
										Video Editing <br />
									</h2>
									<div class="text font-weight-bold">
										Now we are eligible to edit your video from letest technology
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- End Banner Section -->
	</body>
	<div class="scroll-to-top scroll-to-target" data-target="html">
		<span class="fa fa-angle-up"></span>
	</div>

	<!-- Call To Action Section -->
	<section class="call-to-action-section" style="background-image: url(images/background/3.jpg)">
		<div class="auto-container">
			<h2>Stimulating Ideas in Digital Eye</h2>
			<div class="text">
				Delta Codex Software Solutions<br>
				deltacodexsoftwares@gmail.com <br>
				Tel: 0751441764<br>
			</div>
		</div>
	</section>
	<!-- End Call To Action Section -->


	<!--Scroll to top-->
	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/scrollbar.js"></script>
	<script src="js/script.js"></script>

	</html>
	<?php
} else {
	header("location:adminSign.php");
}
?>