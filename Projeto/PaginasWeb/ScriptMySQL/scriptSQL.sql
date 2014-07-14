create tadabase ProjetoES;

create table usuario(
	idUsuario int(10) unsigned not null auto_increment,
	nome varchar(10) not null,
	sobrenome varchar(10) not null,
	email varchar(40) not null,
	senha varchar(20) not null,
	primary key (idUsuario)
);