<?php
session_start();
if(isset($_SESSION['username'])){
    echo $_SESSION['username'] . " Have the password " . $_SESSION['password'] . "<br>";
}
else {
    echo "Please login to continue<br>";
}
?>