-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 01 avr. 2019 à 09:17
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site_portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `id_competence` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `niveau` varchar(250) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sujet` varchar(250) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `form`
--

CREATE TABLE `form` (
  `id_form` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `lieu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `form`
--

INSERT INTO `form` (`id_form`, `titre`, `date`, `description`, `lieu`) VALUES
(1, 'CODE ACADEMY', '2014', 'Introduction to programming languages. Self learning to code online. Achieving 8 badges and acquiring 1 skill => Make a Website.', 'Home'),
(2, 'CRÉAPÔLE ', '2014-2015', 'First year in a school of art & design. Advanced training in crafts related to art and design. Learning different drawing techniques and history of art. Realization of models and sculpture. Introduction to Photoshop.', 'Paris'),
(3, 'LA SOURCE', '2015', 'Training in first aid procedures for children and infants with certification.', 'Poissy'),
(4, 'COURS FLORENT', '2015', 'Inventory of technical and artistic skills.\r\nConfidence exercises.\r\nStake-out exercises: work on the imagination, listening, movement.\r\nBreath and diction.\r\nWork of classical, modern or contemporary theater scenes.', 'Paris'),
(5, 'WEB FORCE 3', '2018-2019', 'Training to acquire \"RNCP\" certifications: web design and web development techniques.\r\nLearning HTML / CSS, JavaScript, BootStrap, PHP, JQuery, AngularJS, Ajax, Symfony, Responsive design + UX / UI design, GitHub and Gimp.', 'Poissy');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_formation` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `date` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `lieu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `titre`, `date`, `description`, `lieu`) VALUES
(3, 'CODE ACADEMY', '2014 ', 'Initiation aux langages informatique. Apprentissage du code HTML & CSS en ligne. Obtention de 8 badges et 1 compétence complétée => Make a Website. ', 'Domicile'),
(4, 'CRÉAPÔLE ', '2014 - 2015', 'Première année préparatoire dans une école d\'art & de design. Formation poussée aux métiers portés sur l\'art et le design. Apprentissage de différentes techniques de dessins et histoire de l\'art. Réalisation de maquettes et sculpture. Initiation à Photoshop.', 'Paris'),
(5, 'LA SOURCE', '2015', 'Formation aux gestes de premiers secours sur enfants et nourrissons avec certification. ', 'POISSY'),
(6, 'COURS FLORENT', '2015 ', 'Inventaire des aptitudes techniques et artistiques. \r\nExercices de mise en confiance.\r\nExercices de mise en jeu : travail sur l’imaginaire, l’écoute, le mouvement.\r\nRespiration et diction.\r\nTravail de scènes de théâtre classique, moderne ou contemporain.', 'Paris'),
(7, 'WEB FORCE 3', '2018 - 2019', 'Formation en vue de l\'obtention des certifications \"RNCP\": techniques d\'intégration et de développement web.\r\nApprentissage des codes HTML/CSS, JavaScript, BootStrap, PHP, JQuery, AngularJS, Ajax, Symfony, Responsive design + UX / UI design, GitHub et Gimp.', 'Poissy');

-- --------------------------------------------------------

--
-- Structure de la table `intro_en`
--

CREATE TABLE `intro_en` (
  `id_about` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `sous-titre` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `intro_en`
--

INSERT INTO `intro_en` (`id_about`, `titre`, `sous-titre`, `description`) VALUES
(5, 'WELCOME', 'My name is Julie', 'I\'m 23 years old from a little city near Paris and I really like my job.');

-- --------------------------------------------------------

--
-- Structure de la table `intro_fr`
--

CREATE TABLE `intro_fr` (
  `id_intro` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `sous-titre` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `intro_fr`
--

INSERT INTO `intro_fr` (`id_intro`, `titre`, `sous-titre`, `description`) VALUES
(1, 'BIENVENUE', 'Je m\'appelle Julie', 'J\'habite dans une petite ville pres de Paris et j\'adore mon travail.');

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `language` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id_projet` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `language` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `skill`
--

CREATE TABLE `skill` (
  `id_skill` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `niveau` varchar(100) NOT NULL,
  `logo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `age` int(3) NOT NULL,
  `ville` varchar(200) NOT NULL,
  `phone` int(10) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `password`, `email`, `age`, `ville`, `phone`, `photo`) VALUES
(1, 'Buisson MCX', 'Julie', 'herkimer', 'juliebuisson18@gmail.com', 23, 'Poissy', 625790989, 'C:\\xampp\\htdocs\\portfolio\\img\\me.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id_competence`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_form`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `intro_en`
--
ALTER TABLE `intro_en`
  ADD PRIMARY KEY (`id_about`);

--
-- Index pour la table `intro_fr`
--
ALTER TABLE `intro_fr`
  ADD PRIMARY KEY (`id_intro`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id_projet`);

--
-- Index pour la table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `id_competence` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `form`
--
ALTER TABLE `form`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `intro_en`
--
ALTER TABLE `intro_en`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `intro_fr`
--
ALTER TABLE `intro_fr`
  MODIFY `id_intro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
