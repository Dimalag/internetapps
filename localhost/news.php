<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- title -->
	<title>Новости</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>


	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo" >
							<a href="index.php">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="index.php">Главная</a></li>
								<li><a href="about.php">О нас</a></li>
								<li><a href="news.php">Новости</a></li>
								<li><a href="#">Наши продукты</a>
									<ul class="sub-menu">
										<li><a href="#">Преобразователь пространства</a></li>
										<li><a href="#">Визуализатор функций</a></li>
									</ul>
								</li>
								<?php
								if($_COOKIE['user'] == ''):
								?>
								<li><a href="enter.php">Вход</a></li>
								<?php else: ?>
								<li><a href="qt_php/exit.php">Привет, <?= $_COOKIE['user']?>! (Выход)</a></li>
								<?php endif; ?>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->




	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Информация о команде, её работе и окружении</p>
						<h1>Новости</h1>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="https://news.tut.by/society/702153.html?tg"><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3><a href="https://news.tut.by/society/702153.html?tg">В стране происходит непонятно что</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 29 сентября, 2020</span>
							</p>
							<p class="excerpt">Товарища нашего ключевого разработчика задержали прямо около университета.</p>
							<a href="https://news.tut.by/society/702153.html?tg" class="read-more-btn">читать далее <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="news1.php"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3><a href="news1.php">Ключевой разработчик начал стажироваться</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 15 сентября, 2020</span>
							</p>
							<p class="excerpt">Максим Р нашел стажировку - повлияет ли это на процесс создания?</p>
							<a href="news1.php" class="read-more-btn">читать далее <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="news2.php"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><a href="news2.php">Переход с Java на C++</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 01 сентября, 2020</span>
							</p>
							<p class="excerpt">Почему проект переходит на C++, и зачем первоначально мы начинали с Java.</p>
							<a href="news2.php" class="read-more-btn">читать далее <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="https://youtu.be/dQw4w9WgXcQ"><div class="latest-news-bg news-bg-5"></div></a>
						<div class="news-text-box">
							<h3><a href="https://youtu.be/dQw4w9WgXcQ">Последние слова человека, которого исключили с третьего курса</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 28 августа, 2020</span>
							</p>
							<p class="excerpt">Вы будете рыдать...</p>
							<a href="https://youtu.be/dQw4w9WgXcQ" class="read-more-btn">слушать тут <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->


	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">О нас</h2>
						<p>Команда друзей, состоящая из бездельника и полноценного человека.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Связь с нами</h2>
						<ul>
							<li>Гомель, ул. Кирова 122а, 216</li>
							<li>lagunovd@list.ru</li>
							<li>+375 44 765 9009</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Профилактика covid:</h2>
						<ul>
							<li>Тщательно мойте руки</li>
							<li>Носите маску в людных помещениях</li>
							<li>Сидите дома</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Обратная связь:</h2>
						<form id="mailForm">
							<input type="email" name="email" id="email" class="form-control" placeholder="Ваш Email"><br>
							<input type="text" name="name" id="name" class="form-control" placeholder="Ваше имя"><br>
							<textarea name="message" id="message" class="form-control" placeholder="Сообщение"></textarea><br>
							<button type="button" id="sendMail" class="btn btn-success">Отправить</button>
						</form>
						<div id="errorMess"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->

	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2020 - Векторная чертовщина,  All Rights stolen.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->

	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="assets/js/mail.js"></script>
</body>
</html>