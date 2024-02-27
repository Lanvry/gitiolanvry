-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Feb 2024 pada 15.12
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bangkesbangpol`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `judul` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `author` varchar(10) NOT NULL,
  `img` varchar(3000) NOT NULL,
  `content` longtext NOT NULL,
  `id_berita` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`judul`, `tanggal`, `author`, `img`, `content`, `id_berita`) VALUES
('Bakesbangpol Gelar Diskusi dan Sosialiasi Cinta NKRI', '2022-03-23', 'NOC', '80797caaf3eee757610935a6b8bf68d7ade8ae4f.jpg', '<p><em>RadarMadura</em><em>.id</em>&nbsp;&ndash; Badan Kesatuan Bangsa dan Politik (Bakesbangpol) Sumenep terus berupaya memperkuat&nbsp;<a href=\"https://radarmadura.jawapos.com/tag/gerakan-nasional-revolusi-mental\">Gerakan Nasional Revolusi Mental</a>. Buktinya, Rabu (29/10) dilaksanakan rapat koordinasi dengan semua anggota gugus Gerakan Nasional Revolusi Mental se-Kabupaten Sumenep. Narasumber acara tersebut dari kalangan forkopimda.</p>\r\n<div>&nbsp;</div>\r\n<p>Plt Kepala&nbsp;<a href=\"https://radarmadura.jawapos.com/tag/bakesbangpol-\">Bakesbangpol&nbsp;</a>Sumenep Purwo Edi Prawito mengatakan,&nbsp;<em><a href=\"https://radarmadura.jawapos.com/tag/event\">event</a></em>&nbsp;tersebut digelar untuk menindaklanjuti Instruksi Presiden Nomor 12 Tahun 2016. Juga, Peraturan Menteri Koordinator Bidang Pembangunan Manusia dan Kebudayaan Republik Indonesia Nomor 6 Tahun 2021.</p>\r\n<div id=\"ats-insert_ads-0-wrapper\" class=\"insert_ads insert_ads-0 show_advertisement unrendered\">\r\n<div>&nbsp;</div>\r\n</div>\r\n<p>&rdquo;Tujuan acara ini menyelaraskan kembali konsep Gerakan Nasional Revolusi Mental sesuai dengan perkembangan tuntutan perubahan,&rdquo; katanya.</p>\r\n<p>Purwo Edi Prawito menyampaikan, rapat koordinasi tersebut juga untuk memunculkan&nbsp;<a href=\"https://radarmadura.jawapos.com/tag/inovasi\">inovasi</a>&nbsp;dan meningkatkan perekonomian serta layanan terhadap masyarakat. ASN diharapkan menjadi inisiator perubahan dan memperkuat kolaborasi multi&nbsp;<em>stakeholder</em>. &rdquo;Alhamdulillah rapat koordinasi Gerakan Nasional Revolusi Mental yang kami lakukan berjalan lancar,&rdquo; ucapnya.</p>\r\n<p>&nbsp;</p>\r\n<div class=\"photo__img\">&nbsp;</div>', 2779),
('Bakesbangpol Linmas Gelar Sosialisasi Dan Dialog Pembauran Kebangsaan', '2024-02-02', 'user', '9727a6881ac4228c584e292bbb72a5d767a58e7c.jpg', '<p><strong>Media Center</strong>, Jumat ( 21/05 ) Dalam rangka menjaga dan meningkatkan keutuhan Negara Kesatuan Republik Indonesia (NKRI), Badan Kesatuan Bangsa dan Politik Kabupaten Sumenep menggelar sosialisasi dan dialog Pembauran Kebangsaan, di Kecamatan Manding.</p>\r\n<p>Kegiatan tersebut diikuti tokoh masyarakat adat, tokoh agama dan etnis dari unsur suku Jawa, Madura, Tionghoa, Arab, Minang, Bugis dan suku Batak yang ada di wilayah Kecamatan Manding.</p>\r\n<p>Kepala Bakesbangpol Linmas Kabupaten Sumenep, Drs. Akh. Zaini, MM mengatakan, kegiatan ini dimaksudkan untuk menyegarkan kembali pemahaman masyarakat secara luas khususnya masyarakat Sumenep tentang wawasan nusantara, dalam hal ini pembauran kebangsaan di tengah suasana perubahan struktur sosial yang sangat mendasar.</p>\r\n<p>\"Tujuannya adalah untuk membangkitkan kembali semangat kebangsaan di kalangan masyarakat demi mendukung terwujudnya kehidupan yang harmonis, dan saling menghargai dengan menciptakan keutuhan NKRI,\" tandasnya, Kamis (20/05/2021) kemarin.</p>\r\n<p>Zaini menambahkan, pembauran kebangsaan dari aspek sosial, budaya dan agama dimaksudkan untuk menumbuhkan kesadaran bahwa pembinaan moral dan akhlak, serta kerukunan hidup antar ummat beragama merupakan syarat utama, dalam mengatasi permasalahan bangsa yang sedemikian rupa dan kompleks.</p>\r\n<p>\"Setidaknya pembauran kebangsaan ini jika betul-betul dilaksanakan merupakan kunci dalam memperkokoh persatuan dan kesatuan bangsa dalam wadah NKRI, \" pungkasnya.</p>\r\n<p>Hadir pada sosialisasi tersebut sebagai narasumber Kepala Bakesbangpol Linmas Kabupaten Sumenep, Drs. Akh. Zaini, MM, Ketua Forum Pembauran Kebangsaan (FPK), Drs. Idham Khalid, SH, MM, Camat Manding, Kapolsek Manding dan Danramil Manding. ( Miko, Fer )</p>', 7133),
('Bakesbangpol Depok Salurkan Beasiswa Sinergitas Kepada Anak Eks Napiter, Penyintas dan Keluarga Rentan', '2024-02-26', 'user', 'IMG_20240129_135337_514-768x576-1-768x400.jpg', '<p><strong>Bantuan</strong> disalurkan kepada enam anak. Meliputi anak dari eks Narapidana Teroris (Napiter), penyintas dan keluarga rentan.</p>\r\n<p>Kepala Bakesbangpol Depok, Lienda Ratnanurdiany mengatakan, penyaluran tersebut merupakan hasil dari kolaborasi Pemerintah Kota (Pemkot) Depok dengan berbagai pihak. Dimana salah satunya mampu menghasilkan pemberian bantuan beasiswa ini.&nbsp;</p>\r\n<p>&ldquo;Alhamdulillah, Selasa (02/01) sudah disalurkan bantuan tersebut di Kantor Bakesbangpol. Para penerima itu meliputi anak dari Eks Napiter, penyintas dan keluarga rentan sebesar Rp2 juta per anak ,&rdquo; katanya kepada berita.depok.go.id, Rabu (03/01/24)&nbsp;</p>\r\n<p>Dikatakannya, penyaluran tersebut juga menjadi bentuk sinergitas dari pemerintah, Badan Nasional Penanggulangan Terorisme (BNPT) dan dunia usaha. Yakni untuk memberikan motivasi kepada anak usia sekolah dari eks Napiter, penyintas dan keluarga rentan yang ada di wilayah Depok.</p>\r\n<p>&ldquo;Semoga bantuan ini dapat menambah semangat dalam belajar, sehingga dapat meraih cita-citanya, serta menjadi manusia yang berguna bagi nusa dan bangsa,&rdquo; tutupnya.&nbsp;</p>\r\n<p>Sebagai informasi, sebelumnya Bakesbangpol Kota Depok juga menyalurkan Bantuan Program Kearifan Lokal dari Kementerian Sosial (Kemensos) kepada Sanggar Madusari, Kecamatan Beji. (JD03/ED01).</p>', 123102);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `status` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`status`) VALUES
('Admin'),
('User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(255) NOT NULL,
  `url_gambar` varchar(500) NOT NULL,
  `judul` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepuasanmasyarakat`
--

CREATE TABLE `kepuasanmasyarakat` (
  `Nama_Lengkap` varchar(30) DEFAULT NULL,
  `Instansi` varchar(30) DEFAULT NULL,
  `Telp` bigint(20) DEFAULT NULL,
  `Alamat` varchar(500) DEFAULT NULL,
  `Kepada` varchar(30) DEFAULT NULL,
  `Keperluan` varchar(300) DEFAULT NULL,
  `JenisKelamin` varchar(30) DEFAULT NULL,
  `Pendidikan` varchar(10) DEFAULT NULL,
  `Usia` int(3) DEFAULT NULL,
  `id_tamu` int(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kepuasanmasyarakat`
--

INSERT INTO `kepuasanmasyarakat` (`Nama_Lengkap`, `Instansi`, `Telp`, `Alamat`, `Kepada`, `Keperluan`, `JenisKelamin`, `Pendidikan`, `Usia`, `id_tamu`, `status`, `tgl`) VALUES
('Arjuna Lanang Adiwarsana', 'Samsat', 85648077829, '', '', '', '--Pilih--', '', 0, 5128, 'Diterima', '2024-02-26 02:51:51'),
('Arjuna', 'Polri', 85648077829, '', '', '', '--Pilih--', '--Pilih--', 0, 44954, 'Diterima', '2024-02-25 12:55:19'),
('Lani', 'BRI SUMENEP', 81515174419, 'Kalianget timur', '', 'Meeting', 'Perempuan', '', 16, 88324, 'Diterima', '2024-02-26 02:31:18'),
('Syabil', 'Polri', 85648077829, '', '', '', '--Pilih--', '--Pilih--', 0, 99433, 'Diterima', '2024-02-25 12:55:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `Rating` int(1) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`Rating`, `Keterangan`) VALUES
(5, 'Sangat Puas'),
(4, 'Puas'),
(4, 'Puas'),
(3, 'Cukup Puas'),
(2, 'Kurang Puas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `status`) VALUES
('Arjuna Lanang Adiwarsana', 'arjuna', 'wardilanang46@gmail.com', 'Admin'),
('NOC', '12345678', 'info@sumenepkab.go.id', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`status`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `kepuasanmasyarakat`
--
ALTER TABLE `kepuasanmasyarakat`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `status` (`status`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`status`) REFERENCES `bidang` (`status`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
