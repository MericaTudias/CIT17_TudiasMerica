<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "StudentInfo";

$conn = new mysqli($servername, $username, $password, $dbname);

if  ($cinn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

# Insert data
$id = 1;
$username = "SwiftTaylor";
$email = "swift@example.com";

$sql = "INSERT INTO users (id, username, email) VALUES ('$id', '$username', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Record created successfully";
    $id += 1;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

# Select data
$sql = "SELECT id, username, email FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> ID: " . $row["id"]. "Username: " . $row["username"]. "Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

# Update data
$newUsername = "UpdatedSwiftTaylor";
$idToUpdate = 1;

$sql = "UPDATE users SET username='$newUsername' WHERE id=$idToUpdate";

if ($conn->query($sql) === TRUE) {
    echo "Record update successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

# Select Update data
$sql ="SELECT id, username, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> ID: " . $row["id"]. "Username: " . $row["username"]. "Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

# Delete data
$idToDelete = 1;
$sql = "DELETE FROM users WHERE id=$idToDelete";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleted record: " . $conn->error;
}

# Selected Updated Deleted data
$sql = "SELECT id, username, emaol FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> ID: " . $row["id"]. "Username: " . $row["username"]. "Email: " . $row["email"]. "<br>";
    }
} else {
    echo "<br> ) results";
}

$conn->close();
?>