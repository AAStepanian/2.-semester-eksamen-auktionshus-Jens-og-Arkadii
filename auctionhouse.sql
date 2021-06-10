-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2021 at 05:47 PM
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
  `current_bid` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_n`, `item_d`, `item_img`, `init_bid`, `time_end`, `bid_num`, `current_bid`) VALUES
(12, 'Sovs', 'Ægte sovs', 'Donger.png', 50, '30:06:2050', '11', 1520),
(13, 'WUNDERWAFFE', 'Sehr gut ', 'Wunderwaffe.png', 50, '30:oct:2023', '12', 200);

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
(1, 'Sten', '$2y$10$21UgOAWjw7tSynQmn/jX9.dr7CUnjPQnDs7yXTzPXuWR/T4QDfTx.'),
(2, 'Jokumlokumsen', '$2y$10$HHAEFUsAPMYoXgXP7QC4QeBMi.ECx/Rd9qTDbrRwNyhAK3K/3oGem'),
(3, 'test', '$2y$10$UnIk4nRKQv.GQIzic.WHgeha8XaruxpxqBvmOV0xAxiifMSAf/I9e'),
(4, 'asdasd', '$2y$10$WuM/4HJXErJXl5gmXU4yj.ikxjgm4vNYcQSlOdZ1bEdR9ReGJd.bm'),
(5, 'asdasdasd', '$2y$10$9IYf8hr5aXiXkfgx4damT.709WLY9xEN8dGlUkbNkiFn07BXOKDbq'),
(6, 'asdasdasdasdasd', '$2y$10$FLHia.XbTfBlVjKHsoKm7uwgBilFebb86kRLPGlhOUndOCZnanIh2'),
(7, 'jernmandennn', '$2y$10$SgJYAY7aAWMACzbmTFvyOO2buNjGO9T6G9kvi6Gp8vXetBzrP71Ou'),
(8, 'asdasdssss', '$2y$10$1DuzdTBarnTlUmbiS1rPH.Oam0Jgr8l/ysdh.nk/uJYSUt4i10RQq'),
(9, 'asdaddsasad', '$2y$10$64BWCPmRdqy8c7zLlIqSoOUz0ZWgjy4Eic3yjmTb3WSJDGpkR4Nd.'),
(10, 'sdtoder', '$2y$10$z4jepk7a3XFp8jnPY9kHF.rsQSPFkqO/0Pa93LpsGqQAFLoHye3xO'),
(11, 'asdasdasdsssssss', '$2y$10$AZpIIgJdqinmE3EYa/7xj.Ryl2WNhoc7/KkspCnQ7UPx1/8Sn70..'),
(12, 'Stensteb', '$2y$10$/XrthTO9adSQpQ4gs30fb.46sIUVfXySXj.eSKLC/ua2nVuOtiHAO'),
(13, 'Stensssssssss', '$2y$10$PWyMNiXiQRpusAwcJA0aCOE6JaAfxLkuGfS50quc4v69XAVawLu5e'),
(14, 'Stenssssssssssssssssssss', '$2y$10$fv4F/uwbie9xgdHxvBCjzOl8EzaVCoksHjtwIyVJ7fR8FbLrzogBC'),
(15, 'Sten22', '$2y$10$4D122IL25KU0eKGElrVgsOXiyRqXDu/K9t8AbyDKxCv8BNdFcdUP.'),
(16, 'Sten356', '$2y$10$OINVf3IVJ.Ol78aIz5LNhuXekr6OJj67cbRq8ipETLWpOVZFcD5.m'),
(17, 'jesns', '$2y$10$pafV0GnsG3r8hx906Rxv2.nbf8GaAsbf1vfzkWRJiaLr4sub4V9ZG'),
(18, 'Edvard', '$2y$10$o7eGVAn8io/fxUO3/QB3WejaXRXCdGmxncBG9p84FnFdTgv7UP7h6'),
(19, 'asdasdssssssssssssssssss', '$2y$10$uldD5n5c72c03hDWZkGAsOt8Oxf8E/An64NWW3HbWr9.V8F.khAny'),
(20, '1812573', '$2y$10$o/cysdLygQgPxhpR.TkoEuIKITzeBth.6gUCc.s7jf95etK6IR7LW'),
(21, 's', '$2y$10$D2hQUPU6.0eviwyDWY/T9ObKtQp19TQ4b92/RdHd6KDh1tN.ARI16'),
(22, 'asdasdasdasdasdsadadsadss', '$2y$10$kQv1A2fYB.66ghAMuGMbBOToXm9CodlwJFD9uM55Z/pXEw.Ajl5NO'),
(23, 'lort', '$2y$10$wGFOtFlW6ID34pfg74BcpewYVLgWUe9Me8Lvvq1Fglzv2LdCMemNW'),
(24, 'svin', '$2y$10$q0n32lyaDdjcHVB7eAuXf.W/M6e2YXDQgGLRdfQX4kkVcB7LtfzmS');

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
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
