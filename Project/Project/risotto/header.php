<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Hotel Gamathi</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script"
		rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link type="text/css" rel="stylesheet" href="css/slider.css" />




	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<!-- Header -->
	<header id="header">

		<!-- Top nav -->
		<!--<div id="top-nav">
				<div class="container">-->

		<!-- logo -->
		<div class="logo">
			<!--<a href="index.html"><img src="./img/logo.png" alt="logo"></a>-->
		</div>
		<!-- logo -->

		<!-- Mobile toggle -->
		<button class="navbar-toggle">
			<span></span>
		</button>
		<!-- Mobile toggle -->

		<!-- social links -->
		<!--<ul class="social-nav">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>-->
		<!-- /social links -->

		</div>
		</div>
		<!-- /Top nav -->

		<!-- Bottom nav -->
		<div id="bottom-nav">
			<div class="container">
				<nav id="nav">

					<!-- nav -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="index.php"><img src="img/logo.jpg" alt="logo"></a></li>
						<!--<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Menu</a></li>
						<li><a href="#">Reservation</a></li>
						<li><a href="#">Galery</a></li>
						<li><a href="#">Events</a></li>
						<li><a href="#">Contact</a></li>-->
					</ul>
					<!-- /nav -->

					<!-- button nav -->
					<!--<ul class="cta-nav">
						<li><a href="#" class="main-button">Reserve</a></li>
					</ul>-->
					<!-- button nav -->

					<!-- contact nav -->
					<ul class="contact-nav nav navbar-nav">
						<?php
						$url = explode("/", $_SERVER['REQUEST_URI']);
						?>
						<!--<li><a href="#"><i class="fa fa-phone"></i> 045-548-14-97</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 3685 Granville Lane</a></li>-->
						<li><a href="index.php" class="<?php if ($url[3] == 'index.php') {
							echo "active";
						} ?>">Home</a>
						</li>
						<li><a href="menu.php" class="<?php if ($url[3] == 'menu.php') {
							echo "active";
						} ?>">Menu</a></li>
						<li><a href="reservation.php"
								class="<?php if ($url[3] == 'reservation.php') {
									echo "active";
								} ?>">Reservation</a></li>
						<li><a href="gallery.php"
								class="<?php if ($url[3] == 'gallery.php') {
									echo "active";
								} ?>">Gallery</a></li>
						<li><a href="event.php" class="<?php if ($url[3] == 'event.php') {
							echo "active";
						} ?>">Events</a>
						</li>
						<li><a href="about.php" class="<?php if ($url[3] == 'about.php') {
							echo "active";
						} ?>">About</a>
						</li>
						<li><a href="contact.php"
								class="<?php if ($url[3] == 'contact.php') {
									echo "active";
								} ?>">Contact</a></li>
						<li><a href="feedback.php"
								class="<?php if ($url[3] == 'feedback.php') {
									echo "active";
								} ?>">Feedback</a></li>
					</ul>
					<!-- contact nav -->

				</nav>
			</div>
		</div>
		<!-- /Bottom nav -->


	</header>
	<!-- /Header -->