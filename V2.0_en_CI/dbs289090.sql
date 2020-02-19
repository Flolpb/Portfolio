-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Hôte : db5000295934.hosting-data.io
-- Généré le : mer. 19 fév. 2020 à 10:06
-- Version du serveur :  5.7.28-log
-- Version de PHP : 7.0.33-0+deb9u7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbs289090`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `nomProjet` varchar(255) NOT NULL,
  `courteDescription` varchar(255) NOT NULL,
  `longueDescription` varchar(1000) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `nomProjet`, `courteDescription`, `longueDescription`, `img`) VALUES
(1, 'Portfolio', 'Le Portfolio est un projet de l\'année, qui s\'est déroulé en deux périodes. Notre objectif, créer notre site web avec un portfolio intégré.', 'Le Portfolio qu\'on a eu a produire devait se faire en 2 temps. Un premier pour créer toute la partie front du site web. Tandis que la deuxième consiste à créer la partie back en utilisant les connaissances acquises récemment. Ce projet est toujours en cours de développement. ', 'https://www.thebluediamondgallery.com/typewriter/images/portfolio.jpg'),
(2, 'Campus Academy\'s event', 'Campus Academy\'s event est une application web consistant à regrouper les evenements de notre école.', 'C\'est un projet de groupe réalisé avec différents étudiants de diverses classes. Ce projet est toujours en cours de développement. La technologie utilisée pour ma part dans ce projet est ReactJS. ', 'https://www.mch-group.com/-/media/mch-group/Images/Content/News/Blog/2017/2017-04/mch-group-live-marketing-aktivierung.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
