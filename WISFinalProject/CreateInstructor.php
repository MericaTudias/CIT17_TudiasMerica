<?php
    require_once "setup.php";
    if(isset($_POST['submitinstructor'])) {

        $instructorid = $_POST['instructorid'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if($instructorid != "" && $firstname != "" && $lastname != "" && $email != "" && $phone != ""){
            $sql = "INSERT INTO instructor (`instructorid`, `firstname`, `lastname`, `email`, `phone`) VALUES ('$instructorid', '$firstname', '$lastname', '$email', '$phone')";
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