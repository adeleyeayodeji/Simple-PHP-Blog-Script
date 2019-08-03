<?php
	include '../include/db.php';
	$first = $_POST['first'];
	$last = $_POST['last'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysqli_query($con, "INSERT INTO user(first, last, username, password) VALUES('$first', '$last', '$username', '$password') ") or die();
	if ($query) {
		header("location: login.php");
	}
	else{
		echo "error";
	}

?>