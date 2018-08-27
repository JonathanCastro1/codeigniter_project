-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2018 a las 23:33:45
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `school`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitales`
--

CREATE TABLE `capitales` (
  `id` int(255) NOT NULL,
  `capital` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `capitales`
--

INSERT INTO `capitales` (`id`, `capital`) VALUES
(1, 'Montgomery'),
(2, 'Juneau'),
(3, 'Phoenix'),
(4, 'Little Rock'),
(5, 'Sacramento'),
(6, 'Raleigh'),
(7, 'Columbia'),
(8, 'Denver'),
(9, 'Hartford'),
(10, 'Bismarck'),
(11, 'Pierre'),
(12, 'Dover'),
(13, 'Tallahassee'),
(14, 'Atlanta'),
(15, 'Honolulu'),
(16, 'Boise'),
(17, 'Springfield'),
(18, 'Indianápolis'),
(19, 'Des Moines'),
(20, 'Topeka'),
(21, 'Frankfort'),
(22, ' Baton Rouge'),
(23, 'Augusta'),
(24, 'Annapolis'),
(25, 'Boston'),
(26, 'Lansing'),
(27, 'Saint Paul'),
(28, 'Jackson'),
(29, 'Jefferson City'),
(30, 'Helena'),
(31, 'Lincoln'),
(32, 'Carson City'),
(33, 'Trenton'),
(34, 'Albany'),
(35, 'Concord'),
(36, 'Santa Fe'),
(37, 'Columbus'),
(38, 'Oklahoma City'),
(39, 'Salem'),
(40, 'Harrisburg'),
(41, 'Providence'),
(42, 'Nashville'),
(43, 'Austin'),
(44, 'Salt Lake City'),
(45, 'Montpelier'),
(46, 'Richmond'),
(47, ' Charleston'),
(48, 'Olympia'),
(49, 'Madison'),
(50, 'Cheyenne');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `comentario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `comentario`) VALUES
(1, 'jonathan', 'agregando funcionalidad'),
(2, 'jose', 'ok excelente'),
(4, 'maria', 'ok,buen cms'),
(5, 'joseito', 'buena'),
(6, 'Carmen Rosa', 'El sistema me parece muy eficaz lo recomiendo'),
(7, 'camilo', 'buenas.amigos'),
(8, 'petra', 'ok,chevere'),
(9, 'pancho', 'ok esta bueno'),
(10, 'karla', 'dfdf'),
(11, 'maria', 'ok,buenas admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `id` int(255) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `customer`, `nombre`, `apellido`, `fecha`) VALUES
(1, 'maykel', 'john', 'smith', '10-05-2018'),
(2, 'robert', 'maria', 'williams', '10-01-2018'),
(10, 'fg', 'fg', 'fg', '10-10-2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(255) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `estado`) VALUES
(1, 'Alabama'),
(2, 'Alaska'),
(3, 'Arizona'),
(4, 'Arkansas'),
(5, 'California'),
(6, 'Carolina del Norte'),
(7, 'Carolina del Sur'),
(8, 'Colorado'),
(9, 'Connecticut'),
(10, 'Dakota del Norte'),
(11, 'Dakota del Sur'),
(12, 'Delaware'),
(13, 'Florida'),
(14, 'Georgia'),
(15, 'Hawái'),
(16, 'Idaho'),
(17, 'Illinois'),
(18, 'Illinois'),
(19, 'Iowa'),
(20, 'Kansas'),
(21, 'Kentucky'),
(22, 'Luisiana'),
(23, 'Maine'),
(24, 'Maryland'),
(25, 'Massachusetts'),
(26, 'Míchigan'),
(27, 'Minnesota'),
(28, 'Misisipi'),
(29, 'Misuri'),
(30, 'Montana'),
(31, 'Nebraska'),
(32, 'Nevada'),
(33, 'Nueva Jersey'),
(34, 'Nueva York'),
(35, 'Nuevo Hampshire'),
(36, 'Nuevo México'),
(37, 'Ohio'),
(38, 'Oklahoma'),
(39, 'Oregón'),
(40, 'Pensilvania'),
(41, 'Rhode Island'),
(42, 'Tennessee'),
(43, 'Texas'),
(44, 'Utah'),
(45, 'Vermont'),
(46, 'Virginia'),
(47, 'Virginia Occidental'),
(48, 'Washington'),
(49, 'Washington'),
(50, 'Wyoming');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE `projects` (
  `id` int(255) NOT NULL,
  `id_project` int(255) NOT NULL,
  `nombre_project` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`id`, `id_project`, `nombre_project`, `fecha`) VALUES
(1, 1, 'kitchen parts', '10-02-2018'),
(2, 2, 'garden', '10-03-2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `capital` varchar(255) NOT NULL,
  `parroquia` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `ruta`, `nombre`, `apellido`, `fecha`, `email`, `estado`, `capital`, `parroquia`, `usuario`, `contrasena`, `role`) VALUES
(1, 'user.png', 'jonathan', 'castro', '11-05-2018', 'admin@gmail.com', 'Distrito Capital', 'Caracas', 'El Valle', 'admin', 'admin', 'admin'),
(39, 'user.png', 'jonh', 'smith', '01-08-2018', 'smith@gmail.com', 'Delaware', 'Dover', '', 'smith', '$2y$10$eFFRNFWqw2dJzGdGKFjCJ.trNPGqPNg2RVo6OwownBNnhu5kBVf8S', 'usuario'),
(41, 'user.png', 'pedro', 'chacon', '04-08-2018', 'pedro@gmail.com', 'Hawái', 'Honolulu', '', 'pedro', '$2y$10$aggCaI4euGVjNGbjTSAQb.rReONN8vBbOsiL7We1cQAhoG2rSEZBu', 'usuario'),
(43, 'user.png', 'ramon', 'quincyn', '05-08-2018', 'ramon@hotmail.com', 'Alaska', 'Juneau', '', 'ramon@hotmail.com', '$2y$10$GgpVoKjM6CnKCS4OGsjm4uKuhF9GA6YOGI1ofgNzuY7CpmuEvxCE.', 'usuario'),
(44, 'user.png', 'maykol', 'chorbez', '04-08-2018', 'maykol@gmail.com', 'Illinois', 'Springfield', '', 'maykol', '$2y$10$HgqAXgrAjqnAfIqQVIvwrO.wrYdziEOvXKjtYXXMGnTb4zb0DXsDa', 'usuario'),
(45, 'user.png', 'jonathan', 'castro', '24-08-2018', 'jonathan@gmail.com', 'Arizona', 'Phoenix', '', 'jonathan', '$2y$10$SuvAS4iakt8mQ8yTwcWgeuvLwRTy/HauIIhD2BdJrFWR1Edh.xu92', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capitales`
--
ALTER TABLE `capitales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capitales`
--
ALTER TABLE `capitales`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
