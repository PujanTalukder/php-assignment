<?php session_start();

    if(!isset($_SESSION["username"])){
        header("Location:page1.php");
    }

    
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is page 2</h1>
    <?php
    echo "<h1>Session Details </h1>" . "<br/>";
    echo "USERNAME: " . htmlspecialchars($_SESSION["username"]) . "<br/>";
    echo "PASSWORD: " . htmlspecialchars($_SESSION["password"]);
    
    ?>

    <?php
    
    if(!isset($_COOKIE["user"])){
        echo "Cookie user is not set!";
    }else{
        echo "<br> Cookie user is set!<br>";
        echo "Value is: " . $_COOKIE["user"];
    }

    
    
    ?>

    <br>
    <a href="logout.php">Log out</a>
</body>
</html>