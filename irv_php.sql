-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2021 pada 18.43
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irv_php`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_user`
--

CREATE TABLE `admin_user` (
  `admin` varchar(30) DEFAULT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin_user`
--

INSERT INTO `admin_user` (`admin`, `user_id`) VALUES
('superadmin', 2),
('superadmin', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'superadmin', 'Super Administrator'),
(2, 'admin', 'Administrator'),
(3, 'user', 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin@mail.com', 2, '2021-06-23 11:02:31', 1),
(2, '::1', 'superadmin@mail.com', 1, '2021-06-23 11:08:35', 1),
(3, '::1', 'admin@mail.com', 2, '2021-06-23 11:09:09', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `date_id` int(10) UNSIGNED DEFAULT NULL,
  `position_id` int(10) UNSIGNED DEFAULT NULL,
  `lat` float(10,4) NOT NULL,
  `lng` float(10,4) NOT NULL,
  `amplitude` float(5,2) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dates`
--

CREATE TABLE `dates` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1615960778, 1),
(5, '2021-02-17-034933', 'App\\Database\\Migrations\\Stations', 'default', 'App', 1615961688, 2),
(7, '2021-02-18-051518', 'App\\Database\\Migrations\\Positions', 'default', 'App', 1615963321, 3),
(14, '2021-03-18-060526', 'App\\Database\\Migrations\\Dates', 'default', 'App', 1620401392, 4),
(22, '2021-02-18-051911', 'App\\Database\\Migrations\\Data', 'default', 'App', 1624465816, 5),
(25, '2021-05-10-083926', 'App\\Database\\Migrations\\AdminUser', 'default', 'App', 1624466542, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `positions`
--

CREATE TABLE `positions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `positions`
--

INSERT INTO `positions` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Bogie Front Left', 'bogie-front-left', '2021-05-03 08:47:24', '2021-05-07 09:38:38'),
(2, 'Bogie Front Right', 'bogie-front-right', '2021-05-03 10:49:14', '2021-05-07 09:38:34'),
(3, 'Bogie Rear Left', 'bogie-rear-left', '2021-05-07 03:56:56', '2021-05-07 09:38:55'),
(4, 'Bogie Rear Right', 'bogie-rear-right', '2021-05-07 03:57:06', '2021-05-07 09:38:50'),
(5, 'Axle Box Front Left', 'axle-box-front-left', '2021-05-07 03:58:09', '2021-05-07 09:39:12'),
(6, 'Axle Box Front Right', 'axle-box-front-right', '2021-05-07 03:58:17', '2021-05-07 09:39:06'),
(7, 'Axle Box Rear Left', 'axle-box-rear-left', '2021-05-07 03:59:19', '2021-05-07 09:39:39'),
(8, 'Axle Box Rear Right', 'axle-box-rear-right', '2021-05-07 03:59:33', '2021-05-07 09:39:33'),
(9, 'Cabin Front Left', 'cabin-front-left', '2021-05-07 03:59:53', '2021-05-07 09:37:42'),
(10, 'Cabin Front Right', 'cabin-front-right', '2021-05-07 03:59:59', '2021-05-07 09:37:49'),
(11, 'Cabin Rear Left', 'cabin-rear-left', '2021-05-07 04:00:09', '2021-05-07 09:38:18'),
(12, 'Cabin Rear Right', 'cabin-rear-right', '2021-05-07 04:00:29', '2021-05-07 09:38:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stations`
--

CREATE TABLE `stations` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `lat` float(10,5) NOT NULL,
  `lng` float(10,5) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `stations`
--

INSERT INTO `stations` (`id`, `name`, `slug`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(1, 'STASIUN BEKASI TIMUR', 'stasiun-bekasi-timur', -6.24690, 107.01820, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(2, 'STASIUN ANDIR', 'stasiun-andir', -6.90816, 107.57933, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(3, 'STASIUN ARJAWINANGUN', 'stasiun-arjawinangun', -6.64456, 108.41453, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(4, 'STASIUN AWIPARI', 'stasiun-awipari', -7.35374, 108.27435, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(5, 'STASIUN BABAKAN', 'stasiun-babakan', -6.86050, 108.71885, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(6, 'STASIUN BANDUNG', 'stasiun-bandung', -6.91399, 107.60230, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(7, 'STASIUN BANGODUWA', 'stasiun-bangoduwa', -6.66297, 108.46001, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(8, 'STASIUN BANJAR', 'stasiun-banjar', -7.37630, 108.54227, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(9, 'STASIUN BATUTULIS', 'stasiun-batutulis', -6.62588, 106.80958, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(10, 'STASIUN BEKASI', 'stasiun-bekasi', -6.23658, 106.99928, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(11, 'STASIUN BOGOR', 'stasiun-bogor', -6.59426, 106.79071, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(12, 'STASIUN BOJONG', 'stasiun-bojong', -7.34750, 108.43120, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(13, 'STASIUN BOJONGGEDE', 'stasiun-bojonggede', -6.49316, 106.79501, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(14, 'STASIUN BUMIWALUYA', 'stasiun-bumiwaluya', -7.05870, 108.07060, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(15, 'STASIUN CANGKRING', 'stasiun-cangkring', -6.67959, 108.50098, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(16, 'STASIUN CIAMIS', 'stasiun-ciamis', -7.32930, 108.35610, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(17, 'STASIUN CIBADAK', 'stasiun-cibadak', -6.88812, 106.78035, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(18, 'STASIUN CIBATU', 'stasiun-cibatu', -7.09980, 107.98000, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(19, 'STASIUN CIBEBER', 'stasiun-cibeber', -6.93756, 107.12115, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(20, 'STASIUN CIBINONG', 'stasiun-cibinong', -6.46414, 106.85249, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(21, 'STASIUN CIBITUNG', 'stasiun-cibitung', -6.26173, 107.08426, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(22, 'STASIUN CIBUNGUR', 'stasiun-cibungur', -6.46783, 107.47954, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(23, 'STASIUN CICALENGKA', 'stasiun-cicalengka', -6.98122, 107.83252, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(24, 'STASIUN CICURUG', 'stasiun-cicurug', -6.79068, 106.77960, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(25, 'STASIUN CIGANEA', 'stasiun-ciganea', -6.57344, 107.43079, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(26, 'STASIUN CIGOMBONG', 'stasiun-cigombong', -6.74230, 106.80300, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(27, 'STASIUN CIKADONGDONG', 'stasiun-cikadongdong', -6.71557, 107.39089, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(28, 'STASIUN CIKAMPEK', 'stasiun-cikampek', -6.40623, 107.45894, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(29, 'STASIUN CIKARANG', 'stasiun-cikarang', -6.25478, 107.14467, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(30, 'STASIUN CIKAUM', 'stasiun-cikaum', -6.43550, 107.73960, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(31, 'STASIUN CIKUDAPATEUH', 'stasiun-cikudapateuh', -6.91876, 107.62594, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(32, 'STASIUN CILAKU', 'stasiun-cilaku', -6.91876, 107.62594, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(33, 'STASIUN CILAME', 'stasiun-cilame', -6.80332, 107.46349, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(34, 'STASIUN CILEBUT', 'stasiun-cilebut', -6.53054, 106.80067, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(35, 'STASIUN CILEDUG', 'stasiun-ciledug', -6.90272, 108.74407, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(36, 'STASIUN CILEGEH', 'stasiun-cilegeh', -6.46389, 108.03527, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(37, 'STASIUN CILEJIT', 'stasiun-cilejit', -6.35426, 106.50963, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(38, 'STASIUN CIMAHI', 'stasiun-cimahi', -6.88580, 107.53610, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(39, 'STASIUN CIMEKAR', 'stasiun-cimekar', -6.94970, 107.71450, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(40, 'STASIUN CIMINDI', 'stasiun-cimindi', -6.89609, 107.56115, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(41, 'STASIUN CIPATAT', 'stasiun-cipatat', -6.82195, 107.38600, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(42, 'STASIUN CIPEUNDEUY', 'stasiun-cipeundeuy', -7.09360, 108.10070, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(43, 'STASIUN CIPEUYEUM', 'stasiun-cipeuyeum', -6.81847, 107.29817, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(44, 'STASIUN CIPUNEGARA', 'stasiun-cipunegara', -6.45529, 107.88281, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(45, 'STASIUN CIRAHAYU', 'stasiun-cirahayu', -7.13440, 108.11820, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(46, 'STASIUN CIRANJANG', 'stasiun-ciranjang', -6.81420, 107.25120, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(47, 'STASIUN CIREBON', 'stasiun-cirebon', -6.70536, 108.55547, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(48, 'STASIUN CIREBON PRUJAKAN', 'stasiun-cirebon-prujakan', -6.71940, 108.55860, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(49, 'STASIUN CIREUNGAS', 'stasiun-cireungas', -6.95858, 107.03721, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(50, 'STASIUN CIROYOM', 'stasiun-ciroyom', -6.91415, 107.59028, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(51, 'STASIUN CISAAT', 'stasiun-cisaat', -6.91410, 106.88750, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(52, 'STASIUN CITAYAM', 'stasiun-citayam', -6.44875, 106.80240, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(53, 'STASIUN DAWUAN', 'stasiun-dawuan', -6.39310, 107.43310, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(54, 'STASIUN DEPOK', 'stasiun-depok', -6.40497, 106.81711, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(55, 'STASIUN DEPOK BARU', 'stasiun-depok-baru', -6.39110, 106.82170, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(56, 'STASIUN GANDASOLI', 'stasiun-gandasoli', -6.94150, 106.99210, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(57, 'STASIUN GEDEBAGE', 'stasiun-gedebage', -6.94070, 107.68960, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(58, 'STASIUN HAURGEULIS', 'stasiun-haurgeulis', -6.45847, 107.94092, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(59, 'STASIUN HAURPUGUR', 'stasiun-haurpugur', -6.98080, 107.79990, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(60, 'STASIUN INDIHIANG', 'stasiun-indihiang', -7.28670, 108.20090, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(61, 'STASIUN JATIBARANG', 'stasiun-jatibarang', -6.47271, 108.30639, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(62, 'STASIUN KADOKANGABUS', 'stasiun-kadokangabus', -6.46786, 108.10672, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(63, 'STASIUN KARANGPUCUNG', 'stasiun-karangpucung', -7.35346, 108.49407, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(64, 'STASIUN KARANGSARI (GARUT)', 'stasiun-karangsari-garut', -7.09837, 107.93112, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(65, 'STASIUN KARANGTENGAH', 'stasiun-karangtengah', -6.89637, 106.82261, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(66, 'STASIUN KARAWANG', 'stasiun-karawang', -6.30510, 107.30020, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(67, 'STASIUN KEDUNGGEDEH', 'stasiun-kedunggedeh', -6.26987, 107.26116, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(68, 'STASIUN KERTASEMAYA', 'stasiun-kertasemaya', -6.52824, 108.35343, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(69, 'STASIUN KIARACONDONG', 'stasiun-kiaracondong', -6.92490, 107.64650, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(70, 'STASIUN KLARI', 'stasiun-klari', -6.35040, 107.34620, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(71, 'STASIUN KOSAMBI', 'stasiun-kosambi', -6.36920, 107.37500, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(72, 'STASIUN KRANJI', 'stasiun-kranji', -6.22442, 106.97986, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(73, 'STASIUN LAMPEGAN', 'stasiun-lampegan', -6.94985, 107.06140, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(74, 'STASIUN LANGEN', 'stasiun-langen', -7.36016, 108.63693, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(75, 'STASIUN LEBAKJERO', 'stasiun-lebakjero', -7.05360, 107.89400, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(76, 'STASIUN LELES', 'stasiun-leles', -7.08440, 107.89980, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(77, 'STASIUN LEMAHABANG', 'stasiun-lemahabang', -6.27060, 107.17940, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(78, 'STASIUN LOSARI', 'stasiun-losari', -6.84622, 108.80149, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(79, 'STASIUN LUWUNG', 'stasiun-luwung', -6.77757, 108.59323, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(80, 'STASIUN MANONJAYA', 'stasiun-manonjaya', -7.35360, 108.30390, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(81, 'STASIUN MASENG', 'stasiun-maseng', -6.70260, 106.81460, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(82, 'STASIUN MASWATI', 'stasiun-maswati', -6.76087, 107.40900, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(83, 'STASIUN METLAND TELAGAMURNI', 'stasiun-metland-telagamurni', -6.76087, 107.40900, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(84, 'STASIUN NAGREG', 'stasiun-nagreg', -7.01810, 107.88620, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(85, 'STASIUN NAMBO', 'stasiun-nambo', -6.46640, 106.90640, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(86, 'STASIUN PABUARAN', 'stasiun-pabuaran', -6.40910, 107.58400, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(87, 'STASIUN PADALARANG', 'stasiun-padalarang', -6.84284, 107.49739, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(88, 'STASIUN BOGOR PALEDANG', 'stasiun-bogor-paledang', -6.59788, 106.79054, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(89, 'STASIUN PARUNGKUDA', 'stasiun-parungkuda', -6.84637, 106.76052, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(90, 'STASIUN PARUNGPANJANG', 'stasiun-parungpanjang', -6.34427, 106.56872, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(91, 'STASIUN PASIRBUNGUR', 'stasiun-pasirbungur', -6.42620, 107.68850, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(92, 'STASIUN PASIRJENGKOL', 'stasiun-pasirjengkol', -7.12830, 107.99240, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(93, 'STASIUN PEGADEN BARU', 'stasiun-pegaden-baru', -6.45378, 107.81713, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(94, 'STASIUN PLERED', 'stasiun-plered', -6.64098, 107.39133, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(95, 'STASIUN PONDOK CINA', 'stasiun-pondok-cina', -6.36890, 106.83230, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(96, 'STASIUN PRINGKASAP', 'stasiun-pringkasap', -6.41790, 107.63450, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(97, 'STASIUN PURWAKARTA', 'stasiun-purwakarta', -6.55274, 107.44647, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(98, 'STASIUN RAJAMANDALA', 'stasiun-rajamandala', -6.82460, 107.34670, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(99, 'STASIUN RAJAPOLAH', 'stasiun-rajapolah', -7.21960, 108.19120, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(100, 'STASIUN RANCAEKEK', 'stasiun-rancaekek', -6.96480, 107.75588, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(101, 'STASIUN RENDEH', 'stasiun-rendeh', -6.73620, 107.39850, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(102, 'STASIUN SASAKSAAT', 'stasiun-sasaksaat', -6.78018, 107.43200, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(103, 'STASIUN SELAJAMBE', 'stasiun-selajambe', -6.91410, 106.88750, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(104, 'STASIUN SINDANGLAUT', 'stasiun-sindanglaut', -6.83282, 108.62582, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(105, 'STASIUN CIREBON KEJAKSAN', 'stasiun-cirebon-kejaksan', -6.71940, 108.55860, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(106, 'STASIUN PARUJAKAN', 'stasiun-parujakan', -6.71940, 108.55860, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(107, 'STASIUN SUKABUMI', 'stasiun-sukabumi', -6.92514, 106.92957, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(108, 'STASIUN SUKARESMI', 'stasiun-sukaresmi', -6.55953, 106.80252, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(109, 'STASIUN SUKATANI', 'stasiun-sukatani', -6.61087, 107.40845, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(110, 'STASIUN TAMBUN', 'stasiun-tambun', -6.25868, 107.05576, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(111, 'STASIUN TANJUNGRASA', 'stasiun-tanjungrasa', -6.40851, 107.54070, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(112, 'STASIUN TASIKMALAYA', 'stasiun-tasikmalaya', -7.32230, 108.22390, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(113, 'STASIUN TELAGASARI', 'stasiun-telagasari', -6.46480, 108.23475, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(114, 'STASIUN TENJO', 'stasiun-tenjo', -6.32736, 106.46175, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(115, 'STASIUN TERISI', 'stasiun-terisi', -6.46994, 108.16107, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(116, 'STASIUN UNIVERSITAS INDONESIA', 'stasiun-universitas-indonesia', -6.36073, 106.83186, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(117, 'STASIUN WANARAJA', 'stasiun-wanaraja', -7.16510, 107.97670, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(118, 'STASIUN WARUDUWUR', 'stasiun-waruduwur', -6.78561, 108.62528, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(119, 'STASIUN WARUNGBANDREK', 'stasiun-warungbandrek', -7.06470, 108.00700, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(120, 'STASIUN ANCOL', 'stasiun-ancol', -6.12820, 106.84487, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(121, 'STASIUN ANGKE', 'stasiun-angke', -6.14473, 106.80072, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(122, 'STASIUN BOJONG INDAH', 'stasiun-bojong-indah', -6.15980, 106.73720, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(123, 'STASIUN BUARAN', 'stasiun-buaran', -6.21620, 106.92845, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(124, 'STASIUN CAKUNG', 'stasiun-cakung', -6.21910, 106.95210, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(125, 'STASIUN CAWANG', 'stasiun-cawang', -6.24240, 106.85870, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(126, 'STASIUN CIKINI', 'stasiun-cikini', -6.19820, 106.84110, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(127, 'STASIUN CIPINANG', 'stasiun-cipinang', -6.21420, 106.88510, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(128, 'STASIUN DUREN KALIBATA', 'stasiun-duren-kalibata', -6.25530, 106.85510, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(129, 'STASIUN DURI', 'stasiun-duri', -6.15580, 106.80134, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(130, 'STASIUN GAMBIR', 'stasiun-gambir', -6.17670, 106.83070, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(131, 'STASIUN GANG SENTIONG', 'stasiun-gang-sentiong', -6.18610, 106.85090, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(132, 'STASIUN GONDANGDIA', 'stasiun-gondangdia', -6.18580, 106.83260, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(133, 'STASIUN GROGOL', 'stasiun-grogol', -6.16200, 106.78870, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(134, 'STASIUN JAKARTA GUDANG', 'stasiun-jakarta-gudang', -6.13334, 106.81931, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(135, 'STASIUN JAKARTA KOTA', 'stasiun-jakarta-kota', -6.13760, 106.81460, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(136, 'STASIUN JATINEGARA', 'stasiun-jatinegara', -6.21500, 106.87030, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(137, 'STASIUN JAYAKARTA', 'stasiun-jayakarta', -6.14138, 106.82317, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(138, 'STASIUN JUANDA', 'stasiun-juanda', -6.16666, 106.83048, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(139, 'STASIUN KALIDERES', 'stasiun-kalideres', -6.16601, 106.70381, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(140, 'STASIUN KAMPUNG BANDAN', 'stasiun-kampung-bandan', -6.13250, 106.82850, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(141, 'STASIUN KRAMAT', 'stasiun-kramat', -6.19370, 106.85660, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(142, 'STASIUN LENTENG AGUNG', 'stasiun-lenteng-agung', -6.33066, 106.83499, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(143, 'STASIUN MANGGA BESAR', 'stasiun-mangga-besar', -6.14969, 106.82699, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(144, 'STASIUN MANGGARAI', 'stasiun-manggarai', -6.21010, 106.85010, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(145, 'STASIUN MATRAMAN', 'stasiun-matraman', -6.21241, 106.85986, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(146, 'STASIUN PALMERAH', 'stasiun-palmerah', -6.20730, 106.79750, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(147, 'STASIUN PASAR MINGGU', 'stasiun-pasar-minggu', -6.28273, 106.84497, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(148, 'STASIUN PASAR MINGGU BARU', 'stasiun-pasar-minggu-baru', -6.26280, 106.85180, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(149, 'STASIUN PASAR SENEN', 'stasiun-pasar-senen', -6.17450, 106.84450, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(150, 'STASIUN PASOSO', 'stasiun-pasoso', -6.10930, 106.88410, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(151, 'STASIUN PEGANGSAAN', 'stasiun-pegangsaan', -6.19865, 106.84137, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(152, 'STASIUN PESING', 'stasiun-pesing', -6.16127, 106.77183, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(153, 'STASIUN PONDOK JATI', 'stasiun-pondok-jati', -6.20910, 106.86240, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(154, 'STASIUN RAJAWALI', 'stasiun-rajawali', -6.14500, 106.83681, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(155, 'STASIUN RAWA BUAYA', 'stasiun-rawa-buaya', -6.16260, 106.72340, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(156, 'STASIUN SAWAH BESAR', 'stasiun-sawah-besar', -6.16079, 106.82770, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(157, 'STASIUN SUNGAI LAGOA', 'stasiun-sungai-lagoa', -6.20161, 106.81981, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(158, 'STASIUN TAMAN KOTA', 'stasiun-taman-kota', -6.15870, 106.75650, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(159, 'STASIUN TANAHABANG', 'stasiun-tanahabang', -6.18568, 106.81086, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(160, 'STASIUN TANJUNG BARAT', 'stasiun-tanjung-barat', -6.30850, 106.83890, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(161, 'STASIUN TANJUNG PRIUK', 'stasiun-tanjung-priuk', -6.30850, 106.83890, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(162, 'STASIUN TEBET', 'stasiun-tebet', -6.22605, 106.85829, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(163, 'STASIUN UNIVERSITAS PANCASILA', 'stasiun-universitas-pancasila', -6.33892, 106.83437, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(164, 'STASIUN ALASTUA', 'stasiun-alastua', -6.98510, 110.47690, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(165, 'STASIUN AMBARAWA', 'stasiun-ambarawa', -7.26541, 110.40133, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(166, 'STASIUN BALAPULANG', 'stasiun-balapulang', -7.26541, 110.40133, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(167, 'STASIUN BANDARA ADISOEMARMO', 'stasiun-bandara-adisoemarmo', -7.26541, 110.40133, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(168, 'STASIUN BANJARAN (TEGAL)', 'stasiun-banjaran-tegal', -7.26541, 110.40133, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(169, 'STASIUN BATANG', 'stasiun-batang', -6.90987, 109.74766, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(170, 'STASIUN BATANG BARU', 'stasiun-batang-baru', -6.90987, 109.74766, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(171, 'STASIUN BEDONO', 'stasiun-bedono', -7.30912, 110.35303, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(172, 'STASIUN BRAMBANAN', 'stasiun-brambanan', -7.75661, 110.50039, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(173, 'STASIUN BREBES', 'stasiun-brebes', -6.87422, 109.04313, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(174, 'STASIUN BRUMBUNG', 'stasiun-brumbung', -7.02566, 110.52199, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(175, 'STASIUN BUMIAYU', 'stasiun-bumiayu', -7.23744, 109.00987, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(176, 'STASIUN BUTUH', 'stasiun-butuh', -7.72440, 109.85850, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(177, 'STASIUN CEPER', 'stasiun-ceper', -7.66896, 110.67500, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(178, 'STASIUN CEPU', 'stasiun-cepu', -7.15450, 111.59080, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(179, 'STASIUN CILACAP', 'stasiun-cilacap', -7.73608, 109.00684, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(180, 'STASIUN CIPARI', 'stasiun-cipari', -7.44029, 108.76110, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(181, 'STASIUN COMAL', 'stasiun-comal', -6.90932, 109.53708, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(182, 'STASIUN DELANGGU', 'stasiun-delanggu', -7.62238, 110.70665, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(183, 'STASIUN DOPLANG', 'stasiun-doplang', -7.18280, 111.28810, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(184, 'STASIUN GAMBRINGAN', 'stasiun-gambringan', -7.14391, 110.91506, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(185, 'STASIUN GANDRUNGMANGUN', 'stasiun-gandrungmangun', -7.52830, 108.85930, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(186, 'STASIUN GAWOK', 'stasiun-gawok', -7.58950, 110.74460, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(187, 'STASIUN GOMBONG', 'stasiun-gombong', -7.61070, 109.50780, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(188, 'STASIUN GOPRAK', 'stasiun-goprak', -7.27295, 110.89717, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(189, 'STASIUN GUBUG', 'stasiun-gubug', -7.06100, 110.66950, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(190, 'STASIUN GUMILIR', 'stasiun-gumilir', -7.68511, 109.04251, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(191, 'STASIUN GUNDIH', 'stasiun-gundih', -7.21869, 110.90003, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(192, 'STASIUN IJO', 'stasiun-ijo', -7.61520, 109.44690, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(193, 'STASIUN JAMBON', 'stasiun-jambon', -7.15030, 111.01020, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(194, 'STASIUN JAMBU', 'stasiun-jambu', -7.27987, 110.36891, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(195, 'STASIUN JENAR', 'stasiun-jenar', -7.80240, 110.00116, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(196, 'STASIUN JERAKAH', 'stasiun-jerakah', -6.98036, 110.36250, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(197, 'STASIUN JERUKLEGI', 'stasiun-jeruklegi', -7.62280, 109.01800, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(198, 'STASIUN KADIPIRO', 'stasiun-kadipiro', -7.53119, 110.81793, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(199, 'STASIUN KALIBODRI', 'stasiun-kalibodri', -6.97370, 110.14800, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(200, 'STASIUN KALIOSO', 'stasiun-kalioso', -7.46610, 110.80500, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(201, 'STASIUN KALIWUNGU', 'stasiun-kaliwungu', -6.95960, 110.25490, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(202, 'STASIUN KAPUAN', 'stasiun-kapuan', -7.18910, 111.55430, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(203, 'STASIUN KARANGANYAR', 'stasiun-karanganyar', -7.63330, 109.57340, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(204, 'STASIUN KARANGGANDUL', 'stasiun-karanggandul', -7.38853, 109.18587, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(205, 'STASIUN KARANGJATI', 'stasiun-karangjati', -7.10140, 110.77910, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(206, 'STASIUN KARANGKANDRI', 'stasiun-karangkandri', -7.66610, 109.07565, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(207, 'STASIUN KARANGSARI (BANYUMAS)', 'stasiun-karangsari-banyumas', -7.38230, 109.12113, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(208, 'STASIUN KARANGSONO', 'stasiun-karangsono', -7.19623, 110.82570, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(209, 'STASIUN KARANGTALUN', 'stasiun-karangtalun', -7.68566, 109.02401, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(210, 'STASIUN KASUGIHAN', 'stasiun-kasugihan', -7.61840, 109.12170, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(211, 'STASIUN KAWUNGANTEN', 'stasiun-kawunganten', -7.59150, 108.91980, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(212, 'STASIUN KEBASEN', 'stasiun-kebasen', -7.53229, 109.20415, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(213, 'STASIUN KEBONROMO', 'stasiun-kebonromo', -7.41910, 111.06380, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(214, 'STASIUN KEBUMEN', 'stasiun-kebumen', -7.68180, 109.66220, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(215, 'STASIUN KEDUNGBANTENG', 'stasiun-kedungbanteng', -7.40520, 111.11710, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(216, 'STASIUN KEDUNGJATI', 'stasiun-kedungjati', -7.16353, 110.63555, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(217, 'STASIUN KEMIRI', 'stasiun-kemiri', -7.53470, 110.90120, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(218, 'STASIUN KEMRANJEN', 'stasiun-kemranjen', -7.62150, 109.31520, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(219, 'STASIUN KETANGGUNGAN', 'stasiun-ketanggungan', -6.93831, 108.88439, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(220, 'STASIUN KETANGGUNGAN BARAT', 'stasiun-ketanggungan-barat', -6.93831, 108.88439, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(221, 'STASIUN KLATEN', 'stasiun-klaten', -7.71242, 110.60301, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(222, 'STASIUN KRADENAN', 'stasiun-kradenan', -7.15030, 111.14680, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(223, 'STASIUN KRENGSENG', 'stasiun-krengseng', -6.95248, 110.02794, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(224, 'STASIUN KRETEK', 'stasiun-kretek', -7.28563, 109.02988, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(225, 'STASIUN KROYA', 'stasiun-kroya', -7.63008, 109.25351, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(226, 'STASIUN KURIPAN', 'stasiun-kuripan', -6.92377, 109.89436, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(227, 'STASIUN KUTOARJO', 'stasiun-kutoarjo', -7.72602, 109.90715, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(228, 'STASIUN KUTOWINANGUN', 'stasiun-kutowinangun', -7.71710, 109.73520, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(229, 'STASIUN LARANGAN (BREBES)', 'stasiun-larangan-brebes', -6.99049, 108.94880, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(230, 'STASIUN LARANGAN (TEGAL)', 'stasiun-larangan-tegal', -6.86804, 109.18537, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(231, 'STASIUN LEBENG', 'stasiun-lebeng', -7.62127, 109.07668, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(232, 'STASIUN LEGOK', 'stasiun-legok', -6.46480, 108.23475, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(233, 'STASIUN LINGGAPURA', 'stasiun-linggapura', -7.18515, 109.01245, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(234, 'STASIUN MANGKANG', 'stasiun-mangkang', -6.97100, 110.30220, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(235, 'STASIUN MAOS', 'stasiun-maos', -7.61901, 109.13946, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(236, 'STASIUN MARGASARI', 'stasiun-margasari', -7.61901, 109.13946, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(237, 'STASIUN MASARAN', 'stasiun-masaran', -7.46840, 110.94720, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(238, 'STASIUN MELUWUNG', 'stasiun-meluwung', -7.39430, 108.69950, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(239, 'STASIUN NGROMBO', 'stasiun-ngrombo', -7.14536, 110.90063, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(240, 'STASIUN NOTOG', 'stasiun-notog', -7.48595, 109.21323, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(241, 'STASIUN PADAS', 'stasiun-padas', -7.17926, 110.67196, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(242, 'STASIUN PALUR', 'stasiun-palur', -7.56810, 110.87530, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(243, 'STASIUN PANUNGGALAN', 'stasiun-panunggalan', -7.15270, 111.06070, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(244, 'STASIUN PASARNGUTER', 'stasiun-pasarnguter', -7.74203, 110.87975, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(245, 'STASIUN PATUGURAN', 'stasiun-patuguran', -7.32816, 109.05791, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(246, 'STASIUN PEKALONGAN', 'stasiun-pekalongan', -6.88969, 109.66442, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(247, 'STASIUN PEMALANG', 'stasiun-pemalang', -6.88732, 109.38813, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(248, 'STASIUN PETARUKAN', 'stasiun-petarukan', -6.89769, 109.44971, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(249, 'STASIUN PLABUAN', 'stasiun-plabuan', -6.91980, 109.95675, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(250, 'STASIUN PREMBUN', 'stasiun-prembun', -7.72440, 109.79810, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(251, 'STASIUN PRUPUK', 'stasiun-prupuk', -7.12279, 108.98269, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(252, 'STASIUN PURWOKERTO', 'stasiun-purwokerto', -7.41943, 109.22186, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(253, 'STASIUN RANDEGAN', 'stasiun-randegan', -7.56986, 109.22012, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(254, 'STASIUN RANDUBLATUNG', 'stasiun-randublatung', -7.19210, 111.39810, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(255, 'STASIUN SALEM', 'stasiun-salem', -7.39550, 110.82720, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(256, 'STASIUN SEDADI', 'stasiun-sedadi', -7.14040, 110.84820, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(257, 'STASIUN SEMARANG TANJUNG EMAS', 'stasiun-semarang-tanjung-emas', -7.14040, 110.84820, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(258, 'STASIUN SEMARANG PONCOL', 'stasiun-semarang-poncol', -6.97300, 110.41480, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(259, 'STASIUN SEMARANG TAWANG', 'stasiun-semarang-tawang', -6.96440, 110.42790, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(260, 'STASIUN SIDAREJA', 'stasiun-sidareja', -7.48640, 108.80770, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(261, 'STASIUN SIKAMPUH', 'stasiun-sikampuh', -7.62590, 109.19750, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(262, 'STASIUN SLAWI', 'stasiun-slawi', -6.98196, 109.13656, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(263, 'STASIUN SOLO BALAPAN', 'stasiun-solo-balapan', -7.55663, 110.82122, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(264, 'STASIUN SONGGOM', 'stasiun-songgom', -7.02434, 108.98897, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(265, 'STASIUN SRAGEN', 'stasiun-sragen', -7.42941, 111.01754, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(266, 'STASIUN SRAGI', 'stasiun-sragi', -6.92367, 109.57101, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(267, 'STASIUN SROWOT', 'stasiun-srowot', -7.74148, 110.54919, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(268, 'STASIUN SRUWENG', 'stasiun-sruweng', -7.65520, 109.60310, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(269, 'STASIUN SUKOHARJO', 'stasiun-sukoharjo', -7.67980, 110.84331, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(270, 'STASIUN SULUR', 'stasiun-sulur', -7.17420, 111.22290, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(271, 'STASIUN SUMBERLAWANG', 'stasiun-sumberlawang', -7.32770, 110.86370, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(272, 'STASIUN SUMPIUH', 'stasiun-sumpiuh', -7.61480, 109.36450, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(273, 'STASIUN SURODADI', 'stasiun-surodadi', -6.88056, 109.27617, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(274, 'STASIUN TAMBAK', 'stasiun-tambak', -7.61320, 109.40740, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(275, 'STASIUN TANGGUNG', 'stasiun-tanggung', -7.09160, 110.60330, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(276, 'STASIUN TANJUNG', 'stasiun-tanjung', -6.87690, 108.86080, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(277, 'STASIUN TEGAL', 'stasiun-tegal', -6.86740, 109.14271, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(278, 'STASIUN TEGOWANU', 'stasiun-tegowanu', -7.05300, 110.60270, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(279, 'STASIUN TELAWA', 'stasiun-telawa', -7.18575, 110.75191, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(280, 'STASIUN TUNTANG', 'stasiun-tuntang', -7.26079, 110.45405, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(281, 'STASIUN UJUNGNEGORO', 'stasiun-ujungnegoro', -6.90860, 109.78920, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(282, 'STASIUN WADU', 'stasiun-wadu', -7.19630, 111.50050, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(283, 'STASIUN WELERI', 'stasiun-weleri', -6.97106, 110.07083, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(284, 'STASIUN WOJO', 'stasiun-wojo', -7.86189, 110.04058, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(285, 'STASIUN WONOGIRI', 'stasiun-wonogiri', -7.97759, 110.93172, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(286, 'STASIUN WONOSARI', 'stasiun-wonosari', -7.69730, 109.70140, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(287, 'STASIUN ARGOPURO', 'stasiun-argopuro', -8.18349, 114.36920, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(288, 'STASIUN ARJASA', 'stasiun-arjasa', -8.12940, 113.74280, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(289, 'STASIUN BABADAN', 'stasiun-babadan', -7.58670, 111.58950, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(290, 'STASIUN BABAT', 'stasiun-babat', -7.10603, 112.16925, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(291, 'STASIUN BAGOR', 'stasiun-bagor', -7.57190, 111.85320, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(292, 'STASIUN BANGIL', 'stasiun-bangil', -7.59900, 112.77820, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(293, 'STASIUN BANGSALSARI', 'stasiun-bangsalsari', -8.20290, 113.53330, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(294, 'STASIUN MAGETAN', 'stasiun-magetan', -7.56258, 111.45168, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(295, 'STASIUN BARON', 'stasiun-baron', -7.60288, 112.03907, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(296, 'STASIUN BAYEMAN', 'stasiun-bayeman', -7.73450, 113.11890, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(297, 'STASIUN BENOWO', 'stasiun-benowo', -7.23396, 112.61537, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(298, 'STASIUN BENTENG', 'stasiun-benteng', -7.22131, 112.74374, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(299, 'STASIUN BLIMBING (MALANG)', 'stasiun-blimbing-malang', -7.93994, 112.64486, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(300, 'STASIUN BLITAR', 'stasiun-blitar', -8.10130, 112.16270, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(301, 'STASIUN BOHARAN', 'stasiun-boharan', -7.38777, 112.61962, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(302, 'STASIUN BOJONEGORO', 'stasiun-bojonegoro', -7.16440, 111.88670, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(303, 'STASIUN BOWERNO', 'stasiun-bowerno', -7.13119, 112.09988, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(304, 'STASIUN CARUBAN', 'stasiun-caruban', -7.55120, 111.65600, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(305, 'STASIUN CERME', 'stasiun-cerme', -7.22426, 112.57079, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(306, 'STASIUN CURAHMALANG', 'stasiun-curahmalang', -7.50690, 112.37040, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(307, 'STASIUN DUDUK', 'stasiun-duduk', -7.15482, 112.52071, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(308, 'STASIUN GARAHAN', 'stasiun-garahan', -8.22496, 113.89568, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(309, 'STASIUN GARUM', 'stasiun-garum', -8.07350, 112.21690, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(310, 'STASIUN GEDANGAN (SIDOARJO)', 'stasiun-gedangan-sidoarjo', -7.38900, 112.72859, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(311, 'STASIUN GEMBONG', 'stasiun-gembong', -7.10240, 112.22230, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(312, 'STASIUN GENDING', 'stasiun-gending', -7.10240, 112.22230, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(313, 'STASIUN GENENG', 'stasiun-geneng', -7.49780, 111.41870, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(314, 'STASIUN GLENMORE', 'stasiun-glenmore', -8.29940, 114.04960, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(315, 'STASIUN GRATI', 'stasiun-grati', -7.71740, 113.01210, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(316, 'STASIUN INDRO', 'stasiun-indro', -7.17700, 112.66450, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(317, 'STASIUN JATIROTO', 'stasiun-jatiroto', -8.12321, 113.36413, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(318, 'STASIUN JEMBER', 'stasiun-jember', -8.16475, 113.70360, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(319, 'STASIUN JOMBANG', 'stasiun-jombang', -7.55809, 112.23365, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(320, 'STASIUN KALIBARU', 'stasiun-kalibaru', -8.28880, 113.98440, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(321, 'STASIUN KALIMAS', 'stasiun-kalimas', -7.22104, 112.73463, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(322, 'STASIUN KALISAT', 'stasiun-kalisat', -8.12690, 113.81250, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(323, 'STASIUN KALISETAIL', 'stasiun-kalisetail', -8.30280, 114.13980, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(324, 'STASIUN KALITIDU', 'stasiun-kalitidu', -7.13180, 111.76740, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(325, 'STASIUN KANDANGAN', 'stasiun-kandangan', -7.75367, 112.28173, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(326, 'STASIUN KAPAS', 'stasiun-kapas', -7.19930, 111.93320, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(327, 'STASIUN BANYUWANGI KOTA', 'stasiun-banyuwangi-kota', -8.22290, 114.34080, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(328, 'STASIUN KEDINDING', 'stasiun-kedinding', -7.43690, 112.55270, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(329, 'STASIUN KEDIRI', 'stasiun-kediri', -7.81729, 112.01551, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(330, 'STASIUN KEDUNGGALAR', 'stasiun-kedunggalar', -7.41822, 111.30706, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(331, 'STASIUN KEPANJEN', 'stasiun-kepanjen', -8.13200, 112.57320, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(332, 'STASIUN KERTOSONO', 'stasiun-kertosono', -7.59236, 112.10080, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(333, 'STASIUN KESAMBEN', 'stasiun-kesamben', -8.14910, 112.36330, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(334, 'STASIUN KETAPANG (BANYUWANGI)', 'stasiun-ketapang-banyuwangi', -8.14123, 114.39701, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(335, 'STASIUN KOTOK', 'stasiun-kotok', -8.12620, 113.77900, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(336, 'STASIUN KRAS', 'stasiun-kras', -7.94880, 111.96020, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(337, 'STASIUN KRIAN', 'stasiun-krian', -7.41010, 112.58620, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(338, 'STASIUN LAMONGAN', 'stasiun-lamongan', -7.11240, 112.42030, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(339, 'STASIUN LAWANG', 'stasiun-lawang', -7.83633, 112.69782, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(340, 'STASIUN LECES', 'stasiun-leces', -7.84780, 113.22910, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(341, 'STASIUN LEDOKOMBO', 'stasiun-ledokombo', -8.14069, 113.87565, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(342, 'STASIUN KLAKAH', 'stasiun-klakah', -7.99420, 113.24940, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(343, 'STASIUN MADIUN', 'stasiun-madiun', -7.61876, 111.52484, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(344, 'STASIUN MALANG', 'stasiun-malang', -7.97750, 112.63732, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(345, 'STASIUN MALANG KOTALAMA', 'stasiun-malang-kotalama', -7.99484, 112.63251, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(346, 'STASIUN MALASAN', 'stasiun-malasan', -7.88610, 113.26050, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(347, 'STASIUN MANGLI', 'stasiun-mangli', -8.19090, 113.64820, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(348, 'STASIUN MESIGIT', 'stasiun-mesigit', -7.24281, 112.72846, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(349, 'STASIUN MINGGIRAN', 'stasiun-minggiran', -7.72810, 112.05750, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(350, 'STASIUN MOJOKERTO', 'stasiun-mojokerto', -7.47245, 112.43499, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(351, 'STASIUN MRAWAN', 'stasiun-mrawan', -8.27230, 113.92680, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(352, 'STASIUN NGADILUWIH', 'stasiun-ngadiluwih', -7.89850, 111.98790, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(353, 'STASIUN NGANJUK', 'stasiun-nganjuk', -7.60005, 111.90287, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(354, 'STASIUN NGEBRUK', 'stasiun-ngebruk', -8.15190, 112.51650, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(355, 'STASIUN NGUJANG', 'stasiun-ngujang', -8.01050, 111.92690, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(356, 'STASIUN NGUNUT', 'stasiun-ngunut', -8.10280, 112.01210, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(357, 'STASIUN PAKISAJI', 'stasiun-pakisaji', -8.06940, 112.59860, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(358, 'STASIUN PAPAR', 'stasiun-papar', -7.69760, 112.07950, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(359, 'STASIUN NGAWI', 'stasiun-ngawi', -7.44228, 111.38694, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(360, 'STASIUN PASURUAN', 'stasiun-pasuruan', -7.63770, 112.91010, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(361, 'STASIUN PETERONGAN', 'stasiun-peterongan', -7.54180, 112.27920, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(362, 'STASIUN POGAJIH', 'stasiun-pogajih', -7.54180, 112.27920, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(363, 'STASIUN PORONG', 'stasiun-porong', -7.53840, 112.70180, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(364, 'STASIUN PROBOLINGGO', 'stasiun-probolinggo', -7.74270, 113.21600, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(365, 'STASIUN PUCUK', 'stasiun-pucuk', -7.09760, 112.26970, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(366, 'STASIUN PURWOASRI', 'stasiun-purwoasri', -7.64740, 112.10010, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(367, 'STASIUN RAMBIPUJI', 'stasiun-rambipuji', -8.20320, 113.61440, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(368, 'STASIUN RANDUAGUNG', 'stasiun-randuagung', -8.07009, 113.30519, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(369, 'STASIUN RANUYOSO', 'stasiun-ranuyoso', -7.95430, 113.23690, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(370, 'STASIUN REJOSO', 'stasiun-rejoso', -7.69130, 112.96790, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(371, 'STASIUN REJOTANGAN', 'stasiun-rejotangan', -8.12100, 112.08120, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(372, 'STASIUN ROGOJAMPI', 'stasiun-rogojampi', -8.30470, 114.29250, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(373, 'STASIUN SARADAN', 'stasiun-saradan', -7.54750, 111.73210, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(374, 'STASIUN SEMBUNG (JOMBANG)', 'stasiun-sembung-jombang', -7.58260, 112.16710, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(375, 'STASIUN SEMPOLAN', 'stasiun-sempolan', -8.19252, 113.89634, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(376, 'STASIUN SENGON', 'stasiun-sengon', -7.75445, 112.72436, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(377, 'STASIUN SEPANJANG', 'stasiun-sepanjang', -7.34720, 112.69777, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(378, 'STASIUN SIDOARJO', 'stasiun-sidoarjo', -7.45680, 112.71290, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(379, 'STASIUN SIDOTOPO', 'stasiun-sidotopo', -7.23502, 112.75665, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(380, 'STASIUN SINGOJURUH', 'stasiun-singojuruh', -8.30658, 114.24049, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(381, 'STASIUN SINGOSARI', 'stasiun-singosari', -7.89690, 112.66610, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(382, 'STASIUN SROYO', 'stasiun-sroyo', -7.53470, 110.90120, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(383, 'STASIUN SUKOMORO', 'stasiun-sukomoro', -7.60268, 111.94243, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(384, 'STASIUN SUKOREJO', 'stasiun-sukorejo', -7.71980, 112.72316, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(385, 'STASIUN SUMBEREJO', 'stasiun-sumberejo', -7.17773, 112.00158, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(386, 'STASIUN SUMBERGEMPOL', 'stasiun-sumbergempol', -8.08243, 111.94455, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(387, 'STASIUN SUMBERPUCUNG', 'stasiun-sumberpucung', -8.15840, 112.47860, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(388, 'STASIUN SUMBERWADUNG', 'stasiun-sumberwadung', -8.30180, 114.10540, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(389, 'STASIUN SUMOBITO', 'stasiun-sumobito', -7.51890, 112.34090, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(390, 'STASIUN SURABAYA GUBENG', 'stasiun-surabaya-gubeng', -7.26528, 112.75213, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(391, 'STASIUN SURABAYA KOTA', 'stasiun-surabaya-kota', -7.24307, 112.74281, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(392, 'STASIUN SURABAYA PASARTURI', 'stasiun-surabaya-pasarturi', -7.24810, 112.73073, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(393, 'STASIUN SURABAYAN', 'stasiun-surabayan', -7.09974, 112.35543, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(394, 'STASIUN SUSUHAN', 'stasiun-susuhan', -7.77130, 112.02610, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(395, 'STASIUN TALUN', 'stasiun-talun', -8.09163, 112.28850, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(396, 'STASIUN TANDES', 'stasiun-tandes', -7.25891, 112.68713, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(397, 'STASIUN TANGGUL', 'stasiun-tanggul', -8.16280, 113.44840, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(398, 'STASIUN TANGGULANGIN', 'stasiun-tanggulangin', -7.50690, 112.70800, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(399, 'STASIUN TARIK', 'stasiun-tarik', -7.45940, 112.51890, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(400, 'STASIUN TEMUGURUH', 'stasiun-temuguruh', -8.30948, 114.20217, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(401, 'STASIUN TOBO', 'stasiun-tobo', -7.17250, 111.65510, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(402, 'STASIUN TULANGAN', 'stasiun-tulangan', -7.46550, 112.65110, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(403, 'STASIUN TULUNGAGUNG', 'stasiun-tulungagung', -8.06293, 111.90460, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(404, 'STASIUN WALIKUKUN', 'stasiun-walikukun', -7.39886, 111.22467, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(405, 'STASIUN WARU', 'stasiun-waru', -7.35268, 112.72939, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(406, 'STASIUN WLINGI', 'stasiun-wlingi', -8.08841, 112.31985, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(407, 'STASIUN WONOKERTO', 'stasiun-wonokerto', -7.66363, 112.75470, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(408, 'STASIUN WONOKROMO', 'stasiun-wonokromo', -7.30213, 112.73899, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(409, 'STASIUN LEMPUYANGAN', 'stasiun-lempuyangan', -7.79019, 110.37552, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(410, 'STASIUN MAGUWO', 'stasiun-maguwo', -7.78506, 110.43686, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(411, 'STASIUN PATUKAN', 'stasiun-patukan', -7.79068, 110.32543, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(412, 'STASIUN REWULU', 'stasiun-rewulu', -7.79716, 110.28115, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(413, 'STASIUN SENTOLO', 'stasiun-sentolo', -7.83295, 110.22018, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(414, 'STASIUN WATES', 'stasiun-wates', -7.85952, 110.15786, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(415, 'STASIUN YOGYAKARTA', 'stasiun-yogyakarta', -7.78922, 110.36352, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(416, 'STASIUN BATUCEPER', 'stasiun-batuceper', -6.17221, 106.66540, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(417, 'STASIUN CATANG', 'stasiun-catang', -6.26793, 106.26727, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(418, 'STASIUN CICAYUR', 'stasiun-cicayur', -6.32957, 106.61923, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(419, 'STASIUN CIGADING', 'stasiun-cigading', -6.02695, 105.96788, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(420, 'STASIUN CIKEUSAL', 'stasiun-cikeusal', -6.21710, 106.24492, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(421, 'STASIUN CIKOYA', 'stasiun-cikoya', -6.33571, 106.41186, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(422, 'STASIUN CILEGON', 'stasiun-cilegon', -6.01970, 106.05310, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(423, 'STASIUN CILEJIT', 'stasiun-cilejit', -6.35426, 106.50963, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(424, 'STASIUN CISAUK', 'stasiun-cisauk', -6.32448, 106.64162, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(425, 'STASIUN CITERAS', 'stasiun-citeras', -6.33490, 106.33270, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(426, 'STASIUN DARU', 'stasiun-daru', -6.33795, 106.49257, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(427, 'STASIUN JAMBU BARU', 'stasiun-jambu-baru', -6.30231, 106.26078, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(428, 'STASIUN JURANGMANGU', 'stasiun-jurangmangu', -6.28859, 106.72914, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(429, 'STASIUN KARANGANTU', 'stasiun-karangantu', -6.03920, 106.16200, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(430, 'STASIUN KRENCENG', 'stasiun-krenceng', -6.00959, 106.02887, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(431, 'STASIUN MAJA', 'stasiun-maja', -6.33233, 106.39609, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(432, 'STASIUN MERAK', 'stasiun-merak', -5.93020, 105.99680, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(433, 'STASIUN PONDOK RANJI', 'stasiun-pondok-ranji', -6.27650, 106.74500, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(434, 'STASIUN PORIS', 'stasiun-poris', -6.16984, 106.68032, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(435, 'STASIUN RANGKASBITUNG', 'stasiun-rangkasbitung', -6.35273, 106.25237, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(436, 'STASIUN RAWA BUNTU', 'stasiun-rawa-buntu', -6.31490, 106.67620, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(437, 'STASIUN SERANG', 'stasiun-serang', -6.11221, 106.15865, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(438, 'STASIUN SERPONG', 'stasiun-serpong', -6.32017, 106.66562, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(439, 'STASIUN BANDARA SOEKARNO-HATTA', 'stasiun-bandara-soekarno-hatta', -6.12741, 106.65227, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(440, 'STASIUN SUDIMARA', 'stasiun-sudimara', -6.29649, 106.71328, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(441, 'STASIUN TANAH TINGGI', 'stasiun-tanah-tinggi', -6.17531, 106.64647, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(442, 'STASIUN TANGERANG', 'stasiun-tangerang', -6.17698, 106.63274, '2021-04-08 01:28:44', '2021-04-08 01:28:44');
INSERT INTO `stations` (`id`, `name`, `slug`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(443, 'STASIUN TIGARAKSA', 'stasiun-tigaraksa', -6.32857, 106.43465, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(444, 'STASIUN TONJONG BARU', 'stasiun-tonjong-baru', -6.03123, 106.12141, '2021-04-08 01:28:44', '2021-04-08 01:28:44'),
(445, 'STASIUN WALANTAKA', 'stasiun-walantaka', -6.15541, 106.21869, '2021-04-08 01:28:44', '2021-04-08 01:28:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'superadmin@mail.com', 'superadmin', NULL, '$2y$10$MnorE7Q.muWU5GxgdVGWnOKlVxijMlj9Sbehyy6oB3P8QMOeRydoi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL),
(2, 'admin@mail.com', 'admin', NULL, '$2y$10$PWRmpLL3Sie6DepQEro8b.I/diABGd5Q80p8Dpvjm30WinEkgGitG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-23 10:53:51', '2021-06-23 10:53:51', NULL),
(3, 'kai@mail.com', 'KAI', NULL, '$2y$10$YMGrObphdKOsPL1a/G7GCec4dKn7z7DUE4WaKusxGR6Z3djsg.tLS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-23 11:08:56', '2021-06-23 11:08:56', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_user`
--
ALTER TABLE `admin_user`
  ADD KEY `admin_user_user_id_foreign` (`user_id`),
  ADD KEY `admin_user_id` (`admin`,`user_id`);

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_date_id_foreign` (`date_id`),
  ADD KEY `data_position_id_foreign` (`position_id`),
  ADD KEY `user_id_date_id_position_id` (`user_id`,`date_id`,`position_id`);

--
-- Indeks untuk tabel `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dates`
--
ALTER TABLE `dates`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `stations`
--
ALTER TABLE `stations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=446;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin_user`
--
ALTER TABLE `admin_user`
  ADD CONSTRAINT `admin_user_admin_foreign` FOREIGN KEY (`admin`) REFERENCES `users` (`username`) ON DELETE CASCADE,
  ADD CONSTRAINT `admin_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_date_id_foreign` FOREIGN KEY (`date_id`) REFERENCES `dates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dates`
--
ALTER TABLE `dates`
  ADD CONSTRAINT `dates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
