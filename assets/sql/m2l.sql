-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Dim 23 Avril 2017 à 19:40
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `m2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `Salle` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Debut` time NOT NULL,
  `Fin` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `booking`
--

INSERT INTO `booking` (`id`, `Salle`, `Nom`, `Section`, `Date`, `Debut`, `Fin`) VALUES
(3, 'RJ41', 'David', 'Football', '2017-03-18', '17:00:00', '19:00:00'),
(6, 'dfs', 'sqd', 'dsw', '2017-04-22', '12:03:00', '15:03:00');

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `centre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `dateevent` date NOT NULL,
  `hdebut` time NOT NULL,
  `hfin` time NOT NULL,
  `sport` varchar(255) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`id`, `nom`, `adresse`, `centre`, `description`, `dateevent`, `hdebut`, `hfin`, `sport`, `users_id`) VALUES
(22, 'M2L', '56 avenue Anatole france', 'foot center', 'Foot à 5', '2017-02-24', '17:00:00', '18:30:00', 'Football', 0),
(23, '', '', '', 'dsqcxdsqc', '0000-00-00', '00:00:00', '00:00:00', 'Football', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `mail`, `password`, `type`, `prenom`, `nom`) VALUES
(1, 'antonio', 'antoinejeanmec@hotmail.fr', 'password', 'administrateur', 'Antoine', 'Jean'),
(2, 'ncl', 'nicolasgarnier97@gmail.com', 'blue94', 'administrateur', 'Nicolas', 'Garnier');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
