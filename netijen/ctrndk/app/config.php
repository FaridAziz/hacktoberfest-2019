<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');//KALAU MAU UPLOAD HOSTING KOSONGI AJA YA
define('DB_DATABASE', 'alumni');
$koneksi = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$database = mysqli_select_db($koneksi, DB_DATABASE);
?>
