-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 21 Lis 2022, 18:35
-- Wersja serwera: 8.0.30
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `car_project`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `car_bases`
--

DROP TABLE IF EXISTS `car_bases`;
CREATE TABLE IF NOT EXISTS `car_bases` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `model` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `make` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `make_id` bigint NOT NULL,
  `generation` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `year_from` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `year_to` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `series` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `trim` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `body_type` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `number_of_seats` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `length_mm` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `width_mm` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `height_mm` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `wheelbase_mm` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `front_track_mm` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `rear_track_mm` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `curb_weight_kg` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `wheel_size_r14` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `ground_clearance_mm` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `trailer_load_with_brakes_kg` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `payload_kg` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `back_track_width_mm` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `front_track_width_mm` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `clearance_mm` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `Npęd na wszystkie koła_weight_kg` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `front_rear_axle_load_kg` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `max_trunk_capacity_l` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `minimum_trunk_capacity_l` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `maximum_torque_n_m` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `injection_type` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `overhead_camshaft` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `cylinder_layout` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `number_of_cylinders` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `compression_ratio` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `engine_type` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `valves_per_cylinder` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `boost_type` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `cylinder_bore_mm` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `stroke_cycle_mm` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `engine_placement` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `turnover_of_maximum_torque_rpm` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `max_power_kw` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `presence_of_intercooler` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `capacity_cm3` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `engine_hp` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `engine_hp_rpm` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `drive_wheels` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `number_of_gears` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `turning_circle_m` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `transmission` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `mixed_fuel_consumption_per_100_km_l` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `range_km` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `fuel_tank_capacity_l` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `acceleration_0_100_km/h_s` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `max_speed_km_per_h` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `fuel_grade` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `back_suspension` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `rear_brakes` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `front_brakes` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `front_suspension` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `car_class` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `country_of_origin` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `number_of_doors` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `car_makes`
--

DROP TABLE IF EXISTS `car_makes`;
CREATE TABLE IF NOT EXISTS `car_makes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `make` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_26_152101_create_car_table', 1),
(6, '2021_12_29_125617_user_refuelings_reports', 1),
(7, '2021_12_29_125805_user_car_reprairs_reports', 1),
(8, '2022_01_06_022539_car_makes', 1),
(9, '2022_11_16_142413_create_users_verify_table', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb3_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `role` enum('admin','user') CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_email_verified` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_email_verified`) VALUES
(1, 'test', 'test@test.pl', 'admin', NULL, '$2y$10$zPR8lNMzEKShzr0wzPOCR.Shb8UBPtqSBPgPaHEZQIj12396sKJou', NULL, '2022-11-07 14:28:26', '2022-11-07 14:28:26', 1),
(3, 'user', 'user@user.pl', 'user', NULL, '$2y$10$AXwkJdrxaJZm.cRqzR0Ln.YrJLm8sukoJFZ1p1VCtf6L7PVkei.K.', NULL, '2022-11-10 17:19:03', '2022-11-10 17:19:03', 0),
(6, 'user3', 'user3@test.pl', 'user', NULL, '$2y$10$4mG27XSiQBTAEnH2pJi8wO6jErV9RTO6la9dF2kwbBLRdWxuVFESK', NULL, '2022-11-14 17:04:03', '2022-11-14 17:04:03', 0),
(33, 'rafał', 'rafal@wp.pl', 'user', NULL, '$2y$10$Mc7RVYl5.rgLIqnCrKCvWOgIeAxQnhpPqQQ6b.eEwA19aMy8vlWDC', NULL, '2022-11-21 17:10:34', '2022-11-21 17:15:37', 1),
(11, 'user8', 'user8@test.pl', 'user', NULL, '$2y$10$A8.BccqCiUDKPIguDbq/z.OpS7cppg1tngR3QFbh5O4cGwesMuCK2', NULL, '2022-11-14 18:03:24', '2022-11-14 18:03:24', 0),
(12, 'user9', 'user9@test.pl', 'user', NULL, '$2y$10$Aj2NoM/CW5JBxq7aCRU.ve76ozXWFARonrECzAPs7uEqgej5AmMqy', NULL, '2022-11-14 18:05:28', '2022-11-14 18:05:28', 0),
(13, 'user10', 'user10@tes.pl', 'user', NULL, '$2y$10$glYB4Vz/drRiwRQ8D5wdVOpRe9puhgXOZZVXta5iYHkxPkXEKSRD.', NULL, '2022-11-14 18:07:32', '2022-11-14 18:07:32', 0),
(14, 'user11', 'user11@wp.pl', 'user', NULL, '$2y$10$ZFxwikhU.Db4K9idpG7TP.dfCzwcFD4OW8un6UONDuRv7TZ77iSjq', NULL, '2022-11-14 18:18:08', '2022-11-14 18:18:08', 0),
(15, 'user12', 'user12@test.pl', 'user', NULL, '$2y$10$szkT5pxl16DmwrathcTWiOZRhRjppZRcADWEyVy1jyq/9Nd56PxYe', NULL, '2022-11-14 18:46:50', '2022-11-14 18:46:50', 0),
(16, 'user13', 'user13@test.pl', 'user', NULL, '$2y$10$pT7eRHjg1Dgv2dp10vaHsublBkmsQuvG2FOUuIJaTqSDO6s5k4daO', NULL, '2022-11-14 18:57:03', '2022-11-14 18:57:03', 0),
(17, 'user14', 'user14@test.pl', 'user', NULL, '$2y$10$IlG6BUDl5kZhxyKGD80dVuIggN2FYlTZS0RMUEatkh0Nqjo8rIbGK', NULL, '2022-11-14 19:03:09', '2022-11-14 19:03:09', 0),
(18, 'user15', 'user15@test.pl', 'user', NULL, '$2y$10$a/13Juhd23exfuBEMZPH7OJQ.mcNuuyBIWR83SJRXtScymDCKbeA6', NULL, '2022-11-14 20:26:50', '2022-11-14 20:26:50', 0),
(19, 'user16', 'user16@wp.pl', 'user', NULL, '$2y$10$A5Xx52M5nRbeIcUFv8QVc.HLDFGXs3FyQBEP/nrK09R9bSCXLuLwy', NULL, '2022-11-14 20:28:21', '2022-11-14 20:28:21', 0),
(20, 'user17', 'user17@wp.pl', 'user', NULL, '$2y$10$2Wyc2Q6RGGoZGSoVgvDUMuaOkkrSzdm2EuKEPybhJ8EFxp7EFYom.', NULL, '2022-11-14 20:40:02', '2022-11-14 20:40:02', 0),
(21, 'user18', 'user18@test.pl', 'user', NULL, '$2y$10$CJcqY89KV5XyzFBqCBPXhOcSBz08bVOFcf0Yj0H0RKvvMutGvnOmW', NULL, '2022-11-16 13:53:02', '2022-11-16 13:53:02', 0),
(22, 'user19', 'user19@test.pl', 'user', NULL, '$2y$10$9bYYOTcq6sI0JKIeqbG5he/f8DZj9r82kurVL0kXoQWrPJ7T0Vf.m', NULL, '2022-11-16 13:54:35', '2022-11-16 13:54:35', 0),
(23, 'user20', 'user20@wp.pl', 'user', NULL, '$2y$10$xG9POWgRGviOdKd6E4BWuuxmgaCgUpn4oEeeFa1rDKMpL3sbIUddC', NULL, '2022-11-16 13:55:58', '2022-11-16 13:55:58', 0),
(24, 'user22', 'user22@wp.pl', 'user', NULL, '$2y$10$X64.XT3gN9CBUNFCd7Ybt.ylFvA2YLflXETJxV5x8pKzARbts5ptS', NULL, '2022-11-16 15:00:16', '2022-11-16 15:00:16', 0),
(25, 'user23', 'user23@wp.pl', 'user', NULL, '$2y$10$vDyoUKIXUAf3.tEbNpfqr.2iXcvU8.zwrVQID9Jk/R9FamsIaKsUS', NULL, '2022-11-16 15:02:55', '2022-11-16 15:02:55', 0),
(26, 'user24', 'user24@wp.pl', 'user', NULL, '$2y$10$zmXKDiOT6/b7TDq72DVBg.uoi2O7TMzQyRybMrHSoWcRuavdy/Qcy', NULL, '2022-11-16 15:24:45', '2022-11-16 15:24:45', 0),
(27, 'user25', 'user25@wp.pl', 'user', NULL, '$2y$10$sjybDi9ZPN2BwEssD/Ov2ecvyhuwKa101Vv0d4Tt3lG42Z1Ppv5Bi', NULL, '2022-11-16 15:26:40', '2022-11-16 15:26:40', 0),
(28, 'user26', 'user26@wp.pl', 'user', NULL, '$2y$10$7blvc1hJcWoYVzBhASwnOuPateVn7JvwPl67R74hmTnqDZ.WV/Orq', NULL, '2022-11-16 15:27:51', '2022-11-16 15:27:51', 0),
(29, '1234', 'user27@wp.pl', 'user', NULL, '$2y$10$qR7SPz7v.xlBLdaqGapbkOjTn/MpzXlFSWZxVYtmP8c9TvTLgKiJy', NULL, '2022-11-16 15:28:45', '2022-11-21 17:06:38', 1),
(30, 'user28', 'user28@pp.pl', 'user', NULL, '$2y$10$MosYCPFfJXZHM2lXr4bqu.CUdYAZr.j3DnlSqgddL5gm3Q7OHl.fe', NULL, '2022-11-16 15:31:45', '2022-11-16 15:31:45', 0),
(31, 'user29', 'user29@wp.pl', 'user', NULL, '$2y$10$ui1cAJVi1VSNDY2MOAgNEeT4vVc1ODsMPvMDk3dUtZAp5PmDhAjMq', NULL, '2022-11-16 15:51:32', '2022-11-16 15:51:32', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users_verify`
--

DROP TABLE IF EXISTS `users_verify`;
CREATE TABLE IF NOT EXISTS `users_verify` (
  `user_id` int NOT NULL,
  `token` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Zrzut danych tabeli `users_verify`
--

INSERT INTO `users_verify` (`user_id`, `token`, `created_at`, `updated_at`) VALUES
(26, 'xkOeEWeNgDP3fRY0Dyd0VLht45NXUU7uZzu24HOyE824gMMGtz8f8hZsm5xOvlAz', '2022-11-16 15:24:45', '2022-11-16 15:24:45'),
(27, 'QevoDsMCAUet0bBpg4gF2KzHIhse9cr2Zof3rr3fEJaKnireGY726jHoGlLa5tbP', '2022-11-16 15:26:40', '2022-11-16 15:26:40'),
(28, '6FWXtiorkbj68iMnnTdxWXiFiDwSzvWiKX5h6u8uXaYSo9B2Kp20y8xAaKwCkTHc', '2022-11-16 15:27:51', '2022-11-16 15:27:51'),
(29, 'PEyhl9iTMakgv24oyiIBn4BxGIK7f62MoR7CeTF4yCH6uSVMkAim8jv1q198EBDN', '2022-11-16 16:38:16', '2022-11-16 16:38:16'),
(30, '8F35yHx8eioN1l0utLBOHOVJEp0bXBIyJ6Gc6yP4sYPFuR7klqGjv34G5NDkhGa0', '2022-11-16 15:31:45', '2022-11-16 15:31:45'),
(31, 'NsDCA0y9aJqmVAyrYVAhuUihrzv67n4A7FD7vZcTmGhWZSSxzXHZE9Q8urOT5KwP', '2022-11-16 15:51:32', '2022-11-16 15:51:32'),
(32, 'vnQ8Xv63oufZWmydRFKlca5JcGLltQuRBGJolJEDY90LNSJK5FIpSSDDofNZrsR2', '2022-11-17 15:12:01', '2022-11-17 15:12:01'),
(33, 'Tfgm13ryBPZujT7xs7S5LaocvzAGEwAqLw6GPW3xtv5PcNhdq0OAeUPaS0JE5LK6', '2022-11-21 17:10:34', '2022-11-21 17:10:34');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_refuels`
--

DROP TABLE IF EXISTS `user_refuels`;
CREATE TABLE IF NOT EXISTS `user_refuels` (
  `refueling_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `fuel` double(8,2) NOT NULL,
  `price` double(8,2) NOT NULL,
  `refueling_date` date NOT NULL,
  `distance` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`refueling_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_reprairs`
--

DROP TABLE IF EXISTS `user_reprairs`;
CREATE TABLE IF NOT EXISTS `user_reprairs` (
  `reprair_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `reprair_date` date NOT NULL,
  `car_mileage` bigint NOT NULL,
  `reprair_location` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `reprair_subject` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`reprair_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
