-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2024 at 03:02 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `id_sanpham`, `id_taikhoan`, `noidung`, `danhgia`, `ngaytao`) VALUES
(1, 5, 7, 'gbuewsighdiyusgbsuigbibbiypvuv', 5, '2024-11-12'),
(4, 13, 6, 'gbwytesfegayutwdsa', 5, '2024-12-08'),
(5, 13, 6, 'gnaegbvausdvyiawdfa', 5, '2024-12-08'),
(6, 15, 9, 'Quyển sách này thật bổ ích, tôi phải mua! ', 5, '2024-12-08'),
(7, 20, 9, 'Truyện này hay quá, tôi muốn mua phần tiếp theo!', 5, '2024-12-08'),
(8, 14, 9, 'Vui vẻ quá, hài hước quá, còn tiện cho việc học của tôi nữa!', 5, '2024-12-08'),
(11, 11, 9, 'Đọc bộ truyện này khiến tôi nhớ về thời xưa quá!', 5, '2024-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_hoadon` int DEFAULT NULL,
  `gia` int DEFAULT NULL,
  `soluong` int DEFAULT NULL,
  `id_sp` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_hoadon` (`id_hoadon`),
  KEY `id_sp` (`id_sp`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id`, `id_hoadon`, `gia`, `soluong`, `id_sp`) VALUES
(22, 12, 20200, 1, 1),
(21, 11, 20200, 1, 1),
(20, 10, 167000, 6, 20),
(19, 10, 35900, 8, 13),
(23, 12, 300000, 1, 5),
(18, 9, 35900, 4, 13),
(17, 9, 300000, 1, 5),
(16, 9, 20200, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `content`) VALUES
(2, 'gajnueih', 'email@email.email', 'igohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfeigohwesuiohgfiubgjbiuqhgugfe');

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

DROP TABLE IF EXISTS `danh_muc`;
CREATE TABLE IF NOT EXISTS `danh_muc` (
  `id_danh_muc` int NOT NULL AUTO_INCREMENT,
  `ten_danh_muc` varchar(100) NOT NULL,
  `stat` int NOT NULL,
  PRIMARY KEY (`id_danh_muc`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`id_danh_muc`, `ten_danh_muc`, `stat`) VALUES
(1, 'Manga', 1),
(2, 'Tiểu thuyết', 1),
(3, 'Giáo dục', 1),
(4, 'Truyện ngắn', 1),
(11, 'Truyện hài', 1),
(10, 'Trinh thám', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
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
-- Table structure for table `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `id_hoa_don` int NOT NULL AUTO_INCREMENT,
  `id_nguoidung` int DEFAULT NULL,
  `ho_ten` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `so_dt` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `dia_chi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `total` int NOT NULL DEFAULT '0',
  `create_at` date NOT NULL,
  `update_at` date DEFAULT NULL,
  `phuongthucthanhtoan` varchar(50) DEFAULT NULL,
  `tinhtrang` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_hoa_don`),
  KEY `id_nguoidung` (`id_nguoidung`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id_hoa_don`, `id_nguoidung`, `ho_ten`, `so_dt`, `dia_chi`, `email`, `total`, `create_at`, `update_at`, `phuongthucthanhtoan`, `tinhtrang`) VALUES
(12, 6, 'gbjksbdjbs', '073264345264', 'jgiwshrgoisghoihfepwhgfi', 'tamuon00@gmail.com', 360200, '2024-12-07', NULL, 'cash', 'Đã hoàn thành'),
(11, 6, '', '', '', '', 60200, '2024-12-07', NULL, 'bank', 'Chưa hoàn thành'),
(10, 6, 'ft68r67toy6oi7', '021743648729', 'hfuehu9hgou', 'fhaiug@fgbia.fgaes', 1329200, '2024-12-07', NULL, 'bank', 'Chưa hoàn thành'),
(9, 6, 'qewrhtedghf', '06548326742', 'jgiwshrgoisghoihfepwhgfi', 'fgnhu@ga.gai', 625000, '2024-12-07', NULL, 'bank', 'Đã hủy');

-- --------------------------------------------------------

--
-- Table structure for table `kho_anh`
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
-- Table structure for table `san_pham`
--

DROP TABLE IF EXISTS `san_pham`;
CREATE TABLE IF NOT EXISTS `san_pham` (
  `id_sp` int NOT NULL AUTO_INCREMENT,
  `ten_sp` varchar(100) NOT NULL,
  `gia` int NOT NULL,
  `anh_sp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_danh_muc` int NOT NULL,
  `tac_gia` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ngay_xb` date DEFAULT NULL,
  `tinh_trang` varchar(50) DEFAULT NULL,
  `mota` text,
  PRIMARY KEY (`id_sp`),
  KEY `fkey` (`id_danh_muc`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `gia`, `anh_sp`, `id_danh_muc`, `tac_gia`, `ngay_xb`, `tinh_trang`, `mota`) VALUES
(1, 'Thám tử lừng danh Conan', 20200, 'conantruyen_RRQU.jpg', 1, 'Gosho Aoyama', '2014-11-23', 'còn hàng', 'Là một trong những series truyện tranh Manga có số lượng phát hành lớn nhất tại Việt Nam, kể từ khi được nhà xuất bản Kim Đồng chính thức phát hành cách đây hơn 2 thập niên, đến nay “Thám tử lừng danh Conan” vẫn luôn là tác phẩm được đông đảo bạn đọc đón nhận sau mỗi kỳ phát hành.'),
(5, 'Đắc Nhân Tâm', 300000, 'dacnhantam86.jpg', 3, 'Dale Carnegie', '1936-12-10', 'hết hàng', '“Đắc Nhân Tâm” là sách thiên về kỹ năng sống nhưng cũng là cuốn sách gắn liền với những quy tắc đạo đức, kỹ năng sống thực tế đã được Dale đúc rút nên. . Tác giả đã khiến chúng ta ngộ ra rằng mọi nguyên tắc ứng xử đều xuất phát từ sự chân thành thì mới thu phục được “nhân tâm”. Chỉ khi chúng ta có đủ tình yêu thương và sự chân thành trong cách đối nhân xử thế, để biết làm điều hợp lòng người và quan tâm đến cảm xúc của người khác thì lúc đó chúng ta mới là người có nghệ thuật giao tiếp khéo léo.'),
(11, 'Doremon-Nobita du hành biển phương nam', 32200, 'manga1.jpg', 1, 'Fujiko F Fujio', '2010-12-07', 'còn hàng', 'Doraemon là bộ truyện tranh Nhật Bản của tác giả Fujiko Fujio được sáng tác từ năm 1969 với mục đích ban đầu dành cho lứa tuổi thiếu nhi.\r\n\r\nBộ truyện kể về một chú mèo máy tên là Doraemon đến từ thế kỉ 22 để giúp một cậu bé lớp 5-3 hậu đậu tên là Nobi Nobita.\r\n\r\nCác câu chuyện của Doraemon thường ngắn gọn, dễ hiểu, dí dỏm và mang cái nhìn lạc quan về cuộc sống tương lai cũng như sự phát triển của khoa học - kĩ thuật.'),
(13, 'Doremon-Thám hiểm vùng đất mới', 35900, 'manga2.jpg', 1, 'Fujiko F Fujio', '2011-08-22', 'hết hàng', 'Doraemon là bộ truyện tranh Nhật Bản của tác giả Fujiko Fujio được sáng tác từ năm 1969 với mục đích ban đầu dành cho lứa tuổi thiếu nhi.\r\n\r\nBộ truyện kể về một chú mèo máy tên là Doraemon đến từ thế kỉ 22 để giúp một cậu bé lớp 5-3 hậu đậu tên là Nobi Nobita.\r\n\r\nCác câu chuyện của Doraemon thường ngắn gọn, dễ hiểu, dí dỏm và mang cái nhìn lạc quan về cuộc sống tương lai cũng như sự phát triển của khoa học - kĩ thuật.'),
(14, 'Truyện cười song ngữ Nhật-Việt', 42000, 'cuoi3.png', 11, 'Nhiều tác giả', '2020-07-05', 'còn hàng', 'Đọc hiểu là kỹ năng vô cùng cần thiết đối với mỗi người học tiếng Nhật. Tuy nhiên, nếu như những bài đọc trong sách tràn ngập từ mới, hay những bài báo quá khô khan khiến bạn nhức cả đầu mỗi lần nghĩ tới, thì những mẩu truyện ngắn đơn giản sẽ giúp bạn đỡ bị ngợp từ vựng khiến bạn tìm được cảm xúc khi đọc.'),
(15, 'Ngữ Văn 10', 18100, 'van.png', 3, 'Nhiều tác giả', '2023-11-02', 'còn hàng', 'Sách Ngữ Văn 10 được biên soạn theo chương trình giáo dục phổ thông mới, tập trung phát triển năng lực ngôn ngữ và tư duy của học sinh. Nội dung sách đa dạng, kết hợp giữa văn học dân gian, văn học trung đại và văn học hiện đại, giúp học sinh hiểu rõ giá trị văn hóa, lịch sử, và nghệ thuật qua các tác phẩm. Bên cạnh đó, sách còn hướng dẫn kỹ năng đọc hiểu, viết văn, và giao tiếp, khuyến khích học sinh sáng tạo, phản biện, và áp dụng vào thực tiễn đời sống. Thiết kế sách đẹp mắt, tích hợp hình ảnh minh họa sinh động, dễ thu hút sự hứng thú trong học tập.'),
(16, 'Địa Lí 10', 20100, 'dia.jpg', 3, 'Nhiều tác giả', '2022-08-19', 'hết hàng', 'Sách Địa Lí 10 là tài liệu giáo khoa chương trình cũ dành cho học sinh lớp 10, cung cấp những kiến thức nền tảng về địa lí tự nhiên, địa lí kinh tế - xã hội và môi trường trên thế giới. Nội dung sách được trình bày một cách khoa học, kết hợp các bản đồ, hình ảnh minh họa và bài tập thực hành, giúp học sinh nắm vững các khái niệm quan trọng và rèn luyện kỹ năng phân tích địa lý. Bên cạnh đó, sách còn đề cập đến các vấn đề thời sự như biến đổi khí hậu, đô thị hóa và phát triển bền vững, nhằm khuyến khích học sinh có ý thức trách nhiệm với môi trường và xã hội.'),
(17, 'Túp lều bác Tom', 122600, 'tth1.png', 2, 'Harriet Beecher Stowe', '2022-07-21', 'còn hàng', 'Túp lều bác Tom là một cuốn tiểu thuyết bán chạy nhất trong thế kỷ 19, trong tuần đầu tiên 5.000 bản đã được bán sạch (và cũng là quyển sách bán chạy thứ hai trong thế kỷ đó, sau Kinh Thánh) và được tin là động lực cho cuộc đấu tranh bãi nô. Trong năm đầu tiên sau khi xuất bản, 300.000 bản được bán hết chỉ tính riêng ở Hoa Kỳ mặc dù cuốn tiểu thuyết bị cấm tại các bang miền Nam nước này. Cuốn sách quan trọng đến mức, khi Tổng thống Abraham Lincoln gặp Stowe vào năm 1862 đã chào mừng bà bằng câu nói nổi tiếng: “Hóa ra bà chính là người phụ nữ nhỏ bé đã viết cuốn sách làm bùng lên cuộc chiến tranh vĩ đại”'),
(20, 'Những truyện ngắn Mĩ trứ danh', 167000, 'trn2.webp', 4, 'Nhiều tác giả', '2017-09-03', 'hết hàng', '“Trên tay bạn là cuốn sách tập hợp 17 truyện ngắn trác tuyệt. Bạn có thể, giống như tôi, nhìn vào tuyển tập này như người ta ngắm ngọc quý. Tôi nghĩ đó là ẩn dụ thích hợp bởi vài lí do. Trước hết, viết một truyện ngắn kiệt xuất không khác cắt và đánh bóng đá quý ‒ cả hai công việc đều đòi hỏi con mắt sắc bén, kĩ thuật nhuần nhị, và bàn tay tự tin. Thứ hai, đọc hợp tuyển này cũng giống như xem xét một viên ngọc thành phẩm với nhiều mặt: tùy thuộc vào cách bạn nâng niu và ngắm nhìn, bạn sẽ thấy nhiều bình diện khác nhau. Trong các truyện ngắn, mỗi bình diện ấy có thể phản chiếu cái chân lí riêng của nó về cuộc đời.\"'),
(21, 'Sáu Đợt Thức Tỉnh', 155000, 'trth2.jpg', 10, 'Mur Lafferty', '0000-00-00', 'còn hàng', 'Truyện lấy bối cảnh trên một con tàu vũ trụ tên Dormire, với một phi hành đoàn gồm 6 bản sao vô tính và 1 con AI (trí thông minh nhân tạo). Họ có nhiệm vụ lái tàu đến hành tinh Artemis để định cư, chở theo 2000 hành khách trong khoang ngủ đông. Giữa đường, cả đoàn đột nhiên bị giết hại dã man, và con AI bị phá hoại nghiêm trọng. May mắn thay, nhờ công nghệ nhân bản vô tính, cả 6 đều “hồi sinh”, nhưng đã mất sạch ký ức. ');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`id_user`, `username_cli`, `password_cli`, `email_cli`, `ho_ten`, `avatar`, `dia_chi`, `sdt`, `role`) VALUES
(7, 'afg', '$2y$10$hDcarrJgA0Z0FscOJztdiOOsWFXXAHl3hLfbMO3NLS0YWFF2ts/xu', 'fbaju@afa.faw', 'User 1', '2024_12_05_21_55_53Screenshot 2024-10-27 183010.png', 'hgoiuepiahhiop', '01853873821', 'user'),
(6, 'admin', '$2y$10$9Ar689vx0hukHL9InYud5uBXhLhkAz6wAWyCXIZnU9cuaV0m7OZmK', 'admin@gmail.com', 'Admin 1', '2024_12_05_20_56_15Screenshot 2024-11-13 121922.png', '132456', '098765432123', 'admin'),
(9, 'ashther', '$2y$10$X/cYijulab4eAyaCjhoGgeEVIoVMv/RUaVqOUlQ5zZIEOQ5rLH./q', 'tgesf3wrfawes@fgeasf.gf', 'ftgafe', '2024_12_08_19_51_23Naraka 12_17_2023 10_16_56 PM.png', 'tfeswaghgs4rgsefd', '045643785464', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
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
