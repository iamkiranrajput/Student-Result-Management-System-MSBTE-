-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 01:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `lastname` varchar(10) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `examination` varchar(20) NOT NULL,
  `seatno` int(10) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `course` varchar(40) NOT NULL,
  `sub1` varchar(40) NOT NULL,
  `sub1these` int(20) NOT NULL,
  `sub1thpa` int(20) NOT NULL,
  `sub1prese` int(20) NOT NULL,
  `sub1prpa` int(11) NOT NULL,
  `sub2` varchar(40) NOT NULL,
  `sub2these` int(11) NOT NULL,
  `sub2thpa` int(11) NOT NULL,
  `sub2prese` int(11) NOT NULL,
  `sub2prpa` int(11) NOT NULL,
  `sub3` varchar(40) NOT NULL,
  `sub3these` int(11) NOT NULL,
  `sub3thpa` int(11) NOT NULL,
  `sub3prese` int(11) NOT NULL,
  `sub3prpa` int(11) NOT NULL,
  `sub4` varchar(40) NOT NULL,
  `sub4these` int(11) NOT NULL,
  `sub4thpa` int(11) NOT NULL,
  `sub4prese` int(11) NOT NULL,
  `sub4prpa` int(11) NOT NULL,
  `sub5` varchar(40) NOT NULL,
  `sub5prese` int(11) NOT NULL,
  `sub5prpa` int(11) NOT NULL,
  `enrollmentno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`seatno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
