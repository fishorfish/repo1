<?php

	require "lib.php";

	$post = $_POST;
	$user = trim($post['user']);
	$pass = $post['pass'];
	$operation = $post['operation'];
	$errors = array();

	if($user == '') {
		$errors[] = 'Enter login';
	}
	if($pass == '') {
		$errors[] = 'Enter password';
	}

	if($operation == "authorization") {
		if(empty($errors)) {
			$str = is_username_in_file($user);
			if(empty($str)) {
				echo '<div style="color: red;">'."This user is not exist".'</div><hr>';
			}else {
				//echo $str[1];
				
				if (password_verify($pass, $str[1])){ 
					$_SESSION['logged_user'] = $user;
            		echo '<div style="color: green;">Authorization succes</div><hr>';
        		}else {
        			echo '<div style="color: red;">'."Uncorrect password!".'</div><hr>';
        		}
			}
		} else {
			echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
		}
	}else if($operation == "register") {

		$data = file_get_contents('data.txt');
		if(preg_match('/login='."$user".'/', $data)) {
			$errors[] = 'This login is already taken';
		}

		if(empty($errors)) {
			$hash_pass = password_hash($pass, PASSWORD_DEFAULT);
			$pair = $user.";".$hash_pass.PHP_EOL;
			file_put_contents('data.txt', "$pair", FILE_APPEND);
			echo '<div style="color: green;">Registration succes</div><hr>';
		} else {
			echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
		}
	}else {
		echo '<div style="color: red;">'."Operation not supported".'</div><hr>';
	}
