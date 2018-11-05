-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 25 Ara 2017, 19:33:17
-- Sunucu sürümü: 10.1.29-MariaDB
-- PHP Sürümü: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `u596488850_mydb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `yetki` varchar(10) COLLATE utf8mb4_turkish_ci NOT NULL,
  `resim` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `durum` varchar(10) COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `adsoyad`, `email`, `sifre`, `yetki`, `resim`, `durum`, `tarih`) VALUES
(1, 'YAVUZ ÜNLÜ', 'yavuz_unlu_@hotmail.com', 'kasap3406', 'admin', '', 'aktif', '2017-12-13 22:46:01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `smtpserver` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `smtpport` int(11) NOT NULL,
  `smtpemail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda` text COLLATE utf8_turkish_ci NOT NULL,
  `iletisim` text COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `pinterest` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `fax` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `linkedin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `sss` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `adi`, `keywords`, `aciklama`, `name`, `smtpserver`, `smtpport`, `smtpemail`, `password`, `adres`, `sehir`, `telefon`, `email`, `hakkimizda`, `iletisim`, `facebook`, `twitter`, `instagram`, `pinterest`, `fax`, `linkedin`, `sss`) VALUES
(1, 'UNLU OEM', 'ram,parça,ekran kartı,oem,anakart,işlemci,monitor', 'Sitemizde OEM Ürünlerinin Şatışı Yapılmaktadır.', 'UNLU OEM LTD.', 'ssl://smtp.googlemail.com', 465, 'unluoem@gmail.com', 'kasap3406', 'Demirpark Konutları Merkez/Karabük', 'Karabük', '0370 519 87 20', 'iletisim@unluoem.net', 'Hakkımızda\r\nTarihimiz:\r\n•	1983 Türkiye’nin ilk Bilgisayar Mağazası Taksim-Elmadağ. Bilgisayar ve program satışı\r\n\r\n•	1996 Perakendenin yanı sıra Olivetti ürünleri Türkiye tek dağıtıcılığı\r\n\r\n•	2002 Türkiye’nin ilk Teknoloji Hiperstoru; Tüm teknoloji ürünlerinin satışı\r\n\r\n•	2006 Dünyanın en büyük Teknoloji Marketi Ankara-Söğütözü 18,650 m2\r\n\r\n•	2007 sonu 8 i Hiperstore 9 mağaza,\r\n\r\n•	2008 sonu 11 i Hiperstore 12 mağaza,\r\n\r\n•	2009 sonu 11 i Hiperstore 19 mağaza,\r\n\r\n•	2010 sonu 16 sı Hiperstore 34 mağaza,\r\n\r\n•	2011 sonu 26 sı Hiperstore 45 mağaza,\r\n\r\n•	2012 sonu 45 i Hiperstore 64 mağaza,\r\n\r\n•	2013 sonu 83 ü Hiperstore 45 ilde 100 mağaza,\r\n\r\n• 2017 itibariyle 53 ilde 123 mağaza 185.000 m2 kapalı alan, 101.000 m2 satış alanı ile hizmet vermektedir.\r\n\r\n \r\nÇalışma saatlerimiz:\r\n•	Mağazalarımız haftanın 7 günü 10:00 22:00 arasında hizmet vermektedir.\r\n\r\n•	Çağrı merkezimizden ( 0850 222 56 56 ) Haftaiçi 9:00 – 18:40 hafta sonu 10:00 17:00 saatleri arasında destek hizmeti, haftanın 7 günü 9:00 22:00 saatleri arasında satış yapılmaktadır.\r\n\r\n•	Vatanbilgisayar.com internet sitesinden 7 gün 24 saat satış hizmeti verilmektedir.\r\n\r\n•	Satış sonrası destek hafta içi : 09:00 – 18:40  hafta sonu: 09:00 – 16:00 arasında hizmet vermektedir ve satış sonrası destek ekibinde çalışan sayısı satış ekibinde çalışan sayısının % 20 si kadardır.\r\n\r\n \r\nSermayemiz:\r\n% 100 Vatan ailesi üyelerine aittir.\r\n\r\n \r\nMisyonumuz:\r\nMutlu Çalışan, Mutlu Müşteri, Mutlu Tedarikçi\r\n\r\n \r\nVizyonumuz:\r\nBu Vatan’a birincilik yakışır.\r\n\r\n \r\nÇalışanlarımız:\r\n- Doğru işe doğru eleman prensibi ile seçilir, kişisel ve kariyer gelişimlerini destekleyecek eğitimlere katılma imkanı sağlanır.\r\n\r\n- Müşteri memnuniyet ilkelerine bağlı kalmaları nı ve geliştirmelerini sağlayacak otokontrol ve eğitim sistemleri ile sürekli desteklenirler.\r\n\r\n- Aylık ve dönemsel performans ölçme değerlendirme sistemleri ile kariyer gelişimleri objektif değerlendirilir ve desteklenir.\r\n\r\n- Üst pozisyonun gerektirdiği özellikleri taşıyıp taşımadıkları sınavlarla belirlenir. - Organizasyonumuz içinde yükselebilmeleri için ölçme değerlendirme sistemlerine katılımları sağlanıp öncelik çalışanlara verilir.\r\n\r\n- 2017 yılı itibari ile bir kısmı güvenlik, temizlik firmaları gibi taşeronlar üzerinde bordrolu, bir kısmı tedarikçi firmaların promotörleri olmak üzere 3600\'ün üzerinde kişi istihdam edilmektedir.	', '	İletişim\r\n0850 222 56 56 - Vatan Computer Telefon ile Sipariş Hattı\r\nHafta içi ve hafta sonu saat 09:00 ile 22:00 arasında siz değerli müşterilerimize kaliteli ve kesintisiz destek vermektedir.\r\n\r\n0850 222 56 56 – Vatan Computer Çağrı Merkezi\r\nSatış sonrası destek\r\nHafta içi saat 09.00 – 18.30, hafta sonu 09.00 - 16:00 (Pazar günü hariç) arasında siz değerli müşterilerimize kaliteli ve kesintisiz destek vermektedir. Arızalı ürünlerinizin durumu hakkında bilgi alabilirsiniz.\r\n\r\nİnternet Satış (İnternet siparişleriniz ile ilgili)\r\nHafta içi saat 09.00 – 18.30, hafta sonu 10.00 – 17.00 arasında siz değerli müşterilerimize kaliteli ve kesintisiz destek vermektedir. İnternet siparişlerinizin durumu hakkında bilgi alabilirsiniz.\r\n\r\n\r\n																', 'http://www.facebook.com/yavuz.unlu.3406', 'http://www.twitter.com', 'http://www.instagram.com/tyavuz_unlu', 'http://www.pinterest.com', '0370 665 88 44', 'http://www.linkedin.com', '																		<h3><strong>Nasıl Sipariş verebilirim?</strong></h3>\r\n\r\n<p>Alışveriş yapmak için üye girişi yapmalısınız. Sipariş vermek için aşağıdaki adımları izlemelisiniz.</p>\r\n\r\n<p>1. İncelediğiniz ürünü sepetinize ekleyiniz.</p>\r\n\r\n<p>2. “Sepetim” sayfasında ürün bilgilerinizi kontrol ediniz. Değişiklik yapmak istediğiniz alanlar varsa güncelleyiniz.</p>\r\n\r\n<p>3. Ödeme yapmak için “SATIN AL” butonuna basınız.</p>\r\n\r\n<p>4. Teslimat ve fatura adresinizi seçiniz. “Yeni Adres Ekle” seçeneği ile farklı bir teslimat adresi girebilirsiniz.</p>\r\n\r\n<p>5. “Kargo teslim adresi, fatura adresi ile aynı.” seçeneğini tıkladığınızda, teslimat adresinize fatura kesilecektir.(E-Fatura mükkellefiyseniz, faturanız sistem üzerinden gönderilecektir.)</p>\r\n\r\n<p>6. Farklı bir adres ve kişiye/kuruma fatura kesilecek ise; tiki kaldırmanız gerekmektedir. Bu durumda yeni adres bilgilerini ekleyebilirsiniz.</p>\r\n\r\n<p>7. Siparişi tamamla butonuna basarak “Ödeme” sayfasına gelerek ödeme tipini seçiniz.</p>\r\n\r\n<p>8. “Mesafeli Satış” ve “Ön Bilgilendirme” kabul sözleşmelerini onayladıktan sonra “SİPARİŞİ TAMAMLA” seçeneği ile siparişinizi sonlanlandırınız.</p>\r\n\r\n<h3><strong>Sipariş hakkında nasıl bilgi alabilirim?</strong></h3>\r\n\r\n<p>Siparişinizin durumunu “Hesabım” menüsünden “Sipariş Bilgilerim” sayfasından öğrenebilirsiniz.</p>\r\n\r\n<h3><strong>Siparişime ürün ekleyebilir miyim?</strong></h3>\r\n\r\n<p>Onayladığınız siparişinize daha sonradan ekleme yapılamamaktadır.</p>\r\n\r\n<h3><strong>Siparişimi hediye paketi yapabilir misiniz ve hediye notu ekleyebilir miyim?</strong></h3>\r\n\r\n<p>Evet. Sepetinize gidiniz ve “Hediye Paketi Yap” butonuna basınız. Ekrana gelen kutucuğa hediye notunuzu yazınız ve “kaydet”ı tıklayınız. (en çok 275 karakter)</p>\r\n\r\n<h3><strong>Hediye paketi ücretsiz mi?</strong></h3>\r\n\r\n<p>Evet, hediye paketi servimiz ücretsizdir.</p>\r\n\r\n<h3><strong>Yurtdışından sipariş verebilir miyim?</strong></h3>\r\n\r\n<p>Sitemize yurt dışından da sipariş verebilirsiniz.</p>\r\n\r\n<h3><strong>Siparişin parçalı olarak gönderilmesi ne demektir ve neden yapılmaktadır?</strong></h3>\r\n\r\n<p>Sizi daha fazla bekletmemek adına stokta olan ürünlerinizi sevk ederiz. Kalan ürünlerinizi ise ikinci gönderim ile kargoya teslim ederiz. Bu işlemden dolayı ek bir kargo ücreti alınmamaktadır.</p>\r\n\r\n<h3><strong>Hediye çeki ve/veya hediye kartını siparişimde nasıl kullanabilirim?</strong></h3>\r\n\r\n<p>Hediye çekinizi kullanmak için, ödeme sayfasına geldiğinizde, “hediye çeki kullan” butonuna basınız ve ilgili hediye çekinizi seçiniz. Daha önce mail adresinize tanımlanmış hediye çeki varsa ekrana gelecektir. Sepet tutarınız, hediye çekinden büyük ise, kalan tutarı istediğiniz ödeme tipi ile tamamlayabilirsiniz.</p>\r\n\r\n<p>Mağazalarımızdan satın aldığınız hediye kartınızı siparişinizde kullanmak istiyorsanız; kart numaranızı ve kartın arka yüzünde yer alan güvenlik kodunuzu giriniz ve “sorgula” tuşunu tıklayınız. Ödeme sayfasına geri dönüp siparişinizi tamamlayabilirsiniz.</p>\r\n																');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int(11) NOT NULL,
  `ust_id` int(11) NOT NULL,
  `adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(15) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `ust_id`, `adi`, `aciklama`, `keywords`, `resim`, `durum`) VALUES
(1, 0, 'İşlemci', '<p><strong><em>Okumalık, kapağı olan, konulu, yazılı, içinde kağıdı olan bir şeydir.</em></strong></p>\r\n', 'işlemci', 'kitap-kapak1.jpg', 'Aktif'),
(10, 1, 'İntel İşlemci', '8 Çekirdek işlemci.', 'işlemci,processor,i7,çekirdek', '', 'Aktif'),
(14, 0, 'Anakart', '', '', '', ''),
(12, 1, 'AMD İşlemci', '8 Çekirdek işlemci.', 'amd,işlemci,processor', '', 'Aktif'),
(15, 14, 'İntel Anakart', '', '', '', ''),
(16, 14, 'AMD Anakart', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(30) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `konu` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `mesaj` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` varchar(10) COLLATE utf8_turkish_ci DEFAULT 'yeni',
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adminnotu` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `adsoyad`, `email`, `telefon`, `konu`, `mesaj`, `durum`, `tarih`, `adminnotu`) VALUES
(1, 'YAVUZ ÜNLÜ', 'yavuz_unlu_@hotmail.com', '12321', '12312', '123123', 'okundu', '2017-12-14 20:41:18', ''),
(2, 'Turgut Yavuz', 'turguty3406@gmail.com', '05538056875', 'qeqweqw', '131eqweqweqwe', 'okundu', '2017-12-15 03:06:47', 'Deneme1 123123214124                                    '),
(3, 'Yakup Ünlü', 'turguty3406@gmail.com', '05538056875', '13123', '3123123123', 'yeni', '2017-12-15 03:09:05', ''),
(4, 'qweqwe', 'turguty3406@gmail.com', '05538056875', 'qweqweqweqwe', 'qweqweqweqwe', 'okundu', '2017-12-15 03:14:59', 'amcuk nisa naber                           '),
(5, 'Nuri Tekken', '06nurullahtekin06@gmail.com', '05313316931', 'Nuroş', 'Çok müthiş bir indirim var domaldım', 'yeni', '2017-12-15 22:52:08', ''),
(0, 'Yakup Ünlü', 'turguty3406@gmail.com', '05538056875', 'qweqw', 'qweqwe', 'yeni', '2017-12-19 00:29:05', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `parcalar`
--

CREATE TABLE `parcalar` (
  `id` int(11) NOT NULL,
  `adi` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `aciklama` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `adet` int(11) NOT NULL,
  `afiyat` decimal(11,2) NOT NULL,
  `sfiyat` decimal(11,2) NOT NULL,
  `resim` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `otarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dtarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `durum` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `uzunaciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `turu_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `parcalar`
--

INSERT INTO `parcalar` (`id`, `adi`, `kategori_id`, `aciklama`, `keywords`, `adet`, `afiyat`, `sfiyat`, `resim`, `otarih`, `dtarih`, `durum`, `uzunaciklama`, `turu_id`) VALUES
(14, 'Intel Core i7 8700K Soket 1151-V.2 3.7GH', 10, 'Bilgisayar Performansında Son Nokta', '8700K ,Intel ,Core i7,1151', 5, '1000.00', '1500.00', 'v2-88325_large.JPG', '2017-12-19 00:45:04', '2017-12-11 11:09:20', 'Kullanilmamis', '<h1>7. Nesil Intel® Core™ i7 İşlemciler</h1>\r\n\r\n<p> </p>\r\n\r\n<p>Bilgisayar Performansında Son Nokta</p>\r\n\r\n<p> </p>\r\n\r\n<p>Daha fazla güç, daha uzun pil ömrü ve daha yüksek kaliteli eğlence! Intel® Core™ i7 işlemci ile mükemmel bir bilgisayarda olması gereken tüm özelliklerin daha fazlasını elde edin.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Bilgisayarınız, Intel® Turbo Boost 2.0 Teknolojisi ile üretkenliğinizin artmasına yardımcı olacak benzersiz gücü ve yanıt hızını sunar. En kaliteli 4K içerikler için kusursuz veri akışı ve HD eğlencesi, inanılmaz canlı oyunlar ve olağanüstü görüntülerle etkileyici, tam ekran 4K ve 360 derece görüntüleme deneyimlerini mümkün kılar. Ayrıca, Thunderbolt™ 3 teknolojisinin ışık hızındaki veri aktarımları sayesinde 4K ve 360 derece içerikler oluşturmak, bunları düzenlemek ve paylaşmak için ihtiyacınız olan tüm gücü elde edersiniz. Benzersiz bir performans ve çok amaçlı kullanım özellikleriyle tanışın.</p>\r\n', 1),
(33, 'Intel Core i3 8350K Soket 1151-V.2 4.0GH', 10, 'Daha Hızlı, Daha Akıllı Bir Bilgisayar E', 'i3,intel,işlemci', 12, '500.00', '700.00', 'v2-88321_large115.JPG', '2017-12-19 00:35:49', '2017-12-19 00:35:28', 'Kullanilmamis', '<h1>7. Nesil Intel® Core™ i3 İşlemciler</h1>\r\n\r\n<p> </p>\r\n\r\n<h1> </h1>\r\n\r\n<p>Daha Hızlı, Daha Akıllı Bir Bilgisayar Edinme Zamanı Geldi.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Karşınızda hem evde hem de seyahat halindeyken kusursuz bilgisayar deneyimi için daha güçlü performans sunan yeni bir bilgisayar düzeyi. Mükemmel pil ömrüyle prizlerden kurtulurken, kusursuz veri akışı ve etkileyici, tam ekran 4K ve 360 derece görüntüleme özellikleriyle mükemmel HD eğlencesi elde edin.</p>\r\n\r\n<p> </p>\r\n', 0),
(36, 'GIGABYTE GA-B250M-GAMING 5 Intel B250 So', 15, 'GIGABYTE\'ın 200 serisi anakartları bugün', 'GIGABYTE,intel,anakart', 10, '450.00', '850.00', 'v2-85784-3_large.jpg', '2017-12-19 00:43:47', '2017-12-19 00:42:52', 'Kullanilmamis', '<p>RGB FUSION</p>\r\n\r\n<p> </p>\r\n\r\n<p>Stilinizle Eşleşen Renkleri Ayarlayın</p>\r\n\r\n<p> </p>\r\n\r\n<p>GIGABYTE&#39;ın 200 serisi anakartları bugün piyasadaki en gelişmiş LED sistemine sahiptir. RGB Fusion App sayesinde her zamankinden daha fazla uyarlanabilirlik ve kullanışlı ve sezgisel bir kullanıcı arayüzü ile, GIGABYTE&#39;ınızı kendinize özgü bir anakarta dönüştürebilirsiniz .LED tutkunları artık birden çok bölgeyi bağımsız olarak özelleştirme becerisine hatta çok daha da fazla seçeneğe sahipler. Daha işlevsel bir kullanım için, parlak ve canlı LED&#39;ler PC&#39;nin sıcaklığını veya yükünü gösterecek şekilde konfigüre edilebilir. Daha fazla LED güzelliği için RGBW şeritleri artık daha gerçekçi ve canlı beyazlar için destekleniyor.</p>\r\n', 0),
(35, 'GIGABYTE GA-AB350M-GAMING 3 AMD B350 Sok', 16, 'Smart Fan 5 kullanıcıları, oyun PC\'sinin', 'amd,anakart,gigabyte', 10, '400.00', '650.00', 'v2-86424-3_large.jpg', '2017-12-19 00:41:16', '2017-12-19 00:40:36', 'Kullanilmamis', '<p>Smart Fan 5</p>\r\n\r\n<p> </p>\r\n\r\n<p>Smart Fan 5 kullanıcıları, oyun PC&#39;sinin serin kalırken performansını koruyabilmelerini sağlayabilir. Akıllı Fan 5, kullanıcıların fan başlıklarını anakartın farklı yerlerinde farklı termal sensörleri yansıtacak şekilde değiştirmelerini sağlar. Sadece Smart Fan 5 ile hem PWM hem de Voltaj modu fanlarını destekleyen daha karma fan başlıkları, anakartı daha fazla soğutmayı daha kolay hale getirmek için üretildi.</p>\r\n', 0),
(34, 'AMD Ryzen 3 1200 Soket AM4 + Wraith Soğu', 12, 'Yaptığın her şey için harika bir perform', 'amd,işlemci,ryzen 3', 10, '500.00', '750.00', 'v2-87531_large.JPG', '2017-12-19 00:44:54', '2017-12-19 00:38:17', 'Kullanilmamis', '<h1>AMD RYZEN 3</h1>\r\n\r\n<p>YENI NESİL BİR İŞLEMCİ</p>\r\n\r\n<p>Yaptığın her şey için harika bir performans elde et.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Gerçek dört çekirdek performansı</p>\r\n\r\n<p>Yeni, akıllı mimari ile donatılan, AMD Ryzen™ işlemcideki dört fiziksel çekirdek harika bir fiyata üstün çoklu görev performansı sunuyor.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Geleceğe hazır platform</p>\r\n\r\n<p>Yeni AM4 platformu, bugünün ve yarının öncü özelliklerinden yararlanıyor.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Hız aşırtma için kilidi açık</p>\r\n\r\n<p>Hız aşırtma için her Ryzen™ işlemcisinde saat çarpanı kilidi açıktır. Ayarlarınızı değiştirmek konusunda emin değilseniz, XFR özelliği üst düzey bir işlemci soğutması algıladığında bu akıllı donanımın kendi saat hızını gerçekten artırmasını sağlıyor.</p>\r\n', 0),
(37, 'GIGABYTE GA-AB350M-GAMING 3 AMD B350 Sok', 16, 'Smart Fan 5 kullanıcıları, oyun PC\'sinin', '1231eqwe', 123, '123.00', '213.00', 'v2-86424-3_large1.jpg', '2017-12-19 01:34:47', '2017-12-19 01:33:50', 'Kullanilmamis', '<p>GIGABYTE GA-AB350M-GAMING 3 AMD B350 Soket AM4 Ryzen™ DDR4 3200+(O.C)MHz AnakartGIGABYTE GA-AB350M-GAMING 3 AMD B350 Soket AM4 Ryzen™ DDR4 3200+(O.C)MHz Anakart</p>\r\n', 0),
(38, 'GIGABYTE GA-AB350M-GAMING 3 AMD B350 Sok', 16, '123', '123', 123, '123.00', '123.00', 'v2-86424-3_large2.jpg', '2017-12-19 01:35:00', '2017-12-19 01:34:06', 'Kullanilmamis', '<p>GIGABYTE GA-AB350M-GAMING 3 AMD B350 Soket AM4 Ryzen™ DDR4 3200+(O.C)MHz AnakartGIGABYTE GA-AB350M-GAMING 3 AMD B350 Soket AM4 Ryzen™ DDR4 3200+(O.C)MHz Anakart</p>\r\n', 0),
(39, 'GIGABYTE GA-AB350M-GAMING 3 AMD B350 Sok', 16, '123', '123', 123, '123.00', '123.00', 'v2-86424-3_large3.jpg', '2017-12-19 01:35:05', '2017-12-19 01:34:15', 'Kullanilmamis', '<p>GIGABYTE GA-AB350M-GAMING 3 AMD B350 Soket AM4 Ryzen™ DDR4 3200+(O.C)MHz AnakartGIGABYTE GA-AB350M-GAMING 3 AMD B350 Soket AM4 Ryzen™ DDR4 3200+(O.C)MHz Anakart</p>\r\n', 0),
(40, 'GIGABYTE GA-AB350M-GAMING 3 AMD B350 Sok', 16, '123', '123', 123, '123.00', '123.00', 'v2-86424-3_large4.jpg', '2017-12-19 01:35:11', '2017-12-19 01:34:24', 'Kullanilmamis', '<p>GIGABYTE GA-AB350M-GAMING 3 AMD B350 Soket AM4 Ryzen™ DDR4 3200+(O.C)MHz AnakartGIGABYTE GA-AB350M-GAMING 3 AMD B350 Soket AM4 Ryzen™ DDR4 3200+(O.C)MHz Anakart</p>\r\n', 0),
(41, 'GIGABYTE GA-AB350M-GAMING 3 AMD B350 Sok', 16, '123', '1231eqwe12', 213, '123.00', '123.00', 'v2-86424-3_large5.jpg', '2017-12-19 01:35:18', '2017-12-19 01:34:37', 'Kullanilmamis', '<p>GIGABYTE GA-AB350M-GAMING 3 AMD B350 Soket AM4 Ryzen™ DDR4 3200+(O.C)MHz Anakart</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `parcalar_resim`
--

CREATE TABLE `parcalar_resim` (
  `id` int(11) NOT NULL,
  `parca_id` int(11) NOT NULL,
  `resim` varchar(75) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `miktar` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`id`, `kullanici_id`, `urun_id`, `tarih`, `miktar`) VALUES
(15, 25, 2, '2017-12-16 20:39:59', 0),
(16, 25, 2, '2017-12-16 20:39:59', 0),
(18, 24, 2, '2017-12-16 20:39:59', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `resimadi` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `haber_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `resimadi`, `haber_icerik`, `resim`) VALUES
(1, 'h4-slide', '<p><strong><em>35 Lira ve üzerindeki tüm alışverişlerinizde &#39;SARAH LOTZ&#39; un &#39;Dört&#39; kitabı hediyemizdir...</em></strong></p>\r\n', 'h4-slide.jpg'),
(2, 'h4-slide2', '<p><em><strong>Çizgi Roman Tutkunlarına İyi Haber. Artık sitemizde çizgi roman satışı başlamıştır...</strong></em></p>\r\n', 'h4-slide2.jpg'),
(3, 'h4-slide3', '<p><em><strong>Çizgi Roman Tutkunlarına İyi Haber. Artık sitemizde çizgi roman satışı başlamıştır...</strong></em></p>\r\n', 'h4-slide3.jpg'),
(4, 'h4-slide4', '<p><em><strong>Çizgi Roman Tutkunlarına İyi Haber. Artık sitemizde çizgi roman satışı başlamıştır...</strong></em></p>\r\n', 'h4-slide4.jpg'),
(5, 'h4-slide5', '<p>qweqweqwewqeqweqwe</p>\r\n', 'h4-slide5.jpg'),
(8, 'h4-slide6', '<p><em><u><strong>qweqwewqasdaseqweqweqwe</strong></u></em></p>\r\n', 'h4-slide61.jpg'),
(9, 'h4-slide7', '<p>q<strong>weqwed123123</strong></p>\r\n\r\n<p><strong><s><sub>qweqwedasvwqevqwesadvwqevqwevq</sub></s>wev</strong></p>\r\n', 'h4-slide71.jpg'),
(10, 'h4-slide8', '<p><strong>qweqweqw</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p><strong><u>eqweqweqwe</u></strong></p>\r\n\r\n<p>qeqweqw</p>\r\n', 'h4-slide81.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `turu`
--

CREATE TABLE `turu` (
  `id` int(11) NOT NULL,
  `adi` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(150) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `turu`
--

INSERT INTO `turu` (`id`, `adi`, `aciklama`, `keywords`, `resim`, `durum`) VALUES
(1, 'işlemci', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sehir` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kod` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `adsoyad`, `email`, `sifre`, `yetki`, `durum`, `resim`, `tarih`, `sehir`, `adres`, `telefon`, `kod`) VALUES
(1, 'Yakup ÜNLÜ', 'yakup.unlu.165@hotmail.com', 'kasap3406', 'üye', 'aktif', '', '2017-12-13 23:24:22', 'Ankara', 'Güzelyalı Mah. Ener sok: No:29 D:5 Pendik', '5554443322', ''),
(2, 'yavuz ünlü', 'turguty3406@gmail.com', 'kasap3406', 'üye', 'beklemede', '', '2017-12-14 23:56:26', '', '', '05538056875', 'be83ab3ecd0db773eb2dc1b0a17836a1'),
(6, 'Yavuz ÜNLÜ', 'turgut_yavuz_06@hotmail.com', 'kasap3406', 'üye', 'aktif', '', '2017-12-15 03:41:52', '', '', '05538056875', '149e9677a5989fd342ae44213df68868'),
(7, 'Yarrak Hasan', 'ugur_bayrakdar@windowslive.com', 'yarrak123', 'üye', 'aktif', '', '2017-12-15 13:01:16', '', '', '243212156', '1068c6e4c8051cfd4e9ea8072e3189e2'),
(11, 'nisam qızıl ', 'nisanurkzl@gmail.com', '31313131', 'üye', 'aktif', '', '2017-12-15 18:39:12', '', '', '53131313131', '872488f88d1b2db54d55bc8bba2fad1b'),
(12, 'Güneş Ayyıldız', 'gunesayyildiz971@gmail.com', '6400719', 'Üye', 'aktif', '', '2017-12-15 18:41:56', '', '', '123456789', '5e9f92a01c986bafcabbafd145520b13'),
(13, 'Enes PEKER', 'enes.ve.ali@gmail.com', '1544d25fasdfasdf', 'üye', 'aktif', '', '2017-12-15 20:50:32', '', '', '05458427399', '502e4a16930e414107ee22b6198c578f'),
(15, 'hacer Unal', 'hu4ever13@gmail.com', '13020303', 'üye', 'aktif', '', '2017-12-15 21:18:28', '', '', '05443314878', '9778d5d219c5080b9a6a17bef029331c'),
(16, 'Nuri Tekken', '06nurullahtekin06@gmail.com', '31nurullah31', 'üye', 'aktif', '', '2017-12-15 22:52:49', '', '', '05313316931', 'f770b62bc8f42a0b66751fe636fc6eb0'),
(17, 'Yakup Ünlü', 'yakup.unlu.3406@hotmail.com', 'kasap3406', 'üye', 'aktif', '', '2017-12-18 00:32:45', '', '', '0534 074 54', 'daca41214b39c5dc66674d09081940f0'),
(18, 'YAVUZ ÜNLÜ', 'turguty3406eqwe@gmail.com', '123', 'üye', 'beklemede', '', '2017-12-19 00:28:51', '', '', '05538056875', 'fa14d4fe2f19414de3ebd9f63d5c0169');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `parcalar`
--
ALTER TABLE `parcalar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `id_2` (`id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `parcalar`
--
ALTER TABLE `parcalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
