-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 09:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `conts`
--

CREATE TABLE `conts` (
  `id` int(11) NOT NULL,
  `c_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `picture` varchar(1000) NOT NULL,
  `state` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `vote` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conts`
--

INSERT INTO `conts` (`id`, `c_id`, `name`, `email`, `picture`, `state`, `gender`, `vote`, `date_created`) VALUES
(1, 'aP5irk', 'Test Example', 'user@example.com', 'uploads/7827efa480b4b40ec20c164b3247aafc7ceab1b21166c9cc37c365bddb7601ed.png', 'Enugu', 'Male', 0, '2022-03-27 17:47:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conts`
--
ALTER TABLE `conts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conts`
--
ALTER TABLE `conts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
