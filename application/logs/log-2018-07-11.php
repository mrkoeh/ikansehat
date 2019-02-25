<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-07-11 16:37:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') GROUP BY                  informasipenyakit.penyakit_kode ORDER BY gejalapenya' at line 1 - Invalid query: SELECT penyakit_kode,Count(informasipenyakit.penyakit_kode) AS gejalapenyakit FROM informasipenyakit WHERE informasipenyakit.gejala_kode IN () GROUP BY                  informasipenyakit.penyakit_kode ORDER BY gejalapenyakit DESC limit 1 
ERROR - 2018-07-11 16:37:49 --> Severity: error --> Exception: Call to a member function num_rows() on boolean E:\xampp\htdocs\kukuh_ikan\application\controllers\Konsultasi.php 123
ERROR - 2018-07-11 18:34:24 --> Query error: Table 'ikan_sehat.jenispenyakit' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows` FROM `jenispenyakit`
ERROR - 2018-07-11 18:34:24 --> Severity: Error --> Call to a member function num_rows() on a non-object C:\xampp\htdocs\ikan_sehat\system\database\DB_driver.php 1222
ERROR - 2018-07-11 18:35:12 --> Query error: Table 'ikan_sehat.jenispenyakit' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows` FROM `jenispenyakit`
ERROR - 2018-07-11 18:35:12 --> Severity: Error --> Call to a member function num_rows() on a non-object C:\xampp\htdocs\ikan_sehat\system\database\DB_driver.php 1222
