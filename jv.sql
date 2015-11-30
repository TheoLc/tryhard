-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 29 Novembre 2015 à 21:41
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `jv`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL,
  `nickname` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=147 ;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passwd` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` char(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `login`, `passwd`, `adresse`, `email`) VALUES
(1, 'Tchatat', 'Noutcha', 'tchata_n', 'azerty0000', '15 Rue Maurice Grandcoing 94200 Ivry-sur-Seine', 'tchata_n@etna-alternance.net'),
(2, 'Kanagaratnam', 'Thilakzan', 'kanaga_t', 'azerty0000', '15 Rue Maurice Grandcoing 94200 Ivry-sur-Seine', 'kanaga_t@etna-alternance.net'),
(3, 'Lo Castro', 'Theo', 'locast_t', 'azerty0000', '15 Rue Maurice Grandcoing 94200 Ivry-sur-Seine', 'locast_t@etna-alternance.net');

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nickname` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort1` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort2` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `editor1` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `editor2` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` char(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `price` float DEFAULT NULL,
  `Console1` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Console2` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Console3` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Console4` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Console5` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Console6` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Contenu de la table `games`
--

INSERT INTO `games` (`id`, `name`, `nickname`, `sort1`, `sort2`, `editor1`, `editor2`, `description`, `price`, `Console1`, `Console2`, `Console3`, `Console4`, `Console5`, `Console6`) VALUES
(1, 'Call of Duty :Black Ops 3', 'COD', 'FPS', 'Shooter', 'Beenox', 'Treyarch', 'Avec Black Ops 3, Treyarch tente le pari de modifier son approche traditionnelle de la série des Black Ops.', 70, 'PC', 'PS4', 'ONE', NULL, NULL, NULL),
(2, 'FIFA 16', 'FIFA', 'Sport', 'Football', 'EA sports', NULL, 'FIFA 16 est un jeu de simulation footballistique publié par EA. Référence pour beaucoup de joueurs depuis de nombreuses années, le titre nous revient en 2016 avec une nouvelle mouture.', 70, 'PC', 'PS4', 'One', NULL, NULL, NULL),
(3, 'World of Warcraft', 'WOW', 'RPG', 'MMO', 'Blizzard Entertainment', NULL, 'Jeu de rôle en ligne massivement multijoueur, World of Warcraft vous transporte dans le monde heroic-fantasy d''Azeroth où la guerre fait rage entre la Horde et l''Alliance. Incarnez les nombreuses races du jeu (Humains, Pandaren et bien d''autres).', 40, 'PC', NULL, NULL, NULL, NULL, NULL),
(4, 'Grand Theft Auto V', 'GTA', 'Action', 'Aventure', 'Rockstar Games', 'Take-Two Interactive', 'Jeu d''action-aventure en monde ouvert, Grand Theft Auto (GTA) V vous place dans la peau de trois personnages inédits : Michael, Trevor et Franklin qui ont élu domicile à Los Santos, ville de la région.', 50, 'PS4', 'PC', 'One', NULL, NULL, NULL),
(5, 'Battlefield 4', 'BF4', 'FPS', 'Shooter', 'Electronic Arts', NULL, 'Battlefield 4 est un FPS orienté multijoueur, mais disposant tout de même d''une campagne solo, qui propose de prendre part à des batailles à grande échelle au sein d''escouades.', 30, 'PS4', 'PS3', 'One', 'PC', NULL, NULL),
(6, 'Assassin&#39;s Creed Syndicat', 'ACS', 'Action', 'Aventure', 'Ubisoft', NULL, 'Prenant place dans le Londres de l''époque victorienne, Assassin''s Creed Syndicate est un jeu d''action-aventure en monde ouvert.', 80, 'PS4', 'ONE', 'PC', NULL, NULL, NULL),
(7, 'Need For Speed', 'NFS', 'Course', 'Voiture', 'Electronic Arts', NULL, 'Need For Speed est un jeu de course mettant en scène des courses illégales. De nuit, le joueur est invité à parcourir un monde ouvert.', 60, 'PC', 'PS4', 'ONE', 'VITA', NULL, NULL),
(8, 'Rise of the Tomb Raider', 'TR', 'Action', 'Aventure', 'Square Enix', 'Microsoft Studios', 'D''après les premières images de la bande-annonce diffusée à l''occasion de l''E3 2014, l''histoire se passe peu de temps après les événements de Tomb Raider, avec une Lara Croft plus adulte et tourmentée à la suite de son précédent périple.', 60, 'PC', 'PS4', 'ONE', NULL, NULL, NULL),
(9, 'Mortal Kombat X', 'MK', 'Combat', NULL, 'Warner Bros Games', NULL, 'Mortal Kombat X sur PS4 est le dixième opus de la série de jeux de combats du même nom. Choisissez parmi les 24 personnages disponibles et affrontez-vous au cours de batailles particulièrement gores.', 40, 'PC', 'PS4', 'ONE', 'VITA', NULL, NULL),
(10, 'Just Cause 3', 'JC3', 'Aventure', 'Action', 'Square Enix', '', 'Jeu d''aventure et d''action pour PS4 se passant en méditerranée, Just Cause 3 donne l''occasion au joueur de se mesurer à une dictature. Il doit en effet lutter au cours de ses missions contre le règne.', 80, 'PC', 'PS4', 'ONE', NULL, NULL, NULL),
(11, 'Mario Tennis Ultra Smash', 'Mario', 'Tennis', 'Sport', 'Nintendo', NULL, 'Mario Tennis: Ultra Smash propose des matchs de tennis en simple ou en double se déroulant dans l''univers de Super Mario. Différents modes de jeu sont proposés, comme des matchs de tennis classiques.', 40, 'WIIU', NULL, NULL, NULL, NULL, NULL),
(12, 'Lego Jurassic World', 'JW', 'Action', 'Aventure', 'WB Games', NULL, 'Le titre se présente sous la forme d''un jeu d''action-aventure : il est alors possible de revivre les aventures des films tant du côté des protagonistes que du côté des dinosaures, laissant ainsi plus ample liberté au joueur.', 40, 'PC', 'PS4', 'WIIU', '3DS', 'VITA', NULL),
(13, 'Tom Clancy&#39;s Rainbow Six: Siege', 'TCRS', 'FPS', 'Action', 'Ubisoft', NULL, 'Rainbow Six: Siege est un jeu de tir tactique où le joueur incarne différents opérateurs de cinq forces spéciales (SWAT FBI, SAS, GIGN, GSG-9 et Spetsnaz).', 50, 'PS4', 'PC', 'ONE', NULL, NULL, NULL),
(14, 'Splatoon', 'SP', 'Shooter', NULL, 'Nitendo', NULL, 'Splatoon est un jeu de tir et d''action pour WiiU faisant la part belle au multijoueur. Pouvant accueillir jusqu''à 8 participants répartis en deux équipes, le jeu demande aux joueurs de s''affronter à l''aide de peinture et de transformations en calamars.', 20, 'WIIU', NULL, NULL, NULL, NULL, NULL),
(15, 'Batman: Arkham Knight', 'Bat', 'Action', 'Aventure', 'Warner Bros', NULL, 'Se déroulant un an après les événements de Batman Arkham City, Batman Arkham Knight est un jeu d''action dans lequel l’Épouvantail menace d''utiliser des armes chimiques sur la ville.', 50, 'PC', 'PS4', 'ONE', NULL, NULL, NULL),
(16, 'Metal Gear Solid V', 'MGS', 'Action', NULL, 'Konami', NULL, 'Metal Gear Solid V : The Phantom Pain nous permet de retrouver Big Boss qui va devoir séjourner quelque temps en Afghanistan et en Afrique pour mener à bien la nouvelle mission qui lui est confié. Pour se faire, il pourra compter sur son ami de toujours,', 50, 'PC', 'PS4', 'ONE', NULL, NULL, NULL),
(17, 'NBA 2K16', 'NBA', 'Sport', '', '2K Sports', NULL, 'NBA 2K16 est un jeu de sport permettant de pratiquer le basket-ball. Les animations des joueurs sont créées de façon à donner un rendu visuel et technique le plus réaliste possible.', 50, 'PS4', 'PC', 'One', NULL, NULL, NULL),
(18, 'WWE 2K16', 'WWE', 'Sport', 'Combat', '2K Sports', NULL, 'WWE 2K16 est le troisième opus de la série WWE 2K et le second à arriver sur la 8ème génération de consoles. Dans ce jeu de catch, vous pouvez incarner votre catcheur favori dans de nombreux types de combat.', 45, 'PC', 'PS4', 'ONE', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE IF NOT EXISTS `historique` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `idc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
