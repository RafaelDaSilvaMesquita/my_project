-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 07 Mars 2014 à 16:46
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `diapo`
--

CREATE TABLE IF NOT EXISTS `diapo` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `annee` year(4) NOT NULL,
  `texte` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `diapo`
--

INSERT INTO `diapo` (`id`, `annee`, `texte`) VALUES
(1, 2000, 'Chiffres de l''annee 2000'),
(2, 2010, 'Chiffres de l''annee 2010'),
(3, 2012, 'Chiffres de l''annee 2012'),
(4, 2015, 'Chiffres de l''annee 2015');

-- --------------------------------------------------------

--
-- Structure de la table `diapo_chiffre`
--

CREATE TABLE IF NOT EXISTS `diapo_chiffre` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `legende` varchar(100) NOT NULL,
  `valeur` float NOT NULL,
  `couleur` varchar(12) NOT NULL,
  `diapo_id` smallint(5) NOT NULL,
  `couleur_texte` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `dipao_id` (`diapo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `diapo_chiffre`
--

INSERT INTO `diapo_chiffre` (`id`, `legende`, `valeur`, `couleur`, `diapo_id`, `couleur_texte`) VALUES
(1, 'Janvier', 53, '200,150,142', 1, '255,255,255'),
(2, 'Février', 62, '230,145,210', 1, '255,255,255'),
(3, 'Mars', 25, '121, 248, 24', 1, '255,255,255'),
(4, 'Avril', 75, '139, 108, 66', 1, '255,255,255'),
(6, 'Mai', 120, '187, 172, 17', 1, '255,255,255'),
(7, 'Juin', 40, '199, 44, 72', 1, '255,255,255'),
(8, 'Juillet', 190, '127, 221, 76', 1, '255,255,255'),
(10, 'Aout', 159, '76,166,107', 1, '55,0,40'),
(11, 'septembre', 199, '102, 0, 153', 1, '218, 112, 21'),
(12, 'octobre', 156, '217, 1, 21', 1, '107, 13, 13');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nom` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`nom`, `password`, `id`) VALUES
('etienne', 'tvcptdb', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `diapo_chiffre`
--
ALTER TABLE `diapo_chiffre`
  ADD CONSTRAINT `diapo_chiffre_ibfk_1` FOREIGN KEY (`diapo_id`) REFERENCES `diapo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
