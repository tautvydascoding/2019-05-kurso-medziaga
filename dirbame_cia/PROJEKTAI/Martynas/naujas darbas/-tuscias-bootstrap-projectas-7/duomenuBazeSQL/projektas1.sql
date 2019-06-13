-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2019 at 12:25 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektas1`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(6) NOT NULL,
  `headline` varchar(60) DEFAULT NULL,
  `content` text,
  `position` int(6) DEFAULT NULL,
  `showInfo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `headline`, `content`, `position`, `showInfo`) VALUES
(1, 'How 2187MARS Came to Planet Earth', 'Once upon a time, me the \'Creator\' was watching the movie called Martian, staring Matt Damon. I thought to myself, that the space suits that they were wearing were really convenient, there were many usefull pockets to carrie gadgets ot other things. Also it helped to save main characters life. So it means that space suit was Awesome. Then i started to think about my self then i was a child. I remember that i had a dream of becoming an astronaut, and conquering the stars. Then another idea came that were many kids who had simillar dreams. And that moment i\'ve decided to make clothes with resemblance to space suit. Not all of us can be astronaut or wear real space suit, but all of us can wear 2187MARS clothes, and be a Martian on planet Earth.', 1, 1),
(2, 'testingsdaddfsas', 'testingddddkmkjh;kj.kjxczxzx', 3, 3),
(8, 'bandainis1', 'pabandainis', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(6) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `lname` varchar(60) DEFAULT NULL,
  `content` text,
  `email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `lname`, `content`, `email`) VALUES
(1, 'TEST', 'test', '', 'TESTs@g.lt'),
(2, 'TEST', 'test', '', 'TESTs@g.lt'),
(3, 'TEST', 'test', '', 'TESTs@g.lt'),
(16, 'TEST', 'test', 'test\r\n', 'TESTs@g.lt'),
(17, 'TEST', 'test', 'test1111', 'TESTs@g.lt'),
(18, 'TEST', 'test', 'test1111', 'TESTs@g.lt'),
(19, 'TEST', 'test', 'test1111', 'TESTs@g.lt'),
(20, 'TEST', 'test', 'test1111', 'TESTs@g.lt'),
(21, 'TEST', 'test', 'test1111', 'TESTs@g.lt'),
(22, 'TEST', 'test', 'test1111', 'TESTs@g.lt'),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, 'TEST', 'test', 'ar vikas veikia?', 'TESTs@g.lt'),
(27, 'TEST', 'test', 'ar vikas veikia?', 'TESTs@g.lt'),
(28, 'TEST', 'test', 'ar vikas veikia?', 'TESTs@g.lt'),
(29, 'TEST', 'test', 'ar vikas veikia?', 'TESTs@g.lt'),
(30, 'TEST', 'test', 'ar vikas veikia?', 'TESTs@g.lt'),
(31, 'Bandainis', 'Pabandainis', 'Bandau ar viskas veikia?', 'bandau@bandau.com'),
(32, 'Bandainis', 'Pabandainis', 'Bandau ar viskas veikia?', 'bandau@bandau.com'),
(33, 'Bandainis', 'Pabandainis', 'Bandau ar viskas veikia?', 'bandau@bandau.com');

-- --------------------------------------------------------

--
-- Table structure for table `contactorder`
--

CREATE TABLE `contactorder` (
  `id` int(6) NOT NULL,
  `itemName` varchar(60) DEFAULT NULL,
  `price` varchar(60) DEFAULT NULL,
  `fullName` varchar(100) DEFAULT NULL,
  `fullAdrress` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `orderNr` varchar(60) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactorder`
--

INSERT INTO `contactorder` (`id`, `itemName`, `price`, `fullName`, `fullAdrress`, `email`, `orderNr`, `content`) VALUES
(1, '', '', '', '', '', '', ''),
(2, 'Brown Hoodie', '55.00', 'testing', '', 'TESTs@g.lt', '123456', 'Please transfer money to this account:\r\nSEB: LT13 7044 0002 7264 6594\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.'),
(3, 'Brown Hoodie', '55.00', 'testing', '', 'TESTs@g.lt', '123456', 'Please transfer money to this account:\r\nSEB: LTxx xxxx xxxx xxx xxxx\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.\r\n\r\n\r\nTESTING'),
(4, 'Brown Hoodie', '55.00', 'testing4', '', 'TESTs@g.lt', '123456', 'Please transfer money to this account:\r\nSEB: LTxx xxxx xxxx xxx xxxx\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.'),
(5, 'Brown Hoodie', '55.00', 'testing4', '', 'TESTs@g.lt', '123456', 'Please transfer money to this account:\r\nSEB: LTxx xxxx xxxx xxx xxxx\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.'),
(6, 'Brown Hoodie', '55.00', 'testing', '', 'TESTs@g.lt', '123456', 'Please transfer money to this account:\r\nSEB: LTxx xxxx xxxx xxx xxxx\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.'),
(7, 'Brown Turtle Neck', '50.00', 'agne', '', 'faktas@g.lt', '123456', 'Please transfer money to this account:\r\nSEB: LTxx xxxx xxxx xxx xxxx\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.\r\n\r\nI\'ve made the payment'),
(8, 'Brown Turtle Neck', '50.00', 'agne', '', 'faktas@g.lt', '123456', 'Please transfer money to this account:\r\nSEB: LTxx xxxx xxxx xxx xxxx\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.\r\n\r\nI\'ve made the payment'),
(9, 'Black Turtle Neck', '50.00', 'testing', '', 'TESTs@g.lt', '11111111', 'Please transfer money to this account:\r\nSEB: LTxx xxxx xxxx xxx xxxx\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.'),
(10, 'Black Turtle Neck', '50.00', 'testing', '', 'TESTs@g.lt', '11111111', 'Please transfer money to this account:\r\nSEB: LTxx xxxx xxxx xxx xxxx\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.'),
(11, 'Black Turtle Neck', '50.00', 'testing', 'Test', 'TESTs@g.lt', '11111111', 'Please transfer money to this account:\r\nSEB: LTxx xxxx xxxx xxx xxxx\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.'),
(12, 'Brown Hoodie', '55.00', 'testing', 'Test', 'marlav1987@yahoo.com', '123456', 'Please transfer money to this account:\r\nSEB: LTxx xxxx xxxx xxx xxxx\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(6) NOT NULL,
  `imageName` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `imageName`) VALUES
(1, 'galerija1.jpg'),
(2, 'galerija2.jpg'),
(3, 'galerija3.jpg'),
(4, 'galerija4.jpg'),
(5, 'galerija5.jpg'),
(6, 'galerija6.jpg'),
(7, 'galerija7.jpg'),
(8, 'galerija8.jpg'),
(9, 'galerija9.jpg'),
(10, 'galerija10.jpg'),
(11, 'galerija11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(6) NOT NULL,
  `imageName` varchar(60) DEFAULT NULL,
  `description` text,
  `item_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `imageName`, `description`, `item_id`) VALUES
(1, 'juodasSK.jpg', 'black hoodie', 1),
(2, 'rudasBK.jpg', 'brown turtle', 2),
(3, 'juodasBK.jpg', 'black turtle', 3),
(4, 'rudasSK.jpg', 'brown hoodie', 4);

-- --------------------------------------------------------

--
-- Table structure for table `karusele`
--

CREATE TABLE `karusele` (
  `id` int(6) NOT NULL,
  `imageName` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `karusele`
--

INSERT INTO `karusele` (`id`, `imageName`) VALUES
(1, 'karusele1.jpg'),
(2, 'karusele2.jpg'),
(3, 'karusele3.jpg'),
(4, 'karusele4.jpg'),
(5, 'karusele5.jpg'),
(6, 'karusele6.jpg'),
(8, 'testas.jpg'),
(11, 'mahackala.jpg'),
(12, 'bandainis1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders1`
--

CREATE TABLE `orders1` (
  `id` int(6) NOT NULL,
  `itemName` varchar(60) DEFAULT NULL,
  `price` varchar(60) DEFAULT NULL,
  `fullName` varchar(100) DEFAULT NULL,
  `fullAdrress` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `orderNr` varchar(60) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders1`
--

INSERT INTO `orders1` (`id`, `itemName`, `price`, `fullName`, `fullAdrress`, `email`, `orderNr`, `content`) VALUES
(3, 'Brown Hoodie', '55.00', 'testing', '', 'TESTs@g.lt', '123456', 'Please transfer money to this account:\r\nSEB: LT13 7044 0002 7264 6594\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.\r\n\r\n\r\ntesting'),
(4, 'Brown Hoodie', '55.00', 'testing', '', 'TESTs@g.lt', '123456', 'Please transfer money to this account:\r\nSEB: LT13 7044 0002 7264 6594\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.\r\n\r\nTesting'),
(5, 'Black Hoodie', '55.00', 'testing', '', 'faktas@g.lt', '123456', 'Please transfer money to this account:\r\nSEB: LTxx xxxx xxxx xxx xxxx\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.'),
(6, 'Black Hoodie', '55.00', 'testing', '', 'faktas@g.lt', '123456', 'Please transfer money to this account:\r\nSEB: LTxx xxxx xxxx xxx xxxx\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.'),
(7, 'Black Hoodie', '55.00', 'testing', '', 'faktas@g.lt', '123456', 'Please transfer money to this account:\r\nSEB: LTxx xxxx xxxx xxx xxxx\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.'),
(8, 'Brown Turtle Neck', '50.00', 'Bandainis Pabandainis', 'Bandymu Poligonas, Tahacmakala, 3058', 'bandau@bandau.com', '1234567', 'Please transfer money to this account:\r\nSEB: LTxx xxxx xxxx xxx xxxx\r\n\r\nOnce your payment is processed, you will receive a confirmation with shipping details.\r\n\r\nPlease don\'t forget to enter order number when transferring money.\r\n\r\nPlease write our additional comments here.\r\n\r\nBandau ar veikia viskas?');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(6) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `description` text,
  `price` varchar(60) DEFAULT NULL,
  `amount` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `name`, `description`, `price`, `amount`) VALUES
(1, 'Black Hoodie', 'Hoodie Jumper from 2187MARS, with convenient front pocket to have your phone or wallet or what ever you want there. It is Unisex therefore everyone can wear it.', '55.00', '1'),
(2, 'Brown Turtle Neck Jumper', 'Hoodie Jumper from 2187MARS, with convenient front pocket to have your phone or wallet or what ever you want there. It is Unisex therefore everyone can wear it. Unique clothe for Unique people', '50.00', '1'),
(3, 'Brown Hoodie', 'Hoodie Jumper from 2187MARS, with convenient front pocket to have your phone or wallet or what ever you want there. It is Unisex therefore everyone can wear it.', '55.00', '1'),
(4, 'Black Turtle Neck Jumper', 'Hoodie Jumper from 2187MARS, with convenient front pocket to have your phone or wallet or what ever you want there. It is Unisex therefore everyone can wear it.', '50.00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stock1`
--

CREATE TABLE `stock1` (
  `id` int(6) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `description` text,
  `price` varchar(60) DEFAULT NULL,
  `imageName` varchar(60) DEFAULT NULL,
  `amount` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock1`
--

INSERT INTO `stock1` (`id`, `name`, `description`, `price`, `imageName`, `amount`) VALUES
(1, 'Black Hoodie', 'Hoodie Jumper from 2187MARS, with convenient front pocket to have your phone or wallet or what ever you want there. It is Unisex therefore everyone can wear it.', '55.00', 'juodasSK.jpg', '1'),
(2, 'Brown Turtle Neck', 'Hoodie Jumper from 2187MARS, with convenient front pocket to have your phone or wallet or what ever you want there. It is Unisex therefore everyone can wear it. ', '50.00', 'rudasBK.jpg', '1'),
(3, 'Brown Hoodie', 'Hoodie Jumper from 2187MARS, with convenient front pocket to have your phone or wallet or what ever you want there. It is Unisex therefore everyone can wear it.', '55.00', 'rudasSK.jpg', '1'),
(4, 'Black Turtle Neck', 'Hoodie Jumper from 2187MARS, with convenient front pocket to have your phone or wallet or what ever you want there. It is Unisex therefore everyone can wear it.', '50.00', 'juodasBK.jpg', '1'),
(10, 'TESTfsdn.fsdkfjasd', 'Testinisafdfasdsf', '55555.00', 'testas.jpg', '5'),
(17, 'Bandainis111113', 'Pabandainis', '1000', 'bandainis.jpg', '12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactorder`
--
ALTER TABLE `contactorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karusele`
--
ALTER TABLE `karusele`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders1`
--
ALTER TABLE `orders1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock1`
--
ALTER TABLE `stock1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `contactorder`
--
ALTER TABLE `contactorder`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karusele`
--
ALTER TABLE `karusele`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders1`
--
ALTER TABLE `orders1`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock1`
--
ALTER TABLE `stock1`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
