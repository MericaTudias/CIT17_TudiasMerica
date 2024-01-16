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
        echo "Student ID: " . $row["StudentId"]. "<br>"
        . "First Name: " . $row["FirstName"]. "<br>"
        . "Last Name: " . $row["FirstLast"]. "<br>"
        . "Date of Birth: " . $row["DateOfBirth"]. "<br>"
        . "Email: " . $row["Email"]. "<br>"
        . "Phone: " . $row["Phone"]. "<br>"
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>