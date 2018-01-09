-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 09 Janvier 2018 à 14:59
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bis_genea`
--

-- --------------------------------------------------------

--
-- Structure de la table `lien`
--

CREATE TABLE `lien` (
  `numsource` int(11) DEFAULT NULL,
  `numtarget` int(11) DEFAULT NULL,
  `importance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lien`
--

INSERT INTO `lien` (`numsource`, `numtarget`, `importance`) VALUES
(2, 1, 10),
(3, 1, 10),
(4, 1, 10),
(5, 1, 10),
(6, 2, 5),
(7, 2, 5),
(8, 3, 5),
(9, 3, 5),
(10, 1, 10),
(10, 4, 10),
(10, 5, 10),
(8, 9, 3),
(2, 3, 5),
(6, 7, 3);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `numpers` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `groupe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`numpers`, `nom`, `prenom`, `groupe`) VALUES
(1, 'Jean-pierre', 'Valjean', 1),
(2, 'Villi', 'Marie', 2),
(3, 'Jean-pierre', 'pierre', 2),
(4, 'Jean-pierre', 'martin', 3),
(5, 'Jean-pierre', 'Elodie', 3),
(6, 'Villi', 'Adrien', 5),
(7, 'Cotte', 'Mélanie', 5),
(8, 'Jean-pierre', 'Andre', 4),
(9, 'Jean-pierre', 'Monique', 4),
(10, 'Maladina', 'Bella', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `identifiant` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(200) CHARACTER SET utf8 NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `pere` varchar(255) NOT NULL,
  `mere` varchar(255) NOT NULL,
  `date_ouverture` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`identifiant`, `pseudo`, `nom`, `prenom`, `mail`, `mdp`, `genre`, `pere`, `mere`, `date_ouverture`) VALUES
(8, 'lindabnf', 'Benboudiaf', 'Linda', 'lbenboudiaf@gmail.com', 'QQ', 'F', 'Ali Benboudiaf', 'Khalida Touhami', '2017-12-03 20:24:14');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `lien`
--
ALTER TABLE `lien`
  ADD KEY `numsource` (`numsource`),
  ADD KEY `numtarget` (`numtarget`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`numpers`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`identifiant`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `lien`
--
ALTER TABLE `lien`
  ADD CONSTRAINT `lien_ibfk_1` FOREIGN KEY (`numsource`) REFERENCES `personne` (`numpers`),
  ADD CONSTRAINT `lien_ibfk_2` FOREIGN KEY (`numtarget`) REFERENCES `personne` (`numpers`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
