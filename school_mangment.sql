-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 10:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_mangment`
--

-- --------------------------------------------------------

--
-- Table structure for table `blacklist`
--

CREATE TABLE `blacklist` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_1`
--

CREATE TABLE `class_1` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course_1` int(11) NOT NULL,
  `course_2` int(11) NOT NULL,
  `course_3` int(11) NOT NULL,
  `course_4` int(11) NOT NULL,
  `course_5` int(11) NOT NULL,
  `course_6` int(11) NOT NULL,
  `course_7` int(11) NOT NULL,
  `course_8` int(11) NOT NULL,
  `course_9` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_2`
--

CREATE TABLE `class_2` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course_1` int(11) NOT NULL,
  `course_2` int(11) NOT NULL,
  `course_3` int(11) NOT NULL,
  `course_4` int(11) NOT NULL,
  `course_5` int(11) NOT NULL,
  `course_6` int(11) NOT NULL,
  `course_7` int(11) NOT NULL,
  `course_8` int(11) NOT NULL,
  `course_9` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_3`
--

CREATE TABLE `class_3` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course_1` int(11) NOT NULL,
  `course_2` int(11) NOT NULL,
  `course_3` int(11) NOT NULL,
  `course_4` int(11) NOT NULL,
  `course_5` int(11) NOT NULL,
  `course_6` int(11) NOT NULL,
  `course_7` int(11) NOT NULL,
  `course_8` int(11) NOT NULL,
  `course_9` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_4`
--

CREATE TABLE `class_4` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course_1` int(11) NOT NULL,
  `course_2` int(11) NOT NULL,
  `course_3` int(11) NOT NULL,
  `course_4` int(11) NOT NULL,
  `course_5` int(11) NOT NULL,
  `course_6` int(11) NOT NULL,
  `course_7` int(11) NOT NULL,
  `course_8` int(11) NOT NULL,
  `course_9` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_5`
--

CREATE TABLE `class_5` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course_1` int(11) NOT NULL,
  `course_2` int(11) NOT NULL,
  `course_3` int(11) NOT NULL,
  `course_4` int(11) NOT NULL,
  `course_5` int(11) NOT NULL,
  `course_6` int(11) NOT NULL,
  `course_7` int(11) NOT NULL,
  `course_8` int(11) NOT NULL,
  `course_9` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blacklist`
--
ALTER TABLE `blacklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_1`
--
ALTER TABLE `class_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_2`
--
ALTER TABLE `class_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_3`
--
ALTER TABLE `class_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_4`
--
ALTER TABLE `class_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_5`
--
ALTER TABLE `class_5`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blacklist`
--
ALTER TABLE `blacklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_1`
--
ALTER TABLE `class_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_2`
--
ALTER TABLE `class_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_3`
--
ALTER TABLE `class_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_4`
--
ALTER TABLE `class_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_5`
--
ALTER TABLE `class_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
