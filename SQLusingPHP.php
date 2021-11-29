<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL using PHP</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    h1 {
        text-align: center;
        text-transform: capitalize;
    }
</style>

<body>
    <h1>Working with SQL with PHP</h1>
    <?php

    // Initializing the variables
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "newdb";

    // Making the connection
    $connection = mysqli_connect($serverName, $userName, $password, $database);
    if (!$connection) {
        die("Couldn't connect to the database: " . mysqli_connect_error() . "<br>");
    }
    echo "<h2>Connected Successfully!</h2><br>";

    // Creating and executing the query
    $queryToCreateTable = "
                            create table newTable(
                                id int auto_increment,
                                name varchar(20) not null,
                                age int not null,
                                country varchar(20) default 'India',
                                primary key(id)
                            );";

    $createTableResult = mysqli_query($connection, $queryToCreateTable);
    if (!$createTableResult) {
        die("Couldn't create the table: " . mysqli_error($connection) . "<br>");
    }
    echo "<h3>Table created successfully</h3>";

    // Inserting the data in the table
    $queryToInsertInTable = "
                            insert into newTable(name, age, country) values
                            ('Neeraj Kumar', 21, 'India'),
                            ('Rinki Rani', 23, 'India'),
                            ('Bittu', 21, 'India'),
                            ('John', 31, 'USA'),
                            ('Robert Frost', 42, 'Germany');";

    $insertionResult = mysqli_query($connection, $queryToInsertInTable);
    if (!$insertionResult) {
        die("Couldn't insert into the table: " . mysqli_error($connection) . "<br>");
    }
    echo "<h4>Inserted successfully into the table</h4><br>";

    // Displaying the records in the table
    $queryToDisplayTuples = "select * from newTable";
    $displayResult = mysqli_query($connection, $queryToDisplayTuples);
    echo "<h4>The records of the table is as follows</h4><br>";
    while ($row = mysqli_fetch_assoc($displayResult)) {
        echo "ID = " . $row['id'] . " Name = " . $row['name'] . " Age = " . $row['age'] . " Country = " . $row['country'] . "<br>";
    }
    ?>
</body>

</html>