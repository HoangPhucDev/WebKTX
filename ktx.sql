-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2017 at 06:01 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ktx`
--

-- --------------------------------------------------------

--
-- Table structure for table `ct_tai_san`
--

CREATE TABLE `ct_tai_san` (
  `MA_PHONG` int(11) DEFAULT NULL,
  `MA_TAI_SAN` int(11) DEFAULT NULL,
  `SO_LUONG` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khu`
--

CREATE TABLE `khu` (
  `MA_KHU` int(11) NOT NULL,
  `TEN_KHU` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khu`
--

INSERT INTO `khu` (`MA_KHU`, `TEN_KHU`) VALUES
(1, 'Tầng 1'),
(2, 'Tầng 2'),
(3, 'Tầng 3'),
(4, 'Tầng 4'),
(5, 'Tầng 5'),
(6, 'Tầng 6'),
(7, 'Tầng 7'),
(8, 'Tầng 8'),
(9, 'Tầng 9'),
(10, 'Tầng 10'),
(11, 'Tầng 11'),
(12, 'Tầng 12');

-- --------------------------------------------------------

--
-- Table structure for table `loai_phong`
--

CREATE TABLE `loai_phong` (
  `MA_LOAI` int(11) NOT NULL,
  `TEN_LOAI` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GIA_PHONG` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_phong`
--

INSERT INTO `loai_phong` (`MA_LOAI`, `TEN_LOAI`, `GIA_PHONG`) VALUES
(1, 'Thường', '100000'),
(2, 'Dịch Vụ', '160000');

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `MA_ND` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `MAT_KHAU` text COLLATE utf8_unicode_ci,
  `MA_PHONG` int(11) DEFAULT NULL,
  `TEN_ND` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT` int(11) DEFAULT NULL,
  `GIOI_TINH_ND` tinyint(1) DEFAULT NULL,
  `TRANG_THAI_ND` tinyint(1) DEFAULT NULL,
  `CHUC_VU` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`MA_ND`, `MAT_KHAU`, `MA_PHONG`, `TEN_ND`, `EMAIL`, `SDT`, `GIOI_TINH_ND`, `TRANG_THAI_ND`, `CHUC_VU`) VALUES
('1400129', 'e10adc3949ba59abbe56e057f20f883e', 1, 'Phúc', 'nguyenhoangphuc1995@gmail.com', 923911007, 1, 1, 0),
('1400168', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Chi', 'nguyenhoangphuc1995@gmail.com', 923911007, 0, 0, 0),
('342314', 'e10adc3949ba59abbe56e057f20f883e', 7, NULL, NULL, NULL, 1, 1, 0),
('admin', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Admin', 'nguyenhoangphuc1995@gmail.com', 923911007, 1, 0, 1),
('bgfd', 'e10adc3949ba59abbe56e057f20f883e', 7, NULL, NULL, NULL, 1, 1, 0),
('daw32', 'e10adc3949ba59abbe56e057f20f883e', 7, NULL, NULL, NULL, 1, 1, 0),
('dawd3a', 'e10adc3949ba59abbe56e057f20f883e', 7, NULL, NULL, NULL, 1, 1, 0),
('deg5', 'e10adc3949ba59abbe56e057f20f883e', 7, NULL, NULL, NULL, 1, 1, 0),
('dwad', 'e10adc3949ba59abbe56e057f20f883e', 7, NULL, NULL, NULL, 1, 1, 0),
('fer4', 'e10adc3949ba59abbe56e057f20f883e', 8, NULL, NULL, NULL, 1, 1, 0),
('phuc123', 'dsadasdasd', 3, 'Chi', NULL, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `MA_PHONG` int(11) NOT NULL,
  `TEN_PHONG` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MA_KHU` int(11) DEFAULT NULL,
  `MA_LOAI` int(11) DEFAULT NULL,
  `SUC_CHUA` int(20) DEFAULT NULL,
  `GIOI_TINH_PHONG` tinyint(1) DEFAULT NULL,
  `TRANG_THAI_PHONG` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`MA_PHONG`, `TEN_PHONG`, `MA_KHU`, `MA_LOAI`, `SUC_CHUA`, `GIOI_TINH_PHONG`, `TRANG_THAI_PHONG`) VALUES
(1, '101', 1, 1, 6, 0, 1),
(2, '102', 1, 1, 6, 0, 0),
(3, '104', 1, 1, 6, 0, 0),
(4, '105', 1, 1, 6, 0, 0),
(5, '106', 1, 1, 6, 0, 0),
(6, '107', 1, 1, 6, 1, 0),
(7, '108', 1, 1, 6, 1, 0),
(8, '109', 1, 1, 6, 1, 0),
(9, '110', 1, 1, 6, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tai_san`
--

CREATE TABLE `tai_san` (
  `MA_TAI_SAN` int(11) NOT NULL,
  `TEN_TAI_SAN` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GIA_TRI_TS` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tai_san`
--

INSERT INTO `tai_san` (`MA_TAI_SAN`, `TEN_TAI_SAN`, `GIA_TRI_TS`) VALUES
(1, 'Giường', '1000000'),
(2, 'Tủ', '1000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ct_tai_san`
--
ALTER TABLE `ct_tai_san`
  ADD KEY `FK_Reference_6` (`MA_PHONG`),
  ADD KEY `FK_Reference_7` (`MA_TAI_SAN`);

--
-- Indexes for table `khu`
--
ALTER TABLE `khu`
  ADD PRIMARY KEY (`MA_KHU`);

--
-- Indexes for table `loai_phong`
--
ALTER TABLE `loai_phong`
  ADD PRIMARY KEY (`MA_LOAI`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`MA_ND`),
  ADD KEY `FK_Reference_3` (`MA_PHONG`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`MA_PHONG`),
  ADD KEY `FK_Reference_1` (`MA_KHU`),
  ADD KEY `FK_Reference_2` (`MA_LOAI`);

--
-- Indexes for table `tai_san`
--
ALTER TABLE `tai_san`
  ADD PRIMARY KEY (`MA_TAI_SAN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khu`
--
ALTER TABLE `khu`
  MODIFY `MA_KHU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `loai_phong`
--
ALTER TABLE `loai_phong`
  MODIFY `MA_LOAI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `MA_PHONG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tai_san`
--
ALTER TABLE `tai_san`
  MODIFY `MA_TAI_SAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ct_tai_san`
--
ALTER TABLE `ct_tai_san`
  ADD CONSTRAINT `FK_Reference_6` FOREIGN KEY (`MA_PHONG`) REFERENCES `phong` (`MA_PHONG`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Reference_7` FOREIGN KEY (`MA_TAI_SAN`) REFERENCES `tai_san` (`MA_TAI_SAN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD CONSTRAINT `FK_Reference_3` FOREIGN KEY (`MA_PHONG`) REFERENCES `phong` (`MA_PHONG`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `FK_Reference_1` FOREIGN KEY (`MA_KHU`) REFERENCES `khu` (`MA_KHU`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Reference_2` FOREIGN KEY (`MA_LOAI`) REFERENCES `loai_phong` (`MA_LOAI`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
