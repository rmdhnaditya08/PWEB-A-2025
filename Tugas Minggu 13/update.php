<?php 
include 'koneksi.php';

$id   = $_POST['id'];
$nis  = $_POST['nis'];
$nama = $_POST['nama'];
$jk   = $_POST['jk'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$foto = $_FILES['foto']['name'];
$tmp  = $_FILES['foto']['tmp_name'];

if($foto != ""){
    move_uploaded_file($tmp, "images/".$foto);
    mysqli_query($koneksi, "UPDATE siswa SET nis='$nis', nama='$nama', jenis_kelamin='$jk', telp='$telp', alamat='$alamat', foto='$foto' WHERE id='$id'");
} else {
    mysqli_query($koneksi, "UPDATE siswa SET nis='$nis', nama='$nama', jenis_kelamin='$jk', telp='$telp', alamat='$alamat' WHERE id='$id'");
}

header("location:index.php");
?>
