-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 13, 2020 lúc 11:55 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `restaurant`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichlamviec`
--

CREATE TABLE `lichlamviec` (
  `id` int(11) NOT NULL,
  `ca` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ngaylam` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyrandom` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichlamviec`
--

INSERT INTO `lichlamviec` (`id`, `ca`, `ngaylam`, `chucvu`, `keyrandom`) VALUES
(1, '9AM-4PM', '', 'Chạy bàn', ''),
(2, '4PM-10PM', '', 'Chạy bàn', ''),
(3, '10AM-4PM', '', 'Thu ngân ', ''),
(4, '4PM-9PM', '', 'Thu ngân', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(20) UNSIGNED NOT NULL,
  `ten` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `calamviec` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci NOT NULL,
  `count` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='nhan vien chay ban';

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `ten`, `sdt`, `chucvu`, `calamviec`, `ghichu`, `count`) VALUES
(4, 'Thoại Thẫn Thờ', '0933496897', 'Chạy bàn', '9AM-4PM', '', ''),
(7, 'Bé Tũn', '0123', 'Chạy bàn', '4PM-10PM', '', ''),
(8, 'Bé Giun', '123', 'Thu ngân ', '10AM-4PM', '', ''),
(9, 'A Đồng', '1123123', 'Chạy bàn', '9AM-4PM', '', ''),
(10, 'B Đồng', '12312', 'Thu ngân ', '4PM-10PM', '', ''),
(11, 'Hoàng ML', '115', 'Chạy bàn', '10AM-4PM', 'trừ lương', ''),
(13, 'Tuấn Thộn', '2223', 'Chạy bàn', '4PM-9PM', '', ''),
(14, 'Định', '113', 'Thu ngân ', '9AM-4PM', '', ''),
(15, 'Hà Hớn Hở', '89898', 'Chạy bàn', '9AM-4PM', 'hay đi trễ', ''),
(16, 'Chủ Tịch', '6969', 'Chạy bàn', '9AM-4PM', '', ''),
(17, 'Tester', '123', 'Chạy bàn', '4PM-10PM', '', ''),
(18, 'Hà Hẫn Hờ', '114', 'Chạy bàn', '4PM-9PM', 'lề mề', ''),
(19, 'Hùng Hầm Hố', '115', 'Chạy bàn', '4PM-9PM', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `temp`
--

CREATE TABLE `temp` (
  `socalamviec` varchar(150) NOT NULL,
  `ghichu` varchar(150) NOT NULL,
  `count` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `lichlamviec`
--
ALTER TABLE `lichlamviec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ca` (`ca`),
  ADD KEY `chucvu` (`chucvu`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_nhanvien_lichlamviec` (`calamviec`),
  ADD KEY `FK_nhanvien_lichlamviec_2` (`chucvu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `lichlamviec`
--
ALTER TABLE `lichlamviec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `FK_nhanvien_lichlamviec` FOREIGN KEY (`calamviec`) REFERENCES `lichlamviec` (`ca`),
  ADD CONSTRAINT `FK_nhanvien_lichlamviec_2` FOREIGN KEY (`chucvu`) REFERENCES `lichlamviec` (`chucvu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
