-- ----------------------------------------
-- DATABASE: laundrycrafty
-- ----------------------------------------
CREATE DATABASE IF NOT EXISTS laundrycrafty;
USE laundrycrafty;

-- ----------------------------------------
-- TABEL USER
-- ----------------------------------------
CREATE TABLE user (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'operator', 'pelanggan') NOT NULL
);

-- Insert akun admin default
INSERT INTO user (username, password, role)
VALUES ('admin', '$2y$10$wT36OSj1AMaYQw2g1tQqOOE5Uv1tIoE5aRVHe2HQXfTs4ix5FpkjC', 'admin');
-- password = admin123

-- ----------------------------------------
-- TABEL PELANGGAN
-- ----------------------------------------
CREATE TABLE pelanggan (
    id_pelanggan INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    alamat TEXT,
    no_hp VARCHAR(20)
);

-- Dummy data pelanggan
INSERT INTO pelanggan (nama, alamat, no_hp) VALUES
('Budi Santoso', 'Jl. Kenanga No. 12', '08123456789'),
('Siti Aminah', 'Jl. Melati No. 45', '082233445566');

-- ----------------------------------------
-- TABEL LAYANAN
-- ----------------------------------------
CREATE TABLE layanan (
    id_layanan INT AUTO_INCREMENT PRIMARY KEY,
    nama_layanan VARCHAR(100) NOT NULL,
    harga_per_kg INT NOT NULL
);

-- Dummy data layanan
INSERT INTO layanan (nama_layanan, harga_per_kg) VALUES
('Cuci Kering', 6000),
('Cuci + Setrika', 8000),
('Express 6 Jam', 12000);

-- ----------------------------------------
-- TABEL TRANSAKSI
-- ----------------------------------------
CREATE TABLE transaksi (
    id_transaksi INT AUTO_INCREMENT PRIMARY KEY,
    id_pelanggan INT NOT NULL,
    id_layanan INT NOT NULL,
    tanggal_masuk DATE NOT NULL,
    tanggal_selesai DATE,
    berat FLOAT NOT NULL,
    total_harga INT NOT NULL,
    status ENUM('Proses', 'Selesai', 'Sudah Diambil') DEFAULT 'Proses',
    FOREIGN KEY (id_pelanggan) REFERENCES pelanggan(id_pelanggan)
        ON DELETE CASCADE,
    FOREIGN KEY (id_layanan) REFERENCES layanan(id_layanan)
        ON DELETE CASCADE
);

-- Dummy data transaksi
INSERT INTO transaksi (id_pelanggan, id_layanan, tanggal_masuk, tanggal_selesai, berat, total_harga, status)
VALUES 
(1, 2, '2025-01-12', '2025-01-13', 5, 5 * 8000, 'Selesai'),
(2, 1, '2025-01-13', NULL, 3.5, 3.5 * 6000, 'Proses');
