<?php
// Initialize variables for storing form data
$firstName = $lastName = $age = $gender = $course = $email = "";
$prelim = $midterm = $final = "";

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['btnSubmitEnrollment'])) {
        // Enrollment form was submitted
        $firstName = htmlspecialchars($_POST['txtName']);
        $lastName = htmlspecialchars($_POST['txtLast']);
        $age = htmlspecialchars($_POST['txtAge']);
        $gender = htmlspecialchars($_POST['radSex']);
        $course = htmlspecialchars($_POST['drpCars']);
        $email = htmlspecialchars($_POST['txtEmail']);
    }

    if (isset($_POST['btnSubmitGrade'])) {
        // Grade form was submitted
        $prelim = htmlspecialchars($_POST['txtPrelim']);
        $midterm = htmlspecialchars($_POST['txtMidterm']);
        $final = htmlspecialchars($_POST['txtFinal']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment and Grading System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        .container {
            margin: auto;
            width: 50%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="number"], input[type="email"], select {
            width: 200px;
            padding: 8px;
            margin: 10px 0;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .hidden {
            display: none;
        }
        .form-result {
            margin-top: 20px;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<h2>Student Enrollment and Grading Processing System</h2>

<div class="container">
    <!-- Enrollment Form -->
    <form action="" method="POST" name="enrollment_form" id="enrollmentForm" class="<?= isset($_POST['btnSubmitEnrollment']) ? 'hidden' : ''; ?>">     
        <h3>Student Enrollment Form</h3>
        <label for="txtFirstName">First Name </label>
        <input type="text" name="txtName" id="txtFirstName" value="<?= $firstName ?>" required><br><br>
        
        <label for="txtLastName">Last Name </label>
        <input type="text" name="txtLast" id="txtLastName" value="<?= $lastName ?>" required><br><br>

        <label for="txtAge">Age</label>
        <input type="number" name="txtAge" id="txtAge" value="<?= $age ?>" min="1" required><br><br>

        <label for="radMale">Male</label>
        <input type="radio" name="radSex" id="radMale" value="Male" <?= $gender == "Male" ? "checked" : ""; ?>>
        
        <label for="radFemale">Female</label>
        <input type="radio" name="radSex" id="radFemale" value="Female" selected <?= $gender == "Female" ? "checked" : ""; ?>><br><br>

        <label for="radCourse">Course</label>
        <select name="drpCars" required>
            <option value="BSEED" <?= $course == "BSEED" ? "selected" : ""; ?>>BSEED</option>
            <option value="BSIT" <?= $course == "BSIT" ? "selected" : ""; ?>>BSIT</option>
            <option value="BSHRM" <?= $course == "BSHRM" ? "selected" : ""; ?>>BSHRM</option>
        </select><br><br>

        <label for="txtEmail">Email </label>
        <input type="email" name="txtEmail" id="txtEmail" value="<?= $email ?>" required><br><br>

        <input type="submit" name="btnSubmitEnrollment" value="Submit Student Information">
    </form>

    <!-- Grade Form (Initially Hidden) -->
    <form action="" method="POST" name="grade_form" id="gradeForm" class="hidden" >
        <h3>Enter Grade for <?= $firstName . ' ' . $lastName ?></h3>
        
        <label for="txtPrelim">Prelim</label>
        <input type="number" name="txtPrelim" id="txtPrelim" value="<?= $prelim ?>" min="1" required><br><br>
        
        <label for="txtMidterm">Midterm</label>
        <input type="number" name="txtMidterm" id="txtMidterm" value="<?= $midterm ?>" min="1" required><br><br>
        
        <label for="txtFinal">Final</label>
        <input type="number" name="txtFinal" id="txtFinal" value="<?= $final ?>" min="1" required><br><br>

        <input type="submit" name="btnSubmitGrade" value="Submit Grade">
    </form>

    <!-- Display Submitted Details -->
    <?php if (isset($_POST['btnSubmitGrade'])): ?>
        <div class="form-result">
            <h3>Enrollment Information:</h3>
            <p><strong>Name:</strong> <?= $firstName . ' ' . $lastName ?></p>
            <p><strong>Age:</strong> <?= $age ?></p>
            <p><strong>Gender:</strong> <?= $gender ?></p>
            <p><strong>Course:</strong> <?= $course ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>

            <h3>Grade Information:</h3>
            <p><strong>Prelim:</strong> <?= $prelim ?></p>
            <p><strong>Midterm:</strong> <?= $midterm ?></p>
            <p><strong>Final:</strong> <?= $final ?></p>
        </div>
    <?php endif; ?>
</div>

<script>
    // Show the Grade Form after Enrollment form is submitted
    const enrollmentForm = document.getElementById('enrollmentForm');
    const gradeForm = document.getElementById('gradeForm');

    // When enrollment form is submitted, hide the enrollment form and show the grade form
    enrollmentForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from actually submitting
        enrollmentForm.classList.add('hidden'); // Hide the enrollment form
        gradeForm.classList.remove('hidden'); // Show the grade form
    });
</script>

</body>
</html>
