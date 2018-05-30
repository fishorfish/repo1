<?php session_start();
	require "lib.php";
	unset($_SESSION['logged_user']);
	header('Location: /');
?>