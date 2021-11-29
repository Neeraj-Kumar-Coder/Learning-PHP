<?php
    // if-elseif-else ladder
    $num1 = 23;
    $num2 = 34;

    if($num1 > $num2){
        echo "Inside if";
    }
    else {
        echo "Inside else";
    }
    echo "<br>";

    $age = 21;
    if ($age>1 and $age <18) {
        echo "You cannot vote";
    }
    elseif ($age>=18 and $age <100) {
        echo "You can vote";
    }
    else {
        echo "You are not alive";
    }
    echo "<br>";

    // switch case
    switch ($age) {
        case 18:
            echo "You are 18 years old";
            break;

        case 21:
            echo "You are 21 years old neeraj!";
            break;
        
        default:
            echo "Your age is not 18 or 21";
            break;
    }
    echo "<br>";
    
    // while loops
    $count = 0;
    while ($count <10) {
        echo $count++;
    }
    echo "<br>";
    
    // for loops
    for ($i=0; $i < 10; $i++) { 
        echo $i;
    }
    echo "<br>";

    // do while loop
    do {
        echo $count++;
    } while ($count<10);

    // foreach loops
    $myArr = array("Hello","sample",23, 24, "soem",23.22);
    for ($i=0; $i < count($myArr); $i++) { 
        echo $myArr[$i];
    }
    echo "<br>";
    foreach ($myArr as $value) {
        echo $value;
    }
    echo "<br>";

    foreach ($myArr as $key => $value) {
        echo $key . "-" . $value . "<br>";
    }
?>