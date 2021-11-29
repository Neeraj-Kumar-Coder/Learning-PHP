<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDBMS</title>
</head>

<style>
    * {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 2vw;
    }
</style>

<body>
    <?php
    echo "Using RDBMS with PHP<br>";
    /*
    Ways to connect:
    1. MySQLi extension
    2. PDO - PHP Document Object
    */

    // CONNECTING TO THE DATABASE

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "phpdb";

    // create a connection
    $conn = mysqli_connect($serverName, $userName, $password, $database);

    // die if connection is not successfull
    if (!$conn) {
        die("Sorry we failed to connect" . mysqli_connect_error());
    }
    echo "Connected Successfully<br>";

    // create a table
    $sql_create_table = "
                            CREATE TABLE phptable(
                                id int auto_increment,
                                name varchar(20),
                                gender varchar(1),
                                age int,
                                primary key(id)
                            );
                        ";
    $result = mysqli_query($conn, $sql_create_table);
    if (!$result) {
        echo mysqli_error($conn);
    }
    ?>
</body>

</html>