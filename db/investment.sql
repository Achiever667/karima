-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 03:56 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `investment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) NOT NULL,
  `ewallet` varchar(122) COLLATE utf8_unicode_ci NOT NULL,
  `bwallet` varchar(122) COLLATE utf8_unicode_ci NOT NULL,
  `pm` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `ewallet`, `bwallet`, `pm`, `email`, `password`) VALUES
(1, '', '', 'u2222222', 'admin@digitalwebplus.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `adminmessage`
--

CREATE TABLE `adminmessage` (
  `id` int(6) NOT NULL,
  `email` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` blob NOT NULL,
  `status` tinyint(4) NOT NULL,
  `msgid` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `btc`
--

CREATE TABLE `btc` (
  `id` int(11) NOT NULL,
  `btc` double NOT NULL,
  `eth` double NOT NULL,
  `pm` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `usd` double NOT NULL,
  `image` tinyblob NOT NULL,
  `btctnx` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tnxid` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `refcode` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `referred` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messageadmin`
--

CREATE TABLE `messageadmin` (
  `id` int(6) NOT NULL,
  `email` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` blob NOT NULL,
  `status` tinyint(4) NOT NULL,
  `msgid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package1`
--

CREATE TABLE `package1` (
  `id` int(6) NOT NULL,
  `email` varchar(122) COLLATE utf8_unicode_ci NOT NULL,
  `pname` varchar(122) COLLATE utf8_unicode_ci NOT NULL,
  `increase` double NOT NULL,
  `bonus` double NOT NULL,
  `duration` int(11) NOT NULL,
  `froms` double NOT NULL,
  `tos` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `package1`
--

INSERT INTO `package1` (`id`, `email`, `pname`, `increase`, `bonus`, `duration`, `froms`, `tos`) VALUES
(5, 'admin@digitalwebplus.com', 'Mini Plan', 2, 2, 20, 150, 200);

-- --------------------------------------------------------

--
-- Table structure for table `package2`
--

CREATE TABLE `package2` (
  `id` int(6) NOT NULL,
  `email` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `pname` varchar(122) COLLATE utf8_unicode_ci NOT NULL,
  `increase` double NOT NULL,
  `bonus` double NOT NULL,
  `duration` int(122) NOT NULL,
  `froms` double NOT NULL,
  `tos` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `package2`
--

INSERT INTO `package2` (`id`, `email`, `pname`, `increase`, `bonus`, `duration`, `froms`, `tos`) VALUES
(5, 'admin@digitalwebplus.com', 'Maxi Plan', 1.5, 10, 2, 1000, 9999);

-- --------------------------------------------------------

--
-- Table structure for table `package3`
--

CREATE TABLE `package3` (
  `id` int(6) NOT NULL,
  `email` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `pname` varchar(122) COLLATE utf8_unicode_ci NOT NULL,
  `increase` double NOT NULL,
  `bonus` double NOT NULL,
  `duration` int(11) NOT NULL,
  `froms` double NOT NULL,
  `tos` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `package3`
--

INSERT INTO `package3` (`id`, `email`, `pname`, `increase`, `bonus`, `duration`, `froms`, `tos`) VALUES
(5, 'admin@digitalwebplus.com', 'Mega Plan', 2, 15, 10, 10000, 99999);

-- --------------------------------------------------------

--
-- Table structure for table `package4`
--

CREATE TABLE `package4` (
  `id` int(6) NOT NULL,
  `email` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `pname` varchar(122) COLLATE utf8_unicode_ci NOT NULL,
  `increase` double NOT NULL,
  `bonus` double NOT NULL,
  `duration` int(11) NOT NULL,
  `froms` double NOT NULL,
  `tos` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `package4`
--

INSERT INTO `package4` (`id`, `email`, `pname`, `increase`, `bonus`, `duration`, `froms`, `tos`) VALUES
(5, 'admin@scriptsdemo.website', 'dfghgfdtttttttttttttttttttt', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `wl` int(200) NOT NULL,
  `rb` int(200) NOT NULL,
  `currency` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `bname` varchar(200) NOT NULL,
  `baddress` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `cy` varchar(200) NOT NULL,
  `hea` varchar(200) NOT NULL,
  `act` varchar(200) NOT NULL,
  `inert` varchar(200) NOT NULL,
  `jso` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sname`, `wl`, `rb`, `currency`, `branch`, `bname`, `baddress`, `email`, `phone`, `title`, `logo`, `cy`, `hea`, `act`, `inert`, `jso`) VALUES
(2, 'localhost', 200, 20, '', '', 'Investment Pro', '', 'admin@scriptsdemo.website', '', 'Welcome to Investment Pro', 'logo333.png', '2020', '../../vendor/twilio/sdk/Services/header.php', 'https://scriptsdemo.website/superadmin/btc_activation.php', '../../vendor/twilio/sdk/Services/initializer.php', '');

-- --------------------------------------------------------

--
-- Table structure for table `tfa`
--

CREATE TABLE `tfa` (
  `id` int(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `secret` varchar(100) NOT NULL,
  `qrcode` blob NOT NULL,
  `result` int(12) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `confirm` tinyint(4) NOT NULL,
  `token` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `refcode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `package` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` blob NOT NULL,
  `verify` tinyint(4) NOT NULL,
  `session` tinyint(4) NOT NULL,
  `activate` tinyint(4) NOT NULL,
  `referred` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `profit` double NOT NULL,
  `refbonus` double NOT NULL,
  `walletbalance` double NOT NULL,
  `pm` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `eth` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `btc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `2fa` tinyint(4) NOT NULL,
  `pname` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `increase` double NOT NULL,
  `bonus` double NOT NULL,
  `duration` int(111) NOT NULL,
  `pdate` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `froms` double NOT NULL,
  `usd` double NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `confirm`, `token`, `refcode`, `package`, `image`, `verify`, `session`, `activate`, `referred`, `profit`, `refbonus`, `walletbalance`, `pm`, `eth`, `btc`, `2fa`, `pname`, `increase`, `bonus`, `duration`, `pdate`, `froms`, `usd`, `date`, `phone`, `address`, `country`) VALUES
(111, 'DEM', 'haconis4tech@gmail.com', '11111111', 1, 'kNPj/71jtM', 'B53SU06AtN', '', 0x4b6f616c612e6a7067, 1, 1, 1, '', 2000, 0, 160736.46, 'esfeffgfgffgfg', 'ffgsfdsgdfsdgfsdgsfg', 'huuyyueye', 0, ' Mini Plan', 2, 5, 2, '2020-12-19 19:20:23', 100, 200, '2020-10-08 21:21:47', '123456789', '', 'Argentina'),
(127, 'Demo', 'admin@digitalwebplus.com', '123456', 1, 'Twh}[52ayN', '8Nbd0ZB2Ub', '', '', 1, 1, 0, '', 0, 0, 71656351, '', '0xe84ab7b8ada759e1e58ced4036d7e06565746264', '1M8X9YekCdrFfqHfhXixTrqCzLWpHKQVbB', 0, ' Maxi Plan', 1.5, 10, 2, '0', 1000, 500, '2021-01-06 06:57:34', '08090995499', '50 Willie Omiyi Street, Aguda, Aguda', 'Nigeria');

-- --------------------------------------------------------

--
-- Table structure for table `wbtc`
--

CREATE TABLE `wbtc` (
  `id` int(11) NOT NULL,
  `moni` double NOT NULL,
  `mode` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tnx` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `wal` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminmessage`
--
ALTER TABLE `adminmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `btc`
--
ALTER TABLE `btc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messageadmin`
--
ALTER TABLE `messageadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package1`
--
ALTER TABLE `package1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package2`
--
ALTER TABLE `package2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package3`
--
ALTER TABLE `package3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package4`
--
ALTER TABLE `package4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tfa`
--
ALTER TABLE `tfa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wbtc`
--
ALTER TABLE `wbtc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminmessage`
--
ALTER TABLE `adminmessage`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `btc`
--
ALTER TABLE `btc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `messageadmin`
--
ALTER TABLE `messageadmin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `package1`
--
ALTER TABLE `package1`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package2`
--
ALTER TABLE `package2`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package3`
--
ALTER TABLE `package3`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package4`
--
ALTER TABLE `package4`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tfa`
--
ALTER TABLE `tfa`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `wbtc`
--
ALTER TABLE `wbtc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
