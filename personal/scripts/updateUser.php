<?php
    require_once "core.php";
	require_once "db.php";
	require_once "User.php";
	
	$fio = htmlspecialchars($_POST['fio']);
	$login = htmlspecialchars($_POST['username']);
    
    try {
		if($_POST['get'] == "true") {
			$obj = getUserById($_POST['id']);
			$data= json_encode($obj);
			echo $data;
		}
		else if($_POST['get'] == "false") {
			if($fio == "") {
				echo "0";
			}
			else if($login == "") {
				echo "1";
			}
			else {
				updateUser($_POST['id'], $_POST['fio'], $_POST['username'], $_POST['password'], $_POST['role'], $_POST['city'], $_POST['group']);
				echo "Success";
			}			
		}   
    }
    catch (Exception $ex) {
        "Error - ".$ex->getMessage();
    }
?>