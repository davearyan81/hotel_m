<!-- Header -->
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
$select_gallery=mysqli_query($db,"select * from gallery where gallery_id=".$_REQUEST['edit_photo_id']."");
$select_gallery_data=mysqli_fetch_array($select_gallery);
include("header.php") 
?>

<!-- /Header -->
<!-- banner-->
<div class="banner-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(../img/IMG-20180708-WA0011.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="white-text title">Edit Gallery</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /banner-->
		
		<!-- container -->
		<div class="container"style="margin-top: 70px; margin-bottom: 70px; margin-right: -115px;">
			<!-- Edit_Gallery -->
			<br>
			<form method="post" enctype="multipart/form-data">
			
			<div class="col-md-5">
				<style>
					table {
					  font-family: arial, sans-serif;
					  border-collapse: collapse;
					  width: 100%;
					  color:#000000;
					}
					
					td, th {
					  border: 1px solid #dddddd;
					  text-align: left;
					  padding: 8px;
					  color:#666666;
					}
					
					tr:nth-child(even) {
					  background-color: #dddddd;
					}
					
					img {
					height: 200px;
					}
					
					</style>
				<?php
							/*echo "<img src='..\\img\Hotel Gamthi\\".$select_gallery_data['gallery_main_photo']."'>";*/
							echo "<table>
							<tr>
							<th>Photo</th>
							<th>Photo Title</th>
							 </tr>";
				?><tr>
						  		<td><?php echo "<img src='..\\img\Hotel Gamthi\\".$select_gallery_data['gallery_main_photo']."'>"; ?></td>
								<td><?php echo $select_gallery_data['gallery_name']; ?></td>
								</tr> <?php
								
						echo "</table>";						  
			
					?>
					<br>
				<label for="Photo Title" style="color:#000000">Photo Title:</label>
				<input class="input" type="text" placeholder="Enter Photo Title" id="name" name="name" required <?php /*?>value="<?php echo $select_gallery_data['gallery_name']; ?>"<?php */?>>
			</br>
				
			<br>
				<label for="Select Photo" style="color:#000000">Select Photo:</label>
				
				<?php 
				/*if($select_gallery_data['gallery_main_photo']=="")
				{*/ 
				echo "<input style='border:none' name='photo' type='file' required>";
				 /*}else{
				echo "<br><img src='..\\img\Hotel Gamthi\\".$select_gallery_data['gallery_main_photo']."' style='height:100px;width:100px '>";
				} */?>
			</br>
				
			<br>
			<center><input type="submit" class="main-button" name="btnsubmit"></center>
			</br>
			<?php
			if(isset($_REQUEST['btnsubmit']))
			{
			$photo_title=$_REQUEST['name'];
			$photo_name=$_FILES['photo']['name'];
			$photo_location=$_FILES['photo']['tmp_name'];
			move_uploaded_file($photo_location,"..\\img\Hotel Gamthi\\".$photo_name);
			$sql_update="update gallery set gallery_name='".$photo_title."',gallery_main_photo='".$photo_name."' where gallery_id=".$_REQUEST['edit_photo_id']."";
			if(mysqli_query($db,$sql_update)){?>
				<script>window.location="gallery.php";</script>
			<?php }
			}
			?>
			</form>
			
			</div>
			
			

		</div>


<!-- Footer -->
<?php   include("footer.php")  ?>
<!-- /Footer -->
