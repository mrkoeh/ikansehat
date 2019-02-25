<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-08-13 00:05:34 --> Query error: Unknown column 'riwayatkonsultasi.konsultasi_id' in 'where clause' - Invalid query: SELECT * 
                                        FROM jenispenyakit
                                        JOIN gejalapenyakit ON gejalapenyakit.penyakit_kode = jenispenyakit.kode
                                        JOIN konsultasi ON konsultasi.penyakit_kode = jenispenyakit.kode
                                        WHERE riwayatkonsultasi.konsultasi_id = '226'
ERROR - 2018-08-13 00:05:34 --> Severity: error --> Exception: Call to a member function result_array() on boolean E:\xampp\htdocs\ikan_sehat_revisi\application\controllers\Konsultasi.php 165
ERROR - 2018-08-13 17:18:11 --> 404 Page Not Found: Konsultasi/riwayat
ERROR - 2018-08-13 17:18:17 --> 404 Page Not Found: Konsultasi/riwayat
ERROR - 2018-08-13 17:18:22 --> 404 Page Not Found: Konsultasi/riwayat
ERROR - 2018-08-13 17:18:29 --> 404 Page Not Found: Konsultasi/riwayat
ERROR - 2018-08-13 17:18:40 --> 404 Page Not Found: Konsultasi/riwayat
ERROR - 2018-08-13 17:20:34 --> 404 Page Not Found: Konsultasi/riwayat
ERROR - 2018-08-13 17:36:37 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\ikan_sehat_revisi\application\controllers\Gejala.php 44
ERROR - 2018-08-13 17:36:37 --> Query error: Column 'ikan_id' cannot be null - Invalid query: INSERT INTO `gejalapenyakit` (`kode`, `nama_gejala`, `ya`, `tidak`, `penyakit_kode`, `ikan_id`) VALUES ('G61', 'Tambah Gejala', '0', '0', '0', NULL)
ERROR - 2018-08-13 17:39:01 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\ikan_sehat_revisi\application\controllers\Gejala.php 82
ERROR - 2018-08-13 17:43:06 --> Query error: Table 'ikan_sehat_2.informasipenyakit' doesn't exist - Invalid query: DELETE FROM informasipenyakit WHERE penyakit_kode = 'P19'
ERROR - 2018-08-13 17:44:34 --> Query error: Unknown column 'penyakit_kode' in 'where clause' - Invalid query: DELETE FROM riwayatkonsultasi WHERE penyakit_kode = 'P19'
ERROR - 2018-08-13 19:34:30 --> 404 Page Not Found: Konsultasi/riwayat
