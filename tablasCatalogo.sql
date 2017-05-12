
create table Estados(
	idEstado int auto_increment primary key,
	nombre varchar(30),
	usrAlta int not null,
	fAlta TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
	usrModificacion int,
	FModificacion date,
	estatus varchar(20) DEFAULT 'ACTIVO' not null
);

create table Categorias(
	idCategoria int auto_increment primary key,
	nombre varchar(50),
	usrAlta int not null,
	fAlta TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
	usrModificacion int,
	fModificacion date,
	estatus varchar(20) DEFAULT 'ACTIVO' not null
);

create table subCategorias(
	idSubCategoria int auto_increment primary key,
	idCategoria int not null,
	nombre varchar(80) not null,
	usrAlta int not null,
	fAlta TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
	usrModificacion int,
	fModificacion date,
	estatus varchar(20) DEFAULT 'ACTIVO' not null
);


create table tipoSuscripcion(
	idTipoSuscripcion int auto_increment primary key,
	nombre varchar(30) not null,
	promociones int not null,
	usrAlta int not null,
	fAlta TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
	usrModificacion int,
	fModificacion date,
	estatus varchar(20) DEFAULT 'ACTIVO' not null

);
