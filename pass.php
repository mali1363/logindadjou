<?php
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
    $a = str_split($pass);
    shuffle($a);
    var_dump($a);
    ?>
    
