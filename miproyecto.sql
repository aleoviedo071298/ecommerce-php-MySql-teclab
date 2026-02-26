-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2026 a las 03:21:30
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(6, 'RAM'),
(7, 'FUENTES DE ALIMENTACION'),
(8, 'SSD'),
(9, 'PLACAS DE VIDEO'),
(10, 'CPU'),
(11, 'GABINETES'),
(12, 'MOTHERBOARDS'),
(13, 'DISCOS RIGIDOS (HDD)'),
(14, 'COOLERS / REFRIGERACION'),
(15, 'MONITORES'),
(16, 'TECLADOS'),
(17, 'MOUSE'),
(18, 'AURICULARES'),
(19, 'PARLANTES'),
(20, 'IMPRESORAS'),
(21, 'NOTEBOOKS'),
(22, 'PC ARMADAS'),
(23, 'CABLES Y ADAPTADORES'),
(24, 'REDES (ROUTERS / WIFI)'),
(25, 'UPS / ESTABILIZADORES'),
(26, 'ALMACENAMIENTO EXTERNO'),
(27, 'PENDRIVES / SD'),
(28, 'MICROFONOS / STREAMING'),
(29, 'WEBCAMS'),
(30, 'SILLAS GAMER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `precio` float NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `imagen`, `nombre`, `descripcion`, `precio`, `categoria_id`) VALUES
(3, 'img699f2a4ee9836.webp', 'Intel Core I5', 'El Intel Core i5 es un procesador de gama media versátil, ideal para el usuario promedio, juegos exigentes (1080p/1440p) y productividad (ofimática, edición básica). Con entre 6 y 14 núcleos (generaciones modernas), ofrece un excelente equilibrio entre rendimiento y costo. Son procesadores fiables y eficientes, capaces de manejar múltiples tareas simultáneamente gracias a la tecnología Hyper-Threa', 186000, 10),
(4, 'img699f2c573f11c.png', 'RTX 3050', 'La última versión de la icónica serie GAMING de MSI ofrece una vez más el rendimiento, la eficiencia con bajo nivel de ruido y la estética que los jugadores incondicionales reconocen y confían. Ahora usted también puede disfrutar de todos sus juegos favoritos con una potente tarjeta gráfica que se mantiene fría y silenciosa. Justo como te gusta.', 170000, 9),
(5, 'img699f2d4e733e9.webp', 'Fuente Gamer Sentey Mbp850-gm 850w 80 Plus Bronze', 'Fuente Sentey MBP850-GM 850W 80 Plus Bronze Full Modular', 155000, 7),
(6, 'img699f911c5c09c.jpg', 'Mouse Gamer Razer Deathadder Essential Black', 'El mouse gamer Razer DeathAdder Essential RZ01-03850100-R3M1 es un periférico diseñado específicamente para juegos, fabricado por la reconocida marca Razer. Este mouse cuenta con un sensor óptico de 6,400 DPI, lo que proporciona una precisión y sensibilidad excepcionales para movimientos rápidos y precisos durante las sesiones de juego.\r\nEl diseño ergonómico del Razer DeathAdder Essential está pen', 32000, 17),
(7, 'img699f91e01e4f6.png', 'Auricular Trust Carus P/ Xbox Gxt323x', 'El Auricular Trust Carus para Xbox GXT323X 24324 es un producto diseñado específicamente para su uso con la consola Xbox. Es un auricular con micrófono que te permitirá disfrutar de una experiencia de audio inmersiva mientras juegas en tu Xbox.\r\nEste auricular cuenta con un diseño cómodo y ajustable, ideal para largas sesiones de juego. Además, su micrófono flexible te permitirá comunicarte con tu', 46859, 18);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
