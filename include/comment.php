<hr>
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
				<div style="margin-top: 0px;padding-top: 0px;">
					<?php
					if (isset($_POST['submit'])) {
						
					$name = $_POST['name'];
					$postid = $_POST['postid'];
					$message = $_POST['message'];
					if (empty($name)) {
						header("location:?note = Empty username"); die();
					}
					if (empty($message)) {
						header("location:?note = Empty message"); die();
					}
					$query = mysqli_query($con, "INSERT INTO comment(name, message, postid) VALUES('$name', '$message', '$postid') ") or die();
					if ($query) {
						$save = "<em>Comment added successfully</em><br>";
					}
					}else{
						$comment = "<em>Be the first to comment</em><br>";
					}
					
?>
					<h3 style="margin-top: 0px;padding-top: 0px;font-family: calibri;">Comment Below:</h3>
					<?php  
					$id = $_GET["id"];
					$query = mysqli_query($con, "SELECT * FROM comment WHERE postid='$id' ORDER BY id DESC");
					while ($row = mysqli_fetch_assoc($query)) {
					?>
					<div>
						<p style="font-family: calibri;padding: 3px;"><span style="background: blueviolet;color: white;padding: 3px;font-weight: bold;font-family: calibri;"><?php echo $row['name']; ?>:</span> <?php echo $row['message']; ?></p>
						<hr>
					</div>
					<?php } ?>
	
					<form method="post" action="">
						<input type="text" name="name" placeholder="Enter you name" required="" style="width: 100%;">
						<!-- Getting ID from post -->
						<?php 
							$id = $_GET["id"];
							$query = mysqli_query($con, "SELECT * FROM post WHERE id='$id' ");
							$row2 = mysqli_fetch_assoc($query);
						?>
						<input type="hidden" name="postid" value="<?php echo $row2['id']; ?>" required="">
						<!-- Getting ID from post -->
						<p>Message</p>
						<textarea placeholder="Enter your text" rows="5" cols="53" name="message" required="" style="width: 100%;"></textarea><br>
						<?php if (isset($_POST['submit'])) {
							echo $save;
						}else{
							echo $comment;
						} ?>
						<input type="submit" name="submit" value="Submit" style="width: 100%;">
					</form>
					<br>
				</div>
			</div>