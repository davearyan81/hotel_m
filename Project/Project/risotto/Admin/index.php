<!--Header-->
<!DOCTYPE html>
<?php include("config.php");
session_start();
ob_start();?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Hotel Gamathi</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		
    </head>
	<body>

<!--/Header-->

		<!-- Home -->
		<!--<div id="home" class="banner-area">-->

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(../img/IMG-20180708-WA0014.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">

				<div class="col-md-10 col-md-offset-1 text-center">
					<div class="home-content">
						<h1 class="white-text">Login</h1>
			<!-- Login -->			
				<div  style="margin-left:25%"class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1">
				<form class="reserve-form row" action="" method="POST">
				
				<div class="col-md-12">
								<div class="form-group">
									<div align="left"><label for="name">Enter Admin Email:</label></div>
									<div align="center"><input class="input" type="email" placeholder="Enter Name" id="name" name="name" required></div>
								</div>
								
				<div class="form-group">
									<div align="left"><label for="phone">Password:</label></div>
									<div align="center"><input class="input" type="password" placeholder="Enter Password" id="phone" name="password" required></div>
								</div>
				<div class="col-md-12 text-center">
								<button class="main-button" name="btnsubmit">Submit</button>
							</div>
								
								
				</form>				
				<?php
				if(isset($_POST['btnsubmit']))
				{
				$uname=$_POST['name'];
				$pwd=$_POST['password'];
				$res=mysqli_query($db,"select * from login where admin_name='$uname' and password='$pwd'");
				$num=mysqli_num_rows($res);
				if($num==1)
				{
				header("Location:home.php");
				$_SESSION['uname']=$uname;
			
				}
				}
				?>
				</div>				
			<!-- /Login -->					
					
					</div>
				</div>

			</div>

		<!-- /Home -->

	<!-- Preloader -->
	<div id="preloader">
			<div class="preloader">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	<!-- /Preloader -->

		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="js/google-map.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/gallery.js"></script>
		<!-- /jQuery Plugins -->
		

	</body>
</html>
