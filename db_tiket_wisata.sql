-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2022 pada 11.54
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tiket_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan_tiket`
--

CREATE TABLE `tb_pemesanan_tiket` (
  `id_pemesan` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nomer_identitas` bigint(16) DEFAULT NULL,
  `no_hp` bigint(13) DEFAULT NULL,
  `tempat_wisata` varchar(50) DEFAULT NULL,
  `tanggal_kunjungan` date DEFAULT NULL,
  `pengunjung_dewasa` int(4) DEFAULT NULL,
  `pengunjung_anakanak` int(4) DEFAULT NULL,
  `harga_tiket` int(16) DEFAULT NULL,
  `total_bayar` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
