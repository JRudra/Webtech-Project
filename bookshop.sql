-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 06:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyerrequest`
--

CREATE TABLE `buyerrequest` (
  `OrderId` int(6) UNSIGNED NOT NULL,
  `BuyerName` varchar(40) NOT NULL,
  `BuyerPhoneNumber` varchar(30) NOT NULL,
  `SellerName` varchar(10) NOT NULL,
  `BookName` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyerrequest`
--

INSERT INTO `buyerrequest` (`OrderId`, `BuyerName`, `BuyerPhoneNumber`, `SellerName`, `BookName`) VALUES
(1, 'sanzida11', '123456', 'aiman', 'Dune (nove'),
(2, 'sanzida11', '123456', 'aiman', 'Sherlock H');

-- --------------------------------------------------------

--
-- Table structure for table `confirmtable`
--

CREATE TABLE `confirmtable` (
  `orderId` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `BookID` varchar(10) NOT NULL,
  `BookName` varchar(30) NOT NULL,
  `Author` varchar(30) NOT NULL,
  `Publication` varchar(50) NOT NULL,
  `Genre` varchar(15) NOT NULL,
  `BookPrice` double NOT NULL,
  `BookPublished` date NOT NULL,
  `SellerName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`BookID`, `BookName`, `Author`, `Publication`, `Genre`, `BookPrice`, `BookPublished`, `SellerName`) VALUES
('112233', 'Steve Jobs', 'Walter Isaacson', 'Us Publication', 'Biography', 300, '2020-11-19', 'aiman'),
('12345', 'Sherlock Holmes', 'Arthur Conan Doyle', 'UK Publication', 'Fantasy', 500, '2020-11-07', 'aiman'),
('22222', 'Dune (novel)', 'Frank Herbert', 'UK Publication', 'Sci-Fiction', 800, '2020-11-14', 'aiman'),
('456321', 'Hitler\'s Secret Book', 'Zweites Buch', 'Us Publication', 'Biography', 600, '2020-11-10', 'aiman');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `nid` int(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `imageg` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `email`, `username`, `password`, `address`, `phoneno`, `nid`, `gender`, `type`, `dob`, `imageg`) VALUES
('Nasir Uddin', 'sabbir.nasir26@yahoo.com', 'sabbir26', '12345', 'South Jhiltuly, Faridpur,Dhaka', '0152123498', 78945612, 'male', 'admin', '1999-05-10', '../view/uploads/Batman_Arkham-'),
('Sanzida Mannan', 'sanzida@gmail.com', 'sanzida11', '1234', 'Chattogram', '123456789', 213654799, 'female', 'buyer', '1998-06-17', '../view/uploads/Blonde-wallpap'),
('Aimaan Amin', 'aiman@gmail.com', 'aiman22', '1234', 'Banani, Dhaka', '321654987', 421536987, 'male', 'seller', '1999-06-12', '../view/uploads/Arrow-wallpape'),
('Fahmida Alam', 'rafa@gmail.com', 'rafa33', '1234', 'Baridhara, Dhaka', '12365478', 654221445, 'female', 'dguy', '1999-01-21', '../view/uploads/Chloe-wallpape');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyerrequest`
--
ALTER TABLE `buyerrequest`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`BookID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyerrequest`
--
ALTER TABLE `buyerrequest`
  MODIFY `OrderId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
