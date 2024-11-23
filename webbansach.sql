-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 23, 2024 lúc 02:10 AM
-- Phiên bản máy phục vụ: 8.3.0
-- Phiên bản PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbansach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

DROP TABLE IF EXISTS `binhluan`;
CREATE TABLE IF NOT EXISTS `binhluan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_sanpham` int DEFAULT NULL,
  `id_taikhoan` int DEFAULT NULL,
  `noidung` text,
  `danhgia` int DEFAULT NULL,
  `ngaytao` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sanpham` (`id_sanpham`),
  KEY `id_taikhoan` (`id_taikhoan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_hoadon` int DEFAULT NULL,
  `gia` decimal(10,2) DEFAULT NULL,
  `soluong` int DEFAULT NULL,
  `id_sp` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_hoadon` (`id_hoadon`),
  KEY `id_sp` (`id_sp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

DROP TABLE IF EXISTS `danh_muc`;
CREATE TABLE IF NOT EXISTS `danh_muc` (
  `id_danh_muc` int NOT NULL AUTO_INCREMENT,
  `ten_danh_muc` varchar(100) NOT NULL,
  PRIMARY KEY (`id_danh_muc`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id_danh_muc`, `ten_danh_muc`) VALUES
(1, 'Manga'),
(2, 'Tiểu thuyết'),
(3, 'Giáo dục'),
(4, 'Truyện ngắn'),
(11, 'Truyện hài'),
(10, 'Trinh thám');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang`
--

DROP TABLE IF EXISTS `gio_hang`;
CREATE TABLE IF NOT EXISTS `gio_hang` (
  `id_giohang` int NOT NULL AUTO_INCREMENT,
  `id_sp` int DEFAULT NULL,
  `so_luong` int DEFAULT NULL,
  PRIMARY KEY (`id_giohang`),
  KEY `id_sp` (`id_sp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `id_hoa_don` int NOT NULL AUTO_INCREMENT,
  `id_nguoidung` int DEFAULT NULL,
  `phuongthucthanhtoan` varchar(50) DEFAULT NULL,
  `tinhtrang` varchar(50) DEFAULT NULL,
  `tongtien` decimal(10,2) DEFAULT NULL,
  `ho_ten` varchar(100) DEFAULT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `so_dt` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_hoa_don`),
  KEY `id_nguoidung` (`id_nguoidung`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho_anh`
--

DROP TABLE IF EXISTS `kho_anh`;
CREATE TABLE IF NOT EXISTS `kho_anh` (
  `id_ha` int NOT NULL AUTO_INCREMENT,
  `ten_ha` varchar(255) DEFAULT NULL,
  `id_sp` int DEFAULT NULL,
  PRIMARY KEY (`id_ha`),
  KEY `id_sp` (`id_sp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

DROP TABLE IF EXISTS `san_pham`;
CREATE TABLE IF NOT EXISTS `san_pham` (
  `id_sp` int NOT NULL AUTO_INCREMENT,
  `ten_sp` varchar(100) NOT NULL,
  `gia` int DEFAULT NULL,
  `anh_sp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_danh_muc` int DEFAULT NULL,
  `tac_gia` varchar(100) DEFAULT NULL,
  `ngay_xb` date DEFAULT NULL,
  `tinh_trang` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_sp`),
  KEY `id_danh_muc` (`id_danh_muc`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `gia`, `anh_sp`, `id_danh_muc`, `tac_gia`, `ngay_xb`, `tinh_trang`) VALUES
(1, 'conan', 20200, 'conantruyen_RRQU.jpg', 1, 'Gosho Aoyama', '2014-11-23', 'còn hàng'),
(5, 'Đắc Nhân Tâm', 300000, 'dacnhantam86.jpg', 3, 'Dale Carnegie', '1936-12-10', 'hết hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

DROP TABLE IF EXISTS `tai_khoan`;
CREATE TABLE IF NOT EXISTS `tai_khoan` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username_cli` varchar(50) NOT NULL,
  `password_cli` varchar(100) NOT NULL,
  `email_cli` varchar(100) NOT NULL,
  `ho_ten` varchar(100) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `sdt` varchar(15) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id_user`, `username_cli`, `password_cli`, `email_cli`, `ho_ten`, `avatar`, `dia_chi`, `sdt`, `role`) VALUES
(1, 'Duytao123', 'Duytaolao19@', 'tamuon00@gmail.com', 'Tran Duy', '', NULL, '0865091023', 'admin'),
(2, 'abc', 'abc123', 'abc@mail.mail', 'fsaaw', '', 'faw awdfsa awe aw2 awda adfwa', '0259844315453', 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

DROP TABLE IF EXISTS `voucher`;
CREATE TABLE IF NOT EXISTS `voucher` (
  `id_voucher` int NOT NULL AUTO_INCREMENT,
  `ten_voucher` varchar(100) DEFAULT NULL,
  `ngay_bat_dau` date DEFAULT NULL,
  `ngay_ket_thuc` date DEFAULT NULL,
  `kieu_voucher` varchar(50) DEFAULT NULL,
  `dieu_kien` text,
  `so_tien_giam` decimal(10,2) DEFAULT NULL,
  `ngay_cap_nhat` date DEFAULT NULL,
  PRIMARY KEY (`id_voucher`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
