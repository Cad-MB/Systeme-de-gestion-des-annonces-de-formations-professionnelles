-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 09 juil. 2021 à 20:49
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
(1, 'admin', '0000000000', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `admin_reply` varchar(50) NOT NULL,
  `admin_sent_time` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `name`, `subject`, `msg`, `date`, `admin_reply`, `admin_sent_time`) VALUES
(43, 'client1', 'Need help about a po', 'msg 1...........', '2021-06-12 12:20:02', '', NULL),
(44, 'client1', 'hey', 'msg2...........', '2021-06-12 00:01:59', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `client_signup`
--

CREATE TABLE `client_signup` (
  `signup_id` int(20) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `reg_time` datetime NOT NULL DEFAULT current_timestamp(),
  `address` varchar(40) NOT NULL,
  `pass_re_code` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client_signup`
--

INSERT INTO `client_signup` (`signup_id`, `firstname`, `lastname`, `username`, `phone`, `email`, `password`, `reg_time`, `address`, `pass_re_code`) VALUES
(130, 'abc', 'abc', 'abc', '000', 'abc@mail.com', '123', '2021-06-15 03:46:20', '', NULL),
(132, 'teste', 'teste', 'testereel', '6789', 'test@gmail.com', 'qwwerty', '2021-07-04 10:56:37', '', NULL),
(134, 'adhérent', 'adhérent', 'adhérent', '0000', 'adhérent@mail.com', 'qwert', '2021-07-04 18:30:50', '', NULL);

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
(3, 'Himel', 'saib@gmail.com', 'Help', 'I need help', '2020-05-22 17:11:19'),
(5, 'fdfsfsd', 'admin@admin.com', 'fali', 'jhvj;kvhxzck', '2021-06-10 05:06:04'),
(6, 'test', 'tes@gmail.con', 'xqc', '7777777777777777777777777', '2021-06-13 23:55:28'),
(7, 'jean michelle questi', 'jefaitchier@gmail.com', '123tadaronelaplanche', 'mage tes morts. mange tes mange morts', '2021-06-14 19:23:54'),
(8, 'stp', 'stp@gmail.com', 'stp', 'stp', '2021-07-08 03:40:48');

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
  `cont_details` varchar(30) NOT NULL,
  `de_place` varchar(25) NOT NULL,
  `content_status` varchar(15) NOT NULL DEFAULT 'Going',
  `post_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `content`
--

INSERT INTO `content` (`b_content_id`, `b_username`, `b_name`, `b_email`, `b_phone`, `category`, `type`, `content_name`, `est_price`, `quantity`, `cont_details`, `de_place`, `content_status`, `post_time`) VALUES
(33, 'abc', 'Client CL', 'client1@gmail.com', '0000000000', 'Formation', 'type', 'Intro', 1000.00, '1', 'eleve en oran1', 'oran', 'Going', '2020-05-22 07:40:44.697770'),
(36, 'abc', 'sssssssssssssssssssssssss', 'abc@gmail.com', '1234', 'jjjjjj', 'jjjjjjjj', 'intrihjkaslf', 99999999.99, '44', 'hhhhhhhhhhh', 'oran', 'Going', '2021-07-08 20:13:57.294249'),
(37, 'admin', 'sssssssssssssssssssssssss', 'abc@gmail.com', '4536789', 'evenmeneteh', 'guijkgiujiug', 'teste de formation', 0.00, '78', 'gjchvjbhknjhgcvhj', 'hgtfuhj', 'Going', '2021-07-08 21:18:54.843879'),
(39, 'admin', 'sssssssssssssssssssssssss', 'abc@gmail.com', '1234', 'nimporte', 'info', 'sssssssssssssssssssssssss', 99999999.99, '44', 'drygvhjb', 'sssss', 'Going', '2021-07-09 02:38:59.861025'),
(40, 'admin', 'sssssssssssssssssssssssss', 'abc@gmail.com', '1234', 'nimporte', 'jjjjjjjj', 'intrihjkaslf', 99999999.99, '12', 'hh', 'ioagubc', 'Going', '2021-07-09 02:44:59.649066'),
(41, 'admin', 'sssssssssssssssssssssssss', 'abc@gmail.com', '1234', 'nimporte', 'jjjjjjjj', 'intrihjkaslf', 99999999.99, '12', 'hh', 'ioagubc', 'Going', '2021-07-09 02:50:15.847119');

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

--
-- Déchargement des données de la table `content_comments`
--

INSERT INTO `content_comments` (`comment_id`, `content_id`, `client_username`, `client_reply`, `formateur_username`, `formateur_name`, `formateur_phone`, `formateur_comment`, `comment_time`) VALUES
(8, 32, 'saib', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 33, 'eshan', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 34, 'eshan', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 35, 'eshan', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 36, 'abc', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 37, 'admin', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 39, 'admin', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 40, 'admin', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 41, 'admin', NULL, NULL, NULL, NULL, NULL, NULL);

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
(30, 36, 'uploads/user.jpg', 'abc'),
(31, 37, 'uploads/courses-6.jpg', 'admin'),
(33, 39, 'uploads/sqcFcae.png', 'admin'),
(34, 40, 'uploads/user.jpg', 'admin'),
(35, 41, 'uploads/sqcFcae.png', 'admin');

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
  `pass_re_code` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formateur_signup`
--

INSERT INTO `formateur_signup` (`signup_id`, `firstname`, `lastname`, `username`, `phone`, `email`, `password`, `reg_time`, `address`, `pass_re_code`) VALUES
(122, 'formateur ', 'formateur', 'formateur1', '0000000000', 'formateur1@gmail.com', '12345', '2021-06-12 20:05:53', '9 rue des potiers', NULL),
(123, 'ftest', 'ftest', 'ftest', '888888', 'ftest@gmail.com', 'ftst', '2021-06-14 19:18:27', '', NULL);

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
(4, 'sizan@gmail.com', '2020-05-20 22:47:03.048738'),
(7, 'abdelkader.boumessaoud@gm', '2021-06-13 23:49:33.191027');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `client_signup`
--
ALTER TABLE `client_signup`
  MODIFY `signup_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT pour la table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `content`
--
ALTER TABLE `content`
  MODIFY `b_content_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `content_comments`
--
ALTER TABLE `content_comments`
  MODIFY `comment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `content_images`
--
ALTER TABLE `content_images`
  MODIFY `cont_image_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `formateur_signup`
--
ALTER TABLE `formateur_signup`
  MODIFY `signup_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT pour la table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
