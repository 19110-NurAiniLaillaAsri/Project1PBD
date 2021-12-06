-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 05:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan_motor_bekas`
--

-- --------------------------------------------------------

--
-- Table structure for table `identitas_motor`
--

CREATE TABLE `identitas_motor` (
  `Id` int(20) NOT NULL,
  `NoRegistrasi` varchar(20) NOT NULL,
  `NamaPemilik` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `NoRangka` varchar(25) NOT NULL,
  `NoMesin` varchar(30) NOT NULL,
  `PlatNo` varchar(15) NOT NULL,
  `Merk` varchar(50) NOT NULL,
  `Type` varchar(40) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `TahunPembuatan` varchar(20) NOT NULL,
  `IsiSilinder` varchar(20) NOT NULL,
  `BahanBakar` varchar(50) NOT NULL,
  `WarnaTNKB` varchar(50) NOT NULL,
  `TahunRegistrasi` varchar(30) NOT NULL,
  `NoBPKB` varchar(20) NOT NULL,
  `KodeLokasi` varchar(20) NOT NULL,
  `MasaBerlakuSTNK` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas_motor`
--

INSERT INTO `identitas_motor` (`Id`, `NoRegistrasi`, `NamaPemilik`, `Alamat`, `NoRangka`, `NoMesin`, `PlatNo`, `Merk`, `Type`, `Model`, `TahunPembuatan`, `IsiSilinder`, `BahanBakar`, `WarnaTNKB`, `TahunRegistrasi`, `NoBPKB`, `KodeLokasi`, `MasaBerlakuSTNK`) VALUES
(1, 'T123D', 'User', 'Karawang', 'MH122', 'HG455 ', 'T123D ', 'Honda', 'Manual', 'Sepeda Motor', '2017', '1', 'Bensin', 'Hitam', '2016', '2345', '23', '2021-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IdUser` int(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `HakAkses` enum('Pemilik','Teller','Teknisi','Customer') NOT NULL,
  `Create_Date` date NOT NULL,
  `Manager` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IdUser`, `Nama`, `Password`, `HakAkses`, `Create_Date`, `Manager`) VALUES
(2, 'Admin', '123', 'Pemilik', '2021-12-06', ''),
(10001, 'Teller', 'Teller', 'Teller', '2021-11-30', ''),
(12345, 'User', 'User', 'Pemilik', '2021-11-30', ''),
(20001, 'Teknisi', '', 'Teknisi', '2021-11-30', ''),
(30001, 'Customer', 'Customer', 'Customer', '2021-11-30', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identitas_motor`
--
ALTER TABLE `identitas_motor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `identitas_motor`
--
ALTER TABLE `identitas_motor`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
