<?php
    require_once "setup.php";
    if(isset($_POST['submituser'])){

        $userid = $_POST['userid'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $userpassword = $_POST['userpassword'];

        if($userid != "" && $username != "" && $email != "" && $userpassword != ""){
            $sql = "INSERT INTO user (`userid`, `username`, `email`, `userpassword`) VALUES ('$userid', '$username', '$email', '$userpassword')";
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