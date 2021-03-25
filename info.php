<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Ермилова</title>
		<link rel="stylesheet" href="css/info.css">
		<link rel="stylesheet" href="css/general.css">
	</head>
	
	<body>
		<header>
			<a href="index.php"><img id="home" src="images/home.png"></a>
			<a href="#"><img id="sign" src="images/logout.png"></a>
			<input type="checkbox" id="menu-checkbox" />
			<nav role="navigation">
			  <label for="menu-checkbox" class="toggle-button" data-open="" data-close="" onclick> <img id="pic" src="images/line.png" for="menu-checkbox" class="toggle-button" data-open="" data-close="" onclick> </label>
			  <ul class="main-menu">
				  <li id="f"><a href="admin.php">Админ</a></li>
				  <li><a href="gallery.php">Галерея</a></li>
				  <li><a class="active">Инфо</a>
					<ul>
						<li><a class="active">Общее</a></li>
						<li><a href="school.php">Школа</a></li>
						<li><a href="uni.php">ВУЗ</a></li>
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
					<div id="img"> <img src="images/me.jpg">  </div>											
				</div>
				<div class="main">
					<p> Меня зовут Ермилова Ирина Анатольевна. Я родилась в Ульяновске. </p> 
					<p> Окончила МБОУ СОШ №28. Поступила в Ульяновский Государственный Технический Университет на направление "Информатика и вычислительная техника".</p>
					<p> Как и многие, люблю читать, особенно романы и научно-популярную литературу, смотреть фильмы и сериалы.
						Есть традиция каждый Новый Год пересматривать все части "Гарри Поттера". Не могу назвать себя обожателем
						активного образа жизни, но, как правило, получаю удовольствие от прогулок с родными и друзьями, плавания,
						катания на велосипеде/коньках/лыжах.</p>
				</div>
			</div>
		</div>	
		
		<div class="footer">
			Ермилова Ирина, ИВТАСбд-11 <br> ermilova.irina2000@gmail.com
		</div>
	</body>
</html>