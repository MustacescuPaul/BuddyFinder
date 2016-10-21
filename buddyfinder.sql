-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2016 at 03:52 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buddyfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `bf_events`
--

CREATE TABLE `bf_events` (
  `eventID` int(20) NOT NULL,
  `eventTitle` varchar(100) NOT NULL,
  `eventCity` varchar(100) NOT NULL,
  `eventCategory` varchar(100) NOT NULL,
  `evenitUser` varchar(100) NOT NULL,
  `eventStart` date NOT NULL,
  `eventStop` date NOT NULL,
  `eventImages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bf_users`
--

CREATE TABLE `bf_users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `birthday` date NOT NULL,
  `password` varchar(128) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `attached_file` int(11) DEFAULT '1',
  `avatar_file` varchar(500) NOT NULL DEFAULT 'avatar.gif',
  `profile_description` longtext,
  `paypal_account` varchar(255) NOT NULL,
  `social_facebook` varchar(255) NOT NULL,
  `social_twitter` varchar(255) NOT NULL,
  `social_website` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `join_date` datetime NOT NULL,
  `remember_me` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bf_events`
--
ALTER TABLE `bf_events`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `bf_users`
--
ALTER TABLE `bf_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bf_events`
--
ALTER TABLE `bf_events`
  MODIFY `eventID` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bf_users`
--
ALTER TABLE `bf_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
