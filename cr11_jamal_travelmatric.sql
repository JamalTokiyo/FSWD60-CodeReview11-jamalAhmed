-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2019 at 05:34 PM
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
-- Database: `cr11_jamal_travelmatric`
--

-- --------------------------------------------------------

--
-- Table structure for table `concerts`
--

CREATE TABLE `concerts` (
  `cName` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `event` date NOT NULL,
  `descript` varchar(255) NOT NULL,
  `webaddress` varchar(255) NOT NULL,
  `preis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `concerts`
--

INSERT INTO `concerts` (`cName`, `address`, `event`, `descript`, `webaddress`, `preis`) VALUES
('Cebouw', 'Amsterdam Holond', '2019-04-17', 'Classical', 'www.amsterdam.com', '47,80 EUR'),
('Kris Kristofferson', 'Wiener Stadthalle, Halle F, Roland Rainer Platz 1, 1150 Wien', '2019-03-05', 'Classical', 'http://kriskristofferson.com', '58,50 EUR'),
('Lenny Kravitz', 'Wiener Stadthalle, Halle D, Roland Rainer Platz 1, 1150 Wien', '2019-03-20', 'Classical', 'www.lennykravitz.com', '47,80 EUR');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `descript` varchar(255) NOT NULL,
  `webaddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rName`, `address`, `tel`, `descript`, `webaddress`) VALUES
('Burj Al arab', ' Schoenbrunner Straße 21 1050 Wien ', '+96 58 528 ', 'SIXTA', 'http://www.arab-restaurant.at/'),
('Jamal', 'mulfeldgasee', '39303993', 'Jamal', 'Jamal'),
('Jamals', 'mulfeldgasee', '39303993', 'Jamals', 'Jamal'),
('Lemon', 'Kettenbrueckengasse191050Vienna', '3', 'Thai', 'www.lemonleaf.at'),
('Lemon Leaf Thai Restaurant', 'Kettenbrueckengasse 19 1050 Vienna', '015812308', 'Thai', 'www.lemonleaf.at'),
('SIXTA', ' Schoenbrunner Strasse 21 1050 Wien ', '+43 1 58 52', 'SIXTA', 'http://www.sixta-restaurant.at');

-- --------------------------------------------------------

--
-- Table structure for table `sightseeing`
--

CREATE TABLE `sightseeing` (
  `sName` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `type` varchar(255) NOT NULL,
  `descript` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sightseeing`
--

INSERT INTO `sightseeing` (`sName`, `address`, `type`, `descript`) VALUES
('Kusolon', 'Maxingstrasse 13b, 1130 Wien', 'Histrorical', 'Museum'),
('Schloss', 'Maxingstrasse 13b, 1010 Wien', 'Histrorical', 'site'),
('schloss schonburn', 'Maxecoplatz 13b, 1010 Wien', 'Histrorical', 'Museum'),
('Segway', 'Maxingstrasse 13b, 1010 Wien', 'Histrorical', 'Segway'),
('St. Charles Church', 'Karlsplatz 1, 1010 Vienna', 'Musium', 'Church'),
('St.Anna church', 'Maxingstrasse 13b, 1010 Wien', 'Histrorical', 'Museum'),
('Zoo Vienna', 'Swedenplatz, 1130 Wien', 'Histrorical', 'ZOO');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'Ahmed Jamal', 'jamalusb@yahoo.com', '0ff0fbc2a99eae05c4e75a98e7917ce3cc6f9fdb406a3d7a830d8a97cb65f553'),
(2, 'Ahmed Jamal', 'jamalusb@gmail.com', '0ff0fbc2a99eae05c4e75a98e7917ce3cc6f9fdb406a3d7a830d8a97cb65f553'),
(3, 'Ahmed Jamal', 'jamalusb@codefactory.com', '0ff0fbc2a99eae05c4e75a98e7917ce3cc6f9fdb406a3d7a830d8a97cb65f553'),
(4, 'Ahmed Jamal', 'jamalusb@j.com', '0ff0fbc2a99eae05c4e75a98e7917ce3cc6f9fdb406a3d7a830d8a97cb65f553'),
(5, 'Ahmed Jamal', 'jamal@jmal.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concerts`
--
ALTER TABLE `concerts`
  ADD UNIQUE KEY `cName` (`cName`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD UNIQUE KEY `rName` (`rName`),
  ADD UNIQUE KEY `rName_2` (`rName`);

--
-- Indexes for table `sightseeing`
--
ALTER TABLE `sightseeing`
  ADD UNIQUE KEY `sName` (`sName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
