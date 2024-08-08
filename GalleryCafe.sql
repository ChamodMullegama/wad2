-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2024 at 08:02 AM
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
-- Database: `kdhdcsecmu_65_74`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`) VALUES
(1, 'gf', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(10) NOT NULL,
  `customer_name` varchar(225) NOT NULL,
  `customer_email` varchar(225) NOT NULL,
  `customer_phone` varchar(225) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time(6) NOT NULL,
  `guests` int(225) NOT NULL,
  `table_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(225) NOT NULL,
  `customer_email` varchar(225) NOT NULL,
  `customer_password` varchar(225) NOT NULL,
  `customer_otp` varchar(225) NOT NULL,
  `customer_vstatus` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_otp`, `customer_vstatus`) VALUES
(37, 'test', 'test@gmail.com', '$2y$10$IaVRdDznT7yROnMxW9vcQOVMBB9J/BCbq0UvnWNfBb9LsZsSqyktu', '149095', 1),
(38, 'user', 'user@gmail.com', '$2y$10$d3ybU/qpM9MhWJhDaUEYt.MFVmpJPyO0sPZGRuRRZCXLlCiiqNqfy', '918838', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `comment`, `rating`) VALUES
(17, 'Jasintha Bandara', 'kingchamod2001@gmail.com', 'Tiny paradise! Bar\'s a blast, pool\'s chill, food\'s yum! Easy parking, book ahead, ', 0),
(20, 'Chamod Mullegama', 'chamod.mullegama@gmail.com', 'Sweet spot! Bar vibes, cool pool, tasty eats, easy park, book in, discounts ace!', 0),
(21, 'Lakshan Dissanayake', 'lakshan@gmail.com', 'Cozy charm! Bar buzz, pool calm, eats delish, park breeze, book easy, deals fab!', 0),
(23, 'Michel Disanayake', 'michel@gmail.com', 'Top bar, chill pool, yum food! Effortless parking, quick booking, fab discounts', 0),
(24, 'Lakshitha Aabekon', 'lakshithaabe@gmailcom', 'Ace bar, calm pool, heavenly food! Simple parking, easy booking, awesome discounts', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `gallery_image` varchar(225) NOT NULL,
  `gallery_discrition` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_image`, `gallery_discrition`) VALUES
(62, '../uploaded_img/gallery/Burgers_&_Sandwiches.jpg', 'Burgers & Sandwiches'),
(63, '../uploaded_img/gallery/Noodles.jpg', 'Noodles'),
(64, '../uploaded_img/gallery/rice.jpg', 'Rice'),
(68, '../uploaded_img/gallery/kottu.jpg', 'Kottu'),
(71, '../uploaded_img/gallery/pexels-thomas-balabaud-1579739.jpg', 'Tables'),
(73, '../uploaded_img/gallery/download (1).jpeg', 'View'),
(74, '../uploaded_img/gallery/banner-home1-1920x1280.jpg', 'Pool'),
(75, '../uploaded_img/gallery/download (2).jpeg', 'Car Park'),
(78, '../uploaded_img/gallery/attic colombo.jpg', 'Night Club'),
(79, '../uploaded_img/gallery/download (3).jpeg', 'Spa');

-- --------------------------------------------------------

--
-- Table structure for table `offer_promoction`
--

CREATE TABLE `offer_promoction` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offer_promoction`
--

INSERT INTO `offer_promoction` (`id`, `name`, `description`) VALUES
(5, 'Combo Delights', 'Discover our Combo Delights—perfectly paired meals at unbeatable prices'),
(6, 'Themed Thursday Nights', 'Explore diverse cuisines every Thursday at our Themed Nights'),
(7, 'Loyalty Rewards Program', 'Join our Loyalty Program for exclusive discounts and VIP benefits'),
(8, 'Weekend Brunch Buffet', 'Indulge in a lavish weekend Brunch Buffet with breakfast favorites'),
(9, 'Date Night Specials', 'Experience romance with our exclusive Date Night menu for two'),
(10, 'Online Ordering Discounts', 'Order online for exclusive discounts on your favorite dishes'),
(12, 'Chef\'s Special Tasting Menu', 'Taste our weekly Chef\'s Special Menu—pure culinary delight'),
(14, 'Happy Hour Tapas & Cocktails', 'Sip and savor during Happy Hour—discounted tapas and cocktails');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `customer_email` varchar(100) DEFAULT NULL,
  `customer_phone` varchar(20) DEFAULT NULL,
  `customer_address` varchar(255) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `detail_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_id` int(10) NOT NULL,
  `Product_name` varchar(225) NOT NULL,
  `Product_price` int(225) NOT NULL,
  `Product_category` varchar(225) NOT NULL,
  `Product_image` varchar(100) NOT NULL,
  `product_discrition` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `Product_name`, `Product_price`, `Product_category`, `Product_image`, `product_discrition`) VALUES
(42, 'Hot Burger', 300, 'Burger', '../uploaded_img/product/amirali-mirhashemian-jh5XyK4Rr3Y-unsplash.jpg', 'hot'),
(44, 'Cheese Pizza', 800, 'Pizza', '../uploaded_img/product/freshly-italian-pizza-with-mozzarella-cheese-slice-generative-ai.jpg', 'cheese'),
(46, 'Pepperoni pizza', 900, 'Pizza', '../uploaded_img/product/mix-pizza-chicken-tomato-bell-pepper-olives-mushroom-side-view.jpg', 'Pepperoni pizza'),
(50, 'Hawaiian Pizza', 1200, 'Pizza', '../uploaded_img/product/front-view-pizza-with-cheese-brown-round-wooden-desk-dark-surface.jpg', 'Hawaiian Pizza'),
(55, 'Fried Rice', 650, 'Rice', '../uploaded_img/product/fried-rice-with-minced-pork-tomato-carrot-cucumber-plate.jpg', 'Fried Rice'),
(57, 'Basmati Rice', 700, 'Rice', '../uploaded_img/product/side-view-pilaf-with-stewed-beef-meat-plate.jpg', 'Basmati Rice'),
(58, 'Yellow Rice', 450, 'Rice', '../uploaded_img/product/curry-fried-rice.jpg', 'Yellow Rice'),
(60, 'Pasta', 350, 'Pasta', '../uploaded_img/product/gettyimages-637214478-612x612.jpg', 'Pasta'),
(61, 'Pasta with king prawns', 500, 'Pasta', '../uploaded_img/product/gettyimages-183869552-612x612.jpg', 'Pasta with king prawns'),
(62, 'Spaghetti bolognese', 600, 'Pasta', '../uploaded_img/product/gettyimages-1360347881-612x612.jpg', 'Spaghetti bolognese'),
(63, 'Kottu', 400, 'Kottu', '../uploaded_img/product/gettyimages-1075480202-612x612.jpg', 'Kottu'),
(65, ' Pork Kottu', 800, 'Kottu', '../uploaded_img/product/download (4).jpeg', ' Pork Kottu'),
(66, 'Seafood Kottu', 1000, 'Kottu', '../uploaded_img/product/download (5).jpeg', 'Seafood Kottu'),
(68, 'Chocolate & Oreo Mousse', 900, 'Desserts', '../uploaded_img/product/images (1).jpeg', 'Chocolate & Oreo Mousse'),
(69, ' Cheese Cake', 1000, 'Desserts', '../uploaded_img/product/download (6).jpeg', ' Cheese Cake'),
(72, 'Special Ice Cream', 700, 'Desserts', '../uploaded_img/product/download (8).jpeg', 'Special Ice Cream'),
(73, 'Blueberry Iced Tea', 700, 'Beverages', '../uploaded_img/product/images (3).jpeg', 'Blueberry Iced Tea'),
(74, ' Strawberry Milkshake', 850, 'Beverages', '../uploaded_img/product/images (4).jpeg', ' Strawberry Milkshake'),
(76, ' Strawberry Mojito', 650, 'Beverages', '../uploaded_img/product/images (6).jpeg', ' Strawberry Mojito'),
(77, 'Lemon Chicken Soup', 400, 'Soups and Salads', '../uploaded_img/product/download (9).jpeg', 'Lemon Chicken Soup'),
(78, 'Chinese Fish Soup', 600, 'Soups and Salads', '../uploaded_img/product/images (7).jpeg', 'Chinese Fish Soup'),
(79, 'Winterfell`S Winter Vegetable Soup', 500, 'Soups and Salads', '../uploaded_img/product/images (8).jpeg', 'Winterfell`S Winter Vegetable Soup'),
(80, ' Cheese & Tomato Sandwich', 350, 'Burger', '../uploaded_img/product/download (10).jpeg', ' Cheese & Tomato Sandwich');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(10) NOT NULL,
  `service_name` varchar(225) NOT NULL,
  `service_image` varchar(225) NOT NULL,
  `service_description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_image`, `service_description`) VALUES
(51, 'Takeout/Delivery', '../uploaded_img/services/denise-jans-nrxAD-M2sFU-unsplash.jpg', 'Meals prepared by the restaurant for customers to either pick up or have delivered to their location. It provides convenience for those who prefer to dine at home or elsewhere'),
(52, 'Fine Dining', '../uploaded_img/services/jay-wennington-N_Y88TWmGwA-unsplash.jpg', 'Offers high-quality cuisine, elegant ambiance, attentive service, and often a more formal dining experience. It emphasizes a sophisticated atmosphere and meticulous attention to detail.'),
(55, 'Bar', '../uploaded_img/services/taylor-davidson-iwWJFIlnDm4-unsplash.jpg', 'In a designated bar area, skilled bartenders craft a diverse selection of alcoholic and non-alcoholic beverages, including cocktails. Additionally, there is a pool available in the bar area'),
(56, 'Fine Dining', '../uploaded_img/services/pexels-thomas-balabaud-1579739 (1).jpg', 'Offers high-quality cuisine, elegant ambiance, attentive service, and often a more formal dining experience. It emphasizes a sophisticated atmosphere and meticulous attention to detail.'),
(58, 'Spa', '../uploaded_img/services/download (3).jpeg', 'Experience relaxation and rejuvenation at our spa offering a variety of services tailored for your well-being. Indulge in massages, facials, body treatments, mani-pedis, and hydrotherapy'),
(63, 'Car Park', '../uploaded_img/services/download (2).jpeg', 'our car park services ensure convenience and security for your vehicles. Choose between valet or self-parking options, benefit  benefit from our from our security surveillance'),
(65, 'Gym', '../uploaded_img/services/Interior-Design-For-Gyms-in-Sri-Lanka.jpg', 'Work out in our top-notch gym with modern cardio and strength equipment. Join group classes or personalized sessions led by experienced trainers. 24/7 access to locker room'),
(67, 'Live Music Evenings', '../uploaded_img/services/Glow-Bar_418394_159_colombo_218_168.jpg', 'Experience enchanting evenings with live music as talented performers serenade you while you savor delicious cuisine. A perfect fusion of food and soulful melodies awaits');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(225) NOT NULL,
  `user_email` varchar(225) NOT NULL,
  `user_password` varchar(225) NOT NULL,
  `user_hashpassword` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`user_id`, `user_name`, `user_email`, `user_password`, `user_hashpassword`, `user_type`) VALUES
(12, 'staff', 'staffa@gmail.com', '1234', '$2y$10$Qu4xhNx3w38YCupOUvYG8eoNpeC/cShGUoN1Ec.uTZJhmd7uOkxNG', 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_promoction`
--
ALTER TABLE `offer_promoction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `offer_promoction`
--
ALTER TABLE `offer_promoction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
