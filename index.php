<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Сайт-портфолио веб-разработчика">
	<meta name="keywords" content="портфолио, сайт, разработка сайтов, Разина Элина">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Сайт-портфолио Элины Разиной</title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->

	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">-->

	<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
	<!--<link rel="stylesheet" href="/resources/demos/style.css">-->
	<!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->

	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css">



</head>
<body>
	<div class = "wrap">
		<header>
			<img class="logo pad-left" src="img/portfolio.bmp" alt="Логотип сайта"/>
			<nav class="nav nav-inline">
				<a class="nav-link active" href="#about">Обо мне</a>
				<a class="nav-link" href="#portfolio">Портфолио</a>
				<a class="nav-link" href="#contacts">Контакты</a>
			</nav>
		</header>
	</div>

	<!--слайдер-->
	<div id ="slider">
		<img src="img/slider9.png" id="slider-image" alt="слайдер">
	</div>
<div class = "wrap">
	<section id="about-section">
		<h2 id = "about">Обо мне</h2>
		<div id="image">
			<img src="img/me.png" alt = "Разина Элина" id="me">
		</div>
		<div id = "info">
			<h3>Мои знания и навыки:</h3>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#panel1">Языки программирования</a></li>
				<li><a data-toggle="tab" href="#panel2">Дополнительные знания</a></li>
				<li><a data-toggle="tab" href="#panel3">Репозиторий</a></li>
				<li><a data-toggle="tab" href="#panel4">Образование</a></li>
				<li><a data-toggle="tab" href="#panel5">Мое резюме</a></li>
			</ul>

			<div class="tab-content">
		<div id="panel1" class="tab-pane fade in active">
			<h3>Мои навыки</h3>
			HTML5
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
					<span class="sr-only">80% Complete (success)</span>
				</div>
			</div>
			CSS3
			<div class="progress">
				<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
					<span class="sr-only">20% Complete</span>
				</div>
			</div>
			JavaScript
			<div class="progress">
				<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
					<span class="sr-only">60% Complete (warning)</span>
				</div>
			</div>
			PHP
			<div class="progress">
				<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
					<span class="sr-only">80% Complete</span>
			</div>
		</div>
	</div>
	<div id="panel2" class="tab-pane fade">
		<h3>Дополнительные знания и навыки</h3>
		<span class="label label-pill label-primary">Английский язык в совершенстве</span>
		<span class="label label-pill label-success">AJAX</span>
		<span class="label label-pill label-info">MySQL</span>
		<span class="label label-pill label-warning">AdobePhotoshop</span>
		<span class="label label-pill label-danger">PHPStorm</span>
		<span class="label label-primary">CMS Wordpress</span>
		<span class="label label-pill label-success">Git</span>
		<span class="label label-pill label-warning">JQuery</span>
		<span class="label label-pill label-danger">Bootstrap</span>
		<span class="label label-pill label-danger">Ruby on Rails</span>
	</div>
	<div id="panel3" class="tab-pane fade">
		<h3>Ссылка на репозиторий:</h3>
		<a href="https://github.com/ERazina/">www.github.com/Erazina</a>
	</div>
	<div id="panel4" class="tab-pane fade">
		<h3>Мое образование</h3>
		<p>2017 - магистратура - Российский Политехнический Университет им. Петра Великого</p>
	</div>
	<div id="panel5" class="tab-pane fade">
		<h3>Мое резюме</h3>
		<a href="documents/resume.pdf" download>Скачать резюме</a>
	</div>
</div>
</div>


</section>
	<div class="container">
		<div id="portfolio" class="pad-left pad-right">
			<h2>Мое портфолио</h2>
			<div class = "portfolio_works">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="thumbnail">
						<div class="gallery">
							<div class = "image_block">
								<a href="img/biz2.jpg"><img src="img/biz2.jpg" width="100%" height="100" alt="Пример"></a>
							</div>
						</div>
					<div class="caption">
						<h3>Бизнес с 0</h3>
						<p>Технологии</p>
						<span class="label label-pill label-primary">HTML</span>
						<span class="label label-pill label-success">CSS</span>
						<span class="label label-pill label-warning">AdobePhotoshop</span>
					</div>
					</div>
				</div>

			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="thumbnail">
					<div class="gallery">
						<div class = "image_block">
						<a href="img/simplify.jpg"><img src="img/simplify.jpg" width="150%" height="100" alt="Пример"></a>
						</div>
					</div>
					<div class="caption">
						<h3>Страница-визитка сайта "Simplify the growth"</h3>
						<p>Технологии</p>
						<span class="label label-pill label-primary">HTML</span>
						<span class="label label-pill label-success">CSS</span>
						<span class="label label-pill label-warning">AdobePhotoshop</span>

					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="thumbnail">
					<div class="gallery">
						<div class = "image_block">
							<a href="img/veeam.jpg"><img src="img/veeam.jpg" width="100%" height="100" alt="Мокап сайта Veeam Software"></a>
						</div>
					</div>
					<div class="caption">
						<h3>Лэндинг-пейдж Veeam Software</h3>
						<a href = "http://www.erazina.info/veeam/index.html">Посмотреть сайт</a>
						<p>Технологии</p>
						<span class="label label-pill label-primary">HTML</span>
						<span class="label label-pill label-success">CSS</span>
						<span class="label label-pill label-danger">Adobe Photoshop</span>
						<span class="label label-pill label-warning">Bootstrap</span>

					</div>
				</div>
			</div>

		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="thumbnail">
					<div class="gallery">
						<div class = "image_block">
							<a href="img/yoga.png"><img src="img/yoga.png" width="100%" height="100" alt="Портал школы йоги">
							</a>
						</div>
					</div>
					<div class="caption">
						<h3>Портал школы йоги</h3>
						<p>Технологии</p>
						<span class="label label-pill label-primary">HTML</span>
						<span class="label label-pill label-success">CSS</span>
						<span class="label label-pill label-danger">PHP</span>
						<span class="label label-pill label-warning">AdobePhotoshop</span>

					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="thumbnail">
					<div class="gallery">
						<div class = "image_block">
						<a href="img/responsive.png"><img src="img/responsive.png" width="100%" height="100" alt="Пример"></a>
						</div>
					</div>
					<div class="caption">
						<h3>Сайт "Responsive-Design"</h3>
						<p>Технологии</p>
						<span class="label label-pill label-primary">HTML</span>
						<span class="label label-pill label-success">CSS</span>
						<span class="label label-pill label-warning">AdobePhotoshop</span>

					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="thumbnail">
					<div class="gallery">
						<div class = "image_block">
						<a href="img/hotel.png"><img src="img/hotel.png" width="100%" height="100" alt="Пример"></a>
						</div>
					</div>
					<div class="caption">
						<h3>Портал отеля</h3>
						<p>Технологии</p>
						<span class="label label-pill label-primary">HTML</span>
						<span class="label label-pill label-success">CSS</span>
						<span class="label label-pill label-warning">AdobePhotoshop</span>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="thumbnail">
						<div class="gallery">
							<div class = "image_block">
								<a href="img/dr-rasin.png"><img src="img/dr-rasin.png" width="100%" height="100" alt="Пример"></a>
							</div>
						</div>
						<div class="caption">
							<h3>Сайт Доктора Александра Разина</h3>
							<a href = "http://www.dr-alexander-rasin.de">Посмотреть сайт</a>
							<p>Технологии</p>
							<span class="label label-pill label-primary">HTML</span>
							<span class="label label-pill label-success">CSS</span>
							<span class="label label-pill label-danger">PHP</span>
							<span class="label label-pill label-warning">WordPress</span>

						</div>
					</div>
				</div>
		</div>
	</div>
</div>
</div>
		</div>
<!-- 	<section id = "contacts">
		<h2>Контакты</h2>
		<div id = "contact_info_main">
				<p>Телефон: 8-950-016-50-37</p>
				<p><a href="mailto:razina_elina@mail.ru">Отправить письмо</a></p>
				<p>Skype: elina_razina</p>
		</div>
				<form method="post" name="contact-form" action="db.php">
					<p><textarea rows="10" cols="70" name="text" required></textarea></p>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">Имя</span>
						<input type="text" class="form-control" aria-describedby="basic-addon1" required>
					</div>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">Телефон</span>
						<input type="text" class="form-control" aria-describedby="basic-addon1" required>
					</div>
					<p><input type="submit" value="Отправить" id = "submit"></p>
				</form>
		</section> -->
</div>
<?php
include_once ("footer.html");
?>