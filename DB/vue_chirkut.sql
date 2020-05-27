-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 09:12 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vue_chirkut`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `postDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `details`, `author_id`, `postDate`) VALUES
(1, '#62C8FB', 'But this would render the same text for every todo, which is not super interesting. We should be able to pass data from the parent scope into child components. \r\n\r\n\r\n modify the component definition to make it accept aBut this would render the same text for every todo, which is not super interesting. We should be able to pass data from the parent scope into child components. \r\n\r\n\r\n\r\nLetâ€™s modify the component definition to make it accept aBut this would render the same text for every todo, which is not super interesting. We should be able to pass data from the parent scope into child components. Letâ€™s modify the component definition to make it accept aBut this would render the same text for every todo, which is not super interesting. We should be able to pass data from the parent scope into child components. Letâ€™s modify the component definition to make it accept a But this would render the same text for every todo, which is not super interesting. We should be able to pass data from the parent scope into child components. \r\n\r\n\r\n modify the component definition to make it accept aBut this would render the same text for every todo, which is not super interesting. We should be able to pass data from the parent scope into child components. \r\n\r\n\r\n\r\nLetâ€™s modify the component definition to make it accept aBut this would render the same text for every todo, which is not super interesting. We should be able to pass data from the parent scope into child components. Letâ€™s modify the component definition to make it accept aBut this would render the same text for every todo, which is not super interesting. We should be able to pass data from the parent scope into child components. Letâ€™s modify the component definition to make it accept a', 1, NULL),
(2, 'Test Data', 'Data updated', 1, NULL),
(3, '<textarea class=\"postNote\" style=\"background: lime;\">', 'asasas', 0, NULL),
(4, '', 'Mone shukh nai re pagla...........', 1, NULL),
(5, '', 'Ramadan Mubarak...........', 1, NULL),
(6, '', 'à¦°à¦®à¦œà¦¾à¦¨à§à¦² à¦•à¦¾à¦°à¦¿à¦®à¥¤', 1, NULL),
(7, '#ff8000', 'Color Test', 1, NULL),
(8, '#2e9235', 'Test ', 1, NULL),
(9, '', 'sddsdsds', 1, NULL),
(10, '', 'noooooooooooooooo............', 1, NULL),
(11, '', 'okay', 1, '2020-04-25 17:07:20'),
(12, '#2e9235', 'Test new design ', 1, '2020-04-27 16:14:00'),
(13, '', '<!DOCTYPE html>\n<html>\n<body>\n\n<?php\necho \"The time is \" . date(\"h:i:sa\");?> <br>\n<?php\necho strtotime(\"now\"); ?><br>\n<?php\necho strtotime(\"may 01, 2022 15:37:25\");\n?><br>\n\n</body>\n</html>\n', 1, '2020-04-30 18:14:15'),
(14, '', 'Shah Jalal ', 1, '2020-04-30 18:22:37'),
(15, '', 'Assalamu Walaikum', 1, '2020-04-30 19:50:18'),
(16, '', 'two', 1, '2020-04-30 19:51:07'),
(17, '', 'oaky', 1, '2020-04-30 19:55:24'),
(18, '', 'aaa', 1, '2020-04-30 19:57:07'),
(19, '', 'noo', 1, '2020-04-30 19:59:59'),
(20, '', 'ddfdf', 1, '2020-04-30 20:01:24'),
(21, '', 'dfdf', 1, '2020-04-30 20:03:43'),
(22, '', 'vcv', 1, '2020-04-30 20:04:14'),
(23, '#408080', 'nooh..', 1, '2020-04-30 20:08:13'),
(24, '#ff8040', 'shah Jalal', 1, '2020-04-30 20:09:51'),
(25, '', 'nopp', 1, '2020-05-02 23:58:34'),
(26, '', 'cxcxc', 1, '2020-05-02 23:59:46'),
(27, '', 'dfdf', 1, '2020-05-03 00:10:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
