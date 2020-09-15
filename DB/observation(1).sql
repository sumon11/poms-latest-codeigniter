-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 11:57 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `observation`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `created_by`, `created_at`, `updated_by`, `updated_at`, `is_active`) VALUES
(1, 'Computer Science & Engineering', 0, '0000-00-00 00:00:00', 0, '2020-07-24 17:15:31', 1),
(2, 'Civil Engineering', 0, '0000-00-00 00:00:00', 0, '2020-07-24 17:15:45', 1),
(3, 'Electrical & Electronics Engineering', 0, '0000-00-00 00:00:00', 0, '2020-07-24 17:16:10', 1),
(4, 'Non - Tech', 0, '0000-00-00 00:00:00', 0, '2020-07-24 17:16:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_by` int(11) NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `title`, `is_active`, `created_by`, `created_at`, `modified_by`, `modified_at`) VALUES
(1, 'Professor', 1, 0, '2020-07-24 17:14:00', 0, '2020-07-24 17:14:00'),
(2, 'Associate Professor', 1, 0, '2020-07-24 17:14:30', 0, '2020-07-24 17:14:30'),
(3, 'Assistant Professor', 1, 0, '2020-07-24 17:14:45', 0, '2020-07-24 17:14:45'),
(4, 'Lecturer', 1, 0, '2020-07-24 17:15:04', 0, '2020-07-24 17:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `notice_category_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `hints` varchar(250) NOT NULL,
  `notice_date` date NOT NULL,
  `comments` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `upadated_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notice_categories`
--

CREATE TABLE `notice_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` int(11) NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice_categories`
--

INSERT INTO `notice_categories` (`id`, `title`, `is_active`, `created_by`, `created_at`, `modified_by`, `modified_at`) VALUES
(1, 'College Committe', 1, 0, '2020-07-24 21:02:43', 0, '2020-07-24 21:02:43'),
(2, 'Training', 1, 0, '2020-07-24 21:03:01', 0, '2020-07-24 21:03:01'),
(3, 'Engineering College Teachers Association', 1, 0, '2020-07-24 21:03:26', 0, '2020-07-24 21:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `photograph` varchar(200) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `designation_id`, `department_id`, `email`, `contact_no`, `address`, `photograph`, `is_active`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(6, 'Md. Suman', 4, 1, 'rezasumon71@yahoo.com', '22', 'ffff', 'Md. Suman-firefox_8cOjH4WI2F3.png', 1, NULL, '2020-07-24 19:22:01', NULL, '2020-07-24 19:22:01'),
(7, 'ddd', 1, 1, 'rezasumon71@yahoo.com', '22', 'fff', 'ddd-firefox_8cOjH4WI2F4.png', 1, NULL, '2020-07-24 19:24:58', NULL, '2020-07-24 19:24:58'),
(8, 'Md. Suman', 1, 1, 'rezasumon71@yahoo.com', '22', 'fff', 'Md. Suman-firefox_8cOjH4WI2F5.png', 1, NULL, '2020-07-24 19:34:49', NULL, '2020-07-24 19:34:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_categories`
--
ALTER TABLE `notice_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice_categories`
--
ALTER TABLE `notice_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
