-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Apr 2021 pada 11.19
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040099`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keyboard`
--

CREATE TABLE `keyboard` (
  `id` int(11) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Price` int(100) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keyboard`
--

INSERT INTO `keyboard` (`id`, `Picture`, `Name`, `Description`, `Price`, `Category`) VALUES
(1, 'razer hustman.jpg', 'Razer Hunstman', 'Sakelar Mekanik Lebih Cepat Daripada Sakelar Mekanik Lawas: Sakelar Razer Optik menggunakan aktuasi berbasis cahaya, mencatat penekanan tombol pada kecepatan cahaya (jarak aktuasi 30% lebih pendek daripada sakelar clicky lainnya pada 1,5 mm) dengan umpan balik yang memuaskan dan clicky', 1949000, 'Keyboard Gaming'),
(2, 'logitech.png', 'Logitech G102 Prodigy', 'Tracking Resolusi: 200 8.000 dpi Maks. akselerasi: >25G* Maks. kecepatan: >200 ips*', 215000, 'Mouse Gaming'),
(3, 'rexus daxa.jpg', 'Rexus Keyboard Wireless Gaming Mechanical Daxa M71 PRO', 'Keunggulan teknologi keyboard mekanikal Daxa M71 Pro dibandingkan dengan tipe Classic adalah teknologi dual connection yang mengadopsi teknologi Bluetooth dan kabel sekaligus dalam satu perangkat. Keunggulan ini menjadi signature sekaligus memampukan keyboard ini digunakan di manapun karena praktis.', 1299000, 'Keyboard Gaming'),
(4, 'razer.jpg', 'Razer DeathAdder(white)', 'Sensor optik 6.400 DPI sejati Akselerasi hingga 220 inci per detik (IPS) / 30 G. Lima tombol Hyperesponse yang dapat diprogram secara independen Razer \'Mechanical Mouse Switches dengan siklus hidup 10 juta klik', 469000, 'Mouse Gaming'),
(5, 'mk240.png', 'Logitech MK240 Nano Wireless Combo', 'Keyboard ringkas dan berkontur Mengetik menjadi lebih cepat dan lancar dengan layout tombol full-size yang familier nan hemat ruang, dilengkapi dengan penyangga yang dapat disesuaikan untuk kenyamanan pengetikan. Mouse dengan ukuran sedang dirancang sesuai dengan bentuk tangan dan dilengkapi kontrol kursor yang lancar dengan tracking optik high-definition (1000 dpi).', 265000, 'Flexible keyboard'),
(6, 'rival 600.png', 'Steelseries Rival 600 Gaming Mouse', 'Sensor System : SteelSeries TrueMove3+ Dual Sensor System Primary Sensor : TrueMove 3 Optical Gaming Sensor Secondary Sensor : Depth Sensing Linear Optical Detection CPI : 100-12000, 100 CPI Increments IPS : 350+, on SteelSeries QcK surfaces Acceleration : 50G Hardware Acceleration : None (Zero Hardware Acceleration) Lift Off Distance : Customizable, 0.5mm - 2 mm', 1250000, ' Mouse Gaming'),
(7, 'rexus mouse.jpg', 'Rexus PRO Mouse Gaming Daxa Air II', 'Tipe Sensor : Pixart PMW3389 Polling Rate : 125-500-1000Hz Tombol : Omron 20M (OF) Kabel : Paracord 1,8 meter Level DPI : 400-16000DPI Kecepatan : 400 inch per second (IPS) Akselerasi : 50G Dimensi : 120 x 63.5 x 39mm Berat : 58 - 82gram', 499000, 'Mouse Gaming'),
(8, 'lg gaming.jpg', 'Logitech Pro X Gaming Keyboard', 'Fitur -Pro-GRADE Switch yang dapat Ditukar -Ringkas + ULTRA-PORTABEL -LIGHTSYNC RGB -Kabel yang dapat Dilepaskan -3 SUDUT + Alas Karet -12 MAKRO Tombol F yang dapat Diprogram', 1549000, 'Keyboard Gaming'),
(9, 'lg flexibel.jpg', 'Logitech Pebble Wireless Bluetooth Mouse M350', 'Model yang lebih flexible mudah dibawa dan pas dikantong dan dihubungkan dengan jaringan Bluetooth', 279000, 'Mouse Wirilles'),
(10, 'lg kantoran.jpg', 'Logitech M170 Mouse Wireless', 'Logitech M170 Wireless Mouse - Black 2.4Ghz wireless yang andal Koneksi wireless yang kuat dan konsisten dengan jarak hingga 10 meter (32 kaki). Nyaris tanpa jeda atau terputus-putus, Anda dapat bekerja dan bermain dengan penuh percaya diri', 96800, 'Mouse daily work');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keyboard`
--
ALTER TABLE `keyboard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keyboard`
--
ALTER TABLE `keyboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
