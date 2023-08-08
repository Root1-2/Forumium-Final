-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2023 at 10:00 PM
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
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `profilePicture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `fullName`, `userName`, `email`, `dob`, `gender`, `phoneNumber`, `pass`, `profilePicture`) VALUES
(1, 'Abdullah Al Masrur', 'root12', 'abdullahalmasrur8@gmail.com', '29-05-2000', 'Male', '+8801621030725', '112233Abd', '../profilePhotos/1062064.jpg'),
(2, 'Abdullah Al Masrur', 'abd12', 'abd@gmail.com', '29-05-2000', 'Male', '+8801621030789', '112233Abd', '../profilePhotos/untitled3.png');

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

-- --------------------------------------------------------

--
-- Table structure for table `topicpost`
--

CREATE TABLE `topicpost` (
  `id` int(255) NOT NULL,
  `topicName` varchar(255) NOT NULL,
  `topicAuthor` varchar(255) NOT NULL,
  `topicCategory` varchar(255) NOT NULL,
  `topicDescription` longtext NOT NULL,
  `topicImage` varchar(255) NOT NULL,
  `postedTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topicpost`
--

INSERT INTO `topicpost` (`id`, `topicName`, `topicAuthor`, `topicCategory`, `topicDescription`, `topicImage`, `postedTime`) VALUES
(1, 'My server is not working properly.', 'root12', 'Discussion', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor \"', '../postPhotos/1062064.jpg', '14:45:34'),
(2, 'My PhP code is not working', 'abd12', 'Movies', 'It shows Error 404 when I try to run the code on my web browser. What can I do to solve this problem?', '../postPhotos/', '21:57:14'),
(3, 'Working overtime is frustrating', 'abd12', 'Discussion', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '../postPhotos/', '21:00:36'),
(6, 'Test 4', 'abd12', 'Discussion', 'Lorem Ipsum', '../postPhotos/356198731_826342922192788_3722199041731338018_n.jpg', '01-August-2023 04:36:47 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topicpost`
--
ALTER TABLE `topicpost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `topicpost`
--
ALTER TABLE `topicpost`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
