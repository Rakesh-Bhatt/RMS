-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 06:14 AM
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
-- Database: `restaurantbilling`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` double NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `email`, `role`, `address`, `phone`, `salary`) VALUES
(3, 'admin1', 'admin', 'admin@gmail.com', 1, 'mahendranager', 9842405344, 1000000),
(5, 'rock', 'rock', 'rock@gmail.com', 6, 'ktm', 18488454, 55544),
(6, 'rohit', 'rohit', 'rohit@gmail.com', 1, 'jvjv', 55151, 6666462);

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `category_product` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`category_product`, `name`, `description`) VALUES
(2, 'food', 'good food'),
(14, 'raju', 'sAS'),
(19, 'saa', 'xzxzx'),
(22, 'drink', 'drinks'),
(23, 'beverage', 'good food');

-- --------------------------------------------------------

--
-- Table structure for table `keytable`
--

CREATE TABLE `keytable` (
  `key_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keytable`
--

INSERT INTO `keytable` (`key_id`, `table_id`) VALUES
(1, 1),
(14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `key_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `key_id`, `product_id`, `quantity`) VALUES
(3, 1, 14, 8),
(4, 1, 13, 18),
(8, 14, 14, 20),
(9, 14, 16, 4),
(10, 14, 20, 2),
(11, 14, 15, 2),
(12, 1, 12, 6),
(13, 1, 16, 5),
(14, 1, 15, 5),
(15, 1, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `category` int(11) NOT NULL,
  `status` enum('active','deactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `item_name`, `description`, `price`, `category`, `status`) VALUES
(12, 'wai wai', 'good', 234, 14, 'deactive'),
(13, 'chowmin', 'good1', 120, 2, 'active'),
(14, 'Alu Fry', 'jhyap dinxa', 55, 2, 'deactive'),
(15, 'Thukpa', 'spicy', 150, 19, 'active'),
(16, 'fanta', 'good', 50, 22, 'active'),
(20, 'Latte', 'good quality coffee beans', 150, 23, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_type`) VALUES
(1, 'Administrator'),
(7, 'chef'),
(6, 'Front Desk'),
(2, 'Waiter');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `key_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `sub_total` double NOT NULL,
  `vat` double NOT NULL,
  `discount` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `key_id`, `date`, `sub_total`, `vat`, `discount`, `total`) VALUES
(8, 1, '2020-10-02 14:41:50', 100, 10, 15, 95);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `table_id` int(11) NOT NULL,
  `table_name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`table_id`, `table_name`, `description`, `capacity`) VALUES
(1, 'cabin1', 'good place', 4),
(2, 'cabin2', 'very good', 4);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `code` mediumint(50) DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(10, 'Bhaskar', 'thebhaskarpant@gmail.com', '$2y$10$k8PyURBuIgk5a/uxEfOPHO7zMD27soOyvUZd5copWjOSkVsl11YZK', 0, 'verified'),
(11, 'laudo aman', 'amanbhat370@gmail.com', '$2y$10$djI3yhGqwAvBraA27Auq0O/p/chKPnb4KZyWLp5XY02bFMmKAOdPi', 327922, 'verified'),
(12, 'Racks', 'bhattrakesh073@gmail.com', '$2y$10$tAHEoB2dLyVGvBlwdzerfegBAzxpsRY2AzSyga0BzQ30SWdEMoZ0.', 990099, 'verified'),
(15, 'rakesh', 'rakesh@gmail.com', '$2y$10$.C3QMK2HTJX4kjwJdYCDC.owfiJt72aK1OEZZLGwitecXF/0vJzjG', 993319, 'notverified'),
(16, 'admin', 'admin@gmail.com', '$2y$10$5w9UVt6sTlFZzQ5rX/YrSOyFcvdPxsMDLT0ZS5Nkc8/ZIxoqdn.EK', 322691, 'notverified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`category_product`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `keytable`
--
ALTER TABLE `keytable`
  ADD PRIMARY KEY (`key_id`),
  ADD UNIQUE KEY `table_id` (`table_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `table_id` (`key_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `item_name` (`item_name`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_type` (`role_type`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`),
  ADD UNIQUE KEY `order_id_2` (`key_id`),
  ADD KEY `order_id` (`key_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`table_id`),
  ADD UNIQUE KEY `table_name` (`table_name`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `category_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `keytable`
--
ALTER TABLE `keytable`
  MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `keytable`
--
ALTER TABLE `keytable`
  ADD CONSTRAINT `keytable_ibfk_1` FOREIGN KEY (`table_id`) REFERENCES `tables` (`table_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`key_id`) REFERENCES `keytable` (`key_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category_product` (`category_product`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`key_id`) REFERENCES `orders` (`key_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
