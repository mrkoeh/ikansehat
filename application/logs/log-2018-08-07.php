<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-08-07 20:17:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') GROUP BY                  informasipenyakit.penyakit_kode ORDER BY gejalapenya' at line 1 - Invalid query: SELECT penyakit_kode,Count(informasipenyakit.penyakit_kode) AS gejalapenyakit FROM informasipenyakit WHERE informasipenyakit.gejala_kode IN () GROUP BY                  informasipenyakit.penyakit_kode ORDER BY gejalapenyakit DESC
ERROR - 2018-08-07 20:17:07 --> Severity: error --> Exception: Call to a member function num_rows() on boolean E:\xampp\htdocs\ikan_sehat_revisi\application\controllers\Konsultasi.php 116
