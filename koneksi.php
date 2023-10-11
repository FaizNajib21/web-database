<?php
$localhost = "localhost";
$username = "username";
$password = "password";
$database = "data_siswa";

$koneksi = mysqli_connect($localhost, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
