<?php
include("dbConnection.php");
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;
    $query = "DELETE FROM student WHERE ID = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }

    header("Location: index.php");
}
