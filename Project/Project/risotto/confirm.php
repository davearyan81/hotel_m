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
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/IMG-20180708-WA0011.jpg); height:130px;"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="white-text title" style="color: black; margin-top:20px;">Confirmation</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /banner-->
		
		<!-- container -->
		<div class="container"style="margin-top: -50px; margin-bottom: 70px; margin-right: -115px;">
			<!-- Add_Image -->
			<br>
			<div class="col-md-5">
			<form action="confirm.php" method="post" enctype="multipart/form-data">
			
				<b><label for="name" style="color: black;">Name:</label></b>
				<input type="text" value="<?php echo $_POST['name'];?>" style="border:0px; padding-left:10px; width: 200px;" name="name" readonly></br></br>
				<b><label for="phone" style="color: black;">Phone:</label></b>
				<input type="text" value="<?php echo $_POST['phone'];?>" style="border:0px; padding-left:10px; width: 200px;" name="phone" readonly></br></br>
				<b><label for="email" style="color: black;">Email:</label></b>
				<input type="text" value="<?php echo $_POST['email'];?>" style="border:0px; padding-left:10px; width: 250px;" name="email" readonly></br></br>
				<b><label for="date" style="color: black;">Date & Time:</label></b>
				<input type="text" value="<?php echo $_POST['date'];?>" style="border:0px; padding-left:10px; width: 200px;" name="date" readonly></br></br>
				<b><label for="gname" style="color: black;">Number of Guest:</label></b>
				<input type="text" value="<?php echo $_POST['gname'];?>" style="border:0px; padding-left:10px; width: 200px;" name="gname" readonly></br></br>
				<b><label for="btype" style="color: black;">Booking Type:</label></b>
				<input type="text" value="<?php echo $_POST['btype'];?>" style="border:0px; padding-left:10px; width: 200px;" name="btype" readonly></br></br>
				<!--<b><label for="btype" style="color: black; padding-right:10px;">Enter OTP:</label></b> 
				<input class="input" type="password" placeholder="OTP" name="otpvalue" style="width: 45%; margin-right:10px;" required>
				<input type="submit" value="Resend" class="main-button" name="btnresend" style="padding: 10px 10px;"></br></br>-->
			<!--<br>
				<label for="Select Photo" style="color:#000000">Select Photo:</label>	
				<input style="border:none" type="file" name="photo" required>
			</br>-->
			
					
				
			<br>
			<center><input type="submit" value="Confirm" class="main-button" name="btnconfirm"> <input type="submit" value="Back" class="main-button" name="btnback"></center>
			</br>
			
			</form>
			
			<!-- Insert Data Into reservation table -->
						<?php
						
							if(isset($_POST['btnconfirm']))
							{
									  $data_available_1=mysqli_query($db,"select * from login where status='true'");
									  if(mysqli_num_rows($data_available_1)>0)
									  {
											echo "<script>alert('Sorry, All Tabls Are Full!!!');location.href='reservation.php';</script>";
											
									  }
									  else{
													$name=$_POST['name'];
													$phone=$_POST['phone'];
													$date=$_POST['date'];
													$email=$_POST['email'];
													$gname=$_POST['gname'];
													$btype=$_POST['btype'];
													$data_available=mysqli_query($db,"select * from reservation where phone=".$phone."");
													if(mysqli_num_rows($data_available)>0)
													{?>
													<script language="javascript" type="text/javascript">
														location.href="reservation.php";
													</script>
													<?php }
													else
													{
													mysqli_query($db,"insert into reservation values('','$name','$phone','$date','$email','$gname','$btype')");
													header("Location:reservation.php");
													}
									 }				
							}
							
						?>
					<!-- Insert Data Into reservation table -->

			
			</div>
		</div>
<?php /*?><?php
session_start();
if(isset($_POST['btnconfirm']))
{
$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
if(!strcmp($rno,$urno))
{
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
//For admin if he want to know who is register
$to="example@gmail.com";
$subject = "Thank you!";
$txt = "Some one show your demo Email id: ".$email." Mobile number : ".$phone."";
$headers = "From: jeelbhoot0jb@gmail.com" . "\r\n" .
"CC: deep.mendapara@gmail.com";
mail($to,$subject,$txt,$headers);
echo "<p>Thank you for show our Demo.</p>";
//For admin if he want to know who is register
}
else{
echo "<p>Invalid OTP</p>";
}
}
//resend OTP
if(isset($_POST['btnresend']))
{
$message="<p class='w3-text-green'>Sucessfully send OTP to your mail.</p>";
$rno=$_SESSION['otp'];
$to=$_SESSION['email'];
$subject = "OTP";
$txt = "OTP: ".$rno."";
$headers = "From: jeelbhoot0jb@gmail.com" . "\r\n" .
"CC: deep.mendapara@gmail.com";
mail($to,$subject,$txt,$headers);
$message="<p class='w3-text-green w3-center'><b>Sucessfully resend OTP to your mail.</b></p>";
}
?>
<?php */?>

<!-- Footer -->
<?php   include("footer.php")  ?>
<!-- /Footer -->
