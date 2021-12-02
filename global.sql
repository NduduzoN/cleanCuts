-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 06:38 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `global`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_firstName` varchar(50) NOT NULL,
  `admin_lastName` varchar(50) NOT NULL,
  `userType_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `admin_email`, `admin_password`, `admin_firstName`, `admin_lastName`, `userType_ID`) VALUES
(1, 'suzanzander@globalHS.com', '$2y$10$jPGSs2iufT6BZ9krMiPccuX6suF.YqXF18wKm6AKLWXtWmzmOcUP.', 'suzan', 'zander', 1),
(2, 'sammorel@globalHS.com', '$2y$10$aHqHQsExp.ZQ77snpvMsLuyVpPCJChkso8I239zvnP6.x7ot5K9UW', 'sam', 'morel', 1),
(3, 'zzadmin@gmail.com', '11092002', 'zandile', 'zander', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `timeframe_ID` int(11) NOT NULL,
  `hairstyle_ID` int(11) NOT NULL,
  `stylist_ID` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_ID`, `user_ID`, `timeframe_ID`, `hairstyle_ID`, `stylist_ID`, `booking_date`, `booking_status`) VALUES
(2, 2, 1, 14, 2, '2021-01-31', 'pending'),
(3, 2, 4, 12, 1, '2021-02-01', 'pending'),
(4, 2, 7, 18, 1, '2021-02-02', 'pending'),
(5, 2, 1, 5, 1, '2021-01-09', 'Canceled'),
(6, 1, 5, 17, 3, '2021-01-09', 'canceled'),
(7, 3, 1, 13, 4, '2021-01-09', 'pending'),
(8, 4, 7, 9, 5, '2021-02-02', 'Canceled'),
(9, 2, 3, 4, 2, '2021-01-09', 'pending'),
(10, 3, 8, 19, 6, '2021-02-19', 'pending'),
(11, 3, 6, 8, 5, '2021-02-04', 'pending'),
(12, 1, 8, 17, 3, '2021-02-12', 'canceled'),
(13, 3, 5, 12, 1, '2021-03-03', 'Canceled'),
(14, 2, 5, 18, 1, '2021-02-02', 'pending'),
(15, 1, 8, 2, 3, '2021-03-16', 'canceled'),
(16, 1, 5, 5, 1, '2021-03-17', 'pending'),
(17, 1, 5, 5, 1, '2021-03-17', 'pending'),
(18, 1, 1, 2, 1, '2021-03-24', 'pending'),
(19, 1, 1, 2, 1, '2021-03-31', 'pending'),
(21, 1, 1, 1, 4, '2021-03-04', 'canceled'),
(22, 1, 4, 18, 6, '2021-03-18', 'pending'),
(23, 1, 1, 5, 2, '2021-03-19', 'approve'),
(24, 2, 1, 2, 1, '2021-03-16', 'canceled'),
(25, 2, 2, 15, 2, '2021-02-22', 'canceled'),
(26, 1, 1, 15, 1, '2021-03-29', 'pending'),
(27, 1, 1, 9, 3, '2021-03-31', 'pending'),
(28, 1, 3, 11, 1, '2021-03-30', 'pending'),
(29, 1, 3, 11, 1, '2021-03-30', 'pending'),
(30, 1, 1, 1, 1, '2021-04-05', 'pending'),
(31, 1, 5, 17, 2, '2021-04-06', 'approve'),
(32, 1, 4, 1, 2, '2021-04-09', 'canceled'),
(51, 1, 1, 12, 2, '2021-04-10', 'approve'),
(52, 1, 3, 2, 4, '2021-04-11', 'pending'),
(53, 1, 5, 6, 6, '2021-04-10', 'pending'),
(54, 1, 3, 8, 3, '2021-04-11', 'pending'),
(55, 1, 1, 8, 3, '2021-04-12', 'pending'),
(56, 1, 1, 8, 3, '2021-04-12', 'pending'),
(57, 1, 1, 8, 3, '2021-04-12', 'pending'),
(58, 1, 3, 1, 2, '2021-04-10', 'canceled'),
(59, 1, 1, 17, 5, '2021-04-16', 'canceled'),
(60, 1, 8, 17, 2, '2021-04-21', 'pending'),
(61, 1, 5, 18, 3, '2021-04-21', 'pending'),
(62, 1, 6, 17, 5, '2021-04-22', 'pending'),
(63, 1, 8, 17, 3, '2021-04-08', 'pending'),
(64, 1, 8, 18, 4, '2021-04-27', 'pending'),
(65, 1, 7, 5, 4, '2021-04-15', 'pending'),
(66, 1, 1, 1, 5, '2021-04-16', 'pending'),
(67, 1, 7, 1, 1, '2021-04-14', 'pending'),
(68, 1, 1, 1, 1, '2021-04-13', 'pending'),
(69, 1, 1, 15, 1, '2021-04-15', 'pending'),
(70, 1, 7, 1, 5, '2021-04-15', 'pending'),
(71, 1, 8, 1, 1, '2021-04-13', 'pending'),
(72, 1, 8, 1, 1, '2021-04-20', 'pending'),
(73, 1, 1, 1, 1, '2021-05-17', 'pending'),
(74, 1, 1, 12, 2, '2021-04-01', 'pending'),
(75, 1, 1, 12, 2, '2021-04-01', 'pending'),
(76, 1, 1, 1, 1, '2021-04-02', 'pending'),
(77, 1, 1, 1, 1, '2021-06-14', 'pending'),
(78, 1, 1, 1, 1, '2021-06-16', 'canceled'),
(79, 1, 1, 1, 1, '2021-06-17', 'canceled'),
(80, 1, 1, 1, 1, '2021-06-19', 'canceled'),
(81, 1, 1, 1, 1, '2021-06-20', 'Canceled'),
(82, 3, 1, 13, 2, '2021-06-20', 'Canceled'),
(83, 1, 1, 1, 1, '2021-07-08', 'Canceled'),
(86, 6, 5, 15, 5, '2021-06-29', 'pending'),
(90, 1, 1, 1, 1, '2021-07-06', 'Canceled'),
(91, 1, 5, 16, 3, '2021-06-22', 'Canceled'),
(92, 1, 1, 1, 2, '2021-06-23', 'Approve'),
(93, 1, 1, 1, 2, '2021-06-23', 'pending'),
(94, 1, 2, 13, 2, '2021-06-22', 'pending'),
(95, 1, 1, 1, 3, '2021-06-24', 'pending'),
(96, 0, 1, 1, 2, '2021-06-25', 'pending'),
(97, 1, 1, 1, 2, '2021-06-29', 'Approve'),
(100, 1, 1, 1, 1, '2021-06-30', 'pending'),
(101, 1, 1, 1, 1, '2021-06-30', 'pending'),
(102, 1, 1, 1, 1, '2021-07-01', 'pending'),
(103, 1, 1, 1, 1, '2021-07-22', 'pending'),
(104, 1, 1, 1, 1, '2021-08-11', 'pending'),
(105, 1, 5, 9, 2, '2021-06-28', 'Approve'),
(106, 1, 6, 17, 2, '2021-07-14', 'Canceled'),
(107, 1, 6, 12, 4, '2021-07-21', 'Canceled'),
(108, 1, 4, 9, 2, '2021-07-28', 'Canceled'),
(109, 30, 4, 3, 2, '2021-08-02', 'Approve'),
(110, 30, 1, 14, 1, '2021-09-16', 'Pending'),
(111, 30, 4, 16, 3, '2021-07-29', 'Pending'),
(112, 30, 1, 16, 2, '2021-08-01', 'Approve'),
(113, 30, 1, 1, 2, '2021-08-03', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `capability`
--

CREATE TABLE `capability` (
  `capability_ID` int(11) NOT NULL,
  `stylist_ID` int(11) NOT NULL,
  `hairstyle_ID` int(11) NOT NULL,
  `capability_rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `capability`
--

INSERT INTO `capability` (`capability_ID`, `stylist_ID`, `hairstyle_ID`, `capability_rating`) VALUES
(1, 1, 2, 5),
(2, 1, 3, 4),
(3, 1, 18, 4),
(4, 6, 19, 5),
(5, 3, 17, 5),
(6, 3, 16, 5),
(7, 5, 15, 4),
(8, 2, 14, 3),
(9, 4, 13, 5),
(10, 1, 12, 3),
(11, 6, 11, 5),
(12, 5, 11, 5),
(13, 5, 9, 5),
(14, 5, 8, 3),
(15, 6, 6, 4),
(16, 6, 7, 5),
(17, 1, 5, 5),
(18, 2, 4, 4),
(19, 6, 17, 5),
(20, 5, 12, 5),
(21, 1, 15, 5),
(22, 2, 18, 5);

-- --------------------------------------------------------

--
-- Table structure for table `hairstyle`
--

CREATE TABLE `hairstyle` (
  `hairstyle_ID` int(11) NOT NULL,
  `hairstyle_description` varchar(50) NOT NULL,
  `hairstyle_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hairstyle`
--

INSERT INTO `hairstyle` (`hairstyle_ID`, `hairstyle_description`, `hairstyle_price`) VALUES
(1, 'Brades', 300),
(2, 'Short Curls', 150),
(3, 'Retro Marcel Waves', 300),
(4, 'Kinky Curls Galore', 300),
(5, 'Locks', 500),
(6, 'Sleek Shoulder length Bob', 500),
(7, 'Big Curles', 300),
(8, 'Hot Color Bob', 500),
(9, 'Long Blonde Hair', 2500),
(10, 'Undercut', 500),
(11, 'Faux Hawk', 150),
(12, 'Major Highlights', 500),
(13, 'Twisted Braids', 500),
(14, 'Corn Rows', 350),
(15, 'French Braids', 500),
(16, 'Corkscrew Curls', 250),
(17, 'Thick Corn Rows', 400),
(18, 'Box Braids', 500);

-- --------------------------------------------------------

--
-- Table structure for table `stylist`
--

CREATE TABLE `stylist` (
  `stylist_ID` int(11) NOT NULL,
  `stylist_firstName` varchar(50) NOT NULL,
  `stylist_lastName` varchar(50) NOT NULL,
  `stylist_specialty` varchar(100) NOT NULL,
  `stylist_email` varchar(50) NOT NULL,
  `stylist_password` varchar(255) NOT NULL,
  `userType_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stylist`
--

INSERT INTO `stylist` (`stylist_ID`, `stylist_firstName`, `stylist_lastName`, `stylist_specialty`, `stylist_email`, `stylist_password`, `userType_ID`) VALUES
(1, 'Musa', 'Shabangu', 'dreadlocks', 'mshabangu@yahoo.com', 'password', 2),
(2, 'Sam', 'Smith', 'Kids Hair', 'ssmith@yahoo.com', '$2y$10$f9vptto1Nj4hFdM4Os7H/uUADsDAMTUkX1muZagTeC432eEiA6V82', 2),
(3, 'Mike', 'Lee', 'Hair Coloring', 'mnLee@gmail.com', 'password', 2),
(4, 'karabo', 'Mokitimi', 'Braiding', 'kkmokitimi@gmail.com', 'password', 2),
(5, 'Sbu', 'Zungu', 'Fade', 'sbuzungui@live.com', 'password', 2),
(6, 'Gladys', 'Sibiya', 'Weave', 'gladyssibiya@gmail.com', 'password', 2);

-- --------------------------------------------------------

--
-- Table structure for table `timeframe`
--

CREATE TABLE `timeframe` (
  `timeframe_ID` int(11) NOT NULL,
  `timeframe_description` enum('09:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeframe`
--

INSERT INTO `timeframe` (`timeframe_ID`, `timeframe_description`) VALUES
(1, '09:00'),
(2, '10:00'),
(3, '11:00'),
(4, '12:00'),
(5, '13:00'),
(6, '14:00'),
(7, '15:00'),
(8, '16:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` int(11) NOT NULL,
  `user_firstName` varchar(100) NOT NULL,
  `user_lastName` varchar(100) NOT NULL,
  `user_gender` enum('m','f','o','') NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_number` bigint(10) NOT NULL,
  `userType_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `user_firstName`, `user_lastName`, `user_gender`, `user_email`, `user_password`, `user_number`, `userType_ID`) VALUES
(3, 'Sumphiwe', 'Zungu', 'f', 'simphiwezungu@gmail.com', 'efeeeee', 176524055, 3),
(4, 'Muzi', 'Vilakazi', 'o', 'muzivilakazi@yahoo.com', 'lknhgvv', 765204721, 3),
(5, 'Nduduzo', 'Ndabandaba', 'f', 'nduduzondabandaba8@gmail.com', '$2y$10$6KgsfE5qDv2l9Y1.pxCUMOze6oVs5wCEaZqYfqJo3nwV41bGmlRnK', 765204721, 3),
(9, 'sabelo', 'Nands', 'm', 'sabelonands@gmail.com', 'password', 176524055, 3),
(10, 'sabelo', 'Nands', 'm', 'sabelonands@gmail.com', 'password', 176524055, 3),
(12, 'sabelo', 'Nands', 'm', 'sabelonands@gmail.com', 'password', 176524055, 3),
(13, 'sabelo', 'Nands', 'm', 'sabelonands@gmail.com', 'password', 176524055, 3),
(14, 'sabelo', 'Nands', 'm', 'sabelonands@gmail.com', 'password', 176524055, 3),
(15, 'sabelo', 'Nands', 'm', 'sabelonands@gmail.com', 'password', 176524055, 3),
(18, 'Spykos', 'Zuma', 'f', 'spykoszungu@gmail.com', 'password123', 176524025, 3),
(19, 'Mike', 'Marry', 'm', 'mikemarry@gmail.com', 'password', 215254587, 3),
(21, 'Bruno', 'Fernandes', 'm', 'brunofernandes@gmail.com', 'Password11', 212543625, 3),
(22, 'Danial', 'James', 'm', 'danialjames@gmail.com', 'Password11', 212543785, 3),
(23, 'jjyg', 'James', 'm', 'daniajjmes@gmail.com', '11092002Ww', 212543785, 3),
(24, 'Aroan', 'Bisaka', 'm', 'bisaka26@gmail.com', '$2y$10$gmASeO95tMYkclQTLzT47ek4WMgBURb/jTujXW1fjrpIYXDcEppcy', 212547854, 3),
(25, 'Jaden', 'Sancho', 'm', 'sancho7@gmail.com', '$2y$10$R9biCmZF7i0x3clgq1RGgOaYkrm4a2ZWDsp.yrrigAN07fQxX0F7K', 212254854, 3),
(26, 'nduduzo', 'ndabandaba', 'm', 'JoseM@gmail.com', '$2y$10$WK2x0AvrPFTtdTGqRMZF.ur.8JkS13U3h3Pjeko75rqSBoE6C3wy.', 765225152, 3),
(27, 'masson', 'greenwood', 'm', 'mason11@gmail.com', '$2y$10$6KgsfE5qDv2l9Y1.pxCUMOze6oVs5wCEaZqYfqJo3nwV41bGmlRnK', 215863245, 3),
(28, 'edison', 'cavane', 'm', 'cavane7@gmail.com', '$2y$10$S5QxVZ8xOyBxofwrLcnsju8tUMFZAJ.GbpwEqHvYU3Ae6ztm2LkQ2', 215485455, 3),
(29, 'mike', 'will', 'm', 'mikewillmadeit@gmail.com', '$2y$10$TJC9UK6S8CrSHowaHHdg6OVT9G0Jxk3Dx0wzZGIAjXQTtv4I/fDtK', 756521245, 3),
(30, 'asanda', 'lushaba', 'f', 'asandal@gmail.com', '$2y$10$aHqHQsExp.ZQ77snpvMsLuyVpPCJChkso8I239zvnP6.x7ot5K9UW', 125478547, 3);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `userType_ID` int(10) NOT NULL,
  `userType_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`userType_ID`, `userType_description`) VALUES
(1, 'Admin'),
(2, 'Employee'),
(3, 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_ID`);

--
-- Indexes for table `capability`
--
ALTER TABLE `capability`
  ADD PRIMARY KEY (`capability_ID`);

--
-- Indexes for table `hairstyle`
--
ALTER TABLE `hairstyle`
  ADD PRIMARY KEY (`hairstyle_ID`);

--
-- Indexes for table `stylist`
--
ALTER TABLE `stylist`
  ADD PRIMARY KEY (`stylist_ID`);

--
-- Indexes for table `timeframe`
--
ALTER TABLE `timeframe`
  ADD PRIMARY KEY (`timeframe_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`userType_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `capability`
--
ALTER TABLE `capability`
  MODIFY `capability_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `hairstyle`
--
ALTER TABLE `hairstyle`
  MODIFY `hairstyle_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `stylist`
--
ALTER TABLE `stylist`
  MODIFY `stylist_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `timeframe`
--
ALTER TABLE `timeframe`
  MODIFY `timeframe_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `userType_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
