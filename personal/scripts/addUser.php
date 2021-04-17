<?php 
    require_once "core.php";
	require_once "db.php";
	require_once "User.php";
	
	$login = htmlspecialchars($_POST['username']);
	$pass = htmlspecialchars($_POST['password']);
	$fio = htmlspecialchars($_POST['fio']);
    
    try {
		if($fio == "") {
			echo "0";
		}
		else if($login == "") {
			echo "1";
		}
		else if($pass == "") {
			echo "2";
		}
		if($fio != "" && $login != "" && $pass != "") {
			addUser($_POST['fio'], $_POST['username'], $_POST['password'], $_POST['role'], $_POST['city'], $_POST['group']);
			echo "Пользователь добавлен!";
		}   
    }
    catch (Exception $ex) {
        "Error - ".$ex->getMessage();
    }
?>