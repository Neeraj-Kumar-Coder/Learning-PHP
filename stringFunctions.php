<?php
    $myStr = "This is a sample string";
    echo $myStr;
    echo "<br>";
    echo "The length of this string is ".strlen($myStr);
    echo "<br>";
    echo strrev($myStr);
    echo "<br>";
    echo "This first occurence of 'is' in the string is at index ".strpos($myStr, "is");
    echo "<br>";
    echo str_replace("is", "ere", $myStr);
    echo "<br>";
    echo str_repeat($myStr, 10);
?>