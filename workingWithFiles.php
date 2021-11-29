<?php
echo("Working with files in PHP<br>");
$numberOfCharactersRead = readfile("sample.txt");
echo "<br>Number of characters read are $numberOfCharactersRead<br>";

// Using fopen() functions
$fptr = fopen("sample.txt", "r");
$content = fread($fptr, filesize("sample.txt"));
echo $content;
fclose($fptr);

// Writing to a file
$fptr1 = fopen("sample1.txt", "w");
fwrite($fptr1, "This is written using fwrite() function in php.\nThis is the best file of the world");
fclose($fptr1);

// Appending to a file
$fptr2 = fopen("sample1.txt", "a");
fwrite($fptr2, "This is appended to the file.");
fclose($fptr2);
?>