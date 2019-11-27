-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2019 pada 05.02
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_pawonjawa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan`
--

CREATE TABLE `bahan` (
  `BAHAN_ID` int(11) NOT NULL,
  `RESEP_ID` int(11) DEFAULT NULL,
  `BAHAN_NAMA` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahan`
--

INSERT INTO `bahan` (`BAHAN_ID`, `RESEP_ID`, `BAHAN_NAMA`) VALUES
(31, 1, '140 gram tauge'),
(32, 2, '1 Kg Rajungan'),
(33, 2, '4 Siung Bawang Putih'),
(34, 2, '5 Siung Bawang Merah'),
(35, 2, '3 buah Cabe Merah Besar'),
(36, 2, '15 buah Cabe Rawit'),
(37, 2, '2 buah Kunyit'),
(38, 2, '1 ruas Jahe'),
(39, 2, '1 ruas Laos'),
(40, 2, '4 buah Kemiri'),
(41, 2, '1 sdt Ketumbar bubuk'),
(42, 2, '1/4 sdt Jinten'),
(43, 2, '3 lembar Daun Salam'),
(44, 2, '4 lembar Daun Jeruk'),
(45, 2, '3 buah Daun Brambang'),
(46, 2, '1 batang Sereh'),
(47, 2, '1 bungkus Santan Kara'),
(48, 2, '2 gelas Air'),
(49, 3, '150 gram paru kambing, potong kotak 2x2x2 cm'),
(50, 3, '150 gram babat kambing, potong kotak 2x2x2 cm'),
(51, 3, '150 gram usus kambing, potong kotak 2x2x2 cm'),
(52, 3, '100 gram lemak kambing, potong kotak 2x2x2 cm'),
(53, 3, '1 batang serai'),
(54, 3, '6 lembar daun jeruk'),
(55, 3, '4 cm kayumanis'),
(56, 3, '4 sth garam'),
(57, 3, '2 sth gula pasir'),
(58, 3, '1/2 sdt merica'),
(59, 3, '1.750 ml santan dari 1 butir kelapa'),
(60, 3, '3 sdm minyak goreng untuk menumis'),
(61, 3, '6 butir bawang merah'),
(62, 3, '3 siung bawang putih'),
(63, 3, '5 butir kemiri, sangrai'),
(64, 3, '1 sendok teh ketumbar bubuk sangrai'),
(65, 3, '1 cm jahe, bakar'),
(66, 3, '3 cm kunyit, bakar'),
(67, 3, '2 cm kencur, bakar'),
(68, 3, '2 cm lengkuas'),
(69, 3, '2 tangkai daun seledri, iris kasar'),
(70, 3, '6 lembar kol, iris halus'),
(71, 3, '100 gram kecambah'),
(72, 3, '2 buah jeruk nipis'),
(73, 3, '5 sendok teh kecap manis'),
(74, 3, '1.000 gram nasi putih'),
(75, 3, '15 tusuk sate kambing bumbu kacang'),
(76, 4, '125 gram tepung beras'),
(77, 4, '1 sdm tepung tapioka/sagu'),
(78, 4, '1 sdm gula pasir'),
(79, 4, '1/2 sdt garam'),
(80, 4, '1/2 sdt pasta pandan'),
(81, 4, '1 Liter santan (100 ml santan kara diencerkan jadi 1 liter)'),
(82, 4, '200 gram gula merah'),
(83, 5, '1/4 ekor ikan bandeng'),
(84, 5, 'Merica bubuk secukupnya'),
(85, 5, '10-20 cabai rawit (opsional)'),
(86, 5, '1 buah Tomat'),
(87, 5, '1 buah terasi'),
(88, 5, 'Kencur (setengah ruas jari)'),
(89, 5, 'Jeruk nipis'),
(90, 5, 'Kaldu jamur'),
(91, 5, 'Garam dan gula'),
(92, 5, 'Saus tiram'),
(93, 6, '1 buah kaki sapi'),
(94, 6, '3 liter air'),
(95, 6, '500 gram mie basah pipih'),
(96, 6, '250 gram tauge'),
(97, 6, '5 buah bawang merah'),
(98, 6, '5 siung bawang putih'),
(99, 6, '2 lembar daun salam'),
(100, 6, '5 lembar daun jeruk'),
(101, 6, '3 cm jahe'),
(102, 6, '1,5 sdt merica bubuk'),
(103, 6, '3 sdm garam'),
(104, 6, '1 sdm gula'),
(105, 6, 'bawang goreng secukupnya'),
(106, 6, 'irisan daun bawang secukupnya'),
(107, 6, 'irisan seledri secukupnya'),
(108, 6, 'irisan jeruk nipis secukupnya'),
(109, 7, '500 gram daging sapi'),
(110, 7, '2 cm lengkuas'),
(111, 7, '2 lembar salam'),
(112, 7, '2 batang serai'),
(113, 7, 'kaldu jamur secukupnya'),
(114, 7, 'garam dan kecap manis secukupnya'),
(115, 7, '1 sdm gula jawa'),
(116, 7, '1,5 liter santan kelapa'),
(117, 7, 'jeruk nipis secukupnya'),
(118, 7, 'bawang goreng secukupnya'),
(119, 7, '10 butir bawang merah'),
(120, 7, '4 siung bawang putih'),
(121, 7, '2 buah kluwak'),
(122, 7, '6 butir kemiri'),
(123, 7, '6 butir kemiri'),
(124, 7, '1/2 sdt ketumbar sangrai'),
(125, 7, '1/2 sdt merica bubuk'),
(126, 7, '1/4 sdt jinten '),
(127, 8, '10 lembar kulit lumpia'),
(128, 8, '200 gram rebung muda'),
(129, 8, '100 gram dada ayam cincang'),
(130, 8, '50 gram udang cincang'),
(131, 8, '2 butir telur diorak-arik'),
(132, 8, '1/2 buah bawang bombay cacah'),
(133, 8, '1 batang daun bawang diiris tipis'),
(134, 8, '1/2 sdm saus tiram'),
(135, 8, '1 sdm kecap inggris'),
(136, 8, '1 sdm gula pasir'),
(137, 8, '1 sdt kaldu bubuk'),
(138, 8, '2 sdm minyak goreng'),
(139, 8, '2 siung bawang putih'),
(140, 8, '1/2 sdt lada'),
(141, 8, '1/8 sdt garam'),
(142, 9, '450 gram beras'),
(143, 9, '4 lembar daun salam'),
(144, 9, '3 batang serai, diambil putihnya'),
(145, 9, '1/2 sdm garam'),
(146, 9, '1.150 ml santan dari 1/4 butir kelapa'),
(147, 9, '1/2 ekor ayam'),
(148, 9, '3 lembar daun salam'),
(149, 9, '3 batang serai'),
(150, 9, '2 cm lengkuas'),
(151, 10, '1000 gram nasi putih'),
(152, 10, '2 buah bawang merah'),
(153, 10, '2 siung bawang putih'),
(154, 10, '1 buah tomat'),
(155, 10, '1/2 sdt terasi'),
(156, 10, '1/2 sdt ebi'),
(157, 10, '1/2 sdt garam'),
(158, 10, '1 sdt gula pasir'),
(159, 10, 'tempe secukupnya'),
(160, 11, '1 kg Tepung Terigu'),
(161, 11, '4 butir Telur'),
(162, 11, '250 gr gula halus'),
(163, 11, '200 gr mentega (cairkan)'),
(164, 11, '4 ruas jahe (parut)'),
(165, 11, 'sejumput garam'),
(166, 11, 'secukupnya air'),
(167, 12, '500 gram beras ketan putih'),
(168, 12, '250 gram gula merah'),
(169, 12, '1 sendok makan tepung maizena'),
(170, 12, '1 buah kelapa parut'),
(171, 12, '1 sdt garam'),
(172, 12, 'Daun pandan'),
(173, 12, 'Air'),
(174, 12, 'Daun pisang'),
(175, 13, '1 ruas Jahe'),
(176, 13, 'Kayu manis secukupnya'),
(177, 13, '2 lembar daun salam'),
(178, 13, '5 buah cengkeh'),
(179, 13, '1 batang Serai'),
(180, 13, 'Laos secukupnya'),
(181, 13, 'Gula secukupnya'),
(182, 14, '1.000 ml air'),
(183, 14, '2 lembar pandan, diikat'),
(184, 14, '100 gram tepung hunkwe'),
(185, 14, '50 gram tepung beras'),
(186, 14, '1/2 sendok teh vanili bubuk'),
(187, 14, '1/2 sendok teh garam'),
(188, 14, '15 ml air daun suji dari 20 lembar daun suji dan 2 lembar daun pandan'),
(189, 14, '5 tetes pewarna merah cabai'),
(190, 15, 'Santan 1 liter dari 1 butir kelapa parut'),
(191, 15, 'Gula pasir 250 gram'),
(192, 15, 'Pewarna merah 1/8 sendok teh (cari pewarna makanan yang kualitas bagus)'),
(193, 15, 'Kelapa setengah tua 2 butir, serut halus (bisa gunakan kelapa muda atau degan)'),
(194, 16, 'Es batu sesuai dengan kebutuhan, serut '),
(195, 16, 'Buah Nangka sebanyak 1/4 kg di potong'),
(196, 16, '1 buah kelapa muda , di kerok sesuai selera'),
(197, 16, 'Santan kelapa'),
(198, 16, 'Alpukat 2 buah'),
(199, 16, 'Pacar Cina dengan 1 bungkus'),
(200, 16, 'Gula pasir 1/4 kg'),
(201, 16, 'Susu kental manis'),
(202, 16, 'Aneka jelly sesuai selera, masak sesuai petunjuk kemasan, lalu potong kecil-kecil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `CHAT_ID` int(11) NOT NULL,
  `CHAT_PENGIRIM` varchar(20) DEFAULT NULL,
  `CHAT_PENERIMA` varchar(20) DEFAULT NULL,
  `CHAT_ISI` text,
  `CHAT_WAKTU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`CHAT_ID`, `CHAT_PENGIRIM`, `CHAT_PENERIMA`, `CHAT_ISI`, `CHAT_WAKTU`) VALUES
(1, 'daedae', 'aulaul', 'hai', '2019-06-13 09:42:27'),
(2, 'daedae', 'aulaul', 'juga', '2019-06-13 09:42:40'),
(3, 'aulaul', 'daedae', 'hai', '2019-06-13 09:43:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_lokasi`
--

CREATE TABLE `kategori_lokasi` (
  `KATEGORI_LOKASI_ID` int(11) NOT NULL,
  `KATEGORI_LOKASI_NAMA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_lokasi`
--

INSERT INTO `kategori_lokasi` (`KATEGORI_LOKASI_ID`, `KATEGORI_LOKASI_NAMA`) VALUES
(1, 'Jawa Timur'),
(2, 'Jawa Tengah'),
(3, 'Jawa Barat'),
(4, 'DKI Jakarta'),
(5, 'Yogyakarta'),
(6, 'Banten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_makanan`
--

CREATE TABLE `kategori_makanan` (
  `KATEGORI_MAKANAN_ID` int(11) NOT NULL,
  `KATEGORI_MAKANAN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_makanan`
--

INSERT INTO `kategori_makanan` (`KATEGORI_MAKANAN_ID`, `KATEGORI_MAKANAN`) VALUES
(1, 'Nasi'),
(2, 'Berkuah'),
(3, 'Minuman'),
(4, 'Camilan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `langkah`
--

CREATE TABLE `langkah` (
  `LANGKAH_ID` int(11) NOT NULL,
  `RESEP_ID` int(11) DEFAULT NULL,
  `LANGKAH_NO` int(11) DEFAULT NULL,
  `LANGKAH_NAMA` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `langkah`
--

INSERT INTO `langkah` (`LANGKAH_ID`, `RESEP_ID`, `LANGKAH_NO`, `LANGKAH_NAMA`) VALUES
(18, 1, 1, 'Kuah : rebus daging hingga empuk, angkat, potong dadu, lalu masukkan kembali ke dalam air kaldu. Masukkan semua bumbu kuah, biarkan kuah mendidih lagu dan bumbu meresap, angkat, sisihkan'),
(19, 2, 1, '1.	Letakkan Rajungan yang masih hidup di wadah, siram dengan air panas. Tunggu hingga benar benar mati.'),
(20, 2, 2, '2.	Bersihkan rajungan dengan menggunakan sikat agar lumpur yang masih menempel menghilang. Bilas dengan air bersih sisihkan.'),
(21, 2, 3, '3.	Haluskan bumbu bumbu diatas dengan menggunakan blender.'),
(22, 2, 4, '4.	Panaskan minyak, tumis bumbu yang telah dihaluskan. Masukkan daun salam, daun jeruk dan sereh. Masak hingga wangi.'),
(23, 2, 5, '5.	Masukkan air dan rajungan, masak hingga rajungan berubah warna menjadi kemerahan.'),
(24, 2, 6, '6.	Tuangi santan, masukkan gula dan garam. Icipi hingga pas sesuai selera. Taburi dengan daun brambang yang sudah dipotong2'),
(25, 3, 1, 'Tumis bumbu halus bersama serai, daun jeruk, dan kayumanis hingga harum. Masukkan lemak kambing. Aduk hingga berubah warna.'),
(26, 3, 2, 'Tambahkan paru, babat, usus, garam, gula pasir, dan merica. Aduk rata.'),
(27, 3, 3, 'Tuang santan. Masak sambil diaduk hingga matang.'),
(28, 3, 4, 'Tata nasi, kol, kecambah dan daun seledri. Siramkan kuah bersama isinya. Tambahkan 3 tusuk sate yang dilepaskan dari tusukannya. Beri sedikit bumbu kacang sate dan kecap manis.'),
(29, 3, 5, 'Sajikan bersama jeruk nipis.'),
(30, 4, 1, 'Sisir gula merah, letakkan didalam loyang sambil diratakan.'),
(31, 4, 2, 'Siapkan pengukus, nyalakan kompor, tutup panci dilapisi kain.'),
(32, 4, 3, 'Membuat lapisan pertama : aduk semua bahan jadi satu, pastikan tidak ada tepung bergerindil, masak dengan api kecil sambil terus diaduk. Setelah mengental matikan kompor, tidak perlu sampai meletup2 seperti bubur sumsum, karena adonan akan dikukus lagi.'),
(33, 4, 4, 'Tuang lapisan pertama diatas gula merah, sisihkan.'),
(34, 4, 5, 'Membuat lapisan kedua : aduk semua bahan jadi satu, masak sambil terus diaduk sampai mengental, kemudian tuang diatas lapisan kedua.'),
(35, 4, 6, 'Kukus adonan selama 15 menit. Setelah matang angkat dan biarkan dingin, simpan dikulkas supaya lebih padat.'),
(36, 4, 7, 'Ini setelah dikeluarkan dari kulkas. Jojorong ini lebih enak dimakan dingin, karena lebih padat dan kenyal.'),
(37, 5, 1, 'Cuci ikan bandeng sampai bersih, lalu balurkan dengan merica bubuk, jeruk nipis (agar tidak amis) dan tambahkan sedikit garam'),
(38, 5, 2, 'Bakar ikan yang sudah dibumbui'),
(39, 5, 3, 'Kemudian bakar terasi sampai harum dan bawang putih'),
(40, 5, 4, 'Buat sambal mentah dengan mengaluskan bawang putih, cabak rawit, terasi, tomat dan kencur kemudian tambahkan garam, gula, kaldu jamur dan jeruk nipis'),
(41, 5, 5, 'Balurkan ikan yang sudah dibakar dengan sambel mentah tadi, lalu sajikan'),
(42, 6, 1, 'Rebus kaki sapi hingga empuk. Angkat dan tiriskan (jangan dibuang air sisa rebusannya). Potong-potong kecil sesuai selera. Masukkan kembali ke dalam air rebusan. Didihkan kembali dan sisihkan.'),
(43, 6, 2, 'Panaskan minyak. Tumis bawang merah dan bawang putih hingga harum. Angkat lalu tuang ke dalam panci rebusan kaki sapi. Aduk rata.'),
(44, 6, 3, 'Masukkan jahe, daun jeruk, daun salam, garam, gula, dan merica. Aduk rata dan masak hingga mendidih. Koreksi rasanya. Matikan api.'),
(45, 6, 4, 'Penyajian: Tata mie dan toge dalam mangkuk. Beri kikil/kaki sapi. Siram dengan kuah. Beri taburan bawang merah goreng, irisan daun bawang, dan irisan seledri.'),
(46, 7, 1, 'Didihkan air, rebus daging hingga empuk.'),
(47, 7, 2, 'Tumis bumbu halus dengan api kecil sampai matang, masukkan serai, lengkuas, dan daun salam. Tumis sampai harum.'),
(48, 7, 3, 'Masukkan daging dalam tumisan, masak hingga daging berubah warna.'),
(49, 7, 4, 'Masukkan air kurang lebih 2 liter dan santan kelapa.'),
(50, 7, 5, 'Tambahkan gula jawa, garam, kaldu jamur, dan kecap manis. Masak dengan api kecil hingga bumbu meresap.'),
(51, 7, 6, 'Sajikan dengan nasi putih dengan taburan bawang goreng dan beri perasan jeruk nipis.'),
(52, 8, 1, 'Panaskan minyak lalu tumis bawang bombai hingga layu. Masukkan bumbu halus lalu tumis hingga matang dan harum.'),
(53, 8, 2, 'Masukkan ayam dan udang, aduk rata dan masak hingga berubah warna.'),
(54, 8, 3, 'Masukkan rebung, saus tiram, kecap inggris, kecap manis, gula dan kaldu bubuk. Aduk rata.'),
(55, 8, 4, 'Masukkan telur orakarik. Masak hingga matang dan rebung setengah kering. Koreksi rasanya.'),
(56, 8, 5, 'Beri irisan daun bawang sesaat sebelum diangkat, aduk rata. Angkat. Sisihkan.'),
(57, 8, 6, 'Siapkan perekat kulit. Larutkan tepung terigu dengan air. Sisihkan'),
(58, 8, 7, 'Ambil selembar kulit lumpia, beri isian secukupnya. Lipat ke dalam bagian kanan kirinya, kemudian gulung. Rekatkan ujungnya dengan lem. Lakukan hingga habis'),
(59, 8, 8, 'Panaskan minyak banyak. Goreng lumpia hingga berwarna kuning kecoklatan. Angkat dan tiriskan.'),
(60, 8, 9, 'Siap disajikan bersama acar timun dan bawang, cabai rawit dan saus coklat kental.'),
(61, 9, 1, 'Nasi liwet, rebus beras, daun salam, serai, garam, dan santan sampai mendidih. Tutup panci. Kecilkan api. Masak sampai matang sambil sesekali di aduk. Angkat. Aduk-aduk sampai pulen dan matang.'),
(62, 9, 2, 'Ayam suwir ungkep,  semua bahan diaduk rata bersama bumbu halus. Lalu masak hingga matang. Angkat ayam. Suwir-suwir dagingnya. Lalu didihkan lagi kuahnya. Angkat dan sisihkan.'),
(63, 9, 3, 'Sajikan nasi liwet Solo dengan ayam suwir ungkep. Taburi dengan bawang merah goreng'),
(64, 10, 1, 'Tempe Goreng : pertama rendam tempe dengan bawang putih , garam dan air selama 10 menit . lalu goreng dalam minyak yang sudah dipanaskan hingga matang . tiriskan'),
(65, 10, 2, 'Bumbui nasi dengan bahan-bahan di tersebut. Sajikan nasi besama dengan tempe goreng'),
(66, 11, 1, 'Timbang semua bahan sesuai ukuran. Cairkan mentega lalu diamkan sampai suhu ruang. Kocok telur hingga kuning pucat. Cuci bersih jahe dan jeruk purut lalu parut hingga halus.. NB: Marut jeruknya cuma bagian kulitnya aja yaa, jgn smpe kena bagian dalam karna rasanya bakal beda. Cara marutnya sambil diputar bagian kulit ajaa.    '),
(67, 11, 2, 'Campurkan semua bahan, lalu uleni hingga tercampur rata dan kalis. Jika belom kalis maka boleh tambahkan air biasa aja, sedikit saja sambil di uleni. kalo sudah pas stop ya nanti kelembekan gg bisa dibentuk.'),
(68, 11, 3, 'Kemudian bentuk adonan dengan cara ambil sedikit adonan, pulung lalu gilingkan hingga berbentuk panjang kemudian potong sedikit sisinya menyerupai duri, kemudian satukan ujung dengan ujungnya dengan agak ditekan agar tidak lepas. Maka bentuknya seperti cahaya matahari. Lakukan hingga adonan habis.'),
(69, 11, 4, 'Setelah selesai, goreng dalam minyak panas sampai coklat keemasan'),
(70, 11, 5, 'Tiriskan hingga sudah agak dingin lalu masukkan kedalam toples.'),
(71, 12, 1, 'Ketan putih dicuci hingga bersih, kemudian rendam didalam air sekitar 1jam sampai 2 jam, setelah direndam tiriskan airnya.'),
(72, 12, 2, 'Sediakan daun pisang yang bersih dan jangan lupa dilemaskan dengan cara ditaruh diatas kompor, lalu bentuk segitiga'),
(73, 12, 3, 'Kemudian masukkan beras ketan kedalam daun pisang, dan rebus didalam air mendidih kurang lebih sekitar 2 jam, bila air sudah berkurang bisa ditambahkan selama proses merebus'),
(74, 12, 4, 'Setelah 2 jam, kemudian angkat dan diamkan hingga dingin'),
(75, 12, 5, 'Kelapa parut dikukus jangan lupa diberi garam, setelah itu berikan daun pandan diatasnya, waktu kukus sekitar 15 menit'),
(76, 12, 6, 'Membuat toping: Silahkan rebus 1 gelas air lalu masukkan gula merah yang telah di iris-iris, masukkan 1 sendok makan tepung maizena serta daun pandan, tunggu sampai mengental, kemudian angkat'),
(77, 12, 7, 'Kue lupis siap disajikan bersama keluarga, selamat mencoba'),
(78, 13, 1, 'Rebus air bersama dengan gula.'),
(79, 13, 2, 'Setelah mendidih, masukkan semua bahan, biarkan hingga mendidih dan air rebusan mengeluarkan aroma rempah.'),
(80, 13, 3, 'Matikan api, angkat Wedang Uwuh siap disajikan.'),
(81, 14, 1, 'langkah pertama rebus air,  tepung hunkwe, vanili bubuk, daun pandan, tepung beras, dan garam diaduk sampai adonan meletup-letup. Bagi adonan 5 bagian. Satu bagian ditambahkan pewarna merah. Aduk rata. Satu bagian ditambahkan air suji. Aduk rata. Tiga bagian lagi biarkan putih.'),
(82, 14, 2, 'Tuang adonan hijau ke dalam loyang 24x12x4 cm yang dioles minyak. Ratakan. Tuangkan adonan putih di atasnya. Tuang lagi adonan merah di atasnya. Dinginkan. Potong bentuk jajaran genjang 2 cm.'),
(83, 14, 3, 'Saus, rebus gula merah, gula pasir, daun pandan bersama air sambil sesekali diaduk hingga mendidih. Dinginkan.'),
(84, 14, 4, 'Untuk membuat kuah caranya rebus santan, garam dan daun pandan, sambil diaduk sampai mendidih. Angkat dan diginkan.'),
(85, 14, 5, 'Hidangkan potongan es selendang mayang dengan  siraman santan, saus, dan tambahkan es batu.'),
(86, 15, 1, 'Membuat Doger : Langkah awal, rebus santan dan gula pasir sambil di aduk terus sampai mendidih. Tambahkan pewarna makanan warna merah, aduk rata. Angkat, aduk sampai dingin.'),
(87, 15, 2, 'Selanjutnya simpan ke dalam freezer sampai agak beku, keruk-keruk dengan sendok laalu kocok dengan mixer. Lakukan sampai 2-3 kali agar hasil es krim kelapa doger halus.'),
(88, 15, 3, 'Pada kocokan terakhir, masukkan kelapa serut, aduk rata. Es krim doger sudah jadi.'),
(89, 15, 4, 'Penyajian Es Doger : Letakkan tapai singkong, tapai ketan ketan hitam, roti, kolang kaling, selasih, cendol dan bahan pelengkap lainnya dalam gelas saji, kemudian tambahkan kerukan es krim doger santan.'),
(90, 15, 5, 'Langkah akhir, tuangi susu kental manis. Sajikan dingin, nyess mantap!'),
(91, 16, 1, 'Siapkan bahan-bahan yang digunakan, potong nangka dengan irisan dadu, keruk alpukat dengan sendok, sisihkan.'),
(92, 16, 2, 'Selanjutnya tata di atas mangkok saji buah nangka, alpukat, daging buah kelapa dan airnya, jely, lalu beri beberapa sendok cairan simple sirup.'),
(93, 16, 3, 'Beri es batu secukupnya, lalu taburi sagu mutiara yang sudah direbus dan tak lupa tambahkan susu kental manis putih di atasnya.'),
(94, 16, 4, 'Es campur oyen a la Bandung siap untuk di hidangkan selagi dingin. Mantap!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `likes`
--

CREATE TABLE `likes` (
  `LIKE_ID` int(11) NOT NULL,
  `USER_USERNAME` varchar(20) DEFAULT NULL,
  `RESEP_ID` int(11) DEFAULT NULL,
  `LIKE_JUMLAH` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `likes`
--

INSERT INTO `likes` (`LIKE_ID`, `USER_USERNAME`, `RESEP_ID`, `LIKE_JUMLAH`) VALUES
(1, 'daedae', 15, 1),
(2, 'daedae', 16, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1558594763),
('m130524_201442_init', 1558594765),
('m190124_110200_add_verification_token_column_to_user_table', 1558594767);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reply`
--

CREATE TABLE `reply` (
  `REPLY_ID` int(11) NOT NULL,
  `REVIEW_ID` int(11) DEFAULT NULL,
  `REPLY_USERNAME` varchar(50) NOT NULL,
  `REPLY_BALASAN` varchar(255) DEFAULT NULL,
  `REPLY_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reply`
--

INSERT INTO `reply` (`REPLY_ID`, `REVIEW_ID`, `REPLY_USERNAME`, `REPLY_BALASAN`, `REPLY_DATE`) VALUES
(1, 1, 'daedae', 'hai juga', '2019-06-13 06:32:07'),
(2, 1, 'daedae', 'hai juga', '2019-06-13 09:40:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `RESEP_ID` int(11) NOT NULL,
  `KATEGORI_LOKASI_ID` int(11) DEFAULT NULL,
  `USER_USERNAME` varchar(20) DEFAULT NULL,
  `KATEGORI_MAKANAN_ID` int(11) DEFAULT NULL,
  `RESEP_JUDUL` varchar(255) DEFAULT NULL,
  `RESEP_FOTO` varchar(255) DEFAULT NULL,
  `RESEP_DESKRIPSI` text,
  `RESEP_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`RESEP_ID`, `KATEGORI_LOKASI_ID`, `USER_USERNAME`, `KATEGORI_MAKANAN_ID`, `RESEP_JUDUL`, `RESEP_FOTO`, `RESEP_DESKRIPSI`, `RESEP_DATE`) VALUES
(1, 1, 'daedae', 2, 'Lontong Balap', 'lontong balap.jpg', 'ioj', '2019-06-12 15:44:36'),
(2, 1, 'rezafa', 2, 'Kare Rajungan', 'kare rajungan - tuban.jpg', 'Salah satu kuliner legendaris khas Tuban adalah Kare Rajungan, cita rasa gurih dan manis dari kaldu rajungan ditambah rasa pedas dari cabe rawit', '2019-06-12 16:05:01'),
(3, 1, 'aulaul', 1, 'Nasi Becek', 'Nasi becek - nganjuk.jpg', 'Nasi khas Nganjuk yang memiliki cita rasa yang gurih', '2019-06-12 16:16:00'),
(4, 6, 'aulaul', 4, 'Kue Jojorong', 'jojorong - banten.jpg', 'Kue tradisional khas Banten yang memiliki cita rasa seperti bubur sumsum, namun lebih kenyal karena ada campuran kanjinya.', '2019-06-12 16:25:14'),
(5, 1, 'rezafa', 2, 'Pecak Bandeng', 'pecak bandeng - banten.jpg', 'Pecak Bandeng adalah makanan khas Banten yang cita rasanya sangat nikmat.', '2019-06-12 16:32:06'),
(6, 1, 'daedae', 2, 'Mie Kocok', 'mie kocok - bandung.jpg', 'Mie berkuah khas Bandung yang memiliki cita rasa yang lezat dan gurih', '2019-06-12 16:37:18'),
(7, 2, 'rezafa', 1, 'Nasi Gandul', 'nasi gandul pati.jpg', 'Nasi gandul khas Pati dari Jawa Tengah memiliki cita rasa yang enak, gurih dan manis', '2019-06-12 16:43:42'),
(8, 2, 'daedae', 4, 'Lumpia Semarang', 'lumpia semarang.jpg', 'Lumpia Semarang yang sangat lezat', '2019-06-12 16:53:18'),
(9, 2, 'rezafa', 1, 'Nasi Liwet', 'liwet solo.jpg', 'Nasi Liwet khas dari Solo dengan taburan ayam suwir ungkep yang lezat', '2019-06-12 17:01:07'),
(10, 3, 'aulaul', 1, 'Nasi Jamblang', 'nasi jamblamg cirebon.jpg', 'Nasi Jamblang khas Jawa Barat', '2019-06-12 17:13:09'),
(11, 2, 'daedae', 4, 'Kue Banjar', 'kue banjar.jpg', 'Kue khas Semarang', '2019-06-12 17:41:28'),
(12, 4, 'aulaul', 4, 'Kue Lupis', 'lupis - jakarta.jpg', 'Kue lupis merupakan makanan tradisional khas betawi, yang berasal dari jakarta, kue ini mirip sekali kue lamang yang berasal dari sumatra. Akan tetapi kue lupis berbentuk segitiga, dan dimasak terlebih dulu dengan cara dibungkus menggunakan daun pisang yang dibentuk segitiga kemudian dikukus', '2019-06-12 19:17:08'),
(13, 5, 'rezafa', 3, 'Wedang Uwuh', 'wedang uwuh.jpg', 'Wedang uwuh adalah minuman yang terbuat dari aneka rempah.', '2019-06-12 19:26:20'),
(14, 4, 'aulaul', 3, 'Es Selendang Mayang', 'Selendang-Mayang.jpg', 'Minuman segar berisi hunkwe yang telah dimasak dengan campuran tepung beras dan air daun suji dan daun pandan ini merupakan salah satu minuman tradisional yang populer. Resep es selendang mayang berikut bisa menjadi panduan Anda untuk menyajikan minuman segar untuk keluarga.Untuk membuat es selandang mayang ini bahan-bahan yang digunakan sangat mudah didapatkan diantaranya tepung beras dan tepung hunkwe. Proses pembuatannya juga tidak terlalu sulit untuk anda coba dirumah.\r\n\r\n', '2019-06-13 04:30:12'),
(15, 3, 'daedae', 3, 'Es Doger', 'es_doger.jpg', 'Es doger adalah salah satu susu kelapa dingin yang sering ditemui di kota Bandung, Jawa Barat. Walaupun es doger berasal dari Cirebon, namun es doger bisa ditemui di kota-kota besar di Indonesia, seperti Jakarta (Es Doger Betawi), Malang dan Surabaya.', '2019-06-13 04:42:40'),
(16, 3, 'daedae', 3, 'Es Oyen', 'es-oyen.jpg', 'Es Oyen tergolong sebagai minuman yang memiliki rasa unik dan khas, berbeda dengan es campur pada umumnya. Minuman satu ini memiliki rasa manis dan segar yang pas. Rasa nikmat tersebut didapatkan dari potongan nangka, alpukat, kolang-kaling, pacar cina, kelapa muda, susu kental manis, es serut, dan masih banyak lagi.', '2019-06-13 04:54:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `REVIEW_ID` int(11) NOT NULL,
  `RESEP_ID` int(11) DEFAULT NULL,
  `REVIEW_USERNAME` varchar(50) NOT NULL,
  `REVIEW_KOMENTAR` varchar(255) DEFAULT NULL,
  `REVIEW_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`REVIEW_ID`, `RESEP_ID`, `REVIEW_USERNAME`, `REVIEW_KOMENTAR`, `REVIEW_DATE`) VALUES
(1, 16, 'daedae', 'hai', '2019-06-13 06:30:32'),
(2, 16, 'daedae', 'comment2', '2019-06-13 09:40:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_chat`
--

CREATE TABLE `riwayat_chat` (
  `RIWAYAT_ID` int(11) NOT NULL,
  `RIWAYAT_PENGIRIM` varchar(20) DEFAULT NULL,
  `RIWAYAT_PENERIMA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat_chat`
--

INSERT INTO `riwayat_chat` (`RIWAYAT_ID`, `RIWAYAT_PENGIRIM`, `RIWAYAT_PENERIMA`) VALUES
(2, 'aulaul', 'daedae'),
(1, 'daedae', 'aulaul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_model`
--

CREATE TABLE `role_model` (
  `role_model_id` int(11) NOT NULL,
  `role_model_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role_model`
--

INSERT INTO `role_model` (`role_model_id`, `role_model_nama`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'daegal22', 'rOQ1Tj3LmIkRKVKnVq8Krh29g3M6BH23', '$2y$13$fp2aO8DaneXP/Cmpv9rZb.tU4JAO3IGadd9NZ4Q5fxYvIDLGyU4mW', NULL, 'daegal22@gmail.com', 10, 1558848002, 1558848002, 'LtRU9YsvCf3skxCk_1NwyLC3ziv624gF_1558848002'),
(3, 'cobalagi', '6PW--J5qtplReuGOcx9tZ-dfKyxzXUlo', '$2y$13$cbkK18WeZBsnnhVpaslaIeduk2w8Y1.euwO1V5aXII7ov6nghY4Se', NULL, 'cobalagi@gmail.com', 10, 1558895452, 1558895452, '4zUVBh0pWe9IlyoLyipAtc1rPSaTQqeT_1558895452'),
(4, 'rezafa', 'rKIfwgiOCBV7dbfgJ4xR1cFNrX4FwFpx', '$2y$13$3ok4htwUvaFaNCyrMDPXx.LnuuRrmuNZ1JoZs0kPewk7fBFbP7fg.', NULL, 'rezafa@gmail.com', 10, 1558933716, 1558933716, 'BncE6CnGrd-A7_BpCtEGvo_ptZtKLtJT_1558933716'),
(5, 'aulaul', '4_3kqmuR0X4lTRyeVY8wK_HJNEJBZyxj', '$2y$13$qbKU0lBCdfIOc9O2UQIo3u20.gJ5Q8LhNz.iKoDa8ludsp2.YTY3e', NULL, 'aulaul@gmail.com', 10, 1558937196, 1558937196, 'qMindqlo9EchaJ5JS-6qQzo82FEhVfWx_1558937196'),
(6, 'daedae', '7zlgkaXyV-ODo0C-wJrhjYEpZWnLXFov', '$2y$13$2Eux9KUGBR/BkWMKlEhFC.KEokOw2QZsVWTTuDQL4MQsjqSgymKwW', NULL, 'daedae@gmail.com', 10, 1558937933, 1558937933, 'SZjn00U3vj_CEucduKfQgoHcfqBfKQQS_1558937933'),
(7, 'astin', 'm87Ck3Oxpl5Z_qEboB-A40OvhTZt0aKc', '$2y$13$jVBW3CDvGylfH9ikl8sydOgek7jORTEFLf51aH9zaWFkXhgRCdvOW', NULL, 'astin@gmail.com', 10, 1560401804, 1560401804, '3QJM1mcwUXmMjnwCfn-UA5V215U6XJNy_1560401804');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `USER_ID` int(11) NOT NULL,
  `USER_NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `USER_USERNAME` varchar(20) NOT NULL,
  `USER_PASSWORD` varchar(20) DEFAULT NULL,
  `USER_FOTO` varchar(255) DEFAULT NULL,
  `USER_EMAIL` varchar(50) DEFAULT NULL,
  `user_role_model_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`USER_ID`, `USER_NAMA_LENGKAP`, `USER_USERNAME`, `USER_PASSWORD`, `USER_FOTO`, `USER_EMAIL`, `user_role_model_id`) VALUES
(7, 'astin', 'astin', 'astini', 'download (23).jpeg', 'astin@gmail.com', 2),
(5, 'auliaaurum', 'aulaul', 'aulaul', 'download (16).jpeg', 'aulaul@gmail.com', 2),
(3, 'cobalagi', 'cobalagi', 'cobalagi', NULL, 'cobalagi@gmail.com', 2),
(6, 'daedae', 'daedae', 'daedae', 'IMG_7477.JPG', 'daedae@gmail.com', 2),
(1, 'Daegal Prayoga', 'daegal', 'daegal', 'IMG_7477.JPG', 'daegal@gmail.com', 2),
(4, 'rezafa', 'rezafa', 'rezafa', 'download (11).jpeg', 'rezafa@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`BAHAN_ID`),
  ADD KEY `FK_BAHAN_RELATIONS_RESEP` (`RESEP_ID`),
  ADD KEY `BAHAN_ID` (`BAHAN_ID`),
  ADD KEY `RESEP_ID` (`RESEP_ID`);

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`CHAT_ID`),
  ADD KEY `CHAT_PENGIRIM` (`CHAT_PENGIRIM`),
  ADD KEY `CHAT_PENERIMA` (`CHAT_PENERIMA`),
  ADD KEY `CHAT_ID` (`CHAT_ID`);

--
-- Indeks untuk tabel `kategori_lokasi`
--
ALTER TABLE `kategori_lokasi`
  ADD PRIMARY KEY (`KATEGORI_LOKASI_ID`);

--
-- Indeks untuk tabel `kategori_makanan`
--
ALTER TABLE `kategori_makanan`
  ADD PRIMARY KEY (`KATEGORI_MAKANAN_ID`);

--
-- Indeks untuk tabel `langkah`
--
ALTER TABLE `langkah`
  ADD PRIMARY KEY (`LANGKAH_ID`),
  ADD KEY `FK_LANGKAH_RELATIONS_RESEP` (`RESEP_ID`),
  ADD KEY `LANGKAH_ID` (`LANGKAH_ID`),
  ADD KEY `RESEP_ID` (`RESEP_ID`);

--
-- Indeks untuk tabel `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`LIKE_ID`),
  ADD KEY `FK_LIKE_RELATIONS_USER` (`USER_USERNAME`),
  ADD KEY `FK_LIKE_RELATIONS_RESEP` (`RESEP_ID`),
  ADD KEY `LIKE_ID` (`LIKE_ID`);

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`REPLY_ID`),
  ADD KEY `FK_REPLY_RELATIONS_REVIEW` (`REVIEW_ID`),
  ADD KEY `REPLY_USERNAME` (`REPLY_USERNAME`);

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`RESEP_ID`),
  ADD KEY `FK_RESEP_RELATIONS_USER` (`USER_USERNAME`),
  ADD KEY `FK_RESEP_RELATIONS_KATEGORI` (`KATEGORI_LOKASI_ID`),
  ADD KEY `KATEGORI_MAKANAN_ID` (`KATEGORI_MAKANAN_ID`),
  ADD KEY `RESEP_ID` (`RESEP_ID`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`REVIEW_ID`),
  ADD KEY `FK_REVIEW_RELATIONS_RESEP` (`RESEP_ID`),
  ADD KEY `RESEP_ID` (`RESEP_ID`),
  ADD KEY `REVIEW_USERNAME` (`REVIEW_USERNAME`);

--
-- Indeks untuk tabel `riwayat_chat`
--
ALTER TABLE `riwayat_chat`
  ADD PRIMARY KEY (`RIWAYAT_ID`),
  ADD KEY `RIWAYAT_PENGIRIM` (`RIWAYAT_PENGIRIM`,`RIWAYAT_PENERIMA`),
  ADD KEY `RIWAYAT_PENERIMA` (`RIWAYAT_PENERIMA`);

--
-- Indeks untuk tabel `role_model`
--
ALTER TABLE `role_model`
  ADD PRIMARY KEY (`role_model_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USER_USERNAME`),
  ADD KEY `user_role_model_id` (`user_role_model_id`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahan`
--
ALTER TABLE `bahan`
  MODIFY `BAHAN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `CHAT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `langkah`
--
ALTER TABLE `langkah`
  MODIFY `LANGKAH_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT untuk tabel `likes`
--
ALTER TABLE `likes`
  MODIFY `LIKE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `riwayat_chat`
--
ALTER TABLE `riwayat_chat`
  MODIFY `RIWAYAT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `role_model`
--
ALTER TABLE `role_model`
  MODIFY `role_model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bahan`
--
ALTER TABLE `bahan`
  ADD CONSTRAINT `FK_BAHAN_RELATIONS_RESEP` FOREIGN KEY (`RESEP_ID`) REFERENCES `resep` (`RESEP_ID`);

--
-- Ketidakleluasaan untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`CHAT_PENGIRIM`) REFERENCES `users` (`USER_USERNAME`),
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`CHAT_PENERIMA`) REFERENCES `users` (`USER_USERNAME`);

--
-- Ketidakleluasaan untuk tabel `langkah`
--
ALTER TABLE `langkah`
  ADD CONSTRAINT `FK_LANGKAH_RELATIONS_RESEP` FOREIGN KEY (`RESEP_ID`) REFERENCES `resep` (`RESEP_ID`);

--
-- Ketidakleluasaan untuk tabel `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `FK_LIKE_RELATIONS_RESEP` FOREIGN KEY (`RESEP_ID`) REFERENCES `resep` (`RESEP_ID`),
  ADD CONSTRAINT `FK_LIKE_RELATIONS_USER` FOREIGN KEY (`USER_USERNAME`) REFERENCES `users` (`USER_USERNAME`);

--
-- Ketidakleluasaan untuk tabel `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `FK_REPLY_RELATIONS_REVIEW` FOREIGN KEY (`REVIEW_ID`) REFERENCES `review` (`REVIEW_ID`),
  ADD CONSTRAINT `reply_ibfk_1` FOREIGN KEY (`REPLY_USERNAME`) REFERENCES `users` (`USER_USERNAME`);

--
-- Ketidakleluasaan untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `FK_RESEP_RELATIONS_KATEGORI` FOREIGN KEY (`KATEGORI_LOKASI_ID`) REFERENCES `kategori_lokasi` (`KATEGORI_LOKASI_ID`),
  ADD CONSTRAINT `FK_RESEP_RELATIONS_USER` FOREIGN KEY (`USER_USERNAME`) REFERENCES `users` (`USER_USERNAME`),
  ADD CONSTRAINT `resep_ibfk_1` FOREIGN KEY (`KATEGORI_MAKANAN_ID`) REFERENCES `kategori_makanan` (`KATEGORI_MAKANAN_ID`);

--
-- Ketidakleluasaan untuk tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_REVIEW_RELATIONS_RESEP` FOREIGN KEY (`RESEP_ID`) REFERENCES `resep` (`RESEP_ID`),
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`REVIEW_USERNAME`) REFERENCES `users` (`USER_USERNAME`);

--
-- Ketidakleluasaan untuk tabel `riwayat_chat`
--
ALTER TABLE `riwayat_chat`
  ADD CONSTRAINT `riwayat_chat_ibfk_1` FOREIGN KEY (`RIWAYAT_PENGIRIM`) REFERENCES `users` (`USER_USERNAME`),
  ADD CONSTRAINT `riwayat_chat_ibfk_2` FOREIGN KEY (`RIWAYAT_PENERIMA`) REFERENCES `users` (`USER_USERNAME`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_role_model_id`) REFERENCES `role_model` (`role_model_id`),
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
