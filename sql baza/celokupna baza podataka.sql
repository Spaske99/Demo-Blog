-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 24, 2020 at 10:49 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proba`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

DROP TABLE IF EXISTS `kategorije`;
CREATE TABLE IF NOT EXISTS `kategorije` (
  `idvest` int(25) NOT NULL AUTO_INCREMENT,
  `kategorija` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vest` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `id` (`idvest`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`idvest`, `kategorija`, `vest`) VALUES
(26, 'politika', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(29, 'sport', 'Tenis'),
(31, 'sport', 'Fudbal\r\n'),
(32, 'sport', 'Kosarka\r\n'),
(24, 'politika', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(33, 'ekonomija', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(34, 'politika', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit'),
(35, 'politika', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(36, 'ekonomija', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(27, 'ekonomija', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(28, 'ekonomija', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(37, 'sport', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

DROP TABLE IF EXISTS `komentari`;
CREATE TABLE IF NOT EXISTS `komentari` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `kategorija` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idvest` int(11) NOT NULL,
  `komentar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vreme` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=179 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id`, `username`, `kategorija`, `idvest`, `komentar`, `vreme`) VALUES
(166, 'Nenad', 'ekonomija', 33, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '17:57:04'),
(167, 'Nenad', 'ekonomija', 28, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '17:57:20'),
(117, 'admin', 'politika', 24, 'Probni tekst\r\n', '14:13:39'),
(116, 'admin', 'politika', 20, 'Probni Tekst\r\n', '14:10:53'),
(118, 'admin', 'politika', 26, 'Probni tekst', '14:14:38'),
(160, 'Nenad', 'sport', 29, 'Nadal', '17:51:05'),
(130, 'admin', 'sport', 29, 'Djokovic', '15:28:54'),
(168, 'Sasa', 'sport', 29, 'Federer', '17:58:19'),
(134, 'admin', 'sport', 31, 'Mesi', '15:30:06'),
(135, 'admin', 'sport', 31, 'Nejmar', '15:30:18'),
(136, 'admin', 'sport', 32, 'Bogdanovic', '15:30:52'),
(138, 'admin', 'ekonomija', 27, 'Probni tekst', '15:31:49'),
(139, 'admin', 'ekonomija', 27, 'Probni tekst 2', '15:32:05'),
(165, 'Nenad', 'politika', 34, 'text', '17:56:32'),
(141, 'admin', 'ekonomija', 28, 'Probni tekst 4\r\n', '15:32:39'),
(142, 'admin', 'ekonomija', 28, 'Probni tekst 5', '15:32:46'),
(164, 'Nenad', 'politika', 26, 'text 2\r\n', '17:56:10'),
(144, 'admin', 'ekonomija', 33, 'Lorem ipsum dolor sit amet', '15:33:48'),
(147, 'admin', 'politika', 34, 'Proba uspesna', '15:36:49'),
(163, 'Nenad', 'politika', 26, 'text', '17:55:31'),
(162, 'Nenad', 'sport', 32, 'Jokic', '17:52:00'),
(161, 'Nenad', 'sport', 31, 'Ronaldo', '17:51:42'),
(169, 'Sasa', 'sport', 32, 'Jovic', '17:58:55'),
(170, 'admin', 'politika', 35, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '18:00:17'),
(174, 'admin', 'sport', 37, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '18:02:15'),
(172, 'admin', 'politika', 35, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '18:00:26'),
(173, 'admin', 'ekonomija', 36, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '18:01:11'),
(175, 'Sasa', 'politika', 35, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '18:02:50'),
(176, 'Sasa', 'politika', 26, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '18:03:12'),
(177, 'Sasa', 'ekonomija', 36, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '18:03:28'),
(178, 'Sasa', 'sport', 37, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '18:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

DROP TABLE IF EXISTS `korisnici`;
CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `username`, `password`) VALUES
(1, 'admin', '2020'),
(23, 'sasa', '26091968'),
(22, 'nenad', '31071999');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
