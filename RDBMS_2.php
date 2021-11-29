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

    // inserting data into the table
    $sql_insert_into_table = "
                            insert into phptable(id, name, gender, age) values
                            (NULL, 'Neeraj Kumar', 'M', 21),
                            (NULL, 'Rinki Rani', 'F', 23);
                        ";
    $result = mysqli_query($conn, $sql_insert_into_table);
    if (!$result) {
        echo mysqli_error($conn);
    }
    ?>
</body>

</html>