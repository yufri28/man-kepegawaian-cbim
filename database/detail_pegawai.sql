-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Sep 2023 pada 08.29
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
-- Struktur dari tabel `detail_pegawai`
--

CREATE TABLE `detail_pegawai` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `retirement_date` date NOT NULL,
  `jd` date NOT NULL,
  `id_pegawai` varchar(10) NOT NULL,
  `status` enum('PERMANENT','CONTRACT','PKH','KONSULTAN') NOT NULL,
  `active_passive` enum('ACTIVE','PASSIVE') NOT NULL,
  `sk_tetap` text NOT NULL,
  `pkwt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_pegawai`
--

INSERT INTO `detail_pegawai` (`id`, `nik`, `retirement_date`, `jd`, `id_pegawai`, `status`, `active_passive`, `sk_tetap`, `pkwt`) VALUES
(2, '5371045404720010', '2032-04-14', '2014-06-12', '21140004', 'PERMANENT', 'ACTIVE', '29/Yasn/CBIM/Sk/TK.CB/3/2016,TANGGAL 01 MARET 2016', ''),
(3, '5301166902840001', '2044-02-29', '2014-07-14', '21140003', 'PERMANENT', 'ACTIVE', '50/SK/YASN/CBIM/TK-PAUD.K CB/8/2017, TANGGAL DITETAPKAN 22 AGUSTUS 2017', ''),
(4, '5371035308850001', '2045-08-13', '2014-07-14', '21140002', 'PERMANENT', 'ACTIVE', '51/SK/YASN/CBIM/TK-PAUD.K CB/8/2017, TANGGAL DITETAPKAN 22 AGUSTUS 2017', ''),
(5, '5371026906870001', '2047-06-29', '2014-07-14', '21140005', 'PERMANENT', 'ACTIVE', '029/SK/YASN/CBIM/TK-PAUD.K CB/10/2016, TANGGAL DITETAPKAN 10 JULI 2015;\nSK PENGANGKATAN PENANGGUNG JAWAB PENGELOLA KELOMPOK BERMAIN PADA TAMAN KANAK-KANAK KRISTEN CITRA BANGSA NO: 770/Yasn/CBIM/HK.00.3.K/TK.CB/09/2020, TANGGAL 28 SEPTEMBER 2020', ''),
(6, '5371015105760001', '2036-05-11', '2014-08-04', '21140006', 'PERMANENT', 'ACTIVE', '52/SK/YASN/CBIM/TK-PAUD.K CB/8/2017, TANGGAL DITETAPKAN  22 AGUSTUS 2017', ''),
(7, '5371046105890002', '2049-05-21', '2015-04-17', '21150007', 'PERMANENT', 'ACTIVE', '019/SK/YASN/CBIM/TK-PAUD.K CB/10/2016, TANGGAL DITETAPKAN 24 APRIL 2016', ''),
(8, '5371037008870004', '2047-08-30', '2015-07-06', '21150009', 'PERMANENT', 'ACTIVE', '021/SK/YASN/CBIM/TK-PAUD.K CB/10/2016, TANGGAL DITETAPKAN 06 JULI 2016', ''),
(9, '5301086511870005', '2047-11-25', '2015-08-18', '21150013', 'PERMANENT', 'ACTIVE', '025/SK/YASN/CBIM/TK-PAUD.K CB/10/2016, TANGGAL DITETAPKAN 18 AGUSTUS 2016', ''),
(10, '5314022311920001', '2052-11-23', '2017-07-17', '21170001', 'PERMANENT', 'ACTIVE', '710/Yasn/CBIM/HK.00.3.K/TK.CB/7/2020, Tanggal ditetapkan 30 Juli 2017', '24/YASN/CBIM/TKK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018'),
(11, '5371046103860003', '2046-03-21', '2017-07-17', '21170002', 'PERMANENT', 'ACTIVE', '711/Yasn/CBIM/HK.00.3.K/TK.CB/7/2020, Tanggal ditetapkan 30 Juli 2017', '25/YASN/CBIM/TKK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018'),
(12, '5371045111680001', '2028-11-11', '2012-10-01', '22120001', 'PERMANENT', 'ACTIVE', 'KEPSEK SDK CB MULAI 2014\nSK Tetap: 02/SK/Ysn/CBIM/SDK.CB/1/2013, 2 Oktober 2012', ''),
(13, '5371024805890002', '2049-05-08', '2013-07-18', '22130017', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 18 Juli 2013', ''),
(14, '5371026305860001', '2046-05-23', '2013-07-18', '22130019', 'PERMANENT', 'ACTIVE', '16/SK/YASN/CBIM/SDK.CB/2/2016, Tanggal 18 Februari 2016', ''),
(15, '5371025512700001', '2030-12-15', '2012-10-01', '22120008', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 19 Juli 2013\n02/SK/Ysn/CBIM/SDK.CB/1/2013, 17 Januari 2013', ''),
(16, '5301087005900004', '2050-05-30', '2013-07-18', '22130016', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 19 Juli 2013', ''),
(17, '5371026202850001', '2045-02-22', '2012-10-01', '22120014', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 19 Juli 2013', ''),
(18, '5371024311850004', '2045-11-03', '2012-10-01', '22120011', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 19 Juli 2013', ''),
(19, '5371011407870001', '2047-07-14', '2012-10-01', '22120012', 'PERMANENT', 'ACTIVE', '02/SK/Ysn/CBIM/SDK.CB/1/2013, Tanggal 17 Januari 2013', ''),
(20, '5371041005850004', '2045-05-10', '2012-10-01', '22120010', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 19 Juli 2013', ''),
(21, '5371024306900005', '2050-06-03', '2014-07-18', '22140020', 'PERMANENT', 'ACTIVE', '173/SK/YASN/CBIM/SD.K.CB/07/2014, Tanggal 12 Juli 2014;\n17/Sk/Yasn/CBIM/SDK.CB/2/2016, Tanggal 18 Feb 2016', ''),
(22, '5371026402830003', '2043-02-24', '2014-07-18', '22140021', 'PERMANENT', 'ACTIVE', '18/SK/Yasn/CBIM/SDK.CB/2/2016, 18 Februari 2016', ''),
(23, '5371044403800001', '2036-03-04', '2012-10-01', '12120004', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 19 Juli 2013', ''),
(24, '5371022001880004', '2044-01-20', '2012-10-01', '12120009', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 19 Juli 2013', ''),
(25, '5371022808910002', '2037-08-28', '2012-10-01', '12120013', 'PERMANENT', 'ACTIVE', '44/SK/Ysn/CBIM/SDK.CB/7/2013, Tanggal 19 Juli 2013', ''),
(26, '5371022009850003', '2045-09-20', '2015-04-17', '22150019', 'PERMANENT', 'ACTIVE', 'Skp.42/Ysn/CBIM/SD.K.CB/4/2016, Tanggal 26 April 2016', ''),
(27, '5371045207900008', '2050-07-12', '2015-07-06', '22150021', 'PERMANENT', 'ACTIVE', '40/SK/YASN/CBIM/SD.K CB/07/2017, Tanggal 26 JULI 2017', ''),
(28, '2171025802830004', '2043-02-18', '2015-08-18', '22150026', 'PERMANENT', 'ACTIVE', '42/SK/YASN/CBIM/SD.K.CB/7/2017, Tanggal 27 JULI 2017', ''),
(29, '1276036710620001', '2022-10-27', '2015-09-14', '22150028', 'CONTRACT', 'ACTIVE', '707/Yasn/CBIM/HK.00.3.K/SDK.CB/7/2020,Tanggal 30 Juli 2020', 'CONTRACT MULAI 27 Oktober 2022 sd 27 Oktober 2024'),
(30, '5371012301780002', '2038-01-23', '2015-10-01', '22150029', 'PERMANENT', 'ACTIVE', '15/SK/YASN/CBIM/SD.K.CB/I/2018, Tanggal 26 Januari 2018', ''),
(31, '\'537104450993000', '2053-09-05', '2016-07-01', '22160002', 'PERMANENT', 'ACTIVE', '178/SK/YASN/CBIM/SD.K.CB/7/2018, 27 Juli 2018;\n53/Sk/Yasn/CBIM/SD.K.CB/11/2015, Tanggal 30 Nov 2015', ''),
(32, '5371021905940002', '2054-05-10', '2016-07-01', '22160003', 'PERMANENT', 'ACTIVE', '14/SK/YASN/CBIM/SD.K.CB/11/2018, Tanggal 1 November 2018', ''),
(33, '5318035306880001', '2048-06-13', '2016-07-01', '22160004', 'PERMANENT', 'ACTIVE', '435/YASN/CBIM/HK.00.3.K/SDK.CB/9/2019, 19 September 2019', ''),
(34, '5371026201930002', '2053-01-22', '2017-07-17', '22170002', 'PERMANENT', 'ACTIVE', '706/Yasn/CBIM/HK.00.3.K/SDK.CB/7/2020, Tanggal 30 Juli 2020', '17/YASN/CBIM/SDK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018'),
(35, '5371046206910005', '2051-06-22', '2017-07-17', '22170004', 'PERMANENT', 'ACTIVE', '573/Yasn/CBIM/HK.00.3.K/SDK.CB/7/2020,Tanggal 30 Juli 2020', '19/YASN/CBIM/SDK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018'),
(36, '5371065310910001', '2051-10-13', '2017-07-17', '22170005', 'PERMANENT', 'ACTIVE', '709/Yasn/CBIM/HK.00.3.K/SDK.CB/7/2020,Tanggal DITETAPKAN 30 Juli 2020', '20/YASN/CBIM/SDK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018'),
(37, '5371015303870004', '2047-03-13', '2017-07-17', '22170008', 'PERMANENT', 'ACTIVE', '704/Yasn/CBIM/HK.00.3.K/SDK.CB/7/2020,Tanggal 30 Juli 2020', '23/YASN/CBIM/SDK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018'),
(38, '5371040804910003', '2051-04-08', '2017-07-17', '22170010', 'PERMANENT', 'ACTIVE', '569/Yasn/CBIM/HK.00.3.K/SDK.CB/6/2020,Tanggal 17 Juni 2020', '50/YASN/CBIM/SDK-CB/10/2017, TANGGAL 11 OKTOBER S/D 10 OKTOBER 2018'),
(39, '5305010104940002', '2054-04-01', '2018-07-02', '22180002', 'PERMANENT', 'ACTIVE', '718/Yasn/CBIM/HK.00.3.K/SDK.CB/8/2020,Tanggal 17 Agustus 2020', '75/YASN/CBIM/ADM/7/2018, TANGGAL 02 JULI 2018 S/D 01 JULI 2019'),
(40, '5301171710920001', '2052-10-17', '2019-02-04', '22190001', 'PERMANENT', 'ACTIVE', '48/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/02/2021, TANGGAL DITETAPKAN 8 FEB 2021', ''),
(41, '1205035404870002', '2047-04-14', '2019-02-07', '22190003', 'PERMANENT', 'ACTIVE', '47/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/02/2021, TANGGAL DITETAPKAN 8 FEB 2021', ''),
(42, '5371041406940002', '2054-06-14', '2019-03-25', '22190004', 'PERMANENT', 'ACTIVE', '97/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/05/2021, TANGGAL DITETAPKAN 11 MEI 2021', ''),
(43, '5301174512950002', '2056-12-05', '2019-03-25', '22190005', 'PERMANENT', 'ACTIVE', '96/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/05/2021, TANGGAL DITETAPKAN 11 MEI 2021', ''),
(44, '5302011202910001', '2051-02-12', '2019-07-15', '22190008', 'PERMANENT', 'ACTIVE', '718/Yasn/CBIM/HK.00.3.K/SDK.CB/8/2020,Tanggal 17 Agustus 2020', ''),
(45, '5371046408940002', '2054-08-24', '2019-07-15', '22190009', 'PERMANENT', 'ACTIVE', '145/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(46, '5371014404910003', '2051-04-04', '2019-07-15', '21160001', 'PERMANENT', 'ACTIVE', 'SK MUTASI 414/Yasn/CBIM/HK/00.3.K/VII/2019, 15 JULI 2019', ''),
(47, '5301066106960002', '2056-06-21', '2019-07-15', '22190012', 'PERMANENT', 'ACTIVE', '147/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(48, '5371035107970003', '2057-07-11', '2019-07-15', '22190013', 'PERMANENT', 'ACTIVE', '146/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(49, '5371044705940002', '2054-05-07', '2019-07-15', '22190014', 'PERMANENT', 'ACTIVE', '144/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(50, '5371042412900001', '2050-12-24', '2019-07-15', '12190015', 'PERMANENT', 'ACTIVE', '142/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(51, '5371055603890003', '2049-03-16', '2019-09-11', '22190016', 'PERMANENT', 'ACTIVE', '86/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/02/2022, Tanggal 16 Februari 2022', 'dibuatkan SK Pengangkatan Guru Tetap sesuai arahan CEO (15 feb 2022) prioritaskan utk guru-guru yang urus NUPTK,dan ikut PPG'),
(52, '5371027005950005', '2055-05-30', '2019-09-18', '22190017', 'PERMANENT', 'ACTIVE', '87/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/02/2022, Tanggal 16 Februari 2022', 'dibuatkan SK Pengangkatan Guru tetap sesuai arahan CEO (15 feb 2022) prioritaskan utk guru-guru yang urus NUPTK,dan ikut PPG'),
(53, '5305014702910001', '2051-02-07', '2020-07-13', '22200002', 'PERMANENT', 'ACTIVE', '260/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/06/2022, TANGGAL DITETAPKAN 27 Juni 2022', ''),
(54, '5301112806940002', '2054-06-28', '2021-01-06', '22210001', 'PERMANENT', 'ACTIVE', '3b/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/03/2022', 'Berdasarkan arahan ceo (15 feb 2022) dibuatkan SK tetap sesuai tahun PKWT utk administrasi PPG dan sk pengangkatan 2 tahun terakhir (2021-2022), (2021-2022)'),
(55, '5303055603980003', '2058-03-16', '2021-08-23', '22210002', 'PERMANENT', 'ACTIVE', '270/SK/Yasn/CBIM/HK.00.3.K/SDK.CB/07/2022, Tanggal 27 Juli 2022', ''),
(56, '5371024502960001', '2056-02-05', '2022-01-05', '22220001', 'PERMANENT', 'ACTIVE', '401/Yasn/CBIM/HK.00.3.K/SDK.CBM/12/2022,Tanggal 16 Desember 2022', ''),
(57, '5320011611970003', '2057-11-16', '2022-01-31', '22220002', 'PERMANENT', 'ACTIVE', '14/SK/Yasn/CBIM/HK.00.3.K/SDK.CBM/01/2023, Tanggal 25 Januari 2023', ''),
(58, '5371011406980006', '2058-06-14', '2022-02-14', '22220003', 'PERMANENT', 'ACTIVE', '45/Yasn/CBIM/HK.00.3.K/SDK.CBM/2/2023,Tanggal 13 Februari 2023', ''),
(59, '5371025310950004', '2055-10-13', '2022-02-14', '22220004', 'PERMANENT', 'ACTIVE', '44/Yasn/CBIM/HK.00.3.K/SDK.CB/2/2023,Tanggal 13 Februari 2023', ''),
(60, '5371020303970001', '2057-03-03', '2023-08-01', '22230002', 'CONTRACT', 'ACTIVE', '', '218/Yasn/CBIM/SD/KA.00.2/08/2023, tanggal 01 Agustus 2023 s/d 01 Agustus 2024'),
(61, '5371046603670007', '2027-03-26', '2012-10-01', '23120001', 'PERMANENT', 'ACTIVE', 'KEPSEK SMPK CB TMT 2013-07-18', ''),
(62, '5314036505810002', '2041-05-25', '2013-07-18', '23130004', 'PERMANENT', 'ACTIVE', '700/Yasn/CBIM/HK.00.3.K/SMPK.CB/07/2020,Tanggal 30 Juli 2020', ''),
(63, '5305020311890002', '2049-11-03', '2013-07-18', '23130003', 'PERMANENT', 'ACTIVE', '', ''),
(64, '5371024209800005', '2049-09-02', '2013-07-18', '23130007', 'PERMANENT', 'ACTIVE', '404/Yasn/CBIM/HK.00.3.K/9/2019, 16 Agustus 2019', ''),
(65, '5371044703900011', '2050-03-07', '2014-07-15', '23140009', 'PERMANENT', 'ACTIVE', '82/YASN/CBIM/SK/7/2016, 1 Juli 2016', ''),
(66, '5371012007830008', '2043-07-20', '2015-05-02', '23150013', 'PERMANENT', 'ACTIVE', '81/Yasn/CBIM/SK/7/2016, 1 JULI 2016', ''),
(67, '5371065402860001', '2046-02-14', '2015-07-01', '23150010', 'PERMANENT', 'ACTIVE', '79/Yasn/CBIM/SK/7/2016, 1 JULI 2016', ''),
(68, '5371045702710000', '2051-02-17', '2015-11-03', '23150015', 'PERMANENT', 'ACTIVE', '13/SK/YASN/CBIM/SMP.K.CB/I/2018, TANGGAL 24 JANUARI 2018', ''),
(69, '5371022506910001', '2051-06-25', '2016-07-11', '23160006', 'PERMANENT', 'ACTIVE', '42/SK/YASN/CBIM/SMP.K.CB/IV/2018, TANGGAL 16 APRIL 2018', ''),
(70, '3372050908900005', '2050-08-09', '2016-09-15', '23160007', 'PERMANENT', 'ACTIVE', ' 310/YASN/CBIM/HK.003.K/SMPK.CB/6/2019 TANGGAL 20 JUNI 2019', ''),
(71, '5371020202900005', '2050-02-02', '2017-01-06', '23170002', 'PERMANENT', 'ACTIVE', '40/SK/YASN/CBIM/SMP.K.CB/IV/2018, TANGGAL 16 APRIL 2018', ''),
(72, '5301241409910001', '2051-09-14', '2017-07-17', '23170004', 'PERMANENT', 'ACTIVE', '703/Yasn/CBIM/HK.00.3.K/SMPK.CB/07/2020,Tanggal 30 Juli 2020', '28/YASN/CBIM/SMPK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018'),
(73, '5371031802730003', '2029-02-18', '2017-11-30', '23170011', 'PERMANENT', 'ACTIVE', '257/SK/Yasn/CBIM/HK.00.3.K/ SMPK.CB / 06 / 2022,tmt 23 juni 2022', '53/YASN/CBIM/SMP-K CB/12/2017, TANGGAL 04 DESEMBER 2017 S/D 03 DESEMBER 2018'),
(74, '5306205103960001', '2056-03-11', '2018-07-02', '23180005', 'PERMANENT', 'ACTIVE', '702/Yasn/CBIM/HK.00.3.K/SMPK.CB/07/2020,Tanggal 30 Juli 2020', '78/YASN/CBIM/ADM/7/2018, TANGGAL 02 JULI 2018 S/D 01 JULI 2019'),
(75, '5371032612890006', '2049-12-26', '2018-08-01', '23180009', 'PERMANENT', 'ACTIVE', '697/Yasn/CBIM/HK.00.3.K/SMPK/CB/08/2020,Tanggal 16 Agustus 2020', '102/YASN/CBIM/ADM/08/2018, TANGGAL 01 AGUSTUS 2018 S/D 31 JULI 2019'),
(76, '5302032802970001', '2057-01-19', '2019-03-01', '23190003', 'PERMANENT', 'ACTIVE', '27/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', ''),
(77, '5301084412950004', '2055-12-04', '2019-03-01', '23190004', 'PERMANENT', 'ACTIVE', '28/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', ''),
(78, '5371022507950002', '2055-07-25', '2019-03-01', '23190005', 'PERMANENT', 'ACTIVE', '31/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', ''),
(79, '5371013004920004', '2052-04-30', '2019-03-01', '23190006', 'PERMANENT', 'ACTIVE', '32/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', ''),
(80, '5301162711910002', '2051-11-27', '2019-03-01', '23190007', 'PERMANENT', 'ACTIVE', '34/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', ''),
(81, '5301091204950001', '2055-04-12', '2019-03-01', '23190008', 'PERMANENT', 'ACTIVE', '30/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', ''),
(82, '5371041512940003', '2054-12-15', '2019-03-01', '23190009', 'PERMANENT', 'ACTIVE', '29/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', ''),
(83, '5371034906910001', '2051-06-09', '2019-03-01', '23190010', 'PERMANENT', 'ACTIVE', '33/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', ''),
(84, '5311165202920005', '2052-02-12', '2019-03-18', '23190011', 'PERMANENT', 'ACTIVE', '35/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', ''),
(85, '5309062803900001', '2046-03-28', '2019-03-18', '13190012', 'PERMANENT', 'ACTIVE', '36/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/01/2021, Tanggal 14 Januari 2021', ''),
(86, '5301061410920002', '2052-10-14', '2019-07-15', '23190014', 'PERMANENT', 'ACTIVE', '74/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', ''),
(87, '5301080503930004', '2053-03-05', '2019-07-15', '23190015', 'PERMANENT', 'ACTIVE', '69/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', ''),
(88, '5371021409940001', '2054-09-14', '2019-07-15', '23190017', 'PERMANENT', 'ACTIVE', '79/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', ''),
(89, '5302201611930001', '2053-11-16', '2019-07-15', '23190018', 'PERMANENT', 'ACTIVE', '81/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', ''),
(90, '5371046302890008', '2049-02-23', '2019-07-15', '23190019', 'PERMANENT', 'ACTIVE', '75/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', ''),
(91, '5371040306900011', '2050-06-03', '2019-07-15', '23190020', 'PERMANENT', 'ACTIVE', '76/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', ''),
(92, '5302010710910002', '2051-10-07', '2019-07-15', '23190021', 'PERMANENT', 'ACTIVE', '71/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', ''),
(93, '5371030408940004', '2054-08-04', '2019-07-15', '23190022', 'PERMANENT', 'ACTIVE', '72/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', ''),
(94, '5371041101950004', '2055-01-11', '2019-07-15', '23190023', 'PERMANENT', 'ACTIVE', '78/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', ''),
(95, '5371050408880001', '2048-08-04', '2019-07-15', '23190024', 'PERMANENT', 'ACTIVE', '77/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', ''),
(96, '5320012106950001', '2055-06-21', '2019-07-15', '23190025', 'PERMANENT', 'ACTIVE', '80/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', ''),
(97, '5371021607950002', '2055-07-16', '2019-07-15', '23190026', 'PERMANENT', 'ACTIVE', '82/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', ''),
(98, '5371045409930001', '2053-09-14', '2019-08-01', '23190027', 'PERMANENT', 'ACTIVE', '83/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', ''),
(99, '5371022003910001', '2051-03-20', '2019-08-07', '23190028', 'PERMANENT', 'ACTIVE', '73/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', ''),
(100, '5371020503930001', '2053-03-05', '2019-11-08', '23190029', 'PERMANENT', 'ACTIVE', '84/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', ''),
(101, '5371046606920007', '2052-06-26', '2020-01-20', '23200001', 'PERMANENT', 'ACTIVE', '85/SK/Yasn/CBIM/HK.00.3.K/SMPK.CB/02/2022, Tanggal 17 Februari 2022', ''),
(102, '5371036003900002', '2050-03-20', '2020-07-01', '21150011', 'PERMANENT', 'ACTIVE', 'SK MUTASI 606/YASN/CBIM/HK.00.3.K/VII/2020, 30 JUNI 2020', ''),
(103, '5371044805860002', '2046-05-08', '2020-07-06', '23200002', 'PERMANENT', 'ACTIVE', '252 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 06 / 2022,tmt 23 juni 2022', ''),
(104, '5371022904900003', '2050-04-29', '2020-07-06', '23200003', 'PERMANENT', 'ACTIVE', '253 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 06 / 2022,tmt 23 juni 2022', ''),
(105, '5371047112950003', '2055-12-31', '2020-07-06', '23200004', 'PERMANENT', 'ACTIVE', '254 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 06 / 2022,tmt 23 juni 2022', ''),
(106, '5371041709970003', '2058-09-17', '2021-01-25', '23210001', 'PERMANENT', 'ACTIVE', '21 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 01 / 2023,tmt 25 Januari 2023', ''),
(107, '5371041002930006', '2053-02-10', '2021-01-25', '23210002', 'PERMANENT', 'ACTIVE', '20 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 01 / 2023,tmt 25 Januari 2023', ''),
(108, '5371022104900003', '2050-04-21', '2021-01-25', '23210003', 'PERMANENT', 'ACTIVE', '17 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 01 / 2023,tmt 25 Januari 2023', ''),
(109, '5371042507910008', '2051-07-25', '2021-02-15', '23210004', 'PERMANENT', 'ACTIVE', '46/Yasn/CBIM/HK.00.3.K/SDK.CBM/2/2023,Tanggal 13 Februari 2023', ''),
(110, '5302076409980001', '2058-09-24', '2021-07-05', '23210005', 'PERMANENT', 'ACTIVE', '255 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 06 / 2022,tmt 23 juni 2022', ''),
(111, '5371010505980003', '2058-05-05', '2021-07-13', '23210006', 'PERMANENT', 'ACTIVE', '256 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 06 / 2022,tmt 23 juni 2022', ''),
(112, '5371026001970001', '2057-01-20', '2022-01-31', '23220001', 'PERMANENT', 'ACTIVE', '18 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 01 / 2023,tmt 25 Januari 2023', ''),
(113, '5301241106950001', '2055-07-11', '2022-01-31', '23220002', 'PERMANENT', 'ACTIVE', '19 / SK / Yasn / CBIM / HK.00.3.K / SMPK.CB / 01 / 2023,tmt 25 Januari 2023', ''),
(114, '5371034101960002', '2056-01-01', '2022-01-31', '23220003', 'CONTRACT', 'ACTIVE', '', '23/Yasn/CBIM/K.A.002/1/2023 tanggal 31 Jan 2023 s/d 31 Jan 2024'),
(115, '1671073110890007', '2049-10-31', '2022-10-25', '23220004', 'CONTRACT', 'ACTIVE', '', '364/Yasn/CBIM/SMP/K.A.002/10/2022 tanggal 25 Okt 2022 s/d 25 Okt 2023'),
(116, '5371040504910002', '2051-04-05', '2023-01-09', '23230001', 'CONTRACT', 'ACTIVE', '', '387/Yasn/CBIM/KA.00.2.K/11/2022 (PKH) tmt 14 nov 2022\n405B/Yasn/CBIM/KA.00.2.K/12/2022 tmt 9 januari 2023 s/d 9 Januari 2024'),
(117, '5371050103750001', '2035-03-01', '2013-07-18', '23130008', 'PERMANENT', 'ACTIVE', '79a/CBIM/SMP.K/CB/11/2014, TANGGAL 15 NOVEMBER 2014', 'SK KEPALA SEKOLAH 50/SK/Ysn/CBIM/SMA.K-CB/05/2016, 1 JUNI 2016'),
(118, '5371040201860005', '2046-01-02', '2016-01-04', '24160001', 'PERMANENT', 'ACTIVE', '04/SK/YASN/CBIM/SMA.K.CB/I/2018, TANGGAL 5 JANUARI 2018', ''),
(119, '5307050608910002', '2051-08-06', '2017-01-06', '24170001', 'PERMANENT', 'ACTIVE', '683/Yasn/CBIM/HK.00.3.K/SMA.K.CB/7/2020,Tanggal 30 Juli 2020', ''),
(120, '5371030803950001', '2055-03-08', '2017-01-06', '24170004', 'PERMANENT', 'ACTIVE', '684/Yasn/CBIM/HK.00.3.K/SMA.K.CB/7/2020,Tanggal 30 Juli 2020', '06/YASN/CBIM/SMAK/-CB/1/2017, TANGGAL 06 JANUARI 2017 05 JANUARI 2018'),
(121, '5301102305890003', '2049-05-23', '2017-07-17', '24170006', 'PERMANENT', 'ACTIVE', '685/Yasn/CBIM/HK.00.3.K/SMA.K.CB/7/2020,Tanggal 30 Juli 2020', '32/YASN/CBIM/SMAK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018'),
(122, '5371032307900002', '2050-07-23', '2017-07-17', '24170007', 'PERMANENT', 'ACTIVE', '680/Yasn/CBIM/HK.00.3.K/SMA.K.CB/7/2020,Tanggal 30 Juli 2020', '33/YASN/CBIM/SMAK-CB/7/2017, TANGGAL 17 JULI 2017 S/D 16 JULI 2018'),
(123, '5371020208910002', '2051-08-02', '2017-07-17', '24170008', 'PERMANENT', 'ACTIVE', '241/SK/YASN/CBIM/SMA.K.CB/3/2019, TANGGAL 2019-03-19', ''),
(124, '5371015801920001', '2052-01-18', '2018-01-08', '24180001', 'PERMANENT', 'ACTIVE', '506/YASN/CBIM/HK.00.3.K/SMA.K.CB/I/2020, 10 JANUARI 2020', '02/YASN/CBIM/SMAK-CB/01/2018, TANGGAL 08 JANUARI S/D 07 JANUARI 2019'),
(125, '5371026809950001', '2055-09-28', '2018-01-08', '24180002', 'PERMANENT', 'ACTIVE', '687/Yasn/CBIM/HK.00.3.K/SMA.K.CB/7/2020,Tanggal 30 Juli 2020', '90/YASN/CBIM/ADM/5/2018, TANGGAL 08 MEI 2018 S/D 07 MEI 2019'),
(126, '5301052804930000', '2053-04-28', '2018-07-02', '24180004', 'PERMANENT', 'ACTIVE', '634/YASN/CBIM/HK.00.3.K/SMA.K.CB/7/2020, 8 JULI 2020', '83/YASN/CBIM/ADM/VI/2018, TANGGAL 02 JULI 2018 S/D 01 JULI 2019'),
(127, '5371024401940007', '2054-01-04', '2018-08-01', '24180007', 'PERMANENT', 'ACTIVE', '682/Yasn/CBIM/HK.00.3.K/SMA.K.CB/8/2020,Tanggal 01 Agustus 2020', '103/YASN/CBIM/ADM/08/2018, TANGGAL 01 AGUSTUS 2018 S/D 31 JULI 2019'),
(128, '5371054211910001', '2051-11-02', '2018-08-09', '24180008', 'PERMANENT', 'ACTIVE', '688/Yasn/CBIN/HK.00.3.K/SMA.K.CB/7/2020,Tanggal 30 Juli 2020', '202/YASN/CBIM/ADM/2/2019, TANGGAL 08 FEBRUARI 2019 S/D 07 FEBRUARI 2020'),
(129, '5371046605920001', '2052-05-26', '2019-02-08', '24190001', 'PERMANENT', 'ACTIVE', '25/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/01/2021, Tanggal 14 Januari 2021', ''),
(130, '1212064305910001', '2051-05-03', '2019-03-01', '24190003', 'PERMANENT', 'ACTIVE', '23/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/01/2021, Tanggal 14 Januari 2021', ''),
(131, '5371044501910000', '2051-01-05', '2019-03-19', '24190004', 'PERMANENT', 'ACTIVE', '24/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/01/2021, Tanggal 14 Januari 2021', ''),
(132, '5371042507840001', '2044-07-25', '2019-07-15', '24190005', 'PERMANENT', 'ACTIVE', '134/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2023, Tanggal 23 Maret 2022', ''),
(133, '5371020704950005', '2055-04-07', '2019-07-15', '24190006', 'PERMANENT', 'ACTIVE', '131/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(134, '530124120590001', '2052-05-12', '2019-07-15', '24190008', 'PERMANENT', 'ACTIVE', '130/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(135, '5302032312940000', '2054-12-23', '2019-07-15', '24190013', 'PERMANENT', 'ACTIVE', '126/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(136, '8101015209910000', '2051-09-12', '2019-07-15', '24190014', 'PERMANENT', 'ACTIVE', '136/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(137, '5302194109993000', '2053-09-01', '2019-07-15', '24190015', 'PERMANENT', 'ACTIVE', '135/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(138, '5371025911930003', '2053-11-19', '2019-07-15', '24190016', 'PERMANENT', 'ACTIVE', '128/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(139, '5301231612950001', '2055-12-06', '2019-07-15', '24190017', 'PERMANENT', 'ACTIVE', '137/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(140, '5312157101920001', '2052-01-30', '2019-07-15', '24190018', 'PERMANENT', 'ACTIVE', '129/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(141, '5371015312950001', '2051-12-13', '2019-07-15', '14190019', 'PERMANENT', 'ACTIVE', '141/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', 'ROTASI MENJADI ADMIN PER 2020-07-01'),
(142, '5371034310960006', '2056-10-03', '2019-07-15', '24190020', 'PERMANENT', 'ACTIVE', '133/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(143, '5371036707880003', '2048-07-27', '2019-07-15', '24190021', 'PERMANENT', 'ACTIVE', '138/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(144, '5302072005930001', '2053-05-20', '2019-07-29', '24190022', 'PERMANENT', 'ACTIVE', '127/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(145, '5320035604880001', '2048-04-16', '2019-07-29', '24190023', 'PERMANENT', 'ACTIVE', '132/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(146, '5371022202593000', '2053-05-22', '2019-11-27', '24190024', 'PERMANENT', 'ACTIVE', '125/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/03/2022, Tanggal 23 Maret 2022', ''),
(147, '5371036501840007', '2040-01-25', '2020-07-01', '21150010', 'PERMANENT', 'ACTIVE', 'PERPUSTAKAAN (01 JULI 2O20)\nSK MUTASI 605/YASN/CBIM/HK.00.3/VII/2020\nINSTRUKSI PAK JACK JOHANES SBG WAKET YYSN', ''),
(148, '7106044311930002', '2053-11-03', '2020-07-06', '24200001', 'PERMANENT', 'ACTIVE', '254/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/06/2022, Tanggal 23 Juni 2022', ''),
(149, '5371011004960001', '2056-04-10', '2020-07-06', '24200002', 'PERMANENT', 'ACTIVE', '252/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/06/2022, Tanggal 23 Juni 2022', ''),
(150, '5371015101960003', '2056-01-11', '2020-07-06', '24200003', 'PERMANENT', 'ACTIVE', '253/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/06/2022, Tanggal 23 Juni 2022', ''),
(151, '5314012303920002', '2052-03-23', '2020-07-13', '24200005', 'PERMANENT', 'ACTIVE', '255/SK/Yasn/CBIM/HK.00.3.K/SMAK.CB/06/2022, Tanggal 23 Juni 2022', ''),
(152, '5371034605970000', '2057-05-06', '2020-12-01', '24200007', 'PERMANENT', 'ACTIVE', '396/Yasn/CBIM/HK.00.3.K/SMAK.CBM/12/2022, Tanggal 01 Desember 2022', ''),
(153, '5302251003880001', '2048-03-10', '2021-01-11', '24210001', 'PERMANENT', 'ACTIVE', '408/Yasn/CBIM/HK.00.3.K/SMAK.CBM/12/2022, Tanggal 16 Desember 2022', ''),
(154, '5371025505980002', '2058-05-15', '2021-07-05', '24210003', 'PERMANENT', 'ACTIVE', '184/Yasn/CBIM/HK.00.3.K/SMAK.CB/07/2023, Tanggal 03 Juli 2023', ''),
(155, '5301111908960001', '2056-08-15', '2021-07-05', '24210004', 'PERMANENT', 'ACTIVE', '185/Yasn/CBIM/HK.00.3.K/SMAK.CB/07/2023, Tanggal 03 Juli 2023', ''),
(156, '3507250604900002', '2050-04-06', '2021-07-05', '24210005', 'PERMANENT', 'ACTIVE', '187/Yasn/CBIM/HK.00.3.K/SMAK.CB/07/2023, Tanggal 03 Juli 2023', ''),
(157, '5301080708960004', '2056-08-07', '2021-07-05', '24210006', 'PERMANENT', 'ACTIVE', '186/Yasn/CBIM/HK.00.3.K/SMAK.CB/07/2023, Tanggal 03 Juli 2023', ''),
(158, '5371020204880001', '2048-04-02', '2021-07-05', '24210007', 'PERMANENT', 'ACTIVE', '188/Yasn/CBIM/HK.00.3.K/SMAK.CB/07/2023, Tanggal 03 Juli 2023', ''),
(159, '5371046503960011', '2056-03-25', '2022-01-05', '24220001', 'PERMANENT', 'ACTIVE', '409/Yasn/CBIM/HK.00.3.K/SMAK.CBM/12/2022, Tanggal 16 Desember 2022', ''),
(160, '5302085312970002', '2057-12-13', '2022-01-25', '24220002', 'PERMANENT', 'ACTIVE', '13/Yasn/CBIM/HK.00.3.K/SMAK.CBM/01/2023, Tanggal 25 Januari 2023', ''),
(161, '5311012403930004', '2053-03-24', '2022-01-25', '24220003', 'PERMANENT', 'ACTIVE', '15/Yasn/CBIM/HK.00.3.K/SMAK.CBM/01/2023, Tanggal 25 Januari 2023', ''),
(162, '5371021802960005', '2056-02-18', '2022-01-25', '24220004', 'PERMANENT', 'ACTIVE', '12/Yasn/CBIM/HK.00.3.K/SMAK.CBM/01/2023, Tanggal 25 Januari 2023', ''),
(163, '5371015602980001', '2058-02-16', '2022-04-04', '24220005', 'PERMANENT', 'ACTIVE', '95/Yasn/CBIM/HK.00.3.K/SMAK.CBM/04/2023, Tanggal 03 April 2023', ''),
(164, '5371050505940001', '2051-05-05', '1905-07-10', '10200003', '', 'ACTIVE', 'OWNER', ''),
(165, '5371041105690001', '2025-05-11', '2020-08-25', '07080101', '', 'ACTIVE', 'BERDASARKAN SK DEWAN PEMBINA', ''),
(166, '', '2012-06-02', '2013-02-01', '10130001', '', 'ACTIVE', '01/SK/Ysn/CBIM/Adm/01/2015, TANGGAL 12 JANUARI 2015 ', ''),
(167, '', '2009-12-04', '2010-01-07', '10100001', '', 'ACTIVE', 'BERDASARKAN AKTA PENDIRIAN YAYASAN', ''),
(168, '', '2020-11-14', '2007-07-31', '10070001', '', 'ACTIVE', 'BERDASARKAN AKTA PENDIRIAN YAYASAN', ''),
(169, '', '2011-12-20', '2019-02-01', '10190003', '', 'ACTIVE', 'BERDASARKAN SK PERUBAHAN JABATAN DEWAN PENGURUS YAYASAN NO: 279/SK/YASN/CBIM/ADM/4/2019', ''),
(170, '5371045806930001', '2049-06-18', '1905-07-10', '10200004', '', 'ACTIVE', 'OWNER', ''),
(171, '5371040101560009', '0000-00-00', '2018-10-25', '10180007', 'KONSULTAN', 'ACTIVE', '', ''),
(172, '5371014509750001', '2031-09-05', '1997-07-07', '10070002', 'PERMANENT', 'ACTIVE', '178b/SK/Yasn/CBIM/KA.00.3.K/04/2022 (tmt 11 april 2022)\n246//SK/Yasn/CBIM/KA.00.3.K/06/2022 (tmt 21 Juni 2022) Perubahan jenjang pendidikan dari SMA ke S1', '275/SK/Yasn/CBIM/HK.00.3.K/08/2022 (TMT 01082022-01082023) SK Jabatan Plt Kadiv KEU'),
(173, '', '2034-05-05', '0000-00-00', '10070004', 'PERMANENT', 'ACTIVE', '181/SK/Yasn/CBIM/KA.00.3.K/04/2022 (tmt 12 april 2022)', ''),
(174, '5371041304860003', '2042-04-13', '2008-02-04', '10080001', 'PERMANENT', 'ACTIVE', '171/SK/Yasn/CBIM/KA.00.3.K/04/2022 (tmt 11 april 2022)', ''),
(175, '5371041012870002', '2043-12-10', '2014-02-01', '10140001', 'PERMANENT', 'ACTIVE', '353/YASN/CBIM/HK.00.3.K/10/2022, 25OKTOBER 2022', ''),
(176, '5371046610810005', '2037-10-26', '2015-02-23', '10150001', 'PERMANENT', 'ACTIVE', '24/YSN/CBIM/ADM/03/2016, TANGGAL 23 APRIL 2016', ''),
(177, '5302016702880002', '2044-02-27', '2015-05-04', '10150008', 'PERMANENT', 'ACTIVE', '228/SK/YASN/CBIM/KA.00.3.K/06/2022 (tmt 06 juni 2022)', ''),
(178, '5301102806960000', '2052-06-26', '2015-05-11', '10150009', 'PERMANENT', 'ACTIVE', '20/YASN/CBIM/ADM/IV/2017, TANGGAL 11 MEI 2017', ''),
(179, '5371042203560001', '2012-03-22', '2015-04-20', '10150006', 'CONTRACT', 'ACTIVE', '471/YASN/CBIM/HK.00.3.K/10/2019, 28 OKTOBER 2019', 'SK PHK USIA PENSIUN 309/Yasn/CBIM/KA.00.8.K/12/2021 TMT 02 JANUARI 2022'),
(180, '5371022206660002', '2022-06-22', '2015-05-07', '10150010', 'CONTRACT', 'ACTIVE', '192/SK/YASN/CBIM/ADM/II/2019, TANGGAL 1 FEBRUARI 2019', ''),
(181, '5371040305890001', '2045-05-03', '2016-07-19', '10160003', 'PERMANENT', 'ACTIVE', '76/SK/YASN/CBIM/ADM/IV/2017, TANGGAL 08 NOVEMBER 2017', ''),
(182, '5371022102890002', '2045-02-21', '2016-11-01', '10160009', 'PERMANENT', 'ACTIVE', '431/YASN/CBIM/HK.00.6.K/09/2019, 11 SEPTEMBER 2019', ''),
(183, '5371025208880001', '2044-08-12', '2017-06-08', '10170002', 'PERMANENT', 'ACTIVE', '306/YASN/CBIM/HK.00.3.K/5/2019, TANGGAL 10 JUNI 2019', '14/YASN/CBIM/ADM/6/2017, TANGGAL 08 JUNI 2017 S/D 07 JUNI 2018'),
(184, '5371024102940004', '2050-02-01', '2018-01-08', '10180001', 'PERMANENT', 'ACTIVE', '231/SK/YASN/CBIM/KA.00.3.K/06/2022 (tmt 06 juni 2022)', '01/YASN/CBIM/ADM-KEU/01/2018, TANGGAL 08 JANUARI S/D 07 JANUARI 2019'),
(185, '5371022212880001', '2044-12-22', '2018-08-06', '10180005', 'PERMANENT', 'ACTIVE', '261/SK/YASN/CBIM/HK.00.3.K/07/2022 (tmt 08 Juli 2022)', '116/YASN/CBIM/ADM/8/2018, TANGGAL 06 AGUSTUS 2018 S/D 05 AGUSTUS 2019'),
(186, '5371010305870005', '2043-05-03', '2018-09-17', '10180006', 'PERMANENT', 'ACTIVE', '65/SK/YASN/CBIM/HK.00.3.K/03/2023 (tmt 01 Maret 2023)', '117/YASN/CBIM/ADM/9/2018, TANGGAL 17 SEPTEMBER S/D 16 SEPTEMBER 2019'),
(187, '5371011209690001', '2025-09-12', '2007-07-31', '10070005', 'PERMANENT', 'ACTIVE', '176/SK/Yasn/CBIM/KA.00.3.K/04/2022 (tmt 11 april 2022)', ''),
(188, '5371046003950000', '2051-03-20', '2019-02-01', '10190001', 'PERMANENT', 'ACTIVE', '235/SK/YASN/CBIM/KA.00.3.K/06/2022 (tmt 06 juni 2022)', ''),
(189, '5371045607950002', '2051-07-16', '2019-09-11', '10190004', 'PERMANENT', 'ACTIVE', '230/SK/YASN/CBIM/KA.00.3.K/06/2022 (tmt 06 juni 2022)', ''),
(190, '5371045601980002', '2054-01-16', '2020-02-06', '10200002', 'PERMANENT', 'ACTIVE', '16/SK/Yasn/CBIM/HK.00.3.K/01/2022, tmt 25 Januari 2023', ''),
(191, '', '2025-06-19', '2007-07-31', '07080109', 'PERMANENT', 'ACTIVE', '174/SK/Yasn/CBIM/KA.00.3.K/04/2022 (tmt 11 april 2022)', ''),
(192, '5304121306860000', '2042-06-13', '2020-09-22', '10200005', 'PERMANENT', 'ACTIVE', 'INSTRUKSI OWNER TGL 21 SEPTEMBER 2020, UTK BANTU PAK SIMON DAN PAK SAM LITTIK SELAMA 3BULAN\n27/SK/YASN/CBIM/KA.00.3.K/11/2020, tmt 27 November 2020', ''),
(193, '5371016604940002', '2050-04-26', '2020-12-07', '10200007', 'PERMANENT', 'ACTIVE', '395/YASN/CBIM/HK.00.3.K/12/2022, tmt 1 Desember 2022', ''),
(194, '3671122805640000', '2020-05-28', '2021-08-01', '10210002', 'CONTRACT', 'ACTIVE', '170/YASN/CBIM/HK.00.3.K/08/2021 (KONTRAK 1TAHUN)', ''),
(195, '5371045709960004', '2052-09-17', '2021-03-12', '10210001', 'PKH', 'ACTIVE', '', ''),
(196, '5371031605840004', '2040-05-16', '2008-12-18', '10080002', 'PERMANENT', 'ACTIVE', '177/SK/Yasn/CBIM/KA.00.3.K/04/2022 (tmt 11 april 2022)', ''),
(197, '5371042405660004', '2022-05-24', '2007-07-31', '10070006', 'CONTRACT', 'ACTIVE', '175/SK/Yasn/CBIM/KA.00.3.K/04/2022 (tmt 11 april 2022)', ''),
(198, '5371030609720004', '2028-09-06', '2007-07-31', '10070007', 'PERMANENT', 'ACTIVE', '279/SK/Yasn/CBIM/KA.00.3.K/10/2021 (tmt 22 oktober 2021)', ''),
(199, '5371030308960002', '2052-08-03', '2021-11-22', '10210003', 'CONTRACT', 'ACTIVE', 'Replacement pak marcho', ''),
(200, '5371040307990004', '2053-07-03', '2022-01-05', '10220001', 'CONTRACT', 'ACTIVE', 'Penambahan Staff Hardware berdasarkan arahan CEO', ''),
(201, '5301052007730000', '2029-07-20', '2007-07-31', '10070009', 'PERMANENT', 'ACTIVE', '173/SK/Yasn/CBIM/KA.00.3.K/04/2022 (tmt 11 april 2022)', ''),
(202, '5371046609820004', '2038-09-26', '2022-04-20', '10220004', 'CONTRACT', 'ACTIVE', 'REQUEST BY IBU ANI (WA 030422)', ''),
(203, '5371031803640001', '2020-05-18', '2022-05-25', '10220005', 'CONTRACT', 'ACTIVE', 'arahan pembina via direks (utk penempatan slnjtnya d I harper)', ''),
(204, '5312154411810002', '2037-11-04', '2014-07-14', '04140107', 'PERMANENT', 'ACTIVE', '', '291/SK/Yasn/CBIM/HK.00.3.K/08/2022 (SK Mutasi UCB ke YCBIM) tmt 17082022'),
(205, '5309064102960002', '2052-02-01', '2022-09-26', '10220006', 'CONTRACT', 'ACTIVE', 'Ibu maya per 010822 Plt Kadiv.Mkeu', ''),
(206, '5371036912910002', '2047-12-29', '2022-11-24', '10220007', 'PKH', 'ACTIVE', 'arahan pembina via direks (utk penempatan slnjtnya d I harper)', '397/Yasn/CBIM/HK.00.3.K/11/2022, tmt 28 Nov 2022 sd 28 feb 2022'),
(207, '5306080107970003', '2052-09-17', '2023-02-24', '10230001', 'CONTRACT', 'ACTIVE', 'Ibu melissa', ''),
(208, '3404072702690005', '2025-02-27', '2023-04-01', '10230003', 'CONTRACT', 'ACTIVE', 'Dewan Pembina', '100/Yasn/CBIM/KA.00.2/04/2023'),
(209, '5314072806990002', '2055-06-28', '2023-09-01', '10230004', 'CONTRACT', 'ACTIVE', '', ''),
(212, '5371054501770001', '2037-01-05', '2014-05-05', '21140001', 'PERMANENT', 'ACTIVE', '35/Yasn/CBIM/Sk/TK.CB/7/2014, TANGGAL 22 JULI 2014', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pegawai`
--
ALTER TABLE `detail_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_pegawai`
--
ALTER TABLE `detail_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
