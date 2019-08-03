<?php session_start(); 

include 'db.php';
/*
This script is wrtten by 
	Author = Adeleye Ayodeji 
	FacebookPage = https://www.facebook.com/biggidroid
	Developer = Adeleye Ayodeji
	Developer URL = https://www.adeleyeayodeji.com
	WhatsApp = +2347034803384
*/
	
	$query = mysqli_query($con, "SELECT * FROM sitedetails");
	$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $row["sitetitle"] ?></title>
	<meta charset="utf-8">
	<base href="/biggidroid/">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keyword" content="Biggidroid, Biggidroid simple php cms, php cms">
	<meta name="description" content="<?php echo $row["sitetagline"] ?>">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="icon" href="img/<?php echo $row["sitelogo"] ?>">
	<script src="js/jquery.min.js"></script>
	<script src="js/index.js"></script>
	<script src="js/search.js"></script>
</head>
<body>
<div class="container">
	<!-- Welcome message to Admin -->
		<?php if (isset($_SESSION["admin"])) { ?><p class="linktag"><a href="admin/">
	Welcome <?php echo $_SESSION["user"]; ?> </a></p><?php
}; ?>
<!-- Welcome message to Admin ends here -->
	<div class="header">
		<!--Logo begin Here -->
		<div class="logo">
			<a href=""><img align="center" class="sitelogo" src="image/<?php echo $row["sitelogo"] ?>"></a>
		</div>
		<!--Logo ends Here -->
		<div class="mainhead">
			<!-- Site title begins here -->
			<h2><?php echo $row["sitetitle"] ?></h2>
			<!-- Site title ends here -->

			<!-- Site tagline begins here -->
			<span class="sitetagline"><?php echo $row["sitetagline"] ?></span>
			<!-- Site tagline ends here -->
		</div>
		<br>
		<!-- Site navigation link begins here -->
		<nav class="nav1">
			<a href="#">Home</a> |
		<?php
		$query = mysqli_query($con, "SELECT * FROM post ORDER BY id ASC LIMIT 4");
		while ($row = mysqli_fetch_assoc($query)) {
			?>
			<a href="category/<?php echo strtolower($row['category']); ?>"><?php echo $row["category"]; ?></a> |
			<?php 
		} ?>
			<a href="#">Contact</a> |
			<a href="#">About US</a> 
		</nav>
		<!-- Site navigation link ends here -->
	</div>
	<div class="featured" id="nav2">
		   		<!-- Site Navigation Mobile -->
				<h2 class="h2" id="show"><i class="fa fa-list"></i></h2>
				<h2 class="h2" id="hide"><i class="fa fa-close"></i></h2>
				<nav id="nav">
					<ul style="list-style-type: none;margin-right: 80px;">
						<li style="background: white;color: blueviolet;padding: 10px;margin-bottom: 10px;">
							<a href="#" style="color: blueviolet;">Home</a>
						</li>
							<?php
							$query = mysqli_query($con, "SELECT * FROM post ORDER BY id ASC LIMIT 4");
							while ($row = mysqli_fetch_assoc($query)) {
								?>
						<li style="background: white;color: blueviolet;padding: 10px;margin-bottom: 10px;">
							<a href="category/<?php echo strtolower($row['category']); ?>" style="color: blueviolet;"><?php echo $row["category"]; ?></a>
						</li>
							<?php 
							} ?>
						<li style="background: white;color: blueviolet;padding: 10px;margin-bottom: 10px;">
							<a href="#" style="color: blueviolet;">About US</a>
						</li>
						<li style="background: white;color: blueviolet;padding: 10px;margin-bottom: 10px;">
							<a href="#" style="color: blueviolet;">Contact</a>
						</li>
					</ul>
				</nav>
			</div>