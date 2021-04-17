<?php
	session_start();
    if (!isset($_SESSION['auth']) || ($_SESSION['auth'] != true) || ($_SESSION['role'] != 'ADMN')) {
        $_SESSION['url'] = "admin";
        header("Location: /personal");
    }
	
	require_once "scripts/core.php";
	require_once "scripts/db.php";
	require_once "scripts/User.php";

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Ермилова</title>
	<link href="css/admin.css" rel="stylesheet">
	<link href="css/mainMenu.css" rel="stylesheet">
	<link href="css/addForm.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/admin.js"></script>
</head>
<body id="body">

	<header>
			<a href="/personal"><img id="home" src="pics/home.png" alt=""></a>
			<a href="logout"><img class="sign" src="pics/logout.png" alt="" onclick="logout()"></a>
			<input type="checkbox" id="menu-checkbox" />
			<nav>
			  <label for="menu-checkbox" class="toggle-button" data-open="" data-close="" onclick> <img id="pic" src="pics/line.png" alt=""> </label>
			  <ul class="main-menu">
				  <li id="f"><a class="active">Админ</a></li>
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
			</nav>
		</header>
	
	<div class="container" id="container">
		<div class="userTable">
			<table>
				<tr>
					<th>ФИО</th>
					<th>Логин</th>
					<th>Роль</th>
					<th>Город</th>
					<th>Группа</th>
					<th class="but"></th>
					<th class="but"></th>
				</tr>
				<?php 
					$users = getUsers();

					while($user = $users->fetch_array())
					{
						$rows[] = $user;
					}

					foreach($rows as $row) { 
						echo "<tr>";
							echo "<td class=\"fiotd\">".$row['fio']."</td>";
							echo "<td>".$row['login']."</td>";
							echo "<td>".$row['role']."</td>";
							echo "<td>".$row['city']."</td>";
							echo "<td class=\"last\">".$row['studyGroup']."</td>";
							echo "<td class=\"but\"> <img src=\"pics/index_login_close.png\" alt=\"\" onclick=\"deleteUser(".$row['id'].")\">  </td>";
							echo "<td class=\"but\"> <img id=\"update\" src=\"pics/admin_update.png\" alt=\"\" onclick=\"updateUser(".$row['id'].")\">  </td>"; //onclick=\"updateUser(".$row['id'].")\">
						echo "</tr>";
					}                     
				?>                        
			</table>
			<br> <br>
			<button onclick="showUserForm()" id="addButton">Добавить пользователя</button>
		</div>
		
		<div id ="popup">
			<div class="UserForm">
				<form id="UserForm">
					<img src="pics/index_login_close.png" alt="" onclick="closeForm()">
					<br><br><br>
					<p id="warn"> </p>
					<input id="fio" name="fio" type="text" placeholder="ФИО" autocomplete="off">
					<br><input id="username" name="username" type="text" placeholder="Логин" autocomplete="off">
					<br><input id="password" name="password" type="text" placeholder="Пароль" autocomplete="off">
					<?php 
						$roles = getRoles();
						while($role = $roles->fetch_array())
						{
							$rows[] = $role;
						}
						 
						echo "<select id=\"role\" name=\"role\">";
						foreach($rows as $val) {
							if($val['r'] != null) {
								echo "<option value=".$val['r'].">".$val['r']."</option>";
							}							
						}
						echo "</select>";
					?>
					<br><input id="city" name="city" type="text" placeholder="Город" autocomplete="off"> 
					<br><input id="group" name="group" type="text" placeholder="Группа" autocomplete="off">
					<br><input id="id" name="id" type="hidden" autocomplete="off">
					
					<div id="addbut"> </div>
					
				</form>
			</div>
		</div>		
	</div>

</body>
</html>