-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Listage des données de la table cinema.acteur : ~21 rows (environ)
DELETE FROM `acteur`;
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
	(12, 'Seydoux', 'Lea', 'femme', '1985-07-01'),
	(13, 'Brosnan', 'Pierce', 'homme', '1953-05-16'),
	(14, 'Berry', 'Halle', 'femme', '1966-08-14'),
	(15, 'Toby', 'Stephens', 'homme', '1969-04-21'),
	(16, 'Rosamund', 'Pike', 'femme', '1979-01-27'),
	(17, 'Holland', 'Tom', 'homme', '1996-06-01'),
	(18, 'Coleman', 'Zendaya', 'femme', '1996-09-01'),
	(19, 'Maguire', 'Tobey', 'homme', '1975-06-27'),
	(20, 'Garfield', 'Andrew', 'homme', '1983-08-20'),
	(21, 'toto', 'toto', 'homme', '2022-11-15');

-- Listage des données de la table cinema.casting : ~17 rows (environ)
DELETE FROM `casting`;
INSERT INTO `casting` (`id_casting`, `id_film`, `id_acteur`, `id_role`) VALUES
	(1, 2, 5, 5),
	(2, 2, 6, 6),
	(3, 2, 7, 7),
	(4, 2, 8, 8),
	(5, 1, 2, 2),
	(6, 1, 1, 1),
	(7, 1, 3, 3),
	(8, 1, 4, 4),
	(9, 3, 9, 9),
	(10, 3, 10, 10),
	(11, 3, 11, 11),
	(12, 3, 12, 12),
	(13, 4, 13, 9),
	(14, 4, 14, 14),
	(15, 4, 15, 15),
	(16, 4, 16, 16),
	(17, 5, 17, 17),
	(18, 5, 18, 18),
	(19, 5, 19, 17),
	(20, 5, 20, 17),
	(21, 2, 10, 9),
	(22, 2, 17, 2);

-- Listage des données de la table cinema.categorie : ~3 rows (environ)
DELETE FROM `categorie`;
INSERT INTO `categorie` (`id_categorie`, `nom`) VALUES
	(1, 'Fantasy'),
	(2, 'Aventure'),
	(3, 'Action');

-- Listage des données de la table cinema.film : ~5 rows (environ)
DELETE FROM `film`;
INSERT INTO `film` (`id_film`, `titre`, `date_sortie`, `synopsis`, `duree`, `id_categorie`, `id_realisateur`) VALUES
	(1, 'Le seigneur des anneaux : La Communauté de l\'anneau', '2001-12-19', 'Un jeune et timide `Hobbit\', Frodon Sacquet, hérite d\'un anneau magique. Bien loin d\'être une simple babiole, il s\'agit d\'un instrument de pouvoir absolu qui permettrait à Sauron, le `Seigneur des ténèbres\', de régner sur la `Terre du Milieu\' et de réduire en esclavage ses peuples. Frodon doit parvenir jusqu\'à la `Crevasse du Destin\' pour détruire l\'anneau.', 178, 1, 1),
	(2, 'Harry Potter à l\'école des sorciers', '2001-12-06', 'Harry Potter, un jeune orphelin, est élevé par son oncle et sa tante qui le détestent. Alors qu\'il était haut comme trois pommes, ces derniers lui ont raconté que ses parents étaient morts dans un accident de voiture.', 152, 2, 2),
	(3, 'Mourir peut attendre', '2021-10-06', 'James Bond n\'est plus en service et profite d\'une vie tranquille en Jamaïque. Mais son répit est de courte durée car l\'agent de la CIA Felix Leiter fait son retour pour lui demander son aide. Sa mission, qui est de secourir un scientifique kidnappé, va se révéler plus traître que prévu, et mener 007 sur la piste d\'un méchant possédant une nouvelle technologie particulièrement dangereuse.', 163, 3, 3),
	(4, 'Meurs un autre jour', '2002-11-20', 'James Bond s\'apprête à dévoiler au monde entier que le colonel Moon détient des armes de guerre hautement sophistiquées. Cependant, celui-ci se montre rusé et fait prisonnier l\'agent 007. Grâce à l\'agent de la CIA Falco, James Bond réussit à s\'évader du pénitencier. Au même moment, le colonel Moon tente de déstabiliser les pourparlers entre la Corée du Nord et la Corée du Sud afin de déclencher une nouvelle guerre contre le Japon.', 133, 3, 4),
	(5, 'Spider-Man : No Way Home', '2022-09-07', 'Avec l\'identité de Spiderman désormais révélée, celui-ci est démasqué et n\'est plus en mesure de séparer sa vie normale en tant que Peter Parker des enjeux élevés d\'être un superhéros. Lorsque Peter demande de l\'aide au docteur Strange, les enjeux deviennent encore plus dangereux, l\'obligeant à découvrir ce que signifie vraiment être Spiderman.', 150, 3, 5);

-- Listage des données de la table cinema.realisateur : ~5 rows (environ)
DELETE FROM `realisateur`;
INSERT INTO `realisateur` (`id_realisateur`, `nom`, `prenom`, `sexe`, `date_naissance`) VALUES
	(1, 'Jackson', 'Peter', 'homme', '1961-10-31'),
	(2, 'Colombus', 'Chris', 'homme', '1958-10-10'),
	(3, 'Fukunaga', 'Cary', 'homme', '1997-07-10'),
	(4, 'Tamahori', 'Lee', 'homme', '1950-06-17'),
	(5, 'Watts', 'Jon', 'homme', '1981-06-28');

-- Listage des données de la table cinema.role : ~19 rows (environ)
DELETE FROM `role`;
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
	(13, 'Miss Moneypenny'),
	(14, 'Jinx'),
	(15, 'Gustave Graves'),
	(16, 'Miranda Frost'),
	(17, 'Spider-Man (Peter Parker)'),
	(18, 'Michelle Jones');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
