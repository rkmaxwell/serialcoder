-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 07:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serial_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `android_courses`
--

CREATE TABLE `android_courses` (
  `id` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `topic` text NOT NULL,
  `url` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `android_courses`
--

INSERT INTO `android_courses` (`id`, `course`, `topic`, `url`, `status`) VALUES
(1, 1, 'Introduction to Android', 'videos/video.mp3', 0),
(2, 2, 'Introduction to Layouts', 'videos/video.mp3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `recorded_courses`
--

CREATE TABLE `recorded_courses` (
  `id` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `topic` text NOT NULL,
  `url` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recorded_courses`
--

INSERT INTO `recorded_courses` (`id`, `course`, `topic`, `url`, `status`) VALUES
(1, 1, 'Introduction to Android', 'videos/video.mp3', 0),
(2, 2, 'Introduction to Web', 'videos/video.mp3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `serc_courses`
--

CREATE TABLE `serc_courses` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `period` int(11) NOT NULL,
  `payment` double NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serc_courses`
--

INSERT INTO `serc_courses` (`id`, `name`, `period`, `payment`, `status`, `date`) VALUES
(1, 'android ', 6, 8000, 0, '2020-06-21 17:38:13'),
(2, 'web ', 4, 5000, 0, '2020-06-21 17:38:50'),
(3, 'autocad', 3, 4000, 0, '2020-06-28 17:25:07'),
(4, 'java', 3, 4000, 0, '2020-06-28 17:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `serc_enrolled`
--

CREATE TABLE `serc_enrolled` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `college` text NOT NULL,
  `developer` int(11) NOT NULL,
  `interests` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serc_enrolled`
--

INSERT INTO `serc_enrolled` (`id`, `course`, `college`, `developer`, `interests`, `date`, `status`) VALUES
(1, '1', 'ics', 1, '', '2020-06-28 04:06:02', 1),
(2, '2', 'Kips college', 1, '', '2020-06-28 04:06:48', 1),
(3, '3', 'KIPS college', 3, '', '2020-06-28 04:06:53', 1),
(4, '4', 'mamba', 2, '', '2020-07-01 23:07:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `serc_users`
--

CREATE TABLE `serc_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `password` text NOT NULL,
  `joined_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serc_users`
--

INSERT INTO `serc_users` (`id`, `first_name`, `email`, `phone`, `password`, `joined_date`, `status`) VALUES
(1, 'kimani john', 'kimani@gmail.com', 723400, 'pass', '2020-06-13 06:06:45', 1),
(2, 'edward', 'joe@gmail.com', 712450567, '0000', '2020-06-13 06:06:06', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `android_courses`
--
ALTER TABLE `android_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recorded_courses`
--
ALTER TABLE `recorded_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serc_courses`
--
ALTER TABLE `serc_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serc_enrolled`
--
ALTER TABLE `serc_enrolled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serc_users`
--
ALTER TABLE `serc_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `android_courses`
--
ALTER TABLE `android_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recorded_courses`
--
ALTER TABLE `recorded_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `serc_courses`
--
ALTER TABLE `serc_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `serc_enrolled`
--
ALTER TABLE `serc_enrolled`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `serc_users`
--
ALTER TABLE `serc_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
