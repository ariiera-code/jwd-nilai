-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Agu 2021 pada 03.14
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwdp4169_kelompok3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilais`
--

CREATE TABLE `nilais` (
  `id` int(11) NOT NULL,
  `nim` varchar(6) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilais`
--

INSERT INTO `nilais` (`id`, `nim`, `nama`, `alamat`, `n1`, `n2`, `n3`) VALUES
(0, 'JWD001', 'Nurhayati', 'Jl. Nangka 3', 70, 70, 70),
(1, 'JWD002', 'Mashadi', 'Jl. Madukoro 5', 80, 60, 80),
(2, 'JWD003', 'Murtono', 'Jl. Murbei 10', 80, 70, 75),
(3, 'JWD004', 'Sriyati', 'Jl. Unta 44', 76, 70, 75),
(4, 'JWD005', 'Mustofa', 'Jl. Kelinci 65', 78, 65, 80),
(5, 'JWD006', 'Elsa', 'Jl. Borobudur 30', 50, 45, 40),
(6, 'JWD007', 'Nia Rama', 'Jl. Baskoro 38', 90, 90, 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('adi', '876f200760fd867d0fa3a231358b35c2', 2),
('admin', '937c747295e5bd1c210957c1e2010a0d', 1),
('admin2', 'c84258e9c39059a89ab77d846ddab909', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
