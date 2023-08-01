-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 05:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forumium`
--

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(255) NOT NULL,
  `replier` varchar(255) NOT NULL,
  `postID` int(255) NOT NULL,
  `repliedAt` varchar(255) NOT NULL,
  `replyMessage` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `replier`, `postID`, `repliedAt`, `replyMessage`) VALUES
(1, 'abd12', 6, '01-August-2023 05:29:54 PM', 'Reply 1 for testing purpose.'),
(2, 'abd12', 6, '01-August-2023 05:30:41 PM', 'reply 2 for testing purpose.'),
(3, 'abd12', 6, '01-August-2023 07:33:54 PM', 'Reply 3 for testing purposes'),
(4, 'root12', 6, '01-August-2023 07:34:25 PM', 'Reply 4 for testing purpose.'),
(5, 'root12', 3, '01-August-2023 07:39:11 PM', 'Reply 1 for testing purpose.'),
(6, 'root12', 6, '01-August-2023 08:33:41 PM', 'reply 5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
