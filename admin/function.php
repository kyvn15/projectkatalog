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
    $pengarang = $data['pengarang'];
    $gambar = $data['gambar'];

    // echo "INSERT INTO tb_produk (judul_buku , deskripsi_buku , penerbit , tanggal_terbit , isbn, jumlah_halaman, harga , stok,kategori , pengarang) VALUES ($judul_buku, $deskripsi, $penerbit, $tanggal_terbit, $isbn, $jumlah_halaman, $harga  , $stok , $kategori , $pengarang)";

    // INSERT INTO tb_produk () VALUES ('abc','abc','abc','2023-12-01', 12345, 12,12,12,'abc','Fiksi','abc')
$sql = "INSERT INTO tb_produk (judul_buku, deskripsi_buku,penerbit, tanggal_terbit, ISBN, jumlah_halaman,harga,stok,kategori, pengarang,gambar) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ? , ?,?)";
$stmt = mysqli_prepare($koneksi, $sql);
if ($stmt === false) {
    return "failed";
}

mysqli_stmt_bind_param($stmt, 'ssssiiiisss', $judul_buku, $deskripsi, $penerbit, $tanggal_terbit, $isbn, $jumlah_halaman, $harga  , $stok , $kategori , $pengarang, $gambar);
$result = mysqli_stmt_execute($stmt);

if (!$result)
    return false;

mysqli_stmt_close($stmt);
return true;
}

// function untuk menampilkan data buku //

function viewBuku($koneksi) {
    $sql = "SELECT tb_produk.produk_id, tb_produk.judul_buku,tb_produk.deskripsi_buku,tb_produk.penerbit,tb_produk.tanggal_terbit,tb_produk.ISBN,tb_produk.jumlah_halaman,tb_produk.harga,tb_produk.stok,tb_produk.gambar,tb_produk.kategori,tb_produk.pengarang, tb_produk.gambar as judul_buku,deskripsi_buku,penerbit,tanggal_terbit,isbn,jumlah_halaman,harga,stok,gambar,kategori,pengarang,gambar FROM tb_produk";
    $result = mysqli_query($koneksi, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return false;
    }
}

function delBuku ($koneksi, $id) {
    $sql = "DELETE FROM tb_produk WHERE produk_id = ?";
            // DELETE FROM `tb_produk` WHERE produk_id = ? ";
    $stmt = mysqli_prepare($koneksi, $sql);

    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) return true;
    else return false;
}
