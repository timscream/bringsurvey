-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2022 at 02:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bringsurveydemo`
--
CREATE DATABASE IF NOT EXISTS `bringsurveydemo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `bringsurveydemo`;

-- --------------------------------------------------------

--
-- Table structure for table `social_network`
--

CREATE TABLE `social_network` (
  `internalid` int(10) UNSIGNED ZEROFILL NOT NULL,
  `name_social_network` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `social_network`:
--

--
-- Dumping data for table `social_network`
--

INSERT INTO `social_network` (`internalid`, `name_social_network`) VALUES
(0000000001, 'Facebook'),
(0000000002, 'Twitter'),
(0000000003, 'Instagram'),
(0000000004, 'TikTok'),
(0000000005, 'Whatsapp');

-- --------------------------------------------------------

--
-- Table structure for table `surveys_completed`
--

CREATE TABLE `surveys_completed` (
  `internalid` int(10) UNSIGNED NOT NULL,
  `email_respondent` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` enum('18-25','26-33','34-40','40+') COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `gender` enum('Masculino','Femenino') COLLATE utf8mb4_spanish2_ci NOT NULL,
  `favorite_social_network` int(11) NOT NULL,
  `avg_fb` tinyint(2) UNSIGNED ZEROFILL NOT NULL,
  `avg_wa` tinyint(2) UNSIGNED ZEROFILL NOT NULL,
  `avg_tw` tinyint(2) UNSIGNED ZEROFILL NOT NULL,
  `avg_ig` tinyint(2) UNSIGNED ZEROFILL NOT NULL,
  `avg_tt` tinyint(2) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- RELATIONSHIPS FOR TABLE `surveys_completed`:
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `social_network`
--
ALTER TABLE `social_network`
  ADD PRIMARY KEY (`internalid`),
  ADD UNIQUE KEY `uk_social_network` (`name_social_network`);

--
-- Indexes for table `surveys_completed`
--
ALTER TABLE `surveys_completed`
  ADD PRIMARY KEY (`internalid`),
  ADD UNIQUE KEY `uk_email_respondent` (`email_respondent`),
  ADD KEY `favorite_social_network` (`favorite_social_network`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `social_network`
--
ALTER TABLE `social_network`
  MODIFY `internalid` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surveys_completed`
--
ALTER TABLE `surveys_completed`
  MODIFY `internalid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
