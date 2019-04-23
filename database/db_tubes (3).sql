-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 05:19 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(12) NOT NULL,
  `id_post` int(12) NOT NULL,
  `id_deviants` int(10) NOT NULL,
  `isi_comment` varchar(400) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id_contents` int(12) NOT NULL,
  `id_deviants` int(10) NOT NULL,
  `content_title` varchar(255) NOT NULL,
  `content_desc` text NOT NULL,
  `content_dir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id_contents`, `id_deviants`, `content_title`, `content_desc`, `content_dir`) VALUES
(1, 6, 'modol', 'vbggbgvgvyf', 'Capture2.PNG'),
(2, 6, 'esdfsd', 'sdfsdf', '1_8OKGwz1rMzfEQHuSFXQdTQ.png'),
(3, 6, 'esdfsd', 'sdfsdf', '1_8OKGwz1rMzfEQHuSFXQdTQ1.png');

-- --------------------------------------------------------

--
-- Table structure for table `deviants`
--

CREATE TABLE `deviants` (
  `id_deviants` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fotoProfile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deviants`
--

INSERT INTO `deviants` (`id_deviants`, `nama`, `username`, `email`, `password`, `fotoProfile`) VALUES
(6, '', 'mimik', 'mimik@gmail.com', 'a9f1b539c57488b4d3e724a01c027ad9', ''),
(7, '', 'qwett', 'qwert@gmail.com', 'b26986ceee60f744534aaab928cc12df', ''),
(8, '', 'yuiuoewyq', 'ojfgbdsafew@gmail.com', 'b26986ceee60f744534aaab928cc12df', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(12) NOT NULL,
  `id_content` int(12) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `watching`
--

CREATE TABLE `watching` (
  `id_watch` int(10) NOT NULL,
  `watchers` int(10) NOT NULL,
  `watching` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `fk_post1` (`id_post`),
  ADD KEY `fk_deviants_comment1` (`id_deviants`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id_contents`),
  ADD KEY `fk_deviants` (`id_deviants`);

--
-- Indexes for table `deviants`
--
ALTER TABLE `deviants`
  ADD PRIMARY KEY (`id_deviants`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `fk_content1` (`id_content`);

--
-- Indexes for table `watching`
--
ALTER TABLE `watching`
  ADD PRIMARY KEY (`id_watch`),
  ADD KEY `fk_deviants2` (`watching`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id_contents` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `deviants`
--
ALTER TABLE `deviants`
  MODIFY `id_deviants` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `watching`
--
ALTER TABLE `watching`
  MODIFY `id_watch` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_deviants_comment1` FOREIGN KEY (`id_deviants`) REFERENCES `deviants` (`id_deviants`),
  ADD CONSTRAINT `fk_post1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`);

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `fk_deviants` FOREIGN KEY (`id_deviants`) REFERENCES `deviants` (`id_deviants`) ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_content1` FOREIGN KEY (`id_content`) REFERENCES `contents` (`id_contents`);

--
-- Constraints for table `watching`
--
ALTER TABLE `watching`
  ADD CONSTRAINT `fk_deviants1` FOREIGN KEY (`watching`) REFERENCES `deviants` (`id_deviants`),
  ADD CONSTRAINT `fk_deviants2` FOREIGN KEY (`watching`) REFERENCES `deviants` (`id_deviants`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
