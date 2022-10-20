-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour cinema
CREATE DATABASE IF NOT EXISTS `cinema` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cinema`;

-- Listage de la structure de la table cinema. acteur
CREATE TABLE IF NOT EXISTS `acteur` (
  `id_acteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  PRIMARY KEY (`id_acteur`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Listage des données de la table cinema.acteur : ~12 rows (environ)
/*!40000 ALTER TABLE `acteur` DISABLE KEYS */;
INSERT INTO `acteur` (`id_acteur`, `nom`, `prenom`, `sexe`, `date_naissance`) VALUES
	(1, 'Wood', 'Elijah', 'homme', '1981-01-28'),
	(2, 'Mortensen', 'Viggo', 'homme', '1958-10-20'),
	(3, 'Blanchett', 'Cate', 'femme', '1969-05-14'),
	(4, 'McKellen', 'ian', 'homme', '1939-05-25'),
	(5, 'Radcliffe', 'Daniel', 'homme', '1989-07-23'),
	(6, 'Watson', 'Emma', 'femme', '1990-04-15'),
	(7, 'Rupert', 'Grint', 'homme', '1988-08-24'),
	(8, 'Rickman', 'Alan', 'homme', '1946-02-21'),
	(9, 'Craig', 'Daniel', 'homme', '1968-03-02'),
	(10, 'Malek', 'Rami', 'homme', '1981-05-12'),
	(11, 'Lynch', 'Lashana', 'femme', '1987-11-27'),
	(12, 'Seydoux', 'Lea', 'femme', '1985-07-01');
/*!40000 ALTER TABLE `acteur` ENABLE KEYS */;

-- Listage de la structure de la table cinema. casting
CREATE TABLE IF NOT EXISTS `casting` (
  `id_casting` int(11) NOT NULL AUTO_INCREMENT,
  `id_film` int(11) DEFAULT NULL,
  `id_acteur` int(11) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_casting`),
  KEY `FK_casting_film` (`id_film`),
  KEY `FK_casting_acteur` (`id_acteur`),
  KEY `FK_casting_role` (`id_role`),
  CONSTRAINT `FK_casting_acteur` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`),
  CONSTRAINT `FK_casting_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  CONSTRAINT `FK_casting_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table cinema.casting : ~0 rows (environ)
/*!40000 ALTER TABLE `casting` DISABLE KEYS */;
/*!40000 ALTER TABLE `casting` ENABLE KEYS */;

-- Listage de la structure de la table cinema. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Listage des données de la table cinema.categorie : ~3 rows (environ)
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` (`id_categorie`, `nom`) VALUES
	(1, 'Fantasy'),
	(2, 'Aventure'),
	(3, 'Action');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;

-- Listage de la structure de la table cinema. film
CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `date_sortie` date NOT NULL,
  `synopsis` longtext,
  `duree` time NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_realisateur` int(11) NOT NULL,
  PRIMARY KEY (`id_film`),
  KEY `FK_film_categorie` (`id_categorie`),
  KEY `FK_film_realisateur` (`id_realisateur`),
  CONSTRAINT `FK_film_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`),
  CONSTRAINT `FK_film_realisateur` FOREIGN KEY (`id_realisateur`) REFERENCES `realisateur` (`id_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Listage des données de la table cinema.film : ~3 rows (environ)
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` (`id_film`, `titre`, `date_sortie`, `synopsis`, `duree`, `id_categorie`, `id_realisateur`) VALUES
	(1, 'Le Seigneur des anneaux : La Communauté de l\'anneau', '2001-12-19', 'Un jeune et timide `Hobbit\', Frodon Sacquet, hérite d\'un anneau magique. Bien loin d\'être une simple babiole, il s\'agit d\'un instrument de pouvoir absolu qui permettrait à Sauron, le `Seigneur des ténèbres\', de régner sur la `Terre du Milieu\' et de réduire en esclavage ses peuples. Frodon doit parvenir jusqu\'à la `Crevasse du Destin\' pour détruire l\'anneau.', '02:58:00', 1, 1),
	(2, 'Harry potter à l\'école des sorciers', '2001-12-05', 'Harry Potter, un jeune orphelin, est élevé par son oncle et sa tante qui le détestent. Alors qu\'il était haut comme trois pommes, ces derniers lui ont raconté que ses parents étaient morts dans un accident de voiture.', '02:32:00', 2, 2),
	(3, 'Mourir peut attendre', '2021-10-06', 'James Bond n\'est plus en service et profite d\'une vie tranquille en Jamaïque. Mais son répit est de courte durée car l\'agent de la CIA Felix Leiter fait son retour pour lui demander son aide. Sa mission, qui est de secourir un scientifique kidnappé, va se révéler plus traître que prévu, et mener 007 sur la piste d\'un méchant possédant une nouvelle technologie particulièrement dangereuse.', '02:43:00', 3, 3);
/*!40000 ALTER TABLE `film` ENABLE KEYS */;

-- Listage de la structure de la table cinema. realisateur
CREATE TABLE IF NOT EXISTS `realisateur` (
  `id_realisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  PRIMARY KEY (`id_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Listage des données de la table cinema.realisateur : ~3 rows (environ)
/*!40000 ALTER TABLE `realisateur` DISABLE KEYS */;
INSERT INTO `realisateur` (`id_realisateur`, `nom`, `prenom`, `sexe`, `date_naissance`) VALUES
	(1, 'Jackson', 'Peter', 'homme', '1961-10-31'),
	(2, 'Colombus', 'Chris', 'homme', '1958-10-10'),
	(3, 'Fukunaga', 'Cary', 'homme', '1997-07-10');
/*!40000 ALTER TABLE `realisateur` ENABLE KEYS */;

-- Listage de la structure de la table cinema. role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Listage des données de la table cinema.role : ~13 rows (environ)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`id_role`, `nom`) VALUES
	(1, 'Frodon'),
	(2, 'Aragon'),
	(3, 'Galadriel'),
	(4, 'Gandalf'),
	(5, 'Harry Potter'),
	(6, 'Hermione Granger'),
	(7, 'Ron Weasley'),
	(8, 'Severus Rogue'),
	(9, 'James Bond'),
	(10, 'Lyutsifer Safin'),
	(11, 'Nomi'),
	(12, 'Madeleine Swann'),
	(13, 'Miss Moneypenny');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
