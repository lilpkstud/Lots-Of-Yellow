<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
     
    <!--Loading CSS-->
    <link rel="stylesheet" type="text/css" href="../css/about.css">
    <!--Animate CSS-->
    <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  <script type="text/javascript">

        window.onload=timeout;
        function timeout(){
        window.setTimeout("redirect()",5000)}

        function redirect(){
        window.location="../views/page2.php"
return}
  </script>
</head>
<body onload="timeout()">
    <div class="wrapper">
        <h1 class="animated slideInDown"> Lots of Yellow</h1>
            <img class="cover_picture animated2 fadeInLeft" src="../img/girls/default.jpg" alt="">
            <img class="cover_picture animated2 fadeInLeft" src="../img/girls/aileen.png" alt="">
            <img class="cover_picture animated fadeInLeft" src="../img/girls/girl1.jpg" alt="">
            <img class="cover_picture animated2 fadeInLeft" src="../img/couple.jpg" alt="">
        <form>
            <input type="button" value="Enter Home Page" onClick="redirect()">
        </form> 
    </div>
</body>
</html>