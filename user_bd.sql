-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 27 avr. 2024 à 00:45
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `user_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `patient_dr1`
--

CREATE TABLE `patient_dr1` (
  `ID` int(100) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `groupBlood` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `patient_dr1`
--

INSERT INTO `patient_dr1` (`ID`, `first_name`, `last_name`, `gender`, `contact`, `date`, `time`, `status`, `groupBlood`) VALUES
(14, 'kxrxmx', 'mx', 'female', 5434334, '2024-03-01', '9:00', '1', 'B-'),
(18, 'noor', 'mnr', 'female', 2147483647, '2024-03-14', '9:00', '0', 'AB+'),
(23, 'meryem', 'merzoug', 'female', 445676854, '2024-04-18', '9:00', '1', 'B+'),
(31, 'wahiba', 'elmahi', 'female', 66774325, '2024-04-22', '9:00', '', 'AB-'),
(32, 'mhamed', 'man', 'male', 774534332, '2024-04-27', '9:00', '1', 'A+'),
(34, 'youcef', 'mnr', 'male', 2147483647, '2024-04-15', '9:00', '1', 'O+'),
(35, 'mehdi', 'kcr', 'male', 2147483647, '2024-04-16', '11:05', '', 'A-'),
(36, 'mehdi', 'kcr', 'male', 2147483647, '2024-04-16', '11:05', '', 'A+'),
(37, 'mostafa', 'nadour', 'male', 2147483647, '2024-04-17', '11:30', '1', 'A-'),
(38, 'mostafa', 'nadour', 'male', 2147483647, '2024-04-17', '11:05', '', 'A+'),
(39, 'mostafuch', 'nadour', 'male', 2147483647, '2024-04-19', '11:30', '1', 'B-'),
(41, 'dffsdfggh', 'fhjgfdff', 'female', 35432574, '2024-04-17', '11:55', '1', 'A+'),
(44, 'sdskas', 'djss', 'male', 354346534, '2024-04-18', '11:30', '', 'A+'),
(45, 'karima', 'mansour', 'female', 55922455, '2024-04-12', '9:00', '1', 'A-'),
(46, 'mehdi', 'kcrr', 'male', 46534563, '2024-04-18', '9:50', '1', 'AB+'),
(48, 'sssssssssss', 'sss', 'male', 35432, '2024-04-10', '9:00', '', 'A+'),
(54, 'dhikra', 'latrous', 'female', 243567890, '2024-04-18', '10:15', '', 'A+');

-- --------------------------------------------------------

--
-- Structure de la table `patient_dr2`
--

CREATE TABLE `patient_dr2` (
  `ID` int(100) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `groupBlood` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `patient_dr2`
--

INSERT INTO `patient_dr2` (`ID`, `first_name`, `last_name`, `gender`, `contact`, `date`, `time`, `status`, `groupBlood`) VALUES
(1, 'karima', 'mansour', 'female', 559822346, '2024-04-01', '9:00', '1', ''),
(3, 'noor', 'mnr', 'female', 445664435, '2024-04-19', '9:00', '', 'AB-'),
(6, 'karima', 'kxrxmx', 'female', 556677845, '2024-04-18', '9:00', '1', 'O-'),
(8, 'mhamed', 'mansour', 'male', 554934465, '2024-04-25', '9:00', '', 'B+'),
(11, 'Mustafa ', 'naddd', 'female', 123456789, '2023-02-21', '9:50', '', 'A-'),
(14, 'werew', 'ddsd', 'male', 203543, '2024-04-16', '9:00', '', 'B+'),
(16, 'asdf', 'asdf', 'female', 23456, '2024-04-06', '9:00', '', 'AB-'),
(18, 'nadjeh', 'mahfoud', 'male', 558698554, '2024-04-03', '9:25', '', 'A+');

-- --------------------------------------------------------

--
-- Structure de la table `patient_dr3`
--

CREATE TABLE `patient_dr3` (
  `ID` int(100) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `groupBlood` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `patient_dr3`
--

INSERT INTO `patient_dr3` (`ID`, `first_name`, `last_name`, `gender`, `contact`, `date`, `time`, `status`, `groupBlood`) VALUES
(1, 'karima', 'mnr', 'female', 559735233, '2024-04-19', '9:00', '1', 'A+'),
(3, 'noor', 'mansour', 'female', 4456672, '2024-04-05', '9:00', '1', 'O+'),
(6, 'meryem', 'merzoug', 'female', 55745463, '2024-04-27', '9:00', '', 'AB+'),
(7, 'mostafa', 'nadour', 'male', 453446453, '2024-04-17', '11:30', '1', 'B-'),
(11, 'karima', 'mnr', 'female', 35434643, '2024-04-22', '10:40', '', 'A-');

-- --------------------------------------------------------

--
-- Structure de la table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `code` int(100) NOT NULL,
  `otp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`, `code`, `otp`) VALUES
(4, 'karimamnr', 'karima8@gmail.com', '$2y$10$J7P0tzOyo/fcA2KfC9q/xefTlZS5xF3uEbRBmpfcDmx9AntsaCH0W', 'admin', 0, 0),
(5, 'karimamnr', 'karima4@gmail.com', '$2y$10$xNWsEvQ6GvtgnMhqk.CPce3hhAxRSQ8wDacnsgfw.z4qLyic.vjVS', 'admin', 0, 0),
(9, 'mehdii', 'mehdi@gmail.com', '$2y$10$EhtbZnUVGSZg.QxucwznLOARvyHn2X8yStfeVDkzj9/AQEyIP1Gt.', 'admin', 0, 0),
(10, 'karima', 'karima130@gmail.com', '$2y$10$uX54kN6wmadiG7CCQqaxIeBSEP0i6JvwwLGwZR589fF.mq8zYPrJi', 'admin', 0, 0),
(11, 'karima', 'karima130@gmail.com', '$2y$10$O0SPKvTiv3hLYySUQzK4aeb7/I0apY3Lh8fmbJ15t094ADwtJRIZG', 'admin', 0, 0),
(12, 'karima', 'karima130@gmail.com', '$2y$10$7XMFbWmnsqb9MWr05Gn0Ve8olBGyS11fKBqk5x2T4zbJyowkz4qiq', 'admin', 0, 0),
(13, 'karimamnr', 'karima5@gmai.com', '$2y$10$vqUHyWipuM5vo4crLlvDsO2qU/km/G4FKTZfRS6e.b/J/0wePBjli', 'admin', 0, 0),
(14, 'karimamnr', 'karimamnr130@gmail.com', '$2y$10$Cpyw8un42VNPoZ/fnRVR/u1XGiGgoeRMwboelyRX37zP/I.VCsGkS', 'admin', 85, 0),
(15, 'karimamnr', 'karima6@gmail.com', '$2y$10$dF3w1r7U75NZTXsFFnXtu.Kwz5WX5QP5UKT4tYxuVBJznceM7o/6C', 'admin', 0, 0),
(16, 'karimam', 'karima10@gmail.com', '$2y$10$yOWJmTf/Kt4IxVXLW8WqzOTqhu5wu2jQeKpS87.E8cE.zhClKm42G', 'admin', 0, 0),
(17, 'noormnr', 'noor4@gmail.com', '$2y$10$UaVMmQEw0fv3d2oXWoTCNebsmigOUfT7PIwTNwrm1g.OMY8P3VeL6', 'admin', 0, 0),
(18, 'karimaman', 'karimaman2@gmail.com', '$2y$10$Wb21XLctoqTRhDVCZOwHYe755e5bjkT5gSndwv.Dy7UqdtmkObGGi', 'user', 0, 0),
(19, 'safimh', 'safi7@gmail.com', '$2y$10$QlinW3dHk.KnaXbgl4jr8OCsRsivEUekL.D9NDC8wrkik8bY.N5vq', 'admin', 0, 0),
(20, 'meryemmg', 'meryem9@gmai.com', '$2y$10$DzRB.iif6xEeHdz028Ad/eB4nz9jSNoyTmTDPM1tYlXJWvBG9prtS', 'admin', 0, 0),
(21, 'karima', 'karima5@gmail.com', '$2y$10$w9NPk7N/YyedDjGa6w3IOOLHp4WuCssB1k3uZSsEdafxVrnStY8Wa', 'admin', 715, 0),
(22, 'noorm', 'noor0@gmail.com', '$2y$10$K0j7S2Lp56z7LnNgoHGFEOjut7MMiG9ymLjTI4309VjZrUAow473m', 'admin', 0, 0),
(23, 'mustafaxv', 'mostafa2@gmail.com', '$2y$10$wfnDXO67h1Xo0eAP7kuTuexO6CJgswXoDupBoe51punie8rxM.rF6', 'admin', 0, 0),
(24, 'mouha ', 'mouha@gmail.com', '$2y$10$jCY88i4.754Myh3Fvv4wNeRAmjixH0daSzG9uaAAVbSn9kVWYBnmy', 'admin', 2147483647, 0),
(25, 'mhamed', 'mhamed3@gmail.com', '$2y$10$hY/8itHNU5jfbrnedWoCJOT/eOl7vdGCr5/Xkccom.kigETcG.G2W', 'admin', 0, 0),
(26, 'hhhh', 'hh@gmail.com', '$2y$10$/gzcNKfVSplkjyLfkmdDIu07awaN0WAj/0irE1GZZaPLqIhhzeoL2', 'admin', 0, 0),
(27, 'KKK', 'KOCEIRehdi@gmail.com', '$2y$10$G47nWT5rgHJ61yj1AR0g6OiTbS2.MX3gIJkFCHnVO9kuGz3O8qBT6', 'user', 0, 0),
(28, 'wahiba', 'wahiba@gmail.com', '$2y$10$nEieY1UPCTOxSRlZb5AR4O.sx/5kOVa6Y/9lygkC3c4WYboRKk4Fm', 'admin', 0, 0),
(29, 'mehdi', 'mehdi4@gmail.com', '$2y$10$SXP86oiFE/hmy4EAh5l.nuZssKT/811FLONsh21gSRwPOoK5zCzcq', 'admin', 0, 0),
(30, 'safi', 'safiou10@gmail.com', '$2y$10$zlPogB6E2XR9Nkxsbx4vOeOBoyA1t.iLsVjE37eBD46.GTvTgtm9q', 'admin', 0, 0),
(31, 'gg', 'gg@gmail.com', '$2y$10$j/IsA0A6JDxpAGdqs9zUfe7mzY5QEgC55hO70.2Zmodry9rHNcG8u', 'admin', 0, 0),
(32, 'dhikra', 'dhikra6@gmail.com', '$2y$10$fbJ7zpmYCuPtoHxRfL3riedaRBNjqlZDvGTALCzaPeJalf1ILyg.e', 'admin', 0, 0),
(33, 'meryem', 'meryem5@gmail.com', '$2y$10$3HZgDFHj5FKUA8Ufn.PavukiYgBmmdEGC5cwlhnIskcjdRnOpB3iS', 'admin', 0, 0),
(34, 'karima', 'karima@gmail.com', '$2y$10$siSpaB0WWCstYUeEbCi7Dup/NIQ.YvcPRfXv52i07c2TzNyM67iKK', 'user', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `patient_dr1`
--
ALTER TABLE `patient_dr1`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `patient_dr2`
--
ALTER TABLE `patient_dr2`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `patient_dr3`
--
ALTER TABLE `patient_dr3`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `patient_dr1`
--
ALTER TABLE `patient_dr1`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `patient_dr2`
--
ALTER TABLE `patient_dr2`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `patient_dr3`
--
ALTER TABLE `patient_dr3`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
