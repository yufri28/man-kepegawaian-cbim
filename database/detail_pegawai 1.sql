-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2023 pada 05.18
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `detail_kepegawaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontrak`
--

CREATE TABLE `kontrak` (
  `id` int(11) NOT NULL,
  `retirement_date` date NOT NULL,
  `jd` date NOT NULL,
  `id_pegawai` varchar(10) NOT NULL,
  `status` enum('PERMANENT','CONTRACT','PKH','KONSULTAN') NOT NULL,
  `active_passive` enum('ACTIVE','PASSIVE') NOT NULL,
  `sk_tetap` text DEFAULT NULL,
  `pkwt` text DEFAULT NULL,
  `tahun` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontrak`
--

INSERT INTO `kontrak` (`id`, `retirement_date`, `jd`, `id_pegawai`, `status`, `active_passive`, `sk_tetap`, `pkwt`, `tahun`) VALUES
(2, '2032-04-14', '2014-06-12', '21140004', 'PERMANENT', 'ACTIVE', '29/Yasn/CBIM/Sk/TK.CB/3/2016,TANGGAL 01 MARET 2016', NULL, NULL),
(3, '2044-02-29', '2014-07-14', '21140003', 'PERMANENT', 'ACTIVE', '50/SK/YASN/CBIM/TK-PAUD.K CB/8/2017, TANGGAL DITETAPKAN 22 AGUSTUS 2017', NULL, NULL),
(4, '2045-08-13', '2014-07-14', '21140002', 'PERMANENT', 'ACTIVE', '51/SK/YASN/CBIM/TK-PAUD.K CB/8/2017, TANGGAL DITETAPKAN 22 AGUSTUS 2017', NULL, NULL),
(5, '2047-06-29', '2014-07-14', '21140005', 'PERMANENT', 'ACTIVE', '029/SK/YASN/CBIM/TK-PAUD.K CB/10/2016, TANGGAL DITETAPKAN 10 JULI 2015;\nSK PENGANGKATAN PENANGGUNG JAWAB PENGELOLA KELOMPOK BERMAIN PADA TAMAN KANAK-KANAK KRISTEN CITRA BANGSA NO: 770/Yasn/CBIM/HK.00.3.K/TK.CB/09/2020, TANGGAL 28 SEPTEMBER 2020', NULL, NULL),
(6, '2036-05-11', '2014-08-04', '21140006', 'PERMANENT', 'ACTIVE', '52/SK/YASN/CBIM/TK-PAUD.K CB/8/2017, TANGGAL DITETAPKAN  22 AGUSTUS 2017', NULL, NULL),
(7, '2049-05-21', '2015-04-17', '21150007', 'PERMANENT', 'ACTIVE', '019/SK/YASN/CBIM/TK-PAUD.K CB/10/2016, TANGGAL DITETAPKAN 24 APRIL 2016', NULL, NULL),
(8, '2047-08-30', '2015-07-06', '21150009', 'PERMANENT', 'ACTIVE', '021/SK/YASN/CBIM/TK-PAUD.K CB/10/2016, TANGGAL DITETAPKAN 06 JULI 2016', NULL, NULL),
(9, '2047-11-25', '2015-08-18', '21150013', 'PERMANENT', 'ACTIVE', '025/SK/YASN/CBIM/TK-PAUD.K CB/10/2016, TANGGAL DITETAPKAN 18 AGUSTUS 2016', NULL, NULL),
(10, '2052-11-23', '2017-07-17', '21170001', 'PERMANENT', 'ACTIVE', '710/Yasn/CBIM/HK.00.3.K/TK.CB/7/2020, Tanggal ditetapkan 30 Juli 2017', '24/YASN/CBIM/TKK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018', NULL),
(11, '2046-03-21', '2017-07-17', '21170002', 'PERMANENT', 'ACTIVE', '711/Yasn/CBIM/HK.00.3.K/TK.CB/7/2020, Tanggal ditetapkan 30 Juli 2017', '25/YASN/CBIM/TKK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018', NULL),
(12, '2028-11-11', '2012-10-01', '22120001', 'PERMANENT', 'ACTIVE', 'KEPSEK SDK CB MULAI 2014\nSK Tetap: 02/SK/Ysn/CBIM/SDK.CB/1/2013, 2 Oktober 2012', NULL, NULL),
(13, '2049-05-08', '2013-07-18', '22130017', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 18 Juli 2013', '', NULL),
(14, '2046-05-23', '2013-07-18', '22130019', 'PERMANENT', 'ACTIVE', '16/SK/YASN/CBIM/SDK.CB/2/2016, Tanggal 18 Februari 2016', '', NULL),
(15, '2030-12-15', '2012-10-01', '22120008', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 19 Juli 2013\n02/SK/Ysn/CBIM/SDK.CB/1/2013, 17 Januari 2013', '', NULL),
(16, '2050-05-30', '2013-07-18', '22130016', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 19 Juli 2013', '', NULL),
(17, '2045-02-22', '2012-10-01', '22120014', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 19 Juli 2013', '', NULL),
(18, '2045-11-03', '2012-10-01', '22120011', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 19 Juli 2013', '', NULL),
(19, '2047-07-14', '2012-10-01', '22120012', 'PERMANENT', 'ACTIVE', '02/SK/Ysn/CBIM/SDK.CB/1/2013, Tanggal 17 Januari 2013', '', NULL),
(20, '2045-05-10', '2012-10-01', '22120010', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 19 Juli 2013', '', NULL),
(21, '2050-06-03', '2014-07-18', '22140020', 'PERMANENT', 'ACTIVE', '173/SK/YASN/CBIM/SD.K.CB/07/2014, Tanggal 12 Juli 2014;\n17/Sk/Yasn/CBIM/SDK.CB/2/2016, Tanggal 18 Feb 2016', '', NULL),
(22, '2043-02-24', '2014-07-18', '22140021', 'PERMANENT', 'ACTIVE', '18/SK/Yasn/CBIM/SDK.CB/2/2016, 18 Februari 2016', '', NULL),
(23, '2036-03-04', '2012-10-01', '12120004', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 19 Juli 2013', '', NULL),
(24, '2044-01-20', '2012-10-01', '12120009', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 19 Juli 2013', '', NULL),
(25, '2037-08-28', '2012-10-01', '12120013', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 19 Juli 2013', '', NULL),
(26, '2045-09-20', '2015-04-17', '22150019', 'PERMANENT', 'ACTIVE', 'Skp.42/Ysn/CBIM/SD.K.CB/4/2016, Tanggal 26 April 2016', '', NULL),
(27, '2050-07-12', '2015-07-06', '22150021', 'PERMANENT', 'ACTIVE', '40/SK/YASN/CBIM/SD.K CB/07/2017, Tanggal 26 JULI 2017', '', NULL),
(28, '2043-02-18', '2015-08-18', '22150026', 'PERMANENT', 'ACTIVE', '42/SK/YASN/CBIM/SD.K.CB/7/2017, Tanggal 27 JULI 2017', '', NULL),
(29, '2022-10-27', '2015-09-14', '22150028', 'CONTRACT', 'ACTIVE', '707/Yasn/CBIM/HK.00.3.K/SDK.CB/7/2020,Tanggal 30 Juli 2020', 'CONTRACT MULAI 27 Oktober 2022 sd 27 Oktober 2024', NULL),
(30, '2038-01-23', '2015-10-01', '22150029', 'PERMANENT', 'ACTIVE', '15/SK/YASN/CBIM/SD.K.CB/I/2018, Tanggal 26 Januari 2018', '', NULL),
(31, '2053-09-05', '2016-07-01', '22160002', 'PERMANENT', 'ACTIVE', '178/SK/YASN/CBIM/SD.K.CB/7/2018, 27 Juli 2018;\n53/Sk/Yasn/CBIM/SD.K.CB/11/2015, Tanggal 30 Nov 2015', '', NULL),
(32, '2054-05-10', '2016-07-01', '22160003', 'PERMANENT', 'ACTIVE', '14/SK/YASN/CBIM/SD.K.CB/11/2018, Tanggal 1 November 2018', '', NULL),
(33, '2048-06-13', '2016-07-01', '22160004', 'PERMANENT', 'ACTIVE', '435/YASN/CBIM/HK.00.3.K/SDK.CB/9/2019, 19 September 2019', '', NULL),
(34, '2053-01-22', '2017-07-17', '22170002', 'PERMANENT', 'ACTIVE', '706/Yasn/CBIM/HK.00.3.K/SDK.CB/7/2020, Tanggal 30 Juli 2020', '17/YASN/CBIM/SDK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018', NULL),
(35, '2051-06-22', '2017-07-17', '22170004', 'PERMANENT', 'ACTIVE', '573/Yasn/CBIM/HK.00.3.K/SDK.CB/7/2020,Tanggal 30 Juli 2020', '19/YASN/CBIM/SDK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018', NULL),
(36, '2051-10-13', '2017-07-17', '22170005', 'PERMANENT', 'ACTIVE', '709/Yasn/CBIM/HK.00.3.K/SDK.CB/7/2020,Tanggal DITETAPKAN 30 Juli 2020', '20/YASN/CBIM/SDK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018', NULL),
(37, '2047-03-13', '2017-07-17', '22170008', 'PERMANENT', 'ACTIVE', '704/Yasn/CBIM/HK.00.3.K/SDK.CB/7/2020,Tanggal 30 Juli 2020', '23/YASN/CBIM/SDK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018', NULL),
(38, '2051-04-08', '2017-07-17', '22170010', 'PERMANENT', 'ACTIVE', '569/Yasn/CBIM/HK.00.3.K/SDK.CB/6/2020,Tanggal 17 Juni 2020', '50/YASN/CBIM/SDK-CB/10/2017, TANGGAL 11 OKTOBER S/D 10 OKTOBER 2018', NULL),
(39, '2054-04-01', '2018-07-02', '22180002', 'PERMANENT', 'ACTIVE', '718/Yasn/CBIM/HK.00.3.K/SDK.CB/8/2020,Tanggal 17 Agustus 2020', '75/YASN/CBIM/ADM/7/2018, TANGGAL 02 JULI 2018 S/D 01 JULI 2019', NULL),
(40, '2052-10-17', '2019-02-04', '22190001', 'PERMANENT', 'ACTIVE', '48/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/02/2021, TANGGAL DITETAPKAN 8 FEB 2021', '', NULL),
(41, '2047-04-14', '2019-02-07', '22190003', 'PERMANENT', 'ACTIVE', '47/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/02/2021, TANGGAL DITETAPKAN 8 FEB 2021', '', NULL),
(42, '2054-06-14', '2019-03-25', '22190004', 'PERMANENT', 'ACTIVE', '97/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/05/2021, TANGGAL DITETAPKAN 11 MEI 2021', '', NULL),
(43, '2056-12-05', '2019-03-25', '22190005', 'PERMANENT', 'ACTIVE', '96/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/05/2021, TANGGAL DITETAPKAN 11 MEI 2021', '', NULL),
(44, '2051-02-12', '2019-07-15', '22190008', 'PERMANENT', 'ACTIVE', '718/Yasn/CBIM/HK.00.3.K/SDK.CB/8/2020,Tanggal 17 Agustus 2020', '', NULL),
(45, '2054-08-24', '2019-07-15', '22190009', 'PERMANENT', 'ACTIVE', '145/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(46, '2051-04-04', '2019-07-15', '21160001', 'PERMANENT', 'ACTIVE', 'SK MUTASI 414/Yasn/CBIM/HK/00.3.K/VII/2019, 15 JULI 2019', '', NULL),
(47, '2056-06-21', '2019-07-15', '22190012', 'PERMANENT', 'ACTIVE', '147/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(48, '2057-07-11', '2019-07-15', '22190013', 'PERMANENT', 'ACTIVE', '146/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(49, '2054-05-07', '2019-07-15', '22190014', 'PERMANENT', 'ACTIVE', '144/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(50, '2050-12-24', '2019-07-15', '12190015', 'PERMANENT', 'ACTIVE', '142/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(51, '2049-03-16', '2019-09-11', '22190016', 'PERMANENT', 'ACTIVE', '86/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/02/2022, Tanggal 16 Februari 2022', 'dibuatkan SK Pengangkatan Guru Tetap sesuai arahan CEO (15 feb 2022) prioritaskan utk guru-guru yang urus NUPTK,dan ikut PPG', NULL),
(52, '2055-05-30', '2019-09-18', '22190017', 'PERMANENT', 'ACTIVE', '87/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/02/2022, Tanggal 16 Februari 2022', 'dibuatkan SK Pengangkatan Guru tetap sesuai arahan CEO (15 feb 2022) prioritaskan utk guru-guru yang urus NUPTK,dan ikut PPG', NULL),
(53, '2051-02-07', '2020-07-13', '22200002', 'PERMANENT', 'ACTIVE', '260/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/06/2022, TANGGAL DITETAPKAN 27 Juni 2022', '', NULL),
(54, '2054-06-28', '2021-01-06', '22210001', 'PERMANENT', 'ACTIVE', '3b/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/03/2022', 'Berdasarkan arahan ceo (15 feb 2022) dibuatkan SK tetap sesuai tahun PKWT utk administrasi PPG dan sk pengangkatan 2 tahun terakhir (2021-2022), (2021-2022)', NULL),
(55, '2058-03-16', '2021-08-23', '22210002', 'PERMANENT', 'ACTIVE', '270/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/07/2022, Tanggal 27 Juli 2022', '', NULL),
(56, '2056-02-05', '2022-01-05', '22220001', 'PERMANENT', 'ACTIVE', '401/Yasn/CBIM/HK.00.3.K/SDK.CBM/12/2022,Tanggal 16 Desember 2022', '', NULL),
(57, '2057-11-16', '2022-01-31', '22220002', 'PERMANENT', 'ACTIVE', '14/SK/Yasn/CBIM/HK.00.3.K/SDK.CBM/01/2023, Tanggal 25 Januari 2023', '', NULL),
(58, '2058-06-14', '2022-02-14', '22220003', 'PERMANENT', 'ACTIVE', '45/Yasn/CBIM/HK.00.3.K/SDK.CBM/2/2023,Tanggal 13 Februari 2023', '', NULL),
(59, '2055-10-13', '2022-02-14', '22220004', 'PERMANENT', 'ACTIVE', '44/Yasn/CBIM/HK.00.3.K/SDK.CB/2/2023,Tanggal 13 Februari 2023', '', NULL),
(60, '2057-03-03', '2023-08-01', '22230002', 'CONTRACT', 'ACTIVE', '', '218/Yasn/CBIM/SD/KA.00.2/08/2023, tanggal 01 Agustus 2023 s/d 01 Agustus 2024', NULL),
(61, '2027-03-26', '2012-10-01', '23120001', 'PERMANENT', 'ACTIVE', 'KEPSEK SMPK CB TMT 2013-07-18', '', NULL),
(62, '2041-05-25', '2013-07-18', '23130004', 'PERMANENT', 'ACTIVE', '700/Yasn/CBIM/HK.00.3.K/SMPK.CB/07/2020,Tanggal 30 Juli 2020', '', NULL),
(63, '2049-11-03', '2013-07-18', '23130003', 'PERMANENT', 'ACTIVE', '', '', NULL),
(64, '2049-09-02', '2013-07-18', '23130007', 'PERMANENT', 'ACTIVE', '404/Yasn/CBIM/HK.00.3.K/9/2019, 16 Agustus 2019', '', NULL),
(65, '2050-03-07', '2014-07-15', '23140009', 'PERMANENT', 'ACTIVE', '82/YASN/CBIM/SK/7/2016, 1 Juli 2016', '', NULL),
(66, '2043-07-20', '2015-05-02', '23150013', 'PERMANENT', 'ACTIVE', '81/Yasn/CBIM/SK/7/2016, 1 JULI 2016', '', NULL),
(67, '2046-02-14', '2015-07-01', '23150010', 'PERMANENT', 'ACTIVE', '79/Yasn/CBIM/SK/7/2016, 1 JULI 2016', '', NULL),
(68, '2051-02-17', '2015-11-03', '23150015', 'PERMANENT', 'ACTIVE', '13/SK/YASN/CBIM/SMP.K.CB/I/2018, TANGGAL 24 JANUARI 2018', '', NULL),
(69, '2051-06-25', '2016-07-11', '23160006', 'PERMANENT', 'ACTIVE', '42/SK/YASN/CBIM/SMP.K.CB/IV/2018, TANGGAL 16 APRIL 2018', '', NULL),
(70, '2050-08-09', '2016-09-15', '23160007', 'PERMANENT', 'ACTIVE', ' 310/YASN/CBIM/HK.003.K/SMPK.CB/6/2019 TANGGAL 20 JUNI 2019', '', NULL),
(71, '2050-02-02', '2017-01-06', '23170002', 'PERMANENT', 'ACTIVE', '40/SK/YASN/CBIM/SMP.K.CB/IV/2018, TANGGAL 16 APRIL 2018', '', NULL),
(72, '2051-09-14', '2017-07-17', '23170004', 'PERMANENT', 'ACTIVE', '703/Yasn/CBIM/HK.00.3.K/SMPK.CB/07/2020,Tanggal 30 Juli 2020', '28/YASN/CBIM/SMPK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018', NULL),
(73, '2029-02-18', '2017-11-30', '23170011', 'PERMANENT', 'ACTIVE', '257/SK/Yasn/CBIM/HK.00.3.K/ SMPK.CB / 06 / 2022,tmt 23 juni 2022', '53/YASN/CBIM/SMP-K CB/12/2017, TANGGAL 04 DESEMBER 2017 S/D 03 DESEMBER 2018', NULL),
(74, '2056-03-11', '2018-07-02', '23180005', 'PERMANENT', 'ACTIVE', '702/Yasn/CBIM/HK.00.3.K/SMPK.CB/07/2020,Tanggal 30 Juli 2020', '78/YASN/CBIM/ADM/7/2018, TANGGAL 02 JULI 2018 S/D 01 JULI 2019', NULL),
(75, '2049-12-26', '2018-08-01', '23180009', 'PERMANENT', 'ACTIVE', '697/Yasn/CBIM/HK.00.3.K/SMPK/CB/08/2020,Tanggal 16 Agustus 2020', '102/YASN/CBIM/ADM/08/2018, TANGGAL 01 AGUSTUS 2018 S/D 31 JULI 2019', NULL),
(76, '2057-01-19', '2019-03-01', '23190003', 'PERMANENT', 'ACTIVE', '27/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', '', NULL),
(77, '2055-12-04', '2019-03-01', '23190004', 'PERMANENT', 'ACTIVE', '28/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', '', NULL),
(78, '2055-07-25', '2019-03-01', '23190005', 'PERMANENT', 'ACTIVE', '31/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', '', NULL),
(79, '2052-04-30', '2019-03-01', '23190006', 'PERMANENT', 'ACTIVE', '32/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', '', NULL),
(80, '2051-11-27', '2019-03-01', '23190007', 'PERMANENT', 'ACTIVE', '34/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', '', NULL),
(81, '2055-04-12', '2019-03-01', '23190008', 'PERMANENT', 'ACTIVE', '30/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', '', NULL),
(82, '2054-12-15', '2019-03-01', '23190009', 'PERMANENT', 'ACTIVE', '29/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', '', NULL),
(83, '2051-06-09', '2019-03-01', '23190010', 'PERMANENT', 'ACTIVE', '33/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', '', NULL),
(84, '2052-02-12', '2019-03-18', '23190011', 'PERMANENT', 'ACTIVE', '35/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', '', NULL),
(85, '2046-03-28', '2019-03-18', '13190012', 'PERMANENT', 'ACTIVE', '36/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', '', NULL),
(86, '2052-10-14', '2019-07-15', '23190014', 'PERMANENT', 'ACTIVE', '74/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', '', NULL),
(87, '2053-03-05', '2019-07-15', '23190015', 'PERMANENT', 'ACTIVE', '69/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', '', NULL),
(88, '2054-09-14', '2019-07-15', '23190017', 'PERMANENT', 'ACTIVE', '79/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', '', NULL),
(89, '2053-11-16', '2019-07-15', '23190018', 'PERMANENT', 'ACTIVE', '81/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', '', NULL),
(90, '2049-02-23', '2019-07-15', '23190019', 'PERMANENT', 'ACTIVE', '75/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', '', NULL),
(91, '2050-06-03', '2019-07-15', '23190020', 'PERMANENT', 'ACTIVE', '76/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', '', NULL),
(92, '2051-10-07', '2019-07-15', '23190021', 'PERMANENT', 'ACTIVE', '71/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', '', NULL),
(93, '2054-08-04', '2019-07-15', '23190022', 'PERMANENT', 'ACTIVE', '72/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', '', NULL),
(94, '2055-01-11', '2019-07-15', '23190023', 'PERMANENT', 'ACTIVE', '78/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', '', NULL),
(95, '2048-08-04', '2019-07-15', '23190024', 'PERMANENT', 'ACTIVE', '77/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', '', NULL),
(96, '2055-06-21', '2019-07-15', '23190025', 'PERMANENT', 'ACTIVE', '80/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', '', NULL),
(97, '2055-07-16', '2019-07-15', '23190026', 'PERMANENT', 'ACTIVE', '82/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', '', NULL),
(98, '2053-09-14', '2019-08-01', '23190027', 'PERMANENT', 'ACTIVE', '83/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', '', NULL),
(99, '2051-03-20', '2019-08-07', '23190028', 'PERMANENT', 'ACTIVE', '73/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', '', NULL),
(100, '2053-03-05', '2019-11-08', '23190029', 'PERMANENT', 'ACTIVE', '84/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', '', NULL),
(101, '2052-06-26', '2020-01-20', '23200001', 'PERMANENT', 'ACTIVE', '85/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', '', NULL),
(102, '2050-03-20', '2020-07-01', '21150011', 'PERMANENT', 'ACTIVE', 'SK MUTASI 606/YASN/CBIM/HK.00.3.K/VII/2020, 30 JUNI 2020', '', NULL),
(103, '2046-05-08', '2020-07-06', '23200002', 'PERMANENT', 'ACTIVE', '252 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 06 / 2022,tmt 23 juni 2022', '', NULL),
(104, '2050-04-29', '2020-07-06', '23200003', 'PERMANENT', 'ACTIVE', '253 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 06 / 2022,tmt 23 juni 2022', '', NULL),
(105, '2055-12-31', '2020-07-06', '23200004', 'PERMANENT', 'ACTIVE', '254 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 06 / 2022,tmt 23 juni 2022', '', NULL),
(106, '2058-09-17', '2021-01-25', '23210001', 'PERMANENT', 'ACTIVE', '21 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 01 / 2023,tmt 25 Januari 2023', '', NULL),
(107, '2053-02-10', '2021-01-25', '23210002', 'PERMANENT', 'ACTIVE', '20 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 01 / 2023,tmt 25 Januari 2023', '', NULL),
(108, '2050-04-21', '2021-01-25', '23210003', 'PERMANENT', 'ACTIVE', '17 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 01 / 2023,tmt 25 Januari 2023', '', NULL),
(109, '2051-07-25', '2021-02-15', '23210004', 'PERMANENT', 'ACTIVE', '46/Yasn/CBIM/HK.00.3.K/SDK.CBM/2/2023,Tanggal 13 Februari 2023', '', NULL),
(110, '2058-09-24', '2021-07-05', '23210005', 'PERMANENT', 'ACTIVE', '255 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 06 / 2022,tmt 23 juni 2022', '', NULL),
(111, '2058-05-05', '2021-07-13', '23210006', 'PERMANENT', 'ACTIVE', '256 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 06 / 2022,tmt 23 juni 2022', '', NULL),
(112, '2057-01-20', '2022-01-31', '23220001', 'PERMANENT', 'ACTIVE', '18 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 01 / 2023,tmt 25 Januari 2023', '', NULL),
(113, '2055-07-11', '2022-01-31', '23220002', 'PERMANENT', 'ACTIVE', '19 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 01 / 2023,tmt 25 Januari 2023', '', NULL),
(114, '2056-01-01', '2022-01-31', '23220003', 'CONTRACT', 'ACTIVE', '', '23/Yasn/CBIM/K.A.002/1/2023 tanggal 31 Jan 2023 s/d 31 Jan 2024', NULL),
(115, '2049-10-31', '2022-10-25', '23220004', 'CONTRACT', 'ACTIVE', '', '364/Yasn/CBIM/SMP/K.A.002/10/2022 tanggal 25 Okt 2022 s/d 25 Okt 2023', NULL),
(116, '2051-04-05', '2023-01-09', '23230001', 'CONTRACT', 'ACTIVE', '', '387/Yasn/CBIM/KA.00.2.K/11/2022 (PKH) tmt 14 nov 2022\n405B/Yasn/CBIM/KA.00.2.K/12/2022 tmt 9 januari 2023 s/d 9 Januari 2024', NULL),
(117, '2035-03-01', '2013-07-18', '23130008', 'PERMANENT', 'ACTIVE', '79a/CBIM/SMP.K/CB/11/2014, TANGGAL 15 NOVEMBER 2014', 'SK KEPALA SEKOLAH 50/SK/Ysn/CBIM/SMA.K-CB/05/2016, 1 JUNI 2016', NULL),
(118, '2046-01-02', '2016-01-04', '24160001', 'PERMANENT', 'ACTIVE', '04/SK/YASN/CBIM/SMA.K.CB/I/2018, TANGGAL 5 JANUARI 2018', '', NULL),
(119, '2051-08-06', '2017-01-06', '24170001', 'PERMANENT', 'ACTIVE', '683/Yasn/CBIM/HK.00.3.K/SMA.K.CB/7/2020,Tanggal 30 Juli 2020', '', NULL),
(120, '2055-03-08', '2017-01-06', '24170004', 'PERMANENT', 'ACTIVE', '684/Yasn/CBIM/HK.00.3.K/SMA.K.CB/7/2020,Tanggal 30 Juli 2020', '06/YASN/CBIM/SMAK/-CB/1/2017, TANGGAL 06 JANUARI 2017 05 JANUARI 2018', NULL),
(121, '2049-05-23', '2017-07-17', '24170006', 'PERMANENT', 'ACTIVE', '685/Yasn/CBIM/HK.00.3.K/SMA.K.CB/7/2020,Tanggal 30 Juli 2020', '32/YASN/CBIM/SMAK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018', NULL),
(122, '2050-07-23', '2017-07-17', '24170007', 'PERMANENT', 'ACTIVE', '680/Yasn/CBIM/HK.00.3.K/SMA.K.CB/7/2020,Tanggal 30 Juli 2020', '33/YASN/CBIM/SMAK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018', NULL),
(123, '2051-08-02', '2017-07-17', '24170008', 'PERMANENT', 'ACTIVE', '241/SK/YASN/CBIM/SMA.K.CB/3/2019, TANGGAL 2019-03-19', '', NULL),
(124, '2052-01-18', '2018-01-08', '24180001', 'PERMANENT', 'ACTIVE', '506/YASN/CBIM/HK.00.3.K/SMA.K.CB/I/2020, 10 JANUARI 2020', '02/YASN/CBIM/SMAK-CB/01/2018, TANGGAL 08 JANUARI S/D 07 JANUARI 2019', NULL),
(125, '2055-09-28', '2018-01-08', '24180002', 'PERMANENT', 'ACTIVE', '687/Yasn/CBIM/HK.00.3.K/SMA.K.CB/7/2020,Tanggal 30 Juli 2020', '90/YASN/CBIM/ADM/5/2018, TANGGAL 08 MEI 2018 S/D 07 MEI 2019', NULL),
(126, '2053-04-28', '2018-07-02', '24180004', 'PERMANENT', 'ACTIVE', '634/YASN/CBIM/HK.00.3.K/SMA.K.CB/7/2020, 8 JULI 2020', '83/YASN/CBIM/ADM/VI/2018, TANGGAL 02 JULI 2018 S/D 01 JULI 2019', NULL),
(127, '2054-01-04', '2018-08-01', '24180007', 'PERMANENT', 'ACTIVE', '682/Yasn/CBIM/HK.00.3.K/SMA.K.CB/8/2020,Tanggal 01 Agustus 2020', '103/YASN/CBIM/ADM/08/2018, TANGGAL 01 AGUSTUS 2018 S/D 31 JULI 2019', NULL),
(128, '2051-11-02', '2018-08-09', '24180008', 'PERMANENT', 'ACTIVE', '688/Yasn/CBIN/HK.00.3.K/SMA.K.CB/7/2020,Tanggal 30 Juli 2020', '202/YASN/CBIM/ADM/2/2019, TANGGAL 08 FEBRUARI 2019 S/D 07 FEBRUARI 2020', NULL),
(129, '2052-05-26', '2019-02-08', '24190001', 'PERMANENT', 'ACTIVE', '25/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/01/2021, Tanggal 14 Januari 2021', '', NULL),
(130, '2051-05-03', '2019-03-01', '24190003', 'PERMANENT', 'ACTIVE', '23/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/01/2021, Tanggal 14 Januari 2021', '', NULL),
(131, '2051-01-05', '2019-03-19', '24190004', 'PERMANENT', 'ACTIVE', '24/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/01/2021, Tanggal 14 Januari 2021', '', NULL),
(132, '2044-07-25', '2019-07-15', '24190005', 'PERMANENT', 'ACTIVE', '134/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2023, Tanggal 23 Maret 2022', '', NULL),
(133, '2055-04-07', '2019-07-15', '24190006', 'PERMANENT', 'ACTIVE', '131/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(134, '2052-05-12', '2019-07-15', '24190008', 'PERMANENT', 'ACTIVE', '130/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(135, '2054-12-23', '2019-07-15', '24190013', 'PERMANENT', 'ACTIVE', '126/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(136, '2051-09-12', '2019-07-15', '24190014', 'PERMANENT', 'ACTIVE', '136/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(137, '2053-09-01', '2019-07-15', '24190015', 'PERMANENT', 'ACTIVE', '135/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(138, '2053-11-19', '2019-07-15', '24190016', 'PERMANENT', 'ACTIVE', '128/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(139, '2055-12-06', '2019-07-15', '24190017', 'PERMANENT', 'ACTIVE', '137/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(140, '2052-01-30', '2019-07-15', '24190018', 'PERMANENT', 'ACTIVE', '129/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(141, '2051-12-13', '2019-07-15', '14190019', 'PERMANENT', 'ACTIVE', '141/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', 'ROTASI MENJADI ADMIN PER 2020-07-01', NULL),
(142, '2056-10-03', '2019-07-15', '24190020', 'PERMANENT', 'ACTIVE', '133/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(143, '2048-07-27', '2019-07-15', '24190021', 'PERMANENT', 'ACTIVE', '138/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(144, '2053-05-20', '2019-07-29', '24190022', 'PERMANENT', 'ACTIVE', '127/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(145, '2048-04-16', '2019-07-29', '24190023', 'PERMANENT', 'ACTIVE', '132/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(146, '2053-05-22', '2019-11-27', '24190024', 'PERMANENT', 'ACTIVE', '125/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', '', NULL),
(147, '2040-01-25', '2020-07-01', '21150010', 'PERMANENT', 'ACTIVE', 'PERPUSTAKAAN (01 JULI 2O20)\nSK MUTASI 605/YASN/CBIM/HK.00.3/VII/2020\nINSTRUKSI PAK JACK JOHANES SBG WAKET YYSN', '', NULL),
(148, '2053-11-03', '2020-07-06', '24200001', 'PERMANENT', 'ACTIVE', '254/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/06/2022, Tanggal 23 Juni 2022', '', NULL),
(149, '2056-04-10', '2020-07-06', '24200002', 'PERMANENT', 'ACTIVE', '252/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/06/2022, Tanggal 23 Juni 2022', '', NULL),
(150, '2056-01-11', '2020-07-06', '24200003', 'PERMANENT', 'ACTIVE', '253/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/06/2022, Tanggal 23 Juni 2022', '', NULL),
(151, '2052-03-23', '2020-07-13', '24200005', 'PERMANENT', 'ACTIVE', '255/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/06/2022, Tanggal 23 Juni 2022', '', NULL),
(152, '2057-05-06', '2020-12-01', '24200007', 'PERMANENT', 'ACTIVE', '396/Yasn/CBIM/HK.00.3.K/SMAK.CBM/12/2022, Tanggal 01 Desember 2022', '', NULL),
(153, '2048-03-10', '2021-01-11', '24210001', 'PERMANENT', 'ACTIVE', '408/Yasn/CBIM/HK.00.3.K/SMAK.CBM/12/2022, Tanggal 16 Desember 2022', '', NULL),
(154, '2058-05-15', '2021-07-05', '24210003', 'PERMANENT', 'ACTIVE', '184/Yasn/CBIM/HK.00.3.K/SMAK.CB/07/2023, Tanggal 03 Juli 2023', '', NULL),
(155, '2056-08-15', '2021-07-05', '24210004', 'PERMANENT', 'ACTIVE', '185/Yasn/CBIM/HK.00.3.K/SMAK.CB/07/2023, Tanggal 03 Juli 2023', '', NULL),
(156, '2050-04-06', '2021-07-05', '24210005', 'PERMANENT', 'ACTIVE', '187/Yasn/CBIM/HK.00.3.K/SMAK.CB/07/2023, Tanggal 03 Juli 2023', '', NULL),
(157, '2056-08-07', '2021-07-05', '24210006', 'PERMANENT', 'ACTIVE', '186/Yasn/CBIM/HK.00.3.K/SMAK.CB/07/2023, Tanggal 03 Juli 2023', '', NULL),
(158, '2048-04-02', '2021-07-05', '24210007', 'PERMANENT', 'ACTIVE', '188/Yasn/CBIM/HK.00.3.K/SMAK.CB/07/2023, Tanggal 03 Juli 2023', '', NULL),
(159, '2056-03-25', '2022-01-05', '24220001', 'PERMANENT', 'ACTIVE', '409/Yasn/CBIM/HK.00.3.K/SMAK.CBM/12/2022, Tanggal 16 Desember 2022', '', NULL),
(160, '2057-12-13', '2022-01-25', '24220002', 'PERMANENT', 'ACTIVE', '13/Yasn/CBIM/HK.00.3.K/SMAK.CBM/01/2023, Tanggal 25 Januari 2023', '', NULL),
(161, '2053-03-24', '2022-01-25', '24220003', 'PERMANENT', 'ACTIVE', '15/Yasn/CBIM/HK.00.3.K/SMAK.CBM/01/2023, Tanggal 25 Januari 2023', '', NULL),
(162, '2056-02-18', '2022-01-25', '24220004', 'PERMANENT', 'ACTIVE', '12/Yasn/CBIM/HK.00.3.K/SMAK.CBM/01/2023, Tanggal 25 Januari 2023', '', NULL),
(163, '2058-02-16', '2022-04-04', '24220005', 'PERMANENT', 'ACTIVE', '95/Yasn/CBIM/HK.00.3.K/SMAK.CBM/04/2023, Tanggal 03 April 2023', '', NULL),
(164, '2051-05-05', '1905-07-10', '10200003', '', 'ACTIVE', 'OWNER', '', NULL),
(165, '2025-05-11', '2020-08-25', '07080101', '', 'ACTIVE', 'BERDASARKAN SK DEWAN PEMBINA', '', NULL),
(166, '2012-06-02', '2013-02-01', '10130001', '', 'ACTIVE', '01/SK/Ysn/CBIM/Adm/01/2015, TANGGAL 12 JANUARI 2015 ', '', NULL),
(167, '2009-12-04', '2010-01-07', '10100001', '', 'ACTIVE', 'BERDASARKAN AKTA PENDIRIAN YAYASAN', '', NULL),
(168, '2020-11-14', '2007-07-31', '10070001', '', 'ACTIVE', 'BERDASARKAN AKTA PENDIRIAN YAYASAN', '', NULL),
(169, '2011-12-20', '2019-02-01', '10190003', '', 'ACTIVE', 'BERDASARKAN SK PERUBAHAN JABATAN DEWAN PENGURUS YAYASAN NO: 279/SK/YASN/CBIM/ADM/4/2019', '', NULL),
(170, '2049-06-18', '1905-07-10', '10200004', '', 'ACTIVE', 'OWNER', '', NULL),
(171, '0000-00-00', '2018-10-25', '10180007', 'KONSULTAN', 'ACTIVE', '', '', NULL),
(172, '2031-09-05', '1997-07-07', '10070002', 'PERMANENT', 'ACTIVE', '178b/SK/Yasn/CBIM/KA.00.3.K/04/2022 (tmt 11 april 2022)\n246//SK/Yasn/CBIM/KA.00.3.K/06/2022 (tmt 21 Juni 2022) Perubahan jenjang pendidikan dari SMA ke S1', '275/SK/Yasn/CBIM/HK.00.3.K/08/2022 (TMT 01082022-01082023) SK Jabatan Plt Kadiv KEU', NULL),
(173, '2034-05-05', '0000-00-00', '10070004', 'PERMANENT', 'ACTIVE', '181/SK/Yasn/CBIM/KA.00.3.K/04/2022 (tmt 12 april 2022)', '', NULL),
(174, '2042-04-13', '2008-02-04', '10080001', 'PERMANENT', 'ACTIVE', '171/SK/Yasn/CBIM/KA.00.3.K/04/2022 (tmt 11 april 2022)', '', NULL),
(175, '2043-12-10', '2014-02-01', '10140001', 'PERMANENT', 'ACTIVE', '353/YASN/CBIM/HK.00.3.K/10/2022, 25OKTOBER 2022', '', NULL),
(176, '2037-10-26', '2015-02-23', '10150001', 'PERMANENT', 'ACTIVE', '24/YSN/CBIM/ADM/03/2016, TANGGAL 23 APRIL 2016', '', NULL),
(177, '2044-02-27', '2015-05-04', '10150008', 'PERMANENT', 'ACTIVE', '228/SK/YASN/CBIM/KA.00.3.K/06/2022 (tmt 06 juni 2022)', '', NULL),
(178, '2052-06-26', '2015-05-11', '10150009', 'PERMANENT', 'ACTIVE', '20/YASN/CBIM/ADM/IV/2017, TANGGAL 11 MEI 2017', '', NULL),
(179, '2012-03-22', '2015-04-20', '10150006', 'CONTRACT', 'ACTIVE', '471/YASN/CBIM/HK.00.3.K/10/2019, 28 OKTOBER 2019', 'SK PHK USIA PENSIUN 309/Yasn/CBIM/KA.00.8.K/12/2021 TMT 02 JANUARI 2022', NULL),
(180, '2022-06-22', '2015-05-07', '10150010', 'CONTRACT', 'ACTIVE', '192/SK/YASN/CBIM/ADM/II/2019, TANGGAL 1 FEBRUARI 2019', '', NULL),
(181, '2045-05-03', '2016-07-19', '10160003', 'PERMANENT', 'ACTIVE', '76/SK/YASN/CBIM/ADM/IV/2017, TANGGAL 08 NOVEMBER 2017', '', NULL),
(182, '2045-02-21', '2016-11-01', '10160009', 'PERMANENT', 'ACTIVE', '431/YASN/CBIM/HK.00.6.K/09/2019, 11 SEPTEMBER 2019', '', NULL),
(183, '2044-08-12', '2017-06-08', '10170002', 'PERMANENT', 'ACTIVE', '306/YASN/CBIM/HK.00.3.K/5/2019, TANGGAL 10 JUNI 2019', '14/YASN/CBIM/ADM/6/2017, TANGGAL 08 JUNI 2017 S/D 07 JUNI 2018', NULL),
(184, '2050-02-01', '2018-01-08', '10180001', 'PERMANENT', 'ACTIVE', '231/SK/YASN/CBIM/KA.00.3.K/06/2022 (tmt 06 juni 2022)', '01/YASN/CBIM/ADM-KEU/01/2018, TANGGAL 08 JANUARI S/D 07 JANUARI 2019', NULL),
(185, '2044-12-22', '2018-08-06', '10180005', 'PERMANENT', 'ACTIVE', '261/SK/YASN/CBIM/HK.00.3.K/07/2022 (tmt 08 Juli 2022)', '116/YASN/CBIM/ADM/8/2018, TANGGAL 06 AGUSTUS 2018 S/D 05 AGUSTUS 2019', NULL),
(186, '2043-05-03', '2018-09-17', '10180006', 'PERMANENT', 'ACTIVE', '65/SK/YASN/CBIM/HK.00.3.K/03/2023 (tmt 01 Maret 2023)', '117/YASN/CBIM/ADM/9/2018, TANGGAL 17 SEPTEMBER S/D 16 SEPTEMBER 2019', NULL),
(187, '2025-09-12', '2007-07-31', '10070005', 'PERMANENT', 'ACTIVE', '176/SK/Yasn/CBIM/KA.00.3.K/04/2022 (tmt 11 april 2022)', '', NULL),
(188, '2051-03-20', '2019-02-01', '10190001', 'PERMANENT', 'ACTIVE', '235/SK/YASN/CBIM/KA.00.3.K/06/2022 (tmt 06 juni 2022)', '', NULL),
(189, '2051-07-16', '2019-09-11', '10190004', 'PERMANENT', 'ACTIVE', '230/SK/YASN/CBIM/KA.00.3.K/06/2022 (tmt 06 juni 2022)', '', NULL),
(190, '2054-01-16', '2020-02-06', '10200002', 'PERMANENT', 'ACTIVE', '16/SK/Yasn/CBIM/HK.00.3.K/01/2022, tmt 25 Januari 2023', '', NULL),
(191, '2025-06-19', '2007-07-31', '07080109', 'PERMANENT', 'ACTIVE', '174/SK/Yasn/CBIM/KA.00.3.K/04/2022 (tmt 11 april 2022)', '', NULL),
(192, '2042-06-13', '2020-09-22', '10200005', 'PERMANENT', 'ACTIVE', 'INSTRUKSI OWNER TGL 21 SEPTEMBER 2020, UTK BANTU PAK SIMON DAN PAK SAM LITTIK SELAMA 3BULAN\n27/SK/YASN/CBIM/KA.00.3.K/11/2020, tmt 27 November 2020', '', NULL),
(193, '2050-04-26', '2020-12-07', '10200007', 'PERMANENT', 'ACTIVE', '395/YASN/CBIM/HK.00.3.K/12/2022, tmt 1 Desember 2022', '', NULL),
(194, '2020-05-28', '2021-08-01', '10210002', 'CONTRACT', 'ACTIVE', '170/YASN/CBIM/HK.00.3.K/08/2021 (KONTRAK 1TAHUN)', '', NULL),
(195, '2052-09-17', '2021-03-12', '10210001', 'PKH', 'ACTIVE', '', '', NULL),
(196, '2040-05-16', '2008-12-18', '10080002', 'PERMANENT', 'ACTIVE', '177/SK/Yasn/CBIM/KA.00.3.K/04/2022 (tmt 11 april 2022)', '', NULL),
(197, '2022-05-24', '2007-07-31', '10070006', 'CONTRACT', 'ACTIVE', '175/SK/Yasn/CBIM/KA.00.3.K/04/2022 (tmt 11 april 2022)', '', NULL),
(198, '2028-09-06', '2007-07-31', '10070007', 'PERMANENT', 'ACTIVE', '279/SK/Yasn/CBIM/KA.00.3.K/10/2021 (tmt 22 oktober 2021)', '', NULL),
(199, '2052-08-03', '2021-11-22', '10210003', 'CONTRACT', 'ACTIVE', 'Replacement pak marcho', '', NULL),
(200, '2053-07-03', '2022-01-05', '10220001', 'CONTRACT', 'ACTIVE', 'Penambahan Staff Hardware berdasarkan arahan CEO', '', NULL),
(201, '2053-07-03', '2022-01-05', '10070009', 'CONTRACT', 'ACTIVE', 'Penambahan Staff Hardware berdasarkan arahan CEO', '', NULL),
(202, '2038-09-26', '2022-04-20', '10220004', 'CONTRACT', 'ACTIVE', 'REQUEST BY IBU ANI (WA 030422)', '', NULL),
(203, '2020-05-18', '2022-05-25', '10220005', 'CONTRACT', 'ACTIVE', 'arahan pembina via direks (utk penempatan slnjtnya d I harper)', '', NULL),
(204, '2037-11-04', '2014-07-14', '04140107', 'PERMANENT', 'ACTIVE', '', '291/SK/Yasn/CBIM/HK.00.3.K/08/2022 (SK Mutasi UCB ke YCBIM) tmt 17082022', NULL),
(205, '2052-02-01', '2022-09-26', '10220006', 'CONTRACT', 'ACTIVE', 'Ibu maya per 010822 Plt Kadiv.Mkeu', '', NULL),
(206, '2047-12-29', '2022-11-24', '10220007', 'PKH', 'ACTIVE', 'arahan pembina via direks (utk penempatan slnjtnya d I harper)', '397/Yasn/CBIM/HK.00.3.K/11/2022, tmt 28 Nov 2022 sd 28 feb 2022', NULL),
(207, '2052-09-17', '2023-02-24', '10230001', 'CONTRACT', 'ACTIVE', 'Ibu melissa', '', NULL),
(208, '2025-02-27', '2023-04-01', '10230003', 'CONTRACT', 'ACTIVE', 'Dewan Pembina', '100/Yasn/CBIM/KA.00.2/04/2023', NULL),
(209, '2055-06-28', '2023-09-01', '10230004', 'CONTRACT', 'ACTIVE', '', '', NULL),
(212, '2037-01-05', '2014-05-05', '21140001', 'PERMANENT', 'ACTIVE', '35/Yasn/CBIM/Sk/TK.CB/7/2014, TANGGAL 22 JULI 2014', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kontrak`
--
ALTER TABLE `kontrak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
