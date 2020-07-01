-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2020 pada 19.33
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jendelawisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` int(11) NOT NULL,
  `usia` int(11) NOT NULL,
  `no_ktp` int(11) NOT NULL,
  `tgl_trip` date NOT NULL,
  `pilihan_trip` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_peserta_lain` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_org` int(11) NOT NULL,
  `req_jemput` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `req_antar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bookings`
--

INSERT INTO `bookings` (`id`, `nama`, `email`, `no_telp`, `usia`, `no_ktp`, `tgl_trip`, `pilihan_trip`, `nama_peserta_lain`, `jml_org`, `req_jemput`, `req_antar`, `pesan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Robet', 'rama@gmail.com', 1020212, 121, 129129921, '2020-05-06', 'adwawd', 'awdawd', 12, 'awdwad', 'awdawd', 'wadad', '2020-05-07 15:02:34', NULL, '2020-05-07 15:02:34'),
(2, 'ailwjdl', 'rafiqori@gmail.com', 123, 123, 91919, '2020-12-31', '1', 'awdwa', 1, 'awdwad', 'awdwad', 'awdwad', '2020-05-07 15:02:58', '2020-05-07 08:19:14', '2020-05-07 15:02:58'),
(3, 'adwaild', 'raaaa@gmail.com', 12312, 123, 12312, '2019-12-01', 'One Day Tour', '1231adwd', 3, 'awdawd', 'dawd', 'dawdd', '2020-05-07 15:03:05', '2020-05-07 08:21:19', '2020-05-07 15:03:05'),
(4, 'tess', 'tess@gmail.com', 1231, 21, 1231, '2020-01-01', 'One Day Tour', '123awd', 2, 'awdwd', 'awdwad', 'awda', '2020-05-07 14:58:25', '2020-05-07 14:58:19', '2020-05-07 14:58:25'),
(5, 'robet', 'ram@gmail.com', 213123, 12, 12312, '2020-12-30', 'One Day Tour', 'awdwad', 12, 'wadawdawd', 'awdwad', 'dawdawd', '2020-07-01 08:42:50', '2020-05-07 15:03:59', '2020-07-01 08:42:50'),
(6, 'awdawdawd', 'awdawd@gmail.com', 23123213, 1213, 123123, '2022-03-03', 'One Day Tour', 'awdwad', 12, 'awdawd', 'dwawdawd', 'dawdwa', '2020-05-07 20:17:31', '2020-05-07 15:04:30', '2020-05-07 20:17:31'),
(7, 'tes', 'ramadhan@gmail.com', 123123, 1212, 1212, '2021-01-01', 'One Day Tour', 'awdiljawdil', 12, 'dawijdliawj', 'adilwjdilj', 'laiwjdilj', '2020-07-01 08:42:54', '2020-05-07 20:43:51', '2020-07-01 08:42:54'),
(8, 'wowo', 'woow@gmail.com', 123123, 12, 1212, '2020-12-02', 'One Day Tour', 'awlkdlkajwlidj', 1212, 'awijdliawjd', 'aliawjdlijawd', 'liadjwdlij', NULL, '2020-05-07 20:46:45', '2020-05-07 20:46:45'),
(9, 'tess', 'tsss@gmail.com', 123, 1231, 12321, '2020-06-01', 'One Day Tour', 'alwijdliawj', 12, 'dalijwdlij', 'aliwjdilawjd', 'awliwjdliawjd', NULL, '2020-05-07 20:47:30', '2020-05-07 20:47:30'),
(10, 'iwiw', 'iwi@gmail.com', 1231, 1231, 213123, '2020-06-01', 'Bromo Midnight', 'ilawjdlwaij', 21, 'alwijdlij', 'dlijawdlij', 'laiwjdliawj', '2020-05-09 04:11:11', '2020-05-07 22:02:03', '2020-05-09 04:11:11'),
(11, 'robet', 'rafi@gmail.com', 1029012, 21, 10920192, '2020-07-01', 'Ijen & Menjangan', 'waldiwja', 121, 'lwaijdilawjd', 'liwajdliawj', 'walijdlijad', NULL, '2020-07-01 08:44:13', '2020-07-01 08:44:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_packages_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(25, '2019_08_19_000000_create_failed_jobs_table', 1),
(26, '2020_05_02_130901_create_tour_packages_table', 1),
(27, '2020_05_02_132451_create_galleries_table', 1),
(28, '2020_05_02_132719_create_transactions_table', 1),
(29, '2020_05_02_133728_create_transaction_details_table', 1),
(30, '2020_05_03_032736_add_roles_field_to_users_table', 1),
(31, '2020_05_03_070312_add_username_field_to_users_table', 1),
(32, '2020_05_07_025952_create_bookings_tabel', 1),
(33, '2020_05_07_091749_create_bookings_table', 2),
(34, '2020_05_07_092747_create_bookings_table', 3),
(35, '2020_05_07_150535_create_packets_table', 4),
(36, '2020_05_07_150813_create_packets_table', 5),
(37, '2020_05_08_045708_create_packets_table', 6),
(38, '2020_05_09_033232_create_testimonials_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `packets`
--

CREATE TABLE `packets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `packets`
--

INSERT INTO `packets` (`id`, `title`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Br', '2020-05-07 21:59:04', '2020-05-07 21:59:02', '2020-05-07 21:59:04'),
(2, 'Bromo Midnight', NULL, '2020-05-07 21:59:12', '2020-05-07 21:59:12'),
(3, 'One Day Trip', NULL, '2020-05-08 02:37:45', '2020-05-08 02:37:45'),
(4, 'Menjangan & Tabuhan', NULL, '2020-05-08 02:38:02', '2020-05-08 02:38:02'),
(5, 'Trip Kawah Ijen', NULL, '2020-05-08 02:38:15', '2020-05-08 02:38:15'),
(6, 'Two Days Trip', NULL, '2020-05-08 02:38:26', '2020-05-08 02:38:26'),
(7, 'Bromo Inap', NULL, '2020-05-08 02:38:35', '2020-05-08 02:38:35'),
(8, 'Bromo & Kota Batu', NULL, '2020-05-08 02:38:47', '2020-05-08 02:38:47'),
(9, 'Kawah Ijen & Baluran', NULL, '2020-05-08 02:38:59', '2020-05-08 02:38:59'),
(10, 'Ijen & Menjangan', NULL, '2020-05-08 02:39:16', '2020-05-08 02:39:16'),
(11, 'Three Days Trip', NULL, '2020-05-08 02:39:28', '2020-05-08 02:39:28'),
(12, 'Bromo Ijen & Baluran', NULL, '2020-05-08 02:39:44', '2020-05-08 02:39:44'),
(13, 'Bromo & Malang Kota Batu', NULL, '2020-05-08 02:40:02', '2020-05-08 02:40:02'),
(14, 'Baluran Menjangan & Ijen', NULL, '2020-05-08 02:40:15', '2020-05-08 02:40:15'),
(15, 'Request Trip', NULL, '2020-05-08 02:40:24', '2020-05-08 02:40:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nick` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimoni` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonials`
--

INSERT INTO `testimonials` (`id`, `nick`, `testimoni`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Robet', 'sungguh wow', NULL, '2020-05-08 20:46:54', '2020-05-08 20:46:54'),
(2, 'Amril', 'Uwuuu deh', NULL, '2020-05-08 21:51:42', '2020-05-08 21:51:42'),
(3, 'Erwan', 'Hohhooho', '2020-05-09 04:11:32', '2020-05-09 04:11:30', '2020-05-09 04:11:32'),
(4, 'Robet', 'Uwuuu', NULL, '2020-07-01 08:58:42', '2020-07-01 08:58:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tour_packages`
--

CREATE TABLE `tour_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `detailtrip` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pricetour` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facilities` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rundown` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tour_packages`
--

INSERT INTO `tour_packages` (`id`, `title`, `slug`, `about`, `detailtrip`, `pricetour`, `facilities`, `rundown`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'One Day Tour', '', '', '', '', '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_packages_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `additional_visa` int(11) NOT NULL,
  `transaction_total` int(11) NOT NULL,
  `transaction_status` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USERS',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `username`) VALUES
(1, 'Ramadhan QA', 'rama@gmail.com', NULL, '$2y$10$.aZlcTpurqh.HiP7hKk6t.meH0.Vw5t9guQX5qIdVIn39bz2H8lM.', 'w5xkSWRrNe92PDXbTlO8fCVLjg3m3Cb2rJV45gBDFCcCp9QqFYY27cJhs8jl', '2020-05-06 20:49:41', '2020-07-01 08:40:49', 'ADMIN', 'ramadhan'),
(2, 'amril', 'amril@gmail.com', '2020-07-01 08:49:21', '$2y$10$ooYp3R6L3Cg9URTsPI3mtOdZHXs9lzLDWQU7atfyVdPF3Znlkz3Nq', NULL, '2020-07-01 08:49:10', '2020-07-01 08:49:21', 'ADMIN', 'amril');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `packets`
--
ALTER TABLE `packets`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tour_packages`
--
ALTER TABLE `tour_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `packets`
--
ALTER TABLE `packets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tour_packages`
--
ALTER TABLE `tour_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
