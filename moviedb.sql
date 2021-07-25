-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 May 2021, 18:37:58
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `film`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arkadaslarim`
--

CREATE TABLE `arkadaslarim` (
  `id` int(11) NOT NULL,
  `takipeden` text NOT NULL,
  `takipedilen` text NOT NULL,
  `aktiflik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `parola_degistir` varchar(255) NOT NULL,
  `mod` varchar(10) NOT NULL,
  `gizlilik` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `elestiri`
--

CREATE TABLE `elestiri` (
  `id` int(11) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `mesaj` text NOT NULL,
  `mesaj_tarihi` text NOT NULL,
  `baslik` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `elestiri`
--

INSERT INTO `elestiri` (`id`, `user_mail`, `mesaj`, `mesaj_tarihi`, `baslik`) VALUES
(43, 'aa@gmail.com', ' “Less is more” söylemini sonuna kadar haklı çıkarıyor bu film. Bir oda, bir masa, 12 adam, son derece basit bir konu. Ve sonuçta ortaya çıkan on numara bir eser.\r\n\r\nFilm hakkında ekleyeceğim son üç kelime var: izleyin, izleyin, izleyin.', '2021-01-20', '12 Angry Men'),
(93, 'sungur@hotmail.com', ' fffff\r\n“Less is more” söylemini sonuna kadar haklı çıkarıyor bu film. Bir oda, bir masa, 12 adam, son derece basit bir konu. Ve sonuçta ortaya çıkan on numara bir eser. Film hakkında ekleyeceğim son üç kelime var: izleyin, izleyin, izleyin', '2021-01-21', ' '),
(94, 'sungur@hotmail.com', ' EFSANE', '2021-01-21', ' VAY ARKADAŞ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gunluklerim`
--

CREATE TABLE `gunluklerim` (
  `id` int(11) NOT NULL,
  `icerik` varchar(500) NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `izlediklerim`
--

CREATE TABLE `izlediklerim` (
  `id` int(11) NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `izleyeceklerim`
--

CREATE TABLE `izleyeceklerim` (
  `id` int(11) NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  `bilgi` varchar(255) NOT NULL,
  `yas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `ad`, `soyad`, `mail`, `sifre`, `bilgi`, `yas`) VALUES
(4, 'Yusuf', 'Erzen', 'aaa@gmail.com', '698d51a19d8a121ce581499d7b701668', '123123', '2222-02-12'),
(5, 'asdasdfejek', 'aaaa', 'yusuf@gmail.com', 'bcbe3365e6ac95ea2c0343a2395834dd', '123123', '0123-03-12'),
(6, 'asdasdfejek', 'asdasd', 'aa@gmail.com', '4297f44b13955235245b2497399d7a93', '123123', '0123-03-12'),
(7, 's', 's', 'sungur@hotmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'asdf', '0000-00-00'),
(8, 'sungur', 'adcgfasdfa', 'a@hotmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'dasg', '1996-02-21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj`
--

CREATE TABLE `mesaj` (
  `mes_id` int(11) NOT NULL,
  `baslik` varchar(50) NOT NULL,
  `icerik` varchar(380) NOT NULL,
  `tarih` date NOT NULL,
  `alici` int(11) NOT NULL,
  `gonderen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `mesaj`
--

INSERT INTO `mesaj` (`mes_id`, `baslik`, `icerik`, `tarih`, `alici`, `gonderen`) VALUES
(1, 'Sungura', 'Selam Sungur.', '2021-05-18', 8, 4),
(2, 'Yusuf Erzene', 'Yusuf naber', '2021-05-18', 4, 8),
(6, 'agdsgasd', 'adfşgıojgfadlşkgfadlşkmgflşkmgflşkmnhfadelşkmhfşlknmfahgşkmnlgsaşlkmahdgfslşkmhfadlşkmfhaşlkmhjfdgalşkmlkmşgjhşkmlöajfhdglşkmahdjflşkmhafdlöşmihfadlmpöhfadplkahdjfpokmlhfadplokmihfadjkplomahfdkpoapokfhdölpğoöfhadfşgıojgfadlşkgfadlşkmgflşkmgflşkmnhfadelşkmhfşlknmfahgşkmnlgsaşlkmahdgfslşkmhfadlşkmfhaşlkmhjfdgalşkmlkmşgjhşkmlöajfhdglşkmahdjflşkmhafdlöşmihfadlmpöhfadplkahdjfpokmlhf', '2021-05-18', 4, 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `foto` int(11) NOT NULL,
  `ayarlar` int(11) NOT NULL,
  `gunluklerim` int(11) NOT NULL,
  `elestirilerim` int(11) NOT NULL,
  `izlediklerim` int(11) NOT NULL,
  `izleyeceklerim` int(11) NOT NULL,
  `arkadaslarim` int(11) NOT NULL,
  `url` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `url`
--

CREATE TABLE `url` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `arkadaslarim`
--
ALTER TABLE `arkadaslarim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `elestiri`
--
ALTER TABLE `elestiri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gunluklerim`
--
ALTER TABLE `gunluklerim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `izlediklerim`
--
ALTER TABLE `izlediklerim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `izleyeceklerim`
--
ALTER TABLE `izleyeceklerim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesaj`
--
ALTER TABLE `mesaj`
  ADD PRIMARY KEY (`mes_id`),
  ADD KEY `alici` (`alici`),
  ADD KEY `gonderen` (`gonderen`);

--
-- Tablo için indeksler `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gunluklerim` (`gunluklerim`),
  ADD KEY `ayarlar` (`ayarlar`),
  ADD KEY `gunluklerim_2` (`gunluklerim`),
  ADD KEY `foto` (`foto`,`izlediklerim`,`izleyeceklerim`,`url`),
  ADD KEY `izlediklerim` (`izlediklerim`,`izleyeceklerim`),
  ADD KEY `izleyeceklerim` (`izleyeceklerim`),
  ADD KEY `url` (`url`),
  ADD KEY `url_2` (`url`);

--
-- Tablo için indeksler `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `arkadaslarim`
--
ALTER TABLE `arkadaslarim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `elestiri`
--
ALTER TABLE `elestiri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Tablo için AUTO_INCREMENT değeri `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `gunluklerim`
--
ALTER TABLE `gunluklerim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `izlediklerim`
--
ALTER TABLE `izlediklerim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `izleyeceklerim`
--
ALTER TABLE `izleyeceklerim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `mes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `url`
--
ALTER TABLE `url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `arkadaslarim`
--
ALTER TABLE `arkadaslarim`
  ADD CONSTRAINT `arkadaslarim_ibfk_1` FOREIGN KEY (`id`) REFERENCES `kullanici` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`gunluklerim`) REFERENCES `gunluklerim` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profil_ibfk_2` FOREIGN KEY (`id`) REFERENCES `kullanici` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profil_ibfk_3` FOREIGN KEY (`ayarlar`) REFERENCES `ayarlar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profil_ibfk_4` FOREIGN KEY (`izlediklerim`) REFERENCES `izlediklerim` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profil_ibfk_5` FOREIGN KEY (`izleyeceklerim`) REFERENCES `izleyeceklerim` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profil_ibfk_6` FOREIGN KEY (`foto`) REFERENCES `foto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profil_ibfk_7` FOREIGN KEY (`url`) REFERENCES `url` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
