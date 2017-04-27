-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 27 Avril 2017 à 09:32
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
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`id`, `nom`, `adresse`, `centre`, `description`, `dateevent`, `hdebut`, `hfin`, `sport`, `users_id`) VALUES
(22, 'M2L', '56 avenue Anatole france', 'foot center', 'Foot à 5', '2017-02-24', '17:00:00', '18:30:00', 'Football', 0),
(23, '', '', '', 'dsqcxdsqc', '0000-00-00', '00:00:00', '00:00:00', 'Football', 2),
(24, 'zdsq', 'zdqs', '', 'DSq', '0000-00-00', '00:00:00', '00:00:00', 'Football', 2),
(25, 'edsqc', 'qdsf', 'ezafdqs', 'refazdqs', '2017-04-28', '13:00:00', '16:00:00', 'Football', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
