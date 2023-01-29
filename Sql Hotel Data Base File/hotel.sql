-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 02:37 PM
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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`) VALUES
(2, 'Upani', 'u123'),
(3, 'Ruwindu', 'r123'),
(6, 'Shanki', 's123'),
(7, 'Buddhi', 'b123'),
(8, 'Dilsha', 'd123');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `AID` int(11) NOT NULL,
  `Aname` varchar(20) NOT NULL,
  `Acontact` varchar(10) NOT NULL,
  `Ausername` varchar(20) NOT NULL,
  `Apasssword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`AID`, `Aname`, `Acontact`, `Ausername`, `Apasssword`) VALUES
(4, 'Ruwindu', '0766959956', 'admin', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ConID` int(11) NOT NULL,
  `ConName` varchar(20) NOT NULL,
  `ConEmail` varchar(20) NOT NULL,
  `ConContactNo` varchar(10) NOT NULL,
  `ConMessage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FID` int(11) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `FTelephone` varchar(10) NOT NULL,
  `Femail` varchar(20) NOT NULL,
  `FSubject` varchar(50) NOT NULL,
  `Message` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FID`, `FName`, `FTelephone`, `Femail`, `FSubject`, `Message`) VALUES
(4, 'Shanki', '0748596150', 'shaKi@gmail.com', 'No subject', 'Good Website');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `LID` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PID` int(11) NOT NULL,
  `PRnumber` varchar(20) NOT NULL,
  `PDate` varchar(20) NOT NULL,
  `PRfee` varchar(20) NOT NULL,
  `PMethod` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PID`, `PRnumber`, `PDate`, `PRfee`, `PMethod`) VALUES
(101, 'R001', '20/05/2019', '25000', 'cash'),
(102, 'R1253', '25/04/2022', '10000', 'online'),
(103, 'R3541', '19/12/2021', '5000', 'cash'),
(104, 'R635', '2022-06-08', '30000', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `registercustomer`
--

CREATE TABLE `registercustomer` (
  `CID` int(11) NOT NULL,
  `CFname` varchar(20) NOT NULL,
  `CLname` varchar(20) NOT NULL,
  `CDOB` varchar(20) NOT NULL,
  `CAddress` varchar(50) NOT NULL,
  `CMobile` varchar(10) NOT NULL,
  `CEmail` varchar(20) NOT NULL,
  `CUsername` varchar(20) NOT NULL,
  `CPassword` varchar(20) NOT NULL,
  `CGender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registercustomer`
--

INSERT INTO `registercustomer` (`CID`, `CFname`, `CLname`, `CDOB`, `CAddress`, `CMobile`, `CEmail`, `CUsername`, `CPassword`, `CGender`) VALUES
(101, 'Upani', 'Jithma', '2001/01/14', 'No.130/6, Weniwelkola, Polgasovita', '0774049074', 'upani@gmail.com', 'Upani', 'u123', 'Female'),
(102, 'Buddhi', 'Praveen', '2000/05/22', '', '', 'bpraveen@gmail.com', 'Buddhi', 'b123', 'Male'),
(103, 'Shanki', 'Madira', '', '', '', 'smadira@gmail.com', 'Shanki', 's123', 'Female'),
(104, 'Ruwindu', 'Peiris', '2000/10/27', '29/a,Moratuwa', '0766959956', 'ruwindu12@gmail.com', 'Ruwindu', 'r123', 'Male'),
(105, 'Dilsha', '', '', '', '', 'dilsha@gmail.com', 'Dilsha', 'd123', 'Female'),
(111, 'Ishara', 'Perera', '08/10/2000', 'colombo', '0766283790', 'ishara@gmail.com', 'ishara', 'i123', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `registerhotel`
--

CREATE TABLE `registerhotel` (
  `HID` int(11) NOT NULL,
  `Hname` varchar(20) NOT NULL,
  `HLocation` varchar(20) NOT NULL,
  `HContact` varchar(10) NOT NULL,
  `HEmail` varchar(20) NOT NULL,
  `HUsername` varchar(20) NOT NULL,
  `HPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerhotel`
--

INSERT INTO `registerhotel` (`HID`, `Hname`, `HLocation`, `HContact`, `HEmail`, `HUsername`, `HPassword`) VALUES
(12, 'Avenra', 'Negombo', '0115631635', 'avenra@gmail.com', 'Avenra', 'avenra123'),
(13, 'Galadari', 'Colombo', '0111546452', 'galadari@gmail.com', 'Galadari', 'galadari123');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `RID` int(11) NOT NULL,
  `Hname` varchar(20) NOT NULL,
  `RDate` varchar(20) NOT NULL,
  `Cname` varchar(20) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `TypeWedding` varchar(20) NOT NULL,
  `NoServings` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`RID`, `Hname`, `RDate`, `Cname`, `Contact`, `Email`, `TypeWedding`, `NoServings`) VALUES
(101, 'Avenra', '22/15/2022', 'Shanki', '0774586954', 'shanki@gmail.com', 'Garden', '250'),
(102, 'Galadari', '01/02/2022', 'Ruwindu', '0777745861', 'ruwindu@gmail.com', 'beach', '500'),
(103, 'Kingsbury', '27/08/2022', 'Ishara Perera', '0769582366', 'ishara@gmail.com', 'Colombo', '300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ConID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`LID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `registercustomer`
--
ALTER TABLE `registercustomer`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `registerhotel`
--
ALTER TABLE `registerhotel`
  ADD PRIMARY KEY (`HID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`RID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ConID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `LID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `registercustomer`
--
ALTER TABLE `registercustomer`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `registerhotel`
--
ALTER TABLE `registerhotel`
  MODIFY `HID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
