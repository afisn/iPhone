-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 06:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iphone`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `id_news` int(11) NOT NULL,
  `judul` varchar(500) DEFAULT NULL,
  `isi` text,
  `sumber` varchar(500) DEFAULT NULL,
  `gambar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`id_news`, `judul`, `isi`, `sumber`, `gambar`) VALUES
(1, 'APPLE RESMI RILIS IPHONE XS DAN IPHONE XS MAX', 'Setelah dinantikan oleh peminatnya, akhirnya Apple resmi merilis smartphone terbarunya iPhone XS (iPhone Ten S) dan iPhone XS Max (iPhone Ten S Max). Peluncuran kedua produk tersebut telah dilangsungkan di Steve Jobs Theater, Cupertino, Amerika Serikat, pada Rabu, 12 September 2018 waktu setempat.\r\n\r\nSpesifikasi Yang Dimiliki iPhone XS dan iPhone XS Max\r\nKedua produk iPhone terbaru tersebut merupakan generasi penerus dari produk pendahulunya yaitu iPhone X. Penampilan desain dari kedua produk tersebut tampak tak jauh berbeda dengan iPhone X. Hanya ukuran layarnya saja yang tampak lebih lebar dari sebelumnya. iPhone XS memiliki layar 5,8 inch dan iPhone XS Max memiliki layar lebih lebar yaitu 6,5 inch.\r\n\r\nSoal kapasitas memori internal pada produk - produk iPhone sebelumnya, yang terbesar hanya berkapasitas hingga 256 GB. Sedangkan pada produk terbarunya kali ini, terdapat tiga varian model dari iPhone XS dan XS Max, yakni memori internal berkapasitas sebesar 64 GB, 256 GB, dan 512 GB. Satu level lebih besar dari produk - produk terdahulunya.\r\n\r\nKamera menjadi salah satu spesifikasi penting yang mendapat peningkatan, kedua produk terbaru tersebut masih menggunakan dua kamera belakang seperti yang ada pada iPhone X, baik iPhone XS maupun iPhone XS Max, keduanya sama-sama menggunakan sistem kamera beresolusi 12 MP dengan kombinasi kamera wide angle dan telephoto.\r\n\r\nNamun untuk sensornya, pada kedua produk terbaru ini menggunakan lensa lebar bersensor baru dengan pixel yang lebih besar. Sementara untuk kamera dengan lensa telenya, juga mempunyai bukaan yang lebih besar. Hal tersebut menunjukan bahwa kedua kamera tersebut akan punya performa yang lebih baik pada kondisi cahaya rendah.', 'Summarecon Mall - Kelapa Gading', 'http://localhost/iphone/images/artikel2.jpg'),
(2, 'Rilis 2019, iPhone XI akan Pakai 3 Kamera Utama?', 'TEMPO.CO, Jakarta - Para ahli ponsel seperti Steve Hemmerstoffer @OnLeaks, Ice Universe, dan Venya Geskin memperkirakan bahwa iPhone XI akan memiliki tiga kamera utama. OnLeaks melalui akun YouTube Digit mengunggah video berdurasi 1 menit 9 detik yang menggambarkan sebuah ponsel pintar besutan Apple yang hadir dengan tiga kamera utama dengan satu lampu flash. Video tersebut diunggah pada Ahad, 6 Januari 2019. TEMPO.CO, Jakarta - Para ahli ponsel seperti Steve Hemmerstoffer @OnLeaks, Ice Universe, dan Venya Geskin memperkirakan bahwa iPhone XI akan memiliki tiga kamera utama. OnLeaks melalui akun YouTube Digit mengunggah video berdurasi 1 menit 9 detik yang menggambarkan sebuah ponsel pintar besutan Apple yang hadir dengan tiga kamera utama dengan satu lampu flash. Video tersebut diunggah pada Ahad, 6 Januari 2019.', 'TEMPO.CO, Jakarta', 'http://localhost/iphone/images/artikel.jpg'),
(3, 'Apple Kabarnya Berniat Memproduksi Kembali iPhone X', 'Nasib iPhone X sama seperti iPhone 5; umurnya cuma setahun. Ketika suksesornya muncul, seketika itu juga Apple berhenti memproduksi dan menjualnya. Kalau dipikir-pikir, sungguh malang nasib iPhone X, mengingat ia merupakan salah satu ponsel modern pertama yang harganya menembus angka $1.000.\r\n\r\nKeputusan tersebut bisa dimaklumi, sebab iPhone XR yang dibanderol lebih murah mengusung spesifikasi yang lebih superior, minus layar OLED dan kamera belakang ganda. Kendati demikian, masih ada kemungkinan iPhone X bakal dijual kembali, berdasarkan laporan dari Wall Street Journal.\r\n\r\nAlasannya? Penjualan iPhone XS dan XS Max kurang memenuhi target, sehingga Apple masih punya kuota pasokan panel OLED yang berlebih dari Samsung. Ketimbang suplai panel OLED-nya sia-sia karena iPhone XS dan XS Max susah laku, Apple memilih menghidupkan kembali iPhone X, kira-kira begitu penjelasan sederhananya.', 'Dailysocial.id', 'http://localhost/iphone/images/artikel3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_polling`
--

CREATE TABLE `tb_polling` (
  `id_polling` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `tipe_iphone` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_polling`
--

INSERT INTO `tb_polling` (`id_polling`, `nama`, `address`, `tipe_iphone`) VALUES
(1, '', '', 'iPhone 5s'),
(2, '', '', 'iPhone 5s'),
(3, '', '', 'iPhone 5s'),
(4, '', '', 'iPhone 5s'),
(5, '', '', 'iPhone 5s'),
(6, '', '', 'iPhone 5s');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `tipe_iphone` varchar(50) DEFAULT NULL,
  `tahun` char(5) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` text,
  `spesifikasi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `tipe_iphone`, `tahun`, `harga`, `gambar`, `spesifikasi`) VALUES
(1, 'iPhone 7', '2016', 4200000, 'http://localhost/iphone/assets/IPhone_7.png', 'Battery Specs\r\nCurrent: 1960 mA\r\nPower: 7.45 Whr\r\nVoltage: 3.8 V\r\nBluetooth 4.2\r\nCamera Specs:\r\nFront: 7 megapixels (?)\r\nRear: 12.2 megapixels[10] / 4k-2160p30[11], 1080p30, 1080p60[8] video / 1080p120[8], 720p240[6] slow-motion video\r\nCellular Radio:\r\nUp to LTE (4G)\r\nColors: Rose Gold, Gold, Silver, Black, Jet Black or the Special Edition PRODUCT(RED)\r\nCPU Specs:\r\nCore Design: Apple Fusion x 2\r\nCPU: T8010 \"A10\"\r\nCPU Speed: 2.34 GHz\r\nInstruction Set: ARMv8\r\nFirmware:\r\nInitial firmware: 10.0 (14A346)\r\nLatest publicly available firmware: 12.1.4 (16D57), 12.1.4 (16D57)\r\nLatest firmware: 12.2 beta 6 (16E5227a), 12.2 beta 6 (16E5227a)\r\nInternal Name: iPhone9,1, iPhone9,3\r\nRAM: 2 GB\r\nStorage: 32/128/256 GB'),
(2, 'iPhone 6s', '2015', 4099000, 'http://localhost/iphone/assets/150px-IPhone_6s_Rose.png', 'Battery Specs\r\nCurrent: 1715 mA\r\nPower: 6.55 Whr\r\nVoltage: 3.82 V\r\nBluetooth 4.2\r\nCamera Specs:\r\nFront: 5 megapixels (?)\r\nRear: 12.2 megapixels[10] / 4k-2160p30[11], 1080p30, 1080p60[8] video / 1080p120[8], 720p240[6] slow-motion video\r\nCellular Radio:\r\nUp to LTE (4G)\r\nColors: Gold, Rose Gold, Silver, Space Gray\r\nCPU Specs:\r\nCore Design: Apple Twister x 2\r\nCPU: S8000 and S8003 \"A9\"\r\nCPU Speed: 1.85 GHz\r\nInstruction Set: ARMv8\r\nFirmware:\r\nInitial firmware: 9.0 (13A342)\r\nLatest publicly available firmware: 12.1.4 (16D57)\r\nLatest firmware: 12.2 beta 6 (16E5227a)\r\nInternal Name: iPhone8,1\r\nRAM: 2 GB\r\nStorage: 16/64/128 GB'),
(3, 'iPhone X', '2017', 11440000, 'http://localhost/iphone/assets/150px-IPhone_X.png', 'Battery Specs\r\nCurrent: 2716 mA\r\nPower: 10.35 Whr\r\nVoltage: 3.81 V\r\nBluetooth 5.0\r\nCamera Specs:\r\nFront: 7 megapixels\r\nRear: 2×12.2 megapixels[10] / 4k-2160p30[11], 1080p30, 1080p60[8] video / 1080p120[8], 720p240[6] slow-motion video\r\nCellular Radio:\r\nUp to LTE (4G)\r\nColors: Silver, Space Gray\r\nCPU Specs:\r\nCore Design: Apple Monsoon x 2 and Apple Mistral x 4\r\nCPU: T8015 \"A11\"\r\nCPU Speed: 2.39 GHz\r\nInstruction Set: ARMv8\r\nFirmware:\r\nInitial firmware: 11.0.1 (15A8391)\r\nLatest publicly available firmware: 12.1.4 (16D57), 12.1.4 (16D57)\r\nLatest firmware: 12.2 beta 6 (16E5227a), 12.2 beta 6 (16E5227a)\r\nInternal Name: iPhone10,3, iPhone10,6\r\nRAM: 3 GB\r\nStorage: 64/256 GB'),
(4, 'iPhone 5s', '2013', 1599000, 'http://localhost/iphone/assets/285px-IPhone_5s_black.png', 'Battery Specs\r\nCurrent: 1434 mA\r\nPower: 5.45 Whr\r\nVoltage: 3.8 V\r\nBluetooth 4.0\r\nCamera Specs:\r\nFront: 1.2 megapixels[9] / 720p30[6] video\r\nRear: 8.0 megapixels[7] / 1080p30[8] video\r\nCellular Radio:\r\nUp to LTE (4G)\r\nColors: Black/White\r\nCPU Specs:\r\nCore Design: Swift x 2\r\nCPU: S5L8950 \"A6\"\r\nCPU Speed: 1.2 GHz\r\nInstruction Set: ARMv7s\r\nFirmware:\r\nInitial firmware: 6.0 (10A405), 6.0 (10A405)\r\nLatest publicly available firmware: 10.3.3 (14G60), 10.3.3 (14G60)\r\nLatest firmware: 10.3.3 (14G60), 10.3.3 (14G60)\r\nInternal Name: iPhone5,1, iPhone5,2\r\nRAM: 1 GB\r\nStorage: 16/32/64 GB'),
(5, 'iPhone 6', '2014', 2500000, 'http://localhost/iphone/assets/150px-IPhone_6_Grey.png', 'Battery Specs\r\nCurrent: 2906 mA\r\nPower: 11.1 Whr\r\nVoltage: 3.82 V\r\nBluetooth 4.0\r\nCamera Specs:\r\nFront: 1.2 megapixels[9] / 720p30[6] video\r\nRear: 8.0 megapixels[7] / 1080p30, 1080p60[8] video / 720p120, 720p240[6] slow-motion video\r\nCellular Radio:\r\nUp to LTE (4G)\r\nColors: Gold, Silver, Space Gray\r\nCPU Specs:\r\nCore Design: Apple Typhoon x 2\r\nCPU: T7000 \"A8\"\r\nCPU Speed: 1.38 GHz\r\nInstruction Set: ARMv8\r\nFirmware:\r\nInitial firmware: 8.0 (12A366)\r\nLatest publicly available firmware: 12.1.4 (16D57)\r\nLatest firmware: 12.2 beta 6 (16E5227a)\r\nInternal Name: iPhone7,1\r\nRAM: 1 GB\r\nStorage: 16/64/128 GB'),
(6, 'iPhone 8', '2017', 8750000, 'http://localhost/iphone/assets/150px-IPhone_8.png', 'Battery Specs\r\nCurrent: 1821 mA\r\nPower: 6.96 Whr\r\nVoltage: 3.82 V\r\nBluetooth 5.0\r\nCamera Specs:\r\nFront: 7 megapixels\r\nRear: 12.2 megapixels[10] / 4k-2160p30[11], 1080p30, 1080p60[8] video / 1080p120[8], 720p240[6] slow-motion video\r\nCellular Radio:\r\nUp to LTE (4G)\r\nColors: Gold, Red, Silver, Space Gray\r\nCPU Specs:\r\nCore Design: Apple Monsoon x 2 and Apple Mistral x 4\r\nCPU: T8015 \"A11\"\r\nCPU Speed: 2.39 GHz\r\nInstruction Set: ARMv8\r\nFirmware:\r\nInitial firmware: 11.0 (13A372), 11.0 (13A372)\r\nLatest publicly available firmware: 12.1.4 (16D57), 12.1.4 (16D57)\r\nLatest firmware: 12.2 beta 6 (16E5227a), 12.2 beta 6 (16E5227a)\r\nInternal Name: iPhone10,1, iPhone10,4\r\nRAM: 2 GB\r\nStorage: 64/256 GB');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `address`, `password`) VALUES
(1, 'laras', 'laras@gmail.com', 'jalan mawar', 'halosemua'),
(2, 'andin', 'andin@gmail.com', 'jalan melati', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `tb_polling`
--
ALTER TABLE `tb_polling`
  ADD PRIMARY KEY (`id_polling`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_polling`
--
ALTER TABLE `tb_polling`
  MODIFY `id_polling` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
