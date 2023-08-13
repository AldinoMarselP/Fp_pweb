-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Agu 2023 pada 13.16
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `gambar`, `judul`, `konten`) VALUES
(1, 'foto_blog3.jpg', 'PO Mahendra Transport Indonesia, Bus Pendatang Baru Paling Banyak Diburu Mania', 'Satu lagi perusahaan otobus (PO) lahir di Indonesia. Adalah PO Bus Mahendra Transportasi Indonesia bus antar kota antar provinsi (AKAP) yang mengisi line trayek Jakarta – Pekalongan dan sebaliknya. Bus PO Mahendra Trans ini lahir berkat tangan dingin Rian Mahendra.\r\n\r\nSosok Rian Mahendra sendiri buka orang asing di dunia Bis AKAP khususnya di pulau Jawa. Pria ini adalah mantan direktur operasional sekaligus anak pengusaha bus PO Haryanto. Bus PO Mahendra Transport paling diburu oleh mania bus dan juga conten creator didunia bus. Terbukti banyak konten-konten terkait bus Mahendra trans di platform YouTube.\r\n\r\nPo Mahendra Trans resmi diumumkan di Cawang, Jakarta Timur pada Kamis 8 Juni 2023. Lewat unggahan akun Instagram @rianmahendra83, dijelaskan PO MTI akan mengoperasikan empat armada yang terdiri dari MTI 001 hingga MTI 004. Keempat armada tersebut dibagi menjadi Jalur 1 (MTI 001 dan MTI 002) dan Jalur 2 (MTI 003 dan MTI 004).\r\n\r\nAdapun untuk jalur 2 memiliki rute yang sama dengan jalur 1 dengan lintasan Cikokol-Poris-Kebun Besar-Kalideres-Ring Road-Jembatan Gantung-Pesakih-Grogol. \"Untuk tahap awal tiket hanya bisa dibeli secara offline melalui jaringan agen PO MTI,\" jelasnya. Untuk harga tiketnya, Rian Mahendra membanderol di angka Rp 150 ribu per kursi. \"Untuk fasilitas, kelas patas AC kapasitas 38 - 40 penumpang dan dilengkapi toilet,\" pungkasnya.'),
(5, 'foto_blog2.png', 'Sleeper Bus New Armada Resmi Dirilis, Namanya Skylander R22 0 Gravity Series', 'Karoseri asal Magelang, Jawa Tengah, New Armada, resmi merilis bodi bus terbaru mereka yang mengadopsi desain sleeper bus. Sleeper bus terbaru New Armada ini diberi nama Skylander R22 Aero 9 SLR 0-Gravity Series. Akan digunakan oleh PO manakah bus yang mirip hotel berjalan ini?\r\n\r\nNew Armada melanjutkan kesuksesan Skylander R22 dengan menghadirkan varian sleeper-nya Skylander R22 Aero 9 SLR 0-Gravity Series. Versi sleeper Skylander R22 ini membawa sejumlah teknologi modern dan canggih seperti yang ada di model Skylander R22.\r\n\r\nDari sisi eksterior misalnya, Skylander R22 Aero 9 SLR 0-Gravity Series juga dibekali dengan layar belakang atau videotron, serta kaca spion berteknologi kamera, sehingga membuat tampilan luarnya menjadi lebih bersih. Yang membedakan di bagian selendangnya, di mana selendang sleeper bus ini memanjang di bodi samping kanan-kiri.\r\n\r\nMenilik ke bagian interior, sudah disediakan berbagai macam fasilitas pendukung kenyamanan selama perjalanan, seperti layar televisi untuk menjalankan fitur entertainment, kemudian ada kompartemen penyimpanan, cup holder, lubang pengisian daya gadget, termasuk dispenser air untuk membuat kopi, teh, atau mi instant.\r\n\r\nBeralih ke aspek kabin. Kabin sleeper yang ditawarkan bus ini tampak lebih personal dengan tirai. Selain itu, desain kabinnya juga terlihat lebih modern dengan nomor kursi yang menyala. Menilik ke bagian joknya, rupanya menggunakan model terpisah dan tampak sangat nyaman dengan material jok berbahan kulit.\r\n\r\nSiapakah pelanggan pertama sleeper bus New Armada ini? Ternyata adalah Perusahaan Otobus asal Makassar, Bintang Zahira Trans, yang menjadi pelanggan pertamanya. Bintang Zahira Trans sendiri memiliki rute ke Palopo, Masamba, Bone-bone, Malili, Wasuponda, Wawondula, dan Sorowako.'),
(6, 'foto_blog4.jpeg', 'Berikut 6 Negara yang Menjual Busnya ke Indonesia', 'JAKARTA – Ada 6 negara yang menjual busnya ke Indonesia untuk menjadi transportasi di tanah air. Pabrikan kendaraan ini merupakan penyedia bus dengan sasis dan mesin yang kokoh untuk diolah kembali oleh PO bus ke perusahaan karoseri.\r\n\r\nSelama ini, Indonesia mendapatkan merek bus terbaik dari beberapa negara. Lalu, negara mana saja yang menjual busnya ke Indonesia? Berikut ada 6 negara yang menjual busnya ke Indonesia.\r\nJepang\r\n\r\nJepang adalah salah satu negara yang cukup banyak berkontribusi menghadirkan bus Indonesia. Pabrikan kendaraan yang paling terkenal dalam menyuplai bus di Indonesia adalah Hino.\r\n\r\nMeski tidak sebanyak Jepang, China juga menjadi pemasok bus di Indonesia. Negeri Tirai Bambu ini menawarkan produk bus pada tahun 2004 melalui PT Indo Dongfeng Motor. Mereka menghadirkan sasis yang cukup terkenal dan pernah digunakan oleh PO Sumber Kencono.\r\n\r\nKorea Selatan juga masuk ke dalam daftar negara yang memiliki perusahaan otomotif yang cukup maju. Negara ini juga menawarkan berbagai kendaraan untuk ditawarkan di berbagai negara, termasuk Indonesia.'),
(7, 'foto_blog5.jpg', 'Salah Satu Terbesar di Indonesia, PO Sinar Jaya Punya Lebih dari 1000 Bus', 'JAKARTA – Perusahaan otobus (PO) Sinar Jaya merupakan salah satu moda transportasi terbesar di Indonesia.\r\n\r\nPO ini memiliki beberapa keunggulan, seperti titik keberangkatan dan jangkauan yang lebih dekat, harga tiket bus relatif lebih murah, serta ketersediaan armada yang cukup banyak.\r\n\r\nPO Sinar Jaya diketahui memiliki lebih dari 1000 unit bus untuk trayek Antar Kota Antar Provinsi (AKAP). Belum lagi ditambah dengan jumlah armada lainnya yang dimiliki perseroan untuk perjalanan wisata, yakni ada ada Starbus, Trans Jabodetabek, JA Connection Jabodetabek Airport, dan JR Connection Jabodetabek Airport.\r\n\r\nSelain itu, PO Sinar Jaya juga terus berkembang untuk memenuhi kebutuhan masyarakat yang beragam dari AKAP, AKDP, Bus Wisata, Bus Antar Jemput Karyawan dan Bus Kota. Serta punya layanan seperti luxury bus, sleeper bus, captain seat dan single seater.\r\n\r\nAdapun PO Sinar Jaya memiliki berbagai macam prestasi dalam perjalanan bisnisnya. Penghargaan tersebut dimulai dari PO Favorit Kapolda Jakarta pada tahun 2012, PO Terbaik Kabupaten Jawa Barat pada tahun 2004, serta beberapa kali memperoleh penghargaan dari kementerian perhubungan sebagai PO Pelayanan Mudik Terbaik pada tahun 2005, tahun 2007, dan tahun 2017.'),
(9, 'bus_sinar_jaya_suites_class.jpg', 'Inilah 5 Karoseri dan PO Pelopor Sleeper Bus di Indonesia', 'JAKARTA - Ada banyak sekali karoseri dan perusahaan otobus (PO) yang beroperasi di Indonesia. Beberapa diantaranya bahkan ada yang menjadi pelopor sleeper bus yang menawarkan fasilitas nyaman bak hotel berbintang. Baca Juga Damri Bakal Sulap Bus BBM jadi Bus Listrik Untuk diketahui, sleper bus sendiri memungkinkan penumpang untuk tidur di dalam bus dengan posisi rebahan. Tidak berhenti di situ, sleeper bus juga membuat penumpang serasa menjadi sultan dengan fitur yang disajikan. Nah berikut ini adalah 6 karoseri dan PO pelopor bus sleeper di Indonesia beserta harga tiketnya, sebagaimana dihimpun dari berbagai sumber, Senin (17/7/2023). \r\n\r\n1. Laksana \r\n\r\nDi urutan pertama ada karoseri Laksana. Karoseri asal Semarang, Jawab Tengah ini menjadi salah satu pelopor bus sleeper di Indonesia dengan salah satu produk kebanggaannya adalah Legacy SR 3 - Suites Class. Bus mewah satu ini merupakan bus sleeper 22 seat dengan konfigurasi kursi 2-1. Sebagai bus mewah, Legacy SR 3 - Suites Class turut menghadirkan sederer fitur unggulan mulai dari monitor 12 inci di setiap kursi, toilet, hingga air panas. \r\n\r\n\r\n2. Adiputro \r\n\r\nAdiputro menjadi salah satu karoseri yang terus menghasilkan inovasi. Salah satu produknya adalah bus sleeper yang dilengkapi dengan fasilitas mewah, bisa dikatakan fasilitas yang diberikan merupakan kelas sultan. Adapun sasisnya menggunakan Mercedes Benz OH 1626 Sleeper dengan 22 sleeper seat yang disusun bertingkat dengan sekat yang memisahkan setiap penumpangnya. Setiap seat dilengkapi fitur pijat di bagian sandaran. \r\n\r\n\r\n3. Tentrem \r\n\r\nKaroseri lain yang merupakan pelopor bus sleeper adalah karoseri asal Malang, Jawa Timur, Tentrem. Salah satu produk sleeper bus karoseri ini yang terkenal adalah bus Avante D2 dengan sasis Scania K40 IB. Bus ini menawarkan fasilitas kursi yang bisa direbahkan secara otomatis. Tidak hanya itu, penumpang juga diberi fasilitas berupa layar audio visual pribadi atau audio video on demand (AVOD), selimut, bantal, lampu baca, AC, serta toilet. \r\n\r\n\r\n4. Morodadi Prima \r\n\r\nKaroseri Morodari Prima tentunya sudah tidak asing lagi di telinga terutama bagi mereka yang berkecimpung di dunia perbusan. Ya, karoseri yang satu ini sangat terkenal sebagai karoseri tertua di Malang, Jawa Tengah. Morodadi Prima saat ini sedang membangun bus sleeper untuk PO Juragan 99 milik Ghilang Widhia Permana. Hal ini bisa dilihat dari unggahat Gilang beberapa waktu lalu di media sosialnya. Sayang belum banyak informasi yang didapat terkait bus sleeper tersebut. \r\n\r\n\r\n5. Pandawa 87 \r\n\r\nBagi yang belum tahu, Pandawa 87 adalah PO bus yang didirikan di Kota Pasuruan pada 17 April 2014 oleh H Gunawan Agung Aprilianto, putra asal Bugul Kidul, Pasuruan. PO bus satu ini memiliki layanan bus sleeper buatan Adiputro, Dream Coach. Bus Dream Coach sendiri memiliki tipe bodi Jetbus3+ Middle High Deck (MHD). Ini merupakan bus sleeper dengan 22 kabin ditambah satu toilet yang mana toiletnya sudah dilengkapi dengan septictank. Fasilitas yang ditawarkan sangat lengkap, mulai dsri TV, USB, lampu baca, ac, air purifier, hingga kursi pijit. Jika menggunakan bus satu ini para penumpang djamin akan betah selama perjalanan.'),
(10, 'BUS3.jpg', 'Deretan Perusahaan Bus Terbesar di Indonesia, Ada yang Jumlah Karyawan Capai 2000 Orang', 'Indonesia memiliki banyak perusahaan otobus (PO) yang beroperasi di berbagai wilayah. Salah satunya adalah PO Budiman yang terkenal. Namun, tidak semua PO bus tersebut mencapai kesuksesan dan meraih keuntungan yang besar hingga miliaran rupiah. Hanya beberapa PO Bus yang memiliki armada bus yang sangat banyak dan dikenal dengan pengelolaan yang cukup baik. \r\n\r\nBerdasarkan laporan dari kanal YouTube Taufik RS berikut ini adalah delapan perusahaan bus terbesar di Indonesia:\r\n\r\n\r\nPO Haryanto\r\n\r\nPO Haryanto merupakan perusahaan bus ternama di Indonesia yang berasal dari Kudus, Jawa Tengah. Bisnis transportasi bidang darat ini dimulai oleh Haji Haryanto pada tahun 2002. PO Haryanto memiliki sekitar 2000 karyawan dan pemiliknya dikenal sebagai dermawan karena sering membantu anak yatim dan memberangkatkan karyawan untuk umroh.\r\n\r\n\r\nPO Primajasa\r\n\r\nPO Primajasa sangat mudah ditemui bagi mereka yang berada di sekitar Jakarta, Jawa Barat, dan Banten. Primajasa memulai petualangannya sebagai perusahaan bus sejak tahun 1991. Awalnya, mereka beroperasi sebagai bus pariwisata dengan hanya dua puluh lima unit armada. Namun, sekarang mereka telah memiliki sekitar 1.000 armada dan melayani perjalanan antar kota.\r\n\r\n\r\nPO Budiman\r\n\r\nPO Budiman menjadi kebanggaan masyarakat di Tasikmalaya. Perusahaan bus ini didirikan oleh Saleh Budiman yang awalnya memiliki usaha truk. Pada tahun 1992, PO Budiman memulai usaha bus dengan hanya memiliki empat armada yang melayani perjalanan lokal di sekitar Priangan Timur. Saat ini, mereka telah memiliki lebih dari 900 unit armada dan melayani berbagai tujuan antar kota dalam dan luar provinsi.\r\n\r\n\r\nPO Lorena\r\n\r\nPO Lorena memulai bisnis di transportasi darat sejak tahun 1970. GT Soerbakti, seorang purnawirawan TNI, adalah sosok di balik berdirinya PO Lorena. Awalnya, mereka hanya melayani perjalanan dekat dari Bogor ke Jakarta. Namun, seiring dengan kemajuan, mereka juga melayani perjalanan antar kota dan antar provinsi.\r\n\r\n\r\nPO Gunung Harta\r\n\r\nPO Gunung Harta adalah perusahaan bus terkenal di Bali. Pendirinya, I Wayan Sudika, memulai perusahaan ini sejak tahun 1993. Awalnya, mereka hanya melayani perjalanan antar kota di Bali, tetapi kemudian mereka melebarkan bisnisnya dengan melayani perjalanan antar kota dan antar provinsi. Sekarang, PO Gunung Harta juga memiliki basis pelayanan di Malang, Jawa Timur.\r\n\r\n\r\nPO Harapan Jaya\r\n\r\nPO Harapan Jaya berdiri pada tahun 1970-an di Tulungagung dengan hanya tiga bus. Pada tahun 1993, mereka mulai melayani perjalanan antarkota dan antarprovinsi yang lebih luas.\r\n\r\n\r\nPO Rosalia Indah\r\n\r\nPO Rosalia Indah telah beroperasi sejak tahun 1983 dan memiliki kantor pusat di Karanganyar, Jawa Tengah. Mereka dikenal dengan pelayanan yang baik dan selalu menjaga kondisi armada mereka dengan baik.\r\n\r\n\r\nPO Sinar Jaya\r\n\r\nPO Sinar Jaya berkantor pusat di Bekasi dan didirikan pada tahun 1982 oleh Herman Rusly dan H. Rasidin Karyana. Mereka memiliki lebih dari 1000 armada bus yang beroperasi di berbagai daerah. PO Sinar Jaya juga telah menerima penghargaan dari Museum Rekor Indonesia (MURI) enam kali berturut-turut karena pelayanan terbaik kepada penumpang.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bus`
--

CREATE TABLE `bus` (
  `ID_Bus` int(11) NOT NULL,
  `Nomor_Bus` varchar(10) DEFAULT NULL,
  `Nama_Bus` varchar(50) DEFAULT NULL,
  `Kapasitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `experience`
--

CREATE TABLE `experience` (
  `id` int(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `experience`
--

INSERT INTO `experience` (`id`, `foto`) VALUES
(11, 'IMG-20230713-WA0050.jpg'),
(12, 'IMG-20230713-WA0048.jpg'),
(13, 'IMG-20230713-WA0049.jpg'),
(14, 'IMG-20230713-WA0050.jpg'),
(15, 'IMG-20230713-WA0051.jpg'),
(16, 'IMG-20230713-WA0052.jpg'),
(17, 'IMG-20230713-WA0051.jpg'),
(18, 'IMG-20230713-WA0052.jpg'),
(19, 'IMG-20230713-WA0049.jpg'),
(20, 'IMG-20230713-WA0048.jpg'),
(21, 'IMG-20230713-WA0050.jpg'),
(24, 'IMG-20230713-WA0052.jpg'),
(25, 'IMG-20230713-WA0049.jpg'),
(26, 'IMG-20230713-WA0049.jpg'),
(27, 'IMG-20230713-WA0048.jpg'),
(28, 'wisata.jpg'),
(29, 'Screenshot 2023-06-15 091245.png'),
(30, 'Screenshot 2023-06-15 091245.png'),
(31, '61c813b14760e.png'),
(32, 'Candi Borobudur 1.jpg'),
(33, 'wisata.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`id_faq`, `judul`, `jawaban`) VALUES
(13, 'Mengapa Saya Tidak Dapat Mengklik', 'Mungkin link yang anda tuju tidak aktif atau memang belum dibuat'),
(14, 'Bagaimana kebijakan pengembalian?', 'Untuk saat ini belum ada fitur pengembalian'),
(15, 'Bisakah saya menerima pengembalian uang?', 'Untuk saat ini belum ada fitur pengembalian'),
(16, 'Bagaimana cara mengubah pesanan yang sudah saya lakukan?', 'Untuk saat ini belum ada fitur perubahan pesanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_mitra`
--

CREATE TABLE `laporan_mitra` (
  `id_laporan` int(11) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `pelapor` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan_mitra`
--

INSERT INTO `laporan_mitra` (`id_laporan`, `perusahaan`, `pelapor`, `email`, `laporan`) VALUES
(1, 'PT. Sinar Jaya Group', 'Hafidz Afnan', 'adw@gmail.com', 'Fitur pembuatan iklan tidak ditemukan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `logomitra` text NOT NULL,
  `namaper` varchar(30) NOT NULL,
  `namapem` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id`, `logomitra`, `namaper`, `namapem`, `alamat`, `email`) VALUES
(2, 'logo-po-haryanto.png', 'PT. Haryanto Motor Indonesia', 'H. Haryanto', 'Jl. Lingkar Luar Ngembal Kulon, Kudus, Jawa Tengah', 'haryanto@gmail.com'),
(3, 'sinarjaya.jpg', 'PT. Sinar Jaya Group', 'Herman Rusly', 'Jl Cikedokan, Cibitung, Bekasi, Jawa Barat', 'humas@sinarjayagroup.co.id'),
(4, 'majulancar.jpeg', 'PT. Maju Lancar', 'H Sutrisno', 'Jl. Wonosari, Km. 37, Siyono, Playen, Gunung Kidul', 'majulancar01@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `panduanwisata`
--

CREATE TABLE `panduanwisata` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `panduanwisata`
--

INSERT INTO `panduanwisata` (`id`, `foto`) VALUES
(2, 'wisata.jpg'),
(3, 'wisata2.jpg'),
(4, 'wisata3.jpg'),
(5, 'Screenshot (215).png'),
(6, 'Screenshot (215).png'),
(7, 'Screenshot 2023-06-15 091245.png'),
(8, 'TEJUDUL.jpg'),
(9, 'TEJUDUL.jpg'),
(10, 'BUS3.jpg'),
(11, 'IMG-20230713-WA0049.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama_pnp` varchar(255) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `diskon` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan_mitra`
--

CREATE TABLE `pengaduan_mitra` (
  `id_pengaduan_mitra` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengaduan_mitra`
--

INSERT INTO `pengaduan_mitra` (`id_pengaduan_mitra`, `nama`, `email`, `laporan`) VALUES
(2, 'hafid', 'admin@gmail.com', 'qqqqqqqqqqq'),
(4, 'Adino Marsel Pratama', 'aldinomarcel7@gmail.com', 'Supire ugal ugalan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan_user`
--

CREATE TABLE `pengaduan_user` (
  `id_pengaduan_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengaduan_user`
--

INSERT INTO `pengaduan_user` (`id_pengaduan_user`, `nama`, `email`, `laporan`) VALUES
(2, 'Mahendra Bayu', 'adw@gmail.com', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'Hafid Afnan', 'adwa@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id` int(15) NOT NULL,
  `armada` text NOT NULL,
  `plat` varchar(15) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `berangkat` time NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `tiba` time NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `tarif` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id`, `armada`, `plat`, `asal`, `berangkat`, `tujuan`, `tiba`, `kelas`, `tarif`) VALUES
(17, 'bus-sinar-jaya_ratio-16x9.jpg', 'B 6474 HH', 'Jakarta', '06:35:00', 'Surabaya', '15:30:00', 'VIP', 500000),
(19, 'Sinar_Jaya.jpg', 'B 2345 WQ', 'Yogyakarta', '17:10:00', 'Jakarta', '05:10:00', 'VIP', 500000),
(20, 'BUSSJ.jpg', 'AB 3321 QF', 'Yogyakarta', '07:10:00', 'Jakarta', '18:10:00', 'VIP', 300000),
(22, 'Bus Sinar Jaya 5RD.jpg', 'H 2345 WQ', 'Jakarta', '20:10:00', 'Yogyakarta', '17:15:00', 'Ekse', 270000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `namapem` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `namabus` varchar(15) NOT NULL,
  `rute` text NOT NULL,
  `harga` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `namapem`, `tanggal`, `namabus`, `rute`, `harga`, `status`) VALUES
(7, 'hafid', '2023-06-22', 'eka', 'Yogyakarta, Giwangan - Klaten, Cawas', '70.000', 'Lunas'),
(9, 'hafid', '2023-06-22', 'sinar', 'Yogyakarta, Giwangan - Solo, Gilingan', '70.000', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `voucher`
--

CREATE TABLE `voucher` (
  `id_voucher` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `voucher`
--

INSERT INTO `voucher` (`id_voucher`, `diskon`, `tanggal_mulai`, `tanggal_selesai`) VALUES
(10001, 25, '2023-07-13', '2023-08-24'),
(10002, 35, '2023-07-13', '2023-07-27'),
(23144, 25, '2023-07-21', '2023-07-22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`ID_Bus`);

--
-- Indeks untuk tabel `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indeks untuk tabel `laporan_mitra`
--
ALTER TABLE `laporan_mitra`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `panduanwisata`
--
ALTER TABLE `panduanwisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaduan_mitra`
--
ALTER TABLE `pengaduan_mitra`
  ADD PRIMARY KEY (`id_pengaduan_mitra`);

--
-- Indeks untuk tabel `pengaduan_user`
--
ALTER TABLE `pengaduan_user`
  ADD PRIMARY KEY (`id_pengaduan_user`);

--
-- Indeks untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id_voucher`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `laporan_mitra`
--
ALTER TABLE `laporan_mitra`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `panduanwisata`
--
ALTER TABLE `panduanwisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `pengaduan_mitra`
--
ALTER TABLE `pengaduan_mitra`
  MODIFY `id_pengaduan_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengaduan_user`
--
ALTER TABLE `pengaduan_user`
  MODIFY `id_pengaduan_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
