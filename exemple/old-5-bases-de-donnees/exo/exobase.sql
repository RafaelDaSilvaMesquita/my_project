-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 26 nov. 2018 à 17:06
-- Version du serveur :  5.7.17
-- Version de PHP :  7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exobase`
--

-- --------------------------------------------------------

--
-- Structure de la table `diapo`
--

CREATE TABLE `diapo` (
  `id` tinyint(2) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `couleur` varchar(30) NOT NULL,
  `num` tinyint(2) NOT NULL,
  `descript` varchar(200) NOT NULL,
  `statut` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `diapo`
--

INSERT INTO `diapo` (`id`, `titre`, `couleur`, `num`, `descript`, `statut`) VALUES
(1, 'titre 1', 'LightPink', 1, 'texte descript texte descript texte descript texte descript ', 1),
(2, 'titre 2', 'LightGray', 2, 'texte descript texte descript texte descript texte descript ', 1),
(3, 'titre 3', 'Blue', 3, 'texte descript texte descript texte descript texte descript ', 1),
(4, 'titre 4', 'Crimson', 4, 'texte descript texte descript texte descript texte descript ', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `diapo`
--
ALTER TABLE `diapo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `diapo`
--
ALTER TABLE `diapo`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
