-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 06:17 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `ACNO` varchar(50) NOT NULL,
  `PIN` varchar(50) DEFAULT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `FNAME` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PHNUMBER` varchar(50) DEFAULT NULL,
  `AMOUNT` varchar(50) DEFAULT NULL,
  `CITY` varchar(50) DEFAULT NULL,
  `STATE` varchar(50) DEFAULT NULL,
  `COUNTRY` varchar(50) DEFAULT NULL,
  `GENDER` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`ACNO`, `PIN`, `NAME`, `FNAME`, `EMAIL`, `PHNUMBER`, `AMOUNT`, `CITY`, `STATE`, `COUNTRY`, `GENDER`) VALUES
('SBI101', '1234', 'akhil', 'ramesh singh gsuain', 'akhilgsuain2@gmail.com', '7830773698', '7301', 'dehradun', 'uttarkhand', 'India', 'male'),
('SBI102', '54321', 'preeti gusain', 'ramesh singh gusain', 'preetigusain777@gtmail.com', '9760035374', '10183', 'dehradun', 'uttarkhand', 'India', 'female'),
('SBI103', '12345', 'tanuja gusain', 'dinesh gusain', 'tanujagusain@gmail.com', '8650185686', '193', 'dehradun', 'uttarkhand', 'India', 'female'),
('SBI104', '1234', 'naman ', 'rajesh thapliyal', 'namathapliyal57@gmail.com', '8630007951', '193', 'dehradun', 'uttarkhand', 'India', 'male'),
('SBI105', '1234', 'manisha gusain', 'ramesh singh gusain', 'gsuainmanisha777@gmail.com', '9639178801', '193', 'lansdowen', 'uttarkhand', 'India', 'female'),
('SBI106', '1234', 'akhil gusain', 'mr', 'akhilgusain2@gmail.com', '77888', '193', 'dehradun', 'uttarkhand', 'India', 'male'),
('SBI107', '1234', 'Tanuja', 'Dinesh', 'tanuja.gusain35@gmail.com', '8650185686', '193', 'Dehradun', 'uttarkhand', 'India', 'female'),
('SBI108', '1234', 'pawan', 'suraj rawat', 'pawanrawat@gmail.com', '7895312246', '193', 'dehradun', 'uttarkhand', 'India', 'male'),
('SBI109', '1234', 'bhaskar sharma', 'mr', 'bhaskar@gmail.com', '78945632', '10005000', 'dehradn', 'uttarkhand', 'India', 'male'),
('SBI110', '1234', 'mahaveer singh', 'mr', 'mahaveersinghrwwat@gmail.com', '789456321', '5055.55', 'dehradun', 'uttarkhand', 'India', 'male'),
('SBI111', '7894', 'juned', 'rahis', 'kjuned972@gmail.com', '8126871286', '20000', 'dehradun', 'uttarkhand', 'India', 'male'),
('SBI112', '123', 'me', 'he', '6yh6yy@gmai.com', '7895563757', '5000', 'dehradun', 'uttarkhand', 'India', 'female'),
('SBI113', '1234', 'gaurav', 'mc', 'gaurav@gmail.com', '12345', '131456', 'Haldwani', 'uttarkhand', 'India', 'male'),
('SBI114', '9759', 'akash', 'jsaj', 'jasi@gmail.com', '9491', '500', 'Lansdowne', 'uttarkhand', 'country   ', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `tran`
--

CREATE TABLE `tran` (
  `id` int(50) NOT NULL,
  `ACNO` varchar(50) DEFAULT NULL,
  `dt` varchar(50) DEFAULT NULL,
  `AMOUNT` varchar(50) DEFAULT NULL,
  `DS` varchar(50) DEFAULT NULL,
  `transaction_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tran`
--

INSERT INTO `tran` (`id`, `ACNO`, `dt`, `AMOUNT`, `DS`, `transaction_id`) VALUES
(17, 'SBI101', '21/09/21  12:41:00', '2000', 'transfer', '666555'),
(20, 'SBI102', '21/09/21  12:41:52', '2000', 'receive', '8888'),
(21, 'sbi101', '21/09/21  06:02:21', '2555', 'deposit', ''),
(22, 'Sbi105', '22/09/21  08:17:50', '10000', 'deposit', ''),
(23, 'SBI106', '24/09/21  09:31:11', '50000', 'deposit', ''),
(24, 'sbi102', '24/09/21  09:34:29', '100', 'Withdraw', ''),
(26, 'sbi101', '24/09/21  09:37:30', '40000', 'transfer', ''),
(27, 'sbi102', '24/09/21  09:37:30', '40000', 'receive', ''),
(28, 'sbi104', '24/09/21  10:21:56', '20', 'deposit', ''),
(29, 'SBI108', '28/09/21  03:26:50', '50000', 'deposit', ''),
(30, 'sbi109', '30/09/21  03:21:37', '500000', 'deposit', ''),
(31, 'sbi101', '01/10/21  07:36:33', '1000', 'transfer', ''),
(32, 'sbi102', '01/10/21  07:36:33', '1000', 'receive', ''),
(35, 'SBI111', '15/10/21  06:20:54', '400000', 'deposit', ''),
(37, 'sbi102', '15/10/21  06:27:14', '5000', 'receive', ''),
(73, 'SBI101', '22/10/21  09:19:29', '1000', 'deposit', ''),
(74, 'SBI101', '22/10/21  09:21:13', '100', 'Withdraw', ''),
(75, 'SBI101', '22/10/21  09:21:34', '100', 'Withdraw', ''),
(85, 'sbi112', '15/01/22  08:41:04', '10000', 'transfer', ''),
(86, 'sbi102', '15/01/22  08:41:04', '10000', 'receive', ''),
(87, 'sbi112', '15/01/22  08:43:53', '5000', 'transfer', ''),
(88, 'sbi101', '15/01/22  08:43:53', '5000', 'receive', ''),
(89, 'SBI110', '07/04/22  05:29:20', '5000', 'Withdraw', ''),
(90, 'SBI110', '07/04/22  05:30:15', '55.55', 'deposit', ''),
(91, 'SBI113', '21/06/22  08:58:26', '10000', 'deposit', ''),
(92, 'SBI113', '21/06/22  08:58:45', '2000', 'Withdraw', ''),
(93, 'SBI114', '21/06/22  09:42:16', '500', 'Withdraw', ''),
(94, 'SBI101', '09/07/22  12:04:31', '100', 'deposit', ''),
(95, 'SBI101', '09/07/22  12:59:11', '2000', 'deposit', ''),
(96, 'SBI101', '09/07/22  12:59:28', '100', 'deposit', ''),
(97, 'SBI101', '09/07/22  12:59:38', '100', 'deposit', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`ACNO`);

--
-- Indexes for table `tran`
--
ALTER TABLE `tran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tran`
--
ALTER TABLE `tran`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
