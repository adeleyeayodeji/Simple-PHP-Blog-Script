<?php session_start(); 
include '../include/db.php';
/*
This script is wrtten by 
	Author = BiggiDroid 
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keyword" content="Biggidroid, Biggidroid simple php cms, php cms">
	<meta name="description" content="<?php echo $row["sitetagline"] ?>">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="icon" href="../img/<?php echo $row["sitelogo"] ?>">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/index.js"></script>
	<script src="../js/search.js"></script>

</head>
<body>
<div class="container">
	<!-- Welcome message to Admin -->
		<?php if (isset($_SESSION["admin"])) { ?><p class="linktag"><a href="index.php">
	Welcome <?php echo $_SESSION["user"]; ?> </a></p><?php
}; ?>
<!-- Welcome message to Admin ends here -->
	<div class="header">
		<!--Logo begin Here -->
		<div class="logo">
			<a href="../index.php"><img align="center" class="sitelogo" src="../image/<?php echo $row["sitelogo"] ?>"></a>
			<?php if (isset($_SESSION["admin"])) {
				echo "" ?>
				<br><small style="font-family: calibri;text-align: center;"><a href="editsite.php?id=<?php echo $row['id'] ?>">Edit logo</a></small>
				<?php
			"";} ?>
		</div>
		<!--Logo ends Here -->
		<div class="mainhead">
			<!-- Site title begins here -->
			<h2><?php echo $row["sitetitle"] ?>
				<?php if (isset($_SESSION["admin"])) {
				echo "" ?>
				<small style="font-family: calibri;text-align: center;font-size: 15px;"><a href="editsite.php?id=<?php echo $row['id'] ?>">Edit Title</a></small>
				<?php
			"";} ?>
			</h2>
			<!-- Site title ends here -->

			<!-- Site tagline begins here -->
			<span class="sitetagline"><?php echo $row["sitetagline"] ?>
				<?php if (isset($_SESSION["admin"])) {
				echo "" ?>
				<small style="font-family: calibri;letter-spacing: normal;"><a href="editsite.php?id=<?php echo $row['id'] ?>">Edit Tagline</a></small>
				<?php
			"";} ?>
			</span>
			<!-- Site tagline ends here -->
		</div>
		<br>
		<!-- Site navigation link begins here -->
		<nav>
			<a href="#">Home</a> |
		<?php
		$query = mysqli_query($con, "SELECT * FROM post ORDER BY id ASC LIMIT 4");
		while ($row = mysqli_fetch_assoc($query)) {
			?>
			<a href="../include/category.php?category=<?php echo $row['category'] ?>"><?php echo $row["category"]; ?></a> |
			<?php 
		} ?>
			<a href="#">Contact</a> |
			<a href="#">About US</a> 
		</nav>
		<!-- Site navigation link ends here -->
	</div>