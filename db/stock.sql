-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 15 Tem 2021, 19:40:18
-- Sunucu sürümü: 5.7.34-cll-lve
-- PHP Sürümü: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sheepdat_birdstock`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `brandname` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `prices` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `notes` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `log` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `productname`, `stock`, `brandname`, `category`, `prices`, `sold`, `notes`, `photo`, `log`) VALUES
(8, 'Syncmaster 943 Monitor 21\"', 2112, 'Samsung', 'Monitors &Displays', 330, 4, ' DVI and HDMI ports', 'image/8samsung-lcd-monitor-3885_500.jpg', ''),
(7, 'Raspberry Pi Zero', 90, 'Rasbian', 'ioT ', 3, 35, '', 'image/7raspberry-pi-zero-raspberry-pi-modelleri-raspberry-pi-171-28-B.png', ''),
(3, 'iPhone 6s 32GB', 34, 'Apple', 'Mobile Phone', 444, 24, '', 'image/3v2-83642-1_large.webp', ''),
(4, 'Sony Vaio', 3, 'Sony', 'Laptop', 2000, 1, '', 'image/4Ekran Resmi 2021-05-02 16.11.30.png', ''),
(5, 'Xiaomi s10', 55, 'Xiamoi', 'Phone', 500, 44, '', 'image/5HBV00000P3RNS-3(1).jpg', ''),
(6, 'Winston Ciggarate', 1000, 'Winston', 'Tabacco', 0, 33, 'Smoking Cigarattes is harmful thing !', 'image/6hkjg67uo-900.jpg', ''),
(13, 'HPX24c 23.6\"', 55, 'HP', 'Screen&Monitor', 500, 1, ' Curved Gaming Monitor', 'image/132_org.jpg', ''),
(17, 'Air Monarch', 67, 'Nike', 'Shoes', 130, 5, ' ', 'image/17image.jpg', '21/05/17'),
(30, 'Winston Ciggarate', 1000, 'qwdqwd', 'Phone', 500, 44, ' 2621231231', 'image/ccc.PNG', '21/05/17 11:43:31pm');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'ramo', 'rmdnmllr@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
