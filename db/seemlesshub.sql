-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 08:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seemlesshub`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `purchaseDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `img`) VALUES
(1, 'Vegetables', 'image/cat-1.png'),
(2, 'Fresh Fruits', 'image/cat-2.png'),
(3, 'Dairy Products', 'image/cat-3.png'),
(4, 'Fresh Meat', 'image/cat-4.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `checkoutId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `discount` int(11) DEFAULT 0,
  `total` int(11) NOT NULL,
  `purchaseDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `checkoutId`, `productId`, `quantity`, `userId`, `discount`, `total`, `purchaseDate`) VALUES
(1, 1, 3, 1, 1, 0, 20, '2024-06-05 18:51:16'),
(2, 1, 3, 1, 1, 0, 20, '2024-06-05 18:51:16'),
(3, 1, 1, 1, 1, 0, 20, '2024-06-05 18:51:16'),
(4, 2, 3, 1, 1, 0, 20, '2024-06-05 18:53:29'),
(5, 2, 3, 1, 1, 0, 20, '2024-06-05 18:53:29'),
(6, 2, 1, 1, 1, 0, 20, '2024-06-05 18:53:29'),
(7, 3, 4, 2, 1, 0, 40, '2024-06-06 06:45:19'),
(8, 3, 1, 2, 1, 0, 40, '2024-06-06 06:45:19'),
(9, 3, 2, 2, 1, 0, 40, '2024-06-06 06:45:19'),
(10, 4, 4, 2, 1, 0, 40, '2024-06-06 06:46:35'),
(11, 4, 1, 2, 1, 0, 40, '2024-06-06 06:46:35'),
(12, 4, 2, 2, 1, 0, 40, '2024-06-06 06:46:35'),
(13, 5, 4, 2, 1, 0, 40, '2024-06-06 06:58:49'),
(14, 6, 4, 2, 1, 0, 40, '2024-06-06 06:59:33'),
(15, 6, 1, 2, 1, 0, 40, '2024-06-06 06:59:34'),
(16, 6, 2, 2, 1, 0, 40, '2024-06-06 06:59:34'),
(17, 7, 4, 2, 1, 0, 40, '2024-06-06 07:06:18'),
(18, 7, 1, 2, 1, 0, 40, '2024-06-06 07:06:18'),
(19, 7, 2, 2, 1, 0, 40, '2024-06-06 07:06:19'),
(20, 8, 4, 2, 1, 0, 40, '2024-06-06 07:08:57'),
(21, 8, 1, 2, 1, 0, 40, '2024-06-06 07:08:57'),
(22, 8, 2, 2, 1, 0, 40, '2024-06-06 07:08:57'),
(23, 9, 4, 2, 1, 0, 40, '2024-06-06 07:35:04'),
(24, 9, 1, 2, 1, 0, 40, '2024-06-06 07:35:05'),
(25, 9, 2, 2, 1, 0, 40, '2024-06-06 07:35:05'),
(26, 10, 4, 2, 1, 0, 40, '2024-06-06 07:39:45'),
(27, 10, 1, 2, 1, 0, 40, '2024-06-06 07:39:45'),
(28, 10, 2, 2, 1, 0, 40, '2024-06-06 07:39:46'),
(29, 11, 4, 2, 1, 0, 40, '2024-06-06 07:40:33'),
(30, 11, 1, 2, 1, 0, 40, '2024-06-06 07:40:33'),
(31, 11, 2, 2, 1, 0, 40, '2024-06-06 07:40:33'),
(32, 12, 4, 2, 1, 0, 40, '2024-06-06 07:41:06'),
(33, 12, 1, 2, 1, 0, 40, '2024-06-06 07:41:06'),
(34, 12, 2, 2, 1, 0, 40, '2024-06-06 07:41:06'),
(35, 13, 4, 2, 1, 0, 40, '2024-06-06 07:41:47'),
(36, 13, 1, 2, 1, 0, 40, '2024-06-06 07:41:48'),
(37, 13, 2, 2, 1, 0, 40, '2024-06-06 07:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `price` int(22) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `purchased_date` date NOT NULL,
  `supplier` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `img1`, `img2`, `img3`, `price`, `quantity`, `description`, `purchased_date`, `supplier`, `category`) VALUES
(1, 'Fresh Orange', 'image/product-1.png', NULL, NULL, 20, 14, 'Fresh oranges from the farm', '2024-05-28', 2, 2),
(2, 'Fresh Onions', 'image/product-2.png', NULL, NULL, 20, 14, 'Fresh oranges from the farm', '2024-05-28', 1, 1),
(3, 'Fresh Meat', 'image/product-3.png', NULL, NULL, 20, 14, 'Fresh oranges from the farm', '2024-05-28', 4, 4),
(4, 'Fresh Cabbage', 'image/product-4.png', NULL, NULL, 20, 14, 'Fresh oranges from the farm', '2024-05-28', 1, 1),
(5, 'Fresh Potatoes', 'image/product-5.png', NULL, NULL, 20, 14, 'Fresh oranges from the farm', '2024-05-28', 1, 1),
(6, 'Fresh Avocadoes', 'image/product-6.png', NULL, NULL, 20, 14, 'Fresh oranges from the farm', '2024-05-28', 2, 2),
(7, 'Fresh Carrots', 'image/product-7.png', NULL, NULL, 20, 14, 'Fresh oranges from the farm', '2024-05-28', 1, 1),
(8, 'Fresh Lemons', 'image/product-8.png', NULL, NULL, 20, 14, 'Fresh oranges from the farm', '2024-05-28', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(1, ''),
(5, 'hakf@kinya.com'),
(27, 'jeconiaauma@eu.com'),
(4, 'jeconiaauma@gmail.com'),
(26, 'pasted@kinyanj.com'),
(25, 'pastored@kinyanjuitechnical.ac.ke'),
(12, 'test@example.com'),
(22, 'tested@example.com'),
(24, 'testede@example.com'),
(20, 'tester@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rank` int(1) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `middleName`, `lastName`, `password`, `rank`, `email`) VALUES
(1, 'Okoth', 'Jeconia', 'Auma', '5FCDF8D04CA002A49A76A8AD6ABAC752195B74C5', 1, 'jeconiaauma@gmail.com'),
(2, '', 'tester', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 2, 'test'),
(3, '', 'tester', 'tested', '5fcdf8d04ca002a49a76a8ad6abac752195b74c5', 2, 'jeconiaauma@gmail.coms'),
(4, 'pastor', 'Bishop', 'Pastored', 'f16ecba5a2d660c0a728d9cae2b4666e8cb8459c', 2, 'pastors@kinyanjuitechnical.ac.ke'),
(5, 'trial', 'Trialers', 'trialed', '51b468920b1741e93e603103bc5b7ba8ebf04be9', 2, 'trialers@gmail.com'),
(6, '', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
