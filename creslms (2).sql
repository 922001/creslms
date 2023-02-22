-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 07:09 AM
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
-- Database: `creslms`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcontent`
--

CREATE TABLE `addcontent` (
  `sno` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `subjectname` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `modules` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `flipbook` varchar(100) NOT NULL,
  `assessment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcontent`
--

INSERT INTO `addcontent` (`sno`, `department`, `subjectname`, `semester`, `modules`, `session`, `video`, `flipbook`, `assessment`) VALUES
(1, 'MBA', 'ds', '1', '', '1', 'aa', 'aa', 'aa'),
(2, 'MBA', 'java', '2', '', '1', 'xxx', 'xxx', 'xxx'),
(3, 'MCA', 'c', '1', '1', '1', 'xxx', 'xxx', 'xxx'),
(4, 'MCA', 'c++', '2', '2', '2', 'xx', 'xx', 'xx'),
(5, 'MCA', 'c++', '2', '2', '2', 'xx', 'xx', 'xx'),
(6, 'MCA', 'ds', '3', '1', '1', 'xxx', 'xxxx', 'xxx'),
(7, 'MBA', 'hr', '1', '1', '1', 'xxx', 'xxx', 'xxx'),
(8, 'MBA', 'hr', '1', '1', '1', 'xxx', 'xxx', 'xxx');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `registernumber` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `registernumber`, `email`, `password`, `image`) VALUES
(1, 'ad1', 9876, 'ad1@gmail.com', '1234', '63edcae5843bbadmin3.png'),
(2, 'ad3', 99, 'ad3@gmail.com', 'ad3', '63ee08a121c59admin3.png');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `registernumber` int(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `phonenumber` int(20) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `name`, `registernumber`, `department`, `email`, `password`, `status`, `phonenumber`, `year`) VALUES
(1, 'srini', 4321, 'MCA', 'nivi@gmail.com', '1234', '', 0, ''),
(2, 'faculty1', 0, 'MBA', 'fac@gmail.com', '', '', 2147483647, '2022'),
(3, 'faculty1', 0, 'MBA', 'fac@gmail.com', '', '', 2147483647, '2022'),
(4, 'priya2', 1011, 'MBA', 'priya2@gmail.com', '', '', 2147483647, '2022'),
(6, 'faculty9', 909, 'MBA', 'f9@gmail.com', 'faculty', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `mca`
--

CREATE TABLE `mca` (
  `user` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mca`
--

INSERT INTO `mca` (`user`, `department`, `semester`, `subject`) VALUES
('user', 'MBA', '1', 'ds');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `semester` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(15) NOT NULL,
  `name` varchar(225) NOT NULL,
  `registernumber` int(15) NOT NULL,
  `department` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `year` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `registernumber`, `department`, `email`, `password`, `status`, `phonenumber`, `year`) VALUES
(1, 'snekha', 103, 'MCA', 'snekha@gmail.com', '123456789', '', 0, ''),
(2, 'nandhini', 81, 'MBA', 'nandhini@gmail.com', '123456789', '', 0, ''),
(4, 'student1', 10101, 'MBA', 'student1@gmail.com', '123456789', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course_code` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `semester` int(10) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `department` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `video_content` varchar(255) DEFAULT NULL,
  `flip_book` varchar(255) DEFAULT NULL,
  `assessment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `course_code`, `description`, `semester`, `created_date`, `department`, `session`, `video_content`, `flip_book`, `assessment`) VALUES
(35, 'Maths', 'MAD 6188', NULL, 1, '2023-02-20 06:54:27', 'MCA', '1', 'xxx', 'xxx', 'xxx'),
(36, 'Coos', 'CAD6121', NULL, 1, '2023-02-20 06:55:29', 'MCA', '1', 'xxx', 'xxx', 'xxxx'),
(37, 'DBMS', 'CAD 6122', NULL, 1, '2023-02-20 06:56:58', 'MCA', '1', 'xxx', 'xxx', 'xxx'),
(38, 'cN', 'CAD 6123', NULL, 1, '2023-02-20 06:58:37', 'MCA', '1', 'xxx', 'xxx', 'xxx'),
(39, 'Data Structure', 'CAD 6124', NULL, 1, '2023-02-20 06:59:47', 'MCA', '1', 'xxx', 'xxx', 'xxx'),
(40, 'C prog', 'CAD 6127', NULL, 1, '2023-02-20 07:01:17', 'MCA', '1', 'xxx', 'xxx', 'xxx'),
(42, 'java', 'C1111', NULL, 1, '2023-02-20 12:02:50', 'MCA', '1', 'xxx', 'xx', 'xxx');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `user_id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`user_id`, `username`, `password`) VALUES
(1, 'admin1', '1234'),
(2, 'admin2', '5678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcontent`
--
ALTER TABLE `addcontent`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcontent`
--
ALTER TABLE `addcontent`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
