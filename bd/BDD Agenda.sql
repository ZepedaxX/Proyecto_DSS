CREATE DATABASE AgendaElectronica;

USE AgendaElectronica;


CREATE TABLE Roles
(
idRol int (3) primary key auto_increment NOT NULL,
Rol varchar(20) NOT NULL
);

INSERT INTO `agendaelectronica`.`Roles` (`Rol`) VALUES ('SuperAdministrador');
INSERT INTO `agendaelectronica`.`Roles` (`Rol`) VALUES ('Administrador');
INSERT INTO `agendaelectronica`.`Roles` (`Rol`) VALUES ('Usuarios');

CREATE TABLE Usuario 
(
idUsuario int(11) primary key auto_increment NOT NULL, 
UserName varchar(20) NOT NULL, 
pasadmin varchar(8) NOT NULL,
pasword  varchar(8) NOT NULL,
Correo varchar(30) NOT NULL,
idRol int (3)  NOT NULL,
CONSTRAINT fk_Roles_Usuario foreign key(idRol) references Roles (idRol)
);

INSERT INTO `agendaelectronica`.`usuario` (`UserName`, `pasadmin`, `pasword`, `Correo`, `idRol`) VALUES ('Administrador', '123456', '', 'admin@admin', '1');
INSERT INTO `agendaelectronica`.`usuario` (`UserName`, `pasadmin`, `pasword`, `Correo`, `idRol`) VALUES ('Usuario1', '',  '12345', 'usu@usu.com', '2');

CREATE TABLE Categoria
(
idCategoria int primary key auto_increment NOT NULL,
NombreC  varchar(80) NOT NULL
);

INSERT INTO `agendaelectronica`.`categoria` (`NombreC`) VALUES ('Videojuegos');
INSERT INTO `agendaelectronica`.`categoria` (`NombreC`) VALUES ('Belleza');
INSERT INTO `agendaelectronica`.`categoria` (`NombreC`) VALUES ('conferencia');
INSERT INTO `agendaelectronica`.`categoria` (`NombreC`) VALUES ('comida');

CREATE TABLE Eventos
 (
idEvento int  auto_increment primary key NOT NULL,
NombreE varchar(100) NOT NULL,
Imagen longblob NOT NULL,
Descripcion varchar(300) NOT NULL,
lugar varchar(100) NOT NULL,
FechaInicio datetime NOT NULL,
FechaFinal datetime NOT NULL,
idCategoria int  NOT NULL,
idUsuario int(11)  NOT NULL,
CONSTRAINT fk_Eventos_Usuario foreign key(idUsuario) references Usuario (idUsuario),
CONSTRAINT fk_Evento_Categoria foreign key(idCategoria) references Categoria (idCategoria)
);
INSERT INTO `agendaelectronica`.`eventos` (`NombreE`, `Imagen`, `Descripcion`, `lugar`, `FechaInicio`, `FechaFinal`, `idCategoria`, `idUsuario`) 
VALUES ('Pupusas','img/th5-640x426-25790.jpg' , 'Pupusas al 2x1', 'Universidad Don Bosco', '2016-12-19 00:00:00', '2016-12-20 00:00:00', '4', '1');

