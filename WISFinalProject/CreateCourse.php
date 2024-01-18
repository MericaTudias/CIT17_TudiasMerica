<?php
    require_once "setup.php";
    if(isset($_POST['submitcourse'])) {

        $courseid = $_POST['courseid'];
        $coursename = $_POST['coursename'];
        $credits = $_POST['credits'];

        if($courseid != "" && $coursename != "" && $credits != ""){
            $sql = "INSERT INTO course (`courseid`, `coursename`, `credits`) VALUES ('$courseid', '$coursename', '$credits')";
            if (mysqli_query($conn, $sql)) {
                header("location: index.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }
        } else {
            echo "Please fill up the required information!";
        }
    }
?>