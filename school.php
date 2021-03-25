<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Ермилова</title>
		<link rel="stylesheet" href="css/school.css">
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
						<li><a href="info.php">Общее</a></li>
						<li><a class="active">Школа</a></li>
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

		<div class="container">
			<div class="child nav">
			<div class = "fix">
				<h3><a href="#top">Навигация</a></h3>
				
				<ul>
				  <li><a href="#scho">О школе</a></li>
				  <li><a href="#subj">Любимые предметы</a></li>
					  <ul>
						  <li><a href="#math">Математика</a></li>
						  <li><a href="#angl">Английский язык</a></li>
						</ul>
				  <li><a href="#itog">Итоги</a></li>
				</ul>
			</div>			
			</div>  
			<div class="child txt">
				<h1>Школа</h1>
				<div class="content">
					<h3 id="scho"> О школе </h3>
					<p>Миссия муниципального бюджетного общеобразовательного учреждения города Ульяновска «Средняя школа №28»:
					<br>«Формирование физически и нравственно здоровой, интеллектуально развитой, социально-адаптивной личности ученика». 
					<br>«Средняя школа №28" построено в 1964 году, расположена по адресу: <br> улица Пархоменко дом №98/8</p>
					<img src="images/s1.jpg">
				</div>
				<div class="content-2">
					<div class="content2">
						<h3 id="subj"> Любимые предметы </h3>					
						<div class="content2">
							<h4 id="angl"> Английский язык </h4>
							<img src="images/s2.jpg">
							<p>Английский язык – один из наиболее распространённых в мире. Каждый пятый человек в мире говорит или, 
							по крайней мере, понимает английский.<br>На английском языке написаны некоторые из величайших произведений 
							мировой литературы.<br>Английский язык помогает лучше понять поп-культуру.</p>
						</div>
						<div class="content2">
							<h4 id="math"> Математика </h4>
							<img src="images/s3.jpg">
							<p> Математика очень важная наука, которая используется во многих сферах нашей жизни: начиная от 
							бытовых задач и заканчивая всевозможными делами, решающимися на работе. Эта наука позволяет развивать 
							гибкость ума, что нужно для принятия объективного решения любой задачи.</p>	
						</div>						
					</div>
				</div>
				<div class="content">
					<h3 id="itog"> Итоги </h3>
					<p> Школьные годы, пожалуй, самое лучшее время
					в жизни любого человека. Помимо уроков, оно наполнено яркими событиями, интересными встречами и общением с друзьями. 
					Это время, когда в каждом ребенке раскрываются новые способности и таланты.
					Особенно понимаешь прелесть школьных лет по происшествии времени, 
					а с годами воспоминания о школе становятся просто очень дорогими сердцу. </p>
					<img src="images/s4.jpg">
				</div>				
			</div> 
		</div>
		
		<div class="footer">
			Ермилова Ирина, ИВТАСбд-11 <br> ermilova.irina2000@gmail.com
		</div>
	</body>
</html>