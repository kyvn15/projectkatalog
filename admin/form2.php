<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Data Pendaftaran</title>
</head>

<body>
    <h2>DATA YANG MASUK</h2>
    <?php
    // Ambil data dari form menggunakan metode POST
    $judul_buku = $_POST['judul_buku'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $penerbit = $_POST['penerbit'];
    $tanggal_terbit = $_POST['tanggal_terbit'];
    $isbn = $_POST['isbn'];
    $jumlah_halaman =$_POST['jumlah_halaman'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    

    echo "<p><strong>Judul Buku:</strong> $judul_buku</p>";
    echo "<p><strong>Kategori:</strong> $kategori</p>";
    echo "<p><strong>Deskripsi Buku:</strong> $deskripsi</p>";
    echo "<p><strong>Penerbit:</strong> $penerbit</p>";
    echo "<p><strong>Tanggal Terbit:</strong> $tanggal_terbit</p>";
    echo "<p><strong>ISBN:</strong> $isbn</p>";
    echo "<p><strong>Jumlah Halaman:</strong> $jumlah_halaman</p>";
    echo "<p><strong>Harga:</strong> Rp. $harga</p>";
    echo "<p><strong>Stok:</strong> $stok</p>";
   
    ?>

</body>

</html>