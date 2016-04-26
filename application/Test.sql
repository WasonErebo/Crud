USE inacap;
DROP TABLE Usuario;
CREATE TABLE Usuario(
usuario_id INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
nombre VARCHAR(25),
apepat VARCHAR(25),
ciudad_id INT(10),
username VARCHAR(25),
password VARCHAR(260));
 
 
DROP TABLE Ciudad;
CREATE TABLE Ciudad(
ciudad_id INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
nombre VARCHAR(25));
 
INSERT INTO Usuario(nombre,apepat,ciudad_id,username,password) VALUES('Ricardo','Toledo',1,'rtoledo','$2y$10$b/GP963./ZwypgybZtc8.OVtSTgpf16ShsV9XpVmgXZum6cMw3WDq');
INSERT INTO Usuario(nombre,apepat,ciudad_id,username,password) VALUES('Juan','Torres',2,'jtorres','$2y$10$b/GP963./ZwypgybZtc8.OVtSTgpf16ShsV9XpVmgXZum6cMw3WDq');
INSERT INTO Usuario(nombre,apepat,ciudad_id,username,password) VALUES('Pedro','Contreras',3,'pcontreras','$2y$10$b/GP963./ZwypgybZtc8.OVtSTgpf16ShsV9XpVmgXZum6cMw3WDq');
 
INSERT INTO Ciudad(nombre) VALUES('Punta Arenas');
INSERT INTO Ciudad(nombre) VALUES('Santiago');
INSERT INTO Ciudad(nombre) VALUES('Arica');
