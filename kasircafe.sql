-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2022 pada 09.45
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasircafe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `subject_id`, `causer_type`, `causer_id`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'default', 'Menambahkan Produk', NULL, NULL, 'App\\Models\\User', 2, '[]', '2022-03-27 05:50:12', '2022-03-27 05:50:12'),
(2, 'default', 'Mengedit Produk', NULL, NULL, 'App\\Models\\User', 2, '[]', '2022-03-27 05:51:24', '2022-03-27 05:51:24'),
(3, 'default', 'Melakukan Order', NULL, NULL, 'App\\Models\\User', 4, '[]', '2022-03-27 05:54:14', '2022-03-27 05:54:14'),
(4, 'default', 'Mengedit Akun', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-03-28 09:27:58', '2022-03-28 09:27:58'),
(5, 'default', 'Melakukan Order', NULL, NULL, 'App\\Models\\User', 4, '[]', '2022-03-29 01:04:31', '2022-03-29 01:04:31'),
(6, 'default', 'Melakukan Order', NULL, NULL, 'App\\Models\\User', 4, '[]', '2022-03-29 02:01:09', '2022-03-29 02:01:09'),
(7, 'default', 'Melakukan Order', NULL, NULL, 'App\\Models\\User', 3, '[]', '2022-03-29 02:06:28', '2022-03-29 02:06:28'),
(8, 'default', 'Menambahkan Produk', NULL, NULL, 'App\\Models\\User', 2, '[]', '2022-03-29 03:10:44', '2022-03-29 03:10:44'),
(9, 'default', 'Menambahkan Produk', NULL, NULL, 'App\\Models\\User', 2, '[]', '2022-03-29 03:12:15', '2022-03-29 03:12:15'),
(10, 'default', 'Menambahkan Produk', NULL, NULL, 'App\\Models\\User', 2, '[]', '2022-03-29 03:13:24', '2022-03-29 03:13:24'),
(11, 'default', 'Menambahkan Produk', NULL, NULL, 'App\\Models\\User', 2, '[]', '2022-03-29 03:15:13', '2022-03-29 03:15:13'),
(12, 'default', 'Menambahkan Produk', NULL, NULL, 'App\\Models\\User', 2, '[]', '2022-03-29 03:18:12', '2022-03-29 03:18:12'),
(13, 'default', 'Menambahkan Produk', NULL, NULL, 'App\\Models\\User', 2, '[]', '2022-03-29 03:19:54', '2022-03-29 03:19:54'),
(14, 'default', 'Menambahkan Produk', NULL, NULL, 'App\\Models\\User', 2, '[]', '2022-03-29 03:21:30', '2022-03-29 03:21:30'),
(15, 'default', 'Mengedit Produk', NULL, NULL, 'App\\Models\\User', 2, '[]', '2022-03-29 03:22:45', '2022-03-29 03:22:45'),
(16, 'default', 'Menambahkan Produk', NULL, NULL, 'App\\Models\\User', 2, '[]', '2022-03-29 03:24:05', '2022-03-29 03:24:05'),
(17, 'default', 'Menambahkan Produk', NULL, NULL, 'App\\Models\\User', 2, '[]', '2022-03-29 03:25:18', '2022-03-29 03:25:18'),
(18, 'default', 'Menambahkan Produk', NULL, NULL, 'App\\Models\\User', 2, '[]', '2022-03-29 03:26:38', '2022-03-29 03:26:38'),
(19, 'default', 'Melakukan Order', NULL, NULL, 'App\\Models\\User', 3, '[]', '2022-03-29 03:32:29', '2022-03-29 03:32:29'),
(20, 'default', 'Melakukan Order', NULL, NULL, 'App\\Models\\User', 3, '[]', '2022-03-29 03:34:58', '2022-03-29 03:34:58'),
(21, 'default', 'Menambahkan Akun', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-03-29 03:37:29', '2022-03-29 03:37:29'),
(22, 'default', 'Melakukan Order', NULL, NULL, 'App\\Models\\User', 5, '[]', '2022-03-29 03:39:54', '2022-03-29 03:39:54'),
(23, 'default', 'Melakukan Order', NULL, NULL, 'App\\Models\\User', 5, '[]', '2022-03-29 03:41:13', '2022-03-29 03:41:13'),
(24, 'default', 'Melakukan Order', NULL, NULL, 'App\\Models\\User', 4, '[]', '2022-03-29 06:44:32', '2022-03-29 06:44:32'),
(25, 'default', 'Melakukan Order', NULL, NULL, 'App\\Models\\User', 4, '[]', '2022-03-29 06:55:03', '2022-03-29 06:55:03'),
(26, 'default', 'Melakukan Order', NULL, NULL, 'App\\Models\\User', 4, '[]', '2022-03-29 06:58:45', '2022-03-29 06:58:45'),
(27, 'default', 'Melakukan Order', NULL, NULL, 'App\\Models\\User', 4, '[]', '2022-03-29 07:10:54', '2022-03-29 07:10:54'),
(28, 'default', 'Menambahkan Akun', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-03-29 19:34:37', '2022-03-29 19:34:37'),
(29, 'default', 'Melakukan Order', NULL, NULL, 'App\\Models\\User', 4, '[]', '2022-03-29 19:40:28', '2022-03-29 19:40:28'),
(30, 'default', 'Melakukan Order', NULL, NULL, 'App\\Models\\User', 4, '[]', '2022-03-29 21:45:13', '2022-03-29 21:45:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `do_transactions`
--

CREATE TABLE `do_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_26_170210_create_products_table', 1),
(6, '2022_02_26_170253_create_customers_table', 1),
(7, '2022_03_10_114214_create_settings_table', 1),
(8, '2022_03_10_114507_create_user_carts_table', 1),
(9, '2022_03_11_024729_create_orders_table', 1),
(10, '2022_03_11_024803_create_order_items_table', 1),
(11, '2022_03_11_024820_create_payments_table', 1),
(12, '2022_03_22_074516_create_do_transactions_table', 1),
(13, '2022_03_22_074811_create_invoices_table', 1),
(14, '2022_03_22_080914_transaksi_detail', 1),
(15, '2022_03_22_081030_transaksi_header', 1),
(16, '2022_03_22_115326_create_activity_log_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `barcode`, `price`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'kopi', 'kopi', 'images (55).jpeg', '646', '5000.00', 8, 1, '2022-03-27 05:50:12', '2022-03-29 19:39:54'),
(2, 'americano', 'hot coffe', 'images (54).jpeg', '3547', '40000.00', 12, 1, '2022-03-29 03:10:43', '2022-03-29 22:24:38'),
(3, 'Moccacino', 'ice coffee', 'images (56).jpeg', '6463', '25000.00', 10, 0, '2022-03-29 03:12:14', '2022-03-29 22:24:56'),
(4, 'Vanilla Latte', 'ice coffee', 'A124AF90-FAB0-4EFB-B25F-536F4F52AC0D.jpg', '8790', '35000.00', 12, 1, '2022-03-29 03:13:24', '2022-03-29 22:12:18'),
(5, 'Cappucino', 'ice coffee', 'images (52).jpeg', '9757', '25000.00', 10, 1, '2022-03-29 03:15:13', '2022-03-29 03:31:50'),
(6, 'Hazelnut Latte', 'ice coffee', 'images (61).jpeg', '2435', '35000.00', 18, 1, '2022-03-29 03:18:11', '2022-03-29 03:18:12'),
(7, 'caramel Latte', 'ice coffee', 'IMG_20220319_213154.jpg', '2343', '25000.00', 12, 1, '2022-03-29 03:19:54', '2022-03-29 06:58:32'),
(8, 'Caramel Macchiato', 'ice cooffee', 'images (53).jpeg', '2435', '25000.00', 8, 1, '2022-03-29 03:21:30', '2022-03-29 07:02:55'),
(9, 'Expresso Brownies', 'dessert', 'IMG_20220319_203137.jpg', '2343', '35000.00', 18, 1, '2022-03-29 03:24:05', '2022-03-29 06:54:49'),
(10, 'Butter Croissant', 'dessert', 'images (58).jpeg', '9080', '25000.00', 10, 1, '2022-03-29 03:25:18', '2022-03-29 03:25:18'),
(11, 'cinnamon roll', 'dessert', 'images (57).jpeg', '5454', '25000.00', 8, 1, '2022-03-29 03:26:38', '2022-03-29 03:40:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_details`
--

CREATE TABLE `transaksi_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaksi_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `harga` double(8,2) NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subTotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi_details`
--

INSERT INTO `transaksi_details` (`id`, `transaksi_id`, `product_id`, `user_id`, `harga`, `qty`, `subTotal`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 4, 5000.00, '1', '5000', '2022-03-27 05:54:14', '2022-03-27 05:54:14'),
(3, '3', '1', 4, 5000.00, '1', '5000', '2022-03-29 02:01:09', '2022-03-29 02:01:09'),
(4, '4', '1', 3, 5000.00, '1', '5000', '2022-03-29 02:06:28', '2022-03-29 02:06:28'),
(5, '5', '5', 3, 75000.00, '3', '75000', '2022-03-29 03:32:29', '2022-03-29 03:32:29'),
(6, '6', '11', 3, 100000.00, '4', '100000', '2022-03-29 03:34:57', '2022-03-29 03:34:57'),
(7, '7', '8', 5, 125000.00, '5', '125000', '2022-03-29 03:39:54', '2022-03-29 03:39:54'),
(8, '8', '11', 5, 25000.00, '1', '25000', '2022-03-29 03:41:13', '2022-03-29 03:41:13'),
(9, '8', '7', 5, 25000.00, '1', '25000', '2022-03-29 03:41:13', '2022-03-29 03:41:13'),
(10, '9', '8', 4, 25000.00, '1', '25000', '2022-03-29 06:44:32', '2022-03-29 06:44:32'),
(11, '10', '7', 4, 25000.00, '1', '25000', '2022-03-29 06:55:03', '2022-03-29 06:55:03'),
(12, '11', '7', 4, 25000.00, '1', '25000', '2022-03-29 06:58:45', '2022-03-29 06:58:45'),
(13, '12', '8', 4, 25000.00, '1', '25000', '2022-03-29 07:10:54', '2022-03-29 07:10:54'),
(14, '13', '1', 4, 5000.00, '1', '5000', '2022-03-29 19:40:28', '2022-03-29 19:40:28'),
(15, '14', '2', 4, 40000.00, '1', '40000', '2022-03-29 21:45:12', '2022-03-29 21:45:12'),
(16, '14', '2', 4, 40000.00, '1', '40000', '2022-03-29 21:45:12', '2022-03-29 21:45:12'),
(17, '14', '2', 4, 40000.00, '1', '40000', '2022-03-29 21:45:12', '2022-03-29 21:45:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_headers`
--

CREATE TABLE `transaksi_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dibayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` double(8,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi_headers`
--

INSERT INTO `transaksi_headers` (`id`, `user_id`, `tipe_pembayaran`, `dibayar`, `jumlah`, `status`, `qty`, `product_id`, `username`, `created_at`, `updated_at`) VALUES
(1, '4', 'tunai', '10000', 5500.00, 'proses', '1', '1', 'Kasir', '2022-03-27 05:54:14', '2022-03-27 05:54:14'),
(3, '4', 'tunai', '6000', 5500.00, 'proses', '1', '1', 'Kasir', '2022-03-29 02:01:08', '2022-03-29 02:01:08'),
(4, '3', 'tunai', '10000', 5500.00, 'proses', '1', '1', 'Upin', '2022-03-29 02:06:27', '2022-03-29 02:06:27'),
(5, '3', 'tunai', '100000', 82500.00, 'proses', '3', '5', 'Upin', '2022-03-29 03:32:28', '2022-03-29 03:32:28'),
(6, '3', 'tunai', '120000', 110000.00, 'proses', '4', '11', 'Upin', '2022-03-29 03:34:57', '2022-03-29 03:34:57'),
(7, '5', 'tunai', '200000', 137500.00, 'proses', '5', '8', 'susanti', '2022-03-29 03:39:54', '2022-03-29 03:39:54'),
(8, '5', 'tunai', '100000', 55000.00, 'proses', '1', '7', 'susanti', '2022-03-29 03:41:13', '2022-03-29 03:41:13'),
(12, '4', 'tunai', '39000', 27500.00, 'proses', '1', '8', 'Kasir', '2022-03-29 07:10:54', '2022-03-29 07:10:54'),
(13, '4', 'tunai', '10000', 5500.00, 'proses', '1', '1', 'Kasir', '2022-03-29 19:40:28', '2022-03-29 19:40:28'),
(14, '4', 'tunai', '200000', 132000.00, 'proses', '1', '2', 'Kasir', '2022-03-29 21:45:11', '2022-03-29 21:45:11');

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
  `level` enum('Admin','Manager','Kasir') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2022-03-27 05:47:18', '$2y$10$VtiC/mKea0jj1YrLUPyYx.N7Ck8DNdAOm1eOW86t3zlCjeCVa1KyW', 'Admin', NULL, '2022-03-27 05:47:19', '2022-03-27 05:47:19'),
(2, 'Manager', 'manager@gmail.com', '2022-03-27 05:47:18', '$2y$10$T0UEIBy8.SPcAKj18p.YIu8fjKOse.hnEkjJNwsZCMu68rLDHcNta', 'Manager', NULL, '2022-03-27 05:47:19', '2022-03-27 05:47:19'),
(3, 'Upin', 'upin@gmail.com', '2022-03-27 05:47:19', '$2y$10$pMlGD2yZ2eEuluDBgBLV5.5tUzRBzVDubgGtmXHqboXFCMjne4C46', 'Kasir', NULL, '2022-03-27 05:47:19', '2022-03-28 09:27:59'),
(4, 'Kasir', 'kasir@gmail.com', '2022-03-27 05:47:19', '$2y$10$.QY9t9c2gUIxmy45aBT4V.shCEvZzTfdmcnDYdn4cMryd/w3fUvpi', 'Kasir', NULL, '2022-03-27 05:47:19', '2022-03-27 05:47:19'),
(5, 'susanti', 'susanti@gmail.com', NULL, '$2y$10$lGy92FVzijQte4DByhlTseERD1WGoyAjwXn05ww/0hvqLP4yBt9o6', 'Kasir', NULL, '2022-03-29 03:37:29', '2022-03-29 03:37:29'),
(6, 'cika', 'cika@gmail.com', NULL, '$2y$10$d5lEYMulkEVHGwAi/zVjWexTzVI5L9WRhLIy3HUbV2QNrxWjtHDf6', 'Kasir', NULL, '2022-03-29 19:34:37', '2022-03-29 19:34:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_carts`
--

CREATE TABLE `user_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `subTotal` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `do_transactions`
--
ALTER TABLE `do_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_order_id_foreign` (`order_id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_details`
--
ALTER TABLE `transaksi_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_headers`
--
ALTER TABLE `transaksi_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_carts`
--
ALTER TABLE `user_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_carts_user_id_foreign` (`user_id`),
  ADD KEY `user_carts_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `do_transactions`
--
ALTER TABLE `do_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi_details`
--
ALTER TABLE `transaksi_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `transaksi_headers`
--
ALTER TABLE `transaksi_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_carts`
--
ALTER TABLE `user_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ketidakleluasaan untuk tabel `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_carts`
--
ALTER TABLE `user_carts`
  ADD CONSTRAINT `user_carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `user_carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
