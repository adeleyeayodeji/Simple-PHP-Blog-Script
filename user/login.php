<?php
include '../include/db.php';
session_start();
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password' ") or die();
	if (!$row = $query -> fetch_assoc()) {
		echo "<script>alert('User not found')</script>";
	}else{
		$user = $row['first'].' '.$row['last'];
		$uname = $row['username'];
		$_SESSION['uname'] = $uname;
		$_SESSION['user'] = $user;
		header("location: ../index.php");
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Login Page
	</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- A tutorial based template from coding HTML - BiggiDroid
		Kindly Like Our Page
	Page = Coding HTML
	URL = www.facebook.com/biggidroid
	website = www.biggidroid.com
	Admin = www.facebook.com/haryhonix
-->
</head>
<body>
	<div class="loginbox">
		<img src="techme.png" class="avatar">
		<h2>Login Here</h2>
		<form method="post" action="">
			<p>Username:</p>
			<input type="text" name="username" placeholder="Enter your username" required="">
			<!-- A tutorial based template from coding HTML - BiggiDroid
		Kindly Like Our Page
	Page = Coding HTML
	URL = www.facebook.com/biggidroid
	website = www.biggidroid.com
	Admin = www.facebook.com/haryhonix
-->
			<p>Password:</p>	
			<input type="Password" name="password" placeholder="Enter your Password" required="">
			<input type="submit" name="submit" value="Login">
		</form>
		<a href="register.php">Register Here</a><br>
		
		<!-- A tutorial based template from coding HTML - BiggiDroid
		Kindly Like Our Page
	Page = Coding HTML
	URL = www.facebook.com/biggidroid
	website = www.biggidroid.com
	Admin = www.facebook.com/haryhonix
-->
		<p class="p1">Proudly written by <a href="https://www.facebook.com/biggidroid" target="_blank">BiggiDroid</p>
	</div>
</body>
</html>