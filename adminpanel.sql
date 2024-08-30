-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 03:26 PM
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
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `category` varchar(15) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `image1`, `image2`, `image3`, `description`, `image`) VALUES
(1, 'Hass Avocado', 'Fruits', 'assets/img/portfolio/hassavocado1.jpg', 'assets/img/portfolio/hassavocado2.jpg', 'assets/img/portfolio/hassavocado3.jpg', 'This is our widely grown variety of avocadoes in both Kenya and Tanzania.\r\nThe wide spread of our farms in different regions ensures year-round supply to our customers due to different harvesting seasons in different regions.</p><p>We use organic means of cultivation in our farms to ensure the production of healthy avocadoes.</p>\r\n<p>Our farms are also Global gap certified having met the global gap standards hence guaranteeing the quality of products.', 'assets/img/portfolio/hassavocado.jpg'),
(2, 'Fuerte Avocado', 'Fruits', 'assets/img/portfolio/fuerteavocado1.jpg', 'assets/img/portfolio/fuerteavocado2.jpg', 'assets/img/portfolio/fuerteavocado3.jpg', 'We also produce and Export Fuerte Avocadoes worldwide. Our main customers are supermarkets and production companies.</p>\r\n<p>Our farms are divided into blocks in different regions to ensure all year-round supply.', 'assets/img/portfolio/fuerteavocado.jpg'),
(3, 'Passion Fruit', 'Fruit', 'assets/img/portfolio/passionfruit1.jpg', 'assets/img/portfolio/passionfruit2.jpg', 'assets/img/portfolio/passionfruit1.jpg', 'KENFRU VEG PRODUCE Passion fruit is a tasty and healthy tropical fruit that is becoming more and more popular, especially among health-conscious consumers.</P>\r\n<P>KENFRU VEG PRODUCE is happy to supply sweet and quality passion fruits in great quantities to all our clients worldwide.</p>\r\n<p>We finance and train farmers to grow and maintain passion fruits in porder to produce the best quality.', 'assets/img/portfolio/passionfruit.jpg'),
(4, 'Apple Mango', 'Fruit', 'assets/img/portfolio/applemango1.jpg', 'assets/img/portfolio/applemango2.jpg', 'assets/img/portfolio/applemango3.jpg', 'Apple mangoes are one of the sweetest varieties of mangoes worldwide. We majorly export apple mangoes to supermarkets and Mango juice processing companies in Qatar and other countries in the Middle East.</p>\r\n<p>\r\nWe have trained farmers from different regions in East Africa to ensure that our customers have a steady supply through out the year.', 'assets/img/portfolio/applemango.jpg'),
(5, 'Kent Mango', 'Fruit', 'assets/img/portfolio/kentmango1.jpg', 'assets/img/portfolio/kentmango2.jpg', 'assets/img/portfolio/kentmango3.jpg', 'KENFRU VEG PRODUCE Kent Mangoes are juicy, fresh and tasty with limited amount of fibre making them a prefarable by many people.</p>\r\n<p>\r\nWe have farms in both Kenya and Tanzania where we train our farmers to produce both quality and quantity which are approved for export hence ensuring steady flow to our clients all year round.', 'assets/img/portfolio/kentmango.jpg'),
(7, 'Pineapple', 'Fruit', 'assets/img/portfolio/pineapple1.jpg', 'assets/img/portfolio/pineapple2.jpg', 'assets/img/portfolio/pineapple3.jpg', 'KENFRU VEG PRODUCE pineapples are sweet and healthy for the body. Thet are approved for export in both Kenya and Tanzania. We grow Hybrid MD2 and Smooth Catanne pineapple varieties. We have farms in both Kenya and Tanzania which Guarantee all year round supply.</p>\r\n<p>\r\nDue to our large quantity of produce we are capable of exporting large amounts of pineapples on weekly basis by flight to our customers destination.', 'assets/img/portfolio/pineapple.jpg'),
(8, 'Tomatoes', 'Vegetables', 'assets/img/portfolio/tomatoes1.jpg', 'assets/img/portfolio/tomatoes2.jpg', 'assets/img/portfolio/tomatoes3.jpg', 'Kenyan tomatoes stand out as one of the best varieties of tomatoes worldwide. KENFRU VEG PRODUCE is a proud exporter of tomatoes from East Africa. </p>\r\n<p>We ensure that our consumers enjoy healthy and tasty tomatoes from a brand that is respected for exporting the best tomatoes </p>\r\n<p>We have a large network of farmers in the East African Region to ensure that our customers receive a steady supply for the whole year.\r\n\r\n', 'assets/img/portfolio/tomatoes.jpg'),
(9, 'Watermelon', 'Fruit', 'assets/img/portfolio/watermelon1.jpg', 'assets/img/portfolio/watermelon2.jpg', 'assets/img/portfolio/watermelon3.jpg', 'KENFRU VEG PRODUCE is one of the leading leading watermelon exporting companies in Kenya and Tanzania. Our customers are guaranteed of stady supply through out the year due to our large network of farmers in different regions. </p>\r\n<p>Aside from our farms, we also train local farmers on the best watermelon varieties to produce hence our customers are assured of quality. ', 'assets/img/portfolio/watermelon.jpg'),
(10, 'Ginger', 'Vegetable', 'assets/img/portfolio/ginger1.jpg', 'assets/img/portfolio/ginger2.jpg', 'assets/img/portfolio/ginger3.jpg', 'KENFRU VEG PRODUCE is one of the leading suppliers of ginger world wide. We offer all year round supply to our customers from our farmsa and large network of farmers in ouur circle.</p>\r\n<p>We practice and encourage our farmers to grow organic ginger and therefore we are proud to say we have the best quality in the market.</p>\r\n<p>\r\nWe export ginger to our customers worldwide, including but not limitted to Qatar, Newzealamnd and SouthAfrica. We supply both locally and internationally in large quantities.', 'assets/img/portfolio/ginger.jpg'),
(11, 'Pawpaw', 'Fruit', 'assets/img/portfolio/pawpaws1.jpg', 'assets/img/portfolio/pawpaws2.jpg', 'assets/img/portfolio/pawpaws3.jpg', 'Kenyan Pawpaws have a sweet, tropical flavor and are the biggest edible fruit that is exported by Kenfru Veg Produce.</p>\r\n<p>\r\nKENFRU VEG PRODUCE offers financing and training to our large network of farmers in order to guarantee quality and steady supply to our customers all year round.', 'assets/img/portfolio/pawpaws.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
