-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 05:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sejal`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `username` char(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` char(100) NOT NULL,
  `last_name` char(100) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `about_me` varchar(500) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `skills` varchar(500) DEFAULT NULL,
  `course` varchar(500) DEFAULT NULL,
  `projects` varchar(500) DEFAULT NULL,
  `phone_no` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` char(100) NOT NULL,
  `pincode` int(6) NOT NULL,
  `department` varchar(100) NOT NULL,
  `country` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`username`, `password`, `first_name`, `last_name`, `emp_id`, `designation`, `about_me`, `experience`, `skills`, `course`, `projects`, `phone_no`, `email`, `address`, `city`, `pincode`, `department`, `country`) VALUES
('lilybeck', 'password', 'Lily', 'Password', 18101, NULL, NULL, NULL, NULL, NULL, NULL, 1111111111, 'lilybeck@gmail.com', 'Park Street, Ravet', 'Pimpri Chinchwad', 422044, 'Marketing', 'India'),
('sejalpawar', 'password', 'Sejal', 'Pawar', 18105, 'Web Development Intern', 'Hello, my name is Sejal Pawar. I am currently pursuing B.Tech CSE at D Y Patil International University. I am also a Web Development Intern at Agarwal Fashion Creations Pvt Ltd. I am a dedicated Front End Developer eager to apply practical skills in software development and problem-solving.', '2 Months App Development Internship at CodSoft.', 'HTML <br>\r\nCSS <br>\r\nJavaScript <br>\r\nSQL', 'Cloud Computing', '1. Online Organ Donation Management System <br>\r\n2. Online Shopping Website', 134567890, 'sejalpawar@gmail.com', 'Tulip Street, Nashik, Maharashtra.', 'Nashik', 422101, 'IT Department', 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
