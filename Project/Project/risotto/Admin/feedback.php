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
						<h2 class="white-text title">Feedbacks</h2>
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
					  width: 102%;
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
					</style>

					<?php $query = "select * from feedback where status='pending'";
					
					$res = mysqli_query($db, $query);
					
					if(mysqli_num_rows($res) > 0) {
						
					echo "<table>
						  <tr>
							<th>Name</th>
							<th>Email</th>
							<th>Message</th>
							<th>Approve</th>
							<th>Decline</th>
						  </tr>";
						
						while($row = mysqli_fetch_array($res)) {
						
						echo "<tr>
						  	<td>".$row['c_name']."</td>
							<td>".$row['c_mail']."</td>
							<td>".$row['c_msg']."</td>
							<td><a href='feedback.php?id=$row[feedback_id]&name=approve' class='main-button'>Approve</a></td>
							<td><a href='feedback.php?id=$row[feedback_id]&name=decline' class='main-button'>Decline</a></td>
							</tr>";
						  
						}
						
						echo"</table>";
						
					}
					
					?>
					
					</form>
				</div>
				<!-- /row -->

			</div>
			<!-- /container -->
			<!-- Insert Data into Feedback Table-->
		<?php
			if(isset($_GET['id']) && isset($_GET['name']))
			{
				if($_GET['name']=="approve"){
					$qry1="UPDATE `feedback` SET `status`='approve' WHERE feedback_id='$_GET[id]'";
					$result=$db->query($qry1);
					// echo "<script>alert('$_GET[name]')</script>";
					// header("location:feedback.php");
				}
				else if($_GET['name']=="decline"){
					$qry2="UPDATE `feedback` SET `status`='decline' WHERE feedback_id='$_GET[id]'";
					$result1=$db->query($qry2);
					// echo "<script>alert('$_GET[name]')</script>";
					header("location:feedback.php");
				}
				
			}			
		?>
		<!-- Insert Data into Feedback Table-->
		

			<!-- map -->
			<!--<div id="map"></div>-->
			<!-- /map -->

		</div>
		<!-- Contact -->
		
		
<!-- Footer -->
<?php   include("footer.php")  ?>
<!-- /Footer -->