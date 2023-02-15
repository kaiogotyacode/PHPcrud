# PHPcrud - Luciene LP2
Implementing a PHP crud to apply in my proficiency exam on college.

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
