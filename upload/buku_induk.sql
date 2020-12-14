-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Mar 2020 pada 20.14
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_induk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `user` varchar(128) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `profil` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `user`, `pass`, `profil`) VALUES
(1, 'admin', '$2y$10$UmaKb4Aub2y1RHV4V1b9oOQAGni4AyAmUrZsWUxYcX8ytygZQUpCu', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nuptk` int(11) NOT NULL,
  `nrg` int(11) NOT NULL,
  `npwp` int(11) NOT NULL,
  `tmp_lahir` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(128) NOT NULL,
  `agama` enum('Islam','Kristen','Budha','Hindu') NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nuptk`, `nrg`, `npwp`, `tmp_lahir`, `nama`, `tgl_lahir`, `jk`, `agama`, `alamat`, `foto`, `status`) VALUES
(4, 696969, 1092019, 12313, 1231, 'earth', 'earth-chan', '2020-03-03', 'Perempuan', 'Islam', 'earth', 'file_1584012070.JPG', ''),
(5, 123123, 1231, 123123, 123, 'safdwe', 'asdasd', '2020-03-11', 'Perempuan', 'Islam', 'Lorem ipsum dolor sit amet, consectetur adipisicing', 'file_1584349663.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `id_waliKelas` int(11) NOT NULL,
  `kelas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama`, `kapasitas`, `id_waliKelas`, `kelas`) VALUES
(4, 'Rpl-A', 30, 4, 'XII'),
(5, 'Rpl-B', 30, 4, 'XII'),
(6, 'Rpl-A', 30, 5, 'X'),
(7, 'Rpl-A', 30, 5, 'XI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `semester` int(11) NOT NULL,
  `kkm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama`, `semester`, `kkm`) VALUES
(2, 'PBO Programming', 2, 75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapelguru`
--

CREATE TABLE `tb_mapelguru` (
  `id_mapelGuru` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `idMapel_jamKe1` int(11) NOT NULL,
  `idMapel_jamKe2` int(11) NOT NULL,
  `idMapel_jamKe3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapeljurusan`
--

CREATE TABLE `tb_mapeljurusan` (
  `id_mapelJurusan` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `idMapel_jamKe1` int(11) NOT NULL,
  `idMapel_jamKe2` int(11) NOT NULL,
  `idMapel_jamKe3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapelruang`
--

CREATE TABLE `tb_mapelruang` (
  `id_mapelRuang` int(11) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `idMapel_jamKe1` int(11) NOT NULL,
  `idMapel_jamKe2` int(11) NOT NULL,
  `idMapel_jamKe3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilaisiswa`
--

CREATE TABLE `tb_nilaisiswa` (
  `id_nilaiSiswa` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ruang`
--

CREATE TABLE `tb_ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jenis` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ruang`
--

INSERT INTO `tb_ruang` (`id_ruang`, `nama`, `jenis`) VALUES
(1, 'BPL 1', 'Bengkel'),
(3, '1', 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sekola`
--

CREATE TABLE `tb_sekola` (
  `id_sekolah` int(11) NOT NULL,
  `nss` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `npsn` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `prov` varchar(128) NOT NULL,
  `kab` varchar(128) NOT NULL,
  `kec` varchar(128) NOT NULL,
  `desa` varchar(128) NOT NULL,
  `jln` varchar(128) NOT NULL,
  `kd_pos` int(11) NOT NULL,
  `akreditas` varchar(128) NOT NULL,
  `th_akreditas` date NOT NULL,
  `jml_guru` int(11) NOT NULL,
  `prodi` varchar(128) NOT NULL,
  `th_berdiri` date NOT NULL,
  `id_kepsek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sekola`
--

INSERT INTO `tb_sekola` (`id_sekolah`, `nss`, `nis`, `npsn`, `nama`, `prov`, `kab`, `kec`, `desa`, `jln`, `kd_pos`, `akreditas`, `th_akreditas`, `jml_guru`, `prodi`, `th_berdiri`, `id_kepsek`) VALUES
(1, 1201201209, 129301900, 12192090, 'smkn 1 majalengka', 'jawa barat', 'majalengka', 'tonjong', 'tonjong', 'pinangraja', 25890, 'A', '0000-00-00', 25, 'umum', '2018-06-04', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(128) NOT NULL,
  `jk` varchar(128) NOT NULL,
  `tmp_lahir` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(128) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `status` enum('aktif','keluar','lulus','pindah') NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nisn`, `nis`, `nama_siswa`, `jk`, `tmp_lahir`, `tgl_lahir`, `agama`, `anak_ke`, `foto`, `alamat`, `nama_ayah`, `nama_ibu`, `status`, `id_jurusan`) VALUES
(2, 123123, 23432, 'Ridwan maulana', 'Perempuan', 'osaka  ', '2020-03-03', 'Islam', 1, 'file_1584349457.jpg', 'osaka', 'osi', 'osa', 'lulus', 5),
(3, 123123, 12312, 'aoiidjoi', 'Perempuan', 'aodjoi', '2020-02-24', 'Islam', 1, 'file_1584350871.jpg', 'adsd', 'qweq', 'qweq', 'aktif', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_walikelas`
--

CREATE TABLE `tb_walikelas` (
  `id_waliKelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `tb_mapelguru`
--
ALTER TABLE `tb_mapelguru`
  ADD PRIMARY KEY (`id_mapelGuru`);

--
-- Indeks untuk tabel `tb_mapeljurusan`
--
ALTER TABLE `tb_mapeljurusan`
  ADD PRIMARY KEY (`id_mapelJurusan`);

--
-- Indeks untuk tabel `tb_mapelruang`
--
ALTER TABLE `tb_mapelruang`
  ADD PRIMARY KEY (`id_mapelRuang`);

--
-- Indeks untuk tabel `tb_nilaisiswa`
--
ALTER TABLE `tb_nilaisiswa`
  ADD PRIMARY KEY (`id_nilaiSiswa`);

--
-- Indeks untuk tabel `tb_ruang`
--
ALTER TABLE `tb_ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indeks untuk tabel `tb_sekola`
--
ALTER TABLE `tb_sekola`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_mapelguru`
--
ALTER TABLE `tb_mapelguru`
  MODIFY `id_mapelGuru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_mapeljurusan`
--
ALTER TABLE `tb_mapeljurusan`
  MODIFY `id_mapelJurusan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_mapelruang`
--
ALTER TABLE `tb_mapelruang`
  MODIFY `id_mapelRuang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_nilaisiswa`
--
ALTER TABLE `tb_nilaisiswa`
  MODIFY `id_nilaiSiswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_ruang`
--
ALTER TABLE `tb_ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_sekola`
--
ALTER TABLE `tb_sekola`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
