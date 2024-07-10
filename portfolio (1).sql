-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2024 at 11:11 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_fr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_de` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu_fr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu_de` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datedebut` date DEFAULT NULL,
  `datefin` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `title_fr`, `title_en`, `title_de`, `lieu_fr`, `lieu_en`, `lieu_de`, `datedebut`, `datefin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Diplom als Fachtechniker in Informatikentwicklung.', 'Specialized Technician Diploma in Computer Development.', NULL, 'OFPPT NTIC 2 SM | Casablanca, Morocco', NULL, NULL, '2018-09-01', '2021-06-01', '2023-11-23 10:12:06', '2024-01-26 15:02:32', NULL),
(2, 'Abitur mit Schwerpunkt in den Experimentalwissenschaften, insbesondere Biologie.', 'High School Diploma in Life and Earth Sciences', NULL, 'Almansour Eddahbi High School | Casablanca, Morocco', NULL, NULL, '2015-09-01', '2018-06-24', '2023-11-23 10:14:46', '2024-01-26 15:07:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_fr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu_fr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu_de` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_de` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_de` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datedebut` date DEFAULT NULL,
  `datefin` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `title_fr`, `lieu_fr`, `lieu_en`, `lieu_de`, `description_fr`, `title_en`, `title_de`, `description_en`, `description_de`, `datedebut`, `datefin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Développeur Full Stack | InfoSide', 'Casablanca TechnoPark ,Maroc', NULL, NULL, 'Superviser le Développement Backend avec C# , Diriger le développement backend en utilisant C# afin d\'assurer l\'intégrité, la sécurité et l\'efficacité du site. Utiliser des technologies telles que ASP.NET, MVC, HTML5, JavaScript, et SQL Server pour la création d\'applications innovantes. Construire des bases de données et des structures de table en suivant une méthodologie d\'architecture définie pour les applications Web. Créer des systèmes de gestion de contenu robustes agissant comme des interfaces client. Développer des applications Web et des logiciels en utilisant des technologies telles qu\'HTML, CSS, JavaScript, assurant ainsi des solutions puissantes et performantes.', 'Developer Full Stack | InfoSide', NULL, 'Supervise the Backend Development with C#, Lead the backend development using C# to ensure the integrity, security, and efficiency of the site. Utilize technologies such as ASP.NET, MVC, HTML5, JavaScript, and SQL Server for the creation of innovative applications. Build databases and table structures following a defined architecture methodology for web applications. Create robust content management systems acting as client interfaces. Develop web applications and software using technologies like HTML, CSS, and JavaScript, ensuring powerful and high-performance solutions.', NULL, '2022-09-20', '2023-02-02', '2023-11-23 10:26:53', '2023-11-24 14:36:57', NULL),
(2, 'Développeur Full Stack |Di com.', '159 Boulevard Yacoub El Mansour Casablanca Maroc', NULL, NULL, 'Concevoir, développer et déployer des applications web et des logiciels en utilisant les langages de programmation et les technologies front-end et back-end tels qu\'HTML, CSS, JavaScript, Laravel 9/PHP, Vue.js et Bootstrap 5.Collaborer avec les équipes de conception pour traduire les maquettes et les prototypes en interfaces utilisateur interactives, conviviales et réactives.Intégrer et utiliser des API tierces pour améliorer la fonctionnalité des applications.Assurer la maintenance et les mises à jour régulières des applications existantes pour garantir leur performance, leur sécurité et leur convivialité.Résoudre les problèmes techniques et les bugs, et proposer des solutions innovantes pour améliorer l\'efficacité et la qualité du code.', 'Developer Full Stack |Di com.', NULL, 'Design, develop, and deploy web applications and software using programming languages and front-end and back-end technologies such as HTML, CSS, JavaScript, Laravel 9/PHP, Vue.js, and Bootstrap 5. Collaborate with design teams to translate mockups and prototypes into interactive, user-friendly, and responsive user interfaces. Integrate and use third-party APIs to enhance application functionality. Ensure regular maintenance and updates of existing applications to guarantee their performance, security, and user-friendliness. Resolve technical issues and bugs, and propose innovative solutions to enhance code efficiency and quality.', NULL, '2023-04-06', NULL, '2023-11-23 10:38:34', '2023-11-24 14:37:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
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
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_fr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_de` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_de` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title_fr`, `description_fr`, `title_en`, `title_de`, `description_en`, `description_de`, `image`, `link`, `video`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Msafar', 'une plateforme développée avec Laravel 9, PHP, HTML, CSS, JS, et Vue.js, où l\'art de connecter le tourisme et l\'aventure prend vie. Msafar.ma se présente comme la plateforme dédiée favorisant l\'union parfaite entre les professionnels du tourisme et leurs clients précieux. Que vous gériez un hôtel, un appart-hôtel, un Riad, un restaurant, une activité touristique, ou que vous proposiez des produits du terroir', 'Msafar', NULL, 'A platform developed with Laravel 9, PHP, HTML, CSS, JS, and Vue.js, where the art of connecting tourism and adventure comes to life. Msafar.ma presents itself as a dedicated platform promoting the perfect union between tourism professionals and their valued clients. Whether you manage a hotel, an aparthotel, a Riad, a restaurant, a tourist activity, or offer local products.', NULL, 'projects/image/s84S7VsbjjTZGNsQY1ZR8lQ3QZzjBLFyAw2EZPf3.png', 'http://msafar.ma/', NULL, '2023-11-23 12:59:31', '2023-11-24 14:43:59', NULL),
(2, 'Di com', 'Le projet Di Com représente l\'apogée de l\'expertise technologique, fusionnant harmonieusement créativité et développement robuste. En exploitant la puissance de HTML et CSS, la partie frontend du projet témoigne d\'une élégance visuelle et d\'une conception réactive. JavaScript ajoute une couche d\'interactivité pour des expériences utilisateur dynamiques et captivantes. Côté backend, le projet est renforcé par la synergie de Laravel 9/PHP, offrant une base solide pour la gestion des données, la sécurité et l\'efficacité globale du système. Bootstrap 5, avec son système de grille et ses composants, joue un rôle essentiel dans la création d\'un design réactif et axé sur le mobile.', 'Di com', NULL, 'The Di Com project represents the pinnacle of technological expertise, seamlessly merging creativity and robust development. Harnessing the power of HTML and CSS, the frontend part of the project showcases visual elegance and responsive design. JavaScript adds a layer of interactivity for dynamic and engaging user experiences. On the backend, the project is strengthened by the synergy of Laravel 9/PHP, providing a solid foundation for data management, security, and overall system efficiency. Bootstrap 5, with its grid system and components, plays a crucial role in creating a responsive and mobile-focused design.', NULL, 'projects/image/nYdj9pSA1c3kDiweUsCQTa1GoibBNf5bb6SAODf4.png', 'https://dicom.ma/', NULL, '2023-11-23 13:28:51', '2023-11-24 14:43:24', NULL),
(3, 'Cimr Dialna', 'Développé avec Laravel 9, PHP, HTML, CSS, JS, et Livewire, le projet comprend des fonctionnalités avancées telles qu\'une authentification sécurisée, un tableau de bord personnalisé, une messagerie interne, la gestion des utilisateurs, des documents, des tâches, et des événements. Axé sur la sécurité, les performances, et l\'évolutivité, il vise à optimiser les opérations internes et la collaboration tout en restant adaptable aux futurs besoins de l\'entreprise.', 'Cimr Dialna', NULL, 'Developed with Laravel 9, PHP, HTML, CSS, JS, and Livewire, the project includes advanced features such as secure authentication, a customized dashboard, internal messaging, user management, document handling, task management, and events. Focused on security, performance, and scalability, it aims to optimize internal operations and collaboration while remaining adaptable to the future needs of the business.', NULL, 'projects/image/P0nkPVpPBAfls9Ga9NzrKxJdVz4YY14moFLzXYNF.png', '#', NULL, '2023-11-23 13:37:09', '2023-11-24 14:42:57', NULL),
(4, 'Direct Business', 'Direct Business.ma est une plateforme qui connecte les professionnels à travers tout le Maroc et au-delà, développée avec Laravel 9, PHP, HTML, CSS, et JS. Que ce soit pour le recrutement, la promotion de biens et services, ou la saisie d\'opportunités, Direct Business.ma est la solution idéale. L\'inscription d\'entreprises et de sites web est simple et gratuite, offrant ainsi une visibilité accrue et des opportunités professionnelles renforcées grâce à cette plateforme conviviale.', 'Direct Business', NULL, 'Direct Business.ma is a platform that connects professionals across Morocco and beyond, developed with Laravel 9, PHP, HTML, CSS, and JS. Whether for recruitment, promotion of goods and services, or seizing opportunities, Direct Business.ma is the ideal solution. Registering businesses and websites is simple and free, providing increased visibility and enhanced professional opportunities through this user-friendly platform.', NULL, 'projects/image/s1Be6PDOISaaKqpxxLaS8hznMjgTCdZkogURTqTp.png', 'https://directbusiness.ma/', NULL, '2023-11-23 13:51:42', '2023-11-24 14:42:31', NULL),
(5, 'Cerm Bensaid', 'Cerm Bensaid est une plateforme web captivante développée avec Laravel 9, PHP, HTML, CSS, JS. Explorez le monde de l\'événementiel et des médias en naviguant à travers les sections dédiées, notamment \"Qui sommes-nous\", \"Mohamed Bensaïd Aït Ider\", \"Nos événements\", \"Publications\", \"Médias\", et \"Contact\". La plateforme offre une expérience immersive où vous pouvez en apprendre davantage sur l\'entreprise, découvrir les événements passés et à venir, consulter les publications, accéder aux médias, et entrer en contact facilement. Cerm Bensaid vous invite à explorer son univers unique et dynamique, où l\'innovation et la créativité rencontrent l\'événementiel et les médias.', 'Cerm Bensaid', NULL, 'Cerm Bensaid is a captivating web platform developed with Laravel 9, PHP, HTML, CSS, and JS. Explore the world of events and media by navigating through dedicated sections, including \"About Us,\" \"Mohamed Bensaïd Aït Ider,\" \"Our Events,\" \"Publications,\" \"Media,\" and \"Contact.\" The platform offers an immersive experience where you can learn more about the company, discover past and upcoming events, check publications, access media, and easily get in touch. Cerm Bensaid invites you to explore its unique and dynamic universe, where innovation and creativity meet the events and media industry.', NULL, 'projects/image/TtC7c81ApMf9geRmYl4qPAY75aALNHTrEBUvB9CG.png', 'http://cermbensaid.org/', NULL, '2023-11-24 09:43:43', '2023-11-24 14:42:00', NULL),
(6, 'Rana Industrie', 'Ranaindustrie est une plateforme captivante, développée avec Laravel 9, PHP, HTML, CSS, JS, et Vue.js, spécialisée en tant que site web ecommerce. Découvrez un univers dédié au développement backend en explorant des sections telles que \"Qui sommes-nous\", \"Produits\", \"Nos atouts\", \"Distribution\", \"Blog\", et \"Contactez-nous\". Plongez dans une expérience immersive où vous pouvez en apprendre davantage sur le projet, explorer les fonctionnalités, apprécier ses atouts, comprendre le modèle de distribution, consulter des actualités, et entrer en contact facilement.', 'Rana Industrie', NULL, 'Ranaindustrie is a captivating platform developed with Laravel 9, PHP, HTML, CSS, JS, and Vue.js, specializing as an e-commerce website. Explore a world dedicated to backend development by navigating sections such as \"About Us,\" \"Products,\" \"Our Strengths,\" \"Distribution,\" \"Blog,\" and \"Contact Us.\" Immerse yourself in an interactive experience where you can learn more about the project, explore features, appreciate its strengths, understand the distribution model, check out news, and easily get in touch.', NULL, 'projects/image/X3UTlNZXa0Z3QdkJcmFGzdteJAdpBrwlfYqZBzJc.png', 'https://ranaindustrie.ma/', NULL, '2023-11-24 10:08:26', '2023-11-24 14:41:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_fr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_de` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_de` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_fr`, `title_de`, `description_fr`, `description_de`, `title_en`, `description_en`, `icon`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Développement Complet d\'Applications Web et Logiciels', NULL, 'Concevoir, développer et déployer des applications web et des logiciels en utilisant les dernières technologies et les meilleures pratiques. Intégration des langages de programmation tels qu\'HTML, CSS, JavaScript, Laravel 9/PHP, Vue.js et Bootstrap 5 pour des solutions robustes et évolutives.', NULL, 'Full Development of Web Applications and Software', 'Design, develop, and deploy web applications and software using the latest technologies and best practices. Integration of programming languages such as HTML, CSS, JavaScript, Laravel 9/PHP, Vue.js, and Bootstrap 5 for robust and scalable solutions.', 'services/icon/TOcD6E0ValMRW85VrvXoYl5KurRUPNh1yW4S0uXQ.png', '2023-11-23 13:09:59', '2023-11-24 14:38:38', NULL),
(2, 'Optimisation et Maintenance Continue', NULL, 'Assurer la maintenance régulière des applications existantes pour garantir leur performance, leur sécurité et leur convivialité. Proposer des mises à jour proactives en fonction des évolutions technologiques pour maximiser l\'efficacité et l\'expérience utilisateur.', NULL, 'Optimization and Continuous Maintenance', 'Ensure regular maintenance of existing applications to guarantee their performance, security, and user-friendliness. Propose proactive updates based on technological advancements to maximize efficiency and user experience.', 'services/icon/Myo3JFvG0k6t5QpFwtuRUGXyXgjCbf8j3Dpx9uoA.png', '2023-11-23 13:10:19', '2023-11-24 14:39:15', NULL),
(3, 'Résolution de Problèmes Techniques et Amélioration Continue', NULL, 'Diagnostiquer et résoudre rapidement les problèmes techniques et les bugs dans les applications existantes. Proposer des solutions innovantes pour améliorer l\'efficacité et la qualité du code, tout en assurant une expérience utilisateur optimale.', NULL, 'Technical Problem Solving and Continuous Improvement', 'Diagnose and promptly resolve technical issues and bugs in existing applications. Propose innovative solutions to enhance code efficiency and quality, ensuring an optimal user experience.', 'services/icon/jmItxcSUdApoG8yXInKQgo1PbDhUyiNkPfY0ct6Z.png', '2023-11-23 13:10:35', '2023-11-24 14:39:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `percent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `langage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `percent`, `langage`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '90', 'html', '2023-11-23 10:49:42', '2023-11-23 10:50:45', NULL),
(2, '80', 'css', '2023-11-23 10:49:55', '2023-11-23 10:50:50', NULL),
(3, '70', 'JAVA SCRIPT', '2023-11-23 10:50:36', '2023-11-23 10:50:41', NULL),
(4, '80', 'bootstrap', '2023-11-23 10:51:04', '2023-11-23 10:51:04', NULL),
(5, '60', 'vue.js', '2023-11-23 10:51:16', '2023-11-23 10:51:16', NULL),
(6, '70', 'php', '2023-11-23 10:51:27', '2023-11-23 10:51:27', NULL),
(7, '80', 'laravel', '2023-11-23 10:51:38', '2023-11-23 10:51:38', NULL),
(8, '60', 'sql', '2023-11-23 10:51:51', '2023-11-23 10:51:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abdo', 'abdo@gmail.com', NULL, '$2y$10$24H3lI/UvDRr7ceMGbgjW.gQIJ2tVpR2z4730ZN/pGqAfZLs7WR4O', NULL, '2023-11-22 07:45:31', '2023-11-22 07:45:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
