<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form demo</title>
</head>
<body>
    <h2>Basic Contact Form</h3>
    <hr>
    <form method="post">
        <label for="txtName">Name: <sup style="color:red">*</sup></label><br>
        <input type="text" name="txtName" id="txtName" autofocus required><br>

        <label for="txtEmail">Email: <sup style="color:red">*</sup></label><br>
        <input type="email" name="txtEmail" id="txtEmail" required><br>

        <label for="txtSubject">Subject: <sup style="color:red">*</sup></label><br>
        <input type="text" name="txtSubject" id="txtSubject" required><br>

        <label for="txtMessage">Message: <sup style="color:red">*</sup></label><br>
        <textarea name="txtMessage" id="txtMessage" rows="5" cols="30" required></textarea><br>

        <button type="submit" name="btnSend">Send</button>
    </form>
    <hr>

    <?php 
        if(isset($_REQUEST['btnSend'])){
                echo '<h2>Thank You!</h2>';
                echo '<p>Here is the information you have submitted: </p>';
               
                $name = $_REQUEST['txtName'];
                $email = $_REQUEST['txtEmail'];
                $subject = $_REQUEST['txtSubject'];
                $messsage = $_REQUEST['txtMessage'];

                echo '<ul>';
                echo '<li><b>Name: </b>', $name, '</li>';
                echo '<li><b>Email: </b>', $email, '</li>';
                echo '<li><b>Subject: </b>', $subject, '</li>';
                echo '<li><b>Message: </b>', $messsage, '</li>';
                echo '</ul>';

        }
    
    ?>

</body>
</html>