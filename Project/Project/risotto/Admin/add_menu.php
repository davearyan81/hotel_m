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
						<h2 class="white-text title">Add New Menu Item</h2>
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
				<label for="Menu Type" style="color:#000000">Menu Type:</label>
					<select class="input" id="number" name="menu_type">
						<?php
							$sqlm=mysqli_query($db,"select * from menu order by sub_category_id");
							while($rowd=mysqli_fetch_array($sqlm)){
						?>
						<option value="<?php echo $rowd['sub_category']; ?>"> <?php echo $rowd['sub_category']; ?> </option>
						<?php } ?>
					</select>
				</br>
				<br>
				<label for="Photo Title" style="color:#000000">Item Name:</label>
				<input class="input" type="text" placeholder="Enter Item Name:" id="name" name="item_name" required>
			</br>
				
			<br>
				<label for="Select Photo" style="color:#000000">Item Price:</label>	
				<input class="input" type="text" placeholder="Enter Item Price:" id="name" name="price" required>
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
								$menu_type=$_POST['menu_type'];
								$item_name=$_POST['item_name'];
								$price=$_POST['price'];
								mysqli_query($db," insert into menu_category values('','$menu_type','$item_name','$price')");
								echo "<script>window.location='menu.php'</script>";
							}
							
						?>
					<!-- Insert Data Into reservation table -->


<?php include("footer.php"); ?>