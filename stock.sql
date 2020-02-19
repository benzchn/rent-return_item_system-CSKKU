-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 05:18 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_code` int(10) NOT NULL,
  `brand_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `brand_active` int(11) NOT NULL DEFAULT 0,
  `brand_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_code`, `brand_name`, `brand_active`, `brand_status`) VALUES
(18, 80, 'ตกแต่ง', 1, 2),
(19, 70, 'โทรศัพท์', 1, 2),
(20, 60, 'โต๊ะ', 2, 1),
(21, 1, 'เก้าอี้', 1, 2),
(22, 61, 'เก้าอี้', 1, 1),
(23, 60, 'พัดลม', 1, 1),
(24, 61, 'อุปกรณ์ไฟฟ้า', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_code` int(10) NOT NULL,
  `categories_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `categories_active` int(11) NOT NULL DEFAULT 0,
  `categories_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_code`, `categories_name`, `categories_active`, `categories_status`) VALUES
(16, 10, 'ของตกแต่งสำนักงาน', 1, 2),
(17, 11, 'โต๊ะใช้ในห้อง', 1, 1),
(18, 12, 'เก้าอี้', 1, 1),
(19, 13, 'พัดลม', 1, 1),
(20, 14, 'อุปกรณ์ไฟฟ้า', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptID` int(11) NOT NULL,
  `deptName` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptID`, `deptName`) VALUES
(1, 'วิทยาการคอมพิวเตอร์'),
(2, 'เทคโนโลยีสารสนเทศ'),
(3, 'ภูมิศาสตร์สารสนเทศ');

-- --------------------------------------------------------

--
-- Table structure for table `news_ad`
--

CREATE TABLE `news_ad` (
  `news_id` int(11) NOT NULL,
  `news_detail` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `news_date` date NOT NULL,
  `news_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_ad`
--

INSERT INTO `news_ad` (`news_id`, `news_detail`, `news_date`, `news_status`) VALUES
(1, 'ประกาศ', '2020-02-19', 2),
(2, 'วันนี้มีอุปกรณ์ตัวใหม่มาให้ยืม นั่นคือ IPHONE 11 รุ่นใหม่ล่าสุด !!', '2020-02-19', 2),
(4, 'sssssssssssssssssss', '2020-02-19', 2),
(5, 'หหหหหหหหหหหหหหหหหห', '2020-02-19', 2),
(6, 'IPHONE 11 เข้ามาใหม่มีให้ยืมเเล้ว', '2020-02-19', 2),
(7, 'นักเรียนที่สนใจยืมอุปกรณ์ สามารถติดต่อได้ที่ เอิทสุดหล่อ CS VIP', '2020-02-19', 2),
(8, 'อยากกินโรตีสามารถ สั่งได้ที่ บังอาร์ท แห่ง ขุนเขา ', '2020-02-19', 2),
(9, 'มุขดาว คนสวย แห่ง CS VIP', '2020-02-19', 2),
(10, 'แจกเบอร์ 088-057xxxx :)', '2020-02-19', 2),
(11, 'เจ๊แมน ปัดแหลก แหก...', '2020-02-19', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `client_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `client_contact` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sub_total` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `brand_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `quantity` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rate` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `brand_id`, `categories_id`, `quantity`, `rate`, `active`, `status`) VALUES
(13, 'โต๊ะ 4 ขา', '../assests/images/stock/1758010535e4c24b9cfc46.jpg', 20, 17, '5', '002', 1, 1),
(14, 'คน', '../assests/images/stock/1259430565e4c24e125f08.jpg', 20, 17, '3', '001', 2, 2),
(15, 'ดาต้า', '../assests/images/stock/21345264085e4c2445e9485.png', 20, 17, '1', '003', 1, 1),
(16, 'เก้าอี้วิเศษ', '../assests/images/stock/12843465895e4c2575543bb.jpg', 22, 18, '12', '004', 1, 1),
(17, 'พัดลม', '../assests/images/stock/3037908925e4c263a0902b.jpg', 23, 19, '6', '005', 1, 1),
(18, 'พัดลมมินิ', '../assests/images/stock/5227916875e4c272ddd226.jpg', 23, 19, '10', '006', 2, 2),
(19, 'พัดลมมินิ', '../assests/images/stock/2005099595e4c2b4df2429.jpg', 23, 19, '15', '006', 1, 1),
(20, 'เก้าอี้คอม', '../assests/images/stock/17219829465e4c2b7802229.jpg', 22, 18, '30', '007', 1, 1),
(21, 'เก้าอี้ทั่วไป', '../assests/images/stock/9033407415e4c2be49547e.jpg', 22, 18, '50', '008', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`, `phone`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'แอดมิน มินแอด', '08800000');

-- --------------------------------------------------------

--
-- Table structure for table `users_personal`
--

CREATE TABLE `users_personal` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `col_year` int(5) NOT NULL,
  `phone` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `department` int(5) NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_personal`
--

INSERT INTO `users_personal` (`id`, `user_id`, `password`, `fullname`, `col_year`, `phone`, `email`, `department`, `role`) VALUES
(4, '603021138-0', '1234', 'ชานนท์  ชาภิรมย์', 3, '0880579462', 'chanon.chapirom@gmail.com', 1, 'student'),
(8, '1234', '1234', '1234', 1, '0880579462', 'chanon_chapirom@kkumail.com', 1, 'personnel'),
(9, '603021331-6', 'พ', '5555555', 1, 'uiooknkj', 'doren123potato@gmail.com', 2, 'student'),
(10, 'ีี้่้่สก่าด', 'ีรรร', 'กเดเเ', 1, 'uiooknkj', 'tidaratk@kkumail.com', 2, 'student'),
(11, '593021479-3', '12341234', 'nattwalan yotachaisan', 4, '087-358-4317', 'nattawalan@kkumail.com', 1, 'student'),
(12, '603021180-1', '123456789', 'อภิชิต ดรหลาบคำ', 4, '0804600486', 'A_apich@kkumail.com', 1, 'student'),
(13, '1', '1', '1', 1, '1', 'jojo-sang@hotmail.com', 1, 'student'),
(14, '6030213316', '12345', 'ธิดารัตน์', 1, '0874271850', 'kommong@gmail.com', 2, 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptID`);

--
-- Indexes for table `news_ad`
--
ALTER TABLE `news_ad`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_personal`
--
ALTER TABLE `users_personal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `deptID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_ad`
--
ALTER TABLE `news_ad`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_personal`
--
ALTER TABLE `users_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
