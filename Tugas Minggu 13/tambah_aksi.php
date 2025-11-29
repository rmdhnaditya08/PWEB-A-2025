<?php
include 'koneksi.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

// ===== UPLOAD FOTO =====
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$folder = "images/";

// cek apakah file terkirim dari form
if ($foto != "") {

    // pindahkan file
    if (move_uploaded_file($tmp, $folder.$foto)) {

        // insert ke database
        mysqli_query($koneksi, "INSERT INTO siswa VALUES
            ('', '$nis', '$nama', '$jk', '$telp', '$alamat', '$foto')");

        header("location:index.php");

    } else {
        echo "GAGAL upload foto (move_uploaded_file error)";
    }

} else {
    echo "Tidak ada file foto yang dikirim";
}

?>
