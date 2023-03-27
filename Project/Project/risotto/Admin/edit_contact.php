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

$sql=mysqli_query($db,"select * from contact where id ='".$_REQUEST['edit_contact_id']."' ");
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
						<h2 class="white-text title">Edit Details</h2>
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
				<label for="phone" style="color:#000000">Phone:</label>
				<input class="input" type="text" placeholder="Enter Phone Number:" id="name" name="phone" required value="<?php echo $data['phone']; ?>">
			</br>
				
			<br>
				<label for="email" style="color:#000000">Email:</label>	
				<input class="input" type="text" placeholder="Enter Email:" id="name" name="email" required value="<?php echo $data['email']; ?>">
			</br>
			
			<br>
				<label for="" style="color:#000000">Address:</label>	
				<textarea class="input" placeholder="Enter Address:" id="name" name="address" required><?php echo $data['address']; ?></textarea>
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
			$phone=$_REQUEST['phone'];
			$email=$_REQUEST['email'];
			$address=$_REQUEST['address'];
			$sql_update="update contact set phone='".$phone."',email='".$email."',address='".$address."' where id=".$_REQUEST['edit_contact_id']."";
			if(mysqli_query($db,$sql_update)){?>
				<script>window.location="contact.php";</script>
			<?php }
			}
			?>

<?php include("footer.php"); ?>