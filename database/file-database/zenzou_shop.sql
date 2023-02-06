-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 03:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zenzou_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL COMMENT 'รหัสหมวดหมู่',
  `category_name` varchar(255) NOT NULL COMMENT 'ชื่อหมวดหมู่',
  `category_img` text DEFAULT NULL COMMENT 'รูปภาพ',
  `created_at` datetime DEFAULT NULL COMMENT 'วันที่เพิ่ม',
  `updated_at` datetime DEFAULT NULL COMMENT 'วันที่อัปเดต'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`, `category_img`, `created_at`, `updated_at`) VALUES
(7, 'ปลาสวยงาม', '7590867001675691478.jpg', '2023-02-06 10:22:51', '2023-02-06 13:51:18'),
(9, 'ทดสอบ', '2889930911675693032.jpg', '2023-02-06 14:17:12', '2023-02-06 14:17:12'),
(12, 'ครีม', '8461305291675694202.jpg', '2023-02-06 14:36:42', '2023-02-06 14:36:42'),
(13, 'ปลาไทยสวย ๆ', '20591191521675694225.jpg', '2023-02-06 14:37:05', '2023-02-06 14:37:05'),
(14, 'ผู้ชาย', '20123247031675694367.jpg', '2023-02-06 14:39:27', '2023-02-06 14:39:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสหมวดหมู่', AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
