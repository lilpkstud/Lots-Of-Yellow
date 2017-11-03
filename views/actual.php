<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap 4.0 -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!-- Actual CSS -->
    <link rel="stylesheet" type="text/css" href="../css/actual.css">

     <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
    
    <!-- Navigation CSS -->
    <link rel="stylesheet" type="text/css" href="../css/actual_navigation.css">

    <!-- Navigation JS -->
    <script src="../js/navigation.js"></script> 
</head>
<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/views/actual.php">HOME</a>
        <a href="/views/about.php">ABOUT</a>
        <a href="/views/meet_team.php">MEET THE TEAM</a>
        <a href="#">SENIOR PACKAGE</a>
        <a href="#">APPLICATION</a>
        <a href="#">CONTACT US</a>
    </div>

    <!-- Use any element to open the sidenav -->
    <span onclick="openNav()">
        <i id="bars" class="fa fa-bars fa-2x" aria-hidden="true"></i>
    </span>

    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="content">
        <div id="cover_wrapper">
            <img class="cover_picture animated slideInDown" src="../img/girls/girl9.jpg" alt="">
            <img class="cover_picture animated1 slideInDown" src="../img/girls/aileen.png" alt="">
            <img class="cover_picture animated2 slideInDown" src="../img/boys/brenden2.jpg" alt="">
        </div>
    </div>





















    <?php
        var_dump("HI");
       
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Branding</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div id="navigation" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">MEET THE TEAM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SENIOR PACKAGE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">APPLICATION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">DONACTION</a>
            </li>  
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT US</a>
            </li>     
        </ul>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#">HOME</a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="#">ABOUT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">MEET THE TEAM</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">SENIOR PACKAGE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">APPLICATION</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">DONACTION</a>
        </li>  
        <li class="nav-item">
            <a class="nav-link" href="#">CONTACT US</a>
        </li>           
    </ul>
    <div id="cover_wrapper">
            <img class="cover_picture animated slideInDown" src="../img/girls/girl9.jpg" alt="">
            <img class="cover_picture animated1 slideInDown" src="../img/girls/aileen.png" alt="">
            <img class="cover_picture animated2 slideInDown" src="../img/boys/brenden2.jpg" alt="">
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>