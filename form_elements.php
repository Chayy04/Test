<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Elements</title>
</head>
<body>
    <form action="" method="" name="">
        <input type="text" name="">  <!-- TextBox -->

        <hr>

        <select name="drpCars">      <!-- DropDown List -->
            <option value="Volvo">Volvo</option>
            <option value="Saab">Saab</option>
            <option value="Fiat">Fiat</option>
            <option value="Audi">Audi</option>
            <option value="Toyota">Toyota</option>
            <option value="Mitsubishi" selected>Mitsubishi</option>
            <option value="Honda">Honda</option>
        </select>

        <hr>

        <textarea name="txtPost" rows="10" cols="20"> Jenny Cutie</textarea>

        <hr>
            <!--type="" Button // Submit // Reset-->
        <button type="button" >Click Me</button>

        <hr>

        <fieldset> <!--Group Related Data in a Form-->
            <legend>Personal Information: </legend>
            First Name<input type="text" name=""><br><br>
            Last Name<input type="text" name=""><br>
        </fieldset>

        <hr>

        <fieldset> <!--Have Recommendation when u type-->

        <input type="text" name="dlstBrowsers" list="browsers">
        <datalist id="browsers">
            <option value="Firefox"></option>
            <option value="Chrome"></option>
            <option value="Opera"></option>
            <option value="Safari"></option>
            <option value="Microsoft Edge"></option>

        </datalist>


    </form>
    
</body>
</html>