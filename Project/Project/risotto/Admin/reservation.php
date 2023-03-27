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
						<h2 class="white-text title">Reservations</h2>
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

					<!--<div class="col-md-5 col-md-offset-7">-->
					<form method="post">
						<div class="section-header">
							<!--<h2 class="sub-title">Contact Us</h4>-->
							<!--<center><h2 class="title">Feedback</h2></center>-->
						</div>
					
					<style>
					table {
					  font-family: arial, sans-serif;
					  border-collapse: collapse;
					  width: 100%;
					  color:#000000;
					}
					
					td, th {
					  border: 1px solid #dddddd;
					  text-align: center;
					  padding: 8px;
					  color:#666666;
					}
					
					tr:nth-child(even) {
					  background-color: #dddddd;
					}
					
					/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #f36700;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

					</style>
					
					<!-- Rounded switch -->
					<form method="post">
					<center><label for="Tables Are Full" style="color:#000000; font-size: 20px; margin-right: 10px;">Tables Are Full:</label>
					<label class="switch" style="margin-bottom:10px"><?php
					$select_status=mysqli_query($db,"select * from login");
					$select_status_res=mysqli_fetch_array($select_status);
?>  				<input type="checkbox" id="check_btn" <?php if($select_status_res['status']=="true"){echo "checked";}else{ echo "";}?> name="check" >
  					<span class="slider round"></span>
					</label></center>
					</form></br></br>
					
					<?php $query = "select * from reservation order by reservation_id desc";
					
					$res = mysqli_query($db, $query);
					
					if(mysqli_num_rows($res) > 0) {
						
						echo "<table>
							<tr>
							<th>Name</th>
							<th>Phone</th>
							<th>Date & Time</th>
							<th>Email</th>
							<th>Number Of Guests</th>
							<th>Booking Type</th>
							<th>Delete</th>
						  </tr>";
						
						while($row = mysqli_fetch_array($res)) {
						
							?><tr>
						  		<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['phone']; ?></td>
								<td><?php echo $row['date_&_time']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['number_of_guests']; ?></td>
								<td><?php echo $row['booking_type']; ?></td>
								<td><a href="reservation.php?delete_reservation_id=<?php echo $row['reservation_id']; ?>" class="main-button" onclick="return confirm('Are You Sure To Delete This Item ?' )">Delete</a></td>
						  </tr> <?php
						
						}
					
						echo "</table>";
					
					}						  
			
					?>

					
					</form>
				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

			<!-- map -->
			<!--<div id="map"></div>-->
			<!-- /map -->

		</div>
		<!-- Contact -->
		<!--<script type="text/javascript" language="javascript">
			onclick="myStatus(this.id)"
			function myStatus(id){
				var i = '#'+id;
				var idValue = $(i).val();
				$.ajax({
					method: "POST",
					url: "toggle.php"
				}).done(function(){
					window.location = "reservation.php";
				});
			}
		</script>-->

		
		
<!-- Footer -->
<?php   include("footer.php")  ?>
<!-- /Footer -->

<!-- Toggle Switch -->
<script type="text/javascript">
$(document).ready(function(){
    $('#check_btn').click(function(){
	var ch=document.getElementById('check_btn').checked;
	
        $.ajax({
            url: 'seton.php?status='+ch,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                //$('#container').html(data);
				alert(data);
            }
        });
    });
});
</script>
<!-- /Toggle Switch -->

<?php
			if(isset($_REQUEST['delete_reservation_id']))
			{
				mysqli_query($db,"delete from reservation where reservation_id='".$_REQUEST[delete_reservation_id]."'");
				header('location: reservation.php');
			}
?>