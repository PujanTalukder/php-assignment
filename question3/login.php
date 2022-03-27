<?php session_start();

$errors = array("email" => "", "password" => "");

if(isset($_SESSION['email']))     // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:form.php"); 
 }

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pass = $_POST["password"];

    // check username
    if (empty($email)) {
        $errors["email"] = "email required";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] =  "email must be a valid email address";
    }
    
    // check password
    if (empty($_POST["password"])) {
        $errors["password"] = "password required";
    }

    // if there is no error then redirecting to sessionDetails page
    if(!array_filter($errors)){
        
    
        $_SESSION["email"] = $email;
        $_SESSION["pwd"] = $pass;
    

        echo '<script type="text/javascript"> window.open("form.php","_self");</script>';  //  On Successful Login redirects to home.php

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
            background-color:mediumseagreen;
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
                <label for="username">Email: </label>
                <input type="email" name="email" required>
            </div>
            <p class="red-text">
                <?php echo htmlspecialchars($errors["email"]) ?>
            </p>
            <div>
                <label for="password">Password: </label>
                <input type="password" name="password">
            </div>
            <p class="red-text">
                <?php echo htmlspecialchars($errors["password"]) ?>
            </p>

            <div>
                <input type="submit" name="submit" value="Sign Up">
            </div>
        </form>
    </div>
</body>
</html>