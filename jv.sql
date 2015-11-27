-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 27 Novembre 2015 à 10:56
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `jv`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `nom` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passwd` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` char(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` char(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
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
  `Console6` char(25) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `games`
--

INSERT INTO `games` (`id`, `name`, `nickname`, `sort1`, `sort2`, `editor1`, `editor2`, `description`, `price`, `Console1`, `Console2`, `Console3`, `Console4`, `Console5`, `Console6`) VALUES
(1, 'Call of Duty :Black Ops 3', 'COD', 'FPS', 'Shooter', 'Beenox', 'Treyarch', 'Avec Black Ops 3, Treyarch tente le pari de modifier son approche traditionnelle de la série des Black Ops.', 70, 'PC', 'PS4', 'ONE', NULL, NULL, NULL),
(2, 'FIFA 16', 'FIFA', 'Sport', 'Football', 'EA sports', NULL, 'FIFA 16 est un jeu de simulation footballistique publié par EA. Référence pour beaucoup de joueurs depuis de nombreuses années, le titre nous revient en 2016 avec une nouvelle mouture.', 70, 'PC', 'PS4', 'One', NULL, NULL, NULL),
(3, 'World of Warcraft', 'WOW', 'RPG', 'MMO', 'Blizzard Entertainment', NULL, 'World of Warcraft (WoW) is a massively multiplayer online role-playing game (MMORPG) created in 2004 by Blizzard Entertainment.', 40, 'PC', NULL, NULL, NULL, NULL, NULL),
(4, 'Grand Theft Auto V', 'GTA', 'Action', 'Aventure', 'Rockstar Games', 'Take-Two Interactive', 'Jeu d''action-aventure en monde ouvert, Grand Theft Auto (GTA) V vous place dans la peau de trois personnages inédits : Michael, Trevor et Franklin qui ont élu domicile à Los Santos, ville de la région.', 50, 'PS4', 'PC', 'One', NULL, NULL, NULL),
(5, 'Battlefield 4', 'BF4', 'FPS', 'Shooter', 'Electronic Arts', NULL, 'Battlefield 4 est un FPS orienté multijoueur, mais disposant tout de même d''une campagne solo, qui propose de prendre part à des batailles à grande échelle au sein d''escouades.', 30, 'PS4', 'PS3', 'One', 'PC', NULL, NULL),
(6, 'Assassin''s Creed Syndicat', 'ACS', 'Action', 'Aventure', 'Ubisoft', NULL, 'Prenant place dans le Londres de l''époque victorienne, Assassin''s Creed Syndicate est un jeu d''action-aventure en monde ouvert.', 80, 'PS4', 'ONE', 'PC', NULL, NULL, NULL),
(7, 'Need For Speed', 'NFS', 'Course', 'Voiture', 'Electronic Arts', NULL, 'Need For Speed est un jeu de course mettant en scène des courses illégales. De nuit, le joueur est invité à parcourir un monde ouvert.', 60, 'PC', 'PS4', 'ONE', 'VITA', NULL, NULL),
(8, 'Starcraft 2 : Legacy Of The Void', 'Starcraft', 'Stratégie', NULL, 'Blizzard Entertainment', NULL, 'StarCraft II, le jeu de stratégie en temps réel (RTS) développé par Blizzard, possède une campagne des plus palpitante.', 80, 'PC', NULL, NULL, NULL, NULL, NULL),
(9, 'Mortal Kombat X', 'MK', 'Combat', NULL, 'Warner Bros Games', NULL, 'Mortal Kombat X sur PS4 est le dixième opus de la série de jeux de combats du même nom. Choisissez parmi les 24 personnages disponibles et affrontez-vous au cours de batailles particulièrement gores.', 40, 'PC', 'PS4', 'ONE', 'VITA', NULL, NULL),
(10, 'Just Cause 3', 'JC3', 'Aventure', 'Action', 'Square Enix', '', 'Jeu d''aventure et d''action pour PS4 se passant en méditerranée, Just Cause 3 donne l''occasion au joueur de se mesurer à une dictature. Il doit en effet lutter au cours de ses missions contre le règne.', 80, 'PC', 'PS4', 'ONE', NULL, NULL, NULL),
(11, 'Mario Tennis Ultra Smash', 'Mario', 'Tennis', 'Sport', 'Nintendo', NULL, 'Mario Tennis: Ultra Smash propose des matchs de tennis en simple ou en double se déroulant dans l''univers de Super Mario. Différents modes de jeu sont proposés, comme des matchs de tennis classiques.', 40, 'WIIU', NULL, NULL, NULL, NULL, NULL),
(12, 'Lego Jurassic World', 'JW', 'Action', 'Aventure', 'WB Games', NULL, 'Le titre se présente sous la forme d''un jeu d''action-aventure : il est alors possible de revivre les aventures des films tant du côté des protagonistes que du côté des dinosaures, laissant ainsi plus ample liberté au joueur.', 40, 'PC', 'PS4', 'WIIU', '3DS', 'VITA', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;