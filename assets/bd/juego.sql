-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2015 at 03:50 PM
-- Server version: 5.5.40-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


-- --------------------------------------------------------

--
-- Table structure for table `juego`
--

CREATE TABLE IF NOT EXISTS `juego` (
  `id` int(11) NOT NULL,
  `nombre` varchar(11) NOT NULL,
  `edad` varchar(11) NOT NULL,
  `consola` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `juego`
--

INSERT INTO `juego` (`id`, `nombre`, `edad`, `consola`) VALUES
(5, 'juego5', '3', 'PS1'),
(4, 'juego4', '3', 'Ps1'),
(3, 'juego3', '3', 'PS1'),
(1, 'juego1', '3', 'PS1'),
(2, 'juego2', '3', 'PS1'),
(6, 'juego6', '3', 'PS1'),
(7, 'juego7', '3', 'PS1'),
(8, 'juego8', '3', 'PS1'),
(9, 'juego9', '3', 'PS1'),
(10, 'juego10', '3', 'PS1'),
(11, 'juego11', '7', 'PS1'),
(12, 'juego12', '7', 'PS1'),
(13, 'juego13', '7', 'PS1'),
(14, 'juego14', '7', 'PS1'),
(15, 'juego15', '7', 'PS1'),
(16, 'juego16', '7', 'PS2'),
(17, 'juego17', '7', 'PS2'),
(18, 'juego18', '7', 'PS2'),
(19, 'juego19', '7', 'PS2'),
(20, 'juego20', '7', 'PS2'),
(21, 'juego21', '18', 'PS2'),
(22, 'juego22', '18', 'PS2'),
(23, 'juego23', '18', 'PS2'),
(24, 'juego24', '18', 'PS2'),
(25, 'juego25', '18', 'PS2'),
(26, 'juego26', '18', 'PS2'),
(27, 'juego27', '18', 'PS2'),
(28, 'juego28', '18', 'PS2'),
(29, 'juego29', '18', 'PS2'),
(30, 'juego30', '18', 'PS2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
