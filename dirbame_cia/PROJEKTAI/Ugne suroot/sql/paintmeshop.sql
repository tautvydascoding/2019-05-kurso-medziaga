-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019 m. Bir 13 d. 14:23
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paintmeshop`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `about`
--

CREATE TABLE `about` (
  `id` int(6) NOT NULL,
  `atext` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `about`
--

INSERT INTO `about` (`id`, `atext`, `title`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Hello there!');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `carousel`
--

CREATE TABLE `carousel` (
  `id` int(6) NOT NULL,
  `imgname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `carousel`
--

INSERT INTO `carousel` (`id`, `imgname`) VALUES
(2, 'slider-img-2.jpg'),
(3, 'slider-img-3.jpg'),
(4, 'slider-img-4.jpg');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `contactform`
--

CREATE TABLE `contactform` (
  `id` int(6) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `email`, `message`) VALUES
(2, 'Ugnė Gajauskaitė', 'u.gajauskaite@gmail.com', 'Pirmoji sms'),
(3, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'Pirmoji Å¾inutÄ—'),
(4, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'Dar kartÄ… iÅ¡bandau :)'),
(5, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'Dar kartÄ… iÅ¡bandau :)'),
(6, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'Dar kartÄ… iÅ¡bandau :)'),
(7, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'Dar kartÄ… iÅ¡bandau :)'),
(8, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'Aleliuja aleliuja'),
(14, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'Laba diena su vistiena'),
(15, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'Laba diena su visti'),
(17, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'Laba diena su visti'),
(18, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'Laba diena'),
(19, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'Laba diena,\r\nRasau jums laiska... Bla bla bla.'),
(20, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'Laaaaaa'),
(21, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'nyjhtfedw'),
(22, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'nyjhtfedw'),
(23, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'dwsa'),
(27, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'zxcfhjbnjm,'),
(29, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'fcghjk'),
(30, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'kkkk'),
(32, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'hbugiok'),
(33, 'UgnÄ— GajauskaitÄ—', 'u.gajauskaite@gmail.com', 'lalaa');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `images`
--

CREATE TABLE `images` (
  `id` int(6) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `images`
--

INSERT INTO `images` (`id`, `name`) VALUES
(1, 'header-img-1'),
(2, 'header-img-2'),
(3, 'acrylic-canva-playing.jpg'),
(4, 'acrylic-canva-contrast.jpg'),
(5, 'acrylic-canva-goals.jpg'),
(6, 'acrylic-canva-visionary.jpg'),
(7, 'acrylic-canva-brightside.jpg');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `items`
--

CREATE TABLE `items` (
  `id` int(6) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `price` decimal(19,2) DEFAULT NULL,
  `imgname` varchar(50) DEFAULT NULL,
  `thumbnail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `imgname`, `thumbnail`) VALUES
(1, 'Playing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '200.00', 'acrylic-canva-playing.jpg', 'canva-playing-thumb.png'),
(2, 'Bright side', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '150.00', 'acrylic-canva-brightside.jpg', 'canva-brightside-thumb.png'),
(3, 'Effect', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '50.00', 'acrylic-canva-effect.jpg', 'canva-effect-thumb.png'),
(4, 'Contrast', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '150.00', 'acrylic-canva-contrast.jpg', 'canva-contrast-thumb.png'),
(5, 'Visionary', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '150.00', 'acrylic-canva-visionary.jpg', 'canva-visionary-thumb.png'),
(6, 'Goals', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '150.00', 'acrylic-canva-goals.jpg', 'canva-goals-thumb.png');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `navigation`
--

CREATE TABLE `navigation` (
  `id` int(6) NOT NULL,
  `item` varchar(50) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `navigation`
--

INSERT INTO `navigation` (`id`, `item`, `link`) VALUES
(1, 'Home', 'index.php'),
(2, 'Products', 'products.php'),
(3, 'About', 'about.php'),
(4, 'Contact', 'contacts.php');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `orders`
--

CREATE TABLE `orders` (
  `id` int(6) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `canvaname` varchar(500) DEFAULT NULL,
  `totalprice` decimal(19,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `orders`
--

INSERT INTO `orders` (`id`, `name`, `lname`, `email`, `phone`, `address`, `city`, `country`, `message`, `canvaname`, `totalprice`) VALUES
(4, 'UgnÄ— GajauskaitÄ—', 'h', 'u.gajauskaite@gmail.com', '867153595', 'J. Semaskos g. 28', 'Kaunas', 'Lietuva', '', 'Playing', NULL),
(5, 'Ugne', 'Gajauskaite', 'u.gajauskaite@gmail.com', '67153595', 'J. Semaskos g. 28', 'Kaunas', 'Lietuva', '', 'Goals, Visionary, Contrast', '450.0000');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(5, 'Supervepla', 'nunu.nuoma@gmail.com', '618ee48a0be189e6c9c7c4109d8987'),
(6, 'Ugne', 'ugne.gaja@gmail.com', '378739c769711a239ec60b6894be16'),
(7, 'Ugnejus', 'u.gajauskaite@gmail.com', '278476167da39c69c108bae8d2df30'),
(8, 'Vel as', 'mb.veri.meni@gmail.com', '278476167da39c69c108bae8d2df30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
