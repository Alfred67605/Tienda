-- Eliminar la base de datos si ya existe
DROP DATABASE IF EXISTS tienda;

-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS tienda;
USE tienda;

-- Crear tabla categoria
CREATE TABLE IF NOT EXISTS categoria (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT DEFAULT NULL
);

-- Insertar datos solo si la tabla está vacía
INSERT INTO categoria (nombre, descripcion)
SELECT * FROM (SELECT 'Electrónica', 'Dispositivos y accesorios tecnológicos') AS tmp
WHERE NOT EXISTS (SELECT 1 FROM categoria LIMIT 1)
UNION ALL SELECT 'Computación', 'Equipos, accesorios y periféricos informáticos'
UNION ALL SELECT 'Celulares', 'Smartphones, tablets y accesorios'
UNION ALL SELECT 'Ropa y Moda', 'Vestimenta, calzado y complementos'
UNION ALL SELECT 'Hogar y Cocina', 'Electrodomésticos y utensilios para el hogar'
UNION ALL SELECT 'Juguetes y Juegos', 'Artículos para niños y entretenimiento'
UNION ALL SELECT 'Deportes y Fitness', 'Equipos y ropa deportiva'
UNION ALL SELECT 'Automóviles y Motos', 'Accesorios y repuestos para vehículos'
UNION ALL SELECT 'Salud y Belleza', 'Productos de cuidado personal y bienestar'
UNION ALL SELECT 'Herramientas y Construcción', 'Equipos de bricolaje y construcción'
UNION ALL SELECT 'Mascotas', 'Alimentos y accesorios para animales'
UNION ALL SELECT 'Libros y Papelería', 'Material educativo y oficina'
UNION ALL SELECT 'Música e Instrumentos', 'Instrumentos musicales y accesorios'
UNION ALL SELECT 'Arte y Decoración', 'Objetos decorativos y arte'
UNION ALL SELECT 'Accesorios y Joyería', 'Complementos de moda y joyería'
UNION ALL SELECT 'Celulares y Gadgets', 'Teléfonos y dispositivos inteligentes'
UNION ALL SELECT 'Computadoras y Accesorios', 'Laptops, teclados, monitores, etc.'
UNION ALL SELECT 'Alimentos y Bebidas', 'Productos comestibles y bebidas'
UNION ALL SELECT 'Jardín y Exteriores', 'Mobiliario y herramientas de jardinería'
UNION ALL SELECT 'Seguridad y Vigilancia', 'Cámaras y equipos de seguridad'
UNION ALL SELECT 'Videojuegos', 'Consolas, juegos y accesorios gamer'
UNION ALL SELECT 'Viajes y Maletas', 'Equipaje y accesorios de viaje'
UNION ALL SELECT 'Electrodomésticos', 'Productos para el hogar como neveras y lavadoras'
UNION ALL SELECT 'Fotografía y Video', 'Cámaras y accesorios fotográficos'
UNION ALL SELECT 'Muebles y Decoración', 'Muebles y artículos de interior'
UNION ALL SELECT 'Cuidado del bebé', 'Ropa, juguetes y accesorios para bebés'
UNION ALL SELECT 'Relojes y Accesorios', 'Relojes de pulsera y smartwatches'
UNION ALL SELECT 'Moda deportiva', 'Ropa y accesorios para entrenamiento'
UNION ALL SELECT 'Productos ecológicos', 'Artículos sostenibles y reciclables'
UNION ALL SELECT 'Coleccionables', 'Objetos de colección y edición limitada';

-- Crear tabla cliente
CREATE TABLE IF NOT EXISTS cliente (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    telefono VARCHAR(20) DEFAULT NULL,
    direccion TEXT DEFAULT NULL
);
ALTER TABLE cliente DROP INDEX correo;

-- Crear tabla producto
CREATE TABLE IF NOT EXISTS producto (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT DEFAULT NULL,
    precio DECIMAL(10,2) NOT NULL CHECK (precio > 0),
    categoria_id INT NOT NULL,
    imagen VARCHAR(255) DEFAULT NULL,
    FOREIGN KEY (categoria_id) REFERENCES categoria(id) ON DELETE CASCADE
);

-- Crear tabla compra
CREATE TABLE IF NOT EXISTS compra (
    id INT PRIMARY KEY AUTO_INCREMENT,
    cliente_id INT NOT NULL,
    producto_id INT NOT NULL,
    cantidad INT NOT NULL CHECK (cantidad > 0),
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (cliente_id) REFERENCES cliente(id) ON DELETE CASCADE,
    FOREIGN KEY (producto_id) REFERENCES producto(id) ON DELETE CASCADE
);
