<?php session_start();

    if(!isset($_SESSION["email"])){
        header("Location: login.php");
    }

    $email = $_SESSION["email"];
    $pass = $_SESSION["pwd"];

    $to_email = $email;
    $subject = "Registration Confirmation";
    $body = "Hi, this mail is sent for test purpose only";
    $headers = "From: youremail.com";


    // sending email
    mail($to_email,$subject, $body, $headers);

    if(isset($_POST["submit"])){
        echo '<script type="text/javascript"> window.open("submission.php","_self");</script>';
        session_destroy();
    }



?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <style>
        a { 
            background-color: white;
            color: black;
            border: 2px solid green;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container">
        <form id="contact" action="submission.php" method="post" enctype="multipart/form-data">
            <h3>Application Form</h3>
            <fieldset>
                <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Your Registration Number" name="regNo" type="text" index="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="CGPA" type="text" name="cgpa" index="3" required>
            </fieldset>
            <fieldset>
                <input placeholder="Specialization" name="spec" type="text" index="4" required>
            </fieldset>
            <fieldset>
                <label for="reume">Upload reume</label>
                <input name="resume" type="file" tabindex="5" required>
            </fieldset>


            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>


    </div>

    <div style="text-align:center;" >
        <a  href="logout.php">Log out</a>
    </div>
</body>

</html>
