<?php

function validasiData($data)
{
    foreach ($data as $index => $value) {
        $value = trim($value);
        if ($value === '' || $value === 0 || $value === null || $value === false) {
            return $index;
        }
    }
    return 0;
}

function inputbuku($data, $koneksi)
{
    $judul_buku = $data['judul'];
    $kategori = $data['kategori'];
    $deskripsi = $data['deskripsi'];
    $penerbit = $data['penerbit'];
    $tanggal_terbit = $data['tanggal_terbit'];
    $isbn = $data['isbn'];
    $jumlah_halaman = $data['jumlah_halaman'];
    $harga = $data['harga'];
    $stok = $data['stok'];


$sql = "INSERT INTO tb_produk (judul_buku , deskripsi_buku , penerbit, tanggal_terbit , isbn, jumlah_halaman, harga , stok,kategori) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($koneksi, $sql);
if ($stmt === false) {
    return "failed";
}

mysqli_stmt_bind_param($stmt, 'ssssiiiis', $judul_buku, $deskripsi, $penerbit, $tanggal_terbit, $isbn, $jumlah_halaman, $harga  , $stok , $kategori );
$result = mysqli_stmt_execute($stmt);

if (!$result)
    return false;

mysqli_stmt_close($stmt);
return true;
}