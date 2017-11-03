<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap 4.0 -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!--MEET TEAM CSS-->
    <link rel="stylesheet" type="text/css" href="../css/meet_team.css">
    
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
        <div class="container">
            <h1 style="text-align:center">MEET THE TEAM</h1>
            <div class="profile">
                <div class="row">
                    <div class="col">
                        <img class="picture" src="/img/team_pictures/jeeny.jpg" alt="">
                    </div>
                    <div class="col">
                        <h2>JEENY CHUNG</h2>
                        <p>Hello, My name is Jeeny and asdfasfdsfasfafad</p>
                    </div>
                    <div class="w-100"></div>
                </div>
                <div class="row">
                    <div class="col">
                        <img class="picture" src="/img/team_pictures/aileen4.jpg" alt="">
                    </div>
                    <div class="col">
                        <h2>AILEEN HONG</h2>
                        <p>Hello, My name is Aileen and asdfas  fdsfas fafad</p>
                    </div>
                    <div class="w-100"></div>
                </div>
                <div class="row">
                    <div class="col">
                        <img class="picture_testing" src="/img/team_pictures/aileen4.jpg" alt="">
                        <div class="bio_testing">
                            <h2>AILEEN HONG</h2>
                            <p>Hello, My name is Aileen and asdfasf dsfas fafad/Hello, My name is Aileen and I would like to asdfds;</p>
                        </div>
                    </div>
                    <div class="col">
                        <img class="picture_testing" src="/img/team_pictures/aileen4.jpg" alt="">
                        <div class="bio_testing">
                            <h2>PAUL KWON</h2>
                            <p>Paul has been slaving away for two months and no one doesnt appreciate my work. Hope you like it.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img class="picture_testing" src="/img/girls/aileen2.jpg" alt="">
                        <div class="bio_testing">
                            <h2>LEFT SIDE 1</h2>
                            <p>Left Side 1 is new to this team becuase we have no pictures or name of this person and asdf asfdsfa sfafad.Left Side 1 is new to this team becuase we have no pictures or name of this person and asdf asfdsfa sfafad.Left Side 1 is new to this team becuase we have no pictures or name of this person and asdf asfdsfa sfafad.Left Side 1 is new to this team becuase we have no pictures or name of this person and asdf asfdsfa sfafad</p>
                        </div>
                    </div>
                    <div class="col">
                        <img class="picture_testing" src="/img/girls/aileen3.jpg" alt="">
                        <div class="bio_testing">
                            <h2> RIGHT SIDE 1</h2>
                            <p>Right Side 1 is new to this team becuase we have no pictures or name of this person and asdf asfdsfa sfafad.Left Side 1 is new to this team becuase we have no pictures or name of this person and asdf asfdsfa sfafadRight Side 1 is new to this team bectures or name of this person and asdf asfdsfa sfafad</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img class="picture_testing" src="/img/girls/redhead.jpg" alt="">
                        <div class="bio_testing">
                            <h2>LEFT SIDE 2</h2>
                            <p>Left Side 2 is new to this team becuase we have no pictures or name of this person and asdf asfdsfa sfafad.Left Side 1 is new to this team becuase we have no pictures or name of this person and asdf asfdsfa sfafad.Left Side 1 is new to this team becuase we have no pictures or name of this person and asdf asfdsfa sfafad</p>
                        </div>
                    </div>
                    <div class="col">
                        <img class="picture_testing" src="/img/girls/redhead2.jpg" alt="">
                        <div class="bio_testing">
                            <h2>RIGHT SIDE 2</h2>
                            <p>Right Side 2 is new to this team becuase we have no pictures or name of this person and asdf asfdsfa sfafad.Left Side 1 is new to this team becuase we have no pictures or name of this person and asdf asfdsfa sfafad</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>