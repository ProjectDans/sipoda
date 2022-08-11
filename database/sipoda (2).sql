-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Agu 2022 pada 21.39
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipoda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `name`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Aldi Rahmadi', 'Hadir', '2022-08-11 11:34:05', '2022-08-11 11:34:05'),
(2, 'Aldi Rahmadi', 'Hadir', '2022-08-11 11:35:53', '2022-08-11 11:35:53'),
(3, 'Daniel Celo Onibala', 'Hadir', '2022-08-11 11:39:48', '2022-08-11 11:39:48'),
(4, 'Aldi Rahmadi', 'Hadir', '2022-08-11 11:40:22', '2022-08-11 11:40:22'),
(5, 'Aldi Rahmadi', 'Hadir', '2022-08-11 11:43:03', '2022-08-11 11:43:03'),
(6, 'Daniel Celo Onibala', 'Tidak Hadir', '2022-08-11 11:43:41', '2022-08-11 11:43:41'),
(7, 'Daniel Celo Onibala', 'Hadir', '2022-08-11 11:45:12', '2022-08-11 11:45:12'),
(8, 'Nur Ikhsan', 'Hadir', '2022-08-11 11:47:17', '2022-08-11 11:47:17'),
(9, 'Daniel Celo Onibala', 'Hadir', '2022-08-11 12:29:49', '2022-08-11 12:29:49'),
(10, 'Daniel Celo Onibala', 'Tidak Hadir', '2022-08-11 12:35:35', '2022-08-11 12:35:35');

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
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Pengurus Sekretariat', '2022-08-08 08:53:17', '2022-08-08 08:53:17'),
(2, 'Office Boy', '2022-08-08 08:53:22', '2022-08-08 08:53:22'),
(3, 'Koordinasi Lapangan', '2022-08-08 08:53:33', '2022-08-08 08:53:33'),
(4, 'Administrasi Satu', '2022-08-08 08:53:40', '2022-08-08 08:53:40'),
(5, 'Administrasi Dua', '2022-08-08 08:53:47', '2022-08-08 08:53:53'),
(6, 'Bendahara', '2022-08-08 08:54:14', '2022-08-08 08:54:14'),
(7, 'Bendahara Dua', '2022-08-08 08:54:28', '2022-08-08 08:54:28'),
(8, 'Humas (Hubungan Masyarakat)', '2022-08-08 08:54:56', '2022-08-08 08:54:56'),
(9, 'Perlengkapan', '2022-08-08 08:55:22', '2022-08-08 08:55:22'),
(10, 'Bendahara Dua', '2022-08-10 11:09:26', '2022-08-10 11:09:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jabatan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nm_karyawan`, `nik_karyawan`, `no_tlp_karyawan`, `email_karyawan`, `created_at`, `updated_at`, `jabatan_id`) VALUES
(1, 'Laswi Nashiruddin', '32092156087000047', '082149673461', 'laswi@gmail.com', '2022-08-08 19:44:19', '2022-08-08 19:44:19', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(5, '2022_07_18_175746_data_pedagang', 1),
(6, '2022_07_18_201701_login', 1),
(7, '2022_07_19_000510_data_karyawan', 1),
(8, '2022_07_28_072242_data_wilayah', 1),
(9, '2022_08_04_163138_pegawai', 2),
(10, '2022_08_04_170222_jabatan', 2),
(11, '2022_08_05_061139_add_jabatan_id_to_karyawan', 2),
(12, '2022_08_08_161959_add_wilayah_to_wilayah', 3),
(13, '2022_08_08_163344_add_wilayah_id_to_pedagang', 4),
(14, '2022_08_11_054123_add_level_to_users', 5),
(15, '2022_08_11_182012_create_absensi_table', 6);

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
-- Struktur dari tabel `pedagang`
--

CREATE TABLE `pedagang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_pedagang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_pedagang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama_pedagang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp_pedagang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_pedagang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_nikah_pedagang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pedagang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_usaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alat_usaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wilayah_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pedagang`
--

INSERT INTO `pedagang` (`id`, `nm_pedagang`, `gender_pedagang`, `agama_pedagang`, `no_tlp_pedagang`, `nik_pedagang`, `status_nikah_pedagang`, `alamat_pedagang`, `nm_usaha`, `alat_usaha`, `created_at`, `updated_at`, `wilayah_id`) VALUES
(1, 'Heryanto Natsir', 'Laki-laki', 'Islam', '0530 6876 469', '3209214065000012', 'Menikah', 'Gg. Ciwastra No. 368, Sorong 61111, Banten', 'Jualan Aer Mateng', 'Panci dan Gerobak', '2022-08-08 09:36:35', '2022-08-08 09:36:35', 1),
(2, 'Cinthia Lailasari', 'Perempuan', 'Katolik', '0814 0258 087', '3209216049000042', 'Tidak Menikah', 'Ki. Daan No. 715, Bengkulu 78985, KepR', 'Jualan Seblak', 'Gerobak Sodor', '2022-08-08 09:38:46', '2022-08-08 09:38:46', 1),
(3, 'Halim Nugroho', 'Laki-laki', 'Islam', '0834 5344 4112', '3209215894000087', 'Tidak Menikah', 'Dk. Basket No. 631, Bandung 57368, SumSel', 'Jualan Stick Es Krim Bekas', 'Stik Es Krim Bekas', '2022-08-08 09:40:29', '2022-08-08 09:40:29', 3),
(4, 'Warji Halim', 'Laki-laki', 'Islam', '0879 5897 6399', '3206791088000021', 'Tidak Menikah', 'Dk. Gading No. 399, Tasikmalaya 93095, KalSel', 'Indomie Get, Warmindo', 'Gerobak, Kompor, Gas 3KG', '2022-08-08 09:42:20', '2022-08-08 09:42:20', 1),
(5, 'Anita Nuraini', 'Perempuan', 'Islam', '0882 0552 7092', '3209895123000012', 'Tidak Menikah', 'Ds. Imam No. 984, Sungai Penuh 75584, SulTra', 'Jagung Cup Bakar', 'Gerobak Sodor', '2022-08-08 09:44:30', '2022-08-08 09:44:30', 3),
(6, 'Indra Permadi', 'Laki-laki', 'Islam', '0978 1023 2317', '320921056000087', 'Tidak Menikah', 'Jln. Ikan No. 731, Tanjung Pinang 15960, SumSel', 'Jualan Gorengan', 'Gerobak Sodor', '2022-08-08 09:49:49', '2022-08-08 09:49:49', 1),
(7, 'Ahmad Reza Aprilio', 'Laki-laki', 'Islam', '084679134562', '3245679065000045', 'Tidak Menikah', 'Jl. Perum Perumnas, Kav. Paviliun No.30', 'Jual DVD Game PC', 'Meja dan Gerobak', '2022-08-10 11:16:18', '2022-08-10 11:16:18', 1),
(8, 'Jamil Waluyo', 'Laki-laki', 'Islam', '0559 3204 629', '3209216049000024', 'Menikah', 'Kpg. Suharso No. 719, Cilegon 96561, SulTeng', 'Jualan Baju dan Celana', 'Gerobak dan Stand Tenda', '2022-08-11 10:06:21', '2022-08-11 10:06:21', 4),
(9, 'Ian Prayoga', 'Laki-laki', 'Islam', '(+62) 673 2177 3086', '3209216049000078', 'Tidak Menikah', 'Ds. Bacang No. 923, Sawahlunto 55935, SulTra', 'Jualan Es Cendol', 'Gerobak Sepeda', '2022-08-11 12:26:21', '2022-08-11 12:26:21', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namapegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamatpegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggallahir` date NOT NULL,
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
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$sTsI5PBEl.bRfyZsfq5ggeENAumu3jzrivBcC9LfscXoG7kfpisyG', NULL, '2022-08-07 20:00:52', '2022-08-07 20:00:52', 'admin'),
(2, 'Daniel Celo Onibala', 'danielcelo05@gmail.com', NULL, '$2y$10$SLlo3lPgqEV2b.pNgNruR.sIBFqkk1.6mDM/ld8H0JOtHuVpQfh5i', NULL, '2022-08-10 23:03:38', '2022-08-11 09:52:34', 'user'),
(3, 'Nur Ikhsan', 'ikhsan@gmail.com', NULL, '$2y$10$A529RKyOKFyt6iEQyCl2/.7CjV/kqAX3eerenLs0D/e/N4ruD4ENm', NULL, '2022-08-10 23:04:08', '2022-08-10 23:04:08', 'user'),
(6, 'Aldi Rahmadi', 'aldirhmadi@gmail.com', NULL, '$2y$10$HbjjQ3SWHCaJGUL8QBGXU.Q9CEX52BOx8eFLfMEZ5laRzLZK4i.Sa', NULL, '2022-08-11 09:51:12', '2022-08-11 09:51:12', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE `wilayah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wilayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wilayah`
--

INSERT INTO `wilayah` (`id`, `nm_kelurahan`, `nm_kecamatan`, `created_at`, `updated_at`, `wilayah`) VALUES
(1, 'Kejaksan', 'Kejaksan', '2022-08-08 09:23:04', '2022-08-08 09:23:04', 'Alun-alun Kota Cirebon'),
(2, 'Kejaksan', 'Kejaksan', '2022-08-08 09:23:30', '2022-08-08 09:23:30', 'Stasiun Kejaksan'),
(3, 'Kasepuhan', 'Kasepuhan', '2022-08-08 09:23:51', '2022-08-08 09:23:51', 'Keraton Kasepuhan'),
(4, 'Kedawung', 'Perjuangan', '2022-08-10 11:18:39', '2022-08-10 11:18:39', 'Stadion Bima');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pedagang`
--
ALTER TABLE `pedagang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pedagang`
--
ALTER TABLE `pedagang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
