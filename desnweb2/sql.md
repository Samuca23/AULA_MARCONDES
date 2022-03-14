--CRIACAO DAS TABELAS

CREATE TABLE public.TBRACAANIMAL (
                raccodigo BIGINT NOT NULL,
                racnome VARCHAR NOT NULL,
                CONSTRAINT raca PRIMARY KEY (raccodigo)
);


CREATE TABLE public.TBANIMAL (
                anicodigo BIGINT NOT NULL,
                raccodigo BIGINT NOT NULL,
                aninascimento VARCHAR NOT NULL,
                aninome VARCHAR NOT NULL,
                CONSTRAINT animal_codigo PRIMARY KEY (anicodigo, raccodigo)
);


CREATE TABLE public.TBSAUDEANIMAL (
                anicodigo BIGINT NOT NULL,
                sanpeso NUMERIC(10,2) NOT NULL,
                raccodigo BIGINT NOT NULL,
                CONSTRAINT saude PRIMARY KEY (anicodigo)
);

CREATE TABLE tbmenu (
  id serial NOT NULL,
  texto varchar(100) NOT NULL,
  acao varchar(200) NOT NULL,
  colunas varchar(255) NOT NULL,
  sqltabela varchar NOT NULL
) 

CREATE TABLE tbusuario (
  id serial NOT NULL,
  nome varchar(60) NOT NULL,
  email varchar(100) NOT NULL,
  senha varchar(30) NOT NULL
) 

ALTER TABLE public.TBANIMAL ADD CONSTRAINT raca_animal_animal_fk
FOREIGN KEY (raccodigo)
REFERENCES public.TBRACAANIMAL (raccodigo)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE public.TBSAUDEANIMAL ADD CONSTRAINT animal_saude_animal_fk
FOREIGN KEY (anicodigo, raccodigo)
REFERENCES public.TBANIMAL (anicodigo, raccodigo)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE tbmenu
ADD PRIMARY KEY (id);
  
ALTER TABLE tbusuario
ADD PRIMARY KEY (id),
ADD UNIQUE KEY usuario_email_uindex (email);



--INSERT TABELA DE RACA
insert into tbracaanimal values (1, 'NELORE')
insert into tbracaanimal values (2, 'ANGUS')


--INSERT TABELA DE ANIMAL
insert into tbanimal values (1, 1, '23/04/2001', 'Estrela')


--INSERT TABELA DE SAUDE DO ANIMAL
insert into tbsaudeanimal values (1, 100.50, 1)


--SELECT PRINCIPAL DA CONSULTA DE ANIMAIS
SELECT tbanimal.anicodigo AS animal_codigo,
	   tbanimal.aninome AS animal_nome,
	   tbanimal.aninascimento AS animal_nascimento,
	   tbracaanimal.racnome AS raca_nome,
	   tbsaudeanimal.sanpeso AS peso_animal
  FROM tbanimal
  JOIN tbracaanimal ON tbracaanimal.raccodigo = tbanimal.raccodigo
  JOIN tbsaudeanimal ON tbsaudeanimal.anicodigo = tbanimal.anicodigo

-- INSERT NA TABELA DE MENU
INSERT INTO tbmenu (id, texto, acao, colunas, sqltabela) VALUES
(1, 'Bovinos', '?pagina=lista_bovinos', 'Código,Nome,Nascimento,Raça,Peso', 'SELECT tbanimal.anicodigo AS animal_codigo,
	   															  					tbanimal.aninome AS animal_nome,
	   															  					tbanimal.aninascimento AS animal_nascimento,
	   															  					tbracaanimal.racnome AS raca_nome,
	   															  					tbsaudeanimal.sanpeso AS peso_animal
													         				   FROM tbanimal
													 	     				   JOIN tbracaanimal ON tbracaanimal.raccodigo = tbanimal.raccodigo
													  	     			       JOIN tbsaudeanimal ON tbsaudeanimal.anicodigo = tbanimal.anicodigo');


--INSERT TABELA DE USUARIOS
INSERT INTO tbusuario (id, nome, email, senha) VALUES (1, 'Samuel', 'samuel.chiodini@unidavi.edu.br', 'abc123')
