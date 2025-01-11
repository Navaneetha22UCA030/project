-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2025 at 01:15 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_no` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_no`, `username`, `password`) VALUES
(1, 'navaneetha', '$2y$10$QsqPK8P15.2rL4O7syqf8.dsfShWf7P1yPOqMpHeQ4ewAxM0Rbw.2'),
(2, 'name', '$2y$10$FI2x4rpP1k4oIjt7gy4uV.pPu6AR0OagZewVr.7K69X.OEwpRqpBm'),
(3, 'krish', '$2y$10$4awspNoFzIQ0KhDGzFu6be8n3Jx2QOrJ2oM7zPJmsiz1LrEXJ/Ha2'),
(4, 'nana', '$2y$10$GSUXrjS./FsoShm6BspOQ.tiCLsnn/HesdUVBBiBGpGyPqMZMhtyy'),
(5, '!navaneetha', '$2y$10$BW89gBypqibzEnTbnFFb1OEMcV6fUlA5IFiEqC8kSH2GGROQhOuQG'),
(6, 'nantha', '$2y$10$uIVreVFDL1rv1vnqyDddSuhpJ6THg8lIissxW1k11OxIAXhv30B/C');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_no` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_name`, `brand`, `price`, `quantity`, `total`, `date`, `name`, `phone_no`, `email`, `address`) VALUES
(1, 'LED light ', 'Philps', 150.00, 3, 450.00, '2025-01-11', '', 0, '', ''),
(3, 'LED light ', 'Philps', 150.00, 2, 300.00, '0000-00-00', '', 0, '', ''),
(4, NULL, NULL, NULL, NULL, NULL, '2025-01-15', 'Navaneetha', 954364366, 'sretafds@dthfg.fg', 'dghgfbc'),
(5, 'LED light ', 'Philps', 150.00, 3, 450.00, '0000-00-00', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stock_ele`
--

CREATE TABLE `stock_ele` (
  `s.no` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `product_name` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `gst` int(11) NOT NULL,
  `perone` int(10) UNSIGNED NOT NULL,
  `Prices` int(10) NOT NULL,
  `total` int(11) NOT NULL,
  `company_name` text NOT NULL,
  `brand` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_ele`
--

INSERT INTO `stock_ele` (`s.no`, `date`, `product_name`, `price`, `quantity`, `gst`, `perone`, `Prices`, `total`, `company_name`, `brand`) VALUES
(1, '2025-01-02', 'LED light ', 100, 20, 2, 102, 150, 2040, 'Philps', 'Philps'),
(2, '2025-01-05', 'Switch 6A', 20, 29, 1, 21, 50, 585, 'GM', 'GM'),
(3, '2025-01-01', 'LED Light Bulb', 200, 10, 5, 205, 300, 2100, 'BrightLights', 'Philips'),
(4, '2025-01-08', 'Fan', 1400, 5, 5, 1470, 2000, 57350, 'Bajaj', 'Bajaj'),
(5, '2025-01-02', '32W LED Light', 450, 10, 8, 486, 700, 4860, 'Sri shathi', 'Philips'),
(6, '2025-01-02', 'Fan High Speed', 1900, 3, 18, 2242, 2700, 6726, 'Usha', 'Havels'),
(7, '2025-01-17', 'Tube light', 150, 8, 5, 157, 250, 1260, 'Marco', 'Crompton'),
(8, '2025-01-11', 'Tube light', 150, 5, 5, 157, 200, 787, 'sfsvc', 'dsff'),
(9, '2025-01-04', 'Tube light', 150, 150, 5, 157, 200, 23625, 'ghhESATRSDF', 'FGBVEBD'),
(10, '2025-01-05', 'Tube light', 100, 50, 15, 115, 190, 5750, 'hedrgsdg', 'dfhyhd'),
(11, '2025-01-11', 'Tube light', 100, 5, 5, 105, 190, 525, 'gbdgdf', 'fghht'),
(12, '2025-01-04', 'Tube light', 150, 5, 5, 157, 190, 787, 'fdgv', 'afsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_ele`
--
ALTER TABLE `stock_ele`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stock_ele`
--
ALTER TABLE `stock_ele`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
