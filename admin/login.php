<?php include 'include/header.php'; ?>
<?php 

	if (isset($_POST["login"])) {
		
		
		$username = $_POST["username"];
		$password = md5($_POST["password"]);
		$query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password'  ") or die();
		if (!$row = $query -> fetch_assoc()) {
			$message = "<p style='background:red;color:white;font-weight:bold;text-align:center;'>Admin not found, Try again</p>";
		}else{
			session_start();
			$user = $row["first"]." ".$row["last"];
			$name = $row['username'];
			$_SESSION['admin'] = $name;
			$_SESSION["user"] = $user;
			header("location: index.php");
		}

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
</style>
 	<form method="post" action="">
 		<h2>Admin Login</h2>
 		<input type="text" name="username">
 		<?php if (isset($_POST["login"])) {
 			echo $message;
 		} ?>
 		<input type="password" name="password">
 		<input type="submit" name="login" value="Login">
 	</form>
<?php include 'include/footer.php'; ?>