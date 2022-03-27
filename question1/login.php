
<?php session_start();

$errors = array("username" => "", "password" => "");

if(isset($_SESSION['usrname']))     // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:home.php"); 
 }

if(isset($_POST["submit"])){
    $user = $_POST["username"];
    $pass = $_POST["password"];

    // check username
    if (empty($_POST["username"])) {
        $errors["username"] = "username required";
    } elseif ($user != "admin") {
        $errors["username"] = "username wrong";
    } 
    
    // check password
    if (empty($_POST["password"])) {
        $errors["password"] = "password required";
    } elseif ($_POST["password"] != "admin") {
        $errors["password"] = "password wrong";
    }

    // if there is no error then redirecting to sessionDetails page
    if(!array_filter($errors)){
        
    
        $_SESSION["usrname"] = $user;
        $_SESSION["pwd"] = $pass;
    

        echo '<script type="text/javascript"> window.open("home.php","_self");</script>';  //  On Successful Login redirects to home.php

    }
}

?>






<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .app {
            margin: 150px auto;
            display: flex;
            flex-direction: column;
            text-align: center;
            width: 300px;
            height: 250px;
            background-color:lightgrey;
            padding: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
            align-items: center;
            justify-content: space-around;
        }

        .app div {
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }

        .red-text {
            color: red;
        }
    </style>
</head>
<body>
<div class="app">
        <h1>Log In</h1>
        <form action="" method="post">

            <div>
                <label for="username">Username: </label>
                <input type="text" name="username">
            </div>
            <p class="red-text">
                <?php echo htmlspecialchars($errors["username"]) ?>
            </p>
            <div>
                <label for="password">Password: </label>
                <input type="password" name="password">
            </div>
            <p class="red-text">
                <?php echo htmlspecialchars($errors["password"]) ?>
            </p>

            <div>
                <input type="submit" name="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>