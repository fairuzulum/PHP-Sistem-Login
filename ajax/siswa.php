<?php
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM siswa 
        WHERE
        nis LIKE '%$keyword%' OR
        nama LIKE '%$keyword%' OR
        kelas LIKE '%$keyword%' 
    ";
$siswa = query($query);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<style>
    body {
        background-image: url(img/login.jpg);
    }
    .table {
        background-color: #007bff;
    }

</style>
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