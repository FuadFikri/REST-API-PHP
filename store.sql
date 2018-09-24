-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 24, 2018 at 10:10 AM
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
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `author_name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author_name`, `price`, `isbn`, `category`) VALUES
(3, 'Database Management Systems', 'Mark', '$75', 'DB-123-ASD', 'Database'),
(4, 'Harry Potter and the Order of the Phoenix', 'J.K. Rowling', '650', 'FC-123-456', 'Novel'),
(5, 'Data Structures', 'author 5', '450', 'FC-456-678', 'Programming'),
(6, 'Learning Web Development ', 'Michael', '300', 'ABC-123-456', 'Web Development'),
(7, 'Professional PHP & MYSQL', 'Programmer Blog', '$340', 'PR-123-456', 'Web Development'),
(8, 'Java Server Pages', 'technical authoer', ' $45.90', 'ABC-567-345', 'Programming'),
(9, 'Marketing', 'author3', '$423.87', '456-GHI-987', 'Business');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
