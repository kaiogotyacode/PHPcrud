# PHPcrud - Luciene LP2
Implementing a PHP crud to apply in my proficiency exam on college.

PURPOSE: This project was made to practice some skills using PHP basics syntaxes to connect with local database with MySQL. It has two Tables that are related by 1-N, where 1 = Pessoa's Table and N = Carro's Table. It's a simple relationship, a "person (Pessoa)" might have 0-N "cars (Carro)", creating a Foreign Key in Carro's table and operating with "JOIN" function in some Views. 

FINALIDADE: O projeto foi desenvolvido para praticar algumas sintaxes básicas do PHP, realizando conexões com o Banco de Dados local MySQL. Possui duas tabelas que se relacionam de forma 1-N, onde 1 = Pessoa e N = Carro. Uma situação simples onde, uma pessoa pode ter 0-N carros, gerando a chave estrangeira na tabela de Carro e operando com o "JOIN" em algumas telas da aplicação para a listagem do mesmo.


MYSQL SCRIPT 

Create database proficiency;
use proficiency;

Create table Pessoa (
idPessoa int primary key not null auto_increment,
nome varchar(255),
salario decimal(15,2)
);

Create table Carro(
idCarro int primary key not null auto_increment,
modelo varchar(255),
placa varchar(255),
proprietario int,
foreign key (proprietario) references pessoa(idPessoa)
);

ATTEMPT:

Configuração local XAMPP/WAMP 
HOST: localhost
USER: root
PASSWORD: (vazia)
BASE: proficiency
