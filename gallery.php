<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Ермилова</title>
		<link rel="stylesheet" href="css/gallery.css">
		<link rel="stylesheet" href="css/general.css">
		<script src="js/gallery.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
				  <li><a class="active">Галерея</a></li>
				  <li><a>Инфо</a>
					<ul>
						<li><a href="info.php">Общее</a></li>
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
		
		<div class="gallery-container">
			<div class="slide">
				<div class="divs">	</div>
				<img src="images/1.jpg">
				<div class="text">
					Милейший пингвиненок.
				</div>
			</div>
			<div class="slide">
				<div class="divs">	</div>
				<img src="images/2.jpg">
				<div class="text"> "Прежде чем взбираться по лестнице к успеху, 
					убедитесь, что она прислонена к тому зданию, которое вам нужно" <br> Стивен Кови
				</div>
			</div>
			<div class="slide">
				<div class="divs">	</div>
				<img src="images/3.jpg">
				<div class="text"> Осень.</div>
			</div>
			<div class="slide">
				<div class="divs">	</div>
				<img src="images/4.jpg">
				<div class="text"> "В театре жизни главное — буфет" <br> Геннадий Малкин	</div>
			</div>
			<div class="slide">
				<div class="divs">	</div>
				<img src="images/main.jpg">
				<div class="text"> Замечательное подсолнуховое поле </div>
			</div>	
		</div>
		
		<!-- Thumbnail images -->
		<div class="row">
			
			<div class="prev_row">
			  <a onclick="nextMiniSlide(-1)"><</a>
			</div>
			<div class="column">
			  <img src="images/1.jpg"  onclick="tapSlide(0)">
			</div>
			<div class="column">
			  <img src="images/2.jpg"  onclick="tapSlide(1)">
			</div>
			<div class="column">
			  <img src="images/3.jpg" onclick="tapSlide(2)">
			</div>
			<div class="column">
			  <img src="images/4.jpg"  onclick="tapSlide(3)">
			</div>
			<div class="column">
			  <img src="images/main.jpg" onclick="tapSlide(4)">
			</div>	

			<a class="next_row" onclick="nextMiniSlide(1)">></a>					
		</div>
		
		
		<a class="prev" onclick="nextSlide(-1)"><</a>
		<a class="next" onclick="nextSlide(1)">></a>
		
		<div class="footer">
			Ермилова Ирина, ИВТАСбд-11 <br> ermilova.irina2000@gmail.com
		</div>
	</body>
	
	<script>
		$(document).ready( function() {
			createDivs();
			nextSlide(0);
			nextMiniSlide(0);
		});
	</script>
</html>