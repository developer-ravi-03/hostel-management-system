-- phpMyAdmin SQL Dump
-- version 5.2.2-dev+20241021.bad51f0142
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 01:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `cpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `middle_name`, `last_name`, `mobile`, `email`, `pass`, `cpass`) VALUES
(1, 'Ravi ', '', 'Kumar', '7631339831', 'admin', 'admin123', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `filename` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `roll_no` int(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `session` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cpass` varchar(10) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `date` varchar(100) NOT NULL,
  `hostel_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `first_name`, `middle_name`, `last_name`, `filename`, `father_name`, `gender`, `date_of_birth`, `roll_no`, `branch`, `semester`, `session`, `mobile`, `password`, `cpass`, `e_mail`, `address`, `date`, `hostel_status`) VALUES
(26, 'Ravi', '', 'Kumar', '', 'Veer Kishor Yadav', 'male', '2005-10-01', 7, 'CSE', 'sixth', '2020-23', '7631339831', '123', '123', 'ravibseb96@gmail.com', 'SS.014.0069,Ram nagar', '18-04-23', 0),
(28, 'AJIT', 'KUMAR', 'JHA', '', 'G K JHA', 'male', '0008-01-08', 8, 'CSE', 'first', '2020-23', '8083772722', '123', '123', 'AJIT@GMAIL.COM', 'SS.014.0069,Ram nagar', '20-04-23', 0),
(29, 'Riya', '', 'Gupta', '', 'manoj kumar singh', 'female', '2005-10-03', 67, 'Electrical', 'third', '2020-23', '9608725932', '123', '123', 'ravibseb76@gmail.com', 'SS.014.0069,Ram nagar', '20-04-23', 0),
(33, 'Madan', '', 'Kumar', '', 'raju singh', 'male', '2003-05-04', 90, 'Mechanical', 'sixth', '2020-23', '7631339834', '123', '123', 'ravibseb989086@gmail.com', 'SS.014.0069,Ram nagar', '20-04-23', 0),
(40, 'hans', '', 'Kumar', '', 'Veer Kishor Yadav', 'male', '2005-04-09', 9, 'CSE', 'sixth', '2020-23', '763133968', '123', '123', 'ravibseb896@gmail.com', 'SS.014.0069,Ram nagar', '21-04-23', 0),
(42, 'sandeep', '', 'kumar', '', 'pankaj kumar singh', 'male', '2005-10-30', 4, 'Electrical', 'sixth', '2020-23', '9801572159', '123', '123', 'skgs9807@gmail.com', 'SS.014.0069,Ram nagar', '22-05-23', 0),
(43, 'richa ', '', 'sharma', '', 'madan kr', 'female', '2023-07-12', 89, 'Civil', 'third', '2020-23', '12345678', '123', '123', 'R@gmail.com', 'purnea', '16-07-23', 0),
(44, 'rakesh', '', 'kumar', '', 'G K JHA', 'female', '2023-08-24', 89, 'Electronics', 'third', '2020-23', '8900', '123', '123', 'yagjj@gmail.com', 'at-chhoti bhatgama,po-bhatgama,ps-chausa,madhepura', '03-08-23', 1),
(57, 'Ranveer', '', 'kumar', '', 'Ranjit  Yadav', 'male', '2023-06-15', 89, 'CSE', 'fourth', '2020-23', '9876353481', '123', '123', 'ravibseb748396@gmail.com', 'SS.014.0069,Ram nagar', '01-09-23', 0),
(58, 'Aman ', '', 'Dubey 1', '', 'Ram Kumar ', 'male', '2023-09-05', 78, 'CSE', 'sixth', '2020-23', '7853642678', '123', '123', 'rabksml@gmail.com', 'SS.014.0069,Ram nagar', '14-09-23', 0),
(59, 'Ravi', '', 'Kumar', '', ' dsfkjkl', 'male', '2024-08-14', 749, 'CSE', 'fifth', '2020-23', '096087259', '123', '123', 'on.pritikuma23@gmail.com', 'Bheekha tola, P.O - bhatgama, chausa , madhepura', '06-08-24', 0),
(60, 'Ravi', '', 'Kumar', '', 'Veer Kishor Yadav', 'male', '2024-09-18', 125426, 'CSE', 'sixth', '2020-23', '3421', '123', '123', 'ravibseb7987896@gmail.com', 'SS.014.0069,Ram nagar', '14-09-24', 0),
(61, 'Dhananjay ', 'Kumar', 'Yadav', '', 'Veer Kishor Yadav', 'male', '2005-10-03', 11233024, 'CSE', 'third', '2024-27', '77631339831', '123', '123', 'on.developerravi@gmail.com', 'Bheekha tola, P.O - bhatgama, chausa , madhepura', '03-11-24', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`,`email`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`e_mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
