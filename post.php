<?php include("include/posthead.php"); ?>

	<div class="content">
				<?php
					$id = $_GET["id"];
					$query = mysqli_query($con, "SELECT * FROM post WHERE id='$id' ");
					$row2 = mysqli_fetch_assoc($query);
				?>
		<div class="main">
			<div class="nicetitle" style="background: url(image/<?php echo $row2['image']; ?>);">
				<div class="breadcrum">
				<h3><?php echo $row2["title"]; ?></h3>
			</div>
			</div>
			<!-- Full post container start here-->
		<div class="postside">
				<!-- Full Post Start Here -->

				<!-- Post Title start Here -->
					<h3 style="margin-top: 10px;padding-top: 0px;font-family: calibri;text-align: left;padding: 5px;color: #AFAFAF;font-weight: normal;
					font-size: initial;"><a href="" style="color: black;">BiggiDroid</a> » <a href="category/<?php echo strtolower($row2['category']); ?>" style="color: black;"><?php echo $row2["category"]; ?></a> » <?php echo $row2['title']; ?></h3>
				<!-- Post Title ends Here -->

				<!-- Share button -->	
				<p class="share">
					<!-- Print -->
					Share via:
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $link; ?>" target="_blank">
					    <i class="fa fa-facebook"></i>
					</a>

					<!-- Twitter -->
					<a href="https://twitter.com/home?status=<?php echo $link; ?>" target="_blank">
					    <i class="fa fa-twitter"></i>
					</a>

					<!-- Whatsapp -->
					<a href="https://api.whatsapp.com/send?text=<?php echo $row2['title']." ".$link; ?>" data-action="share/whatsapp/share">
						 <i class="fa fa-whatsapp"></i>
					</a>
			    </p>
				<!-- Share button ends-->

				<!-- Post category and date start Here -->
					<small style="margin: 0px;background: black none repeat scroll 0% 0%;color: white;padding: 3px;font-size: 10px;"><?php echo $row2["category"]; ?></small>
				<small style="margin: 0px;background: black none repeat scroll 0% 0%;color: white;padding: 3px;font-size: 10px;">Date: <?php echo $row2["date"]; ?></small><br><br>
				<!-- Post category and date ends Here -->

				<!-- Post thumbnail start Here -->
					<center>
						<div class="postthumbnail">
							<img src="image/<?php echo $row2['image']; ?>" width="100%" height="auto">
						</div>
					</center>
				<!-- Post thumbnail ends Here -->

				<!-- Post editing option for admin start Here -->
					<?php if (isset($_SESSION["admin"])) {
			    	echo "" ?>
			    		<br>
			    		<a href="admin/edit.php?id=<?php echo $row2['id'] ?>">
			    			<small style="margin: 0px;margin-left:0px;background: black none repeat scroll 0% 0%;color: white;padding: 3px;font-size: 10px;">Edit Post
			    			</small>
			    		</a>
						    	<?php ;
						    } 
					?>
				<!-- Post editing option for admin ends Here -->

				<!-- Post full write up start here -->
    			<p style="font-family: calibri;font-size: large;"><?php echo $row2["text"]; ?></p>
    			<!-- Post full write up ends here -->

    			<!-- Post comment start here -->
    			<?php include("include/comment.php"); ?>
    			<!-- Post comment ends here -->

				</div>
				<!-- Full post container ends here-->

    			<!-- Sidebar start here -->
				<div class="sidebar">
					<!-- Sidebar Recent Post Start here -->
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

					<!-- Sidebar Recent Post title Start here -->
					<h3 style="margin-top: 10px;padding-top: 0px;font-family: calibri;background: blueviolet;color: white;padding:5px;">Recent Posts
					</h3>
					<!-- Sidebar Recent Post title ends here -->

					<?php 
					$query = mysqli_query($con, "SELECT * FROM post ORDER BY id DESC LIMIT 4");
					while ($row = mysqli_fetch_assoc($query)) {
						?>
					<!-- Clearfix for post start here -->
					<div style="clear: both;margin-bottom: 50px;">
					
					<!-- Sidebar Recent Post thumbnail start here -->
					<div style="width: 40%;float: left;">
						<a href="article/<?php echo $row['id']; ?>/<?php echo strtolower(str_replace(' ', '-', trim($row['title'])))."/"; ?>">
							<div class="postmiside" style="background-image: url('image/<?php echo $row['image']; ?>');">
							</div>
						</a>
					</div>
					<!-- Sidebar Recent Post thumbnail ends here -->

					<!-- Sidebar Recent Post article container start here -->
					<div style="width:60%;float: right;">
						<!-- Sidebar Recent Post article container title start here -->
						<h3 style="color: black;font-size: 16px;margin-top: 0px;margin-left: 10px;    margin-bottom: 0px;">
							<?php echo $row['title']; ?>
						</h3>
						<!-- Sidebar Recent Post article container title ends here -->

						<!-- Sidebar Recent Post article container category and date start here -->
						<small style="margin: 0px;margin-left:10px;background: black none repeat scroll 0% 0%;color: white;padding: 3px;font-size: 10px;margin-right: 5px;"><?php echo $row["category"]; ?>
						</small>
						<small style="margin: 0px;background: black none repeat scroll 0% 0%;color: white;padding: 3px;font-size: 10px;">Date: <?php echo $row["date"]; ?>
						</small>
						<!-- Sidebar Recent Post article container category and date ends here -->

						<!-- Sidebar Recent Post article container article start here -->
						<p style="color: black;    margin: 0px;
						    margin-left: 10px;font-family: calibri;margin-bottom: 10px;" >
							<?php echo substr($row['text'],0,100)."..."; ?> 

							<!-- Sidebar Recent Post article container article edit for admin start here -->
						    <?php if (isset($_SESSION["admin"])) {
						    	echo "" ?>
						    		<a style="background: blueviolet;
						    padding: 2px;
						    color: white;
						    text-decoration: none;font-size: 12px;" href="admin/edit.php?id=<?php echo $row['id'] ?>">Edit Post</a>
										<a style="background: blueviolet;
						    padding: 2px;
						    color: white;
						    text-decoration: none;font-size: 12px;" href="admin/delete.php?id=<?php echo $row['id'] ?>">Delete</a>
						    	<?php ;
						    } ?>
						    <!-- Sidebar Recent Post article container article edit for admin ends here -->
						</p>
						<!-- Sidebar Recent Post article container article ends here -->

					</div>
					<!-- Sidebar Recent Post article container ends here -->
					
					</div>
					<!-- Clearfix for post ends here -->

					<br>
					<hr>
					<br>
						<?php
					}
					?>

					   						<!-- Sidebar Post category start here -->
   						<div class="sidebar3">
							<h3 class="sidebartitle">
								Facebook 
							</h3>
							<div style="padding-top: 5px;">
								<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbiggidroid%2F&tabs&width=440&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=228190737761400" width="100%" height="224" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
							</div>
   						</div>

   							<!-- Sidebar Post category start here -->
   						<div class="sidebar3" style="margin-bottom: 13px;">
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
   						<!-- Sidebar Post category ends here -->
   						   						<!-- Sidebar Recent Post start here -->
   						<div class="sidebar2" style="margin-bottom: 8px;">
	   						<h3 class="sidebartitle" style="margin-top: 1px;">
									Ads Space: 
							</h3>
			 				<img class="ads" src="image/Google Ads Logo.png" width="98%" height="auto" style="margin: 0px;margin-top: 5px;border: 5px solid blueviolet;">					
			 			</div>
   						<!-- Sidebar Recent Post ends here -->
				</div>
				<!-- Sidebar ends here -->

				<!-- Go home navigation start here -->
				<p style="font-family: calibri; clear: both;">
					<a style="background: blueviolet;padding: 5px;color: white;text-decoration: none;" href="javascript:history.go(-1)">&larr; Go Back
					</a>
				</p>
				<!-- Go home navigation ends here -->
			
			<?php include("include/footer.php"); ?>