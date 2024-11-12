<?php
require 'koneksi.php';
require 'function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .table,
        .table th,
        .table td {
            border: 1px solid black;
            /* Tambahkan garis di sekitar tabel dan kolom */
            text-align: center;
        }
    </style>
</head>

<body>
<?php
    // //Include file koneksi, untuk koneksikan ke database
    // include "koneksi.php";

    // //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    // function input($data) {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    
    //Cek apakah ada kiriman form dari method post
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //     $judul_buku =input($_POST["judul"]);
    //     $kategori =input($_POST["kategori"]);
    //     $deskripsi =input($_POST["deskripsi"]);
    //     $penerbit =input($_POST["penerbit"]);
    //     $tanggal_terbit =input($_POST["tanggal_terbit"]);
    //     $isbn =input($_POST["isbn"]);
    //     $jumlah_halaman =input($_POST["jumlah_halaman"]);
    //     $harga = input($_POST["harga"]);
    //     $stok = input($_POST["stok"]); -->
        // $pengarang = input($_POST["pengarang"]);
    
        // //Query input menginput data kedalam tb_buku
        // $sql = "INSERT INTO tb_produk (judul_buku, deskripsi_buku,penerbit, tanggal_terbit, ISBN, jumlah_halaman,harga,stok,kategori, pengarang)";
        // VALUES ($judul_buku, $deskripsi, $penerbit, $tanggal_terbit, $isbn, $jumlah_halaman, $harga  , $stok , $kategori , $pengarang);
        // echo $sql;

        // //Mengeksekusi/menjalankan query diatas
        // $hasil=mysqli_query($kon, $sql);

        // //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        // if ($hasil) {
        //     header("Location:index.php");
        // }
        // else {
        //     echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        // }

    // } 

    ?>

    <?php

    $tb_produk = viewBuku($koneksi);

    if ($tb_produk == 0) {
        echo 'Data Kosong';
    } else {


        ?>

        <table class="table table-bordered">
            <tr>
                <th>NO</th>
                <th>JUDUL BUKU</th>
                <th>DESKRIPSI</th>
                <th>PENERBIT</th>
                <th>TANGGAL TERBIT</th>
                <th>ISBN</th>
                <th>JUMLAH HALAMAN</th>
                <th>HARGA</th>
                <th>STOK</th>
                <th>KATEGORI</th>
                <th>PENGARANG</th>
                <th>GAMBAR</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>


            <?php
            //  awalan foreach //
            $no = 1;
            foreach ($tb_produk as $data){

            ?>

            <tr>
                <td><?= $no ?></td>
                <td><?php $data['judul_buku'] ?></td>
                <td><?= $data['deskripsi_buku'] ?></td>
                <td><?= $data['penerbit'] ?></td>
                <td><?= $data['tanggal_terbit'] ?></td>
                <td><?= $data['isbn'] ?></td>
                <td><?= $data['jumlah_halaman'] ?></td>
                <td><?= $data['harga'] ?></td>
                <td><?= $data['stok'] ?></td>
                <td><?= $data['kategori'] ?></td>
                <td><?= $data['pengarang'] ?></td>
                <td><?= $data['gambar'] ?> </td>
                <td><button class="btn btn-primary">Edit</button></td>
                <td><button class="btn btn-danger">Delete</button></td>
            </tr>

            <?php

            // akhiran foreach //
            $no ++;
    }
            ?>

        </table>
        <?php
    }
    ?>

</body>

</html>