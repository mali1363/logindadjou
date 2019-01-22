<?php
  require('pass.php');
  ?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="login.css">
    <script src="jquery-3.3.1.min.js",></script>
    <script>
        $(document).ready(function(){
                $('#signup').click(function(){
                    $('.login').animate({top:'200px'})
                    $('.signup').animate({top:'0'})
                    $('.login').hide(300,function(){
                        $('.signup').show(300);
                    });
                })
                $('#login').click(function(){
                    $('.signup').animate({top:'200px'})
                    $('.login').animate({top:'0'})
                    $('.signup').hide(300,function(){
                        $('.login').show(300);
                    });
                })
            })
     
        </script>
</head>
<body>
    <script>
          $lower = range('a','z');
         $upper = range('A','Z');
         $digit = range(0,9);
         $sp = ['!','@','#','$','%','^','&','*'];
         $total = array_merge($lower,$upper,$digit,$sp);
         $pass = $lower[rand(0,25)] . $upper[rand(0,25)] . $digit[rand(0,9)];
         for ($i=0;$i<5;$i++) {
          $pass = $pass. $total[rand(0,69)];
          }              
          $pass = $lower[rand(0,25)] . $upper[rand(0,25)] . $digit[rand(0,9)];
          for ($i=0;$i<5;$i++) {
                $pass = $pass. $total[rand(0,69)];
          }
          $a = str_split($pass);
          shuffle($a);
          var_dump(implode("",$a));
    </script>
    <div class="main">
        <div class="login">
            <h3>Login</h3>
            <form method="post" action="">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="password">
                <a href="#" id="login2">Login</a><br><br>
                <a href="#" id="signup">signup</a><br><br>
                <input type="checkbox" name="مرا به خاطر داشته باش" >مرا به خاطر داشته باش<br>
            </form>
        </div><br>
        <div class="signup">
            <h3>signup</h3>
            <form method="post" action="">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="password">
                <input type="password" placeholder="confirm passwprd">
                <a href="#" id="login">Login</a><br><br>
                <a href="#" id="signup2">signup</a>
            </form>
        </div>
        <div class="complete account">
                <h3>به دی جی کالا خوش آمدید</h3>
                <form method="post" action="">
                    <input type="email" placeholder="Email">
                    <input type="password" placeholder="password">
                    <input type="password" placeholder="confirm passwprd">
                    <a href="#" id="login">Login</a><br><br>
                    <a href="#" id="signup2">signup</a>
                </form>
            </div>
    </div>
   
   
</body>
</html>