<?php 
	session_start();
    if (!isset($_SESSION['auth']) || ($_SESSION['auth'] != "true")) {
        $_SESSION['url'] = "school";
        header("Location: /personal");
    }
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Ермилова</title>
		<link rel="stylesheet" href="css/school.css">
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
						<li><a href="info">Общее</a></li>
						<li><a class="active">Школа</a></li>
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

		<div class="container">
			<div class="txt">
				<h1>Школа</h1>
				<div class="shadow" id="shadow">
					<div class = "middle">
						<ul>
						  <li class="one">
							<img src="pics/s1.png" alt="">
						  </li>
						  <li class="two">
							<h3 id="scho"> О школе </h3>
						  </li>
						  <li class="three">
							<p> Миссия муниципального бюджетного общеобразовательного учреждения города Ульяновска <b> «Средняя школа №28» </b>:
							«Формирование физически и нравственно <b> здоровой </b>, интеллектуально <b> развитой </b>, социально-адаптивной личности ученика». 
							«Средняя школа №28" построено в 1964 году, расположена по адресу: улица Пархоменко дом №98/8 </p>
						  </li>
						</ul>		
					</div>	
					<div class = "middle">
						<ul>
						  <li class="one">
							<img src="pics/s2.png" alt="">
						  </li>
						  <li class="two">
							<h3 id="subj"> Любимые <br> предметы </h3>
						  </li>
						  <li class="three">
							<p> <b> Английский язык </b> – один из наиболее распространённых в мире. Каждый пятый человек в мире говорит или, 
							по крайней мере, понимает английский. На английском языке написаны некоторые из <b> величайших произведений </b>
							мировой литературы. Английский язык помогает лучше <b> понять </b> поп-культуру.</p>					
							<p> <b> Математика </b> очень важная наука, которая используется во многих сферах нашей жизни: начиная от 
							бытовых задач и заканчивая всевозможными делами, решающимися на работе. Эта <b> наука </b> позволяет развивать 
							гибкость ума, что нужно для принятия <b> объективного решения </b> любой задачи.</p>
						  </li>
						</ul>		
					</div>
					<div class = "middle">
						<ul>
						  <li class="one">
							<img src="pics/s3.png" alt="">
						  </li>
						  <li class="two">
							<h3 id="itog"> Итоги </h3>
						  </li>
						  <li class="three">
							<p> Школьные годы, пожалуй, самое <b>лучшее время</b>
							в жизни любого человека. Помимо уроков, оно наполнено <b>яркими</b> событиями, интересными встречами и общением с друзьями. 
							Это время, когда в каждом ребенке раскрываются новые <b>способности и таланты</b>.
							Особенно понимаешь прелесть школьных лет по происшествии времени, 
							а с годами воспоминания о школе становятся просто очень <b>дорогими сердцу</b>. </p>
						  </li>
						</ul>		
					</div>
				</div>		
			</div> 
		</div>
		
		<div class="footer">
			<p> Ермилова Ирина, ИВТАСбд-11 <br> ermilova.irina2000@gmail.com </p>
		</div>
	</body>
</html>

<script>
	$(document).ready( function() {
		$('.content').animate({'width':'90%'}, 1000);
	});
</script>