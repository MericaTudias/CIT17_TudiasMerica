<!DOCTYPE html>
<html lang="en">
<?php
    require_once "setup.php";
    if(isset($_POST["courseid"]) && isset($_POST["coursename"]) && isset($_POST["credits"])){
        $courseid = $_POST['courseid'];
        $coursename = $_POST['coursename'];
        $credits = $_POST['credits'];
        $sql = "UPDATE course SET `courseid`= '$courseid', `coursename`= '$coursename', `credits`= $credits WHERE courseid = ".$_GET["id"];
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
    <title>Course Update Form</title>
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
        <h1 style="text-align: center;margin: 50px 0;">Course Update Form</h1>
        <div class="container">
            <?php 
                require_once "setup.php";
                $sql_query = "SELECT * FROM course WHERE courseid = ".$_GET["id"];
                if ($result = $conn ->query($sql_query)) {
                    while ($row = $result -> fetch_assoc()) { 
                        $CourseID = $row['CourseID'];
                        $CourseName = $row['CourseName'];
                        $Credits = $row['Credits'];
            ?>
                            <form action="UpdateCourse.php?id=<?php echo $CourseID; ?>" method="post">
                                <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="">Course ID</label>
                                            <input type="int" class="form-control" id="courseid" placeholder="Course ID" name ="courseid" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="">Course name</label>
                                            <input type="varchar" class="form-control" id="coursename" placeholder="Course name" name ="coursename" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="">Credits</label>
                                            <input type="varchar" class="form-control" id="credits" placeholder="Credits" name ="credits" required>
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