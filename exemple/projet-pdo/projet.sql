-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 mai 2023 à 17:51
-- Version du serveur : 5.7.17
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
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
(1, 'stephane', '36bd4f73be32ed7262c164e7ee72163e7543989e', 1),
(2, 'stephane', '18fbde8f7d8c41c381fba45e2c013c450d0d0d08', 1);

-- --------------------------------------------------------

--
-- Structure de la table `quinte`
--

CREATE TABLE `quinte` (
  `id` tinyint(3) NOT NULL,
  `annee` year(4) NOT NULL,
  `descript` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_cs DEFAULT NULL,
  `lien` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `quinte`
--

INSERT INTO `quinte` (`id`, `annee`, `descript`, `lien`) VALUES
(1, 2000, 'R&eacute;sultats de 2000 bla bla bla blabla blabla blabla bla', 'https://perdu.com'),
(2, 2005, 'R&eacute;sultats de 2005 Les résultats de 2005 étaient vraiment...', 'http://www.chezmoicamarche.org/'),
(3, 2010, 'R&eacute;sultats de 2010 Une très belle année', 'https://www.ismycomputeronfire.com/'),
(4, 2015, 'Avec de la chance  notre meilleure année depuis 1920', 'http://www.fallingfalling.com/'),
(5, 2020, 'les plus récents une année Covid mémorable', 'http://www.staggeringbeauty.com/'),
(6, 2025, 'previsions', 'http://www.koalastothemax.com/');

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
(1, '174,36,164', '115.25', 'legende1 ', 2000, 1),
(2, '31,105,126', '120.00', 'Legende2', 2000, 2),
(3, '255,255,0', '60.00', 'legende33', 2000, 3),
(4, '89,120,204', '50.36', 'Legende1', 2005, 1),
(5, '32,176,53', '140.60', 'legende25', 2005, 2),
(6, '89,120,20', '103.00', 'Legende3', 2005, 3),
(7, '72,188,251', '75.20', 'legende1', 2010, 1),
(8, '250, 20,204', '160.80', 'Legende2', 2010, 2),
(9, '70,64,191', '80.00', 'legende32', 2010, 3),
(10, '243,224,50', '50.36', 'Legende11', 2015, 1),
(11, '89,120,120', '40.60', 'legende2', 2015, 2),
(12, '228,35,69', '88.00', 'Legende3', 2015, 3),
(13, '79,215,177', '50.36', 'Legende1', 2020, 1),
(14, '89,120,120', '40.60', 'legende2', 2020, 2),
(15, '89,120,20', '199.90', 'Legende3', 2020, 3),
(16, '148,95,95', '55.36', 'Legende1', 2025, 1),
(17, '89,220,120', '140.60', 'legende2', 2025, 2),
(18, '189,220,20', '109.90', 'Legende3', 2025, 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
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
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `resultats`
--
ALTER TABLE `resultats`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
