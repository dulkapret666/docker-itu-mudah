<?php
// FILE: index.php
include 'koneksi.php';

// Logika Hapus Data (Simple)
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM tm_profile WHERE id_profile='$id'");
    if ($queryHapus) {
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Docker PHP</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background-color: #f2f2f2; text-align: left; }
        .btn { padding: 5px 10px; text-decoration: none; border-radius: 4px; }
        .btn-add { background-color: #4CAF50; color: white; }
        .btn-del { background-color: #f44336; color: white; }
    </style>
</head>
<body>

<h2>Daftar Profil (Dockerized App)</h2>
<p><a href="tambah.php" class="btn btn-add">+ Tambah Data Baru</a></p>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * FROM tm_profile ORDER BY id_profile DESC");
    while ($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['no_hp']; ?></td>
        <td><?php echo $d['email']; ?></td>
        <td>
            <a href="index.php?hapus=<?php echo $d['id_profile']; ?>" 
               class="btn btn-del"
               onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>