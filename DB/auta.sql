-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Sob 25. bře 2023, 14:20
-- Verze serveru: 10.4.27-MariaDB
-- Verze PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `auta`
--
CREATE DATABASE IF NOT EXISTS `auta` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `auta`;

-- --------------------------------------------------------

--
-- Struktura tabulky `auto`
--

CREATE TABLE `auto` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci NOT NULL,
  `model` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci NOT NULL,
  `date_prod` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `auto`
--

INSERT INTO `auto` (`id`, `brand`, `model`, `date_prod`) VALUES
(2, 'Renault', 'Twingo', 2003),
(4, 'Subaru', 'Impreza', 1998),
(5, 'Renault', 'Megane', 2005),
(6, 'Audi', 'S8', 2017),
(8, 'Volkswagen', 'Golf', 2000);

-- --------------------------------------------------------

--
-- Struktura tabulky `manage`
--

CREATE TABLE `manage` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `jmeno` varchar(50) NOT NULL,
  `heslo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `manage`
--

INSERT INTO `manage` (`id`, `jmeno`, `heslo`) VALUES
(1, 'admin', '1234');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`heslo`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `auto`
--
ALTER TABLE `auto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pro tabulku `manage`
--
ALTER TABLE `manage`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
