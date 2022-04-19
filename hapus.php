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

if (hapus($id) > 0) {
    echo "
        <script>
        document.location.href = 'admin.php';
        </script>
        ";
}
