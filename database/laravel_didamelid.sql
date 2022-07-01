-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 30, 2022 at 03:48 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_didamelid`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'keuangan', 'keuangan', 'flaticon-money-1', '2022-05-29 21:42:57', '2022-05-29 21:42:57'),
(2, 'multimedia', 'multimedia', 'flaticon-vector', '2022-05-29 21:42:57', '2022-05-29 21:42:57'),
(3, 'teknologi informasi', 'teknologi-informasi', 'flaticon-web-programming', '2022-05-29 21:42:57', '2022-05-29 21:42:57'),
(4, 'pemerintahan', 'pemerintahan', 'flaticon-man', '2022-05-29 21:42:57', '2022-05-29 21:42:57'),
(5, 'kesehatan', 'kesehatan', 'flaticon-first-aid-kit', '2022-05-29 21:42:57', '2022-05-29 21:42:57'),
(6, 'otomotif', 'otomotif', 'flaticon-car', '2022-05-29 21:42:57', '2022-05-29 21:42:57'),
(7, 'lainnya', 'lainnya', NULL, '2022-05-29 21:42:57', '2022-05-29 21:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `companycategory_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `companycategory_id`, `name`, `slug`, `status`, `logo`, `location`, `phone_number`, `email`, `social_facebook`, `social_instagram`, `social_youtube`, `social_twitter`, `website`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 'Astra Honda Motor', 'astra-honda-motor', 1, 'logo-company/Xw9RRna4E12hheZ756y9p50HFWz9adSxx2XTZrGn.webp', 'jakarta', '08119500989', 'ahm.example@gmail.com', NULL, NULL, NULL, NULL, NULL, '<div><br></div><div>Astra Honda Motor merupakan perusahaan pembuat sepeda motor dengan merek resmi Honda. Awal mula berdiri pada tahun 1971 dengan nama PT. Federal Motor. Saat itu, perusahaan hanya merakit motor, sedangkan komponennya diimpor langsung dari Jepang dalam bentuk CKD (Completely Knock Down).<br><br></div><div>Sepuluh tahun kemudian, perusahaan untuk pertama kalinya berhasil memproduksi 1 juta unit kendaraan / tahun. Atas kesuksesan ini, perusahaan memutuskan untuk membuat pabrik baru di Pegangsaan dan berhasil meningkatkan produksi hingga 2 juta unit kendaraan / tahun pada 1996.<br><br></div><div>Perubahan nama dari PT. Federal Motor menjadi PT. Astra Honda Motor baru terjadi pada tahun 2001. Empat tahun setelah perubahan nama, perusahaan berhasil membangun pabrik yang ketiga di Cikarang dan berhasil meningkatkan kapasitas produksi hingga 3 juta unit kendaraan / tahun.<br><br></div><div>Pabrik keempat berdiri di Karawang pada tahun 2014. Penerapan teknologi terbaru di pabrik ini menjadikan kapasitas produksi total 5.8 juta unit kendaraan / tahun. Menjadikan Astra Honda Motor sebagai salah satu perusahaan pembuat sepeda motor terbesar di Indonesia bahkan juga ASEAN.<br><br></div><div>&nbsp;</div><div><br><strong>Alamat Kantor Astra Honda Motor<br></strong><br></div><ol><li>1. Kantor Utama &amp; Pabrik perakitan sunter (Jl. Laksda Yos Sudarso, Sunter I Jakarta 14350)</li><li>2. Pabrik perakitan pegangsaan (Jl. Raya Pegangsaan 2 km 2.2 Kelapa Gading Jakarta 14250)</li><li>3. Pabrik perakitan cikarang (Kawasan Industri MM2100, Jl. Raya Kalimantan Blok AA-1, Cikarang Barat, Jawa Barat)</li><li>4. Pabrik perakitan karawang &amp; AHM Parts Centre (Kawasan Industri Indotaisei, Kota Bukit Indah, Karawang, Jawa Barat)</li></ol><div><br><strong>Dealer Utama Astra Honda Motor<br></strong><br></div><ul><li>Wahana Makmur Sejati – Jl. Gunung Sahari Raya 32, Jakarta No. Hp. 021-6281700, Fax : 021-6284049</li><li>Jakarta Honda Centre – Jl. Dewi Sartika 255, Jakarta No. Hp. 021-8000543, Fax: 021-8093658</li><li>Mitra Sendang Kemakmuran – Jl. Raya Serang Pandeglang km.3, Serang No. Hp. 0254-207949</li><li>Daya Adicipta Mustika – Jl. Raya Cibeureum 26A, Bandung No. Hp. 022-6051033 / 022-6037488, Fax: 022-6037495</li><li>Astra Motor Semarang – Kel Bangunharjo Kec. Semarang Tengah, Semarang No. Hp. 024-86569000/1, Fax: 024-86569002</li><li>Astra Motor Yogyakarta – Jl. Magelang KM 7,2, Yogyakarta No. Hp. 0274-868551, Fax: 0274-868071</li><li>Mitra Pinasthika Mulia Surabaya – Jl. Simpang Dukuh 42-44, Surabaya No. Hp. 031-5324000, Fax: 031-5346248</li><li>Astra Motor Balikpapan – Jl. MT. Haryono RT 100 No. 101-103, Kel. Gunung Bahagia, Kec. Balikpapan Selatan, Balikpapan No. Hp. 0542-875109, Fax: 0542-875139</li><li>Mitra Pinasthika Mulia Malang – Jl. Jend. Basuki Rachmad 71-73, Malang Fax: 0341-320239</li><li>Astra Motor Makassar – Jl. SultanAluddin 57, Makassar No. Hp. 0411-881500</li><li>Astra Motor Denpasar – Jl. HOS Cokroaminoto 80, Denpasar No. Hp. 0361-424009, Fax: 0361-424010</li><li>Anugerah Perdana – Jl. Wolter Monginsidi 93, Palu No. Hp. 0451-422234, Fax: 0451-426651</li><li>Astra Motor Mataram – No. Hp. 0370-646388 / 0370-630331 / 0370-639321</li><li>Daya Adicipta Wisesa – Jl. Raya Manado‚ Bitung Km.10, Watutumou ‚ Kalawat, Minahasa Utara No. Hp. 0431-811999, Fax :0431‚Äì818881</li><li>Astra Motor Palembang – Jl. Ahmad Yani no. 99, Palembang Ph: 0711-517676, Fax: 0711-510471</li><li>Astra Motor Jayapura – Jl. Ferry Kelapa Dua Raya 11 Jayapura, Papua No. Hp. 0967-534555 / 0967-531777, Fax: 0967-535947</li><li>Astra Motor Bengkulu – Jl. Ir. Rustandi, Desa Kandang, Kampung Melayu, Kodya Bengkulu No. Hp. 0736-7007388, Fax: 0736-347503</li><li>Indako Trading Coy – Jl. Pemuda 18 D-H, MEDAN No. Hp. 061-4516841, Fax: 061-4510735</li><li>Capella Dinamik Nusantara Aceh – Jl Sekip Baru No 3-5, Medan No. Hp. 061-4524418, Fax: 061-4523830</li><li>Capella Dinamik Nusantara Riau – Jl. Soekarno-Hatta No. 88, Riau No. Hp. 0761-7892061, Fax. 0761-7892066 / 7892067</li><li>Capella Dinamik Nusantara Kepri (Batam) – Pertokoan Taman Merapi Subur, BlokA3 No. 1-5, Batam No. Hp. 0778-7375622, Fax. 0778-7375520</li><li>Menara Agung – Jl. Veteran 30, Padang No. Hp. 0751-22073 / 0751-27937, Fax: 0751-24524</li><li>Hayati – Jl. Pemuda 35, Padang No. Hp. 0751-26288, Fax: 0751-32495</li><li>Sinar Sentosa Primatama – Jl. Kol. Abunjani 9, RT 04, Jambi No. Hp. 0741-61551, Fax: 0741-61573</li><li>PT Tunas Dwipa Matra – Jl. Pramuka No 1, Rajabasa Nunyai, Rajabasa, Kodya Bandar Lampung No. Hp. 0721-265666, Fax: 0721-261446</li><li>Asia Surya Perkasa – A. Yani 147, Bangka No. Hp. 0717-438228, Fax: 0717-438238</li><li>Astra Motor Pontianak – Jl. A Yani I Kompleks Town House No. 8-10, Pontianak No. Hp. 0561-762289 / 0561-762290</li><li>Trio Motor – Jl. Perintis Kemerdekaan 45 AA, Banjarmasin No. Hp. 0511-3355500 / 0511-3355400, Fax: 0511-3352020</li><li>Astra Motor Samarinda – Jl. Cipto Mangunkusumo RT007 , Kelurahan Gn. Pinang , Kecamatan Samarinda Seberang, Samarinda</li></ul><div>&nbsp;</div>', '2022-05-29 22:04:54', '2022-05-29 23:05:49'),
(2, 1, 'Bio Farma', 'bio-farma', 1, 'logo-company/MvYLe8pTOAZj0JT9A77FFnAzsYHN1rVWHkfKLqOs.webp', 'Tasikmalaya', '082118418130', 'mail@biofarma.co.id', NULL, NULL, NULL, NULL, NULL, '<div>&nbsp;</div><div>Kami adalah perusahaan lifescience kelas dunia yang berdaya saing global yang memiliki peran untuk menyediakan serta mengembangkan&nbsp; Produk <em>Lifesience</em> berstandar Internasional&nbsp; untuk Meningkatkan Kualitas Hidup<br><br></div><div>Didukung kompetensi, pengalaman dan proses pembelajaran selama lebih dari 130 tahun, Bio Farma hadir sebagai bagian dari perjuangan dalam menyelamatkan dan meningkatkan kualitas hidup manusia. Mengingat pentingnya peran dalam membangun kesehatan bangsa, maka keberadaan Bio Farma dipertahankan dari masa ke masa.&nbsp;<br><br></div>', '2022-05-29 22:08:06', '2022-05-29 23:05:29'),
(3, 1, 'Yamaha Fortuna Motor', 'yamaha-fortuna-motor', 1, 'logo-company/bpmgicGr7qadyy0wxYhkgxV884oU2pYcOl1bAbPK.webp', 'jakarta', '081312347146', 'yamaha.example@gmail.com', NULL, NULL, NULL, NULL, NULL, '<div>&nbsp;</div><div>Yamaha Fortuna Motor (YFM) merupakan dealer resmi Yamaha untuk layanan. Berdiri sejak 2004, YFM fokus pada kepuasan pelanggan. YFM melayani pembelian semua jenis motor Yamaha (Moped, Matic, Naked, Maxi, Sport, dan CBU) baik secara cash maupun kredit. Melayani tukar tambah untuk semua jenis motor Yamaha.<br><br></div><div>YFM merupakan tempat yang nyaman untuk melakukan service dan bisa dilakukan setiap hari (Senin – Minggu). Juga melayani pembelian spart part asli Yamaha.&nbsp;<br><br>&nbsp;</div><div><strong><br>Kantor Cabang</strong><br><br></div><div>Menurut situs resmi YFM (<a href=\"https://www.fortuna-motor.co.id/\">https://www.fortuna-motor.co.id/</a>) saat ini terdapat 10 kantor cabang YFM. Berikut kantor cabang YFM :<br><br></div><ul><li>Fortuna Motor Kiaracondong, Jl. Kiara Condong No.401A, Kb. Kangkung, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40284, Telepon: (022) 7306663.</li><li>Fortuna Motor Rancaekek, Jl. Raya Rancaekek No. 192 Bandung Jawa Barat, Telepon: 081320320326.</li><li>Fortuna Motor Cirebon, Jl. Sunan Gunung Jati No.37 Desa Jadimulya Kec. Gunung Jati Kab. Cirebon, Telepon: (0231) 211186.</li><li>Fortuna Motor Purwakarta, Jl. RE. Martadinata 41 Purwakarta, Telepon: 081909330003</li><li>Fortuna Motor Majalengka, Jl. KH Abdul halim No 214 Majalengka kulon, Telepon: 085314700202.</li><li>Fortuna Motor Tasikmalaya, Jl RE Martadinata No 118 Cipedes Tasikmalaya, Telepon: (0265) 313423.</li><li>Fortuna Motor Sukabumi, Jl. Raya Sukaraja No 139 Sukabumi, Telepon : (0266) 224688 / 082123644488.</li><li>Fortuna Motor Banjar, Jl. Perintis Kemerdekaan No 45 B Kota Banjar, Telepon: (0265) 743688.</li><li>Fortuna Motor Karawang, Jl Raya Klari – Kosambi No.08 Duren Klari Karawang, Telepon : (0267) 435053.</li><li>Fortuna Motor Ciparay, Jl. Raya Laswi No 684 Ciparay, Telepon: (022) 5956699.</li></ul><div><br>Lowongan Kerja di Yamaha Fortuna Motor<br><br></div><div>Bagi yang ingin berkarir di YFM berikut beberapa posisi yang bisa ditempati :<br><br></div><ul><li>Management Trainee</li><li>Teknisi</li><li>Admin Gudang</li><li>Sparepart counter</li><li>Service Counter</li><li>Service Advisor</li><li>ADH Service</li><li>Kepala Cabang</li><li>Sales Counter</li></ul><div>&nbsp;</div>', '2022-05-29 22:11:24', '2022-05-29 23:04:12'),
(4, 1, 'Savana Teguh Kreasi', 'savana-teguh-kreasi', 1, 'logo-company/1qgCWSMZlsSeuhRP5Gzl8d4GRNHuRn0kVx7VK6X8.webp', 'jakarta', '082223232', 'savana.example@gmail.com', NULL, NULL, NULL, NULL, NULL, '<div>&nbsp;Savana Teguh Kreasi atau dikenal sebagai Savana adalah perusahaan Indonesia yang bergerak di bidang ritel fashion.&nbsp; Savana Teguh Kreasi berdiri dari tahun 2016 dan sudah memiliki toko dan agen di beberapa wilayah Indonesia.&nbsp;</div>', '2022-05-29 22:25:37', '2022-05-29 23:21:01'),
(5, 1, 'Kementerian Komunikasi dan Informatika', 'kementerian-komunikasi-dan-informatika', 1, 'logo-company/OojxAZD4YOY9LZNC26U17yk8Lm06LJBC3wVXcEn0.jpg', 'jakarta', '082118418131', 'kemendikbud.example@gmail.com', NULL, NULL, NULL, NULL, NULL, '<div>-</div>', '2022-05-29 22:32:35', '2022-05-29 23:23:35'),
(6, 4, 'Plaza Asia Tasikmalaya', 'plaza-asia-tasikmalaya', 0, NULL, 'Tasikmalaya', '082321234', 'plaza.asia326@gmail.com', NULL, NULL, NULL, NULL, NULL, '<div>&nbsp;</div><div>Plaza Asia Tasikmalaya merupakan salah satu shopping mall terbesar di Tasikmalaya. Gerai yang tersedia sangat lengkap, dari mulai super market, department store, wahana bermain anak, toko buah, toko roti, bioskop, restoran, hotel hingga toko buku. Brand-brand besar yang membuka cabang di Tasikmalaya biasanya akan menyewa gerai di Plaza Asia.<br><br></div><div>Beberapa gerai terkenal yang tersedia di Plaza Asia :<br><br></div><ul><li>J.Co</li><li>Pizza Hut</li><li>Bread Talk</li><li>KFC</li><li>Texas Chicken</li><li>21 Cinema</li><li>Gramedia</li><li>Ace Hardware</li><li>Chatime</li><li>Eraphone</li><li>Informa</li><li>Hokben</li><li>Solaria</li><li>Zoya</li><li>Optik Melawai</li><li>Hotel Asri Tasikmalaya</li><li>Teejay Waterpark</li><li>dll</li></ul><div>Berada di jalan HZ. Mustofa no. 326 Tasikmalaya menjadikan Asia Plaza sangat strategis dan mudah dijangkau. Parkir yang disediakan juga sangat luas dan nyaman.<br><br></div><div>Plaza Asia buka pada pukul 10.00 WIB – 21.00 WIB baik pada hari kerja maupun hari libur.&nbsp;<br><br></div>', '2022-05-29 23:27:14', '2022-05-29 23:27:14'),
(7, 1, 'J&T Indonesia', 'j&t-indonesia', 0, 'logo-company/8bHWL1z0ucW7Mja1h3eUK7te98QVuu5skcXRJgT6.png', 'Tasikmalaya', '12341231221', 'jnt@gmail.com', NULL, NULL, NULL, NULL, NULL, '<div>&nbsp;</div><div><strong>J&amp;T Express</strong> merupakan sebuah perusahaan multinasional yang bermarkas di <a href=\"https://id.wikipedia.org/wiki/Jakarta\">Jakarta</a>, <a href=\"https://id.wikipedia.org/wiki/Indonesia\">Indonesia</a>. Perusahaan ini didirikan pada tanggal <a href=\"https://id.wikipedia.org/wiki/20_Agustus\">20 Agustus</a> <a href=\"https://id.wikipedia.org/wiki/2015\">2015</a>. Perusahaan ini umumnya bergerak di bidang ekspedisi.<br><br></div><div>Pada tahun 2018, J&amp;T telah membangun gudang sortir otomatis di Semarang dan Surabaya.<br><br></div><div>Pergeseran pasar dari tradisional ke pasar digital lewat media <a href=\"https://id.wikipedia.org/wiki/Internet\">internet</a>, menjadikan kebutuhan masyarakat sangat tinggi akan jasa ekspedisi.<br><br></div><div>Perubahan ini terlihat pada hal pengiriman barang, yang sebelumnya lazim dilakukan oleh barang industri dan produksi, maka saat ini mulai didominasi barang-barang retail.<br><br></div><div>Melihat peluang demikian, maka J&amp;T hadir dengan menawarkan keunggulan yang kompetitif dan inovatif.<br><br></div><blockquote>Perusahaan penyedia jasa ekspedisi J&amp;T dibangun tepatnya pada tanggal 20 Agustus 2015. Pada hari itu secara resmi PT. Global Jet Express didirikan sekaligus meresmikan kantor pusatnya di pluit, Jakarta Utara.</blockquote><div>Meskipun perusahaan ini adalah perusahaan baru dibidang jasa pengiriman barang dan ekspedisi, namun J&amp;T optimis akan menjadi jasa unggulan dan menjadi pilihan bagi maysarakat Indonesia.<br><br></div><blockquote>Prestasi yang berhasil diraih bisa dibilang sangat baik mengingat sejarah J&amp;T sendiri tidak begitu panjang. Hal ini dikarenakan founder J&amp;T, Jet Lee yang telah membangun jaringan Oppo Indonesia selama tiga tahun sebelumnya.</blockquote><div>Maka, Ketika J&amp;T Express berdiri dan mulai beroprasi, mereka tidak harus memulainya dari nol karena sudah memiliki jalur-jalur distribusi di Indonesia.<br><br></div><div>Selain Jet Lee<strong> </strong>sebagai founder sekaligus CEO pertama J&amp;T, terdapat satu tokoh lagi yang sangat berpengaruh.<br><br></div><div>Beliau adalah<strong> Robin Lo </strong>yang berperan sebagai managing director atau tangan kanan langsung dari sang CEO saat J&amp;T berdiri.<br><br></div><div>Berkat strategi Robin yang ekspansif, dalam waktu singkat J&amp;T Express mulai dikenal masyarakat luas dan menjadi penantang serius bagi perusahaan logistik yang sudah eksis puluhan tahun.&nbsp;<br><br></div>', '2022-05-29 23:36:13', '2022-05-29 23:36:45'),
(8, 4, 'INDOMOBIL Tasikmalaya', 'indomobil-tasikmalaya', 0, 'logo-company/9h3aBjzOhhjslkPN76hWDmWocPbe2Y5FmtME3WiL.jpg', 'Tasikmalaya', '082321231', 'indomobil.example@gmail.com', NULL, NULL, NULL, NULL, NULL, '<div>Sebuah Perusahaan&nbsp;</div>', '2022-05-31 09:20:58', '2022-05-31 09:22:12'),
(9, 2, 'Apotek K24', 'apotek-k24', 0, 'logo-company/CWlmvOmr5jOoGJTCwxbg24q7QhvazsIJZpYy7xIF.jpg', 'Bandung', '08123123123', 'apotek24@gmail.com', NULL, NULL, NULL, NULL, NULL, '<div>&nbsp;<strong>Apotek K-24</strong> adalah Jaringan <strong>Apotek</strong> Waralaba Nasional yang menyediakan kebutuhan obat-obatan dan alat kesehatan. Berada di bawah naungan PT. <strong>K-24</strong> Indonesia, saat ini <strong>Apotek K-24</strong> telah meraih berbagai penghargaan yang menjadikan <strong>apotek</strong> ini dipercaya menjadi <strong>Apotek</strong> Waralaba Terbaik di Indonesia.&nbsp;</div>', '2022-06-30 08:32:07', '2022-06-30 08:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `company_categories`
--

CREATE TABLE `company_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_categories`
--

INSERT INTO `company_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'perusahaan fashion', 'perusahaan-fashion', '2022-05-29 22:04:28', '2022-05-29 22:04:28'),
(2, 'perusahaan kesehatan', 'perusahaan-kesehatan', '2022-05-29 22:04:28', '2022-05-29 22:04:28'),
(3, 'perusahaan teknologi', 'perusahaan-teknologi', '2022-05-29 22:04:28', '2022-05-29 22:04:28'),
(4, 'perusahaan distributor', 'perusahaan-distributor', '2022-05-29 22:04:28', '2022-05-29 22:04:28'),
(5, 'perusahaan lainnya', 'perusahaan-lainnya', '2022-05-29 22:04:28', '2022-05-29 22:04:28'),
(6, 'perusahaan otomotiff', 'perusahaan-otomotif', '2022-05-31 09:34:47', '2022-05-31 09:35:34'),
(7, 'test company', 'test-company', '2022-06-01 09:00:49', '2022-06-01 09:00:49');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration_date` date NOT NULL,
  `level_career` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `category_id`, `company_id`, `title`, `slug`, `location`, `expiration_date`, `level_career`, `salary`, `type`, `image`, `body`, `created_at`, `updated_at`) VALUES
(1, 2, 7, 3, 'Staff Marketing Yamaha Fortuna Motor Tasikmalaya', 'staff-marketing-yamaha-fortuna-motor-tasikmalaya', 'Tasikmalaya', '2022-06-10', 'Junior', 'Rp5000.000 - Rp10.000.000', 'Paruh waktu', 'image-job/hSfpFe9qVuvtJQa1hTreXAQOjagHoQJmUHfyPhQq.jpg', '<div>&nbsp;</div><div>Yamaha Fortuna Motor Tasikmalaya membutuhkan Staff Marketing dengan kualifikasi sebagai berikut :<br><br></div><ul><li>Lulusan Smp/Sma/Smk</li><li>Memiliki SIM C</li><li>Dapat Bekerja Dalam Team</li><li>Pria/Wanita</li></ul><div><br><strong>Tatacara pendaftaran</strong><br><br></div><div>Lamaran bisa dikirim langsung ke dealer fortuna motor :<br><br></div><div>JL Re. Martadinata no.118<br>Cipedes – Tasikmalaya<br>Telp/Whatsaap : 0853-5335-9334&nbsp;<br><br></div>', '2022-05-29 23:09:22', '2022-05-29 23:17:19'),
(2, 2, 3, 1, 'IT Analyst – Astra Honda Motor', 'it-analyst-astra-honda-motor', 'Tasikmalaya', '2022-06-11', 'Junior', 'Rp15000.000 - Rp17.000.000', 'Paruh waktu', 'image-job/EZL9AAnKJU2Oyi0L7xXOA0FQMFJq4pIyCZ0TmQdy.jpg', '<div>&nbsp;</div><div>Dibutuhkan IT Analyst untuk PT. Astra Honda Motor untuk ditempatkan di Plant Sunter dengan kualifikasi sebagai berikut :<br><br></div><ul><li><ol><li>Lulus / semester akhir S1 jurusan Teknik Informatika / Sistem Informasi / Teknik Elektro / Teknik Komputer / Computer Science / Automation Engineering</li><li>IPK min 3,00</li><li>Usia maksimal 27 tahun</li><li>Memiliki minat dan kemampuan yang teruji untuk bidang : Programming, System Analysis, Database Design, Automation Engineering, IT Architecture, Hardware Technology, Computer Network, Server Operating System dan IT Security.</li><li>Menguasai salah satu atau lebih bahasa pemrograman</li></ol></li><li><br></li><li>Tugas &amp; tanggung jawab :</li></ul><div><br></div><ol><li>Melakukan pengembangan sistem aplikasi berskala enterprise di AHM, serta menjaga integrasinya dengan mengacu pada metode pengembangan sistem yang telah ditentukan.</li><li>Melakukan koordinasi antar bagian IT AHM dan Business Development Function, Process Owner dan User dalam mengimplementasikan sistem aplikasi termasuk menetapkan target implementasi sistem dan melakukan evaluasi berkesinambungan</li></ol><div>Silahkan daftarkan lamaran anda ke <a href=\"https://recruitment.astra-honda.com/vacancy_detail.htm?id=7\">https://recruitment.astra-honda.com/vacancy_detail.htm?id=7</a>.&nbsp;<br><br></div>', '2022-05-29 23:11:35', '2022-05-29 23:11:35'),
(3, 2, 3, 2, 'Junior Staff IT Helpdesk – Bio Farma', 'junior-staff-it-helpdesk-bio-farma', 'Ciamis', '2022-06-09', 'Junior', 'Rp. 10.000.000 - Rp. 20.000.000', 'Fulltime', 'image-job/2oK6c96YjXvXrocKqXM3GRQ1rWjHz9tJ2WAyzXYF.jpg', '<div>&nbsp;</div><div><strong><br>Deskripsi<br></strong><br></div><div>Berfokus pada analisis dan perbaikan permasalahan software, hardware, jaringan komputer serta melaksanakan trouble shooting yang sesuai dengan Tata Kelola Teknologi Informasi yang berlaku di perusahaan<br><br></div><ol><li>Menjamin pelaksanaan pengelolaan admin aplikasi dan laporan permasalahan setiap aplikasi sesuai dengan target</li><li>Memastikan solusi yang diberikan dan dilakukan sudah dapat menyelesaikan masalah</li><li>Memastikan permasalahan dari user sudah selesai atau masih dalam proses pengerjaan oleh service operator</li><li>Helpdesk layanan Teknologi Informasi</li><li>Menjalankan fungsi sebagai admin aplikasi non-quality</li></ol><div><strong><br>Kualifikasi<br></strong><br></div><ol><li>Pendidikan minimal D3 Teknik Informatika/ Ilmu Komputer/ Sistem Informasi/ Teknik Elektro/ Teknik Komputer</li><li>Dapat belajar dengan cepat untuk aplikasi yang baru</li><li>Memiliki komunikasi yang baik</li><li>Dapat bekerja dengan Tim</li><li>Memiliki pengalaman dengan aplikasi Web base dan Desktop</li><li>Memiliki pengetahuan query databases</li><li>Memiliki dasar aplikasi Web base dan Desktop</li></ol><div>&nbsp;</div>', '2022-05-29 23:15:48', '2022-05-29 23:15:48'),
(4, 2, 7, 4, 'Customer Service / Admin Online – Savana', 'customer-service-admin-online-savana', 'Tasikmalaya', '2022-06-06', 'Customer Service', 'Rp. 5000. 0000 - Rp. 20.000.000', 'Paruh waktu', 'image-job/5RCfbsUMjAoOgwmzrgvImvbssz61WQDjvqzKd5Wl.jpg', '<div>&nbsp;</div><div><strong><br>Syarat Pekerjaan</strong><br><br></div><ul><li>Min. D1</li><li>Pria/Wanita</li><li>Pengalaman di bidangnya min. 1 thn</li><li>Jujur &amp; disiplin &amp; sabar</li><li>Mampu bekerja dalam tim</li><li>Mampu bekerja dengan orientasi target penjualan</li><li>Memiliki kemampuan komunikasi yang baik</li><li>Mampu &amp; mengerti Basic Office (excel &amp; word)</li><li>Mengerti dan akrab dengan berbagai bentuk media sosial &amp; platform marketplace</li><li>Menguasai sistem transaksi online</li><li>Mengikuti perkembangan dunia digital.</li></ul><div>&nbsp;</div>', '2022-05-29 23:23:01', '2022-05-29 23:23:01'),
(5, 2, 4, 5, 'Penerimaan Pegawai Pemerintah Non Pegawai Negeri (PPNPN) Kementerian Komunikasi dan Informatika RI', 'penerimaan-pegawai-pemerintah-non-pegawai-negeri-ppnpn-kementerian-komunikasi-dan-informatika-ri', 'jakarta', '2022-07-09', 'Junior', 'Rp15000.000 - Rp17.000.000', 'Fulltime', NULL, '<div>&nbsp;</div><div>Pengumuman Penerimaan Pegawai Pemerintah Non Pegawai Negeri (PPNPN) di Lingkungan Direktorat Tata Kelola Aplikasi Informatika untuk posisi :<br><br></div><ol><li>Pelaksana Analis Hukum bidang Pelindungan Data Pribadi (2 orang) dengan latar belakang Min. S1 Hukum</li><li>Pelaksana Analis Kelembagaan dan Kerja Sama bidang Pelindungan Data Pribadi (1 orang) dengan latar belakang Min. S1 Hukum/Teknologi Informasi/ Hubungan Internasional/ jurusan lainnya yang relevan</li></ol><div>Periode pendaftaran dan pengumpulan berkas: 24-28 Januari 2022.<br><br></div><div>PERSYARATAN UMUM<br><br></div><ol><li>Warga Negara Indonesia;</li><li>Pada tanggal 1 Januari 2022 memiliki usia maksimum 32 tahun.</li><li>Lulusan Perguruan Tinggi dan/atau Program Studi yang terakreditasi ‘A’ dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) dengan persyaratan IPK minimal 3,0 (tiga koma nol) pada skala 4 (empat).</li><li>Memiliki latar belakang pendidikan, keahlian, dan/atau kemampuan sesuai dengan kualifikasi bidang yang dibutuhkan.</li><li>Mampu mengoperasikan perangkat komputer, aplikasi pengolah dokumen, sharing folder, dan online meeting.</li><li>Dapat berkomunikasi dan menguasai Bahasa Indonesia dan Bahasa Inggris (lisan dan tulisan) dengan baik.</li><li>Mampu bekerja sendiri maupun dalam kelompok.</li><li>Memiliki kemampuan berpikir kritis dan analitis, mampu bekerja dengan disiplin dan sungguh-sungguh, serta berkomitmen untuk bekerja sama di dalam tim.</li><li>Berkelakuan baik, memiliki loyalitas, dan bersedia menaati semua peraturan yang berlaku.</li><li>Bersedia bekerja penuh waktu (full time) selama kontrak berlangsung.</li><li>Bersedia bekerja selama jangka waktu perjanjian kerja dan bersedia untuk diperpanjang sekurang-kurangnya 1 (satu) tahun.</li><li>Belum menikah dan bersedia tidak menikah selama jangka waktu perjanjian kerja.</li></ol><div>Syarat dan Tata Cara Pendaftaran Selengkapnya: <a href=\"https://komin.fo/PPNPN-PDP2022\">https://komin.fo/PPNPN-PDP2022</a>&nbsp;<br><br></div>', '2022-05-29 23:25:02', '2022-06-30 08:28:19'),
(6, 2, 6, 7, 'Freelance Kurir CPS Pahlawan – J&T Express', 'freelance-kurir-cps-pahlawan-j&t-express', 'bandung', '2022-06-11', 'senior', 'Rp. 5000.000 - Rp. 20.000.000', 'Freelance', 'image-job/fsiAzOPhFo1bYjVbRvIHzvtT0WVxqu8V9nZpt1SP.jpg', '<div>&nbsp;</div><div>J&amp;T Express Bandung adalah perusahaan yang bergerak di bidang pengiriman paket, saat ini sedang membutuhkan karyawan baru guna menenpati posisi Freelance Kurir CPS Pahlawan.<br><br></div><div><br>Syarat Pekerjaan<br><br></div><ul><li>Pria, maksimal berusia 35 tahun</li><li>Minimal SMA/SMK sederajat</li><li>Memiliki SIM C aktif dan motor pribadi (Diutamakan motor matic)</li><li>Mempunyai smartphone android min ram 2G</li><li>Jujur dan bertanggung jawab</li><li>Memiliki Sertifikat Vaksin Covid-19</li><li>Diutamakan berdomisili di Cibeunying Kidul atau Sumur Bandung</li></ul><div>Kontak person: +62811261672<br><br></div><div>Untuk melamar silahkan kirim ke: hr.shadiqaimanina@gmail.com&nbsp;<br><br></div>', '2022-05-29 23:38:13', '2022-05-29 23:38:13'),
(7, 2, 6, 1, 'Customer Relation Analyst – Astra Honda Motor', 'customer-relation-analyst-astra-honda-motor', 'bandung', '2022-06-11', 'Senior', 'Rp15000.000 - Rp17.000.000', 'Paruh waktu', 'image-job/4osS5jIlrUv5G232du1IrW5EXbG2XpBQYCQ5dERD.jpg', '<div>&nbsp;</div><div>PT. Astra Honda Motor membutuhkan Customer Relation Analyst untuk ditempatkan di plat sunter dengan kualifikasi sebagai berikut :<br><br></div><ul><li>Lulus S1 atau semester akhir S1 jurusan Statistika / Teknik Informatika / Manajemen Marketing / Manajemen Bisnis / Manajemen Informatika</li><li>IPK min 3,00</li><li>Umur maksimal 27 tahun</li><li>Menguasai tools analisis &amp; pengolahan data</li><li>Aktif dalam berbahasa Inggris, lisan maupun tulisan</li><li>Mampu menganalisis masalah &amp; problem solving</li></ul><div>Tugas &amp; tanggung jawab customer relation analyst di PT. Astra Honda Motor :<br><br></div><ul><li>Mengkombinasikan hasil pengolahan data untuk mendapatkan hasil analisis yang sesuai dengan kebutuhan dan bisnis proses terintegrasi</li><li>Melakukan sosialisasi persuasif ke user terkait program retensi customer</li><li>Mengembangkan program yang lebih efektif di user dan jaringannya</li><li>Melakukan monitoring implementasi di user dan jaringannya guna mendapatkan hasil evaluasi dan feedback terhadap implementasi program tersebut</li></ul><div>Silahkan kirim lamaran pekerjaan anda ke : <a href=\"https://recruitment.astra-honda.com/vacancy_detail.htm?id=8\">https://recruitment.astra-honda.com/vacancy_detail.htm?id=8</a>.&nbsp;<br><br></div>', '2022-05-31 07:29:13', '2022-05-31 07:29:13'),
(8, 2, 1, 9, 'Cashier', 'cashier', 'Tasikmalaya', '2022-07-09', 'Junior', 'Rp. 10.000.000 - Rp. 20.000.000', 'Fulltime', 'image-job/yxp25uaVjfBlLLFb0lox5Z8JpePUdq1XTIimpJhW.jpg', '<div>&nbsp;</div><div><br>Deskripsi Pekerjaan<br><br></div><ul><li>Mampu mengoprasikan sistim kasir</li><li>Mencatat penjualan harian</li><li>Membantu loading in dan loading out.</li></ul><div><br>Syarat Pekerjaan<br><br></div><ul><li>Pria</li><li>Teliti, jujur, &amp; bertanggung jawab</li><li>Dapat berkerja sama dalam tim</li><li>Lebih diutamakan yang berpengalaman</li><li>Bersedia ditempatkan di Bandung</li><li>Belum menikah</li><li>Bisa mengoprasikan sistem kasir</li><li>Membantu loading in dan loading out</li><li>Bersedia bekerja dari sore ke malam</li></ul><div><strong>Kirim CV ke EMAIL dengan subject (posisi yang diinginkan_nama_no hp).</strong><br>ke email hrd.shinimari@gmail.com&nbsp;<br><br></div>', '2022-05-31 07:31:53', '2022-06-30 08:44:56'),
(9, 2, 3, 7, 'Front End Senior', 'front-end-senior', 'Tasikmalaya', '2022-06-11', 'Senior', 'Rp. 10.000.000 - Rp. 20.000.000', 'Paruh waktu', 'image-job/EpBxsCjeadPRV5BpzwGVlM0MgiNP7VFM0GFihxnj.jpg', '<div>&nbsp;</div><div><br>Deskripsi Pekerjaan<br><br></div><ul><li>Senior front-end developer with VUE</li><li>Build web app</li><li>Build hybrid mobile apps</li><li>Collaboration using back-end developers and designer to improve usability</li></ul><div><br>Syarat Pekerjaan<br><br></div><ul><li>Proven work experience as a front-end developer at least 2 years</li><li>Experience with modern framework (especially vue.js), state management (especially vuex), and service (especially firebase)</li><li>Understanding how to using github</li><li>Understanding Rest API and HTTP request/response model</li></ul><div><strong>Send your CV to :</strong><br><strong>Front End Senior : </strong><a href=\"https://bit.ly/frontendjwalbli\"><strong>https://bit.ly/frontendjwalbli</strong></a>&nbsp;<br><br></div>', '2022-05-31 08:33:18', '2022-05-31 08:37:47'),
(10, 2, 5, 9, 'Apoteker Pendamping – Apotek K24 Ters Jakarta', 'apoteker-pendamping-apotek-k24-ters-jakarta', 'Ciamis', '2022-07-09', 'Junior', 'Rp5000.000 - Rp10.000.000', 'Fulltime', NULL, '<div>Syarat Pekerjaan<br><br></div><ul><li>Perempuan/Laki-laki</li><li>Maksimal 30 Tahun</li><li>Memiliki STRA aktif dan bersedia membuat SIPA</li><li>Jujur, bertanggung jawab, dapat bekerja mandiri maupun team, dapat menjadi pemimpin dan panutan dalam team, mau belajar, komunikatif</li><li>Bersedia bekerja Shift</li></ul><div><strong>Drop CV ke Alamat : Apotek K24 Ters Jakarta, Jl. Ters Jakarta no 37, Kota Bandung.</strong><br><strong>More Information : 022-7210466 // 08112109611</strong>&nbsp;<br><br></div>', '2022-06-30 08:40:28', '2022-06-30 08:40:28'),
(11, 2, 1, 3, 'Accounting', 'accounting', 'bandung', '2022-07-16', 'Senior', 'Rp15000.000 - Rp17.000.000', 'Fulltime', NULL, '<div>&nbsp;Sebagai Accounting Staff, Anda akan bertanggung jawab memeriksa dan melakukan verifikasi transaksi keuangan perusahaan, melakukan pencatatan dan dokumentasi, serta bertugas menyusun laporan keuangan secara akurat. Dalam peranan ini, kami juga mengharapkan Anda untuk memahami gambaran umum mengenai pajak, khususnya yang terkait dengan transaksi keuangan.<br><br>Tugas dan Tanggung Jawab :<br><br>1. Membuat pembukuan keuangan kantor<br><br>2. Melakukan posting jurnal operasional<br><br>3. Membuat laporan keuangan<br><br>4. Menginput data jurnal akuntansi ke dalam sistem yang dimiliki perusahaan<br><br>5. Memeriksa dan melakukan verifikasi kelengkapan dokumen yang berhubungan dengan transaksi keuangan<br><br>6. Melakukan rekonsiliasi dan penyesuaian data finansial<br><br>7.Membuat Laporan perpajakan&nbsp;</div>', '2022-06-30 08:43:41', '2022-06-30 08:43:41'),
(12, 2, 2, 6, 'Content Creator Tasikmalaya', 'content-creator-tasikmalaya', 'Tasikmalaya', '2022-07-09', 'Senior', 'Rp5000.000 - Rp10.000.000', 'Paruh waktu', NULL, '<div>&nbsp;</div><div>Kami sedang mencari tim yang cocok untuk bekerja di posisi sebagai berikut:<br><br></div><div>CONTENT CREATOR<br><br></div><ul><li>Lebih Diutamakan Perempuan</li><li>Disiplin, Kreatif, Bertanggung jawab, &amp; terbiasa dengan deadline</li><li>Memiliki Keahlian; Photography, Videography, &amp; Editing</li><li>Paham Menggunakan; Adobe Premiere Pro, Photoshop, &amp; software editing lainnya</li><li>Mampu Membuat Konten Menarik (Viral, Engage, &amp; Berkesan)</li><li>Mampu Mengelola Social Media (Facebook, Instagram, Tiktok, &amp; Youtube)</li><li>Bersedia Bekerja Sesuai Dengan Target</li></ul><div>CUSTOMER SERVICE RELATIONSHIP<br><br></div><ul><li>Lebih Diutamakan Perempuan</li><li>Disiplin, Komunikatif, Ramah, &amp; Bertanggung jawab</li><li>Memiliki Keahlian; Service Execellent &amp; Handling Objection</li><li>Paham Menggunakan Ms Excel</li><li>Menguasai Copywriting &amp; Teknik Closing</li><li>Mampu Mengelola Marketplace (Shopee, Lazada, &amp; Tokopedia)</li><li>Bersedia Bekerja Sesuai Dengan Target</li></ul><div>Hari &amp; Jam Kerja<br><br></div><ul><li>Hari Kerja &gt; Senin s/d Sabtu</li><li>Jam Kerja &gt; Pk.09:00 s/d Pk.18:00</li></ul><div>Fasilitas<br><br></div><ul><li>Gaji Pokok</li><li>Uang Transport</li><li>Uang Makan</li><li>Insentif &amp; Bonus</li></ul><div>Alamat Kantor<br><br></div><div>Perumahan Grand Panorama Residence Cikalang,<br>Jl. Sule Setianegara, Kel. Cikalang, Kec. Tawang, Kota Tasikmalaya<br>Info Lebih Lanjut Via WhatsApp<br>0822-1675-2225&nbsp;<br><br></div>', '2022-06-30 08:46:50', '2022-06-30 08:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$YtStAvuAsqshEdh47qc5Recgw/9RmJY8HigTaWgPXg.N9EMpFRDdK', NULL, NULL),
(2, 'Fahmy', 'fahmyfauzii@gmail.com', '$2y$10$YtStAvuAsqshEdh47qc5Recgw/9RmJY8HigTaWgPXg.N9EMpFRDdK', '2022-05-29 21:57:59', '2022-05-29 21:57:59'),
(4, 'test test', 'test@test.com', '$2y$10$IjP7z6ljPeo4KS2jNJJPM.TjbaP7UJNwxYkSiPWa8RlVjClYt.5dq', '2022-06-07 01:13:05', '2022-06-07 01:13:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_slug_unique` (`slug`),
  ADD UNIQUE KEY `companies_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `companies_email_unique` (`email`),
  ADD UNIQUE KEY `companies_social_facebook_unique` (`social_facebook`),
  ADD UNIQUE KEY `companies_social_instagram_unique` (`social_instagram`),
  ADD UNIQUE KEY `companies_social_youtube_unique` (`social_youtube`),
  ADD UNIQUE KEY `companies_social_twitter_unique` (`social_twitter`),
  ADD UNIQUE KEY `companies_website_unique` (`website`);

--
-- Indexes for table `company_categories`
--
ALTER TABLE `company_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company_categories_name_unique` (`name`),
  ADD UNIQUE KEY `company_categories_slug_unique` (`slug`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jobs_slug_unique` (`slug`),
  ADD KEY `jobs_company_id_foreign` (`company_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `company_categories`
--
ALTER TABLE `company_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
