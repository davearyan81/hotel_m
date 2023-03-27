<!-- Header -->
<?php  include("config.php")   ?>
<?php  include("header.php")   ?>
<!-- /Header -->
<!-- banner-->
<div class="banner-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/IMG-20180708-WA0010.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="white-text title">Our Menu</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /banner-->

<!-- Menu -->
		<div id="menu" class="section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/IMG-20180708-WA0010.jpg)"></div>
			<!-- /Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<!--<div class="row">

					<div class="section-header text-center">
						<h4 class="sub-title">Discover</h4>
						<h2 class="title white-text">Our Menu</h2>
					</div>-->

					<!-- menu nav -->
					<ul class="menu-nav">
					  <li class="active"><a data-toggle="tab" href="#menu1">Dinner</a></li>
					  <li><a data-toggle="tab" href="#menu2">Drinks</a></li>
					  <li><a data-toggle="tab" href="#menu3">Lunch</a></li>
					  <li><a data-toggle="tab" href="#menu4">Dessert</a></li>
					</ul>
					<!-- /menu nav -->

					<!-- menu content -->
					<div id="menu-content" class="tab-content">

						<!-- menu1 -->
						<div id="menu1" class="tab-pane fade in active">
							<?php
							$query=mysqli_query($db,"select * from menu where main_category='Dinner'");
							$total_count=mysqli_num_rows($query);
							if(mysqli_num_rows($query)>0)
							{
							 	
							
								echo "<div class='col-md-6'>";
								while($row=mysqli_fetch_array($query))
								{
								
								if($row['sub_category_id']==6)
								{
								echo "</div>";
								echo "<div class='col-md-6'>";
								}
								echo "<!-- single dish -->";
								echo "<div class='single-dish'>";
									echo "<div class='single-dish-heading'>";
										echo "<h4 class='name'><a href='showmenu.php?sub_category=".$row['sub_category']."'><b>".$row['sub_category']."</b></a></h4>";
									echo "</div>";
								echo "</div>";
								if($row['sub_category_id']==10)
								{
								echo "</div>";
								}
							}
							}?>
								<!-- /single dish -->

                            </div>  

						</div>
						<!-- /menu1 -->

						<!-- menu2 -->
						<div id="menu2" class="tab-pane fade ">
							<div class="col-md-6">

								<?php
							$query=mysqli_query($db,"select * from menu where main_category='Drinks'");
							if(mysqli_num_rows($query)>0)
							{
							while($row=mysqli_fetch_array($query))
							{ 
							
								if($row['sub_category_id']==6)
								{
								echo "</div>";
								echo "<div class='col-md-6'>";
								}
								echo "<!-- single dish -->";
								echo "<div class='single-dish'>";
									echo "<div class='single-dish-heading'>";
										echo "<h4 class='name'><a href='showmenu.php?sub_category=".$row['sub_category']."'><b>".$row['sub_category']."</b></a></h4>";
									echo "</div>";
								echo "</div>";
								if($row['sub_category_id']==10)
								{
								echo "</div>";
								}
							}
							}?>
								<!-- /single dish -->

								
							</div>
						</div>
						<!-- /menu2 -->
						
						<!-- menu3 -->
						<div id="menu3" class="tab-pane fade">
							<div class="col-md-6">
									<?php
							$query=mysqli_query($db,"select * from menu where main_category='Lunch'");
							if(mysqli_num_rows($query)>0)
							{
							while($row=mysqli_fetch_array($query))
							{ 
							
								if($row['sub_category_id']==6)
								{
								echo "</div>";
								echo "<div class='col-md-6'>";
								}
								echo "<!-- single dish -->";
								echo "<div class='single-dish'>";
									echo "<div class='single-dish-heading'>";
										echo "<h4 class='name'><a href='showmenu.php?sub_category=".$row['sub_category']."'><b>".$row['sub_category']."</b></a></h4>";
									echo "</div>";
								echo "</div>";
								if($row['sub_category_id']==10)
								{
								echo "</div>";
								}
							}
							}?>
							</div>

						</div>
						<!-- /menu3 -->
						
						<!-- menu4 -->
						<div id="menu4" class="tab-pane fade">
							<div class="col-md-6">
							
								<?php
							$query=mysqli_query($db,"select * from menu where main_category='Dessert'");
							if(mysqli_num_rows($query)>0)
							{
							while($row=mysqli_fetch_array($query))
							{ 
							
								if($row['sub_category_id']==6)
								{
								echo "</div>";
								echo "<div class='col-md-6'>";
								}
								echo "<!-- single dish -->";
								echo "<div class='single-dish'>";
									echo "<div class='single-dish-heading'>";
										echo "<h4 class='name'><a href='showmenu.php?sub_category=".$row['sub_category']."'><b>".$row['sub_category']."</b></a></h4>";
									echo "</div>";
								echo "</div>";
								if($row['sub_category_id']==10)
								{
								echo "</div>";
								}
							}
							}?>
							
							</div>
						</div>
						<!-- /menu4 -->




					</div>
					<!-- /menu content -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Menu -->




<!-- Footer -->
<?php   include("footer.php")  ?>
<!-- /Footer -->
