-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 08 Okt 2022 pada 16.32
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewagedung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `idfasilitas` int(11) NOT NULL,
  `fasilitas` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`idfasilitas`, `fasilitas`) VALUES
(1, 'Proyektor, LCD, Kamar Mandi'),
(2, 'BBM, Inyak,');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedung`
--

CREATE TABLE `gedung` (
  `idgedung` int(11) NOT NULL,
  `namagedung` varchar(90) NOT NULL,
  `harga` int(50) NOT NULL,
  `idfasilitas` int(11) NOT NULL,
  `sertifikat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gedung`
--

INSERT INTO `gedung` (`idgedung`, `namagedung`, `harga`, `idfasilitas`, `sertifikat`) VALUES
(1, 'Home Stay', 50000, 1, '1.jpg'),
(2, 'Kuat', 50000, 1, '0_57074700_1592807895.png'),
(3, 'Kuat', 50000, 1, '1_2_3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `id_order` int(11) NOT NULL,
  `idgedung` int(11) NOT NULL,
  `id_fas` int(11) NOT NULL,
  `tanggalsewa` datetime NOT NULL,
  `tanggalkembali` datetime NOT NULL,
  `iduser` int(11) NOT NULL,
  `tambahan` varchar(20) NOT NULL,
  `tambahfasilitas` varchar(100) NOT NULL,
  `judul_rapat` text NOT NULL,
  `penanggung_jwb` varchar(100) NOT NULL,
  `statusboking` varchar(20) NOT NULL,
  `statusfas` varchar(20) NOT NULL,
  `tambah` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sewa`
--

INSERT INTO `sewa` (`id_order`, `idgedung`, `id_fas`, `tanggalsewa`, `tanggalkembali`, `iduser`, `tambahan`, `tambahfasilitas`, `judul_rapat`, `penanggung_jwb`, `statusboking`, `statusfas`, `tambah`) VALUES
(4, 2, 0, '2022-10-08 00:00:00', '2022-10-08 00:00:00', 1, '', '', 'asdas', 'asda', 'Verifikasi', 'Verifikasi', ''),
(5, 2, 0, '2022-10-09 22:52:00', '2022-10-10 22:53:00', 2, '', '', 'Rapat Kedinasan', 'Abadi', 'Verifikasi', 'Verifikasi', ''),
(6, 3, 0, '2022-10-09 12:07:00', '2022-10-09 12:07:00', 2, 'tidak layak', '', 'Amiin paling banyak', 'muh ridho ws', 'Tolak', 'Tolak', 'Tidak Ada'),
(7, 1, 2, '2022-11-10 14:38:00', '2022-10-10 14:38:00', 2, '', '', 'Acra Keluarga', 'Mas Muh', 'pending', 'pending', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `nik` char(17) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `nik`, `nama`, `alamat`, `pekerjaan`, `email`, `password`, `role_id`) VALUES
(1, '19240015', 'MUH RIDHO WACHID SOLIKIN', 'PULOSARI,JAMBON,PONOROGO', 'CALON TEAM / WORKER / SDM', 'muhridho448@gmail.com', '123', 1),
(2, '23233', 'abi', 'jl semeru', 'mahasiswa ', 'rr@gmail.com', 'ridho123', 3),
(3, '34322222', 'MUH RIDHO WACHID SOLIKIN', 'PULOSARI,JAMBON,PONOROGO', 'CALON TEAM / WORKER / SDM', 'supervisor', 'supervisor', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`idfasilitas`);

--
-- Indeks untuk tabel `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`idgedung`);

--
-- Indeks untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `idfasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `gedung`
--
ALTER TABLE `gedung`
  MODIFY `idgedung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
