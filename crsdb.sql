-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 12:54 PM
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
  `content_creator` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `genre` varchar(40) NOT NULL,
  `posterName` varchar(80) NOT NULL,
  `cast` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `rating` double NOT NULL,
  `criticRating` double NOT NULL,
  `id` int(100) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_creator`, `name`, `type`, `genre`, `posterName`, `cast`, `date`, `rating`, `criticRating`, `id`, `link`) VALUES
('cc-9', 'family crisis', 'Natok', 'Drama', 'family_crisis.png', 'castinfo', '2019-05-13', 4, 4, 2, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1'),
('cc-9', 'bokhate', 'Natok', 'Action', 'bokhate.jfif', 'castinfo', '2018-08-13', 5, 7, 3, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1'),
('cc-9', 'mission barishal ', 'Natok', 'Comedy', 'mission_barishal.png', 'castinfo', '2019-05-13', 9, 2, 4, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1'),
('cc-9', 'Extraction Bangla Funny Dubbing', 'Video content', 'Comedy', 'Extraction_Bangla_Funny_Dubbing.jpg', 'castinfo', '2014-06-18', 6.3, 7.9, 6, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-9', 'DESHI AVENGERS', 'Video content', 'Comedy', 'DESHI_AVENGERS.jpg', 'castinfo', '2019-08-13', 7.3, 6.3, 7, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-9', 'THE THEORY OF \'COPY FILM\'', 'Video content', 'Comedy', 'the_theory.jpg', 'castinfo', '2019-05-13', 5.3, 5.9, 8, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-9', 'The 3 StoogesBangla Funny Dubbing', 'Video content', 'Comedy', 'The_3_StoogesBangla_Funny_Dubbing.jpg', 'castinfo', '2014-06-18', 6.3, 6.9, 9, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'dark', 'Tv series', 'Drama', 'dark.jpg', 'castinfo', '2017-05-13', 9, 9, 11, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'Dhaka Attack', 'Movie', ' Action/Thriller', 'Dhaka_Attack.jpg', 'castinfo', '2017-05-13', 7, 8, 12, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'stranger things', 'Tv series', 'Drama', 'stranger_things.jpg', 'castinfo', '2017-05-13', 9, 7.9, 13, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'peaky blinders', 'Tv series', 'Drama', 'peaky_blinders.jpg', 'castinfo', '2013-05-13', 7, 8.9, 14, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'Money Heist', 'Tv series', 'Drama', 'Money_Heist.jpg', 'castinfo', '2018-06-26', 8.4, 8.6, 15, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'the flash', 'Tv series', 'Drama', 'the_flash.jpg', 'castinfo', '2014-05-13', 8, 8.1, 16, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'breaking bad', 'Tv series', 'Drama', 'breaking_bad.jpg', 'castinfo', '2008-06-18', 10, 9.8, 17, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'Television', 'Movie', 'Drama', 'Television.jpg', 'castinfo', '2012-05-13', 7.3, 8, 18, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'Dahan', 'Movie', 'Drama', 'Dahan.jpg', 'castinfo', '2018-08-13', 7.6, 7.9, 20, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1'),
('cc-7', 'Fagun Haway', 'Movie', 'Drama', 'Fagun_Haway.jpg', 'castinfo', '2019-05-13', 8.3, 7.8, 21, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1'),
('cc-9', 'valobasha 101', 'Natok', 'Romance', 'vhalobasha101.jpg', 'castinfo', '2014-06-18', 0.3, 7.2, 22, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1'),
('cc-9', 'lol', 'Natok', 'Romance', 'lol.jpg', 'castinfo', '2019-05-13', 5, 6, 23, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1'),
('cc-9', 'bachelor point', 'Natok', 'Comedy', 'bachelor_point.jpg', 'castinfo', '2018-06-13', 0, 8.6, 24, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1'),
('cc-7', 'Uchiage Hanabi', 'Movie', 'Drama', '254293R1.jpg', 'something', '2017-12-11', 1, 9, 27, 'https://www.youtube.com/watch?v=-tKVN2mAKRI'),
('cc-29', 'Pulp fiction', 'Movie', 'Drama', 'pulpfiction.jpg', 'Lot of people', '2011-02-09', 9, 0, 28, 'https://www.youtube.com/watch?v=s7EdQ4FqbhY');

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
('Sadat Hasan', 'cc-10', 'sada@gamil.com', '012830392'),
('Martin luther ', 'cc-28', 'martin00@gamail.com', '01927308430'),
('Hasib mia', 'cc-29', 'martin00@gamail.com', '0169765432'),
('ihasidul', 'cc-31', 'asdf@dsf.com', '09876543'),
('rakib hasan', 'cc-33', 'kamal@gmail.com', '01927308430'),
('Martin luther ', 'cc-35', 'martin00@gamail.com', '0169765432'),
('Hasib mia', 'cc-40', 'martin00@gamail.com', '09876543'),
('Marques Brownlee', 'cc-7', 'mkbhd@gmail.com', '01987655628'),
('akkas', 'cc-9', 'akkas2@gami.com', '1243254');

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
('Hasib mia', 'c-17', 'hasib@kmail.com', '0169765432'),
('rakib hasan', 'c-32', 'kamal@gmail.com', '01987655628'),
('ihasidul', 'c-34', 'kamal@gmail.com', '0169765432'),
('Hasib mia', 'c-37', 'hasib@kmail.com', '0169765432'),
('TEST MIA', 'c-38', 'test@gamil.com', '019866332'),
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
('u-3', '123', 'user', 3),
('cc-7', '123', 'contentCreator', 4),
('cc-9', '123', 'contentCreator', 9),
('u-11', '123', 'user', 11),
('u-12', '123', 'user', 12),
('u-18', '123', 'user', 18),
('u-19', '123', 'user', 19),
('u-21', '123', 'user', 21),
('u-22', '123', 'user', 22),
('u-23', '123', 'user', 23),
('u-24', '123', 'user', 24),
('u-25', '123', 'user', 25),
('u-26', '123', 'user', 26),
('u-27', '123', 'user', 27),
('cc-28', '123', 'contentCreator', 28),
('cc-29', '123', 'contentCreator', 29),
('cc-31', '123', 'contentCreator', 31),
('cc-33', '123', 'contentCreator', 33),
('c-34', '123', 'user', 34),
('cc-35', '123', 'contentCreator', 35),
('c-37', '123', 'user', 37),
('c-38', '123', 'user', 38),
('u-39', '123', 'user', 39),
('cc-40', '123', 'contentCreator', 40),
('u-41', '123', 'user', 41);

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
('Hasib mia', 'u-21', 'hasib@kmail.com', '0169765432', ''),
('Martin luther ', 'u-22', 'martin00@gamail.com', '0169765432', ''),
('Hasib mia', 'u-23', 'hasib@kmail.com', '0169765432', ''),
('Hasib mia', 'u-24', 'hasib@kmail.com', '0169765432', ''),
('ihasidul', 'u-25', 'hasib@kmail.com', '01927308430', ''),
('Hasib mia', 'u-3', 'hasib@kmail.com', '0169765432', ''),
('Rahim Hasan', 'u-39', 'Rahim@gamil.com', '01987654231`', ''),
('Hasib mia', 'u-4', 'hasib@kmail.com', '0169765432', ''),
('Hasib mia', 'u-41', 'hasib@kmail.com', '0169765432', '');

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `userId` varchar(50) NOT NULL,
  `contentId` varchar(50) NOT NULL,
  `contentName` varchar(50) NOT NULL,
  `userType` varchar(50) NOT NULL,
  `rating` double NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`userId`, `contentId`, `contentName`, `userType`, `rating`, `comment`) VALUES
('u-27', '5', 'Cinemaal', 'user', 8, 'vag'),
('u-27', '21', 'Fagun Haway', 'user', 8, 'Good one'),
('u-3', '18', 'Television', 'user', 9, 'Love It'),
('u-3', '17', 'breaking bad', 'user', 10, 'One of the great one'),
('u-3', '16', 'the flash', 'user', 8, 'Bhalo'),
('u-11', '18', 'Television', 'user', 8, 'bhao'),
('u-11', '23', 'lol', 'user', 5, 'faltu'),
('c-32', '18', 'Television', 'critic', 8, 'good'),
('c-32', '2', 'family crisis', 'critic', 4, 'not good'),
('u-21', '18', 'Television', 'user', 5, 'Good one'),
('u-21', '2', 'family crisis', 'user', 4, 'bad'),
('u-21', '17', 'breaking bad', 'user', 10, 'best'),
('u-11', '21', 'Fagun Haway', 'user', 9, 'GOOD ONE'),
('c-32', '21', 'Fagun Haway', 'critic', 6, 'DID NOT LIKE'),
('c-6', '21', 'Fagun Haway', 'critic', 8, 'BHALO'),
('c-37', '21', 'Fagun Haway', 'critic', 9, 'GOOD'),
('c-38', '21', 'Fagun Haway', 'critic', 8, 'GOOD'),
('u-39', '13', 'stranger things', 'user', 9, 'Its ok'),
('u-11', '4', 'mission barishal ', 'user', 9, 'qwe'),
('u-41', '21', 'Fagun Haway', 'user', 8, 'nice'),
('u-11', '27', 'Uchiage Hanabi', 'user', 1, 'No'),
('c-34', '27', 'Uchiage Hanabi', 'critic', 9, 'Loved it a lot'),
('u-11', '28', 'Pulp fiction', 'user', 9, 'One of the very good movie.');

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
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `autoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
