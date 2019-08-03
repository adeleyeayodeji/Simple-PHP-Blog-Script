<?php include 'include/header.php'; ?>
   <div class="more">
				<!-- Featured post begins here -->
   			<div class="featured">
   				<h2 class="h2">Featured Post</h2>
   				<?php 
				$query = mysqli_query($con, "SELECT * FROM post ORDER BY id DESC");
				$row = mysqli_fetch_assoc($query);
				?>
   				<a href="article/<?php echo $row['id']; ?>/<?php echo strtolower(str_replace(' ', '-', trim($row['title'])))."/"; ?>">
	   					<!-- Featured post layer 1 -->
	   				<div class="featured1" style="background-image: url('image/<?php echo $row['image']; ?>');">
	   					<small class="small1"><?php echo $row["category"]; ?></small>
	 					<div class="featuredtext">
	 						<h2><?php echo $row['title']; ?></h2>
	 						<p>
	 							<?php echo substr($row['text'],0,170)."..."; ?>
	 						</p>
	 					</div>
	   				</div>
   				</a>
   				<!-- Featured post layer 1 ends here -->

   				<!-- Featured post layer 2 -->
   				<div class="featured2">
   					<?php 
					$query = mysqli_query($con, "SELECT * FROM post WHERE id = 14 ORDER BY id DESC");
					$row = mysqli_fetch_assoc($query);
					?>
					<!-- Featured post layer-inner 1 -->
					<a href="article/<?php echo $row['id']; ?>/<?php echo strtolower(str_replace(' ', '-', trim($row['title'])))."/"; ?>">
	   					<div class="inner two" style="background-image: url('image/<?php echo $row['image']; ?>');">
	   						<small class="innersmall"><?php echo $row["category"]; ?></small>
	   						<div class="featuredtext2">
		 						<h2><?php echo $row['title']; ?></h2>
		 						<p>
		 							<?php echo substr($row['text'],0,100)."..."; ?>
		 						</p>
	 						</div>
	   					</div>
   					</a>
   					<!-- Featured post layer-inner 1 ends here-->
   					<?php 
					$query = mysqli_query($con, "SELECT * FROM post WHERE id = 12 ORDER BY id DESC");
					$row = mysqli_fetch_assoc($query);
					?>
					<!-- Featured post layer-inner 2 -->
					<a href="article/<?php echo $row['id']; ?>/<?php echo strtolower(str_replace(' ', '-', trim($row['title'])))."/"; ?>">
	   					<div class="inner2 t3" style="background-image: url('image/<?php echo $row['image']; ?>');">
	   						<small class="small4"><?php echo $row["category"]; ?></small>
	   					<div class="featuredtext3">
		 					<h2 class="title"><?php echo $row['title']; ?></h2>
	 						<p>
	 							<?php echo substr($row['text'],0,100)."..."; ?>
	 						</p>	
	 					</div>
	   					</div>
   					</a>
   					<!-- Featured post layer-inner 2 ends here -->
   				</div>
   			</div>
   			<!-- Featured post ends here -->

   			<!-- Featured post seperator start here -->
   			<div class="clearfix">
   				<span>. . .</span>
   			</div>
   				<!-- Featured post seperator ends here -->

   				<div class="mainbody">

   					<!-- body post start here -->
   					<div class="body1">
	   					<?php 
						$query = mysqli_query($con, "SELECT * FROM post ORDER BY id DESC LIMIT 3");
						while ($row = mysqli_fetch_assoc($query)) {
						?>
						<div class="thumbnailh">
							<!-- Post title start here -->
							<h3 class="posttitle">
								<?php echo $row['title']; ?>
							</h3>
							<!-- Post title ends here -->
								<a href="article/<?php echo $row['id']; ?>/<?php echo strtolower(str_replace(' ', '-', trim($row['title'])))."/"; ?>">
								<!-- Post thumbnail start here -->
									<div class="postimage sidebarimage" style="background-image: url('image/<?php echo $row['image']; ?>');">
									</div>
								 </a>
								 <!-- Post thumbnail ends here -->

								  <!-- Post date start here -->
								<small class="belowpost">Date: <?php echo $row["date"]; ?></small>
								 <!-- Post date ends here -->

								  <!-- Post category start here -->
								<small class="belowpost">Category: <?php echo $row["category"]; ?></small>
								 <!-- Post date ends here -->

								  <!-- Post contents start here -->
								<p>
									<?php echo substr($row['text'],0,200)."..."; ?>
								</p>
								<!-- Post contents ends here -->

								<!-- Post read more start here -->
								<p>
									<a class="link" href="article/<?php echo $row['id']; ?>/<?php echo strtolower(str_replace(' ', '-', trim($row['title'])))."/"; ?>">Read More</a>
								</p>
								<!-- Post read more ends here -->
								<hr>
						</div>

						<?php
					}
					?>
   					</div>
   					<!-- body post ends here -->


   					<!-- Sidebar Started here -->
   					<div class="body2">
   						<!-- Sidebar Search begin here -->
   						<div class="sidebar1">
   							<h3 class="sidebartitle">
								Search Post: 
							</h3>
   							<p>
	   							<form action="" method="post">
	                  				<input class="search" type="text" placeholder="Enter full title to search" onkeyup="showHint(this.value)">
		                  			<div id="txtHint" class="searchbox">
						            </div>
	               				</form>
   							</p>
   						</div>
   						<!-- Sidebar Search ends here -->

   						<!-- Sidebar Recent Post start here -->
   						<div class="sidebar2">
	   						<h3 class="sidebartitle">
									Recent Post: 
							</h3>
			 					<?php 
						
							$query = mysqli_query($con, "SELECT * FROM post ORDER BY id DESC LIMIT 3");
							while ($row = mysqli_fetch_assoc($query)) {
								?>
								<a href="article/<?php echo $row['id']; ?>/<?php echo strtolower(str_replace(' ', '-', trim($row['title'])))."/"; ?>">
									<div class="sidediv">
										<div class="postdiv">
											<div class="postimagee sidepic" style="background-image: url('image/<?php echo $row['image']; ?>');"></div>
										</div>
										<div class="sidediv2">
											<h3 class="sidedivh3">
												<?php echo $row['title']; ?>
											</h3>
											<small class="sidedivsmall">Date: <?php echo $row["date"]; ?></small>
											<p class="sidedivp">
												<?php echo substr($row['text'],0,60)."..."; ?>
											<a class="sidediva" href="article/<?php echo $row['id']; ?>/<?php echo strtolower(str_replace(' ', '-', trim($row['title'])))."/"; ?>"></a>
											</p>	
										</div>
								
									</div>
								</a>
								<br><hr><br>

									<?php
								}
								?>
   						</div>
   						<!-- Sidebar Recent Post ends here -->

   						<!-- Sidebar Post category start here -->
   						<div class="sidebar3">
							<h3 class="sidebartitle">
								Facebook 
							</h3>
							<div style="padding-top: 5px;">
								<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbiggidroid%2F&tabs&width=440&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=228190737761400" width="100%" height="224" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
							</div>
   						</div>
   						<!-- Sidebar Post category ends here -->
   						   						<!-- Sidebar Recent Post start here -->
   						<div class="sidebar2">
	   						<h3 class="sidebartitle" style="margin-top: 1px;">
									Ads Space: 
							</h3>
			 				<img class="ads" src="image/Google Ads Logo.png" width="98%" height="auto" style="margin: 0px;margin-top: 5px;">					
			 			</div>
   						<!-- Sidebar Recent Post ends here -->

   						<!-- Sidebar Post category start here -->
   						<div class="sidebar3">
							<h3 class="sidebartitle" style="margin-bottom: 10px;">
								Category: 
							</h3>
								 <?php 
									$query = mysqli_query($con, "SELECT * FROM post ORDER BY id ASC LIMIT 4");
									while ($row = mysqli_fetch_assoc($query)) {
										?>
							<a class="catlink" href="category/<?php echo strtolower($row['category']); ?>">
								<small style="border: 1px solid blueviolet;border-radius:3px;padding: 5px;color: blueviolet;margin: 2px;background: white;">
									<?php echo $row["category"]; ?>
								</small>
							</a>
								<?php } ?>
   						</div>
   						<!-- Sidebar Post category ends here -->
   					</div>
   					<!-- Sidebar ends here -->
   				</div>
			</div>
<?php include 'include/footer.php'; ?>