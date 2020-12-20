-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 03:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daily_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `kategori` text NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `nama_gambar` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `kategori`, `judul`, `isi`, `nama_gambar`, `gambar`) VALUES
(1, 'Teknologi', 'Laptop Murah Dengan Desain Gaming', '<p>1. Asus VivoBook S14 S433FL-EB504T</p><p>Laptop untuk YouTuber pemula ini memang punya harga di kisaran Rp10 jutaan, geng. Namun hal ini sebanding dengan fitur dan <em>build quality</em> yang ditawarkannya, kok!</p><p><strong>ASUS VivoBook S14 S433FL-EB504T</strong> dipersenjatai dengan <strong>Intel Core i5-10210</strong> dengan kartu grafis <strong>NVIDIA GeForce MX250 2GB</strong>.</p><p>Ada juga <strong>RAM 8GB DDR4</strong> dan juga <strong>SSD 512GB + Intel Optane 32GB</strong>, geng. Prosesor Intel Core i5-10210U ini membuat performa keseluruhan dari laptop ini semakin kencang, lebih baik dan mantap.</p><p>Selain untuk <em>content creator</em>, laptop ASUS ini juga cocok untuk urusan produktivitas alias bekerja. Di mana berkat Intel Core Generasi ke-10, kamu sudah bisa merasakan koneksi internet lebih kencang dan stabil berkat teknologi <strong>Intel Wi-Fi 6 (Gig+)</strong>.</p><p>Ukurannya juga cukup <em>compact</em> dan ringan, dengan layar 14.0 inci ber-<em>bezel</em> tipis dan bobot 1.4 kg saja yang juga mendukung mobilitas.</p><p>Fitur pendukung lain yang kamu dapat dari ASUS VivoBook S14 S433FL-EB504T ini ada ErgoLift yang memiringkan posisi <em>keyboard</em> untuk meningkatkan kenyamanan juga sensor <em>fingerprint</em> pada sektor keamanannya.</p><p>2. HP14S-dq1013TU</p><p>Laptop <strong>HP 14s-dq1013TU</strong> yang sudah dilengkapi dengan prosesor Intel Core Generasi ke-10. Tepatnya dipersenjatai dengan <strong>Intel Core i3-1005G1</strong>, laptop ini sudah mampu melibas konten <em>streaming film</em> hingga kualitas 4K dengan konektivitas yang andal dan cepat. Bahkan bermain game pun nggak masalah.</p><p>HP 14s-dq1013TU didukung dengan kartu grafis <strong>Intel UHD Graphics</strong>, serta <strong>RAM 4GB DDR4</strong> dan <strong>SSD 256GB + 16GB Intel Optane</strong>, geng.</p><p>Layarnya yang berukuran 14.0 inci sendiri sudah memiliki resolusi hingga FullHD dan panel IPS, yang membuat pengalaman multimedia bakal makin mumpuni, nih!</p>', 'Laptop', 'laptop1.jpg'),
(5, 'Gadget', 'Readmi note9 Tidak Terdapat fitur NFC(near Field Communication)', '<p>Xiaomi hanya menyematkan fitur NFC di Redmi Note 9 Pro saja. Sebenarnya, untuk beberapa negara, Redmi Note 9 memiliki fitur NFC. Namun tidak untuk pasar Indonesia. Menurut Alvin Tse, Country Director Xiaomi Indonesia, salah satu pertimbangannya adalah soal ongkos produksi. Baca juga: Redmi Note 9 dan Note 9 Pro Resmi Meluncur di Indonesia, Ini Harganya &quot;Xiaomi selalu ingin memasang semua yang terbaik untuk pengguna, namun masalahnya ada di biaya (produksi),&quot; jelas Alvin dalam acara temu media secara online melalui Zoom, selepas peluncuran Redmi Note 9 series, Selasa (9/6/2020). Selain itu, Xiaomi juga mempertimbangkan seberapa besar adopsi fitur itu nantinya untuk target konsumen mereka. Sebab, hal itu berkaitan dengan harga jual. &quot;Pada saat kita menentukan satu produk, kita juga menentukan harga jualnya,&quot; papar Alvin. Khusus untuk fitur NFC, menurut Alvin belum banyak generasi Z yang memanfaatkan fitur tersebut. Redmi Note 9 series sendiri menyasar segmen generasi Z, di mana menurut Alvin lebih banyak menghabsikan waktu bermain game atau berkreasi melalui smartphone mereka. Baca juga: Tiga Fitur Andalan di Redmi Note 9 &quot;Kita melihat Redmi Note 9 akan lebih banyak diminati banyak orang yang pertimbangannya lebih ke harga,&quot; jelas Alvin. Oleh karena itulah, menurut Alvin, fitur NFC hanya hadir di Redmi Note 9 Pro yang menargetkan orang-orang lebih profesional yang tidak mempermasalahkan harga. Hal ini kurang lebih sama seperti yang dilakukan Xiaomi pada Redmi Note 8 series tahun lalu. Redmi Note 8 tidak dibekali fitur NFC, berbeda dengan Redmi Note 8 Pro. Pada Redmi Note 8 Pro ini pula, untuk pertama kalinya fitur NFC hadir di ponsel Xiaomi yang ada di Indonesia.<br /><br />Artikel ini telah tayang di <a href=\"http://kompas.com\">Kompas.com</a> dengan judul &quot;Alasan Xiaomi Indonesia Tidak Hadirkan Fitur NFC di Redmi Note 9 &quot;, <a href=\"https://tekno.kompas.com/read/2020/06/10/07010077/alasan-xiaomi-indonesia-tidak-hadirkan-fitur-nfc-di-redmi-note-9-\">https://tekno.kompas.com/read/2020/06/10/07010077/alasan-xiaomi-indonesia-tidak-hadirkan-fitur-nfc-di-redmi-note-9-</a>.<br />Penulis : Wahyunanda Kusuma Pertiwi<br />Editor : Yudha Pratomo</p>', 'readmi-note9', 'readmi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `multiuser`
--

CREATE TABLE `multiuser` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multiuser`
--

INSERT INTO `multiuser` (`id`, `nama`, `email`, `password`) VALUES
(1, 'ammar', 'ammarstar0@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiuser`
--
ALTER TABLE `multiuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `multiuser`
--
ALTER TABLE `multiuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
