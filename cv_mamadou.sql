-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 12 déc. 2018 à 17:41
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `idcomment` int(5) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(15) CHARACTER SET latin1 NOT NULL,
  `nom` varchar(30) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 NOT NULL,
  `telephone` int(10) NOT NULL,
  `message` varchar(10000) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idcomment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

DROP TABLE IF EXISTS `competences`;
CREATE TABLE IF NOT EXISTS `competences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `niveau` int(1) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id`, `libelle`, `niveau`, `id_categorie`) VALUES
(1, 'PHP', 4, 1),
(2, 'HTML', 2, 1),
(3, 'Javascript', 3, 1),
(4, 'Word', 5, 2),
(5, 'Excel', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `competences_categories`
--

DROP TABLE IF EXISTS `competences_categories`;
CREATE TABLE IF NOT EXISTS `competences_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competences_categories`
--

INSERT INTO `competences_categories` (`id`, `libelle`) VALUES
(1, 'Développement'),
(2, 'Bureautique');

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `endroit` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id`, `libelle`, `date_debut`, `date_fin`, `id_categorie`, `endroit`) VALUES
(5, 'Stage de 6 mois', '2012-09-04', '2012-11-08', 2, 'Université de San Martin de Porres'),
(6, 'CDD de 6 mois', '2012-09-04', '2012-10-10', 1, 'Inmobiliaria y Administradora NIGUREBA');

-- --------------------------------------------------------

--
-- Structure de la table `experiences_categories`
--

DROP TABLE IF EXISTS `experiences_categories`;
CREATE TABLE IF NOT EXISTS `experiences_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `experiences_categories`
--

INSERT INTO `experiences_categories` (`id`, `libelle`) VALUES
(1, 'Emplois'),
(2, 'Stages');

-- --------------------------------------------------------

--
-- Structure de la table `parcours`
--

DROP TABLE IF EXISTS `parcours`;
CREATE TABLE IF NOT EXISTS `parcours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ecole` varchar(255) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `diplome` varchar(255) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
