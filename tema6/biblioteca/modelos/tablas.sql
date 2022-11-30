CREATE TABLE `libros` (
  `idLibro` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `subtitulo` varchar(45) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `autor` varchar(45) DEFAULT NULL,
  `editorial` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `disponibles` int(11) DEFAULT NULL,
  PRIMARY KEY (`idLibro`),
  UNIQUE KEY `isbn_UNIQUE` (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `prestamos` (
  `idPrestamo` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `fk_libro` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  PRIMARY KEY (`idPrestamo`),
  UNIQUE KEY `fk_libro_UNIQUE` (`fk_libro`),
  UNIQUE KEY `fk_usuario_UNIQUE` (`fk_usuario`),
  CONSTRAINT `fk_libro` FOREIGN KEY (`fk_libro`) REFERENCES `libros` (`idLibro`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_usuario` FOREIGN KEY (`fk_usuario`) REFERENCES `Usuarios` (`idUsuarios`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `Usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `poblacion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idUsuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
