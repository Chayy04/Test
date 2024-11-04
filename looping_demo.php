<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Demo</title>
</head>
<body>

    <?php

//--------While Loop 
    //tanong muna bago pasok

        $i = 1;
        while($i < 11){
            echo $i,' ';
            $i++;
        }
         echo'<hr>';

//-------Do While
    //pasok muna bago pasok
        $b = 20;
        do{
            echo $b,' ';
            $b++;
        }
        while($b < 11);

        echo'<hr>';

//-------For Loop
        for($a = 2; $a < 11; $a+=2)
            echo $a, ' ';

    ?>
    
</body>
</html>