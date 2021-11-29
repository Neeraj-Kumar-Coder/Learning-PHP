<!-- CONNECTING TO THE DATABASE -->
<?php
// Initializing the variables
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "notesdb";

// Connecting to the database
$connection = mysqli_connect($serverName, $userName, $password, $databaseName);
?>

<!-- INSERTING IN THE TABLE OF THE DATABASE -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $queryToInsert = "INSERT INTO notes(title, description) values('$title', '$description');";
    $result = mysqli_query($connection, $queryToInsert);
}
?>

<!-- For deleting all the notes -->
<?php
if (isset($_GET['deleteAll'])) {
    $queryToClearTable = "DELETE FROM notes;";
    $result = mysqli_query($connection, $queryToClearTable);
}
?>

<!-- For deleting individual notes -->
<?php
if (isset($_GET['delete'])) {
    $key = $_GET['delete'];
    $queryToDeleteARow = "DELETE FROM notes WHERE id = '$key'";
    $result = mysqli_query($connection, $queryToDeleteARow);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iNotes - Everything at one place</title>
    <link rel="stylesheet" href="./styling.css">
</head>

<body>
    <h1 id="header">iNotes - All your notes at one place</h1>
    <div class="form-container">
        <form action="./index.php" method="post">
            <div class="form-item">
                <label for="title">Title Here</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="form-item">
                <label for="description">Description Here</label>
                <textarea name="description" id="description" cols="50" rows="10"></textarea>
            </div>
            <div class="form-item">
                <button type="submit" id="submit">Add Note</button>
                <span id="delete-all">Delete All Notes</span>
            </div>
        </form>
    </div>
    <div class="notes-container">
        <span>List Of Your Notes</span>
        <table>
            <thead>
                <tr>
                    <th>SNo.</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Time Of Creation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $queryToGetData = "SELECT * FROM notes;";
                $tableData = mysqli_query($connection, $queryToGetData);
                $count = 0;
                while ($currentRow = mysqli_fetch_assoc($tableData)) {
                    $count++;
                    echo "<tr>
                            <th>$count</th>
                            <th>" . $currentRow['title'] . "</th>
                            <td>" . $currentRow['description'] . "</td>
                            <td style='display: none;'>" . $currentRow['id'] . "</td>
                            <td>" . $currentRow['timestmp'] . "</td>
                            <td><span class='edit-btn'>Edit</span> <span class='delete-btn'>Delete</span></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

<script src="./scripting.js"></script>

</html>