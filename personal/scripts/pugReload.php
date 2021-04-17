<?php
    session_start();
    if(isset($_POST['offset'])) {       
        $_SESSION['offset'] = (int)$_POST['offset'];      
        echo "Успех!";
    }
    else {
        $_SESSION['offset'] = 0;
    }
?>