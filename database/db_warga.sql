-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jun 2019 pada 16.50
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_warga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `nomor_keluarga` varchar(16) NOT NULL,
  `id_kepala_keluarga` int(11) DEFAULT NULL,
  `alamat_keluarga` text NOT NULL,
  `dusun_keluarga` varchar(20) NOT NULL,
  `desa_kelurahan_keluarga` varchar(30) NOT NULL,
  `kecamatan_keluarga` varchar(30) NOT NULL,
  `kabupaten_kota_keluarga` varchar(30) NOT NULL,
  `provinsi_keluarga` varchar(30) NOT NULL,
  `negara_keluarga` varchar(30) NOT NULL,
  `rt_keluarga` varchar(3) NOT NULL,
  `rw_keluarga` varchar(3) NOT NULL,
  `kode_pos_keluarga` varchar(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`id_keluarga`, `nomor_keluarga`, `id_kepala_keluarga`, `alamat_keluarga`, `dusun_keluarga`, `desa_kelurahan_keluarga`, `kecamatan_keluarga`, `kabupaten_kota_keluarga`, `provinsi_keluarga`, `negara_keluarga`, `rt_keluarga`, `rw_keluarga`, `kode_pos_keluarga`, `id_user`, `created_at`, `updated_at`) VALUES
(11, '10', 2, 'Kuningan', '', 'kng', 'kng', 'kng', 'jabar', 'Indonesia', '1', '1', '45515', 13, '2016-09-15 12:59:41', '2016-09-15 12:59:41'),
(20, '13', 9, 'Ciawi', '', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'Indonesia', '01', '01', '4555', 11, '2017-12-17 18:41:23', '2017-12-17 18:41:23'),
(21, '12', 3, 'Kuningan', '', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'Indonesia', '01', '01', '45515', 11, '2017-12-17 18:40:10', '2017-12-17 18:40:10'),
(22, '14', 5, 'Kuningan', '', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'Indonesia', '01', '01', '45515', 11, '2017-12-17 13:20:22', '0000-00-00 00:00:00'),
(30, '16', 30, '-', '', '-', '-', '-', '-', '-', '-', '-', '-', 13, '2018-01-03 19:15:18', '0000-00-00 00:00:00'),
(31, '320809160198004', 34, 'Windujanten', '', '-', '-', '-', '-', '-', '-', '-', '-', 13, '2018-01-17 17:51:56', '0000-00-00 00:00:00'),
(32, '3208091601700015', 35, 'Cijoho', '', '-', '-', '-', '-', '-', '-', '-', '-', 13, '2018-01-17 17:53:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi_keluar`
--

CREATE TABLE `mutasi_keluar` (
  `id_mutasi` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `alamat_mutasi` text NOT NULL,
  `desa_kelurahan_mutasi` varchar(20) NOT NULL,
  `kabupaten_kota_mutasi` varchar(20) NOT NULL,
  `provinsi_mutasi` varchar(20) NOT NULL,
  `negara_mutasi` varchar(20) NOT NULL,
  `dusun_mutasi` varchar(30) NOT NULL,
  `rt_mutasi` varchar(3) NOT NULL,
  `rw_mutasi` varchar(3) NOT NULL,
  `kode_pos_mutasi` varchar(10) NOT NULL,
  `tanggal_pindah` date NOT NULL,
  `alasan_pindah` varchar(20) NOT NULL,
  `jenis_pindah` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `kecamatan_mutasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mutasi_keluar`
--

INSERT INTO `mutasi_keluar` (`id_mutasi`, `id_warga`, `alamat_mutasi`, `desa_kelurahan_mutasi`, `kabupaten_kota_mutasi`, `provinsi_mutasi`, `negara_mutasi`, `dusun_mutasi`, `rt_mutasi`, `rw_mutasi`, `kode_pos_mutasi`, `tanggal_pindah`, `alasan_pindah`, `jenis_pindah`, `created_at`, `updated_at`, `kecamatan_mutasi`) VALUES
(10, 16, '-', '-', '-', '-', '-', '-', '-', '-', '-', '2018-01-03', 'Kesehatan', 'Anggota Keluarga', '2018-01-03 14:08:57', '0000-00-00 00:00:00', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi_masuk`
--

CREATE TABLE `mutasi_masuk` (
  `id_mutasi_masuk` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `id_keluarga` int(11) NOT NULL,
  `dusun_masuk` varchar(30) NOT NULL,
  `rt_masuk` varchar(3) NOT NULL,
  `rw_masuk` varchar(3) NOT NULL,
  `alamat_asal` text NOT NULL,
  `tanggal_pindah` date NOT NULL,
  `alasan_pindah` varchar(20) NOT NULL,
  `jenis_kepindahan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mutasi_masuk`
--

INSERT INTO `mutasi_masuk` (`id_mutasi_masuk`, `id_warga`, `id_keluarga`, `dusun_masuk`, `rt_masuk`, `rw_masuk`, `alamat_asal`, `tanggal_pindah`, `alasan_pindah`, `jenis_kepindahan`) VALUES
(15, 18, 23, 'Tarikolot', '05', '01', '-', '2018-01-04', 'Perumahan', 'Anggota Keluarga'),
(16, 18, 23, 'Tarikolot', '05', '01', '-', '2018-01-04', 'Perumahan', 'Anggota Keluarga'),
(17, 30, 23, 'Tarikolot', '01', '01', '-', '2018-01-04', 'Keluarga', 'Anggota Keluarga'),
(24, 32, 31, 'Tarikolot', '02', '01', 'Windujanten', '2018-01-18', 'Keluarga', 'Anggota Keluarga'),
(25, 34, 31, 'Tarikolot', '02', '01', 'Windujanten', '2018-01-18', 'Keluarga', 'Anggota Keluarga'),
(26, 35, 32, 'Dukuh', '06', '01', 'Cijoho', '2018-01-18', 'Keluarga', 'Anggota Keluarga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelahiran`
--

CREATE TABLE `tbl_kelahiran` (
  `id_kelahiran` int(11) NOT NULL,
  `tgl_kelahiran` datetime NOT NULL,
  `nama_bayi` varchar(50) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `berat_bayi` varchar(10) DEFAULT NULL,
  `panjang_bayi` int(10) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `lokasi_lahir` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `id_keluarga` int(11) DEFAULT NULL,
  `penolong` varchar(25) NOT NULL,
  `id_warga` int(11) DEFAULT NULL,
  `id_surat` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelahiran`
--

INSERT INTO `tbl_kelahiran` (`id_kelahiran`, `tgl_kelahiran`, `nama_bayi`, `jk`, `berat_bayi`, `panjang_bayi`, `nama_ayah`, `nama_ibu`, `lokasi_lahir`, `tempat_lahir`, `id_keluarga`, `penolong`, `id_warga`, `id_surat`) VALUES
(2, '2017-12-21 00:00:00', 'Dejan Kecil', 'L', '3', 55, 'Dejan', 'Entah', 'Rumah Bersalin', 'Kuningan', 11, 'Bidan cantik', 10, NULL),
(3, '2017-12-22 00:00:00', 'Cihiro', 'P', '2,5', 55, 'Dejan', 'Entah', 'Bidan', 'Kuningan', 22, '', NULL, NULL),
(27, '2018-01-02 00:00:00', 'Yoshino', 'L', '3', 50, 'DD', 'MM', 'Bukan Rumah Bersalin', 'kuningan', 14, 'Entah', 12, 0),
(28, '2018-01-02 00:00:00', 'Yoshino', 'L', '3', 50, 'DD', 'MM', 'Bukan Rumah Bersalin', 'kuningan', 12, 'Entah', 13, 0),
(29, '2018-01-02 00:00:00', 'Yoshino yosuke', 'L', '3', 55, 'DD', 'DDD', 'Bukan Rumah Bersalin', 'kuningan', 14, 'Bidan cantik', 14, 0),
(30, '2018-01-02 00:00:00', 'Yoshino yosuke 2', 'L', '3', 55, 'DD', 'DDD', 'Bukan Rumah Bersalin', 'kuningan', 10, 'Bidan cantik', 15, 0),
(31, '2018-01-03 00:00:00', 'suryani', 'L', '3', 50, 'dejan', 'entah', 'Rumah Bersalin', 'kuningan', 14, 'Bidan cantik', 16, 0),
(32, '2018-01-04 00:00:00', 'Yani Suryani', 'L', '4', 55, 'Dejan', 'Duka', 'Rumah Bersalin', 'Kuningan', 10, 'Bidan cantik', 31, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_meninggal`
--

CREATE TABLE `tbl_meninggal` (
  `id_meninggal` int(11) NOT NULL,
  `tgl_meninggal` datetime NOT NULL,
  `sebab` varchar(50) DEFAULT NULL,
  `id_warga` int(11) DEFAULT NULL,
  `tempat_kematian` varchar(100) DEFAULT NULL,
  `nama_pelapor` varchar(100) DEFAULT NULL,
  `hubungan_pelapor` varchar(100) DEFAULT NULL,
  `id_surat` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_meninggal`
--

INSERT INTO `tbl_meninggal` (`id_meninggal`, `tgl_meninggal`, `sebab`, `id_warga`, `tempat_kematian`, `nama_pelapor`, `hubungan_pelapor`, `id_surat`) VALUES
(1, '2017-12-27 00:00:00', '-', 1, 'RS', 'Amin', 'Saudara', NULL),
(6, '2018-01-02 00:00:00', 'Sakit', 11, 'RS', 'pelapor', 'Duka', 0),
(7, '2018-01-02 00:00:00', 'Sakit', 13, '-', 'pelapor', 'Duka', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `username_user` varchar(20) NOT NULL,
  `password_user` varchar(32) NOT NULL,
  `keterangan_user` text NOT NULL,
  `status_user` enum('Admin','Kasi_Pemerintahan') NOT NULL,
  `desa_kelurahan_user` varchar(30) NOT NULL,
  `kecamatan_user` varchar(30) NOT NULL,
  `kabupaten_kota_user` varchar(30) NOT NULL,
  `provinsi_user` varchar(30) NOT NULL,
  `negara_user` varchar(30) NOT NULL,
  `rt_user` varchar(3) NOT NULL,
  `rw_user` varchar(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username_user`, `password_user`, `keterangan_user`, `status_user`, `desa_kelurahan_user`, `kecamatan_user`, `kabupaten_kota_user`, `provinsi_user`, `negara_user`, `rt_user`, `rw_user`, `created_at`, `updated_at`) VALUES
(1, 'otakcoding', 'admin', '202cb962ac59075b964b07152d234b70', 'admin di aplikasi pendataan warga', 'Admin', 'kebun jahe', 'binjai', 'medan', 'sumatera utara', 'Indonesia', '001', '002', '2017-10-19 06:31:17', '2017-10-19 06:31:17'),
(11, 'Kepala Desa', 'Admin', 'e3afed0047b08059d0fada10f400c1e5', '', 'Admin', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'Indonesia', '-', '-', '2019-06-16 14:48:53', '2017-12-15 04:30:43'),
(13, 'Kasi Pemerintahan', 'kasi_pemerintahan', '17131d43d1c41721e4daf4a9a6c85cda', 'Kasi Pemerintahan', 'Kasi_Pemerintahan', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'Indonesia', '', '', '2018-01-02 07:57:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `nik_warga` varchar(16) NOT NULL,
  `nama_warga` varchar(45) NOT NULL,
  `tempat_lahir_warga` varchar(30) NOT NULL,
  `tanggal_lahir_warga` date NOT NULL,
  `jenis_kelamin_warga` enum('L','P') NOT NULL,
  `alamat_ktp_warga` text NOT NULL,
  `alamat_warga` text NOT NULL,
  `desa_kelurahan_warga` varchar(30) NOT NULL,
  `kecamatan_warga` varchar(30) NOT NULL,
  `kabupaten_kota_warga` varchar(30) NOT NULL,
  `provinsi_warga` varchar(30) NOT NULL,
  `negara_warga` varchar(30) NOT NULL,
  `dusun_warga` enum('Dukuh','Tarikolot') NOT NULL,
  `rt_warga` varchar(3) NOT NULL,
  `rw_warga` varchar(3) NOT NULL,
  `agama_warga` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir_warga` varchar(20) NOT NULL,
  `pekerjaan_warga` varchar(20) NOT NULL,
  `status_warga` enum('Tinggal Tetap','Meninggal','Pindah Datang','Pindah Keluar') NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id_warga`, `nik_warga`, `nama_warga`, `tempat_lahir_warga`, `tanggal_lahir_warga`, `jenis_kelamin_warga`, `alamat_ktp_warga`, `alamat_warga`, `desa_kelurahan_warga`, `kecamatan_warga`, `kabupaten_kota_warga`, `provinsi_warga`, `negara_warga`, `dusun_warga`, `rt_warga`, `rw_warga`, `agama_warga`, `pendidikan_terakhir_warga`, `pekerjaan_warga`, `status_warga`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '3208090101960089', 'sulaiman', 'Dukuhdalem', '1985-02-26', 'L', 'Dukuhdalem', 'Dukuhdalem', 'Dukuh', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'Indonesia', 'Dukuh', '001', '002', 'Islam', 'SD', 'Petani', 'Tinggal Tetap', 1, '2018-01-17 15:51:54', '2018-01-17 15:51:54'),
(2, '3208090511780005', 'Anang', 'Kuningan', '1978-11-05', 'L', 'Dukuhdalem', 'Dukuhdalem', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'Indonesia', 'Tarikolot', '02', '01', 'Islam', 'SMP', 'pedagang', 'Tinggal Tetap', 11, '2018-01-17 15:53:24', '2018-01-17 15:53:24'),
(3, '35', 'AB', 'Kuningan', '2017-12-19', 'L', 'kng', 'kng', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'Indonesia', 'Tarikolot', '01', '01', 'Islam', 'SD', 'Mahasiswa', 'Tinggal Tetap', 11, '2017-12-27 14:44:31', '2017-12-27 14:44:31'),
(4, '34', 'AA', 'Kuningan', '2006-12-05', 'P', 'kuningan', 'kuningan', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'Indonesia', '', '-', '-', 'Islam', 'SMA', 'pedagang', '', 11, '2017-12-15 14:42:26', '2017-12-15 14:42:26'),
(5, '33', 'CC', 'Kuningan', '2001-04-04', 'L', 'Kuningan', 'Kuningan', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'Indonesia', '', '05', '01', 'Islam', 'SMA', 'Mahasiswa', '', 11, '2017-12-15 15:12:52', '2017-12-15 15:12:52'),
(7, '12', 'Malik', '-', '2017-12-17', 'L', '-', '-', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'Indonesia', 'Tarikolot', '01', '01', 'Islam', 'SMA', 'Mahasiswa', '', 11, '2017-12-17 07:22:08', '2017-12-17 07:22:08'),
(9, '124', 'DD', 'Kuningan', '2017-12-17', 'L', 'kng', 'kng', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'Indonesia', 'Dukuh', '01', '01', 'Islam', 'SMP', 'pedagang', 'Pindah Datang', 11, '2017-12-26 14:38:42', '2017-12-26 14:38:42'),
(10, '13', 'AC', 'Bandung', '1996-01-01', 'L', 'Windusengkahan', 'Windusengkahan', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'Indonesia', 'Dukuh', '06', '01', 'Islam', 'SMA', 'Mahasiswa', '', 11, '2017-12-17 17:42:00', '0000-00-00 00:00:00'),
(11, '677', 'Baim', 'kuningan', '2017-12-29', 'L', 'Ciawi', 'Ciawi', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'INDONESIA', 'Dukuh', '01', '01', 'Islam', 'Tidak Sekolah', '-', 'Meninggal', 0, '2018-01-02 13:32:53', '2018-01-02 12:42:31'),
(12, '201111', 'Yoshino', 'kuningan', '2018-01-02', 'L', 'Kuningan', 'Kuningan', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'INDONESIA', 'Dukuh', '01', '05', 'Islam', 'Tidak Sekolah', '-', 'Meninggal', 0, '2018-01-02 08:08:59', '2018-01-02 08:08:59'),
(13, '5a4b0bc3c0e9b', 'Yoshino', 'kuningan', '2018-01-02', 'L', 'Kuningan', 'Kuningan', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'INDONESIA', 'Tarikolot', '01', '01', 'Islam', '-', '-', 'Tinggal Tetap', 0, '2018-01-02 15:35:23', '2018-01-02 15:35:23'),
(14, '5a4b2d7bca703', 'Yoshino yosuke', 'kuningan', '2018-01-02', 'L', 'Kuningan', 'Kuningan', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'INDONESIA', 'Dukuh', '01', '05', 'Islam', '-', '-', 'Tinggal Tetap', 0, '2018-01-02 12:15:40', '2018-01-02 12:15:40'),
(15, '2311', 'Yoshino yosuke 2', 'kuningan', '2018-01-02', 'L', 'Kuningan', 'Kuningan', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'INDONESIA', 'Dukuh', '01', '02', 'Islam', '-', '-', 'Pindah Keluar', 0, '2018-01-17 17:16:55', '2018-01-02 12:42:45'),
(16, '5a4c748795baa', 'suryani', 'kuningan', '2018-01-03', 'L', 'Kuningan', 'Kuningan', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'INDONESIA', '', '01', '05', 'Islam', '-', '-', 'Pindah Keluar', 0, '2018-01-03 14:08:57', '0000-00-00 00:00:00'),
(17, '9988', 'Asu', 'Kuningan', '2018-01-03', 'L', '', '', 'Dukuhdalem', 'Ciawi Gebang', 'Kuningan', 'Jawa Barat', 'Indonesia', 'Tarikolot', '01', '01', 'Islam', 'Tidak Sekolah', 'pedagang', 'Pindah Datang', 13, '2018-01-03 18:31:36', '2018-01-03 18:31:36'),
(28, '5a4d2b4cdb7c5', 'aaaaa', 'Kuningan', '2018-01-04', 'L', '', '', '-', '-', '-', '-', '-', '', '-', '-', '', '-', '-', 'Pindah Datang', 13, '2018-01-03 19:13:16', '0000-00-00 00:00:00'),
(29, '5a4d2b964b148', 'aaaaa', 'Kuningan', '2018-01-04', 'L', '', '', '-', '-', '-', '-', '-', '', '-', '-', '', '-', '-', 'Pindah Datang', 13, '2018-01-03 19:14:30', '0000-00-00 00:00:00'),
(30, '88777', 'bbb', 'Kuningan', '2018-01-04', 'L', '', '', '-', '-', '-', '-', '-', 'Tarikolot', '-', '-', 'Islam', '-', '-', 'Pindah Datang', 13, '2018-01-03 19:17:24', '2018-01-03 19:17:24'),
(31, '5a4db39e707b3', 'Yani Suryani', 'Kuningan', '2018-01-04', 'L', 'Kuningan', 'Kuningan', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'INDONESIA', 'Dukuh', '01', '02', 'Islam', '-', '-', 'Tinggal Tetap', 0, '2018-01-04 04:54:54', '0000-00-00 00:00:00'),
(34, '3208090511780005', 'Darmawan', 'Kuningan', '1970-01-13', 'L', 'Windujanten', 'Windujanten', 'Dukuhdalem', 'Ciawigebang', 'Kuningan', 'Jawa Barat', 'Indonesia', 'Tarikolot', '02', '01', 'Islam', 'SMP', 'Wiraswasta', 'Pindah Datang', 13, '2018-01-17 17:55:18', '2018-01-17 17:55:18'),
(35, '5a5f8d8243407', 'Dasuki', 'Cijoho', '1968-03-05', 'L', 'Cijoho', 'Cijoho', '-', '-', '-', '-', '-', 'Dukuh', '06', '01', '', '-', '-', 'Pindah Datang', 13, '2018-01-17 17:53:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga_has_kartu_keluarga`
--

CREATE TABLE `warga_has_kartu_keluarga` (
  `id_warga` int(11) NOT NULL,
  `id_keluarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warga_has_kartu_keluarga`
--

INSERT INTO `warga_has_kartu_keluarga` (`id_warga`, `id_keluarga`) VALUES
(1, 11),
(9, 11),
(12, 11),
(15, 11),
(31, 11),
(7, 20),
(10, 20),
(3, 21),
(13, 21),
(14, 22),
(16, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id_keluarga`),
  ADD UNIQUE KEY `FK_keluarga_penduduk` (`id_kepala_keluarga`) USING BTREE,
  ADD UNIQUE KEY `id_kepala_keluarga` (`id_kepala_keluarga`) USING BTREE,
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `mutasi_keluar`
--
ALTER TABLE `mutasi_keluar`
  ADD PRIMARY KEY (`id_mutasi`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `mutasi_masuk`
--
ALTER TABLE `mutasi_masuk`
  ADD PRIMARY KEY (`id_mutasi_masuk`),
  ADD KEY `id_warga` (`id_warga`),
  ADD KEY `id_keluarga` (`id_keluarga`);

--
-- Indexes for table `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`),
  ADD KEY `id_surat` (`id_surat`),
  ADD KEY `id_warga` (`id_warga`),
  ADD KEY `id_keluarga` (`id_keluarga`);

--
-- Indexes for table `tbl_meninggal`
--
ALTER TABLE `tbl_meninggal`
  ADD PRIMARY KEY (`id_meninggal`),
  ADD KEY `id_surat` (`id_surat`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
  ADD UNIQUE KEY `id_warga` (`id_warga`),
  ADD KEY `id_penduduk` (`id_warga`,`id_keluarga`),
  ADD KEY `warga_has_kartu_keluarga_ibfk_2` (`id_keluarga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `mutasi_keluar`
--
ALTER TABLE `mutasi_keluar`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mutasi_masuk`
--
ALTER TABLE `mutasi_masuk`
  MODIFY `id_mutasi_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  MODIFY `id_kelahiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_meninggal`
--
ALTER TABLE `tbl_meninggal`
  MODIFY `id_meninggal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD CONSTRAINT `kartu_keluarga_ibfk_1` FOREIGN KEY (`id_kepala_keluarga`) REFERENCES `warga` (`id_warga`),
  ADD CONSTRAINT `kartu_keluarga_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_meninggal`
--
ALTER TABLE `tbl_meninggal`
  ADD CONSTRAINT `tbl_meninggal_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
