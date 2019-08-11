-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2019 at 06:13 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krs-api`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nip` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dosen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `nama_dosen`) VALUES
(1, '123123123123123111', 'Dosen IT 1'),
(2, '123123123123123112', 'Dosen IT 2'),
(3, '123123123123123113', 'Dosen IT 3'),
(4, '123123123123123114', 'Dosen IT 4'),
(5, '123123123123123115', 'Dosen IT 5'),
(6, '123123123123123116', 'Dosen IT 6'),
(7, '123123123123123117', 'Dosen IT 7'),
(8, '123123123123123118', 'Dosen IT 8');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang_pendidikan`
--

CREATE TABLE `jenjang_pendidikan` (
  `id` int(11) NOT NULL,
  `tingkatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks_minimal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenjang_pendidikan`
--

INSERT INTO `jenjang_pendidikan` (`id`, `tingkatan`, `sks_minimal`) VALUES
(1, 'S1', 144),
(2, 'S2', 38);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_jurusan`) VALUES
(1, 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kode_kelas` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuota` int(11) NOT NULL,
  `mata_kuliah_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `hari_kelas` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_kelas` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kode_kelas`, `kuota`, `mata_kuliah_id`, `dosen_id`, `hari_kelas`, `jam_kelas`) VALUES
(1, '1610101', 20, 1, 1, 'senin', '08:00:00'),
(2, '1610102', 20, 1, 2, 'selasa', '09:40:00'),
(3, '1610103', 20, 1, 3, 'rabu', '08:00:00'),
(4, '1610201', 20, 2, 4, 'senin', '13:10:00'),
(5, '1610202', 20, 2, 6, 'selasa', '08:00:00'),
(6, '1610203', 20, 2, 2, 'kamis', '09:40:00'),
(7, '1610301', 30, 3, 1, 'rabu', '13:10:00'),
(8, '1610302', 30, 3, 5, 'kamis', '14:50:00'),
(9, '1610401', 30, 4, 3, 'kamis', '08:00:00'),
(10, '1610402', 30, 4, 8, 'senin', '14:50:00'),
(11, '1610501', 20, 5, 8, 'senin', '09:40:00'),
(12, '1610502', 20, 5, 3, 'rabu', '09:40:00'),
(13, '1610503', 20, 5, 1, 'jumat', '08:00:00'),
(14, '1610601', 20, 6, 2, 'jumat', '08:00:00'),
(15, '1610602', 20, 6, 4, 'jumat', '13:10:00'),
(16, '1610603', 20, 6, 5, 'senin', '08:00:00'),
(17, '1610701', 20, 7, 7, 'selasa', '13:10:00'),
(18, '1610702', 20, 7, 7, 'kamis', '13:10:00'),
(19, '1610703', 20, 7, 7, 'jumat', '09:40:00'),
(20, '1610801', 20, 8, 6, 'jumat', '09:40:00'),
(21, '1610802', 20, 8, 6, 'rabu', '08:00:00'),
(22, '1610803', 20, 8, 4, 'kamis', '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `krs_mahasiswa`
--

CREATE TABLE `krs_mahasiswa` (
  `id` int(11) NOT NULL,
  `krs_semester_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `krs_mahasiswa`
--

INSERT INTO `krs_mahasiswa` (`id`, `krs_semester_id`, `kelas_id`) VALUES
(1, 1, 1),
(5, 1, 4),
(6, 1, 7),
(7, 1, 9),
(8, 1, 12),
(9, 1, 15),
(10, 1, 18),
(11, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `krs_semester`
--

CREATE TABLE `krs_semester` (
  `id` int(11) NOT NULL,
  `pivot_mahasiswa_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `krs_semester`
--

INSERT INTO `krs_semester` (`id`, `pivot_mahasiswa_id`, `semester`, `sks`) VALUES
(1, 1, 1, 22),
(2, 2, 1, 22);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama_mahasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama_mahasiswa`) VALUES
(1, 'Imanuel Ronaldo'),
(2, 'Mohamad Rifqi Shiddiq'),
(3, 'Dewi Febriyanti'),
(4, 'Aqsal Ramadhan'),
(5, 'Rionaldo Angga'),
(6, 'Syauqie Ayunda'),
(7, 'Ali Ridho'),
(8, 'Omega Dwi');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id` int(11) NOT NULL,
  `kode_mata_kuliah` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mata_kuliah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks_mata_kuliah` int(11) NOT NULL,
  `keterangan_mata_kuliah` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id`, `kode_mata_kuliah`, `nama_mata_kuliah`, `sks_mata_kuliah`, `keterangan_mata_kuliah`) VALUES
(1, 'TIK1111', 'Dasar Sistem Informasi', 3, ''),
(2, 'TIK1112', 'Konsep Teknologi Informasi', 3, ''),
(3, 'TIK1113', 'Keterampilan Komputer', 3, ''),
(4, 'TIK1114', 'Konsep Pemrograman', 3, ''),
(5, 'TIK1115', 'Logika & Algoritma', 3, ''),
(6, 'MAT1111', 'Matematika 1', 3, ''),
(7, 'PKN1111', 'Kewarganegaraan', 2, ''),
(8, 'BIG1111', 'Bahasa Inggris Untuk Percakapan', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `pivot_mahasiswa_jurusan_jenjang_pendidikan`
--

CREATE TABLE `pivot_mahasiswa_jurusan_jenjang_pendidikan` (
  `id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `jenjang_pendidikan_id` int(11) NOT NULL,
  `nim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pivot_mahasiswa_jurusan_jenjang_pendidikan`
--

INSERT INTO `pivot_mahasiswa_jurusan_jenjang_pendidikan` (`id`, `mahasiswa_id`, `jurusan_id`, `jenjang_pendidikan_id`, `nim`) VALUES
(1, 1, 1, 1, '2103161044'),
(2, 2, 1, 1, '2103161045');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenjang_pendidikan`
--
ALTER TABLE `jenjang_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D01FFE545D5BCE65` (`mata_kuliah_id`),
  ADD KEY `IDX_D01FFE54D2E05664` (`dosen_id`);

--
-- Indexes for table `krs_mahasiswa`
--
ALTER TABLE `krs_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3F5C87E8283778A6` (`krs_semester_id`),
  ADD KEY `IDX_3F5C87E8AC3824A` (`kelas_id`);

--
-- Indexes for table `krs_semester`
--
ALTER TABLE `krs_semester`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A6D404E3B5F8AF83` (`pivot_mahasiswa_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pivot_mahasiswa_jurusan_jenjang_pendidikan`
--
ALTER TABLE `pivot_mahasiswa_jurusan_jenjang_pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8FD4CF7A357563A3` (`mahasiswa_id`),
  ADD KEY `IDX_8FD4CF7AA443AEB4` (`jurusan_id`),
  ADD KEY `IDX_8FD4CF7A4676057B` (`jenjang_pendidikan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jenjang_pendidikan`
--
ALTER TABLE `jenjang_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `krs_mahasiswa`
--
ALTER TABLE `krs_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `krs_semester`
--
ALTER TABLE `krs_semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pivot_mahasiswa_jurusan_jenjang_pendidikan`
--
ALTER TABLE `pivot_mahasiswa_jurusan_jenjang_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `FK_D01FFE545D5BCE65` FOREIGN KEY (`mata_kuliah_id`) REFERENCES `mata_kuliah` (`id`),
  ADD CONSTRAINT `FK_D01FFE54D2E05664` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`);

--
-- Constraints for table `krs_mahasiswa`
--
ALTER TABLE `krs_mahasiswa`
  ADD CONSTRAINT `FK_3F5C87E8283778A6` FOREIGN KEY (`krs_semester_id`) REFERENCES `krs_semester` (`id`),
  ADD CONSTRAINT `FK_3F5C87E8AC3824A` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `krs_semester`
--
ALTER TABLE `krs_semester`
  ADD CONSTRAINT `FK_A6D404E3B5F8AF83` FOREIGN KEY (`pivot_mahasiswa_id`) REFERENCES `pivot_mahasiswa_jurusan_jenjang_pendidikan` (`id`);

--
-- Constraints for table `pivot_mahasiswa_jurusan_jenjang_pendidikan`
--
ALTER TABLE `pivot_mahasiswa_jurusan_jenjang_pendidikan`
  ADD CONSTRAINT `FK_8FD4CF7A357563A3` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`),
  ADD CONSTRAINT `FK_8FD4CF7A4676057B` FOREIGN KEY (`jenjang_pendidikan_id`) REFERENCES `jenjang_pendidikan` (`id`),
  ADD CONSTRAINT `FK_8FD4CF7AA443AEB4` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
