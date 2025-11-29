<?php
include 'config.php';
$pel=$db->query("SELECT * FROM pelanggan")->fetchAll(PDO::FETCH_ASSOC);
$lay=$db->query("SELECT * FROM layanan")->fetchAll(PDO::FETCH_ASSOC);
if($_POST){
  $q=$db->prepare("SELECT harga_per_kg FROM layanan WHERE id_layanan=?");
  $q->execute([$_POST['id_layanan']]);
  $h=$q->fetch()['harga_per_kg'];
  $total = $_POST['berat']*$h;
  $db->prepare("INSERT INTO transaksi(id_pelanggan,id_layanan,tanggal_masuk,tanggal_selesai,berat,total_harga,status)
  VALUES(?,?,?,?,?,?,?)")->execute([
    $_POST['id_pelanggan'],$_POST['id_layanan'],$_POST['tanggal_masuk'],
    $_POST['tanggal_selesai'],$_POST['berat'],$total,"Proses"
  ]);
  header("Location: transaksi.php");
}
?>
<form method="post">
<select name="id_pelanggan">
<?php foreach($pel as $p): ?>
<option value="<?= $p['id_pelanggan']?>"><?= $p['nama']?></option>
<?php endforeach; ?>
</select>
<select name="id_layanan">
<?php foreach($lay as $l): ?>
<option value="<?= $l['id_layanan']?>"><?= $l['nama_layanan']?></option>
<?php endforeach; ?>
</select>
<input name="berat" placeholder="Berat">
<input type="date" name="tanggal_masuk">
<input type="date" name="tanggal_selesai">
<button>Simpan</button>
</form>