<?php
include "database.php";

if(isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

   

    $query = "INSERT INTO user VALUE (null, '$email', '$password')";
    $SQL = $db->prepare($query);
    $SQL ->execute();
    header("Location: index.php");
}




?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

<body class="bg-secondary">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" </div> <div class="form-group">
                        <label for="exampleInputEmail1">username</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" </div> <div class="form-group row">
                        <div class="col">
                            <label for="exampleInputEmail1">password</label>
                            <input type="password" name="password" class="form-control" />
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1">confirm Password</label>
                            <input type="password" name="password2" class="form-control" />
                        </div>
                    </div>
                    <div class=" form-group text-center">
                        <button type="submit" name="register" class="btn btn-primary">Register</button>
                    </div>
                </form>
                <a href="index.php">Sudah punya akun? Login</a>
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