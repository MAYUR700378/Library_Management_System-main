-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 05:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `edition` varchar(50) NOT NULL,
  `bookquantity` int(11) NOT NULL,
  `availablebook` int(11) NOT NULL,
  `takenbook` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `bookname`, `author`, `edition`, `bookquantity`, `availablebook`, `takenbook`) VALUES
(1, 'The C Programming Language ', 'Brian W. Kernighan and Dennis M. Ritchie ', '2nd', 5, 3, 2),
(2, 'Let Us C', 'Yashavant Kanetkar', '15th', 4, 1, 3),
(3, 'The C++ Programming Language ', 'Bjarane Stroustrup ', '3rd', 3, 1, 2),
(4, 'The C++ Programming Language ', 'Bjarane Stroustrup ', '4th', 5, 3, 2),
(5, 'Data Structure and Application in c++ ', 'Satraj Sahani ', '2nd ', 6, 3, 3),
(6, 'Computer Networks ', 'Andrew S. Tanenbaum ', '5th ', 5, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `b_id` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `suppliername` varchar(100) NOT NULL,
  `deliverydate` date NOT NULL,
  `singleprice` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`b_id`, `bookname`, `author`, `suppliername`, `deliverydate`, `singleprice`, `price`, `quantity`) VALUES
(1, 'The C Programming Language', 'Brian W. Kernighan and Dennis M. Ritchie', 'Pragati Book Stores', '2021-06-18', 310, 1860, 6),
(2, 'Let Us C', 'Yashavant Kanetkar', 'Anmol Books', '2021-07-16', 249, 996, 4),
(3, 'The C++ Programming Language', 'Bjarane Stroustrup', 'Pragati Books Stores', '2021-06-20', 923, 2769, 3),
(4, 'The C++ Programming Language  ', 'Bjarane Stroustrup  ', 'Pragati Books Stores ', '2021-06-21', 653, 3265, 5),
(5, 'Data Structure and Application in c++', 'Satraj Sahani', 'Rajesh Books Store', '2020-03-12', 300, 1500, 5),
(6, 'Computer Networks', 'Andrew S. Tanenbaum', 'pragati Book Store ', '2021-08-17', 706, 3530, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `takenbookname` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `edition` varchar(50) NOT NULL,
  `totalbook` int(15) NOT NULL,
  `takendate` date NOT NULL,
  `returndate` date NOT NULL,
  `fine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `name`, `takenbookname`, `author`, `edition`, `totalbook`, `takendate`, `returndate`, `fine`) VALUES
(1, 'Sagar S. More', 'The C Programming Language ', 'Brian W. Kernighan and Dennis M. Ritchie  ', '2nd', 1, '2021-10-27', '2021-11-04', 0),
(2, 'Vishal V. Sole ', 'The C Programming Language ', 'Brian W. Kernighan and Dennis M. Ritchie   ', '2nd ', 1, '2021-09-23', '2021-10-08', 14),
(3, 'Amar R. Joshi ', 'The C++ Programming Language,Let Us C ', 'Bjarane Stroustrup , Yashvant Kanetkar', '4th,15th ', 2, '2021-11-01', '2021-11-14', 20),
(4, 'Ram Sahapure ', 'Data Structure and Application in c++ ', 'Satraj Sahani  ', '2nd ', 1, '2021-11-04', '2021-11-15', 4),
(5, 'Aditi G. Gaikwad', 'The C++ Programming Language,Let Us C,Data Structure and Application in c++', 'Bjarane Stroustrup,Yaswant Kanetkar,Satraj Sahani ', '4th,15th,2nd', 3, '2021-11-11', '2021-11-25', 36),
(6, 'Sham Gore', 'computer Networks', 'Andrew S. Tanenbaum  ', '5th ', 1, '2021-12-02', '2021-12-10', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
