-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 11 sep. 2020 à 16:39
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : ` to do list`
--

-- --------------------------------------------------------

--
-- Structure de la table `a faire`
--

CREATE TABLE `a faire` (
  `A faire` text NOT NULL,
  `Terminée` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `a faire`
--

INSERT INTO `a faire` (`A faire`, `Terminée`) VALUES
('- Aller à la préfecture\r\n- Vendre un poumon pour payer l\'ISEG', '- Racheter un kit déco pour l\'auto\r\n- Acheter des billets pour le plus petit cabaret du monde\r\n- ');

-- --------------------------------------------------------

--
-- Structure de la table `terminée`
--

CREATE TABLE `terminée` (
  `Terminée` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
