<?php
include 'include/header.php';
if (isset($_SESSION["admin"])) {

			$id = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM sitedetails WHERE id='$id' ");
			$row = mysqli_fetch_assoc($query);


			// Upadte user 
			if (isset($_POST['update'])) {
				
		$id = $_GET['id'];
		$title = $_POST['title'];
		$text = $_POST['text'];

		$query = mysqli_query($con, "UPDATE sitedetails SET sitetitle='$title', sitetagline='$text' WHERE id='$id' ") or die();
		if ($query) {
		$posted = "<p style='color:white;background:green;padding:5px;border-radius:5px;text-align:center;'>Posted Successfully <br><span>Refresh the page to see result!</span></p>";
	}else{
		$posted = "<p style='color:white;background:red;padding:5px;border-radius:5px;text-align:center;'>Post Error!!!</p>";
	}
			}

					if (isset($_POST['updatelogo'])) {
			
				$target = "../image/".basename($_FILES['image']['name']);

		$image = $_FILES['image']['name'];		
		$id = $_GET['id'];
		$query = mysqli_query($con, "UPDATE sitedetails SET sitelogo='$image' WHERE id='$id' ") or die();
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$posted = "<p style='color:white;background:green;padding:5px;border-radius:5px;text-align:center;'>Image change Successfully<br><span>Refresh the page to see result!</span></p>";
	}else{
		$posted = "<p style='color:white;background:red;padding:5px;border-radius:5px;text-align:center;'>Image change error Error!!!</p>";
	}
			}

}else{
	header("location: login.php");
}

?>

<style type="text/css">
	form{
		margin-right: auto;
		margin-left: auto;
		width: 50%;
		margin-top: 10px;
		margin-bottom: 10px;
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
   		 width: 110%;
		background: transparent;
		outline: none;
		border:none;
		border-bottom: 1px solid blueviolet;
	}
</style>
		
	<form method="post" action="" enctype="multipart/form-data">
		<p><?php if (isset($_POST["updatelogo"])) {
						echo $posted;
					} ?></p>
						<input type="hidden" value="999999999999999">
					<label>
                  		 <input style="display: none;" id="file" type="file" name="image" onchange="proccess(window.lastFile=this.files[0])">  
                           <div style="margin: 0px;padding: 0px;">
                             <!--Sample image uploaded begins HERE -->
                             <p>Site Logo:</p>
                            <img id="image" style="width: 100%;height: auto;cursor: pointer;margin-left:0px;" class="ui centered large image" src="../image/<?php echo $row["sitelogo"] ?>"/>
                             <!--Sample image uploaded ends HERE -->
                          </div>
                  		     
      		          </label>
      		          <input type="submit" name="updatelogo" value="Update logo">
     </form>	
	<form method="post" action="">
		<p><?php if (isset($_POST["update"])) {
						echo $posted;
					} ?></p>
					<p>Site Title:</p>
				    <input type="text" name="title" placeholder="Enter your title" value="<?php echo $row["sitetitle"] ?>">
      		          <p>Site Tagline:</p>
      		          <textarea name="text"><?php echo $row["sitetagline"] ?></textarea>
			<input type="submit" name="update" value="Update">
			<center style="margin-top: 5px;">
				<a style="font-family: calibri; background: blueviolet;padding: 5px;color: white;text-decoration: none;" href="javascript:history.go(-1)">&larr; Go Back</a>
			</center>
		</p>
	</form>
<?php include 'include/footer.php'; ?>