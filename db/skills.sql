-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 07:17 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emca`
--

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skillid` int(11) NOT NULL,
  `studid` int(11) NOT NULL,
  `talents` varchar(255) NOT NULL,
  `addtalents` mediumtext DEFAULT NULL,
  `sexpr` varchar(200) DEFAULT NULL,
  `sevents` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skillid`, `studid`, `talents`, `addtalents`, `sexpr`, `sevents`) VALUES
(1, 1, 'Music, Video or Audio Editing', 'FL Studio, Audio Editing, Audio recording', 'Treasure Hunt', 'Treasure hunt'),
(2, 2, 'Dance, Coding / Web Development', '', 'Mega Event / Surprise Event', 'Mega event,treasure hunt'),
(3, 3, 'Dance, Sports, Art', '', 'Treasure Hunt', 'No'),
(5, 5, 'Dance', '', '0', 'Coding,gaming '),
(6, 6, 'Music', '', '0', '0'),
(7, 7, 'Art', '', '0', '0'),
(8, 8, 'Photography, Video or Audio Editing, Graphic or Logo Designing, Coding / Web Development', 'Digital art, Photoshop, After effects, php', 'coding', 'Coding, web designing, photography, gaming, quiz, product launch'),
(9, 9, 'Music, Singing, Sports, Coding / Web Development', '', 'fest coordinator', 'IT Quiz, Gaming, Mega Event, Surprise Event'),
(10, 10, '', '', '0', '0'),
(11, 11, 'Music', '', 'Treasure Hunt', 'Treasure hunt'),
(12, 12, 'Dance', '', 'other', '0'),
(13, 13, 'Sports', '', '0', '0'),
(14, 14, 'Photography', '', '0', '0'),
(15, 15, 'Music', '', 'other', '0'),
(16, 16, 'Singing', '', 'Mega Event / Surprise Event', '0'),
(17, 17, 'Dance, Sports', '', '0', '0'),
(18, 18, 'Dance, Sports', '', 'Tech Talks / Debate', 'IT Quize'),
(19, 19, 'Art', '', 'other', '0'),
(20, 20, 'Video or Audio Editing, Graphic or Logo Designing, Coding / Web Development', 'Game development', 'IT quiz', 'IT quiz,Coding, entrepreneur'),
(21, 21, '', '', 'Treasure Hunt', '0'),
(22, 22, 'Coding / Web Development', '', 'other', 'Android app development'),
(23, 23, 'Coding / Web Development', '', 'other', '0'),
(24, 24, 'Dance, Art', '', 'IT manager', 'Megaevent'),
(25, 25, 'Music, Singing', '', '0', '0'),
(26, 26, 'Sports', '', 'other', '0'),
(27, 27, 'Dance', '', '0', '0'),
(28, 28, 'Music, Photography, Video or Audio Editing, Coding / Web Development', '', '0', '0'),
(29, 29, 'Music, Art', '', '0', '0'),
(30, 30, 'Sports', '', '0', '0'),
(31, 31, 'Sports', 'essay kannada', 'other', '0'),
(32, 32, 'Art', 'Quiz', '0', 'Quiz'),
(33, 33, 'Music', '', '0', '0'),
(34, 34, 'Dance, Singing, Photography, Coding / Web Development', '', 'web designing', 'Web design'),
(35, 35, 'Dance, Sports, Art', '', 'Tech Talks / Debate', 'Debate '),
(36, 36, 'Dance', '', '0', '0'),
(37, 37, 'Dance', '', '0', '0'),
(38, 38, 'Dance, Music, Sports', '', 'Treasure Hunt', 'IT Manager'),
(39, 39, 'Sports, Anchoring / MC', 'Gaming', 'other', 'Treasure hunt , gaming'),
(40, 40, 'Dance', 'Free style', 'other', '0'),
(41, 41, 'Art', '', 'IT manager', '0'),
(42, 42, 'Dance, Singing', '', 'Mega Event / Surprise Event', '0'),
(49, 49, 'Dance', '', '0', '0'),
(50, 50, 'Art', '', '0', '0'),
(51, 51, 'Music, Art', '', '0', '0'),
(52, 52, 'Dance', '', 'other', '0'),
(53, 53, 'Dance', '', 'other', '0'),
(56, 56, 'Dance, Music, Singing', '', 'other', 'Other');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skillid`),
  ADD KEY `talent_fk` (`studid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skillid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `talent_fk` FOREIGN KEY (`studid`) REFERENCES `student` (`studid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
