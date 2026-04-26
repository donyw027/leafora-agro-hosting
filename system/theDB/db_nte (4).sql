-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2025 at 01:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nte`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `foto` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `slug`, `content`, `foto`, `status`, `created_at`) VALUES
(8, 'Dari Gudang ke Pelabuhan: Perjalanan Barang Ekspor Anda', 'dari-gudang-ke-pelabuhan-perjalanan-barang-ekspor-anda', '<h2>1. Awal Perjalanan: Dari Gudang Produksi</h2>\r\n\r\n<p>Perjalanan ekspor dimulai dari tempat paling dasar: <strong>gudang produksi</strong>. Di sinilah barang dikumpulkan, diperiksa kualitasnya, dan dikemas sesuai standar internasional. Tahap ini sangat penting, karena kesalahan kecil dalam pengepakan bisa berakibat besar saat barang tiba di negara tujuan.<br>\r\nSelain itu, dokumen awal seperti <strong>packing list</strong> dan <strong>invoice</strong> biasanya disiapkan pada fase ini agar proses berikutnya lebih lancar.</p>\r\n\r\n<h2>2. Persiapan Dokumen Ekspor</h2>\r\n\r\n<p>Sebelum barang meninggalkan gudang, perusahaan wajib melengkapi dokumen ekspor. Beberapa dokumen utama antara lain:</p>\r\n\r\n<ul>\r\n <li>\r\n <p><strong>Commercial Invoice</strong> – bukti transaksi jual beli internasional.</p>\r\n </li>\r\n <li>\r\n <p><strong>Packing List</strong> – rincian jumlah dan jenis barang.</p>\r\n </li>\r\n <li>\r\n <p><strong>Bill of Lading</strong> / <strong>Air Waybill</strong> – dokumen pengangkutan.</p>\r\n </li>\r\n <li>\r\n <p><strong>Certificate of Origin (COO)</strong> – menyatakan asal barang.<br>\r\n Tahapan ini memastikan barang Anda legal, aman, dan diterima di pelabuhan tujuan tanpa hambatan.</p>\r\n </li>\r\n</ul>\r\n\r\n<h2>3. Transportasi Darat Menuju Pelabuhan</h2>\r\n\r\n<p>Setelah dokumen lengkap, barang dikirim menggunakan truk atau kontainer dari gudang menuju pelabuhan. Di sinilah peran <strong>jasa ekspedisi darat</strong> sangat vital. Mereka memastikan barang tiba tepat waktu, dengan pengemasan yang aman agar tidak rusak selama perjalanan.</p>\r\n\r\n<h2>4. Proses di Pelabuhan</h2>\r\n\r\n<p>Sesampainya di pelabuhan, barang akan melewati serangkaian tahapan:</p>\r\n\r\n<ul>\r\n <li>\r\n <p><strong>Pemeriksaan Bea Cukai</strong> – memastikan kelengkapan dokumen.</p>\r\n </li>\r\n <li>\r\n <p><strong>Penimbangan & Penempatan Kontainer</strong> – barang dimasukkan ke dalam kontainer sesuai ukuran dan kapasitas.</p>\r\n </li>\r\n <li>\r\n <p><strong>Loading ke Kapal</strong> – kontainer diangkat ke kapal menggunakan crane, siap untuk berlayar ke negara tujuan.</p>\r\n </li>\r\n</ul>\r\n\r\n<h2>5. Menuju Pasar Global</h2>\r\n\r\n<p>Setelah semua prosedur selesai, kapal berangkat membawa barang Anda menembus jalur perdagangan internasional. Dari sinilah perjalanan bisnis Anda berlanjut—membuka peluang baru, memperluas pasar, dan memperkenalkan produk lokal ke dunia.</p>\r\n\r\n<hr>\r\n<p>✨ <strong>Kesimpulan</strong><br>\r\nPerjalanan ekspor bukan sekadar memindahkan barang dari satu titik ke titik lain. Ia adalah proses yang penuh detail, melibatkan koordinasi antara produsen, ekspedisi, bea cukai, hingga pihak pelabuhan. Dengan pengelolaan yang tepat, barang Anda akan sampai dengan aman, cepat, dan terpercaya.</p>\r\n', '15304471.jpg', 'publish', '17 Aug 25 15:30'),
(10, 'Indonesia Export Products: High-Quality Natural Goods from Trusted Suppliers', 'indonesia-export-products-high-quality-natural-goods-from-trusted-suppliers', '<p xss=removed><strong>Indonesia Export Products: High-Quality Natural Goods from Trusted Suppliers</strong></p>\r\n\r\n<p><strong>Looking for reliable suppliers of natural products from Indonesia?</strong><br>\r\nIndonesia is one of the world’s richest countries in terms of agricultural and natural resources. From tropical spices and herbal products to handicrafts and essential oils, Indonesian products are increasingly in demand in the global market due to their quality, sustainability, and competitive pricing.</p>\r\n\r\n<p>In this article, we highlight why Indonesia is your trusted sourcing destination and how to find the right export partner.</p>\r\n\r\n<p><strong>Why Buy Products from Indonesia?</strong></p>\r\n\r\n<ol>\r\n <li><strong>Abundance of Natural Resources</strong><br>\r\n Indonesia offers a wide range of export-quality products such as:\r\n <ul>\r\n  <li><strong>Spices</strong>: Cloves, nutmeg, cinnamon, pepper</li>\r\n  <li><strong>Herbal Products</strong>: Ginger, turmeric, lemongrass</li>\r\n  <li><strong>Coconut-Based Products</strong>: Virgin coconut oil, copra, coconut sugar</li>\r\n  <li><strong>Coffee and Tea</strong>: Arabica, Robusta, specialty single-origin beans</li>\r\n  <li><strong>Handicrafts</strong>: Rattan furniture, batik fabrics, wooden home décor</li>\r\n </ul>\r\n </li>\r\n <li><strong>Competitive Pricing</strong><br>\r\n Indonesian suppliers offer quality goods at attractive prices, supported by efficient local labor and abundant raw materials.</li>\r\n <li><strong>Ethical and Sustainable Production</strong><br>\r\n Many producers apply eco-friendly and fair-trade practices, aligning with today’s conscious consumer standards.</li>\r\n</ol>\r\n\r\n<p><strong>Top Export Products from Indonesia in Demand</strong></p>\r\n\r\n<table border=\"1\" class=\"Table\">\r\n <thead>\r\n  <tr>\r\n   <td>\r\n   <p xss=removed><strong>Category</strong></p>\r\n   </td>\r\n   <td>\r\n   <p xss=removed><strong>Exported Products</strong></p>\r\n   </td>\r\n  </tr>\r\n </thead>\r\n <tbody>\r\n  <tr>\r\n   <td>\r\n   <p xss=removed><strong>Agriculture</strong></p>\r\n   </td>\r\n   <td>\r\n   <p xss=removed>Spices, coconut, palm oil, coffee, tea</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p xss=removed><strong>Handicrafts</strong></p>\r\n   </td>\r\n   <td>\r\n   <p xss=removed>Wood carvings, batik, rattan furniture</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p xss=removed><strong>Wellness</strong></p>\r\n   </td>\r\n   <td>\r\n   <p xss=removed>Essential oils, herbal skincare, jamu</p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p xss=removed><strong>Food & Beverage</strong></p>\r\n   </td>\r\n   <td>\r\n   <p xss=removed>Coconut sugar, dried fruit, snacks</p>\r\n   </td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n', '07413443.png', 'publish', '10 Aug 25 13:27');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `foto`, `title`) VALUES
(16, '10143660.JPG', '-'),
(17, '10254883.JPG', '-'),
(18, '10255551.JPG', '-');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` text NOT NULL,
  `negara` varchar(20) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `subjek` text NOT NULL,
  `pesan` text NOT NULL,
  `created_at` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `nama`, `email`, `negara`, `no_wa`, `subjek`, `pesan`, `created_at`) VALUES
(29, 'Doni W', 'doniwicaksono27@gmail.com', 'Indonesia', '089672574222', 'Request beras 10ton', 'Kepada Yth. nusantara Tidaya,\r\n\r\nMelalui email ini, saya Doni dari AKT ingin mengajukan permintaan pembelian beras sebanyak 10 ton. Beras ini rencananya akan kami ekspor ke luar negeri.\r\n\r\nSehubungan dengan itu, saya ingin meminta penawaran harga. Kami memiliki anggaran di kisaran Rp10.000 per kilogram. Mohon informasikan apakah harga tersebut dapat dipenuhi dan apakah ada spesifikasi beras yang bisa Anda tawarkan dengan harga tersebut.\r\n\r\nSelain harga, mohon sertakan juga spesifikasi beras yang Anda rekomendasikan untuk ekspor, dengan kriteria sebagai berikut:\r\n\r\nBentuk dan Ukuran: Bulir beras harus utuh, tidak patah, dan seragam.\r\n\r\nWarna: Beras memiliki warna putih bening yang alami dan tidak kusam.\r\n\r\nKandungan Air: Maksimal 14%. Kadar air yang rendah sangat penting agar beras tidak mudah apek atau berkutu selama pengiriman.\r\n\r\nBebas dari Bahan Asing: Tidak ada kerikil, kutu, atau benda asing lainnya.\r\n\r\nKualitas Tanak: Setelah dimasak, nasi harus pulen, tidak lengket, dan rasanya enak.\r\n\r\nMohon kirimkan penawaran lengkap beserta rincian spesifikasi, syarat pembayaran, dan jadwal pengiriman.\r\n\r\nTerima kasih atas perhatiannya. Saya menantikan kabar baik dari Anda.\r\n\r\nHormat saya,', '09-Aug-25');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `foto`, `detail`) VALUES
(13, 'Beras', '103250.JPG', '<ul>\r\n <li>Deskripsi singkat</li>\r\n <li>Spesifikasi (grade, ukuran, kemasan, asal produk)</li>\r\n <li>Minimal order & kemasan</li>\r\n</ul>'),
(14, 'Jagung', '10100912.JPG', '<ul>\r\n <li>Deskripsi singkat</li>\r\n <li>Spesifikasi (grade, ukuran, kemasan, asal produk)</li>\r\n <li>Minimal order & kemasan</li>\r\n</ul>'),
(15, 'Kacang', '10102065.JPG', '<ul>\r\n <li>Deskripsi singkat</li>\r\n <li>Spesifikasi (grade, ukuran, kemasan, asal produk)</li>\r\n <li>Minimal order & kemasan</li>\r\n</ul>'),
(16, 'Biji Kakao', '10102987.JPG', '<ul>\r\n <li>Deskripsi singkat</li>\r\n <li>Spesifikasi (grade, ukuran, kemasan, asal produk)</li>\r\n <li>Minimal order & kemasan</li>\r\n</ul>'),
(17, 'Biji Kopi', '10104258.JPG', '<ul>\r\n <li>Deskripsi singkat</li>\r\n <li>Spesifikasi (grade, ukuran, kemasan, asal produk)</li>\r\n <li>Minimal order & kemasan</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` text NOT NULL,
  `negara` varchar(20) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `produk` text NOT NULL,
  `created_at` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`id`, `nama`, `email`, `negara`, `no_wa`, `produk`, `created_at`) VALUES
(15, 'Doni W', 'doni@gmail.com', 'Indonesia', '089672574222', 'Kedelai', '10-Aug-25 14:50');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `role` enum('admin','non_admin') DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `foto` text NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `no_telp`, `role`, `password`, `created_at`, `foto`, `is_active`) VALUES
(40, 'Doni', 'Doni', 'IT', '-', 'admin', '$2y$10$sUglcBYsmH30/GjNOYNo6embg/ibc.2sj7o/WKEyzkBrq512OV4GK', 1718692487, 'user.png', 1),
(46, 'Febri', 'febri', '-', '-', 'admin', '$2y$10$O3aLt1ghfUxeFxVakR.zZuKO7uH04G6tVItIRiqoA37f0dDQKGdJy', 1754812341, 'user.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
