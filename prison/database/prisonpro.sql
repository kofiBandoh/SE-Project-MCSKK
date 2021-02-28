-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 04:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prisonpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `Admin_Id` int(11) NOT NULL,
  `Admin_Name` varchar(20) NOT NULL,
  `Admin_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`Admin_Id`, `Admin_Name`, `Admin_Password`) VALUES
(2, 'admin', 'admin'),
(4, 'admin1', 'acae41ccab36a545a6c5');

-- --------------------------------------------------------

--
-- Table structure for table `criminals`
--

CREATE TABLE `criminals` (
  `id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `passport_id` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `jail_date` date NOT NULL,
  `address` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `offence` varchar(40) NOT NULL,
  `sentence` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criminals`
--

INSERT INTO `criminals` (`id`, `f_name`, `l_name`, `passport_id`, `dob`, `jail_date`, `address`, `country`, `gender`, `offence`, `sentence`) VALUES
(1, 'Kwame', 'Judas', 'AB-12345678', '1975-01-01', '2001-02-03', 'GT-536-60', 'India', 'Male', 'Theft', '4 years'),
(2, 'Runtown', 'Parker', 'BC-62343648', '1985-04-01', '2011-04-03', 'VT-546-60', 'China', 'Male', 'Fraud', '6 years'),
(3, 'John', 'Scott', 'AB-72945375', '1988-07-26', '1999-12-03', 'GT-455-58', 'Jamaica', 'Male', 'Assault', '1 year'),
(4, 'Jesse', 'Lingard', 'CD-887645678', '1977-01-06', '2005-07-05', 'GT-443-60', 'Uganda', 'Male', 'Fraud', '2 years'),
(5, 'Kanye', 'West', 'BA-09385678', '1971-03-04', '2012-02-03', 'GT-563-60', 'Ghana', 'Male', 'Theft', '4 years'),
(6, 'Amy', 'Santiago', 'FF-11445678', '1980-08-10', '2011-06-05', 'GT-774-60', 'China', 'Female', 'Child abuse', '3 years'),
(7, 'Robin', 'Scherbatski', 'AB-53785678', '1975-11-01', '2014-04-06', 'RT-787-60', 'Canada', 'Female', 'Racketeering', '3 years'),
(8, 'Michael', 'Essien', 'AB-84728393', '1965-11-11', '2001-12-03', 'GT-455-60', 'Brazil', 'Male', 'Theft', '4 years'),
(9, 'Cristiano', 'Ronaldo', 'RR-52672618', '1987-12-01', '2012-12-03', 'GT-749-60', 'Portugal', 'Male', 'Racketeering', '4 years'),
(10, 'Kwame', 'Despite', 'FT-37293892', '1990-02-11', '2020-12-03', 'GT-334-60', 'Ghana', 'Male', 'Money Laundering', '4 years'),
(11, 'Shatta', 'Michy', 'DC-38283830', '1977-02-12', '2011-12-03', 'GT-3820-60', 'Nigeria', 'Female', 'Domestic Violence', '10 years'),
(12, 'Jessica', 'Ross', 'AB-46785075', '2006-02-15', '2021-02-03', 'GR-4560-40', 'Japan', 'Female', 'Theft', '3 years');

-- --------------------------------------------------------

--
-- Table structure for table `jailor`
--

CREATE TABLE `jailor` (
  `id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `passport_id` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `shift` varchar(15) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jailor`
--

INSERT INTO `jailor` (`id`, `f_name`, `l_name`, `passport_id`, `dob`, `phone_number`, `shift`, `start_time`, `end_time`) VALUES
(1, 'Travis', 'Scott', 'AB-74839023', '1988-07-16', '0248392384', 'Day', '08:00:00', '16:00:00'),
(2, 'John', 'Cena', 'AB-38374647', '1993-06-07', '0279483200', 'Night', '19:00:00', '23:00:00'),
(3, 'Kwame', 'Ebo', 'AB-42920490', '1983-08-09', '0248392748', 'Night’', '18:00:00', '20:00:00'),
(4, 'Kawhi', 'Leonard', 'TB-39038478', '1993-11-09', '028399293', 'Night', '19:00:00', '22:00:00'),
(5, 'Joseph', 'Barkley', 'GY-49203940', '1977-08-09', '0233849380', 'Day', '09:00:00', '16:00:00'),
(6, 'Esi', 'Agyeman', 'GS-82930932', '1977-03-10', '0284928374', 'Day', '09:00:00', '14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jailor_login`
--

CREATE TABLE `jailor_login` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jailor_login`
--

INSERT INTO `jailor_login` (`id`, `username`, `password`) VALUES
(1, 'user', 'code101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `criminals`
--
ALTER TABLE `criminals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `passport_id` (`passport_id`);

--
-- Indexes for table `jailor`
--
ALTER TABLE `jailor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jailor_login`
--
ALTER TABLE `jailor_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `criminals`
--
ALTER TABLE `criminals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jailor`
--
ALTER TABLE `jailor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jailor_login`
--
ALTER TABLE `jailor_login`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
