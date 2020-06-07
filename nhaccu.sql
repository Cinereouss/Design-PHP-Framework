-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 05:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhaccu`
--

-- --------------------------------------------------------

--
-- Table structure for table `anhsp`
--

CREATE TABLE `anhsp` (
  `id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anhsp`
--

INSERT INTO `anhsp` (`id`, `sanpham_id`, `link`, `alt`) VALUES
(2, 24, '1591531485product_test.jpg', 'Hình-ảnh-sản-phẩm24'),
(3, 24, 'product-detail-3.jpg', 'Hình-ảnh-sản-phẩm24'),
(4, 24, 'product-detail-4.jpg', 'Hình-ảnh-sản-phẩm24'),
(5, 24, 'product-detail-4.jpg', 'Hình-ảnh-sản-phẩm24'),
(6, 25, '1591535836product_test2.jpg', 'Hình-ảnh-sản-phẩm25'),
(7, 25, 'product-detail-3.jpg', 'Hình-ảnh-sản-phẩm25'),
(8, 25, 'product-detail-4.jpg', 'Hình-ảnh-sản-phẩm25'),
(11, 1, 'product-detail-3.jpg', 'sp1'),
(12, 1, 'product-detail-4.jpg', 'sp1'),
(13, 2, 'product-detail-3.jpg', 'sp2'),
(14, 2, 'product-detail-4.jpg', 'sp2'),
(15, 3, 'product-detail-3.jpg', 'sp3'),
(16, 3, 'product-detail-4.jpg', 'sp3'),
(17, 4, 'product-detail-3.jpg', 'sp4'),
(18, 4, 'product-detail-4.jpg', 'sp4');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `donhang_id` int(11) NOT NULL,
  `soluongdat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `sanpham_id`, `donhang_id`, `soluongdat`) VALUES
(1, 1, 1, 2),
(2, 2, 1, 3),
(3, 1, 2, 2),
(4, 3, 2, 3),
(5, 1, 4, 2),
(6, 3, 4, 3),
(7, 2, 4, 1),
(8, 2, 7, 3),
(9, 3, 7, 9),
(10, 1, 8, 10),
(11, 2, 9, 9),
(12, 3, 10, 4),
(13, 2, 11, 1),
(14, 2, 12, 1),
(15, 25, 13, 3),
(16, 24, 13, 2),
(17, 4, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `website` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `infor` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `website`, `facebook`, `diachi`, `phone`, `infor`, `email`) VALUES
(1, 'www.guitarh2d.com.vn', 'facebook.com/acb', 'Copyright © 2020 by Du Dinh Duong & La Dac Hieu & Le Duc Huy. All rights reserved.', '0969696969', '<h2><strong>H&Atilde;NG GUITAR TỐT NHẤT</strong></h2>\r\n\r\n<p>Thật kh&oacute; để n&oacute;i rằng c&acirc;y đ&agrave;n ghi ta n&agrave;o tốt nhất&hellip; v&igrave; n&oacute; phụ thuộc v&agrave;o nhiều thứ: loại d&ograve;ng nhạc bạn đang chơi l&agrave; nhạc d&acirc;n gian hay hiện đại, bạn th&iacute;ch giai điệu du dương hay kh&uacute;c chiết&hellip;Nếu như bạn đang c&oacute; &yacute; định t&igrave;m kiếm một c&acirc;y đ&agrave;n guitar tốt để c&oacute; &acirc;m thanh ph&aacute;t ra sắc b&eacute;n v&agrave; đặc sắc nhất th&igrave; ch&uacute;ng t&ocirc;i khuy&ecirc;n bạn n&ecirc;n mua đ&agrave;n guitar tại c&aacute;c cửa h&agrave;ng đ&atilde; được ch&iacute;nh thức ủy quyền b&aacute;n h&agrave;ng nhập khẩu ch&iacute;nh h&atilde;ng.</p>\r\n\r\n<h2><strong>LƯU &Yacute; KHI CHỌN MUA</strong></h2>\r\n\r\n<p>Khi c&aacute;c bạn đến những cửa h&agrave;ng b&aacute;n, địa điểm b&aacute;n đ&agrave;n guitar th&igrave; đừng v&igrave; ham rẻ m&agrave; bạn mua phải những sản phẩm k&eacute;m chất lượng, bạn cần kiểm tra kỹ lưỡng v&agrave; nếu như thấy bất cứ một bộ phận n&agrave;o bị lỏng lẻo, kh&ocirc;ng chắc chắn, &acirc;m thanh ch&ecirc;nh ph&ocirc; khi bạn đ&atilde; điều chỉnh d&acirc;y đ&agrave;n nhiều lần th&igrave; d&ugrave; gi&aacute; đ&agrave;n rẻ đến mức n&agrave;o bạn cũng n&ecirc;n từ bỏ ngay &yacute; định mua c&acirc;y đ&agrave;n guitar.</p>\r\n\r\n<p>Để mua được c&acirc;y đ&agrave;n guitar đảm bảo chất lượng cao th&igrave; bạn n&ecirc;n d&ugrave;ng thử trước khi mua, h&atilde;y nghe thử &acirc;m thanh của c&acirc;y guitar ph&aacute;t ra xem c&oacute; tạp &acirc;m hay kh&ocirc;ng? Nếu như bạn cảm thấy tiếng đ&agrave;n kh&ocirc;ng k&egrave;m theo tạp &acirc;m th&igrave; đ&oacute; c&oacute; thế l&agrave; một c&acirc;y đ&agrave;n chất lượng v&agrave; ngược lại.</p>\r\n\r\n<p>Một c&aacute;ch chuy&ecirc;n nghiệp hơn l&agrave; bạn h&atilde;y thử tất cả c&aacute;c loại đ&agrave;n với c&aacute;c thương hiệu kh&aacute;c nhau, v&agrave; với c&aacute;c mức gi&aacute; kh&aacute;c nhau, bạn h&atilde;y thử cả những c&acirc;y đ&agrave;n guitar đắt tiền v&agrave; rẻ tiền, sau đ&oacute; so s&aacute;nh tiếng đ&agrave;n ph&aacute;t ra, để biết được c&acirc;y đ&agrave;n guitar m&agrave; bạn định mua c&oacute; chất lượng kh&ocirc;ng?</p>\r\n', 'Guitar@h3d.com');

-- --------------------------------------------------------

--
-- Table structure for table `cskh`
--

CREATE TABLE `cskh` (
  `id` int(11) NOT NULL,
  `mail` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cskh`
--

INSERT INTO `cskh` (`id`, `mail`, `status`) VALUES
(1, 'duongdd@gmail.com', 'Chưa hỗ trợ'),
(2, 'hieuld@gmail.com', 'Chưa hỗ trợ'),
(3, 'huydl@gmail.com', 'Chưa hỗ trợ'),
(4, 'linhnt@gmail.com', 'Chưa hỗ trợ'),
(5, 'hanh@gmail.com', 'Chưa hỗ trợ'),
(6, 'duongduong@gmail.com', 'Chưa hỗ trợ');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `ngay` timestamp NOT NULL DEFAULT current_timestamp(),
  `ghichu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhtrang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `tongtien` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `ngay`, `ghichu`, `tinhtrang`, `khachhang_id`, `tongtien`) VALUES
(1, '2020-04-27 03:39:07', 'Ship nhanh nhá', 'Chưa xét duyệt', 1, 0),
(2, '2020-04-27 03:39:55', 'Ship nhanh nhá', 'Đã gửi', 2, 0),
(4, '2020-04-27 03:40:21', 'Ship nhanh nhá', 'Chưa xét duyệt', 3, 0),
(5, '2020-04-27 03:44:22', 'Ship nhanh nhá', 'Đã gửi', 3, 0),
(6, '2020-05-01 02:48:58', 'Note 1', 'Chưa xét duyệt', 9, 41130000),
(7, '2020-05-01 03:05:13', 'Note 2', 'Chưa xét duyệt', 10, 41130000),
(8, '2020-05-01 03:55:21', 'Note 3', 'Chưa xét duyệt', 11, 80000000),
(9, '2020-05-01 03:58:50', 'Note 4', 'Chưa xét duyệt', 12, 96390000),
(10, '2020-05-01 04:00:58', 'Note 5', 'Chưa xét duyệt', 13, 4000000),
(11, '2020-05-01 06:08:28', 'Note 6', 'Chưa xét duyệt', 14, 10710000),
(12, '2020-05-17 21:34:45', 'Ship nhanh nhé !', 'Chưa xét duyệt', 15, 10710000),
(13, '2020-06-07 09:51:19', 'Tổng 11.920.000 VNĐ', 'Chưa xét duyệt', 16, 11920000),
(14, '2020-06-07 09:58:44', 'Test sau khi doi soluongdat', 'Chưa xét duyệt', 17, 20710000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `ten` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `ten`, `mail`, `sdt`, `diachi`) VALUES
(1, 'Lã Đắc Hiếu', 'dachieu@gmail.com', '0123456789', 'Kiến An, Hải Phòng'),
(2, 'Lê Đức Huy', 'duchuy@gmail.com', '0123456788', 'Hồng Bàng, Hải Phòng'),
(3, 'Dư Đình Dương', 'dinhduong@gmail.com', '0123456889', 'Ngô Quyền, Hải Phòng'),
(5, 'Dư Đình Dương', 'duongyolo@gmail.com', '0369855860', 'Số 23, ngõ 75, đường Tân Hà, phường Lãm Hà, quận Kiến An, Hải Phòng'),
(6, 'Dư Đình Dương', 'duongyolo@gmail.com', '0369855860', 'Số 23, ngõ 75, đường Tân Hà, phường Lãm Hà, quận Kiến An, Hải Phòng'),
(7, 'Dư Đình Dương', 'duongyolo@gmail.com', '0369855860', 'Số 23, ngõ 75, đường Tân Hà, phường Lãm Hà, quận Kiến An, Hải Phòng'),
(8, 'Dư Đình Dương', 'duongyolo@gmail.com', '0369855860', 'Số 23, ngõ 75, đường Tân Hà, phường Lãm Hà, quận Kiến An, Hải Phòng'),
(9, 'Dư Đình Dương', 'duongyolo@gmail.com', '0369855860', 'Số 23, ngõ 75, đường Tân Hà, phường Lãm Hà, quận Kiến An, Hải Phòng'),
(10, 'Dư Đình Dương', 'duongyolo@gmail.com', '0369855860', 'Số 23, ngõ 75, đường Tân Hà, phường Lãm Hà, quận Kiến An, Hải Phòng'),
(11, 'Lã Đắc Hiếu', 'duongyolo@gmail.com', '0369855860', 'Số 23, ngõ 75, đường Tân Hà, phường Lãm Hà, quận Kiến An, Hải Phòng'),
(12, 'Lê Đức Huy', 'duongyolo@gmail.com', '0369855860', 'Số 23, ngõ 75, đường Tân Hà, phường Lãm Hà, quận Kiến An, Hải Phòng'),
(13, 'Dư Đình Dương', 'duongyolo@gmail.com', '0369855860', 'Số 23, ngõ 75, đường Tân Hà, phường Lãm Hà, quận Kiến An, Hải Phòng'),
(14, 'Bùi Khánh Linh', 'duongyolo@gmail.com', '0369855860', 'Số 23, ngõ 75, đường Tân Hà, phường Lãm Hà, quận Kiến An, Hải Phòng'),
(15, 'Khánh Linh', 'duongyolo@gmail.com', '0369855860', 'Số 23, ngõ 75, đường Tân Hà, phường Lãm Hà, quận Kiến An, Hải Phòng'),
(16, 'Dư Đình Dương', 'duongyolo@gmail.com', '0369855860', 'Số 23, ngõ 75, đường Tân Hà, phường Lãm Hà, quận Kiến An, Hải Phòng'),
(17, 'Linh Linh', 'duongyolo@gmail.com', '0369855860', 'Số 23, ngõ 75, đường Tân Hà, phường Lãm Hà, quận Kiến An, Hải Phòng');

-- --------------------------------------------------------

--
-- Table structure for table `loaidan`
--

CREATE TABLE `loaidan` (
  `id` int(11) NOT NULL,
  `ten` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaidan`
--

INSERT INTO `loaidan` (`id`, `ten`) VALUES
(1, 'Acoustic'),
(2, 'Classic'),
(3, 'Ukulele'),
(4, 'Electric'),
(5, 'Bass'),
(6, 'Synthesizer');

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rule_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `id` int(11) NOT NULL,
  `action` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `ten` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masp` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giasp` float NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkvd` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thongso` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soluong` int(11) NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tomtat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hienthi` int(1) DEFAULT NULL,
  `thuonghieu_id` int(11) NOT NULL,
  `loaidan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `masp`, `giasp`, `image`, `linkvd`, `mota`, `thongso`, `soluong`, `status`, `tomtat`, `hienthi`, `thuonghieu_id`, `loaidan_id`) VALUES
(1, 'Fender CD-140SCE', 'CD-140SCE', 8000000, 'product-3.jpg', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/Nq5wc_8iOjo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<p>Nổi bật với chất lượng âm thanh và loại gỗ sử dụng, cây đàn guitar Samick GD-100 SCE hat còn gọi là Greg Bennett GD-100SCE mang lại một đẳng cấp khác biệt và một nền nhạc thu hút nhất.</p>\n                    <img src=\"/public/image/ttct-1.jpg\" alt=\"ttct-1\">\n                    <p>Greg Bennett GD-100SCE Electro Acoustic có lối chơi mượt mà và mang hình dáng dreadnought thu hút với thân đàn bằng gỗ Gụ và cần đàn bằng gỗ hồng mộc với 20 phím bấm. Hệ thống preamp mạnh mẽ Fishman ISYS T với tuner cho phép kết nối đến ampli và các hệ thống PA trong khi ngựa đàn bằng gỗ hồng mộc, xương đàn PPS và bộ điều chỉnh bằng crôm không những cho âm thanh vang dội mà còn tạo cho GD-100SCE có được vẻ ngoài rất tuyệt vời. Thân đàn bằng gỗ Gụ và mặt trước bằng gỗ Tuyết tùng nguyên miếng Với cấu trúc thân đàn và cần đàn bằng gỗ Gụ, cho Greg Bennett GD-100SCE một âm thanh rất vang dội nhưng cũng rất sâu lắng. Chất gỗ dày của gỗ Gụ dội lại âm thanh rất nhanh mang đến chất âm ấm áp và lắng đọng ở những quãng trầm nhưng vẫn giữ được tiếng vang rõ ràng ở quãng trung và quãng cao. Kết hợp với mặt trước bằng gỗ Tuyết tùng nguyên miếng làm tăng sự rõ ràng trong tiếng vang và cho một âm sắc tươi sáng mang đến cho D-2CE một giai điệu độc đáo phù hợp với nhiều phong cách chơi guitar khác nhau.</p>\n                    <h6>Phím bấm bằng gỗ hồng mộc</h6>\n                    <p>Hơn 20 phím đàn trên mặt phím rosewood phát huy được tối đa lối chơi mượt mà linh hoạt của chiếc GD-100SCE, ngoài ra bán kính bàn phím 12 inch đủ rộng để dễ dàng chơi những giai điệu phức tạp.</p>\n                    <h6>Fishman ISYS T Preamp</h6>\n                    <p>Kết hợp hệ thống preamp Fishman ISYS với tuner loại on board chromatic, GD-100SCE Electro Acoustic có thể được kết nối với bộ khuếch đại và hệ thống PA để cung cấp một giai điệu âm thanh dày và chân thực. Với bộ điều chỉnh âm lượng, contour và kiểm soát giai đoạn, ISYS T có thể tìm kiếm và điều chỉnh hoàn hảo các giai điệu khi đang chơi trong khi màn hình LED trên tuner cho phép điều chỉnh âm điệu dễ dàng ngay cả trong điều kiện ánh sáng thấp.</p>\n                    <h6>Về Greg Bennett Guitars</h6>\n                    <img src=\"/public/image/ttct-2.jpg\" alt=\"ttct-2\">\n                    <p>Với hơn 50 năm kinh nghiệm thiết kế guitar cho các công ty sản xuất nhạc cụ hàng đầu thế giới, nhạc cụ Greg Bennett Acoustic với tư tưởng của những nghệ sĩ thực thụ muốn cung cấp loại nhạc cụ chất lượng, lối chơi tuyệt vời và giai điệu vượt trội. Tận dụng các kỹ thuật sản xuất truyền thống Greg Bennett Guitars được thiết kế ở Nashville TN và thủ công ở Indonesia để cung cấp chất lượng chuyên nghiệp ở một mức giá cạnh tranh. Cho dù bạn là một nhạc sĩ đang phát triển hay là một người chơi dày dạn kinh nghiệm, dòng Greg Bennett Acoustic luôn có chiếc guitar phù hợp với bạn mà bao gồm một loạt các vật liệu chất lượng hàng đầu được thủ công tỉ mỉ.</p>', '<table class=\"table table-striped\">\n                <tbody>\n                  <tr>\n                    <td colspan=\"2\">\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">Body &amp; Bridge</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Body</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Mahogany</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Top</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Solid Spruce</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Shape</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Dreadnought Cutaway</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Finish</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Natural</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Binding</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Multi-Ply</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Rosette</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Two Ring</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Bridge</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Rosewood</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td colspan=\"2\">\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">Neck &amp; Fingerboard</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Neck</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Mahogany</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Fretboard</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Rosewood</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Fretboard Radius</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;12\"</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Frets</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;20</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Inlays</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;White Dot</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Scale Length</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;25.5\"</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Nut</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;PPS</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Nut Width</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;1.6875\"</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Truss Rod</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Dual Action</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td colspan=\"2\">\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">Hardware &amp; Electronics</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Electronics</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Fishman ISYS-T with Chromatic Tuner</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Tuners</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Diecast</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Saddle</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;PPS (Compensated)</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Hardware</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Chrome</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Strings</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Addario EXL</span></p>\n                    </td>\n                  </tr>\n                </tbody>\n              </table>', 130, 'available', 'Greg Bennett GD-100SCE Electro Acoustic có lối chơi mượt mà và mang hình dáng dreadnought thu hút với thân đàn bằng gỗ Gụ và cần đàn bằng gỗ', 1, 1, 1),
(2, 'Takamine GD10CE', 'GD10CE NS', 10710000, 'product-2.jpg', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/Se4GhVJCj34\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<p>Nổi bật với chất lượng âm thanh và loại gỗ sử dụng, cây đàn guitar Samick GD-100 SCE hat còn gọi là Greg Bennett GD-100SCE mang lại một đẳng cấp khác biệt và một nền nhạc thu hút nhất.</p>\n                    <img src=\"/public/image/ttct-1.jpg\" alt=\"ttct-1\">\n                    <p>Greg Bennett GD-100SCE Electro Acoustic có lối chơi mượt mà và mang hình dáng dreadnought thu hút với thân đàn bằng gỗ Gụ và cần đàn bằng gỗ hồng mộc với 20 phím bấm. Hệ thống preamp mạnh mẽ Fishman ISYS T với tuner cho phép kết nối đến ampli và các hệ thống PA trong khi ngựa đàn bằng gỗ hồng mộc, xương đàn PPS và bộ điều chỉnh bằng crôm không những cho âm thanh vang dội mà còn tạo cho GD-100SCE có được vẻ ngoài rất tuyệt vời. Thân đàn bằng gỗ Gụ và mặt trước bằng gỗ Tuyết tùng nguyên miếng Với cấu trúc thân đàn và cần đàn bằng gỗ Gụ, cho Greg Bennett GD-100SCE một âm thanh rất vang dội nhưng cũng rất sâu lắng. Chất gỗ dày của gỗ Gụ dội lại âm thanh rất nhanh mang đến chất âm ấm áp và lắng đọng ở những quãng trầm nhưng vẫn giữ được tiếng vang rõ ràng ở quãng trung và quãng cao. Kết hợp với mặt trước bằng gỗ Tuyết tùng nguyên miếng làm tăng sự rõ ràng trong tiếng vang và cho một âm sắc tươi sáng mang đến cho D-2CE một giai điệu độc đáo phù hợp với nhiều phong cách chơi guitar khác nhau.</p>\n                    <h6>Phím bấm bằng gỗ hồng mộc</h6>\n                    <p>Hơn 20 phím đàn trên mặt phím rosewood phát huy được tối đa lối chơi mượt mà linh hoạt của chiếc GD-100SCE, ngoài ra bán kính bàn phím 12 inch đủ rộng để dễ dàng chơi những giai điệu phức tạp.</p>\n                    <h6>Fishman ISYS T Preamp</h6>\n                    <p>Kết hợp hệ thống preamp Fishman ISYS với tuner loại on board chromatic, GD-100SCE Electro Acoustic có thể được kết nối với bộ khuếch đại và hệ thống PA để cung cấp một giai điệu âm thanh dày và chân thực. Với bộ điều chỉnh âm lượng, contour và kiểm soát giai đoạn, ISYS T có thể tìm kiếm và điều chỉnh hoàn hảo các giai điệu khi đang chơi trong khi màn hình LED trên tuner cho phép điều chỉnh âm điệu dễ dàng ngay cả trong điều kiện ánh sáng thấp.</p>\n                    <h6>Về Greg Bennett Guitars</h6>\n                    <img src=\"/public/image/ttct-2.jpg\" alt=\"ttct-2\">\n                    <p>Với hơn 50 năm kinh nghiệm thiết kế guitar cho các công ty sản xuất nhạc cụ hàng đầu thế giới, nhạc cụ Greg Bennett Acoustic với tư tưởng của những nghệ sĩ thực thụ muốn cung cấp loại nhạc cụ chất lượng, lối chơi tuyệt vời và giai điệu vượt trội. Tận dụng các kỹ thuật sản xuất truyền thống Greg Bennett Guitars được thiết kế ở Nashville TN và thủ công ở Indonesia để cung cấp chất lượng chuyên nghiệp ở một mức giá cạnh tranh. Cho dù bạn là một nhạc sĩ đang phát triển hay là một người chơi dày dạn kinh nghiệm, dòng Greg Bennett Acoustic luôn có chiếc guitar phù hợp với bạn mà bao gồm một loạt các vật liệu chất lượng hàng đầu được thủ công tỉ mỉ.</p>', '<table class=\"table table-striped\">\n                <tbody>\n                  <tr>\n                    <td colspan=\"2\">\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">Body &amp; Bridge</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Body</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Mahogany</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Top</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Solid Spruce</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Shape</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Dreadnought Cutaway</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Finish</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Natural</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Binding</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Multi-Ply</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Rosette</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Two Ring</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Bridge</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Rosewood</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td colspan=\"2\">\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">Neck &amp; Fingerboard</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Neck</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Mahogany</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Fretboard</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Rosewood</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Fretboard Radius</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;12\"</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Frets</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;20</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Inlays</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;White Dot</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Scale Length</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;25.5\"</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Nut</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;PPS</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Nut Width</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;1.6875\"</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Truss Rod</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Dual Action</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td colspan=\"2\">\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">Hardware &amp; Electronics</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Electronics</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Fishman ISYS-T with Chromatic Tuner</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Tuners</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Diecast</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Saddle</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;PPS (Compensated)</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Hardware</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Chrome</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Strings</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Addario EXL</span></p>\n                    </td>\n                  </tr>\n                </tbody>\n              </table>', 120, 'available', 'Greg Bennett GD-100SCE Electro Acoustic có lối chơi mượt mà và mang hình dáng dreadnought thu hút với thân đàn bằng gỗ Gụ và cần đàn bằng gỗ', 1, 4, 2),
(3, 'Suzuki SDG-6NL', 'SDG-6NL', 1000000, 'product-1.jpg', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/60qpL6odW64\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<p>Nổi bật với chất lượng âm thanh và loại gỗ sử dụng, cây đàn guitar Samick GD-100 SCE hat còn gọi là Greg Bennett GD-100SCE mang lại một đẳng cấp khác biệt và một nền nhạc thu hút nhất.</p>\n                    <img src=\"/public/image/ttct-1.jpg\" alt=\"ttct-1\">\n                    <p>Greg Bennett GD-100SCE Electro Acoustic có lối chơi mượt mà và mang hình dáng dreadnought thu hút với thân đàn bằng gỗ Gụ và cần đàn bằng gỗ hồng mộc với 20 phím bấm. Hệ thống preamp mạnh mẽ Fishman ISYS T với tuner cho phép kết nối đến ampli và các hệ thống PA trong khi ngựa đàn bằng gỗ hồng mộc, xương đàn PPS và bộ điều chỉnh bằng crôm không những cho âm thanh vang dội mà còn tạo cho GD-100SCE có được vẻ ngoài rất tuyệt vời. Thân đàn bằng gỗ Gụ và mặt trước bằng gỗ Tuyết tùng nguyên miếng Với cấu trúc thân đàn và cần đàn bằng gỗ Gụ, cho Greg Bennett GD-100SCE một âm thanh rất vang dội nhưng cũng rất sâu lắng. Chất gỗ dày của gỗ Gụ dội lại âm thanh rất nhanh mang đến chất âm ấm áp và lắng đọng ở những quãng trầm nhưng vẫn giữ được tiếng vang rõ ràng ở quãng trung và quãng cao. Kết hợp với mặt trước bằng gỗ Tuyết tùng nguyên miếng làm tăng sự rõ ràng trong tiếng vang và cho một âm sắc tươi sáng mang đến cho D-2CE một giai điệu độc đáo phù hợp với nhiều phong cách chơi guitar khác nhau.</p>\n                    <h6>Phím bấm bằng gỗ hồng mộc</h6>\n                    <p>Hơn 20 phím đàn trên mặt phím rosewood phát huy được tối đa lối chơi mượt mà linh hoạt của chiếc GD-100SCE, ngoài ra bán kính bàn phím 12 inch đủ rộng để dễ dàng chơi những giai điệu phức tạp.</p>\n                    <h6>Fishman ISYS T Preamp</h6>\n                    <p>Kết hợp hệ thống preamp Fishman ISYS với tuner loại on board chromatic, GD-100SCE Electro Acoustic có thể được kết nối với bộ khuếch đại và hệ thống PA để cung cấp một giai điệu âm thanh dày và chân thực. Với bộ điều chỉnh âm lượng, contour và kiểm soát giai đoạn, ISYS T có thể tìm kiếm và điều chỉnh hoàn hảo các giai điệu khi đang chơi trong khi màn hình LED trên tuner cho phép điều chỉnh âm điệu dễ dàng ngay cả trong điều kiện ánh sáng thấp.</p>\n                    <h6>Về Greg Bennett Guitars</h6>\n                    <img src=\"/public/image/ttct-2.jpg\" alt=\"ttct-2\">\n                    <p>Với hơn 50 năm kinh nghiệm thiết kế guitar cho các công ty sản xuất nhạc cụ hàng đầu thế giới, nhạc cụ Greg Bennett Acoustic với tư tưởng của những nghệ sĩ thực thụ muốn cung cấp loại nhạc cụ chất lượng, lối chơi tuyệt vời và giai điệu vượt trội. Tận dụng các kỹ thuật sản xuất truyền thống Greg Bennett Guitars được thiết kế ở Nashville TN và thủ công ở Indonesia để cung cấp chất lượng chuyên nghiệp ở một mức giá cạnh tranh. Cho dù bạn là một nhạc sĩ đang phát triển hay là một người chơi dày dạn kinh nghiệm, dòng Greg Bennett Acoustic luôn có chiếc guitar phù hợp với bạn mà bao gồm một loạt các vật liệu chất lượng hàng đầu được thủ công tỉ mỉ.</p>', '<table class=\"table table-striped\">\n                <tbody>\n                  <tr>\n                    <td colspan=\"2\">\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">Body &amp; Bridge</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Body</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Mahogany</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Top</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Solid Spruce</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Shape</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Dreadnought Cutaway</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Finish</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Natural</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Binding</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Multi-Ply</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Rosette</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Two Ring</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Bridge</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Rosewood</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td colspan=\"2\">\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">Neck &amp; Fingerboard</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Neck</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Mahogany</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Fretboard</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Rosewood</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Fretboard Radius</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;12\"</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Frets</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;20</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Inlays</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;White Dot</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Scale Length</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;25.5\"</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Nut</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;PPS</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Nut Width</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;1.6875\"</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Truss Rod</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Dual Action</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td colspan=\"2\">\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">Hardware &amp; Electronics</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Electronics</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Fishman ISYS-T with Chromatic Tuner</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Tuners</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Diecast</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Saddle</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;PPS (Compensated)</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Hardware</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Chrome</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Strings</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Addario EXL</span></p>\n                    </td>\n                  </tr>\n                </tbody>\n              </table>', 120, 'available', 'Greg Bennett GD-100SCE Electro Acoustic có lối chơi mượt mà và mang hình dáng dreadnought thu hút với thân đàn bằng gỗ Gụ và cần đàn bằng gỗ', 1, 3, 3),
(4, 'Fender DD-98SCE', 'DD-98SCE', 20710000, 'product-1.jpg', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/Nq5wc_8iOjo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<p>Nổi bật với chất lượng âm thanh và loại gỗ sử dụng, cây đàn guitar Samick GD-100 SCE hat còn gọi là Greg Bennett GD-100SCE mang lại một đẳng cấp khác biệt và một nền nhạc thu hút nhất.</p>\n                    <img src=\"/public/image/ttct-1.jpg\" alt=\"ttct-1\">\n                    <p>Greg Bennett GD-100SCE Electro Acoustic có lối chơi mượt mà và mang hình dáng dreadnought thu hút với thân đàn bằng gỗ Gụ và cần đàn bằng gỗ hồng mộc với 20 phím bấm. Hệ thống preamp mạnh mẽ Fishman ISYS T với tuner cho phép kết nối đến ampli và các hệ thống PA trong khi ngựa đàn bằng gỗ hồng mộc, xương đàn PPS và bộ điều chỉnh bằng crôm không những cho âm thanh vang dội mà còn tạo cho GD-100SCE có được vẻ ngoài rất tuyệt vời. Thân đàn bằng gỗ Gụ và mặt trước bằng gỗ Tuyết tùng nguyên miếng Với cấu trúc thân đàn và cần đàn bằng gỗ Gụ, cho Greg Bennett GD-100SCE một âm thanh rất vang dội nhưng cũng rất sâu lắng. Chất gỗ dày của gỗ Gụ dội lại âm thanh rất nhanh mang đến chất âm ấm áp và lắng đọng ở những quãng trầm nhưng vẫn giữ được tiếng vang rõ ràng ở quãng trung và quãng cao. Kết hợp với mặt trước bằng gỗ Tuyết tùng nguyên miếng làm tăng sự rõ ràng trong tiếng vang và cho một âm sắc tươi sáng mang đến cho D-2CE một giai điệu độc đáo phù hợp với nhiều phong cách chơi guitar khác nhau.</p>\n                    <h6>Phím bấm bằng gỗ hồng mộc</h6>\n                    <p>Hơn 20 phím đàn trên mặt phím rosewood phát huy được tối đa lối chơi mượt mà linh hoạt của chiếc GD-100SCE, ngoài ra bán kính bàn phím 12 inch đủ rộng để dễ dàng chơi những giai điệu phức tạp.</p>\n                    <h6>Fishman ISYS T Preamp</h6>\n                    <p>Kết hợp hệ thống preamp Fishman ISYS với tuner loại on board chromatic, GD-100SCE Electro Acoustic có thể được kết nối với bộ khuếch đại và hệ thống PA để cung cấp một giai điệu âm thanh dày và chân thực. Với bộ điều chỉnh âm lượng, contour và kiểm soát giai đoạn, ISYS T có thể tìm kiếm và điều chỉnh hoàn hảo các giai điệu khi đang chơi trong khi màn hình LED trên tuner cho phép điều chỉnh âm điệu dễ dàng ngay cả trong điều kiện ánh sáng thấp.</p>\n                    <h6>Về Greg Bennett Guitars</h6>\n                    <img src=\"/public/image/ttct-2.jpg\" alt=\"ttct-2\">\n                    <p>Với hơn 50 năm kinh nghiệm thiết kế guitar cho các công ty sản xuất nhạc cụ hàng đầu thế giới, nhạc cụ Greg Bennett Acoustic với tư tưởng của những nghệ sĩ thực thụ muốn cung cấp loại nhạc cụ chất lượng, lối chơi tuyệt vời và giai điệu vượt trội. Tận dụng các kỹ thuật sản xuất truyền thống Greg Bennett Guitars được thiết kế ở Nashville TN và thủ công ở Indonesia để cung cấp chất lượng chuyên nghiệp ở một mức giá cạnh tranh. Cho dù bạn là một nhạc sĩ đang phát triển hay là một người chơi dày dạn kinh nghiệm, dòng Greg Bennett Acoustic luôn có chiếc guitar phù hợp với bạn mà bao gồm một loạt các vật liệu chất lượng hàng đầu được thủ công tỉ mỉ.</p>', '<table class=\"table table-striped\">\n                <tbody>\n                  <tr>\n                    <td colspan=\"2\">\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">Body &amp; Bridge</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Body</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Mahogany</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Top</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Solid Spruce</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Shape</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Dreadnought Cutaway</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Finish</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Natural</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Binding</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Multi-Ply</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Rosette</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Two Ring</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Bridge</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Rosewood</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td colspan=\"2\">\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">Neck &amp; Fingerboard</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Neck</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Mahogany</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Fretboard</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Rosewood</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Fretboard Radius</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;12\"</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Frets</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;20</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Inlays</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;White Dot</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Scale Length</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;25.5\"</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Nut</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;PPS</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Nut Width</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;1.6875\"</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Truss Rod</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Dual Action</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td colspan=\"2\">\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">Hardware &amp; Electronics</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Electronics</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Fishman ISYS-T with Chromatic Tuner</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Tuners</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Diecast</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Saddle</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;PPS (Compensated)</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Hardware</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Chrome</span></p>\n                    </td>\n                  </tr>\n                  <tr>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>Strings</strong></span></p>\n                    </td>\n                    <td>\n                    <p style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;Addario EXL</span></p>\n                    </td>\n                  </tr>\n                </tbody>\n              </table>', 120, 'available', 'Greg Bennett GD-100SCE Electro Acoustic có lối chơi mượt mà và mang hình dáng dreadnought thu hút với thân đàn bằng gỗ Gụ và cần đàn bằng gỗ', 1, 4, 1);
INSERT INTO `sanpham` (`id`, `ten`, `masp`, `giasp`, `image`, `linkvd`, `mota`, `thongso`, `soluong`, `status`, `tomtat`, `hienthi`, `thuonghieu_id`, `loaidan_id`) VALUES
(24, 'Kapok D-118AC', 'KPAG0006 ', 2090000, '1591531485product_test.jpg', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/VYeuXP9vheg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<p><strong>Kapok D118-AC: Guitar gi&aacute; tốt cho người mới</strong></p>\r\n\r\n<p>Đ&agrave;n guitar Kapok D-118AC thuộc ph&acirc;n kh&uacute;c gi&aacute; rẻ, ph&ugrave; hợp t&uacute;i tiền với người mới bắt đầu cần một c&acirc;y đ&agrave;n l&agrave;m quen hay những bạn học sinh, sinh vi&ecirc;n điều kiện kinh tế c&ograve;n hạn chế. Kapok lu&ocirc;n đảm bảo c&aacute;c c&ocirc;ng đoạn sản xuất đều thực hiện theo quy tr&igrave;nh v&agrave; được kiểm so&aacute;t chất lượng gắt gao nhằm đảm bảo tuổi thọ đ&agrave;n v&agrave; chất lượng &acirc;m thanh đạt chuẩn.</p>\r\n\r\n<p><strong>&Acirc;m thanh đạt chuẩn</strong></p>\r\n\r\n<p>Chất lượng &acirc;m thanh đạt chuẩn nhờ c&aacute;c bộ phận được l&agrave;m từ những chất gỗ ổn định v&agrave; được xử l&iacute; c&ocirc;ng nghiệp. Kapok D-118AC th&iacute;ch hợp với nhiều phong c&aacute;ch chơi acoustic kh&aacute;c nhau như hard strumming, fast flatpicking hay delicate fingerpicking.</p>\r\n\r\n<ul>\r\n	<li>Măt đ&agrave;n bằng gỗ spruce &eacute;p cao cấp. Gỗ Spruce &eacute;p l&agrave; loại gỗ c&oacute; độ bền cao v&agrave; rất dẻo dai, thường được sử dụng phổ biến để l&agrave;m mặt đ&agrave;n nhờ c&oacute; tốc độ truyền &acirc;m thanh, độ vang rất tốt v&agrave; giai điệu r&otilde; r&agrave;ng.</li>\r\n	<li>Lưng v&agrave; h&ocirc;ng đ&agrave;n l&agrave;m từ gỗ Linden laminated (gỗ &eacute;p) chất lượng cao mang đến &acirc;m sắc cực kỳ ấn tượng.</li>\r\n	<li>Mặt ph&iacute;m v&agrave; ngựa đ&agrave;n bằng gỗ Rosewood: mang lại cảm gi&aacute;c thoải m&aacute;i v&agrave; lướt &ecirc;m cho người chơi, g&oacute;p phần tạo n&ecirc;n &acirc;m thanh ngọt ng&agrave;o, ấm &aacute;p.</li>\r\n</ul>\r\n\r\n<p><strong>Thiết kế h&agrave;i h&ograve;a</strong></p>\r\n\r\n<p>Guitar Kapok D-118AC nổi bật với thiết kế h&agrave;i h&ograve;a, m&agrave;u sắc bắt mắt. Thiết kế nhỏ gọn tiện dụng, th&iacute;ch hợp cho tập luyện hoặc biểu diễn ở bất k&igrave; m&ocirc;i trường n&agrave;o m&agrave; kh&ocirc;ng g&acirc;y ra sự bất tiện. Kapok D-118AC nổi bật về thiết kế so với c&aacute;c guitar c&ugrave;ng ph&acirc;n kh&uacute;c nhờ lớp sơn b&oacute;ng đẹp khiến D-118AC tr&ocirc;ng thật tuyệt vời dưới &aacute;nh đ&egrave;n s&acirc;n khấu.</p>\r\n\r\n<p>Mặt ph&iacute;m v&agrave; ngựa đ&agrave;n bằng gỗ Rosewood. Viền đ&agrave;n bằng nhựa ABS l&agrave;m cho chiếc đ&agrave;n n&agrave;y trở n&ecirc;n chất lượng hơn.</p>\r\n\r\n<p><em>Thỏa m&atilde;n cảm gi&aacute;c chơi guitar v&agrave; đ&aacute;p ứng được &acirc;m thanh m&agrave; bạn muốn hướng tới! Gọi ngay 1800 6715 hoặc để lại SĐT để được tư vấn về Kapok D118AC.</em></p>\r\n', '<ul>\r\n	<li>Model: LD-18/LD-18CS/LD18RB</li>\r\n	<li>Overall Length: 41&quot;</li>\r\n	<li>Scale Length: 650mm</li>\r\n	<li>Top: Spruce laminate</li>\r\n	<li>Back &amp; Sides: Linden laminate</li>\r\n	<li>Fingerboard &amp; Bridge: Rosewood</li>\r\n	<li>Binding: ABS</li>\r\n	<li>Rosette: Decal</li>\r\n</ul>\r\n', 0, 'Hàng mới định nghĩa', 'Chất lượng &acirc;m thanh đạt chuẩn nhờ c&aacute;c bộ phận được l&agrave;m từ những chất gỗ ổn định v&agrave; được xử l&iacute; c&ocirc;ng nghiệp. Kapok D-118AC th&iacute;ch hợp với nhiều phong c&aacute;ch chơi acoustic kh&aacute;c nhau như hard strumming, fast flatpicking hay delicate fingerpicking\r\n', 1, 2, 6),
(25, 'Suzuki SDG-6NL', 'SDG-6', 2580000, '1591535836product_test2.jpg', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/VYeuXP9vheg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<p><strong><a href=\"https://vietthuong.vn/dan-guitar-suzuki-sdg-6-nl-model.html\">Đ&agrave;n Guitar Suzuki SDG-6NL</a>&nbsp;</strong>l&agrave; đ&agrave;n guitar Acoustic ch&iacute;nh h&atilde;ng do thương hiệu guitar nổi tiếng Suzuki sản xuất, đ&acirc;y l&agrave; loại đ&agrave;n th&ocirc;ng dụng v&agrave; phổ biến d&agrave;nh cho lứa tuổi học sinh,sinh vi&ecirc;n, người mới tập chơi guitar chọn lựa.</p>\r\n\r\n<p><strong>Đ&agrave;n Guitar Suzuki SDG-6NL</strong>&nbsp;với cấu tạo th&ocirc;ng dụng, cần đ&agrave;n đượcgia c&ocirc;ng kỹ lưỡng, giữ độ thẳng cho cần, điều n&agrave;y sẽ gi&uacute;p giảm nhẹ lực bấm đ&agrave;ncho người chơi, đặc biệt đối với người mới sử dụng, tập đ&aacute;nh đ&agrave;n guitar, lựcng&oacute;n tay yếu n&ecirc;n chọn đ&agrave;n guitar SDG-6PK.</p>\r\n\r\n<p><strong>Đ&agrave;n Guitar Suzuki SDG-6NL</strong>&nbsp;l&agrave; d&ograve;ng sản phẩm mới của suzuki,d&ograve;ng đ&agrave;n ch&uacute; trọng về &acirc;m thanh, th&ugrave;ng đ&agrave;n được thiết kế d&agrave;y tạo &acirc;m thanh trongv&agrave; vang, điều n&agrave;y gi&uacute;p người chơi cảm nhận &acirc;m thanh một c&aacute;ch tốt nhất</p>\r\n', '<table border=\"1\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>T&ecirc;n sản phẩm</p>\r\n			</td>\r\n			<td>\r\n			<p>SUZUKI SDG 6NL/BK</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>L&ecirc;n d&acirc;y</p>\r\n			</td>\r\n			<td>\r\n			<p>Gỗ c&acirc;y V&acirc;n Sam</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Cần đ&agrave;n</p>\r\n			</td>\r\n			<td>\r\n			<p>Gỗ c&acirc;y Catalpa</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Ngăn ph&iacute;m</p>\r\n			</td>\r\n			<td>\r\n			<p>Gỗ Phong</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Lưng</p>\r\n			</td>\r\n			<td>\r\n			<p>Gỗ Linden</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>H&ocirc;ng</p>\r\n			</td>\r\n			<td>\r\n			<p>Gỗ Linden</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Ngựa</p>\r\n			</td>\r\n			<td>\r\n			<p>Gỗ Phong</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Sơn</p>\r\n			</td>\r\n			<td>\r\n			<p>Độ b&oacute;ng cao</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Viền</p>\r\n			</td>\r\n			<td>\r\n			<p>Nhựa ABS chắc chắn (m&agrave;u đen)</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 0, 'Hàng mới định nghĩa', 'Đ&agrave;n Guitar Suzuki SDG-6NL l&agrave; đ&agrave;n guitar Acoustic ch&iacute;nh h&atilde;ng do thương hiệu guitar nổi tiếng Suzuki sản xuất, đ&acirc;y l&agrave; loại đ&agrave;n th&ocirc;ng dụng v&agrave; phổ biến d&agrave;nh cho lứa tuổi học sinh,sinh vi&ecirc;n, người mới tập chơi guitar chọn lựa\r\n', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `img`, `alt`, `active`) VALUES
(1, 'cover-2.png', 'slide-img', 1),
(2, 'cover-1.png', 'slide-img', 1),
(3, 'cover-ads.png', 'slide-img', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `id` int(11) NOT NULL,
  `ten` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thuonghieu`
--

INSERT INTO `thuonghieu` (`id`, `ten`) VALUES
(1, 'Fender'),
(2, 'Sigma'),
(3, 'Jackson'),
(4, 'Takamin');

-- --------------------------------------------------------

--
-- Table structure for table `thuonghieuloai`
--

CREATE TABLE `thuonghieuloai` (
  `id` int(11) NOT NULL,
  `thuonghieu_id` int(11) NOT NULL,
  `loaidan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thuonghieuloai`
--

INSERT INTO `thuonghieuloai` (`id`, `thuonghieu_id`, `loaidan_id`) VALUES
(5, 1, 1),
(6, 2, 1),
(7, 3, 1),
(8, 4, 1),
(9, 1, 2),
(10, 2, 2),
(11, 3, 2),
(12, 4, 2),
(13, 2, 3),
(14, 3, 3),
(15, 1, 4),
(16, 4, 4),
(17, 1, 5),
(18, 3, 5),
(19, 2, 6),
(20, 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_hash` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `pass_hash`, `mail`) VALUES
(3, 'hieuld', '$2y$10$Kac.qBmBCP2ieBi.OEbpwuXgbbbAcADCNt9NN.PleQD/f5n2gp5YC', 'hrcp.hieu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anhsp`
--
ALTER TABLE `anhsp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_anhsp_sanpham_idx` (`sanpham_id`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chitietdonhang_sanpham1_idx` (`sanpham_id`),
  ADD KEY `fk_chitietdonhang_donhang1_idx` (`donhang_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cskh`
--
ALTER TABLE `cskh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_donhang_khachhang1_idx` (`khachhang_id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaidan`
--
ALTER TABLE `loaidan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_quyen_user1_idx` (`user_id`),
  ADD KEY `fk_quyen_rule1_idx` (`rule_id`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `masp_UNIQUE` (`masp`),
  ADD KEY `fk_sanpham_thuonghieu1_idx` (`thuonghieu_id`),
  ADD KEY `fk_sanpham_loaidan1_idx` (`loaidan_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thuonghieuloai`
--
ALTER TABLE `thuonghieuloai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_thuonghieuloai_thuonghieu1_idx` (`thuonghieu_id`),
  ADD KEY `fk_thuonghieuloai_loaidan1_idx` (`loaidan_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anhsp`
--
ALTER TABLE `anhsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cskh`
--
ALTER TABLE `cskh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `loaidan`
--
ALTER TABLE `loaidan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quyen`
--
ALTER TABLE `quyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thuonghieuloai`
--
ALTER TABLE `thuonghieuloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anhsp`
--
ALTER TABLE `anhsp`
  ADD CONSTRAINT `fk_anhsp_sanpham` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `fk_chitietdonhang_donhang1` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_chitietdonhang_sanpham1` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_donhang_khachhang1` FOREIGN KEY (`khachhang_id`) REFERENCES `khachhang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `quyen`
--
ALTER TABLE `quyen`
  ADD CONSTRAINT `fk_quyen_rule1` FOREIGN KEY (`rule_id`) REFERENCES `rule` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_quyen_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_loaidan1` FOREIGN KEY (`loaidan_id`) REFERENCES `loaidan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sanpham_thuonghieu1` FOREIGN KEY (`thuonghieu_id`) REFERENCES `thuonghieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `thuonghieuloai`
--
ALTER TABLE `thuonghieuloai`
  ADD CONSTRAINT `fk_thuonghieuloai_loaidan1` FOREIGN KEY (`loaidan_id`) REFERENCES `loaidan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_thuonghieuloai_thuonghieu1` FOREIGN KEY (`thuonghieu_id`) REFERENCES `thuonghieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
