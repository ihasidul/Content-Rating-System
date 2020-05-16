-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 12:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

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
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` varchar(40) NOT NULL,
  `content_creator` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `genre` varchar(40) NOT NULL,
  `posterName` varchar(80) NOT NULL,
  `cast` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `ratting` double NOT NULL,
  `criticratting` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `content_creator`, `name`, `type`, `genre`, `posterName`, `cast`, `date`, `ratting`, `criticratting`) VALUES
('conent-1', 'cc-123', 'Aynabaji', 'movie', 'thriller', 'aynabaji.jpg', 'castinfo', '2020-05-13', 8, 7.8);

-- --------------------------------------------------------

--
-- Table structure for table `contentcreator`
--

CREATE TABLE `contentcreator` (
  `name` varchar(40) NOT NULL,
  `id` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contentcreator`
--

INSERT INTO `contentcreator` (`name`, `id`, `email`, `phone`) VALUES
('habib', 'cc-098', 'asd@a.com', '0134990332'),
('Marques Brownlee', 'cc-7', 'mkbhd@gmail.com', '01987655628'),
('akkas', 'cc-9', 'akkas2@gami.com', '1243254'),
('Jeson', 'cc-999', 'jj@gam.com', '098765432');

-- --------------------------------------------------------

--
-- Table structure for table `critics`
--

CREATE TABLE `critics` (
  `name` varchar(40) NOT NULL,
  `id` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `critics`
--

INSERT INTO `critics` (`name`, `id`, `email`, `phone`) VALUES
('critic ', 'c-123', 'c@gmail.com', '0124'),
('Martin luther ', 'c-6', 'martin00@gamail.com', '01927308430'),
('James', 'c-777', 'james@gamil.com', '099876545678'),
('kamal ', 'c-8', 'kamal@gmail.com', '23542354');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `permission` varchar(50) NOT NULL,
  `autoId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`, `permission`, `autoId`) VALUES
('a-123', '123', 'admin', 1),
('c-123', '123', 'critic', 2),
('u-3', '123', 'user', 3),
('u-4', '123', 'user', 4),
('c-6', '123', 'user', 6),
('cc-7', '123', 'user', 7),
('c-8', '123', 'user', 8),
('cc-9', '1234', 'user', 9);

-- --------------------------------------------------------

--
-- Table structure for table `pendingcritic`
--

CREATE TABLE `pendingcritic` (
  `name` varchar(50) NOT NULL,
  `id` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendingcritic`
--

INSERT INTO `pendingcritic` (`name`, `id`, `email`, `phone`) VALUES
('tamal', 'c-980', 'tam@gmail.com', '065345678');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(40) NOT NULL,
  `id` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `list` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `id`, `email`, `phone`, `list`) VALUES
('ka', 'u-000', 'asd@a.com', '1919212121', ''),
('user', 'u-123', 'u@gmail.com', '124227', ''),
('Hasib mia', 'u-3', 'hasib@kmail.com', '0169765432', ''),
('Hasib mia', 'u-4', 'hasib@kmail.com', '0169765432', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`autoId`);

--
-- Indexes for table `pendingcritic`
--
ALTER TABLE `pendingcritic`
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
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `autoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
