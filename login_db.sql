-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2024 at 12:36 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment_text` text,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `comment_text`, `timestamp`) VALUES
(32, 6, 'lollol', '2023-10-05 20:06:57'),
(33, 6, 'adsssssssssssssssssssssssssssssssssssssss', '2023-10-05 20:17:10'),
(34, 7, 'asdasdasdasfasdgsdgb', '2023-10-05 18:17:38'),
(35, 8, 'asdasdxxxxxxxxxxxxxxx', '2023-10-11 11:34:25'),
(36, 9, 'asdasdfasfjiogjdaskhdfladfjkxxxxxxxxxxx', '2023-10-11 11:59:48'),
(41, 14, 'TEMERAF\r\n', '2023-10-25 10:42:47'),
(50, 13, 'ajodfuhansdpogndf', '2024-02-07 12:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`, `isAdmin`) VALUES
(6, 'simino', 'simino@gmail.com', '$2y$10$cIHSVdk4TbL3y9GWxSV.ruLMZSQKKxpZBJ3ydu9SWqo/2gyJriWxe', 0),
(8, 'suknikar', 'suknikar@gmail.com', '$2y$10$PP1sQJ0g2vUF1Mr0vOpocemZgtfhG9XXxTghkCThlRy1sSicbG49i', 0),
(9, 'miso', 'miso@gmail.com', '$2y$10$gVisNwwZufj2EJv2KXwk7uTtUko2UDtYS3HBrMRVtH1JVSui/7YCi', 0),
(10, 'richard', 'risko@gmail.com', '$2y$10$4NJ1WdscWRQtgSActhmES.GR.8FOXHENlVY0ZKbMdoyFz1mm1ItMa', 0),
(11, 'asd', 'asddd@gmail.com', '$2y$10$Xs474/HnBD9wOdGPzXA9guxUSuGukN9RkiFO8Ho3gQKG7cJD/IWXG', 0),
(12, 'denis', 'desniko@gmail.com', '$2y$10$AfpYw0oyhPJ.goyYShnSWORNf7DmvhOSD36W4siAEfGB54E9OE2UG', 0),
(13, 'admin', 'admin@example.com', '$2y$10$REXpSZj1m7zq/r9kgNMcQOHbe48jFi1Rw1Jo3mx1/OYC4PDj7JXa6\r\n', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
