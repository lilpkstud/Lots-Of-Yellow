<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horizon</title>
    
    <!--Horizon CSS-->
    <link rel="stylesheet" type="text/css" href="../css/horizon.css">
    <script>
         $("button").click(function() {
            $('html,body').animate({
                scrollTop: $(".second").offset().top
            },
            'slow');
        }
    </script>
</head>
<body>
    <h1>Horizon Page</h1>
    <div class="first">
        <button type="button">Click Me!</button>
        <img src="../img/location/building.jpg" style="width:100%; height: 1000px">
    </div>
    <div class="second">Hi</div>
        <img src="../img/location/building1.jpg" style="width:100%; height: 1000px">
    <p>
        Javascript
        $("button").click(function() {
    $('html,body').animate({
        scrollTop: $(".second").offset().top},
        'slow');
});
    </p>
</body>
</html>