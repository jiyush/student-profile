-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2017 at 01:36 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `enrollment` double NOT NULL,
  `password` varchar(30) NOT NULL,
  `con_password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `f_profession` varchar(50) NOT NULL,
  `m_profession` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `catogory` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact_num` double NOT NULL,
  `contact_num_opt` double NOT NULL,
  `email` varchar(50) NOT NULL,
  `p_street` varchar(50) NOT NULL,
  `p_city` varchar(30) NOT NULL,
  `p_state` varchar(30) NOT NULL,
  `p_pincode` double NOT NULL,
  `l_street` varchar(50) NOT NULL,
  `l_city` varchar(30) NOT NULL,
  `l_state` varchar(30) NOT NULL,
  `l_pincode` double NOT NULL,
  `ssc` float NOT NULL,
  `hsc` float NOT NULL,
  `guj_per` float NOT NULL,
  `guj_merit` float NOT NULL,
  `acpc_merit` float NOT NULL,
  `d2d_cgpa` float NOT NULL,
  `year_of_admission` varchar(30) NOT NULL,
  `d2d` varchar(20) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `division` varchar(30) NOT NULL,
  `sem` int(11) NOT NULL,
  `sem1` float NOT NULL,
  `sem2` float NOT NULL,
  `sem3` float NOT NULL,
  `sem4` float NOT NULL,
  `sem5` float NOT NULL,
  `sem6` float NOT NULL,
  `sem7` float NOT NULL,
  `sem8` float NOT NULL,
  `cpi` float NOT NULL,
  `cgpa` float NOT NULL,
  `tfws` varchar(20) NOT NULL,
  `commuting` varchar(20) NOT NULL,
  `hosteler` varchar(20) NOT NULL,
  `jnk` varchar(20) NOT NULL,
  `nss` varchar(20) NOT NULL,
  `ncc` varchar(20) NOT NULL,
  `account_num` double NOT NULL,
  `ifsc` varchar(20) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `bank_branch` varchar(30) NOT NULL,
  `adhar_num` double NOT NULL,
  `election_num` double NOT NULL,
  `seeded` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`enrollment`, `password`, `con_password`, `fname`, `mname`, `lname`, `father_name`, `mother_name`, `f_profession`, `m_profession`, `dob`, `blood_group`, `catogory`, `gender`, `contact_num`, `contact_num_opt`, `email`, `p_street`, `p_city`, `p_state`, `p_pincode`, `l_street`, `l_city`, `l_state`, `l_pincode`, `ssc`, `hsc`, `guj_per`, `guj_merit`, `acpc_merit`, `d2d_cgpa`, `year_of_admission`, `d2d`, `branch`, `division`, `sem`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`, `cpi`, `cgpa`, `tfws`, `commuting`, `hosteler`, `jnk`, `nss`, `ncc`, `account_num`, `ifsc`, `bank_name`, `bank_branch`, `adhar_num`, `election_num`, `seeded`) VALUES
(0, '', '', 'piyush', '', '', '', '', '', '', '0000-00-00', '', '', '', 0, 0, '', '', '', '', 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`enrollment`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
