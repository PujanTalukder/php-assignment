<?php session_start();

    if(!isset($_SESSION["usrname"])){
        header("Location:login.php");
    }

    // setting up cookie
    $cookie_val = $_SESSION["usrname"];

    setcookie("user", $cookie_val, time()+3600, "/")
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to our website!!!</h1>
    <h3>
        <?php
            if(isset($_COOKIE["user"])){
                echo "cookie is been set";
            }else{
                echo "cookie is not set";
            }
        
        ?>
    </h3>
    <?php
        $_SESSION["username"] = $_SESSION["usrname"];
        $_SESSION["password"] = $_SESSION["pwd"];
    ?>
    <br>
    <a href="page2.php">visit page2</a>
</body>
</html>