-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 07:18 AM
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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studid` int(15) NOT NULL,
  `usn` varchar(15) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` bigint(12) NOT NULL,
  `batch` int(10) DEFAULT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studid`, `usn`, `fname`, `lname`, `email`, `phno`, `batch`, `type`) VALUES
(1, '4nm18mca14', 'Praneeth', 'shetty', 'praneethjshetty@gmail.com', 8197488955, 2018, 'regular'),
(2, '4nm18mca04', 'Babitha Shetty', 'K', 'babithavtl9@gmail.com', 9632281509, 2018, 'regular'),
(3, '4ny18mca10', 'Nitiketh', 'Nayak', 'nayaknitiketh22@gmail.com', 7760889553, 2018, 'regular'),
(5, '4nm18mca06', 'Govind ', 'Chowdari ', 'gobusmangalore@gmail.com', 7829909213, 2018, 'regular'),
(6, '4nm18mca01', 'Aditi', 'Harish', 'aditiharish96@gmail.com', 7022405712, 2018, 'regular'),
(7, '4ny18mca14', 'Rashmitha', 'Shetty', 'rashmitha653@glail.com', 9148724330, 2018, 'regular'),
(8, '4ny18mca06', 'Dhanush', 'KT', 'dhanushkt787@gmail.com', 9880023870, 2018, 'regular'),
(9, '4nm18mca19', 'Rayesh', 'Pai', 'raypai1818@gmail.com', 9740474327, 2018, 'regular'),
(10, '4ny18mca16', 'Sanath', 'Aithal', 'sanathsaithal@gmail.com', 9108824170, 2018, 'regular'),
(11, '4ny18mca18', 'Shreya', 'Shetty', 'shettyshreya280@gmail.com', 9902571074, 2018, 'regular'),
(12, '4nm18mca15', 'Prathiksha', 'Rai b', 'rprathiksha160@gmail.com', 8197429049, 2018, 'regular'),
(13, '4nm18mca18', 'Rakshitha', 'Shetty', 'rakshithashetty859@gmail.com', 7022156072, 2018, 'regular'),
(14, '4ny18mca23', 'Tilak', '.', 'tilakdevadiga15bvr@gmail.com', 7760712059, 2018, 'regular'),
(15, '4nm18mca13', 'PRAMODA ', 'G', 'pammis29@rediffmail.com', 9535301007, 2018, 'regular'),
(16, '4nm18mca08', 'Jnanesh', 'Ballal', 'jnanesh024@gmail.com', 9008997005, 2018, 'regular'),
(17, '4nm18mca26', 'Vijayashree', 'A', 'vijayashreea25@gmail.com', 7829631644, 2018, 'regular'),
(18, '4my18mca110', 'Deekshitha', 'g', 'divyashamboor@gmail.com', 9880111466, 2018, 'regular'),
(19, '4ny18mca22', 'Shruthi', 'Rao', 'shruthirao515@gmail.com', 8618457692, 2018, 'regular'),
(20, '4ny18mca24', 'Vignesh', 'Pai', 'vigneshpai43@gmail.com', 9449355988, 2018, 'regular'),
(21, '4ny18mca09', 'Karthik', 'Prabhu', 'kp081988@gmail.com', 9535793366, 2018, 'regular'),
(22, '4ny18mca25', 'YOGISH', 'SHENOY', 'yogishshenoy027@gmail.com', 9980932088, 2018, 'regular'),
(23, '4nm18mca21', 'Rohini', 'K', 'rohinik.madhura@gmail.com', 8277309219, 2018, 'regular'),
(24, '4nm18mca20', 'Rhea', 'Ramachandra', 'rhearam20@gmail.com', 7760342045, 2018, 'regular'),
(25, '4ny18mca20', 'Shridhar', 'Bhat', 'bhatshridhar27@gmail.com', 9632770010, 2018, 'regular'),
(26, '4ny18mca03', 'Dayananda', 'N', 'dayanandashenoy123@gmail.com', 8089438852, 2018, 'regular'),
(27, '4ny18mca17', 'Shreepathi', 'Devji', 'shreepathidevji25@gmail.com', 8197500526, 2018, 'regular'),
(28, '4ny18mca01', 'B Mahesh', 'Pai', 'maheshpaib1997@gmail.com', 632559430, 2018, 'regular'),
(29, '4ny18mca19', 'Shridhar ', 'Achari', 'shridharachar2706@gmail.com', 9008546996, 2018, 'regular'),
(30, '4nm18mca22', 'Sharath ', 'Raj', 'sharathrajs1997@gmail.com', 8722068853, 2018, 'regular'),
(31, '4nm18mca11', 'Nikhil ', 'H', 'nikhilnikhy77@gmail.com', 7259412991, 2018, 'regular'),
(32, '4nm18mca25', 'Sushmitha', 'N', 'sushmithanagaraj382@gmail.com', 7348973981, 2018, 'regular'),
(33, '4nm18mca12', 'Pooja', 'Shetty', 'poojabshetty176@gmail.com', 8884123933, 2018, 'regular'),
(34, '4nm18mca23', 'Supreetha', 'P', 'supreethabhat8@gmail.com', 8547692807, 2018, 'regular'),
(35, '4nm18mca03', 'Akash ', 'Raj', 'akashraj.jain22@gmail.com', 9964388640, 2018, 'regular'),
(36, '4ny18mca02', 'Chaithra', 'Devadiga', 'chaithra.devadiga1998@gmail.com', 9743746929, 2018, 'regular'),
(37, '4ny18mca08', 'Harshitha', 'Kotian', 'harshkotian9@gmail.com', 7204208780, 2018, 'regular'),
(38, '4nm18mca10', 'Anuradha', 'Prabhu', 'kanuradhaprabhu777@gmail.com', 8762116637, 2018, 'regular'),
(39, '4nm18mca02', 'Akarsh', 'Natekar', 'natekarakarsh6@gmail.com', 9611618039, 2018, 'regular'),
(40, '4nm18mca17', 'Raksha', 'Hegde', 'rakshahegde16@gmail.com', 7022223006, 2018, 'regular'),
(41, '4ny18mca11', 'Neeshma', 'Dsouza', 'neeshmadsouza@gmail.com', 9972100466, 2018, 'regular'),
(42, '4ny18mca07', 'Dhyanashree', 'Bhat', 'dhyanabhat7@gmail.com', 8722420288, 2018, 'regular'),
(49, '4nm17mca24', 'Pavithra', 'Bangera', 'pavithrar397@gmail.com', 7090644815, 2018, 'regular'),
(50, '4ny18mca04', 'Deekshita', 'M', 'deekshitalm@gmail.com', 9902207941, 2018, 'regular'),
(51, '4nm18mca09', 'jyothi', 'k', 'jyothik86466@gmail.com', 8296846723, 2018, 'regular'),
(52, '4nm18mca16', 'Preethi ', 'Devadiga ', 'Preethid661@gmail.com', 9591708329, 2018, 'regular'),
(53, '4nm18mca24', 'Sushant', 'Poojary', 'sushanthpoojary60@gmail.com', 9167080425, 2018, 'regular'),
(56, '4ny18mca12', 'Pawana', 'Shetty', 'prs2418@gmail.com', 9632622983, 2018, 'regular');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studid`),
  ADD UNIQUE KEY `usn` (`usn`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
