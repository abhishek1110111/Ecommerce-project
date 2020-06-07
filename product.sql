-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 04:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestfriend`
--

CREATE TABLE `bestfriend` (
  `id` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bestfriend`
--

INSERT INTO `bestfriend` (`id`, `Name`, `Lastname`) VALUES
(2, 'rohit', 'mishra');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `CompanyName` varchar(30) DEFAULT NULL,
  `country` varchar(20) NOT NULL,
  `StreetAddress` text NOT NULL,
  `PostCode` int(15) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`FirstName`, `LastName`, `CompanyName`, `country`, `StreetAddress`, `PostCode`, `City`, `Email`, `Phone`) VALUES
('abhishek', 'kumar', 'cedcoss', 'india', 'bbd', 227105, 'lucknow', 'abhishek2020@cedcoss.com', 224355),
('rohit', 'mishra', 'cedcoss', 'india', 'tiwariganj', 226028, 'lucknow', 'rohit@cedcoss.com', 227105);

-- --------------------------------------------------------

--
-- Table structure for table `customerorder`
--

CREATE TABLE `customerorder` (
  `Sku` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `CURRENT_PRICE` varchar(10) NOT NULL,
  `BRAND` varchar(20) NOT NULL,
  `CATEGORY` varchar(20) NOT NULL,
  `GENDER` varchar(20) NOT NULL,
  `SIZE` varchar(20) NOT NULL,
  `IMAGE` varchar(30) NOT NULL,
  `SELLING_PRICE` int(10) NOT NULL,
  `COLOR` varchar(20) NOT NULL,
  `TAG` varchar(20) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `QUANTITY` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customerorder`
--

INSERT INTO `customerorder` (`Sku`, `Name`, `CURRENT_PRICE`, `BRAND`, `CATEGORY`, `GENDER`, `SIZE`, `IMAGE`, `SELLING_PRICE`, `COLOR`, `TAG`, `EMAIL`, `QUANTITY`) VALUES
(101, 'Pure pineapple', '14', 'Polo', 'Kids', 'Female', 'L', 'product-1.jpg', 35, 'Yelllow', 'Towel', 'abhishek2020@cedcoss.com', 2),
(102, 'Guangzhou sweater', '35', 'Calvin Klein', 'Kids', 'Female', 'L', 'women-2.jpg', 13, 'Green', 'Coat', 'abhishek2020@cedcoss.com', 1),
(103, 'Guangzhou sweater', '35', 'Polo', 'Kids', 'Male', 'S', 'product-3.jpg', 30, 'Violet', 'Shoes', 'abhishek2020@cedcoss.com', 1),
(104, 'Microfiber Wool Scarf', '35', 'Diesel', 'Men', 'Male', 'M', 'product-4.jpg', 64, 'Blue', 'Coat', 'rohit@cedcoss.com', 1),
(105, 'Mens Painted Hat', '55', 'Tommy Hilfige', 'Women', 'Female', 'L', 'product-5.jpg', 44, 'Yellow', 'Shoes', 'rohit2020@cedcoss.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `Sku` int(10) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Orginal_Price` int(10) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Size` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `Sale_Price` int(10) NOT NULL,
  `Color` varchar(20) NOT NULL,
  `Tag` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`Sku`, `Product_Name`, `Orginal_Price`, `Brand`, `Category`, `Gender`, `Size`, `image`, `Sale_Price`, `Color`, `Tag`) VALUES
(102, 'Guangzhou sweater', 35, 'Calvin Klein', 'Kids', 'Female', 'L', 'women-2.jpg', 13, 'Green', 'Coat'),
(103, 'Guangzhou sweater', 35, 'Polo', 'Kids', 'Male', 'S', 'product-3.jpg', 30, 'Violet', 'Shoes'),
(104, 'Microfiber Wool Scarf', 35, 'Diesel', 'Men', 'Male', 'M', 'product-4.jpg', 64, 'Blue', 'Coat'),
(105, 'Mens Painted Hat', 55, 'Tommy Hilfige', 'Women', 'Female', 'L', 'product-5.jpg', 44, 'Yellow', 'Shoes'),
(106, 'JAcket', 99, 'Diesel', 'Kids', 'Male', 'XL', 'man-3.jpg', 89, 'Green', 'Coat'),
(107, 'Converse Shoes', 35, 'Polo', 'Women', 'Female', 'L', 'product-6.jpg', 34, 'Red', 'Shoes'),
(108, 'Converse Shoes', 35, 'Tommy Hilfiger', 'Men', 'Male', 'L', 'product-9.jpg', 33, 'Yellow', 'Shoes'),
(109, 'Pure Pineapple', 35, 'Levis', 'Men', 'Male', 'L', 'man-1.jpg', 36, 'Yellow', 'BackPack'),
(112, 'jeans', 1200, 'Levis', 'Kids', 'Male', 'L', 'man-large.jpg', 900, 'Blue', 'Towel');

-- --------------------------------------------------------

--
-- Table structure for table `tab`
--

CREATE TABLE `tab` (
  `sku` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `Password`, `Mobile`, `Email`, `Role`) VALUES
(1, 'abhishek', '12345', 941549, 'abhishekkumar2020@cedcoss.com', 'admin'),
(2, 'rohit', '12345', 8004, 'rohit2020@cedcoss.com', 'prime user'),
(3, 'rohit', '12345', 8004, 'rohit2020@cedcoss.com', 'prime user'),
(4, 'rohit', '12345', 8004, 'rohit2020@cedcoss.com', 'prime user'),
(5, 'harshit', '12345', 224355, 'harshit2020@cedcoss.com', 'admin'),
(6, 'harshit', '12345', 224355, 'harshit2020@cedcoss.com', 'admin'),
(7, 'vashisit', '12345', 223344, 'vashi@cedcocc.com', 'prime user');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `Email` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`Email`, `Password`) VALUES
('abhishek2020@cedcoss.com', '12345'),
('abhishekkumar2020@cedcoss.com', '12345'),
('anuj2020@cedcoss.com', '12345'),
('harshit2020@cedcoss.com', '12345'),
('rohit2020@cedcoss.com', '12345'),
('shubahm2020@cedcoss.com', '54321'),
('vashisit2020@cedcoss.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestfriend`
--
ALTER TABLE `bestfriend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `customerorder`
--
ALTER TABLE `customerorder`
  ADD PRIMARY KEY (`Sku`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`Sku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bestfriend`
--
ALTER TABLE `bestfriend`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
