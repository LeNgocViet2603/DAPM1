-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 03:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_attp`
--

-- --------------------------------------------------------

--
-- Table structure for table `baidang`
--

CREATE TABLE `baidang` (
  `maBaiDang` int(11) NOT NULL,
  `maChuDe` int(11) NOT NULL,
  `hinhAnh` int(11) NOT NULL,
  `tieuDe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noiDung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dinhKem` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maNguoiDang` int(11) NOT NULL,
  `ngayTao` datetime NOT NULL,
  `ngayCapNhat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `baocaovipham`
--

CREATE TABLE `baocaovipham` (
  `maBCVP` int(11) NOT NULL,
  `maCSKD` int(11) NOT NULL,
  `maNguoiBaoCao` int(11) NOT NULL,
  `noiDung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayTao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chude`
--

CREATE TABLE `chude` (
  `maChuDe` int(11) NOT NULL,
  `tenChuDe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cosokinhdoanh`
--

CREATE TABLE `cosokinhdoanh` (
  `maCSKD` int(11) NOT NULL,
  `tenCSKD` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maNguoiDung` int(11) NOT NULL,
  `maLoaiCSKD` int(11) NOT NULL,
  `diaChi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maPhuongXa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dangkygpattp`
--

CREATE TABLE `dangkygpattp` (
  `maDangKy` int(11) NOT NULL,
  `maCSKD` int(11) NOT NULL,
  `maVanBan` int(11) NOT NULL,
  `ngayDangKy` datetime NOT NULL,
  `ghiChu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangThai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dieukhoanvipham`
--

CREATE TABLE `dieukhoanvipham` (
  `maDKVP` int(11) NOT NULL,
  `maKQTT` int(11) NOT NULL,
  `tenviPham` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaiViPham` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayBanHanh` date NOT NULL,
  `ngayHieuLuc` date NOT NULL,
  `mucPhat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giayphepattp`
--

CREATE TABLE `giayphepattp` (
  `maGiayPhepATTP` int(11) NOT NULL,
  `maCSKD` int(11) NOT NULL,
  `maVanBan` int(11) NOT NULL,
  `ngayCap` datetime NOT NULL,
  `thoiHan` date NOT NULL,
  `ngayThuHoi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `maAnh` int(11) NOT NULL,
  `tenAnh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkAnh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kehoachthanhtra`
--

CREATE TABLE `kehoachthanhtra` (
  `maKHTT` int(11) NOT NULL,
  `maCSKD` int(11) NOT NULL,
  `maNguoiLap` int(11) NOT NULL,
  `maVanBan` int(11) NOT NULL,
  `thoiGianLKHTT` datetime NOT NULL,
  `thoiGianThanhTra` date NOT NULL,
  `maNguoiPheDuyet` int(11) NOT NULL,
  `maNhomThanhTra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ketquathanhtra`
--

CREATE TABLE `ketquathanhtra` (
  `maKQTT` int(11) NOT NULL,
  `maKHTT` int(11) NOT NULL,
  `thoiGianThanhTra` date NOT NULL,
  `ketQuaThanhTra` bit(1) DEFAULT NULL,
  `ghiChu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lichsuvipham`
--

CREATE TABLE `lichsuvipham` (
  `maViPham` int(11) NOT NULL,
  `maCSKD` int(11) NOT NULL,
  `maKQTT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaicskd`
--

CREATE TABLE `loaicskd` (
  `maLoaiCSKD` int(11) NOT NULL,
  `tenLoaiCSKD` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `maNguoiDung` int(11) NOT NULL,
  `maQuyen` int(11) NOT NULL DEFAULT 2,
  `matKhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ho` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` int(11) NOT NULL,
  `ngaySinh` date DEFAULT NULL,
  `gioiTinh` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodt` int(13) DEFAULT NULL,
  `diaChi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maPhuongXa` int(11) NOT NULL,
  `trangThai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayTao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhomthanhtra`
--

CREATE TABLE `nhomthanhtra` (
  `maNhomThanhTra` int(11) NOT NULL,
  `maNguoiThanhTra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phuongxa`
--

CREATE TABLE `phuongxa` (
  `maPhuongXa` int(11) NOT NULL,
  `tenPhuongXa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maQuanHuyen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quanhuyen`
--

CREATE TABLE `quanhuyen` (
  `maQuanhuyen` int(11) NOT NULL,
  `tenQuanHuyen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vanban`
--

CREATE TABLE `vanban` (
  `maVanBan` int(11) NOT NULL,
  `soKiHieu` int(11) NOT NULL,
  `loaiVanBan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieuDe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noiDung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maNguoiLap` int(11) NOT NULL,
  `ngayTao` datetime NOT NULL,
  `ngayCapNhat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baidang`
--
ALTER TABLE `baidang`
  ADD PRIMARY KEY (`maBaiDang`),
  ADD KEY `maChuDe` (`maChuDe`),
  ADD KEY `hinhAnh` (`hinhAnh`),
  ADD KEY `maNguoiDang` (`maNguoiDang`);

--
-- Indexes for table `baocaovipham`
--
ALTER TABLE `baocaovipham`
  ADD PRIMARY KEY (`maBCVP`),
  ADD KEY `maCSKD` (`maCSKD`),
  ADD KEY `maNguoiBaoCao` (`maNguoiBaoCao`);

--
-- Indexes for table `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`maChuDe`);

--
-- Indexes for table `cosokinhdoanh`
--
ALTER TABLE `cosokinhdoanh`
  ADD PRIMARY KEY (`maCSKD`),
  ADD KEY `maLoaiCSKD` (`maLoaiCSKD`),
  ADD KEY `maPhuongXa` (`maPhuongXa`);

--
-- Indexes for table `dangkygpattp`
--
ALTER TABLE `dangkygpattp`
  ADD PRIMARY KEY (`maDangKy`),
  ADD KEY `maVanBan` (`maVanBan`);

--
-- Indexes for table `dieukhoanvipham`
--
ALTER TABLE `dieukhoanvipham`
  ADD PRIMARY KEY (`maDKVP`,`maKQTT`),
  ADD KEY `maKQTT` (`maKQTT`);

--
-- Indexes for table `giayphepattp`
--
ALTER TABLE `giayphepattp`
  ADD PRIMARY KEY (`maGiayPhepATTP`),
  ADD KEY `maVanBan` (`maVanBan`),
  ADD KEY `maCSKD` (`maCSKD`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`maAnh`);

--
-- Indexes for table `kehoachthanhtra`
--
ALTER TABLE `kehoachthanhtra`
  ADD PRIMARY KEY (`maKHTT`),
  ADD KEY `maCSKD` (`maCSKD`),
  ADD KEY `maNguoiLap` (`maNguoiLap`),
  ADD KEY `maNguoiPheDuyet` (`maNguoiPheDuyet`),
  ADD KEY `maVanBan` (`maVanBan`),
  ADD KEY `maNhomThanhTra` (`maNhomThanhTra`);

--
-- Indexes for table `ketquathanhtra`
--
ALTER TABLE `ketquathanhtra`
  ADD PRIMARY KEY (`maKQTT`),
  ADD KEY `maKHTT` (`maKHTT`);

--
-- Indexes for table `lichsuvipham`
--
ALTER TABLE `lichsuvipham`
  ADD PRIMARY KEY (`maViPham`),
  ADD KEY `maCSKD` (`maCSKD`),
  ADD KEY `maKQTT` (`maKQTT`);

--
-- Indexes for table `loaicskd`
--
ALTER TABLE `loaicskd`
  ADD PRIMARY KEY (`maLoaiCSKD`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`maNguoiDung`),
  ADD KEY `maPhuongXa` (`maPhuongXa`),
  ADD KEY `avatar` (`avatar`);

--
-- Indexes for table `nhomthanhtra`
--
ALTER TABLE `nhomthanhtra`
  ADD PRIMARY KEY (`maNhomThanhTra`,`maNguoiThanhTra`),
  ADD KEY `maNguoiThanhTra` (`maNguoiThanhTra`);

--
-- Indexes for table `phuongxa`
--
ALTER TABLE `phuongxa`
  ADD PRIMARY KEY (`maPhuongXa`),
  ADD KEY `maQuanHuyen` (`maQuanHuyen`);

--
-- Indexes for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  ADD PRIMARY KEY (`maQuanhuyen`);

--
-- Indexes for table `vanban`
--
ALTER TABLE `vanban`
  ADD PRIMARY KEY (`maVanBan`),
  ADD KEY `maNguoiLap` (`maNguoiLap`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baidang`
--
ALTER TABLE `baidang`
  ADD CONSTRAINT `baidang_ibfk_1` FOREIGN KEY (`maChuDe`) REFERENCES `chude` (`maChuDe`),
  ADD CONSTRAINT `baidang_ibfk_2` FOREIGN KEY (`hinhAnh`) REFERENCES `hinhanh` (`maAnh`),
  ADD CONSTRAINT `baidang_ibfk_3` FOREIGN KEY (`maNguoiDang`) REFERENCES `nguoidung` (`maNguoiDung`);

--
-- Constraints for table `baocaovipham`
--
ALTER TABLE `baocaovipham`
  ADD CONSTRAINT `baocaovipham_ibfk_1` FOREIGN KEY (`maCSKD`) REFERENCES `cosokinhdoanh` (`maCSKD`),
  ADD CONSTRAINT `baocaovipham_ibfk_2` FOREIGN KEY (`maNguoiBaoCao`) REFERENCES `nguoidung` (`maNguoiDung`);

--
-- Constraints for table `cosokinhdoanh`
--
ALTER TABLE `cosokinhdoanh`
  ADD CONSTRAINT `cosokinhdoanh_ibfk_1` FOREIGN KEY (`maLoaiCSKD`) REFERENCES `loaicskd` (`maLoaiCSKD`),
  ADD CONSTRAINT `cosokinhdoanh_ibfk_2` FOREIGN KEY (`maPhuongXa`) REFERENCES `phuongxa` (`maPhuongXa`);

--
-- Constraints for table `dangkygpattp`
--
ALTER TABLE `dangkygpattp`
  ADD CONSTRAINT `dangkygpattp_ibfk_1` FOREIGN KEY (`maVanBan`) REFERENCES `vanban` (`maVanBan`);

--
-- Constraints for table `dieukhoanvipham`
--
ALTER TABLE `dieukhoanvipham`
  ADD CONSTRAINT `dieukhoanvipham_ibfk_1` FOREIGN KEY (`maKQTT`) REFERENCES `ketquathanhtra` (`maKQTT`);

--
-- Constraints for table `giayphepattp`
--
ALTER TABLE `giayphepattp`
  ADD CONSTRAINT `giayphepattp_ibfk_1` FOREIGN KEY (`maVanBan`) REFERENCES `vanban` (`maVanBan`),
  ADD CONSTRAINT `giayphepattp_ibfk_2` FOREIGN KEY (`maCSKD`) REFERENCES `cosokinhdoanh` (`maCSKD`);

--
-- Constraints for table `kehoachthanhtra`
--
ALTER TABLE `kehoachthanhtra`
  ADD CONSTRAINT `kehoachthanhtra_ibfk_1` FOREIGN KEY (`maCSKD`) REFERENCES `cosokinhdoanh` (`maCSKD`),
  ADD CONSTRAINT `kehoachthanhtra_ibfk_2` FOREIGN KEY (`maNguoiLap`) REFERENCES `nguoidung` (`maNguoiDung`),
  ADD CONSTRAINT `kehoachthanhtra_ibfk_3` FOREIGN KEY (`maNguoiPheDuyet`) REFERENCES `nguoidung` (`maNguoiDung`),
  ADD CONSTRAINT `kehoachthanhtra_ibfk_4` FOREIGN KEY (`maVanBan`) REFERENCES `vanban` (`maVanBan`),
  ADD CONSTRAINT `kehoachthanhtra_ibfk_5` FOREIGN KEY (`maNhomThanhTra`) REFERENCES `nhomthanhtra` (`maNhomThanhTra`);

--
-- Constraints for table `ketquathanhtra`
--
ALTER TABLE `ketquathanhtra`
  ADD CONSTRAINT `ketquathanhtra_ibfk_1` FOREIGN KEY (`maKHTT`) REFERENCES `kehoachthanhtra` (`maKHTT`);

--
-- Constraints for table `lichsuvipham`
--
ALTER TABLE `lichsuvipham`
  ADD CONSTRAINT `lichsuvipham_ibfk_1` FOREIGN KEY (`maCSKD`) REFERENCES `cosokinhdoanh` (`maCSKD`),
  ADD CONSTRAINT `lichsuvipham_ibfk_2` FOREIGN KEY (`maKQTT`) REFERENCES `ketquathanhtra` (`maKQTT`);

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`maPhuongXa`) REFERENCES `phuongxa` (`maPhuongXa`),
  ADD CONSTRAINT `nguoidung_ibfk_2` FOREIGN KEY (`avatar`) REFERENCES `hinhanh` (`maAnh`);

--
-- Constraints for table `nhomthanhtra`
--
ALTER TABLE `nhomthanhtra`
  ADD CONSTRAINT `nhomthanhtra_ibfk_1` FOREIGN KEY (`maNguoiThanhTra`) REFERENCES `nguoidung` (`maNguoiDung`);

--
-- Constraints for table `phuongxa`
--
ALTER TABLE `phuongxa`
  ADD CONSTRAINT `phuongxa_ibfk_1` FOREIGN KEY (`maQuanHuyen`) REFERENCES `quanhuyen` (`maQuanhuyen`);

--
-- Constraints for table `vanban`
--
ALTER TABLE `vanban`
  ADD CONSTRAINT `vanban_ibfk_1` FOREIGN KEY (`maNguoiLap`) REFERENCES `nguoidung` (`maNguoiDung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
