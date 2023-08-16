-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 03:07 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_handphone` varchar(14) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`, `no_handphone`, `role`) VALUES
(1, 'eka@eka.com', '5bfb391e6148ab027d7389fed2427a86', '09182312', 'admin'),
(2, 'septi@septi.com', '5bfb391e6148ab027d7389fed2427a86', '08731123', 'bendahara');

-- --------------------------------------------------------

--
-- Table structure for table `data_orang_tua`
--

CREATE TABLE `data_orang_tua` (
  `id_data_orang_tua` int(11) NOT NULL,
  `id_siswa_baru` varchar(15) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tempat_ayah` varchar(50) NOT NULL,
  `tl_ayah` date NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(50) NOT NULL,
  `penghasilan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tempat_ibu` varchar(50) NOT NULL,
  `tl_ibu` date NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `penghasilan_ibu` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_orang_tua`
--

INSERT INTO `data_orang_tua` (`id_data_orang_tua`, `id_siswa_baru`, `nama_ayah`, `tempat_ayah`, `tl_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `penghasilan_ayah`, `nama_ibu`, `tempat_ibu`, `tl_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`, `penghasilan_ibu`, `date_time`) VALUES
(1, 'ALKH-0001', 'ayah1', 'Jakarta', '1990-11-10', 'karyawan swasta', 'Sarjana', '10 Jt / Bulan', 'ibu 1', 'jakarta', '1992-09-15', 'ibu rumah tangga', 'Sarjana', '0', '0000-00-00 00:00:00'),
(6, 'ALKH-0002', 'johnny', 'amerika', '1995-02-12', 'idol', 'sarjana', '50 juta', 'septia hahaha', 'amerika', '1998-09-15', 'jaga anak', 'sarjana otw', 'dari suami', '0000-00-00 00:00:00'),
(16, 'ALKH-0003', 'asdasd', 'asdasd', '2023-07-11', 'asd', 'asd', 'asd', 'asdasdasd', 'asdasdasd', '2023-07-03', 'asd', 'asd', 'asd', '0000-00-00 00:00:00'),
(17, 'ALKH-0006', 'ayah2', 'korea', '2023-07-18', 'artis', 'sarjana', '20jt keatas', 'somi', 'korea', '2023-07-16', '2023-07-16', 'sd', '2.5jt - 5jt', '0000-00-00 00:00:00'),
(18, 'ALKH-0007', 'Scoups', 'Jerman', '1995-10-10', 'BUMN', '', '20jt keatas', 'Lala', 'Indonesia', '1996-02-10', 'IRT', 'sarjana', '2.5jt - 5jt', '0000-00-00 00:00:00'),
(22, 'ALKH-0009', 'anto', 'bandung', '1988-07-30', 'swasta', 'diploma', '10jt - 20jt', 'sinta', 'jakarta', '1992-04-20', 'irt', 'sd', '2.5jt - 5jt', '0000-00-00 00:00:00'),
(25, 'ALKH-0005', 'ayah2', 'korea', '2023-07-18', 'artis', 'sarjana', '20jt keatas', 'somi', 'korea', '2023-07-16', 'irt', 'sd', '2.5jt - 5jt', '0000-00-00 00:00:00'),
(26, 'ALKH-0010', 'samsul', 'bandung', '1979-07-10', 'tambang', 'sarjana', '10jt - 20jt', 'leila', 'jakarta', '1993-03-29', 'irt', 'diploma', '5jt - 10jt', '0000-00-00 00:00:00'),
(27, 'ALKH-0011', 'Anu', 'Jakarta', '2015-02-11', 'artis', 'sarjana', '5jt - 10jt', 'Omah', 'jakarta', '1987-09-09', 'artis', 'sarjana', '10jt - 20jt', '0000-00-00 00:00:00'),
(28, 'ALKH-0012', 'dean', 'jakarta', '1992-09-10', 'bumn', 'diploma', '2.5jt - 5jt', 'alma', 'bandung', '1992-04-20', 'irt', 'sma', '0jt - 2.5jt', '2023-08-07 20:05:41'),
(29, 'ALKH-0013', 'udin', 'makassar', '1992-04-10', 'nganggur', 'sarjana', '0jt - 2.5jt', 'miskah', 'jonggol', '1992-05-10', 'bumn', 'sarjana', '5jt - 10jt', '2023-08-08 10:10:19'),
(30, 'ALKH-0014', 'mister', 'bandung', '1992-04-29', 'bin', 'diploma', '5jt - 10jt', 'sejong', 'korea', '1995-03-19', 'artis', 'sarjana', '20jt keatas', '2023-08-08 10:15:21'),
(31, 'ALKH-0015', 'bagas', 'yogya', '1993-02-28', 'karyawan swasta', 'sarjana', '0jt - 2.5jt', 'amel', 'jakarta', '1995-05-31', 'manager', 'diploma', '2.5jt - 5jt', '2023-08-08 10:38:45'),
(32, 'ALKH-0016', 'krisna', 'bali', '1992-04-23', 'asisten manager', 'diploma', '2.5jt - 5jt', 'misel', 'jakarta', '1992-04-10', 'arsitek', 'diploma', '5jt - 10jt', '2023-08-10 15:26:09'),
(33, 'ALKH-0017', 'bisma', 'bandung', '1992-04-20', 'artis', 'diploma', '10jt - 20jt', 'merry', 'jakarta', '1992-04-10', 'irt', 'diploma', '5jt - 10jt', '2023-08-10 15:32:21'),
(34, 'ALKH-0018', 'lolo', 'jakarta', '1993-04-10', 'asn', 'sarjana', '10jt - 20jt', 'maya', 'jakarta', '1994-04-20', 'irt', 'sma', '2.5jt - 5jt', '2023-08-10 19:28:31'),
(35, 'ALKH-0019', 'moli', 'bandung', '1992-05-20', 'pegawai', 'diploma', '20jt keatas', 'rora', 'jakarta', '1995-04-12', 'artis', 'diploma', '20jt keatas', '2023-08-10 20:25:34'),
(36, 'ALKH-0020', 'jaja ', 'jakarta', '1992-03-10', 'lenong', 'sma', '5jt - 10jt', 'mala', 'jakarta', '1993-05-20', 'irt', 'sma', '2.5jt - 5jt', '2023-08-11 10:09:24'),
(37, 'ALKH-0021', 'pardi', 'jakarta', '1992-04-20', 'satpam', 'sma', '0jt - 2.5jt', 'narsi', 'jakarta', '1995-06-20', 'bumn', 'sma', '5jt - 10jt', '2023-08-12 09:52:51'),
(38, 'ALKH-0022', 'ian', 'aceh', '1884-02-10', 'buruh', 'diploma', '5jt - 10jt', 'lina', 'jakarta', '1992-04-10', 'guru', 'diploma', '2.5jt - 5jt', '2023-08-12 12:34:21'),
(39, 'ALKH-0023', 'Achmad', 'jakarta', '2023-08-16', 'swasta', 'sarjana', '5jt - 10jt', 'Nisa', 'jakarta', '2023-08-01', 'ibu rumah tangga', 'sarjana', '5jt - 10jt', '2023-08-12 14:16:17'),
(40, 'ALKH-0024', 'rojak', 'depok', '1991-05-23', 'artis', 'diploma', '20jt keatas', 'nida', 'jakarta', '1992-02-10', 'irt', 'sma', '0jt - 2.5jt', '2023-08-14 13:00:18'),
(41, 'ALKH-0025', 'mamat', 'jakarta', '1991-02-10', 'buruh', 'sma', '2.5jt - 5jt', 'siti', 'jakarta', '1992-03-20', 'buruh', 'sma', '2.5jt - 5jt', '2023-08-14 13:17:52'),
(42, 'ALKH-0026', 'bibu', 'jakarta', '1994-02-10', 'editor', 'diploma', '5jt - 10jt', 'neni', 'jakarta', '1993-03-10', 'irt', 'diploma', '2.5jt - 5jt', '2023-08-14 22:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa_sdit`
--

CREATE TABLE `data_siswa_sdit` (
  `nisn` varchar(25) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `kelas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_test`
--

CREATE TABLE `hasil_test` (
  `id_jawaban` int(11) NOT NULL,
  `id_siswa_baru` varchar(15) NOT NULL,
  `nilai` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `test_ulang` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_test`
--

INSERT INTO `hasil_test` (`id_jawaban`, `id_siswa_baru`, `nilai`, `status`, `test_ulang`, `date_time`) VALUES
(16, 'ALKH-0006', 100, 'lulus', '', '2023-08-08 10:31:04'),
(21, 'ALKH-0009', 80, 'lulus', '', '2023-08-08 10:31:04'),
(24, 'ALKH-0005', 100, 'lulus', '', '2023-08-09 00:00:00'),
(25, 'ALKH-0010', 100, 'lulus', '', '2023-08-10 09:00:00'),
(26, 'ALKH-0011', 95, 'lulus', 'confirm test ulang', '2023-08-08 16:00:00'),
(28, 'ALKH-0014', 100, 'lulus', '', '2023-08-08 10:31:04'),
(32, 'ALKH-0013', 0, 'belum_lulus', 'confirm test ulang', '2023-08-09 22:35:27'),
(33, 'ALKH-0017', 100, 'lulus', 'confirm test ulang', '2023-08-10 15:33:48'),
(36, 'ALKH-0018', 40, 'belum_lulus', '', '2023-08-10 19:30:16'),
(37, 'ALKH-0012', 0, '', '', '2023-08-10 20:33:43'),
(42, 'ALKH-0019', 0, '', '', '2023-08-10 21:14:57'),
(43, 'ALKH-0020', 100, 'lulus', 'confirm test ulang', '2023-08-11 10:10:29'),
(44, 'ALKH-0021', 100, 'lulus', 'confirm test ulang', '2023-08-12 09:54:12'),
(45, 'ALKH-0022', 100, 'lulus', 'confirm test ulang', '2023-08-12 12:35:25'),
(46, 'ALKH-0023', 100, 'lulus', '', '2023-08-12 14:18:24'),
(47, 'ALKH-0024', 85, 'lulus', '', '2023-08-14 13:01:02'),
(48, 'ALKH-0025', 65, 'lulus', '', '2023-08-14 13:18:11'),
(49, 'ALKH-0026', 85, 'lulus', '', '2023-08-14 22:43:01'),
(50, 'ALKH-0015', 0, '', '', '2023-08-15 12:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_siswa_baru` varchar(15) NOT NULL,
  `spp` int(11) NOT NULL,
  `seragam` int(11) NOT NULL,
  `pangkal` int(11) NOT NULL,
  `biaya_admin` int(11) NOT NULL,
  `buku` int(11) NOT NULL,
  `kegiatan` int(11) NOT NULL,
  `sisa_bayar` int(11) NOT NULL,
  `bukti_bayar` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_siswa_baru`, `spp`, `seragam`, `pangkal`, `biaya_admin`, `buku`, `kegiatan`, `sisa_bayar`, `bukti_bayar`, `status`, `date_time`) VALUES
(3, 'ALKH-0009', 300000, 300000, 5000000, 200000, 250000, 1000000, 0, 'ALKH-0009_Dashboard.png', 'lunas', '2023-08-11 22:55:11'),
(4, 'ALKH-0005', 300000, 300000, 5000000, 200000, 250000, 1000000, 0, 'ALKH-0005_List Pembayaran.png', 'lunas', '2023-08-11 22:55:11'),
(5, 'ALKH-0010', 300000, 300000, 2500000, 200000, 250000, 500000, 3000000, 'ALKH-0010_Dashboard.png', 'belum_lunas', '2023-08-11 22:55:11'),
(6, 'ALKH-0011', 300000, 300000, 5000000, 200000, 250000, 1000000, 0, 'ALKH-0011_surat penelitian dari sd.jpeg', 'lunas', '2023-08-11 22:54:50'),
(7, 'ALKH-0014', 300000, 300000, 5000000, 200000, 250000, 1000000, 0, 'ALKH-0014_RPL DIAGRAM-Use case.drawio (5).png', 'lunas', '2023-08-08 10:33:38'),
(16, 'ALKH-0017', 300000, 300000, 5000000, 200000, 250000, 1000000, 0, 'ALKH-0017_Dashboard.png', 'lunas', '2023-08-10 15:37:59'),
(18, 'ALKH-0018', 300000, 300000, 5000000, 200000, 250000, 1000000, 0, 'ALKH-0017_Dashboard.png', 'lunas', '2023-08-10 21:15:20'),
(19, 'ALKH-0020', 300000, 300000, 5000000, 200000, 250000, 1000000, 0, 'ALKH-0020_Report copy.png', 'lunas', '2023-08-11 10:23:28'),
(20, '', 0, 0, 0, 0, 0, 0, 7050000, '', 'lunas', '2023-08-12 10:01:33'),
(21, 'ALKH-0021', 300000, 300000, 5000000, 200000, 250000, 1000000, 0, 'ALKH-0021_Report copy.png', 'lunas', '2023-08-12 10:06:54'),
(22, 'ALKH-0022', 300000, 300000, 5000000, 200000, 250000, 1000000, 0, 'ALKH-0022_Report copy.png', 'lunas', '2023-08-12 12:36:34'),
(23, 'ALKH-0023', 300000, 300000, 5000000, 200000, 250000, 1000000, 0, 'ALKH-0023_RPL DIAGRAM-ad user bayar.drawio.png', 'lunas', '2023-08-12 14:23:11'),
(24, 'ALKH-0024', 300000, 300000, 5000000, 200000, 250000, 1000000, 0, 'ALKH-0024_Report pembayaran.png', 'lunas', '2023-08-14 13:02:09'),
(25, 'ALKH-0025', 300000, 300000, 5000000, 200000, 250000, 1000000, 0, 'ALKH-0025_list user admin.png', 'lunas', '2023-08-14 13:19:11'),
(26, 'ALKH-0026', 300000, 300000, 5000000, 200000, 250000, 1000000, 0, 'ALKH-0026_contact us.png', 'lunas', '2023-08-14 22:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_siswa_baru`
--

CREATE TABLE `pendaftaran_siswa_baru` (
  `id_siswa_baru` varchar(11) NOT NULL,
  `nik_calon_siswa` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL,
  `no_handphone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kartu_keluarga` varchar(100) NOT NULL,
  `kia` varchar(100) NOT NULL,
  `akta_kelahiran` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran_siswa_baru`
--

INSERT INTO `pendaftaran_siswa_baru` (`id_siswa_baru`, `nik_calon_siswa`, `nama_lengkap`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `alamat_lengkap`, `no_handphone`, `email`, `kartu_keluarga`, `kia`, `akta_kelahiran`, `date_time`) VALUES
('ALKH-0001', '0980121111', 'eka yudistika', 'Laki-laki', 'Jakarta', '2023-06-15', 'Gang Jengki Jl. Al Falah No 11A RT 006 RW 002', '0980121111', 'ekayudistika5@gmail.com', '', '', '', '2023-08-08 22:53:15'),
('ALKH-0002', '123123081923', 'camur 1', 'Laki-laki', 'Jakarta', '2020-12-10', 'Gang Jengki Jl. Al Falah No 11A RT 006 RW 002', '000111', 'eka@eka.com', '', '', '', '2023-08-09 22:53:43'),
('ALKH-0003', '123123081924123123', 'asdsadasdasd', 'perempuan', 'asdasdas', '2023-07-10', 'asdasd', '000111', 'eka@eka.com', 'KK_123123081924123123_asda.png', 'KIA_123123081924123123_asa.png', 'AKTA_123123081924123123_asdas.png', '2023-08-11 22:53:43'),
('ALKH-0004', '1i92832838177137', 'yumna ', 'perempuan', 'jakarta', '2001-09-15', 'jalan korea 124', '818181818', 'septisepti@gmail.com', 'KK_1i92832838177137_RPL DIAGRAM-ad user tes.drawio (1).png', 'KIA_1i92832838177137_RPL DIAGRAM-dekomposisi.drawio (3).png', 'AKTA_1i92832838177137_RPL DIAGRAM-ad admin.drawio (2).png', '2023-08-11 22:53:43'),
('ALKH-0005', '91919287434736', 'sesil', 'perempuan', 'bandung', '2001-02-19', 'jalan 1212', '818181818', 'septisepti@gmail.com', 'KK_91919287434736_RPL DIAGRAM-ad admin.drawio (2).png', 'KIA_91919287434736_RPL DIAGRAM-ad user tes.drawio (1).png', 'AKTA_91919287434736_RPL DIAGRAM-ad admin.drawio (2).png', '2023-08-11 22:53:43'),
('ALKH-0007', '786283647', 'Laila Murder', 'perempuan', 'Jakarta', '2020-08-10', 'Jalan akhirat', '0877676552525', 'sarahsarah@gmail.com', 'KK_786283647_Latar Belakang Virtual Animasi Kreatif Bersulang Hijau.png', 'KIA_786283647_Dashboard.png', 'AKTA_786283647_List Pendaftar.png', '2023-08-11 22:53:43'),
('ALKH-0009', '376487587846973987', 'Sasya', 'perempuan', 'Bandung', '2002-02-28', 'jalan bandung braga', '09888987644', 'somisomi@gmail.com', 'KK_376487587846973987_Dashboard (1).png', 'KIA_376487587846973987_Lembar Penilaian Anggota (1)_page-0006.jpg', 'AKTA_376487587846973987_Lembar Penilaian Anggota (1)_page-0008.jpg', '2023-08-11 22:54:05'),
('ALKH-0010', '68723868764837487268762', 'bambang', 'lakilaki', 'jakarta', '2003-04-10', 'jalan kemandoran', '7878373464736', 'nana@gmail.com', 'KK_68723868764837487268762_List Pembayaran.png', 'KIA_68723868764837487268762_Report copy.png', 'AKTA_68723868764837487268762_Login Admin.png', '2023-08-11 22:54:13'),
('ALKH-0011', '12346', 'Sofyan', 'lakilaki', 'jakarta', '2015-12-08', 'Kubis', '08121334400900', 'echalleo@gmail.com', 'KK_12346_Report copy.png', 'KIA_12346_Manage User.png', 'AKTA_12346_Login Admin.png', '2023-08-06 23:17:10'),
('ALKH-0012', '24827364736', 'zidan', 'lakilaki', 'Jakarta', '2002-04-23', 'jalan cililitan', '08263274627467', 'alma@gmail.com', 'KK_24827364736_Report copy.png', 'KIA_24827364736_Dashboard.png', 'AKTA_24827364736_Report.png', '2023-08-07 20:05:41'),
('ALKH-0013', '283274367634876387', 'jungkuk', 'lakilaki', 'korea', '2002-02-10', 'jalan masjid raaya', '375847626376', 'levina@gmail.com', 'KK_283274367634876387_List Pembayaran.png', 'KIA_283274367634876387_Manage User.png', 'AKTA_283274367634876387_Report copy.png', '2023-08-08 10:10:19'),
('ALKH-0014', '374837467632728', 'Mikha', 'perempuan', 'amerika', '2003-02-10', 'jalan gangnam', '375847626376', 'levina@gmail.com', 'KK_374837467632728_Registrasi.png', 'KIA_374837467632728_Report copy.png', 'AKTA_374837467632728_Report.png', '2023-08-08 10:15:21'),
('ALKH-0015', '3545950930493', 'Akbar ', 'lakilaki', 'jakarta', '2005-04-27', 'jalan amerika', '375847626376', 'levina@gmail.com', 'KK_3545950930493_Report.png', 'KIA_3545950930493_Dashboard.png', 'AKTA_3545950930493_List Pendaftar.png', '2023-08-08 10:38:45'),
('ALKH-0016', '198392839282998', 'lala pooh', 'perempuan', ' jakarta', '2005-03-10', 'jalan mabrur', '1781728721', 'lala@gmail.com', 'KK_198392839282998_Report copy.png', 'KIA_198392839282998_Dashboard.png', 'AKTA_198392839282998_Report.png', '2023-08-10 15:26:09'),
('ALKH-0017', '37488763287628732', 'deri ', 'lakilaki', 'jakarta', '2005-05-10', 'gang merdeka', '1781728721', 'lala@gmail.com', 'KK_37488763287628732_Registrasi.png', 'KIA_37488763287628732_Report copy.png', 'AKTA_37488763287628732_Dashboard.png', '2023-08-10 15:32:21'),
('ALKH-0018', '2838742864276872', 'Bayu', 'lakilaki', 'jakarta', '2004-05-20', 'jalan raya', '1781728721', 'lala@gmail.com', 'KK_2838742864276872_Manage User.png', 'KIA_2838742864276872_Registrasi.png', 'AKTA_2838742864276872_List Pembayaran.png', '2023-08-10 19:28:31'),
('ALKH-0019', '139827732', 'ayon', 'perempuan', 'amerika', '2006-05-29', 'korea', '1781728721', 'lala@gmail.com', 'KK_139827732_Report copy.png', 'KIA_139827732_Dashboard.png', 'AKTA_139827732_Registrasi.png', '2023-08-10 20:25:35'),
('ALKH-0020', '374982364632762', 'ervina', 'perempuan', 'Jakarta', '2006-04-23', 'jalan anu', '375847626376', 'levina@gmail.com', 'KK_374982364632762_List Pembayaran.png', 'KIA_374982364632762_Dashboard.png', 'AKTA_374982364632762_Manage User.png', '2023-08-11 10:09:24'),
('ALKH-0021', '738862739873289', 'rara mira', 'perempuan', 'jakarta', '2007-04-10', 'jakarta timur', '43673629291', 'rara@gmail.com', 'KK_738862739873289_Report copy.png', 'KIA_738862739873289_Dashboard.png', 'AKTA_738862739873289_Manage User.png', '2023-08-12 09:52:51'),
('ALKH-0022', '27382627', 'cut dhanti', 'perempuan', ' jakarta', '2000-02-10', 'jalan jengki', '092837664772', 'cutdanti@gmail.com', 'KK_27382627_Registrasi.png', 'KIA_27382627_Dashboard.png', 'AKTA_27382627_Dashboard.png', '2023-08-12 12:34:21'),
('ALKH-0023', '8765543210909', 'zoni', 'lakilaki', 'Jakarta', '2023-08-10', 'Kubis', '08121334400900', 'echalleo@gmail.com', 'KK_8765543210909_Login Admin.png', 'KIA_8765543210909_List Pembayaran.png', 'AKTA_8765543210909_Dashboard.png', '2023-08-12 14:16:17'),
('ALKH-0024', '2325532762767', 'Rizki iki', 'lakilaki', 'jakarta', '2007-05-25', 'jalan ikan', '32823782632', 'rizki@gmail.com', 'KK_2325532762767_Report pembayaran.png', 'KIA_2325532762767_Dashboard admin.png', 'AKTA_2325532762767_Review Pendaftaran.png', '2023-08-14 13:00:18'),
('ALKH-0025', '2732726726', 'husen', 'lakilaki', 'jakarta', '2005-02-10', 'jalan hias', '32823782632', 'rizki@gmail.com', 'KK_2732726726_Dashboard admin.png', 'KIA_2732726726_Report pembayaran.png', 'AKTA_2732726726_Report Pendaftar.png', '2023-08-14 13:17:52'),
('ALKH-0026', '273822876726', 'nuri', 'lakilaki', 'jakarta', '2005-09-02', 'jalan jalan', '08121334400900', 'echalleo@gmail.com', 'KK_273822876726_biodata ibu.png', 'KIA_273822876726_contact us.png', 'AKTA_273822876726_contact us.png', '2023-08-14 22:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `status_review`
--

CREATE TABLE `status_review` (
  `id_review` int(11) NOT NULL,
  `id_siswa_baru` varchar(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_review`
--

INSERT INTO `status_review` (`id_review`, `id_siswa_baru`, `keterangan`, `status`) VALUES
(1, 'ALKH-0002', 'okay', 'lengkap'),
(3, 'ALKH-0001', 'ok', 'lengkap'),
(4, 'ALKH-0003', 'asek', 'lengkap'),
(5, 'ALKH-0004', '', 'belum_lengkap'),
(6, 'ALKH-0005', '', 'lengkap'),
(7, 'ALKH-0006', 'sudah diperbaharui', 'lengkap'),
(8, 'ALKH-0007', 'hoke', 'lengkap'),
(9, 'ALKH-0009', '', 'lengkap'),
(11, 'ALKH-0010', 'oke', 'lengkap'),
(12, 'ALKH-0011', 'ok', 'lengkap'),
(13, 'ALKH-0012', 'as', 'lengkap'),
(18, 'ALKH-0013', '', 'lengkap'),
(19, 'ALKH-0014', '', 'lengkap'),
(20, 'ALKH-0015', '', 'lengkap'),
(21, 'ALKH-0017', 'oke', 'belum_lengkap'),
(22, 'ALKH-0018', 'mantap', 'lengkap'),
(23, 'ALKH-0019', '', 'lengkap'),
(24, 'ALKH-0020', 'bagus', 'lengkap'),
(25, 'ALKH-0021', 'hoke', 'lengkap'),
(26, 'ALKH-0022', 'okedeh', 'lengkap'),
(27, 'ALKH-0023', 'ok', 'lengkap'),
(28, 'ALKH-0024', 'mantap', 'lengkap'),
(29, 'ALKH-0025', '', 'lengkap'),
(30, 'ALKH-0026', '', 'lengkap');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `no_hp`, `email`, `password`, `nama_lengkap`) VALUES
(1, '081871', 'septi@septi.com', '827ccb0eea8a706c4c34a16891f84e7b', 'septi'),
(3, '000111', 'eka@eka.com', '827ccb0eea8a706c4c34a16891f84e7b', 'eka'),
(4, '091823', 'septianingsih330@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'septi'),
(5, '0980121111', 'ekayudistika5@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(23, '089619307474', 'nafisah@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(24, '000111125111', 'nafisahaa@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(27, '818181818', 'septisepti@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(28, '0877676552525', 'sarahsarah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(29, '09888987644', 'somisomi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(30, '7878373464736', 'nana@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(31, '08121334400900', 'echalleo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(32, '08263274627467', 'alma@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(33, '375847626376', 'levina@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(34, '1781728721', 'lala@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'lala pooh'),
(35, '43673629291', 'rara@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'rara mira'),
(36, '092837664772', 'cutdanti@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'cut danti'),
(38, '32823782632', 'rizki@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'rizki iki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_orang_tua`
--
ALTER TABLE `data_orang_tua`
  ADD PRIMARY KEY (`id_data_orang_tua`);

--
-- Indexes for table `data_siswa_sdit`
--
ALTER TABLE `data_siswa_sdit`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `hasil_test`
--
ALTER TABLE `hasil_test`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pendaftaran_siswa_baru`
--
ALTER TABLE `pendaftaran_siswa_baru`
  ADD PRIMARY KEY (`id_siswa_baru`);

--
-- Indexes for table `status_review`
--
ALTER TABLE `status_review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_hp` (`no_hp`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_orang_tua`
--
ALTER TABLE `data_orang_tua`
  MODIFY `id_data_orang_tua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `hasil_test`
--
ALTER TABLE `hasil_test`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `status_review`
--
ALTER TABLE `status_review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
