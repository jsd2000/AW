-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2019 a las 03:04:42
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `futbol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equips`
--

CREATE TABLE `equips` (
  `codi` int(10) NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `localitat` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `web` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `escut` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `equips`
--

INSERT INTO `equips` (`codi`, `nom`, `localitat`, `web`, `escut`) VALUES
(1, 'FÃºtbol Club Barcelona', 'Barcelona', 'https://www.fcbarcelona.es/es/', 'img/1.png'),
(2, 'Real Madrid Club de FÃºtbol', 'Madrid', 'https://www.realmadrid.com/', 'img/2.png'),
(3, 'Club AtlÃ©tico de Madrid', 'Madrid', 'https://www.atleticodemadrid.com/', 'img/3.png'),
(4, 'Valencia Club de FÃºtbol', 'Valencia', 'https://www.athletic-club.eus/', 'img/4.png'),
(5, 'Sevilla FÃºtbol Club', 'Sevilla', 'https://www.sevillafc.es/', 'img/5.png'),
(6, 'RCD Espanyol de Barcelona', 'Barcelona', 'https://www.rcdespanyol.com/', 'img/6.png'),
(7, 'Athletic Club', 'Bilbao', 'https://www.athletic-club.eus/', 'img/7.png'),
(8, 'Real Sociedad de FÃºtbol', 'Donostia', 'https://www.realsociedad.eus/', 'img/8.png'),
(9, 'Real Zaragoza', 'Zaragoza', 'https://www.realzaragoza.com/', 'img/9.png'),
(10, 'Real Betis BalonpiÃ©', 'Sevilla', 'https://www.realbetisbalompie.es/', 'img/10.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titols`
--

CREATE TABLE `titols` (
  `codi` int(10) NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `codiequip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `titols`
--

INSERT INTO `titols` (`codi`, `nom`, `codiequip`) VALUES
(1, 'Copa del rey: 30', 1),
(2, 'Copa del rey: 19', 2),
(3, 'Copa del rey: 10', 3),
(4, 'Supercopa de Espana: 1', 4),
(5, 'Copa del rey: 5', 5),
(6, 'Copa del rey: 4', 6),
(7, 'Copa del rey: 23', 7),
(8, 'Copa de Espana: 2', 8),
(9, 'Copa del rey: 6', 9),
(10, 'Copa del rey: 2', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equips`
--
ALTER TABLE `equips`
  ADD PRIMARY KEY (`codi`);

--
-- Indices de la tabla `titols`
--
ALTER TABLE `titols`
  ADD PRIMARY KEY (`codi`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equips`
--
ALTER TABLE `equips`
  MODIFY `codi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `titols`
--
ALTER TABLE `titols`
  MODIFY `codi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
