<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <?php
        $x = 10;
        $y = 4;
    
        echo "$x + $y = ",   $x + $y,    '<br>'; //14
        echo "$x - $y = ",   $x - $y,    '<br>'; //6
        echo "$x * $y = ",   $x * $y,    '<br>'; //40
        echo "$x / $y = ",   $x / $y,    '<br>'; //2.5
        echo "$x % $y = ",   $x % $y,    '<br>'; //2
        echo "$x ** $y = ",  $x ** $y,   '<br>'; //10000

        echo $x = $x + 5,  '<hr>'; //15
        //echo $x += 5, '<br>';

        $z = "10";
        echo $x == $z , 'zzz<br>'; //true == 1
        echo $x === $z , 'zzz<br>'; //false == null(wala) 
        echo $x != $z , 'zzz<br>'; // null
        echo $x !== $z , 'zzz<br>';// true == 1
    
        echo $x++,  '<br>'; //10
        echo $x,    '<br>'; //11

        echo ++$x,  '<br>'; //12
        echo $x++,  '<br>';//12
        echo $x,  '<hr>';//13
    

        $w = 10;
               //true         /true
        echo ($x == $w) and ($x > $y), 'zzz<br>'; //true==1 
               //true         /false       
        echo ($x == $w) && ($x < $y), 'zzz<br>';  //false==null

               //true         /true
        echo ($x == $w) or ($x > $y), 'zzz<br>'; //true==1 
               //true         /false       
        echo ($x == $w) || ($x < $y), 'zzz<br>';  //true

        //exclusive or if both true== false; if both false==false
                //true         /true       
        echo ($x == $w) xor ($x > $y), 'zzz<br>';  //false
               //true         /false       
        echo ($x == $w) xor ($x < $y), 'zzz<hr>';  //true

        
//-----------------

        //conditional -----    ? true:false
        //$x=10, $y=4
        echo ($x == $y ? 'Like Value <br>' : 'Unlike Value <br>'); //unlike false
        echo ($x > $y ? 'Greater Value <br>' : 'Less Value <br>'); //Gretar / Like true






    ?>

    
</body>
</html>