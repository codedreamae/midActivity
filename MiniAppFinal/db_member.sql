-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 05:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_member`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tracking` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ship` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `fullname`, `address`, `tracking`, `ship`) VALUES
(54, 'Jane Ramos ', 'Hda. Camansi Gonzaga', 'JEEOMBL3PR', 'Parcel  been received'),
(55, 'bill jhon M. Forda', 'La Carlota City  cubay', 'CKI0K2XX6A', 'out to deliver'),
(62, 'Zione Medel', 'Tagkugon', '9HSMMLN3C8', 'Parcel  been received by SOC3'),
(64, 'Renato Batallones magsalin', 'Brgy. Mao', 'U65TAGBAZL', 'out to deliver');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(255) NOT NULL,
  `u_lname` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_fname`, `u_lname`, `u_email`, `u_pass`) VALUES
(6, 'wayne', 'esad', 'rea@gmail.com', '$2y$10$0q6y7BrQ4DAm8zEF6NDj6.ntd.fNdw88V7c2RCnWj6MOFAK2xWmBK'),
(7, 'reah', 'batallones', '123@gmail.com', '$2y$10$oRlG2imhJhcmLNte3IYuneHtp8RleryKByIVneF6Xws5SipLWfTeW'),
(8, 'Sam', 'Pol', 'sam@gmail.com', '$2y$10$EYMx.KQx9MOc58AM96PX.ORXPQu7lcYJK.AKmbPwE5wfwA2ZGJeMO'),
(9, 'rea', 'bate', 'reah@gmail.com', '$2y$10$DUl0WIWGH.G1zos8nRfwYe.rIK3drTifEEkhwsMf7lT1qLeDbLvve'),
(10, 'mae', 'mag', 'mag@gmail.com', '$2y$10$.uHiMNtxbwaM/VTwMyKyUec./Ip.3Kz69.uEwTvvmfE1yJFeYepcu'),
(11, 'dgr', 'wgfr', 're@gmail.com', '$2y$10$L/vBQgKQcwPOtmUj2E/up.5vMwSfijbz7zDBgplPq0hYr/.PuOSaa'),
(12, 'red', 'gdr', 'wer@gmail.com', '$2y$10$p1.j8Lj2qZZg/lgHiHVIXukiqmaJPXkFVMaKsYNoQ8LCsPtBx3cSi'),
(13, 'reah', 'magsalin', 'reahmagsalin@gmal.com', '$2y$10$bH9YU0BLOltyFUvCvJm67uH854rHIyDAVUqvpDHUivAu2Vv.TFXnG'),
(14, 'dgr', 'bate', 'jhon@gmail.com', '$2y$10$P8.KRltYs9meSBnNT7ae1.PZR6eUSb1WSydyHgxlcmLuiwFFMGBXK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
