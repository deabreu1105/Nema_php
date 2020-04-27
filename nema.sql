-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2020 a las 07:26:03
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario`
--

CREATE TABLE `cuestionario` (
  `id` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `infec_orina` char(3) NOT NULL,
  `infec_uri_cistitis` char(3) NOT NULL,
  `ardor_orinar_disuria` char(3) NOT NULL,
  `aumento_orina_polaquiuria` char(3) NOT NULL,
  `sencion_novaciar_vejiga` char(3) NOT NULL,
  `sencion_urge_orin` char(3) NOT NULL,
  `sencion_dolor_pelvico` char(3) NOT NULL,
  `sangra_orin` char(3) NOT NULL,
  `levantar_orin` char(3) NOT NULL,
  `flujo_vaginal` char(3) NOT NULL,
  `color_flujo_vaginal` varchar(15) NOT NULL,
  `olor_flujo_vaginal` varchar(15) NOT NULL,
  `dolor_espalda` char(3) NOT NULL,
  `ulti_semanas_dolor_espalda` char(3) NOT NULL,
  `sensacion_fiebre` char(3) NOT NULL,
  `padecimiento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuestionario`
--

INSERT INTO `cuestionario` (`id`, `id_usuario`, `infec_orina`, `infec_uri_cistitis`, `ardor_orinar_disuria`, `aumento_orina_polaquiuria`, `sencion_novaciar_vejiga`, `sencion_urge_orin`, `sencion_dolor_pelvico`, `sangra_orin`, `levantar_orin`, `flujo_vaginal`, `color_flujo_vaginal`, `olor_flujo_vaginal`, `dolor_espalda`, `ulti_semanas_dolor_espalda`, `sensacion_fiebre`, `padecimiento`) VALUES
(1, 8, 'si', 'si', 'no', 'no', 'no', 'no', 'no', 'no', 'si', 'no', '', '', 'si', 'si', 'si', 'InfecciÃ³n urinaria alta o renal, padeciste infecciÃ³n baja (cistitis)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fecha_nac` date NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `tipo_usuario` varchar(8) NOT NULL,
  `nom_usuario` varchar(40) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `estado_usu` char(3) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombres`, `apellidos`, `telefono`, `email`, `fecha_nac`, `ciudad`, `municipio`, `tipo_usuario`, `nom_usuario`, `contrasena`, `estado_usu`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, 'Daniel', 'Abreu Delgado', '03211234567', 'deabreu83@gmail.com', '2019-12-12', 'Distrito ', 'Caracas', 'Admin', 'deabreu83', 'MTIz', 'A', '2019-12-13', '2019-12-17'),
(7, 'Pepitos', 'Perez Aguilar', '234234242', 'estebanchirinos4@gmail.com', '2019-12-18', 'Restrepo', 'BOGOTÃ, D.C.', 'Medico', 'jabreu76', 'MzIx', 'A', '2019-12-16', '2019-12-18'),
(8, 'usuario', 'pepe', 'montaner', 'estebanchirinos4@gmail.com', '2019-12-09', 'blablaaaa', 'Medellin', 'Usu', 'mpepe76', 'MzIx', 'A', '2019-12-19', '0000-00-00'),
(9, 'Juan Gabriel', 'Garcia', '12354342', 'Juan@asas.com', '2020-01-08', 'Cundinamarca', 'Bogota', 'Usu', 'jgarcia', 'MzIx', 'A', '2020-01-14', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
