create table UsuariosNegocios(idUsuarioNegocio int auto_increment primary key,
	nombre varchar(80) not null unique,
	password varchar(200) not null,
	fAlta TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
	tipo int NOT NULL DEFAULT 1,
	estatus varchar(20) DEFAULT 'ACTIVO' not null
);

create table Negocios(
	idNegocio int auto_increment primary key,
	nombre varchar(100),
	telefono varchar(10),
	latitud varchar(50),
	longitud varchar(50),
	usrAlta int not null,
	fAlta TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
	usrModificacion int,
	fModificacion date,
	estatus varchar(20) DEFAULT 'ACTIVO' not null,
	idUsuarioNegocio int,
	idSubCategoria int,
	idTipoSuscripcion int 
);

create table DireccionesNegocios(idDireccionNegocio int auto_increment primary key,
	idNegocio int not null,
	calle varchar(80),
	colonia varchar(80),
	municipio varchar(80),
	IdEstado varchar(80),
	cp varchar(6),
	usrAlta int not null,
	fAlta TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
	usrModificacion int,
	fModificacion date,
	estatus varchar(20) DEFAULT 'ACTIVO' not null	
);


create table RedesSocialesNegocios(
	idRedSocialNegocio int auto_increment primary key,
	idNegocio int not null,
	facebook varchar(100),
	twitter varchar(100),
	instagram varchar(100),
	website varchar(100),
	usrAlta int not null,
	fAlta TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
	usrModificacion int,
	fModificacion date,
	estatus varchar(20) DEFAULT 'ACTIVO' not null
);


create table extrasNegocios(
	idExtraNegocio int auto_increment primary key,
	idNegocio int not null,
	aDomicilio varchar(2),
	horarioApertura time,
	horarioCierre time,
	diaCierre varchar(20),
	usrAlta int not null,
	fAlta TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
	usrModificacion int,
	fModificacion date,
	estatus varchar(20) DEFAULT 'ACTIVO' not null
);


create table TurnosPromocionesNegocios(
	idTurnoPromocionNegocio int auto_increment primary key,
	idNegocio int not null,
	enero int,
	febrero int,
	marzo int,
	abril int,
	mayo int,
	junio int,
	julio int,
	agosto int,
	septiembre int,
	octubre int,
	noviembre int,
	diciembre int,
	year int,
	usrAlta int not null,
	fAlta TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
	usrModificacion int,
	fModificacion date,
	estatus varchar(20) DEFAULT 'ACTIVO' not null
);

create table ImagenesNegocios(
	idImagenNegocio int auto_increment primary key,
	idNegocio int not null, 
	logo varchar(100),
	nombre varchar(100),
	usrAlta int not null,
	fAlta TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
	usrModificacion int,
	fModificacion date,
	estatus varchar(20) DEFAULT 'ACTIVO' not null
);


create table PromocionesNegocios(
	idPromocionNegocio int auto_increment primary key,
	idNegocio int not null,
	texto varchar(50) not null,
	descripcion text,
	imagen varchar(50),
	usrAlta int not null,
	fAlta TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
	estatus varchar(20) DEFAULT 'ACTIVO' not null
);


insert into UsuariosNegocios(nombre, password, tipo)values('01admin01','.admin01.',0);