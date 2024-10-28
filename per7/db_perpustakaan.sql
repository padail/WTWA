-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 28, 2024 at 02:59 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `idBuku` int NOT NULL,
  `namaBuku` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`idBuku`, `namaBuku`) VALUES
(1, 'Pemrograman Python'),
(2, 'Pengantar Basis Data'),
(3, 'Jaringan Komputer'),
(4, 'Kecerdasan Buatan');

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE `bukutamu` (
  `idBukuTamu` int NOT NULL,
  `nama` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `komentar` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`idBukuTamu`, `nama`, `email`, `komentar`) VALUES
(1, 'muh. fadhail', 'muhammadfadhail96@gmail.com', 'update'),
(2, 'Autem enim magni odi', 'muhfadhail611@smk.belajar.id', 'ada'),
(3, 'amirah', 'muhaas@gmail.com', 'baik buku nya');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `idGambar` int NOT NULL,
  `nama` varchar(30) NOT NULL,
  `namaFile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`idGambar`, `nama`, `namaFile`) VALUES
(1, 'padail', 'idc.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idKategori` int NOT NULL,
  `namaKategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idKategori`, `namaKategori`) VALUES
(12345, 'komputer'),
(12346, 'jaringan'),
(12347, 'telekomunikasi');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NRP` int NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `angkatan` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NRP`, `nama`, `jurusan`, `angkatan`) VALUES
(2401, 'IQBAL', 'Teknologi Rekayasa Internet', 24),
(2402, 'PADAIL', 'Teknologi Rekayasa Internet', 24),
(2405, 'DIMAS', 'Teknologi Rekayasa Internet', 24),
(2412, 'INGGA', 'Teknologi Rekayasa Internet', 24);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `idPeminjaman` int NOT NULL,
  `NRP` int NOT NULL,
  `idBuku` int NOT NULL,
  `tglPeminjaman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`idPeminjaman`, `NRP`, `idBuku`, `tglPeminjaman`) VALUES
(101, 2402, 1, '2024-10-01'),
(102, 2412, 2, '2024-10-03'),
(103, 2405, 3, '2024-10-05'),
(104, 2401, 4, '2024-10-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`idBuku`);

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`idBukuTamu`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`idGambar`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NRP`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`idPeminjaman`),
  ADD KEY `NRP` (`NRP`),
  ADD KEY `idBuku` (`idBuku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `idBuku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `idBukuTamu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `idGambar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idKategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12348;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `NRP` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2413;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `idPeminjaman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`idBuku`) REFERENCES `buku` (`idBuku`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`NRP`) REFERENCES `mahasiswa` (`NRP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
