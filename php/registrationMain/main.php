<?php
	require "lib.php";
?>
<?php if(isset($_SESSION['logged_user'])) : ?>
	Авторизован!<br>
	<a href="logout.php">Log out</a>
<?php else: ?>
	<a href="reg-form.php">Registration</a><br>
	<a href="auth-form.php">Authorization</a>
<?php endif; ?>