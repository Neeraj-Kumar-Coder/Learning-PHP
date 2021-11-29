<?php
$a = 99;
$b = 12;

function getter(){
    // We can also change the global variables now
    global $a, $b;
    echo $a . "<br>";
    echo $b . "<br>";
}

getter();
echo "<br><br>";
echo var_dump($GLOBALS);
?>