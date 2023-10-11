<?php
include 'koneksi.php';

$id = $_POST['ID'];
$nama_produk = $_POST['nama'];
$harga = $_POST['email'];

$sql = "UPDATE data_email SET nama='$nama_produk', email='$harga' WHERE id=$id"; // Menghapus tanda koma ekstra setelah 'email'
mysqli_query($koneksi, $sql);

header("location:index.php");
?>
