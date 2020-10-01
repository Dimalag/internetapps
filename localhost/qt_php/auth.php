<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


	$pass = md5($pass."somesalt");

	$mysql = new mysqli('localhost', 'root', 'root', 'my_db');

	$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
	$user = $result->fetch_assoc();
	if(count($user) == 0){
		echo "Проверьте логин и/или пароль!";
		exit();
	}


	setcookie('user', $user['name'], time() + 1800, "/");

	$mysql->close();

	header('Location: /');
?>