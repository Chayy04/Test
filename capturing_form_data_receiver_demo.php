<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Receiver</title>
</head>
<body>
    <?php
//-----------use $_GET if u use get method on your form

        // $firstname = $_GET['txtFirstName'];
        // $lastname = $_GET['txtLastName'];
        // $sex = $_GET['radSex'];

        // if($sex == 'Female')
        //     echo "Hello, Ms. $firstname $lastname";
        // else
        //     echo "Hello, Mr. $firstname $lastname";


//-----------use $_POST if u use post method on your form

        // $firstname = $_POST['txtFirstName'];
        // $lastname = $_POST['txtLastName'];
        // $sex = $_POST['radSex'];

        // if($sex == 'Female')
        //     echo "Hello, Ms. $firstname $lastname";
        // else
        //     echo "Hello, Mr. $firstname $lastname";

//----------- pwede sa get and post      
        $firstname = $_REQUEST['txtFirstName'];
        $lastname = $_REQUEST['txtLastName'];
        $sex = $_REQUEST['radSex'];

        if($sex == 'Female')
            echo "Hello, Ms. $firstname $lastname";
        else
            echo "Hello, Mr. $firstname $lastname";
    
    ?>
    
</body>
</html>