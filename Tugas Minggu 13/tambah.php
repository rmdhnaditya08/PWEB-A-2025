<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>

    <form action="tambah_aksi.php" method="post" enctype="multipart/form-data">
        NIS <br>
        <input type="text" name="nis"><br><br>

        Nama <br>
        <input type="text" name="nama"><br><br>

        Jenis Kelamin<br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan <br><br>

        Telepon <br>
        <input type="text" name="telp"><br><br>

        Alamat <br>
        <textarea name="alamat"></textarea><br><br>

        Foto <br>
        <input type="file" name="foto"><br><br>

        <input type="submit" value="Simpan">
    </form>

</body>
</html>
