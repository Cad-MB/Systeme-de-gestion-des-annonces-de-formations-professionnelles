-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 11 juil. 2021 à 05:39
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `auf`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `phone`, `email`, `password`) VALUES
(1, 'admin', '0', 'admin@mail.com', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `msg` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `admin_reply` varchar(300) NOT NULL,
  `admin_sent_time` datetime(6) DEFAULT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `name`, `subject`, `msg`, `date`, `admin_reply`, `admin_sent_time`, `role`) VALUES
(48, 'kader_bm', 'Requis participation', 'bonjour, quels sont les requis pour participer a quelconque formation?', '2021-07-10 17:16:53', 'regardez la page fb', '2021-07-10 18:30:09.000000', 'client'),
(51, 'Asmaa_Bengueddach', 'Formation  PHP', 'vous devriez lancer une formation en php', '2021-07-10 17:23:09', 'ok', '2021-07-10 18:29:47.000000', 'formateur'),
(52, 'kader_bm', 'event', 'des events prochainement?', '2021-07-10 18:56:07', 'oui', '2021-07-10 19:59:44.000000', 'client');

-- --------------------------------------------------------

--
-- Structure de la table `client_signup`
--

CREATE TABLE `client_signup` (
  `signup_id` int(120) NOT NULL,
  `firstname` varchar(120) NOT NULL,
  `lastname` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `phone` int(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `reg_time` datetime NOT NULL DEFAULT current_timestamp(),
  `address` varchar(120) NOT NULL,
  `pass_re_code` varchar(120) DEFAULT NULL,
  `id_content` int(120) NOT NULL,
  `state` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client_signup`
--

INSERT INTO `client_signup` (`signup_id`, `firstname`, `lastname`, `username`, `phone`, `email`, `password`, `reg_time`, `address`, `pass_re_code`, `id_content`, `state`) VALUES
(2, 'houcine', 'chouaf', 'houcine_ch', 0, 'houcine.chouaf@gmail.com', '123', '2021-07-10 17:50:58', '126th street', NULL, 2, 'En cours');

-- --------------------------------------------------------

--
-- Structure de la table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(110) NOT NULL,
  `m_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `name`, `email`, `subject`, `message`, `m_time`) VALUES
(9, 'farid', 'farid@gmail.com', 'formation a distamce', 'bonjours, je voudrais de renseigner sur les formations a distance disponible ', '2021-07-10 17:52:18'),
(10, 'kader', 'adherent@mail.com', 'formation', 'y en a ti\'il disponible en distenciel ?', '2021-07-10 19:38:35');

-- --------------------------------------------------------

--
-- Structure de la table `content`
--

CREATE TABLE `content` (
  `b_content_id` int(20) NOT NULL,
  `b_username` varchar(25) NOT NULL,
  `b_name` varchar(25) NOT NULL,
  `b_email` varchar(25) NOT NULL,
  `b_phone` varchar(25) NOT NULL,
  `category` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  `content_name` varchar(25) NOT NULL,
  `est_price` double(10,2) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `cont_details` varchar(200) NOT NULL,
  `de_place` varchar(25) NOT NULL,
  `content_status` varchar(15) NOT NULL DEFAULT 'En cours',
  `post_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `content`
--

INSERT INTO `content` (`b_content_id`, `b_username`, `b_name`, `b_email`, `b_phone`, `category`, `type`, `content_name`, `est_price`, `quantity`, `cont_details`, `de_place`, `content_status`, `post_time`) VALUES
(1, '', '', '', '', 'Formation', 'présentiel', 'Montage video', 2000.00, '20', 'Conception d\'une capsule vidéo', 'IGMO, Oran 31000', 'En cours', '2021-07-10 17:02:11.000000'),
(3, '', '', '', '', 'Event', 'présentiel', 'Travail Collaboratif', 1000.00, '50', 'Initiation aux outils de Travail Collaboratif', 'IGMO, Oran 31000', 'En cours', '2021-07-10 17:10:25.000000');

-- --------------------------------------------------------

--
-- Structure de la table `content_comments`
--

CREATE TABLE `content_comments` (
  `comment_id` int(20) NOT NULL,
  `content_id` int(20) NOT NULL,
  `client_username` varchar(100) NOT NULL,
  `client_reply` varchar(100) DEFAULT NULL,
  `formateur_username` varchar(20) DEFAULT NULL,
  `formateur_name` varchar(20) DEFAULT NULL,
  `formateur_phone` varchar(20) DEFAULT NULL,
  `formateur_comment` varchar(20) DEFAULT NULL,
  `comment_time` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `content_images`
--

CREATE TABLE `content_images` (
  `cont_image_id` int(20) NOT NULL,
  `content_id` int(20) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `img_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `content_images`
--

INSERT INTO `content_images` (`cont_image_id`, `content_id`, `filename`, `img_user`) VALUES
(1, 1, '140388268_1069396173563530_1547422558177148051_n.jpg', ''),
(3, 3, 'slider5.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `formateur_signup`
--

CREATE TABLE `formateur_signup` (
  `signup_id` int(20) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `reg_time` datetime NOT NULL DEFAULT current_timestamp(),
  `address` varchar(40) NOT NULL,
  `pass_re_code` varchar(6) DEFAULT NULL,
  `id_content` int(11) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formateur_signup`
--

INSERT INTO `formateur_signup` (`signup_id`, `firstname`, `lastname`, `username`, `phone`, `email`, `password`, `reg_time`, `address`, `pass_re_code`, `id_content`, `state`) VALUES
(1, 'Asmaa', 'Bengueddach', 'Asmaa_Bengueddach', '0', 'Asmaa.Bengueddach@gmail.com', '123456', '2021-07-10 18:04:56', '127th street', NULL, 1, 'En cours'),
(125, 'abc', 'abc', 'abc', '00', 'abc@mail.com', 'abc', '2021-07-10 19:49:50', '', NULL, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `subscribe`
--

CREATE TABLE `subscribe` (
  `sub_id` int(5) NOT NULL,
  `subscribe_email` varchar(25) NOT NULL,
  `sub_time` datetime(6) DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `subscribe`
--

INSERT INTO `subscribe` (`sub_id`, `subscribe_email`, `sub_time`) VALUES
(8, 'adherent@mail.com', '2021-07-10 19:33:09.945846');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `ad_username` (`username`);

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client_signup`
--
ALTER TABLE `client_signup`
  ADD PRIMARY KEY (`signup_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Index pour la table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Index pour la table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`b_content_id`),
  ADD UNIQUE KEY `b_product_id` (`b_content_id`);

--
-- Index pour la table `content_comments`
--
ALTER TABLE `content_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `content_images`
--
ALTER TABLE `content_images`
  ADD PRIMARY KEY (`cont_image_id`),
  ADD UNIQUE KEY `pro_image_id` (`cont_image_id`);

--
-- Index pour la table `formateur_signup`
--
ALTER TABLE `formateur_signup`
  ADD PRIMARY KEY (`signup_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Index pour la table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`sub_id`),
  ADD UNIQUE KEY `subscribe_email` (`subscribe_email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `client_signup`
--
ALTER TABLE `client_signup`
  MODIFY `signup_id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT pour la table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `content`
--
ALTER TABLE `content`
  MODIFY `b_content_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `content_comments`
--
ALTER TABLE `content_comments`
  MODIFY `comment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `content_images`
--
ALTER TABLE `content_images`
  MODIFY `cont_image_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `formateur_signup`
--
ALTER TABLE `formateur_signup`
  MODIFY `signup_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT pour la table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
