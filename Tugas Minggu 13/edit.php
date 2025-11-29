<?php 
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>

<h2>Edit Data Siswa</h2>

<form action="update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $d['id'] ?>">

    NIS:<br>
    <input type="text" name="nis" value="<?= $d['nis'] ?>"><br><br>

    Nama:<br>
    <input type="text" name="nama" value="<?= $d['nama'] ?>"><br><br>

    Jenis Kelamin:<br>
    <input type="radio" name="jk" value="Laki-laki" <?= $d['jenis_kelamin']=="Laki-laki"?"checked":""; ?>> Laki-laki
    <input type="radio" name="jk" value="Perempuan" <?= $d['jenis_kelamin']=="Perempuan"?"checked":""; ?>> Perempuan
    <br><br>

    Telepon:<br>
    <input type="text" name="telp" value="<?= $d['telp'] ?>"><br><br>

    Alamat:<br>
    <textarea name="alamat"><?= $d['alamat'] ?></textarea><br><br>

    Foto Lama:<br>
    <img src="images/<?= $d['foto'] ?>" width="100"><br><br>

    Ganti Foto:<br>
    <input type="file" name="foto"><br><br>

    <input type="submit" value="Update">
</form>

</body>
</html>
