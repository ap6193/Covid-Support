-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 05:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidsupport`
--

-- --------------------------------------------------------

--
-- Table structure for table `bedregister`
--

CREATE TABLE `bedregister` (
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Phno` text NOT NULL,
  `State` text NOT NULL,
  `Hospital` text NOT NULL,
  `Bed` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bedregister`
--

INSERT INTO `bedregister` (`Name`, `Email`, `Phno`, `State`, `Hospital`, `Bed`) VALUES
('Anushka0909', 'anushka1@gmail.com', '98978657', 'Kerala', 'ADITYANURSINGHOMEANDHERIÂ ', 2),
('Anushka0909', 'anushka1@gmail.com', '98978657', 'Kerala', 'ADITYANURSINGHOMEANDHERIÂ ', 2),
('Anushka0909', 'anushka1@gmail.com', '98978657', 'Kerala', 'ADITYANURSINGHOMEANDHERIÂ ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

CREATE TABLE `beds` (
  `Sno` double DEFAULT NULL,
  `State` varchar(100) DEFAULT NULL,
  `Total_beds` double DEFAULT NULL,
  `Hospitals_` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beds`
--

INSERT INTO `beds` (`Sno`, `State`, `Total_beds`, `Hospitals_`) VALUES
(1, 'India', 133854676, ''),
(2, 'Andhra Pradesh', 47686, 'ANANADAPURAM PHC CVC'),
(3, 'Arunachal Pradesh', 12690, 'CHC BORDUMSA'),
(4, 'Assam', 100295, 'ANCHALI MPHC'),
(5, 'Bihar', 90169, 'A N S HIGH SCHOOL BARH'),
(6, 'Chhattisgarh', 8044, 'BELADULA 18 PULS BILAIGARH'),
(7, 'Goa', 86286, 'CHC BICHOLIM'),
(8, 'Gujarat', 15619, 'CHC DHANDHUKA 1'),
(9, 'Haryana', 9192, 'ALAKHPURA PHC'),
(10, 'Jharkhand', 40909, 'APOLLO CLINIC 1'),
(11, 'Karnataka', 66209, 'DODDABALLAPURA UPHC COVAXIN'),
(12, 'Kerala', 127186, 'ANANTHAPURI HOSPITAL'),
(13, 'Madhya Pradesh', 77981, 'ACHALPUR GP BHAVAN'),
(14, 'Maharashtra', 66877, 'ADITYA NURSING HOME ANDHERI '),
(15, 'Manipur', 610, 'CHAKPIKARONG CHC'),
(16, 'Meghalaya', 2284, 'BATAW PHC'),
(17, 'Mizoram', 857, 'FARKAWN PHC SITE'),
(18, 'Nagaland', 941, 'LONGLENG DH'),
(19, 'Odisha', 915, 'GEETANJALI MEDICINE STORE '),
(20, 'Punjab', 93846, 'BAJAKHANA CHC'),
(21, 'Rajasthan', 96153, 'MP BIRLA HOSPITAL CHITTORGARH'),
(22, 'Sikkim', 141245, 'JORETHANG CHC'),
(23, 'Tamil Nadu', 8849, 'APOLLO CLINIC VALASARAVAKKAM'),
(24, 'Telangana', 16857, 'AGA-KHAN HEALTH CENTRE '),
(25, 'Tripura', 10664, 'AGNIPASA HSC'),
(26, 'Uttar Pradesh', 9946, 'AMETHI CHC 18 PLUS'),
(27, 'Uttarakhand', 8729, 'APHC BANBASA 18 TO 44'),
(28, 'West Bengal', 11159, 'AMRI DHAKURIA COVAXIN');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Name` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` text NOT NULL,
  `State` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Name`, `Email`, `Password`, `State`) VALUES
('Anushka0909', 'anushka1@gmail.com', 'Anu12345678@', 'Telangana'),
('arpu1234', 'arpita@gmail.com', 'arpita123', 'West Bengal'),
('Gayatri12', 'gayatri@gmail.com', 'Gayu1234@12', 'Kerala'),
('Grace123@', 'grace1@gmail.com', 'Gracy123', 'Telangana');

-- --------------------------------------------------------

--
-- Table structure for table `statewisecase`
--

CREATE TABLE `statewisecase` (
  `S_No` int(30) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Confirmed_Cases` double NOT NULL,
  `Active_Cases` double NOT NULL,
  `CuredDischarged` double NOT NULL,
  `Death` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statewisecase`
--

INSERT INTO `statewisecase` (`S_No`, `Date`, `State`, `Confirmed_Cases`, `Active_Cases`, `CuredDischarged`, `Death`) VALUES
(2, '9/21/21', 'Arunachal Pradesh', 74, 71, 3, 0),
(3, '9/21/21', 'Assam', 75, 71, 3, 1),
(4, '9/21/21', 'Mizoram', 84, 72, 10, 2),
(5, '9/21/21', 'Nagaland', 17, 95, 10, 2),
(6, '9/21/21', 'Manipur', 14, 99, 13, 2),
(7, '9/21/21', 'Meghalayah', 17, 120, 14, 3),
(8, '9/21/21', 'Sikkim', 18, 129, 14, 3),
(9, '9/21/21', 'Tripura', 16, 148, 15, 3),
(10, '9/21/21', 'Uttarakhand', 19, 171, 20, 4),
(11, '9/21/21', 'Mizora', 18, 231, 23, 4),
(12, '9/21/21', 'Himachal Pradesh', 36, 329, 24, 7),
(13, '9/21/21', 'Uttar Pradesh', 433, 402, 24, 7),
(14, '9/21/21', 'Madhya Pradesh', 492, 446, 37, 9),
(15, '9/21/21', 'Telangana', 519, 469, 40, 10),
(16, '9/21/21', 'Andhra Pradesh', 649, 593, 43, 13),
(17, '9/21/21', 'Odisha', 724, 640, 67, 17),
(18, '9/21/21', 'Bihar', 909, 810, 80, 19),
(19, '9/21/21', 'Chhattisgarh', 979, 867, 87, 25),
(20, '9/21/21', 'Goa', 1071, 942, 100, 29),
(21, '9/21/21', 'Madhya Pradesh', 1397, 1238, 124, 35),
(22, '9/21/21', 'Haryana', 1637, 1466, 133, 38),
(23, '9/21/21', 'Rajasthan', 1965, 1764, 151, 50),
(24, '9/21/21', 'West Bengal', 2301, 2088, 157, 56),
(25, '9/21/21', 'Karnataka', 2902, 2650, 184, 68),
(26, '9/21/21', 'Tamil Nadu', 3374, 3030, 267, 77),
(27, '9/21/21', 'Gujarat', 4067, 3666, 292, 109),
(28, '9/21/21', 'Kerala', 4421, 3981, 326, 114),
(29, '9/21/21', 'Maharashtra', 5194, 4643, 402, 149);

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `Sno` double DEFAULT NULL,
  `State` varchar(100) DEFAULT NULL,
  `Total_People__Vaccinated` double DEFAULT NULL,
  `Total_Sessions_Conducted` double DEFAULT NULL,
  `Total_Covaxin_` double DEFAULT NULL,
  `Total_CoviShield_` double DEFAULT NULL,
  `Total_Doses_remaining` double DEFAULT NULL,
  `Hospitals_` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`Sno`, `State`, `Total_People__Vaccinated`, `Total_Sessions_Conducted`, `Total_Covaxin_`, `Total_CoviShield_`, `Total_Doses_remaining`, `Hospitals_`) VALUES
(1, 'India', 133854676, 5437733, 16321015, 151983853, 168304868, ''),
(2, 'Andhra Pradesh', 476866, 33332, 53659, 423207, 596327, 'ANANADAPURAM PHC CVC'),
(3, 'Arunachal Pradesh', 126950, 12050, 0, 161160, 161160, 'CHC BORDUMSA'),
(4, 'Assam', 100295, 2779, 8370, 91925, 100295, 'ANCHALI MPHC'),
(5, 'Bihar', 901659, 37430, 41451, 860208, 1153646, 'A N S HIGH SCHOOL BARH'),
(6, 'Chhattisgarh', 86044, 2722, 1, 86043, 86044, 'BELADULA 18 PULS BILAIGARH'),
(7, 'Goa', 86286, 7200, 0, 101464, 101464, 'CHC BICHOLIM'),
(8, 'Gujarat', 1015619, 47141, 221149, 794470, 1234893, 'CHC DHANDHUKA 1'),
(9, 'Haryana', 99192, 3398, 3636, 95556, 99192, 'ALAKHPURA PHC'),
(10, 'Jharkhand', 40909, 2022, 0, 40909, 40909, 'APOLLO CLINIC 1'),
(11, 'Karnataka', 66209, 2190, 431, 65778, 66209, 'DODDABALLAPURA UPHC COVAXIN'),
(12, 'Kerala', 1271286, 274440, 16074, 1605757, 1621831, 'ANANTHAPURI HOSPITAL'),
(13, 'Madhya Pradesh', 377981, 8065, 42079, 335902, 401317, 'ACHALPUR GP BHAVAN'),
(14, 'Maharashtra', 66877, 2985, 0, 66877, 66877, 'ADITYA NURSING HOME ANDHERI '),
(15, 'Manipur', 682610, 15389, 5771, 676839, 687137, 'CHAKPIKARONG CHC'),
(16, 'Meghalaya', 21284, 534, 4, 21280, 21453, 'BATAW PHC'),
(17, 'Mizoram', 8557, 359, 0, 8557, 8557, 'FARKAWN PHC SITE'),
(18, 'Nagaland', 9941, 359, 1, 9940, 9941, 'LONGLENG DH'),
(19, 'Odisha', 9175, 382, 0, 9175, 9298, 'GEETANJALI MEDICINE STORE '),
(20, 'Punjab', 93846, 1872, 3806, 90040, 93846, 'BAJAKHANA CHC'),
(21, 'Rajasthan', 96153, 4686, 76, 96077, 97181, 'MP BIRLA HOSPITAL CHITTORGARH'),
(22, 'Sikkim', 141245, 3769, 2365, 138880, 141245, 'JORETHANG CHC'),
(23, 'Tamil Nadu', 8849, 206, 6, 8843, 9006, 'APOLLO CLINIC VALASARAVAKKAM'),
(24, 'Telangana', 116857, 7213, 2076, 114781, 116857, 'AGA-KHAN HEALTH CENTRE '),
(25, 'Tripura', 1030664, 138097, 191982, 1075255, 1267237, 'AGNIPASA HSC'),
(26, 'Uttar Pradesh', 9946, 496, 0, 9946, 9946, 'AMETHI CHC 18 PLUS'),
(27, 'Uttarakhand', 83729, 2183, 39, 83690, 83729, 'APHC BANBASA 18 TO 44'),
(28, 'West Bengal', 1151159, 41185, 138714, 1012445, 1352180, 'AMRI DHAKURIA COVAXIN');

-- --------------------------------------------------------

--
-- Table structure for table `vaccineregister`
--

CREATE TABLE `vaccineregister` (
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Phno` text NOT NULL,
  `State` text NOT NULL,
  `Hospital` text NOT NULL,
  `Vaccine` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `statewisecase`
--
ALTER TABLE `statewisecase`
  ADD PRIMARY KEY (`S_No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
