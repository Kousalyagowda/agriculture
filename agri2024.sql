-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 08:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agri2024`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('a@g.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `fapply`
--

CREATE TABLE `fapply` (
  `sid` varchar(100) DEFAULT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `doapply` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fapply`
--

INSERT INTO `fapply` (`sid`, `sname`, `doapply`, `email`) VALUES
('2', 'asdfasdf', '29-03-24 08:29:18', 'a@g.com');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `fname` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`fname`, `mobile`, `email`, `password`) VALUES
('kousalya', '7676609655', 'kousalyagowda2000@gmail.com', 'kk'),
('aa', '7676609655', 'a@g.com', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer`
--

CREATE TABLE `fertilizer` (
  `fid` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `rate` varchar(100) DEFAULT NULL,
  `updatedate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fertilizer`
--

INSERT INTO `fertilizer` (`fid`, `fname`, `rate`, `updatedate`) VALUES
('1', 'aa', '32', 'asdfas');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `slno` varchar(100) DEFAULT NULL,
  `question` varchar(100) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`slno`, `question`, `ans`, `status`, `email`) VALUES
('1', 'aaaaa', 'aaaaaa', 'REPLIED', 'a@g.com');

-- --------------------------------------------------------

--
-- Table structure for table `seeds`
--

CREATE TABLE `seeds` (
  `seedid` varchar(100) DEFAULT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `rate` varchar(100) DEFAULT NULL,
  `updatedate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seeds`
--

INSERT INTO `seeds` (`seedid`, `sname`, `rate`, `updatedate`) VALUES
('1', 'asdf', '234', 'sadfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `subsidy`
--

CREATE TABLE `subsidy` (
  `sid` varchar(100) DEFAULT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `criteria` varchar(100) DEFAULT NULL,
  `lastdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subsidy`
--

INSERT INTO `subsidy` (`sid`, `sname`, `criteria`, `lastdate`) VALUES
('1', 'aa', 'aaa', 'aaa'),
('2', 'asdfasdf', 'asdfas', 'asdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
