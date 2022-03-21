-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2022 at 11:39 AM
-- Server version: 10.5.10-MariaDB-debug
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g-string`
--

-- --------------------------------------------------------

--
-- Table structure for table `vinyl`
--

CREATE TABLE `vinyl` (
  `id` int(11) NOT NULL,
  `artist` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_released` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `media_con` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sleeve_con` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_number` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demo_song_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_art_file` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_art_path` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demo_song_file` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demo_song_path` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vinyl`
--

INSERT INTO `vinyl` (`id`, `artist`, `album_name`, `genre`, `length`, `date_released`, `price`, `media_con`, `sleeve_con`, `quantity`, `description`, `serial_number`, `demo_song_name`, `album_art_file`, `album_art_path`, `demo_song_file`, `demo_song_path`, `time_created`) VALUES
(29, 'Pink Floyd', 'Atom Heart Mother', 'Progressive', '52:00', '1970-10-02', '20.00', 'VG+', 'VG', 10, 'Atom Heart Mother is the fifth studio album by English progressive rock band Pink Floyd, released in 1970 by Harvest and EMI Records in the UK and Harvest and Capitol in the US. It was recorded at Abbey Road Studios, London, England, and was the group\'s first album to reach number 1 in the U.K., while it reached number 55 in the U.S. chart, eventually going gold there. A remastered CD was released in 1994 in the UK and the US, and again in 2011. Ron Geesin, who had already influenced and collaborated with Roger Waters, made a notable contribution to the album and received a then rare outside songwriting credit.', '645-863', 'Fat Old Sun', 'atom-heart-mother.jpg', '../product/vinyl/album-art/atom-heart-mother.jpg', 'Fat Old Sun.mp3', '../product/vinyl/music/Fat Old Sun.mp3', '2022-03-07 11:00:19'),
(30, 'King Crimson', 'In the Court of the Crimson King', 'Progressive', '44:00', '1969-10-10', '35.00', 'M', 'M', 2, 'In the Court of the Crimson King (subtitled An Observation by King Crimson) is the debut studio album by English rock band King Crimson, released on 10 October 1969 by Island Records. The album is one of the earliest and most influential of the progressive rock genre, where the band combined the musical influences that rock music was founded upon with elements of jazz, classical, and symphonic music. ', '452-587', 'The Court of the Crimson King', 'cover (copy 3).jpg', '../product/vinyl/album-art/cover (copy 3).jpg', 'King Crimson - The Court Of The Crimson King.mp3', '../product/vinyl/music/King Crimson - The Court Of The Crimson King.mp3', '2022-03-07 11:07:25'),
(31, 'Daft Punk', 'Random Access Memories', 'Techno', '01:14:37', '2013-05-17', '100.00', 'M', 'M', 2, 'Random Access Memories is the fourth studio album by French electronic duo Daft Punk, released on 17 May 2013 through Columbia Records. The album pays tribute to late 1970s and early 1980s American music, particularly from Los Angeles. This theme is reflected in the album\'s packaging, as well as its promotional campaign, which included billboards, television advertisements, and a web series. Recording took place at Henson, Conway and Capitol Studios in California, Electric Lady Studios in New York City, and Gang Recording Studio in Paris, France. Random Access Memories was the duo\'s final album before they split up in February 2021. ', '985-865', 'Giorgio by Moroder', 'daft-punk.jpg', '../product/vinyl/album-art/daft-punk.jpg', 'Daft Punk Giorgio By Moroder_320kbps.mp3', '../product/vinyl/music/Daft Punk Giorgio By Moroder_320kbps.mp3', '2022-03-07 11:45:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vinyl`
--
ALTER TABLE `vinyl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vinyl`
--
ALTER TABLE `vinyl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
