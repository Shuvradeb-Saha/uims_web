-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 06:23 AM
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
-- Database: `uims`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `cat_name` varchar(60) NOT NULL,
  `m_email` varchar(100) DEFAULT NULL,
  `department` varchar(50) NOT NULL,
  `university` varchar(50) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `cat_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `cat_name`, `m_email`, `department`, `university`, `add_date`, `status`, `cat_details`) VALUES
(31, 'Computer Accessories', 'arafat.rahman@iit.du.ac.bd', 'IIT', 'Dhaka University', '2018-05-30 05:29:51', 1, 'Computer related equipments'),
(32, 'Teaching Materials', 'arafat.rahman@iit.du.ac.bd', 'IIT', 'Dhaka University', '2018-05-30 05:32:10', 1, 'Some products that are necesary for the teachers for teaching.'),
(33, 'Electronics', 'arafat.rahman@iit.du.ac.bd', 'IIT', 'Dhaka University', '2018-05-30 05:34:25', 0, 'Electronics materials for daily use. Like fan, light etc ');

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
-- Table structure for table `forget_password`
--

CREATE TABLE `forget_password` (
  `f_id` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `code` int(11) NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forget_password`
--

INSERT INTO `forget_password` (`f_id`, `user_email`, `code`, `send_date`, `status`) VALUES
(23, 'nipa.suravi@gmail.com', 762079, '2018-05-30 05:00:40', 1),
(24, 'nipa.suravi@gmail.com', 834256, '2018-05-30 05:37:43', 0),
(33, 'sahashaishab@gmail.com', 388240, '2018-05-31 02:58:16', 1),
(34, 'sahashaishab@gmail.com', 250517, '2018-05-31 02:58:53', 1),
(35, 'sahashaishab@gmail.com', 374963, '2018-05-31 02:59:02', 1);

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
(31, 'Keyboard', 31, '20180530', 14, 'arafat.rahman@iit.du.ac.bd', '2018-05-30 05:35:18', NULL, 1),
(32, 'Mouse', 31, '20180530', 27, 'arafat.rahman@iit.du.ac.bd', '2018-05-30 05:36:35', NULL, 1),
(33, 'Monitor', 31, '20180530', 8, 'arafat.rahman@iit.du.ac.bd', '2018-05-30 05:37:19', NULL, 1),
(34, 'Marker', 32, '20180525', 36, 'arafat.rahman@iit.du.ac.bd', '2018-05-30 05:37:45', NULL, 1),
(35, 'Whiteboard', 32, '20180525', 5, 'arafat.rahman@iit.du.ac.bd', '2018-05-30 05:38:45', NULL, 1),
(36, 'Duster', 32, '20180525', 15, 'arafat.rahman@iit.du.ac.bd', '2018-05-30 05:39:23', NULL, 1),
(37, 'Fan', 33, '20180530', 10, 'arafat.rahman@iit.du.ac.bd', '2018-05-30 05:39:43', NULL, 0),
(38, 'Table Lamp', 33, '20180525', 10, 'arafat.rahman@iit.du.ac.bd', '2018-05-30 05:40:00', NULL, 0),
(39, 'Light', 33, '20180525', 15, 'arafat.rahman@iit.du.ac.bd', '2018-05-30 05:41:01', NULL, 0),
(40, 'Ram', 31, '20180525', 2, 'arafat.rahman@iit.du.ac.bd', '2018-05-30 10:10:12', NULL, 1);

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
  `cancel` tinyint(4) NOT NULL DEFAULT '0',
  `forward` tinyint(4) NOT NULL DEFAULT '0',
  `delivered` tinyint(4) NOT NULL DEFAULT '0',
  `quantity` int(11) DEFAULT NULL,
  `purpose` text NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `forward_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `approve_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delivery_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requisition`
--

INSERT INTO `requisition` (`r_id`, `p_id`, `u_email`, `m_email`, `c_email`, `status`, `cancel`, `forward`, `delivered`, `quantity`, `purpose`, `send_date`, `forward_date`, `approve_date`, `delivery_date`) VALUES
(17, 31, 'saeed.siddik@iit.du.ac.bd', 'arafat.rahman@iit.du.ac.bd', 'nipa.suravi@gmail.com', 1, 0, 1, 1, 1, 'For office work.', '2018-05-30 05:57:24', '2018-05-30 05:59:21', '2018-05-30 06:07:42', '2018-05-30 06:09:06'),
(18, 34, 'saeed.siddik@iit.du.ac.bd', 'arafat.rahman@iit.du.ac.bd', 'nipa.suravi@gmail.com', 1, 0, 1, 1, 2, 'Need marker for teaching', '2018-05-30 05:57:50', '2018-05-30 05:59:22', '2018-05-30 06:07:44', '2018-05-30 06:09:08'),
(19, 31, 'saeed.siddik@iit.du.ac.bd', '', '', 0, 1, 0, 0, 1, 'Currently using keyboard is not working', '2018-05-30 06:12:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(20, 34, 'saeed.siddik@iit.du.ac.bd', 'arafat.rahman@iit.du.ac.bd', 'nipa.suravi@gmail.com', 1, 0, 1, 0, 2, 'For writing on the white board', '2018-05-30 06:18:03', '2018-05-30 06:34:19', '2018-05-30 06:34:45', NULL),
(21, 37, 'saeed.siddik@iit.du.ac.bd', 'arafat.rahman@iit.du.ac.bd', '', 0, 0, 1, 0, 1, 'Too much hot', '2018-05-30 06:33:53', '2018-05-30 06:35:08', '0000-00-00 00:00:00', NULL),
(22, 31, 'saeed.siddik@iit.du.ac.bd', 'arafat.rahman@iit.du.ac.bd', 'nipa.suravi@gmail.com', 1, 0, 1, 1, 4, 'for pc', '2018-05-30 08:35:35', '2018-05-31 04:07:24', '2018-05-31 04:08:34', '2018-05-31 04:08:52'),
(23, 32, 'saeed.siddik@iit.du.ac.bd', 'arafat.rahman@iit.du.ac.bd', 'nipa.suravi@gmail.com', 1, 0, 1, 1, 1, 'rr', '2018-05-30 09:17:10', '2018-05-31 05:30:19', '2018-05-31 05:33:53', '2018-05-31 05:34:27'),
(28, 33, 'saeed.siddik@iit.du.ac.bd', 'arafat.rahman@iit.du.ac.bd', 'nipa.suravi@gmail.com', 1, 0, 1, 1, 1, 'pc ', '2018-05-31 05:37:12', '2018-05-31 05:42:52', '2018-09-15 07:44:25', '2018-09-15 07:44:57'),
(29, 32, 'saeed.siddik@iit.du.ac.bd', 'arafat.rahman@iit.du.ac.bd', 'nipa.suravi@gmail.com', 1, 0, 1, 1, 1, 'office', '2018-09-14 07:25:28', '2018-09-15 05:55:23', '2018-09-15 05:56:59', '2018-09-15 07:20:23'),
(30, 34, 'saeed.siddik@iit.du.ac.bd', '', '', 0, 0, 0, 0, 3, 'class purpose', '2018-09-15 05:59:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(31, 40, 'saeed.siddik@iit.du.ac.bd', 'arafat.rahman@iit.du.ac.bd', '', 0, 0, 1, 0, 1, 'tt', '2018-09-15 06:39:12', '2018-09-15 06:39:35', '0000-00-00 00:00:00', NULL),
(32, 31, 'saeed.siddik@iit.du.ac.bd', 'arafat.rahman@iit.du.ac.bd', 'nipa.suravi@gmail.com', 1, 0, 1, 1, 1, 'pc', '2018-09-15 07:03:49', '2018-09-15 07:05:22', '2018-09-15 07:06:00', '2018-09-15 07:07:34'),
(33, 32, 'saeed.siddik@iit.du.ac.bd', 'arafat.rahman@iit.du.ac.bd', 'nipa.suravi@gmail.com', 1, 0, 1, 1, 1, 'gg', '2018-09-15 07:19:10', '2018-09-15 07:19:26', '2018-09-15 07:20:00', '2018-09-15 07:29:55'),
(34, 40, 'saeed.siddik@iit.du.ac.bd', 'arafat.rahman@iit.du.ac.bd', 'nipa.suravi@gmail.com', 1, 0, 1, 0, 1, 'abc', '2018-09-15 07:28:33', '2018-09-15 07:28:59', '2018-09-15 07:29:29', NULL),
(35, 35, 'saeed.siddik@iit.du.ac.bd', 'arafat.rahman@iit.du.ac.bd', '', 0, 0, 1, 0, 1, 'sd', '2018-09-15 07:33:20', '2018-09-15 07:33:33', '0000-00-00 00:00:00', NULL),
(36, 33, 'saeed.siddik@iit.du.ac.bd', 'arafat.rahman@iit.du.ac.bd', '', 0, 0, 1, 0, 1, 'pc', '2018-09-15 07:43:37', '2018-09-15 07:43:55', '0000-00-00 00:00:00', NULL),
(37, 33, 'saeed.siddik@iit.du.ac.bd', 'arafat.rahman@iit.du.ac.bd', 'nipa.suravi@gmail.com', 1, 0, 1, 1, 1, 'for pc', '2018-09-15 08:43:44', '2018-09-15 08:44:45', '2018-09-15 08:45:22', '2018-09-15 08:45:42'),
(38, 34, 'saeed.siddik@iit.du.ac.bd', 'arafat.rahman@iit.du.ac.bd', 'nipa.suravi@gmail.com', 1, 0, 1, 1, 2, 'class', '2018-09-15 09:05:04', '2018-09-15 09:05:47', '2018-09-15 09:07:15', '2018-09-15 09:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `university` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `removed` tinyint(1) NOT NULL DEFAULT '0',
  `gender` varchar(10) NOT NULL,
  `reg_send_date` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2),
  `reg_auth_date` timestamp(2) NULL DEFAULT NULL,
  `reset_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `name`, `password`, `designation`, `university`, `department`, `status`, `removed`, `gender`, `reg_send_date`, `reg_auth_date`, `reset_code`) VALUES
('arafat.rahman@iit.du.ac.bd', 'Md. Arafat Rahman', '35da272a34fb216670e69fc079888697', 'officer', 'Dhaka University', 'IIT', 1, 0, 'male', '2018-05-30 05:26:36.11', NULL, NULL),
('bsse0806@iit.du.ac.bd', 'Toukir Ahammed', '35da272a34fb216670e69fc079888697', 'faculty', 'Dhaka University', 'IIT', 0, 0, 'male', '2018-09-15 04:42:36.91', NULL, NULL),
('bsse0815@iit.du.ac.bd', 'Abcd Xyz', '35da272a34fb216670e69fc079888697', 'staff', 'Dhaka University', 'IIT', 1, 0, 'male', '2018-05-30 05:47:33.40', NULL, NULL),
('nipa.suravi@gmail.com', 'Director IIT', '35da272a34fb216670e69fc079888697', 'Director', 'Dhaka University', 'IIT', 1, 0, 'male', '2018-05-30 04:54:15.51', NULL, 834256),
('saeed.siddik@iit.du.ac.bd', 'Md. Saeed Siddik', '35da272a34fb216670e69fc079888697', 'faculty', 'Dhaka University', 'IIT', 1, 0, 'male', '2018-05-30 05:42:52.43', NULL, NULL),
('sahashaishab@gmail.com', 'Shaishab Saha', '35da272a34fb216670e69fc079888697', 'admin', '', '', 1, 0, '', '0000-00-00 00:00:00.00', NULL, 374963),
('sahashuvradeb@gmail.com', 'ABC', '35da272a34fb216670e69fc079888697', 'Director', 'Jagannath University', 'CSE', 0, 1, 'male', '2018-05-31 05:19:53.57', NULL, NULL),
('suravi.nipa@gmail.com', 'Suravi Akhter', 'admin', 'admin', '', '', 1, 0, '', '0000-00-00 00:00:00.00', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `forget_password`
--
ALTER TABLE `forget_password`
  ADD PRIMARY KEY (`f_id`);

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
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `forget_password`
--
ALTER TABLE `forget_password`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `requisition`
--
ALTER TABLE `requisition`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
