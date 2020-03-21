-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Mar 2020 pada 12.26
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ukk_spp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id_agenda` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_identitas`
--

CREATE TABLE `tb_identitas` (
  `id_identitas` int(11) NOT NULL,
  `nama_sekolah` varchar(40) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kecamatan` varchar(30) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `no_telp` varchar(14) DEFAULT NULL,
  `logo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_pembayaran`
--

CREATE TABLE `tb_jenis_pembayaran` (
  `id_jenis` int(11) NOT NULL,
  `id_pos` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL,
  `nama_pembayaran` varchar(20) DEFAULT NULL,
  `type` enum('bulanan','bebas') DEFAULT NULL,
  `nominal` decimal(10,0) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama_karyawan` varchar(30) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `username`, `password`, `nama_karyawan`, `id_role`) VALUES
(12, '@wahyupramudya20', '$2y$10$OhxhTYBSEjjd2q20rhByNOdOaPD1JJBkUxLO8rBxWTe1BsuuX8co6', 'Wahyu Adi Pramudya', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(6) DEFAULT NULL,
  `id_kompetensi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kompetensi`
--

CREATE TABLE `tb_kompetensi` (
  `id_kompetensi` int(11) NOT NULL,
  `kompetensi_keahlian` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemasukan`
--

CREATE TABLE `tb_pemasukan` (
  `id_pemasukan` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `jumlah_rupiah` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `no_pembayaran` varchar(10) NOT NULL,
  `id_karyawan` int(11) DEFAULT NULL,
  `nisn` varchar(11) DEFAULT NULL,
  `tanggal_bayar` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `bulan_bayar` varchar(35) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL,
  `id_jenis_pembayaran` int(11) DEFAULT NULL,
  `jumlah_bayar` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengeluaran`
--

CREATE TABLE `tb_pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `jumlah_rupiah` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pos_keuangan`
--

CREATE TABLE `tb_pos_keuangan` (
  `id_pos` int(11) NOT NULL,
  `nama_pos` varchar(20) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_role`
--

INSERT INTO `tb_role` (`id_role`, `nama_role`) VALUES
(1, 'Admin'),
(2, 'Petugas'),
(3, 'Kepala Sekolah'),
(4, 'Siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nisn` varchar(11) NOT NULL,
  `nis` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(40) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telp` varchar(14) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL,
  `avatar` text DEFAULT NULL,
  `no_pembayaran` varchar(11) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tahun_ajaran`
--

CREATE TABLE `tb_tahun_ajaran` (
  `id_tahun` int(11) NOT NULL,
  `tahun_ajaran` varchar(10) DEFAULT NULL,
  `status` enum('aktif','tidak aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tahun_ajaran`
--

INSERT INTO `tb_tahun_ajaran` (`id_tahun`, `tahun_ajaran`, `status`) VALUES
(2, '2020-2021', 'tidak aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `tb_identitas`
--
ALTER TABLE `tb_identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indeks untuk tabel `tb_jenis_pembayaran`
--
ALTER TABLE `tb_jenis_pembayaran`
  ADD PRIMARY KEY (`id_jenis`),
  ADD KEY `FORIEGN` (`id_pos`,`id_tahun`,`id_kelas`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_role` (`id_role`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `FORIEGN` (`id_kompetensi`) USING BTREE;

--
-- Indeks untuk tabel `tb_kompetensi`
--
ALTER TABLE `tb_kompetensi`
  ADD PRIMARY KEY (`id_kompetensi`);

--
-- Indeks untuk tabel `tb_pemasukan`
--
ALTER TABLE `tb_pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`no_pembayaran`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_jenis_pembayaran` (`id_jenis_pembayaran`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_karyawan` (`id_karyawan`) USING BTREE;

--
-- Indeks untuk tabel `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indeks untuk tabel `tb_pos_keuangan`
--
ALTER TABLE `tb_pos_keuangan`
  ADD PRIMARY KEY (`id_pos`);

--
-- Indeks untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `FORIEGN` (`id_kelas`,`no_pembayaran`,`id_tahun`) USING BTREE,
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `tb_siswa_ibfk_3` (`no_pembayaran`);

--
-- Indeks untuk tabel `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_identitas`
--
ALTER TABLE `tb_identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_pembayaran`
--
ALTER TABLE `tb_jenis_pembayaran`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kompetensi`
--
ALTER TABLE `tb_kompetensi`
  MODIFY `id_kompetensi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pemasukan`
--
ALTER TABLE `tb_pemasukan`
  MODIFY `id_pemasukan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pos_keuangan`
--
ALTER TABLE `tb_pos_keuangan`
  MODIFY `id_pos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_jenis_pembayaran`
--
ALTER TABLE `tb_jenis_pembayaran`
  ADD CONSTRAINT `tb_jenis_pembayaran_ibfk_1` FOREIGN KEY (`id_pos`) REFERENCES `tb_pos_keuangan` (`id_pos`),
  ADD CONSTRAINT `tb_jenis_pembayaran_ibfk_2` FOREIGN KEY (`id_tahun`) REFERENCES `tb_tahun_ajaran` (`id_tahun`),
  ADD CONSTRAINT `tb_jenis_pembayaran_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`);

--
-- Ketidakleluasaan untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD CONSTRAINT `tb_karyawan_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tb_role` (`id_role`);

--
-- Ketidakleluasaan untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD CONSTRAINT `tb_kelas_ibfk_1` FOREIGN KEY (`id_kompetensi`) REFERENCES `tb_kompetensi` (`id_kompetensi`);

--
-- Ketidakleluasaan untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `tb_siswa` (`nisn`),
  ADD CONSTRAINT `tb_pembayaran_ibfk_2` FOREIGN KEY (`id_tahun`) REFERENCES `tb_tahun_ajaran` (`id_tahun`),
  ADD CONSTRAINT `tb_pembayaran_ibfk_3` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_karyawan` (`id_karyawan`),
  ADD CONSTRAINT `tb_pembayaran_ibfk_4` FOREIGN KEY (`id_jenis_pembayaran`) REFERENCES `tb_jenis_pembayaran` (`id_jenis`);

--
-- Ketidakleluasaan untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`),
  ADD CONSTRAINT `tb_siswa_ibfk_2` FOREIGN KEY (`id_tahun`) REFERENCES `tb_tahun_ajaran` (`id_tahun`),
  ADD CONSTRAINT `tb_siswa_ibfk_3` FOREIGN KEY (`no_pembayaran`) REFERENCES `tb_pembayaran` (`no_pembayaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
