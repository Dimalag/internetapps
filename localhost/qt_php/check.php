<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	if(mb_strlen($login) < 5 || mb_strlen($login) > 15) {
		echo "Неверный формат логина! От 5 символов.";
		exit();
	} else if(mb_strlen($name) < 2 || mb_strlen($name) > 10){
		echo "Неверный формат имени! От 2 символов.";
		exit();
	} else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 10){
		echo "Пароль должен содержать от 2 до 10 символов!";
		exit();
	}

	$pass = md5($pass."somesalt");

	$mysql = new mysqli('localhost', 'root', 'root', 'my_db');
	$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES ('$login', '$pass', '$name')");

	$mysql->close();

	header('Location: /');
?>