-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Mar 2023 pada 19.14
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client_perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(99) DEFAULT NULL,
  `username` varchar(99) DEFAULT NULL,
  `password` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Administrator Perpus', 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(99) DEFAULT NULL,
  `kategori` varchar(99) DEFAULT NULL,
  `idadmin` int(11) DEFAULT NULL,
  `pengarang` varchar(99) DEFAULT NULL,
  `terbit` date DEFAULT NULL,
  `cover` varchar(99) DEFAULT NULL,
  `jenis` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `kategori`, `idadmin`, `pengarang`, `terbit`, `cover`, `jenis`) VALUES
(4, 'B. INDONESIA ( Kelas  7 )', 'BUKU AJAR', 1, 'Harsiati, Titik ,Trianto, Agus and E. Kosasih', '2017-12-12', '64a04e5eb06f1a2768073c7b9608978d.jpg', 'Baik'),
(5, 'B. INDONESIA ( Kelas 8 )', 'BUKU AJAR', 1, 'Kosasih', '2017-01-02', '8251004a4e58f306e3de59cb3ed15b0e.jpg', 'Baik'),
(6, 'B. INDONESIA ( Kelas 9 )', 'BUKU AJAR', 1, 'Harsiati, Titik ,Trianto, Agus and E. Kosasih', '2017-06-06', 'c44252b520b352310a826eb84325f81c.jpg', 'Baik'),
(7, 'B. INGGRIS (Kelas 7)', 'BUKU AJAR', 1, 'Siti Wachidah, Asep Gunawan, Diyantari, Yuli Rulani Khatimah', '2017-11-09', '884aebd731dad93f65cc526ece1474f4.jpg', 'Baik'),
(8, 'B. INGGRIS ( Kelas 8 )', 'BUKU AJAR', 1, 'Siti Wachidah dan Asep Gunawan.', '2014-06-04', '58796ee598752bd8277096ded51dbc39.jpg', 'Baik'),
(9, 'B. INGGRIS ( Kelas 9 )', 'BUKU AJAR', 1, 'Helena Indyah Ratna Agustien, Rd. Safrina Noorman, dan Wawan Gunawan.', '2015-11-11', 'bf1211b8f860211e11e36ea01b61cc1d.jpg', 'Baik'),
(10, 'PPKN ( Kelas 7 )', 'BUKU AJAR', 1, 'Lukman Surya Saputra, Aa Nurdiaman, dan Salikun', '2017-05-02', 'f01787662fbbd22b433311b7ecf2a188.jpg', 'Baik'),
(11, 'PPKN ( Kelas 8 )', 'BUKU AJAR', 1, 'Lukman Surya Saputra, Ida Rohayani, dan Salikun', '2017-06-06', '6473a47e2b0eadd3c986c812cc00b11c.jpg', 'Baik'),
(12, 'PPKN ( Kelas 9 )', 'BUKU AJAR', 1, 'Ai Tin Sumartini dan Asep Sutisna Putra.', '2018-11-14', 'f96d04bdfe4b21ced08f03dbfd94b8c9.jpg', 'Baik'),
(13, 'PENDIDIKAN AGAMA ISLAM ( Kelas 7 )', 'BUKU AJAR', 1, 'Muh. Saerozi, Yusuf A. Hasan, Nurhayati Djamas, dan Muhammad Nadjib', '2013-06-04', 'fdd279bee1c1d152ac289599be3f0733.jpg', 'Baik'),
(14, 'PENDIDIKAN AGAMA ISLAM ( Kelas 8 )', 'BUKU AJAR', 1, 'Ahsan, Muhammad and Sumiyati, Sumiyati', '2017-06-06', 'e3f7492c1c6fdcf40838f7ec11ea2f09.jpg', 'Baik'),
(15, 'PENDIDIKAN AGAMA ISLAM ( Kelas 9 )', 'BUKU AJAR', 1, 'Muhammad Ahsan dan Sumiyati', '2015-05-02', 'ac179d723979402c5a2bb236284d6a17.jpg', 'Baik'),
(16, 'PRAKARYA ( Kelas 7 )', 'BUKU AJAR', 1, 'Suci Paresti, Dewi Sri Handayani Nuswantari, Erny Yuliani, dan Indra Samsudin', '2017-06-06', '9fcee03fda9c7a08a2a6c3f2198b0aa2.jpg', 'Baik'),
(17, 'PRAKARYA ( Kelas 8 )', 'BUKU AJAR', 1, 'Suci Paresti, Dewi Sri Handayani Nuswantari, Sukri, Ichda Chaerudin', '2017-05-08', 'ce33f5b8246624b176894de9114f2ba8.jpg', 'Baik'),
(18, 'PRAKARYA ( Kelas 9 )', 'BUKU AJAR', 1, 'Dewi Sri Handayani Nuswantari / Sukri,S.Kom.,S.Pd.,M.Pd. / Yenti Rokhmulyenti / Sri Samini', '2018-05-07', '689249d43840ac729775249194bc6761.jpg', 'Baik'),
(19, 'IPA ( Kelas 7 )', 'BUKU AJAR', 1, 'Widodo, Wahono and Rachmadiarti, Fida and Hidayati, Siti Nurul', '2017-01-02', '9d0f3417bdce2d84e9fa48f679171a06.jpg', 'Baik'),
(21, 'IPA ( Kelas 8 )', 'BUKU AJAR', 1, 'Siti zubaidah, susriyati Mahanal, Lia Yuliati, I wayan Dasna, Ardisan A.', '2017-01-02', '8feadf960d1d410f5ea582135947f148.jpg', 'Baik'),
(22, 'IPA ( Kelas 9 )', 'BUKU AJAR', 1, 'Siti Zubaidah, Susriyati Mahanal, Lia Yuliati, I Wayan Dasna, Ardian A. Pangestuti', '2018-01-09', '658a93856710fa201b2ab91ee1726b85.jpg', 'Baik'),
(23, 'IPS ( Kelas 7 )', 'BUKU AJAR', 1, 'Ahmad Mushlih, Iwan Setiawan, Suciati, dan Dedi.', '2017-01-02', '9be70c389e9de316f51434808880b511.jpg', 'Baik'),
(24, 'IPS ( Kelas 8 )', 'BUKU AJAR', 1, 'Mukminan, Endang Mulyani, M. Nursa’ban, dan Supardi', '2017-05-08', '7b66293c9740a0af80b6bfa665a72e8a.jpg', 'Baik'),
(25, 'IPS ( Kelas 9 )', 'BUKU AJAR', 1, 'Mukminan, Endang Mulyani, M. Nursa’ban, dan Supardi', '2017-06-07', 'e0b0f73ad32a9f175ab43db508211526.jpg', 'Baik'),
(26, 'MATEMATIKA ( Kelas 7 )', 'BUKU AJAR', 1, 'Abdur Rahman As’ari, Mohammad Tohir, Erik Valentino, Zainul Imron, dan Ibnu Taufiq.', '2017-05-08', '2696435fa78fa5a1b0f3595b57105845.jpg', 'Baik'),
(27, 'MATEMATIKA ( Kelas 8 )', 'BUKU AJAR', 1, ' Abdur Rahman As’ari, Mohammad Tohir, Erik Valentino,Zainul Imron, Ibnu Tauﬁq', '2017-06-06', '3019a194c7c01259856d11b19ef1467b.jpg', 'Baik'),
(28, 'MATEMATIKA ( Kelas 9 )', 'BUKU AJAR', 1, 'Abdur Rahman As’ari, Mohammad Tohir, Erik Valentino, Zainul Imron, dan Ibnu Taufiq.', '2017-09-11', '32f4c03b9b8a74063a02dc3220afea91.jpg', 'Baik'),
(29, 'SENIBUDAYA ( Kelas 7 )', 'BUKU AJAR', 1, 'Eko Purnomo, Deden Haerudin, Buyung Rohmanto, Julius Juih.', '2017-06-13', 'bd6ef7009f206da5a27f1eb36609770a.jpg', 'Baik'),
(30, 'SENIBUDAYA ( Kelas 8 )', 'BUKU AJAR', 1, 'Eko P urnomo, Deden Haerudin, Buyung Rohmanto, Julius Juih.', '2017-06-21', '1273057fb13e269dce40a47d019b68fd.jpg', 'Baik'),
(31, 'SENIBUDAYA ( Kelas 9 )', 'BUKU AJAR', 1, 'Milasari / Heru Subagio / Siti Masripah / Jelmanto', '2018-06-05', '4439adbed5fc421ce869ea7d0835cd7c.jpg', 'Baik'),
(32, 'BUDAYA MELAYU RIAU ( Kelas 7 )', 'BUKU AJAR', 1, 'Taufik ikram jamil, Derichard H. Putra, syaiful anuar', '2019-06-04', '77e623125b07f4973f7f09ad90ebbe3a.jpg', 'Baik'),
(33, 'BUDAYA MELAYU RIAU ( Kelas 8 )', 'BUKU AJAR', 1, 'Taufik ikram jamil, Derichard H. Putra, syaiful anuar', '2017-05-08', '65552925fe67063d3f7c3b825a3de491.jpg', 'Baik'),
(34, 'BUDAYA MELAYU RIAU ( Kelas 9 )', 'BUKU AJAR', 1, 'Taufik ikram jamil, Derichard H. Putra, syaiful anuar', '2019-10-03', '78f0a270ea10b420c56a93f274543cda.jpg', 'Baik'),
(35, 'PENDIDIKAN JASMANI, OLAHRAGA DAN KESEHATAN ( Kelas 7 )', 'BUKU AJAR', 1, 'Sugito Adi Warsito, Toto Subroto, dan Suroto.', '2016-10-11', '1ebbc9be391ecdcb949b36c2a434e42e.jpg', 'Baik'),
(36, 'PENDIDIKAN JASMANI, OLAHRAGA DAN KESEHATAN ( Kelas 8 )', 'BUKU AJAR', 1, 'Roji dan Eva Yulianti.', '2017-05-08', 'e07fbb04462fb8253c9abcb3e36b7c80.jpg', 'Baik'),
(37, 'PENDIDIKAN JASMANI, OLAHRAGA DAN KESEHATAN ( Kelas 9 )', 'BUKU AJAR', 1, 'Suroto, Agus Mahendra, Taufiq Hidayah, dan Amat Komari.', '2017-10-17', 'a0c5b249e598248fea8f2b24bf58d62e.jpg', 'Baik'),
(38, 'PENDIDIKAN AGAMA KRISTEN ( Kelas 7 )', 'BUKU AJAR', 1, 'Binsar Jonathan Pakpahan, Justitia Vox Dei Hattu, Marvel Kawatu', '2017-01-02', 'd633ef6208d669030975e9a1adb61d92.jpg', 'Baik'),
(39, 'PENDIDIKAN AGAMA KRISTEN ( Kelas 8 )', 'BUKU AJAR', 1, 'Julia Suleeman Chandra / Pdt. Janse Belandina Non-Serrano', '2017-10-31', '6b4f2cb9963f98b423154e76b06e479a.jpg', 'Baik'),
(40, 'PENDIDIKAN AGAMA KRISTEN ( Kelas 9 )', 'BUKU AJAR', 1, 'Pdt. Binsar J. Pakpahan, Pdt. Dr. Robert Borong, dan Pdt. Hendrik', '2019-10-22', 'd91868118575960dd43e2e304a32d7a3.jpg', 'Baik'),
(41, 'SEJARAH DUNIA YG DISEMBUNYIKAN', 'SEJARAH', 1, 'Jonathan Black', '2015-01-03', '4940b28ded0ce69e98a65e4666290578.jpg', 'Baik'),
(42, 'JEJAK MATARAM DI YOGYAKARTA', 'SEJARAH', 1, 'Wiranata Sujarweni.', '2022-07-31', '0ca9f7fb033be996992e141d25a874a5.jpg', 'Baik'),
(43, 'EKONOMI INDONESIA DALAM LINTASAN SEJARAH', 'SEJARAH', 1, 'Prof.Dr.Boediono', '2016-06-26', 'd6b025f7d51b8c80526ed4b3fbf230bb.jpg', 'Baik'),
(44, 'PASANG SURUT DEMOKRASI', 'SEJARAH', 1, 'M. FAISHAL AMINUDDIN, WAHYU PRASETYAWAN', '2021-05-03', '5fe22e403b32f146c5bea6c5e2be2e3d.jpg', 'Baik'),
(45, 'LASKAR PELANGI', 'NOVEL', 1, 'Andrea Hirata.', '2011-05-10', 'c06f47141eb857170c70d29a80a06f65.jpg', 'Baik'),
(46, 'SANG PEMIMPI', 'NOVEL', 1, 'ANDREA HIRATA', '2020-02-01', 'ac96103c0300128da95912c15ef457df.jpg', 'Baik'),
(47, 'EDENSOR', 'NOVEL', 1, 'Andrea Hirata', '2013-12-08', '14c99a57b032a6911bca4b8e00643b59.jpg', 'Baik'),
(48, 'GURU AINI', 'NOVEL', 1, 'ANDREA HIRATA', '2020-02-01', '5e137da1ceffd5f1c23d9525373d17cc.png', 'Baik'),
(49, 'ORANG-ORANG BIASA', 'NOVEL', 1, 'ANDREA HIRATA', '2019-02-28', '03673eb8f487beda3a1da529a9c87fa8.jpg', 'Baik'),
(50, 'RANAH 3 WARNA', 'NOVEL', 1, 'A. FUADI', '2013-06-13', '3b85d0b4f10c729c60e46666642ceb14.jpg', 'Baik'),
(51, 'Kamus Pertamaku Bahasa Inggris', 'KAMUS', 1, 'Eleonora Barsotti', '2021-06-29', '8da2054c2d63dacf4e4b77c323bafc92.jpg', 'Baik'),
(52, 'Kamus Lengkap Bahasa Inggris', 'KAMUS', 1, 'Tim Pustaka Pintar', '2022-02-22', 'd632c8e94dbf103415333b83ee655731.jpg', 'Baik'),
(53, 'Kamus Lengkap Idiom Bahasa Inggris-Indonesia', 'KAMUS', 1, 'Reza Pahlevi, M.A,', '2017-11-14', '9913009d09c3a0f2e5d2b33e3132081a.jpg', 'Baik'),
(54, 'Kamus Indonesia - Inggris', 'KAMUS', 1, 'John M. Echols & Hasan Shadily', '2014-07-10', 'b6a9b66af0e3aadb8614023231c1f967.jpg', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kat` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kat`) VALUES
(5, 'BUKU AJAR'),
(6, 'NOVEL'),
(7, 'KAMUS'),
(8, 'SEJARAH'),
(9, 'SISTEM INFORMASI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kembali`
--

CREATE TABLE `kembali` (
  `id` int(11) NOT NULL,
  `siswa` varchar(99) DEFAULT NULL,
  `buku` varchar(99) DEFAULT NULL,
  `tglkembali` date DEFAULT NULL,
  `kondisikembali` varchar(99) DEFAULT NULL,
  `denda` varchar(99) DEFAULT NULL,
  `status` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kembali`
--

INSERT INTO `kembali` (`id`, `siswa`, `buku`, `tglkembali`, `kondisikembali`, `denda`, `status`) VALUES
(1, 'DICKY AFAREZA', 'B. INDONESIA ( Kelas  7 )', '2023-01-16', 'Rusak', '20000', 'Kembali'),
(2, 'Muhammad Febriansyah', 'B. INDONESIA ( Kelas  7 )', '2023-02-07', 'Baik', '0', 'Kembali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `siswa` varchar(99) DEFAULT NULL,
  `buku` varchar(99) DEFAULT NULL,
  `tglpinjam` date DEFAULT NULL,
  `tglkembali` date DEFAULT NULL,
  `kondisipinjam` varchar(99) DEFAULT NULL,
  `kondisikembali` varchar(99) DEFAULT NULL,
  `denda` varchar(99) DEFAULT '0',
  `status` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `siswa`, `buku`, `tglpinjam`, `tglkembali`, `kondisipinjam`, `kondisikembali`, `denda`, `status`) VALUES
(4, 'ADE MAYLANI', 'B. INDONESIA', '2022-12-28', '2022-12-28', 'Baik', 'Baik', '0', 'Kembali'),
(5, 'Administrator Perpus', 'B. INDONESIA', '2022-12-28', '2022-12-28', 'Baik', 'Baik', '0', 'Kembali'),
(6, 'ARYA FAHMI FAUZAN PANE', 'B. INDONESIA', '2022-12-28', '2023-01-03', 'Baik', 'Baik', '0', 'Kembali'),
(7, 'ADE MAYLANI', 'GURU AINI', '2023-01-03', '2023-01-03', 'Baik', 'Baik', '0', 'Kembali'),
(8, 'DICKY AFAREZA', 'SEJARAH DUNIA YG DISEMBUNYIKAN', '2023-01-04', '2023-01-04', 'Baik', 'Baik', '0', 'Kembali'),
(9, 'DELIS ANGGRAINI', 'SANG PEMIMPI', '2023-01-04', '2023-01-04', 'Baik', 'Baik', '0', 'Kembali'),
(10, 'MEGA PUSPITA', 'B. INGGRIS ( Kelas 9 )', '2023-01-04', '2023-01-04', 'Baik', 'Baik', '0', 'Kembali'),
(11, 'FINA ANGGREANI', 'PPKN ( Kelas 9 )', '2023-01-04', '2023-01-04', 'Baik', 'Baik', '0', 'Kembali'),
(12, 'MAYA SARI', 'MATEMATIKA ( Kelas 8 )', '2023-01-04', '2023-01-04', 'Baik', '', '50000', 'Kembali'),
(13, 'DICKY AFAREZA', 'PPKN ( Kelas 9 )', '2023-01-07', '2023-01-07', 'Baik', 'Baik', '0', 'Kembali'),
(14, 'DELIS ANGGRAINI', 'PPKN ( Kelas 9 )', '2023-01-07', '2023-01-07', 'Baik', 'Baik', '0', 'Kembali'),
(16, 'DICKY AFAREZA', 'B. INDONESIA ( Kelas  7 )', '2023-01-16', '0000-00-00', 'Baik', '', '', 'Pinjam'),
(17, 'Muhammad Febriansyah', 'B. INDONESIA ( Kelas  7 )', '2023-02-07', '0000-00-00', 'Baik', '', '', 'Pinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `penerima` varchar(99) DEFAULT NULL,
  `pengirim` varchar(99) DEFAULT NULL,
  `judul` varchar(99) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `status` varchar(99) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `web` varchar(99) DEFAULT NULL,
  `keyword` varchar(99) DEFAULT NULL,
  `logo` varchar(99) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `email` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`web`, `keyword`, `logo`, `alamat`, `telp`, `email`) VALUES
('E - Perpus', 'E - Perpus', 'icon.png', 'Jambi\r\nBogor', '081295916567', 'perpus@perpus.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(99) DEFAULT NULL,
  `nama` varchar(99) DEFAULT NULL,
  `username` varchar(99) DEFAULT NULL,
  `password` varchar(99) DEFAULT NULL,
  `kelas` varchar(99) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `username`, `password`, `kelas`, `alamat`, `date`, `status`) VALUES
(4, '748', 'ADE MAYLANI', 'ade', '202cb962ac59075b964b07152d234b70', '7 A', 'Rantau Sakti', '2022-12-28 14:39:41', 'Proses'),
(5, '757', 'AYU NISA PUTRI', 'ayu', '202cb962ac59075b964b07152d234b70', '7 A', 'Rantau Sakti', '2022-12-28 14:54:52', 'Proses'),
(6, '758', 'BUNGA TARISIA', 'bunga', '202cb962ac59075b964b07152d234b70', '7 A', 'Rantau Sakti', '2022-12-28 14:55:21', 'Proses'),
(7, '770', 'DWI PUJI LESTARI', 'dwi', '202cb962ac59075b964b07152d234b70', '7 B', 'Rantau Sakti', '2022-12-28 14:56:13', 'Proses'),
(8, '798', 'LYLA AFFRISA', 'lyla', '202cb962ac59075b964b07152d234b70', '7 B', 'Rantau Sakti', '2022-12-28 14:56:55', 'Proses'),
(9, '817', 'TRI SABBIHISMA', 'tri', '202cb962ac59075b964b07152d234b70', '7 B', 'Rantau Sakti', '2022-12-28 14:57:33', 'Proses'),
(10, '753', 'ALVIN IRFANSYAH', 'alvin', '202cb962ac59075b964b07152d234b70', '7 C', 'Rantau Sakti', '2022-12-28 14:58:13', 'Proses'),
(11, '754', 'AMRA ARDA MAULANA', 'amra', '202cb962ac59075b964b07152d234b70', '7 C', 'Rantau Sakti', '2022-12-28 14:58:47', 'Proses'),
(12, '785', 'IMAN SOVIYAN', 'iman', '202cb962ac59075b964b07152d234b70', '7 C', 'Rantau Sakti', '2022-12-28 14:59:24', 'Proses'),
(13, '659', 'ADI SANJAYA', 'adi', '202cb962ac59075b964b07152d234b70', '8 A', 'Rantau Sakti', '2022-12-28 14:59:58', 'Proses'),
(14, '677', 'DHEA KHAIRUNNISA', 'dhea', '202cb962ac59075b964b07152d234b70', '8 A', 'Rantau Sakti', '2022-12-28 15:00:41', 'Proses'),
(15, '692', 'JAKA DWI ANDIKA', 'jaka', '202cb962ac59075b964b07152d234b70', '8 A', 'Rantau Sakti', '2022-12-28 15:01:18', 'Proses'),
(16, '658', 'AHMAD FAJRI', 'ahmad', '202cb962ac59075b964b07152d234b70', '8 B', 'Rantau Sakti', '2022-12-28 15:01:47', 'Proses'),
(17, '678', 'DINDA EKA TRISTANTI', 'dinda', '202cb962ac59075b964b07152d234b70', '8 B', 'Rantau Sakti', '2022-12-28 15:02:23', 'Proses'),
(18, '743', 'FERDI WAHYU ANGGARA', 'ferdi', '202cb962ac59075b964b07152d234b70', '8 B', 'Rantau Sakti', '2022-12-28 15:02:52', 'Proses'),
(19, '664', 'ARDI YUNANDA', 'ardi', '202cb962ac59075b964b07152d234b70', '8 C', 'Rantau Sakti', '2022-12-28 15:03:24', 'Proses'),
(20, '671', 'BAGAS DWI SATRIA', 'bagas', '202cb962ac59075b964b07152d234b70', '8 C', 'Rantau Sakti', '2022-12-28 15:04:01', 'Proses'),
(21, '700', 'MAYA SARI', 'maya', '202cb962ac59075b964b07152d234b70', '8 C', 'Rantau Sakti', '2022-12-28 15:05:01', 'Proses'),
(22, '588', 'AYUB PERDINAD', 'ayub', '202cb962ac59075b964b07152d234b70', '9 A', 'Rantau Sakti', '2022-12-28 15:05:42', 'Proses'),
(23, '595', 'DIMAS FANDI PRAYOGA', 'dimas', '202cb962ac59075b964b07152d234b70', '9 A', 'Rantau Sakti', '2022-12-28 15:06:11', 'Proses'),
(24, '634', 'RIZKI YUGA SATRIA', 'rizki', '202cb962ac59075b964b07152d234b70', '9 A', 'Rantau Sakti', '2022-12-28 15:07:37', 'Proses'),
(25, '586', 'ARIL SAPUTRA', 'aril', '202cb962ac59075b964b07152d234b70', '9 B', 'Rantau Sakti', '2022-12-28 15:08:07', 'Proses'),
(26, '651', 'FINA ANGGREANI', 'fina', '202cb962ac59075b964b07152d234b70', '9 B', 'Rantau Sakti', '2022-12-28 15:08:36', 'Proses'),
(27, '614', 'MEGA PUSPITA', 'mega', '202cb962ac59075b964b07152d234b70', '9 B', 'Rantau Sakti', '2022-12-28 15:09:10', 'Proses'),
(28, '587', 'ARYA FAHMI FAUZAN PANE', 'arya', '202cb962ac59075b964b07152d234b70', '9 C', 'Rantau Sakti', '2022-12-28 15:09:53', 'Proses'),
(29, '593', 'DELIS ANGGRAINI', 'delis', '202cb962ac59075b964b07152d234b70', '9 C', 'Rantau Sakti', '2022-12-28 15:10:32', 'Proses'),
(30, '594', 'DICKY AFAREZA', 'dicky', '202cb962ac59075b964b07152d234b70', '9 C', 'Rantau Sakti', '2022-12-28 15:11:04', 'Diterima'),
(31, '123451', 'Muhammad Febriansyah', 'febrian', '202cb962ac59075b964b07152d234b70', '2B', 'Jambi', '2023-02-07 23:06:15', 'Diterima');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kembali`
--
ALTER TABLE `kembali`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kembali`
--
ALTER TABLE `kembali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
