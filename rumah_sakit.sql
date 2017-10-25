-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `diskon`;
CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL AUTO_INCREMENT,
  `nama` char(50) NOT NULL,
  `nominal` varchar(10) NOT NULL,
  `expire` date NOT NULL,
  PRIMARY KEY (`id_diskon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `diskon` (`id_diskon`, `nama`, `nominal`, `expire`) VALUES
(1,	'BCA Debit',	'20',	'2026-02-19'),
(2,	'Debit Danamon',	'30',	'2018-03-10'),
(4,	'Optio do dolorem quis expedita ullam',	'10',	'0000-00-00');

DROP TABLE IF EXISTS `dokter`;
CREATE TABLE `dokter` (
  `id_dokter` int(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `handpone` varchar(15) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `id_spesialis` int(6) NOT NULL,
  PRIMARY KEY (`id_dokter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `dokter` (`id_dokter`, `nama`, `alamat`, `handpone`, `phone`, `id_spesialis`) VALUES
(1,	'Budi Budiman',	'jalan jalan jalan jalanjalan jalan jalan jalan jal',	'811584986',	'620095',	7),
(3,	'Susan',	'sdadasd',	'2147483647',	'637793',	2),
(4,	'Joko jokoko',	'asddasdasdasdasdasdasddasdasdasasasdsadsadsd asdda',	'811294263',	'646123',	3),
(8,	'Agus Sulaiman',	'jl. mawar no.10\r\nLippo Karawaci\r\nTangerang\r\n',	'2147483647',	'2147483647',	1),
(10,	'Arif Setiawan',	'Jakarta',	'2147483647',	'567',	1);

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` char(10) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `login` (`id_user`, `username`, `password`, `level`, `status`) VALUES
(1,	'admin',	'202cb962ac59075b964b07152d234b70',	'admin',	1),
(5,	'ami',	'202cb962ac59075b964b07152d234b70',	'pimpinan',	1),
(6,	'fahmi',	'202cb962ac59075b964b07152d234b70',	'admin',	1),
(7,	'toke',	'c4ca4238a0b923820dcc509a6f75849b',	'admin',	1),
(8,	'nando',	'202cb962ac59075b964b07152d234b70',	'1',	1),
(10,	'kymudo',	'202cb962ac59075b964b07152d234b70',	'',	1);

DROP TABLE IF EXISTS `obat`;
CREATE TABLE `obat` (
  `id_obat` int(6) NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `type` int(5) NOT NULL,
  `quantity` int(6) NOT NULL,
  `unit` char(15) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `harga` int(20) NOT NULL,
  `max_stok` int(6) NOT NULL,
  `min_stok` int(6) NOT NULL,
  `quantity1` int(11) DEFAULT NULL,
  `expired1` date DEFAULT NULL,
  `quantity2` int(11) DEFAULT NULL,
  `expired2` date DEFAULT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `obat` (`id_obat`, `kode_produk`, `nama`, `type`, `quantity`, `unit`, `keterangan`, `harga`, `max_stok`, `min_stok`, `quantity1`, `expired1`, `quantity2`, `expired2`) VALUES
(2,	'PAN19052016',	'Panadol',	2,	45,	'KAP',	'obat penghilang sakit kaki',	50000,	200,	50,	NULL,	NULL,	NULL,	NULL),
(3,	'PAR20032998',	'Paramexs',	2,	-290,	'TAB',	'pereda sakit tenggorokan dan kepala',	75000,	100,	20,	NULL,	NULL,	NULL,	NULL),
(4,	'BOD12042020',	'Bodrex',	2,	-377,	'TAB',	'bodrex obat sakit kepala berat',	20000,	500,	200,	NULL,	NULL,	NULL,	NULL),
(5,	'LIP20052990',	'Lipitor 40 MG',	2,	-527,	'BUT',	'Obat kolestrol',	20000,	400,	150,	NULL,	NULL,	NULL,	NULL),
(6,	'YOS10202012',	'Yosenob 300',	2,	180,	'BUT',	'obat penurun kolestrol',	6700,	400,	50,	NULL,	NULL,	NULL,	NULL),
(7,	'EVO19052897',	'Evothyl 300',	2,	-546,	'BUT',	'obat penurun kolestrol ringan',	8250,	500,	30,	NULL,	NULL,	NULL,	NULL),
(8,	'FIB12052009',	'Fibramed 300 MG 30 ',	2,	-1139,	'TAB',	'Jamu pereda sakit',	50000,	500,	150,	NULL,	NULL,	NULL,	NULL),
(9,	'STA24062020',	'Stator 20 MG',	2,	-311,	'KAP',	'Obat gagal ginjal',	45000,	500,	100,	NULL,	NULL,	NULL,	NULL),
(10,	'JOM24052090',	'Jomblo 20mg',	1,	-623,	'KAP',	'Obat pereda sakit hati',	15000,	200,	100,	NULL,	NULL,	NULL,	NULL),
(11,	'GAN23062019',	'Ganzteng',	2,	-526,	'KAP',	'Obat pembentuk wajah',	30000,	400,	50,	NULL,	NULL,	NULL,	NULL),
(12,	'GEM20122030',	'Gemfibrozil 300MG',	0,	4024,	'BUT',	'Obat penurun tekanan darah',	13000,	1000,	6000,	9,	'0000-00-00',	0,	'0000-00-00');

DROP TABLE IF EXISTS `pasien`;
CREATE TABLE `pasien` (
  `id_pasien` int(6) NOT NULL AUTO_INCREMENT,
  `no_pasien` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` int(2) NOT NULL,
  `jenis_kelamin` char(10) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telpon` varchar(13) NOT NULL,
  `telpon_rumah` varchar(15) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  PRIMARY KEY (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `pasien` (`id_pasien`, `no_pasien`, `nama`, `umur`, `jenis_kelamin`, `tanggal`, `alamat`, `telpon`, `telpon_rumah`, `tanggal_daftar`) VALUES
(1,	'000000001',	'Agus',	32,	'pria',	'1996-02-19',	'Jalan Merpati No.20Jakarta UtaraIndonesia',	'0',	'18648646',	'2016-02-19'),
(2,	'000000415',	'Hadi Supriadi',	45,	'Wanita',	'1997-03-10',	'Kutilang Raya No.10KarawaciTangerang',	'4452589',	'11846225',	'2016-03-08');

DROP TABLE IF EXISTS `spesialis`;
CREATE TABLE `spesialis` (
  `id_spesialis` int(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id_spesialis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `spesialis` (`id_spesialis`, `nama`) VALUES
(1,	'Tulangsx'),
(2,	'Kepala'),
(3,	'Kaki'),
(5,	'trytfytfyf'),
(6,	'Jantung'),
(7,	'Paru - paru'),
(8,	'Ginjal'),
(9,	'tangan'),
(10,	'Nell Shepherd');

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `id_supplier` int(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telpon` varchar(15) NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `supplier` (`id_supplier`, `nama`, `alamat`, `telpon`) VALUES
(1,	'PT. Paramex Indonesiae',	'Jakarta Utara no.10',	'2147483647'),
(3,	'supplier panadol',	'jalan jalan',	'486486'),
(4,	'PT. Panadol Jakarta',	'Kebon Jeruk No.10\r\nSumatra',	'411255436'),
(5,	'Tasha Elliott',	'Fugiat eius consequat Quis ea dolorem ut id est ',	'2147483647'),
(6,	'Hedda Manning',	'Voluptates quisquam ut eligendi atque non tempor o',	'2147483647');

DROP TABLE IF EXISTS `tiket`;
CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL AUTO_INCREMENT,
  `nama` char(100) NOT NULL,
  PRIMARY KEY (`id_tiket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tiket` (`id_tiket`, `nama`) VALUES
(1,	'3x1'),
(2,	'2x1'),
(3,	'5x1'),
(4,	'12x1');

DROP TABLE IF EXISTS `tiket_waktu`;
CREATE TABLE `tiket_waktu` (
  `id_tiket_waktu` int(11) NOT NULL AUTO_INCREMENT,
  `nama` char(100) NOT NULL,
  PRIMARY KEY (`id_tiket_waktu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tiket_waktu` (`id_tiket_waktu`, `nama`) VALUES
(1,	'Sebelum Makans'),
(2,	'Sesudah Makan');

DROP TABLE IF EXISTS `tipe_obat`;
CREATE TABLE `tipe_obat` (
  `id_tipe` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_tipe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tipe_obat` (`id_tipe`, `nama`) VALUES
(1,	'Obat Luar'),
(2,	'Obat Dalam');

-- 2017-10-25 09:49:26
