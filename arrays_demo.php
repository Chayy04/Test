<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Demo</title>
</head>
<body>

    <?php
/*

//-----Indexed Arrays
    echo 'three differents ways to declare array <hr>';

        $color = array("Red", "Green", "Blue");
        echo $color[2];
        echo '<hr>';

        $pet = ["Dog", "Cat", "Pig", "Hamster"];
        echo $pet[3];
        echo '<hr>';

        $country[0] = "Phillines";
        $country[1] = "Japan";
        $country[2] = "Korea";
        $country[3] = "Russia";
        $country[4] = "UAE";

        echo $country[1];

echo '<hr>';
//-----Associative Array
    //Key Value Pairs
        $ages = array("Peter" => 22, "Clark" => 32, "John" => 28,);
        echo $ages['Clark'];
        echo '<hr>';

        $sizes = ['sm' => 10, 'md' => 14, 'lg' => 20,];

        echo $sizes['sm'];
        echo '<hr>';

        $student['name'] = "Jenny";
        $student['grade'] = 99;
        $student['age'] = 18;
        echo $student['name'], ' is ', $student['age'], ' years old.';
        echo '<hr>';

echo '<hr>';
//-----Multidimensional Array
        $contacts = array(
            array(//index0
                'name' => 'Peter Parker',
                'email' => 'peterparker@email.com',
                'sex' => 'Male'
            ),

            array(//index1
                'name' => 'Clark Kent',
                'email' => 'clarkkent@email.com',
                'sex' => 'Male'
            ),

            array(//index2
                'name' => 'Horry Potter',
                'email' => 'horrypotter@email.com',
                'sex' => 'Male'
            ),

            array(//index3
                'name' => 'Katnis Everdeen',
                'email' => 'katniseverdeen@email.com',
                'sex' => 'Female'
            )
        );

        echo $contacts[2]['name'];
        echo '<hr>';


        //$sizes = ['sm' => 10, 'md' => 14, 'lg' => 20,];
        echo 'Associative and multidimentioanl array <br>';
        $sizes1 = [
            'sm' => ['width' => 10, 'height' => 20],
            'md' => ['width' => 14, 'height' => 28],
            'lg' => ['width' => 20, 'height' => 40],
        ];
        echo $sizes1['md']['height'];

   
        $ages = array("Peter" => 22, "Clark" => 32, "John" => 28,);
        print_r($ages);
        echo '<br><br>';
        var_dump($ages);

        $student['name'] = "JennySantos";
        $student['grade'] = 99;
        $student['age'] = 18;
        echo '<br><br>';

        print_r($student);
        echo '<br><br>';
        var_dump($student);


echo '<hr>';

        $contacts = array(
            array(//index0
                'name' => 'Peter Parker',
                'email' => 'peterparker@email.com',
                'sex' => 'Male'
            ),

            array(//index1
                'name' => 'Clark Kent',
                'email' => 'clarkkent@email.com',
                'sex' => 'Male'
            ),

            array(//index2
                'name' => 'Horry Potter',
                'email' => 'horrypotter@email.com',
                'sex' => 'Male'
            ),

            array(//index3
                'name' => 'Katnis Everdeen',
                'email' => 'katniseverdeen@email.com',
                'sex' => 'Female'
            )
        );

        print_r($contacts);
        //var_dump($contacts);


//========Foreach
        $color = array("Red", "Green", "Blue", "Yellow");

        foreach($color as $key => $value){
            echo $value, '<br>';
        

        //as much as possible use for each in arrays
        //for($i=0; $i< count($color); $i++)
        //   echo $color[$i], '<br>';

echo '<hr> Associative arryys using for each <hr>';

        $ages = array("Peter" => 22, "Clark" => 32, "John" => 28,);

        foreach ($ages as $keyAges => $valueAges){
            echo $keyAges, ' is ', $valueAges, ' years old. <br>';
        }
 */ 

        $contacts = array(
            array(//index0
                'name' => 'Peter Parker',
                'email' => 'peterparker@email.com',
                'sex' => 'Male'
            ),

            array(//index1
                'name' => 'Clark Kent',
                'email' => 'clarkkent@email.com',
                'sex' => 'Male'
            ),

            array(//index2
                'name' => 'Horry Potter',
                'email' => 'horrypotter@email.com',
                'sex' => 'Male'
            ),

            array(//index3
                'name' => 'Katnis Everdeen',
                'email' => 'katniseverdeen@email.com',
                'sex' => 'Female'
            )
        );

       /* foreach ($contacts as $keyContact => $valueContact){
            foreach ($valueContact as $key => $value){
                echo '<b>', strtoupper($key),'</b> : ', $value, '<br>';
            }
            echo '<hr>';
        }

        
        foreach ($contacts as $keyContact => $valueContact){
            foreach ($contacts[$keyContact] as $key => $value){
                echo '<b>', strtoupper($key),'</b> : ', $value, '<br>';
            }
            echo '<hr>';
        }*/

        foreach ($contacts as $keyContact => $valueContact){
            //foreach ($contacts[$keyContact] as $key => $value){
            //    echo '<b>', strtoupper($key),'</b> : ', $value, '<br>';
            //}
            echo print_r($valueContact);
            echo '<hr>';

        }

    ?>
</body>
</html>