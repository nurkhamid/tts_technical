-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 05:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `ArtistID` int(11) NOT NULL,
  `ArtistName` varchar(100) NOT NULL,
  `PackageName` varchar(100) NOT NULL,
  `ImageURL` varchar(200) NOT NULL,
  `ReleaseDate` date NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `SampleURL` varchar(200) NOT NULL,
  `is_deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`ArtistID`, `ArtistName`, `PackageName`, `ImageURL`, `ReleaseDate`, `Price`, `SampleURL`, `is_deleted`) VALUES
(1, 'Doraemon', 'Thinker Explorer', 'https://png.pngtree.com/png-clipart/20200910/ourlarge/pngtree-hand-drawn-japanese-kimono-characters-png-image_2343459.jpg', '2022-08-12', '15000.00', 'https://www.sousound.com/music/jazz_fusion/jazz_01.mp3', 0),
(2, 'Pokemon', 'Happy', 'https://sportshub.cbsistatic.com/i/2021/04/09/5edc4836-8a38-498b-ae5e-438c4658a714/anime-icons-1093376.jpg', '2022-08-12', '10000.00', 'https://www.sousound.com/music/mondo_lounge/mondo_02.mp3', 0),
(4, 'Ninja', 'Faster', 'https://w7.pngwing.com/pngs/829/514/png-transparent-ninja-ninjutsu-martial-arts-dojo-samurai-ninja.png', '2022-08-12', '12000.00', 'https://www.sousound.com/music/rock/rock_02.mp3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`ArtistID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `ArtistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
