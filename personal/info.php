<?php 
	session_start();
    if (!isset($_SESSION['auth']) || ($_SESSION['auth'] != "true")) {
        $_SESSION['url'] = "info";
        header("Location: /personal");
    }
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&family=Ruslan+Display&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
		<title>Ермилова</title>
		<link rel="stylesheet" href="css/info.css">
		<link rel="stylesheet" href="css/mainMenu.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>
	
	<body id="body">
		<header>
			<a href="/personal"><img id="home" src="pics/home.png" alt=""></a>
			<a href="logout"><img class="sign" src="pics/logout.png" alt="" onclick="logout()"></a>
			<input type="checkbox" id="menu-checkbox" />
			<nav>
			  <label for="menu-checkbox" class="toggle-button" data-open="" data-close="" onclick> <img id="pic" src="pics/line.png" alt=""> </label>
			  <ul class="main-menu">
					<?php if((isset($_SESSION['role'])) && ($_SESSION['role'] == "ADMN")): ?> 
						<li id="f"><a href="admin">Админ</a></li> 
					<?php endif; ?>
				  <li><a href="gallery">Галерея</a></li>
				  <li><a class="active">Инфо</a>
					<ul>
						<li><a class="active">Общее</a></li>
						<li><a href="school">Школа</a></li>
						<li><a href="uni">ВУЗ</a></li>
					</ul>
				  </li>
				  <li><a>Работы</a>
					<ul>
						<li><a target="_blank" href="math/lab1/index.html">Лаб 1</a></li>
						<li><a target="_blank" href="math/lab2/index.html">Лаб 2</a></li>
						<li><a target="_blank" href="math/lab3/index.html">Лаб 3</a></li>
						<li><a target="_blank" href="math/lab4/index.html">Лаб 4</a></li>
						<li><a target="_blank" href="math/lab5/index.html">Лаб 5</a></li>
					</ul>
				  </li>
				</ul>
			</nav>
		</header>
	
		<div class="content-container">
			<div class="text">
				<div class="center">
					<p> Фамилия: Ермилова <br> Имя: Ирина <br> Отчество: Анатольевна <br> Цвет глаз: карий <br>
						Рост: 175 см <br> Кратко о себе: сладкоежка </p>
						<div id="img"> <img id="a" src="pics/me.jpg" alt=""/> </div>
				</div>
				<div class="main">
					<p> Меня зовут Ермилова Ирина Анатольевна. Я родилась в Ульяновске. </p> 
					<p> Окончила МБОУ СОШ №28. Поступила в Ульяновский Государственный Технический Университет на направление "Информатика и вычислительная техника".</p>
					<p> Как и многие, люблю читать, особенно романы и научно-популярную литературу, смотреть фильмы и сериалы.
						Есть традиция каждый Новый Год пересматривать все части "Гарри Поттера". Получаю удовольствие от прогулок с родными и друзьями, плавания,
						катания на велосипеде/коньках/лыжах.</p>
				</div>
			</div>
		</div>	
		
		<div class="footer">
			<p> Ермилова Ирина, ИВТАСбд-11 <br> ermilova.irina2000@gmail.com </p>
		</div>
	</body>
</html>