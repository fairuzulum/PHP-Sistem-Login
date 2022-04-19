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

$id = $_GET["id"];
$sw = query("SELECT * FROM siswa WHERE id = $id")[0];

$conn = mysqli_connect("localhost", "root", "", "phpdasar");
if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil diubah');
        document.location.href = 'admin.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal diubah');
        document.location.href = 'admin.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update data</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Update Data Siswa</h3>
            </div>
            <div class="panel-body">
                <form action="" method="post" id="form_id">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $sw["id"]; ?>">

                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input class="form-control" type="text" name="nis" id="nis" required value="<?= $sw["nis"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama" required value="<?= $sw["nama"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select id="kelas" name="kelas" class="form-control">
                                <option value=""> -- Pilih Kelas -- </option>
                                <option <?php if (!empty($cari)) {
                                            echo $cari == 'XI RPL 1' ? 'selected' : '';
                                        } ?> value="XI RPL 1">XI RPL 1</option>
                                <option <?php if (!empty($cari)) {
                                            echo $cari == 'XI RPL 2' ? 'selected' : '';
                                        } ?> value="XI RPL 2">XI RPL 2</option>
                                <option <?php if (!empty($cari)) {
                                            echo $cari == 'XI RPL 3' ? 'selected' : '';
                                        } ?> value="XI RPL 3">XI RPL 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>