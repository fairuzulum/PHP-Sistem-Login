<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nis = htmlentities($data["nis"]);
    $nama = htmlentities($data["nama"]);
    $kelas = htmlentities($data["kelas"]);

    $query = "INSERT INTO siswa 
    VALUES
    ('', '$nis', '$nama', '$kelas')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nis = htmlentities($data["nis"]);
    $nama = htmlentities($data["nama"]);
    $kelas = $data["kelas"];
    $query = "UPDATE siswa SET
                nis = '$nis', 
                nama = '$nama',
                kelas = '$kelas'
              WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM siswa 
                WHERE
              nis LIKE '%$keyword%' OR
              nama LIKE '%$keyword%' OR
              kelas LIKE '%$keyword%' 
            ";

    return query($query);
}

function registrasi($data)
{
    global $conn;
    $nama = strtolower(stripslashes($data["nama"]));
    $email = strtolower(stripslashes($data["email"]));
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
            alert('username sudah terdaftar !!');
            </script>
        ";
        return false;
    }

    if ($password !== $password2) {
        echo "
            <script>
            alert('Password tidak sama !!');
            </script>
        ";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO users VALUES('', '$nama', '$email', '$username', '$password', '')");

    return mysqli_affected_rows($conn);
}
