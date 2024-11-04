<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        /*    \n new line
            \r carriage-return character
            \t tab character
            \$ dollar sign itself ($)
            \" single double-qoute (")
            \\ single backlash (\)

                $myString1 = 'Hello \$Jenny!\\';
                $myString2 = "Hello \$Jenny!";

                echo '<pre>';
                    echo $myString1, '<hr>';
                    echo $myString2, '<hr>';
                echo '<pre>';

                echo '<h1 align="center">HEllO \\JENNYY! </h1>';
        */

        $myName = "Jenny Santos";
        echo '<hr>', strlen($myName ); //5 //12
        echo '<hr>', str_word_count($myName);
        //            str(search, replace, subject)
        echo '<hr>', str_replace("Santos", "Cutiee", $myName); //Jenny Cutiee
        echo '<hr>', strrev($myName); //sotnaS ynneJ
        echo '<hr>'



    ?>

    
</body>
</html>