-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 29, 2022 lúc 04:36 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanli_vuan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donvi`
--

CREATE TABLE `tbl_donvi` (
  `DonVi_VuAn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_donvi`
--

INSERT INTO `tbl_donvi` (`DonVi_VuAn`) VALUES
('Bộ công an'),
('CA huyện'),
('CA tỉnh'),
('Công an xã ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nam`
--

CREATE TABLE `tbl_nam` (
  `Nam` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_nam`
--

INSERT INTO `tbl_nam` (`Nam`) VALUES
(2000),
(2001),
(2002),
(2003),
(2004),
(2005),
(2006),
(2007),
(2008),
(2009),
(2010),
(2011),
(2012),
(2013),
(2014),
(2015),
(2016),
(2017),
(2018),
(2019),
(2020),
(2021),
(2022),
(2023),
(2024),
(2025),
(2026),
(2027),
(2028),
(2029),
(2030);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ngay`
--

CREATE TABLE `tbl_ngay` (
  `Ngay` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_ngay`
--

INSERT INTO `tbl_ngay` (`Ngay`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thang`
--

CREATE TABLE `tbl_thang` (
  `Thang` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_thang`
--

INSERT INTO `tbl_thang` (`Thang`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_theloai`
--

CREATE TABLE `tbl_theloai` (
  `Loai_VuAn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_theloai`
--

INSERT INTO `tbl_theloai` (`Loai_VuAn`) VALUES
('Hình sự'),
('Kinh tế');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_trangthai`
--

CREATE TABLE `tbl_trangthai` (
  `TrangThai_VuAn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_trangthai`
--

INSERT INTO `tbl_trangthai` (`TrangThai_VuAn`) VALUES
('Đã kết thúc'),
('Đang xử lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(100) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `chuc_vu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `name_user`, `password`, `chuc_vu`) VALUES
(1, 'admin', 'demo123', 'Quản lí'),
(2, 'Son', 'demo123', 'Quản lí'),
(3, 'Hieu', 'demo123', 'Nhập liệu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vuan`
--

CREATE TABLE `tbl_vuan` (
  `id_VuAn` varchar(500) NOT NULL,
  `Ten_VuAn` varchar(500) NOT NULL,
  `SL_ToiPham` int(11) NOT NULL,
  `Ngay` int(2) NOT NULL,
  `Thang` int(2) NOT NULL,
  `Nam` int(4) NOT NULL,
  `DiaDiem_VuAn` varchar(500) NOT NULL,
  `DonVi_VuAn` varchar(100) NOT NULL,
  `Loai_VuAn` varchar(100) NOT NULL,
  `TrangThai_VuAn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_vuan`
--

INSERT INTO `tbl_vuan` (`id_VuAn`, `Ten_VuAn`, `SL_ToiPham`, `Ngay`, `Thang`, `Nam`, `DiaDiem_VuAn`, `DonVi_VuAn`, `Loai_VuAn`, `TrangThai_VuAn`) VALUES
('VA01', 'dem', 1, 2, 1, 2001, 'demo', 'Bộ công an', 'Hình sự', 'Đang xử lý'),
('VA02', 'demo2', 21, 3, 1, 2001, 'Hà Nội', 'CA huyện', 'Kinh tế', 'Đang xử lý'),
('VA03', 'demo2', 21, 4, 5, 2003, 'demo', 'CA huyện', 'Hình sự', 'Đã kết thúc');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_donvi`
--
ALTER TABLE `tbl_donvi`
  ADD PRIMARY KEY (`DonVi_VuAn`);

--
-- Chỉ mục cho bảng `tbl_nam`
--
ALTER TABLE `tbl_nam`
  ADD PRIMARY KEY (`Nam`);

--
-- Chỉ mục cho bảng `tbl_ngay`
--
ALTER TABLE `tbl_ngay`
  ADD PRIMARY KEY (`Ngay`);

--
-- Chỉ mục cho bảng `tbl_thang`
--
ALTER TABLE `tbl_thang`
  ADD PRIMARY KEY (`Thang`);

--
-- Chỉ mục cho bảng `tbl_theloai`
--
ALTER TABLE `tbl_theloai`
  ADD PRIMARY KEY (`Loai_VuAn`);

--
-- Chỉ mục cho bảng `tbl_trangthai`
--
ALTER TABLE `tbl_trangthai`
  ADD PRIMARY KEY (`TrangThai_VuAn`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `tbl_vuan`
--
ALTER TABLE `tbl_vuan`
  ADD PRIMARY KEY (`id_VuAn`),
  ADD KEY `Loai_VuAn` (`Loai_VuAn`),
  ADD KEY `tbl_vuan_ibfk_2` (`DonVi_VuAn`),
  ADD KEY `tbl_vuan_ibfk_3` (`TrangThai_VuAn`),
  ADD KEY `tbl_vuan_ibfk_4` (`Ngay`),
  ADD KEY `tbl_vuan_ibfk_5` (`Thang`),
  ADD KEY `tbl_vuan_ibfk_6` (`Nam`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_vuan`
--
ALTER TABLE `tbl_vuan`
  ADD CONSTRAINT `tbl_vuan_ibfk_1` FOREIGN KEY (`Loai_VuAn`) REFERENCES `tbl_theloai` (`Loai_VuAn`),
  ADD CONSTRAINT `tbl_vuan_ibfk_2` FOREIGN KEY (`DonVi_VuAn`) REFERENCES `tbl_donvi` (`DonVi_VuAn`),
  ADD CONSTRAINT `tbl_vuan_ibfk_3` FOREIGN KEY (`TrangThai_VuAn`) REFERENCES `tbl_trangthai` (`TrangThai_VuAn`),
  ADD CONSTRAINT `tbl_vuan_ibfk_4` FOREIGN KEY (`Ngay`) REFERENCES `tbl_ngay` (`Ngay`),
  ADD CONSTRAINT `tbl_vuan_ibfk_5` FOREIGN KEY (`Thang`) REFERENCES `tbl_thang` (`Thang`),
  ADD CONSTRAINT `tbl_vuan_ibfk_6` FOREIGN KEY (`Nam`) REFERENCES `tbl_nam` (`Nam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
