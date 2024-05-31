-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2024 pada 14.36
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_music`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akss`
--

CREATE TABLE `akss` (
  `id_akss` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `akss`
--

INSERT INTO `akss` (`id_akss`, `gambar`, `nama`, `deskripsi`, `harga`) VALUES
(1, '27.jpg', 'Strap Guitar Merk Ibannez', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami\r\n', 75000),
(2, '28.jpg', 'Pick guitar Murah All Colour', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami\r\n', 7000),
(4, '29.jpg', 'Packet Mic Condenser', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami\r\n', 579000),
(5, '30.jpg', 'Splitter Mic / Earphone', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami\r\n', 35000),
(6, '31.jpg', 'Capo Guitar ', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami\r\n', 28000),
(8, '33.jpg', 'Stand Guitar', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami\r\n', 237000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `basss`
--

CREATE TABLE `basss` (
  `id_basss` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `basss`
--

INSERT INTO `basss` (`id_basss`, `gambar`, `nama`, `deskripsi`, `harga`) VALUES
(1, '22.jpg', 'Yamaha BB434  Electric Bass ', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 1756500),
(2, '26.jpg', 'Custom Bass 10 string No Brand', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 45890000),
(4, '21.jpg', 'Accoustic Fender CB 60-SCE', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 3456000),
(5, '23.jpg', 'Jcraft PB-1 Bass Electric', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 2570000),
(6, '24.jpg', 'Ibannez SRF705 5 String Fretless', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 6890000),
(7, '25.jpg', 'ESP LTD 6 String Guitar Bass', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 7125000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dramm`
--

CREATE TABLE `dramm` (
  `id_dramm` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dramm`
--

INSERT INTO `dramm` (`id_dramm`, `gambar`, `nama`, `deskripsi`, `harga`) VALUES
(1, '17.jpg', 'Pearl Cajon PBC-121B', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 550000),
(2, '15.jpg', 'Pearl Drum Series TGC625C GP', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 67900000),
(4, '14.jpg', 'Yamaha Series RDP 2F5', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 69950000),
(5, '16.jpg', 'Drum Electric Yamaha Series DTX-400K', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 2589000),
(6, '18.jpg', 'Cajon Travel Brand Pearl', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 359000),
(8, '19.jpg', 'Cajon Trapesium No Brand', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 550000),
(9, '20.jpg', 'Drum Pad Electric ', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 655900);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gitarr`
--

CREATE TABLE `gitarr` (
  `id_gitarr` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gitarr`
--

INSERT INTO `gitarr` (`id_gitarr`, `gambar`, `nama`, `deskripsi`, `harga`) VALUES
(1, '1.jpg', 'Gitar Accoustic Grande De -100 Na', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami\r\n', 1249000),
(4, '2.jpg', 'Gitar Accoustic Cort Core-Dc', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 1210000),
(7, '3.jpg', ' Guitar Accoustic Cort SFX', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 1520000),
(10, '5.jpg', 'Guitar Accoustic Yamaha FSx820c', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 2570000),
(11, '6.jpg', 'Yamaha Apx600FM', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 1325000),
(12, '7.jpg', 'Gibson LesPaul Standar Guitar Electric', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 2550000),
(14, '9.jpg', 'Gibson Explorer Antique Guitar ', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 36780000),
(19, '13.jpg', 'Ibannez AG95QA-DBS Guitar Listric', 'Tanyakan Sebelum Membeli / Bisa Langsung Ke store Offline Kami', 10216000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id_home` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id_home`, `gambar`, `nama`) VALUES
(1, '1.jpg', 'Gitar'),
(2, '14.jpg', 'Drumm'),
(3, '26.jpg', 'bass'),
(4, 'aks.jpg', 'Aksesoris Music');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jenis` enum('Gitar','Dram','Bass','Aksesoris') NOT NULL,
  `music_aks` varchar(255) NOT NULL,
  `pembayaran` enum('Cash On Delivery(COD)') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesan`, `nama`, `alamat`, `no_hp`, `jenis`, `music_aks`, `pembayaran`) VALUES
(1, 'Patriot', 'Bukit Jangkrik', '08911111111', 'Gitar', 'Gitar listrik', 'Cash On Delivery(COD)');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akss`
--
ALTER TABLE `akss`
  ADD PRIMARY KEY (`id_akss`);

--
-- Indeks untuk tabel `basss`
--
ALTER TABLE `basss`
  ADD PRIMARY KEY (`id_basss`);

--
-- Indeks untuk tabel `dramm`
--
ALTER TABLE `dramm`
  ADD PRIMARY KEY (`id_dramm`);

--
-- Indeks untuk tabel `gitarr`
--
ALTER TABLE `gitarr`
  ADD PRIMARY KEY (`id_gitarr`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id_home`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akss`
--
ALTER TABLE `akss`
  MODIFY `id_akss` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `basss`
--
ALTER TABLE `basss`
  MODIFY `id_basss` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `dramm`
--
ALTER TABLE `dramm`
  MODIFY `id_dramm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `gitarr`
--
ALTER TABLE `gitarr`
  MODIFY `id_gitarr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
