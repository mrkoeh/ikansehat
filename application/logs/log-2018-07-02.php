<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-07-02 21:22:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') GROUP BY
                      pengetahuan.penyakit_kode ORDER BY gejala DESC ' at line 1 - Invalid query: SELECT penyakit_kode,Count(pengetahuan.gejala_kode) AS gejala FROM pengetahuan WHERE pengetahuan.gejala_kode IN () GROUP BY
                      pengetahuan.penyakit_kode ORDER BY gejala DESC limit 1 
ERROR - 2018-07-02 21:22:51 --> Severity: error --> Exception: Call to a member function num_rows() on boolean E:\xampp\htdocs\kukuh_ikan\application\controllers\Konsultasi.php 123
