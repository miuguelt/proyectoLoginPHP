-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2021 a las 05:24:04
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectologin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` mediumint(9) NOT NULL,
  `nombreusuario` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `correousuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `claveusuario` varbinary(64) NOT NULL,
  `fecharegistrousuario` date NOT NULL,
  `fechaultimaclave` date NOT NULL,
  `celularusuario` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `idrolusuario` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombreusuario`, `correousuario`, `claveusuario`, `fecharegistrousuario`, `fechaultimaclave`, `celularusuario`, `idrolusuario`) VALUES
(1, 'juan', 'ju@s.co', 0x62323231643964626230383361376633333432386437633261336333313938616539323536313464373032313065323837313663636161376364346464623739, '2016-11-01', '2016-11-03', '3213214569', 1),
(2, 'pedro paramo', 'pedro@pa.co', 0x62323231643964626230383361376633333432386437633261336333313938616539323536313464373032313065323837313663636161376364346464623739, '2017-03-22', '2017-01-31', '3335558888', 1),
(3, 'carlos', 'carlos@c.co', 0x38643936396565663665636164336332396133613632393238306536383663663063336635643561383661666633636131323032306339323361646336633932, '2017-03-14', '0000-00-00', '3214568274', 1),
(8, 'jhon', 'jsardila90@misena.edu.co', 0x31333064363739316530646533363837333531313737356463636163363461643765663534623036636264373035346237666564613330336536343564626237, '2017-03-15', '0000-00-00', '3133402731', 3),
(9, 'Miguel Tejedor', 'mt@g.com', 0x37633461386430396361333736326166363165353935323039343364633236343934663839343162, '2021-06-22', '2021-06-22', '31254', 1),
(10, 'mt', 'm7@f.com', 0x64353165386635303539376233633433623232303063643435303439383438303162613234313635363235633139393238376465643961346563613864643034, '2021-06-22', '2021-06-22', '325456', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idusuario` (`idrolusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
