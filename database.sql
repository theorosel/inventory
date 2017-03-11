-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Sam 11 Mars 2017 à 12:26
-- Version du serveur :  5.6.34
-- Version de PHP :  7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_inventory`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `date`) VALUES
(3, 'Tendance', 'Tendance.', '2017-03-11 01:39:29'),
(4, 'Classique', 'Classique.', '2017-03-11 02:15:28'),
(5, 'Vintage', 'Vintage.', '2017-03-11 10:39:45');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `category`, `date`, `price`, `quantity`, `image`) VALUES
(46, 'CRISPY', 'Adoptez un style croquant et croustillant. Crispy est une paire de lunettes marron écaille aux formes généreuses. Un grand bol de tendance combiné avec la finesse du métal doré. Ravagez tout sur votre passage en la personnalisant en solaire avec des verres noirs à 85%!', 3, '2017-03-11 01:48:00', 19, 45, '1489193281.png'),
(47, 'FUNAMBULE', 'Si vos économies ne tiennent qu’à un fil, polette vient à la rescousse! Funambule est une monture aviator alliant plastique flexible et métal doré. On approuve les extrémités argentées des branches qui viennent rehausser l’élégance du noir!   Osez la personnaliser en solaire avec des verres noir 85%!', 3, '2017-03-11 01:49:06', 29, 123, '1489193347.png'),
(48, 'SAVANA BLACK', 'On a tous une fashion obsession et elle se nomme Savana Black. Une monture en plastique flexible aux formes XXL. Le meilleur allié pour un look tendance!   Une paire de lunettes parée d\'un pont clé!', 3, '2017-03-11 01:50:28', 19, 768, '1489193428.png'),
(49, 'SAVANA', 'Un poil provocante et ultra jouissive, Savana est une monture incontournable. Une paire de lunettes XL parée d’un pont clé et de subjuguantes rondeurs. Une véritable tigresse!   Féline et entièrement en plastique flexible!', 3, '2017-03-11 02:11:17', 18, 321, '1489194677.png'),
(50, 'BARBAROSSA BI', 'On s’octroie l’assurance d’une apparence élégante avec Barbarossa Bi. Une paire de lunettes demi-cerclée mariant le couple rétro, noir et blanc, pour un résultat des plus charmants. Captivante.   Une monture aux formes pulpeuses!', 3, '2017-03-11 02:14:45', 17, 112, '1489194886.png'),
(51, 'SOUVENIR', 'Après une incroyable aventure, un voyageur prend le temps de se poser à l’arrière de son navire, afin de contempler l’écume délaissée. Souvenir est une paire de lunettes ovale et vintage. Une délicieuse couleur miel, accompagnée d’un pont clé renfermant tous ses secrets.   On aime ses tenons dorés, mimant avec classe les boutons de manchettes.', 4, '2017-03-11 02:21:30', 32, 342, '1489195290.png'),
(52, 'SHANGHAI', 'Si Shanghai s’élève comme la ville moderne de cette décennie, elle recèle de petits quartiers vintages. Mixant noir de café et marron caramel, cette paire de lunettes épouse le regard à l’aide de ses formes ovales et généreuses. Une monture parée de tenons plus étincelants que la Perle de l’Orient!', 4, '2017-03-11 10:32:39', 35, 532, '1489224760.png'),
(53, 'MONACO', 'La petite principauté méditerranéenne s’est vue donner naissance au nouveau prince de la mode. Monaco, de noir vêtu, se distingue de par ses formes rectangulaires et gracieuses. Une paire de lunettes en acétate poli à la main. Noble!', 4, '2017-03-11 10:33:31', 32, 123, '1489224812.png'),
(54, 'SWAN', 'Swan Black est en plus d’être une danseuse étoile, une paire de lunettes de qualité. Une monture aux formes ovales et gracieuses. On aime ses tenons argentés qui rehaussent sa tenue noir d’aniline. Sensuelle!', 4, '2017-03-11 10:34:24', 32, 168, '1489224864.png'),
(55, 'DAUPHINE', 'Dans l’atelier polette a été confectionnée avec rigueur et délicatesse, Dauphine Black. Une monture de qualité aux courbes gracieuses. Une paire de lunettes s’étant accaparée le noir de jais avec élégance.', 4, '2017-03-11 10:37:30', 35, 347, '1489225050.png'),
(56, 'TAROT', 'Vous avez tiré la bonne carte! Tarot est une paire de lunettes marron écaille, intégralement en plastique flexible. Une monture rectangulaire aux formes généreuses et parée d’un pont clé. Fusionnelle!', 4, '2017-03-11 10:38:14', 23, 567, '1489225095.png'),
(57, 'ALPES', 'Que l’on soit fondue ou plutôt raclette, Alpes met tout le monde d’accord. Une monture aux formes rondes et pulpeuses, dont les nuances marron nous rappellent la couleur des chalets. Une paire de lunettes faite d’acétate et parée d’un pont clé! Sublime!', 5, '2017-03-11 10:43:19', 33, 122, '1489225400.png'),
(58, 'PHANTOMS', 'Phantoms renferme l’âme d’un illustre vigneron. Profondément rouge bordeaux, cette paire de lunettes s’est procurée une forme papillon des plus design. Un précieux millésime tout en acétate poli à la main. À consommer sans modération!', 5, '2017-03-11 10:44:46', 32, 134, '1489225486.png'),
(59, 'CALIFORNIA VIEW', 'Dans la vallée de Coachella, California View Bronze s’inspire de la couleur de ces terres arides. Une monture aux formes ovales et minimalistes. Munie de branches aux détails en reliefs, on craque pour son charmant pont droit. Une paire de lunettes dont on a hâte d\'ouvrir le coffret. Chic!', 5, '2017-03-11 10:45:34', 49, 168, '1489225535.png'),
(60, 'FLORIJN', 'Savourez tout le confort d’une monture en acétate poli à la main, avec Florijn. Un design ultra contemporain condensé dans une paire de lunettes aux détails incrustés. D’inspiration Hollandaise, on craque pour son profil en forme d’écrou et sa couleur miel. Unique!', 5, '2017-03-11 10:46:23', 44, 194, '1489225584.png'),
(61, 'SCOTT', 'Vous en rêviez: Polette l\'a fait! La superbe Scott est désormais déclinée en noir pour un effet ultra stylisé. Il suffit d\'observer les minutieuses finitions pour comprendre la qualité de cette monture. En acétate, polie à la main, la Scott a la classe et ça se voit. Si vous n\'êtes pas encore tombé(e) sous le charme, c\'est que vous n\'avez pas osé la regarder droit dans les yeux: une tombeuse la Scott.. on vous aura prévenus!', 5, '2017-03-11 10:50:31', 33, 125, '1489225831.jpg'),
(62, 'GASPARD', 'Gaspard est une petite paire de lunettes à la délicieuse couleur marron chocolat. Un intérieur aux nuances savoureuses, se cachant derrière un subtil effet bois. Surprenante!', 5, '2017-03-11 10:51:27', 35, 177, '1489225887.png'),
(63, 'FRANC-BOURGEOIS', 'Tout droit venue de la capitale, la sphère fashion aime et admire Franc-bourgeois. Un modèle aux formes gracieuses tout en acétate poli à la main. De sa couleur miel jusqu’aux plus intimes de ses détails, l’élégance de cette paire de lunettes est irréfutable!', 5, '2017-03-11 10:53:25', 29, 345, '1489226006.jpg'),
(64, 'LITTÉRATURE', 'S’apprêter de Littérature c’est comme plonger dans un grand livre d’aventures. Une paire de lunettes exaltante aux formes papillonnantes. Pleine de charme et entièrement en acétate poli à la main!', 5, '2017-03-11 10:53:51', 34, 322, '1489226032.jpg'),
(65, 'DIVERGENT', 'Fabriquée main, Divergent est une paire de lunettes tendance. Dotée d\'une qualité incroyable, cette monture en acétate embrasse une couleur entre le chocolat et l\'ambre. Optez pour un regard accrocheur avec ce modèle chic aux formes rectangulaires et gracieuses.', 5, '2017-03-11 10:54:45', 34, 225, '1489226085.png'),
(66, 'KARLA', 'Une monture aux courbes divines ! La Karla se pare de branches dorées et de nuances chatoyantes pour éclairer votre regard et rehausser votre style d\'une note rétro.', 5, '2017-03-11 10:56:00', 34, 274, '1489226160.jpg'),
(67, 'KRUGER BLACK', 'Misez sur la simplicité! Kruger Black est une paire de lunettes aux formes ovales et discrètes. Bordée de noir, on aime ses courbes faites d’acétate. Une monture prête à adopter nos verres anti-reflets et anti-rayures!', 4, '2017-03-11 10:57:22', 29, 447, '1489226242.png');

-- --------------------------------------------------------

--
-- Structure de la table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `reports`
--

INSERT INTO `reports` (`id`, `title`, `file`, `date`) VALUES
(30, 'DailyReport_March11', '1489230032.csv', '2017-03-11 12:00:31');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'root', '50fb88395834a9a1077e25b76270451a5cfd1e43395542dbff6e4649b1781f8d');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT pour la table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
