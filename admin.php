<?php 
   $host = 'localhost';
   $username = 'root';
   $password = '';
   $database = 'db';
   
   $conn = new mysqli($host, $username, $password, $database);
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="coronavirus.png"/>
<title>ADMIN</title>
<header style="text-align:center">
	<a href="index.php">
	<img src="AdobeStock_331522813-2048x1365-removebg-preview.png"></a>
</header>
<link rel="icon" type="image/png" href="coronavirus.png"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <br>
        <h4 style="text-align:center; font-size:50px;">Admin Dashboard</h4>
        <br><br><br><br>
        <h2>Users</h2><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" style="text-align:center;">Username</th>
                    <th scope="col" style="text-align:center;">Name</th>
                    <th scope="col" style="text-align:center;">Phone No</th>
                    <th scope="col" style="text-align:center;">Password</th>
                    <th scope="col" style="text-align:center;">Operations</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                $query = "SELECT * FROM form";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $usr = $row['usr'];
                        $name = $row['name'];
                        $ph = $row['ph'];
                        $pwd = $row['pwd'];
                        echo '<tr>
                            <th scope="row"style="text-align:center;">' . $usr . '</th>
                            <td style="text-align:center;">' . $name . '</td>
                            <td style="text-align:center;">' . $ph . '</td>
                            <td style="text-align:center;">' . $pwd . '</td>
                            <td style="text-align:center;">
                                <button class="btn btn-primary" style="text-align:center;">
                                    <a href="update.php?updateid=' . $usr . '" class="text-light">Update</a>
                                </button>
                                <button class="btn btn-danger" style="text-align:center;">
                                    <a href="delete.php?deleteid=' . $usr . '" class="text-light">Delete</a>
                                </button>
                            </td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
        <br><br><br>
        <h2>Bookings</h2><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" style="text-align:center;">Booking_id</th>
                    <th scope="col" style="text-align:center;">Name</th>
                    <th scope="col" style="text-align:center;">Phone No</th>
                    <th scope="col" style="text-align:center;">Date</th>
                    <th scope="col" style="text-align:center;">Operations</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                $query = "SELECT * FROM bookings";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $bid = $row['bid'];
                        $name = $row['full_name'];
                        $ph = $row['phone'];
                        $date = $row['test_date'];
                        echo '<tr>
                            <th scope="row"style="text-align:center;">' . $bid . '</th>
                            <td style="text-align:center;">' . $name . '</td>
                            <td style="text-align:center;">' . $ph . '</td>
                            <td style="text-align:center;">' . $date . '</td>
                            <td style="text-align:center;">
                                <button class="btn btn-danger" style="text-align:center;">
                                    <a href="booking_delete.php?deleteid=' . $bid . '" class="text-light">Delete</a>
                                </button>
                            </td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
       
        <br><br><br>
        <h2>Diagnostics</h2><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" style="text-align:center;">ID</th>
                    <th scope="col" style="text-align:center;">Name</th>
                    <th scope="col" style="text-align:center;">Phone No</th>
                    <th scope="col" style="text-align:center;">Date</th>
                    <th scope="col" style="text-align:center;">Operations</th>
                </tr>
            </thead>
            <tbody> 
                <?php
                $query = "SELECT * FROM diagnostics";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $did = $row['did'];
                        $name = $row['name'];
                        $ph = $row['ph'];
                        $date = $row['timestamp'];
                        echo '<tr>
                            <th scope="row"style="text-align:center;">' . $did . '</th>
                            <td style="text-align:center;">' . $name . '</td>
                            <td style="text-align:center;">' . $ph . '</td>
                            <td style="text-align:center;">' . $date . '</td>
                            <td style="text-align:center;">
                                <button class="btn btn-danger" style="text-align:center;">
                                    <a href="diag_delete.php?deleteid=' . $did . '" class="text-light">Delete</a>
                                </button>
                            </td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
            </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
