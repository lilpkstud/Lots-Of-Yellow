<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>One Page Scroll</title>
      
     <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    
    <!--JQuery-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

     <!--Page CSS-->
    <link rel="stylesheet" type="text/css" href="../css/page.css">

    <!-- Page JS -->
    <script type="text/javascript" src="../js/page.js"></script>
   
</head>
<body id="page-top">
   <nav class="nav justify-content-center fixed-top" style="background-color: lightgoldenrodyellow">
        <a class="nav-link active smoothScroll" href="#one"> Home </a>
        <a class="nav-link smoothScroll" href="#about"> ABOUT</a>
        <a class="nav-link smoothScroll" href="#portfolio">PORTFOLIO</a>
        <a class="navbar-brand smoothScroll" href="#one">Lots of Yellow</a>
        <a class="nav-link smoothScroll" href="#application"> APPLICATION </a>
        <a class="nav-link smoothScroll" href="#services"> SERVICES</a>
        <a class="nav-link smoothScroll" href="#contact"> CONTACT </a>

    </nav>
   <div class="container-fluid">
        <section id="one">
            <h2>Section One</h2> 
            <p class="font_color">
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.
                Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus
                lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor,
                facilisis luctus, metus
            </p>
        </section>
        
        <section id="about">
            <div class="container">
                <h2>Section Two</h2>
                <p>
                    <a class="smoothScroll" href="#page-top">Top</a>
                </p>
            </div>
            <p>
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.
                Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus
                lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor,
                facilisis luctus, metus
            </p>
        </section>

        <section id="portfolio">
            <div class="container">
                <p class="font_colorp">
                    3 a tags that will redirect users to pictures
                </p>
            </div>
        </section>

        <section id="application">
            <div class="container">
                <h1 class="font_colorh1">Application Form</h1>
                <h3 class="font_color">Follow These Steps To Apply!</h3>
                <p class="font_colorp">
                    1. Inbox me to resove a spot(slots may be found in images below!)
                </p>
                <p class="font_colorp">
                    2. Pose in a picture holding up a sign sharing what you want more of from fashion and/or social justice.
                </p>
                <p class="font_colorp">
                    3. Get some free pics for you instagram, Linkedin.
                </p> 
                <p class="font_colorp">
                    4. Share your #group_name picture on Instagram, and give me a tag to help us grow our social media!

                    Sign up soon! Spaces run out early 
                </p>
            <form action="form.php" method="post">
                <div class="form-group">
                    <label class="font_color_label" for="first_name">First Name: </label>
                    <input type="text" name="first_name">
                </div>
                <div class="form-group">
                    <label class="font_color_label" for="last_name">Last Name: </label>
                    <input type="text" name="last_name">
                </div>
                <div class="form-group">
                    <label class="font_color_label" for="email">Email: </label>
                    <input type="text" name="email" placeholder="Enter Email">
                </div>
                <input type="submit" value="submit" class="btn btn-primary">
            </form>
        </section>

        <section id="services">
            <div class="container">
                <h1 class="font_colorh1">SERVICES</h1>
                <p class="font_colorp" style="text-align:center">
                Seniors I Children I Newborn I Families I Couples
                </p>
                <p class="font_colorp" style="padding-top: 400px">
                    Package I:
                    $80
                    1 hour session: Two outfit changes, one location
                    15+ edited pictures 
                    digital files
                    Prints extra service fee (optional)
                    $40 non-refundable deposit (will not reserve a day w/o a deposit)
                </p>
                <p class="font_colorp">
                    Package II:
                    $120
                    2 hour session: three outfit changes, two locations
                    20+ edited pictures
                    digital files
                    Prints extra service fee (optional)
                    $60 non-refundable deposit (will not reserve a day w/o a deposit)
                </p>

                <p class="font_colorp">
                    Package III:
                    $150
                    3 hour session: three outfit changes, two locations
                    40+ edited pictures
                    digital files
                    Prints extra service fee (optional)
                    $75 non-refundable deposit (will not reserve a day w/o a deposit)
                </p>

                <p class="font_colorp">
                    Events
                    please email me for rates
                    To book a session, you will need to meet me personally and go over my contract before we schedule a date for your session. 
                </p>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <h1 class="font_colorh1">Contact Us</h1>
                <p class="font_colorp">
                    For booking and photo inquiries, please contact Jenny Chung
                </p>
            </div>
        </section>
    </div>
</body>
</html>