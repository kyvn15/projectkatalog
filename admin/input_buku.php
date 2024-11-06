<?php

 require_once "koneksi.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div tabel>
        <h2>Form Input Produk Sangraha Pustaka</h2>
        <form action="form2.php" enctype="multipart/form-data" method="POST">
        JUDUL BUKU : <br> <input type="text" name="judul_buku"  /> <br><br>
        KATEGORI : <br>
        <label>
            <input type="radio" name="kategori" value="FIKSI" required> FIKSI
            <input type="radio" name="kategori" value="NON-FIKSI" required> NON-FIKSI
        </label><br><br>
        DESKRIPSI BUKU : <br> <input type="textarea" name="deskripsi"  /> <br><br>
        PENERBIT : <br> <input type="text" name="penerbit"  /> <br><br>
        TANGGAL TERBIT : <br> <input type="date" name="tanggal_terbit"  /> <br><br>
        ISBN : <br> <input type="number" name="isbn"  /> <br><br>
        JUMLAH HALAMAN : <br> <input type="text" name="jumlah_halaman"  /> <br><br>
        HARGA : <br> <input type="number" name="harga"  /> <br><br>
        STOK : <br> <input type="text" name="stok"  /> <br><br>
    </div>
</body>
</html>