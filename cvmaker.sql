-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 01:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvmaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `cvmaker`
--

CREATE TABLE `cvmaker` (
  `id` bigint(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `citytown` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `placeofbirth` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `drivinglicence` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `martialstatus` varchar(255) NOT NULL,
  `employer` varchar(255) NOT NULL,
  `jobtitle` varchar(255) NOT NULL,
  `citytownjob` varchar(255) NOT NULL,
  `startmonth` varchar(255) NOT NULL,
  `startyear` varchar(255) NOT NULL,
  `endmonth` varchar(255) NOT NULL,
  `endyear` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `citytownedu` varchar(255) NOT NULL,
  `startmonthedu` varchar(255) NOT NULL,
  `startyearedu` varchar(255) NOT NULL,
  `endmonthedu` varchar(255) NOT NULL,
  `endyearedu` varchar(255) NOT NULL,
  `desedu` varchar(255) NOT NULL,
  `skill1` varchar(255) NOT NULL,
  `skill2` varchar(255) NOT NULL,
  `skill3` varchar(255) NOT NULL,
  `desskill` varchar(255) NOT NULL,
  `level1` varchar(255) NOT NULL,
  `level2` varchar(256) NOT NULL,
  `level3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cvmaker`
--

INSERT INTO `cvmaker` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `address`, `zipcode`, `citytown`, `date`, `month`, `year`, `placeofbirth`, `gender`, `drivinglicence`, `nationality`, `martialstatus`, `employer`, `jobtitle`, `citytownjob`, `startmonth`, `startyear`, `endmonth`, `endyear`, `des`, `school`, `degree`, `citytownedu`, `startmonthedu`, `startyearedu`, `endmonthedu`, `endyearedu`, `desedu`, `skill1`, `skill2`, `skill3`, `desskill`, `level1`, `level2`, `level3`) VALUES
(5, 'Theodore', '665748.jpg', 'lepezurinu@mailinator.com', '576', 'Miranda', 'Quinn', 'Yasir', '31', '5', '9', 'Hope', 'male', 'Callie', 'Giselle', 'Ginger', 'Anne', 'Cain', 'Wynne', '1', '7', '11', '2', 'Veniam omnis quia a', 'Hanna', 'Elmo', 'Eaton', '10', '5', '4', '7', 'Id quae earum qui as', 'Rebecca', 'Alfonso', 'Alden', 'Est numquam voluptas', 'Expert', 'beginner', 'beginner'),
(6, 'shahid', '886059.jpg', 'shahidr@gmail.com', '317', 'Sade', 'Colorado', 'Anastasia', '26', '7', '2', 'Abbot', 'Gender', 'Thane', 'Ingrid', 'Blossom', 'Brynn', 'Burton', 'Dane', '11', '1', '5', '11', 'Qui sunt sint eos p', 'Brianna', 'Norman', 'Linda', '1', '14', '4', '13', 'Dolor veniam vel ev', 'Jared', 'Grace', 'Palmer', 'Veritatis labore fug', 'Master', 'Master', 'beginner'),
(7, 'usman', '535540.jpg', 'usman@gmail.com', '123456789', 'People\'s coloney #2 Faisalabad', '342', 'Faisalabad', '21', '2', '4', 'Faisalabad', 'male', 'Kaye', 'Pakistani', 'single', 'Macey', 'manager', 'Faisalabad', '3', '12', '2', '14', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', 'matric', 'B.A', 'Faisalabad', '3', '10', '2', '14', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', 'HTML5,CSS,PHP,Javascript', 'Team work, completancy, Truth person', 'Medical field ', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', 'Master', 'Expert', 'Expert'),
(8, 'Ali', '544710.jpg', 'ali@gmail.com', '234', 'Samanabad Faisalabad ', '453', 'Lahore', '6', '5', '5', 'Faisalabad', 'male', 'Kaye', 'Pakistani', 'single', 'Google Company', 'CEO', 'Faisalabad', '5', '3', '4', '8', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', 'matric', 'PhD', 'Faisalabad', '4', '7', '3', '13', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', 'Excel', 'HTML,CSS,Javascript', 'Word', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', 'Expert', 'Master', 'Expert'),
(9, 'hatim', '534246.jpg', 'hatimihsan@gmail.com', '0987', 'hkjsdhkj', '3713', 'fasilabad', '3', '1', '2', 'Faisalabad', 'male', 'Kaye', 'Pakistani', 'single', 'manager', 'manager', 'Cynthia', '3', '1', '1', '1', 'jbhghg', 'matric', 'PhD', 'Cynthia', '10', '9', '7', '11', 'hjfhgfhgfh', 'Ria', 'HTML,CSS,Javascript', 'Matthew', 'gfghfgfg', 'Expert', 'Expert', 'Master'),
(10, 'Muhammad Shahid', '760328.jpg', 'shahid@gmail.com', '03032124907', 'People\'s coloney #2 Faisalabad', '342', 'Faisalabad', '17', '1', '5', 'Faisalabad', 'male', '3422', 'PakistanI', 'Single', 'Optimum Tech', 'Web Developer', '', '1', '13', '8', '13', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa similique dolor unde consequatur optio esse recusandae fugiat! Dolorem illo laudantium alias doloremque qui facere aut vel sequi officia, iusto nobis voluptas dicta quod, ipsum porro provident', 'matric', 'Bachlar', 'Faisalabad', '1', '11', '1', '13', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa similique dolor unde consequatur optio esse recusandae fugiat! Dolorem illo laudantium alias doloremque qui facere aut vel sequi officia, iusto nobis voluptas dicta quod, ipsum porro provident', 'Word, Excel, typing speed, PowerPoint', 'HTML, CSS, JavaScript ,Php', 'Team Work, Cord national ,Understanding ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa similique dolor unde consequatur optio esse recusandae fugiat! Dolorem illo laudantium alias doloremque qui facere aut vel sequi officia, iusto nobis voluptas dicta quod, ipsum porro provident', 'Master', 'Expert', 'Expert'),
(11, 'Leroy', '317904.jpg', 'sowis@mailinator.com', '801', 'Macon', 'David', 'Aretha', '31', '4', '11', 'Cameron', 'male', 'Yeo', 'Graham', 'Jermaine', 'Lysandra', 'Nehru', 'Acton', '6', '7', '9', '10', 'Vel voluptatem sint ', 'Aladdin', 'Ariel', 'Caesar', '6', '10', '1', '7', 'Dolore exercitatione', 'Shana', 'Isaac', 'Howard', 'Aliquid quis quam do', 'Expert', 'beginner', 'Master'),
(12, 'Hillary', '833241.jpg', 'vofulemy@mailinator.com', '123456789', 'Imogene', 'Scarlett', 'Quinlan', '18', '12', '17', 'Shelly', 'male', 'Blaze', 'Avye', 'Marah', 'Samson', 'Geraldine', 'Kirk', '10', '6', '5', '1', 'Ratione deserunt exc', 'Isabella', 'Owen', 'Victoria', '2', '10', '1', '4', 'Voluptatem qui amet', 'Zachery', 'Tanya', 'Stewart', 'Perferendis vel quae', 'Master', 'beginner', 'Expert'),
(13, 'Adele', '612350.jpg', 'zigu@mailinator.com', '123456789', 'Josephine', 'Chanda', 'Yuri', '15', '5', '1', 'Kaseem', 'male', 'Alexa', 'Tanek', 'Belle', 'Graham', 'Abra', 'Cameran', '2', '5', '9', '2', 'Quis quaerat eos qui', 'Melyssa', 'Nathaniel', 'Wayne', '5', '14', '7', '8', 'Aut adipisicing id u', 'Judah', 'Abdul', 'Sara', 'Voluptate delectus ', 'Master', 'Expert', 'beginner');

-- --------------------------------------------------------

--
-- Table structure for table `date-of-birth`
--

CREATE TABLE `date-of-birth` (
  `dateid` bigint(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `date-of-birth`
--

INSERT INTO `date-of-birth` (`dateid`, `dateofbirth`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11\r\n'),
(12, '12\r\n'),
(13, '13\r\n'),
(14, '14\r\n'),
(15, '15\r\n'),
(16, '16\r\n'),
(17, '17\r\n'),
(18, '18\r\n'),
(19, '19\r\n'),
(20, '20\r\n'),
(21, '21\r\n'),
(22, '22\r\n'),
(23, '23\r\n'),
(24, '24\r\n'),
(25, '25\r\n'),
(26, '26\r\n'),
(27, '27\r\n'),
(28, '28\r\n'),
(29, '29\r\n'),
(30, '30\r\n'),
(31, '31');

-- --------------------------------------------------------

--
-- Table structure for table `edendmonth`
--

CREATE TABLE `edendmonth` (
  `ed-end-id` bigint(244) NOT NULL,
  `edendmonth2` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `edendmonth`
--

INSERT INTO `edendmonth` (`ed-end-id`, `edendmonth2`) VALUES
(1, 'January\r\n'),
(2, 'February\r\n'),
(3, 'March\r\n'),
(4, 'April\r\n'),
(5, 'May\r\n'),
(6, 'June\r\n'),
(7, 'July\r\n'),
(8, 'August\r\n'),
(9, 'September\r\n'),
(10, 'October\r\n'),
(11, 'November\r\n'),
(12, 'December\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `edendyear`
--

CREATE TABLE `edendyear` (
  `edendid` bigint(255) NOT NULL,
  `edendyear2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `edendyear`
--

INSERT INTO `edendyear` (`edendid`, `edendyear2`) VALUES
(1, '2010\r\n'),
(2, '2011\r\n'),
(3, '2012\r\n'),
(4, '2013\r\n'),
(5, '2014\r\n'),
(6, '2015\r\n'),
(7, '2016\r\n'),
(8, '2017\r\n'),
(9, '2018\r\n'),
(10, '2019\r\n'),
(11, '2020\r\n'),
(12, '2021\r\n'),
(13, '2022\r\n'),
(14, '2023\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `edmonth`
--

CREATE TABLE `edmonth` (
  `edid` bigint(255) NOT NULL,
  `edmonth2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `edmonth`
--

INSERT INTO `edmonth` (`edid`, `edmonth2`) VALUES
(1, 'January\r\n'),
(2, 'February\r\n'),
(3, 'March\r\n'),
(4, 'April\r\n'),
(5, 'May\r\n'),
(6, 'June\r\n'),
(7, 'July\r\n'),
(8, 'August\r\n'),
(9, 'September\r\n'),
(10, 'October\r\n'),
(11, 'November\r\n'),
(12, 'December\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `edu-year`
--

CREATE TABLE `edu-year` (
  `ed-id` bigint(255) NOT NULL,
  `edyear` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `edu-year`
--

INSERT INTO `edu-year` (`ed-id`, `edyear`) VALUES
(1, '2010\r\n'),
(2, '2011\r\n'),
(3, '2012\r\n'),
(4, '2013\r\n'),
(5, '2014\r\n'),
(6, '2015\r\n'),
(7, '2016\r\n'),
(8, '2017\r\n'),
(9, '2018\r\n'),
(10, '2019\r\n'),
(11, '2020\r\n'),
(12, '2021\r\n'),
(13, '2022\r\n'),
(14, '2023\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `month-of-birth`
--

CREATE TABLE `month-of-birth` (
  `mbid` bigint(255) NOT NULL,
  `monthofbirth` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `month-of-birth`
--

INSERT INTO `month-of-birth` (`mbid`, `monthofbirth`) VALUES
(1, 'January\r\n'),
(2, 'February\r\n'),
(3, 'March\r\n'),
(4, 'April\r\n'),
(5, 'May\r\n'),
(6, 'June\r\n'),
(7, 'July\r\n'),
(8, 'August\r\n'),
(9, 'September\r\n'),
(10, 'October\r\n'),
(11, 'November\r\n'),
(12, 'December\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `weendmonth`
--

CREATE TABLE `weendmonth` (
  `weendid` bigint(255) NOT NULL,
  `weendmonth2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `weendmonth`
--

INSERT INTO `weendmonth` (`weendid`, `weendmonth2`) VALUES
(1, 'January\r\n'),
(2, 'February\r\n'),
(3, 'March\r\n'),
(4, 'April\r\n'),
(5, 'May\r\n'),
(6, 'June\r\n'),
(7, 'July\r\n'),
(8, 'August\r\n'),
(9, 'September\r\n'),
(10, 'October\r\n'),
(11, 'November\r\n'),
(12, 'December\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `weendyear`
--

CREATE TABLE `weendyear` (
  `weyearid` bigint(255) NOT NULL,
  `weendyear2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `weendyear`
--

INSERT INTO `weendyear` (`weyearid`, `weendyear2`) VALUES
(1, '2010\r\n'),
(2, '2011\r\n'),
(3, '2012\r\n'),
(4, '2013\r\n'),
(5, '2014\r\n'),
(6, '2015\r\n'),
(7, '2016\r\n'),
(8, '2017\r\n'),
(9, '2018\r\n'),
(10, '2019\r\n'),
(11, '2020\r\n'),
(12, '2021\r\n'),
(13, '2022\r\n'),
(14, '2023\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `wemonth`
--

CREATE TABLE `wemonth` (
  `weid` bigint(255) NOT NULL,
  `wemonth2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wemonth`
--

INSERT INTO `wemonth` (`weid`, `wemonth2`) VALUES
(1, 'January\r\n'),
(2, 'February\r\n'),
(3, 'March\r\n'),
(4, 'April\r\n'),
(5, 'May\r\n'),
(6, 'June\r\n'),
(7, 'July\r\n'),
(8, 'August\r\n'),
(9, 'September\r\n'),
(10, 'October\r\n'),
(11, 'November\r\n'),
(12, 'December\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `weyear`
--

CREATE TABLE `weyear` (
  `weyid` bigint(255) NOT NULL,
  `weyear2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `weyear`
--

INSERT INTO `weyear` (`weyid`, `weyear2`) VALUES
(1, '\r\n2010\r\n'),
(2, '2011\r\n'),
(3, '2012\r\n'),
(4, '2013\r\n'),
(5, '2014\r\n'),
(6, '2015\r\n'),
(7, '2016\r\n'),
(8, '2017\r\n'),
(9, '2018\r\n'),
(10, '2019\r\n'),
(11, '2020\r\n'),
(12, '2021\r\n'),
(13, '2022\r\n'),
(14, '2023\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `year-of-birth`
--

CREATE TABLE `year-of-birth` (
  `ybid` bigint(255) NOT NULL,
  `yearofbirth` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `year-of-birth`
--

INSERT INTO `year-of-birth` (`ybid`, `yearofbirth`) VALUES
(1, '1995\r\n'),
(2, '1996\r\n'),
(3, '1997\r\n'),
(4, '1998\r\n'),
(5, '1999\r\n'),
(6, '2000\r\n'),
(7, '2001\r\n'),
(8, '2002\r\n'),
(9, '2003\r\n'),
(10, '2004\r\n'),
(11, '2005\r\n'),
(12, '2006\r\n'),
(13, '2007\r\n'),
(14, '2008\r\n'),
(15, '2009\r\n'),
(16, '2010\r\n'),
(17, '2011\r\n'),
(18, '2012\r\n'),
(19, '2013\r\n'),
(20, '2014\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cvmaker`
--
ALTER TABLE `cvmaker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `date-of-birth`
--
ALTER TABLE `date-of-birth`
  ADD PRIMARY KEY (`dateid`);

--
-- Indexes for table `edendmonth`
--
ALTER TABLE `edendmonth`
  ADD PRIMARY KEY (`ed-end-id`);

--
-- Indexes for table `edendyear`
--
ALTER TABLE `edendyear`
  ADD PRIMARY KEY (`edendid`);

--
-- Indexes for table `edmonth`
--
ALTER TABLE `edmonth`
  ADD PRIMARY KEY (`edid`);

--
-- Indexes for table `edu-year`
--
ALTER TABLE `edu-year`
  ADD PRIMARY KEY (`ed-id`);

--
-- Indexes for table `month-of-birth`
--
ALTER TABLE `month-of-birth`
  ADD PRIMARY KEY (`mbid`);

--
-- Indexes for table `weendmonth`
--
ALTER TABLE `weendmonth`
  ADD PRIMARY KEY (`weendid`);

--
-- Indexes for table `weendyear`
--
ALTER TABLE `weendyear`
  ADD PRIMARY KEY (`weyearid`);

--
-- Indexes for table `wemonth`
--
ALTER TABLE `wemonth`
  ADD PRIMARY KEY (`weid`);

--
-- Indexes for table `weyear`
--
ALTER TABLE `weyear`
  ADD PRIMARY KEY (`weyid`);

--
-- Indexes for table `year-of-birth`
--
ALTER TABLE `year-of-birth`
  ADD PRIMARY KEY (`ybid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cvmaker`
--
ALTER TABLE `cvmaker`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `date-of-birth`
--
ALTER TABLE `date-of-birth`
  MODIFY `dateid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `edendmonth`
--
ALTER TABLE `edendmonth`
  MODIFY `ed-end-id` bigint(244) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `edendyear`
--
ALTER TABLE `edendyear`
  MODIFY `edendid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `edmonth`
--
ALTER TABLE `edmonth`
  MODIFY `edid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `edu-year`
--
ALTER TABLE `edu-year`
  MODIFY `ed-id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `month-of-birth`
--
ALTER TABLE `month-of-birth`
  MODIFY `mbid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `weendmonth`
--
ALTER TABLE `weendmonth`
  MODIFY `weendid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `weendyear`
--
ALTER TABLE `weendyear`
  MODIFY `weyearid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wemonth`
--
ALTER TABLE `wemonth`
  MODIFY `weid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `weyear`
--
ALTER TABLE `weyear`
  MODIFY `weyid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `year-of-birth`
--
ALTER TABLE `year-of-birth`
  MODIFY `ybid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
