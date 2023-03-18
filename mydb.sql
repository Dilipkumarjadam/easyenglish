-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 12:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `aid` int(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `ans_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`aid`, `answer`, `ans_id`) VALUES
(1, 'is', '1'),
(2, 'are', '1'),
(3, 'am', '1'),
(4, 'be', '1'),
(5, 'Your / surname', '2'),
(6, 'My / surname', '2'),
(7, 'I / surname', '2'),
(8, 'I / name', '2'),
(9, 'My am', '3'),
(10, 'I is', '3'),
(11, 'I am', '3'),
(12, 'I', '3'),
(13, 'What', '4'),
(14, 'Who', '4'),
(15, 'Where', '4'),
(16, 'When', '4'),
(17, ' is / from', '5'),
(18, 'are / in', '5'),
(19, 'are / is', '5'),
(20, 'are / from', '5');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `hid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `totalQuestions` int(11) NOT NULL,
  `rightAnswers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`hid`, `userid`, `totalQuestions`, `rightAnswers`) VALUES
(1, 1, 5, 5),
(2, 1, 5, 0),
(3, 1, 5, 0),
(4, 1, 5, 0),
(5, 1, 5, 2),
(6, 1, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(250) NOT NULL,
  `questions` varchar(250) NOT NULL,
  `answer_id` int(250) NOT NULL,
  `quiz_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `questions`, `answer_id`, `quiz_id`) VALUES
(1, 'Hello, what ______ your name?', 1, 1),
(2, ' ______ name is John. And my ______ is Johnson.', 6, 1),
(3, ' My name is Lisa. ______ Lisa Peterson', 11, 1),
(4, '______ are you from? Japan', 15, 1),
(5, 'Where ______ you ______ ?', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `isAdmin`) VALUES
(1, 'vivek', 'vc8bppc@gmail.com', '1', 1),
(2, 'vivek', 'vc8bp3@gmail.com', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `aid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
