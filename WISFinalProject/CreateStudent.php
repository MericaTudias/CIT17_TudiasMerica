<?php
    require_once "setup.php";
    if(isset($_POST['submitstudent'])){

        $studentid = $_POST['studentid'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $dateofbirth = $_POST['dateofbirth'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if($studentid != "" && $firstname != "" && $lastname != "" && $dateofbirth != "" && $email != "" && $phone != ""){
            $sql = "INSERT INTO student (`studentid`, `firstname`, `lastname`, `dateofbirth`, `email`, `phone`) VALUES ('$studentid', '$firstname', '$lastname', '$dateofbirth', '$email', '$phone')";
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