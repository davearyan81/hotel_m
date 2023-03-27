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


<!-- /Header -->
<!-- banner-->
<div class="banner-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(../img/IMG-20180708-WA0010.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="white-text title">Manage Menu Category</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /banner-->
		
	

			<!-- container -->
			<div class="container">
			<div class="row"style="margin-top: 30px; margin-bottom: 30px;">
			
			<center><a href="add_mainmenu.php"><button class='main-button' style='margin-top:10px;margin-bottom:35px;' name='edit'>Add New Menu Category</button></a></center>

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
					</style>
					
					<?php $query = "select * from menu";
					
					$res = mysqli_query($db, $query);
					
					if(mysqli_num_rows($res) > 0) {
						
						echo "<table>
							<tr>
							<th>Sub Category</th>
							<th>Main Category</th>
							<th>Edit</th>
							<th>Delete</th>
						  </tr>";
						
						while($row = mysqli_fetch_array($res)) {
						
				?><tr>
				<td><?php echo $row['sub_category']; ?></td>
				<td><?php echo $row['main_category']; ?></td>
				<td><a href="edit_mainmenu.php?edit_sub_category_id=<?php echo $row['sub_category_id']; ?>" class="main-button">Edit</a></td>
				<td><a href="mainmenu.php?delete_sub_category_id=<?php echo $row['sub_category_id']; ?>" class="main-button" onclick="return confirm('Are You Sure To Delete This Item ?' )">Delete</a></td>
				
				</tr> <?php
						
						}
					
						echo "</table>";
					
					}						  
			
					?>

					
					</form>
				</div>
				<!-- /row -->

			</div>
		</div>
			<!-- /container -->

			<!-- map -->
			<!--<div id="map"></div>-->
			<!-- /map -->



<!-- Footer -->
<?php   include("footer.php")  ?>
<!-- /Footer -->

<?php
			if(isset($_REQUEST['delete_sub_category_id']))
			{
				$get_category=mysqli_query($db,"select * from menu where sub_category_id='$_REQUEST[delete_sub_category_id]'");
				$get_category_res=mysqli_fetch_array($get_category);
				mysqli_query($db,"delete from menu where sub_category_id='$_REQUEST[delete_sub_category_id]'");
				mysqli_query($db,"delete from menu_category where menu_type='".$get_category_res['sub_category']."'");
				header('location: mainmenu.php');
			}
?>
