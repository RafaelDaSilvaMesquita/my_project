CREATE TABLE IF NOT EXISTS `diapo` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `annee` year NOT NULL,
  `texte` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `diapo_chiffre` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `legende` varchar(100) NOT NULL,
  `valeur` float NOT NULL ,
  `dipao_id` smallint(5) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`dipao_id`) REFERENCES diapo(`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;