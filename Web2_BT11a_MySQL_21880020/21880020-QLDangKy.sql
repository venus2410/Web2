-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 26, 2023 lúc 12:34 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qldangky_21880020`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dkhoc`
--

DROP TABLE IF EXISTS `dkhoc`;
CREATE TABLE IF NOT EXISTS `dkhoc` (
  `MaSV` int NOT NULL,
  `MaMH` varchar(5) NOT NULL,
  `LanHocThu` int NOT NULL,
  `Diem` float NOT NULL,
  PRIMARY KEY (`MaSV`,`MaMH`,`LanHocThu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `dkhoc`
--

INSERT INTO `dkhoc` (`MaSV`, `MaMH`, `LanHocThu`, `Diem`) VALUES
(1, 'TCC1', 1, 5),
(2, 'TCC1', 1, 7),
(3, 'TCC2', 1, 6),
(2, 'CSDL', 1, 8),
(2, 'WEB2', 1, 5),
(5, 'WEB2', 1, 7),
(2, 'TKPM', 1, 7.5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophoc`
--

DROP TABLE IF EXISTS `lophoc`;
CREATE TABLE IF NOT EXISTS `lophoc` (
  `MaLop` varchar(5) NOT NULL,
  `TenLop` varchar(100) NOT NULL,
  PRIMARY KEY (`MaLop`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `lophoc`
--

INSERT INTO `lophoc` (`MaLop`, `TenLop`) VALUES
('A', 'QTKD'),
('B', 'Công nghệ thông tin'),
('C', 'Toán ứng dụng'),
('D', 'Công nghệ thực phẩm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

DROP TABLE IF EXISTS `monhoc`;
CREATE TABLE IF NOT EXISTS `monhoc` (
  `MaMonHoc` varchar(5) NOT NULL,
  `TenMon` varchar(100) NOT NULL,
  PRIMARY KEY (`MaMonHoc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMonHoc`, `TenMon`) VALUES
('TCC1', 'Toán cao cấp 1'),
('TCC2', 'Toán cao cấp 2'),
('CSDL', 'Cơ sở dữ liệu'),
('WEB2', 'Lập trình web 2'),
('TKPM', 'Thiết kế phần mềm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

DROP TABLE IF EXISTS `sinhvien`;
CREATE TABLE IF NOT EXISTS `sinhvien` (
  `MSSV` int NOT NULL,
  `TenSV` varchar(100) NOT NULL,
  `DTB` float NOT NULL,
  `GioiTinh` varchar(3) NOT NULL,
  `Nsinh` date NOT NULL,
  `HocLop` varchar(5) NOT NULL,
  PRIMARY KEY (`MSSV`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MSSV`, `TenSV`, `DTB`, `GioiTinh`, `Nsinh`, `HocLop`) VALUES
(1, 'Nguyễn Văn A', 5.5, 'Nam', '2000-11-09', 'A'),
(2, 'Nguyễn Thị B', 6.7, 'Nữ', '2003-03-08', 'B'),
(3, 'Lê Thị C', 7.2, 'Nữ', '2004-04-16', 'C'),
(4, 'Nguyễn Văn D', 8.1, 'Nữ', '2005-07-06', 'C'),
(5, 'Trần Thị E', 4.5, 'Nữ', '2004-06-11', 'B');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
