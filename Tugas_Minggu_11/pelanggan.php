<?php
include 'config.php';
$d=$db->query("SELECT * FROM pelanggan")->fetchAll(PDO::FETCH_ASSOC);
?>
<h2>Data Pelanggan</h2>
<a href="pelanggan_add.php">Tambah</a>
<table border="1">
<tr><th>ID</th><th>Nama</th><th>Alamat</th><th>HP</th></tr>
<?php foreach($d as $x): ?>
<tr>
<td><?= $x['id_pelanggan'] ?></td>
<td><?= $x['nama'] ?></td>
<td><?= $x['alamat'] ?></td>
<td><?= $x['no_hp'] ?></td>
</tr>
<?php endforeach; ?>
</table>