<?php
// Koneksi database artikel_db (versi mysqli, pengganti mysql_connect)
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "lat_dbase";

mysqli_report(MYSQLI_REPORT_OFF);

// lakukan koneksi dengan mysql
$connection = mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$connection) {
    echo "Tidak dapat terhubung dengan database";
    exit;
}

// pilih database
$pilih_db = mysqli_select_db($connection, $dbname);
if (!$pilih_db) {
    echo "Tidak dapat memilih database";
    exit;
}
?>
