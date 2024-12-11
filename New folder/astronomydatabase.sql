-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

-- /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
-- /*!40101 SET NAMES utf8 */;
-- /*!50503 SET NAMES utf8mb4 */;
-- /*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
-- /*!40103 SET TIME_ZONE='+00:00' */;
-- /*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
-- /*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- /*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for astronomy
CREATE DATABASE IF NOT EXISTS `astronomy` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `astronomy`;

-- Dumping structure for table astronomy.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table astronomy.cache: ~0 rows (approximately)
DELETE FROM `cache`;
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
	('admin@gmail.com|127.0.0.1', 'i:1;', 1715623362),
	('admin@gmail.com|127.0.0.1:timer', 'i:1715623362;', 1715623362);

-- Dumping structure for table astronomy.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table astronomy.cache_locks: ~0 rows (approximately)
DELETE FROM `cache_locks`;

-- Dumping structure for table astronomy.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table astronomy.categories: ~0 rows (approximately)
DELETE FROM `categories`;

-- Dumping structure for table astronomy.comets
CREATE TABLE IF NOT EXISTS `comets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `discovery_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_perihelion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_perihelion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table astronomy.comets: ~4 rows (approximately)
DELETE FROM `comets`;
INSERT INTO `comets` (`id`, `name`, `image`, `description`, `discovery_date`, `period`, `last_perihelion`, `next_perihelion`, `created_at`, `updated_at`) VALUES
	(1, 'Halley', 'images/halley.jpg', 'Comet Halley is one of the most famous comets, known for its approximate 76-year orbit cycle. Its most recent appearance was in 1986, and it is expected to appear next in 2061.', NULL, '76', '1986-02-09 14:00:00', '2061-07-28 11:00:00', '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(2, 'Hale-Bopp', 'images/hale-bopp.jpg', 'Comet Hale-Bopp is a long-period comet with an estimated orbital cycle of about 2,533 years. It was discovered in 1995 and is famous for its brilliant brightness, visible to the naked eye for a total of 18 months.', '1995-07-23', '2533', '1997-04-01 00:00:00', '4385-07-01 00:00:00', '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(3, 'Kohoutek', 'images/kohoutek.jpg', 'Comet Kohoutek was discovered in 1973 and was expected to become a very bright "comet of the century". However, it did not live up to its expectations in brightness but remained an interesting object for astronomers to observe.', '1973-03-07', '75000', '1973-12-28', '77273-12-28', '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(4, 'McNaught', 'images/mcnaught.jpg', 'Comet McNaught, also known as C/2006 P1, is a non-periodic comet that was discovered in 2006. It became famous for its brilliant brightness as it passed its perihelion in January 2007, visible to the naked eye even during the day.', '2006-08-07', NULL, '2007-01-12', NULL, '2024-05-13 10:20:16', '2024-05-13 10:20:16');

-- Dumping structure for table astronomy.constellations
CREATE TABLE IF NOT EXISTS `constellations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `history` text COLLATE utf8mb4_unicode_ci,
  `mythology` text COLLATE utf8mb4_unicode_ci,
  `stars` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table astronomy.constellations: ~6 rows (approximately)
DELETE FROM `constellations`;
INSERT INTO `constellations` (`id`, `name`, `image`, `description`, `history`, `mythology`, `stars`, `created_at`, `updated_at`) VALUES
	(1, 'Ursa Major', 'images/ursa-major.jpg', 'Ursa Major is one of the most recognizable constellations in the northern sky, famous for its "Big Dipper" asterism consisting of seven bright stars.', 'Ursa Major has been known since ancient times and appears in the mythology of many cultures.', 'In Greek mythology, Ursa Major is associated with the story of Callisto, a nymph turned into a bear.', 'Dubhe, Merak, Phecda, Megrez, Alioth, Mizar, Alkaid', '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(2, 'Orion', 'images/orion.jpg', 'Orion is a prominent constellation in the winter sky, easily recognizable by the three stars in a row forming the "Belt of Orion".', 'Orion has been known since ancient times and appears in the mythology of many cultures, including Greek, Egyptian, and Babylonian.', 'In Greek mythology, Orion is a great hunter, the son of Poseidon.', 'Betelgeuse, Rigel, Bellatrix, Alnilam, Alnitak, Mintaka, Saiph', '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(3, 'Taurus', 'images/taurus.jpg', 'Taurus is a prominent constellation in the winter sky, easily recognizable by the Hyades star cluster and the M1 Crab Nebula.', 'Taurus has been known since ancient times and is associated with the bull in many cultures\' mythology.', 'In Greek mythology, Taurus represents the white bull that Zeus transformed into to abduct Europa.', 'Aldebaran, El Nath, Zeta Tauri, Theta Tauri', '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(4, 'Gemini', 'images/gemini.jpg', 'Gemini is a zodiac constellation, famous for its two bright stars, Castor and Pollux.', 'Gemini has been known since ancient times and is associated with the myth of the twins in many cultures.', 'In Greek mythology, Castor and Pollux are twin brothers, sons of Leda.', 'Castor, Pollux, Alhena, Wasat, Mebsuta', '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(5, 'Leo', 'images/leo.jpg', 'Leo is a zodiac constellation, easily recognizable by its lion-like shape lying down.', 'Leo has been known since ancient times and is associated with the Nemean Lion in Greek mythology.', 'In Greek mythology, Leo represents the Nemean Lion, a monster slain by Hercules.', 'Regulus, Denebola, Algieba, Ras Elased Australis, Adhafera', '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(6, 'Virgo', 'images/virgo.jpg', 'Virgo is the second largest constellation in the sky and one of the 12 zodiac constellations.', 'Virgo has been known since ancient times and is associated with the myth of the goddess of agriculture and harvest.', 'In Greek mythology, Virgo is thought to represent Demeter, the goddess of agriculture, or Astraea, the goddess of justice.', 'Spica, Zavijava, Porrima, Auva, Vindemiatrix', '2024-05-13 10:20:16', '2024-05-13 10:20:16');

-- Dumping structure for table astronomy.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table astronomy.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table astronomy.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table astronomy.jobs: ~0 rows (approximately)
DELETE FROM `jobs`;

-- Dumping structure for table astronomy.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table astronomy.job_batches: ~0 rows (approximately)
DELETE FROM `job_batches`;

-- Dumping structure for table astronomy.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table astronomy.migrations: ~10 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(40, '2024_05_09_002847_add_is_admin_to_users_table', 1),
	(59, '0001_01_01_000000_create_users_table', 2),
	(60, '0001_01_01_000001_create_cache_table', 2),
	(61, '0001_01_01_000002_create_jobs_table', 2),
	(62, '2024_05_05_185422_create_planets_table', 2),
	(63, '2024_05_05_185615_create_categories_table', 2),
	(64, '2024_05_05_185647_create_constellations_table', 2),
	(65, '2024_05_05_185707_create_comets_table', 2),
	(66, '2024_05_05_185717_create_news_table', 2),
	(67, '2024_05_05_185743_create_observatories_table', 2);

-- Dumping structure for table astronomy.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table astronomy.news: ~4 rows (approximately)
DELETE FROM `news`;
INSERT INTO `news` (`id`, `title`, `slug`, `content`, `image`, `website`, `published_at`, `created_at`, `updated_at`) VALUES
	(1, 'New Earth-like Planet Discovered', 'new-earth-like-planet-discovered', 'Astronomers have discovered a new planet with a size and mass similar to Earth, located in the habitable zone of its host star.', 'images/new_planet.jpg', 'https://science.nasa.gov/universe/exoplanets/discovery-alert-a-super-earth-in-the-habitable-zone/', '2024-05-13 17:20:16', '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(2, 'Perseverance Rover Finds Signs of Ancient Life on Mars', 'perseverance-rover-finds-signs-of-ancient-life-on-mars', 'NASA\'s Perseverance rover has discovered chemical signatures suggesting that microbial life may have existed on Mars in the past.', 'images/perseverance.jpg', 'https://www.nasa.gov/news-release/nasas-perseverance-rover-investigates-geologically-rich-mars-terrain/', '2024-05-10 17:20:16', '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(3, 'The Big Bang: The Origin of the Universe', 'the-big-bang-the-origin-of-the-universe', 'The Big Bang is the prevailing cosmological model for the observable universe from the earliest known periods through its subsequent large-scale evolution.', 'images/big_bang.jpg', 'https://www.amnh.org/explore/ology/astronomy/how-did-the-universe-begin#:~:text=The%20Big%20Bang%20was%20the,place%20is%20still%20a%20mystery.', '2024-04-29 17:20:16', '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(4, 'The Evolution of Earth: A 4.5 Billion Year Journey', 'the-evolution-of-earth-a-4-5-billion-year-journey', 'Earth has undergone a long and complex evolutionary process, from a molten ball of rock to the blue planet we know today.', 'images/earth_evolution.jpg', 'https://en.wikipedia.org/wiki/History_of_Earth', '2024-04-13 17:20:16', '2024-05-13 10:20:16', '2024-05-13 10:20:16');

-- Dumping structure for table astronomy.observatories
CREATE TABLE IF NOT EXISTS `observatories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table astronomy.observatories: ~4 rows (approximately)
DELETE FROM `observatories`;
INSERT INTO `observatories` (`id`, `name`, `description`, `location`, `latitude`, `longitude`, `image`, `website`, `created_at`, `updated_at`) VALUES
	(1, 'Mauna Kea', 'Located on the summit of the Mauna Kea volcano in Hawaii, it is one of the best optical and infrared observatories in the world.', 'Hawaii, USA', '19.8207', '-155.4783', 'images/mauna_kea.jpg', 'https://www.maunakeaobservatories.org/', '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(2, 'Paranal', 'Located in the Atacama Desert in Chile, it is home to the Very Large Telescope (VLT), one of the most powerful optical telescopes in the world.', 'Atacama, Chile', '-24.6272', '-70.4042', 'images/paranal.jpg', 'https://www.eso.org/public/teles-instr/paranal-observatory/', '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(3, 'Arecibo', 'Located in Puerto Rico, it was famous for having the largest single-aperture radio telescope in the world, which collapsed in 2020.', 'Arecibo, Puerto Rico', '18.3464', '-66.7528', 'images/arecibo.jpg', 'https://www.naic.edu/', '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(4, 'Palomar', 'Located in California, USA, it is famous for the Hale Telescope, which was the largest telescope in the world for many years.', 'California, USA', '33.3561', '-116.8639', 'images/palomar.jpg', 'https://sites.astro.caltech.edu/palomar/homepage.html', '2024-05-13 10:20:16', '2024-05-13 10:20:16');

-- Dumping structure for table astronomy.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table astronomy.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping structure for table astronomy.planets
CREATE TABLE IF NOT EXISTS `planets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `diameter` double DEFAULT NULL,
  `atmosphere` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distance_from_sun` double DEFAULT NULL,
  `distance_from_earth` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table astronomy.planets: ~2 rows (approximately)
DELETE FROM `planets`;
INSERT INTO `planets` (`id`, `name`, `image`, `description`, `diameter`, `atmosphere`, `distance_from_sun`, `distance_from_earth`, `created_at`, `updated_at`) VALUES
	(1, 'Mercury', 'images/mercury.jpg', 'Mercury is the closest planet to the Sun in the Solar System. It is one of the terrestrial planets, with a surface full of impact craters and lacks a dense atmosphere.', 4879, 'Thin, primarily helium', 0.39, 0.77, '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(2, 'Venus', 'images/venus.jpg', 'Venus is the second planet from the Sun and is known as the "morning star" or "evening star." It is the most Earth-like planet in terms of size and mass, but vastly different in environmental conditions.', 12104, 'Thick, primarily CO2', 0.72, 0.28, '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(3, 'Earth', 'images/earth.jpg', 'Earth is the third planet from the Sun in the Solar System and the only place in the universe known to harbor life.', 12756, 'Primarily nitrogen and oxygen', 1, 0, '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(4, 'Mars', 'images/mars.jpg', 'Mars, often referred to as the "Red Planet" due to its surface being largely covered by iron oxide (rust), giving it a distinctive red color.', 6792, 'Thin, primarily CO2', 1.52, 0.52, '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(5, 'Jupiter', 'images/jupiter.jpg', 'Jupiter is the largest planet in our Solar System and is a giant gas planet.', 142984, 'Primarily hydrogen and helium', 5.2, 4.2, '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(6, 'Saturn', 'images/saturn.jpg', 'Saturn is the sixth planet from the Sun, famous for its striking ring system, which is made up of ice, rocks, and dust.', 120536, 'Primarily hydrogen and helium', 9.58, 8.58, '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(7, 'Uranus', 'images/uranus.jpg', 'Uranus is the seventh planet from the Sun and one of the cold gas giant planets.', 51118, 'Primarily hydrogen, helium, and methane', 19.2, 18.2, '2024-05-13 10:20:16', '2024-05-13 10:20:16'),
	(8, 'Neptune', 'images/neptune.jpg', 'Neptune is the eighth and farthest planet from the Sun in our Solar System.', 49528, 'Primarily hydrogen, helium, and methane', 30.05, 29.05, '2024-05-13 10:20:16', '2024-05-13 10:20:16');

-- Dumping structure for table astronomy.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table astronomy.sessions: ~0 rows (approximately)
DELETE FROM `sessions`;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('NEgX3QlGeYwhDZCFTfnzM0SNbIv4SFhBNMdPiXm5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTlNlZFVZOE1kMncwcmIwRWN6c3dIRHFaUW9EWHBzSzltczJVbEVmVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1715623696);

-- Dumping structure for table astronomy.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table astronomy.users: ~0 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', 'admin', NULL, '$2y$12$zOXlLSg.G.8zuEnU5Yzv3OrMJztHlxL7KOxFViOlL6cV34uELMv6C', NULL, '2024-05-13 11:02:16', '2024-05-13 11:02:16');

-- /*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
-- /*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
-- /*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;-- 
