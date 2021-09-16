-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql
-- Généré le : jeu. 16 sep. 2021 à 17:56
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
(6, '6. Cardboard boxes\r\n7. On human\'s face\r\n', '2021-09-13 19:30:37', 2, 5),
(29, 'DOORS:\r\n\r\nDo not allow closed doors in any room. To get door opened, stand on hind legs and hammer with forepaws. Once door is opened, it is not necessary to use it. After you have ordered an \"outside\" door opened, stand halfway in and out and think about several things. This is particularly important during very cold weather, rain, snow, or mosquito season. Swinging doors are to be avoided at all costs.\r\n\r\nCHAIRS and RUGS:\r\n\r\nIf you have to throw up, get to a chair quickly. If you cannot manage in time, get to an Oriental rug. If there is no Oriental rug, shag is good. When throwing up on the carpet, make sure you back up so that it is as long as the human\'s bare foot.\r\n\r\nBATHROOMS:\r\n\r\nAlways accompany guests to the bathroom. It is not necessary to do anything -- just sit and stare.\r\n\r\nHAMPERING:\r\n\r\nIf one of your humans is engaged in some close activity and the other is idle, stay with the busy one. This is called \"helping\", otherwise known as \"hampering.\" Following are the rules for \"hampering:\r\n\r\na) When supervising cooking, sit just behind the left heel of the cook. You cannot be seen and thereby stand a better chance of being stepped on and then picked up and comforted.\r\nb) For book readers, get in close under the chin, between eyes and book, unless you can lie across the book itself.\r\nc) For knitting projects or paperwork, lie on the work in the most appropriate manner so as to obscure as much of the work or at least the most important part. Pretend to doze, but every so often reach out and slap the pencil or knitting needles. The worker may try to distract you; ignore it. Remember, the aim is to hamper work. Embroidery and needlepoint projects make great hammocks in spite of what the humans may tell you.\r\nd) For people paying bills (monthly activity) or working on income taxes or Christmas cards (annual activity), keep in mind the aim -- to hamper! First, sit on the paper being worked on. When dislodged, watch sadly from the side of the table. When activity proceeds nicely, roll around on the papers, scattering them to the best of your ability. After being removed for the second time, push pens, pencils, and erasers off the table, one at a time.\r\ne) When a human is holding the newspaper in front of him/her, be sure to jump on the back of the paper. They love to jump.\r\nWALKING:\r\nAs often as possible, dart quickly and as close as possible in front of the human, especially: on stairs, when they have something in their arms, in the dark, and when they first get up in the morning. This will help their coordination skills.\r\n\r\nBEDTIME:\r\n\r\nAlways sleep on the human at night so s/he cannot move around. PLAY:\r\n\r\nThis is an important part of your life. Get enough sleep in the daytime so you are fresh for your nocturnal games. Below are listed several favorite cat games that you can play. It is important though to maintain one\'s Dignity at all times. If you should have an accident during play, such as falling off a chair, immediately wash a part of your body as if to say \"I MEANT to do that!\" It fools those humans every time.\r\n\r\nCAT GAMES:\r\n\r\n\"Catch Mouse\":\r\nThe humans would have you believe that those lumps under the covers are their feet and hands. They are lying. They are actually Bed Mice, rumored to be the most delicious of all the mice in the world, though no cat has ever been able to catch one. Rumor also has it that only the most ferocious attack can stun them long enough for you to dive under the covers to get them. Maybe YOU can be the first to taste the Bed Mouse!\r\n\r\n\"King of the Hill\":\r\nThis game must be played with at least one other cat. The more, the merrier! One or both of the sleeping humans is Hill 303 which must be defended at all costs from the other cat(s). Anything goes. This game allows for the development of unusual tactics as one must take the unstable playing theater into account.\r\n\r\n\"Remember Your Roots\":\r\nRemember that you, as a cat, are a direct relative of lions, tigers, and other jungle cats. Remind your humans of this frequently. The game is played by hiding behind furniture, bags, or basically anything which allows you to be hidden, yet maintain a good hunting position. Quietly stalk your prey, and then jump out and attack it as soon as you are sure no one\'s looking. Any furniture makes good Jungle foliage.\r\n\r\nWARNING:\r\nPlaying either of these games to excess will result in expulsion from the bed and possibly from the bedroom. Should the humans grow restless, immediately begin purring and cuddle up to them. This should buy you some time until they fall asleep again. If one happens to be on a human when this occurs, this cat wins the round of King of the Hill.\r\n\r\nTOYS:\r\n\r\nAny small item is a potential toy. If a human tries to confiscate it, this means that it is a Good Toy. Run with it under the bed. Look suitably outraged when the human grabs you and takes it away. Always watch where it is put so you can steal it later. Two reliable sources of toys are dresser tops and wastebaskets. There are several types of cat toys. Bright shiny things like keys, broaches, or coins should be hidden so that the other cat(s) or humans can\'t play with them. They are generally good for playing hockey with on uncarpeted floors. Dangly and/or string-like things such as shoelaces, cords, gold chains, and dental floss also make excellent toys. They are favorites of humans who like to drag them across the floor for us to pounce on. When a string is dragged under a newspaper or throw rug, it magically becomes the Paper/Rug Mouse and should be killed at all costs. Take care, though. Humans are sneaky and will try to make you lose your Dignity.\r\n\r\nPAPER BAGS:\r\n\r\nWithin paper bags dwell the Bag Mice. They are small and Camouflaged to be the same color as the bag, so they are hard to see. But you can easily hear the crinkling noises they make as they scurry around the bag. Anything, up to and including shredding the bag, can be done to kill them. Note: any other cat you may find in a bag hunting for Bag Mice is fair game for a Sneak Attack, which will usually result in a great Tag match.\r\n\r\nFOOD:\r\n\r\nIn order to get the energy to sleep, play, and hamper, a cat must eat. Eating, however, is only half the fun. The other half is getting the food. Cats have two ways to obtain food: convincing a human you are starving to death and must be fed *NOW*; and hunting for it oneself. The following are guidelines for getting fed.\r\n\r\na) When the humans are eating, make sure you leave the tip of your tail in their dishes when they are not looking.\r\nb) Never eat food from your own bowl if you can steal some from the table.\r\nc) Never drink from your own water bowl if a human\'s glass is full enough to drink from.\r\nd) Should you catch something of your own outside, it is only polite to attempt to get to know it. Be insistent -- your food will usually not be so polite and try to leave.\r\ne) Table scraps are delicacies with which the humans are unfortunately unwilling to readily part. It is beneath the Dignity of a cat to beg outright for food as lower forms of life such as dogs will, but several techniques exist for ensuring that the humans don\'t forget you exist. These include, but are not limited to: jumping onto the lap of the \"softest\" human and purring loudly; lying down in the doorway between the dining room and the kitchen, the Direct Stare, and twining around people\'s legs as they sit and eat while meowing plaintively.\r\nSLEEPING:\r\nAs mentioned above, in order to have enough energy for playing, a cat must get plenty of sleep. It is generally not difficult to find a comfortable place to curl up. Any place a human likes to sit is good, especially if it contrasts with your fur color. If it\'s in a sunbeam or near a heating duct or radiator, so much the better. Of course, good places also exist outdoors, but have the disadvantages of being seasonal and dependent on current and previous weather conditions such as rain. Open windows are a good compromise.\r\n\r\nSCRATCHING POSTS:\r\n\r\nIt is advised that cats use any scratching post the humans may provide. They are very protective of what they think is their property and will object strongly if they catch you sharpening your claws on it. Being sneaky and doing it when they aren\'t around won\'t help, as they are very observant. If you are an outdoor kitty, trees are good. Sharpening your claws on a human is a definite no-no!\r\n\r\nHUMANS:\r\n\r\nHumans have three primary functions: to feed us, to play with and give attention to us, and to clean the litter box. It is important to maintain one\'s Dignity when around humans so that they will not forget who is the master of the house. Humans need to know basic rules. They can be taught if you start early and are consistent.', '2021-09-16 08:15:17', 9, 5),
(32, 'Show your tags and tattoos <3', '2021-09-16 08:17:22', 10, 4),
(33, 'PAW Patrol, PAW Patrol\r\nWe\'ll be there on the double\r\nWhenever there\'s a problem\r\n\r\nPAW Patrol, PAW Patrol\r\nWhenever you\'re in trouble\r\nPAW Patrol, PAW Patrol\r\nWe\'ll be there on the double\r\nNo job\'s too big\r\nNo pup\'s too small!\r\nPAW Patrol, we\'re on a roll!\r\nSo here we go\r\nPAW Patrol\r\nWhoa-oh-oh-oh\r\nPAW Patrol\r\nWhoa-oh-oh-oh-oh\r\nPAW Patrol!\r\n*MEW*\r\n', '2021-09-16 08:17:22', 11, 5);

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
(4, 'miou miou miou miou', '2021-09-13 20:33:57', 3, 6),
(9, 'Rules (be kind)', '2021-09-15 12:54:41', 1, 6),
(10, 'TAGS AND TATTOOS', '2021-09-16 08:13:04', 2, 4),
(11, 'PAWS PATROLS', '2021-09-16 08:13:04', 4, 5);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(8) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_signature` varchar(255) DEFAULT 'Signé cat''s eyes',
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
(6, 'Minou', '$2y$10$/IPzyeWA.xEI.S4XWUr8M.GLTuGQOGnGzz4KvJq5KOw01lPmiudVK', 'minou@gmail.com', 'mew mew mew', '2021-09-10 09:38:34', 1),
(7, 'Poupouille', '$2y$10$2lXeodCGu35dacrY62R89e8gZsBoQf2s3SJ1w7Dti4rQzlVld27tG', 'poupouille@gmail.com', 'Signé cat\'s eyes', '2021-09-16 17:53:08', 1);

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
  MODIFY `message_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
