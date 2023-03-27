<?php include("config.php");
ob_start();
?>
<?php
session_start();
if($_SESSION['uname']=="")
{
?>
<!-- /Header -->
						<script language="javascript" type="text/javascript">
						location.href="index.php";
						</script>
						<?php
}
include("header.php") 
?>

<!-- /Header -->
<!-- banner-->
<div class="banner-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(../img/IMG-20180708-WA0011.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="white-text title">Add Image</h2>
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
			
				<label for="Photo Title" style="color:#000000">Photo Title:</label>
				<input class="input" type="text" placeholder="Enter Photo Title" id="name" name="name" required>
			</br>
				
			<br>
				<label for="Select Photo" style="color:#000000">Select Photo:</label>	
				<input style="border:none" type="file" name="photo" required>
			</br>
				
			<br>
			<center><input type="submit" class="main-button" name="btnsubmit"></center>
			</br>
			</form>
			
			</div>
		</div>

<?php 
	
	if(isset($_REQUEST['btnsubmit'])){
		$photo_title = $_REQUEST['name'];
		$photo_name = $_FILES['photo']['name'];
		$photo_location = $_FILES['photo']['tmp_name'];
		move_uploaded_file($photo_location,"..\\img\Hotel Gamthi\\".$photo_name);
		echo $insert = "insert into gallery values('','".$photo_title."','".$photo_name."')";
		if(mysqli_query($db,$insert)){?>
			<script>window.location="gallery.php";</script>
<?php		}
	}
?>

<!-- Footer -->
<?php   include("footer.php")  ?>
<!-- /Footer -->
