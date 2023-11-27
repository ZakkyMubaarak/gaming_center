-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 05:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaming_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keterangan` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kategori` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(11, 'PlayStation Portable PSP1000', 'Merupakan model pertama dari PlayStation Portable, diluncurkan pada tahun 2004. PSP-1000 memiliki layar LCD 4,3 inci dan fitur kontrol yang ergonomis. Meskipun telah digantikan oleh model yang lebih baru, Waktu Penyewaan 12Ja', 'PSP', 30000, 5, 'psp1.jpg'),
(12, 'PlayStation Portable Slim and Lite PSP2000', 'Diperkenalkan pada tahun 2007, PSP-2000 menawarkan desain yang lebih ringan dan tipis dibandingkan dengan pendahulunya. Memiliki perbaikan layar dan meningkatkan efisiensi baterai. Waktu Penyewaan 12Jam/1Stok', 'PSP', 30000, 7, 'psp2.jpg'),
(13, 'PlayStation Portable Go PSP N1000', 'Diluncurkan pada tahun 2009, PSP Go memiliki desain yang berbeda dengan model sebelumnya. Tidak memiliki drive UMD fisik, PSP Go sepenuhnya mengandalkan penyimpanan internal dan kartu memori. Waktu Penyewaan 12Jam/1Stok', 'PSP', 30000, 6, 'psp3.jpg'),
(14, 'Xbox One', 'Dirilis pada tahun 2013, Xbox One menawarkan integrasi multimedia yang kuat dengan kemampuan memutar Blu-ray, streaming video, dan kontrol suara menggunakan Kinect. Waktu Penyewaan 12Jam/1Stok', 'Xbox', 40000, 6, 'xbox11.jpg'),
(15, 'Xbox Series X', 'Meluncur pada tahun 2020, Xbox Series X adalah generasi terbaru dari konsol Xbox. Menampilkan daya komputasi yang tinggi, SSD cepat, dan dukungan untuk resolusi 4K. Waktu Penyewaan 12Jam/1Stok', 'Xbox', 140000, 6, 'xbox2.jpg'),
(16, 'Nintendo Switch', 'Diluncurkan pada tahun 2017, Nintendo Switch menawarkan pendekatan unik dengan kemampuan beralih antara mode konsol rumah dan handheld. Waktu Penyewaan 12Jam/1Stok', 'Nintendo', 95000, 6, 'nintendo11.jpg'),
(17, 'PlayStation 2', 'Dirilis pada tahun 2000, PlayStation 2 menjadi salah satu konsol terlaris sepanjang masa. PS2 menawarkan perpustakaan permainan yang luas dan menjadi platform untuk berbagai judul yang inovatif. Waktu Penyewaan 12Jam/1Stok', 'Playstasion', 30000, 7, 'ps2.jpg'),
(18, 'PlayStation 3', 'Diluncurkan pada tahun 2006, PS3 membawa peningkatan signifikan dalam hal grafis dan daya komputasi. Selain berfungsi sebagai konsol permainan, PS3 juga menjadi pemutar Blu-ray. Waktu Penyewaan 12Jam/1Stok', 'Playstasion', 40000, 7, 'ps3.jpg'),
(36, 'PlayStation 4', 'Meluncur pada tahun 2013, PS4 membawa peningkatan grafis dan performa yang substansial. Dilengkapi dengan kontroler DualShock 4 yang baru. Waktu Penyewaan 12Jam/1Stok', 'Playstasion', 105000, 7, 'ps4.jpg'),
(37, 'PlayStation 5', 'Dirilis pada tahun 2020, PS5 adalah generasi terbaru dari konsol PlayStation. Waktu Penyewaan 12 Jam/1 Stock', 'Playstasion', 160000, 6, 'ps5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `no_ktp` char(16) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `no_ktp`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(49, 'UBSI', '1234567890123456', 'Ciledug', '2023-11-26 22:58:37', '2023-11-27 22:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(59, 49, 16, 'Nintendo Switch', 1, 95000, ''),
(60, 49, 37, 'PlayStation 5', 1, 160000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_ktp` char(16) NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `no_ktp`, `password`, `role_id`) VALUES
(12192871, 'admin', 'admin', '', '123456', 1),
(12192882, 'Kelompok 6', 'Kelompok 6', '3174748596144582', '123456', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12192883;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
