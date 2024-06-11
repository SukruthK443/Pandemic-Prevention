<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$test_date = $_POST['test_date'];


$sql = "INSERT INTO bookings (full_name, phone, test_date) VALUES ('$full_name', '$phone', '$test_date')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Booking Succesful !! We will contact you shortly')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <script type="text/javascript">
        setTimeout(function () {
            window.location.href = 'dbms.html';
        }, 2000);
    </script>
</body>
</html>