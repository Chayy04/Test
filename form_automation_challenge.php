<?php
    $arrMonths = array('January', 'February', 'March', 'April', 'May', 'June' , 'July', 'August', 'September', 'October', 'November', 'December');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Automation</title>
</head>
<body>   
<div class="container">
    <div class="row">
        <div class="col-md-4">

            <select name="drpMonths" id="" class="form-control">
                <?php
                    if(isset($arrMonths)){
                        foreach ($arrMonths as $key => $value){
                            if($value == date('F')){
                            echo '<option value="' , $value , '" selected>', $value , '</option>';
                        }else{
                            echo '<option value="' , $value , '">', $value , '</option>';
                        }
                        }
                    }     
                ?>
            </select>
        
            <select name="drpDays" id="" class="form-control">
                <?php
                    for($i=1; $i<32;$i++){
                        if($i == date('d')){
                            echo '<option value="' , $i , '" selected>', $i , '</option>';
                        }else{
                            echo '<option value="' , $i , '">', $i , '</option>';
                        }
                    }
                ?>
            </select>
        
            <select name="drpYears" id="" class="form-control">
                <?php
                    for($i=1924; $i<=date('Y'); $i++){
                        $date = date('Y');
                        $date-=10;
                        if($i == $date){  
                            echo '<option value="' , $date , '" selected>', $date , '</option>';
                        }else{
                            echo '<option value="' , $i , '">', $i , '</option>';
                        }
                    }
                ?>
            </select>
            <button type="submit" class="btn-primary"><i class="fa-solid fa-heart"></i> Process</button>
        </div>
    </div>
</div>


   <!-- <?php
       // for($i=1; $i <11; $i++)
        //echo '<input type="text" name="txtNum', $i,'" ><br>',\n\t;
        ?> -->


    
    <script type="text/javacript" href="js/jquery-3.7.1.js"></script>
    <script type="text/javacript" href="js/bootstrap.js"></script>
</body>
</html>