-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221222.e5e070c814
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 09:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga_tiket` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `nama`, `harga_tiket`, `jumlah`, `status`, `tanggal`, `id_user`) VALUES
(2, 'Borobudur', '400000', '1', 'lunas', '01/08/2023 03:37:53 pm', 4),
(3, 'raja ampat', '550000', '2', 'lunas', '01/08/2023 04:25:51 pm', 4),
(4, 'bali', '300000', '1', 'lunas', '01/08/2023 04:41:06 pm', 4),
(5, 'Borobudur', '400000', '3', 'lunas', '01/08/2023 07:01:59 pm', 4),
(6, 'bali', '300000', '1', 'belum lunas', '01/08/2023 07:02:06 pm', 4),
(7, 'bali', '300000', '2', 'lunas', '01/08/2023 07:27:58 pm', 5),
(8, 'Borobudur', '400000', '1', 'lunas', '01/08/2023 07:28:04 pm', 5),
(9, 'raja ampat', '550000', '2', 'lunas', '01/08/2023 07:28:11 pm', 5),
(10, 'bali', '300000', '1', 'lunas', '01/08/2023 07:29:07 pm', 5),
(11, 'Borobudur', '400000', '3', 'belum lunas', '01/08/2023 07:29:12 pm', 5),
(12, 'bali', '300000', '3', 'lunas', '01/08/2023 07:32:36 pm', 6),
(13, 'Borobudur', '400000', '2', 'lunas', '01/08/2023 07:32:42 pm', 6),
(14, 'raja ampat', '550000', '1', 'lunas', '01/08/2023 07:32:48 pm', 6),
(15, 'bali', '300000', '3', 'lunas', '01/08/2023 07:36:01 pm', 6),
(16, 'Borobudur', '400000', '1', 'belum lunas', '01/08/2023 07:36:07 pm', 6),
(17, 'Borobudur', '400000', '1', 'belum lunas', '01/08/2023 07:39:38 pm', 6),
(18, 'raja ampat', '550000', '1', 'lunas', '01/08/2023 07:39:44 pm', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `password`, `status`) VALUES
(4, 'admin', 'admin', 'admin'),
(5, 'jojo', '123', 'user'),
(6, 'boy', '321', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
