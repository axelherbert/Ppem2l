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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `booking`
--

INSERT INTO `booking` (`id`, `Salle`, `Nom`, `Section`, `Date`, `Debut`, `Fin`) VALUES
(1, 'dsq', 'dsqxfdc', 'dfsc', '4444-03-23', '23:03:00', '23:04:00'),
(2, 'dzs', 'Nicolas', 'CRDJ', '2017-01-31', '12:00:00', '15:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
