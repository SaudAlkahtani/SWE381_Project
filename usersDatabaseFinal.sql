-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 01:24 AM
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
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `history` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`, `history`) VALUES
(1, 'saud', 'kahtani', 'King66saud@gmail.com', '$2y$10$mrzgrH4tLnSb6ao7x2CchuKNzIv1JTXRRCAAe822ukrU0M44Ur/uS', '872488f88d1b2db54d55bc8bba2fad1b', 1, NULL),
(2, 'saleh', 'alnowiser', 'salehsmns@gmail.com', '$2y$10$vulUyL9xxbFuXFqJRPRJ1.OmI9h8X0VtwR/Xs03FZJi3BN9ltFKYW', '2723d092b63885e0d7c260cc007e8b9d', 1, NULL),
(3, 'soso', 'llwl', 'yyuu6699@gmail.com', '$2y$10$3vi6AXbFPebgjI25lYt4IOYSFaXCMvjLfx8JHsNCGuMj/NwurJwOO', '0d0871f0806eae32d30983b62252da50', 1, NULL),
(11, 'y', 'n', 'a@gmail.com', '$2y$10$3tOnulwH7E/9OWlHQXsEw.w4faMPwbh1KflZi8pz25Nos6wT4UgQ6', 'b4288d9c0ec0a1841b3b3728321e7088', 1, NULL),
(12, 'admin', 'admin', 'admin@gmail.com', '$2y$10$eB6a1oxhf315aPQSf4Pd9OuABsOITDatSMHbi9o6GRSGkzjlCFPES', '07e1cd7dca89a1678042477183b7ac3f', 1, 'golden'),
(13, 'saud', 'kkhatani', 'saud.a.katani@gmail.com', '$2y$10$hZmeURuOkhEhnwCXm.OLVunkIpaKFJmtUxXsT4Cl.k8Nd1WY4WjXy', '17c276c8e723eb46aef576537e9d56d0', 0, NULL),
(15, 'saud', 'kahtani', 'kdsh222@gmail.com', '$2y$10$JpSMSYe5RFUfLqNRfN55q.hkDB3L9JvsMShcnw0um/MuKQRo.vK4S', '35cf8659cfcb13224cbd47863a34fc58', 0, NULL),
(16, 'ssaauud', 'slkdjal', 'saud.a.kahtani@gmail.com', '$2y$10$e7UbDZT41oRyUs3AEllWeO1NeTNFfahkKyMr53DHFgbL2MdC5tQpq', 'e57c6b956a6521b28495f2886ca0977a', 1, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
