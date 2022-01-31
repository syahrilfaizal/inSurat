-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2022 pada 09.29
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insurat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `id_rt` int(11) NOT NULL,
  `id_kelurahan` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` enum('admin','kecamatan','kelurahan','rt') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `id_rt`, `id_kelurahan`, `id_kecamatan`, `password`, `level`) VALUES
(1, 'admin', 0, 0, 0, '$2y$10$iIYGGeinP/fVd/E2eRfGUOgg0ysoL/9CBoxCI.X68Ko1kLiiDBwDu', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(225) NOT NULL,
  `nama_camat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kecamatan`, `nama_camat`) VALUES
(1, 'balikpapan tengah', 'danu'),
(2, 'Balikpapan Selatana', 'wahyu'),
(3, 'Balikpapan Utara', 'Soekirman'),
(5, 'Balikpapan Timur', 'EVOS_XIN'),
(6, 'Balikpapan Kota', 'DAPA GANTENG WIBU LANCELOT TZY AHAHAHA '),
(7, 'Balikpapan Barat', 'rrq jason');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `kelurahan` varchar(225) NOT NULL,
  `nama_lurah` varchar(255) NOT NULL,
  `id_kecamatan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `kelurahan`, `nama_lurah`, `id_kecamatan`) VALUES
(2, 'klandasan ilir', 'cahyo', 1),
(3, 'karang joang', 'cahyoo', 1),
(4, 'gunung polisi', 'narto', 2),
(5, 'kampung baru', 'nartoo', 2),
(6, 'telaga sari', 'nartooo', 2),
(7, 'Karang Rejo', 'sunarti', 0),
(8, 'Karang Rejo', 'mamat', 0),
(9, 'Karang Rejo', 'mmt', 0),
(10, 'Karang Rejo', 'mmte', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `id_rt` int(11) NOT NULL,
  `id_kelurahan` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `kode_khusus` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `id_user`, `id_surat`, `id_rt`, `id_kelurahan`, `id_kecamatan`, `keterangan`, `kode_khusus`) VALUES
(4, 1, 8, 3, 3, 1, 'loremmm', 'kec'),
(5, 1, 11, 2, 2, 1, 'alsdkamsfk', 'kel'),
(6, 1, 1, 3, 3, 1, 'kkk', 'tg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt`
--

CREATE TABLE `rt` (
  `id_rt` int(11) NOT NULL,
  `rt` varchar(11) NOT NULL,
  `nama_rt` varchar(255) NOT NULL,
  `id_kelurahan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rt`
--

INSERT INTO `rt` (`id_rt`, `rt`, `nama_rt`, `id_kelurahan`) VALUES
(1, '1', 'cahyo', 1),
(2, '02', 'ilyasss', 2),
(3, '03', 'ical', 3),
(4, '04', 'apdel', 4),
(5, '05', 'galur', 5),
(7, '49', 'danil', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `nama_surat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id_surat`, `nama_surat`) VALUES
(1, 'Surat Permohonan'),
(2, 'Surat Pemberitahuan'),
(3, 'Surat Keterangan'),
(4, 'Memo dan Nota Dinas'),
(5, 'Surat Undangan'),
(6, 'Surat Janji Temu'),
(7, 'Surat Permohonan Bantuan'),
(8, 'Surat Pemberian Izin'),
(9, 'Surat Tugas'),
(10, 'Surat Perintah Kerja'),
(11, 'Surat Perjalanan Dinas'),
(12, 'Surat Laporan'),
(13, 'Surat Pemberitahuan'),
(14, 'Surat Pengantar'),
(15, 'surat rekomendasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `no_rumah` varchar(225) NOT NULL,
  `id_rt` varchar(225) NOT NULL,
  `id_kelurahan` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `tlpn` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nik`, `nama`, `no_rumah`, `id_rt`, `id_kelurahan`, `id_kecamatan`, `email`, `tlpn`, `password`) VALUES
(1, '6471042910030001', 'RAHMATULLAH', '2', '1', '2', '1', 'amat.roket123@gmail.com', '2291391', '$2y$10$QhdWiJQBpKsF.Cc7MORXeuLPpaLoGS0gTB5rJIN0pq7Ztt2ed9dCm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`),
  ADD KEY `id_kelurahan` (`id_kelurahan`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `id_pengajuan` (`id_pengajuan`),
  ADD KEY `id_user` (`id_user`,`id_surat`,`id_rt`,`id_kelurahan`,`id_kecamatan`);

--
-- Indeks untuk tabel `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`id_rt`),
  ADD KEY `id_rt` (`id_rt`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `id_surat` (`id_surat`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rt`
--
ALTER TABLE `rt`
  MODIFY `id_rt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
