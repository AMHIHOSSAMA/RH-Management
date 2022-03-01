-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 14 fév. 2022 à 17:15
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion des employes`
--

-- --------------------------------------------------------

--
-- Structure de la table `employers`
--

CREATE TABLE `employers` (
  `Matricul` char(4) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Prénom` varchar(25) NOT NULL,
  `Date de naissance` date NOT NULL,
  `Département` varchar(25) NOT NULL,
  `Salaire` decimal(25,0) NOT NULL,
  `Fonction` varchar(25) NOT NULL,
  `Photo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employers`
--

INSERT INTO `employers` (`Matricul`, `Nom`, `Prénom`, `Date de naissance`, `Département`, `Salaire`, `Fonction`, `Photo`) VALUES
('2064', 'Bahi', 'Ahmed', '1993-02-04', 'Ressources humaines', '7000', 'gestionnaire  RH', 'https://www.studi.com/sit'),
('3945', 'HOUMRANI', 'Salim', '1995-05-09', 'Finances.', '7500', 'Comptable', 'https://encrypted-tbn0.gs'),
('2064', 'Bahi', 'Ahmed', '1993-02-04', 'Ressources humaines', '7000', 'gestionnaire  RH', 'https://www.studi.com/sit'),
('3945', 'HOUMRANI', 'Salim', '1995-05-09', 'Finances.', '7500', 'Comptable', 'https://encrypted-tbn0.gs'),
('0095', 'Manssour', 'Adil', '1980-03-20', 'Département légal', '8500', 'Avocat', 'https://encrypted-tbn0.gs'),
('1885', 'Dabir', 'Wasil', '1995-12-09', 'Recherche & Développement', '6500', 'Recherche Manager', 'https://encrypted-tbn0.gs'),
('6378', 'Marjani', 'Hanae', '1994-08-09', 'Marketing', '7000', 'Recherche de marché', 'https://www.adecco.fr/~/m'),
('2290', 'Kadir', 'Wiam', '1997-07-15', 'Contrôle de qualité', '8000', 'Qualité Manager', 'https://edito.regionsjob.'),
('4479', 'Ajhari', 'Nawal', '1990-02-28', 'Gestion', '7800', 'Gestion des projets', 'http://www.ac-nice.fr/sit'),
('5041', 'Bakkali', 'Mounir', '1997-02-02', 'Informatique', '8500', 'Web développeur', 'https://edito.regionsjob.'),
('5000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'mmm.png'),
('5000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'mmm.png'),
('5000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'mmm.png'),
('5000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'mmm.png'),
('5000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'logo.png'),
('2000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'logo.png'),
('2000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'logo.png'),
('2000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'logo.png'),
('2000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'logo.png'),
('2000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'logo.png'),
('2000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'logo.png'),
('2000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'logo.png'),
('2000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'logo.png'),
('2000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'logo.png'),
('2000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'logo.png'),
('2000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'logo.png'),
('2000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'logo.png'),
('2000', 'solta,ni', 'POP', '1995-01-31', '2', '8000', 'hj', 'logo.png'),
('2000', 'solta,ni', 'POP', '1995-01-31', '3', '8000', 'hj', 'logo.png'),
('2000', 'solta,ni', 'POP', '1995-01-31', '3', '8000', 'hj', 'logo.png'),
('5555', 'AMIR', 'POP', '1999-03-20', 'Département légal', '6000', 'hj', 'logo.png'),
('5555', 'AMIR', 'POP', '1999-03-20', 'Département légal', '6000', 'hj', 'logo.png'),
('5555', 'AMIR', 'POP', '1999-03-20', 'Département légal', '6000', 'hj', 'logo.png'),
('5555', 'AMIR', 'POP', '1999-03-20', 'Marketing', '6000', 'hj', 'logo.png'),
('5555', 'AMIR', 'POP', '1999-03-20', 'IT', '6000', 'hj', 'logo.png'),
('5555', 'AMIR', 'POP', '1999-03-20', 'IT', '6000', 'hj', 'logo.png'),
('5555', 'AMIR', 'POP', '1999-03-20', 'Finances', '6000', 'hj', 'logo.png'),
('2014', 'AMHIH', 'OSSAMA', '2001-09-06', 'Marketing', '6000', 'Digital Marketer', 'ossama.png'),
('2014', 'AMHIH', 'OSSAMA', '2001-09-06', 'Marketing', '6000', 'Digital Marketer', 'ossama.png'),
('2014', 'AMHIH', 'OSSAMA', '2001-09-06', 'Marketing', '6000', 'Digital Marketer', 'ossama.png'),
('2014', 'AMHIH', 'OSSAMA', '2001-09-06', 'Marketing', '6000', 'Digital Marketer', 'ossama.png'),
('2014', 'AMHIH', 'OSSAMA', '2001-09-06', 'Marketing', '6000', 'Digital Marketer', 'ossama.png'),
('8200', 'ZAWRI', 'SALMAN', '1998-03-12', 'Recherche & Développement', '6000', 'RD', 'logo.png'),
('8200', 'ZAWRI', 'SALMAN', '1998-03-12', 'Recherche & Développement', '6000', 'RD', 'logo.png');

-- --------------------------------------------------------

--
-- Structure de la table `test1`
--

CREATE TABLE `test1` (
  `id` int(10) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
