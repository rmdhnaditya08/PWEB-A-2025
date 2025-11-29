<?php
include 'config.php';
if($_POST){
  $db->prepare("INSERT INTO pelanggan(nama,alamat,no_hp)VALUES(?,?,?)")
     ->execute([$_POST['nama'],$_POST['alamat'],$_POST['no_hp']]);
  header("Location: pelanggan.php");
}
?>
<form method="post">
<input name="nama" placeholder="Nama">
<input name="alamat" placeholder="Alamat">
<input name="no_hp" placeholder="HP">
<button>Simpan</button>
</form>