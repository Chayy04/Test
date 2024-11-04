<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <form method="post" action="capturing_form_data_receiver_demo.php">
        <label for="txtFirstName">First Name</label>
        <input type="text" name="txtFirstName" id="txtFirstName" autofocus><br><br>
        
        <label for="txtLastName">Last Name</label>
        <input type="text" name="txtLastName" id="txtLastName"><br><br>

        <input type="radio" name="radSex" id="radMale" value="Male">
        <label for="radMale">Male</label>

        <input type="radio" name="radSex" id="radFemale" value="Female" checked>
        <label for="radFemale">Female</label><br><br>
        
        <button type="submit" name="btnSend">Send</button><br>
    </form>
    
</body>
</html>