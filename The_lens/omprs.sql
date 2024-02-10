-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 07:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omprs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('britanialelouchv6@gmail.com', '123'),
('kaustavmondal60@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` date NOT NULL,
  `experience` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `password` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `waist` varchar(20) NOT NULL,
  `chest` varchar(20) NOT NULL,
  `hips` varchar(20) NOT NULL,
  `shoes` varchar(20) NOT NULL,
  `hair` varchar(20) NOT NULL,
  `shirt` varchar(20) NOT NULL,
  `phn_no` varchar(20) NOT NULL,
  `picture` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`name`, `email`, `age`, `experience`, `location`, `password`, `gender`, `height`, `waist`, `chest`, `hips`, `shoes`, `hair`, `shirt`, `phn_no`, `picture`) VALUES
('alena frolova', 'alenafrolova@gmail.com', '2000-10-10', '2', 'howrah', 1234, 'Female', '5', '42', '48', '52', '5', 'black', '48', '1234567890', '1.png'),
('amanda', 'amanda@gmail.com', '2000-10-10', '2', 'howrah', 1234, 'Female', '5', '42', '48', '52', '6', 'black', '48', '1234567890', '3.png'),
('Ashika Pratt', 'Ashika@gmail.com', '2000-10-10', '2', 'howrah', 1234, 'Female', '5', '42', '48', '52', '5', 'black', '48', '1234567890', '6.png'),
('wlan0', 'britanialelouchv6@gmail.com', '2011-01-10', '4', 'howrah', 1236, 'Male', '6', '66', '55', '22', '4', 'black', '55', '6291603323', '1107815.jpg'),
('emily', 'emily@gmail.com', '2000-10-10', '2', 'howrah', 1234, 'Female', '5', '42', '48', '52', '5', 'black', '48', '1234567890', '0f-2463cdd5-5350-40af-b57d-85cf123fbb94.png'),
('jonny', 'jonny12@gmail.com', '2000-10-10', '5', 'howrah', 1234, 'Other', '5', '36', '48', '52', '10', 'red', '48', '1234567890', 'wallpaperflare.com_wallpaper (1).jpg'),
('anthony d rozario', 'kaustavmondal60@gmail.com', '1998-05-02', '10', 'howrah', 12345, 'Male', '5.5', '66', '45', '22', '12', 'black', '44', '6291603323', '1024365.png');

-- --------------------------------------------------------

--
-- Table structure for table `photographers`
--

CREATE TABLE `photographers` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` date NOT NULL,
  `experience` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `camera` varchar(30) NOT NULL,
  `social_media` varchar(30) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photographers`
--

INSERT INTO `photographers` (`name`, `email`, `age`, `experience`, `location`, `password`, `gender`, `genre`, `camera`, `social_media`, `picture`) VALUES
('dayanita singh', 'dayanita@gmail.com', '2000-10-10', '2', 'howrah', '1234', 'Female', 'wildlife', 'nikon', 'insta- @wildcat24', '7.png'),
('karisma_meheta', 'meheta@gmail.com', '2000-10-10', '2', 'howrah', '1234', 'Female', 'wildlife', 'nikon', 'insta- @wildmeheta', 'karishma meheta5.jpg'),
('latika_nath', 'nath@gmail.com', '2000-10-10', '2', 'howrah', '1234', 'Female', 'wildlife', 'nikon', 'insta- @wildnath', '7.png'),
('kaustav mondal', 'tiyasha@gmail.com', '2023-10-01', '10', 'Puri', '01236', 'Female', 'wildlife', 'nikon', 'insta', '1109806.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `phone`, `password`) VALUES
('Tomy chan ', 'tom@gmail.com', '6291603323', '123'),
('', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `photographers`
--
ALTER TABLE `photographers`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
