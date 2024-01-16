<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PHPScriptDemo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected Successfully", "<br>";

$sql = "select * from Student";
$result = $conn->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "Student ID: " . $row["StudentID"]. "<br>"
        . "First Name: " . $row["FirstName"]. "<br>"
        . "Last Name: " . $row["FirstLast"]. "<br>"
        . "Date of Birth: " . $row["DateOfBirth"]. "<br>"
        . "Email: " . $row["Email"]. "<br>"
        . "Phone: " . $row["Phone"]. "<br>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "select * from Course";
$result = $conn->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "Course ID: " . $row["CourseID"]. "<br>"
        . "Course Name: " . $row["CourseName"]. "<br>"
        . "Credits: " . $row["Credits"]. "<br>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "select * from Instructor";
$result = $conn->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "Instructor ID: " . $row["InstructorID"]. "<br>"
        . "First Name: " . $row["FirstName"]. "<br>"
        . "Last Name: " . $row["FirstLast"]. "<br>"
        . "Email: " . $row["Email"]. "<br>"
        . "Phone: " . $row["Phone"]. "<br>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "select * from Enrollment";
$result = $conn->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "Enrollment ID: " . $row["EnrollmentID"]. "<br>"
        . "Student ID: " . $row["StudentID"]. "<br>"
        . "Course ID: " . $row["CourseID"]. "<br>"
        . "Enrollment Date: " . $row["EnrollmentDate"]. "<br>"
        . "Grade: " . $row["Grade"]. "<br>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>