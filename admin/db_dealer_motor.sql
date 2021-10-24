-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: 20 Des 2018 pada 16.12
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dealer_motor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dealer`
--

CREATE TABLE `tb_dealer` (
  `id_dealer` varchar(10) NOT NULL,
  `nama_dealer` varchar(20) NOT NULL,
  `alamat_dealer` text NOT NULL,
  `penanggung_jawab_dealer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dealer`
--

INSERT INTO `tb_dealer` (`id_dealer`, `nama_dealer`, `alamat_dealer`, `penanggung_jawab_dealer`) VALUES
('ITD101', 'Panji  ', 'Jepara-Jawa Tengah Jl. MT. Haryono No.34, Jengglong Timur, Purwodadi, Kabupaten Grobogan, Jawa Tengah 58111', 'Ardika '),
('ITD102', 'Kimcil Hokya', 'Jl. MT. Haryono No.34, Jengglong Timur, Purwodadi, Kabupaten Grobogan, Jawa Tengah 58111', 'Rinan'),
('ITD103', 'Panji opo', 'Jl. MT. Haryono No.34, Jengglong Timur, Purwodadi, Kabupaten Grobogan, Jawa Tengah 58111', 'putra kusma');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gaji_penjaga_dealer`
--

CREATE TABLE `tb_gaji_penjaga_dealer` (
  `id_gaji_pegawai` varchar(50) NOT NULL,
  `id_dealer` varchar(15) NOT NULL,
  `tgl_penggajian` date NOT NULL,
  `nama_penggaji` varchar(30) NOT NULL,
  `besar_gaji` varchar(40) NOT NULL,
  `uang_lain_lain` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gaji_penjaga_dealer`
--

INSERT INTO `tb_gaji_penjaga_dealer` (`id_gaji_pegawai`, `id_dealer`, `tgl_penggajian`, `nama_penggaji`, `besar_gaji`, `uang_lain_lain`) VALUES
('PJG101', 'ITD102', '2018-12-20', 'ilham', '3000000', '200000'),
('PJG102', 'ITD102', '2018-12-20', 'ilham', '3000000', '200000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`, `level`) VALUES
('ILG101', 'setya', 'MTIz', 'Operator'),
('ILG102', 'dika', 'cXdl', 'Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_motor_jual_cas`
--

CREATE TABLE `tb_motor_jual_cas` (
  `id_motor_jual_cas` varchar(50) NOT NULL,
  `id_dealer` varchar(30) NOT NULL,
  `id_motor_masuk` varchar(30) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `nama_pembeli` varchar(30) NOT NULL,
  `alamat_pembeli` text NOT NULL,
  `jk_pembeli` varchar(10) NOT NULL,
  `no_hp1` varchar(20) NOT NULL,
  `no_hp2` varchar(20) NOT NULL,
  `nik_ktp` varchar(20) NOT NULL,
  `pembayaran_cas` varchar(60) NOT NULL,
  `kembalian_pembayaran` varchar(60) NOT NULL,
  `potongan_harga_motor` varchar(50) NOT NULL,
  `jumlah_beli_motor` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_motor_jual_cas`
--

INSERT INTO `tb_motor_jual_cas` (`id_motor_jual_cas`, `id_dealer`, `id_motor_masuk`, `tgl_penjualan`, `nama_pembeli`, `alamat_pembeli`, `jk_pembeli`, `no_hp1`, `no_hp2`, `nik_ktp`, `pembayaran_cas`, `kembalian_pembayaran`, `potongan_harga_motor`, `jumlah_beli_motor`) VALUES
('IMC101', 'ITD101', 'IMT101', '2018-12-20', 'coba', 'jepara', 'Laki-laki', '085858192333', '085858192333', '085858192333', '100000', '9900000', '0', '1'),
('IMC102', 'ITD102', 'IMT102', '2018-12-14', 'Ardika Santosa', 'jepara', 'Laki-laki', '085858192333', '085858192333', '085858192333', '9000000', '1000000', '0', '1'),
('IMC103', 'ITD102', 'IMT101', '2018-12-16', 'Ardika Santosa', 'jepara', 'Laki-laki', '085858192332', '085858192333', '085858192333', '1000000', '9000000', '0', '1');

--
-- Trigger `tb_motor_jual_cas`
--
DELIMITER $$
CREATE TRIGGER `auto_inser` BEFORE INSERT ON `tb_motor_jual_cas` FOR EACH ROW begin
UPDATE tb_motor_masuk SET jumlah_motor=jumlah_motor - New.jumlah_beli_motor WHERE id_motor_masuk=New.id_motor_masuk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_motor_kredit_tempo`
--

CREATE TABLE `tb_motor_kredit_tempo` (
  `id_kredit_tempo` varchar(50) NOT NULL,
  `id_motor_masuk` varchar(30) NOT NULL,
  `id_dealer` varchar(30) NOT NULL,
  `nama_pembeli` varchar(30) NOT NULL,
  `alamat_pembeli` varchar(40) NOT NULL,
  `jk_pembeli` varchar(10) NOT NULL,
  `no_hp1` varchar(20) NOT NULL,
  `no_hp2` varchar(20) NOT NULL,
  `nik_ktp` varchar(30) NOT NULL,
  `jumlah_uang_muka` varchar(40) NOT NULL,
  `kekurangan_bayar_kredit` varchar(40) NOT NULL,
  `tgl_kredit` date NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL,
  `status_kredit` varchar(20) NOT NULL DEFAULT '0' COMMENT '0 = BelumLunas, 1 = Lunas',
  `jumlahbeli_motor` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_motor_kredit_tempo`
--

INSERT INTO `tb_motor_kredit_tempo` (`id_kredit_tempo`, `id_motor_masuk`, `id_dealer`, `nama_pembeli`, `alamat_pembeli`, `jk_pembeli`, `no_hp1`, `no_hp2`, `nik_ktp`, `jumlah_uang_muka`, `kekurangan_bayar_kredit`, `tgl_kredit`, `tgl_jatuh_tempo`, `status_kredit`, `jumlahbeli_motor`) VALUES
('IMK101', 'IMT103', 'ITD103', 'Ardika Santosa', 'jepara', 'Laki-laki', '085858192333', '085858192333', '085858192333', '12000000', '6000000', '2018-12-25', '2018-12-16', 'Lunas', '1');

--
-- Trigger `tb_motor_kredit_tempo`
--
DELIMITER $$
CREATE TRIGGER `inser_auto` BEFORE INSERT ON `tb_motor_kredit_tempo` FOR EACH ROW begin
UPDATE tb_motor_masuk SET jumlah_motor=jumlah_motor - New.jumlahbeli_motor WHERE id_motor_masuk=New.id_motor_masuk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_motor_masuk`
--

CREATE TABLE `tb_motor_masuk` (
  `id_motor_masuk` varchar(50) NOT NULL,
  `id_dealer` varchar(30) NOT NULL,
  `no_polisi_motor` varchar(20) NOT NULL,
  `merk_motor` varchar(20) NOT NULL,
  `tahun_pembuatan_motor` varchar(10) NOT NULL,
  `warna_motor` varchar(20) NOT NULL,
  `status_stnk` varchar(20) NOT NULL DEFAULT '0' COMMENT '0 = Tidak-Ada, 1 = Ada',
  `status_bpkb` varchar(20) NOT NULL DEFAULT '0' COMMENT '0 = Tidak-Ada, 1 = Ada',
  `harga_motor` varchar(50) NOT NULL,
  `no_mesin_motor` varchar(30) NOT NULL,
  `modal_uang_masuk` varchar(50) NOT NULL,
  `nama_pemasok_modal` varchar(30) NOT NULL,
  `status_motor` varchar(20) NOT NULL DEFAULT '0' COMMENT '0 = Motor-Baru, 1 = Motor-Second',
  `jumlah_motor` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_motor_masuk`
--

INSERT INTO `tb_motor_masuk` (`id_motor_masuk`, `id_dealer`, `no_polisi_motor`, `merk_motor`, `tahun_pembuatan_motor`, `warna_motor`, `status_stnk`, `status_bpkb`, `harga_motor`, `no_mesin_motor`, `modal_uang_masuk`, `nama_pemasok_modal`, `status_motor`, `jumlah_motor`) VALUES
('IMT101', 'ITD102', 'K-192-GA', 'Yamaha', '2017', 'hitam', 'Ada-STNK', 'Tidak-Ada-BPKB', '10000000', '9282828', '1919191919', 'andi', 'Motor-Baru', '1'),
('IMT102', 'ITD102', 'K-192-GI', 'Suzuki', '2017', 'hitam', 'Ada-STNK', 'Tidak-Ada-BPKB', '10000000', '9282828', '19191919', 'andi 2', 'Motor-Baru', '0'),
('IMT103', 'ITD103', 'H - 1919 - KH', 'Ninja', '2017', 'Hijau', 'Ada-STNK', 'Ada-BPKB', '18000000', '0190190', '1999199', 'coba1', 'Motor-Second', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` varchar(50) NOT NULL,
  `id_dealer` varchar(30) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `alamat_pegawai` varchar(40) NOT NULL,
  `jk_pegawai` varchar(10) NOT NULL,
  `tgl_lahir_pegawai` date NOT NULL,
  `tempat_lahir_pegawai` varchar(30) NOT NULL,
  `no_hp1` varchar(20) NOT NULL,
  `no_hp2` varchar(20) NOT NULL,
  `nik_ktp` varchar(20) NOT NULL,
  `jabatan_pegawai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `id_dealer`, `nama_pegawai`, `alamat_pegawai`, `jk_pegawai`, `tgl_lahir_pegawai`, `tempat_lahir_pegawai`, `no_hp1`, `no_hp2`, `nik_ktp`, `jabatan_pegawai`) VALUES
('IPG101', 'ITD102', 'Ardika Santosa', 'Jepara Kelet', 'Laki-laki', '2018-12-06', 'Jepara Kelet', '085858192332', '0858581923332', '0858581923332', 'Kepala Atas'),
('IPG102', 'ITD103', 'Panji Asmara', 'Kalimantan', 'Laki-laki', '2018-10-30', 'Jepara Kelet', '085858192333', '085858192333', '085858192333', 'Asisten'),
('IPG103', 'ITD101', 'coba', 'Jepara', 'Perempuan', '2018-12-01', 'Jepara Kelet', '085858192333', '085858192333', '085858192333', 'Kepala'),
('IPG104', 'ITD101', 'Wiro', 'Surabaya', 'Laki-laki', '2018-12-14', 'Jepara Kelet', '085858192333', '085858192333', '085858192333', 'Asisten Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penggajian_pegawai`
--

CREATE TABLE `tb_penggajian_pegawai` (
  `id_gaji_pegawai` varchar(30) NOT NULL,
  `id_pegawai` varchar(30) NOT NULL,
  `id_dealer` varchar(30) NOT NULL,
  `nama_penggaji` varchar(40) NOT NULL,
  `tgl_penggajian` date NOT NULL,
  `gaji_pokok` varchar(40) NOT NULL,
  `pegawai_pinjam_uang` varchar(40) NOT NULL,
  `bonus_gaji` varchar(40) NOT NULL,
  `total_bersih` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penggajian_pegawai`
--

INSERT INTO `tb_penggajian_pegawai` (`id_gaji_pegawai`, `id_pegawai`, `id_dealer`, `nama_penggaji`, `tgl_penggajian`, `gaji_pokok`, `pegawai_pinjam_uang`, `bonus_gaji`, `total_bersih`) VALUES
('IGP101', 'IPG102', 'ITD103', 'Ardika Santosa', '2018-12-16', '1000000', '10000', '10000', '1000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_uang_keseluruhan`
--

CREATE TABLE `tb_uang_keseluruhan` (
  `id_uang_keseluruhan` varchar(50) NOT NULL,
  `id_motor` varchar(30) NOT NULL,
  `id_gaji_pegawai` varchar(30) NOT NULL,
  `id_uang_jual_cas` varchar(30) NOT NULL,
  `id_uang_kredit_tempo` varchar(30) NOT NULL,
  `uang_keuntungan` varchar(40) NOT NULL,
  `uang_kerugian` varchar(40) NOT NULL,
  `total_uang` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dealer`
--
ALTER TABLE `tb_dealer`
  ADD PRIMARY KEY (`id_dealer`);

--
-- Indexes for table `tb_gaji_penjaga_dealer`
--
ALTER TABLE `tb_gaji_penjaga_dealer`
  ADD PRIMARY KEY (`id_gaji_pegawai`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_motor_jual_cas`
--
ALTER TABLE `tb_motor_jual_cas`
  ADD PRIMARY KEY (`id_motor_jual_cas`);

--
-- Indexes for table `tb_motor_kredit_tempo`
--
ALTER TABLE `tb_motor_kredit_tempo`
  ADD PRIMARY KEY (`id_kredit_tempo`);

--
-- Indexes for table `tb_motor_masuk`
--
ALTER TABLE `tb_motor_masuk`
  ADD PRIMARY KEY (`id_motor_masuk`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_penggajian_pegawai`
--
ALTER TABLE `tb_penggajian_pegawai`
  ADD PRIMARY KEY (`id_gaji_pegawai`);

--
-- Indexes for table `tb_uang_keseluruhan`
--
ALTER TABLE `tb_uang_keseluruhan`
  ADD PRIMARY KEY (`id_uang_keseluruhan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
