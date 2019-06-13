-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2019 at 12:25 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `spa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontaktai`
--

CREATE TABLE `kontaktai` (
  `id` int(11) NOT NULL,
  `pav` varchar(300) NOT NULL,
  `kodas` varchar(100) NOT NULL,
  `miestas` varchar(100) NOT NULL,
  `gatve` varchar(100) NOT NULL,
  `tel` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kontaktai`
--

INSERT INTO `kontaktai` (`id`, `pav`, `kodas`, `miestas`, `gatve`, `tel`) VALUES
(1, 'Yin & Yang Spa', '05678', 'Kaunas', 'Šiluvos g. 8', 867474955),
(2, 'UAB Harmonija', '1002345678', 'Kaunas', 'Šiluvos g. 8', 867474955);

-- --------------------------------------------------------

--
-- Table structure for table `masazistai`
--

CREATE TABLE `masazistai` (
  `id` int(4) NOT NULL,
  `vardas` varchar(30) NOT NULL,
  `pavarde` varchar(30) NOT NULL,
  `tel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `masazistai`
--

INSERT INTO `masazistai` (`id`, `vardas`, `pavarde`, `tel`) VALUES
(1, 'Jurgita', 'Brazauskaitė', '+37067606956'),
(2, 'Arūnas', 'Gražuoliūnas', '+37067474955');

-- --------------------------------------------------------

--
-- Table structure for table `paslaugos`
--

CREATE TABLE `paslaugos` (
  `id` int(4) NOT NULL,
  `paslauga` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci DEFAULT NULL,
  `trukme` varchar(255) DEFAULT NULL,
  `kaina` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paslaugos`
--

INSERT INTO `paslaugos` (`id`, `paslauga`, `trukme`, `kaina`) VALUES
(5, 'Karštų akmenų masažas ', '60 min ', 50),
(6, 'Taškinis pėdų ir galvos masažas ', '60 min ', 40),
(7, 'Chiromasažas ', '60 min ', 50),
(8, 'Kobido masažas ', '60 min ', 50),
(9, 'Atpalaiduojantis ritualas Yin&Yang ', '120 min ', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ma', 'ma@ma.lt', 'b74df323e3939b563635a2cba7a7afba'),
(2, 'zose', 'zose@zose.lt', '8ce4b16b22b58894aa86c421e8759df3'),
(3, 'dalia', 'budriened@gmail.com', '5e6e3d387a8e029ba1a6176684d524bd'),
(4, 'monika', 'm@m.lt', '6f3fc039bfe1efdb272111f276a0e84a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontaktai`
--
ALTER TABLE `kontaktai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masazistai`
--
ALTER TABLE `masazistai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paslaugos`
--
ALTER TABLE `paslaugos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontaktai`
--
ALTER TABLE `kontaktai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `masazistai`
--
ALTER TABLE `masazistai`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paslaugos`
--
ALTER TABLE `paslaugos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
