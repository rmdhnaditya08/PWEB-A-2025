<?php
include 'config.php';
$d=$db->query("SELECT t.*,p.nama,l.nama_layanan FROM transaksi t
JOIN pelanggan p ON p.id_pelanggan=t.id_pelanggan
JOIN layanan l ON l.id_layanan=t.id_layanan")->fetchAll(PDO::FETCH_ASSOC);
?>
<h2>Data Transaksi</h2>
<a href="transaksi_add.php">Tambah</a>
<table border="1">
<tr><th>ID</th><th>Pelanggan</th><th>Layanan</th><th>Berat</th><th>Total</th><th>Status</th></tr>
<?php foreach($d as $x): ?>
<tr>
<td><?= $x['id_transaksi'] ?></td>
<td><?= $x['nama'] ?></td>
<td><?= $x['nama_layanan'] ?></td>
<td><?= $x['berat'] ?> kg</td>
<td><?= $x['total_harga'] ?></td>
<td><?= $x['status'] ?></td>
</tr>
<?php endforeach; ?>
</table>