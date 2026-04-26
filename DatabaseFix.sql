-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET NAMES utf8 */
;
/*!50503 SET NAMES utf8mb4 */
;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */
;
/*!40103 SET TIME_ZONE='+00:00' */
;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */
;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */
;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */
;

-- Dumping structure for table db_leafora_agro.blog
CREATE TABLE IF NOT EXISTS `blog` (
    `id` int NOT NULL AUTO_INCREMENT,
    `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `foto` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `created_at` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 11 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- Dumping data for table db_leafora_agro.blog: ~2 rows (approximately)
INSERT INTO
    `blog` (
        `id`,
        `title`,
        `slug`,
        `content`,
        `foto`,
        `status`,
        `created_at`
    )
VALUES (
        8,
        'From Farm to Market: Our Fresh Produce Journey',
        'from-farm-to-market-our-fresh-produce-journey',
        '<h3>1. From Farm and Greenhouse Production</h3>\r\n\r\n<p>The journey of fresh vegetables begins in our production fields and hydroponic greenhouses. The planting process is carried out under strict quality control, starting from the selection of premium seeds, plant nutrition management, to maintaining cleanliness in the growing area.</p>\r\n\r\n<p>Products such as Kyuri, Cherry Tomato, Lettuce, and leafy greens are grown in hygienic and healthy conditions to ensure the highest quality harvest.</p>\r\n\r\n<h3>2. Harvesting and Quality Control</h3>\r\n\r\n<p>Once the crops reach harvest time, the vegetables are carefully picked to preserve freshness and quality. Every harvest then goes through a quality control process, including inspection of size, color, and overall physical condition.</p>\r\n\r\n<p>Only the best-quality vegetables proceed to the next stage.</p>\r\n\r\n<h3>3. Cleaning and Packaging</h3>\r\n\r\n<p>Vegetables that pass the selection process are washed, sorted, and packed following food-grade hygiene standards. This process helps maintain freshness and extends product shelf life.</p>\r\n\r\n<p>Packaging is customized to meet the needs of supermarkets, restaurants, hotels, and distributors.</p>\r\n\r\n<h3>4. Distribution to the Market</h3>\r\n\r\n<p>The final stage is distribution to retail and commercial markets using a delivery system designed to maintain product freshness until it reaches customers.</p>\r\n\r\n<p>We ensure that every product delivered remains clean, fresh, and reliable, meeting premium hydroponic produce standards.</p>\r\n',
        '09584063.jpg',
        'publish',
        '26 Apr 26 09:58'
    );

-- Dumping structure for table db_leafora_agro.galery
CREATE TABLE IF NOT EXISTS `galery` (
    `id` int NOT NULL AUTO_INCREMENT,
    `foto` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 19 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- Dumping data for table db_leafora_agro.galery: ~3 rows (approximately)
INSERT INTO
    `galery` (`id`, `foto`, `title`)
VALUES (16, '025611.png', '-'),
    (17, '025619.png', '-'),
    (18, '025626.png', '-');

-- Dumping structure for table db_leafora_agro.inquiry
CREATE TABLE IF NOT EXISTS `inquiry` (
    `id` int NOT NULL AUTO_INCREMENT,
    `nama` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `negara` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `no_wa` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `subjek` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `pesan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `created_at` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 34 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- Dumping data for table db_leafora_agro.inquiry: ~1 rows (approximately)
INSERT INTO
    `inquiry` (
        `id`,
        `nama`,
        `email`,
        `negara`,
        `no_wa`,
        `subjek`,
        `pesan`,
        `created_at`
    )
VALUES (
        33,
        'doni ganteng',
        'doniwicaksono27@gmail.com',
        'endonesia',
        '3218371',
        'tes doni ganteng',
        'halo mas fembry',
        '26-Apr-26 10:14'
    );

-- Dumping structure for table db_leafora_agro.produk
CREATE TABLE IF NOT EXISTS `produk` (
    `id` int NOT NULL AUTO_INCREMENT,
    `nama_produk` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `foto` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 18 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- Dumping data for table db_leafora_agro.produk: ~3 rows (approximately)
INSERT INTO
    `produk` (
        `id`,
        `nama_produk`,
        `foto`,
        `detail`
    )
VALUES (
        13,
        'P1',
        '030037.png',
        '<ul>\r\n <li>Deskripsi singkat</li>\r\n <li>Spesifikasi (grade, ukuran, kemasan, asal produk)</li>\r\n <li>Minimal order & kemasan</li>\r\n</ul>'
    ),
    (
        14,
        'P2',
        '030046.png',
        '<ul>\r\n <li>Deskripsi singkat</li>\r\n <li>Spesifikasi (grade, ukuran, kemasan, asal produk)</li>\r\n <li>Minimal order & kemasan</li>\r\n</ul>'
    ),
    (
        15,
        'P3',
        '030054.png',
        '<ul>\r\n <li>Deskripsi singkat</li>\r\n <li>Spesifikasi (grade, ukuran, kemasan, asal produk)</li>\r\n <li>Minimal order & kemasan</li>\r\n</ul>'
    );

-- Dumping structure for table db_leafora_agro.quotation
CREATE TABLE IF NOT EXISTS `quotation` (
    `id` int NOT NULL AUTO_INCREMENT,
    `nama` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `negara` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `no_wa` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `produk` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    `created_at` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 18 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- Dumping data for table db_leafora_agro.quotation: ~1 rows (approximately)
INSERT INTO
    `quotation` (
        `id`,
        `nama`,
        `email`,
        `negara`,
        `no_wa`,
        `produk`,
        `created_at`
    )
VALUES (
        17,
        'Doni ganteng',
        'doniwicaksono27@gmail.com',
        'Indonesia',
        '05d65sa',
        'P3',
        '26-Apr-26 10:13'
    );

-- Dumping structure for table db_leafora_agro.slider_home
CREATE TABLE IF NOT EXISTS `slider_home` (
    `id` int NOT NULL AUTO_INCREMENT,
    `badge_text` varchar(255) NOT NULL,
    `title_text` text NOT NULL,
    `description_text` text NOT NULL,
    `small_title` varchar(255) NOT NULL,
    `small_description` text NOT NULL,
    `button_primary_url` varchar(255) NOT NULL DEFAULT 'produk',
    `button_secondary_url` varchar(255) NOT NULL DEFAULT 'contact',
    `background_image` varchar(255) NOT NULL,
    `sort_order` int NOT NULL DEFAULT '1',
    `is_active` tinyint(1) NOT NULL DEFAULT '1',
    `created_at` datetime DEFAULT NULL,
    `updated_at` datetime DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 5 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- Dumping data for table db_leafora_agro.slider_home: ~3 rows (approximately)
INSERT INTO
    `slider_home` (
        `id`,
        `badge_text`,
        `title_text`,
        `description_text`,
        `small_title`,
        `small_description`,
        `button_primary_url`,
        `button_secondary_url`,
        `background_image`,
        `sort_order`,
        `is_active`,
        `created_at`,
        `updated_at`
    )
VALUES (
        1,
        'Leafora Agro Industri',
        'Integrated Solutions for Modern Hydroponics and Agricultural Supplies',
        'An Indonesia-based agri-business dedicated to the modern farming ecosystem. We produce premium hydroponic vegetables, distribute professional farming equipment, and manage the sourcing of imported raw materials to ensure high-quality inputs for the national agricultural industry.',
        'Integrated Agri Supply',
        'Modern agriculture solutions for produce, equipment, and raw material support.',
        'produk',
        'contact',
        'assets/img/bg3.png',
        1,
        1,
        '2026-04-23 18:19:35',
        '2026-04-23 18:19:35'
    ),
    (
        2,
        'Fresh • Clean • Reliable',
        'Premium Hydroponic Produce for Fresh and Reliable Supply',
        'Fresh, pesticide-free, and nutrient-rich vegetables such as Kyuri, Cherry Tomatoes, and specialty greens grown with high hygiene standards for retail, supermarkets, and commercial markets.',
        'Fresh Harvest Standards',
        'High hygiene standards with premium quality control for modern food supply.',
        'produk',
        'contact',
        'assets/img/bg2.png',
        2,
        1,
        '2026-04-23 18:19:35',
        '2026-04-23 18:19:35'
    ),
    (
        3,
        'Agri-Tech • Supply • Consultation',
        'Professional Farming Equipment and Imported Agricultural Raw Materials',
        'Providing modern agricultural hardware including nutrient meters, specialized irrigation pumps, LED grow lights, and modular hydroponic system components, as well as direct sourcing of essential premium agricultural inputs.',
        'Modern Farming Inputs',
        'Supporting scalable cultivation with equipment, nutrients, and raw materials.',
        'layanan',
        'contact',
        'assets/img/bg1.png',
        3,
        1,
        '2026-04-23 18:19:35',
        '2026-04-23 18:19:35'
    );

-- Dumping structure for table db_leafora_agro.user
CREATE TABLE IF NOT EXISTS `user` (
    `id_user` int NOT NULL AUTO_INCREMENT,
    `nama` varchar(50) NOT NULL,
    `username` varchar(50) NOT NULL,
    `email` varchar(100) DEFAULT NULL,
    `no_telp` varchar(15) DEFAULT NULL,
    `role` enum('admin', 'non_admin') DEFAULT NULL,
    `password` varchar(255) NOT NULL,
    `created_at` int DEFAULT NULL,
    `foto` text NOT NULL,
    `is_active` tinyint(1) NOT NULL,
    PRIMARY KEY (`id_user`)
) ENGINE = InnoDB AUTO_INCREMENT = 48 DEFAULT CHARSET = utf8mb3;

-- Dumping data for table db_leafora_agro.user: ~2 rows (approximately)
INSERT INTO
    `user` (
        `id_user`,
        `nama`,
        `username`,
        `email`,
        `no_telp`,
        `role`,
        `password`,
        `created_at`,
        `foto`,
        `is_active`
    )
VALUES (
        40,
        'Doni',
        'Doni',
        'IT',
        '-',
        'admin',
        '$2y$10$sUglcBYsmH30/GjNOYNo6embg/ibc.2sj7o/WKEyzkBrq512OV4GK',
        1718692487,
        'user.png',
        1
    ),
    (
        46,
        'Febri',
        'febri',
        '-',
        '-',
        'admin',
        '$2y$10$O3aLt1ghfUxeFxVakR.zZuKO7uH04G6tVItIRiqoA37f0dDQKGdJy',
        1754812341,
        'user.png',
        1
    );

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */
;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */
;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */
;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */
;