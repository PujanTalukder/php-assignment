<?php session_start();

    if(!isset($_SESSION["usrname"])){
        header("Location:login.php");
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
    <h1>Login Successful!!</h1>
    <?php
        $_SESSION["username"] = $_SESSION["usrname"];
        $_SESSION["password"] = $_SESSION["pwd"];
    ?>
    <a href="sessionDetails.php">Session Details</a>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>