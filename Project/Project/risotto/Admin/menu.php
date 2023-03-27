<!-- Header -->
<?php  include("config.php");
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
include("header.php");

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
						<h2 class="white-text title">Manage Menu</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /banner-->
		
	

			<!-- container -->
			<div class="container">
			<div class="row"style="margin-top: 30px; margin-bottom: 30px;">
			
			<span style="float:left"><a href="mainmenu.php"><button class='main-button' style='margin-top:10px;margin-bottom:35px;' name='edit'>Manage Menu Categories</button></a></span><span style="float:right"><a href="add_menu.php"><button class='main-button' style='margin-top:10px;margin-bottom:35px;' name='edit'>Add New Menu Item</button></a></span>

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
					
					<?php $query = "select * from menu_category";
					
					$res = mysqli_query($db, $query);
					
					if(mysqli_num_rows($res) > 0) {
						
						echo "<table>
							<tr>
							<th>Menu Type</th>
							<th>Item Name</th>
							<th>Price</th>
							<th>Edit</th>
							<th>Delete</th> 
						  </tr>";
						
						while($row = mysqli_fetch_array($res)) {
						
				?><tr>
				<td><?php echo $row['menu_type']; ?></td>
				<td><?php echo $row['item_name']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><a href="edit_menu.php?edit_menu_category_id=<?php echo $row['id']; ?>" class="main-button">Edit</a></td>
				<td><a href="menu.php?delete_menu_category_id=<?php echo $row['id']; ?>" class="main-button" style="display:inline-block;
																									padding:15px 30px;
																									border:none;
																									border-radius:40px;
																									background-color:#f36700;
																									color:#FFF;
																									text-transform: uppercase;
																									font-weight: 700;
																									-webkit-transition:0.2s opacity;
																									transition:0.2s opacity;" onclick="return confirm('Are You Sure To Delete This Item ?' )">Delete</a></td>
				
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
			if(isset($_REQUEST['delete_menu_category_id']))
			{
				mysqli_query($db,"delete from menu_category where id='$_REQUEST[delete_menu_category_id]'");
				header('location: menu.php');
			}
?>
