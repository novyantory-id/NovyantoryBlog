-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql301.infinityfree.com
-- Generation Time: Nov 14, 2024 at 08:20 PM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_37709763_blogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `kategori_id` int(11) UNSIGNED NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `slug_artikel` varchar(255) NOT NULL,
  `gambar_artikel` varchar(225) NOT NULL,
  `isi` text NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `user_id`, `kategori_id`, `judul_artikel`, `keyword`, `slug_artikel`, `gambar_artikel`, `isi`, `created_at`) VALUES
(20, 2, 6, 'Strawberry Daratan Rendah: Manisnya Sehat di Setiap Gigitan', 'strawberry daratan rendah', 'strawberry-daratan-rendah', '1731582868_2dbe247f9ce81974f039.jpg', '<p>Bayangkan menyantap buah manis dan segar yang bisa Anda nikmati kapan saja, di mana saja, bahkan tanpa harus pergi jauh ke daerah pegunungan. Strawberry, buah merah cerah yang dikenal luas dengan rasa manisnya, kini hadir dengan keajaiban baru—strawberry daratan rendah. Tanaman yang dulunya hanya bisa tumbuh di dataran tinggi dengan suhu dingin ini, sekarang mampu beradaptasi dan tumbuh subur di daerah rendah, bahkan dengan cuaca panas.</p><p><br></p><p>Di balik rasanya yang menggoda, strawberry daratan rendah menyimpan berbagai manfaat kesehatan yang luar biasa. Dari meningkatkan sistem kekebalan tubuh hingga menjaga kesehatan kulit, strawberry ini tak hanya menyegarkan, tetapi juga memberikan dampak positif bagi tubuh. Siap untuk mengenal lebih jauh tentang strawberry daratan rendah dan segala keistimewaannya? Simak artikel ini untuk mengetahui lebih lanjut!</p><h2><p><h2>Strawberry Daratan Rendah: Kenali Lebih Dekat dan Manfaatnya</h2></p></h2><p>Strawberry biasanya tumbuh di tempat dengan suhu dingin dan ketinggian lebih dari 800 meter di atas permukaan laut. Namun, dengan inovasi teknologi pertanian, strawberry daratan rendah kini dapat ditanam di ketinggian kurang dari 500 meter, bahkan di daerah yang memiliki suhu yang lebih panas. Jenis strawberry ini biasanya lebih tahan terhadap suhu panas dan mampu beradaptasi dengan kondisi lingkungan yang lebih bervariasi.</p><p><br></p><p>Meskipun strawberry daratan rendah mungkin tidak memiliki rasa sekuat atau se-manis strawberry yang tumbuh di dataran tinggi, buah ini tetap memiliki kualitas yang sangat baik dan kaya akan nutrisi.</p><h2>Keunggulan Strawberry Daratan Rendah</h2><p>Ada beberapa keunggulan dari strawberry daratan rendah yang patut Anda ketahui, di antaranya:</p><h3>Tumbuh di Daerah yang Lebih Luas</h3><p>Karena strawberry daratan rendah dapat tumbuh pada ketinggian rendah, mereka dapat dibudidayakan di lebih banyak tempat, bahkan di daerah yang sebelumnya tidak memungkinkan untuk menanam strawberry. Hal ini membuat akses terhadap strawberry menjadi lebih mudah, terutama di daerah perkotaan.</p><h3>Lebih Tahan terhadap Panas</h3><p>Strawberry daratan rendah memiliki daya tahan yang lebih baik terhadap suhu panas dibandingkan dengan strawberry yang tumbuh di dataran tinggi. Ini membuatnya cocok untuk iklim tropis atau daerah yang memiliki cuaca panas dan lembap.</p><h3>Proses Budidaya yang Lebih Efisien</h3><p>Strawberry daratan rendah juga dapat dipanen lebih cepat dibandingkan dengan strawberry dataran tinggi. Proses pembudidayaan lebih efisien dan membutuhkan lebih sedikit biaya, karena tanaman strawberry ini lebih mudah beradaptasi dengan lingkungan sekitarnya.</p><h2>Manfaat Kesehatan dari Strawberry Daratan Rendah</h2><p>Meskipun strawberry daratan rendah tidak tumbuh di daerah yang dingin, manfaat kesehatannya tidak kalah dengan strawberry yang dibudidayakan di dataran tinggi. Berikut beberapa manfaat utama dari buah ini:</p><h3>Meningkatkan Kesehatan Jantung</h3><p>Strawberry mengandung anthocyanin, jenis antioksidan yang membantu mengurangi peradangan dan melindungi pembuluh darah, sehingga dapat menurunkan risiko penyakit jantung.</p><h3>Menjaga Kesehatan Kulit</h3><p>Kandungan vitamin C yang tinggi dalam strawberry membantu dalam produksi kolagen, protein yang menjaga kekenyalan dan elastisitas kulit, serta melindungi kulit dari kerusakan akibat paparan sinar matahari.</p><h3>Meningkatkan Sistem Kekebalan Tubuh</h3><p>Dengan kandungan vitamin C yang melimpah, strawberry juga sangat efektif dalam memperkuat sistem kekebalan tubuh, membantu tubuh melawan berbagai penyakit dan infeksi.</p><h3>Meningkatkan Pencernaan</h3><p>Kandungan serat pada strawberry mendukung proses pencernaan, mencegah sembelit, dan menjaga kesehatan usus Anda.</p><h3>Menurunkan Risiko Diabetes</h3><p>Strawberry memiliki indeks glikemik yang rendah, yang berarti dapat membantu menjaga kadar gula darah tetap stabil dan mengurangi risiko diabetes tipe 2 jika dikonsumsi secara teratur.</p><h2>Jenis Strawberry Daratan Rendah yang Dapat Ditanam di Indonesia</h2><p>Di Indonesia, meskipun strawberry umumnya diasosiasikan dengan dataran tinggi, ada beberapa jenis yang mampu tumbuh dengan baik di dataran rendah.</p><p>Berikut adalah penjelasan tentang jenis-jenis strawberry tersebut dan varietas lain yang serupa:</p><h3>1. Mencir</h3><p><b>Asal</b>: Varietas lokal dari Indonesia.</p><p><b>Ciri Khas:</b></p><ol><li>Ukuran buah sedang dengan warna merah cerah.</li><li>Rasa manis dengan sedikit asam.</li><li>Daya tahan terhadap suhu panas cukup baik.</li></ol><p><strong>Keunggulan</strong>:</p><ol><li>Mudah dibudidayakan di dataran rendah.</li><li>Adaptif terhadap iklim tropis.</li><li>Perawatan sederhana, cocok untuk petani pemula.</li></ol><h3>2. California</h3><p><b>Asal:</b> California, Amerika Serikat.</p><p><b>Ciri Khas</b>:</p><ol><li>Buah berbentuk kerucut dengan warna merah cerah.</li><li>Rasa manis dengan sedikit asam yang menyegarkan.</li><li>Ukuran buah lebih besar dibandingkan Mencir.</li></ol><p><b>Keunggulan</b>:</p><ol><li>Tahan terhadap suhu panas dan kelembapan tinggi.</li><li>Produktivitas tinggi dengan kualitas buah premium.</li><li>Cocok untuk budidaya skala besar di dataran rendah.</li></ol><p>Jadi, tunggu apa lagi? Cobalah menanam dan menikmati strawberry daratan rendah beserta manfaat kesehatannya sekarang!</p>', '2024-11-14 17:36:00'),
(22, 2, 6, ' 10 Fakta Menarik Tentang Tomat yang Tidak Banyak Diketahui', 'fakta tomat', 'fakta-tomat', '1731586763_d2e9b7ad0955f65db317.jpg', '<p>Saya suka hasil bumi. Saya suka menanamnya. Dan saya suka memakannya. Saya juga suka membuat resep dengannya. Saya juga seorang nerd dan ingin mengenal produk saya. Saya suka mempelajari informasi baru atau informasi menarik tentang produk yang saya tanam/makan/buat. Jika Anda orang aneh seperti saya, bersiaplah untuk melihat seri baru ini saat saya menyelami banyak fakta produksi dan membaginya dengan Anda.</p><h2>10 Fakta Menarik Tentang Tomat!</h2><p>Dari sudut pandang botani,&nbsp;<span style=\"font-weight: 700;\">tomat adalah buah</span>. Pada tahun 1800-an diklasifikasikan sebagai sayuran oleh pemerintah sehingga dapat dikenakan pajak berdasarkan peraturan adat.</p><p>Pemegang&nbsp;<span style=\"font-weight: 700;\">Rekor Dunia Guinness Book</span>&nbsp;untuk pohon tomat yang paling aktif berproduksi di dunia sebenarnya ditanam di Walt Disney World dalam rumah kaca eksperimental mereka. Pabrik ini menghasilkan lebih dari 32.000 tomat dalam 16 bulan pertama setelah ditanam. Tomat suci, batman!</p><p><span style=\"font-weight: 700;\">93% kebun di Amerika</span>&nbsp;adalah tanaman tomat.&nbsp;<span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Artinya, hampir setiap tukang kebun mencoba menanam tomat!</span></p><p><span style=\"font-weight: 700;\">Festival La Tomatina</span>&nbsp;adalah festival di Spanyol yang pada dasarnya hanyalah pertarungan tomat besar-besaran. 150.000 tomat dilemparkan setiap tahun pada bulan Agustus selama Pertarungan Tomat Terbesar di Dunia yang mencakup festival selama seminggu, kembang api, dan juga kontes memasak paella!</p><p>Nama tomat berasal dari&nbsp;<span style=\"font-weight: 700;\">Lycopersicon lycopersicum</span>, yang diterjemahkan menjadi “persik serigala”. Saya benar-benar menyebutnya buah persik serigala sekarang.</p><p>Hingga tahun 1820, orang Amerika Utara percaya bahwa&nbsp;<span style=\"font-weight: 700;\">tomat beracun</span>&nbsp;dan oleh karena itu tidak akan memakannya, mungkin karena tanaman tersebut mirip dengan tanaman nightshade yang mematikan. Bisakah Anda bayangkan?</p><p>USDA mengatakan&nbsp;<span style=\"font-weight: 700;\">orang Amerika makan</span>&nbsp;sekitar&nbsp;<span style=\"font-weight: 700;\">23 pon tomat</span>&nbsp;per orang&nbsp;<span style=\"font-weight: 700;\">setiap tahun</span>. Sekitar setengahnya berbentuk saus tomat dan saus tomat! Saya tidak terkejut sama sekali! Kami menyukai saus tomat kami!</p><p><span style=\"font-weight: 700;\">Jus tomat</span>&nbsp;adalah&nbsp;<span style=\"font-weight: 700;\">minuman resmi</span>&nbsp;negara bagian dan tomat adalah buah resmi negara bagian&nbsp;<span style=\"font-weight: 700;\">Ohio</span>. New Jersey menyebut tomat sebagai sayuran negara bagiannya. Arkansas menyebut tomat sebagai buah negara bagian dan sayuran negara bagian. Jelas sekali mereka terobsesi dengan tomat, dan menurut Anda penghargaan tersebut hanya diberikan kepada Florida, karena mereka menanam lebih banyak tomat dibandingkan negara bagian lainnya!</p><p>Ada&nbsp;<span style=\"font-weight: 700;\">10.000 jenis tomat</span>&nbsp;di sini. Apa favoritmu? (Favoritku adalah Sun Gold dan Purple Cherokee)</p><p>Dengan&nbsp;<span style=\"font-weight: 700;\">produksi 60 juta ton per tahun</span>, tomat adalah buah paling populer di dunia, diikuti oleh pisang, apel, jeruk, dan semangka.</p><p>Pernahkah Anda mendengar fakta menarik tersebut sebelumnya? Apakah Anda punya sesuatu untuk ditambahkan? Apakah ada produk produksi tertentu yang ingin Anda ketahui lebih lanjut? Saya menerima permintaan!</p>', '2024-11-14 19:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `artikel_tag`
--

CREATE TABLE `artikel_tag` (
  `artikel_id` int(11) UNSIGNED NOT NULL,
  `tag_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_kategori` varchar(225) NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `slug_kategori`, `deskripsi`) VALUES
(1, 'sayuran', 'sayuran', 'Berisi  tentang kategori sayuran'),
(5, 'perawatan daun', 'perawatan-daun', 'Berisi informasi tentang perawatan daun'),
(6, 'buah', 'buah', 'Berisi informasi tentang kategori buah');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(8, '2024-08-12-105729', 'App\\Database\\Migrations\\Writter', 'default', 'App', 1724310156, 1),
(9, '2024-08-12-105858', 'App\\Database\\Migrations\\Kategori', 'default', 'App', 1724310156, 1),
(10, '2024-08-12-105952', 'App\\Database\\Migrations\\Slides', 'default', 'App', 1724310156, 1),
(11, '2024-08-12-110129', 'App\\Database\\Migrations\\Tags', 'default', 'App', 1724310156, 1),
(12, '2024-08-12-110327', 'App\\Database\\Migrations\\Users', 'default', 'App', 1724310156, 1),
(13, '2024-08-12-112932', 'App\\Database\\Migrations\\Artikel', 'default', 'App', 1724310156, 1),
(14, '2024-08-12-113956', 'App\\Database\\Migrations\\ArtikelTag', 'default', 'App', 1724310156, 1),
(15, '2024-09-14-115551', 'App\\Database\\Migrations\\AddCreatedAtToExistingTable', 'default', 'App', 1726315211, 2);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) UNSIGNED NOT NULL,
  `judul_slide` varchar(225) NOT NULL,
  `gambar_slide` varchar(255) NOT NULL,
  `kutipan_slide` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `judul_slide`, `gambar_slide`, `kutipan_slide`) VALUES
(1, 'Belajar Hidroponik Mudah', '1724313829_ff923777c3e6fbc68fa9.jpg', 'Pengenalan tentang buah strawberry dan bagaimana cara perawatannya di dataran rendah'),
(2, 'Tanam Sayuran Hidroponik Ternyata Mudah', '1724313879_7dd2650b734e75be9d3e.jpg', 'Belajar Hidroponik mudah dengan memanfaatkan tempat yang sempit'),
(3, 'Manfaatkan Pekarangan Rumah Jadi Kebun Sayur Organik', '1731632821_4b2c0a9a0d12a9e88c55.jpeg', 'Akses langsung ke makanan segar setiap saat.');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_tag` varchar(255) NOT NULL,
  `slug_tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `nama_tag`, `slug_tag`) VALUES
(1, 'akar', 'akar'),
(2, 'sayuran', 'sayuran'),
(3, 'perangsang', 'perangsang'),
(4, 'organik', 'organik');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `Id_Usergroup` int(11) NOT NULL,
  `Nama_Usergroup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`Id_Usergroup`, `Nama_Usergroup`) VALUES
(1, 'Administrator'),
(2, 'Dosen'),
(3, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `writter_id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `writter_id`, `username`, `password`, `email`, `status`, `role`) VALUES
(1, 1, 'administrator', '$2y$10$DgK39Dt7.7Kqa4jkcgKtne4cb7YMIG2cDDCq.Fx0Q0J/6fCcoE612', 'admin@novyantoryblog.com', 'Aktif', 'Admin'),
(2, 2, 'budiono', '$2y$10$djeXAQxD4vnDjC2WuzrvP.fpYhtyMsBd6gdrQZr3CQHzyrCjLDXGy', 'budiono@gmail.com', 'Aktif', 'Penulis'),
(3, 3, 'gojo', '$2y$10$tKk8B8sH1HeJxbSgP/Yt1.BhngqN/RNVDrrxxT6fDM21kDm8ffrD6', 'gojo@gmail.com', 'Aktif', 'Penulis');

-- --------------------------------------------------------

--
-- Table structure for table `writter`
--

CREATE TABLE `writter` (
  `id` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `no_handphone` varchar(20) NOT NULL,
  `bio` varchar(225) NOT NULL,
  `avatar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `writter`
--

INSERT INTO `writter` (`id`, `fullname`, `no_handphone`, `bio`, `avatar`) VALUES
(1, 'Wahyu Novyanto', '089876543210', 'Ingin menjadi seorang programmer', 'admin.jpg'),
(2, 'Budiono Siregar', '08981777287', 'Ingin menjadi Kapal Lawd', 'budiono.jpg'),
(3, 'Gojo Satoru', '089811882288', 'Yowai mo', '1724311197_d1e1edfbf9a161769234.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikel_user_id_foreign` (`user_id`),
  ADD KEY `artikel_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `artikel_tag`
--
ALTER TABLE `artikel_tag`
  ADD KEY `artikel_tag_artikel_id_foreign` (`artikel_id`),
  ADD KEY `artikel_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`Id_Usergroup`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_writter_id_foreign` (`writter_id`);

--
-- Indexes for table `writter`
--
ALTER TABLE `writter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `Id_Usergroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `writter`
--
ALTER TABLE `writter`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `artikel_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `artikel_tag`
--
ALTER TABLE `artikel_tag`
  ADD CONSTRAINT `artikel_tag_artikel_id_foreign` FOREIGN KEY (`artikel_id`) REFERENCES `artikel` (`id`),
  ADD CONSTRAINT `artikel_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_writter_id_foreign` FOREIGN KEY (`writter_id`) REFERENCES `writter` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
