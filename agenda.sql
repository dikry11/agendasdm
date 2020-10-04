-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 09:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`) VALUES
('admin', 'admin'),
('user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spkeluar`
--

CREATE TABLE `tb_spkeluar` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `kpd` varchar(50) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_spkeluar`
--

INSERT INTO `tb_spkeluar` (`id`, `tgl`, `no_surat`, `kpd`, `perihal`, `ket`) VALUES
(2, '2020-08-31', '2', '1', '23', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spmasuk`
--

CREATE TABLE `tb_spmasuk` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `dari` varchar(50) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_spmasuk`
--

INSERT INTO `tb_spmasuk` (`id`, `tgl`, `no_surat`, `dari`, `perihal`, `ket`) VALUES
(8, '2020-09-08', '1', '1212', '1', '1212121'),
(9, '2020-08-30', '1', '1', '1', '1'),
(10, '2020-09-01', '1111', '111', '11', '1'),
(11, '0000-00-00', '', '', '', ''),
(12, '2020-08-31', '22', '22', '22', '22'),
(13, '2020-08-31', '1', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_spkeluar`
--
ALTER TABLE `tb_spkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_spmasuk`
--
ALTER TABLE `tb_spmasuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_spkeluar`
--
ALTER TABLE `tb_spkeluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_spmasuk`
--
ALTER TABLE `tb_spmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
