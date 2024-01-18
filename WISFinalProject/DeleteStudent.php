<?php
    require_once "setup.php";
    $id = $_GET["id"];
    $query = "DELETE FROM student WHERE studentid = '$id'";
    if (mysqli_query($conn, $query)) {
        header("location: index.php");
    } else {
        echo "Something went wrong. Please try again later.";
    }
?>