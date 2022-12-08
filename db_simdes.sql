-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 01:18 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simdes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(5) NOT NULL,
  `adm_nama` varchar(100) NOT NULL,
  `adm_username` varchar(50) NOT NULL,
  `adm_pass` varchar(50) NOT NULL,
  `adm_foto` varchar(100) NOT NULL,
  `adm_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `adm_nama`, `adm_username`, `adm_pass`, `adm_foto`, `adm_level`) VALUES
(3, 'Erwin', 'erwin', '123', 'admin-1635964784.jpg', 'Super Admin'),
(4, 'aziza', 'aziza', '12345', 'admin-1636773864.jpg', 'Masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_akta`
--

CREATE TABLE `tb_akta` (
  `id_akta` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `t_lahir` date NOT NULL,
  `anak_ke` varchar(100) NOT NULL,
  `j_kelamin` varchar(11) NOT NULL,
  `hari` varchar(11) NOT NULL,
  `waktu` time NOT NULL,
  `j_kelahiran` varchar(11) NOT NULL,
  `berat` varchar(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama_ibu` varchar(11) NOT NULL,
  `nik_ibu` varchar(20) NOT NULL,
  `tgl_ibu` int(11) NOT NULL,
  `pekerjaan_ibu` varchar(11) NOT NULL,
  `alamat_ibu` varchar(11) NOT NULL,
  `nama_ayah` int(11) NOT NULL,
  `nik_ayah` int(11) NOT NULL,
  `tgl_ayah` int(11) NOT NULL,
  `pekerjaan_ayah` varchar(11) NOT NULL,
  `alamat_ayah` int(11) NOT NULL,
  `pelapor` int(11) NOT NULL,
  `nik_pelapor` varchar(11) NOT NULL,
  `umur_pelapor` int(11) NOT NULL,
  `pekerjaan_pelapor` int(11) NOT NULL,
  `alamat_pelapor` int(11) NOT NULL,
  `saksi_1` int(11) NOT NULL,
  `nik_saksi1` int(11) NOT NULL,
  `umur_saksi1` varchar(11) NOT NULL,
  `pekerjaan_saksi1` varchar(11) NOT NULL,
  `alamat_saksi1` varchar(11) NOT NULL,
  `saksi_2` varchar(11) NOT NULL,
  `nik_saksi2` int(11) NOT NULL,
  `umur_saksi2` int(11) NOT NULL,
  `pekerjaan_saksi2` int(11) NOT NULL,
  `alamat_saksi2` int(11) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akta`
--

INSERT INTO `tb_akta` (`id_akta`, `nama`, `t_lahir`, `anak_ke`, `j_kelamin`, `hari`, `waktu`, `j_kelahiran`, `berat`, `nik`, `nama_ibu`, `nik_ibu`, `tgl_ibu`, `pekerjaan_ibu`, `alamat_ibu`, `nama_ayah`, `nik_ayah`, `tgl_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `pelapor`, `nik_pelapor`, `umur_pelapor`, `pekerjaan_pelapor`, `alamat_pelapor`, `saksi_1`, `nik_saksi1`, `umur_saksi1`, `pekerjaan_saksi1`, `alamat_saksi1`, `saksi_2`, `nik_saksi2`, `umur_saksi2`, `pekerjaan_saksi2`, `alamat_saksi2`, `email`) VALUES
(5, 'erwin', '2021-11-18', '1', '0', '0', '00:00:00', '0', '0', 0, '0', '', 0, '0', '0', 0, 0, 0, '0', 0, 0, '0', 0, 0, 0, 0, 0, '0', '0', '0', '0', 0, 0, 0, 0, ''),
(6, 'erwin', '2021-11-08', '3', '0', '0', '00:00:00', '0', '0', 0, '0', '', 0, '0', '0', 0, 0, 0, '0', 0, 0, '0', 0, 0, 0, 0, 0, '0', '0', '0', '0', 0, 0, 0, 0, ''),
(7, 'e', '2021-11-07', '2', '0', '0', '00:00:00', '0', '0', 0, '0', '', 0, '0', '0', 0, 0, 0, '0', 0, 0, '0', 0, 0, 0, 0, 0, '0', '0', '0', '0', 0, 0, 0, 0, ''),
(8, 'salsa', '2021-11-13', '3', '0', '0', '00:00:00', '0', '0', 0, '0', '', 0, '0', '0', 0, 0, 0, '0', 0, 0, '0', 0, 0, 0, 0, 0, '0', '0', '0', '0', 0, 0, 0, 0, ''),
(9, 'a', '0000-00-00', 'kamis 10', 'Laki-laki', 'kamis 01 me', '08:00:00', 'Kembar', '8 kg', 2147483647, 'a', '', 86, 'a', 'a', 0, 8, 8, 'a', 0, 0, '8', 8, 0, 0, 0, 8, '8', 'a', 'a', 'a', 8, 8, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_domisili`
--

CREATE TABLE `tb_domisili` (
  `id_domisili` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `t_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `j_kelamin` varchar(10) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_domisili`
--

INSERT INTO `tb_domisili` (`id_domisili`, `nama`, `no_ktp`, `t_lahir`, `tgl_lahir`, `j_kelamin`, `kewarganegaraan`, `agama`, `email`) VALUES
(1, 'q', '1', 'sfs', '0001-01-01', '', 'dfd', 'dsd', ''),
(2, 'q', '1', 'fd', '0001-01-01', 'Laki-laki', 'fd', 'dfddfd', 'dd'),
(3, 'erwin', '97965', 'kindang', '2022-01-06', 'Laki-laki', '', 'Islam', 'erwin4330033@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kk`
--

CREATE TABLE `tb_kk` (
  `id_kk` int(50) NOT NULL,
  `nm_kkeluarga` varchar(200) NOT NULL,
  `a_keluarga` text NOT NULL,
  `status_keluarga` text NOT NULL,
  `rt_rw` varchar(300) NOT NULL,
  `desa_kelurahan` varchar(80) NOT NULL,
  `kecematan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(80) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_kk`
--

INSERT INTO `tb_kk` (`id_kk`, `nm_kkeluarga`, `a_keluarga`, `status_keluarga`, `rt_rw`, `desa_kelurahan`, `kecematan`, `kabupaten`, `provinsi`, `alamat`, `email`) VALUES
(22, '1', '1', 'bulukumba', '', 'kindang', 'bulukumba', 'sulse', 'indonesia', '001', 'erwin4330033@gmail.com'),
(23, 'q', 'q', 'q', '2021-11-13', 'Perempun', 'islam', 'q', 'q', 'q', ''),
(24, 'q', 'q', 'q', 'q', 'q', 'qq', 'q', 'qq', 'q', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id_penduduk` int(50) NOT NULL,
  `nik` varchar(200) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `nm_penduduk` varchar(200) NOT NULL,
  `t_lahir` varchar(300) NOT NULL,
  `j_kelamin` varchar(80) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `alamat_ktp` varchar(100) NOT NULL,
  `desa_kelurahan` varchar(100) NOT NULL,
  `kec` varchar(100) NOT NULL,
  `kab` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `status_penduduk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id_penduduk`, `nik`, `no_kk`, `nm_penduduk`, `t_lahir`, `j_kelamin`, `tgl_lahir`, `alamat`, `alamat_ktp`, `desa_kelurahan`, `kec`, `kab`, `provinsi`, `negara`, `rt`, `rw`, `agama`, `pendidikan_terakhir`, `pekerjaan`, `status_perkawinan`, `status_penduduk`) VALUES
(13, '3', '2', 'erwin', 'kindang', 'Laki-laki', '2021-11-03', 'gowa', '0', '0', '0', '0', '0', '0', 23, 32, 'Pilih Jenis', '', 'petani', '0', 'Tetap');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sertifikat`
--

CREATE TABLE `tb_sertifikat` (
  `id_sertifikat` int(11) NOT NULL,
  `nm_pemilik` varchar(100) NOT NULL,
  `desa_kelurahan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sertifikat`
--

INSERT INTO `tb_sertifikat` (`id_sertifikat`, `nm_pemilik`, `desa_kelurahan`) VALUES
(1, 'aa', 'a'),
(2, 'a', 'a'),
(3, 'bahar', 'borongrappoa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_skck`
--

CREATE TABLE `tb_skck` (
  `id_skck` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `t_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `j_kelamin` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `s_perkawinan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keperluan` text NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_skck`
--

INSERT INTO `tb_skck` (`id_skck`, `nama`, `nik`, `t_lahir`, `tgl_lahir`, `j_kelamin`, `agama`, `kewarganegaraan`, `s_perkawinan`, `pekerjaan`, `alamat`, `keperluan`, `email`) VALUES
(1, 'a', '', 'a', '2021-11-09', 'Laki-laki', 'aaa', 'a', 'a', 'a', 'a', '', ''),
(2, 'a', '', 'a', '2021-11-10', 'Laki-laki', 'a', 'a', 'a', 'a', 'a', '', ''),
(3, '88', '', 'ki', '2021-11-26', 'Laki-laki', 'islam', 's1', '1 tahun', 'p', 'uru', '', ''),
(4, 'ew', '7302085010740002', 'ds', '2021-11-05', 'Pilih jenis kelamin', 'dsa', 'das', 'dsa', 'da', 'asd', 'aas', 'RaamliRamli8@gmail.Com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_akta`
--
ALTER TABLE `tb_akta`
  ADD PRIMARY KEY (`id_akta`);

--
-- Indexes for table `tb_domisili`
--
ALTER TABLE `tb_domisili`
  ADD PRIMARY KEY (`id_domisili`);

--
-- Indexes for table `tb_kk`
--
ALTER TABLE `tb_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indexes for table `tb_sertifikat`
--
ALTER TABLE `tb_sertifikat`
  ADD PRIMARY KEY (`id_sertifikat`);

--
-- Indexes for table `tb_skck`
--
ALTER TABLE `tb_skck`
  ADD PRIMARY KEY (`id_skck`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_akta`
--
ALTER TABLE `tb_akta`
  MODIFY `id_akta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_domisili`
--
ALTER TABLE `tb_domisili`
  MODIFY `id_domisili` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_kk`
--
ALTER TABLE `tb_kk`
  MODIFY `id_kk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id_penduduk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_sertifikat`
--
ALTER TABLE `tb_sertifikat`
  MODIFY `id_sertifikat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_skck`
--
ALTER TABLE `tb_skck`
  MODIFY `id_skck` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
