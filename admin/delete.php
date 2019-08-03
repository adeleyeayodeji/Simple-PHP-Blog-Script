<?php
$con = mysqli_connect("localhost", "root", "", "blog") or die();
$id = $_GET['id'];
mysqli_query($con, "DELETE FROM post WHERE id='$id' ");
mysqli_query($con, "DELETE FROM comment WHERE postid='$id' ");
echo "<script>window.location.href='javascript:history.go(-1)'</script>";
?>