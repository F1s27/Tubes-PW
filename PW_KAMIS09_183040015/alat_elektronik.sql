-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Apr 2019 um 14:37
-- Server-Version: 10.1.19-MariaDB
-- PHP-Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `pwp_pertemuan6`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `alat_elektronik`
--

CREATE TABLE `alat_elektronik` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `perusahaan` varchar(35) NOT NULL,
  `tanggal_liris` char(50) NOT NULL,
  `terjual` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `alat_elektronik`
--

INSERT INTO `alat_elektronik` (`id`, `foto`, `nama_barang`, `perusahaan`, `tanggal_liris`, `terjual`) VALUES
(1, '1.jpg', 'Play station 1', 'Sony Interactive Entertainment', '3 Desember 1994', '102,4 juta unit'),
(2, '2.jpg', 'Play station 2', 'Sony Interactive Entertainment', '	26 Oktober 2000', '138 juta unit'),
(3, '3.jpg', 'Play station 3', 'Sony Interactive Entertainment', '26 Oktober 2000', '83,8 juta unit'),
(4, '4.jpg', 'Play station 4', 'Sony Interactive Entertainment', '9 Januari 2014', '63.3 juta unit'),
(5, '5.jpg', '	Play station portable', 'Sony Interactive Entertainment', '11 Mei 2003', '82 juta unit'),
(6, '6.jpg', 'Xbox 360', 'Microsoft', 'â€Ž15 November 2001', '84 juta unit'),
(7, '7.jpg', 'Xbox one', 'Microsoft', '22 November 2013', '26 juta unit'),
(8, '8.jpg', 'Nintendo Switch', 'Nintendo', '3 Maret 2017', '49,1 juta unit'),
(9, '9.jpg', 'Nintendo Wii', '	Nintendo', '16 September 2005', '101.6 juta unit'),
(10, '10.jpg', 'Nintendo DS', 'Nintendo', '21 November 2004', '	154 juta unit');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `alat_elektronik`
--
ALTER TABLE `alat_elektronik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `alat_elektronik`
--
ALTER TABLE `alat_elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
