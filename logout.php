<?php



if(isset($_SESSION['$userid']))
    {
        session_start();
        session_destroy();
        header('Location: index.php');
    }
    else
    {
        session_start();
        session_destroy();
        header('Location: login.php');
    }
        
?>