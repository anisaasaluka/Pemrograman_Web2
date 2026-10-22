
<?php
// hostname or ip of server
$servername = 'localhost';

// username and password
$dbusername = 'root';
$dbpassword = '';

// Koneksi ke server MySQL menggunakan mysqli
$link = mysqli_connect($servername, $dbusername, $dbpassword);

if (!$link) {
    die("Not able to connect to server: " . mysqli_connect_error());
}

if ($link) {
    echo "ok....koneksi berhasil";
}
?>
