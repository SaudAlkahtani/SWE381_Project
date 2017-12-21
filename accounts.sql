-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2017 at 03:18 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `hash` varchar(32) CHARACTER SET utf8 NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`) VALUES
(1, 'saud', 'kahtani', 'King66saud@gmail.com', '$2y$10$GhuwztfjwzWjFVXRBJ13vOw2oxbW5kgtfBqUZhOr5zrMHZlI48yMe', '872488f88d1b2db54d55bc8bba2fad1b', 1),
(2, 'saleh', 'alnowiser', 'salehsmns@gmail.com', '$2y$10$vulUyL9xxbFuXFqJRPRJ1.OmI9h8X0VtwR/Xs03FZJi3BN9ltFKYW', '2723d092b63885e0d7c260cc007e8b9d', 1),
(3, 'soso', 'llwl', 'yyuu6699@gmail.com', '$2y$10$3vi6AXbFPebgjI25lYt4IOYSFaXCMvjLfx8JHsNCGuMj/NwurJwOO', '0d0871f0806eae32d30983b62252da50', 1),
(4, 'tw4eadsfx', 'ergfsdcz', 'grsfdgx@g.com', '$2y$10$IuhTMZSto2KzoGCEAGpwy.onqCBxHO2RliPzwboru7glIaKk2K2aO', 'fc49306d97602c8ed1be1dfbf0835ead', 0),
(5, 'adscxz`', 'ass', 'wdcasxz@g.com', '$2y$10$bd/YaNW8tV4JgURh/b8f1.VI6cgMH9TLc66FIo.2q4GTuB74KZKjq', 'f76a89f0cb91bc419542ce9fa43902dc', 0),
(6, 'easfdafd', 'ersadfsda', 'rasdfsd@h.com', '$2y$10$XuEQhk.1WH.rUf.W2Q.nA.i56TIi2jUADdCZal4VB9qEVCwew14eK', '0c74b7f78409a4022a2c4c5a5ca3ee19', 0),
(7, 'qeasz', 'eads`', 'das`@h.com', '$2y$10$qdvQi.Xn9/A1sapbGsW.X.UzHWNcGZjEZz3OH8r3k/4lCMkyZKtrm', 'b55ec28c52d5f6205684a473a2193564', 0),
(8, 'etrstdf', 'ertsdf', 'rwgsdf@h.com', '$2y$10$X56iQdO47CzpYAPKPY/PQ.GQtuIZWCjGypSfatCWwgM/UEPMSihki', '9f61408e3afb633e50cdf1b20de6f466', 0),
(9, 'rwdsad', 'waikfh', 'alsirhdkf@hdx.com', '$2y$10$YB9Lmjygd0XlxeVAHN5GmuPH7RivbLPBKD96OlKnOYRNaRzWD2PTW', 'bea5955b308361a1b07bc55042e25e54', 0),
(10, 'rtvfdctr', 'rgefdsa', 'rwsdtkhgmjnjf@gmail.com', '$2y$10$kUCSWOE30wfVftcwg3R4W.LJ3LvaQdQz8BHq8rkYYQNqWSTCOj6Ge', 'd34ab169b70c9dcd35e62896010cd9ff', 0),
(11, 'y', 'n', 'a@gmail.com', '$2y$10$3tOnulwH7E/9OWlHQXsEw.w4faMPwbh1KflZi8pz25Nos6wT4UgQ6', 'b4288d9c0ec0a1841b3b3728321e7088', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
