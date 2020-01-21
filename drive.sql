-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 03:28 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drive`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `email`) VALUES
(12, 'Naufalss', '1');

-- --------------------------------------------------------

--
-- Table structure for table `drivedata`
--

CREATE TABLE `drivedata` (
  `id_drive` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name_file` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL,
  `date_created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivedata`
--

INSERT INTO `drivedata` (`id_drive`, `email`, `name_file`, `file`, `date_created`) VALUES
(19, 'naufal@gmail.com', '$2y$10$XEeF9T61Fjz09JZoahqyOuGX/9qLRFv47wqnNKu0jaNn9cHnL6ICO', 'akuntansi_manajemen_lanjut4.docx', '2019-11-11'),
(21, 'naufal@gmail.com', '$2y$10$gNczSC7v4K3hFNUGZECBm.2WIHCbjC6nEUEcazpzWvvtE6ZDtcxGq', 'ERDDiagram11.png', '2019-11-12'),
(22, 'naufal@gmail.com', '$2y$10$P4f2S0OlDrudIWzIB0CGJ.TPHjmwMXudtqqjostQy9SmVYw.TMOeS', 'Doc15.pdf', '2019-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `is_active`, `date_created`) VALUES
(6, 'Naufal', 'naufal@gmail.com', '$2y$10$Qnbk8JIy5kc7w.xq1KAJVuuY6ZHPLZw/KR3P8JldbokJCkdT0LaUu', 1, 1571051819),
(7, 'Florencia', 'florencia@gmail.com', '$2y$10$G9cz9trl19eu/keBUFKSveTLbWyMhTiL6Jws4g.kdWP3j3cH1NgUO', 1, 1571051941),
(8, 'Farah', 'farah@gmail.com', '$2y$10$w1D.zclcPpJTHlWRpb8an.cnKjZrinBtAfeE4XJ/lu.kd2q84E9au', 1, 1572059962);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivedata`
--
ALTER TABLE `drivedata`
  ADD PRIMARY KEY (`id_drive`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `drivedata`
--
ALTER TABLE `drivedata`
  MODIFY `id_drive` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
