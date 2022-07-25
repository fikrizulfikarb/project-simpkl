-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2022 at 06:15 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpkl_db_02`
--

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__daftarlowongan`
--

CREATE TABLE `superadmin__daftarlowongan` (
  `id` char(36) NOT NULL,
  `id_dataperusahaan` char(36) DEFAULT NULL,
  `id_lowongan` char(36) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__daftarlowongan`
--

INSERT INTO `superadmin__daftarlowongan` (`id`, `id_dataperusahaan`, `id_lowongan`, `alasan`, `status`, `created_at`, `updated_at`) VALUES
('969c9c20-5fe3-4a46-9035-dffee21d2c4c', '965dfaba-9b3b-4116-a79d-74ee861385ee', '96d86f5f-afd0-442a-80d3-4567928214ff', 'sadasdasdasdhsadadgajsgdjajdjsa', 1, '2022-07-23 16:57:15', '2022-07-23 17:28:56'),
('96db109b-7653-4e9a-9ec8-14dcab846213', '965dfaba-9b3b-4116-a79d-74ee861385ee', '96db280b-d793-4369-a63b-0973623d9ae0', 'wqewqewqe', 1, '2022-07-24 17:22:05', '2022-07-24 17:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__dataperusahaan`
--

CREATE TABLE `superadmin__dataperusahaan` (
  `id` char(36) NOT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `no_handphone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superadmin__dataperusahaan`
--

INSERT INTO `superadmin__dataperusahaan` (`id`, `nama_perusahaan`, `no_handphone`, `email`, `alamat`, `keterangan`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('965dfaba-9b3b-4116-a79d-74ee861385ee', 'WK PHIE', '081290034449', 'wkphie@gmail.com', 'DEPAN POLRES\r\nkab. ketapang\r\nprov. kalbar', 'bergerak di bidang apa saja asal halal', '$2y$10$YRPJu6YxNmAdJpcZGblPfOJpiw3AB26HO3lO0mv2crruwTgFMUjAO', NULL, '2022-06-22 15:45:16', '2022-07-23 15:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__jurusan`
--

CREATE TABLE `superadmin__jurusan` (
  `id` char(36) NOT NULL,
  `nama_jurusan` varchar(255) DEFAULT NULL,
  `nama_ketua_jurusan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superadmin__jurusan`
--

INSERT INTO `superadmin__jurusan` (`id`, `nama_jurusan`, `nama_ketua_jurusan`, `created_at`, `updated_at`) VALUES
('968ffe0f-b75a-4ba3-b1a0-f03919c4b415', 'Teknik Mesin', 'Muh Anhar, S.T.,M.T', '2022-06-17 00:44:29', '2022-06-17 00:44:29'),
('96900335-a03d-412b-ac97-559dfc0266e2', 'Teknik Pertambangan', 'Herman, S.Si.,M.T', '2022-06-17 00:58:53', '2022-06-17 00:58:53'),
('96900362-7c33-4206-ae3e-3fa06ec6fdd0', 'Pengolahan Hasil Perkebunan', 'Ningrum Dwi Hastuti, S.TP.,M.P', '2022-06-17 00:59:22', '2022-06-17 00:59:22'),
('9690038c-5c40-458f-8556-42cdb13dd9ff', 'Teknik Informatika', 'Eka Wahyudi, S.Pd., M.Cs', '2022-06-17 00:59:49', '2022-06-17 00:59:49'),
('96900422-c53a-4626-b0d2-9ad92cf69478', 'Teknik Sipil', 'M. Hanif Faisal, M.T.', '2022-06-17 01:01:28', '2022-06-17 01:01:28'),
('9690056e-e165-4d79-b7b6-c6a8b8891fca', 'Teknik Listrik', 'Erick Radwitya, S.ST., MT', '2022-06-17 01:05:06', '2022-06-17 01:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__jurusan__prodi`
--

CREATE TABLE `superadmin__jurusan__prodi` (
  `id` char(36) NOT NULL,
  `id_jurusan` char(36) DEFAULT NULL,
  `nama_prodi` varchar(255) DEFAULT NULL,
  `kode_prodi` varchar(255) DEFAULT NULL,
  `nama_koordinator` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superadmin__jurusan__prodi`
--

INSERT INTO `superadmin__jurusan__prodi` (`id`, `id_jurusan`, `nama_prodi`, `kode_prodi`, `nama_koordinator`, `created_at`, `updated_at`) VALUES
('968ffe0f-c3ed-4d40-bb57-7c296b075967', '968ffe0f-b75a-4ba3-b1a0-f03919c4b415', 'D3 Perawatan dan Perbaikan Mesin', '301', 'Yusuf, S.ST., M.T', '2022-06-17 00:44:29', '2022-06-17 00:44:29'),
('96900335-b6db-4b1d-9054-bd8ab35a04f3', '96900335-a03d-412b-ac97-559dfc0266e2', 'D3 Teknik Pertambangan', '302', 'Firman, S.Pd., M.P.Fis', '2022-06-17 00:58:53', '2022-06-17 00:58:53'),
('96900362-9216-45e0-ac95-ef89b77fecdc', '96900362-7c33-4206-ae3e-3fa06ec6fdd0', 'D3 Teknologi Pengolahan Hasil Perkebunan', '303', 'Nenengsih Verawati, S.TP.,M.P', '2022-06-17 00:59:22', '2022-06-17 00:59:22'),
('9690038c-731c-4e16-8e98-9c53d0b5e231', '9690038c-5c40-458f-8556-42cdb13dd9ff', 'D3 Teknologi Informasi', '304', 'Rizqia Lestika Atimi, S.T., M.T', '2022-06-17 00:59:49', '2022-06-17 00:59:49'),
('969003a8-49f0-4a20-8694-273699458eea', '96900362-7c33-4206-ae3e-3fa06ec6fdd0', 'D3 Agro Industri', '305', 'Irfan Cholid, S.P.,M.MA', '2022-06-17 01:00:08', '2022-06-17 01:00:08'),
('96900422-dcea-4c10-97b4-61d1ce8791a9', '96900422-c53a-4626-b0d2-9ad92cf69478', 'D4 Perancangan Jalan dan Jembatan', '406', 'Julyan Purnomo, S.ST., M.T.', '2022-06-17 01:01:28', '2022-06-17 01:01:28'),
('969004bc-af32-4676-bdda-b00df6731d83', '96900362-7c33-4206-ae3e-3fa06ec6fdd0', 'D4 Budidaya Tanaman Perkebunan', '407', 'Assrorudin, S.Pd.,M.Pd', '2022-06-17 01:03:09', '2022-06-17 01:03:09'),
('9690056e-efab-4396-a89e-38ec0be2cd55', '9690056e-e165-4d79-b7b6-c6a8b8891fca', 'D3 Teknik Elektro', '308', 'AKHDIYATUL, S.ST.,M.T', '2022-06-17 01:05:06', '2022-06-17 01:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__lowongan`
--

CREATE TABLE `superadmin__lowongan` (
  `id` char(36) NOT NULL,
  `id_prodi` char(36) DEFAULT NULL,
  `id_dataperusahaan` char(36) DEFAULT NULL,
  `id_tahunajaran` char(36) DEFAULT NULL,
  `bidang` varchar(255) DEFAULT NULL,
  `kuota` varchar(36) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__lowongan`
--

INSERT INTO `superadmin__lowongan` (`id`, `id_prodi`, `id_dataperusahaan`, `id_tahunajaran`, `bidang`, `kuota`, `created_at`, `updated_at`) VALUES
('96db280b-d793-4369-a63b-0973623d9ae0', '9690038c-731c-4e16-8e98-9c53d0b5e231', '965dfaba-9b3b-4116-a79d-74ee861385ee', '96d75aec-e450-41de-a7de-bc58109be1f8', 'komputer', '5', '2022-07-24 16:28:58', '2022-07-24 16:28:58'),
('96db2831-ed2e-414f-8066-c6df3db9f5f7', '9690038c-731c-4e16-8e98-9c53d0b5e231', '965dfaba-9b3b-4116-a79d-74ee861385ee', '96d75aec-e450-41de-a7de-bc58109be1f8', 'jaringan', '7', '2022-07-24 16:29:23', '2022-07-24 16:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__mahasiswa`
--

CREATE TABLE `superadmin__mahasiswa` (
  `id` char(36) NOT NULL,
  `id_prodi` char(36) DEFAULT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `agama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `angkatan` varchar(255) DEFAULT NULL,
  `id_tahunajaran` char(36) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__mahasiswa`
--

INSERT INTO `superadmin__mahasiswa` (`id`, `id_prodi`, `nim`, `nama`, `foto`, `agama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `angkatan`, `id_tahunajaran`, `password`, `created_at`, `updated_at`) VALUES
('969ac55a-1a00-4c46-9a0d-fd442d622d43', '9690038c-731c-4e16-8e98-9c53d0b5e231', '3042020001', 'RADEN RORO HAURA FARRAS A', 'app/images/mahasiswa/969ac55a-1a00-4c46-9a0d-fd442d622d43-1655914801-1ZBnx.jpg', 'islam', 'Perempuan', 'Pekan baru', '2001-07-05', '2020', '96d75aec-e450-41de-a7de-bc58109be1f8', '$2y$10$VCmeRelf.LEUqaucqdeej.CsUuX7I6s219LR/tFV9u2Jksl3zFeEi', '2022-06-24 18:04:41', '2022-07-24 16:04:02'),
('969c9c20-5fe3-4a46-9035-dffee21d2c4c', '9690038c-731c-4e16-8e98-9c53d0b5e231', '3042020055', 'Fikri Brandan', 'app/images/mahasiswa/969c9c20-5fe3-4a46-9035-dffee21d2c4c-1658632744-2lt3P.jpg', 'islam', 'Laki-laki', 'Brandan', '2001-11-25', '2020', '96d75aec-e450-41de-a7de-bc58109be1f8', '$2y$10$V/CT3JEnxisKJ3CCYxzzeOup0yx/SrT.24t3TnCTJtJKtipyc.QiC', '2022-06-23 14:16:25', '2022-07-24 16:08:50'),
('96a98b50-801d-4951-9e8d-555439f0a9f7', '9690038c-731c-4e16-8e98-9c53d0b5e231', '3042020056', 'mega pratiwi', 'app/images/mahasiswa/96a98b50-801d-4951-9e8d-555439f0a9f7-1656549309-in2LW.jpg', 'islam', 'Perempuan', 'ketapang', '2002-07-19', '2020', '96d75aec-e450-41de-a7de-bc58109be1f8', '$2y$10$5pbnoAEyyVYBlEGyUtub7.zzWCmY/8j8YuY.fBkmYnmC53yrf5tM2', '2022-06-30 00:35:09', '2022-07-24 16:08:54'),
('96c2fa84-ad8e-42aa-ab5d-70745d4410a7', '9690038c-731c-4e16-8e98-9c53d0b5e231', '3042020008', 'jalal oka saputra', 'app/images/mahasiswa/96c2fa84-ad8e-42aa-ab5d-70745d4410a7-1657641708-W24lI.jpg', 'islam', 'Laki-laki', 'sukadana', '2002-10-01', '2020', '96d75aec-e450-41de-a7de-bc58109be1f8', '$2y$10$O5ts5ixpmuSe5F.AAoulCeWvwcS6ubxcncVVudjFYmGIAjVCwS3lK', '2022-07-12 16:01:48', '2022-07-24 16:09:00'),
('96db109b-7653-4e9a-9ec8-14dcab846213', '9690038c-731c-4e16-8e98-9c53d0b5e231', '3042020012', 'zakaria', 'app/images/mahasiswa/96db109b-7653-4e9a-9ec8-14dcab846213-1658676206-6jejH.jpg', 'islam', 'Laki-laki', 'siduk', '2002-06-15', '2020', '96d75aec-e450-41de-a7de-bc58109be1f8', '$2y$10$cjaSl5mRxVhEgQ/lzR8QsOPOo5VSIQpEVSvSfwk.5iavaWNzmMh02', '2022-07-24 15:23:26', '2022-07-24 15:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__module`
--

CREATE TABLE `superadmin__module` (
  `id` char(36) NOT NULL,
  `app` varchar(255) NOT NULL,
  `level` int(5) DEFAULT NULL,
  `tag` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__module`
--

INSERT INTO `superadmin__module` (`id`, `app`, `level`, `tag`, `name`, `title`, `subtitle`, `color`, `menu`, `url`, `created_at`, `updated_at`) VALUES
('96268eb8-9ed5-4e8f-9964-2ad04363e346', 'SIMPKL', 1, 'simpkl-superadmin', 'SUPER ADMIN', 'SIMPKL', 'Super Admin', '#808080', 'superadmin', 'superadmin', '2022-05-25 15:59:32', '2022-05-20 05:24:18'),
('964eb7c0-b1be-4f13-91e1-c3400c7d50ce', 'SIMPKL', 1, 'simpkl-admin', 'ADMIN', 'SIMPKL', 'Admin', '#808080', 'admin', 'admin', '2022-05-25 16:01:26', '2022-05-20 05:24:12'),
('966158a5-e88e-4870-ac1b-985b25f17159', 'SIMPKL', NULL, 'simpkl-istansi', 'INSTANSI', 'SIMPKL', 'ISTANSI', '#FF5733', 'instansi', 'istansi', '2022-07-12 04:58:36', '2022-07-11 21:58:36');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__pegawai`
--

CREATE TABLE `superadmin__pegawai` (
  `id` char(36) NOT NULL,
  `id_prodi` char(36) DEFAULT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__pegawai`
--

INSERT INTO `superadmin__pegawai` (`id`, `id_prodi`, `nip`, `nama`, `foto`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('964e7fec-0b8c-402a-94dd-04535b06c390', '9690038c-731c-4e16-8e98-9c53d0b5e231', '732511 7911 2001788', 'FIKRI ZULFIKAR BRANDAN', NULL, 'fikrizulfikarb', 'fikri.zb10@gmail.com', '$2y$10$UQsiUjD1CXVuP5IeAKDYpe0hesywSGD8dlco7sl8otHtkj8GSEMNG', NULL, '2022-07-11 17:04:02', '2022-07-11 10:04:02'),
('964ea999-d71b-4c21-8f5b-7c04cf1f6abd', '9690056e-efab-4396-a89e-38ec0be2cd55', '12345678901236547', 'MUTIARA', NULL, 'mutiaraaa', 'mutiara@gmail.com', '$2y$10$5TBe67r83OSjqw.PdcJBve7c9LnzoYmnP5OaXjipZmPJZDWI9TiRe', NULL, '2022-07-11 16:58:33', '2022-07-11 09:58:33'),
('96b6b2da-f60a-42d5-987f-83cc62e647f3', '9690056e-efab-4396-a89e-38ec0be2cd55', '09990090909089098', 'haura', NULL, 'hauhau', 'haura@gmail.com', '$2y$10$NDtdcla.GT6yenBV43KWu.SPbYiFDj2HZteMg3656xy0HIuMj2Nzq', NULL, '2022-07-06 06:31:29', '2022-07-06 06:31:29'),
('96d9513f-0cbe-4ea6-a968-5ff7b518dc0f', '9690038c-731c-4e16-8e98-9c53d0b5e231', '12345678901233211', 'vina', 'app/images/pegawai/96d9513f-0cbe-4ea6-a968-5ff7b518dc0f-1658601151-epMJe.jpg', 'vinaaa', 'vina@gmail.com', '$2y$10$IGOt0nWwwrMC9KoSLMYpJeS0XErX2NNq/2Qf2lLOgBoCNwrSOJoKy', NULL, '2022-07-23 18:32:31', '2022-07-24 03:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__role`
--

CREATE TABLE `superadmin__role` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) DEFAULT NULL,
  `id_module` char(36) NOT NULL,
  `id_dataperusahaan` char(36) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__role`
--

INSERT INTO `superadmin__role` (`id`, `id_pegawai`, `id_module`, `id_dataperusahaan`, `created_at`, `updated_at`) VALUES
('966269e4-67d7-4e20-94cc-29382c4e08cf', '964e7fec-0b8c-402a-94dd-04535b06c390', '96268eb8-9ed5-4e8f-9964-2ad04363e346', NULL, '2022-05-25 08:57:55', '2022-05-25 08:57:55'),
('96628e0f-6850-4494-af5f-7e5b902b15a4', '964e7fec-0b8c-402a-94dd-04535b06c390', '964eb7c0-b1be-4f13-91e1-c3400c7d50ce', NULL, '2022-05-25 10:39:03', '2022-05-25 10:39:03'),
('969886a3-545a-4309-995d-e03b5763891a', NULL, '966158a5-e88e-4870-ac1b-985b25f17159', '965dfaba-9b3b-4116-a79d-74ee861385ee', '2022-06-21 06:33:00', '2022-06-21 06:33:00'),
('969e1bbc-d145-4a36-bb04-67e6c526136a', '964ea999-d71b-4c21-8f5b-7c04cf1f6abd', '964eb7c0-b1be-4f13-91e1-c3400c7d50ce', NULL, '2022-06-24 01:09:03', '2022-06-24 01:09:03'),
('96b6b2ef-2796-4cff-8eeb-2b51812df844', '96b6b2da-f60a-42d5-987f-83cc62e647f3', '964eb7c0-b1be-4f13-91e1-c3400c7d50ce', NULL, '2022-07-06 06:31:42', '2022-07-06 06:31:42'),
('96d95158-4a05-470c-8fe2-514dcfe35c73', '96d9513f-0cbe-4ea6-a968-5ff7b518dc0f', '964eb7c0-b1be-4f13-91e1-c3400c7d50ce', NULL, '2022-07-23 18:32:48', '2022-07-23 18:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__syaratmagang`
--

CREATE TABLE `superadmin__syaratmagang` (
  `id` char(36) NOT NULL,
  `syarat_magang` varchar(255) DEFAULT NULL,
  `krs_semester` varchar(255) DEFAULT NULL,
  `id_mahasiswa` char(36) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `superadmin__tahunajaran`
--

CREATE TABLE `superadmin__tahunajaran` (
  `id` char(36) NOT NULL,
  `id_prodi` char(36) DEFAULT NULL,
  `tanggal_buka` varchar(255) DEFAULT NULL,
  `tanggal_tutup` varchar(255) DEFAULT NULL,
  `tahun_ajaran` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin__tahunajaran`
--

INSERT INTO `superadmin__tahunajaran` (`id`, `id_prodi`, `tanggal_buka`, `tanggal_tutup`, `tahun_ajaran`, `created_at`, `updated_at`) VALUES
('96d75aec-e450-41de-a7de-bc58109be1f8', '9690038c-731c-4e16-8e98-9c53d0b5e231', '2022-09-26', '2022-05-26', '2022', '2022-07-22 12:07:56', '2022-07-23 13:40:25'),
('96d84eec-e839-47b4-a8a9-3da8eaa4c947', '9690056e-efab-4396-a89e-38ec0be2cd55', '2022-08-08', '2023-02-26', '2022', '2022-07-22 23:30:13', '2022-07-23 16:12:17'),
('96d851a5-14e1-4822-959f-7f4b929250f4', '969003a8-49f0-4a20-8694-273699458eea', '2022-09-24', '2023-01-09', '2022', '2022-07-23 06:37:48', '2022-07-23 06:37:48'),
('96d85fa4-ea43-4e14-acb4-9a496a49c2e7', '968ffe0f-c3ed-4d40-bb57-7c296b075967', '2022-11-21', '2023-03-20', '2022', '2022-07-23 07:16:57', '2022-07-23 07:16:57'),
('96da143c-bd30-424f-aaf7-168fd574be87', '9690038c-731c-4e16-8e98-9c53d0b5e231', '2023-09-04', '2024-03-07', '2023', '2022-07-24 03:37:46', '2022-07-24 03:37:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `superadmin__daftarlowongan`
--
ALTER TABLE `superadmin__daftarlowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__dataperusahaan`
--
ALTER TABLE `superadmin__dataperusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__jurusan`
--
ALTER TABLE `superadmin__jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__jurusan__prodi`
--
ALTER TABLE `superadmin__jurusan__prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__lowongan`
--
ALTER TABLE `superadmin__lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__mahasiswa`
--
ALTER TABLE `superadmin__mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__module`
--
ALTER TABLE `superadmin__module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__pegawai`
--
ALTER TABLE `superadmin__pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__role`
--
ALTER TABLE `superadmin__role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__syaratmagang`
--
ALTER TABLE `superadmin__syaratmagang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin__tahunajaran`
--
ALTER TABLE `superadmin__tahunajaran`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
