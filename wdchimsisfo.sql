-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Okt 2017 pada 21.04
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdchimsisfo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `financial`
--

CREATE TABLE `financial` (
  `FinancialID` int(100) NOT NULL,
  `Period` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `DueDate` date NOT NULL,
  `Charge` int(11) NOT NULL,
  `Payment` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `scoresatu`
--

CREATE TABLE `scoresatu` (
  `Score1ID` int(11) NOT NULL,
  `score1_1` int(11) NOT NULL,
  `score1_2` int(11) NOT NULL,
  `score1_3` int(11) NOT NULL,
  `score1_4` int(11) NOT NULL,
  `score1_5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userID` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `FinancialID` int(100) NOT NULL,
  `score1ID` varchar(100) NOT NULL,
  `score2ID` varchar(100) NOT NULL,
  `score3ID` varchar(100) NOT NULL,
  `Score4ID` varchar(100) NOT NULL,
  `Score5ID` varchar(100) NOT NULL,
  `GPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `FinancialID`, `score1ID`, `score2ID`, `score3ID`, `Score4ID`, `Score5ID`, `GPA`) VALUES
(11250, 'Roberto', 'Therexomeg@48', 15120, '1', '2', '3', '4', '5', 3.5),
(14045, 'Shantisetiani', 'fluffyebalebol', 17502, '11', '22', '33', '44', '55', 3.7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `financial`
--
ALTER TABLE `financial`
  ADD PRIMARY KEY (`FinancialID`);

--
-- Indexes for table `scoresatu`
--
ALTER TABLE `scoresatu`
  ADD PRIMARY KEY (`Score1ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `financial`
--
ALTER TABLE `financial`
  MODIFY `FinancialID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14046;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
