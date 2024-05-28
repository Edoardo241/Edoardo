-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Creato il: Mag 16, 2024 alle 07:38
-- Versione del server: 8.0.30
-- Versione PHP: 8.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Informazioni`
--

-- --------------------------------------------------------
CREATE TABLE `Info` (
  `genere` varchar(2) NOT NULL,
  `denominazione` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `Info` (`genere`, `denominazione`) VALUES
('FN', 'Fantascientifico'),
('HR', 'Horror'),
('RM', 'Romantico'),
('CM', 'Comico');

CREATE TABLE `Libri` (
    `id_libro` CHAR(2) NOT NULL,
    `nome` VARCHAR(32) NOT NULL,
    `genere` VARCHAR(32) NOT NULL,
    PRIMARY KEY (`id_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `Libri` (`id_libro`, `nome`, `genere`) VALUES
('01', 'Marte', 'FN');


CREATE TABLE `utenti` (
  `username` varchar(16) NOT NULL,
  `password` varchar(256) NOT NULL,
  `DB_username` varchar(16) NOT NULL,
  `DB_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `utenti` (`username`, `password`, `DB_username`, `DB_password`) VALUES
('admin', '*0', 'root', ''),
('user', '*0', 'root', '');

ALTER TABLE `Info`
  ADD PRIMARY KEY (`genere`);

ALTER TABLE `libri`
  ADD PRIMARY KEY (`id_libro`);

ALTER TABLE `utenti`
  ADD PRIMARY KEY (`username`);

ALTER TABLE `libri`
  ADD CONSTRAINT `chiave_esterna` FOREIGN KEY (`genere`) REFERENCES `info` (`genere`);
COMMIT;
  /*ADD KEY `chiave_esterna` (`genere`)*/


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
