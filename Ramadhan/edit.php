<?php 

include "database.php";

$id = $_GET['id'];

$query = "SELECT * FROM tadarus where id= '$id'";
$data = $db->prepare($query);
$data->execute();

$row = $data->fetch();

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

<body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand text-info" href="#">Ramadhan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Tentang.php">Tentang</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Tadarus.php">Tadarus</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS8_zEviatQNpcKB0wacMSxrzTiZ6ecyQrmOzVhw1f5bmlWaSyb&usqp=CAU"
                        alt="" width="100%" height="200">
                </div>
                <div class="text-center">
                    <h1>Daftar nama Tadarus</h1>
                </div>
                <form method="POST" action="editdata.php?id=<?php echo $row['id']?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?php echo $row['nama']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">jenis kelamin</label>
                        <input type="text" name="jenis" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?php echo $row['kelamin']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?php echo $row['alamat']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ayat</label>
                        <input type="text" name="ayat" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?php echo $row['ayat']?>">
                    </div>

                    <button type="submit" name="edit" class="btn btn-primary">edit data</button>
                </form>
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