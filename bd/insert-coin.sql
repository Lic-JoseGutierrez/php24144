-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2024 a las 23:13:11
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
-- Base de datos: `insert-coin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `pais` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nombre`, `pais`) VALUES
(1, 'Infinity Ward', 'Estados Unidos'),
(2, 'Konami', 'Japon'),
(3, 'Guerrilla Games', 'Paises Bajos'),
(4, 'Psyonix', 'Estados Unidos'),
(5, 'NetherRealm Studios', 'Estados Unidos'),
(6, 'Arc System Works', 'Japon'),
(7, 'Mediatonic', 'Reino Unido'),
(8, 'Naughty Dog', 'Estados Unidos'),
(9, 'Santa Monica Studio', 'Estados Unidos'),
(10, 'Avalanche Software', 'Suecia'),
(11, 'Ubisoft Montreal', 'Francia'),
(12, 'Bluepoint Games', 'Estados Unidos'),
(13, 'Ghost Games', 'Suecia'),
(14, 'Rockstar North', 'Reino Unido'),
(15, 'Insomniac Games', 'Estados Unidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fechaNacimiento` varchar(10) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `dni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `password`, `fechaNacimiento`, `pais`, `telefono`, `dni`) VALUES
(1, 'Admin', 'Admin', 'admin@insert-coin.com', '123456', '2000-01-01', 'Argentina', 11111111, 1111111111),
(2, 'Adrian', 'Cairoli', 'adrian@insert-coin.com', '222222', '2000-01-01', 'Argentina', 22222222, 222222222),
(3, 'Juan Pablo', 'Piva', 'juan@insert-coin.com', '333333', '2000-01-01', 'Argentina', 33333333, 333333333),
(4, 'Walter', 'Ciancio', 'walter@insert-coin.com', '444444', '2000-01-01', 'Argentina', 44444444, 444444444),
(5, 'Nicolas', 'Pradines', 'nicolas@insert-coin.com', '555555', '2000-01-01', 'Argentina', 55555555, 55555555),
(6, 'Jose', 'Gutierrez', 'jose@insert-coin.com', '666666', '2000-01-01', 'Argentina', 66666666, 66666666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE `videojuegos` (
  `id_videojuego` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(254) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `consola` varchar(50) NOT NULL,
  `anio` int(4) NOT NULL,
  `estrellas` int(1) NOT NULL,
  `empresa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`id_videojuego`, `nombre`, `descripcion`, `genero`, `consola`, `anio`, `estrellas`, `empresa_id`) VALUES
(1, 'Call of Duty Modern Warfare', 'Posee un modo multijugador en línea con variados modos de juego y distintos mapas', 'Shooter', 'Playstation - Xbox - PC', 2019, 5, 2),
(2, 'eFootbal 2024', 'Es es un videojuego de simulación de fútbol desarrollado por Konami Digital Entertainment.', 'Deporte', 'PC - Playstation - Xbox', 2023, 5, 2),
(3, 'Horizon Zero Dawn', 'Es un videojuego de acción, aventura y de mundo abierto desarrollado por Guerrilla Games.', 'Aventura', 'Playstation - PC', 2017, 4, 3),
(4, 'Rocket League', 'Es un videojuego que combina el fútbol con los vehículos. Fue desarrollado por Psyonix. ', 'Deporte', 'Playstation - PC - Xbox - Nintendo Swich', 2015, 4, 4),
(5, 'Mortal Kombat 11', 'Es un videojuego de lucha desarrollado por NetherRealm Studios.', 'Pelea', 'Playstation - PC - Xbox - Nintendo Swich', 2019, 4, 5),
(6, 'Spider-man', 'Es un videojuego de acción y aventuras con un estilo jugable de mundo abierto.', 'Aventura', 'Playstation - PC', 2018, 5, 15),
(7, 'Dragon Ball Fighterz', 'Es un videojuego de lucha en 2D desarrollado por Arc System Works.', 'Pelea', 'Playstation - PC - Xbox - Nintendo Swich', 2018, 4, 6),
(8, 'Fall Guys', 'Es un videojuego de plataformas y battle royale desarrollado por Mediatonic.', 'Battle Royale', 'Playstation - PC - Xbox - Nintendo Swich', 2020, 3, 7),
(9, 'Uncharted 4', 'Es un videojuego de acción-aventura en tercera persona.', 'Accion', 'Playstation - PC', 2016, 3, 8),
(10, 'God of War', 'Tras cobrarse venganza de los dioses del Olimpo, Kratos ahora vive en el reino de las deidades y los monstruos nórdicos.', 'Accion', 'Playstation - PC', 2018, 4, 9),
(11, 'Hogwarts Legacy', 'Es un videojuego de rol de acción, está ambientado en el universo Wizarding World, basado en las novelas de Harry Potter.', 'Logica', 'Playstation - PC - Xbox - Nintendo Swich', 2023, 4, 10),
(12, 'Assassin Creed Valhalla', 'Durante la invasión de Gran Bretaña por parte de los vikingos, con el jugador controlando al guerrero vikingo Eivor.', 'Pelea', 'Playstation - PC - Xbox', 2020, 5, 11),
(13, 'Shadow of the Colossus', 'Trata de un joven,  que debe viajar a caballo a través de un vasto territorio y derrotar a 16 gigantes, para devolver la vida a una joven.', 'Aventura', 'Playstation', 2005, 3, 12),
(14, 'Need for speed payback', 'Es un videojuego de carreras de mundo abierto.', 'Carrera', 'Playstation - PC - Xbox', 2017, 3, 13),
(15, 'GTA 5', 'Michael Townley, Trevor Philips y Brad Snider eran ladrones de bancos que vivían en Ludendorff. Michael, planea un atraco falso.', 'Accion', 'Playstation - PC - Xbox', 2013, 4, 14);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD PRIMARY KEY (`id_videojuego`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `empresa_id_2` (`empresa_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  MODIFY `id_videojuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD CONSTRAINT `empresa` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id_empresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
