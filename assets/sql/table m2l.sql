-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Mar 21 Mars 2017 à 10:48
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `booking`
--

INSERT INTO `booking` (`id`, `Salle`, `Nom`, `Section`, `Date`, `Debut`, `Fin`) VALUES
(1, 'dsq', 'dsqxfdc', 'dfsc', '4444-03-23', '23:03:00', '23:04:00'),
(2, 'dzs', 'Nicolas', 'CRDJ', '2017-01-31', '12:00:00', '15:00:00'),
(3, 'RJ41', 'David', 'Football', '2017-03-18', '17:00:00', '19:00:00');

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
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`id`, `nom`, `adresse`, `centre`, `description`, `dateevent`, `hdebut`, `hfin`, `sport`, `img`) VALUES
(22, 'M2L', '56 avenue Anatole france', 'foot center', 'Foot à 5', '2017-02-24', '17:00:00', '18:30:00', 'Football', 'MDL.jpg');

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
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
