-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: 20 Mei 2018 pada 18.02
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry_sadam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_transaksi`
--

CREATE TABLE `tbl_detail_transaksi` (
  `id` int(11) NOT NULL,
  `header_id` int(11) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `jenis_layanan` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_detail_transaksi`
--

INSERT INTO `tbl_detail_transaksi` (`id`, `header_id`, `jenis_barang`, `jenis_layanan`, `qty`, `total`) VALUES
(7, 7, '1', '3', 3, 310000),
(8, 7, '1', '1', 3, 1200000),
(9, 8, '4', '3', 2, 170000),
(10, 9, '4', '1', 2, 1060000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_header_transaksi`
--

CREATE TABLE `tbl_header_transaksi` (
  `id` int(11) NOT NULL,
  `no_transaksi` varchar(100) NOT NULL,
  `kasir` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_header_transaksi`
--

INSERT INTO `tbl_header_transaksi` (`id`, `no_transaksi`, `kasir`, `tanggal`) VALUES
(7, '1234', '4', '2018-05-21'),
(8, '1235', '3', '2018-05-21'),
(9, '123', '4', '2018-05-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_barang`
--

CREATE TABLE `tbl_jenis_barang` (
  `id` int(11) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `harga_perkilo` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jenis_barang`
--

INSERT INTO `tbl_jenis_barang` (`id`, `jenis_barang`, `harga_perkilo`, `created_on`) VALUES
(1, 'jeans baru levis', 100000, '2018-05-20 14:28:37'),
(4, 'baju', 80000, '2018-05-20 15:49:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_layanan`
--

CREATE TABLE `tbl_jenis_layanan` (
  `id` int(11) NOT NULL,
  `nama_layanan` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jenis_layanan`
--

INSERT INTO `tbl_jenis_layanan` (`id`, `nama_layanan`, `harga`, `created_on`) VALUES
(1, 'Express 113', 900000, '2018-05-20 14:43:43'),
(3, 'Free', 10000, '2018-05-20 15:35:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kasir`
--

CREATE TABLE `tbl_kasir` (
  `id_kasir` int(11) NOT NULL,
  `nama_kasir` text NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kasir`
--

INSERT INTO `tbl_kasir` (`id_kasir`, `nama_kasir`, `alamat`, `no_telp`) VALUES
(3, 'jajang arifin', 'sulawesi', '021-284234u823'),
(4, 'Kurakura', 'Pademangan', '021-343');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_kasir` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `fullname`, `password`, `level`) VALUES
(1, 'admin', 'Super Admin', '123', 1),
(2, 'testing123', 'Sadam', '123456', 2),
(3, 'safri', 'Syafrie Syamsudin', '123', 2),
(4, 'kurakura11', 'kurakura', '123', 2),
(7, 'lola', 'Lola Arifin', '123', 2),
(8, 'saddam', 'saddam al faisal', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_header_transaksi`
--
ALTER TABLE `tbl_header_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenis_barang`
--
ALTER TABLE `tbl_jenis_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenis_layanan`
--
ALTER TABLE `tbl_jenis_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kasir`
--
ALTER TABLE `tbl_kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_kasir` (`id_kasir`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_header_transaksi`
--
ALTER TABLE `tbl_header_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_jenis_barang`
--
ALTER TABLE `tbl_jenis_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_jenis_layanan`
--
ALTER TABLE `tbl_jenis_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kasir`
--
ALTER TABLE `tbl_kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
