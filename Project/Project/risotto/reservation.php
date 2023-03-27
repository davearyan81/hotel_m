<!-- Header -->
<?php  include("config.php")   ?>
<?php  include("header.php")   ?>
<!-- /Header -->

<!-- Date-time picker -->
		<link href="bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
		<link href="bootstrap/css/bootstrap.min1.css" rel="stylesheet" media="screen">
			
<!-- banner-->
<div class="banner-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/IMG-20180708-WA0035.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="white-text title">Book A Table</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /banner-->
		
<!-- Reservation -->
		<div id="reservation" class="section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/IMG-20180708-WA0035.jpg)"></div>
			<!-- /Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- reservation form -->
					<div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1">
						<form action="confirm.php" class="reserve-form row" method="post">
							<div class="section-header text-center">
								<h4 class="sub-title">Reservation</h4>
								<h2 class="title white-text">Book Your Table</h2>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="name">Name:</label><label for="required" style="color:#FF0000; padding-left:3px;">*</label>
									<input class="input" type="text" placeholder="Name" id="name" name="name" required>
								</div>
								<div class="form-group">
									<label for="phone">Phone:</label><label for="required" style="color:#FF0000; padding-left:5px;">*</label>
									<input class="input" type="text" maxlength="10" onkeypress="ddd()" placeholder="Phone" id="phone" name="phone" required>
									<span id="errmsg"></span>
								</div>
								<div class="controls input-append date form_datetime"  data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
								<label for="date" style="margin-left:  10px; color:  #FFF;">Date:</label><label for="required" style="color:#FF0000; padding-left:5px;">*</label>
								<input class="input" type="text" placeholder="DD/MM/YYYY - HH:MM" id="date" name="date" required>
								<span class="add-on"><i class="icon-th"></i></span>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="email">Email:</label><label for="required" style="color:#FF0000; padding-left:5px;">*</label>
									<input class="input" type="email" placeholder="Email" name="email" required>
								</div>
								<div class="form-group">
									<label for="number">Number of Guests:</label><label for="required" style="color:#FF0000; padding-left:5px;">*</label>
									<select class="input" id="number" name="gname">
										<option>1 Person</option>
										<option>2 People</option>
										<option>3 People</option>
										<option>4 People</option>
										<option>5 People</option>
										<option>6 People</option>
										<option>7 People</option>
										<option>8 People</option>
										<option>9 People</option>
										<option>10 People</option>
										<option>11 People</option>
										<option>12 People</option>
										<option>13 People</option>
										<option>14 People</option>
										<option>15 People</option>
										<option>16+ People</option>
									</select>
								</div>
								<div class="form-group">
								  <label for="time">Booking Type:</label><label for="required" style="color:#FF0000; padding-left:5px;">*</label>
								  <select class="input" id="number" name="btype">
										<option>Dinner</option>
										<option>Lunch</option>
										<option>Birthday Party</option>
										<option>Business Meeting</option>
										<option>Anniversary Party</option>
										<option>Any Function</option>
									</select>
								</div>
							</div>

							<div class="col-md-12 text-center">
								<button class="main-button" name="btnbook">Book Now</button>
							</div>
							
						</form>
					</div>
					<!-- /reservation form -->
					
					<!-- Insert Data Into reservation table -->
						<?php /*?><?php
						
							if(isset($_POST['btnbook']))
							{
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
									
								</script>
								<?php }
								else
								{
								mysqli_query($db," insert into reservation values('','$name','$phone','$date','$email','$gname','$btype')");
								}
							}
							
						?><?php */?>
					<!-- Insert Data Into reservation table -->

					<!-- opening time -->
					<div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1">
						<div class="opening-time row">
							<div class="section-header text-center">
								<h2 class="title white-text">Opening Time</h2>
							</div>
							<ul>
								<li>
									<h4 class="day">Sunday</h4>
									<h4 class="hours">10:00 am - 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Monday</h4>
									<h4 class="hours">10:00 am - 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Tuesday</h4>
									<h4 class="hours">10:00 am - 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Wednesday</h4>
									<h4 class="hours">10:00 am - 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Thursday</h4>
									<h4 class="hours">10:00 am - 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Friday</h4>
									<h4 class="hours">10:00 am - 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Saturday</h4>
									<h4 class="hours">10:00 am - 11:00 pm</h4>
								</li>
							</ul>
						</div>
						<div class="col-md-12 text-center">
						<a href="cancel_reservation.php"><button class='main-button' style='margin-top:10px;margin-bottom:10px' name='cancel'>Cancel Reservation</button></a>
						</div>

				
					</div>
					<!-- /opening time -->
					
					</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Reservation -->
		<?php /*?><?php
session_start();
$rndno=rand(100000, 999999);//OTP generate
$message = urlencode("otp number.".$rndno);
$to=$_POST['email'];
$subject = "OTP";
$txt = "YOUR OTP IS: ".$rndno."";
$headers = "From: jeelbhoot0jb@gmail.com" . "\r\n" .
"CC: deep.mendapara@gmail.com";
mail($to,$subject,$txt,$headers);
if(isset($_POST['btnbook']))
{
$_SESSION['name']=$_POST['name'];
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['otp']=$rndno;
header( "Location: confirm.php" ); 
} ?><?php */?>

<!-- 10 Digite Validation -->		
<script type="text/javascript">
						
function ddd () {
					
					 //called when key is pressed in textbox
  $("#phone").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Numbers Only").show().fadeOut("slow");
               return false;
    }
   });
 
}
</script>
<!-- /10 Digite Validation -->		

		
<!-- Footer -->		
<?php   include("footer.php")  ?>
<!-- /Footer -->

	<!-- Jquery -->
	<script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="dtp js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="dtp js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
	<script type="text/javascript">
	var today=new Date();
		$('.form_datetime').datetimepicker({
			//language:  'fr',
			weekStart: 1,
			todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			forceParse: 0,
			showMeridian: 1,
			
		});
		$('.form_date').datetimepicker({
			language:  'fr',
			weekStart: 1,
			todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			minView: 2,
			forceParse: 0,
		});
		$('#date').datepicker({
		changeMonth:true,
		changeYear:true,
		
		});
		$('.form_time').datetimepicker({
			language:  'fr',
			weekStart: 1,
			todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 1,
			minView: 0,
			maxView: 1,
			forceParse: 0
		});
	</script>

