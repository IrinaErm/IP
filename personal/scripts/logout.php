<?php
    session_start();
	unset($SESSION['auth']);
	session_unset();
	header("Location: /personal");  
?>