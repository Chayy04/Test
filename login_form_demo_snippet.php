<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/customlogin.css">

    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
<div class="container">
       <div class="Back">
            <i class="fa-solid fa-arrow-left"></i>
        </div>

        <p class="h2 text-center">Form</p>
        <form action="" method="post">
            <div class="preview text-center">
                <img class="preview-img" src="img/account.png" alt="Preview Image" width="200" height="200"/>
                <div class="browse-button">
                    <i class="fa fa-pencil-alt"></i>
                    <input class="browse-input" type="file" required name="UploadedFile" id="UploadedFile"/>
                </div>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Full Name:</label>
                <input class="form-control" type="text" name="fullname" required placeholder="Enter Your Full Name"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input class="form-control" type="email" name="email" required placeholder="Enter Your Email"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input class="form-control" type="password" name="password" required placeholder="Enter Password"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <label>Gender:</label><br/>
                <label><input type="radio" name="gender" required value="Male" checked /> Male</label>
                <label><input type="radio" name="gender" required value="Female" /> Female</label>
                <label><input type="radio" name="gender" required value="Other" /> Other</label>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" value="Submit"/>
            </div>
        </form>
    </div>

<script type="text/javacript" href="js/jquery-3.7.1.js"></script>
<script type="text/javacript" href="js/bootstrap.js"></script>

</body>
</html>