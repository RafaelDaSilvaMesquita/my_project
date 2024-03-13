-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 25 juil. 2017 à 12:43
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
-- Base de données :  `phh`
--

-- --------------------------------------------------------

--
-- Structure de la table `ajax`
--

CREATE TABLE `ajax` (
  `id` tinyint(3) NOT NULL,
  `film_id` tinyint(2) NOT NULL,
  `film` varchar(30) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `acteur` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ajax`
--

INSERT INTO `ajax` (`id`, `film_id`, `film`, `pseudo`, `acteur`) VALUES
(1, 3, 'V for Vendetta', 'V', 'Hugo Weaving'),
(2, 3, 'V for Vendetta', 'Evey Hamm', 'Natalie Portman'),
(3, 4, 'Blues brothers', 'Elwood Blues', 'Dan Aykrod'),
(4, 4, 'Blues brothers', 'Jake Blues', 'John Belushi'),
(5, 4, 'Blues brothers', 'Mystery Women', 'Carrie Fisher'),
(6, 4, 'Blues brothers', 'Mrs Murphy', 'Aretha Franklin'),
(8, 1, 'Les Tontons Fligueurs', 'Raoul Volfoni', 'Bernard Blier'),
(7, 1, 'Les Tontons Fligueurs', 'Fernand Naudin', 'Lino Ventura'),
(9, 2, 'La guerres des étoile V', 'Luke Skywalker', 'Mark Hamill'),
(10, 2, 'La guerres des étoile V', 'Leîa Organa Solo', 'Carie Fisher');

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id` smallint(5) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id`, `pseudo`, `prenom`, `nom`) VALUES
(1, 'Fernand Naudin', 'Lino', 'Ventura'),
(2, 'Raoul Volfoni', 'Bernard', 'Blier'),
(3, 'Elwood', 'Jonny', ' Rosch'),
(4, 'Anonymus', 'Anonymus', 'Anonimus');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id` smallint(5) NOT NULL,
  `titre` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `date` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id`, `titre`, `date`) VALUES
(1, 'Les Tontons Fligueurs', 1963),
(2, 'La guerre des étoiles V', 1980),
(3, 'V for Vendetta', 2005),
(4, 'The blues brothers', 1980);

-- --------------------------------------------------------

--
-- Structure de la table `repliques`
--

CREATE TABLE `repliques` (
  `id` smallint(5) NOT NULL,
  `texte` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `film_id` smallint(5) DEFAULT NULL,
  `acteur_id` smallint(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `repliques`
--

INSERT INTO `repliques` (`id`, `texte`, `film_id`, `acteur_id`) VALUES
(1, 'Patricia, mon petit… Je ne voudrais pas te paraître vieux jeu ni encore moins grossier… l\'homme de la pampa, parfois rude, reste toujours courtois, mais la vérité m\'oblige à te le dire : ton Antoine commence à me les briser MENUES!', 1, 1),
(2, 'Non mais t\'as déjà vu ça? En pleine paix! Il chante et puis crac, un bourre-pif! Il est complètement fou ce mec. Mais moi, les dingues, je les soigne. Je vais lui faire une ordonnance, et une sévère… Je vais lui montrer qui c\'est Raoul. Aux quatre coins de Paris qu\'on va le retrouver, éparpillé par petits bouts, façon Puzzle. Moi, quand on m\'en fait trop je correctionne plus : je dynamite, je disperse, je ventile!', 1, 2),
(3, 'Les cons, ça ose tout! C\'est même à ça qu\'on les reconnaît.', 1, 1),
(4, ' It’s a 106 miles to Chicago, we’ve got a full tank of gas, half a packet of cigarettes, it’s dark and we’re wearing sunglasses. - Hit it', 4, 3),
(5, 'On peut abandonner son intégrité pour presque rien mais c’est tout ce que nous possédons réellement, tout ce qui nous reste à la fin. Et dans ce petit espace nous sommes libres. ', 3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `ttoto`
--

CREATE TABLE `ttoto` (
  `id` tinyint(3) NOT NULL,
  `nomprenom` varchar(180) CHARACTER SET utf8 NOT NULL,
  `texte` text CHARACTER SET utf8,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ttoto`
--

INSERT INTO `ttoto` (`id`, `nomprenom`, `texte`, `date`) VALUES
(1, 'kjhk kjhjhjhkjhk jjkbjb', ' nbvjjvvjhvjhvjhv', '2017-07-11');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ajax`
--
ALTER TABLE `ajax`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `repliques`
--
ALTER TABLE `repliques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ttoto`
--
ALTER TABLE `ttoto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `repliques`
--
ALTER TABLE `repliques`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `ttoto`
--
ALTER TABLE `ttoto`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
