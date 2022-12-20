-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 03:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scheduler`
--

-- --------------------------------------------------------

--
-- Table structure for table `alloc_tb`
--

CREATE TABLE `alloc_tb` (
  `al_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classroom_tb`
--

CREATE TABLE `classroom_tb` (
  `class_id` int(11) NOT NULL,
  `room_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classroom_tb`
--

INSERT INTO `classroom_tb` (`class_id`, `room_no`) VALUES
(1, '201'),
(2, '301');

-- --------------------------------------------------------

--
-- Table structure for table `dep_tb`
--

CREATE TABLE `dep_tb` (
  `depid` int(11) NOT NULL,
  `dname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dep_tb`
--

INSERT INTO `dep_tb` (`depid`, `dname`) VALUES
(1, 'Bachelor of Computer Application'),
(2, 'Management studies'),
(3, 'Mathematics'),
(4, 'Statistics'),
(5, 'Hindi'),
(6, 'Malayalam'),
(7, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `desig_tb`
--

CREATE TABLE `desig_tb` (
  `des_id` int(11) NOT NULL,
  `desig_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `desig_tb`
--

INSERT INTO `desig_tb` (`des_id`, `desig_name`) VALUES
(1, 'Head of Department'),
(2, 'Faculty member');

-- --------------------------------------------------------

--
-- Table structure for table `exam_tb`
--

CREATE TABLE `exam_tb` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `sem_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_tb`
--

INSERT INTO `exam_tb` (`exam_id`, `exam_name`, `start_date`, `end_date`, `sem_id`, `status`) VALUES
(13, 'BSc DEGREE EXAMINATION 2022', '2022-11-02', '2022-12-11', 4, 1),
(14, 'DEGREE EXAMINATION MARCH,2023', '2022-11-12', '2022-11-30', 1, 1),
(15, 'BSc DEGREE CBCS EXAMINATION SEPTEMBER, 2019', '2022-11-12', '2022-11-30', 1, 0),
(16, 'abc', '2022-11-10', '2022-12-11', 3, 0),
(17, 'eerrrrrrrr', '2022-11-10', '2022-11-13', 4, 0),
(18, 'eerrrrrrrr', '2022-11-10', '2022-11-13', 4, 0),
(19, 'DEGREEE ', '2022-11-30', '2022-12-11', 6, 0),
(20, 'nami', '2022-11-04', '2022-11-04', 3, 0),
(21, 'new examination', '2022-12-04', '2022-12-21', 2, 1),
(22, 'new examination', '2022-12-04', '2022-12-21', 2, 1),
(23, 'neww', '2022-12-05', '2022-12-29', 2, 1),
(24, 'neww', '2022-12-05', '2022-12-29', 2, 1),
(25, 'mm', '2022-12-05', '2022-12-23', 1, 1),
(26, 'mm', '2022-12-05', '2022-12-23', 1, 1),
(27, 'neeee', '2022-12-04', '2022-12-22', 1, 1),
(28, 'aaaaaaaaaa', '2022-12-04', '2022-12-14', 2, 1),
(29, 'abccccc', '2022-12-04', '2022-12-23', 3, 1),
(30, 'abcd', '2022-12-04', '2022-12-23', 3, 1),
(31, 'efgh', '2022-12-04', '2022-12-23', 4, 1),
(32, 'ammm', '2022-12-04', '2022-12-15', 4, 1),
(33, 'ammm', '2022-12-04', '2022-12-15', 4, 1),
(34, 'jnjn', '2021-11-05', '2021-11-05', 1, 1),
(35, 'ihnhjn', '2020-10-04', '2020-10-04', 4, 1),
(36, 'exam 2035', '2022-12-13', '2022-12-21', 6, 1),
(37, 'xbtbr', '2022-12-08', '2022-12-06', 6, 1),
(38, 'rrgthtr', '2022-12-21', '2022-12-07', 3, 1),
(39, 'nfgnfgnf', '2022-12-27', '2022-12-28', 4, 1),
(40, 'QWERTY', '2022-12-28', '2022-12-14', 2, 1),
(41, 'ttttttttt', '2022-11-30', '2022-11-29', 3, 1),
(42, 'DDDDDDDD', '2022-12-13', '2022-12-05', 4, 1),
(43, 'uukyuk', '2022-11-29', '2022-11-28', 5, 1),
(44, 'QWERTY', '2022-11-30', '2022-12-06', 2, 1),
(45, 'foooooooooooooooo', '2022-12-07', '2022-12-20', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fac_tb`
--

CREATE TABLE `fac_tb` (
  `fid` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `des_id` int(11) NOT NULL,
  `depid` int(11) NOT NULL,
  `uname` varchar(35) NOT NULL,
  `passw` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fac_tb`
--

INSERT INTO `fac_tb` (`fid`, `fname`, `phone`, `des_id`, `depid`, `uname`, `passw`, `status`) VALUES
(2, 'Roshna C P', 963852743, 2, 1, 'roshna', 'rosh', 1),
(16, 'Reseena Mol N A', 123456789, 1, 1, 'abcd@gmail.com', 'abcd', 1),
(19, 'abcd', 123456789, 2, 2, 'efgh', 'efgh', 0),
(20, 'abcd', 123456789, 2, 2, 'efgh', 'efgh', 0),
(21, 'miyami', 9207282703, 1, 2, 'memo', '1230', 0),
(22, 'abcd', 9846291161, 2, 4, 'aaaa', 'Aa111111111', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leave_list`
--

CREATE TABLE `leave_list` (
  `id` int(30) NOT NULL,
  `fid` int(11) NOT NULL,
  `leave_type_id` int(30) NOT NULL,
  `date` date NOT NULL,
  `reason` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_approved` date DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_list`
--

INSERT INTO `leave_list` (`id`, `fid`, `leave_type_id`, `date`, `reason`, `status`, `date_approved`, `date_created`) VALUES
(14, 16, 1, '2022-11-28', 'efegeg', 1, '2022-12-07', '2022-12-07'),
(15, 16, 1, '2022-12-19', 'egsv', 2, NULL, '2022-12-07'),
(16, 16, 2, '2022-12-06', 'egr', 1, '2022-12-08', '2022-12-07'),
(17, 22, 2, '2022-12-12', 'wttw3etw3e', 2, NULL, '2022-12-07'),
(18, 21, 1, '2022-12-22', 'segwwesges', 2, NULL, '2022-12-07'),
(19, 16, 2, '2022-12-05', 'efwefwefge', 1, '2022-12-08', '2022-12-07'),
(20, 2, 1, '2022-12-20', 'wwfwf', 1, '2022-12-08', '2022-12-07'),
(21, 20, 2, '2022-11-29', 'errhg5e5heh', 2, NULL, '2022-12-07'),
(22, 2, 1, '2022-12-06', 'erg54h45eh4r', 2, NULL, '2022-12-07'),
(23, 2, 2, '2022-12-12', 'ewgewg', 2, NULL, '2022-12-07'),
(24, 2, 1, '2022-12-22', 'IM HUNGRY I NEED SNICKERS', 1, '2022-12-09', '2022-12-09'),
(25, 2, 1, '2022-12-29', 'rrerbrtbrbb rgbbrtbrttb\r\nbtrbrtbrt', 2, NULL, '2022-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE `leave_type` (
  `id` int(30) NOT NULL,
  `leave_type` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_type`
--

INSERT INTO `leave_type` (`id`, `leave_type`, `description`) VALUES
(1, 'Vacation Leave (VL)', 'Vacation Leave'),
(2, 'SL', 'Sick Leave'),
(3, 'EL', 'Emergency Leave');

-- --------------------------------------------------------

--
-- Table structure for table `sem_tb`
--

CREATE TABLE `sem_tb` (
  `sem_id` int(11) NOT NULL,
  `sem_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sem_tb`
--

INSERT INTO `sem_tb` (`sem_id`, `sem_name`) VALUES
(1, 'SEMESTER 1'),
(2, 'SEMESTER 2'),
(3, 'SEMESTER 3'),
(4, 'SEMESTER 4'),
(5, 'SEMESTER 5'),
(6, 'SEMESTER 6');

-- --------------------------------------------------------

--
-- Table structure for table `sub_tb`
--

CREATE TABLE `sub_tb` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `depid` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_tb`
--

INSERT INTO `sub_tb` (`sub_id`, `sub_name`, `depid`, `sem_id`) VALUES
(8, 'JAVA PROGRAMMING', 1, 4),
(9, 'STATISTICS', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `x_table_tb`
--

CREATE TABLE `x_table_tb` (
  `table_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `x_date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `x_table_tb`
--

INSERT INTO `x_table_tb` (`table_id`, `sub_id`, `exam_id`, `x_date`, `time`) VALUES
(13, 9, 13, '2022-12-04', '16:48:40'),
(15, 9, 13, '2022-11-06', '07:18:00'),
(16, 8, 16, '2022-11-11', '10:03:00'),
(17, 9, 17, '2022-11-16', '15:28:00'),
(18, 9, 19, '2022-11-25', '18:29:00'),
(19, 8, 20, '2022-11-10', '15:35:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alloc_tb`
--
ALTER TABLE `alloc_tb`
  ADD PRIMARY KEY (`al_id`),
  ADD KEY `class` (`class_id`),
  ADD KEY `table_id` (`table_id`),
  ADD KEY `fac` (`fid`);

--
-- Indexes for table `classroom_tb`
--
ALTER TABLE `classroom_tb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `dep_tb`
--
ALTER TABLE `dep_tb`
  ADD PRIMARY KEY (`depid`);

--
-- Indexes for table `desig_tb`
--
ALTER TABLE `desig_tb`
  ADD PRIMARY KEY (`des_id`);

--
-- Indexes for table `exam_tb`
--
ALTER TABLE `exam_tb`
  ADD PRIMARY KEY (`exam_id`),
  ADD KEY `semID` (`sem_id`);

--
-- Indexes for table `fac_tb`
--
ALTER TABLE `fac_tb`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `des_id` (`des_id`),
  ADD KEY `dep` (`depid`);

--
-- Indexes for table `leave_list`
--
ALTER TABLE `leave_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fac_id` (`fid`),
  ADD KEY `leave_type` (`leave_type_id`);

--
-- Indexes for table `leave_type`
--
ALTER TABLE `leave_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem_tb`
--
ALTER TABLE `sem_tb`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `sub_tb`
--
ALTER TABLE `sub_tb`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `depid` (`depid`),
  ADD KEY `sem_id` (`sem_id`);

--
-- Indexes for table `x_table_tb`
--
ALTER TABLE `x_table_tb`
  ADD PRIMARY KEY (`table_id`),
  ADD KEY `sub` (`sub_id`) USING BTREE,
  ADD KEY `Foreign key` (`exam_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alloc_tb`
--
ALTER TABLE `alloc_tb`
  MODIFY `al_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `classroom_tb`
--
ALTER TABLE `classroom_tb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dep_tb`
--
ALTER TABLE `dep_tb`
  MODIFY `depid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exam_tb`
--
ALTER TABLE `exam_tb`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `fac_tb`
--
ALTER TABLE `fac_tb`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `leave_list`
--
ALTER TABLE `leave_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `leave_type`
--
ALTER TABLE `leave_type`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sem_tb`
--
ALTER TABLE `sem_tb`
  MODIFY `sem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_tb`
--
ALTER TABLE `sub_tb`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `x_table_tb`
--
ALTER TABLE `x_table_tb`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alloc_tb`
--
ALTER TABLE `alloc_tb`
  ADD CONSTRAINT `class` FOREIGN KEY (`class_id`) REFERENCES `classroom_tb` (`class_id`),
  ADD CONSTRAINT `fac` FOREIGN KEY (`fid`) REFERENCES `fac_tb` (`fid`),
  ADD CONSTRAINT `table_id` FOREIGN KEY (`table_id`) REFERENCES `x_table_tb` (`table_id`);

--
-- Constraints for table `exam_tb`
--
ALTER TABLE `exam_tb`
  ADD CONSTRAINT `semID` FOREIGN KEY (`sem_id`) REFERENCES `sem_tb` (`sem_id`);

--
-- Constraints for table `fac_tb`
--
ALTER TABLE `fac_tb`
  ADD CONSTRAINT `dep` FOREIGN KEY (`depid`) REFERENCES `dep_tb` (`depid`),
  ADD CONSTRAINT `fac_tb_ibfk_1` FOREIGN KEY (`des_id`) REFERENCES `desig_tb` (`des_id`);

--
-- Constraints for table `leave_list`
--
ALTER TABLE `leave_list`
  ADD CONSTRAINT `fac_id` FOREIGN KEY (`fid`) REFERENCES `fac_tb` (`fid`),
  ADD CONSTRAINT `leave_type` FOREIGN KEY (`leave_type_id`) REFERENCES `leave_type` (`id`);

--
-- Constraints for table `sub_tb`
--
ALTER TABLE `sub_tb`
  ADD CONSTRAINT `depid` FOREIGN KEY (`depid`) REFERENCES `dep_tb` (`depid`),
  ADD CONSTRAINT `sem_id` FOREIGN KEY (`sem_id`) REFERENCES `sem_tb` (`sem_id`);

--
-- Constraints for table `x_table_tb`
--
ALTER TABLE `x_table_tb`
  ADD CONSTRAINT `Foreign key` FOREIGN KEY (`exam_id`) REFERENCES `exam_tb` (`exam_id`),
  ADD CONSTRAINT `sub` FOREIGN KEY (`sub_id`) REFERENCES `sub_tb` (`sub_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
