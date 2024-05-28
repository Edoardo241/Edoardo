CREATE DATABASE informazioni;

USE informazioni;

CREATE TABLE Info (
	genere VARCHAR(2) NOT NULL,
	denominazione VARCHAR (16) NOT NULL,
	CONSTRAINT chiave_primaria PRIMARY KEY (genere)
);

INSERT INTO Info (genere, denominazione) VALUES
('FN', 'Marte');

CREATE TABLE Libri(
	id_libro VARCHAR (2) NOT NULL,
	nome VARCHAR (32) NOT NULL,
	genere VARCHAR (32) NOT NULL,
	CONSTRAINT chiave_primaria PRIMARY KEY (id_libro),
	CONSTRAINT chiave_esterna FOREIGN KEY (genere) REFERENCES Info(genere)
	);

INSERT INTO Libri(id_libro, nome, genere) VALUES
('01', 'Marte', 'FN');


CREATE TABLE Utenti (
	id_utente VARCHAR (2) NOT NULL,
	Nome VARCHAR (32) NOT NULL,
	Cognome VARCHAR (32) NOT NULL,
	CONSTRAINT chiave_primaria PRIMARY KEY (id_utente),
	CONSTRAINT chiave_esterna FOREIGN KEY (genere) REFERENCES Info(genere)
	);
