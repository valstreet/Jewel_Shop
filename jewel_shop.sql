-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 09:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jewel_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `session_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_inquiries`
--

CREATE TABLE `contact_inquiries` (
  `inquiry_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_inquiries`
--

INSERT INTO `contact_inquiries` (`inquiry_id`, `name`, `email`, `message`, `submitted_at`) VALUES
(1, 'Valentin Chalakov', 'valentinchalakov15@gmail.com', 'Testing TEST HELLO!', '2023-12-14 23:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total_price` decimal(10,0) NOT NULL,
  `status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `description`, `price`, `stock`, `image`, `category`) VALUES
(1, 'Diamond-Studded Chain', 'An exquisite chain lavishly adorned with sparkling diamonds.', 299.99, 30, '/assets/shop-images/shop-products/chaindiamonds.jpg', 'Bracelet'),
(2, 'Gold Cuban Chain', 'A classic gold Cuban chain that exudes luxury and style.', 349.99, 20, '/assets/shop-images/shop-products/cubanchain-gold.jpg', 'Bracelet'),
(3, 'Silver Cuban Chain', 'A sleek silver Cuban chain perfect for any occasion.', 249.99, 25, '/assets/shop-images/shop-products/cubanchain-silver.jpg', 'Bracelet'),
(4, 'Gold Necklace', 'An elegant gold necklace that adds a touch of glamour.', 399.99, 15, '/assets/shop-images/shop-products/goldnecklace.jpg', 'Necklaces'),
(7, 'Silver Square Ring', 'A contemporary silver ring with a unique square design.', 129.99, 35, '/assets/shop-images/shop-products/squarering-silver.jpg', 'Rings'),
(13, 'Cuban Link Ring', 'A beautifully crafted Cuban link ring in gold, embodying strength and sophistication.', 200.00, 100, '/assets/shop-images/shop-products/cubanring.jpg', 'Rings'),
(14, 'Diamond Tennis Necklace', 'An exquisite diamond tennis necklace that exudes luxury and charm.', 500.00, 100, '/assets/shop-images/shop-products/diamondnecklace.jpg', 'Necklaces'),
(17, 'White Emerald Shape 3 Stone Diamond Ring (3.52Ct TW)', '18K Gold Emerald and Taper Diamond Ring ($59.00):\n\nRing Details: This elegant ring is crafted from 18K gold, with a ring size of 6.25 and a shank width of 2.10mm, offering a delicate yet sturdy design.\nStone Details:\nEmerald: The centerpiece is a stunning Emerald-shaped diamond, held in place by a 4-prong setting. This diamond has a G color grade, an estimated weight of 3.01Ct, and an average clarity ranging up to VVS2, ensuring exceptional brilliance and clarity.\nTaper Diamonds: Complementing the emerald are taper-shaped diamonds set in prongs. These diamonds have a G-H color grade, a total weight of 0.51Ct, and clarity ranging from VS to SI, adding a graceful sparkle to the ring.', 59000.00, 100, '/assets/shop-images/shop-products/whiteEmeraldRing.png\r\n', 'Rings'),
(18, 'Blue Sapphire Cushion Men\'s Ring (1.21Ct)\r\n', '18K Gold Blue Sapphire Cushion Men\'s Ring ($3000.00):\n\nRing Details: Fashioned in 18K gold, this men\'s ring has a substantial feel with a ring size of 9.50, a length of 8.15mm, and a shank width of 5.1mm, creating a bold statement piece.\nCenter Stone:\nSapphire: At the heart of the ring is a captivating 1.21Ct sapphire. This gemstone is cut in a cushion shape, renowned for its depth and intensity, providing a striking contrast against the gleaming gold band.', 3000.00, 100, '/assets/shop-images/shop-products/BlueSapphireRing.png', 'Rings'),
(19, 'Conquest Heritage Watch', 'Very elegant watch', 5000.00, 52, '/assets/shop-images/shop-products/CONQUESTHERITAGEwatch.png', 'Elegant Watch'),
(20, 'CONQUEST CLASSIC QUARTZ 34MM', 'Very Classy Watch', 2142.99, 50, '/assets/shop-images/shop-products/CONQUESTCLASSICQUARTZwatch.png', 'Classic Watch'),
(21, 'HYDROCONQUEST AUTOMATIC BLACK DIAL 41MM', 'Very Sporty Watch', 2000.00, 52, '/assets/shop-images/shop-products/HYDROCONQUESTAUTOMATICBLACKDIALwatch.png', 'Sporty Watch'),
(22, 'Round Diamond', 'Weight: 0.90Ct, Color: Fancy Purplish Red, Shape: Round, Clarity: I3, Intensity: Fancy, Fluorescence: Faint, Polish: Excellent, Symmetry: Fair, Stones: 1, Measurements: 6.04-6.02x3.83', 1000.00, 100, '/assets/shop-images/shop-products/roundDiamond.png;/assets/shop-images/shop-products/roundDiamond2.png', 'Diamond'),
(23, 'Emerald Cut Diamond', 'Weight: 1.32Ct, Color: Fancy Purplish Red, Argyle Color: 1PR, Shape: Radiant, Clarity: I1, Intensity: Fancy, Stones: 1, Measurements: 7.14x5.64x3.73', 1500.00, 100, '/assets/shop-images/shop-products/emeraldCutDiamond.png;/assets/shop-images/shop-products/emeraldCutDiamond2.png', 'Diamond'),
(24, 'Radiant Diamond', 'Weight: 0.43Ct, Color: Fancy Red, Shape: Radiant, Clarity: VS2, Intensity: Fancy, Fluorescence: Faint, Polish: Good, Symmetry: Good, Stones: 1, Measurements: 4.76x4.25x2.31', 800.00, 100, '/assets/shop-images/shop-products/radiantDiamond.png;/assets/shop-images/shop-products/radiantDiamond2.png', 'Diamond'),
(25, 'Oval Diamond', 'Weight: 0.50Ct, Color: Fancy Red, Argyle Color: Argyle, Shape: Oval, Clarity: SI2, Intensity: Fancy, Fluorescence: Faint, Polish: Very Good, Symmetry: Good, Stones: 1, Measurements: 6.04x4.26x2.77', 900.00, 100, '/assets/shop-images/shop-products/ovalDiamond.png;/assets/shop-images/shop-products/ovalDiamond2.png', 'Diamond');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL COMMENT 'Consider using Hash for extra security',
  `email` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `first_name`, `last_name`, `address`, `registration_date`) VALUES
(1, 'Valstreet', '$2y$10$CwX29/ERF5Zkoz9k28u5Iu1eZhepKkrx2fI9YhiKcrwiTpDkyG7wW', 'valentinchalakov15@gmail.com', '', '', '', '2023-12-13 22:00:47'),
(3, 'test2', '$2y$10$QZ0s7OxJiQhQBx7H1f30yucSwKIIUcOeeihO2fCsF4snQkwPQR4hq', 'test2@gmail.com', '', '', '', '2023-12-13 22:29:30'),
(4, 'test3', '$2y$10$86WCLPfgrHcjJmMyQpjvxumTxoyYhW5rsYLx2WRa0Fx2Zv2MCHbwi', 'tests@mail.com', '', '', '', '2023-12-14 20:09:48'),
(8, 'val', '$2y$10$ZHj4Xowynaa/Urmz9doxP.iVNIuF2/T0hivE9cnvs0Elb.r70UkOe', 'ta@gmail.com', '', '', '', '2023-12-16 18:02:35'),
(11, 'test9', '$2y$10$9Jiz5sJvoZZbSYGH8KjWnudVIWf3d20FcEyfykkTJ1NirjIkVkG12', 'testmail@mail.com', '', '', '', '2023-12-16 18:36:14'),
(12, 'valentinswipe', '', 'valentinswipe@gmail.com', '', '', '', '2023-12-17 02:39:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `contact_inquiries`
--
ALTER TABLE `contact_inquiries`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `Foreign Key` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `fk_ordersdetails_orders` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact_inquiries`
--
ALTER TABLE `contact_inquiries`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `fk_orderdetails_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ordersdetails_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
