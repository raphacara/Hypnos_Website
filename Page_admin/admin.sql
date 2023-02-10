-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 20 jan. 2023 à 17:14
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
-- Base de données : `admin`
--

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `reponse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id`, `question`, `reponse`) VALUES
(1, 'Comment trouver le sommeil quand on est stressé ?', 'Il existe différents moyens pour se détendre avant de dormir : la méditation, la sophrologie, le yoga ou encore la lecture, constituent des activités calmes et reposantes à intégrer à votre rituel du coucher.'),
(2, 'Comment méditer ?', 'La méditation est un une manière de s’apaiser qui peut aider à trouver le sommeil lorsque l’on souffre d’anxiété et que les tracas quotidiens s’invitent au lit.<br />\r\nMéditer le soir ou en journée permet d’évacuer le stress et facilite le lâcher prise.<br />\r\nEn nous aidant à nous calmer, la pratique de la méditation favorise un sommeil réparateur et profond.'),
(3, 'Comment avoir un sommeil réparateur ?', 'La qualité du sommeil est tout aussi importante que la quantité. Avoir un sommeil réparateur est primordial pour se sentir reposé et en pleine forme au réveil.<br />\r\nDeux éléments jouent un rôle important sur la qualité de votre sommeil : votre environnement et votre hygiène de vie.'),
(6, 'ca va?', 'oep');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
