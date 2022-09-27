-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Sty 2022, 15:14
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS car_project;
USE car_project;
--
-- Baza danych: `car_project`
--

-- --------------------------------------------------------
DROP TABLE IF EXISTS car_bases;
DROP TABLE IF EXISTS car_makes;
DROP TABLE IF EXISTS failed_jobs;
DROP TABLE IF EXISTS migrations;
DROP TABLE IF EXISTS password_resets;
DROP TABLE IF EXISTS personal_access_tokens;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS user_refuels;
DROP TABLE IF EXISTS user_reprairs;
--
-- Struktura tabeli dla tabeli `car_bases`
--

CREATE TABLE `car_bases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `make` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `make_id` bigint(20) NOT NULL,
  `generation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_from` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_to` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `series` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trim` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_seats` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `length_mm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `width_mm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `height_mm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wheelbase_mm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_track_mm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rear_track_mm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `curb_weight_kg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wheel_size_r14` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ground_clearance_mm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer_load_with_brakes_kg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload_kg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_track_width_mm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_track_width_mm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `clearance_mm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Npęd na wszystkie koła_weight_kg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_rear_axle_load_kg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_trunk_capacity_l` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum_trunk_capacity_l` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `maximum_torque_n_m` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `injection_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `overhead_camshaft` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cylinder_layout` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_cylinders` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `compression_ratio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `valves_per_cylinder` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `boost_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cylinder_bore_mm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stroke_cycle_mm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_placement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `turnover_of_maximum_torque_rpm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_power_kw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `presence_of_intercooler` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity_cm3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_hp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_hp_rpm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `drive_wheels` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_gears` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `turning_circle_m` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mixed_fuel_consumption_per_100_km_l` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `range_km` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_tank_capacity_l` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `acceleration_0_100_km/h_s` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_speed_km_per_h` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_grade` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_suspension` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rear_brakes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_brakes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_suspension` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_class` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_of_origin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_doors` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `car_bases`
--
INSERT INTO `car_bases` (`id`, `model`, `make`, `make_id`, `generation`, `year_from`, `year_to`, `series`, `trim`, `body_type`, `number_of_seats`, `length_mm`, `width_mm`, `height_mm`, `wheelbase_mm`, `front_track_mm`, `rear_track_mm`, `curb_weight_kg`, `wheel_size_r14`, `ground_clearance_mm`, `trailer_load_with_brakes_kg`, `payload_kg`, `back_track_width_mm`, `front_track_width_mm`, `clearance_mm`, `Npęd na wszystkie koła_weight_kg`, `front_rear_axle_load_kg`, `max_trunk_capacity_l`, `minimum_trunk_capacity_l`, `maximum_torque_n_m`, `injection_type`, `overhead_camshaft`, `cylinder_layout`, `number_of_cylinders`, `compression_ratio`, `engine_type`, `valves_per_cylinder`, `boost_type`, `cylinder_bore_mm`, `stroke_cycle_mm`, `engine_placement`, `turnover_of_maximum_torque_rpm`, `max_power_kw`, `presence_of_intercooler`, `capacity_cm3`, `engine_hp`, `engine_hp_rpm`, `drive_wheels`, `number_of_gears`, `turning_circle_m`, `transmission`, `mixed_fuel_consumption_per_100_km_l`, `range_km`, `fuel_tank_capacity_l`, `acceleration_0_100_km/h_s`, `max_speed_km_per_h`, `fuel_grade`, `back_suspension`, `rear_brakes`, `front_brakes`, `front_suspension`, `car_class`, `country_of_origin`, `number_of_doors`, `created_at`, `updated_at`) VALUES
(1, 'Giulia', 'Alfa Romeo', 1, '105', '1962', '1977', 'Sedan', '1.8 D MT', 'Sedan', '5', '4140', '1560', '1430', '2510', '1310', '1270', '1130', '', '114', '', '400', '', '', '', '1530', '', '480', '480', '108', 'Wielopunktowy wtrysk paliwa', '', 'Inline', '4', '', 'Diesel', '2', '', '79', '88', '', '2200', '', '', '1760', '52', '4000', 'Npęd na tylne koła', '5', '10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(2, 'Giulietta', 'Alfa Romeo', 1, '116', '1977', '1981', 'Alfa Romeo Giulietta I Coupe', '1.3 MT', '', '4', '3980', '1535', '1320', '2380', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Włochy', '2', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(3, 'Montreal', 'Alfa Romeo', 1, '1 generacja', '1970', '1979', 'Coupe', '2.6 MT', '', '2', '3962', '1676', '1207', '2527', '', '', '', '195/70/R14', '', '', '', '1341', '1372', '119', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'S', 'Włochy', '2', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(4, 'Spider', 'Alfa Romeo', 1, '115', '1990', '1993', 'Kabriolet', '1.3 MT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(5, 'Stelvio', 'Alfa Romeo', 1, '949', '2017', '2020', 'Crossover', '2.0 AT Q4', 'Crossover', '5', '4687', '1903', '1671', '2818', '1613', '1653', '1735', '', '200', '', '', '', '', '', '', '', '1600', '525', '330', 'Wtrysk bezpoĹ›redni', '', 'Inline', '4', '', 'Benzyna', '4', 'Twin-scroll', '84', '90', '', '1750', '', 'Obecny', '1995', '200', '4500', 'Npęd na cztery koła', '8', '11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(6, 'A7', 'Audi', 2, '2 generacja (4K)', '2018', '2020', 'liftback', '2.0 AMT 4WD', '', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(7, 'A8', 'Audi', 2, '2 generacja (D3)', '2002', '2005', 'Sedan', '3.0 AT 4WD', '', '5', '5051', '1894', '1444', '2944', '', '', '1830', '235/60/R16', '', '', '', '1615', '1629', '125', '2430', '', '', '500', '450', '', '', 'V-type', '6', '17', 'diesel', '4', 'Turbina', '83', '91', '', '1400', '171', '', '2967', '233', '4000', 'Npęd na wszystkie koła', '6', '', 'Automatyczna', '8', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(8, 'Q5', 'Audi', 2, '2 generacja', '2016', '2020', 'Crossover', '2.0 TDI MT', 'Crossover', '5', '4663', '1893', '1659', '2819', '1616', '1609', '1660', '', '', '', '660', '', '', '', '2320', '', '1550', '550', '320', 'Common Rail', '', 'Inline', '4', '', 'Diesel', '4', 'Turbo', '81', '95', '', '3250', '', '', '1968', '150', '4200', 'Npęd na przednie koła', '6', '11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(9, 'Q7', 'Audi', 2, '2 generacja ( redesign)', '2019', '', 'Crossover', '3.0 l', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(10, 'Berlingo', 'Citroen', 3, '1 generacja', '1996', '2002', 'Minivan', '1.1 MT', 'Minivan', '5', '4108', '1719', '1800', '2690', '1425', '1440', '995', '', '140', '', '', '', '', '', '1670', '', '2800', '664', '83', 'Wielopunktowy wtrysk paliwa', '', 'Inline', '4', '', 'Benzyna', '2', '', '', '', '', '3800', '', '', '1124', '60', '6200', 'Npęd na przednie koła', '5', '', 'Manualna', '', '620|850', '55', '21', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(11, 'Xantia', 'Citroen', 3, '1 generacja', '1992', '1998', 'Hatchback 5-drzwiowy', '1.6 MT', '', '5', '4440', '1760', '1379', '2741', '', '', '1170', '175/70/R14', '', '', '', '1440', '1481', '160', '1710', '', '878', '480', '130', 'Wtrysk bezpoĹ›redni (wielopunktowy)', '', 'inline', '4', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(12, 'Xsara', 'Citroen', 3, '1 generacja', '1997', '2000', 'Break wagon', '1.4 MT', 'Wagon', '5', '4167', '1698', '1405', '2540', '1423', '1430', '1137', '', '110', '', '', '', '', '', '1580', '', '515', '515', '111', 'Wtrysk bezpoĹ›redni', '', 'Inline', '4', '', 'Benzyna', '2', '', '', '', '', '3400', '', '', '1360', '75', '5500', 'Npęd na przednie koła', '5', '11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(13, 'Xsara Picasso', 'Citroen', 3, '1 generacja', '1999', '2004', 'Minivan', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(14, 'Bravo', 'Fiat', 4, '1 generacja', '1995', '2001', 'Hatchback 3-drzwiowy', '1.2 MT', 'Hatchback', '5', '4026', '1740', '1420', '2540', '1440', '1461', '1010', '', '150', '', '', '', '', '', '1510', '', '1030', '280', '113', 'Wielopunktowy wtrysk paliwa', '', 'Inline', '4', '', 'Benzyna', '4', '', '70', '78', '', '4250', '', '', '1242', '82', '5500', 'Npęd na przednie koła', '5', '', 'Manualna', '6', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(15, 'Cinquecento', 'Fiat', 4, '1 generacja', '1991', '1998', 'Hatchback', '0.7 MT', 'Hatchback', '5', '3227', '1487', '1435', '2200', '1270', '1276', '690', '', '', '', '', '', '', '', '1090', '', '810', '170', '47', 'Gaźnik', '', 'Inline', '4', '', 'Benzyna', '2', '', '80', '70', '', '2750', '', '', '704', '31', '5000', 'Npęd na przednie koła', '4', '', 'Manualna', '', '', '35', '', '', '95', 'Sprężyny śrubowe', 'Bębnowe', 'Tarczowe', 'Wahacz', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(16, 'Panda', 'Fiat', 4, '1 generacja', '1980', '1986', 'Hatchback', '0.8 MT', 'Hatchback', '5', '3408', '1494', '1420', '2159', '1263', '1265', '715', '', '130', '', '', '', '', '', '1115', '', '630', '270', '59', 'Gaźnik', '', 'Inline', '4', '', 'Benzyna', '2', '', '70', '64', '', '2800', '', '', '843', '34', '5800', 'Npęd na przednie koła', '5', '9', 'Manualna', '5', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(17, 'Punto', 'Fiat', 4, '1 generacja', '1993', '1999', 'Hatchback', '1.1 MT', 'Hatchback', '5', '3760', '1625', '1460', '2450', '1395', '1377', '842', '', '', '', '', '', '', '', '1300', '', '1080', '275', '85', 'Wtrysk pojedynczy', '', 'Inline', '4', '', 'Benzyna', '2', '', '70', '72', '', '3500', '', '', '1108', '55', '5500', 'Npęd na przednie koła', '5', '', 'Manualna', '6', '', '47', '16', '150', '95', 'Wahacze wleczone', 'Bębnowe', 'Tarczowe', 'Wahacz', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(18, 'Seicento', 'Fiat', 4, '1 generacja', '1998', '2004', 'Hatchback 3-drzwiowy', '0.9 MT', '', '4', '3337', '1508', '1420', '2200', '', '', '705', '155/65/R13', '', '', '', '1272', '1277', '160', '1150', '', '810', '170', '65', 'Wtrysk Centralneny (single-point or single-point)', '', 'inline', '4', '', 'Benzyna', '4', 'Brak', '', '', 'Przód', '3000', '29', '', '899', '39', '5500', 'Npęd na przednie koła', '5', '', 'Manualna', '6', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(19, 'Stilo', 'Fiat', 4, '1 generacja', '2001', '2010', 'Hatchback 3-drzwiowy', '1.2 MT', 'Hatchback', '5', '4180', '1785', '1475', '2600', '1515', '1510', '1090', '', '150', '', '', '', '', '', '1600', '', '1000', '305', '114', 'Wielopunktowy wtrysk paliwa', '', 'Inline', '4', '', 'Benzyna', '4', '', '70', '78', '', '4000', '', '', '1242', '80', '5000', 'Npęd na przednie koła', '6', '', 'Manualna', '6', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(20, 'Fiesta', 'Ford', 5, '1 generacja', '1976', '1983', 'Hatchback 3-drzwiowy', '1.0 MT', 'Hatchback', '4', '3648', '1567', '1359', '2286', '1334', '1321', '715', '', '140', '', '', '', '', '', '1160', '', '999', '200', '64', 'Gaźnik', '', 'Inline', '4', '', 'Benzyna', '2', '', '74', '55', '', '2700', '', 'Obecny', '957', '40', '5500', 'Npęd na przednie koła', '4', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(21, 'Focus', 'Ford', 5, '1 generacja', '1998', '2004', 'Hatchback 3-drzwiowy', '1.4 AT', 'Hatchback', '5', '4152', '1698', '1430', '2615', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '123', 'Wielopunktowy wtrysk paliwa', '', 'Inline', '4', '', 'Benzyna', '4', '', '', '', '', '3500', '', '', '1388', '75', '5000', 'Npęd na przednie koła', '4', '', 'Automatyczna', '', '', '', '', '', '95', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(22, 'Galaxy', 'Ford', 5, '1 generacja', '1995', '2000', 'Minivan 5-drzwiowy', '1.9 TDi AT', 'Minivan', '7', '4617', '1810', '1730', '2835', '1530', '1524', '1820', '', '150', '3920', '600', '', '', '', '2420', '1210/1250', '2610', '256', '235', 'Wtrysk bezpoĹ›redni', '', 'Inline', '4', '', 'Diesel', '2', 'Turbo', '79', '95', '', '1900', '', 'Obecny', '1896', '110', '4150', 'Npęd na przednie koła', '4', '11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(23, 'Agila', 'Opel', 6, '1 generacja', '2000', '2003', 'Microvan', '1.0 MT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(24, 'Astra', 'Opel', 6, 'F', '1991', '1994', 'Kabriolet', '1.4 MT', 'Kabriolet', '4', '4239', '1688', '1410', '2517', '1430', '1423', '1055', '', '130', '2385', '480', '', '', '', '1535', '', '720', '390', '113', 'Wielopunktowy wtrysk paliwa', '', 'Inline', '4', '', 'Benzyna', '2', '', '77', '73', '', '3400', '', 'Obecny', '1389', '82', '5800', 'Npęd na przednie koła', '5', '10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(25, 'Corsa', 'Opel', 6, 'A', '1982', '1993', 'Hatchback 3-drzwiowy', '1.0 MT', 'Hatchback', '5', '3650', '1535', '1375', '3650', '1535', '1540', '760', '', '140', '', '', '', '', '', '1255', '', '845', '845', '68', 'Gaźnik', '', 'Inline', '4', '', 'Benzyna', '2', '', '72', '61', '', '2600', '', '', '993', '45', '5400', 'Npęd na przednie koła', '4', '', 'Manualna', '6', '630|1', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(26, 'Omega', 'Opel', 6, 'A', '1986', '1990', 'Sedan', '1.8 AT', 'Sedan', '5', '4687', '1772', '1445', '2730', '1445', '1460', '1235', '', '140', '', '', '', '', '', '1795', '', '870', '520', '160', 'Wielopunktowy wtrysk paliwa', '', 'Inline', '4', '', 'Benzyna', '2', '', '84', '79', '', '4600', '', '', '1796', '115', '5600', 'Npęd na tylne koła', '4', '10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(27, '206', 'Peugeot', 7, '1 generacja', '1998', '2003', 'CC Kabriolet', '1.6 AT', 'Kabriolet', '4', '3835', '1673', '1374', '2442', '1439', '1430', '1152', '', '110', '', '420', '', '', '', '1572', '', '410', '175', '147', 'Wielopunktowy wtrysk paliwa', '', 'Inline', '4', '', 'Benzyna', '4', '', '78', '82', '', '4000', '', '', '1587', '109', '5750', 'Npęd na przednie koła', '4', '10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(28, '306', 'Peugeot', 7, '1 generacja', '1993', '1997', 'Kabriolet', '1.8 AT', 'Kabriolet', '4', '4144', '1689', '1356', '2540', '1454', '1429', '', '', '110', '', '', '', '', '', '', '', '274', '274', '153', 'Wielopunktowy wtrysk paliwa', '', 'Inline', '4', '', 'Benzyna', '2', '', '83', '81', '', '3000', '', '', '1762', '101', '6000', 'Npęd na przednie koła', '4', '', 'Automatyczna', '', '', '56', '', '', '95', 'Wahacze wleczone', 'Bębnowe', 'Tarczowe (wentylowane)', 'Wahacz', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(29, 'Fabia', 'Skoda', 8, '1 generacja [redesign]', '2004', '2007', 'Hatchback 5-drzwiowy', '1.2 MT', '', '5', '3960', '1646', '1451', '2464', '', '', '1010', '165/70/R14', '', '', '', '1424', '1435', '140', '1515', '', '1060', '260', '106', 'Wtrysk bezpoĹ›redni (wielopunktowy)', '', 'inline', '3', '10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(30, 'Octavia', 'Skoda', 8, '1 generacja', '1996', '2000', 'Combi wagon 5-drzwiowy', '1.4 MT', 'Wagon', '5', '4511', '1731', '1448', '2512', '1516', '1492', '', '', '137', '', '', '', '', '', '', '', '1512', '548', '120', 'Wielopunktowy wtrysk paliwa', '', 'Inline', '4', '', 'Benzyna', '2', '', '75', '78', '', '2500', '', 'Obecny', '1397', '60', '4500', 'Npęd na przednie koła', '5', '10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(31, 'Grand Vitara', 'Suzuki', 9, '1 generacja', '1998', '2005', 'Crossover 2-drzwiowy', '1.6 MT 4WD', 'Crossover', '5', '3865', '1710', '1690', '2200', '1460', '1460', '1290', '', '200', '', '', '', '', '', '1750', '', '828', '210', '138', 'Wielopunktowy wtrysk paliwa', '', 'Inline', '4', '', 'Benzyna', '4', '', '', '', '', '4000', '', '', '1590', '94', '5200', 'Npęd na cztery koła', '5', '', 'Manualna', '8', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(32, 'Ignis', 'Suzuki', 9, '1 generacja', '2000', '2003', 'Hatchback 3-drzwiowy', '1.3 MT', 'Hatchback', '5', '3615', '1595', '1540', '2360', '1405', '1385', '', '', '180', '', '', '', '', '', '1430', '', '', '', '110', 'Wielopunktowy wtrysk paliwa', '', 'Inline', '4', '', 'Benzyna', '4', '', '', '', '', '3500', '', '', '1328', '83', '5500', 'Npęd na przednie koła', '5', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(33, 'Swift', 'Suzuki', 9, '1 generacja', '1984', '1986', 'Hatchback 3-drzwiowy', '1.0 AT', 'Hatchback', '5', '3580', '1530', '1350', '2240', '', '', '675', '', '', '', '', '', '', '', '800', '', '', '', '75', 'Gaźnik', '', 'Inline', '3', '', 'Benzyna', '2', '', '74', '77', '', '3600', '', '', '993', '50', '5800', 'Npęd na przednie koła', '3', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(34, 'Avensis', 'Toyota', 10, '1 generacja', '1997', '2000', 'Hatchback', '1.6 MT', 'Hatchback', '5', '4490', '1710', '1425', '2630', '1480', '1450', '1200', '', '', '', '', '', '', '', '', '', '', '', '145', 'Wielopunktowy wtrysk paliwa', '', 'Inline', '4', '', 'Benzyna', '4', '', '81', '77', '', '4800', '', 'Obecny', '1587', '110', '6000', 'Npęd na przednie koła', '5', '10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(35, 'Yaris', 'Toyota', 10, '1 generacja', '1999', '2003', 'Hatchback 3-drzwiowy', '1.0 AT', '', '5', '3615', '1660', '1500', '2370', '', '', '830', '175/65/R14', '', '', '', '1430', '1450', '120', '1320', '', '950', '205', '90', 'Wtrysk bezpoĹ›redni (wielopunktowy)', '', 'inline', '4', '10', 'Benzyna', '4', 'Brak', '69', '66', 'Przód', '4100', '50', '', '998', '68', '6000', 'Npęd na przednie koła', '4', '', 'Automatyczna', '', '', '45', '13', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(36, 'Golf', 'Volkswagen', 11, '1 generacja', '1974', '1993', 'Kabriolet', '1.5 MT', 'Kabriolet', '5', '3820', '1610', '1412', '2400', '1392', '1347', '910', '', '125', '', '', '', '', '', '', '', '220', '220', '110', 'Gaźnik', '', 'Inline', '4', '', 'Benzyna', '2', '', '79', '73', '', '2500', '', '', '1457', '70', '5600', 'Npęd na przednie koła', '4', '10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59'),
(37, 'Passat', 'Volkswagen', 11, 'B1', '1973', '1977', 'Fastback 2-drzwiowy', '1.3 MT', 'Fastback', '5', '4180', '1600', '1360', '2470', '1341', '1349', '885', '', '180', '', '', '', '', '', '', '', '', '', '91', 'Gaźnik', '', 'Inline', '4', '', 'Benzyna', '2', '', '75', '72', '', '3500', '', '', '1297', '55', '5800', 'Npęd na przednie koła', '4', '10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-01-06 16:05:59', '2022-01-06 16:05:59');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `car_makes`
--

CREATE TABLE `car_makes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `make` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `car_makes`
--
INSERT INTO `car_makes` (`id`, `make`, `created_at`, `updated_at`) VALUES
(1, 'Alfa Romeo', '2022-01-06 16:08:13', '2022-01-06 16:08:13'),
(2, 'Audi', '2022-01-06 16:08:13', '2022-01-06 16:08:13'),
(3, 'Citroen', '2022-01-06 16:08:13', '2022-01-06 16:08:13'),
(4, 'Fiat', '2022-01-06 16:08:13', '2022-01-06 16:08:13'),
(5, 'Ford', '2022-01-06 16:08:13', '2022-01-06 16:08:13'),
(6, 'Opel', '2022-01-06 16:08:13', '2022-01-06 16:08:13'),
(7, 'Peugeot', '2022-01-06 16:08:13', '2022-01-06 16:08:13'),
(8, 'Skoda', '2022-01-06 16:08:13', '2022-01-06 16:08:13'),
(9, 'Suzuki', '2022-01-06 16:08:13', '2022-01-06 16:08:13'),
(10, 'Toyota', '2022-01-06 16:08:13', '2022-01-06 16:08:13'),
(11, 'Volkswagen', '2022-01-06 16:08:13', '2022-01-06 16:08:13');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failed_jobs`
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
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
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

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_refuels`
--

CREATE TABLE `user_refuels` (
  `refueling_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `fuel` double(8,2) NOT NULL,
  `price` double(8,2) NOT NULL,
  `refueling_date` date NOT NULL,
  `distance` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_reprairs`
--

CREATE TABLE `user_reprairs` (
  `reprair_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `reprair_date` date NOT NULL,
  `car_mileage` bigint(20) NOT NULL,
  `reprair_location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reprair_subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `car_bases`
--
ALTER TABLE `car_bases`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `car_makes`
--
ALTER TABLE `car_makes`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksy dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeksy dla tabeli `user_refuels`
--
ALTER TABLE `user_refuels`
  ADD PRIMARY KEY (`refueling_id`);

--
-- Indeksy dla tabeli `user_reprairs`
--
ALTER TABLE `user_reprairs`
  ADD PRIMARY KEY (`reprair_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `car_bases`
--
ALTER TABLE `car_bases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT dla tabeli `car_makes`
--
ALTER TABLE `car_makes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `user_refuels`
--
ALTER TABLE `user_refuels`
  MODIFY `refueling_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `user_reprairs`
--
ALTER TABLE `user_reprairs`
  MODIFY `reprair_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
