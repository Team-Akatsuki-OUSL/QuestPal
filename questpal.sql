-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 08:14 AM
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
-- Database: `questpal`
--

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(11) NOT NULL,
  `requester_id` varchar(15) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(750) NOT NULL,
  `category` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `requester_id`, `title`, `description`, `category`, `district`) VALUES
(1, '200116403146', 'asdd', '<p>asdd</p>', 'Education', 'Vavuniya'),
(2, '200116487545', 'asd', '<p>asd</p>', 'Agriculture', 'Batticaloa'),
(3, '200116403146', 'Tuition fees', '<p>Hello everyone,</p>\r\n<p>I am an Advanced Level student who study in mathematics stream. I do not have money to pay for my tuition classes in next month. I kindly request from all of you to help me in this situation.</p>\r\n<p>Following are my subjects and tuition fees.</p>\r\n<p style=\"padding-left: 40px;\"><strong>Combined Mathematics - Rs. 2500</strong></p>\r\n<p style=\"padding-left: 40px;\"><strong>Chemistry - Rs. 2500</strong></p>\r\n<p style=\"padding-left: 40px;\"><strong>Physics - Rs. 2500</strong></p>\r\n<p>Thank you very much.</p>', 'Education', 'Matara');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `title` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `mobile_number` int(15) NOT NULL,
  `postal_address` varchar(200) NOT NULL,
  `date_of_birth` date NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`title`, `first_name`, `last_name`, `full_name`, `nic`, `email_address`, `mobile_number`, `postal_address`, `date_of_birth`, `password`) VALUES
('Mr.', 'Lakshan', 'Gunasekara', 'T.D.K.L.C. Gunasekara', '200116403146', 'lakshan.idx@gmail.com', 704812596, 'Sinhagiri, Samagi Mawatha, Beralapanathara', '2001-06-12', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
 
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
