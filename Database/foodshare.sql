-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 10:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `a_id` int(11) NOT NULL,
  `article_type` varchar(10) NOT NULL DEFAULT 'Blog',
  `title` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `img4` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`a_id`, `article_type`, `title`, `description`, `img1`, `img2`, `img3`, `img4`, `status`) VALUES
(3, 'Blog', 'Food Sharing Revolution ', 'Food wastage is a massive problem in today’s world. One third of all food produced in the world goes to waste. Some restaurants have a policy to not serve food from previous day, despite being perfectly edible.\r\nFSR (Food Sharing Revolution) is a Food Waste Management System that bridges the gap between restaurants, functions and events (excess food) and NGOs that run orphanages (deficit food). The excess food is directed to the needy people. This system enables restaurants, event managers, NGOs and logistics to work together in order to use the excess food efficiently. The restaurants and event managers can upload the details of the excess food and its consumption period. The NGOs can view these details and request the logistics within the feasible distance to pick up and deliver the food. The logistics can charge the requesting NGO for deliveries by sending them invoices which is later paid by the NGO. In addition to this the restaurant can also generate a report of amount of food wasted so they can analyze the pattern and reduce wastage.', 'FSR.jfif', '', '', '', 'active'),
(8, 'Blog', 'Food Waste Management', 'An insight into what food waste really means and the processes that create it. Reducing food loss is a global, multidimensional challenge, so what can the foodservice industry specifically do to be more mindful of its role in the food value chain?\r\n', 'FM.jfif', '', '', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `m_no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`m_no`, `name`, `email`, `message`) VALUES
(1, 'Praja S S', 'sspraja03@gmail.com', 'Very Useful'),
(2, 'Sreeni', 'Sreeni@gmail.com', 'Loved the idea to manage food waste');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `fid` int(11) NOT NULL,
  `foodname` text NOT NULL,
  `qty` int(11) NOT NULL,
  `restaurant` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`fid`, `foodname`, `qty`, `restaurant`) VALUES
(1, 'Chapatti', 10, 'ABC Hotel'),
(2, 'Idly-Dosa', 15, 'ABC Hotel'),
(3, 'Roti with Gravy', 10, 'XYZ Foods');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_log`
--

CREATE TABLE `ngo_log` (
  `foodname` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `restaurant` varchar(20) NOT NULL,
  `ngo` varchar(20) NOT NULL,
  `logistics` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo_log`
--

INSERT INTO `ngo_log` (`foodname`, `qty`, `restaurant`, `ngo`, `logistics`) VALUES
('Chappati', 10, 'ABC Hotel', 'For People', 'Sreeni');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `address`, `city`, `phone`, `mail`, `password`, `type`) VALUES
(1, 'ABC Hotel', 'Ganapathy', 'Coimbatore', 9095570707, 'abchotel@gmail.com', '112233', 'Restaurant'),
(2, 'XYX Foods', 'RS Puram', 'Coimbatore', 9999999999, 'xyzfoods@gmail.com', '12344321', 'Restaurant'),
(3, 'For People', 'Peelamedu', 'Coimbatore', 9090909090, 'forpeople@gmail.com', '12341234', 'NGO'),
(4, 'Success@OurHands', 'RS Puram', 'Coimbatore', 9898989898, 'successatourhands@gmail.com', '123123', 'NGO'),
(5, 'Sreeni', 'Ganapathy', 'Coimbatore', 9868799090, 'sreeni@gmail.com', '121212', 'Logistics');

-- --------------------------------------------------------

--
-- Table structure for table `reqfood`
--

CREATE TABLE `reqfood` (
  `r_id` int(11) NOT NULL,
  `foodname` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `restaurant` varchar(20) NOT NULL,
  `ngo` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reqfood`
--

INSERT INTO `reqfood` (`r_id`, `foodname`, `qty`, `restaurant`, `ngo`, `status`) VALUES
(1, 'Chappati', 10, 'ABC Hotel', 'For People', 'Delivered'),
(2, 'Idly and Dosa', 15, 'ABC Hotel', 'For People', 'Request Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`m_no`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reqfood`
--
ALTER TABLE `reqfood`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `m_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `reqfood`
--
ALTER TABLE `reqfood`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
