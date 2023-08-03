-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2023 pada 03.45
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kd_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jml_barang` int(10) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `harga` int(15) NOT NULL,
  `asal_barang` varchar(50) NOT NULL,
  `kd_tempat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kd_barang`, `nama_barang`, `jml_barang`, `kondisi`, `harga`, `asal_barang`, `kd_tempat`) VALUES
('A2', 'nazril', 12, 'baru', 220000, 'Tata usaha', '7015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `kd_tempat` varchar(10) NOT NULL,
  `nama_tempat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`kd_tempat`, `nama_tempat`) VALUES
('X', 'BOGA'),
('XI', 'RPL'),
('XII', 'RPL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemakai`
--

CREATE TABLE `pemakai` (
  `kd_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(56) NOT NULL,
  `nama_tempat` varchar(56) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `kondisi` varchar(56) NOT NULL,
  `tgl_pemakai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemakaian`
--

CREATE TABLE `pemakaian` (
  `kd_barang` varchar(56) NOT NULL,
  `nama_barang` varchar(56) NOT NULL,
  `nama_tempat` varchar(56) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `kondisi` varchar(56) NOT NULL,
  `tgl_pemakai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `kd_petugas` varchar(10) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`kd_petugas`, `nama_petugas`, `jabatan`) VALUES
('A7', 'Nazril', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_barang`,`kd_tempat`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`kd_tempat`);

--
-- Indeks untuk tabel `pemakai`
--
ALTER TABLE `pemakai`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indeks untuk tabel `pemakaian`
--
ALTER TABLE `pemakaian`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`kd_petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
