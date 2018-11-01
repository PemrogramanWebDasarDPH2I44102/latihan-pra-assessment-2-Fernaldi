-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2018 pada 03.10
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asrama`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `nama` varchar(20) NOT NULL,
  `nip` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nama`, `nip`) VALUES
('angga', 6700185902),
('rayan', 6700185903);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `tgl_datang` date NOT NULL,
  `sasaran` varchar(20) NOT NULL,
  `penerima` varchar(20) NOT NULL,
  `isi_paket` varchar(20) NOT NULL,
  `tgl_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`tgl_datang`, `sasaran`, `penerima`, `isi_paket`, `tgl_ambil`) VALUES
('0000-00-00', '', '', '', '0000-00-00'),
('0000-00-00', '', '', '', '0000-00-00'),
('0000-00-00', '', '', '', '0000-00-00'),
('2018-02-12', 'Erik', 'Mus', 'Bom', '2018-02-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghuni`
--

CREATE TABLE `penghuni` (
  `nama` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `ktp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
