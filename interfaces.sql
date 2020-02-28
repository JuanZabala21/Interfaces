-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-02-2020 a las 02:05:52
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `interfaces`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,0) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `Click` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `Nombre`, `Precio`, `Descripcion`, `Imagen`, `Click`) VALUES
(1, 'Televisor Samsung', '500', 'Samsung Full HD Smart TV está diseñada para ofrecerte lo que quieres según tu estilo de vida, con aplicaciones que hacen tu experiencia más divertida. Una App de comida para los chefs, otra para los aficionados al deporte, una más de fitness para mantenerte en forma y para los niños una de educación artística. Con la amplia gama de títulos y la opción de vincular tu TV con tu dispositivo móvil como control, esto es sólo el principio.', 'https://http2.mlstatic.com/televisor-led-samsung-43-pulgadas-fhd-smart-tv-D_NQ_NP_885362-MLV31960893022_082019-Q.jpg', 0),
(2, 'Microondas Oster', '100', 'Capacidad de 36 litros.\r\nPotencia total de cocción de 1000 Watts.\r\nPanel digital de control táctil, que te permite monitorear el tiempo de cocción, programas y temporizador.\r\nCuenta con ajustes de potencia para cocción especializada.\r\nFunción de descongelación automática incorporada, te muestra intervalos para descongelar diferentes alimentos.\r\nPlato giratorio en vidrio resistente al calor.', 'https://http2.mlstatic.com/microondas-oster-ogsr903-plata-25-litros-09-cu-tienda-f-D_NQ_NP_911908-MLV31894815061_082019-Q.jpg', 0),
(3, 'Secadora Whirpool', '350', 'Esta máquina es una lavadora secadora de tipo carga frontal Whirlpool FWDD117168SBS. Es el aparato ideal para una familia de tres o cuatro miembros, ya que sería la mas adecuada debido a que cuenta con una gran capacidad de hasta 11kg de lavado y 7 de secado. En cuanto a sus dimensiones, ésta tiene una profundidad es de 60.5 cm, ya que es un modelo estándar.\r\n\r\nLa ropa quedará perfectamente seca y casi sin arrugas después del centrifugado, ya que el número de revoluciones se eleva hasta las 1.600RPM. La marca anuncia una clase energética de tipo A, lo que significa que al final de mes, tus facturas no se verán engordadas por utilizar un aparato antiguo.', 'https://whirlpoolcol.vteximg.com.br/arquivos/ids/157570-500-500/7MWGD90HEFC.jpg?v=636463729544070000', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
