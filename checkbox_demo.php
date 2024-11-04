<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckBox Fetch</title>
</head>
<body>
    <form action="" method="post">
        <input type="checkbox" name="chkFood[]" id="chkSisig" value="sisig"><label for="chkSisig">Sisig</label><br>
        <input type="checkbox" name="chkFood[]" id="chkChickenWings" value="ChickenWings"><label for="chkChickenWings">ChickenWings</label><br>
        <input type="checkbox" name="chkFood[]" id="chkCaldereta" value="Caldereta"><label for="chkCaldereta">Caldereta</label><br>
        <input type="checkbox" name="chkFood[]" id="chkKareKare" value="KareKare"><label for="chkKareKare">KareKare</label><br>
        <input type="checkbox" name="chkFood[]" id="chkAdobo" value="Adobo"><label for="chkAdobo">Adobo</label><br>
        <input type="submit" name="btnProcess" value="Process">
    </form>

</body>
    <?php
        if(isset($_POST['btnProcess']) && isset($_POST['chkFood'])){
            $arrFood = $_POST['chkFood'];
            print_r($arrFood);
            echo '<hr>';
            echo $arrFood[0];
        }
    ?>

</html>