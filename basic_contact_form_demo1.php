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

    <?php if(isset($_REQUEST['btnSend'])): ?> 

        <h2>Thank You!</h2>
        <p>Here is the information you have submitted: </p>   
        <?php
            //if(isset($_REQUEST['btnSend'])){
                //echo '<h2>Thank You!</h2>';
                //echo '<p>Here is the information you have submitted: </p>';
                $name = $_REQUEST['txtName'];
                $email = $_REQUEST['txtEmail'];
                $subject = $_REQUEST['txtSubject'];
                $messsage = $_REQUEST['txtMessage'];
            // }
        ?>

        <ul>
            <li><b>Name: </b><?php echo $name; ?></li>
            <li><b>Email: </b><?php echo $email; ?></li>
            <li><b>Subject: </b><?php echo $subject; ?></li>
            <li><b>Message: </b><?php echo $messsage; ?></li>
        </ul>

    <?php endif; ?>

</body>
</html>