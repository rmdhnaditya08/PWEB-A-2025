<?php
session_start();
if(!isset($_SESSION['user'])){ header("Location: login.php"); exit; }
include 'layouts/header.php';
echo "<h2>Dashboard LaundryCrafty</h2>";
include 'layouts/footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
</head>
<body class="bg-light">
    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Data Siswa</h4>
                <a href="create.php" class="btn btn-light btn-sm">+ Tambah Siswa</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- PHP FETCH DATA HERE -->
                        <tr>
                            <td>1</td>
                            <td>Budi</td>
                            <td>120140001</td>
                            <td><img src="images/contoh.jpg" width="70" class="rounded" /></td>
                            <td>
                                <a href="edit.php?id=1" class="btn btn-warning btn-sm">Edit</a>
                                <a href="delete.php?id=1" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
