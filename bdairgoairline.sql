-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 03:11 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdairgoairline`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Userid` varchar(20) NOT NULL,
  `flightid` varchar(20) NOT NULL,
  `companyname` varchar(30) NOT NULL,
  `issuedate` varchar(20) NOT NULL,
  `expiredate` varchar(20) NOT NULL,
  `passenger` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Userid`, `flightid`, `companyname`, `issuedate`, `expiredate`, `passenger`) VALUES
('Siblu', '9wc2001', 'NOVOAIR', '2017-09-16', '2017-09-18', '2'),
('Siblu', '9wc2001', 'NOVOAIR', '2017-09-16', '2017-09-18', '3'),
('Siblu', '9wc2001', 'NOVOAIR', '2017-09-16', '2017-09-18', '3'),
('Siblu', '9w125', 'US BANGLA', '2017-09-17', '2017-09-19', '3'),
('Siblu', '9wc2001', 'NOVOAIR', '2017-09-17', '2017-09-19', '3'),
('Siblu', '9w118', 'US BANGLA', '2017-09-17', '2017-09-19', '3'),
('Siblu', '9wc2001', 'NOVOAIR', '2017-09-18', '2017-09-20', '2'),
('Siblu', '9wc2001', 'NOVOAIR', '2017-09-18', '2017-09-20', '4'),
('Siblu', '9w119', 'US BANGLA', '2017-09-18', '2017-09-20', '3');

-- --------------------------------------------------------

--
-- Table structure for table `companyinfo`
--

CREATE TABLE `companyinfo` (
  `company id` varchar(25) NOT NULL,
  `company name` varchar(25) NOT NULL,
  `company address` varchar(100) NOT NULL,
  `contact number` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companyinfo`
--

INSERT INTO `companyinfo` (`company id`, `company name`, `company address`, `contact number`) VALUES
('311', 'US BANGLA', 'Sohrawardi Avenue, Baridhara Diplomatic Zone \r\nDhaka - 1212, Bangladesh.', '(880-2)8822608'),
('312', 'NOVOAIR', 'House-50, Road-11, Block-F, Banani, Dhaka ', '+88-09666722224'),
('313', 'Biman Bangladesh', 'Hajj Office Premises (Ground Floor)\r\nOpposite Hazrat Shahjalal Int’l Airport\r\nAshkona, Dhaka-1230', '+ 88-02-7913725'),
('314', 'EASY FLY EXPRESS', 'Easy Fly Express Limited. Airlines, Bangladesh. Dhaka; ', '+88 02 9884141-43'),
('315', 'REGENT AIRWAYS', 'SA Tower (Level-5), Plot#1, Road#134, Block SE(A), Gulshan-1, Dhaka - 1212, Bangladesh.', '+880 1730-358820');

-- --------------------------------------------------------

--
-- Table structure for table `executiveinfo`
--

CREATE TABLE `executiveinfo` (
  `executiveid` varchar(25) NOT NULL,
  `personid` varchar(25) NOT NULL,
  `company id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `executiveinfo`
--

INSERT INTO `executiveinfo` (`executiveid`, `personid`, `company id`) VALUES
('112', '02', '312'),
('113', '03', '313'),
('114', '04', '314'),
('115', '05', '315'),
('05', '05', '311'),
('06', '05', '311'),
('Projna007', 'Projna', '311'),
('1123', '05', '311'),
('111', '01', '312');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flight id` varchar(25) NOT NULL,
  `company id` varchar(25) NOT NULL,
  `departure` varchar(25) NOT NULL,
  `arrival` varchar(25) NOT NULL,
  `price` varchar(25) NOT NULL,
  `total seat` varchar(25) NOT NULL,
  `Date` varchar(25) NOT NULL,
  `time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight id`, `company id`, `departure`, `arrival`, `price`, `total seat`, `Date`, `time`) VALUES
('9w00117', '314', 'Dhaka', 'chittagong', '3000', '180', '2017-12-10', '07.45'),
('9w00118', '314', 'chittagong', 'dhaka', '3000', '187', '2017-12-10', '07.45'),
('9w111', '311', 'Dhaka', 'sylhet', '4200', '120', '2017-12-09', '12.15'),
('9w112', '311', 'sylhet', 'dhaka', '4000', '150', '2017-12-12', '12.15'),
('9w113', '311', 'Dhaka', 'Saidpur', '3200', '49', '2017-12-13', '7.20'),
('9w114', '311', 'Dhaka', 'Chittagong', '5000', '120', '2017-12-12', '8.20'),
('9w115', '311', 'Dhaka', 'Jessore', '6000', '80', '2017-12-11', '9.20'),
('9w116', '311', 'Dhaka', 'Rajshahi', '5000', '120', '2017-12-13', '16.50'),
('9w118', '311', 'Dhaka', 'Saidpur', '3200', '80', '2017-12-14', '12.20'),
('9w119', '311', 'Dhaka', 'Saidpur', '3200', '80', '2017-12-11', '16.50'),
('9w120', '311', 'Dhaka', 'Saidpur', '3500', '1', '2017-12-09', '16.40'),
('9w125', '311', 'Dhaka', 'Coxs Bazar', '7000', '137', '2017-12-12', '22:00'),
('9w273', '315', 'Dhaka', 'khulna', '4000', '100', '2017-12-14', '10.45'),
('9w274', '315', 'khulna', 'dhaka', '4000', '100', '2017-12-13', '10.45'),
('9wc2001', '312', 'Dhaka', 'jessore', '3200', '91', '2017-12-13', '16.15'),
('9wc2005', '312', 'jessore', 'dhaka', '3000', '100', '2017-12-14', '16.15'),
('9wqqs', '312', 'Dhaka', 'Saidpur', '3500', '100', '2017-12-13', '12:00'),
('BB113', '313', 'Dhaka', 'Coxs Bazar', '7000', '117', '2017-12-10', '17.45'),
('BB114', '313', 'Dhaka', 'Coxs Bazar', '7000', '120', '2017-12-10', '10.00'),
('BB115', '313', 'Dhaka', 'Coxs Bazar', '7000', '120', '2017-12-10', '7.10'),
('BB116', '313', 'Coxs Bazar', 'Dhaka', '7000', '116', '2017-12-10', '17.45');

-- --------------------------------------------------------

--
-- Table structure for table `payment method`
--

CREATE TABLE `payment method` (
  `payment method id` varchar(25) NOT NULL,
  `payment method` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment method`
--

INSERT INTO `payment method` (`payment method id`, `payment method`) VALUES
('2789654', 'bkash'),
('024410679211', 'rocket'),
('9442218440', 'card');

-- --------------------------------------------------------

--
-- Table structure for table `payment method card`
--

CREATE TABLE `payment method card` (
  `person id` varchar(25) NOT NULL,
  `payment method` varchar(25) NOT NULL,
  `card number` varchar(25) NOT NULL,
  `expiry date` varchar(25) NOT NULL,
  `card holder name` varchar(25) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `email of the card holder` varchar(25) NOT NULL,
  `contact number` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment method card`
--

INSERT INTO `payment method card` (`person id`, `payment method`, `card number`, `expiry date`, `card holder name`, `cvv`, `email of the card holder`, `contact number`) VALUES
('01', 'card', '000011112222', '12/12/2050', 'anne alex', '321', 'anne@gamil.com', '01478520017');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `DOB` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `persontypeid` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phn` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `address`, `DOB`, `password`, `persontypeid`, `email`, `phn`) VALUES
('01', 'anne crew', '22,#9/d,dhanmondi,dhaka', '12/12/90', 'abc', '02', 'anne@gmail.com', '01475410258'),
('02', 'JORG FEANG', '17,flat-g1,kolabagan,dhaka-1215', '12/1/90', '12a', '02', 'jorg@gmail.com', '01474747474'),
('05', 'Kristen fanning', '17,flat-g1,uttara,dhaka-1215', '12/02/1976', 'asasassas', '02', 'kristen@gmail.com', '014755233212'),
('Akash', 'Mr.Anisur rahmanAkash', 'Khilkhet,Dhaka', '1996-08-13', '123456789', '03', 'ar156403@gmail.com', '01748555106'),
('Siblu', ' Mr. Siblu  Rahman', 'Nukali,Sirajganj', '1994-07-21', '123456789', '01', 'siblu@gmail.com', '01452223355'),
('Projna', ' Ms. Projna Saha', 'Farmgate,Dhaka', '1996-06-24', '123456789', '02', 'projnavampire@gmail.com', '01111112222'),
('Showmik', ' Mr. Showmik abc', 'dhaka', '2015-12-01', '12345678', '01', 'md.showmik@gmail.com', '01833451951'),
('1234', ' MD. sasad asdada', 'sasdasd', '2015-12-09', '123456789', '01', 'a@gmail.com', '017453333333'),
('Alif', ' MD. Ashraful Islam Alif', 'Nukali', '2002-07-11', '123456789', '01', 'alif@gmail.com', '017485555');

-- --------------------------------------------------------

--
-- Table structure for table `persontype`
--

CREATE TABLE `persontype` (
  `persontype id` varchar(25) NOT NULL,
  `perssontypename` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persontype`
--

INSERT INTO `persontype` (`persontype id`, `perssontypename`) VALUES
('01', 'Client'),
('02', 'Executive'),
('03', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `flightid` varchar(25) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `companyname` varchar(25) NOT NULL,
  `issuedate` varchar(25) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `paymenttype` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`flightid`, `userid`, `companyname`, `issuedate`, `amount`, `paymenttype`) VALUES
('9w113', 'Siblu', 'US BANGLA', '2017-09-17', '9600', 'card'),
('9wc2001', 'Siblu', 'NOVOAIR', '2017-09-17', '9600', 'card'),
('9w113', 'Siblu', 'US BANGLA', '2017-09-17', '12800', 'card'),
('9wc2001', 'Showmik', 'NOVOAIR', '2017-09-17', '9600', 'card'),
('9wc2001', 'Showmik', 'NOVOAIR', '2017-09-17', '9600', 'card'),
('9w125', 'Siblu', 'US BANGLA', '2017-09-18', '28000', 'card'),
('9w125', 'Siblu', 'US BANGLA', '2017-09-18', '21000', 'bKASH'),
('9w125', 'Siblu', 'US BANGLA', '2017-09-18', '21000', 'bKASH'),
('BB113', 'Siblu', 'Biman Bangladesh', '2017-09-18', '21000', 'bKASH'),
('9w125', 'Siblu', 'US BANGLA', '2017-09-18', '21000', 'bKASH'),
('BB116', 'Siblu', 'Biman Bangladesh', '2017-09-18', '28000', 'card'),
('9w00118', 'Siblu', 'EASY FLY EXPRESS', '2017-09-18', '9000', 'card'),
('9w113', 'Siblu', 'US BANGLA', '2017-09-18', '9600', 'bKASH'),
('9w120', 'Alif', 'US BANGLA', '2017-12-03', '7000', 'bKASH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flight id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
