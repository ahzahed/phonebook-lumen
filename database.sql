-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 07, 2020 at 11:51 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `phone_book_details`
--

CREATE TABLE `phone_book_details` (
  `id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pnumber1` varchar(50) NOT NULL,
  `pnumber2` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phone_book_details`
--

INSERT INTO `phone_book_details` (`id`, `username`, `pnumber1`, `pnumber2`, `name`, `email`) VALUES
(2, 'ahzahed', '2342344234', '2435456456', 'Amir', 'amir@gmail.com'),
(3, 'ahzahed', '4645243545', '234532454', 'Hamza', 'hamza@gmail.com'),
(4, 'ahzahed', '24354356467', '768562435', 'Zahed', 'zahed@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `city`, `username`, `password`, `gender`) VALUES
(1, 'Amir', 'Hamza', 'Dhaka', 'ahzahed', '123', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phone_book_details`
--
ALTER TABLE `phone_book_details`
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
-- AUTO_INCREMENT for table `phone_book_details`
--
ALTER TABLE `phone_book_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
