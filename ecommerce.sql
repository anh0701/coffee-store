-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 11:21 AM
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
(6, 'Bánh ', 1, 1, 'cake'),
(7, 'Cà phê', 1, 2, 'coffee'),
(8, 'Nước ép ', 1, 3, 'juice');

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
(1, 'Hải Phòng', 'Việt Nam', '0123456789', '0123456789', 'http://localhost/btlweb/', 'https://www.facebook.com/', 'http://localhost/btlweb/', 'http://localhost/btlweb/');

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
(1, '1', '<h2 style=\"text-align:center\"><strong>Giới thiệu shop</strong></h2>\r\n<br />\r\n<br />\r\n&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Hiện nay, xu hướng thương mại điện tử đang ph&aacute;t triển rất mạnh, trong tương lai sẽ l&agrave; m&ocirc; h&igrave;nh chủ đạo v&agrave; tất yếu, Coffee store đ&atilde; tạo n&ecirc;n sự kh&aacute;c biệt bởi ch&iacute;nh h&igrave;nh thức n&agrave;y: Một m&ocirc; h&igrave;nh cửa h&agrave;ng trực tuyến, cung cấp mọi g&oacute;c độ của sản phẩm nhằm gi&uacute;p kh&aacute;ch h&agrave;ng dễ d&agrave;ng chọn lựa sản phẩm y&ecirc;u th&iacute;ch, li&ecirc;n tục cập nhật mẫu m&atilde; đa dạng v&agrave; k&egrave;m theo đ&oacute; l&agrave; phong c&aacute;ch b&aacute;n h&agrave;ng chuy&ecirc;n nghiệp, chu đ&aacute;o gi&uacute;p cho bạn trẻ, những người bận rộn, những người l&agrave;m việc văn ph&ograve;ng kh&ocirc;ng c&oacute; thời gian đi shopping vẫn c&oacute; thể thỏa sức mua sắm. với m&ocirc; h&igrave;nh n&agrave;y ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang l&agrave;m h&agrave;i l&ograve;ng tất cả c&aacute;c Kh&aacute;ch h&agrave;ng. Hệ thống b&aacute;n h&agrave;ng của ch&uacute;ng t&ocirc;i xuất hiện ở mọi nơi tr&ecirc;n Internet từ Facebook, Twitter. Bạn c&oacute; thể t&igrave;m hiểu kỹ hơn để y&ecirc;n t&acirc;m hơn về những sản phẩm cũng như dịch vụ b&aacute;n h&agrave;ng trực tuyến của ch&uacute;ng t&ocirc;i theo những đường dẫn sau đ&acirc;y:\r\n<p>+ Facebook:&nbsp;<br />\r\n+ Twitter:&nbsp;<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<h2 style=\"text-align:center\"><strong>Hướng dẫn order sản phẩm</strong></h2>\r\n&nbsp;\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Hiện nay, xu hướng thương mại điện tử đang ph&aacute;t triển rất mạnh, trong tương lai sẽ l&agrave; m&ocirc; h&igrave;nh chủ đạo v&agrave; tất yếu, Coffee store đ&atilde; tạo n&ecirc;n sự kh&aacute;c biệt bởi ch&iacute;nh h&igrave;nh thức n&agrave;y: Một m&ocirc; h&igrave;nh cửa h&agrave;ng trực tuyến, cung cấp mọi g&oacute;c độ của sản phẩm nhằm gi&uacute;p kh&aacute;ch h&agrave;ng dễ d&agrave;ng chọn lựa sản phẩm y&ecirc;u th&iacute;ch, li&ecirc;n tục cập nhật mẫu m&atilde; đa dạng v&agrave; k&egrave;m theo đ&oacute; l&agrave; phong c&aacute;ch b&aacute;n h&agrave;ng chuy&ecirc;n nghiệp, chu đ&aacute;o gi&uacute;p cho bạn trẻ, những người bận rộn, những người l&agrave;m việc văn ph&ograve;ng kh&ocirc;ng c&oacute; thời gian đi shopping vẫn c&oacute; thể thỏa sức mua sắm. với m&ocirc; h&igrave;nh n&agrave;y ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang l&agrave;m h&agrave;i l&ograve;ng tất cả c&aacute;c Kh&aacute;ch h&agrave;ng. Hệ thống b&aacute;n h&agrave;ng của ch&uacute;ng t&ocirc;i xuất hiện ở mọi nơi tr&ecirc;n Internet từ Facebook, Twitter. Bạn c&oacute; thể t&igrave;m hiểu kỹ hơn để y&ecirc;n t&acirc;m hơn về những sản phẩm cũng như dịch vụ b&aacute;n h&agrave;ng trực tuyến của ch&uacute;ng t&ocirc;i theo những đường dẫn sau đ&acirc;y:</p>\r\n\r\n<p>+ Facebook:&nbsp;<br />\r\n+ Twitter:&nbsp;<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<h2 style=\"text-align:center\"><strong>Chi ph&iacute; vận chuyển, giao h&agrave;ng v&agrave; thanh to&aacute;n</strong></h2>\r\n\r\n<p><br />\r\nHiện nay, xu hướng thương mại điện tử đang ph&aacute;t triển rất mạnh, trong tương lai sẽ l&agrave; m&ocirc; h&igrave;nh chủ đạo v&agrave; tất yếu, Coffee store đ&atilde; tạo n&ecirc;n sự kh&aacute;c biệt bởi ch&iacute;nh h&igrave;nh thức n&agrave;y: Một m&ocirc; h&igrave;nh cửa h&agrave;ng trực tuyến, cung cấp mọi g&oacute;c độ của sản phẩm nhằm gi&uacute;p kh&aacute;ch h&agrave;ng dễ d&agrave;ng chọn lựa sản phẩm y&ecirc;u th&iacute;ch, li&ecirc;n tục cập nhật mẫu m&atilde; đa dạng v&agrave; k&egrave;m theo đ&oacute; l&agrave; phong c&aacute;ch b&aacute;n h&agrave;ng chuy&ecirc;n nghiệp, chu đ&aacute;o gi&uacute;p cho bạn trẻ, những người bận rộn, những người l&agrave;m việc văn ph&ograve;ng kh&ocirc;ng c&oacute; thời gian đi shopping vẫn c&oacute; thể thỏa sức mua sắm. với m&ocirc; h&igrave;nh n&agrave;y ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang l&agrave;m h&agrave;i l&ograve;ng tất cả c&aacute;c Kh&aacute;ch h&agrave;ng. Hệ thống b&aacute;n h&agrave;ng của ch&uacute;ng t&ocirc;i xuất hiện ở mọi nơi tr&ecirc;n Internet từ Facebook, Twitter. Bạn c&oacute; thể t&igrave;m hiểu kỹ hơn để y&ecirc;n t&acirc;m hơn về những sản phẩm cũng như dịch vụ b&aacute;n h&agrave;ng trực tuyến của ch&uacute;ng t&ocirc;i theo những đường dẫn sau đ&acirc;y:<br />\r\n+ Facebook:&nbsp;<br />\r\n+ Twitter:&nbsp;<br />\r\n&nbsp;</p>\r\n', NULL, 1),
(2, 'Nội dung giới thiệu shop', '<h1 style=\"text-align:center\"><strong>Giới thiệu shop</strong></h1>\r\n\r\n<h1 style=\"text-align:center\"><span style=\"font-size:28px\"><strong>Chi ph&iacute; vận chuyển, giao h&agrave;ng v&agrave; thanh to&aacute;n</strong></span></h1>\r\n\r\n<p>&Aacute;p dụng từ: 26/3/2021</p>\r\n\r\n<h2 dir=\"ltr\"><strong>1. PHẠM VI &Aacute;P DỤNG</strong></h2>\r\n\r\n<p dir=\"ltr\">Những khu vực tỉnh th&agrave;nh c&oacute; hệ thống qu&aacute;n c&agrave; ph&ecirc;.</p>\r\n\r\n<h2 dir=\"ltr\"><strong>2. THỜI GIAN NHẬN H&Agrave;NG</strong></h2>\r\n\r\n<p dir=\"ltr\">Thời gian giao h&agrave;ng cụ thể:</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Khoảng c&aacute;ch đến nh&agrave; kh&aacute;ch từ qu&aacute;n gần nhất&nbsp;</strong></td>\r\n			<td><strong>TP. HCM</strong></td>\r\n			<td><strong>Tỉnh kh&aacute;c</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dưới 5km</td>\r\n			<td>Giao trong 30 ph&uacute;t</td>\r\n			<td>Giao trong 30 ph&uacute;t</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5-10km</td>\r\n			<td>Giao trong 1 tiếng</td>\r\n			<td>Giao trong 1 tiếng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>10-20km</td>\r\n			<td>Giao trong 2 tiếng</td>\r\n			<td>Giao trong 2 tiếng</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2 dir=\"ltr\"><strong>3. PH&Iacute; GIAO H&Agrave;NG</strong></h2>\r\n- Mức ph&iacute; tối thiểu: 13.000 đồng/3km đầu ti&ecirc;n.<br />\r\n- Mức ph&iacute; mỗi km tiếp theo: 4.000 đồng/km tiếp theo.<br />\r\n&nbsp;\r\n<p dir=\"ltr\"><strong>Lưu &yacute;:</strong></p>\r\n\r\n<p dir=\"ltr\">+ Khoảng c&aacute;ch giao h&agrave;ng l&agrave; khoảng c&aacute;ch được t&iacute;nh từ nh&agrave; kh&aacute;ch h&agrave;ng đến cơ sở qu&aacute;n&nbsp;gần nhất</p>\r\n\r\n<p dir=\"ltr\">+ H&agrave;ng online chỉ c&oacute; chuyển h&agrave;ng qua đối t&aacute;c th&igrave; tổng đ&agrave;i 1800 1060 sẽ tư vấn c&aacute;ch thức giao h&agrave;ng &amp; ph&iacute; chuyển h&agrave;ng ph&ugrave; hợp.</p>\r\n\r\n<h2 dir=\"ltr\"><strong>4. ĐEM TH&Ecirc;M NHIỀU SẢN PHẨM, MẪU M&Atilde; KH&Aacute;C ĐỂ KH&Aacute;CH H&Agrave;NG LỰA TẠI NH&Agrave;</strong></h2>\r\n- Qu&yacute; kh&aacute;ch chỉ thanh to&aacute;n khi thật sự h&agrave;i l&ograve;ng với sản phẩm v&agrave; chất lượng dịch vụ của ch&uacute;ng t&ocirc;i. Ch&uacute;ng t&ocirc;i sẽ kh&ocirc;ng t&iacute;nh bất kỳ khoản ph&iacute; n&agrave;o cho đến khi Qu&yacute; kh&aacute;ch ho&agrave;n to&agrave;n đồng &yacute;.&nbsp;<br />\r\n- Khi Qu&yacute; kh&aacute;ch ho&agrave;n to&agrave;n h&agrave;i l&ograve;ng với sự lựa chọn của m&igrave;nh, Qu&yacute; kh&aacute;ch c&oacute; thể thanh to&aacute;n ngay bằng c&aacute;c thẻ quốc tế, nội địa m&agrave; kh&ocirc;ng cần phải ra ng&acirc;n h&agrave;ng r&uacute;t tiền mặt trước.<br />\r\n- H&atilde;y gọi cho ch&uacute;ng t&ocirc;i bất cứ l&uacute;c n&agrave;o Qu&yacute; kh&aacute;ch cần được phục vụ với chất lượng 5 sao ho&agrave;n hảo.\r\n<p dir=\"ltr\">Cập nhật lần cuối: 5/8/2020<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;</p>\r\n', NULL, 1);

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
(2, 'Sản phẩm', NULL, 'san-pham', 2, 1, NULL);

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
(35, 'admin', 'hanoi', '0945802194', '2021-12-11 23:45:58', 1, '', 16),
(38, 'user', 'HP', '0123456789', '2023-12-05 09:44:13', 0, '', 40000);

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
(44, 35, 49, 4, 4, ''),
(48, 38, 213, 1, 20000, ''),
(49, 38, 214, 1, 20000, '');

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
(212, 'Bánh Tiramisu', 1, 6, 12, 1, '', 20000, 'nâu', 'kem', 'small', NULL, NULL, '0000-00-00', NULL, NULL, 987, 0, 0, 'product1212-banh-tiramisu.jpg', NULL, '2', '3', 'banh-tiramisu'),
(213, 'Bánh flan', 1, 6, 12, 1, '', 20000, 'nâu đậm', 'trứng', 'small', NULL, NULL, '0000-00-00', NULL, NULL, 1000, 0, 0, 'product1213-banh-flan.jpg', NULL, '2', '3', 'banh-flan'),
(214, 'Cà phê phin', 1, 7, 12, 1, '', 20000, 'nâu', 'cà phê', '100ml', NULL, NULL, '2023-11-29', NULL, NULL, 73, 0, 0, 'product1214-ca-phe-phin.jpg', NULL, '', '', 'ca-phe-phin'),
(215, 'Nước ép táo', 1, 8, 12, NULL, '', 30000, 'vàng nâu', 'táo ', '700ml', NULL, NULL, '0000-00-00', NULL, NULL, 999, 1, 2, 'product1215-nuoc-ep-tao.jpg', NULL, '', '', 'nuoc-ep-tao'),
(216, 'Cà phê truyền thống', 1, 7, 12, NULL, '', 30000, 'nâu đậm', 'cà phê', '100ml', NULL, NULL, '0000-00-00', NULL, NULL, 998, 0, 0, 'product1216-ca-phe-truyen-thong.jpg', 'product2216-ca-phe-truyen-thong.jpg', 'product3216-ca-phe-truyen-thong.jpg', 'product4216-ca-phe-truyen-thong.jpg', 'ca-phe-truyen-thong'),
(217, 'Banh Tiramisu', 3, 6, 12, NULL, '', 100000, 'nau', '', '', NULL, NULL, '2023-12-08', NULL, NULL, -2, 1, 10, 'product1217-banh-tiramisu.jpg', NULL, NULL, NULL, 'banh-tiramisu');

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
  `Address` varchar(200) DEFAULT NULL,
  `reset_token_hash` varchar(255) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Username`, `Password`, `Name`, `CreateDate`, `RoleId`, `Avatar`, `Email`, `Phone`, `Address`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(33, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'anh', NULL, 1, NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL),
(34, 'ad@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', NULL, '2023-11-29', 1, NULL, 'ad@gmail.com', NULL, NULL, NULL, NULL),
(35, 'user', 'c4ca4238a0b923820dcc509a6f75849b', 'Anh', NULL, 2, NULL, 'user@gmail.com', NULL, 'HP', NULL, NULL);

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
('dpi20vtgjaap850hf8i0omon6r', 1702116669, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-12-09'),
('o4pc2mv12sojpq6fd4knk5a91i', 1702116351, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-12-09');

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
(90, '69lm284ird532mb6k0dt61ksim', 1701313962, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-11-30'),
(91, '6nq77nnkce2ijeuusvg1ffsebn', 1701322132, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-11-30'),
(92, 'fbn570qdpmkj63jrq1g2bos265', 1701408473, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-12-01'),
(93, 'd6hv2d99g7ple4rh7u7cni17od', 1701528938, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-12-02'),
(94, 'p9l8b9l3ntfok5663b983rn60c', 1701529401, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-12-02'),
(95, 'b3j20qtgt0u568b1dvp7d35114', 1701742223, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-12-05'),
(96, '4u9ltvn4jf5ucloqrhrd37gqs5', 1701743686, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-12-05'),
(97, '4vo56vucj652btq26m1tfb7004', 1701997854, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-12-08'),
(98, 'c8rp70n4ensa1so9t4cceqg1np', 1702005319, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-12-08'),
(99, '2osn1tot5a4sf22sfn5f6kc3hd', 1702009232, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-12-08'),
(100, 'ut13c0rlrufghc9h4obsjjjvrh', 1702010314, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-12-08'),
(101, 'o4pc2mv12sojpq6fd4knk5a91i', 1702100576, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-12-09'),
(102, 'dpi20vtgjaap850hf8i0omon6r', 1702116387, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2023-12-09');

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
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`),
  ADD UNIQUE KEY `reset_token_expires_at` (`reset_token_expires_at`),
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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `visiter`
--
ALTER TABLE `visiter`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

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
