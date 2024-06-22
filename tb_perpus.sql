-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 09:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_perpus`
--

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `deskripsi`, `id_kategori`) VALUES
(12, 'Superman R', 'cacan', 'Gramedug', '2023', 'Menceritakan perjalanan superman', 14),
(13, 'Matematika Kelas 7', 'Dr. Ir. Sutrisno', 'Erlangga', '2021', 'Buku Matematika untuk kelas 7 SMP', 25),
(14, 'Ilmu Pengetahuan Alam Kelas 8', 'Dr. Nur Aini', 'Yudhistira', '2022', 'Buku IPA untuk kelas 8 SMP', 25),
(15, 'Bahasa Indonesia Kelas 9', 'Dr. Sri Rahayu', 'Gramedia', '2021', 'Buku Bahasa Indonesia untuk kelas 9', 25),
(16, 'Pendidikan Jasmani Kelas 7', 'Dr. Budi Santoso', 'Erlangga', '2023', 'Buku PJOK untuk kelas 7 SMP', 25),
(17, 'Pendidikan Pancasila dan Kewarganegaraan Kelas 8', 'Dr. Andi Kurniawan', 'Yudhistira', '2023', 'Buku PPKn untuk kelas 8 SMP', 25),
(18, 'buku as', 'babang', 'irwan', '2024', 'ajkbad', 13);

--
-- Dumping data for table `kategori_buku`
--

INSERT INTO `kategori_buku` (`id_kategori`, `kategori`) VALUES
(13, 'Fiksi'),
(14, 'komika'),
(15, 'ilmu pengetahuan'),
(17, 'teknologi'),
(18, 'Non fiksi'),
(19, 'Sejarah'),
(20, 'Sastra'),
(21, 'Seni dan Desain'),
(22, 'Bisnis dan Manajemen'),
(23, 'Hukum'),
(24, 'Agama dan Spiritualitas'),
(25, 'Pendidikan'),
(28, 'kode');

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_user`, `id_buku`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status_peminjaman`) VALUES
(13, 11, 12, '2024-06-12', '2024-06-14', 'dipinjam'),
(14, 11, 15, '2024-06-10', '2024-06-13', 'dikembalikan'),
(15, 11, 12, '2024-06-10', '2024-06-12', 'dikembalikan'),
(16, 11, 12, '2024-06-10', '2024-06-13', 'dipinjam');

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_user`, `id_buku`, `ulasan`, `rating`) VALUES
(11, 11, 12, 'Buku yang menarik, sangat disarankan untuk dibaca!', 9);

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `user_name`, `password`, `email`, `alamat`, `no_telepon`, `level`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'rizal@gmail.com', 'samarang', '08123123', 'admin'),
(7, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@gmail.com', 'garoet', '08953674542', 'user'),
(10, 'Rizaal', 'Rizaal', '150fb021c56c33f82eef99253eb36ee1', '2206164@itg.ac.id', 'samarang', '82121568600', 'admin'),
(11, 'siswa1', 'peminjam', '55f3894bc5fc71fead8412d321c2952c', 'siswa1@gmail.com', 'samarang', '08123316253', 'peminjam'),
(12, 'melina', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2206164@itg.ac.id', 'samarang', '0821214343', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
