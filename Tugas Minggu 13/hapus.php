<?php 
include 'koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT foto FROM siswa WHERE id='$id'");
$d = mysqli_fetch_array($data);

// hapus foto dari folder
unlink("images/".$d['foto']);

mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");

header("location:index.php");
?>
