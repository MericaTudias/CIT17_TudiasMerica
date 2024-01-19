<!DOCTYPE html>
<html lang="en">
<?php
    require_once "setup.php";
    if(isset($_POST["userid"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["userpassword"])){
        $userid = $_POST['userid'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $userpassword = $_POST['userpassword'];
        $sql = "UPDATE user SET `userid`= '$userid', `username`= '$username', `email`= '$email', `userpassword`= '$userpassword' WHERE userid = ".$_GET["id"];
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
    <title>Users Update Form</title>
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
        <h1 style="text-align: center;margin: 50px 0;">User Update Form</h1>
        <div class="container">
            <?php 
                require_once "setup.php";
                $sql_query = "SELECT * FROM user WHERE userid = ".$_GET["id"];
                if ($result = $conn ->query($sql_query)) {
                    while ($row = $result -> fetch_assoc()) { 
                        $UserID = $row['UserID'];
                        $UserName = $row['UserName'];
                        $Email = $row['Email'];
                        $UserPassword = $row['UserPassword'];
            ?>
                            <form action="UpdateUser.php?id=<?php echo $UserID; ?>" method="post">
                                <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="userid">User ID</label>
                                            <input type="int" class="form-control" id="userid" placeholder="User ID" name ="userid" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="username">Name</label>
                                            <input type="varchar" class="form-control" id="username" placeholder="Username" name ="username" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="email">Email</label>
                                            <input type="varchar" class="form-control" id="email" placeholder="Email" name ="email" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="userpassword">Password</label>
                                            <input type="varchar" class="form-control" id="userpassword" placeholder="Password" name ="userpassword" required>
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