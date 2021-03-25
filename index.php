<!DOCTYPE html>
<html lang="rus">
<head>
	<meta charset="utf-8">
	<title>Ермилова</title>
	<link rel="shortcut icon" href="#">
	<link href="css/index.css" rel="stylesheet">
	<link href="css/general.css" rel="stylesheet">
	<script src="js/index.js"></script>
</head>
<body id="body">

	<div id ="popup">
		<div id="loginForm" class="loginForm">
			<form id="form" method="POST" action="login">
				<h1>Войти:</h1> <img src="images/index_login_close.png" onclick="closeForm()">

				<input id="username" name="username" type="text" placeholder="Логин" autocomplete="off">
				<br><input id="password" name="password" type="password" placeholder="Пароль">
				<input type="hidden" name="token" value="<?= $_SESSION['token']; ?>">

				<br><input type="submit" id="submit" value="Ок">
				<br><a class="btn" onclick="registr()"> Зарегистрироваться </a>
			</form>
		</div>
	</div>
	
	<div id="picture">
		<img src="images/main.jpg"> 
	</div>
	
	<header>
		
		<a href="#"><img id="sign" src="images/logout.png" onclick="openForm()"></a>
		<input type="checkbox" id="menu-checkbox" />
		<nav role="navigation">
		  <label for="menu-checkbox" class="toggle-button" data-open="" data-close="" onclick> <img id="pic" src="images/line.png" for="menu-checkbox" class="toggle-button" data-open="" data-close="" onclick> </label>
		  <ul class="main-menu">
			  <li id="f"><a href="admin.php">Админ</a></li>
			  <li><a href="gallery.php">Галерея</a></li>
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
	
	<div class="shadow">
		<div class = "middle">
			<ul>
			  <li>
				<article>
				  <h6> <a>Биографические факты</a> </h6>
				  <p>Некоторые факты обо мне и моих увлечениях.</p>
				</article>
			  </li>
			  <li>
				<article>
				  <h6> <a>Школьные годы</a> </h6>
				  <p>Немного об обучении в школе.</p>
				</article>
			  </li>
			  <li>
				<article>
				  <h6> <a>Лабораторные работы</a> </h6>
				  <p>Лабораторные работы по математической логике и дискретной математике.</p>
				</article>
			  </li>
			</ul>
		</div>	
		<a class="btn" onclick="openForm()"> Узнать больше </a>	
	</div>
	
	<div class="footer">
		Ермилова Ирина, ИВТАСбд-11 <br> ermilova.irina2000@gmail.com
	</div>

</body>
</html>