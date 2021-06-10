-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2021 at 10:04 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auctionhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `username` varchar(64) NOT NULL,
  `item_id` int(11) NOT NULL,
  `bid_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`username`, `item_id`, `bid_price`) VALUES
('HansJensen', 13, 1910),
('HansJensen', 20, 160),
('HansJensen', 21, 1960),
('HansJensen', 12, 2190),
('StenStensen', 19, 420),
('StenStensen', 26, 880),
('StenStensen', 25, 520);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_n` varchar(255) NOT NULL,
  `item_d` varchar(222) NOT NULL,
  `item_img` varchar(222) NOT NULL,
  `init_bid` double NOT NULL,
  `time_end` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `bid_num` varchar(4) NOT NULL,
  `current_bid` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_n`, `item_d`, `item_img`, `init_bid`, `time_end`, `bid_num`, `current_bid`) VALUES
(12, 'FANBYN', 'Good shape, no damage', 'FANBYN.png', 50, '30:06:2050', '14', 2190),
(13, 'ADDE', 'Good shape, no damage', 'ADDE.png', 50, '30:oct:2023', '17', 1910),
(19, 'LEIFARNE', 'Good shape, no damage', 'LEIFARNE.png', 200, '30:May:20303', '5', 420),
(20, 'RONNINGE', 'Good shape, no damage', 'RONNINGE.png', 300, '20:00', '2', 160),
(21, 'TOBIAS', 'Good shape, no damage', 'TOBIAS.png', 50, '30:May:2030', '4', 1960),
(22, 'FLUGEBO', 'Good shape, no damage', 'FLUGEBO.png', 50, '30:OCT:2021', '1', 250),
(23, 'SINNERLIG', 'Good shape, no damage', 'SINNERLIG.png', 50, '30:SEP:2021', '1', 200),
(24, 'TOMMARYD', 'Good shape, few scratches', 'TOMMARYD.png', 50, '31:NOV:2021', '1', 300),
(25, 'MELLTORP', 'Good shape, few scratches', 'MELLTORP.png', 50, '28:FEB:2022', '2', 520),
(26, 'LACK', 'Good shape, few scratches', 'LACK.png', 50, '22:OCT:2021', '2', 880),
(27, 'GLADOM', 'Good shape, few scratches', 'GLADOM.png', 50, '21:OCT:2021', '1', 300),
(28, 'LINNMON', 'Good shape, few scratches', 'LINNMON.png', 50, '22:JUL:2021', '1', 400);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(26, 'HansHansen', '$2y$10$upo0hyInTEhTwUGUEX/SwefB3vW7Hg/8FczfXwDL.UGW3aBhetK2W'),
(27, 'StenStensen', '$2y$10$ALadzeqob6lej7e/SmFe0O2UmqYiPXFuoLKHVl9TRswMX4bN8MQBC'),
(28, 'SorenSorensen', '$2y$10$jETq8A4KXGkTlm3LxtvQpeVTksL0t.J24feLPQ5bZy4T/rIuX2mC2'),
(29, 'BjornBjornson', '$2y$10$0Jt9BLYpTe9pQjpItFHrrO7BwfXLimR53qBZnFEHzDlRL3.OuIh.O'),
(30, 'HansJensen', '$2y$10$mOx91EjpxrulTtERE8dKceGdnCdRwE4ben9i4RwH0u2LIcm6.e.z2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `item_id` (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `buyer_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
