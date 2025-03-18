-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2025 at 09:15 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsb`
--

-- --------------------------------------------------------

--
-- Table structure for table `activitées`
--

DROP TABLE IF EXISTS `activitées`;
CREATE TABLE IF NOT EXISTS `activitées` (
  `idA` varchar(50) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `date_activite` date DEFAULT NULL,
  PRIMARY KEY (`idA`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `activitées`
--

INSERT INTO `activitées` (`idA`, `nom`, `description`, `date_activite`) VALUES
('A1', 'Yoga', 'Séance de relaxation et souplesse', '2024-04-15'),
('A2', 'Marche nordique', 'Activité physique en plein air', '2024-05-10'),
('A3', 'Atelier nutrition', 'Équilibre alimentaire et bien-être', '2024-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `interagis`
--

DROP TABLE IF EXISTS `interagis`;
CREATE TABLE IF NOT EXISTS `interagis` (
  `id` int NOT NULL,
  `id_1` int NOT NULL,
  PRIMARY KEY (`id`,`id_1`),
  KEY `id_1` (`id_1`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `interagis`
--

INSERT INTO `interagis` (`id`, `id_1`) VALUES
(1, 2),
(1, 3),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `medicaments`
--

DROP TABLE IF EXISTS `medicaments`;
CREATE TABLE IF NOT EXISTS `medicaments` (
  `id` int NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `effet_therapeutiques` varchar(50) DEFAULT NULL,
  `effet_secondaires` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `medicaments`
--

INSERT INTO `medicaments` (`id`, `nom`, `effet_therapeutiques`, `effet_secondaires`) VALUES
(1, 'Paracétamol', 'Antalgique, Antipyrétique', 'Nausées, Maux de tête'),
(2, 'Ibuprofène', 'Anti-inflammatoire, Antalgique', 'Troubles digestifs, Vertiges'),
(3, 'Amoxicilline', 'Antibiotique, Antibactérien', 'Allergies, Diarrhée, Éruptions cutanées');

-- --------------------------------------------------------

--
-- Table structure for table `s_inscrire`
--

DROP TABLE IF EXISTS `s_inscrire`;
CREATE TABLE IF NOT EXISTS `s_inscrire` (
  `idA` varchar(50) NOT NULL,
  `idU` int NOT NULL,
  `date_inscription` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idA`,`idU`),
  KEY `idU` (`idU`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `s_inscrire`
--

INSERT INTO `s_inscrire` (`idA`, `idU`, `date_inscription`) VALUES
('A1', 101, '2024-03-20'),
('A2', 102, '2024-04-01'),
('A3', 103, '2024-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `idU` int NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idU`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idU`, `nom`, `prenom`, `mail`) VALUES
(101, 'Dupont', 'Alice', 'alice.dupont@email.com'),
(102, 'Martin', 'Jean', 'jean.martin@email.com'),
(103, 'Lemoine', 'Sophie', 'sophie.lemoine@email.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
