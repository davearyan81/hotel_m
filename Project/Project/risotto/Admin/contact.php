<!--Header-->
<?php  include("config.php");
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
include("header.php");
?>
<!--/Header-->
<!-- banner-->
<div class="banner-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(../img/IMG-20180708-WA0011.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="white-text title">Manage Contact</h2>
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
					<!--<div class="col-md-5 col-md-offset-7">-->
					<form method="post" action="edit_contact.php?edit_contact_id=<?php echo $row['id'];?>">
						<div class="section-header">
							<!--<h2 class="sub-title">Contact Us</h4>-->
							<!--<center><h2 class="title">Feedback</h2></center>-->
						</div>

					
				<b><label for="name" style="color: black;">Phone Number:</label></b>
				<input type="text" value="<?php echo $row['phone'];?>" style="border:0px; padding-left:10px; width: 200px;" name="name" readonly></br></br>
				
				<b><label for="name" style="color: black;">Email:</label></b>
				<input type="text" value="<?php echo $row['email'];?>" style="border:0px; padding-left:10px; width: 250px;" name="name" readonly></br></br>
				
				<b><label for="name" style="color: black;">Address:</label></b>
				<input type="text" value="<?php echo $row['address'];?>" style="border:0px; padding-left:10px; width: 900px;" name="name" readonly></br></br>
				
				<center><button class='main-button' style='margin-top:10px;margin-bottom:35px;' name='edit'>Edit Details</button></center>
						
						
						  
						<?php
					}
					
					?>
					
					</form>
				</div>
				<!-- /row -->

			</div>
			<!-- /container -->
			<!-- Insert Data into Feedback Table-->
		<?php /*?><?php
			if(isset($_POST['btnsubmit']))
			{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$msg=$_POST['message'];
				mysqli_query($db,"insert into feedback(feedback_id,c_name,c_mail,c_msg) values('','$name','$email','$msg')");
			}			
		?><?php */?>
		<!-- Insert Data into Feedback Table-->
		

			<!-- map -->
			<!--<div id="map"></div>-->
			<!-- /map -->

		</div>
		<!-- Contact -->
		
		
<!-- Footer -->
<?php   include("footer.php")  ?>
<!-- /Footer -->