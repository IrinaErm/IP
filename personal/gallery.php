<?php 
	session_start();
    if (!isset($_SESSION['auth']) || ($_SESSION['auth'] != "true")) {
        $_SESSION['url'] = "gallery";
        header("Location: /personal");
    }
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Ермилова</title>
		<link rel="stylesheet" href="css/gallery.css">
		<link rel="stylesheet" href="css/mainMenu.css">
		<script src="js/gallery.js"></script>
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
				  <li><a class="active">Галерея</a></li>
				  <li><a>Инфо</a>
					<ul>
						<li><a href="info">Общее</a></li>
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
		
		<div class="gallery-container">
			<div class="slide">
				<div class="divs"> <img src="pics/1.jpg" alt="">	</div>
			</div>
			<div class="slide">
				<div class="divs">	<img src="pics/2.jpg" alt=""> </div>
			</div>
			<div class="slide">
				<div class="divs"> <img src="pics/3.jpg" alt=""> </div>								
			</div>
			<div class="slide">
				<div class="divs"> <img src="pics/4.jpg" alt="">	</div>								
			</div>
			<div class="slide">			
				<div class="divs"> <img src="pics/5.jpg" alt="">	</div>			
			</div>	
		</div>

		<!-- Thumbnail images -->
		<div class="row">			
			<div class="prev_row">
			  <a onclick="nextMiniSlide(-1)"> &lt; </a>
			</div>
			<div class="column">
			  <img src="pics/1.jpg" alt="" onclick="tapSlide(0)">
			</div>
			<div class="column">
			  <img src="pics/2.jpg" alt="" onclick="tapSlide(1)">
			</div>
			<div class="column">
			  <img src="pics/3.jpg" alt="" onclick="tapSlide(2)">
			</div>
			<div class="column">
			  <img src="pics/4.jpg" alt="" onclick="tapSlide(3)">
			</div>
			<div class="column">
			  <img src="pics/5.jpg" alt="" onclick="tapSlide(4)">
			</div>	

			<a class="next_row" onclick="nextMiniSlide(1)"> > </a>					
		</div>	
		
		<a class="prev" onclick="nextSlide(-1)"> &lt; </a>
		<a class="next" onclick="nextSlide(1)"> > </a>
		
		<div class="footer">
			<p> Ермилова Ирина, ИВТАСбд-11 <br> ermilova.irina2000@gmail.com </p>
		</div>
	</body>
</html>	

<script>
	$(document).ready( function() {
		createDivs();
		nextSlide(0);
		nextMiniSlide(0);
	});
</script>
