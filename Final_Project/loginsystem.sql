-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2024 at 05:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES
(7, 'Megh', 'Jackson', 'Megh01554', 'testuser@something.com', '$2y$10$mYQDqccsf01mV3tVc/z3YuzaB3jnDc.pqErjy2GBmH2boAQRBk0ne'),
(8, 'Megh', 'Jackson', 'username123', 'thegreatpinkyworld@gmail.com', '$2y$10$.1Mx2ozNvan2ru02GT7r7eof1AoR98ToSxyEcvtv/nZK1X95wYl5q'),
(9, 'Dino', 'Man', 'DinoMan6112', 'ad@dasda.com', '$2y$10$xUCm3hT4in4F4VELnMMEZO8Ekd3YpuPOwEKQB8sPcXpIUIbJ8nSRy'),
(10, 'Tim', 'Johnson ', 'Tim07', 'tim@tim.com', '$2y$10$CoKtDRzd679JklvkY4Wo1.4FcAXjdQXN7IJjfAhRS./jA2bvfQhFG'),
(11, 'Bob', 'Builder', 'bob08', 'bobthebuilder@building.com', '$2y$10$XLOmTyNbRl.mvsyuXfsecucWr1rtaEmMuuiGhLsmsYLS6apbNCQyO'),
(12, 'Jerry', 'Mouse', 'Jerry01', 'Jerry@cheese.com', '$2y$10$6vmmLqT8i21c7U7AiiQ6NO9VUIyIejPg9taRZN6Bun1.LTfoA/Sb.'),
(13, 'Jason', 'Pong', 'Jason11', 'Jason@name.com', '$2y$10$.bvO57QDEcJ.3epSiN1SCettHfdS.3Mdu0RWOi/JM5VEO0IxaoLuy');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
