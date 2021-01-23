-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 06:24 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stempor`
--

-- --------------------------------------------------------

--
-- Table structure for table `steminfo`
--

CREATE TABLE `steminfo` (
  `id` int(5) NOT NULL,
  `programname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `programdescription` varchar(255) NOT NULL,
  `schoolinvolve` varchar(100) NOT NULL,
  `studentinvolve` int(10) NOT NULL,
  `company` varchar(100) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `schoolname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `steminfo`
--

INSERT INTO `steminfo` (`id`, `programname`, `date`, `programdescription`, `schoolinvolve`, `studentinvolve`, `company`, `companyname`, `schoolname`) VALUES
(7, 'adhd', '2021-01-12', 'dedrf', '3', 6, 'industry', 'dcde', 'smkpaka'),
(8, 'irwa', '2021-01-19', 'asd', '3', 3, 'industry', 'fsd', 'smkpaka');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `schoolname` varchar(100) NOT NULL,
  `schoolemail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`schoolname`, `schoolemail`, `password`) VALUES
('smkpaka', 'paka@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `steminfo`
--
ALTER TABLE `steminfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`schoolemail`),
  ADD UNIQUE KEY `schoolname` (`schoolname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `steminfo`
--
ALTER TABLE `steminfo`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
