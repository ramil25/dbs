-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2019 at 07:26 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databank`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `school_last_attended` varchar(100) NOT NULL,
  `strand_course` varchar(50) NOT NULL,
  `grade_GWA` float NOT NULL,
  `grade_Math` float NOT NULL,
  `grade_English` float NOT NULL,
  `grade_Science` float NOT NULL,
  `fchoice` varchar(30) NOT NULL,
  `schoice` varchar(30) NOT NULL,
  `tchoice` varchar(30) NOT NULL,
  `raw_score` float NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `date_ad` varchar(20) NOT NULL,
  `photo_link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `full_name`, `gender`, `school_last_attended`, `strand_course`, `grade_GWA`, `grade_Math`, `grade_English`, `grade_Science`, `fchoice`, `schoice`, `tchoice`, `raw_score`, `remarks`, `date_ad`, `photo_link`) VALUES
(1, 'Dem Soriano', 'Male', 'Laguna Sta Polytechnic University', 'ICT', 89, 88, 75, 80, 'BSIT', 'BSCS', 'BA', 88.9, 'Qualified', '02/22/2019', ''),
(2, 'Aby Serrano', 'Female', 'STI', 'ABM', 77, 77, 78, 89, 'BSBA', 'BSA', 'BSED', 90, 'Qualified', '02/28/2019', 'gggg'),
(3, 'James Cabantog', 'Male', 'LSPU', 'GAS', 80, 90, 84, 88, 'BSIT', 'BSBA', 'BSA', 90, 'Qualified', 'June/1/201', ''),
(4, 'Harry De Leon', 'Male', 'LSPU', 'GAS', 80, 90, 84, 88, 'BSIT', 'BSBA', 'BSA', 90, 'Qualified', 'June/1/2019', ''),
(5, 'Jenny Rose Vismonte', 'Female', 'STI', 'GAS', 80, 90, 84, 88, 'BSIT', 'BSBA', 'BSA', 90, 'Qualified', 'June/12/2019', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_level`) VALUES
(1, 'admin', 'admin1234', 1),
(2, 'student', 'student', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `full_name` (`full_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
