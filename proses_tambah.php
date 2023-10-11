<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO data_email (nama, email ) VALUES ('$nama', '$email' )";

if (mysqli_query($koneksi, $sql)) {
    header("location:index.php");
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}


?>
