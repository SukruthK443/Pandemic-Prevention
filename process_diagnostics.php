<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$ph = $_POST['ph'];


$sql = "INSERT INTO diagnostics (name, ph) VALUES ('$name', '$ph')";

if ($conn->query($sql) === TRUE) {
    header("location: Diagnostics-2.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
