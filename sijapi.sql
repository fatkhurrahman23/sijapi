-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 11:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sijapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_presensi`
--

CREATE TABLE `data_presensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_data_presensi` varchar(20) NOT NULL,
  `kode_presensi` varchar(20) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('hadir','tidak hadir','terlambat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_dosen` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `kode_prodi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_enrollment` varchar(20) NOT NULL,
  `kode_kelas` varchar(20) NOT NULL,
  `kode_dosen` varchar(20) NOT NULL,
  `kode_tahun_akademik` varchar(20) NOT NULL,
  `kode_mata_kuliah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_hari` varchar(20) NOT NULL,
  `hari` enum('senin','selasa','rabu','kamis','jumat','sabtu','minggu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kuliah`
--

CREATE TABLE `jadwal_kuliah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_jadwal_kuliah` varchar(20) NOT NULL,
  `kode_enrollment` varchar(20) NOT NULL,
  `kode_hari` varchar(20) NOT NULL,
  `kode_ruang` varchar(20) NOT NULL,
  `kode_kelas` varchar(20) NOT NULL,
  `kode_jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_jam` varchar(20) NOT NULL,
  `range_jam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_mahasiswa`
--

CREATE TABLE `kelas_mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kelas` varchar(20) NOT NULL,
  `prodi` enum('D3 - Teknik Informatika','D4 - Teknologi Rekayasa Komputer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `kode_kelas` varchar(20) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_mata_kuliah` varchar(20) NOT NULL,
  `kode_kelas` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `jenis` enum('gasal','genap') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(79, '01_create_ruang_table', 1),
(80, '02_create_kelas_mahasiswa_table', 1),
(81, '03_create_jam_table', 1),
(82, '04_create_mahasiwa_table', 1),
(83, '05_create_prodi_dosen', 1),
(84, '06_create_mata_kuliah_table', 1),
(85, '07_create_dosen_table', 1),
(86, '08_create_users_table', 1),
(87, '09_create_tahun_akademik', 1),
(88, '10_create_hari', 1),
(89, '11_create_waktu_tidak_tersedia', 1),
(90, '12_create_enrollment', 1),
(91, '13_create_jadwal_kuliah_table', 1),
(92, '14_create_presensi_table', 1),
(93, '15_create_data_presensi_table', 1),
(94, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_presensi` varchar(20) NOT NULL,
  `kode_jadwal_kuliah` varchar(20) NOT NULL,
  `jam_token` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodi_dosen`
--

CREATE TABLE `prodi_dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_prodi` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_ruang` varchar(20) NOT NULL,
  `nama` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_tahun_akademik` varchar(20) NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `status` enum('gasal','genap') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('mahasiswa','dosen','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `waktu_tidak_tersedia`
--

CREATE TABLE `waktu_tidak_tersedia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_waktu_tidak_tersedia` varchar(20) NOT NULL,
  `kode_dosen` varchar(20) NOT NULL,
  `kode_jam` varchar(20) NOT NULL,
  `kode_hari` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_presensi`
--
ALTER TABLE `data_presensi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_presensi_kode_data_presensi_unique` (`kode_data_presensi`),
  ADD KEY `data_presensi_kode_presensi_foreign` (`kode_presensi`),
  ADD KEY `data_presensi_nim_foreign` (`nim`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosen_kode_dosen_unique` (`kode_dosen`),
  ADD UNIQUE KEY `dosen_nip_unique` (`nip`),
  ADD KEY `dosen_kode_prodi_foreign` (`kode_prodi`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enrollment_kode_enrollment_unique` (`kode_enrollment`),
  ADD KEY `enrollment_kode_kelas_foreign` (`kode_kelas`),
  ADD KEY `enrollment_kode_dosen_foreign` (`kode_dosen`),
  ADD KEY `enrollment_kode_tahun_akademik_foreign` (`kode_tahun_akademik`),
  ADD KEY `enrollment_kode_mata_kuliah_foreign` (`kode_mata_kuliah`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hari_kode_hari_unique` (`kode_hari`);

--
-- Indexes for table `jadwal_kuliah`
--
ALTER TABLE `jadwal_kuliah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jadwal_kuliah_kode_jadwal_kuliah_unique` (`kode_jadwal_kuliah`),
  ADD KEY `jadwal_kuliah_kode_enrollment_foreign` (`kode_enrollment`),
  ADD KEY `jadwal_kuliah_kode_hari_foreign` (`kode_hari`),
  ADD KEY `jadwal_kuliah_kode_ruang_foreign` (`kode_ruang`),
  ADD KEY `jadwal_kuliah_kode_kelas_foreign` (`kode_kelas`),
  ADD KEY `jadwal_kuliah_kode_jam_foreign` (`kode_jam`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jam_kode_jam_unique` (`kode_jam`);

--
-- Indexes for table `kelas_mahasiswa`
--
ALTER TABLE `kelas_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kelas_mahasiswa_kode_kelas_unique` (`kode_kelas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `mahasiswa_kode_kelas_foreign` (`kode_kelas`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mata_kuliah_kode_mata_kuliah_unique` (`kode_mata_kuliah`),
  ADD KEY `mata_kuliah_kode_kelas_foreign` (`kode_kelas`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `presensi_kode_presensi_unique` (`kode_presensi`),
  ADD KEY `presensi_kode_jadwal_kuliah_foreign` (`kode_jadwal_kuliah`);

--
-- Indexes for table `prodi_dosen`
--
ALTER TABLE `prodi_dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prodi_dosen_kode_prodi_unique` (`kode_prodi`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ruang_kode_ruang_unique` (`kode_ruang`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tahun_akademik_kode_tahun_akademik_unique` (`kode_tahun_akademik`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waktu_tidak_tersedia`
--
ALTER TABLE `waktu_tidak_tersedia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `waktu_tidak_tersedia_kode_dosen_foreign` (`kode_dosen`),
  ADD KEY `waktu_tidak_tersedia_kode_jam_foreign` (`kode_jam`),
  ADD KEY `waktu_tidak_tersedia_kode_hari_foreign` (`kode_hari`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_presensi`
--
ALTER TABLE `data_presensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_kuliah`
--
ALTER TABLE `jadwal_kuliah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas_mahasiswa`
--
ALTER TABLE `kelas_mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodi_dosen`
--
ALTER TABLE `prodi_dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `waktu_tidak_tersedia`
--
ALTER TABLE `waktu_tidak_tersedia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_presensi`
--
ALTER TABLE `data_presensi`
  ADD CONSTRAINT `data_presensi_kode_presensi_foreign` FOREIGN KEY (`kode_presensi`) REFERENCES `presensi` (`kode_presensi`),
  ADD CONSTRAINT `data_presensi_nim_foreign` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_kode_prodi_foreign` FOREIGN KEY (`kode_prodi`) REFERENCES `prodi_dosen` (`kode_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_kode_dosen_foreign` FOREIGN KEY (`kode_dosen`) REFERENCES `dosen` (`kode_dosen`),
  ADD CONSTRAINT `enrollment_kode_kelas_foreign` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas_mahasiswa` (`kode_kelas`),
  ADD CONSTRAINT `enrollment_kode_mata_kuliah_foreign` FOREIGN KEY (`kode_mata_kuliah`) REFERENCES `mata_kuliah` (`kode_mata_kuliah`),
  ADD CONSTRAINT `enrollment_kode_tahun_akademik_foreign` FOREIGN KEY (`kode_tahun_akademik`) REFERENCES `tahun_akademik` (`kode_tahun_akademik`);

--
-- Constraints for table `jadwal_kuliah`
--
ALTER TABLE `jadwal_kuliah`
  ADD CONSTRAINT `jadwal_kuliah_kode_enrollment_foreign` FOREIGN KEY (`kode_enrollment`) REFERENCES `enrollment` (`kode_enrollment`),
  ADD CONSTRAINT `jadwal_kuliah_kode_hari_foreign` FOREIGN KEY (`kode_hari`) REFERENCES `hari` (`kode_hari`),
  ADD CONSTRAINT `jadwal_kuliah_kode_jam_foreign` FOREIGN KEY (`kode_jam`) REFERENCES `jam` (`kode_jam`),
  ADD CONSTRAINT `jadwal_kuliah_kode_kelas_foreign` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas_mahasiswa` (`kode_kelas`),
  ADD CONSTRAINT `jadwal_kuliah_kode_ruang_foreign` FOREIGN KEY (`kode_ruang`) REFERENCES `ruang` (`kode_ruang`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_kode_kelas_foreign` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas_mahasiswa` (`kode_kelas`);

--
-- Constraints for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD CONSTRAINT `mata_kuliah_kode_kelas_foreign` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas_mahasiswa` (`kode_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_kode_jadwal_kuliah_foreign` FOREIGN KEY (`kode_jadwal_kuliah`) REFERENCES `jadwal_kuliah` (`kode_jadwal_kuliah`);

--
-- Constraints for table `waktu_tidak_tersedia`
--
ALTER TABLE `waktu_tidak_tersedia`
  ADD CONSTRAINT `waktu_tidak_tersedia_kode_dosen_foreign` FOREIGN KEY (`kode_dosen`) REFERENCES `dosen` (`kode_dosen`) ON DELETE CASCADE,
  ADD CONSTRAINT `waktu_tidak_tersedia_kode_hari_foreign` FOREIGN KEY (`kode_hari`) REFERENCES `hari` (`kode_hari`),
  ADD CONSTRAINT `waktu_tidak_tersedia_kode_jam_foreign` FOREIGN KEY (`kode_jam`) REFERENCES `jam` (`kode_jam`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
