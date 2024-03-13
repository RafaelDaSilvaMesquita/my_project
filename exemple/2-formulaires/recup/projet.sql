-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 13 juil. 2017 à 09:04
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
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` tinyint(1) NOT NULL,
  `login` varchar(20) NOT NULL,
  `pwd` varchar(41) NOT NULL,
  `niveau` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `pwd`, `niveau`) VALUES
(1, 'stephane', '36bd4f73be32ed7262c164e7ee72163e7543989e', 1);

-- --------------------------------------------------------

--
-- Structure de la table `quinte`
--

CREATE TABLE `quinte` (
  `id` tinyint(3) NOT NULL,
  `annee` year(4) NOT NULL,
  `descript` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_cs DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `quinte`
--

INSERT INTO `quinte` (`id`, `annee`, `descript`) VALUES
(1, 2000, 'R&eacute;sultats de 2000 bla bla bla blabla blabla blabla bla'),
(2, 2005, 'R&eacute;sultats de 2005 bla bla bla blabla blabla blabla bla'),
(3, 2010, 'R&eacute;sultats de 2010 bla bla bla blabla blabla blabla bla'),
(4, 2015, 'Avec de la chance  bla bla bla blabla blabla blabla bla'),
(5, 2020, 'previsions');

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

CREATE TABLE `resultats` (
  `id` tinyint(3) NOT NULL,
  `coul` varchar(15) NOT NULL,
  `valeur` decimal(9,2) NOT NULL,
  `legende` varchar(30) DEFAULT NULL,
  `quinte_annee` year(4) NOT NULL,
  `ordre` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `resultats`
--

INSERT INTO `resultats` (`id`, `coul`, `valeur`, `legende`, `quinte_annee`, `ordre`) VALUES
(1, '255, 23, 23', '15.23', 'legende1', 2000, 1),
(2, '155, 23, 23', '20.00', 'Legende2', 2000, 2),
(3, '255,255,0', '60.00', 'legende33', 2000, 3),
(4, '89, 120, 204', '50.36', 'Legende1', 2005, 1),
(5, '187,179,21', '40.60', 'legende2', 2005, 2),
(6, '89, 120, 20', '10.00', 'Legende3', 2005, 3),
(7, '72,188,251', '75.00', 'legende1', 2010, 1),
(8, '250, 120, 204', '10.00', 'Legende2', 2010, 2),
(9, '70,64,191', '10.00', 'legende32', 2010, 3),
(10, '215,92,79', '50.36', 'Legende1', 2015, 1),
(11, '89, 120, 120', '40.60', 'legende2', 2015, 2),
(12, '89, 120, 20', '10.00', 'Legende3', 2015, 3),
(13, '89, 120, 204', '50.36', 'Legende1', 2020, 1),
(14, '89, 120, 120', '40.60', 'legende2', 2020, 2),
(15, '89, 120, 20', '10.00', 'Legende3', 2020, 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `quinte`
--
ALTER TABLE `quinte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `resultats`
--
ALTER TABLE `resultats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `quinte`
--
ALTER TABLE `quinte`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `resultats`
--
ALTER TABLE `resultats`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
