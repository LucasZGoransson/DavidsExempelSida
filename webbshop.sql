-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 12 nov 2019 kl 10:47
-- Serverversion: 10.4.6-MariaDB
-- PHP-version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `webbshop`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `kunder`
--

CREATE TABLE `kunder` (
  `kundID` int(10) UNSIGNED NOT NULL,
  `anvnamn` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `fornamn` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `efternamn` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `adress` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `postnummer` int(10) NOT NULL,
  `postadress` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `telefon` varchar(10) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `kunder`
--

INSERT INTO `kunder` (`kundID`, `anvnamn`, `fornamn`, `efternamn`, `adress`, `postnummer`, `postadress`, `telefon`) VALUES
(1, 'Kalle1', 'Kalle1', 'Svensson1', 'Abovagen1', 12345, 'Vaxjo', '1234567890'),
(2, 'Kalle2', 'Kalle2', 'Svensson2', 'AbovAgen2', 12345, 'Vaxjo', '1234567890'),
(3, 'Kalle3', 'Kalle3', 'Svensson3', 'Abovagen3', 12345, 'Vaxjo', '1234567890');

-- --------------------------------------------------------

--
-- Tabellstruktur `orders`
--

CREATE TABLE `orders` (
  `orderID` int(10) UNSIGNED NOT NULL,
  `produktID` int(10) UNSIGNED NOT NULL,
  `antal` int(5) NOT NULL,
  `kundID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `orders`
--

INSERT INTO `orders` (`orderID`, `produktID`, `antal`, `kundID`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 3, 3, 3);

-- --------------------------------------------------------

--
-- Tabellstruktur `produkter`
--

CREATE TABLE `produkter` (
  `produktID` int(10) UNSIGNED NOT NULL,
  `namn` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `beskrivning` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  `pris` int(50) NOT NULL,
  `bild` varchar(200) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `produkter`
--

INSERT INTO `produkter` (`produktID`, `namn`, `beskrivning`, `pris`, `bild`) VALUES
(1, 'Banan', 'Gul', 100, '123456'),
(2, 'Apple', 'Rod', 200, '654321'),
(3, 'Avocado', 'Svart', 50, '321456'),
(4, 'Paron', 'Morkgron', 200, '123654');

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `anvnamn` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`anvnamn`, `email`, `password`, `status`) VALUES
('Kalle1', 'Kalle1@hotmail.com', 'qwe123', 1),
('Kalle2', 'Kalle2@hotmail.com', 'qwe123', 1),
('Kalle3', 'Kalle3@hotmail.com', 'qwe123', 1);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `kunder`
--
ALTER TABLE `kunder`
  ADD PRIMARY KEY (`kundID`),
  ADD KEY `anvnamn` (`anvnamn`);

--
-- Index för tabell `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `produktID` (`produktID`),
  ADD KEY `kundID` (`kundID`);

--
-- Index för tabell `produkter`
--
ALTER TABLE `produkter`
  ADD PRIMARY KEY (`produktID`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `anvnamn` (`anvnamn`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `anvnamn_2` (`anvnamn`),
  ADD UNIQUE KEY `anvnamn_3` (`anvnamn`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `kunder`
--
ALTER TABLE `kunder`
  MODIFY `kundID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT för tabell `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT för tabell `produkter`
--
ALTER TABLE `produkter`
  MODIFY `produktID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `kunder`
--
ALTER TABLE `kunder`
  ADD CONSTRAINT `kunder_ibfk_1` FOREIGN KEY (`anvnamn`) REFERENCES `users` (`anvnamn`) ON UPDATE CASCADE;

--
-- Restriktioner för tabell `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`produktID`) REFERENCES `produkter` (`produktID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`kundID`) REFERENCES `kunder` (`kundID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
