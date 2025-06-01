-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 03:42 PM
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
-- Database: `webxe`
--

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `IDLoaiSanPham` int(10) NOT NULL,
  `LoaiSanPham` varchar(50) NOT NULL,
  `Logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`IDLoaiSanPham`, `LoaiSanPham`, `Logo`) VALUES
(1, 'Honda', ''),
(2, 'Yamaha', ''),
(3, 'Ducati', ''),
(4, 'Suzuki', ''),
(5, 'SYM', '');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `IDSanPham` int(10) NOT NULL,
  `TenSanPham` varchar(200) NOT NULL,
  `Gia` double NOT NULL,
  `IDLoaiSanPham` int(11) DEFAULT NULL,
  `HinhAnh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`IDSanPham`, `TenSanPham`, `Gia`, `IDLoaiSanPham`, `HinhAnh`) VALUES
(1, 'SH350i', 150990000, 1, 'img/h1.png'),
(2, 'Vario 120', 40750000, 1, 'img/h2.png\r\n'),
(3, 'Air Blade 160', 42000000, 1, 'img/h3.png'),
(4, 'CB1000R 2023', 510500000, 1, 'img/h4.jpg'),
(5, 'Future 125 FI', 34500000, 1, 'img/h5.jpg'),
(6, 'MT-03', 129000000, 2, 'img/h6.png'),
(7, 'R15M 2024', 86000000, 2, 'img/h7.png'),
(8, 'Yamaha PG-1', 30340000, 2, 'img/h8.png'),
(9, 'XS155R', 77000000, 2, 'img/h9.png'),
(10, 'NVX 155 Camo', 52690000, 2, 'img/h10.png'),
(11, 'Monster 797', 328900000, 3, 'img/h11.jpg'),
(12, 'DesertX Rally 2024', 540000000, 3, 'img/h12.png'),
(13, 'Diavel V4', 1025000000, 3, 'img/h13.png'),
(14, 'Superleggera V4', 5800000000, 3, 'img/h14.png'),
(15, 'Hypermotard 950 RVE', 474000000, 3, 'img/h15.png'),
(16, 'Raider 2024', 45990000, 4, 'img/h16.png'),
(17, 'Satria 2024', 48490000, 4, 'img/h17.png'),
(18, 'GSX S150', 54900000, 4, 'img/h18.jpg'),
(19, 'Intruder 150', 78900000, 4, 'img/h19.png'),
(20, 'GSX-S1000', 399000000, 4, 'img/h20.jpg'),
(21, 'Angela 50', 15300000, 5, 'img/h21.png'),
(22, 'SYM Abela 110', 26490000, 5, 'img/h22.png'),
(23, 'SYM star SR 125', 28700000, 5, 'img/h23.jpg'),
(24, 'SYM Elite 50', 21490000, 5, 'img/h24.jpg'),
(25, 'Elegant S', 12700000, 5, 'img/h25.png'),
(41, 'wave alpha 110', -17800000, 2, 'img/h26.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`IDLoaiSanPham`),
  ADD UNIQUE KEY `LoaiSanPham` (`LoaiSanPham`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`IDSanPham`),
  ADD KEY `FK_LSP` (`IDLoaiSanPham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `IDLoaiSanPham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `IDSanPham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_LSP` FOREIGN KEY (`IDLoaiSanPham`) REFERENCES `loaisanpham` (`IDLoaiSanPHam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
