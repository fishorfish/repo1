<?php
	$user = trim($_POST['user']);
	$pass = $_POST['pass'];
	$operation = $_POST['operation'];
	$errors = array();
	if ($user == '') {
		$errors[] = 'Enter login';
	}
	if ($pass == '') {
		$errors[] = 'Enter password';
	}

	$data = file_get_contents('data.txt');
	if (preg_match('/login='."$user".'/', $data)) {
		$errors[] = 'This login is already taken';
	}

	if (empty($errors)) {
		$hash_pass = password_hash($pass, PASSWORD_DEFAULT);
		$pair = 'login='.$user.'&pass='.$hash_pass.PHP_EOL;
		file_put_contents('data.txt', "$pair", FILE_APPEND);
		echo '<div style="color: green;">Registration succes</div><hr>';
	} else {
		echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
	}
?>