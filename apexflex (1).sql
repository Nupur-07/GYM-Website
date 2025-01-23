-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2025 at 07:42 PM
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
-- Database: `apexflex`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `Username` varchar(100) NOT NULL,
  `EmailID` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`Username`, `EmailID`, `Password`) VALUES
('Nupur', 'nupur2004@gmail.com', '123'),
('Prabh', 'prabh3038@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Name` varchar(100) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL,
  `Sex` varchar(100) NOT NULL,
  `Package` varchar(100) NOT NULL,
  `Activity` varchar(100) NOT NULL,
  `Duration` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Expdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Name`, `Email_ID`, `Phone`, `Sex`, `Package`, `Activity`, `Duration`, `Price`, `Date`, `Expdate`) VALUES
('amar', 'amar@gmail.com', 987650987, 'Male', 'Beginner Membership', 'Strength Training', '6 month', 8400, '2024-04-24', '2024-10-24'),
('gunmehak', 'gk123@gmail.com', 987650987, 'Female', 'Beginner Membership', 'Fat Burning', '2 month', 2800, '2024-04-08', '2024-06-08'),
('GUNMEHAK KAUR', 'GKAUR812@GMAIL.COM', 2147483647, 'Female', 'Pro Membership', 'Fat Burning', '2 year', 40000, '2024-04-10', '2026-04-10'),
('Harsh', 'harsh@gmail.com', 987654456, 'Male', 'Beginner Membership', 'Strength Training', '6 month', 8400, '2024-04-15', '2024-10-15'),
('nupur', 'nupur123@gmail.com', 987650987, 'Female', 'Intermediate Membership', 'Strength Training', '6 month', 9600, '2024-04-22', '2024-10-22'),
('nupur', 'nupur@gmail.com', 987654321, 'Female', 'Beginner Membership', 'Cardio Training', '6 month', 8400, '2024-04-08', '2024-10-08'),
('PRABHJOT SINGH', 'prabh@gmail.com', 987650987, 'Male', 'Intermediate Membership', 'Strength Training', '1 year', 17000, '2024-04-08', '2025-04-08'),
('sahil', 'sahil@gmail.com', 987654321, 'Male', 'Pro Membership', 'Strength Training', '6 month', 12000, '2024-04-15', '2024-10-15'),
('sakshi', 'sakshi@gmail.com', 987654321, 'Female', 'Beginner Membership', 'Fat Burning', '6 month', 8400, '2024-04-15', '2024-10-15'),
('temp1', 'temp1@gmail.com', 987654321, 'Male', 'Beginner Membership', 'Strength Training', '1 year', 15000, '2024-05-02', '2025-05-02'),
('Vardhan', 'vardhan@gmail.com', 987650987, 'Male', 'Pro Membership', 'Strength Training', '6 month', 12000, '2024-04-01', '2024-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `Name` varchar(100) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`Name`, `Email_ID`, `Password`) VALUES
('amar', 'amar@gmail.com', '123'),
('anjali', 'anjali@gmail.com', '123'),
('gunmehak', 'gk123@gmail.com', '123'),
('GUNMEHAK KAUR', 'GKAUR812@GMAIL.COM', 'GKAUR'),
('Harsh', 'harsh@gmail.com', '123'),
('nupur', 'nupur123@gmail.com', '123'),
('nupur', 'nupur@gmail.com', '123'),
('PRABHJOT SINGH', 'prabh@gmail.com', '123'),
('sahil', 'sahil@gmail.com', '123'),
('sakshi', 'sakshi@gmail.com', '123'),
('temp1', 'temp1@gmail.com', '123'),
('Vardhan', 'vardhan@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`EmailID`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Email_ID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`Email_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
