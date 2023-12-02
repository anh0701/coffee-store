-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 06:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE `advertise` (
  `Id` int(11) NOT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL,
  `Visible` int(11) DEFAULT NULL,
  `Description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`Id`, `Name`, `Image`, `IsActive`, `Visible`, `Description`) VALUES
(3, 'Banner Quảng Cáo Ngang 1', 'banner-3-banner-quang-cao-ngang-1.jpg', 1, 3, 'Nằm dưới sản phẩm mới');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `Id` int(11) NOT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL,
  `Visible` int(11) DEFAULT NULL,
  `Description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`Id`, `Name`, `Image`, `IsActive`, `Visible`, `Description`) VALUES
(2, 'banner 2', 'banner-2-banner-2.jpg', 1, 2, 'banner bên phải'),
(3, 'Banner 3', 'banner-3-banner-3.png', 1, 3, 'Nằm dưới sản phẩm ');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Id` int(11) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `SupplyId` int(11) DEFAULT NULL,
  `Position` int(4) DEFAULT NULL,
  `alias` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Id`, `Name`, `SupplyId`, `Position`, `alias`) VALUES
(6, 'Bánh ', 1, NULL, 'cake'),
(7, 'Cà phê', 1, NULL, 'coffee'),
(8, 'Nước ép ', 1, NULL, 'juice ');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Id` int(11) NOT NULL,
  `ProductId` int(11) DEFAULT NULL,
  `Content` longtext DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `Author` varchar(150) DEFAULT NULL,
  `ParentId` int(11) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `Id` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Facebook` varchar(200) NOT NULL,
  `Zalo` varchar(200) NOT NULL,
  `Skype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`Id`, `Address`, `Country`, `Mobile`, `Phone`, `Email`, `Facebook`, `Zalo`, `Skype`) VALUES
(1, 'Hải Phòng', 'Việt Nam', '0123456789', '0123456789', 'http://localhost/coffee-store/', 'https://www.facebook.com/', 'http://localhost/coffee-store/', 'http://localhost/coffee-store/');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` int(11) NOT NULL,
  `Name` varchar(550) DEFAULT NULL,
  `Image` varchar(350) DEFAULT NULL,
  `Links` longtext DEFAULT NULL,
  `Detail` varchar(2500) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Subject` varchar(300) NOT NULL,
  `Createtime` datetime NOT NULL,
  `ProductId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imageslide`
--

CREATE TABLE `imageslide` (
  `Id` int(11) NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `SlideId` int(1) DEFAULT NULL,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `imageslide`
--

INSERT INTO `imageslide` (`Id`, `Image`, `SlideId`, `IsActive`) VALUES
(1, '3-1.jpg', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `intro`
--

CREATE TABLE `intro` (
  `Id` int(11) NOT NULL,
  `Title` text DEFAULT NULL,
  `Content` longtext DEFAULT NULL,
  `Link` varchar(250) DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `intro`
--

INSERT INTO `intro` (`Id`, `Title`, `Content`, `Link`, `IsActive`) VALUES
(1, '1', '<h2 style=\"text-align: center;\"><strong>Giới thiệu shop</strong></h2>\r\n<br />\r\n<br />\r\n&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Hiện nay, xu hướng thương mại điện tử đang ph&aacute;t triển rất mạnh, trong tương lai sẽ l&agrave; m&ocirc; h&igrave;nh chủ đạo v&agrave; tất yếu, Quanaoredep.com đ&atilde; tạo n&ecirc;n sự kh&aacute;c biệt bởi ch&iacute;nh h&igrave;nh thức n&agrave;y: Một m&ocirc; h&igrave;nh cửa h&agrave;ng trực tuyến, cung cấp mọi g&oacute;c độ của sản phẩm nhằm gi&uacute;p kh&aacute;ch h&agrave;ng dễ d&agrave;ng chọn lựa sản phẩm y&ecirc;u th&iacute;ch, li&ecirc;n tục cập nhật mẫu m&atilde; đa dạng v&agrave; k&egrave;m theo đ&oacute; l&agrave; phong c&aacute;ch b&aacute;n h&agrave;ng chuy&ecirc;n nghiệp, chu đ&aacute;o gi&uacute;p cho bạn trẻ, những người bận rộn, những người l&agrave;m việc văn ph&ograve;ng kh&ocirc;ng c&oacute; thời gian đi shopping vẫn c&oacute; thể thỏa sức mua sắm. với m&ocirc; h&igrave;nh n&agrave;y ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang l&agrave;m h&agrave;i l&ograve;ng tất cả c&aacute;c Kh&aacute;ch h&agrave;ng. Hệ thống b&aacute;n h&agrave;ng của ch&uacute;ng t&ocirc;i xuất hiện ở mọi nơi tr&ecirc;n Internet từ Facebook, Twitter, Goole Plus cho tới 123Mua, Zing Me. Bạn c&oacute; thể t&igrave;m hiểu kỹ hơn để y&ecirc;n t&acirc;m hơn về những sản phẩm cũng như dịch vụ b&aacute;n h&agrave;ng trực tuyến của ch&uacute;ng t&ocirc;i theo những đường dẫn sau đ&acirc;y:\r\n<p>+ Facebook: https://www.facebook.com/quanaoredepdotcom<br />\r\n+ Twitter: https://twitter.com/#!/quanaoredep<br />\r\n+ Google Plus: https://plus.google.com/u/0/b/101521943379319701589/<br />\r\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n Zing Me : http://me.zing.vn/u/shopquanaoredep<br />\r\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n 123mua.vn http://www.123mua.vn/shopquanaoredep<br />\r\n&nbsp;</p>\r\n\r\n<h2 style=\"text-align: center;\"><strong>Hướng dẫn order sản phẩm</strong></h2>\r\n&nbsp;\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Hiện nay, xu hướng thương mại điện tử đang ph&aacute;t triển rất mạnh, trong tương lai sẽ l&agrave; m&ocirc; h&igrave;nh chủ đạo v&agrave; tất yếu, Quanaoredep.com đ&atilde; tạo n&ecirc;n sự kh&aacute;c biệt bởi ch&iacute;nh h&igrave;nh thức n&agrave;y: Một m&ocirc; h&igrave;nh cửa h&agrave;ng trực tuyến, cung cấp mọi g&oacute;c độ của sản phẩm nhằm gi&uacute;p kh&aacute;ch h&agrave;ng dễ d&agrave;ng chọn lựa sản phẩm y&ecirc;u th&iacute;ch, li&ecirc;n tục cập nhật mẫu m&atilde; đa dạng v&agrave; k&egrave;m theo đ&oacute; l&agrave; phong c&aacute;ch b&aacute;n h&agrave;ng chuy&ecirc;n nghiệp, chu đ&aacute;o gi&uacute;p cho bạn trẻ, những người bận rộn, những người l&agrave;m việc văn ph&ograve;ng kh&ocirc;ng c&oacute; thời gian đi shopping vẫn c&oacute; thể thỏa sức mua sắm. với m&ocirc; h&igrave;nh n&agrave;y ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang l&agrave;m h&agrave;i l&ograve;ng tất cả c&aacute;c Kh&aacute;ch h&agrave;ng. Hệ thống b&aacute;n h&agrave;ng của ch&uacute;ng t&ocirc;i xuất hiện ở mọi nơi tr&ecirc;n Internet từ Facebook, Twitter, Goole Plus cho tới 123Mua, Zing Me. Bạn c&oacute; thể t&igrave;m hiểu kỹ hơn để y&ecirc;n t&acirc;m hơn về những sản phẩm cũng như dịch vụ b&aacute;n h&agrave;ng trực tuyến của ch&uacute;ng t&ocirc;i theo những đường dẫn sau đ&acirc;y:</p>\r\n\r\n<p>+ Facebook: https://www.facebook.com/quanaoredepdotcom<br />\r\n+ Twitter: https://twitter.com/#!/quanaoredep<br />\r\n+ Google Plus: https://plus.google.com/u/0/b/101521943379319701589/<br />\r\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n Zing Me : http://me.zing.vn/u/shopquanaoredep<br />\r\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n 123mua.vn http://www.123mua.vn/shopquanaoredep<br />\r\n&nbsp;</p>\r\n\r\n<h2 style=\"text-align: center;\"><strong>Chi ph&iacute; vận chuyển, giao h&agrave;ng v&agrave; thanh to&aacute;n</strong></h2>\r\n\r\n<p><br />\r\nHiện nay, xu hướng thương mại điện tử đang ph&aacute;t triển rất mạnh, trong tương lai sẽ l&agrave; m&ocirc; h&igrave;nh chủ đạo v&agrave; tất yếu, Quanaoredep.com đ&atilde; tạo n&ecirc;n sự kh&aacute;c biệt bởi ch&iacute;nh h&igrave;nh thức n&agrave;y: Một m&ocirc; h&igrave;nh cửa h&agrave;ng trực tuyến, cung cấp mọi g&oacute;c độ của sản phẩm nhằm gi&uacute;p kh&aacute;ch h&agrave;ng dễ d&agrave;ng chọn lựa sản phẩm y&ecirc;u th&iacute;ch, li&ecirc;n tục cập nhật mẫu m&atilde; đa dạng v&agrave; k&egrave;m theo đ&oacute; l&agrave; phong c&aacute;ch b&aacute;n h&agrave;ng chuy&ecirc;n nghiệp, chu đ&aacute;o gi&uacute;p cho bạn trẻ, những người bận rộn, những người l&agrave;m việc văn ph&ograve;ng kh&ocirc;ng c&oacute; thời gian đi shopping vẫn c&oacute; thể thỏa sức mua sắm. với m&ocirc; h&igrave;nh n&agrave;y ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang l&agrave;m h&agrave;i l&ograve;ng tất cả c&aacute;c Kh&aacute;ch h&agrave;ng. Hệ thống b&aacute;n h&agrave;ng của ch&uacute;ng t&ocirc;i xuất hiện ở mọi nơi tr&ecirc;n Internet từ Facebook, Twitter, Goole Plus cho tới 123Mua, Zing Me. Bạn c&oacute; thể t&igrave;m hiểu kỹ hơn để y&ecirc;n t&acirc;m hơn về những sản phẩm cũng như dịch vụ b&aacute;n h&agrave;ng trực tuyến của ch&uacute;ng t&ocirc;i theo những đường dẫn sau đ&acirc;y: + Facebook: https://www.facebook.com/quanaoredepdotcom<br />\r\n\\r\\n+ Twitter: https://twitter.com/#!/quanaoredep<br />\r\n\\r\\n+ Google Plus: https://plus.google.com/u/0/b/101521943379319701589/<br />\r\n\\r\\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n Zing Me : http://me.zing.vn/u/shopquanaoredep<br />\r\n\\r\\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n 123mua.vn http://www.123mua.vn/shopquanaoredep</p>\r\n\\r\\n', NULL, 1),
(2, 'Nội dung giới thiệu shop', '<h1 style=\"text-align:center\"><strong>Giới thiệu shop</strong></h1>\r\n\r\n<h1 style=\"text-align: center;\"><span style=\"font-size:28px\"><strong>Chi ph&iacute; vận chuyển, giao h&agrave;ng v&agrave; thanh to&aacute;n</strong></span></h1>\r\n\r\n<p>&Aacute;p dụng từ: 26/3/2021</p>\r\n\r\n<h2 dir=\"ltr\"><strong>1. PHẠM VI &Aacute;P DỤNG</strong></h2>\r\n\r\n<p dir=\"ltr\">Những khu vực tỉnh th&agrave;nh c&oacute; hệ thống si&ecirc;u thị Thegioididong.com.</p>\r\n\r\n<h2 dir=\"ltr\"><strong>2. THỜI GIAN NHẬN H&Agrave;NG</strong></h2>\r\n\r\n<p dir=\"ltr\">Thegioididong nhận giao nhanh trong ng&agrave;y với khoảng c&aacute;ch từ c&aacute;c si&ecirc;u thị c&oacute; h&agrave;ng đến điểm giao l&agrave; 20 km. Khoảng c&aacute;ch lớn hơn nh&acirc;n vi&ecirc;n của ch&uacute;ng t&ocirc;i sẽ tư vấn c&aacute;ch thức giao h&agrave;ng thuận tiện nhất cho kh&aacute;ch h&agrave;ng. Cụ thể:</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Khoảng c&aacute;ch đến nh&agrave; kh&aacute;ch từ si&ecirc;u thị gần nhất c&oacute; h&agrave;ng</strong></td>\r\n			<td><strong>TP. HCM</strong></td>\r\n			<td><strong>Tỉnh kh&aacute;c</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dưới 5km</td>\r\n			<td>Giao trong 30 ph&uacute;t</td>\r\n			<td>Giao trong 30 ph&uacute;t</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5-10km</td>\r\n			<td>Giao trong 1 tiếng</td>\r\n			<td>Giao trong 1 tiếng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>10-20km</td>\r\n			<td>Giao trong 2 tiếng</td>\r\n			<td>Giao trong 2 tiếng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Lưu &yacute;</td>\r\n			<td>Thời gian giao h&agrave;ng 9:00 đến 21:00</td>\r\n			<td>Thời gian giao h&agrave;ng 9:00 đến 20:00<br />\r\n			&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p dir=\"ltr\">Ri&ecirc;ng đối với đơn h&agrave;ng gi&aacute; rẻ online, sản phẩm sẽ được giao sớm nhất l&agrave; 1 ng&agrave;y sau khi đặt.</p>\r\n\r\n<h2 dir=\"ltr\"><strong>3. PH&Iacute; GIAO H&Agrave;NG</strong></h2>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>LOẠI SẢN PHẨM</strong></td>\r\n			<td><strong>&nbsp;MỨC GI&Aacute;</strong></td>\r\n			<td><strong>PH&Iacute; GIAO</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"2\">Sản phẩm kh&ocirc;ng lắp đặt</td>\r\n			<td>Gi&aacute; tr&ecirc;n 500.000đ</td>\r\n			<td>\r\n			<p>- Miễn ph&iacute; 10km đầu ti&ecirc;n</p>\r\n\r\n			<p>- Mỗi km tiếp theo t&iacute;nh ph&iacute; 5.000đ/km</p>\r\n\r\n			<p><em>VD: Sạc dự ph&ograve;ng gi&aacute; 600.000đ, khoảng c&aacute;ch giao h&agrave;ng l&agrave; 13 km &gt;&gt;&gt; Ph&iacute; giao h&agrave;ng l&agrave;: 15.000đ</em></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Gi&aacute; 500.000đ trở xuống</td>\r\n			<td>\r\n			<p>- Ph&iacute; giao h&agrave;ng 20.000đ cho 10km đầu ti&ecirc;n</p>\r\n\r\n			<p>- Mỗi km tiếp theo t&iacute;nh ph&iacute; 5.000đ/km</p>\r\n\r\n			<p><em>VD: Sạc dự ph&ograve;ng 500.000đ, khoảng c&aacute;ch giao h&agrave;ng l&agrave; 13 km &gt;&gt;&gt; Ph&iacute; giao h&agrave;ng l&agrave;: 20.000đ + 15.000đ = 35.000đ</em></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"2\">Sản phẩm lắp đặt</td>\r\n			<td>Gi&aacute; tr&ecirc;n 5 triệu</td>\r\n			<td>\r\n			<p>- Miễn ph&iacute; 10km đầu ti&ecirc;n</p>\r\n\r\n			<p>- Mỗi km tiếp theo t&iacute;nh ph&iacute; 5.000đ/km</p>\r\n\r\n			<p><em>VD:&nbsp; Loa k&eacute;o gi&aacute; 6 triệu, khoảng c&aacute;ch giao h&agrave;ng l&agrave; 13 km &gt;&gt;&gt; Ph&iacute; giao h&agrave;ng l&agrave;: 15.000đ</em></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Gi&aacute; 5 triệu trở xuống</td>\r\n			<td>\r\n			<p>- Ph&iacute; giao h&agrave;ng 50.000đ cho 10km đầu ti&ecirc;n</p>\r\n\r\n			<p>- Mỗi km tiếp theo t&iacute;nh ph&iacute; 5.000đ/km</p>\r\n\r\n			<p><em>VD: Loa k&eacute;o gi&aacute; 5 triệu, khoảng c&aacute;ch giao h&agrave;ng l&agrave; 13 km &gt;&gt;&gt; Ph&iacute; giao h&agrave;ng l&agrave;: 50.000đ + 15.000đ = 65.000đ</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p dir=\"ltr\"><strong>Lưu &yacute;:</strong></p>\r\n\r\n<p dir=\"ltr\">+ Khoảng c&aacute;ch giao h&agrave;ng l&agrave; khoảng c&aacute;ch được t&iacute;nh từ nh&agrave; kh&aacute;ch h&agrave;ng đến si&ecirc;u thị TGDD/ĐMX gần nhất</p>\r\n\r\n<p dir=\"ltr\">+ H&agrave;ng online only c&oacute; chuyển h&agrave;ng qua đối t&aacute;c th&igrave; tổng đ&agrave;i 1800 1060 sẽ tư vấn c&aacute;ch thức giao h&agrave;ng &amp; ph&iacute; chuyển h&agrave;ng ph&ugrave; hợp.</p>\r\n\r\n<h2 dir=\"ltr\"><strong>4. ĐEM TH&Ecirc;M NHIỀU SẢN PHẨM, MẪU M&Atilde; KH&Aacute;C ĐỂ KH&Aacute;CH H&Agrave;NG LỰA TẠI NH&Agrave;</strong></h2>\r\n\r\n<p dir=\"ltr\">Nếu c&oacute; sự băn khoăn trong việc lựa chọn sản phẩm, h&atilde;y để nh&acirc;n vi&ecirc;n giao h&agrave;ng của ch&uacute;ng t&ocirc;i sẽ đem hơn 2 sản phẩm (đem th&ecirc;m mẫu m&aacute;y kh&aacute;c, đem th&ecirc;m m&agrave;u kh&aacute;c) theo y&ecirc;u cầu của bạn đến tận nơi tư vấn.</p>\r\n- Kỹ thuật vi&ecirc;n của ch&uacute;ng t&ocirc;i sẽ gi&uacute;p Qu&yacute; kh&aacute;ch kh&aacute;m ph&aacute; kỹ hơn những t&iacute;nh năng ưu việt của từng sản phầm để Qu&yacute; kh&aacute;ch c&oacute; được lựa chọn tốt nhất.<br />\r\n- Qu&yacute; kh&aacute;ch chỉ thanh to&aacute;n khi thật sự h&agrave;i l&ograve;ng với sản phẩm v&agrave; chất lượng dịch vụ của ch&uacute;ng t&ocirc;i. Ch&uacute;ng t&ocirc;i sẽ kh&ocirc;ng t&iacute;nh bất kỳ khoản ph&iacute; n&agrave;o cho đến khi Qu&yacute; kh&aacute;ch ho&agrave;n to&agrave;n đồng &yacute;.&nbsp;<br />\r\n- Khi Qu&yacute; kh&aacute;ch ho&agrave;n to&agrave;n h&agrave;i l&ograve;ng với sự lựa chọn của m&igrave;nh, Qu&yacute; kh&aacute;ch c&oacute; thể thanh to&aacute;n ngay bằng c&aacute;c thẻ quốc tế, nội địa m&agrave; kh&ocirc;ng cần phải ra ng&acirc;n h&agrave;ng r&uacute;t tiền mặt trước.<br />\r\n- H&atilde;y gọi cho ch&uacute;ng t&ocirc;i bất cứ l&uacute;c n&agrave;o Qu&yacute; kh&aacute;ch cần được phục vụ với chất lượng 5 sao ho&agrave;n hảo.\r\n<p dir=\"ltr\">Cập nhật lần cuối: 5/8/2020<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<h1 style=\"text-align:center\"><strong>TRUNG T&Acirc;M HỖ TRỢ TRA CỨU TH&Ocirc;NG TIN, CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH SẢN PHẨM CH&Iacute;NH H&Atilde;NG</strong></h1>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i xin lỗi v&igrave; sự cố khiến điện thoại của qu&yacute; kh&aacute;ch bị hỏng v&agrave; phải đi bảo h&agrave;nh. Ch&uacute;ng t&ocirc;i c&oacute; 2 hỗ trợ d&agrave;nh ri&ecirc;ng cho kh&aacute;ch h&agrave;ng mua điện thoại tại TGDĐ trong thời gian đi bảo h&agrave;nh như sau:</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i cung cấp cho kh&aacute;ch h&agrave;ng một điện thoại đ&atilde; qua sử dụng để kh&aacute;ch h&agrave;ng sử dụng tạm thời trong thời gian bảo h&agrave;nh. Chi tiết m&aacute;y cung cấp qu&yacute; kh&aacute;ch c&oacute; thể hỏi nh&acirc;n vi&ecirc;n si&ecirc;u thị hoặc xem tr&ecirc;n giấy tiếp nhận bảo h&agrave;nh/sửa chữa dịch vụ.</p>\r\n\r\n<p><strong>Bảo h&agrave;nh c&oacute; cam kết trong 12 th&aacute;ng</strong>&nbsp;Nếu m&aacute;y gửi đi bảo h&agrave;nh qu&aacute; 15 ng&agrave;y h&atilde;ng chưa trả m&aacute;y cho kh&aacute;ch h&agrave;ng, hoặc phải bảo h&agrave;nh lại sản phẩm lần nữa trong 30 ng&agrave;y kể từ lần bảo h&agrave;nh trước), kh&aacute;ch h&agrave;ng được &aacute;p dụng phương thức&nbsp;<strong>Hư g&igrave; đổi nấy ngay v&agrave; lu&ocirc;n</strong>&nbsp;hoặc&nbsp;<strong>Ho&agrave;n tiền</strong>&nbsp;với mức ph&iacute; giảm 50%</p>\r\n\r\n<p>Lưu &yacute;: Chỉ &aacute;p dụng cho điện thoại v&agrave; phải c&ograve;n trong điều kiện bảo h&agrave;nh.<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;</p>\r\n', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `LogoId` int(11) NOT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `Images` varchar(255) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL,
  `alias` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `MenuId` int(11) NOT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `ParentId` int(11) DEFAULT NULL,
  `URL` varchar(250) DEFAULT NULL,
  `Order` int(11) DEFAULT NULL,
  `IsVisible` tinyint(1) DEFAULT NULL,
  `Desciption` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`MenuId`, `Name`, `ParentId`, `URL`, `Order`, `IsVisible`, `Desciption`) VALUES
(1, 'Trang chủ', NULL, '#', 1, 1, NULL),
(2, 'Sản phẩm', NULL, 'san-pham', 2, 1, NULL),
(3, 'Váy', 2, 'category.php', 2, 1, NULL),
(4, 'Quần áo', 2, '', 2, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(11) NOT NULL,
  `Customer` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Createtime` datetime NOT NULL,
  `Status` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Cart_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `Customer`, `Address`, `Phone`, `Createtime`, `Status`, `Email`, `Cart_total`) VALUES
(34, 'user', 'hanoi', '0945802194', '2021-12-05 21:56:48', 1, '', 3113470),
(35, 'admin', 'hanoi', '0945802194', '2021-12-11 23:45:58', 1, '', 16);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `Id` int(11) NOT NULL,
  `OrderId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`Id`, `OrderId`, `ProductId`, `Quantity`, `Price`, `Description`) VALUES
(43, 34, 200, 1, 3113470, ''),
(44, 35, 49, 4, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Name` varchar(550) DEFAULT NULL,
  `TypeId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `SupplyId` int(11) DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `Price` int(11) NOT NULL,
  `Color` varchar(250) DEFAULT NULL,
  `Material` varchar(250) DEFAULT NULL,
  `Size` varchar(20) NOT NULL,
  `Detail` longtext DEFAULT NULL,
  `CreateBy` int(11) DEFAULT NULL,
  `Createdate` date DEFAULT NULL,
  `EditBy` int(11) DEFAULT NULL,
  `EditDate` date DEFAULT NULL,
  `TotalView` int(11) DEFAULT NULL,
  `isSaleOff` tinyint(1) DEFAULT NULL,
  `Percent_off` int(11) NOT NULL,
  `Image1` varchar(250) DEFAULT NULL,
  `Image2` varchar(250) DEFAULT NULL,
  `Image3` varchar(260) DEFAULT NULL,
  `Image4` varchar(260) DEFAULT NULL,
  `alias` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Name`, `TypeId`, `CategoryId`, `SubCategoryId`, `SupplyId`, `Description`, `Price`, `Color`, `Material`, `Size`, `Detail`, `CreateBy`, `Createdate`, `EditBy`, `EditDate`, `TotalView`, `isSaleOff`, `Percent_off`, `Image1`, `Image2`, `Image3`, `Image4`, `alias`) VALUES
(212, 'Bánh Tiramisu', 1, 6, 12, 1, '', 20000, 'nâu', 'kem', 'small', NULL, NULL, '0000-00-00', NULL, NULL, -1, 0, 0, 'product1212-banh-tiramisu.jpg', NULL, '2', '3', 'banh-tiramisu'),
(213, 'Bánh flan', 1, 6, 12, NULL, '', 20000, 'nâu đậm', 'trứng', 'small', NULL, NULL, '0000-00-00', NULL, NULL, -1, 0, 0, 'product1213-banh-flan.jpg', NULL, '2', '3', 'banh-flan'),
(214, 'Cà phê phin', 2, 7, 12, NULL, '', 20000, 'nâu', 'cà phê', '100ml', NULL, NULL, '2023-11-29', NULL, NULL, -12, 0, 0, 'product1214-ca-phe-phin.jpg', NULL, '', '', 'ca-phe-phin'),
(215, 'Nước ép táo', 1, 8, 12, NULL, '', 30000, 'vàng nâu', 'táo ', '700ml', NULL, NULL, '0000-00-00', NULL, NULL, 0, 1, 2, 'product1215-nuoc-ep-tao.jpg', NULL, '', '', 'nuoc-ep-tao'),
(216, 'Cà phê truyền thống', 1, 7, 12, NULL, '', 30000, 'nâu đậm', 'cà phê', '100ml', NULL, NULL, '0000-00-00', NULL, NULL, -15, 0, 0, 'product1216-ca-phe-truyen-thong.jpg', 'product2216-ca-phe-truyen-thong.jpg', 'product3216-ca-phe-truyen-thong.jpg', 'product4216-ca-phe-truyen-thong.jpg', 'ca-phe-truyen-thong');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `Id` int(11) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Id`, `Name`, `Description`) VALUES
(1, 'admin', 'Quản trị viên'),
(2, 'user', 'Khách hàng');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `Id` int(11) NOT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `img1` varchar(260) DEFAULT NULL,
  `text1` varchar(500) DEFAULT NULL,
  `img2` varchar(260) DEFAULT NULL,
  `text2` varchar(500) DEFAULT NULL,
  `img3` varchar(260) NOT NULL,
  `text3` varchar(500) NOT NULL,
  `img4` varchar(260) NOT NULL,
  `text4` varchar(500) NOT NULL,
  `img5` varchar(260) NOT NULL,
  `text5` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`Id`, `Name`, `img1`, `text1`, `img2`, `text2`, `img3`, `text3`, `img4`, `text4`, `img5`, `text5`, `status`) VALUES
(1, 'banner trái', 'image1-1-banner-trai.png', '0', 'image2-1-banner-trai.png', '0', 'image3-1-banner-trai.png', '0', 'image4-1-banner-trai.png', '0', 'image5-1-banner-trai.jpg', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `Id` int(11) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `SupplyId` int(11) DEFAULT NULL,
  `Link` varchar(260) DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `pId` int(11) NOT NULL,
  `alias` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`Id`, `Name`, `SupplyId`, `Link`, `CategoryId`, `pId`, `alias`) VALUES
(12, 'Bánh Tiramisu', 1, NULL, 6, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `SupplyId` int(11) NOT NULL,
  `Name` varchar(500) DEFAULT NULL,
  `Logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`SupplyId`, `Name`, `Logo`) VALUES
(1, 'Việt Nam', NULL),
(2, 'Việt Nam', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `alias` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`Id`, `Name`, `Description`, `alias`) VALUES
(1, 'SẢN PHẨM NỔI BẬT', '', 'san-pham-order'),
(2, 'SẢN PHẨM MỚI', '', 'san-pham-moi'),
(3, 'SẢN PHẨM KHUYẾN MẠI', '', 'san-pham-khuyen-mai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `CreateDate` date DEFAULT NULL,
  `RoleId` int(11) DEFAULT NULL,
  `Avatar` varchar(550) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Username`, `Password`, `Name`, `CreateDate`, `RoleId`, `Avatar`, `Email`, `Phone`, `Address`) VALUES
(33, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'anh', NULL, 1, NULL, 'admin@gmail.com', NULL, NULL),
(34, 'ad@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', NULL, '2023-11-29', 1, NULL, 'ad@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE `user_online` (
  `session` varchar(100) NOT NULL DEFAULT '''''',
  `time` int(11) NOT NULL DEFAULT 0,
  `ip` varchar(24) NOT NULL,
  `browser` varchar(50) NOT NULL,
  `dateonline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`session`, `time`, `ip`, `browser`, `dateonline`) VALUES
('69lm284ird532mb6k0dt61ksim', 1701314967, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `visiter`
--

CREATE TABLE `visiter` (
  `Id` int(11) NOT NULL,
  `session` varchar(100) NOT NULL DEFAULT '''''',
  `time` int(11) NOT NULL DEFAULT 0,
  `ip` varchar(24) NOT NULL,
  `browser` varchar(50) NOT NULL,
  `dateonline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `visiter`
--

INSERT INTO `visiter` (`Id`, `session`, `time`, `ip`, `browser`, `dateonline`) VALUES
(86, 'ov8d56pt7stnr6ierfnos5vtim', 1701231238, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-11-29'),
(87, 's030roefgomi7hvrbh51uauo8k', 1701243155, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-11-29'),
(88, 'ph0iod2tk83552p9qurm9gpq37', 1701244827, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-11-29'),
(89, 'ov8d56pt7stnr6ierfnos5vtim', 1701247524, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-11-29'),
(90, '69lm284ird532mb6k0dt61ksim', 1701313962, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-11-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_Categories_Supplies1` (`SupplyId`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_Comment_Product` (`ProductId`);

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `imageslide`
--
ALTER TABLE `imageslide`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `livesport`
--
ALTER TABLE `livesport`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`LogoId`),
  ADD UNIQUE KEY `logo` (`alias`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MenuId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_Product_Supplies` (`SupplyId`),
  ADD KEY `FK_Product_Categories` (`CategoryId`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_Id_Supplies1` (`SupplyId`),
  ADD KEY `FK_Id_Category1` (`CategoryId`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`SupplyId`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_User_Role` (`RoleId`);

--
-- Indexes for table `user_online`
--
ALTER TABLE `user_online`
  ADD PRIMARY KEY (`session`);

--
-- Indexes for table `visiter`
--
ALTER TABLE `visiter`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `imageslide`
--
ALTER TABLE `imageslide`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `intro`
--
ALTER TABLE `intro`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `livesport`
--
ALTER TABLE `livesport`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `LogoId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `MenuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `SupplyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `visiter`
--
ALTER TABLE `visiter`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `FK_Categories_Supplies1` FOREIGN KEY (`SupplyId`) REFERENCES `supplies` (`SupplyId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_Comment_Product` FOREIGN KEY (`ProductId`) REFERENCES `product` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_Product_Categories` FOREIGN KEY (`CategoryId`) REFERENCES `categories` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Product_Supplies` FOREIGN KEY (`SupplyId`) REFERENCES `supplies` (`SupplyId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `FK_Id_Category1` FOREIGN KEY (`CategoryId`) REFERENCES `categories` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Id_Supplies1` FOREIGN KEY (`SupplyId`) REFERENCES `supplies` (`SupplyId`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_User_Role` FOREIGN KEY (`RoleId`) REFERENCES `role` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
