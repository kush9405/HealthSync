<?php
    $login=false;
    $showError=false;
if ($_SERVER['REQUEST_METHOD']=="POST") {
    include 'partials/_dbconnect.php';
    $username=$_POST["username"];
    $password=$_POST["password"];
        $sql="SELECT * from Users where username='$username' AND password='$password'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if ($num>=1) {
            $login=true;
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            header("location:welcome.php");
        }
    else {
        $showError="Invalid Credentials";
    }
}
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            padding-top: 70px; 
        } 
        .logo img {
            max-width: 70px;
            margin-right: 10px;
        }
        .rounded-box {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
  </head>
  <body>
  <?php
    require 'partials/_nav.php'
    ?>
    <?php
    if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> Success!</strong> You are logged in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>'. $showError.'</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
        ?>
        
        <div class="container mt-5 p-5">
        <div class="row">
        <div class="col-md-6">
                <img src="https://static.vecteezy.com/system/resources/previews/000/662/016/original/doctors-group-happy-medical-team-vector.jpg" class="img-fluid" alt="Left Image">
            </div>
            <div class="col-md-6">
            <h1 class="text-center">Login to Our Website</h1>
        <form action="/loginsys/login.php" method="post" style="display: flex; flex-direction: column; align-items: center;">
        <div class="mb-3 col-md-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>




