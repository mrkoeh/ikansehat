<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-05-26 08:08:58 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\Users\root\Desktop\UniServerZ\www\sispakari\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2018-05-26 08:08:58 --> Unable to connect to the database
ERROR - 2018-05-26 08:17:28 --> Severity: Parsing Error --> syntax error, unexpected end of file, expecting function (T_FUNCTION) C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 40
ERROR - 2018-05-26 08:21:27 --> Severity: Parsing Error --> syntax error, unexpected end of file, expecting function (T_FUNCTION) C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 40
ERROR - 2018-05-26 08:21:28 --> Severity: Parsing Error --> syntax error, unexpected end of file, expecting function (T_FUNCTION) C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 40
ERROR - 2018-05-26 08:21:28 --> Severity: Parsing Error --> syntax error, unexpected end of file, expecting function (T_FUNCTION) C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 40
ERROR - 2018-05-26 08:22:05 --> Severity: Error --> Cannot use object of type CI_DB_mysqli_result as array C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 34
ERROR - 2018-05-26 08:22:42 --> Severity: Error --> Cannot use object of type CI_DB_mysqli_result as array C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 34
ERROR - 2018-05-26 08:23:28 --> Severity: Notice --> Undefined index: kode C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 34
ERROR - 2018-05-26 08:37:56 --> Severity: Notice --> Undefined offset: 0 C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 34
ERROR - 2018-05-26 08:39:08 --> Severity: Notice --> Undefined offset: 0 C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 33
ERROR - 2018-05-26 08:52:00 --> Query error: Not unique table/alias: 'penyakit_detail' - Invalid query: SELECT penyakit.kode AS kode_penyakit, gejala.kode AS kode_gejala, penyakit.jenis_penyakit FROM 
                                penyakit
                                INNER JOIN penyakit_detail ON penyakit.kode = penyakit_detail.penyakit_kode 
                                INNER JOIN penyakit_detail ON gejala.kode = penyakit_detail.gejala_kode
                                WHERE
                                penyakit_detail.gejala_kode LIKE '%G03%' 
                                GROUP BY penyakit.kode
ERROR - 2018-05-26 08:52:00 --> Severity: Error --> Call to a member function result_array() on a non-object C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 38
ERROR - 2018-05-26 08:52:32 --> Query error: Not unique table/alias: 'penyakit_detail' - Invalid query: SELECT penyakit.kode AS kode_penyakit, gejala.kode AS kode_gejala, penyakit.jenis_penyakit FROM 
                                penyakit
                                INNER JOIN penyakit_detail ON penyakit.kode = penyakit_detail.penyakit_kode 
                                INNER JOIN penyakit_detail ON gejala.kode = penyakit_detail.gejala_kode
                                WHERE
                                penyakit_detail.gejala_kode LIKE '%G03%' 
                                GROUP BY penyakit_detail.penyakit_kode
ERROR - 2018-05-26 08:52:32 --> Severity: Error --> Call to a member function result_array() on a non-object C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 38
ERROR - 2018-05-26 08:52:51 --> Query error: Not unique table/alias: 'penyakit_detail' - Invalid query: SELECT penyakit.kode AS kode_penyakit, gejala.kode AS kode_gejala, penyakit.jenis_penyakit FROM 
                                penyakit
                                INNER JOIN penyakit_detail ON penyakit.kode = penyakit_detail.penyakit_kode 
                                INNER JOIN penyakit_detail ON gejala.kode = penyakit_detail.gejala_kode
                                WHERE
                                penyakit_detail.gejala_kode LIKE '%G02%'
ERROR - 2018-05-26 08:52:51 --> Severity: Error --> Call to a member function result_array() on a non-object C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 37
ERROR - 2018-05-26 08:53:40 --> Query error: Not unique table/alias: 'penyakit_detail' - Invalid query: SELECT penyakit.kode AS kode_penyakit, gejala.kode AS kode_gejala, penyakit.jenis_penyakit FROM 
                                penyakit
                                LEFT JOIN penyakit_detail ON penyakit.kode = penyakit_detail.penyakit_kode 
                                LEFT JOIN penyakit_detail ON gejala.kode = penyakit_detail.gejala_kode
                                WHERE
                                penyakit_detail.gejala_kode LIKE '%G02%'
ERROR - 2018-05-26 08:53:40 --> Severity: Error --> Call to a member function result_array() on a non-object C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 37
ERROR - 2018-05-26 09:42:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1
 LIMIT 2' at line 2 - Invalid query: SELECT *
FROM `gejala`, 1
 LIMIT 2
ERROR - 2018-05-26 09:42:25 --> Severity: Error --> Call to a member function result_array() on a non-object C:\Users\root\Desktop\UniServerZ\www\sispakari\application\models\Gejala_model.php 12
ERROR - 2018-05-26 09:42:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1
 LIMIT 2' at line 2 - Invalid query: SELECT *
FROM `gejala`, 1
 LIMIT 2
ERROR - 2018-05-26 09:42:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 8
ERROR - 2018-05-26 09:43:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1
 LIMIT 2' at line 2 - Invalid query: SELECT *
FROM `gejala`, 1
 LIMIT 2
ERROR - 2018-05-26 09:43:06 --> Severity: Error --> Call to a member function result_array() on a non-object C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 8
ERROR - 2018-05-26 10:02:36 --> Severity: Parsing Error --> syntax error, unexpected '$config' (T_VARIABLE) C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 25
ERROR - 2018-05-26 10:16:16 --> Severity: Warning --> Missing argument 1 for Gejala_model::datagejala(), called in C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php on line 45 and defined C:\Users\root\Desktop\UniServerZ\www\sispakari\application\models\Gejala_model.php 7
ERROR - 2018-05-26 10:16:16 --> Severity: Warning --> Missing argument 2 for Gejala_model::datagejala(), called in C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php on line 45 and defined C:\Users\root\Desktop\UniServerZ\www\sispakari\application\models\Gejala_model.php 7
ERROR - 2018-05-26 10:16:16 --> Severity: Notice --> Undefined variable: limit C:\Users\root\Desktop\UniServerZ\www\sispakari\application\models\Gejala_model.php 9
ERROR - 2018-05-26 10:16:16 --> Severity: Notice --> Undefined variable: start C:\Users\root\Desktop\UniServerZ\www\sispakari\application\models\Gejala_model.php 9
ERROR - 2018-05-26 10:16:16 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:16:43 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:16:56 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:35:56 --> Severity: Notice --> Undefined index: gejala C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 54
ERROR - 2018-05-26 10:35:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 54
ERROR - 2018-05-26 10:35:57 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:36:15 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:37:16 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:37:23 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:37:30 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:38:44 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:38:47 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:38:54 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:39:00 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:41:28 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:42:04 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:42:23 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:45:29 --> 404 Page Not Found: Penyakit/index
ERROR - 2018-05-26 10:46:07 --> Severity: Error --> Cannot use object of type mysqli as array C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_penyakit\tambah_penyakit.php 37
ERROR - 2018-05-26 10:47:14 --> Severity: Error --> Cannot use object of type mysqli as array C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_penyakit\tambah_penyakit.php 37
ERROR - 2018-05-26 10:48:05 --> Severity: Warning --> implode(): Invalid arguments passed C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Penyakit.php 39
ERROR - 2018-05-26 10:49:42 --> Severity: Parsing Error --> syntax error, unexpected ';' C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Penyakit.php 39
ERROR - 2018-05-26 10:50:55 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:51:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'G05'%'' at line 6 - Invalid query: SELECT penyakit.kode AS kode_penyakit, gejala.kode AS kode_gejala, penyakit.jenis_penyakit FROM 
                                penyakit
                                LEFT JOIN penyakit_detail ON penyakit.kode = penyakit_detail.penyakit_kode 
                                LEFT JOIN gejala ON gejala.kode = penyakit_detail.gejala_kode
                                WHERE
                                penyakit_detail.gejala_kode LIKE '%'G05'%'
ERROR - 2018-05-26 10:51:00 --> Severity: Error --> Call to a member function result_array() on a non-object C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 66
ERROR - 2018-05-26 10:52:32 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:52:34 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:52:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'G04,G05'%'' at line 6 - Invalid query: SELECT penyakit.kode AS kode_penyakit, gejala.kode AS kode_gejala, penyakit.jenis_penyakit FROM 
                                penyakit
                                LEFT JOIN penyakit_detail ON penyakit.kode = penyakit_detail.penyakit_kode 
                                LEFT JOIN gejala ON gejala.kode = penyakit_detail.gejala_kode
                                WHERE
                                penyakit_detail.gejala_kode LIKE '%'G04,G05'%'
ERROR - 2018-05-26 10:52:37 --> Severity: Error --> Call to a member function result_array() on a non-object C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 63
ERROR - 2018-05-26 10:53:24 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:53:26 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:53:39 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:54:03 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:54:10 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:54:15 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:54:21 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 10:54:30 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:05:23 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:05:58 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:06:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'G05'%'' at line 6 - Invalid query: SELECT penyakit.kode AS kode_penyakit, gejala.kode AS kode_gejala, penyakit.jenis_penyakit FROM 
                                penyakit
                                LEFT JOIN penyakit_detail ON penyakit.kode = penyakit_detail.penyakit_kode 
                                LEFT JOIN gejala ON gejala.kode = penyakit_detail.gejala_kode
                                WHERE
                                penyakit_detail.gejala_kode LIKE '%'G05'%'
ERROR - 2018-05-26 11:06:02 --> Severity: Error --> Call to a member function result_array() on a non-object C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 66
ERROR - 2018-05-26 11:06:05 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:06:39 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:06:45 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:07:06 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:07:20 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:07:43 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:07:50 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:07:56 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:08:18 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:08:24 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:08:36 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:08:48 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:08:55 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:18:52 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:18:57 --> Severity: Notice --> Undefined variable: data C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 65
ERROR - 2018-05-26 11:18:57 --> Severity: Warning --> implode(): Invalid arguments passed C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 65
ERROR - 2018-05-26 11:18:57 --> Severity: Notice --> Array to string conversion C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 75
ERROR - 2018-05-26 11:18:58 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:19:19 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:19:22 --> Severity: Notice --> Undefined variable: data C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 65
ERROR - 2018-05-26 11:19:22 --> Severity: Warning --> implode(): Invalid arguments passed C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 65
ERROR - 2018-05-26 11:19:31 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:19:44 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:21:32 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:22:34 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:22:51 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:22:53 --> Severity: Notice --> Array to string conversion C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 76
ERROR - 2018-05-26 11:22:54 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:23:09 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:23:15 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:23:31 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:35:37 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:35:40 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:36:14 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:36:25 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:49:19 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:49:24 --> Severity: Notice --> Array to string conversion C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 69
ERROR - 2018-05-26 11:49:25 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:49:29 --> Severity: Notice --> Array to string conversion C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 69
ERROR - 2018-05-26 11:49:30 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:50:02 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:50:07 --> Severity: Notice --> Array to string conversion C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 69
ERROR - 2018-05-26 11:50:08 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:51:48 --> Severity: Compile Error --> Can't use method return value in write context C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 56
ERROR - 2018-05-26 11:52:17 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:53:44 --> Severity: Compile Error --> Can't use method return value in write context C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 55
ERROR - 2018-05-26 11:54:53 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:54:55 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:54:56 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:54:56 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:54:56 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:54:56 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:54:58 --> Severity: Notice --> Array to string conversion C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 58
ERROR - 2018-05-26 11:56:32 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:56:34 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 11:56:40 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 12:05:45 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 12:05:49 --> Severity: Notice --> Array to string conversion C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 60
ERROR - 2018-05-26 12:05:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''Array'
                      GROUP BY penyakit_kode HAVING COUNT(*) >= 2' at line 1 - Invalid query: SELECT penyakit_kode FROM penyakit_kode WHERE gejala_kode IN 'Array'
                      GROUP BY penyakit_kode HAVING COUNT(*) >= 2
ERROR - 2018-05-26 12:05:49 --> Severity: Error --> Call to a member function result_array() on a non-object C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 61
ERROR - 2018-05-26 12:06:30 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 12:06:32 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 12:06:36 --> Severity: Notice --> Array to string conversion C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 60
ERROR - 2018-05-26 12:06:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''Array'
                      GROUP BY penyakit_kode HAVING COUNT(*) >= 2' at line 1 - Invalid query: SELECT penyakit_kode FROM penyakit_kode WHERE gejala_kode IN 'Array'
                      GROUP BY penyakit_kode HAVING COUNT(*) >= 2
ERROR - 2018-05-26 12:06:36 --> Severity: Error --> Call to a member function result_array() on a non-object C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 61
ERROR - 2018-05-26 12:06:53 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 12:06:55 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 12:06:58 --> Severity: Notice --> Array to string conversion C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 60
ERROR - 2018-05-26 12:06:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''Array'
                      GROUP BY penyakit_kode HAVING COUNT(*) >= 2' at line 1 - Invalid query: SELECT penyakit_kode FROM penyakit_kode WHERE gejala_kode IN 'Array'
                      GROUP BY penyakit_kode HAVING COUNT(*) >= 2
ERROR - 2018-05-26 12:06:58 --> Severity: Error --> Call to a member function result_array() on a non-object C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 61
ERROR - 2018-05-26 12:07:49 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 12:07:51 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 12:07:54 --> Severity: Notice --> Array to string conversion C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 60
ERROR - 2018-05-26 12:07:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''Array'
                      GROUP BY penyakit_kode HAVING COUNT(*) >= 2' at line 1 - Invalid query: SELECT penyakit_kode FROM penyakit_kode WHERE gejala_kode IN 'Array'
                      GROUP BY penyakit_kode HAVING COUNT(*) >= 2
ERROR - 2018-05-26 12:07:54 --> Severity: Error --> Call to a member function result_array() on a non-object C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 61
ERROR - 2018-05-26 12:08:21 --> Severity: Parsing Error --> syntax error, unexpected '$this' (T_VARIABLE) C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 60
ERROR - 2018-05-26 12:08:34 --> Severity: Parsing Error --> syntax error, unexpected ')' C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 60
ERROR - 2018-05-26 12:08:40 --> Severity: Notice --> Undefined variable: pagination C:\Users\root\Desktop\UniServerZ\www\sispakari\application\views\admin\mod_front\home_konsultasi.php 14
ERROR - 2018-05-26 12:08:44 --> Severity: Notice --> Array to string conversion C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 60
ERROR - 2018-05-26 12:08:44 --> Severity: Warning --> implode(): Argument must be an array C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 60
ERROR - 2018-05-26 12:08:44 --> Query error: Table 'sipari.penyakit_kode' doesn't exist - Invalid query: SELECT penyakit_kode FROM penyakit_kode WHERE gejala_kode IN ('')
                      GROUP BY penyakit_kode HAVING COUNT(*) >= 2
ERROR - 2018-05-26 12:08:44 --> Severity: Error --> Call to a member function result_array() on a non-object C:\Users\root\Desktop\UniServerZ\www\sispakari\application\controllers\Konsultasi.php 61
