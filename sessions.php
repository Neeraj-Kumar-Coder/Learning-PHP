<?php
echo "Welcome to sessions in php<br>";

// Assuming the login details are correct
session_start();
$_SESSION['username'] = "Neeraj_Kumar_Coder";
$_SESSION['password'] = "*#)@*#)";
echo "Session varables have been set successfully!<br>";
?>