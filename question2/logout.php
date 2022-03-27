<?php
    session_start();
    setcookie("user", "", time()-3600, "/","", 0);

    session_destroy();   // function that Destroys Session 
    header("Location: login.php");
?>