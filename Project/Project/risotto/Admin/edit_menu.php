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

$sql=mysqli_query($db,"select * from menu_category where id ='".$_REQUEST['edit_menu_category_id']."' ");
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
						<h2 class="white-text title">Edit Menu Item</h2>
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
						<option value="Starter" <?php if($data['menu_type']=='Starter'){ echo "selected"; } ?>>Starter</option>
						<option value="Chinese" <?php if($data['menu_type']=='Chinese'){ echo "selected"; } ?>>Chinese</option>
					</select>
				</br>
				<br>
				<label for="Photo Title" style="color:#000000">Item Name:</label>
				<input class="input" type="text" placeholder="Enter Item Name:" id="name" name="item_name" required value="<?php echo $data['item_name']; ?>">
			</br>
				
			<br>
				<label for="Select Photo" style="color:#000000">Item Price:</label>	
				<input class="input" type="text" placeholder="Enter Item Price:" id="name" name="price" required value="<?php echo $data['price']; ?>">
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
			$menu_type=$_REQUEST['menu_type'];
			$item_name=$_REQUEST['item_name'];
			$price=$_REQUEST['price'];
			$sql_update="update menu_category set menu_type='".$menu_type."',item_name='".$item_name."',price='".$price."' where id=".$_REQUEST['edit_menu_category_id']."";
			if(mysqli_query($db,$sql_update)){?>
				<script>window.location="menu.php";</script>
			<?php }
			}
			?>

<?php include("footer.php"); ?>