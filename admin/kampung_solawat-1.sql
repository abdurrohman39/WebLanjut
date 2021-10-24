-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Jan 2019 pada 20.20
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampung_solawat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` varchar(50) NOT NULL,
  `nama_berita` text NOT NULL,
  `tanggal_upload` date NOT NULL,
  `isi_berita` text NOT NULL,
  `nama_penulis` varchar(12) NOT NULL,
  `kategori` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `nama_berita`, `tanggal_upload`, `isi_berita`, `nama_penulis`, `kategori`) VALUES
('IDB102', 'PMII Singkawang Dukung Program Pemerintah yang Berpihak pada Rakyat', '2019-01-07', 'Singkawang, NU Online\r\nPergerakan Mahasiswa Islam Indonesia (PMII) Cabang Singkawang, Kalimantan Barat telah melakukan audiensi dengan Wali Kota Singkawang di rumah dinasnya di jalan Kridasana beberapa waktu lalu. Dari pertemuan tersebut, dibahas berbagai persoalan masyarakat.', 'syarif rynal', 'Terbaru'),
('IDB103', 'IPNU-IPPNU Tulungagung Kawal Lahirnya Usahawan Muda', '2019-01-07', 'Tulungagung, NU Online\r\nPimpinan Anak Cabang atau PAC Mandiri merupakan salah satu program Pimpinan Cabang Ikatan Pelajar Nahdlatul Ulama (IPNU) dan Ikatan Pelajar Putri Nahdlatul Ulama (IPPNU) Tulungagung, Jawa Timur. ', 'syarif rynal', 'Terlama'),
('IDB104', 'China Sahkan UU Baru untuk â€˜Sesuaikan Islam dengan Budaya dan Politik Setempatâ€™', '2019-01-07', 'Beijing, NU Online\r\nPemerintah China telah mengesahkan sebuah Undang-Undang baru yang berupaya untuk menyesuaikan Islam dengan budaya dan sistem politik China. Rencananya, peraturan ini akan berlaku selama lima tahun ke depan. Ini menjadi kebijakan terbaru Beijing untuk melakukan pengawasan terhadap praktik agama.', 'syarif rynal', 'Terpopuler'),
('IDB105', 'Ini Kemudahan Studi di Turki Menurut Ketua PCINU Turki', '2019-01-07', 'Jakarta, NU Online\r\nStudi lanjut ke jenjang yang lebih tinggi menjadi suatu keniscayaan. Di tengah menguatnya arus globalisasi, persaingan bukan lagi sebatas dengan warga lokal atau nasional, melainkan sudah berkompetisi dengan multinasional. Sehingga melanjutkan studi di negara lain bisa menjadi solusi untuk bisa unggul dalam persaingan.', 'syarif rynal', 'Terbaru'),
('IDB106', 'Nahdliyin Diharapkan Bijak Menggunakan Gawai', '2019-01-07', 'Jombang,  NU Online\r\nWarga Nahdlatul Ulama atau nahdliyin diharapkan memiliki pengetahuan dan pemahaman yang menyeluruh terkait penggunaan gawai. Karena bila tidak, akan justru terjerumus kepada hal mudharat atau berbahaya.\r\n\r\nHal tersebut disampaikan KH Abdul Hayyi Asmad pada kajian kitab Irsyadul Ibad di Masjid Saâ€™aadatud Daroini yang berada di Dusun Rejosari, Gedangan, Mojowarno, Jombang, Jawa Timur, Ahad (6/1).\r\n\r\n', 'syarif rynal', 'Terlama'),
('IDB107', 'KJRI Jeddah Kawal Pemulangan Jenazah Paman Presiden RI', '2019-01-07', 'Jeddah, NU Online\r\nKonsulat Jenderal Republik Indonesia (KJRI) Jeddah mengurus pemulangan jenazah Mulyono Herlambang. Almarhum meninggal di Jeddah, Arab Saudi, menjelang kepulangan ke tanah air, Rabu (2/1) usai menunaikan ibadah umrah.', 'syarif rynal', 'Terpopuler');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_download`
--

CREATE TABLE `tb_download` (
  `id_download` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `ket_berkas` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_download`
--

INSERT INTO `tb_download` (`id_download`, `foto`, `ket_berkas`) VALUES
('IDD101', 'Rute dan Alur Kirab Resolusi Jihad.pdf', 'Rute dan Alur Kirab Resolusi Jihad'),
('IDD102', '9 Pedoman Berpolitik Warga NU.pdf', '9 Pedoman Berpolitik Warga NU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` varchar(50) NOT NULL,
  `nama_jadwal` varchar(12) NOT NULL,
  `tgl_jadwal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `nama_jadwal`, `tgl_jadwal`) VALUES
('IDB101', 'Maghrib', '2019-01-06'),
('IDB102', 'isya', '2019-01-07'),
('IDB103', 'subuh', '2019-01-07'),
('IDB104', 'dzuhur', '2019-01-07'),
('IDB105', 'asyar', '2019-01-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `level` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`, `level`) VALUES
('ILG101', 'aldi', 'MTIz', 'Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_video`
--

CREATE TABLE `tb_video` (
  `id_video` varchar(50) NOT NULL,
  `nama_video` varchar(12) NOT NULL,
  `isi_video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_video`
--

INSERT INTO `tb_video` (`id_video`, `nama_video`, `isi_video`) VALUES
('IDV101', 'Didampingi K', '<iframe width="560" height="315" src="https://www.youtube.com/embed/bmaZOyP8toQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_zawiyah`
--

CREATE TABLE `tb_zawiyah` (
  `id_zawiyah` varchar(50) NOT NULL,
  `nama_zawiyah` varchar(50) NOT NULL,
  `alamat_zawiyah` text NOT NULL,
  `kontak_zawiyah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_zawiyah`
--

INSERT INTO `tb_zawiyah` (`id_zawiyah`, `nama_zawiyah`, `alamat_zawiyah`, `kontak_zawiyah`) VALUES
('IDZ', 'Zawiyah Naqsyabandiyah Nazimiyah Barabai', '0853-xxx-xxx', ' Jl. HEVEA, Rt.04. Rw.II No. 77. Depan KANTOR AKLI'),
('IDZ1', 'UDINUS', '(+6224) 3517261', 'UNIVERSITAS DIAN NUSWANTORO SEMARANG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_download`
--
ALTER TABLE `tb_download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_video`
--
ALTER TABLE `tb_video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `tb_zawiyah`
--
ALTER TABLE `tb_zawiyah`
  ADD PRIMARY KEY (`id_zawiyah`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
