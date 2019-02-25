<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-07-28 20:46:51 --> 404 Page Not Found: Assets/template
ERROR - 2018-07-28 20:46:54 --> 404 Page Not Found: Assets/template
ERROR - 2018-07-28 20:47:21 --> 404 Page Not Found: Assets/template
ERROR - 2018-07-28 21:54:58 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) E:\xampp\htdocs\ikan_sehat_2\application\views\admin\mod_front\home_dashboard.php 24
ERROR - 2018-07-28 21:59:01 --> 404 Page Not Found: UserDashboard/index
ERROR - 2018-07-28 22:00:26 --> 404 Page Not Found: UserDashboard/index
ERROR - 2018-07-28 22:00:51 --> 404 Page Not Found: UserDashboard/index
ERROR - 2018-07-28 22:03:30 --> 404 Page Not Found: Akun/akun
ERROR - 2018-07-28 22:48:38 --> 404 Page Not Found: Informasipenyakit/get_detail_penyakit
ERROR - 2018-07-28 22:48:38 --> Query error: Table 'kukuh_ikan_2.penyakit' doesn't exist - Invalid query: SELECT konsultasi.id,konsultasi.tanggal_konsultasi,konsultasi.penyakit_kode,users.nama,users.alamat,penyakit.jenis_penyakit,ikan.nama_ikan FROM konsultasi 
                                    INNER JOIN users ON users.id = konsultasi.user_id
                                    INNER JOIN penyakit ON penyakit.kode = konsultasi.penyakit_kode
                                    LEFT JOIN ikan ON ikan.id = konsultasi.ikan_id
                                    WHERE konsultasi.id = '46'
ERROR - 2018-07-28 22:48:38 --> Severity: error --> Exception: Call to a member function result_array() on boolean E:\xampp\htdocs\ikan_sehat_2\application\controllers\Laporan.php 114
ERROR - 2018-07-28 22:48:44 --> 404 Page Not Found: Informasipenyakit/get_detail_penyakit
ERROR - 2018-07-28 22:48:44 --> Query error: Table 'kukuh_ikan_2.penyakit' doesn't exist - Invalid query: SELECT konsultasi.id,konsultasi.tanggal_konsultasi,konsultasi.penyakit_kode,users.nama,users.alamat,penyakit.jenis_penyakit,ikan.nama_ikan FROM konsultasi 
                                    INNER JOIN users ON users.id = konsultasi.user_id
                                    INNER JOIN penyakit ON penyakit.kode = konsultasi.penyakit_kode
                                    LEFT JOIN ikan ON ikan.id = konsultasi.ikan_id
                                    WHERE konsultasi.id = '41'
ERROR - 2018-07-28 22:48:44 --> Severity: error --> Exception: Call to a member function result_array() on boolean E:\xampp\htdocs\ikan_sehat_2\application\controllers\Laporan.php 114
ERROR - 2018-07-28 22:49:28 --> 404 Page Not Found: Informasipenyakit/get_detail_penyakit
ERROR - 2018-07-28 22:49:28 --> Query error: Table 'kukuh_ikan_2.penyakit' doesn't exist - Invalid query: SELECT konsultasi.id,konsultasi.tanggal_konsultasi,konsultasi.penyakit_kode,users.nama,users.alamat,penyakit.jenis_penyakit,ikan.nama_ikan FROM konsultasi 
                                    INNER JOIN users ON users.id = konsultasi.user_id
                                    INNER JOIN penyakit ON penyakit.kode = konsultasi.penyakit_kode
                                    LEFT JOIN ikan ON ikan.id = konsultasi.ikan_id
                                    WHERE konsultasi.id = '41'
ERROR - 2018-07-28 22:49:28 --> Severity: error --> Exception: Call to a member function result_array() on boolean E:\xampp\htdocs\ikan_sehat_2\application\controllers\Laporan.php 114
ERROR - 2018-07-28 22:50:45 --> Query error: Table 'kukuh_ikan_2.penyakit' doesn't exist - Invalid query: SELECT konsultasi.id,konsultasi.tanggal_konsultasi,konsultasi.penyakit_kode,users.nama,users.alamat,jenispenyakit.jenis_penyakit,ikan.nama_ikan FROM konsultasi 
                                    INNER JOIN users ON users.id = konsultasi.user_id
                                    INNER JOIN penyakit ON jenispenyakit.kode = konsultasi.penyakit_kode
                                    LEFT JOIN ikan ON ikan.id = konsultasi.ikan_id
                                    WHERE konsultasi.id = '41'
ERROR - 2018-07-28 22:50:45 --> Severity: error --> Exception: Call to a member function result_array() on boolean E:\xampp\htdocs\ikan_sehat_2\application\controllers\Laporan.php 114
ERROR - 2018-07-28 22:51:15 --> Severity: Notice --> Undefined offset: 0 E:\xampp\htdocs\ikan_sehat_2\application\controllers\Laporan.php 117
ERROR - 2018-07-28 22:51:15 --> Severity: Notice --> Undefined offset: 0 E:\xampp\htdocs\ikan_sehat_2\application\controllers\Laporan.php 118
ERROR - 2018-07-28 22:51:15 --> Severity: Notice --> Undefined offset: 0 E:\xampp\htdocs\ikan_sehat_2\application\controllers\Laporan.php 119
ERROR - 2018-07-28 22:51:15 --> Severity: Notice --> Undefined offset: 0 E:\xampp\htdocs\ikan_sehat_2\application\controllers\Laporan.php 120
ERROR - 2018-07-28 22:51:15 --> Severity: Notice --> Undefined offset: 0 E:\xampp\htdocs\ikan_sehat_2\application\controllers\Laporan.php 121
ERROR - 2018-07-28 22:51:15 --> Severity: Notice --> Undefined offset: 0 E:\xampp\htdocs\ikan_sehat_2\application\controllers\Laporan.php 122
ERROR - 2018-07-28 22:51:15 --> Severity: Notice --> Undefined offset: 0 E:\xampp\htdocs\ikan_sehat_2\application\controllers\Laporan.php 123
ERROR - 2018-07-28 22:51:15 --> Query error: Table 'kukuh_ikan_2.konsultasi_detail' doesn't exist - Invalid query: SELECT konsultasi_detail.gejala_kode,gejala.nama_gejala FROM konsultasi_detail INNER JOIN gejala ON gejala.kode = konsultasi_detail.gejala_kode WHERE konsultasi_detail.konsultasi_id = '41'
ERROR - 2018-07-28 22:51:15 --> Severity: error --> Exception: Call to a member function result_array() on boolean E:\xampp\htdocs\ikan_sehat_2\application\controllers\Laporan.php 127
ERROR - 2018-07-28 22:51:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\ikan_sehat_2\system\core\Exceptions.php:271) E:\xampp\htdocs\ikan_sehat_2\system\core\Common.php 578
ERROR - 2018-07-28 22:52:47 --> Query error: Table 'kukuh_ikan_2.konsultasi_detail' doesn't exist - Invalid query: SELECT konsultasi_detail.gejala_kode,gejala.nama_gejala FROM konsultasi_detail INNER JOIN gejala ON gejala.kode = konsultasi_detail.gejala_kode WHERE konsultasi_detail.konsultasi_id = '41'
ERROR - 2018-07-28 22:52:47 --> Severity: error --> Exception: Call to a member function result_array() on boolean E:\xampp\htdocs\ikan_sehat_2\application\controllers\Laporan.php 127
ERROR - 2018-07-28 22:53:19 --> Query error: Table 'kukuh_ikan_2.konsultasi_detail' doesn't exist - Invalid query: SELECT konsultasi_detail.gejala_kode,gejala.nama_gejala FROM konsultasi_detail INNER JOIN gejala ON gejala.kode = konsultasi_detail.gejala_kode WHERE konsultasi_detail.konsultasi_id = '41'
ERROR - 2018-07-28 22:53:19 --> Severity: error --> Exception: Call to a member function result_array() on boolean E:\xampp\htdocs\ikan_sehat_2\application\controllers\Laporan.php 127
ERROR - 2018-07-28 22:53:32 --> Query error: Table 'kukuh_ikan_2.konsultasi_detail' doesn't exist - Invalid query: SELECT konsultasi_detail.gejala_kode,gejala.nama_gejala FROM konsultasi_detail INNER JOIN gejala ON gejala.kode = konsultasi_detail.gejala_kode WHERE konsultasi_detail.konsultasi_id = '65'
ERROR - 2018-07-28 22:53:32 --> Severity: error --> Exception: Call to a member function result_array() on boolean E:\xampp\htdocs\ikan_sehat_2\application\controllers\Laporan.php 127
ERROR - 2018-07-28 22:55:34 --> Query error: Table 'kukuh_ikan_2.solusi' doesn't exist - Invalid query: SELECT solusi.jenis_solusi FROM solusi 
                                  INNER JOIN konsultasi ON  konsultasi.penyakit_kode = solusi.penyakit_kode
                                  WHERE konsultasi.id = '65'
ERROR - 2018-07-28 22:55:34 --> Severity: error --> Exception: Call to a member function result_array() on boolean E:\xampp\htdocs\ikan_sehat_2\application\controllers\Laporan.php 133
ERROR - 2018-07-28 23:06:32 --> Severity: Notice --> Undefined index: rows E:\xampp\htdocs\ikan_sehat_2\application\libraries\tcpdf\tcpdf.php 16924
ERROR - 2018-07-28 23:06:32 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given E:\xampp\htdocs\ikan_sehat_2\application\libraries\tcpdf\tcpdf.php 16926
ERROR - 2018-07-28 23:06:32 --> Severity: Notice --> Undefined index: startcolumn E:\xampp\htdocs\ikan_sehat_2\application\libraries\tcpdf\tcpdf.php 19458
ERROR - 2018-07-28 23:06:32 --> Severity: Notice --> Undefined index: startx E:\xampp\htdocs\ikan_sehat_2\application\libraries\tcpdf\tcpdf.php 19459
ERROR - 2018-07-28 23:06:32 --> Severity: Notice --> Undefined index: startpage E:\xampp\htdocs\ikan_sehat_2\application\libraries\tcpdf\tcpdf.php 19462
ERROR - 2018-07-28 23:06:32 --> Severity: Notice --> Undefined index: startpage E:\xampp\htdocs\ikan_sehat_2\application\libraries\tcpdf\tcpdf.php 19465
ERROR - 2018-07-28 23:06:32 --> Severity: Notice --> Undefined index:  E:\xampp\htdocs\ikan_sehat_2\application\libraries\tcpdf\tcpdf.php 19465
ERROR - 2018-07-28 23:06:32 --> Severity: Notice --> Undefined index: startpage E:\xampp\htdocs\ikan_sehat_2\application\libraries\tcpdf\tcpdf.php 19466
ERROR - 2018-07-28 23:06:32 --> Severity: Notice --> Undefined index:  E:\xampp\htdocs\ikan_sehat_2\application\libraries\tcpdf\tcpdf.php 19466
