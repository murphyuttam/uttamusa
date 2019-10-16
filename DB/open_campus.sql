-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 06:17 PM
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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `gmail`, `mobile`, `message`) VALUES
('paras sachan', 'parassachan26@gmail.com', '7054893827', 'hello i am superstra'),
('paras sachan', 'parassachan26@gmail.com', '7054893827', 'dafcc'),
('paras sachan', 'parassachan26@gmail.com', '7054893827', 'sir i have a problem on networking');

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
('apple', 'ceo', '5', 'Diploma', 'Bhopal', 'fg', '2019-10-01', 'tdtg'),
('apple', 'hr', '5', 'Degree', 'Jablpur', 'hiuds', '2019-10-10', 'gwaduga');

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
('uttam patel ', 'uttampatel6421@gmail.com', '9509186126', '6421', '6421', 0),
('keshav mansure', 'keshavmansure@gmail.com', '7089826162', '6162', '6162', 0),
('Paras sachan', 'parassachan26@gmail.com', '7054863827', '123456', '123456', 0);

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
  `qualification` varchar(20) NOT NULL,
  `r_cv` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`fn`, `dob`, `r_photos`, `gender`, `email`, `mobile`, `address`, `qualification`, `r_cv`) VALUES
('zeeshan', '2019-10-03', 0x646f776e6c6f61642e6a666966, 'm', 'alizeeshan@gmai', '88888888', 'r65ry', '10+2', 0x6f70656e5f63616d7075732e73716c),
('zeeshan', '2019-10-04', 0x646f776e6c6f61642e6a666966, 'm', 'alizeeshan@gmai', '555555', 'rgsg', '10+2', 0x6f70656e5f63616d707573202831292e73716c);

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
