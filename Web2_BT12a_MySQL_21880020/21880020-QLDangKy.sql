-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 02, 2023 at 06:52 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qldangky_21880020`
--

-- --------------------------------------------------------

--
-- Table structure for table `dkhoc`
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
-- Dumping data for table `dkhoc`
--

INSERT INTO `dkhoc` (`MaSV`, `MaMH`, `LanHocThu`, `Diem`) VALUES
(8, 'TCC1', 1, 2.3),
(7, 'TCC1', 1, 3.6),
(6, 'TCC1', 1, 4.8),
(5, 'TCC1', 1, 7),
(4, 'TCC1', 1, 1.7),
(3, 'TCC1', 1, 3.7),
(2, 'TCC1', 1, 1.2),
(1, 'TCC1', 1, 5.9),
(9, 'TCC1', 1, 9.1),
(10, 'TCC1', 1, 9.4),
(11, 'TCC1', 1, 0.5),
(12, 'TCC1', 1, 8.9),
(13, 'TCC1', 1, 1.5),
(14, 'TCC1', 1, 2.9),
(15, 'TCC1', 1, 3.9),
(16, 'TCC1', 1, 9.2),
(1, 'TCC2', 1, 0.5),
(2, 'TCC2', 1, 5.1),
(3, 'TCC2', 1, 3.1),
(4, 'TCC2', 1, 2.2),
(5, 'TCC2', 1, 9),
(6, 'TCC2', 1, 3),
(7, 'TCC2', 1, 4.2),
(8, 'TCC2', 1, 9),
(9, 'TCC2', 1, 1.2),
(10, 'TCC2', 1, 1.8),
(11, 'TCC2', 1, 3.9),
(12, 'TCC2', 1, 9.8),
(13, 'TCC2', 1, 9.8),
(14, 'TCC2', 1, 8.6),
(15, 'TCC2', 1, 2),
(16, 'TCC2', 1, 6.4),
(1, 'CSDL', 1, 6.8),
(2, 'CSDL', 1, 9.3),
(3, 'CSDL', 1, 8.2),
(4, 'CSDL', 1, 2.4),
(5, 'CSDL', 1, 7.9),
(6, 'CSDL', 1, 6.4),
(7, 'CSDL', 1, 10),
(8, 'CSDL', 1, 7.7),
(9, 'CSDL', 1, 4),
(10, 'CSDL', 1, 0.6),
(11, 'CSDL', 1, 3.3),
(12, 'CSDL', 1, 8.1),
(13, 'CSDL', 1, 3.1),
(14, 'CSDL', 1, 7.4),
(15, 'CSDL', 1, 1.9),
(16, 'CSDL', 1, 4.4),
(1, 'WEB2', 1, 9.5),
(2, 'WEB2', 1, 5.2),
(3, 'WEB2', 1, 7.1),
(4, 'WEB2', 1, 4),
(5, 'WEB2', 1, 9.3),
(6, 'WEB2', 1, 3.9),
(7, 'WEB2', 1, 8),
(8, 'WEB2', 1, 1.7),
(9, 'WEB2', 1, 3.1),
(10, 'WEB2', 1, 2.7),
(11, 'WEB2', 1, 5.7),
(12, 'WEB2', 1, 3.9),
(13, 'WEB2', 1, 5.7),
(14, 'WEB2', 1, 9.7),
(15, 'WEB2', 1, 2.7),
(16, 'WEB2', 1, 1.3),
(1, 'TKPM', 1, 1.7),
(2, 'TKPM', 1, 9.9),
(3, 'TKPM', 1, 4),
(4, 'TKPM', 1, 4.3),
(5, 'TKPM', 1, 8.9),
(6, 'TKPM', 1, 5.6),
(7, 'TKPM', 1, 7.9),
(8, 'TKPM', 1, 8.6),
(9, 'TKPM', 1, 2.3),
(10, 'TKPM', 1, 6.2),
(11, 'TKPM', 1, 1.5),
(12, 'TKPM', 1, 9.1),
(13, 'TKPM', 1, 2.5),
(14, 'TKPM', 1, 9.7),
(15, 'TKPM', 1, 7.5),
(16, 'TKPM', 1, 5.7);

-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--

DROP TABLE IF EXISTS `lophoc`;
CREATE TABLE IF NOT EXISTS `lophoc` (
  `MaLop` varchar(5) NOT NULL,
  `TenLop` varchar(100) NOT NULL,
  PRIMARY KEY (`MaLop`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `lophoc`
--

INSERT INTO `lophoc` (`MaLop`, `TenLop`) VALUES
('A', 'Khoa học máy tính'),
('B', 'Công nghệ thông tin'),
('C', 'Toán ứng dụng'),
('D', 'Công nghệ phần mềm');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

DROP TABLE IF EXISTS `monhoc`;
CREATE TABLE IF NOT EXISTS `monhoc` (
  `MaMonHoc` varchar(5) NOT NULL,
  `TenMon` varchar(100) NOT NULL,
  PRIMARY KEY (`MaMonHoc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaMonHoc`, `TenMon`) VALUES
('TCC1', 'Toán cao cấp 1'),
('TCC2', 'Toán cao cấp 2'),
('CSDL', 'Cơ sở dữ liệu'),
('WEB2', 'Lập trình web 2'),
('TKPM', 'Thiết kế phần mềm');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
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
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MSSV`, `TenSV`, `DTB`, `GioiTinh`, `Nsinh`, `HocLop`) VALUES
(1, 'Nguyễn Văn An', 5.5, 'Nam', '2000-11-09', 'A'),
(2, 'Nguyễn Thị Bích', 6.7, 'Nữ', '2003-03-08', 'B'),
(3, 'Lê Thị Cẩm', 7.2, 'Nữ', '2004-04-16', 'C'),
(4, 'Nguyễn Văn Dư', 8.1, 'Nữ', '2005-07-06', 'C'),
(5, 'Trần Thị Em', 4.5, 'Nữ', '2004-06-11', 'B'),
(6, 'Lê Văn Bình', 4.7, 'Nam', '2005-07-09', 'A'),
(7, 'Trần Văn Vinh', 9.2, 'Nữ', '2006-05-09', 'B'),
(8, 'Trần Thị Ái', 2.2, 'Nữ', '2005-11-11', 'A'),
(9, 'Võ Tấn Phát', 8.3, 'Nam', '2004-12-12', 'C'),
(10, 'Lưu Minh Ngọc', 7.2, 'Nữ', '2006-03-01', 'D'),
(11, 'Phan Bích Tuyền', 6.8, 'Nữ', '2005-02-09', 'C'),
(12, 'Võ Văn Thư', 5.9, 'Nam', '2003-07-11', 'A'),
(13, 'Quách Phú Thành', 4.1, 'Nam', '2005-06-12', 'D'),
(14, 'Nguyễn Thị Mỹ Linh', 7.9, 'Nữ', '2003-12-01', 'B'),
(15, 'Phan Xào Nam', 2.9, 'Nam', '2004-09-02', 'D'),
(16, 'Lê Duy Tống', 3.1, 'Nam', '2005-04-11', 'D');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
