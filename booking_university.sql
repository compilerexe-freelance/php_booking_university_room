-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2016 at 07:51 PM
-- Server version: 5.6.33
-- PHP Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_university`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `tb_approve`
--

CREATE TABLE `tb_approve` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `idcard` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `career` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `reserve_booking` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `date_booking` varchar(255) NOT NULL,
  `number_people` varchar(255) NOT NULL,
  `device` varchar(255) NOT NULL,
  `ps` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`id`, `title`, `reserve_booking`, `start_time`, `end_time`, `date_booking`, `number_people`, `device`, `ps`, `name`, `tel`, `username`, `status`, `comment`) VALUES
(20, 'ห้องประชุมอาคารวิจัยและประกันคุณภาพการศึกษา', '2016-12-03', '10.00', '11.00', '2016-12-01', '10', '-', '-', 'a b', '-', 'test', 'อนุมัติ', ''),
(21, 'ห้องจัดนิทรรศการและแสดงผลงานชั้น 1 อาคารศูนย์ศึกษาและพัฒนาอัญมณี ', '2016-12-01', '8.00', '9.00', '2016-12-01', '5', '-', '-', 'a b', '-', 'test', 'อนุมัติ', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_income`
--

CREATE TABLE `tb_income` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `income` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `reserve_booking` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_income`
--

INSERT INTO `tb_income` (`id`, `title`, `income`, `username`, `reserve_booking`, `status`) VALUES
(3, 'ห้องประชุมอาคารวิจัยและประกันคุณภาพการศึกษา', '2000', 'test', '2016-12-03', 1),
(4, 'ห้องจัดนิทรรศการและแสดงผลงานชั้น 1 อาคารศูนย์ศึกษาและพัฒนาอัญมณี ', '3500', 'test', '2016-12-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_place`
--

CREATE TABLE `tb_place` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `detail` text NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_place`
--

INSERT INTO `tb_place` (`id`, `title`, `image1`, `image2`, `image3`, `detail`, `price`) VALUES
(1, 'ห้องประชุมใหญ่ศรีสักทอง', '5939529.png', '5481989.png', '7633594.png', 'ห้องประชุมใหญ่ศรีสักทอง\r\nบรรจุผู้เข้าอบรมได้ 200-400 คน (เก้าอี้นวม/เลคเซอร์) ภายในเครื่องปรับอากาศ 14 เครื่อง สามารถจัดโต๊ะรับประทานอาหารด้านหลังได้ มีฉากกั้นระหว่างห้อง มีเวทีใหญ่สำหรับจัดกิจกรรมพร้อมติดตั้งเครื่องฉายโปรเจคเตอร์ จอภาพขนาดใหญ่\r\nหมายเหตุ\r\n1 หน่วยงานภายนอกจัดกิจกรรม\r\n   เวลา 07.00 น.-15.00 น. =7,000 บาท\r\n2 จัดงานรื่นเริงสังสรรค์/งานมงคล\r\n  เวลา 15.00 น.-24.00 น. =8,000 บาท\r\n3 หน่วยงานภายในเวลา\r\nเวลา 07.00 น.-18.00 น. =2,000 บาท', '7000'),
(2, 'ห้องประชุมอาคารวิจัยและประกันคุณภาพการศึกษา', '3567470.png', '', '', 'ห้องประชุมอาคารวิจัยและประกันคุณภาพการศึกษา\r\nบรรจุเข้าอบรมได้ 30-50 คน จำนวน 2 ห้อง ภายในมีเครื่องปรับอากาศ 2 เครื่อง สามารถติดตั้งโปรเจคเตอร์และเครื่องฉายทึบแสงเพิ่มเติมได้', '2000'),
(3, 'ห้องคอมพิวเตอร์ ศูนย์การเรียนรู้ ICT', '', '', '', 'ห้องคอมพิวเตอร์ ศูนย์การเรียนรู้ ICT ชุมชนชายแดนจังหวัดตาก\r\nมีคอมพิเวตอร์สามารถใช้งานได้ 20 เครื่อง ภายในมีเครื่องปรับอากาศ 2 เครื่อง สามารถติดตั้งโปรเจคเตอร์และเครื่องฉายทึบแสงเพิ่มเติมได้', '3000'),
(4, 'ห้องคอมพิวเตอร์ 1,2 และ 3', '', '', '', 'ห้องคอมพิวเตอร์ 1,2 และ 3 มีคอมพิวเตอร์สามารถใช้งานได้ห้องละ 40 เครื่อง ภายในมีเครื่องปรับอากาศห้องละ 2 เครื่อง สามารถติดตั้งโปรเจคเตอร์และเครื่องฉายทึบแสงเพิ่มเติมได้ (กรณีไม่มีการเรียนการสอน)', '2500'),
(5, 'ห้องบริการอินเตอร์เน็ต อาคารสิรินธร', '', '', '', 'ห้องบริการอินเตอร์เน็ต อาคารสิรินธร \r\nให้บริการได้ในกรณีที่มีการจัดอบรมของหน่วยงานนอกเวลาราชการ หรือไม่มีการเรียนการสอนในเวลา ภายในมีเครื่องคอมพิวเตอร์ที่สามารถใช้งานได้จำนวน 53 เครื่อง และเครื่องปรับอากาศ 6 เครื่อง และสามารถติดตั้งโปรเจคเตอร์และเครื่องฉายทึบแสงเพิ่มเติมได้', '3000'),
(6, 'ห้องประชุมอาคารสิรินธรชั้น 4', '', '', '', 'ห้องประชุมอาคารสิรินธรชั้น 4 \r\nบรรจุผู้เข้าอบรมได้ 200 - 300 คน (เก้าอี้บุนวม/เลคเชอร์) ภายในมีเครื่องปรับอากาศ 5 เครื่อง มีเวทีสำหรับจัดการแสดงหรือจัดกิจกรรมได้ สามารถติดตั้งโปรเจคเตอร์และเครื่องฉายทึบแสงเพิ่มเติมได้', '3500'),
(7, 'ห้องปฏิบัติการด้านการวิเคราะห์อัญมณี (ห้องแลป)', '', '', '', 'ห้องปฏิบัติการด้านการวิเคราะห์อัญมณี (ห้องแลป)', '10000'),
(8, 'ห้องจัดนิทรรศการและแสดงผลงานชั้น 1 อาคารศูนย์ศึกษาและพัฒนาอัญมณี ', '', '', '', 'ห้องจัดนิทรรศการและแสดงผลงานชั้น 1 อาคารศูนย์ศึกษาและพัฒนาอัญมณี \r\nบรรจุคนได้จำนวน 50-80 คนเป็นห้องโล่ง ภายในมีเครื่องปรับอากาศจำนวน 3 เครื่อง ขนาดห้อง 144 ตารางเมตร สามารถติดตั้งเครื่องเสียงโปรเจคเตอร์และเครื่องฉายทึบแสงเพิ่มเติมได้', '3500'),
(9, 'ห้องประชุมอาคารศูนย์ศึกษาและพัฒนาอัญมณีชั้น 2 และชั้น 3 (ห้องด้านขวามือ)', '', '', '', 'ห้องประชุมอาคารศูนย์ศึกษาและพัฒนาอัญมณีชั้น 2 และชั้น 3 (ห้องด้านขวามือ)\r\nบรรจุคนได้จำนวน 60-80 คน เป็นห้องโล่ง ภายในมีเครื่องปรับอากาศจำนวน 2 เครื่อง ขนาดห้อง 132 ตารางเมตร สามารถติดตั้งเครื่องเสียงโปรเจคเตอร์และเครื่องฉายทึบแสงเพิ่มเติมได้', '3500'),
(10, 'ห้องประชุมอาคารศูนย์ศึกษาและพัฒนาอัญมณีชั้น 2 และชั้น 3 (ห้องด้านในทางไปห้องน้ำ)', '', '', '', 'ห้องประชุมอาคารศูนย์ศึกษาและพัฒนาอัญมณีชั้น 2 และชั้น 3 (ห้องด้านในทางไปห้องน้ำ)\r\nบรรจุคนได้จำนวน 30-40 คนเป็นห้องโล่ง ภายในมีเครื่องปรับอากาศจำนวน 2 เครื่อง  ขนาดห้อง 144 ตารางเมตร สามารถติดตั้งเครื่องเสียงโปรเจคเตอร์และเครื่องฉายทึบแสงเพิ่มเติมได้', '2000'),
(11, 'ห้องพักอาจารย์ ', '', '', '', 'ห้องพักอาจารย์ \r\nสามารถให้บริการได้ 7 ห้อง เข้าพักได้ห้องละ 3 คน/ห้อง/คืน มี 2 เตียง (ที่นอนเสริม) ภายในมีเครื่องปรับอากาศห้องละ 1 เครื่อง พร้อม tv ตู้เสื้อผ้า 1 ห้องน้ำ เครื่องทำน้ำอุ่น ในตัวอาคารมีห้องให้บริการน้ำดื่ม จุดรีดผ้าและมุมกาแฟ (ห้องรวม)', '350'),
(12, 'ห้องบุษราคัม ชั้น 1 อาคารเฉลิมพระเกียรติฯ (ตึก 5)', '', '', '', 'ห้องบุษราคัม ชั้น 1 อาคารเฉลิมพระเกียรติฯ (ตึก 5)\nบรรจุคนได้จำนวน 40- 50 คน เป็นห้องประชุม ภายในมีเครื่องปรับอากาศจำนวน 4 เครื่อง สามารถติดตั้งเครื่องเสียงโปรเจคเตอร์และเครื่องฉายทึบแสงเพิ่มเติมได้', '3000'),
(13, 'ห้องรตนมณีชั้น 2 อาคารเฉลิมพระเกียรติฯ (ตึก 5)', '', '', '', 'ห้องรตนมณีชั้น 2 อาคารเฉลิมพระเกียรติฯ (ตึก 5)\r\nบรรจุคนได้จำนวน 600-800 คน ภายในห้องมีเครื่องปรับอากาศ 15 เครื่อง มีเวทีใหญ่สำหรับจัดกิจกรรมพร้อมติดตั้งเครื่องฉายโปรเจคเตอร์ จอภาพขนาดใหญ่', '16000'),
(14, 'ห้องทับทิม ชั้น 2 อาคารเฉลิมพระเกียรติฯ (ตึก 5)', '', '', '', 'ห้องทับทิม ชั้น 2 อาคารเฉลิมพระเกียรติฯ (ตึก 5)\r\nบรรจุคนได้จำนวน 224 คน ภายในห้องมีเครื่องปรับอากาศ 10 เครื่อง มีเวทีใหญ่สำหรับจัดกิจกรรมพร้อมติดตั้งเครื่องฉายโปรเจคเตอร์ จอภาพขนาดใหญ่', '12000'),
(15, 'สระว่ายน้ำ (อาคารยิมเนเซียม)', '', '', '', 'สระว่ายน้ำ (อาคารยิมเนเซียม)\r\nขนาดสระว่ายน้ำยาว 30 เมตร ความลึก 2.5 ถึง 3 เมตร \r\nเปิดให้บริการ วันจันทร์-ศุกร์ เวลา 16.30 - 20.00 น \r\nเปิดให้บริการ วันเสาร์-อาทิตย์n เวลา 14.00 - 20.00 น \r\nหมายเหตุ \r\nบุคลากรภายใน อาจารย์ เจ้าหน้าที่และนักศึกษา', '50'),
(16, 'สนามกีฬาในอาคารยิมเนเซียม ', '', '', '', 'สนามกีฬาในอาคารยิมเนเซียม \r\nหน่วยงานภายนอกจัดกิจกรรม \r\nเวลา 08.00-12.00 น. =  2,000 บาท \r\nเวลา 12.00-16.00 น. =  2,000 บาท \r\nเวลา 16.00-20.00 น. =  3,000 บาท', '3000'),
(22, 'sadf', '2664659.png', '3813536.png', '1691927.png', '...', '100');

-- --------------------------------------------------------

--
-- Table structure for table `tb_question`
--

CREATE TABLE `tb_question` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `question_one` varchar(255) NOT NULL,
  `question_two` varchar(255) NOT NULL,
  `question_three` varchar(255) NOT NULL,
  `question_four` varchar(255) NOT NULL,
  `question_five` varchar(255) NOT NULL,
  `question_six` varchar(255) NOT NULL,
  `question_seven` varchar(255) NOT NULL,
  `question_eight` varchar(255) NOT NULL,
  `question_nine` varchar(255) NOT NULL,
  `average` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_question`
--

INSERT INTO `tb_question` (`id`, `username`, `question_one`, `question_two`, `question_three`, `question_four`, `question_five`, `question_six`, `question_seven`, `question_eight`, `question_nine`, `average`, `created_at`, `comment`) VALUES
(36, 'test', 'มาก', 'พอใช้', 'มาก', 'มาก', 'มาก', 'พอใช้', 'มาก', 'พอใช้', 'มาก', 'มาก', '2016-12-01', '...'),
(37, 'test', 'น้อย', 'พอใช้', 'น้อย', 'มาก', 'น้อย', 'พอใช้', 'มาก', 'น้อย', 'มาก', 'น้อย', '2016-12-01', '...'),
(38, 'test', 'น้อย', 'มากที่สุด', 'น้อย', 'มาก', 'มากที่สุด', 'พอใช้', 'มาก', 'มากที่สุด', 'มากที่สุด', 'มาก', '2016-12-01', '...');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `idcard` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `career` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `idcard`, `firstname`, `lastname`, `department`, `career`, `position`, `address`, `tel`, `username`, `password`, `active`) VALUES
(7, '1234', 'a', 'b', '-', '-', '-', '-', '-', 'test', 'pass', 1),
(8, '9999', 'q', 'w', '-', '-', '-', '-', '-', 'test2', 'pass', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_approve`
--
ALTER TABLE `tb_approve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_income`
--
ALTER TABLE `tb_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_place`
--
ALTER TABLE `tb_place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_question`
--
ALTER TABLE `tb_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_approve`
--
ALTER TABLE `tb_approve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_income`
--
ALTER TABLE `tb_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_place`
--
ALTER TABLE `tb_place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_question`
--
ALTER TABLE `tb_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
