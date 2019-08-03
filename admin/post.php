<?php
include 'include/header.php';

if (isset($_POST['submit'])) {
	$target = "../image/".basename($_FILES['image']['name']);

	// storing in database
	$image = $_FILES['image']['name'];
	$text = $_POST['text'];
	$category = $_POST['category'];
	$title = $_POST['title'];
	$date = date("F j, Y");

	$query = mysqli_query($con, "INSERT INTO post(image, text, category, title, date) VALUES('$image', '$text', '$category', '$title', '$date') ");
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$query = mysqli_query($con, "SELECT * FROM post ORDER BY id DESC LIMIT 1");
		$row = mysqli_fetch_assoc($query);
		$posted = "<p style='color:white;background:green;padding:5px;text-align:left;'>Posted Successfully <a style='float: right;text-decoration: underline;background: white;color: green;padding: 1px;font-weight: bold;' href='../post.php?id=".$row['id']."'>View Post</a></p>";
	}else{
		$posted = "<p style='color:white;background:red;padding:5px;border-radius:5px;text-align:center;'>Post Error!!!</p>";
	}
}



?>
<style type="text/css">
	form{
		width: 50%;
		float: left;
		margin-top: 10px;
		margin-bottom: 10px;
		clear: both;
	}
	h2{
		text-align: center;
	}
	input{
		height: 30px;
		background: transparent;
		outline: none;
		border:none;
		border-bottom: 1px solid blueviolet;
	}
	textarea{
		 height: 100px;
		background: transparent;
		outline: none;
		border:none;
		    width: 500px;
		border-bottom: 1px solid blueviolet;
	}
</style>

	 <div class="more">
				<div class="postside">
					<h3 style="margin-top: 10px;padding-top: 0px;font-family: calibri;background:blueviolet;text-align: left;padding: 5px;color: white;">Add a new post</h3>
				
				<form method="post" action="" enctype="multipart/form-data" style="width: 100%;float: left;margin-top: 0px;margin-bottom: 10px;clear: both;">
					<p><?php if (isset($_POST["submit"])) {
						echo $posted;
					} ?></p>
					<p>Post Title:</p>
				    <input type="text" name="title" placeholder="Enter your title">
						<input type="hidden" value="999999999999999">
					<label>
                  		 <input style="display: none;" id="file" type="file" name="image" onchange="proccess(window.lastFile=this.files[0])">  
                           <div style="margin: 0px;padding: 0px;">
                             <!--Sample image uploaded begins HERE -->
                            <img id="image" style="width: 100%;height: auto;cursor: pointer;margin-left:0px;" class="ui centered large image" src="../image/postthumbnail.png"/>
                             <!--Sample image uploaded ends HERE -->
                          </div>
                  		     
      		          </label>
      		          <p>Post Category:</p>
      		          <select name="category" style="padding: 5px;background: blueviolet;color: white;margin-bottom: 5px;">
      		          	<option value="Technology">Technology</option>
      		          	<option value="Programming">Programming</option>
      		          	<option value="Lifestyle">Lifestyle</option>
      		          	<option value="Sport">Sport</option>
      		          </select>
      		          <p>Post content:</p>
				    <textarea name="text" style="font-family: calibri;">Enter content...</textarea>
				    <input type="submit" value="Post" name="submit">
				</form>
				</div>
				<div class="sidebar">
					<h3 style="margin-top: 10px;padding-top: 0px;font-family: calibri;color:white;padding:5px;background: blueviolet">Recent Posts</h3>
					<?php 
				
				$query = mysqli_query($con, "SELECT * FROM post ORDER BY id DESC LIMIT 5");
				while ($row = mysqli_fetch_assoc($query)) {
					?>

					<div style="clear: both;margin-bottom: 50px;">
				
				<div style="width: 40%;float: left;">
					<div style="background-image: url('../image/<?php echo $row['image']; ?>');
   background-position: center top !important;
    background-size: cover;
    background-repeat: no-repeat;
        height: 100px;
    width: 100%;
    margin-left: 0px;
    margin-bottom: 5px;
    border: 2px solid blueviolet;"></div>
				</div>
				<div style="width:60%;float: right;">
				<h3 style="color: black;
    font-size: 16px;
    margin-top: 0px;
    margin-left: 10px;    margin-bottom: 0px;">
					<?php echo $row['title']; ?>

				</h3>
				<small style="margin: 0px;margin-left:10px;background: black none repeat scroll 0% 0%;color: white;padding: 3px;font-size: 10px;"><?php echo $row["category"]; ?></small>
				<small style="margin: 0px;background: black none repeat scroll 0% 0%;color: white;padding: 3px;font-size: 10px;">Date: <?php echo $row["date"]; ?></small>
				<p style="color: black;    margin: 0px;
    margin-left: 10px;font-family: calibri;margin-bottom: 10px;" >
					<?php echo substr($row['text'],0,60)."..."; ?>
					<a style="background: blueviolet;
    padding: 2px;
    color: white;
    text-decoration: none;font-size: 12px;" href="../post.php?id=<?php echo $row['id'] ?>">Read More</a> <a style="background: blueviolet;
    padding: 2px;
    color: white;
    text-decoration: none;font-size: 12px;" href="edit.php?id=<?php echo $row['id'] ?>">Edit Post</a>
				<a style="background: blueviolet;
    padding: 2px;
    color: white;
    text-decoration: none;font-size: 12px;" href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
				</p>	
				</div>
				
				</div><br><hr><br>

					<?php
				}
				?>
				</div>
			</div>

<?php include 'include/footer.php'; ?>