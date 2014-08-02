
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
  `descricao` longtext NOT NULL,
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

insert into categoria (categoria,descricao) values ('Especificação','Destina-se a estabelecer quais funções são requeridas pelo sistema e as restrições sobre a operação e o desenvolvimento do sistema. Esta fase também é chamada de engenharia de requisitos e é um estágio particularmente importante do processo de software, uma vez que erros nesse estágio inevitavelmente produzem problemas posteriores no projeto e na implementação do sistema.');
insert into categoria (categoria,descricao) values ('Projeto','Em engenharia de software, o Projeto de Software é a fase de desenvolvimento, na qual são feitos modelos com todas as entidades que serão construídas posteriormente a partir dos requisitos do sistema. O projeto de software foca em 4 áreas, como: dados, arquitetura, interface e componentes. Para garantir que um projeto está sendo feito com qualidade é necessário avaliar continuamente pontos referentes a corretude, completude, clareza e consistência com os requisitos do sistema.');
insert into categoria (categoria,descricao) values ('Implementação','Implementação é a fase do ciclo de vida de um software (programa computacional, documentação e dados), no contexto de um sistema de informação, que corresponde à elaboração e preparação dos módulos necessários à sua execução.');
insert into categoria (categoria,descricao) values ('Testes','O teste do software é a investigação do software a fim de fornecer informações sobre sua qualidade em relação ao contexto em que ele deve operar. Isso inclui o processo de utilizar o produto para encontrar seus defeitos. O teste é um processo realizado pelo testador de software, que permeia outros processos da engenharia de software, e que envolve ações que vão do levantamento de requisitos até a execução do teste propriamente dito.');
insert into categoria (categoria,descricao) values ('Modelo','É uma representação abstrata do processo de desenvolvimento que define como as etapas relativas ao desenvolvimento de software serão conduzidas e interrelacionadas para atingir o objetivo do desenvolvimento que é a obtenção de um produto de software de alta qualidade a um custo relativamente baixo.');
insert into categoria (categoria,descricao) values ('Estruturado','Descrição Estruturado');
insert into categoria (categoria,descricao) values ('Orientado a Objeto','Descrição Orientado a Objeto');
insert into categoria (categoria,descricao) values ('Outras Metodologias','Descrição Outras Metodologias');
insert into categoria (categoria,descricao) values ('UML', 'A Unified Modeling Language (UML) é uma linguagem de modelagem não proprietária de terceira geração. A UML não é uma metodologia de desenvolvimento, o que significa que ela não diz para você o que fazer primeiro e em seguida ou como projetar seu sistema, mas ela lhe auxilia a visualizar seu desenho e a comunicação entre os objetos.');
insert into categoria (categoria,descricao) values ('Programação Estruturada','Programação estruturada é uma forma de programação de computadores que preconiza que todos os programas possíveis podem ser reduzidos a apenas três estruturas - sequência, decisão e iteração (esta última também é chamada de repetição). Tendo, na prática, sido transformada na programação modular, a programação estruturada orienta os programadores para a criação de estruturas simples nos programas, usando as sub-rotinas e as funções.');
insert into categoria (categoria,descricao) values ('Programação Funcional','É um paradigma de programação que trata a computação como uma avaliação de funções matemáticas e que evita estados ou dados mutáveis. Ela enfatiza a aplicação de funções, em contraste da programação imperativa, que enfatiza mudanças no estado do programa.');
insert into categoria (categoria,descricao) values ('Programação Orientada a Objetos','Na programação orientada a objetos, Objetos são instâncias de classes, que determinam qual informação um objeto contém e como ele pode manipulá-la. Um dos grandes diferenciais da programação orientada a objetos em relação a outros paradigmas de programação que também permitem a definição de estruturas e operações sobre essas estruturas está no conceito de herança, mecanismo através do qual definições existentes podem ser facilmente estendidas.');
insert into categoria (categoria,descricao) values ('Componentes de Software','Componentes de Software é o termo utilizado para descrever o elemento de software que encapsula uma série de funcionalidades. Um componente é uma unidade independente, que pode ser utilizado com outros componentes para formar um sistema mais complexo.');
