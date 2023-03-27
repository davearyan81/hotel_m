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


<div class="banner-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(../img/IMG-20180708-WA0011.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="white-text title">Add New Menu Category</h2>
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
			
				<br>
				<label for="Menu Type" style="color:#000000">Main Category:</label>
					<select class="input" id="number" name="main_category">
						<option value="Dinner">Dinner</option>
						<option value="Drinks">Drinks</option>
						<option value="Lunch">Lunch</option>
						<option value="Dessert">Dessert</option>
					</select>
				</br>
				<br>
				<label for="Photo Title" style="color:#000000">Sub Category:</label>
				<input class="input" type="text" placeholder="Enter Sub Category:" id="name" name="sub_category" required>
			</br>
				
			<br>
			<center><input type="submit" class="main-button" name="btnsubmit"></center>
			</br>
			</form>
			
			</div>
		</div>
<!-- Insert Data Into reservation table -->
						<?php
						
							if(isset($_POST['btnsubmit']))
							{
								$sub_category=$_POST['sub_category'];
								$main_category=$_POST['main_category'];
								mysqli_query($db," insert into menu values('','$sub_category','$main_category')");
								echo "<script>window.location='mainmenu.php'</script>";
							}
							
						?>
					<!-- Insert Data Into reservation table -->


<?php include("footer.php"); ?>