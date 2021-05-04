CREATE TABLE producto(
    id_producto INT (10) PRIMARY KEY AUTO_INCREMENT,
    marca VARCHAR (20) NOT NULL,
    modelo VARCHAR (20) NOT NULL,
    categoria VARCHAR (20) NOT NULL,
    precio FLOAT (6,2) NOT NULL
);


INSERT INTO producto(marca,modelo,categoria,precio) VALUES
('Logitech','H390','Auriculares',49.00),
('Logitech','G332','Auriculares',50.00),
('Logitech','A50','Auriculares',70.00),
('Noga','Stormer Warfare','Auriculares',60.00),
('Noga','Stormer Hydra','Auriculares',60.00),
('Noga','Stormer Brash','Auriculares',60.00),
('Msi','DS501','Auriculares',31.00),
('Msi','DS502','Auriculares',31.00),
('Msi','Immerse GH70','Auriculares',31.00),

('Logitech','M280','Mouses',28.00),
('Logitech','M171','Mouses',28.00),
('Logitech','M190','Mouses',33.00),
('Noga','Gamer Retroiluminado','Mouses',30.00),
('Noga','Gamer 12000 DPI','Mouses',35.00),
('Noga','Gamer Stormer Series','Mouses',35.00),
('Msi','Clutch GM41','Mouses',20.00),
('Msi','Interceptor DS300','Mouses',23.00),
('Msi','Interceptor DS200','Mouses',20.00),

('Logitech','K400 Plus','Teclados',32.00),
('Logitech','K230','Teclados',32.00),
('Logitech','MX Keys','Teclados',32.00),
('Noga','Hybrid','Teclados',32.00),
('Noga','NKB-560','Teclados',32.00),
('Noga','Gamer Stormer Series','Teclados',32.00),
('Msi','Vigor GK70','Teclados',20.00),
('Msi','Vigor GK20','Teclados',23.00),
('Msi','Interceptor DS4100','Teclados',20.00);


-- Consulta
SELECT * FROM producto WHERE marca='Logitech';