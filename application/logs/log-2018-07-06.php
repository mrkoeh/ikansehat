<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-07-06 17:03:53 --> Query error: Table 'kukuh_ikan.penyakit' doesn't exist - Invalid query: INSERT INTO `penyakit` (`kode`, `jenis_penyakit`, `gambar`, `kode_gejala`) VALUES ('P22', 'TES', 'file_1530871433.png', 'G01,G02')
ERROR - 2018-07-06 17:10:16 --> Query error: Table 'kukuh_ikan.jenis' doesn't exist - Invalid query: select gambar from jenis where kode ='P22'
ERROR - 2018-07-06 17:10:17 --> Severity: error --> Exception: Call to a member function result() on boolean E:\xampp\htdocs\kukuh_ikan\application\controllers\Penyakit.php 135
ERROR - 2018-07-06 17:11:27 --> Query error: Unknown column 'penyakit_kode' in 'where clause' - Invalid query: DELETE FROM riwayatkonsultasi WHERE penyakit_kode = 'P22'
ERROR - 2018-07-06 17:25:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') GROUP BY
                      informasipenyakit.penyakit_kode ORDER BY gejala' at line 1 - Invalid query: SELECT penyakit_kode,Count(informasipenyakit.gejala_kode) AS gejalapenyakit FROM informasipenyakit WHERE informasipenyakit.gejala_kode IN () GROUP BY
                      informasipenyakit.penyakit_kode ORDER BY gejalapenyakit DESC limit 1 
ERROR - 2018-07-06 17:25:15 --> Severity: error --> Exception: Call to a member function num_rows() on boolean E:\xampp\htdocs\kukuh_ikan\application\controllers\Konsultasi.php 123
ERROR - 2018-07-06 17:25:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') GROUP BY
                      informasipenyakit.penyakit_kode ORDER BY gejala' at line 1 - Invalid query: SELECT penyakit_kode,Count(informasipenyakit.gejala_kode) AS gejalapenyakit FROM informasipenyakit WHERE informasipenyakit.gejala_kode IN () GROUP BY
                      informasipenyakit.penyakit_kode ORDER BY gejalapenyakit DESC limit 1 
ERROR - 2018-07-06 17:25:22 --> Severity: error --> Exception: Call to a member function num_rows() on boolean E:\xampp\htdocs\kukuh_ikan\application\controllers\Konsultasi.php 123
ERROR - 2018-07-06 17:25:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') GROUP BY
                      informasipenyakit.penyakit_kode ORDER BY gejala' at line 1 - Invalid query: SELECT penyakit_kode,Count(informasipenyakit.gejala_kode) AS gejalapenyakit FROM informasipenyakit WHERE informasipenyakit.gejala_kode IN () GROUP BY
                      informasipenyakit.penyakit_kode ORDER BY gejalapenyakit DESC limit 1 
ERROR - 2018-07-06 17:25:43 --> Severity: error --> Exception: Call to a member function num_rows() on boolean E:\xampp\htdocs\kukuh_ikan\application\controllers\Konsultasi.php 123
ERROR - 2018-07-06 17:26:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') GROUP BY
                      informasipenyakit.penyakit_kode ORDER BY gejala' at line 1 - Invalid query: SELECT penyakit_kode,Count(informasipenyakit.gejala_kode) AS gejalapenyakit FROM informasipenyakit WHERE informasipenyakit.gejala_kode IN () GROUP BY
                      informasipenyakit.penyakit_kode ORDER BY gejalapenyakit DESC limit 1 
ERROR - 2018-07-06 17:26:11 --> Severity: error --> Exception: Call to a member function num_rows() on boolean E:\xampp\htdocs\kukuh_ikan\application\controllers\Konsultasi.php 123
