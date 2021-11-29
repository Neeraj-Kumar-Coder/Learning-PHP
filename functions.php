<?php
    echo "<h1> This is functions in PHP </h1>";
    function greet($name){
        echo "Good Morning " . $name . "<br>";
    }
    greet("Neeraj");


    function changer($var, $arr){
        echo "Called<br>";
        $var = 10;
        $arr[3] = 99;
        echo "Returned<br>";
    }

    $age = 21;
    $myArr = [1,2,3,6,5,4,7,8,9,6,5,4];
    echo var_dump($age) . "<br>" . var_dump($myArr) . "<br>";
    changer($age, $myArr);
    echo var_dump($age) . "<br>" . var_dump($myArr) . "<br>";


    // Date Functions

    $todaysDate = date("dS F Y, g:i A");
    echo $todaysDate . "<br>";

    // Assosiative arrays
    $asArr = array(
        "Neeraj" => "Red",
        "Rohan" => "Green",
        21 => "It's a number"
    );

    echo $asArr[21];
    echo $asArr["Neeraj"] . "<br>";

    foreach ($asArr as $key => $value) {
        echo "Key is $key and Value is $value.<br>";
    }

    $multiDimArr = [[1,2,3,4],[5,6,7,8],[8,9,7,4]];
    echo var_dump($multiDimArr) . "<br>";
    for ($i=0; $i < count($multiDimArr); $i++) { 
        echo var_dump($multiDimArr[$i]) . "<br>";
    }

    for ($j=0; $j < count($multiDimArr); $j++) { 
        for ($k=0; $k < count($multiDimArr[$j]); $k++) { 
            echo $multiDimArr[$j][$k] . " ";
        }
        echo "<br>";
    }
?>