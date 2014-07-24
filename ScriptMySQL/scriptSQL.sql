

create table usuario(
	idUsuario int(10) unsigned not null auto_increment,
	nome varchar(10) not null,
	sobrenome varchar(10) not null,
	email varchar(40) not null,
	senha varchar(20) not null,
	primary key (idUsuario)
)ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(500) DEFAULT NULL,
  `descricao` varchar(500) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `midia` (
  `id_midia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) NOT NULL,
  `video_name` varchar(500) NOT NULL,
  `xml_name` varchar(500) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_midia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

ALTER TABLE midia
ADD CONSTRAINT fk_categoria
FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
ON UPDATE CASCADE
ON DELETE CASCADE;

insert into categoria (categoria,descricao) values ('Especificação','Descrição Especificação');
insert into categoria (categoria,descricao) values ('Projeto','Descrição Projeto');
insert into categoria (categoria,descricao) values ('Implementação','Descrição Implementação');
insert into categoria (categoria,descricao) values (‘Testes’,’Descrição Testes);
insert into categoria (categoria,descricao) values ('Modelo','Descrição Modelo');
insert into categoria (categoria,descricao) values ('Estruturado','Descrição Estruturado');
insert into categoria (categoria,descricao) values ('Orientado a Objeto','Descrição Orientado a Objeto');
insert into categoria (categoria,descricao) values ('Outras Metodologias','Descrição Outras Metodologias');
insert into categoria (categoria,descricao) values ('Programação Estruturada','Descrição Programação Estruturada');
insert into categoria (categoria,descricao) values ('Programação Funcional','Descrição Programação Funcional');
insert into categoria (categoria,descricao) values ('Programação Orientada a Objetos','Descrição Programação Orientada a Objetos');
insert into categoria (categoria,descricao) values ('Componentes de Software','Descrição Componentes de Software');
