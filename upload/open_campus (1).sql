-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2019 at 08:00 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `open_campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `fn` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `cpass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fn`, `gmail`, `mob`, `pass`, `cpass`) VALUES
('keshav mansure', 'keshavmansure@gmail.com', '7089826162', '6162', '6162'),
('paras sachan', 'parassachan26@gmail.com', '7054893827', '8565', '8565'),
('uttam patel ', 'uttampatel6421@gmail.com', '9509186126', '6421', '6421');

-- --------------------------------------------------------

--
-- Table structure for table `opencamp`
--

CREATE TABLE `opencamp` (
  `cname` varchar(50) NOT NULL,
  `psname` varchar(50) NOT NULL,
  `psno` varchar(50) NOT NULL,
  `min` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opencamp`
--

INSERT INTO `opencamp` (`cname`, `psname`, `psno`, `min`, `city`, `addr`, `date`, `description`) VALUES
('gzhgs', 'svfd', '5', 'Degree', 'Indore', 'ghgjh', '0120-02-10', 'kjhfghjkl'),
('gug', 'jvh', '54', 'Diploma', 'Indore', 'njk', '0020-02-10', 'guihi'),
('gug', 'jvh', '54', 'Diploma', 'Indore', 'njk', '0020-02-10', 'guihi'),
('gzhgs', 'svfd', '-4', 'Degree', 'Bhopal', 'njk', '2000-02-10', 'tfytf'),
('gzhgs', 'svfd', '-4', 'Degree', 'Bhopal', 'njk', '2000-02-10', 'tfytf'),
('apple', 'hr', '8', 'Degree', 'Itarsi', 'new jurssy california', '2019-10-05', 'mat aana nhi hoga'),
('apple', 'hr', '8', 'Degree', 'Itarsi', 'new jurssy california', '2019-10-05', 'mat aana nhi hoga'),
('apple', 'ceo', '6', 'Degree', 'Jablpur', 'usa', '2019-10-10', 'mat aana'),
('apple', 'ceo', '6', 'Degree', 'Jablpur', 'usa', '2019-10-10', 'mat aana'),
('apple', 'ceo', '5', 'Diploma', 'Bhopal', 'fg', '2019-10-01', 'tdtg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fn` varchar(30) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `cpass` varchar(30) NOT NULL,
  `verify` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fn`, `gmail`, `mob`, `pass`, `cpass`, `verify`) VALUES
('paras sachan', 'paras@gmail.com', '7054893827', '1a1dc91c907325c69271ddf0c944bc', '827d043606ac6fb18e465b87ffa05e', 0),
('paras sachan', 'alizeeshan106@gmail.com', '7054893827', '1a1dc91c907325c69271ddf0c944bc', '827d043606ac6fb18e465b87ffa05e', 0),
('paras sachan', 'paras1@gmail.com', '7054893827', '123', '123', 0),
('uttam patel ', 'uttampatel6421@gmail.com', '9509186126', '6421', '6421', 0),
('keshav mansure', 'keshavmansure@gmail.com', '7089826162', '6162', '6162', 0);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `fn` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `r_photos` blob NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`fn`, `dob`, `r_photos`, `gender`, `email`, `mobile`, `address`, `qualification`) VALUES
('zeeshan', '2019-10-02', '', 'm', 'alizeeshan@gmai', '88888888', 'dgikl', '10+2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`gmail`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`gmail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
