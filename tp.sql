-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2018 at 11:35 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotelbooking`
--

CREATE TABLE `hotelbooking` (
  `Serial No` bigint(20) UNSIGNED NOT NULL,
  `Name` text NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `E-Mail` varchar(50) NOT NULL,
  `Check-In` date NOT NULL,
  `Check-Out` date NOT NULL,
  `Destination` text NOT NULL,
  `Other` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelbooking`
--

INSERT INTO `hotelbooking` (`Serial No`, `Name`, `Contact`, `E-Mail`, `Check-In`, `Check-Out`, `Destination`, `Other`) VALUES
(1, 'Samreen Rizvi', '2147483647', 'samreen9528@gmail.com', '0000-00-00', '0000-00-00', 'Hydrabad', 'No'),
(12, 'Vani Gangwar', '7398002326', 'vanii.gang@gmail.com', '2018-12-01', '2018-12-30', 'Lucknow', 'Home Visit'),
(19, 'Jitendra', '8985079576', 'jd@gmail.com', '2018-11-30', '2018-12-06', 'Goa', 'Ledu'),
(20, 't', '5r', 't', '2018-11-28', '2018-11-27', '5', 'tr'),
(21, 'Sharada', '987420414', 'sharada@gmail.com', '2018-11-21', '2018-11-14', 'Hydrabad', 'No'),
(22, '', '', '', '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `SerialNo` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `E.MailID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`SerialNo`, `Name`, `Contact`, `E.MailID`) VALUES
(29, 'rishi', '9876543210', 'vani@hgfgh.com'),
(31, 'Jitendra', '8985079576', 'jd@gmail.com'),
(32, 'Sharada', '835932842', 'sharada@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotelbooking`
--
ALTER TABLE `hotelbooking`
  ADD UNIQUE KEY `Serial No` (`Serial No`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`SerialNo`),
  ADD UNIQUE KEY `SerialNo` (`SerialNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotelbooking`
--
ALTER TABLE `hotelbooking`
  MODIFY `Serial No` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `SerialNo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
