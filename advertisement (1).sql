-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 07:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advertisement`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertises`
--

CREATE TABLE `advertises` (
  `S.No` int(11) NOT NULL,
  `UserID` int(30) NOT NULL,
  `AdvertiseID` varchar(100) NOT NULL,
  `AdvertiseLink` varchar(50) NOT NULL,
  `AdvertiseName` varchar(20) NOT NULL,
  `Comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertises`
--

INSERT INTO `advertises` (`S.No`, `UserID`, `AdvertiseID`, `AdvertiseLink`, `AdvertiseName`, `Comments`) VALUES
(1, 1, 'x1', 'https://www.youtube.com/embed/7tl11V4dB-E', 'Rangde', ''),
(2, 1, 'x2', 'https://www.youtube.com/embed/yGUKYKSJJc8', 'Siri Vennala', ''),
(3, 1, 'x3', 'https://www.youtube.com/embed/U5ZmG4ZD-Vo', 'Tara', ''),
(4, 1, 'x4', 'https://www.youtube.com/embed/9m3mT4KV3es', 'Adiye', ''),
(5, 1, 'x5', 'https://www.youtube.com/embed/QCTtc36u-Kk', 'Tum Tum', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(30) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `UserName`, `Name`, `Email`, `Password`) VALUES
(4, 'rrrrr', 'rrrr', 'rrrrrr@gmail', '345334'),
(1, 'viratrishith', 'Virat Rishith Enduri', 'viratrishithenduri123@gmail.com', '1234'),
(5, 'vvirrr', 'virrr', 'bbxhdhuwdwe@gmail.com', 'Vudygwgdgdd'),
(3, 'vvvv', 'vvvv', 'vvvv@gmail.com', '666666'),
(2, 'yyy', 'yyy', 'yyyy@gmail.com', '0987890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertises`
--
ALTER TABLE `advertises`
  ADD PRIMARY KEY (`AdvertiseID`) USING BTREE,
  ADD UNIQUE KEY `S.No` (`S.No`),
  ADD KEY `fk_User_ID` (`UserID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `UserId` (`UserId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertises`
--
ALTER TABLE `advertises`
  ADD CONSTRAINT `fk_User_ID` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
