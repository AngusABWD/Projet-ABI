-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3307
-- Généré le : lun. 25 avr. 2022 à 09:10
-- Version du serveur : 8.0.28
-- Version de PHP : 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `abi`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `IDCLIENT` int NOT NULL,
  `IDSECT` int NOT NULL,
  `RAISONSOCIALE` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ADRESSECLIENT` char(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `CODEPOSTALCLIENT` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `VILLECLIENT` char(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `EFFECTIF` int DEFAULT NULL,
  `TELEPHONECLIENT` int(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`IDCLIENT`, `IDSECT`, `RAISONSOCIALE`, `ADRESSECLIENT`, `CODEPOSTALCLIENT`, `VILLECLIENT`, `EFFECTIF`, `TELEPHONECLIENT`) VALUES
(1, 1, 'ANAIS CORP', '03 Rue Des 24 Arpents', '95370', 'Montmorency', 13, 0605618602),
(2, 2, 'ARP PRO', '3 Rue des Frances', '95370', 'Montigny', 15, 0753984960),
(3, 3, 'ORCHESTRA', '05 Boulvard Magenta', '95170', 'Argenteuil', 2, 0605612151),
(4, 1, 'LEA ALIM', '15 Boulevard Des Abus', '75000', 'Paris', 4, 0605618602),
(11, 1, 'ABI', 'Rue de Rivoli', '78015', 'Mont Saint Michel', 10, 0753984960),
(13, 1, 'LADMIA', '05 Boulvard Magenta', '95170', 'Argenteuil', 5, 0605612151),
(27, 1, 'HDM', '03 Rue des 24 Arpents', '95370', 'Montigny Les Cormeilles', 20, 0605618602);

-- --------------------------------------------------------

--
-- Structure de la table `commander`
--

CREATE TABLE `commander` (
  `IDCLIENT` int NOT NULL,
  `CODEPROJET` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `IDCONTACT` int NOT NULL,
  `IDCLIENT` int NOT NULL,
  `IDFONC` int NOT NULL,
  `NOMCONTACT` char(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PRENOMCONTACT` char(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TELCONTACT` char(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `EMAILCONTACT` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PHOTO` char(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DUREE` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE `documents` (
  `IDDOC` int NOT NULL,
  `IDCONTACT` int DEFAULT NULL,
  `TITRE` char(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `RESUME` char(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DATEEDITION` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `IDFONC` int NOT NULL,
  `FONCTION` char(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `CODEPROJET` int NOT NULL,
  `ABREGEPROJET` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NOMPROJET` char(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TYPEPROJET` char(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`CODEPROJET`, `ABREGEPROJET`, `NOMPROJET`, `TYPEPROJET`) VALUES
(1, 'ABI', 'Active Bretagne Informatique', 'Developpement web');

-- --------------------------------------------------------

--
-- Structure de la table `secteur_activite`
--

CREATE TABLE `secteur_activite` (
  `IDSECT` int NOT NULL,
  `ACTIVITE` char(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `secteur_activite`
--

INSERT INTO `secteur_activite` (`IDSECT`, `ACTIVITE`) VALUES
(1, 'Agro Alimentaire'),
(2, 'industriel'),
(3, 'Commercial'),
(4, 'Informatique');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int NOT NULL,
  `first_name` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `first_name`, `last_name`, `email`, `password`, `role`) VALUES
(22, 'Angus', 'Cooper', 'angusabwd@gmail.com', '$2y$10$fvPHkhRUHVydNeResbrjH..Czhb6mvPJiZ/g/B5befKN7.Rz2x492', 'Administrateur'),
(24, 'Afpa', 'DWWM', 'dwwm@afpa.fr', '$2y$10$fvPHkhRUHVydNeResbrjH..Czhb6mvPJiZ/g/B5befKN7.Rz2x492', 'Administrateur'),
(27, 'Jean-Claude', 'Convenant', 'machineacafe@afpa.fr', '$2y$10$fvPHkhRUHVydNeResbrjH..Czhb6mvPJiZ/g/B5befKN7.Rz2x492', 'Commercial'),
(28, 'Buffy', 'Andermann', 'buffy@afpa.fr', '$2y$10$JBo55CvBDFTC.MyqKWLWKuyvZc8sVcn/cRly85Cos7Rl/V4Vm.yJO', 'Commercial');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`IDCLIENT`),
  ADD KEY `FK_AVOIRPOURSECTEUR` (`IDSECT`);

--
-- Index pour la table `commander`
--
ALTER TABLE `commander`
  ADD PRIMARY KEY (`IDCLIENT`,`CODEPROJET`),
  ADD KEY `FK_COMMANDER2` (`CODEPROJET`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`IDCONTACT`),
  ADD KEY `FK_ASSOCIATION_5` (`IDFONC`),
  ADD KEY `FK_TRAVAILLERPOUR` (`IDCLIENT`);

--
-- Index pour la table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`IDDOC`),
  ADD KEY `FK_PUBLIER` (`IDCONTACT`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`IDFONC`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`CODEPROJET`);

--
-- Index pour la table `secteur_activite`
--
ALTER TABLE `secteur_activite`
  ADD PRIMARY KEY (`IDSECT`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `IDCLIENT` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
