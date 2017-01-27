-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Jeu 26 Janvier 2017 à 11:28
-- Version du serveur :  10.1.20-MariaDB
-- Version de PHP :  7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vinicommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id` int(11) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `complement` varchar(100) DEFAULT NULL,
  `ville` varchar(50) NOT NULL,
  `codePostal` varchar(10) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_typeAdresse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `carteDePaiement`
--

CREATE TABLE `carteDePaiement` (
  `id` int(11) NOT NULL,
  `nomPorteur` varchar(100) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `dateExpiration` date NOT NULL,
  `empreinte` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `dateNaissance` date NOT NULL,
  `civilite` char(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `solde` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lienClientCarte`
--

CREATE TABLE `lienClientCarte` (
  `id_client` int(11) NOT NULL,
  `id_carteDePaiement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `lienTransactionProduit`
--

CREATE TABLE `lienTransactionProduit` (
  `id_transaction` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `montant` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_typeTransaction` int(11) NOT NULL,
  `id_adresse` int(11) DEFAULT NULL,
  `id_carteDePaiement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `typeAdresse`
--

CREATE TABLE `typeAdresse` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `typeTransaction`
--

CREATE TABLE `typeTransaction` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_adresse_id_client` (`id_client`),
  ADD KEY `FK_adresse_id_typeAdresse` (`id_typeAdresse`);

--
-- Index pour la table `carteDePaiement`
--
ALTER TABLE `carteDePaiement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lienClientCarte`
--
ALTER TABLE `lienClientCarte`
  ADD PRIMARY KEY (`id_client`,`id_carteDePaiement`),
  ADD KEY `FK_possede_id_carteDePaiement` (`id_carteDePaiement`);

--
-- Index pour la table `lienTransactionProduit`
--
ALTER TABLE `lienTransactionProduit`
  ADD PRIMARY KEY (`id_transaction`,`id_produit`),
  ADD KEY `FK_concerne_id_produit` (`id_produit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_transaction_id_client` (`id_client`),
  ADD KEY `FK_transaction_id_typeTransaction` (`id_typeTransaction`),
  ADD KEY `FK_transaction_id_adresse` (`id_adresse`),
  ADD KEY `FK_transaction_id_carteDePaiement` (`id_carteDePaiement`);

--
-- Index pour la table `typeAdresse`
--
ALTER TABLE `typeAdresse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typeTransaction`
--
ALTER TABLE `typeTransaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `carteDePaiement`
--
ALTER TABLE `carteDePaiement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `typeAdresse`
--
ALTER TABLE `typeAdresse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `typeTransaction`
--
ALTER TABLE `typeTransaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD CONSTRAINT `FK_adresse_id_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_adresse_id_typeAdresse` FOREIGN KEY (`id_typeAdresse`) REFERENCES `typeAdresse` (`id`);

--
-- Contraintes pour la table `lienClientCarte`
--
ALTER TABLE `lienClientCarte`
  ADD CONSTRAINT `FK_possede_id` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_possede_id_carteDePaiement` FOREIGN KEY (`id_carteDePaiement`) REFERENCES `carteDePaiement` (`id`);

--
-- Contraintes pour la table `lienTransactionProduit`
--
ALTER TABLE `lienTransactionProduit`
  ADD CONSTRAINT `FK_concerne_id` FOREIGN KEY (`id_transaction`) REFERENCES `transaction` (`id`),
  ADD CONSTRAINT `FK_concerne_id_produit` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `FK_transaction_id_adresse` FOREIGN KEY (`id_adresse`) REFERENCES `adresse` (`id`),
  ADD CONSTRAINT `FK_transaction_id_carteDePaiement` FOREIGN KEY (`id_carteDePaiement`) REFERENCES `carteDePaiement` (`id`),
  ADD CONSTRAINT `FK_transaction_id_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_transaction_id_typeTransaction` FOREIGN KEY (`id_typeTransaction`) REFERENCES `typeTransaction` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
