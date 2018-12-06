-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 30 nov. 2018 à 16:04
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
-- Base de données :  `lessonscreen`
--

-- --------------------------------------------------------

--
-- Structure de la table `support`
--

DROP TABLE IF EXISTS `support`;
CREATE TABLE IF NOT EXISTS `support` (
  `id` int(222) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `adresseMail` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `messageUtilisateur` text NOT NULL,
  `idUser` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `support`
--

INSERT INTO `support` (`id`, `prenom`, `adresseMail`, `objet`, `messageUtilisateur`, `idUser`) VALUES
(1, 'qszdefghjk', 'loulou@gmail.com', 'sdcfvb', 'Messageqwsxdcfvghjk', 3),
(2, 'qszdefghjk', 'loulou@gmail.com', 'sdcfvb', 'Messageqwsxdcfvghjk', 3),
(3, 'qszdefghjk', 'loulou@gmail.com', 'sdcfvb', 'Messageqwsxdcfvghjk', 3),
(4, 'qszdefghjk', 'loulou@gmail.com', 'sdcfvb', 'Messageqwsxdcfvghjk', 3),
(5, 'qszdefghjk', 'loulou@gmail.com', 'sdcfvb', 'Messageqwsxdcfvghjk', 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `dateInscription` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sexe` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `dateNaissance` date NOT NULL,
  `adresseMail` varchar(255) NOT NULL,
  `motDePasse` varchar(255) NOT NULL,
  `numero` int(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `adresseMail` (`adresseMail`),
  KEY `sexe` (`sexe`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `dateInscription`, `sexe`, `nom`, `prenom`, `dateNaissance`, `adresseMail`, `motDePasse`, `numero`) VALUES
(3, '2018-11-28 15:05:43', 'h', 'Bocquel', 'Louison', '2000-05-23', 'loulou@gmail.com', '7682fe272099ea26efe39c890b33675b', 603973925),
(5, '2018-11-28 15:28:17', 'h', 'Bellour', 'Killian', '2000-11-01', 'kiki@gmail.com', '25d55ad283aa400af464c76d713c07ad', 695978804),
(6, '2018-11-29 08:26:27', 'h', 'jgjgjjhg', 'sdfgfdsdfg', '2018-10-30', 'azertyuio@gmail.com', 'e48ff6b921a06f53f2674ba8618e971bbc96b72f', 695978874),
(8, '2018-11-29 08:29:25', 'h', 'sdfghsdfx', 'qqqqqsdfghjklo', '2018-10-16', 'azertyuioswxdfghj@gmail.com', '3ddd8672c264c2a9887e330f9b2121fb511cdca5e125ab97fa17a2ba83da3f47', 695978874),
(9, '2018-11-30 10:14:24', 'h', 'Test1', 'Jean', '2016-05-02', 'test@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 658794852),
(11, '2018-11-30 10:38:56', 'h', 'jgjgjjhg', 'Luc', '2018-11-20', 'luc@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 694989798),
(12, '2018-11-30 15:01:50', '', 'jgjgjjhg', 'maxime', '2018-11-20', 'maxime@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 695978806),
(13, '2018-11-30 15:05:43', '', 'jgjgjjhg', 'patrick', '2018-10-30', 'patrick@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 695978865),
(14, '2018-11-30 15:20:11', '', 'jgjgjjhg', 'mff', '2018-11-14', 'mff@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 204050708),
(15, '2018-11-30 15:22:55', '', 'jgjgjjhg', 'mff', '2018-11-14', 'mf@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 204050708),
(16, '2018-11-30 15:53:18', 'f', 'jgjgjjhg', 'sdfgfdsdfg', '2018-11-06', 'luc2@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 695988488);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
