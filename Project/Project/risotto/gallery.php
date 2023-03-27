<!-- Header -->
<?php  include("config.php")   ?>
<?php  include("header.php")   ?>
<!-- /Header -->

<!-- banner-->
<div class="banner-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/IMG-20180708-WA0011.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="white-text title">Photo Gallery</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /banner-->
		<!-- Gallery -->
		<div class="container">
		  <div class="row"style="margin-top: 30px; margin-bottom: 30px;">
			
			<div class="row">
						<?php
							$photo=mysqli_query($db,"select * from gallery");
							if(mysqli_num_rows($photo))
							{
							while($image=mysqli_fetch_array($photo))
							{
							echo "<div class='col-12 col-md-4 col-sm-6'> 
								<img class='thumbnail img-responsive' id='image-".$image['gallery_id']."' src='.\\img\Hotel Gamthi\\".$image['gallery_main_photo']."'>
		
						</div>";
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
							{	
				echo "<div class='item' id='image-".$image_big['gallery_id']."'>";
					echo "<img class='thumbnail img-responsive' title='".$image_big['gallery_name']."' src='./img/Hotel Gamthi/".$image_big['gallery_main_photo']."'>
				</div>";
				}}?>
				
				<!-- #image-1
				<div class="item" id="image-1">
					<img class="thumbnail img-responsive" title="Bhartiy Bethak" src="img/Hotel Gamthi/IMG-20180708-WA0015.jpg">
				</div>
				
			  
				#image-2
				<div class="item" id="image-2">
					<img class="thumbnail img-responsive" title="Waiting Tables" src="img/Hotel Gamthi/IMG-20180708-WA0009.jpg">
				</div>
				 
			  
				#image-3
				<div class="item" id="image-3">
					<img class="thumbnail img-responsive" title="Greenary" src="img/Hotel Gamthi/IMG-20180708-WA0010.jpg">
				</div>
				     
				
				#image-4
				<div class="item" id="image-4">
					<img class="thumbnail img-responsive" title="Decoration" src="img/Hotel Gamthi/IMG-20180708-WA0014.jpg">
				</div>
				
			  
				#image-5
				<div class="item" id="image-5">
					<img class="thumbnail img-responsive" title="Table" src="img/Hotel Gamthi/IMG-20180708-WA0018.jpg">
				</div>
				 
			  
				#image-6
				<div class="item" id="image-6">
					<img class="thumbnail img-responsive" title="Dinner With Environment" src="img/Hotel Gamthi/IMG-20180708-WA0019.jpg">
				</div>-->
				
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
