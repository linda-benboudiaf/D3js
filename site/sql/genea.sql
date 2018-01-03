-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2017 at 12:33 AM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genea`
--

-- --------------------------------------------------------

--
-- Table structure for table `groupe`
--

CREATE TABLE `groupe` (
  `origine` int(11) NOT NULL,
  `cible` int(11) NOT NULL,
  `groupe` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personne`
--

CREATE TABLE `personne` (
  `numpers` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `pere` int(11) DEFAULT NULL,
  `mere` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personne`
--

INSERT INTO `personne` (`numpers`, `nom`, `prenom`, `pere`, `mere`) VALUES
(1, 'Estermont', 'Cassana', NULL, NULL),
(2, 'Baratheon', 'Steffon', NULL, NULL),
(3, 'Baratheon', 'Renly', 2, 1),
(4, 'Baratheon', 'Stannis', 2, 1),
(5, 'Baratheon', 'Robert', 2, 1),
(6, NULL, 'Gendry', 5, NULL),
(7, 'Baratheon', 'Joffrey', 5, 9),
(8, 'Baratheon', 'Tommen', 5, 9),
(9, 'Lannister', 'Cersei', 13, 12),
(10, 'Baratheon', 'Myrcella', 5, 9),
(11, 'Lannister', 'Jaime', 13, 12),
(12, 'Lannister', 'Joanna', NULL, NULL),
(13, 'Lannister', 'Tywin', NULL, NULL),
(14, 'Lannister', 'Tyrion', 13, 12),
(15, 'Florent', 'Selyse', NULL, NULL),
(16, 'Baratheon', 'Shireen', 4, 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`identifiant`, `pseudo`, `nom`, `prenom`, `mail`, `mdp`, `genre`, `pere`, `mere`, `date_ouverture`) VALUES
(8, 'lindabnf', 'Benboudiaf', 'Linda', 'lbenboudiaf@gmail.com', 'QQ', 'F', 'Ali Benboudiaf', 'Khalida Touhami', '2017-12-03 20:24:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`origine`),
  ADD KEY `cible` (`cible`);

--
-- Indexes for table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`numpers`),
  ADD KEY `pere` (`pere`),
  ADD KEY `mere` (`mere`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`identifiant`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `groupe_ibfk_1` FOREIGN KEY (`origine`) REFERENCES `personne` (`numpers`),
  ADD CONSTRAINT `groupe_ibfk_2` FOREIGN KEY (`cible`) REFERENCES `personne` (`numpers`);

--
-- Constraints for table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `personne_ibfk_1` FOREIGN KEY (`pere`) REFERENCES `personne` (`numpers`),
  ADD CONSTRAINT `personne_ibfk_2` FOREIGN KEY (`mere`) REFERENCES `personne` (`numpers`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
