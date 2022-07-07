-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql100.byetcluster.com
-- Generation Time: Jul 07, 2022 at 03:48 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31543408_phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `password`, `level`) VALUES
(6, 'admin', 'admin@gmail.com', 'admin', '$2y$10$qPeflM5tVy7bXLr0NqHjzeJLwtBQuFeFApbL2LQurxoYPzqSE0UYa', 'admin'),
(9, 'admin2', 'admin2@gmail.com', 'admin2', '$2y$10$UHBlADZJIQN1QUWCMWTVs.mEcaYWLJ5PqOPZHD7fgCDk67k1HyLJG', ''),
(10, 'vigia', 'vigiadhea28@gmail.com', 'dhea', '$2y$10$9TRseJJ7vq/G6LRmVYn73.jXdXbsn1.S4biamSnoKP322yEM1eRwu', ''),
(11, 'gavtay', 'usleunmdi32@gmail.com', '202110028', '$2y$10$GKo2Oz97alrzjyDFL0dpBuATRh8xJdGWJjbrk.aKqGVVrdzeGAChu', ''),
(12, 'rhru', 'hga@gmail.com', '123456789', '$2y$10$ATR1X24jwTm7YVoenz7KWeACvRWWFFvyndeUuO97l4lHYt90j6twy', ''),
(13, 'cucu', 'cucu@gmail.com', 'habib123', '$2y$10$2/AufVAjKjdqrHcyKUjHL.82Br6mEjyqDs14plW9a64OFNUvl8IbS', ''),
(14, 'anisha hafifah ', 'xanishafx@gmail.com', 'ahysn', '$2y$10$QGGIUHksu8g33/Zf.kZdluU2m3dP.tnxNIwGszT56cjlt/UDZm3iG', ''),
(15, 'udin', 'vagwg@gmail.com', 'kevin', '$2y$10$OGedfNKZmEi6hFcno6OWZ.r7pdRiNzoIIw5X4W6zM.4JJogJFu0OK', ''),
(16, 'jaenal', 'jaenla@gmail.com', 'jaenal123', '$2y$10$g4YfnyJpkdpfkp59bwridOaoesY5p6ieOPHMfpmZu0Vp0lyI61/rq', '');

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
