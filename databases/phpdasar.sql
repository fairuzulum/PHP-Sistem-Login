-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 03:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` enum('XI RPL 1','XI RPL 2','XI RPL 3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `kelas`) VALUES
(1, '202110028', 'Ahmad Fairuz Ulumuddin', 'XI RPL 2'),
(2, '202110060', 'Savero Bill Alexander', 'XI RPL 2'),
(3, '202110049', 'M. Kevin Qalbi Fatiha A', 'XI RPL 2'),
(4, '202110047', 'Irfan Tri Firmansyah', 'XI RPL 2'),
(5, '202110052', 'Muhammad Jaenal Abidin', 'XI RPL 2'),
(7, '202110027', 'Afwan Gibran M. A.', 'XI RPL 2'),
(8, '202110029', 'Alvin Prasetyo', 'XI RPL 2'),
(9, '202110030', 'Amanda Amalia', 'XI RPL 2'),
(10, '202110031', 'Amosha Hafifah Yusan', 'XI RPL 2'),
(11, '202110032', 'Ardhika Reza Syahputra', 'XI RPL 2'),
(12, '202110033', 'Arya Maulana Ibrahim', 'XI RPL 2'),
(13, '202110034', 'Aulia Zulfa Annisa', 'XI RPL 2'),
(14, '202110035', 'Azel Raffi Permana', 'XI RPL 2'),
(15, '202110036', 'Celsea Yano Roofi', 'XI RPL 2'),
(16, '202110037', 'Cindy Gustinarti Aditia', 'XI RPL 2'),
(17, '202110038', 'Darell Praisdy Elisa', 'XI RPL 2'),
(18, '202110039', 'Decella Asyifa Ardhi', 'XI RPL 2'),
(19, '202110040', 'Dewi Ismi Nuraeni P', 'XI RPL 2'),
(20, '202110041', 'Eko Satrio Handoyono Putro', 'XI RPL 2'),
(21, '202110042', 'Fariz Iqbal Efendi', 'XI RPL 2'),
(22, '202110043', 'Fita Nur Amelia', 'XI RPL 2'),
(23, '202110044', 'Galih Doni Prakoso', 'XI RPL 2'),
(24, '202110045', 'Herzan Muhammad Qisser', 'XI RPL 2'),
(25, '202110046', 'Intan Safitri', 'XI RPL 2'),
(26, '202110050', 'Maulanni Dwi Putri', 'XI RPL 2'),
(27, '202110048', 'Kenza Daffa Prayata', 'XI RPL 2'),
(28, '202110051', 'Miftahul Jannah', 'XI RPL 2'),
(29, '202110053', 'Muhammad Dzaki Ragalih', 'XI RPL 2'),
(30, '202110054', 'Muhammad Sadam', 'XI RPL 2'),
(31, '202110055', 'Mustafa Ibrahim', 'XI RPL 2'),
(32, '202110056', 'Nabila Septiyana', 'XI RPL 2'),
(33, '202110057', 'Nisrina Amalia', 'XI RPL 2'),
(34, '202110058', 'Novilda', 'XI RPL 2'),
(35, '202110059', 'Rossa Indah', 'XI RPL 2'),
(36, '202110061', 'Tajla Dhiyaul Auliyah', 'XI RPL 2'),
(37, '202110062', 'Vigia Putri Rahma Dhea', 'XI RPL 2'),
(38, '202110001', 'Abiyyu Haidar Fayyadh', 'XI RPL 1'),
(39, '202110002', 'Aji Mukti Laksono', 'XI RPL 1'),
(40, '202110003', 'Alma Ashfiya', 'XI RPL 1'),
(41, '202110004', 'Alvin Ahmad Adrian', 'XI RPL 1'),
(42, '202110005', 'Apta Mahendra', 'XI RPL 1'),
(43, '202110006', 'Azahra Ramadhani', 'XI RPL 1'),
(44, '202110007', 'Danang Setyo Hutomo', 'XI RPL 1'),
(45, '202110008', 'Davi Rawal Ghifari', 'XI RPL 1'),
(46, '202110009', 'Fikry Aufa Ridho', 'XI RPL 1'),
(47, '202110010', 'Ghaly Maulidza Perdana', 'XI RPL 1'),
(48, '202110011', 'Hadits Ardhiansyah', 'XI RPL 1'),
(49, '202110012', 'Ihvan Fahlevi Darussalam', 'XI RPL 1'),
(50, '202110013', 'Jonathan Julianto', 'XI RPL 1'),
(51, '202110014', 'Keysha Bella Nandini Repi', 'XI RPL 1'),
(52, '202110015', 'Maesa Yunia Zahra', 'XI RPL 1'),
(53, '202110016', 'Mohammad Fachri Akbar', 'XI RPL 1'),
(54, '202110017', 'Muhammad Hanif Dhiaulhaq', 'XI RPL 1'),
(55, '202110018', 'Muhammad Kevin Fachry Gunawan', 'XI RPL 1'),
(56, '202110019', 'Muhammad Rifqi Wijaya', 'XI RPL 1'),
(57, '202110020', 'Naufal Hakim', 'XI RPL 1'),
(58, '202110021', 'Nur Laili Fauziah', 'XI RPL 1'),
(59, '202110022', 'Oktavian Eka Putra', 'XI RPL 1'),
(60, '202110023', 'Radif Putra Permana', 'XI RPL 1'),
(61, '202110024', 'Sahar Romansa', 'XI RPL 1'),
(62, '202110025', 'Sevie Ayu Rahmawati', 'XI RPL 1'),
(63, '202110026', 'Zul Fadli Pulungan', 'XI RPL 1'),
(64, '202110064', 'Aditya Khairifaldi', 'XI RPL 3'),
(65, '202110065', 'Aditya Syahramadhan', 'XI RPL 3'),
(66, '202110066', 'Aliwama Kayussih', 'XI RPL 3'),
(67, '202110067', 'Alvito Rayhan Samudra', 'XI RPL 3'),
(68, '202110068', 'Alyssa Ayu Subandono', 'XI RPL 3'),
(69, '202110069', 'Anisya Lutfiyani', 'XI RPL 3'),
(70, '202110100', 'Arkan Dzaky Yusuf', 'XI RPL 3'),
(71, '202110070', 'Audi Ilyas', 'XI RPL 3'),
(72, '202110071', 'Bagas Aji Samudra Faiz', 'XI RPL 3'),
(73, '202110072', 'Dandy Junior Tomy Pratama', 'XI RPL 3'),
(74, '202110073', 'Dipta Aditya Pratama', 'XI RPL 3'),
(75, '202110074', 'Dyah Puspo Rini', 'XI RPL 3'),
(76, '202110075', 'Febrina Aulia Azahra', 'XI RPL 3'),
(77, '202110076', 'Galang Surya Kusuma', 'XI RPL 3'),
(78, '202110077', 'Gita Apriani', 'XI RPL 3'),
(79, '202110078', 'I Gusti Achmad Rifaldi', 'XI RPL 3'),
(80, '202110079', 'Indri Dwi Lestari', 'XI RPL 3'),
(81, '202110080', 'Intan Nurhazizah', 'XI RPL 3'),
(82, '202110081', 'Katherine Lydia Elsauli Hutauruk', 'XI RPL 3'),
(83, '202110082', 'Lintang Khaeru Raiyani', 'XI RPL 3'),
(84, '202110083', 'Muhammad Akmal', 'XI RPL 3'),
(85, '202110084', 'Muhammad Naufal Hamid', 'XI RPL 3'),
(86, '202110085', 'Nabila Dwinayajanti Santoso', 'XI RPL 3'),
(87, '202110086', 'Naylah Fikri Marwa', 'XI RPL 3'),
(88, '202110087', 'Nazwa Assyifa', 'XI RPL 3'),
(89, '202110088', 'Novita', 'XI RPL 3'),
(90, '202110089', 'Rifqy Harfiansyah', 'XI RPL 3'),
(91, '202110090', 'Rizky Desya Ramadhan', 'XI RPL 3'),
(92, '202110091', 'Shafa Nadiah Widiatmoko', 'XI RPL 3'),
(93, '202110092', 'Shafira Dwini Sufyan', 'XI RPL 3'),
(94, '202110093', 'Shalsabila  Ramadhan Phasa', 'XI RPL 3'),
(95, '202110094', 'Tiara Afriyani', 'XI RPL 3'),
(96, '202110095', 'Tirta Amrina Rosyada', 'XI RPL 3'),
(97, '202110096', 'Vincent Julian Hadi Santoso', 'XI RPL 3'),
(98, '202110097', 'Wahyu Tri Panduwinoto', 'XI RPL 3'),
(99, '202110098', 'Widari Khoirunnisa', 'XI RPL 3');

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
(7, 'ahmad fairuz ulumuddin', 'useleunmdi32@gmail.com', '202110028', '$2y$10$164G.A91wkJFHiTF0E3fnO3fDD5R4Xzph/VH5k1f8h3cfayklylOq', ''),
(8, 'nisrina amalia', 'nisrina@gmail.com', '202110057', '$2y$10$9cLCsN9DMq0kVYdZxqnJSO8MyQJcPiiCslg5Pqvi6RIqmWxhV3lzO', 'siswa'),
(9, 'admin2', 'admin2@gmail.com', 'admin2', '$2y$10$UHBlADZJIQN1QUWCMWTVs.mEcaYWLJ5PqOPZHD7fgCDk67k1HyLJG', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
