CREATE DATABASE tutorial;

USE tutorial;

CREATE TABLE mahasiswa (
    nim VARCHAR(10) NOT NULL PRIMARY KEY,
    nama_lengkap VARCHAR(100),
    no_hp VARCHAR(15),
    tanggal_lahir DATE
);
