<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIS Final Project</title>
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
        <h1 style="text-align: center;margin: 50px 0;">Users Form</h1>
        <div class="container">
         <form action="CreateUser.php" method="post">
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
                <input type="submit" name="submituser" id="submituser" class="btn btn-primary">
            </div>
          </div>
         </form>
        </div>
    </section>
    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "setup.php";
                        $sql_query = "SELECT * FROM user";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $UserID = $row['UserID'];
                                $UserName = $row['UserName'];
                                $Email = $row['Email'];
                                $UserPassword = $row['UserPassword'];
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $UserID; ?></td>
                        <td><?php echo $UserName; ?></td>
                        <td><?php echo $Email; ?></td>
                        <td><?php echo $UserPassword; ?></td>
                        <td><a href="UpdateUser.php?id=<?php echo $UserID; ?>" class="btn btn-primary">Update</a></td>
                        <td><a href="DeleteUser.php?id=<?php echo $UserID; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
                            } 
                        } 
                    ?>
                </tbody>
              </table>
        </div>
    </section>
    <section>
        <h1 style="text-align: center;margin: 50px 0;">Student Form</h1>
        <div class="container">
         <form action="CreateStudent.php" method="post">
          <div class="row">
            <div class="col-md-4 mb-3">
                <label for="studentid">Student ID</label>
                <input type="int" class="form-control" id="studentid" placeholder="Student ID" name ="studentid" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="firstname">First name</label>
                <input type="varchar" class="form-control" id="firstname" placeholder="First name" name ="firstname" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="lastname">Last name</label>
                <input type="varchar" class="form-control" id="lastname" placeholder="Last name" name ="lastname" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="dateofbirth">Date of Birth</label>
                <input type="varchar" class="form-control" id="dateofbirth" placeholder="Date of Birth" name ="dateofbirth" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="email">Email</label>
                <input type="varchar" class="form-control" id="email" placeholder="Email" name ="email" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="phone">Phone</label>
                <input type="varchar" class="form-control" id="phone" placeholder="Phone" name ="phone" required>
            </div>
            <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                <input type="submit" name="submitstudent" id="submitstudent" class="btn btn-primary">
            </div>
          </div>
         </form>
        </div>
    </section>
    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "setup.php";
                        $sql_query = "SELECT * FROM student";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $StudentID = $row['StudentID'];
                                $FirstName = $row['FirstName'];
                                $LastName = $row['LastName'];
                                $DateOfBirth = $row['DateOfBirth'];
                                $Email = $row['Email'];
                                $Phone = $row['Phone'];
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $StudentID; ?></td>
                        <td><?php echo $FirstName; ?></td>
                        <td><?php echo $LastName; ?></td>
                        <td><?php echo $DateOfBirth; ?></td>
                        <td><?php echo $Email; ?></td>
                        <td><?php echo $Phone; ?></td>
                        <td><a href="UpdateStudent.php?id=<?php echo $StudentID; ?>" class="btn btn-primary">Update</a></td>
                        <td><a href="DeleteStudent.php?id=<?php echo $StudentID; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
                            } 
                        } 
                    ?>
                </tbody>
              </table>
        </div>
    </section>
    <section>
        <h1 style="text-align: center;margin: 50px 0;">Course Form</h1>
        <div class="container">
         <form action="CreateCourse.php" method="post">
          <div class="row">
            <div class="col-md-4 mb-3">
                <label for="courseid">Course ID</label>
                <input type="int" class="form-control" id="courseid" placeholder="Course ID" name ="courseid" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="coursename">Course name</label>
                <input type="varchar" class="form-control" id="coursename" placeholder="Course name" name ="coursename" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="credits">Credits</label>
                <input type="varchar" class="form-control" id="credits" placeholder="Credits" name ="credits" required>
            </div>
            <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                <input type="submit" name="submitcourse" id="submitcourse" class="btn btn-primary">
            </div>
          </div>
         </form>
        </div>
    </section>
    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Course ID</th>
                    <th scope="col">Course name</th>
                    <th scope="col">Credits</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "setup.php";
                        $sql_query = "SELECT * FROM course";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $CourseID = $row['CourseID'];
                                $CourseName = $row['CourseName'];
                                $Credits = $row['Credits'];
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $CourseID; ?></td>
                        <td><?php echo $CourseName; ?></td>
                        <td><?php echo $Credits; ?></td>
                        <td><a href="UpdateCourse.php?id=<?php echo $CourseID; ?>" class="btn btn-primary">Update</a></td>
                        <td><a href="DeleteCourse.php?id=<?php echo $CourseID; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
                            } 
                        } 
                    ?>
                </tbody>
              </table>
        </div>
    </section>
    <section>
        <h1 style="text-align: center;margin: 50px 0;">Instructor Form</h1>
        <div class="container">
         <form action="CreateInstructor.php" method="post">
          <div class="row">
            <div class="col-md-4 mb-3">
                <label for="instructorid">Instructor ID</label>
                <input type="int" class="form-control" id="instructorid" placeholder="Instructor ID" name ="instructorid" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="firstname">First name</label>
                <input type="varchar" class="form-control" id="firstname" placeholder="First name" name ="firstname" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="lastname">Last name</label>
                <input type="varchar" class="form-control" id="lastname" placeholder="Last name" name ="lastname" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="email">Email</label>
                <input type="varchar" class="form-control" id="email" placeholder="Email" name ="email" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="phone">Phone</label>
                <input type="varchar" class="form-control" id="phone" placeholder="Phone" name ="phone" required>
            </div>
            <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                <input type="submit" name="submitinstructor" id="submitinstructor" class="btn btn-primary">
            </div>
          </div>
         </form>
        </div>
    </section>
    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Instructor ID</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "setup.php";
                        $sql_query = "SELECT * FROM instructor";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $InstructorID = $row['InstructorID'];
                                $FirstName = $row['FirstName'];
                                $LastName = $row['LastName'];
                                $Email = $row['Email'];
                                $Phone = $row['Phone'];
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $InstructorID; ?></td>
                        <td><?php echo $FirstName; ?></td>
                        <td><?php echo $LastName; ?></td>
                        <td><?php echo $Email; ?></td>
                        <td><?php echo $Phone; ?></td>
                        <td><a href="UpdateInstructor.php?id=<?php echo $InstructorID; ?>" class="btn btn-primary">Update</a></td>
                        <td><a href="DeleteInstructor.php?id=<?php echo $InstructorID; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
                            } 
                        } 
                    ?>
                </tbody>
              </table>
        </div>
    </section>
</body>
</html>