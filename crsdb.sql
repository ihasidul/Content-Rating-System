-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 11:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `id`, `email`, `phone`) VALUES
('Hasidul', 'a-123', 'hasi@gmail.com', '01919212121');

-- --------------------------------------------------------

--
-- Table structure for table `contentcreator`
--

CREATE TABLE `contentcreator` (
  `name` varchar(40) NOT NULL,
  `id` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contentcreator`
--

INSERT INTO `contentcreator` (`name`, `id`, `email`, `password`) VALUES
('creator', 'cc-123', 'cc@gmail.com', '23846');

-- --------------------------------------------------------

--
-- Table structure for table `critics`
--

CREATE TABLE `critics` (
  `name` varchar(40) NOT NULL,
  `id` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `list` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `critics`
--

INSERT INTO `critics` (`name`, `id`, `email`, `password`, `phone`, `list`) VALUES
('critic ', 'c-123', 'c@gmail.com', '1235', '0124', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `permission` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`, `permission`) VALUES
('a-123', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `uploadcontent`
--

CREATE TABLE `uploadcontent` (
  `id` int(40) NOT NULL,
  `content_creator` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `genre` varchar(40) NOT NULL,
  `poster` varchar(80) NOT NULL,
  `link` varchar(80) NOT NULL,
  `cast` varchar(40) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploadcontent`
--

INSERT INTO `uploadcontent` (`id`, `content_creator`, `name`, `type`, `genre`, `poster`, `link`, `cast`, `date`) VALUES
(1, 'cc-123', 'creator', 'movie', 'thriller', 'image.png', '..../..../../..', 'cast_name', '2020-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(40) NOT NULL,
  `id` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` int(40) NOT NULL,
  `list` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `id`, `email`, `password`, `phone`, `list`) VALUES
('user', 'u-123', 'u@gmail.com', '1235', 124227, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contentcreator`
--
ALTER TABLE `contentcreator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `critics`
--
ALTER TABLE `critics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadcontent`
--
ALTER TABLE `uploadcontent`
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
-- AUTO_INCREMENT for table `uploadcontent`
--
ALTER TABLE `uploadcontent`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
