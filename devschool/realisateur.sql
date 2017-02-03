-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mer 01 Février 2017 à 10:06
-- Version du serveur :  5.6.28
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `film`
--

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

CREATE TABLE `realisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateDeNaissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `realisateur`
--

INSERT INTO `realisateur` (`id`, `nom`, `prenom`, `dateDeNaissance`) VALUES
(1, 'Columbus', 'Chris', '1959-03-12'),
(2, 'Russell', 'Chuck', '1953-11-22'),
(3, 'Cameron', 'James', '1955-06-12'),
(4, 'Jackson', 'Peter', '1962-04-12'),
(5, 'Spielberg', 'Steven', '1959-01-24');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `realisateur`
--
ALTER TABLE `realisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `realisateur`
--
ALTER TABLE `realisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
