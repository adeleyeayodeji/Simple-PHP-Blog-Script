<?php
include 'headercat.php';
$category = $_GET["category"];
$query = mysqli_query($con, "SELECT * FROM post WHERE category='$category' ");
$row1 = mysqli_fetch_assoc($query)
?>
  <div class="more">
  				<h2 class="h2admin">Category Results: <small style="background: black;color: white;padding: 4px;"><?php echo $row1["category"]; ?></small></h2>
				<?php 
				$query = mysqli_query($con, "SELECT * FROM post WHERE category='$category' ORDER BY id DESC");
				while ($row = mysqli_fetch_assoc($query)) {
					?>

					<div style="clear: both;margin-bottom: 50px;">
				
				<div style="width: 40%;float: left;">
					<div style="background-image: url('image/<?php echo $row['image']; ?>');
				    background-position: center top !important;
				    background-size: cover;
				    background-repeat: no-repeat;
				    height: 150px;
				    width: 83%;
				    margin-left: 11px;
				    border: 5px solid blueviolet;"></div>
				</div>
				<div style="width:60%;float: right;">
				<h3 style="color: black;margin: 0px;">
					<?php echo $row['title']; ?>

				</h3>
				<small style="margin: 0px;background: black none repeat scroll 0% 0%;color: white;padding: 3px;font-size: 10px;">Category: <?php echo $row["category"]; ?></small>
				<small style="margin: 0px;background: black none repeat scroll 0% 0%;color: white;padding: 3px;font-size: 10px;">Date: <?php echo $row["date"]; ?></small>
				<p style="color: black;" >
					<?php echo substr($row['text'],0,200)."..."; ?>
				</p>	
				</div>
				
				<p style="font-family: calibri; "><a style="background: blueviolet;padding: 5px;color: white;text-decoration: none;" href="../article/<?php echo $row['id']; ?>/<?php echo strtolower(str_replace(' ', '-', trim($row['title'])))."/"; ?>">Read More</a> 
				
				</div><br><hr><br>

					<?php
				}
				?>
				<center style="margin-bottom: 10px;"><a style="background: blueviolet;padding: 5px;color: white;text-decoration: none;" href="../index.php">Go Home</a></center> 
			</div>
<?php include 'footercat.php'; ?>