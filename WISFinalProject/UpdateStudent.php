<!DOCTYPE html>
<html lang="en">
<?php
    require_once "setup.php";
    if(isset($_POST["studentid"]) && isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["dateofbirth"]) && isset($_POST["email"]) && isset($_POST["phone"])){
        $studentid = $_POST['studentid'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $dateofbirth = $_POST['dateofbirth'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sql = "UPDATE student SET `studentid`= '$studentid', `firstname`= '$firstname', `lastname`= '$lastname', `dateofbirth`= '$dateofbirth', `email`= '$email', `phone`= '$phone' WHERE studentid = ".$_GET["id"];
        if (mysqli_query($conn, $sql)) {
            header("location: index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Update Form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <h1 style="text-align: center;margin: 50px 0;">Student Update Form</h1>
        <div class="container">
            <?php 
                require_once "setup.php";
                $sql_query = "SELECT * FROM student WHERE studentid = ".$_GET["id"];
                if ($result = $conn ->query($sql_query)) {
                    while ($row = $result -> fetch_assoc()) { 
                        $StudentID = $row['StudentID'];
                        $FirstName = $row['FirstName'];
                        $LastName = $row['LastName'];
                        $DateOfBirth = $row['DateOfBirth'];
                        $Email = $row['Email'];
                        $Phone = $row['Phone'];
            ?>
                            <form action="UpdateStudent.php?id=<?php echo $StudentID; ?>" method="post">
                                <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="">Student ID</label>
                                            <input type="int" class="form-control" id="studentid" placeholder="Student ID" name ="studentid" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="">First name</label>
                                            <input type="varchar" class="form-control" id="firstname" placeholder="First name" name ="firstname" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="">Last name</label>
                                            <input type="varchar" class="form-control" id="lastname" placeholder="Last name" name ="lastname" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="">Date of Birth</label>
                                            <input type="varchar" class="form-control" id="dateofbirth" placeholder="Date of Birth" name ="dateofbirth" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="">Email</label>
                                            <input type="varchar" class="form-control" id="email" placeholder="Email" name ="email" aria-describedby="inputGroupPrepend2" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="">Phone</label>
                                            <input type="varchar" class="form-control" id="phone" placeholder="Phone" name ="phone" required>
                                        </div>
                                        <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                                            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Update">
                                        </div>
                                </div>
                            </form>
            <?php 
                    }
                }
            ?>
        </div>
    </section>
</body>
</html>