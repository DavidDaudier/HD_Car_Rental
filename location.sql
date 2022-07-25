-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 08:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `location`
--

-- --------------------------------------------------------

--
-- Table structure for table `minichat`
--

CREATE TABLE `minichat` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_heure` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `minichat`
--

INSERT INTO `minichat` (`id`, `pseudo`, `message`, `date_heure`) VALUES
(46, 'david', 'hello', '2022-03-23 16:57:19'),
(47, 'Alix', 'Hi', '2022-03-23 16:57:30'),
(48, 'Alix', 'Mw pansew pa ayiti wi', '2022-03-23 16:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `modpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `modpass`) VALUES
(10, 'david', '$2y$10$FsmB6Z7YRWX3WU0PoiQ01uAiCF84NMiKUpiHz44cp6YKuIuFFmiCO'),
(11, 'Alix', '$2y$10$AO2yjNv6P.mxoqpovhfGGORLkZJ2XoOnkBu6YK5nsPWJwwTNe0cUq');

-- --------------------------------------------------------

--
-- Table structure for table `voiture`
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
-- Dumping data for table `voiture`
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
-- Table structure for table `voiture_louer`
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
-- Dumping data for table `voiture_louer`
--

INSERT INTO `voiture_louer` (`immatricule`, `marque`, `modele`, `noCarte`, `date_debut`, `date_fin`, `code_recuperation`, `heure_louer`) VALUES
('2021-F171H', 'Ferrari', 'F171 Hybride', '1LO-J9U-76Y', '2022-03-23', '2022-03-30', 269688284, '2022-03-23 17:01:01'),
('2021-AR8', 'Audi', 'R8', '34r-67u-987', '2022-03-23', '2022-03-31', 509235713, '2022-03-23 17:03:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `minichat`
--
ALTER TABLE `minichat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voiture_louer`
--
ALTER TABLE `voiture_louer`
  ADD UNIQUE KEY `num_ident_index` (`noCarte`),
  ADD UNIQUE KEY `code` (`code_recuperation`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `minichat`
--
ALTER TABLE `minichat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
