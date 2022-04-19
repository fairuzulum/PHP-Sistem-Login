<?php

// use LDAP\Result;

session_start();
require 'functions.php';

// if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
//     $id = $_COOKIE['id'];
//     $key = $_COOKIE['key'];

//     $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
//     $row = mysqli_fetch_assoc($result);

//     if ($key === hash('sha256', $row['username'])) {
//         $_SESSION['login'] = true;
//     }
// }

// if($_SESSION['level']=="admin"){
//     header("location:admin.php");
// } 
// if($_SESSION['level']=="siswa"){
//     header("location:index.php");
// } 
// if($_SESSION['level']==""){
//     header("location:index.php");
//     exit;
// }

// if (isset($_SESSION["login"])) {
//     header("Location: index.php");
//     exit;
// }

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        if ($row['level'] == "admin") {
            if (password_verify($password, $row["password"])) {
                $_SESSION["login"] = true;
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "admin";
                header("Location: admin.php");
            }
        } else if ($row['level'] == "siswa") {

            if (password_verify($password, $row["password"])) {
                $_SESSION["login"] = true;
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "siswa";
                header("Location: index.php");
            }
        } else if ($row['level'] == "") {

            if (password_verify($password, $row["password"])) {
                $_SESSION["login"] = true;
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "";
                header("Location: index.php");
            }
        } else {
            header("Location: login.php");
            exit;
        }
    }
    $error = true;
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

        .form-check {
            display: none;
        }
    </style>
    <title>Halaman Login</title>
</head>

<body>
    <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form action="" method="post" class="form-container">
                    <h4 class="text-center font-weight-bold"> Login </h4>
                    <?php if (isset($error)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <p style="text-align: center;">username atau password salah</p>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" name="password" id="InputPassword" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <br>
                    <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                    <div class="form-footer mt-2">
                        <p> Belum punya akun? <a href="registrasi.php">Daftar</a></p>
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