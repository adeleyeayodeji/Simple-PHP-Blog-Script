<!DOCTYPE html>
<html>
<head>
	<title>
		Register Page
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
<style type="text/css">
	.loginbox{
		height: 500px;
	}
</style>
</head>
<body>
	<div class="loginbox">
		<img src="techme.png" class="avatar">
		<h2>Register</h2>
		<form method="post" action="insert.php">
			<p>First Name:</p>
			<input type="text" name="first" placeholder="Enter your firstname" required="">
			<p>Last Name:</p>
			<input type="text" name="last" placeholder="Enter your lastname" required="">
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
			<input type="submit" value="Register">
		</form>
		<a href="login.php">Login Here</a><br>
		
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