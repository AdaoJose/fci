-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Usuario (
IdUsuario INT PRIMARY KEY,
nomeUsuario VARCHAR(100),
cpfUsuario VARCHAR(12),
dataCadastroUs VARCHAR(100),
login VARCHAR(50),
senha VARCHAR(50),
ativo BOOLEAN
)

CREATE TABLE setor (
nomeSetor VARCHAR(50),
idSetor INT PRIMARY KEY,
dataCAdastroSet DATE,
dataEscluSetor DATE,
descricaoSetor VARCHAR(100),
IdUsuario VARCHAR(100),
idConta INT/*falha: chave estrangeira*/
)

CREATE TABLE conta (
idConta INT PRIMARY KEY,
nomeConta VARCHAR(100),
valorConta BOOLEAN,
tipoConta VARCHAR(100),
uploadConta VARCHAR(100),
statusConta VARCHAR(100),
dataVencConta DATE,
dataValidacao DOUBLE
)

CREATE TABLE usuarioSetor (
IdUsuario INT,
idSetor INT,
acesso VARCHAR(100) ,
tipoUsuario INT,
superiorImediato INT/*falha: chave estrangeira*//*falha: chave estrangeira*/
)

ALTER TABLE setor ADD FOREIGN KEY(idConta) REFERENCES conta (idConta)
