-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 17 juil. 2024 à 11:57
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio_v3`
--

-- --------------------------------------------------------

--
-- Structure de la table `educations`
--

CREATE TABLE `educations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_fr` varchar(255) DEFAULT NULL,
  `title_en` text DEFAULT NULL,
  `title_de` varchar(255) DEFAULT NULL,
  `lieu_fr` varchar(255) DEFAULT NULL,
  `lieu_en` varchar(255) DEFAULT NULL,
  `lieu_de` varchar(255) DEFAULT NULL,
  `datedebut` date DEFAULT NULL,
  `datefin` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `educations`
--

INSERT INTO `educations` (`id`, `title_fr`, `title_en`, `title_de`, `lieu_fr`, `lieu_en`, `lieu_de`, `datedebut`, `datefin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Licence professionnelle en développement web et mobile', 'Professional university degree in web and mobile development', 'Berufsuniversitätlizenz im Bereich Web- und Mobilentwicklung', NULL, NULL, NULL, '2021-09-01', '2022-07-01', '2024-07-15 14:47:01', '2024-07-15 14:47:01', NULL),
(2, 'Diplome technicien spécialisé en developpement informatique', 'Specialized Technician Diploma in Computer Development.', 'Diplom als Fachtechniker in Informatikentwicklung.', 'OFPPT NTIC 2 SM | Casablanca, Morocco', NULL, NULL, '2019-09-01', '2021-07-01', '2023-11-23 10:12:06', '2024-07-15 14:37:26', NULL),
(4, 'Baccalauréat science de la vie et de la terre', 'High school diploma with a focus on experimental sciences.', 'Abitur mit Schwerpunkt in den Experimentalwissenschaften.', NULL, NULL, NULL, '2015-09-01', '2018-06-01', '2024-07-15 14:57:32', '2024-07-15 14:57:32', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_fr` varchar(255) DEFAULT NULL,
  `lieu_fr` varchar(255) DEFAULT NULL,
  `lieu_en` varchar(255) DEFAULT NULL,
  `lieu_de` varchar(255) DEFAULT NULL,
  `description_fr` longtext DEFAULT NULL,
  `title_en` text DEFAULT NULL,
  `title_de` varchar(255) DEFAULT NULL,
  `description_en` longtext DEFAULT NULL,
  `description_de` longtext DEFAULT NULL,
  `datedebut` date DEFAULT NULL,
  `datefin` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id`, `title_fr`, `lieu_fr`, `lieu_en`, `lieu_de`, `description_fr`, `title_en`, `title_de`, `description_en`, `description_de`, `datedebut`, `datefin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Full Stack web developer | Direct invest (Di Com)', 'Casablanca TechnoPark ,Maroc', NULL, NULL, '<ul>\r\n    <li>Développement frontend : Création de composants interactifs pour des interfaces conviviales (HTML/CSS/JS/Vue.js/Bootstrap).</li>\r\n    <li>Codage backend : Développement des backends pour le traitement des données et l\'intégration des fonctionnalités (PHP/Laravel).</li>\r\n    <li>Création d\'API : Établissement des APIs pour la communication entre le frontend et le backend.</li>\r\n    <li>Conception de bases de données : Conception de bases de données et écriture de requêtes SQL pour l\'accès aux données.</li>\r\n    <li>Tests et déploiement : Test des applications, gestion du déploiement et résolution des problèmes.</li>\r\n    <li>(CMS) : Gestion et personnalisation de plateformes telles que WordPress et Joomla.</li>\r\n</ul>', 'Développeur web full-stack | Direct invest (Di Com)', 'Full-Stack-Webentwickler | Direct invest (Di Com)', '<ul>\r\n  <li>Frontend development: Creating interactive components for user-friendly interfaces (HTML/CSS/JS/Vue.js/Bootstrap).</li>\r\n  <li>Backend coding: Developing backends for data processing and feature integration (PHP/Laravel).</li>\r\n  <li>API creation: Establishing APIs for communication between frontend and backend.</li>\r\n  <li>Database design: Designing databases and writing SQL queries for data access.</li>\r\n  <li>Testing & Deployment: Testing apps, managing deployment, and resolving issues.</li>\r\n  <li>(CMS): Managing and customizing platforms such as WordPress and Joomla.</li>\r\n</ul>', '<ul>\r\n  <li>Développement frontend : Création de composants interactifs pour des interfaces conviviales (HTML/CSS/JS/Vue.js/Bootstrap).</li>\r\n  <li>Codage backend : Développement des backends pour le traitement des données et l\'intégration des fonctionnalités (PHP/Laravel).</li>\r\n  <li>Création d\'API : Établissement des APIs pour la communication entre le frontend et le backend.</li>\r\n  <li>Conception de bases de données : Conception de bases de données et écriture de requêtes SQL pour l\'accès aux données.</li>\r\n  <li>Tests et déploiement : Test des applications, gestion du déploiement et résolution des problèmes.</li>\r\n  <li>(CMS) : Gestion et personnalisation de plateformes telles que WordPress et Joomla.</li>\r\n</ul>', '2022-01-03', NULL, '2023-11-23 10:26:53', '2024-07-15 14:15:13', NULL),
(2, 'Spécialiste du Support Technique | Wafasalaf', '159 Boulevard Yacoub El Mansour Casablanca Maroc', NULL, NULL, '<ul>\r\n  <li>Fournit un support technique et un dépannage pour les applications en proposant des solutions efficaces aux problèmes identifiés.</li>\r\n  <li>Communique les problèmes techniques aux utilisateurs, suggère des modifications essentielles et conseille sur les réparations recommandées.</li>\r\n  <li>Organise des formations pour les utilisateurs et les informe sur l\'utilisation des applications, l\'interface utilisateur, les fonctionnalités et la gestion des erreurs.</li>\r\n</ul>', 'Technical Support Specialist | Wafasalaf', 'Technical Support Specialist | Wafasalaf', '<ul>\r\n  <li>Provides technical support and troubleshooting for applications by offering effective solutions to identified issues.</li>\r\n  <li>Communicates technical problems to users, suggests essential modifications, and advises on recommended repairs.</li>\r\n  <li>Conducts user training and informs them about application usage, user interface, features, and error management.</li>\r\n</ul>', '<ul>\r\n  <li>Bietet technische Unterstützung und Fehlerbehebung für Anwendungen</li>\r\n  <li>Kommuniziert technische Probleme an Benutzer und schlägt wesentliche Modifikationen vor</li>\r\n  <li>Führt Benutzerschulungen durch und informiert über die Anwendungsnutzung, Benutzeroberfläche, Funktionen und Fehlermanagement</li>\r\n</ul>', '2021-08-23', '2021-12-31', '2023-11-23 10:38:34', '2024-07-15 14:16:25', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `url_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `project_id`, `url`, `url_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 'images/project/vaWnYRBP3Dq0GJQvlkhtUnl63n5MIbloJ9axWBCU.jpg', NULL, '2024-07-10 10:47:26', '2024-07-10 10:47:26', NULL),
(3, 4, 'images/project/eFmnBGyNoHwfOCVdXK6Yhx4FBr6PHtNdUKcb40NG.jpg', NULL, '2024-07-10 12:36:29', '2024-07-10 12:36:29', NULL),
(4, 1, 'images/project/ocigYvmiwjZ3rC6OOcIgkwd0qmhDREANm3ZoJ43g.jpg', NULL, '2024-07-10 12:44:48', '2024-07-10 12:44:48', NULL),
(5, 1, 'images/project/seSNxK1lSYTBSAVGVbyC1V2pmvcyEYe2NNmF1cuA.jpg', NULL, '2024-07-10 12:50:56', '2024-07-10 12:50:56', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_23_110511_create_educations_table', 2),
(6, '2023_11_23_111620_create_experiences_table', 3),
(7, '2023_11_23_114252_create_skills_table', 4),
(8, '2023_11_23_115336_create_services_table', 5),
(9, '2023_11_23_132607_create_projects_table', 6),
(10, '2023_11_23_133604_create_images_table', 6);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_fr` varchar(255) DEFAULT NULL,
  `description_fr` longtext DEFAULT NULL,
  `title_en` text DEFAULT NULL,
  `title_de` longtext DEFAULT NULL,
  `description_en` longtext DEFAULT NULL,
  `description_de` longtext DEFAULT NULL,
  `Technology` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `link_github` text DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `title_fr`, `description_fr`, `title_en`, `title_de`, `description_en`, `description_de`, `Technology`, `image`, `link`, `link_github`, `video`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Msafar', 'Une application web monopage conçue pour faciliter la planification et l\'organisation de voyages sans heurts. La plateforme offre des détails complets sur les hébergements, y compris les hôtels, les riads et les maisons d\'hôtes, ainsi qu\'une variété d\'options de restauration telles que des restaurants. Elle permet aux utilisateurs d\'accéder à des informations de voyage précieuses pour une expérience enrichie.', 'Msafar', 'Msafar', 'A user-friendly single-page application designed to facilitate seamless travel planning and organization. The platform offers comprehensive details about accommodations including hotels, riads, and guesthouses, along with an array of dining options such as restaurants. Empowering users with valuable travel information and resources for an enhanced journey experience.', 'Eine benutzerfreundliche Single-Page-Anwendung, die darauf ausgelegt ist, die nahtlose Planung und Organisation von Reisen zu erleichtern. Die Plattform bietet umfassende Details zu Unterkünften wie Hotels, Riads und Gästehäusern sowie eine Vielzahl von Essensmöglichkeiten wie Restaurants. Sie ermöglicht es den Nutzern, wertvolle Reiseinformationen und Ressourcen für ein verbessertes Reiseerlebnis zu nutzen.', 'VUE JS', 'projects/image/sU3qD12FQMDjKGd6DOJfQ266IQI1jAUqCseULIKI.jpg', 'http://msafar.ma/', NULL, NULL, '2023-11-23 12:59:31', '2024-07-12 15:19:39', NULL),
(2, 'CIMR Intranet', 'Conception and development of an advanced Intranet app for CIMR(Caisse interprofessionnelle marocaine de retraites - Moroccan Interprofessional Retirement Fund ), which includes features like quizzes, surveys, and a dynamic company organizational chart. This project enhances teamwork and communication, streamlining information sharing and improving organizational efficiency', 'CIMR Intranet', 'CIMR Intranet', 'Conception and development of an advanced Intranet app for CIMR(Caisse interprofessionnelle marocaine de retraites - Moroccan Interprofessional Retirement Fund ), which includes features like quizzes, surveys, and a dynamic company organizational chart. This project enhances teamwork and communication, streamlining information sharing and improving organizational efficiency', 'Konzeption und Entwicklung einer fortschrittlichen Intranet-App für CIMR (Caisse interprofessionnelle marocaine de retraites - Marokkanischer Interprofessioneller Rentenfonds), die Funktionen wie Quizze, Umfragen und ein dynamisches Unternehmensorganigramm umfasst. Dieses Projekt fördert die Teamarbeit und Kommunikation, optimiert den Informationsaustausch und verbessert die organisatorische Effizienz.', 'LARAVEL', 'projects/image/AZmOa4i0VGVs9PDlGlllKDpm5w4NcnR1ugZf0SMx.jpg', '#', NULL, NULL, '2023-11-23 13:37:09', '2024-07-12 15:01:39', NULL),
(3, 'Direct Business', 'Un site web dynamique qui sert de plateforme complète pour publier une large gamme de contenus, y compris des annonces, des événements, des mises à jour d\'actualités et des répertoires. Ce projet permet aux entreprises de présenter efficacement leurs offres et d\'engager leur public cible, améliorant ainsi leur présence en ligne et leur portée.', 'Direct Business', 'Direct Business', 'A dynamic website that serves as a comprehensive platform for publishing a wide range of content including advertisements, events, news updates, and directories. This project empowers businesses to effectively showcase their offerings and engage with their target audience, enhancing their online presence and reach.', 'Eine dynamische Website, die als umfassende Plattform für die Veröffentlichung einer Vielzahl von Inhalten wie Werbeanzeigen, Veranstaltungen, Nachrichtenaktualisierungen und Verzeichnissen dient. Dieses Projekt ermöglicht es Unternehmen, ihre Angebote effektiv zu präsentieren und mit ihrer Zielgruppe zu interagieren, wodurch ihre Online-Präsenz und Reichweite verbessert werden.', 'LARAVEL', 'projects/image/6P1SyRxh7YVN7ZJC67xSviPJd6eScuArEKida64o.jpg', 'https://directbusiness.ma/', NULL, NULL, '2023-11-23 13:51:42', '2024-07-12 15:22:12', NULL),
(4, 'Rana Industrie', 'Ranaindustrie est une plateforme captivante, développée avec Laravel 9, PHP, HTML, CSS, JS, et Vue.js, spécialisée en tant que site web ecommerce. Découvrez un univers dédié au développement backend en explorant des sections telles que \"Qui sommes-nous\", \"Produits\", \"Nos atouts\", \"Distribution\", \"Blog\", et \"Contactez-nous\". Plongez dans une expérience immersive où vous pouvez en apprendre davantage sur le projet, explorer les fonctionnalités, apprécier ses atouts, comprendre le modèle de distribution, consulter des actualités, et entrer en contact facilement.', 'Rana Industrie', NULL, 'Ranaindustrie is a captivating platform developed with Laravel 9, PHP, HTML, CSS, JS, and Vue.js, specializing as an e-commerce website. Explore a world dedicated to backend development by navigating sections such as \"About Us,\" \"Products,\" \"Our Strengths,\" \"Distribution,\" \"Blog,\" and \"Contact Us.\" Immerse yourself in an interactive experience where you can learn more about the project, explore features, appreciate its strengths, understand the distribution model, check out news, and easily get in touch.', NULL, 'LARAVEL', 'projects/image/ke55qBoeRbQwUMf5S5LTKGkX6TSGfwdX6JlqsiSr.jpg', 'https://ranaindustrie.ma/', NULL, NULL, '2023-11-24 10:08:26', '2024-07-10 10:40:23', NULL),
(5, 'Di com', 'Le projet Di Com représente l\'apogée de l\'expertise technologique, fusionnant harmonieusement créativité et développement robuste. En exploitant la puissance de HTML et CSS, la partie frontend du projet témoigne d\'une élégance visuelle et d\'une conception réactive. JavaScript ajoute une couche d\'interactivité pour des expériences utilisateur dynamiques et captivantes. Côté backend, le projet est renforcé par la synergie de Laravel 9/PHP, offrant une base solide pour la gestion des données, la sécurité et l\'efficacité globale du système. Bootstrap 5, avec son système de grille et ses composants, joue un rôle essentiel dans la création d\'un design réactif et axé sur le mobile.', 'Di com', NULL, 'The Di Com project represents the pinnacle of technological expertise, seamlessly merging creativity and robust development. Harnessing the power of HTML and CSS, the frontend part of the project showcases visual elegance and responsive design. JavaScript adds a layer of interactivity for dynamic and engaging user experiences. On the backend, the project is strengthened by the synergy of Laravel 9/PHP, providing a solid foundation for data management, security, and overall system efficiency. Bootstrap 5, with its grid system and components, plays a crucial role in creating a responsive and mobile-focused design.', NULL, 'LARAVEL', 'projects/image/quoUpKlqoGUkoy1hciuwJz8HkQEuRdW7G28Jfmgp.jpg', 'https://dicom.ma/', NULL, NULL, '2023-11-23 13:28:51', '2024-07-10 12:44:27', NULL),
(6, 'Cerm Bensaid', 'Développé et mis en œuvre l\'ensemble de l\'administration et des différentes sections du site web dédiées à mettre en valeur les contributions significatives de Mohamed Bensaïd Ait Idder. Le site web propose une gamme diversifiée de ressources, y compris des livres, des informations biographiques, des mises à jour des actualités, et plus encore.', 'Cerm Bensaid', 'Cerm Bensaid', 'Developed and implemented the entire administration and various website sections dedicated to showcasing the significant contributions of Mohamed Bensaïd Ait Idder. The website features a diverse range of resources including books, biographical information, news updates, and more.', 'Entwickelte und implementierte die gesamte Verwaltung und verschiedene Website-Bereiche, die den bedeutenden Beiträgen von Mohamed Bensaïd Ait Idder gewidmet sind. Die Website bietet eine Vielzahl von Ressourcen, darunter Bücher, biografische Informationen, Nachrichtenaktualisierungen und mehr.', 'LARAVEL', 'projects/image/zyDxoj54KnSfjl3mxeInQlOqyTXwwumQUAMFvbmK.jpg', 'http://cermbensaid.org/', NULL, NULL, '2023-11-24 09:43:43', '2024-07-16 09:41:58', NULL),
(10, 'Conférence IIA MAROC', NULL, 'IIA Morocco Conference', 'IIA Marokko Konferenz', NULL, NULL, 'PHP', 'projects/image/FL37B4pDgOYQ0luVlgqiMsorJS88I8nztDPlStio.jpg', 'https://www.iiamaroc.org/conference/index.php', NULL, NULL, '2024-07-16 13:44:42', '2024-07-16 13:44:42', NULL),
(11, 'Bidawaplus', NULL, 'Bidawaplus', 'Bidawaplus', NULL, NULL, 'LARAVEL', 'projects/image/ynbcDtAuVWGaDNx81pzo781sLWUgJR6i9LNPBNYK.jpg', 'https://www.bidawaplus.ma/', NULL, NULL, '2024-07-16 13:52:54', '2024-07-16 13:52:54', NULL),
(12, 'IIA Morocco', NULL, 'IIA Morocco', 'IIA Morocco', NULL, NULL, 'WORDPRESS', 'projects/image/lnMLYPiTMF3Mk0evVuUsIWUOqKnM529Atj7u1fRb.jpg', 'https://www.iiamaroc.org/', NULL, NULL, '2024-07-16 13:53:42', '2024-07-16 13:53:42', NULL),
(13, 'S-Store', NULL, 'S-Store', 'S-Store', NULL, NULL, 'C#', 'projects/image/wyD1xOaQMlCPkN0D7xLNlHgDq6FzAu3Ny02bjWEC.jpg', NULL, '#', 'projects/video/InHwSwoVdSp36H5ldp67kprLWQTYyeAmlnj3a522.mp4', '2024-07-16 14:03:08', '2024-07-17 08:56:47', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_fr` varchar(255) DEFAULT NULL,
  `title_de` varchar(255) DEFAULT NULL,
  `description_fr` longtext DEFAULT NULL,
  `description_de` varchar(255) DEFAULT NULL,
  `title_en` text DEFAULT NULL,
  `description_en` longtext DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `title_fr`, `title_de`, `description_fr`, `description_de`, `title_en`, `description_en`, `icon`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Développement Complet d\'Applications Web et Logiciels', NULL, 'Concevoir, développer et déployer des applications web et des logiciels en utilisant les dernières technologies et les meilleures pratiques. Intégration des langages de programmation tels qu\'HTML, CSS, JavaScript, Laravel 9/PHP, Vue.js et Bootstrap 5 pour des solutions robustes et évolutives.', NULL, 'Full Development of Web Applications and Software test', 'Design, develop, and deploy web applications and software using the latest technologies and best practices. Integration of programming languages such as HTML, CSS, JavaScript, Laravel 9/PHP, Vue.js, and Bootstrap 5 for robust and scalable solutions.', 'services/icon/TOcD6E0ValMRW85VrvXoYl5KurRUPNh1yW4S0uXQ.png', '2023-11-23 13:09:59', '2024-07-16 10:44:39', NULL),
(2, 'Optimisation et Maintenance Continue', NULL, 'Assurer la maintenance régulière des applications existantes pour garantir leur performance, leur sécurité et leur convivialité. Proposer des mises à jour proactives en fonction des évolutions technologiques pour maximiser l\'efficacité et l\'expérience utilisateur.', NULL, 'Optimization and Continuous Maintenance', 'Ensure regular maintenance of existing applications to guarantee their performance, security, and user-friendliness. Propose proactive updates based on technological advancements to maximize efficiency and user experience.', 'services/icon/Myo3JFvG0k6t5QpFwtuRUGXyXgjCbf8j3Dpx9uoA.png', '2023-11-23 13:10:19', '2023-11-24 14:39:15', NULL),
(3, 'Résolution de Problèmes Techniques et Amélioration Continue', NULL, 'Diagnostiquer et résoudre rapidement les problèmes techniques et les bugs dans les applications existantes. Proposer des solutions innovantes pour améliorer l\'efficacité et la qualité du code, tout en assurant une expérience utilisateur optimale.', NULL, 'Technical Problem Solving and Continuous Improvement', 'Diagnose and promptly resolve technical issues and bugs in existing applications. Propose innovative solutions to enhance code efficiency and quality, ensuring an optimal user experience.', 'services/icon/jmItxcSUdApoG8yXInKQgo1PbDhUyiNkPfY0ct6Z.png', '2023-11-23 13:10:35', '2023-11-24 14:39:55', NULL),
(4, 'Rabat arbitera le Congrès annuel des femmes artisanes africaines et Expo Dar Maalma', NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-16 10:45:06', '2024-07-16 10:45:06', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `percent` varchar(255) DEFAULT NULL,
  `langage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id`, `percent`, `langage`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '90', 'HTML', '2023-11-23 10:49:42', '2023-11-23 10:50:45', NULL),
(2, '80', 'CSS', '2023-11-23 10:49:55', '2023-11-23 10:50:50', NULL),
(3, '70', 'JavaScript', '2023-11-23 10:50:36', '2023-11-23 10:50:41', NULL),
(4, '80', 'Bootstrap', '2023-11-23 10:51:04', '2023-11-23 10:51:04', NULL),
(5, '60', 'Vue.js', '2023-11-23 10:51:16', '2023-11-23 10:51:16', NULL),
(6, '70', 'PHP', '2023-11-23 10:51:27', '2023-11-23 10:51:27', NULL),
(7, '80', 'Laravel', '2023-11-23 10:51:38', '2023-11-23 10:51:38', NULL),
(8, '60', 'SQL', '2023-11-23 10:51:51', '2023-11-23 10:51:51', NULL),
(9, '65', 'JAVA', '2024-07-12 14:54:03', '2024-07-12 14:54:03', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abdo', 'abdo@gmail.com', NULL, '$2y$10$24H3lI/UvDRr7ceMGbgjW.gQIJ2tVpR2z4730ZN/pGqAfZLs7WR4O', NULL, '2023-11-22 07:45:31', '2023-11-22 07:45:31');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
