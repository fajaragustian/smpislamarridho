-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2022 at 04:20 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smpislamarridho`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Administrator',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `position`, `email_verified_at`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin@smpislamarridho.com', 'Administrator', '2022-10-14 19:15:46', NULL, '$2y$10$VUVJ/JV9HsTawCeEsldj7uj1KOaPWJGKg4qB4WoOM6jxp6PCb7.0.', NULL, '2022-10-14 19:15:46', '2022-10-14 19:15:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `keywords`, `meta_desc`, `created_at`, `updated_at`) VALUES
(1, 'Berita', 'berita', 'Berita', 'Berita', '2022-10-14 19:28:52', '2022-10-14 19:28:52'),
(2, 'Ekstrakulikuler', 'ekstrakulikuler', 'Ekstrakulikuler', 'Ekstrakulikuler', '2022-10-14 19:29:30', '2022-10-14 19:29:30'),
(3, 'Prestasi', 'prestasi', 'Prestasi', 'Prestasi', '2022-10-14 19:29:49', '2022-10-14 19:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `ekskuls`
--

CREATE TABLE `ekskuls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembina` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekskuls`
--

INSERT INTO `ekskuls` (`id`, `category_id`, `name`, `pembina`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'Pencak Silat', 'Pembina Pencak Silat', 'pencak-silat', 'images/ekskuls/Dy3DUZZ9AA3F6zlUCD16nIaAnuqGwgAkX12uhuWl.jpg', '2022-10-14 19:52:59', '2022-10-14 19:52:59'),
(2, 2, 'Futsal', 'Pembina Futsal', 'futsal', 'images/ekskuls/KT04gUxNjZ1yCXpN5tGGTUkrPAYwg45iZN7MeoDu.jpg', '2022-10-14 19:53:15', '2022-10-14 19:53:15'),
(3, 2, 'Drumband', 'Pembina Drumband', 'drumband', 'images/ekskuls/Q7CxvEVrI9fOXhw4wzK7MvFleKdd7V5f4xCpI6jo.jpg', '2022-10-14 19:53:33', '2022-10-14 19:53:33'),
(4, 2, 'Biola', 'Pembina Biola', 'biola', 'images/ekskuls/pHvt6nZejOHEDgLwIogGvp8QYhVeUfCB99rXW4J6.jpg', '2022-10-14 19:53:51', '2022-10-14 19:53:51'),
(5, 2, 'Pramuka', 'Pembina Pramuka', 'pramuka', 'images/ekskuls/sTgm1vfIYXgGgcoaU2wWBZkHo6xGPTwvjV5Ms1R5.jpg', '2022-10-14 19:54:11', '2022-10-14 19:54:11'),
(6, 2, 'Marawis', 'Pembina Marawis', 'marawis', 'images/ekskuls/OWWGD7vbGy85KMOLUWGdswpOeCrXaCCAvEQkZTkG.jpg', '2022-10-14 20:00:35', '2022-10-14 20:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `category_id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'Futsal', 'images/galeri/siIIWQYfL7GSY9Tt3AaRDXCiR86NAiEkX9UP9eav.jpg', '2022-10-14 20:01:35', '2022-10-14 20:01:35'),
(2, 2, 'Silat', 'images/galeri/IYSIDxIM91YqhxPmSpmZgclL4b1uWExMU7OiM0XT.jpg', '2022-10-14 20:01:44', '2022-10-14 20:01:44'),
(3, 2, 'Drumband', 'images/galeri/VXbuDnCPrpftzlVpSq2Lz5CGewqXqvaXBnztahAH.jpg', '2022-10-14 20:01:53', '2022-10-14 20:01:53'),
(4, 2, 'Biola', 'images/galeri/GPkADR1NwLMjFJFeSpRtU8gjpzBy5GJBzAgLz9Ri.jpg', '2022-10-14 20:02:03', '2022-10-14 20:02:03'),
(5, 2, 'Pramuka', 'images/galeri/TfHP9fEIm7YEKuGL9hY8TLacX7giKChENXyltvFH.jpg', '2022-10-14 20:02:12', '2022-10-14 20:02:12'),
(6, 2, 'Drumband', 'images/galeri/zl3HOro86dvCabJPbQZx0zXwK9ofJOlQ3hEN7eRR.jpg', '2022-10-14 20:02:27', '2022-10-14 20:02:27'),
(7, 2, 'Marawis', 'images/galeri/EExhgCVOWgMyw6IZSWKMqnibRehdGYuyXbVPHTkg.jpg', '2022-10-14 20:02:37', '2022-10-14 20:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_11_034829_create_admins_table', 1),
(6, '2022_06_11_074011_create_categories_table', 1),
(7, '2022_06_11_153946_create_tags_table', 1),
(8, '2022_06_11_155956_create_posts_table', 1),
(9, '2022_06_11_183514_create_post_tag_table', 1),
(10, '2022_06_11_192634_create_organitations_table', 1),
(11, '2022_06_11_202829_create_ekskuls_table', 1),
(12, '2022_06_12_101013_create_galeris_table', 1),
(13, '2022_06_14_154553_add_pembina_and_image_to_ekskuls_table', 1),
(14, '2022_06_14_185339_add_category_id_to_galeris_table', 1),
(15, '2022_06_14_202031_add_ekskuls_id_and_telp_and_kelas_and_umur_alasan_to_users_table', 1),
(16, '2022_06_16_082122_add_admin_id_to_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organitations`
--

CREATE TABLE `organitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organitations`
--

INSERT INTO `organitations` (`id`, `admin_id`, `image`, `name`, `slug`, `position`, `created_at`, `updated_at`) VALUES
(1, 1, 'images/organitation/GoYJPtPhnv3lWNAVuLyX7tQ68dxJDVIV74lIgWyN.png', 'H.Muis Ali, S.PD.I, MM', 'hmuis-ali-spdi-mm', 'Kepala Sekolah', '2022-10-14 19:34:05', '2022-10-14 19:40:17'),
(2, 1, 'images/organitation/p2ofFABrGYvOOPlcFbGDJfOFuB3mjvt2NyKjIcUI.png', 'H. Sunarto', 'h-sunarto', 'Komite Sekolah', '2022-10-14 19:47:55', '2022-10-14 19:47:55'),
(3, 1, 'images/organitation/R70PpHRChfA4z9mkbe5AXf4rmUyKZws4YBQ2lQcQ.jpg', 'Nur Widayanti, S.PD', 'nur-widayanti-spd', 'Waka Kurikulum', '2022-10-14 19:48:18', '2022-10-14 19:48:18'),
(4, 1, 'images/organitation/rfbDEF3Be8gz6BwoRHWMvhmYqXyCOBjS16C29ToF.png', 'Hasan Hidayat,S.PD', 'hasan-hidayatspd', 'Waka Kesiswaan', '2022-10-14 19:48:33', '2022-10-14 19:48:33'),
(5, 1, 'images/organitation/wQsHmR82LMry9SUszK1r9Kh7bF9uuaWmKZH5gv1f.png', 'Muhammad Amin', 'muhammad-amin', 'Bimbingan Konseling', '2022-10-14 19:48:54', '2022-10-14 19:48:54'),
(6, 1, 'images/organitation/EVWlpHZgldZA84sIO6jabvZzmMrV6Hxsnny3GqGn.jpg', 'Solihatun,A.MA', 'solihatunama', 'Bandahara', '2022-10-14 19:49:13', '2022-10-14 19:50:03'),
(7, 1, 'images/organitation/xH2C3z2xVMFtsmD2cc8i4Htmrj91ckqDAljSNQtc.jpg', 'Solihatun,A.MA', 'solihatunama', 'Tata Usaha', '2022-10-14 19:49:31', '2022-10-14 19:49:31'),
(8, 1, 'images/organitation/GT2tXbaiswEBbJxwzJjTjeM1xIR3t08iva97F1JU.png', 'Yayang Alfian', 'yayang-alfian', 'Staff Administrasi', '2022-10-14 19:49:44', '2022-10-14 19:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `admin_id`, `image`, `title`, `slug`, `desc`, `keywords`, `meta_desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 'images/blog/bELNVUbUwTuKbydCvTli36QCaCf70Rv9DecPUSIO.jpg', 'Penting ekstraskuliker untuk membangun karakter murid menurut kemdikbud', 'penting-ekstraskuliker-untuk-membangun-karakter-murid-menurut-kemdikbud', '<p>Kegiatan ekstrakurikuler sebagai wadah pengembangan potensi peserta didik, dapat memberikan dampak positif dalam penguatan pendidikan karakter. Peserta didik diharapkan dapat mengembangkan karakter profil Pelajar Pancasila yaitu : (1) berkebinekaan global, (2) bergotong royong, (3) kreatif, (4) bernalar kritis, (5) mandiri, dan (6) beriman, bertakwa kepada Tuhan YME, dan berakhlak mulia.</p>\r\n\r\n<p>Satuan pendidikan memiliki kewajiban untuk menyelenggarakan kegiatan ekstrakurikuler sebagai wahana memfasilitasi pengembangan bakat dan minat peserta didik. Oleh sebab itu, kegiatan ekstrakurikuler harus dikelola secara sistematis dan terpola agar bermuara pada pencapaian tujuan yang dimaksud. Agar dapat menyusun dan mengembangkan kegiatan ekstrakurikuler yang tersistem dan terpola sekolah perlu memahami cara dan tahapan diperlukan panduan yang dapat membimbingsatuan pendidikan dalam menyelenggarakannya.</p>\r\n\r\n<p>Merujuk pada Peraturan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor 62 tahun 2014 tentang Kegiatan Ekstrakurikuler Pada Pendidikan Dasar dan Pendidikan Menengah, ekstrakurikuler adalah kegiatan&nbsp;</p>\r\n\r\n<p>pengembangan karakter dalam rangka perluasan potensi, bakat, minat, kemampuan, kepribadian, kerja sama, dan kemandirian peserta didik secara optimal yang dilakukan di luar jam belajar kegiatan intrakurikuler dan kegiatan kokurikuler di bawah bimbingan dan pengawasan satuan pendidikan.</p>\r\n\r\n<p>JENIS EKSTRAKURIKULER</p>\r\n\r\n<p>Ekstrakurikuler wajib adalah kegiatan ekstrakurikuler yang wajib diselenggarakan oleh satuan pendidikan dan wajib diikuti oleh seluruh peserta didik. Kegiatan ekstrakurikuler Wajib yang dimaksud berbentuk pendidikan kepramukaan, yang diatur khusus dalam Peraturan&nbsp; Permendikbud RI Nomor 63 tahun 2014.</p>\r\n\r\n<p>Ekstrakurikuler pilihan adalah kegiatan ekstrakurikuler yang dapat dikembangkan dan diselenggarakan oleh satuan pendidikan dan dapat diikuti oleh peserta didik sesuai bakat dan minatnya masing-masing. Pilihan bidang yang dikembangkan tiap sekolah akan berbeda-beda seperti eksktrakurikuler seni, olahragam sains, mapun keagamaan, dan lain-lain.</p>\r\n\r\n<p>FUNGSI EKSTRAKURIKULER</p>\r\n\r\n<p>Ekstrakurikuler di Sekolah Dasar memiliki fungsi:</p>\r\n\r\n<ol>\r\n	<li>Pengembangan, yaitu sebagai wahana pengembangan minat dan bakat peserta didik.</li>\r\n	<li>Sosial, yaitu sebagai wahana untuk memperluas pengalaman bersosialisasi, praktik keterampilan berkomunikasi, dan internalisasi nilai-nilai karakter.</li>\r\n	<li>Rekreatif,yaitu dilakukan dalam suasana gembira dan menyenangkan, sehingga suasana ini menunjang proses perkembangan potensi/kemampuan personal peserta didik.</li>\r\n	<li>Persiapan Karir, yaitu sebagai wahana memfasilitasi persiapan peserta didik melalui pengembangan bakat dan minat dalam bidang ekstrakurikuler yang diminati.</li>\r\n</ol>\r\n\r\n<p>PRINSIP KEGIATAN EKSTRAKURIKULER</p>\r\n\r\n<p>Ekstrakurikuler di sekolah dasar diselenggarakan dengan prinsip:</p>\r\n\r\n<ol>\r\n	<li>Partisipasi Aktif, yakni bahwa kegiatan ekstrakurikuler menuntut keikutsertaan peserta didik secara penuhsesuai dengan minat dan pilihan masing-masing.</li>\r\n	<li>Menyenangkan,yakni bahwa kegiatan ekstrakurikuler dilaksanakan dalam suasana yang menggembirakan bagi peserta didik.</li>\r\n</ol>\r\n\r\n<p>SIFAT KEGIATAN EKSTRAKURIKULER</p>\r\n\r\n<p>Kegiatan ekstrakurikuker di sekolah dasar diselenggarakan mengacu sifat-sifat berikut:</p>\r\n\r\n<ol>\r\n	<li>Individual, yakni dikembangkan sesuai dengan potensi/bakat peserta didik masing-masing.</li>\r\n	<li>Pilihan, yakni dikembangkan sesuai dengan minat dan diikuti oleh peserta didik secara sukarela.</li>\r\n	<li>Memotivasi, yakni membangun semangat peserta didik untuk mengembangkan potensi/bakat melalui kegiatan yang diminati.</li>\r\n	<li>Kemanfaatan sosial, yakni dikembangkan dan dilaksanakan dengan tidak melupakan kepentingan masyarakat.</li>\r\n</ol>\r\n\r\n<p>BENTUK KEGIATAN EKSTRAKURIKULER DI SEKOLAH DASAR</p>\r\n\r\n<p>Sebagaimana diatur dalam Permendikbud RI Nomor 62 tahun 2014 tentang Kegiatan Ekstrakurikuler Pada Pendidikan Dasar dan Pendidikan Menengah, bentuk kegiatan ekstrakurikuler dapat berupa:</p>\r\n\r\n<ol>\r\n	<li>Krida, misalnya: Kepramukaan, Latihan Kepemimpinan Siswa (LKS), Palang Merah Remaja (PMR), Usaha Kesehatan Sekolah (UKS), Pasukan Pengibar Bendera (Paskibra), dan lainnya;</li>\r\n	<li>Karya ilmiah, misalnya: Kegiatan Ilmiah Remaja (KIR), kegiatan penguasaan keilmuan dan kemampuan akademik, penelitian, dan lainnya;</li>\r\n	<li>Latihan olah-bakat dan olah-minat, misalnya: pengembangan bakat olahraga, seni dan budaya, pecinta alam, jurnalistik, teater, teknologi informasi dan komunikasi, rekayasa, dan lainnya;</li>\r\n	<li>Keagamaan, misalnya: Tahfiz QUR&rsquo;AN, baca tulis ALQUR&rsquo;AN, marawis, retreat; atau</li>\r\n	<li>Bidang pengembangan lainnya, yang disesuaikan dengan prioritas dan analisis potensi dan minat peserta didik di sekolah.</li>\r\n</ol>\r\n\r\n<p>Sekolah perlu menentukan pilihan prioritas kegiatan ekstrakurikuler yang akan diselenggarakan berdasarkan analisis potensi dan minat peserta didik,serta kemampuan sekolah dalam memenuhi sumberdaya yang dibutuhkan dalam penyelenggaraan kegiatan ekstrakurikuler. Sekolah dapat mengembangkan bentuk kegiatan selain daripada yang tersebut di atas berdasarkan kearifan lokal dan kondisi sosial masyarakat di lingkungan sekolah dengan tetap memerhatikan tujuan ekstrakurikuler di sekolah dasar.</p>\r\n\r\n<p>Satuan pendidikan juga perlu memikirkan daya dukung lain untuk kesinambungan pembinaan kegiatan ekstrakurikuler yang diprogramkan. Daya dukung lain misalnya menyediakan kegiatan yang bersifatkompetitif-prestatif bagi peserta didik yang mengikuti kegiatan ekstrakurikuler.Kegiatan kompetitif-prestatif yang dapat dilakukan misalnya menyelenggaraan perlombaan/kompetisi keterampilan ekstrakurikuler di tingkat satuan pendidikan, mengikutsertakan peserta didik yang dibina melalui ekstrakurikuler dalam kegiatan festival, lomba, olimpiade, atau kegiatan kompetitif-prestatif lainnya.</p>\r\n\r\n<p>Kegiatan kompetitif-prestatif dapat menjadi salah satu bentuk evaluasi pelaksanaan ekstrakurikuler di satuan pendidikan. Dengan melihat prestasi peserta didik dalam sebuah kompetisi, tim pembina dapat melakukan evaluasi terhadap program ekstrakurikuler serta mengembangkannya menjadi lebih baik pada masa berikutnya. Di sisi lain, melalui kegiatan kompetitif dapat meningkatkan rasa percaya diri anak terhadap hasil usaha latihannya dalam mengikuti kegiatan ekstrakurikuler.</p>', 'Berita Ekstrakulikuler', 'Berita Ekstrakulikuler', '2022-10-14 20:13:26', '2022-10-14 20:13:26', NULL),
(2, 2, 1, 'images/blog/GTUNVw2hjargEc3fZmtg2eVQtTDPLncf3BudgA4V.jpg', 'Mengenal Ekstrakulikuler', 'mengenal-ekstrakulikuler', '<p>ekstrakurikuler (ekskul) merupakan salah satu kegiatan tambahan yang dilakukan di luar jam pelajaran yang dilakukan baik di sekolah atau di luar sekolah dengan tujuan untuk mendapatkan tambahan pengetahuan, keterampilan dan wawasan serta membantu membentuk karakter peserta didik sesuai dengan minat dan bakat masing-masing.</p>\r\n\r\n<h2><strong>Tujuan Ekstrakurikuler</strong></h2>\r\n\r\n<ul>\r\n	<li>Mengembangkan potensi siswa secara optimal dan terpadu yang meliputi bakat, minat, dan kreativitas.</li>\r\n	<li>Memantapkan kepribadian siswa untuk mewujudkan ketahanan sekolah sebagai lingkungan pendidikan sehingga terhindar dari usaha dari pengaruh negatif dan bertentangan dengan tujuan pendidikan.</li>\r\n	<li>Mengaktualisasi potensi siswa dalam pencapaian potensi unggulan sesuai bakat dan minat.</li>\r\n	<li>Menyiapkan siswa agar menjadi warga masyarakat yang berakhlak mulia, demokratis, menghormati hak-hak asasi manusia dalam rangka mewujudkan masyarakat mandiri (civil society).</li>\r\n	<li>Siswa dapat memperdalam dan memperluas pengetahuan keterampilan tentang hubungan antara berbagai mata pelajaran, menyalurkan bakat dan minat, serta melengkapi upaya pembinaan manusia seutuhnya yang beriman dan bertaqwa kepada tuhan yang maha esa, berbudi pekerti luhur, memiliki pengetahuan dan keterampilan, sehat rohani dan berkepribadian yang mantap dan mandiri, dan memiliki rasa tanggung jawab kemasyarakatan dan kebangsaan.</li>\r\n	<li>Siswa mampu memanfaatkan pendidikan kepribadian dan mengaitkan pengetahuan yang diperolehnya dalam program kurikulum dengan kebutuhan dan keadaan lingkungan.</li>\r\n</ul>\r\n\r\n<h2><strong>Fungsi Ekstrakurikuler</strong></h2>\r\n\r\n<ul>\r\n	<li>Fungsi Pengembangan &ndash; Bahwa suatu kegiatan ekstrakurikuler berfungsi untuk mendukung perkembangan personal peserta didik melalui perluasan minat, pengembangan potensi, dan pemberian kesempatan untuk pembentukan karakter dan pelatihan kepemimpinan.</li>\r\n	<li>Fungsi Sosial &ndash; Bahwa salah satu kegiatan ekstrakurikuler berfungsi untuk mengembangkan kemampuan dan rasa tanggung jawab memberikan kesempatan kepada peserta didik untuk memperluas pengalaman sosial, praktik keterampilan sosial, dan internalisasi nilai moral dan nilai sosial.</li>\r\n	<li>Fungsi Rekreatif &ndash; Sebuah kegiatan ekstrakurikuler dilakukan dalam suasana rilex, menggembirakan, dan menyenangkan sehingga menunjang proses perkembangan peserta didik. Kegiatan ekstrakurikuler harus dapat menjadikan kehidupan atau atmosfer sekolah lebih menantang dan lebih menarik bagi peserta didik.</li>\r\n	<li>Fungsi Persiapan Karir &ndash; Segala kegiatan ekstrakurikuler berfungsi untuk mengembangkan kesiapan karir peserta didik melalui pengembangan kapasitas.</li>\r\n</ul>\r\n\r\n<h2><strong>Manfaat Ekstrakulikuler</strong></h2>\r\n\r\n<ul>\r\n	<li>Dapat memberikan kesempatan bagi pemantapan ketertarikan yang telah tertanam serta pembangunan ketertarikan yang baru</li>\r\n	<li>Bisa mendapat pendidikan sosial melalui pengalaman dan pengamatan, terutama dalam hal perilaku kepemimpinan, persahabatan, kerjasama dan kemandirian</li>\r\n	<li>Membangun suatu semangat dan mentalitas bersekolah</li>\r\n	<li>Memberikan kepuasan bagi perkembangan jiwa anak atau pemuda</li>\r\n	<li>Dapat mendorong pembangunan jiwa untuk dan moralitas</li>\r\n	<li>Menguatkan kekuatan mental dan jiwa siswa</li>\r\n	<li>Memberikan kesempatan bergaul bagi siswa</li>\r\n	<li>Memperluas sebuah interaksi siswa</li>\r\n	<li>Memberikan salah satu kesempatan kepada siswa dalam melatih kapasitas kreativitas mereka lebih mendalam.</li>\r\n</ul>\r\n\r\n<h2><strong>Jenis Kegiatan Ekstrakulikuler (Ekskul)</strong></h2>\r\n\r\n<p>Berdasarkan Surat Keputusan Menteri Pendidikan dan Kebudayaan No. 060/U/1993 dan Nomor 080/U/1993, kegiatan ekstrakurikuler (ekskul) adalah kegiatan yang diselenggarakan di luar jam pelajaran yang tercantum dalam susunan program sesuai dengan keadaan dan kebutuhan sekolah, dan dirancang secara khusus agar sesuai dengan faktor minat dan bakat siswa.</p>\r\n\r\n<p>Sedangkan menurut Peraturan Menteri Pendidikan Nasional Republik Indonesia No. 39 Tahun 2008 tentang Pembinaan Kesiswaan, kegiatan ekstrakurikuler (ekskul) merupakan salah satu jalur pembinaan kesiswaan. Kegiatan ekstrakurikuler yang diikuti dan dilaksanakan oleh siswa baik di sekolah maupun di luar sekolah, bertujuan agar siswa dapat memperkaya dan memperluas diri.</p>\r\n\r\n<h2><strong>Jenis Ekstrakurikuler Berdasarkan Pilihannya</strong></h2>\r\n\r\n<ul>\r\n	<li>Ekstrakurikuler Wajib merupakan salah satu program ekstrakurikuler yang harus diikuti oleh seluruh peserta didik, terkecuali bagi peserta didik dengan kondisi tertentu yang tidak memungkinkannya untuk mengikuti kegiatan ekstrakurikuler tersebut.</li>\r\n	<li>Ekstrakurikuler Pilihan yaitu sebuah program pilihan ekstrakurikuler yang dapat diikuti oleh peserta didik sesuai dengan minat bakat dan minatnya masing-masing.</li>\r\n</ul>\r\n\r\n<h2><strong>Jenis Ekstrakurikuler Berdasarkan Waktu Pelaksanaannya</strong></h2>\r\n\r\n<ul>\r\n	<li>Ekstrakurikuler Rutin ialah suatu bentuk kegiatan ekstrakurikuler yang dilaksanakan secara terus menerus, seperti : latihan bola voli, latihan sepak bola dan sebagainya.</li>\r\n	<li>Ekstrakurikuler Periodik yakni segala bentuk kegiatan yang dilaksanakan pada waktu-waktu tertentu saja, seperti lintas alam, camping, pertandingan olah raga dan sebagainya.</li>\r\n</ul>\r\n\r\n<h2><strong>Jenis Ekstrakurikuler Berdasarkan Jenis Kegiatannya</strong></h2>\r\n\r\n<ul>\r\n	<li>Krida &ndash; Kepramukaan, Latihan Dasar Kepemimpinan Siswa, Palang Merah Remaja (PMR), Pasukan Pengibar Bendera (Paskibra) dan lainnya.</li>\r\n	<li>Karya Ilmiah &ndash; Kegiatan Ilmiah Remaja (KIR), Kegiatan Penguasaan Keilmuan dan kemampuan akademik, penelitian dan sebagainya.</li>\r\n	<li>Latihan atau Olah Bakat atau juga Prestasi &ndash; Pengembangan bakat olahraga, seni dan budaya, cinta alam, jurnalistik, teater, keagamaan, dan lainnya.</li>\r\n</ul>', 'Berita Ekstrakulikuler', 'Berita Ekstrakulikuler', '2022-10-14 20:15:42', '2022-10-14 20:15:42', NULL),
(3, 1, 1, 'images/blog/aRfhyCUC8bBASWmfsySYD5FiGwL9ukkWILjEP94V.png', 'Penting! Enam Cara Menjadi Siswa Berkarakter Baik!', 'penting-enam-cara-menjadi-siswa-berkarakter-baik', '<p>Menjadi siswa yang berkarakter itu sangat penting loh. Jika kamu menjadi seorang siswa yang berprestasi itu adalah sebuah bonus karena kerja kerasmu.</p>\r\n\r\n<p>Namun, hal terpenting adalah menjadi&nbsp;<a href=\"https://www.klikanggaran.com/tag/siswa-berkarakter\">siswa berkarakter</a>&nbsp;baik. Jika karakter siswa sudah baik maka akan mempengaruhi semuanya menjadi baik.</p>\r\n\r\n<p>Siswa berkarakter baik itu seperti apa sih? Kita harus cari tahu dulu pengertian karakter. Yuk, cek kamus alias Kamus Besar Bahasa Indonesia.</p>\r\n\r\n<p>KBBI menjelaskan karakter itu sifat-sifat kejiwaan, akhlak atau budi pekerti yang membedakan seseorang dari yang lain; tabiat; watak. Jadi,&nbsp;<a href=\"https://www.klikanggaran.com/tag/siswa-berkarakter\">siswa berkarakter</a>&nbsp;adalah siswa yang mempunyai akhlah atau budi pekerti yang baik.</p>\r\n\r\n<p>Pemerintah berharap generasi bangsanya mempunyai karakter yang baik. Pendidikan karakter juga dirumuskan dalam UU Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional pada pasal 1:</p>\r\n\r\n<p>Pendidikan adalah usaha sadar dan terencana untuk mewujudkan suasana belajar dan proses pembelajaran agar peserta didik secara aktif mengembangkan potensi dirinya untuk memiliki kekuatan spiritual keagamaan, pengendalian diri, kepribadian, kecerdasan, akhlak mulia, serta keterampilan yang diperlukan dirinya, masyarakat, bangsa dan negara.&nbsp;</p>\r\n\r\n<p><em><strong><a href=\"https://www.klikanggaran.com/peristiwa-daerah\">Pertama, rajinlah berbidah</a></strong></em></p>\r\n\r\n<p>Kamu harus rajin beribadah ya supaya Tuhan pun sayang. Jika Tuhan sayang di setiap apa yang kamu lakukan pati akan Tuhan bantu dan lindungi.</p>\r\n\r\n<p><em><strong><a href=\"https://www.klikanggaran.com/bisnis\">Kedua, kamu seharusnya punya kemauan yang tinggi.</a></strong></em></p>\r\n\r\n<p>Jika ada kemauan maka kesempatan selalu ada. Jika kamu sudah mau dan benrminat maka semuanya akan berjalan dengan lancar. Mau dahulu maka aka nada hasilnya. Jangan ragu-ragu atas apa yang sudah kamu inginkan.</p>\r\n\r\n<p><em><strong><a href=\"https://www.klikanggaran.com/politik\">Ketiga, milikilah hati yang siap untuk dibentuk dan diubah.</a></strong></em></p>\r\n\r\n<p>Jika kamu ingin berubah maka kamu harus melapangkan hati kamu untuk mendengar dan mengikuti apa yang gurumu ajarkan. Ikuti peraturan dan intruksi dari gurumu.</p>\r\n\r\n<p><em><strong><a href=\"https://www.klikanggaran.com/politik\">Keempat, Berlatihlah terus sampai bisa</a></strong></em></p>\r\n\r\n<p>Belajar apa pun jika kita tidak berlatih maka kamu tidak akan pernah bisa. Ingat ya ada pepatah &ldquo;Semakin banyak berlatih maka kamu akan menjadi ahli&rdquo;. Lakukan setiap hari!</p>\r\n\r\n<p><em><strong><a href=\"https://www.klikanggaran.com/kebijakan\">Kelima, Aturlah waktumu dengan baik</a></strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mengatur waktu merupakan bentuk disiplin loh. Jika kamu membuat jurnal waktu maka kamu akan teratur di setiap harinya. Ada waktunya untuk bermain dan ada waktunya untuk belajar. Aturlah dengan baik!</p>\r\n\r\n<p><em><strong><a href=\"https://www.klikanggaran.com/olahraga\">Keenam, Bersikaplah dengan sopan dan santun</a></strong></em></p>\r\n\r\n<p>Bersikap sopan dan santun harus kamu jaga. Kamu harus menempatkan di mana kamu harus bersikap. Itu harus kamu tanamkan di diri kamu. Menghormati guru dan orang tuamu adalah kuncinya.</p>\r\n\r\n<p>Itulah&nbsp;<a href=\"https://www.klikanggaran.com/tag/cara\">cara</a>&nbsp;yang disampaikan. Jika kamu mengikutinya maka dipastikan kamu akan menjadi siswa yang berkarakter baik sekaligus siswa yang berprestasi. Semangat belajar ya!***</p>', 'Berita Sekolah', 'Berita Sekolah', '2022-10-14 20:19:33', '2022-10-14 20:19:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `keywords`, `meta_desc`, `created_at`, `updated_at`) VALUES
(2, 'Berita Ekstrakulikuler', 'berita-ekstrakulikuler', 'Berita Ekstrakulikuler', 'Berita Ekstrakulikuler', '2022-10-14 20:11:38', '2022-10-14 20:11:38'),
(3, 'Berita Sekolah', 'berita-sekolah', 'Berita Sekolah', 'Berita Sekolah', '2022-10-14 20:11:51', '2022-10-14 20:11:51'),
(4, 'Berita Prestasi', 'berita-prestasi', 'Berita Prestasi', 'Berita Prestasi', '2022-10-14 20:12:02', '2022-10-14 20:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `ekskul_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin_id`, `ekskul_id`, `name`, `email`, `telp`, `umur`, `alasan`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Fajar Agustian', 'FajarAgustian123@gmail.com', '089614951234', '13', 'Suka dengan pencak silat', NULL, NULL, NULL, '2022-10-14 20:36:38', '2022-10-14 20:36:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `ekskuls`
--
ALTER TABLE `ekskuls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ekskuls_name_unique` (`name`),
  ADD UNIQUE KEY `ekskuls_slug_unique` (`slug`),
  ADD KEY `ekskuls_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeris_category_id_foreign` (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organitations`
--
ALTER TABLE `organitations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organitations_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `posts_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_ekskul_id_foreign` (`ekskul_id`),
  ADD KEY `users_admin_id_foreign` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ekskuls`
--
ALTER TABLE `ekskuls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `organitations`
--
ALTER TABLE `organitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ekskuls`
--
ALTER TABLE `ekskuls`
  ADD CONSTRAINT `ekskuls_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `galeris`
--
ALTER TABLE `galeris`
  ADD CONSTRAINT `galeris_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `organitations`
--
ALTER TABLE `organitations`
  ADD CONSTRAINT `organitations_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ekskul_id_foreign` FOREIGN KEY (`ekskul_id`) REFERENCES `ekskuls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
