<?php
session_start();
session_destroy();
header("location:  {$_SERVER['HTTP_REFERER']}");

?>