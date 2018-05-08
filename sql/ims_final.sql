-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 10:40 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `m_email` varchar(100) DEFAULT NULL,
  `department` varchar(50) NOT NULL,
  `university` varchar(50) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `name`, `m_email`, `department`, `university`, `add_date`, `status`) VALUES
(17, 'Electronics', 'tanmoy@gmail.com', 'ACCE', 'Jagannath University', '2018-04-13 16:15:18', 1),
(18, 'Computer Accesories', 'tanmoy@gmail.com', 'ACCE', 'Jagannath University', '2018-04-13 16:15:37', 1),
(19, 'Teaching Materials', 'tanmoy@gmail.com', 'ACCE', 'Jagannath University', '2018-04-13 16:15:43', 1),
(20, 'Computer Parts', 'tanmoy@gmail.com', 'ACCE', 'Jagannath University', '2018-04-13 16:16:06', 1),
(21, 'Books', 'tanmoy@gmail.com', 'ACCE', 'Jagannath University', '2018-04-13 16:16:30', 1),
(22, 'Electronics', 'arafat@gmail.com', 'IIT', 'Dhaka University', '2018-04-13 16:17:00', 1),
(23, 'Computer Accesories', 'arafat@gmail.com', 'IIT', 'Dhaka University', '2018-04-13 16:17:05', 1),
(24, 'Books', 'arafat@gmail.com', 'IIT', 'Dhaka University', '2018-04-13 16:17:37', 1),
(25, 'Exam Materials', 'arafat@gmail.com', 'IIT', 'Dhaka University', '2018-04-13 16:17:46', 1),
(26, 'Food', 'arafat@gmail.com', 'IIT', 'Dhaka University', '2018-04-13 16:57:10', 1),
(27, 'Furniture', 'arafat@gmail.com', 'IIT', 'Dhaka University', '2018-04-14 03:06:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chairman`
--

CREATE TABLE `chairman` (
  `c_email` varchar(50) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `m_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `general_user`
--

CREATE TABLE `general_user` (
  `gen_email` varchar(50) NOT NULL,
  `m_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `m_email` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`m_email`, `c_email`) VALUES
('arafat@gmail.com', 'habib@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `pr_name` varchar(50) NOT NULL,
  `c_id` int(11) NOT NULL,
  `lot_number` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `m_email` varchar(50) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `pr_name`, `c_id`, `lot_number`, `quantity`, `m_email`, `add_date`, `last_update`, `status`) VALUES
(15, 'Fan', 22, '20185675', 24, 'arafat@gmail.com', '2018-04-14 08:49:14', '2018-04-15 06:02:58', 1),
(16, 'Tubelight', 22, '20185675', 40, 'arafat@gmail.com', '2018-04-14 14:35:10', '2018-04-15 05:59:50', 1),
(17, 'Table Lamp', 22, '20185675', 25, 'arafat@gmail.com', '2018-04-14 14:35:41', '2018-04-15 05:59:50', 1),
(21, 'Mouse', 23, '20185675', 20, 'arafat@gmail.com', '2018-04-14 16:11:49', '2018-04-15 05:59:50', 1),
(22, 'Keyboard', 23, '20185675', 30, 'arafat@gmail.com', '2018-04-14 16:12:06', '2018-04-15 05:59:50', 1),
(23, 'Fan', 17, '20185675', 12, 'tanmoy@gmail.com', '2018-04-15 05:44:49', '2018-04-15 05:59:50', 1),
(28, 'Tea Table', 27, 'L123', 5, 'arafat@gmail.com', '2018-04-21 07:25:17', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `requisition`
--

CREATE TABLE `requisition` (
  `r_id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `u_email` varchar(100) DEFAULT NULL,
  `m_email` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `forward` tinyint(4) NOT NULL DEFAULT '0',
  `quantity` int(11) DEFAULT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `forward_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `approve_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requisition`
--

INSERT INTO `requisition` (`r_id`, `p_id`, `u_email`, `m_email`, `c_email`, `status`, `forward`, `quantity`, `send_date`, `forward_date`, `approve_date`) VALUES
(1, 15, 'habib@gmail.com', '', '', 0, 0, 4, '2018-04-21 05:43:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 21, 'habib@gmail.com', '', '', 0, 0, 4, '2018-04-21 05:44:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 21, 'habib@gmail.com', '', '', 0, 0, 4, '2018-04-21 05:45:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 23, 'jubaer@gmail.com', '', '', 0, 0, 5, '2018-04-21 06:47:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `university` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `removed` tinyint(1) NOT NULL DEFAULT '0',
  `gender` varchar(10) NOT NULL,
  `reg_send_date` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2),
  `reg_auth_date` timestamp(2) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `name`, `password`, `designation`, `university`, `department`, `status`, `removed`, `gender`, `reg_send_date`, `reg_auth_date`) VALUES
('amit@gmail.com', 'Amit Sheal Ami', 'iit123', 'faculty', 'Dhaka University', 'IIT', 1, 0, 'male', '2018-04-10 18:31:54.48', NULL),
('arafat@gmail.com', 'Arafat Hossain', 'iit123', 'officer', 'Dhaka University', 'IIT', 1, 0, 'male', '2018-04-08 01:09:05.43', NULL),
('habib@gmail.com', 'Habib Khan', 'iit123', 'staff', 'Dhaka University', 'IIT', 1, 0, 'male', '2018-04-08 01:07:44.86', NULL),
('hasan@gmail.com', 'Hasan Khan', 'iit123', 'Director', 'Islami University', 'CSE', 1, 0, 'male', '2018-04-16 11:17:52.14', NULL),
('jakir@gmail.com', 'Jakir Hussain', 'iit123', 'staff', 'Dhaka University', 'IIT', 1, 0, 'male', '2018-04-21 03:49:23.19', NULL),
('jubaer@gmail.com', 'Jubaer Rahman', 'iit123', 'faculty', 'Jagannath University', 'ACCE', 1, 0, 'male', '2018-04-21 06:46:57.66', NULL),
('mostafijur@gmail.com', 'Mostafizur Rahman', 'iit123', 'Director', 'Dhaka University', 'CSE', 0, 0, 'male', '2018-04-16 04:33:33.78', NULL),
('obaidur@gmail.com', 'Obaidur Rahman', 'iit123', 'faculty', 'Dhaka University', 'IIT', 1, 0, 'male', '2018-04-21 03:51:19.94', NULL),
('sahashaishab@gmail.com', 'Shaishab Saha', 'admin', 'admin', '', '', 1, 0, 'male', '2018-04-06 12:37:01.68', NULL),
('shampa@gmail.com', 'Shampa Kar', 'iit123', 'staff', 'Dhaka University', 'IIT', 0, 0, 'female', '2018-04-21 03:48:22.63', NULL),
('shanto@gmail.com', 'Shanto Biswas', 'iit123', 'Director', 'Jagannath University', 'ACCE', 1, 0, 'male', '2018-04-10 18:07:02.50', NULL),
('shariful@gmail.com', 'Shariful Islam', 'iit123', 'Director', 'Dhaka University', 'IIT', 1, 0, 'male', '2018-04-07 03:18:03.41', NULL),
('suravi.nipa@gmail.com', 'Suravi', 'admin', 'admin', '', '', 1, 0, '', '2018-04-06 12:37:01.68', NULL),
('tanmoy@gmail.com', 'Tanmoy Saha', 'iit123', 'officer', 'Jagannath University', 'ACCE', 1, 0, 'male', '2018-04-10 18:05:32.25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `general_user`
--
ALTER TABLE `general_user`
  ADD PRIMARY KEY (`gen_email`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`m_email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `requisition`
--
ALTER TABLE `requisition`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `requisition`
--
ALTER TABLE `requisition`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
