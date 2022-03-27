<?php session_start(); 

    if(!isset($_SESSION["usrname"])){
        header("Location:home.php");
    }else{
        echo "<h1>Session Details </h1>" . "<br/>";
        echo "USERNAME: " . htmlspecialchars($_SESSION["username"]) . "<br/>";
        echo "PASSWORD: " . htmlspecialchars($_SESSION["password"]);
    }

?>