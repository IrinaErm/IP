<?php require_once "core.php" ?>
<?php require_once "User.php" ?>
<?php
	$login = htmlspecialchars($_POST['login']);
	$pass = htmlspecialchars($_POST['pass']);
	
	if($login != "" && $pass != "") {
		if(checkUser($login, $pass) == true) {
			$obj = getUser($login, $pass);
			if($obj == null) {
				echo "0";
			}
			else {
				$_SESSION['auth'] = true;
				$_SESSION['login'] = $obj->login;
				$_SESSION['role'] = $obj->role;
				$_SESSION['id'] = $obj->id;
				
				if(isset($_SESSION['url'])) {
					echo ("/personal/".$_SESSION['url']);
				} 
				else {
					echo ("/personal");
				}
			}				
		}	
		else {
			echo "0";
		}
	}
	else {
		echo "0";
	}
?>