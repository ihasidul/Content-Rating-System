-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 04:54 PM
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
('cc-123', 'Aynabaji', 'Movie', 'thriller', 'aynabaji.jpg', 'castinfo', '2020-05-13', 0, 7.8, 1, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1'),
('cc-9', 'family crisis', 'Natok', 'Drama', 'family_crisis.png', 'castinfo', '2019-05-13', 6, 6.9, 2, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1'),
('cc-9', 'bokhate', 'Natok', 'Action', 'bokhate.jfif', 'castinfo', '2018-08-13', 5, 7, 3, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1'),
('cc-9', 'mission barishal ', 'Natok', 'Comedy', 'mission_barishal.png', 'castinfo', '2019-05-13', 6, 2, 4, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1'),
('cc-7', 'Cinemaal', 'Video content', 'Comedy', 'Cinemaal.jpg', 'castinfo', '2012-05-13', 9, 6, 5, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-9', 'Extraction Bangla Funny Dubbing', 'Video content', 'Comedy', 'Extraction_Bangla_Funny_Dubbing.jpg', 'castinfo', '2014-06-18', 6.3, 7.9, 6, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-9', 'DESHI AVENGERS', 'Video content', 'Comedy', 'DESHI_AVENGERS.jpg', 'castinfo', '2019-08-13', 7.3, 6.3, 7, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-9', 'THE THEORY OF \'COPY FILM\'', 'Video content', 'Comedy', 'the_theory.jpg', 'castinfo', '2019-05-13', 5.3, 5.9, 8, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-9', 'The 3 StoogesBangla Funny Dubbing', 'Video content', 'Comedy', 'The_3_StoogesBangla_Funny_Dubbing.jpg', 'castinfo', '2014-06-18', 6.3, 6.9, 9, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-9', 'HSC Exam Special Funny Dubbing ', 'Video content', 'Comedy', 'HSC_Exam_Special_Funny_Dubbing.jpg', 'castinfo', '2019-05-19', 8.3, 4.8, 10, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'dark', 'Tv series', 'Drama', 'dark.jpg', 'castinfo', '2017-05-13', 8.7, 9, 11, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'Dhaka Attack', 'Movie', ' Action/Thriller', 'Dhaka_Attack.jpg', 'castinfo', '2017-05-13', 7, 8, 12, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'stranger things', 'Tv series', 'Drama', 'stranger_things.jpg', 'castinfo', '2017-05-13', 7.3, 7.9, 13, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'peaky blinders', 'Tv series', 'Drama', 'peaky_blinders.jpg', 'castinfo', '2013-05-13', 7, 8.9, 14, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'Money Heist', 'Tv series', 'Drama', 'Money_Heist.jpg', 'castinfo', '2018-06-26', 8.4, 8.6, 15, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'the flash', 'Tv series', 'Drama', 'the_flash.jpg', 'castinfo', '2014-05-13', 7.8, 8.1, 16, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'breaking bad', 'Tv series', 'Drama', 'breaking_bad.jpg', 'castinfo', '2008-06-18', 9.5, 9.8, 17, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'Television', 'Movie', 'Drama', 'Television.jpg', 'castinfo', '2012-05-13', 8.2, 7.9, 18, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'PoraMon 2', 'Movie', 'Romance', 'PoraMon_2.jpg', 'castinfo', '2018-06-13', 5, 8, 19, 'https://www.youtube.com/watch?v=MGslEcmVurg'),
('cc-7', 'Dahan', 'Movie', 'Drama', 'Dahan.jpg', 'castinfo', '2018-08-13', 7.6, 7.9, 20, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1'),
('cc-7', 'Fagun Haway', 'Movie', 'Drama', 'Fagun_Haway.jpg', 'castinfo', '2019-05-13', 7.75, 8, 21, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1'),
('cc-9', 'valobasha 101', 'Natok', 'Romance', 'vhalobasha101.jpg', 'castinfo', '2014-06-18', 0.3, 7.2, 22, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1'),
('cc-9', 'lol', 'Natok', 'Romance', 'lol.jpg', 'castinfo', '2019-05-13', 7, 6.5, 23, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1'),
('cc-9', 'bachelor point', 'Natok', 'Comedy', 'bachelor_point.jpg', 'castinfo', '2018-06-13', 0, 8.6, 24, 'https://www.youtube.com/watch?v=xNVZ4fzkSu8&list=RDxNVZ4fzkSu8&start_radio=1');

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
('Sadat Hasan', 'cc-10', 'sada@gamil.com', '012830392'),
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
('Hasib mia', 'c-17', 'hasib@kmail.com', '0169765432'),
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
('cc-9', '1234', 'user', 9),
('cc-10', '123', 'user', 10),
('u-11', '123', 'user', 11),
('u-12', '123', 'user', 12),
('u-13', 'jk', 'user', 13),
('u-14', '1234', 'user', 14),
('u-15', '123', 'user', 15),
('u-16', '123', 'user', 16),
('c-17', '123', 'user', 17),
('u-18', '123', 'user', 18),
('u-19', '123', 'user', 19),
('u-20', '123', 'user', 20),
('u-21', '123', 'user', 21),
('u-22', '123', 'user', 22),
('u-23', '123', 'user', 23),
('u-24', '123', 'user', 24),
('u-25', '123', 'user', 25),
('u-26', '123', 'user', 26),
('u-27', '123', 'user', 27);

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
('Lala', 'u-11', 'll@gami.com', '987654332', ''),
('Dani', 'u-12', 'Dani@gmail.com', '0167890345', ''),
('user', 'u-123', 'u@gmail.com', '124227', ''),
('woqijd', 'u-13', 'asdf@dsf.com', 'ljl', ''),
('yo', 'u-14', 'asdf@dsf.com', '09876543', ''),
('yo', 'u-15', 'asdf@dsf.com', '09876543', ''),
('yo', 'u-16', 'asdf@dsf.com', '09876543', ''),
('Martin luther ', 'u-18', 'martin00@gamail.com', '09876543', ''),
('Martin luther ', 'u-19', 'martin00@gamail.com', '09876543', ''),
('Martin luther ', 'u-20', 'martin00@gamail.com', '09876543', ''),
('Hasib mia', 'u-21', 'hasib@kmail.com', '0169765432', ''),
('Martin luther ', 'u-22', 'martin00@gamail.com', '0169765432', ''),
('Hasib mia', 'u-23', 'hasib@kmail.com', '0169765432', ''),
('Hasib mia', 'u-24', 'hasib@kmail.com', '0169765432', ''),
('ihasidul', 'u-25', 'hasib@kmail.com', '01927308430', ''),
('rakib hasan', 'u-26', 'asdf@dsf.com', '09876543', ''),
('Martin luther ', 'u-27', 'martin00@gamail.com', '0992323', ''),
('Hasib mia', 'u-3', 'hasib@kmail.com', '0169765432', ''),
('Hasib mia', 'u-4', 'hasib@kmail.com', '0169765432', '');

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `userId` varchar(50) NOT NULL,
  `contentId` varchar(50) NOT NULL,
  `userType` varchar(50) NOT NULL,
  `rating` double NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`userId`, `contentId`, `userType`, `rating`, `comment`) VALUES
('u-3', '21', '', 8, 'I liked the movie. '),
('u-3', '18', '', 8, 'One of the best movie of Bangladesh '),
('u-4', '21', '', 8, 'Good one'),
('u-11', '21', '', 8, 'Liked it a lot'),
('u-11', '21', '', 8, 'dr'),
('u-11', '21', '', 6, 'onek bhalo'),
('u-11', '18', '', 9, 'Liked it a lot'),
('u-11', '18', '', 9, 'Bomb hoise'),
('c-17', '21', '', 7, 'joss'),
('u-4', '21', 'user', 8, 'Good'),
('u-3', '21', 'user', 7, 'das'),
('u-3', '21', 'user', 8, 'hola mia'),
('u-3', '21', 'user', 8, 'hola mia'),
('u-3', '17', 'user', 10, 'best'),
('c-6', '10', 'critic', 4, 'Faltu stuff'),
('c-6', '10', 'critic', 6, 'khub e baje'),
('c-6', '10', 'critic', 2, 'faltu'),
('c-6', '10', 'critic', 2, '.'),
('c-6', '10', 'critic', 3, '.'),
('c-6', '10', 'critic', 4, ''),
('c-6', '10', 'critic', 4, ''),
('c-6', '10', 'critic', 6, ''),
('c-6', '10', 'critic', 2, ''),
('c-6', '10', 'critic', 8, 'sd'),
('c-6', '10', 'critic', 8, 'sd'),
('c-6', '10', 'critic', 2, 'sd'),
('c-6', '10', 'critic', 10, 'bhai joss hoise'),
('c-6', '10', 'critic', 5, 'asd'),
('c-6', '10', 'critic', 5, 'asd'),
('c-6', '10', 'critic', 5, 'asd'),
('u-21', '3', 'user', 6, 'Bhalo natok na'),
('u-21', '3', 'user', 4, 'eita ki kotha bhai'),
('u-3', '19', 'user', 5, 'Bhalo na mone hoy ei jonno rating kom'),
('u-3', '2', 'user', 6, 'kichuy ekta'),
('u-3', '4', 'user', 6, 'ekta comment'),
('u-3', '12', 'user', 7, 'Bhalo na ektu o'),
('u-3', '22', 'user', 0, 'ok'),
('u-3', '22', 'user', 0, 'ok'),
('u-3', '22', 'user', 1, 'hobe'),
('u-3', '23', 'user', 7, 'soneType a comment...                                            '),
('u-11', '14', 'user', 9, 'Good one'),
('u-3', '14', 'user', 5, 'Ooooooo'),
('u-21', '5', 'user', 9, 'Onek joss '),
('u-21', '17', 'user', 9, ' Bhalo lagse');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `autoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
