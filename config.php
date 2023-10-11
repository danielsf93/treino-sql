<?php
// /home/linux/Documentos/treinos/sql/config.php
define('HOST', 'localhost');
define('USER', 'admin');
define('PASS', 'admin');
define('BASE', 'cadastro');

$conn = new MySQLi(HOST,USER,PASS,BASE);