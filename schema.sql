CREATE DATABASE DevTest;

CREATE TABLE Address (
	id_address INT(11) NOT NULL AUTO_INCREMENT,

	street varchar(255),
	number varchar(255),
	city varchar(255),

	PRIMARY KEY (id_address)
);

CREATE TABLE User (
	id_user INT(11) NOT NULL AUTO_INCREMENT,
	id_address INT(11),

	name varchar(255),
	phone varchar(255),
	email varchar(255),

	PRIMARY KEY (id_user),
	FOREIGN KEY (id_address) REFERENCES Address(id_address)
);

INSERT INTO `DevTest`.`User` 
		(`id_user`, `id_address`, `Name`, `Phone`, `Email`)
	VALUES
		('1', NULL, 'Invalid Bruno', '11 95287-4246', 'mbrunocesar@gmail.com');

INSERT INTO `DevTest`.`User` 
		(`id_user`, `id_address`, `Name`, `Phone`, `Email`)
	VALUES
		('2', NULL, 'Invalid Cesar', '11 95287-4246', 'bruno.cesar.paula@usp.br');

INSERT INTO `DevTest`.`User` 
		(`id_user`, `id_address`, `Name`, `Phone`, `Email`)
	VALUES
		('123', NULL, 'Common User', '11 98765-4321', 'nowhere@noplace.com');



