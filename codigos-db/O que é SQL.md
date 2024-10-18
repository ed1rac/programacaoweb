## O que é SQL?

**SQL(Structured Query Language)**, ou Linguagem de Consulta Estruturada, é a linguagem de pesquisa padrão para banco de dados relacional.

A linguagem SQL é usada para executar comando em bancos de dados relacional, isto é, baseado em tabelas. 

## Pra que serve o SQL?

A programação SQL pode ser usada para analisar ou executar tarefas em tabelas, principalmente através dos seguintes comandos: inserir (`insert¿), pesquisar (`search¿), atualizar (`update¿) e excluir (`delete¿). Porém, isso não significa que o SQL não possa fazer coisas mais avançadas, como escrever queries (comandos de consulta) com múltiplas informações.

## DQL, DDL e DML

A linguagem SQL é dividida em alguns subgrupos:

## **DQL (Linguagem de Consulta de Dados)**

- DQL ou Data Query Language possui apenas um único comando: O **SELECT**.
- O **SELECT** é um dos principais comandos utilizados em SQL, pois com ele é possível realizar consultas aos dados que pertencem a uma determinada tabela. É um comando composto de várias opções que permite a elaboração de consultas das mais simples a mais elaboradas.

**Selecionando todas as colunas**

-     **select * from tb_aluno**

**Selecionando colunas especificas**

-     **select id, nome from tb_aluno**

## **DDL (Linguagem de Definição de dados)**

- DDL ou Data Definition Language (Linguagem de Definição de dados) permite ao usuário definir as novas tabelas e os elementos que serão associados a elas. É responsável pelos comandos de criação e alteração no banco de dados, sendo composto por três comandos: **CREATE**, **ALTER** e **DROP**.

> CREATE TABLE TB_ALUNO (
>     COD_ALUNO      NUMBER NOT NULL,
>     NOME           VARCHAR2(50) NOT NULL,
>     DT_NASCIMENTO  DATE NOT NULL,
>     SEXO           CHAR(1) NOT NULL,
>     ED_RESIDENCIAL VARCHAR2(200),
>     NR_TELEFONE    VARCHAR2(50),
>     EMAIL          VARCHAR2(50),
>     PAIS           VARCHAR2(50),
>     PRIMARY KEY ( COD_ALUNO ),
>     CHECK (SEXO IN ( 'F', 'M' ))
> );

## **DML (Linguagem de Manipulação de Dados)**

- O DML ou Data Manipulation Language (Linguagem de Manipulação de Dados) interage diretamente com os dados dentro das tabelas. Possui três comandos para esta manipulação: **INSERT**, **UPDATE** e **DELETE**.

> INSERT INTO TB_ALUNO(COD_ALUNO,NOME,DT_NASCIMENTO,SEXO,ED_RESIDENCIAL,NR_TELEFONE,EMAIL, PAIS) VALUES (1,'MARCELO MOREIRA','11/08/1978','M','RUA MINHA CASA 1','61  99999-9999','MOREIRA.MM@PF.GOV.BR', 'Brasil');

## 1 - Scripts Criacao Tabelas

- > -- CRIAR TABELA TB_ALUNO
  > CREATE TABLE TB_ALUNO (
  > 
  >     COD_ALUNO      NUMBER NOT NULL,
  >     NOME           VARCHAR2(50) NOT NULL,
  >     DT_NASCIMENTO  DATE NOT NULL,
  >     SEXO           CHAR(1) NOT NULL,
  >     ED_RESIDENCIAL VARCHAR2(200),
  >     NR_TELEFONE    VARCHAR2(50),
  >     EMAIL          VARCHAR2(50),
  >     PAIS           VARCHAR2(50),
  >     PRIMARY KEY ( COD_ALUNO ),
  >     CHECK (SEXO IN ( 'F', 'M' ))
  > 
  > );
  > -- SELECIONAR DADOS
  > SELECT * FROM TB_ALUNO;
  > --EXCLUIR TABELA
  > DROP TABLE TB_ALUNO;
  > -- INSERIR DADOS
  > INSERT INTO TB_ALUNO(COD_ALUNO,NOME,DT_NASCIMENTO,SEXO,ED_RESIDENCIAL,NR_TELEFONE,EMAIL, PAIS) VALUES (1,'MARCELO MOREIRA','11/08/1978','M','RUA MINHA CASA 1','61  99999-9999','MOREIRA.MM@PF.GOV.BR', 'Brasil');
  > INSERT INTO TB_ALUNO(COD_ALUNO,NOME,DT_NASCIMENTO,SEXO,ED_RESIDENCIAL,NR_TELEFONE,EMAIL, PAIS) VALUES (2,'FABIANO DIAS','12/08/1979','M','RUA MINHA CASA 2','62  99999-9999','DIAS.FD@PF.GOV.BR', 'Brasil');
  > INSERT INTO TB_ALUNO(COD_ALUNO,NOME,DT_NASCIMENTO,SEXO,ED_RESIDENCIAL,NR_TELEFONE,EMAIL, PAIS) VALUES (3,'MARIA SILVA','13/08/1980','F','RUA MINHA CASA 3','63  99999-9999','SILVA.MS@PF.GOV.BR', 'Argentina');
  > INSERT INTO TB_ALUNO(COD_ALUNO,NOME,DT_NASCIMENTO,SEXO,ED_RESIDENCIAL,NR_TELEFONE,EMAIL, PAIS) VALUES (4,'DIEGO BELISÁRIO','14/08/1985','M','RUA MINHA CASA 4','64  99999-9999','DIEGO.DB@PF.GOV.BR', 'Brasil');
  > INSERT INTO TB_ALUNO(COD_ALUNO,NOME,DT_NASCIMENTO,SEXO,ED_RESIDENCIAL,NR_TELEFONE,EMAIL, PAIS) VALUES (5,'JOÃO AFONSO','15/08/1999','M','RUA MINHA CASA 5','65  99999-9999','JOAO.JA@PF.GOV.BR', 'Chile');
  > INSERT INTO TB_ALUNO VALUES (6,'RITA SOUZA','16/08/2000','F','RUA MINHA CASA 6','66  99999-9999','SOUZA.RS@PF.GOV.BR', 'Brasil');
  > INSERT INTO TB_ALUNO VALUES (7,'CAIO HENRIQUE','17/08/1970','M','RUA MINHA CASA 7','67  99999-9999','CAIO.CH@PF.GOV.BR', 'Argentina');
  > INSERT INTO TB_ALUNO VALUES (8,'ANA NAZARÉ','18/08/1988','F','RUA MINHA CASA 8','68  99999-9999','ANA.AN@PF.GOV.BR', 'Bolívia');
  > INSERT INTO TB_ALUNO VALUES (9,'JULIANA GOMES','19/08/2002','F','RUA MINHA CASA 9','69  99999-9999','GOMES.JG@PF.GOV.BR', 'Uruguai');
  > INSERT INTO TB_ALUNO VALUES (10,'PEDRO RIOS','20/08/1997','M','RUA MINHA CASA 10','70  99999-9999','RIOS.PR@PF.GOV.BR', 'Brasil');
  > -- VERIFICANDO A RESTRIÇÃO DE VERIFICAÇÃO (SEXO: M OU F)
  > INSERT INTO TB_ALUNO VALUES (11,'ROBERTO MARTINS','21/08/1978','X','RUA MINHA CASA 11','71  99999-9999','ROBERTO.RM@PF.GOV.BR', 'Brasil');
  > INSERT INTO TB_ALUNO VALUES (11,'ROBERTO MARTINS','21/08/1978','5','RUA MINHA CASA 11','71  99999-9999','ROBERTO.RM@PF.GOV.BR', 'Brasil');
  > INSERT INTO TB_ALUNO VALUES (11,'ROBERTO MARTINS','21/08/1978','AB','RUA MINHA CASA 11','71  99999-9999','ROBERTO.RM@PF.GOV.BR', 'Brasil');
  > -- INSERIR DADOS CORRETOS
  > INSERT INTO TB_ALUNO VALUES (11,'ROBERTO MARTINS','21/08/1978','M','RUA MINHA CASA 11','71  99999-9999','ROBERTO.RM@PF.GOV.BR', 'Brasil');
  > -- CONFERIR DADOS
  > SELECT * FROM TB_ALUNO ORDER BY COD_ALUNO;
  > -- Descrever
  > 
  > DESCRIBE TB_ALUNO;
  > ----------------------------------------------------------------------------------------------------------------------
  > 
  > -- CRIAR TABELA TB_PROFESSOR
  > CREATE TABLE TB_PROFESSOR (
  > 
  >     COD_PROFESSOR NUMBER NOT NULL PRIMARY KEY,
  >     NOME          VARCHAR2(50) NOT NULL,
  >     NIVEL         NUMBER NOT NULL,
  >     CURRICULO     VARCHAR2(4000),
  >     TELEFONE      VARCHAR2(50),
  >     EMAIL         VARCHAR2(50),
  >     SALARIO       NUMBER(10, 2),
  >     CHECK ( SALARIO BETWEEN 0 AND 40000 )
  > 
  > );
  > -- SELECIONAR DADOS
  > SELECT * FROM TB_PROFESSOR;
  > -- INSERIR DADOS
  > INSERT INTO TB_PROFESSOR VALUES (1,'CARLOS ANDRÉ',4,'EXPERIÊNCIA EM BANCO DE DADOS','11 98888-8888','CARLOSANDRE@GMAIL.COM','16000,54');
  > INSERT INTO TB_PROFESSOR VALUES (2,'BIANCA MORAES',1,'EXPERIÊNCIA EM PROGRAMAÇÃO','12 98888-8888','BIANCAMORAES@GMAIL.COM','18000,23');
  > INSERT INTO TB_PROFESSOR VALUES (3,'JOAQUIM SILVA',2,'EXPERIÊNCIA EM REDES','13 98888-8888','JOAQUIMSILVA@GMAIL.COM','15000,12');
  > INSERT INTO TB_PROFESSOR VALUES (4,'CARLA AZEVEDO',3,'EXPERIÊNCIA EM INTELIGÊNCIA ARTIFICIAL','14 98888-8888','CARLAAZEVEDO@GMAIL.COM','23000,65');
  > -- VERIFICANDO A RESTRIÇÃO DE VERIFICAÇÃO (SALARIO 0 - 40.000)
  > INSERT INTO TB_PROFESSOR VALUES (5,'GIL JUNIOR',4,'EXPERIÊNCIA EM LOW-CODE','15 98888-8888','GILJUNIOR@GMAIL.COM',-1);
  > INSERT INTO TB_PROFESSOR VALUES (5,'GIL JUNIOR',4,'EXPERIÊNCIA EM LOW-CODE','15 98888-8888','GILJUNIOR@GMAIL.COM',41000);
  > -- INSERIR DADOS CORRETOS
  > INSERT INTO TB_PROFESSOR VALUES (5,'GIL JUNIOR',4,'EXPERIÊNCIA EM LOW-CODE','15 98888-8888','GILJUNIOR@GMAIL.COM','20000,33');
  > -- CONFERIR DADOS
  > 
  > SELECT * FROM TB_PROFESSOR ORDER BY COD_PROFESSOR;
  > ----------------------------------------------------------------------------------------------------------------------
  > 
  > -- CRIAR TABELA TB_DISCIPLINA A PARTIR DO "BROWSER DE OBJETOS"  
  > CREATE TABLE TB_DISCIPLINA (
  > 
  >     COD_DISCIPLINA  NUMBER NOT NULL PRIMARY KEY,
  >     COD_PROFESSOR   NUMBER NOT NULL,
  >     NOME_DISCIPLINA VARCHAR2(50) NOT NULL,
  >     CARGA_HORARIA   NUMBER NOT NULL
  > 
  > );
  > -- INSERIR DADOS DA TB_DISCIPLINA A PARTIR DO "BROWSER DE OBJETOS"  
  > COD_DISCIPLINA,COD_PROFESSOR,NOME_DISCIPLINA,CARGA_HORARIA
  >  (3,5,'ORACLE APEX',40);
  >  (1,1,'BANCO DE DADOS RELACIONAL',40);
  >  (2,1,'MODELAGEM DE DADOS',20);
  >  (4,2,'PROGRAMAÇÃO I',30);
  >  (5,2,'PROGRAMAÇÃO II',60);
  > -- CONFERIR DADOS
  > 
  > SELECT * FROM TB_DISCIPLINA ORDER BY COD_DISCIPLINA;
  > ----------------------------------------------------------------------------------------------------------------------
  > 
  > -- CRIAR TABELA TB_TURMA
  > CREATE TABLE TB_TURMA (
  > 
  >     COD_TURMA NUMBER NOT NULL,
  >     DESCRICAO VARCHAR2(50) NOT NULL,
  >     TURNO     VARCHAR2(50) NOT NULL,
  >     SALA      VARCHAR2(20),
  >     QTD_VAGAS NUMBER NOT NULL
  > 
  > );
  > -- CHAVE PRIMÁRIA CRIADA DEPOIS
  > ALTER TABLE TB_TURMA ADD CONSTRAINT TB_TURMA_PK PRIMARY KEY ( COD_TURMA ); 
  > --INSERIR VALORES NA TABELA TB_TURMA
  > INSERT INTO TB_TURMA(COD_TURMA,DESCRICAO,TURNO,SALA,QTD_VAGAS) VALUES (2,'TURMA DE BANCO DE DADOS','VESPERTINO',105,25);
  > INSERT INTO TB_TURMA(COD_TURMA,DESCRICAO,TURNO,SALA,QTD_VAGAS) VALUES (3,'TURMA DE REDES','NOTURNO',103,40);
  > INSERT INTO TB_TURMA(COD_TURMA,DESCRICAO,TURNO,SALA,QTD_VAGAS) VALUES (4,'TURMA DE INTELIGÊNCIA ARTIFICIAL','VESPERTINO',115,30);
  > INSERT INTO TB_TURMA(COD_TURMA,DESCRICAO,TURNO,SALA,QTD_VAGAS) VALUES (1,'TURMA DE PROGRAMAÇÃO','MATUTINO',107,30);
  > -- SELECIONAR DADOS
  > SELECT * FROM TB_TURMA ORDER BY COD_TURMA;
  > --INSERIR COLUNA NA TABELA
  > ALTER TABLE TB_TURMA ADD ESTADO NUMBER DEFAULT 1;
  > -- SELECIONAR DADOS
  > SELECT * FROM TB_TURMA ORDER BY COD_TURMA;
  > --EXCLUIR COLUNA DA TABELA
  > ALTER TABLE TB_TURMA ADD COL_TESTE VARCHAR2(50) DEFAULT 'TESTE';
  > ALTER TABLE TB_TURMA DROP COLUMN COL_TESTE;
  > -- SELECIONAR DADOS
  > SELECT * FROM TB_TURMA ORDER BY COD_TURMA;
  > --RENOMEAR COLUNA
  > ALTER TABLE TB_TURMA RENAME COLUMN QTD_VAGAS TO VAGAS_ABERTAS;
  > -- SELECIONAR DADOS
  > SELECT * FROM TB_TURMA;
  > --RENOMEAR COLUNA
  > ALTER TABLE TB_TURMA RENAME COLUMN VAGAS_ABERTAS TO QTD_VAGAS;
  > -- SELECIONAR DADOS
  > SELECT * FROM TB_TURMA ORDER BY COD_TURMA;
  > --MODIFICAR COLUNA
  > 
  > ALTER TABLE TB_TURMA MODIFY (DESCRICAO VARCHAR2(100));
  > ----------------------------------------------------------------------------------------------------------------------
  > 
  > --Criar Sequence
  > CREATE SEQUENCE SQ_TURMA START WITH 5;
  > --Parâmentros da sequence
  > --SELECT SQ_TURMA.currval FROM DUAL;
  > --SELECT * FROM user_sequences WHERE sequence_name = 'SQ_TURMA';
  > /*O ALTER pode ser usado para alterar outros parâmetros de uma sequence. 
  > O valor inicial não é permitido. 
  > Então o jeito seria dropar e recriar o objeto ajustando o parâmetro START WITH.
  > */
  > INSERT INTO TB_TURMA(COD_TURMA,DESCRICAO,TURNO,SALA,QTD_VAGAS,ESTADO) VALUES (SQ_TURMA.NEXTVAL,'TURMA DE HARDWARE','VESPERTINO',104,40,1);
  > INSERT INTO TB_TURMA(COD_TURMA,DESCRICAO,TURNO,SALA,QTD_VAGAS,ESTADO) VALUES (SQ_TURMA.NEXTVAL,'TURMA DE MÍDIAS SOCIAIS','NOTURNO',106,30,0);
  > INSERT INTO TB_TURMA(COD_TURMA,DESCRICAO,TURNO,SALA,QTD_VAGAS,ESTADO) VALUES (SQ_TURMA.NEXTVAL,'TURMA DE CÁLCULO I','MATUTINO',101,10,1);
  > -- SELECIONAR DADOS
  > 
  > SELECT * FROM TB_TURMA ORDER BY COD_TURMA;
  > ----------------------------------------------------------------------------------------------------------------------
  > 
  > --Excluir registro da tabela
  > DELETE FROM TB_TURMA WHERE COD_TURMA = 5;
  > DELETE FROM TB_TURMA WHERE DESCRICAO = 'TURMA DE MÍDIAS SOCIAIS' AND ESTADO = 0;
  > DELETE FROM TB_TURMA WHERE QTD_VAGAS <= 10;
  > 
  > SELECT * FROM TB_TURMA ORDER BY COD_TURMA;
  > ----------------------------------------------------------------------------------------------------------------------
  > 
  > --ALTERAR REGISTRO DA TABELA TB_ALUNO
  > SELECT * FROM TB_ALUNO WHERE COD_ALUNO = 2;
  > UPDATE TB_ALUNO SET 
  > 
  >     NOME = 'MARIA DE JESUS', 
  >     DT_NASCIMENTO = SYSDATE-5000,
  >     SEXO = 'F',
  >     EMAIL = 'maria.mj@pf.gov.br'
  > 
  > WHERE COD_ALUNO = 2;
  > SELECT * FROM TB_ALUNO WHERE COD_ALUNO = 11;
  > UPDATE TB_ALUNO SET 
  > 
  >     NR_TELEFONE = '61 98764-3210'
  > 
  > WHERE COD_ALUNO = 11;
  > SELECT * FROM TB_ALUNO ORDER BY COD_ALUNO;
  > 
  > ----------------------------------------------------------------------------------------------------------------------
  > 
  > -- Falar sobre informações guardadas no APEX:
  > SELECT * FROM APEX_APPL_ACL_USERS;
  > SELECT * FROM APEX_APPLICATION_PAGES
  > SELECT * FROM APEX_WORKSPACE_SESSIONS;
  > SELECT * FROM APEX_WORKSPACE_ACTIVITY_LOG;

## 2 - Scripts Manipulacao de Dados

> -- AJUSTAR OS DADOS DA TABELA TB_PROFESSOR
> SELECT * FROM TB_PROFESSOR ORDER BY COD_PROFESSOR;
> ALTER TABLE TB_PROFESSOR ADD IMPOSTO NUMBER(10,2) DEFAULT '2700,10';
> ALTER TABLE TB_PROFESSOR ADD DT_NASCIMENTO DATE DEFAULT SYSDATE - 50000;
> UPDATE TB_PROFESSOR SET DT_NASCIMENTO= '20/11/1990' WHERE COD_PROFESSOR = 1;
> UPDATE TB_PROFESSOR SET DT_NASCIMENTO= '1/1/2000' WHERE COD_PROFESSOR = 2;
> 
> ------------------------------------------------------------------------------------------------------
> 
> SELECT * FROM TB_PROFESSOR ORDER BY COD_PROFESSOR;
> --MANIPULAÇÃO DE DADOS
> -- Selecionar
> SELECT COD_PROFESSOR, NOME, EMAIL FROM TB_PROFESSOR;
> -- Selecionar mudando o nome da coluna
> SELECT COD_PROFESSOR AS "Código", NOME AS "Nome do Aluno" FROM TB_PROFESSOR;
> --Distinct retira linhas duplicadas
> -- todas colunas tem que ser iguais
> SELECT DT_NASCIMENTO FROM TB_PROFESSOR;
> SELECT DISTINCT DT_NASCIMENTO FROM TB_PROFESSOR;
> --Nao agrupa pois NOME diferente
> --para cada linha
> SELECT DISTINCT NOME, DT_NASCIMENTO
> FROM TB_PROFESSOR
> ORDER BY NOME;
> -- Criar nova Coluna e Aplicar função ROUND
> SELECT NOME AS NOME_PROFESSOR,
>        SALARIO,
>        SALARIO-IMPOSTO,
>        Round(SALARIO-IMPOSTO,0) AS SALARIO_LIQUIDO
> FROM TB_PROFESSOR
> ORDER BY NOME_PROFESSOR; --Apelido de coluna só funciona em ORDER BY
> 
> ------------------------------------------------------------------------------------------------------
> 
> -- Cálculo com NULL
> SELECT * FROM TB_PROFESSOR ORDER BY COD_PROFESSOR;
> UPDATE TB_PROFESSOR SET
> IMPOSTO = NULL
> WHERE COD_PROFESSOR = 1;
> --calculo com coluna = NULL
> --resultado = NULL
> SELECT COD_PROFESSOR,
>        NOME,
>        SALARIO,
>        IMPOSTO,
>        SALARIO+IMPOSTO
> FROM TB_PROFESSOR;
> -- Aplicar função NVL (substitui nulo em valor)
> SELECT NOME,
>        SALARIO,
>        IMPOSTO,
>        SALARIO+IMPOSTO,
>        Nvl(IMPOSTO,0),
>        SALARIO + Nvl(IMPOSTO,0)
> FROM TB_PROFESSOR;
> 
> ------------------------------------------------------------------------------------------------------
> 
> -- Concatenar
> SELECT COD_PROFESSOR || ' - ' || NOME || ' ganha: '|| SALARIO AS PROFESSOR
> FROM TB_PROFESSOR
> ORDER BY COD_PROFESSOR;
> 
> ------------------------------------------------------------------------------------------------------
> 
> --SELECIONAR DADOS
> SELECT * FROM TB_PROFESSOR ORDER BY COD_PROFESSOR;
> --
> SELECT COD_PROFESSOR, NOME, DT_NASCIMENTO 
> FROM TB_PROFESSOR
> WHERE DT_NASCIMENTO > '1/1/1978';
> --
> SELECT COD_PROFESSOR, NOME, DT_NASCIMENTO
> FROM TB_PROFESSOR
> WHERE DT_NASCIMENTO
> BETWEEN '1/1/1990' AND '1/1/2022';
> -- 
> SELECT * FROM TB_PROFESSOR
> WHERE NIVEL <> '4'
> AND  SALARIO <= 20000
> ORDER BY SALARIO DESC;
> -- IN  /// NOT IN
> SELECT * FROM TB_PROFESSOR ORDER BY COD_PROFESSOR;
> SELECT * FROM TB_PROFESSOR
> WHERE COD_PROFESSOR IN (1, 2, 4);
> --equivalente ao SELECT IN
> SELECT * FROM TB_PROFESSOR
> WHERE COD_PROFESSOR = 1
> OR COD_PROFESSOR    = 2
> OR COD_PROFESSOR    = 4;
> SELECT * FROM TB_PROFESSOR
> WHERE COD_PROFESSOR NOT IN (1, 2, 4);
> --Trabalhar com LIKE 
> SELECT * FROM TB_PROFESSOR ORDER BY COD_PROFESSOR;
> SELECT * FROM TB_PROFESSOR WHERE NOME LIKE 'C%';     
> SELECT * FROM TB_PROFESSOR WHERE NOME LIKE '%AZ%';
> SELECT * FROM TB_PROFESSOR WHERE NOME LIKE '%OR';
> 
> ------------------------------------------------------------------------------------------------------
> 
> SELECT * FROM TB_PROFESSOR
> WHERE COD_PROFESSOR = :COD_PROFESSOR
> OR NOME = :NOME
> OR NIVEL = :NIVEL
> OR CURRICULO = :CURRICULO
> OR TELEFONE = :TELEFONE
> OR EMAIL = :EMAIL
> OR SALARIO = :SALARIO;
> 
> -------------------------------------------------------------------------------------------------------
> 
> /*
> USAR O CONSTRUTOR DE CONSULTAS (MARTELO)
> SELECIONAR (TB_PROFESSOR E TB_DISCIPLINA)
> NOME DE PROFESSOR
> EMAIL
> NOME DAS DISCIPLINAS MINISTRADAS
> CARGA HORÁRIA
> */
> 
> -------------------------------------------------------------------------------------------------------
> 
> /*
> FAZER DOWNLOAD TB_ALUNO > CSV
> AJUSTAR CHAVE PRIMÁRIA
> USAR O UTILITÁRIOS > DATA WORKSHOP
> REALIZAR UPLOAD DOS DADOS
> ANEXAR PLANILHA E INCLUIR DADOS
> */
> 
> -------------------------------------------------------------------------------------------------------
> 
> /*
> MOSTRAR O QUICK SQL
> CARREGAR > AMOSTRAS
> AJUDA
> */
> 
> -------------------------------------------------------------------------------------------------------
> 
> SELECT COUNT(*) AS LINHAS, -- RETORNA A QUANTIDADE DE LINHAS DA TABELA
> COUNT(SALARIO) AS SALARIOS_NAO_NULOS, -- RETORNA A QUANTIDADE DE SALARIOS NÃO NULOS
> COUNT(DISTINCT SALARIO) AS SALARIOS_DIFERENTES, -- RETORNA A QUANTIDADE DE VALORES DIFERENTES DE SALARIO
> AVG (SALARIO) AS MEDIA, -- RETORNA A MÉDIA DAS SALARIOS
> MAX (SALARIO) AS MAXIMO, -- RETORNA A MAIOR SALARIO
> MIN (SALARIO) AS MININO, -- RETORNA A MENOR SALARIO
> SUM (SALARIO) AS SOMA -- RETORNA O SOMATÓRIO DE TODAS AS SALARIOS
> FROM TB_PROFESSOR;
> 
> -------------------------------------------------------------------------------------------------------
> 
> -- VEJA O QUE ACONTECE COM ESTES 2 SCRIPTS E TENTE ENTENDER:
> SELECT NOME, LENGTH(NOME) FROM TB_PROFESSOR;
> --
> SELECT NOME, LENGTH(NOME) AS TAMANHO,
> CASE 
> WHEN LENGTH (NOME) < 11 THEN 'NOME CURTO'
> WHEN LENGTH (NOME) >= 11 AND LENGTH (NOME) <= 12 THEN 'NOME MÉDIO'
> ELSE 'NOME LONGO' END TIPO_NOME
> FROM TB_PROFESSOR
> ORDER BY TAMANHO;
> -- Mostrar CUSTO em ABA "Explicação"
> 
> -------------------------------------------------------------------------------------------------------

## 3 - Scripts Manipulacao de Dados

> --
> SELECT * FROM TB_PROFESSOR ORDER BY COD_PROFESSOR;
> -- concatenar
> SELECT Concat(COD_PROFESSOR,NOME) FROM TB_PROFESSOR;
> --concatenar
> SELECT COD_PROFESSOR||' - '||NOME FROM TB_PROFESSOR;
> --iniciais maiusculas
> SELECT nome, InitCap(NOME) FROM TB_PROFESSOR;
> --posi¿¿o de uma string
> SELECT nome, InStr(NOME,'R') FROM TB_PROFESSOR;
> --tamanho
> SELECT nome, Length(NOME) FROM TB_PROFESSOR;
> --minusculo
> SELECT nome, Lower(NOME) FROM TB_PROFESSOR;
> --maiusculo
> SELECT nome, Upper(NOME) FROM TB_PROFESSOR;
> --iniciais mai¿sculas
> SELECT InitCap('JOSE DA SILVA') FROM dual;
> -- left - esquerda
> SELECT COD_PROFESSOR, LPad(COD_PROFESSOR,5,'0') FROM TB_PROFESSOR;
> -- direita
> SELECT nome, salario, RPad(SALARIO,12,'0') FROM TB_PROFESSOR;
> --
> SELECT nome, RPad(NOME,10,'$') FROM TB_PROFESSOR;
> -- copia parte de um texto
> -- substr ( campo/texto, posicao, qtde de caract )
> SELECT nome, SubStr(NOME,1,3) FROM TB_PROFESSOR;
> --
> SELECT SubStr(NOME,1,1) FROM TB_PROFESSOR;
> --
> SELECT nome, SubStr(NOME,3,1) FROM TB_PROFESSOR;
> --
> SELECT REPLACE(Upper(NOME),'R','$') FROM TB_PROFESSOR;
> --
> -- Pega a última letra do nome
> SELECT NOME, SubStr(NOME,Length(nome),1) FROM TB_PROFESSOR;
> --
> -- Pega as duas últimas letras do nome pois diminuiu o total de caracteres por 1
> -- Fórmula SUBSTR( string, start_position [, length ] )
> SELECT SubStr(NOME,Length(nome)-1, 2) FROM TB_PROFESSOR;
> --
> SELECT nome, SubStr(NOME, 3, Length(nome)-3 ) FROM TB_PROFESSOR;
> --
> SELECT
>   SALARIO,
>   REPLACE(SALARIO, ',' , ''),
>   RPad(SALARIO, 10,'0'),     --Zeros a direita at¿ 10 casas
>   LPad(SALARIO, 10,'0'),     --Zeros a esquerda at¿ 10 casas
>   LPad(REPLACE(SALARIO,',',''),10,'0')
> FROM TB_PROFESSOR;
> -- Round e Trunc
> -- Round: Arredonda pra cima ou para baixo, a depender do útimo dígito;
> -- Trunc: Apena arrendonda, sem levar em consideração o último dígito;
> SELECT Round(45.925, 2 ),  --45.93
>        Trunc(45.929, 2 ),  --45.92
>        Mod(10, 2) AS RESTO_DIVISAO,
>        Trunc(1.99),
>        Trunc(1.99, 2)
> FROM DUAL;

## 4 - Scripts Manipulacao de Dados

> --Data  
> --SysDate retorna data/hora do Servidor.  
> SELECT SYSDATE FROM DUAL;
> 
> SELECT * FROM TB_PROFESSOR;
> 
> --Funcoes de Data/Hora  
> --Somar 5 dias a data  
> SELECT SYSDATE, DT_NASCIMENTO, DT_NASCIMENTO + 5 FROM TB_PROFESSOR;
> 
> -- Diferença de dias que resulta em dias  
> SELECT SYSDATE - DT_NASCIMENTO AS DIF_DIAS FROM TB_PROFESSOR;
> 
> -- Diferença de dias que resulta em dias  
> SELECT Trunc(SYSDATE - DT_NASCIMENTO) as DIAS FROM TB_PROFESSOR;
> 
> --Somando horas em uma data  
> SELECT SYSDATE, SYSDATE + 5 / 24 as ADD_HORAS FROM TB_PROFESSOR;
> 
> --Somar minutos  
> SELECT SYSDATE, SYSDATE + 15 / 1440 as ADD_MINUTOS FROM TB_PROFESSOR;
> 
> SELECT SYSDATE, SYSDATE + 30 / (3600 * 24) as ADD_SEGUNDOS FROM TB_PROFESSOR;
> 
> --Hora fica 00:00:00  
> SELECT SYSDATE, Trunc(SYSDATE) FROM DUAL;
> 
> --Diferenca de meses entre datas  
> -- Otherwise Oracle Database calculates the fractional portion of the result based on a 31-day month and considers the difference in time components  
> SELECT Months_Between(SYSDATE, SYSDATE-90) AS DIF_MES FROM DUAL;
> 
> --Adiciona meses  
> SELECT Add_Months(SYSDATE, 5) AS ADICIONA_MES_DATA FROM DUAL;
> 
> --Proxima data a partir de uma dia da semana  
> SELECT Next_Day(SYSDATE, 'QUARTA-FEIRA') AS PROXIMA_QUARTA_DATA FROM DUAL;
> 
> --Ultimo dia do mes  
> SELECT Last_Day(SYSDATE) AS ULTIMO_DIA_MES FROM DUAL;
> 
> --Primeiro dia do proximo mes  
> --até dia 15 do mes pega o primeiro dia do mes atual  
> --a partir do dia 16 retorna o primeiro dia do proximo mes  
> SELECT Round(SYSDATE, 'MONTH') AS PRIMEIRO_DIA_PROXIMO_MES FROM DUAL;
> 
> --Primeiro dia do mes  
> SELECT Trunc(SYSDATE,'MONTH') AS PRIMEIRO_DIA_MES_CORRENTE FROM DUAL;
> 
> ---Formata¿¿o de data
> 
> --Conversor to_char(data, formato)
> 
> --DD -> dia do mes  
> SELECT SYSDATE, To_Char(SYSDATE,'DD') FROM DUAL
> 
> --  
> SELECT To_Char(SYSDATE,'DD/MM/YYYY') DT_NASCIMENTO FROM DUAL;
> 
> SELECT To_Char(SYSDATE,'DD/MM') DIA_MES FROM DUAL;
> 
> SELECT To_Char(SYSDATE,'DD') DIA FROM DUAL;
> 
> SELECT To_Char(SYSDATE,'MM') MES FROM DUAL;
> 
> SELECT To_Char(SYSDATE,'YYYY') ANO FROM DUAL;
> 
> SELECT To_Char(SYSDATE,'YY') ANO FROM DUAL;
> 
> --  
> SELECT To_Char(SYSDATE,'MONTH') MES1 FROM DUAL;
> 
> --Leva em consideração que domingo é o primeiro dia  
> SELECT To_Char(SYSDATE,'D') DIA_SEMANA FROM DUAL;
> 
> --  
> SELECT To_Char(SYSDATE,'DY') DIA_SEMANA FROM DUAL;   -- QUA
> 
> --  
> SELECT To_Char(SYSDATE,'DAY') DIA_SEMANA1 FROM DUAL; -- QUARTA
> 
> --  
> SELECT To_Char(SYSDATE,'YEAR') ANO FROM DUAL;        -- Em Ingles
> 
> --  
> SELECT To_Char(SYSDATE,'"NOVO HAMBURGO", fmDAY "," DD "de" fmMonth "de" YYYY') FROM DUAL;
> 
> --  
> SELECT To_Char(SYSDATE,'HH24:MI') HORA_MIN FROM DUAL;
> 
> --  
> SELECT To_Char(SYSDATE,'HH24:MI:SS') HORA_MIN_SEG FROM DUAL;
> 
> --  
> SELECT To_Char(SYSDATE,'DD/MM HH24:MI') DATA_HORA FROM DUAL;
> 
> --  
> SELECT To_Char(SYSDATE,'DD/MM/YYYY HH24:MI:SS') DATA_HORA FROM DUAL;
> 
>  

## 5 - Scripts Manipulacao de Dados

> --L -> R$  
> --G -> ponto  
> --D -> casas decimais
> 
> SELECT * FROM TB_PROFESSOR
> 
> SELECT Trim(To_Char(Salario,'L99999.99')) salario1, trim(To_Char(Salario,'L99G999D99')) salario2  
> FROM TB_PROFESSOR;
> 
> --  
> SELECT 'R$ '||(Round(Salario,2)) AS salario FROM TB_PROFESSOR;
> 
> -- Formato Brasil  
> select to_char(12131.1, 'FM999G999G999D90', 'nls_numeric_characters='',.''')  
> from   dual
> 
> -----------------------------------------------------------------------------------------------------------------  
> 
> --NVL e NVL2  
> SELECT * FROM TB_PROFESSOR;
> 
> SELECT SALARIO,  
>        IMPOSTO,  
>        SALARIO+IMPOSTO,  
>        Nvl(IMPOSTO,0),  
>        Nvl(IMPOSTO,0) + SALARIO  
> FROM TB_PROFESSOR;
> 
> SELECT * FROM TB_PROFESSOR
> 
> UPDATE TB_PROFESSOR SET  
> TELEFONE = NULL  
> WHERE COD_PROFESSOR = 5;
> 
> SELECT COD_PROFESSOR, Nvl(TELEFONE, 'SEM TELEFONE') FROM TB_PROFESSOR;
> 
> SELECT * FROM TB_PROFESSOR;
> 
> -----------------------------------------------------------------------------------------------------------------  
> 
>  

## 6 - Scripts Manipulacao de Dados

> SELECT * FROM TB_PROFESSOR ORDER BY COD_PROFESSOR;
> 
> -- CASE  
> SELECT NOME, NIVEL,  
>        CASE  
>          WHEN NIVEL = '1' THEN 'GRADUADO'  
>          WHEN NIVEL = '2' THEN 'ESPECIALISTA'  
>          WHEN NIVEL = '3' THEN 'MESTRE'  
>          WHEN NIVEL = '4' THEN 'DOUTOR'  
>          ELSE 'OUTROS'  
>        END AS ESCOLARIDADE  
> FROM TB_PROFESSOR  
> ORDER BY NIVEL;
> 
> -- DECODE  
> SELECT NOME, NIVEL,  
>        Decode(NIVEL,'1','GRADUADO',  
>                     '2','ESPECIALISTA',  
>                     '3','MESTRE',  
>                     '4','DOUTOR',  
>                           'OUTROS' ) AS ESCOLARIDADE  
> FROM TB_PROFESSOR  
> ORDER BY NIVEL;
> 
> ----------------------------------------------------------------------------------------------------

## 7 - Scripts Manipulacao de Dados

> SELECT Count(*)   AS QTDE_REGISTROS,
>        Avg(SALARIO) AS MEDIA,
>        Round(Avg(SALARIO),2) AS MEDIA,
>        Max(SALARIO) AS MAXIMO,
>        Min(SALARIO) AS MINIMO,
>        Sum(SALARIO) AS SOMA,
>        Max(DT_NASCIMENTO)  AS DATA_MAIOR,
>        Min(DT_NASCIMENTO)  AS DATA_MENOR
> FROM TB_PROFESSOR;
> --Proximo código sequencial tabela
> SELECT Max(COD_PROFESSOR) + 1 AS PROXIMO_CODIGO
> FROM TB_PROFESSOR;
> 
> --------------------------
> 
> UPDATE TB_PROFESSOR SET
>   IMPOSTO = NULL
> WHERE COD_PROFESSOR = 4;
> UPDATE TB_PROFESSOR SET
>   IMPOSTO = NULL
> WHERE COD_PROFESSOR = 3;
> SELECT Count(*) AS QTDE_REGISTROS
> FROM TB_PROFESSOR;
> SELECT * FROM TB_PROFESSOR;
> --COUNT -> IGNORA NULOS
> SELECT Count(IMPOSTO)
> FROM TB_PROFESSOR;
> SELECT * FROM TB_PROFESSOR;
> --Qtde de registros com NIVEL informado
> SELECT  Count(NIVEL)  FROM   TB_PROFESSOR;
> --QTDE DE níveis diferentes
> SELECT Count(DISTINCT(NIVEL)) FROM TB_PROFESSOR;
> --QUANT DE REGISTROS POR NIVEL
> SELECT NIVEL, Count(*)
> FROM TB_PROFESSOR
> GROUP BY NIVEL;
> --
> SELECT Sum(IMPOSTO),
>        Avg(IMPOSTO),
>        Count(IMPOSTO),
>        Round(Avg( Nvl(IMPOSTO,0) ), 2)
> FROM TB_PROFESSOR;
> SELECT * FROM TB_PROFESSOR
> --Having - filtrar coluna com funcao de grupo
> SELECT COD_PROFESSOR, AVG(SALARIO) MEDIA
> FROM TB_PROFESSOR
> WHERE COD_PROFESSOR > 0
> HAVING AVG(SALARIO) > 14000
> GROUP BY COD_PROFESSOR
> ORDER BY COD_PROFESSOR;
> --
> SELECT Trunc(DT_NASCIMENTO), SUM(SALARIO) SALARIO
> FROM   TB_PROFESSOR
> WHERE  COD_PROFESSOR > 0
> GROUP  BY Trunc(DT_NASCIMENTO)
> HAVING SUM(SALARIO) > 14000
> ORDER  BY SALARIO Desc;
> ---Media mais alta por professor
> SELECT Max(AVG(SALARIO))
> FROM TB_PROFESSOR
> GROUP BY COD_PROFESSOR;
> --Soma dos salarios por NIVEL
> SELECT NIVEL, Sum(SALARIO) AS SALARIO
> FROM TB_PROFESSOR
> GROUP BY NIVEL
> ORDER BY SALARIO DESC;
