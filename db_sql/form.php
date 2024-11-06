<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Form Pendaftaran</title>
</head>

<body>
    <div class="tabel">
    <form action="form2.php" enctype="multipart/form-data" method="POST">
        Nama: <br> <input type="text" name="nama" required /> <br><br>
        NISN:  <br> <input type="number" name="nisn" required><br><br>
        NIS: <br> <input type="text" name="nis" required><br><br>
        Jurusan: <br>
        <select name="jurusan" required>
            <option value="0">--- PILIH JURUSAN ---</option>
            <option value="1">PPLG</option>
            <option value="2">TJKT</option>
            <option value="3">DKV</option>
            <option value="4">SP</option>
            <option value="5">KULINER</option>
            <option value="6">MPLB</option>
            <option value="7">AKL</option>
            <option value="8">PM</option>
            <option value="9">PH</option>
        </select><br><br>
        Tgl Lahir: <br> <input type="date" name="tgl_lahir" required><br><br>
        Alamat: <br> <textarea name="alamat" required></textarea><br><br>
        No Telp: <br> <input type="number" name="Notel" required /> <br><br> <!-- Pastikan nama ini 'Notel' -->
        Gender: <br>
        <label>
            <input type="radio" name="gender" value="laki-laki" required> Laki-laki
        </label>
        <label>
            <input type="radio" name="gender" value="perempuan" required> Perempuan
        </label><br><br>
        Hobi: <br>
        <label>
            <input type="checkbox" name="hobi[]" value="berolahraga"> Berolahraga 
            <input type="checkbox" name="hobi[]" value="membaca"> Membaca 
            <input type="checkbox" name="hobi[]" value="memasak"> Memasak
            <input type="checkbox" name="hobi[]" value="bermain musik"> Bermain Musik <br>
            <input type="checkbox" name="hobi[]" value="Tidur"> Tidur
            <input type="checkbox" name="hobi[]" value="Balapan"> Balapan
            <input type="checkbox" name="hobi[]" value="Mengganggu faizol"> Mengganggu faizol
            <input type="checkbox" name="hobi[]" value="galau"> Galau
        </label>
        Foto: <br> <input type="file" name="foto" required> <br><br>
        <input type="submit" name="submit" value="Kirim">
    </form>
    </div>
</body>

</html>