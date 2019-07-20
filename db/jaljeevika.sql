-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2019 at 05:48 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaljeevika`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `marker_id` int(11) NOT NULL,
  `mrker_name` varchar(500) NOT NULL,
  `pond_add` varchar(500) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`marker_id`, `mrker_name`, `pond_add`, `lat`, `lng`, `type`) VALUES
(1, 'Calicut Corporation ', 'Kallai,Kozhikode, Kerala', 11.2315, 75.7898, 'pond'),
(2, 'Kolleru Lake', 'Andhra Pradesh', 16.6758, 81.18, 'lake'),
(3, 'Sambhar Lake', 'Shakambari Jheel, Rajasthan', 26.9099, 75.1862, 'lake'),
(4, 'Chilika Lake', 'Odisha', 19.7149, 85.1877, 'lake');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(500) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`module_id`, `module_name`, `description`) VALUES
(1, 'Modern Fishing Techniques', 'The Most Advance Fishing On Deep Sea'),
(2, 'Longline fishing modern technique', 'Fishing Techniques'),
(3, 'Easy fishing techniques', 'Techniques to master fishing');

-- --------------------------------------------------------

--
-- Table structure for table `pond_details`
--

CREATE TABLE `pond_details` (
  `uid` int(11) NOT NULL,
  `pond_name` varchar(500) NOT NULL,
  `add_line1` varchar(500) NOT NULL,
  `add_line2` varchar(500) NOT NULL,
  `village` varchar(500) NOT NULL,
  `disctrict` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `pincode` int(6) NOT NULL,
  `state` varchar(500) NOT NULL,
  `ph` float NOT NULL,
  `pond_size` float NOT NULL,
  `dissolved_o2` float NOT NULL,
  `pond_depth` float NOT NULL,
  `total_dissolved_solutes` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pond_details`
--

INSERT INTO `pond_details` (`uid`, `pond_name`, `add_line1`, `add_line2`, `village`, `disctrict`, `city`, `pincode`, `state`, `ph`, `pond_size`, `dissolved_o2`, `pond_depth`, `total_dissolved_solutes`) VALUES
(1, 'Kolleru Lake', 'Kollai Bus Stop', '', 'Kollai', '', 'Kollad', 530022, 'Kerala', 7.8, 234, 3.4, 67, 29),
(2, 'Ladakh Lake', 'Higher Mountians', '', 'Ladakh', '', 'Ladakh', 556230, '', 13, 345, 12.3, 345, 6.7),
(3, 'Sambar Lake', 'Shiller Jheka', '', '', '', 'Udaipur', 677965, 'Rajasthan', 10.8, 234, 23.45, 123, 34.5);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_type` varchar(200) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `uid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_type`, `product_name`, `uid`, `price`, `image`, `comments`) VALUES
(1, 'Fishes', 'Rohu – Labeo Rohita', 1, 3, '', ''),
(2, 'Seeds', 'Catla-Indian Corp', 1, 35, '', ''),
(3, 'Fishes', 'Hilsa – Ilish Shad', 6, 46, '', ''),
(4, 'Tools', 'RAS Fishign Equipment', 3, 35, '', ''),
(5, 'Tools', 'Fishing Net', 7, 56, '', ''),
(6, 'Fishes', 'Pulasa Fish', 7, 46, '', ''),
(7, 'Seeds', 'Kajulia', 7, 68, '', ''),
(8, 'Tools ', 'Fishing Graders ', 9, 40, '', ''),
(9, 'Seeds', 'Tilapia', 9, 30, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stake_holders`
--

CREATE TABLE `stake_holders` (
  `uid` int(11) NOT NULL,
  `name` varchar(800) NOT NULL,
  `contact` int(11) NOT NULL,
  `alt_contact` int(11) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `add_line1` text NOT NULL,
  `add_line2` text NOT NULL,
  `village` varchar(250) NOT NULL,
  `district` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pincode` int(6) NOT NULL,
  `state` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(500) NOT NULL,
  `rating` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `domain` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stake_holders`
--

INSERT INTO `stake_holders` (`uid`, `name`, `contact`, `alt_contact`, `email_id`, `add_line1`, `add_line2`, `village`, `district`, `city`, `pincode`, `state`, `password`, `username`, `rating`, `count`, `verified`, `company_name`, `domain`) VALUES
(1, 'Trivendrama Tirupati', 789456135, 0, '', 'Off Shore of Lake Somnath', 'near Somnath Temple', 'Somnath', '', 'Rajkot', 789654, 'Gujurat', 'abc', 'Trivendrama Tirupati', 3, 2, 0, '', ''),
(2, 'Rajendra Sayog', 567890322, 0, '', 'Shiv devi Nagar, outside rajada village', 'Dayanam Towers', 'Rajada ', '', 'Gandhinagar', 123456, 'Gujurat', 'abc', 'Rajendra Sayog', 4, 4, 1, '', ''),
(3, 'Gandhajana', 1234566, 0, 'ghandhand@gmail.com', '', '', 'Akola', '', 'Akola', 678953, 'Maharashtra', 'abc', 'tech_fisheries', 2, 7, 0, 'Fisheries Tech', ''),
(4, 'Dhanyander Fujusika', 2235566, 0, 'dhyan.fujusika@hotmail.com', 'Kukedat, Hamal', '', 'Kollad', '', 'Chennai', 345678, 'Tamil Naidu', 'abc', 'Fujusika', 5, 1, 0, '', 'Ocean Fishing'),
(5, 'Turakhia Jaman', 12345678, 0, '', 'Jamnagar, Gitkar', '', 'Arioli', '', 'Mumbai', 467890, 'Maharashtra', 'abc', 'githkar_099', 3, 4, 1, '', 'Modern Techniques'),
(6, 'Dhanshyam Shankar', 23345667, 0, '', '', '', 'Akriali', '', 'Yukamnagar', 2345667, 'Karnataka', 'abc', 'sadfsfdjn', 0, 0, 0, '', ''),
(7, 'Rajendra Shrivastav', 23345677, 0, 'shriavasta@fiju.com', 'Shrivandnana Lake', 'Near Highway', 'Ruchi', '', 'Uganunda', 1234567, 'Karnataka', 'abc', 'ruchisuganauna', 2, 1, 0, '', ''),
(8, 'Gantanama ', 23445567, 0, '', '', '', 'Dahisar', '', 'Mumbai', 5667744, 'Maharsahtra', 'abc', 'dhiasarns', 3, 1, 0, '', 'Fishing Basics'),
(9, 'Dharmendra Chowdari', 23455678, 0, '', '', '', 'Maddh', 'Malad', 'Malad', 4969660, 'Maharashtra', 'abc', 'wrefpnf', 2, 3, 0, 'Chandana Experts', ''),
(10, 'Triveni Sangam', 234567787, 0, 'sangam@triveni.com', '', '', 'Filashika', '', 'Ruparel', 234567, 'Karnataka', 'abc', 'ejfdosdfmlsdfm', 3, 2, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_user`
--

CREATE TABLE `type_of_user` (
  `UID` int(11) NOT NULL,
  `farmers` tinyint(1) NOT NULL,
  `vendors` tinyint(1) NOT NULL,
  `experts` tinyint(1) NOT NULL,
  `pond_owners` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_of_user`
--

INSERT INTO `type_of_user` (`UID`, `farmers`, `vendors`, `experts`, `pond_owners`) VALUES
(1, 1, 0, 0, 0),
(2, 1, 0, 0, 0),
(3, 0, 1, 0, 0),
(4, 0, 0, 1, 0),
(5, 0, 0, 1, 0),
(6, 1, 0, 0, 0),
(7, 0, 0, 0, 1),
(8, 0, 0, 1, 0),
(9, 0, 1, 0, 0),
(10, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `expert_id` int(11) NOT NULL,
  `youtube_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `module_id`, `expert_id`, `youtube_url`) VALUES
(1, 1, 1, 'https://www.youtube.com/watch?v=_b8_eq1uTY8'),
(2, 2, 1, 'https://www.youtube.com/watch?v=paD-89KsiSM'),
(3, 3, 2, 'https://www.youtube.com/watch?v=GTA1G3EfpuQ'),
(4, 3, 2, 'https://www.youtube.com/watch?v=_b8_eq1uTY8');

-- --------------------------------------------------------

--
-- Table structure for table `wikihow_doc`
--

CREATE TABLE `wikihow_doc` (
  `doc_id` int(11) NOT NULL,
  `doc_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`marker_id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `stake_holders`
--
ALTER TABLE `stake_holders`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `wikihow_doc`
--
ALTER TABLE `wikihow_doc`
  ADD PRIMARY KEY (`doc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `marker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stake_holders`
--
ALTER TABLE `stake_holders`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
