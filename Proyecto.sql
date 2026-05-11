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
  `id_usuario` int primary key,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `fecha_registro` datetime CURRENT_TIMESTAMP,
  `pass` varchar(255) NOT NULL,
  `telefono` int,
  `apellido` varchar(50)
)

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

-- Datos automaticos del registro

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `fecha_registro`, `pass`, `telefono`, `apellido`) VALUES
(1, 'admin_ysf', 'youkaa', '2026-04-27 14:10:40', '1234', NULL, NULL),
(2, 'admin_ysf2', 'ykk', '2026-04-27 14:13:47', '1234', NULL, NULL),
(3, 'admin_ysf3', 'ysfff', '2026-04-27 14:24:02', '1234', NULL, NULL),
(4, 'admin_ysf4', 'youkaa@alu.edu', '2026-04-27 15:08:41', '1234', 624179196, 'kaab'),
(5, 'admin_ysf', 'youkaa@alu.edu.gva.es', '2026-04-28 09:49:37', '$2y$10$c9IsZSxmKnhwodKjt7hFEe6EBm0z7wyvCGv1YrxBEJfXZlKIEZf2a', 624179196, 'kaab'),
(6, 'youssef', 'youkaa1@alu.edu', '2026-04-28 09:56:46', '$2y$10$L9dRn5h75OJEcFMt5MJG9eULlp75G/oRbCEtiJtU0nB09XC.MXnIm', 66666666, 'kaa'),
(7, 'youkaa2', 'youkaa2@alu.edu', '2026-04-28 10:06:56', '$2y$10$ZrokKTiu5YtpaWOnMCgFs..4bcmApzmuT1aMixWg56fmdciDopda6', 62417, 'ka'),
(8, 'admin_ysf5', 'youka5@alu.edu', '2026-04-28 10:28:52', '$2y$10$SwWDtdPPdkHzoNqWim64xOP7X/Zi/XOMr/Oxu1hmHyFVQp.9lqub6', 6214, 'ka'),
(9, 'admin_ysf5', 'youka7@alu.edu', '2026-04-28 10:30:22', '$2y$10$MV.2ZFyjVkUPGaUsvWH./.rtEyTp5OI2Y4fajjRgF3Mqvm547a3pu', 6214, 'ka'),
(10, 'admin_ysf5', 'youka71@alu.edu', '2026-04-28 10:31:29', '$2y$10$4kH05outwdmu3NipmN4ahe16gXZ4Mk0.RN6DpUV48GGvEt9OJxkYG', 6214, 'ka'),
(11, 'ibra', 'ibra_jovic@gmail.com', '2026-04-28 10:36:27', '$2y$10$zuO/XSd7s7SvOw.mvUSfbObfTAkh60BBpoAjdRkcO28oFnL7zpvYK', 66666666, 'jovic'),
(12, 'javi', 'javmon@alu.edu', '2026-04-28 10:59:22', '$2y$10$PlcD2gYJ5V4iDxMYwraV5OvLKRss3MYK/DXr3YAjEqb9.4a3UnUfW', 666666, 'mon'),
(13, 'joe', 'joegov@gmail.com', '2026-04-28 12:04:29', '$2y$10$/YDUa/WaMGJ.k4Bt2/lwp.YlE5ySO0v..YVECtZQL0xeBsN85zJZy', 625785123, 'gov'),
(14, 'guill', 'guillxxx@alu.edu', '2026-04-30 10:51:56', '$2y$10$JmaQDxRf60HnM/H/qsWa6ussKft61jLWFG1N1.UaB79CNGqe6fCdW', 666666666, 'xxx'),
(15, 'tsss', 'youkaatsss@alu.edu', '2026-05-11 11:25:12', '$2y$10$l9WC08JcIbCugHAqxOHv2e/hSBdni3dEiyQUgOA4fSVao49Dk4ZDO', 6666666, 'ysss'),
(16, 'admin_ysf4', 'youkaa4@alu.edu', '2026-05-11 11:28:01', '$2y$10$b9dZaAzadasES7pIdk2/0OX8iJm5mckt0POE7kDrGBvLIaGiyC9me', 66666666, 'kaab');



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










