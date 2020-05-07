-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 22 déc. 2018 à 23:26
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `2018_mvc`
--
CREATE DATABASE IF NOT EXISTS `2018_mvc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `2018_mvc`;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `image` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(1, 'Artisanat', 'artisanat.jpg'),
(2, 'Informatique', 'info.jpg'),
(3, 'Bien être', 'bien-etre.jpg'),
(4, 'Langue', 'langues.jpg'),
(5, 'Social', 'social.jpg'),
(6, 'Economique', 'economique.jpg'),
(7, 'Technique', 'technique.jpg'),
(8, 'default', 'default.jpg'),
(9, 'Coiffure', 'coiffure.png'),
(10, 'Education', 'education.png'),
(11, 'Machinerie', 'machinerie.png'),
(12, 'Scientifique', 'scientifique.jpg'),
(13, 'Technologie', 'technologie.png');

-- --------------------------------------------------------

--
-- Structure de la table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `description` text NOT NULL,
  `duration` varchar(60) NOT NULL,
  `image` varchar(120) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sections`
--

INSERT INTO `sections` (`id`, `name`, `description`, `duration`, `image`, `cat_id`) VALUES
(1, 'Bachelier en ressources humaines', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at cursus nibh, non laoreet eros. Ut maximus, nibh vitae gravida ultricies, velit enim aliquam sapien, eget pharetra enim leo a felis. Nam blandit a magna non gravida. Aliquam erat volutpat. Morbi nec justo nec ipsum malesuada tristique eu eget massa. Maecenas sit amet viverra justo, vitae feugiat velit. Duis posuere tellus purus, nec feugiat turpis hendrerit eget. Ut vestibulum ante at justo fermentum pretium. Suspendisse potenti.', '4 ans', 'grh.jpg', 6),
(2, 'Bachelier comptabilité', 'Vestibulum ac condimentum tellus. Vestibulum faucibus odio id suscipit sollicitudin. In hac habitasse platea dictumst. In pharetra lacus ac tincidunt maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque rutrum elit leo, congue aliquam urna volutpat at. Donec aliquam, risus vitae ultrices congue, nunc mauris viverra sapien, vitae mattis leo erat quis lectus. Vivamus id ante orci. Fusce volutpat molestie semper. Vivamus iaculis nulla lacus, at egestas libero auctor in. Sed lectus justo, viverra id dictum a, iaculis at felis. Cras sit amet diam sapien. Integer mi quam, vulputate ut est ac, tristique aliquam ante.', '4 ans', 'cpta.jpg', 6),
(3, 'Soins du visage', 'Etiam sit amet consequat enim. Nulla eu ipsum eget ligula varius tristique. Etiam ut felis sed dui rhoncus sodales. Pellentesque maximus lectus quis varius maximus. Nam eu eros at ligula consectetur tristique interdum quis tellus. In quis malesuada ligula. Suspendisse dignissim enim et sem porta, quis pulvinar enim tristique. Vestibulum luctus eu nibh at efficitur. Sed dignissim interdum diam, eget suscipit tellus consectetur et. Etiam gravida tristique ipsum, ut tincidunt augue facilisis in. Nunc convallis feugiat ipsum, eu consequat ipsum laoreet id. Fusce vel lorem sed felis vestibulum eleifend molestie aliquam lectus. Mauris ultrices augue augue.', '1 an', 'visage.jpg', 3),
(5, 'Techniques de broderie', 'Pellentesque vitae ipsum quis mauris ultrices aliquet et vel ex. Sed porttitor ipsum non libero malesuada, at luctus neque malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus elementum ex nec orci fringilla posuere. Sed sed hendrerit mi. Aliquam erat volutpat. Aenean mollis mauris eu lacus varius molestie. Vivamus dignissim iaculis ante, non pretium magna tincidunt eget.\r\n\r\nNam pretium tortor mi. Sed id nulla nec justo tempor condimentum. Nam vel sem sem. Aenean faucibus quis velit eget dictum. Nam dolor nisl, mattis et accumsan sit amet, aliquam eget lacus. Integer consectetur risus sit amet posuere laoreet. Praesent vitae nunc ut eros tristique porttitor. Donec lorem magna, egestas eu justo ac, luctus feugiat nisl. Nulla tempus nibh scelerisque accumsan molestie. Aliquam ac tristique lorem. Sed sollicitudin quis nibh non ultrices. Curabitur accumsan enim vel venenatis ullamcorper.', '1 an', 'broderie.jpg', 1),
(6, 'Bachelier en topographie', 'Donec maximus, <b>Informatique</b> dolor id eleifend aliquam, nunc ipsum sagittis metus, a feugiat est mi molestie mauris. Donec vitae facilisis nunc. Quisque ultricies finibus quam, a consectetur elit rutrum in. Aliquam erat volutpat. Maecenas mattis magna a justo mollis, nec venenatis nisi iaculis. Morbi efficitur magna non risus egestas bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam placerat vulputate nunc, at hendrerit sem tristique sit amet. Vestibulum non est mi. Vivamus ultricies pulvinar luctus. Praesent sed tortor fringilla turpis laoreet vulputate. Curabitur sed elit ac nisi tincidunt eleifend vitae vel nisl. Fusce et ligula ultrices tellus egestas lacinia et non ex.', '4 ans', 'topo.jpg', 5),
(7, 'Huiles essentielles', 'Cras leo risus, feugiat et tincidunt et, porta vel diam. Phasellus iaculis arcu non venenatis vehicula. Vestibulum vehicula orci eget ipsum mollis, eget dictum ligula tristique. Donec finibus faucibus ante, nec ullamcorper massa fermentum vel. Aenean in consequat velit. Etiam in nunc luctus augue placerat tempus a in nunc. Integer velit leo, malesuada sit amet tortor vitae, vulputate fringilla mauris. Praesent consequat ut libero sit amet dapibus. Phasellus eu tellus ac lectus ullamcorper vestibulum. Phasellus in massa cursus, efficitur eros eget, pretium diam. Maecenas et dui eget arcu pretium ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '6 mois', 'huile.jpg', 3),
(8, 'Soins des mains', 'Maecenas ut justo tristique, mattis nisi ac, tempor lectus. Nunc ultricies, ligula a vulputate condimentum, felis sapien sagittis tellus, mattis porta nisl ante ut ante. Nunc commodo aliquet tellus eu tincidunt. Nulla gravida, nisl non tristique faucibus, nulla turpis malesuada tellus, sit amet ultrices tortor urna id ex. Donec pellentesque turpis enim, id viverra tellus condimentum mollis. Aenean id felis quis orci tempus bibendum sed ut nisi. Quisque malesuada viverra ultrices. Etiam posuere nulla sit amet bibendum ullamcorper. Sed eget orci non diam posuere feugiat quis et risus. Sed pretium elit ac arcu facilisis, a consequat eros ultrices.', '1 an', 'mains.jpg', 3),
(9, 'Réparation de montres', 'Ut quis nibh eget lacus efficitur sollicitudin commodo a lectus. In porta tortor sit amet posuere elementum. Nam faucibus metus augue, quis bibendum enim fringilla nec. Aenean posuere iaculis tincidunt. Nunc pulvinar magna sem, ac interdum ante commodo ac. Nullam tincidunt posuere imperdiet. Fusce sit amet volutpat arcu, vitae volutpat libero. Duis at est non nulla suscipit euismod. Etiam a porttitor lorem, vulputate imperdiet metus.', '6 mois', 'montre.jpg', 1),
(11, 'Soins du corps', 'Duis a mi id lacus accumsan vestibulum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam sollicitudin dolor euismod, blandit mauris eget, feugiat purus. Vivamus pellentesque quam quis quam lobortis, ac ultrices erat porttitor. Praesent vulputate hendrerit nunc nec pulvinar. Cras eu condimentum nisi, id mollis risus. Etiam a odio bibendum, pulvinar ante a, imperdiet lorem. Ut a mauris vel elit vehicula pretium. Curabitur gravida eros tellus, ac placerat dui blandit eu.', '2 ans', 'corps.jpg', 3),
(12, 'Décoration de bureau', '<p>Formation en trois <strong>niveaux</strong>:</p><ol><li>niv 1</li><li>niv 2</li><li>niv 3</li></ol>', '3 ans', 'default.jpeg', 5),
(13, 'Anglais', 'Assumenda at aut ducimus error quae sapiente ullam voluptatem! Ab asperiores aut, beatae cum dicta dolores ea earum eius esse exercitationem explicabo iste itaque laborum magni maxime modi neque nisi obcaecati optio perferendis placeat quas repellendus rerum sapiente sequi similique sint sit sunt suscipit ullam unde ut vero voluptas. Asperiores, provident, vero?', '4 ans', 'anglais.jpg', 4),
(14, 'Décoration de intérieur', 'Architecto est ex modi soluta voluptate. Consequatur fugit iusto, maxime minima necessitatibus non, odio, provident quibusdam reiciendis sunt tempore voluptatibus.', '2 ans', 'deco.jpg', 3),
(15, 'Électro‑mécanique', 'Mollitia neque nostrum pariatur quas quis sapiente soluta suscipit tenetur? Accusantium adipisci ex fugiat minima mollitia!Accusamus id nemo officiis omnis optio recusandae veritatis vitae voluptate voluptates. Atque cumque delectus ea eum illo optio provident quae quam soluta vitae? Dolor eaque fuga nostrum perferendis sequi soluta!Accusamus adipisci, aliquam architecto asperiores at autem beatae consectetur cumque cupiditate dolorem doloremque ea exercitationem fuga hic incidunt ipsa iusto laborum pariatur placeat quaerat quos rem tempora, temporibus velit voluptas?', '3 ans', 'electro.jpg', 7),
(16, 'Espagnol', 'Accusamus animi asperiores corporis cum laboriosam minima officia placeat quae temporibus! Dolorem fugit illo impedit iure iusto quis rem vitae. Accusamus assumenda debitis dolores, eum itaque maiores numquam, obcaecati omnis perspiciatis placeat quas repudiandae rerum similique suscipit tempore! Expedita id optio quisquam? ', '5 ans', 'espagnol.jpg', 4),
(17, 'Garnissage', 'Alias illo minus molestiae necessitatibus neque nihil nisi.', '2 ans', 'garnissage.jpg', 1),
(18, 'Couture', 'Accusantium assumenda dolor esse id inventore magnam, nihil possimus provident, quasi quo quod temporibus veniam voluptatibus. Aperiam eius iure officiis perferendis porro rem, similique vel voluptatum. Aperiam.', '2 ans', 'machine01.png', 1),
(19, 'Stylisme', 'Ab eveniet itaque molestias nisi possimus tempora tempore temporibus vitae. Animi aspernatur doloribus explicabo fugiat maiores, minima nobis numquam quos, sint totam unde.', '4 ans', 'machine02.jpg', 1),
(20, 'Menuiserie', 'Aspernatur atque earum eligendi, enim error illo incidunt ipsa itaque obcaecati odit quibusdam tempore totam voluptatum! Culpa cumque doloremque doloribus ducimus eligendi eum excepturi fugit illo libero nam nisi nulla odio quas quasi ratione rem, tempore! Cumque, ea esse odio pariatur sed temporibus ut.', '3 ans', 'menuiserie.jpg', 1),
(21, 'Communication', 'Ab ad adipisci alias, asperiores corporis deleniti earum error est eveniet expedita illum, in inventore ipsam laboriosam magni maiores natus neque nisi obcaecati pariatur placeat quidem quod repudiandae sed sequi similique, ut voluptatem! Accusamus at eaque, esse est eum facere facilis ipsam magni nam nulla obcaecati, quidem, sapiente sint tempore voluptate.', '2 ans', 'sec.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `last_name` varchar(60) DEFAULT NULL,
  `first_name` varchar(60) DEFAULT NULL,
  `login` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(120) DEFAULT NULL,
  `level` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `login`, `password`, `mail`, `level`) VALUES
(1, 'Arifi', 'Gazmen', 'Gazmen', '$2y$10$z00wUo/0n1I5Hr/53AVP5eXi9yd2NAzG5.zfb2amcmWLtKEfJN1eu', 'gazmen@domain.ext', 4),
(2, 'Quentin', 'Quentin', 'Quentin', '$2y$10$aU9RVcKPex58ZL4TZCDj7emfMWNf/yFwyr2teM8OvFke9FYecJIee', 'quentin@domain.ext', 1),
(3, 'Doe', 'John', 'doe', '$2y$10$1t1szWZXfgsL3.D62dmPO.oP1mCKlOvFXhIWLVUfhX1.iLCwlEcHa', 'doe.john@domain.ext', 1),
(4, 'Lee', 'Tim', 'lee', '$2y$10$KKEUyEFcLmyvpzhtSj0OHuzrgXDCazqJb8F4K0LOpub/6188IJgzW', 'lee.tim@domain.ext', 2),
(5, 'Le‑bon', 'Luc', 'Luc', '$2y$10$fR3PdvQvh/VPEmFwvPgIg.S5vZYjiCK81rWl8GqTCOZ6s2cZCCyQ.', 'luc@domain.ext', 2),
(6, 'Test100', 'Test100', 'Test100', '$2y$10$jfgN6tNEytfWEfaK3HWiV.p4yPGSy1lfzL3YDUdjGWz9V2H62yiPu', 'test100@domain.ext', 3);

-- --------------------------------------------------------

--
-- Structure de la table `user_level`
--

CREATE TABLE `user_level` (
  `id` int(11) UNSIGNED NOT NULL,
  `level_name` varchar(120) NOT NULL,
  `level_mail` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_level`
--

INSERT INTO `user_level` (`id`, `level_name`, `level_mail`) VALUES
(1, 'Student', 'student@domain.ext'),
(2, 'Teacher', 'teacher@domain.ext'),
(3, 'Secretary', 'secretary@domain.ext'),
(4, 'Direction', 'direction@domain.ext');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cat_id` (`cat_id`,`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`);

--
-- Index pour la table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`level`) REFERENCES `user_level` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
