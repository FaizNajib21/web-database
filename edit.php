<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>
    <a href="index.php">Kembali</a>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM data_email WHERE id=$id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
        Nama Produk: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
        Harga: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
