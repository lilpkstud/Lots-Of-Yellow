<?php
    // Start the session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form Page</h1>
    <?php 
        var_dump($_POST);
        //var_dump($_SESSION["favanimal"]);
        //var_dump($_SESSION);

        $_SESSION['first_name'] = $_POST['first_name'];
        $_SESSION['last_name'] = $_POST['last_name'];
        $_SESSION['email'] = $_POST['email'];

        var_dump($_SESSION);
    ?>

    <h1>Welcome <?= $_SESSION['first_name']?> </h1>
    <p>
    User Last name is: <?=$_SESSION['last_name']?>
    </p>
</body>
</html>