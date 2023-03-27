<?php include("config.php");
ob_start();
?>
<?php
include("header.php") 
?>

<!-- /Header -->
<!-- banner-->
<div class="banner-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/IMG-20180708-WA0011.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="white-text title">Cancel Reservation</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /banner-->
		
		<!-- container -->
		<div class="container"style="margin-top: 70px; margin-bottom: 70px; margin-right: -115px;">
			<!-- Add_Image -->
			<br>
			<div class="col-md-5">
			<form method="post" enctype="multipart/form-data">
			
				<label for="Photo Title" style="color:#000000">Enter Your Mobile Number:</label>
				<input class="input" type="text" placeholder="Enter Your Mobile Number" id="name" name="mobile" required>
			</br>
				
			<!--<br>
				<label for="Select Photo" style="color:#000000">Select Photo:</label>	
				<input style="border:none" type="file" name="photo" required>
			</br>-->
				
			<br>
			<center><input type="submit" class="main-button" name="btnsubmit"></center>
			</br>
			</form>
			
			</div>
		</div>

<?php 
	
	if(isset($_REQUEST['btnsubmit'])){
		$reservation_number = $_REQUEST['mobile'];
		$delete_reservation=mysqli_query($db,"delete from reservation where phone=".$reservation_number."");
		if(mysqli_num_rows($delete_reservation)==0)
		{?>
			<script>window.location="reservation.php";</script>
<?php	}
	
	}
?>

<!-- Footer -->
<?php   include("footer.php")  ?>
<!-- /Footer -->
