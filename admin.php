<?php
session_start();
if ($_SESSION['level'] == "" || $_SESSION['level'] == "siswa") {
    echo "
    <script>
    alert('CIE MAU MASUK YA (≧▽≦)');
    document.location.href = 'login.php';
    </script>
    ";
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
    <title>Halaman Admin</title>
    <style>
        body {
            background-image: url(img/background.jpg);
        }

        .container {
            margin-top: 80px;
        }

        h1 {
            text-align: center;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
        }

        .menu {
            margin-bottom: 10px;
        }

        .akk ion-icon {
            font-size: 24px;
        }

        .akk .abc1 ion-icon {
            color: green;
        }

        .akk .abc2 ion-icon {
            color: red;
        }

        .keluar a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .keluar a:hover {
            color: grey;
        }

        .hd {
            display: none;
        }

        /* .none,
        .akk {
            display: none;
        } */
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
                <div class="col none">
                    <a class="btn btn-primary" href="tambah.php">Add
                        <ion-icon name="person-add-sharp"></ion-icon>
                    </a>
                </div>
                <div class="col">
                    <form action="" method="post">
                        <div class="input-group">
                            <div>
                                <a class="btn btn-primary" href="admin.php">
                                    <i class="icofont-refresh"></i>
                                </a>
                            </div>
                            <input class="form-control" type="text" name="keyword" placeholder="search" autocomplete="off">
                            <!-- <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" name="cari"><i class="icofont-search"></i></button>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </nav>

        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover table-light">
                <thead class="table-dark">
                    <tr>
                        <th class="none" scope="col">No</th>
                        <th class="none" scope="col">Aksi</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                <?php foreach ($siswa as $row) : ?>
                    <tr>
                        <th class="none" scope="row"><?= $i; ?></th>
                        <td class="akk">
                            <a class="abc1" href="ubah.php?id= <?= $row["id"]; ?>">
                                <ion-icon name="create"></ion-icon>
                            </a>
                            <a class="abc2" href="hapus.php?id= <?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">
                                <ion-icon name="trash-bin"></ion-icon>
                            </a>
                        </td>
                        <td><?= $row["nis"]; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["kelas"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>