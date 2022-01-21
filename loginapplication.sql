-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1:3306
-- Vytvořeno: Sob 26. pro 2020, 19:56
-- Verze serveru: 5.7.31
-- Verze PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `loginapplication`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `newemail`
--

DROP TABLE IF EXISTS `newemail`;
CREATE TABLE IF NOT EXISTS `newemail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `newemail`
--

INSERT INTO `newemail` (`id`, `email`) VALUES
(16, 'tomas@seznam.cz'),
(14, 'VladenaC@seznam.cz'),
(40, 'jana@seznam.cz');

-- --------------------------------------------------------

--
-- Struktura tabulky `questionn`
--

DROP TABLE IF EXISTS `questionn`;
CREATE TABLE IF NOT EXISTS `questionn` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `anketa` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `questionn`
--

INSERT INTO `questionn` (`id`, `anketa`) VALUES
(1, 'b'),
(2, 'b'),
(3, 'c'),
(4, 'b'),
(5, 'b'),
(6, 'b'),
(7, 'b'),
(8, 'b'),
(9, 'a'),
(10, 'c');

-- --------------------------------------------------------

--
-- Struktura tabulky `registr`
--

DROP TABLE IF EXISTS `registr`;
CREATE TABLE IF NOT EXISTS `registr` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password2` varchar(200) NOT NULL,
  `password3` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `registr`
--

INSERT INTO `registr` (`id`, `username`, `email`, `password2`, `password3`) VALUES
(61, 'Vladka', 'VladenaC@seznam.cz', '$2y$10$uKkRwhlohen15ra24NqwpeB.v3mVDgCbeOEa85Yd.e4.euxBhjJCW', '$2y$10$uKkRwhlohen15ra24NqwpeB.v3mVDgCbeOEa85Yd.e4.euxBhjJCW'),
(63, 'Jana123', 'jana@seznam.cz', '$2y$10$uKkRwhlohen15ra24NqwpeyQgHpkAkfkRI5YkvMpLQ0S.sU0gZXx2', '$2y$10$uKkRwhlohen15ra24NqwpeyQgHpkAkfkRI5YkvMpLQ0S.sU0gZXx2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
