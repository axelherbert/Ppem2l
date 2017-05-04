-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 04 Mai 2017 à 17:03
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `m2l`
--

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
  `users` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`id`, `nom`, `adresse`, `centre`, `description`, `dateevent`, `hdebut`, `hfin`, `sport`, `users`) VALUES
(1, 'Foot à 5', '17 rue des petit champs', 'fivecenter', 'Foot à 5 \r\nrecherche 5 joueurs \r\nme contacter par mail \r\nnicolasgarnier@gmail.com\r\npar Téléphone \r\n06.XX.XX.XX.XX', '2017-05-19', '17:00:00', '19:00:00', 'Football', 'ncl');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
