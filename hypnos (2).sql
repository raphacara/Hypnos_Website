-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 jan. 2023 à 17:02
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hypnos`
--

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `email` varchar(45) CHARACTER SET utf8 NOT NULL,
  `capteur_type` varchar(45) CHARACTER SET utf8 NOT NULL,
  `numero_de_serie` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`email`, `capteur_type`, `numero_de_serie`) VALUES
('', '', 1262642);

-- --------------------------------------------------------

--
-- Structure de la table `chart`
--

CREATE TABLE `chart` (
  `id` int(24) NOT NULL,
  `freq` int(160) NOT NULL,
  `db` int(110) NOT NULL,
  `spo2` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `chart`
--

INSERT INTO `chart` (`id`, `freq`, `db`, `spo2`) VALUES
(1, 60, 80, 95),
(2, 60, 80, 95),
(3, 70, 80, 95),
(4, 60, 80, 95),
(5, 60, 40, 95),
(6, 60, 80, 0),
(7, 60, 80, 95),
(8, 60, 80, 95),
(9, 60, 80, 99),
(10, 111, 90, 95),
(11, 60, 80, 99),
(12, 60, 90, 95),
(13, 111, 80, 95),
(14, 60, 100, 95),
(15, 60, 80, 99),
(16, 60, 80, 95),
(17, 60, 80, 95),
(18, 60, 80, 95),
(19, 70, 80, 95),
(20, 60, 80, 99),
(21, 60, 81, 97),
(22, 70, 85, 95),
(23, 113, 82, 95),
(24, 100, 87, 97);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Nom` varchar(45) CHARACTER SET utf8 NOT NULL,
  `Prenom` varchar(45) CHARACTER SET utf8 NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 NOT NULL,
  `mot_de_passe` varchar(70) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Nom`, `Prenom`, `email`, `mot_de_passe`) VALUES
('CISSE', 'Farmata', 'farmata.cisse02@gmail.com', '$2y$10$1D6N3KMQlXWiTEumea4.uuPGbfpH4McZ5gVSQkq195QKqu7cC0tE.'),
('Smith', 'harial', 'harial@gmail.com', '$2y$10$2/W/XtUPwOvkapZ5Q1.K7uERdIYlkxm1M1RRLywBjH0c/e.2sfOju'),
('marchand', 'Lola', 'hash@gmail.com', '$2y$10$kepXT6ABJIiiOgTkZU5T8uEQ8UIzWqOvk1or83mUcQqH6MXBsKuyG'),
('monde', 'Lea', 'lea@gmail.com', '$2y$10$aLuBSn/1hDpFLvhecMo1CO5I6IFyJ16cL4VXTeMY.nnfuvTVciyj6'),
('Smith', 'Louise', 'louise@gmaile.com', '$2y$10$dR5aGDzEwYui7/ZOmHYT9uWDV2AOZmNCEgdpwuzT1mWAUl1UtyiK.');

-- --------------------------------------------------------

--
-- Structure de la table `mesures`
--

CREATE TABLE `mesures` (
  `Capteur_BPM` int(15) NOT NULL,
  `Capteur_SPO2` int(15) NOT NULL,
  `Capteur_dB` int(15) NOT NULL,
  `capteur_type` varchar(45) CHARACTER SET utf8 NOT NULL,
  `donnees` int(15) NOT NULL,
  `resumee` varchar(45) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `description` varchar(45) NOT NULL,
  `prix` decimal(4,0) NOT NULL,
  `nom` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`numero_de_serie`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `mesures`
--
ALTER TABLE `mesures`
  ADD PRIMARY KEY (`capteur_type`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`nom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
