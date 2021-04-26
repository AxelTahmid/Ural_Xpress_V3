-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 09:32 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ural_xpress_ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '20121031100537', 'App\\Database\\Migrations\\AddUsers', 'default', 'App', 1618354195, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ux_delivery`
--

CREATE TABLE `ux_delivery` (
  `delivery_id` int(10) NOT NULL,
  `delivery_invoice_no` varchar(60) NOT NULL,
  `delivery_invoice_amount` decimal(20,0) NOT NULL,
  `delivery_recipient_id` int(10) NOT NULL,
  `delivery_payment_status` varchar(60) NOT NULL,
  `delivery_status` varchar(60) NOT NULL,
  `publication_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ux_delivery`
--

INSERT INTO `ux_delivery` (`delivery_id`, `delivery_invoice_no`, `delivery_invoice_amount`, `delivery_recipient_id`, `delivery_payment_status`, `delivery_status`, `publication_status`) VALUES
(4, 'X2C2B2', '23131', 4, 'Processing', 'Dispatched', 1),
(5, 'X2C2B26', '7465', 5, 'Processing', 'Dispatched', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ux_merchant`
--

CREATE TABLE `ux_merchant` (
  `merchant_id` int(10) NOT NULL,
  `merchant_img` varchar(100) DEFAULT NULL,
  `merchant_name` varchar(100) NOT NULL,
  `merchant_phone` varchar(60) NOT NULL,
  `merchant_email` varchar(100) NOT NULL,
  `merchant_business_name` varchar(100) NOT NULL,
  `merchant_business_type` varchar(60) NOT NULL,
  `merchant_pickup_address` varchar(255) NOT NULL,
  `merchant_pickup_area` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ux_merchant`
--

INSERT INTO `ux_merchant` (`merchant_id`, `merchant_img`, `merchant_name`, `merchant_phone`, `merchant_email`, `merchant_business_name`, `merchant_business_type`, `merchant_pickup_address`, `merchant_pickup_area`) VALUES
(2, '1619228162_7eb7a6a4bab0bd29adb6.png', 'Mamunur Rashid', '01316687373', 'rashid.ebexsoft@gmail.com', 'Ebexsoft Limited', 'IT', 'Dhanmondi Dhaka', 'DNSC'),
(3, '1619230834_30075c55e90647717030.jpg', 'Duke of Edinburgh', '046-780-215', 'ryan.jose@example.org', 'soluta', 'sint', '94025 America Manor Suite 296', 'Apt. 216'),
(4, '1619229742_cefde8be24751db79eb8.jpg', 'Prof. Olen Hills', '(721)069-97', 'ara.swift@example.org', 'repudiandae', 'illum', '91775 Ambrose Mountain Apt. 630', 'Suite 418'),
(5, '1619229752_6c2775ed7a87d6cc42e4.jpg', 'Ms. Caroline Trantow', '589.310.589', 'wyman.larkin@example.net', 'mollitia', 'consequatur', '16774 Ethelyn Trafficway', 'Apt. 639'),
(6, '1619229761_8149345879277b35251e.jpg', 'Cassidy Bartoletti', '983-224-692', 'zachary.pagac@example.net', 'praesentium', 'inventore', '60289 Blick Landing Apt. 088', 'Suite 540'),
(7, '1619229770_bcde23876d4c12e1dfce.jpg', 'Freda McDermott', '08892963839', 'ebode@example.org', 'exercitationem', 'sit', '0235 Senger Rue', 'Apt. 739'),
(8, '1619229779_5b45e6de96644498cac2.jpg', 'Derrick Braun PhD', '089-846-167', 'rickey96@example.net', 'ab', 'nostrum', '225 Savion Field', 'Suite 984'),
(9, '1619229788_1ed4880ed7fca2289645.jpg', 'Prof. Hettie Harris V', '1-158-653-3', 'kattie38@example.com', 'voluptatem', 'sed', '714 Addison Via Suite 417', 'Apt. 923'),
(10, '1619229802_0153eaea827506b3c9af.jpg', 'Clint Runolfsdottir', '387.363.098', 'o\'keefe.eryn@example.net', 'vel', 'voluptatem', '34596 Joy Locks', 'Suite 135'),
(12, '1619229834_0a33c11b0b5189c188d3.jpg', 'Shahadat Hossain', '+8801761613788', 'axel.tahmid@gmail.com', 'n/a', 'n/a', 'East point , post office road, middle badda Dhaka', 'Badda'),
(13, '1619229841_c732401249b73bea6c38.png', 'Mr Tahmid', '01761613788', '1731555@iub.edu.bd', 'Fashion Co', 'Style', 'Rampura, Dhaka', 'DSC - Badda'),
(14, '1619229854_d081462cc05379f139f5.png', 'Mamunur Rashid', '03086527042', 'kuphal.norris@example.com', 'non', 'rerum', '50807 Tatum Union', 'Suite 753'),
(15, '1619229864_2ff8071916b58cc57e20.jpg', 'Shah Tanvir', '01711111111', 'stanvirbd@gmail.com', 'Electronics bd', 'electronics', 'Farmgate dhaka', 'DNSC');

-- --------------------------------------------------------

--
-- Table structure for table `ux_recipient`
--

CREATE TABLE `ux_recipient` (
  `recipient_id` int(10) NOT NULL,
  `recipient_name` varchar(100) NOT NULL,
  `recipient_phone` varchar(60) NOT NULL,
  `recipient_address` varchar(255) NOT NULL,
  `recipient_area` varchar(60) NOT NULL,
  `recipient_instructions` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ux_recipient`
--

INSERT INTO `ux_recipient` (`recipient_id`, `recipient_name`, `recipient_phone`, `recipient_address`, `recipient_area`, `recipient_instructions`) VALUES
(4, 'Mr Tahmid', '0192312312', 'Rampura', 'Dhaka', 'tomorrow'),
(5, 'Mr Tamim', '01723424234', 'Badda', 'Badda', 'Tomorrow');

-- --------------------------------------------------------

--
-- Table structure for table `ux_super_user`
--

CREATE TABLE `ux_super_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ux_super_user`
--

INSERT INTO `ux_super_user` (`id`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Axel', 'Tahmid', 'axel.tahmid@gmail.com', '$2y$10$xAlSF9z3L5lqgQT.Gc3l1O0uve765tMk5MY.7iw1ZWL696SBLi3m6', '2021-04-14 09:31:32', '2021-04-23 15:27:53'),
(2, 'Mamunur', 'Rashid', 'rashid.ebexsoft@gmail.com', '$2y$10$QaZdm0NWGbMWbpCURGVOdOPKPJuFXkf8plHbrKq/SNKZJrOgjPdFO', '2021-04-18 16:40:28', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ux_delivery`
--
ALTER TABLE `ux_delivery`
  ADD PRIMARY KEY (`delivery_id`),
  ADD UNIQUE KEY `delivery_invoice_no` (`delivery_invoice_no`),
  ADD KEY `FK_recipient` (`delivery_recipient_id`);

--
-- Indexes for table `ux_merchant`
--
ALTER TABLE `ux_merchant`
  ADD PRIMARY KEY (`merchant_id`),
  ADD UNIQUE KEY `merchant_phone` (`merchant_phone`),
  ADD UNIQUE KEY `merchant_email` (`merchant_email`);

--
-- Indexes for table `ux_recipient`
--
ALTER TABLE `ux_recipient`
  ADD PRIMARY KEY (`recipient_id`);

--
-- Indexes for table `ux_super_user`
--
ALTER TABLE `ux_super_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ux_delivery`
--
ALTER TABLE `ux_delivery`
  MODIFY `delivery_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ux_merchant`
--
ALTER TABLE `ux_merchant`
  MODIFY `merchant_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ux_recipient`
--
ALTER TABLE `ux_recipient`
  MODIFY `recipient_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ux_super_user`
--
ALTER TABLE `ux_super_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ux_delivery`
--
ALTER TABLE `ux_delivery`
  ADD CONSTRAINT `FK_recipient` FOREIGN KEY (`delivery_recipient_id`) REFERENCES `ux_recipient` (`recipient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
