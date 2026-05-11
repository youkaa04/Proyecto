-- Crear base de datos 
CREATE DATABASE joy; 
use joy; 

-- Tabla de desarrolladores 
CREATE TABLE desarrolladores ( 
	id_desarrollador INT AUTO_INCREMENT PRIMARY KEY, 
    nombre VARCHAR(100) NOT NULL 
); 

-- Tabla de géneros 
CREATE TABLE generos ( 
	id_genero INT AUTO_INCREMENT PRIMARY KEY, 
    nombre VARCHAR(50) NOT NULL 
); 

-- Tabla de plataformas 
CREATE TABLE plataformas ( 
	id_plataforma INT AUTO_INCREMENT PRIMARY KEY, 
    nombre VARCHAR(50) NOT NULL 
); 

-- Tabla principal de juegos 
CREATE TABLE juegos ( 
	id_juego INT AUTO_INCREMENT PRIMARY KEY, 
    nombre VARCHAR(150) NOT NULL, 
    sinopsis TEXT, 
    fecha_lanzamiento DATE, 
    id_desarrollador INT NOT NULL, 
    nota_media DECIMAL(3,2) DEFAULT 0, 
    
    FOREIGN KEY (id_desarrollador) 
    REFERENCES desarrolladores(id_desarrollador) 
    ON DELETE CASCADE 
    ON UPDATE CASCADE 

); 

-- Relación muchos a muchos: juegos - plataformas 
CREATE TABLE juegos_plataformas ( 
	id_juego INT, 
    id_plataforma INT, PRIMARY KEY (id_juego, id_plataforma), 
    
    FOREIGN KEY (id_juego) 
    REFERENCES juegos(id_juego) 
    ON DELETE CASCADE, 
    
    FOREIGN KEY (id_plataforma) 
    REFERENCES plataformas(id_plataforma) 
    ON DELETE CASCADE 
    
); 

-- Relación muchos a muchos: juegos - géneros 
CREATE TABLE juegos_generos ( 
	id_juego INT, 
    id_genero INT, 
    PRIMARY KEY (id_juego, id_genero), 
    
    FOREIGN KEY (id_juego) 
    REFERENCES juegos(id_juego) 
    ON DELETE CASCADE, 
    
    FOREIGN KEY (id_genero) 
    REFERENCES generos(id_genero) 
    ON DELETE CASCADE 
); 

-- Tabla de usuarios 
CREATE TABLE `usuarios` (
  `id_usuario` int AUTO_INCREMENT primary key,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `fecha_registro` datetime default CURRENT_TIMESTAMP,
  `pass` varchar(255) NOT NULL,
  `telefono` int,
  `apellido` varchar(50)
);

-- Tabla de votaciones 
CREATE TABLE votaciones (	 
	id_votacion INT AUTO_INCREMENT PRIMARY KEY, 
    id_usuario INT, 
    id_juego INT, 
    puntuacion TINYINT, -- mejor que CHECK para MySQL 
    comentario TEXT, 
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP, 
    
    FOREIGN KEY (id_usuario) 
    REFERENCES usuarios(id_usuario) 
    ON DELETE CASCADE, 
    
    FOREIGN KEY (id_juego) 
    REFERENCES juegos(id_juego) 
    ON DELETE CASCADE 
); 

-- TRIGGERS 

DELIMITER $$ 

-- INSERT 
CREATE TRIGGER actualizar_nota_media_insert 
AFTER INSERT ON votaciones FOR EACH ROW 
BEGIN 
	UPDATE juegos 
    SET nota_media = ( 
		SELECT ROUND(AVG(puntuacion), 2) 
        FROM votaciones 
        WHERE id_juego = NEW.id_juego 
        ) 
        WHERE id_juego = NEW.id_juego; 
	END$$ 
    
-- UPDATE 
CREATE TRIGGER actualizar_nota_media_update 
AFTER UPDATE ON votaciones 
FOR EACH ROW 
BEGIN 
	UPDATE juegos 
    SET nota_media = ( 
		SELECT ROUND(AVG(puntuacion), 2) 
        FROM votaciones 
        WHERE id_juego = NEW.id_juego 
		)
        WHERE id_juego = NEW.id_juego; 
	END$$ 
    
-- DELETE 
CREATE TRIGGER actualizar_nota_media_delete 
AFTER DELETE ON votaciones 
FOR EACH ROW 

BEGIN 
UPDATE juegos 
SET nota_media = ( 
	SELECT ROUND(AVG(puntuacion), 2) 
    FROM votaciones 
    WHERE id_juego = OLD.id_juego 
) 
WHERE id_juego = OLD.id_juego; 
END$$ 

DELIMITER ;










