-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 07, 2020 at 09:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BlessedTents`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(100) NOT NULL,
  `category_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Event Tents'),
(2, 'Car Tents'),
(3, 'OutDoor'),
(4, 'Camping'),
(5, 'Trending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_category` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_brand` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_category`, `product_title`, `product_description`, `product_image`, `product_keywords`, `product_brand`) VALUES
(3, 2, 'Packing Lot Tent', 'Get Car shelter at a reasonable discount', '1596484611_packing.jpg', 'Packing', 5),
(85, 1, 'Function Tents', 'Book tent for your event', '1596485161_function.jpg', 'Event or Function', 8),
(501, 5, 'Canopies', 'Blessed Tent Canopy', '1596746155_canopies.png', 'Canopy', 6),
(502, 2, 'PVC', 'Done in PVC - Negotiable', '1596748059_pvc.png', 'PVC', 4),
(503, 2, 'Lorry Fitting', 'Technician fitting Tarpaulin', '1596748360_lorryfit.png', 'Fitting', 1),
(504, 2, 'Vehicle cover Front', 'Vehicle cover (front) - Negotiable', '1596748627_cover1.png', 'Front', 2),
(505, 2, 'Vehicle cover Back', 'Vehicle cover (Back)', '1596748680_cover2.png', 'Back', 3),
(506, 2, 'Pick-up Tent', 'For your pick up in canvas - Negotiable', '1596485219_pickup.jpg', 'Vehicle', 7),
(507, 1, 'Tent1', '100 to 150 Seater', '1596749885_tent1.png', 'tent1', 2),
(508, 1, 'Tent2', 'GABEL/FLAT (100, 120 and 150 seater)', '1596750059_tent2.png', 'tent2', 1),
(509, 1, 'Tent3', 'GABEL/FLAT (50 Seater)', '1596750123_tent3.png', 'tent3', 3),
(510, 1, 'Tent4', 'Size (12 x 10), Four or Three sided', '1596750347_tent7.png', 'tent4', 1),
(511, 3, 'Gad1', 'Ripstope and Canvas Material (7 years guarantee)', '1596751169_gad1.png', 'gad1', 7),
(512, 3, 'Gad2', 'All done using Ripstope material', '1596751260_gad2.png', 'gad2', 8),
(513, 3, 'Gad3', 'Made of Shadenet/pvc', '1596751385_gad3.png', 'gad3', 7),
(514, 4, 'Camping', 'Blessed tents camp setup', '1596751676_65D56AE9C3DE4DC092292D16BF55F54F.jpg', 'camping', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tent_brands`
--

CREATE TABLE `tent_brands` (
  `brand_id` int(100) NOT NULL,
  `brand_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tent_brands`
--

INSERT INTO `tent_brands` (`brand_id`, `brand_name`) VALUES
(1, 'MSR'),
(2, 'Big Agnes'),
(3, 'Coleman'),
(4, 'Kodiak Canvas'),
(5, 'Kelty'),
(6, 'Cloth Brand'),
(7, 'R.E.I'),
(8, 'The North Face');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$n0EojXqkvm.PezX1hRm9pO01ioVU5htXAN6CL86dFkSvs/ml2M32.'),
(3, 'Admin2', 'admin@administrator.com', '$2y$10$OMXYeUKBs8nm9tB4jlp3dOVw/c/FxFVrLYMfOyJKYaJxlkK1lfnOm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tent_brands`
--
ALTER TABLE `tent_brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=515;

--
-- AUTO_INCREMENT for table `tent_brands`
--
ALTER TABLE `tent_brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
