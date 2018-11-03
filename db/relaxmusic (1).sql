-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: Nov 03, 2018 at 08:54 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relaxmusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Fire'),
(3, 'Peace Sound'),
(4, 'Birds Sound');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `music_url` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `title`, `description`, `image_url`, `music_url`, `category`) VALUES
(4, 'Space Sound For Sound Sleep', 'A Songs of Ice and Fire', 'https://www.dike.lib.ia.us/images/sample-2.jpg', 'http://www.noiseaddicts.com/samples_1w72b820/4233.mp3', 'Fire'),
(5, 'Rain and thunder', 'Realx With Guitar on raini', 'https://www.dike.lib.ia.us/images/sample-1.jpg', 'http://www.noiseaddicts.com/samples_1w72b820/4233.mp3', 'Peace Sound'),
(6, 'FIre and Ice', 'A Songs of Ice and Fire', 'https://www.dike.lib.ia.us/images/sample-3.jpg', 'http://www.noiseaddicts.com/samples_1w72b820/4233.mp3', 'Birds Sound'),
(7, 'Calm Piano and Rain', 'Calm rain and thunder sound to calm your mind.', 'https://www.technobuffalo.com/wp-content/uploads/2016/10/google-pixel-sample-photos-edited-054-470x310@2x.jpg', 'https://www.looperman.com/media/loops/2431466/looperman-l-2431466-0141658-guitar-hope.mp3', 'Fire'),
(8, 'Rain And River Sound', 'Realx With Guitar on raini', 'https://www.visioncritical.com/wp-content/uploads/2014/12/BLG_Andrew-G.-River-Sample_09.13.12.png', 'https://www.looperman.com/media/loops/2431466/looperman-l-2431466-0141658-guitar-hope.mp3', 'Peace Sound'),
(9, 'Breathe and Live Life', 'A Songs of Ice and Fire', 'https://www.dike.lib.ia.us/images/sample-3.jpg', 'https://www.looperman.com/media/loops/159051/looperman-l-0159051-0141654-piano-quality-shock-xxxix.mp3', 'Fire');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'Admin', '$2y$10$Dhq67qvlXf8BWn5U92CTfuZHuQbep7djW5AQTKGiFPFyJlPHtsEV6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
