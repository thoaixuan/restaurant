-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2020 at 01:51 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `lichlamviec`
--

CREATE TABLE `lichlamviec` (
  `id` int(11) NOT NULL,
  `ca` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ngaylam` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyrandom` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lichlamviec`
--

INSERT INTO `lichlamviec` (`id`, `ca`, `ngaylam`, `chucvu`, `keyrandom`) VALUES
(1, '9AM-4PM', '', 'Chạy bàn', ''),
(2, '4PM-10PM', '', 'Chạy bàn', ''),
(3, '10AM-4PM', '', 'Thu ngân ', ''),
(4, '4PM-9PM', '', 'Thu ngân', ''),
(5, '0-0', 'Default', 'Default', 'Default');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(20) UNSIGNED NOT NULL,
  `ten` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `sdt` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `calamviec` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci NOT NULL,
  `count` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='nhan vien chay ban';

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `ten`, `sdt`, `chucvu`, `calamviec`, `ghichu`, `count`) VALUES
(4, 'Thoại Thẫn Thờ', '0933496897', 'Chạy bàn', '9AM-4PM', '', '1'),
(7, 'Bé Tũn', '0123', 'Chạy bàn', '4PM-10PM', '', '2'),
(8, 'Bé Giun', '123', 'Thu ngân ', '4PM-9PM', '', '2'),
(9, 'A Đồng', '1123123', 'Chạy bàn', '4PM-10PM', '', '1'),
(10, 'B Đồng', '12312', 'Thu ngân ', '10AM-4PM', '', '2'),
(11, 'Hoàng ML', '115', 'Chạy bàn', '9AM-4PM', 'trừ lương', '1'),
(13, 'Tuấn Thộn', '2223', 'Chạy bàn', '9AM-4PM', '', '2'),
(14, 'Định', '113', 'Thu ngân ', '4PM-9PM', '', '1'),
(15, 'Hà Hớn Hở', '89898', 'Chạy bàn', '9AM-4PM', 'hay đi trễ', '2'),
(16, 'Chủ Tịch', '6969', 'Chạy bàn', '9AM-4PM', '', '2'),
(17, 'Tester', '123', 'Chạy bàn', '9AM-4PM', '', '2'),
(18, 'Hà Hẫn Hờ', '114', 'Chạy bàn', '9AM-4PM', 'lề mề', '1'),
(27, 'Túy', '+84', 'Chạy bàn', '9AM-4PM', '113', '1'),
(32, 'Đạt 09', '+84', 'Chạy bàn', '4PM-10PM', 'Lỳ lỳ', '2'),
(35, 'Đặng ÓC', '+84', 'Chạy bàn', '9AM-4PM', '', '1'),
(36, 'Hải Đại phú', '+84', 'Chạy bàn', '9AM-4PM', '', '2'),
(37, 'Thụn', '+84', 'Chạy bàn', '9AM-4PM', '', '1'),
(38, 'VL Hòn', '+84', 'Chạy bàn', '9AM-4PM', '', '1'),
(39, 'Gà Tre', '+84', 'Chạy bàn', '9AM-4PM', '', '1'),
(40, 'Hú Lê', '+84', 'Chạy bàn', '4PM-10PM', '', '2'),
(41, 'Tú Xuân', '+84', 'Chạy bàn', '4PM-10PM', '', '1'),
(42, 'Tú Bà', '+84', 'Chạy bàn', '9AM-4PM', '', '2'),
(43, 'Thúy', '+84', 'Chạy bàn', '4PM-10PM', '', '1'),
(44, 'Ngọc', '+84', 'Chạy bàn', '4PM-10PM', '', '1'),
(45, 'Lan', '+84', 'Chạy bàn', '4PM-10PM', '', '2'),
(48, 'Ngân Thu', '113', 'Thu ngân ', '4PM-9PM', '11111', '1'),
(49, 'OKE', '123', 'Thu ngân ', '10AM-4PM', '', '1'),
(50, 'YES', '2222', 'Thu ngân ', '10AM-4PM', '', '1'),
(53, '49 Thu ngân', '123', 'Thu ngân ', '10AM-4PM', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `socalamviec` varchar(150) NOT NULL,
  `ghichu` varchar(150) NOT NULL,
  `count` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lichlamviec`
--
ALTER TABLE `lichlamviec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ca` (`ca`),
  ADD KEY `chucvu` (`chucvu`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_nhanvien_lichlamviec` (`calamviec`),
  ADD KEY `FK_nhanvien_lichlamviec_2` (`chucvu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lichlamviec`
--
ALTER TABLE `lichlamviec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `FK_nhanvien_lichlamviec` FOREIGN KEY (`calamviec`) REFERENCES `lichlamviec` (`ca`),
  ADD CONSTRAINT `FK_nhanvien_lichlamviec_2` FOREIGN KEY (`chucvu`) REFERENCES `lichlamviec` (`chucvu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
