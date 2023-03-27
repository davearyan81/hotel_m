<!-- Header -->
<?php  include("header.php")   ?>
<?php include("config.php")?>
<!-- /Header -->
<!-- banner-->
<div class="banner-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/IMG-20180708-WA0011.jpg)"></div>
			<!-- /Backgound Image -->
			
			<!--<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="white-text title">Our Menu</h2>
					</div>
				</div>
			</div>-->

			<?php
							echo "<div class='container'>";
							echo "<div class='row'>";
							echo "<div class='col-md-12 text-center'>";
							echo "<h2 class='white-text title'>".$_REQUEST['sub_category']."</h2>";
					echo "</div>";
				echo "</div>";
			echo "</div>"; 
				?>





			</div>
		<!-- /banner-->

		<!-- menu content -->
		<div id="menu-content" class="tab-content">
		
				<style>
		* {
			box-sizing: border-box;
		}
		
		/* Create two equal columns that floats next to each other */
		.column {
			float: left;
			width: 50%;
			padding: 10px;
			height: auto; /* Should be removed. Only for demonstration */
		}
		
		/* Clear floats after the columns */
		.row:after {
			content: "";
			display: table;
			clear: both;
		}
		</style>
		</head>
		<body>
		
		<!-- Row -->
		<div class="row">
		
		  <!-- Column1 -->
		  <div class="column">
		  <?php
							$menu=mysqli_query($db,"select * from menu_category where menu_type='".$_REQUEST['sub_category']."'");
							if(mysqli_num_rows($menu))
							{
							while($row=mysqli_fetch_array($menu))
							{ ?>
			<!-- single dish -->
			<div class="single-dish">
			 <div class="single-dish-heading">
			   <h4 class="name"><?php echo $row['item_name'];?></h4>
				<h4 class="price"><?php echo $row['price'];?>.00</h4>
			</div>
			</div><?php } } ?>
		<!-- /single dish -->
			
		  </div>
		  <!-- /Column1 -->
		  
		  <!-- Column2 -->
		  <div class="column">
			
		<!-- single dish -->
			<!--<div class="single-dish">
			 <div class="single-dish-heading">
			   <h4 class="name">Paneer Chatpata</h4>
				<h4 class="price">150.00</h4>
			</div>
			</div>-->
		<!-- /single dish -->
			
		  </div>
		  <!-- /Column2 -->
		
		</div>
		<!-- /Row -->
		
		</body>


		</div>
		<!-- /menu content -->
			

				
<!-- Footer -->
<?php   include("footer.php")  ?>
<!-- /Footer -->
