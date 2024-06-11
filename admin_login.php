<?php
  session_start();
  include('db.php');
  

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $user_name = $_POST['usr'];
    $password = $_POST['pwd'];
    
    if(!empty($user_name) && !empty($password))
    {
      $query = "select * from admin where usr = '$user_name' limit 1";
      $result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysqli_num_rows($result) > 0)
        {
          $user_data = mysqli_fetch_assoc($result);
          if ($user_data['pwd'] == $password) {
            header("location: admin.php");
            die;
          }
        }
      }
  
      echo "<script type='text/javascript'>alert('Please check Username and Password')</script>";
    }
    else{
      echo "<script type='text/javascript'>alert('Please check Username and Password')</script>";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="coronavirus.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: white;
    background-size: cover;
    background-position: center;
  }
  .wrapper{
    width: 420px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(9px);
    color: #000000;
    border-radius: 12px;
    padding: 30px 40px;
  }
  .wrapper h1{
    font-size: 36px;
    text-align: center;
  }
  .wrapper .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
  }
  .input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color: #000000000;
    padding: 20px 45px 20px 20px;
  }
  .input-box input::placeholder{
    color: #000000;
  }
  .input-box i{
    position: absolute;
    right: 20px;
    top: 30%;
    transform: translate(-50%);
    font-size: 20px;
  
  }
  .wrapper .remember-forgot{
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
  }
  .remember-forgot label input{
    accent-color: #fff;
    margin-right: 3px;
  
  }
  .remember-forgot a{
    color: #fff;
    text-decoration: none;
  
  }
  .remember-forgot a:hover{
    text-decoration: underline;
  }
  .wrapper .btn{
    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
  }
  .wrapper .register-link{
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
  
  }
  .register-link p a{
    color: black;
    text-decoration: none;
    font-weight: 700;
  }
  .register-link p a:hover{
    text-decoration: underline;
  }
</style>
<title>COVID</title>
</head>
<body>

<header>
	<a href="dbms.html">
	<img src="AdobeStock_331522813-2048x1365-removebg-preview.png"></a>
</header>
<div class="login">
    <div class="wrapper">
      <form method="POST">
        <h1>Admin 😎</h1>
        <div class="input-box">
          <input type="text" placeholder="Username" required name='usr'>
          <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Password" required name='pwd'>
          <i class='bx bxs-lock-alt' ></i>
        </div>
        <button type="submit" class="btn">Login</button>
      </form>
    </div>
</div>
</body>
</html>