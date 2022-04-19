<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require 'functions.php';

$siswa = query("SELECT * FROM siswa ORDER BY nis ASC");

if (isset($_POST["cari"])) {
    $siswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="icofont/icofont.min.css">
    <title>Data Siswa</title>
    <style>
        body {
            background-image: url(img/login.jpg);
        }

        .container {
            margin-top: 80px;

        }
        .loader {
         width: 20px;
            position: absolute;
           
            right: 550px;
            bottom: 2px;
           
          

        }
        h1 {
            text-align: center;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
        }
        .menu {
            margin-bottom: 10px;
        }

        .keluar a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .keluar a:hover {
            color: grey;
        }

        .table {
            background-color: #007bff;
        }

    </style>
</head>

<body>

    <nav class="navbar fixed-top navbar-light bg-light">
        <div class="container-fluid keluar">
            <a class="navbar-brand" href="#">
                <ion-icon size="large" name="code-slash"></ion-icon>
                RPL
                <a href="logout.php">
                    <ion-icon name="exit"></ion-icon>Logout
                </a>
        </div>
    </nav>
    <div class="container">
        <nav class="menu">
            <div class="row">
                <div class="col hd">

                </div>
                <div class="col">
                    <form action="" method="post">
     
                        <div class="input-group">
                            <input class="form-control" type="text" name="keyword" placeholder="search" autocomplete="off" id="keyword">
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <div class="table-responsive-sm" id="container">
            <table class="table table-bordered table-hover table-light">
                <thead class="table">
                    <tr style="color: white;">
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                    </tr>
                </thead>
          
                <?php foreach ($siswa as $row) : ?>
                    <tr>
                        <td><?= $row["nis"]; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["kelas"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js">
    </script>
</body>

</html>