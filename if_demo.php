<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements</title>
</head>
<body>

    <?php
    /*
        //simple if
            $grade = 70;
            
            if($grade > 74.4){
                echo 'Passed!';
            }
            else{
                echo 'Failed!';
            }


//--- Laderized if 
        $grade = 90;
        if($grade >100){
            echo 'Out of Range!';
        }
        elseif($grade > 74.4){
            echo 'Passed!';
       }
        elseif($grade > 44.4){
            echo 'Failed!';
        }
        else{
            echo 'Out of Range!';
        }


//---------nested ifs
        $sex = "female";
        $age = 21;
        if($sex == "female"){
            if($age == 18)
                echo 'You are debutant!';
            else
                echo 'Not Debutant';
            
        }
        elseif($sex == "male"){
            if($age == 21)
                echo ' Debutant';
            else
                echo 'Not debutant';                     
        }
        else
            echo 'Invalid sex';
*/

//--------laderized if and condtionoal
        $sex = "male";
        $age = 21;

        if($sex == "female" && $age == 18) 
            echo 'Debutant';
        elseif($sex == "male" && $age == 21) 
            echo 'Debutant <hr>';
        else
            echo 'Not debutant';



//=------------switch case

        $colorCode = 'r';

        switch(strtoupper($colorCode)){
            case 'R':
                echo 'Red';
                break;
            case 'G':
                echo 'green';
                break;  
            case 'B':
                echo 'blue';
                break;
            case 'Y':
                echo 'yellow';
                break;
            default:
            echo 'Unknown Color';              
        }

    ?>
    
</body>
</html>