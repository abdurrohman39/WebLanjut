-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Jan 2019 pada 10.31
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
('IDB101', 'Kesultanan Banten, Satu-satunya Kerajaan yang Punya Catatan Pengadilan Agama', '2019-01-07', 'Jakarta, NU Online Tidak ada kerajaan Islam di Asia Tenggara yang meninggalkan catatan hukum pengadilan. Umumnya, mereka hanya memiliki undang-undang saja. Tapi tidak dengan Kesultanan Banten. Kerajaan yang berkuasa sejak abad 16 ini memiliki catatan tertulis atas hukum yang diputuskan oleh jaksa agung saat itu. ', 'Adi', 'Terlama'),
('IDB102', 'Kesultanan Banten, Satu-satunya Kerajaan yang Punya Catatan Pengadilan Agama', '2019-01-15', 'Jakarta, NU Online Tidak ada kerajaan Islam di Asia Tenggara yang meninggalkan catatan hukum pengadilan. Umumnya, mereka hanya memiliki undang-undang saja. Tapi tidak dengan Kesultanan Banten. Kerajaan yang berkuasa sejak abad 16 ini memiliki catatan tertulis atas hukum yang diputuskan oleh jaksa agung saat itu. ', 'Kontol', 'Terbaru'),
('IDB103', 'Maraknya Gejala Apatisme Pelajar, 2019 IPPNU Bentuk Kader Pintar dan Benar', '2019-01-06', 'Jakarta, NU Online Kecanduan gawai mengakibatkan apatisme pelajar putri Indonesia saat ini terhadap lingkungan sekitar. Mereka juga cenderung individualis atau berkelompok dengan gengnya saja. Tak jarang, geng tersebut melakukan caci maki fisik ataupun non-fisik. "Maka hal ini dirasa perlu untuk kembali membentuk karakter pelajar putri menjadi pribadi yang santun dan peduli pada lingkungan sekitar," kata Nurul Hidayati Ummah, Ketua Umum Ikatan Pelajar Putri Nahdlatul Ulama (IPPNU) pada Selasa (1/1). ', 'Ardik', 'Terpopuler');

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
('IDD103', 'Screenshot (1).png', 'jfjfjf'),
('IDD104', 'FORM A terbaru Azhar.doc', 'cob');

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
('IDB101', 'Maghrib', '2019-01-06');

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
('IDV101', 'malin kondan', '<iframe width="560" height="315" src="https://www.youtube.com/embed/B2FSX_Kn4Cg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
