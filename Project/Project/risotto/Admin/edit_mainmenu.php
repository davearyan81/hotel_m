
<?php include("config.php");
ob_start();
?>
<?php
session_start();
if(!isset($_SESSION['uname']))
{
?>
<!-- /Header -->
						<script language="javascript" type="text/javascript">
						location.href="index.php";
						</script>
						<?php
}

$sql=mysqli_query($db,"select * from menu where sub_category_id ='".$_REQUEST['edit_sub_category_id']."' ");
$data=mysqli_fetch_array($sql);
 include("header.php"); 
?>

<div class="banner-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(../img/IMG-20180708-WA0011.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="white-text title">Edit Menu Category</h2>
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
						
						
						<option value="Dinner" <?php if($data['main_category']=='Dinner'){ echo "selected"; } ?>>Dinner</option>
						<option value="Drinks" <?php if($data['main_category']=='Drinks'){ echo "selected"; } ?>>Drinks</option>
						<option value="Lunch" <?php if($data['main_category']=='Lunch'){ echo "selected"; } ?>>Lunch</option>
						<option value="Dessert" <?php if($data['main_category']=='Dessert'){ echo "selected"; } ?>>Dessert</option>
					</select>
				</br>
				<br>
				<label for="Photo Title" style="color:#000000">Sub Category:</label>
				<input class="input" type="text" placeholder="Enter Sub Category:" id="name" name="sub_category" required value="<?php echo $data['sub_category']; ?>">
			</br>
				
			<br>
			<center><input type="submit" class="main-button" name="btnsubmit"></center>
			</br>
			
			</form>
			
			</div>
		</div>
			
			<?php
			if(isset($_REQUEST['btnsubmit']))
			{
			$sub_category=$_REQUEST['sub_category'];
			$main_category=$_REQUEST['main_category'];
			$sql_update="update menu set sub_category='".$sub_category."',main_category='".$main_category."' where sub_category_id=".$_REQUEST['edit_sub_category_id']."";
			if(mysqli_query($db,$sql_update)){?>
				<script>window.location="mainmenu.php";</script>
			<?php }
			}
			?>

<?php include("footer.php"); ?>