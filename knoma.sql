-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 08:37 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knoma`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ans_id` int(10) NOT NULL,
  `answer` mediumtext,
  `answered_by` int(10) DEFAULT NULL,
  `quesid` int(10) DEFAULT NULL,
  `date_of_ans` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ans_id`, `answer`, `answered_by`, `quesid`, `date_of_ans`) VALUES
(1, '4', 1, 1, '2018-11-13'),
(2, '5', 1, 1, '2018-11-13'),
(3, '6', 1, 1, '2018-11-13'),
(4, 'bros are friends.', 12, 2, '2019-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `f_pages`
--

CREATE TABLE `f_pages` (
  `fpage_id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `page_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `f_people`
--

CREATE TABLE `f_people` (
  `fp_id` int(100) NOT NULL,
  `follower_id` int(10) DEFAULT NULL,
  `followee_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_people`
--

INSERT INTO `f_people` (`fp_id`, `follower_id`, `followee_id`) VALUES
(4, 1, 11),
(1, 12, 1),
(2, 12, 11);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(10) NOT NULL,
  `page_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_name`) VALUES
(1, 'Maths'),
(2, 'bros');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `quesid` int(10) NOT NULL,
  `askedby` int(10) DEFAULT NULL,
  `question` varchar(10000) DEFAULT NULL,
  `date_of_ques` date DEFAULT NULL,
  `page_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`quesid`, `askedby`, `question`, `date_of_ques`, `page_id`) VALUES
(1, 1, '2+2', '2018-11-13', 1),
(2, 12, 'whats bros?', '2019-02-01', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `passwordd` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `passwordd`, `email`, `occupation`, `phone_number`, `age`, `birthdate`, `gender`, `user_id`) VALUES
('sh1', 'shantanu', 'sh1', 'sh1@gmail.com', 'sh1', 12, 12, '2018-11-13', 'm', 1),
('sh2', 'shan', 'sh2', 'sh2@gmail.com', 'sh2', 12, 12, '2018-11-13', 'm', 11),
('bruha', 'shant', 'az', 'maha@gmail.com', 'qweet', 1234567000, 19, '2018-11-07', 'm', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ans_id`),
  ADD KEY `answered_by` (`answered_by`),
  ADD KEY `quesid` (`quesid`);

--
-- Indexes for table `f_pages`
--
ALTER TABLE `f_pages`
  ADD PRIMARY KEY (`fpage_id`),
  ADD UNIQUE KEY `my_unique_keyx` (`user_id`,`page_id`),
  ADD KEY `page_id` (`page_id`);

--
-- Indexes for table `f_people`
--
ALTER TABLE `f_people`
  ADD PRIMARY KEY (`fp_id`),
  ADD UNIQUE KEY `sqlis` (`follower_id`,`followee_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`quesid`),
  ADD KEY `askedby` (`askedby`),
  ADD KEY `page_id` (`page_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ans_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `f_pages`
--
ALTER TABLE `f_pages`
  MODIFY `fpage_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_people`
--
ALTER TABLE `f_people`
  MODIFY `fp_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `quesid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`answered_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`quesid`) REFERENCES `questions` (`quesid`);

--
-- Constraints for table `f_pages`
--
ALTER TABLE `f_pages`
  ADD CONSTRAINT `f_pages_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `page` (`page_id`),
  ADD CONSTRAINT `f_pages_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`askedby`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`page_id`) REFERENCES `page` (`page_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
