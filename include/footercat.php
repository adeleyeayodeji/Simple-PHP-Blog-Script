
	<div class="footer">
		<p>Copyright &copy; 2019 BiggiDroid Team - <a style="color: white;text-decoration: none;" href="https://www.adeleyeayodeji.com">Adeleye Ayodeji</a> | <a style="color: white;text-decoration: none;" href="../admin/">Admin Panel</a></p>
	</div>
</div>
	<?php if (isset($_SESSION["admin"])) { ?>
<a href="../admin/logout.php" class="float" target="_blank">
<i class="fa fa-sign-out my-float"></i>
</a><?php
}; ?>

</body>
</html>