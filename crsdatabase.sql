-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 01 mars 2023 à 15:55
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crsdatabase`
--

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `role_userlogin`
--

CREATE TABLE `role_userlogin` (
  `id` int(255) NOT NULL,
  `role_id` int(255) NOT NULL,
  `userlogin_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `userlogin`
--

CREATE TABLE `userlogin` (
  `Id` int(25) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `EmailId` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `Homeaddress` varchar(255) NOT NULL,
  `Aadharnum` int(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Mobile` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `userlogin`
--

INSERT INTO `userlogin` (`Id`, `Fname`, `Lname`, `EmailId`, `pwd`, `Homeaddress`, `Aadharnum`, `Gender`, `Mobile`) VALUES
(1, 'Rosyne', 'Neha', 'admin@gmail.com', 'password', 'Fc Road', 123456789, 'Female', 987654321);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role_userlogin`
--
ALTER TABLE `role_userlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role` (`role_id`),
  ADD UNIQUE KEY `userlogin` (`userlogin_id`);

--
-- Index pour la table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
