<?php

function validasiData($data)
{
    foreach($data as $index => $value){
        $value = trim($value);
        if($value === '' || $value === 0 || $value === null || $value === false){
            return $index;
        }
    }
    return 0;
}

function inputbuku ($data , $koneksi) {
    $judul_buku = $data ['judul'];
    $kategori = $data ['kategori'];
    $deskripsi = $data ['deskripsi'];
    $penerbit = $data ['penerbit'];
    $tanggal_terbit = $data ['tanggal_terbit'];
    $isbn = $data ['isbn'];
    $jumlah_halaman = $data ['jumlah_halaman'];
    $harga = $data ['harga'];
    $stok = $data ['stok'];
}



