-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2024 at 02:50 AM
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
-- Database: `grc_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `admin_email`, `admin_pass`, `admin_created`) VALUES
(1, 'admin@gmail.com', '123', '2024-07-31 01:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `prof_id` int(11) NOT NULL,
  `prof_name` varchar(255) NOT NULL,
  `prof_number` varchar(255) NOT NULL,
  `prof_email` varchar(255) NOT NULL,
  `prof_pass` varchar(255) NOT NULL,
  `prof_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`prof_id`, `prof_name`, `prof_number`, `prof_email`, `prof_pass`, `prof_created`) VALUES
(3, 'Ramon Rodriquez', 'GRC-07-00259', 'ramon091717171@gmail.com', '$2y$10$nrARdmHtyw0XLS9zRXyWZ.VlFVafW5Xh4nctmXO8vwkdkHIhpEwr6', '2024-08-03 01:34:28');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sec_id` int(11) NOT NULL,
  `sec_name` varchar(255) NOT NULL,
  `sec_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sec_id`, `sec_name`, `sec_created`) VALUES
(1, 'IT-101', '2024-08-05 00:42:56'),
(3, 'IT-102', '2024-08-05 00:46:54'),
(4, 'IT-103', '2024-08-05 00:46:59'),
(5, 'IT-104', '2024-08-05 00:47:04'),
(6, 'IT-105', '2024-08-05 00:47:08'),
(7, 'IT-106', '2024-08-05 00:47:13'),
(8, 'IT-107', '2024-08-05 00:47:27'),
(9, 'IT-108', '2024-08-05 00:47:34'),
(10, 'IT-109', '2024-08-05 00:47:39'),
(11, 'IT-201', '2024-08-05 00:47:45'),
(12, 'IT-202', '2024-08-05 00:47:49'),
(13, 'IT-203', '2024-08-05 00:47:54'),
(14, 'IT-204', '2024-08-05 00:47:58'),
(15, 'IT-205', '2024-08-05 00:48:02'),
(16, 'IT-206', '2024-08-05 00:48:07'),
(17, 'IT-207', '2024-08-05 00:48:15'),
(18, 'IT-208', '2024-08-05 00:48:20'),
(19, 'IT-301', '2024-08-05 00:48:33'),
(20, 'IT-302', '2024-08-05 00:48:39'),
(21, 'IT-303', '2024-08-05 00:48:46'),
(22, 'IT-401', '2024-08-05 00:48:52'),
(23, 'IT-402', '2024-08-05 00:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` int(11) NOT NULL,
  `stud_name` varchar(255) NOT NULL,
  `stud_number` varchar(255) NOT NULL,
  `stud_email` varchar(255) NOT NULL,
  `stud_pass` varchar(255) NOT NULL,
  `stud_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `stud_name`, `stud_number`, `stud_email`, `stud_pass`, `stud_created`) VALUES
(4, 'Cedrick Jasper R. Sarabia', '2021-07-00259', 'cedrickjaspersarabia@gmail.com', '$2y$10$tCzXWv1Lc70p1OdWGcOjh.omYtOo40dGChnsH70/.j7AzsykDQfY6', '2024-08-01 01:00:54'),
(5, 'Anya Forger', '2024-07-00259', 'aniamaesantos0@gmail.com', '$2y$10$2rxO6xsRCYTfU0oNN159Eu6cCosPrcuJoXOZ/vuXU6vyaJke364aS', '2024-08-04 01:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`, `sub_created`) VALUES
(13, 'Introduction to Computing', '2024-08-05 00:32:00'),
(14, 'Introduction to Human Computer Interaction', '2024-08-05 00:32:13'),
(15, 'Computer Programming 1', '2024-08-05 00:32:21'),
(16, 'Computer Hardware and Troubleshooting', '2024-08-05 00:32:29'),
(17, 'Fundamentals of Programming', '2024-08-05 00:32:36'),
(18, 'Office Productivity Tools', '2024-08-05 00:32:42'),
(19, 'Graphics Design', '2024-08-05 00:32:48'),
(20, 'Networking 1', '2024-08-05 00:32:58'),
(21, 'Platform Technologies', '2024-08-05 00:33:04'),
(22, 'Integrative Programming Technologies 1', '2024-08-05 00:33:18'),
(23, 'Animation and Video Editing', '2024-08-05 00:33:25'),
(24, 'Computer Programming 2', '2024-08-05 00:33:31'),
(25, 'Data Structures and Algorithm', '2024-08-05 00:33:37'),
(26, 'Object Oriented Programming', '2024-08-05 00:33:44'),
(27, 'Database Management System', '2024-08-05 00:33:51'),
(28, 'System Integration and Architecture 1', '2024-08-05 00:33:58'),
(29, 'Application Devt and Emerging Technologies', '2024-08-05 00:34:05'),
(30, 'System Integration and Architecture 2', '2024-08-05 00:34:13'),
(31, 'Basic Mobile Computing', '2024-08-05 00:34:19'),
(32, 'Networking 2', '2024-08-05 00:34:24'),
(33, 'Discrete Mathematics', '2024-08-05 00:34:33'),
(34, 'Information Management', '2024-08-05 00:34:54'),
(35, 'Integrated Programming and Technologies 2', '2024-08-05 00:35:02'),
(36, 'Information Assurance and Security 1', '2024-08-05 00:35:08'),
(37, 'Web System and Technologies', '2024-08-05 00:35:14'),
(38, 'Computer Architecture and Organization', '2024-08-05 00:35:20'),
(39, 'Advanced Mobile Computing', '2024-08-05 00:35:28'),
(40, 'Capstone Project and Research 1', '2024-08-05 00:35:35'),
(41, 'Quantitative Methods', '2024-08-05 00:35:48'),
(42, 'Information Assurance and Security 2', '2024-08-05 00:35:56'),
(43, 'Social and Professional Issues', '2024-08-05 00:36:03'),
(44, 'Business Analytics', '2024-08-05 00:36:08'),
(45, 'Capstone Project and Research 2', '2024-08-05 00:36:14'),
(46, 'System Admin and Maintenance', '2024-08-05 00:36:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
