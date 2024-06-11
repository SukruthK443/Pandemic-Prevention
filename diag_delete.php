<?php 
   $host = 'localhost';
   $username = 'root';
   $password = '';
   $database = 'db';
   
   $conn = new mysqli($host, $username, $password, $database);
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
   }
    $query = "DELETE FROM diagnostics WHERE `did` = $id ";
    $result = mysqli_query($conn,$query);

    if ($result) {
        echo "<script type='text/javascript'>alert('Deleted Succesfully')</script>"; 
    }else{
        die(mysqli_error($conn));
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <script type="text/javascript">
        setTimeout(function () {
            window.location.href = 'admin.php';
        }, 200);
    </script>
</body>
</html>