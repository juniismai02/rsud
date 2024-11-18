-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2024 at 09:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rsud`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(5) NOT NULL,
  `tema` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tema_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_agenda` text COLLATE latin1_general_ci NOT NULL,
  `tempat` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pengirim` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `tgl_posting` date NOT NULL,
  `jam` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT 1,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(5) NOT NULL,
  `jdl_album` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `album_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `gbr_album` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `hits_album` int(5) NOT NULL DEFAULT 1,
  `tgl_posting` date NOT NULL,
  `jam` time NOT NULL,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `jdl_album`, `album_seo`, `keterangan`, `gbr_album`, `aktif`, `hits_album`, `tgl_posting`, `jam`, `hari`, `username`) VALUES
(54, 'Gallery Kami', 'gallery-kami', '<p>Gallery Kami Footer</p>', 'Group_122.png', 'Y', 49, '2024-01-25', '23:45:55', 'Kamis', 'admin_diskominfo'),
(53, 'Header Beranda', 'header-beranda', '<p>Cover Header Beranda</p>', 'Group_123.png', 'Y', 26, '2024-01-24', '09:42:44', 'Rabu', 'admin_diskominfo');

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `id_background` int(5) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`id_background`, `gambar`) VALUES
(1, 'blue');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sub_judul` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `judul_seo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `headline` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `utama` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `isi_berita` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keterangan_gambar` text COLLATE latin1_general_ci NOT NULL,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT 1,
  `tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id_download` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama_file` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `hits` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(5) NOT NULL,
  `id_album` int(5) NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `jdl_gallery` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gallery_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `gbr_gallery` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_album`, `username`, `jdl_gallery`, `gallery_seo`, `keterangan`, `gbr_gallery`) VALUES
(280, 53, 'admin_diskominfo', 'Banner Pematangsiantar', 'banner-pematangsiantar', 'Banner Pematangsiantar', 'image_122.png'),
(281, 53, 'admin_diskominfo', 'Banner Smart City', 'banner-smart-city', '<p>Banner Smart City<br></p>', 'image_121.png'),
(282, 53, 'admin_diskominfo', 'Banner WBS', 'banner-wbs', '<p>Banner WBS<br></p>', 'banner_wbs.png'),
(283, 53, 'admin_diskominfo', 'Banner Pengaduan Masyarakat', 'banner-pengaduan-masyarakat', '<p>Banner Pengaduan Masyarakat<br></p>', 'banner_pengaduan_masyarakat1.png');

-- --------------------------------------------------------

--
-- Table structure for table `halamanstatis`
--

CREATE TABLE `halamanstatis` (
  `id_halaman` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `judul_seo` varchar(100) NOT NULL,
  `isi_halaman` text NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT 1,
  `jam` time NOT NULL,
  `hari` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halamanstatis`
--

INSERT INTO `halamanstatis` (`id_halaman`, `judul`, `judul_seo`, `isi_halaman`, `tgl_posting`, `gambar`, `username`, `dibaca`, `jam`, `hari`) VALUES
(53, 'Struktu Organisasi', 'struktu-organisasi', '<p style=\"text-align: center;\"><br></p>', '2024-01-27', 'SO_KominfoSiantar_Update.png', 'admin_diskominfo', 86, '14:00:52', 'Sabtu'),
(56, 'Kontak', 'kontak', '<p style=\"text-align: center; \"><br></p>', '2024-01-27', 'Screenshot_2024-02-05_at_13_53_1.png', 'admin_diskominfo', 133, '14:11:33', 'Sabtu'),
(54, 'Tugas dan Fungsi', 'tugas-dan-fungsi', '<p style=\"text-align: center; box-sizing: inherit; margin-right: 0px; margin-bottom: 2rem; margin-left: 0px; padding: 0px; color: rgb(24, 24, 24);\" noto=\"\" sans\",=\"\" -apple-system,=\"\" \"system-ui\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" center;\"=\"\"><br></p>', '2024-01-27', 'Logo_kota_pematangsiantar-238x300-1.png', 'admin_diskominfo', 55, '14:02:29', 'Sabtu'),
(52, 'Kata Sambutan', 'kata-sambutan', '<p style=\"margin-right: 0px; margin-bottom: 2rem; margin-left: 0px; padding: 0px; color: rgb(122, 122, 122); font-family: Roboto, sans-serif; text-align: justify;\"><br></p>', '2024-01-22', 'Group_342.png', 'admin_diskominfo', 351, '18:09:28', 'Senin'),
(55, 'Visi Misi', 'visi-misi', '<p style=\"text-align: center; box-sizing: inherit; margin-right: 0px; margin-bottom: 2rem; margin-left: 0px; padding: 0px; color: rgb(24, 24, 24);\" noto=\"\" sans\",=\"\" -apple-system,=\"\" \"system-ui\",=\"\" arial,=\"\" sans-serif;\"=\"\"><br></p>', '2024-01-27', 'Group_353.png', 'admin_diskominfo', 49, '14:03:34', 'Sabtu'),
(58, 'Layanan', 'layanan', '<p style=\"text-align: center;\"><br></p>', '2024-01-27', 'Screenshot_2024-02-05_at_13_45_18-min.png', 'admin_diskominfo', 80, '15:35:26', 'Sabtu'),
(60, 'WHISTLE BLOWING SYSTEM (WBS)', 'whistle-blowing-system-wbs', '<p style=\"color: rgb(102, 102, 102); font-family: Poppins, Arial, sans-serif; text-align: center;\"><a href=\"https://bit.ly/4ecPMXq\" target=\"_blank\" style=\"color: rgb(253, 95, 0); background-color: rgb(255, 255, 255); transition: 0.3s;\"><br class=\"Apple-interchange-newline\">https://bit.ly/4ecPMXq</a><br></p><p style=\"color: rgb(102, 102, 102); font-family: Poppins, Arial, sans-serif; text-align: center;\"><img src=\"https://inspektorat.pematangsiantar.go.id/asset/images/wbs.jpg\" style=\"width: 678.492px;\"></p>', '2024-10-21', 'banner_wbs.png', 'admin_diskominfo', 3, '11:36:15', 'Senin'),
(61, 'Pengaduan Masyarakat', 'pengaduan-masyarakat', '<h3 class=\"mb-4 text-center\" style=\"font-family: Poppins, Arial, sans-serif; line-height: 1.5; color: rgba(0, 0, 0, 0.8);\"><p source=\"\" sans=\"\" pro\",=\"\" -apple-system,=\"\" \"system-ui\",=\"\" \"segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" ui=\"\" symbol\";=\"\" font-size:=\"\" 16px;\"=\"\" style=\"color: rgb(0, 0, 0);\"><span style=\"color: rgba(0, 0, 0, 0.87); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: medium; text-align: start; white-space: pre;\"><a href=\"https://bit.ly/4cJEQPS\" target=\"_blank\">https://bit.ly/4cJEQPS</a></span><br></p><p source=\"\" sans=\"\" pro\",=\"\" -apple-system,=\"\" \"system-ui\",=\"\" \"segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" ui=\"\" symbol\";=\"\" font-size:=\"\" 16px;=\"\" text-align:=\"\" left;\"=\"\" style=\"color: rgb(0, 0, 0);\"><img src=\"https://inspektorat.pematangsiantar.go.id/asset/images/dumas.jpg\" style=\"width: 967.406px;\"></p></h3>', '2024-10-21', 'banner_pengaduan_masyarakat1.png', 'admin_diskominfo', 4, '11:36:48', 'Senin');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id_header` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE `hubungi` (
  `id_hubungi` int(5) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `subjek` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `dibaca` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `lampiran` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(5) NOT NULL,
  `nama_website` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `facebook` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `rekening` varchar(100) NOT NULL,
  `no_telp` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `meta_deskripsi` varchar(250) NOT NULL,
  `meta_keyword` varchar(250) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `maps` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_website`, `email`, `url`, `facebook`, `rekening`, `no_telp`, `meta_deskripsi`, `meta_keyword`, `favicon`, `maps`) VALUES
(1, 'Website Resmi Rumah Sakit Umum Daerah (RSUD) dr. Djasamen Saragih Kota Pematangsiantar', 'rsud@pematangsiantar.go.id', 'https://rsud.pematangsiantar.go.id/', 'https://www.instagram.com/rsud/', '2022', '-', 'Selamat Datang di Website Resmi Rumah Sakit Umum Daerah (RSUD) dr. Djasamen Saragih Kota Pematangsiantar', 'RSUD Dr. Djasamen Saragih, Kota Pematangsiantar, Pemerintah Kota, Siantar,Rumah Sakit Umum Daerah (RSUD) dr. Djasamen Saragih Kota Pematangsiantar', 'logo.png', 'https://www.google.com/maps/place/Pemko+Pematangsiantar/@2.956222,99.0586848,17z/data=!4m14!1m7!3m6!1s0x3031853c30b24d1b:0xd3ec5c2f25fde5c9!2sPemko+Pematangsiantar!8m2!3d2.956222!4d99.0612597!16s%2Fg%2F11m42rfswc!3m5!1s0x3031853c30b24d1b:0xd3ec5c2f25fde5c9!8m2!3d2.956222!4d99.0612597!16s%2Fg%2F11m42rfswc?entry=ttu');

-- --------------------------------------------------------

--
-- Table structure for table `iklanatas`
--

CREATE TABLE `iklanatas` (
  `id_iklanatas` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `source` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iklantengah`
--

CREATE TABLE `iklantengah` (
  `id_iklantengah` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `source` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `posisi` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `katajelek`
--

CREATE TABLE `katajelek` (
  `id_jelek` int(11) NOT NULL,
  `kata` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `ganti` varchar(60) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `katajelek`
--

INSERT INTO `katajelek` (`id_jelek`, `kata`, `username`, `ganti`) VALUES
(4, 'sex', '', 's**'),
(2, 'bajingan', '', 'b*******'),
(3, 'bangsat', '', 'b******'),
(5, 'fuck', 'admin', 'f**k'),
(6, 'pantat', 'admin', 'p****t');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `sidebar` int(10) NOT NULL,
  `gambar_utama` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `username`, `kategori_seo`, `aktif`, `sidebar`, `gambar_utama`) VALUES
(61, 'Pengumuman', 'admin_diskominfo', 'pengumuman', 'Y', 1, 'Group_345.png'),
(62, 'Berita Unggulan', 'admin_diskominfo', 'berita-unggulan', 'Y', 2, 'Group_3453.png'),
(63, 'Berita Terbaru', 'admin_diskominfo', 'berita-terbaru', 'Y', 0, 'Group_3462.png');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(5) NOT NULL,
  `id_berita` int(5) NOT NULL,
  `nama_komentar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_komentar` text COLLATE latin1_general_ci NOT NULL,
  `tgl` date NOT NULL,
  `jam_komentar` time NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `komentarvid`
--

CREATE TABLE `komentarvid` (
  `id_komentar` int(5) NOT NULL,
  `id_video` int(5) NOT NULL,
  `nama_komentar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_komentar` text COLLATE latin1_general_ci NOT NULL,
  `tgl` date NOT NULL,
  `jam_komentar` time NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id_logo` int(5) NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id_logo`, `gambar`) VALUES
(15, 'Group_222.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(5) NOT NULL,
  `id_parent` int(5) NOT NULL DEFAULT 0,
  `nama_menu` varchar(255) NOT NULL,
  `link` varchar(100) NOT NULL,
  `aktif` enum('Ya','Tidak') NOT NULL DEFAULT 'Ya',
  `position` enum('Top','Bottom') DEFAULT 'Bottom',
  `urutan` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES
(113, 0, 'Tentang Kami', 'halaman/detail/tentang-kami-tunggul-news', 'Ya', 'Top', 1),
(195, 189, 'Struktur Organisasi', 'halaman/detail/struktu-organisasi', 'Ya', 'Bottom', 7),
(194, 149, 'Pengumuman', 'kategori/detail/pengumuman', 'Ya', 'Bottom', 13),
(116, 0, 'Hubungi Kami', 'hubungi', 'Ya', 'Top', 2),
(119, 149, 'Index Berita', 'berita/indeks_berita', 'Ya', 'Bottom', 14),
(199, 0, 'Layanan', 'halaman/detail/layanan', 'Ya', 'Bottom', 21),
(149, 0, 'Berita', 'kategori/detail/berita-terbaru', 'Ya', 'Bottom', 10),
(185, 0, 'Forum', 'konsultasi', 'Ya', 'Bottom', 19),
(186, 0, 'Login', 'login', 'Ya', 'Top', 4),
(187, 0, 'Agenda', 'agenda', 'Ya', 'Bottom', 18),
(181, 0, 'Dokumen', 'download', 'Ya', 'Bottom', 17),
(182, 0, 'Video', 'playlist', 'Ya', 'Bottom', 16),
(183, 0, 'Gallery', 'albums', 'Ya', 'Bottom', 15),
(184, 0, 'Register', 'kontributor', 'Ya', 'Top', 3),
(193, 149, 'Berita Unggulan', 'kategori/detail/berita-unggulan', 'Ya', 'Bottom', 12),
(198, 0, 'Kontak', 'halaman/detail/kontak', 'Ya', 'Bottom', 20),
(189, 0, 'Profil', 'halaman/detail/kata-sambutan', 'Ya', 'Bottom', 5),
(190, 189, 'Kata Sambutan', 'halaman/detail/kata-sambutan', 'Ya', 'Bottom', 6),
(192, 149, 'Berita Terbaru', 'kategori/detail/berita-terbaru', 'Ya', 'Bottom', 11),
(196, 189, 'Tugas dan Fungsi', 'halaman/detail/tugas-dan-fungsi', 'Ya', 'Bottom', 8),
(197, 189, 'Visi Misi', 'halaman/detail/visi-misi', 'Ya', 'Bottom', 9),
(205, 199, 'WHISTLE BLOWING SYSTEM (WBS)', 'halaman/detail/whistle-blowing-system-wbs', 'Ya', 'Bottom', 23),
(206, 199, 'Pengaduan Masyarakat', 'halaman/detail/pengaduan-masyarakat', 'Ya', 'Bottom', 22);

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(5) NOT NULL,
  `nama_modul` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `static_content` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `publish` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `status` enum('user','admin') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `urutan` int(5) NOT NULL,
  `link_seo` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `username`, `link`, `static_content`, `gambar`, `publish`, `status`, `aktif`, `urutan`, `link_seo`) VALUES
(2, 'Manajemen User', 'admin', 'manajemenuser', '', '', 'Y', 'user', 'Y', 0, ''),
(18, 'Berita', 'admin', 'listberita', '', '', 'Y', 'user', 'Y', 0, ''),
(71, 'Background Website', 'admin', 'background', '', '', 'N', 'admin', 'N', 0, ''),
(10, 'Manajemen Modul', 'admin', 'manajemenmodul', '', '', 'Y', 'user', 'Y', 0, ''),
(31, 'Kategori Berita ', 'admin', 'kategorikategori', '', '', 'Y', 'user', 'Y', 0, ''),
(33, 'Jajak Pendapat', 'admin', 'jajakpendapat', '', '', 'Y', 'user', 'Y', 0, ''),
(34, 'Tag Berita', 'admin', 'tagberita', '', '', 'Y', 'user', 'Y', 0, ''),
(35, 'Komentar Berita', 'admin', 'komentarberita', '', '', 'Y', 'user', 'Y', 0, ''),
(41, 'Agenda', 'admin', 'agenda', '', '', 'Y', 'user', 'Y', 0, ''),
(43, 'Berita Foto', 'admin', 'album', '', '', 'Y', 'user', 'Y', 0, ''),
(44, 'Galeri Berita Foto', 'admin', 'gallery', '', '', 'Y', 'user', 'Y', 0, ''),
(45, 'Template Website', 'admin', 'templatewebsite', '', '', 'Y', 'user', 'Y', 0, ''),
(46, 'Sensor Kata', 'admin', 'sensorkomentar', '', '', 'Y', 'user', 'Y', 0, ''),
(61, 'Identitas Website', 'admin', 'identitaswebsite', '', '', 'Y', 'user', 'Y', 0, ''),
(57, 'Menu Website', 'admin', 'menuwebsite', '', '', 'Y', 'user', 'Y', 0, ''),
(59, 'Halaman Baru', 'admin', 'halamanbaru', '', '', 'Y', 'user', 'Y', 0, ''),
(62, 'Video', 'admin', 'video', '', '', 'Y', 'user', 'Y', 0, ''),
(63, 'Playlist Video', 'admin', 'playlist', '', '', 'Y', 'user', 'Y', 0, ''),
(64, 'Tag Video', 'admin', 'tagvideo', '', '', 'Y', 'user', 'Y', 0, ''),
(65, 'Komentar Video', 'admin', 'komentarvideo', '', '', 'Y', 'user', 'Y', 0, ''),
(66, 'Logo Website', 'admin', 'logowebsite', '', '', 'Y', 'user', 'Y', 0, ''),
(67, 'Iklan Sidebar', 'admin', 'iklansidebar', '', '', 'N', 'admin', 'N', 0, ''),
(68, 'Iklan Home', 'admin', 'iklanhome', '', '', 'N', 'admin', 'N', 0, ''),
(69, 'Iklan Atas', 'admin', 'iklanatas', '', '', 'N', 'admin', 'N', 0, ''),
(70, 'Pesan Masuk', 'admin', 'pesanmasuk', '', '', 'Y', 'user', 'Y', 0, ''),
(72, 'Sekilas Info', 'admin', 'sekilasinfo', '', '', 'N', 'admin', 'N', 0, ''),
(73, 'Yahoo Messanger', 'admin', 'ym', '', '', 'N', 'admin', 'N', 0, ''),
(74, 'Download Area', 'admin', 'download', '', '', 'Y', 'admin', 'Y', 0, ''),
(75, 'Alamat Kontak', 'admin', 'alamat', '', '', 'Y', 'admin', 'Y', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `mod_alamat`
--

CREATE TABLE `mod_alamat` (
  `id_alamat` int(5) NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mod_ym`
--

CREATE TABLE `mod_ym` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `ym_icon` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pasangiklan`
--

CREATE TABLE `pasangiklan` (
  `id_pasangiklan` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `source` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id_playlist` int(5) NOT NULL,
  `jdl_playlist` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `playlist_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gbr_playlist` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poling`
--

CREATE TABLE `poling` (
  `id_poling` int(5) NOT NULL,
  `pilihan` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `rating` int(5) NOT NULL DEFAULT 0,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sekilasinfo`
--

CREATE TABLE `sekilasinfo` (
  `id_sekilas` int(5) NOT NULL,
  `info` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT 1,
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('1', '2024-01-26', 1, '1'),
('1', '2024-01-26', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(5) NOT NULL,
  `nama_tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tag_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `count` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id_tag`, `nama_tag`, `username`, `tag_seo`, `count`) VALUES
(58, 'Berita Unggulan', 'admin_diskominfo', 'berita-unggulan', 0),
(55, 'Pematangsiantar', 'admin_diskominfo', 'pematangsiantar', 0),
(56, 'Berita Terbaru', 'admin_diskominfo', 'berita-terbaru', 0),
(57, 'Pengumuman', 'admin_diskominfo', 'pengumuman', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tagvid`
--

CREATE TABLE `tagvid` (
  `id_tag` int(5) NOT NULL,
  `nama_tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tag_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `count` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id_komentar` int(5) NOT NULL,
  `reply` int(5) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `alamat_email` varchar(150) NOT NULL,
  `isi_pesan` text NOT NULL,
  `tanggal_komentar` date NOT NULL,
  `jam_komentar` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id_templates` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pembuat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `folder` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id_templates`, `judul`, `username`, `pembuat`, `folder`, `aktif`) VALUES
(26, 'diskominfo', 'admin', 'Diskominfo', 'diskominfo', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `foto`, `level`, `blokir`, `id_session`) VALUES
('admin_diskominfo', 'b1d270e230d3a52062346278e020572a74f85b2079c60ab307b49006279c9143389fb4d9fecabcff452e8db763009714c2ea2e17ced01249d286ed55ee79cf89', 'Admin Diskominfo', 'diskominfo@mail.pematangsiantar.go.id', '2024', 'Group_341_(1).png', 'admin', 'N', 'c3efcbbccb28d3c4213f5223d0955eaa-20240122171310'),
('admin_rsud', '1fab85d964c1292bc836510acc8320ec274b8cb06d120a3922164c68412d30f2fa34544c4ec701d71dbcea80ad286e3f1917c0bb721a71ab125f4495a52dfc54', 'Admin RSUD', 'rsud@pematangsiantar.go.id', '082234332312', 'Logo_kota_pematangsiantar23.png', 'admin', 'N', '3f209c1f6a625f2ac8867465b72c39b2-20241118145805');

-- --------------------------------------------------------

--
-- Table structure for table `users_modul`
--

CREATE TABLE `users_modul` (
  `id_umod` int(11) NOT NULL,
  `id_session` varchar(255) NOT NULL,
  `id_modul` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_modul`
--

INSERT INTO `users_modul` (`id_umod`, `id_session`, `id_modul`) VALUES
(103, '1ff045109073c963ab1f820d333efa4b-20240620112952', 35),
(102, '1ff045109073c963ab1f820d333efa4b-20240620112952', 41),
(101, '1ff045109073c963ab1f820d333efa4b-20240620112952', 43),
(100, '1ff045109073c963ab1f820d333efa4b-20240620112952', 44),
(99, '1ff045109073c963ab1f820d333efa4b-20240620112952', 45),
(98, '1ff045109073c963ab1f820d333efa4b-20240620112952', 46),
(97, '1ff045109073c963ab1f820d333efa4b-20240620112952', 57),
(96, '1ff045109073c963ab1f820d333efa4b-20240620112952', 59),
(95, '1ff045109073c963ab1f820d333efa4b-20240620112952', 61),
(94, '1ff045109073c963ab1f820d333efa4b-20240620112952', 62),
(93, '1ff045109073c963ab1f820d333efa4b-20240620112952', 63),
(92, '1ff045109073c963ab1f820d333efa4b-20240620112952', 64),
(91, '1ff045109073c963ab1f820d333efa4b-20240620112952', 65),
(90, '1ff045109073c963ab1f820d333efa4b-20240620112952', 66),
(89, '1ff045109073c963ab1f820d333efa4b-20240620112952', 70),
(88, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 10),
(87, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 18),
(86, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 31),
(85, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 33),
(84, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 34),
(83, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 35),
(82, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 41),
(81, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 43),
(80, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 44),
(79, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 46),
(78, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 62),
(77, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 63),
(76, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 64),
(75, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 65),
(74, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 70),
(73, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 10),
(72, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 18),
(71, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 31),
(70, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 34),
(69, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 35),
(68, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 41),
(67, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 43),
(66, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 44),
(65, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 46),
(64, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 62),
(63, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 63),
(62, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 64),
(61, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 65),
(60, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 66),
(59, 'ee33cb0b849a2b5282c54c303dd04596-20240507161418', 70),
(104, '1ff045109073c963ab1f820d333efa4b-20240620112952', 34),
(105, '1ff045109073c963ab1f820d333efa4b-20240620112952', 33),
(106, '1ff045109073c963ab1f820d333efa4b-20240620112952', 31),
(107, '1ff045109073c963ab1f820d333efa4b-20240620112952', 18),
(108, '1ff045109073c963ab1f820d333efa4b-20240620112952', 10),
(109, '1ff045109073c963ab1f820d333efa4b-20240620140955', 70),
(110, '1ff045109073c963ab1f820d333efa4b-20240620140955', 65),
(111, '1ff045109073c963ab1f820d333efa4b-20240620140955', 64),
(112, '1ff045109073c963ab1f820d333efa4b-20240620140955', 63),
(113, '1ff045109073c963ab1f820d333efa4b-20240620140955', 62),
(114, '1ff045109073c963ab1f820d333efa4b-20240620140955', 59),
(115, '1ff045109073c963ab1f820d333efa4b-20240620140955', 46),
(116, '1ff045109073c963ab1f820d333efa4b-20240620140955', 44),
(117, '1ff045109073c963ab1f820d333efa4b-20240620140955', 43),
(118, '1ff045109073c963ab1f820d333efa4b-20240620140955', 41),
(119, '1ff045109073c963ab1f820d333efa4b-20240620140955', 35),
(120, '1ff045109073c963ab1f820d333efa4b-20240620140955', 34),
(121, '1ff045109073c963ab1f820d333efa4b-20240620140955', 33),
(122, '1ff045109073c963ab1f820d333efa4b-20240620140955', 31),
(123, '1ff045109073c963ab1f820d333efa4b-20240620140955', 18),
(124, '1ff045109073c963ab1f820d333efa4b-20240620140955', 10),
(125, '1ff045109073c963ab1f820d333efa4b-20240620141424', 70),
(126, '1ff045109073c963ab1f820d333efa4b-20240620141424', 65),
(127, '1ff045109073c963ab1f820d333efa4b-20240620141424', 64),
(128, '1ff045109073c963ab1f820d333efa4b-20240620141424', 63),
(129, '1ff045109073c963ab1f820d333efa4b-20240620141424', 62),
(130, '1ff045109073c963ab1f820d333efa4b-20240620141424', 46),
(131, '1ff045109073c963ab1f820d333efa4b-20240620141424', 44),
(132, '1ff045109073c963ab1f820d333efa4b-20240620141424', 43),
(133, '1ff045109073c963ab1f820d333efa4b-20240620141424', 41),
(134, '1ff045109073c963ab1f820d333efa4b-20240620141424', 35),
(135, '1ff045109073c963ab1f820d333efa4b-20240620141424', 34),
(136, '1ff045109073c963ab1f820d333efa4b-20240620141424', 33),
(137, '1ff045109073c963ab1f820d333efa4b-20240620141424', 31),
(138, '1ff045109073c963ab1f820d333efa4b-20240620141424', 18),
(139, '1ff045109073c963ab1f820d333efa4b-20240620141424', 10);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(5) NOT NULL,
  `id_playlist` int(5) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `jdl_video` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `video_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `gbr_video` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `video` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `youtube` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dilihat` int(7) NOT NULL DEFAULT 1,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tagvid` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `id_playlist`, `username`, `jdl_video`, `video_seo`, `keterangan`, `gbr_video`, `video`, `youtube`, `dilihat`, `hari`, `tanggal`, `jam`, `tagvid`) VALUES
(178, 63, 'admin_diskominfo', 'BeCaK Berita Catatan Sepekan Siantar  Episode 02', 'becak-berita-catatan-sepekan-siantar--episode-02', '<div id=\"info-container\" class=\"style-scope ytd-watch-info-text\" style=\"margin: 0px; padding: 0px; border: 0px; background: transparent; overflow: hidden; display: inline-flex; width: 942px; vertical-align: top;\"><yt-formatted-string id=\"info\" class=\"style-scope ytd-watch-info-text\" style=\"white-space: pre-wrap;\"><br></yt-formatted-string></div>', 'Screenshot_2024-03-01_at_11_59_1.png', '', 'https://www.youtube.com/watch?v=Qwo_-F20p3c&list=PLgSbeAVopq_GllFqeKRvB3rwPr7i3QB8F&index=2', 26, 'Jumat', '2024-03-01', '12:07:10', ''),
(177, 63, 'admin_diskominfo', 'BeCaK (Berita Catatan Sepekan) Siantar - Episode 01', 'becak-berita-catatan-sepekan-siantar--episode-01', '<div id=\"info-container\" class=\"style-scope ytd-watch-info-text\" style=\"margin: 0px; padding: 0px; border: 0px; background: transparent; overflow: hidden; display: inline-flex; width: 942px; vertical-align: top;\"><yt-formatted-string id=\"info\" class=\"style-scope ytd-watch-info-text\" style=\"white-space: pre-wrap;\"><a class=\"yt-simple-endpoint style-scope yt-formatted-string bold\" spellcheck=\"false\" href=\"https://www.youtube.com/results?search_query=Command+Center+Kota+Pematangsiantar&amp;sp=EiG4AQHCARtDaElKby1KLURST0ZNVEFSekhsWEd3NW84ZWc%253D\" dir=\"auto\" style-target=\"bold\" style=\"display: var(--yt-endpoint-display,inline-block); cursor: pointer; text-decoration: var(--yt-endpoint-text-decoration,none); color: var(--yt-endpoint-hover-color,var(--yt-spec-call-to-action)); font-weight: var(--yt-formatted-string-bold-font-weight,500); overflow-wrap: var(--yt-endpoint-word-wrap,none); word-break: var(--yt-endpoint-word-break,none);\">COMMAND CENTER KOTA PEMATANGSIANTAR</a></yt-formatted-string></div><div id=\"tooltip\" class=\"style-scope tp-yt-paper-tooltip fade-in-animation\" style-target=\"tooltip\" style=\"margin: 8px; padding: 8px; border: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: var(--paper-tooltip-background, #616161); display: block; outline: none; font-family: Roboto, Arial, sans-serif; -webkit-font-smoothing: antialiased; font-size: 1.2rem; line-height: 1.8rem; color: var(--paper-tooltip-text-color, white); border-radius: 4px; opacity: 0; animation-delay: var(--paper-tooltip-delay-in, 500ms); animation-name: keyFrameFadeInOpacity; animation-iteration-count: 1; animation-timing-function: ease-in; animation-duration: var(--paper-tooltip-duration-in, 500ms); animation-fill-mode: forwards; text-transform: none; word-break: normal; font-weight: 400;\">268 x ditonton • 1 Mar 2022 • COMMAND CENTER KOTA PEMATANGSIANTAR</div><p><ytd-watch-info-text id=\"ytd-watch-info-text\" class=\"style-scope ytd-watch-metadata\" view-count-props=\"{&quot;numberText&quot;:&quot;&quot;,&quot;heightPx&quot;:20,&quot;shouldAnimate&quot;:false}\" date-text-props=\"{&quot;numberText&quot;:&quot;&quot;,&quot;heightPx&quot;:20,&quot;shouldAnimate&quot;:false}\" detailed=\"\" style=\"display: inline-flex; vertical-align: top; color: rgb(15, 15, 15); width: 942px; font-family: Roboto, Arial, sans-serif; font-size: 14px; background-color: rgba(0, 0, 0, 0.05);\"><tp-yt-paper-tooltip class=\"style-scope ytd-watch-info-text\" role=\"tooltip\" tabindex=\"-1\" style=\"display: block; position: absolute; outline: none; z-index: 1002; user-select: none; cursor: default; left: 260.234px; top: 46px;\"></tp-yt-paper-tooltip></ytd-watch-info-text><span style=\"color: rgb(15, 15, 15); font-family: Roboto, Arial, sans-serif; font-size: 14px; background-color: rgba(0, 0, 0, 0.05);\"></span><ytd-text-inline-expander id=\"description-inline-expander\" always-show-expand-button=\"\" class=\"style-scope ytd-watch-metadata\" is-expanded=\"\" style=\"display: block; position: relative; overflow: hidden; contain: content; color: rgb(15, 15, 15); font-family: Roboto, Arial, sans-serif; font-size: 14px; line-height: 2rem; background-color: rgba(0, 0, 0, 0.05);\"><yt-attributed-string class=\"style-scope ytd-text-inline-expander\"><span class=\"yt-core-attributed-string yt-core-attributed-string--white-space-pre-wrap\" role=\"text\" style=\"margin: 0px; padding: 0px; border: 0px; background: transparent; white-space-collapse: preserve;\"><span class=\"yt-core-attributed-string--link-inherit-color\" style=\"margin: 0px; padding: 0px; border: 0px; background: transparent; color: rgb(19, 19, 19);\">BeCaK (Berita Catatan Sepekan) Siantar - Episode 01</span></span></yt-attributed-string></ytd-text-inline-expander></p>', 'Screenshot_2024-03-01_at_11_59_1.jpg', '', 'https://www.youtube.com/watch?v=Wa6m4s0dHoQ&list=PLgSbeAVopq_GllFqeKRvB3rwPr7i3QB8F&index=1', 4, 'Jumat', '2024-03-01', '12:05:27', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id_background`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `halamanstatis`
--
ALTER TABLE `halamanstatis`
  ADD PRIMARY KEY (`id_halaman`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `iklanatas`
--
ALTER TABLE `iklanatas`
  ADD PRIMARY KEY (`id_iklanatas`);

--
-- Indexes for table `iklantengah`
--
ALTER TABLE `iklantengah`
  ADD PRIMARY KEY (`id_iklantengah`);

--
-- Indexes for table `katajelek`
--
ALTER TABLE `katajelek`
  ADD PRIMARY KEY (`id_jelek`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `komentarvid`
--
ALTER TABLE `komentarvid`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id_logo`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `mod_alamat`
--
ALTER TABLE `mod_alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `mod_ym`
--
ALTER TABLE `mod_ym`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasangiklan`
--
ALTER TABLE `pasangiklan`
  ADD PRIMARY KEY (`id_pasangiklan`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id_playlist`);

--
-- Indexes for table `poling`
--
ALTER TABLE `poling`
  ADD PRIMARY KEY (`id_poling`);

--
-- Indexes for table `sekilasinfo`
--
ALTER TABLE `sekilasinfo`
  ADD PRIMARY KEY (`id_sekilas`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `tagvid`
--
ALTER TABLE `tagvid`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id_templates`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users_modul`
--
ALTER TABLE `users_modul`
  ADD PRIMARY KEY (`id_umod`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id_background` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=737;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

--
-- AUTO_INCREMENT for table `halamanstatis`
--
ALTER TABLE `halamanstatis`
  MODIFY `id_halaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id_hubungi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iklanatas`
--
ALTER TABLE `iklanatas`
  MODIFY `id_iklanatas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `iklantengah`
--
ALTER TABLE `iklantengah`
  MODIFY `id_iklantengah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `katajelek`
--
ALTER TABLE `katajelek`
  MODIFY `id_jelek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `komentarvid`
--
ALTER TABLE `komentarvid`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id_logo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `mod_alamat`
--
ALTER TABLE `mod_alamat`
  MODIFY `id_alamat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mod_ym`
--
ALTER TABLE `mod_ym`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasangiklan`
--
ALTER TABLE `pasangiklan`
  MODIFY `id_pasangiklan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id_playlist` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `poling`
--
ALTER TABLE `poling`
  MODIFY `id_poling` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sekilasinfo`
--
ALTER TABLE `sekilasinfo`
  MODIFY `id_sekilas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tagvid`
--
ALTER TABLE `tagvid`
  MODIFY `id_tag` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id_templates` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users_modul`
--
ALTER TABLE `users_modul`
  MODIFY `id_umod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
