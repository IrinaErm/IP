<?php 
    require_once "core.php";
	require_once "db.php";
	require_once "User.php";
    
    try {
        if (isset($_POST['id'])) deleteUser((int)$_POST['id']);

        echo "Успех!";
    }
    catch (Exception $ex) {
        "Error - ".$ex->getMessage();
    }
?>