-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql
-- Généré le : mer. 15 sep. 2021 à 07:30
-- Version du serveur : 10.6.4-MariaDB-1:10.6.4+maria~focal
-- Version de PHP : 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `CyberCats`
--

-- --------------------------------------------------------

--
-- Structure de la table `boards`
--

CREATE TABLE `boards` (
  `board_id` int(8) NOT NULL,
  `board_name` varchar(255) NOT NULL,
  `board_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `boards`
--

INSERT INTO `boards` (`board_id`, `board_name`, `board_description`) VALUES
(1, 'GENERAL', 'cheat-chat'),
(2, 'DEVELOPMENT', 'développés couchés décalés '),
(3, 'SMALL TALK', 'pretty serious business'),
(4, 'EVENTS', 'what we do in the shadows ');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(8) NOT NULL,
  `message_content` text NOT NULL,
  `message_date` datetime NOT NULL DEFAULT current_timestamp(),
  `topic_id` int(8) DEFAULT 1,
  `user_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`message_id`, `message_content`, `message_date`, `topic_id`, `user_id`) VALUES
(1, 'Miaou Mews !  Here are some example sentences using my mew/purr pronouns:\r\nMew went to the park.\r\n\r\nI went with purr.\r\n\r\nMew brought purr frisbee.\r\n\r\nAt least I think it was purrs.\r\n\r\nMew threw the frisbee to purrself.\r\n\r\nWhat are yours?', '2021-09-13 08:56:10', 1, 6),
(2, 'I think mew is very nice.\r\nI asked purr if I can borrow purr pencil.\r\nMew told me that the house is purrs.\r\nMew said mew would rather do it purrself.', '2021-09-13 09:19:52', 1, 5),
(3, 'This is so purr-fect', '2021-09-13 11:37:27', 1, 6),
(5, '1) INSIDE THE WARDROBE, ON CLEAN CLOTHES\r\n2) ON THE COMPUTER\r\n3) INSIDE BAGS AND SHOPPERS\r\n4) IN THE SINK\r\n5) ON TOP OF BEDS', '2021-09-13 19:27:35', 2, 6),
(6, '6. Cardboard boxes\r\n7. On human\'s face\r\n', '2021-09-13 19:30:37', 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(8) NOT NULL,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` datetime NOT NULL DEFAULT current_timestamp(),
  `board_id` int(8) NOT NULL,
  `user_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_subject`, `topic_date`, `board_id`, `user_id`) VALUES
(1, 'Meows and Purrs', '2021-09-13 08:55:04', 3, 6),
(2, 'Good sleeping places =^^=', '2021-09-13 19:21:55', 3, 6),
(4, 'miou miou miou', '2021-09-13 20:33:57', 3, 6);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(8) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_signature` varchar(255) DEFAULT NULL,
  `user_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_level` int(8) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_signature`, `user_date`, `user_level`) VALUES
(2, 'Chaton', '$2y$10$NyfsAMD8WZVby23.ShzYIeQEdfaPJVIjYrRoLuk0498YRggUqBrl.', 'sporobross@gmail.com', NULL, '2021-09-09 16:08:20', 1),
(3, 'Minette', '$2y$10$anM3cEyUVNOAWvggEWC2RuDt9NgiOPKRNgezigiVL0Os1LRobS1My', 'minette@gmail.com', NULL, '2021-09-09 16:44:12', 1),
(4, 'Minet', '$2y$10$3VjB7wgFau4TZoZsL2cbUus64hwiJXi3KXCD6fvcpDwZwi5FC.8Ti', 'minet@gmail.com', NULL, '2021-09-10 08:20:19', 1),
(5, 'Pussy', '$2y$10$p4HsfSWDqS8/I7P/UTtWaebPbMIZoirENgsndVebRuX8JIkx/7LU6', 'pussy@gmail.com', NULL, '2021-09-10 09:34:56', 1),
(6, 'Minou', '$2y$10$/IPzyeWA.xEI.S4XWUr8M.GLTuGQOGnGzz4KvJq5KOw01lPmiudVK', 'minou@gmail.com', 'mew mew mew', '2021-09-10 09:38:34', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`board_id`),
  ADD UNIQUE KEY `board_name_unique` (`board_name`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `user_id` (`user_id`) USING BTREE,
  ADD KEY `topic_id` (`topic_id`) USING BTREE;

--
-- Index pour la table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `user_id` (`user_id`) USING BTREE,
  ADD KEY `board_id` (`board_id`) USING BTREE;

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name_unique` (`user_name`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `boards`
--
ALTER TABLE `boards`
  MODIFY `board_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`board_id`) REFERENCES `boards` (`board_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topics_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
