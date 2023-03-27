<!--Header-->
<?php   include("header.php")  ?>
<?php include("config.php")?>
<!--/Header-->
<!-- banner-->
<div class="banner-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/IMG-20180708-WA0011.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="white-text title">Contact Us</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /banner-->
		
<!-- Contact -->
		<div id="contact" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
				
				<?php $query = "select * from contact";
					
					$res = mysqli_query($db, $query);
					
					if(mysqli_num_rows($res) > 0) {
						$row = mysqli_fetch_array($res)
					?>

					<div class="col-md-5 col-md-offset-7">
						<div class="section-header">
							<h4 class="sub-title">Contact Us</h4>
							<h2 class="title">Get In Touch</h2>
						</div>
						<div class="contact-content">
							<p></p>
							<h3>Phone:</h3> <a href="tel:8980802923"><p><b><?php echo $row['phone'];?></b></p></a>
							<h3>Email:</h3> <a href="https://mail.google.com/mail/?view=cm&fs=1&to=patel.jaydip64@gmail.com&su=Hey, Hotel Gamthi&body=&bcc="><p><b><?php echo $row['email'];?></b></p></a>
							<h3>Address:</h3><p><b><font color="#000000"><?php echo $row['address'];?></font></b></p>
							<ul class="list-inline">
								<li><h3>Follow Us:</h3></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>

					  
						<?php
					}
					
					?>
				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

			<!-- map -->
			<div id="map"></div>
			<!-- /map -->

		</div>
		<!-- Contact -->


<!-- Footer -->
<?php   include("footer.php")  ?>
<!-- /Footer -->