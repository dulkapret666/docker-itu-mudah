<?php
// FILE: tambah.php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp  = $_POST['no_hp'];
    $email  = $_POST['email'];

    $insert = mysqli_query($koneksi, "INSERT INTO tm_profile VALUES (NULL, '$nama', '$alamat', '$no_hp', '$email')");
    
    if($insert){
        header("Location: index.php");
    } else {
        echo "Gagal menyimpan data!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        input, textarea { display: block; margin-bottom: 10px; width: 300px; padding: 5px;}
    </style>
</head>
<body>

<h3>Tambah Data Profil</h3>
<form method="POST" action="">
    <label>Nama Lengkap:</label>
    <input type="text" name="nama" required>

    <label>Alamat:</label>
    <textarea name="alamat" required></textarea>

    <label>No HP:</label>
    <input type="text" name="no_hp" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <button type="submit" name="simpan">Simpan Data</button>
    <a href="index.php">Kembali</a>
</form>

</body>
</html>
