<?php
require "function.php";
require "upload.php";
$rootDir = $_SERVER['DOCUMENT_ROOT']."/PROJECTKATALOG/";

    if (isset($_POST['btnsubmit'])) {
        $judul_buku = $_POST['judul_buku'];
        $kategori = $_POST['kategori'];
        $deskripsi = $_POST['deskripsi'];
        $penerbit = $_POST['penerbit'];
        $tanggal_terbit = $_POST['tanggal_terbit'];
        $isbn = $_POST['isbn'];
        $jumlah_halaman = $_POST['jumlah_halaman'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $pengarang = $_POST['pengarang'];
        $gambar = basename($_FILES['gambar']['name']);

        //*  ALTERNATIF *//

        // echo "<p><strong>Judul Buku:</strong> $judul_buku</p>";
        // echo "<p><strong>Kategori:</strong> $kategori</p>";
        // echo "<p><strong>Deskripsi Buku:</strong> $deskripsi</p>";
        // echo "<p><strong>Penerbit:</strong> $penerbit</p>";
        // echo "<p><strong>Tanggal Terbit:</strong> $tanggal_terbit</p>";
        // echo "<p><strong>ISBN:</strong> $isbn</p>";
        // echo "<p><strong>Jumlah Halaman:</strong> $jumlah_halaman</p>";
        // echo "<p><strong>Harga:</strong> Rp. $harga</p>";
        // echo "<p><strong>Stok:</strong> $stok</p>";

        //*    *//

        //* ARRAY ACCOCIATIVE *//
        $data = [
            'judul' => $judul_buku,
            'kategori' => $kategori,
            'deskripsi' => $deskripsi,
            'penerbit' => $penerbit,
            'tanggal_terbit' => $tanggal_terbit,
            'isbn' => $isbn,
            'jumlah_halaman' => $jumlah_halaman,
            'harga' => $harga,
            'stok' => $stok,
            'pengarang' => $pengarang,
            'gambar' => $gambar
        ];

        $validasi = validasiData($data);
        if($validasi == 0 ){
            // echo "data sudah lengkap siap di inputkan";
            $result = inputbuku($data, $koneksi);
            $folderTujuan = $rootDir."upload";
            if($result) 
            { 
                $upload = tambahGambar($folderTujuan, $_FILES['gambar']);
                if($upload) 
                    header("location:input_buku.php?status=1");
                else 
                header("location:input_buku.php?status=1&errno=2");
            }
            else header("location:input_buku.php?errno=1");
        }
        else {
            echo "data $validasi kurang";
        }
    }

?>