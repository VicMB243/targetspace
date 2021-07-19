-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 12:56 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `targetspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE `adverts` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adverts`
--

INSERT INTO `adverts` (`id`, `username`, `email`, `phone`, `subject`, `description`, `date_time`) VALUES
(6, 'user4', 'info@crossnetmeet.com', 'my company', 'nairobi', '96000', '2021-07-16 17:01:14'),
(7, 'user4', 'info@crossnetmeet.com', '07000000000', 'Restore password', ',m,,,m', '2021-07-19 15:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `username`, `email`, `message`, `date_time`) VALUES
(6, 'user254', 'superadmin@gmail.com', 'new msg, DevTools failed to load source map: Could not load content for http://localhost/vesen_computing/targetspace/stylesheet/bootstrap.css.map: HTTP error: status code 404, net::ERR_HTTP_RESPONSE_CODE_FAILURE', '2021-07-19 15:13:50'),
(4, 'admin', 'user44@gmail.com', 'vnbnbbvn', '2021-07-16 16:27:31'),
(5, 'admin', 'user44@gmail.com', 'vnbnbbvn', '2021-07-16 16:31:10'),
(7, 'user2542', 'superadmin@gmail.com', 'new msg2, DevTools failed to load source map: Could not load content for http://localhost/vesen_computing/targetspace/stylesheet/bootstrap.css.map: HTTP error: status code 404, net::ERR_HTTP_RESPONSE_CODE_FAILURE', '2021-07-19 15:17:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
