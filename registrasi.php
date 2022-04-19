<?php
require 'functions.php';


if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('user berhasil ditambahkan');
            document.location.href = 'login.php';
              </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- costum css -->
    <style>
        /* mengatur warna backgroud dan padding pada tag body bagian atas agar form tidak menempel diatas */
        body {
            background-image: url(img/login.jpg);
            padding-top: 10vh;
        }

        /* mengatur warna backgroud form */
        form {
            background: #fff;
        }

        /* mengatur border dan padding class form-container */
        .form-container {
            border-radius: 10px;
            padding: 30px;
        }
    </style>
</head>

<body>
    <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form action="" method="post" class="form-container">
                    <h4 class="text-center font-weight-bold"> Sign-Up </h4>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="nama" id="name" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Alamat Email</label>
                        <input type="email" class="form-control" name="email" id="InputEmail" aria-describeby="emailHelp" placeholder="Masukkan email">
                    </div>
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" name="password" id="InputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Re-Password</label>
                        <input type="password" class="form-control" name="password2" id="InputRePassword" placeholder="Re-Password">

                    </div>
                    <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
                    <div class="form-footer mt-2">
                        <p> Sudah punya account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </section>
        </section>
    </section>

    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, danyang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>