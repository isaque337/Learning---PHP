/*Questão 1*/
create database aulabd;
use aulabd;
create table resposta(
numquestao int primary key,
descrespostas varchar(500) not null
);
use aulabd;
create table professor(
codigo int primary key,
nome varchar(50) not null,
cpf varchar (11) not null,
email varchar(30),
titulacao varchar(30),
fone int(13),
sexo varchar(1) not null
);
use aulabd;
insert into professor values('1','luciano','12312312312','teste@gmail.com','portugues','123456789','m');
use aulabd;
insert into professor values('2','juliana','45645645645','teste45@gmail.com','fisica','987654321','f');

/*Questão 2*/
use aulabd;
insert into resposta values('2','Indica que a coluna ou combinacao de colunas forma a chave primaria ou unica.');

/*Questão 3*/
use aulabd;
insert into resposta values('3','Campo ou conjunto de campos que compõem a chave primária de uma outra tabela');

/*Questão 4*/
use aulabd;
insert into resposta values('4','create table curso (id int primary key,descricao varchar(50) not null);');

/*Questão 5*/
use aulabd;
insert into resposta values('5','create table alunos (id int primary key,nome varchar(30)not null,matricula varchar(20) not null,estado varchar(20) not null, sexo varchar(1) not null,fk_curso int, constraint fk_curso foreign key(curso.id));');

/*Questão 6*/
use aulabd;
insert into resposta values('6','alter table alunos add email varchar(60);');

/*Questão 7*/
use aulabd;
insert into resposta values('7','alter table professor drop column fone;');

/*Questão 8 */
insert into resposta values('8','update professor set sexo="m";');

/*Questão 9*/
insert into resposta values('9','delete from professor where sexo="f";');

/*Questão 10*/
insert into resposta values('10','select nome,matricula from alunos;');

/*Questão 11*/
insert into resposta values('11','select nome from professor where sexo="m";');

/*Questão 12*/
insert into resposta values('12','select alunos.nome,descricao.curso from alunos,curso where alunos.fk_curso=curso.id;');

/* Questão 13*/
create table cidade(
nome varchar(30) not null,
fk_estado int,
constraint id_estado foreign key(fk_estado);

create table estado(
id_estado int primary key not null,
sigla varchar(2) not null
);

/*Questão 14*/
insert into resposta values('14','select * from cidade where nome like ="A%";');

/*Questão 15*/
insert into resposta values('15','select cidade.nome from cidade,estado where cidade.fk_estado=estado.id_estado and estado.id_estado="4";');

/*Questão 16*/
insert into resposta values('16','select cidade.nome,estado.sigla from cidade,estado where cidade.fk_estado=estado.id_estado;');

/*Questão 17*/
insert into resposta values('17','select lower(nome) as cidade_nome from cidade;');

/*Questão 18*/
insert into resposta values('18','select upper(nome) as cidade_nome from cidade');

/*Questão 19*/
insert into resposta values('19','select estado.sigla,count(cidade.nome) from estado,cidade where cidade.fk_estado=estado.id_estado group by estado.sigla');
