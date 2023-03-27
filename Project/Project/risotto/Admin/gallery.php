<!-- Header -->
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
<!-- banner-->
<div class="banner-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(../img/IMG-20180708-WA0011.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="white-text title">Manage Gallery</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /banner-->
		<!-- Gallery -->
		<div class="container">
		  <div class="row"style="margin-top: 30px; margin-bottom: 30px;">
			
			<div class="row" style="margin-left:65px;">
						<center><a href="add_gallery.php"><button class='main-button' style='margin-top:10px;margin-bottom:35px;' name='edit'>Add New Photo</button></a></center>
						<?php
			
							$photo=mysqli_query($db,"select * from gallery");
							if(mysqli_num_rows($photo))
							{
							while($image=mysqli_fetch_array($photo))
							{?>
							<div class="col-12 col-md-4 col-sm-6">
								<img class="thumbnail img-responsive" id="image-<?php echo $image['gallery_id'];?>" src="..\\img\Hotel Gamthi\\<?php echo $image['gallery_main_photo']; ?>">
							<center>
								<a href="edit_gallery.php?edit_photo_id=<?php echo $image['gallery_id']; ?>"><button class='main-button' style='margin-top:10px;margin-bottom:10px' name='edit'>Edit</button></a>
								<a href="gallery.php?delete_photo_id=<?php echo $image['gallery_id']; ?>"><button class='main-button' style='margin-top:10px;margin-bottom:10px' name='delete' onclick="return confirm('Are You Sure To Delete This Image ?' )">Delete</button></a>
							</center>
						</div><?php
							}
							}?>
						
							 

						
			</div>
			
			
		  </div>
		</div>
			
			<div class="hidden" id="img-repo">
			<?php
			$photo_big=mysqli_query($db,"select * from gallery");
							if(mysqli_num_rows($photo_big))
							{
							while($image_big=mysqli_fetch_array($photo_big))
							{?>
					<div class="item" id="image-<?php echo $image_big['gallery_id'];?>">
					<img class="thumbnail img-responsive" title="<?php echo $image_big['gallery_name'];?>" src="../img/Hotel Gamthi/<?php echo $image_big['gallery_main_photo'];?>">
				</div>
				<?php
				}
				}?>
			</div>
		
		<div class="modal" id="modal-gallery" role="dialog">
		  <div class="modal-dialog" style="margin-top:  150px;">
			<div class="modal-content">
			  <div class="modal-header">
				  <button class="close" type="button" data-dismiss="modal">X</button>
				  <h3 class="modal-title"></h3>
			  </div>
			  <div class="modal-body">
				  <div id="modal-carousel" class="carousel">
		   
					<div class="carousel-inner">
					</div>
					
					<!--<a class="carousel-control left" href="#modal-carousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
					<a class="carousel-control right" href="#modal-carousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>-->
					
				  </div>
			  </div>
			</div>
		  </div>
		</div>
		<!-- /Gallery -->

<!-- Footer -->
<?php   include("footer.php")  ?>
<!-- /Footer -->
<?php
			if(isset($_REQUEST['delete_photo_id']))
			{
				mysqli_query($db,"delete from gallery where gallery_id='$_REQUEST[delete_photo_id]'");
				header('location: gallery.php');
			}
?>