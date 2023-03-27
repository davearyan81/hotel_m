<!--Header-->
<?php  include("config.php")   ?>
<?php   include("header.php")  ?>
<!--/Header-->
<!-- banner-->
<div class="banner-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/IMG-20180708-WA0011.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="white-text title">Give Your Feedback</h2>
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

					<div class="col-md-5 col-md-offset-7">
					<form method="post">
						<div class="section-header">
							<!--<h2 class="sub-title">Contact Us</h4>-->
							<h2 class="title">Feedback</h2>
						</div>
						<div class="form-group">
									<label for="name">Name:</label><label for="required" style="color:#FF0000; padding-left:5px;">*</label>
									<input class="input" type="text" placeholder="Name" name="name" required>
								</div>
						<div class="form-group">
									<label for="email">Email:</label><label for="required" style="color:#FF0000; padding-left:5px;">*</label>
									<input class="input" type="email" placeholder="Email" name="email" required>
								</div>
						<div class="form-group">
									<label for="email">Message:</label><label for="required" style="color:#FF0000; padding-left:5px;">*</label>
									<textarea class="input" placeholder="Message" name="message" required></textarea>
									<center><a href="#"><button class="main-button" name="btnsubmit">Submit</button></a></center>								
									</div>
						<!--<div class="contact-content">
							<p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
							<h3>Tel: <a href="#">045-548-14-97</a></h3>
							<p>Address: 3685 Granville Lane</p>
							<p>Email: <a href="#">Risotto@email.com</a></p>
							<ul class="list-inline">
								<li><p>Follow Us:</p></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>-->
					</form>
				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

			<!-- map -->
			<!--<div id="map"></div>-->
			<!-- /map -->

		</div>
		<!-- Contact -->

		<!-- Insert Data into Feedback Table-->
		<?php
			if(isset($_POST['btnsubmit']))
			{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$msg=$_POST['message'];
				mysqli_query($db,"insert into feedback(feedback_id,c_name,c_mail,c_msg,status) values('','$name','$email','$msg','pending')");
			}			
		?>
		<!-- Insert Data into Feedback Table-->
		
		
<!-- Footer -->
<?php   include("footer.php")  ?>
<!-- /Footer -->