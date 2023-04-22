-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 06:31 PM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'sunnygkp10@gmail.com', '123456'),
(2, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('6433a30f1b00e', '6433a30f1b5b5'),
('6433a30f1d4b6', '6433a30f1d95c'),
('6433a30f1f1f0', '6433a30f1fefb'),
('6433a30f21a44', '6433a30f21e93'),
('6433a30f232c5', '6433a30f23726'),
('6433a72206960', '6433a72206f07'),
('6433a72208a52', '6433a72208e3b'),
('6433a7220a8c7', '6433a7220acfe'),
('6433a7220d041', '6433a7220d70f'),
('6433a7220f9e1', '6433a7220ff38'),
('6433aac134be0', '6433aac1351c5'),
('6433aac1373e1', '6433aac138040'),
('6433aac13aed8', '6433aac13b7b7'),
('6433aac13d90f', '6433aac13e05f'),
('6433aac13ff59', '6433aac1406ab'),
('6433aac141d09', '6433aac142186'),
('6433aac1436ab', '6433aac143c7b'),
('6433aac145656', '6433aac145a56'),
('6433aac1478cf', '6433aac147f40'),
('6433aac149c34', '6433aac14a130');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(255) NOT NULL,
  `y_name` text NOT NULL,
  `y_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `y_name`, `y_message`) VALUES
(62, 'Rohit Rai', 'this course is very usefull for me, I learn lot of things from this course.'),
(63, 'shivam yadav', 'i learn enlish from this course,thank you sir for your support'),
(64, 'DilipKumar', 'Thank you, for making such a greatfull website this, helped me a lot to improve my english'),
(69, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `y_number` int(10) NOT NULL,
  `y_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `email`, `y_number`, `y_message`) VALUES
(4, 'rohitrai@gmail.com', 981978654, 'sir please contact me i want your help'),
(6, 'dinesh@gmail.com', 981927456, 'sir i am facing probleem in uploading notes so please contact me asap'),
(7, 'dilipkumar@gmAIL.COM', 2147483647, 'sir i cant see the video present in the courses section\r\nplease help me'),
(8, 'dilipkumar@gmAIL.COM', 2147483647, 'sir i cant see the video present in the courses section\r\nplease help me'),
(9, 'shivam@gmail.com', 2147483647, 'i am facing some network issue please conact me\r\n'),
(10, 'dilipkumar@gmAIL.COM', 2147483647, 'hi sir');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`image`, `video`, `level`, `title`, `description`, `id`) VALUES
('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTj8H5WtAhdCWTiEhqOwCI0RcNpESpqxgOR1g&usqp=CAU', 'BJM81-FmHsY', 'advanced', 'EXACT PHRASES', 'An exact phrase search returns only phrases that contain all the words in the clue in the exact order that you specify.', 6),
('https://thumbs.dreamstime.com/b/primary-education-happy-french-teen-girl-hold-notebook-childhood-happiness-primary-education-happy-french-teen-girl-hold-notebook-246307981.jpg', 'r7VKVXbaj_Y', 'advanced', 'PHRASAL VERBS', 'Phrasal verbs are very common in English, especially in more informal contexts. They are made up of a verb and a particle.', 7),
('https://t0.gstatic.com/images?q=tbn:ANd9GcRlZ1Z4dEtaDI95zQEEOVq8-PsQj1ZVVrUdLQAEiavOtAdxu7yG', 'UsKpt4FRc2c', 'advanced', 'ENGLISH ADJECTIVES', 'Adjectives are words that give more information about a noun or pronoun and can go in different positions in a sentence.', 8),
('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRe2GcFtIiI7DHgiUc-T-TCzQjC7qoi5kf5MI7qlmKF-8JYFbOd', 'a6o5tq9pV5I&t=25s', 'advanced', 'ADVANCED VERBS - 1', 'a word that characteristically is the grammatical center of a predicate and expresses an act, occurrence, or mode of being.', 9),
('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJyU_PbmKUbdzDq74cpUOJO-4SGZ-3ZyYp-Q&usqp=CAU', 'WGce2fBK0aM', 'advanced', 'ADVANCED VERBS - 2', 'a word that characteristically is the grammatical center of a predicate and expresses an act, occurrence, or mode of being.', 11),
('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDSPIrXeRyG_puVuW1-aBH2qXwkn92IjZBTg&usqp=CAU', '0eoKIA5IFro', 'intermediate', 'ADJECTIVES', 'An adjective is a part of speech that can be used to describe or provide more information about a noun or pronoun that acts as the subject in a sentence.', 12),
('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSpCGFgkBz0JYjHjLT0-IqB-sufvBh3qqZ2w&usqp=CAU', 'WB7iwQNcSDY&t=12s', 'intermediate', 'INTENSIFIERS', 'Intensifiers are adverbs or adverbial phrases that strengthen the meaning of other expressions and show emphasis towards other peoples.', 13),
('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpE9pRv_21UnP93ZwTJgyNfj9dLiG0xSbt6A&usqp=CAU', 'ERXmYiFD0tc', 'intermediate', 'INTERJECTION', 'An interjection is a word or phrase used to express a feeling or to request or demand something. While interjections are a part of speech.', 15),
('https://img5.goodfon.com/wallpaper/nbig/7/29/giftpunditscom-krasivaia-devushka-zadanie-uroki-ucheba-knigi.jpg', 'NrzCFPWQZao', 'intermediate', 'DEGREE', 'Degrees of Comparison is used when we compare a person or thing with another. Degrees of Comparison is applicable only to Adverbs and Adjectives.', 16),
('https://img.freepik.com/premium-photo/education-school-concept-little-student-girl-reading-book-with-magnifier-school_380164-40021.jpg?w=2000', 'tEGWeQ1FK8E', 'intermediate', 'METAPHORS', 'A metaphor is a figure of speech that describes an object or action in a way that isn’t literally true, but helps explain an idea or make a comparison.', 17),
('https://cdn2.psychologytoday.com/assets/styles/manual_crop_1_91_1_1528x800/public/field_blog_entry_images/2017-06/writerwritingpixabaypublicdomain.jpg?itok=U6A3c4YL', 'alInQ7nzKrI&t=2s', 'intermediate', 'INFLUENCE', 'Shakespeare influence on the English language His works contributed significantly to the standardization of grammar, spelling, and vocabulary.', 19),
('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvk76NBMGkyPXuhq8P7IgRjvCz-ylmOzMjYg&usqp=CAU', 'E_o6jKrZsg8', 'basic', 'ARTICLES', 'In this video you will going to learn article by a story of a two friend which also includes windows topic to make it intresting.', 20),
('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZSUyMGxlYXJuaW5nfGVufDB8fDB8fA%3D%3D&w=1000&q=80', 'p4kuvQiyLwE', 'basic', 'CONJUCTION', 'In this video you will going to learn vocabulary by just listening daily converstion, between two friends in a very interactive interface.', 21),
('https://www.wallpaperflare.com/static/514/429/167/school-study-learn-books-wallpaper.jpg', 'IGBdR6GKH20', 'basic', 'NOUNS', 'In this video you will going to learn english very fast and efficiently, and even you will be able to speak and listen english more efficiently.', 22),
('https://thumbs.dreamstime.com/b/full-length-body-size-photo-beautiful-her-sit-floor-notebook-knees-college-website-surround-learn-hot-takeaway-full-length-151411014.jpg', 'JgzhTvIpzzo', 'basic', 'PREPOSITION', 'In this video you will going to learn many things that will help you to improve your conversation and listening.', 23),
('https://wallpapercave.com/wp/wp8237013.jpg', 'TbmSCdn_iUo&t=7s', 'basic', 'PRESCRIPTIVE', 'In this video you will going to learn prescriptive grammar by seeing video of sherlock type animated story.', 24),
('https://c4.wallpaperflare.com/wallpaper/20/9/99/girls-model-hd-books-wallpaper-preview.jpg', '9ISRr6YnUWU', 'basic', 'DESCRIPTIVE', 'In this video you will going to learn descriptive grammar by seeing the video of a housekeeper and a thief in a animated form.', 25);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('admin@admin.com', '6433a0e5a1902', 3, 5, 2, 3, '2023-04-10 05:48:47'),
('admin@admin.com', '6433a608956eb', -5, 5, 0, 5, '2023-04-10 06:05:45'),
('admin@admin.com', '6433a83208cc8', 5, 10, 5, 5, '2023-04-10 06:21:43'),
('ajay@gmail.com', '6433a83208cc8', -4, 10, 2, 8, '2023-04-10 06:23:26'),
('ajay@gmail.com', '6433a0e5a1902', -1, 5, 1, 4, '2023-04-10 06:24:00'),
('ajay@gmail.com', '6433a608956eb', 1, 5, 1, 4, '2023-04-10 06:24:26'),
('jonnyyadav@gmail.com', '6433a608956eb', 1, 5, 1, 4, '2023-04-17 16:26:20'),
('raichudon@gmail.com', '6433a0e5a1902', 3, 5, 2, 3, '2023-04-17 16:27:06'),
('shivam@gmail.com', '6433a608956eb', 1, 5, 1, 4, '2023-04-17 16:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('6433a30f1b00e', 'my name is ajay', '6433a30f1b5b5'),
('6433a30f1b00e', 'i dont know', '6433a30f1b5ba'),
('6433a30f1b00e', 'why should I tell you', '6433a30f1b5bb'),
('6433a30f1b00e', 'name is ajay uchiha', '6433a30f1b5bc'),
('6433a30f1d4b6', 'the', '6433a30f1d953'),
('6433a30f1d4b6', 'yes', '6433a30f1d95a'),
('6433a30f1d4b6', 'why', '6433a30f1d95b'),
('6433a30f1d4b6', 'will', '6433a30f1d95c'),
('6433a30f1f1f0', 'are to', '6433a30f1fefb'),
('6433a30f1f1f0', 'the no', '6433a30f1ff0d'),
('6433a30f1f1f0', 'yes but', '6433a30f1ff0e'),
('6433a30f1f1f0', 'will me', '6433a30f1ff0f'),
('6433a30f21a44', 'the man', '6433a30f21e8e'),
('6433a30f21a44', 'yes boy', '6433a30f21e91'),
('6433a30f21a44', 'dog snake', '6433a30f21e92'),
('6433a30f21a44', 'Ajay pooja', '6433a30f21e93'),
('6433a30f232c5', 'I', '6433a30f23715'),
('6433a30f232c5', 'me', '6433a30f23726'),
('6433a30f232c5', 'You', '6433a30f23727'),
('6433a30f232c5', 'no', '6433a30f23728'),
('6433a72206960', ' are you  ', '6433a72206f00'),
('6433a72206960', 'are you being', '6433a72206f07'),
('6433a72206960', 'Very good', '6433a72206f0a'),
('6433a72206960', 'was not believe', '6433a72206f0f'),
('6433a72208a52', 'To work  ', '6433a72208e36'),
('6433a72208a52', ' so patient  ', '6433a72208e3b'),
('6433a72208a52', 'why', '6433a72208e3d'),
('6433a72208a52', 'being so patient', '6433a72208e3e'),
('6433a7220a8c7', ' tastes  ', '6433a7220acfe'),
('6433a7220a8c7', 'the no', '6433a7220ad08'),
('6433a7220a8c7', 'is tasting', '6433a7220ad09'),
('6433a7220a8c7', ' Its science', '6433a7220ad0a'),
('6433a7220d041', 'are you', '6433a7220d70f'),
('6433a7220d041', 'measuring', '6433a7220d717'),
('6433a7220d041', 'are you being', '6433a7220d71b'),
('6433a7220d041', 'will', '6433a7220d720'),
('6433a7220f9e1', ' listen  ', '6433a7220ff2e'),
('6433a7220f9e1', 'Yes I did ', '6433a7220ff35'),
('6433a7220f9e1', ' I visited Judy', '6433a7220ff37'),
('6433a7220f9e1', 'am listening', '6433a7220ff38'),
('6433aac134be0', 'Was you doing', '6433aac1351c5'),
('6433aac134be0', 'Was you do', '6433aac1351ca'),
('6433aac134be0', 'Were you doing', '6433aac1351cb'),
('6433aac134be0', ' You were doing', '6433aac1351cc'),
('6433aac1373e1', 'clotheful', '6433aac138034'),
('6433aac1373e1', 'clothing', '6433aac13803c'),
('6433aac1373e1', 'clothed', '6433aac13803e'),
('6433aac1373e1', 'clothe', '6433aac138040'),
('6433aac13aed8', 'Becomes', '6433aac13b7b1'),
('6433aac13aed8', 'gets', '6433aac13b7b7'),
('6433aac13aed8', 'been', '6433aac13b7b8'),
('6433aac13aed8', 'got', '6433aac13b7b9'),
('6433aac13d90f', 'yet', '6433aac13e056'),
('6433aac13d90f', 'since', '6433aac13e05f'),
('6433aac13d90f', 'until', '6433aac13e062'),
('6433aac13d90f', 'around', '6433aac13e069'),
('6433aac13ff59', 'will', '6433aac140695'),
('6433aac13ff59', 'were', '6433aac1406a2'),
('6433aac13ff59', 'would', '6433aac1406a7'),
('6433aac13ff59', 'is', '6433aac1406ab'),
('6433aac141d09', 'What kind of fruit', '6433aac142180'),
('6433aac141d09', 'What type of fruit do', '6433aac142186'),
('6433aac141d09', ' How many fruit do', '6433aac142187'),
('6433aac141d09', 'Types of fruit do', '6433aac142189'),
('6433aac1436ab', 'Around', '6433aac143c72'),
('6433aac1436ab', 'to', '6433aac143c7b'),
('6433aac1436ab', 'at', '6433aac143c7d'),
('6433aac1436ab', 'towards', '6433aac143c7f'),
('6433aac145656', 'Who start World War II', '6433aac145a4a'),
('6433aac145656', 'Who started the Second World War', '6433aac145a50'),
('6433aac145656', '  Who caused World War II', '6433aac145a52'),
('6433aac145656', 'Who did World War II', '6433aac145a56'),
('6433aac1478cf', 'saw', '6433aac147f32'),
('6433aac1478cf', 'red', '6433aac147f3b'),
('6433aac1478cf', 'readen', '6433aac147f40'),
('6433aac1478cf', 'read', '6433aac147f48'),
('6433aac149c34', 'think', '6433aac14a130'),
('6433aac149c34', 'have', '6433aac14a13b'),
('6433aac149c34', 'make', '6433aac14a13d'),
('6433aac149c34', 'put', '6433aac14a142');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('6433a0e5a1902', '6433a30f1b00e', 'what is your name', 4, 1),
('6433a0e5a1902', '6433a30f1d4b6', '_______you play with my snake', 4, 2),
('6433a0e5a1902', '6433a30f1f1f0', 'Ayush why ___ you scared __ play with Ajay snake', 4, 3),
('6433a0e5a1902', '6433a30f21a44', '_______will do anything for her ______', 4, 4),
('6433a0e5a1902', '6433a30f232c5', 'dont play with ____', 4, 5),
('6433a608956eb', '6433a72206960', ' Why ________ so selfish about this?', 4, 1),
('6433a608956eb', '6433a72208a52', ' Is she always ________ with children and animals?', 4, 2),
('6433a608956eb', '6433a7220a8c7', ' Everything on the menu ________ delicious.', 4, 3),
('6433a608956eb', '6433a7220d041', 'Why ________ so selfish about this?', 4, 4),
('6433a608956eb', '6433a7220f9e1', 'Please be quiet. I ________ to the radio.', 4, 5),
('6433a83208cc8', '6433aac134be0', 'What _______ when I called?', 4, 1),
('6433a83208cc8', '6433aac1373e1', 'Which word form is not correct?', 4, 2),
('6433a83208cc8', '6433aac13aed8', 'Nothing _________ done when the boss is away.', 4, 3),
('6433a83208cc8', '6433aac13d90f', 'You can use my car ______ tomorrow.', 4, 4),
('6433a83208cc8', '6433aac13ff59', 'What _______ your favorite food as a child?', 4, 5),
('6433a83208cc8', '6433aac141d09', '___________ you like? I like Grapes and Mango.', 4, 6),
('6433a83208cc8', '6433aac1436ab', 'I will talk _____ Paul when I find him.', 4, 7),
('6433a83208cc8', '6433aac145656', '__________? Adolph Hitler did.', 4, 8),
('6433a83208cc8', '6433aac1478cf', 'I never have _______ such a boring book!', 4, 9),
('6433a83208cc8', '6433aac149c34', 'Please, let me _______!', 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('6433a0e5a1902', 'Basic English', 3, 1, 5, 3, '', '', '2023-04-10 05:38:45'),
('6433a608956eb', 'Continuous Tenses', 5, 1, 5, 5, '', 'teses', '2023-04-10 06:00:40'),
('6433a83208cc8', 'Intermediate English', 2, 1, 10, 10, '', 'English', '2023-04-10 06:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('ajay@gmail.com', -4, '2023-04-10 06:24:26'),
('dilipkumar@gmAIL.COM', 0, '2023-04-16 15:41:10'),
('jonnyyadav@gmail.com', 1, '2023-04-17 16:26:20'),
('raichudon@gmail.com', 3, '2023-04-17 16:27:06'),
('shivam@gmail.com', 1, '2023-04-17 16:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Ajay', 'M', 'jmpc', 'ajay@gmail.com', 9867890321, '82dba46c9380863c27a92a4b9befc002'),
('A Patangay', 'M', 'jmpc', 'ayushpatangay@gmail.com', 8454984327, '82dba46c9380863c27a92a4b9befc002'),
('Dilip', 'M', 'jmpc', 'dilipkumar@gmAIL.COM', 7890654321, '82dba46c9380863c27a92a4b9befc002'),
('Johny', 'M', 'jmpc', 'jonnyyadav@gmail.com', 9987345621, '82dba46c9380863c27a92a4b9befc002'),
('Raichu', 'M', 'jmpc', 'raichudon@gmail.com', 9004776036, '82dba46c9380863c27a92a4b9befc002'),
('Shivam', 'M', 'jmpc', 'shivam@gmail.com', 9819786543, '82dba46c9380863c27a92a4b9befc002');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `isAdmin`) VALUES
(1, 'vivek', 'vc8bppc@gmail.com', '1', 0),
(2, 'vivek', 'vc8bp3@gmail.com', '1', 0),
(3, 'admin', 'admin@gmail.com', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
