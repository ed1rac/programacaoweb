-- create database aula-prog-web;
create database if not exists aulaprogweb;
use aulaprogweb;

-- definir o charset
alter database aulaprogweb character set utf8 collate utf8_general_ci;

-- create table tab-aluno nome, matricula, nota1, nota2, nota3
create table if not exists tab_alunos (
    cod_aluno int not null auto_increment primary key,
    nome varchar(50), 
    matricula varchar(10), 
    nota1 float,
    nota2 float, 
    nota3 float);
   
-- inserir dados de teste no banco aluno
insert into tab_aluno values ('', 'Joao', '123', 10, 9, 10);
insert into tab_aluno values ('', 'Maria', '456', 10, 8, 10);
insert into tab_aluno values ('', 'Jose', '789', 10, 10, 9);
insert into tab_aluno values ('', 'Pedro', '101', 10, 10, 7);
insert into tab_aluno values ('', 'Ana', '102', 10, 9, 10);
insert into tab_aluno values ('', 'Jonatas', '123', 10, 10, 9);
insert into tab_aluno values ('', 'Mariana', '456', 10, 10, 10);
insert into tab_aluno values ('', 'Joseilton', '789', 10, 9, 10);
insert into tab_aluno values ('', 'Petra', '101', 10, 9, 10);
insert into tab_aluno values ('', 'Analice', '102', 10, 10, 10);
insert into tab_aluno values ('', 'Joalisson', '123', 10, 10, 9);
insert into tab_aluno values ('', 'Marialice', '456', 9, 10, 10);
insert into tab_aluno values ('', 'Josenir', '789', 10, 10, 9);