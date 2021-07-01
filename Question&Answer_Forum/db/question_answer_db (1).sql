-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 07:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `question_answer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(8) NOT NULL,
  `category_name` varchar(255) NOT NULL DEFAULT 'not null',
  `description` varchar(255) NOT NULL DEFAULT 'not null',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `description`, `date`) VALUES
(1, 'Python', 'Python is an interpreted high-level general-purpose programming language. Python\'s design philosophy emphasizes code readability with its notable use of significant indentation.', '2021-04-23 21:40:46'),
(2, 'Spring framework', 'Spring is the most popular application development framework for enterprise Java. Millions of developers around the world use Spring Framework to create high performing, easily testable, and reusable code.\r\n\r\nSpring framework is an open source Java platfo', '2021-04-23 21:42:19'),
(3, 'PHP', 'The PHP Hypertext Preprocessor (PHP) is a programming language that allows web developers to create dynamic content that interacts with databases. PHP is basically used for developing web based software applications. ', '2021-04-23 21:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(7) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(7) NOT NULL,
  `comment_by` int(8) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(2, 'from offical site', 1, 0, '2021-05-05 20:10:20'),
(3, 'https://subscription.packtpub.com/book/web_development/9781788831345/1/ch01lvl1sec12/how-does-django-work\r\nrefer this site', 1, 0, '2021-05-05 20:15:47'),
(4, 'https://subscription.packtpub.com/book/web_development/9781788831345/1/ch01lvl1sec12/how-does-django-work\r\nrefer this site', 1, 0, '2021-05-05 20:22:07'),
(5, 'https://www.tutorialspoint.com/spring/spring_environment_setup.htm\r\nuse this site..', 5, 0, '2021-05-05 20:34:18'),
(6, 'https://www.tutorialspoint.com/spring/spring_environment_setup.htm\r\nuse this site..', 5, 0, '2021-05-05 20:35:33'),
(7, 'https://www.tutorialspoint.com/spring/spring_environment_setup.htm\r\nuse this site..', 5, 0, '2021-05-05 20:35:44'),
(8, 'https://www.tutorialspoint.com/spring/spring_environment_setup.htm\r\nuse this site..', 5, 0, '2021-05-05 20:35:59'),
(9, 'https://www.tutorialspoint.com/spring/spring_environment_setup.htm\r\nuse this site..', 5, 0, '2021-05-05 20:36:11');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(8) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_category_id` int(8) NOT NULL,
  `thread_user_id` int(8) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_category_id`, `thread_user_id`, `time`) VALUES
(1, 'How does Django work with Python?', 'Django is a high-level Python web framework that enables rapid development of secure and maintainable websites.It can work with any client-side framework, and can deliver content in almost any format (including HTML, RSS feeds, JSON, XML, etc). The site you are currently reading is built with Django!', 1, 0, '2021-05-03 20:06:42'),
(2, 'how to install python?', 'please help me....', 1, 0, '2021-05-03 20:30:24'),
(3, 'php framework', 'how to use laravel framework? please guide me ', 3, 0, '2021-05-04 01:31:46'),
(5, 'spring framework', 'how to install spring framework?', 2, 0, '2021-05-04 01:48:01'),
(6, 'spring framework', 'how to install spring framework?', 2, 0, '2021-05-04 01:48:46'),
(7, '', '', 1, 0, '2021-05-04 12:52:50'),
(8, 'framework qouestion', 'how to use framework in pythhon ', 1, 0, '2021-05-04 12:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(8) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `age` int(25) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
