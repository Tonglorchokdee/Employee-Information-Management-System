-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 11:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(10) NOT NULL COMMENT 'ไอดีผู้ใช้',
  `user_username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อผู้ใช้',
  `user_password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสผ่าน',
  `user_name` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อ',
  `user_surname` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'นามสกุล',
  `user_sex` enum('ชาย','หญิง') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'เพศ',
  `user_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'อีเมล์',
  `ref_dep_id` int(1) NOT NULL COMMENT 'tb_department',
  `user_level` enum('member','admin') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'member' COMMENT 'ระดับผู้ใช้'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_username`, `user_password`, `user_name`, `user_surname`, `user_sex`, `user_email`, `ref_dep_id`, `user_level`) VALUES
(1, 'Tong_01', 'eb62f6b9306db575c2d596b1279627a4', 'ต้อง', 'แซ่ซ่ง', 'ชาย', 'sb6240705109@lru.ac.th', 1, 'admin'),
(2, 'Kannika_01', 'eb62f6b9306db575c2d596b1279627a4', 'กรรณิการ์', 'ธาลา', 'หญิง', 'sb6240705101@lru.ac.th', 2, 'member'),
(3, 'Chiraphat_01', 'eb62f6b9306db575c2d596b1279627a4', 'จิรภัทร์', 'คํามะณีจันทร์', 'หญิง', 'sb6240705104@lru.ac.th', 2, 'member'),
(4, 'sky_01', 'eb62f6b9306db575c2d596b1279627a4', 'โคมฟ้า', 'จันทร์จุลเจิม', 'หญิง', 'sb6240705103@lru.ac.th', 4, 'member'),
(5, 'improvisation_01', 'eb62f6b9306db575c2d596b1279627a4', 'ปฏิภาญ', 'บุบผาดา', 'ชาย', 'sb6240705113@lru.ac.th', 1, 'member'),
(6, 'Chatdanai_01', 'eb62f6b9306db575c2d596b1279627a4', 'ฉัตรดนัย', 'ปัญญาวชิรโชติ', 'หญิง', 'sb6240705106@lru.ac.th', 2, 'member'),
(7, 'Peerapat_01', 'eb62f6b9306db575c2d596b1279627a4', 'พีระพัฒน์', 'ภักดี', 'ชาย', 'sb6240705116@lru.ac.th', 3, 'member'),
(8, 'Sirirat_01', 'eb62f6b9306db575c2d596b1279627a4', 'ศิริรัตน์', 'ราชบัวขาว', 'หญิง', 'sb6240705119@lru.ac.th', 4, 'member'),
(9, 'Chayangkun_01', 'eb62f6b9306db575c2d596b1279627a4', 'ชยางกูร', 'รามศิริ', 'ชาย', 'sb6240705107@lru.ac.th', 1, 'member'),
(10, 'Lakkhana_01', 'eb62f6b9306db575c2d596b1279627a4', 'ลักขณา', 'ชื่นนอก', 'หญิง', 'sb6240705118@lru.ac.th', 1, 'member'),
(11, 'prerogative_01', 'eb62f6b9306db575c2d596b1279627a4', 'อภิสิทธิ์', ' วัฒนะมงคล', 'ชาย', 'sb6240705121@lru.ac.th', 3, 'member'),
(12, 'please_01', 'eb62f6b9306db575c2d596b1279627a4', 'กรุณา ', 'ศีละวงษ์', 'หญิง', 'sb6240705102@lru.ac.th', 4, 'member'),
(13, 'Apinya_01', 'eb62f6b9306db575c2d596b1279627a4', 'อภิญญา', 'สมบูรณ์', 'หญิง', 'sb6240705120@lru.ac.th', 1, 'member'),
(14, 'Jillapat_01', 'eb62f6b9306db575c2d596b1279627a4', 'จิลลาภัทร ', 'อ่อนมีคุณ', 'หญิง', 'sb6240705122@lru.ac.th', 2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีผู้ใช้', AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
