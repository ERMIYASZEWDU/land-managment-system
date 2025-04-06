-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 07:00 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--
CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `message` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`,`phone`, `message`) VALUES
(1, 'bereket galif', 'galif@gmail.com', '0915146374', 'thank you');

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `firstname` varchar(25) DEFAULT NULL,
  `middlename` varchar(25) DEFAULT NULL,
  `contact` varchar(25) DEFAULT NULL,
  `address` varchar(25) DEFAULT NULL,
  `permission` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(200) DEFAULT 0,
  `Cpassword` varchar(200) DEFAULT 0,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `username`, `firstname`,`middlename`, `contact`,`address`, `permission`,`email`, `password`,`Cpassword`, `login_time`, `logout_time`, `status`) VALUES
(1, 'root', 'beki', 'beki', '0915262749', 'no', 'admin', 'beki@gmail.com','$2b$12$X3tsEdoWsAWX.PrWgJmSZeEwBE8.KNxxEa9WdDHoklCLifUq7mBs6','$2b$12$X3tsEdoWsAWX.PrWgJmSZeEwBE8.KNxxEa9WdDHoklCLifUq7mBs6', '2020-03-12 16:23:01', '2020-03-12 16:23:01',1),
(2, 'nati', 'nati', 'beki', '0937467662', 'no', 'register_officer', 'nati@gmail.com','$2b$12$X3tsEdoWsAWX.PrWgJmSZeEwBE8.KNxxEa9WdDHoklCLifUq7mBs6',  '$2b$12$X3tsEdoWsAWX.PrWgJmSZeEwBE8.KNxxEa9WdDHoklCLifUq7mBs6', '2020-03-12 16:23:01', '2020-03-12 16:23:01',1);

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) DEFAULT NULL,
  `fathername` varchar(25) DEFAULT NULL,
  `grandfathername` varchar(25) DEFAULT NULL,
  `sex` char(20) DEFAULT NULL,
  `age` int(25) DEFAULT NULL,
  `martial_status` char(25) DEFAULT NULL,
  `contact`varchar(25) DEFAULT NULL,
  `family_role` char(25) DEFAULT NULL,
  `parcel_no` varchar(25) DEFAULT NULL,
  `holding_type` char(25) DEFAULT NULL,
  `area` float(40) DEFAULT 0,
  `kebele` varchar(40) DEFAULT 0,
  `id/passport` varchar(35) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `physical_impairment` char(30) DEFAULT NULL,
  `status` int(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `fathername`,`grandfathername`, `sex`,`age`, `martial_status`,`contact`, `family_role`,`parcel_no`, `holding_type`, `area`, `kebele`, `id/passport`, `photo`, `physical_impairment`, `status`) VALUES
(1, 'kebede', 'arega', 'teka', 'male', '45', 'married','072345553523', 'husband','OR010101010101','privet','184', 'dipo', '','', 'Not disabled',1),
(2, 'tigest', 'hayla', 'grma', 'female', '30', 'married','0723747523','wife', 'OR010101010102','privet','201', 'piyasa', '','', 'Not disabled',1),
(3, 'bona', 'shmels', 'rgasa', 'male', '29', 'single','07245773523', '','OR010101010103','privet','258', 'sabiyan', '','', 'Not disabled',1),
(4, 'ibsa', 'ali', 'smuya', 'male', '34', 'married','072375273523','husband', 'OR010101010104','privet','420', 'dipo', '','', 'Not disabled',1),
(5, 'sultan', 'mohamed', 'ali', 'male', '40', 'married','0747475273523','husband', 'OR010101010105','privet','354', 'piyasa', '','', 'Not disabled',1),
(6, 'selam', 'wyesa', 'temesgen', 'female', '47', 'married','072474773523','wife', 'OR010101010106','privet','296', 'sabiyan', '','', 'Not disabled',1),
(7, 'bekele', 'alemayew', 'ali', 'male', '51', 'married','072344545773523','husband', 'OR010101010107','privet','342', 'gefersa', '','', 'Not disabled',1);

--
-- Table structure for table `user_activity`
--

CREATE TABLE user_activity (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_tbl_id INT,
    login_time DATETIME,
    logout_time DATETIME
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_activity`
--

INSERT INTO user_activity (user_tbl_id, login_time, logout_time) VALUES 
(1, '2023-05-25 12:34:56', NULL),
(2, '2023-05-25 12:34:56', NULL);


--
-- Table structure for table `DOC_Cadastral_Map`
--

CREATE TABLE `DOC_Cadastral_Map` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `source_agency` VARCHAR(255) NOT NULL,
    `date` DATE,
    `acceptance_date` DATE,
    `expiration_date` DATE,
    `signing_date` DATE,
    `attachment` VARCHAR(255),
    `description` TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `CREATE_USER_ACCOUNT`
--

CREATE TABLE `CREATE_USER_ACCOUNT` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` text(50),
  `Gender` text(10),
  `E_mail` varchar(50),
  `Father_name` text(50),
  `permission` text(50),
  `Phone` int(12),
  `Password` varchar(25),
  `Confirm_Password` varchar(25),
  `Image` varchar(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `DOC_Cadastral_Survey`
--

CREATE TABLE `DOC_Cadastral_Survey` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Source_Agency` text(100) NOT NULL,
  `Date` varchar(30) DEFAULT NULL,
  `Acceptance_Date` varchar(30) DEFAULT NULL,
  `Expiration_Date` varchar(30) DEFAULT NULL,
  `Signing_Date` varchar(30) DEFAULT NULL,
  `Attachment` varchar(50) DEFAULT NULL,
  `Description` text(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Table structure for table `Fee`
--

CREATE TABLE Fee (
  id INT AUTO_INCREMENT PRIMARY KEY,
  Total_Tax_Fee DECIMAL(10, 2) NOT NULL, -- Example: DECIMAL for monetary values with precision 10 and scale 2
  Total_Service_Fee DECIMAL(10, 2), -- Example: Nullable decimal field
  Total_Fee DECIMAL(10, 2), -- Example: Nullable decimal field
  Paid_Amount DECIMAL(10, 2), -- Example: Nullable decimal field
  Receipt VARCHAR(30) -- Example: Nullable field with VARCHAR datatype
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Table structure for table `DOC_Tax_Payment`
--

CREATE TABLE DOC_Tax_Payment (
  id INT AUTO_INCREMENT PRIMARY KEY,
  Source_Agency VARCHAR(100) NOT NULL,
  Date DATE DEFAULT NULL,
  Acceptance_Date DATE DEFAULT NULL,
  Expiration_Date DATE DEFAULT NULL,
  Signing_Date DATE DEFAULT NULL,
  Attachment VARCHAR(500) DEFAULT NULL,
  Description VARCHAR(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

COMMIT;
