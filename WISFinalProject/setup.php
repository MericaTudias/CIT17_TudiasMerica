<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Tudias";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error creating database: " . $conn->error;
}

$retval = mysqli_select_db( $conn, 'Tudias' );

$sql = "CREATE TABLE IF NOT EXISTS User (
    UserID int not null,
    UserName varchar(255),
    Email varchar(255),
    UserPassword varchar(255),
    PRIMARY KEY(UserID))";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error creating table: " . $conn->error;
    }

$sql = "CREATE TABLE IF NOT EXISTS Student (
    StudentID int not null,
    FirstName varchar(255),
    LastName varchar(255),
    DateOfBirth varchar(255),
    Email varchar(255),
    Phone varchar(255),
    PRIMARY KEY(StudentID))";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error creating table: " . $conn->error;
    }

$sql = "CREATE TABLE IF NOT EXISTS Course (
    CourseID int not null,
    CourseName varchar(255),
    Credits varchar(255),
    PRIMARY KEY(CourseID))";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error creating table: " . $conn->error;
    }

$sql = "CREATE TABLE IF NOT EXISTS Instructor (
    InstructorID int not null,
    FirstName varchar(255),
    LastName varchar(255),
    Email varchar(255),
    Phone varchar(255),
    PRIMARY KEY(InstructorID))";
    
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error creating table: " . $conn->error;
    }

$sql = "CREATE TABLE IF NOT EXISTS Enrollment (
    EnrollmentID int not null,
    StudentID int(255),
    CourseID int(255),
    FOREIGN KEY(StudentID) REFERENCES Student(StudentID),
    FOREIGN KEY(CourseID) REFERENCES Course(CourseID),
    EnrollmentDate varchar(255),
    Grade varchar(255),
    PRIMARY KEY(EnrollmentID))";
    
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error creating table: " . $conn->error;
    }
?>