-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 01:33 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtpdmulti`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_journal`
--

CREATE TABLE `account_journal` (
  `JOU_ID` int(11) NOT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `JOU_CODE` char(30) DEFAULT NULL,
  `JOU_STS` char(1) DEFAULT NULL,
  `JOU_REFF` char(250) DEFAULT NULL,
  `JOU_DATE` date DEFAULT NULL,
  `JOU_INFO` varchar(1024) DEFAULT NULL,
  `JOU_DEBIT` bigint(20) DEFAULT NULL,
  `JOU_CREDIT` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_journal`
--

INSERT INTO `account_journal` (`JOU_ID`, `BRANCH_ID`, `USER_ID`, `JOU_CODE`, `JOU_STS`, `JOU_REFF`, `JOU_DATE`, `JOU_INFO`, `JOU_DEBIT`, `JOU_CREDIT`) VALUES
(1, 1, 2, 'JOU/1809/000001', '1', 'BL/1809/000001', '2018-09-19', 'Jurnal Pembelian BL/1809/000001 dari Supplier A', NULL, NULL),
(2, 5, 5, 'JOU/1809/000002', '1', 'BL/1809/000001', '2018-09-20', 'Jurnal Pembelian BL/1809/000001 dari Supplier A', NULL, NULL),
(3, 5, 5, 'JOU/1809/000003', '1', 'INV/1809/000001', '2018-09-20', 'Invoice : INV/1809/000001 - Sampoerna', NULL, NULL),
(4, 5, 5, 'JOU/1809/000004', '1', 'INV/1809/000002', '2018-09-20', 'Invoice : INV/1809/000002 - Sampoerna', NULL, NULL),
(5, 3, 6, 'JOU/1809/000005', '1', 'BL/1809/000001', '2018-09-26', 'Jurnal Pembelian BL/1809/000001 dari Supplier A', NULL, NULL),
(6, 3, 6, 'JOU/1809/000006', '1', 'INV/1809/000002', '2018-09-26', 'Invoice : INV/1809/000002 - Sampoerna', NULL, NULL),
(7, 3, 6, 'JOU/1809/000007', '1', 'INV/1809/000001', '2018-09-26', 'Invoice : INV/1809/000001 - Sampoerna', NULL, NULL),
(8, 3, 6, 'JOU/1809/000008', '1', 'KM/1809/000001', '2018-09-26', 'Kas Masuk KM/1809/000001, kolom info induk kas masuk', NULL, NULL),
(9, 3, 6, 'JOU/1809/000009', '1', 'KK/1809/000001', '2018-09-26', 'Kas Keluar KK/1809/000001, Kolom info kas keluar induk', NULL, NULL),
(10, 3, 6, 'JOU/1809/000010', '1', 'BL/1809/000002', '2018-09-26', 'Jurnal Pembelian BL/1809/000002 dari Supplier A', NULL, NULL),
(11, 3, 6, 'JOU/1809/000011', '1', 'INV/1809/000003', '2018-09-26', 'Invoice : INV/1809/000003 - Sampoerna', NULL, NULL),
(12, 3, 6, 'JOU/1810/000001', '1', 'BM/1810/000001', '2018-10-01', 'Bank Masuk BM/1810/000001, kolom keterangan bank masuk', NULL, NULL),
(13, 3, 6, 'JOU/1810/000002', '1', 'INV/1810/000001', '2018-10-02', 'Invoice : INV/1810/000001 - Sampoerna', NULL, NULL),
(14, 3, 6, 'JOU/1810/000003', '1', 'KK/1810/000001', '2018-10-02', 'Kas Keluar KK/1810/000001, bnbnbnbnbn', NULL, NULL),
(15, 3, 6, 'JOU/1810/000004', '1', 'BK/1810/000002', '2018-10-03', 'Bank Keluar BK/1810/000002, tes keterangan', NULL, NULL),
(16, 1, 1, 'JOU/1810/000005', '1', 'BM/1810/000001', '2018-10-03', 'Bank Masuk BM/1810/000001, tes giro masuk dari bank masuk', NULL, NULL),
(17, 1, 1, 'JOU/1810/000006', '1', 'GM/1810/000001', '2018-10-04', 'Pencairan Giro ke BANK A, tes giro masuk', NULL, NULL),
(18, 1, 1, 'JOU/1810/000007', '1', 'BK/1810/000001', '2018-10-04', 'Bank Keluar BK/1810/000001, tes giro keluar dari bank keluar', NULL, NULL),
(19, 1, 1, 'JOU/1810/000008', '1', 'GK/1810/000001', '2018-10-04', 'Pencairan Giro dari BANK A, tes giro keluar cair', NULL, NULL),
(20, 6, 9, 'JOU/1810/000009', '1', 'BL/1810/000001', '2018-10-16', 'Jurnal Pembelian BL/1810/000001 dari Sup Sub A', NULL, NULL),
(21, 6, 9, 'JOU/1810/000010', '1', 'BL/1810/000002', '2018-10-16', 'Jurnal Pembelian BL/1810/000002 dari Supplier A', NULL, NULL),
(22, 1, 1, 'JOU/1810/000011', '1', 'BM/1810/000002', '2018-10-18', 'Bank Masuk BM/1810/000002, aaaaaa', NULL, NULL),
(23, 1, 1, 'JOU/1810/000012', '1', 'BK/1810/000002', '2018-10-18', 'Bank Keluar BK/1810/000002, axzsxxa', NULL, NULL),
(24, 3, 6, 'JOU/1812/000001', '1', 'INV/1812/000001', '2018-12-04', 'Invoice : INV/1812/000001 - Sampoerna', NULL, NULL),
(25, 3, 6, 'JOU/1812/000002', '1', 'PB/1812/000001', '0000-00-00', 'Jurnal Pembelian PB/1812/000001 dari Supplier A', NULL, NULL),
(26, NULL, NULL, 'JOU/1903/000001', '0', NULL, NULL, NULL, NULL, NULL),
(27, 7, 10, 'JOU/1906/000001', '1', 'BL/1906/000001', '2019-06-14', 'Jurnal Pembelian BL/1906/000001 dari Mulyono', NULL, NULL),
(28, NULL, NULL, 'JOU/2104/000001', '0', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appr_cost_det`
--

CREATE TABLE `appr_cost_det` (
  `CSTDT_ID` int(11) NOT NULL,
  `APPR_ID` int(11) DEFAULT NULL,
  `CSTDT_CODE` char(100) DEFAULT NULL,
  `CSTDT_PPN` char(1) DEFAULT NULL,
  `CSTDT_PPH` char(1) DEFAULT NULL,
  `CSTDT_PPNAMOUNT` bigint(20) DEFAULT NULL,
  `CSTDT_PPHAMOUNT` bigint(20) DEFAULT NULL,
  `CSTDT_AMOUNT` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appr_cost_det`
--

INSERT INTO `appr_cost_det` (`CSTDT_ID`, `APPR_ID`, `CSTDT_CODE`, `CSTDT_PPN`, `CSTDT_PPH`, `CSTDT_PPNAMOUNT`, `CSTDT_PPHAMOUNT`, `CSTDT_AMOUNT`) VALUES
(1, 1, 'Media Placement', NULL, NULL, NULL, NULL, 100000000),
(2, 2, 'Media Placement', NULL, NULL, NULL, NULL, 100000000),
(3, 3, 'Media Placement', NULL, NULL, NULL, NULL, 120000000),
(4, 4, 'Media Placement', NULL, NULL, NULL, NULL, 100000000),
(7, 5, 'tes media lagi lagi', NULL, NULL, 10000, 2000, 100000),
(8, 7, 'Produksi Media', NULL, NULL, 4000000, 0, 40000000),
(10, 7, 'Jasa Media', NULL, NULL, 1000000, 200000, 10000000),
(11, 7, 'pajak dan listrik', NULL, NULL, 500000, 0, 5000000),
(12, 8, 'tes biaya', NULL, NULL, NULL, NULL, 1000000),
(13, 9, 'tes', NULL, NULL, 0, 0, 1000000),
(14, 10, 'paket blablaba', NULL, NULL, 0, 0, 1000000),
(15, 11, 'media placement', NULL, NULL, 2000000, 0, 20000000),
(16, 11, 'jasa media', NULL, NULL, 0, 100000, 5000000),
(17, 11, 'pajak reklame', NULL, NULL, 0, 0, 5000000),
(18, 12, 'media placement', NULL, NULL, 0, 0, 10000000),
(19, 12, 'jasa media', NULL, NULL, 100000, 0, 1000000),
(20, 12, 'tes pph', NULL, NULL, 0, 20000, 1000000),
(21, 6, 'media', NULL, NULL, 0, 0, 1000000),
(22, 13, 'MEDIA PLACEMENT', NULL, NULL, NULL, NULL, 11000000),
(23, 14, 'MEDIA PLACEMENT', NULL, NULL, NULL, NULL, 37500000),
(26, 18, 'MEDIA PLACEMENT', NULL, NULL, NULL, NULL, 14000000),
(28, 20, 'MEDIA PLACEMENT', NULL, NULL, NULL, NULL, 14000000),
(29, 16, 'MEDIA PLACEMENT', NULL, NULL, NULL, NULL, 38450000),
(30, 17, 'MEDIA PLACEMENT', NULL, NULL, NULL, NULL, 17250000),
(31, 21, 'BIAYA PASANG', NULL, NULL, NULL, NULL, 1800000),
(32, 19, 'MEDIA PLACEMENT', NULL, NULL, NULL, NULL, 60000000),
(33, 23, 'MEDIA PLACEMENT', NULL, NULL, NULL, NULL, 67500000),
(34, 24, 'MEDIA PLACEMENT', NULL, NULL, NULL, NULL, 60000000),
(35, 25, 'BIAYA CETAK MATERI', NULL, NULL, NULL, NULL, 900000),
(36, 25, 'BIAYA PASANG', NULL, NULL, NULL, NULL, 750000),
(37, 26, 'MEDIA PLACEMENT', NULL, NULL, NULL, NULL, 7500000),
(38, 27, 'MEDIA PLACEMENT', NULL, NULL, NULL, NULL, 15000000);

-- --------------------------------------------------------

--
-- Table structure for table `appr_permit_det`
--

CREATE TABLE `appr_permit_det` (
  `APPRPRMT_ID` int(11) NOT NULL,
  `APPR_ID` int(11) DEFAULT NULL,
  `PRMTTYP_ID` int(11) DEFAULT NULL,
  `APPRPRMT_CODE` char(30) DEFAULT NULL,
  `APPRPRMT_INFO` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appr_terms_det`
--

CREATE TABLE `appr_terms_det` (
  `TERMSDET_ID` int(11) NOT NULL,
  `APPR_ID` int(11) DEFAULT NULL,
  `TERMSDET_CODE` char(30) DEFAULT NULL,
  `TERMSDET_DATE` date DEFAULT NULL,
  `TERMSDET_INFO` char(100) DEFAULT NULL,
  `TERMSDET_PERC` decimal(10,2) DEFAULT NULL,
  `TERMSDET_DPP` bigint(20) DEFAULT NULL,
  `TERMSDET_BBTAX` bigint(20) DEFAULT NULL,
  `TERMSDET_PPN_PERC` decimal(10,2) DEFAULT NULL,
  `TERMSDET_PPH_PERC` decimal(10,2) DEFAULT NULL,
  `TERMSDET_PPN_SUM` int(11) DEFAULT NULL,
  `TERMSDET_PPH_SUM` int(11) DEFAULT NULL,
  `TERMSDET_SUB` bigint(20) DEFAULT NULL,
  `TERMSDET_SUM` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appr_terms_det`
--

INSERT INTO `appr_terms_det` (`TERMSDET_ID`, `APPR_ID`, `TERMSDET_CODE`, `TERMSDET_DATE`, `TERMSDET_INFO`, `TERMSDET_PERC`, `TERMSDET_DPP`, `TERMSDET_BBTAX`, `TERMSDET_PPN_PERC`, `TERMSDET_PPH_PERC`, `TERMSDET_PPN_SUM`, `TERMSDET_PPH_SUM`, `TERMSDET_SUB`, `TERMSDET_SUM`) VALUES
(1, 1, '1', '2018-10-05', 'Kolom keterangan termin', '100.00', 90000000, 10000000, '10.00', '2.00', 9000000, 1800000, 100000000, 107200000),
(2, 2, '1', '2018-09-30', 'Kolom keterangan detail termin', '100.00', 100000000, 10000000, '10.00', '2.00', 10000000, 2000000, 110000000, 118000000),
(4, 3, '1', '2018-10-01', 'Kolom keterangan termin', '100.00', 120000000, 10000000, '10.00', '2.00', 12000000, 2400000, 130000000, 139600000),
(5, 4, '1', '2018-09-30', 'kolom keterangan detail termin', '100.00', 100000000, 10000000, '10.00', '2.00', 10000000, 2000000, 110000000, 118000000),
(10, 5, '1', '2018-10-05', 'kolom keterangan termin', '0.00', 100000, NULL, NULL, NULL, 10000, NULL, NULL, 110000),
(13, 7, '1', '2018-11-01', '50% setelah approval', '50.00', 27500000, NULL, NULL, NULL, 2750000, NULL, NULL, 30250000),
(14, 7, '1', '2018-12-01', '50% setelah BAPP', '50.00', 27500000, NULL, NULL, NULL, 2750000, NULL, NULL, 30250000),
(15, 8, '1', '2018-10-16', 'tes termin', '100.00', 1000000, 0, '10.00', '0.00', 100000, 0, 1000000, 1100000),
(16, 10, '1', '2018-11-05', 'setelah bapp', '50.00', 500000, NULL, NULL, NULL, 0, NULL, NULL, 500000),
(17, 10, '2', '2018-11-22', 'balabkanakbak', '20.00', 200000, NULL, NULL, NULL, 0, NULL, NULL, 200000),
(18, 11, '1', '2018-12-10', 'Termin 1 bayar setelah aaaa', '50.00', 15000000, NULL, NULL, NULL, 1000000, NULL, NULL, 16000000),
(20, 11, '2', '2018-12-31', 'Setelah bla bla bla', '50.00', 15000000, NULL, NULL, NULL, 1000000, NULL, NULL, 16000000),
(22, 12, '1', '2018-12-20', 'tes termin', '100.00', 11000000, NULL, NULL, NULL, 100000, NULL, NULL, 11100000),
(23, 13, 'TERMIN I', '2019-03-08', 'DP 35% SETELAH TANDA TANGAN APPROVAL', '35.00', 3465000, 0, '0.00', '0.00', 0, 0, 3465000, 3465000),
(25, 13, 'TERMIN II', '2019-03-12', '65% PELUNASAN H+1 SETELAH MATERI TERPASANG', '65.00', 6435000, 0, '0.00', '0.00', 0, 0, 6435000, 6435000),
(26, 14, 'TERMIN I', '2019-03-01', 'DP 35% SETELAH TANDA TANGAN APPROVAL', '35.00', 13125000, 0, '0.00', '0.00', 0, 0, 13125000, 13125000),
(27, 14, 'TERMIN II', '2019-03-08', 'PELUNASAN 7 HARI SETELAH MATERI TERPASANG (BAPP)', '65.00', 24375000, 0, '0.00', '0.00', 0, 0, 24375000, 24375000),
(28, 16, 'T1', '2019-05-17', 'PEMBAYARAN 100% PALING LAMBAT H-2 SEBELUM PENAYANGAN', '100.00', 30250000, 0, '0.00', '0.00', 0, 0, 30250000, 30250000),
(29, 17, 'T1', '2019-05-17', 'PEMBAYARAN 100% PALING LAMBAT H-2 DARI PEMASANGAN', '100.00', 16500000, 0, '0.00', '0.00', 0, 0, 16500000, 16500000),
(30, 18, 'T1', '2019-05-17', 'PEMBAYARAN 100% PALING LAMBAT H-2 SEBELUM PEMASANGAN', '100.00', 14000000, 0, '0.00', '0.00', 0, 0, 14000000, 14000000),
(32, 20, 'T1', '2019-05-17', 'PEMBAYARAN 100% PALING LAMBAT H-2 SEBELUM PEMASANGAN', '100.00', 14000000, 0, '0.00', '0.00', 0, 0, 14000000, 14000000),
(33, 19, 'I', '2019-07-03', 'PEMBAYARAN 50% SETELAH APPROVAL', '50.00', 30000000, 0, '0.00', '0.00', 0, 0, 30000000, 30000000),
(34, 19, 'II', '2019-07-08', 'PEMBAYARAN 50% SETELAH BAPP', '50.00', 30000000, 0, '0.00', '0.00', 0, 0, 30000000, 30000000),
(35, 23, 'I', '2019-07-15', '35% SETELAH APPROVAL', '35.00', 23625000, 0, '0.00', '0.00', 0, 0, 23625000, 23625000),
(36, 23, 'II', '2019-07-18', '65% SETELAH BAPP', '65.00', 43875000, 0, '0.00', '0.00', 0, 0, 43875000, 43875000),
(37, 24, 'I', '2019-07-12', '35% SETELAH APPROVAL', '35.00', 21000000, 0, '0.00', '0.00', 0, 0, 21000000, 21000000),
(38, 24, 'II', '2019-07-19', '65% SETELAH BAPP', '65.00', 39000000, 0, '0.00', '0.00', 0, 0, 39000000, 39000000),
(39, 25, '1', '2019-07-30', 'PEMBAYARAN RECOVERING 100% SETELAH BAPP', '100.00', 1650000, 0, '0.00', '0.00', 0, 0, 1650000, 1650000),
(40, 26, '1', '2019-08-12', 'TERMIN I PEMBAYARAN 100% SETELAH APPROVAL', '100.00', 7500000, 0, '0.00', '0.00', 0, 0, 7500000, 7500000),
(41, 27, '1', '2019-08-29', 'PEMBAYARAN 100% 14 HARI SETELAH PENAYANGAN VISUAL', '100.00', 15000000, 0, '0.00', '0.00', 0, 0, 15000000, 15000000);

-- --------------------------------------------------------

--
-- Table structure for table `bankin_det`
--

CREATE TABLE `bankin_det` (
  `BNKDET_ID` int(11) NOT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `BNK_ID` int(11) DEFAULT NULL,
  `BNKDET_INVID` char(30) DEFAULT NULL,
  `BNKDET_TYPE` char(1) DEFAULT NULL,
  `BNKDET_NUM` char(30) DEFAULT NULL,
  `BNKDET_REFF` char(30) DEFAULT NULL,
  `BNKDET_INFO` varchar(1024) DEFAULT NULL,
  `BNKDET_AMOUNT` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankin_det`
--

INSERT INTO `bankin_det` (`BNKDET_ID`, `COA_ID`, `BNK_ID`, `BNKDET_INVID`, `BNKDET_TYPE`, `BNKDET_NUM`, `BNKDET_REFF`, `BNKDET_INFO`, `BNKDET_AMOUNT`) VALUES
(2, 1172, 1, '', 'T', 'TT1234567890', '', 'kolom keterangan bank masuk', '100000.00'),
(3, 316, 2, '', 'G', 'G12345', '', 'detail keterangan bank masuk', '100000.00'),
(5, 316, 3, '', 'T', 'TT12345', '', 'AAAAAA', '100000.00'),
(6, 1200, 4, '', 'G', '123.123', '', 'tes tanpa customer', '100000.00');

-- --------------------------------------------------------

--
-- Table structure for table `bankin_trxdet`
--

CREATE TABLE `bankin_trxdet` (
  `BNKTRX_ID` int(11) NOT NULL,
  `BNK_ID` int(11) DEFAULT NULL,
  `BNKTRX_TYPE` char(1) DEFAULT NULL,
  `BNKTRX_CODE` char(30) DEFAULT NULL,
  `BNKTRX_NUM` char(100) DEFAULT NULL,
  `BNKTRX_DATE` date DEFAULT NULL,
  `BNKTRX_AMOUNT` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankin_trxdet`
--

INSERT INTO `bankin_trxdet` (`BNKTRX_ID`, `BNK_ID`, `BNKTRX_TYPE`, `BNKTRX_CODE`, `BNKTRX_NUM`, `BNKTRX_DATE`, `BNKTRX_AMOUNT`) VALUES
(2, 1, 'T', NULL, 'TT1234567890', '2018-10-01', '100000.00'),
(3, 2, 'G', NULL, 'G12345', '2018-10-03', '100000.00'),
(4, 3, 'T', NULL, 'TT12345', '2018-10-18', '100000.00'),
(5, 4, 'T', NULL, '123.123', '2019-01-03', '100000.00');

-- --------------------------------------------------------

--
-- Table structure for table `bankout_det`
--

CREATE TABLE `bankout_det` (
  `BNKODET_ID` int(11) NOT NULL,
  `BNKO_ID` int(11) DEFAULT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `BNKODET_PRCID` char(30) DEFAULT NULL,
  `BNKODET_TYPE` char(1) DEFAULT NULL,
  `BNKODET_NUM` char(100) DEFAULT NULL,
  `BNKODET_REFF` char(100) DEFAULT NULL,
  `BNKODET_INFO` varchar(1024) DEFAULT NULL,
  `BNKODET_AMOUNT` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankout_det`
--

INSERT INTO `bankout_det` (`BNKODET_ID`, `BNKO_ID`, `COA_ID`, `BNKODET_PRCID`, `BNKODET_TYPE`, `BNKODET_NUM`, `BNKODET_REFF`, `BNKODET_INFO`, `BNKODET_AMOUNT`) VALUES
(1, 2, 1200, '', 'T', 'TT1029875', '', 'TES KETERANGAN DETAIL', '10000.00'),
(2, 3, 250, '', 'G', 'G123', '', 'tes giro keluar', '100000.00'),
(3, 4, 262, '', 'T', 'TT78901', '', 'koskosko', '100000.00'),
(4, 6, 1200, '', 'T', '123.123', '', 'tes supplier', '100000.00');

-- --------------------------------------------------------

--
-- Table structure for table `bankout_trxdet`
--

CREATE TABLE `bankout_trxdet` (
  `BNKTRXO_ID` int(11) NOT NULL,
  `BNKO_ID` int(11) DEFAULT NULL,
  `BNKTRXO_TYPE` char(1) DEFAULT NULL,
  `BNKTRXO_CODE` char(30) DEFAULT NULL,
  `BNKTRXO_NUM` char(100) DEFAULT NULL,
  `BNKTRXO_DATE` date DEFAULT NULL,
  `BNKTRXO_AMOUNT` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankout_trxdet`
--

INSERT INTO `bankout_trxdet` (`BNKTRXO_ID`, `BNKO_ID`, `BNKTRXO_TYPE`, `BNKTRXO_CODE`, `BNKTRXO_NUM`, `BNKTRXO_DATE`, `BNKTRXO_AMOUNT`) VALUES
(1, 2, 'T', NULL, 'TT1029875', '2018-10-03', '10000.00'),
(2, 3, 'G', NULL, 'G123', '2018-10-04', '100000.00'),
(3, 4, 'T', NULL, 'TT78901', '2018-10-18', '100000.00'),
(4, 6, 'T', NULL, '123.123', '2019-01-04', '100000.00');

-- --------------------------------------------------------

--
-- Table structure for table `bapplog_details`
--

CREATE TABLE `bapplog_details` (
  `DETBALG_ID` int(11) NOT NULL,
  `BALG_ID` int(11) DEFAULT NULL,
  `DETBALG_IMGNAME` varchar(1024) DEFAULT NULL,
  `DETBALG_IMGPATH` varchar(1024) DEFAULT NULL,
  `DETBALG_THUMBS` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bapplog_details`
--

INSERT INTO `bapplog_details` (`DETBALG_ID`, `BALG_ID`, `DETBALG_IMGNAME`, `DETBALG_IMGPATH`, `DETBALG_THUMBS`) VALUES
(1, 1, 'img_1540190159_.jpg', './assets/img/bapplog/img_1540190159_.jpg', './assets/img/bapplog/thumbs/img_1540190159_.jpg'),
(2, 2, 'img_1544693030_.jpg', './assets/img/bapplog/img_1544693030_.jpg', './assets/img/bapplog/thumbs/img_1544693030_.jpg'),
(4, 2, 'img_1544693703_B11812000001.jpg', './assets/img/bapplog/img_1544693703_B11812000001.jpg', './assets/img/bapplog/thumbs/img_1544693703_B11812000001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bapp_details`
--

CREATE TABLE `bapp_details` (
  `DETBAPP_ID` int(11) NOT NULL,
  `BAPP_ID` int(11) DEFAULT NULL,
  `DETBAPP_IMGNAME` char(250) DEFAULT NULL,
  `DETBAPP_IMGPATH` char(250) DEFAULT NULL,
  `DETBAPP_THUMBS` char(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bapp_details`
--

INSERT INTO `bapp_details` (`DETBAPP_ID`, `BAPP_ID`, `DETBAPP_IMGNAME`, `DETBAPP_IMGPATH`, `DETBAPP_THUMBS`) VALUES
(1, 2, 'img_1540345270_BA1810000001.jpg', './assets/img/bapp/img_1540345270_BA1810000001.jpg', './assets/img/bapp/thumbs/img_1540345270_BA1810000001.jpg'),
(2, 2, 'img_1540345271_BA1810000001.jpg', './assets/img/bapp/img_1540345271_BA1810000001.jpg', './assets/img/bapp/thumbs/img_1540345271_BA1810000001.jpg'),
(4, 1, 'img_1540350542_BA1809000001.jpg', './assets/img/bapp/img_1540350542_BA1809000001.jpg', './assets/img/bapp/thumbs/img_1540350542_BA1809000001.jpg'),
(5, 3, 'img_1552284795_BA1903000001.jpeg', './assets/img/bapp/img_1552284795_BA1903000001.jpeg', './assets/img/bapp/thumbs/img_1552284795_BA1903000001.jpeg'),
(6, 3, 'img_1552372068_BA1903000001.jpeg', './assets/img/bapp/img_1552372068_BA1903000001.jpeg', './assets/img/bapp/thumbs/img_1552372068_BA1903000001.jpeg'),
(8, 5, 'img_1554361572_BA1904000001.jpeg', './assets/img/bapp/img_1554361572_BA1904000001.jpeg', './assets/img/bapp/thumbs/img_1554361572_BA1904000001.jpeg'),
(10, 5, 'img_1554429174_BA1904000001.jpeg', './assets/img/bapp/img_1554429174_BA1904000001.jpeg', './assets/img/bapp/thumbs/img_1554429174_BA1904000001.jpeg'),
(11, 6, 'img_1557800896_BA1905000001.jpg', './assets/img/bapp/img_1557800896_BA1905000001.jpg', './assets/img/bapp/thumbs/img_1557800896_BA1905000001.jpg'),
(12, 6, 'img_1557800897_BA1905000001.jpg', './assets/img/bapp/img_1557800897_BA1905000001.jpg', './assets/img/bapp/thumbs/img_1557800897_BA1905000001.jpg'),
(13, 7, 'img_1557801308_BA1905000002.jpg', './assets/img/bapp/img_1557801308_BA1905000002.jpg', './assets/img/bapp/thumbs/img_1557801308_BA1905000002.jpg'),
(14, 7, 'img_1557801309_BA1905000002.jpg', './assets/img/bapp/img_1557801309_BA1905000002.jpg', './assets/img/bapp/thumbs/img_1557801309_BA1905000002.jpg'),
(15, 8, 'img_1557801390_BA1905000003.jpg', './assets/img/bapp/img_1557801390_BA1905000003.jpg', './assets/img/bapp/thumbs/img_1557801390_BA1905000003.jpg'),
(16, 8, 'img_1557801391_BA1905000003.jpg', './assets/img/bapp/img_1557801391_BA1905000003.jpg', './assets/img/bapp/thumbs/img_1557801391_BA1905000003.jpg'),
(17, 10, 'img_1562897001_BA1907000001.jpg', './assets/img/bapp/img_1562897001_BA1907000001.jpg', './assets/img/bapp/thumbs/img_1562897001_BA1907000001.jpg'),
(18, 10, 'img_1562897006_BA1907000001.jpg', './assets/img/bapp/img_1562897006_BA1907000001.jpg', './assets/img/bapp/thumbs/img_1562897006_BA1907000001.jpg'),
(19, 11, 'img_1564365572_BA1907000002.jpg', './assets/img/bapp/img_1564365572_BA1907000002.jpg', './assets/img/bapp/thumbs/img_1564365572_BA1907000002.jpg'),
(20, 11, 'img_1564365575_BA1907000002.jpg', './assets/img/bapp/img_1564365575_BA1907000002.jpg', './assets/img/bapp/thumbs/img_1564365575_BA1907000002.jpg'),
(21, 12, 'img_1564470320_BA1907000003.jpg', './assets/img/bapp/img_1564470320_BA1907000003.jpg', './assets/img/bapp/thumbs/img_1564470320_BA1907000003.jpg'),
(22, 12, 'img_1564470324_BA1907000003.jpg', './assets/img/bapp/img_1564470324_BA1907000003.jpg', './assets/img/bapp/thumbs/img_1564470324_BA1907000003.jpg'),
(23, 13, 'img_1565573376_BA1908000001.jpg', './assets/img/bapp/img_1565573376_BA1908000001.jpg', './assets/img/bapp/thumbs/img_1565573376_BA1908000001.jpg'),
(25, 13, 'img_1565574313_BA1908000001.jpg', './assets/img/bapp/img_1565574313_BA1908000001.jpg', './assets/img/bapp/thumbs/img_1565574313_BA1908000001.jpg'),
(26, 14, 'img_1566354881_BA1908000002.jpg', './assets/img/bapp/img_1566354881_BA1908000002.jpg', './assets/img/bapp/thumbs/img_1566354881_BA1908000002.jpg'),
(27, 14, 'img_1566354884_BA1908000002.jpg', './assets/img/bapp/img_1566354884_BA1908000002.jpg', './assets/img/bapp/thumbs/img_1566354884_BA1908000002.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brcppn_details`
--

CREATE TABLE `brcppn_details` (
  `BPPNDET_ID` int(11) NOT NULL,
  `BPPN_ID` int(11) DEFAULT NULL,
  `BPPNDET_CODE` char(30) DEFAULT NULL,
  `BPPNDET_INVID` int(11) DEFAULT NULL,
  `BPPNDET_INVCODE` char(30) DEFAULT NULL,
  `BPPNDET_INVDPP` bigint(20) DEFAULT NULL,
  `BPPNDET_INVPPN` bigint(20) DEFAULT NULL,
  `BPPNDET_INVSUM` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `budget_det`
--

CREATE TABLE `budget_det` (
  `BUDDET_ID` int(11) NOT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `BUD_ID` int(11) DEFAULT NULL,
  `BUDDET_CODE` char(30) DEFAULT NULL,
  `BUDDET_INFO` varchar(1024) DEFAULT NULL,
  `BUDDET_SUM` bigint(20) DEFAULT NULL,
  `BUDDET_AMOUNT` bigint(20) DEFAULT NULL,
  `BUDDET_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buku_bank`
--

CREATE TABLE `buku_bank` (
  `BNKBOOK_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `BRANCH_ID` int(11) NOT NULL,
  `BNK_ID` int(11) NOT NULL,
  `BNK_CODE` varchar(20) NOT NULL,
  `BNK_DATE` date NOT NULL,
  `COA_ID` int(11) NOT NULL,
  `ACC` char(200) NOT NULL,
  `BNK_INFO` varchar(1024) NOT NULL,
  `BNK_AMOUNT` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buku_giro`
--

CREATE TABLE `buku_giro` (
  `GRBOOK_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `BRANCH_ID` int(11) NOT NULL,
  `BANK_ID` int(11) NOT NULL,
  `REFF_ID` char(50) NOT NULL,
  `BNK_CODE` varchar(20) NOT NULL,
  `GR_NUMBER` varchar(20) NOT NULL,
  `CUST_SUPP_ID` int(11) NOT NULL,
  `RECEIVE_DATE` date NOT NULL,
  `GR_DATE` date NOT NULL,
  `GR_CODE` varchar(20) DEFAULT NULL,
  `CAIR_DATE` date DEFAULT NULL,
  `CAIR_STS` int(11) NOT NULL,
  `BLOKIR_STS` int(11) NOT NULL,
  `GR_AMOUNT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buku_kas`
--

CREATE TABLE `buku_kas` (
  `CSHBOOK_ID` int(11) NOT NULL,
  `CSH_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `CSH_CODE` varchar(20) NOT NULL,
  `CSH_DATE` date NOT NULL,
  `COA_ID` int(11) NOT NULL,
  `ACC` char(200) NOT NULL,
  `CSH_INFO` varchar(1024) NOT NULL,
  `CSH_AMOUNT` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cashin_det`
--

CREATE TABLE `cashin_det` (
  `CSHINDET_ID` int(11) NOT NULL,
  `CSH_ID` int(11) DEFAULT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `CASHINDET_INVID` char(30) DEFAULT NULL,
  `CSHINDET_REFF` char(30) DEFAULT NULL,
  `CSHINDET_INFO` varchar(1024) DEFAULT NULL,
  `CSHDETIN_AMOUNT` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashin_det`
--

INSERT INTO `cashin_det` (`CSHINDET_ID`, `CSH_ID`, `COA_ID`, `CASHINDET_INVID`, `CSHINDET_REFF`, `CSHINDET_INFO`, `CSHDETIN_AMOUNT`) VALUES
(2, 1, 1518, '', '', 'info kolom kas masuk detail', '100000.00'),
(3, 2, 1175, '', '', 'jgjughujgu', '100000.00');

-- --------------------------------------------------------

--
-- Table structure for table `cashout_det`
--

CREATE TABLE `cashout_det` (
  `CSHODET_ID` int(11) NOT NULL,
  `CSHO_ID` int(11) DEFAULT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `CSHODET_PRCID` char(30) DEFAULT NULL,
  `CSHODET_REFF` char(30) DEFAULT NULL,
  `CSHODET_INFO` varchar(1024) DEFAULT NULL,
  `CSHODET_AMOUNT` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashout_det`
--

INSERT INTO `cashout_det` (`CSHODET_ID`, `CSHO_ID`, `COA_ID`, `CSHODET_PRCID`, `CSHODET_REFF`, `CSHODET_INFO`, `CSHODET_AMOUNT`) VALUES
(1, 1, 1200, '', '', 'kolom info kas keluar detail', '100000.00'),
(2, 2, 1200, '', '', 'tftfttftftf', '10000.00'),
(4, 3, 319, '2', 'BL/1809/000001', 'asdfghjkjhgfd - BL/1809/000001', '35000.00'),
(5, 4, 1200, '', '', 'tes supp', '100000.00');

-- --------------------------------------------------------

--
-- Table structure for table `chart_of_account`
--

CREATE TABLE `chart_of_account` (
  `COA_ID` int(11) NOT NULL,
  `PAR_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `COA_ACC` char(30) DEFAULT NULL,
  `COA_ACCNAME` char(100) DEFAULT NULL,
  `COA_OWNER` char(100) DEFAULT NULL,
  `COA_DEBIT` decimal(10,0) DEFAULT NULL,
  `COA_CREDIT` decimal(10,0) DEFAULT NULL,
  `COA_SALDO` decimal(10,0) DEFAULT NULL,
  `COA_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chart_of_account`
--

INSERT INTO `chart_of_account` (`COA_ID`, `PAR_ID`, `BRANCH_ID`, `COA_ACC`, `COA_ACCNAME`, `COA_OWNER`, `COA_DEBIT`, `COA_CREDIT`, `COA_SALDO`, `COA_DTSTS`) VALUES
(1, 17, 1, '1110001', 'KAS HO', NULL, '0', '0', '0', '1'),
(2, 17, 5, '1110005', 'KAS WIKLAN', '', '0', '0', '0', '1'),
(3, 17, 5, '1110011', 'NOTA GANTUNG WIKLAN', '', '0', '0', '0', '1'),
(4, 17, 5, '1110017', 'AYAT SILANG WIKLAN', '', '0', '0', '0', '1'),
(5, 18, 5, '1130017', 'PIUTANG USAHA OUTDOOR WIKLAN', '', '0', '0', '0', '1'),
(6, 18, 5, '1130018', 'PIUTANG USAHA PAJAK REKLAME WIKLAN', '', '0', '0', '0', '1'),
(7, 18, 5, '1130020', 'PIUTANG JAMBONG WIKLAN', '', '0', '0', '0', '1'),
(10, 18, 5, '1130020', 'PIUTANG JAMBONG WIKLAN', '', '0', '0', '0', '1'),
(11, 19, 5, '1140016', 'PIUTANG KARYAWAN - WIKLAN', '', '0', '0', '0', '1'),
(12, 19, 5, '1140022', 'PIUTANG LAIN-LAIN - WIKLAN', '', '0', '0', '0', '1'),
(13, 20, 5, '1150005', 'PERSEDIAAN BAHAN BAKU - WIKLAN', '', '0', '0', '0', '1'),
(14, 20, 5, '1150011', 'PERSEDIAAN BARANG DALAM PROSES - WIKLAN', '', '0', '0', '0', '1'),
(15, 20, 5, '1150017', 'PERSEDIAAN BARANG JADI - WIKLAN', '', '0', '0', '0', '1'),
(16, 20, 5, '1150023', 'TMP PERSEDIAAN - WIKLAN', '', '0', '0', '0', '1'),
(17, 20, 5, '1150029', 'PERSEDIAAN INVENTARIS - WIKLAN', '', '0', '0', '0', '1'),
(18, 21, 5, '1160005', 'SEWA DIBAYAR DIMUKA - WIKLAN', '', '0', '0', '0', '1'),
(19, 21, 5, '1160011', 'ASURANSI DIBAYAR DIMUKA - WIKLAN', '', '0', '0', '0', '1'),
(20, 21, 5, '1160017', 'IJIN DIBAYAR DIMUKA - WIKLAN', '', '0', '0', '0', '1'),
(21, 21, 5, '1160023', 'SEWA LOKASI DIBAYAR DIMUKA - WIKLAN', '', '0', '0', '0', '1'),
(22, 21, 5, '1160029', 'SEWA GEDUNG DIBAYAR DIMUKA - WIKLAN', '', '0', '0', '0', '1'),
(23, 21, 5, '1160035', 'SEWA KENDARAAN DIBAYAR DIMUKA - WIKLAN', '', '0', '0', '0', '1'),
(24, 21, 5, '1160047', 'LAIN-LAIN DIBAYAR DIMUKA - WIKLAN', '', '0', '0', '0', '1'),
(25, 22, 5, '1170005', 'PPN MASUKAN - WIKLAN', '', '0', '0', '0', '1'),
(26, 22, 5, '1170011', 'PAJAK 21 DIBAYAR DIMUKA - WIKLAN', '', '0', '0', '0', '1'),
(27, 22, 5, '1170029', 'PAJAK 25 DIBAYAR DIMUKA - WIKLAN', '', '0', '0', '0', '1'),
(28, 22, 5, '1170035', 'PAJAK 4(2) DIBAYAR DIMUKA - WIKLAN', '', '0', '0', '0', '1'),
(29, 23, 5, '1180005', 'UM PEMBELIAN MOBIL -  WIKLAN', '', '0', '0', '0', '1'),
(30, 24, 5, '1200005', 'TANAH - WIKLAN', '', '0', '0', '0', '1'),
(31, 24, 5, '1200011', 'GEDUNG -  WIKLAN', '', '0', '0', '0', '1'),
(32, 24, 5, '1200017', 'KENDARAAN - WIKLAN', '', '0', '0', '0', '1'),
(33, 24, 5, '1200023', 'INVENTARIS - WIKLAN', '', '0', '0', '0', '1'),
(34, 24, 5, '1200029', 'AKTIVA - BILLBOARD - WIKLAN', '', '0', '0', '0', '1'),
(35, 25, 5, '1210005', 'AK. PENY. GEDUNG - WIKLAN', '', '0', '0', '0', '1'),
(36, 25, 5, '1210011', 'AK. PENY. KENDARAAN - WIKLAN', '', '0', '0', '0', '1'),
(37, 25, 5, '1210017', 'AK. PENY. INVENTARIS - WIKLAN', '', '0', '0', '0', '1'),
(38, 25, 5, '1210029', 'AK. PENY. BILLBOARD - WIKLAN', '', '0', '0', '0', '1'),
(39, 26, 5, '2140006', 'HUTANG WIKLAN', '', '0', '0', '0', '1'),
(40, 26, 5, '2140015', 'HUTANG LAIN-LAIN WIKLAN', '', '0', '0', '0', '1'),
(41, 27, 5, '3110005', 'MODAL SAHAM WIKLAN', '', '0', '0', '0', '1'),
(42, 28, 5, '3120009', 'LABA DITAHAN WIKLAN', '', '0', '0', '0', '1'),
(43, 28, 5, '3120010', 'SALDO LABA/RUGI BERJALAN WIKLAN', '', '0', '0', '0', '1'),
(44, 29, 5, '4110005', 'PENDAPATAN OUTDOR - WIKLAN', '', '0', '0', '0', '1'),
(45, 29, 5, '4110011', 'PENDAPATAN PAJAK REKLAME - WIKLAN', '', '0', '0', '0', '1'),
(46, 29, 5, '4110023', 'PENDAPATAN/PENJUALAN - WIKLAN', '', '0', '0', '0', '1'),
(47, 30, 5, '4120005', 'POTONGAN/DISCOUNT PENJUALAN OUTDOOR - WIKLAN', '', '0', '0', '0', '1'),
(48, 30, 5, '4120009', 'POTONGAN/DISCOUNT PENJUALAN PAJAK REKLAME - WIKLAN', '', '0', '0', '0', '1'),
(49, 30, 5, '4120012', 'POTONGAN/DISCOUNT PENJUALAN MEDIA - WIKLAN', '', '0', '0', '0', '1'),
(50, 30, 5, '4120017', 'POTONGAN/DISCOUNT PENJUALAN - WIKLAN', '', '0', '0', '0', '1'),
(51, 31, 5, '4130005', 'RETURN PENJUALAN OUTDOOR - WIKLAN', '', '0', '0', '0', '1'),
(52, 31, 5, '4130009', 'RETURN PENJUALAN PAJAK REKLAME - WIKLAN', '', '0', '0', '0', '1'),
(53, 32, 5, '4140005', 'POTONGAN/DISCOUNT RETURN JUAL OUTDOOR - WIKLAN', '', '0', '0', '0', '1'),
(54, 32, 5, '4140008', 'POTONGAN/DISCOUNT RETURN JUAL PAJAK REKLAME - WIKLAN', '', '0', '0', '0', '1'),
(55, 32, 5, '4140010', 'POTONGAN/DISCOUNT RETURN JUAL MEDIA - WIKLAN', '', '0', '0', '0', '1'),
(56, 32, 5, '4140015', 'POTONGAN/DISCOUNT RETURN PENJUALAN - WIKLAN', '', '0', '0', '0', '1'),
(57, 33, 5, '4150005', 'PENDAPATAN USAHA LAINNYA WIKLAN', '', '0', '0', '0', '1'),
(58, 34, 5, '5110005', 'HPP/PEMBELIAN - WIKLAN', '', '0', '0', '0', '1'),
(59, 34, 5, '5110011', 'POTONGAN PEMBELIAN - WIKLAN', '', '0', '0', '0', '1'),
(60, 34, 5, '5110017', 'RETURN PEMBELIAN - WIKLAN', '', '0', '0', '0', '1'),
(61, 34, 5, '5110023', 'POTONGAN/DISCOUNT RETURN PEMBELIAN - WIKLAN', '', '0', '0', '0', '1'),
(62, 34, 5, '5110029', 'PPN RETURN BELI - WIKLAN', '', '0', '0', '0', '1'),
(63, 34, 5, '5110035', 'ONGKOS KIRIM PEMBELIAN - WIKLAN', '', '0', '0', '0', '1'),
(64, 34, 5, '5110042', 'HPP PERSEDIAAN - WIKLAN', '', '0', '0', '0', '1'),
(65, 34, 5, '5110045', 'SEWA LOKASI - WIKLAN', '', '0', '0', '0', '1'),
(66, 34, 5, '5110047', 'POTONGAN / DISCOUNT SEWA LOKASI - WIKLAN', '', '0', '0', '0', '1'),
(67, 35, 5, '6110057', 'BY ATK,FOTOCOPY,PERCETAKAN WIKLAN', '', '0', '0', '0', '1'),
(68, 35, 5, '6110058', 'BIAYA RUMAH TANGGA WIKLAN', '', '0', '0', '0', '1'),
(69, 35, 5, '6110059', 'BIAYA SEMINAR/PELATIHAN WIKLAN', '', '0', '0', '0', '1'),
(70, 35, 5, '6110060', 'UANG MAKAN KARYAWAN WIKLAN', '', '0', '0', '0', '1'),
(71, 35, 5, '6110061', 'BIAYA BENDA POS WIKLAN', '', '0', '0', '0', '1'),
(72, 35, 5, '6110062', 'BIAYA KIRIM PAKET WIKLAN', '', '0', '0', '0', '1'),
(73, 35, 5, '6110063', 'BIAYA INSENTIF (PERJALANAN DINAS) WIKLAN', '', '0', '0', '0', '1'),
(74, 35, 5, '6110064', 'BIAYA UANG MAKAN (PERJALANAN DINAS) WIKLAN', '', '0', '0', '0', '1'),
(75, 35, 5, '6110065', 'BIAYA PRJ DNS KANTOR (TRANSPORT/BIS/ANGK WIKLAN', '', '0', '0', '0', '1'),
(76, 35, 5, '6110066', 'PERJALANAN DINAS KNT (PENGINAPAN/KOST) WIKLAN', '', '0', '0', '0', '1'),
(77, 35, 5, '6110067', 'BIAYA ENTERTAINT PERJALANAN DINAS WIKLAN', '', '0', '0', '0', '1'),
(78, 35, 5, '6110068', 'BIAYA PERJALANAN DINAS LAIN-LAIN WIKLAN', '', '0', '0', '0', '1'),
(79, 35, 5, '6110069', 'BIAYA LEMBUR KARYAWAN KANTOR WIKLAN', '', '0', '0', '0', '1'),
(80, 35, 5, '6110070', 'BIAYA KANTOR LAIN-LAIN WIKLAN', '', '0', '0', '0', '1'),
(81, 36, 5, '6120021', 'BIAYA GAJI WIKLAN', '', '0', '0', '0', '1'),
(82, 36, 5, '6120022', 'BIAYA THR WIKLAN', '', '0', '0', '0', '1'),
(83, 36, 5, '6120023', 'BIAYA TUNJANGAN WIKLAN', '', '0', '0', '0', '1'),
(84, 36, 5, '6120024', 'BIAYA BPJS KESEHATAN WIKLAN', '', '0', '0', '0', '1'),
(85, 36, 5, '6120025', 'BIAYA BPJS KETENAGAKERJAAN WIKLAN', '', '0', '0', '0', '1'),
(86, 37, 5, '6130063', 'TRANSPORTASI (BIS/BBM MOTOR)  - WIKLAN', '', '0', '0', '0', '1'),
(87, 36, 5, '6130065', 'PARKIR - WIKLAN', '', '0', '0', '0', '1'),
(88, 36, 5, '6130066', 'PERON - WIKLAN', '', '0', '0', '0', '1'),
(89, 36, 5, '6130067', 'PENGINAPAN - WIKLAN', '', '0', '0', '0', '1'),
(90, 36, 5, '6130070', 'BIAYA PEMAKAIAN BARANG - WIKLAN', '', '0', '0', '0', '1'),
(91, 36, 5, '6130071', 'BIAYA KEAMANAN - WIKLAN', '', '0', '0', '0', '1'),
(92, 36, 5, '6130072', 'BIAYA PROYEK LAIN - WIKLAN', '', '0', '0', '0', '1'),
(93, 36, 5, '6130073', 'INSENTIF DRIVER - WIKLAN', '', '0', '0', '0', '1'),
(94, 36, 5, '6130074', 'UANG MAKAN DRIVER - WIKLAN', '', '0', '0', '0', '1'),
(95, 36, 5, '6130075', 'BIAYA AMORTISASI SEWA KANTOR - WIKLAN', '', '0', '0', '0', '1'),
(96, 36, 5, '6130076', 'BIAYA AMORTISASI KENDARAAN - WIKLAN', '', '0', '0', '0', '1'),
(97, 38, 5, '6170005', 'BIAYA LISTRIK PROYEK WIKLAN', '', '0', '0', '0', '1'),
(98, 39, 5, '6180005', 'BIAYA LISTRIK WIKLAN', '', '0', '0', '0', '1'),
(99, 40, 5, '6190005', 'BIAYA TELEPON WIKLAN', '', '0', '0', '0', '1'),
(100, 41, 5, '6200005', 'BIAYA PDAM WIKLAN', '', '0', '0', '0', '1'),
(101, 42, 5, '6210005', 'BIAYA BBM /SOLAR WIKLAN', '', '0', '0', '0', '1'),
(102, 43, 5, '6220005', 'BIAYA TOL WIKLAN', '', '0', '0', '0', '1'),
(103, 44, 5, '6230017', 'BIAYA ADM BANK WIKLAN', '', '0', '0', '0', '1'),
(104, 44, 5, '6230018', 'BIAYA PROVISI BANK WIKLAN', '', '0', '0', '0', '1'),
(105, 44, 5, '6230019', 'BIAYA BUNGA PINJAMAN BANK WIKLAN', '', '0', '0', '0', '1'),
(106, 44, 5, '6230020', 'BIAYA MATERAI  BANK WIKLAN', '', '0', '0', '0', '1'),
(107, 45, 5, '6240021', 'PPH 21 WIKLAN', '', '0', '0', '0', '1'),
(108, 45, 5, '6240023', 'PPH 25 WIKLAN', '', '0', '0', '0', '1'),
(109, 45, 5, '6240024', 'PPN WIKLAN', '', '0', '0', '0', '1'),
(110, 45, 5, '6240025', 'PPh Pasal 4 Ayat 2 WIKLAN', '', '0', '0', '0', '1'),
(111, 46, 5, '6250017', 'BIAYA PBB WIKLAN', '', '0', '0', '0', '1'),
(112, 46, 5, '6250018', 'IURAN & LANGGANAN WIKLAN', '', '0', '0', '0', '1'),
(113, 46, 5, '6250019', 'BIAYA SUMBANGAN WIKLAN', '', '0', '0', '0', '1'),
(114, 46, 5, '6250020', 'BIAYA PENGURUSAN SURAT-SURAT WIKLAN', '', '0', '0', '0', '1'),
(115, 47, 5, '6260017', 'BIAYA ASURANSI KENDARAAN WIKLAN', '', '0', '0', '0', '1'),
(116, 47, 5, '6260018', 'BIAYA ASURANSI BANGUNAN WIKLAN', '', '0', '0', '0', '1'),
(117, 47, 5, '6260019', 'BIAYA ASURANSI BILLBOARD WIKLAN', '', '0', '0', '0', '1'),
(118, 47, 5, '6260020', 'BIAYA ASURANSI KESEHATAN WIKLAN', '', '0', '0', '0', '1'),
(119, 48, 5, '6270013', 'BIAYA PEMELIHARAAN GEDUNG WIKLAN', '', '0', '0', '0', '1'),
(120, 48, 5, '6270014', 'BIAYA PEMELIHARAAN INVENTARIS WIKLAN', '', '0', '0', '0', '1'),
(121, 48, 5, '6270015', 'BIAYA PEMELIHARAAN KENDARAAN WIKLAN', '', '0', '0', '0', '1'),
(122, 49, 5, '6280017', 'BIAYA PENYUSUTAN GEDUNG WIKLAN', '', '0', '0', '0', '1'),
(123, 49, 5, '6280018', 'BIAYA PENYUSUTAN KENDARAAN WIKLAN', '', '0', '0', '0', '1'),
(124, 49, 5, '6280019', 'BIAYA PENYUSUTAN INVENTARIS WIKLAN', '', '0', '0', '0', '1'),
(125, 49, 5, '6280020', 'BIAYA PENYUSUTAN BILLBOARD WIKLAN', '', '0', '0', '0', '1'),
(126, 50, 5, '7110013', 'PENDAPATAN JASA GIRO WIKLAN', '', '0', '0', '0', '1'),
(127, 50, 5, '7110014', 'PENDAPATAN LAIN-LAIN WIKLAN', '', '0', '0', '0', '1'),
(128, 50, 5, '7110015', 'PENDAPATAN KOMISI / FEE WIKLAN', '', '0', '0', '0', '1'),
(129, 51, 5, '8110009', 'Pajak Penghasilan Badan WIKLAN', '', '0', '0', '0', '1'),
(130, 51, 5, '8110010', 'BIAYA LAIN-LAIN WIKLAN', '', '0', '0', '0', '1'),
(131, 52, 5, '9110009', 'PEMBULATAN WIKLAN', '', '0', '0', '0', '1'),
(132, 52, 5, '9110010', 'SELISIH KAS WIKLAN', '', '0', '0', '0', '1'),
(134, 17, 1, '1110007', 'NOTA GANTUNG HO', NULL, '0', '0', '0', '1'),
(135, 17, 1, '1110013', 'AYAT SILANG HO', NULL, '0', '0', '0', '1'),
(136, 53, 1, '1120001', 'BANK PANIN A/C 415.5085.789 A/N PT MULTI ARTISTIKACITHRA', NULL, '0', '0', '0', '1'),
(137, 53, 1, '1120002', 'BANK PANIN A/C 416.5080.369 A/N RUDY WIJAYA', NULL, '0', '0', '0', '1'),
(138, 53, 1, '1120003', 'BANK NEGARA INDONESIA KMK A/C 038.9398.202 A/N PT. MULTI ARTISTIKACITHRA', NULL, '0', '0', '0', '1'),
(139, 53, 1, '1120006', 'BANK NEGARA INDONESIA PROMESE', NULL, '0', '0', '0', '1'),
(140, 53, 1, '1120007', 'BANK BCA CRV A/C 258.2100.773 A/N RUDY WIJAYA', NULL, '0', '0', '0', '1'),
(141, 53, 1, '1120010', 'BANK MANDIRI A/C 142.000.7484248 A/N PT. MULTI ARTISTIKACITHRA', NULL, '0', '0', '0', '1'),
(142, 53, 1, '1120012', 'BANK OCBC NISP A/C 0278.0000.9006', NULL, '0', '0', '0', '1'),
(143, 19, 1, '1140001', 'PIUTANG DIREKSI', NULL, '0', '0', '0', '1'),
(144, 19, 1, '1140002', 'PIUTANG GIRO', NULL, '0', '0', '0', '1'),
(145, 19, 1, '1140003', 'PIUTANG PIHAK III', NULL, '0', '0', '0', '1'),
(146, 19, 1, '1140004', 'PIUTANG MATCH', NULL, '0', '0', '0', '1'),
(147, 19, 1, '1140005', 'PIUTANG KCT', NULL, '0', '0', '0', '1'),
(148, 19, 1, '1140006', 'PIUTANG WPI', NULL, '0', '0', '0', '1'),
(149, 19, 1, '1140007', 'PIUTANG WIKLAN', NULL, '0', '0', '0', '1'),
(150, 19, 1, '1140008', 'PIUTANG RCP', NULL, '0', '0', '0', '1'),
(151, 19, 1, '1140009', 'PIUTANG OFFICE SURABAYA', NULL, '0', '0', '0', '1'),
(152, 19, 1, '1140010', 'TITIPAN OFFICE SURABAYA', NULL, '0', '0', '0', '1'),
(153, 19, 1, '1140011', 'TITIPAN OFFICE JAKARTA', NULL, '0', '0', '0', '1'),
(154, 19, 1, '1140012', 'PIUTANG KARYAWAN - HO', NULL, '0', '0', '0', '1'),
(155, 19, 1, '1140018', 'PIUTANG LAIN-LAIN - HO', NULL, '0', '0', '0', '1'),
(156, 20, 1, '1150001', 'PERSEDIAAN BAHAN BAKU - HO', NULL, '0', '0', '0', '1'),
(157, 20, 1, '1150007', 'PERSEDIAAN BARANG DALAM PROSES - HO', NULL, '0', '0', '0', '1'),
(158, 20, 1, '1150013', 'PERSEDIAAN BARANG JADI - HO', NULL, '0', '0', '0', '1'),
(159, 20, 1, '1150019', 'TMP PERSEDIAAN - HO', NULL, '0', '0', '0', '1'),
(160, 20, 1, '1150025', 'PERSEDIAAN INVENTARIS - HO', NULL, '0', '0', '0', '1'),
(161, 20, 1, '1150031', 'PERSEDIAAN BARANG BAGUS - HO', NULL, '0', '0', '0', '1'),
(162, 20, 1, '1150037', 'PERSEDIAAN BARANG BAD STOCK - HO', NULL, '0', '0', '0', '1'),
(163, 21, 1, '1160001', 'SEWA DIBAYAR DIMUKA - HO', NULL, '0', '0', '0', '1'),
(164, 21, 1, '1160007', 'ASURANSI DIBAYAR DIMUKA - HO', NULL, '0', '0', '0', '1'),
(165, 21, 1, '1160013', 'IJIN DIBAYAR DIMUKA - HO', NULL, '0', '0', '0', '1'),
(166, 21, 1, '1160019', 'SEWA LOKASI DIBAYAR DIMUKA - HO', NULL, '0', '0', '0', '1'),
(167, 21, 1, '1160020', 'SEWA LOKASI DIBAYAR DIMUKA - MATCH', NULL, '0', '0', '0', '1'),
(168, 21, 1, '1160025', 'SEWA GEDUNG DIBAYAR DIMUKA - HO', NULL, '0', '0', '0', '1'),
(169, 21, 1, '1160031', 'SEWA KENDARAAN DIBAYAR DIMUKA - HO', NULL, '0', '0', '0', '1'),
(170, 21, 1, '1160037', 'SEWA GUNA USAHA - HO', NULL, '0', '0', '0', '1'),
(171, 21, 1, '1160043', 'LAIN-LAIN DIBAYAR DIMUKA - HO', NULL, '0', '0', '0', '1'),
(172, 21, 1, '1160049', 'DANA NON BUDGETER', NULL, '0', '0', '0', '1'),
(173, 21, 1, '1160050', 'DANA NON BUDGETER DLM PROSES', NULL, '0', '0', '0', '1'),
(174, 22, 1, '1170001', 'PPN MASUKAN - HO', NULL, '0', '0', '0', '1'),
(175, 22, 1, '1170007', 'PAJAK 21 DIBAYAR DIMUKA - HO', NULL, '0', '0', '0', '1'),
(176, 22, 1, '1170013', 'PAJAK 22 DIBAYAR DIMUKA - HO', NULL, '0', '0', '0', '1'),
(177, 22, 1, '1170019', 'PAJAK 23 DIBAYAR DIMUKA - HO', NULL, '0', '0', '0', '1'),
(178, 22, 1, '1170025', 'PAJAK 25 DIBAYAR DIMUKA - HO', NULL, '0', '0', '0', '1'),
(179, 22, 1, '1170031', 'PAJAK 4(2) DIBAYAR DIMUKA - HO', NULL, '0', '0', '0', '1'),
(180, 23, 1, '1180001', 'UM PEMBELIAN MOBIL - HO', NULL, '0', '0', '0', '1'),
(181, 24, 1, '1200001', 'TANAH - HO', NULL, '0', '0', '0', '1'),
(182, 24, 1, '1200007', 'GEDUNG - HO', NULL, '0', '0', '0', '1'),
(183, 24, 1, '1200013', 'KENDARAAN - HO', NULL, '0', '0', '0', '1'),
(184, 24, 1, '1200019', 'INVENTARIS - HO', NULL, '0', '0', '0', '1'),
(185, 24, 1, '1200025', 'AKTIVA - BILLBOARD - HO', NULL, '0', '0', '0', '1'),
(186, 25, 1, '1210001', 'AK. PENY. GEDUNG - HO', NULL, '0', '0', '0', '1'),
(187, 25, 1, '1210007', 'AK. PENY. KENDARAAN - HO', NULL, '0', '0', '0', '1'),
(188, 25, 1, '1210013', 'AK. PENY. INVENTARIS - HO', NULL, '0', '0', '0', '1'),
(189, 25, 1, '1210019', 'AK. PENY. SEWA GUNA USAHA - HO', NULL, '0', '0', '0', '1'),
(190, 25, 1, '1210025', 'AK. PENY. BILLBOARD - HO', NULL, '0', '0', '0', '1'),
(191, 54, 1, '2110001', 'HUTANG BANK PANIN CENDANA (ANGSURAN)', NULL, '0', '0', '0', '1'),
(192, 54, 1, '2110002', 'HUTANG BANK HAGAKITA A/N RUDY', NULL, '0', '0', '0', '1'),
(193, 54, 1, '2110003', 'HUTANG KKB BCA', NULL, '0', '0', '0', '1'),
(194, 54, 1, '2110004', 'HUTANG BANK BRI PT. MULTI', NULL, '0', '0', '0', '1'),
(195, 54, 1, '2110005', 'HUTANG BANK MANDIRI PT. MULTI', NULL, '0', '0', '0', '1'),
(196, 54, 1, '2110006', 'HUTANG BANK PANIN CENDANA', NULL, '0', '0', '0', '1'),
(197, 54, 1, '2110007', 'HUTANG BANK MANDIRI REK TRANSAKSIONAL', NULL, '0', '0', '0', '1'),
(198, 54, 1, '2110008', 'HUTANG BANK MANDIRI REK KMK', NULL, '0', '0', '0', '1'),
(199, 54, 1, '2110009', 'HUTANG BANK BCA KUPANG INDAH', NULL, '0', '0', '0', '1'),
(200, 54, 1, '2110010', 'HUTANG BANK NISP PT. MULTI ARTISTIKACITH', NULL, '0', '0', '0', '1'),
(201, 54, 1, '2110011', 'HUTANG BANK PERMATA PASAR ATOM', NULL, '0', '0', '0', '1'),
(202, 54, 1, '2110012', 'HUTANG BANK NEGARA INDONESIA  ANGSURAN', NULL, '0', '0', '0', '1'),
(203, 54, 1, '2110013', 'HUTANG BANK NEGARA INDONESIA KMK', NULL, '0', '0', '0', '1'),
(204, 54, 1, '2110014', 'HUTANG BANK NEGARA INDONESIA PROMESE', NULL, '0', '0', '0', '1'),
(205, 54, 1, '2110015', 'HUTANG BANK PANIN CENDANA TOPUP', NULL, '0', '0', '0', '1'),
(206, 55, 1, '2120001', 'HUTANG USAHA', NULL, '0', '0', '0', '1'),
(207, 55, 1, '2120002', 'HUTANG WS KE MATCH', NULL, '0', '0', '0', '1'),
(208, 55, 1, '2120003', 'HUTANG GIRO', NULL, '0', '0', '0', '1'),
(209, 55, 1, '2120004', 'HUTANG PERSIL', NULL, '0', '0', '0', '1'),
(210, 55, 1, '2120005', 'HUTANG SUB KONTRAK', NULL, '0', '0', '0', '1'),
(211, 56, 1, '2130001', 'HUTANG PAJAK PPh PASAL 21', NULL, '0', '0', '0', '1'),
(212, 56, 1, '2130002', 'HUTANG PAJAK PPh PASAL 22', NULL, '0', '0', '0', '1'),
(213, 56, 1, '2130003', 'HUTANG PAJAK PPh PASAL 23', NULL, '0', '0', '0', '1'),
(214, 56, 1, '2130004', 'HUTANG PAJAK PPh PASAL 29', NULL, '0', '0', '0', '1'),
(215, 56, 1, '2130005', 'HUTANG PAJAK PASAL 4 AYAT 2', NULL, '0', '0', '0', '1'),
(216, 56, 1, '2130006', 'HUTANG PAJAK PPN KELUARAN', NULL, '0', '0', '0', '1'),
(217, 56, 1, '2130007', 'HUTANG PAJAK LAIN-LAIN', NULL, '0', '0', '0', '1'),
(218, 26, 1, '2140001', 'HUTANG DIREKSI', NULL, '0', '0', '0', '1'),
(219, 26, 1, '2140002', 'HUTANG PIHAK KE III', NULL, '0', '0', '0', '1'),
(220, 26, 1, '2140008', 'HUTANG OFFICE SURABAYA', NULL, '0', '0', '0', '1'),
(221, 26, 1, '2140009', 'REKENING OFFICE SURABAYA', NULL, '0', '0', '0', '1'),
(222, 26, 1, '2140010', 'REKENING OFFICE JAKARTA', NULL, '0', '0', '0', '1'),
(223, 26, 1, '2140011', 'HUTANG LAIN-LAIN HO', NULL, '0', '0', '0', '1'),
(224, 27, 1, '3110001', 'MODAL SAHAM HO', NULL, '0', '0', '0', '1'),
(225, 28, 1, '3120001', 'LABA DITAHAN HO', NULL, '0', '0', '0', '1'),
(226, 28, 1, '3120002', 'SALDO LABA/RUGI BERJALAN HO', NULL, '0', '0', '0', '1'),
(227, 29, 1, '4110001', 'PENDAPATAN OUTDOR - HO', NULL, '0', '0', '0', '1'),
(228, 29, 1, '4110007', 'PENDAPATAN PAJAK REKLAME - HO', NULL, '0', '0', '0', '1'),
(229, 29, 1, '4110013', 'PENDAPATAN MEDIA - HO', NULL, '0', '0', '0', '1'),
(230, 29, 1, '4110019', 'PENDAPATAN/PENJUALAN - HO', NULL, '0', '0', '0', '1'),
(231, 30, 1, '4120001', 'POTONGAN/DISCOUNT PENJUALAN OUTDOOR - HO', NULL, '0', '0', '0', '1'),
(232, 30, 1, '4120007', 'POTONGAN/DISCOUNT PENJUALAN PAJAK REKLAME - HO', NULL, '0', '0', '0', '1'),
(233, 30, 1, '4120010', 'POTONGAN/DISCOUNT PENJUALAN MEDIA - HO', NULL, '0', '0', '0', '1'),
(234, 30, 1, '4120013', 'POTONGAN/DISCOUNT PENJUALAN - HO', NULL, '0', '0', '0', '1'),
(235, 31, 1, '4130001', 'RETURN PENJUALAN OUTDOOR - HO', NULL, '0', '0', '0', '1'),
(236, 31, 1, '4130007', 'RETURN PENJUALAN PAJAK REKLAME - HO', NULL, '0', '0', '0', '1'),
(237, 31, 1, '4130010', 'RETURN PENJUALAN MEDIA - HO', NULL, '0', '0', '0', '1'),
(238, 32, 1, '4140001', 'POTONGAN/DISCOUNT RETURN JUAL OUTDOOR - HO', NULL, '0', '0', '0', '1'),
(239, 32, 1, '4140011', 'POTONGAN/DISCOUNT RETURN PENJUALAN - HO', NULL, '0', '0', '0', '1'),
(240, 33, 1, '4150001', 'PENDAPATAN USAHA LAINNYA HO', NULL, '0', '0', '0', '1'),
(241, 34, 1, '5110001', 'HPP/PEMBELIAN - HO', NULL, '0', '0', '0', '1'),
(242, 34, 1, '5110007', 'POTONGAN PEMBELIAN - HO', NULL, '0', '0', '0', '1'),
(243, 34, 1, '5110013', 'RETURN PEMBELIAN - HO', NULL, '0', '0', '0', '1'),
(244, 34, 1, '5110019', 'POTONGAN/DISCOUNT RETURN PEMBELIAN - HO', NULL, '0', '0', '0', '1'),
(245, 34, 1, '5110025', 'PPN RETURN BELI - HO', NULL, '0', '0', '0', '1'),
(246, 34, 1, '5110031', 'ONGKOS KIRIM PEMBELIAN - HO', NULL, '0', '0', '0', '1'),
(247, 34, 1, '5110037', 'POTONG+TEKUK ALKONEL', NULL, '0', '0', '0', '1'),
(248, 34, 1, '5110038', 'HPP PERSEDIAAN - HO', NULL, '0', '0', '0', '1'),
(249, 35, 1, '6110001', 'BY ATK,FOTOCOPY,PERCETAKAN HO', NULL, '0', '0', '0', '1'),
(250, 35, 1, '6110002', 'BIAYA RUMAH TANGGA HO', NULL, '0', '0', '0', '1'),
(251, 35, 1, '6110003', 'BIAYA SEMINAR/PELATIHAN HO', NULL, '0', '0', '0', '1'),
(252, 35, 1, '6110004', 'UANG MAKAN KARYAWAN HO', NULL, '0', '0', '0', '1'),
(253, 35, 1, '6110005', 'BIAYA BENDA POS HO', NULL, '0', '0', '0', '1'),
(254, 35, 1, '6110006', 'BIAYA KIRIM PAKET HO', NULL, '0', '0', '0', '1'),
(255, 35, 1, '6110007', 'BIAYA INSENTIF (PERJALANAN DINAS) HO', NULL, '0', '0', '0', '1'),
(256, 35, 1, '6110008', 'BIAYA UANG MAKAN (PERJALANAN DINAS) HO', NULL, '0', '0', '0', '1'),
(257, 35, 1, '6110009', 'BIAYA PRJ DNS KANTOR (TRANSPORT/BIS/ANGK HO', NULL, '0', '0', '0', '1'),
(258, 35, 1, '6110010', 'PERJALANAN DINAS KNT (PENGINAPAN/KOST) HO', NULL, '0', '0', '0', '1'),
(259, 35, 1, '6110011', 'BIAYA ENTERTAINT PERJALANAN DINAS HO', NULL, '0', '0', '0', '1'),
(260, 35, 1, '6110012', 'BIAYA PERJALANAN DINAS LAIN-LAIN HO', NULL, '0', '0', '0', '1'),
(261, 35, 1, '6110013', 'BIAYA LEMBUR KARYAWAN KANTOR HO', NULL, '0', '0', '0', '1'),
(262, 35, 1, '6110014', 'BIAYA KANTOR LAIN-LAIN HO', NULL, '0', '0', '0', '1'),
(263, 36, 1, '6120001', 'BIAYA GAJI HO', NULL, '0', '0', '0', '1'),
(264, 36, 1, '6120002', 'BIAYA THR HO', NULL, '0', '0', '0', '1'),
(265, 36, 1, '6120003', 'BIAYA TUNJANGAN HO', NULL, '0', '0', '0', '1'),
(266, 36, 1, '6120004', 'BIAYA BPJS KESEHATAN HO', NULL, '0', '0', '0', '1'),
(267, 36, 1, '6120005', 'BIAYA BPJS KETENAGAKERJAAN HO', NULL, '0', '0', '0', '1'),
(268, 37, 1, '6130001', 'UANG MAKAN LUAR KOTA - HO', NULL, '0', '0', '0', '1'),
(269, 37, 1, '6130002', 'UANG MAKAN PERJALANAN - HO', NULL, '0', '0', '0', '1'),
(270, 37, 1, '6130003', 'UANG MAKAN LEMBUR - HO', NULL, '0', '0', '0', '1'),
(271, 37, 1, '6130004', 'TRANSPORTASI (BIS/BBM MOTOR)  - HO', NULL, '0', '0', '0', '1'),
(272, 37, 1, '6130005', 'TOL TRUK ELF - HO', NULL, '0', '0', '0', '1'),
(273, 37, 1, '6130006', 'PARKIR - HO', NULL, '0', '0', '0', '1'),
(274, 37, 1, '6130007', 'PERON - HO', NULL, '0', '0', '0', '1'),
(275, 37, 1, '6130008', 'PENGINAPAN - HO', NULL, '0', '0', '0', '1'),
(276, 37, 1, '6130009', 'BIAYA MEL - HO', NULL, '0', '0', '0', '1'),
(277, 37, 1, '6130010', 'BIAYA BBM TRUCK ELF - HO', NULL, '0', '0', '0', '1'),
(278, 37, 1, '6130011', 'BIAYA PEMAKAIAN BARANG - HO', NULL, '0', '0', '0', '1'),
(279, 37, 1, '6130012', 'BIAYA KEAMANAN - HO', NULL, '0', '0', '0', '1'),
(280, 37, 1, '6130013', 'BIAYA PROYEK LAIN - HO', NULL, '0', '0', '0', '1'),
(281, 37, 1, '6130014', 'INSENTIF DRIVER - HO', NULL, '0', '0', '0', '1'),
(282, 37, 1, '6130015', 'UANG MAKAN DRIVER - HO', NULL, '0', '0', '0', '1'),
(283, 37, 1, '6130016', 'BIAYA AMORTISASI SEWA KANTOR - HO', NULL, '0', '0', '0', '1'),
(284, 37, 1, '6130017', 'BIAYA AMORTISASI KENDARAAN - HO', NULL, '0', '0', '0', '1'),
(285, 38, 1, '6170001', 'BIAYA LISTRIK PROYEK HO', NULL, '0', '0', '0', '1'),
(286, 39, 1, '6180001', 'BIAYA LISTRIK HO', NULL, '0', '0', '0', '1'),
(287, 40, 1, '6190001', 'BIAYA TELEPON HO', NULL, '0', '0', '0', '1'),
(288, 41, 1, '6200001', 'BIAYA PDAM HO', NULL, '0', '0', '0', '1'),
(289, 42, 1, '6210001', 'BIAYA BBM /SOLAR HO', NULL, '0', '0', '0', '1'),
(290, 43, 1, '6220001', 'BIAYA TOL HO', NULL, '0', '0', '0', '1'),
(291, 44, 1, '6230001', 'BIAYA ADM BANK HO', NULL, '0', '0', '0', '1'),
(292, 44, 1, '6230002', 'BIAYA PROVISI BANK HO', NULL, '0', '0', '0', '1'),
(293, 44, 1, '6230003', 'BIAYA BUNGA PINJAMAN BANK HO', NULL, '0', '0', '0', '1'),
(294, 44, 1, '6230004', 'BIAYA MATERAI  BANK HO', NULL, '0', '0', '0', '1'),
(295, 45, 1, '6240001', 'PPH 21 HO', NULL, '0', '0', '0', '1'),
(296, 45, 1, '6240002', 'PPH 23 HO', NULL, '0', '0', '0', '1'),
(297, 45, 1, '6240003', 'PPH 25 HO', NULL, '0', '0', '0', '1'),
(298, 45, 1, '6240004', 'PPN HO', NULL, '0', '0', '0', '1'),
(299, 45, 1, '6240005', 'PPh Pasal 4 Ayat 2 HO', NULL, '0', '0', '0', '1'),
(300, 46, 1, '6250001', 'BIAYA PBB HO', NULL, '0', '0', '0', '1'),
(301, 46, 1, '6250002', 'IURAN & LANGGANAN HO', NULL, '0', '0', '0', '1'),
(302, 46, 1, '6250003', 'BIAYA SUMBANGAN HO', NULL, '0', '0', '0', '1'),
(303, 46, 1, '6250004', 'BIAYA PENGURUSAN SURAT-SURAT HO', NULL, '0', '0', '0', '1'),
(304, 47, 1, '6260001', 'BIAYA ASURANSI KENDARAAN HO', NULL, '0', '0', '0', '1'),
(305, 47, 1, '6260002', 'BIAYA ASURANSI BANGUNAN HO', NULL, '0', '0', '0', '1'),
(306, 47, 1, '6260003', 'BIAYA ASURANSI BILLBOARD HO', NULL, '0', '0', '0', '1'),
(307, 47, 1, '6260004', 'BIAYA ASURANSI KESEHATAN HO', NULL, '0', '0', '0', '1'),
(308, 48, 1, '6270001', 'BIAYA PEMELIHARAAN GEDUNG HO', NULL, '0', '0', '0', '1'),
(309, 48, 1, '6270002', 'BIAYA PEMELIHARAAN INVENTARIS HO', NULL, '0', '0', '0', '1'),
(310, 48, 1, '6270003', 'BIAYA PEMELIHARAAN KENDARAAN HO', NULL, '0', '0', '0', '1'),
(311, 49, 1, '6280001', 'BIAYA PENYUSUTAN GEDUNG HO', NULL, '0', '0', '0', '1'),
(312, 49, 1, '6280002', 'BIAYA PENYUSUTAN KENDARAAN HO', NULL, '0', '0', '0', '1'),
(313, 49, 1, '6280003', 'BIAYA PENYUSUTAN INVENTARIS HO', NULL, '0', '0', '0', '1'),
(314, 49, 1, '6280004', 'BIAYA PENYUSUTAN BILLBOARD HO', NULL, '0', '0', '0', '1'),
(315, 50, 1, '7110001', 'PENDAPATAN JASA GIRO HO', NULL, '0', '0', '0', '1'),
(316, 50, 1, '7110002', 'PENDAPATAN LAIN-LAIN HO', NULL, '0', '0', '0', '1'),
(317, 50, 1, '7110003', 'PENDAPATAN KOMISI / FEE HO', NULL, '0', '0', '0', '1'),
(318, 51, 1, '8110001', 'Pajak Penghasilan Badan HO', NULL, '0', '0', '0', '1'),
(319, 51, 1, '8110002', 'BIAYA LAIN-LAIN HO', NULL, '0', '0', '0', '1'),
(320, 52, 1, '9110001', 'PEMBULATAN HO', NULL, '0', '0', '0', '1'),
(321, 52, 1, '9110002', 'SELISIH KAS HO', NULL, '0', '0', '0', '1'),
(322, 55, 5, '2120022', 'HUTANG USAHA WIKLAN', NULL, '0', '0', '0', '1'),
(323, 56, 5, '2130022', 'HUTANG PAJAK PPN KELUARAN WIKLAN', NULL, '0', '0', '0', '1'),
(1124, 17, 3, '1110002', 'KAS MATCH', NULL, '0', '0', '0', '1'),
(1125, 17, 3, '1110008', 'NOTA GANTUNG MATCH', NULL, '0', '0', '0', '1'),
(1126, 17, 3, '1110014', 'AYAT SILANG MATCH', NULL, '0', '0', '0', '1'),
(1127, 53, 3, '1120004', 'BANK NEGARA INDONESIA GIRO A/C 051.5151.525 A/N PT. MULTI ARTISTIKACITHRA', NULL, '0', '0', '0', '1'),
(1128, 53, 3, '1120009', 'BANK BCA MATCH JAKARTA 398.1397.094 A/N RUDY WIJAYA', NULL, '0', '0', '0', '1'),
(1129, 18, 3, '1130001', 'PIUTANG USAHA MATCH', NULL, '0', '0', '0', '1'),
(1130, 18, 3, '1130002', 'PIUTANG USAHA OUTDOOR MATCH', NULL, '0', '0', '0', '1'),
(1131, 18, 3, '1130003', 'PIUTANG USAHA PAJAK REKLAME MATCH', NULL, '0', '0', '0', '1'),
(1132, 18, 3, '1130004', 'PIUTANG USAHA MEDIA MATCH', NULL, '0', '0', '0', '1'),
(1133, 18, 3, '1130005', 'PIUTANG JAMBONG MATCH', NULL, '0', '0', '0', '1'),
(1134, 19, 3, '1140013', 'PIUTANG KARYAWAN - MATCH', NULL, '0', '0', '0', '1'),
(1135, 19, 3, '1140019', 'PIUTANG LAIN-LAIN - MATCH', NULL, '0', '0', '0', '1'),
(1136, 20, 3, '1150002', 'PERSEDIAAN BAHAN BAKU - MATCH', NULL, '0', '0', '0', '1'),
(1137, 20, 3, '1150008', 'PERSEDIAAN BARANG DALAM PROSES - MATCH', NULL, '0', '0', '0', '1'),
(1138, 20, 3, '1150014', 'PERSEDIAAN BARANG JADI - MATCH', NULL, '0', '0', '0', '1'),
(1139, 20, 3, '1150020', 'TMP PERSEDIAAN - MATCH', NULL, '0', '0', '0', '1'),
(1140, 20, 3, '1150026', 'PERSEDIAAN INVENTARIS - MATCH', NULL, '0', '0', '0', '1'),
(1141, 20, 3, '1150032', 'PERSEDIAAN BARANG BAGUS - MATCH', NULL, '0', '0', '0', '1'),
(1142, 20, 3, '1150038', 'PERSEDIAAN BARANG BAD STOCK - MATCH', NULL, '0', '0', '0', '1'),
(1143, 21, 3, '1160002', 'SEWA DIBAYAR DIMUKA - MATCH', NULL, '0', '0', '0', '1'),
(1144, 21, 3, '1160008', 'ASURANSI DIBAYAR DIMUKA - MATCH', NULL, '0', '0', '0', '1'),
(1145, 21, 3, '1160014', 'IJIN DIBAYAR DIMUKA - MATCH', NULL, '0', '0', '0', '1'),
(1146, 21, 3, '1160026', 'SEWA GEDUNG DIBAYAR DIMUKA - MATCH', NULL, '0', '0', '0', '1'),
(1147, 21, 3, '1160032', 'SEWA KENDARAAN DIBAYAR DIMUKA -  MATCH', NULL, '0', '0', '0', '1'),
(1148, 21, 3, '1160038', 'SEWA GUNA USAHA - MATCH', NULL, '0', '0', '0', '1'),
(1149, 21, 3, '1160044', 'LAIN-LAIN DIBAYAR DIMUKA - MATCH', NULL, '0', '0', '0', '1'),
(1150, 22, 3, '1170002', 'PPN MASUKAN - MATCH', NULL, '0', '0', '0', '1'),
(1151, 22, 3, '1170008', 'PAJAK 21 DIBAYAR DIMUKA - MATCH', NULL, '0', '0', '0', '1'),
(1152, 22, 3, '1170014', 'PAJAK 22 DIBAYAR DIMUKA - MATCH', NULL, '0', '0', '0', '1'),
(1153, 22, 3, '1170020', 'PAJAK 23 DIBAYAR DIMUKA - MATCH', NULL, '0', '0', '0', '1'),
(1154, 22, 3, '1170026', 'PAJAK 25 DIBAYAR DIMUKA - MATCH', NULL, '0', '0', '0', '1'),
(1155, 22, 3, '1170032', 'PAJAK 4(2) DIBAYAR DIMUKA - MATCH', NULL, '0', '0', '0', '1'),
(1156, 23, 3, '1180002', 'UM PEMBELIAN MOBIL - MATCH', NULL, '0', '0', '0', '1'),
(1157, 24, 3, '1200002', 'TANAH - MATCH', NULL, '0', '0', '0', '1'),
(1158, 24, 3, '1200008', 'GEDUNG - MATCH', NULL, '0', '0', '0', '1'),
(1159, 24, 3, '1200014', 'KENDARAAN - MATCH', NULL, '0', '0', '0', '1'),
(1160, 24, 3, '1200020', 'INVENTARIS - MATCH', NULL, '0', '0', '0', '1'),
(1161, 24, 3, '1200026', 'AKTIVA - BILLBOARD - MATCH', NULL, '0', '0', '0', '1'),
(1162, 25, 3, '1210002', 'AK. PENY. GEDUNG - MATCH', NULL, '0', '0', '0', '1'),
(1163, 25, 3, '1210008', 'AK. PENY. KENDARAAN - MATCH', NULL, '0', '0', '0', '1'),
(1164, 25, 3, '1210014', 'AK. PENY. INVENTARIS - MATCH', NULL, '0', '0', '0', '1'),
(1165, 25, 3, '1210020', 'AK. PENY. SEWA GUNA USAHA - MATCH', NULL, '0', '0', '0', '1'),
(1166, 25, 3, '1210026', 'AK. PENY. BILLBOARD - MATCH', NULL, '0', '0', '0', '1'),
(1167, 26, 3, '2140003', 'HUTANG MATCH', NULL, '0', '0', '0', '1'),
(1168, 26, 3, '2140012', 'HUTANG LAIN-LAIN MATCH', NULL, '0', '0', '0', '1'),
(1169, 27, 3, '3110002', 'MODAL SAHAM MATCH', NULL, '0', '0', '0', '1'),
(1170, 28, 3, '3120003', 'LABA DITAHAN MATCH', NULL, '0', '0', '0', '1'),
(1171, 28, 3, '3120004', 'SALDO LABA/RUGI BERJALAN MATCH', NULL, '0', '0', '0', '1'),
(1172, 29, 3, '4110002', 'PENDAPATAN OUTDOR - MATCH', NULL, '0', '0', '0', '1'),
(1173, 29, 3, '4110008', 'PENDAPATAN PAJAK REKLAME - MATCH', NULL, '0', '0', '0', '1'),
(1174, 29, 3, '4110014', 'PENDAPATAN MEDIA - MATCH', NULL, '0', '0', '0', '1'),
(1175, 29, 3, '4110020', 'PENDAPATAN/PENJUALAN - MATCH', NULL, '0', '0', '0', '1'),
(1176, 30, 3, '4120002', 'POTONGAN/DISCOUNT PENJUALAN OUTDOOR - MATCH', NULL, '0', '0', '0', '1'),
(1177, 30, 3, '4120008', 'POTONGAN/DISCOUNT PENJUALAN PAJAK REKLAME - MATCH', NULL, '0', '0', '0', '1'),
(1178, 30, 3, '4120011', 'POTONGAN/DISCOUNT PENJUALAN MEDIA - MATCH', NULL, '0', '0', '0', '1'),
(1179, 30, 3, '4120014', 'POTONGAN/DISCOUNT PENJUALAN - MATCH', NULL, '0', '0', '0', '1'),
(1180, 31, 3, '4130002', 'RETURN PENJUALAN OUTDOOR - MATCH', NULL, '0', '0', '0', '1'),
(1181, 31, 3, '4130008', 'RETURN PENJUALAN PAJAK REKLAME - MATCH', NULL, '0', '0', '0', '1'),
(1182, 31, 3, '4130011', 'RETURN PENJUALAN MEDIA - MATCH', NULL, '0', '0', '0', '1'),
(1183, 31, 3, '4130010', 'PPN RETURN JUAL - MATCH', NULL, '0', '0', '0', '1'),
(1184, 31, 3, '4130012', 'RETURN PENJUALAN - MATCH', NULL, '0', '0', '0', '1'),
(1185, 32, 3, '4140002', 'POTONGAN/DISCOUNT RETURN JUAL OUTDOOR - MATCH', NULL, '0', '0', '0', '1'),
(1186, 32, 3, '4140007', 'POTONGAN/DISCOUNT RETURN JUAL PAJAK REKLAME - MATCH', NULL, '0', '0', '0', '1'),
(1187, 32, 3, '4140009', 'POTONGAN/DISCOUNT RETURN JUAL MEDIA - MATCH', NULL, '0', '0', '0', '1'),
(1188, 32, 3, '4140012', 'POTONGAN/DISCOUNT RETURN PENJUALAN - MATCH', NULL, '0', '0', '0', '1'),
(1189, 33, 3, '4150002', 'PENDAPATAN USAHA LAINNYA MATCH', NULL, '0', '0', '0', '1'),
(1190, 34, 3, '5110002', 'HPP/PEMBELIAN - MATCH', NULL, '0', '0', '0', '1'),
(1191, 34, 3, '5110008', 'POTONGAN PEMBELIAN - MATCH', NULL, '0', '0', '0', '1'),
(1192, 34, 3, '5110014', 'RETURN PEMBELIAN - MATCH', NULL, '0', '0', '0', '1'),
(1193, 34, 3, '5110020', 'POTONGAN/DISCOUNT RETURN PEMBELIAN - MATCH', NULL, '0', '0', '0', '1'),
(1194, 34, 3, '5110026', 'PPN RETURN BELI - MATCH', NULL, '0', '0', '0', '1'),
(1195, 34, 3, '5110032', 'ONGKOS KIRIM PEMBELIAN - MATCH', NULL, '0', '0', '0', '1'),
(1196, 34, 3, '5110039', 'HPP PERSEDIAAN - MATCH', NULL, '0', '0', '0', '1'),
(1197, 34, 3, '5110044', 'SEWA LOKASI - MATCH', NULL, '0', '0', '0', '1'),
(1198, 34, 3, '5110046', 'POTONGAN / DISCOUNT SEWA LOKASI - MATCH', NULL, '0', '0', '0', '1'),
(1199, 35, 3, '6110015', 'BY ATK,FOTOCOPY,PERCETAKAN MATCH', NULL, '0', '0', '0', '1'),
(1200, 35, 3, '6110016', 'BIAYA RUMAH TANGGA MATCH', NULL, '0', '0', '0', '1'),
(1201, 35, 3, '6110017', 'BIAYA SEMINAR/PELATIHAN MATCH', NULL, '0', '0', '0', '1'),
(1202, 35, 3, '6110018', 'UANG MAKAN KARYAWAN MATCH', NULL, '0', '0', '0', '1'),
(1203, 35, 3, '6110019', 'BIAYA BENDA POS MATCH', NULL, '0', '0', '0', '1'),
(1204, 35, 3, '6110020', 'BIAYA KIRIM PAKET MATCH', NULL, '0', '0', '0', '1'),
(1205, 35, 3, '6110021', 'BIAYA INSENTIF (PERJALANAN DINAS) MATCH', NULL, '0', '0', '0', '1'),
(1206, 35, 3, '6110022', 'BIAYA UANG MAKAN (PERJALANAN DINAS) MATCH', NULL, '0', '0', '0', '1'),
(1207, 35, 3, '6110023', 'BIAYA PRJ DNS KANTOR (TRANSPORT/BIS/ANGK MATCH', NULL, '0', '0', '0', '1'),
(1208, 35, 3, '6110024', 'PERJALANAN DINAS KNT (PENGINAPAN/KOST) MATCH', NULL, '0', '0', '0', '1'),
(1209, 35, 3, '6110025', 'BIAYA ENTERTAINT PERJALANAN DINAS MATCH', NULL, '0', '0', '0', '1'),
(1210, 35, 3, '6110026', 'BIAYA PERJALANAN DINAS LAIN-LAIN MATCH', NULL, '0', '0', '0', '1'),
(1211, 35, 3, '6110027', 'BIAYA LEMBUR KARYAWAN KANTOR MATCH', NULL, '0', '0', '0', '1'),
(1212, 35, 3, '6110028', 'BIAYA KANTOR LAIN-LAIN MATCH', NULL, '0', '0', '0', '1'),
(1213, 36, 3, '6120006', 'BIAYA GAJI MATCH', NULL, '0', '0', '0', '1'),
(1214, 36, 3, '6120007', 'BIAYA THR MATCH', NULL, '0', '0', '0', '1'),
(1215, 36, 3, '6120008', 'BIAYA TUNJANGAN MATCH', NULL, '0', '0', '0', '1'),
(1216, 36, 3, '6120009', 'BIAYA BPJS KESEHATAN MATCH', NULL, '0', '0', '0', '1'),
(1217, 36, 3, '6120010', 'BIAYA BPJS KETENAGAKERJAAN MATCH', NULL, '0', '0', '0', '1'),
(1218, 37, 3, '6130018', 'UANG MAKAN LUAR KOTA - MATCH', NULL, '0', '0', '0', '1'),
(1219, 37, 3, '6130019', 'UANG MAKAN PERJALANAN - MATCH', NULL, '0', '0', '0', '1'),
(1220, 37, 3, '6130020', 'UANG MAKAN LEMBUR - MATCH', NULL, '0', '0', '0', '1'),
(1221, 37, 3, '6130021', 'TRANSPORTASI (BIS/BBM MOTOR)  - MATCH', NULL, '0', '0', '0', '1'),
(1222, 37, 3, '6130023', 'PARKIR - MATCH', NULL, '0', '0', '0', '1'),
(1223, 37, 3, '6130025', 'PENGINAPAN - MATCH', NULL, '0', '0', '0', '1'),
(1224, 37, 3, '6130026', 'BIAYA MEL - MATCH', NULL, '0', '0', '0', '1'),
(1225, 37, 3, '6130028', 'BIAYA PEMAKAIAN BARANG - MATCH', NULL, '0', '0', '0', '1'),
(1226, 37, 3, '6130029', 'BIAYA KEAMANAN - MATCH', NULL, '0', '0', '0', '1'),
(1227, 37, 3, '6130030', 'BIAYA PROYEK LAIN - MATCH', NULL, '0', '0', '0', '1'),
(1228, 37, 3, '6130031', 'INSENTIF DRIVER - MATCH', NULL, '0', '0', '0', '1'),
(1229, 37, 3, '6130032', 'UANG MAKAN DRIVER - MATCH', NULL, '0', '0', '0', '1'),
(1230, 37, 3, '6130033', 'BIAYA AMORTISASI SEWA KANTOR - MATCH', NULL, '0', '0', '0', '1'),
(1231, 37, 3, '6130034', 'BIAYA AMORTISASI KENDARAAN - MATCH', NULL, '0', '0', '0', '1'),
(1232, 57, 3, '6140001', 'SKPD', NULL, '0', '0', '0', '1'),
(1233, 57, 3, '6140002', 'IMB/CIPTA KARYA', NULL, '0', '0', '0', '1'),
(1234, 57, 3, '6140003', 'TATA KOTA', NULL, '0', '0', '0', '1'),
(1235, 57, 3, '6140004', 'JAMBONG', NULL, '0', '0', '0', '1'),
(1236, 57, 3, '6140005', 'PASANG BARU LISTRIK', NULL, '0', '0', '0', '1'),
(1237, 57, 3, '6140006', 'TAMBAH DAYA LISTRIK', NULL, '0', '0', '0', '1'),
(1238, 57, 3, '6140007', 'DANA PERIJINAN', NULL, '0', '0', '0', '1'),
(1239, 57, 3, '6140008', 'FORMULIR', NULL, '0', '0', '0', '1'),
(1240, 57, 3, '6140009', 'SPPTR', NULL, '0', '0', '0', '1'),
(1241, 57, 3, '6140010', 'DKP (PERTAMANAN)', NULL, '0', '0', '0', '1'),
(1242, 57, 3, '6140011', 'KIMPRASWIL', NULL, '0', '0', '0', '1'),
(1243, 57, 3, '6140012', 'SIPR/IJIN', NULL, '0', '0', '0', '1'),
(1244, 57, 3, '6140013', 'BIAYA PERIJINAN LAINNYA', NULL, '0', '0', '0', '1'),
(1245, 57, 3, '6140014', 'BIAYA SURVEY TIM', NULL, '0', '0', '0', '1'),
(1246, 57, 3, '6140015', 'MAKAN TIM', NULL, '0', '0', '0', '1'),
(1247, 57, 3, '6140016', 'DENDA', NULL, '0', '0', '0', '1'),
(1248, 58, 3, '6150001', 'PERSIL', NULL, '0', '0', '0', '1'),
(1249, 58, 3, '6150002', 'BINAMARGA TK. I', NULL, '0', '0', '0', '1'),
(1250, 58, 3, '6150003', 'BINAMARGA TK. II', NULL, '0', '0', '0', '1'),
(1251, 58, 3, '6150004', 'KAI', NULL, '0', '0', '0', '1'),
(1252, 58, 3, '6150005', 'JASAMARGA', NULL, '0', '0', '0', '1'),
(1253, 58, 3, '6150006', 'DINAS PERHUBUNGAN', NULL, '0', '0', '0', '1'),
(1254, 58, 3, '6150007', 'BANDARA', NULL, '0', '0', '0', '1'),
(1255, 58, 3, '6150008', 'DINAS PASAR', NULL, '0', '0', '0', '1'),
(1256, 58, 3, '6150009', 'TERMINAL', NULL, '0', '0', '0', '1'),
(1257, 58, 3, '6150010', 'INTASTANSI LAINNYA', NULL, '0', '0', '0', '1'),
(1258, 38, 3, '6170002', 'BIAYA LISTRIK PROYEK MATCH', NULL, '0', '0', '0', '1'),
(1259, 38, 3, '6170007', 'IDPEL 513560931370 SHARP PROBOLINGGO', NULL, '0', '0', '0', '1'),
(1260, 38, 3, '6170008', 'IDPEL 511062989459 AQUA GUBSUR', NULL, '0', '0', '0', '1'),
(1261, 38, 3, '6170009', 'IDPEL 511020413489 CENTRAL PARK', NULL, '0', '0', '0', '1'),
(1262, 38, 3, '6170010', 'IDPEL 511010015735SINAR MAS - EMBONG MLN', NULL, '0', '0', '0', '1'),
(1263, 38, 3, '6170011', 'IDPEL 513561013864GG PROBOLINGGO', NULL, '0', '0', '0', '1'),
(1264, 38, 3, '6170012', 'IDPEL 511040444124 CARRREFOUR GEMBONG', NULL, '0', '0', '0', '1'),
(1265, 38, 3, '6170013', 'IDPEL 511433526165 MIE RESTU', NULL, '0', '0', '0', '1'),
(1266, 38, 3, '6170014', 'IDPEL 511010111336 GUBENG POJOK', NULL, '0', '0', '0', '1'),
(1267, 38, 3, '6170015', 'IDPEL 513010210472 GG PASAR LAWANG', NULL, '0', '0', '0', '1'),
(1268, 38, 3, '6170016', 'IDPEL 513130554114 BALIHO PATIMURA', NULL, '0', '0', '0', '1'),
(1269, 38, 3, '6170017', 'IDPEL 513140699727 BALIHO KEBON AGUNG', NULL, '0', '0', '0', '1'),
(1270, 38, 3, '6170018', 'IDPEL 513071209736 BALIHO PASAR TUREN', NULL, '0', '0', '0', '1'),
(1271, 38, 3, '6170019', 'IDPEL 5110112003577 GENTENG BESAR NO.1A', NULL, '0', '0', '0', '1'),
(1272, 38, 3, '6170020', 'IDPEL 516510228989 BALIHOBESUKI', NULL, '0', '0', '0', '1'),
(1273, 38, 3, '6170021', 'IDPEL 516500383093 BALIHO A JAKFAR', NULL, '0', '0', '0', '1'),
(1274, 38, 3, '6170022', 'IDPEL 516500388939 BALIHO WR SUPRATMAN', NULL, '0', '0', '0', '1'),
(1275, 38, 3, '6170023', 'IDPEL 516040075544 BALIHO BALUNG/RAMBIPU', NULL, '0', '0', '0', '1'),
(1276, 38, 3, '6170024', 'TOKEN 511610215345 KLETEK 177, SDA', NULL, '0', '0', '0', '1'),
(1277, 38, 3, '6170025', 'IDPEL 511413206489 MANDIRI INDRAGIRI 30-', NULL, '0', '0', '0', '1'),
(1278, 38, 3, '6170026', 'IDPEL 513030553735 BALIHO JEMBER - JAWA', NULL, '0', '0', '0', '1'),
(1279, 38, 3, '6170027', 'IDPEL 511413133984 CARREFOUR (900 VA) MA', NULL, '0', '0', '0', '1'),
(1280, 38, 3, '6170028', 'IDPEL 511010270301 BLAURAN 85', NULL, '0', '0', '0', '1'),
(1281, 38, 3, '6170029', 'IDPEL 516060235398 BALIHO KLAKAH', NULL, '0', '0', '0', '1'),
(1282, 38, 3, '6170030', 'IDPEL 516730572737 BALIHO KALIBARU', NULL, '0', '0', '0', '1'),
(1283, 38, 3, '6170031', 'IDPEL 511413100799\"ISUZU\" MEDAENG', NULL, '0', '0', '0', '1'),
(1284, 38, 3, '6170032', 'IDPEL 511412922222ADITYAWARMAN', NULL, '0', '0', '0', '1'),
(1285, 38, 3, '6170033', 'IDPEL 514530881510\"DJARUM\" JOMBANG', NULL, '0', '0', '0', '1'),
(1286, 38, 3, '6170034', 'IDPEL 511451042281\"MATCH\" KLETEK', NULL, '0', '0', '0', '1'),
(1287, 38, 3, '6170035', 'IDPEL 042097,042101,042119  GG BY PASS K', NULL, '0', '0', '0', '1'),
(1288, 38, 3, '6170036', 'IDPEL 511010405418 (VIDEOTRON GUBENG PJK', NULL, '0', '0', '0', '1'),
(1289, 38, 3, '6170037', 'IDPEL 511020626544 MOESTOPO GERBONG KAI', NULL, '0', '0', '0', '1'),
(1290, 38, 3, '6170038', 'IDPEL 511811042119', NULL, '0', '0', '0', '1'),
(1291, 38, 3, '6170039', 'IDPEL 511410009764 MATCH MAYJEND 3A', NULL, '0', '0', '0', '1'),
(1292, 38, 3, '6170040', 'IDPEL 511800937371 \"WINGS\" BANDO SDA', NULL, '0', '0', '0', '1'),
(1293, 38, 3, '6170041', 'IDPEL 511412266177 MATCH RICH PALACE (A/', NULL, '0', '0', '0', '1'),
(1294, 38, 3, '6170042', 'IDPEL 511413078814 TRIDJAYA (BILL. KETIN', NULL, '0', '0', '0', '1'),
(1295, 38, 3, '6170043', 'IDPEL 516500389998 RUDY WIJAYA/ ALUN2 SI', NULL, '0', '0', '0', '1'),
(1296, 38, 3, '6170044', 'IDPEL 514500524831 RUDY WIJAYA/ MOJOAGUN', NULL, '0', '0', '0', '1'),
(1297, 38, 3, '6170045', 'IDPEL 516501103663 GUDANG GARAM / PASIR', NULL, '0', '0', '0', '1'),
(1298, 38, 3, '6170046', 'IDPEL 511423447602 PEMUDA NO. 120 MIB', NULL, '0', '0', '0', '1'),
(1299, 38, 3, '6170047', 'IDPEL 511800992451 BENTOEL (JL. PAGERWOJ', NULL, '0', '0', '0', '1'),
(1300, 38, 3, '6170048', 'IDPEL 511413024168 BENTOEL PALAPA', NULL, '0', '0', '0', '1'),
(1301, 38, 3, '6170049', 'IDPEL 511413128817 GRAND SUNGKONO 10600V', NULL, '0', '0', '0', '1'),
(1302, 38, 3, '6170050', 'IDPEL 511413128825 FLEXY ADITYAWARMAN 13', NULL, '0', '0', '0', '1'),
(1303, 38, 3, '6170051', 'IDPEL 513051151962 BALIHO KEPANJEN', NULL, '0', '0', '0', '1'),
(1304, 38, 3, '6170052', 'IDPEL 516500339872 PB SUDIRMAN - SITUBON', NULL, '0', '0', '0', '1'),
(1305, 38, 3, '6170053', 'ID518031213332,51804117090 STA. LAMONGAN', NULL, '0', '0', '0', '1'),
(1306, 38, 3, '6170054', 'IDPEL 518031213324', NULL, '0', '0', '0', '1'),
(1307, 38, 3, '6170055', 'ID 518011722391,518041117074 BOJONEGORO', NULL, '0', '0', '0', '1'),
(1308, 38, 3, '6170056', 'IDPEL 518011722404', NULL, '0', '0', '0', '1'),
(1309, 38, 3, '6170057', 'IDP41117082,11722404,31213324 STA. BABAT', NULL, '0', '0', '0', '1'),
(1310, 38, 3, '6170058', 'IDPEL 518041117090', NULL, '0', '0', '0', '1'),
(1311, 38, 3, '6170059', 'IDPEL 518041117074', NULL, '0', '0', '0', '1'),
(1312, 38, 3, '6170060', 'IDPEL 514060793205 RADIO SIGMA', NULL, '0', '0', '0', '1'),
(1313, 38, 3, '6170061', 'IDPEL 511607144191 TROSOBO', NULL, '0', '0', '0', '1'),
(1314, 38, 3, '6170062', 'IDPEL 511607144183 TROSOBO', NULL, '0', '0', '0', '1'),
(1315, 38, 3, '6170063', 'IDPEL 513540572597 BALIHO PANDAAN', NULL, '0', '0', '0', '1'),
(1316, 38, 3, '6170064', 'IDPEL 516520192576 BALIHO GG ASEMBAGUS S', NULL, '0', '0', '0', '1'),
(1317, 38, 3, '6170065', 'IDPEL 516500404458 JEMBATAN CAPORE SITUB', NULL, '0', '0', '0', '1'),
(1318, 38, 3, '6170066', 'IDPEL 516700495873 GG BWI PANGSUD', NULL, '0', '0', '0', '1'),
(1319, 38, 3, '6170067', 'IDPEL 516710740043 BALIHO ROGOJAMPI', NULL, '0', '0', '0', '1'),
(1320, 38, 3, '6170068', 'IDPEL 516040483669 BALIHO GG RAMBIPUJI', NULL, '0', '0', '0', '1'),
(1321, 38, 3, '6170069', 'IDPEL 516080508148 BALIHO GG PUGER', NULL, '0', '0', '0', '1'),
(1322, 38, 3, '6170070', 'IDPEL 516050663730 BALIHO GG AMBULU', NULL, '0', '0', '0', '1'),
(1323, 38, 3, '6170071', 'IDPEL 511403478847 AQUA HR MUHAMMAD', NULL, '0', '0', '0', '1'),
(1324, 38, 3, '6170072', 'IDPEL 514600978652 RM.NIRWANA-NGANJUK', NULL, '0', '0', '0', '1'),
(1325, 38, 3, '6170073', 'IDPEL 514530883683 JL A.YANI-JOMBANG', NULL, '0', '0', '0', '1'),
(1326, 38, 3, '6170074', 'IDPEL 547400997785-LENTENG AGUNG JAKSEL', NULL, '0', '0', '0', '1'),
(1327, 38, 3, '6170075', 'IDPEL 514601066055 BANDO SUPRIYADI NGANJ', NULL, '0', '0', '0', '1'),
(1328, 38, 3, '6170076', 'IDPEL 511413269090 MAYJEND 180, SBY', NULL, '0', '0', '0', '1'),
(1329, 38, 3, '6170077', 'IDPEL-513030553735 BALIHO BATU', NULL, '0', '0', '0', '1'),
(1330, 38, 3, '6170078', 'IDPEL-516010850183 BALIHO JEMBER - L. PA', NULL, '0', '0', '0', '1'),
(1331, 38, 3, '6170079', 'IDPEL-516010850191 BALIHO JEMBER - GAJAH', NULL, '0', '0', '0', '1'),
(1332, 38, 3, '6170080', 'IDPEL-513110727530 SAMPOERNA SOEKARNO HA', NULL, '0', '0', '0', '1'),
(1333, 38, 3, '6170081', 'IDPEL-516010195024 GG JPO JEMBER', NULL, '0', '0', '0', '1'),
(1334, 38, 3, '6170082', 'IDPEL-515031051836 BALIHO MAGETAN', NULL, '0', '0', '0', '1'),
(1335, 38, 3, '6170083', 'IDPEL-511433522402 JEMURSARI REGENCY', NULL, '0', '0', '0', '1'),
(1336, 38, 3, '6170084', 'IDPEL-511200658012 GG GUBENUR SURYO-GRES', NULL, '0', '0', '0', '1'),
(1337, 38, 3, '6170085', 'IDPEL-511200706816 DJARUM (BANDO JL. VET', NULL, '0', '0', '0', '1'),
(1338, 38, 3, '6170086', 'IDPEL-514010666811 NEON BOX A.YANI KEDIR', NULL, '0', '0', '0', '1'),
(1339, 38, 3, '6170087', 'IDPEL-514010666829 NEON BOX A.YANI KEDIR', NULL, '0', '0', '0', '1'),
(1340, 38, 3, '6170088', 'IDPEL 5114212021597 KERTAJAYA NO. 100', NULL, '0', '0', '0', '1'),
(1341, 38, 3, '6170089', 'IDPEL-513110668443 (TIDAK DIPAKAI KAS )', NULL, '0', '0', '0', '1'),
(1342, 38, 3, '6170090', 'JBST ASURANSI RAMA', NULL, '0', '0', '0', '1'),
(1343, 38, 3, '6170091', 'JBST BENTOEL BUNGURAN', NULL, '0', '0', '0', '1'),
(1344, 38, 3, '6170092', 'JBST AQUA PAHLAWAN', NULL, '0', '0', '0', '1'),
(1345, 38, 3, '6170093', 'JBST BUBUTAN', NULL, '0', '0', '0', '1'),
(1346, 38, 3, '6170094', 'JBST POLISI ISTIMEWA', NULL, '0', '0', '0', '1'),
(1347, 38, 3, '6170095', 'JBST EMBONG MALANG', NULL, '0', '0', '0', '1'),
(1348, 38, 3, '6170096', 'IDPEL 513010030433 SOPONYONO (DIPUTUS)', NULL, '0', '0', '0', '1'),
(1349, 38, 3, '6170097', '513010030433 SARIRASA II (TIDAK DIPAKAI', NULL, '0', '0', '0', '1'),
(1350, 38, 3, '6170098', 'IDPEL 513010260004 SARIRASA', NULL, '0', '0', '0', '1'),
(1351, 38, 3, '6170099', 'IDPEL 513010260004 SARIRASA (SALAH)', NULL, '0', '0', '0', '1'),
(1352, 38, 3, '6170100', '516700129463 - PB. SUDIRMAN BWI', NULL, '0', '0', '0', '1'),
(1353, 38, 3, '6170101', '513130542222 BLH HMS PANGLIMA SUDIRMAN', NULL, '0', '0', '0', '1'),
(1354, 38, 3, '6170102', 'IDPEL 516070607246 Tanggul, Jember', NULL, '0', '0', '0', '1'),
(1355, 38, 3, '6170103', '513010250764 DJARUM LAWANG', NULL, '0', '0', '0', '1'),
(1356, 38, 3, '6170104', '515050538011 BALIHO MAGETAN MAOSPATI', NULL, '0', '0', '0', '1'),
(1357, 38, 3, '6170105', '513130555833  GG S PARMAN', NULL, '0', '0', '0', '1'),
(1358, 38, 3, '6170106', '513130541780 GG S PARMAN I', NULL, '0', '0', '0', '1'),
(1359, 38, 3, '6170107', 'IDPEL 5211096510917545359 SARI RASA UTAM', NULL, '0', '0', '0', '1'),
(1360, 38, 3, '6170108', 'IDPEL 4211096511417545703 KETAPANG BWI', NULL, '0', '0', '0', '1'),
(1361, 38, 3, '6170109', 'IDPEL 513110745517 HMS MILD BOROBUDUR', NULL, '0', '0', '0', '1'),
(1362, 38, 3, '6170110', 'CARREFOUR KEDUNGDORO/ PATOKA', NULL, '0', '0', '0', '1'),
(1363, 38, 3, '6170111', 'IDPEL 513130542214 BALIHO SAMPOERNA', NULL, '0', '0', '0', '1'),
(1364, 38, 3, '6170112', 'IDPEL 513110668443 BALIHO SAMPOERNA', NULL, '0', '0', '0', '1'),
(1365, 38, 3, '6170113', '514010646345  LISTRIK ARTHA SWALAYAN', NULL, '0', '0', '0', '1'),
(1366, 38, 3, '6170114', 'BIAYA LISTRIK NURADI CARREFOUR KAPASAN', NULL, '0', '0', '0', '1'),
(1367, 38, 3, '6170115', '516010195024 jpo jember', NULL, '0', '0', '0', '1'),
(1368, 38, 3, '6170116', '513130564113 SAMPOERNA DINOYO MALANG', NULL, '0', '0', '0', '1'),
(1369, 38, 3, '6170117', '513110786875-tlogo mas salon yoga', NULL, '0', '0', '0', '1'),
(1370, 38, 3, '6170118', '513140731868', NULL, '0', '0', '0', '1'),
(1371, 38, 3, '6170119', '513140731876 kbn agung-kyai tamin  mlg', NULL, '0', '0', '0', '1'),
(1372, 38, 3, '6170120', 'Idpel 513120698149 LA Sucipto', NULL, '0', '0', '0', '1'),
(1373, 38, 3, '6170121', 'ID PEL 511423077793', NULL, '0', '0', '0', '1'),
(1374, 38, 3, '6170122', 'ID PEL 511413053209', NULL, '0', '0', '0', '1'),
(1375, 38, 3, '6170123', 'ID PEL 513010250756-Djarum lawang', NULL, '0', '0', '0', '1'),
(1376, 38, 3, '6170124', 'ID PEL 516010850175 baliho jember-Jawa', NULL, '0', '0', '0', '1'),
(1377, 38, 3, '6170125', 'ID PEL 51101000642Z', NULL, '0', '0', '0', '1'),
(1378, 38, 3, '6170126', 'ID PEL 514010678396- A. YANI KEDIRI', NULL, '0', '0', '0', '1'),
(1379, 38, 3, '6170127', 'ID PEL 511413121454 OEI SOESANTO WIBISON', NULL, '0', '0', '0', '1'),
(1380, 38, 3, '6170128', 'ID PEL 516700129763-bwi (di atas gedung)', NULL, '0', '0', '0', '1'),
(1381, 38, 3, '6170129', 'ID PEL 516700514884-GG bando Ketapang', NULL, '0', '0', '0', '1'),
(1382, 38, 3, '6170130', 'IDPEL 518031259340 BANDO LAMONGAN SAMPOE', NULL, '0', '0', '0', '1'),
(1383, 38, 3, '6170131', 'IDPEL 516010895600 ABSOLUT JEMBER K. POS', NULL, '0', '0', '0', '1'),
(1384, 38, 3, '6170132', 'IDPEL 516010830559 (RM SARI UTAMA)', NULL, '0', '0', '0', '1'),
(1385, 38, 3, '6170133', 'IDPEL 513030583383 PUJON', NULL, '0', '0', '0', '1'),
(1386, 38, 3, '6170134', 'IDPEL 511010383130 BUBUTAN', NULL, '0', '0', '0', '1'),
(1387, 38, 3, '6170135', 'IDPEL 511063097760 ASURANSI RAMA', NULL, '0', '0', '0', '1'),
(1388, 38, 3, '6170136', 'IDPEL 511010383163 BUNGURAN', NULL, '0', '0', '0', '1'),
(1389, 38, 3, '6170137', 'IDPEL 511010383155 EMBONG MALANG', NULL, '0', '0', '0', '1'),
(1390, 38, 3, '6170138', 'IDPEL 511010383148-Pahlawan 94', NULL, '0', '0', '0', '1'),
(1391, 38, 3, '6170139', '51106001293Z - LISTRIK DR. SOETOMO', NULL, '0', '0', '0', '1'),
(1392, 38, 3, '6170140', '514021274430  - LISTRIK BLITAR SAMPOERNA', NULL, '0', '0', '0', '1'),
(1393, 38, 3, '6170141', '511403006735 - LISTRIK HR MUHAMMAD', NULL, '0', '0', '0', '1'),
(1394, 38, 3, '6170142', '511063098882 HMS -DR SUTOMO', NULL, '0', '0', '0', '1'),
(1395, 38, 3, '6170143', '22090566625 - HAYAM WURUK (TOKEN)', NULL, '0', '0', '0', '1'),
(1396, 38, 3, '6170144', 'IDPEL 22090563929-TOKEN LISTRIK ADITYAWA', NULL, '0', '0', '0', '1'),
(1397, 38, 3, '6170145', 'TOKEN COKROAMINOTO-BALI IDPEL01103832083', NULL, '0', '0', '0', '1'),
(1398, 38, 3, '6170146', '01100198256-TOKEN EMBONG MALANG', NULL, '0', '0', '0', '1'),
(1399, 38, 3, '6170147', '01100182565-TOKEN BLAURAN', NULL, '0', '0', '0', '1'),
(1400, 38, 3, '6170148', '511010015735 TOKEN EM MLNG BU TRES', NULL, '0', '0', '0', '1'),
(1401, 38, 3, '6170149', 'PATTIMURA MALANG-IDPEL01111832729', NULL, '0', '0', '0', '1'),
(1402, 38, 3, '6170150', 'LISTRIK SEMERU IDPEL 22102528944', NULL, '0', '0', '0', '1'),
(1403, 38, 3, '6170151', 'LISTRIK PATTIMURA TOKEN ID 513130578186', NULL, '0', '0', '0', '1'),
(1404, 38, 3, '6170152', '14025755126 (TOKEN WONOKROMO)', NULL, '0', '0', '0', '1'),
(1405, 38, 3, '6170153', '511413191139 TOKEN INDRAGIRI 25', NULL, '0', '0', '0', '1'),
(1406, 38, 3, '6170154', '46001633562 (Puger adimarmo-Jember)', NULL, '0', '0', '0', '1'),
(1407, 38, 3, '6170155', '14030980701 (A.Jakfar Situbondo)', NULL, '0', '0', '0', '1'),
(1408, 38, 3, '6170156', 'Pasar Pulung - 32002976549', NULL, '0', '0', '0', '1'),
(1409, 38, 3, '6170157', 'IDPEL 511063110814 (MIB LED-RAYA DARMO)', NULL, '0', '0', '0', '1'),
(1410, 38, 3, '6170158', 'TOKEN MAYJEND S 176-178', NULL, '0', '0', '0', '1'),
(1411, 38, 3, '6170159', 'TOKEN GUBENG POJOK', NULL, '0', '0', '0', '1'),
(1412, 38, 3, '6170160', '511413218219 TOKEN INDRAGIRI 61', NULL, '0', '0', '0', '1'),
(1413, 38, 3, '6170161', 'TOKEN AGUS SALIM (32010483181)', NULL, '0', '0', '0', '1'),
(1414, 38, 3, '6170162', 'TOKEN GUB SUR (013215537)', NULL, '0', '0', '0', '1'),
(1415, 38, 3, '6170163', 'TOKEN KAPAS KRAMPUNG (14011501237)', NULL, '0', '0', '0', '1'),
(1416, 38, 3, '6170164', 'TOKEN SUPRIYADI NGANJUK-14010187178', NULL, '0', '0', '0', '1'),
(1417, 38, 3, '6170165', 'TOKEN KAWI MLG-32018765407', NULL, '0', '0', '0', '1'),
(1418, 38, 3, '6170166', 'TOKEN MERDEKA JOMBANG-14007093223', NULL, '0', '0', '0', '1'),
(1419, 38, 3, '6170167', 'TOKEN PB. SUDIRMAN PROBO 14070192969', NULL, '0', '0', '0', '1'),
(1420, 38, 3, '6170168', 'IDPEL PUTRO AGUNG - 511020587406', NULL, '0', '0', '0', '1');
INSERT INTO `chart_of_account` (`COA_ID`, `PAR_ID`, `BRANCH_ID`, `COA_ACC`, `COA_ACCNAME`, `COA_OWNER`, `COA_DEBIT`, `COA_CREDIT`, `COA_SALDO`, `COA_DTSTS`) VALUES
(1421, 38, 3, '6170169', 'IDPEL TIDAR 32025402564', NULL, '0', '0', '0', '1'),
(1422, 38, 3, '6170170', 'IDPEL 511450039703 SOEDJAI (WS)', NULL, '0', '0', '0', '1'),
(1423, 38, 3, '6170171', 'IDPEL 511451019621  (SUDJAI WS)', NULL, '0', '0', '0', '1'),
(1424, 38, 3, '6170172', 'idpel 511063141631 girilaya', NULL, '0', '0', '0', '1'),
(1425, 38, 3, '6170173', 'IDPEL AMBENGAN NO. 511010404083', NULL, '0', '0', '0', '1'),
(1426, 38, 3, '6170174', 'IDPEL 5114212013806 BAGONG', NULL, '0', '0', '0', '1'),
(1427, 38, 3, '6170175', 'IDPEL A. JAKFAR SITUBONDO 516520325489', NULL, '0', '0', '0', '1'),
(1428, 38, 3, '6170176', 'IDPEL BAGONG VDTRON 511423380590', NULL, '0', '0', '0', '1'),
(1429, 38, 3, '6170177', 'IDPEL GIRILAYA NO. 511063141631', NULL, '0', '0', '0', '1'),
(1430, 38, 3, '6170178', 'IDPEL GUNUNG SARI 511413342323', NULL, '0', '0', '0', '1'),
(1431, 38, 3, '6170179', 'ID PEL KRANGGAN -MURAL 32112536928', NULL, '0', '0', '0', '1'),
(1432, 38, 3, '6170180', 'IDPEL 511020669036-MULYOREJO', NULL, '0', '0', '0', '1'),
(1433, 38, 3, '6170181', 'IDPEL 513130658838 KYAI TAMIN B', NULL, '0', '0', '0', '1'),
(1434, 38, 3, '6170182', 'TOKEN IDPEL 3290036197-A.YANI 196 SITUBO', NULL, '0', '0', '0', '1'),
(1435, 38, 3, '6170183', 'TOKEN IDPEL 5135012026293-SOEHAT PASURUA', NULL, '0', '0', '0', '1'),
(1436, 38, 3, '6170184', 'TKN IDPEL5160112067963-SLAMET RIYADI JMB', NULL, '0', '0', '0', '1'),
(1437, 38, 3, '6170185', 'TKN IDPEL 511200563667-BUNDER GRESIK', NULL, '0', '0', '0', '1'),
(1438, 39, 3, '6180002', 'BIAYA LISTRIK MATCH', NULL, '0', '0', '0', '1'),
(1439, 39, 3, '6180007', 'LISTRIK ADITYAWARMAN 2', NULL, '0', '0', '0', '1'),
(1440, 39, 3, '6180008', 'LISTRIK ROYAL KETINTANG', NULL, '0', '0', '0', '1'),
(1441, 39, 3, '6180009', 'LISTRIK BUNGURASIH', NULL, '0', '0', '0', '1'),
(1442, 39, 3, '6180010', 'LISTRIK LESTI 42 IDPEL 511413151012', NULL, '0', '0', '0', '1'),
(1443, 39, 3, '6180011', 'LISTRIK KARANGAN 202', NULL, '0', '0', '0', '1'),
(1444, 39, 3, '6180012', 'LISTRIK WS TAMAN I 511450491655', NULL, '0', '0', '0', '1'),
(1445, 39, 3, '6180013', 'LISTRIK JAKARTA (PULO MACAN,BALIKPAPAN)', NULL, '0', '0', '0', '1'),
(1446, 39, 3, '6180014', 'LISTRIK INDRAGIRI 25(TANTE) 511410097115', NULL, '0', '0', '0', '1'),
(1447, 39, 3, '6180015', 'LISTRIK PUTAT IDPEL511412950585', NULL, '0', '0', '0', '1'),
(1448, 39, 3, '6180016', 'LISTRIK PUTAT IDPEL 511411830415', NULL, '0', '0', '0', '1'),
(1449, 39, 3, '6180017', 'LISTRIK PUTAT IDPEL 511413060069', NULL, '0', '0', '0', '1'),
(1450, 39, 3, '6180018', 'LISTRIK PERAK BARAT IDPEL 5110112006966', NULL, '0', '0', '0', '1'),
(1451, 39, 3, '6180019', 'LISTRIK SUMEDANG', NULL, '0', '0', '0', '1'),
(1452, 39, 3, '6180020', 'LISTRIK MAYJEND ARTA IDPEL 5114112025077', NULL, '0', '0', '0', '1'),
(1453, 40, 3, '6190002', 'BIAYA TELEPON MATCH', NULL, '0', '0', '0', '1'),
(1454, 40, 3, '6190007', 'TELEPON 5680645', NULL, '0', '0', '0', '1'),
(1455, 40, 3, '6190008', 'TELEPON 5680646', NULL, '0', '0', '0', '1'),
(1456, 40, 3, '6190009', 'TELEPON 5617276', NULL, '0', '0', '0', '1'),
(1457, 40, 3, '6190010', 'FLEXY KANTOR 70039577', NULL, '0', '0', '0', '1'),
(1458, 40, 3, '6190011', 'TELEPON 5617232', NULL, '0', '0', '0', '1'),
(1459, 40, 3, '6190012', 'TELEPON WS 0317870870', NULL, '0', '0', '0', '1'),
(1460, 40, 3, '6190013', 'TELEPON INDRAGIRI 25 (TANTE)', NULL, '0', '0', '0', '1'),
(1461, 40, 3, '6190014', 'TELEPON SPEEDY', NULL, '0', '0', '0', '1'),
(1462, 40, 3, '6190015', 'TELEPON NATRINDO', NULL, '0', '0', '0', '1'),
(1463, 40, 3, '6190016', 'TELEPON BP. RUDY WIJAYA (0811319601)', NULL, '0', '0', '0', '1'),
(1464, 40, 3, '6190017', 'TELEPON WPI HR MUH 7314868', NULL, '0', '0', '0', '1'),
(1465, 40, 3, '6190018', 'TELEPON GUBENG POJOK 0315349985', NULL, '0', '0', '0', '1'),
(1466, 40, 3, '6190019', 'TELEPHONE 5678346', NULL, '0', '0', '0', '1'),
(1467, 40, 3, '6190020', 'TELEPHONE 5660929 KARANGAN 202', NULL, '0', '0', '0', '1'),
(1468, 40, 3, '6190021', 'TELEPHONE BU DEWI - 70011598', NULL, '0', '0', '0', '1'),
(1469, 40, 3, '6190022', 'TELEPHONE P. RUDY WIJAYA - 70028552', NULL, '0', '0', '0', '1'),
(1470, 40, 3, '6190023', 'TELEPHONE FLEXY PRA BAYAR', NULL, '0', '0', '0', '1'),
(1471, 40, 3, '6190024', 'BIAYA TELP OFFICE JKT', NULL, '0', '0', '0', '1'),
(1472, 40, 3, '6190025', 'TELEPHONE TANTE INDRAGIRI 25 031-5677130', NULL, '0', '0', '0', '1'),
(1473, 40, 3, '6190026', '031 5616649 ADITYAWARMAN', NULL, '0', '0', '0', '1'),
(1474, 40, 3, '6190027', 'BIAYA TELP OFFICE JKT (021 - 5635904)', NULL, '0', '0', '0', '1'),
(1475, 40, 3, '6190028', 'BIAYA FAX OFFICE JKT (021 - 3512775)', NULL, '0', '0', '0', '1'),
(1476, 40, 3, '6190029', 'BIAYA FIRST MEDIA/FAST NET OFFICE JKT', NULL, '0', '0', '0', '1'),
(1477, 40, 3, '6190030', 'BIAYA MY REPUBLIK (INTERNET)', NULL, '0', '0', '0', '1'),
(1478, 41, 3, '6200002', 'BIAYA PDAM MATCH', NULL, '0', '0', '0', '1'),
(1479, 41, 3, '6200007', 'PDAM GUBENG POJOK', NULL, '0', '0', '0', '1'),
(1480, 41, 3, '6200008', 'PDAM KARANGAN 202', NULL, '0', '0', '0', '1'),
(1481, 41, 3, '6200009', 'PDAM LESTI NO. 42', NULL, '0', '0', '0', '1'),
(1482, 41, 3, '6200010', 'PDAM ROYAL KETINTANG', NULL, '0', '0', '0', '1'),
(1483, 41, 3, '6200011', 'PDAM ADITYAWARMAN', NULL, '0', '0', '0', '1'),
(1484, 41, 3, '6200012', 'PDAM KUPANG INDAH II/23', NULL, '0', '0', '0', '1'),
(1485, 41, 3, '6200013', 'PDAM HR. MUHAMMAD', NULL, '0', '0', '0', '1'),
(1486, 41, 3, '6200014', 'PAM/PALJA PULO MACAN RAYA 9', NULL, '0', '0', '0', '1'),
(1487, 41, 3, '6200015', 'PDAM INDRAGIRI 25 (TANTE) 4986605010636', NULL, '0', '0', '0', '1'),
(1488, 41, 3, '6200016', 'PDAM PUTAT GEDHE', NULL, '0', '0', '0', '1'),
(1489, 41, 3, '6200017', 'PDAM PEMUDA 122', NULL, '0', '0', '0', '1'),
(1490, 41, 3, '6200018', 'PDAM PEMUDA 124', NULL, '0', '0', '0', '1'),
(1491, 42, 3, '6210002', 'BIAYA BBM /SOLAR MATCH', NULL, '0', '0', '0', '1'),
(1492, 43, 3, '6220002', 'BIAYA TOL MATCH', NULL, '0', '0', '0', '1'),
(1493, 44, 3, '6230005', 'BIAYA ADM BANK MATCH', NULL, '0', '0', '0', '1'),
(1494, 44, 3, '6230006', 'BIAYA PROVISI BANK MATCH', NULL, '0', '0', '0', '1'),
(1495, 44, 3, '6230007', 'BIAYA BUNGA PINJAMAN BANK MATCH', NULL, '0', '0', '0', '1'),
(1496, 44, 3, '6230008', 'BIAYA MATERAI  BANK MATCH', NULL, '0', '0', '0', '1'),
(1497, 45, 3, '6240006', 'PPH 21 MATCH', NULL, '0', '0', '0', '1'),
(1498, 45, 3, '6240007', 'PPH 23 MATCH', NULL, '0', '0', '0', '1'),
(1499, 45, 3, '6240008', 'PPH 25 MATCH', NULL, '0', '0', '0', '1'),
(1500, 45, 3, '6240009', 'PPN MATCH', NULL, '0', '0', '0', '1'),
(1501, 45, 3, '6240010', 'PPh Pasal 4 Ayat 2 MATCH', NULL, '0', '0', '0', '1'),
(1502, 46, 3, '6250005', 'BIAYA PBB MATCH', NULL, '0', '0', '0', '1'),
(1503, 46, 3, '6250006', 'IURAN & LANGGANAN MATCH', NULL, '0', '0', '0', '1'),
(1504, 46, 3, '6250007', 'BIAYA SUMBANGAN MATCH', NULL, '0', '0', '0', '1'),
(1505, 46, 3, '6250008', 'BIAYA PENGURUSAN SURAT-SURAT MATCH', NULL, '0', '0', '0', '1'),
(1506, 47, 3, '6260005', 'BIAYA ASURANSI KENDARAAN MATCH', NULL, '0', '0', '0', '1'),
(1507, 47, 3, '6260006', 'BIAYA ASURANSI BANGUNAN MATCH', NULL, '0', '0', '0', '1'),
(1508, 47, 3, '6260007', 'BIAYA ASURANSI BILLBOARD MATCH', NULL, '0', '0', '0', '1'),
(1509, 47, 3, '6260008', 'BIAYA ASURANSI KESEHATAN MATCH', NULL, '0', '0', '0', '1'),
(1510, 48, 3, '6270004', 'BIAYA PEMELIHARAAN GEDUNG MATCH', NULL, '0', '0', '0', '1'),
(1511, 48, 3, '6270005', 'BIAYA PEMELIHARAAN INVENTARIS MATCH', NULL, '0', '0', '0', '1'),
(1512, 48, 3, '6270006', 'BIAYA PEMELIHARAAN KENDARAAN MATCH', NULL, '0', '0', '0', '1'),
(1513, 49, 3, '6280005', 'BIAYA PENYUSUTAN GEDUNG MATCH', NULL, '0', '0', '0', '1'),
(1514, 49, 3, '6280006', 'BIAYA PENYUSUTAN KENDARAAN MATCH', NULL, '0', '0', '0', '1'),
(1515, 49, 3, '6280007', 'BIAYA PENYUSUTAN INVENTARIS MATCH', NULL, '0', '0', '0', '1'),
(1516, 49, 3, '6280008', 'BIAYA PENYUSUTAN BILLBOARD MATCH', NULL, '0', '0', '0', '1'),
(1517, 50, 3, '7110004', 'PENDAPATAN JASA GIRO MATCH', NULL, '0', '0', '0', '1'),
(1518, 50, 3, '7110005', 'PENDAPATAN LAIN-LAIN MATCH', NULL, '0', '0', '0', '1'),
(1519, 50, 3, '7110006', 'PENDAPATAN KOMISI / FEE MATCH', NULL, '0', '0', '0', '1'),
(1520, 51, 3, '8110003', 'Pajak Penghasilan Badan MATCH', NULL, '0', '0', '0', '1'),
(1521, 51, 3, '8110004', 'BIAYA LAIN-LAIN MATCH', NULL, '0', '0', '0', '1'),
(1522, 52, 3, '9110003', 'PEMBULATAN MATCH', NULL, '0', '0', '0', '1'),
(1523, 52, 3, '9110004', 'SELISIH KAS MATCH', NULL, '0', '0', '0', '1'),
(1524, 17, 4, '1110003', 'KAS KCT', NULL, '0', '0', '0', '1'),
(1525, 17, 4, '1110009', 'NOTA GANTUNG KCT', NULL, '0', '0', '0', '1'),
(1526, 17, 4, '1110015', 'AYAT SILANG KCT', NULL, '0', '0', '0', '1'),
(1527, 53, 4, '1120005', 'BANK NEGARA INDONESIA KCT A/C 135.5566.666 A/N PT. KREASI CIPTA TRITUNGGAL', NULL, '0', '0', '0', '1'),
(1528, 18, 4, '1130011', 'PIUTANG USAHA KCT', NULL, '0', '0', '0', '1'),
(1529, 19, 4, '1140015', 'PIUTANG KARYAWAN - KCT', NULL, '0', '0', '0', '1'),
(1530, 19, 4, '1140021', 'PIUTANG LAIN-LAIN - KCT', NULL, '0', '0', '0', '1'),
(1531, 20, 4, '1150004', 'PERSEDIAAN BAHAN BAKU - KCT', NULL, '0', '0', '0', '1'),
(1532, 20, 4, '1150010', 'PERSEDIAAN BARANG DALAM PROSES - KCT', NULL, '0', '0', '0', '1'),
(1533, 20, 4, '1150016', 'PERSEDIAAN BARANG JADI - KCT', NULL, '0', '0', '0', '1'),
(1534, 20, 4, '1150022', 'TMP PERSEDIAAN - KCT', NULL, '0', '0', '0', '1'),
(1535, 20, 4, '1150028', 'PERSEDIAAN INVENTARIS - KCT', NULL, '0', '0', '0', '1'),
(1536, 20, 4, '1150034', 'PERSEDIAAN BARANG BAGUS - KCT', NULL, '0', '0', '0', '1'),
(1537, 20, 4, '1150040', 'PERSEDIAAN BARANG BAD STOCK - KCT', NULL, '0', '0', '0', '1'),
(1538, 21, 4, '1160004', 'SEWA DIBAYAR DIMUKA - KCT', NULL, '0', '0', '0', '1'),
(1539, 21, 4, '1160010', 'ASURANSI DIBAYAR DIMUKA - KCT', NULL, '0', '0', '0', '1'),
(1540, 21, 4, '1160016', 'IJIN DIBAYAR DIMUKA - KCT', NULL, '0', '0', '0', '1'),
(1541, 21, 4, '1160022', 'SEWA LOKASI DIBAYAR DIMUKA - KCT', NULL, '0', '0', '0', '1'),
(1542, 21, 4, '1160028', 'SEWA GEDUNG DIBAYAR DIMUKA - KCT', NULL, '0', '0', '0', '1'),
(1543, 21, 4, '1160034', 'SEWA KENDARAAN DIBAYAR DIMUKA  - KCT', NULL, '0', '0', '0', '1'),
(1544, 21, 4, '1160040', 'SEWA GUNA USAHA - KCT', NULL, '0', '0', '0', '1'),
(1545, 21, 4, '1160046', 'LAIN-LAIN DIBAYAR DIMUKA - KCT', NULL, '0', '0', '0', '1'),
(1546, 22, 4, '1170004', 'PPN MASUKAN - KCT', NULL, '0', '0', '0', '1'),
(1547, 22, 4, '1170010', 'PAJAK 21 DIBAYAR DIMUKA - KCT', NULL, '0', '0', '0', '1'),
(1548, 22, 4, '1170016', 'PAJAK 22 DIBAYAR DIMUKA - KCT', NULL, '0', '0', '0', '1'),
(1549, 22, 4, '1170022', 'PAJAK 23 DIBAYAR DIMUKA - KCT', NULL, '0', '0', '0', '1'),
(1550, 22, 4, '1170028', 'PAJAK 25 DIBAYAR DIMUKA - KCT', NULL, '0', '0', '0', '1'),
(1551, 22, 4, '1170034', 'PAJAK 4(2) DIBAYAR DIMUKA - KCT', NULL, '0', '0', '0', '1'),
(1552, 23, 4, '1180004', 'UM PEMBELIAN MOBIL - KCT', NULL, '0', '0', '0', '1'),
(1553, 24, 4, '1200004', 'TANAH - KCT', NULL, '0', '0', '0', '1'),
(1554, 24, 4, '1200010', 'GEDUNG - KCT', NULL, '0', '0', '0', '1'),
(1555, 24, 4, '1200016', 'KENDARAAN - KCT', NULL, '0', '0', '0', '1'),
(1556, 24, 4, '1200022', 'INVENTARIS - KCT', NULL, '0', '0', '0', '1'),
(1557, 25, 4, '1210004', 'AK. PENY. GEDUNG - KCT', NULL, '0', '0', '0', '1'),
(1558, 25, 4, '1210010', 'AK. PENY. KENDARAAN - KCT', NULL, '0', '0', '0', '1'),
(1559, 25, 4, '1210016', 'AK. PENY. INVENTARIS - KCT', NULL, '0', '0', '0', '1'),
(1560, 25, 4, '1210022', 'AK. PENY. SEWA GUNA USAHA - KCT', NULL, '0', '0', '0', '1'),
(1561, 55, 4, '2120006', 'HUTANG USAHA KCT', NULL, '0', '0', '0', '1'),
(1562, 56, 4, '2130008', 'HUTANG PAJAK PPN KURANG BAYAR', NULL, '0', '0', '0', '1'),
(1563, 26, 4, '2140005', 'HUTANG WPI', NULL, '0', '0', '0', '1'),
(1564, 26, 4, '2140014', 'HUTANG HOLDING', NULL, '0', '0', '0', '1'),
(1565, 27, 4, '3110004', 'MODAL SAHAM KCT', NULL, '0', '0', '0', '1'),
(1566, 28, 4, '3120007', 'LABA DITAHAN KCT', NULL, '0', '0', '0', '1'),
(1567, 28, 4, '3120008', 'SALDO LABA/RUGI BERJALAN KCT', NULL, '0', '0', '0', '1'),
(1568, 29, 4, '4110004', 'PENDAPATAN  KCT', NULL, '0', '0', '0', '1'),
(1569, 34, 4, '5110004', 'HPP/PEMBELIAN - KCT', NULL, '0', '0', '0', '1'),
(1570, 34, 4, '5110010', 'POTONGAN PEMBELIAN - KCT', NULL, '0', '0', '0', '1'),
(1571, 34, 4, '5110016', 'RETURN PEMBELIAN - KCT', NULL, '0', '0', '0', '1'),
(1572, 34, 4, '5110022', 'POTONGAN/DISCOUNT RETURN PEMBELIAN - KCT', NULL, '0', '0', '0', '1'),
(1573, 34, 4, '5110028', 'PPN RETURN BELI - KCT', NULL, '0', '0', '0', '1'),
(1574, 34, 4, '5110034', 'ONGKOS KIRIM PEMBELIAN - KCT', NULL, '0', '0', '0', '1'),
(1575, 34, 4, '5110041', 'HPP PERSEDIAAN - KCT', NULL, '0', '0', '0', '1'),
(1576, 35, 4, '6110043', 'BY ATK,FOTOCOPY,PERCETAKAN KCT', NULL, '0', '0', '0', '1'),
(1577, 35, 4, '6110044', 'BIAYA RUMAH TANGGA KCT', NULL, '0', '0', '0', '1'),
(1578, 35, 4, '6110045', 'BIAYA SEMINAR/PELATIHAN KCT', NULL, '0', '0', '0', '1'),
(1579, 35, 4, '6110046', 'UANG MAKAN KARYAWAN KCT', NULL, '0', '0', '0', '1'),
(1580, 35, 4, '6110047', 'BIAYA BENDA POS KCT', NULL, '0', '0', '0', '1'),
(1581, 35, 4, '6110048', 'BIAYA KIRIM PAKET KCT', NULL, '0', '0', '0', '1'),
(1582, 35, 4, '6110049', 'BIAYA INSENTIF (PERJALANAN DINAS) KCT', NULL, '0', '0', '0', '1'),
(1583, 35, 4, '6110050', 'BIAYA UANG MAKAN (PERJALANAN DINAS) KCT', NULL, '0', '0', '0', '1'),
(1584, 35, 4, '6110051', 'BIAYA PRJ DNS KANTOR (TRANSPORT/BIS/ANGK KCT', NULL, '0', '0', '0', '1'),
(1585, 35, 4, '6110052', 'PERJALANAN DINAS KNT (PENGINAPAN/KOST) KCT', NULL, '0', '0', '0', '1'),
(1586, 35, 4, '6110053', 'BIAYA ENTERTAINT PERJALANAN DINAS KCT', NULL, '0', '0', '0', '1'),
(1587, 35, 4, '6110054', 'BIAYA PERJALANAN DINAS LAIN-LAIN KCT', NULL, '0', '0', '0', '1'),
(1588, 35, 4, '6110055', 'BIAYA LEMBUR KARYAWAN KANTOR KCT', NULL, '0', '0', '0', '1'),
(1589, 35, 4, '6110056', 'BIAYA KANTOR LAIN-LAIN KCT', NULL, '0', '0', '0', '1'),
(1590, 36, 4, '6120016', 'BIAYA GAJI KCT', NULL, '0', '0', '0', '1'),
(1591, 36, 4, '6120017', 'BIAYA THR KCT', NULL, '0', '0', '0', '1'),
(1592, 36, 4, '6120018', 'BIAYA TUNJANGAN KCT', NULL, '0', '0', '0', '1'),
(1593, 36, 4, '6120019', 'BIAYA BPJS KESEHATAN KCT', NULL, '0', '0', '0', '1'),
(1594, 36, 4, '6120020', 'BIAYA BPJS KETENAGAKERJAAN KCT', NULL, '0', '0', '0', '1'),
(1595, 37, 4, '6130049', 'TRANSPORTASI (BIS/BBM MOTOR)  - KCT', NULL, '0', '0', '0', '1'),
(1596, 37, 4, '6130050', 'TOL TRUK ELF -KCT', NULL, '0', '0', '0', '1'),
(1597, 37, 4, '6130051', 'PARKIR - KCT', NULL, '0', '0', '0', '1'),
(1598, 37, 4, '6130052', 'PERON - KCT', NULL, '0', '0', '0', '1'),
(1599, 37, 4, '6130053', 'PENGINAPAN - KCT', NULL, '0', '0', '0', '1'),
(1600, 37, 4, '6130054', 'BIAYA MEL - KCT', NULL, '0', '0', '0', '1'),
(1601, 37, 4, '6130055', 'BIAYA BBM TRUCK ELF - KCT', NULL, '0', '0', '0', '1'),
(1602, 37, 4, '6130056', 'BIAYA PEMAKAIAN BARANG - KCT', NULL, '0', '0', '0', '1'),
(1603, 37, 4, '6130057', 'BIAYA KEAMANAN - KCT', NULL, '0', '0', '0', '1'),
(1604, 37, 4, '6130058', 'BIAYA PROYEK LAIN - KCT', NULL, '0', '0', '0', '1'),
(1605, 37, 4, '6130059', 'INSENTIF DRIVER - KCT', NULL, '0', '0', '0', '1'),
(1606, 37, 4, '6130060', 'UANG MAKAN DRIVER - KCT', NULL, '0', '0', '0', '1'),
(1607, 37, 4, '6130061', 'BIAYA AMORTISASI SEWA KANTOR - KCT', NULL, '0', '0', '0', '1'),
(1608, 37, 4, '6130062', 'BIAYA AMORTISASI KENDARAAN - KCT', NULL, '0', '0', '0', '1'),
(1609, 59, 4, '6160003', 'BIAYA LEMBUR TUKANG KCT', NULL, '0', '0', '0', '1'),
(1610, 59, 4, '6160004', 'BIAYA GAJI TUKANG KCT', NULL, '0', '0', '0', '1'),
(1611, 38, 4, '6170004', 'BIAYA LISTRIK PROYEK KCT', NULL, '0', '0', '0', '1'),
(1612, 39, 4, '6180004', 'BIAYA LISTRIK KCT', NULL, '0', '0', '0', '1'),
(1613, 40, 4, '6190004', 'BIAYA TELEPON KCT', NULL, '0', '0', '0', '1'),
(1614, 41, 4, '6200004', 'BIAYA PDAM KCT', NULL, '0', '0', '0', '1'),
(1615, 42, 4, '6210004', 'BIAYA BBM /SOLAR KCT', NULL, '0', '0', '0', '1'),
(1616, 43, 4, '6220004', 'BIAYA TOL KCT', NULL, '0', '0', '0', '1'),
(1617, 44, 4, '6230013', 'BIAYA ADM BANK KCT', NULL, '0', '0', '0', '1'),
(1618, 44, 4, '6230014', 'BIAYA PROVISI BANK KCT', NULL, '0', '0', '0', '1'),
(1619, 44, 4, '6230015', 'BIAYA BUNGA PINJAMAN BANK KCT', NULL, '0', '0', '0', '1'),
(1620, 44, 4, '6230016', 'BIAYA MATERAI  BANK KCT', NULL, '0', '0', '0', '1'),
(1621, 45, 4, '6240016', 'PPH 21 KCT', NULL, '0', '0', '0', '1'),
(1622, 45, 4, '6240017', 'PPH 23 KCT', NULL, '0', '0', '0', '1'),
(1623, 45, 4, '6240018', 'PPH 25 KCT', NULL, '0', '0', '0', '1'),
(1624, 45, 4, '6240019', 'PPN KCT', NULL, '0', '0', '0', '1'),
(1625, 45, 4, '6240020', 'PPh Pasal 4 Ayat 2 KCT', NULL, '0', '0', '0', '1'),
(1626, 46, 4, '6250013', 'BIAYA PBB KCT', NULL, '0', '0', '0', '1'),
(1627, 46, 4, '6250014', 'IURAN & LANGGANAN KCT', NULL, '0', '0', '0', '1'),
(1628, 46, 4, '6250015', 'BIAYA SUMBANGAN KCT', NULL, '0', '0', '0', '1'),
(1629, 46, 4, '6250016', 'BIAYA PENGURUSAN SURAT-SURAT KCT', NULL, '0', '0', '0', '1'),
(1630, 47, 4, '6260013', 'BIAYA ASURANSI KENDARAAN KCT', NULL, '0', '0', '0', '1'),
(1631, 47, 4, '6260014', 'BIAYA ASURANSI BANGUNAN KCT', NULL, '0', '0', '0', '1'),
(1632, 47, 4, '6260016', 'BIAYA ASURANSI KESEHATAN KCT', NULL, '0', '0', '0', '1'),
(1633, 48, 4, '6270010', 'BIAYA PEMELIHARAAN GEDUNG KCT', NULL, '0', '0', '0', '1'),
(1634, 48, 4, '6270011', 'BIAYA PEMELIHARAAN INVENTARIS KCT', NULL, '0', '0', '0', '1'),
(1635, 48, 4, '6270012', 'BIAYA PEMELIHARAAN KENDARAAN KCT', NULL, '0', '0', '0', '1'),
(1636, 49, 4, '6280013', 'BIAYA PENYUSUTAN GEDUNG KCT', NULL, '0', '0', '0', '1'),
(1637, 49, 4, '6280014', 'BIAYA PENYUSUTAN KENDARAAN KCT', NULL, '0', '0', '0', '1'),
(1638, 49, 4, '6280015', 'BIAYA PENYUSUTAN INVENTARIS KCT', NULL, '0', '0', '0', '1'),
(1639, 50, 4, '7110010', 'PENDAPATAN JASA GIRO KCT', NULL, '0', '0', '0', '1'),
(1640, 50, 4, '7110011', 'PENDAPATAN LAIN-LAIN KCT', NULL, '0', '0', '0', '1'),
(1641, 50, 4, '7110012', 'PENDAPATAN KOMISI / FEE KCT', NULL, '0', '0', '0', '1'),
(1642, 51, 4, '8110007', 'Pajak Penghasilan Badan KCT', NULL, '0', '0', '0', '1'),
(1643, 51, 4, '8110008', 'BIAYA LAIN-LAIN KCT', NULL, '0', '0', '0', '1'),
(1644, 52, 4, '9110007', 'PEMBULATAN KCT', NULL, '0', '0', '0', '1'),
(1645, 52, 4, '9110008', 'SELISIH KAS KCT', NULL, '0', '0', '0', '1'),
(1646, 17, 6, '1110004', 'KAS WPI', NULL, '0', '0', '0', '1'),
(1647, 17, 6, '1110010', 'NOTA GANTUNG WPI', NULL, '0', '0', '0', '1'),
(1648, 17, 6, '1110016', 'AYAT SILANG WPI', NULL, '0', '0', '0', '1'),
(1649, 53, 6, '1120011', 'BANK MANDIRI WPI A/C 142.000.0750.751 A/N ..............', NULL, '0', '0', '0', '1'),
(1650, 18, 6, '1130006', 'PIUTANG USAHA WPI', NULL, '0', '0', '0', '1'),
(1651, 19, 6, '1140014', 'PIUTANG KARYAWAN - WPI', NULL, '0', '0', '0', '1'),
(1652, 19, 6, '1140020', 'PIUTANG LAIN-LAIN - WPI', NULL, '0', '0', '0', '1'),
(1653, 21, 6, '1160003', 'SEWA DIBAYAR DIMUKA - WPI', NULL, '0', '0', '0', '1'),
(1654, 21, 6, '1160009', 'ASURANSI DIBAYAR DIMUKA - WPI', NULL, '0', '0', '0', '1'),
(1655, 21, 6, '1160021', 'SEWA LOKASI DIBAYAR DIMUKA - WPI', NULL, '0', '0', '0', '1'),
(1656, 21, 6, '1160027', 'SEWA GEDUNG DIBAYAR DIMUKA - WPI', NULL, '0', '0', '0', '1'),
(1657, 21, 6, '1160033', 'SEWA KENDARAAN DIBAYAR DIMUKA - WPI', NULL, '0', '0', '0', '1'),
(1658, 21, 6, '1160045', 'LAIN-LAIN DIBAYAR DIMUKA - WPI', NULL, '0', '0', '0', '1'),
(1659, 22, 6, '1170003', 'PPN MASUKAN - WPI', NULL, '0', '0', '0', '1'),
(1660, 22, 6, '1170009', 'PAJAK 21 DIBAYAR DIMUKA - WPI', NULL, '0', '0', '0', '1'),
(1661, 22, 6, '1170021', 'PAJAK 23 DIBAYAR DIMUKA - WPI', NULL, '0', '0', '0', '1'),
(1662, 22, 6, '1170027', 'PAJAK 25 DIBAYAR DIMUKA - WPI', NULL, '0', '0', '0', '1'),
(1663, 22, 6, '1170033', 'PAJAK 4(2) DIBAYAR DIMUKA - WPI', NULL, '0', '0', '0', '1'),
(1664, 23, 6, '1180003', 'UM PEMBELIAN MOBIL -  WPI', NULL, '0', '0', '0', '1'),
(1665, 24, 6, '1200003', 'TANAH - WPI', NULL, '0', '0', '0', '1'),
(1666, 24, 6, '1200009', 'GEDUNG - WPI', NULL, '0', '0', '0', '1'),
(1667, 24, 6, '1200015', 'KENDARAAN - WPI', NULL, '0', '0', '0', '1'),
(1668, 24, 6, '1200021', 'INVENTARIS - WPI', NULL, '0', '0', '0', '1'),
(1669, 25, 6, '1210003', 'AK. PENY. GEDUNG - WPI', NULL, '0', '0', '0', '1'),
(1670, 25, 6, '1210009', 'AK. PENY. KENDARAAN - WPI', NULL, '0', '0', '0', '1'),
(1671, 25, 6, '1210015', 'AK. PENY. INVENTARIS - WPI', NULL, '0', '0', '0', '1'),
(1672, 25, 6, '1210021', 'AK. PENY. SEWA GUNA USAHA - WPI', NULL, '0', '0', '0', '1'),
(1673, 55, 6, '2120009', 'HUTANG USAHA WPI', NULL, '0', '0', '0', '1'),
(1674, 26, 6, '2140004', 'HUTANG KCT', NULL, '0', '0', '0', '1'),
(1675, 56, 6, '2130011', 'HUTANG PAJAK PPN KURANG BAYAR', NULL, '0', '0', '0', '1'),
(1676, 26, 6, '2140013', 'HUTANG LAIN-LAIN HOLDING', NULL, '0', '0', '0', '1'),
(1677, 27, 6, '3110003', 'MODAL SAHAM WPI', NULL, '0', '0', '0', '1'),
(1678, 28, 6, '3120005', 'LABA DITAHAN WPI', NULL, '0', '0', '0', '1'),
(1679, 28, 6, '3120006', 'SALDO LABA/RUGI BERJALAN WPI', NULL, '0', '0', '0', '1'),
(1680, 29, 6, '4110003', 'PENDAPATAN OUTDOR - WPI', NULL, '0', '0', '0', '1'),
(1681, 33, 6, '4150003', 'PENDAPATAN USAHA LAINNYA WPI', NULL, '0', '0', '0', '1'),
(1682, 34, 6, '5110003', 'HPP/PEMBELIAN - WPI', NULL, '0', '0', '0', '1'),
(1683, 34, 6, '5110009', 'POTONGAN PEMBELIAN - WPI', NULL, '0', '0', '0', '1'),
(1684, 34, 6, '5110015', 'RETURN PEMBELIAN - WPI', NULL, '0', '0', '0', '1'),
(1685, 34, 6, '5110021', 'POTONGAN/DISCOUNT RETURN PEMBELIAN - WPI', NULL, '0', '0', '0', '1'),
(1686, 34, 6, '5110027', 'PPN RETURN BELI - WPI', NULL, '0', '0', '0', '1'),
(1687, 34, 6, '5110033', 'ONGKOS KIRIM PEMBELIAN - WPI', NULL, '0', '0', '0', '1'),
(1688, 34, 6, '5110040', 'HPP PERSEDIAAN - WPI', NULL, '0', '0', '0', '1'),
(1689, 35, 6, '6110029', 'BY ATK,FOTOCOPY,PERCETAKAN WPI', NULL, '0', '0', '0', '1'),
(1690, 35, 6, '6110030', 'BIAYA RUMAH TANGGA WPI', NULL, '0', '0', '0', '1'),
(1691, 35, 6, '6110031', 'BIAYA SEMINAR/PELATIHAN WPI', NULL, '0', '0', '0', '1'),
(1692, 35, 6, '6110032', 'UANG MAKAN KARYAWAN WPI', NULL, '0', '0', '0', '1'),
(1693, 35, 6, '6110033', 'BIAYA BENDA POS WPI', NULL, '0', '0', '0', '1'),
(1694, 35, 6, '6110034', 'BIAYA KIRIM PAKET WPI', NULL, '0', '0', '0', '1'),
(1695, 35, 6, '6110035', 'BIAYA INSENTIF (PERJALANAN DINAS) WPI', NULL, '0', '0', '0', '1'),
(1696, 35, 6, '6110036', 'BIAYA UANG MAKAN (PERJALANAN DINAS) WPI', NULL, '0', '0', '0', '1'),
(1697, 35, 6, '6110037', 'BIAYA PRJ DNS KANTOR (TRANSPORT/BIS/ANGK WPI', NULL, '0', '0', '0', '1'),
(1698, 35, 6, '6110038', 'PERJALANAN DINAS KNT (PENGINAPAN/KOST) WPI', NULL, '0', '0', '0', '1'),
(1699, 35, 6, '6110039', 'BIAYA ENTERTAINT PERJALANAN DINAS WPI', NULL, '0', '0', '0', '1'),
(1700, 35, 6, '6110040', 'BIAYA PERJALANAN DINAS LAIN-LAIN WPI', NULL, '0', '0', '0', '1'),
(1701, 35, 6, '6110041', 'BIAYA LEMBUR KARYAWAN KANTOR WPI', NULL, '0', '0', '0', '1'),
(1702, 35, 6, '6110042', 'BIAYA KANTOR LAIN-LAIN WPI', NULL, '0', '0', '0', '1'),
(1703, 36, 6, '6120011', 'BIAYA GAJI WPI', NULL, '0', '0', '0', '1'),
(1704, 36, 6, '6120012', 'BIAYA THR WPI', NULL, '0', '0', '0', '1'),
(1705, 36, 6, '6120013', 'BIAYA TUNJANGAN WPI', NULL, '0', '0', '0', '1'),
(1706, 36, 6, '6120014', 'BIAYA BPJS KESEHATAN WPI', NULL, '0', '0', '0', '1'),
(1707, 36, 6, '6120015', 'BIAYA BPJS KETENAGAKERJAAN WPI', NULL, '0', '0', '0', '1'),
(1708, 37, 6, '6130035', 'TRANSPORTASI (BIS/BBM MOTOR)  - WPI', NULL, '0', '0', '0', '1'),
(1709, 37, 6, '6130041', 'BIAYA BBM  - WPI', NULL, '0', '0', '0', '1'),
(1710, 37, 6, '6130043', 'BIAYA KEAMANAN - WPI', NULL, '0', '0', '0', '1'),
(1711, 37, 6, '6130044', 'BIAYA PROYEK LAIN - WPI', NULL, '0', '0', '0', '1'),
(1712, 37, 6, '6130047', 'BIAYA AMORTISASI SEWA KANTOR - WPI', NULL, '0', '0', '0', '1'),
(1713, 37, 6, '6130048', 'BIAYA AMORTISASI KENDARAAN - WPI', NULL, '0', '0', '0', '1'),
(1714, 39, 6, '6180003', 'BIAYA LISTRIK WPI', NULL, '0', '0', '0', '1'),
(1715, 40, 6, '6190003', 'BIAYA TELEPON WPI', NULL, '0', '0', '0', '1'),
(1716, 41, 6, '6200003', 'BIAYA PDAM WPI', NULL, '0', '0', '0', '1'),
(1717, 42, 6, '6210003', 'BIAYA BBM /SOLAR WPI', NULL, '0', '0', '0', '1'),
(1718, 43, 6, '6220003', 'BIAYA TOL WPI', NULL, '0', '0', '0', '1'),
(1719, 44, 6, '6230009', 'BIAYA ADM BANK WPI', NULL, '0', '0', '0', '1'),
(1720, 44, 6, '6230010', 'BIAYA PROVISI BANK WPI', NULL, '0', '0', '0', '1'),
(1721, 44, 6, '6230011', 'BIAYA BUNGA PINJAMAN BANK WPI', NULL, '0', '0', '0', '1'),
(1722, 44, 6, '6230012', 'BIAYA MATERAI  BANK WPI', NULL, '0', '0', '0', '1'),
(1723, 46, 6, '6250009', 'BIAYA PBB WPI', NULL, '0', '0', '0', '1'),
(1724, 46, 6, '6250010', 'IURAN & LANGGANAN WPI', NULL, '0', '0', '0', '1'),
(1725, 46, 6, '6250011', 'BIAYA SUMBANGAN WPI', NULL, '0', '0', '0', '1'),
(1726, 46, 6, '6250012', 'BIAYA PENGURUSAN SURAT-SURAT WPI', NULL, '0', '0', '0', '1'),
(1727, 47, 6, '6260009', 'BIAYA ASURANSI KENDARAAN WPI', NULL, '0', '0', '0', '1'),
(1728, 47, 6, '6260010', 'BIAYA ASURANSI BANGUNAN WPI', NULL, '0', '0', '0', '1'),
(1729, 47, 6, '6260012', 'BIAYA ASURANSI KESEHATAN WPI', NULL, '0', '0', '0', '1'),
(1730, 48, 6, '6270007', 'BIAYA PEMELIHARAAN GEDUNG WPI', NULL, '0', '0', '0', '1'),
(1731, 48, 6, '6270008', 'BIAYA PEMELIHARAAN INVENTARIS WPI', NULL, '0', '0', '0', '1'),
(1732, 48, 6, '6270009', 'BIAYA PEMELIHARAAN KENDARAAN WPI', NULL, '0', '0', '0', '1'),
(1733, 49, 6, '6280009', 'BIAYA PENYUSUTAN GEDUNG WPI', NULL, '0', '0', '0', '1'),
(1734, 49, 6, '6280010', 'BIAYA PENYUSUTAN KENDARAAN WPI', NULL, '0', '0', '0', '1'),
(1735, 49, 6, '6280011', 'BIAYA PENYUSUTAN INVENTARIS WPI', NULL, '0', '0', '0', '1'),
(1736, 50, 6, '7110007', 'PENDAPATAN JASA GIRO WPI', NULL, '0', '0', '0', '1'),
(1737, 50, 6, '7110008', 'PENDAPATAN LAIN-LAIN WPI', NULL, '0', '0', '0', '1'),
(1738, 50, 6, '7110009', 'PENDAPATAN KOMISI / FEE WPI', NULL, '0', '0', '0', '1'),
(1739, 51, 6, '8110005', 'Pajak Penghasilan Badan WPI', NULL, '0', '0', '0', '1'),
(1740, 51, 6, '8110006', 'BIAYA LAIN-LAIN WPI', NULL, '0', '0', '0', '1'),
(1741, 52, 6, '9110005', 'PEMBULATAN WPI', NULL, '0', '0', '0', '1'),
(1742, 52, 6, '9110006', 'SELISIH KAS WPI', NULL, '0', '0', '0', '1'),
(1743, 17, 7, '1110006', 'KAS RCP', NULL, '0', '0', '0', '1'),
(1744, 17, 7, '1110012', 'NOTA GANTUNG RCP', NULL, '0', '0', '0', '1'),
(1745, 17, 7, '1110018', 'AYAT SILANG RCP', NULL, '0', '0', '0', '1'),
(1746, 18, 7, '1130021', 'PIUTANG USAHA RCP', NULL, '0', '0', '0', '1'),
(1747, 18, 7, '1130022', 'PIUTANG USAHA OUTDOOR RCP', NULL, '0', '0', '0', '1'),
(1748, 18, 7, '1130023', 'PIUTANG USAHA PAJAK REKLAME RCP', NULL, '0', '0', '0', '1'),
(1749, 18, 7, '1130024', 'PIUTANG USAHA MEDIA RCP', NULL, '0', '0', '0', '1'),
(1750, 18, 7, '1130025', 'PIUTANG JAMBONG RCP', NULL, '0', '0', '0', '1'),
(1751, 19, 7, '1140017', 'PIUTANG KARYAWAN - RCP', NULL, '0', '0', '0', '1'),
(1752, 19, 7, '1140023', 'PIUTANG LAIN-LAIN - RCP', NULL, '0', '0', '0', '1'),
(1753, 20, 7, '1150006', 'PERSEDIAAN BAHAN BAKU - RCP', NULL, '0', '0', '0', '1'),
(1754, 20, 7, '1150012', 'PERSEDIAAN BARANG DALAM PROSES - RCP', NULL, '0', '0', '0', '1'),
(1755, 20, 7, '1150018', 'PERSEDIAAN BARANG JADI - RCP', NULL, '0', '0', '0', '1'),
(1756, 20, 7, '1150024', 'TMP PERSEDIAAN - RCP', NULL, '0', '0', '0', '1'),
(1757, 20, 7, '1150030', 'PERSEDIAAN INVENTARIS - RCP', NULL, '0', '0', '0', '1'),
(1758, 20, 7, '1150036', 'PERSEDIAAN BARANG BAGUS - RCP', NULL, '0', '0', '0', '1'),
(1759, 20, 7, '1150042', 'PERSEDIAAN BARANG BAD STOCK -  RCP', NULL, '0', '0', '0', '1'),
(1760, 21, 7, '1160006', 'SEWA DIBAYAR DIMUKA - RCP', NULL, '0', '0', '0', '1'),
(1761, 21, 7, '1160012', 'ASURANSI DIBAYAR DIMUKA - RCP', NULL, '0', '0', '0', '1'),
(1762, 21, 7, '1160018', 'IJIN DIBAYAR DIMUKA - RCP', NULL, '0', '0', '0', '1'),
(1763, 21, 7, '1160024', 'SEWA LOKASI DIBAYAR DIMUKA - RCP', NULL, '0', '0', '0', '1'),
(1764, 21, 7, '1160030', 'SEWA GEDUNG DIBAYAR DIMUKA - RCP', NULL, '0', '0', '0', '1'),
(1765, 21, 7, '1160036', 'SEWA KENDARAAN DIBAYAR DIMUKA- RCP', NULL, '0', '0', '0', '1'),
(1766, 21, 7, '1160042', 'SEWA GUNA USAHA - RCP', NULL, '0', '0', '0', '1'),
(1767, 21, 7, '1160048', 'LAIN-LAIN DIBAYAR DIMUKA - RCP', NULL, '0', '0', '0', '1'),
(1768, 22, 7, '1170006', 'PPN MASUKAN - RCP', NULL, '0', '0', '0', '1'),
(1769, 22, 7, '1170012', 'PAJAK 21 DIBAYAR DIMUKA - RCP', NULL, '0', '0', '0', '1'),
(1770, 22, 7, '1170018', 'PAJAK 22 DIBAYAR DIMUKA - RCP', NULL, '0', '0', '0', '1'),
(1771, 22, 7, '1170024', 'PAJAK 23 DIBAYAR DIMUKA - RCP', NULL, '0', '0', '0', '1'),
(1772, 22, 7, '1170030', 'PAJAK 25 DIBAYAR DIMUKA - RCP', NULL, '0', '0', '0', '1'),
(1773, 22, 7, '1170036', 'PAJAK 4(2) DIBAYAR DIMUKA - RCP', NULL, '0', '0', '0', '1'),
(1774, 23, 7, '1180006', 'UM PEMBELIAN MOBIL - RCP', NULL, '0', '0', '0', '1'),
(1775, 24, 7, '1200006', 'TANAH - RCP', NULL, '0', '0', '0', '1'),
(1776, 24, 7, '1200012', 'GEDUNG - RCP', NULL, '0', '0', '0', '1'),
(1777, 24, 7, '1200018', 'KENDARAAN - RCP', NULL, '0', '0', '0', '1'),
(1778, 24, 7, '1200024', 'INVENTARIS - RCP', NULL, '0', '0', '0', '1'),
(1779, 24, 7, '1200030', 'AKTIVA - BILLBOARD - RCP', NULL, '0', '0', '0', '1'),
(1780, 25, 7, '1210006', 'AK. PENY. GEDUNG - RCP', NULL, '0', '0', '0', '1'),
(1781, 25, 7, '1210012', 'AK. PENY. KENDARAAN - RCP', NULL, '0', '0', '0', '1'),
(1782, 25, 7, '1210018', 'AK. PENY. INVENTARIS - RCP', NULL, '0', '0', '0', '1'),
(1783, 25, 7, '1210024', 'AK. PENY. SEWA GUNA USAHA - RCP', NULL, '0', '0', '0', '1'),
(1784, 25, 7, '1210030', 'AK. PENY. BILLBOARD - RCP', NULL, '0', '0', '0', '1'),
(1785, 26, 7, '2140007', 'HUTANG RCP', NULL, '0', '0', '0', '1'),
(1786, 26, 7, '2140016', 'HUTANG LAIN-LAIN RCP', NULL, '0', '0', '0', '1'),
(1787, 27, 7, '3110006', 'MODAL SAHAM RCP', NULL, '0', '0', '0', '1'),
(1788, 28, 7, '3120011', 'LABA DITAHAN RCP', NULL, '0', '0', '0', '1'),
(1789, 28, 7, '3120012', 'SALDO LABA/RUGI BERJALAN RCP', NULL, '0', '0', '0', '1'),
(1790, 29, 7, '4110006', 'PENDAPATAN OUTDOR - RCP', NULL, '0', '0', '0', '1'),
(1791, 29, 7, '4110012', 'PENDAPATAN PAJAK REKLAME - RCP', NULL, '0', '0', '0', '1'),
(1792, 29, 7, '4110018', 'PENDAPATAN MEDIA - RCP', NULL, '0', '0', '0', '1'),
(1793, 29, 7, '4110024', 'PENDAPATAN/PENJUALAN - RCP', NULL, '0', '0', '0', '1'),
(1794, 30, 7, '4120006', 'POTONGAN/DISCOUNT PENJUALAN OUTDOOR - RCP', NULL, '0', '0', '0', '1'),
(1795, 30, 7, '4120018', 'POTONGAN/DISCOUNT PENJUALAN - RCP', NULL, '0', '0', '0', '1'),
(1796, 31, 7, '4130006', 'RETURN PENJUALAN OUTDOOR - RCP', NULL, '0', '0', '0', '1'),
(1797, 32, 7, '4140006', 'POTONGAN/DISCOUNT RETURN JUAL OUTDOOR - RCP', NULL, '0', '0', '0', '1'),
(1798, 32, 7, '4140016', 'POTONGAN/DISCOUNT RETURN PENJUALAN - RCP', NULL, '0', '0', '0', '1'),
(1799, 33, 7, '4150006', 'PENDAPATAN USAHA LAINNYA RCP', NULL, '0', '0', '0', '1'),
(1800, 34, 7, '5110006', 'HPP/PEMBELIAN - RCP', NULL, '0', '0', '0', '1'),
(1801, 34, 7, '5110012', 'POTONGAN PEMBELIAN - RCP', NULL, '0', '0', '0', '1'),
(1802, 34, 7, '5110018', 'RETURN PEMBELIAN - RCP', NULL, '0', '0', '0', '1'),
(1803, 34, 7, '5110024', 'POTONGAN/DISCOUNT RETURN PEMBELIAN - RCP', NULL, '0', '0', '0', '1'),
(1804, 34, 7, '5110030', 'PPN RETURN BELI - RCP', NULL, '0', '0', '0', '1'),
(1805, 34, 7, '5110036', 'ONGKOS KIRIM PEMBELIAN - RCP', NULL, '0', '0', '0', '1'),
(1806, 34, 7, '5110043', 'HPP PERSEDIAAN - RCP', NULL, '0', '0', '0', '1'),
(1807, 35, 7, '6110071', 'BY ATK,FOTOCOPY,PERCETAKAN RCP', NULL, '0', '0', '0', '1'),
(1808, 35, 7, '6110072', 'BIAYA RUMAH TANGGA RCP', NULL, '0', '0', '0', '1'),
(1809, 35, 7, '6110073', 'BIAYA SEMINAR/PELATIHAN RCP', NULL, '0', '0', '0', '1'),
(1810, 35, 7, '6110074', 'UANG MAKAN KARYAWAN RCP', NULL, '0', '0', '0', '1'),
(1811, 35, 7, '6110075', 'BIAYA BENDA POS RCP', NULL, '0', '0', '0', '1'),
(1812, 35, 7, '6110076', 'BIAYA KIRIM PAKET RCP', NULL, '0', '0', '0', '1'),
(1813, 35, 7, '6110077', 'BIAYA INSENTIF (PERJALANAN DINAS) RCP', NULL, '0', '0', '0', '1'),
(1814, 35, 7, '6110078', 'BIAYA UANG MAKAN (PERJALANAN DINAS) RCP', NULL, '0', '0', '0', '1'),
(1815, 35, 7, '6110079', 'BIAYA PRJ DNS KANTOR (TRANSPORT/BIS/ANGK RCP', NULL, '0', '0', '0', '1'),
(1816, 35, 7, '6110080', 'PERJALANAN DINAS KNT (PENGINAPAN/KOST) RCP', NULL, '0', '0', '0', '1'),
(1817, 35, 7, '6110081', 'BIAYA ENTERTAINT PERJALANAN DINAS RCP', NULL, '0', '0', '0', '1'),
(1818, 35, 7, '6110082', 'BIAYA PERJALANAN DINAS LAIN-LAIN RCP', NULL, '0', '0', '0', '1'),
(1819, 35, 7, '6110083', 'BIAYA LEMBUR KARYAWAN KANTOR RCP', NULL, '0', '0', '0', '1'),
(1820, 35, 7, '6110084', 'BIAYA KANTOR LAIN-LAIN RCP', NULL, '0', '0', '0', '1'),
(1821, 36, 7, '6120026', 'BIAYA GAJI RCP', NULL, '0', '0', '0', '1'),
(1822, 36, 7, '6120027', 'BIAYA THR RCP', NULL, '0', '0', '0', '1'),
(1823, 36, 7, '6120028', 'BIAYA TUNJANGAN RCP', NULL, '0', '0', '0', '1'),
(1824, 36, 7, '6120029', 'BIAYA BPJS KESEHATAN RCP', NULL, '0', '0', '0', '1'),
(1825, 36, 7, '6120030', 'BIAYA BPJS KETENAGAKERJAAN RCP', NULL, '0', '0', '0', '1'),
(1826, 36, 7, '6130077', 'TRANSPORTASI (BIS/BBM MOTOR)  - RCP', NULL, '0', '0', '0', '1'),
(1827, 37, 7, '6130078', 'TOL TRUK ELF -RCP', NULL, '0', '0', '0', '1'),
(1828, 36, 7, '6130079', 'PARKIR - RCP', NULL, '0', '0', '0', '1'),
(1829, 36, 7, '6130080', 'PERON - RCP', NULL, '0', '0', '0', '1'),
(1830, 36, 7, '6130081', 'PENGINAPAN - RCP', NULL, '0', '0', '0', '1'),
(1831, 37, 7, '6130082', 'BIAYA MEL - RCP', NULL, '0', '0', '0', '1'),
(1832, 37, 7, '6130083', 'BIAYA BBM TRUCK ELF - RCP', NULL, '0', '0', '0', '1'),
(1833, 36, 7, '6130084', 'BIAYA PEMAKAIAN BARANG - RCP', NULL, '0', '0', '0', '1'),
(1834, 36, 7, '6130085', 'BIAYA KEAMANAN - RCP', NULL, '0', '0', '0', '1'),
(1835, 36, 7, '6130086', 'BIAYA PROYEK LAIN - RCP', NULL, '0', '0', '0', '1'),
(1836, 36, 7, '6130087', 'INSENTIF DRIVER - RCP', NULL, '0', '0', '0', '1'),
(1837, 36, 7, '6130088', 'UANG MAKAN DRIVER - RCP', NULL, '0', '0', '0', '1'),
(1838, 36, 7, '6130089', 'BIAYA AMORTISASI SEWA KANTOR - RCP', NULL, '0', '0', '0', '1'),
(1839, 36, 7, '6130090', 'BIAYA AMORTISASI KENDARAAN - RCP', NULL, '0', '0', '0', '1'),
(1840, 38, 7, '6170006', 'BIAYA LISTRIK PROYEK RCP', NULL, '0', '0', '0', '1'),
(1841, 39, 7, '6180006', 'BIAYA LISTRIK RCP', NULL, '0', '0', '0', '1'),
(1842, 40, 7, '6190006', 'BIAYA TELEPON RCP', NULL, '0', '0', '0', '1'),
(1843, 41, 7, '6200006', 'BIAYA PDAM RCP', NULL, '0', '0', '0', '1'),
(1844, 42, 7, '6210006', 'BIAYA BBM /SOLAR RCP', NULL, '0', '0', '0', '1'),
(1845, 43, 7, '6220006', 'BIAYA TOL RCP', NULL, '0', '0', '0', '1'),
(1846, 44, 7, '6230021', 'BIAYA ADM BANK RCP', NULL, '0', '0', '0', '1'),
(1847, 44, 7, '6230022', 'BIAYA PROVISI BANK RCP', NULL, '0', '0', '0', '1'),
(1848, 44, 7, '6230023', 'BIAYA BUNGA PINJAMAN BANK RCP', NULL, '0', '0', '0', '1'),
(1849, 44, 7, '6230024', 'BIAYA MATERAI  BANK RCP', NULL, '0', '0', '0', '1'),
(1850, 45, 7, '6240026', 'PPH 21 RCP', NULL, '0', '0', '0', '1'),
(1851, 45, 7, '6240027', 'PPH 23 RCP', NULL, '0', '0', '0', '1'),
(1852, 45, 7, '6240028', 'PPH 25 RCP', NULL, '0', '0', '0', '1'),
(1853, 45, 7, '6240029', 'PPN RCP', NULL, '0', '0', '0', '1'),
(1854, 45, 7, '6240030', 'PPh Pasal 4 Ayat 2 RCP', NULL, '0', '0', '0', '1'),
(1855, 46, 7, '6250021', 'BIAYA PBB RCP', NULL, '0', '0', '0', '1'),
(1856, 46, 7, '6250022', 'IURAN & LANGGANAN RCP', NULL, '0', '0', '0', '1'),
(1857, 46, 7, '6250023', 'BIAYA SUMBANGAN RCP', NULL, '0', '0', '0', '1'),
(1858, 46, 7, '6250024', 'BIAYA PENGURUSAN SURAT-SURAT RCP', NULL, '0', '0', '0', '1'),
(1859, 47, 7, '6260021', 'BIAYA ASURANSI KENDARAAN RCP', NULL, '0', '0', '0', '1'),
(1860, 47, 7, '6260022', 'BIAYA ASURANSI BANGUNAN RCP', NULL, '0', '0', '0', '1'),
(1861, 47, 7, '6260023', 'BIAYA ASURANSI BILLBOARD RCP', NULL, '0', '0', '0', '1'),
(1862, 47, 7, '6260024', 'BIAYA ASURANSI KESEHATAN RCP', NULL, '0', '0', '0', '1'),
(1863, 48, 7, '6270016', 'BIAYA PEMELIHARAAN GEDUNG RCP', NULL, '0', '0', '0', '1'),
(1864, 48, 7, '6270017', 'BIAYA PEMELIHARAAN INVENTARIS RCP', NULL, '0', '0', '0', '1'),
(1865, 48, 7, '6270018', 'BIAYA PEMELIHARAAN KENDARAAN RCP', NULL, '0', '0', '0', '1'),
(1866, 49, 7, '6280021', 'BIAYA PENYUSUTAN GEDUNG RCP', NULL, '0', '0', '0', '1'),
(1867, 49, 7, '6280022', 'BIAYA PENYUSUTAN KENDARAAN RCP', NULL, '0', '0', '0', '1'),
(1868, 49, 7, '6280023', 'BIAYA PENYUSUTAN INVENTARIS RCP', NULL, '0', '0', '0', '1'),
(1869, 49, 7, '6280024', 'BIAYA PENYUSUTAN BILLBOARD RCP', NULL, '0', '0', '0', '1'),
(1870, 50, 7, '7110016', 'PENDAPATAN JASA GIRO RCP', NULL, '0', '0', '0', '1'),
(1871, 50, 7, '7110017', 'PENDAPATAN LAIN-LAIN RCP', NULL, '0', '0', '0', '1'),
(1872, 50, 7, '7110018', 'PENDAPATAN KOMISI / FEE RCP', NULL, '0', '0', '0', '1'),
(1873, 51, 7, '8110011', 'Pajak Penghasilan Badan RCP', NULL, '0', '0', '0', '1'),
(1874, 51, 7, '8110012', 'BIAYA LAIN-LAIN RCP', NULL, '0', '0', '0', '1'),
(1875, 52, 7, '9110011', 'PEMBULATAN RCP', NULL, '0', '0', '0', '1'),
(1876, 52, 7, '9110012', 'SELISIH KAS RCP', NULL, '0', '0', '0', '1'),
(1877, 56, 3, '2130012', 'HUTANG PAJAK PPN KELUARAN MATCH', NULL, '0', '0', '0', '1'),
(1878, 55, 6, '2120029', 'HUTANG USAHA WPI MAIN', NULL, '0', '0', '0', '1'),
(1879, 55, 6, '2120030', 'HUTANG USAHA WPI SUB', NULL, '0', '0', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `giroin_det`
--

CREATE TABLE `giroin_det` (
  `GRINDET_ID` int(11) NOT NULL,
  `GRIN_ID` int(11) DEFAULT NULL,
  `GIR_ID` int(11) DEFAULT NULL,
  `GRINDET_CODE` char(30) DEFAULT NULL,
  `GRINDET_DATE` date DEFAULT NULL,
  `GRINDET_INFO` varchar(1024) DEFAULT NULL,
  `GRINDET_AMOUNT` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giroin_det`
--

INSERT INTO `giroin_det` (`GRINDET_ID`, `GRIN_ID`, `GIR_ID`, `GRINDET_CODE`, `GRINDET_DATE`, `GRINDET_INFO`, `GRINDET_AMOUNT`) VALUES
(2, 1, 1, 'G12345', '2018-10-04', NULL, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `giroin_record`
--

CREATE TABLE `giroin_record` (
  `GIR_ID` int(11) NOT NULL,
  `BNKTRX_ID` int(11) DEFAULT '0',
  `GIR_REFFID` char(30) DEFAULT '0',
  `GIR_REFFCODE` char(200) DEFAULT '0',
  `GIR_LIQSTS` char(1) DEFAULT '0',
  `GIR_BLCSTS` char(1) DEFAULT '0',
  `GIR_DTSTS` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giroin_record`
--

INSERT INTO `giroin_record` (`GIR_ID`, `BNKTRX_ID`, `GIR_REFFID`, `GIR_REFFCODE`, `GIR_LIQSTS`, `GIR_BLCSTS`, `GIR_DTSTS`) VALUES
(1, 3, '0', 'G12345', '0', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `giroout_det`
--

CREATE TABLE `giroout_det` (
  `GROUTDET_ID` int(11) NOT NULL,
  `GROUT_ID` int(11) DEFAULT NULL,
  `GOR_ID` int(11) DEFAULT NULL,
  `GROUTDET_CODE` char(30) DEFAULT NULL,
  `GROUTDET_DATE` date DEFAULT NULL,
  `GROUTDET_INFO` varchar(1024) DEFAULT NULL,
  `GROUTDET_AMOUNT` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giroout_det`
--

INSERT INTO `giroout_det` (`GROUTDET_ID`, `GROUT_ID`, `GOR_ID`, `GROUTDET_CODE`, `GROUTDET_DATE`, `GROUTDET_INFO`, `GROUTDET_AMOUNT`) VALUES
(1, 1, 1, 'G123', '2018-10-04', NULL, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `giroout_record`
--

CREATE TABLE `giroout_record` (
  `GOR_ID` int(11) NOT NULL,
  `BNKTRXO_ID` int(11) DEFAULT NULL,
  `GOR_REFFID` char(30) DEFAULT NULL,
  `GOR_REFFCODE` char(200) DEFAULT NULL,
  `GOR_LIQSTS` char(1) DEFAULT NULL,
  `GOR_BLCSTS` char(1) DEFAULT NULL,
  `GOR_DTSTS` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giroout_record`
--

INSERT INTO `giroout_record` (`GOR_ID`, `BNKTRXO_ID`, `GOR_REFFID`, `GOR_REFFCODE`, `GOR_LIQSTS`, `GOR_BLCSTS`, `GOR_DTSTS`) VALUES
(1, 2, NULL, 'G123', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `goods_history`
--

CREATE TABLE `goods_history` (
  `GDHIS_ID` int(11) NOT NULL,
  `GD_ID` int(11) DEFAULT NULL,
  `GDHIS_CODE` char(30) DEFAULT NULL,
  `GDHIS_DATE` date DEFAULT NULL,
  `GDHIS_OLD` int(11) DEFAULT NULL,
  `GDHIS_NEW` int(11) DEFAULT NULL,
  `GDHIS_DIFF` int(11) DEFAULT NULL,
  `GDHIS_INFO` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_master`
--

CREATE TABLE `group_master` (
  `USER_ID` int(11) NOT NULL,
  `MST_CODE` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_trx`
--

CREATE TABLE `group_trx` (
  `USER_ID` int(11) NOT NULL,
  `TRX_CODE` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_user`
--

CREATE TABLE `group_user` (
  `USER_ID` int(11) NOT NULL,
  `MENU_CODE` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_user`
--

INSERT INTO `group_user` (`USER_ID`, `MENU_CODE`) VALUES
(1, 'ACC'),
(1, 'BNK'),
(1, 'BRC'),
(1, 'COA'),
(1, 'CURR'),
(1, 'CUST'),
(1, 'DEPT'),
(1, 'FIN'),
(1, 'GA'),
(1, 'GD'),
(1, 'INVT'),
(1, 'LOC'),
(1, 'LOG'),
(1, 'MKT'),
(1, 'PAT'),
(1, 'PMT'),
(1, 'REK'),
(1, 'SLS'),
(1, 'SUPP'),
(1, 'TRX'),
(1, 'USR'),
(2, 'ACC'),
(2, 'BNK'),
(2, 'BRC'),
(2, 'COA'),
(2, 'CURR'),
(2, 'CUST'),
(2, 'DEPT'),
(2, 'FIN'),
(2, 'GA'),
(2, 'GD'),
(2, 'INVT'),
(2, 'LOC'),
(2, 'LOG'),
(2, 'MKT'),
(2, 'PAT'),
(2, 'PMT'),
(2, 'REK'),
(2, 'SLS'),
(2, 'SUPP'),
(2, 'TRX'),
(2, 'USR'),
(3, 'ACC'),
(3, 'BNK'),
(3, 'BRC'),
(3, 'COA'),
(3, 'CURR'),
(3, 'CUST'),
(3, 'DEPT'),
(3, 'FIN'),
(3, 'GA'),
(3, 'GD'),
(3, 'INVT'),
(3, 'LOC'),
(3, 'LOG'),
(3, 'MKT'),
(3, 'PAT'),
(3, 'PMT'),
(3, 'REK'),
(3, 'SLS'),
(3, 'SUPP'),
(3, 'TRX'),
(3, 'USR'),
(4, 'ACC'),
(4, 'BNK'),
(4, 'BRC'),
(4, 'COA'),
(4, 'CURR'),
(4, 'CUST'),
(4, 'DEPT'),
(4, 'FIN'),
(4, 'GA'),
(4, 'GD'),
(4, 'INVT'),
(4, 'LOC'),
(4, 'LOG'),
(4, 'MKT'),
(4, 'PAT'),
(4, 'PMT'),
(4, 'REK'),
(4, 'SLS'),
(4, 'SUPP'),
(4, 'TRX'),
(4, 'USR'),
(5, 'ACC'),
(5, 'BNK'),
(5, 'BRC'),
(5, 'COA'),
(5, 'CURR'),
(5, 'CUST'),
(5, 'DEPT'),
(5, 'FIN'),
(5, 'GA'),
(5, 'GD'),
(5, 'INVT'),
(5, 'LOC'),
(5, 'LOG'),
(5, 'MKT'),
(5, 'PAT'),
(5, 'PMT'),
(5, 'REK'),
(5, 'SLS'),
(5, 'SUPP'),
(5, 'TRX'),
(5, 'USR'),
(6, 'ACC'),
(6, 'BNK'),
(6, 'BRC'),
(6, 'COA'),
(6, 'CURR'),
(6, 'CUST'),
(6, 'DEPT'),
(6, 'FIN'),
(6, 'GA'),
(6, 'GD'),
(6, 'INVT'),
(6, 'LOC'),
(6, 'LOG'),
(6, 'MKT'),
(6, 'PAT'),
(6, 'PMT'),
(6, 'REK'),
(6, 'SLS'),
(6, 'SUPP'),
(6, 'TRX'),
(6, 'USR'),
(7, 'ACC'),
(7, 'BNK'),
(7, 'BRC'),
(7, 'COA'),
(7, 'CURR'),
(7, 'CUST'),
(7, 'DEPT'),
(7, 'FIN'),
(7, 'GA'),
(7, 'GD'),
(7, 'INVT'),
(7, 'LOC'),
(7, 'LOG'),
(7, 'MKT'),
(7, 'PAT'),
(7, 'PMT'),
(7, 'REK'),
(7, 'SLS'),
(7, 'SUPP'),
(7, 'TRX'),
(7, 'USR'),
(8, 'ACC'),
(8, 'BNK'),
(8, 'BRC'),
(8, 'COA'),
(8, 'CURR'),
(8, 'CUST'),
(8, 'DEPT'),
(8, 'FIN'),
(8, 'GA'),
(8, 'GD'),
(8, 'INVT'),
(8, 'LOC'),
(8, 'LOG'),
(8, 'MKT'),
(8, 'PAT'),
(8, 'PMT'),
(8, 'REK'),
(8, 'SLS'),
(8, 'SUPP'),
(8, 'TRX'),
(8, 'USR'),
(9, 'ACC'),
(9, 'BNK'),
(9, 'BRC'),
(9, 'COA'),
(9, 'CURR'),
(9, 'CUST'),
(9, 'DEPT'),
(9, 'FIN'),
(9, 'GA'),
(9, 'GD'),
(9, 'INVT'),
(9, 'LOC'),
(9, 'LOG'),
(9, 'MKT'),
(9, 'PAT'),
(9, 'PMT'),
(9, 'REK'),
(9, 'SLS'),
(9, 'SUPP'),
(9, 'TRX'),
(9, 'USR'),
(10, 'ACC'),
(10, 'BNK'),
(10, 'BRC'),
(10, 'COA'),
(10, 'CURR'),
(10, 'CUST'),
(10, 'DEPT'),
(10, 'FIN'),
(10, 'GA'),
(10, 'GD'),
(10, 'INVT'),
(10, 'LOC'),
(10, 'LOG'),
(10, 'MKT'),
(10, 'PAT'),
(10, 'PMT'),
(10, 'REK'),
(10, 'SLS'),
(10, 'SUPP'),
(10, 'TRX'),
(10, 'USR');

-- --------------------------------------------------------

--
-- Table structure for table `his_adj`
--

CREATE TABLE `his_adj` (
  `HISADJ_ID` int(11) NOT NULL,
  `ADJ_ID` int(11) DEFAULT NULL,
  `HISADJ_STS` char(50) DEFAULT NULL,
  `HISADJ_OLD` char(50) DEFAULT NULL,
  `HISADJ_NEW` char(50) DEFAULT NULL,
  `HISADJ_INFO` char(200) DEFAULT NULL,
  `HISADJ_DATE` date DEFAULT NULL,
  `HISADJ_UPCOUNT` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_adj`
--

INSERT INTO `his_adj` (`HISADJ_ID`, `ADJ_ID`, `HISADJ_STS`, `HISADJ_OLD`, `HISADJ_NEW`, `HISADJ_INFO`, `HISADJ_DATE`, `HISADJ_UPCOUNT`) VALUES
(1, 1, 'Void By System', 'None', 'None', 'Create By System', '2021-04-10', '0');

-- --------------------------------------------------------

--
-- Table structure for table `his_adjga`
--

CREATE TABLE `his_adjga` (
  `HISADJGA_ID` int(11) NOT NULL,
  `ADJGA_ID` int(11) DEFAULT NULL,
  `HISADJGA_STS` char(50) DEFAULT NULL,
  `HISADJGA_OLD` char(50) DEFAULT NULL,
  `HISADJGA_NEW` char(50) DEFAULT NULL,
  `HISADJGA_INFO` char(200) DEFAULT NULL,
  `HISADJGA_DATE` date DEFAULT NULL,
  `HISADJGA_UPCOUNT` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `his_approvalbill`
--

CREATE TABLE `his_approvalbill` (
  `HISAPPR_ID` int(11) NOT NULL,
  `APPR_ID` int(11) DEFAULT NULL,
  `HISAPPR_STS` char(30) DEFAULT NULL,
  `HISAPPR_OLD` char(30) DEFAULT NULL,
  `HISAPPR_NEW` char(30) DEFAULT NULL,
  `HISAPPR_INFO` varchar(1024) DEFAULT NULL,
  `HISAPPR_DATE` date DEFAULT NULL,
  `HISAPPR_TIME` time DEFAULT NULL,
  `HISAPPR_UPCOUNT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_approvalbill`
--

INSERT INTO `his_approvalbill` (`HISAPPR_ID`, `APPR_ID`, `HISAPPR_STS`, `HISAPPR_OLD`, `HISAPPR_NEW`, `HISAPPR_INFO`, `HISAPPR_DATE`, `HISAPPR_TIME`, `HISAPPR_UPCOUNT`) VALUES
(1, 1, 'Void By System', 'None', 'None', 'Create By System', '2018-09-18', '09:58:31', 0),
(7, 1, 'Posted by User super', 'Void By System', 'Posted By User super', 'Original Save by approval form', '2018-09-18', '14:10:55', 1),
(9, 1, 'Approve by User super', 'Posted by User super', 'Approve By User super', 'Update by super from approval form', '2018-09-18', '14:16:13', 1),
(10, 1, 'Open by User super', 'Posted by User super', 'Open By User super', 'Open Record by appr form', '2018-09-18', '14:18:36', 2),
(11, 1, 'Posted by User super', 'Open by User super', 'Posted By User super', 'Update by super from approval form', '2018-09-18', '14:18:44', 2),
(12, 1, 'Disapprove by User super', 'Open by User super', 'Disapprove By User super', 'Update by super from approval form', '2018-09-18', '14:18:55', 2),
(13, 1, 'Posted by User super', 'Open by User super', 'Posted By User super', 'Update by super from approval form', '2018-09-18', '14:19:26', 2),
(14, 1, 'Approve by User super', 'Open by User super', 'Approve By User super', 'Update by super from approval form', '2018-09-18', '14:19:38', 2),
(15, 2, 'Void By System', 'None', 'None', 'Create By System', '2018-09-20', '11:14:25', 0),
(16, 2, 'Posted by User opw', 'Void By System', 'Posted By User opw', 'Original Save by approval form', '2018-09-20', '11:16:15', 1),
(17, 2, 'Approved by User superw', 'Posted by User opw', 'Approved By User superw', 'Update by superw from approval form', '2018-09-20', '11:17:04', 1),
(18, 3, 'Void By System', 'None', 'None', 'Create By System', '2018-09-26', '13:14:33', 0),
(19, 3, 'Posted by User opm', 'Void By System', 'Posted By User opm', 'Original Save by approval form', '2018-09-26', '13:15:48', 1),
(20, 3, 'Approved by User superm', 'Posted by User opm', 'Approved By User superm', 'Update by superm from approval form', '2018-09-26', '13:22:39', 1),
(21, 4, 'Void By System', 'None', 'None', 'Create By System', '2018-09-26', '14:59:12', 0),
(22, 4, 'Posted by User opm', 'Void By System', 'Posted By User opm', 'Original Save by approval form', '2018-09-26', '15:04:48', 1),
(23, 4, 'Disapproved by User superm', 'Posted by User opm', 'Disapproved By User superm', 'Update by superm from approval form', '2018-09-26', '15:12:54', 1),
(24, 4, 'Posted by User opm', 'Posted by User opm', 'Posted By User opm', 'Update by opm from approval form', '2018-09-26', '15:16:29', 1),
(25, 4, 'Approved by User superm', 'Posted by User opm', 'Approved By User superm', 'Update by superm from approval form', '2018-09-26', '15:16:46', 1),
(26, 5, 'Void By System', 'None', 'None', 'Create By System', '2018-09-28', '16:01:37', 0),
(27, 5, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by approval form', '2018-09-30', '02:48:34', 1),
(28, 5, 'Approved by User superm', 'Posted by User superm', 'Approved By User superm', 'Update by superm from approval form', '2018-09-30', '03:34:45', 1),
(29, 6, 'Void By System', 'None', 'None', 'Create By System', '2018-10-01', '17:00:47', 0),
(30, 7, 'Void By System', 'None', 'None', 'Create By System', '2018-10-02', '14:13:44', 0),
(31, 7, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by approval form', '2018-10-02', '14:21:34', 1),
(32, 7, 'Disapproved by User superm', 'Posted by User superm', 'Disapproved By User superm', 'Update by superm from approval form', '2018-10-02', '14:30:39', 1),
(33, 7, 'Posted by User superm', 'Posted by User superm', 'Posted By User superm', 'Update by superm from approval form', '2018-10-02', '14:31:13', 1),
(34, 7, 'Disapproved by User superm', 'Posted by User superm', 'Disapproved By User superm', 'Update by superm from approval form', '2018-10-02', '14:31:49', 1),
(35, 7, 'Posted by User superm', 'Posted by User superm', 'Posted By User superm', 'Update by superm from approval form', '2018-10-02', '14:34:14', 1),
(36, 8, 'Void By System', 'None', 'None', 'Create By System', '2018-10-16', '14:25:35', 0),
(37, 8, 'Posted by User superwpi', 'Void By System', 'Posted By User superwpi', 'Original Save by approval form', '2018-10-16', '14:27:05', 1),
(38, 8, 'Approved by User superwpi', 'Posted by User superwpi', 'Approved By User superwpi', 'Update by superwpi from approval form', '2018-10-16', '14:34:33', 1),
(39, 9, 'Void By System', 'None', 'None', 'Create By System', '2018-11-05', '16:27:04', 0),
(40, 9, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by approval form', '2018-11-05', '16:27:41', 1),
(41, 10, 'Void By System', 'None', 'None', 'Create By System', '2018-11-05', '16:39:47', 0),
(42, 10, 'Posted by User superwpi', 'Void By System', 'Posted By User superwpi', 'Original Save by approval form', '2018-11-05', '16:49:21', 1),
(43, 10, 'Approved by User superwpi', 'Posted by User superwpi', 'Approved By User superwpi', 'Update by superwpi from approval form', '2018-11-05', '16:51:24', 1),
(44, 11, 'Void By System', 'None', 'None', 'Create By System', '2018-12-03', '16:20:57', 0),
(45, 11, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by approval form', '2018-12-03', '16:27:39', 1),
(46, 11, 'Approved by User superm', 'Posted by User superm', 'Approved By User superm', 'Update by superm from approval form', '2018-12-04', '14:47:00', 1),
(47, 11, 'Open by User superm', 'Posted by User superm', 'Open By User superm', 'Open Record by appr form', '2018-12-04', '14:47:25', 2),
(48, 11, 'Posted by User superm', 'Open by User superm', 'Posted By User superm', 'Update by superm from approval form', '2018-12-04', '14:48:03', 2),
(49, 11, 'Approved by User superm', 'Open by User superm', 'Approved By User superm', 'Update by superm from approval form', '2018-12-04', '14:48:16', 2),
(50, 12, 'Void By System', 'None', 'None', 'Create By System', '2018-12-14', '14:37:17', 0),
(51, 12, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by approval form', '2018-12-14', '14:38:37', 1),
(52, 12, 'Approved by User superm', 'Posted by User superm', 'Approved By User superm', 'Update by superm from approval form', '2018-12-14', '14:39:08', 1),
(53, 12, 'Open by User', 'Posted by User superm', 'Open By User', 'Open Record by appr form. tes batal posting', '2018-12-14', '14:39:59', 2),
(54, 12, 'Posted by User superm', 'Open by User', 'Posted By User superm', 'Update by superm from approval form', '2018-12-20', '09:15:12', 2),
(55, 6, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by approval form', '2019-01-08', '11:23:25', 1),
(56, 13, 'Void By System', 'None', 'None', 'Create By System', '2019-02-26', '16:48:45', 0),
(57, 13, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by approval form', '2019-02-26', '16:54:39', 1),
(58, 13, 'Disapproved by User superw', 'Posted by User superw', 'Disapproved By User superw', 'Update by superw from approval form', '2019-02-26', '17:29:04', 1),
(59, 13, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-02-26', '17:30:49', 1),
(60, 13, 'Disapproved by User superw', 'Posted by User superw', 'Disapproved By User superw', 'Update by superw from approval form', '2019-02-27', '08:31:12', 1),
(61, 13, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-02-27', '08:31:30', 1),
(62, 14, 'Void By System', 'None', 'None', 'Create By System', '2019-02-27', '10:38:59', 0),
(63, 14, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by approval form', '2019-02-27', '10:41:15', 1),
(64, 13, 'Approved by User superw', 'Posted by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-03-11', '12:09:17', 1),
(65, 14, 'Approved by User superw', 'Posted by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-04-04', '13:44:49', 1),
(66, 15, 'Void By System', 'None', 'None', 'Create By System', '2019-04-26', '13:24:36', 0),
(67, 16, 'Void By System', 'None', 'None', 'Create By System', '2019-05-06', '09:11:31', 0),
(68, 16, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by approval form', '2019-05-06', '09:22:43', 1),
(69, 16, 'Approved by User superw', 'Posted by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-05-06', '09:32:58', 1),
(70, 17, 'Void By System', 'None', 'None', 'Create By System', '2019-05-06', '09:44:01', 0),
(71, 17, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by approval form', '2019-05-06', '09:45:41', 1),
(72, 17, 'Approved by User superw', 'Posted by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-05-06', '09:46:39', 1),
(73, 18, 'Void By System', 'None', 'None', 'Create By System', '2019-05-06', '09:48:33', 0),
(74, 18, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by approval form', '2019-05-06', '09:50:22', 1),
(75, 18, 'Approved by User superw', 'Posted by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-05-06', '09:51:20', 1),
(76, 19, 'Void By System', 'None', 'None', 'Create By System', '2019-05-06', '09:51:25', 0),
(77, 19, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by approval form', '2019-05-06', '10:20:02', 1),
(78, 19, 'Approved by User superw', 'Posted by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-05-06', '10:37:44', 1),
(79, 20, 'Void By System', 'None', 'None', 'Create By System', '2019-05-06', '10:38:17', 0),
(80, 20, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by approval form', '2019-05-06', '10:39:25', 1),
(81, 20, 'Approved by User superw', 'Posted by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-05-06', '10:41:12', 1),
(82, 16, 'Open by User superw', 'Posted by User superw', 'Open By User superw', 'Open Record by appr form. ', '2019-05-06', '12:11:37', 2),
(83, 17, 'Open by User superw', 'Posted by User superw', 'Open By User superw', 'Open Record by appr form. ', '2019-05-06', '12:11:45', 2),
(84, 18, 'Open by User superw', 'Posted by User superw', 'Open By User superw', 'Open Record by appr form. ', '2019-05-06', '12:11:51', 2),
(85, 16, 'Posted by User superw', 'Open by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-05-06', '12:35:54', 2),
(86, 16, 'Approved by User superw', 'Open by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-05-06', '12:36:12', 2),
(87, 17, 'Posted by User superw', 'Open by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-05-06', '12:43:18', 2),
(88, 17, 'Approved by User superw', 'Open by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-05-06', '12:43:31', 2),
(89, 18, 'Posted by User superw', 'Open by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-05-06', '12:45:13', 2),
(90, 18, 'Approved by User superw', 'Open by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-05-06', '12:45:23', 2),
(91, 21, 'Void By System', 'None', 'None', 'Create By System', '2019-05-22', '12:26:02', 0),
(92, 21, 'Posted by User superrcp', 'Void By System', 'Posted By User superrcp', 'Original Save by approval form', '2019-05-22', '12:33:13', 1),
(93, 21, 'Approved by User superrcp', 'Posted by User superrcp', 'Approved By User superrcp', 'Update by superrcp from approval form', '2019-05-22', '12:33:37', 1),
(94, 22, 'Void By System', 'None', 'None', 'Create By System', '2019-05-29', '08:39:55', 0),
(95, 19, 'Open by User superw', 'Posted by User superw', 'Open By User superw', 'Open Record by appr form. ', '2019-05-29', '08:40:23', 2),
(96, 19, 'Posted by User superw', 'Open by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-05-29', '08:42:33', 2),
(97, 19, 'Approved by User superw', 'Open by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-05-29', '08:43:39', 2),
(98, 23, 'Void By System', 'None', 'None', 'Create By System', '2019-07-09', '10:57:04', 0),
(99, 23, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by approval form', '2019-07-09', '11:29:11', 1),
(100, 23, 'Disapproved by User superw', 'Posted by User superw', 'Disapproved By User superw', 'Update by superw from approval form', '2019-07-11', '09:07:07', 1),
(101, 23, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-07-11', '09:07:18', 1),
(102, 23, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-07-11', '09:09:22', 1),
(103, 23, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-07-11', '09:09:53', 1),
(104, 24, 'Void By System', 'None', 'None', 'Create By System', '2019-07-11', '09:12:24', 0),
(105, 24, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by approval form', '2019-07-11', '09:14:53', 1),
(106, 24, 'Disapproved by User superw', 'Posted by User superw', 'Disapproved By User superw', 'Update by superw from approval form', '2019-07-11', '09:55:14', 1),
(107, 24, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-07-11', '10:12:55', 1),
(108, 24, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-07-11', '10:13:27', 1),
(109, 23, 'Approved by User superw', 'Posted by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-07-12', '09:00:59', 1),
(110, 24, 'Approved by User superw', 'Posted by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-07-23', '09:01:00', 1),
(111, 25, 'Void By System', 'None', 'None', 'Create By System', '2019-07-30', '08:59:42', 0),
(112, 25, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by approval form', '2019-07-30', '11:24:17', 1),
(113, 25, 'Approved by User superw', 'Posted by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-07-30', '12:13:50', 1),
(114, 26, 'Void By System', 'None', 'None', 'Create By System', '2019-08-07', '10:59:09', 0),
(115, 26, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by approval form', '2019-08-07', '11:01:56', 1),
(116, 26, 'Approved by User superw', 'Posted by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-08-12', '08:25:36', 1),
(117, 27, 'Void By System', 'None', 'None', 'Create By System', '2019-08-13', '15:55:46', 0),
(118, 27, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by approval form', '2019-08-13', '16:00:20', 1),
(119, 27, 'Approved by User superw', 'Posted by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-08-13', '16:01:09', 1),
(120, 27, 'Open by User superw', 'Posted by User superw', 'Open By User superw', 'Open Record by appr form. ', '2019-08-13', '16:02:33', 2),
(121, 27, 'Posted by User superw', 'Open by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-08-13', '16:03:07', 2),
(122, 27, 'Approved by User superw', 'Open by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-08-13', '16:03:15', 2),
(123, 27, 'Open by User superw', 'Open by User superw', 'Open By User superw', 'Open Record by appr form. ', '2019-08-13', '16:20:58', 3),
(124, 27, 'Posted by User superw', 'Open by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-08-13', '16:21:34', 3),
(125, 27, 'Posted by User superw', 'Open by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-08-13', '16:21:56', 3),
(126, 27, 'Disapproved by User superw', 'Open by User superw', 'Disapproved By User superw', 'Update by superw from approval form', '2019-08-14', '08:24:22', 3),
(127, 27, 'Posted by User superw', 'Open by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-08-14', '08:24:48', 3),
(128, 27, 'Posted by User superw', 'Open by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-08-14', '08:31:01', 3),
(129, 25, 'Open by User superw', 'Posted by User superw', 'Open By User superw', 'Open Record by appr form. ', '2019-08-14', '08:35:46', 2),
(130, 25, 'Posted by User superw', 'Open by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-08-14', '08:36:29', 2),
(131, 25, 'Disapproved by User superw', 'Open by User superw', 'Disapproved By User superw', 'Update by superw from approval form', '2019-08-14', '08:54:33', 2),
(132, 25, 'Posted by User superw', 'Open by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-08-14', '08:54:49', 2),
(133, 25, 'Approved by User superw', 'Open by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-08-14', '08:55:06', 2),
(134, 27, 'Approved by User superw', 'Open by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-08-14', '12:22:42', 3),
(135, 25, 'Open by User superw', 'Open by User superw', 'Open By User superw', 'Open Record by appr form. ', '2019-08-14', '16:58:45', 3),
(136, 25, 'Posted by User superw', 'Open by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-08-14', '16:59:34', 3),
(137, 25, 'Posted by User superw', 'Open by User superw', 'Posted By User superw', 'Update by superw from approval form', '2019-08-14', '17:01:52', 3),
(138, 25, 'Approved by User superw', 'Open by User superw', 'Approved By User superw', 'Update by superw from approval form', '2019-08-14', '17:03:27', 3);

-- --------------------------------------------------------

--
-- Table structure for table `his_bankin`
--

CREATE TABLE `his_bankin` (
  `HISBNK_ID` int(11) NOT NULL,
  `BNK_ID` int(11) DEFAULT NULL,
  `HISBNK_STS` char(50) DEFAULT NULL,
  `HISBNK_OLD` char(50) DEFAULT NULL,
  `HISBNK_NEW` char(50) DEFAULT NULL,
  `HISBNK_INFO` char(200) DEFAULT NULL,
  `HISBNK_DATE` date DEFAULT NULL,
  `HISBNK_TIME` time DEFAULT NULL,
  `HISBNK_UPCOUNT` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_bankin`
--

INSERT INTO `his_bankin` (`HISBNK_ID`, `BNK_ID`, `HISBNK_STS`, `HISBNK_OLD`, `HISBNK_NEW`, `HISBNK_INFO`, `HISBNK_DATE`, `HISBNK_TIME`, `HISBNK_UPCOUNT`) VALUES
(1, 1, 'Void By System', 'None', 'None', 'Create By System', '2018-10-01', '10:14:13', '0'),
(2, 1, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by Bank In form', '2018-10-01', '10:24:50', '1'),
(3, 1, 'Approved by User superm', 'Posted by User superm', 'Approved By User superm', 'Update by superm from Bank In form', '2018-10-01', '10:36:47', '1'),
(4, 2, 'Void By System', 'None', 'None', 'Create By System', '2018-10-03', '16:01:35', '0'),
(5, 2, 'Posted by User kaisha', 'Void By System', 'Posted By User kaisha', 'Original Save by Bank In form', '2018-10-03', '16:02:27', '1'),
(6, 2, 'Approved by User kaisha', 'Posted by User kaisha', 'Approved By User kaisha', 'Update by kaisha from Bank In form', '2018-10-03', '16:02:35', '1'),
(7, 2, 'Open by User kaisha', 'Posted by User kaisha', 'Open By User kaisha', 'Open Record by Bank Masuk form', '2018-10-03', '16:03:48', '2'),
(8, 2, 'Posted by User kaisha', 'Open by User kaisha', 'Posted By User kaisha', 'Update by kaisha from Bank In form', '2018-10-04', '08:44:26', '2'),
(9, 2, 'Approved by User kaisha', 'Open by User kaisha', 'Approved By User kaisha', 'Update by kaisha from Bank In form', '2018-10-04', '08:44:40', '2'),
(10, 3, 'Void By System', 'None', 'None', 'Create By System', '2018-10-18', '10:27:41', '0'),
(11, 3, 'Posted by User kaisha', 'Void By System', 'Posted By User kaisha', 'Original Save by Bank In form', '2018-10-18', '10:29:15', '1'),
(12, 3, 'Approved by User kaisha', 'Posted by User kaisha', 'Approved By User kaisha', 'Update by kaisha from Bank In form', '2018-10-18', '10:29:22', '1'),
(13, 3, 'Open by User kaisha', 'Posted by User kaisha', 'Open By User kaisha', 'Open Record by Bank Masuk form', '2018-10-18', '10:42:59', '2'),
(14, 3, 'Posted by User kaisha', 'Open by User kaisha', 'Posted By User kaisha', 'Update by kaisha from Bank In form', '2018-10-18', '10:43:36', '2'),
(15, 3, 'Approved by User kaisha', 'Open by User kaisha', 'Approved By User kaisha', 'Update by kaisha from Bank In form', '2018-10-18', '10:43:44', '2'),
(16, 4, 'Void By System', 'None', 'None', 'Create By System', '2019-01-03', '15:18:31', '0'),
(17, 4, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by Bank In form', '2019-01-03', '15:19:27', '1'),
(18, 5, 'Void By System', 'None', 'None', 'Create By System', '2021-04-10', '06:29:52', '0');

-- --------------------------------------------------------

--
-- Table structure for table `his_bankout`
--

CREATE TABLE `his_bankout` (
  `HISBNKO_ID` int(11) NOT NULL,
  `BNKO_ID` int(11) DEFAULT NULL,
  `HISBNKO_STS` char(50) DEFAULT NULL,
  `HISBNKO_OLD` char(50) DEFAULT NULL,
  `HISBNKO_NEW` char(50) DEFAULT NULL,
  `HISBNKO_INFO` char(200) DEFAULT NULL,
  `HISBNKO_DATE` date DEFAULT NULL,
  `HISBNKO_TIME` time DEFAULT NULL,
  `HISBNKO_UPCOUNT` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_bankout`
--

INSERT INTO `his_bankout` (`HISBNKO_ID`, `BNKO_ID`, `HISBNKO_STS`, `HISBNKO_OLD`, `HISBNKO_NEW`, `HISBNKO_INFO`, `HISBNKO_DATE`, `HISBNKO_TIME`, `HISBNKO_UPCOUNT`) VALUES
(1, 1, 'Void By System', 'None', 'None', 'Create By System', '2018-10-02', NULL, '0'),
(2, 2, 'Void By System', 'None', 'None', 'Create By System', '2018-10-03', '14:07:11', '0'),
(3, 2, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by Bank Out form', '2018-10-03', '14:09:44', '1'),
(4, 2, 'Disapproved by User superm', 'Posted by User superm', 'Disapproved By User superm', 'Update by superm from Bank Out form', '2018-10-03', '14:12:17', '1'),
(5, 2, 'Posted by User superm', 'Posted by User superm', 'Posted By User superm', 'Update by superm from Bank Out form', '2018-10-03', '14:12:25', '1'),
(6, 2, 'Approved by User superm', 'Posted by User superm', 'Approved By User superm', 'Update by superm from Bank Out form', '2018-10-03', '14:12:33', '1'),
(7, 3, 'Void By System', 'None', 'None', 'Create By System', '2018-10-04', '09:44:20', '0'),
(8, 3, 'Posted by User kaisha', 'Void By System', 'Posted By User kaisha', 'Original Save by Bank Out form', '2018-10-04', '09:52:49', '1'),
(9, 3, 'Approved by User kaisha', 'Posted by User kaisha', 'Approved By User kaisha', 'Update by kaisha from Bank Out form', '2018-10-04', '09:52:56', '1'),
(10, 4, 'Void By System', 'None', 'None', 'Create By System', '2018-10-18', '11:24:11', '0'),
(11, 4, 'Posted by User kaisha', 'Void By System', 'Posted By User kaisha', 'Original Save by Bank Out form', '2018-10-18', '11:27:22', '1'),
(12, 4, 'Approved by User kaisha', 'Posted by User kaisha', 'Approved By User kaisha', 'Update by kaisha from Bank Out form', '2018-10-18', '11:27:29', '1'),
(13, 5, 'Void By System', 'None', 'None', 'Create By System', '2018-12-27', '11:36:10', '0'),
(14, 6, 'Void By System', 'None', 'None', 'Create By System', '2019-01-04', '13:28:45', '0'),
(15, 6, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by Bank Out form', '2019-01-04', '13:40:28', '1'),
(16, 6, 'Posted by User superm', 'Posted by User superm', 'Posted By User superm', 'Update by superm from Bank Out form', '2019-01-04', '13:44:28', '1');

-- --------------------------------------------------------

--
-- Table structure for table `his_bapp`
--

CREATE TABLE `his_bapp` (
  `HISBAPP_ID` int(11) NOT NULL,
  `BAPP_ID` int(11) DEFAULT NULL,
  `HISBAPP_STS` char(30) DEFAULT NULL,
  `HISBAPP_OLD` char(30) DEFAULT NULL,
  `HISBAPP_NEW` char(30) DEFAULT NULL,
  `HISBAPP_INFO` varchar(1024) DEFAULT NULL,
  `HISBAPP_DATE` date DEFAULT NULL,
  `HISBAPP_TIME` time DEFAULT NULL,
  `HISBAPP_UPCOUNT` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_bapp`
--

INSERT INTO `his_bapp` (`HISBAPP_ID`, `BAPP_ID`, `HISBAPP_STS`, `HISBAPP_OLD`, `HISBAPP_NEW`, `HISBAPP_INFO`, `HISBAPP_DATE`, `HISBAPP_TIME`, `HISBAPP_UPCOUNT`) VALUES
(1, 1, 'Void By System', 'None', 'None', 'Create By System', '2018-09-18', '15:14:57', '0'),
(2, 1, 'Posted by User op', 'Void By System', 'Posted By User op', 'Original Save by BAPP form', '2018-09-18', '15:16:00', '1'),
(3, 1, 'Approved by User super', 'Posted by User op', 'Approved By User super', 'Update by super from BAPP form', '2018-09-18', '15:59:27', '1'),
(4, 1, 'Open by User super', 'Posted by User op', 'Open By User super', 'Open Record by BAPP form', '2018-09-18', '15:59:40', '2'),
(5, 1, 'Posted by User super', 'Open by User super', 'Posted By User super', 'Update by super from BAPP form', '2018-09-18', '15:59:53', '2'),
(6, 1, 'Disapproved by User super', 'Open by User super', 'Disapproved By User super', 'Update by super from BAPP form', '2018-09-18', '16:00:11', '2'),
(7, 1, 'Posted by User super', 'Open by User super', 'Posted By User super', 'Update by super from BAPP form', '2018-09-18', '16:01:14', '2'),
(8, 1, 'Approved by User super', 'Open by User super', 'Approved By User super', 'Update by super from BAPP form', '2018-09-18', '16:01:21', '2'),
(9, 2, 'Void By System', 'None', 'None', 'Create By System', '2018-10-24', '08:40:26', '0'),
(10, 2, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by BAPP form', '2018-10-24', '08:40:43', '1'),
(11, 2, 'Approved by User superm', 'Posted by User superm', 'Approved By User superm', 'Update by superm from BAPP form', '2018-10-24', '08:41:20', '1'),
(12, 1, 'Open by User kaisha', 'Open by User super', 'Open By User kaisha', 'Open Record by BAPP form', '2018-10-24', '10:05:55', '3'),
(13, 2, 'Open by User superm', 'Posted by User superm', 'Open By User superm', 'Open Record by BAPP form', '2018-12-14', '15:11:41', '2'),
(14, 2, 'Posted by User superm', 'Open by User superm', 'Posted By User superm', 'Update by superm from BAPP form', '2018-12-14', '15:11:51', '2'),
(15, 2, 'Approved by User superm', 'Open by User superm', 'Approved By User superm', 'Update by superm from BAPP form', '2018-12-14', '15:11:59', '2'),
(16, 2, 'Open by User superm', 'Open by User superm', 'Open By User superm', 'Open Record by BAPP form', '2018-12-14', '15:12:04', '3'),
(17, 2, 'Posted by User superm', 'Open by User superm', 'Posted By User superm', 'Update by superm from BAPP form', '2018-12-14', '15:12:19', '3'),
(18, 2, 'Approved by User superm', 'Open by User superm', 'Approved By User superm', 'Update by superm from BAPP form', '2018-12-14', '15:12:26', '3'),
(19, 2, 'Open by User', 'Open by User superm', 'Open By User', 'Open Record by BAPP form', '2018-12-14', '15:30:40', '4'),
(20, 2, 'Posted by User superm', 'Open by User', 'Posted By User superm', 'Update by superm from BAPP form', '2018-12-14', '15:42:35', '4'),
(21, 2, 'Approved by User superm', 'Open by User', 'Approved By User superm', 'Update by superm from BAPP form', '2018-12-14', '15:42:53', '4'),
(22, 2, 'Open by User', 'Open by User', 'Open By User', 'Open Record by BAPP form. xxxxxxxc', '2018-12-14', '15:57:57', '5'),
(23, 3, 'Void By System', 'None', 'None', 'Create By System', '2019-03-11', '12:09:33', '0'),
(24, 3, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by BAPP form', '2019-03-11', '12:09:53', '1'),
(25, 3, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from BAPP form', '2019-03-11', '12:10:22', '1'),
(26, 3, 'Approved by User superw', 'Posted by User superw', 'Approved By User superw', 'Update by superw from BAPP form', '2019-03-11', '13:12:45', '1'),
(27, 3, 'Open by User', 'Posted by User superw', 'Open By User', 'Open Record by BAPP form. a', '2019-03-11', '13:12:55', '2'),
(28, 3, 'Posted by User superw', 'Open by User', 'Posted By User superw', 'Update by superw from BAPP form', '2019-03-11', '13:15:19', '2'),
(29, 3, 'Disapproved by User superw', 'Open by User', 'Disapproved By User superw', 'Update by superw from BAPP form', '2019-03-12', '13:27:29', '2'),
(30, 4, 'Void By System', 'None', 'None', 'Create By System', '2019-04-04', '13:39:06', '0'),
(31, 5, 'Void By System', 'None', 'None', 'Create By System', '2019-04-04', '13:40:31', '0'),
(32, 5, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by BAPP form', '2019-04-04', '13:45:42', '1'),
(33, 5, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from BAPP form', '2019-04-04', '14:04:07', '1'),
(34, 5, 'Disapproved by User superw', 'Posted by User superw', 'Disapproved By User superw', 'Update by superw from BAPP form', '2019-04-05', '08:52:36', '1'),
(35, 5, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from BAPP form', '2019-04-09', '15:00:29', '1'),
(36, 6, 'Void By System', 'None', 'None', 'Create By System', '2019-05-14', '09:24:32', '0'),
(37, 6, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by BAPP form', '2019-05-14', '09:26:12', '1'),
(38, 7, 'Void By System', 'None', 'None', 'Create By System', '2019-05-14', '09:34:07', '0'),
(39, 7, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by BAPP form', '2019-05-14', '09:34:31', '1'),
(40, 8, 'Void By System', 'None', 'None', 'Create By System', '2019-05-14', '09:35:36', '0'),
(41, 8, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by BAPP form', '2019-05-14', '09:35:53', '1'),
(42, 9, 'Void By System', 'None', 'None', 'Create By System', '2019-05-22', '12:33:23', '0'),
(43, 9, 'Posted by User superrcp', 'Void By System', 'Posted By User superrcp', 'Original Save by BAPP form', '2019-05-22', '12:35:06', '1'),
(44, 10, 'Void By System', 'None', 'None', 'Create By System', '2019-07-12', '09:01:04', '0'),
(45, 10, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by BAPP form', '2019-07-12', '09:02:02', '1'),
(46, 10, 'Disapproved by User superw', 'Posted by User superw', 'Disapproved By User superw', 'Update by superw from BAPP form', '2019-07-12', '10:15:01', '1'),
(47, 10, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from BAPP form', '2019-07-12', '10:15:31', '1'),
(48, 10, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from BAPP form', '2019-07-12', '10:16:11', '1'),
(49, 10, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from BAPP form', '2019-07-12', '10:16:29', '1'),
(50, 11, 'Void By System', 'None', 'None', 'Create By System', '2019-07-29', '08:57:55', '0'),
(51, 11, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by BAPP form', '2019-07-29', '08:58:46', '1'),
(52, 12, 'Void By System', 'None', 'None', 'Create By System', '2019-07-30', '13:27:11', '0'),
(53, 12, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by BAPP form', '2019-07-30', '14:04:22', '1'),
(54, 13, 'Void By System', 'None', 'None', 'Create By System', '2019-08-12', '08:25:42', '0'),
(55, 13, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by BAPP form', '2019-08-12', '08:26:42', '1'),
(56, 14, 'Void By System', 'None', 'None', 'Create By System', '2019-08-21', '09:17:30', '0'),
(57, 14, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by BAPP form', '2019-08-21', '09:18:55', '1');

-- --------------------------------------------------------

--
-- Table structure for table `his_bapplog`
--

CREATE TABLE `his_bapplog` (
  `HISBALG_ID` int(11) NOT NULL,
  `BALG_ID` int(11) DEFAULT NULL,
  `HISBALG_STS` char(50) DEFAULT NULL,
  `HISBALG_OLD` char(50) DEFAULT NULL,
  `HISBALG_NEW` char(50) DEFAULT NULL,
  `HISBALG_INFO` char(200) DEFAULT NULL,
  `HISBALG_DATE` date DEFAULT NULL,
  `HISBALG_TIME` time DEFAULT NULL,
  `HISBALG_UPCOUNT` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_bapplog`
--

INSERT INTO `his_bapplog` (`HISBALG_ID`, `BALG_ID`, `HISBALG_STS`, `HISBALG_OLD`, `HISBALG_NEW`, `HISBALG_INFO`, `HISBALG_DATE`, `HISBALG_TIME`, `HISBALG_UPCOUNT`) VALUES
(1, 1, 'Void By System', 'None', 'None', 'Create By System', '2018-10-22', NULL, '0'),
(2, 1, 'Posted by User kaisha', 'Void By System', 'Posted By User kaisha', 'Original Save by BAPP Logistik form', '2018-10-22', '13:35:05', '1'),
(3, 1, 'Disapproved by User kaisha', 'Posted by User kaisha', 'Disapproved By User kaisha', 'Update by kaisha from BAPP Logistik form', '2018-10-22', '15:13:56', '1'),
(4, 1, 'Posted by User kaisha', 'Posted by User kaisha', 'Posted By User kaisha', 'Update by kaisha from BAPP Logistik form', '2018-10-22', '15:14:05', '1'),
(5, 1, 'Approved by User kaisha', 'Posted by User kaisha', 'Approved By User kaisha', 'Update by kaisha from BAPP Logistik form', '2018-10-22', '15:14:12', '1'),
(6, 1, 'Open by User kaisha', 'Posted by User kaisha', 'Open By User kaisha', 'Open Record by BAPP Logistik form', '2018-10-22', '15:15:14', '2'),
(7, 1, 'Posted by User kaisha', 'Open by User kaisha', 'Posted By User kaisha', 'Update by kaisha from BAPP Logistik form', '2018-10-22', '15:15:21', '2'),
(8, 1, 'Approved by User kaisha', 'Open by User kaisha', 'Approved By User kaisha', 'Update by kaisha from BAPP Logistik form', '2018-10-22', '15:15:28', '2'),
(9, 2, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '16:22:20', '0'),
(10, 2, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by BAPP Logistik form', '2018-12-13', '16:23:20', '1'),
(11, 2, 'Disapproved by User superm', 'Posted by User superm', 'Disapproved By User superm', 'Update by superm from BAPP Logistik form', '2018-12-13', '16:23:34', '1');

-- --------------------------------------------------------

--
-- Table structure for table `his_budget`
--

CREATE TABLE `his_budget` (
  `HISBDG_ID` int(11) NOT NULL,
  `BUD_ID` int(11) DEFAULT NULL,
  `HISBDG_STS` char(50) DEFAULT NULL,
  `HISBDG_OLD` char(50) DEFAULT NULL,
  `HISBDG_NEW` char(50) DEFAULT NULL,
  `HISBDG_INFO` char(200) DEFAULT NULL,
  `HISBDG_DATE` date DEFAULT NULL,
  `HISBDG_UPCOUNT` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `his_cashin`
--

CREATE TABLE `his_cashin` (
  `HISCSHIN_ID` int(11) NOT NULL,
  `CSH_ID` int(11) DEFAULT NULL,
  `HISCHIN_STS` char(50) DEFAULT NULL,
  `HISCHIN_OLD` char(50) DEFAULT NULL,
  `HISCHIN_NEW` char(50) DEFAULT NULL,
  `HISCHIN_INFO` char(200) DEFAULT NULL,
  `HISCHIN_DATE` date DEFAULT NULL,
  `HISCHIN_TIME` time DEFAULT NULL,
  `HISCHIN_UPCOUNT` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_cashin`
--

INSERT INTO `his_cashin` (`HISCSHIN_ID`, `CSH_ID`, `HISCHIN_STS`, `HISCHIN_OLD`, `HISCHIN_NEW`, `HISCHIN_INFO`, `HISCHIN_DATE`, `HISCHIN_TIME`, `HISCHIN_UPCOUNT`) VALUES
(1, 1, 'Void By System', 'None', 'None', 'Create By System', '2018-09-26', '13:30:05', '0'),
(2, 1, 'Posted by User opm', 'Void By System', 'Posted By User opm', 'Original Save by Cash In form', '2018-09-26', '13:31:54', '1'),
(3, 1, 'Approved by User superm', 'Posted by User opm', 'Approved By User superm', 'Update by superm from Cash In form', '2018-09-26', '13:32:19', '1'),
(4, 1, 'Open by User superm', 'Posted by User opm', 'Open By User superm', 'Open Record by Cash In form', '2018-09-26', '13:39:01', '2'),
(5, 1, 'Posted by User superm', 'Open by User superm', 'Posted By User superm', 'Update by superm from Cash In form', '2018-09-26', '13:39:37', '2'),
(6, 1, 'Approved by User superm', 'Open by User superm', 'Approved By User superm', 'Update by superm from Cash In form', '2018-09-26', '13:39:43', '2'),
(7, 2, 'Void By System', 'None', 'None', 'Create By System', '2018-10-02', '15:16:07', '0'),
(8, 2, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by Cash In form', '2018-10-02', '15:18:50', '1');

-- --------------------------------------------------------

--
-- Table structure for table `his_cashout`
--

CREATE TABLE `his_cashout` (
  `HISCSHO_ID` int(11) NOT NULL,
  `CSHO_ID` int(11) DEFAULT NULL,
  `HISCSHO_STS` char(50) DEFAULT NULL,
  `HISCSHO_OLD` char(50) DEFAULT NULL,
  `HISCSHO_NEW` char(50) DEFAULT NULL,
  `HISCSHO_INFO` char(200) DEFAULT NULL,
  `HISCSHO_DATE` date DEFAULT NULL,
  `HISCSHO_TIME` time DEFAULT NULL,
  `HISCSHO_UPCOUNT` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_cashout`
--

INSERT INTO `his_cashout` (`HISCSHO_ID`, `CSHO_ID`, `HISCSHO_STS`, `HISCSHO_OLD`, `HISCSHO_NEW`, `HISCSHO_INFO`, `HISCSHO_DATE`, `HISCSHO_TIME`, `HISCSHO_UPCOUNT`) VALUES
(1, 1, 'Void By System', 'None', 'None', 'Create By System', '2018-09-26', '13:39:54', '0'),
(2, 1, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by Cash Out form', '2018-09-26', '13:40:37', '1'),
(3, 1, 'Approved by User superm', 'Posted by User superm', 'Approved By User superm', 'Update by superm from Cash Out form', '2018-09-26', '14:19:01', '1'),
(4, 2, 'Void By System', 'None', 'None', 'Create By System', '2018-10-02', '15:25:46', '0'),
(5, 2, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by Cash Out form', '2018-10-02', '15:28:04', '1'),
(6, 2, 'Approved by User superm', 'Posted by User superm', 'Approved By User superm', 'Update by superm from Cash Out form', '2018-10-02', '15:28:58', '1'),
(7, 3, 'Void By System', 'None', 'None', 'Create By System', '2018-10-25', '11:42:00', '0'),
(8, 3, 'Posted by User kaisha', 'Void By System', 'Posted By User kaisha', 'Original Save by Cash Out form', '2018-10-25', '11:42:57', '1'),
(9, 3, 'Posted by User kaisha', 'Posted by User kaisha', 'Posted By User kaisha', 'Update by kaisha from Cash Out form', '2018-10-25', '11:43:37', '1'),
(10, 4, 'Void By System', 'None', 'None', 'Create By System', '2019-01-04', '13:51:49', '0'),
(11, 4, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by Cash Out form', '2019-01-04', '13:52:34', '1');

-- --------------------------------------------------------

--
-- Table structure for table `his_customer`
--

CREATE TABLE `his_customer` (
  `HISCUST_ID` int(11) NOT NULL,
  `CUST_ID` int(11) DEFAULT NULL,
  `HISCUST_OLDNAME` varchar(500) DEFAULT NULL,
  `HISCUST_NEWNAME` varchar(500) DEFAULT NULL,
  `HISCUST_INFO` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `his_giroin`
--

CREATE TABLE `his_giroin` (
  `HISGRIN_ID` int(11) NOT NULL,
  `GRIN_ID` int(11) DEFAULT NULL,
  `HISGRIN_STS` char(50) DEFAULT NULL,
  `HISGRIN_OLD` char(50) DEFAULT NULL,
  `HISGRIN_NEW` char(50) DEFAULT NULL,
  `HISGRIN_INFO` char(200) DEFAULT NULL,
  `HISGRIN_DATE` date DEFAULT NULL,
  `HISGRIN_TIME` time DEFAULT NULL,
  `HISGRIN_UPCOUNT` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_giroin`
--

INSERT INTO `his_giroin` (`HISGRIN_ID`, `GRIN_ID`, `HISGRIN_STS`, `HISGRIN_OLD`, `HISGRIN_NEW`, `HISGRIN_INFO`, `HISGRIN_DATE`, `HISGRIN_TIME`, `HISGRIN_UPCOUNT`) VALUES
(1, 1, 'Void By System', 'None', 'None', 'Create By System', '2018-10-04', '08:54:06', '0'),
(2, 1, 'Posted by User kaisha', 'Void By System', 'Posted By User kaisha', 'Original Save by Giro In form', '2018-10-04', '09:01:05', '1'),
(3, 1, 'Disapproved by User kaisha', 'Posted by User kaisha', 'Disapproved By User kaisha', 'Update by kaisha from Giro In form', '2018-10-04', '09:07:57', '1'),
(4, 1, 'Posted by User kaisha', 'Posted by User kaisha', 'Posted By User kaisha', 'Update by kaisha from Giro In form', '2018-10-04', '09:08:11', '1'),
(5, 1, 'Approved by User kaisha', 'Posted by User kaisha', 'Approved By User kaisha', 'Update by kaisha from Giro In form', '2018-10-04', '09:08:30', '1'),
(6, 1, 'Open by User kaisha', 'Posted by User kaisha', 'Open By User kaisha', 'Open Record by Giro In form', '2018-10-04', '09:34:29', '2'),
(7, 1, 'Posted by User kaisha', 'Open by User kaisha', 'Posted By User kaisha', 'Update by kaisha from Giro In form', '2018-10-04', '09:42:37', '2'),
(8, 1, 'Approved by User kaisha', 'Open by User kaisha', 'Approved By User kaisha', 'Update by kaisha from Giro In form', '2018-10-04', '09:42:45', '2');

-- --------------------------------------------------------

--
-- Table structure for table `his_giroout`
--

CREATE TABLE `his_giroout` (
  `HISGRO_ID` int(11) NOT NULL,
  `GROUT_ID` int(11) DEFAULT NULL,
  `HISGRO_STS` char(50) DEFAULT NULL,
  `HISGRO_OLD` char(50) DEFAULT NULL,
  `HISGRO_NEW` char(50) DEFAULT NULL,
  `HISGRO_INFO` char(200) DEFAULT NULL,
  `HISGRO_DATE` date DEFAULT NULL,
  `HISGRO_TIME` time DEFAULT NULL,
  `HISGRO_UPCOUNT` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_giroout`
--

INSERT INTO `his_giroout` (`HISGRO_ID`, `GROUT_ID`, `HISGRO_STS`, `HISGRO_OLD`, `HISGRO_NEW`, `HISGRO_INFO`, `HISGRO_DATE`, `HISGRO_TIME`, `HISGRO_UPCOUNT`) VALUES
(1, 1, 'Void By System', 'None', 'None', 'Create By System', '2018-10-04', '13:32:45', '0'),
(2, 1, 'Posted by User kaisha', 'Void By System', 'Posted By User kaisha', 'Original Save by Giro Out form', '2018-10-04', '13:33:50', '1'),
(3, 1, 'Approved by User kaisha', 'Posted by User kaisha', 'Approved By User kaisha', 'Update by kaisha from Giro Out form', '2018-10-04', '13:37:51', '1');

-- --------------------------------------------------------

--
-- Table structure for table `his_inv`
--

CREATE TABLE `his_inv` (
  `HISINV_ID` int(11) NOT NULL,
  `INV_ID` int(11) DEFAULT NULL,
  `HISINV_STS` char(50) DEFAULT NULL,
  `HISINV_OLD` char(50) DEFAULT NULL,
  `HISINV_NEW` char(50) DEFAULT NULL,
  `HISINV_INFO` varchar(1024) DEFAULT NULL,
  `HISINV_DATE` date DEFAULT NULL,
  `HISINV_TIME` time DEFAULT NULL,
  `HISINV_UPCOUNT` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_inv`
--

INSERT INTO `his_inv` (`HISINV_ID`, `INV_ID`, `HISINV_STS`, `HISINV_OLD`, `HISINV_NEW`, `HISINV_INFO`, `HISINV_DATE`, `HISINV_TIME`, `HISINV_UPCOUNT`) VALUES
(1, 1, 'Void By System', 'None', 'None', 'Create By System', '2018-09-20', '16:17:51', '0'),
(2, 1, 'Posted by User opw', 'Void By System', 'Posted By User opw', 'Original Save by Invoice form', '2018-09-20', '16:18:23', '1'),
(3, 1, 'Disapproved by User superw', 'Posted by User opw', 'Disapproved By User superw', 'Update by superw from Invoice form', '2018-09-20', '16:32:36', '1'),
(4, 1, 'Posted by User superw', 'Posted by User opw', 'Posted By User superw', 'Update by superw from Invoice form', '2018-09-20', '16:32:45', '1'),
(5, 1, 'Approved by User superw', 'Posted by User opw', 'Approved By User superw', 'Update by superw from Invoice form', '2018-09-20', '16:48:23', '1'),
(6, 1, 'Open by User superw', 'Posted by User opw', 'Open By User superw', 'Open Record by Invoice form', '2018-09-20', '16:49:56', '2'),
(7, 1, 'Posted by User superw', 'Open by User superw', 'Posted By User superw', 'Update by superw from Invoice form', '2018-09-20', '16:50:27', '2'),
(8, 1, 'Approved by User superw', 'Open by User superw', 'Approved By User superw', 'Update by superw from Invoice form', '2018-09-20', '16:50:38', '2'),
(9, 2, 'Void By System', 'None', 'None', 'Create By System', '2018-09-20', '16:50:56', '0'),
(10, 2, 'Posted by User opw', 'Void By System', 'Posted By User opw', 'Original Save by Invoice form', '2018-09-20', '16:51:35', '1'),
(11, 2, 'Approved by User superw', 'Posted by User opw', 'Approved By User superw', 'Update by superw from Invoice form', '2018-09-20', '16:51:58', '1'),
(12, 3, 'Void By System', 'None', 'None', 'Create By System', '2018-09-26', '13:26:40', '0'),
(13, 3, 'Posted by User opm', 'Void By System', 'Posted By User opm', 'Original Save by Invoice form', '2018-09-26', '13:28:15', '1'),
(14, 4, 'Void By System', 'None', 'None', 'Create By System', '2018-09-26', '13:28:23', '0'),
(15, 4, 'Posted by User opm', 'Void By System', 'Posted By User opm', 'Original Save by Invoice form', '2018-09-26', '13:28:52', '1'),
(16, 4, 'Approved by User superm', 'Posted by User opm', 'Approved By User superm', 'Update by superm from Invoice form', '2018-09-26', '13:29:16', '1'),
(17, 3, 'Approved by User superm', 'Posted by User opm', 'Approved By User superm', 'Update by superm from Invoice form', '2018-09-26', '13:29:26', '1'),
(18, 5, 'Void By System', 'None', 'None', 'Create By System', '2018-09-26', '16:25:25', '0'),
(19, 5, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by Invoice form', '2018-09-26', '16:35:24', '1'),
(20, 5, 'Approved by User superm', 'Posted by User superm', 'Approved By User superm', 'Update by superm from Invoice form', '2018-09-26', '16:35:38', '1'),
(21, 6, 'Void By System', 'None', 'None', 'Create By System', '2018-10-02', '15:09:28', '0'),
(22, 6, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by Invoice form', '2018-10-02', '15:10:16', '1'),
(23, 6, 'Approved by User superm', 'Posted by User superm', 'Approved By User superm', 'Update by superm from Invoice form', '2018-10-02', '15:10:36', '1'),
(24, 7, 'Void By System', 'None', 'None', 'Create By System', '2018-11-05', '16:52:11', '0'),
(25, 8, 'Void By System', 'None', 'None', 'Create By System', '2018-12-04', '15:04:39', '0'),
(26, 8, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by Invoice form', '2018-12-04', '15:09:58', '1'),
(27, 8, 'Approved by User superm', 'Posted by User superm', 'Approved By User superm', 'Update by superm from Invoice form', '2018-12-04', '15:10:06', '1'),
(28, 9, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:21', '0'),
(29, 10, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:28', '0'),
(30, 11, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:29', '0'),
(31, 12, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:30', '0'),
(32, 13, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:30', '0'),
(33, 14, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:30', '0'),
(34, 15, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:31', '0'),
(35, 16, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:33', '0'),
(36, 17, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:33', '0'),
(37, 18, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:34', '0'),
(38, 19, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:34', '0'),
(39, 20, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:35', '0'),
(40, 21, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:36', '0'),
(41, 22, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:36', '0'),
(42, 23, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:38', '0'),
(43, 24, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:39', '0'),
(44, 25, 'Void By System', 'None', 'None', 'Create By System', '2018-12-13', '13:37:39', '0'),
(45, 26, 'Void By System', 'None', 'None', 'Create By System', '2019-03-01', '14:14:27', '0'),
(46, 26, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by Invoice form', '2019-03-01', '14:15:23', '1'),
(47, 26, 'Disapproved by User superw', 'Posted by User superw', 'Disapproved By User superw', 'Update by superw from Invoice form', '2019-03-01', '14:41:34', '1'),
(48, 26, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from Invoice form', '2019-03-01', '14:42:08', '1'),
(49, 26, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from Invoice form', '2019-03-01', '14:46:12', '1'),
(50, 27, 'Void By System', 'None', 'None', 'Create By System', '2019-03-08', '09:02:03', '0'),
(51, 27, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by Invoice form', '2019-03-08', '09:04:49', '1'),
(52, 27, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from Invoice form', '2019-03-08', '09:05:49', '1'),
(53, 28, 'Void By System', 'None', 'None', 'Create By System', '2019-03-11', '09:42:54', '0'),
(54, 28, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by Invoice form', '2019-03-11', '09:43:59', '1'),
(55, 29, 'Void By System', 'None', 'None', 'Create By System', '2019-04-05', '08:32:26', '0'),
(56, 29, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by Invoice form', '2019-04-05', '08:35:26', '1'),
(57, 30, 'Void By System', 'None', 'None', 'Create By System', '2019-04-26', '13:20:20', '0'),
(58, 31, 'Void By System', 'None', 'None', 'Create By System', '2019-05-13', '08:56:40', '0'),
(59, 31, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by Invoice form', '2019-05-13', '09:00:21', '1'),
(60, 32, 'Void By System', 'None', 'None', 'Create By System', '2019-05-13', '09:02:02', '0'),
(61, 32, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by Invoice form', '2019-05-13', '09:02:53', '1'),
(62, 33, 'Void By System', 'None', 'None', 'Create By System', '2019-05-13', '09:03:43', '0'),
(63, 33, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by Invoice form', '2019-05-13', '09:04:14', '1'),
(64, 34, 'Void By System', 'None', 'None', 'Create By System', '2019-07-12', '09:04:48', '0'),
(65, 34, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by Invoice form', '2019-07-12', '09:05:47', '1'),
(66, 35, 'Void By System', 'None', 'None', 'Create By System', '2019-07-12', '09:07:13', '0'),
(67, 35, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by Invoice form', '2019-07-12', '09:07:57', '1'),
(68, 34, 'Disapproved by User superw', 'Posted by User superw', 'Disapproved By User superw', 'Update by superw from Invoice form', '2019-07-12', '10:14:37', '1'),
(69, 35, 'Disapproved by User superw', 'Posted by User superw', 'Disapproved By User superw', 'Update by superw from Invoice form', '2019-07-12', '10:14:43', '1'),
(70, 34, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from Invoice form', '2019-07-12', '10:22:14', '1'),
(71, 35, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from Invoice form', '2019-07-12', '10:24:33', '1'),
(72, 36, 'Void By System', 'None', 'None', 'Create By System', '2019-07-23', '08:59:59', '0'),
(73, 36, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by Invoice form', '2019-07-23', '09:02:11', '1'),
(74, 37, 'Void By System', 'None', 'None', 'Create By System', '2019-07-23', '09:03:28', '0'),
(75, 37, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by Invoice form', '2019-07-23', '09:04:10', '1'),
(76, 38, 'Void By System', 'None', 'None', 'Create By System', '2019-07-30', '12:15:34', '0'),
(77, 38, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by Invoice form', '2019-07-30', '12:16:13', '1'),
(78, 39, 'Void By System', 'None', 'None', 'Create By System', '2019-08-12', '08:47:24', '0'),
(79, 39, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by Invoice form', '2019-08-12', '08:48:13', '1'),
(80, 38, 'Disapproved by User superw', 'Posted by User superw', 'Disapproved By User superw', 'Update by superw from Invoice form', '2019-08-14', '08:33:23', '1'),
(81, 38, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from Invoice form', '2019-08-14', '08:40:41', '1'),
(82, 38, 'Disapproved by User superw', 'Posted by User superw', 'Disapproved By User superw', 'Update by superw from Invoice form', '2019-08-14', '08:54:10', '1'),
(83, 38, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from Invoice form', '2019-08-14', '17:06:14', '1'),
(84, 40, 'Void By System', 'None', 'None', 'Create By System', '2019-08-21', '10:39:11', '0'),
(85, 40, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by Invoice form', '2019-08-21', '10:40:49', '1');

-- --------------------------------------------------------

--
-- Table structure for table `his_pappr`
--

CREATE TABLE `his_pappr` (
  `HISPAPPR_ID` int(11) NOT NULL,
  `PAPPR_ID` int(11) DEFAULT NULL,
  `HISPAPPR_STS` char(50) DEFAULT NULL,
  `HISPAPPR_OLD` char(50) DEFAULT NULL,
  `HISPAPPR_NEW` char(50) DEFAULT NULL,
  `HISPAPPR_INFO` varchar(1024) DEFAULT NULL,
  `HISPAPPR_DATE` date DEFAULT NULL,
  `HISPAPPR_UPCOUNT` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_pappr`
--

INSERT INTO `his_pappr` (`HISPAPPR_ID`, `PAPPR_ID`, `HISPAPPR_STS`, `HISPAPPR_OLD`, `HISPAPPR_NEW`, `HISPAPPR_INFO`, `HISPAPPR_DATE`, `HISPAPPR_UPCOUNT`) VALUES
(1, 1, 'Void By System', 'None', 'None', 'Create By System', '2021-04-10', '0');

-- --------------------------------------------------------

--
-- Table structure for table `his_po`
--

CREATE TABLE `his_po` (
  `HISPO_ID` int(11) NOT NULL,
  `PO_ID` int(11) DEFAULT NULL,
  `HISPO_STS` char(30) DEFAULT NULL,
  `HISPO_OLD` char(30) DEFAULT NULL,
  `HISPO_NEW` char(30) DEFAULT NULL,
  `HISPO_INFO` varchar(1024) DEFAULT NULL,
  `HISPO_DATE` date DEFAULT NULL,
  `HISPO_TIME` time DEFAULT NULL,
  `HISPO_UPCOUNT` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_po`
--

INSERT INTO `his_po` (`HISPO_ID`, `PO_ID`, `HISPO_STS`, `HISPO_OLD`, `HISPO_NEW`, `HISPO_INFO`, `HISPO_DATE`, `HISPO_TIME`, `HISPO_UPCOUNT`) VALUES
(1, 1, 'Void By System', 'None', 'None', 'Create By System', '2018-09-18', '21:11:37', '0'),
(2, 1, 'Posted by User op', 'Void By System', 'Posted By User op', 'Original Save by PO Logistik form', '2018-09-18', '21:12:06', '1'),
(3, 1, 'Approved by User super', 'Posted by User op', 'Approved By User super', 'Update by super from PO Logistik form', '2018-09-18', '21:30:19', '1'),
(4, 1, 'Open by User super', 'Posted by User op', 'Open By User super', 'Open Record by PO Logistik form', '2018-09-18', '21:30:40', '2'),
(5, 1, 'Posted by User super', 'Open by User super', 'Posted By User super', 'Update by super from PO Logistik form', '2018-09-18', '21:30:52', '2'),
(6, 1, 'Disapproved by User super', 'Open by User super', 'Disapproved By User super', 'Update by super from PO Logistik form', '2018-09-18', '21:31:06', '2'),
(7, 1, 'Posted by User super', 'Open by User super', 'Posted By User super', 'Update by super from PO Logistik form', '2018-09-18', '21:31:13', '2'),
(8, 1, 'Approved by User super', 'Open by User super', 'Approved By User super', 'Update by super from PO Logistik form', '2018-09-18', '21:59:03', '2'),
(9, 2, 'Void By System', 'None', 'None', 'Create By System', '2018-09-20', '11:17:31', '0'),
(10, 2, 'Posted by User opw', 'Void By System', 'Posted By User opw', 'Original Save by PO Logistik form', '2018-09-20', '11:18:47', '1'),
(11, 2, 'Approved by User superw', 'Posted by User opw', 'Approved By User superw', 'Update by superw from PO Logistik form', '2018-09-20', '11:31:15', '1'),
(12, 3, 'Void By System', 'None', 'None', 'Create By System', '2018-09-26', '13:23:02', '0'),
(13, 3, 'Posted by User opm', 'Void By System', 'Posted By User opm', 'Original Save by PO Logistik form', '2018-09-26', '13:24:11', '1'),
(14, 3, 'Approved by User superm', 'Posted by User opm', 'Approved By User superm', 'Update by superm from PO Logistik form', '2018-09-26', '13:24:31', '1'),
(15, 4, 'Void By System', 'None', 'None', 'Create By System', '2018-09-26', '16:01:44', '0'),
(16, 4, 'Posted by User opm', 'Void By System', 'Posted By User opm', 'Original Save by PO Logistik form', '2018-09-26', '16:08:00', '1'),
(17, 4, 'Approved by User superm', 'Posted by User opm', 'Approved By User superm', 'Update by superm from PO Logistik form', '2018-09-26', '16:08:47', '1'),
(18, 5, 'Void By System', 'None', 'None', 'Create By System', '2018-10-02', '14:40:09', '0'),
(19, 5, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by PO Logistik form', '2018-10-02', '14:45:55', '1'),
(20, 5, 'Posted by User superm', 'Posted by User superm', 'Posted By User superm', 'Update by superm from PO Logistik form', '2018-10-02', '14:50:00', '1'),
(21, 5, 'Approved by User superm', 'Posted by User superm', 'Approved By User superm', 'Update by superm from PO Logistik form', '2018-10-02', '14:53:56', '1'),
(22, 6, 'Void By System', 'None', 'None', 'Create By System', '2018-10-08', '14:06:42', '0'),
(23, 6, 'Posted by User kaisha', 'Void By System', 'Posted By User kaisha', 'Original Save by PO Logistik form', '2018-10-08', '14:07:03', '1'),
(24, 6, 'Approved by User kaisha', 'Posted by User kaisha', 'Approved By User kaisha', 'Update by kaisha from PO Logistik form', '2018-10-08', '14:07:10', '1'),
(25, 7, 'Void By System', 'None', 'None', 'Create By System', '2018-10-16', '14:34:59', '0'),
(26, 7, 'Posted by User superwpi', 'Void By System', 'Posted By User superwpi', 'Original Save by PO Logistik form', '2018-10-16', '14:37:06', '1'),
(27, 7, 'Approved by User superwpi', 'Posted by User superwpi', 'Approved By User superwpi', 'Update by superwpi from PO Logistik form', '2018-10-16', '14:37:10', '1'),
(28, 8, 'Void By System', 'None', 'None', 'Create By System', '2018-10-16', '14:37:13', '0'),
(29, 8, 'Posted by User superwpi', 'Void By System', 'Posted By User superwpi', 'Original Save by PO Logistik form', '2018-10-16', '14:37:35', '1'),
(30, 8, 'Approved by User superwpi', 'Posted by User superwpi', 'Approved By User superwpi', 'Update by superwpi from PO Logistik form', '2018-10-16', '14:37:40', '1'),
(31, 6, 'Open by User kaisha', 'Posted by User kaisha', 'Open By User kaisha', 'Open Record by PO Logistik form', '2018-11-12', '15:27:50', '2'),
(32, 6, 'Posted by User kaisha', 'Open by User kaisha', 'Posted By User kaisha', 'Update by kaisha from PO Logistik form', '2018-11-12', '15:28:33', '2'),
(33, 6, 'Approved by User kaisha', 'Open by User kaisha', 'Approved By User kaisha', 'Update by kaisha from PO Logistik form', '2018-11-12', '15:28:37', '2'),
(34, 9, 'Void By System', 'None', 'None', 'Create By System', '2018-12-19', '14:22:03', '0'),
(35, 10, 'Void By System', 'None', 'None', 'Create By System', '2019-06-14', '11:29:09', '0'),
(36, 10, 'Posted by User superrcp', 'Void By System', 'Posted By User superrcp', 'Original Save by PO Logistik form', '2019-06-14', '11:31:06', '1'),
(37, 10, 'Approved by User superrcp', 'Posted by User superrcp', 'Approved By User superrcp', 'Update by superrcp from PO Logistik form', '2019-06-14', '11:32:24', '1'),
(38, 11, 'Void By System', 'None', 'None', 'Create By System', '2019-08-08', '13:09:31', '0'),
(39, 11, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by PO Logistik form', '2019-08-08', '13:10:09', '1'),
(40, 12, 'Void By System', 'None', 'None', 'Create By System', '2019-08-13', '16:03:48', '0'),
(41, 12, 'Posted by User superw', 'Void By System', 'Posted By User superw', 'Original Save by PO Logistik form', '2019-08-13', '16:10:02', '1'),
(42, 12, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from PO Logistik form', '2019-08-13', '16:44:47', '1'),
(43, 12, 'Disapproved by User superw', 'Posted by User superw', 'Disapproved By User superw', 'Update by superw from PO Logistik form', '2019-08-14', '08:41:57', '1'),
(44, 12, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from PO Logistik form', '2019-08-14', '08:42:28', '1'),
(45, 12, 'Disapproved by User superw', 'Posted by User superw', 'Disapproved By User superw', 'Update by superw from PO Logistik form', '2019-08-14', '12:20:39', '1'),
(46, 11, 'Disapproved by User superw', 'Posted by User superw', 'Disapproved By User superw', 'Update by superw from PO Logistik form', '2019-08-14', '12:21:12', '1'),
(47, 11, 'Posted by User superw', 'Posted by User superw', 'Posted By User superw', 'Update by superw from PO Logistik form', '2019-08-14', '12:23:51', '1');

-- --------------------------------------------------------

--
-- Table structure for table `his_poga`
--

CREATE TABLE `his_poga` (
  `HISPOGA_ID` int(11) NOT NULL,
  `POGA_ID` int(11) DEFAULT NULL,
  `HISPOGA_STS` char(50) DEFAULT NULL,
  `HISPOGA_OLD` char(50) DEFAULT NULL,
  `HISPOGA_NEW` char(50) DEFAULT NULL,
  `HISPOGA_INFO` char(200) DEFAULT NULL,
  `HISPOGA_DATE` date DEFAULT NULL,
  `HISPOGA_TIME` time DEFAULT NULL,
  `HISPOGA_UPCOUNT` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_poga`
--

INSERT INTO `his_poga` (`HISPOGA_ID`, `POGA_ID`, `HISPOGA_STS`, `HISPOGA_OLD`, `HISPOGA_NEW`, `HISPOGA_INFO`, `HISPOGA_DATE`, `HISPOGA_TIME`, `HISPOGA_UPCOUNT`) VALUES
(1, 1, 'Void By System', 'None', 'None', 'Create By System', '2018-12-19', NULL, '0'),
(2, 1, 'Posted by User kaisha', 'Void By System', 'Posted By User kaisha', 'Original Save by PO GA form', '2018-12-19', NULL, '1'),
(3, 1, 'Open by User kaisha', 'Posted by User kaisha', 'Open By User kaisha', 'Open Record by PO GA form', '2018-12-19', NULL, '2'),
(4, 1, 'Posted by User kaisha', 'Open by User kaisha', 'Posted By User kaisha', 'Update by kaisha from PO GA form', '2018-12-19', NULL, '2'),
(5, 1, 'Open by User kaisha', 'Open by User kaisha', 'Open By User kaisha', 'Open Record by PO GA form', '2018-12-19', NULL, '3'),
(6, 1, 'Posted by User kaisha', 'Open by User kaisha', 'Posted By User kaisha', 'Update by kaisha from PO GA form', '2018-12-19', NULL, '3'),
(7, 1, 'Posted by User kaisha', 'Open by User kaisha', 'Posted By User kaisha', 'Update by kaisha from PO GA form', '2018-12-19', NULL, '3'),
(8, 1, 'Posted by User kaisha', 'Open by User kaisha', 'Posted By User kaisha', 'Update by kaisha from PO GA form', '2018-12-19', NULL, '3'),
(9, 1, 'Posted by User kaisha', 'Open by User kaisha', 'Posted By User kaisha', 'Update by kaisha from PO GA form', '2018-12-19', NULL, '3'),
(10, 1, 'Posted by User kaisha', 'Open by User kaisha', 'Posted By User kaisha', 'Update by kaisha from PO GA form', '2018-12-19', NULL, '3');

-- --------------------------------------------------------

--
-- Table structure for table `his_prc`
--

CREATE TABLE `his_prc` (
  `HISPRC_ID` int(11) NOT NULL,
  `PRC_ID` int(11) DEFAULT NULL,
  `HISPRC_STS` char(30) DEFAULT NULL,
  `HISPRC_OLD` char(30) DEFAULT NULL,
  `HISPRC_NEW` char(30) DEFAULT NULL,
  `HISPRC_INFO` varchar(1024) DEFAULT NULL,
  `HISPRC_DATE` date DEFAULT NULL,
  `HISPRC_TIME` time DEFAULT NULL,
  `HISPRC_UPCOUNT` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_prc`
--

INSERT INTO `his_prc` (`HISPRC_ID`, `PRC_ID`, `HISPRC_STS`, `HISPRC_OLD`, `HISPRC_NEW`, `HISPRC_INFO`, `HISPRC_DATE`, `HISPRC_TIME`, `HISPRC_UPCOUNT`) VALUES
(1, 1, 'Void By System', 'None', 'None', 'Create By System', '2018-09-19', '16:16:06', '0'),
(2, 1, 'Posted by User op', 'Void By System', 'Posted By User op', 'Original Save by Pembelian Logistik form', '2018-09-19', '16:16:40', '1'),
(3, 1, 'Disapproved by User super', 'Posted by User op', 'Disapproved By User super', 'Update by super from Pembelian Logistik form', '2018-09-19', '16:43:16', '1'),
(4, 1, 'Posted by User super', 'Posted by User op', 'Posted By User super', 'Update by super from Pembelian Logistik form', '2018-09-19', '16:43:33', '1'),
(5, 1, 'Approved by User super', 'Posted by User op', 'Approved By User super', 'Update by super from Pembelian Logistik form', '2018-09-19', '16:43:53', '1'),
(6, 1, 'Open by User super', 'Posted by User op', 'Open By User super', 'Open Record by Pembelian Logistik form', '2018-09-19', '16:44:47', '2'),
(7, 1, 'Open by User super', 'Open by User super', 'Open By User super', 'Open Record by Pembelian Logistik form', '2018-09-19', '16:44:53', '3'),
(8, 1, 'Open by User super', 'Open by User super', 'Open By User super', 'Open Record by Pembelian Logistik form', '2018-09-19', '16:46:02', '4'),
(9, 1, 'Posted by User super', 'Open by User super', 'Posted By User super', 'Update by super from Pembelian Logistik form', '2018-09-19', '16:46:15', '4'),
(10, 1, 'Approved by User super', 'Open by User super', 'Approved By User super', 'Update by super from Pembelian Logistik form', '2018-09-19', '16:46:21', '4'),
(11, 2, 'Void By System', 'None', 'None', 'Create By System', '2018-09-20', '11:39:51', '0'),
(12, 2, 'Posted by User opw', 'Void By System', 'Posted By User opw', 'Original Save by Pembelian Logistik form', '2018-09-20', '11:40:11', '1'),
(13, 2, 'Approved by User superw', 'Posted by User opw', 'Approved By User superw', 'Update by superw from Pembelian Logistik form', '2018-09-20', '11:40:53', '1'),
(14, 3, 'Void By System', 'None', 'None', 'Create By System', '2018-09-26', '13:24:58', '0'),
(15, 3, 'Posted by User opm', 'Void By System', 'Posted By User opm', 'Original Save by Pembelian Logistik form', '2018-09-26', '13:25:22', '1'),
(16, 3, 'Approved by User superm', 'Posted by User opm', 'Approved By User superm', 'Update by superm from Pembelian Logistik form', '2018-09-26', '13:25:47', '1'),
(17, 4, 'Void By System', 'None', 'None', 'Create By System', '2018-09-26', '16:10:11', '0'),
(18, 4, 'Posted by User opm', 'Void By System', 'Posted By User opm', 'Original Save by Pembelian Logistik form', '2018-09-26', '16:12:38', '1'),
(19, 4, 'Approved by User superm', 'Posted by User opm', 'Approved By User superm', 'Update by superm from Pembelian Logistik form', '2018-09-26', '16:13:17', '1'),
(20, 5, 'Void By System', 'None', 'None', 'Create By System', '2018-10-02', '14:56:53', '0'),
(21, 5, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by Pembelian Logistik form', '2018-10-02', '14:59:08', '1'),
(22, 6, 'Void By System', 'None', 'None', 'Create By System', '2018-10-16', '14:38:50', '0'),
(23, 6, 'Posted by User superwpi', 'Void By System', 'Posted By User superwpi', 'Original Save by Pembelian Logistik form', '2018-10-16', '14:40:18', '1'),
(24, 6, 'Disapproved by User superwpi', 'Posted by User superwpi', 'Disapproved By User superwpi', 'Update by superwpi from Pembelian Logistik form', '2018-10-16', '14:45:37', '1'),
(25, 6, 'Posted by User superwpi', 'Posted by User superwpi', 'Posted By User superwpi', 'Update by superwpi from Pembelian Logistik form', '2018-10-16', '14:46:58', '1'),
(26, 6, 'Disapproved by User superwpi', 'Posted by User superwpi', 'Disapproved By User superwpi', 'Update by superwpi from Pembelian Logistik form', '2018-10-16', '14:47:09', '1'),
(27, 6, 'Posted by User superwpi', 'Posted by User superwpi', 'Posted By User superwpi', 'Update by superwpi from Pembelian Logistik form', '2018-10-16', '14:50:47', '1'),
(28, 6, 'Posted by User superwpi', 'Posted by User superwpi', 'Posted By User superwpi', 'Update by superwpi from Pembelian Logistik form', '2018-10-16', '14:52:25', '1'),
(29, 6, 'Approved by User superwpi', 'Posted by User superwpi', 'Approved By User superwpi', 'Update by superwpi from Pembelian Logistik form', '2018-10-16', '15:13:47', '1'),
(30, 6, 'Open by User superwpi', 'Posted by User superwpi', 'Open By User superwpi', 'Open Record by Pembelian Logistik form', '2018-10-16', '15:30:37', '2'),
(31, 6, 'Posted by User superwpi', 'Open by User superwpi', 'Posted By User superwpi', 'Update by superwpi from Pembelian Logistik form', '2018-10-16', '15:30:53', '2'),
(32, 6, 'Approved by User superwpi', 'Open by User superwpi', 'Approved By User superwpi', 'Update by superwpi from Pembelian Logistik form', '2018-10-16', '15:30:59', '2'),
(33, 7, 'Void By System', 'None', 'None', 'Create By System', '2018-10-16', '17:10:06', '0'),
(34, 7, 'Posted by User superwpi', 'Void By System', 'Posted By User superwpi', 'Original Save by Pembelian Logistik form', '2018-10-16', '17:10:38', '1'),
(35, 7, 'Approved by User superwpi', 'Posted by User superwpi', 'Approved By User superwpi', 'Update by superwpi from Pembelian Logistik form', '2018-10-16', '17:10:44', '1'),
(36, 7, 'Open by User superwpi', 'Posted by User superwpi', 'Open By User superwpi', 'Open Record by Pembelian Logistik form', '2018-10-23', '09:17:57', '2'),
(37, 6, 'Open by User superwpi', 'Open by User superwpi', 'Open By User superwpi', 'Open Record by Pembelian Logistik form', '2018-10-23', '09:18:01', '3'),
(38, 7, 'Open by User superwpi', 'Open by User superwpi', 'Open By User superwpi', 'Open Record by Pembelian Logistik form', '2018-10-23', '09:18:06', '3'),
(39, 6, 'Posted by User superwpi', 'Open by User superwpi', 'Posted By User superwpi', 'Update by superwpi from Pembelian Logistik form', '2018-10-23', '09:24:14', '3'),
(40, 7, 'Posted by User superwpi', 'Open by User superwpi', 'Posted By User superwpi', 'Update by superwpi from Pembelian Logistik form', '2018-10-23', '09:24:20', '3'),
(41, 6, 'Approved by User superwpi', 'Open by User superwpi', 'Approved By User superwpi', 'Update by superwpi from Pembelian Logistik form', '2018-10-23', '09:24:33', '3'),
(42, 7, 'Approved by User superwpi', 'Open by User superwpi', 'Approved By User superwpi', 'Update by superwpi from Pembelian Logistik form', '2018-10-23', '09:24:42', '3'),
(43, 8, 'Void By System', 'None', 'None', 'Create By System', '2019-06-14', '11:32:09', '0'),
(44, 8, 'Posted by User superrcp', 'Void By System', 'Posted By User superrcp', 'Original Save by Pembelian Logistik form', '2019-06-17', '08:48:13', '1'),
(45, 8, 'Approved by User superrcp', 'Posted by User superrcp', 'Approved By User superrcp', 'Update by superrcp from Pembelian Logistik form', '2019-06-17', '08:48:23', '1'),
(46, 8, 'Approved by User superrcp', 'Posted by User superrcp', 'Approved By User superrcp', 'Update by superrcp from Pembelian Logistik form', '2019-06-17', '08:48:28', '1');

-- --------------------------------------------------------

--
-- Table structure for table `his_prcga`
--

CREATE TABLE `his_prcga` (
  `HISPRCGA_ID` int(11) NOT NULL,
  `PRCGA_ID` int(11) DEFAULT NULL,
  `HISPRCGA_STS` char(50) DEFAULT NULL,
  `HISPRCGA_OLD` char(50) DEFAULT NULL,
  `HISPRCGA_NEW` char(50) DEFAULT NULL,
  `HISPRCGA_INFO` char(200) DEFAULT NULL,
  `HISPRCGA_DATE` date DEFAULT NULL,
  `HISPRCGA_TIME` time DEFAULT NULL,
  `HISPRCGA_UPCOUNT` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `his_prcga`
--

INSERT INTO `his_prcga` (`HISPRCGA_ID`, `PRCGA_ID`, `HISPRCGA_STS`, `HISPRCGA_OLD`, `HISPRCGA_NEW`, `HISPRCGA_INFO`, `HISPRCGA_DATE`, `HISPRCGA_TIME`, `HISPRCGA_UPCOUNT`) VALUES
(1, 1, 'Void By System', 'None', 'None', 'Create By System', '2018-12-20', NULL, '0'),
(2, 1, 'Posted by User superm', 'Void By System', 'Posted By User superm', 'Original Save by Pembelian GA form', '2018-12-20', NULL, '1'),
(3, 1, 'Posted by User superm', 'Posted by User superm', 'Posted By User superm', 'Update by superm from Pembelian GA form', '2018-12-20', '14:12:05', '1'),
(4, 1, 'Open by User superm', 'Posted by User superm', 'Open By User superm', 'Open Record by Pembelian GA form', '2018-12-20', NULL, '2'),
(5, 1, 'Posted by User superm', 'Open by User superm', 'Posted By User superm', 'Update by superm from Pembelian GA form', '2018-12-20', '14:12:28', '2'),
(6, 1, 'Posted by User superm', 'Open by User superm', 'Posted By User superm', 'Update by superm from Pembelian GA form', '2018-12-20', '14:13:25', '2'),
(7, 2, 'Void By System', 'None', 'None', 'Create By System', '2021-04-10', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `his_retprc`
--

CREATE TABLE `his_retprc` (
  `HISRTPRC_ID` int(11) NOT NULL,
  `RTPRC_ID` int(11) DEFAULT NULL,
  `HISRTPRC_STS` char(50) DEFAULT NULL,
  `HISRTPRC_OLD` char(50) DEFAULT NULL,
  `HISRTPRC_NEW` char(50) DEFAULT NULL,
  `HISRTPRC_INFO` varchar(1024) DEFAULT NULL,
  `HISRTPRC_DATE` date DEFAULT NULL,
  `HISRTPRC_UPCOUNT` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `his_retusg`
--

CREATE TABLE `his_retusg` (
  `HISRTUSG_ID` int(11) NOT NULL,
  `RTUSG_ID` int(11) DEFAULT NULL,
  `HISRTUSG_STS` char(50) DEFAULT NULL,
  `HISRTUSG_OLD` char(50) DEFAULT NULL,
  `HISRTUSG_NEW` char(50) DEFAULT NULL,
  `HISRTUSG_INFO` varchar(1024) DEFAULT NULL,
  `HISRTUSG_DATE` date DEFAULT NULL,
  `HISRTUSG_UPCOUNT` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `his_rtprcga`
--

CREATE TABLE `his_rtprcga` (
  `HISRTPRCGA_ID` int(11) NOT NULL,
  `RTPRCGA_ID` int(11) DEFAULT NULL,
  `HISRTPRCGA_STS` char(50) DEFAULT NULL,
  `HISRTPRCGA_OLD` char(50) DEFAULT NULL,
  `HISRTPRCGA_NEW` char(50) DEFAULT NULL,
  `HISRTPRCGA_INFO` char(200) DEFAULT NULL,
  `HISRTPRCGA_DATE` date DEFAULT NULL,
  `HISRTPRCGA_UPCOUNT` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `his_rtusgga`
--

CREATE TABLE `his_rtusgga` (
  `HISRTUSGGA_ID` int(11) NOT NULL,
  `RTUSGGA_ID` int(11) DEFAULT NULL,
  `HISRTUSGGA_STS` char(50) DEFAULT NULL,
  `HISRTUSGGA_OLD` char(50) DEFAULT NULL,
  `HISRTUSGGA_NEW` char(50) DEFAULT NULL,
  `HISRTUSGGA_INFO` char(200) DEFAULT NULL,
  `HISRTUSGGA_DATE` date DEFAULT NULL,
  `HISRTUSGGA_UPCOUNT` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `his_usg`
--

CREATE TABLE `his_usg` (
  `HISUSG_ID` int(11) NOT NULL,
  `USG_ID` int(11) DEFAULT NULL,
  `HISUSG_STS` char(30) DEFAULT NULL,
  `HISUSG_OLD` char(30) DEFAULT NULL,
  `HISUSG_NEW` char(30) DEFAULT NULL,
  `HISUSG_INFO` varchar(1024) DEFAULT NULL,
  `HISUSG_DATE` date DEFAULT NULL,
  `HISUSG_UPCOUNT` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `his_usgga`
--

CREATE TABLE `his_usgga` (
  `HISUSGGA_ID` int(11) NOT NULL,
  `USGGA_ID` int(11) DEFAULT NULL,
  `HISUSGGA_STS` char(50) DEFAULT NULL,
  `HISUSGGA_OLD` char(50) DEFAULT NULL,
  `HISUSGGA_NEW` char(50) DEFAULT NULL,
  `HISUSGGA_INFO` char(200) DEFAULT NULL,
  `HISUSGGA_DATE` date DEFAULT NULL,
  `HISUSGGA_TIME` time DEFAULT NULL,
  `HISUSGGA_UPCOUNT` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_type`
--

CREATE TABLE `invoice_type` (
  `INC_ID` int(11) NOT NULL,
  `BRANCH_ID` int(11) NOT NULL DEFAULT '0',
  `INC_CODE` char(30) DEFAULT NULL,
  `INC_NAME` char(150) DEFAULT NULL,
  `INC_ACCRCV` char(150) DEFAULT NULL,
  `INC_ACCRCVNAME` char(150) DEFAULT NULL,
  `INC_ACCINC` char(150) DEFAULT NULL,
  `INC_ACCINCNAME` char(150) DEFAULT NULL,
  `INC_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_type`
--

INSERT INTO `invoice_type` (`INC_ID`, `BRANCH_ID`, `INC_CODE`, `INC_NAME`, `INC_ACCRCV`, `INC_ACCRCVNAME`, `INC_ACCINC`, `INC_ACCINCNAME`, `INC_DTSTS`) VALUES
(1, 5, 'IVT-00001', 'OUTDOOR', '5', '1130017-PIUTANG USAHA OUTDOOR WIKLAN', '44', '4110005-PENDAPATAN OUTDOR - WIKLAN', '1'),
(2, 5, 'IVT-00002', 'PAJAK REKLAME', '6', '1130018-PIUTANG USAHA PAJAK REKLAME WIKLAN', '45', '4110011-PENDAPATAN PAJAK REKLAME - WIKLAN', '1'),
(3, 3, 'IVT-00003', 'OUTDOOR MATCH', '1130', '1130002-PIUTANG USAHA OUTDOOR MATCH', '1172', '4110002-PENDAPATAN OUTDOR - MATCH', '1'),
(4, 3, 'IVT-00004', 'PAJAK REKLAME MATCH', '1131', '1130003-PIUTANG USAHA PAJAK REKLAME MATCH', '1173', '4110008-PENDAPATAN PAJAK REKLAME - MATCH', '1');

-- --------------------------------------------------------

--
-- Table structure for table `inv_details`
--

CREATE TABLE `inv_details` (
  `INVDET_ID` int(11) NOT NULL,
  `INV_ID` int(11) DEFAULT NULL,
  `APPR_ID` int(11) DEFAULT '0',
  `INVDET_TERMID` int(11) DEFAULT '0',
  `INVDET_TERM` char(50) DEFAULT '0',
  `INVDET_SUB` bigint(20) DEFAULT NULL,
  `INVDET_AMOUNT` bigint(20) DEFAULT '0',
  `INVDET_PPNAM` bigint(20) DEFAULT NULL,
  `INVDET_PPHAM` bigint(20) DEFAULT NULL,
  `INVDET_TERMBRCID` int(11) DEFAULT '0',
  `INVDET_BRCTERM` char(50) DEFAULT '0',
  `INVDET_BRCSUB` bigint(20) DEFAULT NULL,
  `INVDET_BRCAMOUNT` bigint(20) DEFAULT '0',
  `INVDET_PPNBRCAM` bigint(20) DEFAULT NULL,
  `INVDET_PPHBRCAM` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_details`
--

INSERT INTO `inv_details` (`INVDET_ID`, `INV_ID`, `APPR_ID`, `INVDET_TERMID`, `INVDET_TERM`, `INVDET_SUB`, `INVDET_AMOUNT`, `INVDET_PPNAM`, `INVDET_PPHAM`, `INVDET_TERMBRCID`, `INVDET_BRCTERM`, `INVDET_BRCSUB`, `INVDET_BRCAMOUNT`, `INVDET_PPNBRCAM`, `INVDET_PPHBRCAM`) VALUES
(1, 1, 2, 2, '1', 100000000, 110000000, 10000000, NULL, 0, '', 0, 0, 0, NULL),
(2, 2, 2, 2, '1', 10000000, 10000000, 0, NULL, 0, '', 0, 0, 0, NULL),
(3, 3, 3, 4, '1', 120000000, 132000000, 12000000, NULL, 0, '', 0, 0, 0, NULL),
(4, 4, 3, 4, '1', 10000000, 10000000, 0, NULL, 0, '', 0, 0, 0, NULL),
(5, 5, 4, 5, '1', 100000000, 110000000, 10000000, NULL, 0, '', 0, 0, 0, NULL),
(6, 6, 7, 13, '1', 27500000, 30250000, 2750000, NULL, 0, '', 0, 0, 0, NULL),
(7, 8, 11, 18, '1', 15000000, 16000000, 1000000, NULL, 0, '', 0, 0, 0, NULL),
(8, 26, 13, 23, 'TERMIN I', 3465000, 3465000, 0, NULL, 0, '', 0, 0, 0, NULL),
(9, 27, 14, 26, 'TERMIN I', 13125000, 13125000, 0, NULL, 0, '', 0, 0, 0, NULL),
(10, 28, 13, 25, 'TERMIN II', 6435000, 6435000, 0, NULL, 0, '', 0, 0, 0, NULL),
(11, 29, 14, 27, 'TERMIN II', 24375000, 24375000, 0, NULL, 0, '', 0, 0, 0, NULL),
(12, 31, 16, 28, 'T1', 30250000, 30250000, 0, NULL, 0, '', 0, 0, 0, NULL),
(13, 32, 17, 29, 'T1', 16500000, 16500000, 0, NULL, 0, '', 0, 0, 0, NULL),
(14, 33, 18, 30, 'T1', 14000000, 14000000, 0, NULL, 0, '', 0, 0, 0, NULL),
(15, 34, 23, 35, 'I', 23625000, 23625000, 0, NULL, 0, '', 0, 0, 0, NULL),
(16, 35, 23, 36, 'II', 43875000, 43875000, 0, NULL, 0, '', 0, 0, 0, NULL),
(17, 36, 24, 37, 'I', 21000000, 21000000, 0, NULL, 0, '', 0, 0, 0, NULL),
(18, 37, 24, 38, 'II', 39000000, 39000000, 0, NULL, 0, '', 0, 0, 0, NULL),
(20, 39, 26, 40, '1', 7500000, 7500000, 0, NULL, 0, '', 0, 0, 0, NULL),
(22, 38, 25, 39, '1', 1650000, 1650000, 0, NULL, 0, '', 0, 0, 0, NULL),
(23, 40, 27, 41, '1', 15000000, 15000000, 0, NULL, 0, '', 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jou_credit`
--

CREATE TABLE `jou_credit` (
  `JOUCR_ID` int(11) NOT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `JOU_ID` int(11) DEFAULT NULL,
  `JOUCR_CODE` char(30) DEFAULT NULL,
  `JOUCR_DATE` date DEFAULT NULL,
  `JOUCR_INFO` varchar(1024) DEFAULT NULL,
  `JOUCR_REFF` char(200) DEFAULT NULL,
  `JOUCR_AMOUNT` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jou_debit`
--

CREATE TABLE `jou_debit` (
  `JOUDB_ID` int(11) NOT NULL,
  `JOU_ID` int(11) DEFAULT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `JOUDB_CODE` char(30) DEFAULT NULL,
  `JOUDB_DATE` date DEFAULT NULL,
  `JOUDB_INFO` varchar(1024) DEFAULT NULL,
  `JOUDB_REFF` char(200) DEFAULT NULL,
  `JOUDB_AMOUNT` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jou_details`
--

CREATE TABLE `jou_details` (
  `JOUDET_ID` int(11) NOT NULL,
  `JOU_ID` int(11) NOT NULL DEFAULT '0',
  `COA_ID` int(11) NOT NULL DEFAULT '0',
  `JOUDET_DEBIT` decimal(18,2) NOT NULL DEFAULT '0.00',
  `JOUDET_CREDIT` decimal(18,2) NOT NULL DEFAULT '0.00',
  `JOUDET_STS` char(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jou_details`
--

INSERT INTO `jou_details` (`JOUDET_ID`, `JOU_ID`, `COA_ID`, `JOUDET_DEBIT`, `JOUDET_CREDIT`, `JOUDET_STS`) VALUES
(4, 1, 206, '0.00', '30000.00', '0'),
(5, 1, 241, '20000.00', '0.00', '0'),
(6, 1, 246, '10000.00', '0.00', '0'),
(7, 2, 206, '0.00', '35000.00', '0'),
(8, 2, 241, '30000.00', '0.00', '0'),
(9, 2, 246, '5000.00', '0.00', '0'),
(13, 3, 5, '110000000.00', '0.00', '0'),
(14, 3, 44, '0.00', '100000000.00', '0'),
(15, 3, 323, '0.00', '10000000.00', '0'),
(16, 4, 6, '10000000.00', '0.00', '0'),
(17, 4, 45, '0.00', '10000000.00', '0'),
(18, 5, 206, '0.00', '1100000.00', '0'),
(19, 5, 241, '1000000.00', '0.00', '0'),
(20, 5, 174, '100000.00', '0.00', '0'),
(21, 6, 1131, '10000000.00', '0.00', '0'),
(22, 6, 1173, '0.00', '10000000.00', '0'),
(23, 7, 1130, '132000000.00', '0.00', '0'),
(24, 7, 1172, '0.00', '120000000.00', '0'),
(25, 7, 216, '0.00', '12000000.00', '0'),
(28, 8, 1124, '100000.00', '0.00', '0'),
(29, 8, 1518, '0.00', '100000.00', '0'),
(30, 9, 1124, '0.00', '100000.00', '0'),
(31, 9, 1200, '100000.00', '0.00', '0'),
(32, 10, 206, '0.00', '1200000.00', '0'),
(33, 10, 241, '1000000.00', '0.00', '0'),
(34, 10, 174, '100000.00', '0.00', '0'),
(35, 10, 246, '100000.00', '0.00', '0'),
(36, 11, 1130, '110000000.00', '0.00', '0'),
(37, 11, 1172, '0.00', '100000000.00', '0'),
(38, 11, 216, '0.00', '10000000.00', '0'),
(39, 12, 1128, '100000.00', '0.00', '0'),
(40, 12, 1172, '0.00', '100000.00', '0'),
(41, 13, 1131, '30250000.00', '0.00', '0'),
(42, 13, 1173, '0.00', '27500000.00', '0'),
(43, 13, 1877, '0.00', '2750000.00', '0'),
(44, 14, 1124, '0.00', '10000.00', '0'),
(45, 14, 1200, '10000.00', '0.00', '0'),
(46, 15, 1128, '0.00', '10000.00', '0'),
(47, 15, 1200, '10000.00', '0.00', '0'),
(48, 16, 144, '100000.00', '0.00', '0'),
(49, 16, 316, '0.00', '100000.00', '0'),
(52, 17, 144, '0.00', '100000.00', '0'),
(53, 17, 136, '100000.00', '0.00', '0'),
(54, 18, 208, '0.00', '100000.00', '0'),
(55, 18, 250, '100000.00', '0.00', '0'),
(56, 19, 208, '100000.00', '0.00', '0'),
(57, 19, 136, '0.00', '100000.00', '0'),
(66, 22, 136, '100000.00', '0.00', '0'),
(67, 22, 316, '0.00', '100000.00', '0'),
(68, 23, 136, '0.00', '100000.00', '0'),
(69, 23, 262, '100000.00', '0.00', '0'),
(70, 20, 1878, '0.00', '1000000.00', '0'),
(71, 20, 1682, '1000000.00', '0.00', '0'),
(72, 21, 1879, '0.00', '100000.00', '0'),
(73, 21, 1878, '100000.00', '0.00', '0'),
(74, 24, 1130, '16000000.00', '0.00', '0'),
(75, 24, 1172, '0.00', '15000000.00', '0'),
(76, 24, 1877, '0.00', '1000000.00', '0'),
(84, 25, 206, '0.00', '101000.00', '0'),
(85, 25, 1190, '100000.00', '0.00', '0'),
(86, 25, 1191, '10000.00', '0.00', '0'),
(87, 25, 1150, '10000.00', '0.00', '0'),
(88, 25, 1195, '1000.00', '0.00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `master_bank`
--

CREATE TABLE `master_bank` (
  `BANK_ID` int(11) NOT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `BANK_CODE` char(30) DEFAULT NULL,
  `BANK_NAME` char(100) DEFAULT NULL,
  `BANK_ACC` char(100) DEFAULT NULL,
  `BANK_ACCNAME` char(100) DEFAULT NULL,
  `BANK_PRODTYPE` char(100) DEFAULT NULL,
  `BANK_BRANCH` varchar(1024) DEFAULT NULL,
  `BANK_CURR` char(100) DEFAULT NULL,
  `BANK_INFO` varchar(1024) DEFAULT NULL,
  `BANK_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_bank`
--

INSERT INTO `master_bank` (`BANK_ID`, `COA_ID`, `BANK_CODE`, `BANK_NAME`, `BANK_ACC`, `BANK_ACCNAME`, `BANK_PRODTYPE`, `BANK_BRANCH`, `BANK_CURR`, `BANK_INFO`, `BANK_DTSTS`) VALUES
(1, 136, 'BNK-00001', 'BANK A', '098765', 'ATAS NAMA PT', 'JENIS PRODUK BANK', 'SURABAYA', 'RP', '-', '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_bboard`
--

CREATE TABLE `master_bboard` (
  `BB_ID` int(11) NOT NULL,
  `BB_CODE` char(30) DEFAULT NULL,
  `BB_NAME` char(100) DEFAULT NULL,
  `BB_INFO` varchar(1024) DEFAULT NULL,
  `BB_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_bboard`
--

INSERT INTO `master_bboard` (`BB_ID`, `BB_CODE`, `BB_NAME`, `BB_INFO`, `BB_DTSTS`) VALUES
(1, 'BBO-00001', 'Billboard', '-', '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_branch`
--

CREATE TABLE `master_branch` (
  `BRANCH_ID` int(11) NOT NULL,
  `BRANCH_CODE` char(30) DEFAULT NULL,
  `BRANCH_NAME` char(200) DEFAULT NULL,
  `BRANCH_STATUS` char(100) DEFAULT NULL,
  `BRANCH_ADDRESS` varchar(1024) DEFAULT NULL,
  `BRANCH_CITY` char(100) DEFAULT NULL,
  `BRANCH_INIT` char(10) DEFAULT NULL,
  `BRANCH_PHONE` char(30) DEFAULT NULL,
  `BRANCH_FAX` char(30) DEFAULT NULL,
  `BRANCH_LOGO` char(30) DEFAULT NULL,
  `BRANCH_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_branch`
--

INSERT INTO `master_branch` (`BRANCH_ID`, `BRANCH_CODE`, `BRANCH_NAME`, `BRANCH_STATUS`, `BRANCH_ADDRESS`, `BRANCH_CITY`, `BRANCH_INIT`, `BRANCH_PHONE`, `BRANCH_FAX`, `BRANCH_LOGO`, `BRANCH_DTSTS`) VALUES
(1, 'BRC-00001', 'Holding', '0', 'JL Lesti No.42', 'Surabaya', 'HO', NULL, NULL, NULL, '1'),
(3, 'BRC-00002', 'Match Advertising', '1', 'JL Lesti No.42', 'Surabaya 60241', 'M', '(031) 567 8346', '(031) 568 0646', 'logo_BRC-00002_.png', '1'),
(4, 'BRC-00003', 'Karya Cipta Tritunggal', '1', 'JL Raya Taman', 'Sidoarjo', 'KCT', '0987654', '09875', 'logo_BRC-00003_.png', '1'),
(5, 'BRC-00004', 'Wiklan', '1', 'JL. ADITYAWARMAN NO.2', 'SURABAYA', 'WI', '(031) 512 01088', '-', 'logo_BRC-00004_.png', '1'),
(6, 'BRC-00005', 'Wijaya Persada Indonesia', '1', 'Jl. Raya Taman', 'Sidoarjo', 'WPI', '4567890', '567890', 'logo_BRC-00005_.png', '1'),
(7, 'BRC-00006', 'Raja Cahaya Prima', '1', 'JL ADITYAWARMAN NO.02', 'SURABAYA', 'RCP', '031 512 01088', '-', 'logo_BRC-00006_.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_currency`
--

CREATE TABLE `master_currency` (
  `CURR_ID` int(11) NOT NULL,
  `CURR_CODE` char(30) DEFAULT NULL,
  `CURR_SYMBOL` char(20) DEFAULT NULL,
  `CURR_NAME` char(100) DEFAULT NULL,
  `CURR_RATE` int(11) DEFAULT NULL,
  `CURR_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_currency`
--

INSERT INTO `master_currency` (`CURR_ID`, `CURR_CODE`, `CURR_SYMBOL`, `CURR_NAME`, `CURR_RATE`, `CURR_DTSTS`) VALUES
(1, 'CUR-00001', 'Rp', 'Rupiah', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_customer`
--

CREATE TABLE `master_customer` (
  `CUST_ID` int(11) NOT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `CUST_CODE` char(30) DEFAULT NULL,
  `CUST_NAME` varchar(500) DEFAULT NULL,
  `CUST_ADDRESS` varchar(1024) DEFAULT NULL,
  `CUST_CITY` char(50) DEFAULT NULL,
  `CUST_POSTAL` char(30) DEFAULT NULL,
  `CUST_PROV` char(100) DEFAULT NULL,
  `CUST_PHONE` char(30) DEFAULT NULL,
  `CUST_FAX` char(30) DEFAULT NULL,
  `CUST_ACC` varchar(1024) DEFAULT NULL,
  `CUST_NPWPNAME` char(200) DEFAULT NULL,
  `CUST_NPWPACC` char(30) DEFAULT NULL,
  `CUST_NPWPADD` char(200) DEFAULT NULL,
  `CUST_NPKP` char(30) DEFAULT NULL,
  `CUST_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_customer`
--

INSERT INTO `master_customer` (`CUST_ID`, `COA_ID`, `CUST_CODE`, `CUST_NAME`, `CUST_ADDRESS`, `CUST_CITY`, `CUST_POSTAL`, `CUST_PROV`, `CUST_PHONE`, `CUST_FAX`, `CUST_ACC`, `CUST_NPWPNAME`, `CUST_NPWPACC`, `CUST_NPWPADD`, `CUST_NPKP`, `CUST_DTSTS`) VALUES
(1, NULL, 'CST-00001', 'Sampoerna', 'Jl. Rungkut Industri Raya No.18, Kali Rungkut, Rungkut', 'Surabaya', '60293', 'Jawa Timur', '-', '-', NULL, 'Sampoerna', '1234567890', 'Surabaya', '1234567890', '1'),
(2, NULL, 'CST-00002', 'PT. GOLDEN RAMA EXPRESS', 'JL. TANAH ABANG II NO.73-75', 'JAKARTA PUSAT', '10160', 'JAKARTA', '(021) 2980 6000', '-', NULL, '-', '-', '-', '-', '1'),
(3, NULL, 'CST-00003', 'PT MULTI ARTISTIKACITHRA', 'JL. LESTI NO.42, DARMO, WONOKROMO', 'SURABAYA', '60241', 'JAWA TIMUR', '(031) 5678 346', '-', NULL, '-', '-', '-', '-', '1'),
(4, NULL, 'CST-00004', 'BAPAK YURIE', 'JL GUBENG KERTAJAYA VII G NO 23A', 'Surabaya', '60286', 'JAWA TIMUR', '+62 817-5285-877', '-', NULL, '-', '-', '-', '-', '1'),
(5, NULL, 'CST-00005', 'MULYADI', '-', '-', '-', '-', '-', '-', NULL, '-', '-', '-', '-', '1'),
(6, NULL, 'CST-00006', 'CV RA BAROKAH KARYA MEDIA', 'JL. BULAK SARI 6 NO.10', 'SURABAYA', '60154', 'JAWA TIMUR', '+62 878-5248-1921', '-', NULL, '-', '-', '-', '-', '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_cust_intern`
--

CREATE TABLE `master_cust_intern` (
  `CSTIN_ID` int(11) NOT NULL,
  `PERSON_ID` int(11) DEFAULT NULL,
  `CSTIN_CODE` char(30) DEFAULT NULL,
  `CSTIN_INFO` varchar(1024) DEFAULT NULL,
  `CSTIN_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_cust_intern`
--

INSERT INTO `master_cust_intern` (`CSTIN_ID`, `PERSON_ID`, `CSTIN_CODE`, `CSTIN_INFO`, `CSTIN_DTSTS`) VALUES
(1, 3, 'CSTI-00001', 'Tes cust internal', '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_dept`
--

CREATE TABLE `master_dept` (
  `DEPT_ID` int(11) NOT NULL,
  `DEPT_CODE` char(30) DEFAULT NULL,
  `DEPT_NAME` char(30) DEFAULT NULL,
  `DEPT_INFO` varchar(1024) DEFAULT NULL,
  `DEPT_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_goods`
--

CREATE TABLE `master_goods` (
  `GD_ID` int(11) NOT NULL,
  `SUPP_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `GD_CODE` char(30) DEFAULT NULL,
  `GD_NAME` char(100) DEFAULT NULL,
  `GD_UNIT` char(20) DEFAULT NULL,
  `GD_MEASURE` char(20) DEFAULT NULL,
  `GD_PRICE` decimal(10,2) DEFAULT NULL,
  `GD_INFO` varchar(1024) DEFAULT NULL,
  `GD_STS` char(10) DEFAULT NULL,
  `GD_TYPE` char(10) DEFAULT NULL,
  `GD_TYPESTOCK` char(10) DEFAULT NULL,
  `GD_STOCK` int(11) DEFAULT NULL,
  `GD_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_goods`
--

INSERT INTO `master_goods` (`GD_ID`, `SUPP_ID`, `BRANCH_ID`, `GD_CODE`, `GD_NAME`, `GD_UNIT`, `GD_MEASURE`, `GD_PRICE`, `GD_INFO`, `GD_STS`, `GD_TYPE`, `GD_TYPESTOCK`, `GD_STOCK`, `GD_DTSTS`) VALUES
(1, 1, 1, 'BRG-00001', 'Barang A', '1', 'Pcs', '10000.00', '-', 'Baru', 'Jasa', '1', 10, '1'),
(2, 1, 5, 'BRG-00002', 'Barang A cabang W', '1', 'Pcs', '10000.00', '-', 'Baru', 'Jasa', '1', 0, '1'),
(3, 1, 3, 'BRG-00003', 'Barang A cabang M', '1', 'Pcs', '1000000.00', '-', 'Baru', 'Jasa', '1', 0, '1'),
(4, 2, 6, 'BRG-00004', 'Jasa Renovasi', '1', 'Kali', '1000000.00', '-', 'Baru', 'Jasa', '1', 0, '1'),
(5, 1, 6, 'BRG-00005', 'Keramik', '1', 'Pcs', '10000.00', '-', 'Baru', 'Barang', '1', 0, '1'),
(6, 3, 7, 'BRG-00006', 'Pemasangan Lampu Sorot', '1', 'Buah', '200000.00', '-', 'Baru', 'Jasa', '1', 0, '1'),
(7, 4, 5, 'BRG-00007', 'MEDIA PLACEMENT PANGSUD PROBOLINGGO', '1', 'BULAN', '10000000.00', '-', 'Baru', 'Jasa', '1', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_gov_type`
--

CREATE TABLE `master_gov_type` (
  `GOV_ID` int(11) NOT NULL,
  `GOV_CODE` char(30) DEFAULT NULL,
  `GOV_NAME` varchar(100) DEFAULT NULL,
  `GOV_INFO` varchar(1024) DEFAULT NULL,
  `GOV_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_gov_type`
--

INSERT INTO `master_gov_type` (`GOV_ID`, `GOV_CODE`, `GOV_NAME`, `GOV_INFO`, `GOV_DTSTS`) VALUES
(1, 'GOV-00001', 'Persil', 'Persil', '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_location`
--

CREATE TABLE `master_location` (
  `LOC_ID` int(11) NOT NULL,
  `GOV_ID` int(11) DEFAULT NULL,
  `LOC_CODE` char(30) DEFAULT NULL,
  `LOC_NAME` varchar(256) DEFAULT NULL,
  `LOC_ADDRESS` varchar(1024) DEFAULT NULL,
  `LOC_CITY` char(200) DEFAULT NULL,
  `LOC_INFO` varchar(1024) DEFAULT NULL,
  `LOC_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_location`
--

INSERT INTO `master_location` (`LOC_ID`, `GOV_ID`, `LOC_CODE`, `LOC_NAME`, `LOC_ADDRESS`, `LOC_CITY`, `LOC_INFO`, `LOC_DTSTS`) VALUES
(1, 1, 'LOC-00001', 'Indragiri 61', 'JL Indragiri 61', 'Surabaya', 'Info lokasi Indragiri 61', '1'),
(2, 1, 'LOC-00002', 'JL. METRO TANJUNG BUNGA MAKASSAR', '-', '-', '-', '1'),
(3, 1, 'LOC-00003', 'JL. A. YANI KEDIRI', '-', '-', '-', '1'),
(4, 1, 'LOC-00004', 'GUBENG POJOK', 'Gubeng Pojok', 'Surabaya', 'Match advertising', '1'),
(5, 1, 'LOC-00005', 'MAYJEND SUNGKONO 176-178', 'Mayjend Sungkono No. 176-178', 'Surabaya', 'Match Advertisng', '1'),
(6, 1, 'LOC-00006', 'KERTAJAYA PEREMPATAN SAMSAT MANYAR', 'JL Raya Menur No.35', 'Surabaya', 'Citra Advertising', '1'),
(7, 1, 'LOC-00007', 'KLIEN RCP', '-', '-', '-', '1'),
(8, 1, 'LOC-00008', 'SETIA BUDI SEMARANG', 'JL SETIA BUDI', 'SEMARANG', '-', '1'),
(9, 1, 'LOC-00009', 'JL TUPAREV (DEKAT POLSEK KOTA CIREBON UTARA BARAT)', 'JL TUPAREV, KESAMBI', 'CIREBON', '-', '1'),
(10, 1, 'LOC-00010', 'JL SETIA BUDI SEMARANG', 'JL SETIA BUDI, BANYUMANIK', 'SEMARANG', '-', '1'),
(11, 1, 'LOC-00011', 'JL DANAU TOBA DARI LAP RAMPAL MENUJU UNM KAMPUS II', 'JL DANAU TOBA', 'MALANG', '-', '1'),
(12, 1, 'LOC-00012', 'PANGSUD VIEW DARI UNIV. PANCA MARGA MENUJU MUSEUM', 'JL PANGLIMA SUDIRMAN (PS. GOTONG ROYONG)', 'PROBOLINGGO', '-', '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_menu`
--

CREATE TABLE `master_menu` (
  `MENU_CODE` char(50) NOT NULL,
  `MENU_NAME` char(100) DEFAULT NULL,
  `MENU_STS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_menu`
--

INSERT INTO `master_menu` (`MENU_CODE`, `MENU_NAME`, `MENU_STS`) VALUES
('ACC', 'Accounting', 1),
('BNK', 'Bank', 0),
('BRC', 'Cabang', 0),
('COA', 'Chart of Account', 0),
('CURR', 'Currency', 0),
('CUST', 'Customer', 0),
('DEPT', 'Departemen', 0),
('FIN', 'Finance', 1),
('GA', 'General Affairs', 1),
('GD', 'Barang', 0),
('INVT', 'Jenis Invoice', 0),
('LOC', 'Location', 0),
('LOG', 'Logistik', 1),
('MKT', 'Marketing', 1),
('PAT', 'Permit', 0),
('PMT', 'Permit', 1),
('REK', 'Reklame', 0),
('SLS', 'Salesforce', 0),
('SUPP', 'Supplier', 0),
('TRX', 'Transaction', 1),
('USR', 'User', 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_menumaster`
--

CREATE TABLE `master_menumaster` (
  `MST_CODE` char(20) NOT NULL,
  `MST_NAME` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_menumaster`
--

INSERT INTO `master_menumaster` (`MST_CODE`, `MST_NAME`) VALUES
('BANK', 'Bank'),
('BRC', 'Cabang'),
('COA', 'Chart of Account'),
('CURR', 'Currency'),
('CUST', 'Customer'),
('DEPT', 'Departemen'),
('GD', 'Barang'),
('INV', 'Jenis Invoice'),
('LOC', 'Location'),
('PAT', 'Permit'),
('RKL', 'Reklame'),
('SLS', 'Salesforce'),
('SUPP', 'Supplier'),
('USER', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `master_menutrx`
--

CREATE TABLE `master_menutrx` (
  `TRX_CODE` char(20) NOT NULL,
  `TRX_NAME` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_menutrx`
--

INSERT INTO `master_menutrx` (`TRX_CODE`, `TRX_NAME`) VALUES
('ACC', 'Accounting'),
('FIN', 'Finance'),
('GA', 'General Affairs'),
('LOG', 'Logistik'),
('MKT', 'Marketing'),
('PRM', 'Permit'),
('TRN', 'Transaction');

-- --------------------------------------------------------

--
-- Table structure for table `master_permit`
--

CREATE TABLE `master_permit` (
  `PERMIT_ID` int(11) NOT NULL,
  `LOC_ID` int(11) DEFAULT NULL,
  `PRMTTYP_ID` int(11) DEFAULT NULL,
  `PERMIT_CODE` char(30) DEFAULT NULL,
  `PERMIT_NAME` varchar(256) DEFAULT NULL,
  `PERMIT_DESC` varchar(1024) DEFAULT NULL,
  `PERMIT_RECEIVE_NUMB` char(10) DEFAULT NULL,
  `PERMIT_RECEIVE_DATE` date DEFAULT NULL,
  `PERMIT_START_DATE` date DEFAULT NULL,
  `PERMIT_END_DATE` date DEFAULT NULL,
  `PERMIT_COST` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_permit_type`
--

CREATE TABLE `master_permit_type` (
  `PRMTTYP_ID` int(11) NOT NULL,
  `PRMTTYP_CODE` char(30) DEFAULT NULL,
  `PRMTTYP_NAME` varchar(300) DEFAULT NULL,
  `PRMTTYP_INFO` varchar(1024) DEFAULT NULL,
  `PRMTTYP_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_person`
--

CREATE TABLE `master_person` (
  `PERSON_ID` int(11) NOT NULL,
  `PERSON_CODE` char(30) DEFAULT NULL,
  `PERSON_NAME` varchar(200) DEFAULT NULL,
  `PERSON_ADDRESS` varchar(1024) DEFAULT NULL,
  `PERSON_PHONE` char(30) DEFAULT NULL,
  `PERSON_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_person`
--

INSERT INTO `master_person` (`PERSON_ID`, `PERSON_CODE`, `PERSON_NAME`, `PERSON_ADDRESS`, `PERSON_PHONE`, `PERSON_DTSTS`) VALUES
(1, 'KRY-00001', 'Kaisha', 'Semolowaru', '09876', '1'),
(2, 'KRY-00002', 'Fitri', '-', '-', '1'),
(3, 'KRY-00003', 'Dhani', '-', '-', '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_placement`
--

CREATE TABLE `master_placement` (
  `PLC_ID` int(11) NOT NULL,
  `PLC_CODE` char(30) DEFAULT NULL,
  `PLC_NAME` char(200) DEFAULT NULL,
  `PLC_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_placement`
--

INSERT INTO `master_placement` (`PLC_ID`, `PLC_CODE`, `PLC_NAME`, `PLC_DTSTS`) VALUES
(1, 'PLC-00001', 'PERSIL', '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_sales`
--

CREATE TABLE `master_sales` (
  `SALES_ID` int(11) NOT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `PERSON_ID` int(11) DEFAULT NULL,
  `SALES_CODE` char(30) DEFAULT NULL,
  `SALES_PHONE` char(30) DEFAULT NULL,
  `SALES_EMAIL` char(200) DEFAULT NULL,
  `SALES_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_sales`
--

INSERT INTO `master_sales` (`SALES_ID`, `BRANCH_ID`, `PERSON_ID`, `SALES_CODE`, `SALES_PHONE`, `SALES_EMAIL`, `SALES_DTSTS`) VALUES
(1, 3, 2, 'SLF-00001', '-', 'a@mail.com', '1'),
(2, 4, 3, 'SLF-00002', '-', 'a@mail.com', '1'),
(3, 1, 1, 'SLF-00003', '-', 'a@mail.com', '1'),
(4, 5, 1, 'SLF-00004', '-', 'a@wiklan.com', '1'),
(5, 6, 1, 'SLF-00005', '-', 'a@mail.com', '1'),
(6, 7, 1, 'SLF-00006', '-', 'a@mail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_supplier`
--

CREATE TABLE `master_supplier` (
  `SUPP_ID` int(11) NOT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `SUPP_CODE` char(30) DEFAULT NULL,
  `SUPP_NAME` char(200) DEFAULT NULL,
  `SUPP_ADDRESS` varchar(1024) DEFAULT NULL,
  `SUPP_CITY` char(100) DEFAULT NULL,
  `SUPP_POSTAL` char(10) DEFAULT NULL,
  `SUPP_PHONE` char(20) DEFAULT NULL,
  `SUPP_FAX` char(20) DEFAULT NULL,
  `SUPP_OTHERCTC` char(200) DEFAULT NULL,
  `SUPP_DUE` char(200) DEFAULT NULL,
  `SUPP_NPWPNAME` char(200) DEFAULT NULL,
  `SUPP_NPWPADD` varchar(1024) DEFAULT NULL,
  `SUPP_NPWPCODE` char(100) DEFAULT NULL,
  `SUPP_NPPKPCODE` char(100) DEFAULT NULL,
  `SUPP_ACC` char(200) DEFAULT NULL,
  `SUPP_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_supplier`
--

INSERT INTO `master_supplier` (`SUPP_ID`, `COA_ID`, `SUPP_CODE`, `SUPP_NAME`, `SUPP_ADDRESS`, `SUPP_CITY`, `SUPP_POSTAL`, `SUPP_PHONE`, `SUPP_FAX`, `SUPP_OTHERCTC`, `SUPP_DUE`, `SUPP_NPWPNAME`, `SUPP_NPWPADD`, `SUPP_NPWPCODE`, `SUPP_NPPKPCODE`, `SUPP_ACC`, `SUPP_DTSTS`) VALUES
(1, NULL, 'SUP-00001', 'Supplier A', 'JL Lesti No.42', 'Surabaya', '-', '-', '-', '-', '7 Hari', 'Supplier A', 'Surabaya', '1234567890', '1234567890', NULL, '1'),
(2, NULL, 'SUP-00002', 'Sup Sub A', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', NULL, '1'),
(3, NULL, 'SUP-00003', 'Mulyono', 'Dusun Banci', 'Mojokerto', '-', '-', '-', '-', '-', '-', '-', '-', '-', NULL, '1'),
(4, NULL, 'SUP-00004', 'DIMAS AYU ADV.', 'JL. RAYA DRINGU GANG ARJUNA NO.198, DRINGU', 'PROBOLINGGO', '67271', '081336831888', '-', '-', '14', '-', '-', '-', '-', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_user`
--

CREATE TABLE `master_user` (
  `USER_ID` int(11) NOT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `PERSON_ID` int(11) DEFAULT NULL,
  `USER_CODE` char(30) DEFAULT NULL,
  `USER_NAME` varchar(1024) DEFAULT NULL,
  `USER_PASSWORD` char(200) DEFAULT NULL,
  `USER_LEVEL` char(1) DEFAULT NULL,
  `USER_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_user`
--

INSERT INTO `master_user` (`USER_ID`, `BRANCH_ID`, `PERSON_ID`, `USER_CODE`, `USER_NAME`, `USER_PASSWORD`, `USER_LEVEL`, `USER_DTSTS`) VALUES
(1, 1, 1, 'USR-00001', 'kaisha', '3fd62cc0355d9db2d99f6a591ef914d6', '1', '1'),
(2, 1, 1, 'USR-00002', 'super', '827ccb0eea8a706c4c34a16891f84e7b', '2', '1'),
(3, 1, 1, 'USR-00003', 'op', '827ccb0eea8a706c4c34a16891f84e7b', '3', '1'),
(4, 5, 1, 'USR-00004', 'opw', '202cb962ac59075b964b07152d234b70', '3', '1'),
(5, 5, 1, 'USR-00005', 'superw', '202cb962ac59075b964b07152d234b70', '2', '1'),
(6, 3, 1, 'USR-00006', 'superm', '202cb962ac59075b964b07152d234b70', '2', '1'),
(7, 3, 1, 'USR-00007', 'opm', '202cb962ac59075b964b07152d234b70', '3', '1'),
(8, 6, 1, 'USR-00008', 'opwpi', '202cb962ac59075b964b07152d234b70', '3', '1'),
(9, 6, 1, 'USR-00009', 'superwpi', '202cb962ac59075b964b07152d234b70', '2', '1'),
(10, 7, 1, 'USR-00010', 'superrcp', '202cb962ac59075b964b07152d234b70', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `other_settings`
--

CREATE TABLE `other_settings` (
  `OS_ID` int(11) NOT NULL,
  `BRANCH_ID` int(11) NOT NULL DEFAULT '0',
  `PRINT_BANKINVOICE` varchar(1024) DEFAULT NULL,
  `PRC_COA` int(11) DEFAULT NULL,
  `PRC_COAMAIN` int(11) DEFAULT NULL,
  `PRC_COASUB` int(11) DEFAULT NULL,
  `PRC_COAAG` int(11) DEFAULT NULL,
  `PRC_COADISC` int(11) DEFAULT NULL,
  `PRC_COAPPN` int(11) DEFAULT NULL,
  `PRC_COACOST` int(11) DEFAULT NULL,
  `PRC_COANAME` char(200) DEFAULT NULL,
  `PRC_COAMAINNAME` char(200) DEFAULT NULL,
  `PRC_COASUBNAME` char(200) DEFAULT NULL,
  `PRC_COANAMEAG` char(200) DEFAULT NULL,
  `PRC_COANAMEDISC` char(200) DEFAULT NULL,
  `PRC_COANAMEPPN` char(200) DEFAULT NULL,
  `PRC_COANAMECOST` char(200) DEFAULT NULL,
  `NOTAFIN_ACC` int(11) DEFAULT NULL,
  `NOTAFIN_ACCNAME` char(200) DEFAULT NULL,
  `ACCRCVGIRO_ACC` int(11) DEFAULT NULL,
  `ACCRCVGIRO_ACCNAME` char(200) DEFAULT NULL,
  `DEBTGIRO_ACC` int(11) DEFAULT NULL,
  `DEBTGIRO_ACCNAME` char(200) DEFAULT NULL,
  `INV_COAPPN` int(11) DEFAULT NULL,
  `INV_COANAMEPPN` char(200) DEFAULT NULL,
  `PRCGA_COASUPPLY` int(11) DEFAULT NULL,
  `PRCGA_COADEBT` int(11) DEFAULT NULL,
  `PRCGA_COAPPN` int(11) DEFAULT NULL,
  `PRCGA_COACOST` int(11) DEFAULT NULL,
  `PRCGA_COADISC` int(11) DEFAULT NULL,
  `PRCGA_COANAMESUPPLY` char(200) DEFAULT NULL,
  `PRCGA_COANAMEDEBT` char(200) DEFAULT NULL,
  `PRCGA_COANAMEPPN` char(200) DEFAULT NULL,
  `PRCGA_COANAMECOST` char(200) DEFAULT NULL,
  `PRCGA_COANAMEDISC` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_settings`
--

INSERT INTO `other_settings` (`OS_ID`, `BRANCH_ID`, `PRINT_BANKINVOICE`, `PRC_COA`, `PRC_COAMAIN`, `PRC_COASUB`, `PRC_COAAG`, `PRC_COADISC`, `PRC_COAPPN`, `PRC_COACOST`, `PRC_COANAME`, `PRC_COAMAINNAME`, `PRC_COASUBNAME`, `PRC_COANAMEAG`, `PRC_COANAMEDISC`, `PRC_COANAMEPPN`, `PRC_COANAMECOST`, `NOTAFIN_ACC`, `NOTAFIN_ACCNAME`, `ACCRCVGIRO_ACC`, `ACCRCVGIRO_ACCNAME`, `DEBTGIRO_ACC`, `DEBTGIRO_ACCNAME`, `INV_COAPPN`, `INV_COANAMEPPN`, `PRCGA_COASUPPLY`, `PRCGA_COADEBT`, `PRCGA_COAPPN`, `PRCGA_COACOST`, `PRCGA_COADISC`, `PRCGA_COANAMESUPPLY`, `PRCGA_COANAMEDEBT`, `PRCGA_COANAMEPPN`, `PRCGA_COANAMECOST`, `PRCGA_COANAMEDISC`) VALUES
(1, 1, '', 241, NULL, NULL, 206, 242, 174, 246, 'HPP/PEMBELIAN - HO', NULL, NULL, 'HUTANG USAHA', 'POTONGAN PEMBELIAN - HO', 'PPN MASUKAN - HO', 'ONGKOS KIRIM PEMBELIAN - HO', 1, 'KAS HO', 144, 'PIUTANG GIRO', 208, 'HUTANG GIRO', 216, 'HUTANG PAJAK PPN KELUARAN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 3, 'BANK A SURABAYA A/C 098765 A/N ATAS NAMA', 1190, NULL, NULL, 206, 1191, 1150, 1195, 'HPP/PEMBELIAN - MATCH', NULL, NULL, 'HUTANG USAHA', 'POTONGAN PEMBELIAN - MATCH', 'PPN MASUKAN - MATCH', 'ONGKOS KIRIM PEMBELIAN - MATCH', 1125, 'NOTA GANTUNG MATCH', NULL, NULL, NULL, NULL, 1877, 'HUTANG PAJAK PPN KELUARAN MATCH', 1190, 206, 1150, 1195, 1191, 'HPP/PEMBELIAN - MATCH', 'HUTANG USAHA', 'PPN MASUKAN - MATCH', 'ONGKOS KIRIM PEMBELIAN - MATCH', 'POTONGAN PEMBELIAN - MATCH'),
(3, 5, '', 58, NULL, NULL, 322, 59, 25, 63, 'HPP/PEMBELIAN - WIKLAN', NULL, NULL, 'HUTANG USAHA WIKLAN', 'POTONGAN PEMBELIAN - WIKLAN', 'PPN MASUKAN - WIKLAN', 'ONGKOS KIRIM PEMBELIAN - WIKLAN', NULL, NULL, NULL, NULL, NULL, NULL, 323, 'HUTANG PAJAK PPN KELUARAN WIKLAN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 6, NULL, 1682, 1878, 1879, 1673, 1683, 1659, 1687, 'HPP/PEMBELIAN - WPI', 'HUTANG USAHA WPI MAIN', 'HUTANG USAHA WPI SUB', 'HUTANG USAHA WPI', 'POTONGAN PEMBELIAN - WPI', 'PPN MASUKAN - WPI', 'ONGKOS KIRIM PEMBELIAN - WPI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parent_chart`
--

CREATE TABLE `parent_chart` (
  `PAR_ID` int(11) NOT NULL,
  `PARTP_ID` int(11) DEFAULT NULL,
  `PAR_ACC` char(30) DEFAULT NULL,
  `PAR_ACCNAME` char(100) DEFAULT NULL,
  `PAR_TYPE` char(100) DEFAULT NULL,
  `PAR_INFO` varchar(1024) DEFAULT NULL,
  `PAR_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_chart`
--

INSERT INTO `parent_chart` (`PAR_ID`, `PARTP_ID`, `PAR_ACC`, `PAR_ACCNAME`, `PAR_TYPE`, `PAR_INFO`, `PAR_DTSTS`) VALUES
(17, 12, '1110000', 'KAS', NULL, 'Kas Induk', '1'),
(18, 12, '1130000', 'PIUTANG', NULL, '-', '1'),
(19, 12, '1140000', 'PIUTANG LAIN-LAIN', NULL, '-', '1'),
(20, 12, '1150000', 'PERSEDIAAN', NULL, '-', '1'),
(21, 12, '1160000', 'PEMBAYARAN DIMUKA', NULL, '-', '1'),
(22, 12, '1170000', 'BIAYA DIBAYAR DIMUKA', NULL, '-', '1'),
(23, 12, '1180000', 'UANG MUKA PEMBELIAN', NULL, '-', '1'),
(24, 12, '1200000', 'AKTIVA TETAP (NETTO)', NULL, '-', '1'),
(25, 12, '1210000', 'AKUMULASI PENYUSUTAN', NULL, '-', '1'),
(26, 14, '2140000', 'HUTANG USAHA LAIN-LAIN', '', '', '1'),
(27, 15, '3110000', 'MODAL', '', '', '1'),
(28, 15, '3120000', 'LABA/RUGI', '', '', '1'),
(29, 16, '4110000', 'PENDAPATAN', '', '', '1'),
(30, 16, '4120000', 'POTONGAN/DISCOUNT PENJUALAN', '', '', '1'),
(31, 16, '4130000', 'RETURN PENJUALAN', '', '', '1'),
(32, 16, '4140000', 'POTONGAN/DISCOUNT RETURN JUAL', '', '', '1'),
(33, 16, '4150000', 'PENDAPATAN USAHA LAINNYA', '', '', '1'),
(34, 13, '5110000', 'BEBAN POKOK PENDAPATAN', '', '', '1'),
(35, 13, '6110000', 'BIAYA KANTOR', '', '', '1'),
(36, 13, '6120000', 'BEBAN UMUM DAN ADMINISTRASI', '', '', '1'),
(37, 13, '6130000', 'BIAYA WS', '', '', '1'),
(38, 13, '6170000', 'BIAYA LISTRIK PROYEK', '', '', '1'),
(39, 13, '6180000', 'BIAYA PLN KANTOR', '', '', '1'),
(40, 13, '6190000', 'BIAYA POSTEL', '', '', '1'),
(41, 13, '6200000', 'BIAYA PDAM', '', '', '1'),
(42, 13, '6210000', 'BIAYA BBM/SOLAR', '', '', '1'),
(43, 13, '6220000', 'BIAYA TOL', '', '', '1'),
(44, 13, '6230000', 'BIAYA BANK', '', '', '1'),
(45, 13, '6240000', 'BIAYA PAJAK', '', '', '1'),
(46, 13, '6250000', 'BIAYA PAJAK / SUMBANGAN/ IURAN', '', '', '1'),
(47, 13, '6260000', 'BIAYA ASURANSI', '', '', '1'),
(48, 13, '6270000', 'BIAYA PEMELIHARAAN', '', '', '1'),
(49, 13, '6280000', 'BIAYA PENYUSUTAN', '', '', '1'),
(50, 13, '7110000', 'PENDAPATAN DILUAR USAHA', '', '', '1'),
(51, 13, '8110000', 'BIAYA DILUAR USAHA', '', '', '1'),
(52, 13, '9110000', 'PEMBULATAN', '', '', '1'),
(53, 12, '1120000', 'BANK', NULL, '-', '1'),
(54, 14, '2110000', 'HUTANG BANK', NULL, '-', '1'),
(55, 14, '2120000', 'HUTANG USAHA', NULL, '-', '1'),
(56, 14, '2130000', 'HUTANG PAJAK', NULL, '-', '1'),
(57, 13, '6140000', 'BIAYA PERIJINAN', NULL, '-', '1'),
(58, 13, '6150000', 'SEWA LAHAN', NULL, '-', '1'),
(59, 13, '6160000', 'BIAYA TUKANG', NULL, '-', '1');

-- --------------------------------------------------------

--
-- Table structure for table `parent_type`
--

CREATE TABLE `parent_type` (
  `PARTP_ID` int(11) NOT NULL,
  `PARTP_NAME` char(200) DEFAULT NULL,
  `PARTP_STS` char(1) DEFAULT NULL,
  `PARTP_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_type`
--

INSERT INTO `parent_type` (`PARTP_ID`, `PARTP_NAME`, `PARTP_STS`, `PARTP_DTSTS`) VALUES
(12, 'AKTIVA LANCAR', '1', '1'),
(13, 'BIAYA', '2', '1'),
(14, 'KEWAJIBAN LANCAR', '3', '1'),
(15, 'MODAL', '5', '1'),
(16, 'PENDAPATAN', '4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `permitdoc_det`
--

CREATE TABLE `permitdoc_det` (
  `PDOC_ID` int(11) NOT NULL,
  `PAPPR_ID` int(11) DEFAULT NULL,
  `PDOC_CODE` char(30) DEFAULT NULL,
  `PDOC_DATESTART` date DEFAULT NULL,
  `PDOC_DATEEND` date DEFAULT NULL,
  `PDOC_DATERCV` date DEFAULT NULL,
  `PDOC_RCVNUM` char(100) DEFAULT NULL,
  `PDOC_DTSTS` char(1) DEFAULT NULL,
  `PDOC_INFO` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permitpay_det`
--

CREATE TABLE `permitpay_det` (
  `PPAY_ID` int(11) NOT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `PAPPR_ID` int(11) DEFAULT NULL,
  `PPAY_CODE` char(30) DEFAULT NULL,
  `PPAY_INFO` varchar(1024) DEFAULT NULL,
  `PPAY_AMOUNT` bigint(20) DEFAULT NULL,
  `PPAY_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `poga_details`
--

CREATE TABLE `poga_details` (
  `PGDET_ID` int(11) NOT NULL,
  `POGA_ID` int(11) DEFAULT NULL,
  `GD_ID` int(11) DEFAULT NULL,
  `PGDET_QTYUNIT` int(11) DEFAULT NULL,
  `PGDET_SUB` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poga_details`
--

INSERT INTO `poga_details` (`PGDET_ID`, `POGA_ID`, `GD_ID`, `PGDET_QTYUNIT`, `PGDET_SUB`) VALUES
(1, 1, 1, 10, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `po_details`
--

CREATE TABLE `po_details` (
  `PODET_ID` int(11) NOT NULL,
  `PO_ID` int(11) DEFAULT NULL,
  `GD_ID` int(11) DEFAULT NULL,
  `PODET_QTYUNIT` decimal(10,2) DEFAULT NULL,
  `PODET_SUB` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po_details`
--

INSERT INTO `po_details` (`PODET_ID`, `PO_ID`, `GD_ID`, `PODET_QTYUNIT`, `PODET_SUB`) VALUES
(2, 1, 1, '2.00', '20000.00'),
(3, 2, 2, '3.00', '30000.00'),
(4, 3, 3, '1.00', '1000000.00'),
(5, 4, 3, '1.00', '1000000.00'),
(6, 5, 3, '5.00', '5000000.00'),
(7, 6, 1, '1.00', '10000.00'),
(8, 7, 4, '1.00', '1000000.00'),
(9, 8, 5, '10.00', '100000.00'),
(10, 6, 1, '1.00', '10000.00'),
(11, 6, 1, '1.00', '10000.00'),
(12, 6, 1, '1.00', '10000.00'),
(13, 6, 1, '1.00', '10000.00'),
(14, 6, 1, '1.00', '10000.00'),
(15, 6, 1, '1.00', '10000.00'),
(16, 6, 1, '1.00', '10000.00'),
(17, 6, 1, '1.00', '10000.00'),
(18, 6, 1, '1.00', '10000.00'),
(19, 9, 1, '6.00', '60000.00'),
(20, 10, 6, '9.00', '1800000.00'),
(22, 12, 7, '1.00', '10000000.00'),
(23, 11, 7, '1.00', '10000000.00');

-- --------------------------------------------------------

--
-- Table structure for table `prcga_details`
--

CREATE TABLE `prcga_details` (
  `PRCGADET_ID` int(11) NOT NULL,
  `PRCGA_ID` int(11) DEFAULT NULL,
  `GD_ID` int(11) DEFAULT NULL,
  `PRCGADET_QTY` int(11) DEFAULT NULL,
  `PRCGADET_SUB` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prcga_details`
--

INSERT INTO `prcga_details` (`PRCGADET_ID`, `PRCGA_ID`, `GD_ID`, `PRCGADET_QTY`, `PRCGADET_SUB`) VALUES
(1, 1, 1, 10, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `prcga_ret`
--

CREATE TABLE `prcga_ret` (
  `RTPRCGA_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `CURR_ID` int(11) DEFAULT NULL,
  `PRCGA_ID` int(11) DEFAULT NULL,
  `RTPRCGA_CODE` char(30) DEFAULT NULL,
  `RTPRCGA_DATE` date DEFAULT NULL,
  `RTPRCGA_INFO` varchar(1024) DEFAULT NULL,
  `RTPRCGA_STS` char(1) DEFAULT NULL,
  `RTPRCGA_SUB` bigint(20) DEFAULT NULL,
  `RTPRCGA_DISC` int(11) DEFAULT NULL,
  `RTPRCGA_PPN` int(11) DEFAULT NULL,
  `RTPRCGA_COST` int(11) DEFAULT NULL,
  `RTPRCGA_GTOTAL` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prc_details`
--

CREATE TABLE `prc_details` (
  `PRCDET_ID` int(11) NOT NULL,
  `PRC_ID` int(11) DEFAULT NULL,
  `GD_ID` int(11) DEFAULT NULL,
  `PRCDET_QTY` decimal(10,2) DEFAULT NULL,
  `PRCDET_SUB` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prc_details`
--

INSERT INTO `prc_details` (`PRCDET_ID`, `PRC_ID`, `GD_ID`, `PRCDET_QTY`, `PRCDET_SUB`) VALUES
(1, 1, 1, '2.00', '20000.00'),
(2, 2, 2, '3.00', '30000.00'),
(3, 3, 3, '1.00', '1000000.00'),
(4, 4, 3, '1.00', '1000000.00'),
(5, 5, 3, '5.00', '5000000.00'),
(6, 6, 4, '1.00', '1000000.00'),
(7, 7, 5, '10.00', '100000.00'),
(8, 8, 6, '9.00', '1800000.00');

-- --------------------------------------------------------

--
-- Table structure for table `procurement_ret`
--

CREATE TABLE `procurement_ret` (
  `RTPRC_ID` int(11) NOT NULL,
  `CURR_ID` int(11) DEFAULT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `PRC_ID` int(11) DEFAULT NULL,
  `RTPRC_CODE` char(30) DEFAULT NULL,
  `RTPRC_DATE` date DEFAULT NULL,
  `RTPRC_TERM` char(30) DEFAULT NULL,
  `RTPRC_INFO` varchar(1024) DEFAULT NULL,
  `RTPRC_STS` char(1) DEFAULT NULL,
  `RTPRC_SUB` bigint(20) DEFAULT NULL,
  `RTPRC_DISC` int(11) DEFAULT NULL,
  `RTPRC_PPN` int(11) DEFAULT NULL,
  `RTPRC_COST` int(11) DEFAULT NULL,
  `RTPRC_GTOTAL` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procurement_ret`
--

INSERT INTO `procurement_ret` (`RTPRC_ID`, `CURR_ID`, `USER_ID`, `BRANCH_ID`, `PRC_ID`, `RTPRC_CODE`, `RTPRC_DATE`, `RTPRC_TERM`, `RTPRC_INFO`, `RTPRC_STS`, `RTPRC_SUB`, `RTPRC_DISC`, `RTPRC_PPN`, `RTPRC_COST`, `RTPRC_GTOTAL`) VALUES
(1, NULL, NULL, NULL, NULL, 'RB/1912/38976', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, 'RB/1912/12543', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `retprcga_details`
--

CREATE TABLE `retprcga_details` (
  `RTPRCGADET_ID` int(11) NOT NULL,
  `GD_ID` int(11) DEFAULT NULL,
  `RTPRCGA_ID` int(11) DEFAULT NULL,
  `RTPRCGADET_QTY` int(11) DEFAULT NULL,
  `RTPRCGADET_SUB` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `retprc_details`
--

CREATE TABLE `retprc_details` (
  `RETPRCDET_ID` int(11) NOT NULL,
  `RTPRC_ID` int(11) DEFAULT NULL,
  `GD_ID` int(11) DEFAULT NULL,
  `RETPRCDET_QTY` int(11) DEFAULT NULL,
  `RETPRCDET_SUB` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `retusgga_details`
--

CREATE TABLE `retusgga_details` (
  `RTUSGGADET_ID` int(11) NOT NULL,
  `GD_ID` int(11) DEFAULT NULL,
  `RTUSGGA_ID` int(11) DEFAULT NULL,
  `RTUSGGADET_QTY` int(11) DEFAULT NULL,
  `RTUSGGADET_SUB` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `retusg_details`
--

CREATE TABLE `retusg_details` (
  `RETUSGDET_ID` int(11) NOT NULL,
  `RTUSG_ID` int(11) DEFAULT NULL,
  `GD_ID` int(11) DEFAULT NULL,
  `RETUSGDET_QTY` int(11) DEFAULT NULL,
  `RETUSGDET_SUB` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tax_inv_details`
--

CREATE TABLE `tax_inv_details` (
  `TINVDET_ID` int(11) NOT NULL,
  `TINV_ID` int(11) DEFAULT NULL,
  `INVDET_ID` int(11) DEFAULT NULL,
  `TINVDET_SUB` bigint(20) DEFAULT NULL,
  `TINVDET_PPN` bigint(20) DEFAULT NULL,
  `TINVDET_PPH` bigint(20) DEFAULT NULL,
  `TINVDET_SUM` bigint(20) DEFAULT NULL,
  `TINVDET_STS` char(1) DEFAULT NULL,
  `TINVDET_INFO` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trx_adjustment`
--

CREATE TABLE `trx_adjustment` (
  `ADJ_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `GD_ID` int(11) DEFAULT NULL,
  `ADJ_CODE` char(30) DEFAULT NULL,
  `ADJ_DATE` date DEFAULT NULL,
  `ADJ_INFO` varchar(1024) DEFAULT NULL,
  `ADJ_OLDQTY` int(11) DEFAULT NULL,
  `ADJ_CURQTY` int(11) DEFAULT NULL,
  `ADJ_DIFF` int(11) DEFAULT NULL,
  `ADJ_PLUS` int(11) DEFAULT NULL,
  `ADJ_MINUS` int(11) DEFAULT NULL,
  `ADJ_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_adjustment`
--

INSERT INTO `trx_adjustment` (`ADJ_ID`, `USER_ID`, `BRANCH_ID`, `GD_ID`, `ADJ_CODE`, `ADJ_DATE`, `ADJ_INFO`, `ADJ_OLDQTY`, `ADJ_CURQTY`, `ADJ_DIFF`, `ADJ_PLUS`, `ADJ_MINUS`, `ADJ_DTSTS`) VALUES
(1, NULL, 1, NULL, 'PS/2104/000001', '2021-04-10', NULL, NULL, NULL, NULL, NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `trx_adj_ga`
--

CREATE TABLE `trx_adj_ga` (
  `ADJGA_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `GD_ID` int(11) DEFAULT NULL,
  `ADJGA_CODE` char(30) DEFAULT NULL,
  `ADJGA_DATE` date DEFAULT NULL,
  `ADJGA_INFO` varchar(1024) DEFAULT NULL,
  `ADJGA_OLDQTY` int(11) DEFAULT NULL,
  `ADJGA_CURQTY` int(11) DEFAULT NULL,
  `ADJGA_PLUS` int(11) DEFAULT NULL,
  `ADJGA_MINUS` int(11) DEFAULT NULL,
  `ADJGA_DIFF` int(11) DEFAULT NULL,
  `ADJGA_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trx_approvalbill`
--

CREATE TABLE `trx_approvalbill` (
  `APPR_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `PLC_ID` int(11) DEFAULT NULL,
  `BB_ID` int(11) DEFAULT NULL,
  `LOC_ID` int(11) DEFAULT NULL,
  `CUST_ID` int(11) DEFAULT NULL,
  `SALES_ID` int(11) DEFAULT NULL,
  `CURR_ID` int(11) DEFAULT NULL,
  `APPR_CODE` char(30) DEFAULT NULL,
  `APPR_STS` char(1) DEFAULT NULL,
  `APPR_OWN` char(20) DEFAULT NULL,
  `APPR_BRANCHID` int(11) DEFAULT NULL,
  `APPR_BRANCH` char(50) DEFAULT NULL,
  `APPR_BRCNAME` char(100) DEFAULT NULL,
  `APPR_PO` char(50) DEFAULT NULL,
  `APPR_DATE` date DEFAULT NULL,
  `APPR_RECOV` varchar(1024) DEFAULT NULL,
  `APPR_INFO` varchar(2048) DEFAULT NULL,
  `APPR_HEIGHT` decimal(10,2) DEFAULT NULL,
  `APPR_WIDTH` decimal(10,2) DEFAULT NULL,
  `APPR_LENGTH` decimal(10,2) DEFAULT NULL,
  `APPR_SUMSIZE` decimal(10,2) DEFAULT NULL,
  `APPR_SIDE` char(10) DEFAULT NULL,
  `APPR_PLCSUM` char(10) DEFAULT NULL,
  `APPR_CONTRACT_START` date DEFAULT NULL,
  `APPR_CONTRACT_END` date DEFAULT NULL,
  `APPR_VISUAL` varchar(1024) DEFAULT NULL,
  `APPR_PAYMENT_TYPE` char(100) DEFAULT NULL,
  `APPR_BRANCH_INCOME` bigint(20) DEFAULT NULL,
  `APPR_DPP_INCOME` bigint(20) DEFAULT NULL,
  `APPR_BBTAX` bigint(20) DEFAULT NULL,
  `APPR_DISC_PERC1` decimal(10,2) DEFAULT NULL,
  `APPR_DISC_PERC2` decimal(10,2) DEFAULT NULL,
  `APPR_DISC_SUM1` int(11) DEFAULT NULL,
  `APPR_DISC_SUM2` int(11) DEFAULT NULL,
  `APPR_PPN_PERC` decimal(10,2) DEFAULT NULL,
  `APPR_PPH_PERC` decimal(10,2) DEFAULT NULL,
  `APPR_PPN_SUM` int(11) DEFAULT NULL,
  `APPR_PPH_SUM` int(11) DEFAULT NULL,
  `APPR_TOT_INCOME` bigint(20) DEFAULT NULL,
  `APPR_JOBDESC` varchar(3072) DEFAULT NULL,
  `APPR_SUB_DSC` bigint(20) DEFAULT NULL,
  `APPR_SUB_PPN` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_approvalbill`
--

INSERT INTO `trx_approvalbill` (`APPR_ID`, `USER_ID`, `BRANCH_ID`, `PLC_ID`, `BB_ID`, `LOC_ID`, `CUST_ID`, `SALES_ID`, `CURR_ID`, `APPR_CODE`, `APPR_STS`, `APPR_OWN`, `APPR_BRANCHID`, `APPR_BRANCH`, `APPR_BRCNAME`, `APPR_PO`, `APPR_DATE`, `APPR_RECOV`, `APPR_INFO`, `APPR_HEIGHT`, `APPR_WIDTH`, `APPR_LENGTH`, `APPR_SUMSIZE`, `APPR_SIDE`, `APPR_PLCSUM`, `APPR_CONTRACT_START`, `APPR_CONTRACT_END`, `APPR_VISUAL`, `APPR_PAYMENT_TYPE`, `APPR_BRANCH_INCOME`, `APPR_DPP_INCOME`, `APPR_BBTAX`, `APPR_DISC_PERC1`, `APPR_DISC_PERC2`, `APPR_DISC_SUM1`, `APPR_DISC_SUM2`, `APPR_PPN_PERC`, `APPR_PPH_PERC`, `APPR_PPN_SUM`, `APPR_PPH_SUM`, `APPR_TOT_INCOME`, `APPR_JOBDESC`, `APPR_SUB_DSC`, `APPR_SUB_PPN`) VALUES
(1, 2, 1, 1, 1, 1, 1, 3, 1, 'AB/1809/000001', '1', '0', 0, '', 'Holding', '', '2018-09-18', 'Kolom Free recovering', '', NULL, '8.00', '4.00', '32.00', 'Depan', '1', '2018-09-18', '2018-11-18', 'Kolom Materi Visual', NULL, 0, 100000000, 10000000, '10.00', '0.00', 10000000, 0, '10.00', '2.00', 9000000, 1800000, 107200000, NULL, 90000000, 109000000),
(2, 4, 5, 1, 1, 1, 1, 4, 1, 'AB/1809/000001', '1', '1', 0, '', 'Wiklan', '', '2018-09-20', 'Kolom free recovering', 'Kolom keterangan tambahan', NULL, '10.00', '5.00', '50.00', 'depan', '1', '2018-09-20', '2018-11-20', 'Kolom materi visual', NULL, 0, 100000000, 10000000, '0.00', '0.00', 0, 0, '10.00', '2.00', 10000000, 2000000, 118000000, NULL, 100000000, 120000000),
(3, 7, 3, 1, 1, 1, 1, 1, 1, 'AB/1809/000001', '1', '1', 0, '', 'Match Advertising', '', '2018-09-26', 'Kolom free recovering', 'Kolom keterangan tambahan', NULL, '8.00', '6.00', '48.00', 'depan', '1', '2018-09-26', '2018-11-26', 'Kolom materi visual', NULL, 0, 120000000, 10000000, '0.00', '0.00', 0, 0, '10.00', '2.00', 12000000, 2400000, 139600000, NULL, 120000000, 142000000),
(4, 7, 3, 1, 1, 1, 1, 1, 1, 'AB/1809/000002', '1', '1', 0, '', 'Match Advertising', '', '2018-09-26', 'Kolom info free recovering', 'info kolom keterangan tambahan', NULL, '8.00', '4.00', '32.00', 'depan', '1', '2018-09-26', '2018-11-29', 'kolom materi ', NULL, 0, 100000000, 10000000, '0.00', '0.00', 0, 0, '10.00', '2.00', 10000000, 2000000, 118000000, NULL, 100000000, 120000000),
(5, 6, 3, 1, 1, 1, 1, 1, 1, 'AB/1809/000003', '1', '1', 0, '', 'Match Advertising', '', '2018-09-30', 'Kolom free recovering', 'Kolom keterangan tambahan', NULL, '8.00', '4.00', '32.00', 'depan', '1', '2018-09-30', '2018-11-30', 'kolom materi visual', NULL, 0, 100000, NULL, '0.00', '0.00', 0, 0, NULL, NULL, 10000, 2000, 108000, NULL, 100000, 110000),
(6, 6, 3, NULL, NULL, NULL, 1, 1, 1, 'AB/1810/000001', '2', '1', NULL, NULL, 'Match Advertising', '', '2019-01-08', '', '', NULL, '0.00', '0.00', '0.00', '', '', '2019-01-08', '2019-01-08', '', NULL, NULL, 1000000, NULL, '0.00', '0.00', 0, 0, NULL, NULL, 0, 0, 1000000, NULL, 1000000, 1000000),
(7, 6, 3, 1, 1, 1, 1, 1, 1, 'AB/1810/000002', '2', '1', 0, '', 'Match Advertising', '', '2018-10-02', 'free 1x cetak, free 2x pasang', 'penggunaan media selama 1 bulan\r\n', NULL, '10.00', '5.00', '50.00', 'Depan', '1', '2018-11-08', '2018-12-07', 'tokopedia all brands', NULL, 0, 55000000, NULL, '0.00', '0.00', 0, 0, NULL, NULL, 5500000, 200000, 60300000, NULL, 55000000, 60500000),
(8, 9, 6, 1, 1, 1, 1, 5, 1, 'AB/1810/000001', '1', '1', 0, '', 'Wijaya Persada Indonesia', '', '2018-10-16', 'tes kolom', 'tes', NULL, '3.00', '4.00', '12.00', 'depan', '1', '2018-10-16', '2018-10-31', 'tes', NULL, 0, 1000000, 0, '0.00', '0.00', 0, 0, '10.00', '0.00', 100000, 0, 1100000, NULL, 1000000, 1100000),
(9, 6, 3, 1, 1, 1, 1, 1, 1, 'AB/1811/000001', '2', '1', NULL, NULL, 'Match Advertising', '123', '2018-11-05', 'aaaaa', 'aaaaa', NULL, '6.00', '4.00', '24.00', 'depan', '1', '2018-11-05', '2018-11-05', 'aaa', NULL, NULL, 1000000, NULL, '0.00', '0.00', 0, 0, NULL, NULL, 0, 0, 1000000, NULL, 1000000, 1000000),
(10, 9, 6, NULL, 1, 1, 1, 5, 1, 'AB/1811/000001', '1', '1', NULL, NULL, 'Wijaya Persada Indonesia', '', '2018-11-05', 'aaaaaa', 'aaaaaa', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-05', '2018-11-05', NULL, NULL, NULL, 1000000, NULL, '0.00', '0.00', 0, 0, NULL, NULL, 0, 0, 1000000, NULL, 1000000, 1000000),
(11, 6, 3, 1, 1, 1, 1, 1, 1, 'AB/1812/000001', '1', '1', NULL, NULL, 'Match Advertising', 'po09876543', '2018-12-04', 'Keteranga posisi recovering', 'Keterangan tambahan deskripis dll', NULL, '10.00', '5.00', '50.00', 'depan', '1', '2018-12-03', '2019-01-03', 'Visual baru', NULL, NULL, 30000000, NULL, '0.00', '0.00', 0, 0, NULL, NULL, 2000000, 100000, 31900000, NULL, 30000000, 32000000),
(12, 6, 3, 1, 1, 1, 1, 1, 1, 'AB/1812/000002', '2', '1', NULL, NULL, 'Match Advertising', '', '2018-12-20', 'tes notes batal posting', 'tes notes batal posting kolom ket tambahan', NULL, '8.00', '4.00', '32.00', 'depan', '1', '2018-12-14', '2019-01-14', 'materi visual', NULL, NULL, 12000000, NULL, '0.00', '0.00', 0, 0, NULL, NULL, 100000, 20000, 11100000, NULL, 11000000, 11100000),
(13, 5, 5, 1, 1, 2, 2, 4, 1, 'AB/1902/000001', '1', '1', 0, '', 'Wiklan', '', '2019-02-26', 'FREE CETAK DAN PASANG 1x DIAWAL', 'PENGGUNAAN MEDIA PLACEMENT JL. METRO TANJUNG BUNGA MAKASSAR', NULL, '5.00', '10.00', '50.00', 'depan', '1', '2019-03-11', '2019-03-17', '-', NULL, 0, 11000000, 0, '10.00', '0.00', 1100000, 0, '0.00', '0.00', 0, 0, 9900000, NULL, 9900000, 9900000),
(14, 5, 5, 1, 1, 3, 3, 4, 1, 'AB/1902/000002', '1', '1', 0, '', 'Wiklan', '', '2019-02-27', 'FREE PASANG 2x', 'PENGGUNAAN MEDIA PLACEMENT JL. A. YANI KEDIRI', NULL, '5.00', '10.00', '50.00', 'DEPAN', '1', '2019-03-01', '2019-06-30', '-', NULL, 0, 37500000, 0, '0.00', '0.00', 0, 0, '0.00', '0.00', 0, 0, 37500000, NULL, 37500000, 37500000),
(15, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, 'AB/1904/000001', '0', NULL, NULL, NULL, NULL, NULL, '2019-04-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 5, 5, 1, 1, 4, 4, 4, 1, 'AB/1905/000001', '1', '1', 0, '', 'Wiklan', '', '2019-05-06', 'INCLUDE CETAK DAN PEMASANGAN', 'PEMAKAIAN MEDIA GUBENG POJOK', NULL, '8.00', '16.00', '128.00', 'depan', '1', '2019-05-12', '2019-05-19', '', NULL, 0, 30840000, 0, '0.00', '0.00', 590000, 0, '0.00', '0.00', 0, 0, 30250000, NULL, 30250000, 30250000),
(17, 5, 5, 1, 1, 5, 4, 4, 1, 'AB/1905/000002', '1', '1', 0, '', 'Wiklan', '', '2019-05-06', 'INCLUDE CETAK DAN PEMASANGAN', 'PEMAKAIAN MEDIA MAYJEND SUNGKONO', NULL, '10.00', '5.00', '50.00', 'depan', '1', '2019-05-12', '2019-05-19', '', NULL, 0, 17250000, 0, '0.00', '0.00', 750000, 0, '0.00', '0.00', 0, 0, 16500000, NULL, 16500000, 16500000),
(18, 5, 5, 1, 1, 6, 4, 4, 1, 'AB/1905/000003', '1', '1', 0, '', 'Wiklan', '', '2019-05-06', 'INCLUDE CETAK DAN PEMASANGAN', 'PEMAKAIAN MEDIA PEREMPATAN SAMSAT MANYAR', NULL, '10.00', '5.00', '50.00', 'depan', '1', '2019-05-12', '2019-05-19', '', NULL, 0, 14000000, 0, '0.00', '0.00', 0, 0, '0.00', '0.00', 0, 0, 14000000, NULL, 14000000, 14000000),
(19, 5, 5, 1, 1, 8, 3, 4, 1, 'AB/1905/000004', '1', '1', 0, '', 'Wiklan', '', '2019-05-29', 'FREE 3X CETAK DAN 3X RECOVERING', 'FREE 3X CETAK DAN 3X RECOVERING', NULL, '5.00', '10.00', '50.00', 'DEPAN', '1', '2019-07-01', '2019-09-01', '-', NULL, 0, 60000000, 0, '0.00', '0.00', 0, 0, '0.00', '0.00', 0, 0, 60000000, NULL, 60000000, 60000000),
(20, 5, 5, NULL, 1, 5, 3, 4, 1, 'AB/1905/000005', '1', '1', 0, '', 'Wiklan', '', '2019-05-06', 'INCLUDE CETAK DAN PEMASANGAN', 'INCLUDE CETAK DAN PEMASANGAN', NULL, '10.00', '5.00', '50.00', 'DEPAN', '1', '2019-05-12', '2019-05-19', '', NULL, 0, 14000000, 0, '0.00', '0.00', 0, 0, '0.00', '0.00', 0, 0, 14000000, NULL, 14000000, 14000000),
(21, 10, 7, 1, 1, 7, 5, 6, 1, 'AB/1905/000001', '1', '1', 0, '', 'Raja Cahaya Prima', '', '2019-05-22', '-', 'PENGERJAAN LAMPU SOROT', NULL, '1.00', '1.00', '1.00', 'depan', '1', '2019-05-22', '2019-05-22', '-', NULL, 0, 1800000, 0, '0.00', '0.00', 0, 0, '0.00', '0.00', 0, 0, 1800000, NULL, 1800000, 1800000),
(22, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, 'AB/1905/000006', '0', NULL, NULL, NULL, NULL, NULL, '2019-05-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 5, 5, 1, 1, 9, 3, 4, 1, 'AB/1907/000001', '1', '1', 0, '', 'Wiklan', '', '2019-07-09', 'FREE CETAK DAN PASANG 1x', 'PENGGUNAAN MEDIA PLACEMENT JL TUPAREV CIREBON', NULL, '10.00', '5.00', '50.00', 'depan', '1', '2019-07-10', '2019-10-10', 'ALL PRODUCT BY AIR ASIA', NULL, 0, 67500000, 0, '0.00', '0.00', 0, 0, '0.00', '0.00', 0, 0, 67500000, NULL, 67500000, 67500000),
(24, 5, 5, 1, 1, 10, 3, 4, 1, 'AB/1907/000002', '1', '1', 0, '', 'Wiklan', '', '2019-07-11', 'FREE CETAK DAN PASANG 1x', 'PENGGUNAAN MEDIA PLACEMENT JL SETIA BUDI SEMARANG', NULL, '5.00', '10.00', '50.00', 'depan', '1', '2019-07-11', '2019-10-11', 'ALL PRODUCT BY AIR ASIA', NULL, 0, 60000000, 0, '0.00', '0.00', 0, 0, '0.00', '0.00', 0, 0, 60000000, NULL, 60000000, 60000000),
(25, 5, 5, 1, 1, 9, 3, 4, 1, 'AB/1907/000003', '1', '1', 0, '', 'Wiklan', '', '2019-07-30', 'RECOVERING LOKASI TUPAREV CIREBON, BIAYA TERMASUK CETAK DAN PEMASANGAN', 'RECOVERING LOKASI TUPAREV CIREBON, BIAYA TERMASUK CETAK DAN PEMASANGAN', NULL, '10.00', '5.00', '50.00', 'DEPAN', '1', '2019-07-30', '2019-10-10', 'AIR ASIA : BAHAGIANYA', NULL, 0, 1650000, 0, '0.00', '0.00', 0, 0, '0.00', '0.00', 0, 0, 1650000, NULL, 1650000, 1650000),
(26, 5, 5, NULL, 1, 11, 3, 4, 1, 'AB/1908/000001', '1', '1', 0, '', 'Wiklan', '', '2019-08-07', 'FREE PEMASANGAN', 'FREE PEMASANGAN', NULL, '6.00', '4.00', '24.00', 'DEPAN', '1', '2019-08-11', '2019-08-25', 'SAMPOERNA', NULL, 0, 7500000, 0, '0.00', '0.00', 0, 0, '0.00', '0.00', 0, 0, 7500000, NULL, 7500000, 7500000),
(27, 5, 5, 1, 1, 12, 6, 4, 1, 'AB/1908/000002', '1', '1', 0, '', 'Wiklan', '', '2019-08-13', 'FREE 1x PEMASANGAN', 'PEMAKAIAN MEDIA PLACEMENT SELAMA 1 BULAN LOKASI PANGSUD PROBOLINGGO', NULL, '10.00', '5.00', '50.00', 'DEPAN', '1', '2019-08-15', '2019-09-14', 'KEMENTRIAN', NULL, 0, 15000000, 0, '0.00', '0.00', 0, 0, '0.00', '0.00', 0, 0, 15000000, NULL, 15000000, 15000000);

-- --------------------------------------------------------

--
-- Table structure for table `trx_bankin`
--

CREATE TABLE `trx_bankin` (
  `BNK_ID` int(11) NOT NULL,
  `CURR_ID` int(11) DEFAULT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `BANK_ID` int(11) DEFAULT NULL,
  `CUST_ID` int(11) DEFAULT NULL,
  `CSTIN_ID` int(11) DEFAULT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `BNK_CODE` char(30) DEFAULT NULL,
  `BNK_DATE` date DEFAULT NULL,
  `BNK_INFO` varchar(1024) DEFAULT NULL,
  `BNK_STS` char(10) DEFAULT NULL,
  `BNK_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_bankin`
--

INSERT INTO `trx_bankin` (`BNK_ID`, `CURR_ID`, `USER_ID`, `BRANCH_ID`, `BANK_ID`, `CUST_ID`, `CSTIN_ID`, `COA_ID`, `BNK_CODE`, `BNK_DATE`, `BNK_INFO`, `BNK_STS`, `BNK_DTSTS`) VALUES
(1, 1, 6, 3, 1, 1, NULL, 1128, 'BM/1810/000001', '2018-10-01', 'kolom keterangan bank masuk', '1', NULL),
(2, 1, 1, 1, 1, NULL, NULL, 144, 'BM/1810/000001', '2018-10-03', 'tes giro masuk dari bank masuk', '1', NULL),
(3, 1, 1, 1, 1, NULL, NULL, 136, 'BM/1810/000002', '2018-10-18', 'aaaaaa', '1', NULL),
(4, 1, 6, 3, 1, NULL, NULL, 1127, 'BM/1901/000001', '2019-01-03', 'tes tanpa customer', '2', NULL),
(5, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'BM/2104/000001', '2021-04-10', NULL, '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trx_bankout`
--

CREATE TABLE `trx_bankout` (
  `BNKO_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `BANK_ID` int(11) DEFAULT NULL,
  `DEPT_ID` int(11) DEFAULT NULL,
  `CURR_ID` int(11) DEFAULT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `BNKO_CODE` char(30) DEFAULT NULL,
  `BNKO_DATE` date DEFAULT NULL,
  `BNKO_INFO` varchar(1024) DEFAULT NULL,
  `BNKO_STS` char(1) DEFAULT NULL,
  `BNKO_DTSTS` char(1) DEFAULT NULL,
  `BNKO_TAXHEADCODE` char(10) DEFAULT NULL,
  `BNKO_TAXCODE` char(30) DEFAULT NULL,
  `BNKO_APPR` char(30) DEFAULT NULL,
  `BNKO_LOC` char(30) DEFAULT NULL,
  `BNKO_SUPP` char(30) DEFAULT NULL,
  `BNKO_BUDGET` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_bankout`
--

INSERT INTO `trx_bankout` (`BNKO_ID`, `USER_ID`, `BRANCH_ID`, `BANK_ID`, `DEPT_ID`, `CURR_ID`, `COA_ID`, `BNKO_CODE`, `BNKO_DATE`, `BNKO_INFO`, `BNKO_STS`, `BNKO_DTSTS`, `BNKO_TAXHEADCODE`, `BNKO_TAXCODE`, `BNKO_APPR`, `BNKO_LOC`, `BNKO_SUPP`, `BNKO_BUDGET`) VALUES
(1, NULL, 3, NULL, NULL, NULL, NULL, 'BK/1810/000001', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 6, 3, 1, NULL, 1, 1128, 'BK/1810/000002', '2018-10-03', 'tes keterangan', '1', NULL, '', '', NULL, NULL, NULL, NULL),
(3, 1, 1, 1, NULL, 1, 208, 'BK/1810/000001', '2018-10-04', 'tes giro keluar dari bank keluar', '1', NULL, '', '', NULL, NULL, NULL, NULL),
(4, 1, 1, 1, NULL, 1, 136, 'BK/1810/000002', '2018-10-18', 'axzsxxa', '1', NULL, '', '', NULL, NULL, NULL, NULL),
(5, NULL, 3, NULL, NULL, NULL, NULL, 'BK/1812/000001', '2018-12-27', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, 3, 1, NULL, 1, 1127, 'BK/1901/000001', '2019-01-04', 'tes supplier', '2', NULL, '', '', NULL, NULL, '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trx_bapp`
--

CREATE TABLE `trx_bapp` (
  `BAPP_CODE` char(30) DEFAULT NULL,
  `BAPP_ID` int(11) NOT NULL,
  `APPR_ID` int(11) DEFAULT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `BAPP_DATE` date DEFAULT NULL,
  `BAPP_DATESTART` date DEFAULT NULL,
  `BAPP_DATEEND` date DEFAULT NULL,
  `BAPP_STS` char(1) DEFAULT NULL,
  `BAPP_DOC` varchar(1024) DEFAULT NULL,
  `BAPP_TYPE` varchar(1024) DEFAULT NULL,
  `BAPP_OLDTXT` char(250) DEFAULT NULL,
  `BAPP_NEWTXT` char(250) DEFAULT NULL,
  `BAPP_FINDATE` date DEFAULT NULL,
  `BAPP_PERIODSTART` date DEFAULT NULL,
  `BAPP_PERIODEND` date DEFAULT NULL,
  `BAPP_INFO` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_bapp`
--

INSERT INTO `trx_bapp` (`BAPP_CODE`, `BAPP_ID`, `APPR_ID`, `USER_ID`, `BRANCH_ID`, `BAPP_DATE`, `BAPP_DATESTART`, `BAPP_DATEEND`, `BAPP_STS`, `BAPP_DOC`, `BAPP_TYPE`, `BAPP_OLDTXT`, `BAPP_NEWTXT`, `BAPP_FINDATE`, `BAPP_PERIODSTART`, `BAPP_PERIODEND`, `BAPP_INFO`) VALUES
('BA/1809/000001', 1, 1, 2, 1, '2018-09-18', '2018-09-18', '2018-09-30', '0', 'Kolom dokumen bapp', 'Billboard ( 2018-09-18 - 2018-11-18 )', 'Kolom teks lama bapp', 'Kolom teks baru bapp', '2018-09-30', '2018-09-18', '2018-11-18', 'Kolom keterangan tambahan bapp'),
('BA/1810/000001', 2, 3, 6, 3, '2018-10-24', '2018-10-24', '2018-10-31', '0', 'a', 'a', 'a', 'a', '2018-10-31', '2018-09-26', '2018-11-26', 'a'),
('BA/1903/000001', 3, 13, 5, 5, '2019-03-11', '2019-03-11', '2019-03-11', '0', '', 'DOKUMEN BAPP', '', '', '2019-03-11', '2019-03-11', '2019-03-17', ''),
('BA/1904/000001', 4, NULL, NULL, 1, '2019-04-04', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('BA/1904/000001', 5, 14, 5, 5, '2019-04-04', '2019-04-04', '2019-04-04', '2', '', 'PENGGUNAAN MEDIA PLACEMENT SELAMA 3 BULAN', '', '', '2019-04-04', '2019-03-01', '2019-06-30', ''),
('BA/1905/000001', 6, 16, 5, 5, '2019-05-14', '2019-05-14', '2019-05-14', '2', '-', 'DOKUMEN BAPP', '-', '-', '2019-05-12', '2019-05-12', '2019-05-19', '-'),
('BA/1905/000002', 7, 17, 5, 5, '2019-05-14', '2019-05-14', '2019-05-14', '2', '-', 'DOKUMEN BAPP', '-', '-', '2019-05-12', '2019-05-12', '2019-05-19', '-'),
('BA/1905/000003', 8, 18, 5, 5, '2019-05-14', '2019-05-14', '2019-05-14', '2', '-', 'DOKUMEN BAPP', '-', '-', '2019-05-12', '2019-05-12', '2019-05-19', '-'),
('BA/1905/000001', 9, 21, 10, 7, '2019-05-22', '2019-05-22', '2019-05-22', '2', 'PENGERJAAN LAMPU SOROT', 'PENGERJAAN LAMPU SOROT', '-', '-', '2019-05-22', '2019-05-22', '2019-05-22', 'PENGERJAAN LAMPU SOROT 9 TITIK, @RP 200.000,-'),
('BA/1907/000001', 10, 23, 5, 5, '2019-07-11', '2019-07-11', '2019-07-11', '2', 'BAPP JALAN TUPAREV CIREBON', 'BAPP', 'AIR ASIA ALL PRODUCTS', 'AIR ASIA ALL PRODUCTS', '2019-07-11', '2019-07-10', '2019-10-10', 'BAPP JALAN TUPAREV CIREBON'),
('BA/1907/000002', 11, 24, 5, 5, '2019-07-29', '2019-07-26', '2019-07-29', '2', 'BAPP', 'BAPP', '-', 'AIR ASIA ALL BRANDS', '2019-07-26', '2019-07-11', '2019-10-11', 'BAPP SETIA BUDI SEMARANG, AIR ASIA ALL BRANDS'),
('BA/1907/000003', 12, 25, 5, 5, '2019-07-30', '2019-07-26', '2019-07-26', '2', 'BAPP RECOVERING TUPAREV', 'BAPP', 'AIR ASIA ALL BRANDS', 'AIR ASIA BAHAGIANYA', '2019-07-26', '2019-07-30', '2019-07-30', 'RECOVERING TUPAREV'),
('BA/1908/000001', 13, 26, 5, 5, '2019-08-12', '2019-08-12', '2019-08-12', '2', 'BAPP LOKASI JL DANAU TOBA MALANG', 'BAPP', '-', '-', '2019-08-11', '2019-08-11', '2019-08-25', 'BAPP LOKASI JL DANAU TOBA MALANG'),
('BA/1908/000002', 14, 27, 5, 5, '2019-08-21', '2019-08-18', '2019-08-21', '2', 'BAPP PANGSUD PROBOLINGGO MATERI KOMINFO', 'BAPP', 'KOMINFO', 'KOMINFO', '2019-08-21', '2019-08-15', '2019-09-14', 'BAPP PANGSUD PROBOLINGGO MATERI KOMINFO');

-- --------------------------------------------------------

--
-- Table structure for table `trx_bapplog`
--

CREATE TABLE `trx_bapplog` (
  `BALG_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `LOC_ID` int(11) DEFAULT NULL,
  `CUST_ID` int(11) DEFAULT NULL,
  `BALG_CODE` char(30) DEFAULT NULL,
  `BALG_CODEPRINT` char(30) DEFAULT NULL,
  `BALG_DATE` date DEFAULT NULL,
  `BALG_STS` char(1) DEFAULT NULL,
  `BALG_DEALER` char(200) DEFAULT NULL,
  `BALG_SIZE` char(200) DEFAULT NULL,
  `BALG_WORK` varchar(1024) DEFAULT NULL,
  `BALG_NOTE` varchar(1024) DEFAULT NULL,
  `BALG_WORKDATE` date DEFAULT NULL,
  `BALG_CONTRACTOR` char(50) DEFAULT NULL,
  `BALG_LOGISTIC` char(50) DEFAULT NULL,
  `BALG_PROD` char(50) DEFAULT NULL,
  `BALG_PRINTTYPE` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_bapplog`
--

INSERT INTO `trx_bapplog` (`BALG_ID`, `USER_ID`, `BRANCH_ID`, `LOC_ID`, `CUST_ID`, `BALG_CODE`, `BALG_CODEPRINT`, `BALG_DATE`, `BALG_STS`, `BALG_DEALER`, `BALG_SIZE`, `BALG_WORK`, `BALG_NOTE`, `BALG_WORKDATE`, `BALG_CONTRACTOR`, `BALG_LOGISTIC`, `BALG_PROD`, `BALG_PRINTTYPE`) VALUES
(1, 1, 1, 1, 1, 'B1/1810/000001', NULL, '2018-10-22', '1', 'tes dealer', '4x8 horizontal', 'recovering', 'tes', '2018-10-22', 'frengky', 'diana', 'fitri', 'Recovering'),
(2, 6, 3, 1, 1, 'B1/1812/000001', NULL, '2018-12-13', '0', 'tes kolom dealer', 'tes kolom ukuran', 'tes kolom pekerjaan', 'tes kolom catatan', '2018-12-13', 'wiperindo', 'Nur Roichah', 'Choiri', 'Recovering');

-- --------------------------------------------------------

--
-- Table structure for table `trx_brc_ppn`
--

CREATE TABLE `trx_brc_ppn` (
  `BPPN_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `BPPN_CODE` char(30) DEFAULT NULL,
  `BPPN_DATE` date DEFAULT NULL,
  `BPPN_STARTDATE` date DEFAULT NULL,
  `BPPN_ENDDATE` date DEFAULT NULL,
  `BPPN_INFO` varchar(1024) DEFAULT NULL,
  `BPPN_STS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trx_budget`
--

CREATE TABLE `trx_budget` (
  `BUD_ID` int(11) NOT NULL,
  `CURR_ID` int(11) DEFAULT NULL,
  `DEPT_ID` int(11) DEFAULT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `BUD_CODE` char(30) DEFAULT NULL,
  `BUD_DATE` date DEFAULT NULL,
  `BUD_ADDRESS` varchar(1024) DEFAULT NULL,
  `BUD_LOC` char(30) DEFAULT NULL,
  `BUD_APPR` char(30) DEFAULT NULL,
  `BUD_PROJECT` char(10) DEFAULT NULL,
  `BUD_INFO` varchar(1024) DEFAULT NULL,
  `BUD_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trx_cash_in`
--

CREATE TABLE `trx_cash_in` (
  `CSH_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `CURR_ID` int(11) DEFAULT NULL,
  `CUST_ID` int(11) DEFAULT NULL,
  `CSTIN_ID` int(11) DEFAULT NULL,
  `CSH_CODE` char(30) DEFAULT NULL,
  `CSH_DATE` date DEFAULT NULL,
  `CSH_INFO` varchar(1024) DEFAULT NULL,
  `CSH_STS` char(10) DEFAULT NULL,
  `CSH_DTSTS` char(1) DEFAULT NULL,
  `CSH_ACC` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_cash_in`
--

INSERT INTO `trx_cash_in` (`CSH_ID`, `USER_ID`, `BRANCH_ID`, `COA_ID`, `CURR_ID`, `CUST_ID`, `CSTIN_ID`, `CSH_CODE`, `CSH_DATE`, `CSH_INFO`, `CSH_STS`, `CSH_DTSTS`, `CSH_ACC`) VALUES
(1, 6, 3, 1124, 1, NULL, NULL, 'KM/1809/000001', '2018-09-26', 'kolom info induk kas masuk', '1', NULL, '1110002 - KAS MATCH'),
(2, 6, 3, 1124, 1, NULL, NULL, 'KM/1810/000001', '2018-10-02', 'gjugjugugug', '2', NULL, '1110002 - KAS MATCH');

-- --------------------------------------------------------

--
-- Table structure for table `trx_cash_out`
--

CREATE TABLE `trx_cash_out` (
  `CSHO_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `DEPT_ID` int(11) DEFAULT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `CURR_ID` int(11) DEFAULT NULL,
  `CSHO_CODE` char(30) DEFAULT NULL,
  `CSHO_DATE` date DEFAULT NULL,
  `CSHO_INFO` varchar(1024) DEFAULT NULL,
  `CSHO_STS` char(1) DEFAULT NULL,
  `CSHO_DTSTS` char(1) DEFAULT NULL,
  `CSHO_TAXHEADCODE` char(10) DEFAULT NULL,
  `CSHO_TAXCODE` char(30) DEFAULT NULL,
  `CSHO_APPR` char(30) DEFAULT NULL,
  `CSHO_SUPP` char(30) DEFAULT NULL,
  `CSHO_BUDGET` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_cash_out`
--

INSERT INTO `trx_cash_out` (`CSHO_ID`, `USER_ID`, `BRANCH_ID`, `DEPT_ID`, `COA_ID`, `CURR_ID`, `CSHO_CODE`, `CSHO_DATE`, `CSHO_INFO`, `CSHO_STS`, `CSHO_DTSTS`, `CSHO_TAXHEADCODE`, `CSHO_TAXCODE`, `CSHO_APPR`, `CSHO_SUPP`, `CSHO_BUDGET`) VALUES
(1, 6, 3, NULL, 1124, 1, 'KK/1809/000001', '2018-09-26', 'Kolom info kas keluar induk', '1', NULL, '', '', NULL, NULL, NULL),
(2, 6, 3, NULL, 1124, 1, 'KK/1810/000001', '2018-10-02', 'bnbnbnbnbn', '1', NULL, '', '', NULL, NULL, NULL),
(3, 1, 1, NULL, 1, 1, 'KK/1810/000001', '2018-10-25', 'ertyuio', '2', NULL, '', '', NULL, '1', NULL),
(4, 6, 3, NULL, 1124, 1, 'KK/1901/000001', '2019-01-04', 'tessupp', '2', NULL, '', '', NULL, '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trx_giro_in`
--

CREATE TABLE `trx_giro_in` (
  `GRIN_ID` int(11) NOT NULL,
  `BANK_ID` int(11) DEFAULT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `GRIN_CODE` char(30) DEFAULT NULL,
  `GRIN_DATE` date DEFAULT NULL,
  `GRIN_INFO` varchar(1024) DEFAULT NULL,
  `GRIN_STS` char(1) DEFAULT NULL,
  `GRIN_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_giro_in`
--

INSERT INTO `trx_giro_in` (`GRIN_ID`, `BANK_ID`, `USER_ID`, `BRANCH_ID`, `COA_ID`, `GRIN_CODE`, `GRIN_DATE`, `GRIN_INFO`, `GRIN_STS`, `GRIN_DTSTS`) VALUES
(1, 1, 1, 1, 136, 'GM/1810/000001', '2018-10-04', 'tes giro masuk', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trx_giro_out`
--

CREATE TABLE `trx_giro_out` (
  `GROUT_ID` int(11) NOT NULL,
  `BANK_ID` int(11) DEFAULT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `COA_ID` int(11) DEFAULT NULL,
  `GROUT_CODE` char(30) DEFAULT NULL,
  `GROUT_DATE` date DEFAULT NULL,
  `GROUT_INFO` varchar(1024) DEFAULT NULL,
  `GROUT_STS` char(1) DEFAULT NULL,
  `GROUT_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_giro_out`
--

INSERT INTO `trx_giro_out` (`GROUT_ID`, `BANK_ID`, `USER_ID`, `BRANCH_ID`, `COA_ID`, `GROUT_CODE`, `GROUT_DATE`, `GROUT_INFO`, `GROUT_STS`, `GROUT_DTSTS`) VALUES
(1, 1, 1, 1, 136, 'GK/1810/000001', '2018-10-04', 'tes giro keluar cair', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trx_invoice`
--

CREATE TABLE `trx_invoice` (
  `INV_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `INC_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `CUST_ID` int(11) DEFAULT NULL,
  `CURR_ID` int(11) DEFAULT NULL,
  `INV_CODE` char(30) DEFAULT NULL,
  `INV_DATE` date DEFAULT NULL,
  `INV_INFO` varchar(1024) DEFAULT NULL,
  `INV_TYPE` char(100) DEFAULT NULL,
  `INV_TERM` char(100) DEFAULT NULL,
  `INV_STS` char(1) DEFAULT NULL,
  `INV_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_invoice`
--

INSERT INTO `trx_invoice` (`INV_ID`, `USER_ID`, `INC_ID`, `BRANCH_ID`, `CUST_ID`, `CURR_ID`, `INV_CODE`, `INV_DATE`, `INV_INFO`, `INV_TYPE`, `INV_TERM`, `INV_STS`, `INV_DTSTS`) VALUES
(1, 5, 1, 5, 1, 1, 'INV/1809/000001', '2018-09-20', 'Kolom info induk transaksi invoice', '0', '1', '1', NULL),
(2, 4, 2, 5, 1, 1, 'INV/1809/000002', '2018-09-20', 'Kolom info induk transaksi invoice', '1', '1', '1', NULL),
(3, 7, 3, 3, 1, 1, 'INV/1809/000001', '2018-09-26', 'Kolom info invoice induk', '0', '1', '1', NULL),
(4, 7, 4, 3, 1, 1, 'INV/1809/000002', '2018-09-26', 'Kolom info invoice induk', '1', '1', '1', NULL),
(5, 6, 3, 3, 1, 1, 'INV/1809/000003', '2018-09-26', 'info', '0', '1', '1', NULL),
(6, 6, 4, 3, 1, 1, 'INV/1810/000001', '2018-10-02', 'jkhihih', '0', '1', '1', NULL),
(7, NULL, NULL, 6, NULL, NULL, 'INV/1811/000001', '2018-11-05', NULL, NULL, NULL, '0', NULL),
(8, 6, 3, 3, 1, 1, 'INV/1812/000001', '2018-12-04', 'info halaman invoice', '0', '2', '1', NULL),
(9, NULL, NULL, 3, NULL, NULL, 'INV/1812/000002', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(10, NULL, NULL, 3, NULL, NULL, 'INV/1812/000003', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(11, NULL, NULL, 3, NULL, NULL, 'INV/1812/000004', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(12, NULL, NULL, 3, NULL, NULL, 'INV/1812/000005', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(13, NULL, NULL, 3, NULL, NULL, 'INV/1812/000006', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(14, NULL, NULL, 3, NULL, NULL, 'INV/1812/000007', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(15, NULL, NULL, 3, NULL, NULL, 'INV/1812/000008', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(16, NULL, NULL, 3, NULL, NULL, 'INV/1812/000009', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(17, NULL, NULL, 3, NULL, NULL, 'INV/1812/000010', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(18, NULL, NULL, 3, NULL, NULL, 'INV/1812/000011', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(19, NULL, NULL, 3, NULL, NULL, 'INV/1812/000012', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(20, NULL, NULL, 3, NULL, NULL, 'INV/1812/000013', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(21, NULL, NULL, 3, NULL, NULL, 'INV/1812/000014', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(22, NULL, NULL, 3, NULL, NULL, 'INV/1812/000015', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(23, NULL, NULL, 3, NULL, NULL, 'INV/1812/000016', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(24, NULL, NULL, 3, NULL, NULL, 'INV/1812/000017', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(25, NULL, NULL, 3, NULL, NULL, 'INV/1812/000018', '2018-12-13', NULL, NULL, NULL, '0', NULL),
(26, 5, 1, 5, 2, 1, 'INV/1903/000001', '2019-03-01', 'PEMBAYARAN DP SEBESAR 35%', '0', '3', '2', NULL),
(27, 5, 1, 5, 3, 1, 'INV/1903/000002', '2019-03-08', 'PEMBAYARAN DP SEBESAR 35%', '0', '7', '2', NULL),
(28, 5, 1, 5, 2, 1, 'INV/1903/000003', '2019-03-11', 'PELUNASAN BIAYA MEDIA SEBESAR 65%', '0', '1', '2', NULL),
(29, 5, 1, 5, 3, 1, 'INV/1904/000001', '2019-04-05', 'PELUNASAN BIAYA MEDIA SEBESAR 65%', '0', '7', '2', NULL),
(30, NULL, NULL, 1, NULL, NULL, 'INV/1904/000001', '2019-04-26', NULL, NULL, NULL, '0', NULL),
(31, 5, 1, 5, 4, 1, 'INV/1905/000001', '2019-05-08', 'PELUNASAN PEMBAYARAN MEDIA', '0', '2', '2', NULL),
(32, 5, 1, 5, 4, 1, 'INV/1905/000002', '2019-05-08', 'PELUNASAN PEMBAYARAN MEDIA', '0', '2', '2', NULL),
(33, 5, 1, 5, 4, 1, 'INV/1905/000003', '2019-05-08', 'PELUNASAN PEMBAYARAN MEDIA', '0', '2', '2', NULL),
(34, 5, 1, 5, 3, 1, 'INV/1907/000001', '2019-07-12', 'PEMBAYARAN TERMIN I SEBESAR 35% MEDIA PLACEMENT JL TUPAREV CIREBON PERIODE 10 JULI s/d 10 OKTOBER 2019', '0', '3', '2', NULL),
(35, 5, 1, 5, 3, 1, 'INV/1907/000002', '2019-07-12', 'PEMBAYARAN TERMIN II SEBESAR 65% MEDIA PLACEMENT JL TUPAREV CIREBON PERIODE 10 JULI s/d 10 OKTOBER 2019', '0', '3', '2', NULL),
(36, 5, 1, 5, 3, 1, 'INV/1907/000003', '2019-07-23', 'PEMBAYARAN PERTAMA SEBESAR 35%', '0', '1', '2', NULL),
(37, 5, 1, 5, 3, 1, 'INV/1907/000004', '2019-07-23', 'PEMBAYARAN KEDUA SEBESAR 65%', '0', '1', '2', NULL),
(38, 5, 1, 5, 3, 1, 'INV/1907/000005', '2019-07-30', 'RECOVERING TUPREV CIREBON, BIAYA TERMASUK CETAK DAN PEMASANGAN', '0', '1', '2', NULL),
(39, 5, 1, 5, 3, 1, 'INV/1908/000001', '2019-08-12', 'PEMBAYARAN MEDIA PLACEMENT JL DANAU TOBA MALANG', '0', '1', '2', NULL),
(40, 5, 1, 5, 6, 1, 'INV/1908/000002', '2019-08-21', 'PEMAKAIAN MEDIA PLACEMENT SELAMA 1 BULAN LOKASI PANGSUD PROBOLINGGO', '0', '12', '2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trx_permitappr`
--

CREATE TABLE `trx_permitappr` (
  `PAPPR_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `APPR_ID` int(11) DEFAULT NULL,
  `GOV_ID` int(11) DEFAULT NULL,
  `CUST_ID` int(11) DEFAULT NULL,
  `BB_ID` int(11) DEFAULT NULL,
  `LOC_ID` int(11) DEFAULT NULL,
  `PLC_ID` int(11) DEFAULT NULL,
  `PRMTTYP_ID` int(11) DEFAULT NULL,
  `PAPPR_CODE` char(30) DEFAULT NULL,
  `PAPPR_DATE` date DEFAULT NULL,
  `PAPPR_URG` char(30) DEFAULT NULL,
  `PAPPR_APPRBRC` char(30) DEFAULT NULL,
  `PAPPR_PAPPRBRC` char(30) DEFAULT NULL,
  `PAPPR_LOC` char(30) DEFAULT NULL,
  `PAPPR_WIDTH` int(11) DEFAULT NULL,
  `PAPPR_LENGTH` int(11) DEFAULT NULL,
  `PAPPR_HEIGHT` int(11) DEFAULT NULL,
  `PAPPR_SUMSIZE` int(11) DEFAULT NULL,
  `PAPPR_PLCSUM` int(11) DEFAULT NULL,
  `PAPPR_SIDE` char(100) DEFAULT NULL,
  `PAPPR_DEST` char(100) DEFAULT NULL,
  `PAPPR_INFO` varchar(1024) DEFAULT NULL,
  `PAPPR_STS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_permitappr`
--

INSERT INTO `trx_permitappr` (`PAPPR_ID`, `USER_ID`, `BRANCH_ID`, `APPR_ID`, `GOV_ID`, `CUST_ID`, `BB_ID`, `LOC_ID`, `PLC_ID`, `PRMTTYP_ID`, `PAPPR_CODE`, `PAPPR_DATE`, `PAPPR_URG`, `PAPPR_APPRBRC`, `PAPPR_PAPPRBRC`, `PAPPR_LOC`, `PAPPR_WIDTH`, `PAPPR_LENGTH`, `PAPPR_HEIGHT`, `PAPPR_SUMSIZE`, `PAPPR_PLCSUM`, `PAPPR_SIDE`, `PAPPR_DEST`, `PAPPR_INFO`, `PAPPR_STS`) VALUES
(1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PI/2104/000001', '2021-04-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `trx_po`
--

CREATE TABLE `trx_po` (
  `PO_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `CURR_ID` int(11) DEFAULT NULL,
  `APPR_ID` int(11) DEFAULT NULL,
  `SUPP_ID` int(11) DEFAULT NULL,
  `LOC_ID` int(11) DEFAULT NULL,
  `PO_CODE` char(30) DEFAULT NULL,
  `PO_STS` char(1) DEFAULT NULL,
  `PO_DATE` date DEFAULT NULL,
  `PO_ORDNUM` char(30) DEFAULT NULL,
  `PO_TERM` char(20) DEFAULT NULL,
  `PO_INFO` varchar(1024) DEFAULT NULL,
  `PO_SUB` bigint(20) DEFAULT NULL,
  `PO_GTOTAL` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_po`
--

INSERT INTO `trx_po` (`PO_ID`, `USER_ID`, `BRANCH_ID`, `CURR_ID`, `APPR_ID`, `SUPP_ID`, `LOC_ID`, `PO_CODE`, `PO_STS`, `PO_DATE`, `PO_ORDNUM`, `PO_TERM`, `PO_INFO`, `PO_SUB`, `PO_GTOTAL`) VALUES
(1, 2, 1, 1, 1, 1, 1, 'PO/1809/000001', '1', '2018-09-18', '', '7', 'Kolom info PO', 20000, 20000),
(2, 4, 5, 1, 2, 1, 1, 'PO/1809/000001', '1', '2018-09-20', '', '7', 'Kolom info transaksi PO', 30000, 30000),
(3, 7, 3, 1, 3, 1, 1, 'PO/1809/000001', '1', '2018-09-26', '', '7', 'Kolom info PO', 1000000, 1000000),
(4, 7, 3, 1, 4, 1, 1, 'PO/1809/000002', '1', '2018-09-26', '', '7', 'info', 1000000, 1000000),
(5, 6, 3, 1, 5, 1, 1, 'PO/1810/000001', '1', '2018-10-02', '', '', 'asjdmnjnfsjndfjnsd.jn', 5000000, 5000000),
(6, 1, 1, 1, 1, 1, 1, 'PO/1810/000001', '1', '2018-10-08', '', '4', 'aaa', 100000, 100000),
(7, 9, 6, 1, 8, 2, 1, 'PO/1810/000001', '1', '2018-10-16', '', '7', '-', 1000000, 1000000),
(8, 9, 6, 1, 8, 1, 1, 'PO/1810/000002', '1', '2018-10-16', '', '7', '-', 100000, 100000),
(9, NULL, 1, NULL, NULL, NULL, NULL, 'PO/1812/000001', '0', '2018-12-19', NULL, NULL, NULL, NULL, NULL),
(10, 10, 7, 1, NULL, 3, NULL, 'PO/1906/000001', '1', '2019-06-14', '', '7', 'Pemasangan lampu sorot di Yahatta', 1800000, 1800000),
(11, 5, 5, 1, 27, 4, NULL, 'PO/1908/000001', '2', '2019-08-14', '', '33', 'PEMAKAIAN MEDIA PLACEMENT LOKASI JL PANGSUD (PS. GOTONG ROYONG) 5x10 M HORISONTAL FRONT LIGHT (5 BUAH LAMPU).\r\nDURASI PASANG 1 BULAN (19 AGUSTUS 2019 s/d 18 SEPTEMBER 2019) FREE 1x PEMASANGAN. ', 10000000, 10000000),
(12, 5, 5, 1, 27, 4, NULL, 'PO/1908/000002', '0', '2019-08-13', '', '33', 'PEMAKAIAN MEDIA PLACEMENT LOKASI JL PANGSUD (PS. GOTONG ROYONG) 5x10 M HORISONTAL FRONT LIGHT (5 BUAH LAMPU).\r\nDURASI PASANG 1 BULAN (15 AGUSTUS 2019 s/d 14 SEPTEMBER 2019) FREE 1x PEMASANGAN. ', 10000000, 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `trx_po_ga`
--

CREATE TABLE `trx_po_ga` (
  `POGA_ID` int(11) NOT NULL,
  `SUPP_ID` int(11) DEFAULT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `CURR_ID` int(11) DEFAULT NULL,
  `POGA_CODE` char(30) DEFAULT NULL,
  `POGA_STS` char(1) DEFAULT NULL,
  `POGA_DATE` date DEFAULT NULL,
  `POGA_ORDNUM` char(30) DEFAULT NULL,
  `POGA_TERM` char(30) DEFAULT NULL,
  `POGA_INFO` varchar(1024) DEFAULT NULL,
  `POGA_SUB` bigint(20) DEFAULT NULL,
  `POGA_GTOTAL` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_po_ga`
--

INSERT INTO `trx_po_ga` (`POGA_ID`, `SUPP_ID`, `USER_ID`, `BRANCH_ID`, `CURR_ID`, `POGA_CODE`, `POGA_STS`, `POGA_DATE`, `POGA_ORDNUM`, `POGA_TERM`, `POGA_INFO`, `POGA_SUB`, `POGA_GTOTAL`) VALUES
(1, 1, 1, 1, 1, 'OB/1812/000001', '1', '2018-12-19', '', '7', 'info po ga', 100000, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `trx_prc_ga`
--

CREATE TABLE `trx_prc_ga` (
  `PRCGA_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `CURR_ID` int(11) DEFAULT NULL,
  `POGA_ID` int(11) DEFAULT NULL,
  `PRCGA_CODE` char(30) DEFAULT NULL,
  `PRCGA_DATE` date DEFAULT NULL,
  `PRCGA_INV` char(50) DEFAULT NULL,
  `PRCGA_INFO` varchar(1024) DEFAULT NULL,
  `PRCGA_STS` char(1) DEFAULT NULL,
  `PRCGA_SUB` bigint(20) DEFAULT NULL,
  `PRCGA_DISC` int(11) DEFAULT NULL,
  `PRCGA_PPN` int(11) DEFAULT NULL,
  `PRCGA_COST` int(11) DEFAULT NULL,
  `PRCGA_GTOTAL` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_prc_ga`
--

INSERT INTO `trx_prc_ga` (`PRCGA_ID`, `USER_ID`, `BRANCH_ID`, `CURR_ID`, `POGA_ID`, `PRCGA_CODE`, `PRCGA_DATE`, `PRCGA_INV`, `PRCGA_INFO`, `PRCGA_STS`, `PRCGA_SUB`, `PRCGA_DISC`, `PRCGA_PPN`, `PRCGA_COST`, `PRCGA_GTOTAL`) VALUES
(1, 6, 3, 1, 1, 'PB/1812/000001', '2018-12-20', '', 'info po ga', '1', 100000, 10000, 10000, 1000, 101000),
(2, NULL, 1, NULL, NULL, 'PB/2104/000001', '2021-04-10', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trx_procurement`
--

CREATE TABLE `trx_procurement` (
  `PRC_ID` int(11) NOT NULL,
  `PO_ID` int(11) DEFAULT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `CURR_ID` int(11) DEFAULT NULL,
  `PRC_CODE` char(30) DEFAULT NULL,
  `PRC_SUBSTS` char(1) DEFAULT NULL,
  `PRC_SUBID` int(11) DEFAULT NULL,
  `PRC_SUBCODE` char(30) DEFAULT NULL,
  `PRC_DATE` date DEFAULT NULL,
  `PRC_INVOICE` char(50) DEFAULT NULL,
  `PRC_TERM` char(50) DEFAULT NULL,
  `PRC_INFO` varchar(1024) DEFAULT NULL,
  `PRC_STS` char(1) DEFAULT NULL,
  `PRC_SUB` decimal(20,2) DEFAULT NULL,
  `PRC_DISC` int(11) DEFAULT NULL,
  `PRC_PPN` int(11) DEFAULT NULL,
  `PRC_COST` int(11) DEFAULT NULL,
  `PRC_GTOTAL` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_procurement`
--

INSERT INTO `trx_procurement` (`PRC_ID`, `PO_ID`, `USER_ID`, `BRANCH_ID`, `CURR_ID`, `PRC_CODE`, `PRC_SUBSTS`, `PRC_SUBID`, `PRC_SUBCODE`, `PRC_DATE`, `PRC_INVOICE`, `PRC_TERM`, `PRC_INFO`, `PRC_STS`, `PRC_SUB`, `PRC_DISC`, `PRC_PPN`, `PRC_COST`, `PRC_GTOTAL`) VALUES
(1, 1, 2, 1, 1, 'BL/1809/000001', NULL, NULL, NULL, '2018-09-19', '', NULL, 'Kolom info PO', '1', '20000.00', 0, 0, 10000, '30000.00'),
(2, 2, 4, 5, 1, 'BL/1809/000001', NULL, NULL, NULL, '2018-09-20', '', NULL, 'Kolom info transaksi PO', '1', '30000.00', 0, 0, 5000, '35000.00'),
(3, 3, 7, 3, 1, 'BL/1809/000001', NULL, NULL, NULL, '2018-09-26', '', NULL, 'Kolom info PO', '1', '1000000.00', 0, 100000, 0, '1100000.00'),
(4, 4, 7, 3, 1, 'BL/1809/000002', NULL, NULL, NULL, '2018-09-26', '', NULL, 'info', '1', '1000000.00', 0, 100000, 100000, '1200000.00'),
(5, 5, 6, 3, 1, 'BL/1810/000001', NULL, NULL, NULL, '2018-10-02', '', NULL, '123456789', '2', '5000000.00', 0, 0, 0, '5000000.00'),
(6, 7, 9, 6, 1, 'BL/1810/000001', '0', NULL, NULL, '2018-10-16', '', NULL, '-', '1', '1000000.00', 0, 0, 0, '1000000.00'),
(7, 8, 9, 6, 1, 'BL/1810/000002', '1', 6, 'BL/1810/000001', '2018-10-16', '', NULL, '-', '1', '100000.00', 0, 0, 0, '100000.00'),
(8, 10, 10, 7, 1, 'BL/1906/000001', NULL, NULL, NULL, '2019-06-14', '', NULL, 'Pemasangan lampu sorot di Yahatta', '1', '1800000.00', 0, 0, 0, '1800000.00');

-- --------------------------------------------------------

--
-- Table structure for table `trx_tax_invoice`
--

CREATE TABLE `trx_tax_invoice` (
  `TINV_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `CUST_ID` int(11) DEFAULT NULL,
  `INV_ID` int(11) DEFAULT NULL,
  `TINV_CODE` char(30) DEFAULT NULL,
  `TINV_DATE` date DEFAULT NULL,
  `TINV_TAXHEADCODE` char(10) DEFAULT NULL,
  `TINV_TAXCODE` char(30) DEFAULT NULL,
  `TINV_STS` char(1) DEFAULT NULL,
  `TINV_INFO` varchar(1024) DEFAULT NULL,
  `TINV_DTSTS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trx_usage`
--

CREATE TABLE `trx_usage` (
  `USG_ID` int(11) NOT NULL,
  `APPR_ID` int(11) DEFAULT NULL,
  `LOC_ID` int(11) DEFAULT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `USG_CODE` char(30) DEFAULT NULL,
  `USG_DATE` date DEFAULT NULL,
  `USG_STS` char(1) DEFAULT NULL,
  `USG_INFO` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trx_usage_ga`
--

CREATE TABLE `trx_usage_ga` (
  `USGGA_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `USGGA_CODE` char(30) DEFAULT NULL,
  `USGGA_DATE` date DEFAULT NULL,
  `USGGA_STS` char(1) DEFAULT NULL,
  `USGGA_INFO` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usage_details`
--

CREATE TABLE `usage_details` (
  `USGDET_ID` int(11) NOT NULL,
  `GD_ID` int(11) DEFAULT NULL,
  `USG_ID` int(11) DEFAULT NULL,
  `USGDET_QTY` int(11) DEFAULT NULL,
  `USGDET_SUB` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usage_ga_ret`
--

CREATE TABLE `usage_ga_ret` (
  `RTUSGGA_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `USGGA_ID` int(11) DEFAULT NULL,
  `RTUSGGA_CODE` char(30) DEFAULT NULL,
  `RTUSGGA_DATE` date DEFAULT NULL,
  `RTUSGGA_STS` char(1) DEFAULT NULL,
  `RTUSGGA_INFO` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usage_ret`
--

CREATE TABLE `usage_ret` (
  `RTUSG_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `USG_ID` int(11) DEFAULT NULL,
  `RTUSG_CODE` char(30) DEFAULT NULL,
  `RTUSG_DATE` date DEFAULT NULL,
  `RTUSG_STS` char(1) DEFAULT NULL,
  `RTUSG_INFO` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usg_ga_details`
--

CREATE TABLE `usg_ga_details` (
  `USGGADET_ID` int(11) NOT NULL,
  `USGGA_ID` int(11) DEFAULT NULL,
  `GD_ID` int(11) DEFAULT NULL,
  `USGGADET_QTY` int(11) DEFAULT NULL,
  `USGGADET_SUB` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_journal`
--
ALTER TABLE `account_journal`
  ADD PRIMARY KEY (`JOU_ID`),
  ADD KEY `FK_R50` (`USER_ID`),
  ADD KEY `FK_R53` (`BRANCH_ID`);

--
-- Indexes for table `appr_cost_det`
--
ALTER TABLE `appr_cost_det`
  ADD PRIMARY KEY (`CSTDT_ID`),
  ADD KEY `FK_R55` (`APPR_ID`);

--
-- Indexes for table `appr_permit_det`
--
ALTER TABLE `appr_permit_det`
  ADD PRIMARY KEY (`APPRPRMT_ID`),
  ADD KEY `FK_R16` (`APPR_ID`),
  ADD KEY `FK_R17` (`PRMTTYP_ID`);

--
-- Indexes for table `appr_terms_det`
--
ALTER TABLE `appr_terms_det`
  ADD PRIMARY KEY (`TERMSDET_ID`),
  ADD KEY `FK_R15` (`APPR_ID`);

--
-- Indexes for table `bankin_det`
--
ALTER TABLE `bankin_det`
  ADD PRIMARY KEY (`BNKDET_ID`),
  ADD KEY `FK_R101` (`BNK_ID`),
  ADD KEY `FK_R102` (`COA_ID`);

--
-- Indexes for table `bankin_trxdet`
--
ALTER TABLE `bankin_trxdet`
  ADD PRIMARY KEY (`BNKTRX_ID`),
  ADD KEY `FK_R100` (`BNK_ID`);

--
-- Indexes for table `bankout_det`
--
ALTER TABLE `bankout_det`
  ADD PRIMARY KEY (`BNKODET_ID`),
  ADD KEY `FK_R120` (`BNKO_ID`),
  ADD KEY `FK_R121` (`COA_ID`);

--
-- Indexes for table `bankout_trxdet`
--
ALTER TABLE `bankout_trxdet`
  ADD PRIMARY KEY (`BNKTRXO_ID`),
  ADD KEY `FK_R119` (`BNKO_ID`);

--
-- Indexes for table `bapplog_details`
--
ALTER TABLE `bapplog_details`
  ADD PRIMARY KEY (`DETBALG_ID`),
  ADD KEY `FK__trx_bapplog` (`BALG_ID`);

--
-- Indexes for table `bapp_details`
--
ALTER TABLE `bapp_details`
  ADD PRIMARY KEY (`DETBAPP_ID`),
  ADD KEY `FK_R48` (`BAPP_ID`);

--
-- Indexes for table `brcppn_details`
--
ALTER TABLE `brcppn_details`
  ADD PRIMARY KEY (`BPPNDET_ID`),
  ADD KEY `BPPNDETFK1` (`BPPN_ID`);

--
-- Indexes for table `budget_det`
--
ALTER TABLE `budget_det`
  ADD PRIMARY KEY (`BUDDET_ID`),
  ADD KEY `FK_R106` (`BUD_ID`),
  ADD KEY `FK_R107` (`COA_ID`);

--
-- Indexes for table `buku_bank`
--
ALTER TABLE `buku_bank`
  ADD PRIMARY KEY (`BNKBOOK_ID`);

--
-- Indexes for table `buku_giro`
--
ALTER TABLE `buku_giro`
  ADD PRIMARY KEY (`GRBOOK_ID`);

--
-- Indexes for table `buku_kas`
--
ALTER TABLE `buku_kas`
  ADD PRIMARY KEY (`CSHBOOK_ID`);

--
-- Indexes for table `cashin_det`
--
ALTER TABLE `cashin_det`
  ADD PRIMARY KEY (`CSHINDET_ID`),
  ADD KEY `FK_R93` (`CSH_ID`),
  ADD KEY `FK_R94` (`COA_ID`);

--
-- Indexes for table `cashout_det`
--
ALTER TABLE `cashout_det`
  ADD PRIMARY KEY (`CSHODET_ID`),
  ADD KEY `FK_R127` (`COA_ID`),
  ADD KEY `FK_R98` (`CSHO_ID`);

--
-- Indexes for table `chart_of_account`
--
ALTER TABLE `chart_of_account`
  ADD PRIMARY KEY (`COA_ID`),
  ADD KEY `FK_R49` (`PAR_ID`),
  ADD KEY `FK_chart_of_account_master_branch` (`BRANCH_ID`);

--
-- Indexes for table `giroin_det`
--
ALTER TABLE `giroin_det`
  ADD PRIMARY KEY (`GRINDET_ID`),
  ADD KEY `FK_R133` (`GRIN_ID`),
  ADD KEY `FKGIRDET1` (`GIR_ID`);

--
-- Indexes for table `giroin_record`
--
ALTER TABLE `giroin_record`
  ADD PRIMARY KEY (`GIR_ID`),
  ADD KEY `FKGRC1` (`BNKTRX_ID`);

--
-- Indexes for table `giroout_det`
--
ALTER TABLE `giroout_det`
  ADD PRIMARY KEY (`GROUTDET_ID`),
  ADD KEY `FK_R134` (`GROUT_ID`),
  ADD KEY `FKGORDET1` (`GOR_ID`);

--
-- Indexes for table `giroout_record`
--
ALTER TABLE `giroout_record`
  ADD PRIMARY KEY (`GOR_ID`),
  ADD KEY `FKGORC1` (`BNKTRXO_ID`);

--
-- Indexes for table `goods_history`
--
ALTER TABLE `goods_history`
  ADD PRIMARY KEY (`GDHIS_ID`),
  ADD KEY `FK_R54` (`GD_ID`);

--
-- Indexes for table `group_master`
--
ALTER TABLE `group_master`
  ADD PRIMARY KEY (`USER_ID`,`MST_CODE`),
  ADD KEY `FKGRMST2` (`MST_CODE`);

--
-- Indexes for table `group_trx`
--
ALTER TABLE `group_trx`
  ADD PRIMARY KEY (`USER_ID`,`TRX_CODE`),
  ADD KEY `FKGRTRX2` (`TRX_CODE`);

--
-- Indexes for table `group_user`
--
ALTER TABLE `group_user`
  ADD PRIMARY KEY (`USER_ID`,`MENU_CODE`),
  ADD KEY `GUFK2` (`MENU_CODE`);

--
-- Indexes for table `his_adj`
--
ALTER TABLE `his_adj`
  ADD PRIMARY KEY (`HISADJ_ID`),
  ADD KEY `FKHISADJ1` (`ADJ_ID`);

--
-- Indexes for table `his_adjga`
--
ALTER TABLE `his_adjga`
  ADD PRIMARY KEY (`HISADJGA_ID`),
  ADD KEY `FKHISADJGA1` (`ADJGA_ID`);

--
-- Indexes for table `his_approvalbill`
--
ALTER TABLE `his_approvalbill`
  ADD PRIMARY KEY (`HISAPPR_ID`),
  ADD KEY `FK_R9` (`APPR_ID`);

--
-- Indexes for table `his_bankin`
--
ALTER TABLE `his_bankin`
  ADD PRIMARY KEY (`HISBNK_ID`),
  ADD KEY `FKHISBNK1` (`BNK_ID`);

--
-- Indexes for table `his_bankout`
--
ALTER TABLE `his_bankout`
  ADD PRIMARY KEY (`HISBNKO_ID`),
  ADD KEY `FKHISBNKO1` (`BNKO_ID`);

--
-- Indexes for table `his_bapp`
--
ALTER TABLE `his_bapp`
  ADD PRIMARY KEY (`HISBAPP_ID`),
  ADD KEY `FK_R88` (`BAPP_ID`);

--
-- Indexes for table `his_bapplog`
--
ALTER TABLE `his_bapplog`
  ADD PRIMARY KEY (`HISBALG_ID`),
  ADD KEY `FKHISBALG1` (`BALG_ID`);

--
-- Indexes for table `his_budget`
--
ALTER TABLE `his_budget`
  ADD PRIMARY KEY (`HISBDG_ID`),
  ADD KEY `FKHISBDG1` (`BUD_ID`);

--
-- Indexes for table `his_cashin`
--
ALTER TABLE `his_cashin`
  ADD PRIMARY KEY (`HISCSHIN_ID`),
  ADD KEY `FKHISCSHIN1` (`CSH_ID`);

--
-- Indexes for table `his_cashout`
--
ALTER TABLE `his_cashout`
  ADD PRIMARY KEY (`HISCSHO_ID`),
  ADD KEY `FKHISCSHO1` (`CSHO_ID`);

--
-- Indexes for table `his_customer`
--
ALTER TABLE `his_customer`
  ADD PRIMARY KEY (`HISCUST_ID`),
  ADD KEY `FK_R5` (`CUST_ID`);

--
-- Indexes for table `his_giroin`
--
ALTER TABLE `his_giroin`
  ADD PRIMARY KEY (`HISGRIN_ID`),
  ADD KEY `FKHISGRIN1` (`GRIN_ID`);

--
-- Indexes for table `his_giroout`
--
ALTER TABLE `his_giroout`
  ADD PRIMARY KEY (`HISGRO_ID`),
  ADD KEY `FKHISGRO1` (`GROUT_ID`);

--
-- Indexes for table `his_inv`
--
ALTER TABLE `his_inv`
  ADD PRIMARY KEY (`HISINV_ID`),
  ADD KEY `FKHISINV1` (`INV_ID`);

--
-- Indexes for table `his_pappr`
--
ALTER TABLE `his_pappr`
  ADD PRIMARY KEY (`HISPAPPR_ID`),
  ADD KEY `FKHISPAPPR1` (`PAPPR_ID`);

--
-- Indexes for table `his_po`
--
ALTER TABLE `his_po`
  ADD PRIMARY KEY (`HISPO_ID`),
  ADD KEY `FK_R89` (`PO_ID`);

--
-- Indexes for table `his_poga`
--
ALTER TABLE `his_poga`
  ADD PRIMARY KEY (`HISPOGA_ID`),
  ADD KEY `FKHISPOGA1` (`POGA_ID`);

--
-- Indexes for table `his_prc`
--
ALTER TABLE `his_prc`
  ADD PRIMARY KEY (`HISPRC_ID`),
  ADD KEY `FK_R90` (`PRC_ID`);

--
-- Indexes for table `his_prcga`
--
ALTER TABLE `his_prcga`
  ADD PRIMARY KEY (`HISPRCGA_ID`),
  ADD KEY `FKHISPRCGA1` (`PRCGA_ID`);

--
-- Indexes for table `his_retprc`
--
ALTER TABLE `his_retprc`
  ADD PRIMARY KEY (`HISRTPRC_ID`),
  ADD KEY `FKRTPRCHIS1` (`RTPRC_ID`);

--
-- Indexes for table `his_retusg`
--
ALTER TABLE `his_retusg`
  ADD PRIMARY KEY (`HISRTUSG_ID`),
  ADD KEY `FKHISRTUSG1` (`RTUSG_ID`);

--
-- Indexes for table `his_rtprcga`
--
ALTER TABLE `his_rtprcga`
  ADD PRIMARY KEY (`HISRTPRCGA_ID`),
  ADD KEY `FKHISRTPRCGA1` (`RTPRCGA_ID`);

--
-- Indexes for table `his_rtusgga`
--
ALTER TABLE `his_rtusgga`
  ADD PRIMARY KEY (`HISRTUSGGA_ID`),
  ADD KEY `FKHISRTUSGGA1` (`RTUSGGA_ID`);

--
-- Indexes for table `his_usg`
--
ALTER TABLE `his_usg`
  ADD PRIMARY KEY (`HISUSG_ID`),
  ADD KEY `FK_R91` (`USG_ID`);

--
-- Indexes for table `his_usgga`
--
ALTER TABLE `his_usgga`
  ADD PRIMARY KEY (`HISUSGGA_ID`),
  ADD KEY `FKHISUSGGA1` (`USGGA_ID`);

--
-- Indexes for table `invoice_type`
--
ALTER TABLE `invoice_type`
  ADD PRIMARY KEY (`INC_ID`),
  ADD KEY `FK_invoice_type_master_branch` (`BRANCH_ID`);

--
-- Indexes for table `inv_details`
--
ALTER TABLE `inv_details`
  ADD PRIMARY KEY (`INVDET_ID`),
  ADD KEY `FK_INVDET1` (`APPR_ID`),
  ADD KEY `FK_INVDET2` (`INV_ID`);

--
-- Indexes for table `jou_credit`
--
ALTER TABLE `jou_credit`
  ADD PRIMARY KEY (`JOUCR_ID`),
  ADD KEY `FK_R129` (`JOU_ID`),
  ADD KEY `FK_R131` (`COA_ID`);

--
-- Indexes for table `jou_debit`
--
ALTER TABLE `jou_debit`
  ADD PRIMARY KEY (`JOUDB_ID`),
  ADD KEY `FK_R128` (`JOU_ID`),
  ADD KEY `FK_R130` (`COA_ID`);

--
-- Indexes for table `jou_details`
--
ALTER TABLE `jou_details`
  ADD PRIMARY KEY (`JOUDET_ID`),
  ADD KEY `FKJOUDET1` (`JOU_ID`),
  ADD KEY `FKJOUDET2` (`COA_ID`);

--
-- Indexes for table `master_bank`
--
ALTER TABLE `master_bank`
  ADD PRIMARY KEY (`BANK_ID`),
  ADD KEY `FK_R103` (`COA_ID`);

--
-- Indexes for table `master_bboard`
--
ALTER TABLE `master_bboard`
  ADD PRIMARY KEY (`BB_ID`);

--
-- Indexes for table `master_branch`
--
ALTER TABLE `master_branch`
  ADD PRIMARY KEY (`BRANCH_ID`);

--
-- Indexes for table `master_currency`
--
ALTER TABLE `master_currency`
  ADD PRIMARY KEY (`CURR_ID`);

--
-- Indexes for table `master_customer`
--
ALTER TABLE `master_customer`
  ADD PRIMARY KEY (`CUST_ID`),
  ADD KEY `FK_R136` (`COA_ID`);

--
-- Indexes for table `master_cust_intern`
--
ALTER TABLE `master_cust_intern`
  ADD PRIMARY KEY (`CSTIN_ID`),
  ADD KEY `FKCSTINT1` (`PERSON_ID`);

--
-- Indexes for table `master_dept`
--
ALTER TABLE `master_dept`
  ADD PRIMARY KEY (`DEPT_ID`);

--
-- Indexes for table `master_goods`
--
ALTER TABLE `master_goods`
  ADD PRIMARY KEY (`GD_ID`),
  ADD KEY `FK_R19` (`SUPP_ID`),
  ADD KEY `FKGD1` (`BRANCH_ID`);

--
-- Indexes for table `master_gov_type`
--
ALTER TABLE `master_gov_type`
  ADD PRIMARY KEY (`GOV_ID`);

--
-- Indexes for table `master_location`
--
ALTER TABLE `master_location`
  ADD PRIMARY KEY (`LOC_ID`),
  ADD KEY `FK_R7` (`GOV_ID`);

--
-- Indexes for table `master_menu`
--
ALTER TABLE `master_menu`
  ADD PRIMARY KEY (`MENU_CODE`);

--
-- Indexes for table `master_menumaster`
--
ALTER TABLE `master_menumaster`
  ADD PRIMARY KEY (`MST_CODE`);

--
-- Indexes for table `master_menutrx`
--
ALTER TABLE `master_menutrx`
  ADD PRIMARY KEY (`TRX_CODE`);

--
-- Indexes for table `master_permit`
--
ALTER TABLE `master_permit`
  ADD PRIMARY KEY (`PERMIT_ID`),
  ADD KEY `FK_R6` (`PRMTTYP_ID`),
  ADD KEY `FK_R8` (`LOC_ID`);

--
-- Indexes for table `master_permit_type`
--
ALTER TABLE `master_permit_type`
  ADD PRIMARY KEY (`PRMTTYP_ID`);

--
-- Indexes for table `master_person`
--
ALTER TABLE `master_person`
  ADD PRIMARY KEY (`PERSON_ID`);

--
-- Indexes for table `master_placement`
--
ALTER TABLE `master_placement`
  ADD PRIMARY KEY (`PLC_ID`);

--
-- Indexes for table `master_sales`
--
ALTER TABLE `master_sales`
  ADD PRIMARY KEY (`SALES_ID`),
  ADD KEY `FK_R2` (`PERSON_ID`),
  ADD KEY `FK_R4` (`BRANCH_ID`);

--
-- Indexes for table `master_supplier`
--
ALTER TABLE `master_supplier`
  ADD PRIMARY KEY (`SUPP_ID`),
  ADD KEY `FKMSUPP1` (`COA_ID`);

--
-- Indexes for table `master_user`
--
ALTER TABLE `master_user`
  ADD PRIMARY KEY (`USER_ID`),
  ADD KEY `FK_R1` (`PERSON_ID`),
  ADD KEY `FK_R3` (`BRANCH_ID`);

--
-- Indexes for table `other_settings`
--
ALTER TABLE `other_settings`
  ADD PRIMARY KEY (`OS_ID`),
  ADD KEY `FK_other_settings_master_branch` (`BRANCH_ID`);

--
-- Indexes for table `parent_chart`
--
ALTER TABLE `parent_chart`
  ADD PRIMARY KEY (`PAR_ID`),
  ADD KEY `FKPAR1` (`PARTP_ID`);

--
-- Indexes for table `parent_type`
--
ALTER TABLE `parent_type`
  ADD PRIMARY KEY (`PARTP_ID`);

--
-- Indexes for table `permitdoc_det`
--
ALTER TABLE `permitdoc_det`
  ADD PRIMARY KEY (`PDOC_ID`),
  ADD KEY `FK_R117` (`PAPPR_ID`);

--
-- Indexes for table `permitpay_det`
--
ALTER TABLE `permitpay_det`
  ADD PRIMARY KEY (`PPAY_ID`),
  ADD KEY `FK_R118` (`PAPPR_ID`),
  ADD KEY `FK_RELATIONSHIP_121` (`COA_ID`);

--
-- Indexes for table `poga_details`
--
ALTER TABLE `poga_details`
  ADD PRIMARY KEY (`PGDET_ID`),
  ADD KEY `FK_R60` (`GD_ID`),
  ADD KEY `FK_R61` (`POGA_ID`);

--
-- Indexes for table `po_details`
--
ALTER TABLE `po_details`
  ADD PRIMARY KEY (`PODET_ID`),
  ADD KEY `FK_R20` (`PO_ID`),
  ADD KEY `FK_R21` (`GD_ID`);

--
-- Indexes for table `prcga_details`
--
ALTER TABLE `prcga_details`
  ADD PRIMARY KEY (`PRCGADET_ID`),
  ADD KEY `FK_R65` (`PRCGA_ID`),
  ADD KEY `FK_R66` (`GD_ID`);

--
-- Indexes for table `prcga_ret`
--
ALTER TABLE `prcga_ret`
  ADD PRIMARY KEY (`RTPRCGA_ID`),
  ADD KEY `FK_R67` (`PRCGA_ID`),
  ADD KEY `FK_R68` (`USER_ID`),
  ADD KEY `FK_R69` (`CURR_ID`),
  ADD KEY `FKRTPRCGA1` (`BRANCH_ID`);

--
-- Indexes for table `prc_details`
--
ALTER TABLE `prc_details`
  ADD PRIMARY KEY (`PRCDET_ID`),
  ADD KEY `FK_R27` (`PRC_ID`),
  ADD KEY `FK_R28` (`GD_ID`);

--
-- Indexes for table `procurement_ret`
--
ALTER TABLE `procurement_ret`
  ADD PRIMARY KEY (`RTPRC_ID`),
  ADD KEY `FK_R29` (`PRC_ID`),
  ADD KEY `FK_R32` (`CURR_ID`),
  ADD KEY `FK_R35` (`USER_ID`),
  ADD KEY `FKRTPRC1` (`BRANCH_ID`);

--
-- Indexes for table `retprcga_details`
--
ALTER TABLE `retprcga_details`
  ADD PRIMARY KEY (`RTPRCGADET_ID`),
  ADD KEY `FK_R70` (`RTPRCGA_ID`),
  ADD KEY `FK_R71` (`GD_ID`);

--
-- Indexes for table `retprc_details`
--
ALTER TABLE `retprc_details`
  ADD PRIMARY KEY (`RETPRCDET_ID`),
  ADD KEY `FK_R30` (`RTPRC_ID`),
  ADD KEY `FK_R31` (`GD_ID`);

--
-- Indexes for table `retusgga_details`
--
ALTER TABLE `retusgga_details`
  ADD PRIMARY KEY (`RTUSGGADET_ID`),
  ADD KEY `FK_R77` (`RTUSGGA_ID`),
  ADD KEY `FK_R78` (`GD_ID`);

--
-- Indexes for table `retusg_details`
--
ALTER TABLE `retusg_details`
  ADD PRIMARY KEY (`RETUSGDET_ID`),
  ADD KEY `FK_R43` (`GD_ID`),
  ADD KEY `FK_R44` (`RTUSG_ID`);

--
-- Indexes for table `tax_inv_details`
--
ALTER TABLE `tax_inv_details`
  ADD PRIMARY KEY (`TINVDET_ID`),
  ADD KEY `FKTINVDET1` (`TINV_ID`),
  ADD KEY `FKTINVDET2` (`INVDET_ID`);

--
-- Indexes for table `trx_adjustment`
--
ALTER TABLE `trx_adjustment`
  ADD PRIMARY KEY (`ADJ_ID`),
  ADD KEY `FK_R45` (`GD_ID`),
  ADD KEY `FK_R81` (`USER_ID`),
  ADD KEY `FKADJ1` (`BRANCH_ID`);

--
-- Indexes for table `trx_adj_ga`
--
ALTER TABLE `trx_adj_ga`
  ADD PRIMARY KEY (`ADJGA_ID`),
  ADD KEY `FK_R79` (`GD_ID`),
  ADD KEY `FK_R80` (`USER_ID`),
  ADD KEY `FKADJGA1` (`BRANCH_ID`);

--
-- Indexes for table `trx_approvalbill`
--
ALTER TABLE `trx_approvalbill`
  ADD PRIMARY KEY (`APPR_ID`),
  ADD KEY `FK_R10` (`CURR_ID`),
  ADD KEY `FK_R11` (`USER_ID`),
  ADD KEY `FK_R12` (`SALES_ID`),
  ADD KEY `FK_R13` (`LOC_ID`),
  ADD KEY `FK_R14` (`CUST_ID`),
  ADD KEY `FK_R18` (`BB_ID`),
  ADD KEY `FK_R59` (`PLC_ID`),
  ADD KEY `FKAPPR1` (`BRANCH_ID`);

--
-- Indexes for table `trx_bankin`
--
ALTER TABLE `trx_bankin`
  ADD PRIMARY KEY (`BNK_ID`),
  ADD KEY `FK_R125` (`COA_ID`),
  ADD KEY `FK_R85` (`USER_ID`),
  ADD KEY `FK_R86` (`CURR_ID`),
  ADD KEY `FK_R87` (`CUST_ID`),
  ADD KEY `FK_R99` (`BANK_ID`),
  ADD KEY `FKBNKIN1` (`BRANCH_ID`),
  ADD KEY `FKBNKIN2` (`CSTIN_ID`);

--
-- Indexes for table `trx_bankout`
--
ALTER TABLE `trx_bankout`
  ADD PRIMARY KEY (`BNKO_ID`),
  ADD KEY `FK_R105` (`DEPT_ID`),
  ADD KEY `FK_R123` (`USER_ID`),
  ADD KEY `FK_R124` (`CURR_ID`),
  ADD KEY `FK_R126` (`COA_ID`),
  ADD KEY `FKBO1` (`BANK_ID`),
  ADD KEY `FKBNKO1` (`BRANCH_ID`);

--
-- Indexes for table `trx_bapp`
--
ALTER TABLE `trx_bapp`
  ADD PRIMARY KEY (`BAPP_ID`),
  ADD KEY `FK_R46` (`USER_ID`),
  ADD KEY `FK_R47` (`APPR_ID`),
  ADD KEY `FKBAPP1` (`BRANCH_ID`);

--
-- Indexes for table `trx_bapplog`
--
ALTER TABLE `trx_bapplog`
  ADD PRIMARY KEY (`BALG_ID`),
  ADD KEY `FKBALG1` (`USER_ID`),
  ADD KEY `FKBALG2` (`BRANCH_ID`),
  ADD KEY `FKBALG3` (`LOC_ID`),
  ADD KEY `FKBALG4` (`CUST_ID`);

--
-- Indexes for table `trx_brc_ppn`
--
ALTER TABLE `trx_brc_ppn`
  ADD PRIMARY KEY (`BPPN_ID`),
  ADD KEY `FKBPPN1` (`USER_ID`);

--
-- Indexes for table `trx_budget`
--
ALTER TABLE `trx_budget`
  ADD PRIMARY KEY (`BUD_ID`),
  ADD KEY `FK_R108` (`USER_ID`),
  ADD KEY `FK_R109` (`CURR_ID`),
  ADD KEY `FK_R110` (`DEPT_ID`),
  ADD KEY `FKBDG1` (`BRANCH_ID`);

--
-- Indexes for table `trx_cash_in`
--
ALTER TABLE `trx_cash_in`
  ADD PRIMARY KEY (`CSH_ID`),
  ADD KEY `FK_R82` (`USER_ID`),
  ADD KEY `FK_R83` (`CURR_ID`),
  ADD KEY `FK_R84` (`CUST_ID`),
  ADD KEY `FK_R92` (`COA_ID`),
  ADD KEY `FKCSHIN1` (`BRANCH_ID`),
  ADD KEY `FKCSHIN2` (`CSTIN_ID`);

--
-- Indexes for table `trx_cash_out`
--
ALTER TABLE `trx_cash_out`
  ADD PRIMARY KEY (`CSHO_ID`),
  ADD KEY `FK_R104` (`DEPT_ID`),
  ADD KEY `FK_R95` (`USER_ID`),
  ADD KEY `FK_R96` (`CURR_ID`),
  ADD KEY `FK_R97` (`COA_ID`),
  ADD KEY `FKCSHO1` (`BRANCH_ID`);

--
-- Indexes for table `trx_giro_in`
--
ALTER TABLE `trx_giro_in`
  ADD PRIMARY KEY (`GRIN_ID`),
  ADD KEY `FK_RELATIONSHIP_131` (`BANK_ID`),
  ADD KEY `FKGRIN1` (`USER_ID`),
  ADD KEY `FKGRIN2` (`BRANCH_ID`),
  ADD KEY `FK_trx_giro_in_chart_of_account` (`COA_ID`);

--
-- Indexes for table `trx_giro_out`
--
ALTER TABLE `trx_giro_out`
  ADD PRIMARY KEY (`GROUT_ID`),
  ADD KEY `FK_R135` (`BANK_ID`),
  ADD KEY `FKGROUT1` (`USER_ID`),
  ADD KEY `FKGROUT2` (`BRANCH_ID`),
  ADD KEY `FK_trx_giro_out_chart_of_account` (`COA_ID`);

--
-- Indexes for table `trx_invoice`
--
ALTER TABLE `trx_invoice`
  ADD PRIMARY KEY (`INV_ID`),
  ADD KEY `FK_R52` (`INC_ID`),
  ADD KEY `FK_INV1` (`BRANCH_ID`),
  ADD KEY `FK_INV2` (`CUST_ID`),
  ADD KEY `FK_INV3` (`CURR_ID`),
  ADD KEY `FK_INV4` (`USER_ID`);

--
-- Indexes for table `trx_permitappr`
--
ALTER TABLE `trx_permitappr`
  ADD PRIMARY KEY (`PAPPR_ID`),
  ADD KEY `FK_R111` (`USER_ID`),
  ADD KEY `FK_R112` (`APPR_ID`),
  ADD KEY `FK_R113` (`GOV_ID`),
  ADD KEY `FK_R114` (`CUST_ID`),
  ADD KEY `FK_R115` (`BB_ID`),
  ADD KEY `FK_R116` (`PRMTTYP_ID`),
  ADD KEY `FK_PAPPR1` (`LOC_ID`),
  ADD KEY `FKPAPPR2` (`PLC_ID`),
  ADD KEY `FKPAPPR3` (`BRANCH_ID`);

--
-- Indexes for table `trx_po`
--
ALTER TABLE `trx_po`
  ADD PRIMARY KEY (`PO_ID`),
  ADD KEY `FK_R22` (`SUPP_ID`),
  ADD KEY `FK_R23` (`APPR_ID`),
  ADD KEY `FK_R24` (`CURR_ID`),
  ADD KEY `FK_R33` (`USER_ID`),
  ADD KEY `FKPO1` (`LOC_ID`),
  ADD KEY `FKPO2` (`BRANCH_ID`);

--
-- Indexes for table `trx_po_ga`
--
ALTER TABLE `trx_po_ga`
  ADD PRIMARY KEY (`POGA_ID`),
  ADD KEY `FK_R56` (`CURR_ID`),
  ADD KEY `FK_R57` (`USER_ID`),
  ADD KEY `FK_R58` (`SUPP_ID`),
  ADD KEY `FKPOGA1` (`BRANCH_ID`);

--
-- Indexes for table `trx_prc_ga`
--
ALTER TABLE `trx_prc_ga`
  ADD PRIMARY KEY (`PRCGA_ID`),
  ADD KEY `FK_R62` (`POGA_ID`),
  ADD KEY `FK_R63` (`USER_ID`),
  ADD KEY `FK_R64` (`CURR_ID`),
  ADD KEY `FKPRCGA1` (`BRANCH_ID`);

--
-- Indexes for table `trx_procurement`
--
ALTER TABLE `trx_procurement`
  ADD PRIMARY KEY (`PRC_ID`),
  ADD KEY `FK_R25` (`PO_ID`),
  ADD KEY `FK_R26` (`CURR_ID`),
  ADD KEY `FK_R34` (`USER_ID`),
  ADD KEY `FKPRC1` (`BRANCH_ID`);

--
-- Indexes for table `trx_tax_invoice`
--
ALTER TABLE `trx_tax_invoice`
  ADD PRIMARY KEY (`TINV_ID`),
  ADD KEY `FKTINV1` (`CUST_ID`),
  ADD KEY `FKTINV2` (`INV_ID`),
  ADD KEY `FKTINV3` (`USER_ID`);

--
-- Indexes for table `trx_usage`
--
ALTER TABLE `trx_usage`
  ADD PRIMARY KEY (`USG_ID`),
  ADD KEY `FK_R37` (`USER_ID`),
  ADD KEY `FK_R39` (`APPR_ID`),
  ADD KEY `FKUSG1` (`LOC_ID`),
  ADD KEY `FKUSG2` (`BRANCH_ID`);

--
-- Indexes for table `trx_usage_ga`
--
ALTER TABLE `trx_usage_ga`
  ADD PRIMARY KEY (`USGGA_ID`),
  ADD KEY `FK_R72` (`USER_ID`),
  ADD KEY `FKUSGGA1` (`BRANCH_ID`);

--
-- Indexes for table `usage_details`
--
ALTER TABLE `usage_details`
  ADD PRIMARY KEY (`USGDET_ID`),
  ADD KEY `FK_R36` (`USG_ID`),
  ADD KEY `FK_R40` (`GD_ID`);

--
-- Indexes for table `usage_ga_ret`
--
ALTER TABLE `usage_ga_ret`
  ADD PRIMARY KEY (`RTUSGGA_ID`),
  ADD KEY `FK_R75` (`USGGA_ID`),
  ADD KEY `FK_R76` (`USER_ID`),
  ADD KEY `FKRTUSGGA1` (`BRANCH_ID`);

--
-- Indexes for table `usage_ret`
--
ALTER TABLE `usage_ret`
  ADD PRIMARY KEY (`RTUSG_ID`),
  ADD KEY `FK_R41` (`USER_ID`),
  ADD KEY `FK_R42` (`USG_ID`),
  ADD KEY `FKRTUSG1` (`BRANCH_ID`);

--
-- Indexes for table `usg_ga_details`
--
ALTER TABLE `usg_ga_details`
  ADD PRIMARY KEY (`USGGADET_ID`),
  ADD KEY `FK_R73` (`USGGA_ID`),
  ADD KEY `FK_R74` (`GD_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_journal`
--
ALTER TABLE `account_journal`
  MODIFY `JOU_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `appr_cost_det`
--
ALTER TABLE `appr_cost_det`
  MODIFY `CSTDT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `appr_permit_det`
--
ALTER TABLE `appr_permit_det`
  MODIFY `APPRPRMT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appr_terms_det`
--
ALTER TABLE `appr_terms_det`
  MODIFY `TERMSDET_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `bankin_det`
--
ALTER TABLE `bankin_det`
  MODIFY `BNKDET_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bankin_trxdet`
--
ALTER TABLE `bankin_trxdet`
  MODIFY `BNKTRX_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bankout_det`
--
ALTER TABLE `bankout_det`
  MODIFY `BNKODET_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bankout_trxdet`
--
ALTER TABLE `bankout_trxdet`
  MODIFY `BNKTRXO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bapplog_details`
--
ALTER TABLE `bapplog_details`
  MODIFY `DETBALG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bapp_details`
--
ALTER TABLE `bapp_details`
  MODIFY `DETBAPP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `budget_det`
--
ALTER TABLE `budget_det`
  MODIFY `BUDDET_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buku_bank`
--
ALTER TABLE `buku_bank`
  MODIFY `BNKBOOK_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buku_giro`
--
ALTER TABLE `buku_giro`
  MODIFY `GRBOOK_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buku_kas`
--
ALTER TABLE `buku_kas`
  MODIFY `CSHBOOK_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cashin_det`
--
ALTER TABLE `cashin_det`
  MODIFY `CSHINDET_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cashout_det`
--
ALTER TABLE `cashout_det`
  MODIFY `CSHODET_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chart_of_account`
--
ALTER TABLE `chart_of_account`
  MODIFY `COA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1880;

--
-- AUTO_INCREMENT for table `giroin_det`
--
ALTER TABLE `giroin_det`
  MODIFY `GRINDET_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `giroin_record`
--
ALTER TABLE `giroin_record`
  MODIFY `GIR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `giroout_det`
--
ALTER TABLE `giroout_det`
  MODIFY `GROUTDET_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `giroout_record`
--
ALTER TABLE `giroout_record`
  MODIFY `GOR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_history`
--
ALTER TABLE `goods_history`
  MODIFY `GDHIS_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `his_adj`
--
ALTER TABLE `his_adj`
  MODIFY `HISADJ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `his_adjga`
--
ALTER TABLE `his_adjga`
  MODIFY `HISADJGA_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `his_approvalbill`
--
ALTER TABLE `his_approvalbill`
  MODIFY `HISAPPR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `his_bankin`
--
ALTER TABLE `his_bankin`
  MODIFY `HISBNK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `his_bankout`
--
ALTER TABLE `his_bankout`
  MODIFY `HISBNKO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `his_bapp`
--
ALTER TABLE `his_bapp`
  MODIFY `HISBAPP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `his_bapplog`
--
ALTER TABLE `his_bapplog`
  MODIFY `HISBALG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `his_budget`
--
ALTER TABLE `his_budget`
  MODIFY `HISBDG_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `his_cashin`
--
ALTER TABLE `his_cashin`
  MODIFY `HISCSHIN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `his_cashout`
--
ALTER TABLE `his_cashout`
  MODIFY `HISCSHO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `his_customer`
--
ALTER TABLE `his_customer`
  MODIFY `HISCUST_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `his_giroin`
--
ALTER TABLE `his_giroin`
  MODIFY `HISGRIN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `his_giroout`
--
ALTER TABLE `his_giroout`
  MODIFY `HISGRO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `his_inv`
--
ALTER TABLE `his_inv`
  MODIFY `HISINV_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `his_pappr`
--
ALTER TABLE `his_pappr`
  MODIFY `HISPAPPR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `his_po`
--
ALTER TABLE `his_po`
  MODIFY `HISPO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `his_poga`
--
ALTER TABLE `his_poga`
  MODIFY `HISPOGA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `his_prc`
--
ALTER TABLE `his_prc`
  MODIFY `HISPRC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `his_prcga`
--
ALTER TABLE `his_prcga`
  MODIFY `HISPRCGA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `his_retprc`
--
ALTER TABLE `his_retprc`
  MODIFY `HISRTPRC_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `his_retusg`
--
ALTER TABLE `his_retusg`
  MODIFY `HISRTUSG_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `his_rtprcga`
--
ALTER TABLE `his_rtprcga`
  MODIFY `HISRTPRCGA_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `his_rtusgga`
--
ALTER TABLE `his_rtusgga`
  MODIFY `HISRTUSGGA_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `his_usg`
--
ALTER TABLE `his_usg`
  MODIFY `HISUSG_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `his_usgga`
--
ALTER TABLE `his_usgga`
  MODIFY `HISUSGGA_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice_type`
--
ALTER TABLE `invoice_type`
  MODIFY `INC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inv_details`
--
ALTER TABLE `inv_details`
  MODIFY `INVDET_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `jou_credit`
--
ALTER TABLE `jou_credit`
  MODIFY `JOUCR_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jou_debit`
--
ALTER TABLE `jou_debit`
  MODIFY `JOUDB_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jou_details`
--
ALTER TABLE `jou_details`
  MODIFY `JOUDET_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `master_bank`
--
ALTER TABLE `master_bank`
  MODIFY `BANK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_bboard`
--
ALTER TABLE `master_bboard`
  MODIFY `BB_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_branch`
--
ALTER TABLE `master_branch`
  MODIFY `BRANCH_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_currency`
--
ALTER TABLE `master_currency`
  MODIFY `CURR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_customer`
--
ALTER TABLE `master_customer`
  MODIFY `CUST_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_cust_intern`
--
ALTER TABLE `master_cust_intern`
  MODIFY `CSTIN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_dept`
--
ALTER TABLE `master_dept`
  MODIFY `DEPT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_goods`
--
ALTER TABLE `master_goods`
  MODIFY `GD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_gov_type`
--
ALTER TABLE `master_gov_type`
  MODIFY `GOV_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_location`
--
ALTER TABLE `master_location`
  MODIFY `LOC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `master_permit`
--
ALTER TABLE `master_permit`
  MODIFY `PERMIT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_permit_type`
--
ALTER TABLE `master_permit_type`
  MODIFY `PRMTTYP_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_person`
--
ALTER TABLE `master_person`
  MODIFY `PERSON_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_placement`
--
ALTER TABLE `master_placement`
  MODIFY `PLC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_sales`
--
ALTER TABLE `master_sales`
  MODIFY `SALES_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_supplier`
--
ALTER TABLE `master_supplier`
  MODIFY `SUPP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_user`
--
ALTER TABLE `master_user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `other_settings`
--
ALTER TABLE `other_settings`
  MODIFY `OS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parent_chart`
--
ALTER TABLE `parent_chart`
  MODIFY `PAR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `parent_type`
--
ALTER TABLE `parent_type`
  MODIFY `PARTP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permitdoc_det`
--
ALTER TABLE `permitdoc_det`
  MODIFY `PDOC_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permitpay_det`
--
ALTER TABLE `permitpay_det`
  MODIFY `PPAY_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poga_details`
--
ALTER TABLE `poga_details`
  MODIFY `PGDET_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `po_details`
--
ALTER TABLE `po_details`
  MODIFY `PODET_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `prcga_details`
--
ALTER TABLE `prcga_details`
  MODIFY `PRCGADET_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prcga_ret`
--
ALTER TABLE `prcga_ret`
  MODIFY `RTPRCGA_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prc_details`
--
ALTER TABLE `prc_details`
  MODIFY `PRCDET_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `procurement_ret`
--
ALTER TABLE `procurement_ret`
  MODIFY `RTPRC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `retprcga_details`
--
ALTER TABLE `retprcga_details`
  MODIFY `RTPRCGADET_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `retprc_details`
--
ALTER TABLE `retprc_details`
  MODIFY `RETPRCDET_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `retusgga_details`
--
ALTER TABLE `retusgga_details`
  MODIFY `RTUSGGADET_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `retusg_details`
--
ALTER TABLE `retusg_details`
  MODIFY `RETUSGDET_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_inv_details`
--
ALTER TABLE `tax_inv_details`
  MODIFY `TINVDET_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trx_adjustment`
--
ALTER TABLE `trx_adjustment`
  MODIFY `ADJ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trx_adj_ga`
--
ALTER TABLE `trx_adj_ga`
  MODIFY `ADJGA_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trx_approvalbill`
--
ALTER TABLE `trx_approvalbill`
  MODIFY `APPR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `trx_bankin`
--
ALTER TABLE `trx_bankin`
  MODIFY `BNK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trx_bankout`
--
ALTER TABLE `trx_bankout`
  MODIFY `BNKO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trx_bapp`
--
ALTER TABLE `trx_bapp`
  MODIFY `BAPP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `trx_bapplog`
--
ALTER TABLE `trx_bapplog`
  MODIFY `BALG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trx_brc_ppn`
--
ALTER TABLE `trx_brc_ppn`
  MODIFY `BPPN_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trx_budget`
--
ALTER TABLE `trx_budget`
  MODIFY `BUD_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trx_cash_in`
--
ALTER TABLE `trx_cash_in`
  MODIFY `CSH_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trx_cash_out`
--
ALTER TABLE `trx_cash_out`
  MODIFY `CSHO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trx_giro_in`
--
ALTER TABLE `trx_giro_in`
  MODIFY `GRIN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trx_giro_out`
--
ALTER TABLE `trx_giro_out`
  MODIFY `GROUT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trx_invoice`
--
ALTER TABLE `trx_invoice`
  MODIFY `INV_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `trx_permitappr`
--
ALTER TABLE `trx_permitappr`
  MODIFY `PAPPR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trx_po`
--
ALTER TABLE `trx_po`
  MODIFY `PO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trx_po_ga`
--
ALTER TABLE `trx_po_ga`
  MODIFY `POGA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trx_prc_ga`
--
ALTER TABLE `trx_prc_ga`
  MODIFY `PRCGA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trx_procurement`
--
ALTER TABLE `trx_procurement`
  MODIFY `PRC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trx_tax_invoice`
--
ALTER TABLE `trx_tax_invoice`
  MODIFY `TINV_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trx_usage`
--
ALTER TABLE `trx_usage`
  MODIFY `USG_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trx_usage_ga`
--
ALTER TABLE `trx_usage_ga`
  MODIFY `USGGA_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usage_details`
--
ALTER TABLE `usage_details`
  MODIFY `USGDET_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usage_ga_ret`
--
ALTER TABLE `usage_ga_ret`
  MODIFY `RTUSGGA_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usage_ret`
--
ALTER TABLE `usage_ret`
  MODIFY `RTUSG_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usg_ga_details`
--
ALTER TABLE `usg_ga_details`
  MODIFY `USGGADET_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_journal`
--
ALTER TABLE `account_journal`
  ADD CONSTRAINT `FK_R50` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FK_R53` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`);

--
-- Constraints for table `appr_cost_det`
--
ALTER TABLE `appr_cost_det`
  ADD CONSTRAINT `FK_R55` FOREIGN KEY (`APPR_ID`) REFERENCES `trx_approvalbill` (`APPR_ID`);

--
-- Constraints for table `appr_permit_det`
--
ALTER TABLE `appr_permit_det`
  ADD CONSTRAINT `FK_R16` FOREIGN KEY (`APPR_ID`) REFERENCES `trx_approvalbill` (`APPR_ID`),
  ADD CONSTRAINT `FK_R17` FOREIGN KEY (`PRMTTYP_ID`) REFERENCES `master_permit_type` (`PRMTTYP_ID`);

--
-- Constraints for table `appr_terms_det`
--
ALTER TABLE `appr_terms_det`
  ADD CONSTRAINT `FK_R15` FOREIGN KEY (`APPR_ID`) REFERENCES `trx_approvalbill` (`APPR_ID`);

--
-- Constraints for table `bankin_det`
--
ALTER TABLE `bankin_det`
  ADD CONSTRAINT `FK_R101` FOREIGN KEY (`BNK_ID`) REFERENCES `trx_bankin` (`BNK_ID`),
  ADD CONSTRAINT `FK_R102` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`);

--
-- Constraints for table `bankin_trxdet`
--
ALTER TABLE `bankin_trxdet`
  ADD CONSTRAINT `FK_R100` FOREIGN KEY (`BNK_ID`) REFERENCES `trx_bankin` (`BNK_ID`);

--
-- Constraints for table `bankout_det`
--
ALTER TABLE `bankout_det`
  ADD CONSTRAINT `FK_R120` FOREIGN KEY (`BNKO_ID`) REFERENCES `trx_bankout` (`BNKO_ID`),
  ADD CONSTRAINT `FK_R121` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`);

--
-- Constraints for table `bankout_trxdet`
--
ALTER TABLE `bankout_trxdet`
  ADD CONSTRAINT `FK_R119` FOREIGN KEY (`BNKO_ID`) REFERENCES `trx_bankout` (`BNKO_ID`);

--
-- Constraints for table `bapplog_details`
--
ALTER TABLE `bapplog_details`
  ADD CONSTRAINT `FK__trx_bapplog` FOREIGN KEY (`BALG_ID`) REFERENCES `trx_bapplog` (`BALG_ID`);

--
-- Constraints for table `bapp_details`
--
ALTER TABLE `bapp_details`
  ADD CONSTRAINT `FK_R48` FOREIGN KEY (`BAPP_ID`) REFERENCES `trx_bapp` (`BAPP_ID`);

--
-- Constraints for table `brcppn_details`
--
ALTER TABLE `brcppn_details`
  ADD CONSTRAINT `BPPNDETFK1` FOREIGN KEY (`BPPN_ID`) REFERENCES `trx_brc_ppn` (`BPPN_ID`);

--
-- Constraints for table `budget_det`
--
ALTER TABLE `budget_det`
  ADD CONSTRAINT `FK_R106` FOREIGN KEY (`BUD_ID`) REFERENCES `trx_budget` (`BUD_ID`),
  ADD CONSTRAINT `FK_R107` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`);

--
-- Constraints for table `cashin_det`
--
ALTER TABLE `cashin_det`
  ADD CONSTRAINT `FK_R93` FOREIGN KEY (`CSH_ID`) REFERENCES `trx_cash_in` (`CSH_ID`),
  ADD CONSTRAINT `FK_R94` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`);

--
-- Constraints for table `cashout_det`
--
ALTER TABLE `cashout_det`
  ADD CONSTRAINT `FK_R127` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`),
  ADD CONSTRAINT `FK_R98` FOREIGN KEY (`CSHO_ID`) REFERENCES `trx_cash_out` (`CSHO_ID`);

--
-- Constraints for table `chart_of_account`
--
ALTER TABLE `chart_of_account`
  ADD CONSTRAINT `FK_R49` FOREIGN KEY (`PAR_ID`) REFERENCES `parent_chart` (`PAR_ID`),
  ADD CONSTRAINT `FK_chart_of_account_master_branch` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`);

--
-- Constraints for table `giroin_det`
--
ALTER TABLE `giroin_det`
  ADD CONSTRAINT `FKGIRDET1` FOREIGN KEY (`GIR_ID`) REFERENCES `giroin_record` (`GIR_ID`),
  ADD CONSTRAINT `FK_R133` FOREIGN KEY (`GRIN_ID`) REFERENCES `trx_giro_in` (`GRIN_ID`);

--
-- Constraints for table `giroin_record`
--
ALTER TABLE `giroin_record`
  ADD CONSTRAINT `FKGRC1` FOREIGN KEY (`BNKTRX_ID`) REFERENCES `bankin_trxdet` (`BNKTRX_ID`);

--
-- Constraints for table `giroout_det`
--
ALTER TABLE `giroout_det`
  ADD CONSTRAINT `FKGORDET1` FOREIGN KEY (`GOR_ID`) REFERENCES `giroout_record` (`GOR_ID`),
  ADD CONSTRAINT `FK_R134` FOREIGN KEY (`GROUT_ID`) REFERENCES `trx_giro_out` (`GROUT_ID`);

--
-- Constraints for table `giroout_record`
--
ALTER TABLE `giroout_record`
  ADD CONSTRAINT `FKGORC1` FOREIGN KEY (`BNKTRXO_ID`) REFERENCES `bankout_trxdet` (`BNKTRXO_ID`);

--
-- Constraints for table `goods_history`
--
ALTER TABLE `goods_history`
  ADD CONSTRAINT `FK_R54` FOREIGN KEY (`GD_ID`) REFERENCES `master_goods` (`GD_ID`);

--
-- Constraints for table `group_master`
--
ALTER TABLE `group_master`
  ADD CONSTRAINT `FKGRMST1` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FKGRMST2` FOREIGN KEY (`MST_CODE`) REFERENCES `master_menumaster` (`MST_CODE`);

--
-- Constraints for table `group_trx`
--
ALTER TABLE `group_trx`
  ADD CONSTRAINT `FKGRTRX1` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FKGRTRX2` FOREIGN KEY (`TRX_CODE`) REFERENCES `master_menutrx` (`TRX_CODE`);

--
-- Constraints for table `group_user`
--
ALTER TABLE `group_user`
  ADD CONSTRAINT `GUFK1` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `GUFK2` FOREIGN KEY (`MENU_CODE`) REFERENCES `master_menu` (`MENU_CODE`);

--
-- Constraints for table `his_adj`
--
ALTER TABLE `his_adj`
  ADD CONSTRAINT `FKHISADJ1` FOREIGN KEY (`ADJ_ID`) REFERENCES `trx_adjustment` (`ADJ_ID`);

--
-- Constraints for table `his_adjga`
--
ALTER TABLE `his_adjga`
  ADD CONSTRAINT `FKHISADJGA1` FOREIGN KEY (`ADJGA_ID`) REFERENCES `trx_adj_ga` (`ADJGA_ID`);

--
-- Constraints for table `his_approvalbill`
--
ALTER TABLE `his_approvalbill`
  ADD CONSTRAINT `FK_R9` FOREIGN KEY (`APPR_ID`) REFERENCES `trx_approvalbill` (`APPR_ID`);

--
-- Constraints for table `his_bankin`
--
ALTER TABLE `his_bankin`
  ADD CONSTRAINT `FKHISBNK1` FOREIGN KEY (`BNK_ID`) REFERENCES `trx_bankin` (`BNK_ID`);

--
-- Constraints for table `his_bankout`
--
ALTER TABLE `his_bankout`
  ADD CONSTRAINT `FKHISBNKO1` FOREIGN KEY (`BNKO_ID`) REFERENCES `trx_bankout` (`BNKO_ID`);

--
-- Constraints for table `his_bapp`
--
ALTER TABLE `his_bapp`
  ADD CONSTRAINT `FK_R88` FOREIGN KEY (`BAPP_ID`) REFERENCES `trx_bapp` (`BAPP_ID`);

--
-- Constraints for table `his_bapplog`
--
ALTER TABLE `his_bapplog`
  ADD CONSTRAINT `FKHISBALG1` FOREIGN KEY (`BALG_ID`) REFERENCES `trx_bapplog` (`BALG_ID`);

--
-- Constraints for table `his_budget`
--
ALTER TABLE `his_budget`
  ADD CONSTRAINT `FKHISBDG1` FOREIGN KEY (`BUD_ID`) REFERENCES `trx_budget` (`BUD_ID`);

--
-- Constraints for table `his_cashin`
--
ALTER TABLE `his_cashin`
  ADD CONSTRAINT `FKHISCSHIN1` FOREIGN KEY (`CSH_ID`) REFERENCES `trx_cash_in` (`CSH_ID`);

--
-- Constraints for table `his_cashout`
--
ALTER TABLE `his_cashout`
  ADD CONSTRAINT `FKHISCSHO1` FOREIGN KEY (`CSHO_ID`) REFERENCES `trx_cash_out` (`CSHO_ID`);

--
-- Constraints for table `his_customer`
--
ALTER TABLE `his_customer`
  ADD CONSTRAINT `FK_R5` FOREIGN KEY (`CUST_ID`) REFERENCES `master_customer` (`CUST_ID`);

--
-- Constraints for table `his_giroin`
--
ALTER TABLE `his_giroin`
  ADD CONSTRAINT `FKHISGRIN1` FOREIGN KEY (`GRIN_ID`) REFERENCES `trx_giro_in` (`GRIN_ID`);

--
-- Constraints for table `his_giroout`
--
ALTER TABLE `his_giroout`
  ADD CONSTRAINT `FKHISGRO1` FOREIGN KEY (`GROUT_ID`) REFERENCES `trx_giro_out` (`GROUT_ID`);

--
-- Constraints for table `his_inv`
--
ALTER TABLE `his_inv`
  ADD CONSTRAINT `FKHISINV1` FOREIGN KEY (`INV_ID`) REFERENCES `trx_invoice` (`INV_ID`);

--
-- Constraints for table `his_pappr`
--
ALTER TABLE `his_pappr`
  ADD CONSTRAINT `FKHISPAPPR1` FOREIGN KEY (`PAPPR_ID`) REFERENCES `trx_permitappr` (`PAPPR_ID`);

--
-- Constraints for table `his_po`
--
ALTER TABLE `his_po`
  ADD CONSTRAINT `FK_R89` FOREIGN KEY (`PO_ID`) REFERENCES `trx_po` (`PO_ID`);

--
-- Constraints for table `his_poga`
--
ALTER TABLE `his_poga`
  ADD CONSTRAINT `FKHISPOGA1` FOREIGN KEY (`POGA_ID`) REFERENCES `trx_po_ga` (`POGA_ID`);

--
-- Constraints for table `his_prc`
--
ALTER TABLE `his_prc`
  ADD CONSTRAINT `FK_R90` FOREIGN KEY (`PRC_ID`) REFERENCES `trx_procurement` (`PRC_ID`);

--
-- Constraints for table `his_prcga`
--
ALTER TABLE `his_prcga`
  ADD CONSTRAINT `FKHISPRCGA1` FOREIGN KEY (`PRCGA_ID`) REFERENCES `trx_prc_ga` (`PRCGA_ID`);

--
-- Constraints for table `his_retprc`
--
ALTER TABLE `his_retprc`
  ADD CONSTRAINT `FKRTPRCHIS1` FOREIGN KEY (`RTPRC_ID`) REFERENCES `procurement_ret` (`RTPRC_ID`);

--
-- Constraints for table `his_retusg`
--
ALTER TABLE `his_retusg`
  ADD CONSTRAINT `FKHISRTUSG1` FOREIGN KEY (`RTUSG_ID`) REFERENCES `usage_ret` (`RTUSG_ID`);

--
-- Constraints for table `his_rtprcga`
--
ALTER TABLE `his_rtprcga`
  ADD CONSTRAINT `FKHISRTPRCGA1` FOREIGN KEY (`RTPRCGA_ID`) REFERENCES `prcga_ret` (`RTPRCGA_ID`);

--
-- Constraints for table `his_rtusgga`
--
ALTER TABLE `his_rtusgga`
  ADD CONSTRAINT `FKHISRTUSGGA1` FOREIGN KEY (`RTUSGGA_ID`) REFERENCES `usage_ga_ret` (`RTUSGGA_ID`);

--
-- Constraints for table `his_usg`
--
ALTER TABLE `his_usg`
  ADD CONSTRAINT `FK_R91` FOREIGN KEY (`USG_ID`) REFERENCES `trx_usage` (`USG_ID`);

--
-- Constraints for table `his_usgga`
--
ALTER TABLE `his_usgga`
  ADD CONSTRAINT `FKHISUSGGA1` FOREIGN KEY (`USGGA_ID`) REFERENCES `trx_usage_ga` (`USGGA_ID`);

--
-- Constraints for table `invoice_type`
--
ALTER TABLE `invoice_type`
  ADD CONSTRAINT `FK_invoice_type_master_branch` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`);

--
-- Constraints for table `inv_details`
--
ALTER TABLE `inv_details`
  ADD CONSTRAINT `FK_INVDET1` FOREIGN KEY (`APPR_ID`) REFERENCES `trx_approvalbill` (`APPR_ID`),
  ADD CONSTRAINT `FK_INVDET2` FOREIGN KEY (`INV_ID`) REFERENCES `trx_invoice` (`INV_ID`);

--
-- Constraints for table `jou_credit`
--
ALTER TABLE `jou_credit`
  ADD CONSTRAINT `FK_R129` FOREIGN KEY (`JOU_ID`) REFERENCES `account_journal` (`JOU_ID`),
  ADD CONSTRAINT `FK_R131` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`);

--
-- Constraints for table `jou_debit`
--
ALTER TABLE `jou_debit`
  ADD CONSTRAINT `FK_R128` FOREIGN KEY (`JOU_ID`) REFERENCES `account_journal` (`JOU_ID`),
  ADD CONSTRAINT `FK_R130` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`);

--
-- Constraints for table `jou_details`
--
ALTER TABLE `jou_details`
  ADD CONSTRAINT `FKJOUDET1` FOREIGN KEY (`JOU_ID`) REFERENCES `account_journal` (`JOU_ID`),
  ADD CONSTRAINT `FKJOUDET2` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`);

--
-- Constraints for table `master_bank`
--
ALTER TABLE `master_bank`
  ADD CONSTRAINT `FK_R103` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`);

--
-- Constraints for table `master_customer`
--
ALTER TABLE `master_customer`
  ADD CONSTRAINT `FK_R136` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`);

--
-- Constraints for table `master_cust_intern`
--
ALTER TABLE `master_cust_intern`
  ADD CONSTRAINT `FKCSTINT1` FOREIGN KEY (`PERSON_ID`) REFERENCES `master_person` (`PERSON_ID`);

--
-- Constraints for table `master_goods`
--
ALTER TABLE `master_goods`
  ADD CONSTRAINT `FKGD1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R19` FOREIGN KEY (`SUPP_ID`) REFERENCES `master_supplier` (`SUPP_ID`);

--
-- Constraints for table `master_location`
--
ALTER TABLE `master_location`
  ADD CONSTRAINT `FK_R7` FOREIGN KEY (`GOV_ID`) REFERENCES `master_gov_type` (`GOV_ID`);

--
-- Constraints for table `master_permit`
--
ALTER TABLE `master_permit`
  ADD CONSTRAINT `FK_R6` FOREIGN KEY (`PRMTTYP_ID`) REFERENCES `master_permit_type` (`PRMTTYP_ID`),
  ADD CONSTRAINT `FK_R8` FOREIGN KEY (`LOC_ID`) REFERENCES `master_location` (`LOC_ID`);

--
-- Constraints for table `master_sales`
--
ALTER TABLE `master_sales`
  ADD CONSTRAINT `FK_R2` FOREIGN KEY (`PERSON_ID`) REFERENCES `master_person` (`PERSON_ID`),
  ADD CONSTRAINT `FK_R4` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`);

--
-- Constraints for table `master_supplier`
--
ALTER TABLE `master_supplier`
  ADD CONSTRAINT `FKMSUPP1` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`);

--
-- Constraints for table `master_user`
--
ALTER TABLE `master_user`
  ADD CONSTRAINT `FK_R1` FOREIGN KEY (`PERSON_ID`) REFERENCES `master_person` (`PERSON_ID`),
  ADD CONSTRAINT `FK_R3` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`);

--
-- Constraints for table `other_settings`
--
ALTER TABLE `other_settings`
  ADD CONSTRAINT `FK_other_settings_master_branch` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`);

--
-- Constraints for table `parent_chart`
--
ALTER TABLE `parent_chart`
  ADD CONSTRAINT `FKPAR1` FOREIGN KEY (`PARTP_ID`) REFERENCES `parent_type` (`PARTP_ID`);

--
-- Constraints for table `permitdoc_det`
--
ALTER TABLE `permitdoc_det`
  ADD CONSTRAINT `FK_R117` FOREIGN KEY (`PAPPR_ID`) REFERENCES `trx_permitappr` (`PAPPR_ID`);

--
-- Constraints for table `permitpay_det`
--
ALTER TABLE `permitpay_det`
  ADD CONSTRAINT `FK_R118` FOREIGN KEY (`PAPPR_ID`) REFERENCES `trx_permitappr` (`PAPPR_ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_121` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`);

--
-- Constraints for table `poga_details`
--
ALTER TABLE `poga_details`
  ADD CONSTRAINT `FK_R60` FOREIGN KEY (`GD_ID`) REFERENCES `master_goods` (`GD_ID`),
  ADD CONSTRAINT `FK_R61` FOREIGN KEY (`POGA_ID`) REFERENCES `trx_po_ga` (`POGA_ID`);

--
-- Constraints for table `po_details`
--
ALTER TABLE `po_details`
  ADD CONSTRAINT `FK_R20` FOREIGN KEY (`PO_ID`) REFERENCES `trx_po` (`PO_ID`),
  ADD CONSTRAINT `FK_R21` FOREIGN KEY (`GD_ID`) REFERENCES `master_goods` (`GD_ID`);

--
-- Constraints for table `prcga_details`
--
ALTER TABLE `prcga_details`
  ADD CONSTRAINT `FK_R65` FOREIGN KEY (`PRCGA_ID`) REFERENCES `trx_prc_ga` (`PRCGA_ID`),
  ADD CONSTRAINT `FK_R66` FOREIGN KEY (`GD_ID`) REFERENCES `master_goods` (`GD_ID`);

--
-- Constraints for table `prcga_ret`
--
ALTER TABLE `prcga_ret`
  ADD CONSTRAINT `FKRTPRCGA1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R67` FOREIGN KEY (`PRCGA_ID`) REFERENCES `trx_prc_ga` (`PRCGA_ID`),
  ADD CONSTRAINT `FK_R68` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FK_R69` FOREIGN KEY (`CURR_ID`) REFERENCES `master_currency` (`CURR_ID`);

--
-- Constraints for table `prc_details`
--
ALTER TABLE `prc_details`
  ADD CONSTRAINT `FK_R27` FOREIGN KEY (`PRC_ID`) REFERENCES `trx_procurement` (`PRC_ID`),
  ADD CONSTRAINT `FK_R28` FOREIGN KEY (`GD_ID`) REFERENCES `master_goods` (`GD_ID`);

--
-- Constraints for table `procurement_ret`
--
ALTER TABLE `procurement_ret`
  ADD CONSTRAINT `FKRTPRC1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R29` FOREIGN KEY (`PRC_ID`) REFERENCES `trx_procurement` (`PRC_ID`),
  ADD CONSTRAINT `FK_R32` FOREIGN KEY (`CURR_ID`) REFERENCES `master_currency` (`CURR_ID`),
  ADD CONSTRAINT `FK_R35` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`);

--
-- Constraints for table `retprcga_details`
--
ALTER TABLE `retprcga_details`
  ADD CONSTRAINT `FK_R70` FOREIGN KEY (`RTPRCGA_ID`) REFERENCES `prcga_ret` (`RTPRCGA_ID`),
  ADD CONSTRAINT `FK_R71` FOREIGN KEY (`GD_ID`) REFERENCES `master_goods` (`GD_ID`);

--
-- Constraints for table `retprc_details`
--
ALTER TABLE `retprc_details`
  ADD CONSTRAINT `FK_R30` FOREIGN KEY (`RTPRC_ID`) REFERENCES `procurement_ret` (`RTPRC_ID`),
  ADD CONSTRAINT `FK_R31` FOREIGN KEY (`GD_ID`) REFERENCES `master_goods` (`GD_ID`);

--
-- Constraints for table `retusgga_details`
--
ALTER TABLE `retusgga_details`
  ADD CONSTRAINT `FK_R77` FOREIGN KEY (`RTUSGGA_ID`) REFERENCES `usage_ga_ret` (`RTUSGGA_ID`),
  ADD CONSTRAINT `FK_R78` FOREIGN KEY (`GD_ID`) REFERENCES `master_goods` (`GD_ID`);

--
-- Constraints for table `retusg_details`
--
ALTER TABLE `retusg_details`
  ADD CONSTRAINT `FK_R43` FOREIGN KEY (`GD_ID`) REFERENCES `master_goods` (`GD_ID`),
  ADD CONSTRAINT `FK_R44` FOREIGN KEY (`RTUSG_ID`) REFERENCES `usage_ret` (`RTUSG_ID`);

--
-- Constraints for table `tax_inv_details`
--
ALTER TABLE `tax_inv_details`
  ADD CONSTRAINT `FKTINVDET1` FOREIGN KEY (`TINV_ID`) REFERENCES `trx_tax_invoice` (`TINV_ID`),
  ADD CONSTRAINT `FKTINVDET2` FOREIGN KEY (`INVDET_ID`) REFERENCES `inv_details` (`INVDET_ID`);

--
-- Constraints for table `trx_adjustment`
--
ALTER TABLE `trx_adjustment`
  ADD CONSTRAINT `FKADJ1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R45` FOREIGN KEY (`GD_ID`) REFERENCES `master_goods` (`GD_ID`),
  ADD CONSTRAINT `FK_R81` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`);

--
-- Constraints for table `trx_adj_ga`
--
ALTER TABLE `trx_adj_ga`
  ADD CONSTRAINT `FKADJGA1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R79` FOREIGN KEY (`GD_ID`) REFERENCES `master_goods` (`GD_ID`),
  ADD CONSTRAINT `FK_R80` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`);

--
-- Constraints for table `trx_approvalbill`
--
ALTER TABLE `trx_approvalbill`
  ADD CONSTRAINT `FKAPPR1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R10` FOREIGN KEY (`CURR_ID`) REFERENCES `master_currency` (`CURR_ID`),
  ADD CONSTRAINT `FK_R11` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FK_R12` FOREIGN KEY (`SALES_ID`) REFERENCES `master_sales` (`SALES_ID`),
  ADD CONSTRAINT `FK_R13` FOREIGN KEY (`LOC_ID`) REFERENCES `master_location` (`LOC_ID`),
  ADD CONSTRAINT `FK_R14` FOREIGN KEY (`CUST_ID`) REFERENCES `master_customer` (`CUST_ID`),
  ADD CONSTRAINT `FK_R18` FOREIGN KEY (`BB_ID`) REFERENCES `master_bboard` (`BB_ID`),
  ADD CONSTRAINT `FK_R59` FOREIGN KEY (`PLC_ID`) REFERENCES `master_placement` (`PLC_ID`);

--
-- Constraints for table `trx_bankin`
--
ALTER TABLE `trx_bankin`
  ADD CONSTRAINT `FKBNKIN1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FKBNKIN2` FOREIGN KEY (`CSTIN_ID`) REFERENCES `master_cust_intern` (`CSTIN_ID`),
  ADD CONSTRAINT `FK_R125` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`),
  ADD CONSTRAINT `FK_R85` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FK_R86` FOREIGN KEY (`CURR_ID`) REFERENCES `master_currency` (`CURR_ID`),
  ADD CONSTRAINT `FK_R87` FOREIGN KEY (`CUST_ID`) REFERENCES `master_customer` (`CUST_ID`),
  ADD CONSTRAINT `FK_R99` FOREIGN KEY (`BANK_ID`) REFERENCES `master_bank` (`BANK_ID`);

--
-- Constraints for table `trx_bankout`
--
ALTER TABLE `trx_bankout`
  ADD CONSTRAINT `FKBNKO1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FKBO1` FOREIGN KEY (`BANK_ID`) REFERENCES `master_bank` (`BANK_ID`),
  ADD CONSTRAINT `FK_R105` FOREIGN KEY (`DEPT_ID`) REFERENCES `master_dept` (`DEPT_ID`),
  ADD CONSTRAINT `FK_R123` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FK_R124` FOREIGN KEY (`CURR_ID`) REFERENCES `master_currency` (`CURR_ID`),
  ADD CONSTRAINT `FK_R126` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`);

--
-- Constraints for table `trx_bapp`
--
ALTER TABLE `trx_bapp`
  ADD CONSTRAINT `FKBAPP1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R46` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FK_R47` FOREIGN KEY (`APPR_ID`) REFERENCES `trx_approvalbill` (`APPR_ID`);

--
-- Constraints for table `trx_bapplog`
--
ALTER TABLE `trx_bapplog`
  ADD CONSTRAINT `FKBALG1` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FKBALG2` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FKBALG3` FOREIGN KEY (`LOC_ID`) REFERENCES `master_location` (`LOC_ID`),
  ADD CONSTRAINT `FKBALG4` FOREIGN KEY (`CUST_ID`) REFERENCES `master_customer` (`CUST_ID`);

--
-- Constraints for table `trx_brc_ppn`
--
ALTER TABLE `trx_brc_ppn`
  ADD CONSTRAINT `FKBPPN1` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`);

--
-- Constraints for table `trx_budget`
--
ALTER TABLE `trx_budget`
  ADD CONSTRAINT `FKBDG1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R108` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FK_R109` FOREIGN KEY (`CURR_ID`) REFERENCES `master_currency` (`CURR_ID`),
  ADD CONSTRAINT `FK_R110` FOREIGN KEY (`DEPT_ID`) REFERENCES `master_dept` (`DEPT_ID`);

--
-- Constraints for table `trx_cash_in`
--
ALTER TABLE `trx_cash_in`
  ADD CONSTRAINT `FKCSHIN1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FKCSHIN2` FOREIGN KEY (`CSTIN_ID`) REFERENCES `master_cust_intern` (`CSTIN_ID`),
  ADD CONSTRAINT `FK_R82` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FK_R83` FOREIGN KEY (`CURR_ID`) REFERENCES `master_currency` (`CURR_ID`),
  ADD CONSTRAINT `FK_R84` FOREIGN KEY (`CUST_ID`) REFERENCES `master_customer` (`CUST_ID`),
  ADD CONSTRAINT `FK_R92` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`);

--
-- Constraints for table `trx_cash_out`
--
ALTER TABLE `trx_cash_out`
  ADD CONSTRAINT `FKCSHO1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R104` FOREIGN KEY (`DEPT_ID`) REFERENCES `master_dept` (`DEPT_ID`),
  ADD CONSTRAINT `FK_R95` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FK_R96` FOREIGN KEY (`CURR_ID`) REFERENCES `master_currency` (`CURR_ID`),
  ADD CONSTRAINT `FK_R97` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`);

--
-- Constraints for table `trx_giro_in`
--
ALTER TABLE `trx_giro_in`
  ADD CONSTRAINT `FKGRIN1` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FKGRIN2` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_131` FOREIGN KEY (`BANK_ID`) REFERENCES `master_bank` (`BANK_ID`),
  ADD CONSTRAINT `FK_trx_giro_in_chart_of_account` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`);

--
-- Constraints for table `trx_giro_out`
--
ALTER TABLE `trx_giro_out`
  ADD CONSTRAINT `FKGROUT1` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FKGROUT2` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R135` FOREIGN KEY (`BANK_ID`) REFERENCES `master_bank` (`BANK_ID`),
  ADD CONSTRAINT `FK_trx_giro_out_chart_of_account` FOREIGN KEY (`COA_ID`) REFERENCES `chart_of_account` (`COA_ID`);

--
-- Constraints for table `trx_invoice`
--
ALTER TABLE `trx_invoice`
  ADD CONSTRAINT `FK_INV1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_INV2` FOREIGN KEY (`CUST_ID`) REFERENCES `master_customer` (`CUST_ID`),
  ADD CONSTRAINT `FK_INV3` FOREIGN KEY (`CURR_ID`) REFERENCES `master_currency` (`CURR_ID`),
  ADD CONSTRAINT `FK_INV4` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FK_R52` FOREIGN KEY (`INC_ID`) REFERENCES `invoice_type` (`INC_ID`);

--
-- Constraints for table `trx_permitappr`
--
ALTER TABLE `trx_permitappr`
  ADD CONSTRAINT `FKPAPPR2` FOREIGN KEY (`PLC_ID`) REFERENCES `master_placement` (`PLC_ID`),
  ADD CONSTRAINT `FKPAPPR3` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_PAPPR1` FOREIGN KEY (`LOC_ID`) REFERENCES `master_location` (`LOC_ID`),
  ADD CONSTRAINT `FK_R111` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FK_R112` FOREIGN KEY (`APPR_ID`) REFERENCES `trx_approvalbill` (`APPR_ID`),
  ADD CONSTRAINT `FK_R113` FOREIGN KEY (`GOV_ID`) REFERENCES `master_gov_type` (`GOV_ID`),
  ADD CONSTRAINT `FK_R114` FOREIGN KEY (`CUST_ID`) REFERENCES `master_customer` (`CUST_ID`),
  ADD CONSTRAINT `FK_R115` FOREIGN KEY (`BB_ID`) REFERENCES `master_bboard` (`BB_ID`),
  ADD CONSTRAINT `FK_R116` FOREIGN KEY (`PRMTTYP_ID`) REFERENCES `master_permit_type` (`PRMTTYP_ID`);

--
-- Constraints for table `trx_po`
--
ALTER TABLE `trx_po`
  ADD CONSTRAINT `FKPO1` FOREIGN KEY (`LOC_ID`) REFERENCES `master_location` (`LOC_ID`),
  ADD CONSTRAINT `FKPO2` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R22` FOREIGN KEY (`SUPP_ID`) REFERENCES `master_supplier` (`SUPP_ID`),
  ADD CONSTRAINT `FK_R23` FOREIGN KEY (`APPR_ID`) REFERENCES `trx_approvalbill` (`APPR_ID`),
  ADD CONSTRAINT `FK_R24` FOREIGN KEY (`CURR_ID`) REFERENCES `master_currency` (`CURR_ID`),
  ADD CONSTRAINT `FK_R33` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`);

--
-- Constraints for table `trx_po_ga`
--
ALTER TABLE `trx_po_ga`
  ADD CONSTRAINT `FKPOGA1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R56` FOREIGN KEY (`CURR_ID`) REFERENCES `master_currency` (`CURR_ID`),
  ADD CONSTRAINT `FK_R57` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FK_R58` FOREIGN KEY (`SUPP_ID`) REFERENCES `master_supplier` (`SUPP_ID`);

--
-- Constraints for table `trx_prc_ga`
--
ALTER TABLE `trx_prc_ga`
  ADD CONSTRAINT `FKPRCGA1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R62` FOREIGN KEY (`POGA_ID`) REFERENCES `trx_po_ga` (`POGA_ID`),
  ADD CONSTRAINT `FK_R63` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FK_R64` FOREIGN KEY (`CURR_ID`) REFERENCES `master_currency` (`CURR_ID`);

--
-- Constraints for table `trx_procurement`
--
ALTER TABLE `trx_procurement`
  ADD CONSTRAINT `FKPRC1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R25` FOREIGN KEY (`PO_ID`) REFERENCES `trx_po` (`PO_ID`),
  ADD CONSTRAINT `FK_R26` FOREIGN KEY (`CURR_ID`) REFERENCES `master_currency` (`CURR_ID`),
  ADD CONSTRAINT `FK_R34` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`);

--
-- Constraints for table `trx_tax_invoice`
--
ALTER TABLE `trx_tax_invoice`
  ADD CONSTRAINT `FKTINV1` FOREIGN KEY (`CUST_ID`) REFERENCES `master_customer` (`CUST_ID`),
  ADD CONSTRAINT `FKTINV2` FOREIGN KEY (`INV_ID`) REFERENCES `trx_invoice` (`INV_ID`),
  ADD CONSTRAINT `FKTINV3` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`);

--
-- Constraints for table `trx_usage`
--
ALTER TABLE `trx_usage`
  ADD CONSTRAINT `FKUSG1` FOREIGN KEY (`LOC_ID`) REFERENCES `master_location` (`LOC_ID`),
  ADD CONSTRAINT `FKUSG2` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R37` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FK_R39` FOREIGN KEY (`APPR_ID`) REFERENCES `trx_approvalbill` (`APPR_ID`);

--
-- Constraints for table `trx_usage_ga`
--
ALTER TABLE `trx_usage_ga`
  ADD CONSTRAINT `FKUSGGA1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R72` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`);

--
-- Constraints for table `usage_details`
--
ALTER TABLE `usage_details`
  ADD CONSTRAINT `FK_R36` FOREIGN KEY (`USG_ID`) REFERENCES `trx_usage` (`USG_ID`),
  ADD CONSTRAINT `FK_R40` FOREIGN KEY (`GD_ID`) REFERENCES `master_goods` (`GD_ID`);

--
-- Constraints for table `usage_ga_ret`
--
ALTER TABLE `usage_ga_ret`
  ADD CONSTRAINT `FKRTUSGGA1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R75` FOREIGN KEY (`USGGA_ID`) REFERENCES `trx_usage_ga` (`USGGA_ID`),
  ADD CONSTRAINT `FK_R76` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`);

--
-- Constraints for table `usage_ret`
--
ALTER TABLE `usage_ret`
  ADD CONSTRAINT `FKRTUSG1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `master_branch` (`BRANCH_ID`),
  ADD CONSTRAINT `FK_R41` FOREIGN KEY (`USER_ID`) REFERENCES `master_user` (`USER_ID`),
  ADD CONSTRAINT `FK_R42` FOREIGN KEY (`USG_ID`) REFERENCES `trx_usage` (`USG_ID`);

--
-- Constraints for table `usg_ga_details`
--
ALTER TABLE `usg_ga_details`
  ADD CONSTRAINT `FK_R73` FOREIGN KEY (`USGGA_ID`) REFERENCES `trx_usage_ga` (`USGGA_ID`),
  ADD CONSTRAINT `FK_R74` FOREIGN KEY (`GD_ID`) REFERENCES `master_goods` (`GD_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
