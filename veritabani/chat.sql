-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Oca 2021, 11:55:29
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `chat`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `uyeid` int(11) NOT NULL,
  `ad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `cep` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uyeid`, `ad`, `soyad`, `mail`, `sifre`, `cep`) VALUES
(1, 'Emre', 'Göç', 'emre@gmail.com', '123456', '123456');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`uyeid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uyeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
