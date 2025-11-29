<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

<h2>Data Siswa</h2>
<a href="tambah.php">+ Tambah Siswa</a>
<br><br>

<table border="1" cellpadding="8" cellspacing="0">
<tr>
    <th>Foto</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Telepon</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

<?php
$data = mysqli_query($koneksi, "SELECT * FROM siswa");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><img src="images/<?php echo $d['foto']; ?>" width="80"></td>
    <td><?php echo $d['nis']; ?></td>
    <td><?php echo $d['nama']; ?></td>
    <td><?php echo $d['jenis_kelamin']; ?></td>
    <td><?php echo $d['telp']; ?></td>
    <td><?php echo $d['alamat']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a> |
        <a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
