<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Ермилова</title>
	<link rel="shortcut icon" href="#">
	<link href="css/mainMenu.css" rel="stylesheet">
	<link href="css/addForm.css" rel="stylesheet">
	<link href="css/autoForm.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/index.js"></script>
</head>
<body id="body">

	<div id ="popupAuto">
		<div id="loginForm" class="loginForm">
			<form id="form" method="POST" action="login">
				<h1>Войти</h1> <img src="pics/index_login_close.png" alt="" onclick="closeAutoForm()"/>
				<p id='result'> </p>
				<input id="login" name="login" type="text" placeholder="Логин" autocomplete="off"/>
				<br><input id="pass" name="pass" type="password" placeholder="Пароль"/>
				<input type="hidden" name="token" value="<?= $_SESSION['token']; ?>"/>

				<br><input type="submit" id="submit" value="Ок"/>
			</form>
		</div>
	</div>
	
	<header>
		<?php if(isset($_SESSION['auth']) && $_SESSION['auth'] == true): ?>    			                
			<a href="logout"><img class="sign" src="pics/logout.png" alt="" onclick="logout()"></a>
			<a href="#"><img id="cabinet" src="pics/cabinet.png" alt="" onclick="updateUser()"></a>			
		<?php else: ?>
			<a href="#"><img class="sign" src="pics/login.png" alt="" onclick="openAutoForm()"></a>			
		<?php endif; ?>
		
		<input type="checkbox" id="menu-checkbox" />
		<nav>
			<label for="menu-checkbox" class="toggle-button" data-open="" data-close="" onclick>				
				<img id="pic" src="pics/line.png" alt="">
			</label>
		<?php if(isset($_SESSION['auth']) && $_SESSION['auth'] == true): ?>
		  <ul class="main-menu">
				<?php if((isset($_SESSION['role'])) && ($_SESSION['role'] == "ADMN")): ?> 
                    <li id="f"><a href="admin">Админ</a></li> 
                <?php endif; ?>			  
			  <li><a href="gallery">Галерея</a></li>
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
		<?php endif; ?>
		</nav>
	</header>

	<div class="hello">
		<div class="text">
			<h1> Привет! </h1>
			<p> Меня зовут <b>Ирина</b>, я студентка <b>1 курса</b>, люблю <b>вкусно поесть</b>. </p>
		</div>
			<div class="pic"> <img src="pics/taurus.png" alt=""/> </div>		
	</div>
	
	<div class="shadow" id="shadow">
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
		<?php if(!isset($_SESSION['auth']) && $_SESSION['auth'] != true): ?>		
		<div class="btn">
			<a class="btn" onclick="openAutoForm()"> Узнать больше </a>
		</div>
		<?php endif; ?>
	</div>
	
	<div id ="popup">
		<div class="UserForm">
			<form id="UserForm">
				<img src="pics/index_login_close.png" alt="" onclick="closeCabinet()">
				<br><br><br><br><br>
				<p id="warn"> </p>
				<input id="fio" name="fio" type="text" placeholder="ФИО" autocomplete="off">
				<br><input id="username" name="username" type="text" placeholder="Логин" autocomplete="off">
				<br><input id="password" name="password" type="text" placeholder="Пароль" autocomplete="off">
				<br><input id="city" name="city" type="text" placeholder="Город" autocomplete="off"> 
				<br><input id="group" name="group" type="text" placeholder="Группа" autocomplete="off">
				<br><input id="id" name="id" type="hidden" autocomplete="off" value="<?= $_SESSION['id']; ?>">
				
				<input type='submit' id='submitUpdate' value='ОК' onclick='update()'/>				
			</form>
		</div>
	</div>

</body>
</html>

<script>
	$("#form").submit(function(e) {
		e.preventDefault();

		var form = $(this);
		
		$.ajax({
			   type: "POST",
			   url: 'login',
			   data: form.serialize(),
			   success: function(data)
			   {
					if (data == -1) {
						document.getElementById('result').innerHTML = "Пользователь не зарегистрирован";	
					}
					else if (data == 0) {
						document.getElementById('result').innerHTML = "Неправильно введен логин или пароль.";	
					}
					else {
						window.location = data;
					}
			   }
			 });			
	});
</script>