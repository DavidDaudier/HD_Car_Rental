-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 22 nov. 2021 à 19:28
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `location`
--

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE `minichat` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_heure` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `minichat`
--

INSERT INTO `minichat` (`id`, `pseudo`, `message`, `date_heure`) VALUES
(43, 'David', 'Hello', '2021-11-22 12:49:29'),
(44, 'Jean', 'Hi', '2021-11-22 12:49:47'),
(45, 'Jean', 'querty', '2021-11-22 12:50:06');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `modpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `modpass`) VALUES
(1, 'David', '$2y$10$/FhArIqmMHhZ/5ooFjYkmO2sl0bsCmgZalvHKTOP1ujH0k4uFYs2K'),
(2, 'Michee', '$2y$10$YKJU1lTvK01lLjDsZ3GaGuYXKMS.uOFfvkcpVG4kT8Caa1Pc.ju6K'),
(3, 'Mirlande', '$2y$10$Iai5.z8lCcRuGI5hDKfRXe3TT7kLHq5EiNGXvOJy3bGQYMbJkcdPC'),
(4, 'Osee', '$2y$10$4FQyVkYThPPZc/QgOZyTS.1l.PJzTM/R9eEfY/3P3irrExvdmB8QS'),
(5, 'Ostanie', '$2y$10$kpE.UNmbLM/YnGjUoMhrB.MeZHiQXZWrooTcJdXy902Azk4FivsHu'),
(7, 'Lele', '$2y$10$kmVqrU4SPdGREfr2pUc.pemomoi5U1CgOX11sMa64/JHJdg0eBPru'),
(8, 'Macken', '$2y$10$i/raoKhgLeWS26jhZdYwUO3DiXYKsdiVLuYyUKvHk1jTOim0T.tIu'),
(9, 'Jean', '$2y$10$ZLUaQrTZmGddpfuKObtrVegF115fBELq4OUEvCNAtR8abPKqIwE6y');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `id` int(10) NOT NULL,
  `images` text NOT NULL,
  `marque` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `immatricule` varchar(255) NOT NULL,
  `prix_loc` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`id`, `images`, `marque`, `modele`, `description`, `immatricule`, `prix_loc`) VALUES
(11, 'Ferrari.jpg', 'Ferrari', 'F171 Hybride', 'Vitesse : 0 a 100 km/h 3 sec, Moteur : V6, Vitesse max : 360 km/h, Carburant : Essence, BV : Automatique, Annee : 2021, Portes : 2', '2021-F171H', 900),
(12, 'Audi.jpg', 'Audi', 'R8', 'Vitesse : 0 a 100 km/h en 3.5 sec, Moteur : V10 de 562 ch-v, Vitesse max : 330 km/h, Carburant : Essence, BV : Automatique, Annee : 2021, Portes : 2', '2021-AR8', 950),
(13, 'Lamborghini .jpg', 'Lamborghini', 'Veneno (OT2)', 'Vitesse : 0 a 100 km/h 2.3 sec, Moteur : V12   6.52 ch-v, Vitesse max : 380 km/h, Carburant : Essence, BV : Automatique, Annee : 2020, Portes : 2', '2020-LOT2', 920),
(14, 'Maserati.jpg', 'Maserati', 'MC20', 'Vitesse : 0 a 100 km/h 5 sec, Moteur : V6, Vitesse max : 325 km/h, Carburant : Essence, BV : Automatique, Annee : 2020, Portes : 2', '2020-MMC20', 920),
(15, 'Bugatti (2).jpg', 'Bugatti', 'Veyron', 'Vitesse : 0 a 100 km/h 2.5 sec, Moteur : W16 a 15-72-15o, Vitesse max : 402 km/h, Carburant : Essence, BV : Sequentielle 7 rapport, Annee : 2020, Portes : 2', '2020-BVEYRON', 950),
(16, 'Roll Royce.jpg', 'Rolls Royce', 'Phantom', 'Vitesse : 0 a 100 km/h 3 sec, Moteur : V12, Vitesse max : 250 km/h, Carburant : Essence, BV : Automatique, Annee : 2021, Portes : 4', '2021-RRPHANTOM', 700),
(17, 'Mercedes-Benz.jpeg', 'Mercedes-Benz', 'AG', 'Vitesse : 0 a 100 km/h 5 sec, Moteur : V10, Vitesse max : 210 km/h, Carburant : Essence, BV : Automatique, Annee : 2020, Portes : 2', '2020-MAG', 900),
(18, 'Bentley.jpg', 'Bentley', 'S2', 'Vitesse : 0 a 100 km/h 15 sec, Moteur : V8   32 ch-v, Vitesse max : 200 km/h, Carburant : Essence, BV : Automatique  4 rapport, Annee : 2019, Portes : 4', '2019-BS2', 590);

-- --------------------------------------------------------

--
-- Structure de la table `voiture_louer`
--

CREATE TABLE `voiture_louer` (
  `immatricule` varchar(255) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `noCarte` varchar(255) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `code_recuperation` int(11) NOT NULL,
  `heure_louer` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voiture_louer`
--

INSERT INTO `voiture_louer` (`immatricule`, `marque`, `modele`, `noCarte`, `date_debut`, `date_fin`, `code_recuperation`, `heure_louer`) VALUES
('2020-BVEYRON', 'Bugatti', 'Veyron', '000-888', '2021-11-22', '2021-11-23', 277850136, '2021-11-22 09:55:54'),
('2021-AR8', 'Audi', 'R8', '111-222-333', '2021-11-22', '2021-11-24', 244230044, '2021-11-22 09:47:17'),
('2021-AR8', 'Audi', 'R8', '567-098-654', '2021-11-22', '2021-11-25', 203644343, '2021-11-22 12:42:44'),
('2021-F171H', 'Ferrari', 'F171 Hybride', '5670-87', '2021-11-22', '2021-12-06', 751172236, '2021-11-22 09:27:49'),
('2020-LOT2', 'Lamborghini', 'Veneno (OT2)', '6578-123', '2021-11-23', '2021-11-25', 335085532, '2021-11-22 09:02:07'),
('2020-MMC20', 'Maserati', 'MC20', '6578-125', '2021-11-22', '2021-11-27', 420311679, '2021-11-22 09:02:52'),
('2021-F171H', 'Ferrari', 'F171 Hybride', '6788-980', '2021-11-22', '2021-11-25', 509941327, '2021-11-22 09:01:49'),
('2019-BS2', 'Bentley', 'S2', '89-08-76', '2021-11-22', '2021-11-23', 271960882, '2021-11-22 09:14:12');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `minichat`
--
ALTER TABLE `minichat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voiture_louer`
--
ALTER TABLE `voiture_louer`
  ADD UNIQUE KEY `num_ident_index` (`noCarte`),
  ADD UNIQUE KEY `code` (`code_recuperation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `minichat`
--
ALTER TABLE `minichat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
