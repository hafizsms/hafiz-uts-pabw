<?php
include "database.php";

if (isset($_POST['login'])){

    $email=$_POST['email'];
    $password=$_POST['password'];

    

    $query= "SELECT * FROM user WHERE username = '$email'";
    $data=$db->prepare($query);
    $data->execute();
    
    $ketemu = $data->rowCount();
  
    
    if($ketemu > 0){
      $user = $data->fetch();

     
      
      if ($password == $user['password']){
        header("location: home.php");
      }

    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

  <title>Hello, world!</title>
</head>

<body class="bg-secondary">
  <div class="container mt-5">
    <div class="card">
      <div class="card-body">
        <form method= "POST" action="">
        <div class="row">
          <div class="col-md-2">
            <img src="https://img.idwebhost.com/cdn/suspend/suspend.svg" alt="" width="300" height="300">
          </div>
          <div class="col-md-6 offset-3">
            <h1 class="text-center">selamat datang</h1>
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" />
                  <div class="text-center">
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                  </div>
            </form>
            <a href="register.php">Belum punya akun?</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

</html>