-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 04:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dacs2_cosmetic`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_user` int(11) NOT NULL,
  `useracc` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `user_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_user`, `useracc`, `user_password`, `user_email`, `user_name`, `user_image`, `user_address`, `role`, `user_phone`) VALUES
(1, 'admin', '123', 'ndsdsa123@gmail.com', 'ADMIN', NULL, NULL, 2, ''),
(2, 'test1', '123', 'abcdrt123@gmail.com', 'Nhật', NULL, 'Đại Hồng - Đại Lộc - Quảng Nam', 1, '03238472834'),
(3, 'test2', '123', 'abcdfgfd123@gmail.com', 'Florentino', NULL, NULL, 1, ''),
(4, 'test3', '123', 'qewt123@gmail.com', 'Minh Nhật', '', 'Đại Hồng - Đại Lộc - Quảng Nam', 1, '0374905464'),
(5, 'test6', '123', 'asdasd@gmail.com', '[value-5]', '[value-6]', '[value-7]', 1, ''),
(6, 'test7', '123', 'asdasd@gmail.com', 'NMN', '[value-6]', '[value-7]', 1, ''),
(7, 'test8', '12345', 'minhnhatngo0810@gmail.com', 'Yasuo', '', '', 1, ''),
(8, 'zn1nhat', '123', 'minhnhatngo0810@gmail.com', '', '', '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` double NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `p_name`, `p_price`, `p_image`, `p_quantity`, `id_sp`, `id_user`) VALUES
(1, 'Son môi XHG', 100000, '1702130273_product1.jpg', 2, 9, 4),
(2, 'Son môi yasa', 200000, '1702178411_category2.png', 15, 11, 4),
(4, 'Nước Hoa Chanel Chance Eau Tendre', 800000, '1702188343_product4.jpg', 7, 21, 4),
(5, 'Son dưỡng', 60000, '1702136495_ttproduct1.jpg', 7, 20, 4),
(6, 'Son môi yasuo', 200000, '1702197875_pro_white_macaron_cam_dao_1_115ec84461d54bc6a1a2a2c320354e2c.webp', 7, 12, 4),
(9, 'Son môi yasa', 200000, '1702178411_category2.png', 1, 11, 4),
(10, 'Son môi yasuo', 200000, '1702197875_pro_white_macaron_cam_dao_1_115ec84461d54bc6a1a2a2c320354e2c.webp', 1, 12, 4),
(11, 'Son môi yasa', 200000, '1702178411_category2.png', 1, 11, 4),
(12, 'Son môi XHG', 100000, '1702130273_product1.jpg', 1, 9, 4),
(13, 'Son môi yasuo', 200000, '1702197875_pro_white_macaron_cam_dao_1_115ec84461d54bc6a1a2a2c320354e2c.webp', 1, 12, 4),
(14, 'Son môi XHG', 100000, '1702130273_product1.jpg', 1, 9, 4),
(15, 'Son môi yasa', 200000, '1702178411_category2.png', 1, 11, 2),
(16, 'Son môi yasuo', 200000, '1702197875_pro_white_macaron_cam_dao_1_115ec84461d54bc6a1a2a2c320354e2c.webp', 1, 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(20) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `endUser_id` int(20) NOT NULL,
  `orderStatus_id` int(20) NOT NULL,
  `orderDate` date DEFAULT current_timestamp(),
  `shipDate` date DEFAULT current_timestamp(),
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trackingNumber` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `ma_sp` varchar(255) NOT NULL,
  `gia_sp` double NOT NULL,
  `gia_sp_giam` double DEFAULT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `tomtat` varchar(255) DEFAULT NULL,
  `noidung` varchar(255) DEFAULT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_sp`, `ten_sp`, `ma_sp`, `gia_sp`, `gia_sp_giam`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(9, 'Son môi XHG', 'SD01', 100000, 60000, 8, '1702130273_product1.jpg', 'ádasd', ' Màu sắc tươi tắn, son lì mềm mại, giữ màu lâu. Bảo vệ và dưỡng ẩm cho đôi môi, mang lại vẻ quyến rũ và tự tin.', 0, 6),
(11, 'Son môi yasa', 'SM04', 200000, 170000, 15, '1702178411_category2.png', 'a', '  Bảng màu son nude đa dạng, từ nhẹ nhàng đến nổi bật. Là sự lựa chọn hoàn hảo cho mọi tình huống và phong cách.\r\n  Bảng màu son nude đa dạng, từ nhẹ nhàng đến nổi bật. Là sự lựa chọn hoàn hảo cho mọi tình huống và phong cách.\r\n Bảng màu son nude đa dạng,', 0, 6),
(12, 'Son môi yasuo', 'SM02', 200000, 170000, 7, '1702197875_pro_white_macaron_cam_dao_1_115ec84461d54bc6a1a2a2c320354e2c.webp', 'cxgdf', 'Màu hồng phấn tinh tế, son lì, không gây khô môi. Thích hợp cho cả dịp ngày và dịp đặc biệt.', 0, 6),
(13, 'Nước hoa Chanel', 'NH03', 200000, 170000, 15, '1702124045_87d047f5780d453e949cc4bf26c2b7e3_d4df085a04f541a09687571a27bb3cd3_grande.webp', 'abc', 'Hương thơm quyến rũ, gợi cảm. Một mùi hương đặc sắc và lôi cuốn, thích hợp cho những buổi tiệc tối hoặc dự sự kiện quan trọng.', 0, 3),
(14, 'Chì kẻ xé mắt XHG', 'CM43', 10000, 10000, 5, '1702178386_category3.png', 'a', 'Kẻ mắt chống lem, dễ sử dụng. Màu sắc đa dạng, tạo nên đường kẻ mắt chính xác và nổi bật.', 0, 19),
(20, 'Son dưỡng', 'SD01', 60000, 10000, 7, '1702136495_ttproduct1.jpg', '', 'Màu hồng đất nhẹ nhàng, tạo vẻ tự nhiên cho đôi môi. Son mềm mại, giữ màu lâu, không làm khô môi.', 0, 6),
(21, 'Nước Hoa Chanel Chance Eau Tendre', 'NH05', 800000, 800000, 7, '1702188343_product4.jpg', 'sffdgnfgjm,nmcxnzfbhcm', ' Hương thơm dễ chịu của lavender, tạo cảm giác thư giãn và yên bình. Là một món quà tuyệt vời cho người yêu hương thơm tinh tế.', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL,
  `thutu` int(11) NOT NULL,
  `hinhanhloai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`, `hinhanhloai`) VALUES
(3, 'Nước hoa', 1, '1702212637_category4.png'),
(6, 'Son môi', 2, 'category2.png'),
(12, 'Kem nền', 3, '1702212960_category5.png'),
(15, 'Serum', 6, '1702213002_category1.png'),
(19, 'Chì kẻ mắt', 5, '1702213165_category3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `id_sp` FOREIGN KEY (`id_sp`) REFERENCES `product` (`id_sp`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `account` (`id_user`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `id_danhmuc` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
