<?php
require "function.php";

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
            'stok' => $stok
        ];

        $validasi = validasiData($data);
        if ($validasi == 0) {
            echo "data sudah lengkap siap di inputkan";
            $result = inputbuku($data, $koneksi);
            if ($result)
                echo 'data sudah di inputkan';
            else 
                echo 'data gagal di inputkan';
        } else {
            echo "data $validasi kurang";
        }
    }

?>